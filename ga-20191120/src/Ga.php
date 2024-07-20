<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ga\V20191120\Models\AddEntriesToAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AddEntriesToAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAclsWithListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAclsWithListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAdditionalCertificatesWithListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAdditionalCertificatesWithListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachDdosToAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachDdosToAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachLogStoreToEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachLogStoreToEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageAddAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageAddAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageRemoveAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageRemoveAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ConfigEndpointProbeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ConfigEndpointProbeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateApplicationMonitorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateApplicationMonitorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpEndpointRelationRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpEndpointRelationResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpEndpointRelationsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpEndpointRelationsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupDestinationsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupDestinationsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointTrafficPoliciesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointTrafficPoliciesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteApplicationMonitorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteApplicationMonitorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicAccelerateIpEndpointRelationRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicAccelerateIpEndpointRelationResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicAccelerateIpRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicAccelerateIpResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicEndpointRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicEndpointResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteCustomRoutingEndpointGroupDestinationsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteCustomRoutingEndpointGroupDestinationsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteCustomRoutingEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteCustomRoutingEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteCustomRoutingEndpointsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteCustomRoutingEndpointsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteCustomRoutingEndpointTrafficPoliciesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteCustomRoutingEndpointTrafficPoliciesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteDomainAcceleratorRelationRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteDomainAcceleratorRelationResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorServiceStatusRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorServiceStatusResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeApplicationMonitorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeApplicationMonitorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeBandwidthPackageAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeBandwidthPackageAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointGroupDestinationsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointGroupDestinationsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndPointTrafficPolicyRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndPointTrafficPolicyResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeLogStoreOfEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeLogStoreOfEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachDdosFromAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachDdosFromAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachLogStoreFromEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachLogStoreFromEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetectApplicationMonitorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetectApplicationMonitorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DisableApplicationMonitorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DisableApplicationMonitorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAclsFromListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAclsFromListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAdditionalCertificatesFromListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAdditionalCertificatesFromListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\EnableApplicationMonitorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\EnableApplicationMonitorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAccelerateIpEndpointRelationRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAccelerateIpEndpointRelationResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAccelerateIpIdleCountRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAccelerateIpIdleCountResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAccelerateIpRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAccelerateIpResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicEndpointRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicEndpointResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetInvalidDomainCountRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetInvalidDomainCountResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetIpsetsBandwidthLimitRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetIpsetsBandwidthLimitResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetSpareIpRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetSpareIpResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAccelerateAreasRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAccelerateAreasResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListApplicationMonitorDetectResultRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListApplicationMonitorDetectResultResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListApplicationMonitorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListApplicationMonitorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableBusiRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableBusiRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpEndpointRelationsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpEndpointRelationsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicEndpointsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicEndpointsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBusiRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBusiRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCommonAreasRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCommonAreasResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupDestinationsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupDestinationsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointTrafficPoliciesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointTrafficPoliciesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsByDestinationRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsByDestinationResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupIpAddressCidrBlocksRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupIpAddressCidrBlocksResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListIspTypesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListIspTypesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenerCertificatesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenerCertificatesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\OpenAcceleratorServiceRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\OpenAcceleratorServiceResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\QueryCrossBorderApprovalStatusRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\QueryCrossBorderApprovalStatusResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\RemoveEntriesFromAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\RemoveEntriesFromAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ReplaceBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ReplaceBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorConfirmRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorConfirmResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorCrossBorderModeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorCrossBorderModeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorCrossBorderStatusRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorCrossBorderStatusResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAclAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAclAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAdditionalCertificateWithListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAdditionalCertificateWithListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateApplicationMonitorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateApplicationMonitorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBandwidthPackagaAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBandwidthPackagaAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicEndpointRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicEndpointResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointGroupAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointGroupAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointGroupDestinationsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointGroupDestinationsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointTrafficPoliciesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointTrafficPoliciesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateDomainRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateDomainResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateDomainStateRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateDomainStateResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateServiceManagedControlRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateServiceManagedControlResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ga extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ga', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Adds IP addresses or CIDR blocks to an access control list (ACL). You can add IP addresses or CIDR blocks to an ACL and configure a whitelist or blacklist to allow or deny requests from clients.
     *  *
     * @description *   **AddEntriesToAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetAcl](https://help.aliyun.com/document_detail/258292.html) or [ListAcls](https://help.aliyun.com/document_detail/258291.html) operation to query the status of the ACL to which you want to add IP entries.
     *     *   If the ACL is in the **configuring** state, it indicates that IP entries are added to the ACL. In this case, you can perform only query operations.
     *     *   If the ACL is in the **active** state, it indicates that IP entries are added to the ACL.
     * *   The **AddEntriesToAcl** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param AddEntriesToAclRequest $request AddEntriesToAclRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddEntriesToAclResponse AddEntriesToAclResponse
     */
    public function addEntriesToAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntries)) {
            $query['AclEntries'] = $request->aclEntries;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddEntriesToAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddEntriesToAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds IP addresses or CIDR blocks to an access control list (ACL). You can add IP addresses or CIDR blocks to an ACL and configure a whitelist or blacklist to allow or deny requests from clients.
     *  *
     * @description *   **AddEntriesToAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetAcl](https://help.aliyun.com/document_detail/258292.html) or [ListAcls](https://help.aliyun.com/document_detail/258291.html) operation to query the status of the ACL to which you want to add IP entries.
     *     *   If the ACL is in the **configuring** state, it indicates that IP entries are added to the ACL. In this case, you can perform only query operations.
     *     *   If the ACL is in the **active** state, it indicates that IP entries are added to the ACL.
     * *   The **AddEntriesToAcl** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param AddEntriesToAclRequest $request AddEntriesToAclRequest
     *
     * @return AddEntriesToAclResponse AddEntriesToAclResponse
     */
    public function addEntriesToAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEntriesToAclWithOptions($request, $runtime);
    }

    /**
     * @summary Associates access control lists (ACLs) with a listener.
     *  *
     * @description ## Description
     * *   **AssociateAclsWithListener** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the state of the listener with which you attempt to associate an ACL.
     *     *   If the listener is in the **updating** state, it indicates that the ACL is being associated. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, it indicates that the ACL is associated.
     * *   The **AssociateAclsWithListener** operation cannot be called repeatedly for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param AssociateAclsWithListenerRequest $request AssociateAclsWithListenerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateAclsWithListenerResponse AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclIds)) {
            $query['AclIds'] = $request->aclIds;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateAclsWithListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateAclsWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates access control lists (ACLs) with a listener.
     *  *
     * @description ## Description
     * *   **AssociateAclsWithListener** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the state of the listener with which you attempt to associate an ACL.
     *     *   If the listener is in the **updating** state, it indicates that the ACL is being associated. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, it indicates that the ACL is associated.
     * *   The **AssociateAclsWithListener** operation cannot be called repeatedly for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param AssociateAclsWithListenerRequest $request AssociateAclsWithListenerRequest
     *
     * @return AssociateAclsWithListenerResponse AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAclsWithListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Associates additional certificates with an HTTPS listener. You can associate multiple certificates with an HTTPS listener and configure virtual endpoint groups and forwarding rules to accelerate access to multiple HTTPS-capable domain names.
     *  *
     * @description *   Only HTTPS listeners can be associated with additional certificates.
     * *   **AssociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the status of the listener with which you want to associate an additional certificate.
     *     *   If the listener is in the **updating** state, it indicates that the additional certificate is being associated. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, it indicates that the additional certificate is associated.
     * *   The **AssociateAdditionalCertificatesWithListener** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param AssociateAdditionalCertificatesWithListenerRequest $request AssociateAdditionalCertificatesWithListenerRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->certificates)) {
            $query['Certificates'] = $request->certificates;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateAdditionalCertificatesWithListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateAdditionalCertificatesWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates additional certificates with an HTTPS listener. You can associate multiple certificates with an HTTPS listener and configure virtual endpoint groups and forwarding rules to accelerate access to multiple HTTPS-capable domain names.
     *  *
     * @description *   Only HTTPS listeners can be associated with additional certificates.
     * *   **AssociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the status of the listener with which you want to associate an additional certificate.
     *     *   If the listener is in the **updating** state, it indicates that the additional certificate is being associated. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, it indicates that the additional certificate is associated.
     * *   The **AssociateAdditionalCertificatesWithListener** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param AssociateAdditionalCertificatesWithListenerRequest $request AssociateAdditionalCertificatesWithListenerRequest
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAdditionalCertificatesWithListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Associates an Anti-DDoS Pro or Anti-DDoS Premium instance with a Global Accelerator (GA) instance.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   **AttachDdosToAccelerator** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) or [ListAccelerators](https://help.aliyun.com/document_detail/153236.html) operation to query the status of the GA instance.
     *     *   If the GA instance is in the **configuring** state, the Anti-DDoS Pro or Anti-DDoS Premium instance is being associated with the GA instance. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, the Anti-DDoS Pro or Anti-DDoS Premium instance is associated with the GA instance.
     * *   You cannot repeatedly call the **AttachDdosToAccelerator** operation for the same GA instance within a specific period of time.
     *  *
     * @param AttachDdosToAcceleratorRequest $request AttachDdosToAcceleratorRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachDdosToAcceleratorResponse AttachDdosToAcceleratorResponse
     */
    public function attachDdosToAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->ddosId)) {
            $query['DdosId'] = $request->ddosId;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDdosToAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDdosToAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates an Anti-DDoS Pro or Anti-DDoS Premium instance with a Global Accelerator (GA) instance.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   **AttachDdosToAccelerator** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) or [ListAccelerators](https://help.aliyun.com/document_detail/153236.html) operation to query the status of the GA instance.
     *     *   If the GA instance is in the **configuring** state, the Anti-DDoS Pro or Anti-DDoS Premium instance is being associated with the GA instance. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, the Anti-DDoS Pro or Anti-DDoS Premium instance is associated with the GA instance.
     * *   You cannot repeatedly call the **AttachDdosToAccelerator** operation for the same GA instance within a specific period of time.
     *  *
     * @param AttachDdosToAcceleratorRequest $request AttachDdosToAcceleratorRequest
     *
     * @return AttachDdosToAcceleratorResponse AttachDdosToAcceleratorResponse
     */
    public function attachDdosToAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDdosToAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a Log Service Logstore with an endpoint group.
     *  *
     * @description *   **AttachLogStoreToEndpointGroup** is an asynchronous operation. After you send a request, the system returns a request ID, but this operation is still being performed in the system background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the state of an endpoint group.
     *     *   If the endpoint group is in the **updating** state, it indicates that a Logstore is being associated with the group. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that a Logstore is associated with the group.
     * *   The **AttachLogStoreToEndpointGroup** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param AttachLogStoreToEndpointGroupRequest $request AttachLogStoreToEndpointGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachLogStoreToEndpointGroupResponse AttachLogStoreToEndpointGroupResponse
     */
    public function attachLogStoreToEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupIds)) {
            $query['EndpointGroupIds'] = $request->endpointGroupIds;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->slsLogStoreName)) {
            $query['SlsLogStoreName'] = $request->slsLogStoreName;
        }
        if (!Utils::isUnset($request->slsProjectName)) {
            $query['SlsProjectName'] = $request->slsProjectName;
        }
        if (!Utils::isUnset($request->slsRegionId)) {
            $query['SlsRegionId'] = $request->slsRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachLogStoreToEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachLogStoreToEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a Log Service Logstore with an endpoint group.
     *  *
     * @description *   **AttachLogStoreToEndpointGroup** is an asynchronous operation. After you send a request, the system returns a request ID, but this operation is still being performed in the system background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the state of an endpoint group.
     *     *   If the endpoint group is in the **updating** state, it indicates that a Logstore is being associated with the group. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that a Logstore is associated with the group.
     * *   The **AttachLogStoreToEndpointGroup** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param AttachLogStoreToEndpointGroupRequest $request AttachLogStoreToEndpointGroupRequest
     *
     * @return AttachLogStoreToEndpointGroupResponse AttachLogStoreToEndpointGroupResponse
     */
    public function attachLogStoreToEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLogStoreToEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a bandwidth plan with a Global Accelerator (GA) instance.
     *  *
     * @description *   **BandwidthPackageAddAccelerator** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the bandwidth plan that you want to associate.
     *     *   If the bandwidth plan is in the **binding** state, it indicates that the bandwidth plan is being associated. In this case, you can perform only query operations.
     *     *   If the bandwidth plan is in the **active** state, it indicates that the bandwidth plan is associated.
     * *   The **BandwidthPackageAddAccelerator** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param BandwidthPackageAddAcceleratorRequest $request BandwidthPackageAddAcceleratorRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return BandwidthPackageAddAcceleratorResponse BandwidthPackageAddAcceleratorResponse
     */
    public function bandwidthPackageAddAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BandwidthPackageAddAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BandwidthPackageAddAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a bandwidth plan with a Global Accelerator (GA) instance.
     *  *
     * @description *   **BandwidthPackageAddAccelerator** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the bandwidth plan that you want to associate.
     *     *   If the bandwidth plan is in the **binding** state, it indicates that the bandwidth plan is being associated. In this case, you can perform only query operations.
     *     *   If the bandwidth plan is in the **active** state, it indicates that the bandwidth plan is associated.
     * *   The **BandwidthPackageAddAccelerator** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param BandwidthPackageAddAcceleratorRequest $request BandwidthPackageAddAcceleratorRequest
     *
     * @return BandwidthPackageAddAcceleratorResponse BandwidthPackageAddAcceleratorResponse
     */
    public function bandwidthPackageAddAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandwidthPackageAddAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a bandwidth plan from a Global Accelerator (GA) instance.
     *  *
     * @description *   **BandwidthPackageRemoveAccelerator** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the bandwidth plan that you attempt to disassociate.
     *     *   If the bandwidth plan is in the **unbinding** state, it indicates that the bandwidth plan is being disassociated. In this case, you can perform only query operations.
     *     *   If the bandwidth plan is in the **active** state, it indicates that the bandwidth plan is disassociated.
     * *   The **BandwidthPackageRemoveAccelerator** cannot be called repeatedly for the same GA instance.
     *  *
     * @param BandwidthPackageRemoveAcceleratorRequest $request BandwidthPackageRemoveAcceleratorRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return BandwidthPackageRemoveAcceleratorResponse BandwidthPackageRemoveAcceleratorResponse
     */
    public function bandwidthPackageRemoveAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BandwidthPackageRemoveAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BandwidthPackageRemoveAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a bandwidth plan from a Global Accelerator (GA) instance.
     *  *
     * @description *   **BandwidthPackageRemoveAccelerator** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the bandwidth plan that you attempt to disassociate.
     *     *   If the bandwidth plan is in the **unbinding** state, it indicates that the bandwidth plan is being disassociated. In this case, you can perform only query operations.
     *     *   If the bandwidth plan is in the **active** state, it indicates that the bandwidth plan is disassociated.
     * *   The **BandwidthPackageRemoveAccelerator** cannot be called repeatedly for the same GA instance.
     *  *
     * @param BandwidthPackageRemoveAcceleratorRequest $request BandwidthPackageRemoveAcceleratorRequest
     *
     * @return BandwidthPackageRemoveAcceleratorResponse BandwidthPackageRemoveAcceleratorResponse
     */
    public function bandwidthPackageRemoveAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandwidthPackageRemoveAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group to which a Global Accelerator (GA) resource belongs.
     *  *
     * @description The **ChangeResourceGroup** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the resource group to which a Global Accelerator (GA) resource belongs.
     *  *
     * @description The **ChangeResourceGroup** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Configures latency monitoring for an endpoint.
     *  *
     * @description *   **ConfigEndpointProbe** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the status of the endpoint group to which an endpoint belongs and determine whether latency monitoring is configured for the endpoint.
     *     *   If the endpoint group is in the **updating** state, it indicates that latency monitoring is being configured for the endpoint. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that latency monitoring is configured for the endpoint.
     * *   The **ConfigEndpointProbe** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param ConfigEndpointProbeRequest $request ConfigEndpointProbeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigEndpointProbeResponse ConfigEndpointProbeResponse
     */
    public function configEndpointProbeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        if (!Utils::isUnset($request->probePort)) {
            $query['ProbePort'] = $request->probePort;
        }
        if (!Utils::isUnset($request->probeProtocol)) {
            $query['ProbeProtocol'] = $request->probeProtocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigEndpointProbe',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigEndpointProbeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures latency monitoring for an endpoint.
     *  *
     * @description *   **ConfigEndpointProbe** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the status of the endpoint group to which an endpoint belongs and determine whether latency monitoring is configured for the endpoint.
     *     *   If the endpoint group is in the **updating** state, it indicates that latency monitoring is being configured for the endpoint. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that latency monitoring is configured for the endpoint.
     * *   The **ConfigEndpointProbe** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param ConfigEndpointProbeRequest $request ConfigEndpointProbeRequest
     *
     * @return ConfigEndpointProbeResponse ConfigEndpointProbeResponse
     */
    public function configEndpointProbe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configEndpointProbeWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Global Accelerator (GA) instance.
     *  *
     * @description ## Description
     * **CreateAccelerator** is an asynchronous operation. After you send a request, the system returns the ID of a GA instance, but the operation is still being performed in the system background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the state of a GA instance.
     * *   If the GA instance is in the **init** state, it indicates that the GA instance is being created. In this case, you can perform only query operations.
     * *   If the GA instance is in the **active** state, it indicates that the GA instance is created.
     *  *
     * @param CreateAcceleratorRequest $request CreateAcceleratorRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAcceleratorResponse CreateAcceleratorResponse
     */
    public function createAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewDuration)) {
            $query['AutoRenewDuration'] = $request->autoRenewDuration;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->bandwidthBillingType)) {
            $query['BandwidthBillingType'] = $request->bandwidthBillingType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->ipSetConfig)) {
            $query['IpSetConfig'] = $request->ipSetConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Global Accelerator (GA) instance.
     *  *
     * @description ## Description
     * **CreateAccelerator** is an asynchronous operation. After you send a request, the system returns the ID of a GA instance, but the operation is still being performed in the system background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the state of a GA instance.
     * *   If the GA instance is in the **init** state, it indicates that the GA instance is being created. In this case, you can perform only query operations.
     * *   If the GA instance is in the **active** state, it indicates that the GA instance is created.
     *  *
     * @param CreateAcceleratorRequest $request CreateAcceleratorRequest
     *
     * @return CreateAcceleratorResponse CreateAcceleratorResponse
     */
    public function createAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access control list (ACL).
     *  *
     * @description **CreateAcl** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [GetAcl](https://help.aliyun.com/document_detail/258292.html) or [ListAcls](https://help.aliyun.com/document_detail/258291.html) operation to query the state of an ACL.
     * *   If the ACL is in the **init** state, the ACL is being created. In this case, you can only perform only query operations.
     * *   If the ACL is in the **active** state, the ACL is created.
     *  *
     * @param CreateAclRequest $request CreateAclRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAclResponse CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntries)) {
            $query['AclEntries'] = $request->aclEntries;
        }
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an access control list (ACL).
     *  *
     * @description **CreateAcl** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [GetAcl](https://help.aliyun.com/document_detail/258292.html) or [ListAcls](https://help.aliyun.com/document_detail/258291.html) operation to query the state of an ACL.
     * *   If the ACL is in the **init** state, the ACL is being created. In this case, you can only perform only query operations.
     * *   If the ACL is in the **active** state, the ACL is created.
     *  *
     * @param CreateAclRequest $request CreateAclRequest
     *
     * @return CreateAclResponse CreateAclResponse
     */
    public function createAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an origin probing task.
     *  *
     * @description You can call the **CreateApplicationMonitor** operation to create an origin probing task. An origin probing task monitors the network quality between a client and an origin server and checks the availability of the origin server.
     * Before you call this operation, take note of the following items:
     * *   You can create origin detection tasks only for subscription Standard Global Accelerator (GA) instances whose specification is Medium Ⅰ.
     * *   You cannot create an origin probe task for a UDP listener.
     * *   The service port of the URL or IP address that is probed must be within the listening port range.
     * *   **CreateApplicationMonitor** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeApplicationMonitor](https://help.aliyun.com/document_detail/408463.html) or [ListApplicationMonitor](https://help.aliyun.com/document_detail/408462.html) operation to query the status of the origin probing task.
     *     *   If the origin probing task is in the **init** state, it indicates that the task is being created. You can perform only query operations.
     *     *   If the origin probing task is in the **active** state, it indicates that the task is created.
     * *   The **CreateApplicationMonitor** operation cannot be called repeatedly for the same GA instance within a specific period of time.
     *  *
     * @param CreateApplicationMonitorRequest $request CreateApplicationMonitorRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationMonitorResponse CreateApplicationMonitorResponse
     */
    public function createApplicationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->detectEnable)) {
            $query['DetectEnable'] = $request->detectEnable;
        }
        if (!Utils::isUnset($request->detectThreshold)) {
            $query['DetectThreshold'] = $request->detectThreshold;
        }
        if (!Utils::isUnset($request->detectTimes)) {
            $query['DetectTimes'] = $request->detectTimes;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->optionsJson)) {
            $query['OptionsJson'] = $request->optionsJson;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplicationMonitor',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an origin probing task.
     *  *
     * @description You can call the **CreateApplicationMonitor** operation to create an origin probing task. An origin probing task monitors the network quality between a client and an origin server and checks the availability of the origin server.
     * Before you call this operation, take note of the following items:
     * *   You can create origin detection tasks only for subscription Standard Global Accelerator (GA) instances whose specification is Medium Ⅰ.
     * *   You cannot create an origin probe task for a UDP listener.
     * *   The service port of the URL or IP address that is probed must be within the listening port range.
     * *   **CreateApplicationMonitor** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeApplicationMonitor](https://help.aliyun.com/document_detail/408463.html) or [ListApplicationMonitor](https://help.aliyun.com/document_detail/408462.html) operation to query the status of the origin probing task.
     *     *   If the origin probing task is in the **init** state, it indicates that the task is being created. You can perform only query operations.
     *     *   If the origin probing task is in the **active** state, it indicates that the task is created.
     * *   The **CreateApplicationMonitor** operation cannot be called repeatedly for the same GA instance within a specific period of time.
     *  *
     * @param CreateApplicationMonitorRequest $request CreateApplicationMonitorRequest
     *
     * @return CreateApplicationMonitorResponse CreateApplicationMonitorResponse
     */
    public function createApplicationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a bandwidth plan.
     *  *
     * @description To use Global Accelerator (GA) for acceleration, you must purchase a basic bandwidth plan. A basic bandwidth plan supports the following bandwidth types:
     * *   **Basic**: Both the default acceleration region and the default service region are in the Chinese mainland. The accelerated service is deployed on Alibaba Cloud.
     * *   **Enhanced**: Both the default acceleration region and the default service region are in the Chinese mainland. The accelerated service can be deployed on and off Alibaba Cloud.
     * *   **Premium**: Both the default acceleration region and the default service region are outside the Chinese mainland. The accelerated service can be deployed on and off Alibaba Cloud. If you want to accelerate data transfer for clients in the Chinese mainland, you must select China (Hong Kong) as the acceleration region.
     * When you call this operation, take note of the following items:
     * *   **CreateBandwidthPackage** is an asynchronous operation. After you send a request, the system returns the ID of a bandwidth plan, but the bandwidth plan is still being created in the system background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the bandwidth plan.
     *     *   If the bandwidth plan is in the **init** state, it indicates that the bandwidth plan is being created. In this case, you can perform only query operations.
     *     *   If the bandwidth plan is in the **active** state, it indicates that the bandwidth plan is created.
     * *   The **CreateBandwidthPackage** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param CreateBandwidthPackageRequest $request CreateBandwidthPackageRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBandwidthPackageResponse CreateBandwidthPackageResponse
     */
    public function createBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewDuration)) {
            $query['AutoRenewDuration'] = $request->autoRenewDuration;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthType)) {
            $query['BandwidthType'] = $request->bandwidthType;
        }
        if (!Utils::isUnset($request->billingType)) {
            $query['BillingType'] = $request->billingType;
        }
        if (!Utils::isUnset($request->cbnGeographicRegionIdA)) {
            $query['CbnGeographicRegionIdA'] = $request->cbnGeographicRegionIdA;
        }
        if (!Utils::isUnset($request->cbnGeographicRegionIdB)) {
            $query['CbnGeographicRegionIdB'] = $request->cbnGeographicRegionIdB;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->ratio)) {
            $query['Ratio'] = $request->ratio;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a bandwidth plan.
     *  *
     * @description To use Global Accelerator (GA) for acceleration, you must purchase a basic bandwidth plan. A basic bandwidth plan supports the following bandwidth types:
     * *   **Basic**: Both the default acceleration region and the default service region are in the Chinese mainland. The accelerated service is deployed on Alibaba Cloud.
     * *   **Enhanced**: Both the default acceleration region and the default service region are in the Chinese mainland. The accelerated service can be deployed on and off Alibaba Cloud.
     * *   **Premium**: Both the default acceleration region and the default service region are outside the Chinese mainland. The accelerated service can be deployed on and off Alibaba Cloud. If you want to accelerate data transfer for clients in the Chinese mainland, you must select China (Hong Kong) as the acceleration region.
     * When you call this operation, take note of the following items:
     * *   **CreateBandwidthPackage** is an asynchronous operation. After you send a request, the system returns the ID of a bandwidth plan, but the bandwidth plan is still being created in the system background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the bandwidth plan.
     *     *   If the bandwidth plan is in the **init** state, it indicates that the bandwidth plan is being created. In this case, you can perform only query operations.
     *     *   If the bandwidth plan is in the **active** state, it indicates that the bandwidth plan is created.
     * *   The **CreateBandwidthPackage** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param CreateBandwidthPackageRequest $request CreateBandwidthPackageRequest
     *
     * @return CreateBandwidthPackageResponse CreateBandwidthPackageResponse
     */
    public function createBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an accelerated IP address for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicAccelerateIp** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) operation to query the status of an accelerated IP address:
     *     *   If no status information is returned, the accelerated IP address is being created. In this case, you can perform only query operations.
     *     *   If the accelerated IP address is in the **active** state, the accelerated IP address is created.
     * *   The **CreateBasicAccelerateIp** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param CreateBasicAccelerateIpRequest $request CreateBasicAccelerateIpRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBasicAccelerateIpResponse CreateBasicAccelerateIpResponse
     */
    public function createBasicAccelerateIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicAccelerateIp',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBasicAccelerateIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an accelerated IP address for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicAccelerateIp** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) operation to query the status of an accelerated IP address:
     *     *   If no status information is returned, the accelerated IP address is being created. In this case, you can perform only query operations.
     *     *   If the accelerated IP address is in the **active** state, the accelerated IP address is created.
     * *   The **CreateBasicAccelerateIp** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param CreateBasicAccelerateIpRequest $request CreateBasicAccelerateIpRequest
     *
     * @return CreateBasicAccelerateIpResponse CreateBasicAccelerateIpResponse
     */
    public function createBasicAccelerateIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicAccelerateIpWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a mapping between an accelerated IP address and an endpoint for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicAccelerateIpEndpointRelation** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) or [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) API operation to query the status of an accelerated IP address or an endpoint to determine the association status between the accelerated IP address and endpoint.
     *     *   If the status of the accelerated IP address and endpoint is **binding**, the accelerated IP address is being associated with the endpoint. In this case, you can query the accelerated IP address and endpoint but cannot perform other operations.
     *     *   If the status of the accelerated IP address and endpoint is **bound** and the status returned by the [ListBasicAccelerateIpEndpointRelations](https://help.aliyun.com/document_detail/466803.html) API operation is **active**, the accelerated IP address is associated with the endpoint.
     * *   The **CreateBasicAccelerateIpEndpointRelation** API operation cannot be repeatedly called for the same basic GA instance within a period of time.
     *  *
     * @param CreateBasicAccelerateIpEndpointRelationRequest $request CreateBasicAccelerateIpEndpointRelationRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBasicAccelerateIpEndpointRelationResponse CreateBasicAccelerateIpEndpointRelationResponse
     */
    public function createBasicAccelerateIpEndpointRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateIpId)) {
            $query['AccelerateIpId'] = $request->accelerateIpId;
        }
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicAccelerateIpEndpointRelation',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBasicAccelerateIpEndpointRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a mapping between an accelerated IP address and an endpoint for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicAccelerateIpEndpointRelation** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) or [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) API operation to query the status of an accelerated IP address or an endpoint to determine the association status between the accelerated IP address and endpoint.
     *     *   If the status of the accelerated IP address and endpoint is **binding**, the accelerated IP address is being associated with the endpoint. In this case, you can query the accelerated IP address and endpoint but cannot perform other operations.
     *     *   If the status of the accelerated IP address and endpoint is **bound** and the status returned by the [ListBasicAccelerateIpEndpointRelations](https://help.aliyun.com/document_detail/466803.html) API operation is **active**, the accelerated IP address is associated with the endpoint.
     * *   The **CreateBasicAccelerateIpEndpointRelation** API operation cannot be repeatedly called for the same basic GA instance within a period of time.
     *  *
     * @param CreateBasicAccelerateIpEndpointRelationRequest $request CreateBasicAccelerateIpEndpointRelationRequest
     *
     * @return CreateBasicAccelerateIpEndpointRelationResponse CreateBasicAccelerateIpEndpointRelationResponse
     */
    public function createBasicAccelerateIpEndpointRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicAccelerateIpEndpointRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates mappings between accelerated IP addresses and endpoints for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   The **CreateBasicAccelerateIpEndpointRelations** is asynchronous. After you send a request, the system returns a request ID and runs the task in the system background. You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) or [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) API operation to query the status of an accelerated IP address or an endpoint to determine the association status.
     *     *   If an accelerated IP address and the endpoint are in the **binding** state, the accelerated IP address is being associated with the endpoint. In this case, you can only query the accelerated IP address and endpoint, but cannot perform other operations.
     *     *   If all the accelerated IP addresses and the endpoint are in the **bound** state, and the association status returned by the [ListBasicAccelerateIpEndpointRelations](https://help.aliyun.com/document_detail/466803.html) API operation is **active**, the accelerated IP addresses are associated with the endpoints.
     * *   The **CreateBasicAccelerateIpEndpointRelations** API operation cannot be repeatedly called for the same basic GA instance within a period of time.
     *  *
     * @param CreateBasicAccelerateIpEndpointRelationsRequest $request CreateBasicAccelerateIpEndpointRelationsRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBasicAccelerateIpEndpointRelationsResponse CreateBasicAccelerateIpEndpointRelationsResponse
     */
    public function createBasicAccelerateIpEndpointRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateIpEndpointRelations)) {
            $query['AccelerateIpEndpointRelations'] = $request->accelerateIpEndpointRelations;
        }
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicAccelerateIpEndpointRelations',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBasicAccelerateIpEndpointRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates mappings between accelerated IP addresses and endpoints for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   The **CreateBasicAccelerateIpEndpointRelations** is asynchronous. After you send a request, the system returns a request ID and runs the task in the system background. You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) or [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) API operation to query the status of an accelerated IP address or an endpoint to determine the association status.
     *     *   If an accelerated IP address and the endpoint are in the **binding** state, the accelerated IP address is being associated with the endpoint. In this case, you can only query the accelerated IP address and endpoint, but cannot perform other operations.
     *     *   If all the accelerated IP addresses and the endpoint are in the **bound** state, and the association status returned by the [ListBasicAccelerateIpEndpointRelations](https://help.aliyun.com/document_detail/466803.html) API operation is **active**, the accelerated IP addresses are associated with the endpoints.
     * *   The **CreateBasicAccelerateIpEndpointRelations** API operation cannot be repeatedly called for the same basic GA instance within a period of time.
     *  *
     * @param CreateBasicAccelerateIpEndpointRelationsRequest $request CreateBasicAccelerateIpEndpointRelationsRequest
     *
     * @return CreateBasicAccelerateIpEndpointRelationsResponse CreateBasicAccelerateIpEndpointRelationsResponse
     */
    public function createBasicAccelerateIpEndpointRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicAccelerateIpEndpointRelationsWithOptions($request, $runtime);
    }

    /**
     * @summary Basic Global Accelerator (GA) instances leverage the immense bandwidth of the high-quality global network of Alibaba Cloud to provide end-to-end acceleration services. You can use basic GA instances to accelerate content delivery at Layer 3 (IP). You can call the CreateBasicAccelerator operation to create a basic GA instance.
     *  *
     * @description **CreateBasicAccelerator** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicAccelerator](https://help.aliyun.com/document_detail/353188.html) or [ListBasicAccelerators](https://help.aliyun.com/document_detail/353189.html) operation to query the status of the task.
     * *   If the basic GA instance is in the **init** state, it indicates that the basic GA instance is being created. In this case, you can perform only query operations.
     * *   If the basic GA instance is in the **active** state, it indicates that the basic GA instance is created.
     *  *
     * @param CreateBasicAcceleratorRequest $request CreateBasicAcceleratorRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBasicAcceleratorResponse CreateBasicAcceleratorResponse
     */
    public function createBasicAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewDuration)) {
            $query['AutoRenewDuration'] = $request->autoRenewDuration;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->bandwidthBillingType)) {
            $query['BandwidthBillingType'] = $request->bandwidthBillingType;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBasicAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Basic Global Accelerator (GA) instances leverage the immense bandwidth of the high-quality global network of Alibaba Cloud to provide end-to-end acceleration services. You can use basic GA instances to accelerate content delivery at Layer 3 (IP). You can call the CreateBasicAccelerator operation to create a basic GA instance.
     *  *
     * @description **CreateBasicAccelerator** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicAccelerator](https://help.aliyun.com/document_detail/353188.html) or [ListBasicAccelerators](https://help.aliyun.com/document_detail/353189.html) operation to query the status of the task.
     * *   If the basic GA instance is in the **init** state, it indicates that the basic GA instance is being created. In this case, you can perform only query operations.
     * *   If the basic GA instance is in the **active** state, it indicates that the basic GA instance is created.
     *  *
     * @param CreateBasicAcceleratorRequest $request CreateBasicAcceleratorRequest
     *
     * @return CreateBasicAcceleratorResponse CreateBasicAcceleratorResponse
     */
    public function createBasicAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an endpoint for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) API operation to query the status of an endpoint.
     *     *   If the endpoint is in the **init** state, the endpoint is being created. In this case, you can perform only query operations.
     *     *   If the endpoint is in the **active** state, the endpoint is created.
     * *   The **CreateBasicEndpoint** API operation cannot be repeatedly called for the same basic GA instance within a specific period of time.
     *  *
     * @param CreateBasicEndpointRequest $request CreateBasicEndpointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBasicEndpointResponse CreateBasicEndpointResponse
     */
    public function createBasicEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointAddress)) {
            $query['EndpointAddress'] = $request->endpointAddress;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointSubAddress)) {
            $query['EndpointSubAddress'] = $request->endpointSubAddress;
        }
        if (!Utils::isUnset($request->endpointSubAddressType)) {
            $query['EndpointSubAddressType'] = $request->endpointSubAddressType;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        if (!Utils::isUnset($request->endpointZoneId)) {
            $query['EndpointZoneId'] = $request->endpointZoneId;
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
            'action'      => 'CreateBasicEndpoint',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBasicEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an endpoint for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) API operation to query the status of an endpoint.
     *     *   If the endpoint is in the **init** state, the endpoint is being created. In this case, you can perform only query operations.
     *     *   If the endpoint is in the **active** state, the endpoint is created.
     * *   The **CreateBasicEndpoint** API operation cannot be repeatedly called for the same basic GA instance within a specific period of time.
     *  *
     * @param CreateBasicEndpointRequest $request CreateBasicEndpointRequest
     *
     * @return CreateBasicEndpointResponse CreateBasicEndpointResponse
     */
    public function createBasicEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an endpoint group for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicEndpointGroup** is an asynchronous operation. After a request is sent, the system returns an endpoint group ID and runs the task in the background. You can call the [GetBasicEndpointGroup](https://help.aliyun.com/document_detail/362984.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **init** state, the endpoint is being created. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, the endpoint group is created.
     * *   You cannot call the **CreateBasicEndpointGroup** operation again on the same GA instance before the previous request is completed.
     *  *
     * @param CreateBasicEndpointGroupRequest $request CreateBasicEndpointGroupRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBasicEndpointGroupResponse CreateBasicEndpointGroupResponse
     */
    public function createBasicEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointAddress)) {
            $query['EndpointAddress'] = $request->endpointAddress;
        }
        if (!Utils::isUnset($request->endpointGroupRegion)) {
            $query['EndpointGroupRegion'] = $request->endpointGroupRegion;
        }
        if (!Utils::isUnset($request->endpointSubAddress)) {
            $query['EndpointSubAddress'] = $request->endpointSubAddress;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
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
            'action'      => 'CreateBasicEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBasicEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an endpoint group for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicEndpointGroup** is an asynchronous operation. After a request is sent, the system returns an endpoint group ID and runs the task in the background. You can call the [GetBasicEndpointGroup](https://help.aliyun.com/document_detail/362984.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **init** state, the endpoint is being created. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, the endpoint group is created.
     * *   You cannot call the **CreateBasicEndpointGroup** operation again on the same GA instance before the previous request is completed.
     *  *
     * @param CreateBasicEndpointGroupRequest $request CreateBasicEndpointGroupRequest
     *
     * @return CreateBasicEndpointGroupResponse CreateBasicEndpointGroupResponse
     */
    public function createBasicEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates multiple endpoints for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicEndpoints** is an asynchronous operation. After you call this operation, the system returns a request ID and runs the task in the background. You can call the [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) operation to query the status of endpoints. - If one or more endpoints are in the **init** state, it indicates that the endpoints are being created. In this case, you can continue to perform query operations on the endpoints. If all endpoints are in the **active** state, it indicates that the endpoints are created.
     * *   You cannot call the **CreateBasicEndpoints** operation again on the same GA instance before the previous operation is complete.
     *  *
     * @param CreateBasicEndpointsRequest $request CreateBasicEndpointsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBasicEndpointsResponse CreateBasicEndpointsResponse
     */
    public function createBasicEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpoints)) {
            $query['Endpoints'] = $request->endpoints;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicEndpoints',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBasicEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates multiple endpoints for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **CreateBasicEndpoints** is an asynchronous operation. After you call this operation, the system returns a request ID and runs the task in the background. You can call the [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) operation to query the status of endpoints. - If one or more endpoints are in the **init** state, it indicates that the endpoints are being created. In this case, you can continue to perform query operations on the endpoints. If all endpoints are in the **active** state, it indicates that the endpoints are created.
     * *   You cannot call the **CreateBasicEndpoints** operation again on the same GA instance before the previous operation is complete.
     *  *
     * @param CreateBasicEndpointsRequest $request CreateBasicEndpointsRequest
     *
     * @return CreateBasicEndpointsResponse CreateBasicEndpointsResponse
     */
    public function createBasicEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an acceleration region for a basic Global Accelerator (GA) instance.
     *  *
     * @description Take note of the following limits:
     * *   You can specify only one acceleration region for each basic GA instance, and only IPv4 clients can connect to basic GA instances.
     * *   **CreateBasicIpSet** is an asynchronous operation. After you send a request, the system returns an acceleration region ID and runs the task in the background. You can call the [GetBasicIpSet](https://help.aliyun.com/document_detail/362987.html) operation to query the status of the task.
     *     *   If the acceleration region is in the **init** state, the acceleration region is being created. In this case, you can perform only query operations.
     *     *   If the acceleration region is in the **active** state, the acceleration region is created.
     * *   You cannot call the **CreateBasicIpSet** operation again on the same GA instance before the previous task is completed.
     *  *
     * @param CreateBasicIpSetRequest $request CreateBasicIpSetRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBasicIpSetResponse CreateBasicIpSetResponse
     */
    public function createBasicIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateRegionId)) {
            $query['AccelerateRegionId'] = $request->accelerateRegionId;
        }
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ispType)) {
            $query['IspType'] = $request->ispType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBasicIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an acceleration region for a basic Global Accelerator (GA) instance.
     *  *
     * @description Take note of the following limits:
     * *   You can specify only one acceleration region for each basic GA instance, and only IPv4 clients can connect to basic GA instances.
     * *   **CreateBasicIpSet** is an asynchronous operation. After you send a request, the system returns an acceleration region ID and runs the task in the background. You can call the [GetBasicIpSet](https://help.aliyun.com/document_detail/362987.html) operation to query the status of the task.
     *     *   If the acceleration region is in the **init** state, the acceleration region is being created. In this case, you can perform only query operations.
     *     *   If the acceleration region is in the **active** state, the acceleration region is created.
     * *   You cannot call the **CreateBasicIpSet** operation again on the same GA instance before the previous task is completed.
     *  *
     * @param CreateBasicIpSetRequest $request CreateBasicIpSetRequest
     *
     * @return CreateBasicIpSetResponse CreateBasicIpSetResponse
     */
    public function createBasicIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicIpSetWithOptions($request, $runtime);
    }

    /**
     * @summary After you configure a custom routing listener for a Global Accelerator (GA) instance, the GA instance generates a port mapping table based on the listener port range, mapping information (protocols and port ranges) of the associated endpoint groups, and IP addresses of endpoints (vSwitches), and forwards client requests to the specified IP addresses and ports in the vSwitches.
     * You can call this operation to create mappings for an endpoint group of a custom routing listener. Take note of the following items:
     * *   **CreateCustomRoutingEndpointGroupDestinations** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **updating** state, it indicates that the mappings are being created for the endpoint group. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that the mappings are created for the endpoint group.
     * *   You cannot call the **CreateCustomRoutingEndpointGroupDestinations** operation again on the same GA instance before the previous task is completed.
     * ### Prerequisites
     * Make sure that the following prerequisites are met before you call this operation:
     * *   A standard GA instance is created. For more information, see [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html).
     * *   A bandwidth plan is associated with the standard GA instance. For more information, see [BandwidthPackageAddAccelerator](https://help.aliyun.com/document_detail/153239.html).
     * *   An application is deployed as an endpoint to receive requests that are forwarded from GA. You can specify only vSwitches as endpoints for custom routing listeners.
     * *   The permissions to use custom routing listeners are acquired and a custom routing listener is created for the GA instance. The custom routing listener feature is in invitational preview. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex). For information about how to create a custom routing listener, see [CreateListener](https://help.aliyun.com/document_detail/153253.html).
     * *   An endpoint group is created for the custom routing listener. For more information, see [CreateCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/449363.html).
     *  *
     * @description readAndWrite
     *  *
     * @param CreateCustomRoutingEndpointGroupDestinationsRequest $request CreateCustomRoutingEndpointGroupDestinationsRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomRoutingEndpointGroupDestinationsResponse CreateCustomRoutingEndpointGroupDestinationsResponse
     */
    public function createCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationConfigurations)) {
            $query['DestinationConfigurations'] = $request->destinationConfigurations;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomRoutingEndpointGroupDestinations',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomRoutingEndpointGroupDestinationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary After you configure a custom routing listener for a Global Accelerator (GA) instance, the GA instance generates a port mapping table based on the listener port range, mapping information (protocols and port ranges) of the associated endpoint groups, and IP addresses of endpoints (vSwitches), and forwards client requests to the specified IP addresses and ports in the vSwitches.
     * You can call this operation to create mappings for an endpoint group of a custom routing listener. Take note of the following items:
     * *   **CreateCustomRoutingEndpointGroupDestinations** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **updating** state, it indicates that the mappings are being created for the endpoint group. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that the mappings are created for the endpoint group.
     * *   You cannot call the **CreateCustomRoutingEndpointGroupDestinations** operation again on the same GA instance before the previous task is completed.
     * ### Prerequisites
     * Make sure that the following prerequisites are met before you call this operation:
     * *   A standard GA instance is created. For more information, see [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html).
     * *   A bandwidth plan is associated with the standard GA instance. For more information, see [BandwidthPackageAddAccelerator](https://help.aliyun.com/document_detail/153239.html).
     * *   An application is deployed as an endpoint to receive requests that are forwarded from GA. You can specify only vSwitches as endpoints for custom routing listeners.
     * *   The permissions to use custom routing listeners are acquired and a custom routing listener is created for the GA instance. The custom routing listener feature is in invitational preview. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex). For information about how to create a custom routing listener, see [CreateListener](https://help.aliyun.com/document_detail/153253.html).
     * *   An endpoint group is created for the custom routing listener. For more information, see [CreateCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/449363.html).
     *  *
     * @description readAndWrite
     *  *
     * @param CreateCustomRoutingEndpointGroupDestinationsRequest $request CreateCustomRoutingEndpointGroupDestinationsRequest
     *
     * @return CreateCustomRoutingEndpointGroupDestinationsResponse CreateCustomRoutingEndpointGroupDestinationsResponse
     */
    public function createCustomRoutingEndpointGroupDestinations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates endpoint groups for a custom routing listener.
     *  *
     * @description Global Accelerator (GA) forwards client requests to endpoints in an endpoint group based on the routing type of the listener that is associated with the endpoint group.
     * *   After you configure an intelligent routing listener for a GA instance, the GA instance selects a nearby and healthy endpoint group and forwards client requests to a healthy endpoint in the endpoint group.
     * *   After you configure a custom routing listener for a GA instance, the instance generates a port mapping table based on the listener port range, protocols and port ranges of the associated endpoint groups, and IP addresses of endpoints (vSwitches), and forwards client requests to specified IP addresses and ports in the vSwitches.
     * You can call this operation to create endpoint groups for custom routing listeners. For information about how to create endpoint groups for intelligent routing listeners, see [CreateEndpointGroup](https://help.aliyun.com/document_detail/153259.html).
     * When you call this operation, take note of the following items:
     * *   **CreateCustomRoutingEndpointGroups** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) or [ListCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/449374.html) operation to query the status of the endpoint groups that are associated with custom routing listeners.
     *     *   If one or more endpoint groups are in the **init** state, it indicates that the endpoint groups are being created. In this case, you can perform only query operations.
     *     *   If all endpoint groups are in the **active** state, it indicates that the endpoint groups are created.
     * *   The **CreateCustomRoutingEndpointGroups** operation cannot be called repeatedly for the same GA instance within a specific period of time.
     * ### Prerequisites
     * Make sure that the following requirements are met before you call this operation:
     * *   A standard GA instance is created. For more information, see [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html).
     * *   A bandwidth plan is associated with the standard GA instance. For more information, see [BandwidthPackageAddAccelerator](https://help.aliyun.com/document_detail/153239.html).
     * *   An application is deployed to receive requests that are forwarded from GA. You can specify only vSwitches as endpoints for custom routing listeners.
     * *   The permissions to use custom routing listeners are acquired and a custom routing listener is created for the GA instance. Custom routing listeners are in invitational preview. To use custom routing listeners, contact your account manager. For more information about how to create a custom routing listener, see [CreateListener](https://help.aliyun.com/document_detail/153253.html).
     *  *
     * @param CreateCustomRoutingEndpointGroupsRequest $request CreateCustomRoutingEndpointGroupsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomRoutingEndpointGroupsResponse CreateCustomRoutingEndpointGroupsResponse
     */
    public function createCustomRoutingEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointGroupConfigurations)) {
            $query['EndpointGroupConfigurations'] = $request->endpointGroupConfigurations;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomRoutingEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomRoutingEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates endpoint groups for a custom routing listener.
     *  *
     * @description Global Accelerator (GA) forwards client requests to endpoints in an endpoint group based on the routing type of the listener that is associated with the endpoint group.
     * *   After you configure an intelligent routing listener for a GA instance, the GA instance selects a nearby and healthy endpoint group and forwards client requests to a healthy endpoint in the endpoint group.
     * *   After you configure a custom routing listener for a GA instance, the instance generates a port mapping table based on the listener port range, protocols and port ranges of the associated endpoint groups, and IP addresses of endpoints (vSwitches), and forwards client requests to specified IP addresses and ports in the vSwitches.
     * You can call this operation to create endpoint groups for custom routing listeners. For information about how to create endpoint groups for intelligent routing listeners, see [CreateEndpointGroup](https://help.aliyun.com/document_detail/153259.html).
     * When you call this operation, take note of the following items:
     * *   **CreateCustomRoutingEndpointGroups** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) or [ListCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/449374.html) operation to query the status of the endpoint groups that are associated with custom routing listeners.
     *     *   If one or more endpoint groups are in the **init** state, it indicates that the endpoint groups are being created. In this case, you can perform only query operations.
     *     *   If all endpoint groups are in the **active** state, it indicates that the endpoint groups are created.
     * *   The **CreateCustomRoutingEndpointGroups** operation cannot be called repeatedly for the same GA instance within a specific period of time.
     * ### Prerequisites
     * Make sure that the following requirements are met before you call this operation:
     * *   A standard GA instance is created. For more information, see [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html).
     * *   A bandwidth plan is associated with the standard GA instance. For more information, see [BandwidthPackageAddAccelerator](https://help.aliyun.com/document_detail/153239.html).
     * *   An application is deployed to receive requests that are forwarded from GA. You can specify only vSwitches as endpoints for custom routing listeners.
     * *   The permissions to use custom routing listeners are acquired and a custom routing listener is created for the GA instance. Custom routing listeners are in invitational preview. To use custom routing listeners, contact your account manager. For more information about how to create a custom routing listener, see [CreateListener](https://help.aliyun.com/document_detail/153253.html).
     *  *
     * @param CreateCustomRoutingEndpointGroupsRequest $request CreateCustomRoutingEndpointGroupsRequest
     *
     * @return CreateCustomRoutingEndpointGroupsResponse CreateCustomRoutingEndpointGroupsResponse
     */
    public function createCustomRoutingEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomRoutingEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates traffic destinations for an endpoint that is associated with a custom routing listener.
     *  *
     * @description This operation takes effect only when the traffic access policy of an endpoint allows traffic to specified destinations. You can call the [DescribeCustomRoutingEndpoint](https://help.aliyun.com/document_detail/449386.html) operation to query the traffic access policy of an endpoint. This operation takes effect only if the value of **TrafficToEndpointPolicy** is set to **AllowCustom**, which allows traffic to specific destinations.
     * When you call this operation, take note of the following items:
     * *   **CreateCustomRoutingEndpointTrafficPolicies** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **updating** state, the traffic destinations are being created. In this state, you can only query the traffic destinations.
     *     *   If the endpoint group is in the **active** state, the traffic destinations are created.
     * *   You cannot call the **CreateCustomRoutingEndpointTrafficPolicies** operation repeatedly for the same GA instance in a specific period of time.
     * ### [](#)Prerequisites
     * Before you call this operation, make sure that the following requirements are met:
     * *   A standard GA instance is created. For more information, see [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html).
     * *   If the bandwidth metering method of the standard GA instance is **pay-by-bandwidth**, a bandwidth plan must be associated with the standard GA instance. For more information, see [BandwidthPackageAddAccelerator](https://help.aliyun.com/document_detail/153239.html).
     * *   An application that serves as the endpoint of the standard GA instance is deployed to receive requests that are forwarded from GA. You can specify only vSwitches as endpoints for custom routing listeners.
     * *   The permissions to use custom routing listeners are acquired, and a custom routing listener is created. Custom routing listeners are in invitational preview. To use custom routing listeners, contact your account manager. For more information about how to create a custom routing listener, see [CreateListener](https://help.aliyun.com/document_detail/153253.html).
     * *   Endpoint groups are created for the custom routing listener. For more information, see [CreateCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/449363.html).
     * *   Endpoints are created for the custom routing listener. For more information, see [CreateCustomRoutingEndpoints](https://help.aliyun.com/document_detail/449382.html).
     *  *
     * @param CreateCustomRoutingEndpointTrafficPoliciesRequest $request CreateCustomRoutingEndpointTrafficPoliciesRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomRoutingEndpointTrafficPoliciesResponse CreateCustomRoutingEndpointTrafficPoliciesResponse
     */
    public function createCustomRoutingEndpointTrafficPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->policyConfigurations)) {
            $query['PolicyConfigurations'] = $request->policyConfigurations;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomRoutingEndpointTrafficPolicies',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomRoutingEndpointTrafficPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates traffic destinations for an endpoint that is associated with a custom routing listener.
     *  *
     * @description This operation takes effect only when the traffic access policy of an endpoint allows traffic to specified destinations. You can call the [DescribeCustomRoutingEndpoint](https://help.aliyun.com/document_detail/449386.html) operation to query the traffic access policy of an endpoint. This operation takes effect only if the value of **TrafficToEndpointPolicy** is set to **AllowCustom**, which allows traffic to specific destinations.
     * When you call this operation, take note of the following items:
     * *   **CreateCustomRoutingEndpointTrafficPolicies** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **updating** state, the traffic destinations are being created. In this state, you can only query the traffic destinations.
     *     *   If the endpoint group is in the **active** state, the traffic destinations are created.
     * *   You cannot call the **CreateCustomRoutingEndpointTrafficPolicies** operation repeatedly for the same GA instance in a specific period of time.
     * ### [](#)Prerequisites
     * Before you call this operation, make sure that the following requirements are met:
     * *   A standard GA instance is created. For more information, see [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html).
     * *   If the bandwidth metering method of the standard GA instance is **pay-by-bandwidth**, a bandwidth plan must be associated with the standard GA instance. For more information, see [BandwidthPackageAddAccelerator](https://help.aliyun.com/document_detail/153239.html).
     * *   An application that serves as the endpoint of the standard GA instance is deployed to receive requests that are forwarded from GA. You can specify only vSwitches as endpoints for custom routing listeners.
     * *   The permissions to use custom routing listeners are acquired, and a custom routing listener is created. Custom routing listeners are in invitational preview. To use custom routing listeners, contact your account manager. For more information about how to create a custom routing listener, see [CreateListener](https://help.aliyun.com/document_detail/153253.html).
     * *   Endpoint groups are created for the custom routing listener. For more information, see [CreateCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/449363.html).
     * *   Endpoints are created for the custom routing listener. For more information, see [CreateCustomRoutingEndpoints](https://help.aliyun.com/document_detail/449382.html).
     *  *
     * @param CreateCustomRoutingEndpointTrafficPoliciesRequest $request CreateCustomRoutingEndpointTrafficPoliciesRequest
     *
     * @return CreateCustomRoutingEndpointTrafficPoliciesResponse CreateCustomRoutingEndpointTrafficPoliciesResponse
     */
    public function createCustomRoutingEndpointTrafficPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomRoutingEndpointTrafficPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates endpoints for a custom routing listener.
     *  *
     * @description After you configure a custom routing listener for a Global Accelerator (GA) instance, the instance generates a port mapping table based on the listener port range, the protocols and port ranges of the associated endpoint groups, and the IP addresses of endpoints (vSwitches), and forwards client requests to specified IP addresses and ports in the vSwitches.
     * This operation is used to create endpoints for custom routing listeners. When you call this operation, take note of the following items:
     * *   **CreateCustomRoutingEndpoints** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of an endpoint group and determine whether endpoints are created in the endpoint group.
     *     *   If the endpoint group is in the **updating** state, it indicates that endpoints are being created. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that endpoints are created.
     * *   The **CreateCustomRoutingEndpoints** operation cannot be called repeatedly for the same GA instance within a specific period of time.
     * ### Prerequisites
     * The following operations are complete before you call this operation:
     * *   Create a standard GA instance. For more information, see [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html).
     * *   Associate a bandwidth plan with the standard GA instance. For more information, see [BandwidthPackageAddAccelerator](https://help.aliyun.com/document_detail/153239.html).
     * *   Deploy an application that serves as the endpoint of the GA instance. The application is used to receive requests that are forwarded from GA. You can specify only vSwitches as endpoints for custom routing listeners.
     * *   Apply for permissions to use custom routing listeners and create a custom routing listener for the standard GA instance. Custom routing listeners are in invitational preview. To use custom routing listeners, contact your account manager. For more information about how to create a custom routing listener, see [CreateListener](https://help.aliyun.com/document_detail/153253.html).
     * *   Create an endpoint group for the custom routing listener. For more information, see [CreateCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/449363.html).
     *  *
     * @param CreateCustomRoutingEndpointsRequest $request CreateCustomRoutingEndpointsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomRoutingEndpointsResponse CreateCustomRoutingEndpointsResponse
     */
    public function createCustomRoutingEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointConfigurations)) {
            $query['EndpointConfigurations'] = $request->endpointConfigurations;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomRoutingEndpoints',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomRoutingEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates endpoints for a custom routing listener.
     *  *
     * @description After you configure a custom routing listener for a Global Accelerator (GA) instance, the instance generates a port mapping table based on the listener port range, the protocols and port ranges of the associated endpoint groups, and the IP addresses of endpoints (vSwitches), and forwards client requests to specified IP addresses and ports in the vSwitches.
     * This operation is used to create endpoints for custom routing listeners. When you call this operation, take note of the following items:
     * *   **CreateCustomRoutingEndpoints** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of an endpoint group and determine whether endpoints are created in the endpoint group.
     *     *   If the endpoint group is in the **updating** state, it indicates that endpoints are being created. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that endpoints are created.
     * *   The **CreateCustomRoutingEndpoints** operation cannot be called repeatedly for the same GA instance within a specific period of time.
     * ### Prerequisites
     * The following operations are complete before you call this operation:
     * *   Create a standard GA instance. For more information, see [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html).
     * *   Associate a bandwidth plan with the standard GA instance. For more information, see [BandwidthPackageAddAccelerator](https://help.aliyun.com/document_detail/153239.html).
     * *   Deploy an application that serves as the endpoint of the GA instance. The application is used to receive requests that are forwarded from GA. You can specify only vSwitches as endpoints for custom routing listeners.
     * *   Apply for permissions to use custom routing listeners and create a custom routing listener for the standard GA instance. Custom routing listeners are in invitational preview. To use custom routing listeners, contact your account manager. For more information about how to create a custom routing listener, see [CreateListener](https://help.aliyun.com/document_detail/153253.html).
     * *   Create an endpoint group for the custom routing listener. For more information, see [CreateCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/449363.html).
     *  *
     * @param CreateCustomRoutingEndpointsRequest $request CreateCustomRoutingEndpointsRequest
     *
     * @return CreateCustomRoutingEndpointsResponse CreateCustomRoutingEndpointsResponse
     */
    public function createCustomRoutingEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomRoutingEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a domain name and associates it with Global Accelerator (GA) instances.
     *  *
     * @description After you associate an accelerated domain name that has obtained an ICP number with a Global Accelerator (GA) instance, you do not need to complete filing for the accelerated domain name or its subdomains on Alibaba Cloud.
     * You can call this operation to add an accelerated domain name and associate the accelerated domain name with GA instances. When you call this operation, take note of the following items:
     * *   If your accelerated domain name is hosted in the Chinese mainland, you must obtain an ICP number for the domain name.
     * *   The same accelerated domain name cannot be repeatedly associated with the same GA instance.
     * *   You cannot repeatedly call the **CreateDomain** operation by using the same Alibaba Cloud account within a specific period of time.
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorIds)) {
            $query['AcceleratorIds'] = $request->acceleratorIds;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a domain name and associates it with Global Accelerator (GA) instances.
     *  *
     * @description After you associate an accelerated domain name that has obtained an ICP number with a Global Accelerator (GA) instance, you do not need to complete filing for the accelerated domain name or its subdomains on Alibaba Cloud.
     * You can call this operation to add an accelerated domain name and associate the accelerated domain name with GA instances. When you call this operation, take note of the following items:
     * *   If your accelerated domain name is hosted in the Chinese mainland, you must obtain an ICP number for the domain name.
     * *   The same accelerated domain name cannot be repeatedly associated with the same GA instance.
     * *   You cannot repeatedly call the **CreateDomain** operation by using the same Alibaba Cloud account within a specific period of time.
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an endpoint group.
     *  *
     * @description *   When you call this operation to create a virtual endpoint group for a Layer 4 listener, make sure that a default endpoint group is created.
     * *   **CreateEndpointGroup** is an asynchronous operation. After you send a request, the system returns the ID of an endpoint group, but the endpoint group is still being created in the system background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the state of the endpoint group.
     *     *   If the endpoint group is in the **init** state, it indicates that the endpoint group is being created. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that the endpoint group is created.
     * *   The **CreateEndpointGroup** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param CreateEndpointGroupRequest $request CreateEndpointGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEndpointGroupResponse CreateEndpointGroupResponse
     */
    public function createEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointConfigurations)) {
            $query['EndpointConfigurations'] = $request->endpointConfigurations;
        }
        if (!Utils::isUnset($request->endpointGroupRegion)) {
            $query['EndpointGroupRegion'] = $request->endpointGroupRegion;
        }
        if (!Utils::isUnset($request->endpointGroupType)) {
            $query['EndpointGroupType'] = $request->endpointGroupType;
        }
        if (!Utils::isUnset($request->endpointProtocolVersion)) {
            $query['EndpointProtocolVersion'] = $request->endpointProtocolVersion;
        }
        if (!Utils::isUnset($request->endpointRequestProtocol)) {
            $query['EndpointRequestProtocol'] = $request->endpointRequestProtocol;
        }
        if (!Utils::isUnset($request->healthCheckEnabled)) {
            $query['HealthCheckEnabled'] = $request->healthCheckEnabled;
        }
        if (!Utils::isUnset($request->healthCheckIntervalSeconds)) {
            $query['HealthCheckIntervalSeconds'] = $request->healthCheckIntervalSeconds;
        }
        if (!Utils::isUnset($request->healthCheckPath)) {
            $query['HealthCheckPath'] = $request->healthCheckPath;
        }
        if (!Utils::isUnset($request->healthCheckPort)) {
            $query['HealthCheckPort'] = $request->healthCheckPort;
        }
        if (!Utils::isUnset($request->healthCheckProtocol)) {
            $query['HealthCheckProtocol'] = $request->healthCheckProtocol;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->portOverrides)) {
            $query['PortOverrides'] = $request->portOverrides;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->thresholdCount)) {
            $query['ThresholdCount'] = $request->thresholdCount;
        }
        if (!Utils::isUnset($request->trafficPercentage)) {
            $query['TrafficPercentage'] = $request->trafficPercentage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an endpoint group.
     *  *
     * @description *   When you call this operation to create a virtual endpoint group for a Layer 4 listener, make sure that a default endpoint group is created.
     * *   **CreateEndpointGroup** is an asynchronous operation. After you send a request, the system returns the ID of an endpoint group, but the endpoint group is still being created in the system background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the state of the endpoint group.
     *     *   If the endpoint group is in the **init** state, it indicates that the endpoint group is being created. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that the endpoint group is created.
     * *   The **CreateEndpointGroup** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param CreateEndpointGroupRequest $request CreateEndpointGroupRequest
     *
     * @return CreateEndpointGroupResponse CreateEndpointGroupResponse
     */
    public function createEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates endpoint groups.
     *  *
     * @description *   **CreateEndpointGroups** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) or [ListEndpointGroups](https://help.aliyun.com/document_detail/153261.html) operation to query the status of the task:
     *     *   If the endpoint groups are in the **init** state, the endpoint groups are being created. In this case, you can perform only query operations.
     *     *   If all endpoint groups are in the **active** state, the endpoint groups are created.
     * *   The **CreateEndpointGroups** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param CreateEndpointGroupsRequest $request CreateEndpointGroupsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEndpointGroupsResponse CreateEndpointGroupsResponse
     */
    public function createEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->endpointGroupConfigurations)) {
            $bodyFlat['EndpointGroupConfigurations'] = $request->endpointGroupConfigurations;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates endpoint groups.
     *  *
     * @description *   **CreateEndpointGroups** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) or [ListEndpointGroups](https://help.aliyun.com/document_detail/153261.html) operation to query the status of the task:
     *     *   If the endpoint groups are in the **init** state, the endpoint groups are being created. In this case, you can perform only query operations.
     *     *   If all endpoint groups are in the **active** state, the endpoint groups are created.
     * *   The **CreateEndpointGroups** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param CreateEndpointGroupsRequest $request CreateEndpointGroupsRequest
     *
     * @return CreateEndpointGroupsResponse CreateEndpointGroupsResponse
     */
    public function createEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates forwarding rules.
     *  *
     * @description HTTP and HTTPS listeners of Global Accelerator (GA) support domain name-based and path-based forwarding rules. After an HTTP or HTTPS listener receives a request, the system matches the request against the forwarding conditions in a forwarding rule and then performs the corresponding forwarding action. For example, if you set **Host** to `www.example.com` as the forwarding condition and **Forward** to `epg-bp1enpdcrqhl78g6r****` as the forwarding action in a forwarding rule, requests to the `www.example.com` domain name match this forwarding rule and are forwarded to the `epg-bp1enpdcrqhl78g6r****` endpoint group. Before you call this API operation to create a forwarding rule, we recommend that you understand forwarding rules. For more information, see [Forwarding rules](https://help.aliyun.com/document_detail/204224.html).
     * When you call this operation, take note of the following items:
     * *   **CreateForwardingRules** is an asynchronous operation. After you send a request, the system returns the ID of a forwarding rule, but the forwarding rule is still being created in the system background. You can call the [ListForwardingRules](https://help.aliyun.com/document_detail/205817.html) operation to query the state of the forwarding rule.
     *     *   If the forwarding rule is in the **configuring** state, it indicates that the rule is being created. In this case, you can only perform query operations.
     *     *   If the forwarding rule is in the **active** state, it indicates that the rule is created.
     * *   The **CreateForwardingRules** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param CreateForwardingRulesRequest $request CreateForwardingRulesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateForwardingRulesResponse CreateForwardingRulesResponse
     */
    public function createForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->forwardingRules)) {
            $bodyFlat['ForwardingRules'] = $request->forwardingRules;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateForwardingRules',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateForwardingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates forwarding rules.
     *  *
     * @description HTTP and HTTPS listeners of Global Accelerator (GA) support domain name-based and path-based forwarding rules. After an HTTP or HTTPS listener receives a request, the system matches the request against the forwarding conditions in a forwarding rule and then performs the corresponding forwarding action. For example, if you set **Host** to `www.example.com` as the forwarding condition and **Forward** to `epg-bp1enpdcrqhl78g6r****` as the forwarding action in a forwarding rule, requests to the `www.example.com` domain name match this forwarding rule and are forwarded to the `epg-bp1enpdcrqhl78g6r****` endpoint group. Before you call this API operation to create a forwarding rule, we recommend that you understand forwarding rules. For more information, see [Forwarding rules](https://help.aliyun.com/document_detail/204224.html).
     * When you call this operation, take note of the following items:
     * *   **CreateForwardingRules** is an asynchronous operation. After you send a request, the system returns the ID of a forwarding rule, but the forwarding rule is still being created in the system background. You can call the [ListForwardingRules](https://help.aliyun.com/document_detail/205817.html) operation to query the state of the forwarding rule.
     *     *   If the forwarding rule is in the **configuring** state, it indicates that the rule is being created. In this case, you can only perform query operations.
     *     *   If the forwarding rule is in the **active** state, it indicates that the rule is created.
     * *   The **CreateForwardingRules** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param CreateForwardingRulesRequest $request CreateForwardingRulesRequest
     *
     * @return CreateForwardingRulesResponse CreateForwardingRulesResponse
     */
    public function createForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates acceleration regions.
     *  *
     * @description *   **CreateIpSets** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of the task.
     *     *   If acceleration regions are in the **init** state, it indicates that the acceleration regions are being created. In this case, you can perform only query operations.
     *     *   If acceleration regions are in the **active** state, it indicates that the acceleration regions are created.
     * *   You cannot call the **CreateIpSets** operation again on the same GA instance before the previous operation is completed.
     *  *
     * @param CreateIpSetsRequest $request CreateIpSetsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIpSetsResponse CreateIpSetsResponse
     */
    public function createIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateRegion)) {
            $query['AccelerateRegion'] = $request->accelerateRegion;
        }
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIpSets',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIpSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates acceleration regions.
     *  *
     * @description *   **CreateIpSets** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of the task.
     *     *   If acceleration regions are in the **init** state, it indicates that the acceleration regions are being created. In this case, you can perform only query operations.
     *     *   If acceleration regions are in the **active** state, it indicates that the acceleration regions are created.
     * *   You cannot call the **CreateIpSets** operation again on the same GA instance before the previous operation is completed.
     *  *
     * @param CreateIpSetsRequest $request CreateIpSetsRequest
     *
     * @return CreateIpSetsResponse CreateIpSetsResponse
     */
    public function createIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpSetsWithOptions($request, $runtime);
    }

    /**
     * @summary A listener checks connection requests and distributes the requests to endpoints based on forwarding rules that are defined by the scheduling algorithm. You can call the CreateListener operation to create a listener for a GA instance.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   **CreateListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the status of the task.
     *     *   If the listener is in the **init** state, the listener is being created. In this state, you can perform only query operations.
     *     *   If the listener is in the **active** state, the listener is created.
     * *   You cannot repeatedly call the **CreateListener** operation for the same GA instance within the specified period of time.
     *  *
     * @param CreateListenerRequest $request CreateListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateListenerResponse CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->certificates)) {
            $query['Certificates'] = $request->certificates;
        }
        if (!Utils::isUnset($request->clientAffinity)) {
            $query['ClientAffinity'] = $request->clientAffinity;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->customRoutingEndpointGroupConfigurations)) {
            $query['CustomRoutingEndpointGroupConfigurations'] = $request->customRoutingEndpointGroupConfigurations;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointGroupConfigurations)) {
            $query['EndpointGroupConfigurations'] = $request->endpointGroupConfigurations;
        }
        if (!Utils::isUnset($request->httpVersion)) {
            $query['HttpVersion'] = $request->httpVersion;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->portRanges)) {
            $query['PortRanges'] = $request->portRanges;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->proxyProtocol)) {
            $query['ProxyProtocol'] = $request->proxyProtocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $query['SecurityPolicyId'] = $request->securityPolicyId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->XForwardedForConfig)) {
            $query['XForwardedForConfig'] = $request->XForwardedForConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary A listener checks connection requests and distributes the requests to endpoints based on forwarding rules that are defined by the scheduling algorithm. You can call the CreateListener operation to create a listener for a GA instance.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   **CreateListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the status of the task.
     *     *   If the listener is in the **init** state, the listener is being created. In this state, you can perform only query operations.
     *     *   If the listener is in the **active** state, the listener is created.
     * *   You cannot repeatedly call the **CreateListener** operation for the same GA instance within the specified period of time.
     *  *
     * @param CreateListenerRequest $request CreateListenerRequest
     *
     * @return CreateListenerResponse CreateListenerResponse
     */
    public function createListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates secondary IP addresses for a CNAME that is assigned to a Global Accelerator (GA) instance. If an acceleration area of the GA instance becomes unavailable, access traffic is redirected to the secondary IP addresses.
     *  *
     * @description *   **CreateSpareIps** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of a GA instance.
     *     *   If the GA instance is in the **configuring** state, it indicates that secondary IP addresses are being created for the CNAME that is assigned to the GA instance. In this case, you can only perform query operations.
     *     *   If the GA instance is in the **active** state, it indicates that secondary IP addresses are created for the CNAME that is assigned to the GA instance.
     * *   The **CreateSpareIps** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param CreateSpareIpsRequest $request CreateSpareIpsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSpareIpsResponse CreateSpareIpsResponse
     */
    public function createSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->spareIps)) {
            $query['SpareIps'] = $request->spareIps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSpareIps',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSpareIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates secondary IP addresses for a CNAME that is assigned to a Global Accelerator (GA) instance. If an acceleration area of the GA instance becomes unavailable, access traffic is redirected to the secondary IP addresses.
     *  *
     * @description *   **CreateSpareIps** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of a GA instance.
     *     *   If the GA instance is in the **configuring** state, it indicates that secondary IP addresses are being created for the CNAME that is assigned to the GA instance. In this case, you can only perform query operations.
     *     *   If the GA instance is in the **active** state, it indicates that secondary IP addresses are created for the CNAME that is assigned to the GA instance.
     * *   The **CreateSpareIps** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param CreateSpareIpsRequest $request CreateSpareIpsRequest
     *
     * @return CreateSpareIpsResponse CreateSpareIpsResponse
     */
    public function createSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Global Accelerator (GA) instance.
     *  *
     * @description *   You cannot delete subscription GA instances.
     * *   **DeleteAccelerator** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of the task.
     *     *   If the GA instance is in the **deleting** state, the GA instance is being deleted. In this case, you can perform only query operations.
     *     *   If the GA instance cannot be queried, the GA instance is deleted.
     *  *
     * @param DeleteAcceleratorRequest $request DeleteAcceleratorRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAcceleratorResponse DeleteAcceleratorResponse
     */
    public function deleteAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Global Accelerator (GA) instance.
     *  *
     * @description *   You cannot delete subscription GA instances.
     * *   **DeleteAccelerator** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of the task.
     *     *   If the GA instance is in the **deleting** state, the GA instance is being deleted. In this case, you can perform only query operations.
     *     *   If the GA instance cannot be queried, the GA instance is deleted.
     *  *
     * @param DeleteAcceleratorRequest $request DeleteAcceleratorRequest
     *
     * @return DeleteAcceleratorResponse DeleteAcceleratorResponse
     */
    public function deleteAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a access control list (ACL) of a Global Accelerator (GA) instance.
     *  *
     * @description **DeleteAcl** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [GetAcl](https://help.aliyun.com/document_detail/258292.html) operation to query the status of an ACL.
     * *   If the ACL is in the **deleting** state, it indicates that the ACL is being deleted. In this case, you can perform only query operations.
     * *   If the ACL cannot be queried, it indicates that the ACL is deleted.
     *  *
     * @param DeleteAclRequest $request DeleteAclRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAclResponse DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a access control list (ACL) of a Global Accelerator (GA) instance.
     *  *
     * @description **DeleteAcl** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [GetAcl](https://help.aliyun.com/document_detail/258292.html) operation to query the status of an ACL.
     * *   If the ACL is in the **deleting** state, it indicates that the ACL is being deleted. In this case, you can perform only query operations.
     * *   If the ACL cannot be queried, it indicates that the ACL is deleted.
     *  *
     * @param DeleteAclRequest $request DeleteAclRequest
     *
     * @return DeleteAclResponse DeleteAclResponse
     */
    public function deleteAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an origin probing task.
     *  *
     * @description *   **DeleteApplicationMonitor** is an asynchronous operation. After you call this operation, the system returns a request ID, but the operation is still being performed in the system background. You can call the [ListApplicationMonitor](https://help.aliyun.com/document_detail/408462.html) operation to query the state of an origin probing task.
     *     *   If the origin probing task is in the **deleting** state, it indicates that the task is being deleted. In this case, you can perform only query operations.
     *     *   If the origin probing task cannot be queried, it indicates that the task is deleted.
     * *   The **DeleteApplicationMonitor** operation cannot be called repeatedly for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteApplicationMonitorRequest $request DeleteApplicationMonitorRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationMonitorResponse DeleteApplicationMonitorResponse
     */
    public function deleteApplicationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
            'action'      => 'DeleteApplicationMonitor',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an origin probing task.
     *  *
     * @description *   **DeleteApplicationMonitor** is an asynchronous operation. After you call this operation, the system returns a request ID, but the operation is still being performed in the system background. You can call the [ListApplicationMonitor](https://help.aliyun.com/document_detail/408462.html) operation to query the state of an origin probing task.
     *     *   If the origin probing task is in the **deleting** state, it indicates that the task is being deleted. In this case, you can perform only query operations.
     *     *   If the origin probing task cannot be queried, it indicates that the task is deleted.
     * *   The **DeleteApplicationMonitor** operation cannot be called repeatedly for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteApplicationMonitorRequest $request DeleteApplicationMonitorRequest
     *
     * @return DeleteApplicationMonitorResponse DeleteApplicationMonitorResponse
     */
    public function deleteApplicationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a bandwidth plan.
     *  *
     * @description *   By default, subscription bandwidth plans cannot be deleted. If you want to unsubscribe from subscription bandwidth plans, go to the [Unsubscribe](https://usercenter2-intl.aliyun.com/refund/refund) page. Before you can unsubscribe from a subscription bandwidth plan that is associated with a Global Accelerator (GA) instance, you must disassociate the bandwidth plan from the GA instance. For information about how to disassociate a bandwidth plan from a GA instance, see [BandwidthPackageRemoveAccelerator](https://help.aliyun.com/document_detail/153240.html).
     * *   Bandwidth plans that are associated with GA instances cannot be deleted. Before you can delete a bandwidth plan that is associated with a GA instance, you must disassociate the bandwidth plan from the GA instance. For information about how to disassociate a bandwidth plan from a GA instance, see [BandwidthPackageRemoveAccelerator](https://help.aliyun.com/document_detail/153240.html).
     * *   **DeleteBandwidthPackage** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the task.
     *     *   If the bandwidth plan is in the **deleting** state, the bandwidth plan is being deleted. In this case, you can perform only query operations.
     *     *   If the bandwidth plan cannot be found, the bandwidth plan is deleted.
     * *   The **DeleteBandwidthPackage** operation cannot be repeatedly called for the same bandwidth plan within a specific period of time.
     *  *
     * @param DeleteBandwidthPackageRequest $request DeleteBandwidthPackageRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBandwidthPackageResponse DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a bandwidth plan.
     *  *
     * @description *   By default, subscription bandwidth plans cannot be deleted. If you want to unsubscribe from subscription bandwidth plans, go to the [Unsubscribe](https://usercenter2-intl.aliyun.com/refund/refund) page. Before you can unsubscribe from a subscription bandwidth plan that is associated with a Global Accelerator (GA) instance, you must disassociate the bandwidth plan from the GA instance. For information about how to disassociate a bandwidth plan from a GA instance, see [BandwidthPackageRemoveAccelerator](https://help.aliyun.com/document_detail/153240.html).
     * *   Bandwidth plans that are associated with GA instances cannot be deleted. Before you can delete a bandwidth plan that is associated with a GA instance, you must disassociate the bandwidth plan from the GA instance. For information about how to disassociate a bandwidth plan from a GA instance, see [BandwidthPackageRemoveAccelerator](https://help.aliyun.com/document_detail/153240.html).
     * *   **DeleteBandwidthPackage** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the task.
     *     *   If the bandwidth plan is in the **deleting** state, the bandwidth plan is being deleted. In this case, you can perform only query operations.
     *     *   If the bandwidth plan cannot be found, the bandwidth plan is deleted.
     * *   The **DeleteBandwidthPackage** operation cannot be repeatedly called for the same bandwidth plan within a specific period of time.
     *  *
     * @param DeleteBandwidthPackageRequest $request DeleteBandwidthPackageRequest
     *
     * @return DeleteBandwidthPackageResponse DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an accelerated IP address of a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **DeleteBasicAccelerateIp** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) operation to query the status of an accelerated IP address.
     *     *   If an accelerated IP address is in the **deleting** state, the accelerated IP address is being deleted. In this case, you can perform only query operations.
     *     *   If the system fails to return information about an accelerated IP address, the accelerated IP address is deleted.
     * *   You cannot repeatedly call the **DeleteBasicAccelerateIp** operation for the same basic GA instance within a specific period of time.
     *  *
     * @param DeleteBasicAccelerateIpRequest $request DeleteBasicAccelerateIpRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBasicAccelerateIpResponse DeleteBasicAccelerateIpResponse
     */
    public function deleteBasicAccelerateIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateIpId)) {
            $query['AccelerateIpId'] = $request->accelerateIpId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicAccelerateIp',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicAccelerateIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an accelerated IP address of a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **DeleteBasicAccelerateIp** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) operation to query the status of an accelerated IP address.
     *     *   If an accelerated IP address is in the **deleting** state, the accelerated IP address is being deleted. In this case, you can perform only query operations.
     *     *   If the system fails to return information about an accelerated IP address, the accelerated IP address is deleted.
     * *   You cannot repeatedly call the **DeleteBasicAccelerateIp** operation for the same basic GA instance within a specific period of time.
     *  *
     * @param DeleteBasicAccelerateIpRequest $request DeleteBasicAccelerateIpRequest
     *
     * @return DeleteBasicAccelerateIpResponse DeleteBasicAccelerateIpResponse
     */
    public function deleteBasicAccelerateIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicAccelerateIpWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a mapping between an accelerated IP address and an endpoint for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **DeleteBasicAccelerateIpEndpointRelation** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the following operations to check whether an accelerated IP address is disassociated from an endpoint:
     *     *   You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) and [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) operations to query the status of an accelerated IP address and an endpoint. If the accelerated IP address and the endpoint are in the **unbinding** state, the accelerated IP address is being disassociated from the endpoint. In this case, you can query the IP address and endpoint but cannot perform other operations.
     *     *   If the association status between the accelerated IP address and the endpoint cannot be queried by calling the [ListBasicAccelerateIpEndpointRelations](https://help.aliyun.com/document_detail/466803.html) operation, the accelerated IP address is disassociated from the endpoint.
     * *   The **DeleteBasicAccelerateIpEndpointRelation** API operation cannot be repeatedly called for the same basic GA instance within a period of time.
     *  *
     * @param DeleteBasicAccelerateIpEndpointRelationRequest $request DeleteBasicAccelerateIpEndpointRelationRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBasicAccelerateIpEndpointRelationResponse DeleteBasicAccelerateIpEndpointRelationResponse
     */
    public function deleteBasicAccelerateIpEndpointRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateIpId)) {
            $query['AccelerateIpId'] = $request->accelerateIpId;
        }
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicAccelerateIpEndpointRelation',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicAccelerateIpEndpointRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a mapping between an accelerated IP address and an endpoint for a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **DeleteBasicAccelerateIpEndpointRelation** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the following operations to check whether an accelerated IP address is disassociated from an endpoint:
     *     *   You can call the [GetBasicAccelerateIp](https://help.aliyun.com/document_detail/466794.html) and [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) operations to query the status of an accelerated IP address and an endpoint. If the accelerated IP address and the endpoint are in the **unbinding** state, the accelerated IP address is being disassociated from the endpoint. In this case, you can query the IP address and endpoint but cannot perform other operations.
     *     *   If the association status between the accelerated IP address and the endpoint cannot be queried by calling the [ListBasicAccelerateIpEndpointRelations](https://help.aliyun.com/document_detail/466803.html) operation, the accelerated IP address is disassociated from the endpoint.
     * *   The **DeleteBasicAccelerateIpEndpointRelation** API operation cannot be repeatedly called for the same basic GA instance within a period of time.
     *  *
     * @param DeleteBasicAccelerateIpEndpointRelationRequest $request DeleteBasicAccelerateIpEndpointRelationRequest
     *
     * @return DeleteBasicAccelerateIpEndpointRelationResponse DeleteBasicAccelerateIpEndpointRelationResponse
     */
    public function deleteBasicAccelerateIpEndpointRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicAccelerateIpEndpointRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a basic Global Accelerator (GA) instance.
     *  *
     * @description *   You cannot delete subscription basic GA instances. You can unsubscribe from a basic GA instance on the [Unsubscribe](https://usercenter2-intl.aliyun.com/refund/refund) page. Before you unsubscribe from a basic GA instance, make sure that the acceleration areas and endpoint groups of the GA instance are deleted and no bandwidth plans are associated with the GA instance.
     *     *   For information about how to delete an acceleration area, see [DeleteBasicIpSet](https://help.aliyun.com/document_detail/2253388.html).
     *     *   For information about how to delete an endpoint group, see [DeleteBasicEndpointGroup](https://help.aliyun.com/document_detail/2253399.html).
     *     *   For information about how to disassociate a bandwidth plan from a basic GA instance, see [BandwidthPackageRemoveAccelerator](https://help.aliyun.com/document_detail/153240.html).
     * *   Before you call this operation to delete a pay-as-you-go basic GA instance, make sure that all data is migrated and the acceleration areas and endpoint groups of the instance are deleted.
     *     *   For information about how to delete an acceleration area, see [DeleteBasicIpSet](https://help.aliyun.com/document_detail/2253388.html).
     *     *   For information about how to delete an endpoint group, see [DeleteBasicEndpointGroup](https://help.aliyun.com/document_detail/2253399.html).
     * *   **DeleteBasicAccelerator** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicAccelerator](https://help.aliyun.com/document_detail/353188.html) operation to query the status of the task.
     *     *   If the basic GA instance is in the **deleting** state, it indicates that the instance is being deleted. In this case, you can perform only query operations.
     *     *   If the information about the basic GA instance is not displayed in the response, it indicates that the instance is deleted.
     *  *
     * @param DeleteBasicAcceleratorRequest $request DeleteBasicAcceleratorRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBasicAcceleratorResponse DeleteBasicAcceleratorResponse
     */
    public function deleteBasicAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a basic Global Accelerator (GA) instance.
     *  *
     * @description *   You cannot delete subscription basic GA instances. You can unsubscribe from a basic GA instance on the [Unsubscribe](https://usercenter2-intl.aliyun.com/refund/refund) page. Before you unsubscribe from a basic GA instance, make sure that the acceleration areas and endpoint groups of the GA instance are deleted and no bandwidth plans are associated with the GA instance.
     *     *   For information about how to delete an acceleration area, see [DeleteBasicIpSet](https://help.aliyun.com/document_detail/2253388.html).
     *     *   For information about how to delete an endpoint group, see [DeleteBasicEndpointGroup](https://help.aliyun.com/document_detail/2253399.html).
     *     *   For information about how to disassociate a bandwidth plan from a basic GA instance, see [BandwidthPackageRemoveAccelerator](https://help.aliyun.com/document_detail/153240.html).
     * *   Before you call this operation to delete a pay-as-you-go basic GA instance, make sure that all data is migrated and the acceleration areas and endpoint groups of the instance are deleted.
     *     *   For information about how to delete an acceleration area, see [DeleteBasicIpSet](https://help.aliyun.com/document_detail/2253388.html).
     *     *   For information about how to delete an endpoint group, see [DeleteBasicEndpointGroup](https://help.aliyun.com/document_detail/2253399.html).
     * *   **DeleteBasicAccelerator** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicAccelerator](https://help.aliyun.com/document_detail/353188.html) operation to query the status of the task.
     *     *   If the basic GA instance is in the **deleting** state, it indicates that the instance is being deleted. In this case, you can perform only query operations.
     *     *   If the information about the basic GA instance is not displayed in the response, it indicates that the instance is deleted.
     *  *
     * @param DeleteBasicAcceleratorRequest $request DeleteBasicAcceleratorRequest
     *
     * @return DeleteBasicAcceleratorResponse DeleteBasicAcceleratorResponse
     */
    public function deleteBasicAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an endpoint that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **DeleteBasicEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) operation to query the status of endpoints.
     *     *   If the endpoint is in the **deleting** state, it indicates that the endpoint is being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint cannot be found, it indicates that the endpoint is deleted.
     * *   The **DeleteBasicEndpoint** API operation cannot be repeatedly called for the same basic GA instance within a period of time.
     *  *
     * @param DeleteBasicEndpointRequest $request DeleteBasicEndpointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBasicEndpointResponse DeleteBasicEndpointResponse
     */
    public function deleteBasicEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicEndpoint',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an endpoint that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **DeleteBasicEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListBasicEndpoints](https://help.aliyun.com/document_detail/466831.html) operation to query the status of endpoints.
     *     *   If the endpoint is in the **deleting** state, it indicates that the endpoint is being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint cannot be found, it indicates that the endpoint is deleted.
     * *   The **DeleteBasicEndpoint** API operation cannot be repeatedly called for the same basic GA instance within a period of time.
     *  *
     * @param DeleteBasicEndpointRequest $request DeleteBasicEndpointRequest
     *
     * @return DeleteBasicEndpointResponse DeleteBasicEndpointResponse
     */
    public function deleteBasicEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an endpoint group that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @description Before you delete an endpoint group, take note of the following items:
     * *   If an endpoint in the endpoint group is associated with an accelerated IP address, you cannot delete the endpoint group. You can call the [DeleteBasicAccelerateIpEndpointRelation](https://help.aliyun.com/document_detail/2253413.html) operation to disassociate the endpoint from the accelerated IP address.
     * *   If no endpoint in the endpoint group is associated with an accelerated IP address, you can delete the endpoint group. When you delete an endpoint group, all endpoints in the endpoint group are deleted.
     * *   **DeleteBasicEndpointGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicEndpointGroup](https://help.aliyun.com/document_detail/362984.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **deleting** state, the endpoint group is being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint group cannot be queried, the endpoint group is deleted.
     * *   The **DeleteBasicEndpointGroup** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param DeleteBasicEndpointGroupRequest $request DeleteBasicEndpointGroupRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBasicEndpointGroupResponse DeleteBasicEndpointGroupResponse
     */
    public function deleteBasicEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an endpoint group that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @description Before you delete an endpoint group, take note of the following items:
     * *   If an endpoint in the endpoint group is associated with an accelerated IP address, you cannot delete the endpoint group. You can call the [DeleteBasicAccelerateIpEndpointRelation](https://help.aliyun.com/document_detail/2253413.html) operation to disassociate the endpoint from the accelerated IP address.
     * *   If no endpoint in the endpoint group is associated with an accelerated IP address, you can delete the endpoint group. When you delete an endpoint group, all endpoints in the endpoint group are deleted.
     * *   **DeleteBasicEndpointGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicEndpointGroup](https://help.aliyun.com/document_detail/362984.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **deleting** state, the endpoint group is being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint group cannot be queried, the endpoint group is deleted.
     * *   The **DeleteBasicEndpointGroup** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param DeleteBasicEndpointGroupRequest $request DeleteBasicEndpointGroupRequest
     *
     * @return DeleteBasicEndpointGroupResponse DeleteBasicEndpointGroupResponse
     */
    public function deleteBasicEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the acceleration region of a basic Global Accelerator (GA) instance.
     *  *
     * @description *   If an accelerated IP address is associated with an endpoint, you cannot delete the acceleration region. You can call the [DeleteBasicAccelerateIpEndpointRelation](https://help.aliyun.com/document_detail/2253413.html) operation to disassociate the accelerated IP address from the endpoint.
     * *   \\*\\*DeleteBasicIpSet\\*\\* is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicIpSet](https://help.aliyun.com/document_detail/362987.html) operation to query the status of the task.
     *     *   If the acceleration region is in the **deleting** state, it indicates that the acceleration region is being deleted. In this case, you can perform only query operations.
     *     *   If the acceleration region cannot be queried, it indicates that the acceleration region is deleted.
     * *   The \\*\\*DeleteBasicIpSet\\*\\* operation cannot be repeatedly called for the same basic GA instance within a specific period of time.
     *  *
     * @param DeleteBasicIpSetRequest $request DeleteBasicIpSetRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBasicIpSetResponse DeleteBasicIpSetResponse
     */
    public function deleteBasicIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the acceleration region of a basic Global Accelerator (GA) instance.
     *  *
     * @description *   If an accelerated IP address is associated with an endpoint, you cannot delete the acceleration region. You can call the [DeleteBasicAccelerateIpEndpointRelation](https://help.aliyun.com/document_detail/2253413.html) operation to disassociate the accelerated IP address from the endpoint.
     * *   \\*\\*DeleteBasicIpSet\\*\\* is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicIpSet](https://help.aliyun.com/document_detail/362987.html) operation to query the status of the task.
     *     *   If the acceleration region is in the **deleting** state, it indicates that the acceleration region is being deleted. In this case, you can perform only query operations.
     *     *   If the acceleration region cannot be queried, it indicates that the acceleration region is deleted.
     * *   The \\*\\*DeleteBasicIpSet\\*\\* operation cannot be repeatedly called for the same basic GA instance within a specific period of time.
     *  *
     * @param DeleteBasicIpSetRequest $request DeleteBasicIpSetRequest
     *
     * @return DeleteBasicIpSetResponse DeleteBasicIpSetResponse
     */
    public function deleteBasicIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicIpSetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes mappings from an endpoint group that is associated with a custom routing listener.
     *  *
     * @description *   **DeleteCustomRoutingEndpointGroupDestinations** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) to query the status of the task.
     *     *   If the endpoint group is in the **updating** state, it indicates that mappings are being deleted from the endpoint group. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state and no information about the mappings that you want to delete is found in the response when you call the [DescribeCustomRoutingEndpointGroupDestinations](https://help.aliyun.com/document_detail/449378.html) operation, it indicates the mappings are deleted from the endpoint group.
     * *   You cannot call the **DeleteCustomRoutingEndpointGroupDestinations** operation again on the same Global Accelerator (GA) instance before the previous request is completed.
     *  *
     * @param DeleteCustomRoutingEndpointGroupDestinationsRequest $request DeleteCustomRoutingEndpointGroupDestinationsRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomRoutingEndpointGroupDestinationsResponse DeleteCustomRoutingEndpointGroupDestinationsResponse
     */
    public function deleteCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationIds)) {
            $query['DestinationIds'] = $request->destinationIds;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomRoutingEndpointGroupDestinations',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomRoutingEndpointGroupDestinationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes mappings from an endpoint group that is associated with a custom routing listener.
     *  *
     * @description *   **DeleteCustomRoutingEndpointGroupDestinations** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) to query the status of the task.
     *     *   If the endpoint group is in the **updating** state, it indicates that mappings are being deleted from the endpoint group. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state and no information about the mappings that you want to delete is found in the response when you call the [DescribeCustomRoutingEndpointGroupDestinations](https://help.aliyun.com/document_detail/449378.html) operation, it indicates the mappings are deleted from the endpoint group.
     * *   You cannot call the **DeleteCustomRoutingEndpointGroupDestinations** operation again on the same Global Accelerator (GA) instance before the previous request is completed.
     *  *
     * @param DeleteCustomRoutingEndpointGroupDestinationsRequest $request DeleteCustomRoutingEndpointGroupDestinationsRequest
     *
     * @return DeleteCustomRoutingEndpointGroupDestinationsResponse DeleteCustomRoutingEndpointGroupDestinationsResponse
     */
    public function deleteCustomRoutingEndpointGroupDestinations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple endpoint groups that are associated with a custom routing listener.
     *  *
     * @description *   **DeleteCustomRoutingEndpointGroups** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the state of the endpoint groups associated with a custom routing listener that you attempt to delete.
     *     *   If the endpoint groups are in the **deleting** state, the endpoint groups are being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint groups cannot be queried, the endpoint groups are deleted.
     * *   You cannot use the **DeleteCustomRoutingEndpointGroups** operation on the same Global Accelerator (GA) instance before the previous operation is complete.
     *  *
     * @param DeleteCustomRoutingEndpointGroupsRequest $request DeleteCustomRoutingEndpointGroupsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomRoutingEndpointGroupsResponse DeleteCustomRoutingEndpointGroupsResponse
     */
    public function deleteCustomRoutingEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointGroupIds)) {
            $query['EndpointGroupIds'] = $request->endpointGroupIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomRoutingEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomRoutingEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple endpoint groups that are associated with a custom routing listener.
     *  *
     * @description *   **DeleteCustomRoutingEndpointGroups** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the state of the endpoint groups associated with a custom routing listener that you attempt to delete.
     *     *   If the endpoint groups are in the **deleting** state, the endpoint groups are being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint groups cannot be queried, the endpoint groups are deleted.
     * *   You cannot use the **DeleteCustomRoutingEndpointGroups** operation on the same Global Accelerator (GA) instance before the previous operation is complete.
     *  *
     * @param DeleteCustomRoutingEndpointGroupsRequest $request DeleteCustomRoutingEndpointGroupsRequest
     *
     * @return DeleteCustomRoutingEndpointGroupsResponse DeleteCustomRoutingEndpointGroupsResponse
     */
    public function deleteCustomRoutingEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomRoutingEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes traffic destinations from an endpoint.
     *  *
     * @description *   **DeleteCustomRoutingEndpointTrafficPolicies** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of an endpoint group to check whether the traffic destinations are deleted.
     *     *   If the endpoint group is in the **updating** state, the traffic destinations are being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state and the traffic destinations that you want to delete cannot be queried by calling the [DescribeCustomRoutingEndPointTrafficPolicy](https://help.aliyun.com/document_detail/449392.html) operation, the traffic destinations are deleted.
     * *   The **DeleteCustomRoutingEndpointTrafficPolicies** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteCustomRoutingEndpointTrafficPoliciesRequest $request DeleteCustomRoutingEndpointTrafficPoliciesRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomRoutingEndpointTrafficPoliciesResponse DeleteCustomRoutingEndpointTrafficPoliciesResponse
     */
    public function deleteCustomRoutingEndpointTrafficPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->policyIds)) {
            $query['PolicyIds'] = $request->policyIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomRoutingEndpointTrafficPolicies',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomRoutingEndpointTrafficPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes traffic destinations from an endpoint.
     *  *
     * @description *   **DeleteCustomRoutingEndpointTrafficPolicies** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of an endpoint group to check whether the traffic destinations are deleted.
     *     *   If the endpoint group is in the **updating** state, the traffic destinations are being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state and the traffic destinations that you want to delete cannot be queried by calling the [DescribeCustomRoutingEndPointTrafficPolicy](https://help.aliyun.com/document_detail/449392.html) operation, the traffic destinations are deleted.
     * *   The **DeleteCustomRoutingEndpointTrafficPolicies** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteCustomRoutingEndpointTrafficPoliciesRequest $request DeleteCustomRoutingEndpointTrafficPoliciesRequest
     *
     * @return DeleteCustomRoutingEndpointTrafficPoliciesResponse DeleteCustomRoutingEndpointTrafficPoliciesResponse
     */
    public function deleteCustomRoutingEndpointTrafficPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomRoutingEndpointTrafficPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes endpoints from a custom routing listener.
     *  *
     * @description *   **DeleteCustomRoutingEndpoints** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) to query the status of the task.
     *     *   If an endpoint group is in the **updating** state, the endpoint is being deleted. In this case, you can perform only query operations.
     *     *   If an endpoint group is in the **active** state and the endpoint cannot be found after you call the [DescribeCustomRoutingEndpoint](https://help.aliyun.com/document_detail/449386.html) operation, the endpoint is deleted.
     * *   You cannot call the **DeleteCustomRoutingEndpoints** operation again on the same Global Accelerator (GA) instance before the previous task is completed.
     *  *
     * @param DeleteCustomRoutingEndpointsRequest $request DeleteCustomRoutingEndpointsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomRoutingEndpointsResponse DeleteCustomRoutingEndpointsResponse
     */
    public function deleteCustomRoutingEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointIds)) {
            $query['EndpointIds'] = $request->endpointIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomRoutingEndpoints',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomRoutingEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes endpoints from a custom routing listener.
     *  *
     * @description *   **DeleteCustomRoutingEndpoints** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) to query the status of the task.
     *     *   If an endpoint group is in the **updating** state, the endpoint is being deleted. In this case, you can perform only query operations.
     *     *   If an endpoint group is in the **active** state and the endpoint cannot be found after you call the [DescribeCustomRoutingEndpoint](https://help.aliyun.com/document_detail/449386.html) operation, the endpoint is deleted.
     * *   You cannot call the **DeleteCustomRoutingEndpoints** operation again on the same Global Accelerator (GA) instance before the previous task is completed.
     *  *
     * @param DeleteCustomRoutingEndpointsRequest $request DeleteCustomRoutingEndpointsRequest
     *
     * @return DeleteCustomRoutingEndpointsResponse DeleteCustomRoutingEndpointsResponse
     */
    public function deleteCustomRoutingEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomRoutingEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a domain name from Global Accelerator (GA) instances.
     *  *
     * @description You cannot call the **DeleteDomainAcceleratorRelation** operation again by using the same Alibaba Cloud account before the previous operation is complete.
     *  *
     * @param DeleteDomainAcceleratorRelationRequest $request DeleteDomainAcceleratorRelationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainAcceleratorRelationResponse DeleteDomainAcceleratorRelationResponse
     */
    public function deleteDomainAcceleratorRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorIds)) {
            $query['AcceleratorIds'] = $request->acceleratorIds;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainAcceleratorRelation',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainAcceleratorRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a domain name from Global Accelerator (GA) instances.
     *  *
     * @description You cannot call the **DeleteDomainAcceleratorRelation** operation again by using the same Alibaba Cloud account before the previous operation is complete.
     *  *
     * @param DeleteDomainAcceleratorRelationRequest $request DeleteDomainAcceleratorRelationRequest
     *
     * @return DeleteDomainAcceleratorRelationResponse DeleteDomainAcceleratorRelationResponse
     */
    public function deleteDomainAcceleratorRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainAcceleratorRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an endpoint group.
     *  *
     * @description *   **DeleteEndpointGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the status of the endpoint group.
     *     *   If the endpoint group is in the **deleting** state, it indicates that the endpoint group is being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint group cannot be queried, it indicates that the endpoint group is deleted.
     * *   The **DeleteEndpointGroup** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param DeleteEndpointGroupRequest $request DeleteEndpointGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEndpointGroupResponse DeleteEndpointGroupResponse
     */
    public function deleteEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an endpoint group.
     *  *
     * @description *   **DeleteEndpointGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the status of the endpoint group.
     *     *   If the endpoint group is in the **deleting** state, it indicates that the endpoint group is being deleted. In this case, you can perform only query operations.
     *     *   If the endpoint group cannot be queried, it indicates that the endpoint group is deleted.
     * *   The **DeleteEndpointGroup** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param DeleteEndpointGroupRequest $request DeleteEndpointGroupRequest
     *
     * @return DeleteEndpointGroupResponse DeleteEndpointGroupResponse
     */
    public function deleteEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes endpoint groups.
     *  *
     * @description *   **DeleteEndpointGroups** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the status of the task.
     *     *   If an endpoint group is in the **deleting** state, the endpoint group is being deleted. In this case, you can perform only query operations.
     *     *   If an endpoint group cannot be queried, the endpoint group is deleted.
     * *   The **DeleteEndpointGroups** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteEndpointGroupsRequest $request DeleteEndpointGroupsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEndpointGroupsResponse DeleteEndpointGroupsResponse
     */
    public function deleteEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointGroupIds)) {
            $query['EndpointGroupIds'] = $request->endpointGroupIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes endpoint groups.
     *  *
     * @description *   **DeleteEndpointGroups** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the status of the task.
     *     *   If an endpoint group is in the **deleting** state, the endpoint group is being deleted. In this case, you can perform only query operations.
     *     *   If an endpoint group cannot be queried, the endpoint group is deleted.
     * *   The **DeleteEndpointGroups** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteEndpointGroupsRequest $request DeleteEndpointGroupsRequest
     *
     * @return DeleteEndpointGroupsResponse DeleteEndpointGroupsResponse
     */
    public function deleteEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes forwarding rules.
     *  *
     * @description *   **DeleteForwardingRules** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListForwardingRules](https://help.aliyun.com/document_detail/205817.html) operation to query the status of the task.
     *     *   If a forwarding rule is in the **deleting** state, the forwarding rule is being deleted. In this case, you can perform only query operations.
     *     *   If a forwarding rule cannot be queried, the forwarding rule is deleted.
     * *   The **DeleteForwardingRules** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteForwardingRulesRequest $request DeleteForwardingRulesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteForwardingRulesResponse DeleteForwardingRulesResponse
     */
    public function deleteForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forwardingRuleIds)) {
            $query['ForwardingRuleIds'] = $request->forwardingRuleIds;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteForwardingRules',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteForwardingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes forwarding rules.
     *  *
     * @description *   **DeleteForwardingRules** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListForwardingRules](https://help.aliyun.com/document_detail/205817.html) operation to query the status of the task.
     *     *   If a forwarding rule is in the **deleting** state, the forwarding rule is being deleted. In this case, you can perform only query operations.
     *     *   If a forwarding rule cannot be queried, the forwarding rule is deleted.
     * *   The **DeleteForwardingRules** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteForwardingRulesRequest $request DeleteForwardingRulesRequest
     *
     * @return DeleteForwardingRulesResponse DeleteForwardingRulesResponse
     */
    public function deleteForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an acceleration region.
     *  *
     * @description *   **DeleteIpSet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of an acceleration region.
     *     *   If the acceleration region is in the **deleting** state, it indicates that the acceleration region is being deleted. In this case, you can perform only query operations.
     *     *   If the acceleration region cannot be queried, it indicates that the acceleration region is deleted.
     * *   The **DeleteIpSet** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param DeleteIpSetRequest $request DeleteIpSetRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpSetResponse DeleteIpSetResponse
     */
    public function deleteIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an acceleration region.
     *  *
     * @description *   **DeleteIpSet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of an acceleration region.
     *     *   If the acceleration region is in the **deleting** state, it indicates that the acceleration region is being deleted. In this case, you can perform only query operations.
     *     *   If the acceleration region cannot be queried, it indicates that the acceleration region is deleted.
     * *   The **DeleteIpSet** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param DeleteIpSetRequest $request DeleteIpSetRequest
     *
     * @return DeleteIpSetResponse DeleteIpSetResponse
     */
    public function deleteIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpSetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes acceleration regions.
     *  *
     * @description *   **DeleteIpSets** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of the task.
     *     *   If the acceleration region is in the **deleting** state, the acceleration region is being deleted. In this case, you can perform only query operations.
     *     *   If you cannot query the acceleration region, the acceleration region is deleted.
     * *   You cannot repeatedly call the **DeleteIpSets** operation for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteIpSetsRequest $request DeleteIpSetsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpSetsResponse DeleteIpSetsResponse
     */
    public function deleteIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipSetIds)) {
            $query['IpSetIds'] = $request->ipSetIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpSets',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes acceleration regions.
     *  *
     * @description *   **DeleteIpSets** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of the task.
     *     *   If the acceleration region is in the **deleting** state, the acceleration region is being deleted. In this case, you can perform only query operations.
     *     *   If you cannot query the acceleration region, the acceleration region is deleted.
     * *   You cannot repeatedly call the **DeleteIpSets** operation for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteIpSetsRequest $request DeleteIpSetsRequest
     *
     * @return DeleteIpSetsResponse DeleteIpSetsResponse
     */
    public function deleteIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpSetsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a listener.
     *  *
     * @description *   Before you call the **DeleteListener** operation, make sure that no endpoint groups are associated with the listener that you want to delete. For information about how to delete an endpoint group, see the following topics:
     *     *   [DeleteEndpointGroup](https://help.aliyun.com/document_detail/2253305.html): deletes an endpoint group that is associated with an intelligent routing listener.
     *     *   [DeleteEndpointGroups](https://help.aliyun.com/document_detail/2253311.html): deletes multiple endpoint groups that are associated with intelligent routing listeners at the same time.
     *     *   [DeleteCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/2303183.html): deletes multiple endpoint groups that are associated with custom routing listeners at the same time.
     * *   **DeleteListener** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the status of the listener.
     *     *   If the listener is in the **deleting** state, the listener is being deleted. In this case, you can perform only query operations.
     *     *   If the listener cannot be queried, the listener is deleted.
     * *   You cannot repeatedly call the **DeleteListener** operation to delete the listeners of the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteListenerRequest $request DeleteListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteListenerResponse DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a listener.
     *  *
     * @description *   Before you call the **DeleteListener** operation, make sure that no endpoint groups are associated with the listener that you want to delete. For information about how to delete an endpoint group, see the following topics:
     *     *   [DeleteEndpointGroup](https://help.aliyun.com/document_detail/2253305.html): deletes an endpoint group that is associated with an intelligent routing listener.
     *     *   [DeleteEndpointGroups](https://help.aliyun.com/document_detail/2253311.html): deletes multiple endpoint groups that are associated with intelligent routing listeners at the same time.
     *     *   [DeleteCustomRoutingEndpointGroups](https://help.aliyun.com/document_detail/2303183.html): deletes multiple endpoint groups that are associated with custom routing listeners at the same time.
     * *   **DeleteListener** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the status of the listener.
     *     *   If the listener is in the **deleting** state, the listener is being deleted. In this case, you can perform only query operations.
     *     *   If the listener cannot be queried, the listener is deleted.
     * *   You cannot repeatedly call the **DeleteListener** operation to delete the listeners of the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DeleteListenerRequest $request DeleteListenerRequest
     *
     * @return DeleteListenerResponse DeleteListenerResponse
     */
    public function deleteListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the secondary IP addresses that are associated with a CNAME.
     *  *
     * @description *   **DeleteSpareIps** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of a GA instance.
     *     *   If the GA instance is in the **configuring** state, it indicates that the secondary IP addresses for the CNAME are being deleted. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state and the secondary IP addresses for the CNAME cannot be queried by calling the [ListSpareIps](https://help.aliyun.com/document_detail/262121.html) operation, it indicates that the IP addresses are deleted.
     * *   The **DeleteSpareIps** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param DeleteSpareIpsRequest $request DeleteSpareIpsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSpareIpsResponse DeleteSpareIpsResponse
     */
    public function deleteSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->spareIps)) {
            $query['SpareIps'] = $request->spareIps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSpareIps',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSpareIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the secondary IP addresses that are associated with a CNAME.
     *  *
     * @description *   **DeleteSpareIps** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of a GA instance.
     *     *   If the GA instance is in the **configuring** state, it indicates that the secondary IP addresses for the CNAME are being deleted. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state and the secondary IP addresses for the CNAME cannot be queried by calling the [ListSpareIps](https://help.aliyun.com/document_detail/262121.html) operation, it indicates that the IP addresses are deleted.
     * *   The **DeleteSpareIps** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param DeleteSpareIpsRequest $request DeleteSpareIpsRequest
     *
     * @return DeleteSpareIpsResponse DeleteSpareIpsResponse
     */
    public function deleteSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a Global Accelerator (GA) instance.
     *  *
     * @param DescribeAcceleratorRequest $request DescribeAcceleratorRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAcceleratorResponse DescribeAcceleratorResponse
     */
    public function describeAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a Global Accelerator (GA) instance.
     *  *
     * @param DescribeAcceleratorRequest $request DescribeAcceleratorRequest
     *
     * @return DescribeAcceleratorResponse DescribeAcceleratorResponse
     */
    public function describeAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the auto-renewal status of a Global Accelerator (GA) instance.
     *  *
     * @param DescribeAcceleratorAutoRenewAttributeRequest $request DescribeAcceleratorAutoRenewAttributeRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAcceleratorAutoRenewAttributeResponse DescribeAcceleratorAutoRenewAttributeResponse
     */
    public function describeAcceleratorAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAcceleratorAutoRenewAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAcceleratorAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the auto-renewal status of a Global Accelerator (GA) instance.
     *  *
     * @param DescribeAcceleratorAutoRenewAttributeRequest $request DescribeAcceleratorAutoRenewAttributeRequest
     *
     * @return DescribeAcceleratorAutoRenewAttributeResponse DescribeAcceleratorAutoRenewAttributeResponse
     */
    public function describeAcceleratorAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAcceleratorAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a pay-as-you-go Global Accelerator (GA) instance.
     *  *
     * @param DescribeAcceleratorServiceStatusRequest $request DescribeAcceleratorServiceStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAcceleratorServiceStatusResponse DescribeAcceleratorServiceStatusResponse
     */
    public function describeAcceleratorServiceStatusWithOptions($request, $runtime)
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
            'action'      => 'DescribeAcceleratorServiceStatus',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAcceleratorServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a pay-as-you-go Global Accelerator (GA) instance.
     *  *
     * @param DescribeAcceleratorServiceStatusRequest $request DescribeAcceleratorServiceStatusRequest
     *
     * @return DescribeAcceleratorServiceStatusResponse DescribeAcceleratorServiceStatusResponse
     */
    public function describeAcceleratorServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAcceleratorServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about an origin probing task.
     *  *
     * @param DescribeApplicationMonitorRequest $request DescribeApplicationMonitorRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationMonitorResponse DescribeApplicationMonitorResponse
     */
    public function describeApplicationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
            'action'      => 'DescribeApplicationMonitor',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about an origin probing task.
     *  *
     * @param DescribeApplicationMonitorRequest $request DescribeApplicationMonitorRequest
     *
     * @return DescribeApplicationMonitorResponse DescribeApplicationMonitorResponse
     */
    public function describeApplicationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a bandwidth plan.
     *  *
     * @param DescribeBandwidthPackageRequest $request DescribeBandwidthPackageRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBandwidthPackageResponse DescribeBandwidthPackageResponse
     */
    public function describeBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a bandwidth plan.
     *  *
     * @param DescribeBandwidthPackageRequest $request DescribeBandwidthPackageRequest
     *
     * @return DescribeBandwidthPackageResponse DescribeBandwidthPackageResponse
     */
    public function describeBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the auto-renewal status of a bandwidth plan.
     *  *
     * @param DescribeBandwidthPackageAutoRenewAttributeRequest $request DescribeBandwidthPackageAutoRenewAttributeRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBandwidthPackageAutoRenewAttributeResponse DescribeBandwidthPackageAutoRenewAttributeResponse
     */
    public function describeBandwidthPackageAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBandwidthPackageAutoRenewAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBandwidthPackageAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the auto-renewal status of a bandwidth plan.
     *  *
     * @param DescribeBandwidthPackageAutoRenewAttributeRequest $request DescribeBandwidthPackageAutoRenewAttributeRequest
     *
     * @return DescribeBandwidthPackageAutoRenewAttributeResponse DescribeBandwidthPackageAutoRenewAttributeResponse
     */
    public function describeBandwidthPackageAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthPackageAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about commodities.
     *  *
     * @param DescribeCommodityRequest $request DescribeCommodityRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCommodityResponse DescribeCommodityResponse
     */
    public function describeCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
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
            'action'      => 'DescribeCommodity',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about commodities.
     *  *
     * @param DescribeCommodityRequest $request DescribeCommodityRequest
     *
     * @return DescribeCommodityResponse DescribeCommodityResponse
     */
    public function describeCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommodityWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the prices of commodities.
     *  *
     * @description You can call the [DescribeCommodity](https://help.aliyun.com/document_detail/2253233.html) operation to query information about the commodity modules.
     *  *
     * @param DescribeCommodityPriceRequest $request DescribeCommodityPriceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCommodityPriceResponse DescribeCommodityPriceResponse
     */
    public function describeCommodityPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orders)) {
            $query['Orders'] = $request->orders;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCommodityPrice',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommodityPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the prices of commodities.
     *  *
     * @description You can call the [DescribeCommodity](https://help.aliyun.com/document_detail/2253233.html) operation to query information about the commodity modules.
     *  *
     * @param DescribeCommodityPriceRequest $request DescribeCommodityPriceRequest
     *
     * @return DescribeCommodityPriceResponse DescribeCommodityPriceResponse
     */
    public function describeCommodityPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommodityPriceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a traffic destination of an endpoint.
     *  *
     * @param DescribeCustomRoutingEndPointTrafficPolicyRequest $request DescribeCustomRoutingEndPointTrafficPolicyRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomRoutingEndPointTrafficPolicyResponse DescribeCustomRoutingEndPointTrafficPolicyResponse
     */
    public function describeCustomRoutingEndPointTrafficPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
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
            'action'      => 'DescribeCustomRoutingEndPointTrafficPolicy',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomRoutingEndPointTrafficPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a traffic destination of an endpoint.
     *  *
     * @param DescribeCustomRoutingEndPointTrafficPolicyRequest $request DescribeCustomRoutingEndPointTrafficPolicyRequest
     *
     * @return DescribeCustomRoutingEndPointTrafficPolicyResponse DescribeCustomRoutingEndPointTrafficPolicyResponse
     */
    public function describeCustomRoutingEndPointTrafficPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomRoutingEndPointTrafficPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a specified endpoint that is associated with a custom routing listener.
     *  *
     * @param DescribeCustomRoutingEndpointRequest $request DescribeCustomRoutingEndpointRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomRoutingEndpointResponse DescribeCustomRoutingEndpointResponse
     */
    public function describeCustomRoutingEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointGroup)) {
            $query['EndpointGroup'] = $request->endpointGroup;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomRoutingEndpoint',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomRoutingEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a specified endpoint that is associated with a custom routing listener.
     *  *
     * @param DescribeCustomRoutingEndpointRequest $request DescribeCustomRoutingEndpointRequest
     *
     * @return DescribeCustomRoutingEndpointResponse DescribeCustomRoutingEndpointResponse
     */
    public function describeCustomRoutingEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomRoutingEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a specific endpoint group that is associated with a custom routing listener.
     *  *
     * @param DescribeCustomRoutingEndpointGroupRequest $request DescribeCustomRoutingEndpointGroupRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomRoutingEndpointGroupResponse DescribeCustomRoutingEndpointGroupResponse
     */
    public function describeCustomRoutingEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomRoutingEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomRoutingEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a specific endpoint group that is associated with a custom routing listener.
     *  *
     * @param DescribeCustomRoutingEndpointGroupRequest $request DescribeCustomRoutingEndpointGroupRequest
     *
     * @return DescribeCustomRoutingEndpointGroupResponse DescribeCustomRoutingEndpointGroupResponse
     */
    public function describeCustomRoutingEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomRoutingEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the mapping configuration of a specified endpoint group that is associated with a custom routing listener.
     *  *
     * @param DescribeCustomRoutingEndpointGroupDestinationsRequest $request DescribeCustomRoutingEndpointGroupDestinationsRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomRoutingEndpointGroupDestinationsResponse DescribeCustomRoutingEndpointGroupDestinationsResponse
     */
    public function describeCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationId)) {
            $query['DestinationId'] = $request->destinationId;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomRoutingEndpointGroupDestinations',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomRoutingEndpointGroupDestinationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the mapping configuration of a specified endpoint group that is associated with a custom routing listener.
     *  *
     * @param DescribeCustomRoutingEndpointGroupDestinationsRequest $request DescribeCustomRoutingEndpointGroupDestinationsRequest
     *
     * @return DescribeCustomRoutingEndpointGroupDestinationsResponse DescribeCustomRoutingEndpointGroupDestinationsResponse
     */
    public function describeCustomRoutingEndpointGroupDestinations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an endpoint group.
     *  *
     * @param DescribeEndpointGroupRequest $request DescribeEndpointGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEndpointGroupResponse DescribeEndpointGroupResponse
     */
    public function describeEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an endpoint group.
     *  *
     * @param DescribeEndpointGroupRequest $request DescribeEndpointGroupRequest
     *
     * @return DescribeEndpointGroupResponse DescribeEndpointGroupResponse
     */
    public function describeEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about an acceleration region.
     *  *
     * @param DescribeIpSetRequest $request DescribeIpSetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpSetResponse DescribeIpSetResponse
     */
    public function describeIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about an acceleration region.
     *  *
     * @param DescribeIpSetRequest $request DescribeIpSetRequest
     *
     * @return DescribeIpSetResponse DescribeIpSetResponse
     */
    public function describeIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpSetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries configuration information about a listener of a Global Accelerator (GA) instance.
     *  *
     * @description This operation is used to query configuration information about a listener of a GA instance. The information includes the routing type of the listener, the status of the listener, the timestamp that indicates when the listener was created, and the listener ports.
     *  *
     * @param DescribeListenerRequest $request DescribeListenerRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeListenerResponse DescribeListenerResponse
     */
    public function describeListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries configuration information about a listener of a Global Accelerator (GA) instance.
     *  *
     * @description This operation is used to query configuration information about a listener of a GA instance. The information includes the routing type of the listener, the status of the listener, the timestamp that indicates when the listener was created, and the listener ports.
     *  *
     * @param DescribeListenerRequest $request DescribeListenerRequest
     *
     * @return DescribeListenerResponse DescribeListenerResponse
     */
    public function describeListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Simple Log Service project and Logstore associated with an endpoint group.
     *  *
     * @param DescribeLogStoreOfEndpointGroupRequest $request DescribeLogStoreOfEndpointGroupRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogStoreOfEndpointGroupResponse DescribeLogStoreOfEndpointGroupResponse
     */
    public function describeLogStoreOfEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogStoreOfEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogStoreOfEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Simple Log Service project and Logstore associated with an endpoint group.
     *  *
     * @param DescribeLogStoreOfEndpointGroupRequest $request DescribeLogStoreOfEndpointGroupRequest
     *
     * @return DescribeLogStoreOfEndpointGroupResponse DescribeLogStoreOfEndpointGroupResponse
     */
    public function describeLogStoreOfEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreOfEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions where Global Accelerator (GA) instances are deployed.
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-11-20',
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
     * @summary Queries the regions where Global Accelerator (GA) instances are deployed.
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
     * @summary Disassociates a Global Accelerator (GA) instance from an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @description *   The **DetachDdosFromAccelerator** operation is asynchronous. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) or [ListAccelerators](https://help.aliyun.com/document_detail/153236.html) operation to query the status of the GA instance.
     *     *   If the GA instance is in the **configuring** state, the Anti-DDoS Pro/Premium instance is being disassociated from the GA instance. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, the Anti-DDoS Pro/Premium instance is disassociated from the GA instance.
     * *   **DetachDdosFromAccelerator** cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param DetachDdosFromAcceleratorRequest $request DetachDdosFromAcceleratorRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachDdosFromAcceleratorResponse DetachDdosFromAcceleratorResponse
     */
    public function detachDdosFromAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachDdosFromAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachDdosFromAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a Global Accelerator (GA) instance from an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @description *   The **DetachDdosFromAccelerator** operation is asynchronous. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) or [ListAccelerators](https://help.aliyun.com/document_detail/153236.html) operation to query the status of the GA instance.
     *     *   If the GA instance is in the **configuring** state, the Anti-DDoS Pro/Premium instance is being disassociated from the GA instance. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, the Anti-DDoS Pro/Premium instance is disassociated from the GA instance.
     * *   **DetachDdosFromAccelerator** cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param DetachDdosFromAcceleratorRequest $request DetachDdosFromAcceleratorRequest
     *
     * @return DetachDdosFromAcceleratorResponse DetachDdosFromAcceleratorResponse
     */
    public function detachDdosFromAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDdosFromAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a Log Service Logstore from an endpoint group.
     *  *
     * @description ## Description
     * *   **DetachLogStoreFromEndpointGroup** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the state of an endpoint group.
     *     *   If the endpoint group is in the **updating** state, the Log Service Logstore is being disassociated from the endpoint group. In this case, you can perform only query operations.
     *     <!---->
     *     *   If the endpoint group is in the **active** state, the Log Service Logstore is disassociated from the endpoint group.
     * *   The **DetachLogStoreFromEndpointGroup** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DetachLogStoreFromEndpointGroupRequest $request DetachLogStoreFromEndpointGroupRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachLogStoreFromEndpointGroupResponse DetachLogStoreFromEndpointGroupResponse
     */
    public function detachLogStoreFromEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupIds)) {
            $query['EndpointGroupIds'] = $request->endpointGroupIds;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachLogStoreFromEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachLogStoreFromEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a Log Service Logstore from an endpoint group.
     *  *
     * @description ## Description
     * *   **DetachLogStoreFromEndpointGroup** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the state of an endpoint group.
     *     *   If the endpoint group is in the **updating** state, the Log Service Logstore is being disassociated from the endpoint group. In this case, you can perform only query operations.
     *     <!---->
     *     *   If the endpoint group is in the **active** state, the Log Service Logstore is disassociated from the endpoint group.
     * *   The **DetachLogStoreFromEndpointGroup** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DetachLogStoreFromEndpointGroupRequest $request DetachLogStoreFromEndpointGroupRequest
     *
     * @return DetachLogStoreFromEndpointGroupResponse DetachLogStoreFromEndpointGroupResponse
     */
    public function detachLogStoreFromEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLogStoreFromEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the diagnostic feature for an origin probing task.
     *  *
     * @param DetectApplicationMonitorRequest $request DetectApplicationMonitorRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectApplicationMonitorResponse DetectApplicationMonitorResponse
     */
    public function detectApplicationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
            'action'      => 'DetectApplicationMonitor',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectApplicationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the diagnostic feature for an origin probing task.
     *  *
     * @param DetectApplicationMonitorRequest $request DetectApplicationMonitorRequest
     *
     * @return DetectApplicationMonitorResponse DetectApplicationMonitorResponse
     */
    public function detectApplicationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectApplicationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Disables an origin probing task.
     *  *
     * @param DisableApplicationMonitorRequest $request DisableApplicationMonitorRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableApplicationMonitorResponse DisableApplicationMonitorResponse
     */
    public function disableApplicationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
            'action'      => 'DisableApplicationMonitor',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableApplicationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables an origin probing task.
     *  *
     * @param DisableApplicationMonitorRequest $request DisableApplicationMonitorRequest
     *
     * @return DisableApplicationMonitorResponse DisableApplicationMonitorResponse
     */
    public function disableApplicationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates access control lists (ACLs) from a listener.
     *  *
     * @description ## Description
     * *   **DissociateAclsFromListener** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the state of a listener:
     *     *   If the listener is in the **updating** state, ACLs are being disassociated from the listener. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, ACLs are disassociated from the listener.
     * *   The **DissociateAclsFromListener** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DissociateAclsFromListenerRequest $request DissociateAclsFromListenerRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DissociateAclsFromListenerResponse DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclIds)) {
            $query['AclIds'] = $request->aclIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateAclsFromListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateAclsFromListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates access control lists (ACLs) from a listener.
     *  *
     * @description ## Description
     * *   **DissociateAclsFromListener** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the state of a listener:
     *     *   If the listener is in the **updating** state, ACLs are being disassociated from the listener. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, ACLs are disassociated from the listener.
     * *   The **DissociateAclsFromListener** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param DissociateAclsFromListenerRequest $request DissociateAclsFromListenerRequest
     *
     * @return DissociateAclsFromListenerResponse DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAclsFromListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates an additional certificate from an HTTPS listener.
     *  *
     * @description ## Description
     * *   **DissociateAdditionalCertificatesFromListener** is an asynchronous operation. After you send a request, the system returns a request ID, but this operation is still being performed in the system background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the state of an HTTPS listener.
     *     *   If the listener is in the **updating** state, it indicates that the additional certificate is being dissociated from the listener. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, it indicates that the additional certificate is dissociated from the listener.
     * *   The **DissociateAdditionalCertificatesFromListener** operation cannot be repeatedly called for the same Global Accelerator (GA) instance with a specific period of time.
     *  *
     * @param DissociateAdditionalCertificatesFromListenerRequest $request DissociateAdditionalCertificatesFromListenerRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateAdditionalCertificatesFromListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateAdditionalCertificatesFromListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates an additional certificate from an HTTPS listener.
     *  *
     * @description ## Description
     * *   **DissociateAdditionalCertificatesFromListener** is an asynchronous operation. After you send a request, the system returns a request ID, but this operation is still being performed in the system background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the state of an HTTPS listener.
     *     *   If the listener is in the **updating** state, it indicates that the additional certificate is being dissociated from the listener. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, it indicates that the additional certificate is dissociated from the listener.
     * *   The **DissociateAdditionalCertificatesFromListener** operation cannot be repeatedly called for the same Global Accelerator (GA) instance with a specific period of time.
     *  *
     * @param DissociateAdditionalCertificatesFromListenerRequest $request DissociateAdditionalCertificatesFromListenerRequest
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Enables an origin probing task.
     *  *
     * @param EnableApplicationMonitorRequest $request EnableApplicationMonitorRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableApplicationMonitorResponse EnableApplicationMonitorResponse
     */
    public function enableApplicationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
            'action'      => 'EnableApplicationMonitor',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableApplicationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables an origin probing task.
     *  *
     * @param EnableApplicationMonitorRequest $request EnableApplicationMonitorRequest
     *
     * @return EnableApplicationMonitorResponse EnableApplicationMonitorResponse
     */
    public function enableApplicationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries an access control list (ACL).
     *  *
     * @param GetAclRequest  $request GetAclRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAclResponse GetAclResponse
     */
    public function getAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries an access control list (ACL).
     *  *
     * @param GetAclRequest $request GetAclRequest
     *
     * @return GetAclResponse GetAclResponse
     */
    public function getAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAclWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of an accelerated IP address of a basic Global Accelerator (GA) instance.
     *  *
     * @param GetBasicAccelerateIpRequest $request GetBasicAccelerateIpRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBasicAccelerateIpResponse GetBasicAccelerateIpResponse
     */
    public function getBasicAccelerateIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateIpId)) {
            $query['AccelerateIpId'] = $request->accelerateIpId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBasicAccelerateIp',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBasicAccelerateIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of an accelerated IP address of a basic Global Accelerator (GA) instance.
     *  *
     * @param GetBasicAccelerateIpRequest $request GetBasicAccelerateIpRequest
     *
     * @return GetBasicAccelerateIpResponse GetBasicAccelerateIpResponse
     */
    public function getBasicAccelerateIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicAccelerateIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the accelerated IP address of a basic Global Accelerator (GA) instance is associated with an endpoint.
     *  *
     * @param GetBasicAccelerateIpEndpointRelationRequest $request GetBasicAccelerateIpEndpointRelationRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBasicAccelerateIpEndpointRelationResponse GetBasicAccelerateIpEndpointRelationResponse
     */
    public function getBasicAccelerateIpEndpointRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateIpId)) {
            $query['AccelerateIpId'] = $request->accelerateIpId;
        }
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBasicAccelerateIpEndpointRelation',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBasicAccelerateIpEndpointRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the accelerated IP address of a basic Global Accelerator (GA) instance is associated with an endpoint.
     *  *
     * @param GetBasicAccelerateIpEndpointRelationRequest $request GetBasicAccelerateIpEndpointRelationRequest
     *
     * @return GetBasicAccelerateIpEndpointRelationResponse GetBasicAccelerateIpEndpointRelationResponse
     */
    public function getBasicAccelerateIpEndpointRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicAccelerateIpEndpointRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of idle accelerated IP addresses of a Global Accelerator (GA) instance.
     *  *
     * @param GetBasicAccelerateIpIdleCountRequest $request GetBasicAccelerateIpIdleCountRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBasicAccelerateIpIdleCountResponse GetBasicAccelerateIpIdleCountResponse
     */
    public function getBasicAccelerateIpIdleCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBasicAccelerateIpIdleCount',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBasicAccelerateIpIdleCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of idle accelerated IP addresses of a Global Accelerator (GA) instance.
     *  *
     * @param GetBasicAccelerateIpIdleCountRequest $request GetBasicAccelerateIpIdleCountRequest
     *
     * @return GetBasicAccelerateIpIdleCountResponse GetBasicAccelerateIpIdleCountResponse
     */
    public function getBasicAccelerateIpIdleCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicAccelerateIpIdleCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a basic Global Accelerator (GA) instance.
     *  *
     * @param GetBasicAcceleratorRequest $request GetBasicAcceleratorRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBasicAcceleratorResponse GetBasicAcceleratorResponse
     */
    public function getBasicAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBasicAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBasicAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a basic Global Accelerator (GA) instance.
     *  *
     * @param GetBasicAcceleratorRequest $request GetBasicAcceleratorRequest
     *
     * @return GetBasicAcceleratorResponse GetBasicAcceleratorResponse
     */
    public function getBasicAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about an endpoint that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @param GetBasicEndpointRequest $request GetBasicEndpointRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBasicEndpointResponse GetBasicEndpointResponse
     */
    public function getBasicEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBasicEndpoint',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBasicEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about an endpoint that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @param GetBasicEndpointRequest $request GetBasicEndpointRequest
     *
     * @return GetBasicEndpointResponse GetBasicEndpointResponse
     */
    public function getBasicEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the endpoint group of a basic GA instance.
     *  *
     * @param GetBasicEndpointGroupRequest $request GetBasicEndpointGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBasicEndpointGroupResponse GetBasicEndpointGroupResponse
     */
    public function getBasicEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBasicEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBasicEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the endpoint group of a basic GA instance.
     *  *
     * @param GetBasicEndpointGroupRequest $request GetBasicEndpointGroupRequest
     *
     * @return GetBasicEndpointGroupResponse GetBasicEndpointGroupResponse
     */
    public function getBasicEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the acceleration region of a basic Global Accelerator (GA) instance.
     *  *
     * @param GetBasicIpSetRequest $request GetBasicIpSetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBasicIpSetResponse GetBasicIpSetResponse
     */
    public function getBasicIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBasicIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBasicIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the acceleration region of a basic Global Accelerator (GA) instance.
     *  *
     * @param GetBasicIpSetRequest $request GetBasicIpSetRequest
     *
     * @return GetBasicIpSetResponse GetBasicIpSetResponse
     */
    public function getBasicIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicIpSetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the health status of the endpoints and endpoint groups of a listener.
     *  *
     * @param GetHealthStatusRequest $request GetHealthStatusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHealthStatusResponse GetHealthStatusResponse
     */
    public function getHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHealthStatus',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the health status of the endpoints and endpoint groups of a listener.
     *  *
     * @param GetHealthStatusRequest $request GetHealthStatusRequest
     *
     * @return GetHealthStatusResponse GetHealthStatusResponse
     */
    public function getHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of invalid domain names.
     *  *
     * @param GetInvalidDomainCountRequest $request GetInvalidDomainCountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInvalidDomainCountResponse GetInvalidDomainCountResponse
     */
    public function getInvalidDomainCountWithOptions($request, $runtime)
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
            'action'      => 'GetInvalidDomainCount',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInvalidDomainCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of invalid domain names.
     *  *
     * @param GetInvalidDomainCountRequest $request GetInvalidDomainCountRequest
     *
     * @return GetInvalidDomainCountResponse GetInvalidDomainCountResponse
     */
    public function getInvalidDomainCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInvalidDomainCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the maximum bandwidth of an acceleration area.
     *  *
     * @param GetIpsetsBandwidthLimitRequest $request GetIpsetsBandwidthLimitRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIpsetsBandwidthLimitResponse GetIpsetsBandwidthLimitResponse
     */
    public function getIpsetsBandwidthLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIpsetsBandwidthLimit',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIpsetsBandwidthLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the maximum bandwidth of an acceleration area.
     *  *
     * @param GetIpsetsBandwidthLimitRequest $request GetIpsetsBandwidthLimitRequest
     *
     * @return GetIpsetsBandwidthLimitResponse GetIpsetsBandwidthLimitResponse
     */
    public function getIpsetsBandwidthLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpsetsBandwidthLimitWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a secondary IP address that is associated with a CNAME.
     *  *
     * @param GetSpareIpRequest $request GetSpareIpRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSpareIpResponse GetSpareIpResponse
     */
    public function getSpareIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->spareIp)) {
            $query['SpareIp'] = $request->spareIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSpareIp',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpareIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a secondary IP address that is associated with a CNAME.
     *  *
     * @param GetSpareIpRequest $request GetSpareIpRequest
     *
     * @return GetSpareIpResponse GetSpareIpResponse
     */
    public function getSpareIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpareIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available acceleration areas and regions.
     *  *
     * @param ListAccelerateAreasRequest $request ListAccelerateAreasRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccelerateAreasResponse ListAccelerateAreasResponse
     */
    public function listAccelerateAreasWithOptions($request, $runtime)
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
            'action'      => 'ListAccelerateAreas',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccelerateAreasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available acceleration areas and regions.
     *  *
     * @param ListAccelerateAreasRequest $request ListAccelerateAreasRequest
     *
     * @return ListAccelerateAreasResponse ListAccelerateAreasResponse
     */
    public function listAccelerateAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccelerateAreasWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Global Accelerator (GA) instances.
     *  *
     * @param ListAcceleratorsRequest $request ListAcceleratorsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAcceleratorsResponse ListAcceleratorsResponse
     */
    public function listAcceleratorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccelerators',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAcceleratorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Global Accelerator (GA) instances.
     *  *
     * @param ListAcceleratorsRequest $request ListAcceleratorsRequest
     *
     * @return ListAcceleratorsResponse ListAcceleratorsResponse
     */
    public function listAccelerators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcceleratorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of access control lists (ACLs).
     *  *
     * @param ListAclsRequest $request ListAclsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAclsResponse ListAclsResponse
     */
    public function listAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclIds)) {
            $query['AclIds'] = $request->aclIds;
        }
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAcls',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAclsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of access control lists (ACLs).
     *  *
     * @param ListAclsRequest $request ListAclsRequest
     *
     * @return ListAclsResponse ListAclsResponse
     */
    public function listAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries origin probing tasks.
     *  *
     * @param ListApplicationMonitorRequest $request ListApplicationMonitorRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationMonitorResponse ListApplicationMonitorResponse
     */
    public function listApplicationMonitorWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationMonitor',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries origin probing tasks.
     *  *
     * @param ListApplicationMonitorRequest $request ListApplicationMonitorRequest
     *
     * @return ListApplicationMonitorResponse ListApplicationMonitorResponse
     */
    public function listApplicationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the diagnostic results of origin probing tasks.
     *  *
     * @param ListApplicationMonitorDetectResultRequest $request ListApplicationMonitorDetectResultRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationMonitorDetectResultResponse ListApplicationMonitorDetectResultResponse
     */
    public function listApplicationMonitorDetectResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationMonitorDetectResult',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationMonitorDetectResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the diagnostic results of origin probing tasks.
     *  *
     * @param ListApplicationMonitorDetectResultRequest $request ListApplicationMonitorDetectResultRequest
     *
     * @return ListApplicationMonitorDetectResultResponse ListApplicationMonitorDetectResultResponse
     */
    public function listApplicationMonitorDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationMonitorDetectResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available acceleration regions.
     *  *
     * @param ListAvailableAccelerateAreasRequest $request ListAvailableAccelerateAreasRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvailableAccelerateAreasResponse ListAvailableAccelerateAreasResponse
     */
    public function listAvailableAccelerateAreasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableAccelerateAreas',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvailableAccelerateAreasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available acceleration regions.
     *  *
     * @param ListAvailableAccelerateAreasRequest $request ListAvailableAccelerateAreasRequest
     *
     * @return ListAvailableAccelerateAreasResponse ListAvailableAccelerateAreasResponse
     */
    public function listAvailableAccelerateAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableAccelerateAreasWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the available acceleration regions of a Global Accelerator (GA) instance.
     *  *
     * @param ListAvailableBusiRegionsRequest $request ListAvailableBusiRegionsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvailableBusiRegionsResponse ListAvailableBusiRegionsResponse
     */
    public function listAvailableBusiRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableBusiRegions',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvailableBusiRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the available acceleration regions of a Global Accelerator (GA) instance.
     *  *
     * @param ListAvailableBusiRegionsRequest $request ListAvailableBusiRegionsRequest
     *
     * @return ListAvailableBusiRegionsResponse ListAvailableBusiRegionsResponse
     */
    public function listAvailableBusiRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableBusiRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries bandwidth plans.
     *  *
     * @param ListBandwidthPackagesRequest $request ListBandwidthPackagesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBandwidthPackagesResponse ListBandwidthPackagesResponse
     */
    public function listBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBandwidthPackages',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBandwidthPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries bandwidth plans.
     *  *
     * @param ListBandwidthPackagesRequest $request ListBandwidthPackagesRequest
     *
     * @return ListBandwidthPackagesResponse ListBandwidthPackagesResponse
     */
    public function listBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries bandwidth plans.
     *  *
     * @description To query the detailed information about a bandwidth plan, call the **ListBandwidthPackages** operation. For more information, see [ListBandwidthPackages](https://help.aliyun.com/document_detail/2253239.html).
     *  *
     * @param ListBandwidthackagesRequest $request ListBandwidthackagesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBandwidthackagesResponse ListBandwidthackagesResponse
     */
    public function listBandwidthackagesWithOptions($request, $runtime)
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
            'action'      => 'ListBandwidthackages',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBandwidthackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries bandwidth plans.
     *  *
     * @description To query the detailed information about a bandwidth plan, call the **ListBandwidthPackages** operation. For more information, see [ListBandwidthPackages](https://help.aliyun.com/document_detail/2253239.html).
     *  *
     * @param ListBandwidthackagesRequest $request ListBandwidthackagesRequest
     *
     * @return ListBandwidthackagesResponse ListBandwidthackagesResponse
     */
    public function listBandwidthackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBandwidthackagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the accelerated IP address of a basic Global Accelerator (GA) instance is associated with an endpoint.
     *  *
     * @param ListBasicAccelerateIpEndpointRelationsRequest $request ListBasicAccelerateIpEndpointRelationsRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBasicAccelerateIpEndpointRelationsResponse ListBasicAccelerateIpEndpointRelationsResponse
     */
    public function listBasicAccelerateIpEndpointRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateIpId)) {
            $query['AccelerateIpId'] = $request->accelerateIpId;
        }
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
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
            'action'      => 'ListBasicAccelerateIpEndpointRelations',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBasicAccelerateIpEndpointRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the accelerated IP address of a basic Global Accelerator (GA) instance is associated with an endpoint.
     *  *
     * @param ListBasicAccelerateIpEndpointRelationsRequest $request ListBasicAccelerateIpEndpointRelationsRequest
     *
     * @return ListBasicAccelerateIpEndpointRelationsResponse ListBasicAccelerateIpEndpointRelationsResponse
     */
    public function listBasicAccelerateIpEndpointRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBasicAccelerateIpEndpointRelationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the accelerated IP addresses in the acceleration region of a basic Global Accelerator (GA) instance.
     *  *
     * @param ListBasicAccelerateIpsRequest $request ListBasicAccelerateIpsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBasicAccelerateIpsResponse ListBasicAccelerateIpsResponse
     */
    public function listBasicAccelerateIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accelerateIpAddress)) {
            $query['AccelerateIpAddress'] = $request->accelerateIpAddress;
        }
        if (!Utils::isUnset($request->accelerateIpId)) {
            $query['AccelerateIpId'] = $request->accelerateIpId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
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
            'action'      => 'ListBasicAccelerateIps',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBasicAccelerateIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the accelerated IP addresses in the acceleration region of a basic Global Accelerator (GA) instance.
     *  *
     * @param ListBasicAccelerateIpsRequest $request ListBasicAccelerateIpsRequest
     *
     * @return ListBasicAccelerateIpsResponse ListBasicAccelerateIpsResponse
     */
    public function listBasicAccelerateIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBasicAccelerateIpsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries basic Global Accelerator (GA) instances.
     *  *
     * @param ListBasicAcceleratorsRequest $request ListBasicAcceleratorsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBasicAcceleratorsResponse ListBasicAcceleratorsResponse
     */
    public function listBasicAcceleratorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBasicAccelerators',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBasicAcceleratorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries basic Global Accelerator (GA) instances.
     *  *
     * @param ListBasicAcceleratorsRequest $request ListBasicAcceleratorsRequest
     *
     * @return ListBasicAcceleratorsResponse ListBasicAcceleratorsResponse
     */
    public function listBasicAccelerators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBasicAcceleratorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the endpoints that are associated with a basic Global Accelerator (GA) instance.
     *  *
     * @param ListBasicEndpointsRequest $request ListBasicEndpointsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBasicEndpointsResponse ListBasicEndpointsResponse
     */
    public function listBasicEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
            'action'      => 'ListBasicEndpoints',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBasicEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the endpoints that are associated with a basic Global Accelerator (GA) instance.
     *  *
     * @param ListBasicEndpointsRequest $request ListBasicEndpointsRequest
     *
     * @return ListBasicEndpointsResponse ListBasicEndpointsResponse
     */
    public function listBasicEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBasicEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the acceleration regions that are supported by Global Accelerator (GA).
     *  *
     * @param ListBusiRegionsRequest $request ListBusiRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBusiRegionsResponse ListBusiRegionsResponse
     */
    public function listBusiRegionsWithOptions($request, $runtime)
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
            'action'      => 'ListBusiRegions',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBusiRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the acceleration regions that are supported by Global Accelerator (GA).
     *  *
     * @param ListBusiRegionsRequest $request ListBusiRegionsRequest
     *
     * @return ListBusiRegionsResponse ListBusiRegionsResponse
     */
    public function listBusiRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBusiRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available acceleration areas and regions.
     *  *
     * @description You can call this operation to query the acceleration areas and regions that you can specify on the wizard page of Global Accelerator (GA) and for free-trial GA instances. You can filter acceleration areas and regions based on specified conditions.
     *  *
     * @param ListCommonAreasRequest $request ListCommonAreasRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCommonAreasResponse ListCommonAreasResponse
     */
    public function listCommonAreasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->isEpg)) {
            $query['IsEpg'] = $request->isEpg;
        }
        if (!Utils::isUnset($request->isIpSet)) {
            $query['IsIpSet'] = $request->isIpSet;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCommonAreas',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCommonAreasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available acceleration areas and regions.
     *  *
     * @description You can call this operation to query the acceleration areas and regions that you can specify on the wizard page of Global Accelerator (GA) and for free-trial GA instances. You can filter acceleration areas and regions based on specified conditions.
     *  *
     * @param ListCommonAreasRequest $request ListCommonAreasRequest
     *
     * @return ListCommonAreasResponse ListCommonAreasResponse
     */
    public function listCommonAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommonAreasWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the endpoint group mapping configurations of a custom routing listener of a Global Accelerator (GA) instance.
     *  *
     * @param ListCustomRoutingEndpointGroupDestinationsRequest $request ListCustomRoutingEndpointGroupDestinationsRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomRoutingEndpointGroupDestinationsResponse ListCustomRoutingEndpointGroupDestinationsResponse
     */
    public function listCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->fromPort)) {
            $query['FromPort'] = $request->fromPort;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->protocols)) {
            $query['Protocols'] = $request->protocols;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->toPort)) {
            $query['ToPort'] = $request->toPort;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomRoutingEndpointGroupDestinations',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomRoutingEndpointGroupDestinationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the endpoint group mapping configurations of a custom routing listener of a Global Accelerator (GA) instance.
     *  *
     * @param ListCustomRoutingEndpointGroupDestinationsRequest $request ListCustomRoutingEndpointGroupDestinationsRequest
     *
     * @return ListCustomRoutingEndpointGroupDestinationsResponse ListCustomRoutingEndpointGroupDestinationsResponse
     */
    public function listCustomRoutingEndpointGroupDestinations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the endpoint groups that are associated with a custom routing listener.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code for different SDKs.](https://api.aliyun.com/#product=Ga\\&api=ListCustomRoutingEndpointGroups\\&type=RPC\\&version=2019-11-20)
     *  *
     * @param ListCustomRoutingEndpointGroupsRequest $request ListCustomRoutingEndpointGroupsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomRoutingEndpointGroupsResponse ListCustomRoutingEndpointGroupsResponse
     */
    public function listCustomRoutingEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->accessLogSwitch)) {
            $query['AccessLogSwitch'] = $request->accessLogSwitch;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomRoutingEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomRoutingEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the endpoint groups that are associated with a custom routing listener.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code for different SDKs.](https://api.aliyun.com/#product=Ga\\&api=ListCustomRoutingEndpointGroups\\&type=RPC\\&version=2019-11-20)
     *  *
     * @param ListCustomRoutingEndpointGroupsRequest $request ListCustomRoutingEndpointGroupsRequest
     *
     * @return ListCustomRoutingEndpointGroupsResponse ListCustomRoutingEndpointGroupsResponse
     */
    public function listCustomRoutingEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomRoutingEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the traffic policies of an endpoint that belongs to a custom routing listener.
     *  *
     * @param ListCustomRoutingEndpointTrafficPoliciesRequest $request ListCustomRoutingEndpointTrafficPoliciesRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomRoutingEndpointTrafficPoliciesResponse ListCustomRoutingEndpointTrafficPoliciesResponse
     */
    public function listCustomRoutingEndpointTrafficPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomRoutingEndpointTrafficPolicies',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomRoutingEndpointTrafficPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the traffic policies of an endpoint that belongs to a custom routing listener.
     *  *
     * @param ListCustomRoutingEndpointTrafficPoliciesRequest $request ListCustomRoutingEndpointTrafficPoliciesRequest
     *
     * @return ListCustomRoutingEndpointTrafficPoliciesResponse ListCustomRoutingEndpointTrafficPoliciesResponse
     */
    public function listCustomRoutingEndpointTrafficPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomRoutingEndpointTrafficPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of an endpoint.
     *  *
     * @param ListCustomRoutingEndpointsRequest $request ListCustomRoutingEndpointsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomRoutingEndpointsResponse ListCustomRoutingEndpointsResponse
     */
    public function listCustomRoutingEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomRoutingEndpoints',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomRoutingEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of an endpoint.
     *  *
     * @param ListCustomRoutingEndpointsRequest $request ListCustomRoutingEndpointsRequest
     *
     * @return ListCustomRoutingEndpointsResponse ListCustomRoutingEndpointsResponse
     */
    public function listCustomRoutingEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomRoutingEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the port mapping table of a custom routing listener.
     *  *
     * @description After you configure a custom routing listener for a Global Accelerator (GA) instance, the instance generates a port mapping table based on the listener port range, backend service protocols and port ranges of the associated endpoint groups, and IP addresses of endpoints (vSwitches). The custom routing listener forwards client requests to specified IP addresses and ports in the vSwitches based on the port mapping table. This operation is used to query the generated port mapping table.
     *  *
     * @param ListCustomRoutingPortMappingsRequest $request ListCustomRoutingPortMappingsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomRoutingPortMappingsResponse ListCustomRoutingPortMappingsResponse
     */
    public function listCustomRoutingPortMappingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomRoutingPortMappings',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomRoutingPortMappingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the port mapping table of a custom routing listener.
     *  *
     * @description After you configure a custom routing listener for a Global Accelerator (GA) instance, the instance generates a port mapping table based on the listener port range, backend service protocols and port ranges of the associated endpoint groups, and IP addresses of endpoints (vSwitches). The custom routing listener forwards client requests to specified IP addresses and ports in the vSwitches based on the port mapping table. This operation is used to query the generated port mapping table.
     *  *
     * @param ListCustomRoutingPortMappingsRequest $request ListCustomRoutingPortMappingsRequest
     *
     * @return ListCustomRoutingPortMappingsResponse ListCustomRoutingPortMappingsResponse
     */
    public function listCustomRoutingPortMappings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomRoutingPortMappingsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the port mapping table of a specified backend instance that is associated with a custom routing listener.
     *  *
     * @param ListCustomRoutingPortMappingsByDestinationRequest $request ListCustomRoutingPortMappingsByDestinationRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomRoutingPortMappingsByDestinationResponse ListCustomRoutingPortMappingsByDestinationResponse
     */
    public function listCustomRoutingPortMappingsByDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationAddress)) {
            $query['DestinationAddress'] = $request->destinationAddress;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomRoutingPortMappingsByDestination',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomRoutingPortMappingsByDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the port mapping table of a specified backend instance that is associated with a custom routing listener.
     *  *
     * @param ListCustomRoutingPortMappingsByDestinationRequest $request ListCustomRoutingPortMappingsByDestinationRequest
     *
     * @return ListCustomRoutingPortMappingsByDestinationResponse ListCustomRoutingPortMappingsByDestinationResponse
     */
    public function listCustomRoutingPortMappingsByDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomRoutingPortMappingsByDestinationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of an accelerated domain name of a GA instance.
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
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
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of an accelerated domain name of a GA instance.
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the public CIDR blocks to which the endpoint group IP addresses belong. The CIDR blocks can be used to configure ACLs in terminals.
     *  *
     * @param ListEndpointGroupIpAddressCidrBlocksRequest $request ListEndpointGroupIpAddressCidrBlocksRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEndpointGroupIpAddressCidrBlocksResponse ListEndpointGroupIpAddressCidrBlocksResponse
     */
    public function listEndpointGroupIpAddressCidrBlocksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->endpointGroupRegion)) {
            $query['EndpointGroupRegion'] = $request->endpointGroupRegion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEndpointGroupIpAddressCidrBlocks',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEndpointGroupIpAddressCidrBlocksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the public CIDR blocks to which the endpoint group IP addresses belong. The CIDR blocks can be used to configure ACLs in terminals.
     *  *
     * @param ListEndpointGroupIpAddressCidrBlocksRequest $request ListEndpointGroupIpAddressCidrBlocksRequest
     *
     * @return ListEndpointGroupIpAddressCidrBlocksResponse ListEndpointGroupIpAddressCidrBlocksResponse
     */
    public function listEndpointGroupIpAddressCidrBlocks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEndpointGroupIpAddressCidrBlocksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of endpoint groups.
     *  *
     * @param ListEndpointGroupsRequest $request ListEndpointGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEndpointGroupsResponse ListEndpointGroupsResponse
     */
    public function listEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->accessLogSwitch)) {
            $query['AccessLogSwitch'] = $request->accessLogSwitch;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointGroupType)) {
            $query['EndpointGroupType'] = $request->endpointGroupType;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of endpoint groups.
     *  *
     * @param ListEndpointGroupsRequest $request ListEndpointGroupsRequest
     *
     * @return ListEndpointGroupsResponse ListEndpointGroupsResponse
     */
    public function listEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about existing forwarding rules.
     *  *
     * @description >  This operation is used to query only custom forwarding rules, not the default forwarding rule.
     *  *
     * @param ListForwardingRulesRequest $request ListForwardingRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListForwardingRulesResponse ListForwardingRulesResponse
     */
    public function listForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forwardingRuleId)) {
            $query['ForwardingRuleId'] = $request->forwardingRuleId;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
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
            'action'      => 'ListForwardingRules',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListForwardingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about existing forwarding rules.
     *  *
     * @description >  This operation is used to query only custom forwarding rules, not the default forwarding rule.
     *  *
     * @param ListForwardingRulesRequest $request ListForwardingRulesRequest
     *
     * @return ListForwardingRulesResponse ListForwardingRulesResponse
     */
    public function listForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries acceleration regions.
     *  *
     * @param ListIpSetsRequest $request ListIpSetsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpSetsResponse ListIpSetsResponse
     */
    public function listIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIpSets',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIpSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries acceleration regions.
     *  *
     * @param ListIpSetsRequest $request ListIpSetsRequest
     *
     * @return ListIpSetsResponse ListIpSetsResponse
     */
    public function listIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpSetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the line types of elastic IP addresses (EIPs) that are supported in an acceleration region.
     *  *
     * @param ListIspTypesRequest $request ListIspTypesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIspTypesResponse ListIspTypesResponse
     */
    public function listIspTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->acceleratorType)) {
            $query['AcceleratorType'] = $request->acceleratorType;
        }
        if (!Utils::isUnset($request->businessRegionId)) {
            $query['BusinessRegionId'] = $request->businessRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIspTypes',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIspTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the line types of elastic IP addresses (EIPs) that are supported in an acceleration region.
     *  *
     * @param ListIspTypesRequest $request ListIspTypesRequest
     *
     * @return ListIspTypesResponse ListIspTypesResponse
     */
    public function listIspTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIspTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the certificates associated with a listener.
     *  *
     * @param ListListenerCertificatesRequest $request ListListenerCertificatesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenerCertificatesResponse ListListenerCertificatesResponse
     */
    public function listListenerCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
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
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListenerCertificates',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenerCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the certificates associated with a listener.
     *  *
     * @param ListListenerCertificatesRequest $request ListListenerCertificatesRequest
     *
     * @return ListListenerCertificatesResponse ListListenerCertificatesResponse
     */
    public function listListenerCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenerCertificatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the listeners of a Global Accelerator (GA) instance.
     *  *
     * @description This operation is used to query information about the listeners of a GA instance, including the status of each listener, the timestamp that indicates when each listener was created, and the listener ports.
     *  *
     * @param ListListenersRequest $request ListListenersRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenersResponse ListListenersResponse
     */
    public function listListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListeners',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the listeners of a Global Accelerator (GA) instance.
     *  *
     * @description This operation is used to query information about the listeners of a GA instance, including the status of each listener, the timestamp that indicates when each listener was created, and the listener ports.
     *  *
     * @param ListListenersRequest $request ListListenersRequest
     *
     * @return ListListenersResponse ListListenersResponse
     */
    public function listListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the secondary IP addresses that are associated with a CNAME.
     *  *
     * @param ListSpareIpsRequest $request ListSpareIpsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSpareIpsResponse ListSpareIpsResponse
     */
    public function listSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSpareIps',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSpareIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the secondary IP addresses that are associated with a CNAME.
     *  *
     * @param ListSpareIpsRequest $request ListSpareIpsRequest
     *
     * @return ListSpareIpsResponse ListSpareIpsResponse
     */
    public function listSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the TLS security policies that are supported by HTTPS listeners.
     *  *
     * @description You can select a TLS security policy when you create an HTTPS listener. This API operation is used to query the TLS security policies that are supported by HTTPS listeners.
     *  *
     * @param ListSystemSecurityPoliciesRequest $request ListSystemSecurityPoliciesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSystemSecurityPoliciesResponse ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPoliciesWithOptions($request, $runtime)
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
            'action'      => 'ListSystemSecurityPolicies',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemSecurityPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the TLS security policies that are supported by HTTPS listeners.
     *  *
     * @description You can select a TLS security policy when you create an HTTPS listener. This API operation is used to query the TLS security policies that are supported by HTTPS listeners.
     *  *
     * @param ListSystemSecurityPoliciesRequest $request ListSystemSecurityPoliciesRequest
     *
     * @return ListSystemSecurityPoliciesResponse ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemSecurityPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags that are added to Global Accelerator (GA) resources.
     *  *
     * @description *   You must specify **ResourceId** or **Tag** in the request to specify the object that you want to query.********
     * *   **Tag** is a resource tag that consists of a key-value pair (Key and Value). If you specify only **Key**, all tag values that are associated with the specified tag key are returned. If you specify only **Value**, an error message is returned.
     * *   If you specify **Tag** and **ResourceId** to filter tags, **ResourceId** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain the key-value pairs are returned.
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'version'     => '2019-11-20',
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
     * @summary Queries the tags that are added to Global Accelerator (GA) resources.
     *  *
     * @description *   You must specify **ResourceId** or **Tag** in the request to specify the object that you want to query.********
     * *   **Tag** is a resource tag that consists of a key-value pair (Key and Value). If you specify only **Key**, all tag values that are associated with the specified tag key are returned. If you specify only **Value**, an error message is returned.
     * *   If you specify **Tag** and **ResourceId** to filter tags, **ResourceId** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain the key-value pairs are returned.
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
     * @summary Activates the pay-as-you-go Global Accelerator (GA) service. If you want to use pay-as-you-go GA instances, you must activate the pay-as-you-go GA service first.
     *  *
     * @param OpenAcceleratorServiceRequest $request OpenAcceleratorServiceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenAcceleratorServiceResponse OpenAcceleratorServiceResponse
     */
    public function openAcceleratorServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenAcceleratorService',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenAcceleratorServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Activates the pay-as-you-go Global Accelerator (GA) service. If you want to use pay-as-you-go GA instances, you must activate the pay-as-you-go GA service first.
     *  *
     * @param OpenAcceleratorServiceRequest $request OpenAcceleratorServiceRequest
     *
     * @return OpenAcceleratorServiceResponse OpenAcceleratorServiceResponse
     */
    public function openAcceleratorService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openAcceleratorServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Inquire about the approval status of cross-border permissions for an Alibaba Cloud account (main account).
     *  *
     * @param QueryCrossBorderApprovalStatusRequest $request QueryCrossBorderApprovalStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCrossBorderApprovalStatusResponse QueryCrossBorderApprovalStatusResponse
     */
    public function queryCrossBorderApprovalStatusWithOptions($request, $runtime)
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
            'action'      => 'QueryCrossBorderApprovalStatus',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCrossBorderApprovalStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Inquire about the approval status of cross-border permissions for an Alibaba Cloud account (main account).
     *  *
     * @param QueryCrossBorderApprovalStatusRequest $request QueryCrossBorderApprovalStatusRequest
     *
     * @return QueryCrossBorderApprovalStatusResponse QueryCrossBorderApprovalStatusResponse
     */
    public function queryCrossBorderApprovalStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCrossBorderApprovalStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes IP entries from an access control list (ACL).
     *  *
     * @description *   **RemoveEntriesFromAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetAcl](https://help.aliyun.com/document_detail/258292.html) or [ListAcls](https://help.aliyun.com/document_detail/258291.html) operation to query the status of the ACL from which you want to delete IP entries.
     *     *   If the ACL is in the **configuring** state, it indicates that the IP entries are being deleted. In this case, you can perform only query operations.
     *     *   If the ACL is in the **active** state, it indicates that the IP entries are deleted.
     * *   The **RemoveEntriesFromAcl** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param RemoveEntriesFromAclRequest $request RemoveEntriesFromAclRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveEntriesFromAclResponse RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntries)) {
            $query['AclEntries'] = $request->aclEntries;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveEntriesFromAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveEntriesFromAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes IP entries from an access control list (ACL).
     *  *
     * @description *   **RemoveEntriesFromAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetAcl](https://help.aliyun.com/document_detail/258292.html) or [ListAcls](https://help.aliyun.com/document_detail/258291.html) operation to query the status of the ACL from which you want to delete IP entries.
     *     *   If the ACL is in the **configuring** state, it indicates that the IP entries are being deleted. In this case, you can perform only query operations.
     *     *   If the ACL is in the **active** state, it indicates that the IP entries are deleted.
     * *   The **RemoveEntriesFromAcl** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param RemoveEntriesFromAclRequest $request RemoveEntriesFromAclRequest
     *
     * @return RemoveEntriesFromAclResponse RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEntriesFromAclWithOptions($request, $runtime);
    }

    /**
     * @summary Replaces the bandwidth plans of Global Accelerator (GA) instances.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   The GA instance continues to forward network traffic.
     * *   **ReplaceBandwidthPackage** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) or [ListAccelerators](https://help.aliyun.com/document_detail/153236.html) operation to query the status of the GA instance.
     *     *   If the GA instance is in the **configuring** state, it indicates that the associated bandwidth plan is being replaced. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, it indicates that the associated bandwidth plan is replaced.
     * *   The **ReplaceBandwidthPackage** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param ReplaceBandwidthPackageRequest $request ReplaceBandwidthPackageRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ReplaceBandwidthPackageResponse ReplaceBandwidthPackageResponse
     */
    public function replaceBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->targetBandwidthPackageId)) {
            $query['TargetBandwidthPackageId'] = $request->targetBandwidthPackageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplaceBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Replaces the bandwidth plans of Global Accelerator (GA) instances.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   The GA instance continues to forward network traffic.
     * *   **ReplaceBandwidthPackage** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) or [ListAccelerators](https://help.aliyun.com/document_detail/153236.html) operation to query the status of the GA instance.
     *     *   If the GA instance is in the **configuring** state, it indicates that the associated bandwidth plan is being replaced. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, it indicates that the associated bandwidth plan is replaced.
     * *   The **ReplaceBandwidthPackage** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param ReplaceBandwidthPackageRequest $request ReplaceBandwidthPackageRequest
     *
     * @return ReplaceBandwidthPackageResponse ReplaceBandwidthPackageResponse
     */
    public function replaceBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to Global Accelerator (GA) resources.
     *  *
     * @description ### Description
     * You can add up to 20 tags to each GA resource. When you call this operation, Alibaba Cloud first checks the number of existing tags attached to the resource. If the quota is reached, an error message is returned.
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'TagResources',
            'version'     => '2019-11-20',
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
     * @summary Adds tags to Global Accelerator (GA) resources.
     *  *
     * @description ### Description
     * You can add up to 20 tags to each GA resource. When you call this operation, Alibaba Cloud first checks the number of existing tags attached to the resource. If the quota is reached, an error message is returned.
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
     * @summary Removes tags from Global Accelerator (GA) resources.
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'version'     => '2019-11-20',
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
     * @summary Removes tags from Global Accelerator (GA) resources.
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
     * @summary Modifies a Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateAccelerator** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of a GA instance.
     *     *   If the GA instance is in the **configuring** state, the GA instance is being modified. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, the GA instance is modified.
     * *   The **UpdateAccelerator** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param UpdateAcceleratorRequest $request UpdateAcceleratorRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAcceleratorResponse UpdateAcceleratorResponse
     */
    public function updateAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateAccelerator** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of a GA instance.
     *     *   If the GA instance is in the **configuring** state, the GA instance is being modified. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, the GA instance is modified.
     * *   The **UpdateAccelerator** operation cannot be repeatedly called for the same GA instance within a specific period of time.
     *  *
     * @param UpdateAcceleratorRequest $request UpdateAcceleratorRequest
     *
     * @return UpdateAcceleratorResponse UpdateAcceleratorResponse
     */
    public function updateAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the auto-renewal settings of a Global Accelerator (GA) instance.
     *  *
     * @description You cannot repeatedly call the **UpdateAcceleratorAutoRenewAttribute** operation for the same GA instance within a specific period of time.
     *  *
     * @param UpdateAcceleratorAutoRenewAttributeRequest $request UpdateAcceleratorAutoRenewAttributeRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAcceleratorAutoRenewAttributeResponse UpdateAcceleratorAutoRenewAttributeResponse
     */
    public function updateAcceleratorAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewDuration)) {
            $query['AutoRenewDuration'] = $request->autoRenewDuration;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAcceleratorAutoRenewAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAcceleratorAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the auto-renewal settings of a Global Accelerator (GA) instance.
     *  *
     * @description You cannot repeatedly call the **UpdateAcceleratorAutoRenewAttribute** operation for the same GA instance within a specific period of time.
     *  *
     * @param UpdateAcceleratorAutoRenewAttributeRequest $request UpdateAcceleratorAutoRenewAttributeRequest
     *
     * @return UpdateAcceleratorAutoRenewAttributeResponse UpdateAcceleratorAutoRenewAttributeResponse
     */
    public function updateAcceleratorAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Confirms the updated specification of a Global Accelerator (GA) instance.
     *  *
     * @description After you modify the specification of a GA instance, you must confirm the modification. The **UpdateAcceleratorConfirm** operation is used to confirm the specification of a GA instance that is modified. When you call this operation to confirm the specification of a GA instance, take note of the following items:
     * *   **UpdateAcceleratorConfirm** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of a GA instance.
     *     *   If the GA instance is in the **configuring** state, it indicates that the specification of the instance is being modified. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, it indicates that the specification of the instance is modified.
     * *   The **UpdateAcceleratorConfirm** operation cannot be called repeatedly for the same GA instance within a specific period of time.
     *  *
     * @param UpdateAcceleratorConfirmRequest $request UpdateAcceleratorConfirmRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAcceleratorConfirmResponse UpdateAcceleratorConfirmResponse
     */
    public function updateAcceleratorConfirmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAcceleratorConfirm',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAcceleratorConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Confirms the updated specification of a Global Accelerator (GA) instance.
     *  *
     * @description After you modify the specification of a GA instance, you must confirm the modification. The **UpdateAcceleratorConfirm** operation is used to confirm the specification of a GA instance that is modified. When you call this operation to confirm the specification of a GA instance, take note of the following items:
     * *   **UpdateAcceleratorConfirm** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of a GA instance.
     *     *   If the GA instance is in the **configuring** state, it indicates that the specification of the instance is being modified. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, it indicates that the specification of the instance is modified.
     * *   The **UpdateAcceleratorConfirm** operation cannot be called repeatedly for the same GA instance within a specific period of time.
     *  *
     * @param UpdateAcceleratorConfirmRequest $request UpdateAcceleratorConfirmRequest
     *
     * @return UpdateAcceleratorConfirmResponse UpdateAcceleratorConfirmResponse
     */
    public function updateAcceleratorConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorConfirmWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the type of transmission network for a Global Accelerator (GA) instance.
     *  *
     * @description You can call this operation to change the type of transmission network for a **standard** GA instance whose bandwidth metering method is **pay-by-data-transfer**. Before you call this operation, make sure that the following requirements are met:
     * *   Cloud Data Transfer (CDT) is activated. When you call the [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html) operation and set **BandwidthBillingType** to **CDT** to create a **standard** GA instance whose bandwidth metering method is **pay-by-data-transfer**, CDT is automatically activated. The data transfer fees are managed by CDT.
     * *   If you want to set **CrossBorderMode** to **private**, which specifies cross-border Express Connect circuit as the type of transmission network, make sure that real-name verification is complete for your enterprise account. For more information, see [Real-name verification](https://help.aliyun.com/document_detail/52595.html).
     *  *
     * @param UpdateAcceleratorCrossBorderModeRequest $request UpdateAcceleratorCrossBorderModeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAcceleratorCrossBorderModeResponse UpdateAcceleratorCrossBorderModeResponse
     */
    public function updateAcceleratorCrossBorderModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->crossBorderMode)) {
            $query['CrossBorderMode'] = $request->crossBorderMode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAcceleratorCrossBorderMode',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAcceleratorCrossBorderModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the type of transmission network for a Global Accelerator (GA) instance.
     *  *
     * @description You can call this operation to change the type of transmission network for a **standard** GA instance whose bandwidth metering method is **pay-by-data-transfer**. Before you call this operation, make sure that the following requirements are met:
     * *   Cloud Data Transfer (CDT) is activated. When you call the [CreateAccelerator](https://help.aliyun.com/document_detail/206786.html) operation and set **BandwidthBillingType** to **CDT** to create a **standard** GA instance whose bandwidth metering method is **pay-by-data-transfer**, CDT is automatically activated. The data transfer fees are managed by CDT.
     * *   If you want to set **CrossBorderMode** to **private**, which specifies cross-border Express Connect circuit as the type of transmission network, make sure that real-name verification is complete for your enterprise account. For more information, see [Real-name verification](https://help.aliyun.com/document_detail/52595.html).
     *  *
     * @param UpdateAcceleratorCrossBorderModeRequest $request UpdateAcceleratorCrossBorderModeRequest
     *
     * @return UpdateAcceleratorCrossBorderModeResponse UpdateAcceleratorCrossBorderModeResponse
     */
    public function updateAcceleratorCrossBorderMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorCrossBorderModeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables cross-border data transmission for a Global Accelerator (GA) instance.
     *  *
     * @description You can use this operation to enable or disable the cross-border data transmission feature for a GA instance. Before you enable the cross-border data transmission feature, make sure that the following requirements are met:
     * - **Basic GA instances**:
     * Cloud Data Transfer (CDT) is activated. When you call the CreateBasicAccelerator operation to create a basic GA instance, set BandwidthBillingType to CDT. Then, the system automatically activates CDT. The data transfer fees are managed by CDT.
     * If you want to enable the cross-border data transmission feature, make sure that the current account has completed enterprise real-name registration. For more information, see Real-name registration FAQs.
     * - **Standard GA instances**:
     * CDT is activated. When you call the CreateAccelerator operation to create a standard GA instance, set BandwidthBillingType to CDT. Then, the system automatically activates CDT. The data transfer fees are managed by CDT.
     *  *
     * @param UpdateAcceleratorCrossBorderStatusRequest $request UpdateAcceleratorCrossBorderStatusRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAcceleratorCrossBorderStatusResponse UpdateAcceleratorCrossBorderStatusResponse
     */
    public function updateAcceleratorCrossBorderStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->crossBorderStatus)) {
            $query['CrossBorderStatus'] = $request->crossBorderStatus;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAcceleratorCrossBorderStatus',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAcceleratorCrossBorderStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables cross-border data transmission for a Global Accelerator (GA) instance.
     *  *
     * @description You can use this operation to enable or disable the cross-border data transmission feature for a GA instance. Before you enable the cross-border data transmission feature, make sure that the following requirements are met:
     * - **Basic GA instances**:
     * Cloud Data Transfer (CDT) is activated. When you call the CreateBasicAccelerator operation to create a basic GA instance, set BandwidthBillingType to CDT. Then, the system automatically activates CDT. The data transfer fees are managed by CDT.
     * If you want to enable the cross-border data transmission feature, make sure that the current account has completed enterprise real-name registration. For more information, see Real-name registration FAQs.
     * - **Standard GA instances**:
     * CDT is activated. When you call the CreateAccelerator operation to create a standard GA instance, set BandwidthBillingType to CDT. Then, the system automatically activates CDT. The data transfer fees are managed by CDT.
     *  *
     * @param UpdateAcceleratorCrossBorderStatusRequest $request UpdateAcceleratorCrossBorderStatusRequest
     *
     * @return UpdateAcceleratorCrossBorderStatusResponse UpdateAcceleratorCrossBorderStatusResponse
     */
    public function updateAcceleratorCrossBorderStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorCrossBorderStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the attributes of an access control list (ACL) of a Global Accelerator (GA) instance.
     *  *
     * @param UpdateAclAttributeRequest $request UpdateAclAttributeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAclAttributeResponse UpdateAclAttributeResponse
     */
    public function updateAclAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAclAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAclAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the attributes of an access control list (ACL) of a Global Accelerator (GA) instance.
     *  *
     * @param UpdateAclAttributeRequest $request UpdateAclAttributeRequest
     *
     * @return UpdateAclAttributeResponse UpdateAclAttributeResponse
     */
    public function updateAclAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Replaces an expired additional certificate for an HTTPS listener.
     *  *
     * @description The UpdateAdditionalCertificateWithListener operation is used to replace an additional certificate. This operation is suitable for scenarios in which the original certificate expires and needs to be replaced with a new certificate and the associated domain name remains unchanged.
     * *   **UpdateAdditionalCertificateWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/307743.html) to query the status of the task:
     *     *   If the certificate to be replaced is in the **updating** state, the certificate is being replaced. In this case, you can only query the certificate.
     *     *   If the new certificate is in the **active** state, the new certificate is in effect.
     * *   You cannot repeatedly call the **UpdateAdditionalCertificateWithListener** operation for the same GA instance within a specific period of time.
     *  *
     * @param UpdateAdditionalCertificateWithListenerRequest $request UpdateAdditionalCertificateWithListenerRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAdditionalCertificateWithListenerResponse UpdateAdditionalCertificateWithListenerResponse
     */
    public function updateAdditionalCertificateWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAdditionalCertificateWithListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAdditionalCertificateWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Replaces an expired additional certificate for an HTTPS listener.
     *  *
     * @description The UpdateAdditionalCertificateWithListener operation is used to replace an additional certificate. This operation is suitable for scenarios in which the original certificate expires and needs to be replaced with a new certificate and the associated domain name remains unchanged.
     * *   **UpdateAdditionalCertificateWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/307743.html) to query the status of the task:
     *     *   If the certificate to be replaced is in the **updating** state, the certificate is being replaced. In this case, you can only query the certificate.
     *     *   If the new certificate is in the **active** state, the new certificate is in effect.
     * *   You cannot repeatedly call the **UpdateAdditionalCertificateWithListener** operation for the same GA instance within a specific period of time.
     *  *
     * @param UpdateAdditionalCertificateWithListenerRequest $request UpdateAdditionalCertificateWithListenerRequest
     *
     * @return UpdateAdditionalCertificateWithListenerResponse UpdateAdditionalCertificateWithListenerResponse
     */
    public function updateAdditionalCertificateWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAdditionalCertificateWithListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an origin probing task.
     *  *
     * @description **UpdateApplicationMonitor** is an asynchronous operation. After you send a request, the system returns a request ID, but this operation is still being performed in the system background. You can call the [DescribeApplicationMonitor](https://help.aliyun.com/document_detail/408463.html) or [ListApplicationMonitor](https://help.aliyun.com/document_detail/408462.html) operation to check whether the configurations of an origin probing task are modified.
     * *   If the values of modified parameters remain unchanged, it indicates that the origin probing task is being modified. In this case, you can perform only query operations.
     * *   If the values of modified parameters change, it indicates that the origin probing task is modified.
     *  *
     * @param UpdateApplicationMonitorRequest $request UpdateApplicationMonitorRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationMonitorResponse UpdateApplicationMonitorResponse
     */
    public function updateApplicationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->detectEnable)) {
            $query['DetectEnable'] = $request->detectEnable;
        }
        if (!Utils::isUnset($request->detectThreshold)) {
            $query['DetectThreshold'] = $request->detectThreshold;
        }
        if (!Utils::isUnset($request->detectTimes)) {
            $query['DetectTimes'] = $request->detectTimes;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->optionsJson)) {
            $query['OptionsJson'] = $request->optionsJson;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationMonitor',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an origin probing task.
     *  *
     * @description **UpdateApplicationMonitor** is an asynchronous operation. After you send a request, the system returns a request ID, but this operation is still being performed in the system background. You can call the [DescribeApplicationMonitor](https://help.aliyun.com/document_detail/408463.html) or [ListApplicationMonitor](https://help.aliyun.com/document_detail/408462.html) operation to check whether the configurations of an origin probing task are modified.
     * *   If the values of modified parameters remain unchanged, it indicates that the origin probing task is being modified. In this case, you can perform only query operations.
     * *   If the values of modified parameters change, it indicates that the origin probing task is modified.
     *  *
     * @param UpdateApplicationMonitorRequest $request UpdateApplicationMonitorRequest
     *
     * @return UpdateApplicationMonitorResponse UpdateApplicationMonitorResponse
     */
    public function updateApplicationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the auto-renewal status of a bandwidth plan.
     *  *
     * @description You cannot repeatedly call the **UpdateBandwidthPackagaAutoRenewAttribute** operation to modify the auto-renewal settings of a bandwidth plan.
     *  *
     * @param UpdateBandwidthPackagaAutoRenewAttributeRequest $request UpdateBandwidthPackagaAutoRenewAttributeRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBandwidthPackagaAutoRenewAttributeResponse UpdateBandwidthPackagaAutoRenewAttributeResponse
     */
    public function updateBandwidthPackagaAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewDuration)) {
            $query['AutoRenewDuration'] = $request->autoRenewDuration;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBandwidthPackagaAutoRenewAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBandwidthPackagaAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the auto-renewal status of a bandwidth plan.
     *  *
     * @description You cannot repeatedly call the **UpdateBandwidthPackagaAutoRenewAttribute** operation to modify the auto-renewal settings of a bandwidth plan.
     *  *
     * @param UpdateBandwidthPackagaAutoRenewAttributeRequest $request UpdateBandwidthPackagaAutoRenewAttributeRequest
     *
     * @return UpdateBandwidthPackagaAutoRenewAttributeResponse UpdateBandwidthPackagaAutoRenewAttributeResponse
     */
    public function updateBandwidthPackagaAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBandwidthPackagaAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a bandwidth plan.
     *  *
     * @description Take note of the following items:
     * *   **UpdateBandwidthPackage** is a synchronous operation when you call the operation to modify the configuration excluding the bandwidth value of a bandwidth plan. The new configuration immediately takes effect after the operation is performed.
     * *   **UpdateBandwidthPackage** is an asynchronous operation when you call the operation to modify the configuration including the bandwidth value of a bandwidth plan that is not associated with a Global Accelerator (GA) instance. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the task.
     *     *   If the parameter values of the bandwidth plan remain unchanged, the bandwidth plan is being modified. In this case, you can perform only query operations.
     *     *   If the parameter values of the bandwidth plan are changed, the bandwidth plan is modified.
     * *   **UpdateBandwidthPackage** is an asynchronous operation when you call the operation to modify the configuration including the bandwidth value of a bandwidth plan that is associated with a GA instance. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of the task.
     *     *   If the GA instance is in the **configuring** state, the bandwidth plan is being modified. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, the bandwidth plan is modified.
     * *   You cannot repeatedly call the **UpdateBandwidthPackage** operation for the same bandwidth plan within a specific period of time.
     *  *
     * @param UpdateBandwidthPackageRequest $request UpdateBandwidthPackageRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBandwidthPackageResponse UpdateBandwidthPackageResponse
     */
    public function updateBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->bandwidthType)) {
            $query['BandwidthType'] = $request->bandwidthType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
            'action'      => 'UpdateBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a bandwidth plan.
     *  *
     * @description Take note of the following items:
     * *   **UpdateBandwidthPackage** is a synchronous operation when you call the operation to modify the configuration excluding the bandwidth value of a bandwidth plan. The new configuration immediately takes effect after the operation is performed.
     * *   **UpdateBandwidthPackage** is an asynchronous operation when you call the operation to modify the configuration including the bandwidth value of a bandwidth plan that is not associated with a Global Accelerator (GA) instance. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeBandwidthPackage](https://help.aliyun.com/document_detail/153241.html) operation to query the status of the task.
     *     *   If the parameter values of the bandwidth plan remain unchanged, the bandwidth plan is being modified. In this case, you can perform only query operations.
     *     *   If the parameter values of the bandwidth plan are changed, the bandwidth plan is modified.
     * *   **UpdateBandwidthPackage** is an asynchronous operation when you call the operation to modify the configuration including the bandwidth value of a bandwidth plan that is associated with a GA instance. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeAccelerator](https://help.aliyun.com/document_detail/153235.html) operation to query the status of the task.
     *     *   If the GA instance is in the **configuring** state, the bandwidth plan is being modified. In this case, you can perform only query operations.
     *     *   If the GA instance is in the **active** state, the bandwidth plan is modified.
     * *   You cannot repeatedly call the **UpdateBandwidthPackage** operation for the same bandwidth plan within a specific period of time.
     *  *
     * @param UpdateBandwidthPackageRequest $request UpdateBandwidthPackageRequest
     *
     * @return UpdateBandwidthPackageResponse UpdateBandwidthPackageResponse
     */
    public function updateBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name and description of a basic Global Accelerator (GA) instance.
     *  *
     * @param UpdateBasicAcceleratorRequest $request UpdateBasicAcceleratorRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBasicAcceleratorResponse UpdateBasicAcceleratorResponse
     */
    public function updateBasicAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
            'action'      => 'UpdateBasicAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBasicAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name and description of a basic Global Accelerator (GA) instance.
     *  *
     * @param UpdateBasicAcceleratorRequest $request UpdateBasicAcceleratorRequest
     *
     * @return UpdateBasicAcceleratorResponse UpdateBasicAcceleratorResponse
     */
    public function updateBasicAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBasicAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of an endpoint that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @param UpdateBasicEndpointRequest $request UpdateBasicEndpointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBasicEndpointResponse UpdateBasicEndpointResponse
     */
    public function updateBasicEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
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
            'action'      => 'UpdateBasicEndpoint',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBasicEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name of an endpoint that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @param UpdateBasicEndpointRequest $request UpdateBasicEndpointRequest
     *
     * @return UpdateBasicEndpointResponse UpdateBasicEndpointResponse
     */
    public function updateBasicEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBasicEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an endpoint group that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateBasicEndpointGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. The system modifies the configurations of an endpoint group that is associated with a basic GA instance by deleting the endpoint group and creating a new endpoint group. You can call the [GetBasicAccelerator](https://help.aliyun.com/document_detail/353188.html) operation to query the status of the task.
     *     *   If the basic GA instance is in the **configuring** state, the configurations of the endpoint group are being modified. In this case, you can perform only query operations.
     *     *   If the basic GA instance is in the **active** state, the configurations of the endpoint group are modified.
     * *   The **UpdateBasicEndpointGroup** operation cannot be repeatedly called for the same basic GA instance within a specific period of time.
     *  *
     * @param UpdateBasicEndpointGroupRequest $request UpdateBasicEndpointGroupRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBasicEndpointGroupResponse UpdateBasicEndpointGroupResponse
     */
    public function updateBasicEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointAddress)) {
            $query['EndpointAddress'] = $request->endpointAddress;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointSubAddress)) {
            $query['EndpointSubAddress'] = $request->endpointSubAddress;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
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
            'action'      => 'UpdateBasicEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBasicEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an endpoint group that is associated with a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateBasicEndpointGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. The system modifies the configurations of an endpoint group that is associated with a basic GA instance by deleting the endpoint group and creating a new endpoint group. You can call the [GetBasicAccelerator](https://help.aliyun.com/document_detail/353188.html) operation to query the status of the task.
     *     *   If the basic GA instance is in the **configuring** state, the configurations of the endpoint group are being modified. In this case, you can perform only query operations.
     *     *   If the basic GA instance is in the **active** state, the configurations of the endpoint group are modified.
     * *   The **UpdateBasicEndpointGroup** operation cannot be repeatedly called for the same basic GA instance within a specific period of time.
     *  *
     * @param UpdateBasicEndpointGroupRequest $request UpdateBasicEndpointGroupRequest
     *
     * @return UpdateBasicEndpointGroupResponse UpdateBasicEndpointGroupResponse
     */
    public function updateBasicEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBasicEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the bandwidth of an acceleration region of a basic Global Accelerator (GA) instance.
     *  *
     * @description Before you call this operation, take note of the following limits:
     * *   You can modify the bandwidth of an acceleration region of a basic GA instance only if the bandwidth metering method of the basic GA instance is **pay-by-data-transfer**.
     * *   **UpdateBasicIpSet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicIpSet](https://help.aliyun.com/document_detail/362987.html) operation to query the status of the task.
     *     *   If the acceleration region is in the **updating** state, it indicates that the bandwidth of the acceleration region is being modified. In this case, you can perform only query operations.
     *     *   If the acceleration region is in the **active** state, it indicates that the bandwidth of the acceleration region is modified.
     * *   You cannot repeatedly call the **UpdateBasicIpSet** operation for the same basic GA instance within a specific period of time.
     *  *
     * @param UpdateBasicIpSetRequest $request UpdateBasicIpSetRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBasicIpSetResponse UpdateBasicIpSetResponse
     */
    public function updateBasicIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBasicIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBasicIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the bandwidth of an acceleration region of a basic Global Accelerator (GA) instance.
     *  *
     * @description Before you call this operation, take note of the following limits:
     * *   You can modify the bandwidth of an acceleration region of a basic GA instance only if the bandwidth metering method of the basic GA instance is **pay-by-data-transfer**.
     * *   **UpdateBasicIpSet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetBasicIpSet](https://help.aliyun.com/document_detail/362987.html) operation to query the status of the task.
     *     *   If the acceleration region is in the **updating** state, it indicates that the bandwidth of the acceleration region is being modified. In this case, you can perform only query operations.
     *     *   If the acceleration region is in the **active** state, it indicates that the bandwidth of the acceleration region is modified.
     * *   You cannot repeatedly call the **UpdateBasicIpSet** operation for the same basic GA instance within a specific period of time.
     *  *
     * @param UpdateBasicIpSetRequest $request UpdateBasicIpSetRequest
     *
     * @return UpdateBasicIpSetResponse UpdateBasicIpSetResponse
     */
    public function updateBasicIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBasicIpSetWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name and description of an endpoint group that is associated with a custom routing listener.
     *  *
     * @param UpdateCustomRoutingEndpointGroupAttributeRequest $request UpdateCustomRoutingEndpointGroupAttributeRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomRoutingEndpointGroupAttributeResponse UpdateCustomRoutingEndpointGroupAttributeResponse
     */
    public function updateCustomRoutingEndpointGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
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
            'action'      => 'UpdateCustomRoutingEndpointGroupAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomRoutingEndpointGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name and description of an endpoint group that is associated with a custom routing listener.
     *  *
     * @param UpdateCustomRoutingEndpointGroupAttributeRequest $request UpdateCustomRoutingEndpointGroupAttributeRequest
     *
     * @return UpdateCustomRoutingEndpointGroupAttributeResponse UpdateCustomRoutingEndpointGroupAttributeResponse
     */
    public function updateCustomRoutingEndpointGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomRoutingEndpointGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the mapping configurations of an endpoint group that is associated with a custom routing listener.
     *  *
     * @description *   **UpdateCustomRoutingEndpointGroupDestinations** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of an endpoint group associated with a custom routing listener to check whether the mapping configurations of the endpoint group are modified.
     *     *   If the endpoint group is in the **updating** state, the mapping configurations of the endpoint group are being modified. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, the mapping configurations of the endpoint group are modified.
     * *   The **UpdateCustomRoutingEndpointGroupDestinations** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param UpdateCustomRoutingEndpointGroupDestinationsRequest $request UpdateCustomRoutingEndpointGroupDestinationsRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomRoutingEndpointGroupDestinationsResponse UpdateCustomRoutingEndpointGroupDestinationsResponse
     */
    public function updateCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationConfigurations)) {
            $query['DestinationConfigurations'] = $request->destinationConfigurations;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomRoutingEndpointGroupDestinations',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomRoutingEndpointGroupDestinationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the mapping configurations of an endpoint group that is associated with a custom routing listener.
     *  *
     * @description *   **UpdateCustomRoutingEndpointGroupDestinations** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of an endpoint group associated with a custom routing listener to check whether the mapping configurations of the endpoint group are modified.
     *     *   If the endpoint group is in the **updating** state, the mapping configurations of the endpoint group are being modified. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, the mapping configurations of the endpoint group are modified.
     * *   The **UpdateCustomRoutingEndpointGroupDestinations** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param UpdateCustomRoutingEndpointGroupDestinationsRequest $request UpdateCustomRoutingEndpointGroupDestinationsRequest
     *
     * @return UpdateCustomRoutingEndpointGroupDestinationsResponse UpdateCustomRoutingEndpointGroupDestinationsResponse
     */
    public function updateCustomRoutingEndpointGroupDestinations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomRoutingEndpointGroupDestinationsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the traffic policies for an endpoint that is associated with a custom routing listener.
     *  *
     * @description *   **UpdateCustomRoutingEndpointTrafficPolicies** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **updating** state, traffic policies are being modified for endpoints in the endpoint group. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, traffic policies are modified for endpoints in the endpoint group.
     * *   The **UpdateCustomRoutingEndpointTrafficPolicies** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param UpdateCustomRoutingEndpointTrafficPoliciesRequest $request UpdateCustomRoutingEndpointTrafficPoliciesRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomRoutingEndpointTrafficPoliciesResponse UpdateCustomRoutingEndpointTrafficPoliciesResponse
     */
    public function updateCustomRoutingEndpointTrafficPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->policyConfigurations)) {
            $query['PolicyConfigurations'] = $request->policyConfigurations;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomRoutingEndpointTrafficPolicies',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomRoutingEndpointTrafficPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the traffic policies for an endpoint that is associated with a custom routing listener.
     *  *
     * @description *   **UpdateCustomRoutingEndpointTrafficPolicies** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the status of the task.
     *     *   If the endpoint group is in the **updating** state, traffic policies are being modified for endpoints in the endpoint group. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, traffic policies are modified for endpoints in the endpoint group.
     * *   The **UpdateCustomRoutingEndpointTrafficPolicies** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param UpdateCustomRoutingEndpointTrafficPoliciesRequest $request UpdateCustomRoutingEndpointTrafficPoliciesRequest
     *
     * @return UpdateCustomRoutingEndpointTrafficPoliciesResponse UpdateCustomRoutingEndpointTrafficPoliciesResponse
     */
    public function updateCustomRoutingEndpointTrafficPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomRoutingEndpointTrafficPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the endpoints of a custom routing listener.
     *  *
     * @description ## Description
     * *   **UpdateCustomRoutingEndpoints** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the state of the endpoint groups associated with a custom routing listener to check whether the endpoints in the endpoint groups are modified.
     *     *   If an endpoint group is in the **updating** state, the endpoints in the endpoint group are being modified. In this case, you can perform only query operations.
     *     *   If an endpoint group is in the **active** state, the endpoints in the endpoint group are modified.
     * *   The **UpdateCustomRoutingEndpoints** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param UpdateCustomRoutingEndpointsRequest $request UpdateCustomRoutingEndpointsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomRoutingEndpointsResponse UpdateCustomRoutingEndpointsResponse
     */
    public function updateCustomRoutingEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endpointConfigurations)) {
            $query['EndpointConfigurations'] = $request->endpointConfigurations;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomRoutingEndpoints',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomRoutingEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the endpoints of a custom routing listener.
     *  *
     * @description ## Description
     * *   **UpdateCustomRoutingEndpoints** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeCustomRoutingEndpointGroup](https://help.aliyun.com/document_detail/449373.html) operation to query the state of the endpoint groups associated with a custom routing listener to check whether the endpoints in the endpoint groups are modified.
     *     *   If an endpoint group is in the **updating** state, the endpoints in the endpoint group are being modified. In this case, you can perform only query operations.
     *     *   If an endpoint group is in the **active** state, the endpoints in the endpoint group are modified.
     * *   The **UpdateCustomRoutingEndpoints** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param UpdateCustomRoutingEndpointsRequest $request UpdateCustomRoutingEndpointsRequest
     *
     * @return UpdateCustomRoutingEndpointsResponse UpdateCustomRoutingEndpointsResponse
     */
    public function updateCustomRoutingEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomRoutingEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an accelerated domain name.
     *  *
     * @description You can call this operation to modify an accelerated domain name. If the new accelerated domain name is hosted in the Chinese mainland, you must obtain an Internet content provider (ICP) number for the domain name.
     * You cannot call the **UpdateDomain** operation again by using the same Alibaba Cloud account before the previous request is completed.
     *  *
     * @param UpdateDomainRequest $request UpdateDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->targetDomain)) {
            $query['TargetDomain'] = $request->targetDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomain',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an accelerated domain name.
     *  *
     * @description You can call this operation to modify an accelerated domain name. If the new accelerated domain name is hosted in the Chinese mainland, you must obtain an Internet content provider (ICP) number for the domain name.
     * You cannot call the **UpdateDomain** operation again by using the same Alibaba Cloud account before the previous request is completed.
     *  *
     * @param UpdateDomainRequest $request UpdateDomainRequest
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the ICP filing status of an accelerated domain name.
     *  *
     * @description You can call this operation to query and update the ICP filing status of an accelerated domain name.
     * The **UpdateDomainState** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation with the same Alibaba Cloud account.
     *  *
     * @param UpdateDomainStateRequest $request UpdateDomainStateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainStateResponse UpdateDomainStateResponse
     */
    public function updateDomainStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomainState',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the ICP filing status of an accelerated domain name.
     *  *
     * @description You can call this operation to query and update the ICP filing status of an accelerated domain name.
     * The **UpdateDomainState** operation holds an exclusive lock on the GA instance. While the operation is in progress, you cannot call the same operation with the same Alibaba Cloud account.
     *  *
     * @param UpdateDomainStateRequest $request UpdateDomainStateRequest
     *
     * @return UpdateDomainStateResponse UpdateDomainStateResponse
     */
    public function updateDomainState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainStateWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an endpoint group of a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateEndpointGroup** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the state of an endpoint group.
     *     *   If the endpoint group is in the **updating** state, it indicates that the configurations of the endpoint group are being modified. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that the configurations of the endpoint group are modified.
     * *   The **UpdateEndpointGroup** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param UpdateEndpointGroupRequest $request UpdateEndpointGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEndpointGroupResponse UpdateEndpointGroupResponse
     */
    public function updateEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointConfigurations)) {
            $query['EndpointConfigurations'] = $request->endpointConfigurations;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
        }
        if (!Utils::isUnset($request->endpointGroupRegion)) {
            $query['EndpointGroupRegion'] = $request->endpointGroupRegion;
        }
        if (!Utils::isUnset($request->endpointProtocolVersion)) {
            $query['EndpointProtocolVersion'] = $request->endpointProtocolVersion;
        }
        if (!Utils::isUnset($request->endpointRequestProtocol)) {
            $query['EndpointRequestProtocol'] = $request->endpointRequestProtocol;
        }
        if (!Utils::isUnset($request->healthCheckEnabled)) {
            $query['HealthCheckEnabled'] = $request->healthCheckEnabled;
        }
        if (!Utils::isUnset($request->healthCheckIntervalSeconds)) {
            $query['HealthCheckIntervalSeconds'] = $request->healthCheckIntervalSeconds;
        }
        if (!Utils::isUnset($request->healthCheckPath)) {
            $query['HealthCheckPath'] = $request->healthCheckPath;
        }
        if (!Utils::isUnset($request->healthCheckPort)) {
            $query['HealthCheckPort'] = $request->healthCheckPort;
        }
        if (!Utils::isUnset($request->healthCheckProtocol)) {
            $query['HealthCheckProtocol'] = $request->healthCheckProtocol;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->portOverrides)) {
            $query['PortOverrides'] = $request->portOverrides;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->thresholdCount)) {
            $query['ThresholdCount'] = $request->thresholdCount;
        }
        if (!Utils::isUnset($request->trafficPercentage)) {
            $query['TrafficPercentage'] = $request->trafficPercentage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an endpoint group of a basic Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateEndpointGroup** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the system background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) operation to query the state of an endpoint group.
     *     *   If the endpoint group is in the **updating** state, it indicates that the configurations of the endpoint group are being modified. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that the configurations of the endpoint group are modified.
     * *   The **UpdateEndpointGroup** operation cannot be repeatedly called for the same Global Accelerator (GA) instance within a specific period of time.
     *  *
     * @param UpdateEndpointGroupRequest $request UpdateEndpointGroupRequest
     *
     * @return UpdateEndpointGroupResponse UpdateEndpointGroupResponse
     */
    public function updateEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name and description of an endpoint group.
     *  *
     * @param UpdateEndpointGroupAttributeRequest $request UpdateEndpointGroupAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEndpointGroupAttributeResponse UpdateEndpointGroupAttributeResponse
     */
    public function updateEndpointGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointGroupId)) {
            $query['EndpointGroupId'] = $request->endpointGroupId;
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
            'action'      => 'UpdateEndpointGroupAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEndpointGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name and description of an endpoint group.
     *  *
     * @param UpdateEndpointGroupAttributeRequest $request UpdateEndpointGroupAttributeRequest
     *
     * @return UpdateEndpointGroupAttributeResponse UpdateEndpointGroupAttributeResponse
     */
    public function updateEndpointGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the endpoint groups that are associated with a listener.
     *  *
     * @description ### Description
     * *   **UpdateEndpointGroups** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) or [ListEndpointGroups](https://help.aliyun.com/document_detail/153261.html) operation to query the status of an endpoint group.
     *     *   If the endpoint group is in the **updating** state, it indicates that the configuration of the endpoint group is being modified. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that the configuration of the endpoint group is modified.
     * *   The **UpdateEndpointGroups** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param UpdateEndpointGroupsRequest $request UpdateEndpointGroupsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEndpointGroupsResponse UpdateEndpointGroupsResponse
     */
    public function updateEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointGroupConfigurations)) {
            $query['EndpointGroupConfigurations'] = $request->endpointGroupConfigurations;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the endpoint groups that are associated with a listener.
     *  *
     * @description ### Description
     * *   **UpdateEndpointGroups** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeEndpointGroup](https://help.aliyun.com/document_detail/153260.html) or [ListEndpointGroups](https://help.aliyun.com/document_detail/153261.html) operation to query the status of an endpoint group.
     *     *   If the endpoint group is in the **updating** state, it indicates that the configuration of the endpoint group is being modified. In this case, you can perform only query operations.
     *     *   If the endpoint group is in the **active** state, it indicates that the configuration of the endpoint group is modified.
     * *   The **UpdateEndpointGroups** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param UpdateEndpointGroupsRequest $request UpdateEndpointGroupsRequest
     *
     * @return UpdateEndpointGroupsResponse UpdateEndpointGroupsResponse
     */
    public function updateEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a forwarding rule.
     *  *
     * @description *   **UpdateForwardingRules** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListForwardingRules](https://help.aliyun.com/document_detail/205817.html) operation to query the status of a forwarding rule.
     *     *   If the forwarding rule is in the **configuring** state, it indicates that the forwarding rule is being modified. In this case, you can perform only query operations.
     *     *   If the forwarding rule is in the **active** state, it indicates that the forwarding rule is modified.
     * *   The **UpdateForwardingRules** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param UpdateForwardingRulesRequest $request UpdateForwardingRulesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateForwardingRulesResponse UpdateForwardingRulesResponse
     */
    public function updateForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorId)) {
            $query['AcceleratorId'] = $request->acceleratorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forwardingRules)) {
            $query['ForwardingRules'] = $request->forwardingRules;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateForwardingRules',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateForwardingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a forwarding rule.
     *  *
     * @description *   **UpdateForwardingRules** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListForwardingRules](https://help.aliyun.com/document_detail/205817.html) operation to query the status of a forwarding rule.
     *     *   If the forwarding rule is in the **configuring** state, it indicates that the forwarding rule is being modified. In this case, you can perform only query operations.
     *     *   If the forwarding rule is in the **active** state, it indicates that the forwarding rule is modified.
     * *   The **UpdateForwardingRules** operation holds an exclusive lock on the Global Accelerator (GA) instance. While the operation is in progress, you cannot call the same operation in the same Alibaba Cloud account.
     *  *
     * @param UpdateForwardingRulesRequest $request UpdateForwardingRulesRequest
     *
     * @return UpdateForwardingRulesResponse UpdateForwardingRulesResponse
     */
    public function updateForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the attributes of an acceleration region in an acceleration area for a Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateIpSet** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of an acceleration region.
     *     *   If the acceleration region is in the **updating** state, it indicates that the acceleration region is being modified. In this case, you can continue to perform query operations on the acceleration regions.
     *     *   If the acceleration region is in the **active** state, it indicates that the acceleration region is modified.
     * *   You cannot call the **UpdateIpSet** operation again on the same GA instance before the previous operation is complete.
     *  *
     * @param UpdateIpSetRequest $request UpdateIpSetRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIpSetResponse UpdateIpSetResponse
     */
    public function updateIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipSetId)) {
            $query['IpSetId'] = $request->ipSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the attributes of an acceleration region in an acceleration area for a Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateIpSet** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of an acceleration region.
     *     *   If the acceleration region is in the **updating** state, it indicates that the acceleration region is being modified. In this case, you can continue to perform query operations on the acceleration regions.
     *     *   If the acceleration region is in the **active** state, it indicates that the acceleration region is modified.
     * *   You cannot call the **UpdateIpSet** operation again on the same GA instance before the previous operation is complete.
     *  *
     * @param UpdateIpSetRequest $request UpdateIpSetRequest
     *
     * @return UpdateIpSetResponse UpdateIpSetResponse
     */
    public function updateIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpSetWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the attributes of acceleration regions in an acceleration area for a Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateIpSets** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of the task.
     *     *   If an acceleration region is in the **updating** state, the acceleration region is being modified. In this case, you can perform only query operations.
     *     *   If an acceleration region is in the **active** state, the acceleration region is modified.
     * *   You cannot repeatedly call the **UpdateIpSets** operation for the same GA instance within a specific period of time.
     *  *
     * @param UpdateIpSetsRequest $request UpdateIpSetsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIpSetsResponse UpdateIpSetsResponse
     */
    public function updateIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipSets)) {
            $query['IpSets'] = $request->ipSets;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIpSets',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIpSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the attributes of acceleration regions in an acceleration area for a Global Accelerator (GA) instance.
     *  *
     * @description *   **UpdateIpSets** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [DescribeIpSet](https://help.aliyun.com/document_detail/153246.html) operation to query the status of the task.
     *     *   If an acceleration region is in the **updating** state, the acceleration region is being modified. In this case, you can perform only query operations.
     *     *   If an acceleration region is in the **active** state, the acceleration region is modified.
     * *   You cannot repeatedly call the **UpdateIpSets** operation for the same GA instance within a specific period of time.
     *  *
     * @param UpdateIpSetsRequest $request UpdateIpSetsRequest
     *
     * @return UpdateIpSetsResponse UpdateIpSetsResponse
     */
    public function updateIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpSetsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a listener for a Global Accelerator (GA) instance.
     *  *
     * @description This operation can be called to modify the configurations such as the protocol and ports of a listener to meet your business requirements.
     * When you call this operation, take note of the following items:
     * *   **UpdateListener** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the status of a listener.
     *     *   If the listener is in the **updating** state, it indicates that its configurations are being modified. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, it indicates that its configurations are modified.
     * *   The **UpdateListener** operation cannot be repeatedly called to modify listener configurations for the same GA instance within a specific period of time.
     *  *
     * @param UpdateListenerRequest $request UpdateListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateListenerResponse UpdateListenerResponse
     */
    public function updateListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendPorts)) {
            $query['BackendPorts'] = $request->backendPorts;
        }
        if (!Utils::isUnset($request->certificates)) {
            $query['Certificates'] = $request->certificates;
        }
        if (!Utils::isUnset($request->clientAffinity)) {
            $query['ClientAffinity'] = $request->clientAffinity;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->httpVersion)) {
            $query['HttpVersion'] = $request->httpVersion;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->portRanges)) {
            $query['PortRanges'] = $request->portRanges;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->proxyProtocol)) {
            $query['ProxyProtocol'] = $request->proxyProtocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $query['SecurityPolicyId'] = $request->securityPolicyId;
        }
        if (!Utils::isUnset($request->XForwardedForConfig)) {
            $query['XForwardedForConfig'] = $request->XForwardedForConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a listener for a Global Accelerator (GA) instance.
     *  *
     * @description This operation can be called to modify the configurations such as the protocol and ports of a listener to meet your business requirements.
     * When you call this operation, take note of the following items:
     * *   **UpdateListener** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [DescribeListener](https://help.aliyun.com/document_detail/153254.html) operation to query the status of a listener.
     *     *   If the listener is in the **updating** state, it indicates that its configurations are being modified. In this case, you can perform only query operations.
     *     *   If the listener is in the **active** state, it indicates that its configurations are modified.
     * *   The **UpdateListener** operation cannot be repeatedly called to modify listener configurations for the same GA instance within a specific period of time.
     *  *
     * @param UpdateListenerRequest $request UpdateListenerRequest
     *
     * @return UpdateListenerResponse UpdateListenerResponse
     */
    public function updateListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the control mode of a resource from managed mode to unmanaged mode.
     *  *
     * @description *   This operation is applicable only to **managed** Global Accelerator (GA) instances.
     * *   After you change the control mode of a GA instance from managed mode to unmanaged mode, you cannot change the mode of the instance to managed mode.
     * *   After you change the control mode of a GA instance from managed mode to unmanaged mode, you can obtain all operation permissions on the instance.
     *   <warning>If you change or delete a configuration of a GA instance whose control mode is changed from managed mode to unmanaged mode, the cloud services that depend on the instance may not work as expected. Proceed with caution.
     *  *
     * @param UpdateServiceManagedControlRequest $request UpdateServiceManagedControlRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceManagedControlResponse UpdateServiceManagedControlResponse
     */
    public function updateServiceManagedControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->serviceManaged)) {
            $query['ServiceManaged'] = $request->serviceManaged;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceManagedControl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceManagedControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the control mode of a resource from managed mode to unmanaged mode.
     *  *
     * @description *   This operation is applicable only to **managed** Global Accelerator (GA) instances.
     * *   After you change the control mode of a GA instance from managed mode to unmanaged mode, you cannot change the mode of the instance to managed mode.
     * *   After you change the control mode of a GA instance from managed mode to unmanaged mode, you can obtain all operation permissions on the instance.
     *   <warning>If you change or delete a configuration of a GA instance whose control mode is changed from managed mode to unmanaged mode, the cloud services that depend on the instance may not work as expected. Proceed with caution.
     *  *
     * @param UpdateServiceManagedControlRequest $request UpdateServiceManagedControlRequest
     *
     * @return UpdateServiceManagedControlResponse UpdateServiceManagedControlResponse
     */
    public function updateServiceManagedControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceManagedControlWithOptions($request, $runtime);
    }
}
