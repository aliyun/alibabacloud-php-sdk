2025-07-15 Version: 6.11.7
- Update API DescribeNatGatewayAssociateNetworkInterfaces: add response parameters Body.AssociateNetworkInterfaces.$.ResourceVpcId.
- Update API GetVpcPrefixListAssociations: add response parameters Body.PrefixListAssociation.$.CidrList.


2025-06-16 Version: 6.11.6
- Update API GetDhcpOptionsSet: add response parameters Body.CreationTime.
- Update API ListDhcpOptionsSets: add response parameters Body.DhcpOptionsSets.$.CreationTime.


2025-06-16 Version: 6.11.5
- Update API CreateRouteEntries: add request parameters DryRun.
- Update API CreateRouteEntry: add request parameters DryRun.
- Update API CreateSslVpnServer: add request parameters DryRun.
- Update API CreateTrafficMirrorFilter: add request parameters EgressRules.$.IpVersion.
- Update API CreateTrafficMirrorFilter: add request parameters IngressRules.$.IpVersion.
- Update API CreateTrafficMirrorFilterRules: add request parameters EgressRules.$.IpVersion.
- Update API CreateTrafficMirrorFilterRules: add request parameters IngressRules.$.IpVersion.
- Update API CreateVcoRouteEntry: add request parameters DryRun.
- Update API CreateVpnAttachment: add request parameters DryRun.
- Update API CreateVpnConnection: add request parameters DryRun.
- Update API CreateVpnPbrRouteEntry: add request parameters DryRun.
- Update API CreateVpnRouteEntry: add request parameters DryRun.
- Update API DeleteRouteEntries: add request parameters DryRun.
- Update API DeleteRouteEntry: add request parameters DryRun.
- Update API DownloadVpnConnectionConfig: add response parameters Body.VpnConnectionConfig.BgpConfigs.
- Update API ListTrafficMirrorFilters: add response parameters Body.TrafficMirrorFilters.$.EgressRules.$.IpVersion.
- Update API ListTrafficMirrorFilters: add response parameters Body.TrafficMirrorFilters.$.IngressRules.$.IpVersion.
- Update API ListVpcGatewayEndpoints: add request parameters VpcId.
- Update API ModifyRouteEntry: add request parameters DryRun.
- Update API ModifySslVpnServer: add request parameters DryRun.


2025-04-14 Version: 6.11.4
- Update API DescribeIpv6GatewayAttribute: add response parameters Body.OwnerId.
- Update API DescribeIpv6Gateways: add response parameters Body.Ipv6Gateways.$.OwnerId.


2025-04-01 Version: 6.11.3
- Update API DeleteVSwitch: add request parameters DryRun.


2025-03-26 Version: 6.11.2
- Update API AllocateEipAddress: add request parameters Tag.
- Update API AllocateEipAddressPro: add request parameters Tag.
- Update API CreateCommonBandwidthPackage: add request parameters Tag.


2025-02-27 Version: 6.11.1
- Generated php 2016-04-28 for Vpc.

2025-02-26 Version: 6.11.0
- Support API ModifyEipForwardMode.
- Update API AssociateVpcCidrBlock: update response param.
- Update API CreateFlowLog: update param LogStoreName.
- Update API CreateFlowLog: update param ProjectName.
- Update API CreateRouteEntries: update param RouteEntries.
- Update API DeleteRouteEntries: update param RouteEntries.
- Update API DeleteVSwitch: update response param.
- Update API DeletionProtection: update response param.
- Update API DescribeEipAddresses: update response param.
- Update API DescribeIpv6Gateways: update response param.
- Update API DescribeRouteEntryList: update param DestCidrBlockList.
- Update API GetIpv4GatewayAttribute: update response param.
- Update API ListDhcpOptionsSets: update response param.
- Update API ListTrafficMirrorSessions: update response param.


2025-02-10 Version: 6.10.2
- Update API AssociateVpcCidrBlock: update response param.
- Update API CreateRouteEntries: update param RouteEntries.
- Update API DeleteRouteEntries: update param RouteEntries.
- Update API DeleteVSwitch: update response param.
- Update API DeletionProtection: update response param.
- Update API DescribeEipAddresses: update response param.
- Update API DescribeIpv6Gateways: update response param.
- Update API DescribeRouteEntryList: update param DestCidrBlockList.
- Update API GetIpv4GatewayAttribute: update response param.
- Update API ListDhcpOptionsSets: update response param.


2024-12-30 Version: 6.10.1
- Update API DescribeNatGatewayAssociateNetworkInterfaces: update response param.


