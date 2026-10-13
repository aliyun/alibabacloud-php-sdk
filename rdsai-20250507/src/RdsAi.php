<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\AddContextDatabaseSyncJobExclusionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\AddContextDatabaseSyncJobExclusionResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CancelContextDatabaseSyncDiscoveryRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CancelContextDatabaseSyncDiscoveryResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CancelContextDatabaseSyncRunRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CancelContextDatabaseSyncRunResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesTaskStopRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesTaskStopResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateApiKeyRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateApiKeyResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseApiKeyRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseApiKeyResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseMemberRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseMemberResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseSyncConnectionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseSyncConnectionResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseSyncJobRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseSyncJobResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseSyncJobShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseSyncSourceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseSyncSourceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseSyncSourceShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseWorkspaceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseWorkspaceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateCustomAgentShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateInspectionTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateInspectionTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateMOUsageDetailExportRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateMOUsageDetailExportResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateSandboxTemplateRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateSandboxTemplateResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateSandboxTemplateShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateScheduledTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateSkillRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateSkillResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateSkillShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteApiKeyRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteApiKeyResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteAppInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteAppInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseMemberRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseMemberResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseSyncConnectionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseSyncConnectionResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseSyncJobRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseSyncJobResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseSyncSourceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseSyncSourceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseWorkspaceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseWorkspaceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteSandboxTemplateRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteSandboxTemplateResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteScheduledTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteScheduledTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteSkillRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteSkillResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstanceAttributeRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstanceAttributeResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstancesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstancesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeCommonSandboxTemplatesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeCommonSandboxTemplatesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeEventsListRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeEventsListResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceRAGConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceRAGConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceSSLRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceSSLResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceStorageConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceStorageConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeModelOperatorRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeModelOperatorResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMonitorDataRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMonitorDataResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMonitorDataShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOTokenUsageDetailRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOTokenUsageDetailResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOTokenUsageSummaryRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOTokenUsageSummaryResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOUsageDetailExportRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOUsageDetailExportResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeSandboxTemplatesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeSandboxTemplatesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeWhitelistIpsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeWhitelistIpsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DisableAgentRuntimeRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DisableAgentRuntimeResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\EnableAgentRuntimeRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\EnableAgentRuntimeResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetAvailableLLMModelsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetAvailableLLMModelsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetChatModelRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetChatModelResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncConnectionAuthorizationRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncConnectionAuthorizationResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncConnectionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncConnectionResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncDiscoveryTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncDiscoveryTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobReadinessRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobReadinessResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobScheduleRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobScheduleResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncRunRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncRunResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncSourceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncSourceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncSourceSelectionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncSourceSelectionResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetConversationsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetConversationsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetInspectionReportRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetInspectionReportResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetModelOperatorOrderRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetModelOperatorOrderResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetScheduledInstancesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetScheduledInstancesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetScheduledReportsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetScheduledReportsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetSkillRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetSkillResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetStandAloneReportsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetStandAloneReportsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListApiKeysRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListApiKeysResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseApiKeysRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseApiKeysResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseMembersRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseMembersResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncConnectionsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncConnectionsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobDocumentsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobDocumentsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobExclusionsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobExclusionsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncPluginsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncPluginsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunItemsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunItemsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunLogsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunLogsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncSourcesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncSourcesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncSourceTreeNodesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncSourceTreeNodesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseWorkspacesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseWorkspacesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListCustomAgentToolsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListLLMTokenUsageRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListLLMTokenUsageResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListScheduledTasksRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListScheduledTasksResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListSkillRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListSkillResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyAppInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyAppInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyAppInstanceShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceSSLRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceSSLResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstancesSSLRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstancesSSLResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstancesSSLShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyMessagesFeedbacksRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyMessagesFeedbacksResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifySandboxTemplateRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifySandboxTemplateResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifySandboxTemplateShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyScheduledTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyScheduledTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyWhitelistIpsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyWhitelistIpsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RemoveContextDatabaseSyncJobExclusionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RemoveContextDatabaseSyncJobExclusionResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RenameApiKeyRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RenameApiKeyResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetApiKeyRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetApiKeyResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetInstanceKeysRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetInstanceKeysResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetInstancePasswordRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetInstancePasswordResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RetryFailedContextDatabaseSyncRunRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RetryFailedContextDatabaseSyncRunResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RevokeContextDatabaseApiKeyRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RevokeContextDatabaseApiKeyResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartContextDatabaseSyncRunRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartContextDatabaseSyncRunResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartContextDatabaseSyncSourceDiscoveryRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartContextDatabaseSyncSourceDiscoveryResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StopInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StopInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateApiKeyQuotaRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateApiKeyQuotaResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateApiKeyQuotaShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseApiKeyRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseApiKeyResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseMemberRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseMemberResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncConnectionCredentialRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncConnectionCredentialResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncConnectionCredentialShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncConnectionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncConnectionResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncJobRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncJobResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncJobScheduleRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncJobScheduleResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncJobScheduleShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncJobShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncSourceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncSourceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncSourceSelectionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncSourceSelectionResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncSourceSelectionShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseSyncSourceShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseWorkspaceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseWorkspaceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateCustomAgentShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateMOQuotaAlertThresholdRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateMOQuotaAlertThresholdResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateMOQuotaAlertThresholdShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateSkillRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateSkillResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateSkillShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\VerifyContextDatabaseSyncConnectionRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\VerifyContextDatabaseSyncConnectionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class RdsAi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-wulanchabu' => 'rdsai.aliyuncs.com',
            'cn-shenzhen' => 'rdsai.aliyuncs.com',
            'cn-beijing' => 'rdsai.aliyuncs.com',
            'cn-shanghai' => 'rdsai.aliyuncs.com',
            'cn-guangzhou' => 'rdsai.aliyuncs.com',
            'cn-hangzhou' => 'rdsai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rdsai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds an exclusion item to an import task.
     *
     * @remarks
     * Adds a job exclusion item.
     *
     * @param request - AddContextDatabaseSyncJobExclusionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddContextDatabaseSyncJobExclusionResponse
     *
     * @param AddContextDatabaseSyncJobExclusionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AddContextDatabaseSyncJobExclusionResponse
     */
    public function addContextDatabaseSyncJobExclusionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->documentId) {
            @$query['DocumentId'] = $request->documentId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddContextDatabaseSyncJobExclusion',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddContextDatabaseSyncJobExclusionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an exclusion item to an import task.
     *
     * @remarks
     * Adds a job exclusion item.
     *
     * @param request - AddContextDatabaseSyncJobExclusionRequest
     *
     * @returns AddContextDatabaseSyncJobExclusionResponse
     *
     * @param AddContextDatabaseSyncJobExclusionRequest $request
     *
     * @return AddContextDatabaseSyncJobExclusionResponse
     */
    public function addContextDatabaseSyncJobExclusion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addContextDatabaseSyncJobExclusionWithOptions($request, $runtime);
    }

    /**
     * Cancels an in-progress discovery task by task ID.
     *
     * @remarks
     * You can specify a ClientToken to ensure idempotence for write operations. If you do not specify this parameter, the backend automatically generates one.
     *
     * @param request - CancelContextDatabaseSyncDiscoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelContextDatabaseSyncDiscoveryResponse
     *
     * @param CancelContextDatabaseSyncDiscoveryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CancelContextDatabaseSyncDiscoveryResponse
     */
    public function cancelContextDatabaseSyncDiscoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelContextDatabaseSyncDiscovery',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelContextDatabaseSyncDiscoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an in-progress discovery task by task ID.
     *
     * @remarks
     * You can specify a ClientToken to ensure idempotence for write operations. If you do not specify this parameter, the backend automatically generates one.
     *
     * @param request - CancelContextDatabaseSyncDiscoveryRequest
     *
     * @returns CancelContextDatabaseSyncDiscoveryResponse
     *
     * @param CancelContextDatabaseSyncDiscoveryRequest $request
     *
     * @return CancelContextDatabaseSyncDiscoveryResponse
     */
    public function cancelContextDatabaseSyncDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelContextDatabaseSyncDiscoveryWithOptions($request, $runtime);
    }

    /**
     * Cancels a run.
     *
     * @remarks
     * Write operations support idempotence through ClientToken. If ClientToken is not provided, the backend generates one automatically. Cancellation is best-effort. Completed RunItems are not affected.
     *
     * @param request - CancelContextDatabaseSyncRunRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelContextDatabaseSyncRunResponse
     *
     * @param CancelContextDatabaseSyncRunRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelContextDatabaseSyncRunResponse
     */
    public function cancelContextDatabaseSyncRunWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->runId) {
            @$query['RunId'] = $request->runId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelContextDatabaseSyncRun',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelContextDatabaseSyncRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a run.
     *
     * @remarks
     * Write operations support idempotence through ClientToken. If ClientToken is not provided, the backend generates one automatically. Cancellation is best-effort. Completed RunItems are not affected.
     *
     * @param request - CancelContextDatabaseSyncRunRequest
     *
     * @returns CancelContextDatabaseSyncRunResponse
     *
     * @param CancelContextDatabaseSyncRunRequest $request
     *
     * @return CancelContextDatabaseSyncRunResponse
     */
    public function cancelContextDatabaseSyncRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelContextDatabaseSyncRunWithOptions($request, $runtime);
    }

    /**
     * Sends a conversation message.
     *
     * @param tmpReq - ChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatMessagesResponse
     *
     * @param ChatMessagesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ChatMessagesResponse
     */
    public function chatMessagesWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatMessagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        if (null !== $tmpReq->inputs) {
            $request->inputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputs, 'Inputs', 'json');
        }

        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->eventMode) {
            @$query['EventMode'] = $request->eventMode;
        }

        if (null !== $request->filesShrink) {
            @$query['Files'] = $request->filesShrink;
        }

        if (null !== $request->inputsShrink) {
            @$query['Inputs'] = $request->inputsShrink;
        }

        if (null !== $request->parentMessageId) {
            @$query['ParentMessageId'] = $request->parentMessageId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatMessages',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield ChatMessagesResponse::fromMap([
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
     * Sends a conversation message.
     *
     * @param tmpReq - ChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatMessagesResponse
     *
     * @param ChatMessagesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ChatMessagesResponse
     */
    public function chatMessagesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatMessagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        if (null !== $tmpReq->inputs) {
            $request->inputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputs, 'Inputs', 'json');
        }

        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->eventMode) {
            @$query['EventMode'] = $request->eventMode;
        }

        if (null !== $request->filesShrink) {
            @$query['Files'] = $request->filesShrink;
        }

        if (null !== $request->inputsShrink) {
            @$query['Inputs'] = $request->inputsShrink;
        }

        if (null !== $request->parentMessageId) {
            @$query['ParentMessageId'] = $request->parentMessageId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatMessages',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a conversation message.
     *
     * @param request - ChatMessagesRequest
     *
     * @returns ChatMessagesResponse
     *
     * @param ChatMessagesRequest $request
     *
     * @return ChatMessagesResponse
     */
    public function chatMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatMessagesWithOptions($request, $runtime);
    }

    /**
     * Stops a conversation.
     *
     * @param request - ChatMessagesTaskStopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatMessagesTaskStopResponse
     *
     * @param ChatMessagesTaskStopRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ChatMessagesTaskStopResponse
     */
    public function chatMessagesTaskStopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatMessagesTaskStop',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatMessagesTaskStopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a conversation.
     *
     * @param request - ChatMessagesTaskStopRequest
     *
     * @returns ChatMessagesTaskStopResponse
     *
     * @param ChatMessagesTaskStopRequest $request
     *
     * @return ChatMessagesTaskStopResponse
     */
    public function chatMessagesTaskStop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatMessagesTaskStopWithOptions($request, $runtime);
    }

    /**
     * Creates a custom API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - CreateApiKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiKeyResponse
     *
     * @param CreateApiKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateApiKeyResponse
     */
    public function createApiKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dailyTokenQuota) {
            @$query['DailyTokenQuota'] = $request->dailyTokenQuota;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        if (null !== $request->limitRate) {
            @$query['LimitRate'] = $request->limitRate;
        }

        if (null !== $request->limitType) {
            @$query['LimitType'] = $request->limitType;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        if (null !== $request->tokenQuota) {
            @$query['TokenQuota'] = $request->tokenQuota;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApiKey',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - CreateApiKeyRequest
     *
     * @returns CreateApiKeyResponse
     *
     * @param CreateApiKeyRequest $request
     *
     * @return CreateApiKeyResponse
     */
    public function createApiKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiKeyWithOptions($request, $runtime);
    }

    /**
     * Creates an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * >Warning: This API operation incurs fees. Read the related documentation carefully before you perform this operation.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
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
        if (null !== $tmpReq->components) {
            $request->componentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }

        if (null !== $tmpReq->DBInstanceConfig) {
            $request->DBInstanceConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceConfig, 'DBInstanceConfig', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->componentsShrink) {
            @$query['Components'] = $request->componentsShrink;
        }

        if (null !== $request->DBInstanceConfigShrink) {
            @$query['DBInstanceConfig'] = $request->DBInstanceConfigShrink;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dashboardPassword) {
            @$query['DashboardPassword'] = $request->dashboardPassword;
        }

        if (null !== $request->dashboardUsername) {
            @$query['DashboardUsername'] = $request->dashboardUsername;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->databasePassword) {
            @$query['DatabasePassword'] = $request->databasePassword;
        }

        if (null !== $request->initializeWithExistingData) {
            @$query['InitializeWithExistingData'] = $request->initializeWithExistingData;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->publicEndpointEnabled) {
            @$query['PublicEndpointEnabled'] = $request->publicEndpointEnabled;
        }

        if (null !== $request->publicNetworkAccessEnabled) {
            @$query['PublicNetworkAccessEnabled'] = $request->publicNetworkAccessEnabled;
        }

        if (null !== $request->RAGEnabled) {
            @$query['RAGEnabled'] = $request->RAGEnabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstance',
            'version' => '2025-05-07',
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
     * Creates an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * >Warning: This API operation incurs fees. Read the related documentation carefully before you perform this operation.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
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
     * Creates a context database API key.
     *
     * @remarks
     * Creates an API key and returns the plaintext apiKey.
     *
     * @param request - CreateContextDatabaseApiKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextDatabaseApiKeyResponse
     *
     * @param CreateContextDatabaseApiKeyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateContextDatabaseApiKeyResponse
     */
    public function createContextDatabaseApiKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContextDatabaseApiKey',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContextDatabaseApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a context database API key.
     *
     * @remarks
     * Creates an API key and returns the plaintext apiKey.
     *
     * @param request - CreateContextDatabaseApiKeyRequest
     *
     * @returns CreateContextDatabaseApiKeyResponse
     *
     * @param CreateContextDatabaseApiKeyRequest $request
     *
     * @return CreateContextDatabaseApiKeyResponse
     */
    public function createContextDatabaseApiKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContextDatabaseApiKeyWithOptions($request, $runtime);
    }

    /**
     * Creates a ContextDB member.
     *
     * @remarks
     * Creates a member. If GenerateInitialKey is set to true, the first API key is also issued, and the plaintext ApiKey is returned in the response. This is a sensitive field and is returned only once. Store it securely. After the member is created, you can call the List or Get operation to query the member and the metadata of the API keys under the member.
     *
     * @param request - CreateContextDatabaseMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextDatabaseMemberResponse
     *
     * @param CreateContextDatabaseMemberRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateContextDatabaseMemberResponse
     */
    public function createContextDatabaseMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->generateInitialKey) {
            @$query['GenerateInitialKey'] = $request->generateInitialKey;
        }

        if (null !== $request->initialKeyName) {
            @$query['InitialKeyName'] = $request->initialKeyName;
        }

        if (null !== $request->memberName) {
            @$query['MemberName'] = $request->memberName;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContextDatabaseMember',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContextDatabaseMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a ContextDB member.
     *
     * @remarks
     * Creates a member. If GenerateInitialKey is set to true, the first API key is also issued, and the plaintext ApiKey is returned in the response. This is a sensitive field and is returned only once. Store it securely. After the member is created, you can call the List or Get operation to query the member and the metadata of the API keys under the member.
     *
     * @param request - CreateContextDatabaseMemberRequest
     *
     * @returns CreateContextDatabaseMemberResponse
     *
     * @param CreateContextDatabaseMemberRequest $request
     *
     * @return CreateContextDatabaseMemberResponse
     */
    public function createContextDatabaseMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContextDatabaseMemberWithOptions($request, $runtime);
    }

    /**
     * Creates a synchronization connection.
     *
     * @remarks
     * For write operations, you can specify a ClientToken to ensure idempotency. If no ClientToken is provided, the backend automatically generates one. Upon successful creation, the complete information of the created object is returned, including the ID that can be used for subsequent queries or updates.
     *
     * @param request - CreateContextDatabaseSyncConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextDatabaseSyncConnectionResponse
     *
     * @param CreateContextDatabaseSyncConnectionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateContextDatabaseSyncConnectionResponse
     */
    public function createContextDatabaseSyncConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKind) {
            @$query['AuthKind'] = $request->authKind;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContextDatabaseSyncConnection',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContextDatabaseSyncConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a synchronization connection.
     *
     * @remarks
     * For write operations, you can specify a ClientToken to ensure idempotency. If no ClientToken is provided, the backend automatically generates one. Upon successful creation, the complete information of the created object is returned, including the ID that can be used for subsequent queries or updates.
     *
     * @param request - CreateContextDatabaseSyncConnectionRequest
     *
     * @returns CreateContextDatabaseSyncConnectionResponse
     *
     * @param CreateContextDatabaseSyncConnectionRequest $request
     *
     * @return CreateContextDatabaseSyncConnectionResponse
     */
    public function createContextDatabaseSyncConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContextDatabaseSyncConnectionWithOptions($request, $runtime);
    }

    /**
     * Creates an import task.
     *
     * @remarks
     * Write operations support idempotence via ClientToken. If ClientToken is not provided, the backend generates one automatically. Target is an implicit concept — you only need to provide KnowledgeBaseId, and the backend automatically creates or matches the Target.
     * On success, the response returns the complete information of the created object. The Id field is active and can be used for subsequent queries or updates.
     *
     * @param tmpReq - CreateContextDatabaseSyncJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextDatabaseSyncJobResponse
     *
     * @param CreateContextDatabaseSyncJobRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateContextDatabaseSyncJobResponse
     */
    public function createContextDatabaseSyncJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateContextDatabaseSyncJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filters) {
            $request->filtersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->filtersShrink) {
            @$query['Filters'] = $request->filtersShrink;
        }

        if (null !== $request->knowledgeBaseId) {
            @$query['KnowledgeBaseId'] = $request->knowledgeBaseId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetKnowledgeBaseId) {
            @$query['TargetKnowledgeBaseId'] = $request->targetKnowledgeBaseId;
        }

        if (null !== $request->targetKnowledgeBaseName) {
            @$query['TargetKnowledgeBaseName'] = $request->targetKnowledgeBaseName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContextDatabaseSyncJob',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContextDatabaseSyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an import task.
     *
     * @remarks
     * Write operations support idempotence via ClientToken. If ClientToken is not provided, the backend generates one automatically. Target is an implicit concept — you only need to provide KnowledgeBaseId, and the backend automatically creates or matches the Target.
     * On success, the response returns the complete information of the created object. The Id field is active and can be used for subsequent queries or updates.
     *
     * @param request - CreateContextDatabaseSyncJobRequest
     *
     * @returns CreateContextDatabaseSyncJobResponse
     *
     * @param CreateContextDatabaseSyncJobRequest $request
     *
     * @return CreateContextDatabaseSyncJobResponse
     */
    public function createContextDatabaseSyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContextDatabaseSyncJobWithOptions($request, $runtime);
    }

    /**
     * Creates a data selection scope.
     *
     * @remarks
     * Write operations support idempotence by passing a ClientToken. If no token is provided, the backend generates one automatically. After creating a data selection scope, you typically need to call StartContextDatabaseSyncSourceDiscovery to discover available nodes.
     * On success, the response returns the complete information of the created object. The Id field can be used for subsequent queries or updates.
     *
     * @param tmpReq - CreateContextDatabaseSyncSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextDatabaseSyncSourceResponse
     *
     * @param CreateContextDatabaseSyncSourceRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateContextDatabaseSyncSourceResponse
     */
    public function createContextDatabaseSyncSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateContextDatabaseSyncSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceConfig) {
            $request->sourceConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceConfig, 'SourceConfig', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$query['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->sourceConfigShrink) {
            @$query['SourceConfig'] = $request->sourceConfigShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContextDatabaseSyncSource',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContextDatabaseSyncSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data selection scope.
     *
     * @remarks
     * Write operations support idempotence by passing a ClientToken. If no token is provided, the backend generates one automatically. After creating a data selection scope, you typically need to call StartContextDatabaseSyncSourceDiscovery to discover available nodes.
     * On success, the response returns the complete information of the created object. The Id field can be used for subsequent queries or updates.
     *
     * @param request - CreateContextDatabaseSyncSourceRequest
     *
     * @returns CreateContextDatabaseSyncSourceResponse
     *
     * @param CreateContextDatabaseSyncSourceRequest $request
     *
     * @return CreateContextDatabaseSyncSourceResponse
     */
    public function createContextDatabaseSyncSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContextDatabaseSyncSourceWithOptions($request, $runtime);
    }

    /**
     * Creates a workspace, the first member, and the first API key in a one-time onboarding process.
     *
     * @remarks
     * Creates a workspace along with the first member and the first API key in a one-time onboarding process. The plaintext API key is returned in the response.
     *
     * @param request - CreateContextDatabaseWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextDatabaseWorkspaceResponse
     *
     * @param CreateContextDatabaseWorkspaceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateContextDatabaseWorkspaceResponse
     */
    public function createContextDatabaseWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberName) {
            @$query['MemberName'] = $request->memberName;
        }

        if (null !== $request->workspaceName) {
            @$query['WorkspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContextDatabaseWorkspace',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContextDatabaseWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workspace, the first member, and the first API key in a one-time onboarding process.
     *
     * @remarks
     * Creates a workspace along with the first member and the first API key in a one-time onboarding process. The plaintext API key is returned in the response.
     *
     * @param request - CreateContextDatabaseWorkspaceRequest
     *
     * @returns CreateContextDatabaseWorkspaceResponse
     *
     * @param CreateContextDatabaseWorkspaceRequest $request
     *
     * @return CreateContextDatabaseWorkspaceResponse
     */
    public function createContextDatabaseWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContextDatabaseWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Creates a user-specific agent.
     *
     * @param tmpReq - CreateCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomAgentResponse
     *
     * @param CreateCustomAgentRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomAgentResponse
     */
    public function createCustomAgentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCustomAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->skillIds) {
            $request->skillIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->skillIds, 'SkillIds', 'json');
        }

        if (null !== $tmpReq->tools) {
            $request->toolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tools, 'Tools', 'json');
        }

        $query = [];
        if (null !== $request->enableTools) {
            @$query['EnableTools'] = $request->enableTools;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->skillIdsShrink) {
            @$query['SkillIds'] = $request->skillIdsShrink;
        }

        if (null !== $request->systemPrompt) {
            @$query['SystemPrompt'] = $request->systemPrompt;
        }

        if (null !== $request->toolsShrink) {
            @$query['Tools'] = $request->toolsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a user-specific agent.
     *
     * @param request - CreateCustomAgentRequest
     *
     * @returns CreateCustomAgentResponse
     *
     * @param CreateCustomAgentRequest $request
     *
     * @return CreateCustomAgentResponse
     */
    public function createCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomAgentWithOptions($request, $runtime);
    }

    /**
     * Creates a batch instance inspection task.
     *
     * @param request - CreateInspectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInspectionTaskResponse
     *
     * @param CreateInspectionTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateInspectionTaskResponse
     */
    public function createInspectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->inspectionItems) {
            @$query['InspectionItems'] = $request->inspectionItems;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reportLanguage) {
            @$query['ReportLanguage'] = $request->reportLanguage;
        }

        if (null !== $request->reportRegionId) {
            @$query['ReportRegionId'] = $request->reportRegionId;
        }

        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInspectionTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a batch instance inspection task.
     *
     * @param request - CreateInspectionTaskRequest
     *
     * @returns CreateInspectionTaskResponse
     *
     * @param CreateInspectionTaskRequest $request
     *
     * @return CreateInspectionTaskResponse
     */
    public function createInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * Triggers an asynchronous export task for MO usage details in CSV format.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - CreateMOUsageDetailExportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMOUsageDetailExportResponse
     *
     * @param CreateMOUsageDetailExportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMOUsageDetailExportResponse
     */
    public function createMOUsageDetailExportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->usageType) {
            @$query['UsageType'] = $request->usageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMOUsageDetailExport',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMOUsageDetailExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers an asynchronous export task for MO usage details in CSV format.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - CreateMOUsageDetailExportRequest
     *
     * @returns CreateMOUsageDetailExportResponse
     *
     * @param CreateMOUsageDetailExportRequest $request
     *
     * @return CreateMOUsageDetailExportResponse
     */
    public function createMOUsageDetailExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMOUsageDetailExportWithOptions($request, $runtime);
    }

    /**
     * Creates a sandbox template.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param tmpReq - CreateSandboxTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSandboxTemplateResponse
     *
     * @param CreateSandboxTemplateRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSandboxTemplateResponse
     */
    public function createSandboxTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSandboxTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->defaultCpu) {
            @$query['DefaultCpu'] = $request->defaultCpu;
        }

        if (null !== $request->defaultMemory) {
            @$query['DefaultMemory'] = $request->defaultMemory;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSandboxTemplate',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSandboxTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a sandbox template.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - CreateSandboxTemplateRequest
     *
     * @returns CreateSandboxTemplateResponse
     *
     * @param CreateSandboxTemplateRequest $request
     *
     * @return CreateSandboxTemplateResponse
     */
    public function createSandboxTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSandboxTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a scheduled inspection configuration for batch instances.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related feature documentation
     * >Warning: This API operation incurs fees. Read the related feature documentation carefully before you perform this operation.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - CreateScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param CreateScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->inspectionItems) {
            @$query['InspectionItems'] = $request->inspectionItems;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reportLanguage) {
            @$query['ReportLanguage'] = $request->reportLanguage;
        }

        if (null !== $request->reportRegionId) {
            @$query['ReportRegionId'] = $request->reportRegionId;
        }

        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scheduled inspection configuration for batch instances.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related feature documentation
     * >Warning: This API operation incurs fees. Read the related feature documentation carefully before you perform this operation.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - CreateScheduledTaskRequest
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param CreateScheduledTaskRequest $request
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a user-defined skill.
     *
     * @param tmpReq - CreateSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillResponse
     *
     * @param CreateSkillRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSkillResponse
     */
    public function createSkillWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSkillShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        if (null !== $tmpReq->dbtypes) {
            $request->dbtypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dbtypes, 'Dbtypes', 'json');
        }

        $query = [];
        if (null !== $request->contentShrink) {
            @$query['Content'] = $request->contentShrink;
        }

        if (null !== $request->dbtypesShrink) {
            @$query['Dbtypes'] = $request->dbtypesShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->updateNote) {
            @$query['UpdateNote'] = $request->updateNote;
        }

        if (null !== $request->uploadId) {
            @$query['UploadId'] = $request->uploadId;
        }

        if (null !== $request->uploadToken) {
            @$query['UploadToken'] = $request->uploadToken;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSkill',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a user-defined skill.
     *
     * @param request - CreateSkillRequest
     *
     * @returns CreateSkillResponse
     *
     * @param CreateSkillRequest $request
     *
     * @return CreateSkillResponse
     */
    public function createSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DeleteApiKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiKeyResponse
     *
     * @param DeleteApiKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApiKey',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DeleteApiKeyRequest
     *
     * @returns DeleteApiKeyResponse
     *
     * @param DeleteApiKeyRequest $request
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiKeyWithOptions($request, $runtime);
    }

    /**
     * Deletes an RDS AI application instance.
     *
     * @remarks
     * ### Applicable DPI engine
     * RDS PostgreSQL
     * ### Related feature documentation
     * >Warning: This API operation incurs fees. Read the related feature documentation carefully before you perform this operation.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >Notice: Deleting an RDS Supabase project does not automatically delete the ApsaraDB RDS for PostgreSQL instance or the Internet NAT gateway that were created along with the project. You must [manual release the instance](https://help.aliyun.com/document_detail/96749.html) and delete the [Internet NAT gateway](https://help.aliyun.com/document_detail/121139.html) and [EIP](https://help.aliyun.com/document_detail/121527.html).
     *
     * @param request - DeleteAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppInstanceResponse
     *
     * @param DeleteAppInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAppInstanceResponse
     */
    public function deleteAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deleteDBInstance) {
            @$query['DeleteDBInstance'] = $request->deleteDBInstance;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an RDS AI application instance.
     *
     * @remarks
     * ### Applicable DPI engine
     * RDS PostgreSQL
     * ### Related feature documentation
     * >Warning: This API operation incurs fees. Read the related feature documentation carefully before you perform this operation.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >Notice: Deleting an RDS Supabase project does not automatically delete the ApsaraDB RDS for PostgreSQL instance or the Internet NAT gateway that were created along with the project. You must [manual release the instance](https://help.aliyun.com/document_detail/96749.html) and delete the [Internet NAT gateway](https://help.aliyun.com/document_detail/121139.html) and [EIP](https://help.aliyun.com/document_detail/121527.html).
     *
     * @param request - DeleteAppInstanceRequest
     *
     * @returns DeleteAppInstanceResponse
     *
     * @param DeleteAppInstanceRequest $request
     *
     * @return DeleteAppInstanceResponse
     */
    public function deleteAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a context database member.
     *
     * @remarks
     * Deletes a member. This is a hard delete and cannot be undone.
     *
     * @param request - DeleteContextDatabaseMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextDatabaseMemberResponse
     *
     * @param DeleteContextDatabaseMemberRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteContextDatabaseMemberResponse
     */
    public function deleteContextDatabaseMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContextDatabaseMember',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContextDatabaseMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a context database member.
     *
     * @remarks
     * Deletes a member. This is a hard delete and cannot be undone.
     *
     * @param request - DeleteContextDatabaseMemberRequest
     *
     * @returns DeleteContextDatabaseMemberResponse
     *
     * @param DeleteContextDatabaseMemberRequest $request
     *
     * @return DeleteContextDatabaseMemberResponse
     */
    public function deleteContextDatabaseMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContextDatabaseMemberWithOptions($request, $runtime);
    }

    /**
     * Deletes a data source.
     *
     * @remarks
     * For write operations, you can specify a ClientToken to ensure idempotency. If you do not specify a ClientToken, the backend automatically generates one.
     *
     * @param request - DeleteContextDatabaseSyncConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextDatabaseSyncConnectionResponse
     *
     * @param DeleteContextDatabaseSyncConnectionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DeleteContextDatabaseSyncConnectionResponse
     */
    public function deleteContextDatabaseSyncConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$query['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContextDatabaseSyncConnection',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContextDatabaseSyncConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data source.
     *
     * @remarks
     * For write operations, you can specify a ClientToken to ensure idempotency. If you do not specify a ClientToken, the backend automatically generates one.
     *
     * @param request - DeleteContextDatabaseSyncConnectionRequest
     *
     * @returns DeleteContextDatabaseSyncConnectionResponse
     *
     * @param DeleteContextDatabaseSyncConnectionRequest $request
     *
     * @return DeleteContextDatabaseSyncConnectionResponse
     */
    public function deleteContextDatabaseSyncConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContextDatabaseSyncConnectionWithOptions($request, $runtime);
    }

    /**
     * Deletes an import task.
     *
     * @remarks
     * You can provide a ClientToken to ensure idempotency for write operations. If not provided, the backend automatically generates one.
     *
     * @param request - DeleteContextDatabaseSyncJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextDatabaseSyncJobResponse
     *
     * @param DeleteContextDatabaseSyncJobRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteContextDatabaseSyncJobResponse
     */
    public function deleteContextDatabaseSyncJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContextDatabaseSyncJob',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContextDatabaseSyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an import task.
     *
     * @remarks
     * You can provide a ClientToken to ensure idempotency for write operations. If not provided, the backend automatically generates one.
     *
     * @param request - DeleteContextDatabaseSyncJobRequest
     *
     * @returns DeleteContextDatabaseSyncJobResponse
     *
     * @param DeleteContextDatabaseSyncJobRequest $request
     *
     * @return DeleteContextDatabaseSyncJobResponse
     */
    public function deleteContextDatabaseSyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContextDatabaseSyncJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a data selection scope.
     *
     * @remarks
     * Write operations support idempotence through ClientToken. If ClientToken is not provided, the backend generates one automatically.
     *
     * @param request - DeleteContextDatabaseSyncSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextDatabaseSyncSourceResponse
     *
     * @param DeleteContextDatabaseSyncSourceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteContextDatabaseSyncSourceResponse
     */
    public function deleteContextDatabaseSyncSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContextDatabaseSyncSource',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContextDatabaseSyncSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data selection scope.
     *
     * @remarks
     * Write operations support idempotence through ClientToken. If ClientToken is not provided, the backend generates one automatically.
     *
     * @param request - DeleteContextDatabaseSyncSourceRequest
     *
     * @returns DeleteContextDatabaseSyncSourceResponse
     *
     * @param DeleteContextDatabaseSyncSourceRequest $request
     *
     * @return DeleteContextDatabaseSyncSourceResponse
     */
    public function deleteContextDatabaseSyncSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContextDatabaseSyncSourceWithOptions($request, $runtime);
    }

    /**
     * Deletes a ContextDB workspace.
     *
     * @remarks
     * Deletes a workspace. This is a hard delete and cannot be recovered. After the workspace is deleted, the local metadata is soft-deleted synchronously. Deleted workspaces no longer count toward the quota.
     *
     * @param request - DeleteContextDatabaseWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextDatabaseWorkspaceResponse
     *
     * @param DeleteContextDatabaseWorkspaceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteContextDatabaseWorkspaceResponse
     */
    public function deleteContextDatabaseWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContextDatabaseWorkspace',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContextDatabaseWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a ContextDB workspace.
     *
     * @remarks
     * Deletes a workspace. This is a hard delete and cannot be recovered. After the workspace is deleted, the local metadata is soft-deleted synchronously. Deleted workspaces no longer count toward the quota.
     *
     * @param request - DeleteContextDatabaseWorkspaceRequest
     *
     * @returns DeleteContextDatabaseWorkspaceResponse
     *
     * @param DeleteContextDatabaseWorkspaceRequest $request
     *
     * @return DeleteContextDatabaseWorkspaceResponse
     */
    public function deleteContextDatabaseWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContextDatabaseWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Deletes a dedicated agent created by the user.
     *
     * @param request - DeleteCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomAgentResponse
     *
     * @param DeleteCustomAgentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomAgentResponse
     */
    public function deleteCustomAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customAgentId) {
            @$query['CustomAgentId'] = $request->customAgentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a dedicated agent created by the user.
     *
     * @param request - DeleteCustomAgentRequest
     *
     * @returns DeleteCustomAgentResponse
     *
     * @param DeleteCustomAgentRequest $request
     *
     * @return DeleteCustomAgentResponse
     */
    public function deleteCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomAgentWithOptions($request, $runtime);
    }

    /**
     * Deletes a sandbox template.
     *
     * @remarks
     * ### Supported engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DeleteSandboxTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSandboxTemplateResponse
     *
     * @param DeleteSandboxTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSandboxTemplateResponse
     */
    public function deleteSandboxTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSandboxTemplate',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSandboxTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a sandbox template.
     *
     * @remarks
     * ### Supported engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DeleteSandboxTemplateRequest
     *
     * @returns DeleteSandboxTemplateResponse
     *
     * @param DeleteSandboxTemplateRequest $request
     *
     * @return DeleteSandboxTemplateResponse
     */
    public function deleteSandboxTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSandboxTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified inspection configuration.
     *
     * @param request - DeleteScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScheduledTaskResponse
     *
     * @param DeleteScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteScheduledTaskResponse
     */
    public function deleteScheduledTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScheduledTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified inspection configuration.
     *
     * @param request - DeleteScheduledTaskRequest
     *
     * @returns DeleteScheduledTaskResponse
     *
     * @param DeleteScheduledTaskRequest $request
     *
     * @return DeleteScheduledTaskResponse
     */
    public function deleteScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified Skill.
     *
     * @param request - DeleteSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillResponse
     *
     * @param DeleteSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSkill',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified Skill.
     *
     * @param request - DeleteSkillRequest
     *
     * @returns DeleteSkillResponse
     *
     * @param DeleteSkillRequest $request
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeAppInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppInstanceAttributeResponse
     *
     * @param DescribeAppInstanceAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAppInstanceAttributeResponse
     */
    public function describeAppInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppInstanceAttribute',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeAppInstanceAttributeRequest
     *
     * @returns DescribeAppInstanceAttributeResponse
     *
     * @param DescribeAppInstanceAttributeRequest $request
     *
     * @return DescribeAppInstanceAttributeResponse
     */
    public function describeAppInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries a list of RDS AI application instances.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppInstancesResponse
     *
     * @param DescribeAppInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAppInstancesResponse
     */
    public function describeAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
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
            'action' => 'DescribeAppInstances',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of RDS AI application instances.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeAppInstancesRequest
     *
     * @returns DescribeAppInstancesResponse
     *
     * @param DescribeAppInstancesRequest $request
     *
     * @return DescribeAppInstancesResponse
     */
    public function describeAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of supported sandbox templates.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeCommonSandboxTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCommonSandboxTemplatesResponse
     *
     * @param DescribeCommonSandboxTemplatesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCommonSandboxTemplatesResponse
     */
    public function describeCommonSandboxTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCommonSandboxTemplates',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCommonSandboxTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of supported sandbox templates.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeCommonSandboxTemplatesRequest
     *
     * @returns DescribeCommonSandboxTemplatesResponse
     *
     * @param DescribeCommonSandboxTemplatesRequest $request
     *
     * @return DescribeCommonSandboxTemplatesResponse
     */
    public function describeCommonSandboxTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommonSandboxTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of events.
     *
     * @param request - DescribeEventsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsListResponse
     *
     * @param DescribeEventsListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEventsListResponse
     */
    public function describeEventsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventsList',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of events.
     *
     * @param request - DescribeEventsListRequest
     *
     * @returns DescribeEventsListResponse
     *
     * @param DescribeEventsListRequest $request
     *
     * @return DescribeEventsListResponse
     */
    public function describeEventsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsListWithOptions($request, $runtime);
    }

    /**
     * Queries the authentication information of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceAuthInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAuthInfoResponse
     *
     * @param DescribeInstanceAuthInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceAuthInfoResponse
     */
    public function describeInstanceAuthInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAuthInfo',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAuthInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the authentication information of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceAuthInfoRequest
     *
     * @returns DescribeInstanceAuthInfoResponse
     *
     * @param DescribeInstanceAuthInfoRequest $request
     *
     * @return DescribeInstanceAuthInfoResponse
     */
    public function describeInstanceAuthInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAuthInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the endpoint information of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceEndpointsResponse
     *
     * @param DescribeInstanceEndpointsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceEndpointsResponse
     */
    public function describeInstanceEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceEndpoints',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the endpoint information of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceEndpointsRequest
     *
     * @returns DescribeInstanceEndpointsResponse
     *
     * @param DescribeInstanceEndpointsRequest $request
     *
     * @return DescribeInstanceEndpointsResponse
     */
    public function describeInstanceEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceEndpointsWithOptions($request, $runtime);
    }

    /**
     * Queries the IP whitelist of an RDS AI application instance.
     *
     * @remarks
     * ### Supported engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceIpWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceIpWhitelistResponse
     *
     * @param DescribeInstanceIpWhitelistRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceIpWhitelistResponse
     */
    public function describeInstanceIpWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceIpWhitelist',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP whitelist of an RDS AI application instance.
     *
     * @remarks
     * ### Supported engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceIpWhitelistRequest
     *
     * @returns DescribeInstanceIpWhitelistResponse
     *
     * @param DescribeInstanceIpWhitelistRequest $request
     *
     * @return DescribeInstanceIpWhitelistResponse
     */
    public function describeInstanceIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * Queries the RAG Agent configuration of an RDS AI application instance.
     *
     * @param request - DescribeInstanceRAGConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceRAGConfigResponse
     *
     * @param DescribeInstanceRAGConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceRAGConfigResponse
     */
    public function describeInstanceRAGConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceRAGConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceRAGConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the RAG Agent configuration of an RDS AI application instance.
     *
     * @param request - DescribeInstanceRAGConfigRequest
     *
     * @returns DescribeInstanceRAGConfigResponse
     *
     * @param DescribeInstanceRAGConfigRequest $request
     *
     * @return DescribeInstanceRAGConfigResponse
     */
    public function describeInstanceRAGConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRAGConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the SSL configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Supported engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSSLResponse
     *
     * @param DescribeInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSSL',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SSL configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Supported engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceSSLRequest
     *
     * @returns DescribeInstanceSSLResponse
     *
     * @param DescribeInstanceSSLRequest $request
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * Queries the storage configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * > Currently, only Object Storage Service (OSS) is supported.
     *
     * @param request - DescribeInstanceStorageConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceStorageConfigResponse
     *
     * @param DescribeInstanceStorageConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceStorageConfigResponse
     */
    public function describeInstanceStorageConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceStorageConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceStorageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * > Currently, only Object Storage Service (OSS) is supported.
     *
     * @param request - DescribeInstanceStorageConfigRequest
     *
     * @returns DescribeInstanceStorageConfigResponse
     *
     * @param DescribeInstanceStorageConfigRequest $request
     *
     * @return DescribeInstanceStorageConfigResponse
     */
    public function describeInstanceStorageConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStorageConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the token usage records of RDS AI Assistant Ultimate Edition.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeMOTokenUsageDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMOTokenUsageDetailResponse
     *
     * @param DescribeMOTokenUsageDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMOTokenUsageDetailResponse
     */
    public function describeMOTokenUsageDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->consumerName) {
            @$query['ConsumerName'] = $request->consumerName;
        }

        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->usageType) {
            @$query['UsageType'] = $request->usageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMOTokenUsageDetail',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMOTokenUsageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the token usage records of RDS AI Assistant Ultimate Edition.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeMOTokenUsageDetailRequest
     *
     * @returns DescribeMOTokenUsageDetailResponse
     *
     * @param DescribeMOTokenUsageDetailRequest $request
     *
     * @return DescribeMOTokenUsageDetailResponse
     */
    public function describeMOTokenUsageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMOTokenUsageDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the token usage summary for a model operator instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeMOTokenUsageSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMOTokenUsageSummaryResponse
     *
     * @param DescribeMOTokenUsageSummaryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMOTokenUsageSummaryResponse
     */
    public function describeMOTokenUsageSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->usageType) {
            @$query['UsageType'] = $request->usageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMOTokenUsageSummary',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMOTokenUsageSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the token usage summary for a model operator instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeMOTokenUsageSummaryRequest
     *
     * @returns DescribeMOTokenUsageSummaryResponse
     *
     * @param DescribeMOTokenUsageSummaryRequest $request
     *
     * @return DescribeMOTokenUsageSummaryResponse
     */
    public function describeMOTokenUsageSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMOTokenUsageSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the status or download link of an asynchronous CSV export task for MO usage details.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeMOUsageDetailExportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMOUsageDetailExportResponse
     *
     * @param DescribeMOUsageDetailExportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMOUsageDetailExportResponse
     */
    public function describeMOUsageDetailExportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMOUsageDetailExport',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMOUsageDetailExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status or download link of an asynchronous CSV export task for MO usage details.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeMOUsageDetailExportRequest
     *
     * @returns DescribeMOUsageDetailExportResponse
     *
     * @param DescribeMOUsageDetailExportRequest $request
     *
     * @return DescribeMOUsageDetailExportResponse
     */
    public function describeMOUsageDetailExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMOUsageDetailExportWithOptions($request, $runtime);
    }

    /**
     * Queries the basic information and usage of an RDS AI Assistant Ultimate Edition instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeModelOperatorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelOperatorResponse
     *
     * @param DescribeModelOperatorRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeModelOperatorResponse
     */
    public function describeModelOperatorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModelOperator',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelOperatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information and usage of an RDS AI Assistant Ultimate Edition instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeModelOperatorRequest
     *
     * @returns DescribeModelOperatorResponse
     *
     * @param DescribeModelOperatorRequest $request
     *
     * @return DescribeModelOperatorResponse
     */
    public function describeModelOperator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelOperatorWithOptions($request, $runtime);
    }

    /**
     * Queries instance monitoring data of an RDS AI Assistant Ultimate Edition instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param tmpReq - DescribeMonitorDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorDataResponse
     *
     * @param DescribeMonitorDataRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeMonitorDataResponse
     */
    public function describeMonitorDataWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeMonitorDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiKeyName) {
            $request->apiKeyNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiKeyName, 'ApiKeyName', 'json');
        }

        $query = [];
        if (null !== $request->apiKeyNameShrink) {
            @$query['ApiKeyName'] = $request->apiKeyNameShrink;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorData',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instance monitoring data of an RDS AI Assistant Ultimate Edition instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeMonitorDataRequest
     *
     * @returns DescribeMonitorDataResponse
     *
     * @param DescribeMonitorDataRequest $request
     *
     * @return DescribeMonitorDataResponse
     */
    public function describeMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorDataWithOptions($request, $runtime);
    }

    /**
     * Queries the list of sandbox templates used to create Supabase sandboxes.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeSandboxTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSandboxTemplatesResponse
     *
     * @param DescribeSandboxTemplatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSandboxTemplatesResponse
     */
    public function describeSandboxTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSandboxTemplates',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSandboxTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of sandbox templates used to create Supabase sandboxes.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeSandboxTemplatesRequest
     *
     * @returns DescribeSandboxTemplatesResponse
     *
     * @param DescribeSandboxTemplatesRequest $request
     *
     * @return DescribeSandboxTemplatesResponse
     */
    public function describeSandboxTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the whitelist of an RDS AI Assistant Ultimate Edition instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeWhitelistIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWhitelistIpsResponse
     *
     * @param DescribeWhitelistIpsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeWhitelistIpsResponse
     */
    public function describeWhitelistIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWhitelistIps',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWhitelistIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the whitelist of an RDS AI Assistant Ultimate Edition instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - DescribeWhitelistIpsRequest
     *
     * @returns DescribeWhitelistIpsResponse
     *
     * @param DescribeWhitelistIpsRequest $request
     *
     * @return DescribeWhitelistIpsResponse
     */
    public function describeWhitelistIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistIpsWithOptions($request, $runtime);
    }

    /**
     * Disables the sandbox and Edge Routine capabilities of a Supabase instance. Note: This operation deletes all sandboxes and Edge Routines of the instance. Fully assess the business risks before performing this operation.
     *
     * @remarks
     * Disables the sandbox and Edge Routine capabilities of a Supabase instance.
     * >Notice: This operation deletes all sandboxes and Edge Routines of the Supabase instance. Fully assess the business risks before performing this operation.
     *
     * @param request - DisableAgentRuntimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAgentRuntimeResponse
     *
     * @param DisableAgentRuntimeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableAgentRuntimeResponse
     */
    public function disableAgentRuntimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAgentRuntime',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAgentRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the sandbox and Edge Routine capabilities of a Supabase instance. Note: This operation deletes all sandboxes and Edge Routines of the instance. Fully assess the business risks before performing this operation.
     *
     * @remarks
     * Disables the sandbox and Edge Routine capabilities of a Supabase instance.
     * >Notice: This operation deletes all sandboxes and Edge Routines of the Supabase instance. Fully assess the business risks before performing this operation.
     *
     * @param request - DisableAgentRuntimeRequest
     *
     * @returns DisableAgentRuntimeResponse
     *
     * @param DisableAgentRuntimeRequest $request
     *
     * @return DisableAgentRuntimeResponse
     */
    public function disableAgentRuntime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAgentRuntimeWithOptions($request, $runtime);
    }

    /**
     * Enables the sandbox and Edge Routine capabilities for a Supabase instance. Read the operation description before you call this operation.
     *
     * @remarks
     * During the public preview, the sandbox and Edge Routine features are free of charge.
     * ### Before you begin
     * Before you use this feature, [authorize the service-linked role](https://api.aliyun.com/api/ResourceManager/2020-03-31/CreateServiceLinkedRole?spm=api-workbench.API%20Document.0.0.4ea75094rJgPzK&RegionId=cn-beijing&tab=DEBUG&params=%7B%2522ServiceName%2522:%2522supabase.rdsai.aliyuncs.com%2522%7D&sdkStyle=old). The service-linked role used is [AliyunServiceRoleForRDSAISupabase](https://www.alibabacloud.com/help/en/ram/product-overview/services-that-work-with-service-linked-roles).
     *
     * @param request - EnableAgentRuntimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAgentRuntimeResponse
     *
     * @param EnableAgentRuntimeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableAgentRuntimeResponse
     */
    public function enableAgentRuntimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableAgentRuntime',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAgentRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the sandbox and Edge Routine capabilities for a Supabase instance. Read the operation description before you call this operation.
     *
     * @remarks
     * During the public preview, the sandbox and Edge Routine features are free of charge.
     * ### Before you begin
     * Before you use this feature, [authorize the service-linked role](https://api.aliyun.com/api/ResourceManager/2020-03-31/CreateServiceLinkedRole?spm=api-workbench.API%20Document.0.0.4ea75094rJgPzK&RegionId=cn-beijing&tab=DEBUG&params=%7B%2522ServiceName%2522:%2522supabase.rdsai.aliyuncs.com%2522%7D&sdkStyle=old). The service-linked role used is [AliyunServiceRoleForRDSAISupabase](https://www.alibabacloud.com/help/en/ram/product-overview/services-that-work-with-service-linked-roles).
     *
     * @param request - EnableAgentRuntimeRequest
     *
     * @returns EnableAgentRuntimeResponse
     *
     * @param EnableAgentRuntimeRequest $request
     *
     * @return EnableAgentRuntimeResponse
     */
    public function enableAgentRuntime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAgentRuntimeWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of large language models supported by the current RDS Supabase AI gateway.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase.
     *
     * @param request - GetAvailableLLMModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAvailableLLMModelsResponse
     *
     * @param GetAvailableLLMModelsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAvailableLLMModelsResponse
     */
    public function getAvailableLLMModelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAvailableLLMModels',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAvailableLLMModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of large language models supported by the current RDS Supabase AI gateway.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase.
     *
     * @param request - GetAvailableLLMModelsRequest
     *
     * @returns GetAvailableLLMModelsResponse
     *
     * @param GetAvailableLLMModelsRequest $request
     *
     * @return GetAvailableLLMModelsResponse
     */
    public function getAvailableLLMModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvailableLLMModelsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the available models for a session.
     *
     * @param request - GetChatModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatModelResponse
     *
     * @param GetChatModelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetChatModelResponse
     */
    public function getChatModelWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetChatModel',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChatModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the available models for a session.
     *
     * @param request - GetChatModelRequest
     *
     * @returns GetChatModelResponse
     *
     * @param GetChatModelRequest $request
     *
     * @return GetChatModelResponse
     */
    public function getChatModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatModelWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a datasource configuration.
     *
     * @remarks
     * Retrieves the details of a connection.
     *
     * @param request - GetContextDatabaseSyncConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncConnectionResponse
     *
     * @param GetContextDatabaseSyncConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetContextDatabaseSyncConnectionResponse
     */
    public function getContextDatabaseSyncConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionId) {
            @$query['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncConnection',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a datasource configuration.
     *
     * @remarks
     * Retrieves the details of a connection.
     *
     * @param request - GetContextDatabaseSyncConnectionRequest
     *
     * @returns GetContextDatabaseSyncConnectionResponse
     *
     * @param GetContextDatabaseSyncConnectionRequest $request
     *
     * @return GetContextDatabaseSyncConnectionResponse
     */
    public function getContextDatabaseSyncConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncConnectionWithOptions($request, $runtime);
    }

    /**
     * Queries the authorization scope of a data source.
     *
     * @remarks
     * Queries the authorization scope of a connection.
     *
     * @param request - GetContextDatabaseSyncConnectionAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncConnectionAuthorizationResponse
     *
     * @param GetContextDatabaseSyncConnectionAuthorizationRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return GetContextDatabaseSyncConnectionAuthorizationResponse
     */
    public function getContextDatabaseSyncConnectionAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionId) {
            @$query['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncConnectionAuthorization',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncConnectionAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the authorization scope of a data source.
     *
     * @remarks
     * Queries the authorization scope of a connection.
     *
     * @param request - GetContextDatabaseSyncConnectionAuthorizationRequest
     *
     * @returns GetContextDatabaseSyncConnectionAuthorizationResponse
     *
     * @param GetContextDatabaseSyncConnectionAuthorizationRequest $request
     *
     * @return GetContextDatabaseSyncConnectionAuthorizationResponse
     */
    public function getContextDatabaseSyncConnectionAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncConnectionAuthorizationWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a discovery task by task ID.
     *
     * @remarks
     * Queries the status of a discovery task by task ID.
     *
     * @param request - GetContextDatabaseSyncDiscoveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncDiscoveryTaskResponse
     *
     * @param GetContextDatabaseSyncDiscoveryTaskRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetContextDatabaseSyncDiscoveryTaskResponse
     */
    public function getContextDatabaseSyncDiscoveryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncDiscoveryTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncDiscoveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a discovery task by task ID.
     *
     * @remarks
     * Queries the status of a discovery task by task ID.
     *
     * @param request - GetContextDatabaseSyncDiscoveryTaskRequest
     *
     * @returns GetContextDatabaseSyncDiscoveryTaskResponse
     *
     * @param GetContextDatabaseSyncDiscoveryTaskRequest $request
     *
     * @return GetContextDatabaseSyncDiscoveryTaskResponse
     */
    public function getContextDatabaseSyncDiscoveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncDiscoveryTaskWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an import job.
     *
     * @remarks
     * Retrieves the details of a job.
     *
     * @param request - GetContextDatabaseSyncJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncJobResponse
     *
     * @param GetContextDatabaseSyncJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetContextDatabaseSyncJobResponse
     */
    public function getContextDatabaseSyncJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncJob',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an import job.
     *
     * @remarks
     * Retrieves the details of a job.
     *
     * @param request - GetContextDatabaseSyncJobRequest
     *
     * @returns GetContextDatabaseSyncJobResponse
     *
     * @param GetContextDatabaseSyncJobRequest $request
     *
     * @return GetContextDatabaseSyncJobResponse
     */
    public function getContextDatabaseSyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncJobWithOptions($request, $runtime);
    }

    /**
     * Queries whether an import task can be started.
     *
     * @remarks
     * Queries whether a job can be started.
     *
     * @param request - GetContextDatabaseSyncJobReadinessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncJobReadinessResponse
     *
     * @param GetContextDatabaseSyncJobReadinessRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetContextDatabaseSyncJobReadinessResponse
     */
    public function getContextDatabaseSyncJobReadinessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncJobReadiness',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncJobReadinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether an import task can be started.
     *
     * @remarks
     * Queries whether a job can be started.
     *
     * @param request - GetContextDatabaseSyncJobReadinessRequest
     *
     * @returns GetContextDatabaseSyncJobReadinessResponse
     *
     * @param GetContextDatabaseSyncJobReadinessRequest $request
     *
     * @return GetContextDatabaseSyncJobReadinessResponse
     */
    public function getContextDatabaseSyncJobReadiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncJobReadinessWithOptions($request, $runtime);
    }

    /**
     * Queries the scheduling configuration of an import task.
     *
     * @remarks
     * Queries the scheduling configuration of a job.
     *
     * @param request - GetContextDatabaseSyncJobScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncJobScheduleResponse
     *
     * @param GetContextDatabaseSyncJobScheduleRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetContextDatabaseSyncJobScheduleResponse
     */
    public function getContextDatabaseSyncJobScheduleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncJobSchedule',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncJobScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the scheduling configuration of an import task.
     *
     * @remarks
     * Queries the scheduling configuration of a job.
     *
     * @param request - GetContextDatabaseSyncJobScheduleRequest
     *
     * @returns GetContextDatabaseSyncJobScheduleResponse
     *
     * @param GetContextDatabaseSyncJobScheduleRequest $request
     *
     * @return GetContextDatabaseSyncJobScheduleResponse
     */
    public function getContextDatabaseSyncJobSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncJobScheduleWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a run.
     *
     * @remarks
     * Retrieves the details of a run.
     *
     * @param request - GetContextDatabaseSyncRunRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncRunResponse
     *
     * @param GetContextDatabaseSyncRunRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetContextDatabaseSyncRunResponse
     */
    public function getContextDatabaseSyncRunWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->runId) {
            @$query['RunId'] = $request->runId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncRun',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a run.
     *
     * @remarks
     * Retrieves the details of a run.
     *
     * @param request - GetContextDatabaseSyncRunRequest
     *
     * @returns GetContextDatabaseSyncRunResponse
     *
     * @param GetContextDatabaseSyncRunRequest $request
     *
     * @return GetContextDatabaseSyncRunResponse
     */
    public function getContextDatabaseSyncRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncRunWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a data selection scope.
     *
     * @remarks
     * Retrieves the details of a source.
     *
     * @param request - GetContextDatabaseSyncSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncSourceResponse
     *
     * @param GetContextDatabaseSyncSourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetContextDatabaseSyncSourceResponse
     */
    public function getContextDatabaseSyncSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncSource',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a data selection scope.
     *
     * @remarks
     * Retrieves the details of a source.
     *
     * @param request - GetContextDatabaseSyncSourceRequest
     *
     * @returns GetContextDatabaseSyncSourceResponse
     *
     * @param GetContextDatabaseSyncSourceRequest $request
     *
     * @return GetContextDatabaseSyncSourceResponse
     */
    public function getContextDatabaseSyncSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncSourceWithOptions($request, $runtime);
    }

    /**
     * Queries the current node selection in the data selection scope.
     *
     * @remarks
     * Queries the current node selection of the source.
     *
     * @param request - GetContextDatabaseSyncSourceSelectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextDatabaseSyncSourceSelectionResponse
     *
     * @param GetContextDatabaseSyncSourceSelectionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GetContextDatabaseSyncSourceSelectionResponse
     */
    public function getContextDatabaseSyncSourceSelectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextDatabaseSyncSourceSelection',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContextDatabaseSyncSourceSelectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current node selection in the data selection scope.
     *
     * @remarks
     * Queries the current node selection of the source.
     *
     * @param request - GetContextDatabaseSyncSourceSelectionRequest
     *
     * @returns GetContextDatabaseSyncSourceSelectionResponse
     *
     * @param GetContextDatabaseSyncSourceSelectionRequest $request
     *
     * @return GetContextDatabaseSyncSourceSelectionResponse
     */
    public function getContextDatabaseSyncSourceSelection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContextDatabaseSyncSourceSelectionWithOptions($request, $runtime);
    }

    /**
     * Queries the historical conversations of a user.
     *
     * @param request - GetConversationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConversationsResponse
     *
     * @param GetConversationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetConversationsResponse
     */
    public function getConversationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lastId) {
            @$query['LastId'] = $request->lastId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->pinned) {
            @$query['Pinned'] = $request->pinned;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConversations',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the historical conversations of a user.
     *
     * @param request - GetConversationsRequest
     *
     * @returns GetConversationsResponse
     *
     * @param GetConversationsRequest $request
     *
     * @return GetConversationsResponse
     */
    public function getConversations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConversationsWithOptions($request, $runtime);
    }

    /**
     * Queries a dedicated agent created by the user.
     *
     * @param request - GetCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomAgentResponse
     *
     * @param GetCustomAgentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCustomAgentResponse
     */
    public function getCustomAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customAgentId) {
            @$query['CustomAgentId'] = $request->customAgentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a dedicated agent created by the user.
     *
     * @param request - GetCustomAgentRequest
     *
     * @returns GetCustomAgentResponse
     *
     * @param GetCustomAgentRequest $request
     *
     * @return GetCustomAgentResponse
     */
    public function getCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomAgentWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an inspection report by report ID.
     *
     * @param request - GetInspectionReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInspectionReportResponse
     *
     * @param GetInspectionReportRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetInspectionReportResponse
     */
    public function getInspectionReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInspectionReport',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInspectionReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an inspection report by report ID.
     *
     * @param request - GetInspectionReportRequest
     *
     * @returns GetInspectionReportResponse
     *
     * @param GetInspectionReportRequest $request
     *
     * @return GetInspectionReportResponse
     */
    public function getInspectionReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInspectionReportWithOptions($request, $runtime);
    }

    /**
     * Queries the details of specific conversation messages.
     *
     * @param request - GetMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMessagesResponse
     *
     * @param GetMessagesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetMessagesResponse
     */
    public function getMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->eventMode) {
            @$query['EventMode'] = $request->eventMode;
        }

        if (null !== $request->firstId) {
            @$query['FirstId'] = $request->firstId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMessages',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of specific conversation messages.
     *
     * @param request - GetMessagesRequest
     *
     * @returns GetMessagesResponse
     *
     * @param GetMessagesRequest $request
     *
     * @return GetMessagesResponse
     */
    public function getMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessagesWithOptions($request, $runtime);
    }

    /**
     * Retrieves order information for RDS AI Assistant Ultimate Edition.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - GetModelOperatorOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelOperatorOrderResponse
     *
     * @param GetModelOperatorOrderRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetModelOperatorOrderResponse
     */
    public function getModelOperatorOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModelOperatorOrder',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModelOperatorOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves order information for RDS AI Assistant Ultimate Edition.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - GetModelOperatorOrderRequest
     *
     * @returns GetModelOperatorOrderResponse
     *
     * @param GetModelOperatorOrderRequest $request
     *
     * @return GetModelOperatorOrderResponse
     */
    public function getModelOperatorOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelOperatorOrderWithOptions($request, $runtime);
    }

    /**
     * Queries the list of all instance IDs included in a specified scheduled inspection configuration.
     *
     * @param request - GetScheduledInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledInstancesResponse
     *
     * @param GetScheduledInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetScheduledInstancesResponse
     */
    public function getScheduledInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledInstances',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScheduledInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of all instance IDs included in a specified scheduled inspection configuration.
     *
     * @param request - GetScheduledInstancesRequest
     *
     * @returns GetScheduledInstancesResponse
     *
     * @param GetScheduledInstancesRequest $request
     *
     * @return GetScheduledInstancesResponse
     */
    public function getScheduledInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScheduledInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries all inspection reports under a specified scheduled task, with support for filtering by time range and pagination.
     *
     * @param request - GetScheduledReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledReportsResponse
     *
     * @param GetScheduledReportsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetScheduledReportsResponse
     */
    public function getScheduledReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledReports',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScheduledReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all inspection reports under a specified scheduled task, with support for filtering by time range and pagination.
     *
     * @param request - GetScheduledReportsRequest
     *
     * @returns GetScheduledReportsResponse
     *
     * @param GetScheduledReportsRequest $request
     *
     * @return GetScheduledReportsResponse
     */
    public function getScheduledReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScheduledReportsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a specified skill. You can retrieve your own skills or system preset skills.
     *
     * @param request - GetSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillResponse
     *
     * @param GetSkillRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetSkillResponse
     */
    public function getSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->download) {
            @$query['Download'] = $request->download;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkill',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified skill. You can retrieve your own skills or system preset skills.
     *
     * @param request - GetSkillRequest
     *
     * @returns GetSkillResponse
     *
     * @param GetSkillRequest $request
     *
     * @return GetSkillResponse
     */
    public function getSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillWithOptions($request, $runtime);
    }

    /**
     * Queries the list of individual inspection reports for all non-scheduled tasks under a specified user, with pagination support.
     *
     * @param request - GetStandAloneReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStandAloneReportsResponse
     *
     * @param GetStandAloneReportsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetStandAloneReportsResponse
     */
    public function getStandAloneReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStandAloneReports',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStandAloneReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of individual inspection reports for all non-scheduled tasks under a specified user, with pagination support.
     *
     * @param request - GetStandAloneReportsRequest
     *
     * @returns GetStandAloneReportsResponse
     *
     * @param GetStandAloneReportsRequest $request
     *
     * @return GetStandAloneReportsResponse
     */
    public function getStandAloneReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStandAloneReportsWithOptions($request, $runtime);
    }

    /**
     * Queries custom API keys.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - ListApiKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiKeysResponse
     *
     * @param ListApiKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListApiKeysResponse
     */
    public function listApiKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiKeys',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom API keys.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - ListApiKeysRequest
     *
     * @returns ListApiKeysResponse
     *
     * @param ListApiKeysRequest $request
     *
     * @return ListApiKeysResponse
     */
    public function listApiKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiKeysWithOptions($request, $runtime);
    }

    /**
     * Lists the API keys for a context database.
     *
     * @remarks
     * Lists the API keys under a specified member. The plaintext key values are not returned.
     *
     * @param request - ListContextDatabaseApiKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseApiKeysResponse
     *
     * @param ListContextDatabaseApiKeysRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListContextDatabaseApiKeysResponse
     */
    public function listContextDatabaseApiKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseApiKeys',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the API keys for a context database.
     *
     * @remarks
     * Lists the API keys under a specified member. The plaintext key values are not returned.
     *
     * @param request - ListContextDatabaseApiKeysRequest
     *
     * @returns ListContextDatabaseApiKeysResponse
     *
     * @param ListContextDatabaseApiKeysRequest $request
     *
     * @return ListContextDatabaseApiKeysResponse
     */
    public function listContextDatabaseApiKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseApiKeysWithOptions($request, $runtime);
    }

    /**
     * Lists context database members.
     *
     * @remarks
     * Lists all members in a specified workspace. Each member includes a list of API keys (plaintext values are not returned).
     *
     * @param request - ListContextDatabaseMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseMembersResponse
     *
     * @param ListContextDatabaseMembersRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListContextDatabaseMembersResponse
     */
    public function listContextDatabaseMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseMembers',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists context database members.
     *
     * @remarks
     * Lists all members in a specified workspace. Each member includes a list of API keys (plaintext values are not returned).
     *
     * @param request - ListContextDatabaseMembersRequest
     *
     * @returns ListContextDatabaseMembersResponse
     *
     * @param ListContextDatabaseMembersRequest $request
     *
     * @return ListContextDatabaseMembersResponse
     */
    public function listContextDatabaseMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseMembersWithOptions($request, $runtime);
    }

    /**
     * Lists the datasource configurations in a workspace.
     *
     * @remarks
     * The list operation returns paginated results by default. Page and PageSize are optional parameters.
     * The Data list field in the response is returned as an array. Total indicates the total number of records that match the specified conditions.
     *
     * @param request - ListContextDatabaseSyncConnectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncConnectionsResponse
     *
     * @param ListContextDatabaseSyncConnectionsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListContextDatabaseSyncConnectionsResponse
     */
    public function listContextDatabaseSyncConnectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncConnections',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the datasource configurations in a workspace.
     *
     * @remarks
     * The list operation returns paginated results by default. Page and PageSize are optional parameters.
     * The Data list field in the response is returned as an array. Total indicates the total number of records that match the specified conditions.
     *
     * @param request - ListContextDatabaseSyncConnectionsRequest
     *
     * @returns ListContextDatabaseSyncConnectionsResponse
     *
     * @param ListContextDatabaseSyncConnectionsRequest $request
     *
     * @return ListContextDatabaseSyncConnectionsResponse
     */
    public function listContextDatabaseSyncConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncConnectionsWithOptions($request, $runtime);
    }

    /**
     * Lists the documents associated with an import task.
     *
     * @remarks
     * By default, this operation returns paginated results. The Page and PageSize parameters are optional. The Data field in the response is returned as an array, and the Total field indicates the total number of matching entries.
     *
     * @param request - ListContextDatabaseSyncJobDocumentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncJobDocumentsResponse
     *
     * @param ListContextDatabaseSyncJobDocumentsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListContextDatabaseSyncJobDocumentsResponse
     */
    public function listContextDatabaseSyncJobDocumentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncJobDocuments',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncJobDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the documents associated with an import task.
     *
     * @remarks
     * By default, this operation returns paginated results. The Page and PageSize parameters are optional. The Data field in the response is returned as an array, and the Total field indicates the total number of matching entries.
     *
     * @param request - ListContextDatabaseSyncJobDocumentsRequest
     *
     * @returns ListContextDatabaseSyncJobDocumentsResponse
     *
     * @param ListContextDatabaseSyncJobDocumentsRequest $request
     *
     * @return ListContextDatabaseSyncJobDocumentsResponse
     */
    public function listContextDatabaseSyncJobDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncJobDocumentsWithOptions($request, $runtime);
    }

    /**
     * Lists the exclusions of an import task.
     *
     * @remarks
     * This operation uses pagination by default. Page and PageSize are optional parameters.
     * The Data field in the response returns an array. Total indicates the total number of records that match the specified conditions.
     *
     * @param request - ListContextDatabaseSyncJobExclusionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncJobExclusionsResponse
     *
     * @param ListContextDatabaseSyncJobExclusionsRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListContextDatabaseSyncJobExclusionsResponse
     */
    public function listContextDatabaseSyncJobExclusionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncJobExclusions',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncJobExclusionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the exclusions of an import task.
     *
     * @remarks
     * This operation uses pagination by default. Page and PageSize are optional parameters.
     * The Data field in the response returns an array. Total indicates the total number of records that match the specified conditions.
     *
     * @param request - ListContextDatabaseSyncJobExclusionsRequest
     *
     * @returns ListContextDatabaseSyncJobExclusionsResponse
     *
     * @param ListContextDatabaseSyncJobExclusionsRequest $request
     *
     * @return ListContextDatabaseSyncJobExclusionsResponse
     */
    public function listContextDatabaseSyncJobExclusions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncJobExclusionsWithOptions($request, $runtime);
    }

    /**
     * Lists import tasks.
     *
     * @remarks
     * The list operation returns paginated results by default. Page and PageSize are optional parameters.
     * The Data list field in the response is returned as an array. Total indicates the total number of records that match the specified conditions.
     *
     * @param request - ListContextDatabaseSyncJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncJobsResponse
     *
     * @param ListContextDatabaseSyncJobsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListContextDatabaseSyncJobsResponse
     */
    public function listContextDatabaseSyncJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->knowledgeBaseId) {
            @$query['KnowledgeBaseId'] = $request->knowledgeBaseId;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncJobs',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists import tasks.
     *
     * @remarks
     * The list operation returns paginated results by default. Page and PageSize are optional parameters.
     * The Data list field in the response is returned as an array. Total indicates the total number of records that match the specified conditions.
     *
     * @param request - ListContextDatabaseSyncJobsRequest
     *
     * @returns ListContextDatabaseSyncJobsResponse
     *
     * @param ListContextDatabaseSyncJobsRequest $request
     *
     * @return ListContextDatabaseSyncJobsResponse
     */
    public function listContextDatabaseSyncJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncJobsWithOptions($request, $runtime);
    }

    /**
     * Lists available synchronization plugins.
     *
     * @remarks
     * This operation returns a fixed-length array of available plugins in the workspace and does not support pagination.
     * The Data list field in the response is returned as an array, and Total indicates the total number of entries that meet the conditions.
     *
     * @param request - ListContextDatabaseSyncPluginsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncPluginsResponse
     *
     * @param ListContextDatabaseSyncPluginsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListContextDatabaseSyncPluginsResponse
     */
    public function listContextDatabaseSyncPluginsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncPlugins',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists available synchronization plugins.
     *
     * @remarks
     * This operation returns a fixed-length array of available plugins in the workspace and does not support pagination.
     * The Data list field in the response is returned as an array, and Total indicates the total number of entries that meet the conditions.
     *
     * @param request - ListContextDatabaseSyncPluginsRequest
     *
     * @returns ListContextDatabaseSyncPluginsResponse
     *
     * @param ListContextDatabaseSyncPluginsRequest $request
     *
     * @return ListContextDatabaseSyncPluginsResponse
     */
    public function listContextDatabaseSyncPlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncPluginsWithOptions($request, $runtime);
    }

    /**
     * Lists the run records.
     *
     * @remarks
     * The list API returns paginated results by default. The Page and PageSize parameters are optional. Run records are a list of RunItems that show the processing results of each document in each import run.
     * The Data list field in the response is returned as an array, and Total indicates the total number of entries that meet the conditions.
     *
     * @param request - ListContextDatabaseSyncRunItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncRunItemsResponse
     *
     * @param ListContextDatabaseSyncRunItemsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListContextDatabaseSyncRunItemsResponse
     */
    public function listContextDatabaseSyncRunItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->runId) {
            @$query['RunId'] = $request->runId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncRunItems',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncRunItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the run records.
     *
     * @remarks
     * The list API returns paginated results by default. The Page and PageSize parameters are optional. Run records are a list of RunItems that show the processing results of each document in each import run.
     * The Data list field in the response is returned as an array, and Total indicates the total number of entries that meet the conditions.
     *
     * @param request - ListContextDatabaseSyncRunItemsRequest
     *
     * @returns ListContextDatabaseSyncRunItemsResponse
     *
     * @param ListContextDatabaseSyncRunItemsRequest $request
     *
     * @return ListContextDatabaseSyncRunItemsResponse
     */
    public function listContextDatabaseSyncRunItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncRunItemsWithOptions($request, $runtime);
    }

    /**
     * 列出 Run 日志.
     *
     * @remarks
     * 列表接口默认分页返回，Page 与 PageSize 为可选参数。
     * 响应中的 Data 列表字段使用数组返回，Total 表示符合条件的总条数。
     *
     * @param request - ListContextDatabaseSyncRunLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncRunLogsResponse
     *
     * @param ListContextDatabaseSyncRunLogsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListContextDatabaseSyncRunLogsResponse
     */
    public function listContextDatabaseSyncRunLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->runId) {
            @$query['RunId'] = $request->runId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncRunLogs',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncRunLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出 Run 日志.
     *
     * @remarks
     * 列表接口默认分页返回，Page 与 PageSize 为可选参数。
     * 响应中的 Data 列表字段使用数组返回，Total 表示符合条件的总条数。
     *
     * @param request - ListContextDatabaseSyncRunLogsRequest
     *
     * @returns ListContextDatabaseSyncRunLogsResponse
     *
     * @param ListContextDatabaseSyncRunLogsRequest $request
     *
     * @return ListContextDatabaseSyncRunLogsResponse
     */
    public function listContextDatabaseSyncRunLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncRunLogsWithOptions($request, $runtime);
    }

    /**
     * Lists the runs.
     *
     * @remarks
     * By default, this operation returns paginated results. The Page and PageSize parameters are optional.
     * The Data field in the response is returned as an array, and the Total field indicates the total number of items that meet the query conditions.
     *
     * @param request - ListContextDatabaseSyncRunsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncRunsResponse
     *
     * @param ListContextDatabaseSyncRunsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListContextDatabaseSyncRunsResponse
     */
    public function listContextDatabaseSyncRunsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncRuns',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the runs.
     *
     * @remarks
     * By default, this operation returns paginated results. The Page and PageSize parameters are optional.
     * The Data field in the response is returned as an array, and the Total field indicates the total number of items that meet the query conditions.
     *
     * @param request - ListContextDatabaseSyncRunsRequest
     *
     * @returns ListContextDatabaseSyncRunsResponse
     *
     * @param ListContextDatabaseSyncRunsRequest $request
     *
     * @return ListContextDatabaseSyncRunsResponse
     */
    public function listContextDatabaseSyncRuns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncRunsWithOptions($request, $runtime);
    }

    /**
     * Lists the discovered tree nodes for the data selection scope.
     *
     * @remarks
     * List operations return paginated results by default. Page and PageSize are optional parameters. The Data list field in the response is returned as an array, and Total indicates the total number of entries that meet the conditions.
     *
     * @param request - ListContextDatabaseSyncSourceTreeNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncSourceTreeNodesResponse
     *
     * @param ListContextDatabaseSyncSourceTreeNodesRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListContextDatabaseSyncSourceTreeNodesResponse
     */
    public function listContextDatabaseSyncSourceTreeNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncSourceTreeNodes',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncSourceTreeNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the discovered tree nodes for the data selection scope.
     *
     * @remarks
     * List operations return paginated results by default. Page and PageSize are optional parameters. The Data list field in the response is returned as an array, and Total indicates the total number of entries that meet the conditions.
     *
     * @param request - ListContextDatabaseSyncSourceTreeNodesRequest
     *
     * @returns ListContextDatabaseSyncSourceTreeNodesResponse
     *
     * @param ListContextDatabaseSyncSourceTreeNodesRequest $request
     *
     * @return ListContextDatabaseSyncSourceTreeNodesResponse
     */
    public function listContextDatabaseSyncSourceTreeNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncSourceTreeNodesWithOptions($request, $runtime);
    }

    /**
     * Lists the data selection scopes.
     *
     * @remarks
     * By default, the list operation returns paginated results. Page and PageSize are optional parameters. The Data list field in the response is returned as an array, and Total indicates the total number of entries that meet the conditions.
     *
     * @param request - ListContextDatabaseSyncSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseSyncSourcesResponse
     *
     * @param ListContextDatabaseSyncSourcesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListContextDatabaseSyncSourcesResponse
     */
    public function listContextDatabaseSyncSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseSyncSources',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseSyncSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the data selection scopes.
     *
     * @remarks
     * By default, the list operation returns paginated results. Page and PageSize are optional parameters. The Data list field in the response is returned as an array, and Total indicates the total number of entries that meet the conditions.
     *
     * @param request - ListContextDatabaseSyncSourcesRequest
     *
     * @returns ListContextDatabaseSyncSourcesResponse
     *
     * @param ListContextDatabaseSyncSourcesRequest $request
     *
     * @return ListContextDatabaseSyncSourcesResponse
     */
    public function listContextDatabaseSyncSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseSyncSourcesWithOptions($request, $runtime);
    }

    /**
     * Lists ContextDB workspaces.
     *
     * @remarks
     * Lists ContextDB workspaces.
     *
     * @param request - ListContextDatabaseWorkspacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextDatabaseWorkspacesResponse
     *
     * @param ListContextDatabaseWorkspacesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListContextDatabaseWorkspacesResponse
     */
    public function listContextDatabaseWorkspacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextDatabaseWorkspaces',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContextDatabaseWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists ContextDB workspaces.
     *
     * @remarks
     * Lists ContextDB workspaces.
     *
     * @param request - ListContextDatabaseWorkspacesRequest
     *
     * @returns ListContextDatabaseWorkspacesResponse
     *
     * @param ListContextDatabaseWorkspacesRequest $request
     *
     * @return ListContextDatabaseWorkspacesResponse
     */
    public function listContextDatabaseWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContextDatabaseWorkspacesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of dedicated agents created by the user.
     *
     * @param request - ListCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomAgentResponse
     *
     * @param ListCustomAgentRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCustomAgentResponse
     */
    public function listCustomAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of dedicated agents created by the user.
     *
     * @param request - ListCustomAgentRequest
     *
     * @returns ListCustomAgentResponse
     *
     * @param ListCustomAgentRequest $request
     *
     * @return ListCustomAgentResponse
     */
    public function listCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomAgentWithOptions($request, $runtime);
    }

    /**
     * Queries the list of Agent tools for a user.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomAgentToolsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListCustomAgentToolsResponse
     */
    public function listCustomAgentToolsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListCustomAgentTools',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomAgentToolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Agent tools for a user.
     *
     * @returns ListCustomAgentToolsResponse
     *
     * @return ListCustomAgentToolsResponse
     */
    public function listCustomAgentTools()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomAgentToolsWithOptions($runtime);
    }

    /**
     * Retrieves the AI gateway token usage for an RDS Supabase instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase.
     *
     * @param request - ListLLMTokenUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLLMTokenUsageResponse
     *
     * @param ListLLMTokenUsageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLLMTokenUsageResponse
     */
    public function listLLMTokenUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLLMTokenUsage',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLLMTokenUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the AI gateway token usage for an RDS Supabase instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase.
     *
     * @param request - ListLLMTokenUsageRequest
     *
     * @returns ListLLMTokenUsageResponse
     *
     * @param ListLLMTokenUsageRequest $request
     *
     * @return ListLLMTokenUsageResponse
     */
    public function listLLMTokenUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLLMTokenUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the list of basic information about all inspection configurations under a specified user UID.
     *
     * @param request - ListScheduledTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledTasksResponse
     *
     * @param ListScheduledTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledTasks',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of basic information about all inspection configurations under a specified user UID.
     *
     * @param request - ListScheduledTasksRequest
     *
     * @returns ListScheduledTasksResponse
     *
     * @param ListScheduledTasksRequest $request
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduledTasksWithOptions($request, $runtime);
    }

    /**
     * Retrieves the custom skills of the current user and all system-preset skills.
     *
     * @param request - ListSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillResponse
     *
     * @param ListSkillRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListSkillResponse
     */
    public function listSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkill',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the custom skills of the current user and all system-preset skills.
     *
     * @param request - ListSkillRequest
     *
     * @returns ListSkillResponse
     *
     * @param ListSkillRequest $request
     *
     * @return ListSkillResponse
     */
    public function listSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillWithOptions($request, $runtime);
    }

    /**
     * Modifies the modules of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param tmpReq - ModifyAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppInstanceResponse
     *
     * @param ModifyAppInstanceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAppInstanceResponse
     */
    public function modifyAppInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->components) {
            $request->componentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }

        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->componentsShrink) {
            @$query['Components'] = $request->componentsShrink;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the modules of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyAppInstanceRequest
     *
     * @returns ModifyAppInstanceResponse
     *
     * @param ModifyAppInstanceRequest $request
     *
     * @return ModifyAppInstanceResponse
     */
    public function modifyAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies the authentication configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param tmpReq - ModifyInstanceAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAuthConfigResponse
     *
     * @param ModifyInstanceAuthConfigRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceAuthConfigResponse
     */
    public function modifyInstanceAuthConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceAuthConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceAuthConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the authentication configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceAuthConfigRequest
     *
     * @returns ModifyInstanceAuthConfigResponse
     *
     * @param ModifyInstanceAuthConfigRequest $request
     *
     * @return ModifyInstanceAuthConfigResponse
     */
    public function modifyInstanceAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAuthConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the general configurations of an instance, such as network EIP and NAT configurations.
     *
     * @param request - ModifyInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->configValue) {
            @$query['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the general configurations of an instance, such as network EIP and NAT configurations.
     *
     * @param request - ModifyInstanceConfigRequest
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the IP whitelist of an RDS AI application instance.
     *
     * @remarks
     * ### Supported engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceIpWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceIpWhitelistResponse
     *
     * @param ModifyInstanceIpWhitelistRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceIpWhitelistResponse
     */
    public function modifyInstanceIpWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->ipWhitelist) {
            @$query['IpWhitelist'] = $request->ipWhitelist;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceIpWhitelist',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP whitelist of an RDS AI application instance.
     *
     * @remarks
     * ### Supported engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceIpWhitelistRequest
     *
     * @returns ModifyInstanceIpWhitelistResponse
     *
     * @param ModifyInstanceIpWhitelistRequest $request
     *
     * @return ModifyInstanceIpWhitelistResponse
     */
    public function modifyInstanceIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * Modifies the RAG Agent configuration of an RDS AI application instance.
     *
     * @param tmpReq - ModifyInstanceRAGConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceRAGConfigResponse
     *
     * @param ModifyInstanceRAGConfigRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceRAGConfigResponse
     */
    public function modifyInstanceRAGConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceRAGConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceRAGConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceRAGConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the RAG Agent configuration of an RDS AI application instance.
     *
     * @param request - ModifyInstanceRAGConfigRequest
     *
     * @returns ModifyInstanceRAGConfigResponse
     *
     * @param ModifyInstanceRAGConfigRequest $request
     *
     * @return ModifyInstanceRAGConfigResponse
     */
    public function modifyInstanceRAGConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceRAGConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the SSL configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceSSLResponse
     *
     * @param ModifyInstanceSSLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->CAType) {
            @$query['CAType'] = $request->CAType;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->SSLEnabled) {
            @$query['SSLEnabled'] = $request->SSLEnabled;
        }

        if (null !== $request->serverCert) {
            @$query['ServerCert'] = $request->serverCert;
        }

        if (null !== $request->serverKey) {
            @$query['ServerKey'] = $request->serverKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSSL',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the SSL configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceSSLRequest
     *
     * @returns ModifyInstanceSSLResponse
     *
     * @param ModifyInstanceSSLRequest $request
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * Modifies the storage configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * > Currently, only Object Storage Service (OSS) is supported.
     *
     * @param tmpReq - ModifyInstanceStorageConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceStorageConfigResponse
     *
     * @param ModifyInstanceStorageConfigRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyInstanceStorageConfigResponse
     */
    public function modifyInstanceStorageConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceStorageConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceStorageConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceStorageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the storage configuration of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * > Currently, only Object Storage Service (OSS) is supported.
     *
     * @param request - ModifyInstanceStorageConfigRequest
     *
     * @returns ModifyInstanceStorageConfigResponse
     *
     * @param ModifyInstanceStorageConfigRequest $request
     *
     * @return ModifyInstanceStorageConfigResponse
     */
    public function modifyInstanceStorageConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceStorageConfigWithOptions($request, $runtime);
    }

    /**
     * Batch modifies the SSL configurations of RDS AI application instances.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param tmpReq - ModifyInstancesSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstancesSSLResponse
     *
     * @param ModifyInstancesSSLRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstancesSSLResponse
     */
    public function modifyInstancesSSLWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstancesSSLShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceNames) {
            $request->instanceNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceNames, 'InstanceNames', 'json');
        }

        $query = [];
        if (null !== $request->CAType) {
            @$query['CAType'] = $request->CAType;
        }

        if (null !== $request->instanceNamesShrink) {
            @$query['InstanceNames'] = $request->instanceNamesShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->SSLEnabled) {
            @$query['SSLEnabled'] = $request->SSLEnabled;
        }

        if (null !== $request->serverCert) {
            @$query['ServerCert'] = $request->serverCert;
        }

        if (null !== $request->serverKey) {
            @$query['ServerKey'] = $request->serverKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstancesSSL',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstancesSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch modifies the SSL configurations of RDS AI application instances.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstancesSSLRequest
     *
     * @returns ModifyInstancesSSLResponse
     *
     * @param ModifyInstancesSSLRequest $request
     *
     * @return ModifyInstancesSSLResponse
     */
    public function modifyInstancesSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstancesSSLWithOptions($request, $runtime);
    }

    /**
     * Modifies message feedback.
     *
     * @param request - ModifyMessagesFeedbacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMessagesFeedbacksResponse
     *
     * @param ModifyMessagesFeedbacksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyMessagesFeedbacksResponse
     */
    public function modifyMessagesFeedbacksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        if (null !== $request->rating) {
            @$query['Rating'] = $request->rating;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMessagesFeedbacks',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMessagesFeedbacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies message feedback.
     *
     * @param request - ModifyMessagesFeedbacksRequest
     *
     * @returns ModifyMessagesFeedbacksResponse
     *
     * @param ModifyMessagesFeedbacksRequest $request
     *
     * @return ModifyMessagesFeedbacksResponse
     */
    public function modifyMessagesFeedbacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMessagesFeedbacksWithOptions($request, $runtime);
    }

    /**
     * Modifies a sandbox template.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param tmpReq - ModifySandboxTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySandboxTemplateResponse
     *
     * @param ModifySandboxTemplateRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifySandboxTemplateResponse
     */
    public function modifySandboxTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifySandboxTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->defaultCpu) {
            @$query['DefaultCpu'] = $request->defaultCpu;
        }

        if (null !== $request->defaultMemory) {
            @$query['DefaultMemory'] = $request->defaultMemory;
        }

        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySandboxTemplate',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySandboxTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a sandbox template.
     *
     * @remarks
     * ### Applicable engine
     * RDS Supabase
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifySandboxTemplateRequest
     *
     * @returns ModifySandboxTemplateResponse
     *
     * @param ModifySandboxTemplateRequest $request
     *
     * @return ModifySandboxTemplateResponse
     */
    public function modifySandboxTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySandboxTemplateWithOptions($request, $runtime);
    }

    /**
     * Modifies an existing inspection configuration.
     *
     * @param request - ModifyScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScheduledTaskResponse
     *
     * @param ModifyScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->inspectionItems) {
            @$query['InspectionItems'] = $request->inspectionItems;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->reportLanguage) {
            @$query['ReportLanguage'] = $request->reportLanguage;
        }

        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScheduledTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an existing inspection configuration.
     *
     * @param request - ModifyScheduledTaskRequest
     *
     * @returns ModifyScheduledTaskResponse
     *
     * @param ModifyScheduledTaskRequest $request
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * Modifies the IP whitelist of an RDS AI Assistant Ultimate Edition instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - ModifyWhitelistIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWhitelistIpsResponse
     *
     * @param ModifyWhitelistIpsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyWhitelistIpsResponse
     */
    public function modifyWhitelistIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipWhitelist) {
            @$query['IpWhitelist'] = $request->ipWhitelist;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWhitelistIps',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWhitelistIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP whitelist of an RDS AI Assistant Ultimate Edition instance.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - ModifyWhitelistIpsRequest
     *
     * @returns ModifyWhitelistIpsResponse
     *
     * @param ModifyWhitelistIpsRequest $request
     *
     * @return ModifyWhitelistIpsResponse
     */
    public function modifyWhitelistIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWhitelistIpsWithOptions($request, $runtime);
    }

    /**
     * Deletes an exclusion item for an import job.
     *
     * @remarks
     * Deletes an exclusion item for a job.
     *
     * @param request - RemoveContextDatabaseSyncJobExclusionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveContextDatabaseSyncJobExclusionResponse
     *
     * @param RemoveContextDatabaseSyncJobExclusionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return RemoveContextDatabaseSyncJobExclusionResponse
     */
    public function removeContextDatabaseSyncJobExclusionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->documentId) {
            @$query['DocumentId'] = $request->documentId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveContextDatabaseSyncJobExclusion',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveContextDatabaseSyncJobExclusionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an exclusion item for an import job.
     *
     * @remarks
     * Deletes an exclusion item for a job.
     *
     * @param request - RemoveContextDatabaseSyncJobExclusionRequest
     *
     * @returns RemoveContextDatabaseSyncJobExclusionResponse
     *
     * @param RemoveContextDatabaseSyncJobExclusionRequest $request
     *
     * @return RemoveContextDatabaseSyncJobExclusionResponse
     */
    public function removeContextDatabaseSyncJobExclusion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeContextDatabaseSyncJobExclusionWithOptions($request, $runtime);
    }

    /**
     * Renames a custom API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - RenameApiKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenameApiKeyResponse
     *
     * @param RenameApiKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RenameApiKeyResponse
     */
    public function renameApiKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenameApiKey',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenameApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renames a custom API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - RenameApiKeyRequest
     *
     * @returns RenameApiKeyResponse
     *
     * @param RenameApiKeyRequest $request
     *
     * @return RenameApiKeyResponse
     */
    public function renameApiKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameApiKeyWithOptions($request, $runtime);
    }

    /**
     * Resets the API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - ResetApiKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetApiKeyResponse
     *
     * @param ResetApiKeyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResetApiKeyResponse
     */
    public function resetApiKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetApiKey',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - ResetApiKeyRequest
     *
     * @returns ResetApiKeyResponse
     *
     * @param ResetApiKeyRequest $request
     *
     * @return ResetApiKeyResponse
     */
    public function resetApiKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetApiKeyWithOptions($request, $runtime);
    }

    /**
     * Resets the keys of an RDS AI instance, including AnonKey, ServiceKey, and JwtSecret. After the reset, the old keys and secret become invalid immediately. Ensure that your applications are updated accordingly.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ResetInstanceKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetInstanceKeysResponse
     *
     * @param ResetInstanceKeysRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetInstanceKeysResponse
     */
    public function resetInstanceKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetInstanceKeys',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetInstanceKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the keys of an RDS AI instance, including AnonKey, ServiceKey, and JwtSecret. After the reset, the old keys and secret become invalid immediately. Ensure that your applications are updated accordingly.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ResetInstanceKeysRequest
     *
     * @returns ResetInstanceKeysResponse
     *
     * @param ResetInstanceKeysRequest $request
     *
     * @return ResetInstanceKeysResponse
     */
    public function resetInstanceKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetInstanceKeysWithOptions($request, $runtime);
    }

    /**
     * Resets the logon password and database access password of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * > Currently, only the password of the RDS Supabase Dashboard user can be modified.
     *
     * @param request - ResetInstancePasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetInstancePasswordResponse
     *
     * @param ResetInstancePasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ResetInstancePasswordResponse
     */
    public function resetInstancePasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->dashboardPassword) {
            @$query['DashboardPassword'] = $request->dashboardPassword;
        }

        if (null !== $request->databasePassword) {
            @$query['DatabasePassword'] = $request->databasePassword;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetInstancePassword',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetInstancePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the logon password and database access password of an RDS AI application instance.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * > Currently, only the password of the RDS Supabase Dashboard user can be modified.
     *
     * @param request - ResetInstancePasswordRequest
     *
     * @returns ResetInstancePasswordResponse
     *
     * @param ResetInstancePasswordRequest $request
     *
     * @return ResetInstancePasswordResponse
     */
    public function resetInstancePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetInstancePasswordWithOptions($request, $runtime);
    }

    /**
     * Restarts an ApsaraDB RDS AI application instance that is in the Running state.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - RestartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an ApsaraDB RDS AI application instance that is in the Running state.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - RestartInstanceRequest
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * 基于快照重试失败明细.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。 重试会基于失败项生成新的 Run，原 Run 状态保持不变。
     *
     * @param request - RetryFailedContextDatabaseSyncRunRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryFailedContextDatabaseSyncRunResponse
     *
     * @param RetryFailedContextDatabaseSyncRunRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return RetryFailedContextDatabaseSyncRunResponse
     */
    public function retryFailedContextDatabaseSyncRunWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->runId) {
            @$query['RunId'] = $request->runId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryFailedContextDatabaseSyncRun',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryFailedContextDatabaseSyncRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 基于快照重试失败明细.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。 重试会基于失败项生成新的 Run，原 Run 状态保持不变。
     *
     * @param request - RetryFailedContextDatabaseSyncRunRequest
     *
     * @returns RetryFailedContextDatabaseSyncRunResponse
     *
     * @param RetryFailedContextDatabaseSyncRunRequest $request
     *
     * @return RetryFailedContextDatabaseSyncRunResponse
     */
    public function retryFailedContextDatabaseSyncRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryFailedContextDatabaseSyncRunWithOptions($request, $runtime);
    }

    /**
     * Revokes an API key for a context database.
     *
     * @remarks
     * Revokes an API key.
     *
     * @param request - RevokeContextDatabaseApiKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeContextDatabaseApiKeyResponse
     *
     * @param RevokeContextDatabaseApiKeyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RevokeContextDatabaseApiKeyResponse
     */
    public function revokeContextDatabaseApiKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeContextDatabaseApiKey',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeContextDatabaseApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes an API key for a context database.
     *
     * @remarks
     * Revokes an API key.
     *
     * @param request - RevokeContextDatabaseApiKeyRequest
     *
     * @returns RevokeContextDatabaseApiKeyResponse
     *
     * @param RevokeContextDatabaseApiKeyRequest $request
     *
     * @return RevokeContextDatabaseApiKeyResponse
     */
    public function revokeContextDatabaseApiKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeContextDatabaseApiKeyWithOptions($request, $runtime);
    }

    /**
     * Manually triggers a run.
     *
     * @remarks
     * Write operations support idempotence by passing a ClientToken. If no ClientToken is provided, the backend generates one automatically.
     *
     * @param request - StartContextDatabaseSyncRunRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartContextDatabaseSyncRunResponse
     *
     * @param StartContextDatabaseSyncRunRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return StartContextDatabaseSyncRunResponse
     */
    public function startContextDatabaseSyncRunWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartContextDatabaseSyncRun',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartContextDatabaseSyncRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually triggers a run.
     *
     * @remarks
     * Write operations support idempotence by passing a ClientToken. If no ClientToken is provided, the backend generates one automatically.
     *
     * @param request - StartContextDatabaseSyncRunRequest
     *
     * @returns StartContextDatabaseSyncRunResponse
     *
     * @param StartContextDatabaseSyncRunRequest $request
     *
     * @return StartContextDatabaseSyncRunResponse
     */
    public function startContextDatabaseSyncRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startContextDatabaseSyncRunWithOptions($request, $runtime);
    }

    /**
     * Initiates a snapshot discovery task for data selection scope configuration.
     *
     * @remarks
     * Write operations support idempotence by passing a ClientToken. If no ClientToken is provided, the backend generates one automatically. Discovery is an asynchronous operation. The operation returns a discovery task identifier. Poll for results to retrieve SelectedNodeKeys.
     *
     * @param request - StartContextDatabaseSyncSourceDiscoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartContextDatabaseSyncSourceDiscoveryResponse
     *
     * @param StartContextDatabaseSyncSourceDiscoveryRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return StartContextDatabaseSyncSourceDiscoveryResponse
     */
    public function startContextDatabaseSyncSourceDiscoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartContextDatabaseSyncSourceDiscovery',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartContextDatabaseSyncSourceDiscoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a snapshot discovery task for data selection scope configuration.
     *
     * @remarks
     * Write operations support idempotence by passing a ClientToken. If no ClientToken is provided, the backend generates one automatically. Discovery is an asynchronous operation. The operation returns a discovery task identifier. Poll for results to retrieve SelectedNodeKeys.
     *
     * @param request - StartContextDatabaseSyncSourceDiscoveryRequest
     *
     * @returns StartContextDatabaseSyncSourceDiscoveryResponse
     *
     * @param StartContextDatabaseSyncSourceDiscoveryRequest $request
     *
     * @return StartContextDatabaseSyncSourceDiscoveryResponse
     */
    public function startContextDatabaseSyncSourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startContextDatabaseSyncSourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * Starts an RDS AI application instance that is in the Stopped state.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related feature documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - StartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an RDS AI application instance that is in the Stopped state.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related feature documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - StartInstanceRequest
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * Pauses an RDS AI application instance that is in the Running state.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related feature documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - StopInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branchName) {
            @$query['BranchName'] = $request->branchName;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses an RDS AI application instance that is in the Running state.
     *
     * @remarks
     * ### Applicable engine
     * RDS PostgreSQL
     * ### Related feature documentation
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - StopInstanceRequest
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies the quota of an API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param tmpReq - UpdateApiKeyQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApiKeyQuotaResponse
     *
     * @param UpdateApiKeyQuotaRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApiKeyQuotaResponse
     */
    public function updateApiKeyQuotaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateApiKeyQuotaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->keys) {
            $request->keysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keysShrink) {
            @$query['Keys'] = $request->keysShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApiKeyQuota',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApiKeyQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the quota of an API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - UpdateApiKeyQuotaRequest
     *
     * @returns UpdateApiKeyQuotaResponse
     *
     * @param UpdateApiKeyQuotaRequest $request
     *
     * @return UpdateApiKeyQuotaResponse
     */
    public function updateApiKeyQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApiKeyQuotaWithOptions($request, $runtime);
    }

    /**
     * Updates the API key of a context database.
     *
     * @remarks
     * Updates the display metadata of an API key. At least one of Name or Description must be specified. The plaintext key is not reissued.
     *
     * @param request - UpdateContextDatabaseApiKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseApiKeyResponse
     *
     * @param UpdateContextDatabaseApiKeyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateContextDatabaseApiKeyResponse
     */
    public function updateContextDatabaseApiKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseApiKey',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the API key of a context database.
     *
     * @remarks
     * Updates the display metadata of an API key. At least one of Name or Description must be specified. The plaintext key is not reissued.
     *
     * @param request - UpdateContextDatabaseApiKeyRequest
     *
     * @returns UpdateContextDatabaseApiKeyResponse
     *
     * @param UpdateContextDatabaseApiKeyRequest $request
     *
     * @return UpdateContextDatabaseApiKeyResponse
     */
    public function updateContextDatabaseApiKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseApiKeyWithOptions($request, $runtime);
    }

    /**
     * Updates a context database member.
     *
     * @remarks
     * Updates the role or status of a member.
     *
     * @param request - UpdateContextDatabaseMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseMemberResponse
     *
     * @param UpdateContextDatabaseMemberRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateContextDatabaseMemberResponse
     */
    public function updateContextDatabaseMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseMember',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a context database member.
     *
     * @remarks
     * Updates the role or status of a member.
     *
     * @param request - UpdateContextDatabaseMemberRequest
     *
     * @returns UpdateContextDatabaseMemberResponse
     *
     * @param UpdateContextDatabaseMemberRequest $request
     *
     * @return UpdateContextDatabaseMemberResponse
     */
    public function updateContextDatabaseMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseMemberWithOptions($request, $runtime);
    }

    /**
     * 更新连接元数据.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。
     *
     * @param request - UpdateContextDatabaseSyncConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseSyncConnectionResponse
     *
     * @param UpdateContextDatabaseSyncConnectionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateContextDatabaseSyncConnectionResponse
     */
    public function updateContextDatabaseSyncConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$query['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseSyncConnection',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseSyncConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新连接元数据.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。
     *
     * @param request - UpdateContextDatabaseSyncConnectionRequest
     *
     * @returns UpdateContextDatabaseSyncConnectionResponse
     *
     * @param UpdateContextDatabaseSyncConnectionRequest $request
     *
     * @return UpdateContextDatabaseSyncConnectionResponse
     */
    public function updateContextDatabaseSyncConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseSyncConnectionWithOptions($request, $runtime);
    }

    /**
     * 单独轮换连接凭据.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。
     *
     * @param tmpReq - UpdateContextDatabaseSyncConnectionCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseSyncConnectionCredentialResponse
     *
     * @param UpdateContextDatabaseSyncConnectionCredentialRequest $tmpReq
     * @param RuntimeOptions                                       $runtime
     *
     * @return UpdateContextDatabaseSyncConnectionCredentialResponse
     */
    public function updateContextDatabaseSyncConnectionCredentialWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateContextDatabaseSyncConnectionCredentialShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentials) {
            $request->credentialsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentials, 'Credentials', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$query['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->credentialsShrink) {
            @$query['Credentials'] = $request->credentialsShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseSyncConnectionCredential',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseSyncConnectionCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 单独轮换连接凭据.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。
     *
     * @param request - UpdateContextDatabaseSyncConnectionCredentialRequest
     *
     * @returns UpdateContextDatabaseSyncConnectionCredentialResponse
     *
     * @param UpdateContextDatabaseSyncConnectionCredentialRequest $request
     *
     * @return UpdateContextDatabaseSyncConnectionCredentialResponse
     */
    public function updateContextDatabaseSyncConnectionCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseSyncConnectionCredentialWithOptions($request, $runtime);
    }

    /**
     * 更新 Job 元数据.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。 Target 为隐含概念，调用方只需传入 KnowledgeBaseId，后端自动创建/匹配 Target。
     *
     * @param tmpReq - UpdateContextDatabaseSyncJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseSyncJobResponse
     *
     * @param UpdateContextDatabaseSyncJobRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateContextDatabaseSyncJobResponse
     */
    public function updateContextDatabaseSyncJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateContextDatabaseSyncJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filters) {
            $request->filtersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->filtersShrink) {
            @$query['Filters'] = $request->filtersShrink;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->targetKnowledgeBaseId) {
            @$query['TargetKnowledgeBaseId'] = $request->targetKnowledgeBaseId;
        }

        if (null !== $request->targetKnowledgeBaseName) {
            @$query['TargetKnowledgeBaseName'] = $request->targetKnowledgeBaseName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseSyncJob',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseSyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Job 元数据.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。 Target 为隐含概念，调用方只需传入 KnowledgeBaseId，后端自动创建/匹配 Target。
     *
     * @param request - UpdateContextDatabaseSyncJobRequest
     *
     * @returns UpdateContextDatabaseSyncJobResponse
     *
     * @param UpdateContextDatabaseSyncJobRequest $request
     *
     * @return UpdateContextDatabaseSyncJobResponse
     */
    public function updateContextDatabaseSyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseSyncJobWithOptions($request, $runtime);
    }

    /**
     * 更新 Job 调度配置.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。
     *
     * @param tmpReq - UpdateContextDatabaseSyncJobScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseSyncJobScheduleResponse
     *
     * @param UpdateContextDatabaseSyncJobScheduleRequest $tmpReq
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateContextDatabaseSyncJobScheduleResponse
     */
    public function updateContextDatabaseSyncJobScheduleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateContextDatabaseSyncJobScheduleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dailyTimes) {
            $request->dailyTimesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dailyTimes, 'DailyTimes', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dailyTimesShrink) {
            @$query['DailyTimes'] = $request->dailyTimesShrink;
        }

        if (null !== $request->intervalMinutes) {
            @$query['IntervalMinutes'] = $request->intervalMinutes;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->missedPolicy) {
            @$query['MissedPolicy'] = $request->missedPolicy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseSyncJobSchedule',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseSyncJobScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Job 调度配置.
     *
     * @remarks
     * 写操作可传入 ClientToken 实现幂等；未传时由后端自动生成。
     *
     * @param request - UpdateContextDatabaseSyncJobScheduleRequest
     *
     * @returns UpdateContextDatabaseSyncJobScheduleResponse
     *
     * @param UpdateContextDatabaseSyncJobScheduleRequest $request
     *
     * @return UpdateContextDatabaseSyncJobScheduleResponse
     */
    public function updateContextDatabaseSyncJobSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseSyncJobScheduleWithOptions($request, $runtime);
    }

    /**
     * Updates the metadata of a data selection scope.
     *
     * @remarks
     * Write operations support idempotence via ClientToken. If ClientToken is not provided, the backend generates one automatically.
     *
     * @param tmpReq - UpdateContextDatabaseSyncSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseSyncSourceResponse
     *
     * @param UpdateContextDatabaseSyncSourceRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateContextDatabaseSyncSourceResponse
     */
    public function updateContextDatabaseSyncSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateContextDatabaseSyncSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceConfig) {
            $request->sourceConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceConfig, 'SourceConfig', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->sourceConfigShrink) {
            @$query['SourceConfig'] = $request->sourceConfigShrink;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseSyncSource',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseSyncSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the metadata of a data selection scope.
     *
     * @remarks
     * Write operations support idempotence via ClientToken. If ClientToken is not provided, the backend generates one automatically.
     *
     * @param request - UpdateContextDatabaseSyncSourceRequest
     *
     * @returns UpdateContextDatabaseSyncSourceResponse
     *
     * @param UpdateContextDatabaseSyncSourceRequest $request
     *
     * @return UpdateContextDatabaseSyncSourceResponse
     */
    public function updateContextDatabaseSyncSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseSyncSourceWithOptions($request, $runtime);
    }

    /**
     * Updates the explicit node selection for the data selection scope.
     *
     * @remarks
     * For write operations, you can pass the ClientToken parameter to ensure idempotency. If this parameter is not provided, the backend automatically generates one.
     *
     * @param tmpReq - UpdateContextDatabaseSyncSourceSelectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseSyncSourceSelectionResponse
     *
     * @param UpdateContextDatabaseSyncSourceSelectionRequest $tmpReq
     * @param RuntimeOptions                                  $runtime
     *
     * @return UpdateContextDatabaseSyncSourceSelectionResponse
     */
    public function updateContextDatabaseSyncSourceSelectionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateContextDatabaseSyncSourceSelectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->selectedNodeKeys) {
            $request->selectedNodeKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->selectedNodeKeys, 'SelectedNodeKeys', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->selectedNodeKeysShrink) {
            @$query['SelectedNodeKeys'] = $request->selectedNodeKeysShrink;
        }

        if (null !== $request->selectionPolicy) {
            @$query['SelectionPolicy'] = $request->selectionPolicy;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseSyncSourceSelection',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseSyncSourceSelectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the explicit node selection for the data selection scope.
     *
     * @remarks
     * For write operations, you can pass the ClientToken parameter to ensure idempotency. If this parameter is not provided, the backend automatically generates one.
     *
     * @param request - UpdateContextDatabaseSyncSourceSelectionRequest
     *
     * @returns UpdateContextDatabaseSyncSourceSelectionResponse
     *
     * @param UpdateContextDatabaseSyncSourceSelectionRequest $request
     *
     * @return UpdateContextDatabaseSyncSourceSelectionResponse
     */
    public function updateContextDatabaseSyncSourceSelection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseSyncSourceSelectionWithOptions($request, $runtime);
    }

    /**
     * Updates a ContextDB workspace.
     *
     * @remarks
     * Modifies the name of a workspace.
     *
     * @param request - UpdateContextDatabaseWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextDatabaseWorkspaceResponse
     *
     * @param UpdateContextDatabaseWorkspaceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateContextDatabaseWorkspaceResponse
     */
    public function updateContextDatabaseWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceName) {
            @$query['WorkspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContextDatabaseWorkspace',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContextDatabaseWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a ContextDB workspace.
     *
     * @remarks
     * Modifies the name of a workspace.
     *
     * @param request - UpdateContextDatabaseWorkspaceRequest
     *
     * @returns UpdateContextDatabaseWorkspaceResponse
     *
     * @param UpdateContextDatabaseWorkspaceRequest $request
     *
     * @return UpdateContextDatabaseWorkspaceResponse
     */
    public function updateContextDatabaseWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContextDatabaseWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Updates a Custom Agent.
     *
     * @param tmpReq - UpdateCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomAgentResponse
     *
     * @param UpdateCustomAgentRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCustomAgentResponse
     */
    public function updateCustomAgentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCustomAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->skillIds) {
            $request->skillIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->skillIds, 'SkillIds', 'json');
        }

        if (null !== $tmpReq->tools) {
            $request->toolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tools, 'Tools', 'json');
        }

        $query = [];
        if (null !== $request->customAgentId) {
            @$query['CustomAgentId'] = $request->customAgentId;
        }

        if (null !== $request->enableTools) {
            @$query['EnableTools'] = $request->enableTools;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->skillIdsShrink) {
            @$query['SkillIds'] = $request->skillIdsShrink;
        }

        if (null !== $request->systemPrompt) {
            @$query['SystemPrompt'] = $request->systemPrompt;
        }

        if (null !== $request->toolsShrink) {
            @$query['Tools'] = $request->toolsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a Custom Agent.
     *
     * @param request - UpdateCustomAgentRequest
     *
     * @returns UpdateCustomAgentResponse
     *
     * @param UpdateCustomAgentRequest $request
     *
     * @return UpdateCustomAgentResponse
     */
    public function updateCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomAgentWithOptions($request, $runtime);
    }

    /**
     * Updates the alert threshold percentage for an API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param tmpReq - UpdateMOQuotaAlertThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMOQuotaAlertThresholdResponse
     *
     * @param UpdateMOQuotaAlertThresholdRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateMOQuotaAlertThresholdResponse
     */
    public function updateMOQuotaAlertThresholdWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMOQuotaAlertThresholdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apikey) {
            $request->apikeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apikey, 'Apikey', 'json');
        }

        $query = [];
        if (null !== $request->apikeyShrink) {
            @$query['Apikey'] = $request->apikeyShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMOQuotaAlertThreshold',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMOQuotaAlertThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the alert threshold percentage for an API key.
     *
     * @remarks
     * ### Applicable engine
     * [RDS AI Assistant Ultimate Edition](https://www.alibabacloud.com/help/en/rds/apsaradb-rds-for-mysql/rds-copilot-ultra)
     *
     * @param request - UpdateMOQuotaAlertThresholdRequest
     *
     * @returns UpdateMOQuotaAlertThresholdResponse
     *
     * @param UpdateMOQuotaAlertThresholdRequest $request
     *
     * @return UpdateMOQuotaAlertThresholdResponse
     */
    public function updateMOQuotaAlertThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMOQuotaAlertThresholdWithOptions($request, $runtime);
    }

    /**
     * Updates the information of a specified Skill.
     *
     * @param tmpReq - UpdateSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillResponse
     *
     * @param UpdateSkillRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSkillResponse
     */
    public function updateSkillWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSkillShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        if (null !== $tmpReq->dbtypes) {
            $request->dbtypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dbtypes, 'Dbtypes', 'json');
        }

        $query = [];
        if (null !== $request->contentShrink) {
            @$query['Content'] = $request->contentShrink;
        }

        if (null !== $request->dbtypesShrink) {
            @$query['Dbtypes'] = $request->dbtypesShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        if (null !== $request->updateNote) {
            @$query['UpdateNote'] = $request->updateNote;
        }

        if (null !== $request->uploadId) {
            @$query['UploadId'] = $request->uploadId;
        }

        if (null !== $request->uploadToken) {
            @$query['UploadToken'] = $request->uploadToken;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSkill',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of a specified Skill.
     *
     * @param request - UpdateSkillRequest
     *
     * @returns UpdateSkillResponse
     *
     * @param UpdateSkillRequest $request
     *
     * @return UpdateSkillResponse
     */
    public function updateSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillWithOptions($request, $runtime);
    }

    /**
     * Validates datasource credentials and authorization.
     *
     * @remarks
     * Validates the connection credentials and authorization.
     *
     * @param request - VerifyContextDatabaseSyncConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyContextDatabaseSyncConnectionResponse
     *
     * @param VerifyContextDatabaseSyncConnectionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return VerifyContextDatabaseSyncConnectionResponse
     */
    public function verifyContextDatabaseSyncConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$query['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyContextDatabaseSyncConnection',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyContextDatabaseSyncConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates datasource credentials and authorization.
     *
     * @remarks
     * Validates the connection credentials and authorization.
     *
     * @param request - VerifyContextDatabaseSyncConnectionRequest
     *
     * @returns VerifyContextDatabaseSyncConnectionResponse
     *
     * @param VerifyContextDatabaseSyncConnectionRequest $request
     *
     * @return VerifyContextDatabaseSyncConnectionResponse
     */
    public function verifyContextDatabaseSyncConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyContextDatabaseSyncConnectionWithOptions($request, $runtime);
    }
}
