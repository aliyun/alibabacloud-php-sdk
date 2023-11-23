<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ActiveFlowLogRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ActiveFlowLogResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AddTrafficMatchRuleToTrafficMarkingPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AddTrafficMatchRuleToTrafficMarkingPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AddTraficMatchRuleToTrafficMarkingPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AddTraficMatchRuleToTrafficMarkingPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AssociateCenBandwidthPackageRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AssociateCenBandwidthPackageResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AssociateTransitRouterAttachmentWithRouteTableRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AssociateTransitRouterAttachmentWithRouteTableResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AssociateTransitRouterMulticastDomainRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AssociateTransitRouterMulticastDomainResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AttachCenChildInstanceRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AttachCenChildInstanceResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CheckTransitRouterServiceRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CheckTransitRouterServiceResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenBandwidthPackageRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenBandwidthPackageResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenChildInstanceRouteEntryToAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenChildInstanceRouteEntryToAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenChildInstanceRouteEntryToCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenChildInstanceRouteEntryToCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosQueueRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosQueueResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenRouteMapRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenRouteMapResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateFlowlogRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateFlowlogResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTrafficMarkingPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTrafficMarkingPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterCidrRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterCidrResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterMulticastDomainRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterMulticastDomainResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterPeerAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterPeerAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterPrefixListAssociationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterPrefixListAssociationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRouteEntryRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRouteEntryResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRouteTableRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRouteTableResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterShrinkRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVbrAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVbrAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpcAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpcAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpnAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpnAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouteTableAggregationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouteTableAggregationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeactiveFlowLogRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeactiveFlowLogResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenBandwidthPackageRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenBandwidthPackageResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenChildInstanceRouteEntryToAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenChildInstanceRouteEntryToAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenChildInstanceRouteEntryToCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenChildInstanceRouteEntryToCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenInterRegionTrafficQosPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenInterRegionTrafficQosPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenInterRegionTrafficQosQueueRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenInterRegionTrafficQosQueueResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenRouteMapRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenRouteMapResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteFlowlogRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteFlowlogResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteRouteServiceInCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteRouteServiceInCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTrafficMarkingPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTrafficMarkingPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterCidrRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterCidrResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterMulticastDomainRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterMulticastDomainResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterPeerAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterPeerAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterPrefixListAssociationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterPrefixListAssociationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterRouteEntryRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterRouteEntryResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterRouteTableRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterRouteTableResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterVbrAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterVbrAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterVpcAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterVpcAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterVpnAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterVpnAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouteTableAggregationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouteTableAggregationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeregisterTransitRouterMulticastGroupMembersRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeregisterTransitRouterMulticastGroupMembersResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeregisterTransitRouterMulticastGroupSourcesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeregisterTransitRouterMulticastGroupSourcesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpanRemainingBandwidthRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpanRemainingBandwidthResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeChildInstanceRegionsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeChildInstanceRegionsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGeographicRegionMembershipRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGeographicRegionMembershipResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToResourceRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToResourceResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouteTableAggregationDetailRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouteTableAggregationDetailResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouteTableAggregationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouteTableAggregationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DetachCenChildInstanceRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DetachCenChildInstanceResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DisableCenVbrHealthCheckRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DisableCenVbrHealthCheckResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DisableTransitRouterRouteTablePropagationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DisableTransitRouterRouteTablePropagationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DisassociateTransitRouterMulticastDomainRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DisassociateTransitRouterMulticastDomainResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DissociateTransitRouterAttachmentFromRouteTableRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DissociateTransitRouterAttachmentFromRouteTableResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\EnableCenVbrHealthCheckRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\EnableCenVbrHealthCheckResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\EnableTransitRouterRouteTablePropagationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\EnableTransitRouterRouteTablePropagationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\GrantInstanceToTransitRouterRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\GrantInstanceToTransitRouterResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenChildInstanceRouteEntriesToAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenChildInstanceRouteEntriesToAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListGrantVSwitchEnisRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListGrantVSwitchEnisResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListGrantVSwitchesToCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListGrantVSwitchesToCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterAvailableResourceRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterAvailableResourceResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrAllocationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrAllocationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainAssociationsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainAssociationsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainVSwitchesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainVSwitchesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastGroupsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastGroupsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPeerAttachmentsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPeerAttachmentsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPrefixListAssociationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPrefixListAssociationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTableAssociationsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTableAssociationsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablePropagationsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablePropagationsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVbrAttachmentsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVbrAttachmentsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpcAttachmentsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpcAttachmentsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpnAttachmentsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpnAttachmentsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenBandwidthPackageAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenBandwidthPackageAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenRouteMapRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenRouteMapResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyFlowLogAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyFlowLogAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCidrRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCidrResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterMulticastDomainRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterMulticastDomainResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\OpenTransitRouterServiceRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\OpenTransitRouterServiceResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\PublishRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\PublishRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RefreshTransitRouteTableAggregationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RefreshTransitRouteTableAggregationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RegisterTransitRouterMulticastGroupMembersRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RegisterTransitRouterMulticastGroupMembersResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RegisterTransitRouterMulticastGroupSourcesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RegisterTransitRouterMulticastGroupSourcesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ReplaceTransitRouterRouteTableAssociationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ReplaceTransitRouterRouteTableAssociationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ResolveAndRouteServiceInCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ResolveAndRouteServiceInCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RevokeInstanceFromTransitRouterRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RevokeInstanceFromTransitRouterResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RoutePrivateZoneInCenToVpcRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RoutePrivateZoneInCenToVpcResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\SetCenInterRegionBandwidthLimitRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\SetCenInterRegionBandwidthLimitResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\TempUpgradeCenBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\TempUpgradeCenBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UnassociateCenBandwidthPackageRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UnassociateCenBandwidthPackageResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UnroutePrivateZoneInCenToVpcRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UnroutePrivateZoneInCenToVpcResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateCenInterRegionTrafficQosPolicyAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateCenInterRegionTrafficQosPolicyAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateCenInterRegionTrafficQosQueueAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateCenInterRegionTrafficQosQueueAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTrafficMarkingPolicyAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTrafficMarkingPolicyAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterPeerAttachmentAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterPeerAttachmentAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterRouteEntryRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterRouteEntryResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterRouteTableRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterRouteTableResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVbrAttachmentAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVbrAttachmentAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpnAttachmentAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpnAttachmentAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\WithdrawPublishedRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\WithdrawPublishedRouteEntriesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cbn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cbn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * *   After you create a flow log, it is enabled by default. You can call this operation to enable a disabled flow log.
     *   * *   `ActiveFlowLog` is an asynchronous operation. After you send a request, the system returns a**request ID** and runs the task in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   *     *   If a flow log is in the **Modifying** state, the flow log is being enabled. In this case, you can query the flow log but cannot perform other operations.
     *   *     *   If a flow log is in the **Active** state, the flow log is enabled.
     *   *
     * @param ActiveFlowLogRequest $request ActiveFlowLogRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ActiveFlowLogResponse ActiveFlowLogResponse
     */
    public function activeFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->flowLogId)) {
            $query['FlowLogId'] = $request->flowLogId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActiveFlowLog',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActiveFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   After you create a flow log, it is enabled by default. You can call this operation to enable a disabled flow log.
     *   * *   `ActiveFlowLog` is an asynchronous operation. After you send a request, the system returns a**request ID** and runs the task in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   *     *   If a flow log is in the **Modifying** state, the flow log is being enabled. In this case, you can query the flow log but cannot perform other operations.
     *   *     *   If a flow log is in the **Active** state, the flow log is enabled.
     *   *
     * @param ActiveFlowLogRequest $request ActiveFlowLogRequest
     *
     * @return ActiveFlowLogResponse ActiveFlowLogResponse
     */
    public function activeFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeFlowLogWithOptions($request, $runtime);
    }

    /**
     * **AddTrafficMatchRuleToTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic classification rule.
     *   * *   If a traffic classification rule is in the **Creating** state, the traffic classification rule is being created. In this case, you can query the traffic classification rule but cannot perform other operations.
     *   * *   If a traffic classification rule is in the **Active** state, the traffic classification rule is added to the traffic marking policy.
     *   *
     * @param AddTrafficMatchRuleToTrafficMarkingPolicyRequest $request AddTrafficMatchRuleToTrafficMarkingPolicyRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTrafficMatchRuleToTrafficMarkingPolicyResponse AddTrafficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function addTrafficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyId)) {
            $query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }
        if (!Utils::isUnset($request->trafficMatchRules)) {
            $query['TrafficMatchRules'] = $request->trafficMatchRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTrafficMatchRuleToTrafficMarkingPolicy',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTrafficMatchRuleToTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **AddTrafficMatchRuleToTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic classification rule.
     *   * *   If a traffic classification rule is in the **Creating** state, the traffic classification rule is being created. In this case, you can query the traffic classification rule but cannot perform other operations.
     *   * *   If a traffic classification rule is in the **Active** state, the traffic classification rule is added to the traffic marking policy.
     *   *
     * @param AddTrafficMatchRuleToTrafficMarkingPolicyRequest $request AddTrafficMatchRuleToTrafficMarkingPolicyRequest
     *
     * @return AddTrafficMatchRuleToTrafficMarkingPolicyResponse AddTrafficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function addTrafficMatchRuleToTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTrafficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * @deprecated : AddTraficMatchRuleToTrafficMarkingPolicy is deprecated, please use Cbn::2017-09-12::AddTrafficMatchRuleToTrafficMarkingPolicy instead.
     *   * The ID of the request.
     *   *
     * Deprecated
     *
     * @param AddTraficMatchRuleToTrafficMarkingPolicyRequest $request AddTraficMatchRuleToTrafficMarkingPolicyRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTraficMatchRuleToTrafficMarkingPolicyResponse AddTraficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function addTraficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyId)) {
            $query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }
        if (!Utils::isUnset($request->trafficMatchRules)) {
            $query['TrafficMatchRules'] = $request->trafficMatchRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTraficMatchRuleToTrafficMarkingPolicy',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTraficMatchRuleToTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : AddTraficMatchRuleToTrafficMarkingPolicy is deprecated, please use Cbn::2017-09-12::AddTrafficMatchRuleToTrafficMarkingPolicy instead.
     *   * The ID of the request.
     *   *
     * Deprecated
     *
     * @param AddTraficMatchRuleToTrafficMarkingPolicyRequest $request AddTraficMatchRuleToTrafficMarkingPolicyRequest
     *
     * @return AddTraficMatchRuleToTrafficMarkingPolicyResponse AddTraficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function addTraficMatchRuleToTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTraficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * You can associate multiple bandwidth plans with a CEN instance. However, the pair of areas connected by each bandwidth plan must be unique.
     *   * For example, if a CEN instance is associated with a bandwidth plan that connects networks in the Chinese mainland, you cannot associate another bandwidth plan that also connects networks in the Chinese mainland with the CEN instance. However, you can associate a bandwidth plan that connects the Chinese mainland to North America with the CEN instance.
     *   *
     * @param AssociateCenBandwidthPackageRequest $request AssociateCenBandwidthPackageRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateCenBandwidthPackageResponse AssociateCenBandwidthPackageResponse
     */
    public function associateCenBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenBandwidthPackageId)) {
            $query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateCenBandwidthPackage',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateCenBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can associate multiple bandwidth plans with a CEN instance. However, the pair of areas connected by each bandwidth plan must be unique.
     *   * For example, if a CEN instance is associated with a bandwidth plan that connects networks in the Chinese mainland, you cannot associate another bandwidth plan that also connects networks in the Chinese mainland with the CEN instance. However, you can associate a bandwidth plan that connects the Chinese mainland to North America with the CEN instance.
     *   *
     * @param AssociateCenBandwidthPackageRequest $request AssociateCenBandwidthPackageRequest
     *
     * @return AssociateCenBandwidthPackageResponse AssociateCenBandwidthPackageResponse
     */
    public function associateCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * After you create a network instance connection on a transit router, you can configure an associated forwarding correlation to associate the network instance connection with a route table. Then, the network instance connection can forward network traffic based on the associated route table. Before you begin, we recommend that you take note of the following rules:
     *   * *   Only Enterprise Edition transit routers support associated forwarding correlations. For more information about the regions and zones that support Enterprise Edition transit routers, see [Transit routers](~~181681~~).
     *   * *   **AssociateTransitRouterAttachmentWithRouteTable** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTableAssociations** operation to query the status of an associated forwarding correlation.
     *   *     *   If an associated forwarding correlation is in the **Associating** state, the associated forwarding correlation is being created. You can query the associated forwarding correlation but cannot perform other operations.
     *   *     *   If an associated forwarding correlation is in the **Active** state, the associated forwarding correlation is created.
     *   *
     * @param AssociateTransitRouterAttachmentWithRouteTableRequest $request AssociateTransitRouterAttachmentWithRouteTableRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateTransitRouterAttachmentWithRouteTableResponse AssociateTransitRouterAttachmentWithRouteTableResponse
     */
    public function associateTransitRouterAttachmentWithRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateTransitRouterAttachmentWithRouteTable',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateTransitRouterAttachmentWithRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you create a network instance connection on a transit router, you can configure an associated forwarding correlation to associate the network instance connection with a route table. Then, the network instance connection can forward network traffic based on the associated route table. Before you begin, we recommend that you take note of the following rules:
     *   * *   Only Enterprise Edition transit routers support associated forwarding correlations. For more information about the regions and zones that support Enterprise Edition transit routers, see [Transit routers](~~181681~~).
     *   * *   **AssociateTransitRouterAttachmentWithRouteTable** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTableAssociations** operation to query the status of an associated forwarding correlation.
     *   *     *   If an associated forwarding correlation is in the **Associating** state, the associated forwarding correlation is being created. You can query the associated forwarding correlation but cannot perform other operations.
     *   *     *   If an associated forwarding correlation is in the **Active** state, the associated forwarding correlation is created.
     *   *
     * @param AssociateTransitRouterAttachmentWithRouteTableRequest $request AssociateTransitRouterAttachmentWithRouteTableRequest
     *
     * @return AssociateTransitRouterAttachmentWithRouteTableResponse AssociateTransitRouterAttachmentWithRouteTableResponse
     */
    public function associateTransitRouterAttachmentWithRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateTransitRouterAttachmentWithRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param AssociateTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return AssociateTransitRouterMulticastDomainResponse
     */
    public function associateTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateTransitRouterMulticastDomain',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateTransitRouterMulticastDomainRequest $request
     *
     * @return AssociateTransitRouterMulticastDomainResponse
     */
    public function associateTransitRouterMulticastDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateTransitRouterMulticastDomainWithOptions($request, $runtime);
    }

    /**
     * CEN allows you to attach a network instance that belongs to another Alibaba Cloud account to your CEN instance. Before you attach the network instance, CEN must acquire permissions to access the network instance that belongs to another Alibaba Cloud account.
     *   * *   For more information about how to grant CEN permissions on virtual private clouds (VPCs) that belong to another Alibaba Cloud account, see [GrantInstanceToCen](~~126224~~).
     *   * *   For more information about how to grant CEN permissions on Cloud Connect Network (CCN) instances that belong to another Alibaba Cloud account, see [GrantInstanceToCbn](~~126141~~).
     *   * *   By default, you cannot grant permissions on virtual border routers (VBRs) that belong to another Alibaba Cloud account to a CEN instance. If you need to use this feature, contact your account manager.
     *   *
     * @param AttachCenChildInstanceRequest $request AttachCenChildInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachCenChildInstanceResponse AttachCenChildInstanceResponse
     */
    public function attachCenChildInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceOwnerId)) {
            $query['ChildInstanceOwnerId'] = $request->childInstanceOwnerId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachCenChildInstance',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachCenChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CEN allows you to attach a network instance that belongs to another Alibaba Cloud account to your CEN instance. Before you attach the network instance, CEN must acquire permissions to access the network instance that belongs to another Alibaba Cloud account.
     *   * *   For more information about how to grant CEN permissions on virtual private clouds (VPCs) that belong to another Alibaba Cloud account, see [GrantInstanceToCen](~~126224~~).
     *   * *   For more information about how to grant CEN permissions on Cloud Connect Network (CCN) instances that belong to another Alibaba Cloud account, see [GrantInstanceToCbn](~~126141~~).
     *   * *   By default, you cannot grant permissions on virtual border routers (VBRs) that belong to another Alibaba Cloud account to a CEN instance. If you need to use this feature, contact your account manager.
     *   *
     * @param AttachCenChildInstanceRequest $request AttachCenChildInstanceRequest
     *
     * @return AttachCenChildInstanceResponse AttachCenChildInstanceResponse
     */
    public function attachCenChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachCenChildInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CheckTransitRouterServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckTransitRouterServiceResponse
     */
    public function checkTransitRouterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckTransitRouterService',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckTransitRouterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckTransitRouterServiceRequest $request
     *
     * @return CheckTransitRouterServiceResponse
     */
    public function checkTransitRouterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkTransitRouterServiceWithOptions($request, $runtime);
    }

    /**
     * The description of the CEN instance.
     *   * The description must be 2 to 256 characters in length. It must start with a letter and cannot start with `http://` or `https://`.
     *   *
     * @param CreateCenRequest $request CreateCenRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCenResponse CreateCenResponse
     */
    public function createCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->protectionLevel)) {
            $query['ProtectionLevel'] = $request->protectionLevel;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The description of the CEN instance.
     *   * The description must be 2 to 256 characters in length. It must start with a letter and cannot start with `http://` or `https://`.
     *   *
     * @param CreateCenRequest $request CreateCenRequest
     *
     * @return CreateCenResponse CreateCenResponse
     */
    public function createCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenWithOptions($request, $runtime);
    }

    /**
     * *   You must specify the areas to be connected when you create a bandwidth plan. An area contains one or more Alibaba Cloud regions. When you select areas for a bandwidth plan, make sure that the areas contain the regions that you want to connect. For more information about the supported areas and regions, see [Purchase a bandwidth plan](~~181560~~).
     *   * *   For more information about the billing rules, see [Billing](~~189836~~).
     *   * *   **CreateCenBandwidthPackage** is an asynchronous operation. After you send a request, the system returns a bandwidth plan instance ID and runs the task in the background. You can call the **DescribeCenBandwidthPackages** operation to query the status of a bandwidth plan. If a bandwidth plan is in the **Idle** or **InUse** state, the bandwidth plan is created.
     *   *
     * @param CreateCenBandwidthPackageRequest $request CreateCenBandwidthPackageRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCenBandwidthPackageResponse CreateCenBandwidthPackageResponse
     */
    public function createCenBandwidthPackageWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthPackageChargeType)) {
            $query['BandwidthPackageChargeType'] = $request->bandwidthPackageChargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->geographicRegionAId)) {
            $query['GeographicRegionAId'] = $request->geographicRegionAId;
        }
        if (!Utils::isUnset($request->geographicRegionBId)) {
            $query['GeographicRegionBId'] = $request->geographicRegionBId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCenBandwidthPackage',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCenBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You must specify the areas to be connected when you create a bandwidth plan. An area contains one or more Alibaba Cloud regions. When you select areas for a bandwidth plan, make sure that the areas contain the regions that you want to connect. For more information about the supported areas and regions, see [Purchase a bandwidth plan](~~181560~~).
     *   * *   For more information about the billing rules, see [Billing](~~189836~~).
     *   * *   **CreateCenBandwidthPackage** is an asynchronous operation. After you send a request, the system returns a bandwidth plan instance ID and runs the task in the background. You can call the **DescribeCenBandwidthPackages** operation to query the status of a bandwidth plan. If a bandwidth plan is in the **Idle** or **InUse** state, the bandwidth plan is created.
     *   *
     * @param CreateCenBandwidthPackageRequest $request CreateCenBandwidthPackageRequest
     *
     * @return CreateCenBandwidthPackageResponse CreateCenBandwidthPackageResponse
     */
    public function createCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * *   You can add routes only to virtual private clouds (VPCs) or virtual border routers (VBRs) that are connected to an Enterprise Edition transit router.
     *   * *   By default, the next hop of the routes is the **transit router connection**, which is the connection between the VBR and the Enterprise Edition transit router. You cannot modify the next hop.
     *   * *   **CreateCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeRouteEntryList** operation to query the status of a route.
     *   *     *   If a route is in the **Pending** state, the route is being created. You can query the route but cannot perform other operations.
     *   *     *   If a route is in the **Available** state, the route is created.
     *   *
     * @param CreateCenChildInstanceRouteEntryToAttachmentRequest $request CreateCenChildInstanceRouteEntryToAttachmentRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCenChildInstanceRouteEntryToAttachmentResponse CreateCenChildInstanceRouteEntryToAttachmentResponse
     */
    public function createCenChildInstanceRouteEntryToAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCenChildInstanceRouteEntryToAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCenChildInstanceRouteEntryToAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can add routes only to virtual private clouds (VPCs) or virtual border routers (VBRs) that are connected to an Enterprise Edition transit router.
     *   * *   By default, the next hop of the routes is the **transit router connection**, which is the connection between the VBR and the Enterprise Edition transit router. You cannot modify the next hop.
     *   * *   **CreateCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeRouteEntryList** operation to query the status of a route.
     *   *     *   If a route is in the **Pending** state, the route is being created. You can query the route but cannot perform other operations.
     *   *     *   If a route is in the **Available** state, the route is created.
     *   *
     * @param CreateCenChildInstanceRouteEntryToAttachmentRequest $request CreateCenChildInstanceRouteEntryToAttachmentRequest
     *
     * @return CreateCenChildInstanceRouteEntryToAttachmentResponse CreateCenChildInstanceRouteEntryToAttachmentResponse
     */
    public function createCenChildInstanceRouteEntryToAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenChildInstanceRouteEntryToAttachmentWithOptions($request, $runtime);
    }

    /**
     * ## Limits
     *   * *   By default, the CreateCenChildInstanceRouteEntryToCen operation is unavailable. To call this operation,[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   * *   You cannot add a route entry to an Enterprise Edition transit router by calling the CreateCenChildInstanceRouteEntryToCen operation.
     *   * *   By default, the next hop of the route entry is the regional gateway of the Cloud Enterprise Network (CEN) instance. You cannot modify the next hop.
     *   *
     * @param CreateCenChildInstanceRouteEntryToCenRequest $request CreateCenChildInstanceRouteEntryToCenRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCenChildInstanceRouteEntryToCenResponse CreateCenChildInstanceRouteEntryToCenResponse
     */
    public function createCenChildInstanceRouteEntryToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceAliUid)) {
            $query['ChildInstanceAliUid'] = $request->childInstanceAliUid;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCenChildInstanceRouteEntryToCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCenChildInstanceRouteEntryToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Limits
     *   * *   By default, the CreateCenChildInstanceRouteEntryToCen operation is unavailable. To call this operation,[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   * *   You cannot add a route entry to an Enterprise Edition transit router by calling the CreateCenChildInstanceRouteEntryToCen operation.
     *   * *   By default, the next hop of the route entry is the regional gateway of the Cloud Enterprise Network (CEN) instance. You cannot modify the next hop.
     *   *
     * @param CreateCenChildInstanceRouteEntryToCenRequest $request CreateCenChildInstanceRouteEntryToCenRequest
     *
     * @return CreateCenChildInstanceRouteEntryToCenResponse CreateCenChildInstanceRouteEntryToCenResponse
     */
    public function createCenChildInstanceRouteEntryToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenChildInstanceRouteEntryToCenWithOptions($request, $runtime);
    }

    /**
     * *   Only inter-region connections created on Enterprise Edition transit routers support QoS policies.
     *   *         If your inter-region connection uses test bandwidth, you cannot create QoS policies for the inter-region connection.
     *   * *   QoS policies apply only to outbound traffic on Enterprise Edition transit routers.
     *   *         If you create an inter-region connection between the China (Hangzhou) region and the China (Qingdao) region, and create QoS policies for the transit router in the China (Hangzhou) region and the transit router in the China (Qingdao) region, the QoS policies apply only to the network traffic that flows from China (Hangzhou) to China (Qingdao). QoS policies allocate bandwidth resources to different services.
     *   * *   **CreateCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a QoS policy ID and runs the task in the system background. You can call **ListCenInterRegionTrafficQosPolicies** to query the status of a QoS policy.
     *   *     *   If a QoS policy is in the **Creating** state, the QoS policy is being created. You can query the QoS policy but cannot perform other operations.
     *   *     *   If a QoS policy is in the **Active** state, the QoS policy is created.
     *   * ### Prerequisites
     *   * Make sure that the following requirements are met before you call the **CreateCenInterRegionTrafficQosPolicy** operation:
     *   * *   An inter-region connection is created. For more information, see [CreateTransitRouterPeerAttachment](~~261363~~).
     *   * *   A traffic marking policy is created. For more information, see [CreateTrafficMarkingPolicy](~~419025~~).
     *   *
     * @param CreateCenInterRegionTrafficQosPolicyRequest $request CreateCenInterRegionTrafficQosPolicyRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCenInterRegionTrafficQosPolicyResponse CreateCenInterRegionTrafficQosPolicyResponse
     */
    public function createCenInterRegionTrafficQosPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficQosPolicyDescription)) {
            $query['TrafficQosPolicyDescription'] = $request->trafficQosPolicyDescription;
        }
        if (!Utils::isUnset($request->trafficQosPolicyName)) {
            $query['TrafficQosPolicyName'] = $request->trafficQosPolicyName;
        }
        if (!Utils::isUnset($request->trafficQosQueues)) {
            $query['TrafficQosQueues'] = $request->trafficQosQueues;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCenInterRegionTrafficQosPolicy',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCenInterRegionTrafficQosPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only inter-region connections created on Enterprise Edition transit routers support QoS policies.
     *   *         If your inter-region connection uses test bandwidth, you cannot create QoS policies for the inter-region connection.
     *   * *   QoS policies apply only to outbound traffic on Enterprise Edition transit routers.
     *   *         If you create an inter-region connection between the China (Hangzhou) region and the China (Qingdao) region, and create QoS policies for the transit router in the China (Hangzhou) region and the transit router in the China (Qingdao) region, the QoS policies apply only to the network traffic that flows from China (Hangzhou) to China (Qingdao). QoS policies allocate bandwidth resources to different services.
     *   * *   **CreateCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a QoS policy ID and runs the task in the system background. You can call **ListCenInterRegionTrafficQosPolicies** to query the status of a QoS policy.
     *   *     *   If a QoS policy is in the **Creating** state, the QoS policy is being created. You can query the QoS policy but cannot perform other operations.
     *   *     *   If a QoS policy is in the **Active** state, the QoS policy is created.
     *   * ### Prerequisites
     *   * Make sure that the following requirements are met before you call the **CreateCenInterRegionTrafficQosPolicy** operation:
     *   * *   An inter-region connection is created. For more information, see [CreateTransitRouterPeerAttachment](~~261363~~).
     *   * *   A traffic marking policy is created. For more information, see [CreateTrafficMarkingPolicy](~~419025~~).
     *   *
     * @param CreateCenInterRegionTrafficQosPolicyRequest $request CreateCenInterRegionTrafficQosPolicyRequest
     *
     * @return CreateCenInterRegionTrafficQosPolicyResponse CreateCenInterRegionTrafficQosPolicyResponse
     */
    public function createCenInterRegionTrafficQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenInterRegionTrafficQosPolicyWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param CreateCenInterRegionTrafficQosQueueRequest $request CreateCenInterRegionTrafficQosQueueRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCenInterRegionTrafficQosQueueResponse CreateCenInterRegionTrafficQosQueueResponse
     */
    public function createCenInterRegionTrafficQosQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->dscps)) {
            $query['Dscps'] = $request->dscps;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qosQueueDescription)) {
            $query['QosQueueDescription'] = $request->qosQueueDescription;
        }
        if (!Utils::isUnset($request->qosQueueName)) {
            $query['QosQueueName'] = $request->qosQueueName;
        }
        if (!Utils::isUnset($request->remainBandwidthPercent)) {
            $query['RemainBandwidthPercent'] = $request->remainBandwidthPercent;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficQosPolicyId)) {
            $query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCenInterRegionTrafficQosQueue',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCenInterRegionTrafficQosQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param CreateCenInterRegionTrafficQosQueueRequest $request CreateCenInterRegionTrafficQosQueueRequest
     *
     * @return CreateCenInterRegionTrafficQosQueueResponse CreateCenInterRegionTrafficQosQueueResponse
     */
    public function createCenInterRegionTrafficQosQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenInterRegionTrafficQosQueueWithOptions($request, $runtime);
    }

    /**
     * The IDs of the source regions from which routes are evaluated. You can enter at most 32 region IDs.
     *   * You can call the [DescribeChildInstanceRegions](~~132080~~) operation to query the most recent region list.
     *   *
     * @param CreateCenRouteMapRequest $request CreateCenRouteMapRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCenRouteMapResponse CreateCenRouteMapResponse
     */
    public function createCenRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asPathMatchMode)) {
            $query['AsPathMatchMode'] = $request->asPathMatchMode;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenRegionId)) {
            $query['CenRegionId'] = $request->cenRegionId;
        }
        if (!Utils::isUnset($request->cidrMatchMode)) {
            $query['CidrMatchMode'] = $request->cidrMatchMode;
        }
        if (!Utils::isUnset($request->communityMatchMode)) {
            $query['CommunityMatchMode'] = $request->communityMatchMode;
        }
        if (!Utils::isUnset($request->communityOperateMode)) {
            $query['CommunityOperateMode'] = $request->communityOperateMode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationChildInstanceTypes)) {
            $query['DestinationChildInstanceTypes'] = $request->destinationChildInstanceTypes;
        }
        if (!Utils::isUnset($request->destinationCidrBlocks)) {
            $query['DestinationCidrBlocks'] = $request->destinationCidrBlocks;
        }
        if (!Utils::isUnset($request->destinationInstanceIds)) {
            $query['DestinationInstanceIds'] = $request->destinationInstanceIds;
        }
        if (!Utils::isUnset($request->destinationInstanceIdsReverseMatch)) {
            $query['DestinationInstanceIdsReverseMatch'] = $request->destinationInstanceIdsReverseMatch;
        }
        if (!Utils::isUnset($request->destinationRouteTableIds)) {
            $query['DestinationRouteTableIds'] = $request->destinationRouteTableIds;
        }
        if (!Utils::isUnset($request->mapResult)) {
            $query['MapResult'] = $request->mapResult;
        }
        if (!Utils::isUnset($request->matchAddressType)) {
            $query['MatchAddressType'] = $request->matchAddressType;
        }
        if (!Utils::isUnset($request->matchAsns)) {
            $query['MatchAsns'] = $request->matchAsns;
        }
        if (!Utils::isUnset($request->matchCommunitySet)) {
            $query['MatchCommunitySet'] = $request->matchCommunitySet;
        }
        if (!Utils::isUnset($request->nextPriority)) {
            $query['NextPriority'] = $request->nextPriority;
        }
        if (!Utils::isUnset($request->operateCommunitySet)) {
            $query['OperateCommunitySet'] = $request->operateCommunitySet;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->preference)) {
            $query['Preference'] = $request->preference;
        }
        if (!Utils::isUnset($request->prependAsPath)) {
            $query['PrependAsPath'] = $request->prependAsPath;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTypes)) {
            $query['RouteTypes'] = $request->routeTypes;
        }
        if (!Utils::isUnset($request->sourceChildInstanceTypes)) {
            $query['SourceChildInstanceTypes'] = $request->sourceChildInstanceTypes;
        }
        if (!Utils::isUnset($request->sourceInstanceIds)) {
            $query['SourceInstanceIds'] = $request->sourceInstanceIds;
        }
        if (!Utils::isUnset($request->sourceInstanceIdsReverseMatch)) {
            $query['SourceInstanceIdsReverseMatch'] = $request->sourceInstanceIdsReverseMatch;
        }
        if (!Utils::isUnset($request->sourceRegionIds)) {
            $query['SourceRegionIds'] = $request->sourceRegionIds;
        }
        if (!Utils::isUnset($request->sourceRouteTableIds)) {
            $query['SourceRouteTableIds'] = $request->sourceRouteTableIds;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        if (!Utils::isUnset($request->transmitDirection)) {
            $query['TransmitDirection'] = $request->transmitDirection;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCenRouteMap',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCenRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The IDs of the source regions from which routes are evaluated. You can enter at most 32 region IDs.
     *   * You can call the [DescribeChildInstanceRegions](~~132080~~) operation to query the most recent region list.
     *   *
     * @param CreateCenRouteMapRequest $request CreateCenRouteMapRequest
     *
     * @return CreateCenRouteMapResponse CreateCenRouteMapResponse
     */
    public function createCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * Flow logs are used to capture the information about network traffic between transit routers and between virtual border routers (VBRs). Before you create a flow log, take note of the following items:
     *   * *   Flow logs are supported only by Enterprise Edition transit routers.
     *   * *   Only flow logs in some regions can capture the information about network traffic over VBR connections. For more information, see [Limits](~~339822~~).
     *   * *   Flow logs are used to capture the information about outbound traffic on transit routers. Information about inbound traffic on transit routers is not captured.
     *   *     For example, an Elastic Compute Service (ECS) instance in the US (Silicon Valley) region accesses an ECS instance in the US (Virginia) region through CEN. After you enable the flow log feature for the transit router in the US (Virginia) region, you can check the log entries about packets sent from the ECS instance in the US (Virginia) region to the ECS instance in the US (Silicon Valley) region. However, packets sent from the ECS instance in the US (Silicon Valley) region to the ECS instance in the US (Virginia) region are not recorded. If you want to record the packets sent from the ECS instance in the US (Silicon Valley) region to the ECS instance in the US (Virginia) region, you must also enable the flow log feature on the transit router that is in the US (Silicon Valley) region.
     *   * *   `CreateFlowLog` is an asynchronous operation. After you send a request, the system returns a flow log ID and runs the task in the background. You can call the `DescribeFlowLogs` operation to query the status of a flow log.
     *   *     *   If a flow log is in the **Creating** state, the flow log is being created. In this case, you can query the flow log but cannot perform other operations.
     *   *     *   If a flow log is in the **Active** state, the flow log is created.
     *   * # Prerequisites
     *   * An inter-region connection or a VBR connection is created. For more information, see [CreateTransitRouterPeerAttachment](~~261363~~) or [CreateTransitRouterVbrAttachment](~~261361~~).
     *   *
     * @param CreateFlowlogRequest $request CreateFlowlogRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFlowlogResponse CreateFlowlogResponse
     */
    public function createFlowlogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flowLogName)) {
            $query['FlowLogName'] = $request->flowLogName;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->logStoreName)) {
            $query['LogStoreName'] = $request->logStoreName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowlog',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowlogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Flow logs are used to capture the information about network traffic between transit routers and between virtual border routers (VBRs). Before you create a flow log, take note of the following items:
     *   * *   Flow logs are supported only by Enterprise Edition transit routers.
     *   * *   Only flow logs in some regions can capture the information about network traffic over VBR connections. For more information, see [Limits](~~339822~~).
     *   * *   Flow logs are used to capture the information about outbound traffic on transit routers. Information about inbound traffic on transit routers is not captured.
     *   *     For example, an Elastic Compute Service (ECS) instance in the US (Silicon Valley) region accesses an ECS instance in the US (Virginia) region through CEN. After you enable the flow log feature for the transit router in the US (Virginia) region, you can check the log entries about packets sent from the ECS instance in the US (Virginia) region to the ECS instance in the US (Silicon Valley) region. However, packets sent from the ECS instance in the US (Silicon Valley) region to the ECS instance in the US (Virginia) region are not recorded. If you want to record the packets sent from the ECS instance in the US (Silicon Valley) region to the ECS instance in the US (Virginia) region, you must also enable the flow log feature on the transit router that is in the US (Silicon Valley) region.
     *   * *   `CreateFlowLog` is an asynchronous operation. After you send a request, the system returns a flow log ID and runs the task in the background. You can call the `DescribeFlowLogs` operation to query the status of a flow log.
     *   *     *   If a flow log is in the **Creating** state, the flow log is being created. In this case, you can query the flow log but cannot perform other operations.
     *   *     *   If a flow log is in the **Active** state, the flow log is created.
     *   * # Prerequisites
     *   * An inter-region connection or a VBR connection is created. For more information, see [CreateTransitRouterPeerAttachment](~~261363~~) or [CreateTransitRouterVbrAttachment](~~261361~~).
     *   *
     * @param CreateFlowlogRequest $request CreateFlowlogRequest
     *
     * @return CreateFlowlogResponse CreateFlowlogResponse
     */
    public function createFlowlog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowlogWithOptions($request, $runtime);
    }

    /**
     * *   Only Enterprise Edition transit routers support traffic marking policies.
     *   * *   **CreateTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a traffic marking policy ID and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic marking policy.
     *   *     *   If a traffic marking policy is in the **Creating** state, the traffic marking policy is being created. You can query the traffic marking policy but cannot perform other operations.
     *   *     *   If a traffic marking policy is in the **Active** state, the traffic marking policy is created.
     *   *
     * @param CreateTrafficMarkingPolicyRequest $request CreateTrafficMarkingPolicyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTrafficMarkingPolicyResponse CreateTrafficMarkingPolicyResponse
     */
    public function createTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->markingDscp)) {
            $query['MarkingDscp'] = $request->markingDscp;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyDescription)) {
            $query['TrafficMarkingPolicyDescription'] = $request->trafficMarkingPolicyDescription;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyName)) {
            $query['TrafficMarkingPolicyName'] = $request->trafficMarkingPolicyName;
        }
        if (!Utils::isUnset($request->trafficMatchRules)) {
            $query['TrafficMatchRules'] = $request->trafficMatchRules;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrafficMarkingPolicy',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only Enterprise Edition transit routers support traffic marking policies.
     *   * *   **CreateTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a traffic marking policy ID and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic marking policy.
     *   *     *   If a traffic marking policy is in the **Creating** state, the traffic marking policy is being created. You can query the traffic marking policy but cannot perform other operations.
     *   *     *   If a traffic marking policy is in the **Active** state, the traffic marking policy is created.
     *   *
     * @param CreateTrafficMarkingPolicyRequest $request CreateTrafficMarkingPolicyRequest
     *
     * @return CreateTrafficMarkingPolicyResponse CreateTrafficMarkingPolicyResponse
     */
    public function createTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * After you add an aggregate route to a route table of an Enterprise Edition transit router, the Enterprise Edition transit router advertises its routes only to route tables of virtual private clouds (VPCs) that are associated with a route table of the Enterprise Edition transit router and have route synchronization enabled.
     *   * Perform the following operations before you create an aggregate route. Otherwise, the Enterprise Edition transit router does not advertise routes to VPC route tables:
     *   * *   Associated forwarding is enabled between the VPCs and the Enterprise Edition transit router. For more information, see [AssociateTransitRouterAttachmentWithRouteTable](~~261242~~).
     *   * *   Route synchronization is enabled for the VPCs. For more information, see [CreateTransitRouterVpcAttachment](~~261358~~).
     *   *
     * @param CreateTransitRouteTableAggregationRequest $request CreateTransitRouteTableAggregationRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouteTableAggregationResponse CreateTransitRouteTableAggregationResponse
     */
    public function createTransitRouteTableAggregationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouteTableAggregationCidr)) {
            $query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }
        if (!Utils::isUnset($request->transitRouteTableAggregationDescription)) {
            $query['TransitRouteTableAggregationDescription'] = $request->transitRouteTableAggregationDescription;
        }
        if (!Utils::isUnset($request->transitRouteTableAggregationName)) {
            $query['TransitRouteTableAggregationName'] = $request->transitRouteTableAggregationName;
        }
        if (!Utils::isUnset($request->transitRouteTableAggregationScope)) {
            $query['TransitRouteTableAggregationScope'] = $request->transitRouteTableAggregationScope;
        }
        if (!Utils::isUnset($request->transitRouteTableId)) {
            $query['TransitRouteTableId'] = $request->transitRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouteTableAggregation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you add an aggregate route to a route table of an Enterprise Edition transit router, the Enterprise Edition transit router advertises its routes only to route tables of virtual private clouds (VPCs) that are associated with a route table of the Enterprise Edition transit router and have route synchronization enabled.
     *   * Perform the following operations before you create an aggregate route. Otherwise, the Enterprise Edition transit router does not advertise routes to VPC route tables:
     *   * *   Associated forwarding is enabled between the VPCs and the Enterprise Edition transit router. For more information, see [AssociateTransitRouterAttachmentWithRouteTable](~~261242~~).
     *   * *   Route synchronization is enabled for the VPCs. For more information, see [CreateTransitRouterVpcAttachment](~~261358~~).
     *   *
     * @param CreateTransitRouteTableAggregationRequest $request CreateTransitRouteTableAggregationRequest
     *
     * @return CreateTransitRouteTableAggregationResponse CreateTransitRouteTableAggregationResponse
     */
    public function createTransitRouteTableAggregation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouteTableAggregationWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param CreateTransitRouterRequest $tmpReq  CreateTransitRouterRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterResponse CreateTransitRouterResponse
     */
    public function createTransitRouterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTransitRouterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->transitRouterCidrList)) {
            $request->transitRouterCidrListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transitRouterCidrList, 'TransitRouterCidrList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->supportMulticast)) {
            $query['SupportMulticast'] = $request->supportMulticast;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterCidrListShrink)) {
            $query['TransitRouterCidrList'] = $request->transitRouterCidrListShrink;
        }
        if (!Utils::isUnset($request->transitRouterDescription)) {
            $query['TransitRouterDescription'] = $request->transitRouterDescription;
        }
        if (!Utils::isUnset($request->transitRouterName)) {
            $query['TransitRouterName'] = $request->transitRouterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouter',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param CreateTransitRouterRequest $request CreateTransitRouterRequest
     *
     * @return CreateTransitRouterResponse CreateTransitRouterResponse
     */
    public function createTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterWithOptions($request, $runtime);
    }

    /**
     * The client token that is used to ensure the idempotence of the request.
     *   * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *   * >  If you do not set this parameter, ClientToken is set to the value of RequestId. The value of RequestId for each API request may be different.
     *   *
     * @param CreateTransitRouterCidrRequest $request CreateTransitRouterCidrRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterCidrResponse CreateTransitRouterCidrResponse
     */
    public function createTransitRouterCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->publishCidrRoute)) {
            $query['PublishCidrRoute'] = $request->publishCidrRoute;
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
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterCidr',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The client token that is used to ensure the idempotence of the request.
     *   * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *   * >  If you do not set this parameter, ClientToken is set to the value of RequestId. The value of RequestId for each API request may be different.
     *   *
     * @param CreateTransitRouterCidrRequest $request CreateTransitRouterCidrRequest
     *
     * @return CreateTransitRouterCidrResponse CreateTransitRouterCidrResponse
     */
    public function createTransitRouterCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterCidrWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, read the following rules:
     *   * *   Only Enterprise Edition transit routers in the Australia (Sydney) and UK (London) regions support the multicast feature. Multicast is unavailable by default. If you want to enable multicast, contact your sales manager or [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex) to apply for multicast resources.
     *   * *   Make sure that an Enterprise Edition transit router is deployed in the region where you want to create the multicast domain, and the multicast feature is enabled for the Enterprise Edition transit router. For more information, see [CreateTransitRouter](~~261169~~).
     *   *     If an Enterprise Edition transit router was created before you apply for multicast resources, the transit router does not support multicast. You can delete the transit router and create a new one. For more information about how to delete an Enterprise Edition transit router, see [DeleteTransitRouter](~~261218~~).
     *   * *   When you call **CreateTransitRouterMulticastDomain**, if you set **CenId** and **RegionId**, you do not need to set **TransitRouterId**. If you set **TransitRouterId**, you do not need to set **CenId** or **RegionId**.
     *   *
     * @param CreateTransitRouterMulticastDomainRequest $request CreateTransitRouterMulticastDomainRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterMulticastDomainResponse CreateTransitRouterMulticastDomainResponse
     */
    public function createTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainDescription)) {
            $query['TransitRouterMulticastDomainDescription'] = $request->transitRouterMulticastDomainDescription;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainName)) {
            $query['TransitRouterMulticastDomainName'] = $request->transitRouterMulticastDomainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterMulticastDomain',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, read the following rules:
     *   * *   Only Enterprise Edition transit routers in the Australia (Sydney) and UK (London) regions support the multicast feature. Multicast is unavailable by default. If you want to enable multicast, contact your sales manager or [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex) to apply for multicast resources.
     *   * *   Make sure that an Enterprise Edition transit router is deployed in the region where you want to create the multicast domain, and the multicast feature is enabled for the Enterprise Edition transit router. For more information, see [CreateTransitRouter](~~261169~~).
     *   *     If an Enterprise Edition transit router was created before you apply for multicast resources, the transit router does not support multicast. You can delete the transit router and create a new one. For more information about how to delete an Enterprise Edition transit router, see [DeleteTransitRouter](~~261218~~).
     *   * *   When you call **CreateTransitRouterMulticastDomain**, if you set **CenId** and **RegionId**, you do not need to set **TransitRouterId**. If you set **TransitRouterId**, you do not need to set **CenId** or **RegionId**.
     *   *
     * @param CreateTransitRouterMulticastDomainRequest $request CreateTransitRouterMulticastDomainRequest
     *
     * @return CreateTransitRouterMulticastDomainResponse CreateTransitRouterMulticastDomainResponse
     */
    public function createTransitRouterMulticastDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterMulticastDomainWithOptions($request, $runtime);
    }

    /**
     * You must purchase a bandwidth plan before you can create an inter-region connection. For more information, see [CreateCenBandwidthPackage](~~468263~~).
     *   * **CreateTransitRouterPeerAttachment** is an asynchronous operation. After you send a request, the system returns an inter-region connection ID and runs the task in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of an inter-region connection.
     *   * *   If an inter-region connection is in the **Attaching** state, the inter-region connection is being created. You can query the inter-region connection but cannot perform other regions.
     *   * *   If an inter-region connection is in the **Attached** state, the inter-region connection is created.
     *   *
     * @param CreateTransitRouterPeerAttachmentRequest $request CreateTransitRouterPeerAttachmentRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterPeerAttachmentResponse CreateTransitRouterPeerAttachmentResponse
     */
    public function createTransitRouterPeerAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPublishRouteEnabled)) {
            $query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthType)) {
            $query['BandwidthType'] = $request->bandwidthType;
        }
        if (!Utils::isUnset($request->cenBandwidthPackageId)) {
            $query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->peerTransitRouterId)) {
            $query['PeerTransitRouterId'] = $request->peerTransitRouterId;
        }
        if (!Utils::isUnset($request->peerTransitRouterRegionId)) {
            $query['PeerTransitRouterRegionId'] = $request->peerTransitRouterRegionId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentDescription)) {
            $query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentName)) {
            $query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterPeerAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterPeerAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You must purchase a bandwidth plan before you can create an inter-region connection. For more information, see [CreateCenBandwidthPackage](~~468263~~).
     *   * **CreateTransitRouterPeerAttachment** is an asynchronous operation. After you send a request, the system returns an inter-region connection ID and runs the task in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of an inter-region connection.
     *   * *   If an inter-region connection is in the **Attaching** state, the inter-region connection is being created. You can query the inter-region connection but cannot perform other regions.
     *   * *   If an inter-region connection is in the **Attached** state, the inter-region connection is created.
     *   *
     * @param CreateTransitRouterPeerAttachmentRequest $request CreateTransitRouterPeerAttachmentRequest
     *
     * @return CreateTransitRouterPeerAttachmentResponse CreateTransitRouterPeerAttachmentResponse
     */
    public function createTransitRouterPeerAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterPeerAttachmentWithOptions($request, $runtime);
    }

    /**
     * *   Only the route tables of Enterprise Edition transit routers can be associated with prefix lists.
     *   * *   A prefix list can be associated only with one route table of an Enterprise Edition.
     *   * *   The CIDR blocks in the prefix list cannot overlap with those in the route table of the Enterprise Edition transit router. Otherwise, the prefix list fails to be associated with the route table.
     *   * *   If the route table of an Enterprise Edition transit router needs to be associated with multiple prefix lists, make sure that the CIDR blocks in the prefix lists do not overlap. Otherwise, the route table fails to be associated with the prefix lists.
     *   * # Prerequisites
     *   * *   A prefix list is created. For more information, see [CreateVpcPrefixList](~~437367~~).
     *   * *   The prefix list is shared with the Alibaba Cloud account that owns the Enterprise Edition transit router if the prefix list and the Enterprise Edition transit router belong to different Alibaba Cloud accounts. For more information about how to share a prefix list with another Alibaba Cloud account, see [Resource sharing overview](~~160622~~) and [API reference for resource sharing](~~193445~~).
     *   *
     * @param CreateTransitRouterPrefixListAssociationRequest $request CreateTransitRouterPrefixListAssociationRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterPrefixListAssociationResponse CreateTransitRouterPrefixListAssociationResponse
     */
    public function createTransitRouterPrefixListAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $query['NextHopType'] = $request->nextHopType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ownerUid)) {
            $query['OwnerUid'] = $request->ownerUid;
        }
        if (!Utils::isUnset($request->prefixListId)) {
            $query['PrefixListId'] = $request->prefixListId;
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
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterTableId)) {
            $query['TransitRouterTableId'] = $request->transitRouterTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterPrefixListAssociation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterPrefixListAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only the route tables of Enterprise Edition transit routers can be associated with prefix lists.
     *   * *   A prefix list can be associated only with one route table of an Enterprise Edition.
     *   * *   The CIDR blocks in the prefix list cannot overlap with those in the route table of the Enterprise Edition transit router. Otherwise, the prefix list fails to be associated with the route table.
     *   * *   If the route table of an Enterprise Edition transit router needs to be associated with multiple prefix lists, make sure that the CIDR blocks in the prefix lists do not overlap. Otherwise, the route table fails to be associated with the prefix lists.
     *   * # Prerequisites
     *   * *   A prefix list is created. For more information, see [CreateVpcPrefixList](~~437367~~).
     *   * *   The prefix list is shared with the Alibaba Cloud account that owns the Enterprise Edition transit router if the prefix list and the Enterprise Edition transit router belong to different Alibaba Cloud accounts. For more information about how to share a prefix list with another Alibaba Cloud account, see [Resource sharing overview](~~160622~~) and [API reference for resource sharing](~~193445~~).
     *   *
     * @param CreateTransitRouterPrefixListAssociationRequest $request CreateTransitRouterPrefixListAssociationRequest
     *
     * @return CreateTransitRouterPrefixListAssociationResponse CreateTransitRouterPrefixListAssociationResponse
     */
    public function createTransitRouterPrefixListAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterPrefixListAssociationWithOptions($request, $runtime);
    }

    /**
     * **CreateTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the route ID is returned but the operation is still being performed in the system background. You can call **ListTransitRouterRouteEntries** to query the status of a route.
     *   * *   If a route is in the **Creating** state, the route is being created. In this case, you can query the route but cannot perform other operations.
     *   * *   If a route is in the **Active** state, the route is created.
     *   *
     * @param CreateTransitRouterRouteEntryRequest $request CreateTransitRouterRouteEntryRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterRouteEntryResponse CreateTransitRouterRouteEntryResponse
     */
    public function createTransitRouterRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryDescription)) {
            $query['TransitRouterRouteEntryDescription'] = $request->transitRouterRouteEntryDescription;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryDestinationCidrBlock)) {
            $query['TransitRouterRouteEntryDestinationCidrBlock'] = $request->transitRouterRouteEntryDestinationCidrBlock;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryName)) {
            $query['TransitRouterRouteEntryName'] = $request->transitRouterRouteEntryName;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNextHopId)) {
            $query['TransitRouterRouteEntryNextHopId'] = $request->transitRouterRouteEntryNextHopId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNextHopType)) {
            $query['TransitRouterRouteEntryNextHopType'] = $request->transitRouterRouteEntryNextHopType;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterRouteEntry',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **CreateTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the route ID is returned but the operation is still being performed in the system background. You can call **ListTransitRouterRouteEntries** to query the status of a route.
     *   * *   If a route is in the **Creating** state, the route is being created. In this case, you can query the route but cannot perform other operations.
     *   * *   If a route is in the **Active** state, the route is created.
     *   *
     * @param CreateTransitRouterRouteEntryRequest $request CreateTransitRouterRouteEntryRequest
     *
     * @return CreateTransitRouterRouteEntryResponse CreateTransitRouterRouteEntryResponse
     */
    public function createTransitRouterRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterRouteEntryWithOptions($request, $runtime);
    }

    /**
     * *   Only Enterprise Edition transit routers support custom route tables. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](~~181681~~)
     *   * *   **CreateTransitRouterRouteTable** is an asynchronous operation. After you send a request, the route table ID is returned but the operation is still being performed in the system background. You can call **ListTransitRouterRouteTables** to query the status of a route table.
     *   *     *   If a route table is in the **Creating** state, the route table is being created. In this case, you can query the route table but cannot perform other operations.
     *   *     *   If a route table is in the **Active** state, the route table is created.
     *   *
     * @param CreateTransitRouterRouteTableRequest $request CreateTransitRouterRouteTableRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterRouteTableResponse CreateTransitRouterRouteTableResponse
     */
    public function createTransitRouterRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableOptions)) {
            $query['RouteTableOptions'] = $request->routeTableOptions;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableDescription)) {
            $query['TransitRouterRouteTableDescription'] = $request->transitRouterRouteTableDescription;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableName)) {
            $query['TransitRouterRouteTableName'] = $request->transitRouterRouteTableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterRouteTable',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only Enterprise Edition transit routers support custom route tables. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](~~181681~~)
     *   * *   **CreateTransitRouterRouteTable** is an asynchronous operation. After you send a request, the route table ID is returned but the operation is still being performed in the system background. You can call **ListTransitRouterRouteTables** to query the status of a route table.
     *   *     *   If a route table is in the **Creating** state, the route table is being created. In this case, you can query the route table but cannot perform other operations.
     *   *     *   If a route table is in the **Active** state, the route table is created.
     *   *
     * @param CreateTransitRouterRouteTableRequest $request CreateTransitRouterRouteTableRequest
     *
     * @return CreateTransitRouterRouteTableResponse CreateTransitRouterRouteTableResponse
     */
    public function createTransitRouterRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterRouteTableWithOptions($request, $runtime);
    }

    /**
     * *   For more information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](~~181681~~)
     *   * *   You can use the following methods to connect a VBR to an Enterprise Edition transit router:
     *   *     *   If an Enterprise Edition transit router is already created in the region where you want to create a VBR connection, set the **VbrId** and **TransitRouterId** parameters.
     *   *     *   If no Enterprise Edition transit router is created in the region where you want to create a VBR connection, set the **VbrId**, **CenId**, and **RegionId** parameters. Then, the system automatically creates an Enterprise Edition transit router in the specified region.
     *   * *   **CreateTransitRouterVbrAttachment** is an asynchronous operation. After you send a request, the system returns a VBR connection ID and runs the task in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of a VBR connection.
     *   *     *   If a VBR connection is in the **Attaching** state, the VBR connection is being created. You can query the VBR connection but cannot perform other operations.
     *   *     *   If a VBR connection is in the **Attached** state, the VBR connection is created.
     *   *
     * @param CreateTransitRouterVbrAttachmentRequest $request CreateTransitRouterVbrAttachmentRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterVbrAttachmentResponse CreateTransitRouterVbrAttachmentResponse
     */
    public function createTransitRouterVbrAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPublishRouteEnabled)) {
            $query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentDescription)) {
            $query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentName)) {
            $query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        if (!Utils::isUnset($request->vbrOwnerId)) {
            $query['VbrOwnerId'] = $request->vbrOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterVbrAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterVbrAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   For more information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](~~181681~~)
     *   * *   You can use the following methods to connect a VBR to an Enterprise Edition transit router:
     *   *     *   If an Enterprise Edition transit router is already created in the region where you want to create a VBR connection, set the **VbrId** and **TransitRouterId** parameters.
     *   *     *   If no Enterprise Edition transit router is created in the region where you want to create a VBR connection, set the **VbrId**, **CenId**, and **RegionId** parameters. Then, the system automatically creates an Enterprise Edition transit router in the specified region.
     *   * *   **CreateTransitRouterVbrAttachment** is an asynchronous operation. After you send a request, the system returns a VBR connection ID and runs the task in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of a VBR connection.
     *   *     *   If a VBR connection is in the **Attaching** state, the VBR connection is being created. You can query the VBR connection but cannot perform other operations.
     *   *     *   If a VBR connection is in the **Attached** state, the VBR connection is created.
     *   *
     * @param CreateTransitRouterVbrAttachmentRequest $request CreateTransitRouterVbrAttachmentRequest
     *
     * @return CreateTransitRouterVbrAttachmentResponse CreateTransitRouterVbrAttachmentResponse
     */
    public function createTransitRouterVbrAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterVbrAttachmentWithOptions($request, $runtime);
    }

    /**
     * *   You can use the following methods to attach a VPC to an Enterprise Edition transit router:
     *   *     *   If an Enterprise Edition transit router is already created in the region where you want to create a VPC connection, set **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, and **TransitRouterId**.
     *   *     *   If no Enterprise Edition transit router is created in the region where you want to create a VPC connection, set **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **CenId**, and **RegionId**. When you create a VPC connection, the system automatically creates an Enterprise Edition transit router in the specified region.
     *   * *   **CreateTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the VPC connection ID is returned but the operation is still being performed in the system background. You can call the [ListTransitRouterVpcAttachments](~~261222~~) operation to query the status of a VPC connection.
     *   *     *   If a VPC connection is in the **Attaching** state, the VPC connection is being created. You can query the VPC connection but cannot perform other operations.
     *   *     *   If a VPC connection is in the **Attached** state, the VPC connection is created.
     *   * *   By default, route learning and associated forwarding are disabled between transit router route tables and VPC connections.
     *   * ## Prerequisites
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   At least one vSwitch is deployed for the VPC in the zones supported by Enterprise Edition transit routers. Each vSwitch must have at least one idle IP address. For more information, see [Regions and zones supported by Enterprise Edition transit routers](~~181681~~).
     *   * *   To connect to a network instance that belongs to another Alibaba Cloud account, you must first acquire the required permissions from the account. For more information, see [Acquire permissions to connect to a network instance that belongs to another account](~~181553~~).
     *   * *   VPC connections incur fees. Take note of the billing rules of VPC connections before you create a VPC connection. For more information, see [Billing](~~189836~~).
     *   *
     * @param CreateTransitRouterVpcAttachmentRequest $request CreateTransitRouterVpcAttachmentRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterVpcAttachmentResponse CreateTransitRouterVpcAttachmentResponse
     */
    public function createTransitRouterVpcAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPublishRouteEnabled)) {
            $query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentDescription)) {
            $query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentName)) {
            $query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcOwnerId)) {
            $query['VpcOwnerId'] = $request->vpcOwnerId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $query['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterVpcAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterVpcAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can use the following methods to attach a VPC to an Enterprise Edition transit router:
     *   *     *   If an Enterprise Edition transit router is already created in the region where you want to create a VPC connection, set **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, and **TransitRouterId**.
     *   *     *   If no Enterprise Edition transit router is created in the region where you want to create a VPC connection, set **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **CenId**, and **RegionId**. When you create a VPC connection, the system automatically creates an Enterprise Edition transit router in the specified region.
     *   * *   **CreateTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the VPC connection ID is returned but the operation is still being performed in the system background. You can call the [ListTransitRouterVpcAttachments](~~261222~~) operation to query the status of a VPC connection.
     *   *     *   If a VPC connection is in the **Attaching** state, the VPC connection is being created. You can query the VPC connection but cannot perform other operations.
     *   *     *   If a VPC connection is in the **Attached** state, the VPC connection is created.
     *   * *   By default, route learning and associated forwarding are disabled between transit router route tables and VPC connections.
     *   * ## Prerequisites
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   At least one vSwitch is deployed for the VPC in the zones supported by Enterprise Edition transit routers. Each vSwitch must have at least one idle IP address. For more information, see [Regions and zones supported by Enterprise Edition transit routers](~~181681~~).
     *   * *   To connect to a network instance that belongs to another Alibaba Cloud account, you must first acquire the required permissions from the account. For more information, see [Acquire permissions to connect to a network instance that belongs to another account](~~181553~~).
     *   * *   VPC connections incur fees. Take note of the billing rules of VPC connections before you create a VPC connection. For more information, see [Billing](~~189836~~).
     *   *
     * @param CreateTransitRouterVpcAttachmentRequest $request CreateTransitRouterVpcAttachmentRequest
     *
     * @return CreateTransitRouterVpcAttachmentResponse CreateTransitRouterVpcAttachmentResponse
     */
    public function createTransitRouterVpcAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterVpcAttachmentWithOptions($request, $runtime);
    }

    /**
     * *   By default, route learning and associated forwarding are disabled between transit router route tables and IPsec-VPN attachments.
     *   * *   When you call `CreateTransitRouterVpnAttachment`, if you set **CenId** and **RegionId**, you do not need to set **TransitRouterId**. If you set **TransitRouterId** and **RegionId**, you do not need to set **CenId**.
     *   * ## Prerequisites
     *   * *   Before you attach an IPsec-VPN connection to a transit router, make sure that at least one IPsec-VPN connection is created in the region where the transit router is deployed. Make sure the IPsec-VPN connection is not associated with a resource. For more information, see [CreateVpnAttachment](~~442455~~).
     *   * *   If the IPsec-VPN connection to be attached to the transit router belongs to a different Alibaba Cloud account, make sure that the transit router has obtained the required permissions from the IPsec-VPN connection. For more information, see [GrantInstanceToTransitRouter](~~417520~~).
     *   *
     * @param CreateTransitRouterVpnAttachmentRequest $request CreateTransitRouterVpnAttachmentRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransitRouterVpnAttachmentResponse CreateTransitRouterVpnAttachmentResponse
     */
    public function createTransitRouterVpnAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPublishRouteEnabled)) {
            $query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentDescription)) {
            $query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentName)) {
            $query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->vpnId)) {
            $query['VpnId'] = $request->vpnId;
        }
        if (!Utils::isUnset($request->vpnOwnerId)) {
            $query['VpnOwnerId'] = $request->vpnOwnerId;
        }
        if (!Utils::isUnset($request->zone)) {
            $query['Zone'] = $request->zone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransitRouterVpnAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransitRouterVpnAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   By default, route learning and associated forwarding are disabled between transit router route tables and IPsec-VPN attachments.
     *   * *   When you call `CreateTransitRouterVpnAttachment`, if you set **CenId** and **RegionId**, you do not need to set **TransitRouterId**. If you set **TransitRouterId** and **RegionId**, you do not need to set **CenId**.
     *   * ## Prerequisites
     *   * *   Before you attach an IPsec-VPN connection to a transit router, make sure that at least one IPsec-VPN connection is created in the region where the transit router is deployed. Make sure the IPsec-VPN connection is not associated with a resource. For more information, see [CreateVpnAttachment](~~442455~~).
     *   * *   If the IPsec-VPN connection to be attached to the transit router belongs to a different Alibaba Cloud account, make sure that the transit router has obtained the required permissions from the IPsec-VPN connection. For more information, see [GrantInstanceToTransitRouter](~~417520~~).
     *   *
     * @param CreateTransitRouterVpnAttachmentRequest $request CreateTransitRouterVpnAttachmentRequest
     *
     * @return CreateTransitRouterVpnAttachmentResponse CreateTransitRouterVpnAttachmentResponse
     */
    public function createTransitRouterVpnAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterVpnAttachmentWithOptions($request, $runtime);
    }

    /**
     * `DeactiveFlowLog` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   * *   If a flow log is in the **Modifying** state, the flow log is being disabled. You can query the flow log but cannot perform other operations.
     *   * *   If a flow log is in the **Inactive** state, the flow log is disabled.
     *   *
     * @param DeactiveFlowLogRequest $request DeactiveFlowLogRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeactiveFlowLogResponse DeactiveFlowLogResponse
     */
    public function deactiveFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->flowLogId)) {
            $query['FlowLogId'] = $request->flowLogId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeactiveFlowLog',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactiveFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * `DeactiveFlowLog` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   * *   If a flow log is in the **Modifying** state, the flow log is being disabled. You can query the flow log but cannot perform other operations.
     *   * *   If a flow log is in the **Inactive** state, the flow log is disabled.
     *   *
     * @param DeactiveFlowLogRequest $request DeactiveFlowLogRequest
     *
     * @return DeactiveFlowLogResponse DeactiveFlowLogResponse
     */
    public function deactiveFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveFlowLogWithOptions($request, $runtime);
    }

    /**
     * **DeleteCen** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the **DescribeCens** operation to query the status of a CEN instance.
     *   * *   If a CEN instance is in the **Deleting** state, the CEN instance is being deleted. In this case, you can query the CEN instance but cannot perform other operations.
     *   * *   If a CEN instance cannot be found, the CEN instance is deleted.
     *   * #### Prerequisites
     *   * The CEN instance that you want to delete is not associated with a bandwidth plan, and the transit router associated with the CEN instance does not have a network instance connection or a custom route table.
     *   * *   For more information about how to detach a network instance, see the following topics:
     *   *     *   [DeleteTransitRouterVpcAttachment](~~261220~~)
     *   *     *   [DeleteTransitRouterVbrAttachment](~~261223~~)
     *   *     *   [DeleteTransitRouterVpnAttachment](~~443992~~)
     *   *     *   [DeleteTransitRouterPeerAttachment](~~261227~~)
     *   *      >For more information about how to detach network instances from a Basic Edition transit router, see [DetachCenChildInstance](~~65915~~).
     *   * *   For more information about how to delete a custom route table, see [DeleteTransitRouterRouteTable](~~261235~~).
     *   * *   For more information about how to disassociate a bandwidth plan from a CEN instance, see [UnassociateCenBandwidthPackage](~~65935~~).
     *   *
     * @param DeleteCenRequest $request DeleteCenRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCenResponse DeleteCenResponse
     */
    public function deleteCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteCen** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the **DescribeCens** operation to query the status of a CEN instance.
     *   * *   If a CEN instance is in the **Deleting** state, the CEN instance is being deleted. In this case, you can query the CEN instance but cannot perform other operations.
     *   * *   If a CEN instance cannot be found, the CEN instance is deleted.
     *   * #### Prerequisites
     *   * The CEN instance that you want to delete is not associated with a bandwidth plan, and the transit router associated with the CEN instance does not have a network instance connection or a custom route table.
     *   * *   For more information about how to detach a network instance, see the following topics:
     *   *     *   [DeleteTransitRouterVpcAttachment](~~261220~~)
     *   *     *   [DeleteTransitRouterVbrAttachment](~~261223~~)
     *   *     *   [DeleteTransitRouterVpnAttachment](~~443992~~)
     *   *     *   [DeleteTransitRouterPeerAttachment](~~261227~~)
     *   *      >For more information about how to detach network instances from a Basic Edition transit router, see [DetachCenChildInstance](~~65915~~).
     *   * *   For more information about how to delete a custom route table, see [DeleteTransitRouterRouteTable](~~261235~~).
     *   * *   For more information about how to disassociate a bandwidth plan from a CEN instance, see [UnassociateCenBandwidthPackage](~~65935~~).
     *   *
     * @param DeleteCenRequest $request DeleteCenRequest
     *
     * @return DeleteCenResponse DeleteCenResponse
     */
    public function deleteCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCenBandwidthPackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCenBandwidthPackageResponse
     */
    public function deleteCenBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenBandwidthPackageId)) {
            $query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCenBandwidthPackage',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCenBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCenBandwidthPackageRequest $request
     *
     * @return DeleteCenBandwidthPackageResponse
     */
    public function deleteCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * *   You can delete routes only from virtual private clouds (VPCs) and virtual border routers (VBRs) whose next hop is an **Enterprise Edition transit router connection**, which is the connection to the network instance.
     *   * *   **DeleteCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeRouteEntryList** operation to query the status of a route.
     *   *     *   If a route is in the **Deleting** state, the route is being deleted. You can query the route but cannot perform other operations.
     *   *     *   If a route cannot be found, the route is deleted.
     *   *
     * @param DeleteCenChildInstanceRouteEntryToAttachmentRequest $request DeleteCenChildInstanceRouteEntryToAttachmentRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCenChildInstanceRouteEntryToAttachmentResponse DeleteCenChildInstanceRouteEntryToAttachmentResponse
     */
    public function deleteCenChildInstanceRouteEntryToAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCenChildInstanceRouteEntryToAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCenChildInstanceRouteEntryToAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can delete routes only from virtual private clouds (VPCs) and virtual border routers (VBRs) whose next hop is an **Enterprise Edition transit router connection**, which is the connection to the network instance.
     *   * *   **DeleteCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeRouteEntryList** operation to query the status of a route.
     *   *     *   If a route is in the **Deleting** state, the route is being deleted. You can query the route but cannot perform other operations.
     *   *     *   If a route cannot be found, the route is deleted.
     *   *
     * @param DeleteCenChildInstanceRouteEntryToAttachmentRequest $request DeleteCenChildInstanceRouteEntryToAttachmentRequest
     *
     * @return DeleteCenChildInstanceRouteEntryToAttachmentResponse DeleteCenChildInstanceRouteEntryToAttachmentResponse
     */
    public function deleteCenChildInstanceRouteEntryToAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenChildInstanceRouteEntryToAttachmentWithOptions($request, $runtime);
    }

    /**
     * ## Limits
     *   * *   By default, the DeleteCenChildInstanceRouteEntryToCen operation is unavailable. To call this operation, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   * *   You cannot delete a route entry from an Enterprise Edition transit router by calling the DeleteCenChildInstanceRouteEntryToCen operation.
     *   *
     * @param DeleteCenChildInstanceRouteEntryToCenRequest $request DeleteCenChildInstanceRouteEntryToCenRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCenChildInstanceRouteEntryToCenResponse DeleteCenChildInstanceRouteEntryToCenResponse
     */
    public function deleteCenChildInstanceRouteEntryToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceAliUid)) {
            $query['ChildInstanceAliUid'] = $request->childInstanceAliUid;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCenChildInstanceRouteEntryToCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCenChildInstanceRouteEntryToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Limits
     *   * *   By default, the DeleteCenChildInstanceRouteEntryToCen operation is unavailable. To call this operation, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   * *   You cannot delete a route entry from an Enterprise Edition transit router by calling the DeleteCenChildInstanceRouteEntryToCen operation.
     *   *
     * @param DeleteCenChildInstanceRouteEntryToCenRequest $request DeleteCenChildInstanceRouteEntryToCenRequest
     *
     * @return DeleteCenChildInstanceRouteEntryToCenResponse DeleteCenChildInstanceRouteEntryToCenResponse
     */
    public function deleteCenChildInstanceRouteEntryToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenChildInstanceRouteEntryToCenWithOptions($request, $runtime);
    }

    /**
     * *   Before you delete a QoS policy, you must delete all queues in the QoS policy except the default queue. For more information, see [DeleteCenInterRegionTrafficQosQueue](~~419062~~).
     *   * *   **DeleteCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of a QoS policy.
     *   *     *   If a QoS policy is in the **Deleting** state, the QoS policy is being deleted. You can query the QoS policy but cannot perform other operations.
     *   *     *   If a QoS policy cannot be found, the QoS policy is deleted.
     *   *
     * @param DeleteCenInterRegionTrafficQosPolicyRequest $request DeleteCenInterRegionTrafficQosPolicyRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCenInterRegionTrafficQosPolicyResponse DeleteCenInterRegionTrafficQosPolicyResponse
     */
    public function deleteCenInterRegionTrafficQosPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficQosPolicyId)) {
            $query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCenInterRegionTrafficQosPolicy',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCenInterRegionTrafficQosPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Before you delete a QoS policy, you must delete all queues in the QoS policy except the default queue. For more information, see [DeleteCenInterRegionTrafficQosQueue](~~419062~~).
     *   * *   **DeleteCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of a QoS policy.
     *   *     *   If a QoS policy is in the **Deleting** state, the QoS policy is being deleted. You can query the QoS policy but cannot perform other operations.
     *   *     *   If a QoS policy cannot be found, the QoS policy is deleted.
     *   *
     * @param DeleteCenInterRegionTrafficQosPolicyRequest $request DeleteCenInterRegionTrafficQosPolicyRequest
     *
     * @return DeleteCenInterRegionTrafficQosPolicyResponse DeleteCenInterRegionTrafficQosPolicyResponse
     */
    public function deleteCenInterRegionTrafficQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenInterRegionTrafficQosPolicyWithOptions($request, $runtime);
    }

    /**
     * *   You cannot delete the default queue.
     *   * *   **DeleteCenInterRegionTrafficQosQueue** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of a queue. If a queue cannot be found, the queue is deleted.
     *   *
     * @param DeleteCenInterRegionTrafficQosQueueRequest $request DeleteCenInterRegionTrafficQosQueueRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCenInterRegionTrafficQosQueueResponse DeleteCenInterRegionTrafficQosQueueResponse
     */
    public function deleteCenInterRegionTrafficQosQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qosQueueId)) {
            $query['QosQueueId'] = $request->qosQueueId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCenInterRegionTrafficQosQueue',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCenInterRegionTrafficQosQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You cannot delete the default queue.
     *   * *   **DeleteCenInterRegionTrafficQosQueue** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of a queue. If a queue cannot be found, the queue is deleted.
     *   *
     * @param DeleteCenInterRegionTrafficQosQueueRequest $request DeleteCenInterRegionTrafficQosQueueRequest
     *
     * @return DeleteCenInterRegionTrafficQosQueueResponse DeleteCenInterRegionTrafficQosQueueResponse
     */
    public function deleteCenInterRegionTrafficQosQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenInterRegionTrafficQosQueueWithOptions($request, $runtime);
    }

    /**
     * `DeleteCenRouteMap` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeCenRouteMaps` operation to query the status of a routing policy.
     *   * *   If a routing policy is in the **Deleting** state, the routing policy is being deleted. You can query the routing policy but cannot perform other operations.
     *   * *   If a routing policy cannot be found, it is deleted.``.
     *   *
     * @param DeleteCenRouteMapRequest $request DeleteCenRouteMapRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCenRouteMapResponse DeleteCenRouteMapResponse
     */
    public function deleteCenRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenRegionId)) {
            $query['CenRegionId'] = $request->cenRegionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeMapId)) {
            $query['RouteMapId'] = $request->routeMapId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCenRouteMap',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCenRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * `DeleteCenRouteMap` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeCenRouteMaps` operation to query the status of a routing policy.
     *   * *   If a routing policy is in the **Deleting** state, the routing policy is being deleted. You can query the routing policy but cannot perform other operations.
     *   * *   If a routing policy cannot be found, it is deleted.``.
     *   *
     * @param DeleteCenRouteMapRequest $request DeleteCenRouteMapRequest
     *
     * @return DeleteCenRouteMapResponse DeleteCenRouteMapResponse
     */
    public function deleteCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * `DeleteFlowlog` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   * *   If a flow log is in the **Deleting** state, the flow log is being deleted. In this case, you can query the flow log but cannot perform other operations.
     *   * *   If a flow log cannot be found, the flow log is deleted.
     *   *
     * @param DeleteFlowlogRequest $request DeleteFlowlogRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowlogResponse DeleteFlowlogResponse
     */
    public function deleteFlowlogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->flowLogId)) {
            $query['FlowLogId'] = $request->flowLogId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowlog',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowlogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * `DeleteFlowlog` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   * *   If a flow log is in the **Deleting** state, the flow log is being deleted. In this case, you can query the flow log but cannot perform other operations.
     *   * *   If a flow log cannot be found, the flow log is deleted.
     *   *
     * @param DeleteFlowlogRequest $request DeleteFlowlogRequest
     *
     * @return DeleteFlowlogResponse DeleteFlowlogResponse
     */
    public function deleteFlowlog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowlogWithOptions($request, $runtime);
    }

    /**
     * **DeleteRouteServiceInCen** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeRouteServicesInCen** operation to query the status of the connection to a cloud service.
     *   *     - If a cloud service is in the **Deleting** state, the configuration of the cloud service is being deleted. You can query the configuration but cannot perform other operations.
     *   *     - If no configuration of a cloud service can be found, the configuration of the cloud service is deleted.
     *   *
     * @param DeleteRouteServiceInCenRequest $request DeleteRouteServiceInCenRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRouteServiceInCenResponse DeleteRouteServiceInCenResponse
     */
    public function deleteRouteServiceInCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessRegionId)) {
            $query['AccessRegionId'] = $request->accessRegionId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->hostRegionId)) {
            $query['HostRegionId'] = $request->hostRegionId;
        }
        if (!Utils::isUnset($request->hostVpcId)) {
            $query['HostVpcId'] = $request->hostVpcId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRouteServiceInCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRouteServiceInCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteRouteServiceInCen** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeRouteServicesInCen** operation to query the status of the connection to a cloud service.
     *   *     - If a cloud service is in the **Deleting** state, the configuration of the cloud service is being deleted. You can query the configuration but cannot perform other operations.
     *   *     - If no configuration of a cloud service can be found, the configuration of the cloud service is deleted.
     *   *
     * @param DeleteRouteServiceInCenRequest $request DeleteRouteServiceInCenRequest
     *
     * @return DeleteRouteServiceInCenResponse DeleteRouteServiceInCenResponse
     */
    public function deleteRouteServiceInCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteServiceInCenWithOptions($request, $runtime);
    }

    /**
     * *   The **DeleteTrafficMarkingPolicy** operation is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call **ListTrafficMarkingPolicies** to query the status of a traffic marking policy.
     *   *     *   If a traffic marking policy is in the **Deleting** state, the traffic marking policy is being deleted. You can query the traffic marking policy, but cannot perform other operations.
     *   *     *   If a traffic marking policy cannot be found, the traffic marking policy is deleted.
     *   * *   Before you delete a traffic marking policy, you must delete all traffic classification rules from the policy. For more information, see [RemoveTraficMatchRuleFromTrafficMarkingPolicy](~~419012~~).
     *   *
     * @param DeleteTrafficMarkingPolicyRequest $request DeleteTrafficMarkingPolicyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTrafficMarkingPolicyResponse DeleteTrafficMarkingPolicyResponse
     */
    public function deleteTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyId)) {
            $query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficMarkingPolicy',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   The **DeleteTrafficMarkingPolicy** operation is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call **ListTrafficMarkingPolicies** to query the status of a traffic marking policy.
     *   *     *   If a traffic marking policy is in the **Deleting** state, the traffic marking policy is being deleted. You can query the traffic marking policy, but cannot perform other operations.
     *   *     *   If a traffic marking policy cannot be found, the traffic marking policy is deleted.
     *   * *   Before you delete a traffic marking policy, you must delete all traffic classification rules from the policy. For more information, see [RemoveTraficMatchRuleFromTrafficMarkingPolicy](~~419012~~).
     *   *
     * @param DeleteTrafficMarkingPolicyRequest $request DeleteTrafficMarkingPolicyRequest
     *
     * @return DeleteTrafficMarkingPolicyResponse DeleteTrafficMarkingPolicyResponse
     */
    public function deleteTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTransitRouteTableAggregationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteTransitRouteTableAggregationResponse
     */
    public function deleteTransitRouteTableAggregationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouteTableAggregationCidr)) {
            $query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }
        if (!Utils::isUnset($request->transitRouteTableId)) {
            $query['TransitRouteTableId'] = $request->transitRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouteTableAggregation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTransitRouteTableAggregationRequest $request
     *
     * @return DeleteTransitRouteTableAggregationResponse
     */
    public function deleteTransitRouteTableAggregation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouteTableAggregationWithOptions($request, $runtime);
    }

    /**
     * **DeleteTransitRouter** is an asynchronous operation. After you send a request, the **request ID** is returned but the operation is still being performed in the system background. You can call **ListTransitRouters** to query the status of a transit router.
     *   * *   If a transit router is in the **Deleting** state, the transit router is being deleted. In this case, you can query the transit router but cannot perform other operations.
     *   * *   If a transit router cannot be found, the transit router is deleted.
     *   * #### Prerequisites
     *   * Before you delete a transit router, make sure that the following prerequisites are met:
     *   * - No network instance connections are created on the transit router.
     *   *
     *   *     - For more information about how to delete a virtual private cloud (VPC) connection, see [DeleteTransitRouterVpcAttachment](~~261220~~).
     *   *     - For more information about how to delete a virtual border router (VBR) connection, see [DeleteTransitRouterVbrAttachment](~~261223~~).
     *   *     - For more information about how to delete a Cloud Connect Network (CCN) connection, see [DetachCenChildInstance](~~65915~~).
     *   *     - For more information about how to delete a VPN connection, see [DeleteTransitRouterVpnAttachment](~~443992~~).
     *   *     - For more information about how to delete an inter-region connection, see [DeleteTransitRouterPeerAttachment](~~261227~~).
     *   * - No custom route tables are created on the transit router. For more information about how to delete a custom route table, see [DeleteTransitRouterRouteTable](~~261235~~).
     *   *
     * @param DeleteTransitRouterRequest $request DeleteTransitRouterRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterResponse DeleteTransitRouterResponse
     */
    public function deleteTransitRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouter',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteTransitRouter** is an asynchronous operation. After you send a request, the **request ID** is returned but the operation is still being performed in the system background. You can call **ListTransitRouters** to query the status of a transit router.
     *   * *   If a transit router is in the **Deleting** state, the transit router is being deleted. In this case, you can query the transit router but cannot perform other operations.
     *   * *   If a transit router cannot be found, the transit router is deleted.
     *   * #### Prerequisites
     *   * Before you delete a transit router, make sure that the following prerequisites are met:
     *   * - No network instance connections are created on the transit router.
     *   *
     *   *     - For more information about how to delete a virtual private cloud (VPC) connection, see [DeleteTransitRouterVpcAttachment](~~261220~~).
     *   *     - For more information about how to delete a virtual border router (VBR) connection, see [DeleteTransitRouterVbrAttachment](~~261223~~).
     *   *     - For more information about how to delete a Cloud Connect Network (CCN) connection, see [DetachCenChildInstance](~~65915~~).
     *   *     - For more information about how to delete a VPN connection, see [DeleteTransitRouterVpnAttachment](~~443992~~).
     *   *     - For more information about how to delete an inter-region connection, see [DeleteTransitRouterPeerAttachment](~~261227~~).
     *   * - No custom route tables are created on the transit router. For more information about how to delete a custom route table, see [DeleteTransitRouterRouteTable](~~261235~~).
     *   *
     * @param DeleteTransitRouterRequest $request DeleteTransitRouterRequest
     *
     * @return DeleteTransitRouterResponse DeleteTransitRouterResponse
     */
    public function deleteTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterWithOptions($request, $runtime);
    }

    /**
     * If IP addresses within the CIDR block have been allocated to network instances, the CIDR block cannot be deleted.
     *   *
     * @param DeleteTransitRouterCidrRequest $request DeleteTransitRouterCidrRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterCidrResponse DeleteTransitRouterCidrResponse
     */
    public function deleteTransitRouterCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->transitRouterCidrId)) {
            $query['TransitRouterCidrId'] = $request->transitRouterCidrId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterCidr',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If IP addresses within the CIDR block have been allocated to network instances, the CIDR block cannot be deleted.
     *   *
     * @param DeleteTransitRouterCidrRequest $request DeleteTransitRouterCidrRequest
     *
     * @return DeleteTransitRouterCidrResponse DeleteTransitRouterCidrResponse
     */
    public function deleteTransitRouterCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterCidrWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteTransitRouterMulticastDomainResponse
     */
    public function deleteTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterMulticastDomain',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTransitRouterMulticastDomainRequest $request
     *
     * @return DeleteTransitRouterMulticastDomainResponse
     */
    public function deleteTransitRouterMulticastDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterMulticastDomainWithOptions($request, $runtime);
    }

    /**
     * **DeleteTransitRouterPeerAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call **ListTransitRouterPeerAttachments** to query the status of an inter-region connection.
     *   * *   If an inter-region connection is in the **Detaching** state, the inter-region connection is being deleted. You can query the inter-region connection but cannot perform other operations.
     *   * *   If an inter-region connection cannot be found, the inter-region connection is deleted.
     *   * ## Prerequisites
     *   * Before you begin, make sure that the Enterprise Edition transit router that you use to create inter-region connections meets the following prerequisites:
     *   * *   No associated forwarding correlation is established between the inter-region connection and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](~~260944~~).
     *   * *   No route learning correlation is established between the inter-region connection and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](~~260945~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a custom route entry whose next hop is the network instance connection. For more information about how to delete custom routes from route tables of Enterprise Edition transit routers, see [DeleteTransitRouterRouteEntry](~~261240~~).
     *   * *   The route table does not contain a route whose next hop is the inter-region connection and that is generated from a prefix list. You can delete routes from a route table by disassociating the route table from the prefix list. For more information, see [DeleteTransitRouterPrefixListAssociation](~~445486~~).
     *   * *   No quality of service (QoS) policy is configured for the inter-region connection. For more information about how to delete QoS policies, see [DeleteCenInterRegionTrafficQosPolicy](~~427547~~).
     *   *
     * @param DeleteTransitRouterPeerAttachmentRequest $request DeleteTransitRouterPeerAttachmentRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterPeerAttachmentResponse DeleteTransitRouterPeerAttachmentResponse
     */
    public function deleteTransitRouterPeerAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterPeerAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterPeerAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteTransitRouterPeerAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call **ListTransitRouterPeerAttachments** to query the status of an inter-region connection.
     *   * *   If an inter-region connection is in the **Detaching** state, the inter-region connection is being deleted. You can query the inter-region connection but cannot perform other operations.
     *   * *   If an inter-region connection cannot be found, the inter-region connection is deleted.
     *   * ## Prerequisites
     *   * Before you begin, make sure that the Enterprise Edition transit router that you use to create inter-region connections meets the following prerequisites:
     *   * *   No associated forwarding correlation is established between the inter-region connection and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](~~260944~~).
     *   * *   No route learning correlation is established between the inter-region connection and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](~~260945~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a custom route entry whose next hop is the network instance connection. For more information about how to delete custom routes from route tables of Enterprise Edition transit routers, see [DeleteTransitRouterRouteEntry](~~261240~~).
     *   * *   The route table does not contain a route whose next hop is the inter-region connection and that is generated from a prefix list. You can delete routes from a route table by disassociating the route table from the prefix list. For more information, see [DeleteTransitRouterPrefixListAssociation](~~445486~~).
     *   * *   No quality of service (QoS) policy is configured for the inter-region connection. For more information about how to delete QoS policies, see [DeleteCenInterRegionTrafficQosPolicy](~~427547~~).
     *   *
     * @param DeleteTransitRouterPeerAttachmentRequest $request DeleteTransitRouterPeerAttachmentRequest
     *
     * @return DeleteTransitRouterPeerAttachmentResponse DeleteTransitRouterPeerAttachmentResponse
     */
    public function deleteTransitRouterPeerAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterPeerAttachmentWithOptions($request, $runtime);
    }

    /**
     * # Usage notes
     *   * After you disassociate a route table of an Enterprise Edition transit router from a prefix list, the routes that point to the CIDR blocks in the prefix list are automatically withdrawn from the route table. Before you disassociate the route table of an Enterprise Edition transit router from a prefix list, you must migrate workloads that use the routes in case services are interrupted.
     *   *
     * @param DeleteTransitRouterPrefixListAssociationRequest $request DeleteTransitRouterPrefixListAssociationRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterPrefixListAssociationResponse DeleteTransitRouterPrefixListAssociationResponse
     */
    public function deleteTransitRouterPrefixListAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $query['NextHopType'] = $request->nextHopType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prefixListId)) {
            $query['PrefixListId'] = $request->prefixListId;
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
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterTableId)) {
            $query['TransitRouterTableId'] = $request->transitRouterTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterPrefixListAssociation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterPrefixListAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * # Usage notes
     *   * After you disassociate a route table of an Enterprise Edition transit router from a prefix list, the routes that point to the CIDR blocks in the prefix list are automatically withdrawn from the route table. Before you disassociate the route table of an Enterprise Edition transit router from a prefix list, you must migrate workloads that use the routes in case services are interrupted.
     *   *
     * @param DeleteTransitRouterPrefixListAssociationRequest $request DeleteTransitRouterPrefixListAssociationRequest
     *
     * @return DeleteTransitRouterPrefixListAssociationResponse DeleteTransitRouterPrefixListAssociationResponse
     */
    public function deleteTransitRouterPrefixListAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterPrefixListAssociationWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   If **TransitRouterRouteEntryId** is set, you must not set **TransitRouterRouteTableId** or **TransitRouterRouteEntryDestinationCidrBlock**. Otherwise, parameter conflicts will occur.
     *   * *   If **TransitRouterRouteEntryId** is not set, you must specify the set parameters based on the type of the next hop:
     *   *     *   To delete a blackhole route, you must set **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, and **TransitRouterRouteEntryNextHopType**.
     *   *     *   If the route that you want to delete is not a blackhole route, you must set **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, **TransitRouterRouteEntryNextHopType**, and **TransitRouterRouteEntryNextHopId**.
     *   * *   **DeleteTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the system background. You can call the **ListTransitRouterRouteEntries** operation to query the status of a route entry.
     *   *     *   If a route entry is in the **Deleting** state, the route entry is being deleted. You can query the route entry but cannot perform other operations.
     *   *     *   If a route entry cannot be found, it is deleted.
     *   * ## Limits
     *   * You can call this operation to delete only static routes. Automatically learned routes are not supported. You can call the [ListTransitRouterRouteEntries](~~260941~~) operation to query route types.
     *   *
     * @param DeleteTransitRouterRouteEntryRequest $request DeleteTransitRouterRouteEntryRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterRouteEntryResponse DeleteTransitRouterRouteEntryResponse
     */
    public function deleteTransitRouterRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryDestinationCidrBlock)) {
            $query['TransitRouterRouteEntryDestinationCidrBlock'] = $request->transitRouterRouteEntryDestinationCidrBlock;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryId)) {
            $query['TransitRouterRouteEntryId'] = $request->transitRouterRouteEntryId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNextHopId)) {
            $query['TransitRouterRouteEntryNextHopId'] = $request->transitRouterRouteEntryNextHopId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNextHopType)) {
            $query['TransitRouterRouteEntryNextHopType'] = $request->transitRouterRouteEntryNextHopType;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterRouteEntry',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   If **TransitRouterRouteEntryId** is set, you must not set **TransitRouterRouteTableId** or **TransitRouterRouteEntryDestinationCidrBlock**. Otherwise, parameter conflicts will occur.
     *   * *   If **TransitRouterRouteEntryId** is not set, you must specify the set parameters based on the type of the next hop:
     *   *     *   To delete a blackhole route, you must set **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, and **TransitRouterRouteEntryNextHopType**.
     *   *     *   If the route that you want to delete is not a blackhole route, you must set **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, **TransitRouterRouteEntryNextHopType**, and **TransitRouterRouteEntryNextHopId**.
     *   * *   **DeleteTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the system background. You can call the **ListTransitRouterRouteEntries** operation to query the status of a route entry.
     *   *     *   If a route entry is in the **Deleting** state, the route entry is being deleted. You can query the route entry but cannot perform other operations.
     *   *     *   If a route entry cannot be found, it is deleted.
     *   * ## Limits
     *   * You can call this operation to delete only static routes. Automatically learned routes are not supported. You can call the [ListTransitRouterRouteEntries](~~260941~~) operation to query route types.
     *   *
     * @param DeleteTransitRouterRouteEntryRequest $request DeleteTransitRouterRouteEntryRequest
     *
     * @return DeleteTransitRouterRouteEntryResponse DeleteTransitRouterRouteEntryResponse
     */
    public function deleteTransitRouterRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterRouteEntryWithOptions($request, $runtime);
    }

    /**
     * *   You cannot delete the default route table of an Enterprise Edition transit router.
     *   * *   **DeleteTransitRouterRouteTable** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTables** operation to query the status of a custom route table.
     *   *     *   If a custom route table is in the Deleting state, the custom route table is being deleted. In this case, you can query the custom route table but cannot perform other operations.
     *   *     *   If a custom route table cannot be found, the custom route table is deleted.
     *   *
     * @param DeleteTransitRouterRouteTableRequest $request DeleteTransitRouterRouteTableRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterRouteTableResponse DeleteTransitRouterRouteTableResponse
     */
    public function deleteTransitRouterRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterRouteTable',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You cannot delete the default route table of an Enterprise Edition transit router.
     *   * *   **DeleteTransitRouterRouteTable** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTables** operation to query the status of a custom route table.
     *   *     *   If a custom route table is in the Deleting state, the custom route table is being deleted. In this case, you can query the custom route table but cannot perform other operations.
     *   *     *   If a custom route table cannot be found, the custom route table is deleted.
     *   *
     * @param DeleteTransitRouterRouteTableRequest $request DeleteTransitRouterRouteTableRequest
     *
     * @return DeleteTransitRouterRouteTableResponse DeleteTransitRouterRouteTableResponse
     */
    public function deleteTransitRouterRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterRouteTableWithOptions($request, $runtime);
    }

    /**
     * **DeleteTransitRouterVbrAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of a VBR connection.
     *   * *   If a VBR connection is in the **Detaching** state, the VBR connection is being deleted. You can query the VBR connection but cannot perform other operations.
     *   * *   If a VBR connection cannot be found, the VBR connection is deleted.
     *   * ## Prerequisites
     *   * Before you delete a VBR connection for an Enterprise Edition transit router, make sure that the following requirements are met:
     *   * *   No associated forwarding correlation is established between the VBR connection and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](~~260944~~).
     *   * *   No route learning correlation is established between the VBR connection and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](~~260945~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a custom route entry whose next hop is the network instance connection. For more information about how to delete custom route entries, see [DeleteTransitRouterRouteEntry](~~261240~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a route whose next hop is the VBR connection and that is generated from a prefix list. You can delete such routes by disassociating the route table from the prefix list. For more information, see [DeleteTransitRouterPrefixListAssociation](~~445486~~).
     *   *
     * @param DeleteTransitRouterVbrAttachmentRequest $request DeleteTransitRouterVbrAttachmentRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterVbrAttachmentResponse DeleteTransitRouterVbrAttachmentResponse
     */
    public function deleteTransitRouterVbrAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterVbrAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterVbrAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteTransitRouterVbrAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of a VBR connection.
     *   * *   If a VBR connection is in the **Detaching** state, the VBR connection is being deleted. You can query the VBR connection but cannot perform other operations.
     *   * *   If a VBR connection cannot be found, the VBR connection is deleted.
     *   * ## Prerequisites
     *   * Before you delete a VBR connection for an Enterprise Edition transit router, make sure that the following requirements are met:
     *   * *   No associated forwarding correlation is established between the VBR connection and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](~~260944~~).
     *   * *   No route learning correlation is established between the VBR connection and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](~~260945~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a custom route entry whose next hop is the network instance connection. For more information about how to delete custom route entries, see [DeleteTransitRouterRouteEntry](~~261240~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a route whose next hop is the VBR connection and that is generated from a prefix list. You can delete such routes by disassociating the route table from the prefix list. For more information, see [DeleteTransitRouterPrefixListAssociation](~~445486~~).
     *   *
     * @param DeleteTransitRouterVbrAttachmentRequest $request DeleteTransitRouterVbrAttachmentRequest
     *
     * @return DeleteTransitRouterVbrAttachmentResponse DeleteTransitRouterVbrAttachmentResponse
     */
    public function deleteTransitRouterVbrAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterVbrAttachmentWithOptions($request, $runtime);
    }

    /**
     * **DeleteTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     *   * *   If a VPC connection is in the **Detaching** state, the VPC connection is being deleted. You can query the VPC connection but cannot perform other operations.
     *   * *   If a VPC connection cannot be found, it is deleted.
     *   * ## Prerequisites
     *   * Before you delete a VPC connection, make sure that the following requirements are met:
     *   * *   No associated forwarding correlation is established between the VPC connection and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](~~260944~~).
     *   * *   No route learning correlation is established between the VPC connection and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](~~260945~~).
     *   * *   The route table of the VPC does not contain routes that point to the VPC connection. For more information about how to delete routes from a VPC route table, see [DeleteRouteEntry](~~36013~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a custom route entry whose next hop is the network instance connection. For more information about how to delete custom routes from the route tables of an Enterprise Edition transit router, see [DeleteTransitRouterRouteEntry](~~261240~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a route that is generated from a prefix list and the next hop is the VPC connection. You can delete such routes by disassociating the route table from the prefix list. For more information, see [DeleteTransitRouterPrefixListAssociation](~~445486~~).
     *   *
     * @param DeleteTransitRouterVpcAttachmentRequest $request DeleteTransitRouterVpcAttachmentRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterVpcAttachmentResponse DeleteTransitRouterVpcAttachmentResponse
     */
    public function deleteTransitRouterVpcAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterVpcAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterVpcAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     *   * *   If a VPC connection is in the **Detaching** state, the VPC connection is being deleted. You can query the VPC connection but cannot perform other operations.
     *   * *   If a VPC connection cannot be found, it is deleted.
     *   * ## Prerequisites
     *   * Before you delete a VPC connection, make sure that the following requirements are met:
     *   * *   No associated forwarding correlation is established between the VPC connection and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](~~260944~~).
     *   * *   No route learning correlation is established between the VPC connection and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](~~260945~~).
     *   * *   The route table of the VPC does not contain routes that point to the VPC connection. For more information about how to delete routes from a VPC route table, see [DeleteRouteEntry](~~36013~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a custom route entry whose next hop is the network instance connection. For more information about how to delete custom routes from the route tables of an Enterprise Edition transit router, see [DeleteTransitRouterRouteEntry](~~261240~~).
     *   * *   The route tables of the Enterprise Edition transit router do not contain a route that is generated from a prefix list and the next hop is the VPC connection. You can delete such routes by disassociating the route table from the prefix list. For more information, see [DeleteTransitRouterPrefixListAssociation](~~445486~~).
     *   *
     * @param DeleteTransitRouterVpcAttachmentRequest $request DeleteTransitRouterVpcAttachmentRequest
     *
     * @return DeleteTransitRouterVpcAttachmentResponse DeleteTransitRouterVpcAttachmentResponse
     */
    public function deleteTransitRouterVpcAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterVpcAttachmentWithOptions($request, $runtime);
    }

    /**
     * Before you delete a VPN attachment, make sure that the following requirements are met:
     *   * *   No associated forwarding correlation is established between the VPN attachment and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](~~260944~~).
     *   * *   No route learning correlation is established between the VPn attachment and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](~~260945~~).
     *   * *   No route in the route table of the Enterprise Edition transit router points to the VPN attachment. For more information, see [DeleteTransitRouterRouteEntry](~~261240~~).
     *   *
     * @param DeleteTransitRouterVpnAttachmentRequest $request DeleteTransitRouterVpnAttachmentRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTransitRouterVpnAttachmentResponse DeleteTransitRouterVpnAttachmentResponse
     */
    public function deleteTransitRouterVpnAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTransitRouterVpnAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTransitRouterVpnAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you delete a VPN attachment, make sure that the following requirements are met:
     *   * *   No associated forwarding correlation is established between the VPN attachment and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](~~260944~~).
     *   * *   No route learning correlation is established between the VPn attachment and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](~~260945~~).
     *   * *   No route in the route table of the Enterprise Edition transit router points to the VPN attachment. For more information, see [DeleteTransitRouterRouteEntry](~~261240~~).
     *   *
     * @param DeleteTransitRouterVpnAttachmentRequest $request DeleteTransitRouterVpnAttachmentRequest
     *
     * @return DeleteTransitRouterVpnAttachmentResponse DeleteTransitRouterVpnAttachmentResponse
     */
    public function deleteTransitRouterVpnAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterVpnAttachmentWithOptions($request, $runtime);
    }

    /**
     * `RegisterTransitRouterMulticastGroupMembers` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of a multicast member.
     *   * *   If a multicast member is in the **Deregistering** state, the multicast member is being removed. In this case, you can query the multicast member but cannot perform other operations.
     *   * *   If a multicast member cannot be found, the multicast member is removed from the multicast group.``.
     *   *
     * @param DeregisterTransitRouterMulticastGroupMembersRequest $request DeregisterTransitRouterMulticastGroupMembersRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeregisterTransitRouterMulticastGroupMembersResponse DeregisterTransitRouterMulticastGroupMembersResponse
     */
    public function deregisterTransitRouterMulticastGroupMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->groupIpAddress)) {
            $query['GroupIpAddress'] = $request->groupIpAddress;
        }
        if (!Utils::isUnset($request->networkInterfaceIds)) {
            $query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->peerTransitRouterMulticastDomains)) {
            $query['PeerTransitRouterMulticastDomains'] = $request->peerTransitRouterMulticastDomains;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeregisterTransitRouterMulticastGroupMembers',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeregisterTransitRouterMulticastGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * `RegisterTransitRouterMulticastGroupMembers` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of a multicast member.
     *   * *   If a multicast member is in the **Deregistering** state, the multicast member is being removed. In this case, you can query the multicast member but cannot perform other operations.
     *   * *   If a multicast member cannot be found, the multicast member is removed from the multicast group.``.
     *   *
     * @param DeregisterTransitRouterMulticastGroupMembersRequest $request DeregisterTransitRouterMulticastGroupMembersRequest
     *
     * @return DeregisterTransitRouterMulticastGroupMembersResponse DeregisterTransitRouterMulticastGroupMembersResponse
     */
    public function deregisterTransitRouterMulticastGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterTransitRouterMulticastGroupMembersWithOptions($request, $runtime);
    }

    /**
     * `DeregisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of a multicast source.
     *   * *   If a multicast source is in the **Deregistering** state, the multicast source is being deleted. You can query the multicast source but cannot perform other operations.
     *   * *   If a multicast source cannot be found, the multicast source is deleted.
     *   *
     * @param DeregisterTransitRouterMulticastGroupSourcesRequest $request DeregisterTransitRouterMulticastGroupSourcesRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeregisterTransitRouterMulticastGroupSourcesResponse DeregisterTransitRouterMulticastGroupSourcesResponse
     */
    public function deregisterTransitRouterMulticastGroupSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->groupIpAddress)) {
            $query['GroupIpAddress'] = $request->groupIpAddress;
        }
        if (!Utils::isUnset($request->networkInterfaceIds)) {
            $query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeregisterTransitRouterMulticastGroupSources',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeregisterTransitRouterMulticastGroupSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * `DeregisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of a multicast source.
     *   * *   If a multicast source is in the **Deregistering** state, the multicast source is being deleted. You can query the multicast source but cannot perform other operations.
     *   * *   If a multicast source cannot be found, the multicast source is deleted.
     *   *
     * @param DeregisterTransitRouterMulticastGroupSourcesRequest $request DeregisterTransitRouterMulticastGroupSourcesRequest
     *
     * @return DeregisterTransitRouterMulticastGroupSourcesResponse DeregisterTransitRouterMulticastGroupSourcesResponse
     */
    public function deregisterTransitRouterMulticastGroupSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterTransitRouterMulticastGroupSourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenAttachedChildInstanceAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeCenAttachedChildInstanceAttributeResponse
     */
    public function describeCenAttachedChildInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenAttachedChildInstanceAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenAttachedChildInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenAttachedChildInstanceAttributeRequest $request
     *
     * @return DescribeCenAttachedChildInstanceAttributeResponse
     */
    public function describeCenAttachedChildInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenAttachedChildInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * The time when the network instance was attached to the CEN instance.
     *   * The time follows the ISO8601 standard in the YYYY-MM-DDThh:mmZ format. The time is displayed in UTC.
     *   *
     * @param DescribeCenAttachedChildInstancesRequest $request DescribeCenAttachedChildInstancesRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCenAttachedChildInstancesResponse DescribeCenAttachedChildInstancesResponse
     */
    public function describeCenAttachedChildInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenAttachedChildInstances',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenAttachedChildInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The time when the network instance was attached to the CEN instance.
     *   * The time follows the ISO8601 standard in the YYYY-MM-DDThh:mmZ format. The time is displayed in UTC.
     *   *
     * @param DescribeCenAttachedChildInstancesRequest $request DescribeCenAttachedChildInstancesRequest
     *
     * @return DescribeCenAttachedChildInstancesResponse DescribeCenAttachedChildInstancesResponse
     */
    public function describeCenAttachedChildInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenAttachedChildInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenBandwidthPackagesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCenBandwidthPackagesResponse
     */
    public function describeCenBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->includeReservationData)) {
            $query['IncludeReservationData'] = $request->includeReservationData;
        }
        if (!Utils::isUnset($request->isOrKey)) {
            $query['IsOrKey'] = $request->isOrKey;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenBandwidthPackages',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenBandwidthPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenBandwidthPackagesRequest $request
     *
     * @return DescribeCenBandwidthPackagesResponse
     */
    public function describeCenBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenChildInstanceRouteEntriesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeCenChildInstanceRouteEntriesResponse
     */
    public function describeCenChildInstanceRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceRouteTableId)) {
            $query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenChildInstanceRouteEntries',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenChildInstanceRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenChildInstanceRouteEntriesRequest $request
     *
     * @return DescribeCenChildInstanceRouteEntriesResponse
     */
    public function describeCenChildInstanceRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenChildInstanceRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenGeographicSpanRemainingBandwidthRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeCenGeographicSpanRemainingBandwidthResponse
     */
    public function describeCenGeographicSpanRemainingBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->geographicRegionAId)) {
            $query['GeographicRegionAId'] = $request->geographicRegionAId;
        }
        if (!Utils::isUnset($request->geographicRegionBId)) {
            $query['GeographicRegionBId'] = $request->geographicRegionBId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenGeographicSpanRemainingBandwidth',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenGeographicSpanRemainingBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenGeographicSpanRemainingBandwidthRequest $request
     *
     * @return DescribeCenGeographicSpanRemainingBandwidthResponse
     */
    public function describeCenGeographicSpanRemainingBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenGeographicSpanRemainingBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenGeographicSpansRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCenGeographicSpansResponse
     */
    public function describeCenGeographicSpansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->geographicSpanId)) {
            $query['GeographicSpanId'] = $request->geographicSpanId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenGeographicSpans',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenGeographicSpansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenGeographicSpansRequest $request
     *
     * @return DescribeCenGeographicSpansResponse
     */
    public function describeCenGeographicSpans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenGeographicSpansWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenInterRegionBandwidthLimitsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeCenInterRegionBandwidthLimitsResponse
     */
    public function describeCenInterRegionBandwidthLimitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trRegionId)) {
            $query['TrRegionId'] = $request->trRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenInterRegionBandwidthLimits',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenInterRegionBandwidthLimitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenInterRegionBandwidthLimitsRequest $request
     *
     * @return DescribeCenInterRegionBandwidthLimitsResponse
     */
    public function describeCenInterRegionBandwidthLimits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenInterRegionBandwidthLimitsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenPrivateZoneRoutesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCenPrivateZoneRoutesResponse
     */
    public function describeCenPrivateZoneRoutesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessRegionId)) {
            $query['AccessRegionId'] = $request->accessRegionId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->hostRegionId)) {
            $query['HostRegionId'] = $request->hostRegionId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenPrivateZoneRoutes',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenPrivateZoneRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenPrivateZoneRoutesRequest $request
     *
     * @return DescribeCenPrivateZoneRoutesResponse
     */
    public function describeCenPrivateZoneRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenPrivateZoneRoutesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenRegionDomainRouteEntriesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCenRegionDomainRouteEntriesResponse
     */
    public function describeCenRegionDomainRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenRegionId)) {
            $query['CenRegionId'] = $request->cenRegionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenRegionDomainRouteEntries',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenRegionDomainRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenRegionDomainRouteEntriesRequest $request
     *
     * @return DescribeCenRegionDomainRouteEntriesResponse
     */
    public function describeCenRegionDomainRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenRegionDomainRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenRouteMapsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCenRouteMapsResponse
     */
    public function describeCenRouteMapsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenRegionId)) {
            $query['CenRegionId'] = $request->cenRegionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeMapId)) {
            $query['RouteMapId'] = $request->routeMapId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        if (!Utils::isUnset($request->transmitDirection)) {
            $query['TransmitDirection'] = $request->transmitDirection;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenRouteMaps',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenRouteMapsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenRouteMapsRequest $request
     *
     * @return DescribeCenRouteMapsResponse
     */
    public function describeCenRouteMaps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenRouteMapsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenVbrHealthCheckRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCenVbrHealthCheckResponse
     */
    public function describeCenVbrHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vbrInstanceId)) {
            $query['VbrInstanceId'] = $request->vbrInstanceId;
        }
        if (!Utils::isUnset($request->vbrInstanceOwnerId)) {
            $query['VbrInstanceOwnerId'] = $request->vbrInstanceOwnerId;
        }
        if (!Utils::isUnset($request->vbrInstanceRegionId)) {
            $query['VbrInstanceRegionId'] = $request->vbrInstanceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCenVbrHealthCheck',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCenVbrHealthCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCenVbrHealthCheckRequest $request
     *
     * @return DescribeCenVbrHealthCheckResponse
     */
    public function describeCenVbrHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenVbrHealthCheckWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCens',
            'version'     => '2017-09-12',
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
     * The regions that support CEN vary based on the network instance type. To query the regions where you can attach a specified type of network instance to CEN, set the `ProductType` parameter. If you do not set the `ProductType` parameter, the system queries all regions in which you can attach network instances to CEN, regardless of the network instance type.
     *   *
     * @param DescribeChildInstanceRegionsRequest $request DescribeChildInstanceRegionsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChildInstanceRegionsResponse DescribeChildInstanceRegionsResponse
     */
    public function describeChildInstanceRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChildInstanceRegions',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChildInstanceRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The regions that support CEN vary based on the network instance type. To query the regions where you can attach a specified type of network instance to CEN, set the `ProductType` parameter. If you do not set the `ProductType` parameter, the system queries all regions in which you can attach network instances to CEN, regardless of the network instance type.
     *   *
     * @param DescribeChildInstanceRegionsRequest $request DescribeChildInstanceRegionsRequest
     *
     * @return DescribeChildInstanceRegionsResponse DescribeChildInstanceRegionsResponse
     */
    public function describeChildInstanceRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChildInstanceRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowlogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFlowlogsResponse
     */
    public function describeFlowlogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flowLogId)) {
            $query['FlowLogId'] = $request->flowLogId;
        }
        if (!Utils::isUnset($request->flowLogName)) {
            $query['FlowLogName'] = $request->flowLogName;
        }
        if (!Utils::isUnset($request->logStoreName)) {
            $query['LogStoreName'] = $request->logStoreName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowlogs',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowlogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowlogsRequest $request
     *
     * @return DescribeFlowlogsResponse
     */
    public function describeFlowlogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowlogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGeographicRegionMembershipRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeGeographicRegionMembershipResponse
     */
    public function describeGeographicRegionMembershipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->geographicRegionId)) {
            $query['GeographicRegionId'] = $request->geographicRegionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGeographicRegionMembership',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGeographicRegionMembershipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGeographicRegionMembershipRequest $request
     *
     * @return DescribeGeographicRegionMembershipResponse
     */
    public function describeGeographicRegionMembership($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGeographicRegionMembershipWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGrantRulesToCenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGrantRulesToCenResponse
     */
    public function describeGrantRulesToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceOwnerId)) {
            $query['ChildInstanceOwnerId'] = $request->childInstanceOwnerId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGrantRulesToCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGrantRulesToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGrantRulesToCenRequest $request
     *
     * @return DescribeGrantRulesToCenResponse
     */
    public function describeGrantRulesToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGrantRulesToCenWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGrantRulesToResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeGrantRulesToResourceResponse
     */
    public function describeGrantRulesToResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGrantRulesToResource',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGrantRulesToResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGrantRulesToResourceRequest $request
     *
     * @return DescribeGrantRulesToResourceResponse
     */
    public function describeGrantRulesToResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGrantRulesToResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribePublishedRouteEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePublishedRouteEntriesResponse
     */
    public function describePublishedRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceRouteTableId)) {
            $query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePublishedRouteEntries',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePublishedRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePublishedRouteEntriesRequest $request
     *
     * @return DescribePublishedRouteEntriesResponse
     */
    public function describePublishedRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePublishedRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteConflictRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRouteConflictResponse
     */
    public function describeRouteConflictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceRouteTableId)) {
            $query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRouteConflict',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRouteConflictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRouteConflictRequest $request
     *
     * @return DescribeRouteConflictResponse
     */
    public function describeRouteConflict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteConflictWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteServicesInCenRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRouteServicesInCenResponse
     */
    public function describeRouteServicesInCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessRegionId)) {
            $query['AccessRegionId'] = $request->accessRegionId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->hostRegionId)) {
            $query['HostRegionId'] = $request->hostRegionId;
        }
        if (!Utils::isUnset($request->hostVpcId)) {
            $query['HostVpcId'] = $request->hostVpcId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRouteServicesInCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRouteServicesInCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRouteServicesInCenRequest $request
     *
     * @return DescribeRouteServicesInCenResponse
     */
    public function describeRouteServicesInCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteServicesInCenWithOptions($request, $runtime);
    }

    /**
     * You can set the **TransitRouteTableId** and **TransitRouteTableAggregationCidr** parameters to specify the aggregate routes that you want to query. If you set only the **TransitRouteTableId** parameter, all aggregate routes in the specified route table are queried.
     *   *
     * @param DescribeTransitRouteTableAggregationRequest $request DescribeTransitRouteTableAggregationRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTransitRouteTableAggregationResponse DescribeTransitRouteTableAggregationResponse
     */
    public function describeTransitRouteTableAggregationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouteTableAggregationCidr)) {
            $query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }
        if (!Utils::isUnset($request->transitRouteTableId)) {
            $query['TransitRouteTableId'] = $request->transitRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransitRouteTableAggregation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can set the **TransitRouteTableId** and **TransitRouteTableAggregationCidr** parameters to specify the aggregate routes that you want to query. If you set only the **TransitRouteTableId** parameter, all aggregate routes in the specified route table are queried.
     *   *
     * @param DescribeTransitRouteTableAggregationRequest $request DescribeTransitRouteTableAggregationRequest
     *
     * @return DescribeTransitRouteTableAggregationResponse DescribeTransitRouteTableAggregationResponse
     */
    public function describeTransitRouteTableAggregation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransitRouteTableAggregationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTransitRouteTableAggregationDetailRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeTransitRouteTableAggregationDetailResponse
     */
    public function describeTransitRouteTableAggregationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouteTableAggregationCidr)) {
            $query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }
        if (!Utils::isUnset($request->transitRouteTableId)) {
            $query['TransitRouteTableId'] = $request->transitRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransitRouteTableAggregationDetail',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransitRouteTableAggregationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTransitRouteTableAggregationDetailRequest $request
     *
     * @return DescribeTransitRouteTableAggregationDetailResponse
     */
    public function describeTransitRouteTableAggregationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransitRouteTableAggregationDetailWithOptions($request, $runtime);
    }

    /**
     * @param DetachCenChildInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetachCenChildInstanceResponse
     */
    public function detachCenChildInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceOwnerId)) {
            $query['ChildInstanceOwnerId'] = $request->childInstanceOwnerId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachCenChildInstance',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachCenChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachCenChildInstanceRequest $request
     *
     * @return DetachCenChildInstanceResponse
     */
    public function detachCenChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachCenChildInstanceWithOptions($request, $runtime);
    }

    /**
     * **DisableCenVbrHealthCheck** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the status of health check configurations. If the health check configurations cannot be found, the health check configurations are deleted.
     *   *
     * @param DisableCenVbrHealthCheckRequest $request DisableCenVbrHealthCheckRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableCenVbrHealthCheckResponse DisableCenVbrHealthCheckResponse
     */
    public function disableCenVbrHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vbrInstanceId)) {
            $query['VbrInstanceId'] = $request->vbrInstanceId;
        }
        if (!Utils::isUnset($request->vbrInstanceOwnerId)) {
            $query['VbrInstanceOwnerId'] = $request->vbrInstanceOwnerId;
        }
        if (!Utils::isUnset($request->vbrInstanceRegionId)) {
            $query['VbrInstanceRegionId'] = $request->vbrInstanceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableCenVbrHealthCheck',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableCenVbrHealthCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DisableCenVbrHealthCheck** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the status of health check configurations. If the health check configurations cannot be found, the health check configurations are deleted.
     *   *
     * @param DisableCenVbrHealthCheckRequest $request DisableCenVbrHealthCheckRequest
     *
     * @return DisableCenVbrHealthCheckResponse DisableCenVbrHealthCheckResponse
     */
    public function disableCenVbrHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCenVbrHealthCheckWithOptions($request, $runtime);
    }

    /**
     * **DisableTransitRouterRouteTablePropagation** is an synchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the status of a route learning correlation.
     *   * *   If a route learning correlation is in the **Disabling** state, the route learning correlation is being deleted. You can query the route learning correlation but cannot perform other operations.
     *   * *   If a route learning correlation cannot be found, the route learning correlation is deleted.
     *   *
     * @param DisableTransitRouterRouteTablePropagationRequest $request DisableTransitRouterRouteTablePropagationRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableTransitRouterRouteTablePropagationResponse DisableTransitRouterRouteTablePropagationResponse
     */
    public function disableTransitRouterRouteTablePropagationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableTransitRouterRouteTablePropagation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableTransitRouterRouteTablePropagationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DisableTransitRouterRouteTablePropagation** is an synchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the status of a route learning correlation.
     *   * *   If a route learning correlation is in the **Disabling** state, the route learning correlation is being deleted. You can query the route learning correlation but cannot perform other operations.
     *   * *   If a route learning correlation cannot be found, the route learning correlation is deleted.
     *   *
     * @param DisableTransitRouterRouteTablePropagationRequest $request DisableTransitRouterRouteTablePropagationRequest
     *
     * @return DisableTransitRouterRouteTablePropagationResponse DisableTransitRouterRouteTablePropagationResponse
     */
    public function disableTransitRouterRouteTablePropagation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableTransitRouterRouteTablePropagationWithOptions($request, $runtime);
    }

    /**
     * @param DisassociateTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DisassociateTransitRouterMulticastDomainResponse
     */
    public function disassociateTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisassociateTransitRouterMulticastDomain',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisassociateTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisassociateTransitRouterMulticastDomainRequest $request
     *
     * @return DisassociateTransitRouterMulticastDomainResponse
     */
    public function disassociateTransitRouterMulticastDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateTransitRouterMulticastDomainWithOptions($request, $runtime);
    }

    /**
     * **DissociateTransitRouterAttachmentFromRouteTable** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTableAssociations** operation to query an associated forwarding correlation between a network instance connection and a route table.
     *   * *   If an associated forwarding correlation is in the **Dissociating** state, the associated forwarding correlation is being deleted. You can query the associated forwarding correlation but cannot perform other operations.
     *   * *   If an associated forwarding correlation cannot be found, the associated forwarding correlation is deleted.
     *   *
     * @param DissociateTransitRouterAttachmentFromRouteTableRequest $request DissociateTransitRouterAttachmentFromRouteTableRequest
     * @param RuntimeOptions                                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DissociateTransitRouterAttachmentFromRouteTableResponse DissociateTransitRouterAttachmentFromRouteTableResponse
     */
    public function dissociateTransitRouterAttachmentFromRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateTransitRouterAttachmentFromRouteTable',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateTransitRouterAttachmentFromRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DissociateTransitRouterAttachmentFromRouteTable** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTableAssociations** operation to query an associated forwarding correlation between a network instance connection and a route table.
     *   * *   If an associated forwarding correlation is in the **Dissociating** state, the associated forwarding correlation is being deleted. You can query the associated forwarding correlation but cannot perform other operations.
     *   * *   If an associated forwarding correlation cannot be found, the associated forwarding correlation is deleted.
     *   *
     * @param DissociateTransitRouterAttachmentFromRouteTableRequest $request DissociateTransitRouterAttachmentFromRouteTableRequest
     *
     * @return DissociateTransitRouterAttachmentFromRouteTableResponse DissociateTransitRouterAttachmentFromRouteTableResponse
     */
    public function dissociateTransitRouterAttachmentFromRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateTransitRouterAttachmentFromRouteTableWithOptions($request, $runtime);
    }

    /**
     * You can enable the health check feature for a VBR to monitor the Express Connect circuit between your data center and Alibaba Cloud. This helps you detect connection issues in a timely manner.
     *   * Before you use the health check feature, take note of the following information:
     *   * *   If your VBR uses static routing, you must add a static route for the data center that is connected to the VBR after you configure the health check feature. Set the destination CIDR block to the source IP address of health checks, set the mask length to 32, and set the next hop to the IP address of the VBR on the Alibaba Cloud side.
     *   * *   If your VBR uses dynamic Border Gateway Protocol (BGP) routing, you do not need to add routes for the data center.
     *   * *   **EnableCenVbrHealthCheck** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the status of health check configurations. If health check configurations are returned, health check is configured or modified.
     *   *
     * @param EnableCenVbrHealthCheckRequest $request EnableCenVbrHealthCheckRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableCenVbrHealthCheckResponse EnableCenVbrHealthCheckResponse
     */
    public function enableCenVbrHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckOnly)) {
            $query['HealthCheckOnly'] = $request->healthCheckOnly;
        }
        if (!Utils::isUnset($request->healthCheckSourceIp)) {
            $query['HealthCheckSourceIp'] = $request->healthCheckSourceIp;
        }
        if (!Utils::isUnset($request->healthCheckTargetIp)) {
            $query['HealthCheckTargetIp'] = $request->healthCheckTargetIp;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vbrInstanceId)) {
            $query['VbrInstanceId'] = $request->vbrInstanceId;
        }
        if (!Utils::isUnset($request->vbrInstanceOwnerId)) {
            $query['VbrInstanceOwnerId'] = $request->vbrInstanceOwnerId;
        }
        if (!Utils::isUnset($request->vbrInstanceRegionId)) {
            $query['VbrInstanceRegionId'] = $request->vbrInstanceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableCenVbrHealthCheck',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableCenVbrHealthCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can enable the health check feature for a VBR to monitor the Express Connect circuit between your data center and Alibaba Cloud. This helps you detect connection issues in a timely manner.
     *   * Before you use the health check feature, take note of the following information:
     *   * *   If your VBR uses static routing, you must add a static route for the data center that is connected to the VBR after you configure the health check feature. Set the destination CIDR block to the source IP address of health checks, set the mask length to 32, and set the next hop to the IP address of the VBR on the Alibaba Cloud side.
     *   * *   If your VBR uses dynamic Border Gateway Protocol (BGP) routing, you do not need to add routes for the data center.
     *   * *   **EnableCenVbrHealthCheck** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the status of health check configurations. If health check configurations are returned, health check is configured or modified.
     *   *
     * @param EnableCenVbrHealthCheckRequest $request EnableCenVbrHealthCheckRequest
     *
     * @return EnableCenVbrHealthCheckResponse EnableCenVbrHealthCheckResponse
     */
    public function enableCenVbrHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCenVbrHealthCheckWithOptions($request, $runtime);
    }

    /**
     * After you establish a network instance connection on a transit router, you can create a route learning correlation for the network instance connection. Then, the routes of the connected network instance are automatically advertised to the route table of the transit router. Before you begin, we recommend that you take note of the following rules:
     *   * *   You can create route learning correlations only on Enterprise Edition transit routers. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](~~181681~~)
     *   * *   **EnableTransitRouterRouteTablePropagation** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the route learning status between a network instance connection and a route table.
     *   *     *   **Enabling** indicates that a route learning correlation is being created between the network instance connection and route table. You can query the route learning correlation but cannot perform other operations.
     *   *     *   **Active** indicates that the route learning correlation is created between the network instance connection and route table.
     *   *
     * @param EnableTransitRouterRouteTablePropagationRequest $request EnableTransitRouterRouteTablePropagationRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableTransitRouterRouteTablePropagationResponse EnableTransitRouterRouteTablePropagationResponse
     */
    public function enableTransitRouterRouteTablePropagationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableTransitRouterRouteTablePropagation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableTransitRouterRouteTablePropagationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you establish a network instance connection on a transit router, you can create a route learning correlation for the network instance connection. Then, the routes of the connected network instance are automatically advertised to the route table of the transit router. Before you begin, we recommend that you take note of the following rules:
     *   * *   You can create route learning correlations only on Enterprise Edition transit routers. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](~~181681~~)
     *   * *   **EnableTransitRouterRouteTablePropagation** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the route learning status between a network instance connection and a route table.
     *   *     *   **Enabling** indicates that a route learning correlation is being created between the network instance connection and route table. You can query the route learning correlation but cannot perform other operations.
     *   *     *   **Active** indicates that the route learning correlation is created between the network instance connection and route table.
     *   *
     * @param EnableTransitRouterRouteTablePropagationRequest $request EnableTransitRouterRouteTablePropagationRequest
     *
     * @return EnableTransitRouterRouteTablePropagationResponse EnableTransitRouterRouteTablePropagationResponse
     */
    public function enableTransitRouterRouteTablePropagation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableTransitRouterRouteTablePropagationWithOptions($request, $runtime);
    }

    /**
     * *   `GrantInstanceToTransitRouter` grants transit routers the permissions to connect only to virtual private clouds (VPCs), virtual border routers (VBRs), and IPsec-VPN connections that belong to another Alibaba Cloud account.
     *   *     If you want to grant transit routers permissions to connect to Cloud Connect Network (CCN) instances, call the [GrantInstanceToCbn](~~126141~~) operation.
     *   * *   Before you call `GrantInstanceToTransitRouter`, take note of the billing rules, permission limits, and prerequisites on permission management of transit routers. For more information, see [Acquire permissions to connect to a network instance that belongs to another account](~~181553~~).
     *   *
     * @param GrantInstanceToTransitRouterRequest $request GrantInstanceToTransitRouterRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantInstanceToTransitRouterResponse GrantInstanceToTransitRouterResponse
     */
    public function grantInstanceToTransitRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantInstanceToTransitRouter',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantInstanceToTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   `GrantInstanceToTransitRouter` grants transit routers the permissions to connect only to virtual private clouds (VPCs), virtual border routers (VBRs), and IPsec-VPN connections that belong to another Alibaba Cloud account.
     *   *     If you want to grant transit routers permissions to connect to Cloud Connect Network (CCN) instances, call the [GrantInstanceToCbn](~~126141~~) operation.
     *   * *   Before you call `GrantInstanceToTransitRouter`, take note of the billing rules, permission limits, and prerequisites on permission management of transit routers. For more information, see [Acquire permissions to connect to a network instance that belongs to another account](~~181553~~).
     *   *
     * @param GrantInstanceToTransitRouterRequest $request GrantInstanceToTransitRouterRequest
     *
     * @return GrantInstanceToTransitRouterResponse GrantInstanceToTransitRouterResponse
     */
    public function grantInstanceToTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantInstanceToTransitRouterWithOptions($request, $runtime);
    }

    /**
     * @param ListCenChildInstanceRouteEntriesToAttachmentRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return ListCenChildInstanceRouteEntriesToAttachmentResponse
     */
    public function listCenChildInstanceRouteEntriesToAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceRouteTableId)) {
            $query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeFilter)) {
            $query['RouteFilter'] = $request->routeFilter;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCenChildInstanceRouteEntriesToAttachment',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCenChildInstanceRouteEntriesToAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCenChildInstanceRouteEntriesToAttachmentRequest $request
     *
     * @return ListCenChildInstanceRouteEntriesToAttachmentResponse
     */
    public function listCenChildInstanceRouteEntriesToAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCenChildInstanceRouteEntriesToAttachmentWithOptions($request, $runtime);
    }

    /**
     * When you call the **ListCenInterRegionTrafficQosPolicies** operation, take note of the following information:
     *   * *   If you do not set the **TrafficQosPolicyId** parameter, the system returns information about QoS policies based on the values of the **TransitRouterId**, **TransitRouterAttachmentId**, **TrafficQosPolicyName**, and **TrafficQosPolicyDescription** parameters, but does not return information about the queues in the QoS policies. The **TrafficQosQueues** parameter is not included in the response.
     *   * *   If you specify a QoS policy ID in the **TrafficMarkingPolicyId** parameter, the system returns the information about the QoS policy and the queues. The **TrafficQosQueues** parameter is included in the response.
     *   *     If the **TrafficQosQueues** parameter contains an empty array, it indicates that the QoS policy contains only the default queue.
     *   *
     * @param ListCenInterRegionTrafficQosPoliciesRequest $request ListCenInterRegionTrafficQosPoliciesRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCenInterRegionTrafficQosPoliciesResponse ListCenInterRegionTrafficQosPoliciesResponse
     */
    public function listCenInterRegionTrafficQosPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficQosPolicyDescription)) {
            $query['TrafficQosPolicyDescription'] = $request->trafficQosPolicyDescription;
        }
        if (!Utils::isUnset($request->trafficQosPolicyId)) {
            $query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }
        if (!Utils::isUnset($request->trafficQosPolicyName)) {
            $query['TrafficQosPolicyName'] = $request->trafficQosPolicyName;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCenInterRegionTrafficQosPolicies',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCenInterRegionTrafficQosPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call the **ListCenInterRegionTrafficQosPolicies** operation, take note of the following information:
     *   * *   If you do not set the **TrafficQosPolicyId** parameter, the system returns information about QoS policies based on the values of the **TransitRouterId**, **TransitRouterAttachmentId**, **TrafficQosPolicyName**, and **TrafficQosPolicyDescription** parameters, but does not return information about the queues in the QoS policies. The **TrafficQosQueues** parameter is not included in the response.
     *   * *   If you specify a QoS policy ID in the **TrafficMarkingPolicyId** parameter, the system returns the information about the QoS policy and the queues. The **TrafficQosQueues** parameter is included in the response.
     *   *     If the **TrafficQosQueues** parameter contains an empty array, it indicates that the QoS policy contains only the default queue.
     *   *
     * @param ListCenInterRegionTrafficQosPoliciesRequest $request ListCenInterRegionTrafficQosPoliciesRequest
     *
     * @return ListCenInterRegionTrafficQosPoliciesResponse ListCenInterRegionTrafficQosPoliciesResponse
     */
    public function listCenInterRegionTrafficQosPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCenInterRegionTrafficQosPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param ListCenInterRegionTrafficQosQueuesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListCenInterRegionTrafficQosQueuesResponse
     */
    public function listCenInterRegionTrafficQosQueuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficQosPolicyId)) {
            $query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }
        if (!Utils::isUnset($request->trafficQosQueueDescription)) {
            $query['TrafficQosQueueDescription'] = $request->trafficQosQueueDescription;
        }
        if (!Utils::isUnset($request->trafficQosQueueId)) {
            $query['TrafficQosQueueId'] = $request->trafficQosQueueId;
        }
        if (!Utils::isUnset($request->trafficQosQueueName)) {
            $query['TrafficQosQueueName'] = $request->trafficQosQueueName;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCenInterRegionTrafficQosQueues',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCenInterRegionTrafficQosQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCenInterRegionTrafficQosQueuesRequest $request
     *
     * @return ListCenInterRegionTrafficQosQueuesResponse
     */
    public function listCenInterRegionTrafficQosQueues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCenInterRegionTrafficQosQueuesWithOptions($request, $runtime);
    }

    /**
     * Before you call `ListGrantVSwitchEnis`, make sure that the VPC is attached to a Cloud Enterprise Network (CEN) instance. For more information, see [CreateTransitRouterVpcAttachment](~~468237~~).
     *   *
     * @param ListGrantVSwitchEnisRequest $request ListGrantVSwitchEnisRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGrantVSwitchEnisResponse ListGrantVSwitchEnisResponse
     */
    public function listGrantVSwitchEnisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->networkInterfaceName)) {
            $query['NetworkInterfaceName'] = $request->networkInterfaceName;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->primaryIpAddress)) {
            $query['PrimaryIpAddress'] = $request->primaryIpAddress;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGrantVSwitchEnis',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGrantVSwitchEnisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call `ListGrantVSwitchEnis`, make sure that the VPC is attached to a Cloud Enterprise Network (CEN) instance. For more information, see [CreateTransitRouterVpcAttachment](~~468237~~).
     *   *
     * @param ListGrantVSwitchEnisRequest $request ListGrantVSwitchEnisRequest
     *
     * @return ListGrantVSwitchEnisResponse ListGrantVSwitchEnisResponse
     */
    public function listGrantVSwitchEnis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGrantVSwitchEnisWithOptions($request, $runtime);
    }

    /**
     * Before you call the `ListGrantVSwitchesToCen` operation, make sure that the following requirements are met:
     *   * *   The permissions on the VPC are granted to the CEN instance. For more information, see [GrantInstanceToCen](~~126224~~).
     *   * *   The VPC is attached to the CEN instance.
     *   *     *   For more information about how to connect an Enterprise Edition transit router to a VPC, see [CreateTransitRouterVpcAttachment](~~261358~~).
     *   *     *   For more information about how to connect a Basic Edition transit router to a VPC, see [AttachCenChildInstance](~~65902~~).
     *   *
     * @param ListGrantVSwitchesToCenRequest $request ListGrantVSwitchesToCenRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGrantVSwitchesToCenResponse ListGrantVSwitchesToCenResponse
     */
    public function listGrantVSwitchesToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGrantVSwitchesToCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGrantVSwitchesToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the `ListGrantVSwitchesToCen` operation, make sure that the following requirements are met:
     *   * *   The permissions on the VPC are granted to the CEN instance. For more information, see [GrantInstanceToCen](~~126224~~).
     *   * *   The VPC is attached to the CEN instance.
     *   *     *   For more information about how to connect an Enterprise Edition transit router to a VPC, see [CreateTransitRouterVpcAttachment](~~261358~~).
     *   *     *   For more information about how to connect a Basic Edition transit router to a VPC, see [AttachCenChildInstance](~~65902~~).
     *   *
     * @param ListGrantVSwitchesToCenRequest $request ListGrantVSwitchesToCenRequest
     *
     * @return ListGrantVSwitchesToCenResponse ListGrantVSwitchesToCenResponse
     */
    public function listGrantVSwitchesToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGrantVSwitchesToCenWithOptions($request, $runtime);
    }

    /**
     * To call this operation, you must set at least one of **ResourceId.N** and **Tag.N.Key**.
     *   * *   If you set only **ResourceId.N**, the tags that are added to the specified CEN instances are returned.
     *   * *   If you set only **Tag.N.Key**, the CEN instances that have the specified tags are returned.
     *   * *   If you set both **ResourceId.N** and **Tag.N.Key**, the specified tags that are added to the specified CEN instances are returned.
     *   *     *   Make sure that the CEN instance specified by **ResourceId.N** has the tag specified by **Tag.N.Key**. Otherwise, the response returns null.
     *   *     *   If multiple tag keys are specified, the logical operator among these tag keys is **AND**.
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
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version'     => '2017-09-12',
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
     * To call this operation, you must set at least one of **ResourceId.N** and **Tag.N.Key**.
     *   * *   If you set only **ResourceId.N**, the tags that are added to the specified CEN instances are returned.
     *   * *   If you set only **Tag.N.Key**, the CEN instances that have the specified tags are returned.
     *   * *   If you set both **ResourceId.N** and **Tag.N.Key**, the specified tags that are added to the specified CEN instances are returned.
     *   *     *   Make sure that the CEN instance specified by **ResourceId.N** has the tag specified by **Tag.N.Key**. Otherwise, the response returns null.
     *   *     *   If multiple tag keys are specified, the logical operator among these tag keys is **AND**.
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
     * @param ListTrafficMarkingPoliciesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListTrafficMarkingPoliciesResponse
     */
    public function listTrafficMarkingPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyDescription)) {
            $query['TrafficMarkingPolicyDescription'] = $request->trafficMarkingPolicyDescription;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyId)) {
            $query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyName)) {
            $query['TrafficMarkingPolicyName'] = $request->trafficMarkingPolicyName;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrafficMarkingPolicies',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrafficMarkingPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrafficMarkingPoliciesRequest $request
     *
     * @return ListTrafficMarkingPoliciesResponse
     */
    public function listTrafficMarkingPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrafficMarkingPoliciesWithOptions($request, $runtime);
    }

    /**
     * *   You can call the **ListTransitRouterAvailableResource** operation to query the zones that support Enterprise Edition transit routers in a specified region.
     *   *     *   If you do not set **SupportMulticast** to **true**, general-purpose zones that support Enterprise Edition transit routers are queried.
     *   *     *   If you set **SupportMulticast** to **true**, zones in which Enterprise Edition transit routers support multicast are queried.
     *   * *   On May 31, 2022, VPC-connected Enterprise Edition transit routers were optimized. Optimized Enterprise Edition transit routers do not require you to specify the primary and secondary zones when you connect VPCs to the Enterprise Edition transit routers. You can specify one or more zones.
     *   *     *   If your Enterprise Edition transit router has not been optimized, you must specify the primary and secondary zones when you connect a VPC to your Enterprise Edition transit router. After you call **ListTransitRouterAvailableResource**, you can call **MasterZones** and **SlaveZones** to query the primary and secondary zones.
     *   *     *   If your Enterprise Edition transit router has been optimized, you can specify a zone as needed when you connect a VPC to your Enterprise Edition transit router. After you call **ListTransitRouterAvailableResource**, you can call **AvailableZones** to query the zones.
     *   * For more information about the optimization, see [Announcement: Optimization on VPC-connected Enterprise Edition transit routers](~~434191~~).
     *   *
     * @param ListTransitRouterAvailableResourceRequest $request ListTransitRouterAvailableResourceRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRouterAvailableResourceResponse ListTransitRouterAvailableResourceResponse
     */
    public function listTransitRouterAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->supportMulticast)) {
            $query['SupportMulticast'] = $request->supportMulticast;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterAvailableResource',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call the **ListTransitRouterAvailableResource** operation to query the zones that support Enterprise Edition transit routers in a specified region.
     *   *     *   If you do not set **SupportMulticast** to **true**, general-purpose zones that support Enterprise Edition transit routers are queried.
     *   *     *   If you set **SupportMulticast** to **true**, zones in which Enterprise Edition transit routers support multicast are queried.
     *   * *   On May 31, 2022, VPC-connected Enterprise Edition transit routers were optimized. Optimized Enterprise Edition transit routers do not require you to specify the primary and secondary zones when you connect VPCs to the Enterprise Edition transit routers. You can specify one or more zones.
     *   *     *   If your Enterprise Edition transit router has not been optimized, you must specify the primary and secondary zones when you connect a VPC to your Enterprise Edition transit router. After you call **ListTransitRouterAvailableResource**, you can call **MasterZones** and **SlaveZones** to query the primary and secondary zones.
     *   *     *   If your Enterprise Edition transit router has been optimized, you can specify a zone as needed when you connect a VPC to your Enterprise Edition transit router. After you call **ListTransitRouterAvailableResource**, you can call **AvailableZones** to query the zones.
     *   * For more information about the optimization, see [Announcement: Optimization on VPC-connected Enterprise Edition transit routers](~~434191~~).
     *   *
     * @param ListTransitRouterAvailableResourceRequest $request ListTransitRouterAvailableResourceRequest
     *
     * @return ListTransitRouterAvailableResourceResponse ListTransitRouterAvailableResourceResponse
     */
    public function listTransitRouterAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param ListTransitRouterCidrRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTransitRouterCidrResponse
     */
    public function listTransitRouterCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->transitRouterCidrId)) {
            $query['TransitRouterCidrId'] = $request->transitRouterCidrId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterCidr',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTransitRouterCidrRequest $request
     *
     * @return ListTransitRouterCidrResponse
     */
    public function listTransitRouterCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterCidrWithOptions($request, $runtime);
    }

    /**
     * @param ListTransitRouterCidrAllocationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListTransitRouterCidrAllocationResponse
     */
    public function listTransitRouterCidrAllocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachmentId)) {
            $query['AttachmentId'] = $request->attachmentId;
        }
        if (!Utils::isUnset($request->attachmentName)) {
            $query['AttachmentName'] = $request->attachmentName;
        }
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedOwnerId)) {
            $query['DedicatedOwnerId'] = $request->dedicatedOwnerId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->transitRouterCidrId)) {
            $query['TransitRouterCidrId'] = $request->transitRouterCidrId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterCidrAllocation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterCidrAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTransitRouterCidrAllocationRequest $request
     *
     * @return ListTransitRouterCidrAllocationResponse
     */
    public function listTransitRouterCidrAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterCidrAllocationWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * Multicast domains can be associated only with vSwitches that are in VPCs. You can call the **ListTransitRouterMulticastDomainAssociations** operation to query whether vSwitches in VPCs are associated with a specified multicast domain.
     *   *
     * @param ListTransitRouterMulticastDomainAssociationsRequest $request ListTransitRouterMulticastDomainAssociationsRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRouterMulticastDomainAssociationsResponse ListTransitRouterMulticastDomainAssociationsResponse
     */
    public function listTransitRouterMulticastDomainAssociationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterMulticastDomainAssociations',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterMulticastDomainAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * Multicast domains can be associated only with vSwitches that are in VPCs. You can call the **ListTransitRouterMulticastDomainAssociations** operation to query whether vSwitches in VPCs are associated with a specified multicast domain.
     *   *
     * @param ListTransitRouterMulticastDomainAssociationsRequest $request ListTransitRouterMulticastDomainAssociationsRequest
     *
     * @return ListTransitRouterMulticastDomainAssociationsResponse ListTransitRouterMulticastDomainAssociationsResponse
     */
    public function listTransitRouterMulticastDomainAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterMulticastDomainAssociationsWithOptions($request, $runtime);
    }

    /**
     * @param ListTransitRouterMulticastDomainVSwitchesRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return ListTransitRouterMulticastDomainVSwitchesResponse
     */
    public function listTransitRouterMulticastDomainVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterMulticastDomainVSwitches',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterMulticastDomainVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTransitRouterMulticastDomainVSwitchesRequest $request
     *
     * @return ListTransitRouterMulticastDomainVSwitchesResponse
     */
    public function listTransitRouterMulticastDomainVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterMulticastDomainVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param ListTransitRouterMulticastDomainsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListTransitRouterMulticastDomainsResponse
     */
    public function listTransitRouterMulticastDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterMulticastDomains',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterMulticastDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTransitRouterMulticastDomainsRequest $request
     *
     * @return ListTransitRouterMulticastDomainsResponse
     */
    public function listTransitRouterMulticastDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterMulticastDomainsWithOptions($request, $runtime);
    }

    /**
     * You can call the `ListTransitRouterMulticastGroups` operation to query the multicast sources and members in a multicast domain. Multicast sources and members are also known as multicast resources.
     *   * *   If you set **GroupIpAddress**, the system queries multicast resources in the multicast domain by multicast group.
     *   * *   If you set **VSwitchIds**, the system queries multicast resources in the multicast domain by vSwitch.
     *   * *   If you set **PeerTransitRouterMulticastDomains**, the system queries multicast resources that are also deployed in a different region.
     *   * *   If you set **ResourceType**, the system queries the multicast resources of the specified type in the multicast domain.
     *   * *   If you set **ResourceId**, the system queries multicast resources by resource.
     *   * *   If you set only **TransitRouterMulticastDomainId**, the system queries all the multicast resources in the multicast domain.
     *   *
     * @param ListTransitRouterMulticastGroupsRequest $request ListTransitRouterMulticastGroupsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRouterMulticastGroupsResponse ListTransitRouterMulticastGroupsResponse
     */
    public function listTransitRouterMulticastGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->groupIpAddress)) {
            $query['GroupIpAddress'] = $request->groupIpAddress;
        }
        if (!Utils::isUnset($request->isGroupMember)) {
            $query['IsGroupMember'] = $request->isGroupMember;
        }
        if (!Utils::isUnset($request->isGroupSource)) {
            $query['IsGroupSource'] = $request->isGroupSource;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->networkInterfaceIds)) {
            $query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->peerTransitRouterMulticastDomains)) {
            $query['PeerTransitRouterMulticastDomains'] = $request->peerTransitRouterMulticastDomains;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterMulticastGroups',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterMulticastGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the `ListTransitRouterMulticastGroups` operation to query the multicast sources and members in a multicast domain. Multicast sources and members are also known as multicast resources.
     *   * *   If you set **GroupIpAddress**, the system queries multicast resources in the multicast domain by multicast group.
     *   * *   If you set **VSwitchIds**, the system queries multicast resources in the multicast domain by vSwitch.
     *   * *   If you set **PeerTransitRouterMulticastDomains**, the system queries multicast resources that are also deployed in a different region.
     *   * *   If you set **ResourceType**, the system queries the multicast resources of the specified type in the multicast domain.
     *   * *   If you set **ResourceId**, the system queries multicast resources by resource.
     *   * *   If you set only **TransitRouterMulticastDomainId**, the system queries all the multicast resources in the multicast domain.
     *   *
     * @param ListTransitRouterMulticastGroupsRequest $request ListTransitRouterMulticastGroupsRequest
     *
     * @return ListTransitRouterMulticastGroupsResponse ListTransitRouterMulticastGroupsResponse
     */
    public function listTransitRouterMulticastGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterMulticastGroupsWithOptions($request, $runtime);
    }

    /**
     * You can use the following methods to query inter-region connections on an Enterprise Edition transit router:
     *   * *   Query all inter-region connections on an Enterprise Edition transit router by specifying the ID of the Enterprise Edition transit router.
     *   * *   Query all inter-region connections on an Enterprise Edition transit router by specifying the ID of the Cloud Enterprise Network (CEN) instance and the ID of the region where the transit router is deployed.
     *   *
     * @param ListTransitRouterPeerAttachmentsRequest $request ListTransitRouterPeerAttachmentsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRouterPeerAttachmentsResponse ListTransitRouterPeerAttachmentsResponse
     */
    public function listTransitRouterPeerAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterPeerAttachments',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterPeerAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use the following methods to query inter-region connections on an Enterprise Edition transit router:
     *   * *   Query all inter-region connections on an Enterprise Edition transit router by specifying the ID of the Enterprise Edition transit router.
     *   * *   Query all inter-region connections on an Enterprise Edition transit router by specifying the ID of the Cloud Enterprise Network (CEN) instance and the ID of the region where the transit router is deployed.
     *   *
     * @param ListTransitRouterPeerAttachmentsRequest $request ListTransitRouterPeerAttachmentsRequest
     *
     * @return ListTransitRouterPeerAttachmentsResponse ListTransitRouterPeerAttachmentsResponse
     */
    public function listTransitRouterPeerAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterPeerAttachmentsWithOptions($request, $runtime);
    }

    /**
     * @param ListTransitRouterPrefixListAssociationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListTransitRouterPrefixListAssociationResponse
     */
    public function listTransitRouterPrefixListAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->nextHopInstanceId)) {
            $query['NextHopInstanceId'] = $request->nextHopInstanceId;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $query['NextHopType'] = $request->nextHopType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ownerUid)) {
            $query['OwnerUid'] = $request->ownerUid;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prefixListId)) {
            $query['PrefixListId'] = $request->prefixListId;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterTableId)) {
            $query['TransitRouterTableId'] = $request->transitRouterTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterPrefixListAssociation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterPrefixListAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTransitRouterPrefixListAssociationRequest $request
     *
     * @return ListTransitRouterPrefixListAssociationResponse
     */
    public function listTransitRouterPrefixListAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterPrefixListAssociationWithOptions($request, $runtime);
    }

    /**
     * @param ListTransitRouterRouteEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListTransitRouterRouteEntriesResponse
     */
    public function listTransitRouterRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prefixListId)) {
            $query['PrefixListId'] = $request->prefixListId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeFilter)) {
            $query['RouteFilter'] = $request->routeFilter;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryDestinationCidrBlock)) {
            $query['TransitRouterRouteEntryDestinationCidrBlock'] = $request->transitRouterRouteEntryDestinationCidrBlock;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryIds)) {
            $query['TransitRouterRouteEntryIds'] = $request->transitRouterRouteEntryIds;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNames)) {
            $query['TransitRouterRouteEntryNames'] = $request->transitRouterRouteEntryNames;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNextHopId)) {
            $query['TransitRouterRouteEntryNextHopId'] = $request->transitRouterRouteEntryNextHopId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNextHopResourceId)) {
            $query['TransitRouterRouteEntryNextHopResourceId'] = $request->transitRouterRouteEntryNextHopResourceId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNextHopResourceType)) {
            $query['TransitRouterRouteEntryNextHopResourceType'] = $request->transitRouterRouteEntryNextHopResourceType;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryNextHopType)) {
            $query['TransitRouterRouteEntryNextHopType'] = $request->transitRouterRouteEntryNextHopType;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryOriginResourceId)) {
            $query['TransitRouterRouteEntryOriginResourceId'] = $request->transitRouterRouteEntryOriginResourceId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryOriginResourceType)) {
            $query['TransitRouterRouteEntryOriginResourceType'] = $request->transitRouterRouteEntryOriginResourceType;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryStatus)) {
            $query['TransitRouterRouteEntryStatus'] = $request->transitRouterRouteEntryStatus;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryType)) {
            $query['TransitRouterRouteEntryType'] = $request->transitRouterRouteEntryType;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterRouteEntries',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTransitRouterRouteEntriesRequest $request
     *
     * @return ListTransitRouterRouteEntriesResponse
     */
    public function listTransitRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * When you call **ListTransitRouterRouteTableAssociations**, you must set at least one of **TransitRouterRouteTableId** and **TransitRouterAttachmentId**.
     *   * *   If you set only **TransitRouterRouteTableId**, the network instance connections that are in associated forwarding correlation with a route table of an Enterprise Edition transit router are queried.
     *   * *   If you set only **TransitRouterAttachmentId**, the route table of an Enterprise Edition transit router that is in associated forwarding correlation with a network instance connection is queried.
     *   * *   If you set both **TransitRouterRouteTableId** and **TransitRouterAttachmentId**, the associated forwarding correlations between a specified network instance connection and a specified route table of an Enterprise Edition transit router are queried.
     *   *     *   If an associated forwarding correlation is created between the network instance connection and the route table of the Enterprise Edition transit router, the information about the associated forwarding correlation is returned.
     *   *     *   If no associated forwarding correlation is created between the network instance connection and the route table of the Enterprise Edition transit router, **TransitRouterAssociations** in the response is empty.
     *   *
     * @param ListTransitRouterRouteTableAssociationsRequest $request ListTransitRouterRouteTableAssociationsRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRouterRouteTableAssociationsResponse ListTransitRouterRouteTableAssociationsResponse
     */
    public function listTransitRouterRouteTableAssociationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentResourceId)) {
            $query['TransitRouterAttachmentResourceId'] = $request->transitRouterAttachmentResourceId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentResourceType)) {
            $query['TransitRouterAttachmentResourceType'] = $request->transitRouterAttachmentResourceType;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterRouteTableAssociations',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterRouteTableAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call **ListTransitRouterRouteTableAssociations**, you must set at least one of **TransitRouterRouteTableId** and **TransitRouterAttachmentId**.
     *   * *   If you set only **TransitRouterRouteTableId**, the network instance connections that are in associated forwarding correlation with a route table of an Enterprise Edition transit router are queried.
     *   * *   If you set only **TransitRouterAttachmentId**, the route table of an Enterprise Edition transit router that is in associated forwarding correlation with a network instance connection is queried.
     *   * *   If you set both **TransitRouterRouteTableId** and **TransitRouterAttachmentId**, the associated forwarding correlations between a specified network instance connection and a specified route table of an Enterprise Edition transit router are queried.
     *   *     *   If an associated forwarding correlation is created between the network instance connection and the route table of the Enterprise Edition transit router, the information about the associated forwarding correlation is returned.
     *   *     *   If no associated forwarding correlation is created between the network instance connection and the route table of the Enterprise Edition transit router, **TransitRouterAssociations** in the response is empty.
     *   *
     * @param ListTransitRouterRouteTableAssociationsRequest $request ListTransitRouterRouteTableAssociationsRequest
     *
     * @return ListTransitRouterRouteTableAssociationsResponse ListTransitRouterRouteTableAssociationsResponse
     */
    public function listTransitRouterRouteTableAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterRouteTableAssociationsWithOptions($request, $runtime);
    }

    /**
     * @param ListTransitRouterRouteTablePropagationsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListTransitRouterRouteTablePropagationsResponse
     */
    public function listTransitRouterRouteTablePropagationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentResourceId)) {
            $query['TransitRouterAttachmentResourceId'] = $request->transitRouterAttachmentResourceId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentResourceType)) {
            $query['TransitRouterAttachmentResourceType'] = $request->transitRouterAttachmentResourceType;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterRouteTablePropagations',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterRouteTablePropagationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTransitRouterRouteTablePropagationsRequest $request
     *
     * @return ListTransitRouterRouteTablePropagationsResponse
     */
    public function listTransitRouterRouteTablePropagations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterRouteTablePropagationsWithOptions($request, $runtime);
    }

    /**
     * @param ListTransitRouterRouteTablesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListTransitRouterRouteTablesResponse
     */
    public function listTransitRouterRouteTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableOptions)) {
            $query['RouteTableOptions'] = $request->routeTableOptions;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableIds)) {
            $query['TransitRouterRouteTableIds'] = $request->transitRouterRouteTableIds;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableNames)) {
            $query['TransitRouterRouteTableNames'] = $request->transitRouterRouteTableNames;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableStatus)) {
            $query['TransitRouterRouteTableStatus'] = $request->transitRouterRouteTableStatus;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableType)) {
            $query['TransitRouterRouteTableType'] = $request->transitRouterRouteTableType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterRouteTables',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterRouteTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTransitRouterRouteTablesRequest $request
     *
     * @return ListTransitRouterRouteTablesResponse
     */
    public function listTransitRouterRouteTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterRouteTablesWithOptions($request, $runtime);
    }

    /**
     * You can use the following methods to query VBR connections on an Enterprise Edition transit router:
     *   * *   Specify the ID of the Enterprise Edition transit router.
     *   * *   Specify the ID of the relevant Cloud Enterprise Network (CEN) instance and the region ID of the Enterprise Edition transit router.
     *   *
     * @param ListTransitRouterVbrAttachmentsRequest $request ListTransitRouterVbrAttachmentsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRouterVbrAttachmentsResponse ListTransitRouterVbrAttachmentsResponse
     */
    public function listTransitRouterVbrAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterVbrAttachments',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterVbrAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use the following methods to query VBR connections on an Enterprise Edition transit router:
     *   * *   Specify the ID of the Enterprise Edition transit router.
     *   * *   Specify the ID of the relevant Cloud Enterprise Network (CEN) instance and the region ID of the Enterprise Edition transit router.
     *   *
     * @param ListTransitRouterVbrAttachmentsRequest $request ListTransitRouterVbrAttachmentsRequest
     *
     * @return ListTransitRouterVbrAttachmentsResponse ListTransitRouterVbrAttachmentsResponse
     */
    public function listTransitRouterVbrAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterVbrAttachmentsWithOptions($request, $runtime);
    }

    /**
     * You can use the following methods to query VPC connections on an Enterprise Edition transit router:
     *   * *   Specify the ID of the Enterprise Edition transit router.
     *   * *   Specify the ID of the relevant Cloud Enterprise Network (CEN) instance and the region ID of the Enterprise Edition transit router.
     *   * *   Specify the ID of the region where the Enterprise Edition transit router is deployed.
     *   *
     * @param ListTransitRouterVpcAttachmentsRequest $request ListTransitRouterVpcAttachmentsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRouterVpcAttachmentsResponse ListTransitRouterVpcAttachmentsResponse
     */
    public function listTransitRouterVpcAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterVpcAttachments',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterVpcAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use the following methods to query VPC connections on an Enterprise Edition transit router:
     *   * *   Specify the ID of the Enterprise Edition transit router.
     *   * *   Specify the ID of the relevant Cloud Enterprise Network (CEN) instance and the region ID of the Enterprise Edition transit router.
     *   * *   Specify the ID of the region where the Enterprise Edition transit router is deployed.
     *   *
     * @param ListTransitRouterVpcAttachmentsRequest $request ListTransitRouterVpcAttachmentsRequest
     *
     * @return ListTransitRouterVpcAttachmentsResponse ListTransitRouterVpcAttachmentsResponse
     */
    public function listTransitRouterVpcAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterVpcAttachmentsWithOptions($request, $runtime);
    }

    /**
     * When you call the **ListTransitRouterVpnAttachments** operation, take note of the following items:
     *   * *   If you set only **CenId** and **RegionId**, the VPN attachments in the current region are queried.
     *   * *   If you set **CenId**, **RegionId**, and **TransitRouterAttachmentId**, only the specified VPN attachment is queried.
     *   * *   If you set **CenId** and **RegionId**, you do not need to set **TransitRouterId**. If you set **TransitRouterId**, you do not need to set **CenId** or **RegionId**.
     *   *
     * @param ListTransitRouterVpnAttachmentsRequest $request ListTransitRouterVpnAttachmentsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRouterVpnAttachmentsResponse ListTransitRouterVpnAttachmentsResponse
     */
    public function listTransitRouterVpnAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouterVpnAttachments',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRouterVpnAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call the **ListTransitRouterVpnAttachments** operation, take note of the following items:
     *   * *   If you set only **CenId** and **RegionId**, the VPN attachments in the current region are queried.
     *   * *   If you set **CenId**, **RegionId**, and **TransitRouterAttachmentId**, only the specified VPN attachment is queried.
     *   * *   If you set **CenId** and **RegionId**, you do not need to set **TransitRouterId**. If you set **TransitRouterId**, you do not need to set **CenId** or **RegionId**.
     *   *
     * @param ListTransitRouterVpnAttachmentsRequest $request ListTransitRouterVpnAttachmentsRequest
     *
     * @return ListTransitRouterVpnAttachmentsResponse ListTransitRouterVpnAttachmentsResponse
     */
    public function listTransitRouterVpnAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterVpnAttachmentsWithOptions($request, $runtime);
    }

    /**
     * The tag value.
     *   *
     * @param ListTransitRoutersRequest $request ListTransitRoutersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTransitRoutersResponse ListTransitRoutersResponse
     */
    public function listTransitRoutersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->featureFilter)) {
            $query['FeatureFilter'] = $request->featureFilter;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterName)) {
            $query['TransitRouterName'] = $request->transitRouterName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTransitRouters',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTransitRoutersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The tag value.
     *   *
     * @param ListTransitRoutersRequest $request ListTransitRoutersRequest
     *
     * @return ListTransitRoutersResponse ListTransitRoutersResponse
     */
    public function listTransitRouters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRoutersWithOptions($request, $runtime);
    }

    /**
     * **ModifyCenAttribute** is an asynchronous operation. After you send a request, the system returns the **request ID** but the operation is still being performed in the system background. You can call **DescribeCens** to query the status of a CEN instance.
     *   * *   If a CEN instance is in the **Modifying** state, the CEN instance is being modified. You can query the CEN instance but cannot perform other operations.
     *   * *   If a CEN instance is in the **Active** state, the CEN instance is modified.
     *   *
     * @param ModifyCenAttributeRequest $request ModifyCenAttributeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCenAttributeResponse ModifyCenAttributeResponse
     */
    public function modifyCenAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->protectionLevel)) {
            $query['ProtectionLevel'] = $request->protectionLevel;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCenAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCenAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **ModifyCenAttribute** is an asynchronous operation. After you send a request, the system returns the **request ID** but the operation is still being performed in the system background. You can call **DescribeCens** to query the status of a CEN instance.
     *   * *   If a CEN instance is in the **Modifying** state, the CEN instance is being modified. You can query the CEN instance but cannot perform other operations.
     *   * *   If a CEN instance is in the **Active** state, the CEN instance is modified.
     *   *
     * @param ModifyCenAttributeRequest $request ModifyCenAttributeRequest
     *
     * @return ModifyCenAttributeResponse ModifyCenAttributeResponse
     */
    public function modifyCenAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCenBandwidthPackageAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyCenBandwidthPackageAttributeResponse
     */
    public function modifyCenBandwidthPackageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenBandwidthPackageId)) {
            $query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCenBandwidthPackageAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCenBandwidthPackageAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCenBandwidthPackageAttributeRequest $request
     *
     * @return ModifyCenBandwidthPackageAttributeResponse
     */
    public function modifyCenBandwidthPackageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenBandwidthPackageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCenBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyCenBandwidthPackageSpecResponse
     */
    public function modifyCenBandwidthPackageSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->cenBandwidthPackageId)) {
            $query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCenBandwidthPackageSpec',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCenBandwidthPackageSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCenBandwidthPackageSpecRequest $request
     *
     * @return ModifyCenBandwidthPackageSpecResponse
     */
    public function modifyCenBandwidthPackageSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * The response.
     *   *
     * @param ModifyCenRouteMapRequest $request ModifyCenRouteMapRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCenRouteMapResponse ModifyCenRouteMapResponse
     */
    public function modifyCenRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asPathMatchMode)) {
            $query['AsPathMatchMode'] = $request->asPathMatchMode;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenRegionId)) {
            $query['CenRegionId'] = $request->cenRegionId;
        }
        if (!Utils::isUnset($request->cidrMatchMode)) {
            $query['CidrMatchMode'] = $request->cidrMatchMode;
        }
        if (!Utils::isUnset($request->communityMatchMode)) {
            $query['CommunityMatchMode'] = $request->communityMatchMode;
        }
        if (!Utils::isUnset($request->communityOperateMode)) {
            $query['CommunityOperateMode'] = $request->communityOperateMode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationChildInstanceTypes)) {
            $query['DestinationChildInstanceTypes'] = $request->destinationChildInstanceTypes;
        }
        if (!Utils::isUnset($request->destinationCidrBlocks)) {
            $query['DestinationCidrBlocks'] = $request->destinationCidrBlocks;
        }
        if (!Utils::isUnset($request->destinationInstanceIds)) {
            $query['DestinationInstanceIds'] = $request->destinationInstanceIds;
        }
        if (!Utils::isUnset($request->destinationInstanceIdsReverseMatch)) {
            $query['DestinationInstanceIdsReverseMatch'] = $request->destinationInstanceIdsReverseMatch;
        }
        if (!Utils::isUnset($request->destinationRouteTableIds)) {
            $query['DestinationRouteTableIds'] = $request->destinationRouteTableIds;
        }
        if (!Utils::isUnset($request->mapResult)) {
            $query['MapResult'] = $request->mapResult;
        }
        if (!Utils::isUnset($request->matchAddressType)) {
            $query['MatchAddressType'] = $request->matchAddressType;
        }
        if (!Utils::isUnset($request->matchAsns)) {
            $query['MatchAsns'] = $request->matchAsns;
        }
        if (!Utils::isUnset($request->matchCommunitySet)) {
            $query['MatchCommunitySet'] = $request->matchCommunitySet;
        }
        if (!Utils::isUnset($request->nextPriority)) {
            $query['NextPriority'] = $request->nextPriority;
        }
        if (!Utils::isUnset($request->operateCommunitySet)) {
            $query['OperateCommunitySet'] = $request->operateCommunitySet;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->preference)) {
            $query['Preference'] = $request->preference;
        }
        if (!Utils::isUnset($request->prependAsPath)) {
            $query['PrependAsPath'] = $request->prependAsPath;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeMapId)) {
            $query['RouteMapId'] = $request->routeMapId;
        }
        if (!Utils::isUnset($request->routeTypes)) {
            $query['RouteTypes'] = $request->routeTypes;
        }
        if (!Utils::isUnset($request->sourceChildInstanceTypes)) {
            $query['SourceChildInstanceTypes'] = $request->sourceChildInstanceTypes;
        }
        if (!Utils::isUnset($request->sourceInstanceIds)) {
            $query['SourceInstanceIds'] = $request->sourceInstanceIds;
        }
        if (!Utils::isUnset($request->sourceInstanceIdsReverseMatch)) {
            $query['SourceInstanceIdsReverseMatch'] = $request->sourceInstanceIdsReverseMatch;
        }
        if (!Utils::isUnset($request->sourceRegionIds)) {
            $query['SourceRegionIds'] = $request->sourceRegionIds;
        }
        if (!Utils::isUnset($request->sourceRouteTableIds)) {
            $query['SourceRouteTableIds'] = $request->sourceRouteTableIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCenRouteMap',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCenRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The response.
     *   *
     * @param ModifyCenRouteMapRequest $request ModifyCenRouteMapRequest
     *
     * @return ModifyCenRouteMapResponse ModifyCenRouteMapResponse
     */
    public function modifyCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowLogAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flowLogId)) {
            $query['FlowLogId'] = $request->flowLogId;
        }
        if (!Utils::isUnset($request->flowLogName)) {
            $query['FlowLogName'] = $request->flowLogName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowLogAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowLogAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFlowLogAttributeRequest $request
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowLogAttributeWithOptions($request, $runtime);
    }

    /**
     * The new description of the transit router CIDR block.
     *   * The description must be 1 to 256 characters in length.
     *   *
     * @param ModifyTransitRouterCidrRequest $request ModifyTransitRouterCidrRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTransitRouterCidrResponse ModifyTransitRouterCidrResponse
     */
    public function modifyTransitRouterCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->publishCidrRoute)) {
            $query['PublishCidrRoute'] = $request->publishCidrRoute;
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
        if (!Utils::isUnset($request->transitRouterCidrId)) {
            $query['TransitRouterCidrId'] = $request->transitRouterCidrId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTransitRouterCidr',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTransitRouterCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The new description of the transit router CIDR block.
     *   * The description must be 1 to 256 characters in length.
     *   *
     * @param ModifyTransitRouterCidrRequest $request ModifyTransitRouterCidrRequest
     *
     * @return ModifyTransitRouterCidrResponse ModifyTransitRouterCidrResponse
     */
    public function modifyTransitRouterCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTransitRouterCidrWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyTransitRouterMulticastDomainResponse
     */
    public function modifyTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainDescription)) {
            $query['TransitRouterMulticastDomainDescription'] = $request->transitRouterMulticastDomainDescription;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainName)) {
            $query['TransitRouterMulticastDomainName'] = $request->transitRouterMulticastDomainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTransitRouterMulticastDomain',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTransitRouterMulticastDomainRequest $request
     *
     * @return ModifyTransitRouterMulticastDomainResponse
     */
    public function modifyTransitRouterMulticastDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTransitRouterMulticastDomainWithOptions($request, $runtime);
    }

    /**
     * By default, CEN instances and bandwidth plans are in the default resource group. You can call the `MoveResourceGroup` operation to move CEN instances or bandwidth plans to another resource group.
     *   *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, CEN instances and bandwidth plans are in the default resource group. You can call the `MoveResourceGroup` operation to move CEN instances or bandwidth plans to another resource group.
     *   *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * You can call the `OpenTransitRouterService` operation to activate the transit router feature free of charge. After the `OpenTransitRouterService` operation succeeds, an order is automatically generated. You can use the returned order ID to query the order information in [Alibaba Cloud User Center](https://usercenter2-intl.aliyun.com/billing/#/account/overview).
     *   *
     * @param OpenTransitRouterServiceRequest $request OpenTransitRouterServiceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenTransitRouterServiceResponse OpenTransitRouterServiceResponse
     */
    public function openTransitRouterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenTransitRouterService',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenTransitRouterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the `OpenTransitRouterService` operation to activate the transit router feature free of charge. After the `OpenTransitRouterService` operation succeeds, an order is automatically generated. You can use the returned order ID to query the order information in [Alibaba Cloud User Center](https://usercenter2-intl.aliyun.com/billing/#/account/overview).
     *   *
     * @param OpenTransitRouterServiceRequest $request OpenTransitRouterServiceRequest
     *
     * @return OpenTransitRouterServiceResponse OpenTransitRouterServiceResponse
     */
    public function openTransitRouterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openTransitRouterServiceWithOptions($request, $runtime);
    }

    /**
     * The following table describes whether routes of different types are advertised to CEN by default. You can call the PublishRouteEntries operation to advertise routes to CEN.
     *   * |Route|Network instance|Advertised to CEN by default|
     *   * |---|---|---|
     *   * |Routes that route network traffic to Elastic Compute Service (ECS) instances|VPC|No|
     *   * |Routes that route network traffic to VPN gateways|VPC|No|
     *   * |Routes that route network traffic to high-availability virtual IP addresses (HAVIPs)|VPC|No|
     *   * |Routes that route network traffic to router interfaces|VPC|No|
     *   * |Routes that route network traffic to elastic network interfaces (ENIs)|VPC|No|
     *   * |Routes that route network traffic to IPv6 gateways|VPC|No|
     *   * |Routes that route network traffic to NAT gateways|VPC|No|
     *   * |System routes of VPCs|VPC|Yes|
     *   * |Routes that route network traffic to data centers|VBR|Yes|
     *   * |Border Gateway Protocol (BGP) routes|VBR|Yes|.
     *   *
     * @param PublishRouteEntriesRequest $request PublishRouteEntriesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishRouteEntriesResponse PublishRouteEntriesResponse
     */
    public function publishRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceRouteTableId)) {
            $query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishRouteEntries',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The following table describes whether routes of different types are advertised to CEN by default. You can call the PublishRouteEntries operation to advertise routes to CEN.
     *   * |Route|Network instance|Advertised to CEN by default|
     *   * |---|---|---|
     *   * |Routes that route network traffic to Elastic Compute Service (ECS) instances|VPC|No|
     *   * |Routes that route network traffic to VPN gateways|VPC|No|
     *   * |Routes that route network traffic to high-availability virtual IP addresses (HAVIPs)|VPC|No|
     *   * |Routes that route network traffic to router interfaces|VPC|No|
     *   * |Routes that route network traffic to elastic network interfaces (ENIs)|VPC|No|
     *   * |Routes that route network traffic to IPv6 gateways|VPC|No|
     *   * |Routes that route network traffic to NAT gateways|VPC|No|
     *   * |System routes of VPCs|VPC|Yes|
     *   * |Routes that route network traffic to data centers|VBR|Yes|
     *   * |Border Gateway Protocol (BGP) routes|VBR|Yes|.
     *   *
     * @param PublishRouteEntriesRequest $request PublishRouteEntriesRequest
     *
     * @return PublishRouteEntriesResponse PublishRouteEntriesResponse
     */
    public function publishRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param RefreshTransitRouteTableAggregationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return RefreshTransitRouteTableAggregationResponse
     */
    public function refreshTransitRouteTableAggregationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouteTableAggregationCidr)) {
            $query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }
        if (!Utils::isUnset($request->transitRouteTableId)) {
            $query['TransitRouteTableId'] = $request->transitRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshTransitRouteTableAggregation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshTransitRouteTableAggregationRequest $request
     *
     * @return RefreshTransitRouteTableAggregationResponse
     */
    public function refreshTransitRouteTableAggregation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshTransitRouteTableAggregationWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param RegisterTransitRouterMulticastGroupMembersRequest $request RegisterTransitRouterMulticastGroupMembersRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterTransitRouterMulticastGroupMembersResponse RegisterTransitRouterMulticastGroupMembersResponse
     */
    public function registerTransitRouterMulticastGroupMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->groupIpAddress)) {
            $query['GroupIpAddress'] = $request->groupIpAddress;
        }
        if (!Utils::isUnset($request->networkInterfaceIds)) {
            $query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->peerTransitRouterMulticastDomains)) {
            $query['PeerTransitRouterMulticastDomains'] = $request->peerTransitRouterMulticastDomains;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterTransitRouterMulticastGroupMembers',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterTransitRouterMulticastGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param RegisterTransitRouterMulticastGroupMembersRequest $request RegisterTransitRouterMulticastGroupMembersRequest
     *
     * @return RegisterTransitRouterMulticastGroupMembersResponse RegisterTransitRouterMulticastGroupMembersResponse
     */
    public function registerTransitRouterMulticastGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerTransitRouterMulticastGroupMembersWithOptions($request, $runtime);
    }

    /**
     * - You can specify only elastic network interfaces (ENIs) as multicast sources.
     *   * - `RegisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you send a request, the **request ID** is returned but the operation is still being performed in the system background. You can call `ListTransitRouterMulticastGroups` to query the status of a multicast source.
     *   *   - If a multicast source is in the **Registering** state, the multicast source is being created. You can query the multicast source but cannot perform other operations.
     *   *   - If a multicast source is in the **Registered** state, the multicast source is created.
     *   * #### Prerequisites
     *   * Before you call `RegisterTransitRouterMulticastGroupSources`, make sure that the vSwitch on which the ENI is created is associated with the multicast domain. For more information, see [AssociateTransitRouterMulticastDomain](https://www.alibabacloud.com/help/en/cloud-enterprise-network/latest/associatetransitroutermulticastdomain).
     *   *
     * @param RegisterTransitRouterMulticastGroupSourcesRequest $request RegisterTransitRouterMulticastGroupSourcesRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterTransitRouterMulticastGroupSourcesResponse RegisterTransitRouterMulticastGroupSourcesResponse
     */
    public function registerTransitRouterMulticastGroupSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->groupIpAddress)) {
            $query['GroupIpAddress'] = $request->groupIpAddress;
        }
        if (!Utils::isUnset($request->networkInterfaceIds)) {
            $query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterMulticastDomainId)) {
            $query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterTransitRouterMulticastGroupSources',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterTransitRouterMulticastGroupSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can specify only elastic network interfaces (ENIs) as multicast sources.
     *   * - `RegisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you send a request, the **request ID** is returned but the operation is still being performed in the system background. You can call `ListTransitRouterMulticastGroups` to query the status of a multicast source.
     *   *   - If a multicast source is in the **Registering** state, the multicast source is being created. You can query the multicast source but cannot perform other operations.
     *   *   - If a multicast source is in the **Registered** state, the multicast source is created.
     *   * #### Prerequisites
     *   * Before you call `RegisterTransitRouterMulticastGroupSources`, make sure that the vSwitch on which the ENI is created is associated with the multicast domain. For more information, see [AssociateTransitRouterMulticastDomain](https://www.alibabacloud.com/help/en/cloud-enterprise-network/latest/associatetransitroutermulticastdomain).
     *   *
     * @param RegisterTransitRouterMulticastGroupSourcesRequest $request RegisterTransitRouterMulticastGroupSourcesRequest
     *
     * @return RegisterTransitRouterMulticastGroupSourcesResponse RegisterTransitRouterMulticastGroupSourcesResponse
     */
    public function registerTransitRouterMulticastGroupSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerTransitRouterMulticastGroupSourcesWithOptions($request, $runtime);
    }

    /**
     * *   When you call **RemoveTrafficMatchRuleFromTrafficMarkingPolicy**, take note of the following rules:
     *   *     *   If you specify the ID of a traffic classification rule in the **TrafficMarkRuleIds** parameter, the specified traffic classification rule is deleted.
     *   *     *   If you do not specify a traffic classification rule ID in the **TrafficMarkRuleIds** parameter, no operation is performed after you call this operation.
     *   *     If you want to delete a traffic classification rule, you must specify the rule ID before you call this operation.
     *   * *   **RemoveTrafficMatchRuleFromTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic classification rule.
     *   *     *   If a traffic classification rule is in the **Deleting** state, the traffic classification rule is being deleted. In this case, you can query the traffic classification rule but cannot perform other operations.
     *   *     *   If a traffic classification rule cannot be found, the traffic classification rule is deleted.
     *   *
     * @param RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest $request RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse
     */
    public function removeTrafficMatchRuleFromTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMarkRuleIds)) {
            $query['TrafficMarkRuleIds'] = $request->trafficMarkRuleIds;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyId)) {
            $query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTrafficMatchRuleFromTrafficMarkingPolicy',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   When you call **RemoveTrafficMatchRuleFromTrafficMarkingPolicy**, take note of the following rules:
     *   *     *   If you specify the ID of a traffic classification rule in the **TrafficMarkRuleIds** parameter, the specified traffic classification rule is deleted.
     *   *     *   If you do not specify a traffic classification rule ID in the **TrafficMarkRuleIds** parameter, no operation is performed after you call this operation.
     *   *     If you want to delete a traffic classification rule, you must specify the rule ID before you call this operation.
     *   * *   **RemoveTrafficMatchRuleFromTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic classification rule.
     *   *     *   If a traffic classification rule is in the **Deleting** state, the traffic classification rule is being deleted. In this case, you can query the traffic classification rule but cannot perform other operations.
     *   *     *   If a traffic classification rule cannot be found, the traffic classification rule is deleted.
     *   *
     * @param RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest $request RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest
     *
     * @return RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse
     */
    public function removeTrafficMatchRuleFromTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTrafficMatchRuleFromTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * @deprecated : RemoveTraficMatchRuleFromTrafficMarkingPolicy is deprecated, please use Cbn::2017-09-12::RemoveTrafficMatchRuleFromTrafficMarkingPolicy instead.
     *   * # [](#)Precautions
     *   * The **RemoveTraficMatchRuleFromTrafficMarkingPolicy** operation is deprecated and will be discontinued soon. If you need to delete traffic classification rules from a traffic marking policy, call the [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](~~452726~~) operation.
     *   *
     * Deprecated
     *
     * @param RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest $request RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse
     */
    public function removeTraficMatchRuleFromTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMarkRuleIds)) {
            $query['TrafficMarkRuleIds'] = $request->trafficMarkRuleIds;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyId)) {
            $query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTraficMatchRuleFromTrafficMarkingPolicy',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : RemoveTraficMatchRuleFromTrafficMarkingPolicy is deprecated, please use Cbn::2017-09-12::RemoveTrafficMatchRuleFromTrafficMarkingPolicy instead.
     *   * # [](#)Precautions
     *   * The **RemoveTraficMatchRuleFromTrafficMarkingPolicy** operation is deprecated and will be discontinued soon. If you need to delete traffic classification rules from a traffic marking policy, call the [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](~~452726~~) operation.
     *   *
     * Deprecated
     *
     * @param RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest $request RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest
     *
     * @return RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse
     */
    public function removeTraficMatchRuleFromTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTraficMatchRuleFromTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceTransitRouterRouteTableAssociationRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return ReplaceTransitRouterRouteTableAssociationResponse
     */
    public function replaceTransitRouterRouteTableAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplaceTransitRouterRouteTableAssociation',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceTransitRouterRouteTableAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplaceTransitRouterRouteTableAssociationRequest $request
     *
     * @return ReplaceTransitRouterRouteTableAssociationResponse
     */
    public function replaceTransitRouterRouteTableAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceTransitRouterRouteTableAssociationWithOptions($request, $runtime);
    }

    /**
     * Cloud services refer to the Alibaba Cloud services that use the 100.64.0.0/10 CIDR block to provide services. These cloud services include Object Storage Service (OSS), Log Service, and Data Transmission Service (DTS). If your on-premises network needs to access a cloud service, you must attach the virtual border router (VBR) or Cloud Connect Network (CCN) instance that is connected to your on-premises network to a Cloud Enterprise Network (CEN) instance. In addition, you must attach a virtual private cloud (VPC) that is deployed in the same region as the cloud service to the CEN instance. This way, your on-premises network can connect to the VPC that is deployed in the same region as the cloud service and access the cloud service through the VPC.
     *   * *   An on-premises network associated with a VBR can use CEN to access only a cloud service that is deployed in the same region.
     *   *     For example, if cloud services are deployed in the China (Beijing) region, only on-premises networks connected to VBRs in the China (Beijing) region can access the cloud services.
     *   * *   **ResolveAndRouteServiceInCen** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeRouteServicesInCen** operation to query the status of a cloud service.
     *   *     *   If a cloud service is in the **Creating** state, the connection to the cloud service is being created. In this case, you can query the cloud service but cannot perform other operations.
     *   *     *   If a cloud service is in the **Active** state, the connection to the cloud service is created.
     *   *     *   If a cloud service is in the **Failed** state, the connection to the cloud service failed.
     *   * # Prerequisites
     *   * Before you call this operation, make sure that the following conditions are met:
     *   * *   The VBR or CCN instance to which your on-premises network is connected is attached to a CEN instance.
     *   * *   A VPC that is deployed in the same region as the cloud service is also attached to the CEN instance. For more information, see [AttachCenChildInstance](~~65902~~).
     *   *
     * @param ResolveAndRouteServiceInCenRequest $request ResolveAndRouteServiceInCenRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ResolveAndRouteServiceInCenResponse ResolveAndRouteServiceInCenResponse
     */
    public function resolveAndRouteServiceInCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessRegionIds)) {
            $query['AccessRegionIds'] = $request->accessRegionIds;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->hostRegionId)) {
            $query['HostRegionId'] = $request->hostRegionId;
        }
        if (!Utils::isUnset($request->hostVpcId)) {
            $query['HostVpcId'] = $request->hostVpcId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResolveAndRouteServiceInCen',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResolveAndRouteServiceInCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cloud services refer to the Alibaba Cloud services that use the 100.64.0.0/10 CIDR block to provide services. These cloud services include Object Storage Service (OSS), Log Service, and Data Transmission Service (DTS). If your on-premises network needs to access a cloud service, you must attach the virtual border router (VBR) or Cloud Connect Network (CCN) instance that is connected to your on-premises network to a Cloud Enterprise Network (CEN) instance. In addition, you must attach a virtual private cloud (VPC) that is deployed in the same region as the cloud service to the CEN instance. This way, your on-premises network can connect to the VPC that is deployed in the same region as the cloud service and access the cloud service through the VPC.
     *   * *   An on-premises network associated with a VBR can use CEN to access only a cloud service that is deployed in the same region.
     *   *     For example, if cloud services are deployed in the China (Beijing) region, only on-premises networks connected to VBRs in the China (Beijing) region can access the cloud services.
     *   * *   **ResolveAndRouteServiceInCen** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeRouteServicesInCen** operation to query the status of a cloud service.
     *   *     *   If a cloud service is in the **Creating** state, the connection to the cloud service is being created. In this case, you can query the cloud service but cannot perform other operations.
     *   *     *   If a cloud service is in the **Active** state, the connection to the cloud service is created.
     *   *     *   If a cloud service is in the **Failed** state, the connection to the cloud service failed.
     *   * # Prerequisites
     *   * Before you call this operation, make sure that the following conditions are met:
     *   * *   The VBR or CCN instance to which your on-premises network is connected is attached to a CEN instance.
     *   * *   A VPC that is deployed in the same region as the cloud service is also attached to the CEN instance. For more information, see [AttachCenChildInstance](~~65902~~).
     *   *
     * @param ResolveAndRouteServiceInCenRequest $request ResolveAndRouteServiceInCenRequest
     *
     * @return ResolveAndRouteServiceInCenResponse ResolveAndRouteServiceInCenResponse
     */
    public function resolveAndRouteServiceInCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resolveAndRouteServiceInCenWithOptions($request, $runtime);
    }

    /**
     * `RevokeInstanceFromTransitRouter` disallows transit routers only from connecting to virtual private clouds (VPCs), virtual border routers (VBRs), and IPsec-VPN connections.
     *   * If you want to disallow transit routers from connecting to Cloud Connect Network (CCN) instances, call the [RevokeInstanceFromCbn](~~126142~~) operation.
     *   * ## [](#)Prerequisite
     *   * Before you call `RevokeInstanceFromTransitRouter`, you must detach the network instances from the transit router.
     *   * *   For more information about how to detach VPCs from an Enterprise Edition transit router, see [DeleteTransitRouterVpcAttachment](~~261220~~).
     *   * *   For more information about how to detach VBRs from an Enterprise Edition transit router, see [DeleteTransitRouterVbrAttachment](~~261223~~).
     *   * *   For more information about how to detach IPsec-VPN connections from an Enterprise Edition transit router, see [DeleteTransitRouterVpnAttachment](~~443992~~).
     *   * *   For more information about how to detach network instances from a Basic Edition transit router, see [DetachCenChildInstance](~~65915~~).
     *   *
     * @param RevokeInstanceFromTransitRouterRequest $request RevokeInstanceFromTransitRouterRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeInstanceFromTransitRouterResponse RevokeInstanceFromTransitRouterResponse
     */
    public function revokeInstanceFromTransitRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeInstanceFromTransitRouter',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeInstanceFromTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * `RevokeInstanceFromTransitRouter` disallows transit routers only from connecting to virtual private clouds (VPCs), virtual border routers (VBRs), and IPsec-VPN connections.
     *   * If you want to disallow transit routers from connecting to Cloud Connect Network (CCN) instances, call the [RevokeInstanceFromCbn](~~126142~~) operation.
     *   * ## [](#)Prerequisite
     *   * Before you call `RevokeInstanceFromTransitRouter`, you must detach the network instances from the transit router.
     *   * *   For more information about how to detach VPCs from an Enterprise Edition transit router, see [DeleteTransitRouterVpcAttachment](~~261220~~).
     *   * *   For more information about how to detach VBRs from an Enterprise Edition transit router, see [DeleteTransitRouterVbrAttachment](~~261223~~).
     *   * *   For more information about how to detach IPsec-VPN connections from an Enterprise Edition transit router, see [DeleteTransitRouterVpnAttachment](~~443992~~).
     *   * *   For more information about how to detach network instances from a Basic Edition transit router, see [DetachCenChildInstance](~~65915~~).
     *   *
     * @param RevokeInstanceFromTransitRouterRequest $request RevokeInstanceFromTransitRouterRequest
     *
     * @return RevokeInstanceFromTransitRouterResponse RevokeInstanceFromTransitRouterResponse
     */
    public function revokeInstanceFromTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeInstanceFromTransitRouterWithOptions($request, $runtime);
    }

    /**
     * Alibaba Cloud DNS PrivateZone (PrivateZone) is an Alibaba Cloud private domain name resolution and management service based on Virtual Private Cloud (VPC). After you attach virtual border routers (VBRs) and Cloud Connect Network (CCN) instances to a Cloud Enterprise Network (CEN) instance, you can enable the on-premises networks connected to the VBRs and CCN instances to access PrivateZone through the CEN instance.
     *   * #### Usage notes
     *   * - The on-premises networks connected to VBRs or CCN instances must be deployed in the same region as the PrivateZone service. For example, if the PrivateZone service is deployed in the China (Beijing) region, only on-premises networks connected to VBRs or CCN instances in the China (Beijing) region can access the PrivateZone service.
     *   * - **RoutePrivateZoneInCenToVpc** is an asynchronous operation. After you send a request, the **request ID** is returned but the operation is still being performed in the system background. You can call **DescribeCenPrivateZoneRoutes** to query the status of PrivateZone.
     *   *     - If PrivateZone is in the **Creating** state, access to PrivateZone is being configured. In this case, you can query PrivateZone configurations but cannot perform other operations.
     *   *     - If PrivateZone is in the **Active** state, access to PrivateZone is enabled.
     *   *     - If PrivateZone is in the **Failed** state, configurations of access to PrivateZone failed.
     *   * #### Prerequisites
     *   * Before you call **RoutePrivateZoneInCenToVpc**, make sure that the following conditions are met:
     *   * - PrivateZone is deployed. For more information, see [PrivateZone quick start](~~64627~~).
     *   * - The following network instances are attached to the same CEN instance: the VPC that is associated with the PrivateZone service, and the VBR and CCN instance that want to access the PrivateZone service. For more information, see [AttachCenChildInstance](~~468684~~).
     *   * - If your on-premises network uses a CCN instance to connect to Alibaba Cloud and the account that owns the CCN instance is different from the account that owns the VPC or CEN instance, you must grant the CCN instance required permissions. For more information, see [Grant permissions to CCN](~~181654~~).
     *   *
     * @param RoutePrivateZoneInCenToVpcRequest $request RoutePrivateZoneInCenToVpcRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RoutePrivateZoneInCenToVpcResponse RoutePrivateZoneInCenToVpcResponse
     */
    public function routePrivateZoneInCenToVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessRegionId)) {
            $query['AccessRegionId'] = $request->accessRegionId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->hostRegionId)) {
            $query['HostRegionId'] = $request->hostRegionId;
        }
        if (!Utils::isUnset($request->hostVpcId)) {
            $query['HostVpcId'] = $request->hostVpcId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RoutePrivateZoneInCenToVpc',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RoutePrivateZoneInCenToVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alibaba Cloud DNS PrivateZone (PrivateZone) is an Alibaba Cloud private domain name resolution and management service based on Virtual Private Cloud (VPC). After you attach virtual border routers (VBRs) and Cloud Connect Network (CCN) instances to a Cloud Enterprise Network (CEN) instance, you can enable the on-premises networks connected to the VBRs and CCN instances to access PrivateZone through the CEN instance.
     *   * #### Usage notes
     *   * - The on-premises networks connected to VBRs or CCN instances must be deployed in the same region as the PrivateZone service. For example, if the PrivateZone service is deployed in the China (Beijing) region, only on-premises networks connected to VBRs or CCN instances in the China (Beijing) region can access the PrivateZone service.
     *   * - **RoutePrivateZoneInCenToVpc** is an asynchronous operation. After you send a request, the **request ID** is returned but the operation is still being performed in the system background. You can call **DescribeCenPrivateZoneRoutes** to query the status of PrivateZone.
     *   *     - If PrivateZone is in the **Creating** state, access to PrivateZone is being configured. In this case, you can query PrivateZone configurations but cannot perform other operations.
     *   *     - If PrivateZone is in the **Active** state, access to PrivateZone is enabled.
     *   *     - If PrivateZone is in the **Failed** state, configurations of access to PrivateZone failed.
     *   * #### Prerequisites
     *   * Before you call **RoutePrivateZoneInCenToVpc**, make sure that the following conditions are met:
     *   * - PrivateZone is deployed. For more information, see [PrivateZone quick start](~~64627~~).
     *   * - The following network instances are attached to the same CEN instance: the VPC that is associated with the PrivateZone service, and the VBR and CCN instance that want to access the PrivateZone service. For more information, see [AttachCenChildInstance](~~468684~~).
     *   * - If your on-premises network uses a CCN instance to connect to Alibaba Cloud and the account that owns the CCN instance is different from the account that owns the VPC or CEN instance, you must grant the CCN instance required permissions. For more information, see [Grant permissions to CCN](~~181654~~).
     *   *
     * @param RoutePrivateZoneInCenToVpcRequest $request RoutePrivateZoneInCenToVpcRequest
     *
     * @return RoutePrivateZoneInCenToVpcResponse RoutePrivateZoneInCenToVpcResponse
     */
    public function routePrivateZoneInCenToVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->routePrivateZoneInCenToVpcWithOptions($request, $runtime);
    }

    /**
     * @param SetCenInterRegionBandwidthLimitRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetCenInterRegionBandwidthLimitResponse
     */
    public function setCenInterRegionBandwidthLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthLimit)) {
            $query['BandwidthLimit'] = $request->bandwidthLimit;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->localRegionId)) {
            $query['LocalRegionId'] = $request->localRegionId;
        }
        if (!Utils::isUnset($request->oppositeRegionId)) {
            $query['OppositeRegionId'] = $request->oppositeRegionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCenInterRegionBandwidthLimit',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCenInterRegionBandwidthLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCenInterRegionBandwidthLimitRequest $request
     *
     * @return SetCenInterRegionBandwidthLimitResponse
     */
    public function setCenInterRegionBandwidthLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCenInterRegionBandwidthLimitWithOptions($request, $runtime);
    }

    /**
     * *   Each tag consists of a tag key and a tag value. When you add a tag, you must specify the tag key and tag value.
     *   * *   If you want to add multiple tags to a Cloud Enterprise Network (CEN) instance, each tag key must be unique.
     *   * *   You can add at most 20 tags to a CEN instance.
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version'     => '2017-09-12',
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
     * *   Each tag consists of a tag key and a tag value. When you add a tag, you must specify the tag key and tag value.
     *   * *   If you want to add multiple tags to a Cloud Enterprise Network (CEN) instance, each tag key must be unique.
     *   * *   You can add at most 20 tags to a CEN instance.
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
     * @param TempUpgradeCenBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return TempUpgradeCenBandwidthPackageSpecResponse
     */
    public function tempUpgradeCenBandwidthPackageSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->cenBandwidthPackageId)) {
            $query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TempUpgradeCenBandwidthPackageSpec',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TempUpgradeCenBandwidthPackageSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TempUpgradeCenBandwidthPackageSpecRequest $request
     *
     * @return TempUpgradeCenBandwidthPackageSpecResponse
     */
    public function tempUpgradeCenBandwidthPackageSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempUpgradeCenBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * No inter-region connections are configured in the bandwidth plan. For more information about how to delete inter-region connections, see [SetCenInterRegionBandwidthLimit](~~65942~~).
     *   *
     * @param UnassociateCenBandwidthPackageRequest $request UnassociateCenBandwidthPackageRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UnassociateCenBandwidthPackageResponse UnassociateCenBandwidthPackageResponse
     */
    public function unassociateCenBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenBandwidthPackageId)) {
            $query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnassociateCenBandwidthPackage',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateCenBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * No inter-region connections are configured in the bandwidth plan. For more information about how to delete inter-region connections, see [SetCenInterRegionBandwidthLimit](~~65942~~).
     *   *
     * @param UnassociateCenBandwidthPackageRequest $request UnassociateCenBandwidthPackageRequest
     *
     * @return UnassociateCenBandwidthPackageResponse UnassociateCenBandwidthPackageResponse
     */
    public function unassociateCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param UnroutePrivateZoneInCenToVpcRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnroutePrivateZoneInCenToVpcResponse
     */
    public function unroutePrivateZoneInCenToVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessRegionId)) {
            $query['AccessRegionId'] = $request->accessRegionId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnroutePrivateZoneInCenToVpc',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnroutePrivateZoneInCenToVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnroutePrivateZoneInCenToVpcRequest $request
     *
     * @return UnroutePrivateZoneInCenToVpcResponse
     */
    public function unroutePrivateZoneInCenToVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unroutePrivateZoneInCenToVpcWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version'     => '2017-09-12',
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
     * @param UpdateCenInterRegionTrafficQosPolicyAttributeRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return UpdateCenInterRegionTrafficQosPolicyAttributeResponse
     */
    public function updateCenInterRegionTrafficQosPolicyAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficQosPolicyDescription)) {
            $query['TrafficQosPolicyDescription'] = $request->trafficQosPolicyDescription;
        }
        if (!Utils::isUnset($request->trafficQosPolicyId)) {
            $query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }
        if (!Utils::isUnset($request->trafficQosPolicyName)) {
            $query['TrafficQosPolicyName'] = $request->trafficQosPolicyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCenInterRegionTrafficQosPolicyAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCenInterRegionTrafficQosPolicyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCenInterRegionTrafficQosPolicyAttributeRequest $request
     *
     * @return UpdateCenInterRegionTrafficQosPolicyAttributeResponse
     */
    public function updateCenInterRegionTrafficQosPolicyAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCenInterRegionTrafficQosPolicyAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCenInterRegionTrafficQosQueueAttributeRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return UpdateCenInterRegionTrafficQosQueueAttributeResponse
     */
    public function updateCenInterRegionTrafficQosQueueAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->dscps)) {
            $query['Dscps'] = $request->dscps;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qosQueueDescription)) {
            $query['QosQueueDescription'] = $request->qosQueueDescription;
        }
        if (!Utils::isUnset($request->qosQueueId)) {
            $query['QosQueueId'] = $request->qosQueueId;
        }
        if (!Utils::isUnset($request->qosQueueName)) {
            $query['QosQueueName'] = $request->qosQueueName;
        }
        if (!Utils::isUnset($request->remainBandwidthPercent)) {
            $query['RemainBandwidthPercent'] = $request->remainBandwidthPercent;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCenInterRegionTrafficQosQueueAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCenInterRegionTrafficQosQueueAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCenInterRegionTrafficQosQueueAttributeRequest $request
     *
     * @return UpdateCenInterRegionTrafficQosQueueAttributeResponse
     */
    public function updateCenInterRegionTrafficQosQueueAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCenInterRegionTrafficQosQueueAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrafficMarkingPolicyAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateTrafficMarkingPolicyAttributeResponse
     */
    public function updateTrafficMarkingPolicyAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addTrafficMatchRules)) {
            $query['AddTrafficMatchRules'] = $request->addTrafficMatchRules;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteTrafficMatchRules)) {
            $query['DeleteTrafficMatchRules'] = $request->deleteTrafficMatchRules;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyDescription)) {
            $query['TrafficMarkingPolicyDescription'] = $request->trafficMarkingPolicyDescription;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyId)) {
            $query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }
        if (!Utils::isUnset($request->trafficMarkingPolicyName)) {
            $query['TrafficMarkingPolicyName'] = $request->trafficMarkingPolicyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrafficMarkingPolicyAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTrafficMarkingPolicyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTrafficMarkingPolicyAttributeRequest $request
     *
     * @return UpdateTrafficMarkingPolicyAttributeResponse
     */
    public function updateTrafficMarkingPolicyAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrafficMarkingPolicyAttributeWithOptions($request, $runtime);
    }

    /**
     * **UpdateTransitRouter** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouters** operation to query the status of a transit router.
     *   * *   If a transit router is in the **Modifying** state, the configuration of the transit router is being modified. You can query the transit router but cannot perform other operations.
     *   * *   If a transit router is in the **Active** state, the configuration of the transit router is modified.
     *   *
     * @param UpdateTransitRouterRequest $request UpdateTransitRouterRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTransitRouterResponse UpdateTransitRouterResponse
     */
    public function updateTransitRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->transitRouterDescription)) {
            $query['TransitRouterDescription'] = $request->transitRouterDescription;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterName)) {
            $query['TransitRouterName'] = $request->transitRouterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTransitRouter',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateTransitRouter** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouters** operation to query the status of a transit router.
     *   * *   If a transit router is in the **Modifying** state, the configuration of the transit router is being modified. You can query the transit router but cannot perform other operations.
     *   * *   If a transit router is in the **Active** state, the configuration of the transit router is modified.
     *   *
     * @param UpdateTransitRouterRequest $request UpdateTransitRouterRequest
     *
     * @return UpdateTransitRouterResponse UpdateTransitRouterResponse
     */
    public function updateTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterWithOptions($request, $runtime);
    }

    /**
     * **UpdateTransitRouterPeerAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of an inter-region connection.
     *   * *   If an inter-region connection is in the **Modifying** state, the inter-region connection is being modified. You can query the inter-region connection but cannot perform other operations.
     *   * *   If an inter-region connection is in the **Attached** state, the inter-region connection is modified.
     *   *
     * @param UpdateTransitRouterPeerAttachmentAttributeRequest $request UpdateTransitRouterPeerAttachmentAttributeRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTransitRouterPeerAttachmentAttributeResponse UpdateTransitRouterPeerAttachmentAttributeResponse
     */
    public function updateTransitRouterPeerAttachmentAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPublishRouteEnabled)) {
            $query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthType)) {
            $query['BandwidthType'] = $request->bandwidthType;
        }
        if (!Utils::isUnset($request->cenBandwidthPackageId)) {
            $query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentDescription)) {
            $query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentName)) {
            $query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTransitRouterPeerAttachmentAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTransitRouterPeerAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateTransitRouterPeerAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of an inter-region connection.
     *   * *   If an inter-region connection is in the **Modifying** state, the inter-region connection is being modified. You can query the inter-region connection but cannot perform other operations.
     *   * *   If an inter-region connection is in the **Attached** state, the inter-region connection is modified.
     *   *
     * @param UpdateTransitRouterPeerAttachmentAttributeRequest $request UpdateTransitRouterPeerAttachmentAttributeRequest
     *
     * @return UpdateTransitRouterPeerAttachmentAttributeResponse UpdateTransitRouterPeerAttachmentAttributeResponse
     */
    public function updateTransitRouterPeerAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterPeerAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTransitRouterRouteEntryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateTransitRouterRouteEntryResponse
     */
    public function updateTransitRouterRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryDescription)) {
            $query['TransitRouterRouteEntryDescription'] = $request->transitRouterRouteEntryDescription;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryId)) {
            $query['TransitRouterRouteEntryId'] = $request->transitRouterRouteEntryId;
        }
        if (!Utils::isUnset($request->transitRouterRouteEntryName)) {
            $query['TransitRouterRouteEntryName'] = $request->transitRouterRouteEntryName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTransitRouterRouteEntry',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTransitRouterRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTransitRouterRouteEntryRequest $request
     *
     * @return UpdateTransitRouterRouteEntryResponse
     */
    public function updateTransitRouterRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTransitRouterRouteTableRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateTransitRouterRouteTableResponse
     */
    public function updateTransitRouterRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableOptions)) {
            $query['RouteTableOptions'] = $request->routeTableOptions;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableDescription)) {
            $query['TransitRouterRouteTableDescription'] = $request->transitRouterRouteTableDescription;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableId)) {
            $query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }
        if (!Utils::isUnset($request->transitRouterRouteTableName)) {
            $query['TransitRouterRouteTableName'] = $request->transitRouterRouteTableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTransitRouterRouteTable',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTransitRouterRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTransitRouterRouteTableRequest $request
     *
     * @return UpdateTransitRouterRouteTableResponse
     */
    public function updateTransitRouterRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterRouteTableWithOptions($request, $runtime);
    }

    /**
     * **UpdateTransitRouterVbrAttachmentAttribute** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of a VBR connection.
     *   * *   If a VBR connection is in the **Modifying** state, the VBR connection is being modified. You can query the VBR connection but cannot perform other operations.
     *   * *   If the VBR connection is in the **Attached** state, the VBR connection is modified.
     *   *
     * @param UpdateTransitRouterVbrAttachmentAttributeRequest $request UpdateTransitRouterVbrAttachmentAttributeRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTransitRouterVbrAttachmentAttributeResponse UpdateTransitRouterVbrAttachmentAttributeResponse
     */
    public function updateTransitRouterVbrAttachmentAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPublishRouteEnabled)) {
            $query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentDescription)) {
            $query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentName)) {
            $query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTransitRouterVbrAttachmentAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTransitRouterVbrAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateTransitRouterVbrAttachmentAttribute** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of a VBR connection.
     *   * *   If a VBR connection is in the **Modifying** state, the VBR connection is being modified. You can query the VBR connection but cannot perform other operations.
     *   * *   If the VBR connection is in the **Attached** state, the VBR connection is modified.
     *   *
     * @param UpdateTransitRouterVbrAttachmentAttributeRequest $request UpdateTransitRouterVbrAttachmentAttributeRequest
     *
     * @return UpdateTransitRouterVbrAttachmentAttributeResponse UpdateTransitRouterVbrAttachmentAttributeResponse
     */
    public function updateTransitRouterVbrAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterVbrAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * **UpdateTransitRouterVpcAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     *   * *   If a VPC connection is in the **Modifying** state, the VPC connection is being modified. You can query the VPC connection but cannot perform other operations.
     *   * *   If a VPC connection is in the **Attached** state, the VPC connection is modified.
     *   *
     * @param UpdateTransitRouterVpcAttachmentAttributeRequest $request UpdateTransitRouterVpcAttachmentAttributeRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTransitRouterVpcAttachmentAttributeResponse UpdateTransitRouterVpcAttachmentAttributeResponse
     */
    public function updateTransitRouterVpcAttachmentAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPublishRouteEnabled)) {
            $query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentDescription)) {
            $query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentName)) {
            $query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTransitRouterVpcAttachmentAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTransitRouterVpcAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateTransitRouterVpcAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     *   * *   If a VPC connection is in the **Modifying** state, the VPC connection is being modified. You can query the VPC connection but cannot perform other operations.
     *   * *   If a VPC connection is in the **Attached** state, the VPC connection is modified.
     *   *
     * @param UpdateTransitRouterVpcAttachmentAttributeRequest $request UpdateTransitRouterVpcAttachmentAttributeRequest
     *
     * @return UpdateTransitRouterVpcAttachmentAttributeResponse UpdateTransitRouterVpcAttachmentAttributeResponse
     */
    public function updateTransitRouterVpcAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterVpcAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * *   When you add a zone and a vSwitch for a VPC connection, make sure that the vSwitch has at least one idle IP address. When you modify the zones and vSwitches of a VPC connection, the Enterprise Edition transit router creates an elastic network interface (ENI) in the vSwitch. The ENI occupies one IP address in the vSwitch. The ENI forwards traffic between the VPC and the Enterprise Edition transit router.
     *   * *   **UpdateTransitRouterVpcAttachmentZones** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     *   *     *   If a VPC connection is in the **Modifying** state, the VPC connection is being modified. You can query the VPC connection but cannot perform other operations.
     *   *     *   If a VPC connection is in the **Attached** state, the VPC connection is modified.
     *   *
     * @param UpdateTransitRouterVpcAttachmentZonesRequest $request UpdateTransitRouterVpcAttachmentZonesRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTransitRouterVpcAttachmentZonesResponse UpdateTransitRouterVpcAttachmentZonesResponse
     */
    public function updateTransitRouterVpcAttachmentZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addZoneMappings)) {
            $query['AddZoneMappings'] = $request->addZoneMappings;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->removeZoneMappings)) {
            $query['RemoveZoneMappings'] = $request->removeZoneMappings;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTransitRouterVpcAttachmentZones',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTransitRouterVpcAttachmentZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   When you add a zone and a vSwitch for a VPC connection, make sure that the vSwitch has at least one idle IP address. When you modify the zones and vSwitches of a VPC connection, the Enterprise Edition transit router creates an elastic network interface (ENI) in the vSwitch. The ENI occupies one IP address in the vSwitch. The ENI forwards traffic between the VPC and the Enterprise Edition transit router.
     *   * *   **UpdateTransitRouterVpcAttachmentZones** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     *   *     *   If a VPC connection is in the **Modifying** state, the VPC connection is being modified. You can query the VPC connection but cannot perform other operations.
     *   *     *   If a VPC connection is in the **Attached** state, the VPC connection is modified.
     *   *
     * @param UpdateTransitRouterVpcAttachmentZonesRequest $request UpdateTransitRouterVpcAttachmentZonesRequest
     *
     * @return UpdateTransitRouterVpcAttachmentZonesResponse UpdateTransitRouterVpcAttachmentZonesResponse
     */
    public function updateTransitRouterVpcAttachmentZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterVpcAttachmentZonesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTransitRouterVpnAttachmentAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return UpdateTransitRouterVpnAttachmentAttributeResponse
     */
    public function updateTransitRouterVpnAttachmentAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPublishRouteEnabled)) {
            $query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentDescription)) {
            $query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentId)) {
            $query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }
        if (!Utils::isUnset($request->transitRouterAttachmentName)) {
            $query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTransitRouterVpnAttachmentAttribute',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTransitRouterVpnAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTransitRouterVpnAttachmentAttributeRequest $request
     *
     * @return UpdateTransitRouterVpnAttachmentAttributeResponse
     */
    public function updateTransitRouterVpnAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterVpnAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * @param WithdrawPublishedRouteEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return WithdrawPublishedRouteEntriesResponse
     */
    public function withdrawPublishedRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $query['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceRouteTableId)) {
            $query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $query['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WithdrawPublishedRouteEntries',
            'version'     => '2017-09-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WithdrawPublishedRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WithdrawPublishedRouteEntriesRequest $request
     *
     * @return WithdrawPublishedRouteEntriesResponse
     */
    public function withdrawPublishedRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawPublishedRouteEntriesWithOptions($request, $runtime);
    }
}
