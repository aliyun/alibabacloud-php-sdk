<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ActivateSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ActivateSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ActiveFlowLogRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ActiveFlowLogResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddACLRuleRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddACLRuleResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddDnatEntryRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddDnatEntryResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddNetworkOptimizationSettingRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddNetworkOptimizationSettingResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddSagCidrRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddSagCidrResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddSnatEntryRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddSnatEntryResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AssociateACLRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AssociateACLResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AssociateFlowLogRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AssociateFlowLogResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AssociateQosRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AssociateQosResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AttachNetworkOptimizationSagsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AttachNetworkOptimizationSagsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\BindSerialNumberRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\BindSerialNumberResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\BindSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\BindSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\BindVbrRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\BindVbrResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ClearSagCipherRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ClearSagCipherResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ClearSagRouteableAddressRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ClearSagRouteableAddressResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateACLRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateACLResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateCloudConnectNetworkRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateCloudConnectNetworkResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateEnterpriseCodeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateEnterpriseCodeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateFlowLogRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateFlowLogResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateHealthCheckRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateHealthCheckResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateNetworkOptimizationRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateNetworkOptimizationResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosCarRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosCarResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosPolicyRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosPolicyResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSagExpressConnectInterfaceRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSagExpressConnectInterfaceResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSagStaticRouteRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSagStaticRouteResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSmartAccessGatewayClientUserRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSmartAccessGatewayClientUserResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSmartAccessGatewaySoftwareRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateSmartAccessGatewaySoftwareResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeactiveFlowLogRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeactiveFlowLogResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteACLRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteACLResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteACLRuleRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteACLRuleResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteCloudConnectNetworkRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteCloudConnectNetworkResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteDnatEntryRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteDnatEntryResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteEnterpriseCodeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteEnterpriseCodeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteFlowLogRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteFlowLogResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteHealthCheckRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteHealthCheckResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteNetworkOptimizationRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteNetworkOptimizationResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteNetworkOptimizationSettingRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteNetworkOptimizationSettingResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteQosCarRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteQosCarResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteQosPolicyRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteQosPolicyResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteQosRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteQosResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteRouteDistributionStrategyRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteRouteDistributionStrategyResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSagCidrRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSagCidrResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSagExpressConnectInterfaceRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSagExpressConnectInterfaceResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSagStaticRouteRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSagStaticRouteResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSmartAccessGatewayClientUserRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSmartAccessGatewayClientUserResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSnatEntryRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DeleteSnatEntryResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeBindableSmartAccessGatewaysRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeBindableSmartAccessGatewaysResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeClientUserDNSRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeClientUserDNSResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDeviceAutoUpgradePolicyRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDeviceAutoUpgradePolicyResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDnatEntriesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDnatEntriesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogSagsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogSagsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantRulesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantRulesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagRulesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagRulesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagVbrRulesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagVbrRulesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthCheckAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthCheckAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthChecksRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthChecksResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationSagsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationSagsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationSettingsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationSettingsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrInterfacesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrInterfacesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrRulesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrRulesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePolicyBasedRoutingsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePolicyBasedRoutingsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosCarsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosCarsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeRouteDistributionStrategiesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeRouteDistributionStrategiesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagCurrentDnsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagCurrentDnsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSAGDeviceInfoRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSAGDeviceInfoResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagDropTopNRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagDropTopNResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagECRouteBackupAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagECRouteBackupAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagExpressConnectInterfaceListRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagExpressConnectInterfaceListResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagGlobalRouteProtocolRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagGlobalRouteProtocolResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagHaRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagHaResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagLanListRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagLanListResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagManagementPortRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagManagementPortResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagOnlineClientStatisticsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagOnlineClientStatisticsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagPortListRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagPortListResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagPortRouteProtocolListRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagPortRouteProtocolListResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteableAddressRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteableAddressResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteListRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteListResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteProtocolBgpRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteProtocolBgpResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteProtocolOspfRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteProtocolOspfResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagStaticRouteListRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagStaticRouteListResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagTrafficTopNRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagTrafficTopNResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagUserDnsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagUserDnsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagVbrRelationsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagVbrRelationsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWan4GRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWan4GResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanListRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanListResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanSnatRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanSnatResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWifiRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWifiResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayClientUsersRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayClientUsersResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayVersionsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayVersionsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSnatEntriesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSnatEntriesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUnbindFlowLogSagsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUnbindFlowLogSagsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserFlowStatisticsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserFlowStatisticsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientStatisticsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientStatisticsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DetachNetworkOptimizationSagsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DetachNetworkOptimizationSagsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiagnoseSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiagnoseSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisableSmartAccessGatewayUserRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisableSmartAccessGatewayUserResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisableSmartAGDpiMonitorRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisableSmartAGDpiMonitorResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisassociateACLRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisassociateACLResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisassociateFlowLogRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisassociateFlowLogResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisassociateQosRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DisassociateQosResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DowngradeSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DowngradeSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DowngradeSmartAccessGatewaySoftwareRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DowngradeSmartAccessGatewaySoftwareResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\EnableSmartAccessGatewayUserRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\EnableSmartAccessGatewayUserResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\EnableSmartAGDpiMonitorRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\EnableSmartAGDpiMonitorResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetAclAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetAclAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetCloudConnectNetworkUseLimitRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetCloudConnectNetworkUseLimitResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetSmartAccessGatewayUseLimitRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetSmartAccessGatewayUseLimitResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetSmartAGDpiAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetSmartAGDpiAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GrantInstanceToCbnRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GrantInstanceToCbnResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GrantSagInstanceToCcnRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GrantSagInstanceToCcnResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GrantSagInstanceToVbrRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GrantSagInstanceToVbrResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\KickOutClientsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\KickOutClientsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListAccessPointsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListAccessPointsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiGroupsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiGroupsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiSignaturesRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiSignaturesResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListEnterpriseCodeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListEnterpriseCodeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGApiUnsupportedFeatureRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGApiUnsupportedFeatureResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGByAccessPointRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGByAccessPointResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyACLRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyACLResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyACLRuleRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyACLRuleResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyClientUserDNSRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyClientUserDNSResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyCloudConnectNetworkRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyCloudConnectNetworkResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyDeviceAutoUpgradePolicyRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyDeviceAutoUpgradePolicyResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyFlowLogAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyFlowLogAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyHealthCheckRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyHealthCheckResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyNetworkOptimizationRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyNetworkOptimizationResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyQosCarRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyQosCarResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyQosPolicyRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyQosPolicyResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyQosRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyQosResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyRouteDistributionStrategyRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyRouteDistributionStrategyResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagCidrRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagCidrResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagECRouteBackupRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagECRouteBackupResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagExpressConnectInterfaceRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagExpressConnectInterfaceResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagGlobalRouteProtocolRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagGlobalRouteProtocolResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagHaRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagHaResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagLanRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagLanResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagManagementPortRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagManagementPortResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagPortRoleRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagPortRoleResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagPortRouteProtocolRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagPortRouteProtocolResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagRemoteAccessRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagRemoteAccessResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagRouteProtocolBgpRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagRouteProtocolBgpResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagRouteProtocolOspfRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagRouteProtocolOspfResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagStaticRouteRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagStaticRouteResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagUserDnsRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagUserDnsResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagWanRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagWanResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagWanSnatRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagWanSnatResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagWifiRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySagWifiResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySmartAccessGatewayClientUserRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySmartAccessGatewayClientUserResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySmartAccessGatewayUpBandwidthRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifySmartAccessGatewayUpBandwidthResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\OrchestrateSagECRouteBackupRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\OrchestrateSagECRouteBackupResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RebootSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RebootSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ResetSmartAccessGatewayClientUserPasswordRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ResetSmartAccessGatewayClientUserPasswordResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RevokeInstanceFromCbnRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RevokeInstanceFromCbnResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RevokeInstanceFromVbrRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RevokeInstanceFromVbrResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RevokeSagInstanceFromCcnRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RevokeSagInstanceFromCcnResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RoamClientUserRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\RoamClientUserResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\SetSagRouteableAddressRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\SetSagRouteableAddressResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\SynchronizeSmartAGWebConfigRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\SynchronizeSmartAGWebConfigResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnbindSerialNumberRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnbindSerialNumberResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnbindSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnbindSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnbindVbrRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnbindVbrResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnicomOrderConfirmRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnicomOrderConfirmResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnicomSignConfirmRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnicomSignConfirmResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnlockSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UnlockSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateEnterpriseCodeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateEnterpriseCodeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateSmartAccessGatewayVersionRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateSmartAccessGatewayVersionResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateSmartAGAccessPointRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateSmartAGAccessPointResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateSmartAGDpiAttributeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateSmartAGDpiAttributeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateSmartAGEnterpriseCodeRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpdateSmartAGEnterpriseCodeResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpgradeSmartAccessGatewayRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpgradeSmartAccessGatewayResponse;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpgradeSmartAccessGatewaySoftwareRequest;
use AlibabaCloud\SDK\Smartag\V20180313\Models\UpgradeSmartAccessGatewaySoftwareResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Smartag extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('smartag', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateSmartAccessGatewayRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ActivateSmartAccessGatewayResponse
     */
    public function activateSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActivateSmartAccessGatewayResponse::fromMap($this->doRPCRequest('ActivateSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ActivateSmartAccessGatewayRequest $request
     *
     * @return ActivateSmartAccessGatewayResponse
     */
    public function activateSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateSmartAccessGatewayWithOptions($request, $runtime);
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

        return ActiveFlowLogResponse::fromMap($this->doRPCRequest('ActiveFlowLog', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddACLRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddACLRuleResponse
     */
    public function addACLRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddACLRuleResponse::fromMap($this->doRPCRequest('AddACLRule', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddACLRuleRequest $request
     *
     * @return AddACLRuleResponse
     */
    public function addACLRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addACLRuleWithOptions($request, $runtime);
    }

    /**
     * @param AddDnatEntryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddDnatEntryResponse
     */
    public function addDnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDnatEntryResponse::fromMap($this->doRPCRequest('AddDnatEntry', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddDnatEntryRequest $request
     *
     * @return AddDnatEntryResponse
     */
    public function addDnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param AddNetworkOptimizationSettingRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddNetworkOptimizationSettingResponse
     */
    public function addNetworkOptimizationSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddNetworkOptimizationSettingResponse::fromMap($this->doRPCRequest('AddNetworkOptimizationSetting', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddNetworkOptimizationSettingRequest $request
     *
     * @return AddNetworkOptimizationSettingResponse
     */
    public function addNetworkOptimizationSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNetworkOptimizationSettingWithOptions($request, $runtime);
    }

    /**
     * @param AddSagCidrRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddSagCidrResponse
     */
    public function addSagCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSagCidrResponse::fromMap($this->doRPCRequest('AddSagCidr', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddSagCidrRequest $request
     *
     * @return AddSagCidrResponse
     */
    public function addSagCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSagCidrWithOptions($request, $runtime);
    }

    /**
     * @param AddSnatEntryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddSnatEntryResponse
     */
    public function addSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSnatEntryResponse::fromMap($this->doRPCRequest('AddSnatEntry', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddSnatEntryRequest $request
     *
     * @return AddSnatEntryResponse
     */
    public function addSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param AssociateACLRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AssociateACLResponse
     */
    public function associateACLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateACLResponse::fromMap($this->doRPCRequest('AssociateACL', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateACLRequest $request
     *
     * @return AssociateACLResponse
     */
    public function associateACL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateACLWithOptions($request, $runtime);
    }

    /**
     * @param AssociateFlowLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AssociateFlowLogResponse
     */
    public function associateFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateFlowLogResponse::fromMap($this->doRPCRequest('AssociateFlowLog', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateFlowLogRequest $request
     *
     * @return AssociateFlowLogResponse
     */
    public function associateFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateFlowLogWithOptions($request, $runtime);
    }

    /**
     * @param AssociateQosRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AssociateQosResponse
     */
    public function associateQosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateQosResponse::fromMap($this->doRPCRequest('AssociateQos', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateQosRequest $request
     *
     * @return AssociateQosResponse
     */
    public function associateQos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateQosWithOptions($request, $runtime);
    }

    /**
     * @param AttachNetworkOptimizationSagsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AttachNetworkOptimizationSagsResponse
     */
    public function attachNetworkOptimizationSagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachNetworkOptimizationSagsResponse::fromMap($this->doRPCRequest('AttachNetworkOptimizationSags', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachNetworkOptimizationSagsRequest $request
     *
     * @return AttachNetworkOptimizationSagsResponse
     */
    public function attachNetworkOptimizationSags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachNetworkOptimizationSagsWithOptions($request, $runtime);
    }

    /**
     * @param BindSerialNumberRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindSerialNumberResponse
     */
    public function bindSerialNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindSerialNumberResponse::fromMap($this->doRPCRequest('BindSerialNumber', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindSerialNumberRequest $request
     *
     * @return BindSerialNumberResponse
     */
    public function bindSerialNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindSerialNumberWithOptions($request, $runtime);
    }

    /**
     * @param BindSmartAccessGatewayRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BindSmartAccessGatewayResponse
     */
    public function bindSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindSmartAccessGatewayResponse::fromMap($this->doRPCRequest('BindSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindSmartAccessGatewayRequest $request
     *
     * @return BindSmartAccessGatewayResponse
     */
    public function bindSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param BindVbrRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindVbrResponse
     */
    public function bindVbrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindVbrResponse::fromMap($this->doRPCRequest('BindVbr', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindVbrRequest $request
     *
     * @return BindVbrResponse
     */
    public function bindVbr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindVbrWithOptions($request, $runtime);
    }

    /**
     * @param ClearSagCipherRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ClearSagCipherResponse
     */
    public function clearSagCipherWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearSagCipherResponse::fromMap($this->doRPCRequest('ClearSagCipher', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClearSagCipherRequest $request
     *
     * @return ClearSagCipherResponse
     */
    public function clearSagCipher($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearSagCipherWithOptions($request, $runtime);
    }

    /**
     * @param ClearSagRouteableAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ClearSagRouteableAddressResponse
     */
    public function clearSagRouteableAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearSagRouteableAddressResponse::fromMap($this->doRPCRequest('ClearSagRouteableAddress', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClearSagRouteableAddressRequest $request
     *
     * @return ClearSagRouteableAddressResponse
     */
    public function clearSagRouteableAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearSagRouteableAddressWithOptions($request, $runtime);
    }

    /**
     * @param CreateACLRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateACLResponse
     */
    public function createACLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateACLResponse::fromMap($this->doRPCRequest('CreateACL', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateACLRequest $request
     *
     * @return CreateACLResponse
     */
    public function createACL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createACLWithOptions($request, $runtime);
    }

    /**
     * @param CreateCloudConnectNetworkRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCloudConnectNetworkResponse
     */
    public function createCloudConnectNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCloudConnectNetworkResponse::fromMap($this->doRPCRequest('CreateCloudConnectNetwork', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCloudConnectNetworkRequest $request
     *
     * @return CreateCloudConnectNetworkResponse
     */
    public function createCloudConnectNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudConnectNetworkWithOptions($request, $runtime);
    }

    /**
     * @param CreateEnterpriseCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEnterpriseCodeResponse
     */
    public function createEnterpriseCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEnterpriseCodeResponse::fromMap($this->doRPCRequest('CreateEnterpriseCode', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEnterpriseCodeRequest $request
     *
     * @return CreateEnterpriseCodeResponse
     */
    public function createEnterpriseCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnterpriseCodeWithOptions($request, $runtime);
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

        return CreateFlowLogResponse::fromMap($this->doRPCRequest('CreateFlowLog', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateHealthCheckRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateHealthCheckResponse
     */
    public function createHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHealthCheckResponse::fromMap($this->doRPCRequest('CreateHealthCheck', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateHealthCheckRequest $request
     *
     * @return CreateHealthCheckResponse
     */
    public function createHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHealthCheckWithOptions($request, $runtime);
    }

    /**
     * @param CreateNetworkOptimizationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateNetworkOptimizationResponse
     */
    public function createNetworkOptimizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNetworkOptimizationResponse::fromMap($this->doRPCRequest('CreateNetworkOptimization', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNetworkOptimizationRequest $request
     *
     * @return CreateNetworkOptimizationResponse
     */
    public function createNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * @param CreateQosRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateQosResponse
     */
    public function createQosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateQosResponse::fromMap($this->doRPCRequest('CreateQos', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateQosRequest $request
     *
     * @return CreateQosResponse
     */
    public function createQos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQosWithOptions($request, $runtime);
    }

    /**
     * @param CreateQosCarRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateQosCarResponse
     */
    public function createQosCarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateQosCarResponse::fromMap($this->doRPCRequest('CreateQosCar', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateQosCarRequest $request
     *
     * @return CreateQosCarResponse
     */
    public function createQosCar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQosCarWithOptions($request, $runtime);
    }

    /**
     * @param CreateQosPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateQosPolicyResponse
     */
    public function createQosPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateQosPolicyResponse::fromMap($this->doRPCRequest('CreateQosPolicy', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateQosPolicyRequest $request
     *
     * @return CreateQosPolicyResponse
     */
    public function createQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQosPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateSagExpressConnectInterfaceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateSagExpressConnectInterfaceResponse
     */
    public function createSagExpressConnectInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSagExpressConnectInterfaceResponse::fromMap($this->doRPCRequest('CreateSagExpressConnectInterface', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSagExpressConnectInterfaceRequest $request
     *
     * @return CreateSagExpressConnectInterfaceResponse
     */
    public function createSagExpressConnectInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSagExpressConnectInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateSagStaticRouteRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSagStaticRouteResponse
     */
    public function createSagStaticRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSagStaticRouteResponse::fromMap($this->doRPCRequest('CreateSagStaticRoute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSagStaticRouteRequest $request
     *
     * @return CreateSagStaticRouteResponse
     */
    public function createSagStaticRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSagStaticRouteWithOptions($request, $runtime);
    }

    /**
     * @param CreateSmartAccessGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateSmartAccessGatewayResponse
     */
    public function createSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSmartAccessGatewayResponse::fromMap($this->doRPCRequest('CreateSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSmartAccessGatewayRequest $request
     *
     * @return CreateSmartAccessGatewayResponse
     */
    public function createSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateSmartAccessGatewayClientUserRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateSmartAccessGatewayClientUserResponse
     */
    public function createSmartAccessGatewayClientUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSmartAccessGatewayClientUserResponse::fromMap($this->doRPCRequest('CreateSmartAccessGatewayClientUser', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSmartAccessGatewayClientUserRequest $request
     *
     * @return CreateSmartAccessGatewayClientUserResponse
     */
    public function createSmartAccessGatewayClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmartAccessGatewayClientUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateSmartAccessGatewaySoftwareRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateSmartAccessGatewaySoftwareResponse
     */
    public function createSmartAccessGatewaySoftwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSmartAccessGatewaySoftwareResponse::fromMap($this->doRPCRequest('CreateSmartAccessGatewaySoftware', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSmartAccessGatewaySoftwareRequest $request
     *
     * @return CreateSmartAccessGatewaySoftwareResponse
     */
    public function createSmartAccessGatewaySoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmartAccessGatewaySoftwareWithOptions($request, $runtime);
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

        return DeactiveFlowLogResponse::fromMap($this->doRPCRequest('DeactiveFlowLog', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteACLRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteACLResponse
     */
    public function deleteACLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteACLResponse::fromMap($this->doRPCRequest('DeleteACL', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteACLRequest $request
     *
     * @return DeleteACLResponse
     */
    public function deleteACL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteACLWithOptions($request, $runtime);
    }

    /**
     * @param DeleteACLRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteACLRuleResponse
     */
    public function deleteACLRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteACLRuleResponse::fromMap($this->doRPCRequest('DeleteACLRule', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteACLRuleRequest $request
     *
     * @return DeleteACLRuleResponse
     */
    public function deleteACLRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteACLRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCloudConnectNetworkRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCloudConnectNetworkResponse
     */
    public function deleteCloudConnectNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCloudConnectNetworkResponse::fromMap($this->doRPCRequest('DeleteCloudConnectNetwork', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCloudConnectNetworkRequest $request
     *
     * @return DeleteCloudConnectNetworkResponse
     */
    public function deleteCloudConnectNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudConnectNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDnatEntryResponse
     */
    public function deleteDnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDnatEntryResponse::fromMap($this->doRPCRequest('DeleteDnatEntry', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDnatEntryRequest $request
     *
     * @return DeleteDnatEntryResponse
     */
    public function deleteDnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEnterpriseCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEnterpriseCodeResponse
     */
    public function deleteEnterpriseCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEnterpriseCodeResponse::fromMap($this->doRPCRequest('DeleteEnterpriseCode', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEnterpriseCodeRequest $request
     *
     * @return DeleteEnterpriseCodeResponse
     */
    public function deleteEnterpriseCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnterpriseCodeWithOptions($request, $runtime);
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

        return DeleteFlowLogResponse::fromMap($this->doRPCRequest('DeleteFlowLog', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteHealthCheckRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteHealthCheckResponse
     */
    public function deleteHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHealthCheckResponse::fromMap($this->doRPCRequest('DeleteHealthCheck', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHealthCheckRequest $request
     *
     * @return DeleteHealthCheckResponse
     */
    public function deleteHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHealthCheckWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkOptimizationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteNetworkOptimizationResponse
     */
    public function deleteNetworkOptimizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNetworkOptimizationResponse::fromMap($this->doRPCRequest('DeleteNetworkOptimization', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNetworkOptimizationRequest $request
     *
     * @return DeleteNetworkOptimizationResponse
     */
    public function deleteNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkOptimizationSettingRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteNetworkOptimizationSettingResponse
     */
    public function deleteNetworkOptimizationSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNetworkOptimizationSettingResponse::fromMap($this->doRPCRequest('DeleteNetworkOptimizationSetting', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNetworkOptimizationSettingRequest $request
     *
     * @return DeleteNetworkOptimizationSettingResponse
     */
    public function deleteNetworkOptimizationSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkOptimizationSettingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQosRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteQosResponse
     */
    public function deleteQosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteQosResponse::fromMap($this->doRPCRequest('DeleteQos', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteQosRequest $request
     *
     * @return DeleteQosResponse
     */
    public function deleteQos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQosWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQosCarRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteQosCarResponse
     */
    public function deleteQosCarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteQosCarResponse::fromMap($this->doRPCRequest('DeleteQosCar', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteQosCarRequest $request
     *
     * @return DeleteQosCarResponse
     */
    public function deleteQosCar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQosCarWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQosPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteQosPolicyResponse
     */
    public function deleteQosPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteQosPolicyResponse::fromMap($this->doRPCRequest('DeleteQosPolicy', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteQosPolicyRequest $request
     *
     * @return DeleteQosPolicyResponse
     */
    public function deleteQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQosPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRouteDistributionStrategyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteRouteDistributionStrategyResponse
     */
    public function deleteRouteDistributionStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRouteDistributionStrategyResponse::fromMap($this->doRPCRequest('DeleteRouteDistributionStrategy', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRouteDistributionStrategyRequest $request
     *
     * @return DeleteRouteDistributionStrategyResponse
     */
    public function deleteRouteDistributionStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteDistributionStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSagCidrRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSagCidrResponse
     */
    public function deleteSagCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSagCidrResponse::fromMap($this->doRPCRequest('DeleteSagCidr', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSagCidrRequest $request
     *
     * @return DeleteSagCidrResponse
     */
    public function deleteSagCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSagCidrWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSagExpressConnectInterfaceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteSagExpressConnectInterfaceResponse
     */
    public function deleteSagExpressConnectInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSagExpressConnectInterfaceResponse::fromMap($this->doRPCRequest('DeleteSagExpressConnectInterface', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSagExpressConnectInterfaceRequest $request
     *
     * @return DeleteSagExpressConnectInterfaceResponse
     */
    public function deleteSagExpressConnectInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSagExpressConnectInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSagStaticRouteRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSagStaticRouteResponse
     */
    public function deleteSagStaticRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSagStaticRouteResponse::fromMap($this->doRPCRequest('DeleteSagStaticRoute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSagStaticRouteRequest $request
     *
     * @return DeleteSagStaticRouteResponse
     */
    public function deleteSagStaticRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSagStaticRouteWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmartAccessGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSmartAccessGatewayResponse
     */
    public function deleteSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSmartAccessGatewayResponse::fromMap($this->doRPCRequest('DeleteSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSmartAccessGatewayRequest $request
     *
     * @return DeleteSmartAccessGatewayResponse
     */
    public function deleteSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmartAccessGatewayClientUserRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteSmartAccessGatewayClientUserResponse
     */
    public function deleteSmartAccessGatewayClientUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSmartAccessGatewayClientUserResponse::fromMap($this->doRPCRequest('DeleteSmartAccessGatewayClientUser', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSmartAccessGatewayClientUserRequest $request
     *
     * @return DeleteSmartAccessGatewayClientUserResponse
     */
    public function deleteSmartAccessGatewayClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmartAccessGatewayClientUserWithOptions($request, $runtime);
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

        return DeleteSnatEntryResponse::fromMap($this->doRPCRequest('DeleteSnatEntry', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeACLAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeACLAttributeResponse
     */
    public function describeACLAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeACLAttributeResponse::fromMap($this->doRPCRequest('DescribeACLAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeACLAttributeRequest $request
     *
     * @return DescribeACLAttributeResponse
     */
    public function describeACLAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeACLAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeACLsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeACLsResponse
     */
    public function describeACLsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeACLsResponse::fromMap($this->doRPCRequest('DescribeACLs', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeACLsRequest $request
     *
     * @return DescribeACLsResponse
     */
    public function describeACLs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeACLsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBindableSmartAccessGatewaysRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeBindableSmartAccessGatewaysResponse
     */
    public function describeBindableSmartAccessGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBindableSmartAccessGatewaysResponse::fromMap($this->doRPCRequest('DescribeBindableSmartAccessGateways', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBindableSmartAccessGatewaysRequest $request
     *
     * @return DescribeBindableSmartAccessGatewaysResponse
     */
    public function describeBindableSmartAccessGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBindableSmartAccessGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClientUserDNSRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClientUserDNSResponse
     */
    public function describeClientUserDNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClientUserDNSResponse::fromMap($this->doRPCRequest('DescribeClientUserDNS', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClientUserDNSRequest $request
     *
     * @return DescribeClientUserDNSResponse
     */
    public function describeClientUserDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientUserDNSWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudConnectNetworksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudConnectNetworksResponse
     */
    public function describeCloudConnectNetworksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCloudConnectNetworksResponse::fromMap($this->doRPCRequest('DescribeCloudConnectNetworks', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCloudConnectNetworksRequest $request
     *
     * @return DescribeCloudConnectNetworksResponse
     */
    public function describeCloudConnectNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudConnectNetworksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceAutoUpgradePolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDeviceAutoUpgradePolicyResponse
     */
    public function describeDeviceAutoUpgradePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceAutoUpgradePolicyResponse::fromMap($this->doRPCRequest('DescribeDeviceAutoUpgradePolicy', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceAutoUpgradePolicyRequest $request
     *
     * @return DescribeDeviceAutoUpgradePolicyResponse
     */
    public function describeDeviceAutoUpgradePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceAutoUpgradePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDnatEntriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDnatEntriesResponse
     */
    public function describeDnatEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnatEntriesResponse::fromMap($this->doRPCRequest('DescribeDnatEntries', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDnatEntriesRequest $request
     *
     * @return DescribeDnatEntriesResponse
     */
    public function describeDnatEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnatEntriesWithOptions($request, $runtime);
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

        return DescribeFlowLogsResponse::fromMap($this->doRPCRequest('DescribeFlowLogs', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeFlowLogSagsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFlowLogSagsResponse
     */
    public function describeFlowLogSagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowLogSagsResponse::fromMap($this->doRPCRequest('DescribeFlowLogSags', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowLogSagsRequest $request
     *
     * @return DescribeFlowLogSagsResponse
     */
    public function describeFlowLogSags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowLogSagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGrantRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeGrantRulesResponse
     */
    public function describeGrantRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGrantRulesResponse::fromMap($this->doRPCRequest('DescribeGrantRules', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGrantRulesRequest $request
     *
     * @return DescribeGrantRulesResponse
     */
    public function describeGrantRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGrantRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGrantSagRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeGrantSagRulesResponse
     */
    public function describeGrantSagRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGrantSagRulesResponse::fromMap($this->doRPCRequest('DescribeGrantSagRules', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGrantSagRulesRequest $request
     *
     * @return DescribeGrantSagRulesResponse
     */
    public function describeGrantSagRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGrantSagRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGrantSagVbrRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGrantSagVbrRulesResponse
     */
    public function describeGrantSagVbrRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGrantSagVbrRulesResponse::fromMap($this->doRPCRequest('DescribeGrantSagVbrRules', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGrantSagVbrRulesRequest $request
     *
     * @return DescribeGrantSagVbrRulesResponse
     */
    public function describeGrantSagVbrRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGrantSagVbrRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHealthCheckAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHealthCheckAttributeResponse
     */
    public function describeHealthCheckAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHealthCheckAttributeResponse::fromMap($this->doRPCRequest('DescribeHealthCheckAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHealthCheckAttributeRequest $request
     *
     * @return DescribeHealthCheckAttributeResponse
     */
    public function describeHealthCheckAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHealthChecksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHealthChecksResponse
     */
    public function describeHealthChecksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHealthChecksResponse::fromMap($this->doRPCRequest('DescribeHealthChecks', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHealthChecksRequest $request
     *
     * @return DescribeHealthChecksResponse
     */
    public function describeHealthChecks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthChecksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkOptimizationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeNetworkOptimizationsResponse
     */
    public function describeNetworkOptimizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkOptimizationsResponse::fromMap($this->doRPCRequest('DescribeNetworkOptimizations', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNetworkOptimizationsRequest $request
     *
     * @return DescribeNetworkOptimizationsResponse
     */
    public function describeNetworkOptimizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkOptimizationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkOptimizationSagsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeNetworkOptimizationSagsResponse
     */
    public function describeNetworkOptimizationSagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkOptimizationSagsResponse::fromMap($this->doRPCRequest('DescribeNetworkOptimizationSags', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNetworkOptimizationSagsRequest $request
     *
     * @return DescribeNetworkOptimizationSagsResponse
     */
    public function describeNetworkOptimizationSags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkOptimizationSagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkOptimizationSettingsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeNetworkOptimizationSettingsResponse
     */
    public function describeNetworkOptimizationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkOptimizationSettingsResponse::fromMap($this->doRPCRequest('DescribeNetworkOptimizationSettings', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNetworkOptimizationSettingsRequest $request
     *
     * @return DescribeNetworkOptimizationSettingsResponse
     */
    public function describeNetworkOptimizationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkOptimizationSettingsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePbrInterfacesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePbrInterfacesResponse
     */
    public function describePbrInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePbrInterfacesResponse::fromMap($this->doRPCRequest('DescribePbrInterfaces', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePbrInterfacesRequest $request
     *
     * @return DescribePbrInterfacesResponse
     */
    public function describePbrInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePbrInterfacesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePbrRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePbrRulesResponse
     */
    public function describePbrRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePbrRulesResponse::fromMap($this->doRPCRequest('DescribePbrRules', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePbrRulesRequest $request
     *
     * @return DescribePbrRulesResponse
     */
    public function describePbrRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePbrRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePolicyBasedRoutingsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePolicyBasedRoutingsResponse
     */
    public function describePolicyBasedRoutingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePolicyBasedRoutingsResponse::fromMap($this->doRPCRequest('DescribePolicyBasedRoutings', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePolicyBasedRoutingsRequest $request
     *
     * @return DescribePolicyBasedRoutingsResponse
     */
    public function describePolicyBasedRoutings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyBasedRoutingsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeQosCarsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeQosCarsResponse
     */
    public function describeQosCarsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeQosCarsResponse::fromMap($this->doRPCRequest('DescribeQosCars', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeQosCarsRequest $request
     *
     * @return DescribeQosCarsResponse
     */
    public function describeQosCars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQosCarsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeQosesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeQosesResponse
     */
    public function describeQosesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeQosesResponse::fromMap($this->doRPCRequest('DescribeQoses', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeQosesRequest $request
     *
     * @return DescribeQosesResponse
     */
    public function describeQoses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQosesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeQosPoliciesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeQosPoliciesResponse
     */
    public function describeQosPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeQosPoliciesResponse::fromMap($this->doRPCRequest('DescribeQosPolicies', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeQosPoliciesRequest $request
     *
     * @return DescribeQosPoliciesResponse
     */
    public function describeQosPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQosPoliciesWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRouteDistributionStrategiesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeRouteDistributionStrategiesResponse
     */
    public function describeRouteDistributionStrategiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouteDistributionStrategiesResponse::fromMap($this->doRPCRequest('DescribeRouteDistributionStrategies', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRouteDistributionStrategiesRequest $request
     *
     * @return DescribeRouteDistributionStrategiesResponse
     */
    public function describeRouteDistributionStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteDistributionStrategiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagCurrentDnsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSagCurrentDnsResponse
     */
    public function describeSagCurrentDnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagCurrentDnsResponse::fromMap($this->doRPCRequest('DescribeSagCurrentDns', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagCurrentDnsRequest $request
     *
     * @return DescribeSagCurrentDnsResponse
     */
    public function describeSagCurrentDns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagCurrentDnsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSAGDeviceInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSAGDeviceInfoResponse
     */
    public function describeSAGDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSAGDeviceInfoResponse::fromMap($this->doRPCRequest('DescribeSAGDeviceInfo', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSAGDeviceInfoRequest $request
     *
     * @return DescribeSAGDeviceInfoResponse
     */
    public function describeSAGDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSAGDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagDropTopNRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSagDropTopNResponse
     */
    public function describeSagDropTopNWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagDropTopNResponse::fromMap($this->doRPCRequest('DescribeSagDropTopN', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagDropTopNRequest $request
     *
     * @return DescribeSagDropTopNResponse
     */
    public function describeSagDropTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagDropTopNWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagECRouteBackupAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSagECRouteBackupAttributeResponse
     */
    public function describeSagECRouteBackupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagECRouteBackupAttributeResponse::fromMap($this->doRPCRequest('DescribeSagECRouteBackupAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagECRouteBackupAttributeRequest $request
     *
     * @return DescribeSagECRouteBackupAttributeResponse
     */
    public function describeSagECRouteBackupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagECRouteBackupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagExpressConnectInterfaceListRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeSagExpressConnectInterfaceListResponse
     */
    public function describeSagExpressConnectInterfaceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagExpressConnectInterfaceListResponse::fromMap($this->doRPCRequest('DescribeSagExpressConnectInterfaceList', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagExpressConnectInterfaceListRequest $request
     *
     * @return DescribeSagExpressConnectInterfaceListResponse
     */
    public function describeSagExpressConnectInterfaceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagExpressConnectInterfaceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagGlobalRouteProtocolRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSagGlobalRouteProtocolResponse
     */
    public function describeSagGlobalRouteProtocolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagGlobalRouteProtocolResponse::fromMap($this->doRPCRequest('DescribeSagGlobalRouteProtocol', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagGlobalRouteProtocolRequest $request
     *
     * @return DescribeSagGlobalRouteProtocolResponse
     */
    public function describeSagGlobalRouteProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagGlobalRouteProtocolWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagHaRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeSagHaResponse
     */
    public function describeSagHaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagHaResponse::fromMap($this->doRPCRequest('DescribeSagHa', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagHaRequest $request
     *
     * @return DescribeSagHaResponse
     */
    public function describeSagHa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagHaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagLanListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSagLanListResponse
     */
    public function describeSagLanListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagLanListResponse::fromMap($this->doRPCRequest('DescribeSagLanList', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagLanListRequest $request
     *
     * @return DescribeSagLanListResponse
     */
    public function describeSagLanList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagLanListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagManagementPortRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSagManagementPortResponse
     */
    public function describeSagManagementPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagManagementPortResponse::fromMap($this->doRPCRequest('DescribeSagManagementPort', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagManagementPortRequest $request
     *
     * @return DescribeSagManagementPortResponse
     */
    public function describeSagManagementPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagManagementPortWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagOnlineClientStatisticsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSagOnlineClientStatisticsResponse
     */
    public function describeSagOnlineClientStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagOnlineClientStatisticsResponse::fromMap($this->doRPCRequest('DescribeSagOnlineClientStatistics', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagOnlineClientStatisticsRequest $request
     *
     * @return DescribeSagOnlineClientStatisticsResponse
     */
    public function describeSagOnlineClientStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagOnlineClientStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagPortListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSagPortListResponse
     */
    public function describeSagPortListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagPortListResponse::fromMap($this->doRPCRequest('DescribeSagPortList', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagPortListRequest $request
     *
     * @return DescribeSagPortListResponse
     */
    public function describeSagPortList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagPortListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagPortRouteProtocolListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeSagPortRouteProtocolListResponse
     */
    public function describeSagPortRouteProtocolListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagPortRouteProtocolListResponse::fromMap($this->doRPCRequest('DescribeSagPortRouteProtocolList', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagPortRouteProtocolListRequest $request
     *
     * @return DescribeSagPortRouteProtocolListResponse
     */
    public function describeSagPortRouteProtocolList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagPortRouteProtocolListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagRemoteAccessRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSagRemoteAccessResponse
     */
    public function describeSagRemoteAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagRemoteAccessResponse::fromMap($this->doRPCRequest('DescribeSagRemoteAccess', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagRemoteAccessRequest $request
     *
     * @return DescribeSagRemoteAccessResponse
     */
    public function describeSagRemoteAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagRemoteAccessWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagRouteableAddressRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSagRouteableAddressResponse
     */
    public function describeSagRouteableAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagRouteableAddressResponse::fromMap($this->doRPCRequest('DescribeSagRouteableAddress', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagRouteableAddressRequest $request
     *
     * @return DescribeSagRouteableAddressResponse
     */
    public function describeSagRouteableAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagRouteableAddressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagRouteListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSagRouteListResponse
     */
    public function describeSagRouteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagRouteListResponse::fromMap($this->doRPCRequest('DescribeSagRouteList', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagRouteListRequest $request
     *
     * @return DescribeSagRouteListResponse
     */
    public function describeSagRouteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagRouteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagRouteProtocolBgpRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSagRouteProtocolBgpResponse
     */
    public function describeSagRouteProtocolBgpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagRouteProtocolBgpResponse::fromMap($this->doRPCRequest('DescribeSagRouteProtocolBgp', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagRouteProtocolBgpRequest $request
     *
     * @return DescribeSagRouteProtocolBgpResponse
     */
    public function describeSagRouteProtocolBgp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagRouteProtocolBgpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagRouteProtocolOspfRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSagRouteProtocolOspfResponse
     */
    public function describeSagRouteProtocolOspfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagRouteProtocolOspfResponse::fromMap($this->doRPCRequest('DescribeSagRouteProtocolOspf', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagRouteProtocolOspfRequest $request
     *
     * @return DescribeSagRouteProtocolOspfResponse
     */
    public function describeSagRouteProtocolOspf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagRouteProtocolOspfWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagStaticRouteListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSagStaticRouteListResponse
     */
    public function describeSagStaticRouteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagStaticRouteListResponse::fromMap($this->doRPCRequest('DescribeSagStaticRouteList', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagStaticRouteListRequest $request
     *
     * @return DescribeSagStaticRouteListResponse
     */
    public function describeSagStaticRouteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagStaticRouteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagTrafficTopNRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSagTrafficTopNResponse
     */
    public function describeSagTrafficTopNWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagTrafficTopNResponse::fromMap($this->doRPCRequest('DescribeSagTrafficTopN', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagTrafficTopNRequest $request
     *
     * @return DescribeSagTrafficTopNResponse
     */
    public function describeSagTrafficTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagTrafficTopNWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagUserDnsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSagUserDnsResponse
     */
    public function describeSagUserDnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagUserDnsResponse::fromMap($this->doRPCRequest('DescribeSagUserDns', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagUserDnsRequest $request
     *
     * @return DescribeSagUserDnsResponse
     */
    public function describeSagUserDns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagUserDnsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagVbrRelationsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSagVbrRelationsResponse
     */
    public function describeSagVbrRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagVbrRelationsResponse::fromMap($this->doRPCRequest('DescribeSagVbrRelations', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagVbrRelationsRequest $request
     *
     * @return DescribeSagVbrRelationsResponse
     */
    public function describeSagVbrRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagVbrRelationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagWan4GRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSagWan4GResponse
     */
    public function describeSagWan4GWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagWan4GResponse::fromMap($this->doRPCRequest('DescribeSagWan4G', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagWan4GRequest $request
     *
     * @return DescribeSagWan4GResponse
     */
    public function describeSagWan4G($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagWan4GWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagWanListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSagWanListResponse
     */
    public function describeSagWanListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagWanListResponse::fromMap($this->doRPCRequest('DescribeSagWanList', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagWanListRequest $request
     *
     * @return DescribeSagWanListResponse
     */
    public function describeSagWanList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagWanListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagWanSnatRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSagWanSnatResponse
     */
    public function describeSagWanSnatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagWanSnatResponse::fromMap($this->doRPCRequest('DescribeSagWanSnat', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagWanSnatRequest $request
     *
     * @return DescribeSagWanSnatResponse
     */
    public function describeSagWanSnat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagWanSnatWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSagWifiRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSagWifiResponse
     */
    public function describeSagWifiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSagWifiResponse::fromMap($this->doRPCRequest('DescribeSagWifi', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSagWifiRequest $request
     *
     * @return DescribeSagWifiResponse
     */
    public function describeSagWifi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSagWifiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartAccessGatewayAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeSmartAccessGatewayAttributeResponse
     */
    public function describeSmartAccessGatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmartAccessGatewayAttributeResponse::fromMap($this->doRPCRequest('DescribeSmartAccessGatewayAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmartAccessGatewayAttributeRequest $request
     *
     * @return DescribeSmartAccessGatewayAttributeResponse
     */
    public function describeSmartAccessGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartAccessGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartAccessGatewayClientUsersRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeSmartAccessGatewayClientUsersResponse
     */
    public function describeSmartAccessGatewayClientUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmartAccessGatewayClientUsersResponse::fromMap($this->doRPCRequest('DescribeSmartAccessGatewayClientUsers', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmartAccessGatewayClientUsersRequest $request
     *
     * @return DescribeSmartAccessGatewayClientUsersResponse
     */
    public function describeSmartAccessGatewayClientUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartAccessGatewayClientUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartAccessGatewayHaRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSmartAccessGatewayHaResponse
     */
    public function describeSmartAccessGatewayHaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmartAccessGatewayHaResponse::fromMap($this->doRPCRequest('DescribeSmartAccessGatewayHa', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmartAccessGatewayHaRequest $request
     *
     * @return DescribeSmartAccessGatewayHaResponse
     */
    public function describeSmartAccessGatewayHa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartAccessGatewayHaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartAccessGatewaysRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSmartAccessGatewaysResponse
     */
    public function describeSmartAccessGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmartAccessGatewaysResponse::fromMap($this->doRPCRequest('DescribeSmartAccessGateways', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmartAccessGatewaysRequest $request
     *
     * @return DescribeSmartAccessGatewaysResponse
     */
    public function describeSmartAccessGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartAccessGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartAccessGatewayVersionsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSmartAccessGatewayVersionsResponse
     */
    public function describeSmartAccessGatewayVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmartAccessGatewayVersionsResponse::fromMap($this->doRPCRequest('DescribeSmartAccessGatewayVersions', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmartAccessGatewayVersionsRequest $request
     *
     * @return DescribeSmartAccessGatewayVersionsResponse
     */
    public function describeSmartAccessGatewayVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartAccessGatewayVersionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSnatEntriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSnatEntriesResponse
     */
    public function describeSnatEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSnatEntriesResponse::fromMap($this->doRPCRequest('DescribeSnatEntries', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSnatEntriesRequest $request
     *
     * @return DescribeSnatEntriesResponse
     */
    public function describeSnatEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnatEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUnbindFlowLogSagsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUnbindFlowLogSagsResponse
     */
    public function describeUnbindFlowLogSagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUnbindFlowLogSagsResponse::fromMap($this->doRPCRequest('DescribeUnbindFlowLogSags', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUnbindFlowLogSagsRequest $request
     *
     * @return DescribeUnbindFlowLogSagsResponse
     */
    public function describeUnbindFlowLogSags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUnbindFlowLogSagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserFlowStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeUserFlowStatisticsResponse
     */
    public function describeUserFlowStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserFlowStatisticsResponse::fromMap($this->doRPCRequest('DescribeUserFlowStatistics', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserFlowStatisticsRequest $request
     *
     * @return DescribeUserFlowStatisticsResponse
     */
    public function describeUserFlowStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserFlowStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserOnlineClientsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserOnlineClientsResponse
     */
    public function describeUserOnlineClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserOnlineClientsResponse::fromMap($this->doRPCRequest('DescribeUserOnlineClients', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserOnlineClientsRequest $request
     *
     * @return DescribeUserOnlineClientsResponse
     */
    public function describeUserOnlineClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserOnlineClientsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserOnlineClientStatisticsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeUserOnlineClientStatisticsResponse
     */
    public function describeUserOnlineClientStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserOnlineClientStatisticsResponse::fromMap($this->doRPCRequest('DescribeUserOnlineClientStatistics', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserOnlineClientStatisticsRequest $request
     *
     * @return DescribeUserOnlineClientStatisticsResponse
     */
    public function describeUserOnlineClientStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserOnlineClientStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DetachNetworkOptimizationSagsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DetachNetworkOptimizationSagsResponse
     */
    public function detachNetworkOptimizationSagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachNetworkOptimizationSagsResponse::fromMap($this->doRPCRequest('DetachNetworkOptimizationSags', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachNetworkOptimizationSagsRequest $request
     *
     * @return DetachNetworkOptimizationSagsResponse
     */
    public function detachNetworkOptimizationSags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachNetworkOptimizationSagsWithOptions($request, $runtime);
    }

    /**
     * @param DiagnoseSmartAccessGatewayRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DiagnoseSmartAccessGatewayResponse
     */
    public function diagnoseSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DiagnoseSmartAccessGatewayResponse::fromMap($this->doRPCRequest('DiagnoseSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DiagnoseSmartAccessGatewayRequest $request
     *
     * @return DiagnoseSmartAccessGatewayResponse
     */
    public function diagnoseSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->diagnoseSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DisableSmartAccessGatewayUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DisableSmartAccessGatewayUserResponse
     */
    public function disableSmartAccessGatewayUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableSmartAccessGatewayUserResponse::fromMap($this->doRPCRequest('DisableSmartAccessGatewayUser', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableSmartAccessGatewayUserRequest $request
     *
     * @return DisableSmartAccessGatewayUserResponse
     */
    public function disableSmartAccessGatewayUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSmartAccessGatewayUserWithOptions($request, $runtime);
    }

    /**
     * @param DisableSmartAGDpiMonitorRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableSmartAGDpiMonitorResponse
     */
    public function disableSmartAGDpiMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableSmartAGDpiMonitorResponse::fromMap($this->doRPCRequest('DisableSmartAGDpiMonitor', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableSmartAGDpiMonitorRequest $request
     *
     * @return DisableSmartAGDpiMonitorResponse
     */
    public function disableSmartAGDpiMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSmartAGDpiMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DisassociateACLRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisassociateACLResponse
     */
    public function disassociateACLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisassociateACLResponse::fromMap($this->doRPCRequest('DisassociateACL', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisassociateACLRequest $request
     *
     * @return DisassociateACLResponse
     */
    public function disassociateACL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateACLWithOptions($request, $runtime);
    }

    /**
     * @param DisassociateFlowLogRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisassociateFlowLogResponse
     */
    public function disassociateFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisassociateFlowLogResponse::fromMap($this->doRPCRequest('DisassociateFlowLog', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisassociateFlowLogRequest $request
     *
     * @return DisassociateFlowLogResponse
     */
    public function disassociateFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateFlowLogWithOptions($request, $runtime);
    }

    /**
     * @param DisassociateQosRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisassociateQosResponse
     */
    public function disassociateQosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisassociateQosResponse::fromMap($this->doRPCRequest('DisassociateQos', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisassociateQosRequest $request
     *
     * @return DisassociateQosResponse
     */
    public function disassociateQos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateQosWithOptions($request, $runtime);
    }

    /**
     * @param DiscribeSmartAccessGatewayDiagnosisReportRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DiscribeSmartAccessGatewayDiagnosisReportResponse
     */
    public function discribeSmartAccessGatewayDiagnosisReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DiscribeSmartAccessGatewayDiagnosisReportResponse::fromMap($this->doRPCRequest('DiscribeSmartAccessGatewayDiagnosisReport', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DiscribeSmartAccessGatewayDiagnosisReportRequest $request
     *
     * @return DiscribeSmartAccessGatewayDiagnosisReportResponse
     */
    public function discribeSmartAccessGatewayDiagnosisReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->discribeSmartAccessGatewayDiagnosisReportWithOptions($request, $runtime);
    }

    /**
     * @param DowngradeSmartAccessGatewayRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DowngradeSmartAccessGatewayResponse
     */
    public function downgradeSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DowngradeSmartAccessGatewayResponse::fromMap($this->doRPCRequest('DowngradeSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DowngradeSmartAccessGatewayRequest $request
     *
     * @return DowngradeSmartAccessGatewayResponse
     */
    public function downgradeSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downgradeSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DowngradeSmartAccessGatewaySoftwareRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DowngradeSmartAccessGatewaySoftwareResponse
     */
    public function downgradeSmartAccessGatewaySoftwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DowngradeSmartAccessGatewaySoftwareResponse::fromMap($this->doRPCRequest('DowngradeSmartAccessGatewaySoftware', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DowngradeSmartAccessGatewaySoftwareRequest $request
     *
     * @return DowngradeSmartAccessGatewaySoftwareResponse
     */
    public function downgradeSmartAccessGatewaySoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downgradeSmartAccessGatewaySoftwareWithOptions($request, $runtime);
    }

    /**
     * @param EnableSmartAccessGatewayUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return EnableSmartAccessGatewayUserResponse
     */
    public function enableSmartAccessGatewayUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableSmartAccessGatewayUserResponse::fromMap($this->doRPCRequest('EnableSmartAccessGatewayUser', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableSmartAccessGatewayUserRequest $request
     *
     * @return EnableSmartAccessGatewayUserResponse
     */
    public function enableSmartAccessGatewayUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSmartAccessGatewayUserWithOptions($request, $runtime);
    }

    /**
     * @param EnableSmartAGDpiMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableSmartAGDpiMonitorResponse
     */
    public function enableSmartAGDpiMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableSmartAGDpiMonitorResponse::fromMap($this->doRPCRequest('EnableSmartAGDpiMonitor', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableSmartAGDpiMonitorRequest $request
     *
     * @return EnableSmartAGDpiMonitorResponse
     */
    public function enableSmartAGDpiMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSmartAGDpiMonitorWithOptions($request, $runtime);
    }

    /**
     * @param GetAclAttributeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAclAttributeResponse
     */
    public function getAclAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAclAttributeResponse::fromMap($this->doRPCRequest('GetAclAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAclAttributeRequest $request
     *
     * @return GetAclAttributeResponse
     */
    public function getAclAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAclAttributeWithOptions($request, $runtime);
    }

    /**
     * @param GetCloudConnectNetworkUseLimitRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetCloudConnectNetworkUseLimitResponse
     */
    public function getCloudConnectNetworkUseLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCloudConnectNetworkUseLimitResponse::fromMap($this->doRPCRequest('GetCloudConnectNetworkUseLimit', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCloudConnectNetworkUseLimitRequest $request
     *
     * @return GetCloudConnectNetworkUseLimitResponse
     */
    public function getCloudConnectNetworkUseLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudConnectNetworkUseLimitWithOptions($request, $runtime);
    }

    /**
     * @param GetQosAttributeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetQosAttributeResponse
     */
    public function getQosAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQosAttributeResponse::fromMap($this->doRPCRequest('GetQosAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQosAttributeRequest $request
     *
     * @return GetQosAttributeResponse
     */
    public function getQosAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQosAttributeWithOptions($request, $runtime);
    }

    /**
     * @param GetSmartAccessGatewayUseLimitRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetSmartAccessGatewayUseLimitResponse
     */
    public function getSmartAccessGatewayUseLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSmartAccessGatewayUseLimitResponse::fromMap($this->doRPCRequest('GetSmartAccessGatewayUseLimit', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSmartAccessGatewayUseLimitRequest $request
     *
     * @return GetSmartAccessGatewayUseLimitResponse
     */
    public function getSmartAccessGatewayUseLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartAccessGatewayUseLimitWithOptions($request, $runtime);
    }

    /**
     * @param GetSmartAGDpiAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSmartAGDpiAttributeResponse
     */
    public function getSmartAGDpiAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSmartAGDpiAttributeResponse::fromMap($this->doRPCRequest('GetSmartAGDpiAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSmartAGDpiAttributeRequest $request
     *
     * @return GetSmartAGDpiAttributeResponse
     */
    public function getSmartAGDpiAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartAGDpiAttributeWithOptions($request, $runtime);
    }

    /**
     * @param GrantInstanceToCbnRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GrantInstanceToCbnResponse
     */
    public function grantInstanceToCbnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantInstanceToCbnResponse::fromMap($this->doRPCRequest('GrantInstanceToCbn', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantInstanceToCbnRequest $request
     *
     * @return GrantInstanceToCbnResponse
     */
    public function grantInstanceToCbn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantInstanceToCbnWithOptions($request, $runtime);
    }

    /**
     * @param GrantSagInstanceToCcnRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GrantSagInstanceToCcnResponse
     */
    public function grantSagInstanceToCcnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantSagInstanceToCcnResponse::fromMap($this->doRPCRequest('GrantSagInstanceToCcn', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantSagInstanceToCcnRequest $request
     *
     * @return GrantSagInstanceToCcnResponse
     */
    public function grantSagInstanceToCcn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantSagInstanceToCcnWithOptions($request, $runtime);
    }

    /**
     * @param GrantSagInstanceToVbrRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GrantSagInstanceToVbrResponse
     */
    public function grantSagInstanceToVbrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantSagInstanceToVbrResponse::fromMap($this->doRPCRequest('GrantSagInstanceToVbr', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantSagInstanceToVbrRequest $request
     *
     * @return GrantSagInstanceToVbrResponse
     */
    public function grantSagInstanceToVbr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantSagInstanceToVbrWithOptions($request, $runtime);
    }

    /**
     * @param KickOutClientsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return KickOutClientsResponse
     */
    public function kickOutClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return KickOutClientsResponse::fromMap($this->doRPCRequest('KickOutClients', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param KickOutClientsRequest $request
     *
     * @return KickOutClientsResponse
     */
    public function kickOutClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kickOutClientsWithOptions($request, $runtime);
    }

    /**
     * @param ListAccessPointsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAccessPointsResponse
     */
    public function listAccessPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAccessPointsResponse::fromMap($this->doRPCRequest('ListAccessPoints', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAccessPointsRequest $request
     *
     * @return ListAccessPointsResponse
     */
    public function listAccessPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessPointsWithOptions($request, $runtime);
    }

    /**
     * @param ListDpiConfigErrorRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDpiConfigErrorResponse
     */
    public function listDpiConfigErrorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDpiConfigErrorResponse::fromMap($this->doRPCRequest('ListDpiConfigError', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDpiConfigErrorRequest $request
     *
     * @return ListDpiConfigErrorResponse
     */
    public function listDpiConfigError($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDpiConfigErrorWithOptions($request, $runtime);
    }

    /**
     * @param ListDpiGroupsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListDpiGroupsResponse
     */
    public function listDpiGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDpiGroupsResponse::fromMap($this->doRPCRequest('ListDpiGroups', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDpiGroupsRequest $request
     *
     * @return ListDpiGroupsResponse
     */
    public function listDpiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDpiGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListDpiSignaturesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDpiSignaturesResponse
     */
    public function listDpiSignaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDpiSignaturesResponse::fromMap($this->doRPCRequest('ListDpiSignatures', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDpiSignaturesRequest $request
     *
     * @return ListDpiSignaturesResponse
     */
    public function listDpiSignatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDpiSignaturesWithOptions($request, $runtime);
    }

    /**
     * @param ListEnterpriseCodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEnterpriseCodeResponse
     */
    public function listEnterpriseCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEnterpriseCodeResponse::fromMap($this->doRPCRequest('ListEnterpriseCode', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEnterpriseCodeRequest $request
     *
     * @return ListEnterpriseCodeResponse
     */
    public function listEnterpriseCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseCodeWithOptions($request, $runtime);
    }

    /**
     * @param ListSmartAGApiUnsupportedFeatureRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListSmartAGApiUnsupportedFeatureResponse
     */
    public function listSmartAGApiUnsupportedFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSmartAGApiUnsupportedFeatureResponse::fromMap($this->doRPCRequest('ListSmartAGApiUnsupportedFeature', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSmartAGApiUnsupportedFeatureRequest $request
     *
     * @return ListSmartAGApiUnsupportedFeatureResponse
     */
    public function listSmartAGApiUnsupportedFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartAGApiUnsupportedFeatureWithOptions($request, $runtime);
    }

    /**
     * @param ListSmartAGByAccessPointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSmartAGByAccessPointResponse
     */
    public function listSmartAGByAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSmartAGByAccessPointResponse::fromMap($this->doRPCRequest('ListSmartAGByAccessPoint', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSmartAGByAccessPointRequest $request
     *
     * @return ListSmartAGByAccessPointResponse
     */
    public function listSmartAGByAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartAGByAccessPointWithOptions($request, $runtime);
    }

    /**
     * @param ModifyACLRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyACLResponse
     */
    public function modifyACLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyACLResponse::fromMap($this->doRPCRequest('ModifyACL', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyACLRequest $request
     *
     * @return ModifyACLResponse
     */
    public function modifyACL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyACLWithOptions($request, $runtime);
    }

    /**
     * @param ModifyACLRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyACLRuleResponse
     */
    public function modifyACLRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyACLRuleResponse::fromMap($this->doRPCRequest('ModifyACLRule', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyACLRuleRequest $request
     *
     * @return ModifyACLRuleResponse
     */
    public function modifyACLRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyACLRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClientUserDNSRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyClientUserDNSResponse
     */
    public function modifyClientUserDNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClientUserDNSResponse::fromMap($this->doRPCRequest('ModifyClientUserDNS', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyClientUserDNSRequest $request
     *
     * @return ModifyClientUserDNSResponse
     */
    public function modifyClientUserDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClientUserDNSWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCloudConnectNetworkRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyCloudConnectNetworkResponse
     */
    public function modifyCloudConnectNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCloudConnectNetworkResponse::fromMap($this->doRPCRequest('ModifyCloudConnectNetwork', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCloudConnectNetworkRequest $request
     *
     * @return ModifyCloudConnectNetworkResponse
     */
    public function modifyCloudConnectNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudConnectNetworkWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceAutoUpgradePolicyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDeviceAutoUpgradePolicyResponse
     */
    public function modifyDeviceAutoUpgradePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDeviceAutoUpgradePolicyResponse::fromMap($this->doRPCRequest('ModifyDeviceAutoUpgradePolicy', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDeviceAutoUpgradePolicyRequest $request
     *
     * @return ModifyDeviceAutoUpgradePolicyResponse
     */
    public function modifyDeviceAutoUpgradePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceAutoUpgradePolicyWithOptions($request, $runtime);
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

        return ModifyFlowLogAttributeResponse::fromMap($this->doRPCRequest('ModifyFlowLogAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyHealthCheckRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyHealthCheckResponse
     */
    public function modifyHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHealthCheckResponse::fromMap($this->doRPCRequest('ModifyHealthCheck', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHealthCheckRequest $request
     *
     * @return ModifyHealthCheckResponse
     */
    public function modifyHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHealthCheckWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkOptimizationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyNetworkOptimizationResponse
     */
    public function modifyNetworkOptimizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNetworkOptimizationResponse::fromMap($this->doRPCRequest('ModifyNetworkOptimization', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyNetworkOptimizationRequest $request
     *
     * @return ModifyNetworkOptimizationResponse
     */
    public function modifyNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyQosRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyQosResponse
     */
    public function modifyQosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyQosResponse::fromMap($this->doRPCRequest('ModifyQos', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyQosRequest $request
     *
     * @return ModifyQosResponse
     */
    public function modifyQos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQosWithOptions($request, $runtime);
    }

    /**
     * @param ModifyQosCarRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyQosCarResponse
     */
    public function modifyQosCarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyQosCarResponse::fromMap($this->doRPCRequest('ModifyQosCar', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyQosCarRequest $request
     *
     * @return ModifyQosCarResponse
     */
    public function modifyQosCar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQosCarWithOptions($request, $runtime);
    }

    /**
     * @param ModifyQosPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyQosPolicyResponse
     */
    public function modifyQosPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyQosPolicyResponse::fromMap($this->doRPCRequest('ModifyQosPolicy', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyQosPolicyRequest $request
     *
     * @return ModifyQosPolicyResponse
     */
    public function modifyQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQosPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRouteDistributionStrategyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyRouteDistributionStrategyResponse
     */
    public function modifyRouteDistributionStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRouteDistributionStrategyResponse::fromMap($this->doRPCRequest('ModifyRouteDistributionStrategy', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyRouteDistributionStrategyRequest $request
     *
     * @return ModifyRouteDistributionStrategyResponse
     */
    public function modifyRouteDistributionStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouteDistributionStrategyWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagCidrRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifySagCidrResponse
     */
    public function modifySagCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagCidrResponse::fromMap($this->doRPCRequest('ModifySagCidr', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagCidrRequest $request
     *
     * @return ModifySagCidrResponse
     */
    public function modifySagCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagCidrWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagECRouteBackupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifySagECRouteBackupResponse
     */
    public function modifySagECRouteBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagECRouteBackupResponse::fromMap($this->doRPCRequest('ModifySagECRouteBackup', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagECRouteBackupRequest $request
     *
     * @return ModifySagECRouteBackupResponse
     */
    public function modifySagECRouteBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagECRouteBackupWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagExpressConnectInterfaceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifySagExpressConnectInterfaceResponse
     */
    public function modifySagExpressConnectInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagExpressConnectInterfaceResponse::fromMap($this->doRPCRequest('ModifySagExpressConnectInterface', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagExpressConnectInterfaceRequest $request
     *
     * @return ModifySagExpressConnectInterfaceResponse
     */
    public function modifySagExpressConnectInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagExpressConnectInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagGlobalRouteProtocolRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifySagGlobalRouteProtocolResponse
     */
    public function modifySagGlobalRouteProtocolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagGlobalRouteProtocolResponse::fromMap($this->doRPCRequest('ModifySagGlobalRouteProtocol', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagGlobalRouteProtocolRequest $request
     *
     * @return ModifySagGlobalRouteProtocolResponse
     */
    public function modifySagGlobalRouteProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagGlobalRouteProtocolWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagHaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifySagHaResponse
     */
    public function modifySagHaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagHaResponse::fromMap($this->doRPCRequest('ModifySagHa', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagHaRequest $request
     *
     * @return ModifySagHaResponse
     */
    public function modifySagHa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagHaWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagLanRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifySagLanResponse
     */
    public function modifySagLanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagLanResponse::fromMap($this->doRPCRequest('ModifySagLan', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagLanRequest $request
     *
     * @return ModifySagLanResponse
     */
    public function modifySagLan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagLanWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagManagementPortRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySagManagementPortResponse
     */
    public function modifySagManagementPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagManagementPortResponse::fromMap($this->doRPCRequest('ModifySagManagementPort', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagManagementPortRequest $request
     *
     * @return ModifySagManagementPortResponse
     */
    public function modifySagManagementPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagManagementPortWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagPortRoleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySagPortRoleResponse
     */
    public function modifySagPortRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagPortRoleResponse::fromMap($this->doRPCRequest('ModifySagPortRole', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagPortRoleRequest $request
     *
     * @return ModifySagPortRoleResponse
     */
    public function modifySagPortRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagPortRoleWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagPortRouteProtocolRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifySagPortRouteProtocolResponse
     */
    public function modifySagPortRouteProtocolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagPortRouteProtocolResponse::fromMap($this->doRPCRequest('ModifySagPortRouteProtocol', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagPortRouteProtocolRequest $request
     *
     * @return ModifySagPortRouteProtocolResponse
     */
    public function modifySagPortRouteProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagPortRouteProtocolWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagRemoteAccessRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifySagRemoteAccessResponse
     */
    public function modifySagRemoteAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagRemoteAccessResponse::fromMap($this->doRPCRequest('ModifySagRemoteAccess', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagRemoteAccessRequest $request
     *
     * @return ModifySagRemoteAccessResponse
     */
    public function modifySagRemoteAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagRemoteAccessWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagRouteProtocolBgpRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifySagRouteProtocolBgpResponse
     */
    public function modifySagRouteProtocolBgpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagRouteProtocolBgpResponse::fromMap($this->doRPCRequest('ModifySagRouteProtocolBgp', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagRouteProtocolBgpRequest $request
     *
     * @return ModifySagRouteProtocolBgpResponse
     */
    public function modifySagRouteProtocolBgp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagRouteProtocolBgpWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagRouteProtocolOspfRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifySagRouteProtocolOspfResponse
     */
    public function modifySagRouteProtocolOspfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagRouteProtocolOspfResponse::fromMap($this->doRPCRequest('ModifySagRouteProtocolOspf', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagRouteProtocolOspfRequest $request
     *
     * @return ModifySagRouteProtocolOspfResponse
     */
    public function modifySagRouteProtocolOspf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagRouteProtocolOspfWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagStaticRouteRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifySagStaticRouteResponse
     */
    public function modifySagStaticRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagStaticRouteResponse::fromMap($this->doRPCRequest('ModifySagStaticRoute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagStaticRouteRequest $request
     *
     * @return ModifySagStaticRouteResponse
     */
    public function modifySagStaticRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagStaticRouteWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagUserDnsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifySagUserDnsResponse
     */
    public function modifySagUserDnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagUserDnsResponse::fromMap($this->doRPCRequest('ModifySagUserDns', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagUserDnsRequest $request
     *
     * @return ModifySagUserDnsResponse
     */
    public function modifySagUserDns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagUserDnsWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagWanRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifySagWanResponse
     */
    public function modifySagWanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagWanResponse::fromMap($this->doRPCRequest('ModifySagWan', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagWanRequest $request
     *
     * @return ModifySagWanResponse
     */
    public function modifySagWan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagWanWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagWanSnatRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifySagWanSnatResponse
     */
    public function modifySagWanSnatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagWanSnatResponse::fromMap($this->doRPCRequest('ModifySagWanSnat', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagWanSnatRequest $request
     *
     * @return ModifySagWanSnatResponse
     */
    public function modifySagWanSnat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagWanSnatWithOptions($request, $runtime);
    }

    /**
     * @param ModifySagWifiRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifySagWifiResponse
     */
    public function modifySagWifiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySagWifiResponse::fromMap($this->doRPCRequest('ModifySagWifi', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySagWifiRequest $request
     *
     * @return ModifySagWifiResponse
     */
    public function modifySagWifi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySagWifiWithOptions($request, $runtime);
    }

    /**
     * @param ModifySmartAccessGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySmartAccessGatewayResponse
     */
    public function modifySmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySmartAccessGatewayResponse::fromMap($this->doRPCRequest('ModifySmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySmartAccessGatewayRequest $request
     *
     * @return ModifySmartAccessGatewayResponse
     */
    public function modifySmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ModifySmartAccessGatewayClientUserRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifySmartAccessGatewayClientUserResponse
     */
    public function modifySmartAccessGatewayClientUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySmartAccessGatewayClientUserResponse::fromMap($this->doRPCRequest('ModifySmartAccessGatewayClientUser', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySmartAccessGatewayClientUserRequest $request
     *
     * @return ModifySmartAccessGatewayClientUserResponse
     */
    public function modifySmartAccessGatewayClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmartAccessGatewayClientUserWithOptions($request, $runtime);
    }

    /**
     * @param ModifySmartAccessGatewayUpBandwidthRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifySmartAccessGatewayUpBandwidthResponse
     */
    public function modifySmartAccessGatewayUpBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySmartAccessGatewayUpBandwidthResponse::fromMap($this->doRPCRequest('ModifySmartAccessGatewayUpBandwidth', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySmartAccessGatewayUpBandwidthRequest $request
     *
     * @return ModifySmartAccessGatewayUpBandwidthResponse
     */
    public function modifySmartAccessGatewayUpBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmartAccessGatewayUpBandwidthWithOptions($request, $runtime);
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

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OrchestrateSagECRouteBackupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return OrchestrateSagECRouteBackupResponse
     */
    public function orchestrateSagECRouteBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OrchestrateSagECRouteBackupResponse::fromMap($this->doRPCRequest('OrchestrateSagECRouteBackup', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OrchestrateSagECRouteBackupRequest $request
     *
     * @return OrchestrateSagECRouteBackupResponse
     */
    public function orchestrateSagECRouteBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orchestrateSagECRouteBackupWithOptions($request, $runtime);
    }

    /**
     * @param RebootSmartAccessGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RebootSmartAccessGatewayResponse
     */
    public function rebootSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RebootSmartAccessGatewayResponse::fromMap($this->doRPCRequest('RebootSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RebootSmartAccessGatewayRequest $request
     *
     * @return RebootSmartAccessGatewayResponse
     */
    public function rebootSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ResetSmartAccessGatewayClientUserPasswordRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return ResetSmartAccessGatewayClientUserPasswordResponse
     */
    public function resetSmartAccessGatewayClientUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetSmartAccessGatewayClientUserPasswordResponse::fromMap($this->doRPCRequest('ResetSmartAccessGatewayClientUserPassword', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetSmartAccessGatewayClientUserPasswordRequest $request
     *
     * @return ResetSmartAccessGatewayClientUserPasswordResponse
     */
    public function resetSmartAccessGatewayClientUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSmartAccessGatewayClientUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RevokeInstanceFromCbnRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeInstanceFromCbnResponse
     */
    public function revokeInstanceFromCbnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeInstanceFromCbnResponse::fromMap($this->doRPCRequest('RevokeInstanceFromCbn', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RevokeInstanceFromCbnRequest $request
     *
     * @return RevokeInstanceFromCbnResponse
     */
    public function revokeInstanceFromCbn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeInstanceFromCbnWithOptions($request, $runtime);
    }

    /**
     * @param RevokeInstanceFromVbrRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeInstanceFromVbrResponse
     */
    public function revokeInstanceFromVbrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeInstanceFromVbrResponse::fromMap($this->doRPCRequest('RevokeInstanceFromVbr', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RevokeInstanceFromVbrRequest $request
     *
     * @return RevokeInstanceFromVbrResponse
     */
    public function revokeInstanceFromVbr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeInstanceFromVbrWithOptions($request, $runtime);
    }

    /**
     * @param RevokeSagInstanceFromCcnRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RevokeSagInstanceFromCcnResponse
     */
    public function revokeSagInstanceFromCcnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeSagInstanceFromCcnResponse::fromMap($this->doRPCRequest('RevokeSagInstanceFromCcn', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RevokeSagInstanceFromCcnRequest $request
     *
     * @return RevokeSagInstanceFromCcnResponse
     */
    public function revokeSagInstanceFromCcn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSagInstanceFromCcnWithOptions($request, $runtime);
    }

    /**
     * @param RoamClientUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RoamClientUserResponse
     */
    public function roamClientUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RoamClientUserResponse::fromMap($this->doRPCRequest('RoamClientUser', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RoamClientUserRequest $request
     *
     * @return RoamClientUserResponse
     */
    public function roamClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->roamClientUserWithOptions($request, $runtime);
    }

    /**
     * @param SetSagRouteableAddressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetSagRouteableAddressResponse
     */
    public function setSagRouteableAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetSagRouteableAddressResponse::fromMap($this->doRPCRequest('SetSagRouteableAddress', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetSagRouteableAddressRequest $request
     *
     * @return SetSagRouteableAddressResponse
     */
    public function setSagRouteableAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSagRouteableAddressWithOptions($request, $runtime);
    }

    /**
     * @param SynchronizeSmartAGWebConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SynchronizeSmartAGWebConfigResponse
     */
    public function synchronizeSmartAGWebConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SynchronizeSmartAGWebConfigResponse::fromMap($this->doRPCRequest('SynchronizeSmartAGWebConfig', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SynchronizeSmartAGWebConfigRequest $request
     *
     * @return SynchronizeSmartAGWebConfigResponse
     */
    public function synchronizeSmartAGWebConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->synchronizeSmartAGWebConfigWithOptions($request, $runtime);
    }

    /**
     * @param UnbindSerialNumberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindSerialNumberResponse
     */
    public function unbindSerialNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindSerialNumberResponse::fromMap($this->doRPCRequest('UnbindSerialNumber', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindSerialNumberRequest $request
     *
     * @return UnbindSerialNumberResponse
     */
    public function unbindSerialNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindSerialNumberWithOptions($request, $runtime);
    }

    /**
     * @param UnbindSmartAccessGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UnbindSmartAccessGatewayResponse
     */
    public function unbindSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindSmartAccessGatewayResponse::fromMap($this->doRPCRequest('UnbindSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindSmartAccessGatewayRequest $request
     *
     * @return UnbindSmartAccessGatewayResponse
     */
    public function unbindSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param UnbindVbrRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UnbindVbrResponse
     */
    public function unbindVbrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindVbrResponse::fromMap($this->doRPCRequest('UnbindVbr', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindVbrRequest $request
     *
     * @return UnbindVbrResponse
     */
    public function unbindVbr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindVbrWithOptions($request, $runtime);
    }

    /**
     * @param UnicomOrderConfirmRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnicomOrderConfirmResponse
     */
    public function unicomOrderConfirmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnicomOrderConfirmResponse::fromMap($this->doRPCRequest('UnicomOrderConfirm', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnicomOrderConfirmRequest $request
     *
     * @return UnicomOrderConfirmResponse
     */
    public function unicomOrderConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unicomOrderConfirmWithOptions($request, $runtime);
    }

    /**
     * @param UnicomSignConfirmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnicomSignConfirmResponse
     */
    public function unicomSignConfirmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnicomSignConfirmResponse::fromMap($this->doRPCRequest('UnicomSignConfirm', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnicomSignConfirmRequest $request
     *
     * @return UnicomSignConfirmResponse
     */
    public function unicomSignConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unicomSignConfirmWithOptions($request, $runtime);
    }

    /**
     * @param UnlockSmartAccessGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UnlockSmartAccessGatewayResponse
     */
    public function unlockSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnlockSmartAccessGatewayResponse::fromMap($this->doRPCRequest('UnlockSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnlockSmartAccessGatewayRequest $request
     *
     * @return UnlockSmartAccessGatewayResponse
     */
    public function unlockSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEnterpriseCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEnterpriseCodeResponse
     */
    public function updateEnterpriseCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEnterpriseCodeResponse::fromMap($this->doRPCRequest('UpdateEnterpriseCode', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEnterpriseCodeRequest $request
     *
     * @return UpdateEnterpriseCodeResponse
     */
    public function updateEnterpriseCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnterpriseCodeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmartAccessGatewayVersionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateSmartAccessGatewayVersionResponse
     */
    public function updateSmartAccessGatewayVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSmartAccessGatewayVersionResponse::fromMap($this->doRPCRequest('UpdateSmartAccessGatewayVersion', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSmartAccessGatewayVersionRequest $request
     *
     * @return UpdateSmartAccessGatewayVersionResponse
     */
    public function updateSmartAccessGatewayVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmartAccessGatewayVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmartAGAccessPointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateSmartAGAccessPointResponse
     */
    public function updateSmartAGAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSmartAGAccessPointResponse::fromMap($this->doRPCRequest('UpdateSmartAGAccessPoint', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSmartAGAccessPointRequest $request
     *
     * @return UpdateSmartAGAccessPointResponse
     */
    public function updateSmartAGAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmartAGAccessPointWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmartAGDpiAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateSmartAGDpiAttributeResponse
     */
    public function updateSmartAGDpiAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSmartAGDpiAttributeResponse::fromMap($this->doRPCRequest('UpdateSmartAGDpiAttribute', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSmartAGDpiAttributeRequest $request
     *
     * @return UpdateSmartAGDpiAttributeResponse
     */
    public function updateSmartAGDpiAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmartAGDpiAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmartAGEnterpriseCodeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateSmartAGEnterpriseCodeResponse
     */
    public function updateSmartAGEnterpriseCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSmartAGEnterpriseCodeResponse::fromMap($this->doRPCRequest('UpdateSmartAGEnterpriseCode', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSmartAGEnterpriseCodeRequest $request
     *
     * @return UpdateSmartAGEnterpriseCodeResponse
     */
    public function updateSmartAGEnterpriseCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmartAGEnterpriseCodeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeSmartAccessGatewayRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpgradeSmartAccessGatewayResponse
     */
    public function upgradeSmartAccessGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeSmartAccessGatewayResponse::fromMap($this->doRPCRequest('UpgradeSmartAccessGateway', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeSmartAccessGatewayRequest $request
     *
     * @return UpgradeSmartAccessGatewayResponse
     */
    public function upgradeSmartAccessGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeSmartAccessGatewayWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeSmartAccessGatewaySoftwareRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpgradeSmartAccessGatewaySoftwareResponse
     */
    public function upgradeSmartAccessGatewaySoftwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeSmartAccessGatewaySoftwareResponse::fromMap($this->doRPCRequest('UpgradeSmartAccessGatewaySoftware', '2018-03-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeSmartAccessGatewaySoftwareRequest $request
     *
     * @return UpgradeSmartAccessGatewaySoftwareResponse
     */
    public function upgradeSmartAccessGatewaySoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeSmartAccessGatewaySoftwareWithOptions($request, $runtime);
    }
}