2024-12-20 Version: 6.10.0
- Support API TransformEipSegmentToPublicIpAddressPool.


2024-12-18 Version: 6.9.8
- Update API CreateExpressConnectTrafficQos: add param ResourceGroupId.
- Update API CreateExpressConnectTrafficQos: add param Tags.
- Update API DescribeExpressConnectTrafficQos: add param ResourceGroupId.
- Update API DescribeExpressConnectTrafficQos: add param Tags.
- Update API DescribeExpressConnectTrafficQos: update response param.


2024-12-03 Version: 6.9.7
- Update API CreateForwardEntry: add param DryRun.
- Update API CreateSnatEntry: add param DryRun.
- Update API CreateVpnAttachment: add param EnableTunnelsBgp.
- Update API CreateVpnAttachment: add param TunnelOptionsSpecification.
- Update API CreateVpnAttachment: update param CustomerGatewayId.
- Update API CreateVpnAttachment: update param RemoteCaCert.
- Update API DescribeVcoRouteEntries: update response param.
- Update API DescribeVpnAttachments: update response param.
- Update API DescribeVpnConnection: update response param.
- Update API DescribeVpnConnections: update response param.
- Update API DescribeVpnRouteEntries: update response param.
- Update API ModifyForwardEntry: add param DryRun.
- Update API ModifyForwardEntry: update response param.
- Update API ModifyRouteEntry: update param RouteEntryId.
- Update API ModifySnatEntry: add param DryRun.
- Update API ModifyTunnelAttribute: update param TunnelOptionsSpecification.
- Update API ModifyVpnAttachmentAttribute: add param EnableTunnelsBgp.
- Update API ModifyVpnAttachmentAttribute: add param TunnelOptionsSpecification.
- Update API ModifyVpnAttachmentAttribute: update param RemoteCaCert.
- Update API ModifyVpnAttachmentAttribute: update response param.
- Update API ModifyVpnConnectionAttribute: update param TunnelOptionsSpecification.


2024-11-29 Version: 6.9.6
- Update API CreateVpnAttachment: add param EnableTunnelsBgp.
- Update API CreateVpnAttachment: add param TunnelOptionsSpecification.
- Update API CreateVpnAttachment: update param CustomerGatewayId.
- Update API CreateVpnAttachment: update param RemoteCaCert.
- Update API DescribeVcoRouteEntries: update response param.
- Update API DescribeVpnAttachments: update response param.
- Update API DescribeVpnConnection: update response param.
- Update API DescribeVpnConnections: update response param.
- Update API DescribeVpnRouteEntries: update response param.
- Update API ModifyRouteEntry: update param RouteEntryId.
- Update API ModifyTunnelAttribute: update param TunnelOptionsSpecification.
- Update API ModifyVpnAttachmentAttribute: add param EnableTunnelsBgp.
- Update API ModifyVpnAttachmentAttribute: add param TunnelOptionsSpecification.
- Update API ModifyVpnAttachmentAttribute: update param RemoteCaCert.
- Update API ModifyVpnAttachmentAttribute: update response param.
- Update API ModifyVpnConnectionAttribute: update param TunnelOptionsSpecification.


2024-10-24 Version: 6.9.5
- Update API CreateNatGateway: add param AccessMode.
- Update API CreateNatGateway: add param PrivateLinkEnabled.
- Update API DescribeNatGatewayAssociateNetworkInterfaces: update response param.
- Update API DescribeNatGateways: update response param.
- Update API GetNatGatewayAttribute: update response param.


2024-10-24 Version: 6.9.5
- Update API CreateNatGateway: add param AccessMode.
- Update API CreateNatGateway: add param PrivateLinkEnabled.
- Update API DescribeNatGatewayAssociateNetworkInterfaces: update response param.
- Update API DescribeNatGateways: update response param.
- Update API GetNatGatewayAttribute: update response param.


2024-09-25 Version: 6.9.4
- Update API CreateFlowLog: add param IpVersion.
- Update API DescribeFlowLogs: update response param.
- Update API ListVpcPublishedRouteEntries: update response param.
- Update API ModifyFlowLogAttribute: add param IpVersion.


2024-09-13 Version: 6.9.3
- Update API ListVpcPublishedRouteEntries: update response param.


2024-08-29 Version: 6.9.2
- Update API ModifyRouteEntry: add param DestinationCidrBlock.
- Update API ModifyRouteEntry: add param RouteTableId.
- Update API ModifyRouteEntry: update param RouteEntryId.


