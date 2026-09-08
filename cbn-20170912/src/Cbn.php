<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterEcrAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterEcrAttachmentResponse;
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
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpcAttachmentShrinkRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpnAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpnAttachmentResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouteTableAggregationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouteTableAggregationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouteTableAggregationShrinkRequest;
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
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterEcrAttachmentRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteTransitRouterEcrAttachmentResponse;
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
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterEcrAttachmentsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterEcrAttachmentsResponse;
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
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyGrantInstanceToTransitRouterRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyGrantInstanceToTransitRouterResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTrafficMatchRuleToTrafficMarkingPolicyRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTrafficMatchRuleToTrafficMarkingPolicyResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCidrRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCidrResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterMulticastDomainRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterMulticastDomainResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouteTableAggregationRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouteTableAggregationResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouteTableAggregationShrinkRequest;
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
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterEcrAttachmentAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterEcrAttachmentAttributeResponse;
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
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentAttributeShrinkRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpnAttachmentAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpnAttachmentAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\WithdrawPublishedRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\WithdrawPublishedRouteEntriesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Activates a flow log to start capturing traffic of specified resources.
     *
     * @remarks
     * - After a flow log is created, it is in the Active state by default. If you stopped a flow log, you can call this operation to reactivate it.
     * - `ActiveFlowLog` is an asynchronous operation. After you send a request, the system returns a **RequestId**, but activate flow log is not fully activated. The activation task is still running in the background. You can call the `DescribeFlowlogs` operation to query the status of activate flow log.
     *
     *     - If activate flow log is in the **Modifying** state, activate flow log is being activated. In this state, you can only perform query operations.
     *     - If activate flow log is in the **Active** state, activate flow log is activated.
     *
     * @param request - ActiveFlowLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActiveFlowLogResponse
     *
     * @param ActiveFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ActiveFlowLogResponse
     */
    public function activeFlowLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->flowLogId) {
            @$query['FlowLogId'] = $request->flowLogId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActiveFlowLog',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActiveFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates a flow log to start capturing traffic of specified resources.
     *
     * @remarks
     * - After a flow log is created, it is in the Active state by default. If you stopped a flow log, you can call this operation to reactivate it.
     * - `ActiveFlowLog` is an asynchronous operation. After you send a request, the system returns a **RequestId**, but activate flow log is not fully activated. The activation task is still running in the background. You can call the `DescribeFlowlogs` operation to query the status of activate flow log.
     *
     *     - If activate flow log is in the **Modifying** state, activate flow log is being activated. In this state, you can only perform query operations.
     *     - If activate flow log is in the **Active** state, activate flow log is activated.
     *
     * @param request - ActiveFlowLogRequest
     *
     * @returns ActiveFlowLogResponse
     *
     * @param ActiveFlowLogRequest $request
     *
     * @return ActiveFlowLogResponse
     */
    public function activeFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeFlowLogWithOptions($request, $runtime);
    }

    /**
     * Adds traffic classification rules to a traffic marking policy by calling the AddTrafficMatchRuleToTrafficMarkingPolicy operation.
     *
     * @remarks
     * *AddTrafficMatchRuleToTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the traffic classification rule is not yet created. The creation task continues to run in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of the traffic classification rule.
     * - If the traffic classification rule is in the **Creating** state, the rule is being created. In this state, you can only query the rule and cannot perform other operations on it.
     * - If the traffic classification rule is in the **Active** state, the rule is created.
     *
     * @param request - AddTrafficMatchRuleToTrafficMarkingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTrafficMatchRuleToTrafficMarkingPolicyResponse
     *
     * @param AddTrafficMatchRuleToTrafficMarkingPolicyRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return AddTrafficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function addTrafficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkingPolicyId) {
            @$query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }

        if (null !== $request->trafficMatchRules) {
            @$query['TrafficMatchRules'] = $request->trafficMatchRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTrafficMatchRuleToTrafficMarkingPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTrafficMatchRuleToTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds traffic classification rules to a traffic marking policy by calling the AddTrafficMatchRuleToTrafficMarkingPolicy operation.
     *
     * @remarks
     * *AddTrafficMatchRuleToTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the traffic classification rule is not yet created. The creation task continues to run in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of the traffic classification rule.
     * - If the traffic classification rule is in the **Creating** state, the rule is being created. In this state, you can only query the rule and cannot perform other operations on it.
     * - If the traffic classification rule is in the **Active** state, the rule is created.
     *
     * @param request - AddTrafficMatchRuleToTrafficMarkingPolicyRequest
     *
     * @returns AddTrafficMatchRuleToTrafficMarkingPolicyResponse
     *
     * @param AddTrafficMatchRuleToTrafficMarkingPolicyRequest $request
     *
     * @return AddTrafficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function addTrafficMatchRuleToTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTrafficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * Adds traffic classification rules to a traffic marking policy.
     *
     * @remarks
     * ### Precautions
     * The **AddTraficMatchRuleToTrafficMarkingPolicy** operation is deprecated and will be discontinued. To add traffic classification rules to a traffic marking policy, use the [AddTrafficMatchRuleToTrafficMarkingPolicy](https://help.aliyun.com/document_detail/427602.html) operation. This documentation is no longer maintained.
     *
     * @deprecated openAPI AddTraficMatchRuleToTrafficMarkingPolicy is deprecated, please use Cbn::2017-09-12::AddTrafficMatchRuleToTrafficMarkingPolicy instead
     *
     * @param request - AddTraficMatchRuleToTrafficMarkingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTraficMatchRuleToTrafficMarkingPolicyResponse
     *
     * @param AddTraficMatchRuleToTrafficMarkingPolicyRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return AddTraficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function addTraficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkingPolicyId) {
            @$query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }

        if (null !== $request->trafficMatchRules) {
            @$query['TrafficMatchRules'] = $request->trafficMatchRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTraficMatchRuleToTrafficMarkingPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTraficMatchRuleToTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Adds traffic classification rules to a traffic marking policy.
     *
     * @remarks
     * ### Precautions
     * The **AddTraficMatchRuleToTrafficMarkingPolicy** operation is deprecated and will be discontinued. To add traffic classification rules to a traffic marking policy, use the [AddTrafficMatchRuleToTrafficMarkingPolicy](https://help.aliyun.com/document_detail/427602.html) operation. This documentation is no longer maintained.
     *
     * @deprecated openAPI AddTraficMatchRuleToTrafficMarkingPolicy is deprecated, please use Cbn::2017-09-12::AddTrafficMatchRuleToTrafficMarkingPolicy instead
     *
     * @param request - AddTraficMatchRuleToTrafficMarkingPolicyRequest
     *
     * @returns AddTraficMatchRuleToTrafficMarkingPolicyResponse
     *
     * @param AddTraficMatchRuleToTrafficMarkingPolicyRequest $request
     *
     * @return AddTraficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function addTraficMatchRuleToTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTraficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * Associates a bandwidth package instance with a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * A CEN instance supports binding multiple bandwidth packages, but does not support binding multiple bandwidth packages with the same connected areas.
     * For example, if a CEN instance already has a bandwidth package bound for the Chinese mainland-to-Chinese mainland connected areas, you cannot bind another bandwidth package for the Chinese mainland-to-Chinese mainland connected areas. However, you can bind a bandwidth package for the Chinese mainland-to-North America connected areas.
     *
     * @param request - AssociateCenBandwidthPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateCenBandwidthPackageResponse
     *
     * @param AssociateCenBandwidthPackageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AssociateCenBandwidthPackageResponse
     */
    public function associateCenBandwidthPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenBandwidthPackageId) {
            @$query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateCenBandwidthPackage',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateCenBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a bandwidth package instance with a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * A CEN instance supports binding multiple bandwidth packages, but does not support binding multiple bandwidth packages with the same connected areas.
     * For example, if a CEN instance already has a bandwidth package bound for the Chinese mainland-to-Chinese mainland connected areas, you cannot bind another bandwidth package for the Chinese mainland-to-Chinese mainland connected areas. However, you can bind a bandwidth package for the Chinese mainland-to-North America connected areas.
     *
     * @param request - AssociateCenBandwidthPackageRequest
     *
     * @returns AssociateCenBandwidthPackageResponse
     *
     * @param AssociateCenBandwidthPackageRequest $request
     *
     * @return AssociateCenBandwidthPackageResponse
     */
    public function associateCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * Creates a route table association.
     *
     * @remarks
     * After you create a network instance connection, you must set the association and forwarding relationship for it by associating the network instance connection with an Enterprise Edition transit router route table. After the association is created, the Enterprise Edition transit router forwards traffic of the network instance based on the route entries in the route table. Before you invoke this operation, take note of the following information:
     * - Only Enterprise Edition transit router route tables support route table associations. For information about the regions and zones that support Enterprise Edition transit routers, see [What is Cloud Enterprise Network (CEN)?](https://help.aliyun.com/document_detail/181681.html).
     * - Each network instance connection can be associated with only one Enterprise Edition transit router route table.
     * - **AssociateTransitRouterAttachmentWithRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the association between the network instance connection and the route table is not complete. The association task is still running in the background. You can call **ListTransitRouterRouteTableAssociations** to query the association status between the network instance connection and the route table.
     *     - If the association status is **Associating**, the network instance connection is being associated with the route table. In this state, you can only query the association but cannot perform other operations.
     *     - If the association status is **Active**, the network instance connection is associated with the route table.
     *
     * @param request - AssociateTransitRouterAttachmentWithRouteTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateTransitRouterAttachmentWithRouteTableResponse
     *
     * @param AssociateTransitRouterAttachmentWithRouteTableRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return AssociateTransitRouterAttachmentWithRouteTableResponse
     */
    public function associateTransitRouterAttachmentWithRouteTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateTransitRouterAttachmentWithRouteTable',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateTransitRouterAttachmentWithRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a route table association.
     *
     * @remarks
     * After you create a network instance connection, you must set the association and forwarding relationship for it by associating the network instance connection with an Enterprise Edition transit router route table. After the association is created, the Enterprise Edition transit router forwards traffic of the network instance based on the route entries in the route table. Before you invoke this operation, take note of the following information:
     * - Only Enterprise Edition transit router route tables support route table associations. For information about the regions and zones that support Enterprise Edition transit routers, see [What is Cloud Enterprise Network (CEN)?](https://help.aliyun.com/document_detail/181681.html).
     * - Each network instance connection can be associated with only one Enterprise Edition transit router route table.
     * - **AssociateTransitRouterAttachmentWithRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the association between the network instance connection and the route table is not complete. The association task is still running in the background. You can call **ListTransitRouterRouteTableAssociations** to query the association status between the network instance connection and the route table.
     *     - If the association status is **Associating**, the network instance connection is being associated with the route table. In this state, you can only query the association but cannot perform other operations.
     *     - If the association status is **Active**, the network instance connection is associated with the route table.
     *
     * @param request - AssociateTransitRouterAttachmentWithRouteTableRequest
     *
     * @returns AssociateTransitRouterAttachmentWithRouteTableResponse
     *
     * @param AssociateTransitRouterAttachmentWithRouteTableRequest $request
     *
     * @return AssociateTransitRouterAttachmentWithRouteTableResponse
     */
    public function associateTransitRouterAttachmentWithRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateTransitRouterAttachmentWithRouteTableWithOptions($request, $runtime);
    }

    /**
     * Associates a vSwitch in a virtual private cloud (VPC) with a multicast domain by calling the AssociateTransitRouterMulticastDomain operation so that resources in the VPC can communicate through multicast.
     *
     * @remarks
     * - A vSwitch can be associated with only one multicast domain. Make sure that the vSwitch to be associated is not already associated with another multicast domain. To disassociate a vSwitch from a multicast domain, see [DisassociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429774.html).
     * - **AssociateTransitRouterMulticastDomain** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the association between the vSwitch and the multicast domain is not yet complete. The association task continues to run in the background. You can call **ListTransitRouterMulticastDomainAssociations** to query the association status between the vSwitch and the multicast domain.
     *     - If the association status is **Associating**, the association between the vSwitch and the multicast domain is being established. In this state, you can only query the vSwitch but cannot perform other operations.
     *     - If the association status is **Associated**, the association between the vSwitch and the multicast domain is established.
     * - The VPC to which the vSwitch belongs must be connected to an Enterprise Edition transit router. To create a VPC connection, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/468237.html).
     *
     * @param request - AssociateTransitRouterMulticastDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateTransitRouterMulticastDomainResponse
     *
     * @param AssociateTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return AssociateTransitRouterMulticastDomainResponse
     */
    public function associateTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateTransitRouterMulticastDomain',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a vSwitch in a virtual private cloud (VPC) with a multicast domain by calling the AssociateTransitRouterMulticastDomain operation so that resources in the VPC can communicate through multicast.
     *
     * @remarks
     * - A vSwitch can be associated with only one multicast domain. Make sure that the vSwitch to be associated is not already associated with another multicast domain. To disassociate a vSwitch from a multicast domain, see [DisassociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429774.html).
     * - **AssociateTransitRouterMulticastDomain** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the association between the vSwitch and the multicast domain is not yet complete. The association task continues to run in the background. You can call **ListTransitRouterMulticastDomainAssociations** to query the association status between the vSwitch and the multicast domain.
     *     - If the association status is **Associating**, the association between the vSwitch and the multicast domain is being established. In this state, you can only query the vSwitch but cannot perform other operations.
     *     - If the association status is **Associated**, the association between the vSwitch and the multicast domain is established.
     * - The VPC to which the vSwitch belongs must be connected to an Enterprise Edition transit router. To create a VPC connection, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/468237.html).
     *
     * @param request - AssociateTransitRouterMulticastDomainRequest
     *
     * @returns AssociateTransitRouterMulticastDomainResponse
     *
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
     * Attaches a network instance to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * CEN supports attaching cross-account network instances. Before attaching a cross-account network instance, the CEN instance must be authorized by the cross-account network instance:
     * - For cross-account VPC instance authorization, refer to [GrantInstanceToCen](https://help.aliyun.com/document_detail/126224.html).
     * - For cross-account Cloud Connect Network instance authorization, refer to [GrantInstanceToCbn](https://help.aliyun.com/document_detail/126141.html).
     * - Cross-account border router instance authorization is not available by default. To use this feature, contact your account manager.
     *
     * @param request - AttachCenChildInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachCenChildInstanceResponse
     *
     * @param AttachCenChildInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AttachCenChildInstanceResponse
     */
    public function attachCenChildInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceOwnerId) {
            @$query['ChildInstanceOwnerId'] = $request->childInstanceOwnerId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachCenChildInstance',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachCenChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a network instance to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * CEN supports attaching cross-account network instances. Before attaching a cross-account network instance, the CEN instance must be authorized by the cross-account network instance:
     * - For cross-account VPC instance authorization, refer to [GrantInstanceToCen](https://help.aliyun.com/document_detail/126224.html).
     * - For cross-account Cloud Connect Network instance authorization, refer to [GrantInstanceToCbn](https://help.aliyun.com/document_detail/126141.html).
     * - Cross-account border router instance authorization is not available by default. To use this feature, contact your account manager.
     *
     * @param request - AttachCenChildInstanceRequest
     *
     * @returns AttachCenChildInstanceResponse
     *
     * @param AttachCenChildInstanceRequest $request
     *
     * @return AttachCenChildInstanceResponse
     */
    public function attachCenChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachCenChildInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries whether the transit router service is activated for the current Alibaba Cloud account.
     *
     * @param request - CheckTransitRouterServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckTransitRouterServiceResponse
     *
     * @param CheckTransitRouterServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckTransitRouterServiceResponse
     */
    public function checkTransitRouterServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckTransitRouterService',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckTransitRouterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the transit router service is activated for the current Alibaba Cloud account.
     *
     * @param request - CheckTransitRouterServiceRequest
     *
     * @returns CheckTransitRouterServiceResponse
     *
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
     * A Cloud Enterprise Network (CEN) instance is the fundamental resource for managing an integrated network. A CEN instance manages one network and can span one or more regions. Before enabling connectivity between network instances, call the CreateCen operation to create a CEN instance.
     *
     * @remarks
     * The **CreateCen** operation is asynchronous. The system returns a CEN instance ID before the CEN instance is fully created, while the creation task continues in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If the CEN instance is in the **Creating** state, the CEN instance is being created. In this state, you can only query the CEN instance but cannot perform other operations on it.
     * - If the CEN instance is in the **Active** state, the CEN instance is created.
     *
     * @param request - CreateCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCenResponse
     *
     * @param CreateCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateCenResponse
     */
    public function createCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->protectionLevel) {
            @$query['ProtectionLevel'] = $request->protectionLevel;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A Cloud Enterprise Network (CEN) instance is the fundamental resource for managing an integrated network. A CEN instance manages one network and can span one or more regions. Before enabling connectivity between network instances, call the CreateCen operation to create a CEN instance.
     *
     * @remarks
     * The **CreateCen** operation is asynchronous. The system returns a CEN instance ID before the CEN instance is fully created, while the creation task continues in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If the CEN instance is in the **Creating** state, the CEN instance is being created. In this state, you can only query the CEN instance but cannot perform other operations on it.
     * - If the CEN instance is in the **Active** state, the CEN instance is created.
     *
     * @param request - CreateCenRequest
     *
     * @returns CreateCenResponse
     *
     * @param CreateCenRequest $request
     *
     * @return CreateCenResponse
     */
    public function createCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenWithOptions($request, $runtime);
    }

    /**
     * Creates a bandwidth plan for Cloud Enterprise Network (CEN) to enable cross-region connectivity between network instances.
     *
     * @remarks
     * - When you create a bandwidth plan instance, you must specify the connected areas. An area of a bandwidth plan is a collection of regions. Each area contains one or more Alibaba Cloud regions. Select the connected areas based on the regions that you want to connect. For more information about the relationship between areas and regions, see [Purchase a bandwidth plan](https://help.aliyun.com/document_detail/181560.html).
     * - For more information about the billing details of bandwidth plans, see [Billing](https://help.aliyun.com/document_detail/189836.html).
     * - **CreateCenBandwidthPackage** is an asynchronous operation. After you invoke the operation, the system returns a bandwidth plan instance ID but the bandwidth plan is not yet created. The creation node is still running in the background. You can invoke the **DescribeCenBandwidthPackages** operation to query the status of the bandwidth plan. When the bandwidth plan is in the **Idle** or **InUse** state, the bandwidth plan is created.
     *
     * @param request - CreateCenBandwidthPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCenBandwidthPackageResponse
     *
     * @param CreateCenBandwidthPackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCenBandwidthPackageResponse
     */
    public function createCenBandwidthPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewDuration) {
            @$query['AutoRenewDuration'] = $request->autoRenewDuration;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->bandwidthPackageChargeType) {
            @$query['BandwidthPackageChargeType'] = $request->bandwidthPackageChargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->geographicRegionAId) {
            @$query['GeographicRegionAId'] = $request->geographicRegionAId;
        }

        if (null !== $request->geographicRegionBId) {
            @$query['GeographicRegionBId'] = $request->geographicRegionBId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCenBandwidthPackage',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCenBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a bandwidth plan for Cloud Enterprise Network (CEN) to enable cross-region connectivity between network instances.
     *
     * @remarks
     * - When you create a bandwidth plan instance, you must specify the connected areas. An area of a bandwidth plan is a collection of regions. Each area contains one or more Alibaba Cloud regions. Select the connected areas based on the regions that you want to connect. For more information about the relationship between areas and regions, see [Purchase a bandwidth plan](https://help.aliyun.com/document_detail/181560.html).
     * - For more information about the billing details of bandwidth plans, see [Billing](https://help.aliyun.com/document_detail/189836.html).
     * - **CreateCenBandwidthPackage** is an asynchronous operation. After you invoke the operation, the system returns a bandwidth plan instance ID but the bandwidth plan is not yet created. The creation node is still running in the background. You can invoke the **DescribeCenBandwidthPackages** operation to query the status of the bandwidth plan. When the bandwidth plan is in the **Idle** or **InUse** state, the bandwidth plan is created.
     *
     * @param request - CreateCenBandwidthPackageRequest
     *
     * @returns CreateCenBandwidthPackageResponse
     *
     * @param CreateCenBandwidthPackageRequest $request
     *
     * @return CreateCenBandwidthPackageResponse
     */
    public function createCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * Adds a route entry to a network instance connected to an Enterprise Edition transit router. The destination CIDR block points to the transit router in the current region as the next hop.
     *
     * @remarks
     * - You can add route entries only to Virtual Private Cloud (VPC) instances and Virtual Border Router (VBR) instances that are connected to an Enterprise Edition transit router.
     * - The next hop of the route entry defaults to the **transit router connection** (network instance connection) and cannot be modified.
     * - **CreateCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the route entry is not yet created. The creation task continues to run in the background. You can call the **DescribeRouteEntryList** operation of VPC to query the status of the route entry.
     *     - If the route entry is in the **Pending** state, the route entry is being created. In this state, you can only query the route entry but cannot perform other operations.
     *     - If the route entry is in the **Available** state, the route entry is created.
     *
     * @param request - CreateCenChildInstanceRouteEntryToAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCenChildInstanceRouteEntryToAttachmentResponse
     *
     * @param CreateCenChildInstanceRouteEntryToAttachmentRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return CreateCenChildInstanceRouteEntryToAttachmentResponse
     */
    public function createCenChildInstanceRouteEntryToAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeTableId) {
            @$query['RouteTableId'] = $request->routeTableId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCenChildInstanceRouteEntryToAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCenChildInstanceRouteEntryToAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a route entry to a network instance connected to an Enterprise Edition transit router. The destination CIDR block points to the transit router in the current region as the next hop.
     *
     * @remarks
     * - You can add route entries only to Virtual Private Cloud (VPC) instances and Virtual Border Router (VBR) instances that are connected to an Enterprise Edition transit router.
     * - The next hop of the route entry defaults to the **transit router connection** (network instance connection) and cannot be modified.
     * - **CreateCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the route entry is not yet created. The creation task continues to run in the background. You can call the **DescribeRouteEntryList** operation of VPC to query the status of the route entry.
     *     - If the route entry is in the **Pending** state, the route entry is being created. In this state, you can only query the route entry but cannot perform other operations.
     *     - If the route entry is in the **Available** state, the route entry is created.
     *
     * @param request - CreateCenChildInstanceRouteEntryToAttachmentRequest
     *
     * @returns CreateCenChildInstanceRouteEntryToAttachmentResponse
     *
     * @param CreateCenChildInstanceRouteEntryToAttachmentRequest $request
     *
     * @return CreateCenChildInstanceRouteEntryToAttachmentResponse
     */
    public function createCenChildInstanceRouteEntryToAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenChildInstanceRouteEntryToAttachmentWithOptions($request, $runtime);
    }

    /**
     * Adds a route entry to a network instance by calling the CreateCenChildInstanceRouteEntryToCen operation.
     *
     * @remarks
     * - The CreateCenChildInstanceRouteEntryToCen operation is not available by default. To use this operation, <props="china">[submit a ticket](https://selfservice.console.aliyun.com/ticket/category/cbn/today)<props="intl">[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * - The CreateCenChildInstanceRouteEntryToCen operation does not support adding route entries to network instances in an Enterprise Edition transit router.
     * - The next hop of the route entry defaults to the regional gateway of Cloud Enterprise Network (CEN) and cannot be modified.
     *
     * @param request - CreateCenChildInstanceRouteEntryToCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCenChildInstanceRouteEntryToCenResponse
     *
     * @param CreateCenChildInstanceRouteEntryToCenRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return CreateCenChildInstanceRouteEntryToCenResponse
     */
    public function createCenChildInstanceRouteEntryToCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceAliUid) {
            @$query['ChildInstanceAliUid'] = $request->childInstanceAliUid;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeTableId) {
            @$query['RouteTableId'] = $request->routeTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCenChildInstanceRouteEntryToCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCenChildInstanceRouteEntryToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a route entry to a network instance by calling the CreateCenChildInstanceRouteEntryToCen operation.
     *
     * @remarks
     * - The CreateCenChildInstanceRouteEntryToCen operation is not available by default. To use this operation, <props="china">[submit a ticket](https://selfservice.console.aliyun.com/ticket/category/cbn/today)<props="intl">[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * - The CreateCenChildInstanceRouteEntryToCen operation does not support adding route entries to network instances in an Enterprise Edition transit router.
     * - The next hop of the route entry defaults to the regional gateway of Cloud Enterprise Network (CEN) and cannot be modified.
     *
     * @param request - CreateCenChildInstanceRouteEntryToCenRequest
     *
     * @returns CreateCenChildInstanceRouteEntryToCenResponse
     *
     * @param CreateCenChildInstanceRouteEntryToCenRequest $request
     *
     * @return CreateCenChildInstanceRouteEntryToCenResponse
     */
    public function createCenChildInstanceRouteEntryToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenChildInstanceRouteEntryToCenWithOptions($request, $runtime);
    }

    /**
     * Creates a cross-region traffic scheduling policy for an Enterprise Edition transit router to optimize and control network traffic across regions.
     *
     * @remarks
     * - Only inter-region connections of Enterprise Edition transit routers support the creation of cross-region traffic scheduling policies.
     * - The traffic scheduling feature takes effect only in the outbound direction of an Enterprise Edition transit router.
     *      For example, if you create an inter-region connection between the China (Hangzhou) and China (Qingdao) regions and configure the traffic scheduling feature on the transit router in the China (Hangzhou) region, the traffic scheduling feature can guarantee bandwidth for various services when traffic flows from the China (Hangzhou) region to the China (Qingdao) region. However, the traffic scheduling feature does not guarantee service bandwidth when traffic flows from the China (Qingdao) region to the China (Hangzhou) region.
     * - **CreateCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a traffic scheduling policy ID but the policy is not yet created. The creation task continues to run in the background. You can call **ListCenInterRegionTrafficQosPolicies** to query the status of the traffic scheduling policy.
     *     - If the traffic scheduling policy is in the **Creating** state, the policy is being created. In this state, you can only query the policy but cannot perform other operations on it.
     *     - If the traffic scheduling policy is in the **Active** state, the policy is created.
     * ### Before you begin
     * Before you call **CreateCenInterRegionTrafficQosPolicy**, make sure that the following conditions are met:
     * - An inter-region connection is created. For more information, see [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html).
     * - A traffic marking policy is created. For more information, see [CreateTrafficMarkingPolicy](https://help.aliyun.com/document_detail/419025.html).
     *
     * @param request - CreateCenInterRegionTrafficQosPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCenInterRegionTrafficQosPolicyResponse
     *
     * @param CreateCenInterRegionTrafficQosPolicyRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateCenInterRegionTrafficQosPolicyResponse
     */
    public function createCenInterRegionTrafficQosPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidthGuaranteeMode) {
            @$query['BandwidthGuaranteeMode'] = $request->bandwidthGuaranteeMode;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->consoleDryRun) {
            @$query['ConsoleDryRun'] = $request->consoleDryRun;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficQosPolicyDescription) {
            @$query['TrafficQosPolicyDescription'] = $request->trafficQosPolicyDescription;
        }

        if (null !== $request->trafficQosPolicyName) {
            @$query['TrafficQosPolicyName'] = $request->trafficQosPolicyName;
        }

        if (null !== $request->trafficQosQueues) {
            @$query['TrafficQosQueues'] = $request->trafficQosQueues;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCenInterRegionTrafficQosPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCenInterRegionTrafficQosPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cross-region traffic scheduling policy for an Enterprise Edition transit router to optimize and control network traffic across regions.
     *
     * @remarks
     * - Only inter-region connections of Enterprise Edition transit routers support the creation of cross-region traffic scheduling policies.
     * - The traffic scheduling feature takes effect only in the outbound direction of an Enterprise Edition transit router.
     *      For example, if you create an inter-region connection between the China (Hangzhou) and China (Qingdao) regions and configure the traffic scheduling feature on the transit router in the China (Hangzhou) region, the traffic scheduling feature can guarantee bandwidth for various services when traffic flows from the China (Hangzhou) region to the China (Qingdao) region. However, the traffic scheduling feature does not guarantee service bandwidth when traffic flows from the China (Qingdao) region to the China (Hangzhou) region.
     * - **CreateCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a traffic scheduling policy ID but the policy is not yet created. The creation task continues to run in the background. You can call **ListCenInterRegionTrafficQosPolicies** to query the status of the traffic scheduling policy.
     *     - If the traffic scheduling policy is in the **Creating** state, the policy is being created. In this state, you can only query the policy but cannot perform other operations on it.
     *     - If the traffic scheduling policy is in the **Active** state, the policy is created.
     * ### Before you begin
     * Before you call **CreateCenInterRegionTrafficQosPolicy**, make sure that the following conditions are met:
     * - An inter-region connection is created. For more information, see [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html).
     * - A traffic marking policy is created. For more information, see [CreateTrafficMarkingPolicy](https://help.aliyun.com/document_detail/419025.html).
     *
     * @param request - CreateCenInterRegionTrafficQosPolicyRequest
     *
     * @returns CreateCenInterRegionTrafficQosPolicyResponse
     *
     * @param CreateCenInterRegionTrafficQosPolicyRequest $request
     *
     * @return CreateCenInterRegionTrafficQosPolicyResponse
     */
    public function createCenInterRegionTrafficQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenInterRegionTrafficQosPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a queue configuration under a traffic scheduling policy. If you need to manage different types and priorities of network traffic to ensure the performance of critical service traffic and comply with Service-Level Agreements (SLAs), you can call the CreateCenInterRegionTrafficQosQueue operation.
     *
     * @remarks
     * *CreateCenInterRegionTrafficQosQueue** is an asynchronous operation. After you send a request, the system returns a queue ID but the queue is not yet created. The creation task continues to run in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of the traffic scheduling policy to determine the creation status of the queue. When you call this operation, you must specify the **TrafficQosPolicyId** parameter.
     *
     * - If the traffic scheduling policy is in the **Modifying** state, the queue is being created. In this state, you can only query the traffic scheduling policy and queue. You cannot perform other operations.
     * - If the traffic scheduling policy is in the **Active** state, the queue is created.
     *
     * @param request - CreateCenInterRegionTrafficQosQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCenInterRegionTrafficQosQueueResponse
     *
     * @param CreateCenInterRegionTrafficQosQueueRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateCenInterRegionTrafficQosQueueResponse
     */
    public function createCenInterRegionTrafficQosQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->dscps) {
            @$query['Dscps'] = $request->dscps;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qosQueueDescription) {
            @$query['QosQueueDescription'] = $request->qosQueueDescription;
        }

        if (null !== $request->qosQueueName) {
            @$query['QosQueueName'] = $request->qosQueueName;
        }

        if (null !== $request->remainBandwidthPercent) {
            @$query['RemainBandwidthPercent'] = $request->remainBandwidthPercent;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficQosPolicyId) {
            @$query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCenInterRegionTrafficQosQueue',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCenInterRegionTrafficQosQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a queue configuration under a traffic scheduling policy. If you need to manage different types and priorities of network traffic to ensure the performance of critical service traffic and comply with Service-Level Agreements (SLAs), you can call the CreateCenInterRegionTrafficQosQueue operation.
     *
     * @remarks
     * *CreateCenInterRegionTrafficQosQueue** is an asynchronous operation. After you send a request, the system returns a queue ID but the queue is not yet created. The creation task continues to run in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of the traffic scheduling policy to determine the creation status of the queue. When you call this operation, you must specify the **TrafficQosPolicyId** parameter.
     *
     * - If the traffic scheduling policy is in the **Modifying** state, the queue is being created. In this state, you can only query the traffic scheduling policy and queue. You cannot perform other operations.
     * - If the traffic scheduling policy is in the **Active** state, the queue is created.
     *
     * @param request - CreateCenInterRegionTrafficQosQueueRequest
     *
     * @returns CreateCenInterRegionTrafficQosQueueResponse
     *
     * @param CreateCenInterRegionTrafficQosQueueRequest $request
     *
     * @return CreateCenInterRegionTrafficQosQueueResponse
     */
    public function createCenInterRegionTrafficQosQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenInterRegionTrafficQosQueueWithOptions($request, $runtime);
    }

    /**
     * Creates a routing policy. The routing policy feature allows you to filter route information and customize the management of cloud network connectivity.
     *
     * @remarks
     * Routing policies are sorted by priority. A smaller priority value indicates a higher priority. Each routing policy is a collection of conditional statements and execution statements. When a routing policy is executed, routes are matched against conditional statements starting from the routing policy with the highest priority. For routes that match all conditions, the routing policy either permits or denies the routes based on the policy action. Routes that are permitted can have their attributes modified. For routes that do not match all conditions, the system permits the routes by default. For more information, see [Routing policy overview](https://help.aliyun.com/document_detail/124157.html).
     * `CreateCenRouteMap` is an asynchronous operation. After you call this operation, a routing policy ID is returned, but the routing policy has not been created. The system continues to create the routing policy in the background. You can call `DescribeCenRouteMaps` to query the status of the routing policy.
     * - If the routing policy is in the **Creating** state, the routing policy is being created. In this state, you can only perform query operations.
     * - If the routing policy is in the **Active** state, the routing policy is created.
     *
     * @param request - CreateCenRouteMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCenRouteMapResponse
     *
     * @param CreateCenRouteMapRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCenRouteMapResponse
     */
    public function createCenRouteMapWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asPathMatchMode) {
            @$query['AsPathMatchMode'] = $request->asPathMatchMode;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenRegionId) {
            @$query['CenRegionId'] = $request->cenRegionId;
        }

        if (null !== $request->cidrMatchMode) {
            @$query['CidrMatchMode'] = $request->cidrMatchMode;
        }

        if (null !== $request->communityMatchMode) {
            @$query['CommunityMatchMode'] = $request->communityMatchMode;
        }

        if (null !== $request->communityOperateMode) {
            @$query['CommunityOperateMode'] = $request->communityOperateMode;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destinationChildInstanceTypes) {
            @$query['DestinationChildInstanceTypes'] = $request->destinationChildInstanceTypes;
        }

        if (null !== $request->destinationCidrBlocks) {
            @$query['DestinationCidrBlocks'] = $request->destinationCidrBlocks;
        }

        if (null !== $request->destinationInstanceIds) {
            @$query['DestinationInstanceIds'] = $request->destinationInstanceIds;
        }

        if (null !== $request->destinationInstanceIdsReverseMatch) {
            @$query['DestinationInstanceIdsReverseMatch'] = $request->destinationInstanceIdsReverseMatch;
        }

        if (null !== $request->destinationRegionIds) {
            @$query['DestinationRegionIds'] = $request->destinationRegionIds;
        }

        if (null !== $request->destinationRouteTableIds) {
            @$query['DestinationRouteTableIds'] = $request->destinationRouteTableIds;
        }

        if (null !== $request->mapResult) {
            @$query['MapResult'] = $request->mapResult;
        }

        if (null !== $request->matchAddressType) {
            @$query['MatchAddressType'] = $request->matchAddressType;
        }

        if (null !== $request->matchAsns) {
            @$query['MatchAsns'] = $request->matchAsns;
        }

        if (null !== $request->matchCommunitySet) {
            @$query['MatchCommunitySet'] = $request->matchCommunitySet;
        }

        if (null !== $request->nextPriority) {
            @$query['NextPriority'] = $request->nextPriority;
        }

        if (null !== $request->operateCommunitySet) {
            @$query['OperateCommunitySet'] = $request->operateCommunitySet;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->preference) {
            @$query['Preference'] = $request->preference;
        }

        if (null !== $request->prependAsPath) {
            @$query['PrependAsPath'] = $request->prependAsPath;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeTypes) {
            @$query['RouteTypes'] = $request->routeTypes;
        }

        if (null !== $request->sourceChildInstanceTypes) {
            @$query['SourceChildInstanceTypes'] = $request->sourceChildInstanceTypes;
        }

        if (null !== $request->sourceInstanceIds) {
            @$query['SourceInstanceIds'] = $request->sourceInstanceIds;
        }

        if (null !== $request->sourceInstanceIdsReverseMatch) {
            @$query['SourceInstanceIdsReverseMatch'] = $request->sourceInstanceIdsReverseMatch;
        }

        if (null !== $request->sourceRegionIds) {
            @$query['SourceRegionIds'] = $request->sourceRegionIds;
        }

        if (null !== $request->sourceRouteTableIds) {
            @$query['SourceRouteTableIds'] = $request->sourceRouteTableIds;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        if (null !== $request->transmitDirection) {
            @$query['TransmitDirection'] = $request->transmitDirection;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCenRouteMap',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCenRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a routing policy. The routing policy feature allows you to filter route information and customize the management of cloud network connectivity.
     *
     * @remarks
     * Routing policies are sorted by priority. A smaller priority value indicates a higher priority. Each routing policy is a collection of conditional statements and execution statements. When a routing policy is executed, routes are matched against conditional statements starting from the routing policy with the highest priority. For routes that match all conditions, the routing policy either permits or denies the routes based on the policy action. Routes that are permitted can have their attributes modified. For routes that do not match all conditions, the system permits the routes by default. For more information, see [Routing policy overview](https://help.aliyun.com/document_detail/124157.html).
     * `CreateCenRouteMap` is an asynchronous operation. After you call this operation, a routing policy ID is returned, but the routing policy has not been created. The system continues to create the routing policy in the background. You can call `DescribeCenRouteMaps` to query the status of the routing policy.
     * - If the routing policy is in the **Creating** state, the routing policy is being created. In this state, you can only perform query operations.
     * - If the routing policy is in the **Active** state, the routing policy is created.
     *
     * @param request - CreateCenRouteMapRequest
     *
     * @returns CreateCenRouteMapResponse
     *
     * @param CreateCenRouteMapRequest $request
     *
     * @return CreateCenRouteMapResponse
     */
    public function createCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * Creates a flow log.
     *
     * @remarks
     * Flow logs help you catch traffic information transmitted by transit router instances and network instance connections (inter-region connections, VPC connections, VPN connections, ECR connections, and VBR connections). Before creating a flow log, note the following:
     * - Only Enterprise Edition transit routers support flow log creation.
     * - For traffic information of inter-region connections, flow logs catch only outbound traffic of the transit router. Inbound traffic of the transit router is not caught.
     *
     *     For example, an Elastic Computing Service (ECS) instance in the US (Silicon Valley) region accesses an ECS instance in the US (Virginia) region through Cloud Enterprise Network (CEN). After you configure a flow log for the transit router in the US (Virginia) region, you can view the packet information sent from the US (Virginia) ECS instance to the US (Silicon Valley) ECS instance in the Simple Log Service console. However, you cannot view the packet information sent from the US (Silicon Valley) ECS instance to the US (Virginia) ECS instance. To view the packet information sent from the US (Silicon Valley) ECS instance to the US (Virginia) ECS instance, configure a flow log on the transit router in the US (Silicon Valley) region.
     * - When a flow log catches traffic information of a VPC connection, it catches only the traffic transmitted by the transit router elastic network interface (ENI). To view traffic information of other ENIs in the VPC, see [VPC flow log overview](https://help.aliyun.com/document_detail/127150.html).
     * - The `CreateFlowlog` operation is asynchronous. After you send a request, the system returns a flow log ID while the flow log is still being created in the background. You can call the `DescribeFlowlogs` operation to query the status of the flow log.
     *     - If the flow log is in the **Creating** state, the flow log is being created. In this state, you can only perform query operations.
     *     - If the flow log is in the **Active** state, the flow log is created.
     * ### Before you begin
     * Before creating a flow log for a resource, make sure that you have created the required resources. For information about how to create each resource, see:
     * - [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/468237.html)
     * - [CreateTransitRouterEcrAttachment](https://help.aliyun.com/document_detail/2715446.html)
     * - [CreateTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/468249.html)
     * - [CreateTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/468243.html)
     * - [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/468270.html)
     * - [CreateTransitRouter](https://help.aliyun.com/document_detail/468222.html)
     *
     * @param request - CreateFlowlogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowlogResponse
     *
     * @param CreateFlowlogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowlogResponse
     */
    public function createFlowlogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->flowLogName) {
            @$query['FlowLogName'] = $request->flowLogName;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->logFormatString) {
            @$query['LogFormatString'] = $request->logFormatString;
        }

        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFlowlog',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlowlogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a flow log.
     *
     * @remarks
     * Flow logs help you catch traffic information transmitted by transit router instances and network instance connections (inter-region connections, VPC connections, VPN connections, ECR connections, and VBR connections). Before creating a flow log, note the following:
     * - Only Enterprise Edition transit routers support flow log creation.
     * - For traffic information of inter-region connections, flow logs catch only outbound traffic of the transit router. Inbound traffic of the transit router is not caught.
     *
     *     For example, an Elastic Computing Service (ECS) instance in the US (Silicon Valley) region accesses an ECS instance in the US (Virginia) region through Cloud Enterprise Network (CEN). After you configure a flow log for the transit router in the US (Virginia) region, you can view the packet information sent from the US (Virginia) ECS instance to the US (Silicon Valley) ECS instance in the Simple Log Service console. However, you cannot view the packet information sent from the US (Silicon Valley) ECS instance to the US (Virginia) ECS instance. To view the packet information sent from the US (Silicon Valley) ECS instance to the US (Virginia) ECS instance, configure a flow log on the transit router in the US (Silicon Valley) region.
     * - When a flow log catches traffic information of a VPC connection, it catches only the traffic transmitted by the transit router elastic network interface (ENI). To view traffic information of other ENIs in the VPC, see [VPC flow log overview](https://help.aliyun.com/document_detail/127150.html).
     * - The `CreateFlowlog` operation is asynchronous. After you send a request, the system returns a flow log ID while the flow log is still being created in the background. You can call the `DescribeFlowlogs` operation to query the status of the flow log.
     *     - If the flow log is in the **Creating** state, the flow log is being created. In this state, you can only perform query operations.
     *     - If the flow log is in the **Active** state, the flow log is created.
     * ### Before you begin
     * Before creating a flow log for a resource, make sure that you have created the required resources. For information about how to create each resource, see:
     * - [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/468237.html)
     * - [CreateTransitRouterEcrAttachment](https://help.aliyun.com/document_detail/2715446.html)
     * - [CreateTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/468249.html)
     * - [CreateTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/468243.html)
     * - [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/468270.html)
     * - [CreateTransitRouter](https://help.aliyun.com/document_detail/468222.html)
     *
     * @param request - CreateFlowlogRequest
     *
     * @returns CreateFlowlogResponse
     *
     * @param CreateFlowlogRequest $request
     *
     * @return CreateFlowlogResponse
     */
    public function createFlowlog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowlogWithOptions($request, $runtime);
    }

    /**
     * A traffic marking policy captures traffic that matches traffic classification rules and adds a Differentiated Services Code Point (DSCP) value to the traffic as a mark. Creates a traffic marking policy by calling CreateTrafficMarkingPolicy.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support creating traffic marking policies.
     * - **CreateTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a traffic marking policy ID but the traffic marking policy is not yet created. The system continues to create the traffic marking policy in the background. You can call **ListTrafficMarkingPolicies** to query the status of the traffic marking policy.
     *     - If the traffic marking policy is in the **Creating** state, the traffic marking policy is being created. In this state, you can only query the traffic marking policy but cannot perform other operations.
     *     - If the traffic marking policy is in the **Active** state, the traffic marking policy is created.
     *
     * @param request - CreateTrafficMarkingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrafficMarkingPolicyResponse
     *
     * @param CreateTrafficMarkingPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateTrafficMarkingPolicyResponse
     */
    public function createTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->markingDscp) {
            @$query['MarkingDscp'] = $request->markingDscp;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkingPolicyDescription) {
            @$query['TrafficMarkingPolicyDescription'] = $request->trafficMarkingPolicyDescription;
        }

        if (null !== $request->trafficMarkingPolicyName) {
            @$query['TrafficMarkingPolicyName'] = $request->trafficMarkingPolicyName;
        }

        if (null !== $request->trafficMatchRules) {
            @$query['TrafficMatchRules'] = $request->trafficMatchRules;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTrafficMarkingPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A traffic marking policy captures traffic that matches traffic classification rules and adds a Differentiated Services Code Point (DSCP) value to the traffic as a mark. Creates a traffic marking policy by calling CreateTrafficMarkingPolicy.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support creating traffic marking policies.
     * - **CreateTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a traffic marking policy ID but the traffic marking policy is not yet created. The system continues to create the traffic marking policy in the background. You can call **ListTrafficMarkingPolicies** to query the status of the traffic marking policy.
     *     - If the traffic marking policy is in the **Creating** state, the traffic marking policy is being created. In this state, you can only query the traffic marking policy but cannot perform other operations.
     *     - If the traffic marking policy is in the **Active** state, the traffic marking policy is created.
     *
     * @param request - CreateTrafficMarkingPolicyRequest
     *
     * @returns CreateTrafficMarkingPolicyResponse
     *
     * @param CreateTrafficMarkingPolicyRequest $request
     *
     * @return CreateTrafficMarkingPolicyResponse
     */
    public function createTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates an aggregate route.
     *
     * @remarks
     * After you add an aggregate route to an Enterprise Edition transit router route table, the Enterprise Edition transit router propagates the aggregate route only to the route tables of VPC-connected instances that are associated with the current Enterprise Edition transit router route table and have route synchronization enabled.
     * Before creating an aggregate route, make sure that the following operations are completed. Otherwise, the Enterprise Edition transit router does not propagate the aggregate route to VPC instance route tables:
     * - The VPC instance is associated with the Enterprise Edition transit router route table. For more information, see [AssociateTransitRouterAttachmentWithRouteTable](https://help.aliyun.com/document_detail/261242.html).
     * - Route synchronization is enabled for the VPC instance. For more information, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261358.html).
     *
     * @param tmpReq - CreateTransitRouteTableAggregationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouteTableAggregationResponse
     *
     * @param CreateTransitRouteTableAggregationRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateTransitRouteTableAggregationResponse
     */
    public function createTransitRouteTableAggregationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTransitRouteTableAggregationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->transitRouteTableAggregationScopeList) {
            $request->transitRouteTableAggregationScopeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transitRouteTableAggregationScopeList, 'TransitRouteTableAggregationScopeList', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouteTableAggregationCidr) {
            @$query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }

        if (null !== $request->transitRouteTableAggregationDescription) {
            @$query['TransitRouteTableAggregationDescription'] = $request->transitRouteTableAggregationDescription;
        }

        if (null !== $request->transitRouteTableAggregationName) {
            @$query['TransitRouteTableAggregationName'] = $request->transitRouteTableAggregationName;
        }

        if (null !== $request->transitRouteTableAggregationScope) {
            @$query['TransitRouteTableAggregationScope'] = $request->transitRouteTableAggregationScope;
        }

        if (null !== $request->transitRouteTableAggregationScopeListShrink) {
            @$query['TransitRouteTableAggregationScopeList'] = $request->transitRouteTableAggregationScopeListShrink;
        }

        if (null !== $request->transitRouteTableId) {
            @$query['TransitRouteTableId'] = $request->transitRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouteTableAggregation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an aggregate route.
     *
     * @remarks
     * After you add an aggregate route to an Enterprise Edition transit router route table, the Enterprise Edition transit router propagates the aggregate route only to the route tables of VPC-connected instances that are associated with the current Enterprise Edition transit router route table and have route synchronization enabled.
     * Before creating an aggregate route, make sure that the following operations are completed. Otherwise, the Enterprise Edition transit router does not propagate the aggregate route to VPC instance route tables:
     * - The VPC instance is associated with the Enterprise Edition transit router route table. For more information, see [AssociateTransitRouterAttachmentWithRouteTable](https://help.aliyun.com/document_detail/261242.html).
     * - Route synchronization is enabled for the VPC instance. For more information, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261358.html).
     *
     * @param request - CreateTransitRouteTableAggregationRequest
     *
     * @returns CreateTransitRouteTableAggregationResponse
     *
     * @param CreateTransitRouteTableAggregationRequest $request
     *
     * @return CreateTransitRouteTableAggregationResponse
     */
    public function createTransitRouteTableAggregation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouteTableAggregationWithOptions($request, $runtime);
    }

    /**
     * Calls the CreateTransitRouter operation to create an Enterprise Edition transit router instance.
     *
     * @remarks
     * - You can call the **CreateTransitRouter** operation to create an Enterprise Edition transit router instance. Enterprise Edition transit routers are available only in some regions. For more information about regions, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - **CreateTransitRouter** is an asynchronous operation. After you send a request, the system returns an Enterprise Edition transit router instance ID but the instance is not yet created. The creation task is still running in the background. You can call the [ListTransitRouters](https://help.aliyun.com/document_detail/261219.html) operation to query the status of the Enterprise Edition transit router instance.
     *     - If the Enterprise Edition transit router instance is in the **Creating** state, the instance is being created. In this state, you can only query the instance but cannot perform other operations on it.
     *     - If the Enterprise Edition transit router instance is in the **Active** state, the instance is created.
     * - Only one transit router instance can be created in each region within a Cloud Enterprise Network (CEN) instance.
     *
     * @param tmpReq - CreateTransitRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterResponse
     *
     * @param CreateTransitRouterRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateTransitRouterResponse
     */
    public function createTransitRouterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTransitRouterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->transitRouterCidrList) {
            $request->transitRouterCidrListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transitRouterCidrList, 'TransitRouterCidrList', 'json');
        }

        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->supportMulticast) {
            @$query['SupportMulticast'] = $request->supportMulticast;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterCidrListShrink) {
            @$query['TransitRouterCidrList'] = $request->transitRouterCidrListShrink;
        }

        if (null !== $request->transitRouterDescription) {
            @$query['TransitRouterDescription'] = $request->transitRouterDescription;
        }

        if (null !== $request->transitRouterName) {
            @$query['TransitRouterName'] = $request->transitRouterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouter',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the CreateTransitRouter operation to create an Enterprise Edition transit router instance.
     *
     * @remarks
     * - You can call the **CreateTransitRouter** operation to create an Enterprise Edition transit router instance. Enterprise Edition transit routers are available only in some regions. For more information about regions, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - **CreateTransitRouter** is an asynchronous operation. After you send a request, the system returns an Enterprise Edition transit router instance ID but the instance is not yet created. The creation task is still running in the background. You can call the [ListTransitRouters](https://help.aliyun.com/document_detail/261219.html) operation to query the status of the Enterprise Edition transit router instance.
     *     - If the Enterprise Edition transit router instance is in the **Creating** state, the instance is being created. In this state, you can only query the instance but cannot perform other operations on it.
     *     - If the Enterprise Edition transit router instance is in the **Active** state, the instance is created.
     * - Only one transit router instance can be created in each region within a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - CreateTransitRouterRequest
     *
     * @returns CreateTransitRouterResponse
     *
     * @param CreateTransitRouterRequest $request
     *
     * @return CreateTransitRouterResponse
     */
    public function createTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterWithOptions($request, $runtime);
    }

    /**
     * A transit router CIDR block is a custom CIDR block that you define for a transit router, similar to a CIDR block used to assign IP addresses to a router loopback interface. Calls the CreateTransitRouterCidr operation to create a CIDR block for a transit router.
     *
     * @remarks
     * A transit router CIDR block is a custom CIDR block that you define for a transit router, similar to a CIDR block used to assign IP addresses to a router loopback interface. Transit router CIDR blocks are used to assign addresses to network instance connections. For more information, see [Transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * The **CreateTransitRouterCidr** operation is used only to add a CIDR block to a transit router after the transit router is created.
     * Before you create a transit router CIDR block, take note of the following information:
     * - Only Enterprise Edition transit routers support transit router CIDR blocks.
     * - For limits on transit router CIDR blocks, see [Limits on transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * - A maximum of five CIDR blocks can be configured for a transit router. The subnet mask of each CIDR block must be 16 to 24 bits in length.
     * - CIDR blocks that fall within 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16 and their subnets are not supported.
     * - Each CIDR block cannot conflict with any CIDR block that needs to communicate within the Cloud Enterprise Network (CEN) instance.
     * - Each CIDR block must be unique within the same CEN instance.
     * - After you add a CIDR block to a transit router, the system automatically reserves three CIDR blocks from the CIDR block when you create the first VPN connection on the transit router. The reserved CIDR blocks are used by the system to create VPN connections in the background. The system assigns IP addresses to IPsec connections from the remaining CIDR blocks.
     *     You can call the [ListTransitRouterCidrAllocation](https://help.aliyun.com/document_detail/464173.html) operation to query the CIDR blocks that are reserved by the system or from which IP addresses are allocated.
     *
     * @param request - CreateTransitRouterCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterCidrResponse
     *
     * @param CreateTransitRouterCidrRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateTransitRouterCidrResponse
     */
    public function createTransitRouterCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->publishCidrRoute) {
            @$query['PublishCidrRoute'] = $request->publishCidrRoute;
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

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterCidr',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A transit router CIDR block is a custom CIDR block that you define for a transit router, similar to a CIDR block used to assign IP addresses to a router loopback interface. Calls the CreateTransitRouterCidr operation to create a CIDR block for a transit router.
     *
     * @remarks
     * A transit router CIDR block is a custom CIDR block that you define for a transit router, similar to a CIDR block used to assign IP addresses to a router loopback interface. Transit router CIDR blocks are used to assign addresses to network instance connections. For more information, see [Transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * The **CreateTransitRouterCidr** operation is used only to add a CIDR block to a transit router after the transit router is created.
     * Before you create a transit router CIDR block, take note of the following information:
     * - Only Enterprise Edition transit routers support transit router CIDR blocks.
     * - For limits on transit router CIDR blocks, see [Limits on transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * - A maximum of five CIDR blocks can be configured for a transit router. The subnet mask of each CIDR block must be 16 to 24 bits in length.
     * - CIDR blocks that fall within 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16 and their subnets are not supported.
     * - Each CIDR block cannot conflict with any CIDR block that needs to communicate within the Cloud Enterprise Network (CEN) instance.
     * - Each CIDR block must be unique within the same CEN instance.
     * - After you add a CIDR block to a transit router, the system automatically reserves three CIDR blocks from the CIDR block when you create the first VPN connection on the transit router. The reserved CIDR blocks are used by the system to create VPN connections in the background. The system assigns IP addresses to IPsec connections from the remaining CIDR blocks.
     *     You can call the [ListTransitRouterCidrAllocation](https://help.aliyun.com/document_detail/464173.html) operation to query the CIDR blocks that are reserved by the system or from which IP addresses are allocated.
     *
     * @param request - CreateTransitRouterCidrRequest
     *
     * @returns CreateTransitRouterCidrResponse
     *
     * @param CreateTransitRouterCidrRequest $request
     *
     * @return CreateTransitRouterCidrResponse
     */
    public function createTransitRouterCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterCidrWithOptions($request, $runtime);
    }

    /**
     * Creates a connection between an Express Connect Router (ECR) instance and a transit router instance in the same region.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support ECR connections.
     * - You can create an ECR connection on an Enterprise Edition transit router in the following ways:
     *   - If you have already created an Enterprise Edition transit router instance in the target region, you can create an ECR connection by specifying **EcrId**, **RegionId**, and **TransitRouterId**.
     *   - If you do not have an Enterprise Edition transit router instance in the target region, you can create an ECR connection by specifying **EcrId**, **CenId**, and **RegionId**. The system performs automatic creation of an Enterprise Edition transit router instance when the ECR connection is created.
     * - The CreateTransitRouterEcrAttachment operation is asynchronous. After you send a request, the system returns an ECR connection ID but the ECR connection is not yet created. The creation node runs in the background. You can invoke the ListTransitRouterEcrAttachments operation to query the status of the ECR connection.
     *   - If the ECR connection is in the **Attaching** state, the ECR connection is being created. In this state, you can only execute query operations on the ECR connection but cannot execute other operations on it.
     *   - If the ECR connection is in the **Attached** state, the ECR connection is created.
     * - After an ECR connection is created, the ECR connection does not have a routing learning relationship or an associated forwarding relationship with any Enterprise Edition transit router route table by default.
     *   After the ECR connection establishes a [routing learning relationship](https://help.aliyun.com/document_detail/468300.html) with an Enterprise Edition transit router route table, the system automatically propagates the routes of the ECR instance to the Enterprise Edition transit router route table.
     * - After an ECR connection is created, the system automatically propagates the routes in the Enterprise Edition transit router route table associated with the ECR connection to the route table of the ECR instance.
     * ### Before you begin
     * - The Alibaba Cloud account that owns the Enterprise Edition transit router and the Alibaba Cloud account that owns the ECR instance must belong to the same enterprise.
     * - Enterprise Edition transit routers support connections to ECR instances that belong to the same account or a different account. Before creating a cross-account ECR connection, obtain authorization from the cross-account ECR instance. For more information, see [Cross-account authorization for network instances](https://help.aliyun.com/document_detail/181553.html).
     * - **Before invoking this operation to create an ECR connection, invoke the [CreateExpressConnectRouterAssociation](https://help.aliyun.com/document_detail/2712082.html) operation to associate the ECR instance with the Enterprise Edition transit router instance.**
     *   **When you invoke the DeleteTransitRouterEcrAttachment operation to force delete an ECR connection, the system also deletes the association between the ECR instance and the Enterprise Edition transit router instance. You do not need to delete the association separately.**
     *
     * @param request - CreateTransitRouterEcrAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterEcrAttachmentResponse
     *
     * @param CreateTransitRouterEcrAttachmentRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateTransitRouterEcrAttachmentResponse
     */
    public function createTransitRouterEcrAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$query['EcrId'] = $request->ecrId;
        }

        if (null !== $request->ecrOwnerId) {
            @$query['EcrOwnerId'] = $request->ecrOwnerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterEcrAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterEcrAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a connection between an Express Connect Router (ECR) instance and a transit router instance in the same region.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support ECR connections.
     * - You can create an ECR connection on an Enterprise Edition transit router in the following ways:
     *   - If you have already created an Enterprise Edition transit router instance in the target region, you can create an ECR connection by specifying **EcrId**, **RegionId**, and **TransitRouterId**.
     *   - If you do not have an Enterprise Edition transit router instance in the target region, you can create an ECR connection by specifying **EcrId**, **CenId**, and **RegionId**. The system performs automatic creation of an Enterprise Edition transit router instance when the ECR connection is created.
     * - The CreateTransitRouterEcrAttachment operation is asynchronous. After you send a request, the system returns an ECR connection ID but the ECR connection is not yet created. The creation node runs in the background. You can invoke the ListTransitRouterEcrAttachments operation to query the status of the ECR connection.
     *   - If the ECR connection is in the **Attaching** state, the ECR connection is being created. In this state, you can only execute query operations on the ECR connection but cannot execute other operations on it.
     *   - If the ECR connection is in the **Attached** state, the ECR connection is created.
     * - After an ECR connection is created, the ECR connection does not have a routing learning relationship or an associated forwarding relationship with any Enterprise Edition transit router route table by default.
     *   After the ECR connection establishes a [routing learning relationship](https://help.aliyun.com/document_detail/468300.html) with an Enterprise Edition transit router route table, the system automatically propagates the routes of the ECR instance to the Enterprise Edition transit router route table.
     * - After an ECR connection is created, the system automatically propagates the routes in the Enterprise Edition transit router route table associated with the ECR connection to the route table of the ECR instance.
     * ### Before you begin
     * - The Alibaba Cloud account that owns the Enterprise Edition transit router and the Alibaba Cloud account that owns the ECR instance must belong to the same enterprise.
     * - Enterprise Edition transit routers support connections to ECR instances that belong to the same account or a different account. Before creating a cross-account ECR connection, obtain authorization from the cross-account ECR instance. For more information, see [Cross-account authorization for network instances](https://help.aliyun.com/document_detail/181553.html).
     * - **Before invoking this operation to create an ECR connection, invoke the [CreateExpressConnectRouterAssociation](https://help.aliyun.com/document_detail/2712082.html) operation to associate the ECR instance with the Enterprise Edition transit router instance.**
     *   **When you invoke the DeleteTransitRouterEcrAttachment operation to force delete an ECR connection, the system also deletes the association between the ECR instance and the Enterprise Edition transit router instance. You do not need to delete the association separately.**
     *
     * @param request - CreateTransitRouterEcrAttachmentRequest
     *
     * @returns CreateTransitRouterEcrAttachmentResponse
     *
     * @param CreateTransitRouterEcrAttachmentRequest $request
     *
     * @return CreateTransitRouterEcrAttachmentResponse
     */
    public function createTransitRouterEcrAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterEcrAttachmentWithOptions($request, $runtime);
    }

    /**
     * Creates a multicast domain. A multicast domain defines the scope of a multicast network within a region. Only resources within the multicast domain can send and receive multicast traffic. Resources outside the multicast domain cannot send or receive multicast traffic.
     *
     * @remarks
     * Before you begin:
     * - Make sure that you have created an Enterprise Edition transit router in the region where you want to establish a multicast network and that you have enabled the multicast feature for the Enterprise Edition transit router. For more information, see [CreateTransitRouter](https://help.aliyun.com/document_detail/261169.html).
     *     If you created an Enterprise Edition transit router instance before applying for multicast resources, the Enterprise Edition transit router instance does not support the multicast feature. You can delete the current Enterprise Edition transit router instance and create a new one. For information about how to delete an Enterprise Edition transit router instance, see [DeleteTransitRouter](https://help.aliyun.com/document_detail/261218.html).
     * - When you call the **CreateTransitRouterMulticastDomain** operation, if you specify the **CenId** and **RegionId** parameters, you do not need to specify the **TransitRouterId** parameter. If you specify the **TransitRouterId** parameter, you do not need to specify the **CenId** or **RegionId** parameter.
     *
     * @param request - CreateTransitRouterMulticastDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterMulticastDomainResponse
     *
     * @param CreateTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateTransitRouterMulticastDomainResponse
     */
    public function createTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterMulticastDomainDescription) {
            @$query['TransitRouterMulticastDomainDescription'] = $request->transitRouterMulticastDomainDescription;
        }

        if (null !== $request->transitRouterMulticastDomainName) {
            @$query['TransitRouterMulticastDomainName'] = $request->transitRouterMulticastDomainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterMulticastDomain',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a multicast domain. A multicast domain defines the scope of a multicast network within a region. Only resources within the multicast domain can send and receive multicast traffic. Resources outside the multicast domain cannot send or receive multicast traffic.
     *
     * @remarks
     * Before you begin:
     * - Make sure that you have created an Enterprise Edition transit router in the region where you want to establish a multicast network and that you have enabled the multicast feature for the Enterprise Edition transit router. For more information, see [CreateTransitRouter](https://help.aliyun.com/document_detail/261169.html).
     *     If you created an Enterprise Edition transit router instance before applying for multicast resources, the Enterprise Edition transit router instance does not support the multicast feature. You can delete the current Enterprise Edition transit router instance and create a new one. For information about how to delete an Enterprise Edition transit router instance, see [DeleteTransitRouter](https://help.aliyun.com/document_detail/261218.html).
     * - When you call the **CreateTransitRouterMulticastDomain** operation, if you specify the **CenId** and **RegionId** parameters, you do not need to specify the **TransitRouterId** parameter. If you specify the **TransitRouterId** parameter, you do not need to specify the **CenId** or **RegionId** parameter.
     *
     * @param request - CreateTransitRouterMulticastDomainRequest
     *
     * @returns CreateTransitRouterMulticastDomainResponse
     *
     * @param CreateTransitRouterMulticastDomainRequest $request
     *
     * @return CreateTransitRouterMulticastDomainResponse
     */
    public function createTransitRouterMulticastDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterMulticastDomainWithOptions($request, $runtime);
    }

    /**
     * After network instances (VPCs, VBRs, and IPsec connections) are connected to a transit router, you must create an inter-region connection between transit routers to enable communication between network instances in different regions. You can call the CreateTransitRouterPeerAttachment operation to create an inter-region connection for an Enterprise Edition transit router instance.
     *
     * @remarks
     * - Enterprise Edition transit routers support the following two bandwidth allocation methods:
     *   - **Allocate from bandwidth package**:
     *     To use this method, you must first purchase a bandwidth package and allocate bandwidth from the bandwidth package to the inter-region connection. For more information about how to purchase a bandwidth package, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html).
     *   - **Pay-by-data-transfer**:
     *     To use this method, you must set a bandwidth limit for the inter-region connection. The system charges you based on the actual traffic of the inter-region connection. For more information about billing, see [Inter-region data transfer](https://help.aliyun.com/document_detail/337827.html).
     * - **CreateTransitRouterPeerAttachment** is an asynchronous operation. After you send a request, the system returns an inter-region connection ID, but the inter-region connection is not yet created. The creation task still runs in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of the inter-region connection.
     *   - If the inter-region connection is in the **Attaching** state, the inter-region connection is being created. In this state, you can only query the inter-region connection but cannot perform other operations on it.
     *   - If the inter-region connection is in the **Attached** state, the inter-region connection is created.
     *
     * @param request - CreateTransitRouterPeerAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterPeerAttachmentResponse
     *
     * @param CreateTransitRouterPeerAttachmentRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateTransitRouterPeerAttachmentResponse
     */
    public function createTransitRouterPeerAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPublishRouteEnabled) {
            @$query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->bandwidthType) {
            @$query['BandwidthType'] = $request->bandwidthType;
        }

        if (null !== $request->cenBandwidthPackageId) {
            @$query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->defaultLinkType) {
            @$query['DefaultLinkType'] = $request->defaultLinkType;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->peerTransitRouterId) {
            @$query['PeerTransitRouterId'] = $request->peerTransitRouterId;
        }

        if (null !== $request->peerTransitRouterRegionId) {
            @$query['PeerTransitRouterRegionId'] = $request->peerTransitRouterRegionId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterPeerAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterPeerAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After network instances (VPCs, VBRs, and IPsec connections) are connected to a transit router, you must create an inter-region connection between transit routers to enable communication between network instances in different regions. You can call the CreateTransitRouterPeerAttachment operation to create an inter-region connection for an Enterprise Edition transit router instance.
     *
     * @remarks
     * - Enterprise Edition transit routers support the following two bandwidth allocation methods:
     *   - **Allocate from bandwidth package**:
     *     To use this method, you must first purchase a bandwidth package and allocate bandwidth from the bandwidth package to the inter-region connection. For more information about how to purchase a bandwidth package, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html).
     *   - **Pay-by-data-transfer**:
     *     To use this method, you must set a bandwidth limit for the inter-region connection. The system charges you based on the actual traffic of the inter-region connection. For more information about billing, see [Inter-region data transfer](https://help.aliyun.com/document_detail/337827.html).
     * - **CreateTransitRouterPeerAttachment** is an asynchronous operation. After you send a request, the system returns an inter-region connection ID, but the inter-region connection is not yet created. The creation task still runs in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of the inter-region connection.
     *   - If the inter-region connection is in the **Attaching** state, the inter-region connection is being created. In this state, you can only query the inter-region connection but cannot perform other operations on it.
     *   - If the inter-region connection is in the **Attached** state, the inter-region connection is created.
     *
     * @param request - CreateTransitRouterPeerAttachmentRequest
     *
     * @returns CreateTransitRouterPeerAttachmentResponse
     *
     * @param CreateTransitRouterPeerAttachmentRequest $request
     *
     * @return CreateTransitRouterPeerAttachmentResponse
     */
    public function createTransitRouterPeerAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterPeerAttachmentWithOptions($request, $runtime);
    }

    /**
     * Associates a prefix list with an Enterprise Edition transit router route table.
     *
     * @remarks
     * Before you associate a prefix list with an Enterprise Edition transit router route table, make sure that the following conditions are met:
     * - You have learned about the limits and routing compatibility information of prefix lists. For more information, see [Prefix lists](https://help.aliyun.com/document_detail/445605.html).
     * - You have created a prefix list. For more information, see [CreateVpcPrefixList](https://help.aliyun.com/document_detail/437367.html).
     * - If you want to associate a cross-account prefix list with an Enterprise Edition transit router route table, make sure that the prefix list has been shared with the Alibaba Cloud account that owns the Enterprise Edition transit router route table. For more information about how to share a prefix list, see [Overview of resource sharing](https://help.aliyun.com/document_detail/160622.html) and [API reference (Resource Sharing)](https://help.aliyun.com/document_detail/193445.html).
     *
     * @param request - CreateTransitRouterPrefixListAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterPrefixListAssociationResponse
     *
     * @param CreateTransitRouterPrefixListAssociationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return CreateTransitRouterPrefixListAssociationResponse
     */
    public function createTransitRouterPrefixListAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->nextHop) {
            @$query['NextHop'] = $request->nextHop;
        }

        if (null !== $request->nextHopType) {
            @$query['NextHopType'] = $request->nextHopType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ownerUid) {
            @$query['OwnerUid'] = $request->ownerUid;
        }

        if (null !== $request->prefixListId) {
            @$query['PrefixListId'] = $request->prefixListId;
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

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterTableId) {
            @$query['TransitRouterTableId'] = $request->transitRouterTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterPrefixListAssociation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterPrefixListAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a prefix list with an Enterprise Edition transit router route table.
     *
     * @remarks
     * Before you associate a prefix list with an Enterprise Edition transit router route table, make sure that the following conditions are met:
     * - You have learned about the limits and routing compatibility information of prefix lists. For more information, see [Prefix lists](https://help.aliyun.com/document_detail/445605.html).
     * - You have created a prefix list. For more information, see [CreateVpcPrefixList](https://help.aliyun.com/document_detail/437367.html).
     * - If you want to associate a cross-account prefix list with an Enterprise Edition transit router route table, make sure that the prefix list has been shared with the Alibaba Cloud account that owns the Enterprise Edition transit router route table. For more information about how to share a prefix list, see [Overview of resource sharing](https://help.aliyun.com/document_detail/160622.html) and [API reference (Resource Sharing)](https://help.aliyun.com/document_detail/193445.html).
     *
     * @param request - CreateTransitRouterPrefixListAssociationRequest
     *
     * @returns CreateTransitRouterPrefixListAssociationResponse
     *
     * @param CreateTransitRouterPrefixListAssociationRequest $request
     *
     * @return CreateTransitRouterPrefixListAssociationResponse
     */
    public function createTransitRouterPrefixListAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterPrefixListAssociationWithOptions($request, $runtime);
    }

    /**
     * Adds a route entry to a route table of an Enterprise Edition transit router.
     *
     * @remarks
     * *CreateTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a route entry ID but the route entry is not yet created. The creation task continues to run in the background. You can call **ListTransitRouterRouteEntries** to query the status of the route entry.
     * - If the route entry is in the **Creating** state, the route entry is being created. In this state, you can only query the route entry. You cannot perform other operations on the route entry.
     * - If the route entry is in the **Active** state, the route entry is created.
     *
     * @param request - CreateTransitRouterRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterRouteEntryResponse
     *
     * @param CreateTransitRouterRouteEntryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateTransitRouterRouteEntryResponse
     */
    public function createTransitRouterRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterRouteEntryDescription) {
            @$query['TransitRouterRouteEntryDescription'] = $request->transitRouterRouteEntryDescription;
        }

        if (null !== $request->transitRouterRouteEntryDestinationCidrBlock) {
            @$query['TransitRouterRouteEntryDestinationCidrBlock'] = $request->transitRouterRouteEntryDestinationCidrBlock;
        }

        if (null !== $request->transitRouterRouteEntryName) {
            @$query['TransitRouterRouteEntryName'] = $request->transitRouterRouteEntryName;
        }

        if (null !== $request->transitRouterRouteEntryNextHopId) {
            @$query['TransitRouterRouteEntryNextHopId'] = $request->transitRouterRouteEntryNextHopId;
        }

        if (null !== $request->transitRouterRouteEntryNextHopType) {
            @$query['TransitRouterRouteEntryNextHopType'] = $request->transitRouterRouteEntryNextHopType;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterRouteEntry',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a route entry to a route table of an Enterprise Edition transit router.
     *
     * @remarks
     * *CreateTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a route entry ID but the route entry is not yet created. The creation task continues to run in the background. You can call **ListTransitRouterRouteEntries** to query the status of the route entry.
     * - If the route entry is in the **Creating** state, the route entry is being created. In this state, you can only query the route entry. You cannot perform other operations on the route entry.
     * - If the route entry is in the **Active** state, the route entry is created.
     *
     * @param request - CreateTransitRouterRouteEntryRequest
     *
     * @returns CreateTransitRouterRouteEntryResponse
     *
     * @param CreateTransitRouterRouteEntryRequest $request
     *
     * @return CreateTransitRouterRouteEntryResponse
     */
    public function createTransitRouterRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterRouteEntryWithOptions($request, $runtime);
    }

    /**
     * Creates a custom route table for an Enterprise Edition transit router by calling the CreateTransitRouterRouteTable operation.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support custom route tables. For information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](https://help.aliyun.com/document_detail/181681.html).
     * - **CreateTransitRouterRouteTable** is an asynchronous operation. After you send a request, the system returns a route table ID but the route table is not yet created. The system continues to create the route table in the background. You can call **ListTransitRouterRouteTables** to query the status of the route table.
     *     - If the route table is in the **Creating** state, the route table is being created. In this state, you can only perform query operations.
     *     - If the route table is in the **Active** state, the route table is created.
     *
     * @param request - CreateTransitRouterRouteTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterRouteTableResponse
     *
     * @param CreateTransitRouterRouteTableRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateTransitRouterRouteTableResponse
     */
    public function createTransitRouterRouteTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeTableOptions) {
            @$query['RouteTableOptions'] = $request->routeTableOptions;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterRouteTableDescription) {
            @$query['TransitRouterRouteTableDescription'] = $request->transitRouterRouteTableDescription;
        }

        if (null !== $request->transitRouterRouteTableName) {
            @$query['TransitRouterRouteTableName'] = $request->transitRouterRouteTableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterRouteTable',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom route table for an Enterprise Edition transit router by calling the CreateTransitRouterRouteTable operation.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support custom route tables. For information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](https://help.aliyun.com/document_detail/181681.html).
     * - **CreateTransitRouterRouteTable** is an asynchronous operation. After you send a request, the system returns a route table ID but the route table is not yet created. The system continues to create the route table in the background. You can call **ListTransitRouterRouteTables** to query the status of the route table.
     *     - If the route table is in the **Creating** state, the route table is being created. In this state, you can only perform query operations.
     *     - If the route table is in the **Active** state, the route table is created.
     *
     * @param request - CreateTransitRouterRouteTableRequest
     *
     * @returns CreateTransitRouterRouteTableResponse
     *
     * @param CreateTransitRouterRouteTableRequest $request
     *
     * @return CreateTransitRouterRouteTableResponse
     */
    public function createTransitRouterRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterRouteTableWithOptions($request, $runtime);
    }

    /**
     * Invokes the CreateTransitRouterVbrAttachment operation to connect a Virtual Border Router (VBR) network instance to a transit router instance in the same region. After the connection is established, the transit router can help you achieve private network peering.
     *
     * @remarks
     * - For information about the regions and zones supported by Enterprise Edition transit routers, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - You can create a VBR connection on an Enterprise Edition transit router in the following ways:
     *     - If you have already created an Enterprise Edition transit router instance in the target region, you can create a VBR connection by specifying **VbrId**, **RegionId**, and **TransitRouterId**.
     *     - If you do not have an Enterprise Edition transit router instance in the target region, you can create a VBR connection by specifying **VbrId**, **CenId**, and **RegionId**. The system automatically creates an Enterprise Edition transit router instance when the VBR connection is created.
     * - **CreateTransitRouterVbrAttachment** is an asynchronous operation. After you send a request, the system returns a VBR connection ID but the VBR connection is not yet created. The creation task runs in the background. You can call **ListTransitRouterVbrAttachments** to query the status of the VBR connection.
     *     - If the VBR connection is in the **Attaching** state, the VBR connection is being created. In this state, you can only query the VBR connection and cannot perform other operations.
     *     - If the VBR connection is in the **Attached** state, the VBR connection is created.
     * - The Alibaba Cloud account that owns the transit router and the Alibaba Cloud account that owns the VBR instance must belong to the same enterprise.
     * - Transit routers support connecting to VBR instances that belong to the same account or a different account. Before creating a cross-account VBR connection, obtain authorization from the VBR instance owner. For more information, see [Grant permissions for cross-account network instances](https://help.aliyun.com/document_detail/181553.html).
     * - After a VBR connection is created, the VBR connection does not establish route learning or association forwarding relationships with any transit router route table by default.
     *
     * @param request - CreateTransitRouterVbrAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterVbrAttachmentResponse
     *
     * @param CreateTransitRouterVbrAttachmentRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateTransitRouterVbrAttachmentResponse
     */
    public function createTransitRouterVbrAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPublishRouteEnabled) {
            @$query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->vbrId) {
            @$query['VbrId'] = $request->vbrId;
        }

        if (null !== $request->vbrOwnerId) {
            @$query['VbrOwnerId'] = $request->vbrOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterVbrAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterVbrAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the CreateTransitRouterVbrAttachment operation to connect a Virtual Border Router (VBR) network instance to a transit router instance in the same region. After the connection is established, the transit router can help you achieve private network peering.
     *
     * @remarks
     * - For information about the regions and zones supported by Enterprise Edition transit routers, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - You can create a VBR connection on an Enterprise Edition transit router in the following ways:
     *     - If you have already created an Enterprise Edition transit router instance in the target region, you can create a VBR connection by specifying **VbrId**, **RegionId**, and **TransitRouterId**.
     *     - If you do not have an Enterprise Edition transit router instance in the target region, you can create a VBR connection by specifying **VbrId**, **CenId**, and **RegionId**. The system automatically creates an Enterprise Edition transit router instance when the VBR connection is created.
     * - **CreateTransitRouterVbrAttachment** is an asynchronous operation. After you send a request, the system returns a VBR connection ID but the VBR connection is not yet created. The creation task runs in the background. You can call **ListTransitRouterVbrAttachments** to query the status of the VBR connection.
     *     - If the VBR connection is in the **Attaching** state, the VBR connection is being created. In this state, you can only query the VBR connection and cannot perform other operations.
     *     - If the VBR connection is in the **Attached** state, the VBR connection is created.
     * - The Alibaba Cloud account that owns the transit router and the Alibaba Cloud account that owns the VBR instance must belong to the same enterprise.
     * - Transit routers support connecting to VBR instances that belong to the same account or a different account. Before creating a cross-account VBR connection, obtain authorization from the VBR instance owner. For more information, see [Grant permissions for cross-account network instances](https://help.aliyun.com/document_detail/181553.html).
     * - After a VBR connection is created, the VBR connection does not establish route learning or association forwarding relationships with any transit router route table by default.
     *
     * @param request - CreateTransitRouterVbrAttachmentRequest
     *
     * @returns CreateTransitRouterVbrAttachmentResponse
     *
     * @param CreateTransitRouterVbrAttachmentRequest $request
     *
     * @return CreateTransitRouterVbrAttachmentResponse
     */
    public function createTransitRouterVbrAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterVbrAttachmentWithOptions($request, $runtime);
    }

    /**
     * Calls the CreateTransitRouterVpcAttachment operation to connect a Virtual Private Cloud (VPC) instance to a transit router instance for private network peering. After the connection is established, the transit router instance can help you achieve private network peering.
     *
     * @remarks
     * - You can create a VPC connection on an Enterprise Edition transit router in the following two ways:
     *     - If you have already created an Enterprise Edition transit router instance in the target region, you can create a VPC connection by specifying **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **TransitRouterId**, and **RegionId**.
     *     - If you do not have an Enterprise Edition transit router instance in the target region, you can create a VPC connection by specifying **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **CenId**, and **RegionId**. The system performs automatic creation of an Enterprise Edition transit router instance when the VPC connection is created.
     * - The **CreateTransitRouterVpcAttachment** operation is asynchronous. After you send a request, the system returns a VPC connection ID, but the VPC connection is not yet created. The creation node is still running in the background. You can invoke the [ListTransitRouterVpcAttachments](https://help.aliyun.com/document_detail/261222.html) operation to query the status of the VPC connection.
     *     - If the VPC connection is in the **Attaching** state, the VPC connection is being created. In this state, you can only execute query operations on the VPC connection but cannot execute other operations.
     *     - If the VPC connection is in the **Attached** state, the VPC connection is created.
     * - After a VPC connection is created, the VPC connection does not establish routing learning or associate forwarding relationships with any transit router routing table by default.
     * ### Before you begin
     * Before you call this operation to create a VPC connection, make sure that the following conditions are met:
     * - The VPC instance has at least one vSwitch instance in a zone supported by the Enterprise Edition transit router, and the vSwitch instance has at least one idle IP address. For information about the regions and zones supported by Enterprise Edition transit routers, see [Regions and zones supported by Enterprise Edition transit routers](https://help.aliyun.com/document_detail/181681.html).
     * - If you want to connect a cross-account VPC-connected instance, obtain the cross-account VPC-connected instance authorization first. For more information, see [Cross-account VPC-connected instance authorization](https://help.aliyun.com/document_detail/181553.html).
     * - Fees are incurred after a VPC connection is created. Make sure that you understand the billing rules. For more information, see [Billing](https://help.aliyun.com/document_detail/189836.html).
     *
     * @param tmpReq - CreateTransitRouterVpcAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterVpcAttachmentResponse
     *
     * @param CreateTransitRouterVpcAttachmentRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateTransitRouterVpcAttachmentResponse
     */
    public function createTransitRouterVpcAttachmentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTransitRouterVpcAttachmentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->options) {
            $request->optionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->options, 'Options', 'json');
        }

        if (null !== $tmpReq->transitRouterVPCAttachmentOptions) {
            $request->transitRouterVPCAttachmentOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transitRouterVPCAttachmentOptions, 'TransitRouterVPCAttachmentOptions', 'json');
        }

        $query = [];
        if (null !== $request->autoPublishRouteEnabled) {
            @$query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->optionsShrink) {
            @$query['Options'] = $request->optionsShrink;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterVPCAttachmentOptionsShrink) {
            @$query['TransitRouterVPCAttachmentOptions'] = $request->transitRouterVPCAttachmentOptionsShrink;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcOwnerId) {
            @$query['VpcOwnerId'] = $request->vpcOwnerId;
        }

        if (null !== $request->zoneMappings) {
            @$query['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterVpcAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterVpcAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the CreateTransitRouterVpcAttachment operation to connect a Virtual Private Cloud (VPC) instance to a transit router instance for private network peering. After the connection is established, the transit router instance can help you achieve private network peering.
     *
     * @remarks
     * - You can create a VPC connection on an Enterprise Edition transit router in the following two ways:
     *     - If you have already created an Enterprise Edition transit router instance in the target region, you can create a VPC connection by specifying **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **TransitRouterId**, and **RegionId**.
     *     - If you do not have an Enterprise Edition transit router instance in the target region, you can create a VPC connection by specifying **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **CenId**, and **RegionId**. The system performs automatic creation of an Enterprise Edition transit router instance when the VPC connection is created.
     * - The **CreateTransitRouterVpcAttachment** operation is asynchronous. After you send a request, the system returns a VPC connection ID, but the VPC connection is not yet created. The creation node is still running in the background. You can invoke the [ListTransitRouterVpcAttachments](https://help.aliyun.com/document_detail/261222.html) operation to query the status of the VPC connection.
     *     - If the VPC connection is in the **Attaching** state, the VPC connection is being created. In this state, you can only execute query operations on the VPC connection but cannot execute other operations.
     *     - If the VPC connection is in the **Attached** state, the VPC connection is created.
     * - After a VPC connection is created, the VPC connection does not establish routing learning or associate forwarding relationships with any transit router routing table by default.
     * ### Before you begin
     * Before you call this operation to create a VPC connection, make sure that the following conditions are met:
     * - The VPC instance has at least one vSwitch instance in a zone supported by the Enterprise Edition transit router, and the vSwitch instance has at least one idle IP address. For information about the regions and zones supported by Enterprise Edition transit routers, see [Regions and zones supported by Enterprise Edition transit routers](https://help.aliyun.com/document_detail/181681.html).
     * - If you want to connect a cross-account VPC-connected instance, obtain the cross-account VPC-connected instance authorization first. For more information, see [Cross-account VPC-connected instance authorization](https://help.aliyun.com/document_detail/181553.html).
     * - Fees are incurred after a VPC connection is created. Make sure that you understand the billing rules. For more information, see [Billing](https://help.aliyun.com/document_detail/189836.html).
     *
     * @param request - CreateTransitRouterVpcAttachmentRequest
     *
     * @returns CreateTransitRouterVpcAttachmentResponse
     *
     * @param CreateTransitRouterVpcAttachmentRequest $request
     *
     * @return CreateTransitRouterVpcAttachmentResponse
     */
    public function createTransitRouterVpcAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterVpcAttachmentWithOptions($request, $runtime);
    }

    /**
     * Transit routers support connections to IPsec connections of VPN gateways. An on-premises data center can directly connect to a transit router through an IPsec connection, and then communicate with other networks through the transit router. Calls the CreateTransitRouterVpnAttachment operation to create a VPN connection.
     *
     * @remarks
     * - After a VPN connection is created, the VPN connection does not establish route learning or association forwarding relationships with any transit router route table by default.
     * - When you call the `CreateTransitRouterVpnAttachment` operation, if you specify values for the **CenId** and **RegionId** parameters, you do not need to specify the **TransitRouterId** parameter. If you specify values for the **TransitRouterId** and **RegionId** parameters, you do not need to specify the **CenId** parameter.
     * ### Before you begin
     * - Before you create a VPN connection, make sure that you have created an IPsec connection in the region where the transit router instance resides and that the IPsec connection is not bindeded to any resource. For more information, see [CreateVpnAttachment](https://help.aliyun.com/document_detail/442455.html).
     * - If the transit router instance needs to connect to an IPsec connection that belongs to a different Alibaba Cloud account, make sure that the IPsec connection has been authorized to the transit router instance. For more information, see [GrantInstanceToTransitRouter](https://help.aliyun.com/document_detail/417520.html).
     * - Before you create a VPN connection, make sure that you have configured the TR CIDR block for the transit router. For more information, see [CreateTransitRouterCidr](https://help.aliyun.com/document_detail/468230.html).
     *
     * @param request - CreateTransitRouterVpnAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitRouterVpnAttachmentResponse
     *
     * @param CreateTransitRouterVpnAttachmentRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateTransitRouterVpnAttachmentResponse
     */
    public function createTransitRouterVpnAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPublishRouteEnabled) {
            @$query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->vpnId) {
            @$query['VpnId'] = $request->vpnId;
        }

        if (null !== $request->vpnOwnerId) {
            @$query['VpnOwnerId'] = $request->vpnOwnerId;
        }

        if (null !== $request->zone) {
            @$query['Zone'] = $request->zone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransitRouterVpnAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitRouterVpnAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transit routers support connections to IPsec connections of VPN gateways. An on-premises data center can directly connect to a transit router through an IPsec connection, and then communicate with other networks through the transit router. Calls the CreateTransitRouterVpnAttachment operation to create a VPN connection.
     *
     * @remarks
     * - After a VPN connection is created, the VPN connection does not establish route learning or association forwarding relationships with any transit router route table by default.
     * - When you call the `CreateTransitRouterVpnAttachment` operation, if you specify values for the **CenId** and **RegionId** parameters, you do not need to specify the **TransitRouterId** parameter. If you specify values for the **TransitRouterId** and **RegionId** parameters, you do not need to specify the **CenId** parameter.
     * ### Before you begin
     * - Before you create a VPN connection, make sure that you have created an IPsec connection in the region where the transit router instance resides and that the IPsec connection is not bindeded to any resource. For more information, see [CreateVpnAttachment](https://help.aliyun.com/document_detail/442455.html).
     * - If the transit router instance needs to connect to an IPsec connection that belongs to a different Alibaba Cloud account, make sure that the IPsec connection has been authorized to the transit router instance. For more information, see [GrantInstanceToTransitRouter](https://help.aliyun.com/document_detail/417520.html).
     * - Before you create a VPN connection, make sure that you have configured the TR CIDR block for the transit router. For more information, see [CreateTransitRouterCidr](https://help.aliyun.com/document_detail/468230.html).
     *
     * @param request - CreateTransitRouterVpnAttachmentRequest
     *
     * @returns CreateTransitRouterVpnAttachmentResponse
     *
     * @param CreateTransitRouterVpnAttachmentRequest $request
     *
     * @return CreateTransitRouterVpnAttachmentResponse
     */
    public function createTransitRouterVpnAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitRouterVpnAttachmentWithOptions($request, $runtime);
    }

    /**
     * Deactivates a flow log. After the flow log is deactivated, traffic of the specified resource is no longer captured.
     *
     * @remarks
     * The `DeactiveFlowLog` operation is asynchronous. After you send a request, the system returns a **RequestId** but the flow log is not completely deactivated. The deactivation task continues to run in the background. You can call the `DescribeFlowlogs` operation to query the status of the flow log.
     * - If the flow log is in the **Modifying** state, the flow log is being deactivated. In this state, you can only perform query operations.
     * - If the flow log is in the **Inactive** state, the flow log is deactivated.
     *
     * @param request - DeactiveFlowLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeactiveFlowLogResponse
     *
     * @param DeactiveFlowLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeactiveFlowLogResponse
     */
    public function deactiveFlowLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->flowLogId) {
            @$query['FlowLogId'] = $request->flowLogId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeactiveFlowLog',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeactiveFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deactivates a flow log. After the flow log is deactivated, traffic of the specified resource is no longer captured.
     *
     * @remarks
     * The `DeactiveFlowLog` operation is asynchronous. After you send a request, the system returns a **RequestId** but the flow log is not completely deactivated. The deactivation task continues to run in the background. You can call the `DescribeFlowlogs` operation to query the status of the flow log.
     * - If the flow log is in the **Modifying** state, the flow log is being deactivated. In this state, you can only perform query operations.
     * - If the flow log is in the **Inactive** state, the flow log is deactivated.
     *
     * @param request - DeactiveFlowLogRequest
     *
     * @returns DeactiveFlowLogResponse
     *
     * @param DeactiveFlowLogRequest $request
     *
     * @return DeactiveFlowLogResponse
     */
    public function deactiveFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveFlowLogWithOptions($request, $runtime);
    }

    /**
     * Deletes a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * *DeleteCen** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the CEN instance is not yet deleted. The deletion task continues to run in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If the CEN instance is in the **Deleting** state, the CEN instance is being deleted. In this state, you can only query the CEN instance. You cannot perform other operations on it.
     * - If the CEN instance cannot be found, the CEN instance is deleted.
     * ### Before you begin
     * Before you delete a CEN instance, make sure that no bandwidth plans exist under the CEN instance, and that no network instance connections or custom route tables exist under the transit routers of the CEN instance:
     * - To delete network instance connections, see:
     *     - [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html)
     *     - [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html)
     *     - [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html)
     *     - [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html)
     *     > To delete network instance connections under a Basic Edition transit router, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     * - To delete custom route tables of an Enterprise Edition transit router, see [DeleteTransitRouterRouteTable](https://help.aliyun.com/document_detail/261235.html).
     * - To disassociate a bandwidth plan from a CEN instance, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
     *
     * @param request - DeleteCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCenResponse
     *
     * @param DeleteCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteCenResponse
     */
    public function deleteCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * *DeleteCen** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the CEN instance is not yet deleted. The deletion task continues to run in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If the CEN instance is in the **Deleting** state, the CEN instance is being deleted. In this state, you can only query the CEN instance. You cannot perform other operations on it.
     * - If the CEN instance cannot be found, the CEN instance is deleted.
     * ### Before you begin
     * Before you delete a CEN instance, make sure that no bandwidth plans exist under the CEN instance, and that no network instance connections or custom route tables exist under the transit routers of the CEN instance:
     * - To delete network instance connections, see:
     *     - [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html)
     *     - [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html)
     *     - [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html)
     *     - [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html)
     *     > To delete network instance connections under a Basic Edition transit router, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     * - To delete custom route tables of an Enterprise Edition transit router, see [DeleteTransitRouterRouteTable](https://help.aliyun.com/document_detail/261235.html).
     * - To disassociate a bandwidth plan from a CEN instance, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
     *
     * @param request - DeleteCenRequest
     *
     * @returns DeleteCenResponse
     *
     * @param DeleteCenRequest $request
     *
     * @return DeleteCenResponse
     */
    public function deleteCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenWithOptions($request, $runtime);
    }

    /**
     * Deletes a bandwidth plan instance by calling the DeleteCenBandwidthPackage operation.
     *
     * @remarks
     * <props="china">
     * - Before you delete a bandwidth plan instance, make sure that the bandwidth plan instance is disassociated from the Cloud Enterprise Network (CEN) instance. For more information, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
     * - To delete a bandwidth plan instance whose billing method is PREPAY (subscription), go to the [Order Center](https://usercenter2.aliyun.com/refund/refund) to unsubscribe. If you have questions about unsubscription, see [Unsubscription rules](https://www.alibabacloud.com/help/en/user-center/user-guide/unsubscription-rules#p-1qo-3ce-m7z). This operation does not support deleting subscription bandwidth plan instances.
     * <props="intl">
     * Before you delete a bandwidth plan instance, make sure that the bandwidth plan instance is disassociated from the Cloud Enterprise Network (CEN) instance. For more information, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
     *
     * @param request - DeleteCenBandwidthPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCenBandwidthPackageResponse
     *
     * @param DeleteCenBandwidthPackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCenBandwidthPackageResponse
     */
    public function deleteCenBandwidthPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenBandwidthPackageId) {
            @$query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCenBandwidthPackage',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCenBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a bandwidth plan instance by calling the DeleteCenBandwidthPackage operation.
     *
     * @remarks
     * <props="china">
     * - Before you delete a bandwidth plan instance, make sure that the bandwidth plan instance is disassociated from the Cloud Enterprise Network (CEN) instance. For more information, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
     * - To delete a bandwidth plan instance whose billing method is PREPAY (subscription), go to the [Order Center](https://usercenter2.aliyun.com/refund/refund) to unsubscribe. If you have questions about unsubscription, see [Unsubscription rules](https://www.alibabacloud.com/help/en/user-center/user-guide/unsubscription-rules#p-1qo-3ce-m7z). This operation does not support deleting subscription bandwidth plan instances.
     * <props="intl">
     * Before you delete a bandwidth plan instance, make sure that the bandwidth plan instance is disassociated from the Cloud Enterprise Network (CEN) instance. For more information, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
     *
     * @param request - DeleteCenBandwidthPackageRequest
     *
     * @returns DeleteCenBandwidthPackageResponse
     *
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
     * Deletes a route entry from a network instance connected to an Enterprise Edition transit router.
     *
     * @remarks
     * - Only route entries whose next hop is a **transit router connection** (network instance connection) in Virtual Private Cloud (VPC) instances and Virtual Border Router (VBR) instances can be deleted.
     * - **DeleteCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the route entry is not yet deleted. The deletion task runs in the background. You can call the **DescribeRouteEntryList** operation of VPC to query the status of the route entry.
     *     - If the route entry is in the **Deleting** state, the route entry is being deleted. In this state, you can only query the route entry but cannot perform other operations on it.
     *     - If the specified route entry cannot be found, the route entry is deleted.
     *
     * @param request - DeleteCenChildInstanceRouteEntryToAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCenChildInstanceRouteEntryToAttachmentResponse
     *
     * @param DeleteCenChildInstanceRouteEntryToAttachmentRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DeleteCenChildInstanceRouteEntryToAttachmentResponse
     */
    public function deleteCenChildInstanceRouteEntryToAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeTableId) {
            @$query['RouteTableId'] = $request->routeTableId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCenChildInstanceRouteEntryToAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCenChildInstanceRouteEntryToAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a route entry from a network instance connected to an Enterprise Edition transit router.
     *
     * @remarks
     * - Only route entries whose next hop is a **transit router connection** (network instance connection) in Virtual Private Cloud (VPC) instances and Virtual Border Router (VBR) instances can be deleted.
     * - **DeleteCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the route entry is not yet deleted. The deletion task runs in the background. You can call the **DescribeRouteEntryList** operation of VPC to query the status of the route entry.
     *     - If the route entry is in the **Deleting** state, the route entry is being deleted. In this state, you can only query the route entry but cannot perform other operations on it.
     *     - If the specified route entry cannot be found, the route entry is deleted.
     *
     * @param request - DeleteCenChildInstanceRouteEntryToAttachmentRequest
     *
     * @returns DeleteCenChildInstanceRouteEntryToAttachmentResponse
     *
     * @param DeleteCenChildInstanceRouteEntryToAttachmentRequest $request
     *
     * @return DeleteCenChildInstanceRouteEntryToAttachmentResponse
     */
    public function deleteCenChildInstanceRouteEntryToAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenChildInstanceRouteEntryToAttachmentWithOptions($request, $runtime);
    }

    /**
     * Deletes a route entry from a network instance by calling the DeleteCenChildInstanceRouteEntryToCen operation.
     *
     * @remarks
     * - The DeleteCenChildInstanceRouteEntryToCen operation is not available by default. To use this operation, <props="china">[submit a ticket](https://selfservice.console.aliyun.com/ticket/category/cbn/today)<props="intl">[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * - The DeleteCenChildInstanceRouteEntryToCen operation does not support deleting route entries from network instances attached to an Enterprise Edition transit router.
     *
     * @param request - DeleteCenChildInstanceRouteEntryToCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCenChildInstanceRouteEntryToCenResponse
     *
     * @param DeleteCenChildInstanceRouteEntryToCenRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DeleteCenChildInstanceRouteEntryToCenResponse
     */
    public function deleteCenChildInstanceRouteEntryToCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceAliUid) {
            @$query['ChildInstanceAliUid'] = $request->childInstanceAliUid;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeTableId) {
            @$query['RouteTableId'] = $request->routeTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCenChildInstanceRouteEntryToCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCenChildInstanceRouteEntryToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a route entry from a network instance by calling the DeleteCenChildInstanceRouteEntryToCen operation.
     *
     * @remarks
     * - The DeleteCenChildInstanceRouteEntryToCen operation is not available by default. To use this operation, <props="china">[submit a ticket](https://selfservice.console.aliyun.com/ticket/category/cbn/today)<props="intl">[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * - The DeleteCenChildInstanceRouteEntryToCen operation does not support deleting route entries from network instances attached to an Enterprise Edition transit router.
     *
     * @param request - DeleteCenChildInstanceRouteEntryToCenRequest
     *
     * @returns DeleteCenChildInstanceRouteEntryToCenResponse
     *
     * @param DeleteCenChildInstanceRouteEntryToCenRequest $request
     *
     * @return DeleteCenChildInstanceRouteEntryToCenResponse
     */
    public function deleteCenChildInstanceRouteEntryToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenChildInstanceRouteEntryToCenWithOptions($request, $runtime);
    }

    /**
     * Deletes a traffic scheduling policy by calling the DeleteCenInterRegionTrafficQosPolicy operation.
     *
     * @remarks
     * - Before you delete a traffic scheduling policy, you must delete all queues except the default queue from the traffic scheduling policy. For more information, see [DeleteCenInterRegionTrafficQosQueue](https://help.aliyun.com/document_detail/419062.html).
     * - **DeleteCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the traffic scheduling policy is not yet deleted. The deletion task runs in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of the traffic scheduling policy.
     *     - If the traffic scheduling policy is in the **Deleting** state, the traffic scheduling policy is being deleted. In this state, you can only query the traffic scheduling policy but cannot perform other operations on it.
     *     - If the traffic scheduling policy cannot be found, the traffic scheduling policy is deleted.
     *
     * @param request - DeleteCenInterRegionTrafficQosPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCenInterRegionTrafficQosPolicyResponse
     *
     * @param DeleteCenInterRegionTrafficQosPolicyRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DeleteCenInterRegionTrafficQosPolicyResponse
     */
    public function deleteCenInterRegionTrafficQosPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficQosPolicyId) {
            @$query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCenInterRegionTrafficQosPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCenInterRegionTrafficQosPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a traffic scheduling policy by calling the DeleteCenInterRegionTrafficQosPolicy operation.
     *
     * @remarks
     * - Before you delete a traffic scheduling policy, you must delete all queues except the default queue from the traffic scheduling policy. For more information, see [DeleteCenInterRegionTrafficQosQueue](https://help.aliyun.com/document_detail/419062.html).
     * - **DeleteCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the traffic scheduling policy is not yet deleted. The deletion task runs in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of the traffic scheduling policy.
     *     - If the traffic scheduling policy is in the **Deleting** state, the traffic scheduling policy is being deleted. In this state, you can only query the traffic scheduling policy but cannot perform other operations on it.
     *     - If the traffic scheduling policy cannot be found, the traffic scheduling policy is deleted.
     *
     * @param request - DeleteCenInterRegionTrafficQosPolicyRequest
     *
     * @returns DeleteCenInterRegionTrafficQosPolicyResponse
     *
     * @param DeleteCenInterRegionTrafficQosPolicyRequest $request
     *
     * @return DeleteCenInterRegionTrafficQosPolicyResponse
     */
    public function deleteCenInterRegionTrafficQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenInterRegionTrafficQosPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a queue from a traffic scheduling policy by calling the DeleteCenInterRegionTrafficQosQueue operation.
     *
     * @remarks
     * - The default queue cannot be deleted.
     * - **DeleteCenInterRegionTrafficQosQueue** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the queue is not yet deleted because the deletion task is still running in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the queue information. If the specified queue cannot be found, the queue is deleted.
     *
     * @param request - DeleteCenInterRegionTrafficQosQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCenInterRegionTrafficQosQueueResponse
     *
     * @param DeleteCenInterRegionTrafficQosQueueRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DeleteCenInterRegionTrafficQosQueueResponse
     */
    public function deleteCenInterRegionTrafficQosQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qosQueueId) {
            @$query['QosQueueId'] = $request->qosQueueId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCenInterRegionTrafficQosQueue',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCenInterRegionTrafficQosQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a queue from a traffic scheduling policy by calling the DeleteCenInterRegionTrafficQosQueue operation.
     *
     * @remarks
     * - The default queue cannot be deleted.
     * - **DeleteCenInterRegionTrafficQosQueue** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the queue is not yet deleted because the deletion task is still running in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the queue information. If the specified queue cannot be found, the queue is deleted.
     *
     * @param request - DeleteCenInterRegionTrafficQosQueueRequest
     *
     * @returns DeleteCenInterRegionTrafficQosQueueResponse
     *
     * @param DeleteCenInterRegionTrafficQosQueueRequest $request
     *
     * @return DeleteCenInterRegionTrafficQosQueueResponse
     */
    public function deleteCenInterRegionTrafficQosQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenInterRegionTrafficQosQueueWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified routing policy.
     *
     * @remarks
     * DeleteCenRouteMap is an asynchronous operation. After you send a request, the system returns a **RequestId** but the routing policy is not yet fully deleted because the deletion task is still running in the background. You can call the `DescribeCenRouteMaps` operation to query the status of the routing policy.
     * - If the routing policy is in the **Deleting** state, the routing policy is being deleted. In this state, you can only perform query operations.
     * - If the routing policy cannot be found by calling the `DescribeCenRouteMaps` operation, the routing policy is fully deleted.
     *
     * @param request - DeleteCenRouteMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCenRouteMapResponse
     *
     * @param DeleteCenRouteMapRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCenRouteMapResponse
     */
    public function deleteCenRouteMapWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenRegionId) {
            @$query['CenRegionId'] = $request->cenRegionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeMapId) {
            @$query['RouteMapId'] = $request->routeMapId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCenRouteMap',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCenRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified routing policy.
     *
     * @remarks
     * DeleteCenRouteMap is an asynchronous operation. After you send a request, the system returns a **RequestId** but the routing policy is not yet fully deleted because the deletion task is still running in the background. You can call the `DescribeCenRouteMaps` operation to query the status of the routing policy.
     * - If the routing policy is in the **Deleting** state, the routing policy is being deleted. In this state, you can only perform query operations.
     * - If the routing policy cannot be found by calling the `DescribeCenRouteMaps` operation, the routing policy is fully deleted.
     *
     * @param request - DeleteCenRouteMapRequest
     *
     * @returns DeleteCenRouteMapResponse
     *
     * @param DeleteCenRouteMapRequest $request
     *
     * @return DeleteCenRouteMapResponse
     */
    public function deleteCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * Deletes a flow log.
     *
     * @remarks
     * The `DeleteFlowlog` operation is asynchronous. After you send a request, the system returns a **RequestId** but the flow log is not completely deleted. The deletion task continues to run in the background. You can call the `DescribeFlowlogs` operation to query the status of the flow log.
     * - If the flow log is in the **Deleting** state, the flow log is being deleted. In this state, you can only perform query operations but cannot perform other operations.
     * - If the `DescribeFlowlogs` operation cannot find the flow log, the flow log is completely deleted.
     *
     * @param request - DeleteFlowlogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowlogResponse
     *
     * @param DeleteFlowlogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFlowlogResponse
     */
    public function deleteFlowlogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->flowLogId) {
            @$query['FlowLogId'] = $request->flowLogId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFlowlog',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFlowlogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a flow log.
     *
     * @remarks
     * The `DeleteFlowlog` operation is asynchronous. After you send a request, the system returns a **RequestId** but the flow log is not completely deleted. The deletion task continues to run in the background. You can call the `DescribeFlowlogs` operation to query the status of the flow log.
     * - If the flow log is in the **Deleting** state, the flow log is being deleted. In this state, you can only perform query operations but cannot perform other operations.
     * - If the `DescribeFlowlogs` operation cannot find the flow log, the flow log is completely deleted.
     *
     * @param request - DeleteFlowlogRequest
     *
     * @returns DeleteFlowlogResponse
     *
     * @param DeleteFlowlogRequest $request
     *
     * @return DeleteFlowlogResponse
     */
    public function deleteFlowlog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowlogWithOptions($request, $runtime);
    }

    /**
     * Call the DeleteRouteServiceInCen operation to delete the configuration of an Alibaba Cloud service from a Basic Edition transit router.
     *
     * @remarks
     * *DeleteRouteServiceInCen** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the operation continues in the background. The system returns a request ID even if you specify an invalid parameter. In this case, the Alibaba Cloud service configuration is not deleted. You can call the **DescribeRouteServicesInCen** operation to query the status of the Alibaba Cloud service.
     * - If the Alibaba Cloud service is in the **Deleting** state, you can only query its configuration. You cannot perform other operations.
     * - If the specified Alibaba Cloud service configuration is not found, the configuration has been deleted.
     *
     * @param request - DeleteRouteServiceInCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRouteServiceInCenResponse
     *
     * @param DeleteRouteServiceInCenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteRouteServiceInCenResponse
     */
    public function deleteRouteServiceInCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessRegionId) {
            @$query['AccessRegionId'] = $request->accessRegionId;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->hostRegionId) {
            @$query['HostRegionId'] = $request->hostRegionId;
        }

        if (null !== $request->hostVpcId) {
            @$query['HostVpcId'] = $request->hostVpcId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRouteServiceInCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRouteServiceInCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the DeleteRouteServiceInCen operation to delete the configuration of an Alibaba Cloud service from a Basic Edition transit router.
     *
     * @remarks
     * *DeleteRouteServiceInCen** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the operation continues in the background. The system returns a request ID even if you specify an invalid parameter. In this case, the Alibaba Cloud service configuration is not deleted. You can call the **DescribeRouteServicesInCen** operation to query the status of the Alibaba Cloud service.
     * - If the Alibaba Cloud service is in the **Deleting** state, you can only query its configuration. You cannot perform other operations.
     * - If the specified Alibaba Cloud service configuration is not found, the configuration has been deleted.
     *
     * @param request - DeleteRouteServiceInCenRequest
     *
     * @returns DeleteRouteServiceInCenResponse
     *
     * @param DeleteRouteServiceInCenRequest $request
     *
     * @return DeleteRouteServiceInCenResponse
     */
    public function deleteRouteServiceInCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteServiceInCenWithOptions($request, $runtime);
    }

    /**
     * Deletes a traffic marking policy.
     *
     * @remarks
     * - **DeleteTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the traffic marking policy is not yet deleted. The deletion task continues to run in the background. You can call **ListTrafficMarkingPolicies** to query the status of the traffic marking policy.
     *     - If the traffic marking policy is in the **Deleting** state, the traffic marking policy is being deleted. In this state, you can only query the traffic marking policy but cannot perform other operations on it.
     *     - If the specified traffic marking policy cannot be found, the traffic marking policy is deleted.
     * - Before you delete a traffic marking policy, delete all traffic classification rules from the traffic marking policy. For more information, see [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](https://help.aliyun.com/document_detail/468330.html).
     *
     * @param request - DeleteTrafficMarkingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrafficMarkingPolicyResponse
     *
     * @param DeleteTrafficMarkingPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteTrafficMarkingPolicyResponse
     */
    public function deleteTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkingPolicyId) {
            @$query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrafficMarkingPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a traffic marking policy.
     *
     * @remarks
     * - **DeleteTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the traffic marking policy is not yet deleted. The deletion task continues to run in the background. You can call **ListTrafficMarkingPolicies** to query the status of the traffic marking policy.
     *     - If the traffic marking policy is in the **Deleting** state, the traffic marking policy is being deleted. In this state, you can only query the traffic marking policy but cannot perform other operations on it.
     *     - If the specified traffic marking policy cannot be found, the traffic marking policy is deleted.
     * - Before you delete a traffic marking policy, delete all traffic classification rules from the traffic marking policy. For more information, see [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](https://help.aliyun.com/document_detail/468330.html).
     *
     * @param request - DeleteTrafficMarkingPolicyRequest
     *
     * @returns DeleteTrafficMarkingPolicyResponse
     *
     * @param DeleteTrafficMarkingPolicyRequest $request
     *
     * @return DeleteTrafficMarkingPolicyResponse
     */
    public function deleteTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes an aggregate route.
     *
     * @remarks
     * - Before you delete an aggregate route, make sure that redundant routes exist in the current network. Otherwise, service breaks may occur.
     * - After you delete an aggregate route, the system automatically withdraws the aggregate routing that has been propagated to Virtual Private Cloud (VPC)-connected instances and re-propagates the specific routes within the destination CIDR block of the aggregation route to the VPC-connected instances.
     *
     * @param request - DeleteTransitRouteTableAggregationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouteTableAggregationResponse
     *
     * @param DeleteTransitRouteTableAggregationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteTransitRouteTableAggregationResponse
     */
    public function deleteTransitRouteTableAggregationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouteTableAggregationCidr) {
            @$query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }

        if (null !== $request->transitRouteTableId) {
            @$query['TransitRouteTableId'] = $request->transitRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouteTableAggregation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an aggregate route.
     *
     * @remarks
     * - Before you delete an aggregate route, make sure that redundant routes exist in the current network. Otherwise, service breaks may occur.
     * - After you delete an aggregate route, the system automatically withdraws the aggregate routing that has been propagated to Virtual Private Cloud (VPC)-connected instances and re-propagates the specific routes within the destination CIDR block of the aggregation route to the VPC-connected instances.
     *
     * @param request - DeleteTransitRouteTableAggregationRequest
     *
     * @returns DeleteTransitRouteTableAggregationResponse
     *
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
     * Calls the DeleteTransitRouter operation to delete an Enterprise Edition transit router instance.
     *
     * @remarks
     * *DeleteTransitRouter** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the transit router instance is not yet deleted. The deletion task continues to run in the background. You can call the **ListTransitRouters** operation to query the status of the transit router instance.
     * - If the transit router instance is in the **Deleting** state, the transit router instance is being deleted. In this state, you can only query the transit router instance. You cannot perform other operations on the transit router instance.
     * - If the transit router instance cannot be found, the transit router instance is deleted.
     * ### Before you begin
     * Before you delete a transit router instance, make sure that the following conditions are met:
     * - No connections exist on the transit router instance.
     *     - To delete a Virtual Private Cloud (VPC) connection, see [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html).
     *     - To delete an Express Connect Router (ECR) connection, see [DeleteTransitRouterEcrAttachment](https://help.aliyun.com/document_detail/2715447.html).
     *     - To delete a Cloud Connect Network (CCN) connection, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     *     - To delete a VPN connection, see [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html).
     *     - To delete an inter-region connection, see [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html).
     *     - To delete a Virtual Border Router (VBR) connection, see [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html).
     * - No custom route tables exist on the transit router instance. For more information, see [DeleteTransitRouterRouteTable](https://help.aliyun.com/document_detail/261235.html).
     * - No custom route entries, route prefixes, or aggregate routes exist in the default route table of the transit router instance. For more information, see
     *     - To delete custom route entries of an Enterprise Edition transit router, see [DeleteTransitRouterRouteEntry](https://help.aliyun.com/document_detail/468291.html).
     *     - To disassociate a prefix list, see [DeleteTransitRouterPrefixListAssociation](https://help.aliyun.com/document_detail/468312.html).
     *     - To delete an aggregate route, see [DeleteTransitRouteTableAggregation](https://help.aliyun.com/document_detail/476070.html).
     * - No multicast domains exist on the transit router instance. To delete a multicast domain, see [DeleteTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/468386.html).
     * - No traffic marking policies exist on the transit router instance. To delete a traffic marking policy, see [DeleteTrafficMarkingPolicy](https://help.aliyun.com/document_detail/468324.html).
     *
     * @param request - DeleteTransitRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterResponse
     *
     * @param DeleteTransitRouterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteTransitRouterResponse
     */
    public function deleteTransitRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouter',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DeleteTransitRouter operation to delete an Enterprise Edition transit router instance.
     *
     * @remarks
     * *DeleteTransitRouter** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the transit router instance is not yet deleted. The deletion task continues to run in the background. You can call the **ListTransitRouters** operation to query the status of the transit router instance.
     * - If the transit router instance is in the **Deleting** state, the transit router instance is being deleted. In this state, you can only query the transit router instance. You cannot perform other operations on the transit router instance.
     * - If the transit router instance cannot be found, the transit router instance is deleted.
     * ### Before you begin
     * Before you delete a transit router instance, make sure that the following conditions are met:
     * - No connections exist on the transit router instance.
     *     - To delete a Virtual Private Cloud (VPC) connection, see [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html).
     *     - To delete an Express Connect Router (ECR) connection, see [DeleteTransitRouterEcrAttachment](https://help.aliyun.com/document_detail/2715447.html).
     *     - To delete a Cloud Connect Network (CCN) connection, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     *     - To delete a VPN connection, see [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html).
     *     - To delete an inter-region connection, see [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html).
     *     - To delete a Virtual Border Router (VBR) connection, see [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html).
     * - No custom route tables exist on the transit router instance. For more information, see [DeleteTransitRouterRouteTable](https://help.aliyun.com/document_detail/261235.html).
     * - No custom route entries, route prefixes, or aggregate routes exist in the default route table of the transit router instance. For more information, see
     *     - To delete custom route entries of an Enterprise Edition transit router, see [DeleteTransitRouterRouteEntry](https://help.aliyun.com/document_detail/468291.html).
     *     - To disassociate a prefix list, see [DeleteTransitRouterPrefixListAssociation](https://help.aliyun.com/document_detail/468312.html).
     *     - To delete an aggregate route, see [DeleteTransitRouteTableAggregation](https://help.aliyun.com/document_detail/476070.html).
     * - No multicast domains exist on the transit router instance. To delete a multicast domain, see [DeleteTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/468386.html).
     * - No traffic marking policies exist on the transit router instance. To delete a traffic marking policy, see [DeleteTrafficMarkingPolicy](https://help.aliyun.com/document_detail/468324.html).
     *
     * @param request - DeleteTransitRouterRequest
     *
     * @returns DeleteTransitRouterResponse
     *
     * @param DeleteTransitRouterRequest $request
     *
     * @return DeleteTransitRouterResponse
     */
    public function deleteTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterWithOptions($request, $runtime);
    }

    /**
     * Deletes a CIDR block from a transit router.
     *
     * @remarks
     * A transit router CIDR block that has allocated IP addresses cannot be deleted.
     *
     * @param request - DeleteTransitRouterCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterCidrResponse
     *
     * @param DeleteTransitRouterCidrRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteTransitRouterCidrResponse
     */
    public function deleteTransitRouterCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->transitRouterCidrId) {
            @$query['TransitRouterCidrId'] = $request->transitRouterCidrId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterCidr',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a CIDR block from a transit router.
     *
     * @remarks
     * A transit router CIDR block that has allocated IP addresses cannot be deleted.
     *
     * @param request - DeleteTransitRouterCidrRequest
     *
     * @returns DeleteTransitRouterCidrResponse
     *
     * @param DeleteTransitRouterCidrRequest $request
     *
     * @return DeleteTransitRouterCidrResponse
     */
    public function deleteTransitRouterCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterCidrWithOptions($request, $runtime);
    }

    /**
     * Deletes an Express Connect Router (ECR) connection from an Enterprise Edition transit router.
     *
     * @remarks
     * DeleteTransitRouterEcrAttachment is an asynchronous operation. After you call this operation, the system returns a RequestId, but the ECR connection is not immediately deleted. The deletion task runs in the background. You can call the [ListTransitRouterEcrAttachments](~~2361China~~) operation to query the status of the ECR connection.
     * If the ECR connection is in the **Detaching** state, the ECR connection is being deleted. In this state, you can only query the ECR connection but cannot perform other operations on it.
     * If the specified ECR connection cannot be found, the ECR connection is deleted.
     * When you call the DeleteTransitRouterEcrAttachment operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not delete the ECR connection from the Enterprise Edition transit router.
     *
     * @param request - DeleteTransitRouterEcrAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterEcrAttachmentResponse
     *
     * @param DeleteTransitRouterEcrAttachmentRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteTransitRouterEcrAttachmentResponse
     */
    public function deleteTransitRouterEcrAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterEcrAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterEcrAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Express Connect Router (ECR) connection from an Enterprise Edition transit router.
     *
     * @remarks
     * DeleteTransitRouterEcrAttachment is an asynchronous operation. After you call this operation, the system returns a RequestId, but the ECR connection is not immediately deleted. The deletion task runs in the background. You can call the [ListTransitRouterEcrAttachments](~~2361China~~) operation to query the status of the ECR connection.
     * If the ECR connection is in the **Detaching** state, the ECR connection is being deleted. In this state, you can only query the ECR connection but cannot perform other operations on it.
     * If the specified ECR connection cannot be found, the ECR connection is deleted.
     * When you call the DeleteTransitRouterEcrAttachment operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not delete the ECR connection from the Enterprise Edition transit router.
     *
     * @param request - DeleteTransitRouterEcrAttachmentRequest
     *
     * @returns DeleteTransitRouterEcrAttachmentResponse
     *
     * @param DeleteTransitRouterEcrAttachmentRequest $request
     *
     * @return DeleteTransitRouterEcrAttachmentResponse
     */
    public function deleteTransitRouterEcrAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterEcrAttachmentWithOptions($request, $runtime);
    }

    /**
     * Deletes a multicast domain by calling the DeleteTransitRouterMulticastDomain operation.
     *
     * @remarks
     * Before you delete a multicast domain, make sure that the following conditions are met:
     * - The multicast domain is not associated with any vSwitches. For more information, see [DisassociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429774.html).
     * - No multicast sources or multicast members exist in the multicast domain. For more information, see [DeregisterTransitRouterMulticastGroupSources](https://help.aliyun.com/document_detail/429776.html) and [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/429779.html).
     * - The multicast domain is not associated with other multicast domains as a multicast member. You can delete the multicast member from other multicast domains to dissociate the other multicast domains from the current multicast domain. For more information, see [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/429779.html).
     * - Make sure that the parameter values you specify are valid when you call this operation. If you specify invalid parameter values, the system still returns a RequestId but does not delete the multicast domain.
     *
     * @param request - DeleteTransitRouterMulticastDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterMulticastDomainResponse
     *
     * @param DeleteTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteTransitRouterMulticastDomainResponse
     */
    public function deleteTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterMulticastDomain',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a multicast domain by calling the DeleteTransitRouterMulticastDomain operation.
     *
     * @remarks
     * Before you delete a multicast domain, make sure that the following conditions are met:
     * - The multicast domain is not associated with any vSwitches. For more information, see [DisassociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429774.html).
     * - No multicast sources or multicast members exist in the multicast domain. For more information, see [DeregisterTransitRouterMulticastGroupSources](https://help.aliyun.com/document_detail/429776.html) and [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/429779.html).
     * - The multicast domain is not associated with other multicast domains as a multicast member. You can delete the multicast member from other multicast domains to dissociate the other multicast domains from the current multicast domain. For more information, see [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/429779.html).
     * - Make sure that the parameter values you specify are valid when you call this operation. If you specify invalid parameter values, the system still returns a RequestId but does not delete the multicast domain.
     *
     * @param request - DeleteTransitRouterMulticastDomainRequest
     *
     * @returns DeleteTransitRouterMulticastDomainResponse
     *
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
     * Calls the DeleteTransitRouterPeerAttachment operation to delete an inter-region connection from an Enterprise Edition transit router.
     *
     * @remarks
     * The **DeleteTransitRouterPeerAttachment** operation is asynchronous. After you send a request, the system returns a **RequestId** but the inter-region connection is not immediately deleted. The deletion task continues to run in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of the inter-region connection.
     * - If the inter-region connection is in the **Detaching** state, the inter-region connection is being deleted. In this state, you can only query the inter-region connection but cannot perform other operations on it.
     * - If the specified inter-region connection cannot be found, the inter-region connection is deleted.
     * When calling the **DeleteTransitRouterPeerAttachment** operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a **RequestId** but does not delete the inter-region connection from the Enterprise Edition transit router.
     *
     * @param request - DeleteTransitRouterPeerAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterPeerAttachmentResponse
     *
     * @param DeleteTransitRouterPeerAttachmentRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteTransitRouterPeerAttachmentResponse
     */
    public function deleteTransitRouterPeerAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterPeerAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterPeerAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DeleteTransitRouterPeerAttachment operation to delete an inter-region connection from an Enterprise Edition transit router.
     *
     * @remarks
     * The **DeleteTransitRouterPeerAttachment** operation is asynchronous. After you send a request, the system returns a **RequestId** but the inter-region connection is not immediately deleted. The deletion task continues to run in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of the inter-region connection.
     * - If the inter-region connection is in the **Detaching** state, the inter-region connection is being deleted. In this state, you can only query the inter-region connection but cannot perform other operations on it.
     * - If the specified inter-region connection cannot be found, the inter-region connection is deleted.
     * When calling the **DeleteTransitRouterPeerAttachment** operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a **RequestId** but does not delete the inter-region connection from the Enterprise Edition transit router.
     *
     * @param request - DeleteTransitRouterPeerAttachmentRequest
     *
     * @returns DeleteTransitRouterPeerAttachmentResponse
     *
     * @param DeleteTransitRouterPeerAttachmentRequest $request
     *
     * @return DeleteTransitRouterPeerAttachmentResponse
     */
    public function deleteTransitRouterPeerAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterPeerAttachmentWithOptions($request, $runtime);
    }

    /**
     * Dissociates a prefix list from an Enterprise Edition transit router route table.
     *
     * @remarks
     * >Warning: After a prefix list is dissociated from an Enterprise Edition transit router route table, the system automatically withdraws all route entries related to the prefix list from the Enterprise Edition transit router route table. Before dissociating the prefix list, make sure that redundant routes exist in the Enterprise Edition transit router route table. Otherwise, network interruptions may occur.
     *
     * @param request - DeleteTransitRouterPrefixListAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterPrefixListAssociationResponse
     *
     * @param DeleteTransitRouterPrefixListAssociationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DeleteTransitRouterPrefixListAssociationResponse
     */
    public function deleteTransitRouterPrefixListAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->nextHop) {
            @$query['NextHop'] = $request->nextHop;
        }

        if (null !== $request->nextHopType) {
            @$query['NextHopType'] = $request->nextHopType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prefixListId) {
            @$query['PrefixListId'] = $request->prefixListId;
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

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterTableId) {
            @$query['TransitRouterTableId'] = $request->transitRouterTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterPrefixListAssociation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterPrefixListAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates a prefix list from an Enterprise Edition transit router route table.
     *
     * @remarks
     * >Warning: After a prefix list is dissociated from an Enterprise Edition transit router route table, the system automatically withdraws all route entries related to the prefix list from the Enterprise Edition transit router route table. Before dissociating the prefix list, make sure that redundant routes exist in the Enterprise Edition transit router route table. Otherwise, network interruptions may occur.
     *
     * @param request - DeleteTransitRouterPrefixListAssociationRequest
     *
     * @returns DeleteTransitRouterPrefixListAssociationResponse
     *
     * @param DeleteTransitRouterPrefixListAssociationRequest $request
     *
     * @return DeleteTransitRouterPrefixListAssociationResponse
     */
    public function deleteTransitRouterPrefixListAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterPrefixListAssociationWithOptions($request, $runtime);
    }

    /**
     * Calls the DeleteTransitRouterRouteEntry operation to delete static route entries of the blackhole or connection instance type from an Enterprise Edition transit router forward route table.
     *
     * @remarks
     * Before you call this operation to delete a route entry, take note of the following information:
     * - If you specify **TransitRouterRouteEntryId** to delete a route entry, you do not need to specify **TransitRouterRouteTableId** or **TransitRouterRouteEntryDestinationCidrBlock**. Otherwise, a parameter conflict error occurs.
     * - If you do not specify **TransitRouterRouteEntryId** to delete a route entry, specify the corresponding parameters based on the next hop type of the route entry:
     *     - To delete a blackhole route, specify **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, and **TransitRouterRouteEntryNextHopType**.
     *     - To delete a non-blackhole route, specify **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, **TransitRouterRouteEntryNextHopType**, and **TransitRouterRouteEntryNextHopId**.
     * - **DeleteTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the route entry is not yet deleted. The deletion task runs in the background. You can call **ListTransitRouterRouteEntries** to query the status of the route entry.
     *     - If the route entry is in the **Deleting** state, the route entry is being deleted. In this state, you can only query the route entry but cannot perform other operations on it.
     *     - If the route entry cannot be found, the route entry is deleted.
     * ### Limits
     * This operation can delete only static route entries. Automatically learned route entries cannot be deleted. You can call [ListTransitRouterRouteEntries](https://help.aliyun.com/document_detail/260941.html) to query the type of a route entry.
     *
     * @param request - DeleteTransitRouterRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterRouteEntryResponse
     *
     * @param DeleteTransitRouterRouteEntryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteTransitRouterRouteEntryResponse
     */
    public function deleteTransitRouterRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterRouteEntryDestinationCidrBlock) {
            @$query['TransitRouterRouteEntryDestinationCidrBlock'] = $request->transitRouterRouteEntryDestinationCidrBlock;
        }

        if (null !== $request->transitRouterRouteEntryId) {
            @$query['TransitRouterRouteEntryId'] = $request->transitRouterRouteEntryId;
        }

        if (null !== $request->transitRouterRouteEntryNextHopId) {
            @$query['TransitRouterRouteEntryNextHopId'] = $request->transitRouterRouteEntryNextHopId;
        }

        if (null !== $request->transitRouterRouteEntryNextHopType) {
            @$query['TransitRouterRouteEntryNextHopType'] = $request->transitRouterRouteEntryNextHopType;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterRouteEntry',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DeleteTransitRouterRouteEntry operation to delete static route entries of the blackhole or connection instance type from an Enterprise Edition transit router forward route table.
     *
     * @remarks
     * Before you call this operation to delete a route entry, take note of the following information:
     * - If you specify **TransitRouterRouteEntryId** to delete a route entry, you do not need to specify **TransitRouterRouteTableId** or **TransitRouterRouteEntryDestinationCidrBlock**. Otherwise, a parameter conflict error occurs.
     * - If you do not specify **TransitRouterRouteEntryId** to delete a route entry, specify the corresponding parameters based on the next hop type of the route entry:
     *     - To delete a blackhole route, specify **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, and **TransitRouterRouteEntryNextHopType**.
     *     - To delete a non-blackhole route, specify **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, **TransitRouterRouteEntryNextHopType**, and **TransitRouterRouteEntryNextHopId**.
     * - **DeleteTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the route entry is not yet deleted. The deletion task runs in the background. You can call **ListTransitRouterRouteEntries** to query the status of the route entry.
     *     - If the route entry is in the **Deleting** state, the route entry is being deleted. In this state, you can only query the route entry but cannot perform other operations on it.
     *     - If the route entry cannot be found, the route entry is deleted.
     * ### Limits
     * This operation can delete only static route entries. Automatically learned route entries cannot be deleted. You can call [ListTransitRouterRouteEntries](https://help.aliyun.com/document_detail/260941.html) to query the type of a route entry.
     *
     * @param request - DeleteTransitRouterRouteEntryRequest
     *
     * @returns DeleteTransitRouterRouteEntryResponse
     *
     * @param DeleteTransitRouterRouteEntryRequest $request
     *
     * @return DeleteTransitRouterRouteEntryResponse
     */
    public function deleteTransitRouterRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterRouteEntryWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom route table from an Enterprise Edition transit router by calling the DeleteTransitRouterRouteTable operation.
     *
     * @remarks
     * - The default route table of an Enterprise Edition transit router cannot be deleted.
     * - **DeleteTransitRouterRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the custom route table is not yet deleted. The deletion task continues to run in the background. You can call **ListTransitRouterRouteTables** to query the status of the custom route table.
     *     - If the custom route table is in the Deleting state, the custom route table is being deleted. In this state, you can only query the custom route table but cannot perform other operations on it.
     *     - If the custom route table cannot be found, the custom route table is deleted.
     *
     * @param request - DeleteTransitRouterRouteTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterRouteTableResponse
     *
     * @param DeleteTransitRouterRouteTableRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteTransitRouterRouteTableResponse
     */
    public function deleteTransitRouterRouteTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterRouteTable',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom route table from an Enterprise Edition transit router by calling the DeleteTransitRouterRouteTable operation.
     *
     * @remarks
     * - The default route table of an Enterprise Edition transit router cannot be deleted.
     * - **DeleteTransitRouterRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the custom route table is not yet deleted. The deletion task continues to run in the background. You can call **ListTransitRouterRouteTables** to query the status of the custom route table.
     *     - If the custom route table is in the Deleting state, the custom route table is being deleted. In this state, you can only query the custom route table but cannot perform other operations on it.
     *     - If the custom route table cannot be found, the custom route table is deleted.
     *
     * @param request - DeleteTransitRouterRouteTableRequest
     *
     * @returns DeleteTransitRouterRouteTableResponse
     *
     * @param DeleteTransitRouterRouteTableRequest $request
     *
     * @return DeleteTransitRouterRouteTableResponse
     */
    public function deleteTransitRouterRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterRouteTableWithOptions($request, $runtime);
    }

    /**
     * Deletes a virtual border router (VBR) connection from an Enterprise Edition transit router.
     *
     * @remarks
     * *DeleteTransitRouterVbrAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the VBR connection is not yet deleted. The deletion task continues to run in the background. You can call **ListTransitRouterVbrAttachments** to query the status of the VBR connection.
     * - If the VBR connection is in the **Detaching** state, the VBR connection is being deleted. In this state, you can only query the VBR connection but cannot perform other operations on it.
     * - If the specified VBR connection cannot be found, the VBR connection is deleted.
     * When calling the DeleteTransitRouterVbrAttachment operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not delete the VBR connection from the Enterprise Edition transit router.
     *
     * @param request - DeleteTransitRouterVbrAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterVbrAttachmentResponse
     *
     * @param DeleteTransitRouterVbrAttachmentRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteTransitRouterVbrAttachmentResponse
     */
    public function deleteTransitRouterVbrAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterVbrAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterVbrAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual border router (VBR) connection from an Enterprise Edition transit router.
     *
     * @remarks
     * *DeleteTransitRouterVbrAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the VBR connection is not yet deleted. The deletion task continues to run in the background. You can call **ListTransitRouterVbrAttachments** to query the status of the VBR connection.
     * - If the VBR connection is in the **Detaching** state, the VBR connection is being deleted. In this state, you can only query the VBR connection but cannot perform other operations on it.
     * - If the specified VBR connection cannot be found, the VBR connection is deleted.
     * When calling the DeleteTransitRouterVbrAttachment operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not delete the VBR connection from the Enterprise Edition transit router.
     *
     * @param request - DeleteTransitRouterVbrAttachmentRequest
     *
     * @returns DeleteTransitRouterVbrAttachmentResponse
     *
     * @param DeleteTransitRouterVbrAttachmentRequest $request
     *
     * @return DeleteTransitRouterVbrAttachmentResponse
     */
    public function deleteTransitRouterVbrAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterVbrAttachmentWithOptions($request, $runtime);
    }

    /**
     * Calls the DeleteTransitRouterVpcAttachment operation to delete a virtual private cloud (VPC) connection from an Enterprise Edition transit router.
     *
     * @remarks
     * *DeleteTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the VPC connection is not yet deleted. The deletion task continues to run in the background. You can call **ListTransitRouterVpcAttachments** to query the status of the VPC connection.
     * - If the VPC connection is in the **Detaching** state, the VPC connection is being deleted. In this state, you can only query the VPC connection. You cannot perform other operations on the VPC connection.
     * - If the VPC connection cannot be found, the VPC connection is deleted.
     * When you call **DeleteTransitRouterVpcAttachment**, make sure that the parameter values you specify are valid. If you specify invalid parameter values, the system still returns a **RequestId** but does not delete the VPC connection from the Enterprise Edition transit router.
     * ### Before you begin
     * Before you delete a VPC connection, make sure that you have not configured a routing rule to access PrivateZone by using the VPC-connected instance. To delete the routing rule to PrivateZone, see [UnroutePrivateZoneInCenToVpc](https://help.aliyun.com/document_detail/468375.html).
     *
     * @param request - DeleteTransitRouterVpcAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterVpcAttachmentResponse
     *
     * @param DeleteTransitRouterVpcAttachmentRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteTransitRouterVpcAttachmentResponse
     */
    public function deleteTransitRouterVpcAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterVpcAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterVpcAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DeleteTransitRouterVpcAttachment operation to delete a virtual private cloud (VPC) connection from an Enterprise Edition transit router.
     *
     * @remarks
     * *DeleteTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the VPC connection is not yet deleted. The deletion task continues to run in the background. You can call **ListTransitRouterVpcAttachments** to query the status of the VPC connection.
     * - If the VPC connection is in the **Detaching** state, the VPC connection is being deleted. In this state, you can only query the VPC connection. You cannot perform other operations on the VPC connection.
     * - If the VPC connection cannot be found, the VPC connection is deleted.
     * When you call **DeleteTransitRouterVpcAttachment**, make sure that the parameter values you specify are valid. If you specify invalid parameter values, the system still returns a **RequestId** but does not delete the VPC connection from the Enterprise Edition transit router.
     * ### Before you begin
     * Before you delete a VPC connection, make sure that you have not configured a routing rule to access PrivateZone by using the VPC-connected instance. To delete the routing rule to PrivateZone, see [UnroutePrivateZoneInCenToVpc](https://help.aliyun.com/document_detail/468375.html).
     *
     * @param request - DeleteTransitRouterVpcAttachmentRequest
     *
     * @returns DeleteTransitRouterVpcAttachmentResponse
     *
     * @param DeleteTransitRouterVpcAttachmentRequest $request
     *
     * @return DeleteTransitRouterVpcAttachmentResponse
     */
    public function deleteTransitRouterVpcAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterVpcAttachmentWithOptions($request, $runtime);
    }

    /**
     * Deletes a VPN connection by calling the DeleteTransitRouterVpnAttachment operation.
     *
     * @remarks
     * When you call the **DeleteTransitRouterVpnAttachment** operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a **RequestId** but does not delete the VPN connection.
     *
     * @param request - DeleteTransitRouterVpnAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransitRouterVpnAttachmentResponse
     *
     * @param DeleteTransitRouterVpnAttachmentRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteTransitRouterVpnAttachmentResponse
     */
    public function deleteTransitRouterVpnAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransitRouterVpnAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransitRouterVpnAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a VPN connection by calling the DeleteTransitRouterVpnAttachment operation.
     *
     * @remarks
     * When you call the **DeleteTransitRouterVpnAttachment** operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a **RequestId** but does not delete the VPN connection.
     *
     * @param request - DeleteTransitRouterVpnAttachmentRequest
     *
     * @returns DeleteTransitRouterVpnAttachmentResponse
     *
     * @param DeleteTransitRouterVpnAttachmentRequest $request
     *
     * @return DeleteTransitRouterVpnAttachmentResponse
     */
    public function deleteTransitRouterVpnAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransitRouterVpnAttachmentWithOptions($request, $runtime);
    }

    /**
     * Removes a multicast member from a multicast group if the member no longer needs to receive multicast traffic by calling the DeregisterTransitRouterMulticastGroupMembers operation.
     *
     * @remarks
     * `DeregisterTransitRouterMulticastGroupMembers` is an asynchronous operation. After you call this operation, the system returns a **RequestId** but the multicast member is not immediately removed. The removal task continues to run in the background. You can call `ListTransitRouterMulticastGroups` to query the status of the multicast member.
     * - If the multicast member is in the **Deregistering** state, the multicast member is being removed. In this state, you can only query the multicast member but cannot perform other operations on it.
     * - If the multicast member cannot be found in the multicast domain when you call the `ListTransitRouterMulticastGroups` operation, the multicast member has been removed.
     * When you call the DeregisterTransitRouterMulticastGroupMembers operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not remove the multicast member.
     *
     * @param request - DeregisterTransitRouterMulticastGroupMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeregisterTransitRouterMulticastGroupMembersResponse
     *
     * @param DeregisterTransitRouterMulticastGroupMembersRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DeregisterTransitRouterMulticastGroupMembersResponse
     */
    public function deregisterTransitRouterMulticastGroupMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->groupIpAddress) {
            @$query['GroupIpAddress'] = $request->groupIpAddress;
        }

        if (null !== $request->networkInterfaceIds) {
            @$query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->peerTransitRouterMulticastDomains) {
            @$query['PeerTransitRouterMulticastDomains'] = $request->peerTransitRouterMulticastDomains;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeregisterTransitRouterMulticastGroupMembers',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeregisterTransitRouterMulticastGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a multicast member from a multicast group if the member no longer needs to receive multicast traffic by calling the DeregisterTransitRouterMulticastGroupMembers operation.
     *
     * @remarks
     * `DeregisterTransitRouterMulticastGroupMembers` is an asynchronous operation. After you call this operation, the system returns a **RequestId** but the multicast member is not immediately removed. The removal task continues to run in the background. You can call `ListTransitRouterMulticastGroups` to query the status of the multicast member.
     * - If the multicast member is in the **Deregistering** state, the multicast member is being removed. In this state, you can only query the multicast member but cannot perform other operations on it.
     * - If the multicast member cannot be found in the multicast domain when you call the `ListTransitRouterMulticastGroups` operation, the multicast member has been removed.
     * When you call the DeregisterTransitRouterMulticastGroupMembers operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not remove the multicast member.
     *
     * @param request - DeregisterTransitRouterMulticastGroupMembersRequest
     *
     * @returns DeregisterTransitRouterMulticastGroupMembersResponse
     *
     * @param DeregisterTransitRouterMulticastGroupMembersRequest $request
     *
     * @return DeregisterTransitRouterMulticastGroupMembersResponse
     */
    public function deregisterTransitRouterMulticastGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterTransitRouterMulticastGroupMembersWithOptions($request, $runtime);
    }

    /**
     * Removes a multicast source from a multicast group if you no longer need the multicast source to send multicast traffic.
     *
     * @remarks
     * `DeregisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you call this operation, the system returns a **RequestId** but the multicast source is not immediately deleted. The deletion task continues to run in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast source.
     * - If the multicast source is in the **Deregistering** state, the multicast source is being deleted. In this state, you can only query the multicast source but cannot perform other operations on it.
     * - If the `ListTransitRouterMulticastGroups` operation cannot find the multicast source in the multicast domain, the multicast source has been deleted.
     * When you call the DeregisterTransitRouterMulticastGroupSources operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not delete the multicast source.
     *
     * @param request - DeregisterTransitRouterMulticastGroupSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeregisterTransitRouterMulticastGroupSourcesResponse
     *
     * @param DeregisterTransitRouterMulticastGroupSourcesRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DeregisterTransitRouterMulticastGroupSourcesResponse
     */
    public function deregisterTransitRouterMulticastGroupSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->groupIpAddress) {
            @$query['GroupIpAddress'] = $request->groupIpAddress;
        }

        if (null !== $request->networkInterfaceIds) {
            @$query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeregisterTransitRouterMulticastGroupSources',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeregisterTransitRouterMulticastGroupSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a multicast source from a multicast group if you no longer need the multicast source to send multicast traffic.
     *
     * @remarks
     * `DeregisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you call this operation, the system returns a **RequestId** but the multicast source is not immediately deleted. The deletion task continues to run in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast source.
     * - If the multicast source is in the **Deregistering** state, the multicast source is being deleted. In this state, you can only query the multicast source but cannot perform other operations on it.
     * - If the `ListTransitRouterMulticastGroups` operation cannot find the multicast source in the multicast domain, the multicast source has been deleted.
     * When you call the DeregisterTransitRouterMulticastGroupSources operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not delete the multicast source.
     *
     * @param request - DeregisterTransitRouterMulticastGroupSourcesRequest
     *
     * @returns DeregisterTransitRouterMulticastGroupSourcesResponse
     *
     * @param DeregisterTransitRouterMulticastGroupSourcesRequest $request
     *
     * @return DeregisterTransitRouterMulticastGroupSourcesResponse
     */
    public function deregisterTransitRouterMulticastGroupSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterTransitRouterMulticastGroupSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a network instance (VPC, VBR, or CCN) attached to a Cloud Enterprise Network (CEN) instance, including the attachment status and network instance type.
     *
     * @param request - DescribeCenAttachedChildInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenAttachedChildInstanceAttributeResponse
     *
     * @param DescribeCenAttachedChildInstanceAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeCenAttachedChildInstanceAttributeResponse
     */
    public function describeCenAttachedChildInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenAttachedChildInstanceAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenAttachedChildInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a network instance (VPC, VBR, or CCN) attached to a Cloud Enterprise Network (CEN) instance, including the attachment status and network instance type.
     *
     * @param request - DescribeCenAttachedChildInstanceAttributeRequest
     *
     * @returns DescribeCenAttachedChildInstanceAttributeResponse
     *
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
     * Queries information about network instances attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can use this operation to query network instances attached to a CEN instance in the following ways:
     * - Specify `CenId` to query all network instances attached to the CEN instance.
     * - Specify `CenId` and `ChildInstanceRegionId` to query network instances attached to the CEN instance in a specific region.
     * - Specify `CenId` and `ChildInstanceType` to query network instances of a specific type attached to the CEN instance.
     *
     * @param request - DescribeCenAttachedChildInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenAttachedChildInstancesResponse
     *
     * @param DescribeCenAttachedChildInstancesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeCenAttachedChildInstancesResponse
     */
    public function describeCenAttachedChildInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenAttachedChildInstances',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenAttachedChildInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about network instances attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can use this operation to query network instances attached to a CEN instance in the following ways:
     * - Specify `CenId` to query all network instances attached to the CEN instance.
     * - Specify `CenId` and `ChildInstanceRegionId` to query network instances attached to the CEN instance in a specific region.
     * - Specify `CenId` and `ChildInstanceType` to query network instances of a specific type attached to the CEN instance.
     *
     * @param request - DescribeCenAttachedChildInstancesRequest
     *
     * @returns DescribeCenAttachedChildInstancesResponse
     *
     * @param DescribeCenAttachedChildInstancesRequest $request
     *
     * @return DescribeCenAttachedChildInstancesResponse
     */
    public function describeCenAttachedChildInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenAttachedChildInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries information about bandwidth package instances by calling the DescribeCenBandwidthPackages operation.
     *
     * @param request - DescribeCenBandwidthPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenBandwidthPackagesResponse
     *
     * @param DescribeCenBandwidthPackagesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCenBandwidthPackagesResponse
     */
    public function describeCenBandwidthPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->includeReservationData) {
            @$query['IncludeReservationData'] = $request->includeReservationData;
        }

        if (null !== $request->isOrKey) {
            @$query['IsOrKey'] = $request->isOrKey;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenBandwidthPackages',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenBandwidthPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about bandwidth package instances by calling the DescribeCenBandwidthPackages operation.
     *
     * @param request - DescribeCenBandwidthPackagesRequest
     *
     * @returns DescribeCenBandwidthPackagesResponse
     *
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
     * Invokes the DescribeCenChildInstanceRouteEntries operation to query the route entries of a network instance in a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - DescribeCenChildInstanceRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenChildInstanceRouteEntriesResponse
     *
     * @param DescribeCenChildInstanceRouteEntriesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeCenChildInstanceRouteEntriesResponse
     */
    public function describeCenChildInstanceRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceRouteTableId) {
            @$query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenChildInstanceRouteEntries',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenChildInstanceRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the DescribeCenChildInstanceRouteEntries operation to query the route entries of a network instance in a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - DescribeCenChildInstanceRouteEntriesRequest
     *
     * @returns DescribeCenChildInstanceRouteEntriesResponse
     *
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
     * Queries the remaining bandwidth of a specified bandwidth plan instance.
     *
     * @param request - DescribeCenGeographicSpanRemainingBandwidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenGeographicSpanRemainingBandwidthResponse
     *
     * @param DescribeCenGeographicSpanRemainingBandwidthRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeCenGeographicSpanRemainingBandwidthResponse
     */
    public function describeCenGeographicSpanRemainingBandwidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->geographicRegionAId) {
            @$query['GeographicRegionAId'] = $request->geographicRegionAId;
        }

        if (null !== $request->geographicRegionBId) {
            @$query['GeographicRegionBId'] = $request->geographicRegionBId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenGeographicSpanRemainingBandwidth',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenGeographicSpanRemainingBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the remaining bandwidth of a specified bandwidth plan instance.
     *
     * @param request - DescribeCenGeographicSpanRemainingBandwidthRequest
     *
     * @returns DescribeCenGeographicSpanRemainingBandwidthResponse
     *
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
     * Queries information about connected areas supported by Cloud Enterprise Network (CEN) by calling the DescribeCenGeographicSpans operation.
     *
     * @param request - DescribeCenGeographicSpansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenGeographicSpansResponse
     *
     * @param DescribeCenGeographicSpansRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCenGeographicSpansResponse
     */
    public function describeCenGeographicSpansWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->geographicSpanId) {
            @$query['GeographicSpanId'] = $request->geographicSpanId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenGeographicSpans',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenGeographicSpansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about connected areas supported by Cloud Enterprise Network (CEN) by calling the DescribeCenGeographicSpans operation.
     *
     * @param request - DescribeCenGeographicSpansRequest
     *
     * @returns DescribeCenGeographicSpansResponse
     *
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
     * Queries the inter-region bandwidth information between regions by calling the DescribeCenInterRegionBandwidthLimits operation.
     *
     * @param request - DescribeCenInterRegionBandwidthLimitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenInterRegionBandwidthLimitsResponse
     *
     * @param DescribeCenInterRegionBandwidthLimitsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeCenInterRegionBandwidthLimitsResponse
     */
    public function describeCenInterRegionBandwidthLimitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trRegionId) {
            @$query['TrRegionId'] = $request->trRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenInterRegionBandwidthLimits',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenInterRegionBandwidthLimitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the inter-region bandwidth information between regions by calling the DescribeCenInterRegionBandwidthLimits operation.
     *
     * @param request - DescribeCenInterRegionBandwidthLimitsRequest
     *
     * @returns DescribeCenInterRegionBandwidthLimitsResponse
     *
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
     * Queries the PrivateZone service configuration of a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - DescribeCenPrivateZoneRoutesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenPrivateZoneRoutesResponse
     *
     * @param DescribeCenPrivateZoneRoutesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCenPrivateZoneRoutesResponse
     */
    public function describeCenPrivateZoneRoutesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessRegionId) {
            @$query['AccessRegionId'] = $request->accessRegionId;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->hostRegionId) {
            @$query['HostRegionId'] = $request->hostRegionId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenPrivateZoneRoutes',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenPrivateZoneRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the PrivateZone service configuration of a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - DescribeCenPrivateZoneRoutesRequest
     *
     * @returns DescribeCenPrivateZoneRoutesResponse
     *
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
     * Queries the details of route entries in a specific region of a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - DescribeCenRegionDomainRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenRegionDomainRouteEntriesResponse
     *
     * @param DescribeCenRegionDomainRouteEntriesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCenRegionDomainRouteEntriesResponse
     */
    public function describeCenRegionDomainRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenRegionId) {
            @$query['CenRegionId'] = $request->cenRegionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenRegionDomainRouteEntries',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenRegionDomainRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of route entries in a specific region of a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - DescribeCenRegionDomainRouteEntriesRequest
     *
     * @returns DescribeCenRegionDomainRouteEntriesResponse
     *
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
     * Queries the configured information in route maps by calling the DescribeCenRouteMaps operation.
     *
     * @param request - DescribeCenRouteMapsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenRouteMapsResponse
     *
     * @param DescribeCenRouteMapsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCenRouteMapsResponse
     */
    public function describeCenRouteMapsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenRegionId) {
            @$query['CenRegionId'] = $request->cenRegionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeMapId) {
            @$query['RouteMapId'] = $request->routeMapId;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        if (null !== $request->transmitDirection) {
            @$query['TransmitDirection'] = $request->transmitDirection;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenRouteMaps',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenRouteMapsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configured information in route maps by calling the DescribeCenRouteMaps operation.
     *
     * @param request - DescribeCenRouteMapsRequest
     *
     * @returns DescribeCenRouteMapsResponse
     *
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
     * Queries health check information about virtual border routers (VBRs) in a specified region.
     *
     * @param request - DescribeCenVbrHealthCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenVbrHealthCheckResponse
     *
     * @param DescribeCenVbrHealthCheckRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCenVbrHealthCheckResponse
     */
    public function describeCenVbrHealthCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->vbrInstanceId) {
            @$query['VbrInstanceId'] = $request->vbrInstanceId;
        }

        if (null !== $request->vbrInstanceOwnerId) {
            @$query['VbrInstanceOwnerId'] = $request->vbrInstanceOwnerId;
        }

        if (null !== $request->vbrInstanceRegionId) {
            @$query['VbrInstanceRegionId'] = $request->vbrInstanceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenVbrHealthCheck',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenVbrHealthCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries health check information about virtual border routers (VBRs) in a specified region.
     *
     * @param request - DescribeCenVbrHealthCheckRequest
     *
     * @returns DescribeCenVbrHealthCheckResponse
     *
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
     * Queries information about Cloud Enterprise Network (CEN) instances under the current Alibaba Cloud account, including the instance status, whether IPv6 is enabled, and the list of bandwidth packages associated with the instances.
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
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCens',
            'version' => '2017-09-12',
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
     * Queries information about Cloud Enterprise Network (CEN) instances under the current Alibaba Cloud account, including the instance status, whether IPv6 is enabled, and the list of bandwidth packages associated with the instances.
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
     * Queries the regions that support network instances loaded to Cloud Enterprise Network (CEN).
     *
     * @remarks
     * CEN supports different regions for different network instance types. You can specify the ProductType parameter to query the regions supported by CEN for a specific network instance type. If you do not specify the ProductType parameter, the system queries the regions supported by CEN for all network instance types by default.
     *
     * @param request - DescribeChildInstanceRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChildInstanceRegionsResponse
     *
     * @param DescribeChildInstanceRegionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeChildInstanceRegionsResponse
     */
    public function describeChildInstanceRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChildInstanceRegions',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChildInstanceRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions that support network instances loaded to Cloud Enterprise Network (CEN).
     *
     * @remarks
     * CEN supports different regions for different network instance types. You can specify the ProductType parameter to query the regions supported by CEN for a specific network instance type. If you do not specify the ProductType parameter, the system queries the regions supported by CEN for all network instance types by default.
     *
     * @param request - DescribeChildInstanceRegionsRequest
     *
     * @returns DescribeChildInstanceRegionsResponse
     *
     * @param DescribeChildInstanceRegionsRequest $request
     *
     * @return DescribeChildInstanceRegionsResponse
     */
    public function describeChildInstanceRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChildInstanceRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries flow logs.
     *
     * @param request - DescribeFlowlogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFlowlogsResponse
     *
     * @param DescribeFlowlogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFlowlogsResponse
     */
    public function describeFlowlogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->flowLogId) {
            @$query['FlowLogId'] = $request->flowLogId;
        }

        if (null !== $request->flowLogName) {
            @$query['FlowLogName'] = $request->flowLogName;
        }

        if (null !== $request->flowLogVersion) {
            @$query['FlowLogVersion'] = $request->flowLogVersion;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFlowlogs',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFlowlogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries flow logs.
     *
     * @param request - DescribeFlowlogsRequest
     *
     * @returns DescribeFlowlogsResponse
     *
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
     * Queries region information within a specified area.
     *
     * @param request - DescribeGeographicRegionMembershipRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGeographicRegionMembershipResponse
     *
     * @param DescribeGeographicRegionMembershipRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeGeographicRegionMembershipResponse
     */
    public function describeGeographicRegionMembershipWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->geographicRegionId) {
            @$query['GeographicRegionId'] = $request->geographicRegionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGeographicRegionMembership',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGeographicRegionMembershipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries region information within a specified area.
     *
     * @param request - DescribeGeographicRegionMembershipRequest
     *
     * @returns DescribeGeographicRegionMembershipResponse
     *
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
     * Queries information about cross-account network instances that are authorized to be associated with a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * When you call the **DescribeGrantRulesToCen** operation, make sure that the parameter values you specify are valid. If you specify invalid parameter values, a **RequestId** is still returned, but information about the cross-account network instances authorized to the CEN instance is not returned.
     *
     * @param request - DescribeGrantRulesToCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGrantRulesToCenResponse
     *
     * @param DescribeGrantRulesToCenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGrantRulesToCenResponse
     */
    public function describeGrantRulesToCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceOwnerId) {
            @$query['ChildInstanceOwnerId'] = $request->childInstanceOwnerId;
        }

        if (null !== $request->enabledIpv6) {
            @$query['EnabledIpv6'] = $request->enabledIpv6;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGrantRulesToCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGrantRulesToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about cross-account network instances that are authorized to be associated with a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * When you call the **DescribeGrantRulesToCen** operation, make sure that the parameter values you specify are valid. If you specify invalid parameter values, a **RequestId** is still returned, but information about the cross-account network instances authorized to the CEN instance is not returned.
     *
     * @param request - DescribeGrantRulesToCenRequest
     *
     * @returns DescribeGrantRulesToCenResponse
     *
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
     * Queries the authorization information of a network instance for a cross-account Cloud Enterprise Network (CEN) instance, including the Alibaba Cloud account ID of the CEN instance owner and the payer of the network instance.
     *
     * @param request - DescribeGrantRulesToResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGrantRulesToResourceResponse
     *
     * @param DescribeGrantRulesToResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeGrantRulesToResourceResponse
     */
    public function describeGrantRulesToResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGrantRulesToResource',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGrantRulesToResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the authorization information of a network instance for a cross-account Cloud Enterprise Network (CEN) instance, including the Alibaba Cloud account ID of the CEN instance owner and the payer of the network instance.
     *
     * @param request - DescribeGrantRulesToResourceRequest
     *
     * @returns DescribeGrantRulesToResourceResponse
     *
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
     * Queries the publish status, next hop associated instance type, and whether publishing or withdrawing is allowed for route entries of network instances (VPCs and VBRs) that are loaded into a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - DescribePublishedRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePublishedRouteEntriesResponse
     *
     * @param DescribePublishedRouteEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePublishedRouteEntriesResponse
     */
    public function describePublishedRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceRouteTableId) {
            @$query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePublishedRouteEntries',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePublishedRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the publish status, next hop associated instance type, and whether publishing or withdrawing is allowed for route entries of network instances (VPCs and VBRs) that are loaded into a Cloud Enterprise Network (CEN) instance.
     *
     * @param request - DescribePublishedRouteEntriesRequest
     *
     * @returns DescribePublishedRouteEntriesResponse
     *
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
     * Queries information about conflicting route entries in a network instance.
     *
     * @param request - DescribeRouteConflictRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRouteConflictResponse
     *
     * @param DescribeRouteConflictRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRouteConflictResponse
     */
    public function describeRouteConflictWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceRouteTableId) {
            @$query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRouteConflict',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRouteConflictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about conflicting route entries in a network instance.
     *
     * @param request - DescribeRouteConflictRequest
     *
     * @returns DescribeRouteConflictResponse
     *
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
     * Queries the cloud service configurations under a Basic Edition transit router by calling the DescribeRouteServicesInCen operation.
     *
     * @param request - DescribeRouteServicesInCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRouteServicesInCenResponse
     *
     * @param DescribeRouteServicesInCenRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRouteServicesInCenResponse
     */
    public function describeRouteServicesInCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessRegionId) {
            @$query['AccessRegionId'] = $request->accessRegionId;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->hostRegionId) {
            @$query['HostRegionId'] = $request->hostRegionId;
        }

        if (null !== $request->hostVpcId) {
            @$query['HostVpcId'] = $request->hostVpcId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRouteServicesInCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRouteServicesInCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cloud service configurations under a Basic Edition transit router by calling the DescribeRouteServicesInCen operation.
     *
     * @param request - DescribeRouteServicesInCenRequest
     *
     * @returns DescribeRouteServicesInCenResponse
     *
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
     * Queries aggregate routes in an Enterprise Edition transit router route table.
     *
     * @remarks
     * You can specify the **TransitRouteTableId** and **TransitRouteTableAggregationCidr** parameters to query information about a specific aggregate route. If you specify only the **TransitRouteTableId** parameter, the system queries information about all aggregate routes in the specified Enterprise Edition transit router route table.
     *
     * @param request - DescribeTransitRouteTableAggregationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTransitRouteTableAggregationResponse
     *
     * @param DescribeTransitRouteTableAggregationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeTransitRouteTableAggregationResponse
     */
    public function describeTransitRouteTableAggregationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouteTableAggregationCidr) {
            @$query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }

        if (null !== $request->transitRouteTableId) {
            @$query['TransitRouteTableId'] = $request->transitRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTransitRouteTableAggregation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries aggregate routes in an Enterprise Edition transit router route table.
     *
     * @remarks
     * You can specify the **TransitRouteTableId** and **TransitRouteTableAggregationCidr** parameters to query information about a specific aggregate route. If you specify only the **TransitRouteTableId** parameter, the system queries information about all aggregate routes in the specified Enterprise Edition transit router route table.
     *
     * @param request - DescribeTransitRouteTableAggregationRequest
     *
     * @returns DescribeTransitRouteTableAggregationResponse
     *
     * @param DescribeTransitRouteTableAggregationRequest $request
     *
     * @return DescribeTransitRouteTableAggregationResponse
     */
    public function describeTransitRouteTableAggregation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransitRouteTableAggregationWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration details of a specified aggregate route.
     *
     * @param request - DescribeTransitRouteTableAggregationDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTransitRouteTableAggregationDetailResponse
     *
     * @param DescribeTransitRouteTableAggregationDetailRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeTransitRouteTableAggregationDetailResponse
     */
    public function describeTransitRouteTableAggregationDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouteTableAggregationCidr) {
            @$query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }

        if (null !== $request->transitRouteTableId) {
            @$query['TransitRouteTableId'] = $request->transitRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTransitRouteTableAggregationDetail',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTransitRouteTableAggregationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration details of a specified aggregate route.
     *
     * @param request - DescribeTransitRouteTableAggregationDetailRequest
     *
     * @returns DescribeTransitRouteTableAggregationDetailResponse
     *
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
     * Detaches a network instance from a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * The **DetachCenChildInstance** operation supports detaching only network instances from a Basic Edition transit router.
     *
     * @param request - DetachCenChildInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachCenChildInstanceResponse
     *
     * @param DetachCenChildInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetachCenChildInstanceResponse
     */
    public function detachCenChildInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenOwnerId) {
            @$query['CenOwnerId'] = $request->cenOwnerId;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceOwnerId) {
            @$query['ChildInstanceOwnerId'] = $request->childInstanceOwnerId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachCenChildInstance',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachCenChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a network instance from a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * The **DetachCenChildInstance** operation supports detaching only network instances from a Basic Edition transit router.
     *
     * @param request - DetachCenChildInstanceRequest
     *
     * @returns DetachCenChildInstanceResponse
     *
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
     * Disables health checks for a specified virtual border router (VBR).
     *
     * @remarks
     * *DisableCenVbrHealthCheck** is an asynchronous operation. After you call this operation, the system returns a **RequestId**, but the health check configuration has not been deleted. The deletion task continues to run in the background. You can call **DescribeCenVbrHealthCheck** to query the health check configuration. If the specified health check configuration is not found, the deletion is complete.
     *
     * @param request - DisableCenVbrHealthCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableCenVbrHealthCheckResponse
     *
     * @param DisableCenVbrHealthCheckRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableCenVbrHealthCheckResponse
     */
    public function disableCenVbrHealthCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->vbrInstanceId) {
            @$query['VbrInstanceId'] = $request->vbrInstanceId;
        }

        if (null !== $request->vbrInstanceOwnerId) {
            @$query['VbrInstanceOwnerId'] = $request->vbrInstanceOwnerId;
        }

        if (null !== $request->vbrInstanceRegionId) {
            @$query['VbrInstanceRegionId'] = $request->vbrInstanceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableCenVbrHealthCheck',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableCenVbrHealthCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables health checks for a specified virtual border router (VBR).
     *
     * @remarks
     * *DisableCenVbrHealthCheck** is an asynchronous operation. After you call this operation, the system returns a **RequestId**, but the health check configuration has not been deleted. The deletion task continues to run in the background. You can call **DescribeCenVbrHealthCheck** to query the health check configuration. If the specified health check configuration is not found, the deletion is complete.
     *
     * @param request - DisableCenVbrHealthCheckRequest
     *
     * @returns DisableCenVbrHealthCheckResponse
     *
     * @param DisableCenVbrHealthCheckRequest $request
     *
     * @return DisableCenVbrHealthCheckResponse
     */
    public function disableCenVbrHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCenVbrHealthCheckWithOptions($request, $runtime);
    }

    /**
     * Disables route learning between a network instance connection and a transit router route table.
     *
     * @remarks
     * *DisableTransitRouterRouteTablePropagation** is an asynchronous operation. After you send a request, the system returns a **RequestId** before the route learning relationship between the network instance connection and the route table is fully removed. The removal task continues to run in the background. You can call **ListTransitRouterRouteTablePropagations** to query the route learning relationship between the network instance connection and the route table.
     * - If the route learning relationship is in the **Disabling** state, the network instance connection and the route table are being disassociated. In this state, you can only query the route learning relationship. You cannot perform other operations.
     * - If the **ListTransitRouterRouteTableAssociations** operation does not return the route learning relationship between the network instance connection and the route table, the route learning relationship is successfully removed.
     *
     * @param request - DisableTransitRouterRouteTablePropagationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableTransitRouterRouteTablePropagationResponse
     *
     * @param DisableTransitRouterRouteTablePropagationRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DisableTransitRouterRouteTablePropagationResponse
     */
    public function disableTransitRouterRouteTablePropagationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableTransitRouterRouteTablePropagation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableTransitRouterRouteTablePropagationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables route learning between a network instance connection and a transit router route table.
     *
     * @remarks
     * *DisableTransitRouterRouteTablePropagation** is an asynchronous operation. After you send a request, the system returns a **RequestId** before the route learning relationship between the network instance connection and the route table is fully removed. The removal task continues to run in the background. You can call **ListTransitRouterRouteTablePropagations** to query the route learning relationship between the network instance connection and the route table.
     * - If the route learning relationship is in the **Disabling** state, the network instance connection and the route table are being disassociated. In this state, you can only query the route learning relationship. You cannot perform other operations.
     * - If the **ListTransitRouterRouteTableAssociations** operation does not return the route learning relationship between the network instance connection and the route table, the route learning relationship is successfully removed.
     *
     * @param request - DisableTransitRouterRouteTablePropagationRequest
     *
     * @returns DisableTransitRouterRouteTablePropagationResponse
     *
     * @param DisableTransitRouterRouteTablePropagationRequest $request
     *
     * @return DisableTransitRouterRouteTablePropagationResponse
     */
    public function disableTransitRouterRouteTablePropagation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableTransitRouterRouteTablePropagationWithOptions($request, $runtime);
    }

    /**
     * Disassociates a vSwitch from a multicast domain.
     *
     * @remarks
     * - Before dissociating a vSwitch from a multicast domain, make sure that no multicast sources or multicast members exist under the vSwitch. To delete multicast sources and multicast members, see [DeregisterTransitRouterMulticastGroupSources](https://help.aliyun.com/document_detail/468416.html) and [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/468409.html).
     * - If you specify invalid parameters, the system still returns a RequestId but does not dissociate the vSwitch from the multicast domain.
     * - **DisassociateTransitRouterMulticastDomain** is an asynchronous operation. After you invoke this operation, the system returns a **RequestId** but the dissociation has not yet completed. The dissociation node continues to run in the background. You can invoke **ListTransitRouterMulticastDomainAssociations** to query the associate status between the vSwitch and the multicast domain.
     *     - If the associate status is **Dissociating**, the vSwitch is being dissociated from the multicast domain. In this state, you can only execute query operations on the vSwitch but cannot execute other operations.
     *     - If the vSwitch information cannot be found under the multicast domain, the vSwitch has been successfully dissociated from the multicast domain.
     *
     * @param request - DisassociateTransitRouterMulticastDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociateTransitRouterMulticastDomainResponse
     *
     * @param DisassociateTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DisassociateTransitRouterMulticastDomainResponse
     */
    public function disassociateTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisassociateTransitRouterMulticastDomain',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociateTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a vSwitch from a multicast domain.
     *
     * @remarks
     * - Before dissociating a vSwitch from a multicast domain, make sure that no multicast sources or multicast members exist under the vSwitch. To delete multicast sources and multicast members, see [DeregisterTransitRouterMulticastGroupSources](https://help.aliyun.com/document_detail/468416.html) and [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/468409.html).
     * - If you specify invalid parameters, the system still returns a RequestId but does not dissociate the vSwitch from the multicast domain.
     * - **DisassociateTransitRouterMulticastDomain** is an asynchronous operation. After you invoke this operation, the system returns a **RequestId** but the dissociation has not yet completed. The dissociation node continues to run in the background. You can invoke **ListTransitRouterMulticastDomainAssociations** to query the associate status between the vSwitch and the multicast domain.
     *     - If the associate status is **Dissociating**, the vSwitch is being dissociated from the multicast domain. In this state, you can only execute query operations on the vSwitch but cannot execute other operations.
     *     - If the vSwitch information cannot be found under the multicast domain, the vSwitch has been successfully dissociated from the multicast domain.
     *
     * @param request - DisassociateTransitRouterMulticastDomainRequest
     *
     * @returns DisassociateTransitRouterMulticastDomainResponse
     *
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
     * Dissociates a network instance connection from a route table.
     *
     * @remarks
     * *DissociateTransitRouterAttachmentFromRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the dissociation between the network instance connection and the route table is not complete. The dissociation task continues to run in the background. You can call **ListTransitRouterRouteTableAssociations** to query the association status between the network instance connection and the route table.
     * - If the association status is **Dissociating**, the network instance connection is being dissociated from the route table. In this state, you can only query the forwarding association between the network instance connection and the route table. You cannot perform other operations.
     * - If the **ListTransitRouterRouteTableAssociations** operation does not return the forwarding association between the network instance connection and the route table, the dissociation is successful.
     *
     * @param request - DissociateTransitRouterAttachmentFromRouteTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateTransitRouterAttachmentFromRouteTableResponse
     *
     * @param DissociateTransitRouterAttachmentFromRouteTableRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return DissociateTransitRouterAttachmentFromRouteTableResponse
     */
    public function dissociateTransitRouterAttachmentFromRouteTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DissociateTransitRouterAttachmentFromRouteTable',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DissociateTransitRouterAttachmentFromRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates a network instance connection from a route table.
     *
     * @remarks
     * *DissociateTransitRouterAttachmentFromRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the dissociation between the network instance connection and the route table is not complete. The dissociation task continues to run in the background. You can call **ListTransitRouterRouteTableAssociations** to query the association status between the network instance connection and the route table.
     * - If the association status is **Dissociating**, the network instance connection is being dissociated from the route table. In this state, you can only query the forwarding association between the network instance connection and the route table. You cannot perform other operations.
     * - If the **ListTransitRouterRouteTableAssociations** operation does not return the forwarding association between the network instance connection and the route table, the dissociation is successful.
     *
     * @param request - DissociateTransitRouterAttachmentFromRouteTableRequest
     *
     * @returns DissociateTransitRouterAttachmentFromRouteTableResponse
     *
     * @param DissociateTransitRouterAttachmentFromRouteTableRequest $request
     *
     * @return DissociateTransitRouterAttachmentFromRouteTableResponse
     */
    public function dissociateTransitRouterAttachmentFromRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateTransitRouterAttachmentFromRouteTableWithOptions($request, $runtime);
    }

    /**
     * Enables the health check feature for a virtual border router (VBR) to detect faults on physical Express Connect circuits in a timely manner. You can also use this operation to modify the health check configuration of a VBR.
     *
     * @remarks
     * You can configure health checks for a VBR instance to monitor the connectivity of the physical Express Connect circuit between your on-premises data center and Alibaba Cloud, so that issues can be detected promptly.
     * Before using the health check feature, note the following information:
     * - If your VBR instance uses static routing, after you configure the health check, you must add a static route entry in the on-premises data center connected to the VBR instance.
     *     The destination CIDR block of the static route is the source IP address of the health check with a 32-bit subnet mask, and the next hop is the Alibaba Cloud-side IP address of the VBR instance.
     * - If your border router instance uses the BGP dynamic routing protocol, you do not need to add a route entry in the on-premises data center.
     * - The **EnableCenVbrHealthCheck** operation is asynchronous. After you send a request, the system returns a **RequestId**, but the health check instance is not yet created or modified. The creation or modification task continues to run in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the health check configuration. If the health check configuration is returned, the health check has been created or modified.
     *
     * @param request - EnableCenVbrHealthCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableCenVbrHealthCheckResponse
     *
     * @param EnableCenVbrHealthCheckRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableCenVbrHealthCheckResponse
     */
    public function enableCenVbrHealthCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckOnly) {
            @$query['HealthCheckOnly'] = $request->healthCheckOnly;
        }

        if (null !== $request->healthCheckSourceIp) {
            @$query['HealthCheckSourceIp'] = $request->healthCheckSourceIp;
        }

        if (null !== $request->healthCheckTargetIp) {
            @$query['HealthCheckTargetIp'] = $request->healthCheckTargetIp;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->vbrInstanceId) {
            @$query['VbrInstanceId'] = $request->vbrInstanceId;
        }

        if (null !== $request->vbrInstanceOwnerId) {
            @$query['VbrInstanceOwnerId'] = $request->vbrInstanceOwnerId;
        }

        if (null !== $request->vbrInstanceRegionId) {
            @$query['VbrInstanceRegionId'] = $request->vbrInstanceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableCenVbrHealthCheck',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableCenVbrHealthCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the health check feature for a virtual border router (VBR) to detect faults on physical Express Connect circuits in a timely manner. You can also use this operation to modify the health check configuration of a VBR.
     *
     * @remarks
     * You can configure health checks for a VBR instance to monitor the connectivity of the physical Express Connect circuit between your on-premises data center and Alibaba Cloud, so that issues can be detected promptly.
     * Before using the health check feature, note the following information:
     * - If your VBR instance uses static routing, after you configure the health check, you must add a static route entry in the on-premises data center connected to the VBR instance.
     *     The destination CIDR block of the static route is the source IP address of the health check with a 32-bit subnet mask, and the next hop is the Alibaba Cloud-side IP address of the VBR instance.
     * - If your border router instance uses the BGP dynamic routing protocol, you do not need to add a route entry in the on-premises data center.
     * - The **EnableCenVbrHealthCheck** operation is asynchronous. After you send a request, the system returns a **RequestId**, but the health check instance is not yet created or modified. The creation or modification task continues to run in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the health check configuration. If the health check configuration is returned, the health check has been created or modified.
     *
     * @param request - EnableCenVbrHealthCheckRequest
     *
     * @returns EnableCenVbrHealthCheckResponse
     *
     * @param EnableCenVbrHealthCheckRequest $request
     *
     * @return EnableCenVbrHealthCheckResponse
     */
    public function enableCenVbrHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCenVbrHealthCheckWithOptions($request, $runtime);
    }

    /**
     * Creates a route learning relationship.
     *
     * @remarks
     * After you create a network instance connection, you can set up a route learning relationship for it. Once configured, the network instance connection automatically propagates routes from the network instance to its associated route table. Before calling this operation to create a route learning relationship, note the following information:
     * - Only Enterprise Edition transit routers support creating route learning relationships. For information about the regions and zones supported by Enterprise Edition transit routers, see [What is Cloud Enterprise Network (CEN)?](https://help.aliyun.com/document_detail/181681.html).
     * - The **EnableTransitRouterRouteTablePropagation** operation is asynchronous. After you send a request, the system returns a **RequestId**, but the route learning relationship between the network instance connection and the route table is not fully established. The creation task is still running in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the route learning relationship between the network instance connection and the route table.
     *     - If the route learning relationship is in the **Enabling** state, the route learning relationship between the network instance connection and the route table is being established. In this state, you can only query the route learning relationship. You cannot perform other operations.
     *     - If the route learning relationship is in the **Active** state, the route learning relationship between the network instance connection and the route table is established.
     *
     * @param request - EnableTransitRouterRouteTablePropagationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableTransitRouterRouteTablePropagationResponse
     *
     * @param EnableTransitRouterRouteTablePropagationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return EnableTransitRouterRouteTablePropagationResponse
     */
    public function enableTransitRouterRouteTablePropagationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableTransitRouterRouteTablePropagation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableTransitRouterRouteTablePropagationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a route learning relationship.
     *
     * @remarks
     * After you create a network instance connection, you can set up a route learning relationship for it. Once configured, the network instance connection automatically propagates routes from the network instance to its associated route table. Before calling this operation to create a route learning relationship, note the following information:
     * - Only Enterprise Edition transit routers support creating route learning relationships. For information about the regions and zones supported by Enterprise Edition transit routers, see [What is Cloud Enterprise Network (CEN)?](https://help.aliyun.com/document_detail/181681.html).
     * - The **EnableTransitRouterRouteTablePropagation** operation is asynchronous. After you send a request, the system returns a **RequestId**, but the route learning relationship between the network instance connection and the route table is not fully established. The creation task is still running in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the route learning relationship between the network instance connection and the route table.
     *     - If the route learning relationship is in the **Enabling** state, the route learning relationship between the network instance connection and the route table is being established. In this state, you can only query the route learning relationship. You cannot perform other operations.
     *     - If the route learning relationship is in the **Active** state, the route learning relationship between the network instance connection and the route table is established.
     *
     * @param request - EnableTransitRouterRouteTablePropagationRequest
     *
     * @returns EnableTransitRouterRouteTablePropagationResponse
     *
     * @param EnableTransitRouterRouteTablePropagationRequest $request
     *
     * @return EnableTransitRouterRouteTablePropagationResponse
     */
    public function enableTransitRouterRouteTablePropagation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableTransitRouterRouteTablePropagationWithOptions($request, $runtime);
    }

    /**
     * Grants permissions to a transit router instance to connect to a network instance that belongs to a different Alibaba Cloud account. Before a transit router instance can connect to a network instance that belongs to a different account, the network instance owner must authorize the transit router instance by calling the GrantInstanceToTransitRouter operation.
     *
     * @remarks
     * - The GrantInstanceToTransitRouter operation only supports granting a transit router instance permissions to connect to cross-account Virtual Private Cloud (VPC) instances, Virtual Border Router (VBR) instances, IPsec connections, and Express Connect Router (ECR) instances.
     *
     *     To grant a transit router instance permissions to connect to a Cloud Connect Network (CCN) instance, call the [GrantInstanceToCbn](https://help.aliyun.com/document_detail/126141.html) operation.
     * - Before you call the GrantInstanceToTransitRouter operation, make sure that you understand the billing rules of transit routers, the limits on authorization operations, and the prerequisites for authorization operations. For more information, see [Cross-account network instance authorization](https://help.aliyun.com/document_detail/181553.html).
     * - Before you authorize a network instance, make sure that the following operations are completed:
     *   Confirm that the account to which the network instance belongs and the account to which the transit router instance belongs are of the same type.
     *   Obtain the Alibaba Cloud account ID of the account to which the transit router instance belongs.
     *   Obtain the Cloud Enterprise Network (CEN) instance ID to which the transit router instance belongs.
     *   Before you authorize a VBR instance, contact your account manager to activate the VBR instance authorization feature.
     *   Before you authorize an IPsec connection, make sure that the IPsec connection is not associated with any resource:
     *   If the IPsec connection is already associated with a VPN gateway instance, it cannot be associated with a transit router instance in the same account or a different account.
     *   If the IPsec connection is already associated with a transit router instance, you must disassociate it first. For more information, see [Delete a network instance connection](https://help.aliyun.com/document_detail/181554.html).
     *
     * @param request - GrantInstanceToTransitRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantInstanceToTransitRouterResponse
     *
     * @param GrantInstanceToTransitRouterRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GrantInstanceToTransitRouterResponse
     */
    public function grantInstanceToTransitRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenOwnerId) {
            @$query['CenOwnerId'] = $request->cenOwnerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GrantInstanceToTransitRouter',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantInstanceToTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants permissions to a transit router instance to connect to a network instance that belongs to a different Alibaba Cloud account. Before a transit router instance can connect to a network instance that belongs to a different account, the network instance owner must authorize the transit router instance by calling the GrantInstanceToTransitRouter operation.
     *
     * @remarks
     * - The GrantInstanceToTransitRouter operation only supports granting a transit router instance permissions to connect to cross-account Virtual Private Cloud (VPC) instances, Virtual Border Router (VBR) instances, IPsec connections, and Express Connect Router (ECR) instances.
     *
     *     To grant a transit router instance permissions to connect to a Cloud Connect Network (CCN) instance, call the [GrantInstanceToCbn](https://help.aliyun.com/document_detail/126141.html) operation.
     * - Before you call the GrantInstanceToTransitRouter operation, make sure that you understand the billing rules of transit routers, the limits on authorization operations, and the prerequisites for authorization operations. For more information, see [Cross-account network instance authorization](https://help.aliyun.com/document_detail/181553.html).
     * - Before you authorize a network instance, make sure that the following operations are completed:
     *   Confirm that the account to which the network instance belongs and the account to which the transit router instance belongs are of the same type.
     *   Obtain the Alibaba Cloud account ID of the account to which the transit router instance belongs.
     *   Obtain the Cloud Enterprise Network (CEN) instance ID to which the transit router instance belongs.
     *   Before you authorize a VBR instance, contact your account manager to activate the VBR instance authorization feature.
     *   Before you authorize an IPsec connection, make sure that the IPsec connection is not associated with any resource:
     *   If the IPsec connection is already associated with a VPN gateway instance, it cannot be associated with a transit router instance in the same account or a different account.
     *   If the IPsec connection is already associated with a transit router instance, you must disassociate it first. For more information, see [Delete a network instance connection](https://help.aliyun.com/document_detail/181554.html).
     *
     * @param request - GrantInstanceToTransitRouterRequest
     *
     * @returns GrantInstanceToTransitRouterResponse
     *
     * @param GrantInstanceToTransitRouterRequest $request
     *
     * @return GrantInstanceToTransitRouterResponse
     */
    public function grantInstanceToTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantInstanceToTransitRouterWithOptions($request, $runtime);
    }

    /**
     * Queries route entries that forward traffic to a network instance connection in the route table of a network instance associated with an Enterprise Edition transit router.
     *
     * @remarks
     * When you call the ListCenChildInstanceRouteEntriesToAttachment operation, make sure that the parameter values you specify are valid. If you specify invalid parameter values, the operation returns a RequestId but does not display the route entries of network instances connected to the Enterprise Edition transit router.
     *
     * @param request - ListCenChildInstanceRouteEntriesToAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCenChildInstanceRouteEntriesToAttachmentResponse
     *
     * @param ListCenChildInstanceRouteEntriesToAttachmentRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return ListCenChildInstanceRouteEntriesToAttachmentResponse
     */
    public function listCenChildInstanceRouteEntriesToAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceRouteTableId) {
            @$query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeFilter) {
            @$query['RouteFilter'] = $request->routeFilter;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCenChildInstanceRouteEntriesToAttachment',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCenChildInstanceRouteEntriesToAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries route entries that forward traffic to a network instance connection in the route table of a network instance associated with an Enterprise Edition transit router.
     *
     * @remarks
     * When you call the ListCenChildInstanceRouteEntriesToAttachment operation, make sure that the parameter values you specify are valid. If you specify invalid parameter values, the operation returns a RequestId but does not display the route entries of network instances connected to the Enterprise Edition transit router.
     *
     * @param request - ListCenChildInstanceRouteEntriesToAttachmentRequest
     *
     * @returns ListCenChildInstanceRouteEntriesToAttachmentResponse
     *
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
     * Queries information about traffic scheduling policies by calling the ListCenInterRegionTrafficQosPolicies operation.
     *
     * @remarks
     * When you call the **ListCenInterRegionTrafficQosPolicies** operation:
     * - Specify at least one of the **TransitRouterId** and **TrafficQosPolicyId** parameters.
     * - If you do not specify a traffic scheduling policy ID (that is, you do not specify the **TrafficQosPolicyId** parameter), the operation returns only the traffic scheduling policy information based on the values of the **TransitRouterId**, **TransitRouterAttachmentId**, **TrafficQosPolicyName**, and **TrafficQosPolicyDescription** parameters. The queue information under the traffic scheduling policy is not returned (that is, the response does not include the **TrafficQosQueues** field).
     * - If you specify a traffic scheduling policy ID (that is, you specify the **TrafficQosPolicyId** parameter), the operation returns the traffic scheduling policy information and the queue information under the traffic scheduling policy (that is, the response includes the **TrafficQosQueues** field). If the **TrafficQosQueues** field is an empty array, only the default queue exists under the traffic scheduling policy.
     * - Make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the operation still returns a RequestId but does not return traffic scheduling policy information.
     *
     * @param request - ListCenInterRegionTrafficQosPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCenInterRegionTrafficQosPoliciesResponse
     *
     * @param ListCenInterRegionTrafficQosPoliciesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListCenInterRegionTrafficQosPoliciesResponse
     */
    public function listCenInterRegionTrafficQosPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficQosPolicyDescription) {
            @$query['TrafficQosPolicyDescription'] = $request->trafficQosPolicyDescription;
        }

        if (null !== $request->trafficQosPolicyId) {
            @$query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }

        if (null !== $request->trafficQosPolicyName) {
            @$query['TrafficQosPolicyName'] = $request->trafficQosPolicyName;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCenInterRegionTrafficQosPolicies',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCenInterRegionTrafficQosPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about traffic scheduling policies by calling the ListCenInterRegionTrafficQosPolicies operation.
     *
     * @remarks
     * When you call the **ListCenInterRegionTrafficQosPolicies** operation:
     * - Specify at least one of the **TransitRouterId** and **TrafficQosPolicyId** parameters.
     * - If you do not specify a traffic scheduling policy ID (that is, you do not specify the **TrafficQosPolicyId** parameter), the operation returns only the traffic scheduling policy information based on the values of the **TransitRouterId**, **TransitRouterAttachmentId**, **TrafficQosPolicyName**, and **TrafficQosPolicyDescription** parameters. The queue information under the traffic scheduling policy is not returned (that is, the response does not include the **TrafficQosQueues** field).
     * - If you specify a traffic scheduling policy ID (that is, you specify the **TrafficQosPolicyId** parameter), the operation returns the traffic scheduling policy information and the queue information under the traffic scheduling policy (that is, the response includes the **TrafficQosQueues** field). If the **TrafficQosQueues** field is an empty array, only the default queue exists under the traffic scheduling policy.
     * - Make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the operation still returns a RequestId but does not return traffic scheduling policy information.
     *
     * @param request - ListCenInterRegionTrafficQosPoliciesRequest
     *
     * @returns ListCenInterRegionTrafficQosPoliciesResponse
     *
     * @param ListCenInterRegionTrafficQosPoliciesRequest $request
     *
     * @return ListCenInterRegionTrafficQosPoliciesResponse
     */
    public function listCenInterRegionTrafficQosPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCenInterRegionTrafficQosPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries information about traffic scheduling policy queues by calling the ListCenInterRegionTrafficQosQueues operation.
     *
     * @remarks
     * When you call this operation, specify at least one of the following parameters: **TransitRouterId**, **TrafficQosPolicyId**, or **TrafficQosQueueId**.
     * Make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system returns a **RequestId** but does not return information about traffic scheduling policies.
     *
     * @param request - ListCenInterRegionTrafficQosQueuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCenInterRegionTrafficQosQueuesResponse
     *
     * @param ListCenInterRegionTrafficQosQueuesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListCenInterRegionTrafficQosQueuesResponse
     */
    public function listCenInterRegionTrafficQosQueuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveBandwidthFilter) {
            @$query['EffectiveBandwidthFilter'] = $request->effectiveBandwidthFilter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficQosPolicyId) {
            @$query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }

        if (null !== $request->trafficQosQueueDescription) {
            @$query['TrafficQosQueueDescription'] = $request->trafficQosQueueDescription;
        }

        if (null !== $request->trafficQosQueueId) {
            @$query['TrafficQosQueueId'] = $request->trafficQosQueueId;
        }

        if (null !== $request->trafficQosQueueName) {
            @$query['TrafficQosQueueName'] = $request->trafficQosQueueName;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCenInterRegionTrafficQosQueues',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCenInterRegionTrafficQosQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about traffic scheduling policy queues by calling the ListCenInterRegionTrafficQosQueues operation.
     *
     * @remarks
     * When you call this operation, specify at least one of the following parameters: **TransitRouterId**, **TrafficQosPolicyId**, or **TrafficQosQueueId**.
     * Make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system returns a **RequestId** but does not return information about traffic scheduling policies.
     *
     * @param request - ListCenInterRegionTrafficQosQueuesRequest
     *
     * @returns ListCenInterRegionTrafficQosQueuesResponse
     *
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
     * Queries the elastic network interfaces (ENIs) within a virtual private cloud (VPC) that can serve as multicast sources or multicast members for multicast communication.
     *
     * @remarks
     * Before you invoke the `ListGrantVSwitchEnis` operation, make sure that the VPC-connected instance is connected to Cloud Enterprise Network (CEN). For more information, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261358.html).
     *
     * @param request - ListGrantVSwitchEnisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGrantVSwitchEnisResponse
     *
     * @param ListGrantVSwitchEnisRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListGrantVSwitchEnisResponse
     */
    public function listGrantVSwitchEnisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->networkInterfaceName) {
            @$query['NetworkInterfaceName'] = $request->networkInterfaceName;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->primaryIpAddress) {
            @$query['PrimaryIpAddress'] = $request->primaryIpAddress;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGrantVSwitchEnis',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGrantVSwitchEnisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the elastic network interfaces (ENIs) within a virtual private cloud (VPC) that can serve as multicast sources or multicast members for multicast communication.
     *
     * @remarks
     * Before you invoke the `ListGrantVSwitchEnis` operation, make sure that the VPC-connected instance is connected to Cloud Enterprise Network (CEN). For more information, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261358.html).
     *
     * @param request - ListGrantVSwitchEnisRequest
     *
     * @returns ListGrantVSwitchEnisResponse
     *
     * @param ListGrantVSwitchEnisRequest $request
     *
     * @return ListGrantVSwitchEnisResponse
     */
    public function listGrantVSwitchEnis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGrantVSwitchEnisWithOptions($request, $runtime);
    }

    /**
     * Queries information about vSwitches in a cross-account virtual private cloud (VPC) that is connected to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * Before you invoke the `ListGrantVSwitchesToCen` operation, make sure that the CEN instance has been granted authorization to access the cross-account VPC-connected instance. For more information, see [GrantInstanceToCen](https://help.aliyun.com/document_detail/126224.html).
     *
     * @param request - ListGrantVSwitchesToCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGrantVSwitchesToCenResponse
     *
     * @param ListGrantVSwitchesToCenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListGrantVSwitchesToCenResponse
     */
    public function listGrantVSwitchesToCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->enabledIpv6) {
            @$query['EnabledIpv6'] = $request->enabledIpv6;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGrantVSwitchesToCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGrantVSwitchesToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about vSwitches in a cross-account virtual private cloud (VPC) that is connected to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * Before you invoke the `ListGrantVSwitchesToCen` operation, make sure that the CEN instance has been granted authorization to access the cross-account VPC-connected instance. For more information, see [GrantInstanceToCen](https://help.aliyun.com/document_detail/126224.html).
     *
     * @param request - ListGrantVSwitchesToCenRequest
     *
     * @returns ListGrantVSwitchesToCenResponse
     *
     * @param ListGrantVSwitchesToCenRequest $request
     *
     * @return ListGrantVSwitchesToCenResponse
     */
    public function listGrantVSwitchesToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGrantVSwitchesToCenWithOptions($request, $runtime);
    }

    /**
     * Queries the tags bound to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * When you call the ListTagResources operation, you must specify at least one of the request parameters **ResourceId.N** and **Tag.N.Key**:
     * - If you specify only **ResourceId.N**, the tags bound to the specified CEN instance are queried.
     * - If you specify only **Tag.N.Key**, all CEN instances that have the specified tag key bound are queried.
     * - If you specify both **ResourceId.N** and **Tag.N.Key**, the specified tags bound to the specified CEN instance are queried.
     *     - Make sure that the values of **ResourceId.N** and **Tag.N.Key** correspond to each other. Otherwise, an empty result is returned.
     *     - If you specify multiple tag keys, the tag keys are evaluated by using the logical AND operator.
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

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2017-09-12',
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
     * Queries the tags bound to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * When you call the ListTagResources operation, you must specify at least one of the request parameters **ResourceId.N** and **Tag.N.Key**:
     * - If you specify only **ResourceId.N**, the tags bound to the specified CEN instance are queried.
     * - If you specify only **Tag.N.Key**, all CEN instances that have the specified tag key bound are queried.
     * - If you specify both **ResourceId.N** and **Tag.N.Key**, the specified tags bound to the specified CEN instance are queried.
     *     - Make sure that the values of **ResourceId.N** and **Tag.N.Key** correspond to each other. Otherwise, an empty result is returned.
     *     - If you specify multiple tag keys, the tag keys are evaluated by using the logical AND operator.
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
     * Queries details about traffic marking policies, such as the status and priority of the traffic marking policies.
     *
     * @remarks
     * When you call the **ListTrafficMarkingPolicies** operation:
     * - You must specify at least one of the **TransitRouterId** and **TrafficMarkingPolicyId** parameters.
     * - If you do not specify a traffic marking policy ID (that is, you do not specify a value for the **TrafficMarkingPolicyId** parameter), the operation returns only the traffic marking policy information based on the values of the **TransitRouterId**, **TrafficMarkingPolicyName**, and **TrafficMarkingPolicyDescription** parameters. The traffic classification rule information under the traffic marking policy is not returned (that is, the response does not contain the **TrafficMatchRules** field).
     * - If you specify a traffic marking policy ID (that is, you specify a value for the **TrafficMarkingPolicyId** parameter), the operation returns the traffic marking policy information and the traffic classification rule information under the traffic marking policy (that is, the response contains the **TrafficMatchRules** field).
     * If the **TrafficMatchRules** field is an empty array, no traffic classification rules exist under the current traffic marking policy.
     *
     * @param request - ListTrafficMarkingPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrafficMarkingPoliciesResponse
     *
     * @param ListTrafficMarkingPoliciesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListTrafficMarkingPoliciesResponse
     */
    public function listTrafficMarkingPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkingPolicyDescription) {
            @$query['TrafficMarkingPolicyDescription'] = $request->trafficMarkingPolicyDescription;
        }

        if (null !== $request->trafficMarkingPolicyId) {
            @$query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }

        if (null !== $request->trafficMarkingPolicyName) {
            @$query['TrafficMarkingPolicyName'] = $request->trafficMarkingPolicyName;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrafficMarkingPolicies',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTrafficMarkingPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details about traffic marking policies, such as the status and priority of the traffic marking policies.
     *
     * @remarks
     * When you call the **ListTrafficMarkingPolicies** operation:
     * - You must specify at least one of the **TransitRouterId** and **TrafficMarkingPolicyId** parameters.
     * - If you do not specify a traffic marking policy ID (that is, you do not specify a value for the **TrafficMarkingPolicyId** parameter), the operation returns only the traffic marking policy information based on the values of the **TransitRouterId**, **TrafficMarkingPolicyName**, and **TrafficMarkingPolicyDescription** parameters. The traffic classification rule information under the traffic marking policy is not returned (that is, the response does not contain the **TrafficMatchRules** field).
     * - If you specify a traffic marking policy ID (that is, you specify a value for the **TrafficMarkingPolicyId** parameter), the operation returns the traffic marking policy information and the traffic classification rule information under the traffic marking policy (that is, the response contains the **TrafficMatchRules** field).
     * If the **TrafficMatchRules** field is an empty array, no traffic classification rules exist under the current traffic marking policy.
     *
     * @param request - ListTrafficMarkingPoliciesRequest
     *
     * @returns ListTrafficMarkingPoliciesResponse
     *
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
     * Queries the zones supported by Enterprise Edition transit routers in a specified region.
     *
     * @remarks
     * - You can invoke **ListTransitRouterAvailableResource** to query information about regular zones or zones that support the multicast feature for Enterprise Edition transit routers in a specified region.
     *     - If you do not set **SupportMulticast** to **true**, the system queries only the regular zones supported by Enterprise Edition transit routers by default.
     *     - If you set **SupportMulticast** to **true**, the system queries only the zones that support the multicast feature for Enterprise Edition transit routers.
     * - On May 31, 2022, Cloud Enterprise Network (CEN) performed an optimization upgrade on the mode in which Enterprise Edition transit routers connect to virtual private clouds (VPCs). After the upgrade, you no longer need to specify primary and secondary zones when connecting an Enterprise Edition transit router to a VPC-connected instance. You can specify one or more zones.
     *     - If your Enterprise Edition transit router has not been upgraded, you must specify primary and secondary zones when connecting the Enterprise Edition transit router to a VPC-connected instance. After you invoke **ListTransitRouterAvailableResource**, you can obtain the primary and secondary zone information from the **MasterZones** and **SlaveZones** parameters.
     *     - If your Enterprise Edition transit router has been upgraded, you can specify any zones when connecting the Enterprise Edition transit router to a VPC-connected instance. After you invoke **ListTransitRouterAvailableResource**, you can obtain the zone information supported by the Enterprise Edition transit router from the **AvailableZones** parameter.
     * For more information about the Enterprise Edition transit router upgrade, see [Upgrade the mode in which an Enterprise Edition transit router connects to a VPC](https://help.aliyun.com/document_detail/434191.html).
     *
     * @param request - ListTransitRouterAvailableResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterAvailableResourceResponse
     *
     * @param ListTransitRouterAvailableResourceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListTransitRouterAvailableResourceResponse
     */
    public function listTransitRouterAvailableResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->supportMulticast) {
            @$query['SupportMulticast'] = $request->supportMulticast;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterAvailableResource',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the zones supported by Enterprise Edition transit routers in a specified region.
     *
     * @remarks
     * - You can invoke **ListTransitRouterAvailableResource** to query information about regular zones or zones that support the multicast feature for Enterprise Edition transit routers in a specified region.
     *     - If you do not set **SupportMulticast** to **true**, the system queries only the regular zones supported by Enterprise Edition transit routers by default.
     *     - If you set **SupportMulticast** to **true**, the system queries only the zones that support the multicast feature for Enterprise Edition transit routers.
     * - On May 31, 2022, Cloud Enterprise Network (CEN) performed an optimization upgrade on the mode in which Enterprise Edition transit routers connect to virtual private clouds (VPCs). After the upgrade, you no longer need to specify primary and secondary zones when connecting an Enterprise Edition transit router to a VPC-connected instance. You can specify one or more zones.
     *     - If your Enterprise Edition transit router has not been upgraded, you must specify primary and secondary zones when connecting the Enterprise Edition transit router to a VPC-connected instance. After you invoke **ListTransitRouterAvailableResource**, you can obtain the primary and secondary zone information from the **MasterZones** and **SlaveZones** parameters.
     *     - If your Enterprise Edition transit router has been upgraded, you can specify any zones when connecting the Enterprise Edition transit router to a VPC-connected instance. After you invoke **ListTransitRouterAvailableResource**, you can obtain the zone information supported by the Enterprise Edition transit router from the **AvailableZones** parameter.
     * For more information about the Enterprise Edition transit router upgrade, see [Upgrade the mode in which an Enterprise Edition transit router connects to a VPC](https://help.aliyun.com/document_detail/434191.html).
     *
     * @param request - ListTransitRouterAvailableResourceRequest
     *
     * @returns ListTransitRouterAvailableResourceResponse
     *
     * @param ListTransitRouterAvailableResourceRequest $request
     *
     * @return ListTransitRouterAvailableResourceResponse
     */
    public function listTransitRouterAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * Queries information about CIDR blocks of a transit router by calling the ListTransitRouterCidr operation.
     *
     * @param request - ListTransitRouterCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterCidrResponse
     *
     * @param ListTransitRouterCidrRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTransitRouterCidrResponse
     */
    public function listTransitRouterCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->transitRouterCidrId) {
            @$query['TransitRouterCidrId'] = $request->transitRouterCidrId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterCidr',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about CIDR blocks of a transit router by calling the ListTransitRouterCidr operation.
     *
     * @param request - ListTransitRouterCidrRequest
     *
     * @returns ListTransitRouterCidrResponse
     *
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
     * Queries the allocation information of a CIDR block by calling the ListTransitRouterCidrAllocation operation.
     *
     * @param request - ListTransitRouterCidrAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterCidrAllocationResponse
     *
     * @param ListTransitRouterCidrAllocationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListTransitRouterCidrAllocationResponse
     */
    public function listTransitRouterCidrAllocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachmentId) {
            @$query['AttachmentId'] = $request->attachmentId;
        }

        if (null !== $request->attachmentName) {
            @$query['AttachmentName'] = $request->attachmentName;
        }

        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->cidrBlock) {
            @$query['CidrBlock'] = $request->cidrBlock;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dedicatedOwnerId) {
            @$query['DedicatedOwnerId'] = $request->dedicatedOwnerId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->transitRouterCidrId) {
            @$query['TransitRouterCidrId'] = $request->transitRouterCidrId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterCidrAllocation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterCidrAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the allocation information of a CIDR block by calling the ListTransitRouterCidrAllocation operation.
     *
     * @param request - ListTransitRouterCidrAllocationRequest
     *
     * @returns ListTransitRouterCidrAllocationResponse
     *
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
     * Queries the connection information about Express Connect Router (ECR) instances under an Enterprise Edition transit router, including the total number of entries, connection status, connection IDs, and the payer of network instances.
     *
     * @remarks
     * You can query the information about ECR connections under an Enterprise Edition transit router in the following three ways:
     * - Query the information about all ECR connections under an Enterprise Edition transit router instance by specifying the transit router instance ID.
     * - Query the information about all ECR connections under an Enterprise Edition transit router instance by specifying the Cloud Enterprise Network (CEN) instance ID and the region ID of the transit router instance.
     * - Query the information about a specific ECR connection by specifying only the **TransitRouterAttachmentId** parameter.
     *
     * @param request - ListTransitRouterEcrAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterEcrAttachmentsResponse
     *
     * @param ListTransitRouterEcrAttachmentsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListTransitRouterEcrAttachmentsResponse
     */
    public function listTransitRouterEcrAttachmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterEcrAttachments',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterEcrAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the connection information about Express Connect Router (ECR) instances under an Enterprise Edition transit router, including the total number of entries, connection status, connection IDs, and the payer of network instances.
     *
     * @remarks
     * You can query the information about ECR connections under an Enterprise Edition transit router in the following three ways:
     * - Query the information about all ECR connections under an Enterprise Edition transit router instance by specifying the transit router instance ID.
     * - Query the information about all ECR connections under an Enterprise Edition transit router instance by specifying the Cloud Enterprise Network (CEN) instance ID and the region ID of the transit router instance.
     * - Query the information about a specific ECR connection by specifying only the **TransitRouterAttachmentId** parameter.
     *
     * @param request - ListTransitRouterEcrAttachmentsRequest
     *
     * @returns ListTransitRouterEcrAttachmentsResponse
     *
     * @param ListTransitRouterEcrAttachmentsRequest $request
     *
     * @return ListTransitRouterEcrAttachmentsResponse
     */
    public function listTransitRouterEcrAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterEcrAttachmentsWithOptions($request, $runtime);
    }

    /**
     * Queries the associations between a multicast domain and vSwitches.
     *
     * @remarks
     * - When calling this operation, you must specify at least one of the request parameters **TransitRouterMulticastDomainId** and **TransitRouterAttachmentId**. Specifying **TransitRouterAttachmentId** queries the information about vSwitches that are associated with a multicast domain under a VPC-connected instance. Specifying **TransitRouterMulticastDomainId** queries the information about vSwitches that are associated with the multicast domain.
     * - When calling the **ListTransitRouterMulticastDomainAssociations** operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the operation still returns a **RequestId** but does not return the associations between the multicast domain and vSwitches.
     *
     * @param request - ListTransitRouterMulticastDomainAssociationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterMulticastDomainAssociationsResponse
     *
     * @param ListTransitRouterMulticastDomainAssociationsRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return ListTransitRouterMulticastDomainAssociationsResponse
     */
    public function listTransitRouterMulticastDomainAssociationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterMulticastDomainAssociations',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterMulticastDomainAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the associations between a multicast domain and vSwitches.
     *
     * @remarks
     * - When calling this operation, you must specify at least one of the request parameters **TransitRouterMulticastDomainId** and **TransitRouterAttachmentId**. Specifying **TransitRouterAttachmentId** queries the information about vSwitches that are associated with a multicast domain under a VPC-connected instance. Specifying **TransitRouterMulticastDomainId** queries the information about vSwitches that are associated with the multicast domain.
     * - When calling the **ListTransitRouterMulticastDomainAssociations** operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the operation still returns a **RequestId** but does not return the associations between the multicast domain and vSwitches.
     *
     * @param request - ListTransitRouterMulticastDomainAssociationsRequest
     *
     * @returns ListTransitRouterMulticastDomainAssociationsResponse
     *
     * @param ListTransitRouterMulticastDomainAssociationsRequest $request
     *
     * @return ListTransitRouterMulticastDomainAssociationsResponse
     */
    public function listTransitRouterMulticastDomainAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterMulticastDomainAssociationsWithOptions($request, $runtime);
    }

    /**
     * Queries information about vSwitches that are associated with multicast domains in a VPC-connected instance after the VPC-connected instance is connected to an Enterprise Edition transit router.
     *
     * @remarks
     * When you call the ListTransitRouterMulticastDomainVSwitches operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not return information about vSwitches that are associated with multicast domains in the VPC-connected instance.
     *
     * @param request - ListTransitRouterMulticastDomainVSwitchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterMulticastDomainVSwitchesResponse
     *
     * @param ListTransitRouterMulticastDomainVSwitchesRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return ListTransitRouterMulticastDomainVSwitchesResponse
     */
    public function listTransitRouterMulticastDomainVSwitchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterMulticastDomainVSwitches',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterMulticastDomainVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about vSwitches that are associated with multicast domains in a VPC-connected instance after the VPC-connected instance is connected to an Enterprise Edition transit router.
     *
     * @remarks
     * When you call the ListTransitRouterMulticastDomainVSwitches operation, make sure that the parameter values you specify are correct. If you specify incorrect parameter values, the system still returns a RequestId but does not return information about vSwitches that are associated with multicast domains in the VPC-connected instance.
     *
     * @param request - ListTransitRouterMulticastDomainVSwitchesRequest
     *
     * @returns ListTransitRouterMulticastDomainVSwitchesResponse
     *
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
     * Queries information about multicast domains, such as the status, multicast domain ID, and description of multicast domains.
     *
     * @remarks
     * - RegionId must be used together with CenId and cannot be used alone. Otherwise, multicast domain information is not displayed. However, TransitRouterId and TransitRouterMulticastDomainId can be used independently.
     * - Ensure that the parameter values you specify are correct when you call this operation. If you specify invalid parameter values, the system still returns a **RequestId** but does not display detailed multicast domain information.
     *
     * @param request - ListTransitRouterMulticastDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterMulticastDomainsResponse
     *
     * @param ListTransitRouterMulticastDomainsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListTransitRouterMulticastDomainsResponse
     */
    public function listTransitRouterMulticastDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterMulticastDomains',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterMulticastDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about multicast domains, such as the status, multicast domain ID, and description of multicast domains.
     *
     * @remarks
     * - RegionId must be used together with CenId and cannot be used alone. Otherwise, multicast domain information is not displayed. However, TransitRouterId and TransitRouterMulticastDomainId can be used independently.
     * - Ensure that the parameter values you specify are correct when you call this operation. If you specify invalid parameter values, the system still returns a **RequestId** but does not display detailed multicast domain information.
     *
     * @param request - ListTransitRouterMulticastDomainsRequest
     *
     * @returns ListTransitRouterMulticastDomainsResponse
     *
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
     * Queries the details of multicast members and multicast sources in a multicast domain.
     *
     * @remarks
     * You can call the `ListTransitRouterMulticastGroups` operation to query information about multicast members and multicast sources (hereinafter referred to as multicast resources) in a multicast domain.
     * - If you specify the **GroupIpAddress** parameter, you can query multicast resources in a specified multicast group within the multicast domain.
     * - If you specify the **VSwitchIds** parameter, you can query multicast resources under a specified vSwitch within the multicast domain.
     * - If you specify the **PeerTransitRouterMulticastDomains** parameter, you can query cross-region multicast resources within the multicast domain.
     * - If you specify the **ResourceType** parameter, you can query multicast resources of a specified resource type within the multicast domain.
     * - If you specify the **ResourceId** parameter, you can query multicast resources associated with a specified resource.
     * - If you specify only the **TransitRouterMulticastDomainId** parameter, you can query all multicast resources within the multicast domain.
     *
     * @param request - ListTransitRouterMulticastGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterMulticastGroupsResponse
     *
     * @param ListTransitRouterMulticastGroupsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListTransitRouterMulticastGroupsResponse
     */
    public function listTransitRouterMulticastGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->groupIpAddress) {
            @$query['GroupIpAddress'] = $request->groupIpAddress;
        }

        if (null !== $request->isGroupMember) {
            @$query['IsGroupMember'] = $request->isGroupMember;
        }

        if (null !== $request->isGroupSource) {
            @$query['IsGroupSource'] = $request->isGroupSource;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkInterfaceIds) {
            @$query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->peerTransitRouterMulticastDomains) {
            @$query['PeerTransitRouterMulticastDomains'] = $request->peerTransitRouterMulticastDomains;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterMulticastGroups',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterMulticastGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of multicast members and multicast sources in a multicast domain.
     *
     * @remarks
     * You can call the `ListTransitRouterMulticastGroups` operation to query information about multicast members and multicast sources (hereinafter referred to as multicast resources) in a multicast domain.
     * - If you specify the **GroupIpAddress** parameter, you can query multicast resources in a specified multicast group within the multicast domain.
     * - If you specify the **VSwitchIds** parameter, you can query multicast resources under a specified vSwitch within the multicast domain.
     * - If you specify the **PeerTransitRouterMulticastDomains** parameter, you can query cross-region multicast resources within the multicast domain.
     * - If you specify the **ResourceType** parameter, you can query multicast resources of a specified resource type within the multicast domain.
     * - If you specify the **ResourceId** parameter, you can query multicast resources associated with a specified resource.
     * - If you specify only the **TransitRouterMulticastDomainId** parameter, you can query all multicast resources within the multicast domain.
     *
     * @param request - ListTransitRouterMulticastGroupsRequest
     *
     * @returns ListTransitRouterMulticastGroupsResponse
     *
     * @param ListTransitRouterMulticastGroupsRequest $request
     *
     * @return ListTransitRouterMulticastGroupsResponse
     */
    public function listTransitRouterMulticastGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterMulticastGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of inter-region connections under an Enterprise Edition transit router by calling the ListTransitRouterPeerAttachments operation.
     *
     * @remarks
     * You can query inter-region connections under an Enterprise Edition transit router in the following ways:
     * - Query all inter-region connections under an Enterprise Edition transit router by specifying the transit router instance ID.
     * - Query all inter-region connections under an Enterprise Edition transit router by specifying the Cloud Enterprise Network (CEN) instance ID and the region ID of the Enterprise Edition transit router instance.
     *
     * @param request - ListTransitRouterPeerAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterPeerAttachmentsResponse
     *
     * @param ListTransitRouterPeerAttachmentsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListTransitRouterPeerAttachmentsResponse
     */
    public function listTransitRouterPeerAttachmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterPeerAttachments',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterPeerAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of inter-region connections under an Enterprise Edition transit router by calling the ListTransitRouterPeerAttachments operation.
     *
     * @remarks
     * You can query inter-region connections under an Enterprise Edition transit router in the following ways:
     * - Query all inter-region connections under an Enterprise Edition transit router by specifying the transit router instance ID.
     * - Query all inter-region connections under an Enterprise Edition transit router by specifying the Cloud Enterprise Network (CEN) instance ID and the region ID of the Enterprise Edition transit router instance.
     *
     * @param request - ListTransitRouterPeerAttachmentsRequest
     *
     * @returns ListTransitRouterPeerAttachmentsResponse
     *
     * @param ListTransitRouterPeerAttachmentsRequest $request
     *
     * @return ListTransitRouterPeerAttachmentsResponse
     */
    public function listTransitRouterPeerAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterPeerAttachmentsWithOptions($request, $runtime);
    }

    /**
     * Queries information about prefix lists associated with an Enterprise Edition transit router route table.
     *
     * @param request - ListTransitRouterPrefixListAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterPrefixListAssociationResponse
     *
     * @param ListTransitRouterPrefixListAssociationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListTransitRouterPrefixListAssociationResponse
     */
    public function listTransitRouterPrefixListAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextHop) {
            @$query['NextHop'] = $request->nextHop;
        }

        if (null !== $request->nextHopInstanceId) {
            @$query['NextHopInstanceId'] = $request->nextHopInstanceId;
        }

        if (null !== $request->nextHopType) {
            @$query['NextHopType'] = $request->nextHopType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ownerUid) {
            @$query['OwnerUid'] = $request->ownerUid;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prefixListId) {
            @$query['PrefixListId'] = $request->prefixListId;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterTableId) {
            @$query['TransitRouterTableId'] = $request->transitRouterTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterPrefixListAssociation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterPrefixListAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about prefix lists associated with an Enterprise Edition transit router route table.
     *
     * @param request - ListTransitRouterPrefixListAssociationRequest
     *
     * @returns ListTransitRouterPrefixListAssociationResponse
     *
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
     * Calls the ListTransitRouterRouteEntries operation to query the details of route entries in an Enterprise Edition transit router route table.
     *
     * @param request - ListTransitRouterRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterRouteEntriesResponse
     *
     * @param ListTransitRouterRouteEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListTransitRouterRouteEntriesResponse
     */
    public function listTransitRouterRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prefixListId) {
            @$query['PrefixListId'] = $request->prefixListId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeFilter) {
            @$query['RouteFilter'] = $request->routeFilter;
        }

        if (null !== $request->transitRouterRouteEntryDestinationCidrBlock) {
            @$query['TransitRouterRouteEntryDestinationCidrBlock'] = $request->transitRouterRouteEntryDestinationCidrBlock;
        }

        if (null !== $request->transitRouterRouteEntryIds) {
            @$query['TransitRouterRouteEntryIds'] = $request->transitRouterRouteEntryIds;
        }

        if (null !== $request->transitRouterRouteEntryNames) {
            @$query['TransitRouterRouteEntryNames'] = $request->transitRouterRouteEntryNames;
        }

        if (null !== $request->transitRouterRouteEntryNextHopId) {
            @$query['TransitRouterRouteEntryNextHopId'] = $request->transitRouterRouteEntryNextHopId;
        }

        if (null !== $request->transitRouterRouteEntryNextHopResourceId) {
            @$query['TransitRouterRouteEntryNextHopResourceId'] = $request->transitRouterRouteEntryNextHopResourceId;
        }

        if (null !== $request->transitRouterRouteEntryNextHopResourceType) {
            @$query['TransitRouterRouteEntryNextHopResourceType'] = $request->transitRouterRouteEntryNextHopResourceType;
        }

        if (null !== $request->transitRouterRouteEntryNextHopType) {
            @$query['TransitRouterRouteEntryNextHopType'] = $request->transitRouterRouteEntryNextHopType;
        }

        if (null !== $request->transitRouterRouteEntryOriginResourceId) {
            @$query['TransitRouterRouteEntryOriginResourceId'] = $request->transitRouterRouteEntryOriginResourceId;
        }

        if (null !== $request->transitRouterRouteEntryOriginResourceType) {
            @$query['TransitRouterRouteEntryOriginResourceType'] = $request->transitRouterRouteEntryOriginResourceType;
        }

        if (null !== $request->transitRouterRouteEntryStatus) {
            @$query['TransitRouterRouteEntryStatus'] = $request->transitRouterRouteEntryStatus;
        }

        if (null !== $request->transitRouterRouteEntryType) {
            @$query['TransitRouterRouteEntryType'] = $request->transitRouterRouteEntryType;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterRouteEntries',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the ListTransitRouterRouteEntries operation to query the details of route entries in an Enterprise Edition transit router route table.
     *
     * @param request - ListTransitRouterRouteEntriesRequest
     *
     * @returns ListTransitRouterRouteEntriesResponse
     *
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
     * Queries the route association relationships created for an Enterprise Edition transit router route table or a network instance connection.
     *
     * @remarks
     * When you call the **ListTransitRouterRouteTableAssociations** operation, specify at least one of the request parameters **TransitRouterRouteTableId** and **TransitRouterAttachmentId**:
     * - If you specify only the **TransitRouterRouteTableId** parameter, the system queries the network instance connections that have route association relationships with the specified Enterprise Edition transit router route table.
     * - If you specify only the **TransitRouterAttachmentId** parameter, the system queries the Enterprise Edition transit router route tables that have route association relationships with the specified network instance connection.
     * - If you specify both the **TransitRouterRouteTableId** and **TransitRouterAttachmentId** parameters, the system queries the route association relationship between the specified network instance connection and the specified Enterprise Edition transit router route table.
     *     - If a route association relationship exists between the network instance connection and the Enterprise Edition transit router route table, the system returns the information about the route association relationship.
     *     - If no route association relationship exists between the network instance connection and the Enterprise Edition transit router route table, the **TransitRouterAssociations** array is empty.
     * When you call the **ListTransitRouterRouteTableAssociations** operation, make sure that the parameter values you specify are correct.
     * If you specify incorrect parameter values, the system still returns a **RequestId** but does not return the route association relationships created for the Enterprise Edition transit router route table or network instance connection.
     *
     * @param request - ListTransitRouterRouteTableAssociationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterRouteTableAssociationsResponse
     *
     * @param ListTransitRouterRouteTableAssociationsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListTransitRouterRouteTableAssociationsResponse
     */
    public function listTransitRouterRouteTableAssociationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterAttachmentResourceId) {
            @$query['TransitRouterAttachmentResourceId'] = $request->transitRouterAttachmentResourceId;
        }

        if (null !== $request->transitRouterAttachmentResourceType) {
            @$query['TransitRouterAttachmentResourceType'] = $request->transitRouterAttachmentResourceType;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterRouteTableAssociations',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterRouteTableAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the route association relationships created for an Enterprise Edition transit router route table or a network instance connection.
     *
     * @remarks
     * When you call the **ListTransitRouterRouteTableAssociations** operation, specify at least one of the request parameters **TransitRouterRouteTableId** and **TransitRouterAttachmentId**:
     * - If you specify only the **TransitRouterRouteTableId** parameter, the system queries the network instance connections that have route association relationships with the specified Enterprise Edition transit router route table.
     * - If you specify only the **TransitRouterAttachmentId** parameter, the system queries the Enterprise Edition transit router route tables that have route association relationships with the specified network instance connection.
     * - If you specify both the **TransitRouterRouteTableId** and **TransitRouterAttachmentId** parameters, the system queries the route association relationship between the specified network instance connection and the specified Enterprise Edition transit router route table.
     *     - If a route association relationship exists between the network instance connection and the Enterprise Edition transit router route table, the system returns the information about the route association relationship.
     *     - If no route association relationship exists between the network instance connection and the Enterprise Edition transit router route table, the **TransitRouterAssociations** array is empty.
     * When you call the **ListTransitRouterRouteTableAssociations** operation, make sure that the parameter values you specify are correct.
     * If you specify incorrect parameter values, the system still returns a **RequestId** but does not return the route association relationships created for the Enterprise Edition transit router route table or network instance connection.
     *
     * @param request - ListTransitRouterRouteTableAssociationsRequest
     *
     * @returns ListTransitRouterRouteTableAssociationsResponse
     *
     * @param ListTransitRouterRouteTableAssociationsRequest $request
     *
     * @return ListTransitRouterRouteTableAssociationsResponse
     */
    public function listTransitRouterRouteTableAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterRouteTableAssociationsWithOptions($request, $runtime);
    }

    /**
     * Queries the route learning relationships of an Enterprise Edition transit router route table.
     *
     * @param request - ListTransitRouterRouteTablePropagationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterRouteTablePropagationsResponse
     *
     * @param ListTransitRouterRouteTablePropagationsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListTransitRouterRouteTablePropagationsResponse
     */
    public function listTransitRouterRouteTablePropagationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterAttachmentResourceId) {
            @$query['TransitRouterAttachmentResourceId'] = $request->transitRouterAttachmentResourceId;
        }

        if (null !== $request->transitRouterAttachmentResourceType) {
            @$query['TransitRouterAttachmentResourceType'] = $request->transitRouterAttachmentResourceType;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterRouteTablePropagations',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterRouteTablePropagationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the route learning relationships of an Enterprise Edition transit router route table.
     *
     * @param request - ListTransitRouterRouteTablePropagationsRequest
     *
     * @returns ListTransitRouterRouteTablePropagationsResponse
     *
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
     * Queries the details of route tables of an Enterprise Edition transit router by calling the ListTransitRouterRouteTables operation.
     *
     * @param request - ListTransitRouterRouteTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterRouteTablesResponse
     *
     * @param ListTransitRouterRouteTablesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListTransitRouterRouteTablesResponse
     */
    public function listTransitRouterRouteTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeTableOptions) {
            @$query['RouteTableOptions'] = $request->routeTableOptions;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterRouteTableIds) {
            @$query['TransitRouterRouteTableIds'] = $request->transitRouterRouteTableIds;
        }

        if (null !== $request->transitRouterRouteTableNames) {
            @$query['TransitRouterRouteTableNames'] = $request->transitRouterRouteTableNames;
        }

        if (null !== $request->transitRouterRouteTableStatus) {
            @$query['TransitRouterRouteTableStatus'] = $request->transitRouterRouteTableStatus;
        }

        if (null !== $request->transitRouterRouteTableType) {
            @$query['TransitRouterRouteTableType'] = $request->transitRouterRouteTableType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterRouteTables',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterRouteTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of route tables of an Enterprise Edition transit router by calling the ListTransitRouterRouteTables operation.
     *
     * @param request - ListTransitRouterRouteTablesRequest
     *
     * @returns ListTransitRouterRouteTablesResponse
     *
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
     * Queries the connection information of virtual border routers (VBRs) under an Enterprise Edition transit router, including the total number of entries, connection status, connection IDs, and payers of network instances.
     *
     * @remarks
     * You can query information about virtual border router (VBR) connections on an Enterprise Edition transit router in the following ways:
     * - Query information about all VBR connections on an Enterprise Edition transit router by specifying the transit router instance ID.
     * - Query information about all VBR connections on an Enterprise Edition transit router by specifying the Cloud Enterprise Network (CEN) instance ID and the region ID of the transit router instance.
     * - Query information about a VBR connection by specifying only the TransitRouterAttachmentId parameter.
     *
     * @param request - ListTransitRouterVbrAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterVbrAttachmentsResponse
     *
     * @param ListTransitRouterVbrAttachmentsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListTransitRouterVbrAttachmentsResponse
     */
    public function listTransitRouterVbrAttachmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterVbrAttachments',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterVbrAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the connection information of virtual border routers (VBRs) under an Enterprise Edition transit router, including the total number of entries, connection status, connection IDs, and payers of network instances.
     *
     * @remarks
     * You can query information about virtual border router (VBR) connections on an Enterprise Edition transit router in the following ways:
     * - Query information about all VBR connections on an Enterprise Edition transit router by specifying the transit router instance ID.
     * - Query information about all VBR connections on an Enterprise Edition transit router by specifying the Cloud Enterprise Network (CEN) instance ID and the region ID of the transit router instance.
     * - Query information about a VBR connection by specifying only the TransitRouterAttachmentId parameter.
     *
     * @param request - ListTransitRouterVbrAttachmentsRequest
     *
     * @returns ListTransitRouterVbrAttachmentsResponse
     *
     * @param ListTransitRouterVbrAttachmentsRequest $request
     *
     * @return ListTransitRouterVbrAttachmentsResponse
     */
    public function listTransitRouterVbrAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterVbrAttachmentsWithOptions($request, $runtime);
    }

    /**
     * Queries information about Virtual Private Cloud (VPC) connections under an Enterprise Edition transit router, including the status, billing type, zone information, and associated vSwitch and network interface controller (NIC) details of VPC connections that are active for forwarding and routing traffic.
     *
     * @remarks
     * You can query information about VPC connections under an Enterprise Edition transit router in the following three ways:
     * - Query information about all VPC connections under an Enterprise Edition transit router instance by specifying the transit router instance ID.
     * - Query information about all VPC connections under an Enterprise Edition transit router instance by specifying the Cloud Enterprise Network (CEN) instance ID and the region ID of the Enterprise Edition transit router instance.
     * - Query information about all VPC connections in a region by specifying the region ID of the Enterprise Edition transit router instance.
     *
     * @param request - ListTransitRouterVpcAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterVpcAttachmentsResponse
     *
     * @param ListTransitRouterVpcAttachmentsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListTransitRouterVpcAttachmentsResponse
     */
    public function listTransitRouterVpcAttachmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
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

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterVpcAttachments',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterVpcAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about Virtual Private Cloud (VPC) connections under an Enterprise Edition transit router, including the status, billing type, zone information, and associated vSwitch and network interface controller (NIC) details of VPC connections that are active for forwarding and routing traffic.
     *
     * @remarks
     * You can query information about VPC connections under an Enterprise Edition transit router in the following three ways:
     * - Query information about all VPC connections under an Enterprise Edition transit router instance by specifying the transit router instance ID.
     * - Query information about all VPC connections under an Enterprise Edition transit router instance by specifying the Cloud Enterprise Network (CEN) instance ID and the region ID of the Enterprise Edition transit router instance.
     * - Query information about all VPC connections in a region by specifying the region ID of the Enterprise Edition transit router instance.
     *
     * @param request - ListTransitRouterVpcAttachmentsRequest
     *
     * @returns ListTransitRouterVpcAttachmentsResponse
     *
     * @param ListTransitRouterVpcAttachmentsRequest $request
     *
     * @return ListTransitRouterVpcAttachmentsResponse
     */
    public function listTransitRouterVpcAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterVpcAttachmentsWithOptions($request, $runtime);
    }

    /**
     * Queries information about VPN connections, such as the status, IPsec connection ID, and billing method of VPN connections.
     *
     * @remarks
     * The ListTransitRouterVpnAttachments operation supports the following three query methods:
     * - Specify only **TransitRouterAttachmentId** to query information about a specific VPN connection.
     * - Specify only **TransitRouterId** to query information about all VPN connections associated with the specified transit router.
     * - Specify **CenId** and **RegionId** to query information about VPN connections in a specific region of the Cloud Enterprise Network (CEN) instance.
     * When calling the **ListTransitRouterVpnAttachments** operation, make sure that the parameter values are correct. If you specify incorrect parameter values, the response still returns a **RequestId**, but does not include the information about the target VPN connections.
     *
     * @param request - ListTransitRouterVpnAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRouterVpnAttachmentsResponse
     *
     * @param ListTransitRouterVpnAttachmentsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListTransitRouterVpnAttachmentsResponse
     */
    public function listTransitRouterVpnAttachmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouterVpnAttachments',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRouterVpnAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about VPN connections, such as the status, IPsec connection ID, and billing method of VPN connections.
     *
     * @remarks
     * The ListTransitRouterVpnAttachments operation supports the following three query methods:
     * - Specify only **TransitRouterAttachmentId** to query information about a specific VPN connection.
     * - Specify only **TransitRouterId** to query information about all VPN connections associated with the specified transit router.
     * - Specify **CenId** and **RegionId** to query information about VPN connections in a specific region of the Cloud Enterprise Network (CEN) instance.
     * When calling the **ListTransitRouterVpnAttachments** operation, make sure that the parameter values are correct. If you specify incorrect parameter values, the response still returns a **RequestId**, but does not include the information about the target VPN connections.
     *
     * @param request - ListTransitRouterVpnAttachmentsRequest
     *
     * @returns ListTransitRouterVpnAttachmentsResponse
     *
     * @param ListTransitRouterVpnAttachmentsRequest $request
     *
     * @return ListTransitRouterVpnAttachmentsResponse
     */
    public function listTransitRouterVpnAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRouterVpnAttachmentsWithOptions($request, $runtime);
    }

    /**
     * Queries information about transit router instances under a Cloud Enterprise Network (CEN) instance, including the instance type, instance status, transit router instance ID, and whether the multicast feature is enabled.
     *
     * @remarks
     * When you call this operation to query information about transit router instances under a CEN instance, you can specify the **RegionId** and **TransitRouterId** parameters as needed. The following describes the relationship between these two parameters:
     * - If you do not specify **RegionId** or **TransitRouterId**, all transit router instances under the CEN instance are queried.
     * - If you specify only **RegionId**, transit router instances in the specified region under the CEN instance are queried.
     * - If you specify only **TransitRouterId**, the specified transit router instance under the CEN instance is queried.
     *
     * @param request - ListTransitRoutersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransitRoutersResponse
     *
     * @param ListTransitRoutersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListTransitRoutersResponse
     */
    public function listTransitRoutersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->featureFilter) {
            @$query['FeatureFilter'] = $request->featureFilter;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterName) {
            @$query['TransitRouterName'] = $request->transitRouterName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransitRouters',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransitRoutersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about transit router instances under a Cloud Enterprise Network (CEN) instance, including the instance type, instance status, transit router instance ID, and whether the multicast feature is enabled.
     *
     * @remarks
     * When you call this operation to query information about transit router instances under a CEN instance, you can specify the **RegionId** and **TransitRouterId** parameters as needed. The following describes the relationship between these two parameters:
     * - If you do not specify **RegionId** or **TransitRouterId**, all transit router instances under the CEN instance are queried.
     * - If you specify only **RegionId**, transit router instances in the specified region under the CEN instance are queried.
     * - If you specify only **TransitRouterId**, the specified transit router instance under the CEN instance is queried.
     *
     * @param request - ListTransitRoutersRequest
     *
     * @returns ListTransitRoutersResponse
     *
     * @param ListTransitRoutersRequest $request
     *
     * @return ListTransitRoutersResponse
     */
    public function listTransitRouters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransitRoutersWithOptions($request, $runtime);
    }

    /**
     * Modifies the name and description of a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * *ModifyCenAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the CEN instance has not been modified yet. The modification task is still running in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If the CEN instance is in the **Modifying** state, the CEN instance is being modified. In this state, you can only query the CEN instance but cannot perform other operations on it.
     * - If the CEN instance is in the **Active** state, the CEN instance has been modified.
     *
     * @param request - ModifyCenAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCenAttributeResponse
     *
     * @param ModifyCenAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyCenAttributeResponse
     */
    public function modifyCenAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->protectionLevel) {
            @$query['ProtectionLevel'] = $request->protectionLevel;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCenAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCenAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * *ModifyCenAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the CEN instance has not been modified yet. The modification task is still running in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If the CEN instance is in the **Modifying** state, the CEN instance is being modified. In this state, you can only query the CEN instance but cannot perform other operations on it.
     * - If the CEN instance is in the **Active** state, the CEN instance has been modified.
     *
     * @param request - ModifyCenAttributeRequest
     *
     * @returns ModifyCenAttributeResponse
     *
     * @param ModifyCenAttributeRequest $request
     *
     * @return ModifyCenAttributeResponse
     */
    public function modifyCenAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the name and description of a bandwidth plan instance by calling the ModifyCenBandwidthPackageAttribute operation.
     *
     * @param request - ModifyCenBandwidthPackageAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCenBandwidthPackageAttributeResponse
     *
     * @param ModifyCenBandwidthPackageAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyCenBandwidthPackageAttributeResponse
     */
    public function modifyCenBandwidthPackageAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenBandwidthPackageId) {
            @$query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCenBandwidthPackageAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCenBandwidthPackageAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a bandwidth plan instance by calling the ModifyCenBandwidthPackageAttribute operation.
     *
     * @param request - ModifyCenBandwidthPackageAttributeRequest
     *
     * @returns ModifyCenBandwidthPackageAttributeResponse
     *
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
     * Modifies the peak bandwidth of a bandwidth plan instance by calling the ModifyCenBandwidthPackageSpec operation.
     *
     * @param request - ModifyCenBandwidthPackageSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCenBandwidthPackageSpecResponse
     *
     * @param ModifyCenBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyCenBandwidthPackageSpecResponse
     */
    public function modifyCenBandwidthPackageSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->cenBandwidthPackageId) {
            @$query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCenBandwidthPackageSpec',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCenBandwidthPackageSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the peak bandwidth of a bandwidth plan instance by calling the ModifyCenBandwidthPackageSpec operation.
     *
     * @param request - ModifyCenBandwidthPackageSpecRequest
     *
     * @returns ModifyCenBandwidthPackageSpecResponse
     *
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
     * Modifies a routing policy by calling the ModifyCenRouteMap operation.
     *
     * @remarks
     * The `ModifyCenRouteMap` operation is asynchronous. After you send a request, the system returns a **RequestId** but the routing policy has not been modified yet. The modification task runs in the background. You can call the `DescribeCenRouteMaps` operation to query the status of the routing policy.
     * - If the routing policy is in the **Modifying** state, the routing policy is being modified. In this state, you can only perform query operations.
     * - If the routing policy is in the **Active** state, the routing policy has been modified.
     *
     * @param request - ModifyCenRouteMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCenRouteMapResponse
     *
     * @param ModifyCenRouteMapRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyCenRouteMapResponse
     */
    public function modifyCenRouteMapWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asPathMatchMode) {
            @$query['AsPathMatchMode'] = $request->asPathMatchMode;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenRegionId) {
            @$query['CenRegionId'] = $request->cenRegionId;
        }

        if (null !== $request->cidrMatchMode) {
            @$query['CidrMatchMode'] = $request->cidrMatchMode;
        }

        if (null !== $request->communityMatchMode) {
            @$query['CommunityMatchMode'] = $request->communityMatchMode;
        }

        if (null !== $request->communityOperateMode) {
            @$query['CommunityOperateMode'] = $request->communityOperateMode;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destinationChildInstanceTypes) {
            @$query['DestinationChildInstanceTypes'] = $request->destinationChildInstanceTypes;
        }

        if (null !== $request->destinationCidrBlocks) {
            @$query['DestinationCidrBlocks'] = $request->destinationCidrBlocks;
        }

        if (null !== $request->destinationInstanceIds) {
            @$query['DestinationInstanceIds'] = $request->destinationInstanceIds;
        }

        if (null !== $request->destinationInstanceIdsReverseMatch) {
            @$query['DestinationInstanceIdsReverseMatch'] = $request->destinationInstanceIdsReverseMatch;
        }

        if (null !== $request->destinationRegionIds) {
            @$query['DestinationRegionIds'] = $request->destinationRegionIds;
        }

        if (null !== $request->destinationRouteTableIds) {
            @$query['DestinationRouteTableIds'] = $request->destinationRouteTableIds;
        }

        if (null !== $request->mapResult) {
            @$query['MapResult'] = $request->mapResult;
        }

        if (null !== $request->matchAddressType) {
            @$query['MatchAddressType'] = $request->matchAddressType;
        }

        if (null !== $request->matchAsns) {
            @$query['MatchAsns'] = $request->matchAsns;
        }

        if (null !== $request->matchCommunitySet) {
            @$query['MatchCommunitySet'] = $request->matchCommunitySet;
        }

        if (null !== $request->nextPriority) {
            @$query['NextPriority'] = $request->nextPriority;
        }

        if (null !== $request->operateCommunitySet) {
            @$query['OperateCommunitySet'] = $request->operateCommunitySet;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->preference) {
            @$query['Preference'] = $request->preference;
        }

        if (null !== $request->prependAsPath) {
            @$query['PrependAsPath'] = $request->prependAsPath;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeMapId) {
            @$query['RouteMapId'] = $request->routeMapId;
        }

        if (null !== $request->routeTypes) {
            @$query['RouteTypes'] = $request->routeTypes;
        }

        if (null !== $request->sourceChildInstanceTypes) {
            @$query['SourceChildInstanceTypes'] = $request->sourceChildInstanceTypes;
        }

        if (null !== $request->sourceInstanceIds) {
            @$query['SourceInstanceIds'] = $request->sourceInstanceIds;
        }

        if (null !== $request->sourceInstanceIdsReverseMatch) {
            @$query['SourceInstanceIdsReverseMatch'] = $request->sourceInstanceIdsReverseMatch;
        }

        if (null !== $request->sourceRegionIds) {
            @$query['SourceRegionIds'] = $request->sourceRegionIds;
        }

        if (null !== $request->sourceRouteTableIds) {
            @$query['SourceRouteTableIds'] = $request->sourceRouteTableIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCenRouteMap',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCenRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a routing policy by calling the ModifyCenRouteMap operation.
     *
     * @remarks
     * The `ModifyCenRouteMap` operation is asynchronous. After you send a request, the system returns a **RequestId** but the routing policy has not been modified yet. The modification task runs in the background. You can call the `DescribeCenRouteMaps` operation to query the status of the routing policy.
     * - If the routing policy is in the **Modifying** state, the routing policy is being modified. In this state, you can only perform query operations.
     * - If the routing policy is in the **Active** state, the routing policy has been modified.
     *
     * @param request - ModifyCenRouteMapRequest
     *
     * @returns ModifyCenRouteMapResponse
     *
     * @param ModifyCenRouteMapRequest $request
     *
     * @return ModifyCenRouteMapResponse
     */
    public function modifyCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * Modifies the name, description, and capture window duration of a flow log.
     *
     * @remarks
     * The `ModifyFlowLogAttribute` operation is asynchronous. After you call this operation, the system returns a **RequestId**, but the modification has not been completed. The modification continues in the background. You can call the `DescribeFlowlogs` operation to query the status of the flow log.
     * - If the flow log is in the **Modifying** state, the flow log is being modified. In this state, you can only perform query operations.
     * - If the flow log is in the **Active** state, the flow log has been modified.
     *
     * @param request - ModifyFlowLogAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFlowLogAttributeResponse
     *
     * @param ModifyFlowLogAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->flowLogId) {
            @$query['FlowLogId'] = $request->flowLogId;
        }

        if (null !== $request->flowLogName) {
            @$query['FlowLogName'] = $request->flowLogName;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyFlowLogAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFlowLogAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, and capture window duration of a flow log.
     *
     * @remarks
     * The `ModifyFlowLogAttribute` operation is asynchronous. After you call this operation, the system returns a **RequestId**, but the modification has not been completed. The modification continues in the background. You can call the `DescribeFlowlogs` operation to query the status of the flow log.
     * - If the flow log is in the **Modifying** state, the flow log is being modified. In this state, you can only perform query operations.
     * - If the flow log is in the **Active** state, the flow log has been modified.
     *
     * @param request - ModifyFlowLogAttributeRequest
     *
     * @returns ModifyFlowLogAttributeResponse
     *
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
     * Modifies the payer for a cross-account network instance connection of a transit router instance.
     *
     * @remarks
     * The ModifyGrantInstanceToTransitRouter operation supports modifying only the payer for cross-account virtual private cloud (VPC), virtual border router (VBR), and IPsec connection instances connected to a transit router instance.
     *
     * @param request - ModifyGrantInstanceToTransitRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGrantInstanceToTransitRouterResponse
     *
     * @param ModifyGrantInstanceToTransitRouterRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyGrantInstanceToTransitRouterResponse
     */
    public function modifyGrantInstanceToTransitRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyGrantInstanceToTransitRouter',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGrantInstanceToTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the payer for a cross-account network instance connection of a transit router instance.
     *
     * @remarks
     * The ModifyGrantInstanceToTransitRouter operation supports modifying only the payer for cross-account virtual private cloud (VPC), virtual border router (VBR), and IPsec connection instances connected to a transit router instance.
     *
     * @param request - ModifyGrantInstanceToTransitRouterRequest
     *
     * @returns ModifyGrantInstanceToTransitRouterResponse
     *
     * @param ModifyGrantInstanceToTransitRouterRequest $request
     *
     * @return ModifyGrantInstanceToTransitRouterResponse
     */
    public function modifyGrantInstanceToTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGrantInstanceToTransitRouterWithOptions($request, $runtime);
    }

    /**
     * Modifies the name and description of a traffic classification rule.
     *
     * @param request - ModifyTrafficMatchRuleToTrafficMarkingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTrafficMatchRuleToTrafficMarkingPolicyResponse
     *
     * @param ModifyTrafficMatchRuleToTrafficMarkingPolicyRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return ModifyTrafficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function modifyTrafficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkingPolicyId) {
            @$query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }

        if (null !== $request->trafficMatchRuleDescription) {
            @$query['TrafficMatchRuleDescription'] = $request->trafficMatchRuleDescription;
        }

        if (null !== $request->trafficMatchRuleId) {
            @$query['TrafficMatchRuleId'] = $request->trafficMatchRuleId;
        }

        if (null !== $request->trafficMatchRuleName) {
            @$query['TrafficMatchRuleName'] = $request->trafficMatchRuleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTrafficMatchRuleToTrafficMarkingPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTrafficMatchRuleToTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a traffic classification rule.
     *
     * @param request - ModifyTrafficMatchRuleToTrafficMarkingPolicyRequest
     *
     * @returns ModifyTrafficMatchRuleToTrafficMarkingPolicyResponse
     *
     * @param ModifyTrafficMatchRuleToTrafficMarkingPolicyRequest $request
     *
     * @return ModifyTrafficMatchRuleToTrafficMarkingPolicyResponse
     */
    public function modifyTrafficMatchRuleToTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrafficMatchRuleToTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies an aggregate route.
     *
     * @param tmpReq - ModifyTransitRouteTableAggregationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTransitRouteTableAggregationResponse
     *
     * @param ModifyTransitRouteTableAggregationRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyTransitRouteTableAggregationResponse
     */
    public function modifyTransitRouteTableAggregationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyTransitRouteTableAggregationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->transitRouteTableAggregationScopeList) {
            $request->transitRouteTableAggregationScopeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transitRouteTableAggregationScopeList, 'TransitRouteTableAggregationScopeList', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouteTableAggregationCidr) {
            @$query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }

        if (null !== $request->transitRouteTableAggregationDescription) {
            @$query['TransitRouteTableAggregationDescription'] = $request->transitRouteTableAggregationDescription;
        }

        if (null !== $request->transitRouteTableAggregationName) {
            @$query['TransitRouteTableAggregationName'] = $request->transitRouteTableAggregationName;
        }

        if (null !== $request->transitRouteTableAggregationScope) {
            @$query['TransitRouteTableAggregationScope'] = $request->transitRouteTableAggregationScope;
        }

        if (null !== $request->transitRouteTableAggregationScopeListShrink) {
            @$query['TransitRouteTableAggregationScopeList'] = $request->transitRouteTableAggregationScopeListShrink;
        }

        if (null !== $request->transitRouteTableId) {
            @$query['TransitRouteTableId'] = $request->transitRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTransitRouteTableAggregation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an aggregate route.
     *
     * @param request - ModifyTransitRouteTableAggregationRequest
     *
     * @returns ModifyTransitRouteTableAggregationResponse
     *
     * @param ModifyTransitRouteTableAggregationRequest $request
     *
     * @return ModifyTransitRouteTableAggregationResponse
     */
    public function modifyTransitRouteTableAggregation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTransitRouteTableAggregationWithOptions($request, $runtime);
    }

    /**
     * Calls the ModifyTransitRouterCidr operation to modify a CIDR block of a transit router.
     *
     * @remarks
     * - Before you modify a transit router CIDR block, we recommend that you familiarize yourself with the [usage limits of transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * - A transit router CIDR block that has allocated IP addresses cannot be modified.
     * - If you call the **ModifyTransitRouterCidr** operation without modifying the **PublishCidrRoute** parameter, this operation is synchronous and the modification takes effect immediately.
     * - If you call the **ModifyTransitRouterCidr** operation and modify the **PublishCidrRoute** parameter, this operation is asynchronous. After you send a request, the system returns a **RequestId** but the transit router CIDR block is not yet modified. The modification task runs in the background. You can call the **ListTransitRouterCidr** operation to query the modification status of the transit router CIDR block.
     *     - If the transit router CIDR block still shows the information before the modification, the transit router CIDR block is being modified.
     *     - If the transit router CIDR block shows the updated information, the transit router CIDR block has been modified.
     *
     * @param request - ModifyTransitRouterCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTransitRouterCidrResponse
     *
     * @param ModifyTransitRouterCidrRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyTransitRouterCidrResponse
     */
    public function modifyTransitRouterCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->publishCidrRoute) {
            @$query['PublishCidrRoute'] = $request->publishCidrRoute;
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

        if (null !== $request->transitRouterCidrId) {
            @$query['TransitRouterCidrId'] = $request->transitRouterCidrId;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTransitRouterCidr',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTransitRouterCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the ModifyTransitRouterCidr operation to modify a CIDR block of a transit router.
     *
     * @remarks
     * - Before you modify a transit router CIDR block, we recommend that you familiarize yourself with the [usage limits of transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * - A transit router CIDR block that has allocated IP addresses cannot be modified.
     * - If you call the **ModifyTransitRouterCidr** operation without modifying the **PublishCidrRoute** parameter, this operation is synchronous and the modification takes effect immediately.
     * - If you call the **ModifyTransitRouterCidr** operation and modify the **PublishCidrRoute** parameter, this operation is asynchronous. After you send a request, the system returns a **RequestId** but the transit router CIDR block is not yet modified. The modification task runs in the background. You can call the **ListTransitRouterCidr** operation to query the modification status of the transit router CIDR block.
     *     - If the transit router CIDR block still shows the information before the modification, the transit router CIDR block is being modified.
     *     - If the transit router CIDR block shows the updated information, the transit router CIDR block has been modified.
     *
     * @param request - ModifyTransitRouterCidrRequest
     *
     * @returns ModifyTransitRouterCidrResponse
     *
     * @param ModifyTransitRouterCidrRequest $request
     *
     * @return ModifyTransitRouterCidrResponse
     */
    public function modifyTransitRouterCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTransitRouterCidrWithOptions($request, $runtime);
    }

    /**
     * Modifies the name, description, and feature options of a multicast domain.
     *
     * @param request - ModifyTransitRouterMulticastDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTransitRouterMulticastDomainResponse
     *
     * @param ModifyTransitRouterMulticastDomainRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyTransitRouterMulticastDomainResponse
     */
    public function modifyTransitRouterMulticastDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterMulticastDomainDescription) {
            @$query['TransitRouterMulticastDomainDescription'] = $request->transitRouterMulticastDomainDescription;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        if (null !== $request->transitRouterMulticastDomainName) {
            @$query['TransitRouterMulticastDomainName'] = $request->transitRouterMulticastDomainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTransitRouterMulticastDomain',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTransitRouterMulticastDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, and feature options of a multicast domain.
     *
     * @param request - ModifyTransitRouterMulticastDomainRequest
     *
     * @returns ModifyTransitRouterMulticastDomainResponse
     *
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
     * Modifies the resource group to which a Cloud Enterprise Network (CEN) instance or a bandwidth plan instance belongs.
     *
     * @remarks
     * CEN instances and bandwidth plan instances belong to the default resource group by default. You can call the `MoveResourceGroup` operation to modify the resource group to which a CEN instance or a bandwidth plan instance belongs.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource group to which a Cloud Enterprise Network (CEN) instance or a bandwidth plan instance belongs.
     *
     * @remarks
     * CEN instances and bandwidth plan instances belong to the default resource group by default. You can call the `MoveResourceGroup` operation to modify the resource group to which a CEN instance or a bandwidth plan instance belongs.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Activates the transit router service.
     *
     * @remarks
     * You can call the `OpenTransitRouterService` operation to activate the transit router service free of charge. After the transit router service is activated, the system automatically generates an order. You can use the order ID returned by the `OpenTransitRouterService` operation to query order information in the <props="china">[Alibaba Cloud Management Console Order Center](https://usercenter2.aliyun.com/order/list?pageIndex=1&pageSize=20)<props="intl">[Alibaba Cloud Management Console Order Center](https://usercenter2-intl.aliyun.com/order/list).
     * > Before calling this operation, call [CheckTransitRouterService](~~CheckTransitRouterService~~) to check whether the transit router service is already activated for the current account. If it is already activated, you do not need to call this operation again.
     *
     * @param request - OpenTransitRouterServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenTransitRouterServiceResponse
     *
     * @param OpenTransitRouterServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OpenTransitRouterServiceResponse
     */
    public function openTransitRouterServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenTransitRouterService',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenTransitRouterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates the transit router service.
     *
     * @remarks
     * You can call the `OpenTransitRouterService` operation to activate the transit router service free of charge. After the transit router service is activated, the system automatically generates an order. You can use the order ID returned by the `OpenTransitRouterService` operation to query order information in the <props="china">[Alibaba Cloud Management Console Order Center](https://usercenter2.aliyun.com/order/list?pageIndex=1&pageSize=20)<props="intl">[Alibaba Cloud Management Console Order Center](https://usercenter2-intl.aliyun.com/order/list).
     * > Before calling this operation, call [CheckTransitRouterService](~~CheckTransitRouterService~~) to check whether the transit router service is already activated for the current account. If it is already activated, you do not need to call this operation again.
     *
     * @param request - OpenTransitRouterServiceRequest
     *
     * @returns OpenTransitRouterServiceResponse
     *
     * @param OpenTransitRouterServiceRequest $request
     *
     * @return OpenTransitRouterServiceResponse
     */
    public function openTransitRouterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openTransitRouterServiceWithOptions($request, $runtime);
    }

    /**
     * Cloud Enterprise Network (CEN) supports the publish route entry feature. You can publish routing entries from a VPC or VBR loaded into CEN to CEN by invoking the PublishRouteEntries operation. If no route conflict exists, other network instances in CEN can learn the published routes.
     *
     * @remarks
     * The following table lists the default publish status of each type of route entry in CEN. You can call the PublishRouteEntries operation to publish route entries that are not published to CEN.
     * | Route entry        | Instance to which the route entry belongs         |Published to CEN by default
     * |------------- |-----------------------|--------------------|
     * |Route entry that points to an ECS instance      |VPC       |No |
     * |Route entry that points to a VPN gateway      |VPC       |No |
     * |Route entry that points to a high availability (HA) virtual IP address    |VPC    |No |
     * |Route entry that points to a router interface    |VPC    |No |
     * |Route entry that points to an elastic network interfaces (ENIs)    |VPC    |No |
     * |Route entry that points to an IPv6 gateway    |VPC    |No |
     * |Route entry that points to a NAT gateway    |VPC    |No |
     * |VPC system route entry      | VPC       | Yes |
     * |Route entry that points to an on-premises data center      |VBR      |Yes |
     * |BGP route    |VBR    |Yes |
     *
     * @param request - PublishRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishRouteEntriesResponse
     *
     * @param PublishRouteEntriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PublishRouteEntriesResponse
     */
    public function publishRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceRouteTableId) {
            @$query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishRouteEntries',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cloud Enterprise Network (CEN) supports the publish route entry feature. You can publish routing entries from a VPC or VBR loaded into CEN to CEN by invoking the PublishRouteEntries operation. If no route conflict exists, other network instances in CEN can learn the published routes.
     *
     * @remarks
     * The following table lists the default publish status of each type of route entry in CEN. You can call the PublishRouteEntries operation to publish route entries that are not published to CEN.
     * | Route entry        | Instance to which the route entry belongs         |Published to CEN by default
     * |------------- |-----------------------|--------------------|
     * |Route entry that points to an ECS instance      |VPC       |No |
     * |Route entry that points to a VPN gateway      |VPC       |No |
     * |Route entry that points to a high availability (HA) virtual IP address    |VPC    |No |
     * |Route entry that points to a router interface    |VPC    |No |
     * |Route entry that points to an elastic network interfaces (ENIs)    |VPC    |No |
     * |Route entry that points to an IPv6 gateway    |VPC    |No |
     * |Route entry that points to a NAT gateway    |VPC    |No |
     * |VPC system route entry      | VPC       | Yes |
     * |Route entry that points to an on-premises data center      |VBR      |Yes |
     * |BGP route    |VBR    |Yes |
     *
     * @param request - PublishRouteEntriesRequest
     *
     * @returns PublishRouteEntriesResponse
     *
     * @param PublishRouteEntriesRequest $request
     *
     * @return PublishRouteEntriesResponse
     */
    public function publishRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * Republishes an aggregate route.
     *
     * @remarks
     * For aggregate routes that failed to be published or were partially published, you can call the **RefreshTransitRouteTableAggregation** operation to republish the aggregate route to Virtual Private Cloud (VPC) instances after you resolve the route issue.
     * If you resolve the problematic route by using one of the following methods, the system automatically republishes the aggregate route and you do not need to manually republish it:
     * - Delete the association forwarding relationship.
     * - Disable the route synchronization feature.
     * - Delete the VPC route table.
     * - Delete the aggregate route.
     * You can call the **DescribeTransitRouteTableAggregationDetail** operation to query the propagation status of an aggregate route.
     *
     * @param request - RefreshTransitRouteTableAggregationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshTransitRouteTableAggregationResponse
     *
     * @param RefreshTransitRouteTableAggregationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return RefreshTransitRouteTableAggregationResponse
     */
    public function refreshTransitRouteTableAggregationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouteTableAggregationCidr) {
            @$query['TransitRouteTableAggregationCidr'] = $request->transitRouteTableAggregationCidr;
        }

        if (null !== $request->transitRouteTableId) {
            @$query['TransitRouteTableId'] = $request->transitRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshTransitRouteTableAggregation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshTransitRouteTableAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Republishes an aggregate route.
     *
     * @remarks
     * For aggregate routes that failed to be published or were partially published, you can call the **RefreshTransitRouteTableAggregation** operation to republish the aggregate route to Virtual Private Cloud (VPC) instances after you resolve the route issue.
     * If you resolve the problematic route by using one of the following methods, the system automatically republishes the aggregate route and you do not need to manually republish it:
     * - Delete the association forwarding relationship.
     * - Disable the route synchronization feature.
     * - Delete the VPC route table.
     * - Delete the aggregate route.
     * You can call the **DescribeTransitRouteTableAggregationDetail** operation to query the propagation status of an aggregate route.
     *
     * @param request - RefreshTransitRouteTableAggregationRequest
     *
     * @returns RefreshTransitRouteTableAggregationResponse
     *
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
     * Calls the RegisterTransitRouterMulticastGroupMembers operation to create or add multicast members.
     *
     * @remarks
     * Currently, Enterprise Edition transit routers support only elastic network interfaces (ENIs) as multicast members. You can call the `RegisterTransitRouterMulticastGroupMembers` operation to specify ENIs in the same region or cross-region ENIs as multicast members.
     * - If you specify the **NetworkInterfaceIds** parameter, you want to specify ENIs in the current region as multicast members. Make sure that the vSwitch to which the ENI belongs is associated with the multicast domain. For more information, see [AssociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429778.html).
     * - If you specify the **PeerTransitRouterMulticastDomains** parameter, you want to specify multicast members in a multicast group with the same multicast IP address in a different region as multicast members of your current multicast group. Make sure that you have created an inter-region connection. For more information, see [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html).
     *   For example, you have Multicast Domain 1 in the China (Hangzhou) region with Multicast Group 1, and Multicast Domain 2 in the China (Shanghai) region with Multicast Group 2. Multicast Group 1 and Multicast Group 2 have the same multicast IP address, and Multicast Group 2 in the China (Shanghai) region has Multicast Member 2. When you call the `RegisterTransitRouterMulticastGroupMembers` operation to create multicast members for Multicast Group 1 in the China (Hangzhou) region, if you set **PeerTransitRouterMulticastDomains** to the ID of Multicast Domain 2 in the China (Shanghai) region, Multicast Member 2 in Multicast Group 2 in the China (Shanghai) region also becomes a multicast member of Multicast Group 1 in the China (Hangzhou) region.
     * - The `RegisterTransitRouterMulticastGroupMembers` operation is asynchronous. After you send a request, the system returns a **RequestId** but the multicast member is not completely created. The creation task continues to run in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast member.
     * 	- If the multicast member is in the **Registering** state, the multicast member is being created. In this state, you can only query the multicast member but cannot perform other operations.
     * 	- If the multicast member is in the **Registered** state, the multicast member is created.
     *
     * @param request - RegisterTransitRouterMulticastGroupMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterTransitRouterMulticastGroupMembersResponse
     *
     * @param RegisterTransitRouterMulticastGroupMembersRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return RegisterTransitRouterMulticastGroupMembersResponse
     */
    public function registerTransitRouterMulticastGroupMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->groupIpAddress) {
            @$query['GroupIpAddress'] = $request->groupIpAddress;
        }

        if (null !== $request->networkInterfaceIds) {
            @$query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->peerTransitRouterMulticastDomains) {
            @$query['PeerTransitRouterMulticastDomains'] = $request->peerTransitRouterMulticastDomains;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterTransitRouterMulticastGroupMembers',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterTransitRouterMulticastGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the RegisterTransitRouterMulticastGroupMembers operation to create or add multicast members.
     *
     * @remarks
     * Currently, Enterprise Edition transit routers support only elastic network interfaces (ENIs) as multicast members. You can call the `RegisterTransitRouterMulticastGroupMembers` operation to specify ENIs in the same region or cross-region ENIs as multicast members.
     * - If you specify the **NetworkInterfaceIds** parameter, you want to specify ENIs in the current region as multicast members. Make sure that the vSwitch to which the ENI belongs is associated with the multicast domain. For more information, see [AssociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429778.html).
     * - If you specify the **PeerTransitRouterMulticastDomains** parameter, you want to specify multicast members in a multicast group with the same multicast IP address in a different region as multicast members of your current multicast group. Make sure that you have created an inter-region connection. For more information, see [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html).
     *   For example, you have Multicast Domain 1 in the China (Hangzhou) region with Multicast Group 1, and Multicast Domain 2 in the China (Shanghai) region with Multicast Group 2. Multicast Group 1 and Multicast Group 2 have the same multicast IP address, and Multicast Group 2 in the China (Shanghai) region has Multicast Member 2. When you call the `RegisterTransitRouterMulticastGroupMembers` operation to create multicast members for Multicast Group 1 in the China (Hangzhou) region, if you set **PeerTransitRouterMulticastDomains** to the ID of Multicast Domain 2 in the China (Shanghai) region, Multicast Member 2 in Multicast Group 2 in the China (Shanghai) region also becomes a multicast member of Multicast Group 1 in the China (Hangzhou) region.
     * - The `RegisterTransitRouterMulticastGroupMembers` operation is asynchronous. After you send a request, the system returns a **RequestId** but the multicast member is not completely created. The creation task continues to run in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast member.
     * 	- If the multicast member is in the **Registering** state, the multicast member is being created. In this state, you can only query the multicast member but cannot perform other operations.
     * 	- If the multicast member is in the **Registered** state, the multicast member is created.
     *
     * @param request - RegisterTransitRouterMulticastGroupMembersRequest
     *
     * @returns RegisterTransitRouterMulticastGroupMembersResponse
     *
     * @param RegisterTransitRouterMulticastGroupMembersRequest $request
     *
     * @return RegisterTransitRouterMulticastGroupMembersResponse
     */
    public function registerTransitRouterMulticastGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerTransitRouterMulticastGroupMembersWithOptions($request, $runtime);
    }

    /**
     * Creates multicast sources to implement one-to-many multicast communication.
     *
     * @remarks
     * - Only elastic network interfaces (ENIs) can be specified as multicast sources.
     * - RegisterTransitRouterMulticastGroupSources is an asynchronous operation. After a request is sent, the system returns a **RequestId** but the multicast source is not completely created. The creation task still runs in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast source.
     *
     *     - If the multicast source is in the **Registering** state, the multicast source is being created. In this state, you can only query the multicast source but cannot perform other operations.
     *     - If the multicast source is in the **Registered** state, the multicast source is created.
     * ### Before you begin
     * Before you invoke the `RegisterTransitRouterMulticastGroupSources` operation to create a multicast source, make sure that the vSwitch to which the network interface controller (NIC) of the elastic network interfaces (ENIs) belongs is associated with the multicast domain. For more information, see [AssociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429778.html).
     *
     * @param request - RegisterTransitRouterMulticastGroupSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterTransitRouterMulticastGroupSourcesResponse
     *
     * @param RegisterTransitRouterMulticastGroupSourcesRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return RegisterTransitRouterMulticastGroupSourcesResponse
     */
    public function registerTransitRouterMulticastGroupSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->groupIpAddress) {
            @$query['GroupIpAddress'] = $request->groupIpAddress;
        }

        if (null !== $request->networkInterfaceIds) {
            @$query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterMulticastDomainId) {
            @$query['TransitRouterMulticastDomainId'] = $request->transitRouterMulticastDomainId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterTransitRouterMulticastGroupSources',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterTransitRouterMulticastGroupSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates multicast sources to implement one-to-many multicast communication.
     *
     * @remarks
     * - Only elastic network interfaces (ENIs) can be specified as multicast sources.
     * - RegisterTransitRouterMulticastGroupSources is an asynchronous operation. After a request is sent, the system returns a **RequestId** but the multicast source is not completely created. The creation task still runs in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast source.
     *
     *     - If the multicast source is in the **Registering** state, the multicast source is being created. In this state, you can only query the multicast source but cannot perform other operations.
     *     - If the multicast source is in the **Registered** state, the multicast source is created.
     * ### Before you begin
     * Before you invoke the `RegisterTransitRouterMulticastGroupSources` operation to create a multicast source, make sure that the vSwitch to which the network interface controller (NIC) of the elastic network interfaces (ENIs) belongs is associated with the multicast domain. For more information, see [AssociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429778.html).
     *
     * @param request - RegisterTransitRouterMulticastGroupSourcesRequest
     *
     * @returns RegisterTransitRouterMulticastGroupSourcesResponse
     *
     * @param RegisterTransitRouterMulticastGroupSourcesRequest $request
     *
     * @return RegisterTransitRouterMulticastGroupSourcesResponse
     */
    public function registerTransitRouterMulticastGroupSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerTransitRouterMulticastGroupSourcesWithOptions($request, $runtime);
    }

    /**
     * Removes traffic classification rules from a traffic marking policy by calling the RemoveTrafficMatchRuleFromTrafficMarkingPolicy operation.
     *
     * @remarks
     * - When you call the **RemoveTrafficMatchRuleFromTrafficMarkingPolicy** operation:
     *     - If you specify traffic classification rule IDs (the **TrafficMarkRuleIds** parameter), the operation deletes the specified traffic classification rules.
     *     - If you do not specify traffic classification rule IDs (the **TrafficMarkRuleIds** parameter), the operation does not perform any action.
     *     If you want to delete specific traffic classification rules, make sure that you have specified the IDs of the traffic classification rules before you call this operation.
     * - **RemoveTrafficMatchRuleFromTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the traffic classification rules are not immediately deleted. The deletion task runs in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of traffic classification rules.
     *     - If a traffic classification rule is in the **Deleting** state, the rule is being deleted. In this state, you can only query the traffic classification rule. You cannot perform other operations on it.
     *     - If the specified traffic classification rule cannot be found, the rule has been deleted.
     *
     * @param request - RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse
     *
     * @param RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse
     */
    public function removeTrafficMatchRuleFromTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkRuleIds) {
            @$query['TrafficMarkRuleIds'] = $request->trafficMarkRuleIds;
        }

        if (null !== $request->trafficMarkingPolicyId) {
            @$query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveTrafficMatchRuleFromTrafficMarkingPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes traffic classification rules from a traffic marking policy by calling the RemoveTrafficMatchRuleFromTrafficMarkingPolicy operation.
     *
     * @remarks
     * - When you call the **RemoveTrafficMatchRuleFromTrafficMarkingPolicy** operation:
     *     - If you specify traffic classification rule IDs (the **TrafficMarkRuleIds** parameter), the operation deletes the specified traffic classification rules.
     *     - If you do not specify traffic classification rule IDs (the **TrafficMarkRuleIds** parameter), the operation does not perform any action.
     *     If you want to delete specific traffic classification rules, make sure that you have specified the IDs of the traffic classification rules before you call this operation.
     * - **RemoveTrafficMatchRuleFromTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the traffic classification rules are not immediately deleted. The deletion task runs in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of traffic classification rules.
     *     - If a traffic classification rule is in the **Deleting** state, the rule is being deleted. In this state, you can only query the traffic classification rule. You cannot perform other operations on it.
     *     - If the specified traffic classification rule cannot be found, the rule has been deleted.
     *
     * @param request - RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest
     *
     * @returns RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse
     *
     * @param RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest $request
     *
     * @return RemoveTrafficMatchRuleFromTrafficMarkingPolicyResponse
     */
    public function removeTrafficMatchRuleFromTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTrafficMatchRuleFromTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes traffic classification rules from a traffic marking policy.
     *
     * @remarks
     * ### Precautions
     * The **RemoveTraficMatchRuleFromTrafficMarkingPolicy** operation is deprecated and will be discontinued. To delete traffic classification rules from a traffic marking policy, use the [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](https://help.aliyun.com/document_detail/452726.html) operation. This API documentation is no longer maintained.
     *
     * @deprecated openAPI RemoveTraficMatchRuleFromTrafficMarkingPolicy is deprecated, please use Cbn::2017-09-12::RemoveTrafficMatchRuleFromTrafficMarkingPolicy instead
     *
     * @param request - RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse
     *
     * @param RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse
     */
    public function removeTraficMatchRuleFromTrafficMarkingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkRuleIds) {
            @$query['TrafficMarkRuleIds'] = $request->trafficMarkRuleIds;
        }

        if (null !== $request->trafficMarkingPolicyId) {
            @$query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveTraficMatchRuleFromTrafficMarkingPolicy',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Deletes traffic classification rules from a traffic marking policy.
     *
     * @remarks
     * ### Precautions
     * The **RemoveTraficMatchRuleFromTrafficMarkingPolicy** operation is deprecated and will be discontinued. To delete traffic classification rules from a traffic marking policy, use the [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](https://help.aliyun.com/document_detail/452726.html) operation. This API documentation is no longer maintained.
     *
     * @deprecated openAPI RemoveTraficMatchRuleFromTrafficMarkingPolicy is deprecated, please use Cbn::2017-09-12::RemoveTrafficMatchRuleFromTrafficMarkingPolicy instead
     *
     * @param request - RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest
     *
     * @returns RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse
     *
     * @param RemoveTraficMatchRuleFromTrafficMarkingPolicyRequest $request
     *
     * @return RemoveTraficMatchRuleFromTrafficMarkingPolicyResponse
     */
    public function removeTraficMatchRuleFromTrafficMarkingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTraficMatchRuleFromTrafficMarkingPolicyWithOptions($request, $runtime);
    }

    /**
     * Replaces the transit router route table associated with a network instance connection.
     *
     * @remarks
     * - Only network instance connections under an Enterprise Edition transit router support changing the associated transit router route table.
     * - **ReplaceTransitRouterRouteTableAssociation** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the transit router route table associated with the network instance connection has not been replaced yet. The replacement task is still running in the background. You can call **ListTransitRouterRouteTableAssociations** to query the association forwarding status between the network instance connection and the new transit router route table.
     *     - If the association forwarding status is **Replacing**, the network instance connection is changing the associated transit router route table. In this state, you can only query the association forwarding relationship between the network instance connection and the transit router route table. You cannot perform other operations.
     *     - If the association forwarding status is **Active**, the network instance connection has successfully changed the associated transit router route table.
     *
     * @param request - ReplaceTransitRouterRouteTableAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceTransitRouterRouteTableAssociationResponse
     *
     * @param ReplaceTransitRouterRouteTableAssociationRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return ReplaceTransitRouterRouteTableAssociationResponse
     */
    public function replaceTransitRouterRouteTableAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReplaceTransitRouterRouteTableAssociation',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceTransitRouterRouteTableAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replaces the transit router route table associated with a network instance connection.
     *
     * @remarks
     * - Only network instance connections under an Enterprise Edition transit router support changing the associated transit router route table.
     * - **ReplaceTransitRouterRouteTableAssociation** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the transit router route table associated with the network instance connection has not been replaced yet. The replacement task is still running in the background. You can call **ListTransitRouterRouteTableAssociations** to query the association forwarding status between the network instance connection and the new transit router route table.
     *     - If the association forwarding status is **Replacing**, the network instance connection is changing the associated transit router route table. In this state, you can only query the association forwarding relationship between the network instance connection and the transit router route table. You cannot perform other operations.
     *     - If the association forwarding status is **Active**, the network instance connection has successfully changed the associated transit router route table.
     *
     * @param request - ReplaceTransitRouterRouteTableAssociationRequest
     *
     * @returns ReplaceTransitRouterRouteTableAssociationResponse
     *
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
     * Configures a cloud service to add access configurations for on-premises networks by calling the ResolveAndRouteServiceInCen operation.
     *
     * @remarks
     * Cloud services refer to Alibaba Cloud services that use the 100.64.0.0/10 CIDR block, such as Object Storage Service (OSS), Simple Log Service (SLS), and Data Transmission Service (DTS). If your on-premises network needs to access cloud services, you must load the Virtual Border Router (VBR) instance or Cloud Connect Network (CCN) instance associated with your on-premises network to a Cloud Enterprise Network (CEN) instance. You must also load a VPC-connected instance in the region where the cloud service resides to the same CEN instance. After loading, your on-premises network can access the VPC-connected instance in the region of the cloud service through CEN, and then access the cloud service through the VPC by forwarding traffic. The CEN handles the routing accordingly.
     * - Limits: This operation applies only to Basic Edition transit routers. On-premises networks associated with VBR instances can access only cloud services in the same region through CEN.
     *     For example, if the cloud service resides in the China (Beijing) region, only on-premises networks associated with VBR instances in the China (Beijing) region can access the cloud service.
     * - The **ResolveAndRouteServiceInCen** operation is asynchronous. After you send a request, the system returns a **RequestId** but the cloud service configuration is not yet complete. The background node for adding the configuration continues to run. You can invoke the **DescribeRouteServicesInCen** operation to query the status of the cloud service.
     *     - If the cloud service is in the **Creating** state, the cloud service configuration is being added. In this state, you can only execute a query on the cloud service configuration and cannot execute other operations.
     *     - If the cloud service is in the **Active** state, the cloud service configuration is added.
     *     - If the cloud service is in the **Failed** state, the cloud service configuration failed to be added.
     * ### Before you begin
     * Before you invoke the ResolveAndRouteServiceInCen operation, make sure that the following conditions are met:
     * - The VBR or CCN instance with network connectivity to your on-premises network is loaded to the CEN instance.
     * - A VPC-connected instance in the region where the cloud service resides is loaded to the CEN instance. For more information, see [AttachCenChildInstance](https://help.aliyun.com/document_detail/65902.html).
     *
     * @param request - ResolveAndRouteServiceInCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResolveAndRouteServiceInCenResponse
     *
     * @param ResolveAndRouteServiceInCenRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ResolveAndRouteServiceInCenResponse
     */
    public function resolveAndRouteServiceInCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessRegionIds) {
            @$query['AccessRegionIds'] = $request->accessRegionIds;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->hostRegionId) {
            @$query['HostRegionId'] = $request->hostRegionId;
        }

        if (null !== $request->hostVpcId) {
            @$query['HostVpcId'] = $request->hostVpcId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResolveAndRouteServiceInCen',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResolveAndRouteServiceInCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a cloud service to add access configurations for on-premises networks by calling the ResolveAndRouteServiceInCen operation.
     *
     * @remarks
     * Cloud services refer to Alibaba Cloud services that use the 100.64.0.0/10 CIDR block, such as Object Storage Service (OSS), Simple Log Service (SLS), and Data Transmission Service (DTS). If your on-premises network needs to access cloud services, you must load the Virtual Border Router (VBR) instance or Cloud Connect Network (CCN) instance associated with your on-premises network to a Cloud Enterprise Network (CEN) instance. You must also load a VPC-connected instance in the region where the cloud service resides to the same CEN instance. After loading, your on-premises network can access the VPC-connected instance in the region of the cloud service through CEN, and then access the cloud service through the VPC by forwarding traffic. The CEN handles the routing accordingly.
     * - Limits: This operation applies only to Basic Edition transit routers. On-premises networks associated with VBR instances can access only cloud services in the same region through CEN.
     *     For example, if the cloud service resides in the China (Beijing) region, only on-premises networks associated with VBR instances in the China (Beijing) region can access the cloud service.
     * - The **ResolveAndRouteServiceInCen** operation is asynchronous. After you send a request, the system returns a **RequestId** but the cloud service configuration is not yet complete. The background node for adding the configuration continues to run. You can invoke the **DescribeRouteServicesInCen** operation to query the status of the cloud service.
     *     - If the cloud service is in the **Creating** state, the cloud service configuration is being added. In this state, you can only execute a query on the cloud service configuration and cannot execute other operations.
     *     - If the cloud service is in the **Active** state, the cloud service configuration is added.
     *     - If the cloud service is in the **Failed** state, the cloud service configuration failed to be added.
     * ### Before you begin
     * Before you invoke the ResolveAndRouteServiceInCen operation, make sure that the following conditions are met:
     * - The VBR or CCN instance with network connectivity to your on-premises network is loaded to the CEN instance.
     * - A VPC-connected instance in the region where the cloud service resides is loaded to the CEN instance. For more information, see [AttachCenChildInstance](https://help.aliyun.com/document_detail/65902.html).
     *
     * @param request - ResolveAndRouteServiceInCenRequest
     *
     * @returns ResolveAndRouteServiceInCenResponse
     *
     * @param ResolveAndRouteServiceInCenRequest $request
     *
     * @return ResolveAndRouteServiceInCenResponse
     */
    public function resolveAndRouteServiceInCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resolveAndRouteServiceInCenWithOptions($request, $runtime);
    }

    /**
     * Revokes the permissions that allow a transit router to connect to a cross-account network instance.
     *
     * @remarks
     * The `RevokeInstanceFromTransitRouter` operation only supports revoking the permissions that allow a transit router to connect to cross-account Virtual Private Cloud (VPC) instances, Virtual Border Router (VBR) instances, IPsec connections, and Express Connect Router (ECR) instances.
     * To revoke the permissions that allow a transit router to connect to a cross-account Cloud Connect Network (CCN) instance, call the [RevokeInstanceFromCbn](https://help.aliyun.com/document_detail/126142.html) operation.
     * ### Before you begin
     * Before you call the `RevokeInstanceFromTransitRouter` operation, make sure that the connection between the transit router and the VPC-connected instance is deleted.
     * - To delete the connection between an Enterprise Edition transit router and a VPC instance, see [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html).
     * - To delete the connection between an Enterprise Edition transit router and a VBR instance, see [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html).
     * - To delete the connection between an Enterprise Edition transit router and an IPsec connection, see [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html).
     * - To delete the connection between an Enterprise Edition transit router and an ECR instance, see [DeleteTransitRouterEcrAttachment](https://help.aliyun.com/document_detail/443992.html).
     * - To delete the connection between a Basic Edition transit router and a VPC-connected instance, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     *
     * @param request - RevokeInstanceFromTransitRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeInstanceFromTransitRouterResponse
     *
     * @param RevokeInstanceFromTransitRouterRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RevokeInstanceFromTransitRouterResponse
     */
    public function revokeInstanceFromTransitRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenOwnerId) {
            @$query['CenOwnerId'] = $request->cenOwnerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeInstanceFromTransitRouter',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeInstanceFromTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the permissions that allow a transit router to connect to a cross-account network instance.
     *
     * @remarks
     * The `RevokeInstanceFromTransitRouter` operation only supports revoking the permissions that allow a transit router to connect to cross-account Virtual Private Cloud (VPC) instances, Virtual Border Router (VBR) instances, IPsec connections, and Express Connect Router (ECR) instances.
     * To revoke the permissions that allow a transit router to connect to a cross-account Cloud Connect Network (CCN) instance, call the [RevokeInstanceFromCbn](https://help.aliyun.com/document_detail/126142.html) operation.
     * ### Before you begin
     * Before you call the `RevokeInstanceFromTransitRouter` operation, make sure that the connection between the transit router and the VPC-connected instance is deleted.
     * - To delete the connection between an Enterprise Edition transit router and a VPC instance, see [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html).
     * - To delete the connection between an Enterprise Edition transit router and a VBR instance, see [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html).
     * - To delete the connection between an Enterprise Edition transit router and an IPsec connection, see [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html).
     * - To delete the connection between an Enterprise Edition transit router and an ECR instance, see [DeleteTransitRouterEcrAttachment](https://help.aliyun.com/document_detail/443992.html).
     * - To delete the connection between a Basic Edition transit router and a VPC-connected instance, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     *
     * @param request - RevokeInstanceFromTransitRouterRequest
     *
     * @returns RevokeInstanceFromTransitRouterResponse
     *
     * @param RevokeInstanceFromTransitRouterRequest $request
     *
     * @return RevokeInstanceFromTransitRouterResponse
     */
    public function revokeInstanceFromTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeInstanceFromTransitRouterWithOptions($request, $runtime);
    }

    /**
     * Configures the PrivateZone service by calling the RoutePrivateZoneInCenToVpc operation.
     *
     * @remarks
     * PrivateZone is a private DNS resolution and management service based on the Alibaba Cloud Virtual Private Cloud (VPC) environment. After a Virtual Border Router (VBR) instance or a Cloud Connect Network (CCN) instance is attached to a Cloud Enterprise Network (CEN) instance, the associated on-premises network can access the PrivateZone service through CEN.
     * - On-premises networks associated with VBR instances and CCN instances can access only the PrivateZone service in the same region.
     *     For example, if the PrivateZone service is deployed in the China (Beijing) region, only on-premises networks associated with VBR instances in the China (Beijing) region and CCN instances in the Chinese mainland can access the PrivateZone service.
     * - The **RoutePrivateZoneInCenToVpc** operation is asynchronous. After you send a request, the system returns a **RequestId** but the PrivateZone service configuration is not complete. The configuration task continues to run in the background. You can call the **DescribeCenPrivateZoneRoutes** operation to query the status of the PrivateZone service.
     *     - If the PrivateZone service is in the **Creating** state, the configuration is being added. In this state, you can only query the PrivateZone service configuration. You cannot perform other operations.
     *     - If the PrivateZone service is in the **Active** state, the configuration is complete.
     *     - If the PrivateZone service is in the **Failed** state, the configuration failed to be added.
     * #### Before you begin
     * Before you invoke the **RoutePrivateZoneInCenToVpc** operation, make sure that the following conditions are met:
     * - The PrivateZone service is deployed. For more information, see [Alibaba Cloud DNS PrivateZone Getting Started](https://help.aliyun.com/document_detail/64627.html).
     * - The VPC-connected instance associated with the PrivateZone service, and the VBR instance or CCN instance in the access region are attached to the same CEN instance. For more information, see [AttachCenChildInstance](https://help.aliyun.com/document_detail/65902.html).
     * - If your on-premises network uses a CCN instance to connect to Alibaba Cloud, and the CCN instance belongs to a different account from the VPC-connected instance or the CEN instance, complete the authorization for the CCN instance first. For more information, see [Cloud Connect Network authorization](https://help.aliyun.com/document_detail/106674.html).
     *
     * @param request - RoutePrivateZoneInCenToVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RoutePrivateZoneInCenToVpcResponse
     *
     * @param RoutePrivateZoneInCenToVpcRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RoutePrivateZoneInCenToVpcResponse
     */
    public function routePrivateZoneInCenToVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessRegionId) {
            @$query['AccessRegionId'] = $request->accessRegionId;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->hostRegionId) {
            @$query['HostRegionId'] = $request->hostRegionId;
        }

        if (null !== $request->hostVpcId) {
            @$query['HostVpcId'] = $request->hostVpcId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RoutePrivateZoneInCenToVpc',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RoutePrivateZoneInCenToVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the PrivateZone service by calling the RoutePrivateZoneInCenToVpc operation.
     *
     * @remarks
     * PrivateZone is a private DNS resolution and management service based on the Alibaba Cloud Virtual Private Cloud (VPC) environment. After a Virtual Border Router (VBR) instance or a Cloud Connect Network (CCN) instance is attached to a Cloud Enterprise Network (CEN) instance, the associated on-premises network can access the PrivateZone service through CEN.
     * - On-premises networks associated with VBR instances and CCN instances can access only the PrivateZone service in the same region.
     *     For example, if the PrivateZone service is deployed in the China (Beijing) region, only on-premises networks associated with VBR instances in the China (Beijing) region and CCN instances in the Chinese mainland can access the PrivateZone service.
     * - The **RoutePrivateZoneInCenToVpc** operation is asynchronous. After you send a request, the system returns a **RequestId** but the PrivateZone service configuration is not complete. The configuration task continues to run in the background. You can call the **DescribeCenPrivateZoneRoutes** operation to query the status of the PrivateZone service.
     *     - If the PrivateZone service is in the **Creating** state, the configuration is being added. In this state, you can only query the PrivateZone service configuration. You cannot perform other operations.
     *     - If the PrivateZone service is in the **Active** state, the configuration is complete.
     *     - If the PrivateZone service is in the **Failed** state, the configuration failed to be added.
     * #### Before you begin
     * Before you invoke the **RoutePrivateZoneInCenToVpc** operation, make sure that the following conditions are met:
     * - The PrivateZone service is deployed. For more information, see [Alibaba Cloud DNS PrivateZone Getting Started](https://help.aliyun.com/document_detail/64627.html).
     * - The VPC-connected instance associated with the PrivateZone service, and the VBR instance or CCN instance in the access region are attached to the same CEN instance. For more information, see [AttachCenChildInstance](https://help.aliyun.com/document_detail/65902.html).
     * - If your on-premises network uses a CCN instance to connect to Alibaba Cloud, and the CCN instance belongs to a different account from the VPC-connected instance or the CEN instance, complete the authorization for the CCN instance first. For more information, see [Cloud Connect Network authorization](https://help.aliyun.com/document_detail/106674.html).
     *
     * @param request - RoutePrivateZoneInCenToVpcRequest
     *
     * @returns RoutePrivateZoneInCenToVpcResponse
     *
     * @param RoutePrivateZoneInCenToVpcRequest $request
     *
     * @return RoutePrivateZoneInCenToVpcResponse
     */
    public function routePrivateZoneInCenToVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->routePrivateZoneInCenToVpcWithOptions($request, $runtime);
    }

    /**
     * Sets, modifies, or deletes the inter-region bandwidth between two regions in a bandwidth package of a Basic Edition transit router.
     *
     * @remarks
     * This operation supports setting the inter-region bandwidth between two regions only in bandwidth packages of Basic Edition transit routers.
     * ### Before you begin
     * A bandwidth package instance is already associated with the target Cloud Enterprise Network (CEN) instance. For more information, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html) and [AssociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65934.html).
     * You can call **SetCenInterRegionBandwidthLimit** to set, modify, or delete the inter-region bandwidth:
     * - If **BandwidthLimit** is not 0, the inter-region bandwidth is set or modified.
     * - If **BandwidthLimit** is 0, the inter-region bandwidth is deleted.
     * ### Settings
     * - The maximum inter-region bandwidth cannot exceed the peak bandwidth of the bandwidth package instance to which it belongs.
     * - The total inter-region bandwidth under a bandwidth package instance cannot exceed the peak bandwidth of that bandwidth package instance.
     * - If the bandwidth multiplexing feature is enabled for the inter-region connection, modifying the inter-region bandwidth is not supported.
     * - The **SetCenInterRegionBandwidthLimit** operation supports setting, modifying, or deleting inter-region bandwidth only for Basic Edition transit routers.
     *     To set, modify, or delete inter-region bandwidth for Enterprise Edition transit routers, see [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html), [UpdateTransitRouterPeerAttachmentAttribute](https://help.aliyun.com/document_detail/261229.html), and [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html).
     *
     * @param request - SetCenInterRegionBandwidthLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCenInterRegionBandwidthLimitResponse
     *
     * @param SetCenInterRegionBandwidthLimitRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetCenInterRegionBandwidthLimitResponse
     */
    public function setCenInterRegionBandwidthLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidthLimit) {
            @$query['BandwidthLimit'] = $request->bandwidthLimit;
        }

        if (null !== $request->bandwidthType) {
            @$query['BandwidthType'] = $request->bandwidthType;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->localRegionId) {
            @$query['LocalRegionId'] = $request->localRegionId;
        }

        if (null !== $request->oppositeRegionId) {
            @$query['OppositeRegionId'] = $request->oppositeRegionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCenInterRegionBandwidthLimit',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCenInterRegionBandwidthLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets, modifies, or deletes the inter-region bandwidth between two regions in a bandwidth package of a Basic Edition transit router.
     *
     * @remarks
     * This operation supports setting the inter-region bandwidth between two regions only in bandwidth packages of Basic Edition transit routers.
     * ### Before you begin
     * A bandwidth package instance is already associated with the target Cloud Enterprise Network (CEN) instance. For more information, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html) and [AssociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65934.html).
     * You can call **SetCenInterRegionBandwidthLimit** to set, modify, or delete the inter-region bandwidth:
     * - If **BandwidthLimit** is not 0, the inter-region bandwidth is set or modified.
     * - If **BandwidthLimit** is 0, the inter-region bandwidth is deleted.
     * ### Settings
     * - The maximum inter-region bandwidth cannot exceed the peak bandwidth of the bandwidth package instance to which it belongs.
     * - The total inter-region bandwidth under a bandwidth package instance cannot exceed the peak bandwidth of that bandwidth package instance.
     * - If the bandwidth multiplexing feature is enabled for the inter-region connection, modifying the inter-region bandwidth is not supported.
     * - The **SetCenInterRegionBandwidthLimit** operation supports setting, modifying, or deleting inter-region bandwidth only for Basic Edition transit routers.
     *     To set, modify, or delete inter-region bandwidth for Enterprise Edition transit routers, see [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html), [UpdateTransitRouterPeerAttachmentAttribute](https://help.aliyun.com/document_detail/261229.html), and [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html).
     *
     * @param request - SetCenInterRegionBandwidthLimitRequest
     *
     * @returns SetCenInterRegionBandwidthLimitResponse
     *
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
     * Creates and attaches tags to resources.
     *
     * @remarks
     * - A tag consists of a tag key and a tag value. Both the tag key and tag value are required when you add a tag.
     * - If you want to add multiple tags to a Cloud Enterprise Network (CEN) instance, the tag keys of the tags must be unique within the instance.
     * - You can attach up to 20 tags to a CEN instance.
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
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2017-09-12',
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
     * Creates and attaches tags to resources.
     *
     * @remarks
     * - A tag consists of a tag key and a tag value. Both the tag key and tag value are required when you add a tag.
     * - If you want to add multiple tags to a Cloud Enterprise Network (CEN) instance, the tag keys of the tags must be unique within the instance.
     * - You can attach up to 20 tags to a CEN instance.
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
     * Calls the TempUpgradeCenBandwidthPackageSpec operation to temporarily upgrade the specifications of a subscription bandwidth plan for Cloud Enterprise Network (CEN).
     *
     * @remarks
     * Subscription bandwidth plans support the temporary upgrade feature. You can use this feature to increase the bandwidth value of a bandwidth plan within a specified period to flexibly handle business bandwidth fluctuations.
     * The minimum interval for a temporary upgrade is 3 hours. After the payment is completed, the bandwidth is upgraded immediately without service interruptions.
     * > After a temporary upgrade expires, the subscription bandwidth plan reverts to the original peak bandwidth. If the service traffic on the instance exceeds the original peak bandwidth limit, the traffic may be dropped due to throttling. Plan the expiration time of the temporary upgrade properly and make sure that the peak bandwidth matches your business requirements.
     * - The temporary upgrade feature is not available by default. To use this feature, contact your account manager.
     * - Pay-as-you-go bandwidth plans and expired subscription bandwidth plans do not support the temporary upgrade feature.
     * - The **TempUpgradeCenBandwidthPackageSpec** operation is asynchronous. After you call this operation, the system returns a **RequestId** but the bandwidth plan is not yet upgraded. The upgrade task continues to run in the background. You can call the **DescribeCenBandwidthPackages** operation to query the specifications of the bandwidth plan. If the specifications meet your expectations, the upgrade is complete.
     *
     * @param request - TempUpgradeCenBandwidthPackageSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TempUpgradeCenBandwidthPackageSpecResponse
     *
     * @param TempUpgradeCenBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return TempUpgradeCenBandwidthPackageSpecResponse
     */
    public function tempUpgradeCenBandwidthPackageSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->cenBandwidthPackageId) {
            @$query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TempUpgradeCenBandwidthPackageSpec',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TempUpgradeCenBandwidthPackageSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the TempUpgradeCenBandwidthPackageSpec operation to temporarily upgrade the specifications of a subscription bandwidth plan for Cloud Enterprise Network (CEN).
     *
     * @remarks
     * Subscription bandwidth plans support the temporary upgrade feature. You can use this feature to increase the bandwidth value of a bandwidth plan within a specified period to flexibly handle business bandwidth fluctuations.
     * The minimum interval for a temporary upgrade is 3 hours. After the payment is completed, the bandwidth is upgraded immediately without service interruptions.
     * > After a temporary upgrade expires, the subscription bandwidth plan reverts to the original peak bandwidth. If the service traffic on the instance exceeds the original peak bandwidth limit, the traffic may be dropped due to throttling. Plan the expiration time of the temporary upgrade properly and make sure that the peak bandwidth matches your business requirements.
     * - The temporary upgrade feature is not available by default. To use this feature, contact your account manager.
     * - Pay-as-you-go bandwidth plans and expired subscription bandwidth plans do not support the temporary upgrade feature.
     * - The **TempUpgradeCenBandwidthPackageSpec** operation is asynchronous. After you call this operation, the system returns a **RequestId** but the bandwidth plan is not yet upgraded. The upgrade task continues to run in the background. You can call the **DescribeCenBandwidthPackages** operation to query the specifications of the bandwidth plan. If the specifications meet your expectations, the upgrade is complete.
     *
     * @param request - TempUpgradeCenBandwidthPackageSpecRequest
     *
     * @returns TempUpgradeCenBandwidthPackageSpecResponse
     *
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
     * Disassociates a bandwidth package from a Cloud Enterprise Network (CEN) instance. After the disassociation, the bandwidth package can be associated with another CEN instance.
     *
     * @remarks
     * Disassociates a bandwidth package from a Cloud Enterprise Network (CEN) instance. Before you call this operation, make sure that no inter-region bandwidth is configured for the bandwidth package. You can call [DescribeCenInterRegionBandwidthLimits](https://help.aliyun.com/document_detail/468275.html) to query inter-region bandwidth, and then call [SetCenInterRegionBandwidthLimit](https://help.aliyun.com/document_detail/65942.html) to set BandwidthLimit to 0 to delete the configured inter-region bandwidth.
     *
     * @param request - UnassociateCenBandwidthPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnassociateCenBandwidthPackageResponse
     *
     * @param UnassociateCenBandwidthPackageRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UnassociateCenBandwidthPackageResponse
     */
    public function unassociateCenBandwidthPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenBandwidthPackageId) {
            @$query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnassociateCenBandwidthPackage',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnassociateCenBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a bandwidth package from a Cloud Enterprise Network (CEN) instance. After the disassociation, the bandwidth package can be associated with another CEN instance.
     *
     * @remarks
     * Disassociates a bandwidth package from a Cloud Enterprise Network (CEN) instance. Before you call this operation, make sure that no inter-region bandwidth is configured for the bandwidth package. You can call [DescribeCenInterRegionBandwidthLimits](https://help.aliyun.com/document_detail/468275.html) to query inter-region bandwidth, and then call [SetCenInterRegionBandwidthLimit](https://help.aliyun.com/document_detail/65942.html) to set BandwidthLimit to 0 to delete the configured inter-region bandwidth.
     *
     * @param request - UnassociateCenBandwidthPackageRequest
     *
     * @returns UnassociateCenBandwidthPackageResponse
     *
     * @param UnassociateCenBandwidthPackageRequest $request
     *
     * @return UnassociateCenBandwidthPackageResponse
     */
    public function unassociateCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * Deletes a PrivateZone service configuration by calling the UnroutePrivateZoneInCenToVpc operation.
     *
     * @remarks
     * *UnroutePrivateZoneInCenToVpc** is an asynchronous operation. After you call this operation, the system returns a **RequestId** but the PrivateZone service configuration is not immediately deleted. The deletion task continues to run in the background. You can call the **DescribeCenPrivateZoneRoutes** operation to query the status of the PrivateZone service.
     * - If the PrivateZone service is in the **Deleting** state, the PrivateZone service configuration is being deleted. In this state, you can only query the PrivateZone service configuration. You cannot perform other operations.
     * - If the specified PrivateZone service configuration cannot be found, the deletion is complete.
     * If a PrivateZone configuration exists with the access region set to a Cloud Connect Network region, delete the PrivateZone configuration for the Cloud Connect Network region first, and then delete the PrivateZone configurations for other access regions.
     *
     * @param request - UnroutePrivateZoneInCenToVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnroutePrivateZoneInCenToVpcResponse
     *
     * @param UnroutePrivateZoneInCenToVpcRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnroutePrivateZoneInCenToVpcResponse
     */
    public function unroutePrivateZoneInCenToVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessRegionId) {
            @$query['AccessRegionId'] = $request->accessRegionId;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnroutePrivateZoneInCenToVpc',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnroutePrivateZoneInCenToVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a PrivateZone service configuration by calling the UnroutePrivateZoneInCenToVpc operation.
     *
     * @remarks
     * *UnroutePrivateZoneInCenToVpc** is an asynchronous operation. After you call this operation, the system returns a **RequestId** but the PrivateZone service configuration is not immediately deleted. The deletion task continues to run in the background. You can call the **DescribeCenPrivateZoneRoutes** operation to query the status of the PrivateZone service.
     * - If the PrivateZone service is in the **Deleting** state, the PrivateZone service configuration is being deleted. In this state, you can only query the PrivateZone service configuration. You cannot perform other operations.
     * - If the specified PrivateZone service configuration cannot be found, the deletion is complete.
     * If a PrivateZone configuration exists with the access region set to a Cloud Connect Network region, delete the PrivateZone configuration for the Cloud Connect Network region first, and then delete the PrivateZone configurations for other access regions.
     *
     * @param request - UnroutePrivateZoneInCenToVpcRequest
     *
     * @returns UnroutePrivateZoneInCenToVpcResponse
     *
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
     * Remove tags from resources.
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

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2017-09-12',
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
     * Remove tags from resources.
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
     * Modifies the name and description of a traffic scheduling policy.
     *
     * @param request - UpdateCenInterRegionTrafficQosPolicyAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCenInterRegionTrafficQosPolicyAttributeResponse
     *
     * @param UpdateCenInterRegionTrafficQosPolicyAttributeRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return UpdateCenInterRegionTrafficQosPolicyAttributeResponse
     */
    public function updateCenInterRegionTrafficQosPolicyAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficQosPolicyDescription) {
            @$query['TrafficQosPolicyDescription'] = $request->trafficQosPolicyDescription;
        }

        if (null !== $request->trafficQosPolicyId) {
            @$query['TrafficQosPolicyId'] = $request->trafficQosPolicyId;
        }

        if (null !== $request->trafficQosPolicyName) {
            @$query['TrafficQosPolicyName'] = $request->trafficQosPolicyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCenInterRegionTrafficQosPolicyAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCenInterRegionTrafficQosPolicyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a traffic scheduling policy.
     *
     * @param request - UpdateCenInterRegionTrafficQosPolicyAttributeRequest
     *
     * @returns UpdateCenInterRegionTrafficQosPolicyAttributeResponse
     *
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
     * Calls the UpdateCenInterRegionTrafficQosQueueAttribute operation to modify the name, description, cross-region bandwidth, and DSCP value configurations of a queue in a traffic scheduling policy.
     *
     * @param request - UpdateCenInterRegionTrafficQosQueueAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCenInterRegionTrafficQosQueueAttributeResponse
     *
     * @param UpdateCenInterRegionTrafficQosQueueAttributeRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return UpdateCenInterRegionTrafficQosQueueAttributeResponse
     */
    public function updateCenInterRegionTrafficQosQueueAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->dscps) {
            @$query['Dscps'] = $request->dscps;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qosQueueDescription) {
            @$query['QosQueueDescription'] = $request->qosQueueDescription;
        }

        if (null !== $request->qosQueueId) {
            @$query['QosQueueId'] = $request->qosQueueId;
        }

        if (null !== $request->qosQueueName) {
            @$query['QosQueueName'] = $request->qosQueueName;
        }

        if (null !== $request->remainBandwidthPercent) {
            @$query['RemainBandwidthPercent'] = $request->remainBandwidthPercent;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCenInterRegionTrafficQosQueueAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCenInterRegionTrafficQosQueueAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the UpdateCenInterRegionTrafficQosQueueAttribute operation to modify the name, description, cross-region bandwidth, and DSCP value configurations of a queue in a traffic scheduling policy.
     *
     * @param request - UpdateCenInterRegionTrafficQosQueueAttributeRequest
     *
     * @returns UpdateCenInterRegionTrafficQosQueueAttributeResponse
     *
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
     * Modifies the name, description, and traffic classification rules of a traffic marking policy.
     *
     * @param request - UpdateTrafficMarkingPolicyAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTrafficMarkingPolicyAttributeResponse
     *
     * @param UpdateTrafficMarkingPolicyAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateTrafficMarkingPolicyAttributeResponse
     */
    public function updateTrafficMarkingPolicyAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addTrafficMatchRules) {
            @$query['AddTrafficMatchRules'] = $request->addTrafficMatchRules;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deleteTrafficMatchRules) {
            @$query['DeleteTrafficMatchRules'] = $request->deleteTrafficMatchRules;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trafficMarkingPolicyDescription) {
            @$query['TrafficMarkingPolicyDescription'] = $request->trafficMarkingPolicyDescription;
        }

        if (null !== $request->trafficMarkingPolicyId) {
            @$query['TrafficMarkingPolicyId'] = $request->trafficMarkingPolicyId;
        }

        if (null !== $request->trafficMarkingPolicyName) {
            @$query['TrafficMarkingPolicyName'] = $request->trafficMarkingPolicyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTrafficMarkingPolicyAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTrafficMarkingPolicyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, and traffic classification rules of a traffic marking policy.
     *
     * @param request - UpdateTrafficMarkingPolicyAttributeRequest
     *
     * @returns UpdateTrafficMarkingPolicyAttributeResponse
     *
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
     * Modifies the name and description of a transit router instance.
     *
     * @remarks
     * *UpdateTransitRouter** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the modification of the transit router instance is not yet complete. The modification task continues to run in the background. You can call the **ListTransitRouters** operation to query the status of the transit router instance.
     * - If the transit router instance is in the **Modifying** state, the transit router instance is being modified. In this state, you can only query the transit router instance but cannot perform other operations on it.
     * - If the transit router instance is in the **Active** state, the transit router instance has been modified.
     *
     * @param request - UpdateTransitRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterResponse
     *
     * @param UpdateTransitRouterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateTransitRouterResponse
     */
    public function updateTransitRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->transitRouterDescription) {
            @$query['TransitRouterDescription'] = $request->transitRouterDescription;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterName) {
            @$query['TransitRouterName'] = $request->transitRouterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouter',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a transit router instance.
     *
     * @remarks
     * *UpdateTransitRouter** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the modification of the transit router instance is not yet complete. The modification task continues to run in the background. You can call the **ListTransitRouters** operation to query the status of the transit router instance.
     * - If the transit router instance is in the **Modifying** state, the transit router instance is being modified. In this state, you can only query the transit router instance but cannot perform other operations on it.
     * - If the transit router instance is in the **Active** state, the transit router instance has been modified.
     *
     * @param request - UpdateTransitRouterRequest
     *
     * @returns UpdateTransitRouterResponse
     *
     * @param UpdateTransitRouterRequest $request
     *
     * @return UpdateTransitRouterResponse
     */
    public function updateTransitRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterWithOptions($request, $runtime);
    }

    /**
     * Calls the UpdateTransitRouterEcrAttachmentAttribute operation to modify the name and description of an Express Connect Router (ECR) connection under an Enterprise Edition transit router.
     *
     * @remarks
     * UpdateTransitRouterEcrAttachmentAttribute is an asynchronous operation. The system returns a RequestId immediately, but the ECR connection has not been modified yet because the modification task is still running in the background. You can call the ListTransitRouterEcrAttachments operation to query the status of the ECR connection.
     * If the ECR connection is in the Modifying state, the ECR connection is being modified. In this state, you can only query the ECR connection but cannot perform other operations on it.
     * If the ECR connection is in the Attached state, the ECR connection has been modified.
     *
     * @param request - UpdateTransitRouterEcrAttachmentAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterEcrAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterEcrAttachmentAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return UpdateTransitRouterEcrAttachmentAttributeResponse
     */
    public function updateTransitRouterEcrAttachmentAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouterEcrAttachmentAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterEcrAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the UpdateTransitRouterEcrAttachmentAttribute operation to modify the name and description of an Express Connect Router (ECR) connection under an Enterprise Edition transit router.
     *
     * @remarks
     * UpdateTransitRouterEcrAttachmentAttribute is an asynchronous operation. The system returns a RequestId immediately, but the ECR connection has not been modified yet because the modification task is still running in the background. You can call the ListTransitRouterEcrAttachments operation to query the status of the ECR connection.
     * If the ECR connection is in the Modifying state, the ECR connection is being modified. In this state, you can only query the ECR connection but cannot perform other operations on it.
     * If the ECR connection is in the Attached state, the ECR connection has been modified.
     *
     * @param request - UpdateTransitRouterEcrAttachmentAttributeRequest
     *
     * @returns UpdateTransitRouterEcrAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterEcrAttachmentAttributeRequest $request
     *
     * @return UpdateTransitRouterEcrAttachmentAttributeResponse
     */
    public function updateTransitRouterEcrAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterEcrAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of an inter-region connection on an Enterprise Edition transit router by calling the UpdateTransitRouterPeerAttachmentAttribute operation.
     *
     * @remarks
     * *UpdateTransitRouterPeerAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the inter-region connection is not yet modified. The modification task continues to run in the background. You can call **ListTransitRouterPeerAttachments** to query the status of the inter-region connection.
     * - If the inter-region connection is in the **Modifying** state, the inter-region connection is being modified. In this state, you can only query the inter-region connection but cannot perform other operations on it.
     * - If the inter-region connection is in the **Attached** state, the inter-region connection is modified.
     *
     * @param request - UpdateTransitRouterPeerAttachmentAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterPeerAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterPeerAttachmentAttributeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return UpdateTransitRouterPeerAttachmentAttributeResponse
     */
    public function updateTransitRouterPeerAttachmentAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPublishRouteEnabled) {
            @$query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->bandwidthType) {
            @$query['BandwidthType'] = $request->bandwidthType;
        }

        if (null !== $request->cenBandwidthPackageId) {
            @$query['CenBandwidthPackageId'] = $request->cenBandwidthPackageId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->defaultLinkType) {
            @$query['DefaultLinkType'] = $request->defaultLinkType;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouterPeerAttachmentAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterPeerAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of an inter-region connection on an Enterprise Edition transit router by calling the UpdateTransitRouterPeerAttachmentAttribute operation.
     *
     * @remarks
     * *UpdateTransitRouterPeerAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the inter-region connection is not yet modified. The modification task continues to run in the background. You can call **ListTransitRouterPeerAttachments** to query the status of the inter-region connection.
     * - If the inter-region connection is in the **Modifying** state, the inter-region connection is being modified. In this state, you can only query the inter-region connection but cannot perform other operations on it.
     * - If the inter-region connection is in the **Attached** state, the inter-region connection is modified.
     *
     * @param request - UpdateTransitRouterPeerAttachmentAttributeRequest
     *
     * @returns UpdateTransitRouterPeerAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterPeerAttachmentAttributeRequest $request
     *
     * @return UpdateTransitRouterPeerAttachmentAttributeResponse
     */
    public function updateTransitRouterPeerAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterPeerAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the name and description of a route entry in an Enterprise Edition transit router route table.
     *
     * @param request - UpdateTransitRouterRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterRouteEntryResponse
     *
     * @param UpdateTransitRouterRouteEntryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateTransitRouterRouteEntryResponse
     */
    public function updateTransitRouterRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterRouteEntryDescription) {
            @$query['TransitRouterRouteEntryDescription'] = $request->transitRouterRouteEntryDescription;
        }

        if (null !== $request->transitRouterRouteEntryId) {
            @$query['TransitRouterRouteEntryId'] = $request->transitRouterRouteEntryId;
        }

        if (null !== $request->transitRouterRouteEntryName) {
            @$query['TransitRouterRouteEntryName'] = $request->transitRouterRouteEntryName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouterRouteEntry',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a route entry in an Enterprise Edition transit router route table.
     *
     * @param request - UpdateTransitRouterRouteEntryRequest
     *
     * @returns UpdateTransitRouterRouteEntryResponse
     *
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
     * Calls the UpdateTransitRouterRouteTable operation to modify the name and description of an Enterprise Edition transit router route table and to enable or disable multi-region equal-cost multi-path (ECMP) routing.
     *
     * @param request - UpdateTransitRouterRouteTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterRouteTableResponse
     *
     * @param UpdateTransitRouterRouteTableRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateTransitRouterRouteTableResponse
     */
    public function updateTransitRouterRouteTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeTableOptions) {
            @$query['RouteTableOptions'] = $request->routeTableOptions;
        }

        if (null !== $request->transitRouterRouteTableDescription) {
            @$query['TransitRouterRouteTableDescription'] = $request->transitRouterRouteTableDescription;
        }

        if (null !== $request->transitRouterRouteTableId) {
            @$query['TransitRouterRouteTableId'] = $request->transitRouterRouteTableId;
        }

        if (null !== $request->transitRouterRouteTableName) {
            @$query['TransitRouterRouteTableName'] = $request->transitRouterRouteTableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouterRouteTable',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the UpdateTransitRouterRouteTable operation to modify the name and description of an Enterprise Edition transit router route table and to enable or disable multi-region equal-cost multi-path (ECMP) routing.
     *
     * @param request - UpdateTransitRouterRouteTableRequest
     *
     * @returns UpdateTransitRouterRouteTableResponse
     *
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
     * Modifies the name, description, and automatic route forwarding settings of a virtual border router (VBR) connection on an Enterprise Edition transit router.
     *
     * @remarks
     * *UpdateTransitRouterVbrAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the VBR connection is not yet modified. The modification task continues to run in the background. You can call **ListTransitRouterVbrAttachments** to query the status of the VBR connection.
     * - If the VBR connection is in the **Modifying** state, the VBR connection is being modified. In this state, you can only query the VBR connection but cannot perform other operations.
     * - If the VBR connection is in the **Attached** state, the VBR connection is modified.
     *
     * @param request - UpdateTransitRouterVbrAttachmentAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterVbrAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterVbrAttachmentAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return UpdateTransitRouterVbrAttachmentAttributeResponse
     */
    public function updateTransitRouterVbrAttachmentAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPublishRouteEnabled) {
            @$query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouterVbrAttachmentAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterVbrAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, and automatic route forwarding settings of a virtual border router (VBR) connection on an Enterprise Edition transit router.
     *
     * @remarks
     * *UpdateTransitRouterVbrAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the VBR connection is not yet modified. The modification task continues to run in the background. You can call **ListTransitRouterVbrAttachments** to query the status of the VBR connection.
     * - If the VBR connection is in the **Modifying** state, the VBR connection is being modified. In this state, you can only query the VBR connection but cannot perform other operations.
     * - If the VBR connection is in the **Attached** state, the VBR connection is modified.
     *
     * @param request - UpdateTransitRouterVbrAttachmentAttributeRequest
     *
     * @returns UpdateTransitRouterVbrAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterVbrAttachmentAttributeRequest $request
     *
     * @return UpdateTransitRouterVbrAttachmentAttributeResponse
     */
    public function updateTransitRouterVbrAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterVbrAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * Invokes the UpdateTransitRouterVpcAttachmentAttribute operation to modify the name and description of a VPC connection under an Enterprise Edition transit router and specifies whether the Enterprise Edition transit router automatically publishes routing to the VPC-connected instance.
     *
     * @remarks
     * *UpdateTransitRouterVpcAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the VPC connection has not been modified. The modification task continues to run in the background. You can call **ListTransitRouterVpcAttachments** to query the status of the VPC connection.
     * - If the VPC connection is in the **Modifying** state, the VPC connection is being modified. In this state, you can only query the VPC connection but cannot perform other operations.
     * - If the VPC connection is in the **Attached** state, the VPC connection is modified.
     *
     * @param tmpReq - UpdateTransitRouterVpcAttachmentAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterVpcAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterVpcAttachmentAttributeRequest $tmpReq
     * @param RuntimeOptions                                   $runtime
     *
     * @return UpdateTransitRouterVpcAttachmentAttributeResponse
     */
    public function updateTransitRouterVpcAttachmentAttributeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTransitRouterVpcAttachmentAttributeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->options) {
            $request->optionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->options, 'Options', 'json');
        }

        if (null !== $tmpReq->transitRouterVPCAttachmentOptions) {
            $request->transitRouterVPCAttachmentOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transitRouterVPCAttachmentOptions, 'TransitRouterVPCAttachmentOptions', 'json');
        }

        $query = [];
        if (null !== $request->autoPublishRouteEnabled) {
            @$query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->optionsShrink) {
            @$query['Options'] = $request->optionsShrink;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        if (null !== $request->transitRouterVPCAttachmentOptionsShrink) {
            @$query['TransitRouterVPCAttachmentOptions'] = $request->transitRouterVPCAttachmentOptionsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouterVpcAttachmentAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterVpcAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the UpdateTransitRouterVpcAttachmentAttribute operation to modify the name and description of a VPC connection under an Enterprise Edition transit router and specifies whether the Enterprise Edition transit router automatically publishes routing to the VPC-connected instance.
     *
     * @remarks
     * *UpdateTransitRouterVpcAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId** but the VPC connection has not been modified. The modification task continues to run in the background. You can call **ListTransitRouterVpcAttachments** to query the status of the VPC connection.
     * - If the VPC connection is in the **Modifying** state, the VPC connection is being modified. In this state, you can only query the VPC connection but cannot perform other operations.
     * - If the VPC connection is in the **Attached** state, the VPC connection is modified.
     *
     * @param request - UpdateTransitRouterVpcAttachmentAttributeRequest
     *
     * @returns UpdateTransitRouterVpcAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterVpcAttachmentAttributeRequest $request
     *
     * @return UpdateTransitRouterVpcAttachmentAttributeResponse
     */
    public function updateTransitRouterVpcAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterVpcAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the zones and vSwitches associated with a virtual private cloud (VPC) connection by calling the UpdateTransitRouterVpcAttachmentZones operation.
     *
     * @remarks
     * - When you add zones and vSwitches to a VPC connection, make sure that the vSwitch has an idle IP address. During the modification procedure, the Enterprise Edition transit router creates an elastic network interfaces (ENIs) in the vSwitch (which occupies one IP address of the vSwitch) as the interface for routing traffic between the VPC-connected instance and the Enterprise Edition transit router.
     * - The **UpdateTransitRouterVpcAttachmentZones** operation is asynchronous. After you send a request, the system returns a **RequestId** but the VPC connection is not yet modified. The modification task continues to run in the background. You can invoke the **ListTransitRouterVpcAttachments** operation to query the status of the VPC connection.
     *     - If the VPC connection is in the **Modifying** state, the VPC connection is being modified. In this state, you can only query the VPC connection but cannot perform other operations.
     *     - If the VPC connection is in the **Attached** state, the VPC connection is modified.
     * - At least one zone and vSwitch mapping must be retained under a **VPC connection ID**. You cannot delete all zone and vSwitch mappings.
     *
     * @param request - UpdateTransitRouterVpcAttachmentZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterVpcAttachmentZonesResponse
     *
     * @param UpdateTransitRouterVpcAttachmentZonesRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateTransitRouterVpcAttachmentZonesResponse
     */
    public function updateTransitRouterVpcAttachmentZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addZoneMappings) {
            @$query['AddZoneMappings'] = $request->addZoneMappings;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->removeZoneMappings) {
            @$query['RemoveZoneMappings'] = $request->removeZoneMappings;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouterVpcAttachmentZones',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterVpcAttachmentZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the zones and vSwitches associated with a virtual private cloud (VPC) connection by calling the UpdateTransitRouterVpcAttachmentZones operation.
     *
     * @remarks
     * - When you add zones and vSwitches to a VPC connection, make sure that the vSwitch has an idle IP address. During the modification procedure, the Enterprise Edition transit router creates an elastic network interfaces (ENIs) in the vSwitch (which occupies one IP address of the vSwitch) as the interface for routing traffic between the VPC-connected instance and the Enterprise Edition transit router.
     * - The **UpdateTransitRouterVpcAttachmentZones** operation is asynchronous. After you send a request, the system returns a **RequestId** but the VPC connection is not yet modified. The modification task continues to run in the background. You can invoke the **ListTransitRouterVpcAttachments** operation to query the status of the VPC connection.
     *     - If the VPC connection is in the **Modifying** state, the VPC connection is being modified. In this state, you can only query the VPC connection but cannot perform other operations.
     *     - If the VPC connection is in the **Attached** state, the VPC connection is modified.
     * - At least one zone and vSwitch mapping must be retained under a **VPC connection ID**. You cannot delete all zone and vSwitch mappings.
     *
     * @param request - UpdateTransitRouterVpcAttachmentZonesRequest
     *
     * @returns UpdateTransitRouterVpcAttachmentZonesResponse
     *
     * @param UpdateTransitRouterVpcAttachmentZonesRequest $request
     *
     * @return UpdateTransitRouterVpcAttachmentZonesResponse
     */
    public function updateTransitRouterVpcAttachmentZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransitRouterVpcAttachmentZonesWithOptions($request, $runtime);
    }

    /**
     * Calls the UpdateTransitRouterVpnAttachmentAttribute operation to modify the name, description, and whether to automatically publish route entries for a VPN connection under an Enterprise Edition transit router.
     *
     * @param request - UpdateTransitRouterVpnAttachmentAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransitRouterVpnAttachmentAttributeResponse
     *
     * @param UpdateTransitRouterVpnAttachmentAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return UpdateTransitRouterVpnAttachmentAttributeResponse
     */
    public function updateTransitRouterVpnAttachmentAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPublishRouteEnabled) {
            @$query['AutoPublishRouteEnabled'] = $request->autoPublishRouteEnabled;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transitRouterAttachmentDescription) {
            @$query['TransitRouterAttachmentDescription'] = $request->transitRouterAttachmentDescription;
        }

        if (null !== $request->transitRouterAttachmentId) {
            @$query['TransitRouterAttachmentId'] = $request->transitRouterAttachmentId;
        }

        if (null !== $request->transitRouterAttachmentName) {
            @$query['TransitRouterAttachmentName'] = $request->transitRouterAttachmentName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransitRouterVpnAttachmentAttribute',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransitRouterVpnAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the UpdateTransitRouterVpnAttachmentAttribute operation to modify the name, description, and whether to automatically publish route entries for a VPN connection under an Enterprise Edition transit router.
     *
     * @param request - UpdateTransitRouterVpnAttachmentAttributeRequest
     *
     * @returns UpdateTransitRouterVpnAttachmentAttributeResponse
     *
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
     * Calls the WithdrawPublishedRouteEntries operation to withdraw routing entries that have been published from a virtual private cloud (VPC) or virtual border router (VBR) instance to Cloud Enterprise Network (CEN).
     *
     * @param request - WithdrawPublishedRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WithdrawPublishedRouteEntriesResponse
     *
     * @param WithdrawPublishedRouteEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return WithdrawPublishedRouteEntriesResponse
     */
    public function withdrawPublishedRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->childInstanceId) {
            @$query['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$query['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceRouteTableId) {
            @$query['ChildInstanceRouteTableId'] = $request->childInstanceRouteTableId;
        }

        if (null !== $request->childInstanceType) {
            @$query['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WithdrawPublishedRouteEntries',
            'version' => '2017-09-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WithdrawPublishedRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the WithdrawPublishedRouteEntries operation to withdraw routing entries that have been published from a virtual private cloud (VPC) or virtual border router (VBR) instance to Cloud Enterprise Network (CEN).
     *
     * @param request - WithdrawPublishedRouteEntriesRequest
     *
     * @returns WithdrawPublishedRouteEntriesResponse
     *
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
