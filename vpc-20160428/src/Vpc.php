<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelExpressCloudConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelExpressCloudConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelPhysicalConnectionResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcGatewayEndpointRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcGatewayEndpointResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpconnFromVbrRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpconnFromVbrResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteExpressCloudConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteExpressCloudConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteExpressConnectRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteExpressConnectResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcGatewayEndpointRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcGatewayEndpointResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeInstanceAutoRenewAttributeResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNewProjectEipMonitorDataRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNewProjectEipMonitorDataResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOARequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpCidrsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpCidrsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPhysicalConnectionFeaturesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPhysicalConnectionFeaturesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackagePayTypeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackagePayTypeResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyInstanceAutoRenewalAttributeResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVirtualBorderRouterAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVirtualBorderRouterAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcAttributeResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReplaceVpcDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReplaceVpcDhcpOptionsSetResponse;
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
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateCrossBoarderStatusRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateCrossBoarderStatusResponse;
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
            'cn-beijing-finance-1'        => 'vpc.aliyuncs.com',
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActivateRouterInterfaceResponse::fromMap($this->doRPCRequest('ActivateRouterInterface', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActiveFlowLogResponse::fromMap($this->doRPCRequest('ActiveFlowLog', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddBgpNetworkResponse::fromMap($this->doRPCRequest('AddBgpNetwork', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCommonBandwidthPackageIpResponse::fromMap($this->doRPCRequest('AddCommonBandwidthPackageIp', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCommonBandwidthPackageIpsResponse::fromMap($this->doRPCRequest('AddCommonBandwidthPackageIps', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGlobalAccelerationInstanceIpResponse::fromMap($this->doRPCRequest('AddGlobalAccelerationInstanceIp', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddIPv6TranslatorAclListEntryResponse::fromMap($this->doRPCRequest('AddIPv6TranslatorAclListEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddSourcesToTrafficMirrorSessionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AddSourcesToTrafficMirrorSessionResponse
     */
    public function addSourcesToTrafficMirrorSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSourcesToTrafficMirrorSessionResponse::fromMap($this->doRPCRequest('AddSourcesToTrafficMirrorSession', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateEipAddressResponse::fromMap($this->doRPCRequest('AllocateEipAddress', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateEipAddressProResponse::fromMap($this->doRPCRequest('AllocateEipAddressPro', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateEipSegmentAddressResponse::fromMap($this->doRPCRequest('AllocateEipSegmentAddress', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateIpv6InternetBandwidthResponse::fromMap($this->doRPCRequest('AllocateIpv6InternetBandwidth', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ApplyPhysicalConnectionLOARequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ApplyPhysicalConnectionLOAResponse
     */
    public function applyPhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyPhysicalConnectionLOAResponse::fromMap($this->doRPCRequest('ApplyPhysicalConnectionLOA', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateEipAddressResponse::fromMap($this->doRPCRequest('AssociateEipAddress', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateGlobalAccelerationInstanceResponse::fromMap($this->doRPCRequest('AssociateGlobalAccelerationInstance', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateHaVipResponse::fromMap($this->doRPCRequest('AssociateHaVip', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateNetworkAclResponse::fromMap($this->doRPCRequest('AssociateNetworkAcl', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociatePhysicalConnectionToVirtualBorderRouterResponse::fromMap($this->doRPCRequest('AssociatePhysicalConnectionToVirtualBorderRouter', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateRouteTableResponse::fromMap($this->doRPCRequest('AssociateRouteTable', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateRouteTableWithGatewayResponse::fromMap($this->doRPCRequest('AssociateRouteTableWithGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateRouteTablesWithVpcGatewayEndpointResponse::fromMap($this->doRPCRequest('AssociateRouteTablesWithVpcGatewayEndpoint', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateVpcCidrBlockResponse::fromMap($this->doRPCRequest('AssociateVpcCidrBlock', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateVpnGatewayWithCertificateResponse::fromMap($this->doRPCRequest('AssociateVpnGatewayWithCertificate', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachDhcpOptionsSetToVpcResponse::fromMap($this->doRPCRequest('AttachDhcpOptionsSetToVpc', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachVbrToVpconnResponse::fromMap($this->doRPCRequest('AttachVbrToVpconn', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelCommonBandwidthPackageIpBandwidthResponse::fromMap($this->doRPCRequest('CancelCommonBandwidthPackageIpBandwidth', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CancelExpressCloudConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelExpressCloudConnectionResponse
     */
    public function cancelExpressCloudConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelExpressCloudConnectionResponse::fromMap($this->doRPCRequest('CancelExpressCloudConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelExpressCloudConnectionRequest $request
     *
     * @return CancelExpressCloudConnectionResponse
     */
    public function cancelExpressCloudConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelExpressCloudConnectionWithOptions($request, $runtime);
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

        return CancelPhysicalConnectionResponse::fromMap($this->doRPCRequest('CancelPhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CompletePhysicalConnectionLOARequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CompletePhysicalConnectionLOAResponse
     */
    public function completePhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompletePhysicalConnectionLOAResponse::fromMap($this->doRPCRequest('CompletePhysicalConnectionLOA', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfirmPhysicalConnectionResponse::fromMap($this->doRPCRequest('ConfirmPhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConnectRouterInterfaceResponse::fromMap($this->doRPCRequest('ConnectRouterInterface', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConvertBandwidthPackageResponse::fromMap($this->doRPCRequest('ConvertBandwidthPackage', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyNetworkAclEntriesResponse::fromMap($this->doRPCRequest('CopyNetworkAclEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBgpGroupResponse::fromMap($this->doRPCRequest('CreateBgpGroup', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBgpPeerResponse::fromMap($this->doRPCRequest('CreateBgpPeer', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCommonBandwidthPackageResponse::fromMap($this->doRPCRequest('CreateCommonBandwidthPackage', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCustomerGatewayResponse::fromMap($this->doRPCRequest('CreateCustomerGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDhcpOptionsSetResponse::fromMap($this->doRPCRequest('CreateDhcpOptionsSet', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateExpressCloudConnectionResponse::fromMap($this->doRPCRequest('CreateExpressCloudConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowLogResponse::fromMap($this->doRPCRequest('CreateFlowLog', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateForwardEntryResponse::fromMap($this->doRPCRequest('CreateForwardEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFullNatEntryResponse::fromMap($this->doRPCRequest('CreateFullNatEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGlobalAccelerationInstanceResponse::fromMap($this->doRPCRequest('CreateGlobalAccelerationInstance', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHaVipResponse::fromMap($this->doRPCRequest('CreateHaVip', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIPv6TranslatorResponse::fromMap($this->doRPCRequest('CreateIPv6Translator', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIPv6TranslatorAclListResponse::fromMap($this->doRPCRequest('CreateIPv6TranslatorAclList', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIPv6TranslatorEntryResponse::fromMap($this->doRPCRequest('CreateIPv6TranslatorEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIpsecServerResponse::fromMap($this->doRPCRequest('CreateIpsecServer', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIpv4GatewayResponse::fromMap($this->doRPCRequest('CreateIpv4Gateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIpv6EgressOnlyRuleResponse::fromMap($this->doRPCRequest('CreateIpv6EgressOnlyRule', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIpv6GatewayResponse::fromMap($this->doRPCRequest('CreateIpv6Gateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNatGatewayResponse::fromMap($this->doRPCRequest('CreateNatGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNatIpResponse::fromMap($this->doRPCRequest('CreateNatIp', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNatIpCidrResponse::fromMap($this->doRPCRequest('CreateNatIpCidr', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNetworkAclResponse::fromMap($this->doRPCRequest('CreateNetworkAcl', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePhysicalConnectionResponse::fromMap($this->doRPCRequest('CreatePhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePhysicalConnectionOccupancyOrderResponse::fromMap($this->doRPCRequest('CreatePhysicalConnectionOccupancyOrder', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePhysicalConnectionSetupOrderResponse::fromMap($this->doRPCRequest('CreatePhysicalConnectionSetupOrder', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return CreateRouteEntryResponse::fromMap($this->doRPCRequest('CreateRouteEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRouteTableResponse::fromMap($this->doRPCRequest('CreateRouteTable', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRouterInterfaceResponse::fromMap($this->doRPCRequest('CreateRouterInterface', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSnatEntryResponse::fromMap($this->doRPCRequest('CreateSnatEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSslVpnClientCertResponse::fromMap($this->doRPCRequest('CreateSslVpnClientCert', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSslVpnServerResponse::fromMap($this->doRPCRequest('CreateSslVpnServer', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTrafficMirrorFilterResponse::fromMap($this->doRPCRequest('CreateTrafficMirrorFilter', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTrafficMirrorFilterRulesResponse::fromMap($this->doRPCRequest('CreateTrafficMirrorFilterRules', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTrafficMirrorSessionResponse::fromMap($this->doRPCRequest('CreateTrafficMirrorSession', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVSwitchResponse::fromMap($this->doRPCRequest('CreateVSwitch', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVbrHaResponse::fromMap($this->doRPCRequest('CreateVbrHa', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return CreateVirtualBorderRouterResponse::fromMap($this->doRPCRequest('CreateVirtualBorderRouter', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVirtualPhysicalConnectionResponse::fromMap($this->doRPCRequest('CreateVirtualPhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpcResponse::fromMap($this->doRPCRequest('CreateVpc', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpcGatewayEndpointResponse::fromMap($this->doRPCRequest('CreateVpcGatewayEndpoint', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateVpconnFromVbrRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpconnFromVbrResponse
     */
    public function createVpconnFromVbrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpconnFromVbrResponse::fromMap($this->doRPCRequest('CreateVpconnFromVbr', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateVpnConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpnConnectionResponse
     */
    public function createVpnConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpnConnectionResponse::fromMap($this->doRPCRequest('CreateVpnConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpnGatewayResponse::fromMap($this->doRPCRequest('CreateVpnGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpnPbrRouteEntryResponse::fromMap($this->doRPCRequest('CreateVpnPbrRouteEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpnRouteEntryResponse::fromMap($this->doRPCRequest('CreateVpnRouteEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeactivateRouterInterfaceResponse::fromMap($this->doRPCRequest('DeactivateRouterInterface', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeactiveFlowLogResponse::fromMap($this->doRPCRequest('DeactiveFlowLog', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBgpGroupResponse::fromMap($this->doRPCRequest('DeleteBgpGroup', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBgpNetworkResponse::fromMap($this->doRPCRequest('DeleteBgpNetwork', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBgpPeerResponse::fromMap($this->doRPCRequest('DeleteBgpPeer', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCommonBandwidthPackageResponse::fromMap($this->doRPCRequest('DeleteCommonBandwidthPackage', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCustomerGatewayResponse::fromMap($this->doRPCRequest('DeleteCustomerGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDhcpOptionsSetResponse::fromMap($this->doRPCRequest('DeleteDhcpOptionsSet', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteExpressCloudConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteExpressCloudConnectionResponse
     */
    public function deleteExpressCloudConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteExpressCloudConnectionResponse::fromMap($this->doRPCRequest('DeleteExpressCloudConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteExpressCloudConnectionRequest $request
     *
     * @return DeleteExpressCloudConnectionResponse
     */
    public function deleteExpressCloudConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressCloudConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteExpressConnectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteExpressConnectResponse
     */
    public function deleteExpressConnectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteExpressConnectResponse::fromMap($this->doRPCRequest('DeleteExpressConnect', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteExpressConnectRequest $request
     *
     * @return DeleteExpressConnectResponse
     */
    public function deleteExpressConnect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressConnectWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowLogResponse::fromMap($this->doRPCRequest('DeleteFlowLog', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteForwardEntryResponse::fromMap($this->doRPCRequest('DeleteForwardEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFullNatEntryResponse::fromMap($this->doRPCRequest('DeleteFullNatEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGlobalAccelerationInstanceResponse::fromMap($this->doRPCRequest('DeleteGlobalAccelerationInstance', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHaVipResponse::fromMap($this->doRPCRequest('DeleteHaVip', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIPv6TranslatorResponse::fromMap($this->doRPCRequest('DeleteIPv6Translator', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIPv6TranslatorAclListResponse::fromMap($this->doRPCRequest('DeleteIPv6TranslatorAclList', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIPv6TranslatorEntryResponse::fromMap($this->doRPCRequest('DeleteIPv6TranslatorEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpsecServerResponse::fromMap($this->doRPCRequest('DeleteIpsecServer', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpv4GatewayResponse::fromMap($this->doRPCRequest('DeleteIpv4Gateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpv6EgressOnlyRuleResponse::fromMap($this->doRPCRequest('DeleteIpv6EgressOnlyRule', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpv6GatewayResponse::fromMap($this->doRPCRequest('DeleteIpv6Gateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpv6InternetBandwidthResponse::fromMap($this->doRPCRequest('DeleteIpv6InternetBandwidth', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNatGatewayResponse::fromMap($this->doRPCRequest('DeleteNatGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNatIpResponse::fromMap($this->doRPCRequest('DeleteNatIp', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNatIpCidrResponse::fromMap($this->doRPCRequest('DeleteNatIpCidr', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNetworkAclResponse::fromMap($this->doRPCRequest('DeleteNetworkAcl', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePhysicalConnectionResponse::fromMap($this->doRPCRequest('DeletePhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DeleteRouteEntryResponse::fromMap($this->doRPCRequest('DeleteRouteEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRouteTableResponse::fromMap($this->doRPCRequest('DeleteRouteTable', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRouterInterfaceResponse::fromMap($this->doRPCRequest('DeleteRouterInterface', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSnatEntryResponse::fromMap($this->doRPCRequest('DeleteSnatEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSslVpnClientCertResponse::fromMap($this->doRPCRequest('DeleteSslVpnClientCert', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSslVpnServerResponse::fromMap($this->doRPCRequest('DeleteSslVpnServer', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrafficMirrorFilterResponse::fromMap($this->doRPCRequest('DeleteTrafficMirrorFilter', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrafficMirrorFilterRulesResponse::fromMap($this->doRPCRequest('DeleteTrafficMirrorFilterRules', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrafficMirrorSessionResponse::fromMap($this->doRPCRequest('DeleteTrafficMirrorSession', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVSwitchResponse::fromMap($this->doRPCRequest('DeleteVSwitch', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVbrHaResponse::fromMap($this->doRPCRequest('DeleteVbrHa', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DeleteVirtualBorderRouterResponse::fromMap($this->doRPCRequest('DeleteVirtualBorderRouter', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DeleteVpcResponse::fromMap($this->doRPCRequest('DeleteVpc', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpcGatewayEndpointResponse::fromMap($this->doRPCRequest('DeleteVpcGatewayEndpoint', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteVpnConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVpnConnectionResponse
     */
    public function deleteVpnConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpnConnectionResponse::fromMap($this->doRPCRequest('DeleteVpnConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpnGatewayResponse::fromMap($this->doRPCRequest('DeleteVpnGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpnPbrRouteEntryResponse::fromMap($this->doRPCRequest('DeleteVpnPbrRouteEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpnRouteEntryResponse::fromMap($this->doRPCRequest('DeleteVpnRouteEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletionProtectionResponse::fromMap($this->doRPCRequest('DeletionProtection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccessPointsResponse::fromMap($this->doRPCRequest('DescribeAccessPoints', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBgpGroupsResponse::fromMap($this->doRPCRequest('DescribeBgpGroups', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBgpNetworksResponse::fromMap($this->doRPCRequest('DescribeBgpNetworks', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBgpPeersResponse::fromMap($this->doRPCRequest('DescribeBgpPeers', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCommonBandwidthPackagesResponse::fromMap($this->doRPCRequest('DescribeCommonBandwidthPackages', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomerGatewayResponse::fromMap($this->doRPCRequest('DescribeCustomerGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomerGatewaysResponse::fromMap($this->doRPCRequest('DescribeCustomerGateways', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEipAddressesResponse::fromMap($this->doRPCRequest('DescribeEipAddresses', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEipGatewayInfoResponse::fromMap($this->doRPCRequest('DescribeEipGatewayInfo', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEipMonitorDataResponse::fromMap($this->doRPCRequest('DescribeEipMonitorData', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEipSegmentResponse::fromMap($this->doRPCRequest('DescribeEipSegment', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeExpressCloudConnectionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeExpressCloudConnectionsResponse
     */
    public function describeExpressCloudConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExpressCloudConnectionsResponse::fromMap($this->doRPCRequest('DescribeExpressCloudConnections', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeExpressCloudConnectionsRequest $request
     *
     * @return DescribeExpressCloudConnectionsResponse
     */
    public function describeExpressCloudConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressCloudConnectionsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowLogsResponse::fromMap($this->doRPCRequest('DescribeFlowLogs', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeForwardTableEntriesResponse::fromMap($this->doRPCRequest('DescribeForwardTableEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGlobalAccelerationInstancesResponse::fromMap($this->doRPCRequest('DescribeGlobalAccelerationInstances', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGrantRulesToCenResponse::fromMap($this->doRPCRequest('DescribeGrantRulesToCen', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHaVipsResponse::fromMap($this->doRPCRequest('DescribeHaVips', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHighDefinitionMonitorLogAttributeResponse::fromMap($this->doRPCRequest('DescribeHighDefinitionMonitorLogAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIPv6TranslatorAclListAttributesResponse::fromMap($this->doRPCRequest('DescribeIPv6TranslatorAclListAttributes', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIPv6TranslatorAclListsResponse::fromMap($this->doRPCRequest('DescribeIPv6TranslatorAclLists', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIPv6TranslatorEntriesResponse::fromMap($this->doRPCRequest('DescribeIPv6TranslatorEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIPv6TranslatorsResponse::fromMap($this->doRPCRequest('DescribeIPv6Translators', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeInstanceAutoRenewAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAutoRenewAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeIpv6AddressesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeIpv6AddressesResponse
     */
    public function describeIpv6AddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpv6AddressesResponse::fromMap($this->doRPCRequest('DescribeIpv6Addresses', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpv6EgressOnlyRulesResponse::fromMap($this->doRPCRequest('DescribeIpv6EgressOnlyRules', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpv6GatewayAttributeResponse::fromMap($this->doRPCRequest('DescribeIpv6GatewayAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpv6GatewaysResponse::fromMap($this->doRPCRequest('DescribeIpv6Gateways', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNatGatewaysResponse::fromMap($this->doRPCRequest('DescribeNatGateways', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkAclAttributesResponse::fromMap($this->doRPCRequest('DescribeNetworkAclAttributes', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkAclsResponse::fromMap($this->doRPCRequest('DescribeNetworkAcls', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeNewProjectEipMonitorDataResponse::fromMap($this->doRPCRequest('DescribeNewProjectEipMonitorData', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribePhysicalConnectionLOARequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePhysicalConnectionLOAResponse
     */
    public function describePhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePhysicalConnectionLOAResponse::fromMap($this->doRPCRequest('DescribePhysicalConnectionLOA', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePhysicalConnectionsResponse::fromMap($this->doRPCRequest('DescribePhysicalConnections', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouteEntryListResponse::fromMap($this->doRPCRequest('DescribeRouteEntryList', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouteTableListResponse::fromMap($this->doRPCRequest('DescribeRouteTableList', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouteTablesResponse::fromMap($this->doRPCRequest('DescribeRouteTables', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouterInterfaceAttributeResponse::fromMap($this->doRPCRequest('DescribeRouterInterfaceAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouterInterfacesResponse::fromMap($this->doRPCRequest('DescribeRouterInterfaces', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServerRelatedGlobalAccelerationInstancesResponse::fromMap($this->doRPCRequest('DescribeServerRelatedGlobalAccelerationInstances', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSnatTableEntriesResponse::fromMap($this->doRPCRequest('DescribeSnatTableEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSslVpnClientCertResponse::fromMap($this->doRPCRequest('DescribeSslVpnClientCert', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSslVpnClientCertsResponse::fromMap($this->doRPCRequest('DescribeSslVpnClientCerts', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSslVpnServersResponse::fromMap($this->doRPCRequest('DescribeSslVpnServers', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVRoutersResponse::fromMap($this->doRPCRequest('DescribeVRouters', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVSwitchAttributesResponse::fromMap($this->doRPCRequest('DescribeVSwitchAttributes', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVSwitchesResponse::fromMap($this->doRPCRequest('DescribeVSwitches', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVbrHaResponse::fromMap($this->doRPCRequest('DescribeVbrHa', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeVirtualBorderRoutersResponse::fromMap($this->doRPCRequest('DescribeVirtualBorderRouters', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeVirtualBorderRoutersForPhysicalConnectionResponse::fromMap($this->doRPCRequest('DescribeVirtualBorderRoutersForPhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcAttributeResponse::fromMap($this->doRPCRequest('DescribeVpcAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcsResponse::fromMap($this->doRPCRequest('DescribeVpcs', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVpnConnectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVpnConnectionResponse
     */
    public function describeVpnConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpnConnectionResponse::fromMap($this->doRPCRequest('DescribeVpnConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpnConnectionsResponse::fromMap($this->doRPCRequest('DescribeVpnConnections', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVpnGatewayRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeVpnGatewayResponse
     */
    public function describeVpnGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpnGatewayResponse::fromMap($this->doRPCRequest('DescribeVpnGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpnGatewaysResponse::fromMap($this->doRPCRequest('DescribeVpnGateways', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpnPbrRouteEntriesResponse::fromMap($this->doRPCRequest('DescribeVpnPbrRouteEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpnRouteEntriesResponse::fromMap($this->doRPCRequest('DescribeVpnRouteEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpnSslServerLogsResponse::fromMap($this->doRPCRequest('DescribeVpnSslServerLogs', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZonesResponse::fromMap($this->doRPCRequest('DescribeZones', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachDhcpOptionsSetFromVpcResponse::fromMap($this->doRPCRequest('DetachDhcpOptionsSetFromVpc', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableNatGatewayEcsMetricResponse::fromMap($this->doRPCRequest('DisableNatGatewayEcsMetric', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableVpcClassicLinkResponse::fromMap($this->doRPCRequest('DisableVpcClassicLink', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateRouteTableFromGatewayResponse::fromMap($this->doRPCRequest('DissociateRouteTableFromGateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateRouteTablesFromVpcGatewayEndpointResponse::fromMap($this->doRPCRequest('DissociateRouteTablesFromVpcGatewayEndpoint', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateVpnGatewayWithCertificateResponse::fromMap($this->doRPCRequest('DissociateVpnGatewayWithCertificate', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadVpnConnectionConfigResponse::fromMap($this->doRPCRequest('DownloadVpnConnectionConfig', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableNatGatewayEcsMetricResponse::fromMap($this->doRPCRequest('EnableNatGatewayEcsMetric', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnablePhysicalConnectionResponse::fromMap($this->doRPCRequest('EnablePhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableVpcClassicLinkResponse::fromMap($this->doRPCRequest('EnableVpcClassicLink', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableVpcIpv4GatewayResponse::fromMap($this->doRPCRequest('EnableVpcIpv4Gateway', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDhcpOptionsSetResponse::fromMap($this->doRPCRequest('GetDhcpOptionsSet', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetIpv4GatewayAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetIpv4GatewayAttributeResponse
     */
    public function getIpv4GatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIpv4GatewayAttributeResponse::fromMap($this->doRPCRequest('GetIpv4GatewayAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNatGatewayAttributeResponse::fromMap($this->doRPCRequest('GetNatGatewayAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNatGatewayConvertStatusResponse::fromMap($this->doRPCRequest('GetNatGatewayConvertStatus', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPhysicalConnectionServiceStatusResponse::fromMap($this->doRPCRequest('GetPhysicalConnectionServiceStatus', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTrafficMirrorServiceStatusResponse::fromMap($this->doRPCRequest('GetTrafficMirrorServiceStatus', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVpcGatewayEndpointAttributeResponse::fromMap($this->doRPCRequest('GetVpcGatewayEndpointAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GrantInstanceToCenRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GrantInstanceToCenResponse
     */
    public function grantInstanceToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantInstanceToCenResponse::fromMap($this->doRPCRequest('GrantInstanceToCen', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDhcpOptionsSetsResponse::fromMap($this->doRPCRequest('ListDhcpOptionsSets', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEnhanhcedNatGatewayAvailableZonesResponse::fromMap($this->doRPCRequest('ListEnhanhcedNatGatewayAvailableZones', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFullNatEntriesResponse::fromMap($this->doRPCRequest('ListFullNatEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGatewayRouteTableEntriesResponse::fromMap($this->doRPCRequest('ListGatewayRouteTableEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIpsecServersResponse::fromMap($this->doRPCRequest('ListIpsecServers', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIpv4GatewaysResponse::fromMap($this->doRPCRequest('ListIpv4Gateways', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListNatGatewayEcsMetricRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListNatGatewayEcsMetricResponse
     */
    public function listNatGatewayEcsMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNatGatewayEcsMetricResponse::fromMap($this->doRPCRequest('ListNatGatewayEcsMetric', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListNatGatewayEcsMetricRequest $request
     *
     * @return ListNatGatewayEcsMetricResponse
     */
    public function listNatGatewayEcsMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNatGatewayEcsMetricWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNatIpCidrsResponse::fromMap($this->doRPCRequest('ListNatIpCidrs', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNatIpsResponse::fromMap($this->doRPCRequest('ListNatIps', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListPhysicalConnectionFeaturesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListPhysicalConnectionFeaturesResponse
     */
    public function listPhysicalConnectionFeaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPhysicalConnectionFeaturesResponse::fromMap($this->doRPCRequest('ListPhysicalConnectionFeatures', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPhysicalConnectionFeaturesRequest $request
     *
     * @return ListPhysicalConnectionFeaturesResponse
     */
    public function listPhysicalConnectionFeatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhysicalConnectionFeaturesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPrefixListsResponse::fromMap($this->doRPCRequest('ListPrefixLists', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTrafficMirrorFiltersResponse::fromMap($this->doRPCRequest('ListTrafficMirrorFilters', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTrafficMirrorSessionsResponse::fromMap($this->doRPCRequest('ListTrafficMirrorSessions', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVirtualPhysicalConnectionsResponse::fromMap($this->doRPCRequest('ListVirtualPhysicalConnections', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVpcEndpointServicesByEndUserResponse::fromMap($this->doRPCRequest('ListVpcEndpointServicesByEndUser', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVpcGatewayEndpointsResponse::fromMap($this->doRPCRequest('ListVpcGatewayEndpoints', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVpnCertificateAssociationsResponse::fromMap($this->doRPCRequest('ListVpnCertificateAssociations', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBgpGroupAttributeResponse::fromMap($this->doRPCRequest('ModifyBgpGroupAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBgpPeerAttributeResponse::fromMap($this->doRPCRequest('ModifyBgpPeerAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCommonBandwidthPackageAttributeResponse::fromMap($this->doRPCRequest('ModifyCommonBandwidthPackageAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCommonBandwidthPackageInternetChargeTypeResponse::fromMap($this->doRPCRequest('ModifyCommonBandwidthPackageInternetChargeType', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCommonBandwidthPackageIpBandwidthResponse::fromMap($this->doRPCRequest('ModifyCommonBandwidthPackageIpBandwidth', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyCommonBandwidthPackagePayTypeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyCommonBandwidthPackagePayTypeResponse
     */
    public function modifyCommonBandwidthPackagePayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCommonBandwidthPackagePayTypeResponse::fromMap($this->doRPCRequest('ModifyCommonBandwidthPackagePayType', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackagePayTypeRequest $request
     *
     * @return ModifyCommonBandwidthPackagePayTypeResponse
     */
    public function modifyCommonBandwidthPackagePayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackagePayTypeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCommonBandwidthPackageSpecResponse::fromMap($this->doRPCRequest('ModifyCommonBandwidthPackageSpec', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCustomerGatewayAttributeResponse::fromMap($this->doRPCRequest('ModifyCustomerGatewayAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyEipAddressAttributeResponse::fromMap($this->doRPCRequest('ModifyEipAddressAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyExpressCloudConnectionAttributeResponse::fromMap($this->doRPCRequest('ModifyExpressCloudConnectionAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyExpressCloudConnectionBandwidthResponse::fromMap($this->doRPCRequest('ModifyExpressCloudConnectionBandwidth', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowLogAttributeResponse::fromMap($this->doRPCRequest('ModifyFlowLogAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyForwardEntryResponse::fromMap($this->doRPCRequest('ModifyForwardEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFullNatEntryAttributeResponse::fromMap($this->doRPCRequest('ModifyFullNatEntryAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyGlobalAccelerationInstanceAttributesResponse::fromMap($this->doRPCRequest('ModifyGlobalAccelerationInstanceAttributes', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyGlobalAccelerationInstanceSpecResponse::fromMap($this->doRPCRequest('ModifyGlobalAccelerationInstanceSpec', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHaVipAttributeResponse::fromMap($this->doRPCRequest('ModifyHaVipAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIPv6TranslatorAclAttributeResponse::fromMap($this->doRPCRequest('ModifyIPv6TranslatorAclAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIPv6TranslatorAclListEntryResponse::fromMap($this->doRPCRequest('ModifyIPv6TranslatorAclListEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIPv6TranslatorAttributeResponse::fromMap($this->doRPCRequest('ModifyIPv6TranslatorAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIPv6TranslatorBandwidthResponse::fromMap($this->doRPCRequest('ModifyIPv6TranslatorBandwidth', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIPv6TranslatorEntryResponse::fromMap($this->doRPCRequest('ModifyIPv6TranslatorEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAutoRenewalAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpv6AddressAttributeResponse::fromMap($this->doRPCRequest('ModifyIpv6AddressAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpv6GatewayAttributeResponse::fromMap($this->doRPCRequest('ModifyIpv6GatewayAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpv6GatewaySpecResponse::fromMap($this->doRPCRequest('ModifyIpv6GatewaySpec', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpv6InternetBandwidthResponse::fromMap($this->doRPCRequest('ModifyIpv6InternetBandwidth', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNatGatewayAttributeResponse::fromMap($this->doRPCRequest('ModifyNatGatewayAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNatGatewaySpecResponse::fromMap($this->doRPCRequest('ModifyNatGatewaySpec', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNatIpAttributeResponse::fromMap($this->doRPCRequest('ModifyNatIpAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNatIpCidrAttributeResponse::fromMap($this->doRPCRequest('ModifyNatIpCidrAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNetworkAclAttributesResponse::fromMap($this->doRPCRequest('ModifyNetworkAclAttributes', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPhysicalConnectionAttributeResponse::fromMap($this->doRPCRequest('ModifyPhysicalConnectionAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRouteEntryResponse::fromMap($this->doRPCRequest('ModifyRouteEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRouteTableAttributesResponse::fromMap($this->doRPCRequest('ModifyRouteTableAttributes', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRouterInterfaceAttributeResponse::fromMap($this->doRPCRequest('ModifyRouterInterfaceAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyRouterInterfaceSpecResponse::fromMap($this->doRPCRequest('ModifyRouterInterfaceSpec', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySnatEntryResponse::fromMap($this->doRPCRequest('ModifySnatEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySslVpnClientCertResponse::fromMap($this->doRPCRequest('ModifySslVpnClientCert', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySslVpnServerResponse::fromMap($this->doRPCRequest('ModifySslVpnServer', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVRouterAttributeResponse::fromMap($this->doRPCRequest('ModifyVRouterAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyVSwitchAttributeResponse::fromMap($this->doRPCRequest('ModifyVSwitchAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyVirtualBorderRouterAttributeResponse::fromMap($this->doRPCRequest('ModifyVirtualBorderRouterAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyVpcAttributeResponse::fromMap($this->doRPCRequest('ModifyVpcAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyVpnConnectionAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyVpnConnectionAttributeResponse
     */
    public function modifyVpnConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVpnConnectionAttributeResponse::fromMap($this->doRPCRequest('ModifyVpnConnectionAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVpnGatewayAttributeResponse::fromMap($this->doRPCRequest('ModifyVpnGatewayAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVpnPbrRouteEntryWeightResponse::fromMap($this->doRPCRequest('ModifyVpnPbrRouteEntryWeight', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVpnRouteEntryWeightResponse::fromMap($this->doRPCRequest('ModifyVpnRouteEntryWeight', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OpenPhysicalConnectionServiceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return OpenPhysicalConnectionServiceResponse
     */
    public function openPhysicalConnectionServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenPhysicalConnectionServiceResponse::fromMap($this->doRPCRequest('OpenPhysicalConnectionService', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenTrafficMirrorServiceResponse::fromMap($this->doRPCRequest('OpenTrafficMirrorService', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishVpnRouteEntryResponse::fromMap($this->doRPCRequest('PublishVpnRouteEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecoverPhysicalConnectionResponse::fromMap($this->doRPCRequest('RecoverPhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecoverVirtualBorderRouterResponse::fromMap($this->doRPCRequest('RecoverVirtualBorderRouter', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseEipAddressResponse::fromMap($this->doRPCRequest('ReleaseEipAddress', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseEipSegmentAddressResponse::fromMap($this->doRPCRequest('ReleaseEipSegmentAddress', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveCommonBandwidthPackageIpResponse::fromMap($this->doRPCRequest('RemoveCommonBandwidthPackageIp', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveGlobalAccelerationInstanceIpResponse::fromMap($this->doRPCRequest('RemoveGlobalAccelerationInstanceIp', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveIPv6TranslatorAclListEntryResponse::fromMap($this->doRPCRequest('RemoveIPv6TranslatorAclListEntry', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveSourcesFromTrafficMirrorSessionResponse::fromMap($this->doRPCRequest('RemoveSourcesFromTrafficMirrorSession', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return RenewInstanceResponse::fromMap($this->doRPCRequest('RenewInstance', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReplaceVpcDhcpOptionsSetRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReplaceVpcDhcpOptionsSetResponse
     */
    public function replaceVpcDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceVpcDhcpOptionsSetResponse::fromMap($this->doRPCRequest('ReplaceVpcDhcpOptionsSet', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RevokeInstanceFromCenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeInstanceFromCenResponse
     */
    public function revokeInstanceFromCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeInstanceFromCenResponse::fromMap($this->doRPCRequest('RevokeInstanceFromCen', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return TerminatePhysicalConnectionResponse::fromMap($this->doRPCRequest('TerminatePhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return TerminateVirtualBorderRouterResponse::fromMap($this->doRPCRequest('TerminateVirtualBorderRouter', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnTagResourcesResponse::fromMap($this->doRPCRequest('UnTagResources', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateEipAddressResponse::fromMap($this->doRPCRequest('UnassociateEipAddress', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateGlobalAccelerationInstanceResponse::fromMap($this->doRPCRequest('UnassociateGlobalAccelerationInstance', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateHaVipResponse::fromMap($this->doRPCRequest('UnassociateHaVip', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateNetworkAclResponse::fromMap($this->doRPCRequest('UnassociateNetworkAcl', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociatePhysicalConnectionFromVirtualBorderRouterResponse::fromMap($this->doRPCRequest('UnassociatePhysicalConnectionFromVirtualBorderRouter', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateRouteTableResponse::fromMap($this->doRPCRequest('UnassociateRouteTable', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateVpcCidrBlockResponse::fromMap($this->doRPCRequest('UnassociateVpcCidrBlock', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateCrossBoarderStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateCrossBoarderStatusResponse
     */
    public function updateCrossBoarderStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCrossBoarderStatusResponse::fromMap($this->doRPCRequest('UpdateCrossBoarderStatus', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCrossBoarderStatusRequest $request
     *
     * @return UpdateCrossBoarderStatusResponse
     */
    public function updateCrossBoarderStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCrossBoarderStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDhcpOptionsSetAttributeResponse::fromMap($this->doRPCRequest('UpdateDhcpOptionsSetAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGatewayRouteTableEntryAttributeResponse::fromMap($this->doRPCRequest('UpdateGatewayRouteTableEntryAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateIpsecServerResponse::fromMap($this->doRPCRequest('UpdateIpsecServer', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateIpv4GatewayAttributeResponse::fromMap($this->doRPCRequest('UpdateIpv4GatewayAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateNatGatewayNatTypeResponse::fromMap($this->doRPCRequest('UpdateNatGatewayNatType', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateNetworkAclEntriesResponse::fromMap($this->doRPCRequest('UpdateNetworkAclEntries', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateTrafficMirrorFilterAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateTrafficMirrorFilterAttributeResponse
     */
    public function updateTrafficMirrorFilterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTrafficMirrorFilterAttributeResponse::fromMap($this->doRPCRequest('UpdateTrafficMirrorFilterAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTrafficMirrorFilterRuleAttributeResponse::fromMap($this->doRPCRequest('UpdateTrafficMirrorFilterRuleAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTrafficMirrorSessionAttributeResponse::fromMap($this->doRPCRequest('UpdateTrafficMirrorSessionAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVirtualBorderBandwidthResponse::fromMap($this->doRPCRequest('UpdateVirtualBorderBandwidth', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVirtualPhysicalConnectionResponse::fromMap($this->doRPCRequest('UpdateVirtualPhysicalConnection', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVpcGatewayEndpointAttributeResponse::fromMap($this->doRPCRequest('UpdateVpcGatewayEndpointAttribute', '2016-04-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