2024-08-29 Version: 6.9.2
- Update API ModifyRouteEntry: add param DestinationCidrBlock.
- Update API ModifyRouteEntry: add param RouteTableId.
- Update API ModifyRouteEntry: update param RouteEntryId.


2024-08-27 Version: 6.9.1
- Update API CreateVpc: add param EnableDnsHostname.
- Update API DescribeVpcAttribute: update response param.
- Update API DescribeVpcs: update response param.
- Update API ModifyVpcAttribute: add param EnableDnsHostname.


2024-08-19 Version: 6.9.0
- Support API ListVpcPublishedRouteEntries.
- Support API PublishVpcRouteEntries.
- Support API WithdrawVpcPublishedRouteEntries.
- Update API DescribeEcGrantRelation: update response param.


2024-08-15 Version: 6.8.0
- Support API DescribeNatGatewayAssociateNetworkInterfaces.


2024-08-09 Version: 6.7.4
- Update API CreateSnatEntry: add param NetworkInterfaceId.
- Update API CreateSnatEntry: update param SnatIp.
- Update API DescribeSnatTableEntries: add param NetworkInterfaceIds.
- Update API DescribeSnatTableEntries: update response param.
- Update API ModifySnatEntry: add param NetworkInterfaceId.


2024-08-08 Version: 6.7.3
- Update API ListPublicIpAddressPools: update response param.
- Update API UpdateVirtualPhysicalConnection: update response param.


2024-07-24 Version: 6.7.2
- Update API AllocateIpv6InternetBandwidth: add param DryRun.
- Update API AllocateIpv6InternetBandwidth: update param ClientToken.
- Update API DeleteIpv6Gateway: add param ClientToken.
- Update API DeleteIpv6Gateway: add param DryRun.
- Update API DeleteIpv6InternetBandwidth: add param ClientToken.
- Update API DeleteIpv6InternetBandwidth: add param DryRun.
- Update API DeleteVSwitchCidrReservation: add param ClientToken.
- Update API DeleteVSwitchCidrReservation: add param DryRun.
- Update API DeleteVpc: add param ClientToken.
- Update API DeleteVpc: update response param.
- Update API DescribePublicIpAddress: add param IpVersion.
- Update API ModifyFullNatEntryAttribute: update response param.
- Update API ModifyIpv6AddressAttribute: add param ClientToken.
- Update API ModifyIpv6AddressAttribute: add param DryRun.
- Update API ModifyIpv6GatewayAttribute: add param ClientToken.
- Update API ModifyIpv6GatewayAttribute: add param DryRun.
- Update API ModifyIpv6InternetBandwidth: add param DryRun.
- Update API ModifyIpv6InternetBandwidth: update param ClientToken.
- Update API ModifyVSwitchCidrReservationAttribute: add param ClientToken.
- Update API ModifyVSwitchCidrReservationAttribute: add param DryRun.


2024-07-19 Version: 6.7.1
- Update API CreateFailoverTestJob: add param DryRun.
- Update API CreateFailoverTestJob: update param ResourceType.
- Update API DescribeFailoverTestJob: update response param.
- Update API DescribeFailoverTestJobs: update response param.
- Update API UpdateFailoverTestJob: add param DryRun.


2024-06-28 Version: 6.7.0
- Support API GetPublicIpAddressPoolServiceStatus.
- Support API OpenPublicIpAddressPoolService.
- Update API AllocateIpv6Address: add param AddressType.
- Update API CreateBgpGroup: update response param.
- Update API DescribeIpv6Addresses: add param AddressType.
- Update API DescribeIpv6Addresses: update response param.
- Update API DescribeIpv6EgressOnlyRules: update response param.
- Update API ModifyBgpGroupAttribute: update response param.
- Update API ModifyRouteTableAttributes: add param RoutePropagationEnable.


2024-06-14 Version: 6.6.10
- Update API DeleteIpv4Gateway: add param InternetMode.


2024-06-06 Version: 6.6.9
- Update API CreateFullNatEntry: update param NatIpPort.
- Update API DeleteRouteEntry: update param RouteEntryId.
- Update API DeleteRouteEntry: update response param.


2024-06-06 Version: 6.6.9
- Update API CreateFullNatEntry: update param NatIpPort.
- Update API DeleteRouteEntry: update param RouteEntryId.
- Update API DeleteRouteEntry: update response param.


2024-05-27 Version: 6.6.8
- Update API ListPublicIpAddressPools: update response param.


