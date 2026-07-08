<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AllocateSupabaseForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AllocateSupabaseForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BatchCheckResourceMeasureRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BatchCheckResourceMeasureResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BindAppDomainRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BindAppDomainResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CheckAppVerifyCodeRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CheckAppVerifyCodeResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CheckResourceMeasureRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CheckResourceMeasureResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CheckUserResourceMeasureRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CheckUserResourceMeasureResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ConfirmAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ConfirmAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CopyAppPluginConfigRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CopyAppPluginConfigResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAIStaffChatRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAIStaffChatResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAIStaffConversationRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAIStaffConversationResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppAssistantAgentRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppAssistantAgentResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppAssistantAgentSsoLoginRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppAssistantAgentSsoLoginResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppChatRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppChatResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceTicketRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceTicketResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppLlmApiKeyForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppLlmApiKeyForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppNotificationSceneRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppNotificationSceneResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppTokenServiceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppTokenServiceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateInspirationRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateInspirationResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateMaterialDirectoryRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateMaterialDirectoryResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppDomainCertificateRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppDomainCertificateResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppDomainRedirectRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppDomainRedirectResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppFileRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppFileResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppInstanceFileRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppInstanceFileResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppNotificationSceneRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppNotificationSceneResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppSupabaseSecretsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppSupabaseSecretsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteMaterialDirectoryRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteMaterialDirectoryResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteMaterialTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteMaterialTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteMaterialTaskShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DescribeAppDomainDnsRecordRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DescribeAppDomainDnsRecordResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DispatchConsoleAPIForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DispatchConsoleAPIForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\EditPluginConfigRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\EditPluginConfigResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ExportMaterialFileRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ExportMaterialFileResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ExportMaterialFileShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAIStaffPreviewUrlRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAIStaffPreviewUrlResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppCodeWorkspaceDetailRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppCodeWorkspaceDetailResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppConversationLockStatusRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppConversationLockStatusResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppConversationRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppConversationResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppDatabaseTableSchemasRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppDatabaseTableSchemasResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppFileContentRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppFileContentResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceEntitlementRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceEntitlementResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceTempShortUrlRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceTempShortUrlResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppPluginConfigRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppPluginConfigResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppPublishStatusRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppPublishStatusResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppRecommendedCommoditiesRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppRecommendedCommoditiesResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppRequirementRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppRequirementResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSandboxPreviewUrlRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSandboxPreviewUrlResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSeoStatusRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSeoStatusResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSeoTrendsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSeoTrendsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSitemapRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSitemapResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSupabaseAuthConfigRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSupabaseAuthConfigResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSupabaseInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSupabaseInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSupabaseSecretsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSupabaseSecretsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppTemplateRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppTemplateResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppTokenServiceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppWorkspaceDirectoryRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppWorkspaceDirectoryResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetDomainInfoForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetDomainInfoForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetIcpFilingInfoForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetIcpFilingInfoForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetLlmProxyConfigForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetLlmProxyConfigForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppAuthUrlRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppAuthUrlResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppBindingForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppBindingForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppBindingRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppBindingResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppBindingShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetOssUploadPolicyRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetOssUploadPolicyResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetTempDownloadUrlRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetTempDownloadUrlResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserAccessTokenForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserAccessTokenForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GrantPromotionOfferForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GrantPromotionOfferForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\IntrospectAppInstanceTicketForPreviewRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\IntrospectAppInstanceTicketForPreviewResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAIStaffChatEventsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAIStaffChatEventsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAIStaffChatMessagesRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAIStaffChatMessagesResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppAssistantAgentsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppAssistantAgentsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppChatMessagesRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppChatMessagesResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppCommoditySpecificationsForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppCommoditySpecificationsV2ForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppCommoditySpecificationsV2ForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppConversationMessagesRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppConversationMessagesResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppConversationsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppConversationsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppDomainRedirectRecordsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppDomainRedirectRecordsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstancesRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstancesResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstancesShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPluginConfigsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPluginConfigsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPluginsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPluginsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPublishHistoryRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPublishHistoryResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppTemplateDictsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppTemplateDictsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppTemplatesRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppTemplatesResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListIsvPaymentPluginConfigsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListIsvPaymentPluginConfigsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListPromotionActivitiesForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListPromotionActivitiesForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListPromotionOfferRecordsForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListPromotionOfferRecordsForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyAppInstanceSpecRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyAppInstanceSpecResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyMaterialDirectoryRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyMaterialDirectoryResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyMaterialFileRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyMaterialFileResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyMaterialFileStatusRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyMaterialFileStatusResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyMaterialFileStatusShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\MoveMaterialDirectoryRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\MoveMaterialDirectoryResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\MoveMaterialFileRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\MoveMaterialFileResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\MoveMaterialFileShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\NotifyAppNotificationForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\NotifyAppNotificationForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OfflineAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OfflineAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OnlineAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OnlineAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppTemplateLikeRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppTemplateLikeResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateSupabaseForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateSupabaseForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\PublishAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\PublishAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\PushResourceMeasureRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\PushResourceMeasureResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryInspirationAccountDetailsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryInspirationAccountDetailsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryInspirationBalanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryInspirationConsumeRecordsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryInspirationConsumeRecordsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialDirectoryTreeRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialDirectoryTreeResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileDetailRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileDetailResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileListRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileListResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileListShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileSummaryInfoRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileSummaryInfoResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileSummaryInfoShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialTaskDetailRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialTaskDetailResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialTaskListRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialTaskListResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialTaskListShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QuerySupabaseAuthConfigsForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QuerySupabaseAuthConfigsForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QuerySupabaseConfigsForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QuerySupabaseConfigsForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QuerySupabaseInstanceInfoForAdminRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QuerySupabaseInstanceInfoForAdminResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ReconnectAppChatRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ReconnectAppChatResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RefreshAppInstanceTicketRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RefreshAppInstanceTicketResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RefundAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RefundAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RenewAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RenewAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RenewAppSandboxRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RenewAppSandboxResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RollbackAppCodeSnapshotRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RollbackAppCodeSnapshotResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RollbackAppInstancePublishRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RollbackAppInstancePublishResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SaveAppRequirementRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SaveAppRequirementResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SaveAppSupabaseSecretsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SaveAppSupabaseSecretsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SetAppDomainCertificateRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SetAppDomainCertificateResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SubmitAppSeoIndexRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SubmitAppSeoIndexResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SubmitMaterialTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SubmitMaterialTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SwitchAppConversationRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SwitchAppConversationResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UnbindAppDomainRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UnbindAppDomainResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppChatMessageRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppChatMessageResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppCodeRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppCodeResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppFileRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppFileResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppInstanceShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppSeoStatusRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppSeoStatusResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppSupabaseAuthConfigRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppSupabaseAuthConfigResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppSupabaseSecretRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateAppSupabaseSecretResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateMiniAppBindingRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateMiniAppBindingResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UploadAppSiteValidationFileRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UploadAppSiteValidationFileResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UploadMaterialFileRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UploadMaterialFileResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class WebsiteBuild extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'public' => 'websitebuild.aliyuncs.com',
            'cn-zhangjiakou' => 'websitebuild.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('websitebuild', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Allocates a Supabase instance for resource allocation.
     *
     * @remarks
     * Queries the Supabase instance information associated with a resource.
     *
     * @param request - AllocateSupabaseForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateSupabaseForAdminResponse
     *
     * @param AllocateSupabaseForAdminRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocateSupabaseForAdminResponse
     */
    public function allocateSupabaseForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateSupabaseForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateSupabaseForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Allocates a Supabase instance for resource allocation.
     *
     * @remarks
     * Queries the Supabase instance information associated with a resource.
     *
     * @param request - AllocateSupabaseForAdminRequest
     *
     * @returns AllocateSupabaseForAdminResponse
     *
     * @param AllocateSupabaseForAdminRequest $request
     *
     * @return AllocateSupabaseForAdminResponse
     */
    public function allocateSupabaseForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateSupabaseForAdminWithOptions($request, $runtime);
    }

    /**
     * Checks resource usage in batches.
     *
     * @remarks
     * The Supabase instance information corresponding to the operated resources.
     *
     * @param request - BatchCheckResourceMeasureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCheckResourceMeasureResponse
     *
     * @param BatchCheckResourceMeasureRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchCheckResourceMeasureResponse
     */
    public function batchCheckResourceMeasureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->belongId) {
            @$query['BelongId'] = $request->belongId;
        }

        if (null !== $request->belongIdType) {
            @$query['BelongIdType'] = $request->belongIdType;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->espBizId) {
            @$query['EspBizId'] = $request->espBizId;
        }

        if (null !== $request->orderComponentParams) {
            @$query['OrderComponentParams'] = $request->orderComponentParams;
        }

        if (null !== $request->resourceCheckItems) {
            @$query['ResourceCheckItems'] = $request->resourceCheckItems;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchCheckResourceMeasure',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCheckResourceMeasureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks resource usage in batches.
     *
     * @remarks
     * The Supabase instance information corresponding to the operated resources.
     *
     * @param request - BatchCheckResourceMeasureRequest
     *
     * @returns BatchCheckResourceMeasureResponse
     *
     * @param BatchCheckResourceMeasureRequest $request
     *
     * @return BatchCheckResourceMeasureResponse
     */
    public function batchCheckResourceMeasure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCheckResourceMeasureWithOptions($request, $runtime);
    }

    /**
     * Binds a custom domain name to an application and automatically completes DNS resolution verification.
     *
     * @param request - BindAppDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAppDomainResponse
     *
     * @param BindAppDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindAppDomainResponse
     */
    public function bindAppDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAppDomain',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAppDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a custom domain name to an application and automatically completes DNS resolution verification.
     *
     * @param request - BindAppDomainRequest
     *
     * @returns BindAppDomainResponse
     *
     * @param BindAppDomainRequest $request
     *
     * @return BindAppDomainResponse
     */
    public function bindAppDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAppDomainWithOptions($request, $runtime);
    }

    /**
     * Verifies a verification code.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - CheckAppVerifyCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAppVerifyCodeResponse
     *
     * @param CheckAppVerifyCodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckAppVerifyCodeResponse
     */
    public function checkAppVerifyCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckAppVerifyCode',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckAppVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies a verification code.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - CheckAppVerifyCodeRequest
     *
     * @returns CheckAppVerifyCodeResponse
     *
     * @param CheckAppVerifyCodeRequest $request
     *
     * @return CheckAppVerifyCodeResponse
     */
    public function checkAppVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAppVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * Checks resource usage.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to a resource.
     *
     * @param request - CheckResourceMeasureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckResourceMeasureResponse
     *
     * @param CheckResourceMeasureRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckResourceMeasureResponse
     */
    public function checkResourceMeasureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->belongId) {
            @$query['BelongId'] = $request->belongId;
        }

        if (null !== $request->belongIdType) {
            @$query['BelongIdType'] = $request->belongIdType;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->espBizId) {
            @$query['EspBizId'] = $request->espBizId;
        }

        if (null !== $request->orderComponentParams) {
            @$query['OrderComponentParams'] = $request->orderComponentParams;
        }

        if (null !== $request->resourceCode) {
            @$query['ResourceCode'] = $request->resourceCode;
        }

        if (null !== $request->resourceValue) {
            @$query['ResourceValue'] = $request->resourceValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckResourceMeasure',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckResourceMeasureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks resource usage.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to a resource.
     *
     * @param request - CheckResourceMeasureRequest
     *
     * @returns CheckResourceMeasureResponse
     *
     * @param CheckResourceMeasureRequest $request
     *
     * @return CheckResourceMeasureResponse
     */
    public function checkResourceMeasure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResourceMeasureWithOptions($request, $runtime);
    }

    /**
     * Checks user resource metering.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to a resource.
     *
     * @param request - CheckUserResourceMeasureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUserResourceMeasureResponse
     *
     * @param CheckUserResourceMeasureRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckUserResourceMeasureResponse
     */
    public function checkUserResourceMeasureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->belongId) {
            @$query['BelongId'] = $request->belongId;
        }

        if (null !== $request->belongIdType) {
            @$query['BelongIdType'] = $request->belongIdType;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->espBizId) {
            @$query['EspBizId'] = $request->espBizId;
        }

        if (null !== $request->orderComponentParams) {
            @$query['OrderComponentParams'] = $request->orderComponentParams;
        }

        if (null !== $request->resourceCode) {
            @$query['ResourceCode'] = $request->resourceCode;
        }

        if (null !== $request->resourceValue) {
            @$query['ResourceValue'] = $request->resourceValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckUserResourceMeasure',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUserResourceMeasureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks user resource metering.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to a resource.
     *
     * @param request - CheckUserResourceMeasureRequest
     *
     * @returns CheckUserResourceMeasureResponse
     *
     * @param CheckUserResourceMeasureRequest $request
     *
     * @return CheckUserResourceMeasureResponse
     */
    public function checkUserResourceMeasure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserResourceMeasureWithOptions($request, $runtime);
    }

    /**
     * Converts a trial instance to a paid instance.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - ConfirmAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmAppInstanceResponse
     *
     * @param ConfirmAppInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfirmAppInstanceResponse
     */
    public function confirmAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationType) {
            @$query['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deployArea) {
            @$query['DeployArea'] = $request->deployArea;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->trialBizId) {
            @$query['TrialBizId'] = $request->trialBizId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfirmAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfirmAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts a trial instance to a paid instance.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - ConfirmAppInstanceRequest
     *
     * @returns ConfirmAppInstanceResponse
     *
     * @param ConfirmAppInstanceRequest $request
     *
     * @return ConfirmAppInstanceResponse
     */
    public function confirmAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Copies the plug-in configuration.
     *
     * @remarks
     * Retrieves the code generation plug-in configuration information.
     *
     * @param request - CopyAppPluginConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyAppPluginConfigResponse
     *
     * @param CopyAppPluginConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CopyAppPluginConfigResponse
     */
    public function copyAppPluginConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceBizId) {
            @$query['SourceBizId'] = $request->sourceBizId;
        }

        if (null !== $request->targetBizId) {
            @$query['TargetBizId'] = $request->targetBizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyAppPluginConfig',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyAppPluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies the plug-in configuration.
     *
     * @remarks
     * Retrieves the code generation plug-in configuration information.
     *
     * @param request - CopyAppPluginConfigRequest
     *
     * @returns CopyAppPluginConfigResponse
     *
     * @param CopyAppPluginConfigRequest $request
     *
     * @return CopyAppPluginConfigResponse
     */
    public function copyAppPluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyAppPluginConfigWithOptions($request, $runtime);
    }

    /**
     * Asynchronously initiates a conversation with an AI employee.
     *
     * @remarks
     * Initiates a WanXiaoZhi 2.0 AI conversation.
     *
     * @param request - CreateAIStaffChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAIStaffChatResponse
     *
     * @param CreateAIStaffChatRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAIStaffChatResponse
     */
    public function createAIStaffChatWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        if (null !== $request->chatId) {
            @$body['ChatId'] = $request->chatId;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->messages) {
            @$body['Messages'] = $request->messages;
        }

        $bodyFlat = [];
        if (null !== $request->metaData) {
            @$bodyFlat['MetaData'] = $request->metaData;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAIStaffChat',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAIStaffChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously initiates a conversation with an AI employee.
     *
     * @remarks
     * Initiates a WanXiaoZhi 2.0 AI conversation.
     *
     * @param request - CreateAIStaffChatRequest
     *
     * @returns CreateAIStaffChatResponse
     *
     * @param CreateAIStaffChatRequest $request
     *
     * @return CreateAIStaffChatResponse
     */
    public function createAIStaffChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAIStaffChatWithOptions($request, $runtime);
    }

    /**
     * Creates an AI employee session.
     *
     * @remarks
     * Creates an AI session for Wan Xiaozhi 2.0.
     *
     * @param request - CreateAIStaffConversationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAIStaffConversationResponse
     *
     * @param CreateAIStaffConversationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAIStaffConversationResponse
     */
    public function createAIStaffConversationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->text) {
            @$body['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAIStaffConversation',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAIStaffConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AI employee session.
     *
     * @remarks
     * Creates an AI session for Wan Xiaozhi 2.0.
     *
     * @param request - CreateAIStaffConversationRequest
     *
     * @returns CreateAIStaffConversationResponse
     *
     * @param CreateAIStaffConversationRequest $request
     *
     * @return CreateAIStaffConversationResponse
     */
    public function createAIStaffConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAIStaffConversationWithOptions($request, $runtime);
    }

    /**
     * Creates an application assistant agent.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - CreateAppAssistantAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppAssistantAgentResponse
     *
     * @param CreateAppAssistantAgentRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAppAssistantAgentResponse
     */
    public function createAppAssistantAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->platformType) {
            @$query['PlatformType'] = $request->platformType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppAssistantAgent',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppAssistantAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application assistant agent.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - CreateAppAssistantAgentRequest
     *
     * @returns CreateAppAssistantAgentResponse
     *
     * @param CreateAppAssistantAgentRequest $request
     *
     * @return CreateAppAssistantAgentResponse
     */
    public function createAppAssistantAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppAssistantAgentWithOptions($request, $runtime);
    }

    /**
     * Generates an SSO logon-free URL for an application assistant agent.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - CreateAppAssistantAgentSsoLoginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppAssistantAgentSsoLoginResponse
     *
     * @param CreateAppAssistantAgentSsoLoginRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateAppAssistantAgentSsoLoginResponse
     */
    public function createAppAssistantAgentSsoLoginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->platformType) {
            @$query['PlatformType'] = $request->platformType;
        }

        if (null !== $request->targetUrl) {
            @$query['TargetUrl'] = $request->targetUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppAssistantAgentSsoLogin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppAssistantAgentSsoLoginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates an SSO logon-free URL for an application assistant agent.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - CreateAppAssistantAgentSsoLoginRequest
     *
     * @returns CreateAppAssistantAgentSsoLoginResponse
     *
     * @param CreateAppAssistantAgentSsoLoginRequest $request
     *
     * @return CreateAppAssistantAgentSsoLoginResponse
     */
    public function createAppAssistantAgentSsoLogin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppAssistantAgentSsoLoginWithOptions($request, $runtime);
    }

    /**
     * Wan Xiaozhi initiates an AI conversation.
     *
     * @param request - CreateAppChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppChatResponse
     *
     * @param CreateAppChatRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAppChatResponse
     */
    public function createAppChatWithSSE($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->botId) {
            @$body['BotId'] = $request->botId;
        }

        if (null !== $request->chatId) {
            @$body['ChatId'] = $request->chatId;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->messages) {
            @$body['Messages'] = $request->messages;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppChat',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield CreateAppChatResponse::fromMap([
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
     * Wan Xiaozhi initiates an AI conversation.
     *
     * @param request - CreateAppChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppChatResponse
     *
     * @param CreateAppChatRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAppChatResponse
     */
    public function createAppChatWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->botId) {
            @$body['BotId'] = $request->botId;
        }

        if (null !== $request->chatId) {
            @$body['ChatId'] = $request->chatId;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->messages) {
            @$body['Messages'] = $request->messages;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppChat',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);

        return CreateAppChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Wan Xiaozhi initiates an AI conversation.
     *
     * @param request - CreateAppChatRequest
     *
     * @returns CreateAppChatResponse
     *
     * @param CreateAppChatRequest $request
     *
     * @return CreateAppChatResponse
     */
    public function createAppChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppChatWithOptions($request, $runtime);
    }

    /**
     * Creates a website builder application instance.
     *
     * @param tmpReq - CreateAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->applicationType) {
            @$query['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->createAction) {
            @$query['CreateAction'] = $request->createAction;
        }

        if (null !== $request->deployArea) {
            @$query['DeployArea'] = $request->deployArea;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a website builder application instance.
     *
     * @param request - CreateAppInstanceRequest
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $request
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a login-free ticket for a website builder instance.
     *
     * @param request - CreateAppInstanceTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInstanceTicketResponse
     *
     * @param CreateAppInstanceTicketRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAppInstanceTicketResponse
     */
    public function createAppInstanceTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstanceTicket',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInstanceTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a login-free ticket for a website builder instance.
     *
     * @param request - CreateAppInstanceTicketRequest
     *
     * @returns CreateAppInstanceTicketResponse
     *
     * @param CreateAppInstanceTicketRequest $request
     *
     * @return CreateAppInstanceTicketResponse
     */
    public function createAppInstanceTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceTicketWithOptions($request, $runtime);
    }

    /**
     * Create an LLM gateway API key for an application instance.
     *
     * @remarks
     * Obtain the configuration information of the code generation plugin
     *
     * @param request - CreateAppLlmApiKeyForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppLlmApiKeyForPartnerResponse
     *
     * @param CreateAppLlmApiKeyForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateAppLlmApiKeyForPartnerResponse
     */
    public function createAppLlmApiKeyForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->ipWhiteList) {
            @$body['IpWhiteList'] = $request->ipWhiteList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppLlmApiKeyForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppLlmApiKeyForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an LLM gateway API key for an application instance.
     *
     * @remarks
     * Obtain the configuration information of the code generation plugin
     *
     * @param request - CreateAppLlmApiKeyForPartnerRequest
     *
     * @returns CreateAppLlmApiKeyForPartnerResponse
     *
     * @param CreateAppLlmApiKeyForPartnerRequest $request
     *
     * @return CreateAppLlmApiKeyForPartnerResponse
     */
    public function createAppLlmApiKeyForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppLlmApiKeyForPartnerWithOptions($request, $runtime);
    }

    /**
     * Creates a message notification scenario.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - CreateAppNotificationSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppNotificationSceneResponse
     *
     * @param CreateAppNotificationSceneRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAppNotificationSceneResponse
     */
    public function createAppNotificationSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->channelsJson) {
            @$query['ChannelsJson'] = $request->channelsJson;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->emailFieldsJson) {
            @$query['EmailFieldsJson'] = $request->emailFieldsJson;
        }

        if (null !== $request->emailLimitJson) {
            @$query['EmailLimitJson'] = $request->emailLimitJson;
        }

        if (null !== $request->emailRecipientIdsJson) {
            @$query['EmailRecipientIdsJson'] = $request->emailRecipientIdsJson;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->phoneRecipientIdsJson) {
            @$query['PhoneRecipientIdsJson'] = $request->phoneRecipientIdsJson;
        }

        if (null !== $request->smsFieldsJson) {
            @$query['SmsFieldsJson'] = $request->smsFieldsJson;
        }

        if (null !== $request->smsLimitJson) {
            @$query['SmsLimitJson'] = $request->smsLimitJson;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->triggerEventsJson) {
            @$query['TriggerEventsJson'] = $request->triggerEventsJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppNotificationScene',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppNotificationSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a message notification scenario.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - CreateAppNotificationSceneRequest
     *
     * @returns CreateAppNotificationSceneResponse
     *
     * @param CreateAppNotificationSceneRequest $request
     *
     * @return CreateAppNotificationSceneResponse
     */
    public function createAppNotificationScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppNotificationSceneWithOptions($request, $runtime);
    }

    /**
     * Activates the Wanxiaozhi inspiration value service.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - CreateAppTokenServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppTokenServiceResponse
     *
     * @param CreateAppTokenServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAppTokenServiceResponse
     */
    public function createAppTokenServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createAction) {
            @$query['CreateAction'] = $request->createAction;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppTokenService',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppTokenServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates the Wanxiaozhi inspiration value service.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - CreateAppTokenServiceRequest
     *
     * @returns CreateAppTokenServiceResponse
     *
     * @param CreateAppTokenServiceRequest $request
     *
     * @return CreateAppTokenServiceResponse
     */
    public function createAppTokenService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppTokenServiceWithOptions($request, $runtime);
    }

    /**
     * Creates a resource plan.
     *
     * @param request - CreateInspirationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInspirationResponse
     *
     * @param CreateInspirationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateInspirationResponse
     */
    public function createInspirationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amountspec) {
            @$query['Amountspec'] = $request->amountspec;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInspiration',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInspirationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource plan.
     *
     * @param request - CreateInspirationRequest
     *
     * @returns CreateInspirationResponse
     *
     * @param CreateInspirationRequest $request
     *
     * @return CreateInspirationResponse
     */
    public function createInspiration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInspirationWithOptions($request, $runtime);
    }

    /**
     * Submits a task to create a logo.
     *
     * @param request - CreateLogoTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogoTaskResponse
     *
     * @param CreateLogoTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogoTaskResponse
     */
    public function createLogoTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logoVersion) {
            @$query['LogoVersion'] = $request->logoVersion;
        }

        if (null !== $request->negativePrompt) {
            @$query['NegativePrompt'] = $request->negativePrompt;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLogoTask',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLogoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a task to create a logo.
     *
     * @param request - CreateLogoTaskRequest
     *
     * @returns CreateLogoTaskResponse
     *
     * @param CreateLogoTaskRequest $request
     *
     * @return CreateLogoTaskResponse
     */
    public function createLogoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogoTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a subfolder under a parent folder.
     *
     * @param request - CreateMaterialDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMaterialDirectoryResponse
     *
     * @param CreateMaterialDirectoryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateMaterialDirectoryResponse
     */
    public function createMaterialDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parentDirectoryId) {
            @$query['ParentDirectoryId'] = $request->parentDirectoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMaterialDirectory',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMaterialDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a subfolder under a parent folder.
     *
     * @param request - CreateMaterialDirectoryRequest
     *
     * @returns CreateMaterialDirectoryResponse
     *
     * @param CreateMaterialDirectoryRequest $request
     *
     * @return CreateMaterialDirectoryResponse
     */
    public function createMaterialDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMaterialDirectoryWithOptions($request, $runtime);
    }

    /**
     * Deletes and unbinds the SSL certificate that is bound to a website.
     *
     * @param request - DeleteAppDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppDomainCertificateResponse
     *
     * @param DeleteAppDomainCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAppDomainCertificateResponse
     */
    public function deleteAppDomainCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppDomainCertificate',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes and unbinds the SSL certificate that is bound to a website.
     *
     * @param request - DeleteAppDomainCertificateRequest
     *
     * @returns DeleteAppDomainCertificateResponse
     *
     * @param DeleteAppDomainCertificateRequest $request
     *
     * @return DeleteAppDomainCertificateResponse
     */
    public function deleteAppDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * Deletes 301 redirect records bound to a website.
     *
     * @param request - DeleteAppDomainRedirectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppDomainRedirectResponse
     *
     * @param DeleteAppDomainRedirectRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAppDomainRedirectResponse
     */
    public function deleteAppDomainRedirectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppDomainRedirect',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppDomainRedirectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes 301 redirect records bound to a website.
     *
     * @param request - DeleteAppDomainRedirectRequest
     *
     * @returns DeleteAppDomainRedirectResponse
     *
     * @param DeleteAppDomainRedirectRequest $request
     *
     * @return DeleteAppDomainRedirectResponse
     */
    public function deleteAppDomainRedirect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppDomainRedirectWithOptions($request, $runtime);
    }

    /**
     * Deletes a file.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - DeleteAppFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppFileResponse
     *
     * @param DeleteAppFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAppFileResponse
     */
    public function deleteAppFileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->filePath) {
            @$body['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAppFile',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a file.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - DeleteAppFileRequest
     *
     * @returns DeleteAppFileResponse
     *
     * @param DeleteAppFileRequest $request
     *
     * @return DeleteAppFileResponse
     */
    public function deleteAppFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppFileWithOptions($request, $runtime);
    }

    /**
     * Deletes a file.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - DeleteAppInstanceFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppInstanceFileResponse
     *
     * @param DeleteAppInstanceFileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAppInstanceFileResponse
     */
    public function deleteAppInstanceFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppInstanceFile',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInstanceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a file.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - DeleteAppInstanceFileRequest
     *
     * @returns DeleteAppInstanceFileResponse
     *
     * @param DeleteAppInstanceFileRequest $request
     *
     * @return DeleteAppInstanceFileResponse
     */
    public function deleteAppInstanceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstanceFileWithOptions($request, $runtime);
    }

    /**
     * 删除消息通知场景.
     *
     * @remarks
     * 查询应用实例信息
     *
     * @param request - DeleteAppNotificationSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppNotificationSceneResponse
     *
     * @param DeleteAppNotificationSceneRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAppNotificationSceneResponse
     */
    public function deleteAppNotificationSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppNotificationScene',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppNotificationSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除消息通知场景.
     *
     * @remarks
     * 查询应用实例信息
     *
     * @param request - DeleteAppNotificationSceneRequest
     *
     * @returns DeleteAppNotificationSceneResponse
     *
     * @param DeleteAppNotificationSceneRequest $request
     *
     * @return DeleteAppNotificationSceneResponse
     */
    public function deleteAppNotificationScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppNotificationSceneWithOptions($request, $runtime);
    }

    /**
     * Deletes a Supabase key.
     *
     * @remarks
     * The Supabase instance information corresponding to the operated resource.
     *
     * @param request - DeleteAppSupabaseSecretsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppSupabaseSecretsResponse
     *
     * @param DeleteAppSupabaseSecretsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAppSupabaseSecretsResponse
     */
    public function deleteAppSupabaseSecretsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->keysJson) {
            @$query['KeysJson'] = $request->keysJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppSupabaseSecrets',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppSupabaseSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Supabase key.
     *
     * @remarks
     * The Supabase instance information corresponding to the operated resource.
     *
     * @param request - DeleteAppSupabaseSecretsRequest
     *
     * @returns DeleteAppSupabaseSecretsResponse
     *
     * @param DeleteAppSupabaseSecretsRequest $request
     *
     * @return DeleteAppSupabaseSecretsResponse
     */
    public function deleteAppSupabaseSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppSupabaseSecretsWithOptions($request, $runtime);
    }

    /**
     * Deletes a material folder.
     *
     * @param request - DeleteMaterialDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMaterialDirectoryResponse
     *
     * @param DeleteMaterialDirectoryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteMaterialDirectoryResponse
     */
    public function deleteMaterialDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMaterialDirectory',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMaterialDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a material folder.
     *
     * @param request - DeleteMaterialDirectoryRequest
     *
     * @returns DeleteMaterialDirectoryResponse
     *
     * @param DeleteMaterialDirectoryRequest $request
     *
     * @return DeleteMaterialDirectoryResponse
     */
    public function deleteMaterialDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialDirectoryWithOptions($request, $runtime);
    }

    /**
     * Deletes a material generation task.
     *
     * @param tmpReq - DeleteMaterialTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMaterialTaskResponse
     *
     * @param DeleteMaterialTaskRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMaterialTaskResponse
     */
    public function deleteMaterialTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteMaterialTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIds) {
            $request->taskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }

        $query = [];
        if (null !== $request->taskIdsShrink) {
            @$query['TaskIds'] = $request->taskIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMaterialTask',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMaterialTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a material generation task.
     *
     * @param request - DeleteMaterialTaskRequest
     *
     * @returns DeleteMaterialTaskResponse
     *
     * @param DeleteMaterialTaskRequest $request
     *
     * @return DeleteMaterialTaskResponse
     */
    public function deleteMaterialTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialTaskWithOptions($request, $runtime);
    }

    /**
     * Query website DNS resolution records. Supports CNAME resolution and verification resolution queries.
     *
     * @param request - DescribeAppDomainDnsRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppDomainDnsRecordResponse
     *
     * @param DescribeAppDomainDnsRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAppDomainDnsRecordResponse
     */
    public function describeAppDomainDnsRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->purpose) {
            @$query['Purpose'] = $request->purpose;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppDomainDnsRecord',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppDomainDnsRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query website DNS resolution records. Supports CNAME resolution and verification resolution queries.
     *
     * @param request - DescribeAppDomainDnsRecordRequest
     *
     * @returns DescribeAppDomainDnsRecordResponse
     *
     * @param DescribeAppDomainDnsRecordRequest $request
     *
     * @return DescribeAppDomainDnsRecordResponse
     */
    public function describeAppDomainDnsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppDomainDnsRecordWithOptions($request, $runtime);
    }

    /**
     * Calls a general-purpose API operation.
     *
     * @param request - DispatchConsoleAPIForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DispatchConsoleAPIForPartnerResponse
     *
     * @param DispatchConsoleAPIForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DispatchConsoleAPIForPartnerResponse
     */
    public function dispatchConsoleAPIForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->liveToken) {
            @$query['LiveToken'] = $request->liveToken;
        }

        if (null !== $request->operation) {
            @$query['Operation'] = $request->operation;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->siteHost) {
            @$query['SiteHost'] = $request->siteHost;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DispatchConsoleAPIForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DispatchConsoleAPIForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls a general-purpose API operation.
     *
     * @param request - DispatchConsoleAPIForPartnerRequest
     *
     * @returns DispatchConsoleAPIForPartnerResponse
     *
     * @param DispatchConsoleAPIForPartnerRequest $request
     *
     * @return DispatchConsoleAPIForPartnerResponse
     */
    public function dispatchConsoleAPIForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dispatchConsoleAPIForPartnerWithOptions($request, $runtime);
    }

    /**
     * Edits a plug-in configuration.
     *
     * @param request - EditPluginConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditPluginConfigResponse
     *
     * @param EditPluginConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EditPluginConfigResponse
     */
    public function editPluginConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->pluginConfig) {
            @$query['PluginConfig'] = $request->pluginConfig;
        }

        if (null !== $request->pluginDesc) {
            @$query['PluginDesc'] = $request->pluginDesc;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->pluginName) {
            @$query['PluginName'] = $request->pluginName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditPluginConfig',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditPluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edits a plug-in configuration.
     *
     * @param request - EditPluginConfigRequest
     *
     * @returns EditPluginConfigResponse
     *
     * @param EditPluginConfigRequest $request
     *
     * @return EditPluginConfigResponse
     */
    public function editPluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editPluginConfigWithOptions($request, $runtime);
    }

    /**
     * Exports a material file.
     *
     * @param tmpReq - ExportMaterialFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportMaterialFileResponse
     *
     * @param ExportMaterialFileRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ExportMaterialFileResponse
     */
    public function exportMaterialFileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportMaterialFileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileIds) {
            $request->fileIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileIds, 'FileIds', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->fileIdsShrink) {
            @$query['FileIds'] = $request->fileIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportMaterialFile',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportMaterialFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports a material file.
     *
     * @param request - ExportMaterialFileRequest
     *
     * @returns ExportMaterialFileResponse
     *
     * @param ExportMaterialFileRequest $request
     *
     * @return ExportMaterialFileResponse
     */
    public function exportMaterialFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportMaterialFileWithOptions($request, $runtime);
    }

    /**
     * WanXiaoZhi 2.0 - Obtain Site Preview URL.
     *
     * @remarks
     * WanXiaoZhi 2.0 - Obtain Site Preview URL
     *
     * @param request - GetAIStaffPreviewUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAIStaffPreviewUrlResponse
     *
     * @param GetAIStaffPreviewUrlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAIStaffPreviewUrlResponse
     */
    public function getAIStaffPreviewUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->restart) {
            @$body['Restart'] = $request->restart;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAIStaffPreviewUrl',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAIStaffPreviewUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * WanXiaoZhi 2.0 - Obtain Site Preview URL.
     *
     * @remarks
     * WanXiaoZhi 2.0 - Obtain Site Preview URL
     *
     * @param request - GetAIStaffPreviewUrlRequest
     *
     * @returns GetAIStaffPreviewUrlResponse
     *
     * @param GetAIStaffPreviewUrlRequest $request
     *
     * @return GetAIStaffPreviewUrlResponse
     */
    public function getAIStaffPreviewUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIStaffPreviewUrlWithOptions($request, $runtime);
    }

    /**
     * Retrieve code workspace details.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - GetAppCodeWorkspaceDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppCodeWorkspaceDetailResponse
     *
     * @param GetAppCodeWorkspaceDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAppCodeWorkspaceDetailResponse
     */
    public function getAppCodeWorkspaceDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppCodeWorkspaceDetail',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppCodeWorkspaceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve code workspace details.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - GetAppCodeWorkspaceDetailRequest
     *
     * @returns GetAppCodeWorkspaceDetailResponse
     *
     * @param GetAppCodeWorkspaceDetailRequest $request
     *
     * @return GetAppCodeWorkspaceDetailResponse
     */
    public function getAppCodeWorkspaceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppCodeWorkspaceDetailWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a conversation.
     *
     * @remarks
     * Creates an AI conversation through the Wanxiaozhi 2.0 interface.
     *
     * @param request - GetAppConversationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppConversationResponse
     *
     * @param GetAppConversationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAppConversationResponse
     */
    public function getAppConversationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->botId) {
            @$query['BotId'] = $request->botId;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppConversation',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a conversation.
     *
     * @remarks
     * Creates an AI conversation through the Wanxiaozhi 2.0 interface.
     *
     * @param request - GetAppConversationRequest
     *
     * @returns GetAppConversationResponse
     *
     * @param GetAppConversationRequest $request
     *
     * @return GetAppConversationResponse
     */
    public function getAppConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppConversationWithOptions($request, $runtime);
    }

    /**
     * Retrieves the session lock status.
     *
     * @remarks
     * Creates an AI session through the WanXiaoZhi 2.0 interface.
     *
     * @param request - GetAppConversationLockStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppConversationLockStatusResponse
     *
     * @param GetAppConversationLockStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAppConversationLockStatusResponse
     */
    public function getAppConversationLockStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAppConversationLockStatus',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppConversationLockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the session lock status.
     *
     * @remarks
     * Creates an AI session through the WanXiaoZhi 2.0 interface.
     *
     * @param request - GetAppConversationLockStatusRequest
     *
     * @returns GetAppConversationLockStatusResponse
     *
     * @param GetAppConversationLockStatusRequest $request
     *
     * @return GetAppConversationLockStatusResponse
     */
    public function getAppConversationLockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppConversationLockStatusWithOptions($request, $runtime);
    }

    /**
     * 查询数据库表结构.
     *
     * @remarks
     * 查询应用实例信息
     *
     * @param request - GetAppDatabaseTableSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppDatabaseTableSchemasResponse
     *
     * @param GetAppDatabaseTableSchemasRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAppDatabaseTableSchemasResponse
     */
    public function getAppDatabaseTableSchemasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppDatabaseTableSchemas',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppDatabaseTableSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据库表结构.
     *
     * @remarks
     * 查询应用实例信息
     *
     * @param request - GetAppDatabaseTableSchemasRequest
     *
     * @returns GetAppDatabaseTableSchemasResponse
     *
     * @param GetAppDatabaseTableSchemasRequest $request
     *
     * @return GetAppDatabaseTableSchemasResponse
     */
    public function getAppDatabaseTableSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppDatabaseTableSchemasWithOptions($request, $runtime);
    }

    /**
     * Retrieves file content and modification time.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - GetAppFileContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppFileContentResponse
     *
     * @param GetAppFileContentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAppFileContentResponse
     */
    public function getAppFileContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppFileContent',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppFileContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves file content and modification time.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - GetAppFileContentRequest
     *
     * @returns GetAppFileContentResponse
     *
     * @param GetAppFileContentRequest $request
     *
     * @return GetAppFileContentResponse
     */
    public function getAppFileContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppFileContentWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a website builder application instance.
     *
     * @param request - GetAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppInstanceResponse
     *
     * @param GetAppInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAppInstanceResponse
     */
    public function getAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a website builder application instance.
     *
     * @param request - GetAppInstanceRequest
     *
     * @returns GetAppInstanceResponse
     *
     * @param GetAppInstanceRequest $request
     *
     * @return GetAppInstanceResponse
     */
    public function getAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the entitlement information of an application instance.
     *
     * @remarks
     * Queries the entitlement information of an application instance.
     *
     * @param request - GetAppInstanceEntitlementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppInstanceEntitlementResponse
     *
     * @param GetAppInstanceEntitlementRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAppInstanceEntitlementResponse
     */
    public function getAppInstanceEntitlementWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppInstanceEntitlement',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInstanceEntitlementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the entitlement information of an application instance.
     *
     * @remarks
     * Queries the entitlement information of an application instance.
     *
     * @param request - GetAppInstanceEntitlementRequest
     *
     * @returns GetAppInstanceEntitlementResponse
     *
     * @param GetAppInstanceEntitlementRequest $request
     *
     * @return GetAppInstanceEntitlementResponse
     */
    public function getAppInstanceEntitlement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceEntitlementWithOptions($request, $runtime);
    }

    /**
     * Queries application instance information.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - GetAppInstanceForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppInstanceForAdminResponse
     *
     * @param GetAppInstanceForAdminRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAppInstanceForAdminResponse
     */
    public function getAppInstanceForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppInstanceForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInstanceForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries application instance information.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - GetAppInstanceForAdminRequest
     *
     * @returns GetAppInstanceForAdminResponse
     *
     * @param GetAppInstanceForAdminRequest $request
     *
     * @return GetAppInstanceForAdminResponse
     */
    public function getAppInstanceForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceForAdminWithOptions($request, $runtime);
    }

    /**
     * Queries instance details.
     *
     * @remarks
     * Retrieves the configuration information of a code generation plugin.
     *
     * @param request - GetAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppInstanceForPartnerResponse
     *
     * @param GetAppInstanceForPartnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAppInstanceForPartnerResponse
     */
    public function getAppInstanceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instance details.
     *
     * @remarks
     * Retrieves the configuration information of a code generation plugin.
     *
     * @param request - GetAppInstanceForPartnerRequest
     *
     * @returns GetAppInstanceForPartnerResponse
     *
     * @param GetAppInstanceForPartnerRequest $request
     *
     * @return GetAppInstanceForPartnerResponse
     */
    public function getAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * Retrieves a temporary short URL for an application.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - GetAppInstanceTempShortUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppInstanceTempShortUrlResponse
     *
     * @param GetAppInstanceTempShortUrlRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAppInstanceTempShortUrlResponse
     */
    public function getAppInstanceTempShortUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAppInstanceTempShortUrl',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInstanceTempShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a temporary short URL for an application.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - GetAppInstanceTempShortUrlRequest
     *
     * @returns GetAppInstanceTempShortUrlResponse
     *
     * @param GetAppInstanceTempShortUrlRequest $request
     *
     * @return GetAppInstanceTempShortUrlResponse
     */
    public function getAppInstanceTempShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceTempShortUrlWithOptions($request, $runtime);
    }

    /**
     * Retrieves the configuration information of a plugin.
     *
     * @remarks
     * Retrieves the configuration information of a code generation plugin.
     *
     * @param request - GetAppPluginConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppPluginConfigResponse
     *
     * @param GetAppPluginConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAppPluginConfigResponse
     */
    public function getAppPluginConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        if (null !== $request->pluginId) {
            @$body['PluginId'] = $request->pluginId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAppPluginConfig',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppPluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the configuration information of a plugin.
     *
     * @remarks
     * Retrieves the configuration information of a code generation plugin.
     *
     * @param request - GetAppPluginConfigRequest
     *
     * @returns GetAppPluginConfigResponse
     *
     * @param GetAppPluginConfigRequest $request
     *
     * @return GetAppPluginConfigResponse
     */
    public function getAppPluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppPluginConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the publish status.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppPublishStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppPublishStatusResponse
     *
     * @param GetAppPublishStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAppPublishStatusResponse
     */
    public function getAppPublishStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->deployOrderId) {
            @$query['DeployOrderId'] = $request->deployOrderId;
        }

        if (null !== $request->websiteDomain) {
            @$query['WebsiteDomain'] = $request->websiteDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppPublishStatus',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppPublishStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the publish status.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppPublishStatusRequest
     *
     * @returns GetAppPublishStatusResponse
     *
     * @param GetAppPublishStatusRequest $request
     *
     * @return GetAppPublishStatusResponse
     */
    public function getAppPublishStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppPublishStatusWithOptions($request, $runtime);
    }

    /**
     * Queries recommended commodities.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppRecommendedCommoditiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppRecommendedCommoditiesResponse
     *
     * @param GetAppRecommendedCommoditiesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAppRecommendedCommoditiesResponse
     */
    public function getAppRecommendedCommoditiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->resourceConditions) {
            @$query['ResourceConditions'] = $request->resourceConditions;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppRecommendedCommodities',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppRecommendedCommoditiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries recommended commodities.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppRecommendedCommoditiesRequest
     *
     * @returns GetAppRecommendedCommoditiesResponse
     *
     * @param GetAppRecommendedCommoditiesRequest $request
     *
     * @return GetAppRecommendedCommoditiesResponse
     */
    public function getAppRecommendedCommodities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppRecommendedCommoditiesWithOptions($request, $runtime);
    }

    /**
     * Queries requirements.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppRequirementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppRequirementResponse
     *
     * @param GetAppRequirementRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAppRequirementResponse
     */
    public function getAppRequirementWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppRequirement',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppRequirementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries requirements.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppRequirementRequest
     *
     * @returns GetAppRequirementResponse
     *
     * @param GetAppRequirementRequest $request
     *
     * @return GetAppRequirementResponse
     */
    public function getAppRequirement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppRequirementWithOptions($request, $runtime);
    }

    /**
     * Obtain sandbox preview URL.
     *
     * @remarks
     * Wan Xiaozhi 2.0 - Obtain site preview URL
     *
     * @param request - GetAppSandboxPreviewUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppSandboxPreviewUrlResponse
     *
     * @param GetAppSandboxPreviewUrlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAppSandboxPreviewUrlResponse
     */
    public function getAppSandboxPreviewUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->restart) {
            @$body['Restart'] = $request->restart;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAppSandboxPreviewUrl',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppSandboxPreviewUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain sandbox preview URL.
     *
     * @remarks
     * Wan Xiaozhi 2.0 - Obtain site preview URL
     *
     * @param request - GetAppSandboxPreviewUrlRequest
     *
     * @returns GetAppSandboxPreviewUrlResponse
     *
     * @param GetAppSandboxPreviewUrlRequest $request
     *
     * @return GetAppSandboxPreviewUrlResponse
     */
    public function getAppSandboxPreviewUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSandboxPreviewUrlWithOptions($request, $runtime);
    }

    /**
     * Queries the SEO index status.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppSeoStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppSeoStatusResponse
     *
     * @param GetAppSeoStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAppSeoStatusResponse
     */
    public function getAppSeoStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->seType) {
            @$query['SeType'] = $request->seType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppSeoStatus',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppSeoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SEO index status.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppSeoStatusRequest
     *
     * @returns GetAppSeoStatusResponse
     *
     * @param GetAppSeoStatusRequest $request
     *
     * @return GetAppSeoStatusResponse
     */
    public function getAppSeoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSeoStatusWithOptions($request, $runtime);
    }

    /**
     * SEO index chart.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppSeoTrendsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppSeoTrendsResponse
     *
     * @param GetAppSeoTrendsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAppSeoTrendsResponse
     */
    public function getAppSeoTrendsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->seType) {
            @$query['SeType'] = $request->seType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppSeoTrends',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppSeoTrendsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SEO index chart.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppSeoTrendsRequest
     *
     * @returns GetAppSeoTrendsResponse
     *
     * @param GetAppSeoTrendsRequest $request
     *
     * @return GetAppSeoTrendsResponse
     */
    public function getAppSeoTrends($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSeoTrendsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the sitemap.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppSitemapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppSitemapResponse
     *
     * @param GetAppSitemapRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAppSitemapResponse
     */
    public function getAppSitemapWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->seType) {
            @$query['SeType'] = $request->seType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppSitemap',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppSitemapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the sitemap.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - GetAppSitemapRequest
     *
     * @returns GetAppSitemapResponse
     *
     * @param GetAppSitemapRequest $request
     *
     * @return GetAppSitemapResponse
     */
    public function getAppSitemap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSitemapWithOptions($request, $runtime);
    }

    /**
     * Queries the Supabase authentication settings.
     *
     * @remarks
     * Queries the Supabase instance authentication configuration information for a specified resource.
     *
     * @param request - GetAppSupabaseAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppSupabaseAuthConfigResponse
     *
     * @param GetAppSupabaseAuthConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAppSupabaseAuthConfigResponse
     */
    public function getAppSupabaseAuthConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppSupabaseAuthConfig',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppSupabaseAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Supabase authentication settings.
     *
     * @remarks
     * Queries the Supabase instance authentication configuration information for a specified resource.
     *
     * @param request - GetAppSupabaseAuthConfigRequest
     *
     * @returns GetAppSupabaseAuthConfigResponse
     *
     * @param GetAppSupabaseAuthConfigRequest $request
     *
     * @return GetAppSupabaseAuthConfigResponse
     */
    public function getAppSupabaseAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSupabaseAuthConfigWithOptions($request, $runtime);
    }

    /**
     * Obtain Supabase instance information.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - GetAppSupabaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppSupabaseInstanceResponse
     *
     * @param GetAppSupabaseInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAppSupabaseInstanceResponse
     */
    public function getAppSupabaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppSupabaseInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppSupabaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain Supabase instance information.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - GetAppSupabaseInstanceRequest
     *
     * @returns GetAppSupabaseInstanceResponse
     *
     * @param GetAppSupabaseInstanceRequest $request
     *
     * @return GetAppSupabaseInstanceResponse
     */
    public function getAppSupabaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSupabaseInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries Supabase keys.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to the specified resource.
     *
     * @param request - GetAppSupabaseSecretsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppSupabaseSecretsResponse
     *
     * @param GetAppSupabaseSecretsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAppSupabaseSecretsResponse
     */
    public function getAppSupabaseSecretsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppSupabaseSecrets',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppSupabaseSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Supabase keys.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to the specified resource.
     *
     * @param request - GetAppSupabaseSecretsRequest
     *
     * @returns GetAppSupabaseSecretsResponse
     *
     * @param GetAppSupabaseSecretsRequest $request
     *
     * @return GetAppSupabaseSecretsResponse
     */
    public function getAppSupabaseSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSupabaseSecretsWithOptions($request, $runtime);
    }

    /**
     * Query template details.
     *
     * @remarks
     * Obtain the configuration information of the code generation plugin
     *
     * @param request - GetAppTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppTemplateResponse
     *
     * @param GetAppTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAppTemplateResponse
     */
    public function getAppTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppTemplate',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query template details.
     *
     * @remarks
     * Obtain the configuration information of the code generation plugin
     *
     * @param request - GetAppTemplateRequest
     *
     * @returns GetAppTemplateResponse
     *
     * @param GetAppTemplateRequest $request
     *
     * @return GetAppTemplateResponse
     */
    public function getAppTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the Wanxiaozhi inspiration value service.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppTokenServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAppTokenServiceResponse
     */
    public function getAppTokenServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAppTokenService',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppTokenServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Wanxiaozhi inspiration value service.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @returns GetAppTokenServiceResponse
     *
     * @return GetAppTokenServiceResponse
     */
    public function getAppTokenService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppTokenServiceWithOptions($runtime);
    }

    /**
     * Retrieves the directory structure of a workspace.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - GetAppWorkspaceDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppWorkspaceDirectoryResponse
     *
     * @param GetAppWorkspaceDirectoryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAppWorkspaceDirectoryResponse
     */
    public function getAppWorkspaceDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->deep) {
            @$body['Deep'] = $request->deep;
        }

        if (null !== $request->filePath) {
            @$body['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAppWorkspaceDirectory',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppWorkspaceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the directory structure of a workspace.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - GetAppWorkspaceDirectoryRequest
     *
     * @returns GetAppWorkspaceDirectoryResponse
     *
     * @param GetAppWorkspaceDirectoryRequest $request
     *
     * @return GetAppWorkspaceDirectoryResponse
     */
    public function getAppWorkspaceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWorkspaceDirectoryWithOptions($request, $runtime);
    }

    /**
     * Queries a logo creation task.
     *
     * @param request - GetCreateLogoTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCreateLogoTaskResponse
     *
     * @param GetCreateLogoTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCreateLogoTaskResponse
     */
    public function getCreateLogoTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCreateLogoTask',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCreateLogoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a logo creation task.
     *
     * @param request - GetCreateLogoTaskRequest
     *
     * @returns GetCreateLogoTaskResponse
     *
     * @param GetCreateLogoTaskRequest $request
     *
     * @return GetCreateLogoTaskResponse
     */
    public function getCreateLogoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateLogoTaskWithOptions($request, $runtime);
    }

    /**
     * Provides a domain name query API for service providers.
     *
     * @param request - GetDomainInfoForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainInfoForPartnerResponse
     *
     * @param GetDomainInfoForPartnerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDomainInfoForPartnerResponse
     */
    public function getDomainInfoForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomainInfoForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDomainInfoForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a domain name query API for service providers.
     *
     * @param request - GetDomainInfoForPartnerRequest
     *
     * @returns GetDomainInfoForPartnerResponse
     *
     * @param GetDomainInfoForPartnerRequest $request
     *
     * @return GetDomainInfoForPartnerResponse
     */
    public function getDomainInfoForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainInfoForPartnerWithOptions($request, $runtime);
    }

    /**
     * Queries the China Internet Content Provider (ICP) filing information of a domain name.
     *
     * @param request - GetIcpFilingInfoForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIcpFilingInfoForPartnerResponse
     *
     * @param GetIcpFilingInfoForPartnerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetIcpFilingInfoForPartnerResponse
     */
    public function getIcpFilingInfoForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIcpFilingInfoForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIcpFilingInfoForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the China Internet Content Provider (ICP) filing information of a domain name.
     *
     * @param request - GetIcpFilingInfoForPartnerRequest
     *
     * @returns GetIcpFilingInfoForPartnerResponse
     *
     * @param GetIcpFilingInfoForPartnerRequest $request
     *
     * @return GetIcpFilingInfoForPartnerResponse
     */
    public function getIcpFilingInfoForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIcpFilingInfoForPartnerWithOptions($request, $runtime);
    }

    /**
     * Queries the LLM Proxy configuration.
     *
     * @remarks
     * Queries the Supabase instance configuration information corresponding to a resource.
     *
     * @param request - GetLlmProxyConfigForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLlmProxyConfigForAdminResponse
     *
     * @param GetLlmProxyConfigForAdminRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetLlmProxyConfigForAdminResponse
     */
    public function getLlmProxyConfigForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->capability) {
            @$query['Capability'] = $request->capability;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLlmProxyConfigForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLlmProxyConfigForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the LLM Proxy configuration.
     *
     * @remarks
     * Queries the Supabase instance configuration information corresponding to a resource.
     *
     * @param request - GetLlmProxyConfigForAdminRequest
     *
     * @returns GetLlmProxyConfigForAdminResponse
     *
     * @param GetLlmProxyConfigForAdminRequest $request
     *
     * @return GetLlmProxyConfigForAdminResponse
     */
    public function getLlmProxyConfigForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLlmProxyConfigForAdminWithOptions($request, $runtime);
    }

    /**
     * Retrieves the authorization URL for a mini program.
     *
     * @param request - GetMiniAppAuthUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMiniAppAuthUrlResponse
     *
     * @param GetMiniAppAuthUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMiniAppAuthUrlResponse
     */
    public function getMiniAppAuthUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->redirectUri) {
            @$query['RedirectUri'] = $request->redirectUri;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMiniAppAuthUrl',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMiniAppAuthUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the authorization URL for a mini program.
     *
     * @param request - GetMiniAppAuthUrlRequest
     *
     * @returns GetMiniAppAuthUrlResponse
     *
     * @param GetMiniAppAuthUrlRequest $request
     *
     * @return GetMiniAppAuthUrlResponse
     */
    public function getMiniAppAuthUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMiniAppAuthUrlWithOptions($request, $runtime);
    }

    /**
     * Queries the mini programs associated with a site.
     *
     * @remarks
     * Retrieves the configuration information of the QR code generation plug-in.
     *
     * @param tmpReq - GetMiniAppBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMiniAppBindingResponse
     *
     * @param GetMiniAppBindingRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GetMiniAppBindingResponse
     */
    public function getMiniAppBindingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMiniAppBindingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->settingKeys) {
            $request->settingKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->settingKeys, 'SettingKeys', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->settingKeysShrink) {
            @$query['SettingKeys'] = $request->settingKeysShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMiniAppBinding',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMiniAppBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the mini programs associated with a site.
     *
     * @remarks
     * Retrieves the configuration information of the QR code generation plug-in.
     *
     * @param request - GetMiniAppBindingRequest
     *
     * @returns GetMiniAppBindingResponse
     *
     * @param GetMiniAppBindingRequest $request
     *
     * @return GetMiniAppBindingResponse
     */
    public function getMiniAppBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMiniAppBindingWithOptions($request, $runtime);
    }

    /**
     * Performs a conditional query for mini programs attached to an application instance.
     *
     * @param request - GetMiniAppBindingForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMiniAppBindingForAdminResponse
     *
     * @param GetMiniAppBindingForAdminRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetMiniAppBindingForAdminResponse
     */
    public function getMiniAppBindingForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->platformAppid) {
            @$query['PlatformAppid'] = $request->platformAppid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMiniAppBindingForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMiniAppBindingForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a conditional query for mini programs attached to an application instance.
     *
     * @param request - GetMiniAppBindingForAdminRequest
     *
     * @returns GetMiniAppBindingForAdminResponse
     *
     * @param GetMiniAppBindingForAdminRequest $request
     *
     * @return GetMiniAppBindingForAdminResponse
     */
    public function getMiniAppBindingForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMiniAppBindingForAdminWithOptions($request, $runtime);
    }

    /**
     * Generates a file upload policy.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - GetOssUploadPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssUploadPolicyResponse
     *
     * @param GetOssUploadPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOssUploadPolicyResponse
     */
    public function getOssUploadPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->scenario) {
            @$body['Scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOssUploadPolicy',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a file upload policy.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - GetOssUploadPolicyRequest
     *
     * @returns GetOssUploadPolicyResponse
     *
     * @param GetOssUploadPolicyRequest $request
     *
     * @return GetOssUploadPolicyResponse
     */
    public function getOssUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * 获取临时下载地址
     *
     * @remarks
     * 获取生码插件配置信息
     *
     * @param request - GetTempDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTempDownloadUrlResponse
     *
     * @param GetTempDownloadUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTempDownloadUrlResponse
     */
    public function getTempDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ossKey) {
            @$body['OssKey'] = $request->ossKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTempDownloadUrl',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTempDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取临时下载地址
     *
     * @remarks
     * 获取生码插件配置信息
     *
     * @param request - GetTempDownloadUrlRequest
     *
     * @returns GetTempDownloadUrlResponse
     *
     * @param GetTempDownloadUrlRequest $request
     *
     * @return GetTempDownloadUrlResponse
     */
    public function getTempDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTempDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Exchanges a temporary AccessKey pair for an access token.
     *
     * @param request - GetUserAccessTokenForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserAccessTokenForPartnerResponse
     *
     * @param GetUserAccessTokenForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetUserAccessTokenForPartnerResponse
     */
    public function getUserAccessTokenForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteHost) {
            @$query['SiteHost'] = $request->siteHost;
        }

        if (null !== $request->ticket) {
            @$query['Ticket'] = $request->ticket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserAccessTokenForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserAccessTokenForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exchanges a temporary AccessKey pair for an access token.
     *
     * @param request - GetUserAccessTokenForPartnerRequest
     *
     * @returns GetUserAccessTokenForPartnerResponse
     *
     * @param GetUserAccessTokenForPartnerRequest $request
     *
     * @return GetUserAccessTokenForPartnerResponse
     */
    public function getUserAccessTokenForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserAccessTokenForPartnerWithOptions($request, $runtime);
    }

    /**
     * Obtains temporary credentials for a partner to assume a user\\"s service-linked role.
     *
     * @param request - GetUserTmpIdentityForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserTmpIdentityForPartnerResponse
     *
     * @param GetUserTmpIdentityForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetUserTmpIdentityForPartnerResponse
     */
    public function getUserTmpIdentityForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authPurpose) {
            @$query['AuthPurpose'] = $request->authPurpose;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->serviceLinkedRole) {
            @$query['ServiceLinkedRole'] = $request->serviceLinkedRole;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserTmpIdentityForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserTmpIdentityForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains temporary credentials for a partner to assume a user\\"s service-linked role.
     *
     * @param request - GetUserTmpIdentityForPartnerRequest
     *
     * @returns GetUserTmpIdentityForPartnerResponse
     *
     * @param GetUserTmpIdentityForPartnerRequest $request
     *
     * @return GetUserTmpIdentityForPartnerResponse
     */
    public function getUserTmpIdentityForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserTmpIdentityForPartnerWithOptions($request, $runtime);
    }

    /**
     * Distributes promotional benefits from a partner.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - GrantPromotionOfferForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantPromotionOfferForPartnerResponse
     *
     * @param GrantPromotionOfferForPartnerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GrantPromotionOfferForPartnerResponse
     */
    public function grantPromotionOfferForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityCode) {
            @$query['ActivityCode'] = $request->activityCode;
        }

        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->belongId) {
            @$query['BelongId'] = $request->belongId;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->employeeCode) {
            @$query['EmployeeCode'] = $request->employeeCode;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GrantPromotionOfferForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantPromotionOfferForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Distributes promotional benefits from a partner.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - GrantPromotionOfferForPartnerRequest
     *
     * @returns GrantPromotionOfferForPartnerResponse
     *
     * @param GrantPromotionOfferForPartnerRequest $request
     *
     * @return GrantPromotionOfferForPartnerResponse
     */
    public function grantPromotionOfferForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantPromotionOfferForPartnerWithOptions($request, $runtime);
    }

    /**
     * Introspection analysis of免登 accessToken.
     *
     * @param request - IntrospectAppInstanceTicketForPreviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntrospectAppInstanceTicketForPreviewResponse
     *
     * @param IntrospectAppInstanceTicketForPreviewRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return IntrospectAppInstanceTicketForPreviewResponse
     */
    public function introspectAppInstanceTicketForPreviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntrospectAppInstanceTicketForPreview',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IntrospectAppInstanceTicketForPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Introspection analysis of免登 accessToken.
     *
     * @param request - IntrospectAppInstanceTicketForPreviewRequest
     *
     * @returns IntrospectAppInstanceTicketForPreviewResponse
     *
     * @param IntrospectAppInstanceTicketForPreviewRequest $request
     *
     * @return IntrospectAppInstanceTicketForPreviewResponse
     */
    public function introspectAppInstanceTicketForPreview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->introspectAppInstanceTicketForPreviewWithOptions($request, $runtime);
    }

    /**
     * Retrieves incremental SSE events for an AI agent conversation.
     *
     * @remarks
     * Retrieves the streaming output results of an AI conversation.
     *
     * @param request - ListAIStaffChatEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAIStaffChatEventsResponse
     *
     * @param ListAIStaffChatEventsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAIStaffChatEventsResponse
     */
    public function listAIStaffChatEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $body = [];
        if (null !== $request->chatId) {
            @$body['ChatId'] = $request->chatId;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->lastEventId) {
            @$body['LastEventId'] = $request->lastEventId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAIStaffChatEvents',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAIStaffChatEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves incremental SSE events for an AI agent conversation.
     *
     * @remarks
     * Retrieves the streaming output results of an AI conversation.
     *
     * @param request - ListAIStaffChatEventsRequest
     *
     * @returns ListAIStaffChatEventsResponse
     *
     * @param ListAIStaffChatEventsRequest $request
     *
     * @return ListAIStaffChatEventsResponse
     */
    public function listAIStaffChatEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIStaffChatEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the conversation message list of an AI employee by paging.
     *
     * @remarks
     * Queries the AI session history for WanXiaoZhi 2.0.
     *
     * @param request - ListAIStaffChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAIStaffChatMessagesResponse
     *
     * @param ListAIStaffChatMessagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAIStaffChatMessagesResponse
     */
    public function listAIStaffChatMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $body = [];
        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startCreateTime) {
            @$body['StartCreateTime'] = $request->startCreateTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAIStaffChatMessages',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAIStaffChatMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the conversation message list of an AI employee by paging.
     *
     * @remarks
     * Queries the AI session history for WanXiaoZhi 2.0.
     *
     * @param request - ListAIStaffChatMessagesRequest
     *
     * @returns ListAIStaffChatMessagesResponse
     *
     * @param ListAIStaffChatMessagesRequest $request
     *
     * @return ListAIStaffChatMessagesResponse
     */
    public function listAIStaffChatMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIStaffChatMessagesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of application assistant agents.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - ListAppAssistantAgentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppAssistantAgentsResponse
     *
     * @param ListAppAssistantAgentsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAppAssistantAgentsResponse
     */
    public function listAppAssistantAgentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->platformType) {
            @$query['PlatformType'] = $request->platformType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppAssistantAgents',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppAssistantAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of application assistant agents.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - ListAppAssistantAgentsRequest
     *
     * @returns ListAppAssistantAgentsResponse
     *
     * @param ListAppAssistantAgentsRequest $request
     *
     * @return ListAppAssistantAgentsResponse
     */
    public function listAppAssistantAgents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppAssistantAgentsWithOptions($request, $runtime);
    }

    /**
     * Queries the message list of a specified chat.
     *
     * @remarks
     * Wanxiaozhi 2.0 - API for querying AI conversation history.
     *
     * @param request - ListAppChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppChatMessagesResponse
     *
     * @param ListAppChatMessagesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAppChatMessagesResponse
     */
    public function listAppChatMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chatId) {
            @$query['ChatId'] = $request->chatId;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->sectionId) {
            @$query['SectionId'] = $request->sectionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppChatMessages',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppChatMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the message list of a specified chat.
     *
     * @remarks
     * Wanxiaozhi 2.0 - API for querying AI conversation history.
     *
     * @param request - ListAppChatMessagesRequest
     *
     * @returns ListAppChatMessagesResponse
     *
     * @param ListAppChatMessagesRequest $request
     *
     * @return ListAppChatMessagesResponse
     */
    public function listAppChatMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppChatMessagesWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * The product information data.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @deprecated openAPI ListAppCommoditySpecificationsForPartner is deprecated, please use WebsiteBuild::2025-04-29::ListAppCommoditySpecificationsV2ForPartner instead
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppCommoditySpecificationsForPartnerResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListAppCommoditySpecificationsForPartnerResponse
     */
    public function listAppCommoditySpecificationsForPartnerWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListAppCommoditySpecificationsForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppCommoditySpecificationsForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * The product information data.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @deprecated openAPI ListAppCommoditySpecificationsForPartner is deprecated, please use WebsiteBuild::2025-04-29::ListAppCommoditySpecificationsV2ForPartner instead
     *
     * @returns ListAppCommoditySpecificationsForPartnerResponse
     *
     * @return ListAppCommoditySpecificationsForPartnerResponse
     */
    public function listAppCommoditySpecificationsForPartner()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppCommoditySpecificationsForPartnerWithOptions($runtime);
    }

    /**
     * Query Website Build Product Details.
     *
     * @remarks
     * Get QR code plugin configuration information
     *
     * @param request - ListAppCommoditySpecificationsV2ForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppCommoditySpecificationsV2ForPartnerResponse
     *
     * @param ListAppCommoditySpecificationsV2ForPartnerRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return ListAppCommoditySpecificationsV2ForPartnerResponse
     */
    public function listAppCommoditySpecificationsV2ForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppCommoditySpecificationsV2ForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppCommoditySpecificationsV2ForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Website Build Product Details.
     *
     * @remarks
     * Get QR code plugin configuration information
     *
     * @param request - ListAppCommoditySpecificationsV2ForPartnerRequest
     *
     * @returns ListAppCommoditySpecificationsV2ForPartnerResponse
     *
     * @param ListAppCommoditySpecificationsV2ForPartnerRequest $request
     *
     * @return ListAppCommoditySpecificationsV2ForPartnerResponse
     */
    public function listAppCommoditySpecificationsV2ForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppCommoditySpecificationsV2ForPartnerWithOptions($request, $runtime);
    }

    /**
     * Paged query of conversation message list.
     *
     * @remarks
     * Wan Xiaozhi 2.0 - AI session history information query API
     *
     * @param request - ListAppConversationMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppConversationMessagesResponse
     *
     * @param ListAppConversationMessagesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListAppConversationMessagesResponse
     */
    public function listAppConversationMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startCreateTime) {
            @$query['StartCreateTime'] = $request->startCreateTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppConversationMessages',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppConversationMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paged query of conversation message list.
     *
     * @remarks
     * Wan Xiaozhi 2.0 - AI session history information query API
     *
     * @param request - ListAppConversationMessagesRequest
     *
     * @returns ListAppConversationMessagesResponse
     *
     * @param ListAppConversationMessagesRequest $request
     *
     * @return ListAppConversationMessagesResponse
     */
    public function listAppConversationMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppConversationMessagesWithOptions($request, $runtime);
    }

    /**
     * Searches the conversation list.
     *
     * @remarks
     * Creates an AI session by using Wanxiaozhi 2.0.
     *
     * @param request - ListAppConversationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppConversationsResponse
     *
     * @param ListAppConversationsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAppConversationsResponse
     */
    public function listAppConversationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->botId) {
            @$query['BotId'] = $request->botId;
        }

        if (null !== $request->endModifyTime) {
            @$query['EndModifyTime'] = $request->endModifyTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startModifyTime) {
            @$query['StartModifyTime'] = $request->startModifyTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppConversations',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches the conversation list.
     *
     * @remarks
     * Creates an AI session by using Wanxiaozhi 2.0.
     *
     * @param request - ListAppConversationsRequest
     *
     * @returns ListAppConversationsResponse
     *
     * @param ListAppConversationsRequest $request
     *
     * @return ListAppConversationsResponse
     */
    public function listAppConversations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppConversationsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of HTTP 301 status code redirects for a website.
     *
     * @param request - ListAppDomainRedirectRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppDomainRedirectRecordsResponse
     *
     * @param ListAppDomainRedirectRecordsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAppDomainRedirectRecordsResponse
     */
    public function listAppDomainRedirectRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppDomainRedirectRecords',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppDomainRedirectRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of HTTP 301 status code redirects for a website.
     *
     * @param request - ListAppDomainRedirectRecordsRequest
     *
     * @returns ListAppDomainRedirectRecordsResponse
     *
     * @param ListAppDomainRedirectRecordsRequest $request
     *
     * @return ListAppDomainRedirectRecordsResponse
     */
    public function listAppDomainRedirectRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppDomainRedirectRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of domain names bound to a website.
     *
     * @param request - ListAppInstanceDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppInstanceDomainsResponse
     *
     * @param ListAppInstanceDomainsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAppInstanceDomainsResponse
     */
    public function listAppInstanceDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainKeyword) {
            @$query['DomainKeyword'] = $request->domainKeyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppInstanceDomains',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstanceDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of domain names bound to a website.
     *
     * @param request - ListAppInstanceDomainsRequest
     *
     * @returns ListAppInstanceDomainsResponse
     *
     * @param ListAppInstanceDomainsRequest $request
     *
     * @return ListAppInstanceDomainsResponse
     */
    public function listAppInstanceDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of application instances.
     *
     * @param tmpReq - ListAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppInstancesResponse
     *
     * @param ListAppInstancesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppInstancesResponse
     */
    public function listAppInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAppInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bizIds) {
            $request->bizIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bizIds, 'BizIds', 'json');
        }

        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizIdsShrink) {
            @$query['BizIds'] = $request->bizIdsShrink;
        }

        if (null !== $request->endTimeBegin) {
            @$query['EndTimeBegin'] = $request->endTimeBegin;
        }

        if (null !== $request->endTimeEnd) {
            @$query['EndTimeEnd'] = $request->endTimeEnd;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->statusListShrink) {
            @$query['StatusList'] = $request->statusListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppInstances',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of application instances.
     *
     * @param request - ListAppInstancesRequest
     *
     * @returns ListAppInstancesResponse
     *
     * @param ListAppInstancesRequest $request
     *
     * @return ListAppInstancesResponse
     */
    public function listAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstancesWithOptions($request, $runtime);
    }

    /**
     * Retrieve the list of Code Farmer plugin configurations.
     *
     * @remarks
     * Retrieve the configuration information of the code generation plugin
     *
     * @param request - ListAppPluginConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppPluginConfigsResponse
     *
     * @param ListAppPluginConfigsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAppPluginConfigsResponse
     */
    public function listAppPluginConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppPluginConfigs',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppPluginConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the list of Code Farmer plugin configurations.
     *
     * @remarks
     * Retrieve the configuration information of the code generation plugin
     *
     * @param request - ListAppPluginConfigsRequest
     *
     * @returns ListAppPluginConfigsResponse
     *
     * @param ListAppPluginConfigsRequest $request
     *
     * @return ListAppPluginConfigsResponse
     */
    public function listAppPluginConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppPluginConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of code generation plug-ins.
     *
     * @remarks
     * Retrieves the configuration information of code generation plug-ins.
     *
     * @param request - ListAppPluginsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppPluginsResponse
     *
     * @param ListAppPluginsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAppPluginsResponse
     */
    public function listAppPluginsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppPlugins',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of code generation plug-ins.
     *
     * @remarks
     * Retrieves the configuration information of code generation plug-ins.
     *
     * @param request - ListAppPluginsRequest
     *
     * @returns ListAppPluginsResponse
     *
     * @param ListAppPluginsRequest $request
     *
     * @return ListAppPluginsResponse
     */
    public function listAppPlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppPluginsWithOptions($request, $runtime);
    }

    /**
     * Query publish history.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - ListAppPublishHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppPublishHistoryResponse
     *
     * @param ListAppPublishHistoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAppPublishHistoryResponse
     */
    public function listAppPublishHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->deployChannel) {
            @$query['DeployChannel'] = $request->deployChannel;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->publishEnv) {
            @$query['PublishEnv'] = $request->publishEnv;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->subchannel) {
            @$query['Subchannel'] = $request->subchannel;
        }

        if (null !== $request->websiteDomain) {
            @$query['WebsiteDomain'] = $request->websiteDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppPublishHistory',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppPublishHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query publish history.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - ListAppPublishHistoryRequest
     *
     * @returns ListAppPublishHistoryResponse
     *
     * @param ListAppPublishHistoryRequest $request
     *
     * @return ListAppPublishHistoryResponse
     */
    public function listAppPublishHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppPublishHistoryWithOptions($request, $runtime);
    }

    /**
     * Query dictionary list.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - ListAppTemplateDictsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppTemplateDictsResponse
     *
     * @param ListAppTemplateDictsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAppTemplateDictsResponse
     */
    public function listAppTemplateDictsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dictType) {
            @$query['DictType'] = $request->dictType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppTemplateDicts',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppTemplateDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query dictionary list.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - ListAppTemplateDictsRequest
     *
     * @returns ListAppTemplateDictsResponse
     *
     * @param ListAppTemplateDictsRequest $request
     *
     * @return ListAppTemplateDictsResponse
     */
    public function listAppTemplateDicts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppTemplateDictsWithOptions($request, $runtime);
    }

    /**
     * Query template list.
     *
     * @remarks
     * Obtain barcode generation plugin configuration information
     *
     * @param request - ListAppTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppTemplatesResponse
     *
     * @param ListAppTemplatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppTemplatesResponse
     */
    public function listAppTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->colorScheme) {
            @$query['ColorScheme'] = $request->colorScheme;
        }

        if (null !== $request->industry) {
            @$query['Industry'] = $request->industry;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productVersion) {
            @$query['ProductVersion'] = $request->productVersion;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppTemplates',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query template list.
     *
     * @remarks
     * Obtain barcode generation plugin configuration information
     *
     * @param request - ListAppTemplatesRequest
     *
     * @returns ListAppTemplatesResponse
     *
     * @param ListAppTemplatesRequest $request
     *
     * @return ListAppTemplatesResponse
     */
    public function listAppTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppTemplatesWithOptions($request, $runtime);
    }

    /**
     * Query Alipay ISV plugin configuration.
     *
     * @remarks
     * Obtain barcode generation plugin configuration information
     *
     * @param request - ListIsvPaymentPluginConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIsvPaymentPluginConfigsResponse
     *
     * @param ListIsvPaymentPluginConfigsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListIsvPaymentPluginConfigsResponse
     */
    public function listIsvPaymentPluginConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIsvPaymentPluginConfigs',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIsvPaymentPluginConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Alipay ISV plugin configuration.
     *
     * @remarks
     * Obtain barcode generation plugin configuration information
     *
     * @param request - ListIsvPaymentPluginConfigsRequest
     *
     * @returns ListIsvPaymentPluginConfigsResponse
     *
     * @param ListIsvPaymentPluginConfigsRequest $request
     *
     * @return ListIsvPaymentPluginConfigsResponse
     */
    public function listIsvPaymentPluginConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIsvPaymentPluginConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of partner promotional activities.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - ListPromotionActivitiesForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPromotionActivitiesForPartnerResponse
     *
     * @param ListPromotionActivitiesForPartnerRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListPromotionActivitiesForPartnerResponse
     */
    public function listPromotionActivitiesForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->employeeCode) {
            @$query['EmployeeCode'] = $request->employeeCode;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPromotionActivitiesForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPromotionActivitiesForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of partner promotional activities.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - ListPromotionActivitiesForPartnerRequest
     *
     * @returns ListPromotionActivitiesForPartnerResponse
     *
     * @param ListPromotionActivitiesForPartnerRequest $request
     *
     * @return ListPromotionActivitiesForPartnerResponse
     */
    public function listPromotionActivitiesForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPromotionActivitiesForPartnerWithOptions($request, $runtime);
    }

    /**
     * Queries the benefit issuance records of a partner.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - ListPromotionOfferRecordsForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPromotionOfferRecordsForPartnerResponse
     *
     * @param ListPromotionOfferRecordsForPartnerRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListPromotionOfferRecordsForPartnerResponse
     */
    public function listPromotionOfferRecordsForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityCode) {
            @$query['ActivityCode'] = $request->activityCode;
        }

        if (null !== $request->belongId) {
            @$query['BelongId'] = $request->belongId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPromotionOfferRecordsForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPromotionOfferRecordsForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the benefit issuance records of a partner.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - ListPromotionOfferRecordsForPartnerRequest
     *
     * @returns ListPromotionOfferRecordsForPartnerResponse
     *
     * @param ListPromotionOfferRecordsForPartnerRequest $request
     *
     * @return ListPromotionOfferRecordsForPartnerResponse
     */
    public function listPromotionOfferRecordsForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPromotionOfferRecordsForPartnerWithOptions($request, $runtime);
    }

    /**
     * Modifies the specifications of a website building application instance.
     *
     * @param request - ModifyAppInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppInstanceSpecResponse
     *
     * @param ModifyAppInstanceSpecRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAppInstanceSpecResponse
     */
    public function modifyAppInstanceSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationType) {
            @$query['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deployArea) {
            @$query['DeployArea'] = $request->deployArea;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppInstanceSpec',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the specifications of a website building application instance.
     *
     * @param request - ModifyAppInstanceSpecRequest
     *
     * @returns ModifyAppInstanceSpecResponse
     *
     * @param ModifyAppInstanceSpecRequest $request
     *
     * @return ModifyAppInstanceSpecResponse
     */
    public function modifyAppInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * Modifies a material folder.
     *
     * @param request - ModifyMaterialDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMaterialDirectoryResponse
     *
     * @param ModifyMaterialDirectoryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyMaterialDirectoryResponse
     */
    public function modifyMaterialDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMaterialDirectory',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMaterialDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a material folder.
     *
     * @param request - ModifyMaterialDirectoryRequest
     *
     * @returns ModifyMaterialDirectoryResponse
     *
     * @param ModifyMaterialDirectoryRequest $request
     *
     * @return ModifyMaterialDirectoryResponse
     */
    public function modifyMaterialDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMaterialDirectoryWithOptions($request, $runtime);
    }

    /**
     * Modifies a material file.
     *
     * @param request - ModifyMaterialFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMaterialFileResponse
     *
     * @param ModifyMaterialFileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyMaterialFileResponse
     */
    public function modifyMaterialFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMaterialFile',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMaterialFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a material file.
     *
     * @param request - ModifyMaterialFileRequest
     *
     * @returns ModifyMaterialFileResponse
     *
     * @param ModifyMaterialFileRequest $request
     *
     * @return ModifyMaterialFileResponse
     */
    public function modifyMaterialFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMaterialFileWithOptions($request, $runtime);
    }

    /**
     * Modifies the status of a material file.
     *
     * @param tmpReq - ModifyMaterialFileStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMaterialFileStatusResponse
     *
     * @param ModifyMaterialFileStatusRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyMaterialFileStatusResponse
     */
    public function modifyMaterialFileStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyMaterialFileStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileIds) {
            $request->fileIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileIds, 'FileIds', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->fileIdsShrink) {
            @$query['FileIds'] = $request->fileIdsShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMaterialFileStatus',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMaterialFileStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the status of a material file.
     *
     * @param request - ModifyMaterialFileStatusRequest
     *
     * @returns ModifyMaterialFileStatusResponse
     *
     * @param ModifyMaterialFileStatusRequest $request
     *
     * @return ModifyMaterialFileStatusResponse
     */
    public function modifyMaterialFileStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMaterialFileStatusWithOptions($request, $runtime);
    }

    /**
     * Moves a material file folder.
     *
     * @param request - MoveMaterialDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveMaterialDirectoryResponse
     *
     * @param MoveMaterialDirectoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MoveMaterialDirectoryResponse
     */
    public function moveMaterialDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->parentDirectoryId) {
            @$query['ParentDirectoryId'] = $request->parentDirectoryId;
        }

        if (null !== $request->sortNum) {
            @$query['SortNum'] = $request->sortNum;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveMaterialDirectory',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveMaterialDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a material file folder.
     *
     * @param request - MoveMaterialDirectoryRequest
     *
     * @returns MoveMaterialDirectoryResponse
     *
     * @param MoveMaterialDirectoryRequest $request
     *
     * @return MoveMaterialDirectoryResponse
     */
    public function moveMaterialDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveMaterialDirectoryWithOptions($request, $runtime);
    }

    /**
     * Moves media asset files.
     *
     * @param tmpReq - MoveMaterialFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveMaterialFileResponse
     *
     * @param MoveMaterialFileRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return MoveMaterialFileResponse
     */
    public function moveMaterialFileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new MoveMaterialFileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileIds) {
            $request->fileIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileIds, 'FileIds', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->fileIdsShrink) {
            @$query['FileIds'] = $request->fileIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveMaterialFile',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveMaterialFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves media asset files.
     *
     * @param request - MoveMaterialFileRequest
     *
     * @returns MoveMaterialFileResponse
     *
     * @param MoveMaterialFileRequest $request
     *
     * @return MoveMaterialFileResponse
     */
    public function moveMaterialFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveMaterialFileWithOptions($request, $runtime);
    }

    /**
     * Triggers a data change notification (for admin).
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - NotifyAppNotificationForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NotifyAppNotificationForAdminResponse
     *
     * @param NotifyAppNotificationForAdminRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return NotifyAppNotificationForAdminResponse
     */
    public function notifyAppNotificationForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        if (null !== $request->payload) {
            @$query['Payload'] = $request->payload;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'NotifyAppNotificationForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NotifyAppNotificationForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers a data change notification (for admin).
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - NotifyAppNotificationForAdminRequest
     *
     * @returns NotifyAppNotificationForAdminResponse
     *
     * @param NotifyAppNotificationForAdminRequest $request
     *
     * @return NotifyAppNotificationForAdminResponse
     */
    public function notifyAppNotificationForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyAppNotificationForAdminWithOptions($request, $runtime);
    }

    /**
     * Delists a website: switches the CDN back-to-origin configuration for all domain names under the site to an offline page.
     *
     * @param request - OfflineAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineAppInstanceResponse
     *
     * @param OfflineAppInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OfflineAppInstanceResponse
     */
    public function offlineAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OfflineAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OfflineAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delists a website: switches the CDN back-to-origin configuration for all domain names under the site to an offline page.
     *
     * @param request - OfflineAppInstanceRequest
     *
     * @returns OfflineAppInstanceResponse
     *
     * @param OfflineAppInstanceRequest $request
     *
     * @return OfflineAppInstanceResponse
     */
    public function offlineAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Resumes a website by restoring the CDN back-to-origin rewrite rules to the normal path for all domain names under the site.
     *
     * @param request - OnlineAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OnlineAppInstanceResponse
     *
     * @param OnlineAppInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OnlineAppInstanceResponse
     */
    public function onlineAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OnlineAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OnlineAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a website by restoring the CDN back-to-origin rewrite rules to the normal path for all domain names under the site.
     *
     * @param request - OnlineAppInstanceRequest
     *
     * @returns OnlineAppInstanceResponse
     *
     * @param OnlineAppInstanceRequest $request
     *
     * @return OnlineAppInstanceResponse
     */
    public function onlineAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onlineAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Operates an application by a partner.
     *
     * @param request - OperateAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAppInstanceForPartnerResponse
     *
     * @param OperateAppInstanceForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OperateAppInstanceForPartnerResponse
     */
    public function operateAppInstanceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->operateEvent) {
            @$query['OperateEvent'] = $request->operateEvent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Operates an application by a partner.
     *
     * @param request - OperateAppInstanceForPartnerRequest
     *
     * @returns OperateAppInstanceForPartnerResponse
     *
     * @param OperateAppInstanceForPartnerRequest $request
     *
     * @return OperateAppInstanceForPartnerResponse
     */
    public function operateAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * Operates application services on behalf of a partner.
     *
     * @param request - OperateAppServiceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAppServiceForPartnerResponse
     *
     * @param OperateAppServiceForPartnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return OperateAppServiceForPartnerResponse
     */
    public function operateAppServiceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->operateEvent) {
            @$query['OperateEvent'] = $request->operateEvent;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateAppServiceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAppServiceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Operates application services on behalf of a partner.
     *
     * @param request - OperateAppServiceForPartnerRequest
     *
     * @returns OperateAppServiceForPartnerResponse
     *
     * @param OperateAppServiceForPartnerRequest $request
     *
     * @return OperateAppServiceForPartnerResponse
     */
    public function operateAppServiceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppServiceForPartnerWithOptions($request, $runtime);
    }

    /**
     * Switches the like statistics for a template.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - OperateAppTemplateLikeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAppTemplateLikeResponse
     *
     * @param OperateAppTemplateLikeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OperateAppTemplateLikeResponse
     */
    public function operateAppTemplateLikeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->liked) {
            @$query['Liked'] = $request->liked;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateAppTemplateLike',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAppTemplateLikeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches the like statistics for a template.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - OperateAppTemplateLikeRequest
     *
     * @returns OperateAppTemplateLikeResponse
     *
     * @param OperateAppTemplateLikeRequest $request
     *
     * @return OperateAppTemplateLikeResponse
     */
    public function operateAppTemplateLike($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppTemplateLikeWithOptions($request, $runtime);
    }

    /**
     * Operates on the Supabase instance information corresponding to a resource.
     *
     * @remarks
     * The Supabase instance information corresponding to the resource to operate on.
     *
     * @param request - OperateSupabaseForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateSupabaseForAdminResponse
     *
     * @param OperateSupabaseForAdminRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateSupabaseForAdminResponse
     */
    public function operateSupabaseForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        if (null !== $request->executeSql) {
            @$query['ExecuteSql'] = $request->executeSql;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->orderByClause) {
            @$query['OrderByClause'] = $request->orderByClause;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->whereClause) {
            @$query['WhereClause'] = $request->whereClause;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateSupabaseForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateSupabaseForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Operates on the Supabase instance information corresponding to a resource.
     *
     * @remarks
     * The Supabase instance information corresponding to the resource to operate on.
     *
     * @param request - OperateSupabaseForAdminRequest
     *
     * @returns OperateSupabaseForAdminResponse
     *
     * @param OperateSupabaseForAdminRequest $request
     *
     * @return OperateSupabaseForAdminResponse
     */
    public function operateSupabaseForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateSupabaseForAdminWithOptions($request, $runtime);
    }

    /**
     * Publish application instance.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - PublishAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishAppInstanceResponse
     *
     * @param PublishAppInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PublishAppInstanceResponse
     */
    public function publishAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->deployChannel) {
            @$query['DeployChannel'] = $request->deployChannel;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->logicalNumber) {
            @$query['LogicalNumber'] = $request->logicalNumber;
        }

        if (null !== $request->publishNumber) {
            @$query['PublishNumber'] = $request->publishNumber;
        }

        if (null !== $request->weappAction) {
            @$query['WeappAction'] = $request->weappAction;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publish application instance.
     *
     * @remarks
     * Query application instance information
     *
     * @param request - PublishAppInstanceRequest
     *
     * @returns PublishAppInstanceResponse
     *
     * @param PublishAppInstanceRequest $request
     *
     * @return PublishAppInstanceResponse
     */
    public function publishAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Pushes resource metering data.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to a resource.
     *
     * @param request - PushResourceMeasureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushResourceMeasureResponse
     *
     * @param PushResourceMeasureRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PushResourceMeasureResponse
     */
    public function pushResourceMeasureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->belongId) {
            @$query['BelongId'] = $request->belongId;
        }

        if (null !== $request->belongIdType) {
            @$query['BelongIdType'] = $request->belongIdType;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->measureData) {
            @$query['MeasureData'] = $request->measureData;
        }

        if (null !== $request->metaData) {
            @$query['MetaData'] = $request->metaData;
        }

        if (null !== $request->resourceCode) {
            @$query['ResourceCode'] = $request->resourceCode;
        }

        if (null !== $request->useTime) {
            @$query['UseTime'] = $request->useTime;
        }

        if (null !== $request->useType) {
            @$query['UseType'] = $request->useType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushResourceMeasure',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushResourceMeasureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pushes resource metering data.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to a resource.
     *
     * @param request - PushResourceMeasureRequest
     *
     * @returns PushResourceMeasureResponse
     *
     * @param PushResourceMeasureRequest $request
     *
     * @return PushResourceMeasureResponse
     */
    public function pushResourceMeasure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushResourceMeasureWithOptions($request, $runtime);
    }

    /**
     * Queries the details of inspiration point acquisition (quota account list, including expiration flags).
     *
     * @remarks
     * Queries the Supabase instance information associated with a resource.
     *
     * @param request - QueryInspirationAccountDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInspirationAccountDetailsResponse
     *
     * @param QueryInspirationAccountDetailsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryInspirationAccountDetailsResponse
     */
    public function queryInspirationAccountDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInspirationAccountDetails',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInspirationAccountDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of inspiration point acquisition (quota account list, including expiration flags).
     *
     * @remarks
     * Queries the Supabase instance information associated with a resource.
     *
     * @param request - QueryInspirationAccountDetailsRequest
     *
     * @returns QueryInspirationAccountDetailsResponse
     *
     * @param QueryInspirationAccountDetailsRequest $request
     *
     * @return QueryInspirationAccountDetailsResponse
     */
    public function queryInspirationAccountDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInspirationAccountDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the overview of inspiration point balance.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to a resource.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInspirationBalanceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return QueryInspirationBalanceResponse
     */
    public function queryInspirationBalanceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryInspirationBalance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInspirationBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the overview of inspiration point balance.
     *
     * @remarks
     * Queries the Supabase instance information corresponding to a resource.
     *
     * @returns QueryInspirationBalanceResponse
     *
     * @return QueryInspirationBalanceResponse
     */
    public function queryInspirationBalance()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInspirationBalanceWithOptions($runtime);
    }

    /**
     * Queries the details of inspiration point consumption.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - QueryInspirationConsumeRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInspirationConsumeRecordsResponse
     *
     * @param QueryInspirationConsumeRecordsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryInspirationConsumeRecordsResponse
     */
    public function queryInspirationConsumeRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInspirationConsumeRecords',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInspirationConsumeRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of inspiration point consumption.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - QueryInspirationConsumeRecordsRequest
     *
     * @returns QueryInspirationConsumeRecordsResponse
     *
     * @param QueryInspirationConsumeRecordsRequest $request
     *
     * @return QueryInspirationConsumeRecordsResponse
     */
    public function queryInspirationConsumeRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInspirationConsumeRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the material folder tree.
     *
     * @param request - QueryMaterialDirectoryTreeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMaterialDirectoryTreeResponse
     *
     * @param QueryMaterialDirectoryTreeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryMaterialDirectoryTreeResponse
     */
    public function queryMaterialDirectoryTreeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->hiddenPublic) {
            @$query['HiddenPublic'] = $request->hiddenPublic;
        }

        if (null !== $request->root) {
            @$query['Root'] = $request->root;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMaterialDirectoryTree',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMaterialDirectoryTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the material folder tree.
     *
     * @param request - QueryMaterialDirectoryTreeRequest
     *
     * @returns QueryMaterialDirectoryTreeResponse
     *
     * @param QueryMaterialDirectoryTreeRequest $request
     *
     * @return QueryMaterialDirectoryTreeResponse
     */
    public function queryMaterialDirectoryTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMaterialDirectoryTreeWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a material file.
     *
     * @param request - QueryMaterialFileDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMaterialFileDetailResponse
     *
     * @param QueryMaterialFileDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMaterialFileDetailResponse
     */
    public function queryMaterialFileDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMaterialFileDetail',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMaterialFileDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a material file.
     *
     * @param request - QueryMaterialFileDetailRequest
     *
     * @returns QueryMaterialFileDetailResponse
     *
     * @param QueryMaterialFileDetailRequest $request
     *
     * @return QueryMaterialFileDetailResponse
     */
    public function queryMaterialFileDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMaterialFileDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the list of material files.
     *
     * @param tmpReq - QueryMaterialFileListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMaterialFileListResponse
     *
     * @param QueryMaterialFileListRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMaterialFileListResponse
     */
    public function queryMaterialFileListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMaterialFileListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }

        if (null !== $tmpReq->suffixList) {
            $request->suffixListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->suffixList, 'SuffixList', 'json');
        }

        if (null !== $tmpReq->typeList) {
            $request->typeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->typeList, 'TypeList', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->maxFileSize) {
            @$query['MaxFileSize'] = $request->maxFileSize;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->minFileSize) {
            @$query['MinFileSize'] = $request->minFileSize;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->statusListShrink) {
            @$query['StatusList'] = $request->statusListShrink;
        }

        if (null !== $request->suffixListShrink) {
            @$query['SuffixList'] = $request->suffixListShrink;
        }

        if (null !== $request->typeListShrink) {
            @$query['TypeList'] = $request->typeListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMaterialFileList',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMaterialFileListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of material files.
     *
     * @param request - QueryMaterialFileListRequest
     *
     * @returns QueryMaterialFileListResponse
     *
     * @param QueryMaterialFileListRequest $request
     *
     * @return QueryMaterialFileListResponse
     */
    public function queryMaterialFileList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMaterialFileListWithOptions($request, $runtime);
    }

    /**
     * Queries the file overview.
     *
     * @param tmpReq - QueryMaterialFileSummaryInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMaterialFileSummaryInfoResponse
     *
     * @param QueryMaterialFileSummaryInfoRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryMaterialFileSummaryInfoResponse
     */
    public function queryMaterialFileSummaryInfoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMaterialFileSummaryInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }

        if (null !== $tmpReq->typeList) {
            $request->typeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->typeList, 'TypeList', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->statusListShrink) {
            @$query['StatusList'] = $request->statusListShrink;
        }

        if (null !== $request->typeListShrink) {
            @$query['TypeList'] = $request->typeListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMaterialFileSummaryInfo',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMaterialFileSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the file overview.
     *
     * @param request - QueryMaterialFileSummaryInfoRequest
     *
     * @returns QueryMaterialFileSummaryInfoResponse
     *
     * @param QueryMaterialFileSummaryInfoRequest $request
     *
     * @return QueryMaterialFileSummaryInfoResponse
     */
    public function queryMaterialFileSummaryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMaterialFileSummaryInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a material generation task.
     *
     * @param request - QueryMaterialTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMaterialTaskDetailResponse
     *
     * @param QueryMaterialTaskDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMaterialTaskDetailResponse
     */
    public function queryMaterialTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMaterialTaskDetail',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMaterialTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a material generation task.
     *
     * @param request - QueryMaterialTaskDetailRequest
     *
     * @returns QueryMaterialTaskDetailResponse
     *
     * @param QueryMaterialTaskDetailRequest $request
     *
     * @return QueryMaterialTaskDetailResponse
     */
    public function queryMaterialTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMaterialTaskDetailWithOptions($request, $runtime);
    }

    /**
     * Query Material Generation Task List.
     *
     * @param tmpReq - QueryMaterialTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMaterialTaskListResponse
     *
     * @param QueryMaterialTaskListRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMaterialTaskListResponse
     */
    public function queryMaterialTaskListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMaterialTaskListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }

        if (null !== $tmpReq->taskTypeList) {
            $request->taskTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskTypeList, 'TaskTypeList', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->statusListShrink) {
            @$query['StatusList'] = $request->statusListShrink;
        }

        if (null !== $request->taskTypeListShrink) {
            @$query['TaskTypeList'] = $request->taskTypeListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMaterialTaskList',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMaterialTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Material Generation Task List.
     *
     * @param request - QueryMaterialTaskListRequest
     *
     * @returns QueryMaterialTaskListResponse
     *
     * @param QueryMaterialTaskListRequest $request
     *
     * @return QueryMaterialTaskListResponse
     */
    public function queryMaterialTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMaterialTaskListWithOptions($request, $runtime);
    }

    /**
     * Queries the auth configuration of a Supabase instance associated with a resource.
     *
     * @remarks
     * Queries the auth configuration of a Supabase instance associated with a resource.
     *
     * @param request - QuerySupabaseAuthConfigsForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySupabaseAuthConfigsForAdminResponse
     *
     * @param QuerySupabaseAuthConfigsForAdminRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QuerySupabaseAuthConfigsForAdminResponse
     */
    public function querySupabaseAuthConfigsForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySupabaseAuthConfigsForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySupabaseAuthConfigsForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the auth configuration of a Supabase instance associated with a resource.
     *
     * @remarks
     * Queries the auth configuration of a Supabase instance associated with a resource.
     *
     * @param request - QuerySupabaseAuthConfigsForAdminRequest
     *
     * @returns QuerySupabaseAuthConfigsForAdminResponse
     *
     * @param QuerySupabaseAuthConfigsForAdminRequest $request
     *
     * @return QuerySupabaseAuthConfigsForAdminResponse
     */
    public function querySupabaseAuthConfigsForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySupabaseAuthConfigsForAdminWithOptions($request, $runtime);
    }

    /**
     * Queries the Supabase instance configuration information for a specified resource.
     *
     * @remarks
     * Queries the Supabase instance configuration information for a specified resource.
     *
     * @param request - QuerySupabaseConfigsForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySupabaseConfigsForAdminResponse
     *
     * @param QuerySupabaseConfigsForAdminRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QuerySupabaseConfigsForAdminResponse
     */
    public function querySupabaseConfigsForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySupabaseConfigsForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySupabaseConfigsForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Supabase instance configuration information for a specified resource.
     *
     * @remarks
     * Queries the Supabase instance configuration information for a specified resource.
     *
     * @param request - QuerySupabaseConfigsForAdminRequest
     *
     * @returns QuerySupabaseConfigsForAdminResponse
     *
     * @param QuerySupabaseConfigsForAdminRequest $request
     *
     * @return QuerySupabaseConfigsForAdminResponse
     */
    public function querySupabaseConfigsForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySupabaseConfigsForAdminWithOptions($request, $runtime);
    }

    /**
     * Queries the Supabase instance information for a specified resource.
     *
     * @remarks
     * Queries the Supabase instance information for a specified resource.
     *
     * @param request - QuerySupabaseInstanceInfoForAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySupabaseInstanceInfoForAdminResponse
     *
     * @param QuerySupabaseInstanceInfoForAdminRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return QuerySupabaseInstanceInfoForAdminResponse
     */
    public function querySupabaseInstanceInfoForAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySupabaseInstanceInfoForAdmin',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySupabaseInstanceInfoForAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Supabase instance information for a specified resource.
     *
     * @remarks
     * Queries the Supabase instance information for a specified resource.
     *
     * @param request - QuerySupabaseInstanceInfoForAdminRequest
     *
     * @returns QuerySupabaseInstanceInfoForAdminResponse
     *
     * @param QuerySupabaseInstanceInfoForAdminRequest $request
     *
     * @return QuerySupabaseInstanceInfoForAdminResponse
     */
    public function querySupabaseInstanceInfoForAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySupabaseInstanceInfoForAdminWithOptions($request, $runtime);
    }

    /**
     * Reconnects an AI conversation.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - ReconnectAppChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReconnectAppChatResponse
     *
     * @param ReconnectAppChatRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReconnectAppChatResponse
     */
    public function reconnectAppChatWithSSE($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chatId) {
            @$body['ChatId'] = $request->chatId;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->lastEventId) {
            @$body['LastEventId'] = $request->lastEventId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReconnectAppChat',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield ReconnectAppChatResponse::fromMap([
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
     * Reconnects an AI conversation.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - ReconnectAppChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReconnectAppChatResponse
     *
     * @param ReconnectAppChatRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReconnectAppChatResponse
     */
    public function reconnectAppChatWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chatId) {
            @$body['ChatId'] = $request->chatId;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->lastEventId) {
            @$body['LastEventId'] = $request->lastEventId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReconnectAppChat',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);

        return ReconnectAppChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reconnects an AI conversation.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - ReconnectAppChatRequest
     *
     * @returns ReconnectAppChatResponse
     *
     * @param ReconnectAppChatRequest $request
     *
     * @return ReconnectAppChatResponse
     */
    public function reconnectAppChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reconnectAppChatWithOptions($request, $runtime);
    }

    /**
     * Refreshes the password-free login ticket for a website building instance.
     *
     * @param request - RefreshAppInstanceTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshAppInstanceTicketResponse
     *
     * @param RefreshAppInstanceTicketRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RefreshAppInstanceTicketResponse
     */
    public function refreshAppInstanceTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshAppInstanceTicket',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshAppInstanceTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes the password-free login ticket for a website building instance.
     *
     * @param request - RefreshAppInstanceTicketRequest
     *
     * @returns RefreshAppInstanceTicketResponse
     *
     * @param RefreshAppInstanceTicketRequest $request
     *
     * @return RefreshAppInstanceTicketResponse
     */
    public function refreshAppInstanceTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAppInstanceTicketWithOptions($request, $runtime);
    }

    /**
     * Processes a refund for a channel partner website building service.
     *
     * @param request - RefundAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefundAppInstanceForPartnerResponse
     *
     * @param RefundAppInstanceForPartnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RefundAppInstanceForPartnerResponse
     */
    public function refundAppInstanceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->refundReason) {
            @$query['RefundReason'] = $request->refundReason;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefundAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefundAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Processes a refund for a channel partner website building service.
     *
     * @param request - RefundAppInstanceForPartnerRequest
     *
     * @returns RefundAppInstanceForPartnerResponse
     *
     * @param RefundAppInstanceForPartnerRequest $request
     *
     * @return RefundAppInstanceForPartnerResponse
     */
    public function refundAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * Renews a website builder application instance.
     *
     * @param request - RenewAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewAppInstanceResponse
     *
     * @param RenewAppInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RenewAppInstanceResponse
     */
    public function renewAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a website builder application instance.
     *
     * @param request - RenewAppInstanceRequest
     *
     * @returns RenewAppInstanceResponse
     *
     * @param RenewAppInstanceRequest $request
     *
     * @return RenewAppInstanceResponse
     */
    public function renewAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Renews or refreshes a sandbox environment.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - RenewAppSandboxRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewAppSandboxResponse
     *
     * @param RenewAppSandboxRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RenewAppSandboxResponse
     */
    public function renewAppSandboxWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewAppSandbox',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewAppSandboxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews or refreshes a sandbox environment.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - RenewAppSandboxRequest
     *
     * @returns RenewAppSandboxResponse
     *
     * @param RenewAppSandboxRequest $request
     *
     * @return RenewAppSandboxResponse
     */
    public function renewAppSandbox($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAppSandboxWithOptions($request, $runtime);
    }

    /**
     * Code snapshot rollback.
     *
     * @remarks
     * Obtain the configuration information of the code generation plugin
     *
     * @param request - RollbackAppCodeSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackAppCodeSnapshotResponse
     *
     * @param RollbackAppCodeSnapshotRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackAppCodeSnapshotResponse
     */
    public function rollbackAppCodeSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->targetLogicalNumber) {
            @$query['TargetLogicalNumber'] = $request->targetLogicalNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackAppCodeSnapshot',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackAppCodeSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Code snapshot rollback.
     *
     * @remarks
     * Obtain the configuration information of the code generation plugin
     *
     * @param request - RollbackAppCodeSnapshotRequest
     *
     * @returns RollbackAppCodeSnapshotResponse
     *
     * @param RollbackAppCodeSnapshotRequest $request
     *
     * @return RollbackAppCodeSnapshotResponse
     */
    public function rollbackAppCodeSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackAppCodeSnapshotWithOptions($request, $runtime);
    }

    /**
     * Rolls back the release of an application instance.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - RollbackAppInstancePublishRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackAppInstancePublishResponse
     *
     * @param RollbackAppInstancePublishRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RollbackAppInstancePublishResponse
     */
    public function rollbackAppInstancePublishWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->deployChannel) {
            @$query['DeployChannel'] = $request->deployChannel;
        }

        if (null !== $request->publishNumber) {
            @$query['PublishNumber'] = $request->publishNumber;
        }

        if (null !== $request->quickRollback) {
            @$query['QuickRollback'] = $request->quickRollback;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackAppInstancePublish',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackAppInstancePublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back the release of an application instance.
     *
     * @remarks
     * Queries application instance information.
     *
     * @param request - RollbackAppInstancePublishRequest
     *
     * @returns RollbackAppInstancePublishResponse
     *
     * @param RollbackAppInstancePublishRequest $request
     *
     * @return RollbackAppInstancePublishResponse
     */
    public function rollbackAppInstancePublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackAppInstancePublishWithOptions($request, $runtime);
    }

    /**
     * Save Requirement.
     *
     * @remarks
     * Get code generation plugin configuration information
     *
     * @param request - SaveAppRequirementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveAppRequirementResponse
     *
     * @param SaveAppRequirementRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SaveAppRequirementResponse
     */
    public function saveAppRequirementWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        $body = [];
        if (null !== $request->prd) {
            @$body['Prd'] = $request->prd;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveAppRequirement',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveAppRequirementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Save Requirement.
     *
     * @remarks
     * Get code generation plugin configuration information
     *
     * @param request - SaveAppRequirementRequest
     *
     * @returns SaveAppRequirementResponse
     *
     * @param SaveAppRequirementRequest $request
     *
     * @return SaveAppRequirementResponse
     */
    public function saveAppRequirement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAppRequirementWithOptions($request, $runtime);
    }

    /**
     * Saves Supabase secrets.
     *
     * @remarks
     * The Supabase instance information corresponding to the operated resource.
     *
     * @param request - SaveAppSupabaseSecretsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveAppSupabaseSecretsResponse
     *
     * @param SaveAppSupabaseSecretsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SaveAppSupabaseSecretsResponse
     */
    public function saveAppSupabaseSecretsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->secretsJson) {
            @$query['SecretsJson'] = $request->secretsJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveAppSupabaseSecrets',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveAppSupabaseSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Saves Supabase secrets.
     *
     * @remarks
     * The Supabase instance information corresponding to the operated resource.
     *
     * @param request - SaveAppSupabaseSecretsRequest
     *
     * @returns SaveAppSupabaseSecretsResponse
     *
     * @param SaveAppSupabaseSecretsRequest $request
     *
     * @return SaveAppSupabaseSecretsResponse
     */
    public function saveAppSupabaseSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAppSupabaseSecretsWithOptions($request, $runtime);
    }

    /**
     * Searches for images.
     *
     * @param tmpReq - SearchImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchImageResponse
     *
     * @param SearchImageRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SearchImageResponse
     */
    public function searchImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'simple');
        }

        $query = [];
        if (null !== $request->colorHex) {
            @$query['ColorHex'] = $request->colorHex;
        }

        if (null !== $request->hasPerson) {
            @$query['HasPerson'] = $request->hasPerson;
        }

        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
        }

        if (null !== $request->imageRatio) {
            @$query['ImageRatio'] = $request->imageRatio;
        }

        if (null !== $request->maxHeight) {
            @$query['MaxHeight'] = $request->maxHeight;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->maxWidth) {
            @$query['MaxWidth'] = $request->maxWidth;
        }

        if (null !== $request->minHeight) {
            @$query['MinHeight'] = $request->minHeight;
        }

        if (null !== $request->minWidth) {
            @$query['MinWidth'] = $request->minWidth;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ossKey) {
            @$query['OssKey'] = $request->ossKey;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchImage',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches for images.
     *
     * @param request - SearchImageRequest
     *
     * @returns SearchImageResponse
     *
     * @param SearchImageRequest $request
     *
     * @return SearchImageResponse
     */
    public function searchImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageWithOptions($request, $runtime);
    }

    /**
     * Sets the SSL certificate for a website.
     *
     * @param request - SetAppDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAppDomainCertificateResponse
     *
     * @param SetAppDomainCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetAppDomainCertificateResponse
     */
    public function setAppDomainCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->certificateName) {
            @$query['CertificateName'] = $request->certificateName;
        }

        if (null !== $request->certificateType) {
            @$query['CertificateType'] = $request->certificateType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->privateKey) {
            @$query['PrivateKey'] = $request->privateKey;
        }

        if (null !== $request->publicKey) {
            @$query['PublicKey'] = $request->publicKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAppDomainCertificate',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAppDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the SSL certificate for a website.
     *
     * @param request - SetAppDomainCertificateRequest
     *
     * @returns SetAppDomainCertificateResponse
     *
     * @param SetAppDomainCertificateRequest $request
     *
     * @return SetAppDomainCertificateResponse
     */
    public function setAppDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * Submits an SEO index.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - SubmitAppSeoIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAppSeoIndexResponse
     *
     * @param SubmitAppSeoIndexRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitAppSeoIndexResponse
     */
    public function submitAppSeoIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->seType) {
            @$query['SeType'] = $request->seType;
        }

        if (null !== $request->submitLater) {
            @$query['SubmitLater'] = $request->submitLater;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitAppSeoIndex',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAppSeoIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an SEO index.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - SubmitAppSeoIndexRequest
     *
     * @returns SubmitAppSeoIndexResponse
     *
     * @param SubmitAppSeoIndexRequest $request
     *
     * @return SubmitAppSeoIndexResponse
     */
    public function submitAppSeoIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAppSeoIndexWithOptions($request, $runtime);
    }

    /**
     * Submits a material generation task.
     *
     * @param request - SubmitMaterialTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitMaterialTaskResponse
     *
     * @param SubmitMaterialTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitMaterialTaskResponse
     */
    public function submitMaterialTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskParam) {
            @$query['TaskParam'] = $request->taskParam;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitMaterialTask',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitMaterialTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a material generation task.
     *
     * @param request - SubmitMaterialTaskRequest
     *
     * @returns SubmitMaterialTaskResponse
     *
     * @param SubmitMaterialTaskRequest $request
     *
     * @return SubmitMaterialTaskResponse
     */
    public function submitMaterialTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMaterialTaskWithOptions($request, $runtime);
    }

    /**
     * Switches to a specified conversation.
     *
     * @remarks
     * Creates an AI conversation through the Wanxiaozhi 2.0 interface.
     *
     * @param request - SwitchAppConversationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchAppConversationResponse
     *
     * @param SwitchAppConversationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SwitchAppConversationResponse
     */
    public function switchAppConversationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->botId) {
            @$query['BotId'] = $request->botId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchAppConversation',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchAppConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches to a specified conversation.
     *
     * @remarks
     * Creates an AI conversation through the Wanxiaozhi 2.0 interface.
     *
     * @param request - SwitchAppConversationRequest
     *
     * @returns SwitchAppConversationResponse
     *
     * @param SwitchAppConversationRequest $request
     *
     * @return SwitchAppConversationResponse
     */
    public function switchAppConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchAppConversationWithOptions($request, $runtime);
    }

    /**
     * Synchronizes an application instance from a partner.
     *
     * @param tmpReq - SyncAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncAppInstanceForPartnerResponse
     *
     * @param SyncAppInstanceForPartnerRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SyncAppInstanceForPartnerResponse
     */
    public function syncAppInstanceForPartnerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SyncAppInstanceForPartnerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appInstance) {
            $request->appInstanceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appInstance, 'AppInstance', 'json');
        }

        $query = [];
        if (null !== $request->appInstanceShrink) {
            @$query['AppInstance'] = $request->appInstanceShrink;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->operator) {
            @$query['Operator'] = $request->operator;
        }

        if (null !== $request->sourceBizId) {
            @$query['SourceBizId'] = $request->sourceBizId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SyncAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes an application instance from a partner.
     *
     * @param request - SyncAppInstanceForPartnerRequest
     *
     * @returns SyncAppInstanceForPartnerResponse
     *
     * @param SyncAppInstanceForPartnerRequest $request
     *
     * @return SyncAppInstanceForPartnerResponse
     */
    public function syncAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * Unbinds a domain name from a website and deletes the related DNS records.
     *
     * @param request - UnbindAppDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindAppDomainResponse
     *
     * @param UnbindAppDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindAppDomainResponse
     */
    public function unbindAppDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindAppDomain',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindAppDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a domain name from a website and deletes the related DNS records.
     *
     * @param request - UnbindAppDomainRequest
     *
     * @returns UnbindAppDomainResponse
     *
     * @param UnbindAppDomainRequest $request
     *
     * @return UnbindAppDomainResponse
     */
    public function unbindAppDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAppDomainWithOptions($request, $runtime);
    }

    /**
     * Updates message content.
     *
     * @remarks
     * Wanxiaozhi 2.0 - API for querying AI conversation history.
     *
     * @param request - UpdateAppChatMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppChatMessageResponse
     *
     * @param UpdateAppChatMessageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateAppChatMessageResponse
     */
    public function updateAppChatMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addedMetaData) {
            @$query['AddedMetaData'] = $request->addedMetaData;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppChatMessage',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates message content.
     *
     * @remarks
     * Wanxiaozhi 2.0 - API for querying AI conversation history.
     *
     * @param request - UpdateAppChatMessageRequest
     *
     * @returns UpdateAppChatMessageResponse
     *
     * @param UpdateAppChatMessageRequest $request
     *
     * @return UpdateAppChatMessageResponse
     */
    public function updateAppChatMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppChatMessageWithOptions($request, $runtime);
    }

    /**
     * Edits JSX code.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - UpdateAppCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppCodeResponse
     *
     * @param UpdateAppCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAppCodeResponse
     */
    public function updateAppCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppCode',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edits JSX code.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - UpdateAppCodeRequest
     *
     * @returns UpdateAppCodeResponse
     *
     * @param UpdateAppCodeRequest $request
     *
     * @return UpdateAppCodeResponse
     */
    public function updateAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppCodeWithOptions($request, $runtime);
    }

    /**
     * Updates a file.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - UpdateAppFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppFileResponse
     *
     * @param UpdateAppFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAppFileResponse
     */
    public function updateAppFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppFile',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a file.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plugin.
     *
     * @param request - UpdateAppFileRequest
     *
     * @returns UpdateAppFileResponse
     *
     * @param UpdateAppFileRequest $request
     *
     * @return UpdateAppFileResponse
     */
    public function updateAppFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppFileWithOptions($request, $runtime);
    }

    /**
     * Changes the specifications of a website building instance.
     *
     * @remarks
     * Queries the information of an application instance.
     *
     * @param tmpReq - UpdateAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppInstanceResponse
     *
     * @param UpdateAppInstanceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAppInstanceResponse
     */
    public function updateAppInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAppInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->applicationType) {
            @$query['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deployArea) {
            @$query['DeployArea'] = $request->deployArea;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->iconUrl) {
            @$query['IconUrl'] = $request->iconUrl;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->thumbnailUrl) {
            @$query['ThumbnailUrl'] = $request->thumbnailUrl;
        }

        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the specifications of a website building instance.
     *
     * @remarks
     * Queries the information of an application instance.
     *
     * @param request - UpdateAppInstanceRequest
     *
     * @returns UpdateAppInstanceResponse
     *
     * @param UpdateAppInstanceRequest $request
     *
     * @return UpdateAppInstanceResponse
     */
    public function updateAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Updates the SEO index status.
     *
     * @remarks
     * Wanxiaozhi 2.0 AI conversation.
     *
     * @param request - UpdateAppSeoStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppSeoStatusResponse
     *
     * @param UpdateAppSeoStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAppSeoStatusResponse
     */
    public function updateAppSeoStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->seAuthInfo) {
            @$query['SeAuthInfo'] = $request->seAuthInfo;
        }

        if (null !== $request->seType) {
            @$query['SeType'] = $request->seType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppSeoStatus',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppSeoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the SEO index status.
     *
     * @remarks
     * Wanxiaozhi 2.0 AI conversation.
     *
     * @param request - UpdateAppSeoStatusRequest
     *
     * @returns UpdateAppSeoStatusResponse
     *
     * @param UpdateAppSeoStatusRequest $request
     *
     * @return UpdateAppSeoStatusResponse
     */
    public function updateAppSeoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppSeoStatusWithOptions($request, $runtime);
    }

    /**
     * Update Supabase authentication configuration.
     *
     * @remarks
     * Query the auth configuration information of the Supabase instance corresponding to the resource
     *
     * @param request - UpdateAppSupabaseAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppSupabaseAuthConfigResponse
     *
     * @param UpdateAppSupabaseAuthConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateAppSupabaseAuthConfigResponse
     */
    public function updateAppSupabaseAuthConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->configsJson) {
            @$query['ConfigsJson'] = $request->configsJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppSupabaseAuthConfig',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppSupabaseAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Supabase authentication configuration.
     *
     * @remarks
     * Query the auth configuration information of the Supabase instance corresponding to the resource
     *
     * @param request - UpdateAppSupabaseAuthConfigRequest
     *
     * @returns UpdateAppSupabaseAuthConfigResponse
     *
     * @param UpdateAppSupabaseAuthConfigRequest $request
     *
     * @return UpdateAppSupabaseAuthConfigResponse
     */
    public function updateAppSupabaseAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppSupabaseAuthConfigWithOptions($request, $runtime);
    }

    /**
     * Updates a Supabase key.
     *
     * @remarks
     * The Supabase instance information corresponding to the operated resource.
     *
     * @param request - UpdateAppSupabaseSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppSupabaseSecretResponse
     *
     * @param UpdateAppSupabaseSecretRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAppSupabaseSecretResponse
     */
    public function updateAppSupabaseSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->secretKey) {
            @$query['SecretKey'] = $request->secretKey;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->secretType) {
            @$query['SecretType'] = $request->secretType;
        }

        if (null !== $request->secretValue) {
            @$query['SecretValue'] = $request->secretValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppSupabaseSecret',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppSupabaseSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a Supabase key.
     *
     * @remarks
     * The Supabase instance information corresponding to the operated resource.
     *
     * @param request - UpdateAppSupabaseSecretRequest
     *
     * @returns UpdateAppSupabaseSecretResponse
     *
     * @param UpdateAppSupabaseSecretRequest $request
     *
     * @return UpdateAppSupabaseSecretResponse
     */
    public function updateAppSupabaseSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppSupabaseSecretWithOptions($request, $runtime);
    }

    /**
     * Update miniapp binding information.
     *
     * @param request - UpdateMiniAppBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMiniAppBindingResponse
     *
     * @param UpdateMiniAppBindingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMiniAppBindingResponse
     */
    public function updateMiniAppBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->settingKey) {
            @$query['SettingKey'] = $request->settingKey;
        }

        if (null !== $request->settingValue) {
            @$query['SettingValue'] = $request->settingValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMiniAppBinding',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMiniAppBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update miniapp binding information.
     *
     * @param request - UpdateMiniAppBindingRequest
     *
     * @returns UpdateMiniAppBindingResponse
     *
     * @param UpdateMiniAppBindingRequest $request
     *
     * @return UpdateMiniAppBindingResponse
     */
    public function updateMiniAppBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMiniAppBindingWithOptions($request, $runtime);
    }

    /**
     * Uploads a file to the root directory of a site.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - UploadAppSiteValidationFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadAppSiteValidationFileResponse
     *
     * @param UploadAppSiteValidationFileRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UploadAppSiteValidationFileResponse
     */
    public function uploadAppSiteValidationFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->file) {
            @$query['File'] = $request->file;
        }

        if (null !== $request->fileContent) {
            @$query['FileContent'] = $request->fileContent;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->siteHost) {
            @$query['SiteHost'] = $request->siteHost;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadAppSiteValidationFile',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadAppSiteValidationFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a file to the root directory of a site.
     *
     * @remarks
     * Retrieves the configuration information of the code generation plug-in.
     *
     * @param request - UploadAppSiteValidationFileRequest
     *
     * @returns UploadAppSiteValidationFileResponse
     *
     * @param UploadAppSiteValidationFileRequest $request
     *
     * @return UploadAppSiteValidationFileResponse
     */
    public function uploadAppSiteValidationFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadAppSiteValidationFileWithOptions($request, $runtime);
    }

    /**
     * Uploads a material file.
     *
     * @param request - UploadMaterialFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadMaterialFileResponse
     *
     * @param UploadMaterialFileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadMaterialFileResponse
     */
    public function uploadMaterialFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadMaterialFile',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadMaterialFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a material file.
     *
     * @param request - UploadMaterialFileRequest
     *
     * @returns UploadMaterialFileResponse
     *
     * @param UploadMaterialFileRequest $request
     *
     * @return UploadMaterialFileResponse
     */
    public function uploadMaterialFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMaterialFileWithOptions($request, $runtime);
    }
}
