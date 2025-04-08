<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddBlackWhiteListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddBlackWhiteListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthConsumerRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthConsumerResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayDomainRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayDomainResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayServiceVersionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayServiceVersionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMockRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMockRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddSecurityGroupRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddSecurityGroupRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddSSLCertRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddSSLCertResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyTagPoliciesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyTagPoliciesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyTagPoliciesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\BindSentinelBlockFallbackDefinitionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\BindSentinelBlockFallbackDefinitionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneSentinelRuleFromAhasRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneSentinelRuleFromAhasResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateCircuitBreakerRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateCircuitBreakerRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateFlowRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateFlowRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateGatewayCircuitBreakerRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateGatewayCircuitBreakerRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateGatewayFlowRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateGatewayFlowRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateGatewayIsolationRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateGatewayIsolationRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateIsolationRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateIsolationRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateMseServiceApplicationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateMseServiceApplicationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosInstanceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosInstanceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNamespaceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneGroupShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreatePluginConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreatePluginConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreatePluginConfigShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteAuthResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteAuthResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteCircuitBreakerRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteCircuitBreakerRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteCircuitBreakerRulesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteFlowRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteFlowRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteFlowRulesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayAuthConsumerRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayAuthConsumerResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayAuthConsumerResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayAuthConsumerResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayCircuitBreakerRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayCircuitBreakerRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayDomainRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayDomainResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayFlowRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayFlowRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayIsolationRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayIsolationRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceVersionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceVersionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewaySlbRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewaySlbResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteIsolationRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteIsolationRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteIsolationRulesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosInstanceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosInstanceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeletePluginConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeletePluginConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSecurityGroupRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSecurityGroupRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSwimmingLaneRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSwimmingLaneResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\EnableHttp2Request;
use AlibabaCloud\SDK\Mse\V20190531\Models\EnableHttp2Response;
use AlibabaCloud\SDK\Mse\V20190531\Models\EnableProxyProtocolRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\EnableProxyProtocolResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportZookeeperDataRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportZookeeperDataResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\FetchLosslessRuleListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\FetchLosslessRuleListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayBlackWhiteListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayBlackWhiteListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayBlackWhiteListShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationInstanceListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationInstanceListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetAppMessageQueueRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetAppMessageQueueRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetBlackWhiteListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetBlackWhiteListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetEngineNamepaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetEngineNamepaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthConsumerDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthConsumerDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayDomainDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayDomainDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayOptionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayOptionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImportFileUrlRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImportFileUrlResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetKubernetesSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetKubernetesSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetLocalityRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetLocalityRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetLosslessRuleByAppRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetLosslessRuleByAppResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseFeatureSwitchRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseFeatureSwitchResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosHistoryConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosHistoryConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetOverviewRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetOverviewResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListenersRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListenersResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListPageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListPageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceMethodPageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceMethodPageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetTagsBySwimmingLaneGroupIdRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetTagsBySwimmingLaneGroupIdResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetZookeeperDataImportUrlRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetZookeeperDataImportUrlResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportZookeeperDataRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportZookeeperDataResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\InitializeServiceLinkRoleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\InitializeServiceLinkRoleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagsShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListCircuitBreakerRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListCircuitBreakerRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterConnectionTypesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterConnectionTypesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterTypesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterTypesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterVersionsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterVersionsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListConfigTrackRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListConfigTrackResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEngineNamespacesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEngineNamespacesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaInstancesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaInstancesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListExportZookeeperDataRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListExportZookeeperDataResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListFlowRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListFlowRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayCircuitBreakerRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayCircuitBreakerRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayFlowRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayFlowRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayIsolationRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayIsolationRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayZoneRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayZoneResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListInstanceCountRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListInstanceCountResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListIsolationRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListIsolationRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNamespacesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNamingTrackRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNamingTrackResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSentinelBlockFallbackDefinitionsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSentinelBlockFallbackDefinitionsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSentinelBlockFallbackDefinitionsShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSSLCertRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSSLCertResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZkTrackRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZkTrackResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZnodeChildrenRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZnodeChildrenResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyLosslessRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyLosslessRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\OfflineGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\OfflineGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\OrderClusterHealthCheckRiskNoticeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\OrderClusterHealthCheckRiskNoticeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\PreserveHeaderFormatRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\PreserveHeaderFormatResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\PutClusterHealthCheckTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\PutClusterHealthCheckTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryBusinessLocationsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryBusinessLocationsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDiskSpecificationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDiskSpecificationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterSpecificationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterSpecificationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayRegionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayRegionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayTypeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayTypeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryInstancesInfoRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryInstancesInfoResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryMonitorRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryMonitorResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySlbSpecRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySlbSpecResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySwimmingLaneByIdRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySwimmingLaneByIdResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryZnodeDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryZnodeDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RemoveApplicationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RemoveApplicationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RemoveAuthPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RemoveAuthPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RestartClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RestartClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RetryClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RetryClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\SelectGatewaySlbRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\SelectGatewaySlbResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAclRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAclResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAuthPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAuthPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateBlackWhiteListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateBlackWhiteListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateCircuitBreakerRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateCircuitBreakerRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterSpecRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterSpecResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateFlowRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateFlowRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceStatusRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceStatusResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerStatusRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerStatusResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayCircuitBreakerRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayCircuitBreakerRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayDomainRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayDomainResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayFlowRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayFlowRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayIsolationRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayIsolationRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayNameRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayNameResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteAuthRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteAuthResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteAuthShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteCORSRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteCORSResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteCORSShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHeaderOpRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHeaderOpResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHTTPRewriteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHTTPRewriteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRetryRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRetryResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRetryShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteTimeoutRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteTimeoutResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteTimeoutShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceCheckRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceCheckResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceCheckShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceTrafficPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceTrafficPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceTrafficPolicyShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceVersionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceVersionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewaySpecRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewaySpecResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateImageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateImageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateIsolationRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateIsolationRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateLocalityRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateLocalityRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosGrayConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosGrayConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosInstanceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosInstanceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdatePluginConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdatePluginConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdatePluginConfigShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateServiceSourceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateSSLCertRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateSSLCertResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpgradeClusterResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Mse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mse', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 新增服务鉴权规则.
     *
     * @param request - AddAuthPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAuthPolicyResponse
     *
     * @param AddAuthPolicyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddAuthPolicyResponse
     */
    public function addAuthPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->authRule) {
            @$query['AuthRule'] = $request->authRule;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->k8sNamespace) {
            @$query['K8sNamespace'] = $request->k8sNamespace;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAuthPolicy',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddAuthPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新增服务鉴权规则.
     *
     * @param request - AddAuthPolicyRequest
     *
     * @returns AddAuthPolicyResponse
     *
     * @param AddAuthPolicyRequest $request
     *
     * @return AddAuthPolicyResponse
     */
    public function addAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates authorization information for a gateway.
     *
     * @param tmpReq - AddAuthResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAuthResourceResponse
     *
     * @param AddAuthResourceRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AddAuthResourceResponse
     */
    public function addAuthResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddAuthResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authResourceHeaderList) {
            $request->authResourceHeaderListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authResourceHeaderList, 'AuthResourceHeaderList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->authId) {
            @$query['AuthId'] = $request->authId;
        }

        if (null !== $request->authResourceHeaderListShrink) {
            @$query['AuthResourceHeaderList'] = $request->authResourceHeaderListShrink;
        }

        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->ignoreCase) {
            @$query['IgnoreCase'] = $request->ignoreCase;
        }

        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAuthResource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddAuthResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddAuthResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates authorization information for a gateway.
     *
     * @param request - AddAuthResourceRequest
     *
     * @returns AddAuthResourceResponse
     *
     * @param AddAuthResourceRequest $request
     *
     * @return AddAuthResourceResponse
     */
    public function addAuthResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAuthResourceWithOptions($request, $runtime);
    }

    /**
     * Creates a blacklist or a whitelist.
     *
     * @param request - AddBlackWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBlackWhiteListResponse
     *
     * @param AddBlackWhiteListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddBlackWhiteListResponse
     */
    public function addBlackWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->isWhite) {
            @$query['IsWhite'] = $request->isWhite;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->resourceIdJsonList) {
            @$query['ResourceIdJsonList'] = $request->resourceIdJsonList;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBlackWhiteList',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddBlackWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a blacklist or a whitelist.
     *
     * @param request - AddBlackWhiteListRequest
     *
     * @returns AddBlackWhiteListResponse
     *
     * @param AddBlackWhiteListRequest $request
     *
     * @return AddBlackWhiteListResponse
     */
    public function addBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * Adds a gateway.
     *
     * @param tmpReq - AddGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayResponse
     *
     * @param AddGatewayRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return AddGatewayResponse
     */
    public function addGatewayWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddGatewayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->zoneInfo) {
            $request->zoneInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->zoneInfo, 'ZoneInfo', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clbNetworkType) {
            @$query['ClbNetworkType'] = $request->clbNetworkType;
        }

        if (null !== $request->enableHardwareAcceleration) {
            @$query['EnableHardwareAcceleration'] = $request->enableHardwareAcceleration;
        }

        if (null !== $request->enableSls) {
            @$query['EnableSls'] = $request->enableSls;
        }

        if (null !== $request->enableXtrace) {
            @$query['EnableXtrace'] = $request->enableXtrace;
        }

        if (null !== $request->enterpriseSecurityGroup) {
            @$query['EnterpriseSecurityGroup'] = $request->enterpriseSecurityGroup;
        }

        if (null !== $request->internetSlbSpec) {
            @$query['InternetSlbSpec'] = $request->internetSlbSpec;
        }

        if (null !== $request->managedEntryNetworkType) {
            @$query['ManagedEntryNetworkType'] = $request->managedEntryNetworkType;
        }

        if (null !== $request->mserVersion) {
            @$query['MserVersion'] = $request->mserVersion;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nlbNetworkType) {
            @$query['NlbNetworkType'] = $request->nlbNetworkType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->replica) {
            @$query['Replica'] = $request->replica;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->slbSpec) {
            @$query['SlbSpec'] = $request->slbSpec;
        }

        if (null !== $request->spec) {
            @$query['Spec'] = $request->spec;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vSwitchId2) {
            @$query['VSwitchId2'] = $request->vSwitchId2;
        }

        if (null !== $request->vpc) {
            @$query['Vpc'] = $request->vpc;
        }

        if (null !== $request->xtraceRatio) {
            @$query['XtraceRatio'] = $request->xtraceRatio;
        }

        if (null !== $request->zoneInfoShrink) {
            @$query['ZoneInfo'] = $request->zoneInfoShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGateway',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddGatewayResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a gateway.
     *
     * @param request - AddGatewayRequest
     *
     * @returns AddGatewayResponse
     *
     * @param AddGatewayRequest $request
     *
     * @return AddGatewayResponse
     */
    public function addGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayWithOptions($request, $runtime);
    }

    /**
     * Adds an authentication configuration for a gateway.
     *
     * @param tmpReq - AddGatewayAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayAuthResponse
     *
     * @param AddGatewayAuthRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return AddGatewayAuthResponse
     */
    public function addGatewayAuthWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddGatewayAuthShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authResourceList) {
            $request->authResourceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authResourceList, 'AuthResourceList', 'json');
        }

        if (null !== $tmpReq->externalAuthZJSON) {
            $request->externalAuthZJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalAuthZJSON, 'ExternalAuthZJSON', 'json');
        }

        if (null !== $tmpReq->scopesList) {
            $request->scopesListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scopesList, 'ScopesList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->authResourceConfig) {
            @$query['AuthResourceConfig'] = $request->authResourceConfig;
        }

        if (null !== $request->authResourceListShrink) {
            @$query['AuthResourceList'] = $request->authResourceListShrink;
        }

        if (null !== $request->authResourceMode) {
            @$query['AuthResourceMode'] = $request->authResourceMode;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientSecret) {
            @$query['ClientSecret'] = $request->clientSecret;
        }

        if (null !== $request->cookieDomain) {
            @$query['CookieDomain'] = $request->cookieDomain;
        }

        if (null !== $request->externalAuthZJSONShrink) {
            @$query['ExternalAuthZJSON'] = $request->externalAuthZJSONShrink;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->isWhite) {
            @$query['IsWhite'] = $request->isWhite;
        }

        if (null !== $request->issuer) {
            @$query['Issuer'] = $request->issuer;
        }

        if (null !== $request->jwks) {
            @$query['Jwks'] = $request->jwks;
        }

        if (null !== $request->loginUrl) {
            @$query['LoginUrl'] = $request->loginUrl;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->redirectUrl) {
            @$query['RedirectUrl'] = $request->redirectUrl;
        }

        if (null !== $request->scopesListShrink) {
            @$query['ScopesList'] = $request->scopesListShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->sub) {
            @$query['Sub'] = $request->sub;
        }

        if (null !== $request->tokenName) {
            @$query['TokenName'] = $request->tokenName;
        }

        if (null !== $request->tokenNamePrefix) {
            @$query['TokenNamePrefix'] = $request->tokenNamePrefix;
        }

        if (null !== $request->tokenPass) {
            @$query['TokenPass'] = $request->tokenPass;
        }

        if (null !== $request->tokenPosition) {
            @$query['TokenPosition'] = $request->tokenPosition;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGatewayAuth',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddGatewayAuthResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddGatewayAuthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds an authentication configuration for a gateway.
     *
     * @param request - AddGatewayAuthRequest
     *
     * @returns AddGatewayAuthResponse
     *
     * @param AddGatewayAuthRequest $request
     *
     * @return AddGatewayAuthResponse
     */
    public function addGatewayAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayAuthWithOptions($request, $runtime);
    }

    /**
     * Adds a consumer on which a gateway performs authentication operations.
     *
     * @param request - AddGatewayAuthConsumerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayAuthConsumerResponse
     *
     * @param AddGatewayAuthConsumerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddGatewayAuthConsumerResponse
     */
    public function addGatewayAuthConsumerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->encodeType) {
            @$query['EncodeType'] = $request->encodeType;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->jwks) {
            @$query['Jwks'] = $request->jwks;
        }

        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        if (null !== $request->keyValue) {
            @$query['KeyValue'] = $request->keyValue;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->tokenName) {
            @$query['TokenName'] = $request->tokenName;
        }

        if (null !== $request->tokenPass) {
            @$query['TokenPass'] = $request->tokenPass;
        }

        if (null !== $request->tokenPosition) {
            @$query['TokenPosition'] = $request->tokenPosition;
        }

        if (null !== $request->tokenPrefix) {
            @$query['TokenPrefix'] = $request->tokenPrefix;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGatewayAuthConsumer',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddGatewayAuthConsumerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a consumer on which a gateway performs authentication operations.
     *
     * @param request - AddGatewayAuthConsumerRequest
     *
     * @returns AddGatewayAuthConsumerResponse
     *
     * @param AddGatewayAuthConsumerRequest $request
     *
     * @return AddGatewayAuthConsumerResponse
     */
    public function addGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * Associates a domain name with a gateway.
     *
     * @param request - AddGatewayDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayDomainResponse
     *
     * @param AddGatewayDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddGatewayDomainResponse
     */
    public function addGatewayDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->http2) {
            @$query['Http2'] = $request->http2;
        }

        if (null !== $request->mustHttps) {
            @$query['MustHttps'] = $request->mustHttps;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->tlsMax) {
            @$query['TlsMax'] = $request->tlsMax;
        }

        if (null !== $request->tlsMin) {
            @$query['TlsMin'] = $request->tlsMin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGatewayDomain',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddGatewayDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates a domain name with a gateway.
     *
     * @param request - AddGatewayDomainRequest
     *
     * @returns AddGatewayDomainResponse
     *
     * @param AddGatewayDomainRequest $request
     *
     * @return AddGatewayDomainResponse
     */
    public function addGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * Adds a gateway route.
     *
     * @param tmpReq - AddGatewayRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayRouteResponse
     *
     * @param AddGatewayRouteRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AddGatewayRouteResponse
     */
    public function addGatewayRouteWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddGatewayRouteShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->directResponseJSON) {
            $request->directResponseJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->directResponseJSON, 'DirectResponseJSON', 'json');
        }

        if (null !== $tmpReq->fallbackServices) {
            $request->fallbackServicesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fallbackServices, 'FallbackServices', 'json');
        }

        if (null !== $tmpReq->predicates) {
            $request->predicatesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->predicates, 'Predicates', 'json');
        }

        if (null !== $tmpReq->redirectJSON) {
            $request->redirectJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->redirectJSON, 'RedirectJSON', 'json');
        }

        if (null !== $tmpReq->services) {
            $request->servicesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->services, 'Services', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->directResponseJSONShrink) {
            @$query['DirectResponseJSON'] = $request->directResponseJSONShrink;
        }

        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->domainIdListJSON) {
            @$query['DomainIdListJSON'] = $request->domainIdListJSON;
        }

        if (null !== $request->enableWaf) {
            @$query['EnableWaf'] = $request->enableWaf;
        }

        if (null !== $request->fallback) {
            @$query['Fallback'] = $request->fallback;
        }

        if (null !== $request->fallbackServicesShrink) {
            @$query['FallbackServices'] = $request->fallbackServicesShrink;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->policies) {
            @$query['Policies'] = $request->policies;
        }

        if (null !== $request->predicatesShrink) {
            @$query['Predicates'] = $request->predicatesShrink;
        }

        if (null !== $request->redirectJSONShrink) {
            @$query['RedirectJSON'] = $request->redirectJSONShrink;
        }

        if (null !== $request->routeOrder) {
            @$query['RouteOrder'] = $request->routeOrder;
        }

        if (null !== $request->routeType) {
            @$query['RouteType'] = $request->routeType;
        }

        if (null !== $request->servicesShrink) {
            @$query['Services'] = $request->servicesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGatewayRoute',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddGatewayRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a gateway route.
     *
     * @param request - AddGatewayRouteRequest
     *
     * @returns AddGatewayRouteResponse
     *
     * @param AddGatewayRouteRequest $request
     *
     * @return AddGatewayRouteResponse
     */
    public function addGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * Adds a service version.
     *
     * @param request - AddGatewayServiceVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayServiceVersionResponse
     *
     * @param AddGatewayServiceVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddGatewayServiceVersionResponse
     */
    public function addGatewayServiceVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGatewayServiceVersion',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddGatewayServiceVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a service version.
     *
     * @param request - AddGatewayServiceVersionRequest
     *
     * @returns AddGatewayServiceVersionResponse
     *
     * @param AddGatewayServiceVersionRequest $request
     *
     * @return AddGatewayServiceVersionResponse
     */
    public function addGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * Associates a Server Load Balancer (SLB) instance with a gateway.
     *
     * @param tmpReq - AddGatewaySlbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewaySlbResponse
     *
     * @param AddGatewaySlbRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return AddGatewaySlbResponse
     */
    public function addGatewaySlbWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddGatewaySlbShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->VServiceList) {
            $request->VServiceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->VServiceList, 'VServiceList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->httpPort) {
            @$query['HttpPort'] = $request->httpPort;
        }

        if (null !== $request->httpsPort) {
            @$query['HttpsPort'] = $request->httpsPort;
        }

        if (null !== $request->httpsVServerGroupId) {
            @$query['HttpsVServerGroupId'] = $request->httpsVServerGroupId;
        }

        if (null !== $request->serviceWeight) {
            @$query['ServiceWeight'] = $request->serviceWeight;
        }

        if (null !== $request->slbId) {
            @$query['SlbId'] = $request->slbId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->VServiceListShrink) {
            @$query['VServiceList'] = $request->VServiceListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGatewaySlb',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddGatewaySlbResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates a Server Load Balancer (SLB) instance with a gateway.
     *
     * @param request - AddGatewaySlbRequest
     *
     * @returns AddGatewaySlbResponse
     *
     * @param AddGatewaySlbRequest $request
     *
     * @return AddGatewaySlbResponse
     */
    public function addGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * Create a new migration task.
     *
     * @param request - AddMigrationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMigrationTaskResponse
     *
     * @param AddMigrationTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddMigrationTaskResponse
     */
    public function addMigrationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->originInstanceAddress) {
            @$query['OriginInstanceAddress'] = $request->originInstanceAddress;
        }

        if (null !== $request->originInstanceName) {
            @$query['OriginInstanceName'] = $request->originInstanceName;
        }

        if (null !== $request->originInstanceNamespace) {
            @$query['OriginInstanceNamespace'] = $request->originInstanceNamespace;
        }

        if (null !== $request->projectDesc) {
            @$query['ProjectDesc'] = $request->projectDesc;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->syncType) {
            @$query['SyncType'] = $request->syncType;
        }

        if (null !== $request->targetClusterName) {
            @$query['TargetClusterName'] = $request->targetClusterName;
        }

        if (null !== $request->targetClusterUrl) {
            @$query['TargetClusterUrl'] = $request->targetClusterUrl;
        }

        if (null !== $request->targetInstanceId) {
            @$query['TargetInstanceId'] = $request->targetInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMigrationTask',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMigrationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create a new migration task.
     *
     * @param request - AddMigrationTaskRequest
     *
     * @returns AddMigrationTaskResponse
     *
     * @param AddMigrationTaskRequest $request
     *
     * @return AddMigrationTaskResponse
     */
    public function addMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a mock rule.
     *
     * @param request - AddMockRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMockRuleResponse
     *
     * @param AddMockRuleRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddMockRuleResponse
     */
    public function addMockRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->consumerAppIds) {
            @$query['ConsumerAppIds'] = $request->consumerAppIds;
        }

        if (null !== $request->dubboMockItems) {
            @$query['DubboMockItems'] = $request->dubboMockItems;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->extraJson) {
            @$query['ExtraJson'] = $request->extraJson;
        }

        if (null !== $request->mockType) {
            @$query['MockType'] = $request->mockType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->providerAppId) {
            @$query['ProviderAppId'] = $request->providerAppId;
        }

        if (null !== $request->providerAppName) {
            @$query['ProviderAppName'] = $request->providerAppName;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->scMockItems) {
            @$query['ScMockItems'] = $request->scMockItems;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMockRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMockRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a mock rule.
     *
     * @param request - AddMockRuleRequest
     *
     * @returns AddMockRuleResponse
     *
     * @param AddMockRuleRequest $request
     *
     * @return AddMockRuleResponse
     */
    public function addMockRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMockRuleWithOptions($request, $runtime);
    }

    /**
     * Associates a certificate with a domain name of a gateway. You can specify a certificate that is hosted in Alibaba Cloud Security.
     *
     * @param request - AddSSLCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSSLCertResponse
     *
     * @param AddSSLCertRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddSSLCertResponse
     */
    public function addSSLCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSSLCert',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddSSLCertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates a certificate with a domain name of a gateway. You can specify a certificate that is hosted in Alibaba Cloud Security.
     *
     * @param request - AddSSLCertRequest
     *
     * @returns AddSSLCertResponse
     *
     * @param AddSSLCertRequest $request
     *
     * @return AddSSLCertResponse
     */
    public function addSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSSLCertWithOptions($request, $runtime);
    }

    /**
     * Creates a security group rule for a gateway.
     *
     * @param request - AddSecurityGroupRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSecurityGroupRuleResponse
     *
     * @param AddSecurityGroupRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddSecurityGroupRuleResponse
     */
    public function addSecurityGroupRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->portRange) {
            @$query['PortRange'] = $request->portRange;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSecurityGroupRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddSecurityGroupRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a security group rule for a gateway.
     *
     * @param request - AddSecurityGroupRuleRequest
     *
     * @returns AddSecurityGroupRuleResponse
     *
     * @param AddSecurityGroupRuleRequest $request
     *
     * @return AddSecurityGroupRuleResponse
     */
    public function addSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * Adds a Nacos service source.
     *
     * @param tmpReq - AddServiceSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddServiceSourceResponse
     *
     * @param AddServiceSourceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AddServiceSourceResponse
     */
    public function addServiceSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddServiceSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->groupList) {
            $request->groupListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupList, 'GroupList', 'json');
        }

        if (null !== $tmpReq->ingressOptionsRequest) {
            $request->ingressOptionsRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ingressOptionsRequest, 'IngressOptionsRequest', 'json');
        }

        if (null !== $tmpReq->pathList) {
            $request->pathListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pathList, 'PathList', 'json');
        }

        if (null !== $tmpReq->toAuthorizeSecurityGroups) {
            $request->toAuthorizeSecurityGroupsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->toAuthorizeSecurityGroups, 'ToAuthorizeSecurityGroups', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->groupListShrink) {
            @$query['GroupList'] = $request->groupListShrink;
        }

        if (null !== $request->ingressOptionsRequestShrink) {
            @$query['IngressOptionsRequest'] = $request->ingressOptionsRequestShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pathListShrink) {
            @$query['PathList'] = $request->pathListShrink;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->toAuthorizeSecurityGroupsShrink) {
            @$query['ToAuthorizeSecurityGroups'] = $request->toAuthorizeSecurityGroupsShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddServiceSource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddServiceSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a Nacos service source.
     *
     * @param request - AddServiceSourceRequest
     *
     * @returns AddServiceSourceResponse
     *
     * @param AddServiceSourceRequest $request
     *
     * @return AddServiceSourceResponse
     */
    public function addServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServiceSourceWithOptions($request, $runtime);
    }

    /**
     * Publishes a route for a gateway.
     *
     * @param request - ApplyGatewayRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyGatewayRouteResponse
     *
     * @param ApplyGatewayRouteRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApplyGatewayRouteResponse
     */
    public function applyGatewayRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyGatewayRoute',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApplyGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyGatewayRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Publishes a route for a gateway.
     *
     * @param request - ApplyGatewayRouteRequest
     *
     * @returns ApplyGatewayRouteResponse
     *
     * @param ApplyGatewayRouteRequest $request
     *
     * @return ApplyGatewayRouteResponse
     */
    public function applyGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * Modifies a tag-based routing rule.
     *
     * @param tmpReq - ApplyTagPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyTagPoliciesResponse
     *
     * @param ApplyTagPoliciesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ApplyTagPoliciesResponse
     */
    public function applyTagPoliciesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ApplyTagPoliciesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->rulesShrink) {
            @$query['Rules'] = $request->rulesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyTagPolicies',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApplyTagPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyTagPoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a tag-based routing rule.
     *
     * @param request - ApplyTagPoliciesRequest
     *
     * @returns ApplyTagPoliciesResponse
     *
     * @param ApplyTagPoliciesRequest $request
     *
     * @return ApplyTagPoliciesResponse
     */
    public function applyTagPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyTagPoliciesWithOptions($request, $runtime);
    }

    /**
     * Binds traffic protection behavior.
     *
     * @param request - BindSentinelBlockFallbackDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindSentinelBlockFallbackDefinitionResponse
     *
     * @param BindSentinelBlockFallbackDefinitionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return BindSentinelBlockFallbackDefinitionResponse
     */
    public function bindSentinelBlockFallbackDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->fallbackId) {
            @$query['FallbackId'] = $request->fallbackId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindSentinelBlockFallbackDefinition',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BindSentinelBlockFallbackDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BindSentinelBlockFallbackDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Binds traffic protection behavior.
     *
     * @param request - BindSentinelBlockFallbackDefinitionRequest
     *
     * @returns BindSentinelBlockFallbackDefinitionResponse
     *
     * @param BindSentinelBlockFallbackDefinitionRequest $request
     *
     * @return BindSentinelBlockFallbackDefinitionResponse
     */
    public function bindSentinelBlockFallbackDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindSentinelBlockFallbackDefinitionWithOptions($request, $runtime);
    }

    /**
     * Resource Transfer.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Resource Transfer.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Copy Nacos Configuration.
     *
     * @remarks
     * > This OpenAPI is not the Nacos-SDK API. For information related to the Nacos-SDK API, please refer to the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - CloneNacosConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneNacosConfigResponse
     *
     * @param CloneNacosConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloneNacosConfigResponse
     */
    public function cloneNacosConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dataIds) {
            @$query['DataIds'] = $request->dataIds;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->originNamespaceId) {
            @$query['OriginNamespaceId'] = $request->originNamespaceId;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->targetNamespaceId) {
            @$query['TargetNamespaceId'] = $request->targetNamespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloneNacosConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CloneNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloneNacosConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Copy Nacos Configuration.
     *
     * @remarks
     * > This OpenAPI is not the Nacos-SDK API. For information related to the Nacos-SDK API, please refer to the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - CloneNacosConfigRequest
     *
     * @returns CloneNacosConfigResponse
     *
     * @param CloneNacosConfigRequest $request
     *
     * @return CloneNacosConfigResponse
     */
    public function cloneNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneNacosConfigWithOptions($request, $runtime);
    }

    /**
     * Clones rules from Application High Availability Service.
     *
     * @param request - CloneSentinelRuleFromAhasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneSentinelRuleFromAhasResponse
     *
     * @param CloneSentinelRuleFromAhasRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CloneSentinelRuleFromAhasResponse
     */
    public function cloneSentinelRuleFromAhasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ahasNamespace) {
            @$query['AhasNamespace'] = $request->ahasNamespace;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->isAHASPublicRegion) {
            @$query['IsAHASPublicRegion'] = $request->isAHASPublicRegion;
        }

        if (null !== $request->mseAppName) {
            @$query['MseAppName'] = $request->mseAppName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloneSentinelRuleFromAhas',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CloneSentinelRuleFromAhasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloneSentinelRuleFromAhasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Clones rules from Application High Availability Service.
     *
     * @param request - CloneSentinelRuleFromAhasRequest
     *
     * @returns CloneSentinelRuleFromAhasResponse
     *
     * @param CloneSentinelRuleFromAhasRequest $request
     *
     * @return CloneSentinelRuleFromAhasResponse
     */
    public function cloneSentinelRuleFromAhas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneSentinelRuleFromAhasWithOptions($request, $runtime);
    }

    /**
     * Creates an application.
     *
     * @param tmpReq - CreateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->sentinelEnable) {
            @$query['SentinelEnable'] = $request->sentinelEnable;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->switchEnable) {
            @$query['SwitchEnable'] = $request->switchEnable;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplication',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an application.
     *
     * @param request - CreateApplicationRequest
     *
     * @returns CreateApplicationResponse
     *
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
     * Creates a circuit breaking rule.
     *
     * @param request - CreateCircuitBreakerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCircuitBreakerRuleResponse
     *
     * @param CreateCircuitBreakerRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCircuitBreakerRuleResponse
     */
    public function createCircuitBreakerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->halfOpenBaseAmountPerStep) {
            @$query['HalfOpenBaseAmountPerStep'] = $request->halfOpenBaseAmountPerStep;
        }

        if (null !== $request->halfOpenRecoveryStepNum) {
            @$query['HalfOpenRecoveryStepNum'] = $request->halfOpenRecoveryStepNum;
        }

        if (null !== $request->maxAllowedRtMs) {
            @$query['MaxAllowedRtMs'] = $request->maxAllowedRtMs;
        }

        if (null !== $request->minRequestAmount) {
            @$query['MinRequestAmount'] = $request->minRequestAmount;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->retryTimeoutMs) {
            @$query['RetryTimeoutMs'] = $request->retryTimeoutMs;
        }

        if (null !== $request->statIntervalMs) {
            @$query['StatIntervalMs'] = $request->statIntervalMs;
        }

        if (null !== $request->strategy) {
            @$query['Strategy'] = $request->strategy;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCircuitBreakerRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCircuitBreakerRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a circuit breaking rule.
     *
     * @param request - CreateCircuitBreakerRuleRequest
     *
     * @returns CreateCircuitBreakerRuleResponse
     *
     * @param CreateCircuitBreakerRuleRequest $request
     *
     * @return CreateCircuitBreakerRuleResponse
     */
    public function createCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * Create an MSE registration and configuration center instance.
     *
     * @remarks
     * Please ensure that you fully understand the billing method and pricing of the MSE (Microservice Engine) product before using this interface.
     *
     * @param request - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clusterSpecification) {
            @$query['ClusterSpecification'] = $request->clusterSpecification;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->clusterVersion) {
            @$query['ClusterVersion'] = $request->clusterVersion;
        }

        if (null !== $request->connectionType) {
            @$query['ConnectionType'] = $request->connectionType;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->eipEnabled) {
            @$query['EipEnabled'] = $request->eipEnabled;
        }

        if (null !== $request->instanceCount) {
            @$query['InstanceCount'] = $request->instanceCount;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->mseVersion) {
            @$query['MseVersion'] = $request->mseVersion;
        }

        if (null !== $request->netType) {
            @$query['NetType'] = $request->netType;
        }

        if (null !== $request->privateSlbSpecification) {
            @$query['PrivateSlbSpecification'] = $request->privateSlbSpecification;
        }

        if (null !== $request->pubNetworkFlow) {
            @$query['PubNetworkFlow'] = $request->pubNetworkFlow;
        }

        if (null !== $request->pubSlbSpecification) {
            @$query['PubSlbSpecification'] = $request->pubSlbSpecification;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupType) {
            @$query['SecurityGroupType'] = $request->securityGroupType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
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
            'action' => 'CreateCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create an MSE registration and configuration center instance.
     *
     * @remarks
     * Please ensure that you fully understand the billing method and pricing of the MSE (Microservice Engine) product before using this interface.
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * Creates a namespace in a Nacos instance.
     *
     * @param request - CreateEngineNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEngineNamespaceResponse
     *
     * @param CreateEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEngineNamespaceResponse
     */
    public function createEngineNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->serviceCount) {
            @$query['ServiceCount'] = $request->serviceCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEngineNamespace',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEngineNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a namespace in a Nacos instance.
     *
     * @param request - CreateEngineNamespaceRequest
     *
     * @returns CreateEngineNamespaceResponse
     *
     * @param CreateEngineNamespaceRequest $request
     *
     * @return CreateEngineNamespaceResponse
     */
    public function createEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * Creates a throttling rule.
     *
     * @param request - CreateFlowRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowRuleResponse
     *
     * @param CreateFlowRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFlowRuleResponse
     */
    public function createFlowRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->controlBehavior) {
            @$query['ControlBehavior'] = $request->controlBehavior;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->limitApp) {
            @$query['LimitApp'] = $request->limitApp;
        }

        if (null !== $request->maxQueueingTimeMs) {
            @$query['MaxQueueingTimeMs'] = $request->maxQueueingTimeMs;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFlowRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFlowRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a throttling rule.
     *
     * @param request - CreateFlowRuleRequest
     *
     * @returns CreateFlowRuleResponse
     *
     * @param CreateFlowRuleRequest $request
     *
     * @return CreateFlowRuleResponse
     */
    public function createFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowRuleWithOptions($request, $runtime);
    }

    /**
     * 创建网关路由熔断规则.
     *
     * @param request - CreateGatewayCircuitBreakerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayCircuitBreakerRuleResponse
     *
     * @param CreateGatewayCircuitBreakerRuleRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateGatewayCircuitBreakerRuleResponse
     */
    public function createGatewayCircuitBreakerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->behaviorType) {
            @$query['BehaviorType'] = $request->behaviorType;
        }

        if (null !== $request->bodyEncoding) {
            @$query['BodyEncoding'] = $request->bodyEncoding;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->maxAllowedMs) {
            @$query['MaxAllowedMs'] = $request->maxAllowedMs;
        }

        if (null !== $request->minRequestAmount) {
            @$query['MinRequestAmount'] = $request->minRequestAmount;
        }

        if (null !== $request->recoveryTimeoutSec) {
            @$query['RecoveryTimeoutSec'] = $request->recoveryTimeoutSec;
        }

        if (null !== $request->responseContentBody) {
            @$query['ResponseContentBody'] = $request->responseContentBody;
        }

        if (null !== $request->responseRedirectUrl) {
            @$query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }

        if (null !== $request->responseStatusCode) {
            @$query['ResponseStatusCode'] = $request->responseStatusCode;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        if (null !== $request->statDurationSec) {
            @$query['StatDurationSec'] = $request->statDurationSec;
        }

        if (null !== $request->strategy) {
            @$query['Strategy'] = $request->strategy;
        }

        if (null !== $request->triggerRatio) {
            @$query['TriggerRatio'] = $request->triggerRatio;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGatewayCircuitBreakerRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateGatewayCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGatewayCircuitBreakerRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建网关路由熔断规则.
     *
     * @param request - CreateGatewayCircuitBreakerRuleRequest
     *
     * @returns CreateGatewayCircuitBreakerRuleResponse
     *
     * @param CreateGatewayCircuitBreakerRuleRequest $request
     *
     * @return CreateGatewayCircuitBreakerRuleResponse
     */
    public function createGatewayCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a throttling rule for a gateway.
     *
     * @param request - CreateGatewayFlowRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayFlowRuleResponse
     *
     * @param CreateGatewayFlowRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateGatewayFlowRuleResponse
     */
    public function createGatewayFlowRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->behaviorType) {
            @$query['BehaviorType'] = $request->behaviorType;
        }

        if (null !== $request->bodyEncoding) {
            @$query['BodyEncoding'] = $request->bodyEncoding;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->responseContentBody) {
            @$query['ResponseContentBody'] = $request->responseContentBody;
        }

        if (null !== $request->responseRedirectUrl) {
            @$query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }

        if (null !== $request->responseStatusCode) {
            @$query['ResponseStatusCode'] = $request->responseStatusCode;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGatewayFlowRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateGatewayFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGatewayFlowRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a throttling rule for a gateway.
     *
     * @param request - CreateGatewayFlowRuleRequest
     *
     * @returns CreateGatewayFlowRuleResponse
     *
     * @param CreateGatewayFlowRuleRequest $request
     *
     * @return CreateGatewayFlowRuleResponse
     */
    public function createGatewayFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayFlowRuleWithOptions($request, $runtime);
    }

    /**
     * 创建网关路由隔离规则.
     *
     * @param request - CreateGatewayIsolationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayIsolationRuleResponse
     *
     * @param CreateGatewayIsolationRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateGatewayIsolationRuleResponse
     */
    public function createGatewayIsolationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->behaviorType) {
            @$query['BehaviorType'] = $request->behaviorType;
        }

        if (null !== $request->bodyEncoding) {
            @$query['BodyEncoding'] = $request->bodyEncoding;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->maxConcurrency) {
            @$query['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->responseContentBody) {
            @$query['ResponseContentBody'] = $request->responseContentBody;
        }

        if (null !== $request->responseRedirectUrl) {
            @$query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }

        if (null !== $request->responseStatusCode) {
            @$query['ResponseStatusCode'] = $request->responseStatusCode;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGatewayIsolationRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateGatewayIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGatewayIsolationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建网关路由隔离规则.
     *
     * @param request - CreateGatewayIsolationRuleRequest
     *
     * @returns CreateGatewayIsolationRuleResponse
     *
     * @param CreateGatewayIsolationRuleRequest $request
     *
     * @return CreateGatewayIsolationRuleResponse
     */
    public function createGatewayIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * 创建隔离规则.
     *
     * @param request - CreateIsolationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIsolationRuleResponse
     *
     * @param CreateIsolationRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateIsolationRuleResponse
     */
    public function createIsolationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->limitApp) {
            @$query['LimitApp'] = $request->limitApp;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIsolationRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIsolationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建隔离规则.
     *
     * @param request - CreateIsolationRuleRequest
     *
     * @returns CreateIsolationRuleResponse
     *
     * @param CreateIsolationRuleRequest $request
     *
     * @return CreateIsolationRuleResponse
     */
    public function createIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIsolationRuleWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * Creates an application.
     *
     * @deprecated openAPI CreateMseServiceApplication is deprecated, please use mse::2019-05-31::CreateApplication instead
     *
     * @param request - CreateMseServiceApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMseServiceApplicationResponse
     *
     * @param CreateMseServiceApplicationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateMseServiceApplicationResponse
     */
    public function createMseServiceApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->extraInfo) {
            @$query['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->mseVersion) {
            @$query['MseVersion'] = $request->mseVersion;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->sentinelEnable) {
            @$query['SentinelEnable'] = $request->sentinelEnable;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->switchEnable) {
            @$query['SwitchEnable'] = $request->switchEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMseServiceApplication',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateMseServiceApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMseServiceApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Creates an application.
     *
     * @deprecated openAPI CreateMseServiceApplication is deprecated, please use mse::2019-05-31::CreateApplication instead
     *
     * @param request - CreateMseServiceApplicationRequest
     *
     * @returns CreateMseServiceApplicationResponse
     *
     * @param CreateMseServiceApplicationRequest $request
     *
     * @return CreateMseServiceApplicationResponse
     */
    public function createMseServiceApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMseServiceApplicationWithOptions($request, $runtime);
    }

    /**
     * Creates a Nacos configuration.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - CreateNacosConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNacosConfigResponse
     *
     * @param CreateNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateNacosConfigResponse
     */
    public function createNacosConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->betaIps) {
            @$query['BetaIps'] = $request->betaIps;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNacosConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNacosConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Nacos configuration.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - CreateNacosConfigRequest
     *
     * @returns CreateNacosConfigResponse
     *
     * @param CreateNacosConfigRequest $request
     *
     * @return CreateNacosConfigResponse
     */
    public function createNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - CreateNacosInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNacosInstanceResponse
     *
     * @param CreateNacosInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateNacosInstanceResponse
     */
    public function createNacosInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->ephemeral) {
            @$query['Ephemeral'] = $request->ephemeral;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        $body = [];
        if (null !== $request->metadata) {
            @$body['Metadata'] = $request->metadata;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNacosInstance',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNacosInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - CreateNacosInstanceRequest
     *
     * @returns CreateNacosInstanceResponse
     *
     * @param CreateNacosInstanceRequest $request
     *
     * @return CreateNacosInstanceResponse
     */
    public function createNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a Nacos service.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - CreateNacosServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNacosServiceResponse
     *
     * @param CreateNacosServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateNacosServiceResponse
     */
    public function createNacosServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ephemeral) {
            @$query['Ephemeral'] = $request->ephemeral;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->protectThreshold) {
            @$query['ProtectThreshold'] = $request->protectThreshold;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNacosService',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNacosServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Nacos service.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - CreateNacosServiceRequest
     *
     * @returns CreateNacosServiceResponse
     *
     * @param CreateNacosServiceRequest $request
     *
     * @return CreateNacosServiceResponse
     */
    public function createNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosServiceWithOptions($request, $runtime);
    }

    /**
     * CreateNamespace.
     *
     * @param tmpReq - CreateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateNamespaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->describe) {
            @$query['Describe'] = $request->describe;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * CreateNamespace.
     *
     * @param request - CreateNamespaceRequest
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a lane for end-to-end canary release.
     *
     * @param tmpReq - CreateOrUpdateSwimmingLaneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrUpdateSwimmingLaneResponse
     *
     * @param CreateOrUpdateSwimmingLaneRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOrUpdateSwimmingLaneResponse
     */
    public function createOrUpdateSwimmingLaneWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOrUpdateSwimmingLaneShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->gatewaySwimmingLaneRouteJson) {
            $request->gatewaySwimmingLaneRouteJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->gatewaySwimmingLaneRouteJson, 'GatewaySwimmingLaneRouteJson', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->enableRules) {
            @$query['EnableRules'] = $request->enableRules;
        }

        if (null !== $request->entryRule) {
            @$query['EntryRule'] = $request->entryRule;
        }

        if (null !== $request->gatewaySwimmingLaneRouteJsonShrink) {
            @$query['GatewaySwimmingLaneRouteJson'] = $request->gatewaySwimmingLaneRouteJsonShrink;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pathIndependentPercentageEnable) {
            @$query['PathIndependentPercentageEnable'] = $request->pathIndependentPercentageEnable;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->entryRules) {
            @$body['EntryRules'] = $request->entryRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOrUpdateSwimmingLane',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateSwimmingLaneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or updates a lane for end-to-end canary release.
     *
     * @param request - CreateOrUpdateSwimmingLaneRequest
     *
     * @returns CreateOrUpdateSwimmingLaneResponse
     *
     * @param CreateOrUpdateSwimmingLaneRequest $request
     *
     * @return CreateOrUpdateSwimmingLaneResponse
     */
    public function createOrUpdateSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a lane group for end-to-end canary release.
     *
     * @param tmpReq - CreateOrUpdateSwimmingLaneGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrUpdateSwimmingLaneGroupResponse
     *
     * @param CreateOrUpdateSwimmingLaneGroupRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateOrUpdateSwimmingLaneGroupResponse
     */
    public function createOrUpdateSwimmingLaneGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOrUpdateSwimmingLaneGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->paths) {
            $request->pathsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->paths, 'Paths', 'json');
        }

        if (null !== $tmpReq->routeIds) {
            $request->routeIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->routeIds, 'RouteIds', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->canaryModel) {
            @$query['CanaryModel'] = $request->canaryModel;
        }

        if (null !== $request->dbGrayEnable) {
            @$query['DbGrayEnable'] = $request->dbGrayEnable;
        }

        if (null !== $request->entryApp) {
            @$query['EntryApp'] = $request->entryApp;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->messageQueueFilterSide) {
            @$query['MessageQueueFilterSide'] = $request->messageQueueFilterSide;
        }

        if (null !== $request->messageQueueGrayEnable) {
            @$query['MessageQueueGrayEnable'] = $request->messageQueueGrayEnable;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pathsShrink) {
            @$query['Paths'] = $request->pathsShrink;
        }

        if (null !== $request->recordCanaryDetail) {
            @$query['RecordCanaryDetail'] = $request->recordCanaryDetail;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->routeIdsShrink) {
            @$query['RouteIds'] = $request->routeIdsShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->swimVersion) {
            @$query['SwimVersion'] = $request->swimVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOrUpdateSwimmingLaneGroup',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateSwimmingLaneGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or updates a lane group for end-to-end canary release.
     *
     * @param request - CreateOrUpdateSwimmingLaneGroupRequest
     *
     * @returns CreateOrUpdateSwimmingLaneGroupResponse
     *
     * @param CreateOrUpdateSwimmingLaneGroupRequest $request
     *
     * @return CreateOrUpdateSwimmingLaneGroupResponse
     */
    public function createOrUpdateSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a plug-in configuration.
     *
     * @param tmpReq - CreatePluginConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePluginConfigResponse
     *
     * @param CreatePluginConfigRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePluginConfigResponse
     */
    public function createPluginConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePluginConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceIdList) {
            $request->resourceIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIdList, 'ResourceIdList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->configLevel) {
            @$query['ConfigLevel'] = $request->configLevel;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->resourceIdListShrink) {
            @$query['ResourceIdList'] = $request->resourceIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePluginConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePluginConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a plug-in configuration.
     *
     * @param request - CreatePluginConfigRequest
     *
     * @returns CreatePluginConfigResponse
     *
     * @param CreatePluginConfigRequest $request
     *
     * @return CreatePluginConfigResponse
     */
    public function createPluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPluginConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a znode.
     *
     * @param request - CreateZnodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateZnodeResponse
     *
     * @param CreateZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateZnodeResponse
     */
    public function createZnodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateZnode',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateZnodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a znode.
     *
     * @param request - CreateZnodeRequest
     *
     * @returns CreateZnodeResponse
     *
     * @param CreateZnodeRequest $request
     *
     * @return CreateZnodeResponse
     */
    public function createZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createZnodeWithOptions($request, $runtime);
    }

    /**
     * Deletes an authorized resource.
     *
     * @param request - DeleteAuthResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAuthResourceResponse
     *
     * @param DeleteAuthResourceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAuthResourceResponse
     */
    public function deleteAuthResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAuthResource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAuthResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAuthResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an authorized resource.
     *
     * @param request - DeleteAuthResourceRequest
     *
     * @returns DeleteAuthResourceResponse
     *
     * @param DeleteAuthResourceRequest $request
     *
     * @return DeleteAuthResourceResponse
     */
    public function deleteAuthResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthResourceWithOptions($request, $runtime);
    }

    /**
     * Deletes circuit breaking rules.
     *
     * @param tmpReq - DeleteCircuitBreakerRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCircuitBreakerRulesResponse
     *
     * @param DeleteCircuitBreakerRulesRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCircuitBreakerRulesResponse
     */
    public function deleteCircuitBreakerRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteCircuitBreakerRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->idsShrink) {
            @$query['Ids'] = $request->idsShrink;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCircuitBreakerRules',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCircuitBreakerRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCircuitBreakerRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes circuit breaking rules.
     *
     * @param request - DeleteCircuitBreakerRulesRequest
     *
     * @returns DeleteCircuitBreakerRulesResponse
     *
     * @param DeleteCircuitBreakerRulesRequest $request
     *
     * @return DeleteCircuitBreakerRulesResponse
     */
    public function deleteCircuitBreakerRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCircuitBreakerRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes a Microservices Engine (MSE) instance.
     *
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Microservices Engine (MSE) instance.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * Deletes a namespace from a Nacos instance.
     *
     * @param request - DeleteEngineNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEngineNamespaceResponse
     *
     * @param DeleteEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEngineNamespaceResponse
     */
    public function deleteEngineNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEngineNamespace',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEngineNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a namespace from a Nacos instance.
     *
     * @param request - DeleteEngineNamespaceRequest
     *
     * @returns DeleteEngineNamespaceResponse
     *
     * @param DeleteEngineNamespaceRequest $request
     *
     * @return DeleteEngineNamespaceResponse
     */
    public function deleteEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * Deletes throttling rules.
     *
     * @param tmpReq - DeleteFlowRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowRulesResponse
     *
     * @param DeleteFlowRulesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFlowRulesResponse
     */
    public function deleteFlowRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteFlowRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->idsShrink) {
            @$query['Ids'] = $request->idsShrink;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFlowRules',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFlowRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFlowRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes throttling rules.
     *
     * @param request - DeleteFlowRulesRequest
     *
     * @returns DeleteFlowRulesResponse
     *
     * @param DeleteFlowRulesRequest $request
     *
     * @return DeleteFlowRulesResponse
     */
    public function deleteFlowRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes a gateway.
     *
     * @param request - DeleteGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayResponse
     *
     * @param DeleteGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->deleteSlb) {
            @$query['DeleteSlb'] = $request->deleteSlb;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGateway',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a gateway.
     *
     * @param request - DeleteGatewayRequest
     *
     * @returns DeleteGatewayResponse
     *
     * @param DeleteGatewayRequest $request
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayWithOptions($request, $runtime);
    }

    /**
     * Deletes a consumer on which a gateway performs authentication operations.
     *
     * @param request - DeleteGatewayAuthConsumerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayAuthConsumerResponse
     *
     * @param DeleteGatewayAuthConsumerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteGatewayAuthConsumerResponse
     */
    public function deleteGatewayAuthConsumerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayAuthConsumer',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayAuthConsumerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a consumer on which a gateway performs authentication operations.
     *
     * @param request - DeleteGatewayAuthConsumerRequest
     *
     * @returns DeleteGatewayAuthConsumerResponse
     *
     * @param DeleteGatewayAuthConsumerRequest $request
     *
     * @return DeleteGatewayAuthConsumerResponse
     */
    public function deleteGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * Deletes resource permissions from the consumer on which a gateway performs authentication operations.
     *
     * @param request - DeleteGatewayAuthConsumerResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayAuthConsumerResourceResponse
     *
     * @param DeleteGatewayAuthConsumerResourceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteGatewayAuthConsumerResourceResponse
     */
    public function deleteGatewayAuthConsumerResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->idList) {
            @$query['IdList'] = $request->idList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayAuthConsumerResource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayAuthConsumerResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes resource permissions from the consumer on which a gateway performs authentication operations.
     *
     * @param request - DeleteGatewayAuthConsumerResourceRequest
     *
     * @returns DeleteGatewayAuthConsumerResourceResponse
     *
     * @param DeleteGatewayAuthConsumerResourceRequest $request
     *
     * @return DeleteGatewayAuthConsumerResourceResponse
     */
    public function deleteGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * 删除网关路由熔断规则.
     *
     * @param request - DeleteGatewayCircuitBreakerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayCircuitBreakerRuleResponse
     *
     * @param DeleteGatewayCircuitBreakerRuleRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteGatewayCircuitBreakerRuleResponse
     */
    public function deleteGatewayCircuitBreakerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayCircuitBreakerRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayCircuitBreakerRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除网关路由熔断规则.
     *
     * @param request - DeleteGatewayCircuitBreakerRuleRequest
     *
     * @returns DeleteGatewayCircuitBreakerRuleResponse
     *
     * @param DeleteGatewayCircuitBreakerRuleRequest $request
     *
     * @return DeleteGatewayCircuitBreakerRuleResponse
     */
    public function deleteGatewayCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * Disassociates a domain name from a gateway.
     *
     * @param request - DeleteGatewayDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayDomainResponse
     *
     * @param DeleteGatewayDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteGatewayDomainResponse
     */
    public function deleteGatewayDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayDomain',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disassociates a domain name from a gateway.
     *
     * @param request - DeleteGatewayDomainRequest
     *
     * @returns DeleteGatewayDomainResponse
     *
     * @param DeleteGatewayDomainRequest $request
     *
     * @return DeleteGatewayDomainResponse
     */
    public function deleteGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * 删除网关路由流控规则.
     *
     * @param request - DeleteGatewayFlowRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayFlowRuleResponse
     *
     * @param DeleteGatewayFlowRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteGatewayFlowRuleResponse
     */
    public function deleteGatewayFlowRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayFlowRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayFlowRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除网关路由流控规则.
     *
     * @param request - DeleteGatewayFlowRuleRequest
     *
     * @returns DeleteGatewayFlowRuleResponse
     *
     * @param DeleteGatewayFlowRuleRequest $request
     *
     * @return DeleteGatewayFlowRuleResponse
     */
    public function deleteGatewayFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayFlowRuleWithOptions($request, $runtime);
    }

    /**
     * 删除网关路由隔离规则.
     *
     * @param request - DeleteGatewayIsolationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayIsolationRuleResponse
     *
     * @param DeleteGatewayIsolationRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteGatewayIsolationRuleResponse
     */
    public function deleteGatewayIsolationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayIsolationRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayIsolationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除网关路由隔离规则.
     *
     * @param request - DeleteGatewayIsolationRuleRequest
     *
     * @returns DeleteGatewayIsolationRuleResponse
     *
     * @param DeleteGatewayIsolationRuleRequest $request
     *
     * @return DeleteGatewayIsolationRuleResponse
     */
    public function deleteGatewayIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a route from a gateway.
     *
     * @param request - DeleteGatewayRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayRouteResponse
     *
     * @param DeleteGatewayRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteGatewayRouteResponse
     */
    public function deleteGatewayRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayRoute',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a route from a gateway.
     *
     * @param request - DeleteGatewayRouteRequest
     *
     * @returns DeleteGatewayRouteResponse
     *
     * @param DeleteGatewayRouteRequest $request
     *
     * @return DeleteGatewayRouteResponse
     */
    public function deleteGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * Deletes a service from a gateway.
     *
     * @param request - DeleteGatewayServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayServiceResponse
     *
     * @param DeleteGatewayServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGatewayServiceResponse
     */
    public function deleteGatewayServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayService',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a service from a gateway.
     *
     * @param request - DeleteGatewayServiceRequest
     *
     * @returns DeleteGatewayServiceResponse
     *
     * @param DeleteGatewayServiceRequest $request
     *
     * @return DeleteGatewayServiceResponse
     */
    public function deleteGatewayService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayServiceWithOptions($request, $runtime);
    }

    /**
     * Deletes a service version from a gateway.
     *
     * @param request - DeleteGatewayServiceVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayServiceVersionResponse
     *
     * @param DeleteGatewayServiceVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteGatewayServiceVersionResponse
     */
    public function deleteGatewayServiceVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayServiceVersion',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewayServiceVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a service version from a gateway.
     *
     * @param request - DeleteGatewayServiceVersionRequest
     *
     * @returns DeleteGatewayServiceVersionResponse
     *
     * @param DeleteGatewayServiceVersionRequest $request
     *
     * @return DeleteGatewayServiceVersionResponse
     */
    public function deleteGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * Deletes the Server Load Balancer (SLB) instance that is associated with a gateway.
     *
     * @param request - DeleteGatewaySlbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewaySlbResponse
     *
     * @param DeleteGatewaySlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteGatewaySlbResponse
     */
    public function deleteGatewaySlbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->deleteSlb) {
            @$query['DeleteSlb'] = $request->deleteSlb;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->slbId) {
            @$query['SlbId'] = $request->slbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewaySlb',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGatewaySlbResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the Server Load Balancer (SLB) instance that is associated with a gateway.
     *
     * @param request - DeleteGatewaySlbRequest
     *
     * @returns DeleteGatewaySlbResponse
     *
     * @param DeleteGatewaySlbRequest $request
     *
     * @return DeleteGatewaySlbResponse
     */
    public function deleteGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * 删除隔离规则.
     *
     * @param tmpReq - DeleteIsolationRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIsolationRulesResponse
     *
     * @param DeleteIsolationRulesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteIsolationRulesResponse
     */
    public function deleteIsolationRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteIsolationRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->idsShrink) {
            @$query['Ids'] = $request->idsShrink;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIsolationRules',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIsolationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIsolationRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除隔离规则.
     *
     * @param request - DeleteIsolationRulesRequest
     *
     * @returns DeleteIsolationRulesResponse
     *
     * @param DeleteIsolationRulesRequest $request
     *
     * @return DeleteIsolationRulesResponse
     */
    public function deleteIsolationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIsolationRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes a migration task.
     *
     * @param request - DeleteMigrationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMigrationTaskResponse
     *
     * @param DeleteMigrationTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMigrationTaskResponse
     */
    public function deleteMigrationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMigrationTask',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMigrationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a migration task.
     *
     * @param request - DeleteMigrationTaskRequest
     *
     * @returns DeleteMigrationTaskResponse
     *
     * @param DeleteMigrationTaskRequest $request
     *
     * @return DeleteMigrationTaskResponse
     */
    public function deleteMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * Delete specified Nacos configuration.
     *
     * @remarks
     * > The current OpenAPI is not the Nacos-SDK API. For information related to the Nacos-SDK API, please refer to the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - DeleteNacosConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNacosConfigResponse
     *
     * @param DeleteNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteNacosConfigResponse
     */
    public function deleteNacosConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->beta) {
            @$query['Beta'] = $request->beta;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNacosConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNacosConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete specified Nacos configuration.
     *
     * @remarks
     * > The current OpenAPI is not the Nacos-SDK API. For information related to the Nacos-SDK API, please refer to the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - DeleteNacosConfigRequest
     *
     * @returns DeleteNacosConfigResponse
     *
     * @param DeleteNacosConfigRequest $request
     *
     * @return DeleteNacosConfigResponse
     */
    public function deleteNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosConfigWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple Nacos configurations at a time.
     *
     * @remarks
     * >  The current API operation is not provided in Nacos SDK. For more information about the Nacos-SDK API, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - DeleteNacosConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNacosConfigsResponse
     *
     * @param DeleteNacosConfigsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteNacosConfigsResponse
     */
    public function deleteNacosConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNacosConfigs',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNacosConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNacosConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes multiple Nacos configurations at a time.
     *
     * @remarks
     * >  The current API operation is not provided in Nacos SDK. For more information about the Nacos-SDK API, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - DeleteNacosConfigsRequest
     *
     * @returns DeleteNacosConfigsResponse
     *
     * @param DeleteNacosConfigsRequest $request
     *
     * @return DeleteNacosConfigsResponse
     */
    public function deleteNacosConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosConfigsWithOptions($request, $runtime);
    }

    /**
     * Deletes a persistent application instance from a Microservices Engine (MSE) Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - DeleteNacosInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNacosInstanceResponse
     *
     * @param DeleteNacosInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteNacosInstanceResponse
     */
    public function deleteNacosInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->ephemeral) {
            @$query['Ephemeral'] = $request->ephemeral;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNacosInstance',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNacosInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a persistent application instance from a Microservices Engine (MSE) Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - DeleteNacosInstanceRequest
     *
     * @returns DeleteNacosInstanceResponse
     *
     * @param DeleteNacosInstanceRequest $request
     *
     * @return DeleteNacosInstanceResponse
     */
    public function deleteNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a Nacos service.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - DeleteNacosServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNacosServiceResponse
     *
     * @param DeleteNacosServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteNacosServiceResponse
     */
    public function deleteNacosServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNacosService',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNacosServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Nacos service.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - DeleteNacosServiceRequest
     *
     * @returns DeleteNacosServiceResponse
     *
     * @param DeleteNacosServiceRequest $request
     *
     * @return DeleteNacosServiceResponse
     */
    public function deleteNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosServiceWithOptions($request, $runtime);
    }

    /**
     * 删除MSE命名空间.
     *
     * @param request - DeleteNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除MSE命名空间.
     *
     * @param request - DeleteNamespaceRequest
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * Deletes a plug-in configuration.
     *
     * @param request - DeletePluginConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePluginConfigResponse
     *
     * @param DeletePluginConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeletePluginConfigResponse
     */
    public function deletePluginConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->pluginConfigId) {
            @$query['PluginConfigId'] = $request->pluginConfigId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePluginConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePluginConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a plug-in configuration.
     *
     * @param request - DeletePluginConfigRequest
     *
     * @returns DeletePluginConfigResponse
     *
     * @param DeletePluginConfigRequest $request
     *
     * @return DeletePluginConfigResponse
     */
    public function deletePluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePluginConfigWithOptions($request, $runtime);
    }

    /**
     * Deletes a security group rule from a gateway.
     *
     * @param request - DeleteSecurityGroupRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityGroupRuleResponse
     *
     * @param DeleteSecurityGroupRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSecurityGroupRuleResponse
     */
    public function deleteSecurityGroupRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->cascadingDelete) {
            @$query['CascadingDelete'] = $request->cascadingDelete;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityGroupRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSecurityGroupRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a security group rule from a gateway.
     *
     * @param request - DeleteSecurityGroupRuleRequest
     *
     * @returns DeleteSecurityGroupRuleResponse
     *
     * @param DeleteSecurityGroupRuleRequest $request
     *
     * @return DeleteSecurityGroupRuleResponse
     */
    public function deleteSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a gateway service source.
     *
     * @param request - DeleteServiceSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceSourceResponse
     *
     * @param DeleteServiceSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteServiceSourceResponse
     */
    public function deleteServiceSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceSource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteServiceSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a gateway service source.
     *
     * @param request - DeleteServiceSourceRequest
     *
     * @returns DeleteServiceSourceResponse
     *
     * @param DeleteServiceSourceRequest $request
     *
     * @return DeleteServiceSourceResponse
     */
    public function deleteServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceSourceWithOptions($request, $runtime);
    }

    /**
     * Deletes a lane.
     *
     * @param request - DeleteSwimmingLaneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSwimmingLaneResponse
     *
     * @param DeleteSwimmingLaneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLaneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->laneId) {
            @$query['LaneId'] = $request->laneId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSwimmingLane',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSwimmingLaneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a lane.
     *
     * @param request - DeleteSwimmingLaneRequest
     *
     * @returns DeleteSwimmingLaneResponse
     *
     * @param DeleteSwimmingLaneRequest $request
     *
     * @return DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * Deletes a lane group.
     *
     * @param request - DeleteSwimmingLaneGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSwimmingLaneGroupResponse
     *
     * @param DeleteSwimmingLaneGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSwimmingLaneGroup',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSwimmingLaneGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a lane group.
     *
     * @param request - DeleteSwimmingLaneGroupRequest
     *
     * @returns DeleteSwimmingLaneGroupResponse
     *
     * @param DeleteSwimmingLaneGroupRequest $request
     *
     * @return DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a ZooKeeper node.
     *
     * @param request - DeleteZnodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteZnodeResponse
     *
     * @param DeleteZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteZnodeResponse
     */
    public function deleteZnodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteZnode',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteZnodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a ZooKeeper node.
     *
     * @param request - DeleteZnodeRequest
     *
     * @returns DeleteZnodeResponse
     *
     * @param DeleteZnodeRequest $request
     *
     * @return DeleteZnodeResponse
     */
    public function deleteZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteZnodeWithOptions($request, $runtime);
    }

    /**
     * Enables HTTP/2 for negotiation between the server and client. The modification takes effect in one to two minutes.
     *
     * @param request - EnableHttp2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableHttp2Response
     *
     * @param EnableHttp2Request $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableHttp2Response
     */
    public function enableHttp2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->enableHttp2) {
            @$query['EnableHttp2'] = $request->enableHttp2;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableHttp2',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableHttp2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableHttp2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables HTTP/2 for negotiation between the server and client. The modification takes effect in one to two minutes.
     *
     * @param request - EnableHttp2Request
     *
     * @returns EnableHttp2Response
     *
     * @param EnableHttp2Request $request
     *
     * @return EnableHttp2Response
     */
    public function enableHttp2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHttp2WithOptions($request, $runtime);
    }

    /**
     * Enables the proxy protocol. When an NLB instance is used as an ingress, you cannot obtain the real IP address of the client if you do not enable the proxy protocol. After you enable the proxy protocol, non-proxy requests are not adversely affected.
     *
     * @param request - EnableProxyProtocolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableProxyProtocolResponse
     *
     * @param EnableProxyProtocolRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableProxyProtocolResponse
     */
    public function enableProxyProtocolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->enableProxyProtocol) {
            @$query['EnableProxyProtocol'] = $request->enableProxyProtocol;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableProxyProtocol',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableProxyProtocolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableProxyProtocolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables the proxy protocol. When an NLB instance is used as an ingress, you cannot obtain the real IP address of the client if you do not enable the proxy protocol. After you enable the proxy protocol, non-proxy requests are not adversely affected.
     *
     * @param request - EnableProxyProtocolRequest
     *
     * @returns EnableProxyProtocolResponse
     *
     * @param EnableProxyProtocolRequest $request
     *
     * @return EnableProxyProtocolResponse
     */
    public function enableProxyProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableProxyProtocolWithOptions($request, $runtime);
    }

    /**
     * Exports specified Nacos configurations.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ExportNacosConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportNacosConfigResponse
     *
     * @param ExportNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportNacosConfigResponse
     */
    public function exportNacosConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->dataIds) {
            @$query['DataIds'] = $request->dataIds;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportNacosConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportNacosConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Exports specified Nacos configurations.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ExportNacosConfigRequest
     *
     * @returns ExportNacosConfigResponse
     *
     * @param ExportNacosConfigRequest $request
     *
     * @return ExportNacosConfigResponse
     */
    public function exportNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportNacosConfigWithOptions($request, $runtime);
    }

    /**
     * Initiates a task to export ZooKeeper data.
     *
     * @remarks
     * Only one task can run at a time.
     *
     * @param request - ExportZookeeperDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportZookeeperDataResponse
     *
     * @param ExportZookeeperDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ExportZookeeperDataResponse
     */
    public function exportZookeeperDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->exportType) {
            @$query['ExportType'] = $request->exportType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportZookeeperData',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportZookeeperDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Initiates a task to export ZooKeeper data.
     *
     * @remarks
     * Only one task can run at a time.
     *
     * @param request - ExportZookeeperDataRequest
     *
     * @returns ExportZookeeperDataResponse
     *
     * @param ExportZookeeperDataRequest $request
     *
     * @return ExportZookeeperDataResponse
     */
    public function exportZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * Obtains the rules for graceful start and shutdown.
     *
     * @remarks
     * You can call this operation to query the rules for graceful start and shutdown.
     *
     * @param request - FetchLosslessRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FetchLosslessRuleListResponse
     *
     * @param FetchLosslessRuleListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FetchLosslessRuleListResponse
     */
    public function fetchLosslessRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FetchLosslessRuleList',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return FetchLosslessRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FetchLosslessRuleListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the rules for graceful start and shutdown.
     *
     * @remarks
     * You can call this operation to query the rules for graceful start and shutdown.
     *
     * @param request - FetchLosslessRuleListRequest
     *
     * @returns FetchLosslessRuleListResponse
     *
     * @param FetchLosslessRuleListRequest $request
     *
     * @return FetchLosslessRuleListResponse
     */
    public function fetchLosslessRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchLosslessRuleListWithOptions($request, $runtime);
    }

    /**
     * Queries a list of blacklists and whitelists of a gateway.
     *
     * @param tmpReq - GatewayBlackWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GatewayBlackWhiteListResponse
     *
     * @param GatewayBlackWhiteListRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return GatewayBlackWhiteListResponse
     */
    public function gatewayBlackWhiteListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GatewayBlackWhiteListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterParams) {
            $request->filterParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->descSort) {
            @$query['DescSort'] = $request->descSort;
        }

        if (null !== $request->filterParamsShrink) {
            @$query['FilterParams'] = $request->filterParamsShrink;
        }

        if (null !== $request->orderItem) {
            @$query['OrderItem'] = $request->orderItem;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GatewayBlackWhiteList',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GatewayBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GatewayBlackWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of blacklists and whitelists of a gateway.
     *
     * @param request - GatewayBlackWhiteListRequest
     *
     * @returns GatewayBlackWhiteListResponse
     *
     * @param GatewayBlackWhiteListRequest $request
     *
     * @return GatewayBlackWhiteListResponse
     */
    public function gatewayBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->gatewayBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * Queries information about canary release for messaging of an application.
     *
     * @param request - GetAppMessageQueueRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppMessageQueueRouteResponse
     *
     * @param GetAppMessageQueueRouteRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAppMessageQueueRouteResponse
     */
    public function getAppMessageQueueRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppMessageQueueRoute',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAppMessageQueueRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAppMessageQueueRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about canary release for messaging of an application.
     *
     * @param request - GetAppMessageQueueRouteRequest
     *
     * @returns GetAppMessageQueueRouteResponse
     *
     * @param GetAppMessageQueueRouteRequest $request
     *
     * @return GetAppMessageQueueRouteResponse
     */
    public function getAppMessageQueueRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppMessageQueueRouteWithOptions($request, $runtime);
    }

    /**
     * Queries the list of microservice application instances.
     *
     * @param request - GetApplicationInstanceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationInstanceListResponse
     *
     * @param GetApplicationInstanceListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetApplicationInstanceListResponse
     */
    public function getApplicationInstanceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplicationInstanceList',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApplicationInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationInstanceListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of microservice application instances.
     *
     * @param request - GetApplicationInstanceListRequest
     *
     * @returns GetApplicationInstanceListResponse
     *
     * @param GetApplicationInstanceListRequest $request
     *
     * @return GetApplicationInstanceListResponse
     */
    public function getApplicationInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationInstanceListWithOptions($request, $runtime);
    }

    /**
     * Obtains the list of applications.
     *
     * @param tmpReq - GetApplicationListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationListResponse
     *
     * @param GetApplicationListRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GetApplicationListResponse
     */
    public function getApplicationListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetApplicationListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->sentinelEnable) {
            @$query['SentinelEnable'] = $request->sentinelEnable;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->switchEnable) {
            @$query['SwitchEnable'] = $request->switchEnable;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplicationList',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApplicationListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the list of applications.
     *
     * @param request - GetApplicationListRequest
     *
     * @returns GetApplicationListResponse
     *
     * @param GetApplicationListRequest $request
     *
     * @return GetApplicationListResponse
     */
    public function getApplicationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationListWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * Queries the blacklist or whitelist of a gateway.
     *
     * @deprecated openAPI GetBlackWhiteList is deprecated, please use mse::2019-05-31::GatewayBlackWhiteList instead
     *
     * @param request - GetBlackWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBlackWhiteListResponse
     *
     * @param GetBlackWhiteListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBlackWhiteListResponse
     */
    public function getBlackWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->isWhite) {
            @$query['IsWhite'] = $request->isWhite;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBlackWhiteList',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBlackWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the blacklist or whitelist of a gateway.
     *
     * @deprecated openAPI GetBlackWhiteList is deprecated, please use mse::2019-05-31::GatewayBlackWhiteList instead
     *
     * @param request - GetBlackWhiteListRequest
     *
     * @returns GetBlackWhiteListResponse
     *
     * @param GetBlackWhiteListRequest $request
     *
     * @return GetBlackWhiteListResponse
     */
    public function getBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * Queries the namespaces of a Nacos instance.
     *
     * @param request - GetEngineNamepaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEngineNamepaceResponse
     *
     * @param GetEngineNamepaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEngineNamepaceResponse
     */
    public function getEngineNamepaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEngineNamepace',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetEngineNamepaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEngineNamepaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the namespaces of a Nacos instance.
     *
     * @param request - GetEngineNamepaceRequest
     *
     * @returns GetEngineNamepaceResponse
     *
     * @param GetEngineNamepaceRequest $request
     *
     * @return GetEngineNamepaceResponse
     */
    public function getEngineNamepace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEngineNamepaceWithOptions($request, $runtime);
    }

    /**
     * Obtains the basic information about a gateway, such as the virtual private cloud (VPC) and vSwitch to which the gateway belongs.
     *
     * @param request - GetGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayResponse
     *
     * @param GetGatewayRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetGatewayResponse
     */
    public function getGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGateway',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGatewayResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the basic information about a gateway, such as the virtual private cloud (VPC) and vSwitch to which the gateway belongs.
     *
     * @param request - GetGatewayRequest
     *
     * @returns GetGatewayResponse
     *
     * @param GetGatewayRequest $request
     *
     * @return GetGatewayResponse
     */
    public function getGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the consumer on which a gateway performs authentication operations.
     *
     * @param request - GetGatewayAuthConsumerDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayAuthConsumerDetailResponse
     *
     * @param GetGatewayAuthConsumerDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetGatewayAuthConsumerDetailResponse
     */
    public function getGatewayAuthConsumerDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayAuthConsumerDetail',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGatewayAuthConsumerDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGatewayAuthConsumerDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of the consumer on which a gateway performs authentication operations.
     *
     * @param request - GetGatewayAuthConsumerDetailRequest
     *
     * @returns GetGatewayAuthConsumerDetailResponse
     *
     * @param GetGatewayAuthConsumerDetailRequest $request
     *
     * @return GetGatewayAuthConsumerDetailResponse
     */
    public function getGatewayAuthConsumerDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayAuthConsumerDetailWithOptions($request, $runtime);
    }

    /**
     * 查询网关认证详情.
     *
     * @param request - GetGatewayAuthDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayAuthDetailResponse
     *
     * @param GetGatewayAuthDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetGatewayAuthDetailResponse
     */
    public function getGatewayAuthDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayAuthDetail',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGatewayAuthDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGatewayAuthDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询网关认证详情.
     *
     * @param request - GetGatewayAuthDetailRequest
     *
     * @returns GetGatewayAuthDetailResponse
     *
     * @param GetGatewayAuthDetailRequest $request
     *
     * @return GetGatewayAuthDetailResponse
     */
    public function getGatewayAuthDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayAuthDetailWithOptions($request, $runtime);
    }

    /**
     * 获取网关全局配置.
     *
     * @param request - GetGatewayConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayConfigResponse
     *
     * @param GetGatewayConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetGatewayConfigResponse
     */
    public function getGatewayConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGatewayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGatewayConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取网关全局配置.
     *
     * @param request - GetGatewayConfigRequest
     *
     * @returns GetGatewayConfigResponse
     *
     * @param GetGatewayConfigRequest $request
     *
     * @return GetGatewayConfigResponse
     */
    public function getGatewayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a domain name associated with a gateway.
     *
     * @param request - GetGatewayDomainDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayDomainDetailResponse
     *
     * @param GetGatewayDomainDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetGatewayDomainDetailResponse
     */
    public function getGatewayDomainDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayDomainDetail',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGatewayDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGatewayDomainDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a domain name associated with a gateway.
     *
     * @param request - GetGatewayDomainDetailRequest
     *
     * @returns GetGatewayDomainDetailResponse
     *
     * @param GetGatewayDomainDetailRequest $request
     *
     * @return GetGatewayDomainDetailResponse
     */
    public function getGatewayDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayDomainDetailWithOptions($request, $runtime);
    }

    /**
     * Obtains the global parameters of a gateway.
     *
     * @param request - GetGatewayOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayOptionResponse
     *
     * @param GetGatewayOptionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetGatewayOptionResponse
     */
    public function getGatewayOptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayOption',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGatewayOptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGatewayOptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the global parameters of a gateway.
     *
     * @param request - GetGatewayOptionRequest
     *
     * @returns GetGatewayOptionResponse
     *
     * @param GetGatewayOptionRequest $request
     *
     * @return GetGatewayOptionResponse
     */
    public function getGatewayOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayOptionWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a route for a gateway.
     *
     * @param request - GetGatewayRouteDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayRouteDetailResponse
     *
     * @param GetGatewayRouteDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetGatewayRouteDetailResponse
     */
    public function getGatewayRouteDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayRouteDetail',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGatewayRouteDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGatewayRouteDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a route for a gateway.
     *
     * @param request - GetGatewayRouteDetailRequest
     *
     * @returns GetGatewayRouteDetailResponse
     *
     * @param GetGatewayRouteDetailRequest $request
     *
     * @return GetGatewayRouteDetailResponse
     */
    public function getGatewayRouteDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayRouteDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a service.
     *
     * @param request - GetGatewayServiceDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayServiceDetailResponse
     *
     * @param GetGatewayServiceDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetGatewayServiceDetailResponse
     */
    public function getGatewayServiceDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayServiceDetail',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGatewayServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGatewayServiceDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a service.
     *
     * @param request - GetGatewayServiceDetailRequest
     *
     * @returns GetGatewayServiceDetailResponse
     *
     * @param GetGatewayServiceDetailRequest $request
     *
     * @return GetGatewayServiceDetailResponse
     */
    public function getGatewayServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayServiceDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a Container Service for Kubernetes (ACK) cluster for which Microservices Governance is enabled.
     *
     * @param request - GetGovernanceKubernetesClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGovernanceKubernetesClusterResponse
     *
     * @param GetGovernanceKubernetesClusterRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetGovernanceKubernetesClusterResponse
     */
    public function getGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGovernanceKubernetesCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGovernanceKubernetesClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a Container Service for Kubernetes (ACK) cluster for which Microservices Governance is enabled.
     *
     * @param request - GetGovernanceKubernetesClusterRequest
     *
     * @returns GetGovernanceKubernetesClusterResponse
     *
     * @param GetGovernanceKubernetesClusterRequest $request
     *
     * @return GetGovernanceKubernetesClusterResponse
     */
    public function getGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * Queries the maximum version number to which the current version can be upgraded.
     *
     * @param request - GetImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageResponse
     *
     * @param GetImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->versionCode) {
            @$query['VersionCode'] = $request->versionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImage',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the maximum version number to which the current version can be upgraded.
     *
     * @param request - GetImageRequest
     *
     * @returns GetImageResponse
     *
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * Obtains the URL that is used to upload a configuration file when you import the configuration file into a Microservices Engine (MSE) Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).\\n
     *
     * @param request - GetImportFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImportFileUrlResponse
     *
     * @param GetImportFileUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetImportFileUrlResponse
     */
    public function getImportFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImportFileUrl',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetImportFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetImportFileUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the URL that is used to upload a configuration file when you import the configuration file into a Microservices Engine (MSE) Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).\\n
     *
     * @param request - GetImportFileUrlRequest
     *
     * @returns GetImportFileUrlResponse
     *
     * @param GetImportFileUrlRequest $request
     *
     * @return GetImportFileUrlResponse
     */
    public function getImportFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImportFileUrlWithOptions($request, $runtime);
    }

    /**
     * Obtains sources of all Container Service for Kubernetes (ACK) services in a gateway.
     *
     * @param request - GetKubernetesSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKubernetesSourceResponse
     *
     * @param GetKubernetesSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetKubernetesSourceResponse
     */
    public function getKubernetesSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->isAll) {
            @$query['IsAll'] = $request->isAll;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKubernetesSource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetKubernetesSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKubernetesSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains sources of all Container Service for Kubernetes (ACK) services in a gateway.
     *
     * @param request - GetKubernetesSourceRequest
     *
     * @returns GetKubernetesSourceResponse
     *
     * @param GetKubernetesSourceRequest $request
     *
     * @return GetKubernetesSourceResponse
     */
    public function getKubernetesSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKubernetesSourceWithOptions($request, $runtime);
    }

    /**
     * 获取同AZ路由规则.
     *
     * @param request - GetLocalityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLocalityRuleResponse
     *
     * @param GetLocalityRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLocalityRuleResponse
     */
    public function getLocalityRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLocalityRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLocalityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLocalityRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取同AZ路由规则.
     *
     * @param request - GetLocalityRuleRequest
     *
     * @returns GetLocalityRuleResponse
     *
     * @param GetLocalityRuleRequest $request
     *
     * @return GetLocalityRuleResponse
     */
    public function getLocalityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLocalityRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the rules for graceful start and shutdown of an application.
     *
     * @remarks
     * You can call this operation to query the rules for graceful start and shutdown of an application.
     * You can query the rules for graceful start and shutdown of an application preferentially by using the AppId parameter.
     * If the AppId parameter is left empty, you can use the RegionId, Namespace, and AppName parameters to query the rules for graceful start and shutdown of an application.
     *
     * @param request - GetLosslessRuleByAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLosslessRuleByAppResponse
     *
     * @param GetLosslessRuleByAppRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetLosslessRuleByAppResponse
     */
    public function getLosslessRuleByAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLosslessRuleByApp',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLosslessRuleByAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLosslessRuleByAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the rules for graceful start and shutdown of an application.
     *
     * @remarks
     * You can call this operation to query the rules for graceful start and shutdown of an application.
     * You can query the rules for graceful start and shutdown of an application preferentially by using the AppId parameter.
     * If the AppId parameter is left empty, you can use the RegionId, Namespace, and AppName parameters to query the rules for graceful start and shutdown of an application.
     *
     * @param request - GetLosslessRuleByAppRequest
     *
     * @returns GetLosslessRuleByAppResponse
     *
     * @param GetLosslessRuleByAppRequest $request
     *
     * @return GetLosslessRuleByAppResponse
     */
    public function getLosslessRuleByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLosslessRuleByAppWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the MSE feature switch.
     *
     * @param request - GetMseFeatureSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMseFeatureSwitchResponse
     *
     * @param GetMseFeatureSwitchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMseFeatureSwitchResponse
     */
    public function getMseFeatureSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMseFeatureSwitch',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMseFeatureSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMseFeatureSwitchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about the MSE feature switch.
     *
     * @param request - GetMseFeatureSwitchRequest
     *
     * @returns GetMseFeatureSwitchResponse
     *
     * @param GetMseFeatureSwitchRequest $request
     *
     * @return GetMseFeatureSwitchResponse
     */
    public function getMseFeatureSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMseFeatureSwitchWithOptions($request, $runtime);
    }

    /**
     * Queries the existing Microservices Engine (MSE) Nacos instances that are service sources of a gateway.
     *
     * @param request - GetMseSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMseSourceResponse
     *
     * @param GetMseSourceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetMseSourceResponse
     */
    public function getMseSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMseSource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMseSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMseSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the existing Microservices Engine (MSE) Nacos instances that are service sources of a gateway.
     *
     * @param request - GetMseSourceRequest
     *
     * @returns GetMseSourceResponse
     *
     * @param GetMseSourceRequest $request
     *
     * @return GetMseSourceResponse
     */
    public function getMseSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMseSourceWithOptions($request, $runtime);
    }

    /**
     * Get Nacos Configuration.
     *
     * @remarks
     * > This OpenAPI is not the Nacos-SDK API. For information related to the Nacos-SDK API, please refer to the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - GetNacosConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNacosConfigResponse
     *
     * @param GetNacosConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNacosConfigResponse
     */
    public function getNacosConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->beta) {
            @$query['Beta'] = $request->beta;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNacosConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNacosConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Get Nacos Configuration.
     *
     * @remarks
     * > This OpenAPI is not the Nacos-SDK API. For information related to the Nacos-SDK API, please refer to the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - GetNacosConfigRequest
     *
     * @returns GetNacosConfigResponse
     *
     * @param GetNacosConfigRequest $request
     *
     * @return GetNacosConfigResponse
     */
    public function getNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacosConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the historical details of Nacos configuration changes.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - GetNacosHistoryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNacosHistoryConfigResponse
     *
     * @param GetNacosHistoryConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetNacosHistoryConfigResponse
     */
    public function getNacosHistoryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->nid) {
            @$query['Nid'] = $request->nid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNacosHistoryConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNacosHistoryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNacosHistoryConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the historical details of Nacos configuration changes.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - GetNacosHistoryConfigRequest
     *
     * @returns GetNacosHistoryConfigResponse
     *
     * @param GetNacosHistoryConfigRequest $request
     *
     * @return GetNacosHistoryConfigResponse
     */
    public function getNacosHistoryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacosHistoryConfigWithOptions($request, $runtime);
    }

    /**
     * Queries information about service governance.
     *
     * @remarks
     * You can call this operation to query overview information about service governance.
     *
     * @param request - GetOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOverviewResponse
     *
     * @param GetOverviewRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetOverviewResponse
     */
    public function getOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOverview',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOverviewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about service governance.
     *
     * @remarks
     * You can call this operation to query overview information about service governance.
     *
     * @param request - GetOverviewRequest
     *
     * @returns GetOverviewResponse
     *
     * @param GetOverviewRequest $request
     *
     * @return GetOverviewResponse
     */
    public function getOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOverviewWithOptions($request, $runtime);
    }

    /**
     * Obtains plug-in configurations.
     *
     * @param request - GetPluginConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPluginConfigResponse
     *
     * @param GetPluginConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPluginConfigResponse
     */
    public function getPluginConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPluginConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPluginConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains plug-in configurations.
     *
     * @param request - GetPluginConfigRequest
     *
     * @returns GetPluginConfigResponse
     *
     * @param GetPluginConfigRequest $request
     *
     * @return GetPluginConfigResponse
     */
    public function getPluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPluginConfigWithOptions($request, $runtime);
    }

    /**
     * Obtains plug-ins.
     *
     * @param request - GetPluginsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPluginsResponse
     *
     * @param GetPluginsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetPluginsResponse
     */
    public function getPluginsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->enableOnly) {
            @$query['EnableOnly'] = $request->enableOnly;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPlugins',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPluginsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains plug-ins.
     *
     * @param request - GetPluginsRequest
     *
     * @returns GetPluginsResponse
     *
     * @param GetPluginsRequest $request
     *
     * @return GetPluginsResponse
     */
    public function getPlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPluginsWithOptions($request, $runtime);
    }

    /**
     * Queries the services of an application.
     *
     * @param request - GetServiceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceListResponse
     *
     * @param GetServiceListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetServiceListResponse
     */
    public function getServiceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceList',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the services of an application.
     *
     * @param request - GetServiceListRequest
     *
     * @returns GetServiceListResponse
     *
     * @param GetServiceListRequest $request
     *
     * @return GetServiceListResponse
     */
    public function getServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListWithOptions($request, $runtime);
    }

    /**
     * Queries the version of a microservices application.
     *
     * @param request - GetServiceListPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceListPageResponse
     *
     * @param GetServiceListPageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceListPageResponse
     */
    public function getServiceListPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceListPage',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceListPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceListPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the version of a microservices application.
     *
     * @param request - GetServiceListPageRequest
     *
     * @returns GetServiceListPageResponse
     *
     * @param GetServiceListPageRequest $request
     *
     * @return GetServiceListPageResponse
     */
    public function getServiceListPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListPageWithOptions($request, $runtime);
    }

    /**
     * Queries the list of listeners for the destination service.
     *
     * @param request - GetServiceListenersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceListenersResponse
     *
     * @param GetServiceListenersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetServiceListenersResponse
     */
    public function getServiceListenersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->hasIpCount) {
            @$query['HasIpCount'] = $request->hasIpCount;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceListeners',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceListenersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceListenersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of listeners for the destination service.
     *
     * @param request - GetServiceListenersRequest
     *
     * @returns GetServiceListenersResponse
     *
     * @param GetServiceListenersRequest $request
     *
     * @return GetServiceListenersResponse
     */
    public function getServiceListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListenersWithOptions($request, $runtime);
    }

    /**
     * 获取服务接口列表.
     *
     * @param request - GetServiceMethodPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceMethodPageResponse
     *
     * @param GetServiceMethodPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceMethodPageResponse
     */
    public function getServiceMethodPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->methodController) {
            @$query['MethodController'] = $request->methodController;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->serviceGroup) {
            @$query['ServiceGroup'] = $request->serviceGroup;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceMethodPage',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceMethodPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceMethodPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取服务接口列表.
     *
     * @param request - GetServiceMethodPageRequest
     *
     * @returns GetServiceMethodPageResponse
     *
     * @param GetServiceMethodPageRequest $request
     *
     * @return GetServiceMethodPageResponse
     */
    public function getServiceMethodPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceMethodPageWithOptions($request, $runtime);
    }

    /**
     * Obtains all tags in the current lane group.
     *
     * @param request - GetTagsBySwimmingLaneGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTagsBySwimmingLaneGroupIdResponse
     *
     * @param GetTagsBySwimmingLaneGroupIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetTagsBySwimmingLaneGroupIdResponse
     */
    public function getTagsBySwimmingLaneGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTagsBySwimmingLaneGroupId',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTagsBySwimmingLaneGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTagsBySwimmingLaneGroupIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains all tags in the current lane group.
     *
     * @param request - GetTagsBySwimmingLaneGroupIdRequest
     *
     * @returns GetTagsBySwimmingLaneGroupIdResponse
     *
     * @param GetTagsBySwimmingLaneGroupIdRequest $request
     *
     * @return GetTagsBySwimmingLaneGroupIdResponse
     */
    public function getTagsBySwimmingLaneGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagsBySwimmingLaneGroupIdWithOptions($request, $runtime);
    }

    /**
     * mse-200-105.
     *
     * @param request - GetZookeeperDataImportUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetZookeeperDataImportUrlResponse
     *
     * @param GetZookeeperDataImportUrlRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetZookeeperDataImportUrlResponse
     */
    public function getZookeeperDataImportUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetZookeeperDataImportUrl',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetZookeeperDataImportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetZookeeperDataImportUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * mse-200-105.
     *
     * @param request - GetZookeeperDataImportUrlRequest
     *
     * @returns GetZookeeperDataImportUrlResponse
     *
     * @param GetZookeeperDataImportUrlRequest $request
     *
     * @return GetZookeeperDataImportUrlResponse
     */
    public function getZookeeperDataImportUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getZookeeperDataImportUrlWithOptions($request, $runtime);
    }

    /**
     * Imports Nacos configurations as a file.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ImportNacosConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportNacosConfigResponse
     *
     * @param ImportNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportNacosConfigResponse
     */
    public function importNacosConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportNacosConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ImportNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportNacosConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Imports Nacos configurations as a file.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ImportNacosConfigRequest
     *
     * @returns ImportNacosConfigResponse
     *
     * @param ImportNacosConfigRequest $request
     *
     * @return ImportNacosConfigResponse
     */
    public function importNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importNacosConfigWithOptions($request, $runtime);
    }

    /**
     * Imports services to a gateway.
     *
     * @param tmpReq - ImportServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportServicesResponse
     *
     * @param ImportServicesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ImportServicesResponse
     */
    public function importServicesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportServicesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serviceList) {
            $request->serviceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serviceList, 'ServiceList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->fcAlias) {
            @$query['FcAlias'] = $request->fcAlias;
        }

        if (null !== $request->fcServiceName) {
            @$query['FcServiceName'] = $request->fcServiceName;
        }

        if (null !== $request->fcVersion) {
            @$query['FcVersion'] = $request->fcVersion;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->serviceListShrink) {
            @$query['ServiceList'] = $request->serviceListShrink;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->tlsSetting) {
            @$query['TlsSetting'] = $request->tlsSetting;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportServices',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ImportServicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportServicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Imports services to a gateway.
     *
     * @param request - ImportServicesRequest
     *
     * @returns ImportServicesResponse
     *
     * @param ImportServicesRequest $request
     *
     * @return ImportServicesResponse
     */
    public function importServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importServicesWithOptions($request, $runtime);
    }

    /**
     * Initiates a task to import data from a destination URL to a Microservices Engine (MSE) ZooKeeper instance.
     *
     * @remarks
     * *Danger** This operation clears existing data. Exercise caution when you call this API operation.
     *
     * @param request - ImportZookeeperDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportZookeeperDataResponse
     *
     * @param ImportZookeeperDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportZookeeperDataResponse
     */
    public function importZookeeperDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportZookeeperData',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ImportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportZookeeperDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Initiates a task to import data from a destination URL to a Microservices Engine (MSE) ZooKeeper instance.
     *
     * @remarks
     * *Danger** This operation clears existing data. Exercise caution when you call this API operation.
     *
     * @param request - ImportZookeeperDataRequest
     *
     * @returns ImportZookeeperDataResponse
     *
     * @param ImportZookeeperDataRequest $request
     *
     * @return ImportZookeeperDataResponse
     */
    public function importZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * 用户授权mseSLR.
     *
     * @param request - InitializeServiceLinkRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeServiceLinkRoleResponse
     *
     * @param InitializeServiceLinkRoleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return InitializeServiceLinkRoleResponse
     */
    public function initializeServiceLinkRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitializeServiceLinkRole',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InitializeServiceLinkRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InitializeServiceLinkRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 用户授权mseSLR.
     *
     * @param request - InitializeServiceLinkRoleRequest
     *
     * @returns InitializeServiceLinkRoleResponse
     *
     * @param InitializeServiceLinkRoleRequest $request
     *
     * @return InitializeServiceLinkRoleResponse
     */
    public function initializeServiceLinkRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeServiceLinkRoleWithOptions($request, $runtime);
    }

    /**
     * Queries application instances that are registered with a Microservices Engine (MSE) Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListAnsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnsInstancesResponse
     *
     * @param ListAnsInstancesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAnsInstancesResponse
     */
    public function listAnsInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnsInstances',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAnsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAnsInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries application instances that are registered with a Microservices Engine (MSE) Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListAnsInstancesRequest
     *
     * @returns ListAnsInstancesResponse
     *
     * @param ListAnsInstancesRequest $request
     *
     * @return ListAnsInstancesResponse
     */
    public function listAnsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the clusters of a Nacos service.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListAnsServiceClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnsServiceClustersResponse
     *
     * @param ListAnsServiceClustersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAnsServiceClustersResponse
     */
    public function listAnsServiceClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnsServiceClusters',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAnsServiceClustersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAnsServiceClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the clusters of a Nacos service.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListAnsServiceClustersRequest
     *
     * @returns ListAnsServiceClustersResponse
     *
     * @param ListAnsServiceClustersRequest $request
     *
     * @return ListAnsServiceClustersResponse
     */
    public function listAnsServiceClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsServiceClustersWithOptions($request, $runtime);
    }

    /**
     * Queries Nacos services.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListAnsServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnsServicesResponse
     *
     * @param ListAnsServicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAnsServicesResponse
     */
    public function listAnsServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->hasIpCount) {
            @$query['HasIpCount'] = $request->hasIpCount;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnsServices',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAnsServicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAnsServicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Nacos services.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListAnsServicesRequest
     *
     * @returns ListAnsServicesResponse
     *
     * @param ListAnsServicesRequest $request
     *
     * @return ListAnsServicesResponse
     */
    public function listAnsServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsServicesWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * Queries the applications in a lane group by tag.
     *
     * @deprecated openAPI ListAppBySwimmingLaneGroupTag is deprecated, please use mse::2019-05-31::ListAppBySwimmingLaneGroupTags instead
     *
     * @param request - ListAppBySwimmingLaneGroupTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppBySwimmingLaneGroupTagResponse
     *
     * @param ListAppBySwimmingLaneGroupTagRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListAppBySwimmingLaneGroupTagResponse
     */
    public function listAppBySwimmingLaneGroupTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppBySwimmingLaneGroupTag',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAppBySwimmingLaneGroupTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAppBySwimmingLaneGroupTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the applications in a lane group by tag.
     *
     * @deprecated openAPI ListAppBySwimmingLaneGroupTag is deprecated, please use mse::2019-05-31::ListAppBySwimmingLaneGroupTags instead
     *
     * @param request - ListAppBySwimmingLaneGroupTagRequest
     *
     * @returns ListAppBySwimmingLaneGroupTagResponse
     *
     * @param ListAppBySwimmingLaneGroupTagRequest $request
     *
     * @return ListAppBySwimmingLaneGroupTagResponse
     */
    public function listAppBySwimmingLaneGroupTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppBySwimmingLaneGroupTagWithOptions($request, $runtime);
    }

    /**
     * Lists applications by tag in a specified lane group.
     *
     * @param tmpReq - ListAppBySwimmingLaneGroupTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppBySwimmingLaneGroupTagsResponse
     *
     * @param ListAppBySwimmingLaneGroupTagsRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return ListAppBySwimmingLaneGroupTagsResponse
     */
    public function listAppBySwimmingLaneGroupTagsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAppBySwimmingLaneGroupTagsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppBySwimmingLaneGroupTags',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAppBySwimmingLaneGroupTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAppBySwimmingLaneGroupTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Lists applications by tag in a specified lane group.
     *
     * @param request - ListAppBySwimmingLaneGroupTagsRequest
     *
     * @returns ListAppBySwimmingLaneGroupTagsResponse
     *
     * @param ListAppBySwimmingLaneGroupTagsRequest $request
     *
     * @return ListAppBySwimmingLaneGroupTagsResponse
     */
    public function listAppBySwimmingLaneGroupTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppBySwimmingLaneGroupTagsWithOptions($request, $runtime);
    }

    /**
     * Queries the routing rules of an application.
     *
     * @param request - ListApplicationsWithTagRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsWithTagRulesResponse
     *
     * @param ListApplicationsWithTagRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListApplicationsWithTagRulesResponse
     */
    public function listApplicationsWithTagRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationsWithTagRules',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApplicationsWithTagRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationsWithTagRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the routing rules of an application.
     *
     * @param request - ListApplicationsWithTagRulesRequest
     *
     * @returns ListApplicationsWithTagRulesResponse
     *
     * @param ListApplicationsWithTagRulesRequest $request
     *
     * @return ListApplicationsWithTagRulesResponse
     */
    public function listApplicationsWithTagRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithTagRulesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of service authentication rules.
     *
     * @param request - ListAuthPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthPolicyResponse
     *
     * @param ListAuthPolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAuthPolicyResponse
     */
    public function listAuthPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthPolicy',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAuthPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of service authentication rules.
     *
     * @param request - ListAuthPolicyRequest
     *
     * @returns ListAuthPolicyResponse
     *
     * @param ListAuthPolicyRequest $request
     *
     * @return ListAuthPolicyResponse
     */
    public function listAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries a list of circuit breaking rules.
     *
     * @param request - ListCircuitBreakerRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCircuitBreakerRulesResponse
     *
     * @param ListCircuitBreakerRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListCircuitBreakerRulesResponse
     */
    public function listCircuitBreakerRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceSearchKey) {
            @$query['ResourceSearchKey'] = $request->resourceSearchKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCircuitBreakerRules',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCircuitBreakerRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCircuitBreakerRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of circuit breaking rules.
     *
     * @param request - ListCircuitBreakerRulesRequest
     *
     * @returns ListCircuitBreakerRulesResponse
     *
     * @param ListCircuitBreakerRulesRequest $request
     *
     * @return ListCircuitBreakerRulesResponse
     */
    public function listCircuitBreakerRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCircuitBreakerRulesWithOptions($request, $runtime);
    }

    /**
     * Queries available cluster connection types.
     *
     * @param request - ListClusterConnectionTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterConnectionTypesResponse
     *
     * @param ListClusterConnectionTypesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListClusterConnectionTypesResponse
     */
    public function listClusterConnectionTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterConnectionTypes',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterConnectionTypesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterConnectionTypesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries available cluster connection types.
     *
     * @param request - ListClusterConnectionTypesRequest
     *
     * @returns ListClusterConnectionTypesResponse
     *
     * @param ListClusterConnectionTypesRequest $request
     *
     * @return ListClusterConnectionTypesResponse
     */
    public function listClusterConnectionTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterConnectionTypesWithOptions($request, $runtime);
    }

    /**
     * Obtains information about historical health check tasks.
     *
     * @param request - ListClusterHealthCheckTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterHealthCheckTaskResponse
     *
     * @param ListClusterHealthCheckTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListClusterHealthCheckTaskResponse
     */
    public function listClusterHealthCheckTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterHealthCheckTask',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterHealthCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterHealthCheckTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains information about historical health check tasks.
     *
     * @param request - ListClusterHealthCheckTaskRequest
     *
     * @returns ListClusterHealthCheckTaskResponse
     *
     * @param ListClusterHealthCheckTaskRequest $request
     *
     * @return ListClusterHealthCheckTaskResponse
     */
    public function listClusterHealthCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHealthCheckTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the engine types that can be activated.
     *
     * @param request - ListClusterTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterTypesResponse
     *
     * @param ListClusterTypesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListClusterTypesResponse
     */
    public function listClusterTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->connectType) {
            @$query['ConnectType'] = $request->connectType;
        }

        if (null !== $request->mseVersion) {
            @$query['MseVersion'] = $request->mseVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterTypes',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterTypesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterTypesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the engine types that can be activated.
     *
     * @param request - ListClusterTypesRequest
     *
     * @returns ListClusterTypesResponse
     *
     * @param ListClusterTypesRequest $request
     *
     * @return ListClusterTypesResponse
     */
    public function listClusterTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterTypesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about supported instance versions.
     *
     * @param request - ListClusterVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterVersionsResponse
     *
     * @param ListClusterVersionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListClusterVersionsResponse
     */
    public function listClusterVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->mseVersion) {
            @$query['MseVersion'] = $request->mseVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterVersions',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about supported instance versions.
     *
     * @param request - ListClusterVersionsRequest
     *
     * @returns ListClusterVersionsResponse
     *
     * @param ListClusterVersionsRequest $request
     *
     * @return ListClusterVersionsResponse
     */
    public function listClusterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries Microservices Engine (MSE) instances.
     *
     * @param request - ListClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterAliasName) {
            @$query['ClusterAliasName'] = $request->clusterAliasName;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Microservices Engine (MSE) instances.
     *
     * @param request - ListClustersRequest
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * Obtains the track data of a Nacos configuration center.
     *
     * @param request - ListConfigTrackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigTrackResponse
     *
     * @param ListConfigTrackRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConfigTrackResponse
     */
    public function listConfigTrackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfigTrack',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListConfigTrackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListConfigTrackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the track data of a Nacos configuration center.
     *
     * @param request - ListConfigTrackRequest
     *
     * @returns ListConfigTrackResponse
     *
     * @param ListConfigTrackRequest $request
     *
     * @return ListConfigTrackResponse
     */
    public function listConfigTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigTrackWithOptions($request, $runtime);
    }

    /**
     * Queries the namespaces of a Nacos instance.
     *
     * @param request - ListEngineNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEngineNamespacesResponse
     *
     * @param ListEngineNamespacesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListEngineNamespacesResponse
     */
    public function listEngineNamespacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEngineNamespaces',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEngineNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEngineNamespacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the namespaces of a Nacos instance.
     *
     * @param request - ListEngineNamespacesRequest
     *
     * @returns ListEngineNamespacesResponse
     *
     * @param ListEngineNamespacesRequest $request
     *
     * @return ListEngineNamespacesResponse
     */
    public function listEngineNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEngineNamespacesWithOptions($request, $runtime);
    }

    /**
     * Queries Eureka instances.
     *
     * @param request - ListEurekaInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEurekaInstancesResponse
     *
     * @param ListEurekaInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListEurekaInstancesResponse
     */
    public function listEurekaInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEurekaInstances',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEurekaInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEurekaInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Eureka instances.
     *
     * @param request - ListEurekaInstancesRequest
     *
     * @returns ListEurekaInstancesResponse
     *
     * @param ListEurekaInstancesRequest $request
     *
     * @return ListEurekaInstancesResponse
     */
    public function listEurekaInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEurekaInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries Eureka services.
     *
     * @param request - ListEurekaServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEurekaServicesResponse
     *
     * @param ListEurekaServicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEurekaServicesResponse
     */
    public function listEurekaServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEurekaServices',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEurekaServicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEurekaServicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Eureka services.
     *
     * @param request - ListEurekaServicesRequest
     *
     * @returns ListEurekaServicesResponse
     *
     * @param ListEurekaServicesRequest $request
     *
     * @return ListEurekaServicesResponse
     */
    public function listEurekaServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEurekaServicesWithOptions($request, $runtime);
    }

    /**
     * Lists historical data export tasks of a Microservices Engine (MSE) Zookeeper instance.
     *
     * @param request - ListExportZookeeperDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExportZookeeperDataResponse
     *
     * @param ListExportZookeeperDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListExportZookeeperDataResponse
     */
    public function listExportZookeeperDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExportZookeeperData',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListExportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListExportZookeeperDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Lists historical data export tasks of a Microservices Engine (MSE) Zookeeper instance.
     *
     * @param request - ListExportZookeeperDataRequest
     *
     * @returns ListExportZookeeperDataResponse
     *
     * @param ListExportZookeeperDataRequest $request
     *
     * @return ListExportZookeeperDataResponse
     */
    public function listExportZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExportZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * Obtains a list of throttling rules.
     *
     * @param request - ListFlowRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowRulesResponse
     *
     * @param ListFlowRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListFlowRulesResponse
     */
    public function listFlowRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceSearchKey) {
            @$query['ResourceSearchKey'] = $request->resourceSearchKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlowRules',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFlowRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFlowRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains a list of throttling rules.
     *
     * @param request - ListFlowRulesRequest
     *
     * @returns ListFlowRulesResponse
     *
     * @param ListFlowRulesRequest $request
     *
     * @return ListFlowRulesResponse
     */
    public function listFlowRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowRulesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of gateways.
     *
     * @param tmpReq - ListGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayResponse
     *
     * @param ListGatewayRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListGatewayResponse
     */
    public function listGatewayWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGatewayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterParams) {
            $request->filterParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->descSort) {
            @$query['DescSort'] = $request->descSort;
        }

        if (null !== $request->filterParamsShrink) {
            @$query['FilterParams'] = $request->filterParamsShrink;
        }

        if (null !== $request->orderItem) {
            @$query['OrderItem'] = $request->orderItem;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGateway',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of gateways.
     *
     * @param request - ListGatewayRequest
     *
     * @returns ListGatewayResponse
     *
     * @param ListGatewayRequest $request
     *
     * @return ListGatewayResponse
     */
    public function listGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayWithOptions($request, $runtime);
    }

    /**
     * Queries the list of consumers on which a gateway performs authentication operations.
     *
     * @param request - ListGatewayAuthConsumerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayAuthConsumerResponse
     *
     * @param ListGatewayAuthConsumerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListGatewayAuthConsumerResponse
     */
    public function listGatewayAuthConsumerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->consumerStatus) {
            @$query['ConsumerStatus'] = $request->consumerStatus;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayAuthConsumer',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayAuthConsumerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of consumers on which a gateway performs authentication operations.
     *
     * @param request - ListGatewayAuthConsumerRequest
     *
     * @returns ListGatewayAuthConsumerResponse
     *
     * @param ListGatewayAuthConsumerRequest $request
     *
     * @return ListGatewayAuthConsumerResponse
     */
    public function listGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * Queries the list of authorized resources for the consumer on which a gateway performs authentication operations.
     *
     * @param request - ListGatewayAuthConsumerResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayAuthConsumerResourceResponse
     *
     * @param ListGatewayAuthConsumerResourceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListGatewayAuthConsumerResourceResponse
     */
    public function listGatewayAuthConsumerResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceStatus) {
            @$query['ResourceStatus'] = $request->resourceStatus;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayAuthConsumerResource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayAuthConsumerResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of authorized resources for the consumer on which a gateway performs authentication operations.
     *
     * @param request - ListGatewayAuthConsumerResourceRequest
     *
     * @returns ListGatewayAuthConsumerResourceResponse
     *
     * @param ListGatewayAuthConsumerResourceRequest $request
     *
     * @return ListGatewayAuthConsumerResourceResponse
     */
    public function listGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * 查看网关路由熔断规则.
     *
     * @param request - ListGatewayCircuitBreakerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayCircuitBreakerRuleResponse
     *
     * @param ListGatewayCircuitBreakerRuleRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListGatewayCircuitBreakerRuleResponse
     */
    public function listGatewayCircuitBreakerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->filterParams) {
            @$query['FilterParams'] = $request->filterParams;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayCircuitBreakerRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayCircuitBreakerRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看网关路由熔断规则.
     *
     * @param request - ListGatewayCircuitBreakerRuleRequest
     *
     * @returns ListGatewayCircuitBreakerRuleResponse
     *
     * @param ListGatewayCircuitBreakerRuleRequest $request
     *
     * @return ListGatewayCircuitBreakerRuleResponse
     */
    public function listGatewayCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the domain names that are associated with a gateway.
     *
     * @param request - ListGatewayDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayDomainResponse
     *
     * @param ListGatewayDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListGatewayDomainResponse
     */
    public function listGatewayDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayDomain',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the domain names that are associated with a gateway.
     *
     * @param request - ListGatewayDomainRequest
     *
     * @returns ListGatewayDomainResponse
     *
     * @param ListGatewayDomainRequest $request
     *
     * @return ListGatewayDomainResponse
     */
    public function listGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * 查看网关路由流控规则.
     *
     * @param request - ListGatewayFlowRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayFlowRuleResponse
     *
     * @param ListGatewayFlowRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListGatewayFlowRuleResponse
     */
    public function listGatewayFlowRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->filterParams) {
            @$query['FilterParams'] = $request->filterParams;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayFlowRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayFlowRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看网关路由流控规则.
     *
     * @param request - ListGatewayFlowRuleRequest
     *
     * @returns ListGatewayFlowRuleResponse
     *
     * @param ListGatewayFlowRuleRequest $request
     *
     * @return ListGatewayFlowRuleResponse
     */
    public function listGatewayFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayFlowRuleWithOptions($request, $runtime);
    }

    /**
     * 查看网关路由隔离规则.
     *
     * @param request - ListGatewayIsolationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayIsolationRuleResponse
     *
     * @param ListGatewayIsolationRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListGatewayIsolationRuleResponse
     */
    public function listGatewayIsolationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->filterParams) {
            @$query['FilterParams'] = $request->filterParams;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayIsolationRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayIsolationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看网关路由隔离规则.
     *
     * @param request - ListGatewayIsolationRuleRequest
     *
     * @returns ListGatewayIsolationRuleResponse
     *
     * @param ListGatewayIsolationRuleRequest $request
     *
     * @return ListGatewayIsolationRuleResponse
     */
    public function listGatewayIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the routes of a gateway.
     *
     * @param tmpReq - ListGatewayRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayRouteResponse
     *
     * @param ListGatewayRouteRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListGatewayRouteResponse
     */
    public function listGatewayRouteWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGatewayRouteShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterParams) {
            $request->filterParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->descSort) {
            @$query['DescSort'] = $request->descSort;
        }

        if (null !== $request->filterParamsShrink) {
            @$query['FilterParams'] = $request->filterParamsShrink;
        }

        if (null !== $request->orderItem) {
            @$query['OrderItem'] = $request->orderItem;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayRoute',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the routes of a gateway.
     *
     * @param request - ListGatewayRouteRequest
     *
     * @returns ListGatewayRouteResponse
     *
     * @param ListGatewayRouteRequest $request
     *
     * @return ListGatewayRouteResponse
     */
    public function listGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * Queries a list of routes for which authentication is enabled.
     *
     * @param request - ListGatewayRouteOnAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayRouteOnAuthResponse
     *
     * @param ListGatewayRouteOnAuthRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListGatewayRouteOnAuthResponse
     */
    public function listGatewayRouteOnAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayRouteOnAuth',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayRouteOnAuthResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayRouteOnAuthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of routes for which authentication is enabled.
     *
     * @param request - ListGatewayRouteOnAuthRequest
     *
     * @returns ListGatewayRouteOnAuthResponse
     *
     * @param ListGatewayRouteOnAuthRequest $request
     *
     * @return ListGatewayRouteOnAuthResponse
     */
    public function listGatewayRouteOnAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayRouteOnAuthWithOptions($request, $runtime);
    }

    /**
     * Queries a list of services that are subscribed with a gateway.
     *
     * @param tmpReq - ListGatewayServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayServiceResponse
     *
     * @param ListGatewayServiceRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListGatewayServiceResponse
     */
    public function listGatewayServiceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGatewayServiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterParams) {
            $request->filterParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->descSort) {
            @$query['DescSort'] = $request->descSort;
        }

        if (null !== $request->filterParamsShrink) {
            @$query['FilterParams'] = $request->filterParamsShrink;
        }

        if (null !== $request->orderItem) {
            @$query['OrderItem'] = $request->orderItem;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayService',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of services that are subscribed with a gateway.
     *
     * @param request - ListGatewayServiceRequest
     *
     * @returns ListGatewayServiceResponse
     *
     * @param ListGatewayServiceRequest $request
     *
     * @return ListGatewayServiceResponse
     */
    public function listGatewayService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the Server Load Balancer (SLB) instances that are associated with a gateway.
     *
     * @param request - ListGatewaySlbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewaySlbResponse
     *
     * @param ListGatewaySlbRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListGatewaySlbResponse
     */
    public function listGatewaySlbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewaySlb',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewaySlbResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Server Load Balancer (SLB) instances that are associated with a gateway.
     *
     * @param request - ListGatewaySlbRequest
     *
     * @returns ListGatewaySlbResponse
     *
     * @param ListGatewaySlbRequest $request
     *
     * @return ListGatewaySlbResponse
     */
    public function listGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * Obtains a list of zones where a gateway is available.
     *
     * @param request - ListGatewayZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayZoneResponse
     *
     * @param ListGatewayZoneRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListGatewayZoneResponse
     */
    public function listGatewayZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayZone',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGatewayZoneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGatewayZoneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains a list of zones where a gateway is available.
     *
     * @param request - ListGatewayZoneRequest
     *
     * @returns ListGatewayZoneResponse
     *
     * @param ListGatewayZoneRequest $request
     *
     * @return ListGatewayZoneResponse
     */
    public function listGatewayZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayZoneWithOptions($request, $runtime);
    }

    /**
     * Displays the number of nodes that can be deployed for an instance.
     *
     * @param request - ListInstanceCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceCountResponse
     *
     * @param ListInstanceCountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceCountResponse
     */
    public function listInstanceCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->mseVersion) {
            @$query['MseVersion'] = $request->mseVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceCount',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstanceCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Displays the number of nodes that can be deployed for an instance.
     *
     * @param request - ListInstanceCountRequest
     *
     * @returns ListInstanceCountResponse
     *
     * @param ListInstanceCountRequest $request
     *
     * @return ListInstanceCountResponse
     */
    public function listInstanceCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceCountWithOptions($request, $runtime);
    }

    /**
     * 查询隔离规则.
     *
     * @param request - ListIsolationRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIsolationRulesResponse
     *
     * @param ListIsolationRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListIsolationRulesResponse
     */
    public function listIsolationRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceSearchKey) {
            @$query['ResourceSearchKey'] = $request->resourceSearchKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIsolationRules',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIsolationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIsolationRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询隔离规则.
     *
     * @param request - ListIsolationRulesRequest
     *
     * @returns ListIsolationRulesResponse
     *
     * @param ListIsolationRulesRequest $request
     *
     * @return ListIsolationRulesResponse
     */
    public function listIsolationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIsolationRulesWithOptions($request, $runtime);
    }

    /**
     * Queries listeners based on configuration information.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param tmpReq - ListListenersByConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListListenersByConfigResponse
     *
     * @param ListListenersByConfigRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListListenersByConfigResponse
     */
    public function listListenersByConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListListenersByConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extGrayRules) {
            $request->extGrayRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extGrayRules, 'ExtGrayRules', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->extGrayRulesShrink) {
            @$query['ExtGrayRules'] = $request->extGrayRulesShrink;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListListenersByConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListListenersByConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListListenersByConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries listeners based on configuration information.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListListenersByConfigRequest
     *
     * @returns ListListenersByConfigResponse
     *
     * @param ListListenersByConfigRequest $request
     *
     * @return ListListenersByConfigResponse
     */
    public function listListenersByConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersByConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the information about listeners based on IP addresses.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListListenersByIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListListenersByIpResponse
     *
     * @param ListListenersByIpRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListListenersByIpResponse
     */
    public function listListenersByIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListListenersByIp',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListListenersByIpResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListListenersByIpResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about listeners based on IP addresses.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListListenersByIpRequest
     *
     * @returns ListListenersByIpResponse
     *
     * @param ListListenersByIpRequest $request
     *
     * @return ListListenersByIpResponse
     */
    public function listListenersByIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersByIpWithOptions($request, $runtime);
    }

    /**
     * Queries information about a migration task.
     *
     * @param request - ListMigrationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMigrationTaskResponse
     *
     * @param ListMigrationTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListMigrationTaskResponse
     */
    public function listMigrationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->originInstanceName) {
            @$query['OriginInstanceName'] = $request->originInstanceName;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMigrationTask',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMigrationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about a migration task.
     *
     * @param request - ListMigrationTaskRequest
     *
     * @returns ListMigrationTaskResponse
     *
     * @param ListMigrationTaskRequest $request
     *
     * @return ListMigrationTaskResponse
     */
    public function listMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * Queries Nacos configurations.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListNacosConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNacosConfigsResponse
     *
     * @param ListNacosConfigsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNacosConfigsResponse
     */
    public function listNacosConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNacosConfigs',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNacosConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNacosConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Nacos configurations.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListNacosConfigsRequest
     *
     * @returns ListNacosConfigsResponse
     *
     * @param ListNacosConfigsRequest $request
     *
     * @return ListNacosConfigsResponse
     */
    public function listNacosConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacosConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration history of a Microservices Engine (MSE) Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListNacosHistoryConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNacosHistoryConfigsResponse
     *
     * @param ListNacosHistoryConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListNacosHistoryConfigsResponse
     */
    public function listNacosHistoryConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNacosHistoryConfigs',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNacosHistoryConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNacosHistoryConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the configuration history of a Microservices Engine (MSE) Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - ListNacosHistoryConfigsRequest
     *
     * @returns ListNacosHistoryConfigsResponse
     *
     * @param ListNacosHistoryConfigsRequest $request
     *
     * @return ListNacosHistoryConfigsResponse
     */
    public function listNacosHistoryConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacosHistoryConfigsWithOptions($request, $runtime);
    }

    /**
     * 展示命名空间列表.
     *
     * @param tmpReq - ListNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListNamespacesResponse
     */
    public function listNamespacesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListNamespacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamespaces',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNamespacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 展示命名空间列表.
     *
     * @param request - ListNamespacesRequest
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $request
     *
     * @return ListNamespacesResponse
     */
    public function listNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespacesWithOptions($request, $runtime);
    }

    /**
     * Obtains the trajectory data of a Nacos registry.
     *
     * @param request - ListNamingTrackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamingTrackResponse
     *
     * @param ListNamingTrackRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListNamingTrackResponse
     */
    public function listNamingTrackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamingTrack',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNamingTrackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNamingTrackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the trajectory data of a Nacos registry.
     *
     * @param request - ListNamingTrackRequest
     *
     * @returns ListNamingTrackResponse
     *
     * @param ListNamingTrackRequest $request
     *
     * @return ListNamingTrackResponse
     */
    public function listNamingTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamingTrackWithOptions($request, $runtime);
    }

    /**
     * Obtains a list of gateway certificates.
     *
     * @param request - ListSSLCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSSLCertResponse
     *
     * @param ListSSLCertRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSSLCertResponse
     */
    public function listSSLCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSSLCert',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSSLCertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains a list of gateway certificates.
     *
     * @param request - ListSSLCertRequest
     *
     * @returns ListSSLCertResponse
     *
     * @param ListSSLCertRequest $request
     *
     * @return ListSSLCertResponse
     */
    public function listSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSSLCertWithOptions($request, $runtime);
    }

    /**
     * Obtains the information about security groups.
     *
     * @param request - ListSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecurityGroupResponse
     *
     * @param ListSecurityGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSecurityGroupResponse
     */
    public function listSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecurityGroup',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSecurityGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the information about security groups.
     *
     * @param request - ListSecurityGroupRequest
     *
     * @returns ListSecurityGroupResponse
     *
     * @param ListSecurityGroupRequest $request
     *
     * @return ListSecurityGroupResponse
     */
    public function listSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the security group rules of a gateway.
     *
     * @param request - ListSecurityGroupRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecurityGroupRuleResponse
     *
     * @param ListSecurityGroupRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSecurityGroupRuleResponse
     */
    public function listSecurityGroupRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecurityGroupRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSecurityGroupRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the security group rules of a gateway.
     *
     * @param request - ListSecurityGroupRuleRequest
     *
     * @returns ListSecurityGroupRuleResponse
     *
     * @param ListSecurityGroupRuleRequest $request
     *
     * @return ListSecurityGroupRuleResponse
     */
    public function listSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * Obtains the custom behavior of traffic protection.
     *
     * @param tmpReq - ListSentinelBlockFallbackDefinitionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSentinelBlockFallbackDefinitionsResponse
     *
     * @param ListSentinelBlockFallbackDefinitionsRequest $tmpReq
     * @param RuntimeOptions                              $runtime
     *
     * @return ListSentinelBlockFallbackDefinitionsResponse
     */
    public function listSentinelBlockFallbackDefinitionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListSentinelBlockFallbackDefinitionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->classificationSet) {
            $request->classificationSetShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->classificationSet, 'ClassificationSet', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->classificationSetShrink) {
            @$query['ClassificationSet'] = $request->classificationSetShrink;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSentinelBlockFallbackDefinitions',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSentinelBlockFallbackDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSentinelBlockFallbackDefinitionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the custom behavior of traffic protection.
     *
     * @param request - ListSentinelBlockFallbackDefinitionsRequest
     *
     * @returns ListSentinelBlockFallbackDefinitionsResponse
     *
     * @param ListSentinelBlockFallbackDefinitionsRequest $request
     *
     * @return ListSentinelBlockFallbackDefinitionsResponse
     */
    public function listSentinelBlockFallbackDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSentinelBlockFallbackDefinitionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of associated sources.
     *
     * @param request - ListServiceSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceSourceResponse
     *
     * @param ListServiceSourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListServiceSourceResponse
     */
    public function listServiceSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceSource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of associated sources.
     *
     * @param request - ListServiceSourceRequest
     *
     * @returns ListServiceSourceResponse
     *
     * @param ListServiceSourceRequest $request
     *
     * @return ListServiceSourceResponse
     */
    public function listServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceSourceWithOptions($request, $runtime);
    }

    /**
     * Queries tagged resources.
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries tagged resources.
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
     * Obtains the track data of a ZooKeeper instance.
     *
     * @param request - ListZkTrackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListZkTrackResponse
     *
     * @param ListZkTrackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListZkTrackResponse
     */
    public function listZkTrackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListZkTrack',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListZkTrackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListZkTrackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the track data of a ZooKeeper instance.
     *
     * @param request - ListZkTrackRequest
     *
     * @returns ListZkTrackResponse
     *
     * @param ListZkTrackRequest $request
     *
     * @return ListZkTrackResponse
     */
    public function listZkTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZkTrackWithOptions($request, $runtime);
    }

    /**
     * Queries the child nodes of a ZooKeeper node.
     *
     * @param request - ListZnodeChildrenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListZnodeChildrenResponse
     *
     * @param ListZnodeChildrenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListZnodeChildrenResponse
     */
    public function listZnodeChildrenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListZnodeChildren',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListZnodeChildrenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListZnodeChildrenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the child nodes of a ZooKeeper node.
     *
     * @param request - ListZnodeChildrenRequest
     *
     * @returns ListZnodeChildrenResponse
     *
     * @param ListZnodeChildrenRequest $request
     *
     * @return ListZnodeChildrenResponse
     */
    public function listZnodeChildren($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZnodeChildrenWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a cluster for which Microservice Governance is enabled.
     *
     * @param tmpReq - ModifyGovernanceKubernetesClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGovernanceKubernetesClusterResponse
     *
     * @param ModifyGovernanceKubernetesClusterRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyGovernanceKubernetesClusterResponse
     */
    public function modifyGovernanceKubernetesClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyGovernanceKubernetesClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->namespaceInfos) {
            $request->namespaceInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->namespaceInfos, 'NamespaceInfos', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->namespaceInfosShrink) {
            @$body['NamespaceInfos'] = $request->namespaceInfosShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyGovernanceKubernetesCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyGovernanceKubernetesClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information about a cluster for which Microservice Governance is enabled.
     *
     * @param request - ModifyGovernanceKubernetesClusterRequest
     *
     * @returns ModifyGovernanceKubernetesClusterResponse
     *
     * @param ModifyGovernanceKubernetesClusterRequest $request
     *
     * @return ModifyGovernanceKubernetesClusterResponse
     */
    public function modifyGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * Modifies configurations of the lossless online and offline feature.
     *
     * @param request - ModifyLosslessRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLosslessRuleResponse
     *
     * @param ModifyLosslessRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyLosslessRuleResponse
     */
    public function modifyLosslessRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->aligned) {
            @$query['Aligned'] = $request->aligned;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->delayTime) {
            @$query['DelayTime'] = $request->delayTime;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->funcType) {
            @$query['FuncType'] = $request->funcType;
        }

        if (null !== $request->lossLessDetail) {
            @$query['LossLessDetail'] = $request->lossLessDetail;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->notice) {
            @$query['Notice'] = $request->notice;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->related) {
            @$query['Related'] = $request->related;
        }

        if (null !== $request->warmupTime) {
            @$query['WarmupTime'] = $request->warmupTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLosslessRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyLosslessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyLosslessRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies configurations of the lossless online and offline feature.
     *
     * @param request - ModifyLosslessRuleRequest
     *
     * @returns ModifyLosslessRuleResponse
     *
     * @param ModifyLosslessRuleRequest $request
     *
     * @return ModifyLosslessRuleResponse
     */
    public function modifyLosslessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLosslessRuleWithOptions($request, $runtime);
    }

    /**
     * Unpublishes a route for a gateway.
     *
     * @param request - OfflineGatewayRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineGatewayRouteResponse
     *
     * @param OfflineGatewayRouteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OfflineGatewayRouteResponse
     */
    public function offlineGatewayRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OfflineGatewayRoute',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OfflineGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OfflineGatewayRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unpublishes a route for a gateway.
     *
     * @param request - OfflineGatewayRouteRequest
     *
     * @returns OfflineGatewayRouteResponse
     *
     * @param OfflineGatewayRouteRequest $request
     *
     * @return OfflineGatewayRouteResponse
     */
    public function offlineGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * Subscribes to the notification feature if a risk is detected during a health check.
     *
     * @param request - OrderClusterHealthCheckRiskNoticeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OrderClusterHealthCheckRiskNoticeResponse
     *
     * @param OrderClusterHealthCheckRiskNoticeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return OrderClusterHealthCheckRiskNoticeResponse
     */
    public function orderClusterHealthCheckRiskNoticeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mute) {
            @$query['Mute'] = $request->mute;
        }

        if (null !== $request->noticeType) {
            @$query['NoticeType'] = $request->noticeType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->riskCode) {
            @$query['RiskCode'] = $request->riskCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OrderClusterHealthCheckRiskNotice',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OrderClusterHealthCheckRiskNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OrderClusterHealthCheckRiskNoticeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Subscribes to the notification feature if a risk is detected during a health check.
     *
     * @param request - OrderClusterHealthCheckRiskNoticeRequest
     *
     * @returns OrderClusterHealthCheckRiskNoticeResponse
     *
     * @param OrderClusterHealthCheckRiskNoticeRequest $request
     *
     * @return OrderClusterHealthCheckRiskNoticeResponse
     */
    public function orderClusterHealthCheckRiskNotice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderClusterHealthCheckRiskNoticeWithOptions($request, $runtime);
    }

    /**
     * Specifies whether to convert all letters of a header into lowercase letters. For requests and responses, HTTP/1.1 headers are not case-sensitive. By default, all letters of headers are converted into lowercase letters.
     *
     * @param request - PreserveHeaderFormatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreserveHeaderFormatResponse
     *
     * @param PreserveHeaderFormatRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PreserveHeaderFormatResponse
     */
    public function preserveHeaderFormatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->preserveHeaderFormat) {
            @$query['PreserveHeaderFormat'] = $request->preserveHeaderFormat;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PreserveHeaderFormat',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PreserveHeaderFormatResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PreserveHeaderFormatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Specifies whether to convert all letters of a header into lowercase letters. For requests and responses, HTTP/1.1 headers are not case-sensitive. By default, all letters of headers are converted into lowercase letters.
     *
     * @param request - PreserveHeaderFormatRequest
     *
     * @returns PreserveHeaderFormatResponse
     *
     * @param PreserveHeaderFormatRequest $request
     *
     * @return PreserveHeaderFormatResponse
     */
    public function preserveHeaderFormat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preserveHeaderFormatWithOptions($request, $runtime);
    }

    /**
     * Queries all the microservices of a service source.
     *
     * @param request - PullServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PullServicesResponse
     *
     * @param PullServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PullServicesResponse
     */
    public function pullServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PullServices',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PullServicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PullServicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all the microservices of a service source.
     *
     * @param request - PullServicesRequest
     *
     * @returns PullServicesResponse
     *
     * @param PullServicesRequest $request
     *
     * @return PullServicesResponse
     */
    public function pullServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pullServicesWithOptions($request, $runtime);
    }

    /**
     * Initiates a task to check risk evaluation for an instance.
     *
     * @param request - PutClusterHealthCheckTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutClusterHealthCheckTaskResponse
     *
     * @param PutClusterHealthCheckTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PutClusterHealthCheckTaskResponse
     */
    public function putClusterHealthCheckTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutClusterHealthCheckTask',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PutClusterHealthCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutClusterHealthCheckTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Initiates a task to check risk evaluation for an instance.
     *
     * @param request - PutClusterHealthCheckTaskRequest
     *
     * @returns PutClusterHealthCheckTaskResponse
     *
     * @param PutClusterHealthCheckTaskRequest $request
     *
     * @return PutClusterHealthCheckTaskResponse
     */
    public function putClusterHealthCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putClusterHealthCheckTaskWithOptions($request, $runtime);
    }

    /**
     * Queries all the lanes in a lane group.
     *
     * @param request - QueryAllSwimmingLaneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAllSwimmingLaneResponse
     *
     * @param QueryAllSwimmingLaneRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAllSwimmingLaneResponse
     */
    public function queryAllSwimmingLaneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAllSwimmingLane',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAllSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAllSwimmingLaneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all the lanes in a lane group.
     *
     * @param request - QueryAllSwimmingLaneRequest
     *
     * @returns QueryAllSwimmingLaneResponse
     *
     * @param QueryAllSwimmingLaneRequest $request
     *
     * @return QueryAllSwimmingLaneResponse
     */
    public function queryAllSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * Queries all lane groups.
     *
     * @param request - QueryAllSwimmingLaneGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAllSwimmingLaneGroupResponse
     *
     * @param QueryAllSwimmingLaneGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryAllSwimmingLaneGroupResponse
     */
    public function queryAllSwimmingLaneGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAllSwimmingLaneGroup',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAllSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAllSwimmingLaneGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all lane groups.
     *
     * @param request - QueryAllSwimmingLaneGroupRequest
     *
     * @returns QueryAllSwimmingLaneGroupResponse
     *
     * @param QueryAllSwimmingLaneGroupRequest $request
     *
     * @return QueryAllSwimmingLaneGroupResponse
     */
    public function queryAllSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * Queries information about regions.
     *
     * @param request - QueryBusinessLocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBusinessLocationsResponse
     *
     * @param QueryBusinessLocationsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryBusinessLocationsResponse
     */
    public function queryBusinessLocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBusinessLocations',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryBusinessLocationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryBusinessLocationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about regions.
     *
     * @param request - QueryBusinessLocationsRequest
     *
     * @returns QueryBusinessLocationsResponse
     *
     * @param QueryBusinessLocationsRequest $request
     *
     * @return QueryBusinessLocationsResponse
     */
    public function queryBusinessLocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBusinessLocationsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an instance.
     *
     * @param request - QueryClusterDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryClusterDetailResponse
     *
     * @param QueryClusterDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryClusterDetailResponse
     */
    public function queryClusterDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->aclSwitch) {
            @$query['AclSwitch'] = $request->aclSwitch;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryClusterDetail',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryClusterDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an instance.
     *
     * @param request - QueryClusterDetailRequest
     *
     * @returns QueryClusterDetailResponse
     *
     * @param QueryClusterDetailRequest $request
     *
     * @return QueryClusterDetailResponse
     */
    public function queryClusterDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDetailWithOptions($request, $runtime);
    }

    /**
     * Queries disk specifications that are supported by an instance.
     *
     * @param request - QueryClusterDiskSpecificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryClusterDiskSpecificationResponse
     *
     * @param QueryClusterDiskSpecificationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryClusterDiskSpecificationResponse
     */
    public function queryClusterDiskSpecificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryClusterDiskSpecification',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryClusterDiskSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryClusterDiskSpecificationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries disk specifications that are supported by an instance.
     *
     * @param request - QueryClusterDiskSpecificationRequest
     *
     * @returns QueryClusterDiskSpecificationResponse
     *
     * @param QueryClusterDiskSpecificationRequest $request
     *
     * @return QueryClusterDiskSpecificationResponse
     */
    public function queryClusterDiskSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDiskSpecificationWithOptions($request, $runtime);
    }

    /**
     * Queries the static information of an instance.
     *
     * @param request - QueryClusterInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryClusterInfoResponse
     *
     * @param QueryClusterInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryClusterInfoResponse
     */
    public function queryClusterInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->aclSwitch) {
            @$query['AclSwitch'] = $request->aclSwitch;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryClusterInfo',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryClusterInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryClusterInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the static information of an instance.
     *
     * @param request - QueryClusterInfoRequest
     *
     * @returns QueryClusterInfoResponse
     *
     * @param QueryClusterInfoRequest $request
     *
     * @return QueryClusterInfoResponse
     */
    public function queryClusterInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the information of supported instance specifications.
     *
     * @param request - QueryClusterSpecificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryClusterSpecificationResponse
     *
     * @param QueryClusterSpecificationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryClusterSpecificationResponse
     */
    public function queryClusterSpecificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->connectType) {
            @$query['ConnectType'] = $request->connectType;
        }

        if (null !== $request->mseVersion) {
            @$query['MseVersion'] = $request->mseVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryClusterSpecification',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryClusterSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryClusterSpecificationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information of supported instance specifications.
     *
     * @param request - QueryClusterSpecificationRequest
     *
     * @returns QueryClusterSpecificationResponse
     *
     * @param QueryClusterSpecificationRequest $request
     *
     * @return QueryClusterSpecificationResponse
     */
    public function queryClusterSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterSpecificationWithOptions($request, $runtime);
    }

    /**
     * Queries configuration information of an instance.
     *
     * @param request - QueryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConfigResponse
     *
     * @param QueryConfigRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryConfigResponse
     */
    public function queryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->configType) {
            @$query['ConfigType'] = $request->configType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->needRunningConf) {
            @$query['NeedRunningConf'] = $request->needRunningConf;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries configuration information of an instance.
     *
     * @param request - QueryConfigRequest
     *
     * @returns QueryConfigResponse
     *
     * @param QueryConfigRequest $request
     *
     * @return QueryConfigResponse
     */
    public function queryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the regions supported by a gateway.
     *
     * @param request - QueryGatewayRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGatewayRegionResponse
     *
     * @param QueryGatewayRegionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryGatewayRegionResponse
     */
    public function queryGatewayRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryGatewayRegion',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryGatewayRegionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryGatewayRegionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the regions supported by a gateway.
     *
     * @param request - QueryGatewayRegionRequest
     *
     * @returns QueryGatewayRegionResponse
     *
     * @param QueryGatewayRegionRequest $request
     *
     * @return QueryGatewayRegionResponse
     */
    public function queryGatewayRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGatewayRegionWithOptions($request, $runtime);
    }

    /**
     * Queries available gateway types.
     *
     * @param request - QueryGatewayTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGatewayTypeResponse
     *
     * @param QueryGatewayTypeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryGatewayTypeResponse
     */
    public function queryGatewayTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryGatewayType',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryGatewayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryGatewayTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries available gateway types.
     *
     * @param request - QueryGatewayTypeRequest
     *
     * @returns QueryGatewayTypeResponse
     *
     * @param QueryGatewayTypeRequest $request
     *
     * @return QueryGatewayTypeResponse
     */
    public function queryGatewayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGatewayTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the Kubernetes clusters for which Microservices Governance is activated.
     *
     * @param request - QueryGovernanceKubernetesClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGovernanceKubernetesClusterResponse
     *
     * @param QueryGovernanceKubernetesClusterRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryGovernanceKubernetesClusterResponse
     */
    public function queryGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryGovernanceKubernetesCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryGovernanceKubernetesClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Kubernetes clusters for which Microservices Governance is activated.
     *
     * @param request - QueryGovernanceKubernetesClusterRequest
     *
     * @returns QueryGovernanceKubernetesClusterResponse
     *
     * @param QueryGovernanceKubernetesClusterRequest $request
     *
     * @return QueryGovernanceKubernetesClusterResponse
     */
    public function queryGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * Queries the runtime data of a specified cluster.
     *
     * @param request - QueryInstancesInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstancesInfoResponse
     *
     * @param QueryInstancesInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryInstancesInfoResponse
     */
    public function queryInstancesInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInstancesInfo',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryInstancesInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryInstancesInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the runtime data of a specified cluster.
     *
     * @param request - QueryInstancesInfoRequest
     *
     * @returns QueryInstancesInfoResponse
     *
     * @param QueryInstancesInfoRequest $request
     *
     * @return QueryInstancesInfoResponse
     */
    public function queryInstancesInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstancesInfoWithOptions($request, $runtime);
    }

    /**
     * Queries monitoring information.
     *
     * @param request - QueryMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMonitorResponse
     *
     * @param QueryMonitorRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMonitorResponse
     */
    public function queryMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->monitorType) {
            @$query['MonitorType'] = $request->monitorType;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->step) {
            @$query['Step'] = $request->step;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMonitor',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries monitoring information.
     *
     * @param request - QueryMonitorRequest
     *
     * @returns QueryMonitorResponse
     *
     * @param QueryMonitorRequest $request
     *
     * @return QueryMonitorResponse
     */
    public function queryMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonitorWithOptions($request, $runtime);
    }

    /**
     * 查询MSE命名空间.
     *
     * @param request - QueryNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryNamespaceResponse
     *
     * @param QueryNamespaceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryNamespaceResponse
     */
    public function queryNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryNamespace',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询MSE命名空间.
     *
     * @param request - QueryNamespaceRequest
     *
     * @returns QueryNamespaceResponse
     *
     * @param QueryNamespaceRequest $request
     *
     * @return QueryNamespaceResponse
     */
    public function queryNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNamespaceWithOptions($request, $runtime);
    }

    /**
     * Queries the type of a Server Load Balancer (SLB) instance.
     *
     * @param request - QuerySlbSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySlbSpecResponse
     *
     * @param QuerySlbSpecRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QuerySlbSpecResponse
     */
    public function querySlbSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySlbSpec',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QuerySlbSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySlbSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the type of a Server Load Balancer (SLB) instance.
     *
     * @param request - QuerySlbSpecRequest
     *
     * @returns QuerySlbSpecResponse
     *
     * @param QuerySlbSpecRequest $request
     *
     * @return QuerySlbSpecResponse
     */
    public function querySlbSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySlbSpecWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a lane based on the lane ID.
     *
     * @param request - QuerySwimmingLaneByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySwimmingLaneByIdResponse
     *
     * @param QuerySwimmingLaneByIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySwimmingLaneByIdResponse
     */
    public function querySwimmingLaneByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->laneId) {
            @$query['LaneId'] = $request->laneId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySwimmingLaneById',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QuerySwimmingLaneByIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySwimmingLaneByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a lane based on the lane ID.
     *
     * @param request - QuerySwimmingLaneByIdRequest
     *
     * @returns QuerySwimmingLaneByIdResponse
     *
     * @param QuerySwimmingLaneByIdRequest $request
     *
     * @return QuerySwimmingLaneByIdResponse
     */
    public function querySwimmingLaneById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySwimmingLaneByIdWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a ZooKeeper node.
     *
     * @param request - QueryZnodeDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryZnodeDetailResponse
     *
     * @param QueryZnodeDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryZnodeDetailResponse
     */
    public function queryZnodeDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryZnodeDetail',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryZnodeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryZnodeDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a ZooKeeper node.
     *
     * @param request - QueryZnodeDetailRequest
     *
     * @returns QueryZnodeDetailResponse
     *
     * @param QueryZnodeDetailRequest $request
     *
     * @return QueryZnodeDetailResponse
     */
    public function queryZnodeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryZnodeDetailWithOptions($request, $runtime);
    }

    /**
     * 删除单个应用.
     *
     * @param request - RemoveApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveApplicationResponse
     *
     * @param RemoveApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveApplicationResponse
     */
    public function removeApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveApplication',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除单个应用.
     *
     * @param request - RemoveApplicationRequest
     *
     * @returns RemoveApplicationResponse
     *
     * @param RemoveApplicationRequest $request
     *
     * @return RemoveApplicationResponse
     */
    public function removeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApplicationWithOptions($request, $runtime);
    }

    /**
     * @param request - RemoveAuthPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAuthPolicyResponse
     *
     * @param RemoveAuthPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveAuthPolicyResponse
     */
    public function removeAuthPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveAuthPolicy',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveAuthPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - RemoveAuthPolicyRequest
     *
     * @returns RemoveAuthPolicyResponse
     *
     * @param RemoveAuthPolicyRequest $request
     *
     * @return RemoveAuthPolicyResponse
     */
    public function removeAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * Restarts a registry.
     *
     * @param request - RestartClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartClusterResponse
     *
     * @param RestartClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RestartClusterResponse
     */
    public function restartClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->podNameList) {
            @$query['PodNameList'] = $request->podNameList;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RestartClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Restarts a registry.
     *
     * @param request - RestartClusterRequest
     *
     * @returns RestartClusterResponse
     *
     * @param RestartClusterRequest $request
     *
     * @return RestartClusterResponse
     */
    public function restartCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartClusterWithOptions($request, $runtime);
    }

    /**
     * Retries a cluster.
     *
     * @param request - RetryClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryClusterResponse
     *
     * @param RetryClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RetryClusterResponse
     */
    public function retryClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RetryClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RetryClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Retries a cluster.
     *
     * @param request - RetryClusterRequest
     *
     * @returns RetryClusterResponse
     *
     * @param RetryClusterRequest $request
     *
     * @return RetryClusterResponse
     */
    public function retryCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryClusterWithOptions($request, $runtime);
    }

    /**
     * Queries an idle Server Load Balancer (SLB) instance that is associated with a gateway.
     *
     * @param request - SelectGatewaySlbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectGatewaySlbResponse
     *
     * @param SelectGatewaySlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SelectGatewaySlbResponse
     */
    public function selectGatewaySlbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SelectGatewaySlb',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SelectGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SelectGatewaySlbResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries an idle Server Load Balancer (SLB) instance that is associated with a gateway.
     *
     * @param request - SelectGatewaySlbRequest
     *
     * @returns SelectGatewaySlbResponse
     *
     * @param SelectGatewaySlbRequest $request
     *
     * @return SelectGatewaySlbResponse
     */
    public function selectGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->selectGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * Tags a specified resource.
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Tags a specified resource.
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
     * Untags resources.
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Untags resources.
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
     * Modifies an IP address whitelist.
     *
     * @param request - UpdateAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAclResponse
     *
     * @param UpdateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAclResponse
     */
    public function updateAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->aclEntryList) {
            @$query['AclEntryList'] = $request->aclEntryList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAcl',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAclResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAclResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies an IP address whitelist.
     *
     * @param request - UpdateAclRequest
     *
     * @returns UpdateAclResponse
     *
     * @param UpdateAclRequest $request
     *
     * @return UpdateAclResponse
     */
    public function updateAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclWithOptions($request, $runtime);
    }

    /**
     * Updates a service authentication rule.
     *
     * @param request - UpdateAuthPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthPolicyResponse
     *
     * @param UpdateAuthPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAuthPolicyResponse
     */
    public function updateAuthPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->authRule) {
            @$query['AuthRule'] = $request->authRule;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->k8sNamespace) {
            @$query['K8sNamespace'] = $request->k8sNamespace;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthPolicy',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAuthPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a service authentication rule.
     *
     * @param request - UpdateAuthPolicyRequest
     *
     * @returns UpdateAuthPolicyResponse
     *
     * @param UpdateAuthPolicyRequest $request
     *
     * @return UpdateAuthPolicyResponse
     */
    public function updateAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the blacklist or whitelist of a gateway.
     *
     * @param request - UpdateBlackWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBlackWhiteListResponse
     *
     * @param UpdateBlackWhiteListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateBlackWhiteListResponse
     */
    public function updateBlackWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->isWhite) {
            @$query['IsWhite'] = $request->isWhite;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->resourceIdJsonList) {
            @$query['ResourceIdJsonList'] = $request->resourceIdJsonList;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateBlackWhiteList',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateBlackWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the blacklist or whitelist of a gateway.
     *
     * @param request - UpdateBlackWhiteListRequest
     *
     * @returns UpdateBlackWhiteListResponse
     *
     * @param UpdateBlackWhiteListRequest $request
     *
     * @return UpdateBlackWhiteListResponse
     */
    public function updateBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * Updates a circuit breaking rule.
     *
     * @param request - UpdateCircuitBreakerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCircuitBreakerRuleResponse
     *
     * @param UpdateCircuitBreakerRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateCircuitBreakerRuleResponse
     */
    public function updateCircuitBreakerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->halfOpenBaseAmountPerStep) {
            @$query['HalfOpenBaseAmountPerStep'] = $request->halfOpenBaseAmountPerStep;
        }

        if (null !== $request->halfOpenRecoveryStepNum) {
            @$query['HalfOpenRecoveryStepNum'] = $request->halfOpenRecoveryStepNum;
        }

        if (null !== $request->maxAllowedRtMs) {
            @$query['MaxAllowedRtMs'] = $request->maxAllowedRtMs;
        }

        if (null !== $request->minRequestAmount) {
            @$query['MinRequestAmount'] = $request->minRequestAmount;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->retryTimeoutMs) {
            @$query['RetryTimeoutMs'] = $request->retryTimeoutMs;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->statIntervalMs) {
            @$query['StatIntervalMs'] = $request->statIntervalMs;
        }

        if (null !== $request->strategy) {
            @$query['Strategy'] = $request->strategy;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCircuitBreakerRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCircuitBreakerRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a circuit breaking rule.
     *
     * @param request - UpdateCircuitBreakerRuleRequest
     *
     * @returns UpdateCircuitBreakerRuleResponse
     *
     * @param UpdateCircuitBreakerRuleRequest $request
     *
     * @return UpdateCircuitBreakerRuleResponse
     */
    public function updateCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about an instance.
     *
     * @param request - UpdateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClusterResponse
     *
     * @param UpdateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateClusterResponse
     */
    public function updateClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterAliasName) {
            @$query['ClusterAliasName'] = $request->clusterAliasName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maintenanceEndTime) {
            @$query['MaintenanceEndTime'] = $request->maintenanceEndTime;
        }

        if (null !== $request->maintenanceStartTime) {
            @$query['MaintenanceStartTime'] = $request->maintenanceStartTime;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information about an instance.
     *
     * @param request - UpdateClusterRequest
     *
     * @returns UpdateClusterResponse
     *
     * @param UpdateClusterRequest $request
     *
     * @return UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * Updates the number or specifications of nodes in a pay-as-you-go Microservices Engine (MSE) instance.
     *
     * @remarks
     * You can call this operation to update the number or specifications of nodes in a pay-as-you-go MSE instance. You are charged when you add nodes or upgrade node specifications. For more information, see [Pricing] (`~~1806469~~`).
     *
     * @param request - UpdateClusterSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClusterSpecResponse
     *
     * @param UpdateClusterSpecRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateClusterSpecResponse
     */
    public function updateClusterSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterSpecification) {
            @$query['ClusterSpecification'] = $request->clusterSpecification;
        }

        if (null !== $request->instanceCount) {
            @$query['InstanceCount'] = $request->instanceCount;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mseVersion) {
            @$query['MseVersion'] = $request->mseVersion;
        }

        if (null !== $request->pubNetworkFlow) {
            @$query['PubNetworkFlow'] = $request->pubNetworkFlow;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateClusterSpec',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateClusterSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateClusterSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the number or specifications of nodes in a pay-as-you-go Microservices Engine (MSE) instance.
     *
     * @remarks
     * You can call this operation to update the number or specifications of nodes in a pay-as-you-go MSE instance. You are charged when you add nodes or upgrade node specifications. For more information, see [Pricing] (`~~1806469~~`).
     *
     * @param request - UpdateClusterSpecRequest
     *
     * @returns UpdateClusterSpecResponse
     *
     * @param UpdateClusterSpecRequest $request
     *
     * @return UpdateClusterSpecResponse
     */
    public function updateClusterSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterSpecWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of an instance.
     *
     * @param request - UpdateConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigResponse
     *
     * @param UpdateConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateConfigResponse
     */
    public function updateConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->authEnabled) {
            @$query['AuthEnabled'] = $request->authEnabled;
        }

        if (null !== $request->autopurgePurgeInterval) {
            @$query['AutopurgePurgeInterval'] = $request->autopurgePurgeInterval;
        }

        if (null !== $request->autopurgeSnapRetainCount) {
            @$query['AutopurgeSnapRetainCount'] = $request->autopurgeSnapRetainCount;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->configAuthEnabled) {
            @$query['ConfigAuthEnabled'] = $request->configAuthEnabled;
        }

        if (null !== $request->configSecretEnabled) {
            @$query['ConfigSecretEnabled'] = $request->configSecretEnabled;
        }

        if (null !== $request->configType) {
            @$query['ConfigType'] = $request->configType;
        }

        if (null !== $request->consoleUIEnabled) {
            @$query['ConsoleUIEnabled'] = $request->consoleUIEnabled;
        }

        if (null !== $request->enable4lw) {
            @$query['Enable4lw'] = $request->enable4lw;
        }

        if (null !== $request->eurekaSupported) {
            @$query['EurekaSupported'] = $request->eurekaSupported;
        }

        if (null !== $request->extendedTypesEnable) {
            @$query['ExtendedTypesEnable'] = $request->extendedTypesEnable;
        }

        if (null !== $request->initLimit) {
            @$query['InitLimit'] = $request->initLimit;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->juteMaxbuffer) {
            @$query['JuteMaxbuffer'] = $request->juteMaxbuffer;
        }

        if (null !== $request->MCPEnabled) {
            @$query['MCPEnabled'] = $request->MCPEnabled;
        }

        if (null !== $request->maxClientCnxns) {
            @$query['MaxClientCnxns'] = $request->maxClientCnxns;
        }

        if (null !== $request->maxSessionTimeout) {
            @$query['MaxSessionTimeout'] = $request->maxSessionTimeout;
        }

        if (null !== $request->minSessionTimeout) {
            @$query['MinSessionTimeout'] = $request->minSessionTimeout;
        }

        if (null !== $request->namingAuthEnabled) {
            @$query['NamingAuthEnabled'] = $request->namingAuthEnabled;
        }

        if (null !== $request->passWord) {
            @$query['PassWord'] = $request->passWord;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->snapshotCount) {
            @$query['SnapshotCount'] = $request->snapshotCount;
        }

        if (null !== $request->syncLimit) {
            @$query['SyncLimit'] = $request->syncLimit;
        }

        if (null !== $request->TLSEnabled) {
            @$query['TLSEnabled'] = $request->TLSEnabled;
        }

        if (null !== $request->tickTime) {
            @$query['TickTime'] = $request->tickTime;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $body = [];
        if (null !== $request->openSuperAcl) {
            @$body['OpenSuperAcl'] = $request->openSuperAcl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configurations of an instance.
     *
     * @param request - UpdateConfigRequest
     *
     * @returns UpdateConfigResponse
     *
     * @param UpdateConfigRequest $request
     *
     * @return UpdateConfigResponse
     */
    public function updateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigWithOptions($request, $runtime);
    }

    /**
     * Updates a namespace for the Nacos engine.
     *
     * @param request - UpdateEngineNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEngineNamespaceResponse
     *
     * @param UpdateEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEngineNamespaceResponse
     */
    public function updateEngineNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->serviceCount) {
            @$query['ServiceCount'] = $request->serviceCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEngineNamespace',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEngineNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a namespace for the Nacos engine.
     *
     * @param request - UpdateEngineNamespaceRequest
     *
     * @returns UpdateEngineNamespaceResponse
     *
     * @param UpdateEngineNamespaceRequest $request
     *
     * @return UpdateEngineNamespaceResponse
     */
    public function updateEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * Updates a throttling rule.
     *
     * @param request - UpdateFlowRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowRuleResponse
     *
     * @param UpdateFlowRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFlowRuleResponse
     */
    public function updateFlowRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->controlBehavior) {
            @$query['ControlBehavior'] = $request->controlBehavior;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->limitApp) {
            @$query['LimitApp'] = $request->limitApp;
        }

        if (null !== $request->maxQueueingTimeMs) {
            @$query['MaxQueueingTimeMs'] = $request->maxQueueingTimeMs;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFlowRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateFlowRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a throttling rule.
     *
     * @param request - UpdateFlowRuleRequest
     *
     * @returns UpdateFlowRuleResponse
     *
     * @param UpdateFlowRuleRequest $request
     *
     * @return UpdateFlowRuleResponse
     */
    public function updateFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowRuleWithOptions($request, $runtime);
    }

    /**
     * Updates the consumer on which a gateway performs authentication operations.
     *
     * @param request - UpdateGatewayAuthConsumerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayAuthConsumerResponse
     *
     * @param UpdateGatewayAuthConsumerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateGatewayAuthConsumerResponse
     */
    public function updateGatewayAuthConsumerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->encodeType) {
            @$query['EncodeType'] = $request->encodeType;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->jwks) {
            @$query['Jwks'] = $request->jwks;
        }

        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        if (null !== $request->keyValue) {
            @$query['KeyValue'] = $request->keyValue;
        }

        if (null !== $request->tokenName) {
            @$query['TokenName'] = $request->tokenName;
        }

        if (null !== $request->tokenPass) {
            @$query['TokenPass'] = $request->tokenPass;
        }

        if (null !== $request->tokenPosition) {
            @$query['TokenPosition'] = $request->tokenPosition;
        }

        if (null !== $request->tokenPrefix) {
            @$query['TokenPrefix'] = $request->tokenPrefix;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayAuthConsumer',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayAuthConsumerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the consumer on which a gateway performs authentication operations.
     *
     * @param request - UpdateGatewayAuthConsumerRequest
     *
     * @returns UpdateGatewayAuthConsumerResponse
     *
     * @param UpdateGatewayAuthConsumerRequest $request
     *
     * @return UpdateGatewayAuthConsumerResponse
     */
    public function updateGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * Updates a list of resources on which permissions are granted to a gateway authentication consumer.
     *
     * @param tmpReq - UpdateGatewayAuthConsumerResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayAuthConsumerResourceResponse
     *
     * @param UpdateGatewayAuthConsumerResourceRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateGatewayAuthConsumerResourceResponse
     */
    public function updateGatewayAuthConsumerResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayAuthConsumerResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceList) {
            $request->resourceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceList, 'ResourceList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->resourceListShrink) {
            @$query['ResourceList'] = $request->resourceListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayAuthConsumerResource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayAuthConsumerResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a list of resources on which permissions are granted to a gateway authentication consumer.
     *
     * @param request - UpdateGatewayAuthConsumerResourceRequest
     *
     * @returns UpdateGatewayAuthConsumerResourceResponse
     *
     * @param UpdateGatewayAuthConsumerResourceRequest $request
     *
     * @return UpdateGatewayAuthConsumerResourceResponse
     */
    public function updateGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * Updates the resource authorization status for the consumer on which a gateway performs authentication operations.
     *
     * @param request - UpdateGatewayAuthConsumerResourceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayAuthConsumerResourceStatusResponse
     *
     * @param UpdateGatewayAuthConsumerResourceStatusRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return UpdateGatewayAuthConsumerResourceStatusResponse
     */
    public function updateGatewayAuthConsumerResourceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->idList) {
            @$query['IdList'] = $request->idList;
        }

        if (null !== $request->resourceStatus) {
            @$query['ResourceStatus'] = $request->resourceStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayAuthConsumerResourceStatus',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayAuthConsumerResourceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayAuthConsumerResourceStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the resource authorization status for the consumer on which a gateway performs authentication operations.
     *
     * @param request - UpdateGatewayAuthConsumerResourceStatusRequest
     *
     * @returns UpdateGatewayAuthConsumerResourceStatusResponse
     *
     * @param UpdateGatewayAuthConsumerResourceStatusRequest $request
     *
     * @return UpdateGatewayAuthConsumerResourceStatusResponse
     */
    public function updateGatewayAuthConsumerResourceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerResourceStatusWithOptions($request, $runtime);
    }

    /**
     * Updates the status of the consumer on which a gateway performs authentication operations.
     *
     * @param request - UpdateGatewayAuthConsumerStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayAuthConsumerStatusResponse
     *
     * @param UpdateGatewayAuthConsumerStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateGatewayAuthConsumerStatusResponse
     */
    public function updateGatewayAuthConsumerStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->consumerStatus) {
            @$query['ConsumerStatus'] = $request->consumerStatus;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayAuthConsumerStatus',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayAuthConsumerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayAuthConsumerStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the status of the consumer on which a gateway performs authentication operations.
     *
     * @param request - UpdateGatewayAuthConsumerStatusRequest
     *
     * @returns UpdateGatewayAuthConsumerStatusResponse
     *
     * @param UpdateGatewayAuthConsumerStatusRequest $request
     *
     * @return UpdateGatewayAuthConsumerStatusResponse
     */
    public function updateGatewayAuthConsumerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerStatusWithOptions($request, $runtime);
    }

    /**
     * 更新网关路由熔断规则.
     *
     * @param request - UpdateGatewayCircuitBreakerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayCircuitBreakerRuleResponse
     *
     * @param UpdateGatewayCircuitBreakerRuleRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateGatewayCircuitBreakerRuleResponse
     */
    public function updateGatewayCircuitBreakerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->behaviorType) {
            @$query['BehaviorType'] = $request->behaviorType;
        }

        if (null !== $request->bodyEncoding) {
            @$query['BodyEncoding'] = $request->bodyEncoding;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->maxAllowedMs) {
            @$query['MaxAllowedMs'] = $request->maxAllowedMs;
        }

        if (null !== $request->minRequestAmount) {
            @$query['MinRequestAmount'] = $request->minRequestAmount;
        }

        if (null !== $request->recoveryTimeoutSec) {
            @$query['RecoveryTimeoutSec'] = $request->recoveryTimeoutSec;
        }

        if (null !== $request->responseContentBody) {
            @$query['ResponseContentBody'] = $request->responseContentBody;
        }

        if (null !== $request->responseRedirectUrl) {
            @$query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }

        if (null !== $request->responseStatusCode) {
            @$query['ResponseStatusCode'] = $request->responseStatusCode;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        if (null !== $request->statDurationSec) {
            @$query['StatDurationSec'] = $request->statDurationSec;
        }

        if (null !== $request->strategy) {
            @$query['Strategy'] = $request->strategy;
        }

        if (null !== $request->triggerRatio) {
            @$query['TriggerRatio'] = $request->triggerRatio;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayCircuitBreakerRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayCircuitBreakerRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新网关路由熔断规则.
     *
     * @param request - UpdateGatewayCircuitBreakerRuleRequest
     *
     * @returns UpdateGatewayCircuitBreakerRuleResponse
     *
     * @param UpdateGatewayCircuitBreakerRuleRequest $request
     *
     * @return UpdateGatewayCircuitBreakerRuleResponse
     */
    public function updateGatewayCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * 更新网关配置.
     *
     * @param request - UpdateGatewayConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayConfigResponse
     *
     * @param UpdateGatewayConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateGatewayConfigResponse
     */
    public function updateGatewayConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->configValue) {
            @$query['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新网关配置.
     *
     * @param request - UpdateGatewayConfigRequest
     *
     * @returns UpdateGatewayConfigResponse
     *
     * @param UpdateGatewayConfigRequest $request
     *
     * @return UpdateGatewayConfigResponse
     */
    public function updateGatewayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about the domain name associated with a gateway.
     *
     * @param request - UpdateGatewayDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayDomainResponse
     *
     * @param UpdateGatewayDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateGatewayDomainResponse
     */
    public function updateGatewayDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->http2) {
            @$query['Http2'] = $request->http2;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mustHttps) {
            @$query['MustHttps'] = $request->mustHttps;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->tlsMax) {
            @$query['TlsMax'] = $request->tlsMax;
        }

        if (null !== $request->tlsMin) {
            @$query['TlsMin'] = $request->tlsMin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayDomain',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information about the domain name associated with a gateway.
     *
     * @param request - UpdateGatewayDomainRequest
     *
     * @returns UpdateGatewayDomainResponse
     *
     * @param UpdateGatewayDomainRequest $request
     *
     * @return UpdateGatewayDomainResponse
     */
    public function updateGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * 更新网关路由流控规则.
     *
     * @param request - UpdateGatewayFlowRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayFlowRuleResponse
     *
     * @param UpdateGatewayFlowRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateGatewayFlowRuleResponse
     */
    public function updateGatewayFlowRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->behaviorType) {
            @$query['BehaviorType'] = $request->behaviorType;
        }

        if (null !== $request->bodyEncoding) {
            @$query['BodyEncoding'] = $request->bodyEncoding;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->responseContentBody) {
            @$query['ResponseContentBody'] = $request->responseContentBody;
        }

        if (null !== $request->responseRedirectUrl) {
            @$query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }

        if (null !== $request->responseStatusCode) {
            @$query['ResponseStatusCode'] = $request->responseStatusCode;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayFlowRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayFlowRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新网关路由流控规则.
     *
     * @param request - UpdateGatewayFlowRuleRequest
     *
     * @returns UpdateGatewayFlowRuleResponse
     *
     * @param UpdateGatewayFlowRuleRequest $request
     *
     * @return UpdateGatewayFlowRuleResponse
     */
    public function updateGatewayFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayFlowRuleWithOptions($request, $runtime);
    }

    /**
     * 更新网关路由隔离规则.
     *
     * @param request - UpdateGatewayIsolationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayIsolationRuleResponse
     *
     * @param UpdateGatewayIsolationRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateGatewayIsolationRuleResponse
     */
    public function updateGatewayIsolationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->behaviorType) {
            @$query['BehaviorType'] = $request->behaviorType;
        }

        if (null !== $request->bodyEncoding) {
            @$query['BodyEncoding'] = $request->bodyEncoding;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->maxConcurrency) {
            @$query['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->responseContentBody) {
            @$query['ResponseContentBody'] = $request->responseContentBody;
        }

        if (null !== $request->responseRedirectUrl) {
            @$query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }

        if (null !== $request->responseStatusCode) {
            @$query['ResponseStatusCode'] = $request->responseStatusCode;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayIsolationRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayIsolationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新网关路由隔离规则.
     *
     * @param request - UpdateGatewayIsolationRuleRequest
     *
     * @returns UpdateGatewayIsolationRuleResponse
     *
     * @param UpdateGatewayIsolationRuleRequest $request
     *
     * @return UpdateGatewayIsolationRuleResponse
     */
    public function updateGatewayIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * Renames a gateway.
     *
     * @param request - UpdateGatewayNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayNameResponse
     *
     * @param UpdateGatewayNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayName',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Renames a gateway.
     *
     * @param request - UpdateGatewayNameRequest
     *
     * @returns UpdateGatewayNameResponse
     *
     * @param UpdateGatewayNameRequest $request
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayNameWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of a gateway.
     *
     * @param tmpReq - UpdateGatewayOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayOptionResponse
     *
     * @param UpdateGatewayOptionRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateGatewayOptionResponse
     */
    public function updateGatewayOptionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayOptionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->gatewayOption) {
            $request->gatewayOptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->gatewayOption, 'GatewayOption', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayOptionShrink) {
            @$query['GatewayOption'] = $request->gatewayOptionShrink;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayOption',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayOptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayOptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a gateway.
     *
     * @param request - UpdateGatewayOptionRequest
     *
     * @returns UpdateGatewayOptionResponse
     *
     * @param UpdateGatewayOptionRequest $request
     *
     * @return UpdateGatewayOptionResponse
     */
    public function updateGatewayOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayOptionWithOptions($request, $runtime);
    }

    /**
     * Updates a route for a gateway.
     *
     * @param tmpReq - UpdateGatewayRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayRouteResponse
     *
     * @param UpdateGatewayRouteRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateGatewayRouteResponse
     */
    public function updateGatewayRouteWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayRouteShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->directResponseJSON) {
            $request->directResponseJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->directResponseJSON, 'DirectResponseJSON', 'json');
        }

        if (null !== $tmpReq->fallbackServices) {
            $request->fallbackServicesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fallbackServices, 'FallbackServices', 'json');
        }

        if (null !== $tmpReq->predicates) {
            $request->predicatesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->predicates, 'Predicates', 'json');
        }

        if (null !== $tmpReq->redirectJSON) {
            $request->redirectJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->redirectJSON, 'RedirectJSON', 'json');
        }

        if (null !== $tmpReq->services) {
            $request->servicesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->services, 'Services', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->directResponseJSONShrink) {
            @$query['DirectResponseJSON'] = $request->directResponseJSONShrink;
        }

        if (null !== $request->domainIdListJSON) {
            @$query['DomainIdListJSON'] = $request->domainIdListJSON;
        }

        if (null !== $request->enableWaf) {
            @$query['EnableWaf'] = $request->enableWaf;
        }

        if (null !== $request->fallback) {
            @$query['Fallback'] = $request->fallback;
        }

        if (null !== $request->fallbackServicesShrink) {
            @$query['FallbackServices'] = $request->fallbackServicesShrink;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->predicatesShrink) {
            @$query['Predicates'] = $request->predicatesShrink;
        }

        if (null !== $request->redirectJSONShrink) {
            @$query['RedirectJSON'] = $request->redirectJSONShrink;
        }

        if (null !== $request->routeOrder) {
            @$query['RouteOrder'] = $request->routeOrder;
        }

        if (null !== $request->servicesShrink) {
            @$query['Services'] = $request->servicesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayRoute',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a route for a gateway.
     *
     * @param request - UpdateGatewayRouteRequest
     *
     * @returns UpdateGatewayRouteResponse
     *
     * @param UpdateGatewayRouteRequest $request
     *
     * @return UpdateGatewayRouteResponse
     */
    public function updateGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * Updates the authentication configurations of a route.
     *
     * @param tmpReq - UpdateGatewayRouteAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayRouteAuthResponse
     *
     * @param UpdateGatewayRouteAuthRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGatewayRouteAuthResponse
     */
    public function updateGatewayRouteAuthWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayRouteAuthShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authJSON) {
            $request->authJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authJSON, 'AuthJSON', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->authJSONShrink) {
            @$query['AuthJSON'] = $request->authJSONShrink;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayRouteAuth',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayRouteAuthResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayRouteAuthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the authentication configurations of a route.
     *
     * @param request - UpdateGatewayRouteAuthRequest
     *
     * @returns UpdateGatewayRouteAuthResponse
     *
     * @param UpdateGatewayRouteAuthRequest $request
     *
     * @return UpdateGatewayRouteAuthResponse
     */
    public function updateGatewayRouteAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteAuthWithOptions($request, $runtime);
    }

    /**
     * Modifies the cross-origin resource sharing (CORS) policy of a route.
     *
     * @param tmpReq - UpdateGatewayRouteCORSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayRouteCORSResponse
     *
     * @param UpdateGatewayRouteCORSRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGatewayRouteCORSResponse
     */
    public function updateGatewayRouteCORSWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayRouteCORSShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->corsJSON) {
            $request->corsJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->corsJSON, 'CorsJSON', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->corsJSONShrink) {
            @$query['CorsJSON'] = $request->corsJSONShrink;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayRouteCORS',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayRouteCORSResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayRouteCORSResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the cross-origin resource sharing (CORS) policy of a route.
     *
     * @param request - UpdateGatewayRouteCORSRequest
     *
     * @returns UpdateGatewayRouteCORSResponse
     *
     * @param UpdateGatewayRouteCORSRequest $request
     *
     * @return UpdateGatewayRouteCORSResponse
     */
    public function updateGatewayRouteCORS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteCORSWithOptions($request, $runtime);
    }

    /**
     * Updates the rewrite policy of a route for a gateway.
     *
     * @param request - UpdateGatewayRouteHTTPRewriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayRouteHTTPRewriteResponse
     *
     * @param UpdateGatewayRouteHTTPRewriteRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateGatewayRouteHTTPRewriteResponse
     */
    public function updateGatewayRouteHTTPRewriteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->httpRewriteJSON) {
            @$query['HttpRewriteJSON'] = $request->httpRewriteJSON;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayRouteHTTPRewrite',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayRouteHTTPRewriteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayRouteHTTPRewriteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the rewrite policy of a route for a gateway.
     *
     * @param request - UpdateGatewayRouteHTTPRewriteRequest
     *
     * @returns UpdateGatewayRouteHTTPRewriteResponse
     *
     * @param UpdateGatewayRouteHTTPRewriteRequest $request
     *
     * @return UpdateGatewayRouteHTTPRewriteResponse
     */
    public function updateGatewayRouteHTTPRewrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteHTTPRewriteWithOptions($request, $runtime);
    }

    /**
     * Modifies the header configuration policy of a route.
     *
     * @param request - UpdateGatewayRouteHeaderOpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayRouteHeaderOpResponse
     *
     * @param UpdateGatewayRouteHeaderOpRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateGatewayRouteHeaderOpResponse
     */
    public function updateGatewayRouteHeaderOpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->headerOpJSON) {
            @$query['HeaderOpJSON'] = $request->headerOpJSON;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayRouteHeaderOp',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayRouteHeaderOpResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayRouteHeaderOpResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the header configuration policy of a route.
     *
     * @param request - UpdateGatewayRouteHeaderOpRequest
     *
     * @returns UpdateGatewayRouteHeaderOpResponse
     *
     * @param UpdateGatewayRouteHeaderOpRequest $request
     *
     * @return UpdateGatewayRouteHeaderOpResponse
     */
    public function updateGatewayRouteHeaderOp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteHeaderOpWithOptions($request, $runtime);
    }

    /**
     * Modifies the retry policy of a route.
     *
     * @param tmpReq - UpdateGatewayRouteRetryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayRouteRetryResponse
     *
     * @param UpdateGatewayRouteRetryRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateGatewayRouteRetryResponse
     */
    public function updateGatewayRouteRetryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayRouteRetryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->retryJSON) {
            $request->retryJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->retryJSON, 'RetryJSON', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->retryJSONShrink) {
            @$query['RetryJSON'] = $request->retryJSONShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayRouteRetry',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayRouteRetryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayRouteRetryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the retry policy of a route.
     *
     * @param request - UpdateGatewayRouteRetryRequest
     *
     * @returns UpdateGatewayRouteRetryResponse
     *
     * @param UpdateGatewayRouteRetryRequest $request
     *
     * @return UpdateGatewayRouteRetryResponse
     */
    public function updateGatewayRouteRetry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteRetryWithOptions($request, $runtime);
    }

    /**
     * Modifies the timeout policy of a route.
     *
     * @param tmpReq - UpdateGatewayRouteTimeoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayRouteTimeoutResponse
     *
     * @param UpdateGatewayRouteTimeoutRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateGatewayRouteTimeoutResponse
     */
    public function updateGatewayRouteTimeoutWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayRouteTimeoutShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->timeoutJSON) {
            $request->timeoutJSONShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->timeoutJSON, 'TimeoutJSON', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->timeoutJSONShrink) {
            @$query['TimeoutJSON'] = $request->timeoutJSONShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayRouteTimeout',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayRouteTimeoutResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayRouteTimeoutResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the timeout policy of a route.
     *
     * @param request - UpdateGatewayRouteTimeoutRequest
     *
     * @returns UpdateGatewayRouteTimeoutResponse
     *
     * @param UpdateGatewayRouteTimeoutRequest $request
     *
     * @return UpdateGatewayRouteTimeoutResponse
     */
    public function updateGatewayRouteTimeout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteTimeoutWithOptions($request, $runtime);
    }

    /**
     * Updates the WAF status of a route.
     *
     * @param request - UpdateGatewayRouteWafStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayRouteWafStatusResponse
     *
     * @param UpdateGatewayRouteWafStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateGatewayRouteWafStatusResponse
     */
    public function updateGatewayRouteWafStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->enableWaf) {
            @$query['EnableWaf'] = $request->enableWaf;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->routeId) {
            @$query['RouteId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayRouteWafStatus',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayRouteWafStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayRouteWafStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the WAF status of a route.
     *
     * @param request - UpdateGatewayRouteWafStatusRequest
     *
     * @returns UpdateGatewayRouteWafStatusResponse
     *
     * @param UpdateGatewayRouteWafStatusRequest $request
     *
     * @return UpdateGatewayRouteWafStatusResponse
     */
    public function updateGatewayRouteWafStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteWafStatusWithOptions($request, $runtime);
    }

    /**
     * 更新服务
     *
     * @param tmpReq - UpdateGatewayServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayServiceResponse
     *
     * @param UpdateGatewayServiceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateGatewayServiceResponse
     */
    public function updateGatewayServiceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayServiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dnsServerList) {
            $request->dnsServerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dnsServerList, 'DnsServerList', 'json');
        }

        if (null !== $tmpReq->ipList) {
            $request->ipListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ipList, 'IpList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dnsServerListShrink) {
            @$query['DnsServerList'] = $request->dnsServerListShrink;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ipListShrink) {
            @$query['IpList'] = $request->ipListShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->servicePort) {
            @$query['ServicePort'] = $request->servicePort;
        }

        if (null !== $request->serviceProtocol) {
            @$query['ServiceProtocol'] = $request->serviceProtocol;
        }

        if (null !== $request->tlsSetting) {
            @$query['TlsSetting'] = $request->tlsSetting;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayService',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新服务
     *
     * @param request - UpdateGatewayServiceRequest
     *
     * @returns UpdateGatewayServiceResponse
     *
     * @param UpdateGatewayServiceRequest $request
     *
     * @return UpdateGatewayServiceResponse
     */
    public function updateGatewayService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceWithOptions($request, $runtime);
    }

    /**
     * Updates the health check policy of a specified service in a cloud-native gateway.
     *
     * @param tmpReq - UpdateGatewayServiceCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayServiceCheckResponse
     *
     * @param UpdateGatewayServiceCheckRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateGatewayServiceCheckResponse
     */
    public function updateGatewayServiceCheckWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayServiceCheckShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->expectedStatuses) {
            $request->expectedStatusesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->expectedStatuses, 'ExpectedStatuses', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->check) {
            @$query['Check'] = $request->check;
        }

        if (null !== $request->expectedStatusesShrink) {
            @$query['ExpectedStatuses'] = $request->expectedStatusesShrink;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->httpHost) {
            @$query['HttpHost'] = $request->httpHost;
        }

        if (null !== $request->httpPath) {
            @$query['HttpPath'] = $request->httpPath;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayServiceCheck',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayServiceCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayServiceCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the health check policy of a specified service in a cloud-native gateway.
     *
     * @param request - UpdateGatewayServiceCheckRequest
     *
     * @returns UpdateGatewayServiceCheckResponse
     *
     * @param UpdateGatewayServiceCheckRequest $request
     *
     * @return UpdateGatewayServiceCheckResponse
     */
    public function updateGatewayServiceCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceCheckWithOptions($request, $runtime);
    }

    /**
     * Updates the traffic policy of a service.
     *
     * @param tmpReq - UpdateGatewayServiceTrafficPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayServiceTrafficPolicyResponse
     *
     * @param UpdateGatewayServiceTrafficPolicyRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateGatewayServiceTrafficPolicyResponse
     */
    public function updateGatewayServiceTrafficPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGatewayServiceTrafficPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->gatewayTrafficPolicy) {
            $request->gatewayTrafficPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->gatewayTrafficPolicy, 'GatewayTrafficPolicy', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayTrafficPolicyShrink) {
            @$query['GatewayTrafficPolicy'] = $request->gatewayTrafficPolicyShrink;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayServiceTrafficPolicy',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayServiceTrafficPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayServiceTrafficPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the traffic policy of a service.
     *
     * @param request - UpdateGatewayServiceTrafficPolicyRequest
     *
     * @returns UpdateGatewayServiceTrafficPolicyResponse
     *
     * @param UpdateGatewayServiceTrafficPolicyRequest $request
     *
     * @return UpdateGatewayServiceTrafficPolicyResponse
     */
    public function updateGatewayServiceTrafficPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceTrafficPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the version of a service.
     *
     * @param request - UpdateGatewayServiceVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayServiceVersionResponse
     *
     * @param UpdateGatewayServiceVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateGatewayServiceVersionResponse
     */
    public function updateGatewayServiceVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayServiceVersion',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewayServiceVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the version of a service.
     *
     * @param request - UpdateGatewayServiceVersionRequest
     *
     * @returns UpdateGatewayServiceVersionResponse
     *
     * @param UpdateGatewayServiceVersionRequest $request
     *
     * @return UpdateGatewayServiceVersionResponse
     */
    public function updateGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * Updates the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway.
     *
     * @remarks
     * You can call this operation to update the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway. If you add nodes or increase the specifications, you will incur fees. For more information, see [Pricing](https://help.aliyun.com/document_detail/250950.html).
     *
     * @param request - UpdateGatewaySpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewaySpecResponse
     *
     * @param UpdateGatewaySpecRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGatewaySpecResponse
     */
    public function updateGatewaySpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->replica) {
            @$query['Replica'] = $request->replica;
        }

        if (null !== $request->spec) {
            @$query['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewaySpec',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGatewaySpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGatewaySpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway.
     *
     * @remarks
     * You can call this operation to update the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway. If you add nodes or increase the specifications, you will incur fees. For more information, see [Pricing](https://help.aliyun.com/document_detail/250950.html).
     *
     * @param request - UpdateGatewaySpecRequest
     *
     * @returns UpdateGatewaySpecResponse
     *
     * @param UpdateGatewaySpecRequest $request
     *
     * @return UpdateGatewaySpecResponse
     */
    public function updateGatewaySpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewaySpecWithOptions($request, $runtime);
    }

    /**
     * Updates the version number of the destination cluster.
     *
     * @param request - UpdateImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageResponse
     *
     * @param UpdateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->versionCode) {
            @$query['VersionCode'] = $request->versionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateImage',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the version number of the destination cluster.
     *
     * @param request - UpdateImageRequest
     *
     * @returns UpdateImageResponse
     *
     * @param UpdateImageRequest $request
     *
     * @return UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }

    /**
     * 更新隔离规则.
     *
     * @param request - UpdateIsolationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIsolationRuleResponse
     *
     * @param UpdateIsolationRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateIsolationRuleResponse
     */
    public function updateIsolationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->limitApp) {
            @$query['LimitApp'] = $request->limitApp;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIsolationRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateIsolationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新隔离规则.
     *
     * @param request - UpdateIsolationRuleRequest
     *
     * @returns UpdateIsolationRuleResponse
     *
     * @param UpdateIsolationRuleRequest $request
     *
     * @return UpdateIsolationRuleResponse
     */
    public function updateIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * 更新同AZ路由规则.
     *
     * @param request - UpdateLocalityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLocalityRuleResponse
     *
     * @param UpdateLocalityRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateLocalityRuleResponse
     */
    public function updateLocalityRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLocalityRule',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLocalityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLocalityRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新同AZ路由规则.
     *
     * @param request - UpdateLocalityRuleRequest
     *
     * @returns UpdateLocalityRuleResponse
     *
     * @param UpdateLocalityRuleRequest $request
     *
     * @return UpdateLocalityRuleResponse
     */
    public function updateLocalityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLocalityRuleWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of a canary release for messaging of an application.
     *
     * @param tmpReq - UpdateMessageQueueRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMessageQueueRouteResponse
     *
     * @param UpdateMessageQueueRouteRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMessageQueueRouteResponse
     */
    public function updateMessageQueueRouteWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMessageQueueRouteShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->filterSide) {
            @$query['FilterSide'] = $request->filterSide;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMessageQueueRoute',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMessageQueueRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMessageQueueRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a canary release for messaging of an application.
     *
     * @param request - UpdateMessageQueueRouteRequest
     *
     * @returns UpdateMessageQueueRouteResponse
     *
     * @param UpdateMessageQueueRouteRequest $request
     *
     * @return UpdateMessageQueueRouteResponse
     */
    public function updateMessageQueueRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMessageQueueRouteWithOptions($request, $runtime);
    }

    /**
     * Updates a migration task.
     *
     * @param request - UpdateMigrationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMigrationTaskResponse
     *
     * @param UpdateMigrationTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMigrationTaskResponse
     */
    public function updateMigrationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->originInstanceAddress) {
            @$query['OriginInstanceAddress'] = $request->originInstanceAddress;
        }

        if (null !== $request->originInstanceName) {
            @$query['OriginInstanceName'] = $request->originInstanceName;
        }

        if (null !== $request->originInstanceNamespace) {
            @$query['OriginInstanceNamespace'] = $request->originInstanceNamespace;
        }

        if (null !== $request->projectDesc) {
            @$query['ProjectDesc'] = $request->projectDesc;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->syncType) {
            @$query['SyncType'] = $request->syncType;
        }

        if (null !== $request->targetClusterName) {
            @$query['TargetClusterName'] = $request->targetClusterName;
        }

        if (null !== $request->targetClusterUrl) {
            @$query['TargetClusterUrl'] = $request->targetClusterUrl;
        }

        if (null !== $request->targetInstanceId) {
            @$query['TargetInstanceId'] = $request->targetInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMigrationTask',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMigrationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a migration task.
     *
     * @param request - UpdateMigrationTaskRequest
     *
     * @returns UpdateMigrationTaskResponse
     *
     * @param UpdateMigrationTaskRequest $request
     *
     * @return UpdateMigrationTaskResponse
     */
    public function updateMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a Nacos cluster.
     *
     * @param request - UpdateNacosClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNacosClusterResponse
     *
     * @param UpdateNacosClusterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateNacosClusterResponse
     */
    public function updateNacosClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->checkPort) {
            @$query['CheckPort'] = $request->checkPort;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->healthChecker) {
            @$query['HealthChecker'] = $request->healthChecker;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->useInstancePortForCheck) {
            @$query['UseInstancePortForCheck'] = $request->useInstancePortForCheck;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNacosCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateNacosClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNacosClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a Nacos cluster.
     *
     * @param request - UpdateNacosClusterRequest
     *
     * @returns UpdateNacosClusterResponse
     *
     * @param UpdateNacosClusterRequest $request
     *
     * @return UpdateNacosClusterResponse
     */
    public function updateNacosCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosClusterWithOptions($request, $runtime);
    }

    /**
     * Updates a Nacos configuration.
     *
     * @remarks
     * >  The current API operation is not provided in Nacos SDK. For more information about Nacos SDK, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - UpdateNacosConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNacosConfigResponse
     *
     * @param UpdateNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateNacosConfigResponse
     */
    public function updateNacosConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->betaIps) {
            @$query['BetaIps'] = $request->betaIps;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->encryptedDataKey) {
            @$query['EncryptedDataKey'] = $request->encryptedDataKey;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNacosConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNacosConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a Nacos configuration.
     *
     * @remarks
     * >  The current API operation is not provided in Nacos SDK. For more information about Nacos SDK, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - UpdateNacosConfigRequest
     *
     * @returns UpdateNacosConfigResponse
     *
     * @param UpdateNacosConfigRequest $request
     *
     * @return UpdateNacosConfigResponse
     */
    public function updateNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosConfigWithOptions($request, $runtime);
    }

    /**
     * 更新nacos灰度配置.
     *
     * @param request - UpdateNacosGrayConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNacosGrayConfigResponse
     *
     * @param UpdateNacosGrayConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateNacosGrayConfigResponse
     */
    public function updateNacosGrayConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->grayRule) {
            @$query['GrayRule'] = $request->grayRule;
        }

        if (null !== $request->grayRuleName) {
            @$query['GrayRuleName'] = $request->grayRuleName;
        }

        if (null !== $request->grayRulePriority) {
            @$query['GrayRulePriority'] = $request->grayRulePriority;
        }

        if (null !== $request->grayType) {
            @$query['GrayType'] = $request->grayType;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->opType) {
            @$query['OpType'] = $request->opType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->stopGray) {
            @$query['StopGray'] = $request->stopGray;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNacosGrayConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateNacosGrayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNacosGrayConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新nacos灰度配置.
     *
     * @param request - UpdateNacosGrayConfigRequest
     *
     * @returns UpdateNacosGrayConfigResponse
     *
     * @param UpdateNacosGrayConfigRequest $request
     *
     * @return UpdateNacosGrayConfigResponse
     */
    public function updateNacosGrayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosGrayConfigWithOptions($request, $runtime);
    }

    /**
     * Updates the information about application instances that are registered with a Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - UpdateNacosInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNacosInstanceResponse
     *
     * @param UpdateNacosInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateNacosInstanceResponse
     */
    public function updateNacosInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->ephemeral) {
            @$query['Ephemeral'] = $request->ephemeral;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        $body = [];
        if (null !== $request->metadata) {
            @$body['Metadata'] = $request->metadata;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNacosInstance',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNacosInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about application instances that are registered with a Nacos instance.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - UpdateNacosInstanceRequest
     *
     * @returns UpdateNacosInstanceResponse
     *
     * @param UpdateNacosInstanceRequest $request
     *
     * @return UpdateNacosInstanceResponse
     */
    public function updateNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a Nacos service.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - UpdateNacosServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNacosServiceResponse
     *
     * @param UpdateNacosServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateNacosServiceResponse
     */
    public function updateNacosServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->protectThreshold) {
            @$query['ProtectThreshold'] = $request->protectThreshold;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNacosService',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNacosServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a Nacos service.
     *
     * @remarks
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *
     * @param request - UpdateNacosServiceRequest
     *
     * @returns UpdateNacosServiceResponse
     *
     * @param UpdateNacosServiceRequest $request
     *
     * @return UpdateNacosServiceResponse
     */
    public function updateNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosServiceWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of a plug-in.
     *
     * @param tmpReq - UpdatePluginConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePluginConfigResponse
     *
     * @param UpdatePluginConfigRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdatePluginConfigResponse
     */
    public function updatePluginConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePluginConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceIdList) {
            $request->resourceIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIdList, 'ResourceIdList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->configLevel) {
            @$query['ConfigLevel'] = $request->configLevel;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->gmtCreate) {
            @$query['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->gmtModified) {
            @$query['GmtModified'] = $request->gmtModified;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->resourceIdListShrink) {
            @$query['ResourceIdList'] = $request->resourceIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePluginConfig',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePluginConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a plug-in.
     *
     * @param request - UpdatePluginConfigRequest
     *
     * @returns UpdatePluginConfigResponse
     *
     * @param UpdatePluginConfigRequest $request
     *
     * @return UpdatePluginConfigResponse
     */
    public function updatePluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePluginConfigWithOptions($request, $runtime);
    }

    /**
     * Updates a certificate.
     *
     * @param request - UpdateSSLCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSSLCertResponse
     *
     * @param UpdateSSLCertRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateSSLCertResponse
     */
    public function updateSSLCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSSLCert',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSSLCertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a certificate.
     *
     * @param request - UpdateSSLCertRequest
     *
     * @returns UpdateSSLCertResponse
     *
     * @param UpdateSSLCertRequest $request
     *
     * @return UpdateSSLCertResponse
     */
    public function updateSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSSLCertWithOptions($request, $runtime);
    }

    /**
     * Modifies service sources of a cloud-native gateway. You can modify only Container Service for Kubernetes (ACK) service sources that contain configurations related to Ingress resource monitoring.
     *
     * @param tmpReq - UpdateServiceSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceSourceResponse
     *
     * @param UpdateServiceSourceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateServiceSourceResponse
     */
    public function updateServiceSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateServiceSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ingressOptionsRequest) {
            $request->ingressOptionsRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ingressOptionsRequest, 'IngressOptionsRequest', 'json');
        }

        if (null !== $tmpReq->pathList) {
            $request->pathListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pathList, 'PathList', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ingressOptionsRequestShrink) {
            @$query['IngressOptionsRequest'] = $request->ingressOptionsRequestShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pathListShrink) {
            @$query['PathList'] = $request->pathListShrink;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceSource',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies service sources of a cloud-native gateway. You can modify only Container Service for Kubernetes (ACK) service sources that contain configurations related to Ingress resource monitoring.
     *
     * @param request - UpdateServiceSourceRequest
     *
     * @returns UpdateServiceSourceResponse
     *
     * @param UpdateServiceSourceRequest $request
     *
     * @return UpdateServiceSourceResponse
     */
    public function updateServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceSourceWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a ZooKeeper node.
     *
     * @param request - UpdateZnodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateZnodeResponse
     *
     * @param UpdateZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateZnodeResponse
     */
    public function updateZnodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateZnode',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateZnodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a ZooKeeper node.
     *
     * @param request - UpdateZnodeRequest
     *
     * @returns UpdateZnodeResponse
     *
     * @param UpdateZnodeRequest $request
     *
     * @return UpdateZnodeResponse
     */
    public function updateZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateZnodeWithOptions($request, $runtime);
    }

    /**
     * Upgrades the version of a cluster.
     *
     * @param request - UpgradeClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeClusterResponse
     *
     * @param UpgradeClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestPars) {
            @$query['RequestPars'] = $request->requestPars;
        }

        if (null !== $request->upgradeVersion) {
            @$query['UpgradeVersion'] = $request->upgradeVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeCluster',
            'version' => '2019-05-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Upgrades the version of a cluster.
     *
     * @param request - UpgradeClusterRequest
     *
     * @returns UpgradeClusterResponse
     *
     * @param UpgradeClusterRequest $request
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterWithOptions($request, $runtime);
    }
}