2024-05-16 Version: 6.6.7
- Update API DescribeVSwitches: add param EnableIpv6.
- Update API DescribeVpcs: add param EnableIpv6.


2024-05-10 Version: 6.6.6
- Update API CreateSslVpnServer: add param IDaaSApplicationId.
- Update API DescribeSslVpnServers: update response param.
- Update API ModifySslVpnServer: add param IDaaSApplicationId.
- Update API ModifySslVpnServer: update response param.


2024-05-07 Version: 6.6.5
- Update API DescribeNatGateways: update response param.
- Update API GetNatGatewayAttribute: update response param.
- Update API ModifyNatGatewayAttribute: add param EnableSessionLog.
- Update API ModifyNatGatewayAttribute: add param LogDelivery.


2024-05-06 Version: 6.6.4
- Update API DescribeSnatTableEntries: update response param.
- Update API DescribeVpnGateway: update response param.
- Update API DescribeVpnGateways: update response param.
- Update API ListTrafficMirrorFilters: update response param.
- Update API ModifySnatEntry: add param EipAffinity.


2024-04-25 Version: 6.6.3
- Update API AssociateVpcCidrBlock: add param SecondaryCidrMask.
- Update API CreateVpc: add param Ipv4CidrMask.


2024-04-17 Version: 6.6.2
- Update API DescribeVirtualBorderRouters: update response param.


2024-04-16 Version: 6.6.1
- Update API DeleteExpressConnectTrafficQos: update param QosId.
- Update API DeleteExpressConnectTrafficQosQueue: update param QosId.
- Update API DeleteExpressConnectTrafficQosQueue: update param QueueId.
- Update API DescribeVpcAttribute: update response param.
- Update API DescribeVpcs: update response param.
- Update API ModifyExpressConnectTrafficQos: add param AddInstanceList.
- Update API ModifyExpressConnectTrafficQos: add param RemoveInstanceList.
- Update API ModifyExpressConnectTrafficQos: update param QosId.


2024-03-14 Version: 6.6.0
- Support API CreateExpressConnectTrafficQos.
- Support API CreateExpressConnectTrafficQosQueue.
- Support API CreateExpressConnectTrafficQosRule.
- Support API DeleteExpressConnectTrafficQos.
- Support API DeleteExpressConnectTrafficQosQueue.
- Support API DeleteExpressConnectTrafficQosRule.
- Support API Describe95Traffic.
- Support API DescribeExpressConnectTrafficQos.
- Support API DescribeExpressConnectTrafficQosQueue.
- Support API DescribeExpressConnectTrafficQosRule.
- Support API ModifyExpressConnectTrafficQos.
- Support API ModifyExpressConnectTrafficQosQueue.
- Support API ModifyExpressConnectTrafficQosRule.
- Update API AddPublicIpAddressPoolCidrBlock: update response param.
- Update API CreatePublicIpAddressPool: update response param.
- Update API DescribeEipAddresses: add param ServiceManaged.
- Update API DescribeIpv6Addresses: add param ServiceManaged.
- Update API DescribeIpv6Addresses: update response param.
- Update API DescribePublicIpAddress: update response param.


2024-03-04 Version: 6.5.0
- Support API CreateExpressConnectTrafficQos.
- Support API CreateExpressConnectTrafficQosQueue.
- Support API CreateExpressConnectTrafficQosRule.
- Support API DeleteExpressConnectTrafficQos.
- Support API DeleteExpressConnectTrafficQosQueue.
- Support API DeleteExpressConnectTrafficQosRule.
- Support API Describe95Traffic.
- Support API DescribeExpressConnectTrafficQos.
- Support API DescribeExpressConnectTrafficQosQueue.
- Support API DescribeExpressConnectTrafficQosRule.
- Support API ModifyExpressConnectTrafficQos.
- Support API ModifyExpressConnectTrafficQosQueue.
- Support API ModifyExpressConnectTrafficQosRule.
- Update API CreatePublicIpAddressPool: update response param.


2024-02-29 Version: 6.4.0
- Support API CreateExpressConnectTrafficQos.
- Support API CreateExpressConnectTrafficQosQueue.
- Support API CreateExpressConnectTrafficQosRule.
- Support API DeleteExpressConnectTrafficQos.
- Support API DeleteExpressConnectTrafficQosQueue.
- Support API DeleteExpressConnectTrafficQosRule.
- Support API Describe95Traffic.
- Support API DescribeExpressConnectTrafficQos.
- Support API DescribeExpressConnectTrafficQosQueue.
- Support API DescribeExpressConnectTrafficQosRule.
- Support API ModifyExpressConnectTrafficQos.
- Support API ModifyExpressConnectTrafficQosQueue.
- Support API ModifyExpressConnectTrafficQosRule.


