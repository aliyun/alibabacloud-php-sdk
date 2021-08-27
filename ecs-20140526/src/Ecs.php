<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AcceptInquiredSystemEventRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AcceptInquiredSystemEventResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ActivateRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ActivateRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AddBandwidthPackageIpsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AddBandwidthPackageIpsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AddTagsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AddTagsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateEipAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateEipAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocatePublicIpAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocatePublicIpAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ApplyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ApplyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssociateEipAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssociateEipAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssociateHaVipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssociateHaVipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachClassicLinkVpcRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachClassicLinkVpcResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachKeyPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachKeyPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelCopyImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelCopyImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelImagePipelineExecutionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelImagePipelineExecutionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelPhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelPhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelSimulatedSystemEventsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelSimulatedSystemEventsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ConnectRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ConnectRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ConvertNatPublicIpToEipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ConvertNatPublicIpToEipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopyImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopyImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateActivationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateActivationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCapacityReservationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCapacityReservationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDedicatedBlockStorageClusterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDedicatedBlockStorageClusterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDedicatedHostClusterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDedicatedHostClusterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDemandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDemandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDeploymentSetRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDeploymentSetResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateElasticityAssuranceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateElasticityAssuranceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateForwardEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateForwardEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateHaVipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateHaVipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateHpcClusterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateHpcClusterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageComponentRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageComponentResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateKeyPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePrefixListRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePrefixListResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateResource02Request;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateResource02Response;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouteEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouteEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateStorageSetRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateStorageSetResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVpcRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVpcResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVSwitchRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVSwitchResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeactivateRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeactivateRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteActivationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteActivationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteAutoProvisioningGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteAutoProvisioningGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteBandwidthPackageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteBandwidthPackageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDedicatedHostClusterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDedicatedHostClusterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDemandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDemandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDeploymentSetRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDeploymentSetResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteForwardEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteForwardEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteHaVipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteHaVipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteHpcClusterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteHpcClusterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteImageComponentRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteImageComponentResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteImagePipelineRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteImagePipelineResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteKeyPairsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteKeyPairsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNatGatewayRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNatGatewayResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNetworkInterfacePermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNetworkInterfacePermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeletePhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeletePhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeletePrefixListRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeletePrefixListResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteReplicaPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteReplicaPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouteEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouteEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteStorageSetRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteStorageSetResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVpcRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVpcResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVSwitchRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVSwitchResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeregisterManagedInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeregisterManagedInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeActivationsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeActivationsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClassicLinkInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClassicLinkInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedBlockStorageClustersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedBlockStorageClustersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetSupportedInstanceTypeFamilyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetSupportedInstanceTypeFamilyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskReplicaPairsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskReplicaPairsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttachmentAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttachmentAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypeFamiliesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypeFamiliesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceVncPasswdRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceVncPasswdResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceVncUrlRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceVncUrlResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLimitationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLimitationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeManagedInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeManagedInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourceByTagsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourceByTagsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsUsageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsUsageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetDetailsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetDetailsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeUserBusinessBehaviorRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeUserBusinessBehaviorResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeUserDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeUserDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachClassicLinkVpcRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachClassicLinkVpcResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachKeyPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachKeyPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DisableActivationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DisableActivationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipFillParamsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipFillParamsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipFillProductRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipFillProductResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipNotifyPaidRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipNotifyPaidResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EnablePhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EnablePhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ExportImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ExportImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ExportSnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ExportSnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\GetInstanceConsoleOutputRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\GetInstanceConsoleOutputResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\GetInstanceScreenshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\GetInstanceScreenshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportKeyPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportKeyPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportSnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportSnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InstallCloudAssistantRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InstallCloudAssistantResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InvokeCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InvokeCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InvokeCommandShrinkRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\JoinResourceGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\JoinResourceGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\JoinSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\JoinSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\LeaveSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\LeaveSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoProvisioningGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoProvisioningGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyExRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyExResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCapacityReservationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCapacityReservationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAutoReleaseTimeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAutoReleaseTimeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostClusterAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostClusterAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDemandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDemandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDeploymentSetAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDeploymentSetAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskChargeTypeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskChargeTypeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyEipAddressAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyEipAddressAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyElasticityAssuranceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyElasticityAssuranceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyForwardEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyForwardEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyHaVipAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyHaVipAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyHpcClusterAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyHpcClusterAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageShareGroupPermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageShareGroupPermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageSharePermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageSharePermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttachmentAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttachmentAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAutoReleaseTimeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAutoReleaseTimeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceDeploymentRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceDeploymentResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMaintenanceAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMaintenanceAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMetadataOptionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMetadataOptionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceNetworkSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceNetworkSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceVncPasswdRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceVncPasswdResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceVpcAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceVpcAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyLaunchTemplateDefaultVersionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyLaunchTemplateDefaultVersionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyManagedInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyManagedInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPhysicalConnectionAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPhysicalConnectionAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrepayInstanceSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrepayInstanceSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstanceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstanceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyRouterInterfaceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyRouterInterfaceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyRouterInterfaceSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyRouterInterfaceSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupEgressRuleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupEgressRuleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupRuleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupRuleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySnapshotAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySnapshotAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySnapshotGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySnapshotGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyStorageCapacityUnitAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyStorageCapacityUnitAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyStorageSetAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyStorageSetAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyUserBusinessBehaviorRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyUserBusinessBehaviorResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVirtualBorderRouterAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVirtualBorderRouterAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVpcAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVpcAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVRouterAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVRouterAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVSwitchAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVSwitchAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseReservedInstancesOfferingRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseReservedInstancesOfferingResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReActivateInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReActivateInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RecoverVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RecoverVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RedeployDedicatedHostRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RedeployDedicatedHostResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RedeployInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RedeployInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReInitDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReInitDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseCapacityReservationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseCapacityReservationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseDedicatedHostRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseDedicatedHostResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseEipAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseEipAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleasePublicIpAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleasePublicIpAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RemoveBandwidthPackageIpsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RemoveBandwidthPackageIpsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RemoveTagsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RemoveTagsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReportInstancesStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReportInstancesStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResizeDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResizeDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandShrinkRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\SendFileRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\SendFileResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartElasticityAssuranceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartElasticityAssuranceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartImagePipelineExecutionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartImagePipelineExecutionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartTerminalSessionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartTerminalSessionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInvocationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInvocationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TerminatePhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TerminatePhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TerminateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TerminateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassignIpv6AddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassignIpv6AddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassignPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassignPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassociateEipAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassociateEipAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassociateHaVipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassociateHaVipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ecs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-beijing'                  => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hongkong'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'ap-southeast-1'              => 'ecs-cn-hangzhou.aliyuncs.com',
            'us-west-1'                   => 'ecs-cn-hangzhou.aliyuncs.com',
            'us-east-1'                   => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ecs.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ecs.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ecs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ecs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ecs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-edge-1'                   => 'ecs.cn-qingdao-nebula.aliyuncs.com',
            'cn-fujian'                   => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ecs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ecs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-inner'           => 'ecs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ecs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-wuhan'                    => 'ecs.aliyuncs.com',
            'cn-yushanfang'               => 'ecs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ecs.cn-zhangjiakou.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ecs.cn-qingdao-nebula.aliyuncs.com',
            'eu-west-1-oxs'               => 'ecs.cn-shenzhen-cloudstone.aliyuncs.com',
            'rus-west-1-pop'              => 'ecs.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AcceptInquiredSystemEventRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AcceptInquiredSystemEventResponse
     */
    public function acceptInquiredSystemEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AcceptInquiredSystemEventResponse::fromMap($this->doRPCRequest('AcceptInquiredSystemEvent', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AcceptInquiredSystemEventRequest $request
     *
     * @return AcceptInquiredSystemEventResponse
     */
    public function acceptInquiredSystemEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptInquiredSystemEventWithOptions($request, $runtime);
    }

    /**
     * @param ActivateRouterInterfaceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ActivateRouterInterfaceResponse
     */
    public function activateRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActivateRouterInterfaceResponse::fromMap($this->doRPCRequest('ActivateRouterInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ActivateRouterInterfaceRequest $request
     *
     * @return ActivateRouterInterfaceResponse
     */
    public function activateRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param AddBandwidthPackageIpsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddBandwidthPackageIpsResponse
     */
    public function addBandwidthPackageIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddBandwidthPackageIpsResponse::fromMap($this->doRPCRequest('AddBandwidthPackageIps', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddBandwidthPackageIpsRequest $request
     *
     * @return AddBandwidthPackageIpsResponse
     */
    public function addBandwidthPackageIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBandwidthPackageIpsWithOptions($request, $runtime);
    }

    /**
     * @param AddTagsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddTagsResponse
     */
    public function addTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTagsResponse::fromMap($this->doRPCRequest('AddTags', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddTagsRequest $request
     *
     * @return AddTagsResponse
     */
    public function addTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsWithOptions($request, $runtime);
    }

    /**
     * @param AllocateDedicatedHostsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AllocateDedicatedHostsResponse
     */
    public function allocateDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateDedicatedHostsResponse::fromMap($this->doRPCRequest('AllocateDedicatedHosts', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocateDedicatedHostsRequest $request
     *
     * @return AllocateDedicatedHostsResponse
     */
    public function allocateDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param AllocateEipAddressRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateEipAddressResponse::fromMap($this->doRPCRequest('AllocateEipAddress', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocateEipAddressRequest $request
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param AllocatePublicIpAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AllocatePublicIpAddressResponse
     */
    public function allocatePublicIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocatePublicIpAddressResponse::fromMap($this->doRPCRequest('AllocatePublicIpAddress', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocatePublicIpAddressRequest $request
     *
     * @return AllocatePublicIpAddressResponse
     */
    public function allocatePublicIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePublicIpAddressWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->doRPCRequest('ApplyAutoSnapshotPolicy', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AssignIpv6AddressesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssignIpv6AddressesResponse
     */
    public function assignIpv6AddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssignIpv6AddressesResponse::fromMap($this->doRPCRequest('AssignIpv6Addresses', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssignIpv6AddressesRequest $request
     *
     * @return AssignIpv6AddressesResponse
     */
    public function assignIpv6Addresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignIpv6AddressesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssignPrivateIpAddressesResponse::fromMap($this->doRPCRequest('AssignPrivateIpAddresses', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AssociateEipAddressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateEipAddressResponse::fromMap($this->doRPCRequest('AssociateEipAddress', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateEipAddressRequest $request
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param AssociateHaVipRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AssociateHaVipResponse
     */
    public function associateHaVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateHaVipResponse::fromMap($this->doRPCRequest('AssociateHaVip', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AttachClassicLinkVpcRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AttachClassicLinkVpcResponse
     */
    public function attachClassicLinkVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachClassicLinkVpcResponse::fromMap($this->doRPCRequest('AttachClassicLinkVpc', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachClassicLinkVpcRequest $request
     *
     * @return AttachClassicLinkVpcResponse
     */
    public function attachClassicLinkVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachClassicLinkVpcWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachDiskResponse::fromMap($this->doRPCRequest('AttachDisk', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AttachInstanceRamRoleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AttachInstanceRamRoleResponse
     */
    public function attachInstanceRamRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachInstanceRamRoleResponse::fromMap($this->doRPCRequest('AttachInstanceRamRole', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachInstanceRamRoleRequest $request
     *
     * @return AttachInstanceRamRoleResponse
     */
    public function attachInstanceRamRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachInstanceRamRoleWithOptions($request, $runtime);
    }

    /**
     * @param AttachKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AttachKeyPairResponse
     */
    public function attachKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachKeyPairResponse::fromMap($this->doRPCRequest('AttachKeyPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachKeyPairRequest $request
     *
     * @return AttachKeyPairResponse
     */
    public function attachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachKeyPairWithOptions($request, $runtime);
    }

    /**
     * @param AttachNetworkInterfaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AttachNetworkInterfaceResponse
     */
    public function attachNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachNetworkInterfaceResponse::fromMap($this->doRPCRequest('AttachNetworkInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AuthorizeSecurityGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AuthorizeSecurityGroupResponse::fromMap($this->doRPCRequest('AuthorizeSecurityGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AuthorizeSecurityGroupEgressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AuthorizeSecurityGroupEgressResponse::fromMap($this->doRPCRequest('AuthorizeSecurityGroupEgress', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CancelAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->doRPCRequest('CancelAutoSnapshotPolicy', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CancelCopyImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelCopyImageResponse
     */
    public function cancelCopyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelCopyImageResponse::fromMap($this->doRPCRequest('CancelCopyImage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CancelImagePipelineExecutionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelImagePipelineExecutionResponse
     */
    public function cancelImagePipelineExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelImagePipelineExecutionResponse::fromMap($this->doRPCRequest('CancelImagePipelineExecution', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelImagePipelineExecutionRequest $request
     *
     * @return CancelImagePipelineExecutionResponse
     */
    public function cancelImagePipelineExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelImagePipelineExecutionWithOptions($request, $runtime);
    }

    /**
     * @param CancelPhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelPhysicalConnectionResponse
     */
    public function cancelPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelPhysicalConnectionResponse::fromMap($this->doRPCRequest('CancelPhysicalConnection', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelPhysicalConnectionRequest $request
     *
     * @return CancelPhysicalConnectionResponse
     */
    public function cancelPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CancelSimulatedSystemEventsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CancelSimulatedSystemEventsResponse
     */
    public function cancelSimulatedSystemEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelSimulatedSystemEventsResponse::fromMap($this->doRPCRequest('CancelSimulatedSystemEvents', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelSimulatedSystemEventsRequest $request
     *
     * @return CancelSimulatedSystemEventsResponse
     */
    public function cancelSimulatedSystemEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSimulatedSystemEventsWithOptions($request, $runtime);
    }

    /**
     * @param CancelTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelTaskResponse::fromMap($this->doRPCRequest('CancelTask', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelTaskRequest $request
     *
     * @return CancelTaskResponse
     */
    public function cancelTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelTaskWithOptions($request, $runtime);
    }

    /**
     * @param ConnectRouterInterfaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConnectRouterInterfaceResponse
     */
    public function connectRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConnectRouterInterfaceResponse::fromMap($this->doRPCRequest('ConnectRouterInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConnectRouterInterfaceRequest $request
     *
     * @return ConnectRouterInterfaceResponse
     */
    public function connectRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->connectRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param ConvertNatPublicIpToEipRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConvertNatPublicIpToEipResponse
     */
    public function convertNatPublicIpToEipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConvertNatPublicIpToEipResponse::fromMap($this->doRPCRequest('ConvertNatPublicIpToEip', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConvertNatPublicIpToEipRequest $request
     *
     * @return ConvertNatPublicIpToEipResponse
     */
    public function convertNatPublicIpToEip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertNatPublicIpToEipWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyImageResponse::fromMap($this->doRPCRequest('CopyImage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CopySnapshotRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CopySnapshotResponse
     */
    public function copySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopySnapshotResponse::fromMap($this->doRPCRequest('CopySnapshot', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateActivationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateActivationResponse
     */
    public function createActivationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateActivationResponse::fromMap($this->doRPCRequest('CreateActivation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateActivationRequest $request
     *
     * @return CreateActivationResponse
     */
    public function createActivation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createActivationWithOptions($request, $runtime);
    }

    /**
     * @param CreateAutoProvisioningGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateAutoProvisioningGroupResponse
     */
    public function createAutoProvisioningGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAutoProvisioningGroupResponse::fromMap($this->doRPCRequest('CreateAutoProvisioningGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAutoProvisioningGroupRequest $request
     *
     * @return CreateAutoProvisioningGroupResponse
     */
    public function createAutoProvisioningGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoProvisioningGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->doRPCRequest('CreateAutoSnapshotPolicy', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateCapacityReservationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCapacityReservationResponse
     */
    public function createCapacityReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCapacityReservationResponse::fromMap($this->doRPCRequest('CreateCapacityReservation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCapacityReservationRequest $request
     *
     * @return CreateCapacityReservationResponse
     */
    public function createCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCommandResponse
     */
    public function createCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCommandResponse::fromMap($this->doRPCRequest('CreateCommand', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCommandRequest $request
     *
     * @return CreateCommandResponse
     */
    public function createCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommandWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedBlockStorageClusterRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateDedicatedBlockStorageClusterResponse
     */
    public function createDedicatedBlockStorageClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedBlockStorageClusterResponse::fromMap($this->doRPCRequest('CreateDedicatedBlockStorageCluster', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDedicatedBlockStorageClusterRequest $request
     *
     * @return CreateDedicatedBlockStorageClusterResponse
     */
    public function createDedicatedBlockStorageCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedBlockStorageClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostClusterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDedicatedHostClusterResponse
     */
    public function createDedicatedHostClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedHostClusterResponse::fromMap($this->doRPCRequest('CreateDedicatedHostCluster', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostClusterRequest $request
     *
     * @return CreateDedicatedHostClusterResponse
     */
    public function createDedicatedHostCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDemandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDemandResponse
     */
    public function createDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDemandResponse::fromMap($this->doRPCRequest('CreateDemand', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDemandRequest $request
     *
     * @return CreateDemandResponse
     */
    public function createDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDemandWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeploymentSetRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDeploymentSetResponse
     */
    public function createDeploymentSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeploymentSetResponse::fromMap($this->doRPCRequest('CreateDeploymentSet', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDeploymentSetRequest $request
     *
     * @return CreateDeploymentSetResponse
     */
    public function createDeploymentSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeploymentSetWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDiskResponse::fromMap($this->doRPCRequest('CreateDisk', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDiskReplicaPairResponse
     */
    public function createDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDiskReplicaPairResponse::fromMap($this->doRPCRequest('CreateDiskReplicaPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDiskReplicaPairRequest $request
     *
     * @return CreateDiskReplicaPairResponse
     */
    public function createDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * @param CreateElasticityAssuranceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateElasticityAssuranceResponse
     */
    public function createElasticityAssuranceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateElasticityAssuranceResponse::fromMap($this->doRPCRequest('CreateElasticityAssurance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateElasticityAssuranceRequest $request
     *
     * @return CreateElasticityAssuranceResponse
     */
    public function createElasticityAssurance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticityAssuranceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateForwardEntryResponse::fromMap($this->doRPCRequest('CreateForwardEntry', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateHaVipRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateHaVipResponse
     */
    public function createHaVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHaVipResponse::fromMap($this->doRPCRequest('CreateHaVip', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateHpcClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateHpcClusterResponse
     */
    public function createHpcClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHpcClusterResponse::fromMap($this->doRPCRequest('CreateHpcCluster', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateHpcClusterRequest $request
     *
     * @return CreateHpcClusterResponse
     */
    public function createHpcCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHpcClusterWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateImageResponse::fromMap($this->doRPCRequest('CreateImage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateImageComponentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateImageComponentResponse
     */
    public function createImageComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateImageComponentResponse::fromMap($this->doRPCRequest('CreateImageComponent', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateImageComponentRequest $request
     *
     * @return CreateImageComponentResponse
     */
    public function createImageComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageComponentWithOptions($request, $runtime);
    }

    /**
     * @param CreateImagePipelineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateImagePipelineResponse
     */
    public function createImagePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateImagePipelineResponse::fromMap($this->doRPCRequest('CreateImagePipeline', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateImagePipelineRequest $request
     *
     * @return CreateImagePipelineResponse
     */
    public function createImagePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImagePipelineWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateKeyPairResponse::fromMap($this->doRPCRequest('CreateKeyPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateLaunchTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateLaunchTemplateResponse
     */
    public function createLaunchTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLaunchTemplateResponse::fromMap($this->doRPCRequest('CreateLaunchTemplate', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLaunchTemplateRequest $request
     *
     * @return CreateLaunchTemplateResponse
     */
    public function createLaunchTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLaunchTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateLaunchTemplateVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateLaunchTemplateVersionResponse
     */
    public function createLaunchTemplateVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLaunchTemplateVersionResponse::fromMap($this->doRPCRequest('CreateLaunchTemplateVersion', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLaunchTemplateVersionRequest $request
     *
     * @return CreateLaunchTemplateVersionResponse
     */
    public function createLaunchTemplateVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLaunchTemplateVersionWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNatGatewayResponse::fromMap($this->doRPCRequest('CreateNatGateway', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateNetworkInterfaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateNetworkInterfaceResponse
     */
    public function createNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNetworkInterfaceResponse::fromMap($this->doRPCRequest('CreateNetworkInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateNetworkInterfacePermissionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateNetworkInterfacePermissionResponse
     */
    public function createNetworkInterfacePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNetworkInterfacePermissionResponse::fromMap($this->doRPCRequest('CreateNetworkInterfacePermission', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNetworkInterfacePermissionRequest $request
     *
     * @return CreateNetworkInterfacePermissionResponse
     */
    public function createNetworkInterfacePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkInterfacePermissionWithOptions($request, $runtime);
    }

    /**
     * @param CreatePhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePhysicalConnectionResponse
     */
    public function createPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePhysicalConnectionResponse::fromMap($this->doRPCRequest('CreatePhysicalConnection', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePhysicalConnectionRequest $request
     *
     * @return CreatePhysicalConnectionResponse
     */
    public function createPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreatePrefixListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePrefixListResponse
     */
    public function createPrefixListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePrefixListResponse::fromMap($this->doRPCRequest('CreatePrefixList', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePrefixListRequest $request
     *
     * @return CreatePrefixListResponse
     */
    public function createPrefixList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrefixListWithOptions($request, $runtime);
    }

    /**
     * @param CreateResource02Request $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateResource02Response
     */
    public function createResource02WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateResource02Response::fromMap($this->doRPCRequest('CreateResource02', '2014-05-26', 'HTTPS', 'PUT', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateResource02Request $request
     *
     * @return CreateResource02Response
     */
    public function createResource02($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResource02WithOptions($request, $runtime);
    }

    /**
     * @param CreateRouteEntryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRouteEntryResponse
     */
    public function createRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRouteEntryResponse::fromMap($this->doRPCRequest('CreateRouteEntry', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRouteEntryRequest $request
     *
     * @return CreateRouteEntryResponse
     */
    public function createRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreateRouterInterfaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateRouterInterfaceResponse
     */
    public function createRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRouterInterfaceResponse::fromMap($this->doRPCRequest('CreateRouterInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRouterInterfaceRequest $request
     *
     * @return CreateRouterInterfaceResponse
     */
    public function createRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouterInterfaceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSecurityGroupResponse::fromMap($this->doRPCRequest('CreateSecurityGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSimulatedSystemEventsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateSimulatedSystemEventsResponse
     */
    public function createSimulatedSystemEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSimulatedSystemEventsResponse::fromMap($this->doRPCRequest('CreateSimulatedSystemEvents', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSimulatedSystemEventsRequest $request
     *
     * @return CreateSimulatedSystemEventsResponse
     */
    public function createSimulatedSystemEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimulatedSystemEventsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSnapshotResponse::fromMap($this->doRPCRequest('CreateSnapshot', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSnapshotGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSnapshotGroupResponse
     */
    public function createSnapshotGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSnapshotGroupResponse::fromMap($this->doRPCRequest('CreateSnapshotGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSnapshotGroupRequest $request
     *
     * @return CreateSnapshotGroupResponse
     */
    public function createSnapshotGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateStorageSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateStorageSetResponse
     */
    public function createStorageSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateStorageSetResponse::fromMap($this->doRPCRequest('CreateStorageSet', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateStorageSetRequest $request
     *
     * @return CreateStorageSetResponse
     */
    public function createStorageSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStorageSetWithOptions($request, $runtime);
    }

    /**
     * @param CreateVirtualBorderRouterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateVirtualBorderRouterResponse
     */
    public function createVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVirtualBorderRouterResponse::fromMap($this->doRPCRequest('CreateVirtualBorderRouter', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVirtualBorderRouterRequest $request
     *
     * @return CreateVirtualBorderRouterResponse
     */
    public function createVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpcRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateVpcResponse
     */
    public function createVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpcResponse::fromMap($this->doRPCRequest('CreateVpc', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVpcRequest $request
     *
     * @return CreateVpcResponse
     */
    public function createVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVSwitchResponse::fromMap($this->doRPCRequest('CreateVSwitch', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeactivateRouterInterfaceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeactivateRouterInterfaceResponse
     */
    public function deactivateRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeactivateRouterInterfaceResponse::fromMap($this->doRPCRequest('DeactivateRouterInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeactivateRouterInterfaceRequest $request
     *
     * @return DeactivateRouterInterfaceResponse
     */
    public function deactivateRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteActivationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteActivationResponse
     */
    public function deleteActivationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteActivationResponse::fromMap($this->doRPCRequest('DeleteActivation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteActivationRequest $request
     *
     * @return DeleteActivationResponse
     */
    public function deleteActivation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteActivationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAutoProvisioningGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAutoProvisioningGroupResponse
     */
    public function deleteAutoProvisioningGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAutoProvisioningGroupResponse::fromMap($this->doRPCRequest('DeleteAutoProvisioningGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAutoProvisioningGroupRequest $request
     *
     * @return DeleteAutoProvisioningGroupResponse
     */
    public function deleteAutoProvisioningGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoProvisioningGroupWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->doRPCRequest('DeleteAutoSnapshotPolicy', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBandwidthPackageResponse::fromMap($this->doRPCRequest('DeleteBandwidthPackage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteBandwidthPackageRequest $request
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCommandResponse::fromMap($this->doRPCRequest('DeleteCommand', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCommandRequest $request
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommandWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedHostClusterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDedicatedHostClusterResponse
     */
    public function deleteDedicatedHostClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDedicatedHostClusterResponse::fromMap($this->doRPCRequest('DeleteDedicatedHostCluster', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDedicatedHostClusterRequest $request
     *
     * @return DeleteDedicatedHostClusterResponse
     */
    public function deleteDedicatedHostCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDemandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDemandResponse
     */
    public function deleteDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDemandResponse::fromMap($this->doRPCRequest('DeleteDemand', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDemandRequest $request
     *
     * @return DeleteDemandResponse
     */
    public function deleteDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDemandWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeploymentSetRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDeploymentSetResponse
     */
    public function deleteDeploymentSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeploymentSetResponse::fromMap($this->doRPCRequest('DeleteDeploymentSet', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDeploymentSetRequest $request
     *
     * @return DeleteDeploymentSetResponse
     */
    public function deleteDeploymentSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeploymentSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteDiskResponse
     */
    public function deleteDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDiskResponse::fromMap($this->doRPCRequest('DeleteDisk', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDiskReplicaPairResponse
     */
    public function deleteDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDiskReplicaPairResponse::fromMap($this->doRPCRequest('DeleteDiskReplicaPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDiskReplicaPairRequest $request
     *
     * @return DeleteDiskReplicaPairResponse
     */
    public function deleteDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskReplicaPairWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteForwardEntryResponse::fromMap($this->doRPCRequest('DeleteForwardEntry', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteHaVipRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteHaVipResponse
     */
    public function deleteHaVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHaVipResponse::fromMap($this->doRPCRequest('DeleteHaVip', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHaVipRequest $request
     *
     * @return DeleteHaVipResponse
     */
    public function deleteHaVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHaVipWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHpcClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteHpcClusterResponse
     */
    public function deleteHpcClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHpcClusterResponse::fromMap($this->doRPCRequest('DeleteHpcCluster', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHpcClusterRequest $request
     *
     * @return DeleteHpcClusterResponse
     */
    public function deleteHpcCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHpcClusterWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageResponse::fromMap($this->doRPCRequest('DeleteImage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteImageComponentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteImageComponentResponse
     */
    public function deleteImageComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageComponentResponse::fromMap($this->doRPCRequest('DeleteImageComponent', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageComponentRequest $request
     *
     * @return DeleteImageComponentResponse
     */
    public function deleteImageComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageComponentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImagePipelineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteImagePipelineResponse
     */
    public function deleteImagePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImagePipelineResponse::fromMap($this->doRPCRequest('DeleteImagePipeline', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImagePipelineRequest $request
     *
     * @return DeleteImagePipelineResponse
     */
    public function deleteImagePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagePipelineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstancesResponse::fromMap($this->doRPCRequest('DeleteInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstancesRequest $request
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteKeyPairsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteKeyPairsResponse::fromMap($this->doRPCRequest('DeleteKeyPairs', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteLaunchTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteLaunchTemplateResponse
     */
    public function deleteLaunchTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLaunchTemplateResponse::fromMap($this->doRPCRequest('DeleteLaunchTemplate', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLaunchTemplateRequest $request
     *
     * @return DeleteLaunchTemplateResponse
     */
    public function deleteLaunchTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLaunchTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLaunchTemplateVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteLaunchTemplateVersionResponse
     */
    public function deleteLaunchTemplateVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLaunchTemplateVersionResponse::fromMap($this->doRPCRequest('DeleteLaunchTemplateVersion', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLaunchTemplateVersionRequest $request
     *
     * @return DeleteLaunchTemplateVersionResponse
     */
    public function deleteLaunchTemplateVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLaunchTemplateVersionWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNatGatewayResponse::fromMap($this->doRPCRequest('DeleteNatGateway', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteNetworkInterfaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteNetworkInterfaceResponse
     */
    public function deleteNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNetworkInterfaceResponse::fromMap($this->doRPCRequest('DeleteNetworkInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNetworkInterfaceRequest $request
     *
     * @return DeleteNetworkInterfaceResponse
     */
    public function deleteNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkInterfacePermissionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteNetworkInterfacePermissionResponse
     */
    public function deleteNetworkInterfacePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNetworkInterfacePermissionResponse::fromMap($this->doRPCRequest('DeleteNetworkInterfacePermission', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNetworkInterfacePermissionRequest $request
     *
     * @return DeleteNetworkInterfacePermissionResponse
     */
    public function deleteNetworkInterfacePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkInterfacePermissionWithOptions($request, $runtime);
    }

    /**
     * @param DeletePhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeletePhysicalConnectionResponse
     */
    public function deletePhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePhysicalConnectionResponse::fromMap($this->doRPCRequest('DeletePhysicalConnection', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePhysicalConnectionRequest $request
     *
     * @return DeletePhysicalConnectionResponse
     */
    public function deletePhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeletePrefixListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeletePrefixListResponse
     */
    public function deletePrefixListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePrefixListResponse::fromMap($this->doRPCRequest('DeletePrefixList', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePrefixListRequest $request
     *
     * @return DeletePrefixListResponse
     */
    public function deletePrefixList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrefixListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteReplicaPairRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteReplicaPairResponse
     */
    public function deleteReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteReplicaPairResponse::fromMap($this->doRPCRequest('DeleteReplicaPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteReplicaPairRequest $request
     *
     * @return DeleteReplicaPairResponse
     */
    public function deleteReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReplicaPairWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRouteEntryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRouteEntryResponse
     */
    public function deleteRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRouteEntryResponse::fromMap($this->doRPCRequest('DeleteRouteEntry', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRouteEntryRequest $request
     *
     * @return DeleteRouteEntryResponse
     */
    public function deleteRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRouterInterfaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteRouterInterfaceResponse
     */
    public function deleteRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRouterInterfaceResponse::fromMap($this->doRPCRequest('DeleteRouterInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRouterInterfaceRequest $request
     *
     * @return DeleteRouterInterfaceResponse
     */
    public function deleteRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSecurityGroupResponse::fromMap($this->doRPCRequest('DeleteSecurityGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSnapshotResponse::fromMap($this->doRPCRequest('DeleteSnapshot', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSnapshotGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSnapshotGroupResponse
     */
    public function deleteSnapshotGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSnapshotGroupResponse::fromMap($this->doRPCRequest('DeleteSnapshotGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSnapshotGroupRequest $request
     *
     * @return DeleteSnapshotGroupResponse
     */
    public function deleteSnapshotGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStorageSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteStorageSetResponse
     */
    public function deleteStorageSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteStorageSetResponse::fromMap($this->doRPCRequest('DeleteStorageSet', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteStorageSetRequest $request
     *
     * @return DeleteStorageSetResponse
     */
    public function deleteStorageSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStorageSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVirtualBorderRouterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteVirtualBorderRouterResponse
     */
    public function deleteVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVirtualBorderRouterResponse::fromMap($this->doRPCRequest('DeleteVirtualBorderRouter', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVirtualBorderRouterRequest $request
     *
     * @return DeleteVirtualBorderRouterResponse
     */
    public function deleteVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpcRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteVpcResponse
     */
    public function deleteVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpcResponse::fromMap($this->doRPCRequest('DeleteVpc', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVpcRequest $request
     *
     * @return DeleteVpcResponse
     */
    public function deleteVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVSwitchResponse::fromMap($this->doRPCRequest('DeleteVSwitch', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeregisterManagedInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeregisterManagedInstanceResponse
     */
    public function deregisterManagedInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeregisterManagedInstanceResponse::fromMap($this->doRPCRequest('DeregisterManagedInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeregisterManagedInstanceRequest $request
     *
     * @return DeregisterManagedInstanceResponse
     */
    public function deregisterManagedInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterManagedInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessPointsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccessPointsResponse::fromMap($this->doRPCRequest('DescribeAccessPoints', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccessPointsRequest $request
     *
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessPointsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAccountAttributesResponse
     */
    public function describeAccountAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountAttributesResponse::fromMap($this->doRPCRequest('DescribeAccountAttributes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccountAttributesRequest $request
     *
     * @return DescribeAccountAttributesResponse
     */
    public function describeAccountAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeActivationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeActivationsResponse
     */
    public function describeActivationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeActivationsResponse::fromMap($this->doRPCRequest('DescribeActivations', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeActivationsRequest $request
     *
     * @return DescribeActivationsResponse
     */
    public function describeActivations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActivationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoProvisioningGroupHistoryRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeAutoProvisioningGroupHistoryResponse
     */
    public function describeAutoProvisioningGroupHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoProvisioningGroupHistoryResponse::fromMap($this->doRPCRequest('DescribeAutoProvisioningGroupHistory', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoProvisioningGroupHistoryRequest $request
     *
     * @return DescribeAutoProvisioningGroupHistoryResponse
     */
    public function describeAutoProvisioningGroupHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoProvisioningGroupHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoProvisioningGroupInstancesRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeAutoProvisioningGroupInstancesResponse
     */
    public function describeAutoProvisioningGroupInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoProvisioningGroupInstancesResponse::fromMap($this->doRPCRequest('DescribeAutoProvisioningGroupInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoProvisioningGroupInstancesRequest $request
     *
     * @return DescribeAutoProvisioningGroupInstancesResponse
     */
    public function describeAutoProvisioningGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoProvisioningGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoProvisioningGroupsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAutoProvisioningGroupsResponse
     */
    public function describeAutoProvisioningGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoProvisioningGroupsResponse::fromMap($this->doRPCRequest('DescribeAutoProvisioningGroups', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoProvisioningGroupsRequest $request
     *
     * @return DescribeAutoProvisioningGroupsResponse
     */
    public function describeAutoProvisioningGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoProvisioningGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoSnapshotPolicyExRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAutoSnapshotPolicyExResponse
     */
    public function describeAutoSnapshotPolicyExWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoSnapshotPolicyExResponse::fromMap($this->doRPCRequest('DescribeAutoSnapshotPolicyEx', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoSnapshotPolicyExRequest $request
     *
     * @return DescribeAutoSnapshotPolicyExResponse
     */
    public function describeAutoSnapshotPolicyEx($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotPolicyExWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandwidthLimitationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBandwidthLimitationResponse
     */
    public function describeBandwidthLimitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBandwidthLimitationResponse::fromMap($this->doRPCRequest('DescribeBandwidthLimitation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBandwidthLimitationRequest $request
     *
     * @return DescribeBandwidthLimitationResponse
     */
    public function describeBandwidthLimitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthLimitationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandwidthPackagesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBandwidthPackagesResponse
     */
    public function describeBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBandwidthPackagesResponse::fromMap($this->doRPCRequest('DescribeBandwidthPackages', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBandwidthPackagesRequest $request
     *
     * @return DescribeBandwidthPackagesResponse
     */
    public function describeBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCapacityReservationInstancesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeCapacityReservationInstancesResponse
     */
    public function describeCapacityReservationInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCapacityReservationInstancesResponse::fromMap($this->doRPCRequest('DescribeCapacityReservationInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCapacityReservationInstancesRequest $request
     *
     * @return DescribeCapacityReservationInstancesResponse
     */
    public function describeCapacityReservationInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapacityReservationInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCapacityReservationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCapacityReservationsResponse
     */
    public function describeCapacityReservationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCapacityReservationsResponse::fromMap($this->doRPCRequest('DescribeCapacityReservations', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCapacityReservationsRequest $request
     *
     * @return DescribeCapacityReservationsResponse
     */
    public function describeCapacityReservations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapacityReservationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClassicLinkInstancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClassicLinkInstancesResponse
     */
    public function describeClassicLinkInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClassicLinkInstancesResponse::fromMap($this->doRPCRequest('DescribeClassicLinkInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClassicLinkInstancesRequest $request
     *
     * @return DescribeClassicLinkInstancesResponse
     */
    public function describeClassicLinkInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClassicLinkInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudAssistantStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudAssistantStatusResponse
     */
    public function describeCloudAssistantStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCloudAssistantStatusResponse::fromMap($this->doRPCRequest('DescribeCloudAssistantStatus', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCloudAssistantStatusRequest $request
     *
     * @return DescribeCloudAssistantStatusResponse
     */
    public function describeCloudAssistantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudAssistantStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClustersResponse::fromMap($this->doRPCRequest('DescribeClusters', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCommandsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCommandsResponse
     */
    public function describeCommandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCommandsResponse::fromMap($this->doRPCRequest('DescribeCommands', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCommandsRequest $request
     *
     * @return DescribeCommandsResponse
     */
    public function describeCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommandsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedBlockStorageClustersRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDedicatedBlockStorageClustersResponse
     */
    public function describeDedicatedBlockStorageClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedBlockStorageClustersResponse::fromMap($this->doRPCRequest('DescribeDedicatedBlockStorageClusters', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedBlockStorageClustersRequest $request
     *
     * @return DescribeDedicatedBlockStorageClustersResponse
     */
    public function describeDedicatedBlockStorageClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedBlockStorageClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostAutoRenewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDedicatedHostAutoRenewResponse
     */
    public function describeDedicatedHostAutoRenewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostAutoRenewResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostAutoRenew', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostAutoRenewRequest $request
     *
     * @return DescribeDedicatedHostAutoRenewResponse
     */
    public function describeDedicatedHostAutoRenew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostAutoRenewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostClustersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDedicatedHostClustersResponse
     */
    public function describeDedicatedHostClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostClustersResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostClusters', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostClustersRequest $request
     *
     * @return DescribeDedicatedHostClustersResponse
     */
    public function describeDedicatedHostClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostsResponse::fromMap($this->doRPCRequest('DescribeDedicatedHosts', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostTypesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDedicatedHostTypesResponse
     */
    public function describeDedicatedHostTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostTypesResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostTypes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostTypesRequest $request
     *
     * @return DescribeDedicatedHostTypesResponse
     */
    public function describeDedicatedHostTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDemandsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDemandsResponse
     */
    public function describeDemandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDemandsResponse::fromMap($this->doRPCRequest('DescribeDemands', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDemandsRequest $request
     *
     * @return DescribeDemandsResponse
     */
    public function describeDemands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDemandsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeploymentSetsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDeploymentSetsResponse
     */
    public function describeDeploymentSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeploymentSetsResponse::fromMap($this->doRPCRequest('DescribeDeploymentSets', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeploymentSetsRequest $request
     *
     * @return DescribeDeploymentSetsResponse
     */
    public function describeDeploymentSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeploymentSetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeploymentSetSupportedInstanceTypeFamilyRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return DescribeDeploymentSetSupportedInstanceTypeFamilyResponse
     */
    public function describeDeploymentSetSupportedInstanceTypeFamilyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeploymentSetSupportedInstanceTypeFamilyResponse::fromMap($this->doRPCRequest('DescribeDeploymentSetSupportedInstanceTypeFamily', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeploymentSetSupportedInstanceTypeFamilyRequest $request
     *
     * @return DescribeDeploymentSetSupportedInstanceTypeFamilyResponse
     */
    public function describeDeploymentSetSupportedInstanceTypeFamily($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeploymentSetSupportedInstanceTypeFamilyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiskMonitorDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDiskMonitorDataResponse
     */
    public function describeDiskMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDiskMonitorDataResponse::fromMap($this->doRPCRequest('DescribeDiskMonitorData', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDiskMonitorDataRequest $request
     *
     * @return DescribeDiskMonitorDataResponse
     */
    public function describeDiskMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiskReplicaPairsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDiskReplicaPairsResponse::fromMap($this->doRPCRequest('DescribeDiskReplicaPairs', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDiskReplicaPairsRequest $request
     *
     * @return DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskReplicaPairsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDisksResponse::fromMap($this->doRPCRequest('DescribeDisks', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDisksFullStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDisksFullStatusResponse
     */
    public function describeDisksFullStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDisksFullStatusResponse::fromMap($this->doRPCRequest('DescribeDisksFullStatus', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDisksFullStatusRequest $request
     *
     * @return DescribeDisksFullStatusResponse
     */
    public function describeDisksFullStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisksFullStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEipAddressesResponse::fromMap($this->doRPCRequest('DescribeEipAddresses', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeEipMonitorDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEipMonitorDataResponse
     */
    public function describeEipMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEipMonitorDataResponse::fromMap($this->doRPCRequest('DescribeEipMonitorData', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEipMonitorDataRequest $request
     *
     * @return DescribeEipMonitorDataResponse
     */
    public function describeEipMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeElasticityAssuranceInstancesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeElasticityAssuranceInstancesResponse
     */
    public function describeElasticityAssuranceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeElasticityAssuranceInstancesResponse::fromMap($this->doRPCRequest('DescribeElasticityAssuranceInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeElasticityAssuranceInstancesRequest $request
     *
     * @return DescribeElasticityAssuranceInstancesResponse
     */
    public function describeElasticityAssuranceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticityAssuranceInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeElasticityAssurancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeElasticityAssurancesResponse
     */
    public function describeElasticityAssurancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeElasticityAssurancesResponse::fromMap($this->doRPCRequest('DescribeElasticityAssurances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeElasticityAssurancesRequest $request
     *
     * @return DescribeElasticityAssurancesResponse
     */
    public function describeElasticityAssurances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticityAssurancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEniMonitorDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEniMonitorDataResponse
     */
    public function describeEniMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEniMonitorDataResponse::fromMap($this->doRPCRequest('DescribeEniMonitorData', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEniMonitorDataRequest $request
     *
     * @return DescribeEniMonitorDataResponse
     */
    public function describeEniMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEniMonitorDataWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeForwardTableEntriesResponse::fromMap($this->doRPCRequest('DescribeForwardTableEntries', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeHaVipsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeHaVipsResponse
     */
    public function describeHaVipsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHaVipsResponse::fromMap($this->doRPCRequest('DescribeHaVips', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeHpcClustersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeHpcClustersResponse
     */
    public function describeHpcClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHpcClustersResponse::fromMap($this->doRPCRequest('DescribeHpcClusters', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHpcClustersRequest $request
     *
     * @return DescribeHpcClustersResponse
     */
    public function describeHpcClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHpcClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageComponentsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeImageComponentsResponse
     */
    public function describeImageComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImageComponentsResponse::fromMap($this->doRPCRequest('DescribeImageComponents', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeImageComponentsRequest $request
     *
     * @return DescribeImageComponentsResponse
     */
    public function describeImageComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageComponentsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageFromFamilyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeImageFromFamilyResponse
     */
    public function describeImageFromFamilyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImageFromFamilyResponse::fromMap($this->doRPCRequest('DescribeImageFromFamily', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeImageFromFamilyRequest $request
     *
     * @return DescribeImageFromFamilyResponse
     */
    public function describeImageFromFamily($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageFromFamilyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImagePipelineExecutionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeImagePipelineExecutionsResponse
     */
    public function describeImagePipelineExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImagePipelineExecutionsResponse::fromMap($this->doRPCRequest('DescribeImagePipelineExecutions', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeImagePipelineExecutionsRequest $request
     *
     * @return DescribeImagePipelineExecutionsResponse
     */
    public function describeImagePipelineExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagePipelineExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImagePipelinesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeImagePipelinesResponse
     */
    public function describeImagePipelinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImagePipelinesResponse::fromMap($this->doRPCRequest('DescribeImagePipelines', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeImagePipelinesRequest $request
     *
     * @return DescribeImagePipelinesResponse
     */
    public function describeImagePipelines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagePipelinesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImagesResponse::fromMap($this->doRPCRequest('DescribeImages', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeImageSharePermissionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImageSharePermissionResponse::fromMap($this->doRPCRequest('DescribeImageSharePermission', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeImageSupportInstanceTypesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeImageSupportInstanceTypesResponse
     */
    public function describeImageSupportInstanceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImageSupportInstanceTypesResponse::fromMap($this->doRPCRequest('DescribeImageSupportInstanceTypes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeImageSupportInstanceTypesRequest $request
     *
     * @return DescribeImageSupportInstanceTypesResponse
     */
    public function describeImageSupportInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSupportInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAttachmentAttributesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeInstanceAttachmentAttributesResponse
     */
    public function describeInstanceAttachmentAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAttachmentAttributesResponse::fromMap($this->doRPCRequest('DescribeInstanceAttachmentAttributes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAttachmentAttributesRequest $request
     *
     * @return DescribeInstanceAttachmentAttributesResponse
     */
    public function describeInstanceAttachmentAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttachmentAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAutoRenewAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAutoRenewAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceHistoryEventsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceHistoryEventsResponse
     */
    public function describeInstanceHistoryEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceHistoryEventsResponse::fromMap($this->doRPCRequest('DescribeInstanceHistoryEvents', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceHistoryEventsRequest $request
     *
     * @return DescribeInstanceHistoryEventsResponse
     */
    public function describeInstanceHistoryEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceHistoryEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceMaintenanceAttributesRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeInstanceMaintenanceAttributesResponse
     */
    public function describeInstanceMaintenanceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceMaintenanceAttributesResponse::fromMap($this->doRPCRequest('DescribeInstanceMaintenanceAttributes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceMaintenanceAttributesRequest $request
     *
     * @return DescribeInstanceMaintenanceAttributesResponse
     */
    public function describeInstanceMaintenanceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMaintenanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceModificationPriceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeInstanceModificationPriceResponse
     */
    public function describeInstanceModificationPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceModificationPriceResponse::fromMap($this->doRPCRequest('DescribeInstanceModificationPrice', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceModificationPriceRequest $request
     *
     * @return DescribeInstanceModificationPriceResponse
     */
    public function describeInstanceModificationPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceModificationPriceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceMonitorDataResponse::fromMap($this->doRPCRequest('DescribeInstanceMonitorData', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceRamRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceRamRoleResponse
     */
    public function describeInstanceRamRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceRamRoleResponse::fromMap($this->doRPCRequest('DescribeInstanceRamRole', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceRamRoleRequest $request
     *
     * @return DescribeInstanceRamRoleResponse
     */
    public function describeInstanceRamRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRamRoleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeInstancesFullStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstancesFullStatusResponse
     */
    public function describeInstancesFullStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesFullStatusResponse::fromMap($this->doRPCRequest('DescribeInstancesFullStatus', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstancesFullStatusRequest $request
     *
     * @return DescribeInstancesFullStatusResponse
     */
    public function describeInstancesFullStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesFullStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceStatusResponse
     */
    public function describeInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceStatusResponse::fromMap($this->doRPCRequest('DescribeInstanceStatus', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceStatusRequest $request
     *
     * @return DescribeInstanceStatusResponse
     */
    public function describeInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTopologyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceTopologyResponse::fromMap($this->doRPCRequest('DescribeInstanceTopology', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceTopologyRequest $request
     *
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTypeFamiliesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInstanceTypeFamiliesResponse
     */
    public function describeInstanceTypeFamiliesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceTypeFamiliesResponse::fromMap($this->doRPCRequest('DescribeInstanceTypeFamilies', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceTypeFamiliesRequest $request
     *
     * @return DescribeInstanceTypeFamiliesResponse
     */
    public function describeInstanceTypeFamilies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypeFamiliesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceTypesResponse::fromMap($this->doRPCRequest('DescribeInstanceTypes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceTypesRequest $request
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceVncPasswdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceVncPasswdResponse
     */
    public function describeInstanceVncPasswdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceVncPasswdResponse::fromMap($this->doRPCRequest('DescribeInstanceVncPasswd', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceVncPasswdRequest $request
     *
     * @return DescribeInstanceVncPasswdResponse
     */
    public function describeInstanceVncPasswd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceVncPasswdWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceVncUrlResponse::fromMap($this->doRPCRequest('DescribeInstanceVncUrl', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInvocationResultsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInvocationResultsResponse
     */
    public function describeInvocationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInvocationResultsResponse::fromMap($this->doRPCRequest('DescribeInvocationResults', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInvocationResultsRequest $request
     *
     * @return DescribeInvocationResultsResponse
     */
    public function describeInvocationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationResultsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInvocationsResponse::fromMap($this->doRPCRequest('DescribeInvocations', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeKeyPairsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeKeyPairsResponse::fromMap($this->doRPCRequest('DescribeKeyPairs', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLaunchTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLaunchTemplatesResponse
     */
    public function describeLaunchTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLaunchTemplatesResponse::fromMap($this->doRPCRequest('DescribeLaunchTemplates', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLaunchTemplatesRequest $request
     *
     * @return DescribeLaunchTemplatesResponse
     */
    public function describeLaunchTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLaunchTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLaunchTemplateVersionsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLaunchTemplateVersionsResponse
     */
    public function describeLaunchTemplateVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLaunchTemplateVersionsResponse::fromMap($this->doRPCRequest('DescribeLaunchTemplateVersions', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLaunchTemplateVersionsRequest $request
     *
     * @return DescribeLaunchTemplateVersionsResponse
     */
    public function describeLaunchTemplateVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLaunchTemplateVersionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLimitationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLimitationResponse
     */
    public function describeLimitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLimitationResponse::fromMap($this->doRPCRequest('DescribeLimitation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLimitationRequest $request
     *
     * @return DescribeLimitationResponse
     */
    public function describeLimitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLimitationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeManagedInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeManagedInstancesResponse
     */
    public function describeManagedInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeManagedInstancesResponse::fromMap($this->doRPCRequest('DescribeManagedInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeManagedInstancesRequest $request
     *
     * @return DescribeManagedInstancesResponse
     */
    public function describeManagedInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeManagedInstancesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNatGatewaysResponse::fromMap($this->doRPCRequest('DescribeNatGateways', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeNetworkInterfaceAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeNetworkInterfaceAttributeResponse
     */
    public function describeNetworkInterfaceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkInterfaceAttributeResponse::fromMap($this->doRPCRequest('DescribeNetworkInterfaceAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNetworkInterfaceAttributeRequest $request
     *
     * @return DescribeNetworkInterfaceAttributeResponse
     */
    public function describeNetworkInterfaceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfaceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkInterfacePermissionsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeNetworkInterfacePermissionsResponse
     */
    public function describeNetworkInterfacePermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkInterfacePermissionsResponse::fromMap($this->doRPCRequest('DescribeNetworkInterfacePermissions', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNetworkInterfacePermissionsRequest $request
     *
     * @return DescribeNetworkInterfacePermissionsResponse
     */
    public function describeNetworkInterfacePermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfacePermissionsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkInterfacesResponse::fromMap($this->doRPCRequest('DescribeNetworkInterfaces', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeNewProjectEipMonitorDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeNewProjectEipMonitorDataResponse
     */
    public function describeNewProjectEipMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNewProjectEipMonitorDataResponse::fromMap($this->doRPCRequest('DescribeNewProjectEipMonitorData', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNewProjectEipMonitorDataRequest $request
     *
     * @return DescribeNewProjectEipMonitorDataResponse
     */
    public function describeNewProjectEipMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNewProjectEipMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhysicalConnectionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePhysicalConnectionsResponse
     */
    public function describePhysicalConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePhysicalConnectionsResponse::fromMap($this->doRPCRequest('DescribePhysicalConnections', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePhysicalConnectionsRequest $request
     *
     * @return DescribePhysicalConnectionsResponse
     */
    public function describePhysicalConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhysicalConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrefixListAssociationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribePrefixListAssociationsResponse
     */
    public function describePrefixListAssociationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePrefixListAssociationsResponse::fromMap($this->doRPCRequest('DescribePrefixListAssociations', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePrefixListAssociationsRequest $request
     *
     * @return DescribePrefixListAssociationsResponse
     */
    public function describePrefixListAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrefixListAssociationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrefixListAttributesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePrefixListAttributesResponse
     */
    public function describePrefixListAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePrefixListAttributesResponse::fromMap($this->doRPCRequest('DescribePrefixListAttributes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePrefixListAttributesRequest $request
     *
     * @return DescribePrefixListAttributesResponse
     */
    public function describePrefixListAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrefixListAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrefixListsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePrefixListsResponse
     */
    public function describePrefixListsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePrefixListsResponse::fromMap($this->doRPCRequest('DescribePrefixLists', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePrefixListsRequest $request
     *
     * @return DescribePrefixListsResponse
     */
    public function describePrefixLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrefixListsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePriceResponse::fromMap($this->doRPCRequest('DescribePrice', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRecommendInstanceTypeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRecommendInstanceTypeResponse
     */
    public function describeRecommendInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecommendInstanceTypeResponse::fromMap($this->doRPCRequest('DescribeRecommendInstanceType', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRecommendInstanceTypeRequest $request
     *
     * @return DescribeRecommendInstanceTypeResponse
     */
    public function describeRecommendInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendInstanceTypeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRenewalPriceResponse::fromMap($this->doRPCRequest('DescribeRenewalPrice', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeReservedInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeReservedInstancesResponse
     */
    public function describeReservedInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeReservedInstancesResponse::fromMap($this->doRPCRequest('DescribeReservedInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeReservedInstancesRequest $request
     *
     * @return DescribeReservedInstancesResponse
     */
    public function describeReservedInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceByTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeResourceByTagsResponse
     */
    public function describeResourceByTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourceByTagsResponse::fromMap($this->doRPCRequest('DescribeResourceByTags', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeResourceByTagsRequest $request
     *
     * @return DescribeResourceByTagsResponse
     */
    public function describeResourceByTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceByTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourcesModificationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeResourcesModificationResponse
     */
    public function describeResourcesModificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourcesModificationResponse::fromMap($this->doRPCRequest('DescribeResourcesModification', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeResourcesModificationRequest $request
     *
     * @return DescribeResourcesModificationResponse
     */
    public function describeResourcesModification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcesModificationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouterInterfacesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRouterInterfacesResponse
     */
    public function describeRouterInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouterInterfacesResponse::fromMap($this->doRPCRequest('DescribeRouterInterfaces', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRouterInterfacesRequest $request
     *
     * @return DescribeRouterInterfacesResponse
     */
    public function describeRouterInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouterInterfacesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteTablesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRouteTablesResponse
     */
    public function describeRouteTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouteTablesResponse::fromMap($this->doRPCRequest('DescribeRouteTables', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRouteTablesRequest $request
     *
     * @return DescribeRouteTablesResponse
     */
    public function describeRouteTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteTablesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupAttributeResponse::fromMap($this->doRPCRequest('DescribeSecurityGroupAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSecurityGroupReferencesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSecurityGroupReferencesResponse
     */
    public function describeSecurityGroupReferencesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupReferencesResponse::fromMap($this->doRPCRequest('DescribeSecurityGroupReferences', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSecurityGroupReferencesRequest $request
     *
     * @return DescribeSecurityGroupReferencesResponse
     */
    public function describeSecurityGroupReferences($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupReferencesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupsResponse::fromMap($this->doRPCRequest('DescribeSecurityGroups', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSendFileResultsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSendFileResultsResponse
     */
    public function describeSendFileResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSendFileResultsResponse::fromMap($this->doRPCRequest('DescribeSendFileResults', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSendFileResultsRequest $request
     *
     * @return DescribeSendFileResultsResponse
     */
    public function describeSendFileResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSendFileResultsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSnapshotGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSnapshotGroupsResponse
     */
    public function describeSnapshotGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSnapshotGroupsResponse::fromMap($this->doRPCRequest('DescribeSnapshotGroups', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSnapshotGroupsRequest $request
     *
     * @return DescribeSnapshotGroupsResponse
     */
    public function describeSnapshotGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSnapshotLinksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSnapshotLinksResponse
     */
    public function describeSnapshotLinksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSnapshotLinksResponse::fromMap($this->doRPCRequest('DescribeSnapshotLinks', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSnapshotLinksRequest $request
     *
     * @return DescribeSnapshotLinksResponse
     */
    public function describeSnapshotLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotLinksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSnapshotMonitorDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSnapshotMonitorDataResponse
     */
    public function describeSnapshotMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSnapshotMonitorDataResponse::fromMap($this->doRPCRequest('DescribeSnapshotMonitorData', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSnapshotMonitorDataRequest $request
     *
     * @return DescribeSnapshotMonitorDataResponse
     */
    public function describeSnapshotMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSnapshotPackageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSnapshotPackageResponse
     */
    public function describeSnapshotPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSnapshotPackageResponse::fromMap($this->doRPCRequest('DescribeSnapshotPackage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSnapshotPackageRequest $request
     *
     * @return DescribeSnapshotPackageResponse
     */
    public function describeSnapshotPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotPackageWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSnapshotsResponse::fromMap($this->doRPCRequest('DescribeSnapshots', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSnapshotsUsageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSnapshotsUsageResponse
     */
    public function describeSnapshotsUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSnapshotsUsageResponse::fromMap($this->doRPCRequest('DescribeSnapshotsUsage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSnapshotsUsageRequest $request
     *
     * @return DescribeSnapshotsUsageResponse
     */
    public function describeSnapshotsUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSpotAdviceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSpotAdviceResponse
     */
    public function describeSpotAdviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSpotAdviceResponse::fromMap($this->doRPCRequest('DescribeSpotAdvice', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSpotAdviceRequest $request
     *
     * @return DescribeSpotAdviceResponse
     */
    public function describeSpotAdvice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpotAdviceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSpotPriceHistoryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSpotPriceHistoryResponse
     */
    public function describeSpotPriceHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSpotPriceHistoryResponse::fromMap($this->doRPCRequest('DescribeSpotPriceHistory', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSpotPriceHistoryRequest $request
     *
     * @return DescribeSpotPriceHistoryResponse
     */
    public function describeSpotPriceHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpotPriceHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageCapacityUnitsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeStorageCapacityUnitsResponse
     */
    public function describeStorageCapacityUnitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStorageCapacityUnitsResponse::fromMap($this->doRPCRequest('DescribeStorageCapacityUnits', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStorageCapacityUnitsRequest $request
     *
     * @return DescribeStorageCapacityUnitsResponse
     */
    public function describeStorageCapacityUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageCapacityUnitsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageSetDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeStorageSetDetailsResponse
     */
    public function describeStorageSetDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStorageSetDetailsResponse::fromMap($this->doRPCRequest('DescribeStorageSetDetails', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStorageSetDetailsRequest $request
     *
     * @return DescribeStorageSetDetailsResponse
     */
    public function describeStorageSetDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageSetDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageSetsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeStorageSetsResponse
     */
    public function describeStorageSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStorageSetsResponse::fromMap($this->doRPCRequest('DescribeStorageSets', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStorageSetsRequest $request
     *
     * @return DescribeStorageSetsResponse
     */
    public function describeStorageSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageSetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagsResponse::fromMap($this->doRPCRequest('DescribeTags', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTaskAttributeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTaskAttributeResponse
     */
    public function describeTaskAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTaskAttributeResponse::fromMap($this->doRPCRequest('DescribeTaskAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTaskAttributeRequest $request
     *
     * @return DescribeTaskAttributeResponse
     */
    public function describeTaskAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTasksResponse::fromMap($this->doRPCRequest('DescribeTasks', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTasksRequest $request
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserBusinessBehaviorRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeUserBusinessBehaviorResponse
     */
    public function describeUserBusinessBehaviorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserBusinessBehaviorResponse::fromMap($this->doRPCRequest('DescribeUserBusinessBehavior', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserBusinessBehaviorRequest $request
     *
     * @return DescribeUserBusinessBehaviorResponse
     */
    public function describeUserBusinessBehavior($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBusinessBehaviorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeUserDataResponse
     */
    public function describeUserDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserDataResponse::fromMap($this->doRPCRequest('DescribeUserData', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserDataRequest $request
     *
     * @return DescribeUserDataResponse
     */
    public function describeUserData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVirtualBorderRoutersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVirtualBorderRoutersResponse
     */
    public function describeVirtualBorderRoutersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVirtualBorderRoutersResponse::fromMap($this->doRPCRequest('DescribeVirtualBorderRouters', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVirtualBorderRoutersRequest $request
     *
     * @return DescribeVirtualBorderRoutersResponse
     */
    public function describeVirtualBorderRouters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualBorderRoutersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVirtualBorderRoutersForPhysicalConnectionRequest $request
     * @param RuntimeOptions                                           $runtime
     *
     * @return DescribeVirtualBorderRoutersForPhysicalConnectionResponse
     */
    public function describeVirtualBorderRoutersForPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVirtualBorderRoutersForPhysicalConnectionResponse::fromMap($this->doRPCRequest('DescribeVirtualBorderRoutersForPhysicalConnection', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVirtualBorderRoutersForPhysicalConnectionRequest $request
     *
     * @return DescribeVirtualBorderRoutersForPhysicalConnectionResponse
     */
    public function describeVirtualBorderRoutersForPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualBorderRoutersForPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcsResponse::fromMap($this->doRPCRequest('DescribeVpcs', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVpcsRequest $request
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVRoutersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeVRoutersResponse
     */
    public function describeVRoutersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVRoutersResponse::fromMap($this->doRPCRequest('DescribeVRouters', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVRoutersRequest $request
     *
     * @return DescribeVRoutersResponse
     */
    public function describeVRouters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVRoutersWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVSwitchesResponse::fromMap($this->doRPCRequest('DescribeVSwitches', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZonesResponse::fromMap($this->doRPCRequest('DescribeZones', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetachClassicLinkVpcRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetachClassicLinkVpcResponse
     */
    public function detachClassicLinkVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachClassicLinkVpcResponse::fromMap($this->doRPCRequest('DetachClassicLinkVpc', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachClassicLinkVpcRequest $request
     *
     * @return DetachClassicLinkVpcResponse
     */
    public function detachClassicLinkVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachClassicLinkVpcWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachDiskResponse::fromMap($this->doRPCRequest('DetachDisk', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetachInstanceRamRoleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetachInstanceRamRoleResponse
     */
    public function detachInstanceRamRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachInstanceRamRoleResponse::fromMap($this->doRPCRequest('DetachInstanceRamRole', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachInstanceRamRoleRequest $request
     *
     * @return DetachInstanceRamRoleResponse
     */
    public function detachInstanceRamRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachInstanceRamRoleWithOptions($request, $runtime);
    }

    /**
     * @param DetachKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetachKeyPairResponse
     */
    public function detachKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachKeyPairResponse::fromMap($this->doRPCRequest('DetachKeyPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachKeyPairRequest $request
     *
     * @return DetachKeyPairResponse
     */
    public function detachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachKeyPairWithOptions($request, $runtime);
    }

    /**
     * @param DetachNetworkInterfaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetachNetworkInterfaceResponse
     */
    public function detachNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachNetworkInterfaceResponse::fromMap($this->doRPCRequest('DetachNetworkInterface', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DisableActivationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableActivationResponse
     */
    public function disableActivationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableActivationResponse::fromMap($this->doRPCRequest('DisableActivation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableActivationRequest $request
     *
     * @return DisableActivationResponse
     */
    public function disableActivation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableActivationWithOptions($request, $runtime);
    }

    /**
     * @param EipFillParamsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EipFillParamsResponse
     */
    public function eipFillParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EipFillParamsResponse::fromMap($this->doRPCRequest('EipFillParams', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EipFillParamsRequest $request
     *
     * @return EipFillParamsResponse
     */
    public function eipFillParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eipFillParamsWithOptions($request, $runtime);
    }

    /**
     * @param EipFillProductRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EipFillProductResponse
     */
    public function eipFillProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EipFillProductResponse::fromMap($this->doRPCRequest('EipFillProduct', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EipFillProductRequest $request
     *
     * @return EipFillProductResponse
     */
    public function eipFillProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eipFillProductWithOptions($request, $runtime);
    }

    /**
     * @param EipNotifyPaidRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EipNotifyPaidResponse
     */
    public function eipNotifyPaidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EipNotifyPaidResponse::fromMap($this->doRPCRequest('EipNotifyPaid', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EipNotifyPaidRequest $request
     *
     * @return EipNotifyPaidResponse
     */
    public function eipNotifyPaid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eipNotifyPaidWithOptions($request, $runtime);
    }

    /**
     * @param EnablePhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnablePhysicalConnectionResponse
     */
    public function enablePhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnablePhysicalConnectionResponse::fromMap($this->doRPCRequest('EnablePhysicalConnection', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnablePhysicalConnectionRequest $request
     *
     * @return EnablePhysicalConnectionResponse
     */
    public function enablePhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enablePhysicalConnectionWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportImageResponse::fromMap($this->doRPCRequest('ExportImage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ExportSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExportSnapshotResponse
     */
    public function exportSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportSnapshotResponse::fromMap($this->doRPCRequest('ExportSnapshot', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExportSnapshotRequest $request
     *
     * @return ExportSnapshotResponse
     */
    public function exportSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceConsoleOutputRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetInstanceConsoleOutputResponse
     */
    public function getInstanceConsoleOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceConsoleOutputResponse::fromMap($this->doRPCRequest('GetInstanceConsoleOutput', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceConsoleOutputRequest $request
     *
     * @return GetInstanceConsoleOutputResponse
     */
    public function getInstanceConsoleOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceConsoleOutputWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceScreenshotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetInstanceScreenshotResponse
     */
    public function getInstanceScreenshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceScreenshotResponse::fromMap($this->doRPCRequest('GetInstanceScreenshot', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceScreenshotRequest $request
     *
     * @return GetInstanceScreenshotResponse
     */
    public function getInstanceScreenshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceScreenshotWithOptions($request, $runtime);
    }

    /**
     * @param ImportImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ImportImageResponse
     */
    public function importImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportImageResponse::fromMap($this->doRPCRequest('ImportImage', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ImportKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportKeyPairResponse::fromMap($this->doRPCRequest('ImportKeyPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ImportSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ImportSnapshotResponse
     */
    public function importSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportSnapshotResponse::fromMap($this->doRPCRequest('ImportSnapshot', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportSnapshotRequest $request
     *
     * @return ImportSnapshotResponse
     */
    public function importSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param InstallCloudAssistantRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return InstallCloudAssistantResponse
     */
    public function installCloudAssistantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InstallCloudAssistantResponse::fromMap($this->doRPCRequest('InstallCloudAssistant', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InstallCloudAssistantRequest $request
     *
     * @return InstallCloudAssistantResponse
     */
    public function installCloudAssistant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudAssistantWithOptions($request, $runtime);
    }

    /**
     * @param InvokeCommandRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return InvokeCommandResponse
     */
    public function invokeCommandWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InvokeCommandShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvokeCommandResponse::fromMap($this->doRPCRequest('InvokeCommand', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InvokeCommandRequest $request
     *
     * @return InvokeCommandResponse
     */
    public function invokeCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeCommandWithOptions($request, $runtime);
    }

    /**
     * @param JoinResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinResourceGroupResponse::fromMap($this->doRPCRequest('JoinResourceGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param JoinResourceGroupRequest $request
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param JoinSecurityGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinSecurityGroupResponse::fromMap($this->doRPCRequest('JoinSecurityGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param LeaveSecurityGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LeaveSecurityGroupResponse::fromMap($this->doRPCRequest('LeaveSecurityGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAutoProvisioningGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyAutoProvisioningGroupResponse
     */
    public function modifyAutoProvisioningGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAutoProvisioningGroupResponse::fromMap($this->doRPCRequest('ModifyAutoProvisioningGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAutoProvisioningGroupRequest $request
     *
     * @return ModifyAutoProvisioningGroupResponse
     */
    public function modifyAutoProvisioningGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoProvisioningGroupWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->doRPCRequest('ModifyAutoSnapshotPolicy', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAutoSnapshotPolicyExRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyAutoSnapshotPolicyExResponse
     */
    public function modifyAutoSnapshotPolicyExWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAutoSnapshotPolicyExResponse::fromMap($this->doRPCRequest('ModifyAutoSnapshotPolicyEx', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAutoSnapshotPolicyExRequest $request
     *
     * @return ModifyAutoSnapshotPolicyExResponse
     */
    public function modifyAutoSnapshotPolicyEx($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyExWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyBandwidthPackageSpecResponse
     */
    public function modifyBandwidthPackageSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBandwidthPackageSpecResponse::fromMap($this->doRPCRequest('ModifyBandwidthPackageSpec', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBandwidthPackageSpecRequest $request
     *
     * @return ModifyBandwidthPackageSpecResponse
     */
    public function modifyBandwidthPackageSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCapacityReservationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyCapacityReservationResponse
     */
    public function modifyCapacityReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCapacityReservationResponse::fromMap($this->doRPCRequest('ModifyCapacityReservation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCapacityReservationRequest $request
     *
     * @return ModifyCapacityReservationResponse
     */
    public function modifyCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyCommandResponse
     */
    public function modifyCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCommandResponse::fromMap($this->doRPCRequest('ModifyCommand', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCommandRequest $request
     *
     * @return ModifyCommandResponse
     */
    public function modifyCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommandWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAutoReleaseTimeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyDedicatedHostAutoReleaseTimeResponse
     */
    public function modifyDedicatedHostAutoReleaseTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostAutoReleaseTimeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostAutoReleaseTime', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAutoReleaseTimeRequest $request
     *
     * @return ModifyDedicatedHostAutoReleaseTimeResponse
     */
    public function modifyDedicatedHostAutoReleaseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAutoReleaseTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAutoRenewAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyDedicatedHostAutoRenewAttributeResponse
     */
    public function modifyDedicatedHostAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostAutoRenewAttributeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostAutoRenewAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAutoRenewAttributeRequest $request
     *
     * @return ModifyDedicatedHostAutoRenewAttributeResponse
     */
    public function modifyDedicatedHostAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostClusterAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyDedicatedHostClusterAttributeResponse
     */
    public function modifyDedicatedHostClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostClusterAttributeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostClusterAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostClusterAttributeRequest $request
     *
     * @return ModifyDedicatedHostClusterAttributeResponse
     */
    public function modifyDedicatedHostClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostsChargeTypeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDedicatedHostsChargeTypeResponse
     */
    public function modifyDedicatedHostsChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostsChargeTypeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostsChargeType', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostsChargeTypeRequest $request
     *
     * @return ModifyDedicatedHostsChargeTypeResponse
     */
    public function modifyDedicatedHostsChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostsChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDemandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDemandResponse
     */
    public function modifyDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDemandResponse::fromMap($this->doRPCRequest('ModifyDemand', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDemandRequest $request
     *
     * @return ModifyDemandResponse
     */
    public function modifyDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDemandWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeploymentSetAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDeploymentSetAttributeResponse
     */
    public function modifyDeploymentSetAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDeploymentSetAttributeResponse::fromMap($this->doRPCRequest('ModifyDeploymentSetAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDeploymentSetAttributeRequest $request
     *
     * @return ModifyDeploymentSetAttributeResponse
     */
    public function modifyDeploymentSetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeploymentSetAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDiskAttributeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDiskAttributeResponse
     */
    public function modifyDiskAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDiskAttributeResponse::fromMap($this->doRPCRequest('ModifyDiskAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDiskAttributeRequest $request
     *
     * @return ModifyDiskAttributeResponse
     */
    public function modifyDiskAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDiskChargeTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDiskChargeTypeResponse
     */
    public function modifyDiskChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDiskChargeTypeResponse::fromMap($this->doRPCRequest('ModifyDiskChargeType', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDiskChargeTypeRequest $request
     *
     * @return ModifyDiskChargeTypeResponse
     */
    public function modifyDiskChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDiskSpecRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDiskSpecResponse
     */
    public function modifyDiskSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDiskSpecResponse::fromMap($this->doRPCRequest('ModifyDiskSpec', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyEipAddressAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyEipAddressAttributeResponse
     */
    public function modifyEipAddressAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyEipAddressAttributeResponse::fromMap($this->doRPCRequest('ModifyEipAddressAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyEipAddressAttributeRequest $request
     *
     * @return ModifyEipAddressAttributeResponse
     */
    public function modifyEipAddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEipAddressAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyElasticityAssuranceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyElasticityAssuranceResponse
     */
    public function modifyElasticityAssuranceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyElasticityAssuranceResponse::fromMap($this->doRPCRequest('ModifyElasticityAssurance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyElasticityAssuranceRequest $request
     *
     * @return ModifyElasticityAssuranceResponse
     */
    public function modifyElasticityAssurance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticityAssuranceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyForwardEntryResponse::fromMap($this->doRPCRequest('ModifyForwardEntry', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyHaVipAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyHaVipAttributeResponse
     */
    public function modifyHaVipAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHaVipAttributeResponse::fromMap($this->doRPCRequest('ModifyHaVipAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyHpcClusterAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyHpcClusterAttributeResponse
     */
    public function modifyHpcClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHpcClusterAttributeResponse::fromMap($this->doRPCRequest('ModifyHpcClusterAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHpcClusterAttributeRequest $request
     *
     * @return ModifyHpcClusterAttributeResponse
     */
    public function modifyHpcClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHpcClusterAttributeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyImageAttributeResponse::fromMap($this->doRPCRequest('ModifyImageAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyImageShareGroupPermissionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyImageShareGroupPermissionResponse
     */
    public function modifyImageShareGroupPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyImageShareGroupPermissionResponse::fromMap($this->doRPCRequest('ModifyImageShareGroupPermission', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyImageShareGroupPermissionRequest $request
     *
     * @return ModifyImageShareGroupPermissionResponse
     */
    public function modifyImageShareGroupPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageShareGroupPermissionWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyImageSharePermissionResponse::fromMap($this->doRPCRequest('ModifyImageSharePermission', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyInstanceAttachmentAttributesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyInstanceAttachmentAttributesResponse
     */
    public function modifyInstanceAttachmentAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAttachmentAttributesResponse::fromMap($this->doRPCRequest('ModifyInstanceAttachmentAttributes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceAttachmentAttributesRequest $request
     *
     * @return ModifyInstanceAttachmentAttributesResponse
     */
    public function modifyInstanceAttachmentAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttachmentAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceAutoReleaseTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyInstanceAutoReleaseTimeResponse
     */
    public function modifyInstanceAutoReleaseTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAutoReleaseTimeResponse::fromMap($this->doRPCRequest('ModifyInstanceAutoReleaseTime', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceAutoReleaseTimeRequest $request
     *
     * @return ModifyInstanceAutoReleaseTimeResponse
     */
    public function modifyInstanceAutoReleaseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoReleaseTimeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAutoRenewAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAutoRenewAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyInstanceChargeTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceChargeTypeResponse::fromMap($this->doRPCRequest('ModifyInstanceChargeType', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyInstanceDeploymentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceDeploymentResponse
     */
    public function modifyInstanceDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceDeploymentResponse::fromMap($this->doRPCRequest('ModifyInstanceDeployment', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceDeploymentRequest $request
     *
     * @return ModifyInstanceDeploymentResponse
     */
    public function modifyInstanceDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceMaintenanceAttributesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyInstanceMaintenanceAttributesResponse
     */
    public function modifyInstanceMaintenanceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceMaintenanceAttributesResponse::fromMap($this->doRPCRequest('ModifyInstanceMaintenanceAttributes', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceMaintenanceAttributesRequest $request
     *
     * @return ModifyInstanceMaintenanceAttributesResponse
     */
    public function modifyInstanceMaintenanceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMaintenanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceMetadataOptionsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyInstanceMetadataOptionsResponse
     */
    public function modifyInstanceMetadataOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceMetadataOptionsResponse::fromMap($this->doRPCRequest('ModifyInstanceMetadataOptions', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceMetadataOptionsRequest $request
     *
     * @return ModifyInstanceMetadataOptionsResponse
     */
    public function modifyInstanceMetadataOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMetadataOptionsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceNetworkSpecRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceNetworkSpecResponse
     */
    public function modifyInstanceNetworkSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceNetworkSpecResponse::fromMap($this->doRPCRequest('ModifyInstanceNetworkSpec', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceNetworkSpecRequest $request
     *
     * @return ModifyInstanceNetworkSpecResponse
     */
    public function modifyInstanceNetworkSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNetworkSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceSpecRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->doRPCRequest('ModifyInstanceSpec', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceSpecRequest $request
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceVncPasswdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceVncPasswdResponse
     */
    public function modifyInstanceVncPasswdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceVncPasswdResponse::fromMap($this->doRPCRequest('ModifyInstanceVncPasswd', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceVncPasswdRequest $request
     *
     * @return ModifyInstanceVncPasswdResponse
     */
    public function modifyInstanceVncPasswd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVncPasswdWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceVpcAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceVpcAttributeResponse
     */
    public function modifyInstanceVpcAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceVpcAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceVpcAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceVpcAttributeRequest $request
     *
     * @return ModifyInstanceVpcAttributeResponse
     */
    public function modifyInstanceVpcAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVpcAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLaunchTemplateDefaultVersionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyLaunchTemplateDefaultVersionResponse
     */
    public function modifyLaunchTemplateDefaultVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLaunchTemplateDefaultVersionResponse::fromMap($this->doRPCRequest('ModifyLaunchTemplateDefaultVersion', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyLaunchTemplateDefaultVersionRequest $request
     *
     * @return ModifyLaunchTemplateDefaultVersionResponse
     */
    public function modifyLaunchTemplateDefaultVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLaunchTemplateDefaultVersionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyManagedInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyManagedInstanceResponse
     */
    public function modifyManagedInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyManagedInstanceResponse::fromMap($this->doRPCRequest('ModifyManagedInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyManagedInstanceRequest $request
     *
     * @return ModifyManagedInstanceResponse
     */
    public function modifyManagedInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyManagedInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkInterfaceAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyNetworkInterfaceAttributeResponse
     */
    public function modifyNetworkInterfaceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNetworkInterfaceAttributeResponse::fromMap($this->doRPCRequest('ModifyNetworkInterfaceAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyPhysicalConnectionAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyPhysicalConnectionAttributeResponse
     */
    public function modifyPhysicalConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPhysicalConnectionAttributeResponse::fromMap($this->doRPCRequest('ModifyPhysicalConnectionAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPhysicalConnectionAttributeRequest $request
     *
     * @return ModifyPhysicalConnectionAttributeResponse
     */
    public function modifyPhysicalConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPhysicalConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPrefixListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyPrefixListResponse
     */
    public function modifyPrefixListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPrefixListResponse::fromMap($this->doRPCRequest('ModifyPrefixList', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPrefixListRequest $request
     *
     * @return ModifyPrefixListResponse
     */
    public function modifyPrefixList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrefixListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPrepayInstanceSpecResponse::fromMap($this->doRPCRequest('ModifyPrepayInstanceSpec', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyReservedInstanceAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyReservedInstanceAttributeResponse
     */
    public function modifyReservedInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyReservedInstanceAttributeResponse::fromMap($this->doRPCRequest('ModifyReservedInstanceAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyReservedInstanceAttributeRequest $request
     *
     * @return ModifyReservedInstanceAttributeResponse
     */
    public function modifyReservedInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReservedInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyReservedInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyReservedInstancesResponse
     */
    public function modifyReservedInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyReservedInstancesResponse::fromMap($this->doRPCRequest('ModifyReservedInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyReservedInstancesRequest $request
     *
     * @return ModifyReservedInstancesResponse
     */
    public function modifyReservedInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReservedInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRouterInterfaceAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyRouterInterfaceAttributeResponse
     */
    public function modifyRouterInterfaceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRouterInterfaceAttributeResponse::fromMap($this->doRPCRequest('ModifyRouterInterfaceAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyRouterInterfaceAttributeRequest $request
     *
     * @return ModifyRouterInterfaceAttributeResponse
     */
    public function modifyRouterInterfaceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouterInterfaceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRouterInterfaceSpecRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyRouterInterfaceSpecResponse
     */
    public function modifyRouterInterfaceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRouterInterfaceSpecResponse::fromMap($this->doRPCRequest('ModifyRouterInterfaceSpec', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyRouterInterfaceSpecRequest $request
     *
     * @return ModifyRouterInterfaceSpecResponse
     */
    public function modifyRouterInterfaceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouterInterfaceSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityGroupAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityGroupAttributeResponse::fromMap($this->doRPCRequest('ModifySecurityGroupAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifySecurityGroupEgressRuleRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifySecurityGroupEgressRuleResponse
     */
    public function modifySecurityGroupEgressRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityGroupEgressRuleResponse::fromMap($this->doRPCRequest('ModifySecurityGroupEgressRule', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySecurityGroupEgressRuleRequest $request
     *
     * @return ModifySecurityGroupEgressRuleResponse
     */
    public function modifySecurityGroupEgressRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupEgressRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityGroupPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifySecurityGroupPolicyResponse
     */
    public function modifySecurityGroupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityGroupPolicyResponse::fromMap($this->doRPCRequest('ModifySecurityGroupPolicy', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySecurityGroupPolicyRequest $request
     *
     * @return ModifySecurityGroupPolicyResponse
     */
    public function modifySecurityGroupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityGroupRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySecurityGroupRuleResponse
     */
    public function modifySecurityGroupRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityGroupRuleResponse::fromMap($this->doRPCRequest('ModifySecurityGroupRule', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySecurityGroupRuleRequest $request
     *
     * @return ModifySecurityGroupRuleResponse
     */
    public function modifySecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupRuleWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySnapshotAttributeResponse::fromMap($this->doRPCRequest('ModifySnapshotAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifySnapshotGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifySnapshotGroupResponse
     */
    public function modifySnapshotGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySnapshotGroupResponse::fromMap($this->doRPCRequest('ModifySnapshotGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySnapshotGroupRequest $request
     *
     * @return ModifySnapshotGroupResponse
     */
    public function modifySnapshotGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySnapshotGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStorageCapacityUnitAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyStorageCapacityUnitAttributeResponse
     */
    public function modifyStorageCapacityUnitAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyStorageCapacityUnitAttributeResponse::fromMap($this->doRPCRequest('ModifyStorageCapacityUnitAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyStorageCapacityUnitAttributeRequest $request
     *
     * @return ModifyStorageCapacityUnitAttributeResponse
     */
    public function modifyStorageCapacityUnitAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStorageCapacityUnitAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStorageSetAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyStorageSetAttributeResponse
     */
    public function modifyStorageSetAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyStorageSetAttributeResponse::fromMap($this->doRPCRequest('ModifyStorageSetAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyStorageSetAttributeRequest $request
     *
     * @return ModifyStorageSetAttributeResponse
     */
    public function modifyStorageSetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStorageSetAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserBusinessBehaviorRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyUserBusinessBehaviorResponse
     */
    public function modifyUserBusinessBehaviorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUserBusinessBehaviorResponse::fromMap($this->doRPCRequest('ModifyUserBusinessBehavior', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyUserBusinessBehaviorRequest $request
     *
     * @return ModifyUserBusinessBehaviorResponse
     */
    public function modifyUserBusinessBehavior($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserBusinessBehaviorWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVirtualBorderRouterAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyVirtualBorderRouterAttributeResponse
     */
    public function modifyVirtualBorderRouterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVirtualBorderRouterAttributeResponse::fromMap($this->doRPCRequest('ModifyVirtualBorderRouterAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyVirtualBorderRouterAttributeRequest $request
     *
     * @return ModifyVirtualBorderRouterAttributeResponse
     */
    public function modifyVirtualBorderRouterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVirtualBorderRouterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpcAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyVpcAttributeResponse
     */
    public function modifyVpcAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVpcAttributeResponse::fromMap($this->doRPCRequest('ModifyVpcAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyVpcAttributeRequest $request
     *
     * @return ModifyVpcAttributeResponse
     */
    public function modifyVpcAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVRouterAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyVRouterAttributeResponse
     */
    public function modifyVRouterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVRouterAttributeResponse::fromMap($this->doRPCRequest('ModifyVRouterAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyVRouterAttributeRequest $request
     *
     * @return ModifyVRouterAttributeResponse
     */
    public function modifyVRouterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVRouterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVSwitchAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVSwitchAttributeResponse::fromMap($this->doRPCRequest('ModifyVSwitchAttribute', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PurchaseReservedInstancesOfferingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return PurchaseReservedInstancesOfferingResponse
     */
    public function purchaseReservedInstancesOfferingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PurchaseReservedInstancesOfferingResponse::fromMap($this->doRPCRequest('PurchaseReservedInstancesOffering', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PurchaseReservedInstancesOfferingRequest $request
     *
     * @return PurchaseReservedInstancesOfferingResponse
     */
    public function purchaseReservedInstancesOffering($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseReservedInstancesOfferingWithOptions($request, $runtime);
    }

    /**
     * @param PurchaseStorageCapacityUnitRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PurchaseStorageCapacityUnitResponse
     */
    public function purchaseStorageCapacityUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PurchaseStorageCapacityUnitResponse::fromMap($this->doRPCRequest('PurchaseStorageCapacityUnit', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PurchaseStorageCapacityUnitRequest $request
     *
     * @return PurchaseStorageCapacityUnitResponse
     */
    public function purchaseStorageCapacityUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseStorageCapacityUnitWithOptions($request, $runtime);
    }

    /**
     * @param ReActivateInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReActivateInstancesResponse
     */
    public function reActivateInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReActivateInstancesResponse::fromMap($this->doRPCRequest('ReActivateInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReActivateInstancesRequest $request
     *
     * @return ReActivateInstancesResponse
     */
    public function reActivateInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reActivateInstancesWithOptions($request, $runtime);
    }

    /**
     * @param RebootInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RebootInstanceResponse::fromMap($this->doRPCRequest('RebootInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RebootInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RebootInstancesResponse
     */
    public function rebootInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RebootInstancesResponse::fromMap($this->doRPCRequest('RebootInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RecoverVirtualBorderRouterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecoverVirtualBorderRouterResponse
     */
    public function recoverVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecoverVirtualBorderRouterResponse::fromMap($this->doRPCRequest('RecoverVirtualBorderRouter', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecoverVirtualBorderRouterRequest $request
     *
     * @return RecoverVirtualBorderRouterResponse
     */
    public function recoverVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param RedeployDedicatedHostRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RedeployDedicatedHostResponse
     */
    public function redeployDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RedeployDedicatedHostResponse::fromMap($this->doRPCRequest('RedeployDedicatedHost', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RedeployDedicatedHostRequest $request
     *
     * @return RedeployDedicatedHostResponse
     */
    public function redeployDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->redeployDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param RedeployInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RedeployInstanceResponse
     */
    public function redeployInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RedeployInstanceResponse::fromMap($this->doRPCRequest('RedeployInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RedeployInstanceRequest $request
     *
     * @return RedeployInstanceResponse
     */
    public function redeployInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->redeployInstanceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReInitDiskResponse::fromMap($this->doRPCRequest('ReInitDisk', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReleaseCapacityReservationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ReleaseCapacityReservationResponse
     */
    public function releaseCapacityReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseCapacityReservationResponse::fromMap($this->doRPCRequest('ReleaseCapacityReservation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseCapacityReservationRequest $request
     *
     * @return ReleaseCapacityReservationResponse
     */
    public function releaseCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReleaseDedicatedHostResponse
     */
    public function releaseDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseDedicatedHostResponse::fromMap($this->doRPCRequest('ReleaseDedicatedHost', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseDedicatedHostRequest $request
     *
     * @return ReleaseDedicatedHostResponse
     */
    public function releaseDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseEipAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseEipAddressResponse::fromMap($this->doRPCRequest('ReleaseEipAddress', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseEipAddressRequest $request
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePublicIpAddressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleasePublicIpAddressResponse
     */
    public function releasePublicIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleasePublicIpAddressResponse::fromMap($this->doRPCRequest('ReleasePublicIpAddress', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleasePublicIpAddressRequest $request
     *
     * @return ReleasePublicIpAddressResponse
     */
    public function releasePublicIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePublicIpAddressWithOptions($request, $runtime);
    }

    /**
     * @param RemoveBandwidthPackageIpsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveBandwidthPackageIpsResponse
     */
    public function removeBandwidthPackageIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveBandwidthPackageIpsResponse::fromMap($this->doRPCRequest('RemoveBandwidthPackageIps', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveBandwidthPackageIpsRequest $request
     *
     * @return RemoveBandwidthPackageIpsResponse
     */
    public function removeBandwidthPackageIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBandwidthPackageIpsWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RemoveTagsResponse
     */
    public function removeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveTagsResponse::fromMap($this->doRPCRequest('RemoveTags', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveTagsRequest $request
     *
     * @return RemoveTagsResponse
     */
    public function removeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * @param RenewDedicatedHostsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RenewDedicatedHostsResponse
     */
    public function renewDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewDedicatedHostsResponse::fromMap($this->doRPCRequest('RenewDedicatedHosts', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenewDedicatedHostsRequest $request
     *
     * @return RenewDedicatedHostsResponse
     */
    public function renewDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDedicatedHostsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewInstanceResponse::fromMap($this->doRPCRequest('RenewInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReplaceSystemDiskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReplaceSystemDiskResponse
     */
    public function replaceSystemDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceSystemDiskResponse::fromMap($this->doRPCRequest('ReplaceSystemDisk', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReplaceSystemDiskRequest $request
     *
     * @return ReplaceSystemDiskResponse
     */
    public function replaceSystemDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceSystemDiskWithOptions($request, $runtime);
    }

    /**
     * @param ReportInstancesStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReportInstancesStatusResponse
     */
    public function reportInstancesStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportInstancesStatusResponse::fromMap($this->doRPCRequest('ReportInstancesStatus', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportInstancesStatusRequest $request
     *
     * @return ReportInstancesStatusResponse
     */
    public function reportInstancesStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportInstancesStatusWithOptions($request, $runtime);
    }

    /**
     * @param ResetDiskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ResetDiskResponse
     */
    public function resetDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetDiskResponse::fromMap($this->doRPCRequest('ResetDisk', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ResetDisksRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResetDisksResponse
     */
    public function resetDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetDisksResponse::fromMap($this->doRPCRequest('ResetDisks', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetDisksRequest $request
     *
     * @return ResetDisksResponse
     */
    public function resetDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDisksWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeDiskResponse::fromMap($this->doRPCRequest('ResizeDisk', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RevokeSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeSecurityGroupResponse::fromMap($this->doRPCRequest('RevokeSecurityGroup', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RevokeSecurityGroupEgressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeSecurityGroupEgressResponse::fromMap($this->doRPCRequest('RevokeSecurityGroupEgress', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RunCommandRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return RunCommandResponse
     */
    public function runCommandWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunCommandShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunCommandResponse::fromMap($this->doRPCRequest('RunCommand', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RunInstancesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunInstancesResponse
     */
    public function runInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunInstancesResponse::fromMap($this->doRPCRequest('RunInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SendFileRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SendFileResponse
     */
    public function sendFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendFileResponse::fromMap($this->doRPCRequest('SendFile', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendFileRequest $request
     *
     * @return SendFileResponse
     */
    public function sendFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendFileWithOptions($request, $runtime);
    }

    /**
     * @param StartDiskReplicaPairRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartDiskReplicaPairResponse
     */
    public function startDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartDiskReplicaPairResponse::fromMap($this->doRPCRequest('StartDiskReplicaPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartDiskReplicaPairRequest $request
     *
     * @return StartDiskReplicaPairResponse
     */
    public function startDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * @param StartElasticityAssuranceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StartElasticityAssuranceResponse
     */
    public function startElasticityAssuranceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartElasticityAssuranceResponse::fromMap($this->doRPCRequest('StartElasticityAssurance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartElasticityAssuranceRequest $request
     *
     * @return StartElasticityAssuranceResponse
     */
    public function startElasticityAssurance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startElasticityAssuranceWithOptions($request, $runtime);
    }

    /**
     * @param StartImagePipelineExecutionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return StartImagePipelineExecutionResponse
     */
    public function startImagePipelineExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartImagePipelineExecutionResponse::fromMap($this->doRPCRequest('StartImagePipelineExecution', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartImagePipelineExecutionRequest $request
     *
     * @return StartImagePipelineExecutionResponse
     */
    public function startImagePipelineExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startImagePipelineExecutionWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartInstanceResponse::fromMap($this->doRPCRequest('StartInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param StartInstancesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartInstancesResponse
     */
    public function startInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartInstancesResponse::fromMap($this->doRPCRequest('StartInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartTerminalSessionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartTerminalSessionResponse
     */
    public function startTerminalSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartTerminalSessionResponse::fromMap($this->doRPCRequest('StartTerminalSession', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartTerminalSessionRequest $request
     *
     * @return StartTerminalSessionResponse
     */
    public function startTerminalSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTerminalSessionWithOptions($request, $runtime);
    }

    /**
     * @param StopDiskReplicaPairRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopDiskReplicaPairResponse
     */
    public function stopDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopDiskReplicaPairResponse::fromMap($this->doRPCRequest('StopDiskReplicaPair', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopDiskReplicaPairRequest $request
     *
     * @return StopDiskReplicaPairResponse
     */
    public function stopDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopInstanceResponse::fromMap($this->doRPCRequest('StopInstance', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param StopInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopInstancesResponse
     */
    public function stopInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopInstancesResponse::fromMap($this->doRPCRequest('StopInstances', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StopInvocationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopInvocationResponse
     */
    public function stopInvocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopInvocationResponse::fromMap($this->doRPCRequest('StopInvocation', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TerminatePhysicalConnectionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return TerminatePhysicalConnectionResponse
     */
    public function terminatePhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TerminatePhysicalConnectionResponse::fromMap($this->doRPCRequest('TerminatePhysicalConnection', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TerminatePhysicalConnectionRequest $request
     *
     * @return TerminatePhysicalConnectionResponse
     */
    public function terminatePhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminatePhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param TerminateVirtualBorderRouterRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return TerminateVirtualBorderRouterResponse
     */
    public function terminateVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TerminateVirtualBorderRouterResponse::fromMap($this->doRPCRequest('TerminateVirtualBorderRouter', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TerminateVirtualBorderRouterRequest $request
     *
     * @return TerminateVirtualBorderRouterResponse
     */
    public function terminateVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param UnassignIpv6AddressesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassignIpv6AddressesResponse
     */
    public function unassignIpv6AddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassignIpv6AddressesResponse::fromMap($this->doRPCRequest('UnassignIpv6Addresses', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnassignIpv6AddressesRequest $request
     *
     * @return UnassignIpv6AddressesResponse
     */
    public function unassignIpv6Addresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignIpv6AddressesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassignPrivateIpAddressesResponse::fromMap($this->doRPCRequest('UnassignPrivateIpAddresses', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UnassociateEipAddressRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateEipAddressResponse::fromMap($this->doRPCRequest('UnassociateEipAddress', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnassociateEipAddressRequest $request
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateHaVipRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnassociateHaVipResponse
     */
    public function unassociateHaVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateHaVipResponse::fromMap($this->doRPCRequest('UnassociateHaVip', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2014-05-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
