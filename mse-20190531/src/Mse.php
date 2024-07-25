<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneSentinelRuleFromAhasRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneSentinelRuleFromAhasResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationResponse;
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
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationInstanceListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationInstanceListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListResponse;
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
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsResponse;
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
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosConfigResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Mse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 新增服务鉴权规则
     *  *
     * @param AddAuthPolicyRequest $request AddAuthPolicyRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAuthPolicyResponse AddAuthPolicyResponse
     */
    public function addAuthPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->authRule)) {
            $query['AuthRule'] = $request->authRule;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->k8sNamespace)) {
            $query['K8sNamespace'] = $request->k8sNamespace;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAuthPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增服务鉴权规则
     *  *
     * @param AddAuthPolicyRequest $request AddAuthPolicyRequest
     *
     * @return AddAuthPolicyResponse AddAuthPolicyResponse
     */
    public function addAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates authorization information for a gateway.
     *  *
     * @param AddAuthResourceRequest $tmpReq  AddAuthResourceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAuthResourceResponse AddAuthResourceResponse
     */
    public function addAuthResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddAuthResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authResourceHeaderList)) {
            $request->authResourceHeaderListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authResourceHeaderList, 'AuthResourceHeaderList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->authId)) {
            $query['AuthId'] = $request->authId;
        }
        if (!Utils::isUnset($request->authResourceHeaderListShrink)) {
            $query['AuthResourceHeaderList'] = $request->authResourceHeaderListShrink;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->ignoreCase)) {
            $query['IgnoreCase'] = $request->ignoreCase;
        }
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAuthResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAuthResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates authorization information for a gateway.
     *  *
     * @param AddAuthResourceRequest $request AddAuthResourceRequest
     *
     * @return AddAuthResourceResponse AddAuthResourceResponse
     */
    public function addAuthResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAuthResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a blacklist or a whitelist.
     *  *
     * @param AddBlackWhiteListRequest $request AddBlackWhiteListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddBlackWhiteListResponse AddBlackWhiteListResponse
     */
    public function addBlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->isWhite)) {
            $query['IsWhite'] = $request->isWhite;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->resourceIdJsonList)) {
            $query['ResourceIdJsonList'] = $request->resourceIdJsonList;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBlackWhiteList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a blacklist or a whitelist.
     *  *
     * @param AddBlackWhiteListRequest $request AddBlackWhiteListRequest
     *
     * @return AddBlackWhiteListResponse AddBlackWhiteListResponse
     */
    public function addBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a gateway.
     *  *
     * @param AddGatewayRequest $tmpReq  AddGatewayRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGatewayResponse AddGatewayResponse
     */
    public function addGatewayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGatewayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->zoneInfo)) {
            $request->zoneInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->zoneInfo, 'ZoneInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clbNetworkType)) {
            $query['ClbNetworkType'] = $request->clbNetworkType;
        }
        if (!Utils::isUnset($request->enableHardwareAcceleration)) {
            $query['EnableHardwareAcceleration'] = $request->enableHardwareAcceleration;
        }
        if (!Utils::isUnset($request->enableSls)) {
            $query['EnableSls'] = $request->enableSls;
        }
        if (!Utils::isUnset($request->enableXtrace)) {
            $query['EnableXtrace'] = $request->enableXtrace;
        }
        if (!Utils::isUnset($request->enterpriseSecurityGroup)) {
            $query['EnterpriseSecurityGroup'] = $request->enterpriseSecurityGroup;
        }
        if (!Utils::isUnset($request->internetSlbSpec)) {
            $query['InternetSlbSpec'] = $request->internetSlbSpec;
        }
        if (!Utils::isUnset($request->mserVersion)) {
            $query['MserVersion'] = $request->mserVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nlbNetworkType)) {
            $query['NlbNetworkType'] = $request->nlbNetworkType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->replica)) {
            $query['Replica'] = $request->replica;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->slbSpec)) {
            $query['SlbSpec'] = $request->slbSpec;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchId2)) {
            $query['VSwitchId2'] = $request->vSwitchId2;
        }
        if (!Utils::isUnset($request->vpc)) {
            $query['Vpc'] = $request->vpc;
        }
        if (!Utils::isUnset($request->xtraceRatio)) {
            $query['XtraceRatio'] = $request->xtraceRatio;
        }
        if (!Utils::isUnset($request->zoneInfoShrink)) {
            $query['ZoneInfo'] = $request->zoneInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGateway',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a gateway.
     *  *
     * @param AddGatewayRequest $request AddGatewayRequest
     *
     * @return AddGatewayResponse AddGatewayResponse
     */
    public function addGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an authentication configuration for a gateway.
     *  *
     * @param AddGatewayAuthRequest $tmpReq  AddGatewayAuthRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGatewayAuthResponse AddGatewayAuthResponse
     */
    public function addGatewayAuthWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGatewayAuthShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authResourceList)) {
            $request->authResourceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authResourceList, 'AuthResourceList', 'json');
        }
        if (!Utils::isUnset($tmpReq->externalAuthZJSON)) {
            $request->externalAuthZJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->externalAuthZJSON, 'ExternalAuthZJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->scopesList)) {
            $request->scopesListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scopesList, 'ScopesList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->authResourceConfig)) {
            $query['AuthResourceConfig'] = $request->authResourceConfig;
        }
        if (!Utils::isUnset($request->authResourceListShrink)) {
            $query['AuthResourceList'] = $request->authResourceListShrink;
        }
        if (!Utils::isUnset($request->authResourceMode)) {
            $query['AuthResourceMode'] = $request->authResourceMode;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientSecret)) {
            $query['ClientSecret'] = $request->clientSecret;
        }
        if (!Utils::isUnset($request->cookieDomain)) {
            $query['CookieDomain'] = $request->cookieDomain;
        }
        if (!Utils::isUnset($request->externalAuthZJSONShrink)) {
            $query['ExternalAuthZJSON'] = $request->externalAuthZJSONShrink;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->isWhite)) {
            $query['IsWhite'] = $request->isWhite;
        }
        if (!Utils::isUnset($request->issuer)) {
            $query['Issuer'] = $request->issuer;
        }
        if (!Utils::isUnset($request->jwks)) {
            $query['Jwks'] = $request->jwks;
        }
        if (!Utils::isUnset($request->loginUrl)) {
            $query['LoginUrl'] = $request->loginUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->redirectUrl)) {
            $query['RedirectUrl'] = $request->redirectUrl;
        }
        if (!Utils::isUnset($request->scopesListShrink)) {
            $query['ScopesList'] = $request->scopesListShrink;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->sub)) {
            $query['Sub'] = $request->sub;
        }
        if (!Utils::isUnset($request->tokenName)) {
            $query['TokenName'] = $request->tokenName;
        }
        if (!Utils::isUnset($request->tokenNamePrefix)) {
            $query['TokenNamePrefix'] = $request->tokenNamePrefix;
        }
        if (!Utils::isUnset($request->tokenPass)) {
            $query['TokenPass'] = $request->tokenPass;
        }
        if (!Utils::isUnset($request->tokenPosition)) {
            $query['TokenPosition'] = $request->tokenPosition;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayAuth',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an authentication configuration for a gateway.
     *  *
     * @param AddGatewayAuthRequest $request AddGatewayAuthRequest
     *
     * @return AddGatewayAuthResponse AddGatewayAuthResponse
     */
    public function addGatewayAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayAuthWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a consumer on which a gateway performs authentication operations.
     *  *
     * @param AddGatewayAuthConsumerRequest $request AddGatewayAuthConsumerRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGatewayAuthConsumerResponse AddGatewayAuthConsumerResponse
     */
    public function addGatewayAuthConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->jwks)) {
            $query['Jwks'] = $request->jwks;
        }
        if (!Utils::isUnset($request->keyName)) {
            $query['KeyName'] = $request->keyName;
        }
        if (!Utils::isUnset($request->keyValue)) {
            $query['KeyValue'] = $request->keyValue;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tokenName)) {
            $query['TokenName'] = $request->tokenName;
        }
        if (!Utils::isUnset($request->tokenPass)) {
            $query['TokenPass'] = $request->tokenPass;
        }
        if (!Utils::isUnset($request->tokenPosition)) {
            $query['TokenPosition'] = $request->tokenPosition;
        }
        if (!Utils::isUnset($request->tokenPrefix)) {
            $query['TokenPrefix'] = $request->tokenPrefix;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayAuthConsumer',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a consumer on which a gateway performs authentication operations.
     *  *
     * @param AddGatewayAuthConsumerRequest $request AddGatewayAuthConsumerRequest
     *
     * @return AddGatewayAuthConsumerResponse AddGatewayAuthConsumerResponse
     */
    public function addGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a domain name with a gateway.
     *  *
     * @param AddGatewayDomainRequest $request AddGatewayDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGatewayDomainResponse AddGatewayDomainResponse
     */
    public function addGatewayDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->http2)) {
            $query['Http2'] = $request->http2;
        }
        if (!Utils::isUnset($request->mustHttps)) {
            $query['MustHttps'] = $request->mustHttps;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->tlsMax)) {
            $query['TlsMax'] = $request->tlsMax;
        }
        if (!Utils::isUnset($request->tlsMin)) {
            $query['TlsMin'] = $request->tlsMin;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayDomain',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a domain name with a gateway.
     *  *
     * @param AddGatewayDomainRequest $request AddGatewayDomainRequest
     *
     * @return AddGatewayDomainResponse AddGatewayDomainResponse
     */
    public function addGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a gateway route.
     *  *
     * @param AddGatewayRouteRequest $tmpReq  AddGatewayRouteRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGatewayRouteResponse AddGatewayRouteResponse
     */
    public function addGatewayRouteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGatewayRouteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->directResponseJSON)) {
            $request->directResponseJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->directResponseJSON, 'DirectResponseJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->fallbackServices)) {
            $request->fallbackServicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fallbackServices, 'FallbackServices', 'json');
        }
        if (!Utils::isUnset($tmpReq->predicates)) {
            $request->predicatesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->predicates, 'Predicates', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirectJSON)) {
            $request->redirectJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirectJSON, 'RedirectJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->services)) {
            $request->servicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->services, 'Services', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->directResponseJSONShrink)) {
            $query['DirectResponseJSON'] = $request->directResponseJSONShrink;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->domainIdListJSON)) {
            $query['DomainIdListJSON'] = $request->domainIdListJSON;
        }
        if (!Utils::isUnset($request->enableWaf)) {
            $query['EnableWaf'] = $request->enableWaf;
        }
        if (!Utils::isUnset($request->fallback)) {
            $query['Fallback'] = $request->fallback;
        }
        if (!Utils::isUnset($request->fallbackServicesShrink)) {
            $query['FallbackServices'] = $request->fallbackServicesShrink;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policies)) {
            $query['Policies'] = $request->policies;
        }
        if (!Utils::isUnset($request->predicatesShrink)) {
            $query['Predicates'] = $request->predicatesShrink;
        }
        if (!Utils::isUnset($request->redirectJSONShrink)) {
            $query['RedirectJSON'] = $request->redirectJSONShrink;
        }
        if (!Utils::isUnset($request->routeOrder)) {
            $query['RouteOrder'] = $request->routeOrder;
        }
        if (!Utils::isUnset($request->routeType)) {
            $query['RouteType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->servicesShrink)) {
            $query['Services'] = $request->servicesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a gateway route.
     *  *
     * @param AddGatewayRouteRequest $request AddGatewayRouteRequest
     *
     * @return AddGatewayRouteResponse AddGatewayRouteResponse
     */
    public function addGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a service version.
     *  *
     * @param AddGatewayServiceVersionRequest $request AddGatewayServiceVersionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGatewayServiceVersionResponse AddGatewayServiceVersionResponse
     */
    public function addGatewayServiceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayServiceVersion',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a service version.
     *  *
     * @param AddGatewayServiceVersionRequest $request AddGatewayServiceVersionRequest
     *
     * @return AddGatewayServiceVersionResponse AddGatewayServiceVersionResponse
     */
    public function addGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a Server Load Balancer (SLB) instance with a gateway.
     *  *
     * @param AddGatewaySlbRequest $tmpReq  AddGatewaySlbRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGatewaySlbResponse AddGatewaySlbResponse
     */
    public function addGatewaySlbWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGatewaySlbShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->VServiceList)) {
            $request->VServiceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->VServiceList, 'VServiceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->httpPort)) {
            $query['HttpPort'] = $request->httpPort;
        }
        if (!Utils::isUnset($request->httpsPort)) {
            $query['HttpsPort'] = $request->httpsPort;
        }
        if (!Utils::isUnset($request->httpsVServerGroupId)) {
            $query['HttpsVServerGroupId'] = $request->httpsVServerGroupId;
        }
        if (!Utils::isUnset($request->serviceWeight)) {
            $query['ServiceWeight'] = $request->serviceWeight;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->VServiceListShrink)) {
            $query['VServiceList'] = $request->VServiceListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewaySlb',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a Server Load Balancer (SLB) instance with a gateway.
     *  *
     * @param AddGatewaySlbRequest $request AddGatewaySlbRequest
     *
     * @return AddGatewaySlbResponse AddGatewaySlbResponse
     */
    public function addGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a migration task.
     *  *
     * @param AddMigrationTaskRequest $request AddMigrationTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMigrationTaskResponse AddMigrationTaskResponse
     */
    public function addMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->originInstanceAddress)) {
            $query['OriginInstanceAddress'] = $request->originInstanceAddress;
        }
        if (!Utils::isUnset($request->originInstanceName)) {
            $query['OriginInstanceName'] = $request->originInstanceName;
        }
        if (!Utils::isUnset($request->originInstanceNamespace)) {
            $query['OriginInstanceNamespace'] = $request->originInstanceNamespace;
        }
        if (!Utils::isUnset($request->projectDesc)) {
            $query['ProjectDesc'] = $request->projectDesc;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->syncType)) {
            $query['SyncType'] = $request->syncType;
        }
        if (!Utils::isUnset($request->targetClusterName)) {
            $query['TargetClusterName'] = $request->targetClusterName;
        }
        if (!Utils::isUnset($request->targetClusterUrl)) {
            $query['TargetClusterUrl'] = $request->targetClusterUrl;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $query['TargetInstanceId'] = $request->targetInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMigrationTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a migration task.
     *  *
     * @param AddMigrationTaskRequest $request AddMigrationTaskRequest
     *
     * @return AddMigrationTaskResponse AddMigrationTaskResponse
     */
    public function addMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a mock rule.
     *  *
     * @param AddMockRuleRequest $request AddMockRuleRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMockRuleResponse AddMockRuleResponse
     */
    public function addMockRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerAppIds)) {
            $query['ConsumerAppIds'] = $request->consumerAppIds;
        }
        if (!Utils::isUnset($request->dubboMockItems)) {
            $query['DubboMockItems'] = $request->dubboMockItems;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->extraJson)) {
            $query['ExtraJson'] = $request->extraJson;
        }
        if (!Utils::isUnset($request->mockType)) {
            $query['MockType'] = $request->mockType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->providerAppId)) {
            $query['ProviderAppId'] = $request->providerAppId;
        }
        if (!Utils::isUnset($request->providerAppName)) {
            $query['ProviderAppName'] = $request->providerAppName;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->scMockItems)) {
            $query['ScMockItems'] = $request->scMockItems;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMockRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a mock rule.
     *  *
     * @param AddMockRuleRequest $request AddMockRuleRequest
     *
     * @return AddMockRuleResponse AddMockRuleResponse
     */
    public function addMockRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMockRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a certificate with a domain name of a gateway. You can specify a certificate that is hosted in Alibaba Cloud Security.
     *  *
     * @param AddSSLCertRequest $request AddSSLCertRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSSLCertResponse AddSSLCertResponse
     */
    public function addSSLCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSSLCert',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a certificate with a domain name of a gateway. You can specify a certificate that is hosted in Alibaba Cloud Security.
     *  *
     * @param AddSSLCertRequest $request AddSSLCertRequest
     *
     * @return AddSSLCertResponse AddSSLCertResponse
     */
    public function addSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSSLCertWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a security group rule for a gateway.
     *  *
     * @param AddSecurityGroupRuleRequest $request AddSecurityGroupRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSecurityGroupRuleResponse AddSecurityGroupRuleResponse
     */
    public function addSecurityGroupRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSecurityGroupRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a security group rule for a gateway.
     *  *
     * @param AddSecurityGroupRuleRequest $request AddSecurityGroupRuleRequest
     *
     * @return AddSecurityGroupRuleResponse AddSecurityGroupRuleResponse
     */
    public function addSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a Nacos service source.
     *  *
     * @param AddServiceSourceRequest $tmpReq  AddServiceSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddServiceSourceResponse AddServiceSourceResponse
     */
    public function addServiceSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddServiceSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->groupList)) {
            $request->groupListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupList, 'GroupList', 'json');
        }
        if (!Utils::isUnset($tmpReq->ingressOptionsRequest)) {
            $request->ingressOptionsRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ingressOptionsRequest, 'IngressOptionsRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->pathList)) {
            $request->pathListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pathList, 'PathList', 'json');
        }
        if (!Utils::isUnset($tmpReq->toAuthorizeSecurityGroups)) {
            $request->toAuthorizeSecurityGroupsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->toAuthorizeSecurityGroups, 'ToAuthorizeSecurityGroups', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->groupListShrink)) {
            $query['GroupList'] = $request->groupListShrink;
        }
        if (!Utils::isUnset($request->ingressOptionsRequestShrink)) {
            $query['IngressOptionsRequest'] = $request->ingressOptionsRequestShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pathListShrink)) {
            $query['PathList'] = $request->pathListShrink;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->toAuthorizeSecurityGroupsShrink)) {
            $query['ToAuthorizeSecurityGroups'] = $request->toAuthorizeSecurityGroupsShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddServiceSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a Nacos service source.
     *  *
     * @param AddServiceSourceRequest $request AddServiceSourceRequest
     *
     * @return AddServiceSourceResponse AddServiceSourceResponse
     */
    public function addServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Publishes a route for a gateway.
     *  *
     * @param ApplyGatewayRouteRequest $request ApplyGatewayRouteRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyGatewayRouteResponse ApplyGatewayRouteResponse
     */
    public function applyGatewayRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Publishes a route for a gateway.
     *  *
     * @param ApplyGatewayRouteRequest $request ApplyGatewayRouteRequest
     *
     * @return ApplyGatewayRouteResponse ApplyGatewayRouteResponse
     */
    public function applyGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a tag-based routing rule.
     *  *
     * @param ApplyTagPoliciesRequest $tmpReq  ApplyTagPoliciesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyTagPoliciesResponse ApplyTagPoliciesResponse
     */
    public function applyTagPoliciesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyTagPoliciesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyTagPolicies',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyTagPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a tag-based routing rule.
     *  *
     * @param ApplyTagPoliciesRequest $request ApplyTagPoliciesRequest
     *
     * @return ApplyTagPoliciesResponse ApplyTagPoliciesResponse
     */
    public function applyTagPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyTagPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary 绑定流量防护行为
     *  *
     * @param BindSentinelBlockFallbackDefinitionRequest $request BindSentinelBlockFallbackDefinitionRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return BindSentinelBlockFallbackDefinitionResponse BindSentinelBlockFallbackDefinitionResponse
     */
    public function bindSentinelBlockFallbackDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->fallbackId)) {
            $query['FallbackId'] = $request->fallbackId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindSentinelBlockFallbackDefinition',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindSentinelBlockFallbackDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 绑定流量防护行为
     *  *
     * @param BindSentinelBlockFallbackDefinitionRequest $request BindSentinelBlockFallbackDefinitionRequest
     *
     * @return BindSentinelBlockFallbackDefinitionResponse BindSentinelBlockFallbackDefinitionResponse
     */
    public function bindSentinelBlockFallbackDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindSentinelBlockFallbackDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary Clones an existing Nacos configuration from a namespace to another namespace.
     *  *
     * @description mse-200-105
     *  *
     * @param CloneNacosConfigRequest $request CloneNacosConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CloneNacosConfigResponse CloneNacosConfigResponse
     */
    public function cloneNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->originNamespaceId)) {
            $query['OriginNamespaceId'] = $request->originNamespaceId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->targetNamespaceId)) {
            $query['TargetNamespaceId'] = $request->targetNamespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Clones an existing Nacos configuration from a namespace to another namespace.
     *  *
     * @description mse-200-105
     *  *
     * @param CloneNacosConfigRequest $request CloneNacosConfigRequest
     *
     * @return CloneNacosConfigResponse CloneNacosConfigResponse
     */
    public function cloneNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 从AHAS侧复制规则
     *  *
     * @param CloneSentinelRuleFromAhasRequest $request CloneSentinelRuleFromAhasRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CloneSentinelRuleFromAhasResponse CloneSentinelRuleFromAhasResponse
     */
    public function cloneSentinelRuleFromAhasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ahasNamespace)) {
            $query['AhasNamespace'] = $request->ahasNamespace;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->isAHASPublicRegion)) {
            $query['IsAHASPublicRegion'] = $request->isAHASPublicRegion;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneSentinelRuleFromAhas',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneSentinelRuleFromAhasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从AHAS侧复制规则
     *  *
     * @param CloneSentinelRuleFromAhasRequest $request CloneSentinelRuleFromAhasRequest
     *
     * @return CloneSentinelRuleFromAhasResponse CloneSentinelRuleFromAhasResponse
     */
    public function cloneSentinelRuleFromAhas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneSentinelRuleFromAhasWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sentinelEnable)) {
            $query['SentinelEnable'] = $request->sentinelEnable;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->switchEnable)) {
            $query['SwitchEnable'] = $request->switchEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an application.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a circuit breaking rule.
     *  *
     * @param CreateCircuitBreakerRuleRequest $request CreateCircuitBreakerRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCircuitBreakerRuleResponse CreateCircuitBreakerRuleResponse
     */
    public function createCircuitBreakerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->halfOpenBaseAmountPerStep)) {
            $query['HalfOpenBaseAmountPerStep'] = $request->halfOpenBaseAmountPerStep;
        }
        if (!Utils::isUnset($request->halfOpenRecoveryStepNum)) {
            $query['HalfOpenRecoveryStepNum'] = $request->halfOpenRecoveryStepNum;
        }
        if (!Utils::isUnset($request->maxAllowedRtMs)) {
            $query['MaxAllowedRtMs'] = $request->maxAllowedRtMs;
        }
        if (!Utils::isUnset($request->minRequestAmount)) {
            $query['MinRequestAmount'] = $request->minRequestAmount;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->retryTimeoutMs)) {
            $query['RetryTimeoutMs'] = $request->retryTimeoutMs;
        }
        if (!Utils::isUnset($request->statIntervalMs)) {
            $query['StatIntervalMs'] = $request->statIntervalMs;
        }
        if (!Utils::isUnset($request->strategy)) {
            $query['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCircuitBreakerRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a circuit breaking rule.
     *  *
     * @param CreateCircuitBreakerRuleRequest $request CreateCircuitBreakerRuleRequest
     *
     * @return CreateCircuitBreakerRuleResponse CreateCircuitBreakerRuleResponse
     */
    public function createCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Microservices Engine (MSE) instance, such as an MSE ZooKeeper instance or an MSE Nacos instance.
     *  *
     * @description Before you call this API operation, you must make sure that you fully understand the billing methods and pricing of MSE.
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clusterSpecification)) {
            $query['ClusterSpecification'] = $request->clusterSpecification;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->clusterVersion)) {
            $query['ClusterVersion'] = $request->clusterVersion;
        }
        if (!Utils::isUnset($request->connectionType)) {
            $query['ConnectionType'] = $request->connectionType;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->eipEnabled)) {
            $query['EipEnabled'] = $request->eipEnabled;
        }
        if (!Utils::isUnset($request->instanceCount)) {
            $query['InstanceCount'] = $request->instanceCount;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->privateSlbSpecification)) {
            $query['PrivateSlbSpecification'] = $request->privateSlbSpecification;
        }
        if (!Utils::isUnset($request->pubNetworkFlow)) {
            $query['PubNetworkFlow'] = $request->pubNetworkFlow;
        }
        if (!Utils::isUnset($request->pubSlbSpecification)) {
            $query['PubSlbSpecification'] = $request->pubSlbSpecification;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupType)) {
            $query['SecurityGroupType'] = $request->securityGroupType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
            'action'      => 'CreateCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Microservices Engine (MSE) instance, such as an MSE ZooKeeper instance or an MSE Nacos instance.
     *  *
     * @description Before you call this API operation, you must make sure that you fully understand the billing methods and pricing of MSE.
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a namespace in a Nacos instance.
     *  *
     * @param CreateEngineNamespaceRequest $request CreateEngineNamespaceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEngineNamespaceResponse CreateEngineNamespaceResponse
     */
    public function createEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceCount)) {
            $query['ServiceCount'] = $request->serviceCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEngineNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a namespace in a Nacos instance.
     *  *
     * @param CreateEngineNamespaceRequest $request CreateEngineNamespaceRequest
     *
     * @return CreateEngineNamespaceResponse CreateEngineNamespaceResponse
     */
    public function createEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a throttling rule.
     *  *
     * @param CreateFlowRuleRequest $request CreateFlowRuleRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFlowRuleResponse CreateFlowRuleResponse
     */
    public function createFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->controlBehavior)) {
            $query['ControlBehavior'] = $request->controlBehavior;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->maxQueueingTimeMs)) {
            $query['MaxQueueingTimeMs'] = $request->maxQueueingTimeMs;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a throttling rule.
     *  *
     * @param CreateFlowRuleRequest $request CreateFlowRuleRequest
     *
     * @return CreateFlowRuleResponse CreateFlowRuleResponse
     */
    public function createFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建网关路由熔断规则
     *  *
     * @param CreateGatewayCircuitBreakerRuleRequest $request CreateGatewayCircuitBreakerRuleRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayCircuitBreakerRuleResponse CreateGatewayCircuitBreakerRuleResponse
     */
    public function createGatewayCircuitBreakerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->behaviorType)) {
            $query['BehaviorType'] = $request->behaviorType;
        }
        if (!Utils::isUnset($request->bodyEncoding)) {
            $query['BodyEncoding'] = $request->bodyEncoding;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->maxAllowedMs)) {
            $query['MaxAllowedMs'] = $request->maxAllowedMs;
        }
        if (!Utils::isUnset($request->minRequestAmount)) {
            $query['MinRequestAmount'] = $request->minRequestAmount;
        }
        if (!Utils::isUnset($request->recoveryTimeoutSec)) {
            $query['RecoveryTimeoutSec'] = $request->recoveryTimeoutSec;
        }
        if (!Utils::isUnset($request->responseContentBody)) {
            $query['ResponseContentBody'] = $request->responseContentBody;
        }
        if (!Utils::isUnset($request->responseRedirectUrl)) {
            $query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }
        if (!Utils::isUnset($request->responseStatusCode)) {
            $query['ResponseStatusCode'] = $request->responseStatusCode;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->routeName)) {
            $query['RouteName'] = $request->routeName;
        }
        if (!Utils::isUnset($request->statDurationSec)) {
            $query['StatDurationSec'] = $request->statDurationSec;
        }
        if (!Utils::isUnset($request->strategy)) {
            $query['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->triggerRatio)) {
            $query['TriggerRatio'] = $request->triggerRatio;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayCircuitBreakerRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建网关路由熔断规则
     *  *
     * @param CreateGatewayCircuitBreakerRuleRequest $request CreateGatewayCircuitBreakerRuleRequest
     *
     * @return CreateGatewayCircuitBreakerRuleResponse CreateGatewayCircuitBreakerRuleResponse
     */
    public function createGatewayCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a throttling rule for a gateway.
     *  *
     * @param CreateGatewayFlowRuleRequest $request CreateGatewayFlowRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayFlowRuleResponse CreateGatewayFlowRuleResponse
     */
    public function createGatewayFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->behaviorType)) {
            $query['BehaviorType'] = $request->behaviorType;
        }
        if (!Utils::isUnset($request->bodyEncoding)) {
            $query['BodyEncoding'] = $request->bodyEncoding;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->responseContentBody)) {
            $query['ResponseContentBody'] = $request->responseContentBody;
        }
        if (!Utils::isUnset($request->responseRedirectUrl)) {
            $query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }
        if (!Utils::isUnset($request->responseStatusCode)) {
            $query['ResponseStatusCode'] = $request->responseStatusCode;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->routeName)) {
            $query['RouteName'] = $request->routeName;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayFlowRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a throttling rule for a gateway.
     *  *
     * @param CreateGatewayFlowRuleRequest $request CreateGatewayFlowRuleRequest
     *
     * @return CreateGatewayFlowRuleResponse CreateGatewayFlowRuleResponse
     */
    public function createGatewayFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建网关路由隔离规则
     *  *
     * @param CreateGatewayIsolationRuleRequest $request CreateGatewayIsolationRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayIsolationRuleResponse CreateGatewayIsolationRuleResponse
     */
    public function createGatewayIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->behaviorType)) {
            $query['BehaviorType'] = $request->behaviorType;
        }
        if (!Utils::isUnset($request->bodyEncoding)) {
            $query['BodyEncoding'] = $request->bodyEncoding;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $query['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->responseContentBody)) {
            $query['ResponseContentBody'] = $request->responseContentBody;
        }
        if (!Utils::isUnset($request->responseRedirectUrl)) {
            $query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }
        if (!Utils::isUnset($request->responseStatusCode)) {
            $query['ResponseStatusCode'] = $request->responseStatusCode;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->routeName)) {
            $query['RouteName'] = $request->routeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayIsolationRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建网关路由隔离规则
     *  *
     * @param CreateGatewayIsolationRuleRequest $request CreateGatewayIsolationRuleRequest
     *
     * @return CreateGatewayIsolationRuleResponse CreateGatewayIsolationRuleResponse
     */
    public function createGatewayIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建隔离规则
     *  *
     * @param CreateIsolationRuleRequest $request CreateIsolationRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIsolationRuleResponse CreateIsolationRuleResponse
     */
    public function createIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIsolationRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建隔离规则
     *  *
     * @param CreateIsolationRuleRequest $request CreateIsolationRuleRequest
     *
     * @return CreateIsolationRuleResponse CreateIsolationRuleResponse
     */
    public function createIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI CreateMseServiceApplication is deprecated, please use mse::2019-05-31::CreateApplication instead
     *  *
     * @summary Creates an application.
     *  *
     * Deprecated
     *
     * @param CreateMseServiceApplicationRequest $request CreateMseServiceApplicationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMseServiceApplicationResponse CreateMseServiceApplicationResponse
     */
    public function createMseServiceApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $query['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sentinelEnable)) {
            $query['SentinelEnable'] = $request->sentinelEnable;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->switchEnable)) {
            $query['SwitchEnable'] = $request->switchEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMseServiceApplication',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMseServiceApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI CreateMseServiceApplication is deprecated, please use mse::2019-05-31::CreateApplication instead
     *  *
     * @summary Creates an application.
     *  *
     * Deprecated
     *
     * @param CreateMseServiceApplicationRequest $request CreateMseServiceApplicationRequest
     *
     * @return CreateMseServiceApplicationResponse CreateMseServiceApplicationResponse
     */
    public function createMseServiceApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMseServiceApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Nacos configuration.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param CreateNacosConfigRequest $request CreateNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNacosConfigResponse CreateNacosConfigResponse
     */
    public function createNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->betaIps)) {
            $query['BetaIps'] = $request->betaIps;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Nacos configuration.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param CreateNacosConfigRequest $request CreateNacosConfigRequest
     *
     * @return CreateNacosConfigResponse CreateNacosConfigResponse
     */
    public function createNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param CreateNacosInstanceRequest $request CreateNacosInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNacosInstanceResponse CreateNacosInstanceResponse
     */
    public function createNacosInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->ephemeral)) {
            $query['Ephemeral'] = $request->ephemeral;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $body = [];
        if (!Utils::isUnset($request->metadata)) {
            $body['Metadata'] = $request->metadata;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNacosInstance',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param CreateNacosInstanceRequest $request CreateNacosInstanceRequest
     *
     * @return CreateNacosInstanceResponse CreateNacosInstanceResponse
     */
    public function createNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Nacos service.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param CreateNacosServiceRequest $request CreateNacosServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNacosServiceResponse CreateNacosServiceResponse
     */
    public function createNacosServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ephemeral)) {
            $query['Ephemeral'] = $request->ephemeral;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->protectThreshold)) {
            $query['ProtectThreshold'] = $request->protectThreshold;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNacosService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Nacos service.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param CreateNacosServiceRequest $request CreateNacosServiceRequest
     *
     * @return CreateNacosServiceResponse CreateNacosServiceResponse
     */
    public function createNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or updates a lane for end-to-end canary release.
     *  *
     * @param CreateOrUpdateSwimmingLaneRequest $tmpReq  CreateOrUpdateSwimmingLaneRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateSwimmingLaneResponse CreateOrUpdateSwimmingLaneResponse
     */
    public function createOrUpdateSwimmingLaneWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOrUpdateSwimmingLaneShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->gatewaySwimmingLaneRouteJson)) {
            $request->gatewaySwimmingLaneRouteJsonShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->gatewaySwimmingLaneRouteJson, 'GatewaySwimmingLaneRouteJson', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->enableRules)) {
            $query['EnableRules'] = $request->enableRules;
        }
        if (!Utils::isUnset($request->entryRule)) {
            $query['EntryRule'] = $request->entryRule;
        }
        if (!Utils::isUnset($request->gatewaySwimmingLaneRouteJsonShrink)) {
            $query['GatewaySwimmingLaneRouteJson'] = $request->gatewaySwimmingLaneRouteJsonShrink;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pathIndependentPercentageEnable)) {
            $query['PathIndependentPercentageEnable'] = $request->pathIndependentPercentageEnable;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->entryRules)) {
            $body['EntryRules'] = $request->entryRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateSwimmingLane',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or updates a lane for end-to-end canary release.
     *  *
     * @param CreateOrUpdateSwimmingLaneRequest $request CreateOrUpdateSwimmingLaneRequest
     *
     * @return CreateOrUpdateSwimmingLaneResponse CreateOrUpdateSwimmingLaneResponse
     */
    public function createOrUpdateSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or updates a lane group for end-to-end canary release.
     *  *
     * @param CreateOrUpdateSwimmingLaneGroupRequest $tmpReq  CreateOrUpdateSwimmingLaneGroupRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateSwimmingLaneGroupResponse CreateOrUpdateSwimmingLaneGroupResponse
     */
    public function createOrUpdateSwimmingLaneGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOrUpdateSwimmingLaneGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->paths)) {
            $request->pathsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->paths, 'Paths', 'json');
        }
        if (!Utils::isUnset($tmpReq->routeIds)) {
            $request->routeIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->routeIds, 'RouteIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->canaryModel)) {
            $query['CanaryModel'] = $request->canaryModel;
        }
        if (!Utils::isUnset($request->dbGrayEnable)) {
            $query['DbGrayEnable'] = $request->dbGrayEnable;
        }
        if (!Utils::isUnset($request->entryApp)) {
            $query['EntryApp'] = $request->entryApp;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->messageQueueFilterSide)) {
            $query['MessageQueueFilterSide'] = $request->messageQueueFilterSide;
        }
        if (!Utils::isUnset($request->messageQueueGrayEnable)) {
            $query['MessageQueueGrayEnable'] = $request->messageQueueGrayEnable;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pathsShrink)) {
            $query['Paths'] = $request->pathsShrink;
        }
        if (!Utils::isUnset($request->recordCanaryDetail)) {
            $query['RecordCanaryDetail'] = $request->recordCanaryDetail;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->routeIdsShrink)) {
            $query['RouteIds'] = $request->routeIdsShrink;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateSwimmingLaneGroup',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or updates a lane group for end-to-end canary release.
     *  *
     * @param CreateOrUpdateSwimmingLaneGroupRequest $request CreateOrUpdateSwimmingLaneGroupRequest
     *
     * @return CreateOrUpdateSwimmingLaneGroupResponse CreateOrUpdateSwimmingLaneGroupResponse
     */
    public function createOrUpdateSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建插件配置
     *  *
     * @param CreatePluginConfigRequest $tmpReq  CreatePluginConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePluginConfigResponse CreatePluginConfigResponse
     */
    public function createPluginConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePluginConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIdList)) {
            $request->resourceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIdList, 'ResourceIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->configLevel)) {
            $query['ConfigLevel'] = $request->configLevel;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->resourceIdListShrink)) {
            $query['ResourceIdList'] = $request->resourceIdListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePluginConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建插件配置
     *  *
     * @param CreatePluginConfigRequest $request CreatePluginConfigRequest
     *
     * @return CreatePluginConfigResponse CreatePluginConfigResponse
     */
    public function createPluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPluginConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a znode.
     *  *
     * @param CreateZnodeRequest $request CreateZnodeRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateZnodeResponse CreateZnodeResponse
     */
    public function createZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateZnode',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a znode.
     *  *
     * @param CreateZnodeRequest $request CreateZnodeRequest
     *
     * @return CreateZnodeResponse CreateZnodeResponse
     */
    public function createZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createZnodeWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an authorized resource.
     *  *
     * @param DeleteAuthResourceRequest $request DeleteAuthResourceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAuthResourceResponse DeleteAuthResourceResponse
     */
    public function deleteAuthResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAuthResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an authorized resource.
     *  *
     * @param DeleteAuthResourceRequest $request DeleteAuthResourceRequest
     *
     * @return DeleteAuthResourceResponse DeleteAuthResourceResponse
     */
    public function deleteAuthResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes circuit breaking rules.
     *  *
     * @param DeleteCircuitBreakerRulesRequest $tmpReq  DeleteCircuitBreakerRulesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCircuitBreakerRulesResponse DeleteCircuitBreakerRulesResponse
     */
    public function deleteCircuitBreakerRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteCircuitBreakerRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCircuitBreakerRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCircuitBreakerRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes circuit breaking rules.
     *  *
     * @param DeleteCircuitBreakerRulesRequest $request DeleteCircuitBreakerRulesRequest
     *
     * @return DeleteCircuitBreakerRulesResponse DeleteCircuitBreakerRulesResponse
     */
    public function deleteCircuitBreakerRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCircuitBreakerRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Microservices Engine (MSE) instance.
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Microservices Engine (MSE) instance.
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a namespace from a Nacos instance.
     *  *
     * @param DeleteEngineNamespaceRequest $request DeleteEngineNamespaceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEngineNamespaceResponse DeleteEngineNamespaceResponse
     */
    public function deleteEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEngineNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a namespace from a Nacos instance.
     *  *
     * @param DeleteEngineNamespaceRequest $request DeleteEngineNamespaceRequest
     *
     * @return DeleteEngineNamespaceResponse DeleteEngineNamespaceResponse
     */
    public function deleteEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes throttling rules.
     *  *
     * @param DeleteFlowRulesRequest $tmpReq  DeleteFlowRulesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowRulesResponse DeleteFlowRulesResponse
     */
    public function deleteFlowRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteFlowRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes throttling rules.
     *  *
     * @param DeleteFlowRulesRequest $request DeleteFlowRulesRequest
     *
     * @return DeleteFlowRulesResponse DeleteFlowRulesResponse
     */
    public function deleteFlowRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a gateway.
     *  *
     * @param DeleteGatewayRequest $request DeleteGatewayRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->deleteSlb)) {
            $query['DeleteSlb'] = $request->deleteSlb;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGateway',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a gateway.
     *  *
     * @param DeleteGatewayRequest $request DeleteGatewayRequest
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
     */
    public function deleteGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a consumer on which a gateway performs authentication operations.
     *  *
     * @param DeleteGatewayAuthConsumerRequest $request DeleteGatewayAuthConsumerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayAuthConsumerResponse DeleteGatewayAuthConsumerResponse
     */
    public function deleteGatewayAuthConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayAuthConsumer',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a consumer on which a gateway performs authentication operations.
     *  *
     * @param DeleteGatewayAuthConsumerRequest $request DeleteGatewayAuthConsumerRequest
     *
     * @return DeleteGatewayAuthConsumerResponse DeleteGatewayAuthConsumerResponse
     */
    public function deleteGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes resource permissions from the consumer on which a gateway performs authentication operations.
     *  *
     * @param DeleteGatewayAuthConsumerResourceRequest $request DeleteGatewayAuthConsumerResourceRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayAuthConsumerResourceResponse DeleteGatewayAuthConsumerResourceResponse
     */
    public function deleteGatewayAuthConsumerResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->idList)) {
            $query['IdList'] = $request->idList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayAuthConsumerResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes resource permissions from the consumer on which a gateway performs authentication operations.
     *  *
     * @param DeleteGatewayAuthConsumerResourceRequest $request DeleteGatewayAuthConsumerResourceRequest
     *
     * @return DeleteGatewayAuthConsumerResourceResponse DeleteGatewayAuthConsumerResourceResponse
     */
    public function deleteGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除网关路由熔断规则
     *  *
     * @param DeleteGatewayCircuitBreakerRuleRequest $request DeleteGatewayCircuitBreakerRuleRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayCircuitBreakerRuleResponse DeleteGatewayCircuitBreakerRuleResponse
     */
    public function deleteGatewayCircuitBreakerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayCircuitBreakerRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除网关路由熔断规则
     *  *
     * @param DeleteGatewayCircuitBreakerRuleRequest $request DeleteGatewayCircuitBreakerRuleRequest
     *
     * @return DeleteGatewayCircuitBreakerRuleResponse DeleteGatewayCircuitBreakerRuleResponse
     */
    public function deleteGatewayCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a domain name from a gateway.
     *  *
     * @param DeleteGatewayDomainRequest $request DeleteGatewayDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayDomainResponse DeleteGatewayDomainResponse
     */
    public function deleteGatewayDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayDomain',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a domain name from a gateway.
     *  *
     * @param DeleteGatewayDomainRequest $request DeleteGatewayDomainRequest
     *
     * @return DeleteGatewayDomainResponse DeleteGatewayDomainResponse
     */
    public function deleteGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 删除网关路由流控规则
     *  *
     * @param DeleteGatewayFlowRuleRequest $request DeleteGatewayFlowRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayFlowRuleResponse DeleteGatewayFlowRuleResponse
     */
    public function deleteGatewayFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayFlowRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除网关路由流控规则
     *  *
     * @param DeleteGatewayFlowRuleRequest $request DeleteGatewayFlowRuleRequest
     *
     * @return DeleteGatewayFlowRuleResponse DeleteGatewayFlowRuleResponse
     */
    public function deleteGatewayFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 删除网关路由隔离规则
     *  *
     * @param DeleteGatewayIsolationRuleRequest $request DeleteGatewayIsolationRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayIsolationRuleResponse DeleteGatewayIsolationRuleResponse
     */
    public function deleteGatewayIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayIsolationRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除网关路由隔离规则
     *  *
     * @param DeleteGatewayIsolationRuleRequest $request DeleteGatewayIsolationRuleRequest
     *
     * @return DeleteGatewayIsolationRuleResponse DeleteGatewayIsolationRuleResponse
     */
    public function deleteGatewayIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a route from a gateway.
     *  *
     * @param DeleteGatewayRouteRequest $request DeleteGatewayRouteRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayRouteResponse DeleteGatewayRouteResponse
     */
    public function deleteGatewayRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a route from a gateway.
     *  *
     * @param DeleteGatewayRouteRequest $request DeleteGatewayRouteRequest
     *
     * @return DeleteGatewayRouteResponse DeleteGatewayRouteResponse
     */
    public function deleteGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a service from a gateway.
     *  *
     * @param DeleteGatewayServiceRequest $request DeleteGatewayServiceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayServiceResponse DeleteGatewayServiceResponse
     */
    public function deleteGatewayServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a service from a gateway.
     *  *
     * @param DeleteGatewayServiceRequest $request DeleteGatewayServiceRequest
     *
     * @return DeleteGatewayServiceResponse DeleteGatewayServiceResponse
     */
    public function deleteGatewayService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a service version from a gateway.
     *  *
     * @param DeleteGatewayServiceVersionRequest $request DeleteGatewayServiceVersionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayServiceVersionResponse DeleteGatewayServiceVersionResponse
     */
    public function deleteGatewayServiceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayServiceVersion',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a service version from a gateway.
     *  *
     * @param DeleteGatewayServiceVersionRequest $request DeleteGatewayServiceVersionRequest
     *
     * @return DeleteGatewayServiceVersionResponse DeleteGatewayServiceVersionResponse
     */
    public function deleteGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the Server Load Balancer (SLB) instance that is associated with a gateway.
     *  *
     * @param DeleteGatewaySlbRequest $request DeleteGatewaySlbRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewaySlbResponse DeleteGatewaySlbResponse
     */
    public function deleteGatewaySlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->deleteSlb)) {
            $query['DeleteSlb'] = $request->deleteSlb;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewaySlb',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the Server Load Balancer (SLB) instance that is associated with a gateway.
     *  *
     * @param DeleteGatewaySlbRequest $request DeleteGatewaySlbRequest
     *
     * @return DeleteGatewaySlbResponse DeleteGatewaySlbResponse
     */
    public function deleteGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * @summary 删除隔离规则
     *  *
     * @param DeleteIsolationRulesRequest $tmpReq  DeleteIsolationRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIsolationRulesResponse DeleteIsolationRulesResponse
     */
    public function deleteIsolationRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteIsolationRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIsolationRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIsolationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除隔离规则
     *  *
     * @param DeleteIsolationRulesRequest $request DeleteIsolationRulesRequest
     *
     * @return DeleteIsolationRulesResponse DeleteIsolationRulesResponse
     */
    public function deleteIsolationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIsolationRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a migration task.
     *  *
     * @param DeleteMigrationTaskRequest $request DeleteMigrationTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMigrationTaskResponse DeleteMigrationTaskResponse
     */
    public function deleteMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMigrationTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a migration task.
     *  *
     * @param DeleteMigrationTaskRequest $request DeleteMigrationTaskRequest
     *
     * @return DeleteMigrationTaskResponse DeleteMigrationTaskResponse
     */
    public function deleteMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 删除nacos指定配置
     *  *
     * @param DeleteNacosConfigRequest $request DeleteNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNacosConfigResponse DeleteNacosConfigResponse
     */
    public function deleteNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->beta)) {
            $query['Beta'] = $request->beta;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除nacos指定配置
     *  *
     * @param DeleteNacosConfigRequest $request DeleteNacosConfigRequest
     *
     * @return DeleteNacosConfigResponse DeleteNacosConfigResponse
     */
    public function deleteNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple Nacos configurations at a time.
     *  *
     * @description >  The current API operation is not provided in Nacos SDK. For more information about the Nacos-SDK API, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param DeleteNacosConfigsRequest $request DeleteNacosConfigsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNacosConfigsResponse DeleteNacosConfigsResponse
     */
    public function deleteNacosConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNacosConfigs',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNacosConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple Nacos configurations at a time.
     *  *
     * @description >  The current API operation is not provided in Nacos SDK. For more information about the Nacos-SDK API, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param DeleteNacosConfigsRequest $request DeleteNacosConfigsRequest
     *
     * @return DeleteNacosConfigsResponse DeleteNacosConfigsResponse
     */
    public function deleteNacosConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a persistent application instance from a Microservices Engine (MSE) Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param DeleteNacosInstanceRequest $request DeleteNacosInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNacosInstanceResponse DeleteNacosInstanceResponse
     */
    public function deleteNacosInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->ephemeral)) {
            $query['Ephemeral'] = $request->ephemeral;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNacosInstance',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a persistent application instance from a Microservices Engine (MSE) Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param DeleteNacosInstanceRequest $request DeleteNacosInstanceRequest
     *
     * @return DeleteNacosInstanceResponse DeleteNacosInstanceResponse
     */
    public function deleteNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Nacos service.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param DeleteNacosServiceRequest $request DeleteNacosServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNacosServiceResponse DeleteNacosServiceResponse
     */
    public function deleteNacosServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNacosService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Nacos service.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param DeleteNacosServiceRequest $request DeleteNacosServiceRequest
     *
     * @return DeleteNacosServiceResponse DeleteNacosServiceResponse
     */
    public function deleteNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除MSE命名空间
     *  *
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除MSE命名空间
     *  *
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除插件配置
     *  *
     * @param DeletePluginConfigRequest $request DeletePluginConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePluginConfigResponse DeletePluginConfigResponse
     */
    public function deletePluginConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->pluginConfigId)) {
            $query['PluginConfigId'] = $request->pluginConfigId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePluginConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除插件配置
     *  *
     * @param DeletePluginConfigRequest $request DeletePluginConfigRequest
     *
     * @return DeletePluginConfigResponse DeletePluginConfigResponse
     */
    public function deletePluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePluginConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a security group rule from a gateway.
     *  *
     * @param DeleteSecurityGroupRuleRequest $request DeleteSecurityGroupRuleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecurityGroupRuleResponse DeleteSecurityGroupRuleResponse
     */
    public function deleteSecurityGroupRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->cascadingDelete)) {
            $query['CascadingDelete'] = $request->cascadingDelete;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityGroupRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a security group rule from a gateway.
     *  *
     * @param DeleteSecurityGroupRuleRequest $request DeleteSecurityGroupRuleRequest
     *
     * @return DeleteSecurityGroupRuleResponse DeleteSecurityGroupRuleResponse
     */
    public function deleteSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a gateway service source.
     *  *
     * @param DeleteServiceSourceRequest $request DeleteServiceSourceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceSourceResponse DeleteServiceSourceResponse
     */
    public function deleteServiceSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a gateway service source.
     *  *
     * @param DeleteServiceSourceRequest $request DeleteServiceSourceRequest
     *
     * @return DeleteServiceSourceResponse DeleteServiceSourceResponse
     */
    public function deleteServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a lane.
     *  *
     * @param DeleteSwimmingLaneRequest $request DeleteSwimmingLaneRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSwimmingLaneResponse DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLaneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->laneId)) {
            $query['LaneId'] = $request->laneId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSwimmingLane',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a lane.
     *  *
     * @param DeleteSwimmingLaneRequest $request DeleteSwimmingLaneRequest
     *
     * @return DeleteSwimmingLaneResponse DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a lane group.
     *  *
     * @param DeleteSwimmingLaneGroupRequest $request DeleteSwimmingLaneGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSwimmingLaneGroupResponse DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSwimmingLaneGroup',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a lane group.
     *  *
     * @param DeleteSwimmingLaneGroupRequest $request DeleteSwimmingLaneGroupRequest
     *
     * @return DeleteSwimmingLaneGroupResponse DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a ZooKeeper node.
     *  *
     * @param DeleteZnodeRequest $request DeleteZnodeRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteZnodeResponse DeleteZnodeResponse
     */
    public function deleteZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteZnode',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a ZooKeeper node.
     *  *
     * @param DeleteZnodeRequest $request DeleteZnodeRequest
     *
     * @return DeleteZnodeResponse DeleteZnodeResponse
     */
    public function deleteZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteZnodeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables HTTP/2 for negotiation between the server and client. The modification takes effect in one to two minutes.
     *  *
     * @param EnableHttp2Request $request EnableHttp2Request
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableHttp2Response EnableHttp2Response
     */
    public function enableHttp2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->enableHttp2)) {
            $query['EnableHttp2'] = $request->enableHttp2;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableHttp2',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableHttp2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables HTTP/2 for negotiation between the server and client. The modification takes effect in one to two minutes.
     *  *
     * @param EnableHttp2Request $request EnableHttp2Request
     *
     * @return EnableHttp2Response EnableHttp2Response
     */
    public function enableHttp2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHttp2WithOptions($request, $runtime);
    }

    /**
     * @summary Enables the proxy protocol. When an NLB instance is used as an ingress, you cannot obtain the real IP address of the client if you do not enable the proxy protocol. After you enable the proxy protocol, non-proxy requests are not adversely affected.
     *  *
     * @param EnableProxyProtocolRequest $request EnableProxyProtocolRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableProxyProtocolResponse EnableProxyProtocolResponse
     */
    public function enableProxyProtocolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->enableProxyProtocol)) {
            $query['EnableProxyProtocol'] = $request->enableProxyProtocol;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableProxyProtocol',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableProxyProtocolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the proxy protocol. When an NLB instance is used as an ingress, you cannot obtain the real IP address of the client if you do not enable the proxy protocol. After you enable the proxy protocol, non-proxy requests are not adversely affected.
     *  *
     * @param EnableProxyProtocolRequest $request EnableProxyProtocolRequest
     *
     * @return EnableProxyProtocolResponse EnableProxyProtocolResponse
     */
    public function enableProxyProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableProxyProtocolWithOptions($request, $runtime);
    }

    /**
     * @summary Exports specified Nacos configurations.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ExportNacosConfigRequest $request ExportNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportNacosConfigResponse ExportNacosConfigResponse
     */
    public function exportNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->dataIds)) {
            $query['DataIds'] = $request->dataIds;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Exports specified Nacos configurations.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ExportNacosConfigRequest $request ExportNacosConfigRequest
     *
     * @return ExportNacosConfigResponse ExportNacosConfigResponse
     */
    public function exportNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Initiates a task to export ZooKeeper data.
     *  *
     * @description Only one task can run at a time.
     *  *
     * @param ExportZookeeperDataRequest $request ExportZookeeperDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportZookeeperDataResponse ExportZookeeperDataResponse
     */
    public function exportZookeeperDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->exportType)) {
            $query['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportZookeeperData',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initiates a task to export ZooKeeper data.
     *  *
     * @description Only one task can run at a time.
     *  *
     * @param ExportZookeeperDataRequest $request ExportZookeeperDataRequest
     *
     * @return ExportZookeeperDataResponse ExportZookeeperDataResponse
     */
    public function exportZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the rules for graceful start and shutdown.
     *  *
     * @description You can call this operation to query the rules for graceful start and shutdown.
     *  *
     * @param FetchLosslessRuleListRequest $request FetchLosslessRuleListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchLosslessRuleListResponse FetchLosslessRuleListResponse
     */
    public function fetchLosslessRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
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
            'action'      => 'FetchLosslessRuleList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FetchLosslessRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the rules for graceful start and shutdown.
     *  *
     * @description You can call this operation to query the rules for graceful start and shutdown.
     *  *
     * @param FetchLosslessRuleListRequest $request FetchLosslessRuleListRequest
     *
     * @return FetchLosslessRuleListResponse FetchLosslessRuleListResponse
     */
    public function fetchLosslessRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchLosslessRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about canary release for messaging of an application.
     *  *
     * @param GetAppMessageQueueRouteRequest $request GetAppMessageQueueRouteRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppMessageQueueRouteResponse GetAppMessageQueueRouteResponse
     */
    public function getAppMessageQueueRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppMessageQueueRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppMessageQueueRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about canary release for messaging of an application.
     *  *
     * @param GetAppMessageQueueRouteRequest $request GetAppMessageQueueRouteRequest
     *
     * @return GetAppMessageQueueRouteResponse GetAppMessageQueueRouteResponse
     */
    public function getAppMessageQueueRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppMessageQueueRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of microservice application instances.
     *  *
     * @param GetApplicationInstanceListRequest $request GetApplicationInstanceListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationInstanceListResponse GetApplicationInstanceListResponse
     */
    public function getApplicationInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationInstanceList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApplicationInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of microservice application instances.
     *  *
     * @param GetApplicationInstanceListRequest $request GetApplicationInstanceListRequest
     *
     * @return GetApplicationInstanceListResponse GetApplicationInstanceListResponse
     */
    public function getApplicationInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationInstanceListWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the list of applications.
     *  *
     * @param GetApplicationListRequest $request GetApplicationListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationListResponse GetApplicationListResponse
     */
    public function getApplicationListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sentinelEnable)) {
            $query['SentinelEnable'] = $request->sentinelEnable;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->switchEnable)) {
            $query['SwitchEnable'] = $request->switchEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApplicationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the list of applications.
     *  *
     * @param GetApplicationListRequest $request GetApplicationListRequest
     *
     * @return GetApplicationListResponse GetApplicationListResponse
     */
    public function getApplicationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the blacklist or whitelist of a gateway.
     *  *
     * @param GetBlackWhiteListRequest $request GetBlackWhiteListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBlackWhiteListResponse GetBlackWhiteListResponse
     */
    public function getBlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->isWhite)) {
            $query['IsWhite'] = $request->isWhite;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBlackWhiteList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the blacklist or whitelist of a gateway.
     *  *
     * @param GetBlackWhiteListRequest $request GetBlackWhiteListRequest
     *
     * @return GetBlackWhiteListResponse GetBlackWhiteListResponse
     */
    public function getBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the namespaces of a Nacos instance.
     *  *
     * @param GetEngineNamepaceRequest $request GetEngineNamepaceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEngineNamepaceResponse GetEngineNamepaceResponse
     */
    public function getEngineNamepaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEngineNamepace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEngineNamepaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the namespaces of a Nacos instance.
     *  *
     * @param GetEngineNamepaceRequest $request GetEngineNamepaceRequest
     *
     * @return GetEngineNamepaceResponse GetEngineNamepaceResponse
     */
    public function getEngineNamepace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEngineNamepaceWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the basic information about a gateway, such as the virtual private cloud (VPC) and vSwitch to which the gateway belongs.
     *  *
     * @param GetGatewayRequest $request GetGatewayRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGatewayResponse GetGatewayResponse
     */
    public function getGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGateway',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the basic information about a gateway, such as the virtual private cloud (VPC) and vSwitch to which the gateway belongs.
     *  *
     * @param GetGatewayRequest $request GetGatewayRequest
     *
     * @return GetGatewayResponse GetGatewayResponse
     */
    public function getGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the consumer on which a gateway performs authentication operations.
     *  *
     * @param GetGatewayAuthConsumerDetailRequest $request GetGatewayAuthConsumerDetailRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGatewayAuthConsumerDetailResponse GetGatewayAuthConsumerDetailResponse
     */
    public function getGatewayAuthConsumerDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayAuthConsumerDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayAuthConsumerDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the consumer on which a gateway performs authentication operations.
     *  *
     * @param GetGatewayAuthConsumerDetailRequest $request GetGatewayAuthConsumerDetailRequest
     *
     * @return GetGatewayAuthConsumerDetailResponse GetGatewayAuthConsumerDetailResponse
     */
    public function getGatewayAuthConsumerDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayAuthConsumerDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询网关认证详情
     *  *
     * @param GetGatewayAuthDetailRequest $request GetGatewayAuthDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGatewayAuthDetailResponse GetGatewayAuthDetailResponse
     */
    public function getGatewayAuthDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayAuthDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayAuthDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询网关认证详情
     *  *
     * @param GetGatewayAuthDetailRequest $request GetGatewayAuthDetailRequest
     *
     * @return GetGatewayAuthDetailResponse GetGatewayAuthDetailResponse
     */
    public function getGatewayAuthDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayAuthDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a domain name associated with a gateway.
     *  *
     * @param GetGatewayDomainDetailRequest $request GetGatewayDomainDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGatewayDomainDetailResponse GetGatewayDomainDetailResponse
     */
    public function getGatewayDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayDomainDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a domain name associated with a gateway.
     *  *
     * @param GetGatewayDomainDetailRequest $request GetGatewayDomainDetailRequest
     *
     * @return GetGatewayDomainDetailResponse GetGatewayDomainDetailResponse
     */
    public function getGatewayDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the global parameters of a gateway.
     *  *
     * @param GetGatewayOptionRequest $request GetGatewayOptionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGatewayOptionResponse GetGatewayOptionResponse
     */
    public function getGatewayOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayOption',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the global parameters of a gateway.
     *  *
     * @param GetGatewayOptionRequest $request GetGatewayOptionRequest
     *
     * @return GetGatewayOptionResponse GetGatewayOptionResponse
     */
    public function getGatewayOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayOptionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a route for a gateway.
     *  *
     * @param GetGatewayRouteDetailRequest $request GetGatewayRouteDetailRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGatewayRouteDetailResponse GetGatewayRouteDetailResponse
     */
    public function getGatewayRouteDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayRouteDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayRouteDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a route for a gateway.
     *  *
     * @param GetGatewayRouteDetailRequest $request GetGatewayRouteDetailRequest
     *
     * @return GetGatewayRouteDetailResponse GetGatewayRouteDetailResponse
     */
    public function getGatewayRouteDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayRouteDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a service.
     *  *
     * @param GetGatewayServiceDetailRequest $request GetGatewayServiceDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGatewayServiceDetailResponse GetGatewayServiceDetailResponse
     */
    public function getGatewayServiceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayServiceDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a service.
     *  *
     * @param GetGatewayServiceDetailRequest $request GetGatewayServiceDetailRequest
     *
     * @return GetGatewayServiceDetailResponse GetGatewayServiceDetailResponse
     */
    public function getGatewayServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayServiceDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a Container Service for Kubernetes (ACK) cluster for which Microservices Governance is enabled.
     *  *
     * @param GetGovernanceKubernetesClusterRequest $request GetGovernanceKubernetesClusterRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGovernanceKubernetesClusterResponse GetGovernanceKubernetesClusterResponse
     */
    public function getGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGovernanceKubernetesCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a Container Service for Kubernetes (ACK) cluster for which Microservices Governance is enabled.
     *  *
     * @param GetGovernanceKubernetesClusterRequest $request GetGovernanceKubernetesClusterRequest
     *
     * @return GetGovernanceKubernetesClusterResponse GetGovernanceKubernetesClusterResponse
     */
    public function getGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the maximum version number to which the current version can be upgraded.
     *  *
     * @param GetImageRequest $request GetImageRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageResponse GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->versionCode)) {
            $query['VersionCode'] = $request->versionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImage',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the maximum version number to which the current version can be upgraded.
     *  *
     * @param GetImageRequest $request GetImageRequest
     *
     * @return GetImageResponse GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the URL that is used to upload a configuration file when you import the configuration file into a Microservices Engine (MSE) Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).\\n
     *  *
     * @param GetImportFileUrlRequest $request GetImportFileUrlRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImportFileUrlResponse GetImportFileUrlResponse
     */
    public function getImportFileUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImportFileUrl',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImportFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the URL that is used to upload a configuration file when you import the configuration file into a Microservices Engine (MSE) Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).\\n
     *  *
     * @param GetImportFileUrlRequest $request GetImportFileUrlRequest
     *
     * @return GetImportFileUrlResponse GetImportFileUrlResponse
     */
    public function getImportFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImportFileUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains sources of all Container Service for Kubernetes (ACK) services in a gateway.
     *  *
     * @param GetKubernetesSourceRequest $request GetKubernetesSourceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKubernetesSourceResponse GetKubernetesSourceResponse
     */
    public function getKubernetesSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->isAll)) {
            $query['IsAll'] = $request->isAll;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKubernetesSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKubernetesSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains sources of all Container Service for Kubernetes (ACK) services in a gateway.
     *  *
     * @param GetKubernetesSourceRequest $request GetKubernetesSourceRequest
     *
     * @return GetKubernetesSourceResponse GetKubernetesSourceResponse
     */
    public function getKubernetesSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKubernetesSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the rules for graceful start and shutdown of an application.
     *  *
     * @description You can call this operation to query the rules for graceful start and shutdown of an application.
     * You can query the rules for graceful start and shutdown of an application preferentially by using the AppId parameter.
     * If the AppId parameter is left empty, you can use the RegionId, Namespace, and AppName parameters to query the rules for graceful start and shutdown of an application.
     *  *
     * @param GetLosslessRuleByAppRequest $request GetLosslessRuleByAppRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLosslessRuleByAppResponse GetLosslessRuleByAppResponse
     */
    public function getLosslessRuleByAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLosslessRuleByApp',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLosslessRuleByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the rules for graceful start and shutdown of an application.
     *  *
     * @description You can call this operation to query the rules for graceful start and shutdown of an application.
     * You can query the rules for graceful start and shutdown of an application preferentially by using the AppId parameter.
     * If the AppId parameter is left empty, you can use the RegionId, Namespace, and AppName parameters to query the rules for graceful start and shutdown of an application.
     *  *
     * @param GetLosslessRuleByAppRequest $request GetLosslessRuleByAppRequest
     *
     * @return GetLosslessRuleByAppResponse GetLosslessRuleByAppResponse
     */
    public function getLosslessRuleByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLosslessRuleByAppWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the MSE feature switch.
     *  *
     * @param GetMseFeatureSwitchRequest $request GetMseFeatureSwitchRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMseFeatureSwitchResponse GetMseFeatureSwitchResponse
     */
    public function getMseFeatureSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMseFeatureSwitch',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMseFeatureSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the MSE feature switch.
     *  *
     * @param GetMseFeatureSwitchRequest $request GetMseFeatureSwitchRequest
     *
     * @return GetMseFeatureSwitchResponse GetMseFeatureSwitchResponse
     */
    public function getMseFeatureSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMseFeatureSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the existing Microservices Engine (MSE) Nacos instances that are service sources of a gateway.
     *  *
     * @param GetMseSourceRequest $request GetMseSourceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMseSourceResponse GetMseSourceResponse
     */
    public function getMseSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMseSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMseSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the existing Microservices Engine (MSE) Nacos instances that are service sources of a gateway.
     *  *
     * @param GetMseSourceRequest $request GetMseSourceRequest
     *
     * @return GetMseSourceResponse GetMseSourceResponse
     */
    public function getMseSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMseSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Nacos configurations.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param GetNacosConfigRequest $request GetNacosConfigRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNacosConfigResponse GetNacosConfigResponse
     */
    public function getNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->beta)) {
            $query['Beta'] = $request->beta;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Nacos configurations.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param GetNacosConfigRequest $request GetNacosConfigRequest
     *
     * @return GetNacosConfigResponse GetNacosConfigResponse
     */
    public function getNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the historical details of Nacos configuration changes.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param GetNacosHistoryConfigRequest $request GetNacosHistoryConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNacosHistoryConfigResponse GetNacosHistoryConfigResponse
     */
    public function getNacosHistoryConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->nid)) {
            $query['Nid'] = $request->nid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNacosHistoryConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNacosHistoryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the historical details of Nacos configuration changes.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param GetNacosHistoryConfigRequest $request GetNacosHistoryConfigRequest
     *
     * @return GetNacosHistoryConfigResponse GetNacosHistoryConfigResponse
     */
    public function getNacosHistoryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacosHistoryConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about service governance.
     *  *
     * @description You can call this operation to query overview information about service governance.
     *  *
     * @param GetOverviewRequest $request GetOverviewRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOverviewResponse GetOverviewResponse
     */
    public function getOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOverview',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about service governance.
     *  *
     * @description You can call this operation to query overview information about service governance.
     *  *
     * @param GetOverviewRequest $request GetOverviewRequest
     *
     * @return GetOverviewResponse GetOverviewResponse
     */
    public function getOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOverviewWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains plug-in configurations.
     *  *
     * @param GetPluginConfigRequest $request GetPluginConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPluginConfigResponse GetPluginConfigResponse
     */
    public function getPluginConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPluginConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains plug-in configurations.
     *  *
     * @param GetPluginConfigRequest $request GetPluginConfigRequest
     *
     * @return GetPluginConfigResponse GetPluginConfigResponse
     */
    public function getPluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPluginConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains plug-ins.
     *  *
     * @param GetPluginsRequest $request GetPluginsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPluginsResponse GetPluginsResponse
     */
    public function getPluginsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->enableOnly)) {
            $query['EnableOnly'] = $request->enableOnly;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPlugins',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains plug-ins.
     *  *
     * @param GetPluginsRequest $request GetPluginsRequest
     *
     * @return GetPluginsResponse GetPluginsResponse
     */
    public function getPlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPluginsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the services of an application.
     *  *
     * @param GetServiceListRequest $request GetServiceListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceListResponse GetServiceListResponse
     */
    public function getServiceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the services of an application.
     *  *
     * @param GetServiceListRequest $request GetServiceListRequest
     *
     * @return GetServiceListResponse GetServiceListResponse
     */
    public function getServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the version of a microservices application.
     *  *
     * @param GetServiceListPageRequest $request GetServiceListPageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceListPageResponse GetServiceListPageResponse
     */
    public function getServiceListPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceListPage',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the version of a microservices application.
     *  *
     * @param GetServiceListPageRequest $request GetServiceListPageRequest
     *
     * @return GetServiceListPageResponse GetServiceListPageResponse
     */
    public function getServiceListPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListPageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of listeners for the destination service.
     *  *
     * @param GetServiceListenersRequest $request GetServiceListenersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceListenersResponse GetServiceListenersResponse
     */
    public function getServiceListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->hasIpCount)) {
            $query['HasIpCount'] = $request->hasIpCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceListeners',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of listeners for the destination service.
     *  *
     * @param GetServiceListenersRequest $request GetServiceListenersRequest
     *
     * @return GetServiceListenersResponse GetServiceListenersResponse
     */
    public function getServiceListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListenersWithOptions($request, $runtime);
    }

    /**
     * @summary 获取服务接口列表
     *  *
     * @param GetServiceMethodPageRequest $request GetServiceMethodPageRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceMethodPageResponse GetServiceMethodPageResponse
     */
    public function getServiceMethodPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->methodController)) {
            $query['MethodController'] = $request->methodController;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serviceGroup)) {
            $query['ServiceGroup'] = $request->serviceGroup;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceMethodPage',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceMethodPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务接口列表
     *  *
     * @param GetServiceMethodPageRequest $request GetServiceMethodPageRequest
     *
     * @return GetServiceMethodPageResponse GetServiceMethodPageResponse
     */
    public function getServiceMethodPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceMethodPageWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains all tags in the current lane group.
     *  *
     * @param GetTagsBySwimmingLaneGroupIdRequest $request GetTagsBySwimmingLaneGroupIdRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTagsBySwimmingLaneGroupIdResponse GetTagsBySwimmingLaneGroupIdResponse
     */
    public function getTagsBySwimmingLaneGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTagsBySwimmingLaneGroupId',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTagsBySwimmingLaneGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains all tags in the current lane group.
     *  *
     * @param GetTagsBySwimmingLaneGroupIdRequest $request GetTagsBySwimmingLaneGroupIdRequest
     *
     * @return GetTagsBySwimmingLaneGroupIdResponse GetTagsBySwimmingLaneGroupIdResponse
     */
    public function getTagsBySwimmingLaneGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagsBySwimmingLaneGroupIdWithOptions($request, $runtime);
    }

    /**
     * @summary mse-200-105
     *  *
     * @param GetZookeeperDataImportUrlRequest $request GetZookeeperDataImportUrlRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetZookeeperDataImportUrlResponse GetZookeeperDataImportUrlResponse
     */
    public function getZookeeperDataImportUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetZookeeperDataImportUrl',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetZookeeperDataImportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary mse-200-105
     *  *
     * @param GetZookeeperDataImportUrlRequest $request GetZookeeperDataImportUrlRequest
     *
     * @return GetZookeeperDataImportUrlResponse GetZookeeperDataImportUrlResponse
     */
    public function getZookeeperDataImportUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getZookeeperDataImportUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Imports Nacos configurations as a file.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ImportNacosConfigRequest $request ImportNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportNacosConfigResponse ImportNacosConfigResponse
     */
    public function importNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Imports Nacos configurations as a file.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ImportNacosConfigRequest $request ImportNacosConfigRequest
     *
     * @return ImportNacosConfigResponse ImportNacosConfigResponse
     */
    public function importNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Imports services to a gateway.
     *  *
     * @param ImportServicesRequest $tmpReq  ImportServicesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportServicesResponse ImportServicesResponse
     */
    public function importServicesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportServicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serviceList)) {
            $request->serviceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serviceList, 'ServiceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->fcAlias)) {
            $query['FcAlias'] = $request->fcAlias;
        }
        if (!Utils::isUnset($request->fcServiceName)) {
            $query['FcServiceName'] = $request->fcServiceName;
        }
        if (!Utils::isUnset($request->fcVersion)) {
            $query['FcVersion'] = $request->fcVersion;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceListShrink)) {
            $query['ServiceList'] = $request->serviceListShrink;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->tlsSetting)) {
            $query['TlsSetting'] = $request->tlsSetting;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportServices',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Imports services to a gateway.
     *  *
     * @param ImportServicesRequest $request ImportServicesRequest
     *
     * @return ImportServicesResponse ImportServicesResponse
     */
    public function importServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importServicesWithOptions($request, $runtime);
    }

    /**
     * @summary Initiates a task to import data from a destination URL to a Microservices Engine (MSE) ZooKeeper instance.
     *  *
     * @description **Danger** This operation clears existing data. Exercise caution when you call this API operation.
     *  *
     * @param ImportZookeeperDataRequest $request ImportZookeeperDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportZookeeperDataResponse ImportZookeeperDataResponse
     */
    public function importZookeeperDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportZookeeperData',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initiates a task to import data from a destination URL to a Microservices Engine (MSE) ZooKeeper instance.
     *  *
     * @description **Danger** This operation clears existing data. Exercise caution when you call this API operation.
     *  *
     * @param ImportZookeeperDataRequest $request ImportZookeeperDataRequest
     *
     * @return ImportZookeeperDataResponse ImportZookeeperDataResponse
     */
    public function importZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries application instances that are registered with a Microservices Engine (MSE) Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListAnsInstancesRequest $request ListAnsInstancesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnsInstancesResponse ListAnsInstancesResponse
     */
    public function listAnsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnsInstances',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAnsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries application instances that are registered with a Microservices Engine (MSE) Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListAnsInstancesRequest $request ListAnsInstancesRequest
     *
     * @return ListAnsInstancesResponse ListAnsInstancesResponse
     */
    public function listAnsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the clusters of a Nacos service.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListAnsServiceClustersRequest $request ListAnsServiceClustersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnsServiceClustersResponse ListAnsServiceClustersResponse
     */
    public function listAnsServiceClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnsServiceClusters',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAnsServiceClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the clusters of a Nacos service.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListAnsServiceClustersRequest $request ListAnsServiceClustersRequest
     *
     * @return ListAnsServiceClustersResponse ListAnsServiceClustersResponse
     */
    public function listAnsServiceClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsServiceClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Nacos services.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListAnsServicesRequest $request ListAnsServicesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnsServicesResponse ListAnsServicesResponse
     */
    public function listAnsServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->hasIpCount)) {
            $query['HasIpCount'] = $request->hasIpCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnsServices',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAnsServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Nacos services.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListAnsServicesRequest $request ListAnsServicesRequest
     *
     * @return ListAnsServicesResponse ListAnsServicesResponse
     */
    public function listAnsServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsServicesWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListAppBySwimmingLaneGroupTag is deprecated, please use mse::2019-05-31::ListAppBySwimmingLaneGroupTags instead
     *  *
     * @summary Queries the applications in a lane group by tag.
     *  *
     * Deprecated
     *
     * @param ListAppBySwimmingLaneGroupTagRequest $request ListAppBySwimmingLaneGroupTagRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppBySwimmingLaneGroupTagResponse ListAppBySwimmingLaneGroupTagResponse
     */
    public function listAppBySwimmingLaneGroupTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppBySwimmingLaneGroupTag',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppBySwimmingLaneGroupTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI ListAppBySwimmingLaneGroupTag is deprecated, please use mse::2019-05-31::ListAppBySwimmingLaneGroupTags instead
     *  *
     * @summary Queries the applications in a lane group by tag.
     *  *
     * Deprecated
     *
     * @param ListAppBySwimmingLaneGroupTagRequest $request ListAppBySwimmingLaneGroupTagRequest
     *
     * @return ListAppBySwimmingLaneGroupTagResponse ListAppBySwimmingLaneGroupTagResponse
     */
    public function listAppBySwimmingLaneGroupTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppBySwimmingLaneGroupTagWithOptions($request, $runtime);
    }

    /**
     * @summary Lists applications by tag in a specified lane group.
     *  *
     * @param ListAppBySwimmingLaneGroupTagsRequest $tmpReq  ListAppBySwimmingLaneGroupTagsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppBySwimmingLaneGroupTagsResponse ListAppBySwimmingLaneGroupTagsResponse
     */
    public function listAppBySwimmingLaneGroupTagsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAppBySwimmingLaneGroupTagsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppBySwimmingLaneGroupTags',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppBySwimmingLaneGroupTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Lists applications by tag in a specified lane group.
     *  *
     * @param ListAppBySwimmingLaneGroupTagsRequest $request ListAppBySwimmingLaneGroupTagsRequest
     *
     * @return ListAppBySwimmingLaneGroupTagsResponse ListAppBySwimmingLaneGroupTagsResponse
     */
    public function listAppBySwimmingLaneGroupTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppBySwimmingLaneGroupTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the routing rules of an application.
     *  *
     * @param ListApplicationsWithTagRulesRequest $request ListApplicationsWithTagRulesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsWithTagRulesResponse ListApplicationsWithTagRulesResponse
     */
    public function listApplicationsWithTagRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationsWithTagRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsWithTagRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the routing rules of an application.
     *  *
     * @param ListApplicationsWithTagRulesRequest $request ListApplicationsWithTagRulesRequest
     *
     * @return ListApplicationsWithTagRulesResponse ListApplicationsWithTagRulesResponse
     */
    public function listApplicationsWithTagRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithTagRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of service authentication rules.
     *  *
     * @param ListAuthPolicyRequest $request ListAuthPolicyRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAuthPolicyResponse ListAuthPolicyResponse
     */
    public function listAuthPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of service authentication rules.
     *  *
     * @param ListAuthPolicyRequest $request ListAuthPolicyRequest
     *
     * @return ListAuthPolicyResponse ListAuthPolicyResponse
     */
    public function listAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of circuit breaking rules.
     *  *
     * @param ListCircuitBreakerRulesRequest $request ListCircuitBreakerRulesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCircuitBreakerRulesResponse ListCircuitBreakerRulesResponse
     */
    public function listCircuitBreakerRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceSearchKey)) {
            $query['ResourceSearchKey'] = $request->resourceSearchKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCircuitBreakerRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCircuitBreakerRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of circuit breaking rules.
     *  *
     * @param ListCircuitBreakerRulesRequest $request ListCircuitBreakerRulesRequest
     *
     * @return ListCircuitBreakerRulesResponse ListCircuitBreakerRulesResponse
     */
    public function listCircuitBreakerRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCircuitBreakerRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available cluster connection types.
     *  *
     * @param ListClusterConnectionTypesRequest $request ListClusterConnectionTypesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterConnectionTypesResponse ListClusterConnectionTypesResponse
     */
    public function listClusterConnectionTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterConnectionTypes',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterConnectionTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available cluster connection types.
     *  *
     * @param ListClusterConnectionTypesRequest $request ListClusterConnectionTypesRequest
     *
     * @return ListClusterConnectionTypesResponse ListClusterConnectionTypesResponse
     */
    public function listClusterConnectionTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterConnectionTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains information about historical health check tasks.
     *  *
     * @param ListClusterHealthCheckTaskRequest $request ListClusterHealthCheckTaskRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterHealthCheckTaskResponse ListClusterHealthCheckTaskResponse
     */
    public function listClusterHealthCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterHealthCheckTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterHealthCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains information about historical health check tasks.
     *  *
     * @param ListClusterHealthCheckTaskRequest $request ListClusterHealthCheckTaskRequest
     *
     * @return ListClusterHealthCheckTaskResponse ListClusterHealthCheckTaskResponse
     */
    public function listClusterHealthCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHealthCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the engine types that can be activated.
     *  *
     * @param ListClusterTypesRequest $request ListClusterTypesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterTypesResponse ListClusterTypesResponse
     */
    public function listClusterTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->connectType)) {
            $query['ConnectType'] = $request->connectType;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterTypes',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the engine types that can be activated.
     *  *
     * @param ListClusterTypesRequest $request ListClusterTypesRequest
     *
     * @return ListClusterTypesResponse ListClusterTypesResponse
     */
    public function listClusterTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about supported instance versions.
     *  *
     * @param ListClusterVersionsRequest $request ListClusterVersionsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterVersionsResponse ListClusterVersionsResponse
     */
    public function listClusterVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterVersions',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about supported instance versions.
     *  *
     * @param ListClusterVersionsRequest $request ListClusterVersionsRequest
     *
     * @return ListClusterVersionsResponse ListClusterVersionsResponse
     */
    public function listClusterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Microservices Engine (MSE) instances.
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterAliasName)) {
            $query['ClusterAliasName'] = $request->clusterAliasName;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
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
            'action'      => 'ListClusters',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Microservices Engine (MSE) instances.
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the track data of a Nacos configuration center.
     *  *
     * @param ListConfigTrackRequest $request ListConfigTrackRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConfigTrackResponse ListConfigTrackResponse
     */
    public function listConfigTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigTrack',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the track data of a Nacos configuration center.
     *  *
     * @param ListConfigTrackRequest $request ListConfigTrackRequest
     *
     * @return ListConfigTrackResponse ListConfigTrackResponse
     */
    public function listConfigTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigTrackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the namespaces of a Nacos instance.
     *  *
     * @param ListEngineNamespacesRequest $request ListEngineNamespacesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEngineNamespacesResponse ListEngineNamespacesResponse
     */
    public function listEngineNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEngineNamespaces',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEngineNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the namespaces of a Nacos instance.
     *  *
     * @param ListEngineNamespacesRequest $request ListEngineNamespacesRequest
     *
     * @return ListEngineNamespacesResponse ListEngineNamespacesResponse
     */
    public function listEngineNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEngineNamespacesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Eureka instances.
     *  *
     * @param ListEurekaInstancesRequest $request ListEurekaInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEurekaInstancesResponse ListEurekaInstancesResponse
     */
    public function listEurekaInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEurekaInstances',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEurekaInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Eureka instances.
     *  *
     * @param ListEurekaInstancesRequest $request ListEurekaInstancesRequest
     *
     * @return ListEurekaInstancesResponse ListEurekaInstancesResponse
     */
    public function listEurekaInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEurekaInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Eureka services.
     *  *
     * @param ListEurekaServicesRequest $request ListEurekaServicesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEurekaServicesResponse ListEurekaServicesResponse
     */
    public function listEurekaServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEurekaServices',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEurekaServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Eureka services.
     *  *
     * @param ListEurekaServicesRequest $request ListEurekaServicesRequest
     *
     * @return ListEurekaServicesResponse ListEurekaServicesResponse
     */
    public function listEurekaServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEurekaServicesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists historical data export tasks of a Microservices Engine (MSE) Zookeeper instance.
     *  *
     * @param ListExportZookeeperDataRequest $request ListExportZookeeperDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExportZookeeperDataResponse ListExportZookeeperDataResponse
     */
    public function listExportZookeeperDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExportZookeeperData',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Lists historical data export tasks of a Microservices Engine (MSE) Zookeeper instance.
     *  *
     * @param ListExportZookeeperDataRequest $request ListExportZookeeperDataRequest
     *
     * @return ListExportZookeeperDataResponse ListExportZookeeperDataResponse
     */
    public function listExportZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExportZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains a list of throttling rules.
     *  *
     * @param ListFlowRulesRequest $request ListFlowRulesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFlowRulesResponse ListFlowRulesResponse
     */
    public function listFlowRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceSearchKey)) {
            $query['ResourceSearchKey'] = $request->resourceSearchKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a list of throttling rules.
     *  *
     * @param ListFlowRulesRequest $request ListFlowRulesRequest
     *
     * @return ListFlowRulesResponse ListFlowRulesResponse
     */
    public function listFlowRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of gateways.
     *  *
     * @param ListGatewayRequest $tmpReq  ListGatewayRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayResponse ListGatewayResponse
     */
    public function listGatewayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterParams)) {
            $request->filterParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->descSort)) {
            $query['DescSort'] = $request->descSort;
        }
        if (!Utils::isUnset($request->filterParamsShrink)) {
            $query['FilterParams'] = $request->filterParamsShrink;
        }
        if (!Utils::isUnset($request->orderItem)) {
            $query['OrderItem'] = $request->orderItem;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGateway',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of gateways.
     *  *
     * @param ListGatewayRequest $request ListGatewayRequest
     *
     * @return ListGatewayResponse ListGatewayResponse
     */
    public function listGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of consumers on which a gateway performs authentication operations.
     *  *
     * @param ListGatewayAuthConsumerRequest $request ListGatewayAuthConsumerRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayAuthConsumerResponse ListGatewayAuthConsumerResponse
     */
    public function listGatewayAuthConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerStatus)) {
            $query['ConsumerStatus'] = $request->consumerStatus;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayAuthConsumer',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of consumers on which a gateway performs authentication operations.
     *  *
     * @param ListGatewayAuthConsumerRequest $request ListGatewayAuthConsumerRequest
     *
     * @return ListGatewayAuthConsumerResponse ListGatewayAuthConsumerResponse
     */
    public function listGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of authorized resources for the consumer on which a gateway performs authentication operations.
     *  *
     * @param ListGatewayAuthConsumerResourceRequest $request ListGatewayAuthConsumerResourceRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayAuthConsumerResourceResponse ListGatewayAuthConsumerResourceResponse
     */
    public function listGatewayAuthConsumerResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceStatus)) {
            $query['ResourceStatus'] = $request->resourceStatus;
        }
        if (!Utils::isUnset($request->routeName)) {
            $query['RouteName'] = $request->routeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayAuthConsumerResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of authorized resources for the consumer on which a gateway performs authentication operations.
     *  *
     * @param ListGatewayAuthConsumerResourceRequest $request ListGatewayAuthConsumerResourceRequest
     *
     * @return ListGatewayAuthConsumerResourceResponse ListGatewayAuthConsumerResourceResponse
     */
    public function listGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 查看网关路由熔断规则
     *  *
     * @param ListGatewayCircuitBreakerRuleRequest $request ListGatewayCircuitBreakerRuleRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayCircuitBreakerRuleResponse ListGatewayCircuitBreakerRuleResponse
     */
    public function listGatewayCircuitBreakerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->filterParams)) {
            $query['FilterParams'] = $request->filterParams;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayCircuitBreakerRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看网关路由熔断规则
     *  *
     * @param ListGatewayCircuitBreakerRuleRequest $request ListGatewayCircuitBreakerRuleRequest
     *
     * @return ListGatewayCircuitBreakerRuleResponse ListGatewayCircuitBreakerRuleResponse
     */
    public function listGatewayCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the domain names that are associated with a gateway.
     *  *
     * @param ListGatewayDomainRequest $request ListGatewayDomainRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayDomainResponse ListGatewayDomainResponse
     */
    public function listGatewayDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayDomain',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the domain names that are associated with a gateway.
     *  *
     * @param ListGatewayDomainRequest $request ListGatewayDomainRequest
     *
     * @return ListGatewayDomainResponse ListGatewayDomainResponse
     */
    public function listGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 查看网关路由流控规则
     *  *
     * @param ListGatewayFlowRuleRequest $request ListGatewayFlowRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayFlowRuleResponse ListGatewayFlowRuleResponse
     */
    public function listGatewayFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->filterParams)) {
            $query['FilterParams'] = $request->filterParams;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayFlowRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看网关路由流控规则
     *  *
     * @param ListGatewayFlowRuleRequest $request ListGatewayFlowRuleRequest
     *
     * @return ListGatewayFlowRuleResponse ListGatewayFlowRuleResponse
     */
    public function listGatewayFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 查看网关路由隔离规则
     *  *
     * @param ListGatewayIsolationRuleRequest $request ListGatewayIsolationRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayIsolationRuleResponse ListGatewayIsolationRuleResponse
     */
    public function listGatewayIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->filterParams)) {
            $query['FilterParams'] = $request->filterParams;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayIsolationRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看网关路由隔离规则
     *  *
     * @param ListGatewayIsolationRuleRequest $request ListGatewayIsolationRuleRequest
     *
     * @return ListGatewayIsolationRuleResponse ListGatewayIsolationRuleResponse
     */
    public function listGatewayIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the routes of a gateway.
     *  *
     * @param ListGatewayRouteRequest $tmpReq  ListGatewayRouteRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayRouteResponse ListGatewayRouteResponse
     */
    public function listGatewayRouteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewayRouteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterParams)) {
            $request->filterParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->descSort)) {
            $query['DescSort'] = $request->descSort;
        }
        if (!Utils::isUnset($request->filterParamsShrink)) {
            $query['FilterParams'] = $request->filterParamsShrink;
        }
        if (!Utils::isUnset($request->orderItem)) {
            $query['OrderItem'] = $request->orderItem;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the routes of a gateway.
     *  *
     * @param ListGatewayRouteRequest $request ListGatewayRouteRequest
     *
     * @return ListGatewayRouteResponse ListGatewayRouteResponse
     */
    public function listGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of routes for which authentication is enabled.
     *  *
     * @param ListGatewayRouteOnAuthRequest $request ListGatewayRouteOnAuthRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayRouteOnAuthResponse ListGatewayRouteOnAuthResponse
     */
    public function listGatewayRouteOnAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayRouteOnAuth',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayRouteOnAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of routes for which authentication is enabled.
     *  *
     * @param ListGatewayRouteOnAuthRequest $request ListGatewayRouteOnAuthRequest
     *
     * @return ListGatewayRouteOnAuthResponse ListGatewayRouteOnAuthResponse
     */
    public function listGatewayRouteOnAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayRouteOnAuthWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of services that are subscribed with a gateway.
     *  *
     * @param ListGatewayServiceRequest $tmpReq  ListGatewayServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayServiceResponse ListGatewayServiceResponse
     */
    public function listGatewayServiceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewayServiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterParams)) {
            $request->filterParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->descSort)) {
            $query['DescSort'] = $request->descSort;
        }
        if (!Utils::isUnset($request->filterParamsShrink)) {
            $query['FilterParams'] = $request->filterParamsShrink;
        }
        if (!Utils::isUnset($request->orderItem)) {
            $query['OrderItem'] = $request->orderItem;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of services that are subscribed with a gateway.
     *  *
     * @param ListGatewayServiceRequest $request ListGatewayServiceRequest
     *
     * @return ListGatewayServiceResponse ListGatewayServiceResponse
     */
    public function listGatewayService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Server Load Balancer (SLB) instances that are associated with a gateway.
     *  *
     * @param ListGatewaySlbRequest $request ListGatewaySlbRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewaySlbResponse ListGatewaySlbResponse
     */
    public function listGatewaySlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewaySlb',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Server Load Balancer (SLB) instances that are associated with a gateway.
     *  *
     * @param ListGatewaySlbRequest $request ListGatewaySlbRequest
     *
     * @return ListGatewaySlbResponse ListGatewaySlbResponse
     */
    public function listGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains a list of zones where a gateway is available.
     *  *
     * @param ListGatewayZoneRequest $request ListGatewayZoneRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewayZoneResponse ListGatewayZoneResponse
     */
    public function listGatewayZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayZone',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a list of zones where a gateway is available.
     *  *
     * @param ListGatewayZoneRequest $request ListGatewayZoneRequest
     *
     * @return ListGatewayZoneResponse ListGatewayZoneResponse
     */
    public function listGatewayZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayZoneWithOptions($request, $runtime);
    }

    /**
     * @summary Displays the number of nodes that can be deployed for an instance.
     *  *
     * @param ListInstanceCountRequest $request ListInstanceCountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceCountResponse ListInstanceCountResponse
     */
    public function listInstanceCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceCount',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Displays the number of nodes that can be deployed for an instance.
     *  *
     * @param ListInstanceCountRequest $request ListInstanceCountRequest
     *
     * @return ListInstanceCountResponse ListInstanceCountResponse
     */
    public function listInstanceCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceCountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询隔离规则
     *  *
     * @param ListIsolationRulesRequest $request ListIsolationRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIsolationRulesResponse ListIsolationRulesResponse
     */
    public function listIsolationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceSearchKey)) {
            $query['ResourceSearchKey'] = $request->resourceSearchKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIsolationRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIsolationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询隔离规则
     *  *
     * @param ListIsolationRulesRequest $request ListIsolationRulesRequest
     *
     * @return ListIsolationRulesResponse ListIsolationRulesResponse
     */
    public function listIsolationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIsolationRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries listeners based on configuration information.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListListenersByConfigRequest $request ListListenersByConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenersByConfigResponse ListListenersByConfigResponse
     */
    public function listListenersByConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListenersByConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenersByConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries listeners based on configuration information.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListListenersByConfigRequest $request ListListenersByConfigRequest
     *
     * @return ListListenersByConfigResponse ListListenersByConfigResponse
     */
    public function listListenersByConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersByConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about listeners based on IP addresses.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListListenersByIpRequest $request ListListenersByIpRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenersByIpResponse ListListenersByIpResponse
     */
    public function listListenersByIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListenersByIp',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenersByIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about listeners based on IP addresses.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListListenersByIpRequest $request ListListenersByIpRequest
     *
     * @return ListListenersByIpResponse ListListenersByIpResponse
     */
    public function listListenersByIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersByIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a migration task.
     *  *
     * @param ListMigrationTaskRequest $request ListMigrationTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMigrationTaskResponse ListMigrationTaskResponse
     */
    public function listMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->originInstanceName)) {
            $query['OriginInstanceName'] = $request->originInstanceName;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMigrationTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a migration task.
     *  *
     * @param ListMigrationTaskRequest $request ListMigrationTaskRequest
     *
     * @return ListMigrationTaskResponse ListMigrationTaskResponse
     */
    public function listMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Nacos configurations.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListNacosConfigsRequest $request ListNacosConfigsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNacosConfigsResponse ListNacosConfigsResponse
     */
    public function listNacosConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNacosConfigs',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNacosConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Nacos configurations.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListNacosConfigsRequest $request ListNacosConfigsRequest
     *
     * @return ListNacosConfigsResponse ListNacosConfigsResponse
     */
    public function listNacosConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacosConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration history of a Microservices Engine (MSE) Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListNacosHistoryConfigsRequest $request ListNacosHistoryConfigsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNacosHistoryConfigsResponse ListNacosHistoryConfigsResponse
     */
    public function listNacosHistoryConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNacosHistoryConfigs',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNacosHistoryConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration history of a Microservices Engine (MSE) Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param ListNacosHistoryConfigsRequest $request ListNacosHistoryConfigsRequest
     *
     * @return ListNacosHistoryConfigsResponse ListNacosHistoryConfigsResponse
     */
    public function listNacosHistoryConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacosHistoryConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the trajectory data of a Nacos registry.
     *  *
     * @param ListNamingTrackRequest $request ListNamingTrackRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNamingTrackResponse ListNamingTrackResponse
     */
    public function listNamingTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNamingTrack',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNamingTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the trajectory data of a Nacos registry.
     *  *
     * @param ListNamingTrackRequest $request ListNamingTrackRequest
     *
     * @return ListNamingTrackResponse ListNamingTrackResponse
     */
    public function listNamingTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamingTrackWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains a list of gateway certificates.
     *  *
     * @param ListSSLCertRequest $request ListSSLCertRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSSLCertResponse ListSSLCertResponse
     */
    public function listSSLCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSSLCert',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a list of gateway certificates.
     *  *
     * @param ListSSLCertRequest $request ListSSLCertRequest
     *
     * @return ListSSLCertResponse ListSSLCertResponse
     */
    public function listSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSSLCertWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the information about security groups.
     *  *
     * @param ListSecurityGroupRequest $request ListSecurityGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSecurityGroupResponse ListSecurityGroupResponse
     */
    public function listSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityGroup',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information about security groups.
     *  *
     * @param ListSecurityGroupRequest $request ListSecurityGroupRequest
     *
     * @return ListSecurityGroupResponse ListSecurityGroupResponse
     */
    public function listSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the security group rules of a gateway.
     *  *
     * @param ListSecurityGroupRuleRequest $request ListSecurityGroupRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSecurityGroupRuleResponse ListSecurityGroupRuleResponse
     */
    public function listSecurityGroupRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityGroupRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the security group rules of a gateway.
     *  *
     * @param ListSecurityGroupRuleRequest $request ListSecurityGroupRuleRequest
     *
     * @return ListSecurityGroupRuleResponse ListSecurityGroupRuleResponse
     */
    public function listSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 查询流量防护行为
     *  *
     * @param ListSentinelBlockFallbackDefinitionsRequest $tmpReq  ListSentinelBlockFallbackDefinitionsRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSentinelBlockFallbackDefinitionsResponse ListSentinelBlockFallbackDefinitionsResponse
     */
    public function listSentinelBlockFallbackDefinitionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSentinelBlockFallbackDefinitionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->classificationSet)) {
            $request->classificationSetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->classificationSet, 'ClassificationSet', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->classificationSetShrink)) {
            $query['ClassificationSet'] = $request->classificationSetShrink;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSentinelBlockFallbackDefinitions',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSentinelBlockFallbackDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询流量防护行为
     *  *
     * @param ListSentinelBlockFallbackDefinitionsRequest $request ListSentinelBlockFallbackDefinitionsRequest
     *
     * @return ListSentinelBlockFallbackDefinitionsResponse ListSentinelBlockFallbackDefinitionsResponse
     */
    public function listSentinelBlockFallbackDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSentinelBlockFallbackDefinitionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of associated sources.
     *  *
     * @param ListServiceSourceRequest $request ListServiceSourceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceSourceResponse ListServiceSourceResponse
     */
    public function listServiceSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of associated sources.
     *  *
     * @param ListServiceSourceRequest $request ListServiceSourceRequest
     *
     * @return ListServiceSourceResponse ListServiceSourceResponse
     */
    public function listServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tagged resources.
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
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
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
            'version'     => '2019-05-31',
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
     * @summary Queries tagged resources.
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
     * @summary Obtains the track data of a ZooKeeper instance.
     *  *
     * @param ListZkTrackRequest $request ListZkTrackRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListZkTrackResponse ListZkTrackResponse
     */
    public function listZkTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListZkTrack',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListZkTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the track data of a ZooKeeper instance.
     *  *
     * @param ListZkTrackRequest $request ListZkTrackRequest
     *
     * @return ListZkTrackResponse ListZkTrackResponse
     */
    public function listZkTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZkTrackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the child nodes of a ZooKeeper node.
     *  *
     * @param ListZnodeChildrenRequest $request ListZnodeChildrenRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListZnodeChildrenResponse ListZnodeChildrenResponse
     */
    public function listZnodeChildrenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListZnodeChildren',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListZnodeChildrenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the child nodes of a ZooKeeper node.
     *  *
     * @param ListZnodeChildrenRequest $request ListZnodeChildrenRequest
     *
     * @return ListZnodeChildrenResponse ListZnodeChildrenResponse
     */
    public function listZnodeChildren($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZnodeChildrenWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a cluster for which Microservice Governance is enabled.
     *  *
     * @param ModifyGovernanceKubernetesClusterRequest $tmpReq  ModifyGovernanceKubernetesClusterRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGovernanceKubernetesClusterResponse ModifyGovernanceKubernetesClusterResponse
     */
    public function modifyGovernanceKubernetesClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyGovernanceKubernetesClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->namespaceInfos)) {
            $request->namespaceInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->namespaceInfos, 'NamespaceInfos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->namespaceInfosShrink)) {
            $body['NamespaceInfos'] = $request->namespaceInfosShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyGovernanceKubernetesCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a cluster for which Microservice Governance is enabled.
     *  *
     * @param ModifyGovernanceKubernetesClusterRequest $request ModifyGovernanceKubernetesClusterRequest
     *
     * @return ModifyGovernanceKubernetesClusterResponse ModifyGovernanceKubernetesClusterResponse
     */
    public function modifyGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies configurations of the lossless online and offline feature.
     *  *
     * @param ModifyLosslessRuleRequest $request ModifyLosslessRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLosslessRuleResponse ModifyLosslessRuleResponse
     */
    public function modifyLosslessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->aligned)) {
            $query['Aligned'] = $request->aligned;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->delayTime)) {
            $query['DelayTime'] = $request->delayTime;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->funcType)) {
            $query['FuncType'] = $request->funcType;
        }
        if (!Utils::isUnset($request->lossLessDetail)) {
            $query['LossLessDetail'] = $request->lossLessDetail;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->notice)) {
            $query['Notice'] = $request->notice;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->related)) {
            $query['Related'] = $request->related;
        }
        if (!Utils::isUnset($request->warmupTime)) {
            $query['WarmupTime'] = $request->warmupTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLosslessRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLosslessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies configurations of the lossless online and offline feature.
     *  *
     * @param ModifyLosslessRuleRequest $request ModifyLosslessRuleRequest
     *
     * @return ModifyLosslessRuleResponse ModifyLosslessRuleResponse
     */
    public function modifyLosslessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLosslessRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Unpublishes a route for a gateway.
     *  *
     * @param OfflineGatewayRouteRequest $request OfflineGatewayRouteRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return OfflineGatewayRouteResponse OfflineGatewayRouteResponse
     */
    public function offlineGatewayRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OfflineGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OfflineGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unpublishes a route for a gateway.
     *  *
     * @param OfflineGatewayRouteRequest $request OfflineGatewayRouteRequest
     *
     * @return OfflineGatewayRouteResponse OfflineGatewayRouteResponse
     */
    public function offlineGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Subscribes to the notification feature if a risk is detected during a health check.
     *  *
     * @param OrderClusterHealthCheckRiskNoticeRequest $request OrderClusterHealthCheckRiskNoticeRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return OrderClusterHealthCheckRiskNoticeResponse OrderClusterHealthCheckRiskNoticeResponse
     */
    public function orderClusterHealthCheckRiskNoticeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mute)) {
            $query['Mute'] = $request->mute;
        }
        if (!Utils::isUnset($request->noticeType)) {
            $query['NoticeType'] = $request->noticeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->riskCode)) {
            $query['RiskCode'] = $request->riskCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderClusterHealthCheckRiskNotice',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderClusterHealthCheckRiskNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Subscribes to the notification feature if a risk is detected during a health check.
     *  *
     * @param OrderClusterHealthCheckRiskNoticeRequest $request OrderClusterHealthCheckRiskNoticeRequest
     *
     * @return OrderClusterHealthCheckRiskNoticeResponse OrderClusterHealthCheckRiskNoticeResponse
     */
    public function orderClusterHealthCheckRiskNotice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderClusterHealthCheckRiskNoticeWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies whether to convert all letters of a header into lowercase letters. For requests and responses, HTTP/1.1 headers are not case-sensitive. By default, all letters of headers are converted into lowercase letters.
     *  *
     * @param PreserveHeaderFormatRequest $request PreserveHeaderFormatRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return PreserveHeaderFormatResponse PreserveHeaderFormatResponse
     */
    public function preserveHeaderFormatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->preserveHeaderFormat)) {
            $query['PreserveHeaderFormat'] = $request->preserveHeaderFormat;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreserveHeaderFormat',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreserveHeaderFormatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies whether to convert all letters of a header into lowercase letters. For requests and responses, HTTP/1.1 headers are not case-sensitive. By default, all letters of headers are converted into lowercase letters.
     *  *
     * @param PreserveHeaderFormatRequest $request PreserveHeaderFormatRequest
     *
     * @return PreserveHeaderFormatResponse PreserveHeaderFormatResponse
     */
    public function preserveHeaderFormat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preserveHeaderFormatWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all the microservices of a service source.
     *  *
     * @param PullServicesRequest $request PullServicesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return PullServicesResponse PullServicesResponse
     */
    public function pullServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PullServices',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PullServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all the microservices of a service source.
     *  *
     * @param PullServicesRequest $request PullServicesRequest
     *
     * @return PullServicesResponse PullServicesResponse
     */
    public function pullServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pullServicesWithOptions($request, $runtime);
    }

    /**
     * @summary Initiates a task to check risk evaluation for an instance.
     *  *
     * @param PutClusterHealthCheckTaskRequest $request PutClusterHealthCheckTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return PutClusterHealthCheckTaskResponse PutClusterHealthCheckTaskResponse
     */
    public function putClusterHealthCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutClusterHealthCheckTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutClusterHealthCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initiates a task to check risk evaluation for an instance.
     *  *
     * @param PutClusterHealthCheckTaskRequest $request PutClusterHealthCheckTaskRequest
     *
     * @return PutClusterHealthCheckTaskResponse PutClusterHealthCheckTaskResponse
     */
    public function putClusterHealthCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putClusterHealthCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all the lanes in a lane group.
     *  *
     * @param QueryAllSwimmingLaneRequest $request QueryAllSwimmingLaneRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAllSwimmingLaneResponse QueryAllSwimmingLaneResponse
     */
    public function queryAllSwimmingLaneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAllSwimmingLane',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAllSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all the lanes in a lane group.
     *  *
     * @param QueryAllSwimmingLaneRequest $request QueryAllSwimmingLaneRequest
     *
     * @return QueryAllSwimmingLaneResponse QueryAllSwimmingLaneResponse
     */
    public function queryAllSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all lane groups.
     *  *
     * @param QueryAllSwimmingLaneGroupRequest $request QueryAllSwimmingLaneGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAllSwimmingLaneGroupResponse QueryAllSwimmingLaneGroupResponse
     */
    public function queryAllSwimmingLaneGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAllSwimmingLaneGroup',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAllSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all lane groups.
     *  *
     * @param QueryAllSwimmingLaneGroupRequest $request QueryAllSwimmingLaneGroupRequest
     *
     * @return QueryAllSwimmingLaneGroupResponse QueryAllSwimmingLaneGroupResponse
     */
    public function queryAllSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about regions.
     *  *
     * @param QueryBusinessLocationsRequest $request QueryBusinessLocationsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryBusinessLocationsResponse QueryBusinessLocationsResponse
     */
    public function queryBusinessLocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBusinessLocations',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBusinessLocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about regions.
     *  *
     * @param QueryBusinessLocationsRequest $request QueryBusinessLocationsRequest
     *
     * @return QueryBusinessLocationsResponse QueryBusinessLocationsResponse
     */
    public function queryBusinessLocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBusinessLocationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an instance.
     *  *
     * @param QueryClusterDetailRequest $request QueryClusterDetailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryClusterDetailResponse QueryClusterDetailResponse
     */
    public function queryClusterDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->aclSwitch)) {
            $query['AclSwitch'] = $request->aclSwitch;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an instance.
     *  *
     * @param QueryClusterDetailRequest $request QueryClusterDetailRequest
     *
     * @return QueryClusterDetailResponse QueryClusterDetailResponse
     */
    public function queryClusterDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries disk specifications that are supported by an instance.
     *  *
     * @param QueryClusterDiskSpecificationRequest $request QueryClusterDiskSpecificationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryClusterDiskSpecificationResponse QueryClusterDiskSpecificationResponse
     */
    public function queryClusterDiskSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterDiskSpecification',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterDiskSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries disk specifications that are supported by an instance.
     *  *
     * @param QueryClusterDiskSpecificationRequest $request QueryClusterDiskSpecificationRequest
     *
     * @return QueryClusterDiskSpecificationResponse QueryClusterDiskSpecificationResponse
     */
    public function queryClusterDiskSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDiskSpecificationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the static information of an instance.
     *  *
     * @param QueryClusterInfoRequest $request QueryClusterInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryClusterInfoResponse QueryClusterInfoResponse
     */
    public function queryClusterInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->aclSwitch)) {
            $query['AclSwitch'] = $request->aclSwitch;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterInfo',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the static information of an instance.
     *  *
     * @param QueryClusterInfoRequest $request QueryClusterInfoRequest
     *
     * @return QueryClusterInfoResponse QueryClusterInfoResponse
     */
    public function queryClusterInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of supported instance specifications.
     *  *
     * @param QueryClusterSpecificationRequest $request QueryClusterSpecificationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryClusterSpecificationResponse QueryClusterSpecificationResponse
     */
    public function queryClusterSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->connectType)) {
            $query['ConnectType'] = $request->connectType;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterSpecification',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of supported instance specifications.
     *  *
     * @param QueryClusterSpecificationRequest $request QueryClusterSpecificationRequest
     *
     * @return QueryClusterSpecificationResponse QueryClusterSpecificationResponse
     */
    public function queryClusterSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterSpecificationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries configuration information of an instance.
     *  *
     * @param QueryConfigRequest $request QueryConfigRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryConfigResponse QueryConfigResponse
     */
    public function queryConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configType)) {
            $query['ConfigType'] = $request->configType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needRunningConf)) {
            $query['NeedRunningConf'] = $request->needRunningConf;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries configuration information of an instance.
     *  *
     * @param QueryConfigRequest $request QueryConfigRequest
     *
     * @return QueryConfigResponse QueryConfigResponse
     */
    public function queryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions supported by a gateway.
     *  *
     * @param QueryGatewayRegionRequest $request QueryGatewayRegionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryGatewayRegionResponse QueryGatewayRegionResponse
     */
    public function queryGatewayRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGatewayRegion',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGatewayRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the regions supported by a gateway.
     *  *
     * @param QueryGatewayRegionRequest $request QueryGatewayRegionRequest
     *
     * @return QueryGatewayRegionResponse QueryGatewayRegionResponse
     */
    public function queryGatewayRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGatewayRegionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available gateway types.
     *  *
     * @param QueryGatewayTypeRequest $request QueryGatewayTypeRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryGatewayTypeResponse QueryGatewayTypeResponse
     */
    public function queryGatewayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGatewayType',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGatewayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available gateway types.
     *  *
     * @param QueryGatewayTypeRequest $request QueryGatewayTypeRequest
     *
     * @return QueryGatewayTypeResponse QueryGatewayTypeResponse
     */
    public function queryGatewayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGatewayTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Kubernetes clusters for which Microservices Governance is activated.
     *  *
     * @param QueryGovernanceKubernetesClusterRequest $request QueryGovernanceKubernetesClusterRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryGovernanceKubernetesClusterResponse QueryGovernanceKubernetesClusterResponse
     */
    public function queryGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGovernanceKubernetesCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Kubernetes clusters for which Microservices Governance is activated.
     *  *
     * @param QueryGovernanceKubernetesClusterRequest $request QueryGovernanceKubernetesClusterRequest
     *
     * @return QueryGovernanceKubernetesClusterResponse QueryGovernanceKubernetesClusterResponse
     */
    public function queryGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the runtime data of a specified cluster.
     *  *
     * @param QueryInstancesInfoRequest $request QueryInstancesInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryInstancesInfoResponse QueryInstancesInfoResponse
     */
    public function queryInstancesInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInstancesInfo',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInstancesInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the runtime data of a specified cluster.
     *  *
     * @param QueryInstancesInfoRequest $request QueryInstancesInfoRequest
     *
     * @return QueryInstancesInfoResponse QueryInstancesInfoResponse
     */
    public function queryInstancesInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstancesInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries monitoring information.
     *  *
     * @param QueryMonitorRequest $request QueryMonitorRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMonitorResponse QueryMonitorResponse
     */
    public function queryMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->monitorType)) {
            $query['MonitorType'] = $request->monitorType;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->step)) {
            $query['Step'] = $request->step;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMonitor',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries monitoring information.
     *  *
     * @param QueryMonitorRequest $request QueryMonitorRequest
     *
     * @return QueryMonitorResponse QueryMonitorResponse
     */
    public function queryMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary 查询MSE命名空间
     *  *
     * @param QueryNamespaceRequest $request QueryNamespaceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryNamespaceResponse QueryNamespaceResponse
     */
    public function queryNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询MSE命名空间
     *  *
     * @param QueryNamespaceRequest $request QueryNamespaceRequest
     *
     * @return QueryNamespaceResponse QueryNamespaceResponse
     */
    public function queryNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the type of a Server Load Balancer (SLB) instance.
     *  *
     * @param QuerySlbSpecRequest $request QuerySlbSpecRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySlbSpecResponse QuerySlbSpecResponse
     */
    public function querySlbSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySlbSpec',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySlbSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the type of a Server Load Balancer (SLB) instance.
     *  *
     * @param QuerySlbSpecRequest $request QuerySlbSpecRequest
     *
     * @return QuerySlbSpecResponse QuerySlbSpecResponse
     */
    public function querySlbSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySlbSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a lane based on the lane ID.
     *  *
     * @param QuerySwimmingLaneByIdRequest $request QuerySwimmingLaneByIdRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySwimmingLaneByIdResponse QuerySwimmingLaneByIdResponse
     */
    public function querySwimmingLaneByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->laneId)) {
            $query['LaneId'] = $request->laneId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySwimmingLaneById',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySwimmingLaneByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a lane based on the lane ID.
     *  *
     * @param QuerySwimmingLaneByIdRequest $request QuerySwimmingLaneByIdRequest
     *
     * @return QuerySwimmingLaneByIdResponse QuerySwimmingLaneByIdResponse
     */
    public function querySwimmingLaneById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySwimmingLaneByIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a ZooKeeper node.
     *  *
     * @param QueryZnodeDetailRequest $request QueryZnodeDetailRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryZnodeDetailResponse QueryZnodeDetailResponse
     */
    public function queryZnodeDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryZnodeDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryZnodeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a ZooKeeper node.
     *  *
     * @param QueryZnodeDetailRequest $request QueryZnodeDetailRequest
     *
     * @return QueryZnodeDetailResponse QueryZnodeDetailResponse
     */
    public function queryZnodeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryZnodeDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 删除单个应用
     *  *
     * @param RemoveApplicationRequest $request RemoveApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveApplicationResponse RemoveApplicationResponse
     */
    public function removeApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveApplication',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除单个应用
     *  *
     * @param RemoveApplicationRequest $request RemoveApplicationRequest
     *
     * @return RemoveApplicationResponse RemoveApplicationResponse
     */
    public function removeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApplicationWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAuthPolicyRequest $request RemoveAuthPolicyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveAuthPolicyResponse RemoveAuthPolicyResponse
     */
    public function removeAuthPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAuthPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAuthPolicyRequest $request RemoveAuthPolicyRequest
     *
     * @return RemoveAuthPolicyResponse RemoveAuthPolicyResponse
     */
    public function removeAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts a registry.
     *  *
     * @param RestartClusterRequest $request RestartClusterRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartClusterResponse RestartClusterResponse
     */
    public function restartClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->podNameList)) {
            $query['PodNameList'] = $request->podNameList;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts a registry.
     *  *
     * @param RestartClusterRequest $request RestartClusterRequest
     *
     * @return RestartClusterResponse RestartClusterResponse
     */
    public function restartCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Retries a cluster.
     *  *
     * @param RetryClusterRequest $request RetryClusterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryClusterResponse RetryClusterResponse
     */
    public function retryClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Retries a cluster.
     *  *
     * @param RetryClusterRequest $request RetryClusterRequest
     *
     * @return RetryClusterResponse RetryClusterResponse
     */
    public function retryCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries an idle Server Load Balancer (SLB) instance that is associated with a gateway.
     *  *
     * @param SelectGatewaySlbRequest $request SelectGatewaySlbRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SelectGatewaySlbResponse SelectGatewaySlbResponse
     */
    public function selectGatewaySlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SelectGatewaySlb',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SelectGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries an idle Server Load Balancer (SLB) instance that is associated with a gateway.
     *  *
     * @param SelectGatewaySlbRequest $request SelectGatewaySlbRequest
     *
     * @return SelectGatewaySlbResponse SelectGatewaySlbResponse
     */
    public function selectGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->selectGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * @summary Tags a specified resource.
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
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
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
            'version'     => '2019-05-31',
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
     * @summary Tags a specified resource.
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
     * @summary Untags resources.
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
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
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
            'version'     => '2019-05-31',
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
     * @summary Untags resources.
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
     * @summary Modifies an IP address whitelist.
     *  *
     * @param UpdateAclRequest $request UpdateAclRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAclResponse UpdateAclResponse
     */
    public function updateAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->aclEntryList)) {
            $query['AclEntryList'] = $request->aclEntryList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAcl',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an IP address whitelist.
     *  *
     * @param UpdateAclRequest $request UpdateAclRequest
     *
     * @return UpdateAclResponse UpdateAclResponse
     */
    public function updateAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a service authentication rule.
     *  *
     * @param UpdateAuthPolicyRequest $request UpdateAuthPolicyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAuthPolicyResponse UpdateAuthPolicyResponse
     */
    public function updateAuthPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->authRule)) {
            $query['AuthRule'] = $request->authRule;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->k8sNamespace)) {
            $query['K8sNamespace'] = $request->k8sNamespace;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a service authentication rule.
     *  *
     * @param UpdateAuthPolicyRequest $request UpdateAuthPolicyRequest
     *
     * @return UpdateAuthPolicyResponse UpdateAuthPolicyResponse
     */
    public function updateAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the blacklist or whitelist of a gateway.
     *  *
     * @param UpdateBlackWhiteListRequest $request UpdateBlackWhiteListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBlackWhiteListResponse UpdateBlackWhiteListResponse
     */
    public function updateBlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->isWhite)) {
            $query['IsWhite'] = $request->isWhite;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->resourceIdJsonList)) {
            $query['ResourceIdJsonList'] = $request->resourceIdJsonList;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBlackWhiteList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the blacklist or whitelist of a gateway.
     *  *
     * @param UpdateBlackWhiteListRequest $request UpdateBlackWhiteListRequest
     *
     * @return UpdateBlackWhiteListResponse UpdateBlackWhiteListResponse
     */
    public function updateBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a circuit breaking rule.
     *  *
     * @param UpdateCircuitBreakerRuleRequest $request UpdateCircuitBreakerRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCircuitBreakerRuleResponse UpdateCircuitBreakerRuleResponse
     */
    public function updateCircuitBreakerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->halfOpenBaseAmountPerStep)) {
            $query['HalfOpenBaseAmountPerStep'] = $request->halfOpenBaseAmountPerStep;
        }
        if (!Utils::isUnset($request->halfOpenRecoveryStepNum)) {
            $query['HalfOpenRecoveryStepNum'] = $request->halfOpenRecoveryStepNum;
        }
        if (!Utils::isUnset($request->maxAllowedRtMs)) {
            $query['MaxAllowedRtMs'] = $request->maxAllowedRtMs;
        }
        if (!Utils::isUnset($request->minRequestAmount)) {
            $query['MinRequestAmount'] = $request->minRequestAmount;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->retryTimeoutMs)) {
            $query['RetryTimeoutMs'] = $request->retryTimeoutMs;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->statIntervalMs)) {
            $query['StatIntervalMs'] = $request->statIntervalMs;
        }
        if (!Utils::isUnset($request->strategy)) {
            $query['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCircuitBreakerRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a circuit breaking rule.
     *  *
     * @param UpdateCircuitBreakerRuleRequest $request UpdateCircuitBreakerRuleRequest
     *
     * @return UpdateCircuitBreakerRuleResponse UpdateCircuitBreakerRuleResponse
     */
    public function updateCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about an instance.
     *  *
     * @param UpdateClusterRequest $request UpdateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClusterResponse UpdateClusterResponse
     */
    public function updateClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterAliasName)) {
            $query['ClusterAliasName'] = $request->clusterAliasName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maintenanceEndTime)) {
            $query['MaintenanceEndTime'] = $request->maintenanceEndTime;
        }
        if (!Utils::isUnset($request->maintenanceStartTime)) {
            $query['MaintenanceStartTime'] = $request->maintenanceStartTime;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about an instance.
     *  *
     * @param UpdateClusterRequest $request UpdateClusterRequest
     *
     * @return UpdateClusterResponse UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the number or specifications of nodes in a pay-as-you-go Microservices Engine (MSE) instance.
     *  *
     * @description You can call this operation to update the number or specifications of nodes in a pay-as-you-go MSE instance. You are charged when you add nodes or upgrade node specifications. For more information, see [Pricing] (`~~1806469~~`).
     *  *
     * @param UpdateClusterSpecRequest $request UpdateClusterSpecRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClusterSpecResponse UpdateClusterSpecResponse
     */
    public function updateClusterSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterSpecification)) {
            $query['ClusterSpecification'] = $request->clusterSpecification;
        }
        if (!Utils::isUnset($request->instanceCount)) {
            $query['InstanceCount'] = $request->instanceCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->pubNetworkFlow)) {
            $query['PubNetworkFlow'] = $request->pubNetworkFlow;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClusterSpec',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClusterSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the number or specifications of nodes in a pay-as-you-go Microservices Engine (MSE) instance.
     *  *
     * @description You can call this operation to update the number or specifications of nodes in a pay-as-you-go MSE instance. You are charged when you add nodes or upgrade node specifications. For more information, see [Pricing] (`~~1806469~~`).
     *  *
     * @param UpdateClusterSpecRequest $request UpdateClusterSpecRequest
     *
     * @return UpdateClusterSpecResponse UpdateClusterSpecResponse
     */
    public function updateClusterSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configurations of an instance.
     *  *
     * @param UpdateConfigRequest $request UpdateConfigRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConfigResponse UpdateConfigResponse
     */
    public function updateConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->authEnabled)) {
            $query['AuthEnabled'] = $request->authEnabled;
        }
        if (!Utils::isUnset($request->autopurgePurgeInterval)) {
            $query['AutopurgePurgeInterval'] = $request->autopurgePurgeInterval;
        }
        if (!Utils::isUnset($request->autopurgeSnapRetainCount)) {
            $query['AutopurgeSnapRetainCount'] = $request->autopurgeSnapRetainCount;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configAuthEnabled)) {
            $query['ConfigAuthEnabled'] = $request->configAuthEnabled;
        }
        if (!Utils::isUnset($request->configSecretEnabled)) {
            $query['ConfigSecretEnabled'] = $request->configSecretEnabled;
        }
        if (!Utils::isUnset($request->configType)) {
            $query['ConfigType'] = $request->configType;
        }
        if (!Utils::isUnset($request->consoleUIEnabled)) {
            $query['ConsoleUIEnabled'] = $request->consoleUIEnabled;
        }
        if (!Utils::isUnset($request->enable4lw)) {
            $query['Enable4lw'] = $request->enable4lw;
        }
        if (!Utils::isUnset($request->eurekaSupported)) {
            $query['EurekaSupported'] = $request->eurekaSupported;
        }
        if (!Utils::isUnset($request->extendedTypesEnable)) {
            $query['ExtendedTypesEnable'] = $request->extendedTypesEnable;
        }
        if (!Utils::isUnset($request->initLimit)) {
            $query['InitLimit'] = $request->initLimit;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->juteMaxbuffer)) {
            $query['JuteMaxbuffer'] = $request->juteMaxbuffer;
        }
        if (!Utils::isUnset($request->MCPEnabled)) {
            $query['MCPEnabled'] = $request->MCPEnabled;
        }
        if (!Utils::isUnset($request->maxClientCnxns)) {
            $query['MaxClientCnxns'] = $request->maxClientCnxns;
        }
        if (!Utils::isUnset($request->maxSessionTimeout)) {
            $query['MaxSessionTimeout'] = $request->maxSessionTimeout;
        }
        if (!Utils::isUnset($request->minSessionTimeout)) {
            $query['MinSessionTimeout'] = $request->minSessionTimeout;
        }
        if (!Utils::isUnset($request->namingAuthEnabled)) {
            $query['NamingAuthEnabled'] = $request->namingAuthEnabled;
        }
        if (!Utils::isUnset($request->passWord)) {
            $query['PassWord'] = $request->passWord;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->snapshotCount)) {
            $query['SnapshotCount'] = $request->snapshotCount;
        }
        if (!Utils::isUnset($request->syncLimit)) {
            $query['SyncLimit'] = $request->syncLimit;
        }
        if (!Utils::isUnset($request->TLSEnabled)) {
            $query['TLSEnabled'] = $request->TLSEnabled;
        }
        if (!Utils::isUnset($request->tickTime)) {
            $query['TickTime'] = $request->tickTime;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $body = [];
        if (!Utils::isUnset($request->openSuperAcl)) {
            $body['OpenSuperAcl'] = $request->openSuperAcl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of an instance.
     *  *
     * @param UpdateConfigRequest $request UpdateConfigRequest
     *
     * @return UpdateConfigResponse UpdateConfigResponse
     */
    public function updateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a namespace for the Nacos engine.
     *  *
     * @param UpdateEngineNamespaceRequest $request UpdateEngineNamespaceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEngineNamespaceResponse UpdateEngineNamespaceResponse
     */
    public function updateEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceCount)) {
            $query['ServiceCount'] = $request->serviceCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEngineNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a namespace for the Nacos engine.
     *  *
     * @param UpdateEngineNamespaceRequest $request UpdateEngineNamespaceRequest
     *
     * @return UpdateEngineNamespaceResponse UpdateEngineNamespaceResponse
     */
    public function updateEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a throttling rule.
     *  *
     * @param UpdateFlowRuleRequest $request UpdateFlowRuleRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFlowRuleResponse UpdateFlowRuleResponse
     */
    public function updateFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->controlBehavior)) {
            $query['ControlBehavior'] = $request->controlBehavior;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->maxQueueingTimeMs)) {
            $query['MaxQueueingTimeMs'] = $request->maxQueueingTimeMs;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a throttling rule.
     *  *
     * @param UpdateFlowRuleRequest $request UpdateFlowRuleRequest
     *
     * @return UpdateFlowRuleResponse UpdateFlowRuleResponse
     */
    public function updateFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the consumer on which a gateway performs authentication operations.
     *  *
     * @param UpdateGatewayAuthConsumerRequest $request UpdateGatewayAuthConsumerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayAuthConsumerResponse UpdateGatewayAuthConsumerResponse
     */
    public function updateGatewayAuthConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->jwks)) {
            $query['Jwks'] = $request->jwks;
        }
        if (!Utils::isUnset($request->keyName)) {
            $query['KeyName'] = $request->keyName;
        }
        if (!Utils::isUnset($request->keyValue)) {
            $query['KeyValue'] = $request->keyValue;
        }
        if (!Utils::isUnset($request->tokenName)) {
            $query['TokenName'] = $request->tokenName;
        }
        if (!Utils::isUnset($request->tokenPass)) {
            $query['TokenPass'] = $request->tokenPass;
        }
        if (!Utils::isUnset($request->tokenPosition)) {
            $query['TokenPosition'] = $request->tokenPosition;
        }
        if (!Utils::isUnset($request->tokenPrefix)) {
            $query['TokenPrefix'] = $request->tokenPrefix;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayAuthConsumer',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the consumer on which a gateway performs authentication operations.
     *  *
     * @param UpdateGatewayAuthConsumerRequest $request UpdateGatewayAuthConsumerRequest
     *
     * @return UpdateGatewayAuthConsumerResponse UpdateGatewayAuthConsumerResponse
     */
    public function updateGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a list of resources on which permissions are granted to a gateway authentication consumer.
     *  *
     * @param UpdateGatewayAuthConsumerResourceRequest $tmpReq  UpdateGatewayAuthConsumerResourceRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayAuthConsumerResourceResponse UpdateGatewayAuthConsumerResourceResponse
     */
    public function updateGatewayAuthConsumerResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayAuthConsumerResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceList)) {
            $request->resourceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceList, 'ResourceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->resourceListShrink)) {
            $query['ResourceList'] = $request->resourceListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayAuthConsumerResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a list of resources on which permissions are granted to a gateway authentication consumer.
     *  *
     * @param UpdateGatewayAuthConsumerResourceRequest $request UpdateGatewayAuthConsumerResourceRequest
     *
     * @return UpdateGatewayAuthConsumerResourceResponse UpdateGatewayAuthConsumerResourceResponse
     */
    public function updateGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the resource authorization status for the consumer on which a gateway performs authentication operations.
     *  *
     * @param UpdateGatewayAuthConsumerResourceStatusRequest $request UpdateGatewayAuthConsumerResourceStatusRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayAuthConsumerResourceStatusResponse UpdateGatewayAuthConsumerResourceStatusResponse
     */
    public function updateGatewayAuthConsumerResourceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->idList)) {
            $query['IdList'] = $request->idList;
        }
        if (!Utils::isUnset($request->resourceStatus)) {
            $query['ResourceStatus'] = $request->resourceStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayAuthConsumerResourceStatus',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayAuthConsumerResourceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the resource authorization status for the consumer on which a gateway performs authentication operations.
     *  *
     * @param UpdateGatewayAuthConsumerResourceStatusRequest $request UpdateGatewayAuthConsumerResourceStatusRequest
     *
     * @return UpdateGatewayAuthConsumerResourceStatusResponse UpdateGatewayAuthConsumerResourceStatusResponse
     */
    public function updateGatewayAuthConsumerResourceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerResourceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the status of the consumer on which a gateway performs authentication operations.
     *  *
     * @param UpdateGatewayAuthConsumerStatusRequest $request UpdateGatewayAuthConsumerStatusRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayAuthConsumerStatusResponse UpdateGatewayAuthConsumerStatusResponse
     */
    public function updateGatewayAuthConsumerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerStatus)) {
            $query['ConsumerStatus'] = $request->consumerStatus;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayAuthConsumerStatus',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayAuthConsumerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the status of the consumer on which a gateway performs authentication operations.
     *  *
     * @param UpdateGatewayAuthConsumerStatusRequest $request UpdateGatewayAuthConsumerStatusRequest
     *
     * @return UpdateGatewayAuthConsumerStatusResponse UpdateGatewayAuthConsumerStatusResponse
     */
    public function updateGatewayAuthConsumerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 更新网关路由熔断规则
     *  *
     * @param UpdateGatewayCircuitBreakerRuleRequest $request UpdateGatewayCircuitBreakerRuleRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayCircuitBreakerRuleResponse UpdateGatewayCircuitBreakerRuleResponse
     */
    public function updateGatewayCircuitBreakerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->behaviorType)) {
            $query['BehaviorType'] = $request->behaviorType;
        }
        if (!Utils::isUnset($request->bodyEncoding)) {
            $query['BodyEncoding'] = $request->bodyEncoding;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->maxAllowedMs)) {
            $query['MaxAllowedMs'] = $request->maxAllowedMs;
        }
        if (!Utils::isUnset($request->minRequestAmount)) {
            $query['MinRequestAmount'] = $request->minRequestAmount;
        }
        if (!Utils::isUnset($request->recoveryTimeoutSec)) {
            $query['RecoveryTimeoutSec'] = $request->recoveryTimeoutSec;
        }
        if (!Utils::isUnset($request->responseContentBody)) {
            $query['ResponseContentBody'] = $request->responseContentBody;
        }
        if (!Utils::isUnset($request->responseRedirectUrl)) {
            $query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }
        if (!Utils::isUnset($request->responseStatusCode)) {
            $query['ResponseStatusCode'] = $request->responseStatusCode;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->routeName)) {
            $query['RouteName'] = $request->routeName;
        }
        if (!Utils::isUnset($request->statDurationSec)) {
            $query['StatDurationSec'] = $request->statDurationSec;
        }
        if (!Utils::isUnset($request->strategy)) {
            $query['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->triggerRatio)) {
            $query['TriggerRatio'] = $request->triggerRatio;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayCircuitBreakerRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新网关路由熔断规则
     *  *
     * @param UpdateGatewayCircuitBreakerRuleRequest $request UpdateGatewayCircuitBreakerRuleRequest
     *
     * @return UpdateGatewayCircuitBreakerRuleResponse UpdateGatewayCircuitBreakerRuleResponse
     */
    public function updateGatewayCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about the domain name associated with a gateway.
     *  *
     * @param UpdateGatewayDomainRequest $request UpdateGatewayDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayDomainResponse UpdateGatewayDomainResponse
     */
    public function updateGatewayDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->http2)) {
            $query['Http2'] = $request->http2;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mustHttps)) {
            $query['MustHttps'] = $request->mustHttps;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->tlsMax)) {
            $query['TlsMax'] = $request->tlsMax;
        }
        if (!Utils::isUnset($request->tlsMin)) {
            $query['TlsMin'] = $request->tlsMin;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayDomain',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about the domain name associated with a gateway.
     *  *
     * @param UpdateGatewayDomainRequest $request UpdateGatewayDomainRequest
     *
     * @return UpdateGatewayDomainResponse UpdateGatewayDomainResponse
     */
    public function updateGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 更新网关路由流控规则
     *  *
     * @param UpdateGatewayFlowRuleRequest $request UpdateGatewayFlowRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayFlowRuleResponse UpdateGatewayFlowRuleResponse
     */
    public function updateGatewayFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->behaviorType)) {
            $query['BehaviorType'] = $request->behaviorType;
        }
        if (!Utils::isUnset($request->bodyEncoding)) {
            $query['BodyEncoding'] = $request->bodyEncoding;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->responseContentBody)) {
            $query['ResponseContentBody'] = $request->responseContentBody;
        }
        if (!Utils::isUnset($request->responseRedirectUrl)) {
            $query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }
        if (!Utils::isUnset($request->responseStatusCode)) {
            $query['ResponseStatusCode'] = $request->responseStatusCode;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->routeName)) {
            $query['RouteName'] = $request->routeName;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayFlowRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新网关路由流控规则
     *  *
     * @param UpdateGatewayFlowRuleRequest $request UpdateGatewayFlowRuleRequest
     *
     * @return UpdateGatewayFlowRuleResponse UpdateGatewayFlowRuleResponse
     */
    public function updateGatewayFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 更新网关路由隔离规则
     *  *
     * @param UpdateGatewayIsolationRuleRequest $request UpdateGatewayIsolationRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayIsolationRuleResponse UpdateGatewayIsolationRuleResponse
     */
    public function updateGatewayIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->behaviorType)) {
            $query['BehaviorType'] = $request->behaviorType;
        }
        if (!Utils::isUnset($request->bodyEncoding)) {
            $query['BodyEncoding'] = $request->bodyEncoding;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $query['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->responseContentBody)) {
            $query['ResponseContentBody'] = $request->responseContentBody;
        }
        if (!Utils::isUnset($request->responseRedirectUrl)) {
            $query['ResponseRedirectUrl'] = $request->responseRedirectUrl;
        }
        if (!Utils::isUnset($request->responseStatusCode)) {
            $query['ResponseStatusCode'] = $request->responseStatusCode;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->routeName)) {
            $query['RouteName'] = $request->routeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayIsolationRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新网关路由隔离规则
     *  *
     * @param UpdateGatewayIsolationRuleRequest $request UpdateGatewayIsolationRuleRequest
     *
     * @return UpdateGatewayIsolationRuleResponse UpdateGatewayIsolationRuleResponse
     */
    public function updateGatewayIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Renames a gateway.
     *  *
     * @param UpdateGatewayNameRequest $request UpdateGatewayNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayNameResponse UpdateGatewayNameResponse
     */
    public function updateGatewayNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayName',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renames a gateway.
     *  *
     * @param UpdateGatewayNameRequest $request UpdateGatewayNameRequest
     *
     * @return UpdateGatewayNameResponse UpdateGatewayNameResponse
     */
    public function updateGatewayName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayNameWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configurations of a gateway.
     *  *
     * @param UpdateGatewayOptionRequest $tmpReq  UpdateGatewayOptionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayOptionResponse UpdateGatewayOptionResponse
     */
    public function updateGatewayOptionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayOptionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->gatewayOption)) {
            $request->gatewayOptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->gatewayOption, 'GatewayOption', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayOptionShrink)) {
            $query['GatewayOption'] = $request->gatewayOptionShrink;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayOption',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of a gateway.
     *  *
     * @param UpdateGatewayOptionRequest $request UpdateGatewayOptionRequest
     *
     * @return UpdateGatewayOptionResponse UpdateGatewayOptionResponse
     */
    public function updateGatewayOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayOptionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a route for a gateway.
     *  *
     * @param UpdateGatewayRouteRequest $tmpReq  UpdateGatewayRouteRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteResponse UpdateGatewayRouteResponse
     */
    public function updateGatewayRouteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->directResponseJSON)) {
            $request->directResponseJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->directResponseJSON, 'DirectResponseJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->fallbackServices)) {
            $request->fallbackServicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fallbackServices, 'FallbackServices', 'json');
        }
        if (!Utils::isUnset($tmpReq->predicates)) {
            $request->predicatesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->predicates, 'Predicates', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirectJSON)) {
            $request->redirectJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirectJSON, 'RedirectJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->services)) {
            $request->servicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->services, 'Services', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->directResponseJSONShrink)) {
            $query['DirectResponseJSON'] = $request->directResponseJSONShrink;
        }
        if (!Utils::isUnset($request->domainIdListJSON)) {
            $query['DomainIdListJSON'] = $request->domainIdListJSON;
        }
        if (!Utils::isUnset($request->enableWaf)) {
            $query['EnableWaf'] = $request->enableWaf;
        }
        if (!Utils::isUnset($request->fallback)) {
            $query['Fallback'] = $request->fallback;
        }
        if (!Utils::isUnset($request->fallbackServicesShrink)) {
            $query['FallbackServices'] = $request->fallbackServicesShrink;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->predicatesShrink)) {
            $query['Predicates'] = $request->predicatesShrink;
        }
        if (!Utils::isUnset($request->redirectJSONShrink)) {
            $query['RedirectJSON'] = $request->redirectJSONShrink;
        }
        if (!Utils::isUnset($request->routeOrder)) {
            $query['RouteOrder'] = $request->routeOrder;
        }
        if (!Utils::isUnset($request->servicesShrink)) {
            $query['Services'] = $request->servicesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a route for a gateway.
     *  *
     * @param UpdateGatewayRouteRequest $request UpdateGatewayRouteRequest
     *
     * @return UpdateGatewayRouteResponse UpdateGatewayRouteResponse
     */
    public function updateGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the authentication configurations of a route.
     *  *
     * @param UpdateGatewayRouteAuthRequest $tmpReq  UpdateGatewayRouteAuthRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteAuthResponse UpdateGatewayRouteAuthResponse
     */
    public function updateGatewayRouteAuthWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteAuthShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authJSON)) {
            $request->authJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authJSON, 'AuthJSON', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->authJSONShrink)) {
            $query['AuthJSON'] = $request->authJSONShrink;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteAuth',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the authentication configurations of a route.
     *  *
     * @param UpdateGatewayRouteAuthRequest $request UpdateGatewayRouteAuthRequest
     *
     * @return UpdateGatewayRouteAuthResponse UpdateGatewayRouteAuthResponse
     */
    public function updateGatewayRouteAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteAuthWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the cross-origin resource sharing (CORS) policy of a route.
     *  *
     * @param UpdateGatewayRouteCORSRequest $tmpReq  UpdateGatewayRouteCORSRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteCORSResponse UpdateGatewayRouteCORSResponse
     */
    public function updateGatewayRouteCORSWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteCORSShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->corsJSON)) {
            $request->corsJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->corsJSON, 'CorsJSON', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->corsJSONShrink)) {
            $query['CorsJSON'] = $request->corsJSONShrink;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteCORS',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteCORSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the cross-origin resource sharing (CORS) policy of a route.
     *  *
     * @param UpdateGatewayRouteCORSRequest $request UpdateGatewayRouteCORSRequest
     *
     * @return UpdateGatewayRouteCORSResponse UpdateGatewayRouteCORSResponse
     */
    public function updateGatewayRouteCORS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteCORSWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the rewrite policy of a route for a gateway.
     *  *
     * @param UpdateGatewayRouteHTTPRewriteRequest $request UpdateGatewayRouteHTTPRewriteRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteHTTPRewriteResponse UpdateGatewayRouteHTTPRewriteResponse
     */
    public function updateGatewayRouteHTTPRewriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->httpRewriteJSON)) {
            $query['HttpRewriteJSON'] = $request->httpRewriteJSON;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteHTTPRewrite',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteHTTPRewriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the rewrite policy of a route for a gateway.
     *  *
     * @param UpdateGatewayRouteHTTPRewriteRequest $request UpdateGatewayRouteHTTPRewriteRequest
     *
     * @return UpdateGatewayRouteHTTPRewriteResponse UpdateGatewayRouteHTTPRewriteResponse
     */
    public function updateGatewayRouteHTTPRewrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteHTTPRewriteWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the header configuration policy of a route.
     *  *
     * @param UpdateGatewayRouteHeaderOpRequest $request UpdateGatewayRouteHeaderOpRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteHeaderOpResponse UpdateGatewayRouteHeaderOpResponse
     */
    public function updateGatewayRouteHeaderOpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->headerOpJSON)) {
            $query['HeaderOpJSON'] = $request->headerOpJSON;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteHeaderOp',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteHeaderOpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the header configuration policy of a route.
     *  *
     * @param UpdateGatewayRouteHeaderOpRequest $request UpdateGatewayRouteHeaderOpRequest
     *
     * @return UpdateGatewayRouteHeaderOpResponse UpdateGatewayRouteHeaderOpResponse
     */
    public function updateGatewayRouteHeaderOp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteHeaderOpWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the retry policy of a route.
     *  *
     * @param UpdateGatewayRouteRetryRequest $tmpReq  UpdateGatewayRouteRetryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteRetryResponse UpdateGatewayRouteRetryResponse
     */
    public function updateGatewayRouteRetryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteRetryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->retryJSON)) {
            $request->retryJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retryJSON, 'RetryJSON', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->retryJSONShrink)) {
            $query['RetryJSON'] = $request->retryJSONShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteRetry',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteRetryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the retry policy of a route.
     *  *
     * @param UpdateGatewayRouteRetryRequest $request UpdateGatewayRouteRetryRequest
     *
     * @return UpdateGatewayRouteRetryResponse UpdateGatewayRouteRetryResponse
     */
    public function updateGatewayRouteRetry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteRetryWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the timeout policy of a route.
     *  *
     * @param UpdateGatewayRouteTimeoutRequest $tmpReq  UpdateGatewayRouteTimeoutRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteTimeoutResponse UpdateGatewayRouteTimeoutResponse
     */
    public function updateGatewayRouteTimeoutWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteTimeoutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->timeoutJSON)) {
            $request->timeoutJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timeoutJSON, 'TimeoutJSON', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->timeoutJSONShrink)) {
            $query['TimeoutJSON'] = $request->timeoutJSONShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteTimeout',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteTimeoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the timeout policy of a route.
     *  *
     * @param UpdateGatewayRouteTimeoutRequest $request UpdateGatewayRouteTimeoutRequest
     *
     * @return UpdateGatewayRouteTimeoutResponse UpdateGatewayRouteTimeoutResponse
     */
    public function updateGatewayRouteTimeout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteTimeoutWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the WAF status of a route.
     *  *
     * @param UpdateGatewayRouteWafStatusRequest $request UpdateGatewayRouteWafStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteWafStatusResponse UpdateGatewayRouteWafStatusResponse
     */
    public function updateGatewayRouteWafStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->enableWaf)) {
            $query['EnableWaf'] = $request->enableWaf;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteWafStatus',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteWafStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the WAF status of a route.
     *  *
     * @param UpdateGatewayRouteWafStatusRequest $request UpdateGatewayRouteWafStatusRequest
     *
     * @return UpdateGatewayRouteWafStatusResponse UpdateGatewayRouteWafStatusResponse
     */
    public function updateGatewayRouteWafStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteWafStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the health check policy of a specified service in a cloud-native gateway.
     *  *
     * @param UpdateGatewayServiceCheckRequest $tmpReq  UpdateGatewayServiceCheckRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayServiceCheckResponse UpdateGatewayServiceCheckResponse
     */
    public function updateGatewayServiceCheckWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayServiceCheckShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->expectedStatuses)) {
            $request->expectedStatusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->expectedStatuses, 'ExpectedStatuses', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->check)) {
            $query['Check'] = $request->check;
        }
        if (!Utils::isUnset($request->expectedStatusesShrink)) {
            $query['ExpectedStatuses'] = $request->expectedStatusesShrink;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->httpHost)) {
            $query['HttpHost'] = $request->httpHost;
        }
        if (!Utils::isUnset($request->httpPath)) {
            $query['HttpPath'] = $request->httpPath;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayServiceCheck',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayServiceCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the health check policy of a specified service in a cloud-native gateway.
     *  *
     * @param UpdateGatewayServiceCheckRequest $request UpdateGatewayServiceCheckRequest
     *
     * @return UpdateGatewayServiceCheckResponse UpdateGatewayServiceCheckResponse
     */
    public function updateGatewayServiceCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceCheckWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the traffic policy of a service.
     *  *
     * @param UpdateGatewayServiceTrafficPolicyRequest $tmpReq  UpdateGatewayServiceTrafficPolicyRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayServiceTrafficPolicyResponse UpdateGatewayServiceTrafficPolicyResponse
     */
    public function updateGatewayServiceTrafficPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayServiceTrafficPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->gatewayTrafficPolicy)) {
            $request->gatewayTrafficPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->gatewayTrafficPolicy, 'GatewayTrafficPolicy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayTrafficPolicyShrink)) {
            $query['GatewayTrafficPolicy'] = $request->gatewayTrafficPolicyShrink;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayServiceTrafficPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayServiceTrafficPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the traffic policy of a service.
     *  *
     * @param UpdateGatewayServiceTrafficPolicyRequest $request UpdateGatewayServiceTrafficPolicyRequest
     *
     * @return UpdateGatewayServiceTrafficPolicyResponse UpdateGatewayServiceTrafficPolicyResponse
     */
    public function updateGatewayServiceTrafficPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceTrafficPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the version of a service.
     *  *
     * @param UpdateGatewayServiceVersionRequest $request UpdateGatewayServiceVersionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayServiceVersionResponse UpdateGatewayServiceVersionResponse
     */
    public function updateGatewayServiceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayServiceVersion',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the version of a service.
     *  *
     * @param UpdateGatewayServiceVersionRequest $request UpdateGatewayServiceVersionRequest
     *
     * @return UpdateGatewayServiceVersionResponse UpdateGatewayServiceVersionResponse
     */
    public function updateGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway.
     *  *
     * @description You can call this operation to update the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway. If you add nodes or increase the specifications, you will incur fees. For more information, see [Pricing](https://help.aliyun.com/document_detail/250950.html).
     *  *
     * @param UpdateGatewaySpecRequest $request UpdateGatewaySpecRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewaySpecResponse UpdateGatewaySpecResponse
     */
    public function updateGatewaySpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->replica)) {
            $query['Replica'] = $request->replica;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewaySpec',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewaySpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway.
     *  *
     * @description You can call this operation to update the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway. If you add nodes or increase the specifications, you will incur fees. For more information, see [Pricing](https://help.aliyun.com/document_detail/250950.html).
     *  *
     * @param UpdateGatewaySpecRequest $request UpdateGatewaySpecRequest
     *
     * @return UpdateGatewaySpecResponse UpdateGatewaySpecResponse
     */
    public function updateGatewaySpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewaySpecWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the version number of the destination cluster.
     *  *
     * @param UpdateImageRequest $request UpdateImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateImageResponse UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->versionCode)) {
            $query['VersionCode'] = $request->versionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateImage',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the version number of the destination cluster.
     *  *
     * @param UpdateImageRequest $request UpdateImageRequest
     *
     * @return UpdateImageResponse UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }

    /**
     * @summary 更新隔离规则
     *  *
     * @param UpdateIsolationRuleRequest $request UpdateIsolationRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIsolationRuleResponse UpdateIsolationRuleResponse
     */
    public function updateIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIsolationRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIsolationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新隔离规则
     *  *
     * @param UpdateIsolationRuleRequest $request UpdateIsolationRuleRequest
     *
     * @return UpdateIsolationRuleResponse UpdateIsolationRuleResponse
     */
    public function updateIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configuration of a canary release for messaging of an application.
     *  *
     * @param UpdateMessageQueueRouteRequest $tmpReq  UpdateMessageQueueRouteRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMessageQueueRouteResponse UpdateMessageQueueRouteResponse
     */
    public function updateMessageQueueRouteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMessageQueueRouteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->filterSide)) {
            $query['FilterSide'] = $request->filterSide;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMessageQueueRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMessageQueueRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configuration of a canary release for messaging of an application.
     *  *
     * @param UpdateMessageQueueRouteRequest $request UpdateMessageQueueRouteRequest
     *
     * @return UpdateMessageQueueRouteResponse UpdateMessageQueueRouteResponse
     */
    public function updateMessageQueueRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMessageQueueRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a migration task.
     *  *
     * @param UpdateMigrationTaskRequest $request UpdateMigrationTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMigrationTaskResponse UpdateMigrationTaskResponse
     */
    public function updateMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->originInstanceAddress)) {
            $query['OriginInstanceAddress'] = $request->originInstanceAddress;
        }
        if (!Utils::isUnset($request->originInstanceName)) {
            $query['OriginInstanceName'] = $request->originInstanceName;
        }
        if (!Utils::isUnset($request->originInstanceNamespace)) {
            $query['OriginInstanceNamespace'] = $request->originInstanceNamespace;
        }
        if (!Utils::isUnset($request->projectDesc)) {
            $query['ProjectDesc'] = $request->projectDesc;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->syncType)) {
            $query['SyncType'] = $request->syncType;
        }
        if (!Utils::isUnset($request->targetClusterName)) {
            $query['TargetClusterName'] = $request->targetClusterName;
        }
        if (!Utils::isUnset($request->targetClusterUrl)) {
            $query['TargetClusterUrl'] = $request->targetClusterUrl;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $query['TargetInstanceId'] = $request->targetInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMigrationTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a migration task.
     *  *
     * @param UpdateMigrationTaskRequest $request UpdateMigrationTaskRequest
     *
     * @return UpdateMigrationTaskResponse UpdateMigrationTaskResponse
     */
    public function updateMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a Nacos cluster.
     *  *
     * @param UpdateNacosClusterRequest $request UpdateNacosClusterRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNacosClusterResponse UpdateNacosClusterResponse
     */
    public function updateNacosClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->checkPort)) {
            $query['CheckPort'] = $request->checkPort;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->healthChecker)) {
            $query['HealthChecker'] = $request->healthChecker;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->useInstancePortForCheck)) {
            $query['UseInstancePortForCheck'] = $request->useInstancePortForCheck;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNacosCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNacosClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a Nacos cluster.
     *  *
     * @param UpdateNacosClusterRequest $request UpdateNacosClusterRequest
     *
     * @return UpdateNacosClusterResponse UpdateNacosClusterResponse
     */
    public function updateNacosCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a Nacos configuration.
     *  *
     * @description >  The current API operation is not provided in Nacos SDK. For more information about Nacos SDK, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param UpdateNacosConfigRequest $request UpdateNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNacosConfigResponse UpdateNacosConfigResponse
     */
    public function updateNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->betaIps)) {
            $query['BetaIps'] = $request->betaIps;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->encryptedDataKey)) {
            $query['EncryptedDataKey'] = $request->encryptedDataKey;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->md5)) {
            $query['Md5'] = $request->md5;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a Nacos configuration.
     *  *
     * @description >  The current API operation is not provided in Nacos SDK. For more information about Nacos SDK, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param UpdateNacosConfigRequest $request UpdateNacosConfigRequest
     *
     * @return UpdateNacosConfigResponse UpdateNacosConfigResponse
     */
    public function updateNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about application instances that are registered with a Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param UpdateNacosInstanceRequest $request UpdateNacosInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNacosInstanceResponse UpdateNacosInstanceResponse
     */
    public function updateNacosInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->ephemeral)) {
            $query['Ephemeral'] = $request->ephemeral;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $body = [];
        if (!Utils::isUnset($request->metadata)) {
            $body['Metadata'] = $request->metadata;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateNacosInstance',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about application instances that are registered with a Nacos instance.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param UpdateNacosInstanceRequest $request UpdateNacosInstanceRequest
     *
     * @return UpdateNacosInstanceResponse UpdateNacosInstanceResponse
     */
    public function updateNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a Nacos service.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param UpdateNacosServiceRequest $request UpdateNacosServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNacosServiceResponse UpdateNacosServiceResponse
     */
    public function updateNacosServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->protectThreshold)) {
            $query['ProtectThreshold'] = $request->protectThreshold;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNacosService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a Nacos service.
     *  *
     * @description > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *  *
     * @param UpdateNacosServiceRequest $request UpdateNacosServiceRequest
     *
     * @return UpdateNacosServiceResponse UpdateNacosServiceResponse
     */
    public function updateNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configuration of a plug-in.
     *  *
     * @param UpdatePluginConfigRequest $tmpReq  UpdatePluginConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePluginConfigResponse UpdatePluginConfigResponse
     */
    public function updatePluginConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdatePluginConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIdList)) {
            $request->resourceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIdList, 'ResourceIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->configLevel)) {
            $query['ConfigLevel'] = $request->configLevel;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->gmtCreate)) {
            $query['GmtCreate'] = $request->gmtCreate;
        }
        if (!Utils::isUnset($request->gmtModified)) {
            $query['GmtModified'] = $request->gmtModified;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->resourceIdListShrink)) {
            $query['ResourceIdList'] = $request->resourceIdListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePluginConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configuration of a plug-in.
     *  *
     * @param UpdatePluginConfigRequest $request UpdatePluginConfigRequest
     *
     * @return UpdatePluginConfigResponse UpdatePluginConfigResponse
     */
    public function updatePluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePluginConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a certificate.
     *  *
     * @param UpdateSSLCertRequest $request UpdateSSLCertRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSSLCertResponse UpdateSSLCertResponse
     */
    public function updateSSLCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSSLCert',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a certificate.
     *  *
     * @param UpdateSSLCertRequest $request UpdateSSLCertRequest
     *
     * @return UpdateSSLCertResponse UpdateSSLCertResponse
     */
    public function updateSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSSLCertWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies service sources of a cloud-native gateway. You can modify only Container Service for Kubernetes (ACK) service sources that contain configurations related to Ingress resource monitoring.
     *  *
     * @param UpdateServiceSourceRequest $tmpReq  UpdateServiceSourceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceSourceResponse UpdateServiceSourceResponse
     */
    public function updateServiceSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateServiceSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ingressOptionsRequest)) {
            $request->ingressOptionsRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ingressOptionsRequest, 'IngressOptionsRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->pathList)) {
            $request->pathListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pathList, 'PathList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ingressOptionsRequestShrink)) {
            $query['IngressOptionsRequest'] = $request->ingressOptionsRequestShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pathListShrink)) {
            $query['PathList'] = $request->pathListShrink;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies service sources of a cloud-native gateway. You can modify only Container Service for Kubernetes (ACK) service sources that contain configurations related to Ingress resource monitoring.
     *  *
     * @param UpdateServiceSourceRequest $request UpdateServiceSourceRequest
     *
     * @return UpdateServiceSourceResponse UpdateServiceSourceResponse
     */
    public function updateServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a ZooKeeper node.
     *  *
     * @param UpdateZnodeRequest $request UpdateZnodeRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateZnodeResponse UpdateZnodeResponse
     */
    public function updateZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateZnode',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a ZooKeeper node.
     *  *
     * @param UpdateZnodeRequest $request UpdateZnodeRequest
     *
     * @return UpdateZnodeResponse UpdateZnodeResponse
     */
    public function updateZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateZnodeWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades the version of a cluster.
     *  *
     * @param UpgradeClusterRequest $request UpgradeClusterRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeClusterResponse UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->upgradeVersion)) {
            $query['UpgradeVersion'] = $request->upgradeVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Upgrades the version of a cluster.
     *  *
     * @param UpgradeClusterRequest $request UpgradeClusterRequest
     *
     * @return UpgradeClusterResponse UpgradeClusterResponse
     */
    public function upgradeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterWithOptions($request, $runtime);
    }
}
