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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'cbn.aliyuncs.com',
            'us-east-1' => 'cbn.aliyuncs.com',
            'na-south-1' => 'cbn.aliyuncs.com',
            'me-central-1' => 'cbn.aliyuncs.com',
            'eu-west-1' => 'cbn.aliyuncs.com',
            'eu-central-1' => 'cbn.aliyuncs.com',
            'cn-zhangjiakou' => 'cbn.aliyuncs.com',
            'cn-wulanchabu' => 'cbn.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'cbn.aliyuncs.com',
            'cn-shenzhen' => 'cbn.aliyuncs.com',
            'cn-shanghai-finance-1' => 'cbn.aliyuncs.com',
            'cn-shanghai' => 'cbn.aliyuncs.com',
            'cn-qingdao' => 'cbn.aliyuncs.com',
            'cn-north-2-gov-1' => 'cbn.aliyuncs.com',
            'cn-huhehaote' => 'cbn.aliyuncs.com',
            'cn-hongkong' => 'cbn.aliyuncs.com',
            'cn-heyuan' => 'cbn.aliyuncs.com',
            'cn-hangzhou' => 'cbn.aliyuncs.com',
            'cn-guangzhou' => 'cbn.aliyuncs.com',
            'cn-chengdu' => 'cbn.aliyuncs.com',
            'cn-beijing-finance-1' => 'cbn.aliyuncs.com',
            'cn-beijing' => 'cbn.aliyuncs.com',
            'ap-southeast-6' => 'cbn.aliyuncs.com',
            'ap-southeast-5' => 'cbn.aliyuncs.com',
            'ap-southeast-3' => 'cbn.aliyuncs.com',
            'ap-southeast-2' => 'cbn.aliyuncs.com',
            'ap-southeast-1' => 'cbn.aliyuncs.com',
            'ap-south-1' => 'cbn.aliyuncs.com',
            'ap-northeast-1' => 'cbn.aliyuncs.com',
        ];
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
     * Enables a flow log. After the flow log is enabled, the system collects traffic information about a specified resource.
     *
     * @remarks
     * - A flow log is enabled by default after creation. If the flow log was stopped, call this operation to re-enable it.
     * - `ActiveFlowLog` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   - If a flow log is in the **Modifying** state, the flow log is being enabled. In this case, you can query the flow log but cannot perform other operations.
     *   - If a flow log is in the **Active** state, the flow log is enabled.
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
     * Enables a flow log. After the flow log is enabled, the system collects traffic information about a specified resource.
     *
     * @remarks
     * - A flow log is enabled by default after creation. If the flow log was stopped, call this operation to re-enable it.
     * - `ActiveFlowLog` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   - If a flow log is in the **Modifying** state, the flow log is being enabled. In this case, you can query the flow log but cannot perform other operations.
     *   - If a flow log is in the **Active** state, the flow log is enabled.
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
     * Adds a traffic classification rule to a traffic marking policy.
     *
     * @remarks
     * *AddTrafficMatchRuleToTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic classification rule.
     * - If a traffic classification rule is in the **Creating** state, the traffic classification rule is being created. In this case, you can query the traffic classification rule but cannot perform other operations.
     * - If a traffic classification rule is in the **Active** state, the traffic classification rule is added to the traffic marking policy.
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
     * Adds a traffic classification rule to a traffic marking policy.
     *
     * @remarks
     * *AddTrafficMatchRuleToTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic classification rule.
     * - If a traffic classification rule is in the **Creating** state, the traffic classification rule is being created. In this case, you can query the traffic classification rule but cannot perform other operations.
     * - If a traffic classification rule is in the **Active** state, the traffic classification rule is added to the traffic marking policy.
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
     * Adds a traffic classification rule to a traffic marking policy.
     *
     * @remarks
     * ### Usage notes
     * The **AddTraficMatchRuleToTrafficMarkingPolicy** operation is deprecated and will be discontinued soon. If you need to add a traffic classification rule to a traffic marking policy, call the [AddTrafficMatchRuleToTrafficMarkingPolicy](https://help.aliyun.com/document_detail/427602.html) operation.
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
     * Adds a traffic classification rule to a traffic marking policy.
     *
     * @remarks
     * ### Usage notes
     * The **AddTraficMatchRuleToTrafficMarkingPolicy** operation is deprecated and will be discontinued soon. If you need to add a traffic classification rule to a traffic marking policy, call the [AddTrafficMatchRuleToTrafficMarkingPolicy](https://help.aliyun.com/document_detail/427602.html) operation.
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
     * Attaches a bandwidth plan to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can attach multiple bandwidth plans to a CEN instance. However, you cannot attach more than one bandwidth plan for the same connected areas.
     * For example, if a bandwidth plan for connections within the Chinese mainland is attached to a CEN instance, you cannot attach another bandwidth plan for the same connected areas. However, you can attach a bandwidth plan for connections between the Chinese mainland and North America.
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
     * Attaches a bandwidth plan to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can attach multiple bandwidth plans to a CEN instance. However, you cannot attach more than one bandwidth plan for the same connected areas.
     * For example, if a bandwidth plan for connections within the Chinese mainland is attached to a CEN instance, you cannot attach another bandwidth plan for the same connected areas. However, you can attach a bandwidth plan for connections between the Chinese mainland and North America.
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
     * You can create a forwarding association.
     *
     * @remarks
     * After you create a network instance connection, you must associate it with the route table of an Enterprise Edition transit router. After the association is created, the Enterprise Edition transit router forwards traffic from the network instance based on the routes in the associated route table. Before you call this operation, take note of the following:
     * - Only route tables of Enterprise Edition transit routers support associations. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - A network instance connection can be associated with only one route table of an Enterprise Edition transit router.
     * - The **AssociateTransitRouterAttachmentWithRouteTable** operation is asynchronous. After you send a request, the system returns a **Request ID**, but the association is not immediately created. The system creates the association in the background. You can call the **ListTransitRouterRouteTableAssociations** operation to query the status of the association.
     *   - If the association is in the **Associating** state, it is being created. In this state, you can only query the association and cannot perform other operations.
     *   - If the association is in the **Active** state, it is successfully created.
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
     * You can create a forwarding association.
     *
     * @remarks
     * After you create a network instance connection, you must associate it with the route table of an Enterprise Edition transit router. After the association is created, the Enterprise Edition transit router forwards traffic from the network instance based on the routes in the associated route table. Before you call this operation, take note of the following:
     * - Only route tables of Enterprise Edition transit routers support associations. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - A network instance connection can be associated with only one route table of an Enterprise Edition transit router.
     * - The **AssociateTransitRouterAttachmentWithRouteTable** operation is asynchronous. After you send a request, the system returns a **Request ID**, but the association is not immediately created. The system creates the association in the background. You can call the **ListTransitRouterRouteTableAssociations** operation to query the status of the association.
     *   - If the association is in the **Associating** state, it is being created. In this state, you can only query the association and cannot perform other operations.
     *   - If the association is in the **Active** state, it is successfully created.
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
     * Associates the vSwitch of a virtual private cloud (VPC) with a multicast domain.
     *
     * @remarks
     * - A vSwitch can be associated with only one multicast domain. Make sure that the vSwitch is not associated with other multicast domains. For more information about how to disassociate a vSwitch from a multicast domain, see [DisassociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429774.html).
     * - AssociateTransitRouterMulticastDomain is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the ListTransitRouterMulticastDomainAssociations operation to query whether a vSwitch is associated with the specified multicast domain.
     *   - If the status is Associating, it indicates that the vSwitch is being associated with the specified multicast domain. You can query the vSwitch but cannot perform other operations on the vSwitch.
     *   - If the status is Associated, the vSwitch is associated with the specified multicast domain.
     * - The VPC of the vSwitch must be associated with an Enterprise Edition transit router. For more information about how to associate a VPC with an Enterprise Edition transit router, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/468237.html).
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
     * Associates the vSwitch of a virtual private cloud (VPC) with a multicast domain.
     *
     * @remarks
     * - A vSwitch can be associated with only one multicast domain. Make sure that the vSwitch is not associated with other multicast domains. For more information about how to disassociate a vSwitch from a multicast domain, see [DisassociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429774.html).
     * - AssociateTransitRouterMulticastDomain is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the ListTransitRouterMulticastDomainAssociations operation to query whether a vSwitch is associated with the specified multicast domain.
     *   - If the status is Associating, it indicates that the vSwitch is being associated with the specified multicast domain. You can query the vSwitch but cannot perform other operations on the vSwitch.
     *   - If the status is Associated, the vSwitch is associated with the specified multicast domain.
     * - The VPC of the vSwitch must be associated with an Enterprise Edition transit router. For more information about how to associate a VPC with an Enterprise Edition transit router, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/468237.html).
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
     * CEN allows you to attach a network instance that belongs to another Alibaba Cloud account to your CEN instance. Before you attach the network instance, CEN must acquire permissions to access the network instance that belongs to another Alibaba Cloud account.
     * - For more information about how to grant CEN permissions on virtual private clouds (VPCs) that belong to another Alibaba Cloud account, see [GrantInstanceToCen](https://help.aliyun.com/document_detail/126224.html).
     * - For more information about how to grant CEN permissions on Cloud Connect Network (CCN) instances that belong to another Alibaba Cloud account, see [GrantInstanceToCbn](https://help.aliyun.com/document_detail/126141.html).
     * - By default, you cannot grant permissions on virtual border routers (VBRs) that belong to another Alibaba Cloud account to a CEN instance. If you need to use this feature, contact your account manager.
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
     * CEN allows you to attach a network instance that belongs to another Alibaba Cloud account to your CEN instance. Before you attach the network instance, CEN must acquire permissions to access the network instance that belongs to another Alibaba Cloud account.
     * - For more information about how to grant CEN permissions on virtual private clouds (VPCs) that belong to another Alibaba Cloud account, see [GrantInstanceToCen](https://help.aliyun.com/document_detail/126224.html).
     * - For more information about how to grant CEN permissions on Cloud Connect Network (CCN) instances that belong to another Alibaba Cloud account, see [GrantInstanceToCbn](https://help.aliyun.com/document_detail/126141.html).
     * - By default, you cannot grant permissions on virtual border routers (VBRs) that belong to another Alibaba Cloud account to a CEN instance. If you need to use this feature, contact your account manager.
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
     * Queries whether your Alibaba Cloud account has the transit router feature activated.
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
     * Queries whether your Alibaba Cloud account has the transit router feature activated.
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
     * A Cloud Enterprise Network (CEN) instance is the fundamental resource for managing an integrated network. A CEN instance manages a network that can span one or more regions. Before you enable communication between network instances, you must call the CreateCen operation to create a CEN instance.
     *
     * @remarks
     * *CreateCen** is an asynchronous operation. After a request is sent, the system returns a CEN instance ID, but the CEN instance is not created immediately. The creation task runs in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If a CEN instance is in the **Creating** status, it is being created. In this status, you can only query the instance. You cannot perform other operations.
     * - If a CEN instance is in the **Active** status, the instance is created.
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
     * A Cloud Enterprise Network (CEN) instance is the fundamental resource for managing an integrated network. A CEN instance manages a network that can span one or more regions. Before you enable communication between network instances, you must call the CreateCen operation to create a CEN instance.
     *
     * @remarks
     * *CreateCen** is an asynchronous operation. After a request is sent, the system returns a CEN instance ID, but the CEN instance is not created immediately. The creation task runs in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If a CEN instance is in the **Creating** status, it is being created. In this status, you can only query the instance. You cannot perform other operations.
     * - If a CEN instance is in the **Active** status, the instance is created.
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
     * To connect network instances in different regions, you must purchase a bandwidth plan. You can call the CreateCenBandwidthPackage operation to create a bandwidth plan.
     *
     * @remarks
     * - When you create a bandwidth plan, you must specify the connected areas. A connected area is a collection of one or more Alibaba Cloud regions. You must select the connected areas based on the regions that you want to connect. For more information about the relationship between areas and regions, see [Purchase a bandwidth plan](https://help.aliyun.com/document_detail/181560.html).
     * - For more information about billing, see [Billing](https://help.aliyun.com/document_detail/189836.html).
     * - **CreateCenBandwidthPackage** is an asynchronous operation. After you send a request, the system returns a bandwidth plan ID. The bandwidth plan is created in the background. You can call the **DescribeCenBandwidthPackages** operation to query the status of the bandwidth plan. The bandwidth plan is successfully created when its status changes to **Idle** or **InUse**.
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
     * To connect network instances in different regions, you must purchase a bandwidth plan. You can call the CreateCenBandwidthPackage operation to create a bandwidth plan.
     *
     * @remarks
     * - When you create a bandwidth plan, you must specify the connected areas. A connected area is a collection of one or more Alibaba Cloud regions. You must select the connected areas based on the regions that you want to connect. For more information about the relationship between areas and regions, see [Purchase a bandwidth plan](https://help.aliyun.com/document_detail/181560.html).
     * - For more information about billing, see [Billing](https://help.aliyun.com/document_detail/189836.html).
     * - **CreateCenBandwidthPackage** is an asynchronous operation. After you send a request, the system returns a bandwidth plan ID. The bandwidth plan is created in the background. You can call the **DescribeCenBandwidthPackages** operation to query the status of the bandwidth plan. The bandwidth plan is successfully created when its status changes to **Idle** or **InUse**.
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
     * You can call the CreateCenChildInstanceRouteEntryToAttachment operation to create a route for a network instance connected to an Enterprise Edition transit router. The next hop of the route points to the transit router in the current region.
     *
     * @remarks
     * - You can create routes only for Virtual Private Cloud (VPC) and virtual border router (VBR) instances that are connected to an Enterprise Edition transit router.
     * - The next hop of the route is the **transit router connection** (the network instance connection) by default and cannot be modified.
     * - **CreateCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** and creates the route in the background. The route is not created immediately. You can call the **DescribeRouteEntryList** operation for the VPC to query the status of the route.
     *   - If the route is in the **Pending** state, it is being created. During this time, you can only query the route and cannot perform other operations.
     *   - If the route is in the **Available** state, the route is created.
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
     * You can call the CreateCenChildInstanceRouteEntryToAttachment operation to create a route for a network instance connected to an Enterprise Edition transit router. The next hop of the route points to the transit router in the current region.
     *
     * @remarks
     * - You can create routes only for Virtual Private Cloud (VPC) and virtual border router (VBR) instances that are connected to an Enterprise Edition transit router.
     * - The next hop of the route is the **transit router connection** (the network instance connection) by default and cannot be modified.
     * - **CreateCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId** and creates the route in the background. The route is not created immediately. You can call the **DescribeRouteEntryList** operation for the VPC to query the status of the route.
     *   - If the route is in the **Pending** state, it is being created. During this time, you can only query the route and cannot perform other operations.
     *   - If the route is in the **Available** state, the route is created.
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
     * Adds routes to a network instance.
     *
     * @remarks
     * ## Limits
     * *   By default, the CreateCenChildInstanceRouteEntryToCen operation is unavailable. To call this operation,[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * *   You cannot add a route entry to an Enterprise Edition transit router by calling the CreateCenChildInstanceRouteEntryToCen operation.
     * *   By default, the next hop of the route entry is the regional gateway of the Cloud Enterprise Network (CEN) instance. You cannot modify the next hop.
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
     * Adds routes to a network instance.
     *
     * @remarks
     * ## Limits
     * *   By default, the CreateCenChildInstanceRouteEntryToCen operation is unavailable. To call this operation,[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * *   You cannot add a route entry to an Enterprise Edition transit router by calling the CreateCenChildInstanceRouteEntryToCen operation.
     * *   By default, the next hop of the route entry is the regional gateway of the Cloud Enterprise Network (CEN) instance. You cannot modify the next hop.
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
     * Creates a quality of service (QoS) policy for an inter-region connection on an Enterprise Edition transit router.
     *
     * @remarks
     * - Only inter-region connections created on Enterprise Edition transit routers support QoS policies.
     * - Traffic scheduling applies only to outbound traffic on Enterprise Edition transit routers.
     *   For example, you create an inter-region connection between the China (Hangzhou) and China (Qingdao) regions, and create a QoS policy for the transit router in the China (Hangzhou) region. In this case, the QoS policy can ensure bandwidth for network traffic from the China (Hangzhou) region to the China (Qingdao) region. However, the QoS policy does not apply to network traffic from the China (Qingdao) region to the China (Hangzhou) region.
     * - **CreateCenInterRegionTrafficQosPolicy** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of the task.
     *   - If the QoS policy is in the **Creating** state, the QoS policy is being created. You can query the QoS policy but cannot perform other operations on the QoS policy.
     *   - If the QoS policy is in the **Active** state, the QoS policy is created.
     * ### Prerequisites
     * Before you call the **CreateCenInterRegionTrafficQosPolicy** operation, make sure that the following requirements are met:
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
     * Creates a quality of service (QoS) policy for an inter-region connection on an Enterprise Edition transit router.
     *
     * @remarks
     * - Only inter-region connections created on Enterprise Edition transit routers support QoS policies.
     * - Traffic scheduling applies only to outbound traffic on Enterprise Edition transit routers.
     *   For example, you create an inter-region connection between the China (Hangzhou) and China (Qingdao) regions, and create a QoS policy for the transit router in the China (Hangzhou) region. In this case, the QoS policy can ensure bandwidth for network traffic from the China (Hangzhou) region to the China (Qingdao) region. However, the QoS policy does not apply to network traffic from the China (Qingdao) region to the China (Hangzhou) region.
     * - **CreateCenInterRegionTrafficQosPolicy** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of the task.
     *   - If the QoS policy is in the **Creating** state, the QoS policy is being created. You can query the QoS policy but cannot perform other operations on the QoS policy.
     *   - If the QoS policy is in the **Active** state, the QoS policy is created.
     * ### Prerequisites
     * Before you call the **CreateCenInterRegionTrafficQosPolicy** operation, make sure that the following requirements are met:
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
     * Creates queues in a quality of service (QoS) policy to manage network traffic based on finer granularities, improve service performance, and meet service-level agreements (SLAs).
     *
     * @remarks
     * The **CreateCenInterRegionTrafficQosQueue** operation is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of the QoS policy to determine the status of the queue. When you call this operation, you must set the **TrafficQosPolicyId** parameter.
     * - If a QoS policy is in the **Modifying** state, the queue is being created. In this case, you can query the QoS policy and queue but cannot perform other operations.
     * - If a QoS policy is in the **Active** state, the queue is created.
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
     * Creates queues in a quality of service (QoS) policy to manage network traffic based on finer granularities, improve service performance, and meet service-level agreements (SLAs).
     *
     * @remarks
     * The **CreateCenInterRegionTrafficQosQueue** operation is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of the QoS policy to determine the status of the queue. When you call this operation, you must set the **TrafficQosPolicyId** parameter.
     * - If a QoS policy is in the **Modifying** state, the queue is being created. In this case, you can query the QoS policy and queue but cannot perform other operations.
     * - If a QoS policy is in the **Active** state, the queue is created.
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
     * Creates a routing policy. A routing policy filters routing information and facilitates network management.
     *
     * @remarks
     * Routing policies are sorted by priority. A smaller value indicates a higher priority. Each routing policy is a collection of conditional statements and execution statements. Starting from the routing policy with the highest priority, the system matches routes against the match conditions specified by routing policies. If a route meets all the match conditions of a routing policy, the system permits or denies the route based on the action specified in the routing policy. You can also modify the attributes of permitted routes. By default, the system permits routes that meet none of the match conditions. For more information, see [Routing policy overview](https://help.aliyun.com/document_detail/124157.html).
     * `CreateCenRouteMap` is an asynchronous operation. After you send a request, the routing policy ID is returned but the operation is still being performed in the system background. You can call `DescribeCenRouteMaps` to query the status of a routing policy.
     * - If a routing policy is in the **Creating** state, the routing policy is being created. In this case, you can query the routing policy but cannot perform other operations.
     * - If a routing policy is in the **Active** state, the routing policy is created.
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
     * Creates a routing policy. A routing policy filters routing information and facilitates network management.
     *
     * @remarks
     * Routing policies are sorted by priority. A smaller value indicates a higher priority. Each routing policy is a collection of conditional statements and execution statements. Starting from the routing policy with the highest priority, the system matches routes against the match conditions specified by routing policies. If a route meets all the match conditions of a routing policy, the system permits or denies the route based on the action specified in the routing policy. You can also modify the attributes of permitted routes. By default, the system permits routes that meet none of the match conditions. For more information, see [Routing policy overview](https://help.aliyun.com/document_detail/124157.html).
     * `CreateCenRouteMap` is an asynchronous operation. After you send a request, the routing policy ID is returned but the operation is still being performed in the system background. You can call `DescribeCenRouteMaps` to query the status of a routing policy.
     * - If a routing policy is in the **Creating** state, the routing policy is being created. In this case, you can query the routing policy but cannot perform other operations.
     * - If a routing policy is in the **Active** state, the routing policy is created.
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
     * You can use flow logs to capture traffic that is transmitted over transit router instances and network instance connections. Network instance connections include inter-region connections, VPC connections, VPN connections, ECR connections, and VBR connections. Before you create a flow log, note the following:
     * - Only Enterprise Edition transit routers support flow logs.
     * - For inter-region connections, flow logs capture only outbound traffic from the transit router. Inbound traffic is not captured.
     *   For example, an Elastic Compute Service (ECS) instance in the US (Silicon Valley) region accesses an ECS instance in the US (Virginia) region through Cloud Enterprise Network (CEN). If you create a flow log for the transit router in the US (Virginia) region, you can view messages sent from the ECS instance in the US (Virginia) region to the ECS instance in the US (Silicon Valley) region in the Simple Log Service console. However, you cannot view messages sent from the ECS instance in the US (Silicon Valley) region to the ECS instance in the US (Virginia) region. To view these messages, you must also create a flow log for the transit router in the US (Silicon Valley) region.
     * - When a flow log captures traffic of a VPC connection, it captures only traffic transmitted over the transit router elastic network interface (ENI). To capture traffic transmitted over other ENIs in the VPC, see [VPC flow log overview](https://help.aliyun.com/document_detail/127150.html).
     * - `CreateFlowlog` is an asynchronous operation. After you send a request, the system returns a flow log ID. However, the flow log is not immediately created. The system creates the flow log in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   - If a flow log is in the **Creating** state, it is being created. In this state, you can only query the flow log.
     *   - If a flow log is in the **Active** state, it is created.
     * ### Prerequisites
     * Before you create a flow log for a resource, make sure that the resource has been created. To create a resource, see the following topics:
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
     * You can use flow logs to capture traffic that is transmitted over transit router instances and network instance connections. Network instance connections include inter-region connections, VPC connections, VPN connections, ECR connections, and VBR connections. Before you create a flow log, note the following:
     * - Only Enterprise Edition transit routers support flow logs.
     * - For inter-region connections, flow logs capture only outbound traffic from the transit router. Inbound traffic is not captured.
     *   For example, an Elastic Compute Service (ECS) instance in the US (Silicon Valley) region accesses an ECS instance in the US (Virginia) region through Cloud Enterprise Network (CEN). If you create a flow log for the transit router in the US (Virginia) region, you can view messages sent from the ECS instance in the US (Virginia) region to the ECS instance in the US (Silicon Valley) region in the Simple Log Service console. However, you cannot view messages sent from the ECS instance in the US (Silicon Valley) region to the ECS instance in the US (Virginia) region. To view these messages, you must also create a flow log for the transit router in the US (Silicon Valley) region.
     * - When a flow log captures traffic of a VPC connection, it captures only traffic transmitted over the transit router elastic network interface (ENI). To capture traffic transmitted over other ENIs in the VPC, see [VPC flow log overview](https://help.aliyun.com/document_detail/127150.html).
     * - `CreateFlowlog` is an asynchronous operation. After you send a request, the system returns a flow log ID. However, the flow log is not immediately created. The system creates the flow log in the background. You can call the `DescribeFlowlogs` operation to query the status of a flow log.
     *   - If a flow log is in the **Creating** state, it is being created. In this state, you can only query the flow log.
     *   - If a flow log is in the **Active** state, it is created.
     * ### Prerequisites
     * Before you create a flow log for a resource, make sure that the resource has been created. To create a resource, see the following topics:
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
     * Creates a traffic marking policy. A traffic marking policy captures network traffic based on traffic classification rules and marks the traffic with the Differentiated Services Code Point (DSCP) values that you specify.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support traffic marking policies.
     * - **CreateTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a traffic marking policy ID and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic marking policy.
     *   - If a traffic marking policy is in the **Creating** state, the traffic marking policy is being created. You can query the traffic marking policy but cannot perform other operations.
     *   - If a traffic marking policy is in the **Active** state, the traffic marking policy is created.
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
     * Creates a traffic marking policy. A traffic marking policy captures network traffic based on traffic classification rules and marks the traffic with the Differentiated Services Code Point (DSCP) values that you specify.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support traffic marking policies.
     * - **CreateTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a traffic marking policy ID and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic marking policy.
     *   - If a traffic marking policy is in the **Creating** state, the traffic marking policy is being created. You can query the traffic marking policy but cannot perform other operations.
     *   - If a traffic marking policy is in the **Active** state, the traffic marking policy is created.
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
     * After you add an aggregate route to the route table of an Enterprise Edition transit router, the transit router propagates the aggregate route only to the route tables of VPC instances that are associated with the transit router route table and have route synchronization enabled.
     * Before you create an aggregate route, make sure that the following requirements are met. Otherwise, the Enterprise Edition transit router does not propagate the aggregate route to the route tables of VPC instances:
     * - The VPC instance is associated with the route table of the Enterprise Edition transit router. For more information, see [AssociateTransitRouterAttachmentWithRouteTable](https://help.aliyun.com/document_detail/261242.html).
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
     * After you add an aggregate route to the route table of an Enterprise Edition transit router, the transit router propagates the aggregate route only to the route tables of VPC instances that are associated with the transit router route table and have route synchronization enabled.
     * Before you create an aggregate route, make sure that the following requirements are met. Otherwise, the Enterprise Edition transit router does not propagate the aggregate route to the route tables of VPC instances:
     * - The VPC instance is associated with the route table of the Enterprise Edition transit router. For more information, see [AssociateTransitRouterAttachmentWithRouteTable](https://help.aliyun.com/document_detail/261242.html).
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
     * You can call the CreateTransitRouter operation to create an Enterprise Edition transit router instance.
     *
     * @remarks
     * - You can call the **CreateTransitRouter** operation to create an Enterprise Edition transit router instance. Enterprise Edition transit routers are available only in some regions. For more information about the supported regions, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - **CreateTransitRouter** is an asynchronous operation. After you send a request, the system returns an Enterprise Edition transit router instance ID, but the instance is still being created in the background. You can call the [ListTransitRouters](https://help.aliyun.com/document_detail/261219.html) operation to query the status of the Enterprise Edition transit router instance.
     *   - If an Enterprise Edition transit router instance is in the **Creating** state, you can only query the instance and cannot perform other operations.
     *   - If an Enterprise Edition transit router instance is in the **Active** state, the instance has been created.
     * - You can create only one transit router instance in each region for a CEN instance.
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
     * You can call the CreateTransitRouter operation to create an Enterprise Edition transit router instance.
     *
     * @remarks
     * - You can call the **CreateTransitRouter** operation to create an Enterprise Edition transit router instance. Enterprise Edition transit routers are available only in some regions. For more information about the supported regions, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - **CreateTransitRouter** is an asynchronous operation. After you send a request, the system returns an Enterprise Edition transit router instance ID, but the instance is still being created in the background. You can call the [ListTransitRouters](https://help.aliyun.com/document_detail/261219.html) operation to query the status of the Enterprise Edition transit router instance.
     *   - If an Enterprise Edition transit router instance is in the **Creating** state, you can only query the instance and cannot perform other operations.
     *   - If an Enterprise Edition transit router instance is in the **Active** state, the instance has been created.
     * - You can create only one transit router instance in each region for a CEN instance.
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
     * A transit router CIDR block is a custom CIDR block that you can create for a transit router. This CIDR block is similar to a CIDR block that is used to assign an IP address to a router\\"s loopback interface. Call the CreateTransitRouterCidr operation to create a CIDR block for a transit router.
     *
     * @remarks
     * A transit router CIDR block is a custom CIDR block that you can create for a transit router. It is similar to a CIDR block used to assign an IP address to a router\\"s loopback interface. A transit router CIDR block is used to allocate IP addresses to network instance connections. For more information, see [Transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * The **CreateTransitRouterCidr** operation is used to add a CIDR block to a transit router only after the transit router is created.
     * Before you create a transit router CIDR block, note the following information:
     * - Only Enterprise Edition transit routers support CIDR blocks.
     * - For more information about the limits on transit router CIDR blocks, see [Limits on transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * - A transit router supports up to five CIDR blocks. The subnet mask of each CIDR block must be 16 to 24 bits in length.
     * - You cannot create CIDR blocks that are within 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16, or their subnets.
     * - Each CIDR block must not conflict with the CIDR blocks of interconnected network instances in the Cloud Enterprise Network (CEN) instance.
     * - Each CIDR block must be unique within the same CEN instance.
     * - After you add a CIDR block to a transit router and create the first VPN connection on it, the system automatically allocates three CIDR blocks from the specified CIDR block. These three CIDR blocks are reserved by the system for creating VPN connections. The system then allocates IP addresses to IPsec connections from the remaining CIDR blocks.
     *   You can call the [ListTransitRouterCidrAllocation](https://help.aliyun.com/document_detail/464173.html) operation to query the CIDR blocks that are reserved by the system or allocated to IPsec connections.
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
     * A transit router CIDR block is a custom CIDR block that you can create for a transit router. This CIDR block is similar to a CIDR block that is used to assign an IP address to a router\\"s loopback interface. Call the CreateTransitRouterCidr operation to create a CIDR block for a transit router.
     *
     * @remarks
     * A transit router CIDR block is a custom CIDR block that you can create for a transit router. It is similar to a CIDR block used to assign an IP address to a router\\"s loopback interface. A transit router CIDR block is used to allocate IP addresses to network instance connections. For more information, see [Transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * The **CreateTransitRouterCidr** operation is used to add a CIDR block to a transit router only after the transit router is created.
     * Before you create a transit router CIDR block, note the following information:
     * - Only Enterprise Edition transit routers support CIDR blocks.
     * - For more information about the limits on transit router CIDR blocks, see [Limits on transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * - A transit router supports up to five CIDR blocks. The subnet mask of each CIDR block must be 16 to 24 bits in length.
     * - You cannot create CIDR blocks that are within 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16, or their subnets.
     * - Each CIDR block must not conflict with the CIDR blocks of interconnected network instances in the Cloud Enterprise Network (CEN) instance.
     * - Each CIDR block must be unique within the same CEN instance.
     * - After you add a CIDR block to a transit router and create the first VPN connection on it, the system automatically allocates three CIDR blocks from the specified CIDR block. These three CIDR blocks are reserved by the system for creating VPN connections. The system then allocates IP addresses to IPsec connections from the remaining CIDR blocks.
     *   You can call the [ListTransitRouterCidrAllocation](https://help.aliyun.com/document_detail/464173.html) operation to query the CIDR blocks that are reserved by the system or allocated to IPsec connections.
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
     * Call the CreateTransitRouterEcrAttachment operation to connect an Express Connect Router (ECR) instance to a transit router in the same region.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support ECR connections.
     * - You can create an ECR connection on an Enterprise Edition transit router in one of the following two ways:
     *   - If you have an Enterprise Edition transit router instance in the destination region, you can create an ECR connection by specifying **EcrId**, **RegionId**, and **TransitRouterId**.
     *   - If you do not have an Enterprise Edition transit router instance in the destination region, you can create an ECR connection by specifying **EcrId**, **CenId**, and **RegionId**. When you create the ECR connection, the system automatically creates an Enterprise Edition transit router instance for you.
     * - CreateTransitRouterEcrAttachment is an asynchronous operation. After you send a request, the system returns an ECR connection ID, but the connection is created in the background. You can call the ListTransitRouterEcrAttachments operation to query the status of the ECR connection.
     *   - If an ECR connection is in the **Attaching** status, the connection is being created. In this status, you can only query the connection and cannot perform other operations.
     *   - If an ECR connection is in the **Attached** status, the connection is created.
     * - By default, after an ECR connection is created, it is not associated with any route table of the Enterprise Edition transit router for route learning or forwarding.
     *   After the ECR connection is associated with a route table of the Enterprise Edition transit router for [route learning](https://help.aliyun.com/document_detail/468300.html), the system automatically propagates the routes from the ECR instance to the route table of the Enterprise Edition transit router.
     * - After an ECR connection is created, the system automatically propagates routes from the route table of the Enterprise Edition transit router associated with the ECR connection to the route table of the ECR instance.
     * ### Prerequisites
     * - The Alibaba Cloud accounts that own the Enterprise Edition transit router and the ECR instance must belong to the same enterprise.
     * - An Enterprise Edition transit router can connect to ECR instances that belong to the same account or different accounts. Before you create a cross-account ECR connection, you must obtain authorization from the account that owns the ECR instance. For more information, see [Authorize a cross-account network instance](https://help.aliyun.com/document_detail/181553.html).
     * - **Before you call this operation to create an ECR connection, you must call the [CreateExpressConnectRouterAssociation](https://help.aliyun.com/document_detail/2712082.html) operation to create an association between the ECR instance and the Enterprise Edition transit router instance.**
     *   **When you call the DeleteTransitRouterEcrAttachment operation to force delete an ECR connection, the system also deletes the association between the ECR instance and the Enterprise Edition transit router instance. You do not need to delete the association separately.**
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
     * Call the CreateTransitRouterEcrAttachment operation to connect an Express Connect Router (ECR) instance to a transit router in the same region.
     *
     * @remarks
     * - Only Enterprise Edition transit routers support ECR connections.
     * - You can create an ECR connection on an Enterprise Edition transit router in one of the following two ways:
     *   - If you have an Enterprise Edition transit router instance in the destination region, you can create an ECR connection by specifying **EcrId**, **RegionId**, and **TransitRouterId**.
     *   - If you do not have an Enterprise Edition transit router instance in the destination region, you can create an ECR connection by specifying **EcrId**, **CenId**, and **RegionId**. When you create the ECR connection, the system automatically creates an Enterprise Edition transit router instance for you.
     * - CreateTransitRouterEcrAttachment is an asynchronous operation. After you send a request, the system returns an ECR connection ID, but the connection is created in the background. You can call the ListTransitRouterEcrAttachments operation to query the status of the ECR connection.
     *   - If an ECR connection is in the **Attaching** status, the connection is being created. In this status, you can only query the connection and cannot perform other operations.
     *   - If an ECR connection is in the **Attached** status, the connection is created.
     * - By default, after an ECR connection is created, it is not associated with any route table of the Enterprise Edition transit router for route learning or forwarding.
     *   After the ECR connection is associated with a route table of the Enterprise Edition transit router for [route learning](https://help.aliyun.com/document_detail/468300.html), the system automatically propagates the routes from the ECR instance to the route table of the Enterprise Edition transit router.
     * - After an ECR connection is created, the system automatically propagates routes from the route table of the Enterprise Edition transit router associated with the ECR connection to the route table of the ECR instance.
     * ### Prerequisites
     * - The Alibaba Cloud accounts that own the Enterprise Edition transit router and the ECR instance must belong to the same enterprise.
     * - An Enterprise Edition transit router can connect to ECR instances that belong to the same account or different accounts. Before you create a cross-account ECR connection, you must obtain authorization from the account that owns the ECR instance. For more information, see [Authorize a cross-account network instance](https://help.aliyun.com/document_detail/181553.html).
     * - **Before you call this operation to create an ECR connection, you must call the [CreateExpressConnectRouterAssociation](https://help.aliyun.com/document_detail/2712082.html) operation to create an association between the ECR instance and the Enterprise Edition transit router instance.**
     *   **When you call the DeleteTransitRouterEcrAttachment operation to force delete an ECR connection, the system also deletes the association between the ECR instance and the Enterprise Edition transit router instance. You do not need to delete the association separately.**
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
     * A multicast domain defines the scope of a multicast network in a region. Only resources within the multicast domain can send and receive multicast traffic. You can call the CreateTransitRouterMulticastDomain operation to create a multicast domain.
     *
     * @remarks
     * Before you call this operation, note the following:
     * - Make sure that you have created an Enterprise Edition transit router in the region where you want to create the multicast network and enabled the multicast feature for the transit router. For more information, see [CreateTransitRouter](https://help.aliyun.com/document_detail/261169.html).
     *   If you created an Enterprise Edition transit router before you requested multicast resources, you cannot enable the multicast feature for the transit router. You must delete the current Enterprise Edition transit router and create a new one. For more information about how to delete an Enterprise Edition transit router, see [DeleteTransitRouter](https://help.aliyun.com/document_detail/261218.html).
     * - When you call the **CreateTransitRouterMulticastDomain** operation, if you specify **CenId** and **RegionId**, you do not need to specify **TransitRouterId**. If you specify **TransitRouterId**, you do not need to specify **CenId** or **RegionId**.
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
     * A multicast domain defines the scope of a multicast network in a region. Only resources within the multicast domain can send and receive multicast traffic. You can call the CreateTransitRouterMulticastDomain operation to create a multicast domain.
     *
     * @remarks
     * Before you call this operation, note the following:
     * - Make sure that you have created an Enterprise Edition transit router in the region where you want to create the multicast network and enabled the multicast feature for the transit router. For more information, see [CreateTransitRouter](https://help.aliyun.com/document_detail/261169.html).
     *   If you created an Enterprise Edition transit router before you requested multicast resources, you cannot enable the multicast feature for the transit router. You must delete the current Enterprise Edition transit router and create a new one. For more information about how to delete an Enterprise Edition transit router, see [DeleteTransitRouter](https://help.aliyun.com/document_detail/261218.html).
     * - When you call the **CreateTransitRouterMulticastDomain** operation, if you specify **CenId** and **RegionId**, you do not need to specify **TransitRouterId**. If you specify **TransitRouterId**, you do not need to specify **CenId** or **RegionId**.
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
     * After network instances (VPC, VBR, IPsec connection) are connected to a transit router, you need to create an inter-region connection to enable communication between network instances in different regions. You can call the CreateTransitRouterPeerAttachment operation to create an inter-region connection for an Enterprise Edition transit router instance.
     *
     * @remarks
     * - Enterprise Edition transit routers allow you to allocate bandwidth resources to inter-region connections using the following methods:
     *   - **From bandwidth plan**:
     *     You must purchase a bandwidth plan and then allocate bandwidth resources from the plan to inter-region connections. For more information about how to purchase a bandwidth plan, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html).
     *   - **Pay-by-traffic**:
     *     You can set a maximum bandwidth value for an inter-region connection. You are then charged based on the amount of data transferred over the connection. For more information about billing, see [Inter-region traffic](https://help.aliyun.com/document_detail/337827.html).
     * - The **CreateTransitRouterPeerAttachment** operation is asynchronous. After you call this operation, the system returns an inter-region connection ID. However, the inter-region connection is not created immediately. The creation task runs in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of the inter-region connection.
     *   - When the inter-region connection is in the **Attaching** state, the connection is being created. In this state, you can only query the inter-region connection. You cannot perform other operations.
     *   - When the inter-region connection is in the **Attached** state, the connection creation is complete.
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
     * After network instances (VPC, VBR, IPsec connection) are connected to a transit router, you need to create an inter-region connection to enable communication between network instances in different regions. You can call the CreateTransitRouterPeerAttachment operation to create an inter-region connection for an Enterprise Edition transit router instance.
     *
     * @remarks
     * - Enterprise Edition transit routers allow you to allocate bandwidth resources to inter-region connections using the following methods:
     *   - **From bandwidth plan**:
     *     You must purchase a bandwidth plan and then allocate bandwidth resources from the plan to inter-region connections. For more information about how to purchase a bandwidth plan, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html).
     *   - **Pay-by-traffic**:
     *     You can set a maximum bandwidth value for an inter-region connection. You are then charged based on the amount of data transferred over the connection. For more information about billing, see [Inter-region traffic](https://help.aliyun.com/document_detail/337827.html).
     * - The **CreateTransitRouterPeerAttachment** operation is asynchronous. After you call this operation, the system returns an inter-region connection ID. However, the inter-region connection is not created immediately. The creation task runs in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of the inter-region connection.
     *   - When the inter-region connection is in the **Attaching** state, the connection is being created. In this state, you can only query the inter-region connection. You cannot perform other operations.
     *   - When the inter-region connection is in the **Attached** state, the connection creation is complete.
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
     * Associates the route table of an Enterprise Edition transit router with a prefix list.
     *
     * @remarks
     * To associate an Enterprise Edition transit router with a route prefix, you must meet the following requirements:
     * *   You are familiar with the limits and route compatibility notes of prefix lists. For more information, see [Prefix lists](https://help.aliyun.com/document_detail/445605.html).
     * *   A prefix list is created. For more information, see [CreateVpcPrefixList](https://help.aliyun.com/document_detail/437367.html).
     * *   If the prefix list and the Enterprise Edition transit router belong to different Alibaba Cloud accounts, the prefix list is shared with the Alibaba Cloud account that owns the Enterprise Edition transit router. For more information, see [Resource sharing](https://help.aliyun.com/document_detail/160622.html) and [API references for resource sharing](https://help.aliyun.com/document_detail/193445.html).
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
     * Associates the route table of an Enterprise Edition transit router with a prefix list.
     *
     * @remarks
     * To associate an Enterprise Edition transit router with a route prefix, you must meet the following requirements:
     * *   You are familiar with the limits and route compatibility notes of prefix lists. For more information, see [Prefix lists](https://help.aliyun.com/document_detail/445605.html).
     * *   A prefix list is created. For more information, see [CreateVpcPrefixList](https://help.aliyun.com/document_detail/437367.html).
     * *   If the prefix list and the Enterprise Edition transit router belong to different Alibaba Cloud accounts, the prefix list is shared with the Alibaba Cloud account that owns the Enterprise Edition transit router. For more information, see [Resource sharing](https://help.aliyun.com/document_detail/160622.html) and [API references for resource sharing](https://help.aliyun.com/document_detail/193445.html).
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
     * Creates a route entry in the route table of an Enterprise Edition transit router.
     *
     * @remarks
     * *CreateTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a route entry ID. The route entry is created in the background. You can call the **ListTransitRouterRouteEntries** operation to query the status of the route entry.
     * - If a route entry is in the **Creating** state, the route entry is being created. In this state, you can only query the route entry and cannot perform other operations.
     * - If a route entry is in the **Active** state, the route entry has been created.
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
     * Creates a route entry in the route table of an Enterprise Edition transit router.
     *
     * @remarks
     * *CreateTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a route entry ID. The route entry is created in the background. You can call the **ListTransitRouterRouteEntries** operation to query the status of the route entry.
     * - If a route entry is in the **Creating** state, the route entry is being created. In this state, you can only query the route entry and cannot perform other operations.
     * - If a route entry is in the **Active** state, the route entry has been created.
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
     * Calls the CreateTransitRouterRouteTable operation to create a custom route table for an Enterprise Edition transit router.
     *
     * @remarks
     * - You can create custom route tables only for Enterprise Edition transit routers. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - **CreateTransitRouterRouteTable** is an asynchronous operation. After you send a request, a route table ID is returned, but the route table is still being created in the background. You can call the **ListTransitRouterRouteTables** operation to query the status of a route table.
     *   - If a route table is in the **Creating** state, it is being created. In this state, you can only query the route table and cannot perform other operations.
     *   - If a route table is in the **Active** state, the route table is created.
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
     * Calls the CreateTransitRouterRouteTable operation to create a custom route table for an Enterprise Edition transit router.
     *
     * @remarks
     * - You can create custom route tables only for Enterprise Edition transit routers. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is Cloud Enterprise Network?](https://help.aliyun.com/document_detail/181681.html).
     * - **CreateTransitRouterRouteTable** is an asynchronous operation. After you send a request, a route table ID is returned, but the route table is still being created in the background. You can call the **ListTransitRouterRouteTables** operation to query the status of a route table.
     *   - If a route table is in the **Creating** state, it is being created. In this state, you can only query the route table and cannot perform other operations.
     *   - If a route table is in the **Active** state, the route table is created.
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
     * Connects a virtual border router (VBR) with a transit router in the same region.
     *
     * @remarks
     * - For information about the regions and zones supported by Enterprise Edition transit routers, see [What is CEN?](https://help.aliyun.com/document_detail/181681.html)
     * - You can create a VBR connection with or without an Enterprise Edition transit router:
     *   - If you already have an Enterprise Edition transit router in the target region, specify the **VbrId**, **RegionId**, and **TransitRouterId** parameters.
     *   - If you do not have an Enterprise Edition transit router in the target region, specify the **VbrId**, **CenId**, and **RegionId&#x20;**&#x70;arameters, and the system will automatically create an Enterprise Edition transit router when executing the operation.
     * - This operation is executed asynchronously. After receiving a request, the system returns a VBR connection ID before the VBR connection is fully ready, and it continues the creation task in the backend. You can call **ListTransitRouterVbrAttachments** to check whether the connection has been created.
     *   - If the VBR connection is in the **Attaching** state, it hasn\\"t been created. In this case, you can query information about the connection but cannot perform other operations on it.
     *   - If the VBR connection is in the **Attached** state, the creation task has been completed.
     * - The transit router and VBR can be in the same or different Alibaba Cloud accounts. In a cross-account scenario, both accounts must belong to the same enterprise, and you need to [grant the required permissions on the VBR to the transit router](https://help.aliyun.com/document_detail/181553.html).
     * - A newly created VBR connection is not in route learning or associated forwarding correlations with any route table on the transit router.
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
     * Connects a virtual border router (VBR) with a transit router in the same region.
     *
     * @remarks
     * - For information about the regions and zones supported by Enterprise Edition transit routers, see [What is CEN?](https://help.aliyun.com/document_detail/181681.html)
     * - You can create a VBR connection with or without an Enterprise Edition transit router:
     *   - If you already have an Enterprise Edition transit router in the target region, specify the **VbrId**, **RegionId**, and **TransitRouterId** parameters.
     *   - If you do not have an Enterprise Edition transit router in the target region, specify the **VbrId**, **CenId**, and **RegionId&#x20;**&#x70;arameters, and the system will automatically create an Enterprise Edition transit router when executing the operation.
     * - This operation is executed asynchronously. After receiving a request, the system returns a VBR connection ID before the VBR connection is fully ready, and it continues the creation task in the backend. You can call **ListTransitRouterVbrAttachments** to check whether the connection has been created.
     *   - If the VBR connection is in the **Attaching** state, it hasn\\"t been created. In this case, you can query information about the connection but cannot perform other operations on it.
     *   - If the VBR connection is in the **Attached** state, the creation task has been completed.
     * - The transit router and VBR can be in the same or different Alibaba Cloud accounts. In a cross-account scenario, both accounts must belong to the same enterprise, and you need to [grant the required permissions on the VBR to the transit router](https://help.aliyun.com/document_detail/181553.html).
     * - A newly created VBR connection is not in route learning or associated forwarding correlations with any route table on the transit router.
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
     * Attaches a virtual private cloud (VPC) to a transit router. Once connected, the transit router enables private network communication.
     *
     * @remarks
     * - You can create a VPC connection for an Enterprise Edition transit router in one of two ways:
     *   - If you have an Enterprise Edition transit router in the target region, you can create a VPC connection by specifying **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **TransitRouterId**, and **RegionId**.
     *   - If you do not have an Enterprise Edition transit router in the target region, you can create a VPC connection by specifying **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **CenId**, and **RegionId**. When you create the VPC connection, the system automatically creates an Enterprise Edition transit router.
     * - **CreateTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the system returns a VPC connection ID, and the connection is created in the background. Call the [ListTransitRouterVpcAttachments](https://help.aliyun.com/document_detail/261222.html) operation to query the status of the VPC connection.
     *   - The **Attaching** state indicates that the VPC connection is being created. In this state, you can only query the VPC connection.
     *   - The **Attached** state indicates that the VPC connection has been created.
     * - By default, a newly created VPC connection is not associated with any transit router route table for route learning or forwarding.
     * ### Prerequisites
     * Before you call this API operation to create a VPC connection, ensure the following prerequisites are met:
     * - The VPC must have at least one vSwitch in a zone that supports Enterprise Edition transit routers. The vSwitch must have at least one available IP address. For more information about supported regions and zones, see [Regions and zones that support Enterprise Edition transit routers](https://help.aliyun.com/document_detail/181681.html).
     * - To connect a cross-account network instance, you must first have the required permissions. For more information, see [Grant permissions on a network instance that belongs to another account](https://help.aliyun.com/document_detail/181553.html).
     * - Creating a VPC connection incurs costs. Ensure you understand the billing rules. For more information, see [Billing](https://help.aliyun.com/document_detail/189836.html).
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
     * Attaches a virtual private cloud (VPC) to a transit router. Once connected, the transit router enables private network communication.
     *
     * @remarks
     * - You can create a VPC connection for an Enterprise Edition transit router in one of two ways:
     *   - If you have an Enterprise Edition transit router in the target region, you can create a VPC connection by specifying **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **TransitRouterId**, and **RegionId**.
     *   - If you do not have an Enterprise Edition transit router in the target region, you can create a VPC connection by specifying **VpcId**, **ZoneMappings.N.VSwitchId**, **ZoneMappings.N.ZoneId**, **CenId**, and **RegionId**. When you create the VPC connection, the system automatically creates an Enterprise Edition transit router.
     * - **CreateTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the system returns a VPC connection ID, and the connection is created in the background. Call the [ListTransitRouterVpcAttachments](https://help.aliyun.com/document_detail/261222.html) operation to query the status of the VPC connection.
     *   - The **Attaching** state indicates that the VPC connection is being created. In this state, you can only query the VPC connection.
     *   - The **Attached** state indicates that the VPC connection has been created.
     * - By default, a newly created VPC connection is not associated with any transit router route table for route learning or forwarding.
     * ### Prerequisites
     * Before you call this API operation to create a VPC connection, ensure the following prerequisites are met:
     * - The VPC must have at least one vSwitch in a zone that supports Enterprise Edition transit routers. The vSwitch must have at least one available IP address. For more information about supported regions and zones, see [Regions and zones that support Enterprise Edition transit routers](https://help.aliyun.com/document_detail/181681.html).
     * - To connect a cross-account network instance, you must first have the required permissions. For more information, see [Grant permissions on a network instance that belongs to another account](https://help.aliyun.com/document_detail/181553.html).
     * - Creating a VPC connection incurs costs. Ensure you understand the billing rules. For more information, see [Billing](https://help.aliyun.com/document_detail/189836.html).
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
     * A transit router supports IPsec-VPN connections, allowing a data center to connect to the transit router and communicate with other networks. You can call the CreateTransitRouterVpnAttachment operation to create a VPN connection.
     *
     * @remarks
     * - After you create a VPN connection, the connection does not learn routes from or associate with any route table of the transit router by default.
     * - When you call the `CreateTransitRouterVpnAttachment` operation, you do not need to specify **TransitRouterId** if you specify **CenId** and **RegionId**. You do not need to specify **CenId** if you specify **TransitRouterId** and **RegionId**.
     * ### Prerequisites
     * - Before you create a VPN connection, make sure that you have created an IPsec-VPN connection in the same region as the transit router instance and that the IPsec-VPN connection is not attached to any resource. For more information, see [CreateVpnAttachment](https://help.aliyun.com/document_detail/442455.html).
     * - If the transit router instance needs to connect to a cross-account IPsec-VPN connection, make sure that the transit router instance is granted the required permissions on the IPsec-VPN connection. For more information, see [GrantInstanceToTransitRouter](https://help.aliyun.com/document_detail/417520.html).
     * - Before you create a VPN connection, make sure that you have configured a CIDR block for the transit router. For more information, see [CreateTransitRouterCidr](https://help.aliyun.com/document_detail/468230.html).
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
     * A transit router supports IPsec-VPN connections, allowing a data center to connect to the transit router and communicate with other networks. You can call the CreateTransitRouterVpnAttachment operation to create a VPN connection.
     *
     * @remarks
     * - After you create a VPN connection, the connection does not learn routes from or associate with any route table of the transit router by default.
     * - When you call the `CreateTransitRouterVpnAttachment` operation, you do not need to specify **TransitRouterId** if you specify **CenId** and **RegionId**. You do not need to specify **CenId** if you specify **TransitRouterId** and **RegionId**.
     * ### Prerequisites
     * - Before you create a VPN connection, make sure that you have created an IPsec-VPN connection in the same region as the transit router instance and that the IPsec-VPN connection is not attached to any resource. For more information, see [CreateVpnAttachment](https://help.aliyun.com/document_detail/442455.html).
     * - If the transit router instance needs to connect to a cross-account IPsec-VPN connection, make sure that the transit router instance is granted the required permissions on the IPsec-VPN connection. For more information, see [GrantInstanceToTransitRouter](https://help.aliyun.com/document_detail/417520.html).
     * - Before you create a VPN connection, make sure that you have configured a CIDR block for the transit router. For more information, see [CreateTransitRouterCidr](https://help.aliyun.com/document_detail/468230.html).
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
     * Disables a flow log. A disabled flow log no longer captures network traffic.
     *
     * @remarks
     * This operation is executed asynchronously. After receiving a request, the system returns a **request ID** before it finishes disabling the flow log. The task is continued in the backend. You can call `DescribeFlowlogs` to check whether the flow log has been disabled.
     * - If the flow log is in the **Modifying** state, the task is still in progress. In this case, you can query information about the flow log but cannot perform other operations on it.
     * - If the flow log is in the **Inactive** state, the flow log has been disabled.
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
     * Disables a flow log. A disabled flow log no longer captures network traffic.
     *
     * @remarks
     * This operation is executed asynchronously. After receiving a request, the system returns a **request ID** before it finishes disabling the flow log. The task is continued in the backend. You can call `DescribeFlowlogs` to check whether the flow log has been disabled.
     * - If the flow log is in the **Modifying** state, the task is still in progress. In this case, you can query information about the flow log but cannot perform other operations on it.
     * - If the flow log is in the **Inactive** state, the flow log has been disabled.
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
     * *DeleteCen** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call **DescribeCens** to query the status of a CEN instance.
     * - If the CEN instance is in the **Deleting** state, the CEN instance is being deleted. In this case, you can query the CEN instance but cannot perform other operations.
     * - If the CEN instance cannot be found, the CEN instance is deleted.
     * ### [](#)Prerequisites
     * The CEN instance that you want to delete is not associated with a bandwidth plan, and the transit router associated with the CEN instance does not have a network instance connection or a custom route table.
     * - For more information about how to detach a network instance, see the following topics:
     *   - [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html)
     *   - [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html)
     *   - [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html)
     *   - [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html)
     *   > For more information about how to detach network instances from a Basic Edition transit router, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     * - For more information about how to delete custom route tables from an Enterprise Edition transit router, see [DeleteTransitRouterRouteTable](https://help.aliyun.com/document_detail/261235.html).
     * - For more information about how to disassociate a bandwidth plan from a CEN instance, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
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
     * *DeleteCen** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call **DescribeCens** to query the status of a CEN instance.
     * - If the CEN instance is in the **Deleting** state, the CEN instance is being deleted. In this case, you can query the CEN instance but cannot perform other operations.
     * - If the CEN instance cannot be found, the CEN instance is deleted.
     * ### [](#)Prerequisites
     * The CEN instance that you want to delete is not associated with a bandwidth plan, and the transit router associated with the CEN instance does not have a network instance connection or a custom route table.
     * - For more information about how to detach a network instance, see the following topics:
     *   - [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html)
     *   - [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html)
     *   - [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html)
     *   - [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html)
     *   > For more information about how to detach network instances from a Basic Edition transit router, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     * - For more information about how to delete custom route tables from an Enterprise Edition transit router, see [DeleteTransitRouterRouteTable](https://help.aliyun.com/document_detail/261235.html).
     * - For more information about how to disassociate a bandwidth plan from a CEN instance, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
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
     * Deletes a bandwidth plan.
     *
     * @remarks
     * <props="china">
     * - Before you delete a bandwidth plan, ensure that it is detached from the Cloud Enterprise Network (CEN) instance. For more information, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
     * - If you want to delete a prepay bandwidth plan, you must go to the [Order Center](https://usercenter2.aliyun.com/refund/refund) to unsubscribe from the bandwidth plan. If you have questions about unsubscription, see [Unsubscription rules](https://help.aliyun.com/zh/user-center/user-guide/unsubscription-rules#p-1qo-3ce-m7z). This operation does not support deleting bandwidth plans that use the subscription billing method.
     * <props="intl">
     * Before you delete a bandwidth plan, ensure that it is detached from the Cloud Enterprise Network (CEN) instance. For more information, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
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
     * Deletes a bandwidth plan.
     *
     * @remarks
     * <props="china">
     * - Before you delete a bandwidth plan, ensure that it is detached from the Cloud Enterprise Network (CEN) instance. For more information, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
     * - If you want to delete a prepay bandwidth plan, you must go to the [Order Center](https://usercenter2.aliyun.com/refund/refund) to unsubscribe from the bandwidth plan. If you have questions about unsubscription, see [Unsubscription rules](https://help.aliyun.com/zh/user-center/user-guide/unsubscription-rules#p-1qo-3ce-m7z). This operation does not support deleting bandwidth plans that use the subscription billing method.
     * <props="intl">
     * Before you delete a bandwidth plan, ensure that it is detached from the Cloud Enterprise Network (CEN) instance. For more information, see [UnassociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65935.html).
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
     * Call the DeleteCenChildInstanceRouteEntryToAttachment operation to delete a route entry from a network instance that is connected to an Enterprise Edition transit router.
     *
     * @remarks
     * - You can delete route entries from Virtual Private Cloud (VPC) instances and virtual border router (VBR) instances only if the next hop of the route entry is a **transit router connection** (a network instance connection).
     * - **DeleteCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the route entry is still being deleted in the background. You can call the **DescribeRouteEntryList** operation for VPC to query the status of the route entry.
     *   - If a route entry is in the **Deleting** state, it is being deleted. During this time, you can only query the route entry and cannot perform other operations on it.
     *   - If you cannot find the specified route entry, it has been deleted.
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
     * Call the DeleteCenChildInstanceRouteEntryToAttachment operation to delete a route entry from a network instance that is connected to an Enterprise Edition transit router.
     *
     * @remarks
     * - You can delete route entries from Virtual Private Cloud (VPC) instances and virtual border router (VBR) instances only if the next hop of the route entry is a **transit router connection** (a network instance connection).
     * - **DeleteCenChildInstanceRouteEntryToAttachment** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the route entry is still being deleted in the background. You can call the **DescribeRouteEntryList** operation for VPC to query the status of the route entry.
     *   - If a route entry is in the **Deleting** state, it is being deleted. During this time, you can only query the route entry and cannot perform other operations on it.
     *   - If you cannot find the specified route entry, it has been deleted.
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
     * You can call the DeleteCenChildInstanceRouteEntryToCen operation to delete a route from a network instance.
     *
     * @remarks
     * - The DeleteCenChildInstanceRouteEntryToCen operation is not available by default. To use this operation, <props="china">[submit a ticket](https://selfservice.console.aliyun.com/ticket/category/cbn/today)<props="intl">[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * - You cannot use the DeleteCenChildInstanceRouteEntryToCen operation to delete routes from a network instance that is attached to an Enterprise Edition transit router.
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
     * You can call the DeleteCenChildInstanceRouteEntryToCen operation to delete a route from a network instance.
     *
     * @remarks
     * - The DeleteCenChildInstanceRouteEntryToCen operation is not available by default. To use this operation, <props="china">[submit a ticket](https://selfservice.console.aliyun.com/ticket/category/cbn/today)<props="intl">[submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * - You cannot use the DeleteCenChildInstanceRouteEntryToCen operation to delete routes from a network instance that is attached to an Enterprise Edition transit router.
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
     * Deletes a quality of service (QoS) policy.
     *
     * @remarks
     * - Before you delete a QoS policy, you must delete all queues in the QoS policy except the default queue. For more information, see [DeleteCenInterRegionTrafficQosQueue](https://help.aliyun.com/document_detail/419062.html).
     * - **DeleteCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of a QoS policy.
     *   - If a QoS policy is in the **Deleting** state, the QoS policy is being deleted. You can query the QoS policy but cannot perform other operations.
     *   - If a QoS policy cannot be found, the QoS policy is deleted.
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
     * Deletes a quality of service (QoS) policy.
     *
     * @remarks
     * - Before you delete a QoS policy, you must delete all queues in the QoS policy except the default queue. For more information, see [DeleteCenInterRegionTrafficQosQueue](https://help.aliyun.com/document_detail/419062.html).
     * - **DeleteCenInterRegionTrafficQosPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of a QoS policy.
     *   - If a QoS policy is in the **Deleting** state, the QoS policy is being deleted. You can query the QoS policy but cannot perform other operations.
     *   - If a QoS policy cannot be found, the QoS policy is deleted.
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
     * Deletes a queue from a quality of service (QoS) policy.
     *
     * @remarks
     * - You cannot delete the default queue.
     * - **DeleteCenInterRegionTrafficQosQueue** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of a queue. If a queue cannot be found, the queue is deleted.
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
     * Deletes a queue from a quality of service (QoS) policy.
     *
     * @remarks
     * - You cannot delete the default queue.
     * - **DeleteCenInterRegionTrafficQosQueue** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListCenInterRegionTrafficQosPolicies** operation to query the status of a queue. If a queue cannot be found, the queue is deleted.
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
     * The DeleteCenRouteMap operation deletes a specified routing policy.
     *
     * @remarks
     * `DeleteCenRouteMap` is an asynchronous operation. After you call this operation, the system returns a request ID. The routing policy is then deleted in the background. You can call the `DescribeCenRouteMaps` operation to query the status of the routing policy.
     * - If a routing policy is in the **Deleting** state, it is being deleted, and you can only perform query operations on it.
     * - If the routing policy cannot be found when you call `DescribeCenRouteMaps`, the policy has been deleted.
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
     * The DeleteCenRouteMap operation deletes a specified routing policy.
     *
     * @remarks
     * `DeleteCenRouteMap` is an asynchronous operation. After you call this operation, the system returns a request ID. The routing policy is then deleted in the background. You can call the `DescribeCenRouteMaps` operation to query the status of the routing policy.
     * - If a routing policy is in the **Deleting** state, it is being deleted, and you can only perform query operations on it.
     * - If the routing policy cannot be found when you call `DescribeCenRouteMaps`, the policy has been deleted.
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
     * This operation is executed asynchronously. After receiving a request, the system returns a **request ID** before it finishes deleting the flow log. The task is continued in the backend. You can call `DescribeFlowlogs` to check whether the flow log has been deleted.
     * - If the flow log is in the **Deleting** state, it is still being deleted. In this case, you can query information about the flow log but cannot perform other operations on it.
     * - If the `DescribeFlowlogs` call fails because the flow log is not found, it has been deleted.
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
     * This operation is executed asynchronously. After receiving a request, the system returns a **request ID** before it finishes deleting the flow log. The task is continued in the backend. You can call `DescribeFlowlogs` to check whether the flow log has been deleted.
     * - If the flow log is in the **Deleting** state, it is still being deleted. In this case, you can query information about the flow log but cannot perform other operations on it.
     * - If the `DescribeFlowlogs` call fails because the flow log is not found, it has been deleted.
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
     * Deletes a specified traffic marking policy.
     *
     * @remarks
     *   **DeleteTrafficMarkingPolicy** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic marking policy.
     *     *   If a traffic marking policy is in the **Deleting** state, the traffic marking policy is being deleted. You can query the traffic marking policy but cannot perform other operations.
     *     *   If a traffic marking policy cannot be found, the traffic marking policy is deleted.
     * *   Before you delete a traffic marking policy, you must delete all traffic classification rules from the policy. For more information, see [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](https://help.aliyun.com/document_detail/468330.html).
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
     * Deletes a specified traffic marking policy.
     *
     * @remarks
     *   **DeleteTrafficMarkingPolicy** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic marking policy.
     *     *   If a traffic marking policy is in the **Deleting** state, the traffic marking policy is being deleted. You can query the traffic marking policy but cannot perform other operations.
     *     *   If a traffic marking policy cannot be found, the traffic marking policy is deleted.
     * *   Before you delete a traffic marking policy, you must delete all traffic classification rules from the policy. For more information, see [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](https://help.aliyun.com/document_detail/468330.html).
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
     * - Before you delete an aggregate route, make sure that your network has a redundant route to prevent service interruptions.
     * - After an aggregate route is deleted, the aggregate route is automatically withdrawn from virtual private clouds (VPCs). Specific routes that fall within the aggregate route are advertised to the VPCs.
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
     * - Before you delete an aggregate route, make sure that your network has a redundant route to prevent service interruptions.
     * - After an aggregate route is deleted, the aggregate route is automatically withdrawn from virtual private clouds (VPCs). Specific routes that fall within the aggregate route are advertised to the VPCs.
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
     * Deletes a transit router.
     *
     * @remarks
     * *DeleteTransitRouter** is an asynchronous operation. After you send a request, the **request ID** is returned but the operation is still being performed in the system background. You can call **ListTransitRouters** to query the status of a transit router.
     * - If a transit router is in the **Deleting** state, the transit router is being deleted. In this case, you can query the transit router but cannot perform other operations.
     * - If a transit router cannot be found, the transit router is deleted.
     * #### Prerequisites
     * Before you delete a transit router, make sure that the following prerequisites are met:
     * - No network instance connections are created on the transit router.
     *   - For more information about how to delete a virtual private cloud (VPC) connection, see [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html).
     *   - For more information about how to delete a virtual border router (VBR) connection, see [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html).
     *   - For more information about how to delete a Cloud Connect Network (CCN) connection, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     *   - For more information about how to delete a VPN connection, see [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html).
     *   - For more information about how to delete an inter-region connection, see [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html).
     * - No custom route tables are created on the transit router. For more information about how to delete a custom route table, see [DeleteTransitRouterRouteTable](https://help.aliyun.com/document_detail/261235.html).
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
     * Deletes a transit router.
     *
     * @remarks
     * *DeleteTransitRouter** is an asynchronous operation. After you send a request, the **request ID** is returned but the operation is still being performed in the system background. You can call **ListTransitRouters** to query the status of a transit router.
     * - If a transit router is in the **Deleting** state, the transit router is being deleted. In this case, you can query the transit router but cannot perform other operations.
     * - If a transit router cannot be found, the transit router is deleted.
     * #### Prerequisites
     * Before you delete a transit router, make sure that the following prerequisites are met:
     * - No network instance connections are created on the transit router.
     *   - For more information about how to delete a virtual private cloud (VPC) connection, see [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html).
     *   - For more information about how to delete a virtual border router (VBR) connection, see [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html).
     *   - For more information about how to delete a Cloud Connect Network (CCN) connection, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
     *   - For more information about how to delete a VPN connection, see [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html).
     *   - For more information about how to delete an inter-region connection, see [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html).
     * - No custom route tables are created on the transit router. For more information about how to delete a custom route table, see [DeleteTransitRouterRouteTable](https://help.aliyun.com/document_detail/261235.html).
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
     * You cannot delete a CIDR block from which IP addresses have been allocated.
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
     * You cannot delete a CIDR block from which IP addresses have been allocated.
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
     * DeleteTransitRouterEcrAttachment is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the ListTransitRouterEcrAttachments operation to query the status of an ECR connection.
     * If the ECR connection is in the Detaching state, the ECR connection is being deleted. In this case, you can query the ECR connection but cannot perform other operations on the ECR connection. If the ECR connection cannot be found, the ECR connection is deleted. Before you call the DeleteTransitRouterEcrAttachment operation, make sure that all request parameters are valid. If a request is invalid, a request ID is returned but the ECR connection is not deleted.
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
     * DeleteTransitRouterEcrAttachment is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the ListTransitRouterEcrAttachments operation to query the status of an ECR connection.
     * If the ECR connection is in the Detaching state, the ECR connection is being deleted. In this case, you can query the ECR connection but cannot perform other operations on the ECR connection. If the ECR connection cannot be found, the ECR connection is deleted. Before you call the DeleteTransitRouterEcrAttachment operation, make sure that all request parameters are valid. If a request is invalid, a request ID is returned but the ECR connection is not deleted.
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
     * You can call the DeleteTransitRouterMulticastDomain operation to delete a multicast domain.
     *
     * @remarks
     * Before you delete a multicast domain, ensure that the following requirements are met:
     * - The multicast domain is not associated with any vSwitch. For more information, see [DisassociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429774.html).
     * - No multicast source or member exists in the multicast domain. For more information, see [DeregisterTransitRouterMulticastGroupSources](https://help.aliyun.com/document_detail/429776.html) and [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/429779.html).
     * - The multicast domain is not associated with another multicast domain as a member. To disassociate the domains, delete the member from the other multicast domain. For more information, see [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/429779.html).
     * - Ensure that you enter the correct parameter values when you call the operation. If you enter an incorrect parameter value, a request ID is returned, but the multicast domain is not deleted.
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
     * You can call the DeleteTransitRouterMulticastDomain operation to delete a multicast domain.
     *
     * @remarks
     * Before you delete a multicast domain, ensure that the following requirements are met:
     * - The multicast domain is not associated with any vSwitch. For more information, see [DisassociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429774.html).
     * - No multicast source or member exists in the multicast domain. For more information, see [DeregisterTransitRouterMulticastGroupSources](https://help.aliyun.com/document_detail/429776.html) and [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/429779.html).
     * - The multicast domain is not associated with another multicast domain as a member. To disassociate the domains, delete the member from the other multicast domain. For more information, see [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/429779.html).
     * - Ensure that you enter the correct parameter values when you call the operation. If you enter an incorrect parameter value, a request ID is returned, but the multicast domain is not deleted.
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
     * Call the DeleteTransitRouterPeerAttachment operation to delete an inter-region connection from an Enterprise Edition transit router.
     *
     * @remarks
     * The **DeleteTransitRouterPeerAttachment** operation is asynchronous. After you send a request, the system returns a **RequestId**, but the inter-region connection is not immediately deleted. The system deletes the connection in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of the inter-region connection.
     * - If an inter-region connection is in the **Detaching** state, it is being deleted. In this state, you can only query the connection and cannot perform other operations.
     * - If the specified inter-region connection is not found, the connection has been deleted.
     * Make sure that you specify valid parameter values when you call the **DeleteTransitRouterPeerAttachment** operation. If you specify an invalid parameter value, the system returns a **RequestId** but does not delete the inter-region connection.
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
     * Call the DeleteTransitRouterPeerAttachment operation to delete an inter-region connection from an Enterprise Edition transit router.
     *
     * @remarks
     * The **DeleteTransitRouterPeerAttachment** operation is asynchronous. After you send a request, the system returns a **RequestId**, but the inter-region connection is not immediately deleted. The system deletes the connection in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of the inter-region connection.
     * - If an inter-region connection is in the **Detaching** state, it is being deleted. In this state, you can only query the connection and cannot perform other operations.
     * - If the specified inter-region connection is not found, the connection has been deleted.
     * Make sure that you specify valid parameter values when you call the **DeleteTransitRouterPeerAttachment** operation. If you specify an invalid parameter value, the system returns a **RequestId** but does not delete the inter-region connection.
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
     * Disassociates the route table of an Enterprise Edition transit router from a prefix list.
     *
     * @remarks
     * After you disassociate a route table of an Enterprise Edition transit router from a prefix list, the routes that point to the CIDR blocks in the prefix list are automatically withdrawn from the route table. Before you disassociate the route table of an Enterprise Edition transit router from a prefix list, you must migrate workloads that use the routes in case services are interrupted.
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
     * Disassociates the route table of an Enterprise Edition transit router from a prefix list.
     *
     * @remarks
     * After you disassociate a route table of an Enterprise Edition transit router from a prefix list, the routes that point to the CIDR blocks in the prefix list are automatically withdrawn from the route table. Before you disassociate the route table of an Enterprise Edition transit router from a prefix list, you must migrate workloads that use the routes in case services are interrupted.
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
     * You can call the DeleteTransitRouterRouteEntry operation to delete a static route of the Blackhole or Attachment type from the route table of an Enterprise Edition transit router.
     *
     * @remarks
     * Before you call this operation, note the following:
     * - If you delete a route entry by specifying **TransitRouterRouteEntryId**, you do not need to specify the **TransitRouterRouteTableId** or **TransitRouterRouteEntryDestinationCidrBlock** parameters. These parameters are mutually exclusive.
     * - If you do not specify **TransitRouterRouteEntryId**, you must specify the required parameters based on the next hop type:
     *   - To delete a blackhole route, specify the **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, and **TransitRouterRouteEntryNextHopType** parameters.
     *   - To delete a route that is not a blackhole route, specify the **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, **TransitRouterRouteEntryNextHopType**, and **TransitRouterRouteEntryNextHopId** parameters.
     * - **DeleteTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the route entry is not immediately deleted. The system deletes the route entry in the background. You can call the **ListTransitRouterRouteEntries** operation to query the status of the route entry.
     *   - If a route entry is in the **Deleting** state, it is being deleted. You can only query the route entry and cannot perform other operations.
     *   - If the specified route entry cannot be found, the route entry has been deleted.
     * ### Limits
     * This operation deletes only static routes. It cannot delete routes that are automatically learned by the system. To query the type of a route entry, call the [ListTransitRouterRouteEntries](https://help.aliyun.com/document_detail/260941.html) operation.
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
     * You can call the DeleteTransitRouterRouteEntry operation to delete a static route of the Blackhole or Attachment type from the route table of an Enterprise Edition transit router.
     *
     * @remarks
     * Before you call this operation, note the following:
     * - If you delete a route entry by specifying **TransitRouterRouteEntryId**, you do not need to specify the **TransitRouterRouteTableId** or **TransitRouterRouteEntryDestinationCidrBlock** parameters. These parameters are mutually exclusive.
     * - If you do not specify **TransitRouterRouteEntryId**, you must specify the required parameters based on the next hop type:
     *   - To delete a blackhole route, specify the **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, and **TransitRouterRouteEntryNextHopType** parameters.
     *   - To delete a route that is not a blackhole route, specify the **TransitRouterRouteTableId**, **TransitRouterRouteEntryDestinationCidrBlock**, **TransitRouterRouteEntryNextHopType**, and **TransitRouterRouteEntryNextHopId** parameters.
     * - **DeleteTransitRouterRouteEntry** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the route entry is not immediately deleted. The system deletes the route entry in the background. You can call the **ListTransitRouterRouteEntries** operation to query the status of the route entry.
     *   - If a route entry is in the **Deleting** state, it is being deleted. You can only query the route entry and cannot perform other operations.
     *   - If the specified route entry cannot be found, the route entry has been deleted.
     * ### Limits
     * This operation deletes only static routes. It cannot delete routes that are automatically learned by the system. To query the type of a route entry, call the [ListTransitRouterRouteEntries](https://help.aliyun.com/document_detail/260941.html) operation.
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
     * You can call the DeleteTransitRouterRouteTable operation to delete a custom route table of an Enterprise Edition transit router.
     *
     * @remarks
     * - You cannot delete the default route table of an Enterprise Edition transit router.
     * - **DeleteTransitRouterRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId**. The custom route table is not deleted immediately because the system deletes the route table in the background. You can call the **ListTransitRouterRouteTables** operation to query the status of the custom route table.
     *   - If a custom route table is in the Deleting state, the route table is being deleted. In this state, you can only query the route table. You cannot perform other operations.
     *   - If the specified custom route table cannot be found, the route table has been deleted.
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
     * You can call the DeleteTransitRouterRouteTable operation to delete a custom route table of an Enterprise Edition transit router.
     *
     * @remarks
     * - You cannot delete the default route table of an Enterprise Edition transit router.
     * - **DeleteTransitRouterRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId**. The custom route table is not deleted immediately because the system deletes the route table in the background. You can call the **ListTransitRouterRouteTables** operation to query the status of the custom route table.
     *   - If a custom route table is in the Deleting state, the route table is being deleted. In this state, you can only query the route table. You cannot perform other operations.
     *   - If the specified custom route table cannot be found, the route table has been deleted.
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
     * Deletes a virtual border router (VBR) connection for an Enterprise Edition transit router.
     *
     * @remarks
     * The **DeleteTransitRouterVbrAttachment** operation is asynchronous. The system returns a **RequestId**, while running the deletion task in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of the VBR connection.
     * - When the VBR connection is in the **Detaching** state, the VBR is being deleted. You can only query the VBR connection but cannot perform other operations.
     * - If a VBR connection cannot be found, the VBR connection is deleted.
     * Before you call the DeleteTransitRouterVbrAttachment operation, make sure that all request parameters are valid. If a parameter is invalid, the system returns a request ID and does not delete the VBR connection.
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
     * Deletes a virtual border router (VBR) connection for an Enterprise Edition transit router.
     *
     * @remarks
     * The **DeleteTransitRouterVbrAttachment** operation is asynchronous. The system returns a **RequestId**, while running the deletion task in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of the VBR connection.
     * - When the VBR connection is in the **Detaching** state, the VBR is being deleted. You can only query the VBR connection but cannot perform other operations.
     * - If a VBR connection cannot be found, the VBR connection is deleted.
     * Before you call the DeleteTransitRouterVbrAttachment operation, make sure that all request parameters are valid. If a parameter is invalid, the system returns a request ID and does not delete the VBR connection.
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
     * Deletes a virtual private cloud (VPC) connection from an Enterprise Edition transit router.
     *
     * @remarks
     * *DeleteTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     * - If a VPC connection is in the **Detaching** state, the VPC connection is being deleted. You can query the VPC connection but cannot perform other operations.
     * - If a VPC connection cannot be found, it is deleted.
     * ## Prerequisites
     * Before you delete a VPC connection, make sure that the following requirements are met:
     * - No associated forwarding correlation is established between the VPC connection and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](https://help.aliyun.com/document_detail/260944.html).
     * - No route learning correlation is established between the VPC connection and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](https://help.aliyun.com/document_detail/260945.html).
     * - The route table of the VPC does not contain routes that point to the VPC connection. For more information about how to delete routes from a VPC route table, see [DeleteRouteEntry](https://help.aliyun.com/document_detail/36013.html).
     * - The route tables of the Enterprise Edition transit router do not contain a custom route entry whose next hop is the network instance connection. For more information about how to delete custom routes from the route tables of an Enterprise Edition transit router, see [DeleteTransitRouterRouteEntry](https://help.aliyun.com/document_detail/261240.html).
     * - The route tables of the Enterprise Edition transit router do not contain a route that is generated from a prefix list and the next hop is the VPC connection. You can delete such routes by disassociating the route table from the prefix list. For more information, see [DeleteTransitRouterPrefixListAssociation](https://help.aliyun.com/document_detail/445486.html).
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
     * Deletes a virtual private cloud (VPC) connection from an Enterprise Edition transit router.
     *
     * @remarks
     * *DeleteTransitRouterVpcAttachment** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     * - If a VPC connection is in the **Detaching** state, the VPC connection is being deleted. You can query the VPC connection but cannot perform other operations.
     * - If a VPC connection cannot be found, it is deleted.
     * ## Prerequisites
     * Before you delete a VPC connection, make sure that the following requirements are met:
     * - No associated forwarding correlation is established between the VPC connection and the route tables of the Enterprise Edition transit router. For more information about how to delete an associated forwarding correlation, see [DissociateTransitRouterAttachmentFromRouteTable](https://help.aliyun.com/document_detail/260944.html).
     * - No route learning correlation is established between the VPC connection and the route tables of the Enterprise Edition transit router. For more information about how to delete a route learning correlation, see [DisableTransitRouterRouteTablePropagation](https://help.aliyun.com/document_detail/260945.html).
     * - The route table of the VPC does not contain routes that point to the VPC connection. For more information about how to delete routes from a VPC route table, see [DeleteRouteEntry](https://help.aliyun.com/document_detail/36013.html).
     * - The route tables of the Enterprise Edition transit router do not contain a custom route entry whose next hop is the network instance connection. For more information about how to delete custom routes from the route tables of an Enterprise Edition transit router, see [DeleteTransitRouterRouteEntry](https://help.aliyun.com/document_detail/261240.html).
     * - The route tables of the Enterprise Edition transit router do not contain a route that is generated from a prefix list and the next hop is the VPC connection. You can delete such routes by disassociating the route table from the prefix list. For more information, see [DeleteTransitRouterPrefixListAssociation](https://help.aliyun.com/document_detail/445486.html).
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
     * Deletes a VPN connection.
     *
     * @remarks
     * When you call the **DeleteTransitRouterVpnAttachment** operation, ensure that the parameter values are valid. If you specify invalid parameters, the system returns a **RequestId** but does not delete the VPN connection.
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
     * Deletes a VPN connection.
     *
     * @remarks
     * When you call the **DeleteTransitRouterVpnAttachment** operation, ensure that the parameter values are valid. If you specify invalid parameters, the system returns a **RequestId** but does not delete the VPN connection.
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
     * If a multicast member no longer needs to receive multicast traffic, you can call the DeregisterTransitRouterMulticastGroupMembers operation to delete the member from the multicast group.
     *
     * @remarks
     * `DeregisterTransitRouterMulticastGroupMembers` is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the multicast member is not deleted immediately. The deletion task runs in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast member.
     * - If a multicast member is in the **Deregistering** state, it is being deleted. In this state, you can only query the member. You cannot perform other operations.
     * - If the `ListTransitRouterMulticastGroups` operation does not find the multicast member in the multicast domain, the member is deleted.
     * Ensure that you enter correct parameter values when you call the DeregisterTransitRouterMulticastGroupMembers operation. If you enter an incorrect parameter, the operation still returns a RequestId but does not delete the multicast member.
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
     * If a multicast member no longer needs to receive multicast traffic, you can call the DeregisterTransitRouterMulticastGroupMembers operation to delete the member from the multicast group.
     *
     * @remarks
     * `DeregisterTransitRouterMulticastGroupMembers` is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the multicast member is not deleted immediately. The deletion task runs in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast member.
     * - If a multicast member is in the **Deregistering** state, it is being deleted. In this state, you can only query the member. You cannot perform other operations.
     * - If the `ListTransitRouterMulticastGroups` operation does not find the multicast member in the multicast domain, the member is deleted.
     * Ensure that you enter correct parameter values when you call the DeregisterTransitRouterMulticastGroupMembers operation. If you enter an incorrect parameter, the operation still returns a RequestId but does not delete the multicast member.
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
     * If a multicast source no longer needs to send multicast traffic, you can call the DeregisterTransitRouterMulticastGroupSources operation to remove the multicast source from the multicast group.
     *
     * @remarks
     * `DeregisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you send a request, the system returns a `RequestId`, but the multicast source is not deleted immediately. The system deletes the multicast source in the background. You can call `ListTransitRouterMulticastGroups` to query the status of the multicast source.
     * - If a multicast source is in the `Deregistering` state, it is being deleted. In this state, you can only query the multicast source. You cannot perform other operations.
     * - If you cannot find the multicast source in the multicast domain when you call `ListTransitRouterMulticastGroups`, the multicast source has been deleted.
     * Ensure that you specify correct parameter values when you call the DeregisterTransitRouterMulticastGroupSources operation. If you specify an incorrect parameter, the operation returns a RequestId but does not delete the multicast source.
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
     * If a multicast source no longer needs to send multicast traffic, you can call the DeregisterTransitRouterMulticastGroupSources operation to remove the multicast source from the multicast group.
     *
     * @remarks
     * `DeregisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you send a request, the system returns a `RequestId`, but the multicast source is not deleted immediately. The system deletes the multicast source in the background. You can call `ListTransitRouterMulticastGroups` to query the status of the multicast source.
     * - If a multicast source is in the `Deregistering` state, it is being deleted. In this state, you can only query the multicast source. You cannot perform other operations.
     * - If you cannot find the multicast source in the multicast domain when you call `ListTransitRouterMulticastGroups`, the multicast source has been deleted.
     * Ensure that you specify correct parameter values when you call the DeregisterTransitRouterMulticastGroupSources operation. If you specify an incorrect parameter, the operation returns a RequestId but does not delete the multicast source.
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
     * Queries the information about a network instance, such as a virtual private cloud (VPC), a virtual border router, or a Cloud Connect Network (CCN) instance, that is attached to a Cloud Enterprise Network (CEN) instance.
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
     * Queries the information about a network instance, such as a virtual private cloud (VPC), a virtual border router, or a Cloud Connect Network (CCN) instance, that is attached to a Cloud Enterprise Network (CEN) instance.
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
     * Queries the network instances that are attached to a CEN instance.
     *
     * @remarks
     * You can use one of the following methods to query the information about the network instances that are attached to a CEN instance:
     * - You can query all the network instances that are attached to a CEN instance by setting the `CenId` parameter.
     * - You can query the network instances that are attached to a CEN instance in a specified region by setting the `CenId` and `ChildInstanceRegionId` parameters.
     * - You can query a specified type of network instances that are attached to a CEN instance by setting the `CenId` and `ChildInstanceType` parameters.
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
     * Queries the network instances that are attached to a CEN instance.
     *
     * @remarks
     * You can use one of the following methods to query the information about the network instances that are attached to a CEN instance:
     * - You can query all the network instances that are attached to a CEN instance by setting the `CenId` parameter.
     * - You can query the network instances that are attached to a CEN instance in a specified region by setting the `CenId` and `ChildInstanceRegionId` parameters.
     * - You can query a specified type of network instances that are attached to a CEN instance by setting the `CenId` and `ChildInstanceType` parameters.
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
     * Queries the information about bandwidth plans.
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
     * Queries the information about bandwidth plans.
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
     * Queries the routes of a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
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
     * Queries the routes of a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
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
     * Queries the remaining bandwidth of a specified bandwidth plan.
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
     * Queries the remaining bandwidth of a specified bandwidth plan.
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
     * You can call the DescribeCenGeographicSpans operation to query the connected areas supported by Cloud Enterprise Network (CEN).
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
     * You can call the DescribeCenGeographicSpans operation to query the connected areas supported by Cloud Enterprise Network (CEN).
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
     * Call the DescribeCenInterRegionBandwidthLimits operation to query the bandwidth limits for inter-region communication.
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
     * Call the DescribeCenInterRegionBandwidthLimits operation to query the bandwidth limits for inter-region communication.
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
     * Queries the PrivateZone service configurations of a Cloud Enterprise Network (CEN) instance.
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
     * Queries the PrivateZone service configurations of a Cloud Enterprise Network (CEN) instance.
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
     * Queries route entries in a specified region of a Cloud Enterprise Network (CEN) instance.
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
     * Queries route entries in a specified region of a Cloud Enterprise Network (CEN) instance.
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
     * You can call the DescribeCenRouteMaps operation to query the configurations of routing policies.
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
     * You can call the DescribeCenRouteMaps operation to query the configurations of routing policies.
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
     * Queries the health check information for a virtual border router (VBR) in a specified region.
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
     * Queries the health check information for a virtual border router (VBR) in a specified region.
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
     * You can call the DescribeCens operation to query information about Cloud Enterprise Network (CEN) instances that belong to your Alibaba Cloud account. This information includes the status of the instances, whether IPv6 is enabled, and a list of attached bandwidth plans.
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
     * You can call the DescribeCens operation to query information about Cloud Enterprise Network (CEN) instances that belong to your Alibaba Cloud account. This information includes the status of the instances, whether IPv6 is enabled, and a list of attached bandwidth plans.
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
     * You can call the DescribeChildInstanceRegions operation to query the regions where you can attach network instances to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * The regions that CEN supports vary based on the network instance type. You can specify the `ProductType` parameter to query the regions that CEN supports for a specific type of network instance. If you do not specify the `ProductType` parameter, the system queries the regions supported for all network instance types by default.
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
     * You can call the DescribeChildInstanceRegions operation to query the regions where you can attach network instances to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * The regions that CEN supports vary based on the network instance type. You can specify the `ProductType` parameter to query the regions that CEN supports for a specific type of network instance. If you do not specify the `ProductType` parameter, the system queries the regions supported for all network instance types by default.
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
     * Queries regions in an area.
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
     * Queries regions in an area.
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
     * Queries the cross-account network instances that have been authorized for a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * Calling the DescribeGrantRulesToCen operation with invalid parameters returns a **RequestId** but provides no information about the cross-account network instances that the CEN instance is permitted to access.
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
     * Queries the cross-account network instances that have been authorized for a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * Calling the DescribeGrantRulesToCen operation with invalid parameters returns a **RequestId** but provides no information about the cross-account network instances that the CEN instance is permitted to access.
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
     * Queries the permissions that a network instance has on a Cloud Enterprise Network (CEN) instance owned by another Alibaba Cloud account. This operation returns details such as the main account that owns the CEN instance and the payer for the network instance.
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
     * Queries the permissions that a network instance has on a Cloud Enterprise Network (CEN) instance owned by another Alibaba Cloud account. This operation returns details such as the main account that owns the CEN instance and the payer for the network instance.
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
     * Queries whether the routes of virtual private clouds (VPCs) and virtual border routers (VBRs) are advertised to the Cloud Enterprise Network (CEN) instance to which the VCPs and VBRs are attached, the instance type of the next hop of each route, and whether advertised routes can be withdrawn.
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
     * Queries whether the routes of virtual private clouds (VPCs) and virtual border routers (VBRs) are advertised to the Cloud Enterprise Network (CEN) instance to which the VCPs and VBRs are attached, the instance type of the next hop of each route, and whether advertised routes can be withdrawn.
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
     * The DescribeRouteConflict operation queries conflicting routes in a network instance.
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
     * The DescribeRouteConflict operation queries conflicting routes in a network instance.
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
     * Queries the configurations of Alibaba Cloud services that are configured in a Basic Edition transit router.
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
     * Queries the configurations of Alibaba Cloud services that are configured in a Basic Edition transit router.
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
     * Queries the aggregate routes in the route table of an Enterprise Edition transit router.
     *
     * @remarks
     * You can specify the **TransitRouteTableId** and **TransitRouteTableAggregationCidr** parameters to query a specific aggregate route. If you specify only the **TransitRouteTableId** parameter, all aggregate routes in the route table of the Enterprise Edition transit router are queried by default.
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
     * Queries the aggregate routes in the route table of an Enterprise Edition transit router.
     *
     * @remarks
     * You can specify the **TransitRouteTableId** and **TransitRouteTableAggregationCidr** parameters to query a specific aggregate route. If you specify only the **TransitRouteTableId** parameter, all aggregate routes in the route table of the Enterprise Edition transit router are queried by default.
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
     * Detaches a network instance from a Cloud Enterprise Network (CEN) transit router.
     *
     * @remarks
     * The transit router must be a Basic Edition transit router.
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
     * Detaches a network instance from a Cloud Enterprise Network (CEN) transit router.
     *
     * @remarks
     * The transit router must be a Basic Edition transit router.
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
     * Disables the health check feature for a virtual border router (VBR).
     *
     * @remarks
     * *DisableCenVbrHealthCheck** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the status of health check configurations. If the health check configurations cannot be found, the health check configurations are deleted.
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
     * Disables the health check feature for a virtual border router (VBR).
     *
     * @remarks
     * *DisableCenVbrHealthCheck** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the status of health check configurations. If the health check configurations cannot be found, the health check configurations are deleted.
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
     * Deletes a route learning correlation.
     *
     * @remarks
     * *DisableTransitRouterRouteTablePropagation** is an synchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the status of a route learning correlation.
     * - If a route learning correlation is in the **Disabling** state, the route learning correlation is being deleted. You can query the route learning correlation but cannot perform other operations.
     * - If a route learning correlation cannot be found, the route learning correlation is deleted.
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
     * Deletes a route learning correlation.
     *
     * @remarks
     * *DisableTransitRouterRouteTablePropagation** is an synchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the status of a route learning correlation.
     * - If a route learning correlation is in the **Disabling** state, the route learning correlation is being deleted. You can query the route learning correlation but cannot perform other operations.
     * - If a route learning correlation cannot be found, the route learning correlation is deleted.
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
     * Call the DisassociateTransitRouterMulticastDomain operation to dissociate a vSwitch from a multicast domain.
     *
     * @remarks
     * - Before you dissociate a vSwitch from a multicast domain, make sure that no multicast source or member exists on the vSwitch. For more information about how to delete a multicast source and a multicast member, see [DeregisterTransitRouterMulticastGroupSources](https://help.aliyun.com/document_detail/468416.html) and [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/468409.html).
     * - If you provide invalid parameters, the system returns a request ID but does not dissociate the vSwitch from the multicast domain.
     * - **DisassociateTransitRouterMulticastDomain** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the vSwitch is not immediately dissociated from the multicast domain. The system runs the dissociation task in the background. You can call the **ListTransitRouterMulticastDomainAssociations** operation to query the association status of the vSwitch and the multicast domain.
     *   - If the association status is **Dissociating**, the vSwitch is being dissociated from the multicast domain. In this state, you can only query the vSwitch. You cannot perform other operations.
     *   - If the vSwitch cannot be found in the multicast domain, the vSwitch has been successfully dissociated from the multicast domain.
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
     * Call the DisassociateTransitRouterMulticastDomain operation to dissociate a vSwitch from a multicast domain.
     *
     * @remarks
     * - Before you dissociate a vSwitch from a multicast domain, make sure that no multicast source or member exists on the vSwitch. For more information about how to delete a multicast source and a multicast member, see [DeregisterTransitRouterMulticastGroupSources](https://help.aliyun.com/document_detail/468416.html) and [DeregisterTransitRouterMulticastGroupMembers](https://help.aliyun.com/document_detail/468409.html).
     * - If you provide invalid parameters, the system returns a request ID but does not dissociate the vSwitch from the multicast domain.
     * - **DisassociateTransitRouterMulticastDomain** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the vSwitch is not immediately dissociated from the multicast domain. The system runs the dissociation task in the background. You can call the **ListTransitRouterMulticastDomainAssociations** operation to query the association status of the vSwitch and the multicast domain.
     *   - If the association status is **Dissociating**, the vSwitch is being dissociated from the multicast domain. In this state, you can only query the vSwitch. You cannot perform other operations.
     *   - If the vSwitch cannot be found in the multicast domain, the vSwitch has been successfully dissociated from the multicast domain.
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
     * *DissociateTransitRouterAttachmentFromRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the operation runs in the background. The network instance connection is not immediately dissociated from the route table. To query the status of the association, call the **ListTransitRouterRouteTableAssociations** operation.
     * - If the association status is **Dissociating**, the network instance connection is being dissociated from the route table. In this state, you can only query the association. You cannot perform other operations.
     * - If the **ListTransitRouterRouteTableAssociations** operation does not return information about the association, the network instance connection has been dissociated.
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
     * *DissociateTransitRouterAttachmentFromRouteTable** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the operation runs in the background. The network instance connection is not immediately dissociated from the route table. To query the status of the association, call the **ListTransitRouterRouteTableAssociations** operation.
     * - If the association status is **Dissociating**, the network instance connection is being dissociated from the route table. In this state, you can only query the association. You cannot perform other operations.
     * - If the **ListTransitRouterRouteTableAssociations** operation does not return information about the association, the network instance connection has been dissociated.
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
     * Enables the health check feature for a virtual border router (VBR) or modifies the health check configuration of a VBR. Health checks help you promptly detect faulty Express Connect circuits.
     *
     * @remarks
     * You can configure a health check for a VBR instance to monitor the connection status of the Express Connect circuit between your data center and Alibaba Cloud. This helps you promptly identify issues.
     * Before you use the health check feature, note the following:
     * - If your VBR instance uses static routing, create a static route in the data center connected to the VBR instance after you configure the health check. Set the destination CIDR block of the static route to the source IP address of the health check, the subnet mask to 32 bits, and the next hop to the Alibaba Cloud-side IP address of the VBR instance.
     * - If your VBR instance uses the Border Gateway Protocol (BGP) dynamic routing protocol, you do not need to create a route in the data center.
     * - **EnableCenVbrHealthCheck** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the health check is not yet created or modified because the task is still running in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the health check configuration. If the configuration is returned, this indicates that the health check is created or modified.
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
     * Enables the health check feature for a virtual border router (VBR) or modifies the health check configuration of a VBR. Health checks help you promptly detect faulty Express Connect circuits.
     *
     * @remarks
     * You can configure a health check for a VBR instance to monitor the connection status of the Express Connect circuit between your data center and Alibaba Cloud. This helps you promptly identify issues.
     * Before you use the health check feature, note the following:
     * - If your VBR instance uses static routing, create a static route in the data center connected to the VBR instance after you configure the health check. Set the destination CIDR block of the static route to the source IP address of the health check, the subnet mask to 32 bits, and the next hop to the Alibaba Cloud-side IP address of the VBR instance.
     * - If your VBR instance uses the Border Gateway Protocol (BGP) dynamic routing protocol, you do not need to create a route in the data center.
     * - **EnableCenVbrHealthCheck** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the health check is not yet created or modified because the task is still running in the background. You can call the **DescribeCenVbrHealthCheck** operation to query the health check configuration. If the configuration is returned, this indicates that the health check is created or modified.
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
     * Creates a route learning correlation.
     *
     * @remarks
     * After you establish a network instance connection on a transit router, you can create a route learning correlation for the network instance connection. Then, the routes of the connected network instance are automatically advertised to the route table of the transit router. Before you begin, we recommend that you take note of the following rules:
     * - You can create route learning correlations only on Enterprise Edition transit routers. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](https://help.aliyun.com/document_detail/181681.html)
     * - **EnableTransitRouterRouteTablePropagation** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the route learning status between a network instance connection and a route table.
     *   - **Enabling** indicates that a route learning correlation is being created between the network instance connection and route table. You can query the route learning correlation but cannot perform other operations.
     *   - **Active** indicates that the route learning correlation is created between the network instance connection and route table.
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
     * Creates a route learning correlation.
     *
     * @remarks
     * After you establish a network instance connection on a transit router, you can create a route learning correlation for the network instance connection. Then, the routes of the connected network instance are automatically advertised to the route table of the transit router. Before you begin, we recommend that you take note of the following rules:
     * - You can create route learning correlations only on Enterprise Edition transit routers. For more information about the regions and zones that support Enterprise Edition transit routers, see [What is CEN?](https://help.aliyun.com/document_detail/181681.html)
     * - **EnableTransitRouterRouteTablePropagation** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterRouteTablePropagations** operation to query the route learning status between a network instance connection and a route table.
     *   - **Enabling** indicates that a route learning correlation is being created between the network instance connection and route table. You can query the route learning correlation but cannot perform other operations.
     *   - **Active** indicates that the route learning correlation is created between the network instance connection and route table.
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
     * Grants a transit router permissions on network instances that belong to another Alibaba Cloud account. To connect a transit router of Account B to a network instance of Account A, you must use Account A to grant permissions to the transit router of Account B.
     *
     * @remarks
     * - The `GrantInstanceToTransitRouter` operation can be used to grant transit routers permissions on network instances that belong to other Alibaba Cloud accounts, including virtual private clouds (VPCs), virtual border routers (VBRs), IPsec-VPN connections, and Express Connect Router (ECRs).
     *   To grant transit routers permissions on Cloud Connect Network (CCN) instances, call the [GrantInstanceToCbn](https://help.aliyun.com/document_detail/126141.html) operation.
     * - Before you call `GrantInstanceToTransitRouter`, take note of the billing rules, permission limits, and prerequisites on permission management of transit routers. For more information, see [Acquire permissions to connect to a network instance that belongs to another account](https://help.aliyun.com/document_detail/181553.html).
     * - Before you grant a transit router permissions on a network instance, make sure that the following requirements are met:
     *   The account to which the network instance belongs and the account to which the transit router belongs are of the same type.
     *   The ID of the Alibaba Cloud account to which the transit router belongs is obtained.
     *   The ID of the Cloud Enterprise Network (CEN) instance to which the Enterprise Edition transit router belongs is obtained.
     *   Before you grant a transit router permissions on a VBR, contact your account manager to acquire permissions on the VBR.
     *   Before you grant a transit router permissions on an IPsec-VPN connection, make sure that the IPsec-VPN connection is not associated with a resource.
     *   If the IPsec-VPN connection is attached to a VPN gateway, the IPsec-VPN connection cannot be attached to transit routers within the same account or different accounts.
     *   If the IPsec-VPN connection is attached to a transit router, detach the IPsec-VPN connection from the transit router. For more information, see [Delete a network instance connection](https://help.aliyun.com/document_detail/181554.html).
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
     * Grants a transit router permissions on network instances that belong to another Alibaba Cloud account. To connect a transit router of Account B to a network instance of Account A, you must use Account A to grant permissions to the transit router of Account B.
     *
     * @remarks
     * - The `GrantInstanceToTransitRouter` operation can be used to grant transit routers permissions on network instances that belong to other Alibaba Cloud accounts, including virtual private clouds (VPCs), virtual border routers (VBRs), IPsec-VPN connections, and Express Connect Router (ECRs).
     *   To grant transit routers permissions on Cloud Connect Network (CCN) instances, call the [GrantInstanceToCbn](https://help.aliyun.com/document_detail/126141.html) operation.
     * - Before you call `GrantInstanceToTransitRouter`, take note of the billing rules, permission limits, and prerequisites on permission management of transit routers. For more information, see [Acquire permissions to connect to a network instance that belongs to another account](https://help.aliyun.com/document_detail/181553.html).
     * - Before you grant a transit router permissions on a network instance, make sure that the following requirements are met:
     *   The account to which the network instance belongs and the account to which the transit router belongs are of the same type.
     *   The ID of the Alibaba Cloud account to which the transit router belongs is obtained.
     *   The ID of the Cloud Enterprise Network (CEN) instance to which the Enterprise Edition transit router belongs is obtained.
     *   Before you grant a transit router permissions on a VBR, contact your account manager to acquire permissions on the VBR.
     *   Before you grant a transit router permissions on an IPsec-VPN connection, make sure that the IPsec-VPN connection is not associated with a resource.
     *   If the IPsec-VPN connection is attached to a VPN gateway, the IPsec-VPN connection cannot be attached to transit routers within the same account or different accounts.
     *   If the IPsec-VPN connection is attached to a transit router, detach the IPsec-VPN connection from the transit router. For more information, see [Delete a network instance connection](https://help.aliyun.com/document_detail/181554.html).
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
     * Queries the routes that point to a network instance connection. The routes are retrieved from the route table of a network instance that is attached to an Enterprise Edition transit router.
     *
     * @remarks
     * Ensure that you specify valid parameter values when you call the ListCenChildInstanceRouteEntriesToAttachment operation. If you specify an invalid parameter, the system returns a request ID but does not return the routes of the network instance that is connected to the Enterprise Edition transit router.
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
     * Queries the routes that point to a network instance connection. The routes are retrieved from the route table of a network instance that is attached to an Enterprise Edition transit router.
     *
     * @remarks
     * Ensure that you specify valid parameter values when you call the ListCenChildInstanceRouteEntriesToAttachment operation. If you specify an invalid parameter, the system returns a request ID but does not return the routes of the network instance that is connected to the Enterprise Edition transit router.
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
     * You can call the ListCenInterRegionTrafficQosPolicies operation to query Quality of Service (QoS) policies.
     *
     * @remarks
     * Take note of the following items when you call the **ListCenInterRegionTrafficQosPolicies** operation:
     * - You must specify at least one of the **TransitRouterId** and **TrafficQosPolicyId** parameters.
     * - If you do not specify the **TrafficQosPolicyId** parameter, the operation returns information about the QoS policy based on the values of the **TransitRouterId**, **TransitRouterAttachmentId**, **TrafficQosPolicyName**, and **TrafficQosPolicyDescription** parameters. In this case, information about the queues in the policy is not returned, and the **TrafficQosQueues** field is not included in the response.
     * - If you specify the **TrafficQosPolicyId** parameter, the operation returns information about the QoS policy and its queues. The **TrafficQosQueues** field is included in the response. If the **TrafficQosQueues** field is an empty array, only the default queue exists in the QoS policy.
     * - Make sure that you enter valid parameter values. If you enter an invalid parameter, the system returns a RequestId but does not return information about the QoS policy.
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
     * You can call the ListCenInterRegionTrafficQosPolicies operation to query Quality of Service (QoS) policies.
     *
     * @remarks
     * Take note of the following items when you call the **ListCenInterRegionTrafficQosPolicies** operation:
     * - You must specify at least one of the **TransitRouterId** and **TrafficQosPolicyId** parameters.
     * - If you do not specify the **TrafficQosPolicyId** parameter, the operation returns information about the QoS policy based on the values of the **TransitRouterId**, **TransitRouterAttachmentId**, **TrafficQosPolicyName**, and **TrafficQosPolicyDescription** parameters. In this case, information about the queues in the policy is not returned, and the **TrafficQosQueues** field is not included in the response.
     * - If you specify the **TrafficQosPolicyId** parameter, the operation returns information about the QoS policy and its queues. The **TrafficQosQueues** field is included in the response. If the **TrafficQosQueues** field is an empty array, only the default queue exists in the QoS policy.
     * - Make sure that you enter valid parameter values. If you enter an invalid parameter, the system returns a RequestId but does not return information about the QoS policy.
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
     * Queries the queues of a Quality of Service (QoS) policy.
     *
     * @remarks
     * When you call this operation, you must specify at least one of the **TransitRouterId**, **TrafficQosPolicyId**, or **TrafficQosQueueId** parameters.
     * Ensure that you specify valid parameter values. If you specify an invalid parameter, the system returns a **RequestId** but does not return information about the QoS policy.
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
     * Queries the queues of a Quality of Service (QoS) policy.
     *
     * @remarks
     * When you call this operation, you must specify at least one of the **TransitRouterId**, **TrafficQosPolicyId**, or **TrafficQosQueueId** parameters.
     * Ensure that you specify valid parameter values. If you specify an invalid parameter, the system returns a **RequestId** but does not return information about the QoS policy.
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
     * You can call the ListGrantVSwitchEnis operation to query which elastic network interfaces (ENIs) in a virtual private cloud (VPC) can serve as multicast sources or members.
     *
     * @remarks
     * Before you call the `ListGrantVSwitchEnis` operation, make sure that the VPC is connected to a Cloud Enterprise Network (CEN) instance. For more information, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261358.html).
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
     * You can call the ListGrantVSwitchEnis operation to query which elastic network interfaces (ENIs) in a virtual private cloud (VPC) can serve as multicast sources or members.
     *
     * @remarks
     * Before you call the `ListGrantVSwitchEnis` operation, make sure that the VPC is connected to a Cloud Enterprise Network (CEN) instance. For more information, see [CreateTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261358.html).
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
     * You can call the ListGrantVSwitchesToCen operation to query vSwitches in a cross-account VPC that is connected to a CEN instance.
     *
     * @remarks
     * Before you call the `ListGrantVSwitchesToCen` operation, make sure that the CEN instance has been granted permissions on the cross-account VPC. For more information, see [GrantInstanceToCen](https://help.aliyun.com/document_detail/126224.html).
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
     * You can call the ListGrantVSwitchesToCen operation to query vSwitches in a cross-account VPC that is connected to a CEN instance.
     *
     * @remarks
     * Before you call the `ListGrantVSwitchesToCen` operation, make sure that the CEN instance has been granted permissions on the cross-account VPC. For more information, see [GrantInstanceToCen](https://help.aliyun.com/document_detail/126224.html).
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
     * Queries the tags that are attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * When you call the ListTagResources operation, you must specify at least one of the **ResourceId.N** and **Tag.N.Key** request parameters.
     * - If you specify only **ResourceId.N**, the system queries the tags that are attached to the specified CEN instance.
     * - If you specify only **Tag.N.Key**, the system queries all CEN instances that are associated with the specified tag key.
     * - If you specify both **ResourceId.N** and **Tag.N.Key**, the system queries for tags that match the specified tag key and are attached to the specified CEN instance.
     *   - The specified CEN instance must be associated with the specified tag key. Otherwise, an empty result is returned.
     *   - If you specify multiple tag keys, the relationship between the tag keys is **AND**.
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
     * Queries the tags that are attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * When you call the ListTagResources operation, you must specify at least one of the **ResourceId.N** and **Tag.N.Key** request parameters.
     * - If you specify only **ResourceId.N**, the system queries the tags that are attached to the specified CEN instance.
     * - If you specify only **Tag.N.Key**, the system queries all CEN instances that are associated with the specified tag key.
     * - If you specify both **ResourceId.N** and **Tag.N.Key**, the system queries for tags that match the specified tag key and are attached to the specified CEN instance.
     *   - The specified CEN instance must be associated with the specified tag key. Otherwise, an empty result is returned.
     *   - If you specify multiple tag keys, the relationship between the tag keys is **AND**.
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
     * You can call the ListTrafficMarkingPolicies operation to query details about traffic marking policies, such as their status and priority.
     *
     * @remarks
     * When you call the **ListTrafficMarkingPolicies** operation:
     * - You must specify at least one of the **TransitRouterId** and **TrafficMarkingPolicyId** parameters.
     * - If you do not specify the **TrafficMarkingPolicyId** parameter, the operation returns only information about the traffic marking policy based on the **TransitRouterId**, **TrafficMarkingPolicyName**, and **TrafficMarkingPolicyDescription** parameters. Information about traffic classification rules is not returned. The **TrafficMatchRules** field is not included in the response.
     * - If you specify the **TrafficMarkingPolicyId** parameter, the operation returns information about the traffic marking policy and its traffic classification rules. The **TrafficMatchRules** field is included in the response. If the **TrafficMatchRules** field is an empty array, no traffic classification rules are configured for the policy.
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
     * You can call the ListTrafficMarkingPolicies operation to query details about traffic marking policies, such as their status and priority.
     *
     * @remarks
     * When you call the **ListTrafficMarkingPolicies** operation:
     * - You must specify at least one of the **TransitRouterId** and **TrafficMarkingPolicyId** parameters.
     * - If you do not specify the **TrafficMarkingPolicyId** parameter, the operation returns only information about the traffic marking policy based on the **TransitRouterId**, **TrafficMarkingPolicyName**, and **TrafficMarkingPolicyDescription** parameters. Information about traffic classification rules is not returned. The **TrafficMatchRules** field is not included in the response.
     * - If you specify the **TrafficMarkingPolicyId** parameter, the operation returns information about the traffic marking policy and its traffic classification rules. The **TrafficMatchRules** field is included in the response. If the **TrafficMatchRules** field is an empty array, no traffic classification rules are configured for the policy.
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
     * Queries the zones that are available for an Enterprise Edition transit router in a specified region.
     *
     * @remarks
     * - You can call the **ListTransitRouterAvailableResource** operation to query regular zones or zones that support the multicast feature for an Enterprise Edition transit router in a specified region.
     *   - If you do not set the **SupportMulticast** parameter to **true**, the system queries only the regular zones supported by the Enterprise Edition transit router.
     *   - If you set the **SupportMulticast** parameter to **true**, the system queries only the zones that support the multicast feature for the Enterprise Edition transit router.
     * - On May 31, 2022, Cloud Enterprise Network (CEN) upgraded the connection pattern for Enterprise Edition transit routers and Virtual Private Clouds (VPCs). After the upgrade, you do not need to specify a primary and a secondary zone when you connect an Enterprise Edition transit router to a VPC instance. Instead, you can specify one or more zones.
     *   - If your Enterprise Edition transit router has not been upgraded, you must specify a primary and a secondary zone when you connect the transit router to a VPC instance. After you call the **ListTransitRouterAvailableResource** operation, you can retrieve information about the primary and secondary zones from the **MasterZones** and **SlaveZones** parameters.
     *   - If your Enterprise Edition transit router has been upgraded, you can specify any zone when you connect the transit router to a VPC instance. After you call the **ListTransitRouterAvailableResource** operation, you can retrieve information about the supported zones from the **AvailableZones** parameter.
     * For more information about the upgrade for Enterprise Edition transit routers, see [Upgrade of the VPC connection pattern for Enterprise Edition transit routers](https://help.aliyun.com/document_detail/434191.html).
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
     * Queries the zones that are available for an Enterprise Edition transit router in a specified region.
     *
     * @remarks
     * - You can call the **ListTransitRouterAvailableResource** operation to query regular zones or zones that support the multicast feature for an Enterprise Edition transit router in a specified region.
     *   - If you do not set the **SupportMulticast** parameter to **true**, the system queries only the regular zones supported by the Enterprise Edition transit router.
     *   - If you set the **SupportMulticast** parameter to **true**, the system queries only the zones that support the multicast feature for the Enterprise Edition transit router.
     * - On May 31, 2022, Cloud Enterprise Network (CEN) upgraded the connection pattern for Enterprise Edition transit routers and Virtual Private Clouds (VPCs). After the upgrade, you do not need to specify a primary and a secondary zone when you connect an Enterprise Edition transit router to a VPC instance. Instead, you can specify one or more zones.
     *   - If your Enterprise Edition transit router has not been upgraded, you must specify a primary and a secondary zone when you connect the transit router to a VPC instance. After you call the **ListTransitRouterAvailableResource** operation, you can retrieve information about the primary and secondary zones from the **MasterZones** and **SlaveZones** parameters.
     *   - If your Enterprise Edition transit router has been upgraded, you can specify any zone when you connect the transit router to a VPC instance. After you call the **ListTransitRouterAvailableResource** operation, you can retrieve information about the supported zones from the **AvailableZones** parameter.
     * For more information about the upgrade for Enterprise Edition transit routers, see [Upgrade of the VPC connection pattern for Enterprise Edition transit routers](https://help.aliyun.com/document_detail/434191.html).
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
     * Queries the CIDR blocks of a transit router.
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
     * Queries the CIDR blocks of a transit router.
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
     * Queries the allocation details of a CIDR block.
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
     * Queries the allocation details of a CIDR block.
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
     * Queries the information about Express Connect Router (ECR) connections on an Enterprise Edition transit router, such as the connection status, connection ID, and the payer of instance fees.
     *
     * @remarks
     * You can use the following methods to query ECR connection information:
     * *   Specify the ID of an Enterprise Edition transit router.
     * *   Specify the ID of an Enterprise Edition transit router and the ID of the region in which the Enterprise Edition transit router is deployed.
     * *   Configure the **TransitRouterAttachmentId** parameter to specify the ECR connection that you want to query.
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
     * Queries the information about Express Connect Router (ECR) connections on an Enterprise Edition transit router, such as the connection status, connection ID, and the payer of instance fees.
     *
     * @remarks
     * You can use the following methods to query ECR connection information:
     * *   Specify the ID of an Enterprise Edition transit router.
     * *   Specify the ID of an Enterprise Edition transit router and the ID of the region in which the Enterprise Edition transit router is deployed.
     * *   Configure the **TransitRouterAttachmentId** parameter to specify the ECR connection that you want to query.
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
     * You can call the ListTransitRouterMulticastDomainAssociations operation to query the associations between multicast domains and vSwitches.
     *
     * @remarks
     * - When you call this operation, you must specify either the **TransitRouterMulticastDomainId** or **TransitRouterAttachmentId** request parameter. If you specify **TransitRouterAttachmentId**, the system queries the vSwitches that are associated with the multicast domain in the VPC. If you specify **TransitRouterMulticastDomainId**, the system queries the vSwitches that are associated with the specified multicast domain.
     * - When you call the **ListTransitRouterMulticastDomainAssociations** operation, you must provide valid parameter values. If you provide an invalid parameter, the system returns a **RequestId** but does not return the association between the multicast domain and the vSwitch.
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
     * You can call the ListTransitRouterMulticastDomainAssociations operation to query the associations between multicast domains and vSwitches.
     *
     * @remarks
     * - When you call this operation, you must specify either the **TransitRouterMulticastDomainId** or **TransitRouterAttachmentId** request parameter. If you specify **TransitRouterAttachmentId**, the system queries the vSwitches that are associated with the multicast domain in the VPC. If you specify **TransitRouterMulticastDomainId**, the system queries the vSwitches that are associated with the specified multicast domain.
     * - When you call the **ListTransitRouterMulticastDomainAssociations** operation, you must provide valid parameter values. If you provide an invalid parameter, the system returns a **RequestId** but does not return the association between the multicast domain and the vSwitch.
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
     * After a VPC instance is connected to an Enterprise Edition transit router, you can call the ListTransitRouterMulticastDomainVSwitches operation to query information about vSwitches that are attached to multicast domains in the virtual private cloud (VPC) instance.
     *
     * @remarks
     * When you call the ListTransitRouterMulticastDomainVSwitches operation, ensure that the parameter values are correct. If you enter incorrect parameter values, the operation returns a RequestId but does not display information about vSwitches that are attached to multicast domains in the VPC instance.
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
     * After a VPC instance is connected to an Enterprise Edition transit router, you can call the ListTransitRouterMulticastDomainVSwitches operation to query information about vSwitches that are attached to multicast domains in the virtual private cloud (VPC) instance.
     *
     * @remarks
     * When you call the ListTransitRouterMulticastDomainVSwitches operation, ensure that the parameter values are correct. If you enter incorrect parameter values, the operation returns a RequestId but does not display information about vSwitches that are attached to multicast domains in the VPC instance.
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
     * Call the ListTransitRouterMulticastDomains operation to query information about multicast domains, such as their statuses, IDs, and descriptions.
     *
     * @remarks
     * - You must specify both RegionId and CenId. If you specify only RegionId, no information about multicast domains is returned. You can also specify TransitRouterId or TransitRouterMulticastDomainId individually.
     * - Ensure that you specify valid parameter values. If you specify an invalid parameter, the system returns a **RequestId** but does not return the details of the multicast domain.
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
     * Call the ListTransitRouterMulticastDomains operation to query information about multicast domains, such as their statuses, IDs, and descriptions.
     *
     * @remarks
     * - You must specify both RegionId and CenId. If you specify only RegionId, no information about multicast domains is returned. You can also specify TransitRouterId or TransitRouterMulticastDomainId individually.
     * - Ensure that you specify valid parameter values. If you specify an invalid parameter, the system returns a **RequestId** but does not return the details of the multicast domain.
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
     * Queries details about multicast members and sources in a multicast domain.
     *
     * @remarks
     * You can call the `ListTransitRouterMulticastGroups` operation to query information about multicast members and sources. These are collectively referred to as multicast resources.
     * - If you specify the **GroupIpAddress** parameter, you can query information about the multicast resources in a specific multicast group.
     * - If you specify the **VSwitchIds** parameter, you can query information about the multicast resources on specific vSwitches.
     * - If you specify the **PeerTransitRouterMulticastDomains** parameter, you can query information about cross-region multicast resources.
     * - If you specify the **ResourceType** parameter, you can query information about multicast resources of a specific resource type.
     * - If you specify the **ResourceId** parameter, you can query information about the multicast resources on a specific resource.
     * - If you specify only the **TransitRouterMulticastDomainId** parameter, you can query information about all multicast resources in the multicast domain.
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
     * Queries details about multicast members and sources in a multicast domain.
     *
     * @remarks
     * You can call the `ListTransitRouterMulticastGroups` operation to query information about multicast members and sources. These are collectively referred to as multicast resources.
     * - If you specify the **GroupIpAddress** parameter, you can query information about the multicast resources in a specific multicast group.
     * - If you specify the **VSwitchIds** parameter, you can query information about the multicast resources on specific vSwitches.
     * - If you specify the **PeerTransitRouterMulticastDomains** parameter, you can query information about cross-region multicast resources.
     * - If you specify the **ResourceType** parameter, you can query information about multicast resources of a specific resource type.
     * - If you specify the **ResourceId** parameter, you can query information about the multicast resources on a specific resource.
     * - If you specify only the **TransitRouterMulticastDomainId** parameter, you can query information about all multicast resources in the multicast domain.
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
     * Call the ListTransitRouterPeerAttachments operation to query details about the inter-region connections of an Enterprise Edition transit router.
     *
     * @remarks
     * You can query information about the inter-region connections of an Enterprise Edition transit router in one of the following ways:
     * - Query by the ID of the Enterprise Edition transit router instance.
     * - Query by the ID of the Cloud Enterprise Network (CEN) instance and the region ID of the transit router instance.
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
     * Call the ListTransitRouterPeerAttachments operation to query details about the inter-region connections of an Enterprise Edition transit router.
     *
     * @remarks
     * You can query information about the inter-region connections of an Enterprise Edition transit router in one of the following ways:
     * - Query by the ID of the Enterprise Edition transit router instance.
     * - Query by the ID of the Cloud Enterprise Network (CEN) instance and the region ID of the transit router instance.
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
     * Queries the prefix list associations for the route table of an Enterprise Edition transit router.
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
     * Queries the prefix list associations for the route table of an Enterprise Edition transit router.
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
     * Queries the details about routes in the route tables of an Enterprise Edition transit router.
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
     * Queries the details about routes in the route tables of an Enterprise Edition transit router.
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
     * Call the ListTransitRouterRouteTableAssociations operation to query the forwarding associations for a route table of an Enterprise Edition transit router or for a network instance connection.
     *
     * @remarks
     * When you call the **ListTransitRouterRouteTableAssociations** operation, you must specify at least one of the following request parameters: **TransitRouterRouteTableId** and **TransitRouterAttachmentId**.
     * - If you specify only **TransitRouterRouteTableId**, the operation queries the network instance connections that are associated with the specified route table of the Enterprise Edition transit router.
     * - If you specify only **TransitRouterAttachmentId**, the operation queries the route tables of the Enterprise Edition transit router that are associated with the specified network instance connection.
     * - If you specify both **TransitRouterRouteTableId** and **TransitRouterAttachmentId**, the operation queries the forwarding association between the network instance connection and the route table of the Enterprise Edition transit router.
     *   - If a forwarding association exists between the network instance connection and the route table, the details of the forwarding association are returned.
     *   - If no forwarding association exists between the network instance connection and the route table, the **TransitRouterAssociations** array is empty in the response.
     * Make sure that you provide valid parameter values when you call the **ListTransitRouterRouteTableAssociations** operation.
     * If you provide an invalid parameter, the system returns a **RequestId** but does not query the forwarding associations for the route table of the Enterprise Edition transit router or the network instance connection.
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
     * Call the ListTransitRouterRouteTableAssociations operation to query the forwarding associations for a route table of an Enterprise Edition transit router or for a network instance connection.
     *
     * @remarks
     * When you call the **ListTransitRouterRouteTableAssociations** operation, you must specify at least one of the following request parameters: **TransitRouterRouteTableId** and **TransitRouterAttachmentId**.
     * - If you specify only **TransitRouterRouteTableId**, the operation queries the network instance connections that are associated with the specified route table of the Enterprise Edition transit router.
     * - If you specify only **TransitRouterAttachmentId**, the operation queries the route tables of the Enterprise Edition transit router that are associated with the specified network instance connection.
     * - If you specify both **TransitRouterRouteTableId** and **TransitRouterAttachmentId**, the operation queries the forwarding association between the network instance connection and the route table of the Enterprise Edition transit router.
     *   - If a forwarding association exists between the network instance connection and the route table, the details of the forwarding association are returned.
     *   - If no forwarding association exists between the network instance connection and the route table, the **TransitRouterAssociations** array is empty in the response.
     * Make sure that you provide valid parameter values when you call the **ListTransitRouterRouteTableAssociations** operation.
     * If you provide an invalid parameter, the system returns a **RequestId** but does not query the forwarding associations for the route table of the Enterprise Edition transit router or the network instance connection.
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
     * Lists the route propagations for the route table of an Enterprise Edition transit router.
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
     * Lists the route propagations for the route table of an Enterprise Edition transit router.
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
     * Call the ListTransitRouterRouteTables operation to query the route tables associated with an Enterprise Edition transit router.
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
     * Call the ListTransitRouterRouteTables operation to query the route tables associated with an Enterprise Edition transit router.
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
     * Queries information about virtual border router (VBR) connections for an Enterprise Edition transit router. The returned information includes the total number of connections, connection status, connection ID, and the payer for the network instance.
     *
     * @remarks
     * You can query the VBR connections of an Enterprise Edition transit router in one of the following ways:
     * - Query all VBR connections of an Enterprise Edition transit router by specifying the ID of the transit router.
     * - Query all VBR connections of an Enterprise Edition transit router by specifying the ID of the Cloud Enterprise Network (CEN) instance and the region ID of the transit router.
     * - Query a specific VBR connection by specifying the connection ID in the TransitRouterAttachmentId parameter.
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
     * Queries information about virtual border router (VBR) connections for an Enterprise Edition transit router. The returned information includes the total number of connections, connection status, connection ID, and the payer for the network instance.
     *
     * @remarks
     * You can query the VBR connections of an Enterprise Edition transit router in one of the following ways:
     * - Query all VBR connections of an Enterprise Edition transit router by specifying the ID of the transit router.
     * - Query all VBR connections of an Enterprise Edition transit router by specifying the ID of the Cloud Enterprise Network (CEN) instance and the region ID of the transit router.
     * - Query a specific VBR connection by specifying the connection ID in the TransitRouterAttachmentId parameter.
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
     * Queries details about virtual private cloud (VPC) connections on an Enterprise Edition transit router, including the connection status, billing method, and zone, as well as the vSwitches and elastic network interfaces (ENIs) of the connected VPC.
     *
     * @remarks
     * You can query the VPC connections of an Enterprise Edition transit router in one of the following ways:
     * - Specify the ID of an Enterprise Edition transit router to query all its VPC connections.
     * - Specify the ID of a Cloud Enterprise Network (CEN) instance and the region ID of the Enterprise Edition transit router to query all its VPC connections.
     * - Specify the ID of a region that contains an Enterprise Edition transit router to query all VPC connections in that region.
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
     * Queries details about virtual private cloud (VPC) connections on an Enterprise Edition transit router, including the connection status, billing method, and zone, as well as the vSwitches and elastic network interfaces (ENIs) of the connected VPC.
     *
     * @remarks
     * You can query the VPC connections of an Enterprise Edition transit router in one of the following ways:
     * - Specify the ID of an Enterprise Edition transit router to query all its VPC connections.
     * - Specify the ID of a Cloud Enterprise Network (CEN) instance and the region ID of the Enterprise Edition transit router to query all its VPC connections.
     * - Specify the ID of a region that contains an Enterprise Edition transit router to query all VPC connections in that region.
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
     * You can call the ListTransitRouterVpnAttachments operation to query information about VPN connections, such as their status, IPsec-VPN connection ID, and billing method.
     *
     * @remarks
     * The ListTransitRouterVpnAttachments operation supports the following query methods:
     * - Enter only **TransitRouterAttachmentId** to query a specific VPN connection.
     * - Enter only **TransitRouterId** to query all VPN connections that are associated with the specified transit router.
     * - Enter **CenId** and **RegionId** to query VPN connections in a specific region of the specified Cloud Enterprise Network (CEN) instance.
     * When you call the **ListTransitRouterVpnAttachments** operation, make sure that you enter valid parameter values. If you enter invalid parameters, the system returns a **RequestId** but does not return the queried VPN connection information.
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
     * You can call the ListTransitRouterVpnAttachments operation to query information about VPN connections, such as their status, IPsec-VPN connection ID, and billing method.
     *
     * @remarks
     * The ListTransitRouterVpnAttachments operation supports the following query methods:
     * - Enter only **TransitRouterAttachmentId** to query a specific VPN connection.
     * - Enter only **TransitRouterId** to query all VPN connections that are associated with the specified transit router.
     * - Enter **CenId** and **RegionId** to query VPN connections in a specific region of the specified Cloud Enterprise Network (CEN) instance.
     * When you call the **ListTransitRouterVpnAttachments** operation, make sure that you enter valid parameter values. If you enter invalid parameters, the system returns a **RequestId** but does not return the queried VPN connection information.
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
     * You can call the ListTransitRouters operation to query information about transit routers in a Cloud Enterprise Network (CEN) instance, such as the instance type, status, instance ID, and whether the multicast feature is enabled.
     *
     * @remarks
     * When you call this operation to query transit routers in a CEN instance, you can specify the **RegionId** and **TransitRouterId** parameters. Note the following information about these parameters:
     * - If you do not specify **RegionId** or **TransitRouterId**, all transit routers in the CEN instance are queried.
     * - If you specify only **RegionId**, the transit routers in the specified region are queried.
     * - If you specify only **TransitRouterId**, the specified transit router is queried.
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
     * You can call the ListTransitRouters operation to query information about transit routers in a Cloud Enterprise Network (CEN) instance, such as the instance type, status, instance ID, and whether the multicast feature is enabled.
     *
     * @remarks
     * When you call this operation to query transit routers in a CEN instance, you can specify the **RegionId** and **TransitRouterId** parameters. Note the following information about these parameters:
     * - If you do not specify **RegionId** or **TransitRouterId**, all transit routers in the CEN instance are queried.
     * - If you specify only **RegionId**, the transit routers in the specified region are queried.
     * - If you specify only **TransitRouterId**, the specified transit router is queried.
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
     * The ModifyCenAttribute operation modifies the name and description of a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * *ModifyCenAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the CEN instance is not modified immediately. The system modifies the instance in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If a CEN instance is in the **Modifying** state, the modification is in progress. In this state, you can only query the instance and cannot perform other operations.
     * - If a CEN instance is in the **Active** state, the modification is complete.
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
     * The ModifyCenAttribute operation modifies the name and description of a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * *ModifyCenAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the CEN instance is not modified immediately. The system modifies the instance in the background. You can call the **DescribeCens** operation to query the status of the CEN instance.
     * - If a CEN instance is in the **Modifying** state, the modification is in progress. In this state, you can only query the instance and cannot perform other operations.
     * - If a CEN instance is in the **Active** state, the modification is complete.
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
     * You can call the ModifyCenBandwidthPackageAttribute operation to modify the name and description of a bandwidth plan.
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
     * You can call the ModifyCenBandwidthPackageAttribute operation to modify the name and description of a bandwidth plan.
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
     * Modifies the maximum bandwidth of a bandwidth plan.
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
     * Modifies the maximum bandwidth of a bandwidth plan.
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
     * Modifies a routing policy of a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * `ModifyCenRouteMap` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeCenRouteMaps` operation to query the status of a routing policy.
     * - **Modifying**: indicates that the system is modifying the routing policy. You can only query the routing policy, but cannot perform other operations.
     * - **Active**: indicates that the routing policy is modified.
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
     * Modifies a routing policy of a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * `ModifyCenRouteMap` is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the `DescribeCenRouteMaps` operation to query the status of a routing policy.
     * - **Modifying**: indicates that the system is modifying the routing policy. You can only query the routing policy, but cannot perform other operations.
     * - **Active**: indicates that the routing policy is modified.
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
     * Modifies the name, description, and capture window of a flow log.
     *
     * @remarks
     * This operation is executed asynchronously. After receiving a request, the system returns a **request ID** before it finishes modifying the flow log. The task is continued in the backend. You can call `DescribeFlowlogs` to check whether the task has been completed.
     * - If the flow log is in the **Modifying** state, it is still being modified. In this case, you can query information about the flow log but cannot perform other operations on it.
     * - If the flow log is in the **Active** state, the modification task has been completed.
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
     * Modifies the name, description, and capture window of a flow log.
     *
     * @remarks
     * This operation is executed asynchronously. After receiving a request, the system returns a **request ID** before it finishes modifying the flow log. The task is continued in the backend. You can call `DescribeFlowlogs` to check whether the task has been completed.
     * - If the flow log is in the **Modifying** state, it is still being modified. In this case, you can query information about the flow log but cannot perform other operations on it.
     * - If the flow log is in the **Active** state, the modification task has been completed.
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
     * This operation modifies the payer for a cross-account network instance connection to a transit router.
     *
     * @remarks
     * You can use this operation to modify the payer for a cross-account connection to a transit router, but only if the connected network instance is a Virtual Private Cloud (VPC), virtual border router (VBR), or IPsec instance.
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
     * This operation modifies the payer for a cross-account network instance connection to a transit router.
     *
     * @remarks
     * You can use this operation to modify the payer for a cross-account connection to a transit router, but only if the connected network instance is a Virtual Private Cloud (VPC), virtual border router (VBR), or IPsec instance.
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
     * Modifies the name and description of a stream classification rule.
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
     * Modifies the name and description of a stream classification rule.
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
     * You can call the ModifyTransitRouterCidr operation to modify a CIDR block of a transit router.
     *
     * @remarks
     * - Before you modify a CIDR block of a transit router, review the [Limits on transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * - You cannot modify a CIDR block if IP addresses have already been allocated from it.
     * - The **ModifyTransitRouterCidr** operation is synchronous if you do not change the **PublishCidrRoute** parameter. The modification takes effect immediately.
     * - The **ModifyTransitRouterCidr** operation is asynchronous if you change the **PublishCidrRoute** parameter. The system returns a **RequestId**, but the CIDR block is not immediately modified. The modification task runs in the background. You can call the **ListTransitRouterCidr** operation to query the status of the modification.
     *   - If the CIDR block information has not changed, the modification is in progress.
     *   - If the CIDR block information is updated, the modification is successful.
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
     * You can call the ModifyTransitRouterCidr operation to modify a CIDR block of a transit router.
     *
     * @remarks
     * - Before you modify a CIDR block of a transit router, review the [Limits on transit router CIDR blocks](https://help.aliyun.com/document_detail/462635.html).
     * - You cannot modify a CIDR block if IP addresses have already been allocated from it.
     * - The **ModifyTransitRouterCidr** operation is synchronous if you do not change the **PublishCidrRoute** parameter. The modification takes effect immediately.
     * - The **ModifyTransitRouterCidr** operation is asynchronous if you change the **PublishCidrRoute** parameter. The system returns a **RequestId**, but the CIDR block is not immediately modified. The modification task runs in the background. You can call the **ListTransitRouterCidr** operation to query the status of the modification.
     *   - If the CIDR block information has not changed, the modification is in progress.
     *   - If the CIDR block information is updated, the modification is successful.
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
     * You can call the MoveResourceGroup operation to move a Cloud Enterprise Network (CEN) instance or a bandwidth plan to a different resource group.
     *
     * @remarks
     * By default, Cloud Enterprise Network (CEN) instances and bandwidth plans belong to the default resource group. You can call the `MoveResourceGroup` operation to move a CEN instance or a bandwidth plan to a different resource group.
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
     * You can call the MoveResourceGroup operation to move a Cloud Enterprise Network (CEN) instance or a bandwidth plan to a different resource group.
     *
     * @remarks
     * By default, Cloud Enterprise Network (CEN) instances and bandwidth plans belong to the default resource group. You can call the `MoveResourceGroup` operation to move a CEN instance or a bandwidth plan to a different resource group.
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
     * Activates the transit router feature.
     *
     * @remarks
     * You can call the `OpenTransitRouterService` operation to activate the transit router feature free of charge. After the `OpenTransitRouterService` operation succeeds, an order is automatically generated. You can use the returned order ID to query the order information in [Alibaba Cloud User Center](https://usercenter2-intl.aliyun.com/billing/#/account/overview).
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
     * Activates the transit router feature.
     *
     * @remarks
     * You can call the `OpenTransitRouterService` operation to activate the transit router feature free of charge. After the `OpenTransitRouterService` operation succeeds, an order is automatically generated. You can use the returned order ID to query the order information in [Alibaba Cloud User Center](https://usercenter2-intl.aliyun.com/billing/#/account/overview).
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
     * You can call the PublishRouteEntries operation to advertise routes from a virtual private cloud (VPC) or a virtual border router (VBR) to a Cloud Enterprise Network (CEN) instance. If no route conflicts occur, other network instances attached to the CEN instance can learn the advertised routes.
     *
     * @remarks
     * The following table lists the default advertising status for different types of routes in CEN. You can call the PublishRouteEntries operation to advertise routes that are not advertised to CEN by default.
     * | Route                                                | Instance of the route | Advertised to CEN by default |
     * | ---------------------------------------------------- | --------------------- | ---------------------------- |
     * | Route to an ECS instance                             | VPC                   | No                           |
     * | Route to a VPN Gateway                               | VPC                   | No                           |
     * | Route to a high availability (HA) virtual IP address | VPC                   | No                           |
     * | Route to a router interface                          | VPC                   | No                           |
     * | Route to an Elastic Network Interface (ENI)          | VPC                   | No                           |
     * | Route to an IPv6 Gateway                             | VPC                   | No                           |
     * | Route to a NAT Gateway                               | VPC                   | No                           |
     * | VPC system route                                     | VPC                   | Yes                          |
     * | Route to a data center                               | VBR                   | Yes                          |
     * | Border Gateway Protocol (BGP) route                  | VBR                   | Yes                          |
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
     * You can call the PublishRouteEntries operation to advertise routes from a virtual private cloud (VPC) or a virtual border router (VBR) to a Cloud Enterprise Network (CEN) instance. If no route conflicts occur, other network instances attached to the CEN instance can learn the advertised routes.
     *
     * @remarks
     * The following table lists the default advertising status for different types of routes in CEN. You can call the PublishRouteEntries operation to advertise routes that are not advertised to CEN by default.
     * | Route                                                | Instance of the route | Advertised to CEN by default |
     * | ---------------------------------------------------- | --------------------- | ---------------------------- |
     * | Route to an ECS instance                             | VPC                   | No                           |
     * | Route to a VPN Gateway                               | VPC                   | No                           |
     * | Route to a high availability (HA) virtual IP address | VPC                   | No                           |
     * | Route to a router interface                          | VPC                   | No                           |
     * | Route to an Elastic Network Interface (ENI)          | VPC                   | No                           |
     * | Route to an IPv6 Gateway                             | VPC                   | No                           |
     * | Route to a NAT Gateway                               | VPC                   | No                           |
     * | VPC system route                                     | VPC                   | Yes                          |
     * | Route to a data center                               | VBR                   | Yes                          |
     * | Border Gateway Protocol (BGP) route                  | VBR                   | Yes                          |
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
     * Re-advertises an aggregate route.
     *
     * @remarks
     * For aggregate routes that failed to be advertised or were partially advertised, fix the route issue and call the **RefreshTransitRouteTableAggregation** operation to re-advertise the aggregate routes to virtual private clouds (VPCs). If you use the following solutions, the aggregate route is automatically advertised without manual operations:
     * - Delete associated forwarding correlations
     * - Disable route synchronization
     * - Delete the VPC route table
     * - Delete the aggregate route
     * You can call the **DescribeTransitRouteTableAggregationDetail** operation to view the advertisement status of the aggregate route.
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
     * Re-advertises an aggregate route.
     *
     * @remarks
     * For aggregate routes that failed to be advertised or were partially advertised, fix the route issue and call the **RefreshTransitRouteTableAggregation** operation to re-advertise the aggregate routes to virtual private clouds (VPCs). If you use the following solutions, the aggregate route is automatically advertised without manual operations:
     * - Delete associated forwarding correlations
     * - Disable route synchronization
     * - Delete the VPC route table
     * - Delete the aggregate route
     * You can call the **DescribeTransitRouteTableAggregationDetail** operation to view the advertisement status of the aggregate route.
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
     * Creates or adds a multicast member.
     *
     * @remarks
     * Enterprise Edition transit routers support only elastic network interfaces (ENIs) as multicast members. You can call the `RegisterTransitRouterMulticastGroupMembers` operation to specify an ENI in the current region or a different region as a multicast member.
     * - If you specify a value for the **NetworkInterfaceIds** parameter, an ENI in the current region is to be specified as a multicast member. Make sure that the ENI and vSwitch are associated with the multicast group. For more information, see [AssociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429778.html).
     * - If you specify a value for the **PeerTransitRouterMulticastDomains**, a multicast member in a multicast group that belongs to another region but has the same IP address as the current multicast group is to be specified as a multicast member for the current multicast group. Make sure that an inter-region connection is established between the regions. For more information, see [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html).
     *   For example, you created Multicast Group 1 in Multicast Domain 1, which is in the China (Hangzhou) region. You created Multicast Group 2 in Multicast Domain 2, which is in the China (Shanghai) region. Multicast Group 1 and Multicast Group 2 use the same multicast IP address, and Multicast Member 2 is in Multicast Group 2 in the China (Shanghai) region. If you call the `RegisterTransitRouterMulticastGroupMembers` operation to add multicast members to Multicast Group 1 in the China (Hangzhou) region and set **PeerTransitRouterMulticastDomains** to the ID of Multicast Group 2, which is in the China (Shanghai) region, Multicast Member 2, which is in Multicast Domain 2 in the China (Shanghai) region is added to Multicast Group 1 in the China (Hangzhou) region.
     * - `RegisterTransitRouterMulticastGroupMembers` is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of a multicast member.
     *   - If the multicast member is in the **Registering**, the multicast member is being created. In this case, you can query the multicast member but cannot perform other operations on the multicast member.
     *   - If the multicast member is in the **Registered** state, the multicast member is created.
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
     * Creates or adds a multicast member.
     *
     * @remarks
     * Enterprise Edition transit routers support only elastic network interfaces (ENIs) as multicast members. You can call the `RegisterTransitRouterMulticastGroupMembers` operation to specify an ENI in the current region or a different region as a multicast member.
     * - If you specify a value for the **NetworkInterfaceIds** parameter, an ENI in the current region is to be specified as a multicast member. Make sure that the ENI and vSwitch are associated with the multicast group. For more information, see [AssociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429778.html).
     * - If you specify a value for the **PeerTransitRouterMulticastDomains**, a multicast member in a multicast group that belongs to another region but has the same IP address as the current multicast group is to be specified as a multicast member for the current multicast group. Make sure that an inter-region connection is established between the regions. For more information, see [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html).
     *   For example, you created Multicast Group 1 in Multicast Domain 1, which is in the China (Hangzhou) region. You created Multicast Group 2 in Multicast Domain 2, which is in the China (Shanghai) region. Multicast Group 1 and Multicast Group 2 use the same multicast IP address, and Multicast Member 2 is in Multicast Group 2 in the China (Shanghai) region. If you call the `RegisterTransitRouterMulticastGroupMembers` operation to add multicast members to Multicast Group 1 in the China (Hangzhou) region and set **PeerTransitRouterMulticastDomains** to the ID of Multicast Group 2, which is in the China (Shanghai) region, Multicast Member 2, which is in Multicast Domain 2 in the China (Shanghai) region is added to Multicast Group 1 in the China (Hangzhou) region.
     * - `RegisterTransitRouterMulticastGroupMembers` is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call the `ListTransitRouterMulticastGroups` operation to query the status of a multicast member.
     *   - If the multicast member is in the **Registering**, the multicast member is being created. In this case, you can query the multicast member but cannot perform other operations on the multicast member.
     *   - If the multicast member is in the **Registered** state, the multicast member is created.
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
     * Use the RegisterTransitRouterMulticastGroupSources operation to create a multicast source. A multicast source enables one-to-many communication.
     *
     * @remarks
     * - You can specify only an Elastic Network Interface (ENI) as a multicast source.
     * - `RegisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you send a request, the system returns a **RequestId**. The multicast source is created in the background and is not immediately available. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast source.
     *   - If a multicast source is in the **Registering** status, the multicast source is being created. In this status, you can only query the multicast source.
     *   - If a multicast source is in the **Registered** status, the multicast source is created.
     * ### Prerequisites
     * Before you call `RegisterTransitRouterMulticastGroupSources`, ensure that the vSwitch to which the ENI belongs is associated with the multicast domain. For more information, see [AssociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429778.html).
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
     * Use the RegisterTransitRouterMulticastGroupSources operation to create a multicast source. A multicast source enables one-to-many communication.
     *
     * @remarks
     * - You can specify only an Elastic Network Interface (ENI) as a multicast source.
     * - `RegisterTransitRouterMulticastGroupSources` is an asynchronous operation. After you send a request, the system returns a **RequestId**. The multicast source is created in the background and is not immediately available. You can call the `ListTransitRouterMulticastGroups` operation to query the status of the multicast source.
     *   - If a multicast source is in the **Registering** status, the multicast source is being created. In this status, you can only query the multicast source.
     *   - If a multicast source is in the **Registered** status, the multicast source is created.
     * ### Prerequisites
     * Before you call `RegisterTransitRouterMulticastGroupSources`, ensure that the vSwitch to which the ENI belongs is associated with the multicast domain. For more information, see [AssociateTransitRouterMulticastDomain](https://help.aliyun.com/document_detail/429778.html).
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
     * Deletes specified traffic classification rules from a traffic marking policy.
     *
     * @remarks
     * - When you call **RemoveTrafficMatchRuleFromTrafficMarkingPolicy**, take note of the following rules:
     *   - If you specify the ID of a traffic classification rule in the **TrafficMarkRuleIds** parameter, the specified traffic classification rule is deleted.
     *   - If you do not specify a traffic classification rule ID in the **TrafficMarkRuleIds** parameter, no operation is performed after you call this operation.
     *   If you want to delete a traffic classification rule, you must specify the rule ID before you call this operation.
     * - **RemoveTrafficMatchRuleFromTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic classification rule.
     *   - If a traffic classification rule is in the **Deleting** state, the traffic classification rule is being deleted. In this case, you can query the traffic classification rule but cannot perform other operations.
     *   - If a traffic classification rule cannot be found, the traffic classification rule is deleted.
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
     * Deletes specified traffic classification rules from a traffic marking policy.
     *
     * @remarks
     * - When you call **RemoveTrafficMatchRuleFromTrafficMarkingPolicy**, take note of the following rules:
     *   - If you specify the ID of a traffic classification rule in the **TrafficMarkRuleIds** parameter, the specified traffic classification rule is deleted.
     *   - If you do not specify a traffic classification rule ID in the **TrafficMarkRuleIds** parameter, no operation is performed after you call this operation.
     *   If you want to delete a traffic classification rule, you must specify the rule ID before you call this operation.
     * - **RemoveTrafficMatchRuleFromTrafficMarkingPolicy** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTrafficMarkingPolicies** operation to query the status of a traffic classification rule.
     *   - If a traffic classification rule is in the **Deleting** state, the traffic classification rule is being deleted. In this case, you can query the traffic classification rule but cannot perform other operations.
     *   - If a traffic classification rule cannot be found, the traffic classification rule is deleted.
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
     * Removes a traffic classification rule from a traffic marking policy.
     *
     * @remarks
     * ### [](#)Precautions
     * The **RemoveTraficMatchRuleFromTrafficMarkingPolicy** operation is deprecated and will be discontinued soon. To delete a traffic classification rule, call the [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](https://help.aliyun.com/document_detail/452726.html) operation. Maintenance on this document has stopped.
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
     * Removes a traffic classification rule from a traffic marking policy.
     *
     * @remarks
     * ### [](#)Precautions
     * The **RemoveTraficMatchRuleFromTrafficMarkingPolicy** operation is deprecated and will be discontinued soon. To delete a traffic classification rule, call the [RemoveTrafficMatchRuleFromTrafficMarkingPolicy](https://help.aliyun.com/document_detail/452726.html) operation. Maintenance on this document has stopped.
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
     * Replaces the route table that is associated with a network instance connection.
     *
     * @remarks
     * - You can replace the route table that is associated with a network instance connection only if the network instance connection is created by an Enterprise Edition transit router.
     * - **ReplaceTransitRouterRouteTableAssociation** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the operation continues to run in the background. You can call the **ListTransitRouterRouteTableAssociations** operation to query the status of the association.
     *   - If the association status is **Replacing**, the route table is being replaced. In this state, you can only query the association and cannot perform other operations.
     *   - If the association status is **Active**, the route table has been replaced.
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
     * Replaces the route table that is associated with a network instance connection.
     *
     * @remarks
     * - You can replace the route table that is associated with a network instance connection only if the network instance connection is created by an Enterprise Edition transit router.
     * - **ReplaceTransitRouterRouteTableAssociation** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the operation continues to run in the background. You can call the **ListTransitRouterRouteTableAssociations** operation to query the status of the association.
     *   - If the association status is **Replacing**, the route table is being replaced. In this state, you can only query the association and cannot perform other operations.
     *   - If the association status is **Active**, the route table has been replaced.
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
     * Connects an on-premises network to a cloud service.
     *
     * @remarks
     * Cloud services refer to Alibaba Cloud services that use the 100.64.0.0/10 CIDR block to provide services. These cloud services include Object Storage Service (OSS), Simple Log Service (SLS), and Data Transmission Service (DTS). If your on-premises network needs to access a cloud service, you must attach the virtual border router (VBR) or Cloud Connect Network (CCN) instance that is connected to your on-premises network to a Cloud Enterprise Network (CEN) instance. In addition, you must attach a virtual private cloud (VPC) that is deployed in the same region as the cloud service to the CEN instance. This way, your on-premises network can connect to the VPC that is deployed in the same region as the cloud service and access the cloud service through the VPC.
     * - This operation is supported only by Basic Edition transit routers. An on-premises network associated with a VBR can use CEN to access only a cloud service that is deployed in the same region.
     *   For example, if cloud services are deployed in the China (Beijing) region, only on-premises networks connected to VBRs in the China (Beijing) region can access the cloud services.
     * - **ResolveAndRouteServiceInCen** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call **DescribeRouteServicesInCen** to query the status of a cloud service.
     *   - If the cloud service is in the **Creating** state, the connection to the cloud service is being created. In this case, you can query the cloud service but cannot perform other operations.
     *   - If the cloud service is in the **Active** state, the connection to the cloud service is created.
     *   - If the cloud service is in the **Failed** state, the connection to the cloud service failed.
     * ### [](#)Prerequisites
     * Before you call this operation, make sure that the following conditions are met:
     * - The VBR or CCN instance to which your on-premises network is connected is attached to a CEN instance.
     * - A VPC that is deployed in the same region as the cloud service is attached to the CEN instance. For more information, see [AttachCenChildInstance](https://help.aliyun.com/document_detail/65902.html).
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
     * Connects an on-premises network to a cloud service.
     *
     * @remarks
     * Cloud services refer to Alibaba Cloud services that use the 100.64.0.0/10 CIDR block to provide services. These cloud services include Object Storage Service (OSS), Simple Log Service (SLS), and Data Transmission Service (DTS). If your on-premises network needs to access a cloud service, you must attach the virtual border router (VBR) or Cloud Connect Network (CCN) instance that is connected to your on-premises network to a Cloud Enterprise Network (CEN) instance. In addition, you must attach a virtual private cloud (VPC) that is deployed in the same region as the cloud service to the CEN instance. This way, your on-premises network can connect to the VPC that is deployed in the same region as the cloud service and access the cloud service through the VPC.
     * - This operation is supported only by Basic Edition transit routers. An on-premises network associated with a VBR can use CEN to access only a cloud service that is deployed in the same region.
     *   For example, if cloud services are deployed in the China (Beijing) region, only on-premises networks connected to VBRs in the China (Beijing) region can access the cloud services.
     * - **ResolveAndRouteServiceInCen** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the task in the background. You can call **DescribeRouteServicesInCen** to query the status of a cloud service.
     *   - If the cloud service is in the **Creating** state, the connection to the cloud service is being created. In this case, you can query the cloud service but cannot perform other operations.
     *   - If the cloud service is in the **Active** state, the connection to the cloud service is created.
     *   - If the cloud service is in the **Failed** state, the connection to the cloud service failed.
     * ### [](#)Prerequisites
     * Before you call this operation, make sure that the following conditions are met:
     * - The VBR or CCN instance to which your on-premises network is connected is attached to a CEN instance.
     * - A VPC that is deployed in the same region as the cloud service is attached to the CEN instance. For more information, see [AttachCenChildInstance](https://help.aliyun.com/document_detail/65902.html).
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
     * Revokes the permissions that a transit router has on network instances that belong to another Alibaba Cloud account.
     *
     * @remarks
     * `RevokeInstanceFromTransitRouter` can be used to revoke permissions on virtual private clouds (VPCs), virtual border routers (VBRs), IPsec-VPN connections, and Express Connect Router (ECRs) that belong to another Alibaba Cloud account.
     * To revoke permissions on Cloud Connect Network (CCN) instances that belong to another Alibaba Cloud account, call the [RevokeInstanceFromCbn](https://help.aliyun.com/document_detail/126142.html) operation.
     * ### [](#)Prerequisites
     * Before you call `RevokeInstanceFromTransitRouter`, you must detach the network instances from the transit router.
     * - For more information about how to detach VPCs from Enterprise Edition transit routers, see [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html).
     * - For more information about how to detach VBRs from Enterprise Edition transit routers, see [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html).
     * - For more information about how to detach IPsec-VPN connections from Enterprise Edition transit routers, see [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html).
     * - For more information about how to detach ECRs from Enterprise Edition transit routers, see [DeleteTransitRouterEcrAttachment](https://help.aliyun.com/document_detail/443992.html).
     * - For more information about how to detach network instances from Basic Edition transit routers, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
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
     * Revokes the permissions that a transit router has on network instances that belong to another Alibaba Cloud account.
     *
     * @remarks
     * `RevokeInstanceFromTransitRouter` can be used to revoke permissions on virtual private clouds (VPCs), virtual border routers (VBRs), IPsec-VPN connections, and Express Connect Router (ECRs) that belong to another Alibaba Cloud account.
     * To revoke permissions on Cloud Connect Network (CCN) instances that belong to another Alibaba Cloud account, call the [RevokeInstanceFromCbn](https://help.aliyun.com/document_detail/126142.html) operation.
     * ### [](#)Prerequisites
     * Before you call `RevokeInstanceFromTransitRouter`, you must detach the network instances from the transit router.
     * - For more information about how to detach VPCs from Enterprise Edition transit routers, see [DeleteTransitRouterVpcAttachment](https://help.aliyun.com/document_detail/261220.html).
     * - For more information about how to detach VBRs from Enterprise Edition transit routers, see [DeleteTransitRouterVbrAttachment](https://help.aliyun.com/document_detail/261223.html).
     * - For more information about how to detach IPsec-VPN connections from Enterprise Edition transit routers, see [DeleteTransitRouterVpnAttachment](https://help.aliyun.com/document_detail/443992.html).
     * - For more information about how to detach ECRs from Enterprise Edition transit routers, see [DeleteTransitRouterEcrAttachment](https://help.aliyun.com/document_detail/443992.html).
     * - For more information about how to detach network instances from Basic Edition transit routers, see [DetachCenChildInstance](https://help.aliyun.com/document_detail/65915.html).
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
     * Call the RoutePrivateZoneInCenToVpc operation to configure the PrivateZone service.
     *
     * @remarks
     * Alibaba Cloud DNS PrivateZone is a private Domain Name System (DNS) resolution and management service that is based on a Virtual Private Cloud (VPC). After a virtual border router (VBR) instance or a Cloud Connect Network (CCN) instance is attached to a Cloud Enterprise Network (CEN) instance, the associated on-premises network can access the PrivateZone service through the CEN instance.
     * - An on-premises network that is associated with a VBR or CCN instance can access the PrivateZone service only in the same region.
     *   For example, if the PrivateZone service is in the China (Beijing) region, only on-premises networks that are associated with VBR instances in the China (Beijing) region or with CCN instances in the Chinese mainland can access the PrivateZone service.
     * - The **RoutePrivateZoneInCenToVpc** operation is asynchronous. After a request is sent, the system returns a **RequestId**. The configuration is then added in the background. You can call the **DescribeCenPrivateZoneRoutes** operation to query the status of the PrivateZone service.
     *   - If the PrivateZone service is in the **Creating** state, the configuration is being added. In this state, you can only query the configuration and cannot perform other operations.
     *   - If the PrivateZone service is in the **Active** state, the configuration is complete.
     *   - If the PrivateZone service is in the **Failed** state, the configuration failed.
     * #### Prerequisites
     * Before you call the **RoutePrivateZoneInCenToVpc** operation, make sure that the following conditions are met:
     * - The PrivateZone service is deployed. For more information, see [Quick Start for Alibaba Cloud DNS PrivateZone](https://help.aliyun.com/document_detail/64627.html).
     * - The VPC instance associated with the PrivateZone service and the VBR or CCN instance in the access region are attached to the same CEN instance. For more information, see [AttachCenChildInstance](https://help.aliyun.com/document_detail/65902.html).
     * - If an on-premises network connects to Alibaba Cloud through a CCN instance, and the CCN, VPC, and CEN instances belong to different accounts, the CCN instance must be authorized first. For more information, see [Cloud Connect Network authorization](https://help.aliyun.com/document_detail/106674.html).
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
     * Call the RoutePrivateZoneInCenToVpc operation to configure the PrivateZone service.
     *
     * @remarks
     * Alibaba Cloud DNS PrivateZone is a private Domain Name System (DNS) resolution and management service that is based on a Virtual Private Cloud (VPC). After a virtual border router (VBR) instance or a Cloud Connect Network (CCN) instance is attached to a Cloud Enterprise Network (CEN) instance, the associated on-premises network can access the PrivateZone service through the CEN instance.
     * - An on-premises network that is associated with a VBR or CCN instance can access the PrivateZone service only in the same region.
     *   For example, if the PrivateZone service is in the China (Beijing) region, only on-premises networks that are associated with VBR instances in the China (Beijing) region or with CCN instances in the Chinese mainland can access the PrivateZone service.
     * - The **RoutePrivateZoneInCenToVpc** operation is asynchronous. After a request is sent, the system returns a **RequestId**. The configuration is then added in the background. You can call the **DescribeCenPrivateZoneRoutes** operation to query the status of the PrivateZone service.
     *   - If the PrivateZone service is in the **Creating** state, the configuration is being added. In this state, you can only query the configuration and cannot perform other operations.
     *   - If the PrivateZone service is in the **Active** state, the configuration is complete.
     *   - If the PrivateZone service is in the **Failed** state, the configuration failed.
     * #### Prerequisites
     * Before you call the **RoutePrivateZoneInCenToVpc** operation, make sure that the following conditions are met:
     * - The PrivateZone service is deployed. For more information, see [Quick Start for Alibaba Cloud DNS PrivateZone](https://help.aliyun.com/document_detail/64627.html).
     * - The VPC instance associated with the PrivateZone service and the VBR or CCN instance in the access region are attached to the same CEN instance. For more information, see [AttachCenChildInstance](https://help.aliyun.com/document_detail/65902.html).
     * - If an on-premises network connects to Alibaba Cloud through a CCN instance, and the CCN, VPC, and CEN instances belong to different accounts, the CCN instance must be authorized first. For more information, see [Cloud Connect Network authorization](https://help.aliyun.com/document_detail/106674.html).
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
     * You can call the SetCenInterRegionBandwidthLimit operation to set, modify, or delete the inter-region bandwidth between two regions in a bandwidth plan for a Basic Edition transit router.
     *
     * @remarks
     * The target Cloud Enterprise Network (CEN) instance must be associated with a bandwidth plan. For more information, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html) and [AssociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65934.html).
     * ### Limits
     * The target Cloud Enterprise Network (CEN) instance already has a bandwidth plan. For more information, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html) and [AssociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65934.html).
     * You can call the **SetCenInterRegionBandwidthLimit** API to set, modify, or delete the bandwidth for inter-region communication:
     * - The **SetCenInterRegionBandwidthLimit** operation supports setting, modifying, or deleting the inter-region communication bandwidth for Basic Edition transit routers only.
     * - You cannot modify the inter-region communication bandwidth if bandwidth multiplexing is enabled for the inter-region connection.
     * ### Limits
     * - The maximum bandwidth for an inter-region communication cannot exceed the peak bandwidth of the bandwidth plan.
     * - The total bandwidth of all inter-region communications in a bandwidth plan cannot exceed the peak bandwidth of the plan.
     * - You cannot modify the inter-region communication bandwidth if bandwidth multiplexing is enabled for the inter-region connection.
     * - You can use the **SetCenInterRegionBandwidthLimit** API operation to set, modify, or delete the inter-region communication bandwidth for Basic Edition transit routers only.
     *   To set, modify, or delete the inter-region communication bandwidth for an Enterprise Edition transit router, use the [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html), [UpdateTransitRouterPeerAttachmentAttribute](https://help.aliyun.com/document_detail/261229.html), and [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html) API operations.
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
     * You can call the SetCenInterRegionBandwidthLimit operation to set, modify, or delete the inter-region bandwidth between two regions in a bandwidth plan for a Basic Edition transit router.
     *
     * @remarks
     * The target Cloud Enterprise Network (CEN) instance must be associated with a bandwidth plan. For more information, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html) and [AssociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65934.html).
     * ### Limits
     * The target Cloud Enterprise Network (CEN) instance already has a bandwidth plan. For more information, see [CreateCenBandwidthPackage](https://help.aliyun.com/document_detail/65919.html) and [AssociateCenBandwidthPackage](https://help.aliyun.com/document_detail/65934.html).
     * You can call the **SetCenInterRegionBandwidthLimit** API to set, modify, or delete the bandwidth for inter-region communication:
     * - The **SetCenInterRegionBandwidthLimit** operation supports setting, modifying, or deleting the inter-region communication bandwidth for Basic Edition transit routers only.
     * - You cannot modify the inter-region communication bandwidth if bandwidth multiplexing is enabled for the inter-region connection.
     * ### Limits
     * - The maximum bandwidth for an inter-region communication cannot exceed the peak bandwidth of the bandwidth plan.
     * - The total bandwidth of all inter-region communications in a bandwidth plan cannot exceed the peak bandwidth of the plan.
     * - You cannot modify the inter-region communication bandwidth if bandwidth multiplexing is enabled for the inter-region connection.
     * - You can use the **SetCenInterRegionBandwidthLimit** API operation to set, modify, or delete the inter-region communication bandwidth for Basic Edition transit routers only.
     *   To set, modify, or delete the inter-region communication bandwidth for an Enterprise Edition transit router, use the [CreateTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261363.html), [UpdateTransitRouterPeerAttachmentAttribute](https://help.aliyun.com/document_detail/261229.html), and [DeleteTransitRouterPeerAttachment](https://help.aliyun.com/document_detail/261227.html) API operations.
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
     * - A tag consists of a tag key and a tag value. Both the tag key and tag value are required.
     * - If you attach multiple tags to a Cloud Enterprise Network (CEN) instance, the tag keys must be unique for that instance.
     * - You can attach a maximum of 20 tags to a CEN instance.
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
     * - A tag consists of a tag key and a tag value. Both the tag key and tag value are required.
     * - If you attach multiple tags to a Cloud Enterprise Network (CEN) instance, the tag keys must be unique for that instance.
     * - You can attach a maximum of 20 tags to a CEN instance.
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
     * Temporarily upgrades a subscription bandwidth plan of Cloud Enterprise Network (CEN).
     *
     * @remarks
     * Subscription bandwidth packages support temporary upgrade. You can increase the bandwidth for a specified period, responding to traffic fluctuations.
     * The minimum upgrade interval supported is 3 hours. After payment is completed, the bandwidth is immediately upgraded without affecting the service.
     * > After the specified time window ends, the bandwidth limit is restored to the original value. If the actual bandwidth exceeds the limit, packets may be dropped due to network traffic throttling. Plan your upgrade window and match the bandwidth peak to your needs.
     * - Currently, the temporary upgrade feature is not enabled by default. To use it, contact your account manager.
     * - Pay-as-you-go and expired subscription bandwidth packages do not support the temporary upgrade feature.
     * - The **TempUpgradeCenBandwidthPackageSpec** operation is asynchronous. The system first returns a **RequestId**, while running the upgrade task in the background. Call the **DescribeCenBandwidthPackages** API to query the bandwidth package specifications. When they match your request, the upgrade is complete.
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
     * Temporarily upgrades a subscription bandwidth plan of Cloud Enterprise Network (CEN).
     *
     * @remarks
     * Subscription bandwidth packages support temporary upgrade. You can increase the bandwidth for a specified period, responding to traffic fluctuations.
     * The minimum upgrade interval supported is 3 hours. After payment is completed, the bandwidth is immediately upgraded without affecting the service.
     * > After the specified time window ends, the bandwidth limit is restored to the original value. If the actual bandwidth exceeds the limit, packets may be dropped due to network traffic throttling. Plan your upgrade window and match the bandwidth peak to your needs.
     * - Currently, the temporary upgrade feature is not enabled by default. To use it, contact your account manager.
     * - Pay-as-you-go and expired subscription bandwidth packages do not support the temporary upgrade feature.
     * - The **TempUpgradeCenBandwidthPackageSpec** operation is asynchronous. The system first returns a **RequestId**, while running the upgrade task in the background. Call the **DescribeCenBandwidthPackages** API to query the bandwidth package specifications. When they match your request, the upgrade is complete.
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
     * You can call the UnassociateCenBandwidthPackage operation to detach a bandwidth plan from a Cloud Enterprise Network (CEN) instance. After you detach the bandwidth plan, you can attach it to another CEN instance.
     *
     * @remarks
     * Before you call this operation, ensure that no cross-region bandwidth is configured for the bandwidth plan. To delete the cross-region bandwidth, see [SetCenInterRegionBandwidthLimit](https://help.aliyun.com/document_detail/65942.html).
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
     * You can call the UnassociateCenBandwidthPackage operation to detach a bandwidth plan from a Cloud Enterprise Network (CEN) instance. After you detach the bandwidth plan, you can attach it to another CEN instance.
     *
     * @remarks
     * Before you call this operation, ensure that no cross-region bandwidth is configured for the bandwidth plan. To delete the cross-region bandwidth, see [SetCenInterRegionBandwidthLimit](https://help.aliyun.com/document_detail/65942.html).
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
     * Deletes a connection to PrivateZone.
     *
     * @remarks
     * The **UnroutePrivateZoneInCenToVpc** operation is asynchronous. The system returns a **RequestId**, while the system runs the deletion task in the background. Call the **DescribeCenPrivateZoneRoutes** operation to query the PrivateZone status.
     * - The **Deleting** state indicates the PrivateZone connection is being deleted. You can only perform the query operation.
     * - When the specified PrivateZone connection is not found, it has been deleted.
     * If the PrivateZone connection has an access region that is a Cloud Connect Network (CCN) region, you must first delete the PrivateZone connection for the CCN region before you delete the PrivateZone connections for other regions.
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
     * Deletes a connection to PrivateZone.
     *
     * @remarks
     * The **UnroutePrivateZoneInCenToVpc** operation is asynchronous. The system returns a **RequestId**, while the system runs the deletion task in the background. Call the **DescribeCenPrivateZoneRoutes** operation to query the PrivateZone status.
     * - The **Deleting** state indicates the PrivateZone connection is being deleted. You can only perform the query operation.
     * - When the specified PrivateZone connection is not found, it has been deleted.
     * If the PrivateZone connection has an access region that is a Cloud Connect Network (CCN) region, you must first delete the PrivateZone connection for the CCN region before you delete the PrivateZone connections for other regions.
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
     * Modifies the name and description of a quality of service (QoS) policy.
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
     * Modifies the name and description of a quality of service (QoS) policy.
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
     * Modifies the name, description, inter-region bandwidth, and Differentiated Services Code Point (DSCP) value of a quality of service (QoS) queue.
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
     * Modifies the name, description, inter-region bandwidth, and Differentiated Services Code Point (DSCP) value of a quality of service (QoS) queue.
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
     * You can call the UpdateTransitRouter operation to modify the name and description of a TransitRouter instance.
     *
     * @remarks
     * *UpdateTransitRouter** is an asynchronous operation. After you send a request, the system returns a **RequestId**. The TransitRouter instance is not immediately modified because the modification task runs in the background. You can call the **ListTransitRouters** operation to query the status of the TransitRouter instance.
     * - If a TransitRouter instance is in the **Modifying** state, the instance is being modified. In this state, you can only query the instance. You cannot perform other operations.
     * - If a TransitRouter instance is in the **Active** state, the modification is complete.
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
     * You can call the UpdateTransitRouter operation to modify the name and description of a TransitRouter instance.
     *
     * @remarks
     * *UpdateTransitRouter** is an asynchronous operation. After you send a request, the system returns a **RequestId**. The TransitRouter instance is not immediately modified because the modification task runs in the background. You can call the **ListTransitRouters** operation to query the status of the TransitRouter instance.
     * - If a TransitRouter instance is in the **Modifying** state, the instance is being modified. In this state, you can only query the instance. You cannot perform other operations.
     * - If a TransitRouter instance is in the **Active** state, the modification is complete.
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
     * Modifies the name and description of an ECR attachment for an Enterprise Edition Transit Router.
     *
     * @remarks
     * `UpdateTransitRouterEcrAttachmentAttribute` is an asynchronous call. After you send a request, the system returns a request ID, but the ECR attachment is not modified immediately. The modification task runs in the background. You can call `ListTransitRouterEcrAttachments` to query the status of the ECR attachment.
     * If an ECR attachment is in the `Modifying` state, you can only query the attachment and cannot perform other operations on it. When the attachment enters the `Attached` state, the modification is complete.
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
     * Modifies the name and description of an ECR attachment for an Enterprise Edition Transit Router.
     *
     * @remarks
     * `UpdateTransitRouterEcrAttachmentAttribute` is an asynchronous call. After you send a request, the system returns a request ID, but the ECR attachment is not modified immediately. The modification task runs in the background. You can call `ListTransitRouterEcrAttachments` to query the status of the ECR attachment.
     * If an ECR attachment is in the `Modifying` state, you can only query the attachment and cannot perform other operations on it. When the attachment enters the `Attached` state, the modification is complete.
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
     * Modifies an inter-region connection on an Enterprise Edition transit router.
     *
     * @remarks
     * *UpdateTransitRouterPeerAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of an inter-region connection.
     * - If an inter-region connection is in the **Modifying** state, the inter-region connection is being modified. You can query the inter-region connection but cannot perform other operations.
     * - If an inter-region connection is in the **Attached** state, the inter-region connection is modified.
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
     * Modifies an inter-region connection on an Enterprise Edition transit router.
     *
     * @remarks
     * *UpdateTransitRouterPeerAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterPeerAttachments** operation to query the status of an inter-region connection.
     * - If an inter-region connection is in the **Modifying** state, the inter-region connection is being modified. You can query the inter-region connection but cannot perform other operations.
     * - If an inter-region connection is in the **Attached** state, the inter-region connection is modified.
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
     * Modifies the name and description of a route in a route table of an Enterprise Edition transit router.
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
     * Modifies the name and description of a route in a route table of an Enterprise Edition transit router.
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
     * You can call the UpdateTransitRouterRouteTable operation to modify the name and description of a route table for an Enterprise Edition transit router, or to enable or disable multi-region equal-cost multi-path (ECMP) routing.
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
     * You can call the UpdateTransitRouterRouteTable operation to modify the name and description of a route table for an Enterprise Edition transit router, or to enable or disable multi-region equal-cost multi-path (ECMP) routing.
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
     * Modifies the name, description, and automatic route advertising setting for a virtual border router (VBR) connection on an Enterprise Edition transit router.
     *
     * @remarks
     * *UpdateTransitRouterVbrAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the operation is still in progress in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of the VBR connection.
     * - If a VBR connection is in the **Modifying** state, you can only query the VBR connection and cannot perform other operations.
     * - If a VBR connection is in the **Attached** state, the modification is complete.
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
     * Modifies the name, description, and automatic route advertising setting for a virtual border router (VBR) connection on an Enterprise Edition transit router.
     *
     * @remarks
     * *UpdateTransitRouterVbrAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId**, but the operation is still in progress in the background. You can call the **ListTransitRouterVbrAttachments** operation to query the status of the VBR connection.
     * - If a VBR connection is in the **Modifying** state, you can only query the VBR connection and cannot perform other operations.
     * - If a VBR connection is in the **Attached** state, the modification is complete.
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
     * Modifies the name and description of a VPC connection on an Enterprise Edition transit router and to control automatic route advertising to the VPC.
     *
     * @remarks
     * *UpdateTransitRouterVpcAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId** and completes the modification in the background. To query the status of the VPC connection, call **ListTransitRouterVpcAttachments**.
     * - If a VPC connection is in the **Modifying** state, you can only query it.
     * - If a VPC connection is in the **Attached** state, the modification is complete.
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
     * Modifies the name and description of a VPC connection on an Enterprise Edition transit router and to control automatic route advertising to the VPC.
     *
     * @remarks
     * *UpdateTransitRouterVpcAttachmentAttribute** is an asynchronous operation. After you send a request, the system returns a **RequestId** and completes the modification in the background. To query the status of the VPC connection, call **ListTransitRouterVpcAttachments**.
     * - If a VPC connection is in the **Modifying** state, you can only query it.
     * - If a VPC connection is in the **Attached** state, the modification is complete.
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
     * Modifies the zones and vSwitches that are associated with a virtual private cloud (VPC) connection.
     *
     * @remarks
     *   When you add a zone and a vSwitch for a VPC connection, make sure that the vSwitch has at least one idle IP address. When you modify the zones and vSwitches of a VPC connection, the Enterprise Edition transit router creates an elastic network interface (ENI) in the vSwitch. The ENI occupies one IP address in the vSwitch. The ENI forwards traffic between the VPC and the Enterprise Edition transit router.
     * *   **UpdateTransitRouterVpcAttachmentZones** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     *     *   If a VPC connection is in the **Modifying** state, the VPC connection is being modified. You can query the VPC connection but cannot perform other operations.
     *     *   If a VPC connection is in the **Attached** state, the VPC connection is modified.
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
     * Modifies the zones and vSwitches that are associated with a virtual private cloud (VPC) connection.
     *
     * @remarks
     *   When you add a zone and a vSwitch for a VPC connection, make sure that the vSwitch has at least one idle IP address. When you modify the zones and vSwitches of a VPC connection, the Enterprise Edition transit router creates an elastic network interface (ENI) in the vSwitch. The ENI occupies one IP address in the vSwitch. The ENI forwards traffic between the VPC and the Enterprise Edition transit router.
     * *   **UpdateTransitRouterVpcAttachmentZones** is an asynchronous operation. After you send a request, the system returns a **request ID** and runs the task in the background. You can call the **ListTransitRouterVpcAttachments** operation to query the status of a VPC connection.
     *     *   If a VPC connection is in the **Modifying** state, the VPC connection is being modified. You can query the VPC connection but cannot perform other operations.
     *     *   If a VPC connection is in the **Attached** state, the VPC connection is modified.
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
     * Modifies the attributes of a VPN connection attached to an Enterprise Edition Transit Router. You can modify the connection\\"s name, description, and automatic route publishing setting.
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
     * Modifies the attributes of a VPN connection attached to an Enterprise Edition Transit Router. You can modify the connection\\"s name, description, and automatic route publishing setting.
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
     * You can call the WithdrawPublishedRouteEntries operation to revoke routes published from a Virtual Private Cloud (VPC) or Virtual Border Router (VBR) instance to Cloud Enterprise Network.
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
     * You can call the WithdrawPublishedRouteEntries operation to revoke routes published from a Virtual Private Cloud (VPC) or Virtual Border Router (VBR) instance to Cloud Enterprise Network.
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