2024-02-01 Version: 6.3.2
- Update API CreatePublicIpAddressPooladd SecurityProtectionTypes param.
- Update API DescribePhysicalConnectionsupdate response param.
- Update API ListPublicIpAddressPoolsadd SecurityProtectionEnabled param.
update response param.
- Update API ModifyNatGatewayAttributeupdate response param.
- Update API ModifySnatEntryupdate response param.


2024-01-22 Version: 6.3.2
- Generated php 2016-04-28 for Vpc.

2024-01-05 Version: 6.3.1
- Generated php 2016-04-28 for Vpc.

2024-01-04 Version: 6.3.0
- Generated php 2016-04-28 for Vpc.

2023-12-29 Version: 6.2.2
- Generated php 2016-04-28 for Vpc.

2023-12-26 Version: 6.2.2
- Generated php 2016-04-28 for Vpc.

2023-12-20 Version: 6.2.1
- Generated php 2016-04-28 for Vpc.

2023-12-19 Version: 6.2.0
- Generated php 2016-04-28 for Vpc.

2023-12-18 Version: 6.1.3
- Generated php 2016-04-28 for Vpc.

2023-11-27 Version: 6.1.2
- Generated php 2016-04-28 for Vpc.

2023-11-25 Version: 6.1.1
- Generated php 2016-04-28 for Vpc.

2023-11-21 Version: 6.1.0
- Generated php 2016-04-28 for Vpc.

2023-10-21 Version: 6.0.2
- Generated php 2016-04-28 for Vpc.

2023-10-19 Version: 6.0.1
- Generated php 2016-04-28 for Vpc.

2023-10-19 Version: 6.0.1
- Generated php 2016-04-28 for Vpc.

2023-10-18 Version: 6.0.0
- Generated php 2016-04-28 for Vpc.

2023-09-15 Version: 5.1.0
- Generated php 2016-04-28 for Vpc.

2023-09-07 Version: 5.0.2
- Generated php 2016-04-28 for Vpc.

2023-08-25 Version: 5.0.1
- Generated php 2016-04-28 for Vpc.

2023-08-18 Version: 5.0.0
- DescribeForwardTables offline.

2023-08-15 Version: 4.1.1
- Generated php 2016-04-28 for Vpc.

2023-08-10 Version: 4.1.0
- Generated php 2016-04-28 for Vpc.

2023-08-09 Version: 4.0.2
- Generated php 2016-04-28 for Vpc.

2023-08-08 Version: 4.0.1
- Generated php 2016-04-28 for Vpc.

2023-08-07 Version: 4.0.0
- DescribeForwardTables offline.

2023-07-04 Version: 3.0.0
- Interface modification with parameter deletion is incompatible.
- Remove CreateNatIp remove useless parameter NatIpCidrId, must specify NatIpCidr.

2023-03-10 Version: 2.0.12
- Support create default VPC and create default vSwitch .

2023-01-31 Version: 2.0.11
- Supported set high definition monitor log status for eip.
- Supported batch associate eip to cloud products.
- Supported VpcDescribeVpcNatGatewayNetworkInterfaceQuota.

2023-01-31 Version: 2.0.10
- Supported set high definition monitor log status for eip.
- Supported batch associate eip to cloud products.
- Supported VpcDescribeVpcNatGatewayNetworkInterfaceQuota.

2022-09-20 Version: 2.0.9
- DescribeSnatTableEntries DescribeSnatTableEntries ListFullnatEntries support query --by natGatewayId.

2022-09-01 Version: 2.0.8
- Support DescribeNatGateways return EipBindMode.

2022-08-31 Version: 2.0.7
- Support DescribeEipAddresses return Tags.

2022-08-26 Version: 2.0.6
- Support DescribeNatGateways return Tags.

2022-08-19 Version: 2.0.5
- Optimize DescribePublicIpAddress API.

2022-08-19 Version: 2.0.4
- Add DescribePublicIpAddress Interface.

2022-06-21 Version: 2.0.3
- Generated php 2016-04-28 for Vpc.

2021-12-05 Version: 2.0.2
- Generated php 2016-04-28 for Vpc.

2021-12-02 Version: 2.0.1
- AMP Version Change.

2020-12-30 Version: 2.0.0
- AMP Version Change.

2020-09-02 Version: 1.0.1
- Generated php 2016-04-28 for Vpc.

