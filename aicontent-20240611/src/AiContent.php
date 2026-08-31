<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryPaidResourceRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryPaidResourceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CountOralEvaluationStatisticsCallsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CountOralEvaluationStatisticsCallsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CountOralEvaluationStatisticsConcurrentRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CountOralEvaluationStatisticsConcurrentResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CountOralEvaluationStatisticsErrorRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CountOralEvaluationStatisticsErrorResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateAccessWarrantRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateAccessWarrantResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateProjectRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateProjectResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherEnglishParaphraseChatMessageRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherEnglishParaphraseChatMessageResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRefineRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRefineResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherGrammarCheckRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherGrammarCheckResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDialogueRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDialogueResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDifficultyRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDifficultyResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantGrammarCheckRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantGrammarCheckResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRefineByContextRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRefineByContextResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRetryConversationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRetryConversationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSseDialogueRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSseDialogueResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantStartConversationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantStartConversationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSuggestionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSuggestionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantTranslateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantTranslateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherExpansionDialogueSuggestionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherExpansionDialogueSuggestionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherSyncDialogueSuggestionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherSyncDialogueSuggestionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetTextbookAssistantTokenRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetTextbookAssistantTokenResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticlesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticlesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchBindModelGroupRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchBindModelGroupResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchCreateMemberApiKeysRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchCreateMemberApiKeysResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchCreateModelRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchCreateModelResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchDisableMemberApiKeysRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchDisableMemberApiKeysResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchResetMemberAuthorizationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchResetMemberAuthorizationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchSetMemberAuthorizationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchSetMemberAuthorizationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBillingCostTabsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBillingCostTabsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterChatCompletionsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterChatCompletionsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterConfigureClientBalanceRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterConfigureClientBalanceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterConfigureMemberBalanceRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterConfigureMemberBalanceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCopyApiKeyResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateApiKeyRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateApiKeyResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateBalanceTransactionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateBalanceTransactionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateBillingRuleRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateBillingRuleResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateClientRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateClientResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateConversationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateConversationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateMemberApiKeyRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateMemberApiKeyResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateMemberBalanceTransactionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateMemberBalanceTransactionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateMemberSubscriptionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateMemberSubscriptionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateModelGroupRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateModelGroupResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateModelRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateModelResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateSubscriptionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateSubscriptionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateUserRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterCreateUserResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterDeleteApiKeyResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterDeleteClientResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterDeleteConversationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterDeleteModelGroupRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterDeleteModelGroupResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterDeleteModelResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterDeleteUserRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterDeleteUserResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterExportMemberBalanceOrdersRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterExportMemberBalanceOrdersResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetBillingBillSummaryRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetBillingBillSummaryResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetClientBalanceLogsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetClientBalanceLogsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetClientBalanceRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetClientBalanceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetDeptBalanceSummaryRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetDeptBalanceSummaryResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetMemberApiKeysRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetMemberApiKeysResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetMemberBalanceLogsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetMemberBalanceLogsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetMemberBalanceRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetMemberBalanceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetUserRolesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetUserRolesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListBalanceOrdersRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListBalanceOrdersResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListDeptMembersRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListDeptMembersResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListMemberBalanceOrdersRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListMemberBalanceOrdersResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListMemberSubscriptionsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListMemberSubscriptionsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListSubscriptionsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterListSubscriptionsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterMiguDownloadSourceRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterMiguDownloadSourceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterMiguUploadSourceRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterMiguUploadSourceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryApiKeyListRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryApiKeyListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryApiKeyResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryBillingCostBreakdownRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryBillingCostBreakdownResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryBillingDetailsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryBillingDetailsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryBillingRuleListRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryBillingRuleListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryClientDiscountLogsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryClientDiscountLogsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryClientListRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryClientListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryClientTreeRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryClientTreeResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryConversationListRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryConversationListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryConversationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryCostModelDetailRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryCostModelDetailResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryCostModelListRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryCostModelListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryCostOverviewMetricsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryCostOverviewMetricsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryCostTrendMetricsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryCostTrendMetricsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupClientsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupClientsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupListRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupModelsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupModelsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupsByApiKeyRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupsByApiKeyResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupUsersRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupUsersResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelListRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosProvidersRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosProvidersResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosTagsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosTagsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryObservationChartsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryObservationChartsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryObservationLogsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryObservationLogsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryObservationMetricsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryObservationMetricsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryUsageBreakdownRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryUsageBreakdownResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryUserListRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryUserListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterResetMemberAuthorizationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterResetMemberAuthorizationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSaveFlowConfigRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSaveFlowConfigResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSearchClientTreeRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSearchClientTreeResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSetMemberAuthorizationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSetMemberAuthorizationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSetUserRolesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSetUserRolesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterStopMemberSubscriptionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterStopMemberSubscriptionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterStopSubscriptionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterStopSubscriptionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterTransferToMemberRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterTransferToMemberResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateBillingRuleRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateBillingRuleResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateClientRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateClientResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateConversationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateConversationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateModelGroupRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateModelGroupResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateModelRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateModelResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateUserRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateUserResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageAddInferenceJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageAddInferenceJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryImageAssetRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryImageAssetResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddInferenceJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddInferenceJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddModelTrainJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddModelTrainJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryImageAssetRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryImageAssetResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryInferenceJobInfoRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryInferenceJobInfoResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainJobListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainStatusRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainStatusResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryApplicationAccessIdRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryApplicationAccessIdResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryPurchasedServiceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\UpdateProjectResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AiContent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'aicontent.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'aicontent.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'aicontent.aliyuncs.com',
            'public' => 'aicontent.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aicontent', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Generate Q&A pairs to expand data.
     *
     * @param request - AITeacherExpansionPracticeTaskGenerateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AITeacherExpansionPracticeTaskGenerateResponse
     *
     * @param AITeacherExpansionPracticeTaskGenerateRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return AITeacherExpansionPracticeTaskGenerateResponse
     */
    public function aITeacherExpansionPracticeTaskGenerateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->keySentences) {
            @$body['keySentences'] = $request->keySentences;
        }

        if (null !== $request->keyWords) {
            @$body['keyWords'] = $request->keyWords;
        }

        if (null !== $request->learningObject) {
            @$body['learningObject'] = $request->learningObject;
        }

        if (null !== $request->textContent) {
            @$body['textContent'] = $request->textContent;
        }

        if (null !== $request->textbook) {
            @$body['textbook'] = $request->textbook;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AITeacherExpansionPracticeTaskGenerate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/generateTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AITeacherExpansionPracticeTaskGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generate Q&A pairs to expand data.
     *
     * @param request - AITeacherExpansionPracticeTaskGenerateRequest
     *
     * @returns AITeacherExpansionPracticeTaskGenerateResponse
     *
     * @param AITeacherExpansionPracticeTaskGenerateRequest $request
     *
     * @return AITeacherExpansionPracticeTaskGenerateResponse
     */
    public function aITeacherExpansionPracticeTaskGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aITeacherExpansionPracticeTaskGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * Synchronous basic practice is primarily for dialogue tasks with a ground truth. Although this mode allows some deviation from the ground truth, the AI strictly requires users to follow it.
     *
     * @param request - AITeacherSyncPracticeTaskGenerateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AITeacherSyncPracticeTaskGenerateResponse
     *
     * @param AITeacherSyncPracticeTaskGenerateRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return AITeacherSyncPracticeTaskGenerateResponse
     */
    public function aITeacherSyncPracticeTaskGenerateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->keySentences) {
            @$body['keySentences'] = $request->keySentences;
        }

        if (null !== $request->keyWords) {
            @$body['keyWords'] = $request->keyWords;
        }

        if (null !== $request->learningObject) {
            @$body['learningObject'] = $request->learningObject;
        }

        if (null !== $request->textContent) {
            @$body['textContent'] = $request->textContent;
        }

        if (null !== $request->textbook) {
            @$body['textbook'] = $request->textbook;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AITeacherSyncPracticeTaskGenerate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/syncPractice/generateTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AITeacherSyncPracticeTaskGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronous basic practice is primarily for dialogue tasks with a ground truth. Although this mode allows some deviation from the ground truth, the AI strictly requires users to follow it.
     *
     * @param request - AITeacherSyncPracticeTaskGenerateRequest
     *
     * @returns AITeacherSyncPracticeTaskGenerateResponse
     *
     * @param AITeacherSyncPracticeTaskGenerateRequest $request
     *
     * @return AITeacherSyncPracticeTaskGenerateResponse
     */
    public function aITeacherSyncPracticeTaskGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aITeacherSyncPracticeTaskGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists the services available on the Alibaba Cloud Console.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServcieListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'AliyunConsoleOpenApiQueryAliyunConsoleServcieList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunconsole/queryAliyunConsoleServcieList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the services available on the Alibaba Cloud Console.
     *
     * @returns AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServcieList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryAliyunConsoleServcieListWithOptions($headers, $runtime);
    }

    /**
     * Lists the services available in the Alibaba Cloud console.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServiceListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'AliyunConsoleOpenApiQueryAliyunConsoleServiceList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryAliyunConsoleServiceList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the services available in the Alibaba Cloud console.
     *
     * @returns AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServiceList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryAliyunConsoleServiceListWithOptions($headers, $runtime);
    }

    /**
     * Alibaba Cloud Management Console / List purchased resources.
     *
     * @param request - AliyunConsoleOpenApiQueryPaidResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AliyunConsoleOpenApiQueryPaidResourceResponse
     *
     * @param AliyunConsoleOpenApiQueryPaidResourceRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return AliyunConsoleOpenApiQueryPaidResourceResponse
     */
    public function aliyunConsoleOpenApiQueryPaidResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AliyunConsoleOpenApiQueryPaidResource',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryPaidResource',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AliyunConsoleOpenApiQueryPaidResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alibaba Cloud Management Console / List purchased resources.
     *
     * @param request - AliyunConsoleOpenApiQueryPaidResourceRequest
     *
     * @returns AliyunConsoleOpenApiQueryPaidResourceResponse
     *
     * @param AliyunConsoleOpenApiQueryPaidResourceRequest $request
     *
     * @return AliyunConsoleOpenApiQueryPaidResourceResponse
     */
    public function aliyunConsoleOpenApiQueryPaidResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryPaidResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Intelligent Correction / Oral Evaluation / Statistics / call volume.
     *
     * @param request - CountOralEvaluationStatisticsCallsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CountOralEvaluationStatisticsCallsResponse
     *
     * @param CountOralEvaluationStatisticsCallsRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return CountOralEvaluationStatisticsCallsResponse
     */
    public function countOralEvaluationStatisticsCallsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CountOralEvaluationStatisticsCalls',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/countOralEvaluationStatisticsCalls',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CountOralEvaluationStatisticsCallsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Intelligent Correction / Oral Evaluation / Statistics / call volume.
     *
     * @param request - CountOralEvaluationStatisticsCallsRequest
     *
     * @returns CountOralEvaluationStatisticsCallsResponse
     *
     * @param CountOralEvaluationStatisticsCallsRequest $request
     *
     * @return CountOralEvaluationStatisticsCallsResponse
     */
    public function countOralEvaluationStatisticsCalls($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->countOralEvaluationStatisticsCallsWithOptions($request, $headers, $runtime);
    }

    /**
     * Intelligent grading / oral evaluation / statistics / concurrency.
     *
     * @param request - CountOralEvaluationStatisticsConcurrentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CountOralEvaluationStatisticsConcurrentResponse
     *
     * @param CountOralEvaluationStatisticsConcurrentRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return CountOralEvaluationStatisticsConcurrentResponse
     */
    public function countOralEvaluationStatisticsConcurrentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CountOralEvaluationStatisticsConcurrent',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/countOralEvaluationStatisticsConcurrent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CountOralEvaluationStatisticsConcurrentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Intelligent grading / oral evaluation / statistics / concurrency.
     *
     * @param request - CountOralEvaluationStatisticsConcurrentRequest
     *
     * @returns CountOralEvaluationStatisticsConcurrentResponse
     *
     * @param CountOralEvaluationStatisticsConcurrentRequest $request
     *
     * @return CountOralEvaluationStatisticsConcurrentResponse
     */
    public function countOralEvaluationStatisticsConcurrent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->countOralEvaluationStatisticsConcurrentWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves statistics about API call errors for the oral evaluation service.
     *
     * @param request - CountOralEvaluationStatisticsErrorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CountOralEvaluationStatisticsErrorResponse
     *
     * @param CountOralEvaluationStatisticsErrorRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return CountOralEvaluationStatisticsErrorResponse
     */
    public function countOralEvaluationStatisticsErrorWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CountOralEvaluationStatisticsError',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/countOralEvaluationStatisticsError',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CountOralEvaluationStatisticsErrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves statistics about API call errors for the oral evaluation service.
     *
     * @param request - CountOralEvaluationStatisticsErrorRequest
     *
     * @returns CountOralEvaluationStatisticsErrorResponse
     *
     * @param CountOralEvaluationStatisticsErrorRequest $request
     *
     * @return CountOralEvaluationStatisticsErrorResponse
     */
    public function countOralEvaluationStatisticsError($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->countOralEvaluationStatisticsErrorWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an access warrant.
     *
     * @param request - CreateAccessWarrantRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessWarrantResponse
     *
     * @param CreateAccessWarrantRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAccessWarrantResponse
     */
    public function createAccessWarrantWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->requestSign) {
            @$body['requestSign'] = $request->requestSign;
        }

        if (null !== $request->timestamp) {
            @$body['timestamp'] = $request->timestamp;
        }

        if (null !== $request->userClientIp) {
            @$body['userClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        if (null !== $request->warrantAvailable) {
            @$body['warrantAvailable'] = $request->warrantAvailable;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAccessWarrant',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/createAccessWarrant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAccessWarrantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access warrant.
     *
     * @param request - CreateAccessWarrantRequest
     *
     * @returns CreateAccessWarrantResponse
     *
     * @param CreateAccessWarrantRequest $request
     *
     * @return CreateAccessWarrantResponse
     */
    public function createAccessWarrant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAccessWarrantWithOptions($request, $headers, $runtime);
    }

    /**
     * Alibaba Cloud console > Create Project.
     *
     * @param request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectName) {
            @$body['projectName'] = $request->projectName;
        }

        if (null !== $request->projectType) {
            @$body['projectType'] = $request->projectType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/createProject',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alibaba Cloud console > Create Project.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * Executes a workflow for Chinese composition tutoring.
     *
     * @param request - ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest $request
     * @param string[]                                                     $headers
     * @param RuntimeOptions                                               $runtime
     *
     * @return ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherChineseCompositionTutoringWorkflowRunWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->essayOutline) {
            @$body['essayOutline'] = $request->essayOutline;
        }

        if (null !== $request->essayRequirements) {
            @$body['essayRequirements'] = $request->essayRequirements;
        }

        if (null !== $request->essayTopic) {
            @$body['essayTopic'] = $request->essayTopic;
        }

        if (null !== $request->essayType) {
            @$body['essayType'] = $request->essayType;
        }

        if (null !== $request->essayWordCount) {
            @$body['essayWordCount'] = $request->essayWordCount;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherChineseCompositionTutoringWorkflowRun',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/chineseCompositionTutoring/workflowRun',
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

                yield ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse::fromMap([
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
     * Executes a workflow for Chinese composition tutoring.
     *
     * @param request - ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest $request
     * @param string[]                                                     $headers
     * @param RuntimeOptions                                               $runtime
     *
     * @return ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherChineseCompositionTutoringWorkflowRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->essayOutline) {
            @$body['essayOutline'] = $request->essayOutline;
        }

        if (null !== $request->essayRequirements) {
            @$body['essayRequirements'] = $request->essayRequirements;
        }

        if (null !== $request->essayTopic) {
            @$body['essayTopic'] = $request->essayTopic;
        }

        if (null !== $request->essayType) {
            @$body['essayType'] = $request->essayType;
        }

        if (null !== $request->essayWordCount) {
            @$body['essayWordCount'] = $request->essayWordCount;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherChineseCompositionTutoringWorkflowRun',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/chineseCompositionTutoring/workflowRun',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a workflow for Chinese composition tutoring.
     *
     * @param request - ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest
     *
     * @returns ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest $request
     *
     * @return ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherChineseCompositionTutoringWorkflowRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherChineseCompositionTutoringWorkflowRunWithOptions($request, $headers, $runtime);
    }

    /**
     * English Composition Tutoring.
     *
     * @param request - ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest $request
     * @param string[]                                                     $headers
     * @param RuntimeOptions                                               $runtime
     *
     * @return ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherEnglishCompositionTutoringWorkflowRunWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->essayOutline) {
            @$body['essayOutline'] = $request->essayOutline;
        }

        if (null !== $request->essayRequirements) {
            @$body['essayRequirements'] = $request->essayRequirements;
        }

        if (null !== $request->essayTopic) {
            @$body['essayTopic'] = $request->essayTopic;
        }

        if (null !== $request->essayType) {
            @$body['essayType'] = $request->essayType;
        }

        if (null !== $request->essayWordCount) {
            @$body['essayWordCount'] = $request->essayWordCount;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherEnglishCompositionTutoringWorkflowRun',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/englishCompositionTutoring/workflowRun',
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

                yield ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse::fromMap([
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
     * English Composition Tutoring.
     *
     * @param request - ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest $request
     * @param string[]                                                     $headers
     * @param RuntimeOptions                                               $runtime
     *
     * @return ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherEnglishCompositionTutoringWorkflowRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->essayOutline) {
            @$body['essayOutline'] = $request->essayOutline;
        }

        if (null !== $request->essayRequirements) {
            @$body['essayRequirements'] = $request->essayRequirements;
        }

        if (null !== $request->essayTopic) {
            @$body['essayTopic'] = $request->essayTopic;
        }

        if (null !== $request->essayType) {
            @$body['essayType'] = $request->essayType;
        }

        if (null !== $request->essayWordCount) {
            @$body['essayWordCount'] = $request->essayWordCount;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherEnglishCompositionTutoringWorkflowRun',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/englishCompositionTutoring/workflowRun',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * English Composition Tutoring.
     *
     * @param request - ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest
     *
     * @returns ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest $request
     *
     * @return ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherEnglishCompositionTutoringWorkflowRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherEnglishCompositionTutoringWorkflowRunWithOptions($request, $headers, $runtime);
    }

    /**
     * Answers English-related questions.
     *
     * @param request - ExecuteAITeacherEnglishParaphraseChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherEnglishParaphraseChatMessageResponse
     *
     * @param ExecuteAITeacherEnglishParaphraseChatMessageRequest $request
     * @param string[]                                            $headers
     * @param RuntimeOptions                                      $runtime
     *
     * @return ExecuteAITeacherEnglishParaphraseChatMessageResponse
     */
    public function executeAITeacherEnglishParaphraseChatMessageWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->questionId) {
            @$body['questionId'] = $request->questionId;
        }

        if (null !== $request->questionInfo) {
            @$body['questionInfo'] = $request->questionInfo;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userAnswer) {
            @$body['userAnswer'] = $request->userAnswer;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherEnglishParaphraseChatMessage',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/englishParaphrase/chatMessage',
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

                yield ExecuteAITeacherEnglishParaphraseChatMessageResponse::fromMap([
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
     * Answers English-related questions.
     *
     * @param request - ExecuteAITeacherEnglishParaphraseChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherEnglishParaphraseChatMessageResponse
     *
     * @param ExecuteAITeacherEnglishParaphraseChatMessageRequest $request
     * @param string[]                                            $headers
     * @param RuntimeOptions                                      $runtime
     *
     * @return ExecuteAITeacherEnglishParaphraseChatMessageResponse
     */
    public function executeAITeacherEnglishParaphraseChatMessageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->questionId) {
            @$body['questionId'] = $request->questionId;
        }

        if (null !== $request->questionInfo) {
            @$body['questionInfo'] = $request->questionInfo;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userAnswer) {
            @$body['userAnswer'] = $request->userAnswer;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherEnglishParaphraseChatMessage',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/englishParaphrase/chatMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherEnglishParaphraseChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Answers English-related questions.
     *
     * @param request - ExecuteAITeacherEnglishParaphraseChatMessageRequest
     *
     * @returns ExecuteAITeacherEnglishParaphraseChatMessageResponse
     *
     * @param ExecuteAITeacherEnglishParaphraseChatMessageRequest $request
     *
     * @return ExecuteAITeacherEnglishParaphraseChatMessageResponse
     */
    public function executeAITeacherEnglishParaphraseChatMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherEnglishParaphraseChatMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * Expansion dialogues are for open-ended conversations. In these conversations, the AI poses open-ended questions, but the user must stay on topic. If a user\\"s response is off-topic, the AI steers the conversation back on topic. If the user gives two consecutive off-topic responses, the AI moves on to the next topic.
     *
     * @param request - ExecuteAITeacherExpansionDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherExpansionDialogueResponse
     *
     * @param ExecuteAITeacherExpansionDialogueRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ExecuteAITeacherExpansionDialogueResponse
     */
    public function executeAITeacherExpansionDialogueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->background) {
            @$body['background'] = $request->background;
        }

        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->roleInfo) {
            @$body['roleInfo'] = $request->roleInfo;
        }

        if (null !== $request->startSentence) {
            @$body['startSentence'] = $request->startSentence;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherExpansionDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/executeExpansionTraining',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherExpansionDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Expansion dialogues are for open-ended conversations. In these conversations, the AI poses open-ended questions, but the user must stay on topic. If a user\\"s response is off-topic, the AI steers the conversation back on topic. If the user gives two consecutive off-topic responses, the AI moves on to the next topic.
     *
     * @param request - ExecuteAITeacherExpansionDialogueRequest
     *
     * @returns ExecuteAITeacherExpansionDialogueResponse
     *
     * @param ExecuteAITeacherExpansionDialogueRequest $request
     *
     * @return ExecuteAITeacherExpansionDialogueResponse
     */
    public function executeAITeacherExpansionDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * Uses context to polish the expanded text.
     *
     * @param request - ExecuteAITeacherExpansionDialogueRefineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherExpansionDialogueRefineResponse
     *
     * @param ExecuteAITeacherExpansionDialogueRefineRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return ExecuteAITeacherExpansionDialogueRefineResponse
     */
    public function executeAITeacherExpansionDialogueRefineWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->background) {
            @$body['background'] = $request->background;
        }

        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->roleInfo) {
            @$body['roleInfo'] = $request->roleInfo;
        }

        if (null !== $request->startSentence) {
            @$body['startSentence'] = $request->startSentence;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherExpansionDialogueRefine',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/refineByContext',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherExpansionDialogueRefineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uses context to polish the expanded text.
     *
     * @param request - ExecuteAITeacherExpansionDialogueRefineRequest
     *
     * @returns ExecuteAITeacherExpansionDialogueRefineResponse
     *
     * @param ExecuteAITeacherExpansionDialogueRefineRequest $request
     *
     * @return ExecuteAITeacherExpansionDialogueRefineResponse
     */
    public function executeAITeacherExpansionDialogueRefine($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueRefineWithOptions($request, $headers, $runtime);
    }

    /**
     * Further Contextual Translation Practice.
     *
     * @param request - ExecuteAITeacherExpansionDialogueTranslateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherExpansionDialogueTranslateResponse
     *
     * @param ExecuteAITeacherExpansionDialogueTranslateRequest $request
     * @param string[]                                          $headers
     * @param RuntimeOptions                                    $runtime
     *
     * @return ExecuteAITeacherExpansionDialogueTranslateResponse
     */
    public function executeAITeacherExpansionDialogueTranslateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->background) {
            @$body['background'] = $request->background;
        }

        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->roleInfo) {
            @$body['roleInfo'] = $request->roleInfo;
        }

        if (null !== $request->startSentence) {
            @$body['startSentence'] = $request->startSentence;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherExpansionDialogueTranslate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/translate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherExpansionDialogueTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Further Contextual Translation Practice.
     *
     * @param request - ExecuteAITeacherExpansionDialogueTranslateRequest
     *
     * @returns ExecuteAITeacherExpansionDialogueTranslateResponse
     *
     * @param ExecuteAITeacherExpansionDialogueTranslateRequest $request
     *
     * @return ExecuteAITeacherExpansionDialogueTranslateResponse
     */
    public function executeAITeacherExpansionDialogueTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a grammar check.
     *
     * @param request - ExecuteAITeacherGrammarCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherGrammarCheckResponse
     *
     * @param ExecuteAITeacherGrammarCheckRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ExecuteAITeacherGrammarCheckResponse
     */
    public function executeAITeacherGrammarCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherGrammarCheck',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/common/grammarChecking',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherGrammarCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a grammar check.
     *
     * @param request - ExecuteAITeacherGrammarCheckRequest
     *
     * @returns ExecuteAITeacherGrammarCheckResponse
     *
     * @param ExecuteAITeacherGrammarCheckRequest $request
     *
     * @return ExecuteAITeacherGrammarCheckResponse
     */
    public function executeAITeacherGrammarCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherGrammarCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * Practice synchronous dialogue.
     *
     * @param request - ExecuteAITeacherSyncDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherSyncDialogueResponse
     *
     * @param ExecuteAITeacherSyncDialogueRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ExecuteAITeacherSyncDialogueResponse
     */
    public function executeAITeacherSyncDialogueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherSyncDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/syncPractice/executeSyncTraining',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherSyncDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Practice synchronous dialogue.
     *
     * @param request - ExecuteAITeacherSyncDialogueRequest
     *
     * @returns ExecuteAITeacherSyncDialogueResponse
     *
     * @param ExecuteAITeacherSyncDialogueRequest $request
     *
     * @return ExecuteAITeacherSyncDialogueResponse
     */
    public function executeAITeacherSyncDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherSyncDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * You can practice contextual translation in real-time.
     *
     * @param request - ExecuteAITeacherSyncDialogueTranslateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherSyncDialogueTranslateResponse
     *
     * @param ExecuteAITeacherSyncDialogueTranslateRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return ExecuteAITeacherSyncDialogueTranslateResponse
     */
    public function executeAITeacherSyncDialogueTranslateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherSyncDialogueTranslate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/syncPractice/translate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAITeacherSyncDialogueTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can practice contextual translation in real-time.
     *
     * @param request - ExecuteAITeacherSyncDialogueTranslateRequest
     *
     * @returns ExecuteAITeacherSyncDialogueTranslateResponse
     *
     * @param ExecuteAITeacherSyncDialogueTranslateRequest $request
     *
     * @return ExecuteAITeacherSyncDialogueTranslateResponse
     */
    public function executeAITeacherSyncDialogueTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherSyncDialogueTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * Executes a dialogue turn with the Textbook Assistant.
     *
     * @param request - ExecuteTextbookAssistantDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantDialogueResponse
     *
     * @param ExecuteTextbookAssistantDialogueRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ExecuteTextbookAssistantDialogueResponse
     */
    public function executeTextbookAssistantDialogueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->userMessage) {
            @$body['userMessage'] = $request->userMessage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteDialogue',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a dialogue turn with the Textbook Assistant.
     *
     * @param request - ExecuteTextbookAssistantDialogueRequest
     *
     * @returns ExecuteTextbookAssistantDialogueResponse
     *
     * @param ExecuteTextbookAssistantDialogueRequest $request
     *
     * @return ExecuteTextbookAssistantDialogueResponse
     */
    public function executeTextbookAssistantDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * Adjusts the difficulty of the textbook assistant\\"s dialogue.
     *
     * @param request - ExecuteTextbookAssistantDifficultyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantDifficultyResponse
     *
     * @param ExecuteTextbookAssistantDifficultyRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ExecuteTextbookAssistantDifficultyResponse
     */
    public function executeTextbookAssistantDifficultyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->assistant) {
            @$body['assistant'] = $request->assistant;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantDifficulty',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteDifficulty',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantDifficultyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adjusts the difficulty of the textbook assistant\\"s dialogue.
     *
     * @param request - ExecuteTextbookAssistantDifficultyRequest
     *
     * @returns ExecuteTextbookAssistantDifficultyResponse
     *
     * @param ExecuteTextbookAssistantDifficultyRequest $request
     *
     * @return ExecuteTextbookAssistantDifficultyResponse
     */
    public function executeTextbookAssistantDifficulty($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantDifficultyWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a grammar check.
     *
     * @param request - ExecuteTextbookAssistantGrammarCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantGrammarCheckResponse
     *
     * @param ExecuteTextbookAssistantGrammarCheckRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ExecuteTextbookAssistantGrammarCheckResponse
     */
    public function executeTextbookAssistantGrammarCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->user) {
            @$body['user'] = $request->user;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantGrammarCheck',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteGrammarCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantGrammarCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a grammar check.
     *
     * @param request - ExecuteTextbookAssistantGrammarCheckRequest
     *
     * @returns ExecuteTextbookAssistantGrammarCheckResponse
     *
     * @param ExecuteTextbookAssistantGrammarCheckRequest $request
     *
     * @return ExecuteTextbookAssistantGrammarCheckResponse
     */
    public function executeTextbookAssistantGrammarCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantGrammarCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * Refines a sentence based on the conversational context.
     *
     * @param request - ExecuteTextbookAssistantRefineByContextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantRefineByContextResponse
     *
     * @param ExecuteTextbookAssistantRefineByContextRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return ExecuteTextbookAssistantRefineByContextResponse
     */
    public function executeTextbookAssistantRefineByContextWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->user) {
            @$body['user'] = $request->user;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantRefineByContext',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/RefineByContext',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantRefineByContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refines a sentence based on the conversational context.
     *
     * @param request - ExecuteTextbookAssistantRefineByContextRequest
     *
     * @returns ExecuteTextbookAssistantRefineByContextResponse
     *
     * @param ExecuteTextbookAssistantRefineByContextRequest $request
     *
     * @return ExecuteTextbookAssistantRefineByContextResponse
     */
    public function executeTextbookAssistantRefineByContext($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantRefineByContextWithOptions($request, $headers, $runtime);
    }

    /**
     * This operation retries a conversation.
     *
     * @param request - ExecuteTextbookAssistantRetryConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantRetryConversationResponse
     *
     * @param ExecuteTextbookAssistantRetryConversationRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return ExecuteTextbookAssistantRetryConversationResponse
     */
    public function executeTextbookAssistantRetryConversationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistant) {
            @$body['assistant'] = $request->assistant;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantRetryConversation',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/RetryConversation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantRetryConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation retries a conversation.
     *
     * @param request - ExecuteTextbookAssistantRetryConversationRequest
     *
     * @returns ExecuteTextbookAssistantRetryConversationResponse
     *
     * @param ExecuteTextbookAssistantRetryConversationRequest $request
     *
     * @return ExecuteTextbookAssistantRetryConversationResponse
     */
    public function executeTextbookAssistantRetryConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantRetryConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * Starts a conversation and returns a streaming output.
     *
     * @param request - ExecuteTextbookAssistantSseDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantSseDialogueResponse
     *
     * @param ExecuteTextbookAssistantSseDialogueRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ExecuteTextbookAssistantSseDialogueResponse
     */
    public function executeTextbookAssistantSseDialogueWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->userMessage) {
            @$body['userMessage'] = $request->userMessage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantSseDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteSseDialogue',
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

                yield ExecuteTextbookAssistantSseDialogueResponse::fromMap([
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
     * Starts a conversation and returns a streaming output.
     *
     * @param request - ExecuteTextbookAssistantSseDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantSseDialogueResponse
     *
     * @param ExecuteTextbookAssistantSseDialogueRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ExecuteTextbookAssistantSseDialogueResponse
     */
    public function executeTextbookAssistantSseDialogueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->userMessage) {
            @$body['userMessage'] = $request->userMessage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantSseDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteSseDialogue',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantSseDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a conversation and returns a streaming output.
     *
     * @param request - ExecuteTextbookAssistantSseDialogueRequest
     *
     * @returns ExecuteTextbookAssistantSseDialogueResponse
     *
     * @param ExecuteTextbookAssistantSseDialogueRequest $request
     *
     * @return ExecuteTextbookAssistantSseDialogueResponse
     */
    public function executeTextbookAssistantSseDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantSseDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * Starts a conversation with the AI teacher. The teacher then sends the initial message.
     *
     * @param request - ExecuteTextbookAssistantStartConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantStartConversationResponse
     *
     * @param ExecuteTextbookAssistantStartConversationRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return ExecuteTextbookAssistantStartConversationResponse
     */
    public function executeTextbookAssistantStartConversationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->articleId) {
            @$body['articleId'] = $request->articleId;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantStartConversation',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/StartConversation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantStartConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a conversation with the AI teacher. The teacher then sends the initial message.
     *
     * @param request - ExecuteTextbookAssistantStartConversationRequest
     *
     * @returns ExecuteTextbookAssistantStartConversationResponse
     *
     * @param ExecuteTextbookAssistantStartConversationRequest $request
     *
     * @return ExecuteTextbookAssistantStartConversationResponse
     */
    public function executeTextbookAssistantStartConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantStartConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * Generates a suggested response from the textbook-based AI teacher.
     *
     * @param request - ExecuteTextbookAssistantSuggestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantSuggestionResponse
     *
     * @param ExecuteTextbookAssistantSuggestionRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ExecuteTextbookAssistantSuggestionResponse
     */
    public function executeTextbookAssistantSuggestionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistant) {
            @$body['assistant'] = $request->assistant;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantSuggestion',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/Suggestion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a suggested response from the textbook-based AI teacher.
     *
     * @param request - ExecuteTextbookAssistantSuggestionRequest
     *
     * @returns ExecuteTextbookAssistantSuggestionResponse
     *
     * @param ExecuteTextbookAssistantSuggestionRequest $request
     *
     * @return ExecuteTextbookAssistantSuggestionResponse
     */
    public function executeTextbookAssistantSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * Translates the content of a message.
     *
     * @param request - ExecuteTextbookAssistantTranslateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantTranslateResponse
     *
     * @param ExecuteTextbookAssistantTranslateRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ExecuteTextbookAssistantTranslateResponse
     */
    public function executeTextbookAssistantTranslateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistant) {
            @$body['assistant'] = $request->assistant;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantTranslate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteTranslate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTextbookAssistantTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Translates the content of a message.
     *
     * @param request - ExecuteTextbookAssistantTranslateRequest
     *
     * @returns ExecuteTextbookAssistantTranslateResponse
     *
     * @param ExecuteTextbookAssistantTranslateRequest $request
     *
     * @return ExecuteTextbookAssistantTranslateResponse
     */
    public function executeTextbookAssistantTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * Supplemental Practice Assistant.
     *
     * @param request - GetAITeacherExpansionDialogueSuggestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAITeacherExpansionDialogueSuggestionResponse
     *
     * @param GetAITeacherExpansionDialogueSuggestionRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return GetAITeacherExpansionDialogueSuggestionResponse
     */
    public function getAITeacherExpansionDialogueSuggestionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->background) {
            @$body['background'] = $request->background;
        }

        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->roleInfo) {
            @$body['roleInfo'] = $request->roleInfo;
        }

        if (null !== $request->startSentence) {
            @$body['startSentence'] = $request->startSentence;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAITeacherExpansionDialogueSuggestion',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/suggestion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAITeacherExpansionDialogueSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Supplemental Practice Assistant.
     *
     * @param request - GetAITeacherExpansionDialogueSuggestionRequest
     *
     * @returns GetAITeacherExpansionDialogueSuggestionResponse
     *
     * @param GetAITeacherExpansionDialogueSuggestionRequest $request
     *
     * @return GetAITeacherExpansionDialogueSuggestionResponse
     */
    public function getAITeacherExpansionDialogueSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAITeacherExpansionDialogueSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * Sync Practice Assistant.
     *
     * @param request - GetAITeacherSyncDialogueSuggestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAITeacherSyncDialogueSuggestionResponse
     *
     * @param GetAITeacherSyncDialogueSuggestionRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return GetAITeacherSyncDialogueSuggestionResponse
     */
    public function getAITeacherSyncDialogueSuggestionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAITeacherSyncDialogueSuggestion',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/syncPractice/suggestion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAITeacherSyncDialogueSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sync Practice Assistant.
     *
     * @param request - GetAITeacherSyncDialogueSuggestionRequest
     *
     * @returns GetAITeacherSyncDialogueSuggestionResponse
     *
     * @param GetAITeacherSyncDialogueSuggestionRequest $request
     *
     * @return GetAITeacherSyncDialogueSuggestionResponse
     */
    public function getAITeacherSyncDialogueSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAITeacherSyncDialogueSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains an authorization token to make API calls.
     *
     * @param request - GetTextbookAssistantTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextbookAssistantTokenResponse
     *
     * @param GetTextbookAssistantTokenRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTextbookAssistantTokenResponse
     */
    public function getTextbookAssistantTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceId) {
            @$body['deviceId'] = $request->deviceId;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTextbookAssistantToken',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/GetToken',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTextbookAssistantTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains an authorization token to make API calls.
     *
     * @param request - GetTextbookAssistantTokenRequest
     *
     * @returns GetTextbookAssistantTokenResponse
     *
     * @param GetTextbookAssistantTokenRequest $request
     *
     * @return GetTextbookAssistantTokenResponse
     */
    public function getTextbookAssistantToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextbookAssistantTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * Batch get article details.
     *
     * @param request - ListTextbookAssistantArticleDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantArticleDetailsResponse
     *
     * @param ListTextbookAssistantArticleDetailsRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ListTextbookAssistantArticleDetailsResponse
     */
    public function listTextbookAssistantArticleDetailsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->articleIdList) {
            @$body['articleIdList'] = $request->articleIdList;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantArticleDetails',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListArticleDetails',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTextbookAssistantArticleDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch get article details.
     *
     * @param request - ListTextbookAssistantArticleDetailsRequest
     *
     * @returns ListTextbookAssistantArticleDetailsResponse
     *
     * @param ListTextbookAssistantArticleDetailsRequest $request
     *
     * @return ListTextbookAssistantArticleDetailsResponse
     */
    public function listTextbookAssistantArticleDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantArticleDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * Returns a list of articles.
     *
     * @param request - ListTextbookAssistantArticlesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantArticlesResponse
     *
     * @param ListTextbookAssistantArticlesRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListTextbookAssistantArticlesResponse
     */
    public function listTextbookAssistantArticlesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantArticles',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListArticles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTextbookAssistantArticlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns a list of articles.
     *
     * @param request - ListTextbookAssistantArticlesRequest
     *
     * @returns ListTextbookAssistantArticlesResponse
     *
     * @param ListTextbookAssistantArticlesRequest $request
     *
     * @return ListTextbookAssistantArticlesResponse
     */
    public function listTextbookAssistantArticles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantArticlesWithOptions($request, $headers, $runtime);
    }

    /**
     * Gets the table of contents of a book.
     *
     * @param request - ListTextbookAssistantBookDirectoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantBookDirectoriesResponse
     *
     * @param ListTextbookAssistantBookDirectoriesRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ListTextbookAssistantBookDirectoriesResponse
     */
    public function listTextbookAssistantBookDirectoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->bookId) {
            @$body['bookId'] = $request->bookId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantBookDirectories',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListBookDirectories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTextbookAssistantBookDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the table of contents of a book.
     *
     * @param request - ListTextbookAssistantBookDirectoriesRequest
     *
     * @returns ListTextbookAssistantBookDirectoriesResponse
     *
     * @param ListTextbookAssistantBookDirectoriesRequest $request
     *
     * @return ListTextbookAssistantBookDirectoriesResponse
     */
    public function listTextbookAssistantBookDirectories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantBookDirectoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of books for a specified grade.
     *
     * @param request - ListTextbookAssistantBooksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantBooksResponse
     *
     * @param ListTextbookAssistantBooksRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListTextbookAssistantBooksResponse
     */
    public function listTextbookAssistantBooksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->bookId) {
            @$body['bookId'] = $request->bookId;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->volume) {
            @$body['volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantBooks',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListBooks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTextbookAssistantBooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of books for a specified grade.
     *
     * @param request - ListTextbookAssistantBooksRequest
     *
     * @returns ListTextbookAssistantBooksResponse
     *
     * @param ListTextbookAssistantBooksRequest $request
     *
     * @return ListTextbookAssistantBooksResponse
     */
    public function listTextbookAssistantBooks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantBooksWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the available grades and volumes for the Textbook Assistant.
     *
     * @param request - ListTextbookAssistantGradeVolumesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantGradeVolumesResponse
     *
     * @param ListTextbookAssistantGradeVolumesRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListTextbookAssistantGradeVolumesResponse
     */
    public function listTextbookAssistantGradeVolumesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantGradeVolumes',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListGradeVolumes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTextbookAssistantGradeVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the available grades and volumes for the Textbook Assistant.
     *
     * @param request - ListTextbookAssistantGradeVolumesRequest
     *
     * @returns ListTextbookAssistantGradeVolumesResponse
     *
     * @param ListTextbookAssistantGradeVolumesRequest $request
     *
     * @return ListTextbookAssistantGradeVolumesResponse
     */
    public function listTextbookAssistantGradeVolumes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantGradeVolumesWithOptions($request, $headers, $runtime);
    }

    /**
     * Get Article Details.
     *
     * @param request - ListTextbookAssistantSceneDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantSceneDetailsResponse
     *
     * @param ListTextbookAssistantSceneDetailsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListTextbookAssistantSceneDetailsResponse
     */
    public function listTextbookAssistantSceneDetailsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->sceneIdList) {
            @$body['sceneIdList'] = $request->sceneIdList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantSceneDetails',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListSceneDetails',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTextbookAssistantSceneDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Article Details.
     *
     * @param request - ListTextbookAssistantSceneDetailsRequest
     *
     * @returns ListTextbookAssistantSceneDetailsResponse
     *
     * @param ListTextbookAssistantSceneDetailsRequest $request
     *
     * @return ListTextbookAssistantSceneDetailsResponse
     */
    public function listTextbookAssistantSceneDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantSceneDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * Binds model groups to departments in batches.
     *
     * @remarks
     * Binds model groups to departments in batches.
     *
     * @param request - ModelRouterBatchBindModelGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterBatchBindModelGroupResponse
     *
     * @param ModelRouterBatchBindModelGroupRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ModelRouterBatchBindModelGroupResponse
     */
    public function modelRouterBatchBindModelGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowedModelGroupConfig) {
            @$body['allowedModelGroupConfig'] = $request->allowedModelGroupConfig;
        }

        if (null !== $request->clientIdList) {
            @$body['clientIdList'] = $request->clientIdList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterBatchBindModelGroup',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/batch-bind-model-group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterBatchBindModelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds model groups to departments in batches.
     *
     * @remarks
     * Binds model groups to departments in batches.
     *
     * @param request - ModelRouterBatchBindModelGroupRequest
     *
     * @returns ModelRouterBatchBindModelGroupResponse
     *
     * @param ModelRouterBatchBindModelGroupRequest $request
     *
     * @return ModelRouterBatchBindModelGroupResponse
     */
    public function modelRouterBatchBindModelGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterBatchBindModelGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates API keys in batches for members under a department in organization management.
     *
     * @param request - ModelRouterBatchCreateMemberApiKeysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterBatchCreateMemberApiKeysResponse
     *
     * @param string                                     $id
     * @param ModelRouterBatchCreateMemberApiKeysRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ModelRouterBatchCreateMemberApiKeysResponse
     */
    public function modelRouterBatchCreateMemberApiKeysWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expireAt) {
            @$body['expireAt'] = $request->expireAt;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->userIds) {
            @$body['userIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterBatchCreateMemberApiKeys',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/member-apikeys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterBatchCreateMemberApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates API keys in batches for members under a department in organization management.
     *
     * @param request - ModelRouterBatchCreateMemberApiKeysRequest
     *
     * @returns ModelRouterBatchCreateMemberApiKeysResponse
     *
     * @param string                                     $id
     * @param ModelRouterBatchCreateMemberApiKeysRequest $request
     *
     * @return ModelRouterBatchCreateMemberApiKeysResponse
     */
    public function modelRouterBatchCreateMemberApiKeys($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterBatchCreateMemberApiKeysWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Manages models by performing batch model creation.
     *
     * @param request - ModelRouterBatchCreateModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterBatchCreateModelResponse
     *
     * @param ModelRouterBatchCreateModelRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterBatchCreateModelResponse
     */
    public function modelRouterBatchCreateModelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->baseUrl) {
            @$body['baseUrl'] = $request->baseUrl;
        }

        if (null !== $request->models) {
            @$body['models'] = $request->models;
        }

        if (null !== $request->symbol) {
            @$body['symbol'] = $request->symbol;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterBatchCreateModel',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/models/batch',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterBatchCreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manages models by performing batch model creation.
     *
     * @param request - ModelRouterBatchCreateModelRequest
     *
     * @returns ModelRouterBatchCreateModelResponse
     *
     * @param ModelRouterBatchCreateModelRequest $request
     *
     * @return ModelRouterBatchCreateModelResponse
     */
    public function modelRouterBatchCreateModel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterBatchCreateModelWithOptions($request, $headers, $runtime);
    }

    /**
     * Disables API keys in batches for members under a department in organization management.
     *
     * @param request - ModelRouterBatchDisableMemberApiKeysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterBatchDisableMemberApiKeysResponse
     *
     * @param string                                      $id
     * @param ModelRouterBatchDisableMemberApiKeysRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ModelRouterBatchDisableMemberApiKeysResponse
     */
    public function modelRouterBatchDisableMemberApiKeysWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userIds) {
            @$body['userIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterBatchDisableMemberApiKeys',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/member-apikeys/disable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterBatchDisableMemberApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables API keys in batches for members under a department in organization management.
     *
     * @param request - ModelRouterBatchDisableMemberApiKeysRequest
     *
     * @returns ModelRouterBatchDisableMemberApiKeysResponse
     *
     * @param string                                      $id
     * @param ModelRouterBatchDisableMemberApiKeysRequest $request
     *
     * @return ModelRouterBatchDisableMemberApiKeysResponse
     */
    public function modelRouterBatchDisableMemberApiKeys($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterBatchDisableMemberApiKeysWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Batch resets member authorizations to inherit under a department in organization management.
     *
     * @param request - ModelRouterBatchResetMemberAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterBatchResetMemberAuthorizationResponse
     *
     * @param string                                          $id
     * @param ModelRouterBatchResetMemberAuthorizationRequest $request
     * @param string[]                                        $headers
     * @param RuntimeOptions                                  $runtime
     *
     * @return ModelRouterBatchResetMemberAuthorizationResponse
     */
    public function modelRouterBatchResetMemberAuthorizationWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userIds) {
            @$body['userIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterBatchResetMemberAuthorization',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/member-authorizations/reset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterBatchResetMemberAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch resets member authorizations to inherit under a department in organization management.
     *
     * @param request - ModelRouterBatchResetMemberAuthorizationRequest
     *
     * @returns ModelRouterBatchResetMemberAuthorizationResponse
     *
     * @param string                                          $id
     * @param ModelRouterBatchResetMemberAuthorizationRequest $request
     *
     * @return ModelRouterBatchResetMemberAuthorizationResponse
     */
    public function modelRouterBatchResetMemberAuthorization($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterBatchResetMemberAuthorizationWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Batch sets member authorization under a department.
     *
     * @param request - ModelRouterBatchSetMemberAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterBatchSetMemberAuthorizationResponse
     *
     * @param string                                        $id
     * @param ModelRouterBatchSetMemberAuthorizationRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return ModelRouterBatchSetMemberAuthorizationResponse
     */
    public function modelRouterBatchSetMemberAuthorizationWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowedModelGroupConfig) {
            @$body['allowedModelGroupConfig'] = $request->allowedModelGroupConfig;
        }

        if (null !== $request->userIdList) {
            @$body['userIdList'] = $request->userIdList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterBatchSetMemberAuthorization',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/member-authorizations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterBatchSetMemberAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch sets member authorization under a department.
     *
     * @param request - ModelRouterBatchSetMemberAuthorizationRequest
     *
     * @returns ModelRouterBatchSetMemberAuthorizationResponse
     *
     * @param string                                        $id
     * @param ModelRouterBatchSetMemberAuthorizationRequest $request
     *
     * @return ModelRouterBatchSetMemberAuthorizationResponse
     */
    public function modelRouterBatchSetMemberAuthorization($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterBatchSetMemberAuthorizationWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the usage monitoring tab configuration.
     *
     * @param request - ModelRouterBillingCostTabsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterBillingCostTabsResponse
     *
     * @param ModelRouterBillingCostTabsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModelRouterBillingCostTabsResponse
     */
    public function modelRouterBillingCostTabsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterBillingCostTabs',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/cost/tabs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterBillingCostTabsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the usage monitoring tab configuration.
     *
     * @param request - ModelRouterBillingCostTabsRequest
     *
     * @returns ModelRouterBillingCostTabsResponse
     *
     * @param ModelRouterBillingCostTabsRequest $request
     *
     * @return ModelRouterBillingCostTabsResponse
     */
    public function modelRouterBillingCostTabs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterBillingCostTabsWithOptions($request, $headers, $runtime);
    }

    /**
     * Initiates a chat conversation.
     *
     * @param request - ModelRouterChatCompletionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterChatCompletionsResponse
     *
     * @param ModelRouterChatCompletionsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModelRouterChatCompletionsResponse
     */
    public function modelRouterChatCompletionsWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ModelRouterChatCompletions',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/chat/completions',
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

                yield ModelRouterChatCompletionsResponse::fromMap([
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
     * Initiates a chat conversation.
     *
     * @param request - ModelRouterChatCompletionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterChatCompletionsResponse
     *
     * @param ModelRouterChatCompletionsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModelRouterChatCompletionsResponse
     */
    public function modelRouterChatCompletionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ModelRouterChatCompletions',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/chat/completions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterChatCompletionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a chat conversation.
     *
     * @param request - ModelRouterChatCompletionsRequest
     *
     * @returns ModelRouterChatCompletionsResponse
     *
     * @param ModelRouterChatCompletionsRequest $request
     *
     * @return ModelRouterChatCompletionsResponse
     */
    public function modelRouterChatCompletions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterChatCompletionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Enables balance-based throttling for a department.
     *
     * @param request - ModelRouterConfigureClientBalanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterConfigureClientBalanceResponse
     *
     * @param string                                   $id
     * @param ModelRouterConfigureClientBalanceRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ModelRouterConfigureClientBalanceResponse
     */
    public function modelRouterConfigureClientBalanceWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        if (null !== $request->enableBalance) {
            @$body['enableBalance'] = $request->enableBalance;
        }

        if (null !== $request->initialBalance) {
            @$body['initialBalance'] = $request->initialBalance;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterConfigureClientBalance',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterConfigureClientBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables balance-based throttling for a department.
     *
     * @param request - ModelRouterConfigureClientBalanceRequest
     *
     * @returns ModelRouterConfigureClientBalanceResponse
     *
     * @param string                                   $id
     * @param ModelRouterConfigureClientBalanceRequest $request
     *
     * @return ModelRouterConfigureClientBalanceResponse
     */
    public function modelRouterConfigureClientBalance($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterConfigureClientBalanceWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Configures the sub-wallet balance of a member in an organization.
     *
     * @param request - ModelRouterConfigureMemberBalanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterConfigureMemberBalanceResponse
     *
     * @param string                                   $clientId
     * @param string                                   $id
     * @param ModelRouterConfigureMemberBalanceRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ModelRouterConfigureMemberBalanceResponse
     */
    public function modelRouterConfigureMemberBalanceWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        if (null !== $request->enableBalance) {
            @$body['enableBalance'] = $request->enableBalance;
        }

        if (null !== $request->initialBalance) {
            @$body['initialBalance'] = $request->initialBalance;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterConfigureMemberBalance',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterConfigureMemberBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the sub-wallet balance of a member in an organization.
     *
     * @param request - ModelRouterConfigureMemberBalanceRequest
     *
     * @returns ModelRouterConfigureMemberBalanceResponse
     *
     * @param string                                   $clientId
     * @param string                                   $id
     * @param ModelRouterConfigureMemberBalanceRequest $request
     *
     * @return ModelRouterConfigureMemberBalanceResponse
     */
    public function modelRouterConfigureMemberBalance($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterConfigureMemberBalanceWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Copies an API key.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCopyApiKeyResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModelRouterCopyApiKeyResponse
     */
    public function modelRouterCopyApiKeyWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterCopyApiKey',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/apikeys/' . Url::percentEncode($id) . '/copy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCopyApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies an API key.
     *
     * @returns ModelRouterCopyApiKeyResponse
     *
     * @param string $id
     *
     * @return ModelRouterCopyApiKeyResponse
     */
    public function modelRouterCopyApiKey($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCopyApiKeyWithOptions($id, $headers, $runtime);
    }

    /**
     * Creates an API key.
     *
     * @param request - ModelRouterCreateApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateApiKeyResponse
     *
     * @param ModelRouterCreateApiKeyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ModelRouterCreateApiKeyResponse
     */
    public function modelRouterCreateApiKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateApiKey',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/apikeys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API key.
     *
     * @param request - ModelRouterCreateApiKeyRequest
     *
     * @returns ModelRouterCreateApiKeyResponse
     *
     * @param ModelRouterCreateApiKeyRequest $request
     *
     * @return ModelRouterCreateApiKeyResponse
     */
    public function modelRouterCreateApiKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateApiKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * Manages customers or creates a balance transaction.
     *
     * @param request - ModelRouterCreateBalanceTransactionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateBalanceTransactionResponse
     *
     * @param string                                     $id
     * @param ModelRouterCreateBalanceTransactionRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ModelRouterCreateBalanceTransactionResponse
     */
    public function modelRouterCreateBalanceTransactionWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amount) {
            @$body['amount'] = $request->amount;
        }

        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        if (null !== $request->idempotencyKey) {
            @$body['idempotencyKey'] = $request->idempotencyKey;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateBalanceTransaction',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance/transactions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateBalanceTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manages customers or creates a balance transaction.
     *
     * @param request - ModelRouterCreateBalanceTransactionRequest
     *
     * @returns ModelRouterCreateBalanceTransactionResponse
     *
     * @param string                                     $id
     * @param ModelRouterCreateBalanceTransactionRequest $request
     *
     * @return ModelRouterCreateBalanceTransactionResponse
     */
    public function modelRouterCreateBalanceTransaction($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateBalanceTransactionWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Creates a billing rule.
     *
     * @param request - ModelRouterCreateBillingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateBillingRuleResponse
     *
     * @param ModelRouterCreateBillingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ModelRouterCreateBillingRuleResponse
     */
    public function modelRouterCreateBillingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->billingType) {
            @$body['billingType'] = $request->billingType;
        }

        if (null !== $request->effectiveTime) {
            @$body['effectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->expireTime) {
            @$body['expireTime'] = $request->expireTime;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->pricingConfig) {
            @$body['pricingConfig'] = $request->pricingConfig;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateBillingRule',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateBillingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a billing rule.
     *
     * @param request - ModelRouterCreateBillingRuleRequest
     *
     * @returns ModelRouterCreateBillingRuleResponse
     *
     * @param ModelRouterCreateBillingRuleRequest $request
     *
     * @return ModelRouterCreateBillingRuleResponse
     */
    public function modelRouterCreateBillingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateBillingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a customer.
     *
     * @param request - ModelRouterCreateClientRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateClientResponse
     *
     * @param ModelRouterCreateClientRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ModelRouterCreateClientResponse
     */
    public function modelRouterCreateClientWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->address) {
            @$body['address'] = $request->address;
        }

        if (null !== $request->allowedModelGroupConfig) {
            @$body['allowedModelGroupConfig'] = $request->allowedModelGroupConfig;
        }

        if (null !== $request->allowedModels) {
            @$body['allowedModels'] = $request->allowedModels;
        }

        if (null !== $request->contact) {
            @$body['contact'] = $request->contact;
        }

        if (null !== $request->discount) {
            @$body['discount'] = $request->discount;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parentId) {
            @$body['parentId'] = $request->parentId;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateClient',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a customer.
     *
     * @param request - ModelRouterCreateClientRequest
     *
     * @returns ModelRouterCreateClientResponse
     *
     * @param ModelRouterCreateClientRequest $request
     *
     * @return ModelRouterCreateClientResponse
     */
    public function modelRouterCreateClient($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateClientWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a conversation.
     *
     * @param request - ModelRouterCreateConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateConversationResponse
     *
     * @param ModelRouterCreateConversationRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ModelRouterCreateConversationResponse
     */
    public function modelRouterCreateConversationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chatData) {
            @$body['chatData'] = $request->chatData;
        }

        if (null !== $request->modelIds) {
            @$body['modelIds'] = $request->modelIds;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateConversation',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/conversations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a conversation.
     *
     * @param request - ModelRouterCreateConversationRequest
     *
     * @returns ModelRouterCreateConversationResponse
     *
     * @param ModelRouterCreateConversationRequest $request
     *
     * @return ModelRouterCreateConversationResponse
     */
    public function modelRouterCreateConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an API key for a member in the organization.
     *
     * @param request - ModelRouterCreateMemberApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateMemberApiKeyResponse
     *
     * @param string                               $clientId
     * @param string                               $id
     * @param ModelRouterCreateMemberApiKeyRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ModelRouterCreateMemberApiKeyResponse
     */
    public function modelRouterCreateMemberApiKeyWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expireAt) {
            @$body['expireAt'] = $request->expireAt;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateMemberApiKey',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/apikeys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateMemberApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API key for a member in the organization.
     *
     * @param request - ModelRouterCreateMemberApiKeyRequest
     *
     * @returns ModelRouterCreateMemberApiKeyResponse
     *
     * @param string                               $clientId
     * @param string                               $id
     * @param ModelRouterCreateMemberApiKeyRequest $request
     *
     * @return ModelRouterCreateMemberApiKeyResponse
     */
    public function modelRouterCreateMemberApiKey($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateMemberApiKeyWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Performs a balance transaction on a member sub-wallet in organization management.
     *
     * @param request - ModelRouterCreateMemberBalanceTransactionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateMemberBalanceTransactionResponse
     *
     * @param string                                           $clientId
     * @param string                                           $id
     * @param ModelRouterCreateMemberBalanceTransactionRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return ModelRouterCreateMemberBalanceTransactionResponse
     */
    public function modelRouterCreateMemberBalanceTransactionWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amount) {
            @$body['amount'] = $request->amount;
        }

        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        if (null !== $request->idempotencyKey) {
            @$body['idempotencyKey'] = $request->idempotencyKey;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateMemberBalanceTransaction',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance/transactions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateMemberBalanceTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a balance transaction on a member sub-wallet in organization management.
     *
     * @param request - ModelRouterCreateMemberBalanceTransactionRequest
     *
     * @returns ModelRouterCreateMemberBalanceTransactionResponse
     *
     * @param string                                           $clientId
     * @param string                                           $id
     * @param ModelRouterCreateMemberBalanceTransactionRequest $request
     *
     * @return ModelRouterCreateMemberBalanceTransactionResponse
     */
    public function modelRouterCreateMemberBalanceTransaction($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateMemberBalanceTransactionWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Creates a balance subscription for a member in an organization.
     *
     * @param request - ModelRouterCreateMemberSubscriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateMemberSubscriptionResponse
     *
     * @param string                                     $clientId
     * @param string                                     $id
     * @param ModelRouterCreateMemberSubscriptionRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ModelRouterCreateMemberSubscriptionResponse
     */
    public function modelRouterCreateMemberSubscriptionWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amount) {
            @$body['amount'] = $request->amount;
        }

        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        if (null !== $request->effectiveTime) {
            @$body['effectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->idempotencyKey) {
            @$body['idempotencyKey'] = $request->idempotencyKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateMemberSubscription',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance/subscription',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateMemberSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a balance subscription for a member in an organization.
     *
     * @param request - ModelRouterCreateMemberSubscriptionRequest
     *
     * @returns ModelRouterCreateMemberSubscriptionResponse
     *
     * @param string                                     $clientId
     * @param string                                     $id
     * @param ModelRouterCreateMemberSubscriptionRequest $request
     *
     * @return ModelRouterCreateMemberSubscriptionResponse
     */
    public function modelRouterCreateMemberSubscription($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateMemberSubscriptionWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Performs model creation.
     *
     * @param request - ModelRouterCreateModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateModelResponse
     *
     * @param ModelRouterCreateModelRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ModelRouterCreateModelResponse
     */
    public function modelRouterCreateModelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->baseUrl) {
            @$body['baseUrl'] = $request->baseUrl;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->extensions) {
            @$body['extensions'] = $request->extensions;
        }

        if (null !== $request->inOut) {
            @$body['inOut'] = $request->inOut;
        }

        if (null !== $request->maxInputLength) {
            @$body['maxInputLength'] = $request->maxInputLength;
        }

        if (null !== $request->maxOutputLength) {
            @$body['maxOutputLength'] = $request->maxOutputLength;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->modelType) {
            @$body['modelType'] = $request->modelType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->symbol) {
            @$body['symbol'] = $request->symbol;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateModel',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/models',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs model creation.
     *
     * @param request - ModelRouterCreateModelRequest
     *
     * @returns ModelRouterCreateModelResponse
     *
     * @param ModelRouterCreateModelRequest $request
     *
     * @return ModelRouterCreateModelResponse
     */
    public function modelRouterCreateModel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateModelWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a manual model group.
     *
     * @remarks
     * Creates a manual model group.
     *
     * @param request - ModelRouterCreateModelGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateModelGroupResponse
     *
     * @param ModelRouterCreateModelGroupRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterCreateModelGroupResponse
     */
    public function modelRouterCreateModelGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelList) {
            @$body['modelList'] = $request->modelList;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateModelGroup',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/model-groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateModelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a manual model group.
     *
     * @remarks
     * Creates a manual model group.
     *
     * @param request - ModelRouterCreateModelGroupRequest
     *
     * @returns ModelRouterCreateModelGroupResponse
     *
     * @param ModelRouterCreateModelGroupRequest $request
     *
     * @return ModelRouterCreateModelGroupResponse
     */
    public function modelRouterCreateModelGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateModelGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a periodic recharge subscription for customer management.
     *
     * @param request - ModelRouterCreateSubscriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateSubscriptionResponse
     *
     * @param string                               $id
     * @param ModelRouterCreateSubscriptionRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ModelRouterCreateSubscriptionResponse
     */
    public function modelRouterCreateSubscriptionWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        if (null !== $request->effectiveTime) {
            @$body['effectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->idempotencyKey) {
            @$body['idempotencyKey'] = $request->idempotencyKey;
        }

        if (null !== $request->subscriptionAmount) {
            @$body['subscriptionAmount'] = $request->subscriptionAmount;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateSubscription',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance/subscription',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a periodic recharge subscription for customer management.
     *
     * @param request - ModelRouterCreateSubscriptionRequest
     *
     * @returns ModelRouterCreateSubscriptionResponse
     *
     * @param string                               $id
     * @param ModelRouterCreateSubscriptionRequest $request
     *
     * @return ModelRouterCreateSubscriptionResponse
     */
    public function modelRouterCreateSubscription($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateSubscriptionWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Creates a user.
     *
     * @remarks
     * Creates a user.
     *
     * @param request - ModelRouterCreateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterCreateUserResponse
     *
     * @param ModelRouterCreateUserRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ModelRouterCreateUserResponse
     */
    public function modelRouterCreateUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->departmentRoles) {
            @$body['departmentRoles'] = $request->departmentRoles;
        }

        if (null !== $request->loginName) {
            @$body['loginName'] = $request->loginName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterCreateUser',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/users',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterCreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a user.
     *
     * @remarks
     * Creates a user.
     *
     * @param request - ModelRouterCreateUserRequest
     *
     * @returns ModelRouterCreateUserResponse
     *
     * @param ModelRouterCreateUserRequest $request
     *
     * @return ModelRouterCreateUserResponse
     */
    public function modelRouterCreateUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterCreateUserWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an API key.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterDeleteApiKeyResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModelRouterDeleteApiKeyResponse
     */
    public function modelRouterDeleteApiKeyWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterDeleteApiKey',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/apikeys/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterDeleteApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API key.
     *
     * @returns ModelRouterDeleteApiKeyResponse
     *
     * @param string $id
     *
     * @return ModelRouterDeleteApiKeyResponse
     */
    public function modelRouterDeleteApiKey($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterDeleteApiKeyWithOptions($id, $headers, $runtime);
    }

    /**
     * Deletes a customer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterDeleteClientResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModelRouterDeleteClientResponse
     */
    public function modelRouterDeleteClientWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterDeleteClient',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterDeleteClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a customer.
     *
     * @returns ModelRouterDeleteClientResponse
     *
     * @param string $id
     *
     * @return ModelRouterDeleteClientResponse
     */
    public function modelRouterDeleteClient($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterDeleteClientWithOptions($id, $headers, $runtime);
    }

    /**
     * Deletes a conversation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterDeleteConversationResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModelRouterDeleteConversationResponse
     */
    public function modelRouterDeleteConversationWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterDeleteConversation',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/conversations/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterDeleteConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a conversation.
     *
     * @returns ModelRouterDeleteConversationResponse
     *
     * @param string $id
     *
     * @return ModelRouterDeleteConversationResponse
     */
    public function modelRouterDeleteConversation($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterDeleteConversationWithOptions($id, $headers, $runtime);
    }

    /**
     * Deletes a model.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterDeleteModelResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModelRouterDeleteModelResponse
     */
    public function modelRouterDeleteModelWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterDeleteModel',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/models/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterDeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model.
     *
     * @returns ModelRouterDeleteModelResponse
     *
     * @param string $id
     *
     * @return ModelRouterDeleteModelResponse
     */
    public function modelRouterDeleteModel($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterDeleteModelWithOptions($id, $headers, $runtime);
    }

    /**
     * Deletes a manual group.
     *
     * @remarks
     * Deletes a manual group.
     *
     * @param request - ModelRouterDeleteModelGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterDeleteModelGroupResponse
     *
     * @param string                             $groupId
     * @param ModelRouterDeleteModelGroupRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterDeleteModelGroupResponse
     */
    public function modelRouterDeleteModelGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterDeleteModelGroup',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/model-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterDeleteModelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a manual group.
     *
     * @remarks
     * Deletes a manual group.
     *
     * @param request - ModelRouterDeleteModelGroupRequest
     *
     * @returns ModelRouterDeleteModelGroupResponse
     *
     * @param string                             $groupId
     * @param ModelRouterDeleteModelGroupRequest $request
     *
     * @return ModelRouterDeleteModelGroupResponse
     */
    public function modelRouterDeleteModelGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterDeleteModelGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Deletes a user.
     *
     * @param request - ModelRouterDeleteUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterDeleteUserResponse
     *
     * @param string                       $id
     * @param ModelRouterDeleteUserRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ModelRouterDeleteUserResponse
     */
    public function modelRouterDeleteUserWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterDeleteUser',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/users/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterDeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a user.
     *
     * @param request - ModelRouterDeleteUserRequest
     *
     * @returns ModelRouterDeleteUserResponse
     *
     * @param string                       $id
     * @param ModelRouterDeleteUserRequest $request
     *
     * @return ModelRouterDeleteUserResponse
     */
    public function modelRouterDeleteUser($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterDeleteUserWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Exports the balance change records of a member in the organization.
     *
     * @param request - ModelRouterExportMemberBalanceOrdersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterExportMemberBalanceOrdersResponse
     *
     * @param string                                      $clientId
     * @param string                                      $id
     * @param ModelRouterExportMemberBalanceOrdersRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ModelRouterExportMemberBalanceOrdersResponse
     */
    public function modelRouterExportMemberBalanceOrdersWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->balanceType) {
            @$query['balanceType'] = $request->balanceType;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterExportMemberBalanceOrders',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance/orders/export',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterExportMemberBalanceOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports the balance change records of a member in the organization.
     *
     * @param request - ModelRouterExportMemberBalanceOrdersRequest
     *
     * @returns ModelRouterExportMemberBalanceOrdersResponse
     *
     * @param string                                      $clientId
     * @param string                                      $id
     * @param ModelRouterExportMemberBalanceOrdersRequest $request
     *
     * @return ModelRouterExportMemberBalanceOrdersResponse
     */
    public function modelRouterExportMemberBalanceOrders($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterExportMemberBalanceOrdersWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Billing Center/Queries the total cost trend of bills.
     *
     * @remarks
     * Queries user role assignments.
     *
     * @param request - ModelRouterGetBillingBillSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterGetBillingBillSummaryResponse
     *
     * @param ModelRouterGetBillingBillSummaryRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ModelRouterGetBillingBillSummaryResponse
     */
    public function modelRouterGetBillingBillSummaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->modelTypes) {
            @$query['modelTypes'] = $request->modelTypes;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterGetBillingBillSummary',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/bills/summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterGetBillingBillSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Billing Center/Queries the total cost trend of bills.
     *
     * @remarks
     * Queries user role assignments.
     *
     * @param request - ModelRouterGetBillingBillSummaryRequest
     *
     * @returns ModelRouterGetBillingBillSummaryResponse
     *
     * @param ModelRouterGetBillingBillSummaryRequest $request
     *
     * @return ModelRouterGetBillingBillSummaryResponse
     */
    public function modelRouterGetBillingBillSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterGetBillingBillSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * Client Management/Get department balance.
     *
     * @param request - ModelRouterGetClientBalanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterGetClientBalanceResponse
     *
     * @param string                             $id
     * @param ModelRouterGetClientBalanceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterGetClientBalanceResponse
     */
    public function modelRouterGetClientBalanceWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterGetClientBalance',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterGetClientBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Client Management/Get department balance.
     *
     * @param request - ModelRouterGetClientBalanceRequest
     *
     * @returns ModelRouterGetClientBalanceResponse
     *
     * @param string                             $id
     * @param ModelRouterGetClientBalanceRequest $request
     *
     * @return ModelRouterGetClientBalanceResponse
     */
    public function modelRouterGetClientBalance($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterGetClientBalanceWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the balance change logs of a department.
     *
     * @param request - ModelRouterGetClientBalanceLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterGetClientBalanceLogsResponse
     *
     * @param string                                 $id
     * @param ModelRouterGetClientBalanceLogsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ModelRouterGetClientBalanceLogsResponse
     */
    public function modelRouterGetClientBalanceLogsWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeType) {
            @$query['changeType'] = $request->changeType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterGetClientBalanceLogs',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterGetClientBalanceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the balance change logs of a department.
     *
     * @param request - ModelRouterGetClientBalanceLogsRequest
     *
     * @returns ModelRouterGetClientBalanceLogsResponse
     *
     * @param string                                 $id
     * @param ModelRouterGetClientBalanceLogsRequest $request
     *
     * @return ModelRouterGetClientBalanceLogsResponse
     */
    public function modelRouterGetClientBalanceLogs($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterGetClientBalanceLogsWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the balance overview of a department.
     *
     * @param request - ModelRouterGetDeptBalanceSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterGetDeptBalanceSummaryResponse
     *
     * @param string                                  $id
     * @param ModelRouterGetDeptBalanceSummaryRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ModelRouterGetDeptBalanceSummaryResponse
     */
    public function modelRouterGetDeptBalanceSummaryWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterGetDeptBalanceSummary',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterGetDeptBalanceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the balance overview of a department.
     *
     * @param request - ModelRouterGetDeptBalanceSummaryRequest
     *
     * @returns ModelRouterGetDeptBalanceSummaryResponse
     *
     * @param string                                  $id
     * @param ModelRouterGetDeptBalanceSummaryRequest $request
     *
     * @return ModelRouterGetDeptBalanceSummaryResponse
     */
    public function modelRouterGetDeptBalanceSummary($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterGetDeptBalanceSummaryWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of API keys for a member in the organization.
     *
     * @param request - ModelRouterGetMemberApiKeysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterGetMemberApiKeysResponse
     *
     * @param string                             $clientId
     * @param string                             $id
     * @param ModelRouterGetMemberApiKeysRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterGetMemberApiKeysResponse
     */
    public function modelRouterGetMemberApiKeysWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterGetMemberApiKeys',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/apikeys',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterGetMemberApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of API keys for a member in the organization.
     *
     * @param request - ModelRouterGetMemberApiKeysRequest
     *
     * @returns ModelRouterGetMemberApiKeysResponse
     *
     * @param string                             $clientId
     * @param string                             $id
     * @param ModelRouterGetMemberApiKeysRequest $request
     *
     * @return ModelRouterGetMemberApiKeysResponse
     */
    public function modelRouterGetMemberApiKeys($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterGetMemberApiKeysWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the sub-wallet balance of a member in an organization.
     *
     * @param request - ModelRouterGetMemberBalanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterGetMemberBalanceResponse
     *
     * @param string                             $clientId
     * @param string                             $id
     * @param ModelRouterGetMemberBalanceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterGetMemberBalanceResponse
     */
    public function modelRouterGetMemberBalanceWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterGetMemberBalance',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterGetMemberBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the sub-wallet balance of a member in an organization.
     *
     * @param request - ModelRouterGetMemberBalanceRequest
     *
     * @returns ModelRouterGetMemberBalanceResponse
     *
     * @param string                             $clientId
     * @param string                             $id
     * @param ModelRouterGetMemberBalanceRequest $request
     *
     * @return ModelRouterGetMemberBalanceResponse
     */
    public function modelRouterGetMemberBalance($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterGetMemberBalanceWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the balance change logs of a member in an organization.
     *
     * @param request - ModelRouterGetMemberBalanceLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterGetMemberBalanceLogsResponse
     *
     * @param string                                 $clientId
     * @param string                                 $id
     * @param ModelRouterGetMemberBalanceLogsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ModelRouterGetMemberBalanceLogsResponse
     */
    public function modelRouterGetMemberBalanceLogsWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeType) {
            @$query['changeType'] = $request->changeType;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->skipTotal) {
            @$query['skipTotal'] = $request->skipTotal;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterGetMemberBalanceLogs',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterGetMemberBalanceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the balance change logs of a member in an organization.
     *
     * @param request - ModelRouterGetMemberBalanceLogsRequest
     *
     * @returns ModelRouterGetMemberBalanceLogsResponse
     *
     * @param string                                 $clientId
     * @param string                                 $id
     * @param ModelRouterGetMemberBalanceLogsRequest $request
     *
     * @return ModelRouterGetMemberBalanceLogsResponse
     */
    public function modelRouterGetMemberBalanceLogs($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterGetMemberBalanceLogsWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Queries the cross-department role assignments of a user.
     *
     * @remarks
     * Queries the role assignments of a user.
     *
     * @param request - ModelRouterGetUserRolesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterGetUserRolesResponse
     *
     * @param string                         $id
     * @param ModelRouterGetUserRolesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ModelRouterGetUserRolesResponse
     */
    public function modelRouterGetUserRolesWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterGetUserRoles',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/users/' . Url::percentEncode($id) . '/roles',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterGetUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cross-department role assignments of a user.
     *
     * @remarks
     * Queries the role assignments of a user.
     *
     * @param request - ModelRouterGetUserRolesRequest
     *
     * @returns ModelRouterGetUserRolesResponse
     *
     * @param string                         $id
     * @param ModelRouterGetUserRolesRequest $request
     *
     * @return ModelRouterGetUserRolesResponse
     */
    public function modelRouterGetUserRoles($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterGetUserRolesWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Queries balance change records.
     *
     * @remarks
     * This API operation is deprecated. Do not use it.
     *
     * @param request - ModelRouterListBalanceOrdersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterListBalanceOrdersResponse
     *
     * @param string                              $id
     * @param ModelRouterListBalanceOrdersRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ModelRouterListBalanceOrdersResponse
     */
    public function modelRouterListBalanceOrdersWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->balanceType) {
            @$query['balanceType'] = $request->balanceType;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderType) {
            @$query['orderType'] = $request->orderType;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterListBalanceOrders',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance/orders',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterListBalanceOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries balance change records.
     *
     * @remarks
     * This API operation is deprecated. Do not use it.
     *
     * @param request - ModelRouterListBalanceOrdersRequest
     *
     * @returns ModelRouterListBalanceOrdersResponse
     *
     * @param string                              $id
     * @param ModelRouterListBalanceOrdersRequest $request
     *
     * @return ModelRouterListBalanceOrdersResponse
     */
    public function modelRouterListBalanceOrders($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterListBalanceOrdersWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of members in a specified department.
     *
     * @param request - ModelRouterListDeptMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterListDeptMembersResponse
     *
     * @param string                            $id
     * @param ModelRouterListDeptMembersRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModelRouterListDeptMembersResponse
     */
    public function modelRouterListDeptMembersWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authConfig) {
            @$query['authConfig'] = $request->authConfig;
        }

        if (null !== $request->includeAuthorization) {
            @$query['includeAuthorization'] = $request->includeAuthorization;
        }

        if (null !== $request->includeBalance) {
            @$query['includeBalance'] = $request->includeBalance;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->model) {
            @$query['model'] = $request->model;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterListDeptMembers',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/members',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterListDeptMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of members in a specified department.
     *
     * @param request - ModelRouterListDeptMembersRequest
     *
     * @returns ModelRouterListDeptMembersResponse
     *
     * @param string                            $id
     * @param ModelRouterListDeptMembersRequest $request
     *
     * @return ModelRouterListDeptMembersResponse
     */
    public function modelRouterListDeptMembers($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterListDeptMembersWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the balance change records of a member in the organization.
     *
     * @param request - ModelRouterListMemberBalanceOrdersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterListMemberBalanceOrdersResponse
     *
     * @param string                                    $clientId
     * @param string                                    $id
     * @param ModelRouterListMemberBalanceOrdersRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ModelRouterListMemberBalanceOrdersResponse
     */
    public function modelRouterListMemberBalanceOrdersWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->balanceType) {
            @$query['balanceType'] = $request->balanceType;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->orderType) {
            @$query['orderType'] = $request->orderType;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterListMemberBalanceOrders',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance/orders',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterListMemberBalanceOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the balance change records of a member in the organization.
     *
     * @param request - ModelRouterListMemberBalanceOrdersRequest
     *
     * @returns ModelRouterListMemberBalanceOrdersResponse
     *
     * @param string                                    $clientId
     * @param string                                    $id
     * @param ModelRouterListMemberBalanceOrdersRequest $request
     *
     * @return ModelRouterListMemberBalanceOrdersResponse
     */
    public function modelRouterListMemberBalanceOrders($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterListMemberBalanceOrdersWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the subscription list of a member in the organization.
     *
     * @param request - ModelRouterListMemberSubscriptionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterListMemberSubscriptionsResponse
     *
     * @param string                                    $clientId
     * @param string                                    $id
     * @param ModelRouterListMemberSubscriptionsRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ModelRouterListMemberSubscriptionsResponse
     */
    public function modelRouterListMemberSubscriptionsWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterListMemberSubscriptions',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance/subscription',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterListMemberSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the subscription list of a member in the organization.
     *
     * @param request - ModelRouterListMemberSubscriptionsRequest
     *
     * @returns ModelRouterListMemberSubscriptionsResponse
     *
     * @param string                                    $clientId
     * @param string                                    $id
     * @param ModelRouterListMemberSubscriptionsRequest $request
     *
     * @return ModelRouterListMemberSubscriptionsResponse
     */
    public function modelRouterListMemberSubscriptions($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterListMemberSubscriptionsWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Queries the list of periodic recharge subscriptions.
     *
     * @remarks
     * This operation is deprecated. Do not use it.
     *
     * @param request - ModelRouterListSubscriptionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterListSubscriptionsResponse
     *
     * @param string                              $id
     * @param ModelRouterListSubscriptionsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ModelRouterListSubscriptionsResponse
     */
    public function modelRouterListSubscriptionsWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->balanceType) {
            @$query['balanceType'] = $request->balanceType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterListSubscriptions',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance/subscription',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterListSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of periodic recharge subscriptions.
     *
     * @remarks
     * This operation is deprecated. Do not use it.
     *
     * @param request - ModelRouterListSubscriptionsRequest
     *
     * @returns ModelRouterListSubscriptionsResponse
     *
     * @param string                              $id
     * @param ModelRouterListSubscriptionsRequest $request
     *
     * @return ModelRouterListSubscriptionsResponse
     */
    public function modelRouterListSubscriptions($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterListSubscriptionsWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Retrieves a pre-signed URL for downloading a Migu source file.
     *
     * @remarks
     * Creates a user.
     *
     * @param request - ModelRouterMiguDownloadSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterMiguDownloadSourceResponse
     *
     * @param ModelRouterMiguDownloadSourceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ModelRouterMiguDownloadSourceResponse
     */
    public function modelRouterMiguDownloadSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceId) {
            @$query['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterMiguDownloadSource',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/pipeline/api/aigc/source/download',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterMiguDownloadSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a pre-signed URL for downloading a Migu source file.
     *
     * @remarks
     * Creates a user.
     *
     * @param request - ModelRouterMiguDownloadSourceRequest
     *
     * @returns ModelRouterMiguDownloadSourceResponse
     *
     * @param ModelRouterMiguDownloadSourceRequest $request
     *
     * @return ModelRouterMiguDownloadSourceResponse
     */
    public function modelRouterMiguDownloadSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterMiguDownloadSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Manages Migu source files and retrieves a pre-signed URL for source file upload.
     *
     * @remarks
     * Updates a user.
     *
     * @param request - ModelRouterMiguUploadSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterMiguUploadSourceResponse
     *
     * @param ModelRouterMiguUploadSourceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterMiguUploadSourceResponse
     */
    public function modelRouterMiguUploadSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileType) {
            @$body['fileType'] = $request->fileType;
        }

        if (null !== $request->serviceName) {
            @$body['serviceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterMiguUploadSource',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/pipeline/api/aigc/source/upload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterMiguUploadSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manages Migu source files and retrieves a pre-signed URL for source file upload.
     *
     * @remarks
     * Updates a user.
     *
     * @param request - ModelRouterMiguUploadSourceRequest
     *
     * @returns ModelRouterMiguUploadSourceResponse
     *
     * @param ModelRouterMiguUploadSourceRequest $request
     *
     * @return ModelRouterMiguUploadSourceResponse
     */
    public function modelRouterMiguUploadSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterMiguUploadSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an API key.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryApiKeyResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModelRouterQueryApiKeyResponse
     */
    public function modelRouterQueryApiKeyWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryApiKey',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/apikeys/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an API key.
     *
     * @returns ModelRouterQueryApiKeyResponse
     *
     * @param string $id
     *
     * @return ModelRouterQueryApiKeyResponse
     */
    public function modelRouterQueryApiKey($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryApiKeyWithOptions($id, $headers, $runtime);
    }

    /**
     * Retrieves a list of API keys.
     *
     * @param request - ModelRouterQueryApiKeyListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryApiKeyListResponse
     *
     * @param ModelRouterQueryApiKeyListRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModelRouterQueryApiKeyListResponse
     */
    public function modelRouterQueryApiKeyListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->includeMemberKeys) {
            @$query['includeMemberKeys'] = $request->includeMemberKeys;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
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
            'action' => 'ModelRouterQueryApiKeyList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/apikeys',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryApiKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of API keys.
     *
     * @param request - ModelRouterQueryApiKeyListRequest
     *
     * @returns ModelRouterQueryApiKeyListResponse
     *
     * @param ModelRouterQueryApiKeyListRequest $request
     *
     * @return ModelRouterQueryApiKeyListResponse
     */
    public function modelRouterQueryApiKeyList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryApiKeyListWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries billing details in batches.
     *
     * @remarks
     * Queries the user list.
     *
     * @param request - ModelRouterQueryBillingCostBreakdownRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryBillingCostBreakdownResponse
     *
     * @param ModelRouterQueryBillingCostBreakdownRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ModelRouterQueryBillingCostBreakdownResponse
     */
    public function modelRouterQueryBillingCostBreakdownWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->granularity) {
            @$query['granularity'] = $request->granularity;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->modelTypes) {
            @$query['modelTypes'] = $request->modelTypes;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
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
            'action' => 'ModelRouterQueryBillingCostBreakdown',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/cost/breakdown',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryBillingCostBreakdownResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries billing details in batches.
     *
     * @remarks
     * Queries the user list.
     *
     * @param request - ModelRouterQueryBillingCostBreakdownRequest
     *
     * @returns ModelRouterQueryBillingCostBreakdownResponse
     *
     * @param ModelRouterQueryBillingCostBreakdownRequest $request
     *
     * @return ModelRouterQueryBillingCostBreakdownResponse
     */
    public function modelRouterQueryBillingCostBreakdown($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryBillingCostBreakdownWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries request-granularity billing details from the Billing Center.
     *
     * @remarks
     * Queries the user list.
     *
     * @param request - ModelRouterQueryBillingDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryBillingDetailsResponse
     *
     * @param ModelRouterQueryBillingDetailsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ModelRouterQueryBillingDetailsResponse
     */
    public function modelRouterQueryBillingDetailsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->modelCodes) {
            @$query['modelCodes'] = $request->modelCodes;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->modelTypes) {
            @$query['modelTypes'] = $request->modelTypes;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryBillingDetails',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/details',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryBillingDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries request-granularity billing details from the Billing Center.
     *
     * @remarks
     * Queries the user list.
     *
     * @param request - ModelRouterQueryBillingDetailsRequest
     *
     * @returns ModelRouterQueryBillingDetailsResponse
     *
     * @param ModelRouterQueryBillingDetailsRequest $request
     *
     * @return ModelRouterQueryBillingDetailsResponse
     */
    public function modelRouterQueryBillingDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryBillingDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * Billing management / Query billing rule list.
     *
     * @param request - ModelRouterQueryBillingRuleListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryBillingRuleListResponse
     *
     * @param ModelRouterQueryBillingRuleListRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ModelRouterQueryBillingRuleListResponse
     */
    public function modelRouterQueryBillingRuleListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activeOnly) {
            @$query['activeOnly'] = $request->activeOnly;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->modelCode) {
            @$query['modelCode'] = $request->modelCode;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryBillingRuleList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryBillingRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Billing management / Query billing rule list.
     *
     * @param request - ModelRouterQueryBillingRuleListRequest
     *
     * @returns ModelRouterQueryBillingRuleListResponse
     *
     * @param ModelRouterQueryBillingRuleListRequest $request
     *
     * @return ModelRouterQueryBillingRuleListResponse
     */
    public function modelRouterQueryBillingRuleList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryBillingRuleListWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the discount modification history for a client.
     *
     * @param request - ModelRouterQueryClientDiscountLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryClientDiscountLogsResponse
     *
     * @param string                                    $id
     * @param ModelRouterQueryClientDiscountLogsRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ModelRouterQueryClientDiscountLogsResponse
     */
    public function modelRouterQueryClientDiscountLogsWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryClientDiscountLogs',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/discount-logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryClientDiscountLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the discount modification history for a client.
     *
     * @param request - ModelRouterQueryClientDiscountLogsRequest
     *
     * @returns ModelRouterQueryClientDiscountLogsResponse
     *
     * @param string                                    $id
     * @param ModelRouterQueryClientDiscountLogsRequest $request
     *
     * @return ModelRouterQueryClientDiscountLogsResponse
     */
    public function modelRouterQueryClientDiscountLogs($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryClientDiscountLogsWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of clients.
     *
     * @param request - ModelRouterQueryClientListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryClientListResponse
     *
     * @param ModelRouterQueryClientListRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModelRouterQueryClientListResponse
     */
    public function modelRouterQueryClientListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->parentId) {
            @$query['parentId'] = $request->parentId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryClientList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryClientListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of clients.
     *
     * @param request - ModelRouterQueryClientListRequest
     *
     * @returns ModelRouterQueryClientListResponse
     *
     * @param ModelRouterQueryClientListRequest $request
     *
     * @return ModelRouterQueryClientListResponse
     */
    public function modelRouterQueryClientList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryClientListWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the customer tree structure.
     *
     * @param request - ModelRouterQueryClientTreeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryClientTreeResponse
     *
     * @param ModelRouterQueryClientTreeRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModelRouterQueryClientTreeResponse
     */
    public function modelRouterQueryClientTreeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryClientTree',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/tree',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryClientTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the customer tree structure.
     *
     * @param request - ModelRouterQueryClientTreeRequest
     *
     * @returns ModelRouterQueryClientTreeResponse
     *
     * @param ModelRouterQueryClientTreeRequest $request
     *
     * @return ModelRouterQueryClientTreeResponse
     */
    public function modelRouterQueryClientTree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryClientTreeWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a conversation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryConversationResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModelRouterQueryConversationResponse
     */
    public function modelRouterQueryConversationWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryConversation',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/conversations/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a conversation.
     *
     * @returns ModelRouterQueryConversationResponse
     *
     * @param string $id
     *
     * @return ModelRouterQueryConversationResponse
     */
    public function modelRouterQueryConversation($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryConversationWithOptions($id, $headers, $runtime);
    }

    /**
     * Conversation management/Conversation list.
     *
     * @param request - ModelRouterQueryConversationListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryConversationListResponse
     *
     * @param ModelRouterQueryConversationListRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ModelRouterQueryConversationListResponse
     */
    public function modelRouterQueryConversationListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
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
            'action' => 'ModelRouterQueryConversationList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/conversations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryConversationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Conversation management/Conversation list.
     *
     * @param request - ModelRouterQueryConversationListRequest
     *
     * @returns ModelRouterQueryConversationListResponse
     *
     * @param ModelRouterQueryConversationListRequest $request
     *
     * @return ModelRouterQueryConversationListResponse
     */
    public function modelRouterQueryConversationList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryConversationListWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves model usage details for billing management.
     *
     * @param request - ModelRouterQueryCostModelDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryCostModelDetailResponse
     *
     * @param ModelRouterQueryCostModelDetailRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ModelRouterQueryCostModelDetailResponse
     */
    public function modelRouterQueryCostModelDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
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
            'action' => 'ModelRouterQueryCostModelDetail',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/cost/model-detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryCostModelDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves model usage details for billing management.
     *
     * @param request - ModelRouterQueryCostModelDetailRequest
     *
     * @returns ModelRouterQueryCostModelDetailResponse
     *
     * @param ModelRouterQueryCostModelDetailRequest $request
     *
     * @return ModelRouterQueryCostModelDetailResponse
     */
    public function modelRouterQueryCostModelDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryCostModelDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of models called for billing management.
     *
     * @param request - ModelRouterQueryCostModelListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryCostModelListResponse
     *
     * @param ModelRouterQueryCostModelListRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ModelRouterQueryCostModelListResponse
     */
    public function modelRouterQueryCostModelListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->granularity) {
            @$query['granularity'] = $request->granularity;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelTypes) {
            @$query['modelTypes'] = $request->modelTypes;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryCostModelList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/cost/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryCostModelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of models called for billing management.
     *
     * @param request - ModelRouterQueryCostModelListRequest
     *
     * @returns ModelRouterQueryCostModelListResponse
     *
     * @param ModelRouterQueryCostModelListRequest $request
     *
     * @return ModelRouterQueryCostModelListResponse
     */
    public function modelRouterQueryCostModelList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryCostModelListWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves cost overview metrics for billing management.
     *
     * @param request - ModelRouterQueryCostOverviewMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryCostOverviewMetricsResponse
     *
     * @param ModelRouterQueryCostOverviewMetricsRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ModelRouterQueryCostOverviewMetricsResponse
     */
    public function modelRouterQueryCostOverviewMetricsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->granularity) {
            @$query['granularity'] = $request->granularity;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelTypes) {
            @$query['modelTypes'] = $request->modelTypes;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryCostOverviewMetrics',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/cost/overview',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryCostOverviewMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves cost overview metrics for billing management.
     *
     * @param request - ModelRouterQueryCostOverviewMetricsRequest
     *
     * @returns ModelRouterQueryCostOverviewMetricsResponse
     *
     * @param ModelRouterQueryCostOverviewMetricsRequest $request
     *
     * @return ModelRouterQueryCostOverviewMetricsResponse
     */
    public function modelRouterQueryCostOverviewMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryCostOverviewMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves usage cost trends.
     *
     * @param request - ModelRouterQueryCostTrendMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryCostTrendMetricsResponse
     *
     * @param ModelRouterQueryCostTrendMetricsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ModelRouterQueryCostTrendMetricsResponse
     */
    public function modelRouterQueryCostTrendMetricsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->granularity) {
            @$query['granularity'] = $request->granularity;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelTypes) {
            @$query['modelTypes'] = $request->modelTypes;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryCostTrendMetrics',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/cost/trend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryCostTrendMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves usage cost trends.
     *
     * @param request - ModelRouterQueryCostTrendMetricsRequest
     *
     * @returns ModelRouterQueryCostTrendMetricsResponse
     *
     * @param ModelRouterQueryCostTrendMetricsRequest $request
     *
     * @return ModelRouterQueryCostTrendMetricsResponse
     */
    public function modelRouterQueryCostTrendMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryCostTrendMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves details for a specific model.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryModelResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModelRouterQueryModelResponse
     */
    public function modelRouterQueryModelWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryModel',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/models/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves details for a specific model.
     *
     * @returns ModelRouterQueryModelResponse
     *
     * @param string $id
     *
     * @return ModelRouterQueryModelResponse
     */
    public function modelRouterQueryModel($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryModelWithOptions($id, $headers, $runtime);
    }

    /**
     * Queries the details of a model group.
     *
     * @remarks
     * Queries the details of a model group.
     *
     * @param request - ModelRouterQueryModelGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryModelGroupResponse
     *
     * @param string                            $groupId
     * @param ModelRouterQueryModelGroupRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModelRouterQueryModelGroupResponse
     */
    public function modelRouterQueryModelGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryModelGroup',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/model-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryModelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a model group.
     *
     * @remarks
     * Queries the details of a model group.
     *
     * @param request - ModelRouterQueryModelGroupRequest
     *
     * @returns ModelRouterQueryModelGroupResponse
     *
     * @param string                            $groupId
     * @param ModelRouterQueryModelGroupRequest $request
     *
     * @return ModelRouterQueryModelGroupResponse
     */
    public function modelRouterQueryModelGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryModelGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Queries the departments bound to a model group by paging.
     *
     * @remarks
     * Queries the departments bound to a model group by paging.
     *
     * @param request - ModelRouterQueryModelGroupClientsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryModelGroupClientsResponse
     *
     * @param string                                   $groupId
     * @param ModelRouterQueryModelGroupClientsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ModelRouterQueryModelGroupClientsResponse
     */
    public function modelRouterQueryModelGroupClientsWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryModelGroupClients',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/model-groups/' . Url::percentEncode($groupId) . '/clients',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryModelGroupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the departments bound to a model group by paging.
     *
     * @remarks
     * Queries the departments bound to a model group by paging.
     *
     * @param request - ModelRouterQueryModelGroupClientsRequest
     *
     * @returns ModelRouterQueryModelGroupClientsResponse
     *
     * @param string                                   $groupId
     * @param ModelRouterQueryModelGroupClientsRequest $request
     *
     * @return ModelRouterQueryModelGroupClientsResponse
     */
    public function modelRouterQueryModelGroupClients($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryModelGroupClientsWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of model groups by paging.
     *
     * @remarks
     * Queries the list of model groups by paging.
     *
     * @param request - ModelRouterQueryModelGroupListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryModelGroupListResponse
     *
     * @param ModelRouterQueryModelGroupListRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ModelRouterQueryModelGroupListResponse
     */
    public function modelRouterQueryModelGroupListWithOptions($request, $headers, $runtime)
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

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
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
            'action' => 'ModelRouterQueryModelGroupList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/model-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryModelGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of model groups by paging.
     *
     * @remarks
     * Queries the list of model groups by paging.
     *
     * @param request - ModelRouterQueryModelGroupListRequest
     *
     * @returns ModelRouterQueryModelGroupListResponse
     *
     * @param ModelRouterQueryModelGroupListRequest $request
     *
     * @return ModelRouterQueryModelGroupListResponse
     */
    public function modelRouterQueryModelGroupList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryModelGroupListWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paging query for models within a model group.
     *
     * @remarks
     * Queries models within a group with pagination.
     *
     * @param request - ModelRouterQueryModelGroupModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryModelGroupModelsResponse
     *
     * @param string                                  $groupId
     * @param ModelRouterQueryModelGroupModelsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ModelRouterQueryModelGroupModelsResponse
     */
    public function modelRouterQueryModelGroupModelsWithOptions($groupId, $request, $headers, $runtime)
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

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryModelGroupModels',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/model-groups/' . Url::percentEncode($groupId) . '/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryModelGroupModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query for models within a model group.
     *
     * @remarks
     * Queries models within a group with pagination.
     *
     * @param request - ModelRouterQueryModelGroupModelsRequest
     *
     * @returns ModelRouterQueryModelGroupModelsResponse
     *
     * @param string                                  $groupId
     * @param ModelRouterQueryModelGroupModelsRequest $request
     *
     * @return ModelRouterQueryModelGroupModelsResponse
     */
    public function modelRouterQueryModelGroupModels($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryModelGroupModelsWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Queries the users attached to a model group by paging.
     *
     * @remarks
     * Queries the users attached to a model group by paging.
     *
     * @param request - ModelRouterQueryModelGroupUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryModelGroupUsersResponse
     *
     * @param string                                 $groupId
     * @param ModelRouterQueryModelGroupUsersRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ModelRouterQueryModelGroupUsersResponse
     */
    public function modelRouterQueryModelGroupUsersWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryModelGroupUsers',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/model-groups/' . Url::percentEncode($groupId) . '/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryModelGroupUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the users attached to a model group by paging.
     *
     * @remarks
     * Queries the users attached to a model group by paging.
     *
     * @param request - ModelRouterQueryModelGroupUsersRequest
     *
     * @returns ModelRouterQueryModelGroupUsersResponse
     *
     * @param string                                 $groupId
     * @param ModelRouterQueryModelGroupUsersRequest $request
     *
     * @return ModelRouterQueryModelGroupUsersResponse
     */
    public function modelRouterQueryModelGroupUsers($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryModelGroupUsersWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Queries the bound groups and models by API key.
     *
     * @remarks
     * Queries the bound groups and models by API key.
     *
     * @param request - ModelRouterQueryModelGroupsByApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryModelGroupsByApiKeyResponse
     *
     * @param string                                     $id
     * @param ModelRouterQueryModelGroupsByApiKeyRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ModelRouterQueryModelGroupsByApiKeyResponse
     */
    public function modelRouterQueryModelGroupsByApiKeyWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryModelGroupsByApiKey',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/apikeys/' . Url::percentEncode($id) . '/model-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryModelGroupsByApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bound groups and models by API key.
     *
     * @remarks
     * Queries the bound groups and models by API key.
     *
     * @param request - ModelRouterQueryModelGroupsByApiKeyRequest
     *
     * @returns ModelRouterQueryModelGroupsByApiKeyResponse
     *
     * @param string                                     $id
     * @param ModelRouterQueryModelGroupsByApiKeyRequest $request
     *
     * @return ModelRouterQueryModelGroupsByApiKeyResponse
     */
    public function modelRouterQueryModelGroupsByApiKey($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryModelGroupsByApiKeyWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Model management/Get model list.
     *
     * @param request - ModelRouterQueryModelListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryModelListResponse
     *
     * @param ModelRouterQueryModelListRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ModelRouterQueryModelListResponse
     */
    public function modelRouterQueryModelListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
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
            'action' => 'ModelRouterQueryModelList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryModelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Model management/Get model list.
     *
     * @param request - ModelRouterQueryModelListRequest
     *
     * @returns ModelRouterQueryModelListResponse
     *
     * @param ModelRouterQueryModelListRequest $request
     *
     * @return ModelRouterQueryModelListResponse
     */
    public function modelRouterQueryModelList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryModelListWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of Nacos service providers through Nacos configuration.
     *
     * @param request - ModelRouterQueryNacosProvidersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryNacosProvidersResponse
     *
     * @param ModelRouterQueryNacosProvidersRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ModelRouterQueryNacosProvidersResponse
     */
    public function modelRouterQueryNacosProvidersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryNacosProviders',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/nacos/providers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryNacosProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Nacos service providers through Nacos configuration.
     *
     * @param request - ModelRouterQueryNacosProvidersRequest
     *
     * @returns ModelRouterQueryNacosProvidersResponse
     *
     * @param ModelRouterQueryNacosProvidersRequest $request
     *
     * @return ModelRouterQueryNacosProvidersResponse
     */
    public function modelRouterQueryNacosProviders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryNacosProvidersWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of tags from Nacos.
     *
     * @param request - ModelRouterQueryNacosTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryNacosTagsResponse
     *
     * @param ModelRouterQueryNacosTagsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ModelRouterQueryNacosTagsResponse
     */
    public function modelRouterQueryNacosTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configType) {
            @$query['configType'] = $request->configType;
        }

        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryNacosTags',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/nacos/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryNacosTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of tags from Nacos.
     *
     * @param request - ModelRouterQueryNacosTagsRequest
     *
     * @returns ModelRouterQueryNacosTagsResponse
     *
     * @param ModelRouterQueryNacosTagsRequest $request
     *
     * @return ModelRouterQueryNacosTagsResponse
     */
    public function modelRouterQueryNacosTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryNacosTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves monitoring chart data for model observation.
     *
     * @remarks
     * Queries a list of users.
     *
     * @param request - ModelRouterQueryObservationChartsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryObservationChartsResponse
     *
     * @param ModelRouterQueryObservationChartsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ModelRouterQueryObservationChartsResponse
     */
    public function modelRouterQueryObservationChartsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->timeRange) {
            @$query['timeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryObservationCharts',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/observation/charts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryObservationChartsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves monitoring chart data for model observation.
     *
     * @remarks
     * Queries a list of users.
     *
     * @param request - ModelRouterQueryObservationChartsRequest
     *
     * @returns ModelRouterQueryObservationChartsResponse
     *
     * @param ModelRouterQueryObservationChartsRequest $request
     *
     * @return ModelRouterQueryObservationChartsResponse
     */
    public function modelRouterQueryObservationCharts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryObservationChartsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of observation logs for model monitoring.
     *
     * @param request - ModelRouterQueryObservationLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryObservationLogsResponse
     *
     * @param ModelRouterQueryObservationLogsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ModelRouterQueryObservationLogsResponse
     */
    public function modelRouterQueryObservationLogsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->timeRange) {
            @$query['timeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryObservationLogs',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/observation/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryObservationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of observation logs for model monitoring.
     *
     * @param request - ModelRouterQueryObservationLogsRequest
     *
     * @returns ModelRouterQueryObservationLogsResponse
     *
     * @param ModelRouterQueryObservationLogsRequest $request
     *
     * @return ModelRouterQueryObservationLogsResponse
     */
    public function modelRouterQueryObservationLogs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryObservationLogsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves observability metric data for model API calls.
     *
     * @param request - ModelRouterQueryObservationMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryObservationMetricsResponse
     *
     * @param ModelRouterQueryObservationMetricsRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ModelRouterQueryObservationMetricsResponse
     */
    public function modelRouterQueryObservationMetricsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->groupBy) {
            @$query['groupBy'] = $request->groupBy;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->needTotalCount) {
            @$query['needTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->timeRange) {
            @$query['timeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryObservationMetrics',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/observation/metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryObservationMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves observability metric data for model API calls.
     *
     * @param request - ModelRouterQueryObservationMetricsRequest
     *
     * @returns ModelRouterQueryObservationMetricsResponse
     *
     * @param ModelRouterQueryObservationMetricsRequest $request
     *
     * @return ModelRouterQueryObservationMetricsResponse
     */
    public function modelRouterQueryObservationMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryObservationMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries usage details in batches for usage management.
     *
     * @param request - ModelRouterQueryUsageBreakdownRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryUsageBreakdownResponse
     *
     * @param ModelRouterQueryUsageBreakdownRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ModelRouterQueryUsageBreakdownResponse
     */
    public function modelRouterQueryUsageBreakdownWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->clientIds) {
            @$query['clientIds'] = $request->clientIds;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->granularity) {
            @$query['granularity'] = $request->granularity;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memberUserIds) {
            @$query['memberUserIds'] = $request->memberUserIds;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
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
            'action' => 'ModelRouterQueryUsageBreakdown',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/usage/breakdown',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryUsageBreakdownResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries usage details in batches for usage management.
     *
     * @param request - ModelRouterQueryUsageBreakdownRequest
     *
     * @returns ModelRouterQueryUsageBreakdownResponse
     *
     * @param ModelRouterQueryUsageBreakdownRequest $request
     *
     * @return ModelRouterQueryUsageBreakdownResponse
     */
    public function modelRouterQueryUsageBreakdown($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryUsageBreakdownWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of users.
     *
     * @remarks
     * Queries the list of users.
     *
     * @param request - ModelRouterQueryUserListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterQueryUserListResponse
     *
     * @param ModelRouterQueryUserListRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ModelRouterQueryUserListResponse
     */
    public function modelRouterQueryUserListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->phone) {
            @$query['phone'] = $request->phone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterQueryUserList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterQueryUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of users.
     *
     * @remarks
     * Queries the list of users.
     *
     * @param request - ModelRouterQueryUserListRequest
     *
     * @returns ModelRouterQueryUserListResponse
     *
     * @param ModelRouterQueryUserListRequest $request
     *
     * @return ModelRouterQueryUserListResponse
     */
    public function modelRouterQueryUserList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterQueryUserListWithOptions($request, $headers, $runtime);
    }

    /**
     * Resets the authorization of a member to inherit from the organization.
     *
     * @param request - ModelRouterResetMemberAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterResetMemberAuthorizationResponse
     *
     * @param string                                     $clientId
     * @param string                                     $id
     * @param ModelRouterResetMemberAuthorizationRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ModelRouterResetMemberAuthorizationResponse
     */
    public function modelRouterResetMemberAuthorizationWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ModelRouterResetMemberAuthorization',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/authorization',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterResetMemberAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the authorization of a member to inherit from the organization.
     *
     * @param request - ModelRouterResetMemberAuthorizationRequest
     *
     * @returns ModelRouterResetMemberAuthorizationResponse
     *
     * @param string                                     $clientId
     * @param string                                     $id
     * @param ModelRouterResetMemberAuthorizationRequest $request
     *
     * @return ModelRouterResetMemberAuthorizationResponse
     */
    public function modelRouterResetMemberAuthorization($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterResetMemberAuthorizationWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Flow control management / Save flow control configuration.
     *
     * @param request - ModelRouterSaveFlowConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterSaveFlowConfigResponse
     *
     * @param ModelRouterSaveFlowConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ModelRouterSaveFlowConfigResponse
     */
    public function modelRouterSaveFlowConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->rpm) {
            @$body['rpm'] = $request->rpm;
        }

        if (null !== $request->smoothFlowEnabled) {
            @$body['smoothFlowEnabled'] = $request->smoothFlowEnabled;
        }

        if (null !== $request->tpm) {
            @$body['tpm'] = $request->tpm;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterSaveFlowConfig',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/flow-config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterSaveFlowConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Flow control management / Save flow control configuration.
     *
     * @param request - ModelRouterSaveFlowConfigRequest
     *
     * @returns ModelRouterSaveFlowConfigResponse
     *
     * @param ModelRouterSaveFlowConfigRequest $request
     *
     * @return ModelRouterSaveFlowConfigResponse
     */
    public function modelRouterSaveFlowConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterSaveFlowConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Searches and locates nodes in the department tree for organization management.
     *
     * @param request - ModelRouterSearchClientTreeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterSearchClientTreeResponse
     *
     * @param ModelRouterSearchClientTreeRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterSearchClientTreeResponse
     */
    public function modelRouterSearchClientTreeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelRouterSearchClientTree',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/tree/search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterSearchClientTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches and locates nodes in the department tree for organization management.
     *
     * @param request - ModelRouterSearchClientTreeRequest
     *
     * @returns ModelRouterSearchClientTreeResponse
     *
     * @param ModelRouterSearchClientTreeRequest $request
     *
     * @return ModelRouterSearchClientTreeResponse
     */
    public function modelRouterSearchClientTree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterSearchClientTreeWithOptions($request, $headers, $runtime);
    }

    /**
     * Sets the member authorization model for an organization.
     *
     * @param request - ModelRouterSetMemberAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterSetMemberAuthorizationResponse
     *
     * @param string                                   $clientId
     * @param string                                   $id
     * @param ModelRouterSetMemberAuthorizationRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ModelRouterSetMemberAuthorizationResponse
     */
    public function modelRouterSetMemberAuthorizationWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowedModelGroupConfig) {
            @$body['allowedModelGroupConfig'] = $request->allowedModelGroupConfig;
        }

        if (null !== $request->allowedModels) {
            @$body['allowedModels'] = $request->allowedModels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterSetMemberAuthorization',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/authorization',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterSetMemberAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the member authorization model for an organization.
     *
     * @param request - ModelRouterSetMemberAuthorizationRequest
     *
     * @returns ModelRouterSetMemberAuthorizationResponse
     *
     * @param string                                   $clientId
     * @param string                                   $id
     * @param ModelRouterSetMemberAuthorizationRequest $request
     *
     * @return ModelRouterSetMemberAuthorizationResponse
     */
    public function modelRouterSetMemberAuthorization($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterSetMemberAuthorizationWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Sets user roles or changes the department to which a user belongs.
     *
     * @remarks
     * Sets user roles or changes the department to which a user belongs.
     *
     * @param request - ModelRouterSetUserRolesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterSetUserRolesResponse
     *
     * @param string                         $id
     * @param ModelRouterSetUserRolesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ModelRouterSetUserRolesResponse
     */
    public function modelRouterSetUserRolesWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->departmentRoles) {
            @$body['departmentRoles'] = $request->departmentRoles;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterSetUserRoles',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/users/' . Url::percentEncode($id) . '/roles',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterSetUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets user roles or changes the department to which a user belongs.
     *
     * @remarks
     * Sets user roles or changes the department to which a user belongs.
     *
     * @param request - ModelRouterSetUserRolesRequest
     *
     * @returns ModelRouterSetUserRolesResponse
     *
     * @param string                         $id
     * @param ModelRouterSetUserRolesRequest $request
     *
     * @return ModelRouterSetUserRolesResponse
     */
    public function modelRouterSetUserRoles($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterSetUserRolesWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 组织管理/停止成员订阅.
     *
     * @param request - ModelRouterStopMemberSubscriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterStopMemberSubscriptionResponse
     *
     * @param string                                   $clientId
     * @param string                                   $id
     * @param ModelRouterStopMemberSubscriptionRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ModelRouterStopMemberSubscriptionResponse
     */
    public function modelRouterStopMemberSubscriptionWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterStopMemberSubscription',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/balance/subscription/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterStopMemberSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 组织管理/停止成员订阅.
     *
     * @param request - ModelRouterStopMemberSubscriptionRequest
     *
     * @returns ModelRouterStopMemberSubscriptionResponse
     *
     * @param string                                   $clientId
     * @param string                                   $id
     * @param ModelRouterStopMemberSubscriptionRequest $request
     *
     * @return ModelRouterStopMemberSubscriptionResponse
     */
    public function modelRouterStopMemberSubscription($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterStopMemberSubscriptionWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Stops a periodic recharge subscription for customer management.
     *
     * @param request - ModelRouterStopSubscriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterStopSubscriptionResponse
     *
     * @param string                             $id
     * @param ModelRouterStopSubscriptionRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterStopSubscriptionResponse
     */
    public function modelRouterStopSubscriptionWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterStopSubscription',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '/balance/subscription/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterStopSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a periodic recharge subscription for customer management.
     *
     * @param request - ModelRouterStopSubscriptionRequest
     *
     * @returns ModelRouterStopSubscriptionResponse
     *
     * @param string                             $id
     * @param ModelRouterStopSubscriptionRequest $request
     *
     * @return ModelRouterStopSubscriptionResponse
     */
    public function modelRouterStopSubscription($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterStopSubscriptionWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Transfers funds from a department to a member within an organization.
     *
     * @param request - ModelRouterTransferToMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterTransferToMemberResponse
     *
     * @param string                             $clientId
     * @param string                             $id
     * @param ModelRouterTransferToMemberRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterTransferToMemberResponse
     */
    public function modelRouterTransferToMemberWithOptions($clientId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amount) {
            @$body['amount'] = $request->amount;
        }

        if (null !== $request->balanceType) {
            @$body['balanceType'] = $request->balanceType;
        }

        if (null !== $request->idempotencyKey) {
            @$body['idempotencyKey'] = $request->idempotencyKey;
        }

        if (null !== $request->monthlyQuota) {
            @$body['monthlyQuota'] = $request->monthlyQuota;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterTransferToMember',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($clientId) . '/members/' . Url::percentEncode($id) . '/transfer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterTransferToMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transfers funds from a department to a member within an organization.
     *
     * @param request - ModelRouterTransferToMemberRequest
     *
     * @returns ModelRouterTransferToMemberResponse
     *
     * @param string                             $clientId
     * @param string                             $id
     * @param ModelRouterTransferToMemberRequest $request
     *
     * @return ModelRouterTransferToMemberResponse
     */
    public function modelRouterTransferToMember($clientId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterTransferToMemberWithOptions($clientId, $id, $request, $headers, $runtime);
    }

    /**
     * Billing management/Update billing rules.
     *
     * @param request - ModelRouterUpdateBillingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterUpdateBillingRuleResponse
     *
     * @param string                              $id
     * @param ModelRouterUpdateBillingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ModelRouterUpdateBillingRuleResponse
     */
    public function modelRouterUpdateBillingRuleWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->billingType) {
            @$body['billingType'] = $request->billingType;
        }

        if (null !== $request->effectiveTime) {
            @$body['effectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->expireTime) {
            @$body['expireTime'] = $request->expireTime;
        }

        if (null !== $request->pricingConfig) {
            @$body['pricingConfig'] = $request->pricingConfig;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterUpdateBillingRule',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/billing/rules/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterUpdateBillingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Billing management/Update billing rules.
     *
     * @param request - ModelRouterUpdateBillingRuleRequest
     *
     * @returns ModelRouterUpdateBillingRuleResponse
     *
     * @param string                              $id
     * @param ModelRouterUpdateBillingRuleRequest $request
     *
     * @return ModelRouterUpdateBillingRuleResponse
     */
    public function modelRouterUpdateBillingRule($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterUpdateBillingRuleWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Updates customer information.
     *
     * @param request - ModelRouterUpdateClientRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterUpdateClientResponse
     *
     * @param string                         $id
     * @param ModelRouterUpdateClientRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ModelRouterUpdateClientResponse
     */
    public function modelRouterUpdateClientWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->address) {
            @$body['address'] = $request->address;
        }

        if (null !== $request->allowedModelGroupConfig) {
            @$body['allowedModelGroupConfig'] = $request->allowedModelGroupConfig;
        }

        if (null !== $request->allowedModels) {
            @$body['allowedModels'] = $request->allowedModels;
        }

        if (null !== $request->contact) {
            @$body['contact'] = $request->contact;
        }

        if (null !== $request->discount) {
            @$body['discount'] = $request->discount;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterUpdateClient',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/clients/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterUpdateClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates customer information.
     *
     * @param request - ModelRouterUpdateClientRequest
     *
     * @returns ModelRouterUpdateClientResponse
     *
     * @param string                         $id
     * @param ModelRouterUpdateClientRequest $request
     *
     * @return ModelRouterUpdateClientResponse
     */
    public function modelRouterUpdateClient($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterUpdateClientWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Conversation management / Update conversation.
     *
     * @param request - ModelRouterUpdateConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterUpdateConversationResponse
     *
     * @param string                               $id
     * @param ModelRouterUpdateConversationRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ModelRouterUpdateConversationResponse
     */
    public function modelRouterUpdateConversationWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chatData) {
            @$body['chatData'] = $request->chatData;
        }

        if (null !== $request->messageCount) {
            @$body['messageCount'] = $request->messageCount;
        }

        if (null !== $request->modelIds) {
            @$body['modelIds'] = $request->modelIds;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterUpdateConversation',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/conversations/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterUpdateConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Conversation management / Update conversation.
     *
     * @param request - ModelRouterUpdateConversationRequest
     *
     * @returns ModelRouterUpdateConversationResponse
     *
     * @param string                               $id
     * @param ModelRouterUpdateConversationRequest $request
     *
     * @return ModelRouterUpdateConversationResponse
     */
    public function modelRouterUpdateConversation($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterUpdateConversationWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Model Management / Update Model.
     *
     * @param request - ModelRouterUpdateModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterUpdateModelResponse
     *
     * @param string                        $id
     * @param ModelRouterUpdateModelRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ModelRouterUpdateModelResponse
     */
    public function modelRouterUpdateModelWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->baseUrl) {
            @$body['baseUrl'] = $request->baseUrl;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->maxInputLength) {
            @$body['maxInputLength'] = $request->maxInputLength;
        }

        if (null !== $request->maxOutputLength) {
            @$body['maxOutputLength'] = $request->maxOutputLength;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->modelType) {
            @$body['modelType'] = $request->modelType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->symbol) {
            @$body['symbol'] = $request->symbol;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterUpdateModel',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/models/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterUpdateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Model Management / Update Model.
     *
     * @param request - ModelRouterUpdateModelRequest
     *
     * @returns ModelRouterUpdateModelResponse
     *
     * @param string                        $id
     * @param ModelRouterUpdateModelRequest $request
     *
     * @return ModelRouterUpdateModelResponse
     */
    public function modelRouterUpdateModel($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterUpdateModelWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Edits a manual model group.
     *
     * @remarks
     * Edits a manual group.
     *
     * @param request - ModelRouterUpdateModelGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterUpdateModelGroupResponse
     *
     * @param string                             $groupId
     * @param ModelRouterUpdateModelGroupRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelRouterUpdateModelGroupResponse
     */
    public function modelRouterUpdateModelGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelList) {
            @$body['modelList'] = $request->modelList;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterUpdateModelGroup',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/model-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterUpdateModelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edits a manual model group.
     *
     * @remarks
     * Edits a manual group.
     *
     * @param request - ModelRouterUpdateModelGroupRequest
     *
     * @returns ModelRouterUpdateModelGroupResponse
     *
     * @param string                             $groupId
     * @param ModelRouterUpdateModelGroupRequest $request
     *
     * @return ModelRouterUpdateModelGroupResponse
     */
    public function modelRouterUpdateModelGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterUpdateModelGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Updates user information.
     *
     * @remarks
     * Updates user information.
     *
     * @param request - ModelRouterUpdateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelRouterUpdateUserResponse
     *
     * @param string                       $id
     * @param ModelRouterUpdateUserRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ModelRouterUpdateUserResponse
     */
    public function modelRouterUpdateUserWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelRouterUpdateUser',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelRouter/open/users/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModelRouterUpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates user information.
     *
     * @remarks
     * Updates user information.
     *
     * @param request - ModelRouterUpdateUserRequest
     *
     * @returns ModelRouterUpdateUserResponse
     *
     * @param string                       $id
     * @param ModelRouterUpdateUserRequest $request
     *
     * @return ModelRouterUpdateUserResponse
     */
    public function modelRouterUpdateUser($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelRouterUpdateUserWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Personalized text-to-image: Create image inference tasks using a pre-trained model.
     *
     * @param request - PersonalizedTextToImageAddInferenceJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PersonalizedTextToImageAddInferenceJobResponse
     *
     * @param PersonalizedTextToImageAddInferenceJobRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return PersonalizedTextToImageAddInferenceJobResponse
     */
    public function personalizedTextToImageAddInferenceJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageNumber) {
            @$body['imageNumber'] = $request->imageNumber;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->seed) {
            @$body['seed'] = $request->seed;
        }

        if (null !== $request->strength) {
            @$body['strength'] = $request->strength;
        }

        if (null !== $request->trainSteps) {
            @$body['trainSteps'] = $request->trainSteps;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PersonalizedTextToImageAddInferenceJob',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/addPreModelInferenceJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PersonalizedTextToImageAddInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Personalized text-to-image: Create image inference tasks using a pre-trained model.
     *
     * @param request - PersonalizedTextToImageAddInferenceJobRequest
     *
     * @returns PersonalizedTextToImageAddInferenceJobResponse
     *
     * @param PersonalizedTextToImageAddInferenceJobRequest $request
     *
     * @return PersonalizedTextToImageAddInferenceJobResponse
     */
    public function personalizedTextToImageAddInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageAddInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the content of an image from the personalized text-to-image service using its unique image ID.
     *
     * @param request - PersonalizedTextToImageQueryImageAssetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PersonalizedTextToImageQueryImageAssetResponse
     *
     * @param PersonalizedTextToImageQueryImageAssetRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return PersonalizedTextToImageQueryImageAssetResponse
     */
    public function personalizedTextToImageQueryImageAssetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encodeFormat) {
            @$query['encodeFormat'] = $request->encodeFormat;
        }

        if (null !== $request->imageId) {
            @$query['imageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PersonalizedTextToImageQueryImageAsset',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryImageAssetFromImageId',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'any',
        ]);

        return PersonalizedTextToImageQueryImageAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the content of an image from the personalized text-to-image service using its unique image ID.
     *
     * @param request - PersonalizedTextToImageQueryImageAssetRequest
     *
     * @returns PersonalizedTextToImageQueryImageAssetResponse
     *
     * @param PersonalizedTextToImageQueryImageAssetRequest $request
     *
     * @return PersonalizedTextToImageQueryImageAssetResponse
     */
    public function personalizedTextToImageQueryImageAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageQueryImageAssetWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the status of a personalized text-to-image inference job.
     *
     * @param request - PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     *
     * @param PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest $request
     * @param string[]                                                    $headers
     * @param RuntimeOptions                                              $runtime
     *
     * @return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     */
    public function personalizedTextToImageQueryPreModelInferenceJobInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inferenceJobId) {
            @$query['inferenceJobId'] = $request->inferenceJobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PersonalizedTextToImageQueryPreModelInferenceJobInfo',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryPreModelInferenceJobInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a personalized text-to-image inference job.
     *
     * @param request - PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest
     *
     * @returns PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     *
     * @param PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest $request
     *
     * @return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     */
    public function personalizedTextToImageQueryPreModelInferenceJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageQueryPreModelInferenceJobInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an inference job to generate images based on a personalized text-to-image model.
     *
     * @param request - Personalizedtxt2imgAddInferenceJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgAddInferenceJobResponse
     *
     * @param Personalizedtxt2imgAddInferenceJobRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return Personalizedtxt2imgAddInferenceJobResponse
     */
    public function personalizedtxt2imgAddInferenceJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageNumber) {
            @$body['imageNumber'] = $request->imageNumber;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->seed) {
            @$body['seed'] = $request->seed;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgAddInferenceJob',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/addInferenceJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return Personalizedtxt2imgAddInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an inference job to generate images based on a personalized text-to-image model.
     *
     * @param request - Personalizedtxt2imgAddInferenceJobRequest
     *
     * @returns Personalizedtxt2imgAddInferenceJobResponse
     *
     * @param Personalizedtxt2imgAddInferenceJobRequest $request
     *
     * @return Personalizedtxt2imgAddInferenceJobResponse
     */
    public function personalizedtxt2imgAddInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgAddInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Personalized text-to-image: Create a model training task.
     *
     * @param request - Personalizedtxt2imgAddModelTrainJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgAddModelTrainJobResponse
     *
     * @param Personalizedtxt2imgAddModelTrainJobRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return Personalizedtxt2imgAddModelTrainJobResponse
     */
    public function personalizedtxt2imgAddModelTrainJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->objectType) {
            @$body['objectType'] = $request->objectType;
        }

        if (null !== $request->trainSteps) {
            @$body['trainSteps'] = $request->trainSteps;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgAddModelTrainJob',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/addModelTrainJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return Personalizedtxt2imgAddModelTrainJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Personalized text-to-image: Create a model training task.
     *
     * @param request - Personalizedtxt2imgAddModelTrainJobRequest
     *
     * @returns Personalizedtxt2imgAddModelTrainJobResponse
     *
     * @param Personalizedtxt2imgAddModelTrainJobRequest $request
     *
     * @return Personalizedtxt2imgAddModelTrainJobResponse
     */
    public function personalizedtxt2imgAddModelTrainJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgAddModelTrainJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the binary data of an image generated by the personalized text-to-image service.
     *
     * @param request - Personalizedtxt2imgQueryImageAssetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgQueryImageAssetResponse
     *
     * @param Personalizedtxt2imgQueryImageAssetRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return Personalizedtxt2imgQueryImageAssetResponse
     */
    public function personalizedtxt2imgQueryImageAssetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encodeFormat) {
            @$query['encodeFormat'] = $request->encodeFormat;
        }

        if (null !== $request->imageId) {
            @$query['imageId'] = $request->imageId;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->promptId) {
            @$query['promptId'] = $request->promptId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgQueryImageAsset',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryImageAsset',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'any',
        ]);

        return Personalizedtxt2imgQueryImageAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the binary data of an image generated by the personalized text-to-image service.
     *
     * @param request - Personalizedtxt2imgQueryImageAssetRequest
     *
     * @returns Personalizedtxt2imgQueryImageAssetResponse
     *
     * @param Personalizedtxt2imgQueryImageAssetRequest $request
     *
     * @return Personalizedtxt2imgQueryImageAssetResponse
     */
    public function personalizedtxt2imgQueryImageAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryImageAssetWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the status and results of a Personalizedtxt2img inference job.
     *
     * @param request - Personalizedtxt2imgQueryInferenceJobInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgQueryInferenceJobInfoResponse
     *
     * @param Personalizedtxt2imgQueryInferenceJobInfoRequest $request
     * @param string[]                                        $headers
     * @param RuntimeOptions                                  $runtime
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoResponse
     */
    public function personalizedtxt2imgQueryInferenceJobInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inferenceJobId) {
            @$query['inferenceJobId'] = $request->inferenceJobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgQueryInferenceJobInfo',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryInferenceJobInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return Personalizedtxt2imgQueryInferenceJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the status and results of a Personalizedtxt2img inference job.
     *
     * @param request - Personalizedtxt2imgQueryInferenceJobInfoRequest
     *
     * @returns Personalizedtxt2imgQueryInferenceJobInfoResponse
     *
     * @param Personalizedtxt2imgQueryInferenceJobInfoRequest $request
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoResponse
     */
    public function personalizedtxt2imgQueryInferenceJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryInferenceJobInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Your personalized model training tasks: image generation and query models.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgQueryModelTrainJobListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return Personalizedtxt2imgQueryModelTrainJobListResponse
     */
    public function personalizedtxt2imgQueryModelTrainJobListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgQueryModelTrainJobList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryModelTrainJobList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return Personalizedtxt2imgQueryModelTrainJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Your personalized model training tasks: image generation and query models.
     *
     * @returns Personalizedtxt2imgQueryModelTrainJobListResponse
     *
     * @return Personalizedtxt2imgQueryModelTrainJobListResponse
     */
    public function personalizedtxt2imgQueryModelTrainJobList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryModelTrainJobListWithOptions($headers, $runtime);
    }

    /**
     * Queries the training status of a personalized text-to-image model.
     *
     * @param request - Personalizedtxt2imgQueryModelTrainStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgQueryModelTrainStatusResponse
     *
     * @param Personalizedtxt2imgQueryModelTrainStatusRequest $request
     * @param string[]                                        $headers
     * @param RuntimeOptions                                  $runtime
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusResponse
     */
    public function personalizedtxt2imgQueryModelTrainStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgQueryModelTrainStatus',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryModelTrainStatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return Personalizedtxt2imgQueryModelTrainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the training status of a personalized text-to-image model.
     *
     * @param request - Personalizedtxt2imgQueryModelTrainStatusRequest
     *
     * @returns Personalizedtxt2imgQueryModelTrainStatusResponse
     *
     * @param Personalizedtxt2imgQueryModelTrainStatusRequest $request
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusResponse
     */
    public function personalizedtxt2imgQueryModelTrainStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryModelTrainStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries information about an application access ID (appkey).
     *
     * @param request - QueryApplicationAccessIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryApplicationAccessIdResponse
     *
     * @param QueryApplicationAccessIdRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryApplicationAccessIdResponse
     */
    public function queryApplicationAccessIdWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationAccessId) {
            @$query['applicationAccessId'] = $request->applicationAccessId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryApplicationAccessId',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryApplicationAccessId',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryApplicationAccessIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about an application access ID (appkey).
     *
     * @param request - QueryApplicationAccessIdRequest
     *
     * @returns QueryApplicationAccessIdResponse
     *
     * @param QueryApplicationAccessIdRequest $request
     *
     * @return QueryApplicationAccessIdResponse
     */
    public function queryApplicationAccessId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryApplicationAccessIdWithOptions($request, $headers, $runtime);
    }

    /**
     * Alibaba Cloud console / Project list.
     *
     * @param request - QueryProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProjectResponse
     *
     * @param QueryProjectRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryProjectResponse
     */
    public function queryProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryProject',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryProject',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alibaba Cloud console / Project list.
     *
     * @param request - QueryProjectRequest
     *
     * @returns QueryProjectResponse
     *
     * @param QueryProjectRequest $request
     *
     * @return QueryProjectResponse
     */
    public function queryProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * Alibaba Cloud console / Project List.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProjectListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QueryProjectListResponse
     */
    public function queryProjectListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'QueryProjectList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryProjectList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryProjectListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alibaba Cloud console / Project List.
     *
     * @returns QueryProjectListResponse
     *
     * @return QueryProjectListResponse
     */
    public function queryProjectList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProjectListWithOptions($headers, $runtime);
    }

    /**
     * Alibaba Cloud Console / Purchased Services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPurchasedServiceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QueryPurchasedServiceResponse
     */
    public function queryPurchasedServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'QueryPurchasedService',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryPurchasedService',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryPurchasedServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alibaba Cloud Console / Purchased Services.
     *
     * @returns QueryPurchasedServiceResponse
     *
     * @return QueryPurchasedServiceResponse
     */
    public function queryPurchasedService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPurchasedServiceWithOptions($headers, $runtime);
    }

    /**
     * Alibaba Cloud Console / Update project information.
     *
     * @param request - UpdateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->projectName) {
            @$body['projectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/updateProject',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alibaba Cloud Console / Update project information.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($request, $headers, $runtime);
    }
}
