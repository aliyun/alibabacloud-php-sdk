<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ActivateRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ActivateRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ActiveFlowLogRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ActiveFlowLogResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddBgpNetworkRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddBgpNetworkResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddCommonBandwidthPackageIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddCommonBandwidthPackageIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddCommonBandwidthPackageIpsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddCommonBandwidthPackageIpsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddGlobalAccelerationInstanceIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddGlobalAccelerationInstanceIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddIPv6TranslatorAclListEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddIPv6TranslatorAclListEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddPublicIpAddressPoolCidrBlockRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddPublicIpAddressPoolCidrBlockResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddSourcesToTrafficMirrorSessionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddSourcesToTrafficMirrorSessionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipAddressProRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipAddressProResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipSegmentAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipSegmentAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateIpv6InternetBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateIpv6InternetBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateVpcIpv6CidrRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateVpcIpv6CidrResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ApplyPhysicalConnectionLOARequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ApplyPhysicalConnectionLOAResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateEipAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateEipAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateGlobalAccelerationInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateGlobalAccelerationInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateHaVipRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateHaVipResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateNetworkAclRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateNetworkAclResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociatePhysicalConnectionToVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociatePhysicalConnectionToVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateRouteTableRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateRouteTableResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateRouteTablesWithVpcGatewayEndpointRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateRouteTablesWithVpcGatewayEndpointResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateRouteTableWithGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateRouteTableWithGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateVpcCidrBlockRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateVpcCidrBlockResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateVpnGatewayWithCertificateRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateVpnGatewayWithCertificateResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AttachDhcpOptionsSetToVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AttachDhcpOptionsSetToVpcResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AttachVbrToVpconnRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AttachVbrToVpconnResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelCommonBandwidthPackageIpBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelCommonBandwidthPackageIpBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CheckCanAllocateVpcPrivateIpAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CheckCanAllocateVpcPrivateIpAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CheckVpnBgpEnabledRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CheckVpnBgpEnabledResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CompletePhysicalConnectionLOARequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CompletePhysicalConnectionLOAResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConfirmPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConfirmPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConnectRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConnectRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConvertBandwidthPackageRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConvertBandwidthPackageResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CopyNetworkAclEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CopyNetworkAclEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBgpGroupRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBgpGroupResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBgpPeerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBgpPeerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCommonBandwidthPackageRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCommonBandwidthPackageResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCustomerGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCustomerGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateDhcpOptionsSetResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateExpressCloudConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateExpressCloudConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateFlowLogRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateFlowLogResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateForwardEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateForwardEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateFullNatEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateFullNatEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateGlobalAccelerationInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateGlobalAccelerationInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHaVipRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHaVipResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpsecServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpsecServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv4GatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv4GatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv6EgressOnlyRuleRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv6EgressOnlyRuleResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv6GatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv6GatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorAclListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorAclListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatIpCidrRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatIpCidrResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionOccupancyOrderRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionOccupancyOrderResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionSetupOrderRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionSetupOrderResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePublicIpAddressPoolRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePublicIpAddressPoolResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteTableRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteTableResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSnatEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSnatEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSslVpnClientCertRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSslVpnClientCertResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSslVpnServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSslVpnServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorSessionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorSessionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVbrHaRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVbrHaResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVcoRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVcoRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcGatewayEndpointRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcGatewayEndpointResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpconnFromVbrRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpconnFromVbrResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcPrefixListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcPrefixListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnAttachmentRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnAttachmentResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnPbrRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnPbrRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVSwitchRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVSwitchResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeactivateRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeactivateRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeactiveFlowLogRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeactiveFlowLogResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpGroupRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpGroupResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpNetworkRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpNetworkResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpPeerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpPeerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteCommonBandwidthPackageRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteCommonBandwidthPackageResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteCustomerGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteCustomerGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteDhcpOptionsSetResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteFlowLogRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteFlowLogResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteForwardEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteForwardEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteFullNatEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteFullNatEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteGlobalAccelerationInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteGlobalAccelerationInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteHaVipRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteHaVipResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpsecServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpsecServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv4GatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv4GatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6EgressOnlyRuleRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6EgressOnlyRuleResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6GatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6GatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6InternetBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6InternetBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorAclListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorAclListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNatGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNatGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNatIpCidrRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNatIpCidrResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNatIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNatIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNetworkAclRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNetworkAclResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletePhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletePhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletePublicIpAddressPoolCidrBlockRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletePublicIpAddressPoolCidrBlockResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletePublicIpAddressPoolRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletePublicIpAddressPoolResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteTableRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteTableResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSnatEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSnatEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSslVpnClientCertRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSslVpnClientCertResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSslVpnServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSslVpnServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteTrafficMirrorFilterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteTrafficMirrorFilterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteTrafficMirrorFilterRulesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteTrafficMirrorFilterRulesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteTrafficMirrorSessionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteTrafficMirrorSessionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVbrHaRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVbrHaResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVcoRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVcoRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcGatewayEndpointRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcGatewayEndpointResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcPrefixListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcPrefixListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnAttachmentRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnAttachmentResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnPbrRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnPbrRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVSwitchRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVSwitchResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletionProtectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletionProtectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeForwardTableEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeForwardTableEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHighDefinitionMonitorLogAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHighDefinitionMonitorLogAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOARequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePublicIpAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePublicIpAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfaceAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfaceAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVbrHaRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVbrHaResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnCrossAccountAuthorizationsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnCrossAccountAuthorizationsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnSslServerLogsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnSslServerLogsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVRoutersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVRoutersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DetachDhcpOptionsSetFromVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DetachDhcpOptionsSetFromVpcResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DisableNatGatewayEcsMetricRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DisableNatGatewayEcsMetricResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DisableVpcClassicLinkRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DisableVpcClassicLinkResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DissociateRouteTableFromGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DissociateRouteTableFromGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DissociateRouteTablesFromVpcGatewayEndpointRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DissociateRouteTablesFromVpcGatewayEndpointResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DissociateVpnGatewayWithCertificateRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DissociateVpnGatewayWithCertificateResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableNatGatewayEcsMetricRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableNatGatewayEcsMetricResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnablePhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnablePhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableVpcClassicLinkRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableVpcClassicLinkResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableVpcIpv4GatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableVpcIpv4GatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetFlowLogServiceStatusRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetFlowLogServiceStatusResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetIpv4GatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetIpv4GatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayConvertStatusRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayConvertStatusResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetPhysicalConnectionServiceStatusRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetPhysicalConnectionServiceStatusResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetTrafficMirrorServiceStatusRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetTrafficMirrorServiceStatusResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcGatewayEndpointAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcGatewayEndpointAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListAssociationsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListAssociationsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GrantInstanceToCenRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GrantInstanceToCenResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListEnhanhcedNatGatewayAvailableZonesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListEnhanhcedNatGatewayAvailableZonesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListFullNatEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListFullNatEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpv4GatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpv4GatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpCidrsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpCidrsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolCidrBlocksRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolCidrBlocksResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcEndpointServicesByEndUserRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcEndpointServicesByEndUserResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcGatewayEndpointsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcGatewayEndpointsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBgpGroupAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBgpGroupAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBgpPeerAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBgpPeerAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageInternetChargeTypeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageInternetChargeTypeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageIpBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageIpBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCustomerGatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCustomerGatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyEipAddressAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyEipAddressAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressCloudConnectionAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressCloudConnectionAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressCloudConnectionBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressCloudConnectionBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyFlowLogAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyFlowLogAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyForwardEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyForwardEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyFullNatEntryAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyFullNatEntryAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyGlobalAccelerationInstanceAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyGlobalAccelerationInstanceAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyGlobalAccelerationInstanceSpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyGlobalAccelerationInstanceSpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyHaVipAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyHaVipAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6AddressAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6AddressAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6GatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6GatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6GatewaySpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6GatewaySpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6InternetBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6InternetBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAclAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAclAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAclListEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAclListEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewaySpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewaySpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatIpAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatIpAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatIpCidrAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatIpCidrAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNetworkAclAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNetworkAclAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyPhysicalConnectionAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyPhysicalConnectionAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouterInterfaceAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouterInterfaceAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouterInterfaceSpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouterInterfaceSpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouteTableAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouteTableAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySnatEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySnatEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySslVpnClientCertRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySslVpnClientCertResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySslVpnServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySslVpnServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVcoRouteEntryWeightRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVcoRouteEntryWeightResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVirtualBorderRouterAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVirtualBorderRouterAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcPrefixListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcPrefixListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnGatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnGatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnPbrRouteEntryWeightRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnPbrRouteEntryWeightResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnRouteEntryWeightRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnRouteEntryWeightResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVRouterAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVRouterAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVSwitchAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVSwitchAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\OpenFlowLogServiceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\OpenFlowLogServiceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\OpenPhysicalConnectionServiceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\OpenPhysicalConnectionServiceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\OpenTrafficMirrorServiceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\OpenTrafficMirrorServiceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\PublishVpnRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\PublishVpnRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RecoverPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RecoverPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RecoverVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RecoverVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReleaseEipAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReleaseEipAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReleaseEipSegmentAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReleaseEipSegmentAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveCommonBandwidthPackageIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveCommonBandwidthPackageIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveGlobalAccelerationInstanceIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveGlobalAccelerationInstanceIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveIPv6TranslatorAclListEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveIPv6TranslatorAclListEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveSourcesFromTrafficMirrorSessionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveSourcesFromTrafficMirrorSessionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReplaceVpcDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReplaceVpcDhcpOptionsSetResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RetryVpcPrefixListAssociationRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RetryVpcPrefixListAssociationResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RevokeInstanceFromCenRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RevokeInstanceFromCenResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TerminatePhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TerminatePhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TerminateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TerminateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateEipAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateEipAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateGlobalAccelerationInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateGlobalAccelerationInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateHaVipRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateHaVipResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateNetworkAclRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateNetworkAclResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociatePhysicalConnectionFromVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociatePhysicalConnectionFromVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateRouteTableRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateRouteTableResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateVpcCidrBlockRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateVpcCidrBlockResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateDhcpOptionsSetAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateDhcpOptionsSetAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateGatewayRouteTableEntryAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateGatewayRouteTableEntryAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateIpsecServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateIpsecServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateIpv4GatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateIpv4GatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNatGatewayNatTypeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNatGatewayNatTypeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdatePublicIpAddressPoolAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdatePublicIpAddressPoolAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateTrafficMirrorFilterAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateTrafficMirrorFilterAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateTrafficMirrorFilterRuleAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateTrafficMirrorFilterRuleAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateTrafficMirrorSessionAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateTrafficMirrorSessionAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateVirtualBorderBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateVirtualBorderBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateVirtualPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateVirtualPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateVpcGatewayEndpointAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateVpcGatewayEndpointAttributeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Vpc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'vpc.aliyuncs.com',
            'cn-beijing'                  => 'vpc.aliyuncs.com',
            'cn-hangzhou'                 => 'vpc.aliyuncs.com',
            'cn-shanghai'                 => 'vpc.aliyuncs.com',
            'cn-shenzhen'                 => 'vpc.aliyuncs.com',
            'cn-hongkong'                 => 'vpc.aliyuncs.com',
            'ap-southeast-1'              => 'vpc.aliyuncs.com',
            'us-east-1'                   => 'vpc.aliyuncs.com',
            'us-west-1'                   => 'vpc.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'vpc.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'vpc.aliyuncs.com',
            'cn-north-2-gov-1'            => 'vpc.aliyuncs.com',
            'ap-northeast-2-pop'          => 'vpc.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'vpc.aliyuncs.com',
            'cn-beijing-gov-1'            => 'vpc.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'vpc.aliyuncs.com',
            'cn-edge-1'                   => 'vpc-nebula.cn-qingdao-nebula.aliyuncs.com',
            'cn-fujian'                   => 'vpc.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'vpc.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'vpc.aliyuncs.com',
            'cn-hangzhou-finance'         => 'vpc.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'vpc.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'vpc.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'vpc.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'vpc.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'vpc.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'vpc.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'vpc-nebula.cn-qingdao-nebula.aliyuncs.com',
            'cn-qingdao-nebula'           => 'vpc-nebula.cn-qingdao-nebula.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'vpc.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'vpc.aliyuncs.com',
            'cn-shanghai-inner'           => 'vpc.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'vpc.aliyuncs.com',
            'cn-shenzhen-inner'           => 'vpc.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'vpc.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'vpc.aliyuncs.com',
            'cn-wuhan'                    => 'vpc.aliyuncs.com',
            'cn-yushanfang'               => 'vpc.aliyuncs.com',
            'cn-zhangbei'                 => 'vpc.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'vpc.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'vpc.cn-zhangjiakou.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'vpc-nebula.cn-qingdao-nebula.aliyuncs.com',
            'eu-west-1-oxs'               => 'vpc-nebula.cn-shenzhen-cloudstone.aliyuncs.com',
            'rus-west-1-pop'              => 'vpc.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vpc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateRouterInterfaceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ActivateRouterInterfaceResponse
     */
    public function activateRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->routerInterfaceId)) {
            $query['RouterInterfaceId'] = $request->routerInterfaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateRouterInterface',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateRouterInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ActiveFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ActiveFlowLogResponse
     */
    public function activeFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'version'     => '2016-04-28',
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
     * @param AddBgpNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddBgpNetworkResponse
     */
    public function addBgpNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dstCidrBlock)) {
            $query['DstCidrBlock'] = $request->dstCidrBlock;
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
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBgpNetwork',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBgpNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBgpNetworkRequest $request
     *
     * @return AddBgpNetworkResponse
     */
    public function addBgpNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBgpNetworkWithOptions($request, $runtime);
    }

    /**
     * @param AddCommonBandwidthPackageIpRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddCommonBandwidthPackageIpResponse
     */
    public function addCommonBandwidthPackageIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipInstanceId)) {
            $query['IpInstanceId'] = $request->ipInstanceId;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
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
            'action'      => 'AddCommonBandwidthPackageIp',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCommonBandwidthPackageIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCommonBandwidthPackageIpRequest $request
     *
     * @return AddCommonBandwidthPackageIpResponse
     */
    public function addCommonBandwidthPackageIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCommonBandwidthPackageIpWithOptions($request, $runtime);
    }

    /**
     * @param AddCommonBandwidthPackageIpsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AddCommonBandwidthPackageIpsResponse
     */
    public function addCommonBandwidthPackageIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipInstanceIds)) {
            $query['IpInstanceIds'] = $request->ipInstanceIds;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
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
            'action'      => 'AddCommonBandwidthPackageIps',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCommonBandwidthPackageIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCommonBandwidthPackageIpsRequest $request
     *
     * @return AddCommonBandwidthPackageIpsResponse
     */
    public function addCommonBandwidthPackageIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCommonBandwidthPackageIpsWithOptions($request, $runtime);
    }

    /**
     * @param AddGlobalAccelerationInstanceIpRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddGlobalAccelerationInstanceIpResponse
     */
    public function addGlobalAccelerationInstanceIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalAccelerationInstanceId)) {
            $query['GlobalAccelerationInstanceId'] = $request->globalAccelerationInstanceId;
        }
        if (!Utils::isUnset($request->ipInstanceId)) {
            $query['IpInstanceId'] = $request->ipInstanceId;
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
            'action'      => 'AddGlobalAccelerationInstanceIp',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGlobalAccelerationInstanceIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGlobalAccelerationInstanceIpRequest $request
     *
     * @return AddGlobalAccelerationInstanceIpResponse
     */
    public function addGlobalAccelerationInstanceIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGlobalAccelerationInstanceIpWithOptions($request, $runtime);
    }

    /**
     * @param AddIPv6TranslatorAclListEntryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddIPv6TranslatorAclListEntryResponse
     */
    public function addIPv6TranslatorAclListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntryComment)) {
            $query['AclEntryComment'] = $request->aclEntryComment;
        }
        if (!Utils::isUnset($request->aclEntryIp)) {
            $query['AclEntryIp'] = $request->aclEntryIp;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
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
            'action'      => 'AddIPv6TranslatorAclListEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIPv6TranslatorAclListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddIPv6TranslatorAclListEntryRequest $request
     *
     * @return AddIPv6TranslatorAclListEntryResponse
     */
    public function addIPv6TranslatorAclListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIPv6TranslatorAclListEntryWithOptions($request, $runtime);
    }

    /**
     * @param AddPublicIpAddressPoolCidrBlockRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddPublicIpAddressPoolCidrBlockResponse
     */
    public function addPublicIpAddressPoolCidrBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
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
        if (!Utils::isUnset($request->publicIpAddressPoolId)) {
            $query['PublicIpAddressPoolId'] = $request->publicIpAddressPoolId;
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
            'action'      => 'AddPublicIpAddressPoolCidrBlock',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPublicIpAddressPoolCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddPublicIpAddressPoolCidrBlockRequest $request
     *
     * @return AddPublicIpAddressPoolCidrBlockResponse
     */
    public function addPublicIpAddressPoolCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPublicIpAddressPoolCidrBlockWithOptions($request, $runtime);
    }

    /**
     * @param AddSourcesToTrafficMirrorSessionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AddSourcesToTrafficMirrorSessionResponse
     */
    public function addSourcesToTrafficMirrorSessionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->trafficMirrorSessionId)) {
            $query['TrafficMirrorSessionId'] = $request->trafficMirrorSessionId;
        }
        if (!Utils::isUnset($request->trafficMirrorSourceIds)) {
            $query['TrafficMirrorSourceIds'] = $request->trafficMirrorSourceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSourcesToTrafficMirrorSession',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSourcesToTrafficMirrorSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSourcesToTrafficMirrorSessionRequest $request
     *
     * @return AddSourcesToTrafficMirrorSessionResponse
     */
    public function addSourcesToTrafficMirrorSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSourcesToTrafficMirrorSessionWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->netmode)) {
            $query['Netmode'] = $request->netmode;
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
        if (!Utils::isUnset($request->publicIpAddressPoolId)) {
            $query['PublicIpAddressPoolId'] = $request->publicIpAddressPoolId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->securityProtectionTypes)) {
            $query['SecurityProtectionTypes'] = $request->securityProtectionTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateEipAddress',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AllocateEipAddressProRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AllocateEipAddressProResponse
     */
    public function allocateEipAddressProWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->ipAddress)) {
            $query['IpAddress'] = $request->ipAddress;
        }
        if (!Utils::isUnset($request->netmode)) {
            $query['Netmode'] = $request->netmode;
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
        if (!Utils::isUnset($request->publicIpAddressPoolId)) {
            $query['PublicIpAddressPoolId'] = $request->publicIpAddressPoolId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->securityProtectionTypes)) {
            $query['SecurityProtectionTypes'] = $request->securityProtectionTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateEipAddressPro',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateEipAddressProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateEipAddressProRequest $request
     *
     * @return AllocateEipAddressProResponse
     */
    public function allocateEipAddressPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipAddressProWithOptions($request, $runtime);
    }

    /**
     * @param AllocateEipSegmentAddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AllocateEipSegmentAddressResponse
     */
    public function allocateEipSegmentAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->eipMask)) {
            $query['EipMask'] = $request->eipMask;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->netmode)) {
            $query['Netmode'] = $request->netmode;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'AllocateEipSegmentAddress',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateEipSegmentAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateEipSegmentAddressRequest $request
     *
     * @return AllocateEipSegmentAddressResponse
     */
    public function allocateEipSegmentAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipSegmentAddressWithOptions($request, $runtime);
    }

    /**
     * @param AllocateIpv6InternetBandwidthRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AllocateIpv6InternetBandwidthResponse
     */
    public function allocateIpv6InternetBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->ipv6AddressId)) {
            $query['Ipv6AddressId'] = $request->ipv6AddressId;
        }
        if (!Utils::isUnset($request->ipv6GatewayId)) {
            $query['Ipv6GatewayId'] = $request->ipv6GatewayId;
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
            'action'      => 'AllocateIpv6InternetBandwidth',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateIpv6InternetBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateIpv6InternetBandwidthRequest $request
     *
     * @return AllocateIpv6InternetBandwidthResponse
     */
    public function allocateIpv6InternetBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateIpv6InternetBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param AllocateVpcIpv6CidrRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AllocateVpcIpv6CidrResponse
     */
    public function allocateVpcIpv6CidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressPoolType)) {
            $query['AddressPoolType'] = $request->addressPoolType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipv6CidrBlock)) {
            $query['Ipv6CidrBlock'] = $request->ipv6CidrBlock;
        }
        if (!Utils::isUnset($request->ipv6Isp)) {
            $query['Ipv6Isp'] = $request->ipv6Isp;
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
            'action'      => 'AllocateVpcIpv6Cidr',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateVpcIpv6CidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateVpcIpv6CidrRequest $request
     *
     * @return AllocateVpcIpv6CidrResponse
     */
    public function allocateVpcIpv6Cidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateVpcIpv6CidrWithOptions($request, $runtime);
    }

    /**
     * @param ApplyPhysicalConnectionLOARequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ApplyPhysicalConnectionLOAResponse
     */
    public function applyPhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->companyName)) {
            $query['CompanyName'] = $request->companyName;
        }
        if (!Utils::isUnset($request->constructionTime)) {
            $query['ConstructionTime'] = $request->constructionTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lineType)) {
            $query['LineType'] = $request->lineType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->PMInfo)) {
            $query['PMInfo'] = $request->PMInfo;
        }
        if (!Utils::isUnset($request->peerLocation)) {
            $query['PeerLocation'] = $request->peerLocation;
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
        if (!Utils::isUnset($request->si)) {
            $query['Si'] = $request->si;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyPhysicalConnectionLOA',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyPhysicalConnectionLOAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyPhysicalConnectionLOARequest $request
     *
     * @return ApplyPhysicalConnectionLOAResponse
     */
    public function applyPhysicalConnectionLOA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyPhysicalConnectionLOAWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceRegionId)) {
            $query['InstanceRegionId'] = $request->instanceRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
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
            'action'      => 'AssociateEipAddress',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AssociateGlobalAccelerationInstanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return AssociateGlobalAccelerationInstanceResponse
     */
    public function associateGlobalAccelerationInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServerId)) {
            $query['BackendServerId'] = $request->backendServerId;
        }
        if (!Utils::isUnset($request->backendServerRegionId)) {
            $query['BackendServerRegionId'] = $request->backendServerRegionId;
        }
        if (!Utils::isUnset($request->backendServerType)) {
            $query['BackendServerType'] = $request->backendServerType;
        }
        if (!Utils::isUnset($request->globalAccelerationInstanceId)) {
            $query['GlobalAccelerationInstanceId'] = $request->globalAccelerationInstanceId;
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
            'action'      => 'AssociateGlobalAccelerationInstance',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateGlobalAccelerationInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateGlobalAccelerationInstanceRequest $request
     *
     * @return AssociateGlobalAccelerationInstanceResponse
     */
    public function associateGlobalAccelerationInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateGlobalAccelerationInstanceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->haVipId)) {
            $query['HaVipId'] = $request->haVipId;
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
            'action'      => 'AssociateHaVip',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateHaVipResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AssociateNetworkAclRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssociateNetworkAclResponse
     */
    public function associateNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
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
            'action'      => 'AssociateNetworkAcl',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateNetworkAclRequest $request
     *
     * @return AssociateNetworkAclResponse
     */
    public function associateNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @param AssociatePhysicalConnectionToVirtualBorderRouterRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return AssociatePhysicalConnectionToVirtualBorderRouterResponse
     */
    public function associatePhysicalConnectionToVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->circuitCode)) {
            $query['CircuitCode'] = $request->circuitCode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableIpv6)) {
            $query['EnableIpv6'] = $request->enableIpv6;
        }
        if (!Utils::isUnset($request->localGatewayIp)) {
            $query['LocalGatewayIp'] = $request->localGatewayIp;
        }
        if (!Utils::isUnset($request->localIpv6GatewayIp)) {
            $query['LocalIpv6GatewayIp'] = $request->localIpv6GatewayIp;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->peerGatewayIp)) {
            $query['PeerGatewayIp'] = $request->peerGatewayIp;
        }
        if (!Utils::isUnset($request->peerIpv6GatewayIp)) {
            $query['PeerIpv6GatewayIp'] = $request->peerIpv6GatewayIp;
        }
        if (!Utils::isUnset($request->peeringIpv6SubnetMask)) {
            $query['PeeringIpv6SubnetMask'] = $request->peeringIpv6SubnetMask;
        }
        if (!Utils::isUnset($request->peeringSubnetMask)) {
            $query['PeeringSubnetMask'] = $request->peeringSubnetMask;
        }
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        if (!Utils::isUnset($request->vlanId)) {
            $query['VlanId'] = $request->vlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociatePhysicalConnectionToVirtualBorderRouter',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociatePhysicalConnectionToVirtualBorderRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociatePhysicalConnectionToVirtualBorderRouterRequest $request
     *
     * @return AssociatePhysicalConnectionToVirtualBorderRouterResponse
     */
    public function associatePhysicalConnectionToVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associatePhysicalConnectionToVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param AssociateRouteTableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssociateRouteTableResponse
     */
    public function associateRouteTableWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateRouteTable',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateRouteTableRequest $request
     *
     * @return AssociateRouteTableResponse
     */
    public function associateRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param AssociateRouteTableWithGatewayRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return AssociateRouteTableWithGatewayResponse
     */
    public function associateRouteTableWithGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'AssociateRouteTableWithGateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateRouteTableWithGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateRouteTableWithGatewayRequest $request
     *
     * @return AssociateRouteTableWithGatewayResponse
     */
    public function associateRouteTableWithGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateRouteTableWithGatewayWithOptions($request, $runtime);
    }

    /**
     * @param AssociateRouteTablesWithVpcGatewayEndpointRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return AssociateRouteTablesWithVpcGatewayEndpointResponse
     */
    public function associateRouteTablesWithVpcGatewayEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
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
        if (!Utils::isUnset($request->routeTableIds)) {
            $query['RouteTableIds'] = $request->routeTableIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateRouteTablesWithVpcGatewayEndpoint',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateRouteTablesWithVpcGatewayEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateRouteTablesWithVpcGatewayEndpointRequest $request
     *
     * @return AssociateRouteTablesWithVpcGatewayEndpointResponse
     */
    public function associateRouteTablesWithVpcGatewayEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateRouteTablesWithVpcGatewayEndpointWithOptions($request, $runtime);
    }

    /**
     * @param AssociateVpcCidrBlockRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AssociateVpcCidrBlockResponse
     */
    public function associateVpcCidrBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->IPv6CidrBlock)) {
            $query['IPv6CidrBlock'] = $request->IPv6CidrBlock;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->ipv6Isp)) {
            $query['Ipv6Isp'] = $request->ipv6Isp;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secondaryCidrBlock)) {
            $query['SecondaryCidrBlock'] = $request->secondaryCidrBlock;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateVpcCidrBlock',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateVpcCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateVpcCidrBlockRequest $request
     *
     * @return AssociateVpcCidrBlockResponse
     */
    public function associateVpcCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateVpcCidrBlockWithOptions($request, $runtime);
    }

    /**
     * @param AssociateVpnGatewayWithCertificateRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AssociateVpnGatewayWithCertificateResponse
     */
    public function associateVpnGatewayWithCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->certificateType)) {
            $query['CertificateType'] = $request->certificateType;
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
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateVpnGatewayWithCertificate',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateVpnGatewayWithCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateVpnGatewayWithCertificateRequest $request
     *
     * @return AssociateVpnGatewayWithCertificateResponse
     */
    public function associateVpnGatewayWithCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateVpnGatewayWithCertificateWithOptions($request, $runtime);
    }

    /**
     * @param AttachDhcpOptionsSetToVpcRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AttachDhcpOptionsSetToVpcResponse
     */
    public function attachDhcpOptionsSetToVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetId)) {
            $query['DhcpOptionsSetId'] = $request->dhcpOptionsSetId;
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
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDhcpOptionsSetToVpc',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDhcpOptionsSetToVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachDhcpOptionsSetToVpcRequest $request
     *
     * @return AttachDhcpOptionsSetToVpcResponse
     */
    public function attachDhcpOptionsSetToVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDhcpOptionsSetToVpcWithOptions($request, $runtime);
    }

    /**
     * @param AttachVbrToVpconnRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AttachVbrToVpconnResponse
     */
    public function attachVbrToVpconnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        if (!Utils::isUnset($request->vpconnId)) {
            $query['VpconnId'] = $request->vpconnId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachVbrToVpconn',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachVbrToVpconnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachVbrToVpconnRequest $request
     *
     * @return AttachVbrToVpconnResponse
     */
    public function attachVbrToVpconn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVbrToVpconnWithOptions($request, $runtime);
    }

    /**
     * @param CancelCommonBandwidthPackageIpBandwidthRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return CancelCommonBandwidthPackageIpBandwidthResponse
     */
    public function cancelCommonBandwidthPackageIpBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->eipId)) {
            $query['EipId'] = $request->eipId;
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
            'action'      => 'CancelCommonBandwidthPackageIpBandwidth',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelCommonBandwidthPackageIpBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelCommonBandwidthPackageIpBandwidthRequest $request
     *
     * @return CancelCommonBandwidthPackageIpBandwidthResponse
     */
    public function cancelCommonBandwidthPackageIpBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCommonBandwidthPackageIpBandwidthWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
            'action'      => 'CancelPhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelPhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CheckCanAllocateVpcPrivateIpAddressRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CheckCanAllocateVpcPrivateIpAddressResponse
     */
    public function checkCanAllocateVpcPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
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
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCanAllocateVpcPrivateIpAddress',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCanAllocateVpcPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckCanAllocateVpcPrivateIpAddressRequest $request
     *
     * @return CheckCanAllocateVpcPrivateIpAddressResponse
     */
    public function checkCanAllocateVpcPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCanAllocateVpcPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @param CheckVpnBgpEnabledRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckVpnBgpEnabledResponse
     */
    public function checkVpnBgpEnabledWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
            'action'      => 'CheckVpnBgpEnabled',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckVpnBgpEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckVpnBgpEnabledRequest $request
     *
     * @return CheckVpnBgpEnabledResponse
     */
    public function checkVpnBgpEnabled($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkVpnBgpEnabledWithOptions($request, $runtime);
    }

    /**
     * @param CompletePhysicalConnectionLOARequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CompletePhysicalConnectionLOAResponse
     */
    public function completePhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lineCode)) {
            $query['LineCode'] = $request->lineCode;
        }
        if (!Utils::isUnset($request->lineLabel)) {
            $query['LineLabel'] = $request->lineLabel;
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
            'action'      => 'CompletePhysicalConnectionLOA',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompletePhysicalConnectionLOAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompletePhysicalConnectionLOARequest $request
     *
     * @return CompletePhysicalConnectionLOAResponse
     */
    public function completePhysicalConnectionLOA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completePhysicalConnectionLOAWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmPhysicalConnectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ConfirmPhysicalConnectionResponse
     */
    public function confirmPhysicalConnectionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
            'action'      => 'ConfirmPhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmPhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmPhysicalConnectionRequest $request
     *
     * @return ConfirmPhysicalConnectionResponse
     */
    public function confirmPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmPhysicalConnectionWithOptions($request, $runtime);
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
        $query = [];
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
        if (!Utils::isUnset($request->routerInterfaceId)) {
            $query['RouterInterfaceId'] = $request->routerInterfaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConnectRouterInterface',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConnectRouterInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ConvertBandwidthPackageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConvertBandwidthPackageResponse
     */
    public function convertBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'ConvertBandwidthPackage',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConvertBandwidthPackageRequest $request
     *
     * @return ConvertBandwidthPackageResponse
     */
    public function convertBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param CopyNetworkAclEntriesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CopyNetworkAclEntriesResponse
     */
    public function copyNetworkAclEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->sourceNetworkAclId)) {
            $query['SourceNetworkAclId'] = $request->sourceNetworkAclId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyNetworkAclEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyNetworkAclEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyNetworkAclEntriesRequest $request
     *
     * @return CopyNetworkAclEntriesResponse
     */
    public function copyNetworkAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyNetworkAclEntriesWithOptions($request, $runtime);
    }

    /**
     * @param CreateBgpGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateBgpGroupResponse
     */
    public function createBgpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->isFakeAsn)) {
            $query['IsFakeAsn'] = $request->isFakeAsn;
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
        if (!Utils::isUnset($request->peerAsn)) {
            $query['PeerAsn'] = $request->peerAsn;
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
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBgpGroup',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBgpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBgpGroupRequest $request
     *
     * @return CreateBgpGroupResponse
     */
    public function createBgpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBgpGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateBgpPeerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBgpPeerResponse
     */
    public function createBgpPeerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bfdMultiHop)) {
            $query['BfdMultiHop'] = $request->bfdMultiHop;
        }
        if (!Utils::isUnset($request->bgpGroupId)) {
            $query['BgpGroupId'] = $request->bgpGroupId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableBfd)) {
            $query['EnableBfd'] = $request->enableBfd;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->peerIpAddress)) {
            $query['PeerIpAddress'] = $request->peerIpAddress;
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
            'action'      => 'CreateBgpPeer',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBgpPeerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBgpPeerRequest $request
     *
     * @return CreateBgpPeerResponse
     */
    public function createBgpPeer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBgpPeerWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommonBandwidthPackageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateCommonBandwidthPackageResponse
     */
    public function createCommonBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
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
        if (!Utils::isUnset($request->ratio)) {
            $query['Ratio'] = $request->ratio;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->securityProtectionTypes)) {
            $query['SecurityProtectionTypes'] = $request->securityProtectionTypes;
        }
        if (!Utils::isUnset($request->zone)) {
            $query['Zone'] = $request->zone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCommonBandwidthPackage',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCommonBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCommonBandwidthPackageRequest $request
     *
     * @return CreateCommonBandwidthPackageResponse
     */
    public function createCommonBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommonBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomerGatewayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCustomerGatewayResponse
     */
    public function createCustomerGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asn)) {
            $query['Asn'] = $request->asn;
        }
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipAddress)) {
            $query['IpAddress'] = $request->ipAddress;
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
            'action'      => 'CreateCustomerGateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomerGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomerGatewayRequest $request
     *
     * @return CreateCustomerGatewayResponse
     */
    public function createCustomerGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomerGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateDhcpOptionsSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDhcpOptionsSetResponse
     */
    public function createDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bootFileName)) {
            $query['BootFileName'] = $request->bootFileName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetDescription)) {
            $query['DhcpOptionsSetDescription'] = $request->dhcpOptionsSetDescription;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetName)) {
            $query['DhcpOptionsSetName'] = $request->dhcpOptionsSetName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainNameServers)) {
            $query['DomainNameServers'] = $request->domainNameServers;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipv6LeaseTime)) {
            $query['Ipv6LeaseTime'] = $request->ipv6LeaseTime;
        }
        if (!Utils::isUnset($request->leaseTime)) {
            $query['LeaseTime'] = $request->leaseTime;
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
        if (!Utils::isUnset($request->TFTPServerName)) {
            $query['TFTPServerName'] = $request->TFTPServerName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDhcpOptionsSet',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDhcpOptionsSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDhcpOptionsSetRequest $request
     *
     * @return CreateDhcpOptionsSetResponse
     */
    public function createDhcpOptionsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDhcpOptionsSetWithOptions($request, $runtime);
    }

    /**
     * @param CreateExpressCloudConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateExpressCloudConnectionResponse
     */
    public function createExpressCloudConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->contactMail)) {
            $query['ContactMail'] = $request->contactMail;
        }
        if (!Utils::isUnset($request->contactTel)) {
            $query['ContactTel'] = $request->contactTel;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->IDCardNo)) {
            $query['IDCardNo'] = $request->IDCardNo;
        }
        if (!Utils::isUnset($request->idcSP)) {
            $query['IdcSP'] = $request->idcSP;
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
        if (!Utils::isUnset($request->peerCity)) {
            $query['PeerCity'] = $request->peerCity;
        }
        if (!Utils::isUnset($request->peerLocation)) {
            $query['PeerLocation'] = $request->peerLocation;
        }
        if (!Utils::isUnset($request->portType)) {
            $query['PortType'] = $request->portType;
        }
        if (!Utils::isUnset($request->redundantEccId)) {
            $query['RedundantEccId'] = $request->redundantEccId;
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
            'action'      => 'CreateExpressCloudConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExpressCloudConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateExpressCloudConnectionRequest $request
     *
     * @return CreateExpressCloudConnectionResponse
     */
    public function createExpressCloudConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressCloudConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowLogResponse
     */
    public function createFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregationInterval)) {
            $query['AggregationInterval'] = $request->aggregationInterval;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
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
        if (!Utils::isUnset($request->trafficType)) {
            $query['TrafficType'] = $request->trafficType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowLog',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowLogRequest $request
     *
     * @return CreateFlowLogResponse
     */
    public function createFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowLogWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->externalIp)) {
            $query['ExternalIp'] = $request->externalIp;
        }
        if (!Utils::isUnset($request->externalPort)) {
            $query['ExternalPort'] = $request->externalPort;
        }
        if (!Utils::isUnset($request->forwardEntryName)) {
            $query['ForwardEntryName'] = $request->forwardEntryName;
        }
        if (!Utils::isUnset($request->forwardTableId)) {
            $query['ForwardTableId'] = $request->forwardTableId;
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->portBreak)) {
            $query['PortBreak'] = $request->portBreak;
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
            'action'      => 'CreateForwardEntry',
            'version'     => '2016-04-28',
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
     * @param CreateFullNatEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFullNatEntryResponse
     */
    public function createFullNatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessIp)) {
            $query['AccessIp'] = $request->accessIp;
        }
        if (!Utils::isUnset($request->accessPort)) {
            $query['AccessPort'] = $request->accessPort;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fullNatEntryDescription)) {
            $query['FullNatEntryDescription'] = $request->fullNatEntryDescription;
        }
        if (!Utils::isUnset($request->fullNatEntryName)) {
            $query['FullNatEntryName'] = $request->fullNatEntryName;
        }
        if (!Utils::isUnset($request->fullNatTableId)) {
            $query['FullNatTableId'] = $request->fullNatTableId;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->natIp)) {
            $query['NatIp'] = $request->natIp;
        }
        if (!Utils::isUnset($request->natIpPort)) {
            $query['NatIpPort'] = $request->natIpPort;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
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
            'action'      => 'CreateFullNatEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFullNatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFullNatEntryRequest $request
     *
     * @return CreateFullNatEntryResponse
     */
    public function createFullNatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFullNatEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalAccelerationInstanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateGlobalAccelerationInstanceResponse
     */
    public function createGlobalAccelerationInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthType)) {
            $query['BandwidthType'] = $request->bandwidthType;
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
        if (!Utils::isUnset($request->serviceLocation)) {
            $query['ServiceLocation'] = $request->serviceLocation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGlobalAccelerationInstance',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGlobalAccelerationInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGlobalAccelerationInstanceRequest $request
     *
     * @return CreateGlobalAccelerationInstanceResponse
     */
    public function createGlobalAccelerationInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalAccelerationInstanceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipAddress)) {
            $query['IpAddress'] = $request->ipAddress;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHaVip',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHaVipResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateIPv6TranslatorRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateIPv6TranslatorResponse
     */
    public function createIPv6TranslatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
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
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
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
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIPv6Translator',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIPv6TranslatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIPv6TranslatorRequest $request
     *
     * @return CreateIPv6TranslatorResponse
     */
    public function createIPv6Translator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIPv6TranslatorWithOptions($request, $runtime);
    }

    /**
     * @param CreateIPv6TranslatorAclListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateIPv6TranslatorAclListResponse
     */
    public function createIPv6TranslatorAclListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'CreateIPv6TranslatorAclList',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIPv6TranslatorAclListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIPv6TranslatorAclListRequest $request
     *
     * @return CreateIPv6TranslatorAclListResponse
     */
    public function createIPv6TranslatorAclList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIPv6TranslatorAclListWithOptions($request, $runtime);
    }

    /**
     * @param CreateIPv6TranslatorEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateIPv6TranslatorEntryResponse
     */
    public function createIPv6TranslatorEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->allocateIpv6Port)) {
            $query['AllocateIpv6Port'] = $request->allocateIpv6Port;
        }
        if (!Utils::isUnset($request->backendIpv4Addr)) {
            $query['BackendIpv4Addr'] = $request->backendIpv4Addr;
        }
        if (!Utils::isUnset($request->backendIpv4Port)) {
            $query['BackendIpv4Port'] = $request->backendIpv4Port;
        }
        if (!Utils::isUnset($request->entryBandwidth)) {
            $query['EntryBandwidth'] = $request->entryBandwidth;
        }
        if (!Utils::isUnset($request->entryDescription)) {
            $query['EntryDescription'] = $request->entryDescription;
        }
        if (!Utils::isUnset($request->entryName)) {
            $query['EntryName'] = $request->entryName;
        }
        if (!Utils::isUnset($request->ipv6TranslatorId)) {
            $query['Ipv6TranslatorId'] = $request->ipv6TranslatorId;
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
        if (!Utils::isUnset($request->transProtocol)) {
            $query['TransProtocol'] = $request->transProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIPv6TranslatorEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIPv6TranslatorEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIPv6TranslatorEntryRequest $request
     *
     * @return CreateIPv6TranslatorEntryResponse
     */
    public function createIPv6TranslatorEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIPv6TranslatorEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpsecServerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateIpsecServerResponse
     */
    public function createIpsecServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIpPool)) {
            $query['ClientIpPool'] = $request->clientIpPool;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->effectImmediately)) {
            $query['EffectImmediately'] = $request->effectImmediately;
        }
        if (!Utils::isUnset($request->ikeConfig)) {
            $query['IkeConfig'] = $request->ikeConfig;
        }
        if (!Utils::isUnset($request->ipSecServerName)) {
            $query['IpSecServerName'] = $request->ipSecServerName;
        }
        if (!Utils::isUnset($request->ipsecConfig)) {
            $query['IpsecConfig'] = $request->ipsecConfig;
        }
        if (!Utils::isUnset($request->localSubnet)) {
            $query['LocalSubnet'] = $request->localSubnet;
        }
        if (!Utils::isUnset($request->psk)) {
            $query['Psk'] = $request->psk;
        }
        if (!Utils::isUnset($request->pskEnabled)) {
            $query['PskEnabled'] = $request->pskEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIpsecServer',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIpsecServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIpsecServerRequest $request
     *
     * @return CreateIpsecServerResponse
     */
    public function createIpsecServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpsecServerWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpv4GatewayRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateIpv4GatewayResponse
     */
    public function createIpv4GatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipv4GatewayDescription)) {
            $query['Ipv4GatewayDescription'] = $request->ipv4GatewayDescription;
        }
        if (!Utils::isUnset($request->ipv4GatewayName)) {
            $query['Ipv4GatewayName'] = $request->ipv4GatewayName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIpv4Gateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIpv4GatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIpv4GatewayRequest $request
     *
     * @return CreateIpv4GatewayResponse
     */
    public function createIpv4Gateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpv4GatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpv6EgressOnlyRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateIpv6EgressOnlyRuleResponse
     */
    public function createIpv6EgressOnlyRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ipv6GatewayId)) {
            $query['Ipv6GatewayId'] = $request->ipv6GatewayId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'CreateIpv6EgressOnlyRule',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIpv6EgressOnlyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIpv6EgressOnlyRuleRequest $request
     *
     * @return CreateIpv6EgressOnlyRuleResponse
     */
    public function createIpv6EgressOnlyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpv6EgressOnlyRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpv6GatewayRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateIpv6GatewayResponse
     */
    public function createIpv6GatewayWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIpv6Gateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIpv6GatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIpv6GatewayRequest $request
     *
     * @return CreateIpv6GatewayResponse
     */
    public function createIpv6Gateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpv6GatewayWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->eipBindMode)) {
            $query['EipBindMode'] = $request->eipBindMode;
        }
        if (!Utils::isUnset($request->icmpReplyEnabled)) {
            $query['IcmpReplyEnabled'] = $request->icmpReplyEnabled;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->natType)) {
            $query['NatType'] = $request->natType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
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
        if (!Utils::isUnset($request->securityProtectionEnabled)) {
            $query['SecurityProtectionEnabled'] = $request->securityProtectionEnabled;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
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
            'action'      => 'CreateNatGateway',
            'version'     => '2016-04-28',
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
     * @param CreateNatIpRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateNatIpResponse
     */
    public function createNatIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natIp)) {
            $query['NatIp'] = $request->natIp;
        }
        if (!Utils::isUnset($request->natIpCidr)) {
            $query['NatIpCidr'] = $request->natIpCidr;
        }
        if (!Utils::isUnset($request->natIpCidrId)) {
            $query['NatIpCidrId'] = $request->natIpCidrId;
        }
        if (!Utils::isUnset($request->natIpDescription)) {
            $query['NatIpDescription'] = $request->natIpDescription;
        }
        if (!Utils::isUnset($request->natIpName)) {
            $query['NatIpName'] = $request->natIpName;
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
            'action'      => 'CreateNatIp',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNatIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNatIpRequest $request
     *
     * @return CreateNatIpResponse
     */
    public function createNatIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatIpWithOptions($request, $runtime);
    }

    /**
     * @param CreateNatIpCidrRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNatIpCidrResponse
     */
    public function createNatIpCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natIpCidr)) {
            $query['NatIpCidr'] = $request->natIpCidr;
        }
        if (!Utils::isUnset($request->natIpCidrDescription)) {
            $query['NatIpCidrDescription'] = $request->natIpCidrDescription;
        }
        if (!Utils::isUnset($request->natIpCidrName)) {
            $query['NatIpCidrName'] = $request->natIpCidrName;
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
            'action'      => 'CreateNatIpCidr',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNatIpCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNatIpCidrRequest $request
     *
     * @return CreateNatIpCidrResponse
     */
    public function createNatIpCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatIpCidrWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkAclName)) {
            $query['NetworkAclName'] = $request->networkAclName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkAcl',
            'version'     => '2016-04-28',
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
     * @param CreatePhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePhysicalConnectionResponse
     */
    public function createPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPointId)) {
            $query['AccessPointId'] = $request->accessPointId;
        }
        if (!Utils::isUnset($request->circuitCode)) {
            $query['CircuitCode'] = $request->circuitCode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->lineOperator)) {
            $query['LineOperator'] = $request->lineOperator;
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
        if (!Utils::isUnset($request->peerLocation)) {
            $query['PeerLocation'] = $request->peerLocation;
        }
        if (!Utils::isUnset($request->portType)) {
            $query['PortType'] = $request->portType;
        }
        if (!Utils::isUnset($request->redundantPhysicalConnectionId)) {
            $query['RedundantPhysicalConnectionId'] = $request->redundantPhysicalConnectionId;
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['bandwidth'] = $request->bandwidth;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreatePhysicalConnectionOccupancyOrderRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return CreatePhysicalConnectionOccupancyOrderResponse
     */
    public function createPhysicalConnectionOccupancyOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
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
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
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
            'action'      => 'CreatePhysicalConnectionOccupancyOrder',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePhysicalConnectionOccupancyOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePhysicalConnectionOccupancyOrderRequest $request
     *
     * @return CreatePhysicalConnectionOccupancyOrderResponse
     */
    public function createPhysicalConnectionOccupancyOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalConnectionOccupancyOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreatePhysicalConnectionSetupOrderRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreatePhysicalConnectionSetupOrderResponse
     */
    public function createPhysicalConnectionSetupOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPointId)) {
            $query['AccessPointId'] = $request->accessPointId;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lineOperator)) {
            $query['LineOperator'] = $request->lineOperator;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->portType)) {
            $query['PortType'] = $request->portType;
        }
        if (!Utils::isUnset($request->redundantPhysicalConnectionId)) {
            $query['RedundantPhysicalConnectionId'] = $request->redundantPhysicalConnectionId;
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
            'action'      => 'CreatePhysicalConnectionSetupOrder',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePhysicalConnectionSetupOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePhysicalConnectionSetupOrderRequest $request
     *
     * @return CreatePhysicalConnectionSetupOrderResponse
     */
    public function createPhysicalConnectionSetupOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalConnectionSetupOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreatePublicIpAddressPoolRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePublicIpAddressPoolResponse
     */
    public function createPublicIpAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
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
            'action'      => 'CreatePublicIpAddressPool',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePublicIpAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePublicIpAddressPoolRequest $request
     *
     * @return CreatePublicIpAddressPoolResponse
     */
    public function createPublicIpAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicIpAddressPoolWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $query['NextHopId'] = $request->nextHopId;
        }
        if (!Utils::isUnset($request->nextHopList)) {
            $query['NextHopList'] = $request->nextHopList;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action'      => 'CreateRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateRouteTableRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRouteTableResponse
     */
    public function createRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->associateType)) {
            $query['AssociateType'] = $request->associateType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableName)) {
            $query['RouteTableName'] = $request->routeTableName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRouteTable',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRouteTableRequest $request
     *
     * @return CreateRouteTableResponse
     */
    public function createRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteTableWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->accessPointId)) {
            $query['AccessPointId'] = $request->accessPointId;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->healthCheckSourceIp)) {
            $query['HealthCheckSourceIp'] = $request->healthCheckSourceIp;
        }
        if (!Utils::isUnset($request->healthCheckTargetIp)) {
            $query['HealthCheckTargetIp'] = $request->healthCheckTargetIp;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->oppositeAccessPointId)) {
            $query['OppositeAccessPointId'] = $request->oppositeAccessPointId;
        }
        if (!Utils::isUnset($request->oppositeInterfaceId)) {
            $query['OppositeInterfaceId'] = $request->oppositeInterfaceId;
        }
        if (!Utils::isUnset($request->oppositeInterfaceOwnerId)) {
            $query['OppositeInterfaceOwnerId'] = $request->oppositeInterfaceOwnerId;
        }
        if (!Utils::isUnset($request->oppositeRegionId)) {
            $query['OppositeRegionId'] = $request->oppositeRegionId;
        }
        if (!Utils::isUnset($request->oppositeRouterId)) {
            $query['OppositeRouterId'] = $request->oppositeRouterId;
        }
        if (!Utils::isUnset($request->oppositeRouterType)) {
            $query['OppositeRouterType'] = $request->oppositeRouterType;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        if (!Utils::isUnset($request->routerType)) {
            $query['RouterType'] = $request->routerType;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRouterInterface',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRouterInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateSnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSnatEntryResponse
     */
    public function createSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->eipAffinity)) {
            $query['EipAffinity'] = $request->eipAffinity;
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
        if (!Utils::isUnset($request->snatEntryName)) {
            $query['SnatEntryName'] = $request->snatEntryName;
        }
        if (!Utils::isUnset($request->snatIp)) {
            $query['SnatIp'] = $request->snatIp;
        }
        if (!Utils::isUnset($request->snatTableId)) {
            $query['SnatTableId'] = $request->snatTableId;
        }
        if (!Utils::isUnset($request->sourceCIDR)) {
            $query['SourceCIDR'] = $request->sourceCIDR;
        }
        if (!Utils::isUnset($request->sourceVSwitchId)) {
            $query['SourceVSwitchId'] = $request->sourceVSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSnatEntry',
            'version'     => '2016-04-28',
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
     * @param CreateSslVpnClientCertRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSslVpnClientCertResponse
     */
    public function createSslVpnClientCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sslVpnServerId)) {
            $query['SslVpnServerId'] = $request->sslVpnServerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSslVpnClientCert',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSslVpnClientCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSslVpnClientCertRequest $request
     *
     * @return CreateSslVpnClientCertResponse
     */
    public function createSslVpnClientCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSslVpnClientCertWithOptions($request, $runtime);
    }

    /**
     * @param CreateSslVpnServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSslVpnServerResponse
     */
    public function createSslVpnServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cipher)) {
            $query['Cipher'] = $request->cipher;
        }
        if (!Utils::isUnset($request->clientIpPool)) {
            $query['ClientIpPool'] = $request->clientIpPool;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compress)) {
            $query['Compress'] = $request->compress;
        }
        if (!Utils::isUnset($request->enableMultiFactorAuth)) {
            $query['EnableMultiFactorAuth'] = $request->enableMultiFactorAuth;
        }
        if (!Utils::isUnset($request->IDaaSInstanceId)) {
            $query['IDaaSInstanceId'] = $request->IDaaSInstanceId;
        }
        if (!Utils::isUnset($request->IDaaSRegionId)) {
            $query['IDaaSRegionId'] = $request->IDaaSRegionId;
        }
        if (!Utils::isUnset($request->localSubnet)) {
            $query['LocalSubnet'] = $request->localSubnet;
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
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
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
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSslVpnServer',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSslVpnServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSslVpnServerRequest $request
     *
     * @return CreateSslVpnServerResponse
     */
    public function createSslVpnServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSslVpnServerWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrafficMirrorFilterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateTrafficMirrorFilterResponse
     */
    public function createTrafficMirrorFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->egressRules)) {
            $query['EgressRules'] = $request->egressRules;
        }
        if (!Utils::isUnset($request->ingressRules)) {
            $query['IngressRules'] = $request->ingressRules;
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
        if (!Utils::isUnset($request->trafficMirrorFilterDescription)) {
            $query['TrafficMirrorFilterDescription'] = $request->trafficMirrorFilterDescription;
        }
        if (!Utils::isUnset($request->trafficMirrorFilterName)) {
            $query['TrafficMirrorFilterName'] = $request->trafficMirrorFilterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrafficMirrorFilter',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrafficMirrorFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrafficMirrorFilterRequest $request
     *
     * @return CreateTrafficMirrorFilterResponse
     */
    public function createTrafficMirrorFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficMirrorFilterWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrafficMirrorFilterRulesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateTrafficMirrorFilterRulesResponse
     */
    public function createTrafficMirrorFilterRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->egressRules)) {
            $query['EgressRules'] = $request->egressRules;
        }
        if (!Utils::isUnset($request->ingressRules)) {
            $query['IngressRules'] = $request->ingressRules;
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
        if (!Utils::isUnset($request->trafficMirrorFilterId)) {
            $query['TrafficMirrorFilterId'] = $request->trafficMirrorFilterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrafficMirrorFilterRules',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrafficMirrorFilterRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrafficMirrorFilterRulesRequest $request
     *
     * @return CreateTrafficMirrorFilterRulesResponse
     */
    public function createTrafficMirrorFilterRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficMirrorFilterRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrafficMirrorSessionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateTrafficMirrorSessionResponse
     */
    public function createTrafficMirrorSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->packetLength)) {
            $query['PacketLength'] = $request->packetLength;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
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
        if (!Utils::isUnset($request->trafficMirrorFilterId)) {
            $query['TrafficMirrorFilterId'] = $request->trafficMirrorFilterId;
        }
        if (!Utils::isUnset($request->trafficMirrorSessionDescription)) {
            $query['TrafficMirrorSessionDescription'] = $request->trafficMirrorSessionDescription;
        }
        if (!Utils::isUnset($request->trafficMirrorSessionName)) {
            $query['TrafficMirrorSessionName'] = $request->trafficMirrorSessionName;
        }
        if (!Utils::isUnset($request->trafficMirrorSourceIds)) {
            $query['TrafficMirrorSourceIds'] = $request->trafficMirrorSourceIds;
        }
        if (!Utils::isUnset($request->trafficMirrorTargetId)) {
            $query['TrafficMirrorTargetId'] = $request->trafficMirrorTargetId;
        }
        if (!Utils::isUnset($request->trafficMirrorTargetType)) {
            $query['TrafficMirrorTargetType'] = $request->trafficMirrorTargetType;
        }
        if (!Utils::isUnset($request->virtualNetworkId)) {
            $query['VirtualNetworkId'] = $request->virtualNetworkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrafficMirrorSession',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrafficMirrorSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrafficMirrorSessionRequest $request
     *
     * @return CreateTrafficMirrorSessionResponse
     */
    public function createTrafficMirrorSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficMirrorSessionWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipv6CidrBlock)) {
            $query['Ipv6CidrBlock'] = $request->ipv6CidrBlock;
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
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcIpv6CidrBlock)) {
            $query['VpcIpv6CidrBlock'] = $request->vpcIpv6CidrBlock;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVSwitch',
            'version'     => '2016-04-28',
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
     * @param CreateVbrHaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateVbrHaResponse
     */
    public function createVbrHaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->peerVbrId)) {
            $query['PeerVbrId'] = $request->peerVbrId;
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
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVbrHa',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVbrHaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVbrHaRequest $request
     *
     * @return CreateVbrHaResponse
     */
    public function createVbrHa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVbrHaWithOptions($request, $runtime);
    }

    /**
     * @param CreateVcoRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVcoRouteEntryResponse
     */
    public function createVcoRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVcoRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVcoRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVcoRouteEntryRequest $request
     *
     * @return CreateVcoRouteEntryResponse
     */
    public function createVcoRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVcoRouteEntryWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->circuitCode)) {
            $query['CircuitCode'] = $request->circuitCode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableIpv6)) {
            $query['EnableIpv6'] = $request->enableIpv6;
        }
        if (!Utils::isUnset($request->localGatewayIp)) {
            $query['LocalGatewayIp'] = $request->localGatewayIp;
        }
        if (!Utils::isUnset($request->localIpv6GatewayIp)) {
            $query['LocalIpv6GatewayIp'] = $request->localIpv6GatewayIp;
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
        if (!Utils::isUnset($request->peerGatewayIp)) {
            $query['PeerGatewayIp'] = $request->peerGatewayIp;
        }
        if (!Utils::isUnset($request->peerIpv6GatewayIp)) {
            $query['PeerIpv6GatewayIp'] = $request->peerIpv6GatewayIp;
        }
        if (!Utils::isUnset($request->peeringIpv6SubnetMask)) {
            $query['PeeringIpv6SubnetMask'] = $request->peeringIpv6SubnetMask;
        }
        if (!Utils::isUnset($request->peeringSubnetMask)) {
            $query['PeeringSubnetMask'] = $request->peeringSubnetMask;
        }
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
        if (!Utils::isUnset($request->vbrOwnerId)) {
            $query['VbrOwnerId'] = $request->vbrOwnerId;
        }
        if (!Utils::isUnset($request->vlanId)) {
            $query['VlanId'] = $request->vlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualBorderRouter',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualBorderRouterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateVirtualPhysicalConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateVirtualPhysicalConnectionResponse
     */
    public function createVirtualPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->orderMode)) {
            $query['OrderMode'] = $request->orderMode;
        }
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vlanId)) {
            $query['VlanId'] = $request->vlanId;
        }
        if (!Utils::isUnset($request->vpconnAliUid)) {
            $query['VpconnAliUid'] = $request->vpconnAliUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualPhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualPhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVirtualPhysicalConnectionRequest $request
     *
     * @return CreateVirtualPhysicalConnectionResponse
     */
    public function createVirtualPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualPhysicalConnectionWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
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
        if (!Utils::isUnset($request->enableIpv6)) {
            $query['EnableIpv6'] = $request->enableIpv6;
        }
        if (!Utils::isUnset($request->ipv6CidrBlock)) {
            $query['Ipv6CidrBlock'] = $request->ipv6CidrBlock;
        }
        if (!Utils::isUnset($request->ipv6Isp)) {
            $query['Ipv6Isp'] = $request->ipv6Isp;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->userCidr)) {
            $query['UserCidr'] = $request->userCidr;
        }
        if (!Utils::isUnset($request->vpcName)) {
            $query['VpcName'] = $request->vpcName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpc',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateVpcGatewayEndpointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateVpcGatewayEndpointResponse
     */
    public function createVpcGatewayEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointDescription)) {
            $query['EndpointDescription'] = $request->endpointDescription;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $query['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->policyDocument)) {
            $query['PolicyDocument'] = $request->policyDocument;
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
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcGatewayEndpoint',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcGatewayEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpcGatewayEndpointRequest $request
     *
     * @return CreateVpcGatewayEndpointResponse
     */
    public function createVpcGatewayEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcGatewayEndpointWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpcPrefixListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpcPrefixListResponse
     */
    public function createVpcPrefixListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->maxEntries)) {
            $query['MaxEntries'] = $request->maxEntries;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prefixListDescription)) {
            $query['PrefixListDescription'] = $request->prefixListDescription;
        }
        if (!Utils::isUnset($request->prefixListEntrys)) {
            $query['PrefixListEntrys'] = $request->prefixListEntrys;
        }
        if (!Utils::isUnset($request->prefixListName)) {
            $query['PrefixListName'] = $request->prefixListName;
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
            'action'      => 'CreateVpcPrefixList',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcPrefixListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpcPrefixListRequest $request
     *
     * @return CreateVpcPrefixListResponse
     */
    public function createVpcPrefixList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcPrefixListWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpconnFromVbrRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpconnFromVbrResponse
     */
    public function createVpconnFromVbrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->orderMode)) {
            $query['OrderMode'] = $request->orderMode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpconnFromVbr',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpconnFromVbrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpconnFromVbrRequest $request
     *
     * @return CreateVpconnFromVbrResponse
     */
    public function createVpconnFromVbr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpconnFromVbrWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnAttachmentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpnAttachmentResponse
     */
    public function createVpnAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoConfigRoute)) {
            $query['AutoConfigRoute'] = $request->autoConfigRoute;
        }
        if (!Utils::isUnset($request->bgpConfig)) {
            $query['BgpConfig'] = $request->bgpConfig;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->customerGatewayId)) {
            $query['CustomerGatewayId'] = $request->customerGatewayId;
        }
        if (!Utils::isUnset($request->effectImmediately)) {
            $query['EffectImmediately'] = $request->effectImmediately;
        }
        if (!Utils::isUnset($request->enableDpd)) {
            $query['EnableDpd'] = $request->enableDpd;
        }
        if (!Utils::isUnset($request->enableNatTraversal)) {
            $query['EnableNatTraversal'] = $request->enableNatTraversal;
        }
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $query['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->ikeConfig)) {
            $query['IkeConfig'] = $request->ikeConfig;
        }
        if (!Utils::isUnset($request->ipsecConfig)) {
            $query['IpsecConfig'] = $request->ipsecConfig;
        }
        if (!Utils::isUnset($request->localSubnet)) {
            $query['LocalSubnet'] = $request->localSubnet;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteCaCert)) {
            $query['RemoteCaCert'] = $request->remoteCaCert;
        }
        if (!Utils::isUnset($request->remoteSubnet)) {
            $query['RemoteSubnet'] = $request->remoteSubnet;
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
            'action'      => 'CreateVpnAttachment',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpnAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpnAttachmentRequest $request
     *
     * @return CreateVpnAttachmentResponse
     */
    public function createVpnAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnAttachmentWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpnConnectionResponse
     */
    public function createVpnConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoConfigRoute)) {
            $query['AutoConfigRoute'] = $request->autoConfigRoute;
        }
        if (!Utils::isUnset($request->bgpConfig)) {
            $query['BgpConfig'] = $request->bgpConfig;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->customerGatewayId)) {
            $query['CustomerGatewayId'] = $request->customerGatewayId;
        }
        if (!Utils::isUnset($request->effectImmediately)) {
            $query['EffectImmediately'] = $request->effectImmediately;
        }
        if (!Utils::isUnset($request->enableDpd)) {
            $query['EnableDpd'] = $request->enableDpd;
        }
        if (!Utils::isUnset($request->enableNatTraversal)) {
            $query['EnableNatTraversal'] = $request->enableNatTraversal;
        }
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $query['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->ikeConfig)) {
            $query['IkeConfig'] = $request->ikeConfig;
        }
        if (!Utils::isUnset($request->ipsecConfig)) {
            $query['IpsecConfig'] = $request->ipsecConfig;
        }
        if (!Utils::isUnset($request->localSubnet)) {
            $query['LocalSubnet'] = $request->localSubnet;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteCaCertificate)) {
            $query['RemoteCaCertificate'] = $request->remoteCaCertificate;
        }
        if (!Utils::isUnset($request->remoteSubnet)) {
            $query['RemoteSubnet'] = $request->remoteSubnet;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpnConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpnConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpnConnectionRequest $request
     *
     * @return CreateVpnConnectionResponse
     */
    public function createVpnConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateVpnGatewayResponse
     */
    public function createVpnGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableIpsec)) {
            $query['EnableIpsec'] = $request->enableIpsec;
        }
        if (!Utils::isUnset($request->enableSsl)) {
            $query['EnableSsl'] = $request->enableSsl;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sslConnections)) {
            $query['SslConnections'] = $request->sslConnections;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpnType)) {
            $query['VpnType'] = $request->vpnType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpnGateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpnGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpnGatewayRequest $request
     *
     * @return CreateVpnGatewayResponse
     */
    public function createVpnGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnPbrRouteEntryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVpnPbrRouteEntryResponse
     */
    public function createVpnPbrRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->publishVpc)) {
            $query['PublishVpc'] = $request->publishVpc;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->routeSource)) {
            $query['RouteSource'] = $request->routeSource;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpnPbrRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpnPbrRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpnPbrRouteEntryRequest $request
     *
     * @return CreateVpnPbrRouteEntryResponse
     */
    public function createVpnPbrRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnPbrRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpnRouteEntryResponse
     */
    public function createVpnRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->publishVpc)) {
            $query['PublishVpc'] = $request->publishVpc;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpnRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpnRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpnRouteEntryRequest $request
     *
     * @return CreateVpnRouteEntryResponse
     */
    public function createVpnRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnRouteEntryWithOptions($request, $runtime);
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
        $query = [];
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
        if (!Utils::isUnset($request->routerInterfaceId)) {
            $query['RouterInterfaceId'] = $request->routerInterfaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeactivateRouterInterface',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactivateRouterInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeactiveFlowLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeactiveFlowLogResponse
     */
    public function deactiveFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'version'     => '2016-04-28',
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
     * @param DeleteBgpGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteBgpGroupResponse
     */
    public function deleteBgpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bgpGroupId)) {
            $query['BgpGroupId'] = $request->bgpGroupId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'DeleteBgpGroup',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBgpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBgpGroupRequest $request
     *
     * @return DeleteBgpGroupResponse
     */
    public function deleteBgpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBgpGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBgpNetworkRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBgpNetworkResponse
     */
    public function deleteBgpNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dstCidrBlock)) {
            $query['DstCidrBlock'] = $request->dstCidrBlock;
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
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBgpNetwork',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBgpNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBgpNetworkRequest $request
     *
     * @return DeleteBgpNetworkResponse
     */
    public function deleteBgpNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBgpNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBgpPeerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBgpPeerResponse
     */
    public function deleteBgpPeerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bgpPeerId)) {
            $query['BgpPeerId'] = $request->bgpPeerId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'DeleteBgpPeer',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBgpPeerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBgpPeerRequest $request
     *
     * @return DeleteBgpPeerResponse
     */
    public function deleteBgpPeer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBgpPeerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCommonBandwidthPackageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteCommonBandwidthPackageResponse
     */
    public function deleteCommonBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
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
            'action'      => 'DeleteCommonBandwidthPackage',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCommonBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCommonBandwidthPackageRequest $request
     *
     * @return DeleteCommonBandwidthPackageResponse
     */
    public function deleteCommonBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommonBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomerGatewayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCustomerGatewayResponse
     */
    public function deleteCustomerGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->customerGatewayId)) {
            $query['CustomerGatewayId'] = $request->customerGatewayId;
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
            'action'      => 'DeleteCustomerGateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomerGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomerGatewayRequest $request
     *
     * @return DeleteCustomerGatewayResponse
     */
    public function deleteCustomerGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomerGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDhcpOptionsSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDhcpOptionsSetResponse
     */
    public function deleteDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetId)) {
            $query['DhcpOptionsSetId'] = $request->dhcpOptionsSetId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDhcpOptionsSet',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDhcpOptionsSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDhcpOptionsSetRequest $request
     *
     * @return DeleteDhcpOptionsSetResponse
     */
    public function deleteDhcpOptionsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDhcpOptionsSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFlowLogResponse
     */
    public function deleteFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DeleteFlowLog',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowLogRequest $request
     *
     * @return DeleteFlowLogResponse
     */
    public function deleteFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowLogWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forwardEntryId)) {
            $query['ForwardEntryId'] = $request->forwardEntryId;
        }
        if (!Utils::isUnset($request->forwardTableId)) {
            $query['ForwardTableId'] = $request->forwardTableId;
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
            'action'      => 'DeleteForwardEntry',
            'version'     => '2016-04-28',
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
     * @param DeleteFullNatEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFullNatEntryResponse
     */
    public function deleteFullNatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fullNatEntryId)) {
            $query['FullNatEntryId'] = $request->fullNatEntryId;
        }
        if (!Utils::isUnset($request->fullNatTableId)) {
            $query['FullNatTableId'] = $request->fullNatTableId;
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
            'action'      => 'DeleteFullNatEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFullNatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFullNatEntryRequest $request
     *
     * @return DeleteFullNatEntryResponse
     */
    public function deleteFullNatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFullNatEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGlobalAccelerationInstanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteGlobalAccelerationInstanceResponse
     */
    public function deleteGlobalAccelerationInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalAccelerationInstanceId)) {
            $query['GlobalAccelerationInstanceId'] = $request->globalAccelerationInstanceId;
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
            'action'      => 'DeleteGlobalAccelerationInstance',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGlobalAccelerationInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGlobalAccelerationInstanceRequest $request
     *
     * @return DeleteGlobalAccelerationInstanceResponse
     */
    public function deleteGlobalAccelerationInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalAccelerationInstanceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->haVipId)) {
            $query['HaVipId'] = $request->haVipId;
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
            'action'      => 'DeleteHaVip',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHaVipResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteIPv6TranslatorRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteIPv6TranslatorResponse
     */
    public function deleteIPv6TranslatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipv6TranslatorId)) {
            $query['Ipv6TranslatorId'] = $request->ipv6TranslatorId;
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
            'action'      => 'DeleteIPv6Translator',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIPv6TranslatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIPv6TranslatorRequest $request
     *
     * @return DeleteIPv6TranslatorResponse
     */
    public function deleteIPv6Translator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIPv6TranslatorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIPv6TranslatorAclListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteIPv6TranslatorAclListResponse
     */
    public function deleteIPv6TranslatorAclListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'DeleteIPv6TranslatorAclList',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIPv6TranslatorAclListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIPv6TranslatorAclListRequest $request
     *
     * @return DeleteIPv6TranslatorAclListResponse
     */
    public function deleteIPv6TranslatorAclList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIPv6TranslatorAclListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIPv6TranslatorEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteIPv6TranslatorEntryResponse
     */
    public function deleteIPv6TranslatorEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipv6TranslatorEntryId)) {
            $query['Ipv6TranslatorEntryId'] = $request->ipv6TranslatorEntryId;
        }
        if (!Utils::isUnset($request->ipv6TranslatorId)) {
            $query['Ipv6TranslatorId'] = $request->ipv6TranslatorId;
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
            'action'      => 'DeleteIPv6TranslatorEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIPv6TranslatorEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIPv6TranslatorEntryRequest $request
     *
     * @return DeleteIPv6TranslatorEntryResponse
     */
    public function deleteIPv6TranslatorEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIPv6TranslatorEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpsecServerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteIpsecServerResponse
     */
    public function deleteIpsecServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipsecServerId)) {
            $query['IpsecServerId'] = $request->ipsecServerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpsecServer',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpsecServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpsecServerRequest $request
     *
     * @return DeleteIpsecServerResponse
     */
    public function deleteIpsecServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpsecServerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpv4GatewayRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteIpv4GatewayResponse
     */
    public function deleteIpv4GatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipv4GatewayId)) {
            $query['Ipv4GatewayId'] = $request->ipv4GatewayId;
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
            'action'      => 'DeleteIpv4Gateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpv4GatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpv4GatewayRequest $request
     *
     * @return DeleteIpv4GatewayResponse
     */
    public function deleteIpv4Gateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpv4GatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpv6EgressOnlyRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteIpv6EgressOnlyRuleResponse
     */
    public function deleteIpv6EgressOnlyRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipv6EgressOnlyRuleId)) {
            $query['Ipv6EgressOnlyRuleId'] = $request->ipv6EgressOnlyRuleId;
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
            'action'      => 'DeleteIpv6EgressOnlyRule',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpv6EgressOnlyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpv6EgressOnlyRuleRequest $request
     *
     * @return DeleteIpv6EgressOnlyRuleResponse
     */
    public function deleteIpv6EgressOnlyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpv6EgressOnlyRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpv6GatewayRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteIpv6GatewayResponse
     */
    public function deleteIpv6GatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipv6GatewayId)) {
            $query['Ipv6GatewayId'] = $request->ipv6GatewayId;
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
            'action'      => 'DeleteIpv6Gateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpv6GatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpv6GatewayRequest $request
     *
     * @return DeleteIpv6GatewayResponse
     */
    public function deleteIpv6Gateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpv6GatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpv6InternetBandwidthRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteIpv6InternetBandwidthResponse
     */
    public function deleteIpv6InternetBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipv6AddressId)) {
            $query['Ipv6AddressId'] = $request->ipv6AddressId;
        }
        if (!Utils::isUnset($request->ipv6InternetBandwidthId)) {
            $query['Ipv6InternetBandwidthId'] = $request->ipv6InternetBandwidthId;
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
            'action'      => 'DeleteIpv6InternetBandwidth',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpv6InternetBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpv6InternetBandwidthRequest $request
     *
     * @return DeleteIpv6InternetBandwidthResponse
     */
    public function deleteIpv6InternetBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpv6InternetBandwidthWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
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
            'action'      => 'DeleteNatGateway',
            'version'     => '2016-04-28',
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
     * @param DeleteNatIpRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteNatIpResponse
     */
    public function deleteNatIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natIpId)) {
            $query['NatIpId'] = $request->natIpId;
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
            'action'      => 'DeleteNatIp',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNatIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNatIpRequest $request
     *
     * @return DeleteNatIpResponse
     */
    public function deleteNatIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatIpWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNatIpCidrRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNatIpCidrResponse
     */
    public function deleteNatIpCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natIpCidr)) {
            $query['NatIpCidr'] = $request->natIpCidr;
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
            'action'      => 'DeleteNatIpCidr',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNatIpCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNatIpCidrRequest $request
     *
     * @return DeleteNatIpCidrResponse
     */
    public function deleteNatIpCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatIpCidrWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'DeleteNetworkAcl',
            'version'     => '2016-04-28',
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
     * @param DeletePhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeletePhysicalConnectionResponse
     */
    public function deletePhysicalConnectionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
            'action'      => 'DeletePhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeletePublicIpAddressPoolRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeletePublicIpAddressPoolResponse
     */
    public function deletePublicIpAddressPoolWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->publicIpAddressPoolId)) {
            $query['PublicIpAddressPoolId'] = $request->publicIpAddressPoolId;
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
            'action'      => 'DeletePublicIpAddressPool',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePublicIpAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePublicIpAddressPoolRequest $request
     *
     * @return DeletePublicIpAddressPoolResponse
     */
    public function deletePublicIpAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicIpAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @param DeletePublicIpAddressPoolCidrBlockRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeletePublicIpAddressPoolCidrBlockResponse
     */
    public function deletePublicIpAddressPoolCidrBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
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
        if (!Utils::isUnset($request->publicIpAddressPoolId)) {
            $query['PublicIpAddressPoolId'] = $request->publicIpAddressPoolId;
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
            'action'      => 'DeletePublicIpAddressPoolCidrBlock',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePublicIpAddressPoolCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePublicIpAddressPoolCidrBlockRequest $request
     *
     * @return DeletePublicIpAddressPoolCidrBlockResponse
     */
    public function deletePublicIpAddressPoolCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicIpAddressPoolCidrBlockWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $query['NextHopId'] = $request->nextHopId;
        }
        if (!Utils::isUnset($request->nextHopList)) {
            $query['NextHopList'] = $request->nextHopList;
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
        if (!Utils::isUnset($request->routeEntryId)) {
            $query['RouteEntryId'] = $request->routeEntryId;
        }
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteRouteTableRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRouteTableResponse
     */
    public function deleteRouteTableWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'DeleteRouteTable',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRouteTableRequest $request
     *
     * @return DeleteRouteTableResponse
     */
    public function deleteRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteTableWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routerInterfaceId)) {
            $query['RouterInterfaceId'] = $request->routerInterfaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRouterInterface',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRouterInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteSnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSnatEntryResponse
     */
    public function deleteSnatEntryWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        if (!Utils::isUnset($request->snatTableId)) {
            $query['SnatTableId'] = $request->snatTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnatEntry',
            'version'     => '2016-04-28',
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
     * @param DeleteSslVpnClientCertRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSslVpnClientCertResponse
     */
    public function deleteSslVpnClientCertWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sslVpnClientCertId)) {
            $query['SslVpnClientCertId'] = $request->sslVpnClientCertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSslVpnClientCert',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSslVpnClientCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSslVpnClientCertRequest $request
     *
     * @return DeleteSslVpnClientCertResponse
     */
    public function deleteSslVpnClientCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSslVpnClientCertWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSslVpnServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSslVpnServerResponse
     */
    public function deleteSslVpnServerWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sslVpnServerId)) {
            $query['SslVpnServerId'] = $request->sslVpnServerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSslVpnServer',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSslVpnServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSslVpnServerRequest $request
     *
     * @return DeleteSslVpnServerResponse
     */
    public function deleteSslVpnServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSslVpnServerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrafficMirrorFilterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteTrafficMirrorFilterResponse
     */
    public function deleteTrafficMirrorFilterWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->trafficMirrorFilterId)) {
            $query['TrafficMirrorFilterId'] = $request->trafficMirrorFilterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficMirrorFilter',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficMirrorFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrafficMirrorFilterRequest $request
     *
     * @return DeleteTrafficMirrorFilterResponse
     */
    public function deleteTrafficMirrorFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficMirrorFilterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrafficMirrorFilterRulesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteTrafficMirrorFilterRulesResponse
     */
    public function deleteTrafficMirrorFilterRulesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->trafficMirrorFilterId)) {
            $query['TrafficMirrorFilterId'] = $request->trafficMirrorFilterId;
        }
        if (!Utils::isUnset($request->trafficMirrorFilterRuleIds)) {
            $query['TrafficMirrorFilterRuleIds'] = $request->trafficMirrorFilterRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficMirrorFilterRules',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficMirrorFilterRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrafficMirrorFilterRulesRequest $request
     *
     * @return DeleteTrafficMirrorFilterRulesResponse
     */
    public function deleteTrafficMirrorFilterRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficMirrorFilterRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrafficMirrorSessionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteTrafficMirrorSessionResponse
     */
    public function deleteTrafficMirrorSessionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->trafficMirrorSessionId)) {
            $query['TrafficMirrorSessionId'] = $request->trafficMirrorSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficMirrorSession',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficMirrorSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrafficMirrorSessionRequest $request
     *
     * @return DeleteTrafficMirrorSessionResponse
     */
    public function deleteTrafficMirrorSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficMirrorSessionWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVSwitch',
            'version'     => '2016-04-28',
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
     * @param DeleteVbrHaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteVbrHaResponse
     */
    public function deleteVbrHaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'DeleteVbrHa',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVbrHaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVbrHaRequest $request
     *
     * @return DeleteVbrHaResponse
     */
    public function deleteVbrHa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVbrHaWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVcoRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVcoRouteEntryResponse
     */
    public function deleteVcoRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVcoRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVcoRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVcoRouteEntryRequest $request
     *
     * @return DeleteVcoRouteEntryResponse
     */
    public function deleteVcoRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVcoRouteEntryWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVirtualBorderRouter',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVirtualBorderRouterResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpc',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteVpcGatewayEndpointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteVpcGatewayEndpointResponse
     */
    public function deleteVpcGatewayEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
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
            'action'      => 'DeleteVpcGatewayEndpoint',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcGatewayEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpcGatewayEndpointRequest $request
     *
     * @return DeleteVpcGatewayEndpointResponse
     */
    public function deleteVpcGatewayEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcGatewayEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpcPrefixListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVpcPrefixListResponse
     */
    public function deleteVpcPrefixListWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcPrefixList',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcPrefixListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpcPrefixListRequest $request
     *
     * @return DeleteVpcPrefixListResponse
     */
    public function deleteVpcPrefixList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcPrefixListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnAttachmentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVpnAttachmentResponse
     */
    public function deleteVpnAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpnAttachment',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpnAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpnAttachmentRequest $request
     *
     * @return DeleteVpnAttachmentResponse
     */
    public function deleteVpnAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnAttachmentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVpnConnectionResponse
     */
    public function deleteVpnConnectionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpnConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpnConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpnConnectionRequest $request
     *
     * @return DeleteVpnConnectionResponse
     */
    public function deleteVpnConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteVpnGatewayResponse
     */
    public function deleteVpnGatewayWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpnGateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpnGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpnGatewayRequest $request
     *
     * @return DeleteVpnGatewayResponse
     */
    public function deleteVpnGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnPbrRouteEntryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVpnPbrRouteEntryResponse
     */
    public function deleteVpnPbrRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->routeSource)) {
            $query['RouteSource'] = $request->routeSource;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpnPbrRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpnPbrRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpnPbrRouteEntryRequest $request
     *
     * @return DeleteVpnPbrRouteEntryResponse
     */
    public function deleteVpnPbrRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnPbrRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVpnRouteEntryResponse
     */
    public function deleteVpnRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpnRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpnRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpnRouteEntryRequest $request
     *
     * @return DeleteVpnRouteEntryResponse
     */
    public function deleteVpnRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeletionProtectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeletionProtectionResponse
     */
    public function deletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->protectionEnable)) {
            $query['ProtectionEnable'] = $request->protectionEnable;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletionProtection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletionProtectionRequest $request
     *
     * @return DeletionProtectionResponse
     */
    public function deletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletionProtectionWithOptions($request, $runtime);
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
        $query = [];
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessPoints',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessPointsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeBgpGroupsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBgpGroupsResponse
     */
    public function describeBgpGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bgpGroupId)) {
            $query['BgpGroupId'] = $request->bgpGroupId;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
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
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBgpGroups',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBgpGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBgpGroupsRequest $request
     *
     * @return DescribeBgpGroupsResponse
     */
    public function describeBgpGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBgpNetworksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBgpNetworksResponse
     */
    public function describeBgpNetworksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBgpNetworks',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBgpNetworksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBgpNetworksRequest $request
     *
     * @return DescribeBgpNetworksResponse
     */
    public function describeBgpNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpNetworksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBgpPeersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeBgpPeersResponse
     */
    public function describeBgpPeersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bgpGroupId)) {
            $query['BgpGroupId'] = $request->bgpGroupId;
        }
        if (!Utils::isUnset($request->bgpPeerId)) {
            $query['BgpPeerId'] = $request->bgpPeerId;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
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
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBgpPeers',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBgpPeersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBgpPeersRequest $request
     *
     * @return DescribeBgpPeersResponse
     */
    public function describeBgpPeers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpPeersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommonBandwidthPackagesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCommonBandwidthPackagesResponse
     */
    public function describeCommonBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->includeReservationData)) {
            $query['IncludeReservationData'] = $request->includeReservationData;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityProtectionEnabled)) {
            $query['SecurityProtectionEnabled'] = $request->securityProtectionEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCommonBandwidthPackages',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommonBandwidthPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommonBandwidthPackagesRequest $request
     *
     * @return DescribeCommonBandwidthPackagesResponse
     */
    public function describeCommonBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommonBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomerGatewayRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCustomerGatewayResponse
     */
    public function describeCustomerGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customerGatewayId)) {
            $query['CustomerGatewayId'] = $request->customerGatewayId;
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
            'action'      => 'DescribeCustomerGateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomerGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomerGatewayRequest $request
     *
     * @return DescribeCustomerGatewayResponse
     */
    public function describeCustomerGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomerGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomerGatewaysRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCustomerGatewaysResponse
     */
    public function describeCustomerGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customerGatewayId)) {
            $query['CustomerGatewayId'] = $request->customerGatewayId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomerGateways',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomerGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomerGatewaysRequest $request
     *
     * @return DescribeCustomerGatewaysResponse
     */
    public function describeCustomerGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomerGatewaysWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->associatedInstanceId)) {
            $query['AssociatedInstanceId'] = $request->associatedInstanceId;
        }
        if (!Utils::isUnset($request->associatedInstanceType)) {
            $query['AssociatedInstanceType'] = $request->associatedInstanceType;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->eipAddress)) {
            $query['EipAddress'] = $request->eipAddress;
        }
        if (!Utils::isUnset($request->eipName)) {
            $query['EipName'] = $request->eipName;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->includeReservationData)) {
            $query['IncludeReservationData'] = $request->includeReservationData;
        }
        if (!Utils::isUnset($request->lockReason)) {
            $query['LockReason'] = $request->lockReason;
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
        if (!Utils::isUnset($request->publicIpAddressPoolId)) {
            $query['PublicIpAddressPoolId'] = $request->publicIpAddressPoolId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->securityProtectionEnabled)) {
            $query['SecurityProtectionEnabled'] = $request->securityProtectionEnabled;
        }
        if (!Utils::isUnset($request->segmentInstanceId)) {
            $query['SegmentInstanceId'] = $request->segmentInstanceId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEipAddresses',
            'version'     => '2016-04-28',
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
     * @param DescribeEipGatewayInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEipGatewayInfoResponse
     */
    public function describeEipGatewayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'DescribeEipGatewayInfo',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEipGatewayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEipGatewayInfoRequest $request
     *
     * @return DescribeEipGatewayInfoResponse
     */
    public function describeEipGatewayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipGatewayInfoWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
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
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEipMonitorData',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEipMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeEipSegmentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEipSegmentResponse
     */
    public function describeEipSegmentWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->segmentInstanceId)) {
            $query['SegmentInstanceId'] = $request->segmentInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEipSegment',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEipSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEipSegmentRequest $request
     *
     * @return DescribeEipSegmentResponse
     */
    public function describeEipSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipSegmentWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFlowLogsResponse
     */
    public function describeFlowLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->trafficType)) {
            $query['TrafficType'] = $request->trafficType;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowLogs',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowLogsRequest $request
     *
     * @return DescribeFlowLogsResponse
     */
    public function describeFlowLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowLogsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->externalPort)) {
            $query['ExternalPort'] = $request->externalPort;
        }
        if (!Utils::isUnset($request->forwardEntryId)) {
            $query['ForwardEntryId'] = $request->forwardEntryId;
        }
        if (!Utils::isUnset($request->forwardEntryName)) {
            $query['ForwardEntryName'] = $request->forwardEntryName;
        }
        if (!Utils::isUnset($request->forwardTableId)) {
            $query['ForwardTableId'] = $request->forwardTableId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeForwardTableEntries',
            'version'     => '2016-04-28',
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
     * @param DescribeGlobalAccelerationInstancesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeGlobalAccelerationInstancesResponse
     */
    public function describeGlobalAccelerationInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthType)) {
            $query['BandwidthType'] = $request->bandwidthType;
        }
        if (!Utils::isUnset($request->globalAccelerationInstanceId)) {
            $query['GlobalAccelerationInstanceId'] = $request->globalAccelerationInstanceId;
        }
        if (!Utils::isUnset($request->includeReservationData)) {
            $query['IncludeReservationData'] = $request->includeReservationData;
        }
        if (!Utils::isUnset($request->ipAddress)) {
            $query['IpAddress'] = $request->ipAddress;
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
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        if (!Utils::isUnset($request->serviceLocation)) {
            $query['ServiceLocation'] = $request->serviceLocation;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalAccelerationInstances',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalAccelerationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGlobalAccelerationInstancesRequest $request
     *
     * @return DescribeGlobalAccelerationInstancesResponse
     */
    public function describeGlobalAccelerationInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalAccelerationInstancesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version'     => '2016-04-28',
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
     * @param DescribeHaVipsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeHaVipsResponse
     */
    public function describeHaVipsWithOptions($request, $runtime)
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
            'action'      => 'DescribeHaVips',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHaVipsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeHighDefinitionMonitorLogAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeHighDefinitionMonitorLogAttributeResponse
     */
    public function describeHighDefinitionMonitorLogAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeHighDefinitionMonitorLogAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHighDefinitionMonitorLogAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHighDefinitionMonitorLogAttributeRequest $request
     *
     * @return DescribeHighDefinitionMonitorLogAttributeResponse
     */
    public function describeHighDefinitionMonitorLogAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighDefinitionMonitorLogAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIPv6TranslatorAclListAttributesRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeIPv6TranslatorAclListAttributesResponse
     */
    public function describeIPv6TranslatorAclListAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIPv6TranslatorAclListAttributes',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIPv6TranslatorAclListAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIPv6TranslatorAclListAttributesRequest $request
     *
     * @return DescribeIPv6TranslatorAclListAttributesResponse
     */
    public function describeIPv6TranslatorAclListAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPv6TranslatorAclListAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIPv6TranslatorAclListsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeIPv6TranslatorAclListsResponse
     */
    public function describeIPv6TranslatorAclListsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIPv6TranslatorAclLists',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIPv6TranslatorAclListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIPv6TranslatorAclListsRequest $request
     *
     * @return DescribeIPv6TranslatorAclListsResponse
     */
    public function describeIPv6TranslatorAclLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPv6TranslatorAclListsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIPv6TranslatorEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeIPv6TranslatorEntriesResponse
     */
    public function describeIPv6TranslatorEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->allocateIpv6Addr)) {
            $query['AllocateIpv6Addr'] = $request->allocateIpv6Addr;
        }
        if (!Utils::isUnset($request->allocateIpv6Port)) {
            $query['AllocateIpv6Port'] = $request->allocateIpv6Port;
        }
        if (!Utils::isUnset($request->backendIpv4Addr)) {
            $query['BackendIpv4Addr'] = $request->backendIpv4Addr;
        }
        if (!Utils::isUnset($request->backendIpv4Port)) {
            $query['BackendIpv4Port'] = $request->backendIpv4Port;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->entryName)) {
            $query['EntryName'] = $request->entryName;
        }
        if (!Utils::isUnset($request->ipv6TranslatorEntryId)) {
            $query['Ipv6TranslatorEntryId'] = $request->ipv6TranslatorEntryId;
        }
        if (!Utils::isUnset($request->ipv6TranslatorId)) {
            $query['Ipv6TranslatorId'] = $request->ipv6TranslatorId;
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
        if (!Utils::isUnset($request->transProtocol)) {
            $query['TransProtocol'] = $request->transProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIPv6TranslatorEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIPv6TranslatorEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIPv6TranslatorEntriesRequest $request
     *
     * @return DescribeIPv6TranslatorEntriesResponse
     */
    public function describeIPv6TranslatorEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPv6TranslatorEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIPv6TranslatorsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeIPv6TranslatorsResponse
     */
    public function describeIPv6TranslatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocateIpv4Addr)) {
            $query['AllocateIpv4Addr'] = $request->allocateIpv4Addr;
        }
        if (!Utils::isUnset($request->allocateIpv6Addr)) {
            $query['AllocateIpv6Addr'] = $request->allocateIpv6Addr;
        }
        if (!Utils::isUnset($request->businessStatus)) {
            $query['BusinessStatus'] = $request->businessStatus;
        }
        if (!Utils::isUnset($request->ipv6TranslatorId)) {
            $query['Ipv6TranslatorId'] = $request->ipv6TranslatorId;
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIPv6Translators',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIPv6TranslatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIPv6TranslatorsRequest $request
     *
     * @return DescribeIPv6TranslatorsResponse
     */
    public function describeIPv6Translators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPv6TranslatorsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6AddressesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeIpv6AddressesResponse
     */
    public function describeIpv6AddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->associatedInstanceId)) {
            $query['AssociatedInstanceId'] = $request->associatedInstanceId;
        }
        if (!Utils::isUnset($request->associatedInstanceType)) {
            $query['AssociatedInstanceType'] = $request->associatedInstanceType;
        }
        if (!Utils::isUnset($request->ipv6Address)) {
            $query['Ipv6Address'] = $request->ipv6Address;
        }
        if (!Utils::isUnset($request->ipv6AddressId)) {
            $query['Ipv6AddressId'] = $request->ipv6AddressId;
        }
        if (!Utils::isUnset($request->ipv6InternetBandwidthId)) {
            $query['Ipv6InternetBandwidthId'] = $request->ipv6InternetBandwidthId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'DescribeIpv6Addresses',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpv6AddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpv6AddressesRequest $request
     *
     * @return DescribeIpv6AddressesResponse
     */
    public function describeIpv6Addresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6AddressesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6EgressOnlyRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeIpv6EgressOnlyRulesResponse
     */
    public function describeIpv6EgressOnlyRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ipv6EgressOnlyRuleId)) {
            $query['Ipv6EgressOnlyRuleId'] = $request->ipv6EgressOnlyRuleId;
        }
        if (!Utils::isUnset($request->ipv6GatewayId)) {
            $query['Ipv6GatewayId'] = $request->ipv6GatewayId;
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'DescribeIpv6EgressOnlyRules',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpv6EgressOnlyRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpv6EgressOnlyRulesRequest $request
     *
     * @return DescribeIpv6EgressOnlyRulesResponse
     */
    public function describeIpv6EgressOnlyRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6EgressOnlyRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6GatewayAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeIpv6GatewayAttributeResponse
     */
    public function describeIpv6GatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipv6GatewayId)) {
            $query['Ipv6GatewayId'] = $request->ipv6GatewayId;
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
            'action'      => 'DescribeIpv6GatewayAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpv6GatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpv6GatewayAttributeRequest $request
     *
     * @return DescribeIpv6GatewayAttributeResponse
     */
    public function describeIpv6GatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6GatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6GatewaysRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeIpv6GatewaysResponse
     */
    public function describeIpv6GatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipv6GatewayId)) {
            $query['Ipv6GatewayId'] = $request->ipv6GatewayId;
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpv6Gateways',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpv6GatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpv6GatewaysRequest $request
     *
     * @return DescribeIpv6GatewaysResponse
     */
    public function describeIpv6Gateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6GatewaysWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natType)) {
            $query['NatType'] = $request->natType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
            'action'      => 'DescribeNatGateways',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
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
     * @param DescribeNetworkAclAttributesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeNetworkAclAttributesResponse
     */
    public function describeNetworkAclAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'DescribeNetworkAclAttributes',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkAclAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNetworkAclAttributesRequest $request
     *
     * @return DescribeNetworkAclAttributesResponse
     */
    public function describeNetworkAclAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkAclAttributesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->networkAclName)) {
            $query['NetworkAclName'] = $request->networkAclName;
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
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkAcls',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
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
     * @param DescribePhysicalConnectionLOARequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePhysicalConnectionLOAResponse
     */
    public function describePhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'DescribePhysicalConnectionLOA',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhysicalConnectionLOAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePhysicalConnectionLOARequest $request
     *
     * @return DescribePhysicalConnectionLOAResponse
     */
    public function describePhysicalConnectionLOA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhysicalConnectionLOAWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->includeReservationData)) {
            $query['IncludeReservationData'] = $request->includeReservationData;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhysicalConnections',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhysicalConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribePublicIpAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePublicIpAddressResponse
     */
    public function describePublicIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribePublicIpAddress',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePublicIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePublicIpAddressRequest $request
     *
     * @return DescribePublicIpAddressResponse
     */
    public function describePublicIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePublicIpAddressWithOptions($request, $runtime);
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
            'action'      => 'DescribeRegions',
            'version'     => '2016-04-28',
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
     * @param DescribeRouteEntryListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRouteEntryListResponse
     */
    public function describeRouteEntryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->maxResult)) {
            $query['MaxResult'] = $request->maxResult;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $query['NextHopId'] = $request->nextHopId;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $query['NextHopType'] = $request->nextHopType;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action'      => 'DescribeRouteEntryList',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRouteEntryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRouteEntryListRequest $request
     *
     * @return DescribeRouteEntryListResponse
     */
    public function describeRouteEntryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteEntryListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteTableListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRouteTableListResponse
     */
    public function describeRouteTableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->routeTableName)) {
            $query['RouteTableName'] = $request->routeTableName;
        }
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        if (!Utils::isUnset($request->routerType)) {
            $query['RouterType'] = $request->routerType;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRouteTableList',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRouteTableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRouteTableListRequest $request
     *
     * @return DescribeRouteTableListResponse
     */
    public function describeRouteTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteTableListWithOptions($request, $runtime);
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
        $query = [];
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->routeTableName)) {
            $query['RouteTableName'] = $request->routeTableName;
        }
        if (!Utils::isUnset($request->routerId)) {
            $query['RouterId'] = $request->routerId;
        }
        if (!Utils::isUnset($request->routerType)) {
            $query['RouterType'] = $request->routerType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->VRouterId)) {
            $query['VRouterId'] = $request->VRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRouteTables',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRouteTablesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeRouterInterfaceAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeRouterInterfaceAttributeResponse
     */
    public function describeRouterInterfaceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'DescribeRouterInterfaceAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRouterInterfaceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRouterInterfaceAttributeRequest $request
     *
     * @return DescribeRouterInterfaceAttributeResponse
     */
    public function describeRouterInterfaceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouterInterfaceAttributeWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->includeReservationData)) {
            $query['IncludeReservationData'] = $request->includeReservationData;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRouterInterfaces',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRouterInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeServerRelatedGlobalAccelerationInstancesRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return DescribeServerRelatedGlobalAccelerationInstancesResponse
     */
    public function describeServerRelatedGlobalAccelerationInstancesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        if (!Utils::isUnset($request->serverType)) {
            $query['ServerType'] = $request->serverType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServerRelatedGlobalAccelerationInstances',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServerRelatedGlobalAccelerationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServerRelatedGlobalAccelerationInstancesRequest $request
     *
     * @return DescribeServerRelatedGlobalAccelerationInstancesResponse
     */
    public function describeServerRelatedGlobalAccelerationInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerRelatedGlobalAccelerationInstancesWithOptions($request, $runtime);
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
        $query = [];
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
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        if (!Utils::isUnset($request->snatEntryName)) {
            $query['SnatEntryName'] = $request->snatEntryName;
        }
        if (!Utils::isUnset($request->snatIp)) {
            $query['SnatIp'] = $request->snatIp;
        }
        if (!Utils::isUnset($request->snatTableId)) {
            $query['SnatTableId'] = $request->snatTableId;
        }
        if (!Utils::isUnset($request->sourceCIDR)) {
            $query['SourceCIDR'] = $request->sourceCIDR;
        }
        if (!Utils::isUnset($request->sourceVSwitchId)) {
            $query['SourceVSwitchId'] = $request->sourceVSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnatTableEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
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
     * @param DescribeSslVpnClientCertRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSslVpnClientCertResponse
     */
    public function describeSslVpnClientCertWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->sslVpnClientCertId)) {
            $query['SslVpnClientCertId'] = $request->sslVpnClientCertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSslVpnClientCert',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSslVpnClientCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSslVpnClientCertRequest $request
     *
     * @return DescribeSslVpnClientCertResponse
     */
    public function describeSslVpnClientCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSslVpnClientCertWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSslVpnClientCertsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSslVpnClientCertsResponse
     */
    public function describeSslVpnClientCertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
        if (!Utils::isUnset($request->sslVpnClientCertId)) {
            $query['SslVpnClientCertId'] = $request->sslVpnClientCertId;
        }
        if (!Utils::isUnset($request->sslVpnServerId)) {
            $query['SslVpnServerId'] = $request->sslVpnServerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSslVpnClientCerts',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSslVpnClientCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSslVpnClientCertsRequest $request
     *
     * @return DescribeSslVpnClientCertsResponse
     */
    public function describeSslVpnClientCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSslVpnClientCertsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSslVpnServersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSslVpnServersResponse
     */
    public function describeSslVpnServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
        if (!Utils::isUnset($request->sslVpnServerId)) {
            $query['SslVpnServerId'] = $request->sslVpnServerId;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSslVpnServers',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSslVpnServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSslVpnServersRequest $request
     *
     * @return DescribeSslVpnServersResponse
     */
    public function describeSslVpnServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSslVpnServersWithOptions($request, $runtime);
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
        $query = [];
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
        if (!Utils::isUnset($request->VRouterId)) {
            $query['VRouterId'] = $request->VRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVRouters',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVRoutersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeVSwitchAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVSwitchAttributesResponse
     */
    public function describeVSwitchAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVSwitchAttributes',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        if (!Utils::isUnset($request->vSwitchOwnerId)) {
            $query['VSwitchOwnerId'] = $request->vSwitchOwnerId;
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
            'action'      => 'DescribeVSwitches',
            'version'     => '2016-04-28',
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
     * @param DescribeVbrHaRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeVbrHaResponse
     */
    public function describeVbrHaWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->vbrHaId)) {
            $query['VbrHaId'] = $request->vbrHaId;
        }
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVbrHa',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVbrHaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVbrHaRequest $request
     *
     * @return DescribeVbrHaResponse
     */
    public function describeVbrHa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVbrHaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVcoRouteEntriesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVcoRouteEntriesResponse
     */
    public function describeVcoRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->routeEntryType)) {
            $query['RouteEntryType'] = $request->routeEntryType;
        }
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVcoRouteEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVcoRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVcoRouteEntriesRequest $request
     *
     * @return DescribeVcoRouteEntriesResponse
     */
    public function describeVcoRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVcoRouteEntriesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVirtualBorderRouters',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVirtualBorderRoutersResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
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
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
            'action'      => 'DescribeVirtualBorderRoutersForPhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVirtualBorderRoutersForPhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeVpcAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVpcAttributeResponse
     */
    public function describeVpcAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
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
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpcAttributeRequest $request
     *
     * @return DescribeVpcAttributeResponse
     */
    public function describeVpcAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcAttributeWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->dhcpOptionsSetId)) {
            $query['DhcpOptionsSetId'] = $request->dhcpOptionsSetId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->vpcName)) {
            $query['VpcName'] = $request->vpcName;
        }
        if (!Utils::isUnset($request->vpcOwnerId)) {
            $query['VpcOwnerId'] = $request->vpcOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcs',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeVpnAttachmentsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVpnAttachmentsResponse
     */
    public function describeVpnAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachType)) {
            $query['AttachType'] = $request->attachType;
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
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnAttachments',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnAttachmentsRequest $request
     *
     * @return DescribeVpnAttachmentsResponse
     */
    public function describeVpnAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnAttachmentsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnConnectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVpnConnectionResponse
     */
    public function describeVpnConnectionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnConnectionRequest $request
     *
     * @return DescribeVpnConnectionResponse
     */
    public function describeVpnConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnConnectionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVpnConnectionsResponse
     */
    public function describeVpnConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customerGatewayId)) {
            $query['CustomerGatewayId'] = $request->customerGatewayId;
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
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnConnections',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnConnectionsRequest $request
     *
     * @return DescribeVpnConnectionsResponse
     */
    public function describeVpnConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnCrossAccountAuthorizationsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeVpnCrossAccountAuthorizationsResponse
     */
    public function describeVpnCrossAccountAuthorizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnCrossAccountAuthorizations',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnCrossAccountAuthorizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnCrossAccountAuthorizationsRequest $request
     *
     * @return DescribeVpnCrossAccountAuthorizationsResponse
     */
    public function describeVpnCrossAccountAuthorizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnCrossAccountAuthorizationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnGatewayRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeVpnGatewayResponse
     */
    public function describeVpnGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeReservationData)) {
            $query['IncludeReservationData'] = $request->includeReservationData;
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
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnGateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnGatewayRequest $request
     *
     * @return DescribeVpnGatewayResponse
     */
    public function describeVpnGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnGatewaysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVpnGatewaysResponse
     */
    public function describeVpnGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessStatus)) {
            $query['BusinessStatus'] = $request->businessStatus;
        }
        if (!Utils::isUnset($request->includeReservationData)) {
            $query['IncludeReservationData'] = $request->includeReservationData;
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
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnGateways',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnGatewaysRequest $request
     *
     * @return DescribeVpnGatewaysResponse
     */
    public function describeVpnGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnPbrRouteEntriesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVpnPbrRouteEntriesResponse
     */
    public function describeVpnPbrRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnPbrRouteEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnPbrRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnPbrRouteEntriesRequest $request
     *
     * @return DescribeVpnPbrRouteEntriesResponse
     */
    public function describeVpnPbrRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnPbrRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnRouteEntriesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVpnRouteEntriesResponse
     */
    public function describeVpnRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->routeEntryType)) {
            $query['RouteEntryType'] = $request->routeEntryType;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnRouteEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnRouteEntriesRequest $request
     *
     * @return DescribeVpnRouteEntriesResponse
     */
    public function describeVpnRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnSslServerLogsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVpnSslServerLogsResponse
     */
    public function describeVpnSslServerLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->minutePeriod)) {
            $query['MinutePeriod'] = $request->minutePeriod;
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
        if (!Utils::isUnset($request->sslVpnClientCertId)) {
            $query['SslVpnClientCertId'] = $request->sslVpnClientCertId;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        if (!Utils::isUnset($request->vpnSslServerId)) {
            $query['VpnSslServerId'] = $request->vpnSslServerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpnSslServerLogs',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpnSslServerLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpnSslServerLogsRequest $request
     *
     * @return DescribeVpnSslServerLogsResponse
     */
    public function describeVpnSslServerLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnSslServerLogsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneType)) {
            $query['ZoneType'] = $request->zoneType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2016-04-28',
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
     * @param DetachDhcpOptionsSetFromVpcRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetachDhcpOptionsSetFromVpcResponse
     */
    public function detachDhcpOptionsSetFromVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetId)) {
            $query['DhcpOptionsSetId'] = $request->dhcpOptionsSetId;
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
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachDhcpOptionsSetFromVpc',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachDhcpOptionsSetFromVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachDhcpOptionsSetFromVpcRequest $request
     *
     * @return DetachDhcpOptionsSetFromVpcResponse
     */
    public function detachDhcpOptionsSetFromVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDhcpOptionsSetFromVpcWithOptions($request, $runtime);
    }

    /**
     * @param DisableNatGatewayEcsMetricRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableNatGatewayEcsMetricResponse
     */
    public function disableNatGatewayEcsMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableNatGatewayEcsMetric',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableNatGatewayEcsMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableNatGatewayEcsMetricRequest $request
     *
     * @return DisableNatGatewayEcsMetricResponse
     */
    public function disableNatGatewayEcsMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableNatGatewayEcsMetricWithOptions($request, $runtime);
    }

    /**
     * @param DisableVpcClassicLinkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableVpcClassicLinkResponse
     */
    public function disableVpcClassicLinkWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableVpcClassicLink',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableVpcClassicLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableVpcClassicLinkRequest $request
     *
     * @return DisableVpcClassicLinkResponse
     */
    public function disableVpcClassicLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVpcClassicLinkWithOptions($request, $runtime);
    }

    /**
     * @param DissociateRouteTableFromGatewayRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DissociateRouteTableFromGatewayResponse
     */
    public function dissociateRouteTableFromGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'DissociateRouteTableFromGateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateRouteTableFromGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateRouteTableFromGatewayRequest $request
     *
     * @return DissociateRouteTableFromGatewayResponse
     */
    public function dissociateRouteTableFromGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateRouteTableFromGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DissociateRouteTablesFromVpcGatewayEndpointRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DissociateRouteTablesFromVpcGatewayEndpointResponse
     */
    public function dissociateRouteTablesFromVpcGatewayEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
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
        if (!Utils::isUnset($request->routeTableIds)) {
            $query['RouteTableIds'] = $request->routeTableIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateRouteTablesFromVpcGatewayEndpoint',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateRouteTablesFromVpcGatewayEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateRouteTablesFromVpcGatewayEndpointRequest $request
     *
     * @return DissociateRouteTablesFromVpcGatewayEndpointResponse
     */
    public function dissociateRouteTablesFromVpcGatewayEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateRouteTablesFromVpcGatewayEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DissociateVpnGatewayWithCertificateRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DissociateVpnGatewayWithCertificateResponse
     */
    public function dissociateVpnGatewayWithCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->certificateType)) {
            $query['CertificateType'] = $request->certificateType;
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
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateVpnGatewayWithCertificate',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateVpnGatewayWithCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateVpnGatewayWithCertificateRequest $request
     *
     * @return DissociateVpnGatewayWithCertificateResponse
     */
    public function dissociateVpnGatewayWithCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateVpnGatewayWithCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DownloadVpnConnectionConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DownloadVpnConnectionConfigResponse
     */
    public function downloadVpnConnectionConfigWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadVpnConnectionConfig',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadVpnConnectionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadVpnConnectionConfigRequest $request
     *
     * @return DownloadVpnConnectionConfigResponse
     */
    public function downloadVpnConnectionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadVpnConnectionConfigWithOptions($request, $runtime);
    }

    /**
     * @param EnableNatGatewayEcsMetricRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableNatGatewayEcsMetricResponse
     */
    public function enableNatGatewayEcsMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableNatGatewayEcsMetric',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableNatGatewayEcsMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableNatGatewayEcsMetricRequest $request
     *
     * @return EnableNatGatewayEcsMetricResponse
     */
    public function enableNatGatewayEcsMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableNatGatewayEcsMetricWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
            'action'      => 'EnablePhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnablePhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param EnableVpcClassicLinkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableVpcClassicLinkResponse
     */
    public function enableVpcClassicLinkWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableVpcClassicLink',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableVpcClassicLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableVpcClassicLinkRequest $request
     *
     * @return EnableVpcClassicLinkResponse
     */
    public function enableVpcClassicLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableVpcClassicLinkWithOptions($request, $runtime);
    }

    /**
     * @param EnableVpcIpv4GatewayRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableVpcIpv4GatewayResponse
     */
    public function enableVpcIpv4GatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipv4GatewayId)) {
            $query['Ipv4GatewayId'] = $request->ipv4GatewayId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeTableList)) {
            $query['RouteTableList'] = $request->routeTableList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableVpcIpv4Gateway',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableVpcIpv4GatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableVpcIpv4GatewayRequest $request
     *
     * @return EnableVpcIpv4GatewayResponse
     */
    public function enableVpcIpv4Gateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableVpcIpv4GatewayWithOptions($request, $runtime);
    }

    /**
     * @param GetDhcpOptionsSetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDhcpOptionsSetResponse
     */
    public function getDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dhcpOptionsSetId)) {
            $query['DhcpOptionsSetId'] = $request->dhcpOptionsSetId;
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
            'action'      => 'GetDhcpOptionsSet',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDhcpOptionsSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDhcpOptionsSetRequest $request
     *
     * @return GetDhcpOptionsSetResponse
     */
    public function getDhcpOptionsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDhcpOptionsSetWithOptions($request, $runtime);
    }

    /**
     * @param GetFlowLogServiceStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetFlowLogServiceStatusResponse
     */
    public function getFlowLogServiceStatusWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'GetFlowLogServiceStatus',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFlowLogServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFlowLogServiceStatusRequest $request
     *
     * @return GetFlowLogServiceStatusResponse
     */
    public function getFlowLogServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowLogServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetIpv4GatewayAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetIpv4GatewayAttributeResponse
     */
    public function getIpv4GatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipv4GatewayId)) {
            $query['Ipv4GatewayId'] = $request->ipv4GatewayId;
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
            'action'      => 'GetIpv4GatewayAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIpv4GatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIpv4GatewayAttributeRequest $request
     *
     * @return GetIpv4GatewayAttributeResponse
     */
    public function getIpv4GatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpv4GatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param GetNatGatewayAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetNatGatewayAttributeResponse
     */
    public function getNatGatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
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
            'action'      => 'GetNatGatewayAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNatGatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNatGatewayAttributeRequest $request
     *
     * @return GetNatGatewayAttributeResponse
     */
    public function getNatGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNatGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param GetNatGatewayConvertStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetNatGatewayConvertStatusResponse
     */
    public function getNatGatewayConvertStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
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
            'action'      => 'GetNatGatewayConvertStatus',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNatGatewayConvertStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNatGatewayConvertStatusRequest $request
     *
     * @return GetNatGatewayConvertStatusResponse
     */
    public function getNatGatewayConvertStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNatGatewayConvertStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetPhysicalConnectionServiceStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetPhysicalConnectionServiceStatusResponse
     */
    public function getPhysicalConnectionServiceStatusWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalConnectionServiceStatus',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalConnectionServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPhysicalConnectionServiceStatusRequest $request
     *
     * @return GetPhysicalConnectionServiceStatusResponse
     */
    public function getPhysicalConnectionServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalConnectionServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetTrafficMirrorServiceStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetTrafficMirrorServiceStatusResponse
     */
    public function getTrafficMirrorServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrafficMirrorServiceStatus',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrafficMirrorServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrafficMirrorServiceStatusRequest $request
     *
     * @return GetTrafficMirrorServiceStatusResponse
     */
    public function getTrafficMirrorServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrafficMirrorServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetVpcGatewayEndpointAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetVpcGatewayEndpointAttributeResponse
     */
    public function getVpcGatewayEndpointAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
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
            'action'      => 'GetVpcGatewayEndpointAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpcGatewayEndpointAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVpcGatewayEndpointAttributeRequest $request
     *
     * @return GetVpcGatewayEndpointAttributeResponse
     */
    public function getVpcGatewayEndpointAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpcGatewayEndpointAttributeWithOptions($request, $runtime);
    }

    /**
     * @param GetVpcPrefixListAssociationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetVpcPrefixListAssociationsResponse
     */
    public function getVpcPrefixListAssociationsWithOptions($request, $runtime)
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
            'action'      => 'GetVpcPrefixListAssociations',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpcPrefixListAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVpcPrefixListAssociationsRequest $request
     *
     * @return GetVpcPrefixListAssociationsResponse
     */
    public function getVpcPrefixListAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpcPrefixListAssociationsWithOptions($request, $runtime);
    }

    /**
     * @param GetVpcPrefixListEntriesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVpcPrefixListEntriesResponse
     */
    public function getVpcPrefixListEntriesWithOptions($request, $runtime)
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
            'action'      => 'GetVpcPrefixListEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpcPrefixListEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVpcPrefixListEntriesRequest $request
     *
     * @return GetVpcPrefixListEntriesResponse
     */
    public function getVpcPrefixListEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpcPrefixListEntriesWithOptions($request, $runtime);
    }

    /**
     * @param GrantInstanceToCenRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GrantInstanceToCenResponse
     */
    public function grantInstanceToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'GrantInstanceToCen',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantInstanceToCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantInstanceToCenRequest $request
     *
     * @return GrantInstanceToCenResponse
     */
    public function grantInstanceToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantInstanceToCenWithOptions($request, $runtime);
    }

    /**
     * @param ListDhcpOptionsSetsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDhcpOptionsSetsResponse
     */
    public function listDhcpOptionsSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dhcpOptionsSetId)) {
            $query['DhcpOptionsSetId'] = $request->dhcpOptionsSetId;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetName)) {
            $query['DhcpOptionsSetName'] = $request->dhcpOptionsSetName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDhcpOptionsSets',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDhcpOptionsSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDhcpOptionsSetsRequest $request
     *
     * @return ListDhcpOptionsSetsResponse
     */
    public function listDhcpOptionsSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDhcpOptionsSetsWithOptions($request, $runtime);
    }

    /**
     * @param ListEnhanhcedNatGatewayAvailableZonesRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListEnhanhcedNatGatewayAvailableZonesResponse
     */
    public function listEnhanhcedNatGatewayAvailableZonesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'ListEnhanhcedNatGatewayAvailableZones',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEnhanhcedNatGatewayAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEnhanhcedNatGatewayAvailableZonesRequest $request
     *
     * @return ListEnhanhcedNatGatewayAvailableZonesResponse
     */
    public function listEnhanhcedNatGatewayAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnhanhcedNatGatewayAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * @param ListFullNatEntriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFullNatEntriesResponse
     */
    public function listFullNatEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fullNatEntryId)) {
            $query['FullNatEntryId'] = $request->fullNatEntryId;
        }
        if (!Utils::isUnset($request->fullNatEntryNames)) {
            $query['FullNatEntryNames'] = $request->fullNatEntryNames;
        }
        if (!Utils::isUnset($request->fullNatTableId)) {
            $query['FullNatTableId'] = $request->fullNatTableId;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
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
            'action'      => 'ListFullNatEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFullNatEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFullNatEntriesRequest $request
     *
     * @return ListFullNatEntriesResponse
     */
    public function listFullNatEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFullNatEntriesWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayRouteTableEntriesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListGatewayRouteTableEntriesResponse
     */
    public function listGatewayRouteTableEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->gatewayRouteTableId)) {
            $query['GatewayRouteTableId'] = $request->gatewayRouteTableId;
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
            'action'      => 'ListGatewayRouteTableEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayRouteTableEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewayRouteTableEntriesRequest $request
     *
     * @return ListGatewayRouteTableEntriesResponse
     */
    public function listGatewayRouteTableEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayRouteTableEntriesWithOptions($request, $runtime);
    }

    /**
     * @param ListIpsecServersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListIpsecServersResponse
     */
    public function listIpsecServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipsecServerId)) {
            $query['IpsecServerId'] = $request->ipsecServerId;
        }
        if (!Utils::isUnset($request->ipsecServerName)) {
            $query['IpsecServerName'] = $request->ipsecServerName;
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
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIpsecServers',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIpsecServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIpsecServersRequest $request
     *
     * @return ListIpsecServersResponse
     */
    public function listIpsecServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpsecServersWithOptions($request, $runtime);
    }

    /**
     * @param ListIpv4GatewaysRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListIpv4GatewaysResponse
     */
    public function listIpv4GatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipv4GatewayId)) {
            $query['Ipv4GatewayId'] = $request->ipv4GatewayId;
        }
        if (!Utils::isUnset($request->ipv4GatewayName)) {
            $query['Ipv4GatewayName'] = $request->ipv4GatewayName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIpv4Gateways',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIpv4GatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIpv4GatewaysRequest $request
     *
     * @return ListIpv4GatewaysResponse
     */
    public function listIpv4Gateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpv4GatewaysWithOptions($request, $runtime);
    }

    /**
     * @param ListNatIpCidrsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNatIpCidrsResponse
     */
    public function listNatIpCidrsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natIpCidr)) {
            $query['NatIpCidr'] = $request->natIpCidr;
        }
        if (!Utils::isUnset($request->natIpCidrName)) {
            $query['NatIpCidrName'] = $request->natIpCidrName;
        }
        if (!Utils::isUnset($request->natIpCidrStatus)) {
            $query['NatIpCidrStatus'] = $request->natIpCidrStatus;
        }
        if (!Utils::isUnset($request->natIpCidrs)) {
            $query['NatIpCidrs'] = $request->natIpCidrs;
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
            'action'      => 'ListNatIpCidrs',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNatIpCidrsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNatIpCidrsRequest $request
     *
     * @return ListNatIpCidrsResponse
     */
    public function listNatIpCidrs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNatIpCidrsWithOptions($request, $runtime);
    }

    /**
     * @param ListNatIpsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListNatIpsResponse
     */
    public function listNatIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natIpCidr)) {
            $query['NatIpCidr'] = $request->natIpCidr;
        }
        if (!Utils::isUnset($request->natIpIds)) {
            $query['NatIpIds'] = $request->natIpIds;
        }
        if (!Utils::isUnset($request->natIpName)) {
            $query['NatIpName'] = $request->natIpName;
        }
        if (!Utils::isUnset($request->natIpStatus)) {
            $query['NatIpStatus'] = $request->natIpStatus;
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
            'action'      => 'ListNatIps',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNatIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNatIpsRequest $request
     *
     * @return ListNatIpsResponse
     */
    public function listNatIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNatIpsWithOptions($request, $runtime);
    }

    /**
     * @param ListPrefixListsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPrefixListsResponse
     */
    public function listPrefixListsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->prefixListIds)) {
            $query['PrefixListIds'] = $request->prefixListIds;
        }
        if (!Utils::isUnset($request->prefixListName)) {
            $query['PrefixListName'] = $request->prefixListName;
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
            'action'      => 'ListPrefixLists',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrefixListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrefixListsRequest $request
     *
     * @return ListPrefixListsResponse
     */
    public function listPrefixLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrefixListsWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicIpAddressPoolCidrBlocksRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListPublicIpAddressPoolCidrBlocksResponse
     */
    public function listPublicIpAddressPoolCidrBlocksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
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
        if (!Utils::isUnset($request->publicIpAddressPoolId)) {
            $query['PublicIpAddressPoolId'] = $request->publicIpAddressPoolId;
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
            'action'      => 'ListPublicIpAddressPoolCidrBlocks',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicIpAddressPoolCidrBlocksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublicIpAddressPoolCidrBlocksRequest $request
     *
     * @return ListPublicIpAddressPoolCidrBlocksResponse
     */
    public function listPublicIpAddressPoolCidrBlocks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicIpAddressPoolCidrBlocksWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicIpAddressPoolsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPublicIpAddressPoolsResponse
     */
    public function listPublicIpAddressPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->publicIpAddressPoolIds)) {
            $query['PublicIpAddressPoolIds'] = $request->publicIpAddressPoolIds;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicIpAddressPools',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicIpAddressPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublicIpAddressPoolsRequest $request
     *
     * @return ListPublicIpAddressPoolsResponse
     */
    public function listPublicIpAddressPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicIpAddressPoolsWithOptions($request, $runtime);
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
            'version'     => '2016-04-28',
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
     * @param ListTrafficMirrorFiltersRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListTrafficMirrorFiltersResponse
     */
    public function listTrafficMirrorFiltersWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMirrorFilterIds)) {
            $query['TrafficMirrorFilterIds'] = $request->trafficMirrorFilterIds;
        }
        if (!Utils::isUnset($request->trafficMirrorFilterName)) {
            $query['TrafficMirrorFilterName'] = $request->trafficMirrorFilterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrafficMirrorFilters',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrafficMirrorFiltersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrafficMirrorFiltersRequest $request
     *
     * @return ListTrafficMirrorFiltersResponse
     */
    public function listTrafficMirrorFilters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrafficMirrorFiltersWithOptions($request, $runtime);
    }

    /**
     * @param ListTrafficMirrorSessionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListTrafficMirrorSessionsResponse
     */
    public function listTrafficMirrorSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
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
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
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
        if (!Utils::isUnset($request->trafficMirrorFilterId)) {
            $query['TrafficMirrorFilterId'] = $request->trafficMirrorFilterId;
        }
        if (!Utils::isUnset($request->trafficMirrorSessionIds)) {
            $query['TrafficMirrorSessionIds'] = $request->trafficMirrorSessionIds;
        }
        if (!Utils::isUnset($request->trafficMirrorSessionName)) {
            $query['TrafficMirrorSessionName'] = $request->trafficMirrorSessionName;
        }
        if (!Utils::isUnset($request->trafficMirrorSourceId)) {
            $query['TrafficMirrorSourceId'] = $request->trafficMirrorSourceId;
        }
        if (!Utils::isUnset($request->trafficMirrorTargetId)) {
            $query['TrafficMirrorTargetId'] = $request->trafficMirrorTargetId;
        }
        if (!Utils::isUnset($request->virtualNetworkId)) {
            $query['VirtualNetworkId'] = $request->virtualNetworkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrafficMirrorSessions',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrafficMirrorSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrafficMirrorSessionsRequest $request
     *
     * @return ListTrafficMirrorSessionsResponse
     */
    public function listTrafficMirrorSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrafficMirrorSessionsWithOptions($request, $runtime);
    }

    /**
     * @param ListVirtualPhysicalConnectionsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListVirtualPhysicalConnectionsResponse
     */
    public function listVirtualPhysicalConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isConfirmed)) {
            $query['IsConfirmed'] = $request->isConfirmed;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualPhysicalConnectionAliUids)) {
            $query['VirtualPhysicalConnectionAliUids'] = $request->virtualPhysicalConnectionAliUids;
        }
        if (!Utils::isUnset($request->virtualPhysicalConnectionBusinessStatus)) {
            $query['VirtualPhysicalConnectionBusinessStatus'] = $request->virtualPhysicalConnectionBusinessStatus;
        }
        if (!Utils::isUnset($request->virtualPhysicalConnectionIds)) {
            $query['VirtualPhysicalConnectionIds'] = $request->virtualPhysicalConnectionIds;
        }
        if (!Utils::isUnset($request->virtualPhysicalConnectionStatuses)) {
            $query['VirtualPhysicalConnectionStatuses'] = $request->virtualPhysicalConnectionStatuses;
        }
        if (!Utils::isUnset($request->vlanIds)) {
            $query['VlanIds'] = $request->vlanIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVirtualPhysicalConnections',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVirtualPhysicalConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVirtualPhysicalConnectionsRequest $request
     *
     * @return ListVirtualPhysicalConnectionsResponse
     */
    public function listVirtualPhysicalConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualPhysicalConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListVpcEndpointServicesByEndUserRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListVpcEndpointServicesByEndUserResponse
     */
    public function listVpcEndpointServicesByEndUserWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpointServicesByEndUser',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointServicesByEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVpcEndpointServicesByEndUserRequest $request
     *
     * @return ListVpcEndpointServicesByEndUserResponse
     */
    public function listVpcEndpointServicesByEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointServicesByEndUserWithOptions($request, $runtime);
    }

    /**
     * @param ListVpcGatewayEndpointsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVpcGatewayEndpointsResponse
     */
    public function listVpcGatewayEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $query['EndpointName'] = $request->endpointName;
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
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcGatewayEndpoints',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcGatewayEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVpcGatewayEndpointsRequest $request
     *
     * @return ListVpcGatewayEndpointsResponse
     */
    public function listVpcGatewayEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcGatewayEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param ListVpnCertificateAssociationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListVpnCertificateAssociationsResponse
     */
    public function listVpnCertificateAssociationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->certificateType)) {
            $query['CertificateType'] = $request->certificateType;
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
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpnCertificateAssociations',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpnCertificateAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVpnCertificateAssociationsRequest $request
     *
     * @return ListVpnCertificateAssociationsResponse
     */
    public function listVpnCertificateAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpnCertificateAssociationsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBgpGroupAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyBgpGroupAttributeResponse
     */
    public function modifyBgpGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->bgpGroupId)) {
            $query['BgpGroupId'] = $request->bgpGroupId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->isFakeAsn)) {
            $query['IsFakeAsn'] = $request->isFakeAsn;
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
        if (!Utils::isUnset($request->peerAsn)) {
            $query['PeerAsn'] = $request->peerAsn;
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
            'action'      => 'ModifyBgpGroupAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBgpGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBgpGroupAttributeRequest $request
     *
     * @return ModifyBgpGroupAttributeResponse
     */
    public function modifyBgpGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBgpGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBgpPeerAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBgpPeerAttributeResponse
     */
    public function modifyBgpPeerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bfdMultiHop)) {
            $query['BfdMultiHop'] = $request->bfdMultiHop;
        }
        if (!Utils::isUnset($request->bgpGroupId)) {
            $query['BgpGroupId'] = $request->bgpGroupId;
        }
        if (!Utils::isUnset($request->bgpPeerId)) {
            $query['BgpPeerId'] = $request->bgpPeerId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableBfd)) {
            $query['EnableBfd'] = $request->enableBfd;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->peerIpAddress)) {
            $query['PeerIpAddress'] = $request->peerIpAddress;
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
            'action'      => 'ModifyBgpPeerAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBgpPeerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBgpPeerAttributeRequest $request
     *
     * @return ModifyBgpPeerAttributeResponse
     */
    public function modifyBgpPeerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBgpPeerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommonBandwidthPackageAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyCommonBandwidthPackageAttributeResponse
     */
    public function modifyCommonBandwidthPackageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
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
            'action'      => 'ModifyCommonBandwidthPackageAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCommonBandwidthPackageAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackageAttributeRequest $request
     *
     * @return ModifyCommonBandwidthPackageAttributeResponse
     */
    public function modifyCommonBandwidthPackageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommonBandwidthPackageInternetChargeTypeRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return ModifyCommonBandwidthPackageInternetChargeTypeResponse
     */
    public function modifyCommonBandwidthPackageInternetChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ratio)) {
            $query['Ratio'] = $request->ratio;
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
            'action'      => 'ModifyCommonBandwidthPackageInternetChargeType',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCommonBandwidthPackageInternetChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackageInternetChargeTypeRequest $request
     *
     * @return ModifyCommonBandwidthPackageInternetChargeTypeResponse
     */
    public function modifyCommonBandwidthPackageInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackageInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommonBandwidthPackageIpBandwidthRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ModifyCommonBandwidthPackageIpBandwidthResponse
     */
    public function modifyCommonBandwidthPackageIpBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->eipId)) {
            $query['EipId'] = $request->eipId;
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
            'action'      => 'ModifyCommonBandwidthPackageIpBandwidth',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCommonBandwidthPackageIpBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackageIpBandwidthRequest $request
     *
     * @return ModifyCommonBandwidthPackageIpBandwidthResponse
     */
    public function modifyCommonBandwidthPackageIpBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackageIpBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommonBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyCommonBandwidthPackageSpecResponse
     */
    public function modifyCommonBandwidthPackageSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
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
            'action'      => 'ModifyCommonBandwidthPackageSpec',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCommonBandwidthPackageSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackageSpecRequest $request
     *
     * @return ModifyCommonBandwidthPackageSpecResponse
     */
    public function modifyCommonBandwidthPackageSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCustomerGatewayAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyCustomerGatewayAttributeResponse
     */
    public function modifyCustomerGatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->customerGatewayId)) {
            $query['CustomerGatewayId'] = $request->customerGatewayId;
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
            'action'      => 'ModifyCustomerGatewayAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCustomerGatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCustomerGatewayAttributeRequest $request
     *
     * @return ModifyCustomerGatewayAttributeResponse
     */
    public function modifyCustomerGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomerGatewayAttributeWithOptions($request, $runtime);
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
            'action'      => 'ModifyEipAddressAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEipAddressAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyExpressCloudConnectionAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyExpressCloudConnectionAttributeResponse
     */
    public function modifyExpressCloudConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bgpAs)) {
            $query['BgpAs'] = $request->bgpAs;
        }
        if (!Utils::isUnset($request->ceIp)) {
            $query['CeIp'] = $request->ceIp;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eccId)) {
            $query['EccId'] = $request->eccId;
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
        if (!Utils::isUnset($request->peIp)) {
            $query['PeIp'] = $request->peIp;
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
            'action'      => 'ModifyExpressCloudConnectionAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyExpressCloudConnectionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyExpressCloudConnectionAttributeRequest $request
     *
     * @return ModifyExpressCloudConnectionAttributeResponse
     */
    public function modifyExpressCloudConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressCloudConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyExpressCloudConnectionBandwidthRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyExpressCloudConnectionBandwidthResponse
     */
    public function modifyExpressCloudConnectionBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->eccId)) {
            $query['EccId'] = $request->eccId;
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
            'action'      => 'ModifyExpressCloudConnectionBandwidth',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyExpressCloudConnectionBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyExpressCloudConnectionBandwidthRequest $request
     *
     * @return ModifyExpressCloudConnectionBandwidthResponse
     */
    public function modifyExpressCloudConnectionBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressCloudConnectionBandwidthWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->aggregationInterval)) {
            $query['AggregationInterval'] = $request->aggregationInterval;
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
            'version'     => '2016-04-28',
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
     * @param ModifyForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyForwardEntryResponse
     */
    public function modifyForwardEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->externalIp)) {
            $query['ExternalIp'] = $request->externalIp;
        }
        if (!Utils::isUnset($request->externalPort)) {
            $query['ExternalPort'] = $request->externalPort;
        }
        if (!Utils::isUnset($request->forwardEntryId)) {
            $query['ForwardEntryId'] = $request->forwardEntryId;
        }
        if (!Utils::isUnset($request->forwardEntryName)) {
            $query['ForwardEntryName'] = $request->forwardEntryName;
        }
        if (!Utils::isUnset($request->forwardTableId)) {
            $query['ForwardTableId'] = $request->forwardTableId;
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->portBreak)) {
            $query['PortBreak'] = $request->portBreak;
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
            'action'      => 'ModifyForwardEntry',
            'version'     => '2016-04-28',
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
     * @param ModifyFullNatEntryAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyFullNatEntryAttributeResponse
     */
    public function modifyFullNatEntryAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessIp)) {
            $query['AccessIp'] = $request->accessIp;
        }
        if (!Utils::isUnset($request->accessPort)) {
            $query['AccessPort'] = $request->accessPort;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fullNatEntryDescription)) {
            $query['FullNatEntryDescription'] = $request->fullNatEntryDescription;
        }
        if (!Utils::isUnset($request->fullNatEntryId)) {
            $query['FullNatEntryId'] = $request->fullNatEntryId;
        }
        if (!Utils::isUnset($request->fullNatEntryName)) {
            $query['FullNatEntryName'] = $request->fullNatEntryName;
        }
        if (!Utils::isUnset($request->fullNatTableId)) {
            $query['FullNatTableId'] = $request->fullNatTableId;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->natIp)) {
            $query['NatIp'] = $request->natIp;
        }
        if (!Utils::isUnset($request->natIpPort)) {
            $query['NatIpPort'] = $request->natIpPort;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
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
            'action'      => 'ModifyFullNatEntryAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFullNatEntryAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFullNatEntryAttributeRequest $request
     *
     * @return ModifyFullNatEntryAttributeResponse
     */
    public function modifyFullNatEntryAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFullNatEntryAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalAccelerationInstanceAttributesRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return ModifyGlobalAccelerationInstanceAttributesResponse
     */
    public function modifyGlobalAccelerationInstanceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->globalAccelerationInstanceId)) {
            $query['GlobalAccelerationInstanceId'] = $request->globalAccelerationInstanceId;
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
            'action'      => 'ModifyGlobalAccelerationInstanceAttributes',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalAccelerationInstanceAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGlobalAccelerationInstanceAttributesRequest $request
     *
     * @return ModifyGlobalAccelerationInstanceAttributesResponse
     */
    public function modifyGlobalAccelerationInstanceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalAccelerationInstanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalAccelerationInstanceSpecRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ModifyGlobalAccelerationInstanceSpecResponse
     */
    public function modifyGlobalAccelerationInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->globalAccelerationInstanceId)) {
            $query['GlobalAccelerationInstanceId'] = $request->globalAccelerationInstanceId;
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
            'action'      => 'ModifyGlobalAccelerationInstanceSpec',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalAccelerationInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGlobalAccelerationInstanceSpecRequest $request
     *
     * @return ModifyGlobalAccelerationInstanceSpecResponse
     */
    public function modifyGlobalAccelerationInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalAccelerationInstanceSpecWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->haVipId)) {
            $query['HaVipId'] = $request->haVipId;
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
            'action'      => 'ModifyHaVipAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHaVipAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyIPv6TranslatorAclAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyIPv6TranslatorAclAttributeResponse
     */
    public function modifyIPv6TranslatorAclAttributeWithOptions($request, $runtime)
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
            'action'      => 'ModifyIPv6TranslatorAclAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIPv6TranslatorAclAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorAclAttributeRequest $request
     *
     * @return ModifyIPv6TranslatorAclAttributeResponse
     */
    public function modifyIPv6TranslatorAclAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorAclAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorAclListEntryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyIPv6TranslatorAclListEntryResponse
     */
    public function modifyIPv6TranslatorAclListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntryComment)) {
            $query['AclEntryComment'] = $request->aclEntryComment;
        }
        if (!Utils::isUnset($request->aclEntryId)) {
            $query['AclEntryId'] = $request->aclEntryId;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
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
            'action'      => 'ModifyIPv6TranslatorAclListEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIPv6TranslatorAclListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorAclListEntryRequest $request
     *
     * @return ModifyIPv6TranslatorAclListEntryResponse
     */
    public function modifyIPv6TranslatorAclListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorAclListEntryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyIPv6TranslatorAttributeResponse
     */
    public function modifyIPv6TranslatorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipv6TranslatorId)) {
            $query['Ipv6TranslatorId'] = $request->ipv6TranslatorId;
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
            'action'      => 'ModifyIPv6TranslatorAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIPv6TranslatorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorAttributeRequest $request
     *
     * @return ModifyIPv6TranslatorAttributeResponse
     */
    public function modifyIPv6TranslatorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorBandwidthRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyIPv6TranslatorBandwidthResponse
     */
    public function modifyIPv6TranslatorBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipv6TranslatorId)) {
            $query['Ipv6TranslatorId'] = $request->ipv6TranslatorId;
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
            'action'      => 'ModifyIPv6TranslatorBandwidth',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIPv6TranslatorBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorBandwidthRequest $request
     *
     * @return ModifyIPv6TranslatorBandwidthResponse
     */
    public function modifyIPv6TranslatorBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyIPv6TranslatorEntryResponse
     */
    public function modifyIPv6TranslatorEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->allocateIpv6Port)) {
            $query['AllocateIpv6Port'] = $request->allocateIpv6Port;
        }
        if (!Utils::isUnset($request->backendIpv4Addr)) {
            $query['BackendIpv4Addr'] = $request->backendIpv4Addr;
        }
        if (!Utils::isUnset($request->backendIpv4Port)) {
            $query['BackendIpv4Port'] = $request->backendIpv4Port;
        }
        if (!Utils::isUnset($request->entryBandwidth)) {
            $query['EntryBandwidth'] = $request->entryBandwidth;
        }
        if (!Utils::isUnset($request->entryDescription)) {
            $query['EntryDescription'] = $request->entryDescription;
        }
        if (!Utils::isUnset($request->entryName)) {
            $query['EntryName'] = $request->entryName;
        }
        if (!Utils::isUnset($request->ipv6TranslatorEntryId)) {
            $query['Ipv6TranslatorEntryId'] = $request->ipv6TranslatorEntryId;
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
        if (!Utils::isUnset($request->transProtocol)) {
            $query['TransProtocol'] = $request->transProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIPv6TranslatorEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIPv6TranslatorEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorEntryRequest $request
     *
     * @return ModifyIPv6TranslatorEntryResponse
     */
    public function modifyIPv6TranslatorEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorEntryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpv6AddressAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyIpv6AddressAttributeResponse
     */
    public function modifyIpv6AddressAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipv6AddressId)) {
            $query['Ipv6AddressId'] = $request->ipv6AddressId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'ModifyIpv6AddressAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpv6AddressAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIpv6AddressAttributeRequest $request
     *
     * @return ModifyIpv6AddressAttributeResponse
     */
    public function modifyIpv6AddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpv6AddressAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpv6GatewayAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyIpv6GatewayAttributeResponse
     */
    public function modifyIpv6GatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipv6GatewayId)) {
            $query['Ipv6GatewayId'] = $request->ipv6GatewayId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'ModifyIpv6GatewayAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpv6GatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIpv6GatewayAttributeRequest $request
     *
     * @return ModifyIpv6GatewayAttributeResponse
     */
    public function modifyIpv6GatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpv6GatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpv6GatewaySpecRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyIpv6GatewaySpecResponse
     */
    public function modifyIpv6GatewaySpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipv6GatewayId)) {
            $query['Ipv6GatewayId'] = $request->ipv6GatewayId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIpv6GatewaySpec',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpv6GatewaySpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIpv6GatewaySpecRequest $request
     *
     * @return ModifyIpv6GatewaySpecResponse
     */
    public function modifyIpv6GatewaySpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpv6GatewaySpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpv6InternetBandwidthRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyIpv6InternetBandwidthResponse
     */
    public function modifyIpv6InternetBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipv6AddressId)) {
            $query['Ipv6AddressId'] = $request->ipv6AddressId;
        }
        if (!Utils::isUnset($request->ipv6InternetBandwidthId)) {
            $query['Ipv6InternetBandwidthId'] = $request->ipv6InternetBandwidthId;
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
            'action'      => 'ModifyIpv6InternetBandwidth',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpv6InternetBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIpv6InternetBandwidthRequest $request
     *
     * @return ModifyIpv6InternetBandwidthResponse
     */
    public function modifyIpv6InternetBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpv6InternetBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNatGatewayAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyNatGatewayAttributeResponse
     */
    public function modifyNatGatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->icmpReplyEnabled)) {
            $query['IcmpReplyEnabled'] = $request->icmpReplyEnabled;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
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
            'action'      => 'ModifyNatGatewayAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNatGatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNatGatewayAttributeRequest $request
     *
     * @return ModifyNatGatewayAttributeResponse
     */
    public function modifyNatGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNatGatewaySpecRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyNatGatewaySpecResponse
     */
    public function modifyNatGatewaySpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
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
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNatGatewaySpec',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNatGatewaySpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNatGatewaySpecRequest $request
     *
     * @return ModifyNatGatewaySpecResponse
     */
    public function modifyNatGatewaySpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatGatewaySpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNatIpAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyNatIpAttributeResponse
     */
    public function modifyNatIpAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natIpDescription)) {
            $query['NatIpDescription'] = $request->natIpDescription;
        }
        if (!Utils::isUnset($request->natIpId)) {
            $query['NatIpId'] = $request->natIpId;
        }
        if (!Utils::isUnset($request->natIpName)) {
            $query['NatIpName'] = $request->natIpName;
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
            'action'      => 'ModifyNatIpAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNatIpAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNatIpAttributeRequest $request
     *
     * @return ModifyNatIpAttributeResponse
     */
    public function modifyNatIpAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatIpAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNatIpCidrAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyNatIpCidrAttributeResponse
     */
    public function modifyNatIpCidrAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natIpCidr)) {
            $query['NatIpCidr'] = $request->natIpCidr;
        }
        if (!Utils::isUnset($request->natIpCidrDescription)) {
            $query['NatIpCidrDescription'] = $request->natIpCidrDescription;
        }
        if (!Utils::isUnset($request->natIpCidrName)) {
            $query['NatIpCidrName'] = $request->natIpCidrName;
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
            'action'      => 'ModifyNatIpCidrAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNatIpCidrAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNatIpCidrAttributeRequest $request
     *
     * @return ModifyNatIpCidrAttributeResponse
     */
    public function modifyNatIpCidrAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatIpCidrAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkAclAttributesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyNetworkAclAttributesResponse
     */
    public function modifyNetworkAclAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->networkAclName)) {
            $query['NetworkAclName'] = $request->networkAclName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'ModifyNetworkAclAttributes',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNetworkAclAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNetworkAclAttributesRequest $request
     *
     * @return ModifyNetworkAclAttributesResponse
     */
    public function modifyNetworkAclAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkAclAttributesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->circuitCode)) {
            $query['CircuitCode'] = $request->circuitCode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->lineOperator)) {
            $query['LineOperator'] = $request->lineOperator;
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
        if (!Utils::isUnset($request->peerLocation)) {
            $query['PeerLocation'] = $request->peerLocation;
        }
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
        }
        if (!Utils::isUnset($request->portType)) {
            $query['PortType'] = $request->portType;
        }
        if (!Utils::isUnset($request->redundantPhysicalConnectionId)) {
            $query['RedundantPhysicalConnectionId'] = $request->redundantPhysicalConnectionId;
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
        if (!Utils::isUnset($request->bandwidth)) {
            $query['bandwidth'] = $request->bandwidth;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPhysicalConnectionAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPhysicalConnectionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyRouteEntryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyRouteEntryResponse
     */
    public function modifyRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
        if (!Utils::isUnset($request->routeEntryId)) {
            $query['RouteEntryId'] = $request->routeEntryId;
        }
        if (!Utils::isUnset($request->routeEntryName)) {
            $query['RouteEntryName'] = $request->routeEntryName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRouteEntryRequest $request
     *
     * @return ModifyRouteEntryResponse
     */
    public function modifyRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRouteTableAttributesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyRouteTableAttributesResponse
     */
    public function modifyRouteTableAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        if (!Utils::isUnset($request->routeTableName)) {
            $query['RouteTableName'] = $request->routeTableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRouteTableAttributes',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRouteTableAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRouteTableAttributesRequest $request
     *
     * @return ModifyRouteTableAttributesResponse
     */
    public function modifyRouteTableAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouteTableAttributesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->deleteHealthCheckIp)) {
            $query['DeleteHealthCheckIp'] = $request->deleteHealthCheckIp;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->hcRate)) {
            $query['HcRate'] = $request->hcRate;
        }
        if (!Utils::isUnset($request->hcThreshold)) {
            $query['HcThreshold'] = $request->hcThreshold;
        }
        if (!Utils::isUnset($request->healthCheckSourceIp)) {
            $query['HealthCheckSourceIp'] = $request->healthCheckSourceIp;
        }
        if (!Utils::isUnset($request->healthCheckTargetIp)) {
            $query['HealthCheckTargetIp'] = $request->healthCheckTargetIp;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->oppositeInterfaceId)) {
            $query['OppositeInterfaceId'] = $request->oppositeInterfaceId;
        }
        if (!Utils::isUnset($request->oppositeInterfaceOwnerId)) {
            $query['OppositeInterfaceOwnerId'] = $request->oppositeInterfaceOwnerId;
        }
        if (!Utils::isUnset($request->oppositeRouterId)) {
            $query['OppositeRouterId'] = $request->oppositeRouterId;
        }
        if (!Utils::isUnset($request->oppositeRouterType)) {
            $query['OppositeRouterType'] = $request->oppositeRouterType;
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
        if (!Utils::isUnset($request->routerInterfaceId)) {
            $query['RouterInterfaceId'] = $request->routerInterfaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRouterInterfaceAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRouterInterfaceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routerInterfaceId)) {
            $query['RouterInterfaceId'] = $request->routerInterfaceId;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRouterInterfaceSpec',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRouterInterfaceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifySnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifySnatEntryResponse
     */
    public function modifySnatEntryWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        if (!Utils::isUnset($request->snatEntryName)) {
            $query['SnatEntryName'] = $request->snatEntryName;
        }
        if (!Utils::isUnset($request->snatIp)) {
            $query['SnatIp'] = $request->snatIp;
        }
        if (!Utils::isUnset($request->snatTableId)) {
            $query['SnatTableId'] = $request->snatTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySnatEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifySslVpnClientCertRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifySslVpnClientCertResponse
     */
    public function modifySslVpnClientCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sslVpnClientCertId)) {
            $query['SslVpnClientCertId'] = $request->sslVpnClientCertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySslVpnClientCert',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySslVpnClientCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySslVpnClientCertRequest $request
     *
     * @return ModifySslVpnClientCertResponse
     */
    public function modifySslVpnClientCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySslVpnClientCertWithOptions($request, $runtime);
    }

    /**
     * @param ModifySslVpnServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifySslVpnServerResponse
     */
    public function modifySslVpnServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cipher)) {
            $query['Cipher'] = $request->cipher;
        }
        if (!Utils::isUnset($request->clientIpPool)) {
            $query['ClientIpPool'] = $request->clientIpPool;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compress)) {
            $query['Compress'] = $request->compress;
        }
        if (!Utils::isUnset($request->enableMultiFactorAuth)) {
            $query['EnableMultiFactorAuth'] = $request->enableMultiFactorAuth;
        }
        if (!Utils::isUnset($request->IDaaSInstanceId)) {
            $query['IDaaSInstanceId'] = $request->IDaaSInstanceId;
        }
        if (!Utils::isUnset($request->IDaaSRegionId)) {
            $query['IDaaSRegionId'] = $request->IDaaSRegionId;
        }
        if (!Utils::isUnset($request->localSubnet)) {
            $query['LocalSubnet'] = $request->localSubnet;
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
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
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
        if (!Utils::isUnset($request->sslVpnServerId)) {
            $query['SslVpnServerId'] = $request->sslVpnServerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySslVpnServer',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySslVpnServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySslVpnServerRequest $request
     *
     * @return ModifySslVpnServerResponse
     */
    public function modifySslVpnServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySslVpnServerWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
        if (!Utils::isUnset($request->VRouterId)) {
            $query['VRouterId'] = $request->VRouterId;
        }
        if (!Utils::isUnset($request->VRouterName)) {
            $query['VRouterName'] = $request->VRouterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVRouterAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVRouterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableIPv6)) {
            $query['EnableIPv6'] = $request->enableIPv6;
        }
        if (!Utils::isUnset($request->ipv6CidrBlock)) {
            $query['Ipv6CidrBlock'] = $request->ipv6CidrBlock;
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
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        if (!Utils::isUnset($request->vpcIpv6CidrBlock)) {
            $query['VpcIpv6CidrBlock'] = $request->vpcIpv6CidrBlock;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVSwitchAttribute',
            'version'     => '2016-04-28',
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
     * @param ModifyVcoRouteEntryWeightRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVcoRouteEntryWeightResponse
     */
    public function modifyVcoRouteEntryWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->newWeight)) {
            $query['NewWeight'] = $request->newWeight;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVcoRouteEntryWeight',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVcoRouteEntryWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVcoRouteEntryWeightRequest $request
     *
     * @return ModifyVcoRouteEntryWeightResponse
     */
    public function modifyVcoRouteEntryWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVcoRouteEntryWeightWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->associatedPhysicalConnections)) {
            $query['AssociatedPhysicalConnections'] = $request->associatedPhysicalConnections;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->circuitCode)) {
            $query['CircuitCode'] = $request->circuitCode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->detectMultiplier)) {
            $query['DetectMultiplier'] = $request->detectMultiplier;
        }
        if (!Utils::isUnset($request->enableIpv6)) {
            $query['EnableIpv6'] = $request->enableIpv6;
        }
        if (!Utils::isUnset($request->localGatewayIp)) {
            $query['LocalGatewayIp'] = $request->localGatewayIp;
        }
        if (!Utils::isUnset($request->localIpv6GatewayIp)) {
            $query['LocalIpv6GatewayIp'] = $request->localIpv6GatewayIp;
        }
        if (!Utils::isUnset($request->minRxInterval)) {
            $query['MinRxInterval'] = $request->minRxInterval;
        }
        if (!Utils::isUnset($request->minTxInterval)) {
            $query['MinTxInterval'] = $request->minTxInterval;
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
        if (!Utils::isUnset($request->peerGatewayIp)) {
            $query['PeerGatewayIp'] = $request->peerGatewayIp;
        }
        if (!Utils::isUnset($request->peerIpv6GatewayIp)) {
            $query['PeerIpv6GatewayIp'] = $request->peerIpv6GatewayIp;
        }
        if (!Utils::isUnset($request->peeringIpv6SubnetMask)) {
            $query['PeeringIpv6SubnetMask'] = $request->peeringIpv6SubnetMask;
        }
        if (!Utils::isUnset($request->peeringSubnetMask)) {
            $query['PeeringSubnetMask'] = $request->peeringSubnetMask;
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
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        if (!Utils::isUnset($request->vlanId)) {
            $query['VlanId'] = $request->vlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVirtualBorderRouterAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVirtualBorderRouterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableIPv6)) {
            $query['EnableIPv6'] = $request->enableIPv6;
        }
        if (!Utils::isUnset($request->ipv6CidrBlock)) {
            $query['Ipv6CidrBlock'] = $request->ipv6CidrBlock;
        }
        if (!Utils::isUnset($request->ipv6Isp)) {
            $query['Ipv6Isp'] = $request->ipv6Isp;
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
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcName)) {
            $query['VpcName'] = $request->vpcName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyVpcPrefixListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyVpcPrefixListResponse
     */
    public function modifyVpcPrefixListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addPrefixListEntry)) {
            $query['AddPrefixListEntry'] = $request->addPrefixListEntry;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->maxEntries)) {
            $query['MaxEntries'] = $request->maxEntries;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prefixListDescription)) {
            $query['PrefixListDescription'] = $request->prefixListDescription;
        }
        if (!Utils::isUnset($request->prefixListId)) {
            $query['PrefixListId'] = $request->prefixListId;
        }
        if (!Utils::isUnset($request->prefixListName)) {
            $query['PrefixListName'] = $request->prefixListName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->removePrefixListEntry)) {
            $query['RemovePrefixListEntry'] = $request->removePrefixListEntry;
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
            'action'      => 'ModifyVpcPrefixList',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcPrefixListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVpcPrefixListRequest $request
     *
     * @return ModifyVpcPrefixListResponse
     */
    public function modifyVpcPrefixList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcPrefixListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnAttachmentAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyVpnAttachmentAttributeResponse
     */
    public function modifyVpnAttachmentAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoConfigRoute)) {
            $query['AutoConfigRoute'] = $request->autoConfigRoute;
        }
        if (!Utils::isUnset($request->bgpConfig)) {
            $query['BgpConfig'] = $request->bgpConfig;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effectImmediately)) {
            $query['EffectImmediately'] = $request->effectImmediately;
        }
        if (!Utils::isUnset($request->enableDpd)) {
            $query['EnableDpd'] = $request->enableDpd;
        }
        if (!Utils::isUnset($request->enableNatTraversal)) {
            $query['EnableNatTraversal'] = $request->enableNatTraversal;
        }
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $query['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->ikeConfig)) {
            $query['IkeConfig'] = $request->ikeConfig;
        }
        if (!Utils::isUnset($request->ipsecConfig)) {
            $query['IpsecConfig'] = $request->ipsecConfig;
        }
        if (!Utils::isUnset($request->localSubnet)) {
            $query['LocalSubnet'] = $request->localSubnet;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteCaCert)) {
            $query['RemoteCaCert'] = $request->remoteCaCert;
        }
        if (!Utils::isUnset($request->remoteSubnet)) {
            $query['RemoteSubnet'] = $request->remoteSubnet;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpnAttachmentAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpnAttachmentAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVpnAttachmentAttributeRequest $request
     *
     * @return ModifyVpnAttachmentAttributeResponse
     */
    public function modifyVpnAttachmentAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnAttachmentAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnConnectionAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyVpnConnectionAttributeResponse
     */
    public function modifyVpnConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoConfigRoute)) {
            $query['AutoConfigRoute'] = $request->autoConfigRoute;
        }
        if (!Utils::isUnset($request->bgpConfig)) {
            $query['BgpConfig'] = $request->bgpConfig;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effectImmediately)) {
            $query['EffectImmediately'] = $request->effectImmediately;
        }
        if (!Utils::isUnset($request->enableDpd)) {
            $query['EnableDpd'] = $request->enableDpd;
        }
        if (!Utils::isUnset($request->enableNatTraversal)) {
            $query['EnableNatTraversal'] = $request->enableNatTraversal;
        }
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $query['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->ikeConfig)) {
            $query['IkeConfig'] = $request->ikeConfig;
        }
        if (!Utils::isUnset($request->ipsecConfig)) {
            $query['IpsecConfig'] = $request->ipsecConfig;
        }
        if (!Utils::isUnset($request->localSubnet)) {
            $query['LocalSubnet'] = $request->localSubnet;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteCaCertificate)) {
            $query['RemoteCaCertificate'] = $request->remoteCaCertificate;
        }
        if (!Utils::isUnset($request->remoteSubnet)) {
            $query['RemoteSubnet'] = $request->remoteSubnet;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpnConnectionId)) {
            $query['VpnConnectionId'] = $request->vpnConnectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpnConnectionAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpnConnectionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVpnConnectionAttributeRequest $request
     *
     * @return ModifyVpnConnectionAttributeResponse
     */
    public function modifyVpnConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnGatewayAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVpnGatewayAttributeResponse
     */
    public function modifyVpnGatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPropagate)) {
            $query['AutoPropagate'] = $request->autoPropagate;
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
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpnGatewayAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpnGatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVpnGatewayAttributeRequest $request
     *
     * @return ModifyVpnGatewayAttributeResponse
     */
    public function modifyVpnGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnPbrRouteEntryWeightRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyVpnPbrRouteEntryWeightResponse
     */
    public function modifyVpnPbrRouteEntryWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->newWeight)) {
            $query['NewWeight'] = $request->newWeight;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->routeSource)) {
            $query['RouteSource'] = $request->routeSource;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpnPbrRouteEntryWeight',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpnPbrRouteEntryWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVpnPbrRouteEntryWeightRequest $request
     *
     * @return ModifyVpnPbrRouteEntryWeightResponse
     */
    public function modifyVpnPbrRouteEntryWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnPbrRouteEntryWeightWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnRouteEntryWeightRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVpnRouteEntryWeightResponse
     */
    public function modifyVpnRouteEntryWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->newWeight)) {
            $query['NewWeight'] = $request->newWeight;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->overlayMode)) {
            $query['OverlayMode'] = $request->overlayMode;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpnRouteEntryWeight',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpnRouteEntryWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVpnRouteEntryWeightRequest $request
     *
     * @return ModifyVpnRouteEntryWeightResponse
     */
    public function modifyVpnRouteEntryWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnRouteEntryWeightWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2016-04-28',
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
     * @param OpenFlowLogServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OpenFlowLogServiceResponse
     */
    public function openFlowLogServiceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'OpenFlowLogService',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenFlowLogServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenFlowLogServiceRequest $request
     *
     * @return OpenFlowLogServiceResponse
     */
    public function openFlowLogService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openFlowLogServiceWithOptions($request, $runtime);
    }

    /**
     * @param OpenPhysicalConnectionServiceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return OpenPhysicalConnectionServiceResponse
     */
    public function openPhysicalConnectionServiceWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenPhysicalConnectionService',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenPhysicalConnectionServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenPhysicalConnectionServiceRequest $request
     *
     * @return OpenPhysicalConnectionServiceResponse
     */
    public function openPhysicalConnectionService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openPhysicalConnectionServiceWithOptions($request, $runtime);
    }

    /**
     * @param OpenTrafficMirrorServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OpenTrafficMirrorServiceResponse
     */
    public function openTrafficMirrorServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenTrafficMirrorService',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenTrafficMirrorServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenTrafficMirrorServiceRequest $request
     *
     * @return OpenTrafficMirrorServiceResponse
     */
    public function openTrafficMirrorService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openTrafficMirrorServiceWithOptions($request, $runtime);
    }

    /**
     * @param PublishVpnRouteEntryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PublishVpnRouteEntryResponse
     */
    public function publishVpnRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $query['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->publishVpc)) {
            $query['PublishVpc'] = $request->publishVpc;
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
        if (!Utils::isUnset($request->routeDest)) {
            $query['RouteDest'] = $request->routeDest;
        }
        if (!Utils::isUnset($request->routeType)) {
            $query['RouteType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->vpnGatewayId)) {
            $query['VpnGatewayId'] = $request->vpnGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishVpnRouteEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishVpnRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishVpnRouteEntryRequest $request
     *
     * @return PublishVpnRouteEntryResponse
     */
    public function publishVpnRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishVpnRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param RecoverPhysicalConnectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecoverPhysicalConnectionResponse
     */
    public function recoverPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoverPhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoverPhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecoverPhysicalConnectionRequest $request
     *
     * @return RecoverPhysicalConnectionResponse
     */
    public function recoverPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverPhysicalConnectionWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoverVirtualBorderRouter',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoverVirtualBorderRouterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ReleaseEipAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
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
            'action'      => 'ReleaseEipAddress',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ReleaseEipSegmentAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseEipSegmentAddressResponse
     */
    public function releaseEipSegmentAddressWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->segmentInstanceId)) {
            $query['SegmentInstanceId'] = $request->segmentInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseEipSegmentAddress',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseEipSegmentAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseEipSegmentAddressRequest $request
     *
     * @return ReleaseEipSegmentAddressResponse
     */
    public function releaseEipSegmentAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseEipSegmentAddressWithOptions($request, $runtime);
    }

    /**
     * @param RemoveCommonBandwidthPackageIpRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveCommonBandwidthPackageIpResponse
     */
    public function removeCommonBandwidthPackageIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipInstanceId)) {
            $query['IpInstanceId'] = $request->ipInstanceId;
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
            'action'      => 'RemoveCommonBandwidthPackageIp',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveCommonBandwidthPackageIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveCommonBandwidthPackageIpRequest $request
     *
     * @return RemoveCommonBandwidthPackageIpResponse
     */
    public function removeCommonBandwidthPackageIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCommonBandwidthPackageIpWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGlobalAccelerationInstanceIpRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RemoveGlobalAccelerationInstanceIpResponse
     */
    public function removeGlobalAccelerationInstanceIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalAccelerationInstanceId)) {
            $query['GlobalAccelerationInstanceId'] = $request->globalAccelerationInstanceId;
        }
        if (!Utils::isUnset($request->ipInstanceId)) {
            $query['IpInstanceId'] = $request->ipInstanceId;
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
            'action'      => 'RemoveGlobalAccelerationInstanceIp',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveGlobalAccelerationInstanceIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveGlobalAccelerationInstanceIpRequest $request
     *
     * @return RemoveGlobalAccelerationInstanceIpResponse
     */
    public function removeGlobalAccelerationInstanceIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGlobalAccelerationInstanceIpWithOptions($request, $runtime);
    }

    /**
     * @param RemoveIPv6TranslatorAclListEntryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveIPv6TranslatorAclListEntryResponse
     */
    public function removeIPv6TranslatorAclListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntryId)) {
            $query['AclEntryId'] = $request->aclEntryId;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'RemoveIPv6TranslatorAclListEntry',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveIPv6TranslatorAclListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveIPv6TranslatorAclListEntryRequest $request
     *
     * @return RemoveIPv6TranslatorAclListEntryResponse
     */
    public function removeIPv6TranslatorAclListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIPv6TranslatorAclListEntryWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSourcesFromTrafficMirrorSessionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return RemoveSourcesFromTrafficMirrorSessionResponse
     */
    public function removeSourcesFromTrafficMirrorSessionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->trafficMirrorSessionId)) {
            $query['TrafficMirrorSessionId'] = $request->trafficMirrorSessionId;
        }
        if (!Utils::isUnset($request->trafficMirrorSourceIds)) {
            $query['TrafficMirrorSourceIds'] = $request->trafficMirrorSourceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveSourcesFromTrafficMirrorSession',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSourcesFromTrafficMirrorSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveSourcesFromTrafficMirrorSessionRequest $request
     *
     * @return RemoveSourcesFromTrafficMirrorSessionResponse
     */
    public function removeSourcesFromTrafficMirrorSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSourcesFromTrafficMirrorSessionWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceVpcDhcpOptionsSetRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReplaceVpcDhcpOptionsSetResponse
     */
    public function replaceVpcDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetId)) {
            $query['DhcpOptionsSetId'] = $request->dhcpOptionsSetId;
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
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplaceVpcDhcpOptionsSet',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceVpcDhcpOptionsSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplaceVpcDhcpOptionsSetRequest $request
     *
     * @return ReplaceVpcDhcpOptionsSetResponse
     */
    public function replaceVpcDhcpOptionsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceVpcDhcpOptionsSetWithOptions($request, $runtime);
    }

    /**
     * @param RetryVpcPrefixListAssociationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RetryVpcPrefixListAssociationResponse
     */
    public function retryVpcPrefixListAssociationWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->prefixListId)) {
            $query['PrefixListId'] = $request->prefixListId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryVpcPrefixListAssociation',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryVpcPrefixListAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetryVpcPrefixListAssociationRequest $request
     *
     * @return RetryVpcPrefixListAssociationResponse
     */
    public function retryVpcPrefixListAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryVpcPrefixListAssociationWithOptions($request, $runtime);
    }

    /**
     * @param RevokeInstanceFromCenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeInstanceFromCenResponse
     */
    public function revokeInstanceFromCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'RevokeInstanceFromCen',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeInstanceFromCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeInstanceFromCenRequest $request
     *
     * @return RevokeInstanceFromCenResponse
     */
    public function revokeInstanceFromCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeInstanceFromCenWithOptions($request, $runtime);
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
            'version'     => '2016-04-28',
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
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
            'action'      => 'TerminatePhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminatePhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TerminateVirtualBorderRouter',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateVirtualBorderRouterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
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
            'action'      => 'UnTagResources',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
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
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
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
            'action'      => 'UnassociateEipAddress',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UnassociateGlobalAccelerationInstanceRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UnassociateGlobalAccelerationInstanceResponse
     */
    public function unassociateGlobalAccelerationInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalAccelerationInstanceId)) {
            $query['GlobalAccelerationInstanceId'] = $request->globalAccelerationInstanceId;
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
            'action'      => 'UnassociateGlobalAccelerationInstance',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateGlobalAccelerationInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnassociateGlobalAccelerationInstanceRequest $request
     *
     * @return UnassociateGlobalAccelerationInstanceResponse
     */
    public function unassociateGlobalAccelerationInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateGlobalAccelerationInstanceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->haVipId)) {
            $query['HaVipId'] = $request->haVipId;
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
            'action'      => 'UnassociateHaVip',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateHaVipResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UnassociateNetworkAclRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateNetworkAclResponse
     */
    public function unassociateNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
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
            'action'      => 'UnassociateNetworkAcl',
            'version'     => '2016-04-28',
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
     * @param UnassociatePhysicalConnectionFromVirtualBorderRouterRequest $request
     * @param RuntimeOptions                                              $runtime
     *
     * @return UnassociatePhysicalConnectionFromVirtualBorderRouterResponse
     */
    public function unassociatePhysicalConnectionFromVirtualBorderRouterWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->physicalConnectionId)) {
            $query['PhysicalConnectionId'] = $request->physicalConnectionId;
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
        if (!Utils::isUnset($request->vbrId)) {
            $query['VbrId'] = $request->vbrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnassociatePhysicalConnectionFromVirtualBorderRouter',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociatePhysicalConnectionFromVirtualBorderRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnassociatePhysicalConnectionFromVirtualBorderRouterRequest $request
     *
     * @return UnassociatePhysicalConnectionFromVirtualBorderRouterResponse
     */
    public function unassociatePhysicalConnectionFromVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociatePhysicalConnectionFromVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateRouteTableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateRouteTableResponse
     */
    public function unassociateRouteTableWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnassociateRouteTable',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnassociateRouteTableRequest $request
     *
     * @return UnassociateRouteTableResponse
     */
    public function unassociateRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateVpcCidrBlockRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UnassociateVpcCidrBlockResponse
     */
    public function unassociateVpcCidrBlockWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secondaryCidrBlock)) {
            $query['SecondaryCidrBlock'] = $request->secondaryCidrBlock;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnassociateVpcCidrBlock',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateVpcCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnassociateVpcCidrBlockRequest $request
     *
     * @return UnassociateVpcCidrBlockResponse
     */
    public function unassociateVpcCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateVpcCidrBlockWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDhcpOptionsSetAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateDhcpOptionsSetAttributeResponse
     */
    public function updateDhcpOptionsSetAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bootFileName)) {
            $query['BootFileName'] = $request->bootFileName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetDescription)) {
            $query['DhcpOptionsSetDescription'] = $request->dhcpOptionsSetDescription;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetId)) {
            $query['DhcpOptionsSetId'] = $request->dhcpOptionsSetId;
        }
        if (!Utils::isUnset($request->dhcpOptionsSetName)) {
            $query['DhcpOptionsSetName'] = $request->dhcpOptionsSetName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainNameServers)) {
            $query['DomainNameServers'] = $request->domainNameServers;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipv6LeaseTime)) {
            $query['Ipv6LeaseTime'] = $request->ipv6LeaseTime;
        }
        if (!Utils::isUnset($request->leaseTime)) {
            $query['LeaseTime'] = $request->leaseTime;
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
        if (!Utils::isUnset($request->TFTPServerName)) {
            $query['TFTPServerName'] = $request->TFTPServerName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDhcpOptionsSetAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDhcpOptionsSetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDhcpOptionsSetAttributeRequest $request
     *
     * @return UpdateDhcpOptionsSetAttributeResponse
     */
    public function updateDhcpOptionsSetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDhcpOptionsSetAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteTableEntryAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateGatewayRouteTableEntryAttributeResponse
     */
    public function updateGatewayRouteTableEntryAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->IPv4GatewayRouteTableId)) {
            $query['IPv4GatewayRouteTableId'] = $request->IPv4GatewayRouteTableId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $query['NextHopId'] = $request->nextHopId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'UpdateGatewayRouteTableEntryAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteTableEntryAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteTableEntryAttributeRequest $request
     *
     * @return UpdateGatewayRouteTableEntryAttributeResponse
     */
    public function updateGatewayRouteTableEntryAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteTableEntryAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIpsecServerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateIpsecServerResponse
     */
    public function updateIpsecServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIpPool)) {
            $query['ClientIpPool'] = $request->clientIpPool;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->effectImmediately)) {
            $query['EffectImmediately'] = $request->effectImmediately;
        }
        if (!Utils::isUnset($request->ikeConfig)) {
            $query['IkeConfig'] = $request->ikeConfig;
        }
        if (!Utils::isUnset($request->ipsecConfig)) {
            $query['IpsecConfig'] = $request->ipsecConfig;
        }
        if (!Utils::isUnset($request->ipsecServerId)) {
            $query['IpsecServerId'] = $request->ipsecServerId;
        }
        if (!Utils::isUnset($request->ipsecServerName)) {
            $query['IpsecServerName'] = $request->ipsecServerName;
        }
        if (!Utils::isUnset($request->localSubnet)) {
            $query['LocalSubnet'] = $request->localSubnet;
        }
        if (!Utils::isUnset($request->psk)) {
            $query['Psk'] = $request->psk;
        }
        if (!Utils::isUnset($request->pskEnabled)) {
            $query['PskEnabled'] = $request->pskEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIpsecServer',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIpsecServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIpsecServerRequest $request
     *
     * @return UpdateIpsecServerResponse
     */
    public function updateIpsecServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpsecServerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIpv4GatewayAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateIpv4GatewayAttributeResponse
     */
    public function updateIpv4GatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipv4GatewayDescription)) {
            $query['Ipv4GatewayDescription'] = $request->ipv4GatewayDescription;
        }
        if (!Utils::isUnset($request->ipv4GatewayId)) {
            $query['Ipv4GatewayId'] = $request->ipv4GatewayId;
        }
        if (!Utils::isUnset($request->ipv4GatewayName)) {
            $query['Ipv4GatewayName'] = $request->ipv4GatewayName;
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
            'action'      => 'UpdateIpv4GatewayAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIpv4GatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIpv4GatewayAttributeRequest $request
     *
     * @return UpdateIpv4GatewayAttributeResponse
     */
    public function updateIpv4GatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpv4GatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNatGatewayNatTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateNatGatewayNatTypeResponse
     */
    public function updateNatGatewayNatTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natType)) {
            $query['NatType'] = $request->natType;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNatGatewayNatType',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNatGatewayNatTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNatGatewayNatTypeRequest $request
     *
     * @return UpdateNatGatewayNatTypeResponse
     */
    public function updateNatGatewayNatType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNatGatewayNatTypeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNetworkAclEntriesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateNetworkAclEntriesResponse
     */
    public function updateNetworkAclEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->egressAclEntries)) {
            $query['EgressAclEntries'] = $request->egressAclEntries;
        }
        if (!Utils::isUnset($request->ingressAclEntries)) {
            $query['IngressAclEntries'] = $request->ingressAclEntries;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->updateEgressAclEntries)) {
            $query['UpdateEgressAclEntries'] = $request->updateEgressAclEntries;
        }
        if (!Utils::isUnset($request->updateIngressAclEntries)) {
            $query['UpdateIngressAclEntries'] = $request->updateIngressAclEntries;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNetworkAclEntries',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNetworkAclEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNetworkAclEntriesRequest $request
     *
     * @return UpdateNetworkAclEntriesResponse
     */
    public function updateNetworkAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkAclEntriesWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePublicIpAddressPoolAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdatePublicIpAddressPoolAttributeResponse
     */
    public function updatePublicIpAddressPoolAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->publicIpAddressPoolId)) {
            $query['PublicIpAddressPoolId'] = $request->publicIpAddressPoolId;
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
            'action'      => 'UpdatePublicIpAddressPoolAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePublicIpAddressPoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePublicIpAddressPoolAttributeRequest $request
     *
     * @return UpdatePublicIpAddressPoolAttributeResponse
     */
    public function updatePublicIpAddressPoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePublicIpAddressPoolAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrafficMirrorFilterAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateTrafficMirrorFilterAttributeResponse
     */
    public function updateTrafficMirrorFilterAttributeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->trafficMirrorFilterDescription)) {
            $query['TrafficMirrorFilterDescription'] = $request->trafficMirrorFilterDescription;
        }
        if (!Utils::isUnset($request->trafficMirrorFilterId)) {
            $query['TrafficMirrorFilterId'] = $request->trafficMirrorFilterId;
        }
        if (!Utils::isUnset($request->trafficMirrorFilterName)) {
            $query['TrafficMirrorFilterName'] = $request->trafficMirrorFilterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrafficMirrorFilterAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTrafficMirrorFilterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTrafficMirrorFilterAttributeRequest $request
     *
     * @return UpdateTrafficMirrorFilterAttributeResponse
     */
    public function updateTrafficMirrorFilterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrafficMirrorFilterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrafficMirrorFilterRuleAttributeRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateTrafficMirrorFilterRuleAttributeResponse
     */
    public function updateTrafficMirrorFilterRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->destinationPortRange)) {
            $query['DestinationPortRange'] = $request->destinationPortRange;
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
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
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
        if (!Utils::isUnset($request->ruleAction)) {
            $query['RuleAction'] = $request->ruleAction;
        }
        if (!Utils::isUnset($request->sourceCidrBlock)) {
            $query['SourceCidrBlock'] = $request->sourceCidrBlock;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        if (!Utils::isUnset($request->trafficMirrorFilterRuleId)) {
            $query['TrafficMirrorFilterRuleId'] = $request->trafficMirrorFilterRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrafficMirrorFilterRuleAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTrafficMirrorFilterRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTrafficMirrorFilterRuleAttributeRequest $request
     *
     * @return UpdateTrafficMirrorFilterRuleAttributeResponse
     */
    public function updateTrafficMirrorFilterRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrafficMirrorFilterRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrafficMirrorSessionAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateTrafficMirrorSessionAttributeResponse
     */
    public function updateTrafficMirrorSessionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trafficMirrorFilterId)) {
            $query['TrafficMirrorFilterId'] = $request->trafficMirrorFilterId;
        }
        if (!Utils::isUnset($request->trafficMirrorSessionDescription)) {
            $query['TrafficMirrorSessionDescription'] = $request->trafficMirrorSessionDescription;
        }
        if (!Utils::isUnset($request->trafficMirrorSessionId)) {
            $query['TrafficMirrorSessionId'] = $request->trafficMirrorSessionId;
        }
        if (!Utils::isUnset($request->trafficMirrorSessionName)) {
            $query['TrafficMirrorSessionName'] = $request->trafficMirrorSessionName;
        }
        if (!Utils::isUnset($request->trafficMirrorTargetId)) {
            $query['TrafficMirrorTargetId'] = $request->trafficMirrorTargetId;
        }
        if (!Utils::isUnset($request->trafficMirrorTargetType)) {
            $query['TrafficMirrorTargetType'] = $request->trafficMirrorTargetType;
        }
        if (!Utils::isUnset($request->virtualNetworkId)) {
            $query['VirtualNetworkId'] = $request->virtualNetworkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrafficMirrorSessionAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTrafficMirrorSessionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTrafficMirrorSessionAttributeRequest $request
     *
     * @return UpdateTrafficMirrorSessionAttributeResponse
     */
    public function updateTrafficMirrorSessionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrafficMirrorSessionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVirtualBorderBandwidthRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateVirtualBorderBandwidthResponse
     */
    public function updateVirtualBorderBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->virtualBorderRouterId)) {
            $query['VirtualBorderRouterId'] = $request->virtualBorderRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVirtualBorderBandwidth',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVirtualBorderBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateVirtualBorderBandwidthRequest $request
     *
     * @return UpdateVirtualBorderBandwidthResponse
     */
    public function updateVirtualBorderBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVirtualBorderBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVirtualPhysicalConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateVirtualPhysicalConnectionResponse
     */
    public function updateVirtualPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->expectSpec)) {
            $query['ExpectSpec'] = $request->expectSpec;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vlanId)) {
            $query['VlanId'] = $request->vlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVirtualPhysicalConnection',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVirtualPhysicalConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateVirtualPhysicalConnectionRequest $request
     *
     * @return UpdateVirtualPhysicalConnectionResponse
     */
    public function updateVirtualPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVirtualPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVpcGatewayEndpointAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateVpcGatewayEndpointAttributeResponse
     */
    public function updateVpcGatewayEndpointAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointDescription)) {
            $query['EndpointDescription'] = $request->endpointDescription;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $query['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->policyDocument)) {
            $query['PolicyDocument'] = $request->policyDocument;
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
            'action'      => 'UpdateVpcGatewayEndpointAttribute',
            'version'     => '2016-04-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVpcGatewayEndpointAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateVpcGatewayEndpointAttributeRequest $request
     *
     * @return UpdateVpcGatewayEndpointAttributeResponse
     */
    public function updateVpcGatewayEndpointAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcGatewayEndpointAttributeWithOptions($request, $runtime);
    }
}
