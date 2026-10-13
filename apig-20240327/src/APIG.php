<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchAddConsumerGroupConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchAddConsumerGroupConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchExportHttpApisRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchExportHttpApisResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchImportHttpApisRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchImportHttpApisResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchRemoveConsumerGroupConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchRemoveConsumerGroupConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchUpdateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchUpdateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CheckCommodityStatusRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CheckCommodityStatusResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAiModelCardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAiModelCardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAiModelProviderRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAiModelProviderResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAndAttachPolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAndAttachPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateChatSessionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateChatSessionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDeveloperRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDeveloperResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateMcpServerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateMigrationTaskRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateMigrationTaskResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginClassRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginClassResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginWorkspaceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginWorkspaceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePortalRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePortalResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateProductCategoryRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateProductCategoryResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateProductRefRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateProductRefResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateProductRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateProductResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateRiskCheckTaskRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateRiskCheckTaskResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSecretRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteAiModelCardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteAiModelCardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteAiModelProviderRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteAiModelProviderResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewaySecurityGroupRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewaySecurityGroupRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteMigrationTaskRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteMigrationTaskResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePluginClassRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePluginClassResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePortalRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePortalResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteProductCategoryRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteProductCategoryResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteProductRefRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteProductRefResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteProductRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteProductResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DetachAndDeletePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DetachAndDeletePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ExportHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ExportHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelCardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelCardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelProviderRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelProviderResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetApiPathFieldConfigRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetApiPathFieldConfigResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetApiPathFieldTemplateRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetApiPathFieldTemplateResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchExportTaskRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchExportTaskResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDeveloperRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDeveloperResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayElasticPolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayElasticPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResourceQuotaUsageRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResourceQuotaUsageResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHiMarketConsumerCredentialRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHiMarketConsumerCredentialResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHiMarketConsumerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHiMarketConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationNamespacedServicesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationNamespacedServicesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationTaskRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationTaskResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginClassRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginClassResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginWorkspaceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginWorkspaceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPortalRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPortalResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetProductCategoryRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetProductCategoryResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetProductRefRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetProductRefResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetProductRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetProductResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetRiskNotificationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetRiskNotificationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSecretValueResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\HandleOidcCallbackRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\HandleOidcCallbackResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\InitiateOidcAuthRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\InitiateOidcAuthResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\InstallPluginRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\InstallPluginResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\InvokeAIAgentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\InvokeAIAgentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListAiModelCardsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListAiModelCardsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListAiModelProvidersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListAiModelProvidersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListApiPathFieldTemplatesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListApiPathFieldTemplatesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListBatchExportTasksRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListBatchExportTasksResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListChatSessionsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListChatSessionsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupQuotaRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupQuotaRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerQuotaRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerQuotaRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDevelopersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDevelopersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListExternalServicesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListExternalServicesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayAuthorizableSecurityGroupsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayAuthorizableSecurityGroupsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayAuthorizedSecurityGroupRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayAuthorizedSecurityGroupRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayErrorAccessLogsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayErrorAccessLogsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayQuotaRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayQuotaRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGlobalPoliciesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGlobalPoliciesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHiMarketConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHiMarketConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHiMarketConsumerSubscriptionsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHiMarketConsumerSubscriptionsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiRoutesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiRoutesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListInstallableGatewaysRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListInstallableGatewaysResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListK8sClusterSourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListK8sClusterSourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpProductToolsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpProductToolsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMigrationTasksRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMigrationTasksResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListModelCardsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListModelCardsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMseNacosSourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMseNacosSourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginAttachmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginAttachmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginClassesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginClassesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginRepositoriesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginRepositoriesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginWorkspaceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginWorkspaceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPolicyClassesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPolicyClassesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPortalPublicationsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPortalPublicationsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPortalsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPortalsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListProductCategoriesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListProductCategoriesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListProductPublicationsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListProductPublicationsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListProductsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListProductsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListProductSubscriptionsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListProductSubscriptionsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPublishableProductsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPublishableProductsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListRiskCheckResultsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListRiskCheckResultsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListServicesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListServicesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSslCertsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSslCertsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSyncMCPServerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSyncMCPServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListZonesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListZonesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\LoginDeveloperRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\LoginDeveloperResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\LogoutDeveloperRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\LogoutDeveloperResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\PublishProductRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\PublishProductResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RefreshPluginOAuthCodeRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\RefreshPluginOAuthCodeResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RemoveConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ResetGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ResetGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RestartGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RunPluginPipelineRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\RunPluginPipelineResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\SubscribeProductRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\SubscribeProductResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\TagResourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\TagResourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UndeployHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UndeployHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UnDeployMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UninstallPluginResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UnpublishProductRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UnpublishProductResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelProviderRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelProviderResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAndAttachPolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAndAttachPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateCategoryProductsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateCategoryProductsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDeveloperStatusRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDeveloperStatusResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayElasticPolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayElasticPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayFeatureRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayFeatureResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayMaintenancePeriodRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayMaintenancePeriodResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayNameRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayNameResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleStatusRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleStatusResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMigrationTaskRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMigrationTaskResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateNetworkAccessRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateNetworkAccessResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePluginAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePortalRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePortalResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateProductCategoryRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateProductCategoryResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateProductRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateProductResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateRiskNotificationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateRiskNotificationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateSecretRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpgradeGatewayRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpgradeGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\VerifyMigrationTaskRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\VerifyMigrationTaskResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class APIG extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('apig', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a gateway quota throttling rule.
     *
     * @remarks
     * Creates a consumer-based or consumer group-based quota rule for an AI gateway. This operation takes effect only on AI gateways of version 2.1.21 or later.
     * >
     * >  Recommended call sequence:
     * > - Step 1: Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response returns a conflict preview that contains the conflictHash value.
     * > - Step 2: Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - AddGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayQuotaRuleResponse
     *
     * @param string                     $gatewayId
     * @param AddGatewayQuotaRuleRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AddGatewayQuotaRuleResponse
     */
    public function addGatewayQuotaRuleWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conflictHash) {
            @$body['conflictHash'] = $request->conflictHash;
        }

        if (null !== $request->consumerGroupIds) {
            @$body['consumerGroupIds'] = $request->consumerGroupIds;
        }

        if (null !== $request->consumerIds) {
            @$body['consumerIds'] = $request->consumerIds;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->overwrite) {
            @$body['overwrite'] = $request->overwrite;
        }

        if (null !== $request->periodMultiplier) {
            @$body['periodMultiplier'] = $request->periodMultiplier;
        }

        if (null !== $request->periodType) {
            @$body['periodType'] = $request->periodType;
        }

        if (null !== $request->quotaDimension) {
            @$body['quotaDimension'] = $request->quotaDimension;
        }

        if (null !== $request->quotaLimit) {
            @$body['quotaLimit'] = $request->quotaLimit;
        }

        if (null !== $request->ruleName) {
            @$body['ruleName'] = $request->ruleName;
        }

        if (null !== $request->subjectType) {
            @$body['subjectType'] = $request->subjectType;
        }

        if (null !== $request->timezone) {
            @$body['timezone'] = $request->timezone;
        }

        if (null !== $request->windowAlignment) {
            @$body['windowAlignment'] = $request->windowAlignment;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a gateway quota throttling rule.
     *
     * @remarks
     * Creates a consumer-based or consumer group-based quota rule for an AI gateway. This operation takes effect only on AI gateways of version 2.1.21 or later.
     * >
     * >  Recommended call sequence:
     * > - Step 1: Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response returns a conflict preview that contains the conflictHash value.
     * > - Step 2: Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - AddGatewayQuotaRuleRequest
     *
     * @returns AddGatewayQuotaRuleResponse
     *
     * @param string                     $gatewayId
     * @param AddGatewayQuotaRuleRequest $request
     *
     * @return AddGatewayQuotaRuleResponse
     */
    public function addGatewayQuotaRule($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewayQuotaRuleWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Authorizes a security group for gateway access to services.
     *
     * @param request - AddGatewaySecurityGroupRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewaySecurityGroupRuleResponse
     *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->portRanges) {
            @$body['portRanges'] = $request->portRanges;
        }

        if (null !== $request->securityGroupId) {
            @$body['securityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGatewaySecurityGroupRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/security-group-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorizes a security group for gateway access to services.
     *
     * @param request - AddGatewaySecurityGroupRuleRequest
     *
     * @returns AddGatewaySecurityGroupRuleResponse
     *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request
     *
     * @return AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRule($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Adds members to a consumer group in batches.
     *
     * @param request - BatchAddConsumerGroupConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAddConsumerGroupConsumersResponse
     *
     * @param string                                $consumerGroupId
     * @param BatchAddConsumerGroupConsumersRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchAddConsumerGroupConsumersResponse
     */
    public function batchAddConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->consumerIds) {
            @$body['consumerIds'] = $request->consumerIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchAddConsumerGroupConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '/consumers/batch-add',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchAddConsumerGroupConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds members to a consumer group in batches.
     *
     * @param request - BatchAddConsumerGroupConsumersRequest
     *
     * @returns BatchAddConsumerGroupConsumersResponse
     *
     * @param string                                $consumerGroupId
     * @param BatchAddConsumerGroupConsumersRequest $request
     *
     * @return BatchAddConsumerGroupConsumersResponse
     */
    public function batchAddConsumerGroupConsumers($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchAddConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Revokes API consumer authorization rules in batches.
     *
     * @param request - BatchDeleteConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteConsumerAuthorizationRuleResponse
     *
     * @param BatchDeleteConsumerAuthorizationRuleRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return BatchDeleteConsumerAuthorizationRuleResponse
     */
    public function batchDeleteConsumerAuthorizationRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerAuthorizationRuleIds) {
            @$query['consumerAuthorizationRuleIds'] = $request->consumerAuthorizationRuleIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchDeleteConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes API consumer authorization rules in batches.
     *
     * @param request - BatchDeleteConsumerAuthorizationRuleRequest
     *
     * @returns BatchDeleteConsumerAuthorizationRuleResponse
     *
     * @param BatchDeleteConsumerAuthorizationRuleRequest $request
     *
     * @return BatchDeleteConsumerAuthorizationRuleResponse
     */
    public function batchDeleteConsumerAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteConsumerAuthorizationRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * Batch exports HTTP APIs.
     *
     * @param request - BatchExportHttpApisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchExportHttpApisResponse
     *
     * @param BatchExportHttpApisRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return BatchExportHttpApisResponse
     */
    public function batchExportHttpApisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiIds) {
            @$body['apiIds'] = $request->apiIds;
        }

        if (null !== $request->apiType) {
            @$body['apiType'] = $request->apiType;
        }

        if (null !== $request->extensionConfig) {
            @$body['extensionConfig'] = $request->extensionConfig;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchExportHttpApis',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/batch-export',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchExportHttpApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch exports HTTP APIs.
     *
     * @param request - BatchExportHttpApisRequest
     *
     * @returns BatchExportHttpApisResponse
     *
     * @param BatchExportHttpApisRequest $request
     *
     * @return BatchExportHttpApisResponse
     */
    public function batchExportHttpApis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchExportHttpApisWithOptions($request, $headers, $runtime);
    }

    /**
     * Imports HTTP APIs in batches.
     *
     * @param request - BatchImportHttpApisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchImportHttpApisResponse
     *
     * @param BatchImportHttpApisRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return BatchImportHttpApisResponse
     */
    public function batchImportHttpApisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowUpdate) {
            @$body['allowUpdate'] = $request->allowUpdate;
        }

        if (null !== $request->apiType) {
            @$body['apiType'] = $request->apiType;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->specContentBase64) {
            @$body['specContentBase64'] = $request->specContentBase64;
        }

        if (null !== $request->specFileUrl) {
            @$body['specFileUrl'] = $request->specFileUrl;
        }

        if (null !== $request->specOssConfig) {
            @$body['specOssConfig'] = $request->specOssConfig;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        if (null !== $request->withGatewayExtension) {
            @$body['withGatewayExtension'] = $request->withGatewayExtension;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchImportHttpApis',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/batch-import',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchImportHttpApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports HTTP APIs in batches.
     *
     * @param request - BatchImportHttpApisRequest
     *
     * @returns BatchImportHttpApisResponse
     *
     * @param BatchImportHttpApisRequest $request
     *
     * @return BatchImportHttpApisResponse
     */
    public function batchImportHttpApis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchImportHttpApisWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes consumer group members in batches.
     *
     * @param request - BatchRemoveConsumerGroupConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchRemoveConsumerGroupConsumersResponse
     *
     * @param string                                   $consumerGroupId
     * @param BatchRemoveConsumerGroupConsumersRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchRemoveConsumerGroupConsumersResponse
     */
    public function batchRemoveConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->consumerIds) {
            @$body['consumerIds'] = $request->consumerIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchRemoveConsumerGroupConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '/consumers/batch-remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchRemoveConsumerGroupConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes consumer group members in batches.
     *
     * @param request - BatchRemoveConsumerGroupConsumersRequest
     *
     * @returns BatchRemoveConsumerGroupConsumersResponse
     *
     * @param string                                   $consumerGroupId
     * @param BatchRemoveConsumerGroupConsumersRequest $request
     *
     * @return BatchRemoveConsumerGroupConsumersResponse
     */
    public function batchRemoveConsumerGroupConsumers($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchRemoveConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Updates HTTP API operations in batches.
     *
     * @param request - BatchUpdateHttpApiOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateHttpApiOperationResponse
     *
     * @param string                             $httpApiId
     * @param BatchUpdateHttpApiOperationRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchUpdateHttpApiOperationResponse
     */
    public function batchUpdateHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authConfig) {
            @$body['authConfig'] = $request->authConfig;
        }

        if (null !== $request->enableAuth) {
            @$body['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->operationIds) {
            @$body['operationIds'] = $request->operationIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchUpdateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates HTTP API operations in batches.
     *
     * @param request - BatchUpdateHttpApiOperationRequest
     *
     * @returns BatchUpdateHttpApiOperationResponse
     *
     * @param string                             $httpApiId
     * @param BatchUpdateHttpApiOperationRequest $request
     *
     * @return BatchUpdateHttpApiOperationResponse
     */
    public function batchUpdateHttpApiOperation($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchUpdateHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Moves a resource to a different resource group.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/move-resource-group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a resource to a different resource group.
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
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the activation status of the API management service.
     *
     * @param request - CheckCommodityStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCommodityStatusResponse
     *
     * @param CheckCommodityStatusRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CheckCommodityStatusResponse
     */
    public function checkCommodityStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CheckCommodityStatus',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sales/commodity-status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckCommodityStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the activation status of the API management service.
     *
     * @param request - CheckCommodityStatusRequest
     *
     * @returns CheckCommodityStatusResponse
     *
     * @param CheckCommodityStatusRequest $request
     *
     * @return CheckCommodityStatusResponse
     */
    public function checkCommodityStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkCommodityStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an AI model card.
     *
     * @remarks
     * Performs model creation for a model card under an existing model provider in a specified AI gateway instance. The target gateway must exist, belong to the current account, and be of the AI gateway type. The modelProvider must reference a model provider that already exists in the gateway.
     * The modelName must be unique within the same AI gateway instance and the same model provider. A maximum of 1,000 model cards can be created for a single gateway instance. The credit parameter currently supports only the fixed type, and the cost unit is Credits per million tokens. If this parameter is not specified, type defaults to fixed and all cost values default to 0. Each entry in availablePaths must include both path and type.
     *
     * @param request - CreateAiModelCardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAiModelCardResponse
     *
     * @param CreateAiModelCardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAiModelCardResponse
     */
    public function createAiModelCardWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->availablePaths) {
            @$body['availablePaths'] = $request->availablePaths;
        }

        if (null !== $request->credit) {
            @$body['credit'] = $request->credit;
        }

        if (null !== $request->features) {
            @$body['features'] = $request->features;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->meta) {
            @$body['meta'] = $request->meta;
        }

        if (null !== $request->modelName) {
            @$body['modelName'] = $request->modelName;
        }

        if (null !== $request->modelProvider) {
            @$body['modelProvider'] = $request->modelProvider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAiModelCard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAiModelCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AI model card.
     *
     * @remarks
     * Performs model creation for a model card under an existing model provider in a specified AI gateway instance. The target gateway must exist, belong to the current account, and be of the AI gateway type. The modelProvider must reference a model provider that already exists in the gateway.
     * The modelName must be unique within the same AI gateway instance and the same model provider. A maximum of 1,000 model cards can be created for a single gateway instance. The credit parameter currently supports only the fixed type, and the cost unit is Credits per million tokens. If this parameter is not specified, type defaults to fixed and all cost values default to 0. Each entry in availablePaths must include both path and type.
     *
     * @param request - CreateAiModelCardRequest
     *
     * @returns CreateAiModelCardResponse
     *
     * @param CreateAiModelCardRequest $request
     *
     * @return CreateAiModelCardResponse
     */
    public function createAiModelCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAiModelCardWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an AI model provider.
     *
     * @param request - CreateAiModelProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAiModelProviderResponse
     *
     * @param CreateAiModelProviderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAiModelProviderResponse
     */
    public function createAiModelProviderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->provider) {
            @$body['provider'] = $request->provider;
        }

        if (null !== $request->serviceIds) {
            @$body['serviceIds'] = $request->serviceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAiModelProvider',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAiModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AI model provider.
     *
     * @param request - CreateAiModelProviderRequest
     *
     * @returns CreateAiModelProviderResponse
     *
     * @param CreateAiModelProviderRequest $request
     *
     * @return CreateAiModelProviderResponse
     */
    public function createAiModelProvider($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAiModelProviderWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates and attaches a policy.
     *
     * @param request - CreateAndAttachPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndAttachPolicyResponse
     *
     * @param CreateAndAttachPolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAndAttachPolicyResponse
     */
    public function createAndAttachPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->className) {
            @$body['className'] = $request->className;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAndAttachPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAndAttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and attaches a policy.
     *
     * @param request - CreateAndAttachPolicyRequest
     *
     * @returns CreateAndAttachPolicyResponse
     *
     * @param CreateAndAttachPolicyRequest $request
     *
     * @return CreateAndAttachPolicyResponse
     */
    public function createAndAttachPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAndAttachPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a HiMarket chat session with a specified conversation type and associated products, and returns the ID of the newly created session.
     *
     * @param request - CreateChatSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatSessionResponse
     *
     * @param CreateChatSessionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateChatSessionResponse
     */
    public function createChatSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->products) {
            @$body['products'] = $request->products;
        }

        if (null !== $request->talkType) {
            @$body['talkType'] = $request->talkType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChatSession',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/sessions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a HiMarket chat session with a specified conversation type and associated products, and returns the ID of the newly created session.
     *
     * @param request - CreateChatSessionRequest
     *
     * @returns CreateChatSessionResponse
     *
     * @param CreateChatSessionRequest $request
     *
     * @return CreateChatSessionResponse
     */
    public function createChatSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an API consumer.
     *
     * @param request - CreateConsumerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerResponse
     *
     * @param CreateConsumerRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateConsumerResponse
     */
    public function createConsumerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->akSkIdentityConfigs) {
            @$body['akSkIdentityConfigs'] = $request->akSkIdentityConfigs;
        }

        if (null !== $request->apikeyIdentityConfig) {
            @$body['apikeyIdentityConfig'] = $request->apikeyIdentityConfig;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->jwtIdentityConfig) {
            @$body['jwtIdentityConfig'] = $request->jwtIdentityConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API consumer.
     *
     * @param request - CreateConsumerRequest
     *
     * @returns CreateConsumerResponse
     *
     * @param CreateConsumerRequest $request
     *
     * @return CreateConsumerResponse
     */
    public function createConsumer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a consumer authorization rule.
     *
     * @param request - CreateConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param CreateConsumerAuthorizationRuleRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateConsumerAuthorizationRuleResponse
     */
    public function createConsumerAuthorizationRuleWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationResourceInfos) {
            @$body['authorizationResourceInfos'] = $request->authorizationResourceInfos;
        }

        if (null !== $request->expireMode) {
            @$body['expireMode'] = $request->expireMode;
        }

        if (null !== $request->expireTimestamp) {
            @$body['expireTimestamp'] = $request->expireTimestamp;
        }

        if (null !== $request->parentResourceType) {
            @$body['parentResourceType'] = $request->parentResourceType;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer authorization rule.
     *
     * @param request - CreateConsumerAuthorizationRuleRequest
     *
     * @returns CreateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param CreateConsumerAuthorizationRuleRequest $request
     *
     * @return CreateConsumerAuthorizationRuleResponse
     */
    public function createConsumerAuthorizationRule($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerAuthorizationRuleWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Creates consumer authorization rules.
     *
     * @remarks
     * Prerequisites: Before creating consumer authorization rules, prepare resources in the following dependency chain (the corresponding creation API and ID passing relationships are shown in parentheses):
     * Gateway instance (CreateGateway → gatewayId, gw- prefix)
     * Environment (A default environment is automatically created with the gateway. You can also call CreateEnvironment → environmentId, env- prefix. The gatewayId from step 1 must be associated.)
     * HTTP API (CreateHttpApi → httpApiId, api- prefix)
     * Route and publish (CreateHttpApiRoute → routeId, hr- prefix, which belongs to the API in step 3. Then call DeployHttpApi to publish the route to the environment in step 2. Unpublished routes cannot be authorized.)
     * Consumer (CreateConsumer → consumerId, cs- prefix; or consumer group consumerGroupId, csg- prefix. Specify either consumerId or consumerGroupId.)
     *
     * @param request - CreateConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerAuthorizationRulesResponse
     *
     * @param CreateConsumerAuthorizationRulesRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateConsumerAuthorizationRulesResponse
     */
    public function createConsumerAuthorizationRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationRules) {
            @$body['authorizationRules'] = $request->authorizationRules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates consumer authorization rules.
     *
     * @remarks
     * Prerequisites: Before creating consumer authorization rules, prepare resources in the following dependency chain (the corresponding creation API and ID passing relationships are shown in parentheses):
     * Gateway instance (CreateGateway → gatewayId, gw- prefix)
     * Environment (A default environment is automatically created with the gateway. You can also call CreateEnvironment → environmentId, env- prefix. The gatewayId from step 1 must be associated.)
     * HTTP API (CreateHttpApi → httpApiId, api- prefix)
     * Route and publish (CreateHttpApiRoute → routeId, hr- prefix, which belongs to the API in step 3. Then call DeployHttpApi to publish the route to the environment in step 2. Unpublished routes cannot be authorized.)
     * Consumer (CreateConsumer → consumerId, cs- prefix; or consumer group consumerGroupId, csg- prefix. Specify either consumerId or consumerGroupId.)
     *
     * @param request - CreateConsumerAuthorizationRulesRequest
     *
     * @returns CreateConsumerAuthorizationRulesResponse
     *
     * @param CreateConsumerAuthorizationRulesRequest $request
     *
     * @return CreateConsumerAuthorizationRulesResponse
     */
    public function createConsumerAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerAuthorizationRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a consumer group.
     *
     * @param request - CreateConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param CreateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->consumerGroupId) {
            @$body['consumerGroupId'] = $request->consumerGroupId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer group.
     *
     * @param request - CreateConsumerGroupRequest
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Registers a HiMarket developer account and returns the ID of the new developer.
     *
     * @param request - CreateDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeveloperResponse
     *
     * @param CreateDeveloperRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDeveloperResponse
     */
    public function createDeveloperWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->username) {
            @$body['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDeveloper',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/developers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers a HiMarket developer account and returns the ID of the new developer.
     *
     * @param request - CreateDeveloperRequest
     *
     * @returns CreateDeveloperResponse
     *
     * @param CreateDeveloperRequest $request
     *
     * @return CreateDeveloperResponse
     */
    public function createDeveloper($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeveloperWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a domain name.
     *
     * @param request - CreateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->caCertIdentifier) {
            @$body['caCertIdentifier'] = $request->caCertIdentifier;
        }

        if (null !== $request->certIdentifier) {
            @$body['certIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->clientCACert) {
            @$body['clientCACert'] = $request->clientCACert;
        }

        if (null !== $request->domainScope) {
            @$body['domainScope'] = $request->domainScope;
        }

        if (null !== $request->forceHttps) {
            @$body['forceHttps'] = $request->forceHttps;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->http2Option) {
            @$body['http2Option'] = $request->http2Option;
        }

        if (null !== $request->mTLSEnabled) {
            @$body['mTLSEnabled'] = $request->mTLSEnabled;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tlsCipherSuitesConfig) {
            @$body['tlsCipherSuitesConfig'] = $request->tlsCipherSuitesConfig;
        }

        if (null !== $request->tlsMax) {
            @$body['tlsMax'] = $request->tlsMax;
        }

        if (null !== $request->tlsMin) {
            @$body['tlsMin'] = $request->tlsMin;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a domain name.
     *
     * @param request - CreateDomainRequest
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an environment.
     *
     * @deprecated OpenAPI CreateEnvironment is deprecated
     *
     * @param request - CreateEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnvironmentResponse
     *
     * @param CreateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Creates an environment.
     *
     * @deprecated OpenAPI CreateEnvironment is deprecated
     *
     * @param request - CreateEnvironmentRequest
     *
     * @returns CreateEnvironmentResponse
     *
     * @param CreateEnvironmentRequest $request
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvironmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a cloud-native gateway.
     *
     * @param request - CreateGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayResponse
     *
     * @param CreateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGatewayResponse
     */
    public function createGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chargeType) {
            @$body['chargeType'] = $request->chargeType;
        }

        if (null !== $request->gatewayEdition) {
            @$body['gatewayEdition'] = $request->gatewayEdition;
        }

        if (null !== $request->gatewayMode) {
            @$body['gatewayMode'] = $request->gatewayMode;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->logConfig) {
            @$body['logConfig'] = $request->logConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->networkAccessConfig) {
            @$body['networkAccessConfig'] = $request->networkAccessConfig;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->spec) {
            @$body['spec'] = $request->spec;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneConfig) {
            @$body['zoneConfig'] = $request->zoneConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cloud-native gateway.
     *
     * @param request - CreateGatewayRequest
     *
     * @returns CreateGatewayResponse
     *
     * @param CreateGatewayRequest $request
     *
     * @return CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an HTTP API.
     *
     * @param request - CreateHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiResponse
     *
     * @param CreateHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateHttpApiResponse
     */
    public function createHttpApiWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->agentProtocols) {
            @$body['agentProtocols'] = $request->agentProtocols;
        }

        if (null !== $request->aiProtocols) {
            @$body['aiProtocols'] = $request->aiProtocols;
        }

        if (null !== $request->authConfig) {
            @$body['authConfig'] = $request->authConfig;
        }

        if (null !== $request->basePath) {
            @$body['basePath'] = $request->basePath;
        }

        if (null !== $request->belongGatewayId) {
            @$body['belongGatewayId'] = $request->belongGatewayId;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->enableAuth) {
            @$body['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->firstByteTimeout) {
            @$body['firstByteTimeout'] = $request->firstByteTimeout;
        }

        if (null !== $request->ingressConfig) {
            @$body['ingressConfig'] = $request->ingressConfig;
        }

        if (null !== $request->modelCategory) {
            @$body['modelCategory'] = $request->modelCategory;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocols) {
            @$body['protocols'] = $request->protocols;
        }

        if (null !== $request->removeBasePathOnForward) {
            @$body['removeBasePathOnForward'] = $request->removeBasePathOnForward;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an HTTP API.
     *
     * @param request - CreateHttpApiRequest
     *
     * @returns CreateHttpApiResponse
     *
     * @param CreateHttpApiRequest $request
     *
     * @return CreateHttpApiResponse
     */
    public function createHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates operations for an HTTP API.
     *
     * @param request - CreateHttpApiOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateHttpApiOperationResponse
     */
    public function createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operations) {
            @$body['operations'] = $request->operations;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates operations for an HTTP API.
     *
     * @param request - CreateHttpApiOperationRequest
     *
     * @returns CreateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request
     *
     * @return CreateHttpApiOperationResponse
     */
    public function createHttpApiOperation($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Creates a route for an HTTP API.
     *
     * @param request - CreateHttpApiRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param CreateHttpApiRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateHttpApiRouteResponse
     */
    public function createHttpApiRouteWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpRouteConfig) {
            @$body['mcpRouteConfig'] = $request->mcpRouteConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->policyConfigs) {
            @$body['policyConfigs'] = $request->policyConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a route for an HTTP API.
     *
     * @param request - CreateHttpApiRouteRequest
     *
     * @returns CreateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param CreateHttpApiRouteRequest $request
     *
     * @return CreateHttpApiRouteResponse
     */
    public function createHttpApiRoute($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiRouteWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Creates an API version.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - CreateHttpApiVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiVersionResponse
     *
     * @param string                      $httpApiId
     * @param CreateHttpApiVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHttpApiVersionResponse
     */
    public function createHttpApiVersionWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API version.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - CreateHttpApiVersionRequest
     *
     * @returns CreateHttpApiVersionResponse
     *
     * @param string                      $httpApiId
     * @param CreateHttpApiVersionRequest $request
     *
     * @return CreateHttpApiVersionResponse
     */
    public function createHttpApiVersion($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiVersionWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Creates a Model Context Protocol (MCP) server.
     *
     * @param request - CreateMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcpServerResponse
     *
     * @param CreateMcpServerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMcpServerResponse
     */
    public function createMcpServerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assembledSources) {
            @$body['assembledSources'] = $request->assembledSources;
        }

        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->createFromType) {
            @$body['createFromType'] = $request->createFromType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->exposedUriPath) {
            @$body['exposedUriPath'] = $request->exposedUriPath;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->grayMcpServerConfigs) {
            @$body['grayMcpServerConfigs'] = $request->grayMcpServerConfigs;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpServerConfig) {
            @$body['mcpServerConfig'] = $request->mcpServerConfig;
        }

        if (null !== $request->mcpStatisticsEnable) {
            @$body['mcpStatisticsEnable'] = $request->mcpStatisticsEnable;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Model Context Protocol (MCP) server.
     *
     * @param request - CreateMcpServerRequest
     *
     * @returns CreateMcpServerResponse
     *
     * @param CreateMcpServerRequest $request
     *
     * @return CreateMcpServerResponse
     */
    public function createMcpServer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMcpServerWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a migration task.
     *
     * @param request - CreateMigrationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMigrationTaskResponse
     *
     * @param CreateMigrationTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateMigrationTaskResponse
     */
    public function createMigrationTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['clusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->httpApiId) {
            @$body['httpApiId'] = $request->httpApiId;
        }

        if (null !== $request->ingressClass) {
            @$body['ingressClass'] = $request->ingressClass;
        }

        if (null !== $request->migrationType) {
            @$body['migrationType'] = $request->migrationType;
        }

        if (null !== $request->watchNamespace) {
            @$body['watchNamespace'] = $request->watchNamespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMigrationTask',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/migration-tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a migration task.
     *
     * @param request - CreateMigrationTaskRequest
     *
     * @returns CreateMigrationTaskResponse
     *
     * @param CreateMigrationTaskRequest $request
     *
     * @return CreateMigrationTaskResponse
     */
    public function createMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMigrationTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Mounts a plug-in.
     *
     * @param request - CreatePluginAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePluginAttachmentResponse
     *
     * @param CreatePluginAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePluginAttachmentResponse
     */
    public function createPluginAttachmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pluginConfig) {
            @$body['pluginConfig'] = $request->pluginConfig;
        }

        if (null !== $request->pluginId) {
            @$body['pluginId'] = $request->pluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mounts a plug-in.
     *
     * @param request - CreatePluginAttachmentRequest
     *
     * @returns CreatePluginAttachmentResponse
     *
     * @param CreatePluginAttachmentRequest $request
     *
     * @return CreatePluginAttachmentResponse
     */
    public function createPluginAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPluginAttachmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a custom plugin class.
     *
     * @param request - CreatePluginClassRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePluginClassResponse
     *
     * @param CreatePluginClassRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePluginClassResponse
     */
    public function createPluginClassWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->executePriority) {
            @$body['executePriority'] = $request->executePriority;
        }

        if (null !== $request->executeStage) {
            @$body['executeStage'] = $request->executeStage;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->supportedMinGatewayVersion) {
            @$body['supportedMinGatewayVersion'] = $request->supportedMinGatewayVersion;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->versionDescription) {
            @$body['versionDescription'] = $request->versionDescription;
        }

        if (null !== $request->wasmLanguage) {
            @$body['wasmLanguage'] = $request->wasmLanguage;
        }

        if (null !== $request->wasmUrl) {
            @$body['wasmUrl'] = $request->wasmUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePluginClass',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePluginClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom plugin class.
     *
     * @param request - CreatePluginClassRequest
     *
     * @returns CreatePluginClassResponse
     *
     * @param CreatePluginClassRequest $request
     *
     * @return CreatePluginClassResponse
     */
    public function createPluginClass($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPluginClassWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a WebIDE workspace for a plugin.
     *
     * @param request - CreatePluginWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePluginWorkspaceResponse
     *
     * @param CreatePluginWorkspaceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePluginWorkspaceResponse
     */
    public function createPluginWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->organizationId) {
            @$body['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repoName) {
            @$body['repoName'] = $request->repoName;
        }

        if (null !== $request->workspaceName) {
            @$body['workspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePluginWorkspace',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-workspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePluginWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a WebIDE workspace for a plugin.
     *
     * @param request - CreatePluginWorkspaceRequest
     *
     * @returns CreatePluginWorkspaceResponse
     *
     * @param CreatePluginWorkspaceRequest $request
     *
     * @return CreatePluginWorkspaceResponse
     */
    public function createPluginWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPluginWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a policy.
     *
     * @param request - CreatePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->className) {
            @$body['className'] = $request->className;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a policy.
     *
     * @param request - CreatePolicyRequest
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a policy attachment to a resource.
     *
     * @param request - CreatePolicyAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyAttachmentResponse
     *
     * @param CreatePolicyAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePolicyAttachmentResponse
     */
    public function createPolicyAttachmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceId) {
            @$body['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->policyId) {
            @$body['policyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a policy attachment to a resource.
     *
     * @param request - CreatePolicyAttachmentRequest
     *
     * @returns CreatePolicyAttachmentResponse
     *
     * @param CreatePolicyAttachmentRequest $request
     *
     * @return CreatePolicyAttachmentResponse
     */
    public function createPolicyAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPolicyAttachmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a HiMarket developer portal and returns the ID of the newly created portal.
     *
     * @param request - CreatePortalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePortalResponse
     *
     * @param CreatePortalRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePortalResponse
     */
    public function createPortalWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePortal',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/portals',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePortalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a HiMarket developer portal and returns the ID of the newly created portal.
     *
     * @param request - CreatePortalRequest
     *
     * @returns CreatePortalResponse
     *
     * @param CreatePortalRequest $request
     *
     * @return CreatePortalResponse
     */
    public function createPortal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPortalWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an API product in the product catalog of the HiMarket portal and returns the ID of the new product upon successful creation.
     *
     * @param request - CreateProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->autoApprove) {
            @$body['autoApprove'] = $request->autoApprove;
        }

        if (null !== $request->categories) {
            @$body['categories'] = $request->categories;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->document) {
            @$body['document'] = $request->document;
        }

        if (null !== $request->feature) {
            @$body['feature'] = $request->feature;
        }

        if (null !== $request->icon) {
            @$body['icon'] = $request->icon;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProduct',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API product in the product catalog of the HiMarket portal and returns the ID of the new product upon successful creation.
     *
     * @param request - CreateProductRequest
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a product category for an API product and returns the ID and name of the new category upon success.
     *
     * @param request - CreateProductCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductCategoryResponse
     *
     * @param CreateProductCategoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateProductCategoryResponse
     */
    public function createProductCategoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->icon) {
            @$body['icon'] = $request->icon;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProductCategory',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/product-categories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProductCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a product category for an API product and returns the ID and name of the new category upon success.
     *
     * @param request - CreateProductCategoryRequest
     *
     * @returns CreateProductCategoryResponse
     *
     * @param CreateProductCategoryRequest $request
     *
     * @return CreateProductCategoryResponse
     */
    public function createProductCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Associates an API configuration with a specified API product by submitting the gatewayId and apigRefConfig parameters to the /himarket/v1/products/{productId}/ref endpoint. The association result can be queried by GetProductRef and removed by DeleteProductRef at the same path.
     *
     * @param request - CreateProductRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductRefResponse
     *
     * @param string                  $productId
     * @param CreateProductRefRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateProductRefResponse
     */
    public function createProductRefWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apigRefConfig) {
            @$body['apigRefConfig'] = $request->apigRefConfig;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProductRef',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '/ref',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProductRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates an API configuration with a specified API product by submitting the gatewayId and apigRefConfig parameters to the /himarket/v1/products/{productId}/ref endpoint. The association result can be queried by GetProductRef and removed by DeleteProductRef at the same path.
     *
     * @param request - CreateProductRefRequest
     *
     * @returns CreateProductRefResponse
     *
     * @param string                  $productId
     * @param CreateProductRefRequest $request
     *
     * @return CreateProductRefResponse
     */
    public function createProductRef($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductRefWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Creates a risk check task.
     *
     * @param request - CreateRiskCheckTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRiskCheckTaskResponse
     *
     * @param string                     $gatewayId
     * @param CreateRiskCheckTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateRiskCheckTaskResponse
     */
    public function createRiskCheckTaskWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateRiskCheckTask',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/risk-check/tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRiskCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a risk check task.
     *
     * @param request - CreateRiskCheckTaskRequest
     *
     * @returns CreateRiskCheckTaskResponse
     *
     * @param string                     $gatewayId
     * @param CreateRiskCheckTaskRequest $request
     *
     * @return CreateRiskCheckTaskResponse
     */
    public function createRiskCheckTask($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRiskCheckTaskWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Generates a key.
     *
     * @param request - CreateSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->kmsConfig) {
            @$body['kmsConfig'] = $request->kmsConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->secretData) {
            @$body['secretData'] = $request->secretData;
        }

        if (null !== $request->secretSource) {
            @$body['secretSource'] = $request->secretSource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a key.
     *
     * @param request - CreateSecretRequest
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $request
     *
     * @return CreateSecretResponse
     */
    public function createSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates services.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - CreateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceConfigs) {
            @$body['serviceConfigs'] = $request->serviceConfigs;
        }

        if (null !== $request->sourceType) {
            @$body['sourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates services.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - CreateServiceRequest
     *
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a service version.
     *
     * @param request - CreateServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param CreateServiceVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateServiceVersionResponse
     */
    public function createServiceVersionWithOptions($serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service version.
     *
     * @param request - CreateServiceVersionRequest
     *
     * @returns CreateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param CreateServiceVersionRequest $request
     *
     * @return CreateServiceVersionResponse
     */
    public function createServiceVersion($serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceVersionWithOptions($serviceId, $request, $headers, $runtime);
    }

    /**
     * Creates a source.
     *
     * @remarks
     * Before creating a source, prepare the required dependency resources. For the K8S type, an existing ACK container service cluster is required. You can invoke ListK8sClusterSources to query active clusters. For the MSE_NACOS type, an existing MSE Nacos instance is required. You can invoke ListMseNacosSources to query active instances.
     *
     * @param request - CreateSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSourceResponse
     *
     * @param CreateSourceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSourceResponse
     */
    public function createSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->k8sSourceConfig) {
            @$body['k8sSourceConfig'] = $request->k8sSourceConfig;
        }

        if (null !== $request->nacosSourceConfig) {
            @$body['nacosSourceConfig'] = $request->nacosSourceConfig;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a source.
     *
     * @remarks
     * Before creating a source, prepare the required dependency resources. For the K8S type, an existing ACK container service cluster is required. You can invoke ListK8sClusterSources to query active clusters. For the MSE_NACOS type, an existing MSE Nacos instance is required. You can invoke ListMseNacosSources to query active instances.
     *
     * @param request - CreateSourceRequest
     *
     * @returns CreateSourceResponse
     *
     * @param CreateSourceRequest $request
     *
     * @return CreateSourceResponse
     */
    public function createSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an AI model card.
     *
     * @param request - DeleteAiModelCardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAiModelCardResponse
     *
     * @param string                   $modelCardId
     * @param DeleteAiModelCardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAiModelCardResponse
     */
    public function deleteAiModelCardWithOptions($modelCardId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAiModelCard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards/' . Url::percentEncode($modelCardId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAiModelCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AI model card.
     *
     * @param request - DeleteAiModelCardRequest
     *
     * @returns DeleteAiModelCardResponse
     *
     * @param string                   $modelCardId
     * @param DeleteAiModelCardRequest $request
     *
     * @return DeleteAiModelCardResponse
     */
    public function deleteAiModelCard($modelCardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAiModelCardWithOptions($modelCardId, $request, $headers, $runtime);
    }

    /**
     * Deletes an AI model provider.
     *
     * @param request - DeleteAiModelProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAiModelProviderResponse
     *
     * @param string                       $modelProviderId
     * @param DeleteAiModelProviderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAiModelProviderResponse
     */
    public function deleteAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAiModelProvider',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers/' . Url::percentEncode($modelProviderId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAiModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AI model provider.
     *
     * @param request - DeleteAiModelProviderRequest
     *
     * @returns DeleteAiModelProviderResponse
     *
     * @param string                       $modelProviderId
     * @param DeleteAiModelProviderRequest $request
     *
     * @return DeleteAiModelProviderResponse
     */
    public function deleteAiModelProvider($modelProviderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime);
    }

    /**
     * Deletes a consumer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerResponse
     *
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerResponse
     */
    public function deleteConsumerWithOptions($consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a consumer.
     *
     * @returns DeleteConsumerResponse
     *
     * @param string $consumerId
     *
     * @return DeleteConsumerResponse
     */
    public function deleteConsumer($consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerWithOptions($consumerId, $headers, $runtime);
    }

    /**
     * Deletes an API consumer authorization rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerAuthorizationRuleResponse
     */
    public function deleteConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API consumer authorization rule.
     *
     * @returns DeleteConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     * @param string $consumerId
     *
     * @return DeleteConsumerAuthorizationRuleResponse
     */
    public function deleteConsumerAuthorizationRule($consumerAuthorizationRuleId, $consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime);
    }

    /**
     * Deletes a consumer group.
     *
     * @param request - DeleteConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param string                     $consumerGroupId
     * @param DeleteConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a consumer group.
     *
     * @param request - DeleteConsumerGroupRequest
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param string                     $consumerGroupId
     * @param DeleteConsumerGroupRequest $request
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Deletes a domain name.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param string         $domainId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($domainId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a domain name.
     *
     * @returns DeleteDomainResponse
     *
     * @param string $domainId
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($domainId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($domainId, $headers, $runtime);
    }

    /**
     * Deletes an environment.
     *
     * @deprecated OpenAPI DeleteEnvironment is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnvironmentResponse
     *
     * @param string         $environmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($environmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Deletes an environment.
     *
     * @deprecated OpenAPI DeleteEnvironment is deprecated
     *
     * @returns DeleteEnvironmentResponse
     *
     * @param string $environmentId
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironment($environmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($environmentId, $headers, $runtime);
    }

    /**
     * Deletes a gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a gateway.
     *
     * @returns DeleteGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Deletes a quota throttling rule from a gateway.
     *
     * @remarks
     * This operation deletes a consumer-based or consumer group-based quota rule from an AI gateway. This operation takes effect only on AI gateways of version 2.1.19 or later.
     *
     * @param request - DeleteGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayQuotaRuleResponse
     *
     * @param string                        $gatewayId
     * @param string                        $ruleId
     * @param DeleteGatewayQuotaRuleRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteGatewayQuotaRuleResponse
     */
    public function deleteGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a quota throttling rule from a gateway.
     *
     * @remarks
     * This operation deletes a consumer-based or consumer group-based quota rule from an AI gateway. This operation takes effect only on AI gateways of version 2.1.19 or later.
     *
     * @param request - DeleteGatewayQuotaRuleRequest
     *
     * @returns DeleteGatewayQuotaRuleResponse
     *
     * @param string                        $gatewayId
     * @param string                        $ruleId
     * @param DeleteGatewayQuotaRuleRequest $request
     *
     * @return DeleteGatewayQuotaRuleResponse
     */
    public function deleteGatewayQuotaRule($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Deletes a gateway security group rule.
     *
     * @param request - DeleteGatewaySecurityGroupRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewaySecurityGroupRuleResponse
     *
     * @param string                                $gatewayId
     * @param string                                $securityGroupRuleId
     * @param DeleteGatewaySecurityGroupRuleRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteGatewaySecurityGroupRuleResponse
     */
    public function deleteGatewaySecurityGroupRuleWithOptions($gatewayId, $securityGroupRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cascadingDelete) {
            @$query['cascadingDelete'] = $request->cascadingDelete;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewaySecurityGroupRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/security-group-rules/' . Url::percentEncode($securityGroupRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a gateway security group rule.
     *
     * @param request - DeleteGatewaySecurityGroupRuleRequest
     *
     * @returns DeleteGatewaySecurityGroupRuleResponse
     *
     * @param string                                $gatewayId
     * @param string                                $securityGroupRuleId
     * @param DeleteGatewaySecurityGroupRuleRequest $request
     *
     * @return DeleteGatewaySecurityGroupRuleResponse
     */
    public function deleteGatewaySecurityGroupRule($gatewayId, $securityGroupRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewaySecurityGroupRuleWithOptions($gatewayId, $securityGroupRuleId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified HTTP API.
     *
     * @param request - DeleteHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiResponse
     *
     * @param string               $httpApiId
     * @param DeleteHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteHttpApiResponse
     */
    public function deleteHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified HTTP API.
     *
     * @param request - DeleteHttpApiRequest
     *
     * @returns DeleteHttpApiResponse
     *
     * @param string               $httpApiId
     * @param DeleteHttpApiRequest $request
     *
     * @return DeleteHttpApiResponse
     */
    public function deleteHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified API operation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiOperationResponse
     *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified API operation.
     *
     * @returns DeleteHttpApiOperationResponse
     *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * Deletes a route of an HTTP API.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiRouteResponse
     *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHttpApiRouteResponse
     */
    public function deleteHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a route of an HTTP API.
     *
     * @returns DeleteHttpApiRouteResponse
     *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return DeleteHttpApiRouteResponse
     */
    public function deleteHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * Deletes an MCP server.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMcpServerResponse
     */
    public function deleteMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an MCP server.
     *
     * @returns DeleteMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return DeleteMcpServerResponse
     */
    public function deleteMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Deletes a data migration task.
     *
     * @param request - DeleteMigrationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMigrationTaskResponse
     *
     * @param string                     $taskId
     * @param DeleteMigrationTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMigrationTaskResponse
     */
    public function deleteMigrationTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMigrationTask',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/migration-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data migration task.
     *
     * @param request - DeleteMigrationTaskRequest
     *
     * @returns DeleteMigrationTaskResponse
     *
     * @param string                     $taskId
     * @param DeleteMigrationTaskRequest $request
     *
     * @return DeleteMigrationTaskResponse
     */
    public function deleteMigrationTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMigrationTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Deletes a plugin mount.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePluginAttachmentResponse
     *
     * @param string         $pluginAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePluginAttachmentResponse
     */
    public function deletePluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a plugin mount.
     *
     * @returns DeletePluginAttachmentResponse
     *
     * @param string $pluginAttachmentId
     *
     * @return DeletePluginAttachmentResponse
     */
    public function deletePluginAttachment($pluginAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime);
    }

    /**
     * Deletes a custom plugin class.
     *
     * @param request - DeletePluginClassRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePluginClassResponse
     *
     * @param string                   $pluginClassId
     * @param DeletePluginClassRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeletePluginClassResponse
     */
    public function deletePluginClassWithOptions($pluginClassId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePluginClass',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes/' . Url::percentEncode($pluginClassId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePluginClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom plugin class.
     *
     * @param request - DeletePluginClassRequest
     *
     * @returns DeletePluginClassResponse
     *
     * @param string                   $pluginClassId
     * @param DeletePluginClassRequest $request
     *
     * @return DeletePluginClassResponse
     */
    public function deletePluginClass($pluginClassId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePluginClassWithOptions($pluginClassId, $request, $headers, $runtime);
    }

    /**
     * Deletes a policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a policy.
     *
     * @returns DeletePolicyResponse
     *
     * @param string $policyId
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * Deletes a policy attachment.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyAttachmentResponse
     *
     * @param string         $policyAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePolicyAttachmentResponse
     */
    public function deletePolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments/' . Url::percentEncode($policyAttachmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a policy attachment.
     *
     * @returns DeletePolicyAttachmentResponse
     *
     * @param string $policyAttachmentId
     *
     * @return DeletePolicyAttachmentResponse
     */
    public function deletePolicyAttachment($policyAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime);
    }

    /**
     * Deletes a specified HiMarket developer portal by portal ID.
     *
     * @param request - DeletePortalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePortalResponse
     *
     * @param string              $portalId
     * @param DeletePortalRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePortalResponse
     */
    public function deletePortalWithOptions($portalId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePortal',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/portals/' . Url::percentEncode($portalId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePortalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified HiMarket developer portal by portal ID.
     *
     * @param request - DeletePortalRequest
     *
     * @returns DeletePortalResponse
     *
     * @param string              $portalId
     * @param DeletePortalRequest $request
     *
     * @return DeletePortalResponse
     */
    public function deletePortal($portalId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePortalWithOptions($portalId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified API product by API product ID.
     *
     * @param request - DeleteProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductResponse
     *
     * @param string               $productId
     * @param DeleteProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteProduct',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified API product by API product ID.
     *
     * @param request - DeleteProductRequest
     *
     * @returns DeleteProductResponse
     *
     * @param string               $productId
     * @param DeleteProductRequest $request
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified product category by product category ID.
     *
     * @param request - DeleteProductCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductCategoryResponse
     *
     * @param string                       $categoryId
     * @param DeleteProductCategoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProductCategoryResponse
     */
    public function deleteProductCategoryWithOptions($categoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteProductCategory',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/product-categories/' . Url::percentEncode($categoryId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProductCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified product category by product category ID.
     *
     * @param request - DeleteProductCategoryRequest
     *
     * @returns DeleteProductCategoryResponse
     *
     * @param string                       $categoryId
     * @param DeleteProductCategoryRequest $request
     *
     * @return DeleteProductCategoryResponse
     */
    public function deleteProductCategory($categoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductCategoryWithOptions($categoryId, $request, $headers, $runtime);
    }

    /**
     * Dissociates an API product from an API by API product ID. This association is established by CreateProductRef on the same resource path and can be queried by GetProductRef.
     *
     * @param request - DeleteProductRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductRefResponse
     *
     * @param string                  $productId
     * @param DeleteProductRefRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteProductRefResponse
     */
    public function deleteProductRefWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteProductRef',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '/ref',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProductRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates an API product from an API by API product ID. This association is established by CreateProductRef on the same resource path and can be queried by GetProductRef.
     *
     * @param request - DeleteProductRefRequest
     *
     * @returns DeleteProductRefResponse
     *
     * @param string                  $productId
     * @param DeleteProductRefRequest $request
     *
     * @return DeleteProductRefResponse
     */
    public function deleteProductRef($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductRefWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Deletes a key value.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretResponse
     *
     * @param string         $secretId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions($secretId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a key value.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @returns DeleteSecretResponse
     *
     * @param string $secretId
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecret($secretId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSecretWithOptions($secretId, $headers, $runtime);
    }

    /**
     * Deletes a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceResponse
     *
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service.
     *
     * @returns DeleteServiceResponse
     *
     * @param string $serviceId
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * Deletes a service version.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceVersionResponse
     *
     * @param string         $serviceId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceVersionResponse
     */
    public function deleteServiceVersionWithOptions($serviceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service version.
     *
     * @returns DeleteServiceVersionResponse
     *
     * @param string $serviceId
     * @param string $name
     *
     * @return DeleteServiceVersionResponse
     */
    public function deleteServiceVersion($serviceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceVersionWithOptions($serviceId, $name, $headers, $runtime);
    }

    /**
     * Deletes a service source.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSourceResponse
     *
     * @param string         $sourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSourceResponse
     */
    public function deleteSourceWithOptions($sourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources/' . Url::percentEncode($sourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service source.
     *
     * @returns DeleteSourceResponse
     *
     * @param string $sourceId
     *
     * @return DeleteSourceResponse
     */
    public function deleteSource($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSourceWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * Publishes an HTTP API. This includes REST APIs and routes within HTTP APIs.
     *
     * @remarks
     * Before deployment, the following prerequisites must be met in order: (1) A gateway has been created. (2) An HTTP API has been created and associated with a gateway (belongGatewayId). (3) A route has been created and associated with an environment (environmentId). (4) The route has been associated with the default subdomain of the environment. Associating only a custom Dedicated domain name is not sufficient to trigger deployment. Call UpdateHttpApiRoute first to add the default subdomain of the environment to the route.
     *
     * @param request - DeployHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployHttpApiResponse
     *
     * @param string               $httpApiId
     * @param DeployHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeployHttpApiResponse
     */
    public function deployHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->httpApiConfig) {
            @$body['httpApiConfig'] = $request->httpApiConfig;
        }

        if (null !== $request->restApiConfig) {
            @$body['restApiConfig'] = $request->restApiConfig;
        }

        if (null !== $request->routeId) {
            @$body['routeId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes an HTTP API. This includes REST APIs and routes within HTTP APIs.
     *
     * @remarks
     * Before deployment, the following prerequisites must be met in order: (1) A gateway has been created. (2) An HTTP API has been created and associated with a gateway (belongGatewayId). (3) A route has been created and associated with an environment (environmentId). (4) The route has been associated with the default subdomain of the environment. Associating only a custom Dedicated domain name is not sufficient to trigger deployment. Call UpdateHttpApiRoute first to add the default subdomain of the environment to the route.
     *
     * @param request - DeployHttpApiRequest
     *
     * @returns DeployHttpApiResponse
     *
     * @param string               $httpApiId
     * @param DeployHttpApiRequest $request
     *
     * @return DeployHttpApiResponse
     */
    public function deployHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Publishes an MCP server.
     *
     * @remarks
     * Before deployment, ensure that domainIds have been configured for the MCP server by calling CreateMcpServer or UpdateMcpServer. Call GetMcpServer to confirm the domain name bindng status.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeployMcpServerResponse
     */
    public function deployMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeployMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '/deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes an MCP server.
     *
     * @remarks
     * Before deployment, ensure that domainIds have been configured for the MCP server by calling CreateMcpServer or UpdateMcpServer. Call GetMcpServer to confirm the domain name bindng status.
     *
     * @returns DeployMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return DeployMcpServerResponse
     */
    public function deployMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Queries the regions where the cloud-native API gateway is available for the current account.
     *
     * @param request - DescribeRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/regions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions where the cloud-native API gateway is available for the current account.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Detaches and deletes a policy.
     *
     * @param request - DetachAndDeletePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachAndDeletePolicyResponse
     *
     * @param string                       $policyId
     * @param DetachAndDeletePolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DetachAndDeletePolicyResponse
     */
    public function detachAndDeletePolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyAttachmentId) {
            @$query['policyAttachmentId'] = $request->policyAttachmentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachAndDeletePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DetachAndDeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches and deletes a policy.
     *
     * @param request - DetachAndDeletePolicyRequest
     *
     * @returns DetachAndDeletePolicyResponse
     *
     * @param string                       $policyId
     * @param DetachAndDeletePolicyRequest $request
     *
     * @return DetachAndDeletePolicyResponse
     */
    public function detachAndDeletePolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detachAndDeletePolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Exports a specified HTTP API.
     *
     * @param request - ExportHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportHttpApiResponse
     *
     * @param string               $httpApiId
     * @param ExportHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ExportHttpApiResponse
     */
    public function exportHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extensionConfig) {
            @$body['extensionConfig'] = $request->extensionConfig;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->operationIds) {
            @$body['operationIds'] = $request->operationIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/export',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports a specified HTTP API.
     *
     * @param request - ExportHttpApiRequest
     *
     * @returns ExportHttpApiResponse
     *
     * @param string               $httpApiId
     * @param ExportHttpApiRequest $request
     *
     * @return ExportHttpApiResponse
     */
    public function exportHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of an AI model card.
     *
     * @param request - GetAiModelCardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiModelCardResponse
     *
     * @param string                $modelCardId
     * @param GetAiModelCardRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetAiModelCardResponse
     */
    public function getAiModelCardWithOptions($modelCardId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAiModelCard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards/' . Url::percentEncode($modelCardId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAiModelCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an AI model card.
     *
     * @param request - GetAiModelCardRequest
     *
     * @returns GetAiModelCardResponse
     *
     * @param string                $modelCardId
     * @param GetAiModelCardRequest $request
     *
     * @return GetAiModelCardResponse
     */
    public function getAiModelCard($modelCardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAiModelCardWithOptions($modelCardId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of an AI model provider.
     *
     * @param request - GetAiModelProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiModelProviderResponse
     *
     * @param string                    $modelProviderId
     * @param GetAiModelProviderRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetAiModelProviderResponse
     */
    public function getAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAiModelProvider',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers/' . Url::percentEncode($modelProviderId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAiModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an AI model provider.
     *
     * @param request - GetAiModelProviderRequest
     *
     * @returns GetAiModelProviderResponse
     *
     * @param string                    $modelProviderId
     * @param GetAiModelProviderRequest $request
     *
     * @return GetAiModelProviderResponse
     */
    public function getAiModelProvider($modelProviderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime);
    }

    /**
     * Queries the effective field collection configurations for an HTTP API across each URI of the request in a specified cloud-native API gateway, including the field source, JSONPath, collection status, switch permission, and whether the configuration is derived from a field template.
     *
     * @param request - GetApiPathFieldConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiPathFieldConfigResponse
     *
     * @param GetApiPathFieldConfigRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetApiPathFieldConfigResponse
     */
    public function getApiPathFieldConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->httpApiId) {
            @$query['httpApiId'] = $request->httpApiId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApiPathFieldConfig',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api-path-fields/configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApiPathFieldConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the effective field collection configurations for an HTTP API across each URI of the request in a specified cloud-native API gateway, including the field source, JSONPath, collection status, switch permission, and whether the configuration is derived from a field template.
     *
     * @param request - GetApiPathFieldConfigRequest
     *
     * @returns GetApiPathFieldConfigResponse
     *
     * @param GetApiPathFieldConfigRequest $request
     *
     * @return GetApiPathFieldConfigResponse
     */
    public function getApiPathFieldConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApiPathFieldConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the field template corresponding to the API request path and returns the template name, applicable protocol, template description, and the set of fields defined by the template, including field keys, JSONPaths, value sources, and statistical categories.
     *
     * @param request - GetApiPathFieldTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiPathFieldTemplateResponse
     *
     * @param GetApiPathFieldTemplateRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetApiPathFieldTemplateResponse
     */
    public function getApiPathFieldTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->path) {
            @$query['path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApiPathFieldTemplate',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api-path-fields/template',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApiPathFieldTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the field template corresponding to the API request path and returns the template name, applicable protocol, template description, and the set of fields defined by the template, including field keys, JSONPaths, value sources, and statistical categories.
     *
     * @param request - GetApiPathFieldTemplateRequest
     *
     * @returns GetApiPathFieldTemplateResponse
     *
     * @param GetApiPathFieldTemplateRequest $request
     *
     * @return GetApiPathFieldTemplateResponse
     */
    public function getApiPathFieldTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApiPathFieldTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a batch export task.
     *
     * @param request - GetBatchExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBatchExportTaskResponse
     *
     * @param string                    $taskId
     * @param GetBatchExportTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetBatchExportTaskResponse
     */
    public function getBatchExportTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetBatchExportTask',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-api-batch-export-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBatchExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a batch export task.
     *
     * @param request - GetBatchExportTaskRequest
     *
     * @returns GetBatchExportTaskResponse
     *
     * @param string                    $taskId
     * @param GetBatchExportTaskRequest $request
     *
     * @return GetBatchExportTaskResponse
     */
    public function getBatchExportTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBatchExportTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Queries a batch import task. The task ID is returned after a batch import task is created by calling BatchImportHttpApis. Pass an empty string to list all existing batch import tasks.
     *
     * @param request - GetBatchImportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBatchImportTaskResponse
     *
     * @param string                    $taskId
     * @param GetBatchImportTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetBatchImportTaskResponse
     */
    public function getBatchImportTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetBatchImportTask',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-api-batch-import-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBatchImportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a batch import task. The task ID is returned after a batch import task is created by calling BatchImportHttpApis. Pass an empty string to list all existing batch import tasks.
     *
     * @param request - GetBatchImportTaskRequest
     *
     * @returns GetBatchImportTaskResponse
     *
     * @param string                    $taskId
     * @param GetBatchImportTaskRequest $request
     *
     * @return GetBatchImportTaskResponse
     */
    public function getBatchImportTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBatchImportTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves an API consumer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerResponse
     *
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumerResponse
     */
    public function getConsumerWithOptions($consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an API consumer.
     *
     * @returns GetConsumerResponse
     *
     * @param string $consumerId
     *
     * @return GetConsumerResponse
     */
    public function getConsumer($consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerWithOptions($consumerId, $headers, $runtime);
    }

    /**
     * Retrieves a consumer authorization rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumerAuthorizationRuleResponse
     */
    public function getConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a consumer authorization rule.
     *
     * @returns GetConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     * @param string $consumerId
     *
     * @return GetConsumerAuthorizationRuleResponse
     */
    public function getConsumerAuthorizationRule($consumerAuthorizationRuleId, $consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime);
    }

    /**
     * Queries a consumer group.
     *
     * @param request - GetConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerGroupResponse
     *
     * @param string                  $consumerGroupId
     * @param GetConsumerGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetConsumerGroupResponse
     */
    public function getConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumerGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a consumer group.
     *
     * @param request - GetConsumerGroupRequest
     *
     * @returns GetConsumerGroupResponse
     *
     * @param string                  $consumerGroupId
     * @param GetConsumerGroupRequest $request
     *
     * @return GetConsumerGroupResponse
     */
    public function getConsumerGroup($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the monitoring log dashboard.
     *
     * @param tmpReq - GetDashboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDashboardResponse
     *
     * @param string              $gatewayId
     * @param GetDashboardRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetDashboardResponse
     */
    public function getDashboardWithOptions($gatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDashboardShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->apiId) {
            @$query['apiId'] = $request->apiId;
        }

        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pluginClassId) {
            @$query['pluginClassId'] = $request->pluginClassId;
        }

        if (null !== $request->pluginId) {
            @$query['pluginId'] = $request->pluginId;
        }

        if (null !== $request->routeId) {
            @$query['routeId'] = $request->routeId;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->upstreamCluster) {
            @$query['upstreamCluster'] = $request->upstreamCluster;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDashboard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the monitoring log dashboard.
     *
     * @param request - GetDashboardRequest
     *
     * @returns GetDashboardResponse
     *
     * @param string              $gatewayId
     * @param GetDashboardRequest $request
     *
     * @return GetDashboardResponse
     */
    public function getDashboard($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDashboardWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the account information of the currently logged-on developer and returns the developer ID, portal ID, username, and status.
     *
     * @param request - GetDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeveloperResponse
     *
     * @param GetDeveloperRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetDeveloperResponse
     */
    public function getDeveloperWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDeveloper',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/developers/profile',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the account information of the currently logged-on developer and returns the developer ID, portal ID, username, and status.
     *
     * @param request - GetDeveloperRequest
     *
     * @returns GetDeveloperResponse
     *
     * @param GetDeveloperRequest $request
     *
     * @return GetDeveloperResponse
     */
    public function getDeveloper($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeveloperWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a domain name.
     *
     * @param request - GetDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainResponse
     *
     * @param string           $domainId
     * @param GetDomainRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetDomainResponse
     */
    public function getDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->withStatistics) {
            @$query['withStatistics'] = $request->withStatistics;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a domain name.
     *
     * @param request - GetDomainRequest
     *
     * @returns GetDomainResponse
     *
     * @param string           $domainId
     * @param GetDomainRequest $request
     *
     * @return GetDomainResponse
     */
    public function getDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * Queries an environment.
     *
     * @deprecated OpenAPI GetEnvironment is deprecated
     *
     * @param request - GetEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnvironmentResponse
     *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->withStatistics) {
            @$query['withStatistics'] = $request->withStatistics;
        }

        if (null !== $request->withVpcInfo) {
            @$query['withVpcInfo'] = $request->withVpcInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries an environment.
     *
     * @deprecated OpenAPI GetEnvironment is deprecated
     *
     * @param request - GetEnvironmentRequest
     *
     * @returns GetEnvironmentResponse
     *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * Retrieves basic information about a gateway, including the VPC, vSwitch, and gateway ingress.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetGatewayResponse
     */
    public function getGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves basic information about a gateway, including the VPC, vSwitch, and gateway ingress.
     *
     * @returns GetGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return GetGatewayResponse
     */
    public function getGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Retrieves the elastic scaling rule of a gateway.
     *
     * @param request - GetGatewayElasticPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayElasticPolicyResponse
     *
     * @param string                         $gatewayId
     * @param GetGatewayElasticPolicyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetGatewayElasticPolicyResponse
     */
    public function getGatewayElasticPolicyWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetGatewayElasticPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/elastic-policy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayElasticPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the elastic scaling rule of a gateway.
     *
     * @param request - GetGatewayElasticPolicyRequest
     *
     * @returns GetGatewayElasticPolicyResponse
     *
     * @param string                         $gatewayId
     * @param GetGatewayElasticPolicyRequest $request
     *
     * @return GetGatewayElasticPolicyResponse
     */
    public function getGatewayElasticPolicy($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayElasticPolicyWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a gateway quota throttling rule.
     *
     * @remarks
     * Queries a specific API consumer quota rule on an AI gateway.
     *
     * @param request - GetGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayQuotaRuleResponse
     *
     * @param string                     $gatewayId
     * @param string                     $ruleId
     * @param GetGatewayQuotaRuleRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetGatewayQuotaRuleResponse
     */
    public function getGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerPageNumber) {
            @$query['consumerPageNumber'] = $request->consumerPageNumber;
        }

        if (null !== $request->consumerPageSize) {
            @$query['consumerPageSize'] = $request->consumerPageSize;
        }

        if (null !== $request->withConsumers) {
            @$query['withConsumers'] = $request->withConsumers;
        }

        if (null !== $request->withSubjects) {
            @$query['withSubjects'] = $request->withSubjects;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a gateway quota throttling rule.
     *
     * @remarks
     * Queries a specific API consumer quota rule on an AI gateway.
     *
     * @param request - GetGatewayQuotaRuleRequest
     *
     * @returns GetGatewayQuotaRuleResponse
     *
     * @param string                     $gatewayId
     * @param string                     $ruleId
     * @param GetGatewayQuotaRuleRequest $request
     *
     * @return GetGatewayQuotaRuleResponse
     */
    public function getGatewayQuotaRule($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Queries the usage details of a subject for a gateway quota throttling rule, including the used quota, total quota, over-limit status, usage details, and consumption records.
     *
     * @remarks
     * This operation retrieves the usage details of a consumer subject under a quota rule. Note that this operation applies only to AI gateways whose version is later than 2.1.19.
     * Before you begin: Before calling this operation, ensure that the Simple Log Service (SLS) log delivery feature is enabled for the target gateway by using UpdateGatewayFeature(name=log-config, value={"enable":true}). Otherwise, the CloudProductInactive.LogDeliveryNotEnabled error is returned.
     *
     * @param request - GetGatewayQuotaRuleSubjectUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayQuotaRuleSubjectUsageResponse
     *
     * @param string                                 $gatewayId
     * @param string                                 $ruleId
     * @param string                                 $subjectId
     * @param GetGatewayQuotaRuleSubjectUsageRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetGatewayQuotaRuleSubjectUsageResponse
     */
    public function getGatewayQuotaRuleSubjectUsageWithOptions($gatewayId, $ruleId, $subjectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->filterFailedRequests) {
            @$query['filterFailedRequests'] = $request->filterFailedRequests;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayQuotaRuleSubjectUsage',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '/subjects/' . Url::percentEncode($subjectId) . '/usage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayQuotaRuleSubjectUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage details of a subject for a gateway quota throttling rule, including the used quota, total quota, over-limit status, usage details, and consumption records.
     *
     * @remarks
     * This operation retrieves the usage details of a consumer subject under a quota rule. Note that this operation applies only to AI gateways whose version is later than 2.1.19.
     * Before you begin: Before calling this operation, ensure that the Simple Log Service (SLS) log delivery feature is enabled for the target gateway by using UpdateGatewayFeature(name=log-config, value={"enable":true}). Otherwise, the CloudProductInactive.LogDeliveryNotEnabled error is returned.
     *
     * @param request - GetGatewayQuotaRuleSubjectUsageRequest
     *
     * @returns GetGatewayQuotaRuleSubjectUsageResponse
     *
     * @param string                                 $gatewayId
     * @param string                                 $ruleId
     * @param string                                 $subjectId
     * @param GetGatewayQuotaRuleSubjectUsageRequest $request
     *
     * @return GetGatewayQuotaRuleSubjectUsageResponse
     */
    public function getGatewayQuotaRuleSubjectUsage($gatewayId, $ruleId, $subjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayQuotaRuleSubjectUsageWithOptions($gatewayId, $ruleId, $subjectId, $request, $headers, $runtime);
    }

    /**
     * Queries the resource quotas and usage of a gateway.
     *
     * @remarks
     * Queries the usage, effective limits, and statistical scopes of nine resource quota items for a specified API gateway or AI gateway. This operation is read-only. A successful response contains all nine items. Custom plugin quotas do not display numerical values. The result represents the current observation read independently from each source and does not guarantee that new resources can be created successfully.
     *
     * @param request - GetGatewayResourceQuotaUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayResourceQuotaUsageResponse
     *
     * @param string                              $gatewayId
     * @param GetGatewayResourceQuotaUsageRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetGatewayResourceQuotaUsageResponse
     */
    public function getGatewayResourceQuotaUsageWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetGatewayResourceQuotaUsage',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/resource-quota-usage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayResourceQuotaUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource quotas and usage of a gateway.
     *
     * @remarks
     * Queries the usage, effective limits, and statistical scopes of nine resource quota items for a specified API gateway or AI gateway. This operation is read-only. A successful response contains all nine items. Custom plugin quotas do not display numerical values. The result represents the current observation read independently from each source and does not guarantee that new resources can be created successfully.
     *
     * @param request - GetGatewayResourceQuotaUsageRequest
     *
     * @returns GetGatewayResourceQuotaUsageResponse
     *
     * @param string                              $gatewayId
     * @param GetGatewayResourceQuotaUsageRequest $request
     *
     * @return GetGatewayResourceQuotaUsageResponse
     */
    public function getGatewayResourceQuotaUsage($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayResourceQuotaUsageWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a single HiMarket consumer by consumer ID and returns the consumer ID, name, description, and whether the consumer is the primary consumer.
     *
     * @param request - GetHiMarketConsumerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHiMarketConsumerResponse
     *
     * @param string                     $consumerId
     * @param GetHiMarketConsumerRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHiMarketConsumerResponse
     */
    public function getHiMarketConsumerWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHiMarketConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHiMarketConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a single HiMarket consumer by consumer ID and returns the consumer ID, name, description, and whether the consumer is the primary consumer.
     *
     * @param request - GetHiMarketConsumerRequest
     *
     * @returns GetHiMarketConsumerResponse
     *
     * @param string                     $consumerId
     * @param GetHiMarketConsumerRequest $request
     *
     * @return GetHiMarketConsumerResponse
     */
    public function getHiMarketConsumer($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHiMarketConsumerWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Queries the credential information of a HiMarket consumer by consumer ID. The response includes API key and HMAC credential configurations. The credential members are defined by the common data structures HiMarketApiKeyConfig and HiMarketHmacConfig.
     *
     * @param request - GetHiMarketConsumerCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHiMarketConsumerCredentialResponse
     *
     * @param string                               $consumerId
     * @param GetHiMarketConsumerCredentialRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetHiMarketConsumerCredentialResponse
     */
    public function getHiMarketConsumerCredentialWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHiMarketConsumerCredential',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/consumers/' . Url::percentEncode($consumerId) . '/credentials',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHiMarketConsumerCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the credential information of a HiMarket consumer by consumer ID. The response includes API key and HMAC credential configurations. The credential members are defined by the common data structures HiMarketApiKeyConfig and HiMarketHmacConfig.
     *
     * @param request - GetHiMarketConsumerCredentialRequest
     *
     * @returns GetHiMarketConsumerCredentialResponse
     *
     * @param string                               $consumerId
     * @param GetHiMarketConsumerCredentialRequest $request
     *
     * @return GetHiMarketConsumerCredentialResponse
     */
    public function getHiMarketConsumerCredential($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHiMarketConsumerCredentialWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Retrieves HTTP API information.
     *
     * @param request - GetHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiResponse
     *
     * @param string            $httpApiId
     * @param GetHttpApiRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetHttpApiResponse
     */
    public function getHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expandPolicyConfigs) {
            @$query['expandPolicyConfigs'] = $request->expandPolicyConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves HTTP API information.
     *
     * @param request - GetHttpApiRequest
     *
     * @returns GetHttpApiResponse
     *
     * @param string            $httpApiId
     * @param GetHttpApiRequest $request
     *
     * @return GetHttpApiResponse
     */
    public function getHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Retrieves operation information.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiOperationResponse
     *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHttpApiOperationResponse
     */
    public function getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves operation information.
     *
     * @returns GetHttpApiOperationResponse
     *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return GetHttpApiOperationResponse
     */
    public function getHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * Retrieves the route details of an HTTP API.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiRouteResponse
     *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHttpApiRouteResponse
     */
    public function getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the route details of an HTTP API.
     *
     * @returns GetHttpApiRouteResponse
     *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return GetHttpApiRouteResponse
     */
    public function getHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * Retrieves an MCP server.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMcpServerResponse
     */
    public function getMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an MCP server.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @returns GetMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return GetMcpServerResponse
     */
    public function getMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Retrieves the namespaced services for a migration task.
     *
     * @param request - GetMigrationNamespacedServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMigrationNamespacedServicesResponse
     *
     * @param string                                $taskId
     * @param GetMigrationNamespacedServicesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetMigrationNamespacedServicesResponse
     */
    public function getMigrationNamespacedServicesWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMigrationNamespacedServices',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/migration-tasks/' . Url::percentEncode($taskId) . '/namespaced-services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMigrationNamespacedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the namespaced services for a migration task.
     *
     * @param request - GetMigrationNamespacedServicesRequest
     *
     * @returns GetMigrationNamespacedServicesResponse
     *
     * @param string                                $taskId
     * @param GetMigrationNamespacedServicesRequest $request
     *
     * @return GetMigrationNamespacedServicesResponse
     */
    public function getMigrationNamespacedServices($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMigrationNamespacedServicesWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a migration task.
     *
     * @param request - GetMigrationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMigrationTaskResponse
     *
     * @param string                  $taskId
     * @param GetMigrationTaskRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetMigrationTaskResponse
     */
    public function getMigrationTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMigrationTask',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/migration-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a migration task.
     *
     * @param request - GetMigrationTaskRequest
     *
     * @returns GetMigrationTaskResponse
     *
     * @param string                  $taskId
     * @param GetMigrationTaskRequest $request
     *
     * @return GetMigrationTaskResponse
     */
    public function getMigrationTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMigrationTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Queries a plugin mount.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPluginAttachmentResponse
     *
     * @param string         $pluginAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPluginAttachmentResponse
     */
    public function getPluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a plugin mount.
     *
     * @returns GetPluginAttachmentResponse
     *
     * @param string $pluginAttachmentId
     *
     * @return GetPluginAttachmentResponse
     */
    public function getPluginAttachment($pluginAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime);
    }

    /**
     * Retrieves a custom plug-in class.
     *
     * @param request - GetPluginClassRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPluginClassResponse
     *
     * @param string                $pluginClassId
     * @param GetPluginClassRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetPluginClassResponse
     */
    public function getPluginClassWithOptions($pluginClassId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPluginClass',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes/' . Url::percentEncode($pluginClassId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPluginClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a custom plug-in class.
     *
     * @param request - GetPluginClassRequest
     *
     * @returns GetPluginClassResponse
     *
     * @param string                $pluginClassId
     * @param GetPluginClassRequest $request
     *
     * @return GetPluginClassResponse
     */
    public function getPluginClass($pluginClassId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPluginClassWithOptions($pluginClassId, $request, $headers, $runtime);
    }

    /**
     * Queries the WebIDE workspace of a plugin.
     *
     * @param request - GetPluginWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPluginWorkspaceResponse
     *
     * @param string                    $workspaceId
     * @param GetPluginWorkspaceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetPluginWorkspaceResponse
     */
    public function getPluginWorkspaceWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPluginWorkspace',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPluginWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the WebIDE workspace of a plugin.
     *
     * @param request - GetPluginWorkspaceRequest
     *
     * @returns GetPluginWorkspaceResponse
     *
     * @param string                    $workspaceId
     * @param GetPluginWorkspaceRequest $request
     *
     * @return GetPluginWorkspaceResponse
     */
    public function getPluginWorkspace($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPluginWorkspaceWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyResponse
     *
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a policy.
     *
     * @returns GetPolicyResponse
     *
     * @param string $policyId
     *
     * @return GetPolicyResponse
     */
    public function getPolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * Queries the resource attachment of a policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyAttachmentResponse
     *
     * @param string         $policyAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPolicyAttachmentResponse
     */
    public function getPolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments/' . Url::percentEncode($policyAttachmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource attachment of a policy.
     *
     * @returns GetPolicyAttachmentResponse
     *
     * @param string $policyAttachmentId
     *
     * @return GetPolicyAttachmentResponse
     */
    public function getPolicyAttachment($policyAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime);
    }

    /**
     * Queries the details of a single HiMarket developer portal by portal ID and returns the portal name, description, region ID, portal settings, and portal domain name configurations.
     *
     * @param request - GetPortalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPortalResponse
     *
     * @param string           $portalId
     * @param GetPortalRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetPortalResponse
     */
    public function getPortalWithOptions($portalId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPortal',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/portals/' . Url::percentEncode($portalId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPortalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a single HiMarket developer portal by portal ID and returns the portal name, description, region ID, portal settings, and portal domain name configurations.
     *
     * @param request - GetPortalRequest
     *
     * @returns GetPortalResponse
     *
     * @param string           $portalId
     * @param GetPortalRequest $request
     *
     * @return GetPortalResponse
     */
    public function getPortal($portalId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPortalWithOptions($portalId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a single API product by API product ID and returns information such as the name, description, status, type, documentation, icon, automatic subscription approval setting, MCP, Agent, and model configurations, product capability configurations, and region.
     *
     * @param request - GetProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductResponse
     *
     * @param string            $productId
     * @param GetProductRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProductResponse
     */
    public function getProductWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProduct',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a single API product by API product ID and returns information such as the name, description, status, type, documentation, icon, automatic subscription approval setting, MCP, Agent, and model configurations, product capability configurations, and region.
     *
     * @param request - GetProductRequest
     *
     * @returns GetProductResponse
     *
     * @param string            $productId
     * @param GetProductRequest $request
     *
     * @return GetProductResponse
     */
    public function getProduct($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a product category by ID and returns the ID, name, description, and icon of the category.
     *
     * @param request - GetProductCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductCategoryResponse
     *
     * @param string                    $categoryId
     * @param GetProductCategoryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetProductCategoryResponse
     */
    public function getProductCategoryWithOptions($categoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProductCategory',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/product-categories/' . Url::percentEncode($categoryId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProductCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a product category by ID and returns the ID, name, description, and icon of the category.
     *
     * @param request - GetProductCategoryRequest
     *
     * @returns GetProductCategoryResponse
     *
     * @param string                    $categoryId
     * @param GetProductCategoryRequest $request
     *
     * @return GetProductCategoryResponse
     */
    public function getProductCategory($categoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductCategoryWithOptions($categoryId, $request, $headers, $runtime);
    }

    /**
     * Queries the API configurations associated with an API product by API product ID, and returns the ID of the gateway where the association resides and the APIG association configuration.
     *
     * @param request - GetProductRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductRefResponse
     *
     * @param string               $productId
     * @param GetProductRefRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetProductRefResponse
     */
    public function getProductRefWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProductRef',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '/ref',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProductRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the API configurations associated with an API product by API product ID, and returns the ID of the gateway where the association resides and the APIG association configuration.
     *
     * @param request - GetProductRefRequest
     *
     * @returns GetProductRefResponse
     *
     * @param string               $productId
     * @param GetProductRefRequest $request
     *
     * @return GetProductRefResponse
     */
    public function getProductRef($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductRefWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the resource overview information.
     *
     * @param request - GetResourceOverviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceOverviewResponse
     *
     * @param GetResourceOverviewRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetResourceOverviewResponse
     */
    public function getResourceOverviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceOverview',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/overview/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the resource overview information.
     *
     * @param request - GetResourceOverviewRequest
     *
     * @returns GetResourceOverviewResponse
     *
     * @param GetResourceOverviewRequest $request
     *
     * @return GetResourceOverviewResponse
     */
    public function getResourceOverview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceOverviewWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the notification configuration for a risk item.
     *
     * @param request - GetRiskNotificationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRiskNotificationResponse
     *
     * @param string                     $gatewayId
     * @param GetRiskNotificationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetRiskNotificationResponse
     */
    public function getRiskNotificationWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->riskCode) {
            @$query['riskCode'] = $request->riskCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRiskNotification',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/risk-check/notifications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRiskNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the notification configuration for a risk item.
     *
     * @param request - GetRiskNotificationRequest
     *
     * @returns GetRiskNotificationResponse
     *
     * @param string                     $gatewayId
     * @param GetRiskNotificationRequest $request
     *
     * @return GetRiskNotificationResponse
     */
    public function getRiskNotification($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRiskNotificationWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a key.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretResponse
     *
     * @param string         $secretId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSecretResponse
     */
    public function getSecretWithOptions($secretId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a key.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @returns GetSecretResponse
     *
     * @param string $secretId
     *
     * @return GetSecretResponse
     */
    public function getSecret($secretId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSecretWithOptions($secretId, $headers, $runtime);
    }

    /**
     * Retrieves the value of a secret.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretValueResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValueWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSecretValue',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/name/' . Url::percentEncode($name) . '/value',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the value of a secret.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @returns GetSecretValueResponse
     *
     * @param string $name
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValue($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSecretValueWithOptions($name, $headers, $runtime);
    }

    /**
     * Retrieves the details of a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceResponse
     *
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a service.
     *
     * @returns GetServiceResponse
     *
     * @param string $serviceId
     *
     * @return GetServiceResponse
     */
    public function getService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * Retrieves the details of a service source.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSourceResponse
     *
     * @param string         $sourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSourceResponse
     */
    public function getSourceWithOptions($sourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources/' . Url::percentEncode($sourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a service source.
     *
     * @returns GetSourceResponse
     *
     * @param string $sourceId
     *
     * @return GetSourceResponse
     */
    public function getSource($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSourceWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * Retrieves the Tracing Analysis configuration.
     *
     * @param request - GetTraceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTraceConfigResponse
     *
     * @param string                $gatewayId
     * @param GetTraceConfigRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetTraceConfigResponse
     */
    public function getTraceConfigWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTraceConfig',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/trace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTraceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the Tracing Analysis configuration.
     *
     * @param request - GetTraceConfigRequest
     *
     * @returns GetTraceConfigResponse
     *
     * @param string                $gatewayId
     * @param GetTraceConfigRequest $request
     *
     * @return GetTraceConfigResponse
     */
    public function getTraceConfig($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTraceConfigWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Executes the callback step in the OIDC logon flow by submitting the code and state query parameters via a GET request, and returns the accessToken, tokenType, and expiresIn fields in the response data.
     *
     * @param request - HandleOidcCallbackRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HandleOidcCallbackResponse
     *
     * @param HandleOidcCallbackRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return HandleOidcCallbackResponse
     */
    public function handleOidcCallbackWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['code'] = $request->code;
        }

        if (null !== $request->state) {
            @$query['state'] = $request->state;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HandleOidcCallback',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/oidc/callback',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HandleOidcCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes the callback step in the OIDC logon flow by submitting the code and state query parameters via a GET request, and returns the accessToken, tokenType, and expiresIn fields in the response data.
     *
     * @param request - HandleOidcCallbackRequest
     *
     * @returns HandleOidcCallbackResponse
     *
     * @param HandleOidcCallbackRequest $request
     *
     * @return HandleOidcCallbackResponse
     */
    public function handleOidcCallback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->handleOidcCallbackWithOptions($request, $headers, $runtime);
    }

    /**
     * Imports an HTTP API. You can import an OpenAPI 2.0 or OpenAPI 3.0.x definition file as a REST API.
     *
     * @param request - ImportHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportHttpApiResponse
     *
     * @param ImportHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ImportHttpApiResponse
     */
    public function importHttpApiWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->mcpRouteId) {
            @$body['mcpRouteId'] = $request->mcpRouteId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->specContentBase64) {
            @$body['specContentBase64'] = $request->specContentBase64;
        }

        if (null !== $request->specFileUrl) {
            @$body['specFileUrl'] = $request->specFileUrl;
        }

        if (null !== $request->specOssConfig) {
            @$body['specOssConfig'] = $request->specOssConfig;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        if (null !== $request->targetHttpApiId) {
            @$body['targetHttpApiId'] = $request->targetHttpApiId;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        if (null !== $request->withGatewayExtension) {
            @$body['withGatewayExtension'] = $request->withGatewayExtension;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/import',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ImportHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports an HTTP API. You can import an OpenAPI 2.0 or OpenAPI 3.0.x definition file as a REST API.
     *
     * @param request - ImportHttpApiRequest
     *
     * @returns ImportHttpApiResponse
     *
     * @param ImportHttpApiRequest $request
     *
     * @return ImportHttpApiResponse
     */
    public function importHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * Initiates the Authorize step in the OIDC logon process based on the OIDC provider identifier. The response body defined by the API operation contains only the requestId, code, and message fields, and does not declare the business response parameter data.
     *
     * @param request - InitiateOidcAuthRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitiateOidcAuthResponse
     *
     * @param InitiateOidcAuthRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return InitiateOidcAuthResponse
     */
    public function initiateOidcAuthWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitiateOidcAuth',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/oidc/authorize',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InitiateOidcAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates the Authorize step in the OIDC logon process based on the OIDC provider identifier. The response body defined by the API operation contains only the requestId, code, and message fields, and does not declare the business response parameter data.
     *
     * @param request - InitiateOidcAuthRequest
     *
     * @returns InitiateOidcAuthResponse
     *
     * @param InitiateOidcAuthRequest $request
     *
     * @return InitiateOidcAuthResponse
     */
    public function initiateOidcAuth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initiateOidcAuthWithOptions($request, $headers, $runtime);
    }

    /**
     * Installs a plug-in.
     *
     * @param request - InstallPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallPluginResponse
     *
     * @param InstallPluginRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InstallPluginResponse
     */
    public function installPluginWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayIds) {
            @$body['gatewayIds'] = $request->gatewayIds;
        }

        if (null !== $request->pluginClassId) {
            @$body['pluginClassId'] = $request->pluginClassId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallPlugin',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs a plug-in.
     *
     * @param request - InstallPluginRequest
     *
     * @returns InstallPluginResponse
     *
     * @param InstallPluginRequest $request
     *
     * @return InstallPluginResponse
     */
    public function installPlugin($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installPluginWithOptions($request, $headers, $runtime);
    }

    /**
     * Calls an AI agent.
     *
     * @param request - InvokeAIAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeAIAgentResponse
     *
     * @param InvokeAIAgentRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvokeAIAgentResponse
     */
    public function invokeAIAgentWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

        if (null !== $request->bizParams) {
            @$body['bizParams'] = $request->bizParams;
        }

        if (null !== $request->history) {
            @$body['history'] = $request->history;
        }

        if (null !== $request->outputLanguage) {
            @$body['outputLanguage'] = $request->outputLanguage;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvokeAIAgent',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-agents/invoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield InvokeAIAgentResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Calls an AI agent.
     *
     * @param request - InvokeAIAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeAIAgentResponse
     *
     * @param InvokeAIAgentRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvokeAIAgentResponse
     */
    public function invokeAIAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

        if (null !== $request->bizParams) {
            @$body['bizParams'] = $request->bizParams;
        }

        if (null !== $request->history) {
            @$body['history'] = $request->history;
        }

        if (null !== $request->outputLanguage) {
            @$body['outputLanguage'] = $request->outputLanguage;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvokeAIAgent',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-agents/invoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvokeAIAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls an AI agent.
     *
     * @param request - InvokeAIAgentRequest
     *
     * @returns InvokeAIAgentResponse
     *
     * @param InvokeAIAgentRequest $request
     *
     * @return InvokeAIAgentResponse
     */
    public function invokeAIAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeAIAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of AI model cards.
     *
     * @param request - ListAiModelCardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiModelCardsResponse
     *
     * @param ListAiModelCardsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAiModelCardsResponse
     */
    public function listAiModelCardsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiModelCards',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAiModelCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AI model cards.
     *
     * @param request - ListAiModelCardsRequest
     *
     * @returns ListAiModelCardsResponse
     *
     * @param ListAiModelCardsRequest $request
     *
     * @return ListAiModelCardsResponse
     */
    public function listAiModelCards($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAiModelCardsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of AI model providers.
     *
     * @param request - ListAiModelProvidersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiModelProvidersResponse
     *
     * @param ListAiModelProvidersRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListAiModelProvidersResponse
     */
    public function listAiModelProvidersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiModelProviders',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAiModelProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of AI model providers.
     *
     * @param request - ListAiModelProvidersRequest
     *
     * @returns ListAiModelProvidersResponse
     *
     * @param ListAiModelProvidersRequest $request
     *
     * @return ListAiModelProvidersResponse
     */
    public function listAiModelProviders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAiModelProvidersWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paging query on the field template list and returns the template ID, request path, and applicable protocol for each template record.
     *
     * @param request - ListApiPathFieldTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiPathFieldTemplatesResponse
     *
     * @param ListApiPathFieldTemplatesRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListApiPathFieldTemplatesResponse
     */
    public function listApiPathFieldTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiPathFieldTemplates',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api-path-fields/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiPathFieldTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query on the field template list and returns the template ID, request path, and applicable protocol for each template record.
     *
     * @param request - ListApiPathFieldTemplatesRequest
     *
     * @returns ListApiPathFieldTemplatesResponse
     *
     * @param ListApiPathFieldTemplatesRequest $request
     *
     * @return ListApiPathFieldTemplatesResponse
     */
    public function listApiPathFieldTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApiPathFieldTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of batch export tasks.
     *
     * @param request - ListBatchExportTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBatchExportTasksResponse
     *
     * @param ListBatchExportTasksRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListBatchExportTasksResponse
     */
    public function listBatchExportTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->statuses) {
            @$query['statuses'] = $request->statuses;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBatchExportTasks',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-api-batch-export-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBatchExportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of batch export tasks.
     *
     * @param request - ListBatchExportTasksRequest
     *
     * @returns ListBatchExportTasksResponse
     *
     * @param ListBatchExportTasksRequest $request
     *
     * @return ListBatchExportTasksResponse
     */
    public function listBatchExportTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBatchExportTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paged query on the list of HiMarket chat sessions, returning the session ID, name, conversation type, and associated API products for each session. The response also includes the paging page number, paging size, and total count.
     *
     * @param request - ListChatSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatSessionsResponse
     *
     * @param ListChatSessionsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListChatSessionsResponse
     */
    public function listChatSessionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChatSessions',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/sessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListChatSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query on the list of HiMarket chat sessions, returning the session ID, name, conversation type, and associated API products for each session. The response also includes the paging page number, paging size, and total count.
     *
     * @param request - ListChatSessionsRequest
     *
     * @returns ListChatSessionsResponse
     *
     * @param ListChatSessionsRequest $request
     *
     * @return ListChatSessionsResponse
     */
    public function listChatSessions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChatSessionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of consumer authorization rules.
     *
     * @param request - ListConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerAuthorizationRulesResponse
     *
     * @param string                                $consumerId
     * @param ListConsumerAuthorizationRulesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListConsumerAuthorizationRulesResponse
     */
    public function listConsumerAuthorizationRulesWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiNameLike) {
            @$query['apiNameLike'] = $request->apiNameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of consumer authorization rules.
     *
     * @param request - ListConsumerAuthorizationRulesRequest
     *
     * @returns ListConsumerAuthorizationRulesResponse
     *
     * @param string                                $consumerId
     * @param ListConsumerAuthorizationRulesRequest $request
     *
     * @return ListConsumerAuthorizationRulesResponse
     */
    public function listConsumerAuthorizationRules($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerAuthorizationRulesWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Queries the member list of a consumer group.
     *
     * @param request - ListConsumerGroupConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerGroupConsumersResponse
     *
     * @param string                            $consumerGroupId
     * @param ListConsumerGroupConsumersRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListConsumerGroupConsumersResponse
     */
    public function listConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerGroupConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '/consumers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerGroupConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the member list of a consumer group.
     *
     * @param request - ListConsumerGroupConsumersRequest
     *
     * @returns ListConsumerGroupConsumersResponse
     *
     * @param string                            $consumerGroupId
     * @param ListConsumerGroupConsumersRequest $request
     *
     * @return ListConsumerGroupConsumersResponse
     */
    public function listConsumerGroupConsumers($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of quota throttling rules for a consumer group.
     *
     * @remarks
     * Queries the quota rules directly bound to a specified consumer group. Rules individually bound to consumers within the group are not included. An empty list is returned if no rules are directly bound.
     *
     * @param request - ListConsumerGroupQuotaRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerGroupQuotaRulesResponse
     *
     * @param string                             $consumerGroupId
     * @param ListConsumerGroupQuotaRulesRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListConsumerGroupQuotaRulesResponse
     */
    public function listConsumerGroupQuotaRulesWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerGroupQuotaRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '/quota-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerGroupQuotaRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of quota throttling rules for a consumer group.
     *
     * @remarks
     * Queries the quota rules directly bound to a specified consumer group. Rules individually bound to consumers within the group are not included. An empty list is returned if no rules are directly bound.
     *
     * @param request - ListConsumerGroupQuotaRulesRequest
     *
     * @returns ListConsumerGroupQuotaRulesResponse
     *
     * @param string                             $consumerGroupId
     * @param ListConsumerGroupQuotaRulesRequest $request
     *
     * @return ListConsumerGroupQuotaRulesResponse
     */
    public function listConsumerGroupQuotaRules($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupQuotaRulesWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of consumer groups.
     *
     * @param request - ListConsumerGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerGroupsResponse
     *
     * @param ListConsumerGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListConsumerGroupsResponse
     */
    public function listConsumerGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerGroups',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of consumer groups.
     *
     * @param request - ListConsumerGroupsRequest
     *
     * @returns ListConsumerGroupsResponse
     *
     * @param ListConsumerGroupsRequest $request
     *
     * @return ListConsumerGroupsResponse
     */
    public function listConsumerGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of quota rules configured for a specific consumer.
     *
     * @param request - ListConsumerQuotaRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerQuotaRulesResponse
     *
     * @param string                        $consumerId
     * @param ListConsumerQuotaRulesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListConsumerQuotaRulesResponse
     */
    public function listConsumerQuotaRulesWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerQuotaRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/quota-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerQuotaRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of quota rules configured for a specific consumer.
     *
     * @param request - ListConsumerQuotaRulesRequest
     *
     * @returns ListConsumerQuotaRulesResponse
     *
     * @param string                        $consumerId
     * @param ListConsumerQuotaRulesRequest $request
     *
     * @return ListConsumerQuotaRulesResponse
     */
    public function listConsumerQuotaRules($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerQuotaRulesWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of API consumers.
     *
     * @param request - ListConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumersResponse
     *
     * @param ListConsumersRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListConsumersResponse
     */
    public function listConsumersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of API consumers.
     *
     * @param request - ListConsumersRequest
     *
     * @returns ListConsumersResponse
     *
     * @param ListConsumersRequest $request
     *
     * @return ListConsumersResponse
     */
    public function listConsumers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumersWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paged query on the HiMarket developer list. You can filter the paging results by portal ID, username, and developer status. The response includes the developer ID, portal ID, username, and status.
     *
     * @param request - ListDevelopersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDevelopersResponse
     *
     * @param ListDevelopersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListDevelopersResponse
     */
    public function listDevelopersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->portalId) {
            @$query['portalId'] = $request->portalId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->username) {
            @$query['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDevelopers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/developers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDevelopersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query on the HiMarket developer list. You can filter the paging results by portal ID, username, and developer status. The response includes the developer ID, portal ID, username, and status.
     *
     * @param request - ListDevelopersRequest
     *
     * @returns ListDevelopersResponse
     *
     * @param ListDevelopersRequest $request
     *
     * @return ListDevelopersResponse
     */
    public function listDevelopers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDevelopersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of domain names.
     *
     * @param request - ListDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainScope) {
            @$query['domainScope'] = $request->domainScope;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomains',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of domain names.
     *
     * @param request - ListDomainsRequest
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of environments.
     *
     * @deprecated OpenAPI ListEnvironments is deprecated
     *
     * @param request - ListEnvironmentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnvironmentsResponse
     *
     * @param ListEnvironmentsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasLike) {
            @$query['aliasLike'] = $request->aliasLike;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayNameLike) {
            @$query['gatewayNameLike'] = $request->gatewayNameLike;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnvironments',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the list of environments.
     *
     * @deprecated OpenAPI ListEnvironments is deprecated
     *
     * @param request - ListEnvironmentsRequest
     *
     * @returns ListEnvironmentsResponse
     *
     * @param ListEnvironmentsRequest $request
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves external service information for a gateway.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - ListExternalServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExternalServicesResponse
     *
     * @param string                      $gatewayId
     * @param ListExternalServicesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListExternalServicesResponse
     */
    public function listExternalServicesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->importableOnly) {
            @$query['importableOnly'] = $request->importableOnly;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->paiWorkspaceId) {
            @$query['paiWorkspaceId'] = $request->paiWorkspaceId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExternalServices',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/external-services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExternalServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves external service information for a gateway.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - ListExternalServicesRequest
     *
     * @returns ListExternalServicesResponse
     *
     * @param string                      $gatewayId
     * @param ListExternalServicesRequest $request
     *
     * @return ListExternalServicesResponse
     */
    public function listExternalServices($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExternalServicesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of security groups that can be authorized for a gateway.
     *
     * @param request - ListGatewayAuthorizableSecurityGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayAuthorizableSecurityGroupsResponse
     *
     * @param string                                       $gatewayId
     * @param ListGatewayAuthorizableSecurityGroupsRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return ListGatewayAuthorizableSecurityGroupsResponse
     */
    public function listGatewayAuthorizableSecurityGroupsWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->csClusterId) {
            @$query['csClusterId'] = $request->csClusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayAuthorizableSecurityGroups',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/authorizable-security-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayAuthorizableSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of security groups that can be authorized for a gateway.
     *
     * @param request - ListGatewayAuthorizableSecurityGroupsRequest
     *
     * @returns ListGatewayAuthorizableSecurityGroupsResponse
     *
     * @param string                                       $gatewayId
     * @param ListGatewayAuthorizableSecurityGroupsRequest $request
     *
     * @return ListGatewayAuthorizableSecurityGroupsResponse
     */
    public function listGatewayAuthorizableSecurityGroups($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayAuthorizableSecurityGroupsWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of security group rules authorized for a gateway.
     *
     * @param request - ListGatewayAuthorizedSecurityGroupRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayAuthorizedSecurityGroupRulesResponse
     *
     * @param string                                         $gatewayId
     * @param ListGatewayAuthorizedSecurityGroupRulesRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListGatewayAuthorizedSecurityGroupRulesResponse
     */
    public function listGatewayAuthorizedSecurityGroupRulesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListGatewayAuthorizedSecurityGroupRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/authorized-security-groups-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayAuthorizedSecurityGroupRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of security group rules authorized for a gateway.
     *
     * @param request - ListGatewayAuthorizedSecurityGroupRulesRequest
     *
     * @returns ListGatewayAuthorizedSecurityGroupRulesResponse
     *
     * @param string                                         $gatewayId
     * @param ListGatewayAuthorizedSecurityGroupRulesRequest $request
     *
     * @return ListGatewayAuthorizedSecurityGroupRulesResponse
     */
    public function listGatewayAuthorizedSecurityGroupRules($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayAuthorizedSecurityGroupRulesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Lists gateway error access logs.
     *
     * @param request - ListGatewayErrorAccessLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayErrorAccessLogsResponse
     *
     * @param string                            $gatewayId
     * @param ListGatewayErrorAccessLogsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListGatewayErrorAccessLogsResponse
     */
    public function listGatewayErrorAccessLogsWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authority) {
            @$query['authority'] = $request->authority;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->gatewayRequestId) {
            @$query['gatewayRequestId'] = $request->gatewayRequestId;
        }

        if (null !== $request->path) {
            @$query['path'] = $request->path;
        }

        if (null !== $request->responseCode) {
            @$query['responseCode'] = $request->responseCode;
        }

        if (null !== $request->routeName) {
            @$query['routeName'] = $request->routeName;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayErrorAccessLogs',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/error-access-logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayErrorAccessLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists gateway error access logs.
     *
     * @param request - ListGatewayErrorAccessLogsRequest
     *
     * @returns ListGatewayErrorAccessLogsResponse
     *
     * @param string                            $gatewayId
     * @param ListGatewayErrorAccessLogsRequest $request
     *
     * @return ListGatewayErrorAccessLogsResponse
     */
    public function listGatewayErrorAccessLogs($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayErrorAccessLogsWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of gateway attribute parameter settings.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayFeaturesResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListGatewayFeaturesResponse
     */
    public function listGatewayFeaturesWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListGatewayFeatures',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/gateway-features',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of gateway attribute parameter settings.
     *
     * @returns ListGatewayFeaturesResponse
     *
     * @param string $gatewayId
     *
     * @return ListGatewayFeaturesResponse
     */
    public function listGatewayFeatures($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayFeaturesWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Retrieves the list of load balancers for a gateway.
     *
     * @param request - ListGatewayLoadBalancersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayLoadBalancersResponse
     *
     * @param string                          $gatewayId
     * @param ListGatewayLoadBalancersRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListGatewayLoadBalancersResponse
     */
    public function listGatewayLoadBalancersWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['all'] = $request->all;
        }

        if (null !== $request->loadBalancerId) {
            @$query['loadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->network) {
            @$query['network'] = $request->network;
        }

        if (null !== $request->related) {
            @$query['related'] = $request->related;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->vpcId) {
            @$query['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayLoadBalancers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/list-load-balancers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of load balancers for a gateway.
     *
     * @param request - ListGatewayLoadBalancersRequest
     *
     * @returns ListGatewayLoadBalancersResponse
     *
     * @param string                          $gatewayId
     * @param ListGatewayLoadBalancersRequest $request
     *
     * @return ListGatewayLoadBalancersResponse
     */
    public function listGatewayLoadBalancers($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayLoadBalancersWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of FinOps quota rules bound to a gateway.
     *
     * @remarks
     * Queries the list of FinOps quota rules bound to a gateway.
     *
     * @param request - ListGatewayQuotaRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayQuotaRulesResponse
     *
     * @param string                       $gatewayId
     * @param ListGatewayQuotaRulesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListGatewayQuotaRulesResponse
     */
    public function listGatewayQuotaRulesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayQuotaRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayQuotaRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of FinOps quota rules bound to a gateway.
     *
     * @remarks
     * Queries the list of FinOps quota rules bound to a gateway.
     *
     * @param request - ListGatewayQuotaRulesRequest
     *
     * @returns ListGatewayQuotaRulesResponse
     *
     * @param string                       $gatewayId
     * @param ListGatewayQuotaRulesRequest $request
     *
     * @return ListGatewayQuotaRulesResponse
     */
    public function listGatewayQuotaRules($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayQuotaRulesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of gateways.
     *
     * @param tmpReq - ListGatewaysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewaysResponse
     *
     * @param ListGatewaysRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListGatewaysResponse
     */
    public function listGatewaysWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGatewaysShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->vpcId) {
            @$query['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGateways',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of gateways.
     *
     * @param request - ListGatewaysRequest
     *
     * @returns ListGatewaysResponse
     *
     * @param ListGatewaysRequest $request
     *
     * @return ListGatewaysResponse
     */
    public function listGateways($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewaysWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves global policies.
     *
     * @param request - ListGlobalPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGlobalPoliciesResponse
     *
     * @param ListGlobalPoliciesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListGlobalPoliciesResponse
     */
    public function listGlobalPoliciesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->className) {
            @$query['className'] = $request->className;
        }

        if (null !== $request->enable) {
            @$query['enable'] = $request->enable;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->globalPolicyType) {
            @$query['globalPolicyType'] = $request->globalPolicyType;
        }

        if (null !== $request->ipAccessControlContent) {
            @$query['ipAccessControlContent'] = $request->ipAccessControlContent;
        }

        if (null !== $request->ipAccessControlProtocolLayer) {
            @$query['ipAccessControlProtocolLayer'] = $request->ipAccessControlProtocolLayer;
        }

        if (null !== $request->ipAccessControlResourceName) {
            @$query['ipAccessControlResourceName'] = $request->ipAccessControlResourceName;
        }

        if (null !== $request->ipAccessControlType) {
            @$query['ipAccessControlType'] = $request->ipAccessControlType;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGlobalPolicies',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/global-policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGlobalPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves global policies.
     *
     * @param request - ListGlobalPoliciesRequest
     *
     * @returns ListGlobalPoliciesResponse
     *
     * @param ListGlobalPoliciesRequest $request
     *
     * @return ListGlobalPoliciesResponse
     */
    public function listGlobalPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGlobalPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paged query to retrieve the API product subscriptions of a specified HiMarket consumer. The paging process allows you to filter subscriptions by status. Each subscription record includes the subscription ID, the ID, name, and type of the subscribed API product, the consumer ID and name, and the subscription status.
     *
     * @param request - ListHiMarketConsumerSubscriptionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHiMarketConsumerSubscriptionsResponse
     *
     * @param string                                   $consumerId
     * @param ListHiMarketConsumerSubscriptionsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListHiMarketConsumerSubscriptionsResponse
     */
    public function listHiMarketConsumerSubscriptionsWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHiMarketConsumerSubscriptions',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/consumers/' . Url::percentEncode($consumerId) . '/subscriptions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHiMarketConsumerSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query to retrieve the API product subscriptions of a specified HiMarket consumer. The paging process allows you to filter subscriptions by status. Each subscription record includes the subscription ID, the ID, name, and type of the subscribed API product, the consumer ID and name, and the subscription status.
     *
     * @param request - ListHiMarketConsumerSubscriptionsRequest
     *
     * @returns ListHiMarketConsumerSubscriptionsResponse
     *
     * @param string                                   $consumerId
     * @param ListHiMarketConsumerSubscriptionsRequest $request
     *
     * @return ListHiMarketConsumerSubscriptionsResponse
     */
    public function listHiMarketConsumerSubscriptions($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHiMarketConsumerSubscriptionsWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Performs a paging query on the HiMarket consumer list. You can filter consumers by name keywords, portal ID, and developer ID. The response includes the ID, name, description, and primary status of each consumer.
     *
     * @param request - ListHiMarketConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHiMarketConsumersResponse
     *
     * @param ListHiMarketConsumersRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListHiMarketConsumersResponse
     */
    public function listHiMarketConsumersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->developerId) {
            @$query['developerId'] = $request->developerId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->portalId) {
            @$query['portalId'] = $request->portalId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHiMarketConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/consumers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHiMarketConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query on the HiMarket consumer list. You can filter consumers by name keywords, portal ID, and developer ID. The response includes the ID, name, description, and primary status of each consumer.
     *
     * @param request - ListHiMarketConsumersRequest
     *
     * @returns ListHiMarketConsumersResponse
     *
     * @param ListHiMarketConsumersRequest $request
     *
     * @return ListHiMarketConsumersResponse
     */
    public function listHiMarketConsumers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHiMarketConsumersWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of API operations.
     *
     * @param request - ListHttpApiOperationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApiOperationsResponse
     *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListHttpApiOperationsResponse
     */
    public function listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerAuthorizationRuleId) {
            @$query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }

        if (null !== $request->enableAuth) {
            @$query['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->forDeploy) {
            @$query['forDeploy'] = $request->forDeploy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pathLike) {
            @$query['pathLike'] = $request->pathLike;
        }

        if (null !== $request->withConsumerInEnvironmentId) {
            @$query['withConsumerInEnvironmentId'] = $request->withConsumerInEnvironmentId;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApiOperations',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApiOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of API operations.
     *
     * @param request - ListHttpApiOperationsRequest
     *
     * @returns ListHttpApiOperationsResponse
     *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request
     *
     * @return ListHttpApiOperationsResponse
     */
    public function listHttpApiOperations($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Queries the route list of an HTTP API.
     *
     * @param request - ListHttpApiRoutesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApiRoutesResponse
     *
     * @param string                   $httpApiId
     * @param ListHttpApiRoutesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListHttpApiRoutesResponse
     */
    public function listHttpApiRoutesWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServiceName) {
            @$query['backendServiceName'] = $request->backendServiceName;
        }

        if (null !== $request->consumerAuthorizationRuleId) {
            @$query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }

        if (null !== $request->deployStatuses) {
            @$query['deployStatuses'] = $request->deployStatuses;
        }

        if (null !== $request->domainId) {
            @$query['domainId'] = $request->domainId;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->forDeploy) {
            @$query['forDeploy'] = $request->forDeploy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pathLike) {
            @$query['pathLike'] = $request->pathLike;
        }

        if (null !== $request->withAuthPolicyInfo) {
            @$query['withAuthPolicyInfo'] = $request->withAuthPolicyInfo;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApiRoutes',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApiRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the route list of an HTTP API.
     *
     * @param request - ListHttpApiRoutesRequest
     *
     * @returns ListHttpApiRoutesResponse
     *
     * @param string                   $httpApiId
     * @param ListHttpApiRoutesRequest $request
     *
     * @return ListHttpApiRoutesResponse
     */
    public function listHttpApiRoutes($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiRoutesWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of HTTP APIs.
     *
     * @param request - ListHttpApisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApisResponse
     *
     * @param ListHttpApisRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListHttpApisResponse
     */
    public function listHttpApisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->types) {
            @$query['types'] = $request->types;
        }

        if (null !== $request->withAPIsPublishedToEnvironment) {
            @$query['withAPIsPublishedToEnvironment'] = $request->withAPIsPublishedToEnvironment;
        }

        if (null !== $request->withAuthPolicyInEnvironmentId) {
            @$query['withAuthPolicyInEnvironmentId'] = $request->withAuthPolicyInEnvironmentId;
        }

        if (null !== $request->withAuthPolicyList) {
            @$query['withAuthPolicyList'] = $request->withAuthPolicyList;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withEnvironmentInfo) {
            @$query['withEnvironmentInfo'] = $request->withEnvironmentInfo;
        }

        if (null !== $request->withEnvironmentInfoById) {
            @$query['withEnvironmentInfoById'] = $request->withEnvironmentInfoById;
        }

        if (null !== $request->withIngressInfo) {
            @$query['withIngressInfo'] = $request->withIngressInfo;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        if (null !== $request->withPolicyConfigs) {
            @$query['withPolicyConfigs'] = $request->withPolicyConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApis',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of HTTP APIs.
     *
     * @param request - ListHttpApisRequest
     *
     * @returns ListHttpApisResponse
     *
     * @param ListHttpApisRequest $request
     *
     * @return ListHttpApisResponse
     */
    public function listHttpApis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApisWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves gateways on which a plugin can be installed.
     *
     * @param request - ListInstallableGatewaysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstallableGatewaysResponse
     *
     * @param string                         $pluginClassId
     * @param ListInstallableGatewaysRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListInstallableGatewaysResponse
     */
    public function listInstallableGatewaysWithOptions($pluginClassId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstallableGateways',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes/' . Url::percentEncode($pluginClassId) . '/installable-gateways',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstallableGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves gateways on which a plugin can be installed.
     *
     * @param request - ListInstallableGatewaysRequest
     *
     * @returns ListInstallableGatewaysResponse
     *
     * @param string                         $pluginClassId
     * @param ListInstallableGatewaysRequest $request
     *
     * @return ListInstallableGatewaysResponse
     */
    public function listInstallableGateways($pluginClassId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstallableGatewaysWithOptions($pluginClassId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of clusters that can be added as Kubernetes sources.
     *
     * @param request - ListK8sClusterSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListK8sClusterSourcesResponse
     *
     * @param string                       $gatewayId
     * @param ListK8sClusterSourcesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListK8sClusterSourcesResponse
     */
    public function listK8sClusterSourcesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vpcId) {
            @$query['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListK8sClusterSources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/gateways/' . Url::percentEncode($gatewayId) . '/service-sources/k8s-clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListK8sClusterSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of clusters that can be added as Kubernetes sources.
     *
     * @param request - ListK8sClusterSourcesRequest
     *
     * @returns ListK8sClusterSourcesResponse
     *
     * @param string                       $gatewayId
     * @param ListK8sClusterSourcesRequest $request
     *
     * @return ListK8sClusterSourcesResponse
     */
    public function listK8sClusterSources($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listK8sClusterSourcesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of Model Context Protocol (MCP) tools in an MCP Server API product and returns a list of tools. Each tool includes three text fields (name, title, and description) and four map structures (inputSchema, outputSchema, annotations, and meta).
     *
     * @param request - ListMcpProductToolsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpProductToolsResponse
     *
     * @param string                     $productId
     * @param ListMcpProductToolsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListMcpProductToolsResponse
     */
    public function listMcpProductToolsWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListMcpProductTools',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '/tools',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMcpProductToolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of Model Context Protocol (MCP) tools in an MCP Server API product and returns a list of tools. Each tool includes three text fields (name, title, and description) and four map structures (inputSchema, outputSchema, annotations, and meta).
     *
     * @param request - ListMcpProductToolsRequest
     *
     * @returns ListMcpProductToolsResponse
     *
     * @param string                     $productId
     * @param ListMcpProductToolsRequest $request
     *
     * @return ListMcpProductToolsResponse
     */
    public function listMcpProductTools($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMcpProductToolsWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of MCP servers.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListMcpServersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpServersResponse
     *
     * @param ListMcpServersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListMcpServersResponse
     */
    public function listMcpServersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createFromTypes) {
            @$query['createFromTypes'] = $request->createFromTypes;
        }

        if (null !== $request->deployStatuses) {
            @$query['deployStatuses'] = $request->deployStatuses;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMcpServers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMcpServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of MCP servers.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListMcpServersRequest
     *
     * @returns ListMcpServersResponse
     *
     * @param ListMcpServersRequest $request
     *
     * @return ListMcpServersResponse
     */
    public function listMcpServers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMcpServersWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists migration tasks.
     *
     * @param request - ListMigrationTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMigrationTasksResponse
     *
     * @param ListMigrationTasksRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMigrationTasksResponse
     */
    public function listMigrationTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMigrationTasks',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/migration-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMigrationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists migration tasks.
     *
     * @param request - ListMigrationTasksRequest
     *
     * @returns ListMigrationTasksResponse
     *
     * @param ListMigrationTasksRequest $request
     *
     * @return ListMigrationTasksResponse
     */
    public function listMigrationTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMigrationTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of model cards and returns the model name, provider, and source identifier for each card, along with the features, pricing, meta, availablePaths, and snapshots structures. The only business request parameter is the provider identifier.
     *
     * @param request - ListModelCardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelCardsResponse
     *
     * @param ListModelCardsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListModelCardsResponse
     */
    public function listModelCardsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelCards',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/model-cards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of model cards and returns the model name, provider, and source identifier for each card, along with the features, pricing, meta, availablePaths, and snapshots structures. The only business request parameter is the provider identifier.
     *
     * @param request - ListModelCardsRequest
     *
     * @returns ListModelCardsResponse
     *
     * @param ListModelCardsRequest $request
     *
     * @return ListModelCardsResponse
     */
    public function listModelCards($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelCardsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of instances that can be added as Nacos sources.
     *
     * @param request - ListMseNacosSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMseNacosSourcesResponse
     *
     * @param string                     $gatewayId
     * @param ListMseNacosSourcesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListMseNacosSourcesResponse
     */
    public function listMseNacosSourcesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListMseNacosSources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/service-sources/mse-nacos-instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMseNacosSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of instances that can be added as Nacos sources.
     *
     * @param request - ListMseNacosSourcesRequest
     *
     * @returns ListMseNacosSourcesResponse
     *
     * @param string                     $gatewayId
     * @param ListMseNacosSourcesRequest $request
     *
     * @return ListMseNacosSourcesResponse
     */
    public function listMseNacosSources($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMseNacosSourcesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of plug-in mounts.
     *
     * @param request - ListPluginAttachmentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginAttachmentsResponse
     *
     * @param ListPluginAttachmentsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPluginAttachmentsResponse
     */
    public function listPluginAttachmentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->attachResourceTypes) {
            @$query['attachResourceTypes'] = $request->attachResourceTypes;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['pluginId'] = $request->pluginId;
        }

        if (null !== $request->withParentResource) {
            @$query['withParentResource'] = $request->withParentResource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPluginAttachments',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of plug-in mounts.
     *
     * @param request - ListPluginAttachmentsRequest
     *
     * @returns ListPluginAttachmentsResponse
     *
     * @param ListPluginAttachmentsRequest $request
     *
     * @return ListPluginAttachmentsResponse
     */
    public function listPluginAttachments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginAttachmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves plug-ins.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListPluginClassesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginClassesResponse
     *
     * @param ListPluginClassesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListPluginClassesResponse
     */
    public function listPluginClassesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasLike) {
            @$query['aliasLike'] = $request->aliasLike;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->excludeBuiltinAiProxy) {
            @$query['excludeBuiltinAiProxy'] = $request->excludeBuiltinAiProxy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->installed) {
            @$query['installed'] = $request->installed;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPluginClasses',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves plug-ins.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListPluginClassesRequest
     *
     * @returns ListPluginClassesResponse
     *
     * @param ListPluginClassesRequest $request
     *
     * @return ListPluginClassesResponse
     */
    public function listPluginClasses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginClassesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of repositories and organization information for custom plugins hosted on Codeup. Before calling this operation, enable code hosting on Codeup, create organizations and repositories, and authorize API Gateway to access the Codeup account.
     *
     * @param request - ListPluginRepositoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginRepositoriesResponse
     *
     * @param ListPluginRepositoriesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListPluginRepositoriesResponse
     */
    public function listPluginRepositoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListPluginRepositories',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-repositories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of repositories and organization information for custom plugins hosted on Codeup. Before calling this operation, enable code hosting on Codeup, create organizations and repositories, and authorize API Gateway to access the Codeup account.
     *
     * @param request - ListPluginRepositoriesRequest
     *
     * @returns ListPluginRepositoriesResponse
     *
     * @param ListPluginRepositoriesRequest $request
     *
     * @return ListPluginRepositoriesResponse
     */
    public function listPluginRepositories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginRepositoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of plugin WebIDE workspaces for the current user.
     *
     * @param request - ListPluginWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginWorkspaceResponse
     *
     * @param ListPluginWorkspaceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPluginWorkspaceResponse
     */
    public function listPluginWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPluginWorkspace',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-workspaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of plugin WebIDE workspaces for the current user.
     *
     * @param request - ListPluginWorkspaceRequest
     *
     * @returns ListPluginWorkspaceResponse
     *
     * @param ListPluginWorkspaceRequest $request
     *
     * @return ListPluginWorkspaceResponse
     */
    public function listPluginWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of plug-ins.
     *
     * @param request - ListPluginsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginsResponse
     *
     * @param ListPluginsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListPluginsResponse
     */
    public function listPluginsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->includeBuiltinAiGateway) {
            @$query['includeBuiltinAiGateway'] = $request->includeBuiltinAiGateway;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginClassId) {
            @$query['pluginClassId'] = $request->pluginClassId;
        }

        if (null !== $request->pluginClassName) {
            @$query['pluginClassName'] = $request->pluginClassName;
        }

        if (null !== $request->withAttachmentInfo) {
            @$query['withAttachmentInfo'] = $request->withAttachmentInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPlugins',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of plug-ins.
     *
     * @param request - ListPluginsRequest
     *
     * @returns ListPluginsResponse
     *
     * @param ListPluginsRequest $request
     *
     * @return ListPluginsResponse
     */
    public function listPlugins($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of policies.
     *
     * @param request - ListPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->withAttachments) {
            @$query['withAttachments'] = $request->withAttachments;
        }

        if (null !== $request->withSystemPolicy) {
            @$query['withSystemPolicy'] = $request->withSystemPolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of policies.
     *
     * @param request - ListPoliciesRequest
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves policy templates.
     *
     * @param request - ListPolicyClassesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyClassesResponse
     *
     * @param ListPolicyClassesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListPolicyClassesResponse
     */
    public function listPolicyClassesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicyClasses',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-classes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPolicyClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves policy templates.
     *
     * @param request - ListPolicyClassesRequest
     *
     * @returns ListPolicyClassesResponse
     *
     * @param ListPolicyClassesRequest $request
     *
     * @return ListPolicyClassesResponse
     */
    public function listPolicyClasses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPolicyClassesWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paged query for the list of published API products on a specified HiMarket developer portal. The paging result contains list items, each returning the publication record ID, API product ID, API product name, and API product type.
     *
     * @param request - ListPortalPublicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPortalPublicationsResponse
     *
     * @param string                        $portalId
     * @param ListPortalPublicationsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListPortalPublicationsResponse
     */
    public function listPortalPublicationsWithOptions($portalId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productName) {
            @$query['productName'] = $request->productName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPortalPublications',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/portals/' . Url::percentEncode($portalId) . '/publications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPortalPublicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query for the list of published API products on a specified HiMarket developer portal. The paging result contains list items, each returning the publication record ID, API product ID, API product name, and API product type.
     *
     * @param request - ListPortalPublicationsRequest
     *
     * @returns ListPortalPublicationsResponse
     *
     * @param string                        $portalId
     * @param ListPortalPublicationsRequest $request
     *
     * @return ListPortalPublicationsResponse
     */
    public function listPortalPublications($portalId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPortalPublicationsWithOptions($portalId, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query for the list of HiMarket developer portals under the current tenant. Each list item in the paging result returns the portal ID, portal name, portal description, region ID, portal settings, and portal domain configurations.
     *
     * @param request - ListPortalsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPortalsResponse
     *
     * @param ListPortalsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListPortalsResponse
     */
    public function listPortalsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPortals',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/portals',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPortalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query for the list of HiMarket developer portals under the current tenant. Each list item in the paging result returns the portal ID, portal name, portal description, region ID, portal settings, and portal domain configurations.
     *
     * @param request - ListPortalsRequest
     *
     * @returns ListPortalsResponse
     *
     * @param ListPortalsRequest $request
     *
     * @return ListPortalsResponse
     */
    public function listPortals($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPortalsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of product categories for the current tenant with paging. You can search by category name keywords. Each item in the list includes the category ID, category name, category description, and category icon.
     *
     * @param request - ListProductCategoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductCategoriesResponse
     *
     * @param ListProductCategoriesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListProductCategoriesResponse
     */
    public function listProductCategoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductCategories',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/product-categories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of product categories for the current tenant with paging. You can search by category name keywords. Each item in the list includes the category ID, category name, category description, and category icon.
     *
     * @param request - ListProductCategoriesRequest
     *
     * @returns ListProductCategoriesResponse
     *
     * @param ListProductCategoriesRequest $request
     *
     * @return ListProductCategoriesResponse
     */
    public function listProductCategories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductCategoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paged query on the publication information of a specified API product, which is the list of portal records to which the product is published. The list items include the publication record ID, portal ID, portal name, API product ID, API product name, and API product type. You can perform a parameter query by portal name and paging parameters.
     *
     * @param request - ListProductPublicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductPublicationsResponse
     *
     * @param string                         $productId
     * @param ListProductPublicationsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListProductPublicationsResponse
     */
    public function listProductPublicationsWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->portalName) {
            @$query['portalName'] = $request->portalName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductPublications',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '/publications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductPublicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query on the publication information of a specified API product, which is the list of portal records to which the product is published. The list items include the publication record ID, portal ID, portal name, API product ID, API product name, and API product type. You can perform a parameter query by portal name and paging parameters.
     *
     * @param request - ListProductPublicationsRequest
     *
     * @returns ListProductPublicationsResponse
     *
     * @param string                         $productId
     * @param ListProductPublicationsRequest $request
     *
     * @return ListProductPublicationsResponse
     */
    public function listProductPublications($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductPublicationsWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query to retrieve the paging list of subscribe records for a specified API product. The records can be filtered by subscribe status and searched by consumer name keywords. Each record includes the subscribe ID, API product ID and name, API product type, consumer ID and name, and subscribe status.
     *
     * @param request - ListProductSubscriptionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductSubscriptionsResponse
     *
     * @param string                          $productId
     * @param ListProductSubscriptionsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListProductSubscriptionsResponse
     */
    public function listProductSubscriptionsWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerName) {
            @$query['consumerName'] = $request->consumerName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductSubscriptions',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '/subscriptions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query to retrieve the paging list of subscribe records for a specified API product. The records can be filtered by subscribe status and searched by consumer name keywords. Each record includes the subscribe ID, API product ID and name, API product type, consumer ID and name, and subscribe status.
     *
     * @param request - ListProductSubscriptionsRequest
     *
     * @returns ListProductSubscriptionsResponse
     *
     * @param string                          $productId
     * @param ListProductSubscriptionsRequest $request
     *
     * @return ListProductSubscriptionsResponse
     */
    public function listProductSubscriptions($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductSubscriptionsWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Queries a paginated list of API products under the current tenant. You can specify the product name, product type, product status, product category, and the portal where the product is published in the request parameters. The response includes the product ID, name, description, status, type, documentation, icon, product category, automatic subscription approval status, and the MCP, agent, model, and product capability configurations.
     *
     * @param request - ListProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryIds) {
            @$query['categoryIds'] = $request->categoryIds;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->portalId) {
            @$query['portalId'] = $request->portalId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a paginated list of API products under the current tenant. You can specify the product name, product type, product status, product category, and the portal where the product is published in the request parameters. The response includes the product ID, name, description, status, type, documentation, icon, product category, automatic subscription approval status, and the MCP, agent, model, and product capability configurations.
     *
     * @param request - ListProductsRequest
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paged query to retrieve the list of API products that can be published to a specified HiMarket developer portal. The request accepts the portal ID, API product name, and paging parameters. Each item in the response includes the API product ID, name, and description.
     *
     * @param request - ListPublishableProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishableProductsResponse
     *
     * @param string                         $portalId
     * @param ListPublishableProductsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPublishableProductsResponse
     */
    public function listPublishableProductsWithOptions($portalId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublishableProducts',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/portals/' . Url::percentEncode($portalId) . '/publishable-products',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPublishableProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query to retrieve the list of API products that can be published to a specified HiMarket developer portal. The request accepts the portal ID, API product name, and paging parameters. Each item in the response includes the API product ID, name, and description.
     *
     * @param request - ListPublishableProductsRequest
     *
     * @returns ListPublishableProductsResponse
     *
     * @param string                         $portalId
     * @param ListPublishableProductsRequest $request
     *
     * @return ListPublishableProductsResponse
     */
    public function listPublishableProducts($portalId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPublishableProductsWithOptions($portalId, $request, $headers, $runtime);
    }

    /**
     * Queries risk detection results.
     *
     * @param request - ListRiskCheckResultsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRiskCheckResultsResponse
     *
     * @param string                      $gatewayId
     * @param ListRiskCheckResultsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListRiskCheckResultsResponse
     */
    public function listRiskCheckResultsWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRiskCheckResults',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/risk-check/results',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRiskCheckResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries risk detection results.
     *
     * @param request - ListRiskCheckResultsRequest
     *
     * @returns ListRiskCheckResultsResponse
     *
     * @param string                      $gatewayId
     * @param ListRiskCheckResultsRequest $request
     *
     * @return ListRiskCheckResultsResponse
     */
    public function listRiskCheckResults($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRiskCheckResultsWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Lists secret references.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListSecretReferencesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretReferencesResponse
     *
     * @param string                      $secretId
     * @param ListSecretReferencesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretReferencesResponse
     */
    public function listSecretReferencesWithOptions($secretId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecretReferences',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '/references',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSecretReferencesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists secret references.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListSecretReferencesRequest
     *
     * @returns ListSecretReferencesResponse
     *
     * @param string                      $secretId
     * @param ListSecretReferencesRequest $request
     *
     * @return ListSecretReferencesResponse
     */
    public function listSecretReferences($secretId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecretReferencesWithOptions($secretId, $request, $headers, $runtime);
    }

    /**
     * Lists keys.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListSecretsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecrets',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists keys.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListSecretsRequest
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     *
     * @return ListSecretsResponse
     */
    public function listSecrets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecretsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of services.
     *
     * @param request - ListServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->sourceTypes) {
            @$query['sourceTypes'] = $request->sourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of services.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of sources.
     *
     * @param request - ListSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSourcesResponse
     *
     * @param ListSourcesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSourcesResponse
     */
    public function listSourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of sources.
     *
     * @param request - ListSourcesRequest
     *
     * @returns ListSourcesResponse
     *
     * @param ListSourcesRequest $request
     *
     * @return ListSourcesResponse
     */
    public function listSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of certificates.
     *
     * @param request - ListSslCertsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSslCertsResponse
     *
     * @param ListSslCertsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSslCertsResponse
     */
    public function listSslCertsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNameLike) {
            @$query['certNameLike'] = $request->certNameLike;
        }

        if (null !== $request->domainName) {
            @$query['domainName'] = $request->domainName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSslCerts',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ssl/certs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSslCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of certificates.
     *
     * @param request - ListSslCertsRequest
     *
     * @returns ListSslCertsResponse
     *
     * @param ListSslCertsRequest $request
     *
     * @return ListSslCertsResponse
     */
    public function listSslCerts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSslCertsWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists MCP servers that are pending synchronization.
     *
     * @param request - ListSyncMCPServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSyncMCPServerResponse
     *
     * @param ListSyncMCPServerRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListSyncMCPServerResponse
     */
    public function listSyncMCPServerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->sourceId) {
            @$query['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSyncMCPServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/sync-mcp-server/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSyncMCPServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists MCP servers that are pending synchronization.
     *
     * @param request - ListSyncMCPServerRequest
     *
     * @returns ListSyncMCPServerResponse
     *
     * @param ListSyncMCPServerRequest $request
     *
     * @return ListSyncMCPServerResponse
     */
    public function listSyncMCPServer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSyncMCPServerWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of resource tags.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of resource tags.
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
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the zones available for a cloud-native API gateway in a specified region.
     *
     * @param request - ListZonesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListZonesResponse
     *
     * @param ListZonesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListZonesResponse
     */
    public function listZonesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayEdition) {
            @$query['gatewayEdition'] = $request->gatewayEdition;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListZones',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/zones',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the zones available for a cloud-native API gateway in a specified region.
     *
     * @param request - ListZonesRequest
     *
     * @returns ListZonesResponse
     *
     * @param ListZonesRequest $request
     *
     * @return ListZonesResponse
     */
    public function listZones($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listZonesWithOptions($request, $headers, $runtime);
    }

    /**
     * Logs in to a HiMarket developer account by using a developer username and password, and returns the accessToken and expiresIn fields in the data object of a successful response.
     *
     * @param request - LoginDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoginDeveloperResponse
     *
     * @param LoginDeveloperRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return LoginDeveloperResponse
     */
    public function loginDeveloperWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->username) {
            @$body['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LoginDeveloper',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/developers/login',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return LoginDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Logs in to a HiMarket developer account by using a developer username and password, and returns the accessToken and expiresIn fields in the data object of a successful response.
     *
     * @param request - LoginDeveloperRequest
     *
     * @returns LoginDeveloperResponse
     *
     * @param LoginDeveloperRequest $request
     *
     * @return LoginDeveloperResponse
     */
    public function loginDeveloper($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->loginDeveloperWithOptions($request, $headers, $runtime);
    }

    /**
     * Logs a developer out of a HiMarket developer account. This operation takes no business request parameters. A successful response returns only the requestId, code, and message fields.
     *
     * @param request - LogoutDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LogoutDeveloperResponse
     *
     * @param LogoutDeveloperRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return LogoutDeveloperResponse
     */
    public function logoutDeveloperWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'LogoutDeveloper',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/developers/logout',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return LogoutDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Logs a developer out of a HiMarket developer account. This operation takes no business request parameters. A successful response returns only the requestId, code, and message fields.
     *
     * @param request - LogoutDeveloperRequest
     *
     * @returns LogoutDeveloperResponse
     *
     * @param LogoutDeveloperRequest $request
     *
     * @return LogoutDeveloperResponse
     */
    public function logoutDeveloper($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logoutDeveloperWithOptions($request, $headers, $runtime);
    }

    /**
     * Publishes a specified API product to a specified HiMarket portal. The path parameter specifies the API product ID, and the request body specifies the target portal ID. This operation returns the publication record ID for the publication. You can query the publication record by calling ListProductPublications and unpublish the product by calling UnpublishProduct at /himarket/v1/products/{productId}/publications/{publicationId}.
     *
     * @param request - PublishProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishProductResponse
     *
     * @param string                $productId
     * @param PublishProductRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PublishProductResponse
     */
    public function publishProductWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->portalId) {
            @$body['portalId'] = $request->portalId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishProduct',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '/publications',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a specified API product to a specified HiMarket portal. The path parameter specifies the API product ID, and the request body specifies the target portal ID. This operation returns the publication record ID for the publication. You can query the publication record by calling ListProductPublications and unpublish the product by calling UnpublishProduct at /himarket/v1/products/{productId}/publications/{publicationId}.
     *
     * @param request - PublishProductRequest
     *
     * @returns PublishProductResponse
     *
     * @param string                $productId
     * @param PublishProductRequest $request
     *
     * @return PublishProductResponse
     */
    public function publishProduct($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishProductWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of consumer authorization rules.
     *
     * @param request - QueryConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConsumerAuthorizationRulesResponse
     *
     * @param QueryConsumerAuthorizationRulesRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryConsumerAuthorizationRulesResponse
     */
    public function queryConsumerAuthorizationRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiNameLike) {
            @$query['apiNameLike'] = $request->apiNameLike;
        }

        if (null !== $request->consumerGroupId) {
            @$query['consumerGroupId'] = $request->consumerGroupId;
        }

        if (null !== $request->consumerGroupNameLike) {
            @$query['consumerGroupNameLike'] = $request->consumerGroupNameLike;
        }

        if (null !== $request->consumerId) {
            @$query['consumerId'] = $request->consumerId;
        }

        if (null !== $request->consumerNameLike) {
            @$query['consumerNameLike'] = $request->consumerNameLike;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->groupByApi) {
            @$query['groupByApi'] = $request->groupByApi;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->parentResourceId) {
            @$query['parentResourceId'] = $request->parentResourceId;
        }

        if (null !== $request->principalType) {
            @$query['principalType'] = $request->principalType;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->resourceTypes) {
            @$query['resourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of consumer authorization rules.
     *
     * @param request - QueryConsumerAuthorizationRulesRequest
     *
     * @returns QueryConsumerAuthorizationRulesResponse
     *
     * @param QueryConsumerAuthorizationRulesRequest $request
     *
     * @return QueryConsumerAuthorizationRulesResponse
     */
    public function queryConsumerAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryConsumerAuthorizationRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Refreshes the OAuth code for the plugin-managed repository.
     *
     * @param request - RefreshPluginOAuthCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshPluginOAuthCodeResponse
     *
     * @param RefreshPluginOAuthCodeRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return RefreshPluginOAuthCodeResponse
     */
    public function refreshPluginOAuthCodeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RefreshPluginOAuthCode',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-oauth-codes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RefreshPluginOAuthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes the OAuth code for the plugin-managed repository.
     *
     * @param request - RefreshPluginOAuthCodeRequest
     *
     * @returns RefreshPluginOAuthCodeResponse
     *
     * @param RefreshPluginOAuthCodeRequest $request
     *
     * @return RefreshPluginOAuthCodeResponse
     */
    public function refreshPluginOAuthCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshPluginOAuthCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an API consumer authorization rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveConsumerAuthorizationRuleResponse
     */
    public function removeConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RemoveConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API consumer authorization rule.
     *
     * @returns RemoveConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     *
     * @return RemoveConsumerAuthorizationRuleResponse
     */
    public function removeConsumerAuthorizationRule($consumerAuthorizationRuleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $headers, $runtime);
    }

    /**
     * Resets a quota throttling rule on a gateway.
     *
     * @remarks
     * Resets a quota throttling rule on a gateway. This operation takes effect only on AI gateways of version 2.1.21 or later. Resetting clears the historical usage of consumption subjects on the rule.
     * >
     * >  Recommended call logic:
     * > - 1. Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with conflictHash.
     * > - 2. Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - ResetGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetGatewayQuotaRuleResponse
     *
     * @param string                       $gatewayId
     * @param string                       $ruleId
     * @param ResetGatewayQuotaRuleRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ResetGatewayQuotaRuleResponse
     */
    public function resetGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conflictHash) {
            @$body['conflictHash'] = $request->conflictHash;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->overwrite) {
            @$body['overwrite'] = $request->overwrite;
        }

        if (null !== $request->periodMultiplier) {
            @$body['periodMultiplier'] = $request->periodMultiplier;
        }

        if (null !== $request->periodType) {
            @$body['periodType'] = $request->periodType;
        }

        if (null !== $request->quotaLimit) {
            @$body['quotaLimit'] = $request->quotaLimit;
        }

        if (null !== $request->timezone) {
            @$body['timezone'] = $request->timezone;
        }

        if (null !== $request->windowAlignment) {
            @$body['windowAlignment'] = $request->windowAlignment;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '/reset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResetGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets a quota throttling rule on a gateway.
     *
     * @remarks
     * Resets a quota throttling rule on a gateway. This operation takes effect only on AI gateways of version 2.1.21 or later. Resetting clears the historical usage of consumption subjects on the rule.
     * >
     * >  Recommended call logic:
     * > - 1. Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with conflictHash.
     * > - 2. Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - ResetGatewayQuotaRuleRequest
     *
     * @returns ResetGatewayQuotaRuleResponse
     *
     * @param string                       $gatewayId
     * @param string                       $ruleId
     * @param ResetGatewayQuotaRuleRequest $request
     *
     * @return ResetGatewayQuotaRuleResponse
     */
    public function resetGatewayQuotaRule($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Restarts a gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RestartGatewayResponse
     */
    public function restartGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RestartGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a gateway.
     *
     * @returns RestartGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return RestartGatewayResponse
     */
    public function restartGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Runs a pipeline in a plug-in workspace.
     *
     * @param request - RunPluginPipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunPluginPipelineResponse
     *
     * @param string                   $workspaceId
     * @param RunPluginPipelineRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RunPluginPipelineResponse
     */
    public function runPluginPipelineWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RunPluginPipeline',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-workspaces/' . Url::percentEncode($workspaceId) . '/pipeline-run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunPluginPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a pipeline in a plug-in workspace.
     *
     * @param request - RunPluginPipelineRequest
     *
     * @returns RunPluginPipelineResponse
     *
     * @param string                   $workspaceId
     * @param RunPluginPipelineRequest $request
     *
     * @return RunPluginPipelineResponse
     */
    public function runPluginPipeline($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runPluginPipelineWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Subscribes to an API product on a specified HiMarket consumer. The path parameter specifies the consumer ID, and the request body specifies the ID of the API product to subscribe to. The response returns the subscription ID, API product ID and name, API product type, consumer ID and name, and subscription status of the subscription record.
     *
     * @param request - SubscribeProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubscribeProductResponse
     *
     * @param string                  $consumerId
     * @param SubscribeProductRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SubscribeProductResponse
     */
    public function subscribeProductWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubscribeProduct',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/consumers/' . Url::percentEncode($consumerId) . '/subscriptions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubscribeProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Subscribes to an API product on a specified HiMarket consumer. The path parameter specifies the consumer ID, and the request body specifies the ID of the API product to subscribe to. The response returns the subscription ID, API product ID and name, API product type, consumer ID and name, and subscription status of the subscription record.
     *
     * @param request - SubscribeProductRequest
     *
     * @returns SubscribeProductResponse
     *
     * @param string                  $consumerId
     * @param SubscribeProductRequest $request
     *
     * @return SubscribeProductResponse
     */
    public function subscribeProduct($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->subscribeProductWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Syncs an external MCP server.
     *
     * @param request - SyncMCPServersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncMCPServersResponse
     *
     * @param SyncMCPServersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SyncMCPServersResponse
     */
    public function syncMCPServersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->nacosMcpServers) {
            @$body['nacosMcpServers'] = $request->nacosMcpServers;
        }

        if (null !== $request->namespace) {
            @$body['namespace'] = $request->namespace;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncMCPServers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/sync-mcp-server',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SyncMCPServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Syncs an external MCP server.
     *
     * @param request - SyncMCPServersRequest
     *
     * @returns SyncMCPServersResponse
     *
     * @param SyncMCPServersRequest $request
     *
     * @return SyncMCPServersResponse
     */
    public function syncMCPServers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncMCPServersWithOptions($request, $headers, $runtime);
    }

    /**
     * Tags resources.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tags resources.
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
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Cancels the publishing of an MCP server.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnDeployMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnDeployMcpServerResponse
     */
    public function unDeployMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UnDeployMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '/undeploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnDeployMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the publishing of an MCP server.
     *
     * @returns UnDeployMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return UnDeployMcpServerResponse
     */
    public function unDeployMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unDeployMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Cancels the deployment of an HTTP API.
     *
     * @param request - UndeployHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UndeployHttpApiResponse
     *
     * @param string                 $httpApiId
     * @param UndeployHttpApiRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UndeployHttpApiResponse
     */
    public function undeployHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->operationId) {
            @$body['operationId'] = $request->operationId;
        }

        if (null !== $request->routeId) {
            @$body['routeId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UndeployHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/undeploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UndeployHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the deployment of an HTTP API.
     *
     * @param request - UndeployHttpApiRequest
     *
     * @returns UndeployHttpApiResponse
     *
     * @param string                 $httpApiId
     * @param UndeployHttpApiRequest $request
     *
     * @return UndeployHttpApiResponse
     */
    public function undeployHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->undeployHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Uninstalls a plugin.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallPluginResponse
     *
     * @param string         $pluginId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPluginWithOptions($pluginId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UninstallPlugin',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins/' . Url::percentEncode($pluginId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UninstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls a plugin.
     *
     * @returns UninstallPluginResponse
     *
     * @param string $pluginId
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPlugin($pluginId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallPluginWithOptions($pluginId, $headers, $runtime);
    }

    /**
     * Unpublishes a publication record of an API product based on the API product ID and the publication record ID. Both identifiers are parameters in the /himarket/v1/products/{productId}/publications/{publicationId} path. The publication record is created by the PublishProduct operation and can be queried by the ListProductPublications operation. This operation only manages the publication record and does not delete the API product itself. To delete a product, use DeleteProduct. The response returns only the requestId, code, and message.
     *
     * @param request - UnpublishProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnpublishProductResponse
     *
     * @param string                  $productId
     * @param string                  $publicationId
     * @param UnpublishProductRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UnpublishProductResponse
     */
    public function unpublishProductWithOptions($productId, $publicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UnpublishProduct',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '/publications/' . Url::percentEncode($publicationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnpublishProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unpublishes a publication record of an API product based on the API product ID and the publication record ID. Both identifiers are parameters in the /himarket/v1/products/{productId}/publications/{publicationId} path. The publication record is created by the PublishProduct operation and can be queried by the ListProductPublications operation. This operation only manages the publication record and does not delete the API product itself. To delete a product, use DeleteProduct. The response returns only the requestId, code, and message.
     *
     * @param request - UnpublishProductRequest
     *
     * @returns UnpublishProductResponse
     *
     * @param string                  $productId
     * @param string                  $publicationId
     * @param UnpublishProductRequest $request
     *
     * @return UnpublishProductResponse
     */
    public function unpublishProduct($productId, $publicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unpublishProductWithOptions($productId, $publicationId, $request, $headers, $runtime);
    }

    /**
     * Removes tags from resources.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'TagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['TagKey'] = $request->tagKeyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
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
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates an AI model card.
     *
     * @param request - UpdateAiModelCardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAiModelCardResponse
     *
     * @param string                   $modelCardId
     * @param UpdateAiModelCardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAiModelCardResponse
     */
    public function updateAiModelCardWithOptions($modelCardId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->availablePaths) {
            @$body['availablePaths'] = $request->availablePaths;
        }

        if (null !== $request->credit) {
            @$body['credit'] = $request->credit;
        }

        if (null !== $request->features) {
            @$body['features'] = $request->features;
        }

        if (null !== $request->meta) {
            @$body['meta'] = $request->meta;
        }

        if (null !== $request->modelName) {
            @$body['modelName'] = $request->modelName;
        }

        if (null !== $request->modelProvider) {
            @$body['modelProvider'] = $request->modelProvider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAiModelCard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards/' . Url::percentEncode($modelCardId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAiModelCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an AI model card.
     *
     * @param request - UpdateAiModelCardRequest
     *
     * @returns UpdateAiModelCardResponse
     *
     * @param string                   $modelCardId
     * @param UpdateAiModelCardRequest $request
     *
     * @return UpdateAiModelCardResponse
     */
    public function updateAiModelCard($modelCardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAiModelCardWithOptions($modelCardId, $request, $headers, $runtime);
    }

    /**
     * Updates an AI model provider.
     *
     * @param request - UpdateAiModelProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAiModelProviderResponse
     *
     * @param string                       $modelProviderId
     * @param UpdateAiModelProviderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAiModelProviderResponse
     */
    public function updateAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->serviceIds) {
            @$body['serviceIds'] = $request->serviceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAiModelProvider',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers/' . Url::percentEncode($modelProviderId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAiModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an AI model provider.
     *
     * @param request - UpdateAiModelProviderRequest
     *
     * @returns UpdateAiModelProviderResponse
     *
     * @param string                       $modelProviderId
     * @param UpdateAiModelProviderRequest $request
     *
     * @return UpdateAiModelProviderResponse
     */
    public function updateAiModelProvider($modelProviderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime);
    }

    /**
     * Updates and mounts a policy.
     *
     * @param request - UpdateAndAttachPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAndAttachPolicyResponse
     *
     * @param string                       $policyId
     * @param UpdateAndAttachPolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAndAttachPolicyResponse
     */
    public function updateAndAttachPolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAndAttachPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAndAttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates and mounts a policy.
     *
     * @param request - UpdateAndAttachPolicyRequest
     *
     * @returns UpdateAndAttachPolicyResponse
     *
     * @param string                       $policyId
     * @param UpdateAndAttachPolicyRequest $request
     *
     * @return UpdateAndAttachPolicyResponse
     */
    public function updateAndAttachPolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAndAttachPolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Updates an authorization rule.
     *
     * @param request - UpdateAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthorizationRuleResponse
     *
     * @param string                         $consumerAuthorizationRuleId
     * @param UpdateAuthorizationRuleRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resources) {
            @$body['resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an authorization rule.
     *
     * @param request - UpdateAuthorizationRuleRequest
     *
     * @returns UpdateAuthorizationRuleResponse
     *
     * @param string                         $consumerAuthorizationRuleId
     * @param UpdateAuthorizationRuleRequest $request
     *
     * @return UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRule($consumerAuthorizationRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $request, $headers, $runtime);
    }

    /**
     * Adds or removes API products in bulk under a specified product category. The path parameter specifies the category ID, the action in the request body specifies the operation direction, and productIds specifies the list of API product IDs to process. The response returns only the requestId, code, and message, and does not return item-by-item processing results.
     *
     * @param request - UpdateCategoryProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCategoryProductsResponse
     *
     * @param string                        $categoryId
     * @param UpdateCategoryProductsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCategoryProductsResponse
     */
    public function updateCategoryProductsWithOptions($categoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->productIds) {
            @$body['productIds'] = $request->productIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCategoryProducts',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/product-categories/' . Url::percentEncode($categoryId) . '/products',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCategoryProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or removes API products in bulk under a specified product category. The path parameter specifies the category ID, the action in the request body specifies the operation direction, and productIds specifies the list of API product IDs to process. The response returns only the requestId, code, and message, and does not return item-by-item processing results.
     *
     * @param request - UpdateCategoryProductsRequest
     *
     * @returns UpdateCategoryProductsResponse
     *
     * @param string                        $categoryId
     * @param UpdateCategoryProductsRequest $request
     *
     * @return UpdateCategoryProductsResponse
     */
    public function updateCategoryProducts($categoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCategoryProductsWithOptions($categoryId, $request, $headers, $runtime);
    }

    /**
     * Updates a consumer.
     *
     * @param request - UpdateConsumerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerResponse
     *
     * @param string                $consumerId
     * @param UpdateConsumerRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateConsumerResponse
     */
    public function updateConsumerWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->akSkIdentityConfigs) {
            @$body['akSkIdentityConfigs'] = $request->akSkIdentityConfigs;
        }

        if (null !== $request->apikeyIdentityConfig) {
            @$body['apikeyIdentityConfig'] = $request->apikeyIdentityConfig;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->jwtIdentityConfig) {
            @$body['jwtIdentityConfig'] = $request->jwtIdentityConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a consumer.
     *
     * @param request - UpdateConsumerRequest
     *
     * @returns UpdateConsumerResponse
     *
     * @param string                $consumerId
     * @param UpdateConsumerRequest $request
     *
     * @return UpdateConsumerResponse
     */
    public function updateConsumer($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Updates a consumer authorization rule.
     *
     * @remarks
     * This API operation is replaced by UpdateAuthorizationRule. The new API path is /v1/authorization-rules/{consumerAuthorizationRuleId}. When you call the new API operation, you only need to provide consumerAuthorizationRuleId in the path and the resources array in the request body. The consumerId parameter is no longer required.
     *
     * @param request - UpdateConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param string                                 $consumerAuthorizationRuleId
     * @param UpdateConsumerAuthorizationRuleRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateConsumerAuthorizationRuleResponse
     */
    public function updateConsumerAuthorizationRuleWithOptions($consumerId, $consumerAuthorizationRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationResourceInfos) {
            @$body['authorizationResourceInfos'] = $request->authorizationResourceInfos;
        }

        if (null !== $request->expireMode) {
            @$body['expireMode'] = $request->expireMode;
        }

        if (null !== $request->expireTimestamp) {
            @$body['expireTimestamp'] = $request->expireTimestamp;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a consumer authorization rule.
     *
     * @remarks
     * This API operation is replaced by UpdateAuthorizationRule. The new API path is /v1/authorization-rules/{consumerAuthorizationRuleId}. When you call the new API operation, you only need to provide consumerAuthorizationRuleId in the path and the resources array in the request body. The consumerId parameter is no longer required.
     *
     * @param request - UpdateConsumerAuthorizationRuleRequest
     *
     * @returns UpdateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param string                                 $consumerAuthorizationRuleId
     * @param UpdateConsumerAuthorizationRuleRequest $request
     *
     * @return UpdateConsumerAuthorizationRuleResponse
     */
    public function updateConsumerAuthorizationRule($consumerId, $consumerAuthorizationRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerAuthorizationRuleWithOptions($consumerId, $consumerAuthorizationRuleId, $request, $headers, $runtime);
    }

    /**
     * Updates a consumer group.
     *
     * @param request - UpdateConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerGroupResponse
     *
     * @param string                     $consumerGroupId
     * @param UpdateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a consumer group.
     *
     * @param request - UpdateConsumerGroupRequest
     *
     * @returns UpdateConsumerGroupResponse
     *
     * @param string                     $consumerGroupId
     * @param UpdateConsumerGroupRequest $request
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Updates the status of a HiMarket developer by developer ID. The request body specifies the target status and portal ID. A successful response returns only the requestId, code, and message, and does not return the updated developer information.
     *
     * @param request - UpdateDeveloperStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeveloperStatusResponse
     *
     * @param string                       $developerId
     * @param UpdateDeveloperStatusRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDeveloperStatusResponse
     */
    public function updateDeveloperStatusWithOptions($developerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->portalId) {
            @$body['portalId'] = $request->portalId;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeveloperStatus',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/developers/' . Url::percentEncode($developerId) . '/status',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDeveloperStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the status of a HiMarket developer by developer ID. The request body specifies the target status and portal ID. A successful response returns only the requestId, code, and message, and does not return the updated developer information.
     *
     * @param request - UpdateDeveloperStatusRequest
     *
     * @returns UpdateDeveloperStatusResponse
     *
     * @param string                       $developerId
     * @param UpdateDeveloperStatusRequest $request
     *
     * @return UpdateDeveloperStatusResponse
     */
    public function updateDeveloperStatus($developerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeveloperStatusWithOptions($developerId, $request, $headers, $runtime);
    }

    /**
     * Updates a domain name.
     *
     * @remarks
     * Only sources of the **Container Service** type can update the listener Ingress configuration.
     *
     * @param request - UpdateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainResponse
     *
     * @param string              $domainId
     * @param UpdateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDomainResponse
     */
    public function updateDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->caCertIdentifier) {
            @$body['caCertIdentifier'] = $request->caCertIdentifier;
        }

        if (null !== $request->certIdentifier) {
            @$body['certIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->clientCACert) {
            @$body['clientCACert'] = $request->clientCACert;
        }

        if (null !== $request->domainScope) {
            @$body['domainScope'] = $request->domainScope;
        }

        if (null !== $request->forceHttps) {
            @$body['forceHttps'] = $request->forceHttps;
        }

        if (null !== $request->http2Option) {
            @$body['http2Option'] = $request->http2Option;
        }

        if (null !== $request->mTLSEnabled) {
            @$body['mTLSEnabled'] = $request->mTLSEnabled;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->tlsCipherSuitesConfig) {
            @$body['tlsCipherSuitesConfig'] = $request->tlsCipherSuitesConfig;
        }

        if (null !== $request->tlsMax) {
            @$body['tlsMax'] = $request->tlsMax;
        }

        if (null !== $request->tlsMin) {
            @$body['tlsMin'] = $request->tlsMin;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a domain name.
     *
     * @remarks
     * Only sources of the **Container Service** type can update the listener Ingress configuration.
     *
     * @param request - UpdateDomainRequest
     *
     * @returns UpdateDomainResponse
     *
     * @param string              $domainId
     * @param UpdateDomainRequest $request
     *
     * @return UpdateDomainResponse
     */
    public function updateDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * Updates an environment.
     *
     * @deprecated OpenAPI UpdateEnvironment is deprecated
     *
     * @param request - UpdateEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEnvironmentResponse
     *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Updates an environment.
     *
     * @deprecated OpenAPI UpdateEnvironment is deprecated
     *
     * @param request - UpdateEnvironmentRequest
     *
     * @returns UpdateEnvironmentResponse
     *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * Updates the elastic policy of a gateway.
     *
     * @param request - UpdateGatewayElasticPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayElasticPolicyResponse
     *
     * @param string                            $gatewayId
     * @param UpdateGatewayElasticPolicyRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateGatewayElasticPolicyResponse
     */
    public function updateGatewayElasticPolicyWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticPolicy) {
            @$body['elasticPolicy'] = $request->elasticPolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayElasticPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/elastic-policy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayElasticPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the elastic policy of a gateway.
     *
     * @param request - UpdateGatewayElasticPolicyRequest
     *
     * @returns UpdateGatewayElasticPolicyResponse
     *
     * @param string                            $gatewayId
     * @param UpdateGatewayElasticPolicyRequest $request
     *
     * @return UpdateGatewayElasticPolicyResponse
     */
    public function updateGatewayElasticPolicy($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayElasticPolicyWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Updates the attribute parameters of a gateway.
     *
     * @param request - UpdateGatewayFeatureRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayFeatureResponse
     *
     * @param string                      $gatewayId
     * @param string                      $name
     * @param UpdateGatewayFeatureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateGatewayFeatureResponse
     */
    public function updateGatewayFeatureWithOptions($gatewayId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->value) {
            @$body['value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayFeature',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/gateway-features/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attribute parameters of a gateway.
     *
     * @param request - UpdateGatewayFeatureRequest
     *
     * @returns UpdateGatewayFeatureResponse
     *
     * @param string                      $gatewayId
     * @param string                      $name
     * @param UpdateGatewayFeatureRequest $request
     *
     * @return UpdateGatewayFeatureResponse
     */
    public function updateGatewayFeature($gatewayId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayFeatureWithOptions($gatewayId, $name, $request, $headers, $runtime);
    }

    /**
     * Updates a Gateway Load Balancer (GWLB).
     *
     * @param request - UpdateGatewayLoadBalancerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayLoadBalancerResponse
     *
     * @param string                           $gatewayId
     * @param UpdateGatewayLoadBalancerRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateGatewayLoadBalancerResponse
     */
    public function updateGatewayLoadBalancerWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->loadBalancerDTO) {
            @$body['loadBalancerDTO'] = $request->loadBalancerDTO;
        }

        if (null !== $request->option) {
            @$body['option'] = $request->option;
        }

        if (null !== $request->ports) {
            @$body['ports'] = $request->ports;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayLoadBalancer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/update-load-balancer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a Gateway Load Balancer (GWLB).
     *
     * @param request - UpdateGatewayLoadBalancerRequest
     *
     * @returns UpdateGatewayLoadBalancerResponse
     *
     * @param string                           $gatewayId
     * @param UpdateGatewayLoadBalancerRequest $request
     *
     * @return UpdateGatewayLoadBalancerResponse
     */
    public function updateGatewayLoadBalancer($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayLoadBalancerWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Modifies the O&M window of a gateway.
     *
     * @remarks
     * Modifies the O&M time window of a gateway. This feature is supported only by specific gateway types. If the current gateway does not support modifying the O&M time window, the API returns 409 Conflict.GatewayNotSupportAutoMaintenance.
     *
     * @param request - UpdateGatewayMaintenancePeriodRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayMaintenancePeriodResponse
     *
     * @param string                                $gatewayId
     * @param UpdateGatewayMaintenancePeriodRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateGatewayMaintenancePeriodResponse
     */
    public function updateGatewayMaintenancePeriodWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maintenancePeriod) {
            @$body['maintenancePeriod'] = $request->maintenancePeriod;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayMaintenancePeriod',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/maintenance-period',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayMaintenancePeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the O&M window of a gateway.
     *
     * @remarks
     * Modifies the O&M time window of a gateway. This feature is supported only by specific gateway types. If the current gateway does not support modifying the O&M time window, the API returns 409 Conflict.GatewayNotSupportAutoMaintenance.
     *
     * @param request - UpdateGatewayMaintenancePeriodRequest
     *
     * @returns UpdateGatewayMaintenancePeriodResponse
     *
     * @param string                                $gatewayId
     * @param UpdateGatewayMaintenancePeriodRequest $request
     *
     * @return UpdateGatewayMaintenancePeriodResponse
     */
    public function updateGatewayMaintenancePeriod($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayMaintenancePeriodWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Modifies the name of a gateway.
     *
     * @deprecated OpenAPI UpdateGatewayName is deprecated
     *
     * @param request - UpdateGatewayNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayNameResponse
     *
     * @param string                   $gatewayId
     * @param UpdateGatewayNameRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayNameWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayName',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/name',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Modifies the name of a gateway.
     *
     * @deprecated OpenAPI UpdateGatewayName is deprecated
     *
     * @param request - UpdateGatewayNameRequest
     *
     * @returns UpdateGatewayNameResponse
     *
     * @param string                   $gatewayId
     * @param UpdateGatewayNameRequest $request
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayName($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayNameWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Edits a quota throttling rule on a gateway.
     *
     * @remarks
     * Edits a quota rule on a gateway. This operation takes effect only on AI gateways running version 2.1.21 or later. Editing a rule preserves the historical usage of consumer subjects bound to the rule.
     * >  Recommended call logic:
     * > - Step 1: Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with a conflictHash value.
     * > - Step 2: Confirm and submit the request.
     * > - - No conflict: Set dryRun to false and overwrite to false.
     * > - - Conflict exists and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - UpdateGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayQuotaRuleResponse
     *
     * @param string                        $gatewayId
     * @param string                        $ruleId
     * @param UpdateGatewayQuotaRuleRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGatewayQuotaRuleResponse
     */
    public function updateGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addIds) {
            @$body['addIds'] = $request->addIds;
        }

        if (null !== $request->conflictHash) {
            @$body['conflictHash'] = $request->conflictHash;
        }

        if (null !== $request->consumerGroupIds) {
            @$body['consumerGroupIds'] = $request->consumerGroupIds;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->overwrite) {
            @$body['overwrite'] = $request->overwrite;
        }

        if (null !== $request->quotaLimit) {
            @$body['quotaLimit'] = $request->quotaLimit;
        }

        if (null !== $request->removeIds) {
            @$body['removeIds'] = $request->removeIds;
        }

        if (null !== $request->ruleName) {
            @$body['ruleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edits a quota throttling rule on a gateway.
     *
     * @remarks
     * Edits a quota rule on a gateway. This operation takes effect only on AI gateways running version 2.1.21 or later. Editing a rule preserves the historical usage of consumer subjects bound to the rule.
     * >  Recommended call logic:
     * > - Step 1: Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with a conflictHash value.
     * > - Step 2: Confirm and submit the request.
     * > - - No conflict: Set dryRun to false and overwrite to false.
     * > - - Conflict exists and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - UpdateGatewayQuotaRuleRequest
     *
     * @returns UpdateGatewayQuotaRuleResponse
     *
     * @param string                        $gatewayId
     * @param string                        $ruleId
     * @param UpdateGatewayQuotaRuleRequest $request
     *
     * @return UpdateGatewayQuotaRuleResponse
     */
    public function updateGatewayQuotaRule($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Enables or disables a quota throttling rule for a gateway.
     *
     * @remarks
     * Enables or disables a quota rule on a gateway. This operation takes effect only on AI gateways with a version later than 2.1.21.
     *
     * @param request - UpdateGatewayQuotaRuleStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayQuotaRuleStatusResponse
     *
     * @param string                              $gatewayId
     * @param string                              $ruleId
     * @param UpdateGatewayQuotaRuleStatusRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateGatewayQuotaRuleStatusResponse
     */
    public function updateGatewayQuotaRuleStatusWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clearHistory) {
            @$body['clearHistory'] = $request->clearHistory;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayQuotaRuleStatus',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '/status',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayQuotaRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a quota throttling rule for a gateway.
     *
     * @remarks
     * Enables or disables a quota rule on a gateway. This operation takes effect only on AI gateways with a version later than 2.1.21.
     *
     * @param request - UpdateGatewayQuotaRuleStatusRequest
     *
     * @returns UpdateGatewayQuotaRuleStatusResponse
     *
     * @param string                              $gatewayId
     * @param string                              $ruleId
     * @param UpdateGatewayQuotaRuleStatusRequest $request
     *
     * @return UpdateGatewayQuotaRuleStatusResponse
     */
    public function updateGatewayQuotaRuleStatus($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayQuotaRuleStatusWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Updates an HTTP API.
     *
     * @param request - UpdateHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiResponse
     *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateHttpApiResponse
     */
    public function updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->agentProtocols) {
            @$body['agentProtocols'] = $request->agentProtocols;
        }

        if (null !== $request->aiProtocols) {
            @$body['aiProtocols'] = $request->aiProtocols;
        }

        if (null !== $request->authConfig) {
            @$body['authConfig'] = $request->authConfig;
        }

        if (null !== $request->basePath) {
            @$body['basePath'] = $request->basePath;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enableAuth) {
            @$body['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->firstByteTimeout) {
            @$body['firstByteTimeout'] = $request->firstByteTimeout;
        }

        if (null !== $request->ingressConfig) {
            @$body['ingressConfig'] = $request->ingressConfig;
        }

        if (null !== $request->onlyChangeConfig) {
            @$body['onlyChangeConfig'] = $request->onlyChangeConfig;
        }

        if (null !== $request->protocols) {
            @$body['protocols'] = $request->protocols;
        }

        if (null !== $request->removeBasePathOnForward) {
            @$body['removeBasePathOnForward'] = $request->removeBasePathOnForward;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an HTTP API.
     *
     * @param request - UpdateHttpApiRequest
     *
     * @returns UpdateHttpApiResponse
     *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request
     *
     * @return UpdateHttpApiResponse
     */
    public function updateHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Updates an API operation.
     *
     * @param request - UpdateHttpApiOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operation) {
            @$body['operation'] = $request->operation;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an API operation.
     *
     * @param request - UpdateHttpApiOperationRequest
     *
     * @returns UpdateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request
     *
     * @return UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperation($httpApiId, $operationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime);
    }

    /**
     * Updates a route of an HTTP API.
     *
     * @param request - UpdateHttpApiRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param string                    $routeId
     * @param UpdateHttpApiRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateHttpApiRouteResponse
     */
    public function updateHttpApiRouteWithOptions($httpApiId, $routeId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpRouteConfig) {
            @$body['mcpRouteConfig'] = $request->mcpRouteConfig;
        }

        if (null !== $request->policyConfigs) {
            @$body['policyConfigs'] = $request->policyConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a route of an HTTP API.
     *
     * @param request - UpdateHttpApiRouteRequest
     *
     * @returns UpdateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param string                    $routeId
     * @param UpdateHttpApiRouteRequest $request
     *
     * @return UpdateHttpApiRouteResponse
     */
    public function updateHttpApiRoute($httpApiId, $routeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiRouteWithOptions($httpApiId, $routeId, $request, $headers, $runtime);
    }

    /**
     * Updates an MCP server.
     *
     * @remarks
     * Only sources of the **Container Service** type can update the Ingress listener configuration.
     *
     * @param request - UpdateMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcpServerResponse
     *
     * @param string                 $mcpServerId
     * @param UpdateMcpServerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMcpServerResponse
     */
    public function updateMcpServerWithOptions($mcpServerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assembledSources) {
            @$body['assembledSources'] = $request->assembledSources;
        }

        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->createFromType) {
            @$body['createFromType'] = $request->createFromType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->exposedUriPath) {
            @$body['exposedUriPath'] = $request->exposedUriPath;
        }

        if (null !== $request->grayMcpServerConfigs) {
            @$body['grayMcpServerConfigs'] = $request->grayMcpServerConfigs;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpServerConfig) {
            @$body['mcpServerConfig'] = $request->mcpServerConfig;
        }

        if (null !== $request->mcpStatisticsEnable) {
            @$body['mcpStatisticsEnable'] = $request->mcpStatisticsEnable;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an MCP server.
     *
     * @remarks
     * Only sources of the **Container Service** type can update the Ingress listener configuration.
     *
     * @param request - UpdateMcpServerRequest
     *
     * @returns UpdateMcpServerResponse
     *
     * @param string                 $mcpServerId
     * @param UpdateMcpServerRequest $request
     *
     * @return UpdateMcpServerResponse
     */
    public function updateMcpServer($mcpServerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMcpServerWithOptions($mcpServerId, $request, $headers, $runtime);
    }

    /**
     * Updates a migration task.
     *
     * @param request - UpdateMigrationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMigrationTaskResponse
     *
     * @param string                     $taskId
     * @param UpdateMigrationTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMigrationTaskResponse
     */
    public function updateMigrationTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterNamespace) {
            @$body['clusterNamespace'] = $request->clusterNamespace;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->serviceName) {
            @$body['serviceName'] = $request->serviceName;
        }

        if (null !== $request->slbId) {
            @$body['slbId'] = $request->slbId;
        }

        if (null !== $request->switchType) {
            @$body['switchType'] = $request->switchType;
        }

        if (null !== $request->target) {
            @$body['target'] = $request->target;
        }

        if (null !== $request->virtualServices) {
            @$body['virtualServices'] = $request->virtualServices;
        }

        if (null !== $request->weight) {
            @$body['weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMigrationTask',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/migration-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a migration task.
     *
     * @param request - UpdateMigrationTaskRequest
     *
     * @returns UpdateMigrationTaskResponse
     *
     * @param string                     $taskId
     * @param UpdateMigrationTaskRequest $request
     *
     * @return UpdateMigrationTaskResponse
     */
    public function updateMigrationTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMigrationTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Changes the network access type of a gateway.
     *
     * @param request - UpdateNetworkAccessRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNetworkAccessResponse
     *
     * @param string                     $gatewayId
     * @param UpdateNetworkAccessRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateNetworkAccessResponse
     */
    public function updateNetworkAccessWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkAccessType) {
            @$query['networkAccessType'] = $request->networkAccessType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNetworkAccess',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/network-type',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateNetworkAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the network access type of a gateway.
     *
     * @param request - UpdateNetworkAccessRequest
     *
     * @returns UpdateNetworkAccessResponse
     *
     * @param string                     $gatewayId
     * @param UpdateNetworkAccessRequest $request
     *
     * @return UpdateNetworkAccessResponse
     */
    public function updateNetworkAccess($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNetworkAccessWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Updates a plugin mount.
     *
     * @param request - UpdatePluginAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePluginAttachmentResponse
     *
     * @param string                        $pluginAttachmentId
     * @param UpdatePluginAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePluginAttachmentResponse
     */
    public function updatePluginAttachmentWithOptions($pluginAttachmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->pluginConfig) {
            @$body['pluginConfig'] = $request->pluginConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a plugin mount.
     *
     * @param request - UpdatePluginAttachmentRequest
     *
     * @returns UpdatePluginAttachmentResponse
     *
     * @param string                        $pluginAttachmentId
     * @param UpdatePluginAttachmentRequest $request
     *
     * @return UpdatePluginAttachmentResponse
     */
    public function updatePluginAttachment($pluginAttachmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePluginAttachmentWithOptions($pluginAttachmentId, $request, $headers, $runtime);
    }

    /**
     * Updates a policy.
     *
     * @param request - UpdatePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyResponse
     *
     * @param string              $policyId
     * @param UpdatePolicyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a policy.
     *
     * @param request - UpdatePolicyRequest
     *
     * @returns UpdatePolicyResponse
     *
     * @param string              $policyId
     * @param UpdatePolicyRequest $request
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Updates the name, description, and portal configurations of a HiMarket developer portal by portal ID. The request body is in JSON format. A successful response returns the ID of the updated portal.
     *
     * @param request - UpdatePortalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePortalResponse
     *
     * @param string              $portalId
     * @param UpdatePortalRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePortalResponse
     */
    public function updatePortalWithOptions($portalId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->portalSettingConfig) {
            @$body['portalSettingConfig'] = $request->portalSettingConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePortal',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/portals/' . Url::percentEncode($portalId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePortalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name, description, and portal configurations of a HiMarket developer portal by portal ID. The request body is in JSON format. A successful response returns the ID of the updated portal.
     *
     * @param request - UpdatePortalRequest
     *
     * @returns UpdatePortalResponse
     *
     * @param string              $portalId
     * @param UpdatePortalRequest $request
     *
     * @return UpdatePortalResponse
     */
    public function updatePortal($portalId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePortalWithOptions($portalId, $request, $headers, $runtime);
    }

    /**
     * Updates the name, description, type, documentation, icon, automatic subscription approval setting, product categories, and capabilities of an API product by API product ID. The request body is in JSON format. A successful response returns only the requestId, code, and message, and does not return the updated product information.
     *
     * @param request - UpdateProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProductResponse
     *
     * @param string               $productId
     * @param UpdateProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->autoApprove) {
            @$body['autoApprove'] = $request->autoApprove;
        }

        if (null !== $request->categories) {
            @$body['categories'] = $request->categories;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->document) {
            @$body['document'] = $request->document;
        }

        if (null !== $request->feature) {
            @$body['feature'] = $request->feature;
        }

        if (null !== $request->icon) {
            @$body['icon'] = $request->icon;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProduct',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/products/' . Url::percentEncode($productId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name, description, type, documentation, icon, automatic subscription approval setting, product categories, and capabilities of an API product by API product ID. The request body is in JSON format. A successful response returns only the requestId, code, and message, and does not return the updated product information.
     *
     * @param request - UpdateProductRequest
     *
     * @returns UpdateProductResponse
     *
     * @param string               $productId
     * @param UpdateProductRequest $request
     *
     * @return UpdateProductResponse
     */
    public function updateProduct($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * Updates the name, description, and icon of a product category by category ID. The request body is in JSON format. The response returns only the request ID, response status code, and response message.
     *
     * @param request - UpdateProductCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProductCategoryResponse
     *
     * @param string                       $categoryId
     * @param UpdateProductCategoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateProductCategoryResponse
     */
    public function updateProductCategoryWithOptions($categoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->icon) {
            @$body['icon'] = $request->icon;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProductCategory',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/himarket/v1/product-categories/' . Url::percentEncode($categoryId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProductCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name, description, and icon of a product category by category ID. The request body is in JSON format. The response returns only the request ID, response status code, and response message.
     *
     * @param request - UpdateProductCategoryRequest
     *
     * @returns UpdateProductCategoryResponse
     *
     * @param string                       $categoryId
     * @param UpdateProductCategoryRequest $request
     *
     * @return UpdateProductCategoryResponse
     */
    public function updateProductCategory($categoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductCategoryWithOptions($categoryId, $request, $headers, $runtime);
    }

    /**
     * Updates the notification configuration for risk items.
     *
     * @param request - UpdateRiskNotificationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRiskNotificationResponse
     *
     * @param string                        $gatewayId
     * @param UpdateRiskNotificationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateRiskNotificationResponse
     */
    public function updateRiskNotificationWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isMute) {
            @$body['isMute'] = $request->isMute;
        }

        if (null !== $request->riskCode) {
            @$body['riskCode'] = $request->riskCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRiskNotification',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/risk-check/notifications',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRiskNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the notification configuration for risk items.
     *
     * @param request - UpdateRiskNotificationRequest
     *
     * @returns UpdateRiskNotificationResponse
     *
     * @param string                        $gatewayId
     * @param UpdateRiskNotificationRequest $request
     *
     * @return UpdateRiskNotificationResponse
     */
    public function updateRiskNotification($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRiskNotificationWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Updates a secret.
     *
     * @remarks
     * Only sources of the **container service** type allow you to update the listener Ingress configuration.
     *
     * @param request - UpdateSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecretResponse
     *
     * @param string              $secretId
     * @param UpdateSecretRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSecretResponse
     */
    public function updateSecretWithOptions($secretId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->secretData) {
            @$body['secretData'] = $request->secretData;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a secret.
     *
     * @remarks
     * Only sources of the **container service** type allow you to update the listener Ingress configuration.
     *
     * @param request - UpdateSecretRequest
     *
     * @returns UpdateSecretResponse
     *
     * @param string              $secretId
     * @param UpdateSecretRequest $request
     *
     * @return UpdateSecretResponse
     */
    public function updateSecret($secretId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSecretWithOptions($secretId, $request, $headers, $runtime);
    }

    /**
     * Updates a service. You can update the health check configuration, DNS domain name, and address configuration of fixed addresses for the service.
     *
     * @param request - UpdateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addresses) {
            @$body['addresses'] = $request->addresses;
        }

        if (null !== $request->agentServiceConfig) {
            @$body['agentServiceConfig'] = $request->agentServiceConfig;
        }

        if (null !== $request->aiServiceConfig) {
            @$body['aiServiceConfig'] = $request->aiServiceConfig;
        }

        if (null !== $request->dnsServers) {
            @$body['dnsServers'] = $request->dnsServers;
        }

        if (null !== $request->healthCheckConfig) {
            @$body['healthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->healthyPanicThreshold) {
            @$body['healthyPanicThreshold'] = $request->healthyPanicThreshold;
        }

        if (null !== $request->modelProviderId) {
            @$body['modelProviderId'] = $request->modelProviderId;
        }

        if (null !== $request->outlierDetectionConfig) {
            @$body['outlierDetectionConfig'] = $request->outlierDetectionConfig;
        }

        if (null !== $request->ports) {
            @$body['ports'] = $request->ports;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a service. You can update the health check configuration, DNS domain name, and address configuration of fixed addresses for the service.
     *
     * @param request - UpdateServiceRequest
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($serviceId, $request, $headers, $runtime);
    }

    /**
     * Updates a service version.
     *
     * @param request - UpdateServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param string                      $name
     * @param UpdateServiceVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersionWithOptions($serviceId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a service version.
     *
     * @param request - UpdateServiceVersionRequest
     *
     * @returns UpdateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param string                      $name
     * @param UpdateServiceVersionRequest $request
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersion($serviceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceVersionWithOptions($serviceId, $name, $request, $headers, $runtime);
    }

    /**
     * Upgrades the gateway version.
     *
     * @param request - UpgradeGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeGatewayResponse
     *
     * @param string                $gatewayId
     * @param UpgradeGatewayRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeGatewayResponse
     */
    public function upgradeGatewayWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the gateway version.
     *
     * @param request - UpgradeGatewayRequest
     *
     * @returns UpgradeGatewayResponse
     *
     * @param string                $gatewayId
     * @param UpgradeGatewayRequest $request
     *
     * @return UpgradeGatewayResponse
     */
    public function upgradeGateway($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeGatewayWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Validates a migration task.
     *
     * @param request - VerifyMigrationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyMigrationTaskResponse
     *
     * @param string                     $taskId
     * @param VerifyMigrationTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return VerifyMigrationTaskResponse
     */
    public function verifyMigrationTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'VerifyMigrationTask',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/migration-tasks/' . Url::percentEncode($taskId) . '/verify',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VerifyMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates a migration task.
     *
     * @param request - VerifyMigrationTaskRequest
     *
     * @returns VerifyMigrationTaskResponse
     *
     * @param string                     $taskId
     * @param VerifyMigrationTaskRequest $request
     *
     * @return VerifyMigrationTaskResponse
     */
    public function verifyMigrationTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyMigrationTaskWithOptions($taskId, $request, $headers, $runtime);
    }
}
