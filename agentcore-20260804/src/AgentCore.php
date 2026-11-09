<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\AddMemoriesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\AddMemoriesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\AddMemoriesShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchDeleteModelsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchDeleteModelsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchDeleteModelsShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchUploadSkillsViaOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchUploadSkillsViaOssResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchUploadSkillsViaOssShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ConvertMcpToFreeEditRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ConvertMcpToFreeEditResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentIMChannelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentIMChannelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentIMChannelShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentSpecRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentSpecResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentSpecShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentSpecVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentSpecVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentSpecVersionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentVersionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCredentialShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentBootstrapTokenRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentBootstrapTokenResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderSCIMCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderSCIMCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderSyncJobRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderSyncJobResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateImageCacheRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateImageCacheResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateImageCacheShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMemoryStoreRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMemoryStoreResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMemoryStoreShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelConnectionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelConnectionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelConnectionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreatePermissionRulesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreatePermissionRulesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreatePermissionRulesShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateSkillDraftRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateSkillDraftResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateSkillDraftShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateTeamRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateTeamResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateTeamShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateUserRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateUserResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateUserShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateWorkspaceShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DebugModelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DebugModelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DebugModelShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAccessApplicationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAccessApplicationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentIMChannelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentIMChannelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentSpecRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentSpecResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentSpecVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentSpecVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteCustomAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteCustomAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteExternalAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteExternalAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteIdentityProviderRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteIdentityProviderResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteIdentityProviderSCIMCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteIdentityProviderSCIMCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteImageCacheRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteImageCacheResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteManagedAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteMcpRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteMcpResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteMemoryRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteMemoryResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteMemoryStoreRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteMemoryStoreResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteModelConnectionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteModelConnectionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteModelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteModelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeletePermissionRuleRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeletePermissionRuleResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteSkillDraftRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteSkillDraftResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteSkillRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteSkillResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteTeamRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteTeamResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteUserRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteUserResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DisableConnectorRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DisableConnectorResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DownloadAgentSpecViaOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DownloadAgentSpecViaOssResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DownloadSkillVersionViaOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DownloadSkillVersionViaOssResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\EnableConnectorRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\EnableConnectorResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\EnableConnectorShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\FindCustomAgentImagePreparationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\FindCustomAgentImagePreparationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ForcePublishSkillVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ForcePublishSkillVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ForcePublishSkillVersionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAccessApplicationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAccessApplicationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageDownloadUrlRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageDownloadUrlResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageOssRamAuthorizeUrlRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageOssRamAuthorizeUrlResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageUploadUrlRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageUploadUrlResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageUploadUrlShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentIMChannelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentIMChannelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecImportFileUrlRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecImportFileUrlResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecLatestRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecLatestResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentImagePreparationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentImagePreparationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSCIMRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSCIMResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderServiceProviderRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderServiceProviderResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncJobRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncJobResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncScopeRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncScopeResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetImageCacheRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetImageCacheResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpCodePackageUploadUrlRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpCodePackageUploadUrlResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpCodePackageUploadUrlShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpMarketItemRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpMarketItemResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryStoreRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryStoreResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetModelConnectionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetModelConnectionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetModelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetModelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSandboxRebuildOperationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSandboxRebuildOperationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointApiKeyRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointApiKeyResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillDetailRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillDetailResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillImportFileUrlRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillImportFileUrlResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillVersionDetailRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillVersionDetailResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetTeamRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetTeamResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetUserRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetUserResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceAcrRamAuthorizeUrlRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceAcrRamAuthorizeUrlResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceAgenticFsMountRamAuthorizeUrlRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceAgenticFsMountRamAuthorizeUrlResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspacePluginRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspacePluginResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentCodeRuntimesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentCodeRuntimesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentIMChannelsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentIMChannelsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentSpecsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentSpecsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentTeamsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentTeamsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentTeamsShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentVersionsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentVersionsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListConnectorModelsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListConnectorModelsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListConnectorsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListConnectorsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCredentialsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCredentialsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCustomAgentsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCustomAgentsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListExternalAgentsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListExternalAgentsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProviderDepartmentsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProviderDepartmentsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProviderSCIMCredentialsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProviderSCIMCredentialsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProvidersRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProvidersResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListImageCachesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListImageCachesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpMarketItemsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpMarketItemsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpToolsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpToolsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemoriesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemoriesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemorySessionMessagesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemorySessionMessagesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemorySessionsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemorySessionsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemoryStoresRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemoryStoresResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListModelConnectionsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListModelConnectionsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListModelsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListModelsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPermissionRulesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPermissionRulesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPredefinedModelProvidersRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPredefinedModelProvidersResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPredefinedModelsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPredefinedModelsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSandboxesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSandboxesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSandboxSessionsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSandboxSessionsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSkillReferencesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSkillReferencesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSkillsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSkillsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListTeamsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListTeamsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListUsersRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListUsersResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\OfflineSkillRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\OfflineSkillResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\OfflineSkillShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\OnlineSkillRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\OnlineSkillResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\OnlineSkillShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PrecheckSkillUploadViaOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PrecheckSkillUploadViaOssResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PrecheckSkillUploadViaOssShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PrepareIdentityProviderSCIMRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PrepareIdentityProviderSCIMResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PublishSkillVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PublishSkillVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PublishSkillVersionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\RebuildSandboxRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\RebuildSandboxResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\RedraftSkillVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\RedraftSkillVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\RedraftSkillVersionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ResetUserPasswordShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\RetryImageCacheRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\RetryImageCacheResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\RetryImageCacheShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchMemoriesRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchMemoriesResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchMemoriesShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SubmitAgentSpecVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SubmitAgentSpecVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SubmitAgentSpecVersionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SubmitSkillVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SubmitSkillVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SubmitSkillVersionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAccessApplicationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAccessApplicationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAccessApplicationShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelCredentialShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentSpecRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentSpecResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentSpecShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateConnectorRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateConnectorResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateConnectorShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateExternalAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateExternalAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateExternalAgentShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderSCIMRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderSCIMResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderSCIMShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpTemplateConfigRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpTemplateConfigResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpTemplateConfigShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMemoryRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMemoryResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMemoryShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMemoryStoreRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMemoryStoreResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMemoryStoreShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateModelConnectionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateModelConnectionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateModelConnectionShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateModelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateModelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateModelShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillBizTagsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillBizTagsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillBizTagsShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillLabelsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillLabelsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillLabelsShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillScopeRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillScopeResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillScopeShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateUserRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateUserResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateUserShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateWorkspaceRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateWorkspaceResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateWorkspaceShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UploadAgentSpecViaOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UploadAgentSpecViaOssResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UploadAgentSpecViaOssShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UploadSkillViaOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UploadSkillViaOssResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UploadSkillViaOssShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ValidateAgentCodePackageFromOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ValidateAgentCodePackageFromOssResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ValidateAgentCodePackageFromOssShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyAgentCodePackageOssRamAuthorizationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyAgentCodePackageOssRamAuthorizationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyConnectorRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyConnectorResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyConnectorShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyWorkspaceAcrRamAuthorizationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyWorkspaceAcrRamAuthorizationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyWorkspaceAgenticFsMountRamAuthorizationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyWorkspaceAgenticFsMountRamAuthorizationResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyWorkspaceOssMountRamAuthorizationRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyWorkspaceOssMountRamAuthorizationResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentCore extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'AgentCore';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentcore', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Writes messages or text to a memory store. If sync is omitted or set to true, the operation synchronously waits for extraction and returns only memories, which can be an empty array. If sync is set to false, the operation returns only a taskId, and you can query the result by calling GetMemoryTask.
     *
     * @remarks
     * Writes messages or text to a memory store to fetch long-term memory to retrieve and use later.
     * - If `sync` is omitted or set to `true`: waits for the fetch to complete and returns `memories`. Returns an empty array if no memories are fetched.
     * - If `sync` is set to `false`: returns a `taskId`. You can query the fetch progress and results by calling [GetMemoryTask](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMemoryTask).
     *
     * @param tmpReq - AddMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMemoriesResponse
     *
     * @param string             $workspaceId
     * @param string             $memoryStoreName
     * @param AddMemoriesRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddMemoriesResponse
     */
    public function addMemoriesWithOptions($workspaceId, $memoryStoreName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddMemoriesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddMemories',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/memories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Writes messages or text to a memory store. If sync is omitted or set to true, the operation synchronously waits for extraction and returns only memories, which can be an empty array. If sync is set to false, the operation returns only a taskId, and you can query the result by calling GetMemoryTask.
     *
     * @remarks
     * Writes messages or text to a memory store to fetch long-term memory to retrieve and use later.
     * - If `sync` is omitted or set to `true`: waits for the fetch to complete and returns `memories`. Returns an empty array if no memories are fetched.
     * - If `sync` is set to `false`: returns a `taskId`. You can query the fetch progress and results by calling [GetMemoryTask](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMemoryTask).
     *
     * @param request - AddMemoriesRequest
     *
     * @returns AddMemoriesResponse
     *
     * @param string             $workspaceId
     * @param string             $memoryStoreName
     * @param AddMemoriesRequest $request
     *
     * @return AddMemoriesResponse
     */
    public function addMemories($workspaceId, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMemoriesWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Deletes multiple models in a specified workspace. If any model is in use, the entire batch request fails.
     *
     * @remarks
     * Deletes multiple models in a specified workspace. If any model is in use, the entire batch request fails.
     *
     * @param tmpReq - BatchDeleteModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteModelsResponse
     *
     * @param string                   $workspaceId
     * @param BatchDeleteModelsRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return BatchDeleteModelsResponse
     */
    public function batchDeleteModelsWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchDeleteModelsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteModels',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/models/actions/batch-delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple models in a specified workspace. If any model is in use, the entire batch request fails.
     *
     * @remarks
     * Deletes multiple models in a specified workspace. If any model is in use, the entire batch request fails.
     *
     * @param request - BatchDeleteModelsRequest
     *
     * @returns BatchDeleteModelsResponse
     *
     * @param string                   $workspaceId
     * @param BatchDeleteModelsRequest $request
     *
     * @return BatchDeleteModelsResponse
     */
    public function batchDeleteModels($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteModelsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Uploads multiple skill ZIP packages through OSS and returns the processing result for each skill.
     *
     * @remarks
     * Imports multiple skill ZIP packages that have been uploaded to OSS into a workspace in batches, and returns the processing result for each skill.
     * OSS is used here to temporarily store the ZIP packages to be imported. First, call [GetSkillImportFileUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetSkillImportFileUrl) to obtain the upload URL and upload the files, and then call this operation. To check the package content and name conflicts in advance, call [PrecheckSkillUploadViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/PrecheckSkillUploadViaOss).
     *
     * @param tmpReq - BatchUploadSkillsViaOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUploadSkillsViaOssResponse
     *
     * @param string                         $workspaceId
     * @param BatchUploadSkillsViaOssRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchUploadSkillsViaOssResponse
     */
    public function batchUploadSkillsViaOssWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchUploadSkillsViaOssShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchUploadSkillsViaOss',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skill-actions/batch-upload-via-oss',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUploadSkillsViaOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads multiple skill ZIP packages through OSS and returns the processing result for each skill.
     *
     * @remarks
     * Imports multiple skill ZIP packages that have been uploaded to OSS into a workspace in batches, and returns the processing result for each skill.
     * OSS is used here to temporarily store the ZIP packages to be imported. First, call [GetSkillImportFileUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetSkillImportFileUrl) to obtain the upload URL and upload the files, and then call this operation. To check the package content and name conflicts in advance, call [PrecheckSkillUploadViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/PrecheckSkillUploadViaOss).
     *
     * @param request - BatchUploadSkillsViaOssRequest
     *
     * @returns BatchUploadSkillsViaOssResponse
     *
     * @param string                         $workspaceId
     * @param BatchUploadSkillsViaOssRequest $request
     *
     * @return BatchUploadSkillsViaOssResponse
     */
    public function batchUploadSkillsViaOss($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchUploadSkillsViaOssWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Converts an MCP server to free-edit mode.
     *
     * @remarks
     * Converts an MCP server installed from a marketplace template to free-edit mode so that you can directly modify the server configuration. After the conversion, the original source and tag information is retained, and the template editing restrictions are removed. The server no longer appears on the use case page associated with the template.
     *
     * @param request - ConvertMcpToFreeEditRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertMcpToFreeEditResponse
     *
     * @param string                      $workspaceId
     * @param string                      $mcpServerId
     * @param ConvertMcpToFreeEditRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ConvertMcpToFreeEditResponse
     */
    public function convertMcpToFreeEditWithOptions($workspaceId, $mcpServerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConvertMcpToFreeEdit',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-servers/' . Url::percentEncode($mcpServerId) . '/convert-to-free-edit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ConvertMcpToFreeEditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts an MCP server to free-edit mode.
     *
     * @remarks
     * Converts an MCP server installed from a marketplace template to free-edit mode so that you can directly modify the server configuration. After the conversion, the original source and tag information is retained, and the template editing restrictions are removed. The server no longer appears on the use case page associated with the template.
     *
     * @param request - ConvertMcpToFreeEditRequest
     *
     * @returns ConvertMcpToFreeEditResponse
     *
     * @param string                      $workspaceId
     * @param string                      $mcpServerId
     * @param ConvertMcpToFreeEditRequest $request
     *
     * @return ConvertMcpToFreeEditResponse
     */
    public function convertMcpToFreeEdit($workspaceId, $mcpServerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->convertMcpToFreeEditWithOptions($workspaceId, $mcpServerId, $request, $headers, $runtime);
    }

    /**
     * Creates an IM channel for a specified agent and binds it to a publicly accessible service endpoint.
     *
     * @remarks
     * Creates an IM channel for an agent to route messages from instant messaging platforms to the agent.
     * During creation, a publicly accessible service endpoint (`ServiceEndpoint`) is bound to the channel. After the channel is created, you can call [GetAgentIMChannel](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentIMChannel) to query its configuration and status.
     *
     * @param tmpReq - CreateAgentIMChannelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentIMChannelResponse
     *
     * @param string                      $workspaceId
     * @param string                      $agentId
     * @param CreateAgentIMChannelRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateAgentIMChannelResponse
     */
    public function createAgentIMChannelWithOptions($workspaceId, $agentId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAgentIMChannelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentIMChannel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/im-channels',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentIMChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an IM channel for a specified agent and binds it to a publicly accessible service endpoint.
     *
     * @remarks
     * Creates an IM channel for an agent to route messages from instant messaging platforms to the agent.
     * During creation, a publicly accessible service endpoint (`ServiceEndpoint`) is bound to the channel. After the channel is created, you can call [GetAgentIMChannel](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentIMChannel) to query its configuration and status.
     *
     * @param request - CreateAgentIMChannelRequest
     *
     * @returns CreateAgentIMChannelResponse
     *
     * @param string                      $workspaceId
     * @param string                      $agentId
     * @param CreateAgentIMChannelRequest $request
     *
     * @return CreateAgentIMChannelResponse
     */
    public function createAgentIMChannel($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentIMChannelWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Creates an AgentSpec in a specified workspace and generates the first draft version. Returns a resource conflict error if an AgentSpec with the same name already exists.
     *
     * @remarks
     * Creates an agent template (AgentSpec) and generates the first draft version for editing reusable agent configurations. The creation fails if a template with the same name already exists in the same workspace. After creation, you can query the template and version information by calling [GetAgentSpec](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentSpec).
     *
     * @param tmpReq - CreateAgentSpecRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentSpecResponse
     *
     * @param string                 $workspaceId
     * @param CreateAgentSpecRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAgentSpecResponse
     */
    public function createAgentSpecWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAgentSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentSpec',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AgentSpec in a specified workspace and generates the first draft version. Returns a resource conflict error if an AgentSpec with the same name already exists.
     *
     * @remarks
     * Creates an agent template (AgentSpec) and generates the first draft version for editing reusable agent configurations. The creation fails if a template with the same name already exists in the same workspace. After creation, you can query the template and version information by calling [GetAgentSpec](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentSpec).
     *
     * @param request - CreateAgentSpecRequest
     *
     * @returns CreateAgentSpecResponse
     *
     * @param string                 $workspaceId
     * @param CreateAgentSpecRequest $request
     *
     * @return CreateAgentSpecResponse
     */
    public function createAgentSpec($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentSpecWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist and must not have a draft currently being edited.
     *
     * @remarks
     * Creates a new draft version for an existing agent template (AgentSpec) to modify and publish the next version of the configuration.
     * The template must already exist and must not have a draft currently being edited.
     *
     * @param tmpReq - CreateAgentSpecVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentSpecVersionResponse
     *
     * @param string                        $workspaceId
     * @param string                        $agentSpecName
     * @param CreateAgentSpecVersionRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAgentSpecVersionResponse
     */
    public function createAgentSpecVersionWithOptions($workspaceId, $agentSpecName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAgentSpecVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentSpecVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentSpecVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist and must not have a draft currently being edited.
     *
     * @remarks
     * Creates a new draft version for an existing agent template (AgentSpec) to modify and publish the next version of the configuration.
     * The template must already exist and must not have a draft currently being edited.
     *
     * @param request - CreateAgentSpecVersionRequest
     *
     * @returns CreateAgentSpecVersionResponse
     *
     * @param string                        $workspaceId
     * @param string                        $agentSpecName
     * @param CreateAgentSpecVersionRequest $request
     *
     * @return CreateAgentSpecVersionResponse
     */
    public function createAgentSpecVersion($workspaceId, $agentSpecName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentSpecVersionWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime);
    }

    /**
     * Saves an agent version.
     *
     * @remarks
     * Saves the currently effective configuration of a specified managed or custom agent as an immutable fixed version, and archives the version template and artifacts. This operation only saves the version and does not deploy an instance. Other types of agents, such as external agents, do not support versions and return AgentVersionSubtypeUnsupported. The latest release of the agent must be effective, meaning latestSpecVersion is equal to effectiveSpecVersion. The system generates an incrementing version number, agentVersion, such as v1 and v2, for each agent. The version number is unique within the agent, and the sequence numbers of deleted versions are not reused. This version number is used for querying, deleting, and referencing versions in service endpoints. Each agent can retain up to 50 undeleted versions. If the limit is reached, AgentVersionQuotaExceeded is returned. You can continue to save versions after deleting unused ones. Duplicate submissions with the same versionName and release serial number return the existing version and are not subject to the limit. Submissions with the same versionName but a different release serial number return AgentVersionAlreadyExists.
     *
     * @param tmpReq - CreateAgentVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentVersionResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentId
     * @param CreateAgentVersionRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAgentVersionResponse
     */
    public function createAgentVersionWithOptions($workspaceId, $agentId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAgentVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Saves an agent version.
     *
     * @remarks
     * Saves the currently effective configuration of a specified managed or custom agent as an immutable fixed version, and archives the version template and artifacts. This operation only saves the version and does not deploy an instance. Other types of agents, such as external agents, do not support versions and return AgentVersionSubtypeUnsupported. The latest release of the agent must be effective, meaning latestSpecVersion is equal to effectiveSpecVersion. The system generates an incrementing version number, agentVersion, such as v1 and v2, for each agent. The version number is unique within the agent, and the sequence numbers of deleted versions are not reused. This version number is used for querying, deleting, and referencing versions in service endpoints. Each agent can retain up to 50 undeleted versions. If the limit is reached, AgentVersionQuotaExceeded is returned. You can continue to save versions after deleting unused ones. Duplicate submissions with the same versionName and release serial number return the existing version and are not subject to the limit. Submissions with the same versionName but a different release serial number return AgentVersionAlreadyExists.
     *
     * @param request - CreateAgentVersionRequest
     *
     * @returns CreateAgentVersionResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentId
     * @param CreateAgentVersionRequest $request
     *
     * @return CreateAgentVersionResponse
     */
    public function createAgentVersion($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentVersionWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Creates an apiKey or mcpHeader credential in a workspace for agents or MCP to access external services. The credential content is submitted as a JSON string, and masked results are returned when queried.
     *
     * @remarks
     * Creates an apiKey or mcpHeader credential in a workspace for agents or MCP to access external services.
     * ### Credential types
     * - `apiKey`: `credentialMetadata` is a JSON string that contains only a non-empty `apiKey`. Do not submit `resourceScope` and `resourceRefs`.
     * - `mcpHeader`: `credentialMetadata` is a JSON string that contains a non-empty `headers` array. Each item contains a non-empty `name` and `value` to configure MCP request headers.
     * ### MCP header scope
     * You must specify `resourceScope` when creating an `mcpHeader` credential:
     * - `ALL`: Applies to all MCP services. Omit `resourceRefs`.
     * - `SPECIFIED`: Applies to specified MCP services. `resourceRefs` must be a non-empty array. For each item, set `resourceType=mcpServer` and specify `resourceId`.
     * ### Subsequent queries
     * Use [GetCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCredential) or [ListCredentials](https://api.aliyun.com/document/AgentCore/2026-08-04/ListCredentials) to query credentials. For `apiKey`, a masked value is returned. For `mcpHeader`, only header names are returned, and header values are not returned.
     *
     * @param tmpReq - CreateCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCredentialResponse
     *
     * @param string                  $workspaceId
     * @param CreateCredentialRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCredentialResponse
     */
    public function createCredentialWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCredentialShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCredential',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/credentials',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an apiKey or mcpHeader credential in a workspace for agents or MCP to access external services. The credential content is submitted as a JSON string, and masked results are returned when queried.
     *
     * @remarks
     * Creates an apiKey or mcpHeader credential in a workspace for agents or MCP to access external services.
     * ### Credential types
     * - `apiKey`: `credentialMetadata` is a JSON string that contains only a non-empty `apiKey`. Do not submit `resourceScope` and `resourceRefs`.
     * - `mcpHeader`: `credentialMetadata` is a JSON string that contains a non-empty `headers` array. Each item contains a non-empty `name` and `value` to configure MCP request headers.
     * ### MCP header scope
     * You must specify `resourceScope` when creating an `mcpHeader` credential:
     * - `ALL`: Applies to all MCP services. Omit `resourceRefs`.
     * - `SPECIFIED`: Applies to specified MCP services. `resourceRefs` must be a non-empty array. For each item, set `resourceType=mcpServer` and specify `resourceId`.
     * ### Subsequent queries
     * Use [GetCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCredential) or [ListCredentials](https://api.aliyun.com/document/AgentCore/2026-08-04/ListCredentials) to query credentials. For `apiKey`, a masked value is returned. For `mcpHeader`, only header names are returned, and header values are not returned.
     *
     * @param request - CreateCredentialRequest
     *
     * @returns CreateCredentialResponse
     *
     * @param string                  $workspaceId
     * @param CreateCredentialRequest $request
     *
     * @return CreateCredentialResponse
     */
    public function createCredential($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCredentialWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a custom code or image agent in a specified workspace, supports code package, ACR image, and custom image deployments, and executes the deployment asynchronously.
     *
     * @remarks
     * Deploys a user-provided code package or container image as an agent in a workspace. This corresponds to the "Custom Code / Image" creation method in the console.
     * ### Preparations
     * Prepare a writable workspace and submit name, roleArn, artifact, and runtime. In runtime, specify both compute and sessionPolicy. roleArn is the RAM role used by the agent to access your cloud resources.
     * ### Select a deployment method
     * | Deployment method | Required configurations |
     * | --- | --- |
     * | ACR image | artifact.port, and type=acr, instanceId, namespace, repo, and tag in artifact.container. |
     * | Custom image | artifact.port, artifact.container.type=custom, and the complete customImage. The clientToken query parameter is required. |
     * | Code package | artifact.port, and sourceUri, languageRuntime, and entrypoint in artifact.code. |
     * artifact.code and artifact.container are mutually exclusive. The service listening port ranges from 1 to 65535. You can specify a startup command for a container image by using artifact.container.entrypoint. If this parameter is omitted, the default startup method of the image is used.
     * ### Code package
     * - ZIP and TAR.GZ formats are supported. The compressed package size ranges from 1 to 500,000,000 bytes. Dependencies must be included in the package. The platform does not install dependencies or perform online builds.
     * - Invoke [ListAgentCodeRuntimes](https://api.aliyun.com/document/AgentCore/2026-08-04/ListAgentCodeRuntimes) to query the currently active `languageRuntime`.
     * - For local files, first invoke [GetAgentCodePackageUploadUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageUploadUrl) and upload the file directly by using the upload method, URL, and request headers returned in the response. Then, commit `sourceUri`.
     * - `sourceUri` supports `oss://` URLs or HTTPS object URLs of standard OSS public domain names, including signed URLs. Private OSS objects must allow the workspace role to read them. You can first invoke [GetAgentCodePackageOssRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageOssRamAuthorizeUrl) to complete the authorization.
     * - Read permissions, objects, and sizes are checked upon commit, and a fixed copy is saved. If the transfer failed, the agent configuration is not created. Archive integrity and decompression are checked when the instance starts.
     * - `entrypoint` is the startup command executed in the `/code` folder, such as `python main.py`. The command does not automatically execute shell pipelines or expand environment variables. For complex startup logic, write a script in the package.
     * Sample request body for a code package (the runtime environment is subject to the query result):
     * ```json
     * {
     *   "name": "code-agent",
     *   "roleArn": "acs:ram::1234567890123456:role/AgentRuntimeRole",
     *   "artifact": {
     *     "port": 8000,
     *     "code": {
     *       "sourceUri": "oss://example-code-bucket/releases/agent.zip",
     *       "languageRuntime": "python3.12",
     *       "entrypoint": "python main.py"
     *     }
     *   },
     *   "runtime": {
     *     "compute": {
     *       "computeClass": "STANDARD"
     *     },
     *     "sessionPolicy": {
     *       "type": "AFFINITY"
     *     }
     *   }
     * }
     * ```
     * ### Custom image
     * Specify the complete image address in customImage.image. Tags or digests are supported. Do not include protocols or user information. Configure the image pull network separately in customImage.pullNetwork:
     * | Pull method | Configuration |
     * | --- | --- |
     * | Internet | type=public. Do not specify VPC fields. |
     * | VPC | type=vpc. Specify vpcId, vSwitchId, and securityGroupId. |
     * If repository authentication is required, specify both customImage.username and customImage.password. For anonymous access, omit both. The password is not returned in the response. The image pull network and the agent runtime network are configured separately.
     * useImageCache=true applies only to ACR images. For custom images and code packages, set this parameter to false or omit it.
     * ### Runtime configurations
     * Omitted fields in runtime.hpa use the following default values:
     * | Field | Default value | Valid values and description |
     * | --- | --- | --- |
     * | enabled | false | Specifies whether to enable elastic scaling. |
     * | minSandboxCount | 1 | The minimum number of instances. Valid values: 0 to 100. |
     * | maxSandboxCount | 10 | The maximum number of instances. Valid values: 0 to 100. The value cannot be less than the minimum number. |
     * | maxConcurrentSessionsPerSandbox | 20 | The maximum number of concurrent sessions per instance. Valid values: 1 to 20. |
     * | sessionTtlSeconds | 600 | The maximum idle time of a session, in seconds. Valid values: 60 to 86400. |
     * If sessionPolicy.type=ISOLATED_HEADER_FIELD, you must provide a valid HTTP request header name in headerName. Do not specify this field for other policies.
     * If network is omitted, the default access policy on the agent side is used. Actual access is still restricted by the workspace network. When submitting access items, specify the corresponding enabled field.
     * The total number of items in ossMounts and agenticFsMounts cannot exceed 10. The mount target mountPath must be an absolute path in the container, such as /data/train. It cannot conflict with platform reserved directories, be duplicated, or form parent-child directory overrides.
     * File mounts are used to allow the agent to access persistent data. When using AgenticFS, you can call [GetWorkspaceAgenticFsMountRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAgenticFsMountRamAuthorizeUrl) to complete the access point authorization first.
     * The path for an OSS mount must be a non-empty directory prefix in the bucket. The server for an AgenticFS mount is the access point domain name, without a protocol, port, or path. The path must be an existing non-empty relative directory in the access point. You cannot mount the root directory of the access point. If readOnly is omitted, the default value is false.
     * Environment variable names must be non-empty and unique in the list. Values must be strings, and empty strings are allowed. When configuring healthCheck, you must specify port. Omitting the health check means no health check is configured. When configuring logging.sls, specify both non-empty project and logstore.
     * ### Query results and retries
     * A successful response indicates that the request is accepted. Save the agentId and call [GetCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgent). Check latestVersionStatus, latestExecutionError, status, and sandboxPhaseCounts to confirm the configuration processing and instance status.
     * The clientToken query parameter is required for custom image submissions, and optional for ACR image and code package submissions. The token must be 1 to 128 characters in length and can contain letters, digits, periods, underscores, colons, and hyphens. Reuse the original token to retry the same submission. If the parameters are the same, the existing acceptance result is returned. Use a new token for different submission content.
     *
     * @param tmpReq - CreateCustomAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomAgentResponse
     *
     * @param string                   $workspaceId
     * @param CreateCustomAgentRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomAgentResponse
     */
    public function createCustomAgentWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCustomAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCustomAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/custom-agents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom code or image agent in a specified workspace, supports code package, ACR image, and custom image deployments, and executes the deployment asynchronously.
     *
     * @remarks
     * Deploys a user-provided code package or container image as an agent in a workspace. This corresponds to the "Custom Code / Image" creation method in the console.
     * ### Preparations
     * Prepare a writable workspace and submit name, roleArn, artifact, and runtime. In runtime, specify both compute and sessionPolicy. roleArn is the RAM role used by the agent to access your cloud resources.
     * ### Select a deployment method
     * | Deployment method | Required configurations |
     * | --- | --- |
     * | ACR image | artifact.port, and type=acr, instanceId, namespace, repo, and tag in artifact.container. |
     * | Custom image | artifact.port, artifact.container.type=custom, and the complete customImage. The clientToken query parameter is required. |
     * | Code package | artifact.port, and sourceUri, languageRuntime, and entrypoint in artifact.code. |
     * artifact.code and artifact.container are mutually exclusive. The service listening port ranges from 1 to 65535. You can specify a startup command for a container image by using artifact.container.entrypoint. If this parameter is omitted, the default startup method of the image is used.
     * ### Code package
     * - ZIP and TAR.GZ formats are supported. The compressed package size ranges from 1 to 500,000,000 bytes. Dependencies must be included in the package. The platform does not install dependencies or perform online builds.
     * - Invoke [ListAgentCodeRuntimes](https://api.aliyun.com/document/AgentCore/2026-08-04/ListAgentCodeRuntimes) to query the currently active `languageRuntime`.
     * - For local files, first invoke [GetAgentCodePackageUploadUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageUploadUrl) and upload the file directly by using the upload method, URL, and request headers returned in the response. Then, commit `sourceUri`.
     * - `sourceUri` supports `oss://` URLs or HTTPS object URLs of standard OSS public domain names, including signed URLs. Private OSS objects must allow the workspace role to read them. You can first invoke [GetAgentCodePackageOssRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageOssRamAuthorizeUrl) to complete the authorization.
     * - Read permissions, objects, and sizes are checked upon commit, and a fixed copy is saved. If the transfer failed, the agent configuration is not created. Archive integrity and decompression are checked when the instance starts.
     * - `entrypoint` is the startup command executed in the `/code` folder, such as `python main.py`. The command does not automatically execute shell pipelines or expand environment variables. For complex startup logic, write a script in the package.
     * Sample request body for a code package (the runtime environment is subject to the query result):
     * ```json
     * {
     *   "name": "code-agent",
     *   "roleArn": "acs:ram::1234567890123456:role/AgentRuntimeRole",
     *   "artifact": {
     *     "port": 8000,
     *     "code": {
     *       "sourceUri": "oss://example-code-bucket/releases/agent.zip",
     *       "languageRuntime": "python3.12",
     *       "entrypoint": "python main.py"
     *     }
     *   },
     *   "runtime": {
     *     "compute": {
     *       "computeClass": "STANDARD"
     *     },
     *     "sessionPolicy": {
     *       "type": "AFFINITY"
     *     }
     *   }
     * }
     * ```
     * ### Custom image
     * Specify the complete image address in customImage.image. Tags or digests are supported. Do not include protocols or user information. Configure the image pull network separately in customImage.pullNetwork:
     * | Pull method | Configuration |
     * | --- | --- |
     * | Internet | type=public. Do not specify VPC fields. |
     * | VPC | type=vpc. Specify vpcId, vSwitchId, and securityGroupId. |
     * If repository authentication is required, specify both customImage.username and customImage.password. For anonymous access, omit both. The password is not returned in the response. The image pull network and the agent runtime network are configured separately.
     * useImageCache=true applies only to ACR images. For custom images and code packages, set this parameter to false or omit it.
     * ### Runtime configurations
     * Omitted fields in runtime.hpa use the following default values:
     * | Field | Default value | Valid values and description |
     * | --- | --- | --- |
     * | enabled | false | Specifies whether to enable elastic scaling. |
     * | minSandboxCount | 1 | The minimum number of instances. Valid values: 0 to 100. |
     * | maxSandboxCount | 10 | The maximum number of instances. Valid values: 0 to 100. The value cannot be less than the minimum number. |
     * | maxConcurrentSessionsPerSandbox | 20 | The maximum number of concurrent sessions per instance. Valid values: 1 to 20. |
     * | sessionTtlSeconds | 600 | The maximum idle time of a session, in seconds. Valid values: 60 to 86400. |
     * If sessionPolicy.type=ISOLATED_HEADER_FIELD, you must provide a valid HTTP request header name in headerName. Do not specify this field for other policies.
     * If network is omitted, the default access policy on the agent side is used. Actual access is still restricted by the workspace network. When submitting access items, specify the corresponding enabled field.
     * The total number of items in ossMounts and agenticFsMounts cannot exceed 10. The mount target mountPath must be an absolute path in the container, such as /data/train. It cannot conflict with platform reserved directories, be duplicated, or form parent-child directory overrides.
     * File mounts are used to allow the agent to access persistent data. When using AgenticFS, you can call [GetWorkspaceAgenticFsMountRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAgenticFsMountRamAuthorizeUrl) to complete the access point authorization first.
     * The path for an OSS mount must be a non-empty directory prefix in the bucket. The server for an AgenticFS mount is the access point domain name, without a protocol, port, or path. The path must be an existing non-empty relative directory in the access point. You cannot mount the root directory of the access point. If readOnly is omitted, the default value is false.
     * Environment variable names must be non-empty and unique in the list. Values must be strings, and empty strings are allowed. When configuring healthCheck, you must specify port. Omitting the health check means no health check is configured. When configuring logging.sls, specify both non-empty project and logstore.
     * ### Query results and retries
     * A successful response indicates that the request is accepted. Save the agentId and call [GetCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgent). Check latestVersionStatus, latestExecutionError, status, and sandboxPhaseCounts to confirm the configuration processing and instance status.
     * The clientToken query parameter is required for custom image submissions, and optional for ACR image and code package submissions. The token must be 1 to 128 characters in length and can contain letters, digits, periods, underscores, colons, and hyphens. Reuse the original token to retry the same submission. If the parameters are the same, the existing acceptance result is returned. Use a new token for different submission content.
     *
     * @param request - CreateCustomAgentRequest
     *
     * @returns CreateCustomAgentResponse
     *
     * @param string                   $workspaceId
     * @param CreateCustomAgentRequest $request
     *
     * @return CreateCustomAgentResponse
     */
    public function createCustomAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates an agent that runs in an external environment, saves the configurations for the platform model, instructions, tools, and skills, and asynchronously processes the bootstrap configuration.
     *
     * @remarks
     * Registers an agent hosted in the user\\"s runtime environment, which corresponds to the "Managed Agent" in the console. After registration, you can continue to obtain the bootstrap information and complete the connection.
     * ### Configure a managed agent
     * Provide name, and select the configuration based on the model source:
     * | modelSource | Model configuration |
     * | --- | --- |
     * | PLATFORM | Uses a platform model. Provide model.modelConnectionId and model.modelName. |
     * | RUNTIME | The model is managed by the external runtime environment. Do not submit model. |
     * If modelSource is omitted but model is provided, it is processed as PLATFORM. If both are omitted, the agent cannot be created.
     * Configure instructions, MCP tools, and skills through instruction, tools, and skills. You can also reference an agent template through template.aiRegistry. The external process is deployed by the caller. This operation does not create a platform runtime instance.
     * ### Bootstrap sequence
     * **Step 1:** After creation, save the agentId and call [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent) to query the configuration processing result.
     * **Step 2:** After the latest configuration takes effect, call [GetExternalAgentBootstrapOptions](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgentBootstrapOptions) to obtain the available bootstrap networks.
     * **Step 3:** Select an available network and call [CreateExternalAgentBootstrapToken](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateExternalAgentBootstrapToken) to obtain the bootstrap token and CMS configuration. The external process then completes the bootstrap.
     * clientToken is a reserved query parameter and currently does not provide idempotency guarantees.
     *
     * @param tmpReq - CreateExternalAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExternalAgentResponse
     *
     * @param string                     $workspaceId
     * @param CreateExternalAgentRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateExternalAgentResponse
     */
    public function createExternalAgentWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateExternalAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExternalAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/external-agents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExternalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an agent that runs in an external environment, saves the configurations for the platform model, instructions, tools, and skills, and asynchronously processes the bootstrap configuration.
     *
     * @remarks
     * Registers an agent hosted in the user\\"s runtime environment, which corresponds to the "Managed Agent" in the console. After registration, you can continue to obtain the bootstrap information and complete the connection.
     * ### Configure a managed agent
     * Provide name, and select the configuration based on the model source:
     * | modelSource | Model configuration |
     * | --- | --- |
     * | PLATFORM | Uses a platform model. Provide model.modelConnectionId and model.modelName. |
     * | RUNTIME | The model is managed by the external runtime environment. Do not submit model. |
     * If modelSource is omitted but model is provided, it is processed as PLATFORM. If both are omitted, the agent cannot be created.
     * Configure instructions, MCP tools, and skills through instruction, tools, and skills. You can also reference an agent template through template.aiRegistry. The external process is deployed by the caller. This operation does not create a platform runtime instance.
     * ### Bootstrap sequence
     * **Step 1:** After creation, save the agentId and call [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent) to query the configuration processing result.
     * **Step 2:** After the latest configuration takes effect, call [GetExternalAgentBootstrapOptions](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgentBootstrapOptions) to obtain the available bootstrap networks.
     * **Step 3:** Select an available network and call [CreateExternalAgentBootstrapToken](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateExternalAgentBootstrapToken) to obtain the bootstrap token and CMS configuration. The external process then completes the bootstrap.
     * clientToken is a reserved query parameter and currently does not provide idempotency guarantees.
     *
     * @param request - CreateExternalAgentRequest
     *
     * @returns CreateExternalAgentResponse
     *
     * @param string                     $workspaceId
     * @param CreateExternalAgentRequest $request
     *
     * @return CreateExternalAgentResponse
     */
    public function createExternalAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExternalAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Issues an access token for a specified network to a managed agent with effective configurations and returns the CMS configuration.
     *
     * @remarks
     * Issues an access token and connection configurations for a registered managed agent whose configurations have taken effect to complete the onboarding in the runtime environment where the agent resides.
     * ### Prerequisites and parameters
     * The managed agent must be in the running state, and its latest configurations must have taken effect. Call [GetExternalAgentBootstrapOptions](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgentBootstrapOptions) first to query available networks.
     * The `networkType` parameter is passed as a query parameter. Valid values: `INTRANET` (internal network) and `INTERNET` (Internet). The selected endpoint must be available.
     * ### Use the response
     * Pass the `bootstrapToken` to the external runtime process to complete the onboarding. The `tokenFingerprint` is used to identify the token and cannot be used as a substitute for the token. The `cms` field contains the observability reporting configurations for the corresponding network. Configure the endpoint, workspace, and license key as provided in the response.
     *
     * @param request - CreateExternalAgentBootstrapTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExternalAgentBootstrapTokenResponse
     *
     * @param string                                   $workspaceId
     * @param string                                   $agentId
     * @param CreateExternalAgentBootstrapTokenRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateExternalAgentBootstrapTokenResponse
     */
    public function createExternalAgentBootstrapTokenWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkType) {
            @$query['networkType'] = $request->networkType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateExternalAgentBootstrapToken',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/external-agents/' . Url::percentEncode($agentId) . '/bootstrap/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExternalAgentBootstrapTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Issues an access token for a specified network to a managed agent with effective configurations and returns the CMS configuration.
     *
     * @remarks
     * Issues an access token and connection configurations for a registered managed agent whose configurations have taken effect to complete the onboarding in the runtime environment where the agent resides.
     * ### Prerequisites and parameters
     * The managed agent must be in the running state, and its latest configurations must have taken effect. Call [GetExternalAgentBootstrapOptions](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgentBootstrapOptions) first to query available networks.
     * The `networkType` parameter is passed as a query parameter. Valid values: `INTRANET` (internal network) and `INTERNET` (Internet). The selected endpoint must be available.
     * ### Use the response
     * Pass the `bootstrapToken` to the external runtime process to complete the onboarding. The `tokenFingerprint` is used to identify the token and cannot be used as a substitute for the token. The `cms` field contains the observability reporting configurations for the corresponding network. Configure the endpoint, workspace, and license key as provided in the response.
     *
     * @param request - CreateExternalAgentBootstrapTokenRequest
     *
     * @returns CreateExternalAgentBootstrapTokenResponse
     *
     * @param string                                   $workspaceId
     * @param string                                   $agentId
     * @param CreateExternalAgentBootstrapTokenRequest $request
     *
     * @return CreateExternalAgentBootstrapTokenResponse
     */
    public function createExternalAgentBootstrapToken($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExternalAgentBootstrapTokenWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Binds an external identity provider such as DingTalk, Lark, or a custom identity source to a workspace for enterprise account logon and user synchronization.
     *
     * @remarks
     * Integrates an enterprise identity source with a workspace to allow application users to log on with enterprise accounts, or to synchronize users from the enterprise address book to the workspace.
     * DingTalk, Lark, and custom identity sources (CustomSSO) are supported. A workspace can be bound to only one identity source. To change the integration method, you must unbind the current identity source first.
     * ### Select an integration method
     * | Integration method | Scenario | Task completed by this operation |
     * | --- | --- | --- |
     * | DingTalk or Lark | The enterprise already uses DingTalk or Lark and wants to integrate enterprise accounts and the address book. | Saves the enterprise application credentials and establishes a binding for subsequent logon and address book synchronization configuration. |
     * | Custom identity source (CustomSSO) | The enterprise wants to integrate its own identity authentication and user management system. | Creates a shared user pool to prepare for subsequent SAML single sign-on (SSO) and SCIM user synchronization configuration. |
     * A user pool stores application users and identity integration configurations. SAML handles enterprise account logon. SCIM provisions users from the enterprise identity system to the user pool. You can configure these two capabilities separately.
     * ### Bind DingTalk or Lark
     * Specify the enterprise application credentials in metadata. DingTalk requires appKey, appSecret, and corpId. Lark requires appId and appSecret.
     * Logon is enabled by default. A user synchronization task is executed by default upon the first binding. If you want to select departments before synchronization, set syncOnBind to false.
     * Subsequent address book change synchronization is controlled by syncEnabled, which is disabled by default. When enabled, you must also provide encryptKey and verificationToken.
     * ### Bind a custom identity source
     * When you create a CustomSSO binding, you only need to specify the identity source type:
     * ```http
     * POST /workspaces/{workspaceId}/identity-providers
     * {"identityProviderType":"CustomSSO"}
     * ```
     * This call only creates a user pool. Logon and user synchronization are disabled by default. Do not specify metadata, loginEnabled, or syncEnabled during creation.
     * After creation, call [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) to query the progress. If WAITING_CONFIGURATION is returned, the user pool is created and you can proceed with the integration configuration:
     * - **Integrate enterprise account logon**: Call [GetIdentityProviderServiceProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderServiceProvider) to obtain the SAML integration information of AgentCore and configure it in the enterprise identity system. Then, call [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider) to save the SAML configuration of the enterprise identity system and enable logon as needed.
     * - **Integrate user synchronization**: Call [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM) to obtain the SCIM receiving endpoint and credentials, and configure them in the enterprise identity system. After the external configuration is complete, call [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM) to enable AgentCore user synchronization.
     * The two processes are independent. You can select one or both based on your business requirements.
     *
     * @param tmpReq - CreateIdentityProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdentityProviderResponse
     *
     * @param string                        $workspaceId
     * @param CreateIdentityProviderRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIdentityProviderResponse
     */
    public function createIdentityProviderWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateIdentityProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIdentityProvider',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds an external identity provider such as DingTalk, Lark, or a custom identity source to a workspace for enterprise account logon and user synchronization.
     *
     * @remarks
     * Integrates an enterprise identity source with a workspace to allow application users to log on with enterprise accounts, or to synchronize users from the enterprise address book to the workspace.
     * DingTalk, Lark, and custom identity sources (CustomSSO) are supported. A workspace can be bound to only one identity source. To change the integration method, you must unbind the current identity source first.
     * ### Select an integration method
     * | Integration method | Scenario | Task completed by this operation |
     * | --- | --- | --- |
     * | DingTalk or Lark | The enterprise already uses DingTalk or Lark and wants to integrate enterprise accounts and the address book. | Saves the enterprise application credentials and establishes a binding for subsequent logon and address book synchronization configuration. |
     * | Custom identity source (CustomSSO) | The enterprise wants to integrate its own identity authentication and user management system. | Creates a shared user pool to prepare for subsequent SAML single sign-on (SSO) and SCIM user synchronization configuration. |
     * A user pool stores application users and identity integration configurations. SAML handles enterprise account logon. SCIM provisions users from the enterprise identity system to the user pool. You can configure these two capabilities separately.
     * ### Bind DingTalk or Lark
     * Specify the enterprise application credentials in metadata. DingTalk requires appKey, appSecret, and corpId. Lark requires appId and appSecret.
     * Logon is enabled by default. A user synchronization task is executed by default upon the first binding. If you want to select departments before synchronization, set syncOnBind to false.
     * Subsequent address book change synchronization is controlled by syncEnabled, which is disabled by default. When enabled, you must also provide encryptKey and verificationToken.
     * ### Bind a custom identity source
     * When you create a CustomSSO binding, you only need to specify the identity source type:
     * ```http
     * POST /workspaces/{workspaceId}/identity-providers
     * {"identityProviderType":"CustomSSO"}
     * ```
     * This call only creates a user pool. Logon and user synchronization are disabled by default. Do not specify metadata, loginEnabled, or syncEnabled during creation.
     * After creation, call [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) to query the progress. If WAITING_CONFIGURATION is returned, the user pool is created and you can proceed with the integration configuration:
     * - **Integrate enterprise account logon**: Call [GetIdentityProviderServiceProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderServiceProvider) to obtain the SAML integration information of AgentCore and configure it in the enterprise identity system. Then, call [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider) to save the SAML configuration of the enterprise identity system and enable logon as needed.
     * - **Integrate user synchronization**: Call [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM) to obtain the SCIM receiving endpoint and credentials, and configure them in the enterprise identity system. After the external configuration is complete, call [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM) to enable AgentCore user synchronization.
     * The two processes are independent. You can select one or both based on your business requirements.
     *
     * @param request - CreateIdentityProviderRequest
     *
     * @returns CreateIdentityProviderResponse
     *
     * @param string                        $workspaceId
     * @param CreateIdentityProviderRequest $request
     *
     * @return CreateIdentityProviderResponse
     */
    public function createIdentityProvider($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIdentityProviderWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Explicitly issues a SCIM credential and returns the plaintext token only in the current response. A maximum of two credentials can exist in the same pool. This operation does not automatically revoke old credentials or enable AC user synchronization.
     *
     * @remarks
     * Creates a SCIM access token to authorize an enterprise identity system to send user provisioning requests to AgentCore. For example, when you plan to replace the token used by the enterprise identity system, you can create a new token first and revoke the old token after the switchover is complete.
     * SCIM is a user provisioning protocol through which an enterprise identity system sends user information by using a receiving endpoint and an access token.
     * ### Before you begin
     * A `CustomSSO` binding is created, and the SCIM receiving endpoint is enabled by calling [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM).
     * A maximum of two SCIM credentials can be retained in the same user pool. When the limit is reached, query existing credentials by calling [ListIdentityProviderSCIMCredentials](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderSCIMCredentials) and revoke the credentials that are no longer in use.
     * ### What to do next
     * **Step 1:** Save the plaintext of the `token` in the response. The token is returned only upon creation. You can only query the credential summary later.
     * **Step 2:** Configure the receiving endpoint and the new token in the enterprise identity system.
     * **Step 3:** After you confirm that the enterprise identity system uses the new token, revoke the old token by calling [DeleteIdentityProviderSCIMCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/DeleteIdentityProviderSCIMCredential) as needed.
     * If the creation response is lost, query the credential list to verify the creation result to avoid duplicate creation and occupying the credential quota. The user synchronization switch is configured separately by calling [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM).
     *
     * @param request - CreateIdentityProviderSCIMCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdentityProviderSCIMCredentialResponse
     *
     * @param string                                      $workspaceId
     * @param CreateIdentityProviderSCIMCredentialRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateIdentityProviderSCIMCredentialResponse
     */
    public function createIdentityProviderSCIMCredentialWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateIdentityProviderSCIMCredential',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/scim-provisioning/credentials',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIdentityProviderSCIMCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Explicitly issues a SCIM credential and returns the plaintext token only in the current response. A maximum of two credentials can exist in the same pool. This operation does not automatically revoke old credentials or enable AC user synchronization.
     *
     * @remarks
     * Creates a SCIM access token to authorize an enterprise identity system to send user provisioning requests to AgentCore. For example, when you plan to replace the token used by the enterprise identity system, you can create a new token first and revoke the old token after the switchover is complete.
     * SCIM is a user provisioning protocol through which an enterprise identity system sends user information by using a receiving endpoint and an access token.
     * ### Before you begin
     * A `CustomSSO` binding is created, and the SCIM receiving endpoint is enabled by calling [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM).
     * A maximum of two SCIM credentials can be retained in the same user pool. When the limit is reached, query existing credentials by calling [ListIdentityProviderSCIMCredentials](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderSCIMCredentials) and revoke the credentials that are no longer in use.
     * ### What to do next
     * **Step 1:** Save the plaintext of the `token` in the response. The token is returned only upon creation. You can only query the credential summary later.
     * **Step 2:** Configure the receiving endpoint and the new token in the enterprise identity system.
     * **Step 3:** After you confirm that the enterprise identity system uses the new token, revoke the old token by calling [DeleteIdentityProviderSCIMCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/DeleteIdentityProviderSCIMCredential) as needed.
     * If the creation response is lost, query the credential list to verify the creation result to avoid duplicate creation and occupying the credential quota. The user synchronization switch is configured separately by calling [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM).
     *
     * @param request - CreateIdentityProviderSCIMCredentialRequest
     *
     * @returns CreateIdentityProviderSCIMCredentialResponse
     *
     * @param string                                      $workspaceId
     * @param CreateIdentityProviderSCIMCredentialRequest $request
     *
     * @return CreateIdentityProviderSCIMCredentialResponse
     */
    public function createIdentityProviderSCIMCredential($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIdentityProviderSCIMCredentialWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Initiates a manual synchronization for an identity provider.
     *
     * @remarks
     * Synchronizes users from an enterprise identity provider to a workspace based on the saved department scope. This is suitable for importing users for the first time or manually updating workspace users after adjusting the synchronization scope.
     * ### Prerequisites
     * - The identity provider is configured and its status is `READY`. If the previous synchronization failed and the status is `SYNC_FAILED`, you can also re-initiate it.
     * - The user pool is ready, and no identity provider operations are in progress.
     * - Manual synchronization uses the saved `syncScope`. You do not need to enable `syncEnabled`, which is used for subsequent address book change synchronization.
     * ### Steps for synchronizing by department
     * **Step 1:** Query departments by calling [ListIdentityProviderDepartments](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderDepartments) and select the scope to synchronize.
     * **Step 2:** Save the `syncScope` by calling [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider), and then call [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) to wait for the configuration processing to complete.
     * **Step 3:** Call this operation to initiate the synchronization and save the returned `taskId`.
     * **Step 4:** Query the progress by calling [GetIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSyncJob). After the synchronization is complete, view the workspace user list.
     * If you want to select departments before the initial synchronization, set `syncOnBind=false` when creating the identity provider, and then perform the preceding steps.
     * ### Synchronization results and re-execution
     * Synchronization is subject to the maximum number of users allowed in the workspace. Narrowing the synchronization scope does not actively delete users that have already been synchronized.
     * Each successful initiation creates a new synchronization task. If a request times out or the response is lost, check the identity provider status by calling [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) before deciding whether to resubmit the request.
     *
     * @param request - CreateIdentityProviderSyncJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdentityProviderSyncJobResponse
     *
     * @param string                               $workspaceId
     * @param string                               $identityProviderType
     * @param CreateIdentityProviderSyncJobRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateIdentityProviderSyncJobResponse
     */
    public function createIdentityProviderSyncJobWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateIdentityProviderSyncJob',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers/' . Url::percentEncode($identityProviderType) . '/sync-jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIdentityProviderSyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a manual synchronization for an identity provider.
     *
     * @remarks
     * Synchronizes users from an enterprise identity provider to a workspace based on the saved department scope. This is suitable for importing users for the first time or manually updating workspace users after adjusting the synchronization scope.
     * ### Prerequisites
     * - The identity provider is configured and its status is `READY`. If the previous synchronization failed and the status is `SYNC_FAILED`, you can also re-initiate it.
     * - The user pool is ready, and no identity provider operations are in progress.
     * - Manual synchronization uses the saved `syncScope`. You do not need to enable `syncEnabled`, which is used for subsequent address book change synchronization.
     * ### Steps for synchronizing by department
     * **Step 1:** Query departments by calling [ListIdentityProviderDepartments](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderDepartments) and select the scope to synchronize.
     * **Step 2:** Save the `syncScope` by calling [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider), and then call [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) to wait for the configuration processing to complete.
     * **Step 3:** Call this operation to initiate the synchronization and save the returned `taskId`.
     * **Step 4:** Query the progress by calling [GetIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSyncJob). After the synchronization is complete, view the workspace user list.
     * If you want to select departments before the initial synchronization, set `syncOnBind=false` when creating the identity provider, and then perform the preceding steps.
     * ### Synchronization results and re-execution
     * Synchronization is subject to the maximum number of users allowed in the workspace. Narrowing the synchronization scope does not actively delete users that have already been synchronized.
     * Each successful initiation creates a new synchronization task. If a request times out or the response is lost, check the identity provider status by calling [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) before deciding whether to resubmit the request.
     *
     * @param request - CreateIdentityProviderSyncJobRequest
     *
     * @returns CreateIdentityProviderSyncJobResponse
     *
     * @param string                               $workspaceId
     * @param string                               $identityProviderType
     * @param CreateIdentityProviderSyncJobRequest $request
     *
     * @return CreateIdentityProviderSyncJobResponse
     */
    public function createIdentityProviderSyncJob($workspaceId, $identityProviderType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIdentityProviderSyncJobWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime);
    }

    /**
     * Creates or reuses a cache for an ACR Enterprise Edition image in a workspace, and returns the cache status upon acceptance.
     *
     * @remarks
     * Pre-builds or reuses an ACR Enterprise Edition image cache for custom code or image agents for subsequent deployment and startup.
     * ### Request parameters
     * `regionId`, `workspaceId`, and `clientToken` are passed as query parameters. The region must match the entry endpoint and the workspace.
     * Specify `acrInstanceId`, `namespace`, `repository`, and `tag` in the JSON request body. For `repository`, specify only the repository name without repeating the namespace. The source repository must have pull authorization for the workspace resource role. You can obtain the authorization URL by calling [GetWorkspaceAcrRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAcrRamAuthorizeUrl).
     * ### Transfer network
     * Both `accessInternet` and `accessVpc` must be provided, and at least one must be set to `true`. The server validates this based on the workspace network conditions. These parameters control the source reading and transfer for the current operation and do not modify the runtime network of the agent.
     * ### Acceptance and readiness
     * A successful response returns the current cache snapshot. `PENDING` indicates that the cache is being prepared, `READY` indicates that the cache is ready, and `FAILED` indicates a failure. For failures, check the `error` field. Save the `imageId` and call [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache) to query subsequent results. If the image digest has not been parsed, `digest` may be empty.
     * Currently, `clientToken` is only validated to ensure it is not empty. It does not guarantee deduplication by identifier or recovery of the original acceptance result. If the result is not confirmed, query the existing cache first.
     *
     * @param tmpReq - CreateImageCacheRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageCacheResponse
     *
     * @param CreateImageCacheRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCacheWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateImageCacheShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateImageCache',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/image-caches',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or reuses a cache for an ACR Enterprise Edition image in a workspace, and returns the cache status upon acceptance.
     *
     * @remarks
     * Pre-builds or reuses an ACR Enterprise Edition image cache for custom code or image agents for subsequent deployment and startup.
     * ### Request parameters
     * `regionId`, `workspaceId`, and `clientToken` are passed as query parameters. The region must match the entry endpoint and the workspace.
     * Specify `acrInstanceId`, `namespace`, `repository`, and `tag` in the JSON request body. For `repository`, specify only the repository name without repeating the namespace. The source repository must have pull authorization for the workspace resource role. You can obtain the authorization URL by calling [GetWorkspaceAcrRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAcrRamAuthorizeUrl).
     * ### Transfer network
     * Both `accessInternet` and `accessVpc` must be provided, and at least one must be set to `true`. The server validates this based on the workspace network conditions. These parameters control the source reading and transfer for the current operation and do not modify the runtime network of the agent.
     * ### Acceptance and readiness
     * A successful response returns the current cache snapshot. `PENDING` indicates that the cache is being prepared, `READY` indicates that the cache is ready, and `FAILED` indicates a failure. For failures, check the `error` field. Save the `imageId` and call [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache) to query subsequent results. If the image digest has not been parsed, `digest` may be empty.
     * Currently, `clientToken` is only validated to ensure it is not empty. It does not guarantee deduplication by identifier or recovery of the original acceptance result. If the result is not confirmed, query the existing cache first.
     *
     * @param request - CreateImageCacheRequest
     *
     * @returns CreateImageCacheResponse
     *
     * @param CreateImageCacheRequest $request
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCache($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createImageCacheWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a managed Harness agent in a specified workspace, configures the harness, model, skills, and runtime resources, and deploys the agent asynchronously.
     *
     * @remarks
     * Creates an agent by using a platform-managed runtime framework. This corresponds to the "Managed Harness" creation method in the console, where you can configure models, instructions, and skills.
     * ### Required configurations
     * Submit `name`, `model`, and `runtime`. The `runtime` parameter must include both `compute` and `sessionPolicy`. The agent is deployed and run by the platform. You do not need to provide a code package or container image.
     * ### Harness and model
     * | Harness | Model and connector configurations |
     * | --- | --- |
     * | `qwenpaw` | If you omit `harness` during creation, this type is used by default. Set `model.modelConnectionId` to the workspace model connection ID, and set `model.modelName` to the name of the model created under this connection. |
     * | `qodercli` | The qodercli connector must be enabled in the workspace. Set `model.modelConnectionId` to the model identifier returned by [ListConnectorModels](https://api.aliyun.com/document/AgentCore/2026-08-04/ListConnectorModels). You can omit `model.modelName`. |
     * `harness` is an object, such as `{"type":"qwenpaw"}`. For qodercli, set `harness.configuration.connectorServiceAccountKey` to the account key record ID returned by [ListConnectors](https://api.aliyun.com/document/AgentCore/2026-08-04/ListConnectors), not the original service account key. You can omit this parameter if only one key record exists. You must specify this parameter if multiple records exist. `connectorServiceAccountName` is the account name. Do not specify these two binding fields for qwenpaw.
     * The harness type cannot be changed after creation.
     * ### Instructions, templates, and skills
     * `skills` uses the skill names in the workspace AI registry. If `sourceType=REFERENCE`, versions are referenced by `versionSelector`: use `LABEL` with a label name, or `VERSION` with a specific version number. If the selector is omitted, `LABEL/latest` is used. If `sourceType=STATIC`, static files bundled with the package are used, and no version selector is provided.
     * `template.aiRegistry` specifies the agent template name and an optional version. If you omit the version during creation, the published version is resolved and fixed. When a template is used, `instruction`, `promptVariables`, and `subAgents` are derived from the template, and the corresponding fields in the current request do not take effect. Explicit skills and template skills are recorded separately. You can query the target and effective versions by using `configuredSkills` and `skills`.
     * If you do not use a template, you can set instructions by using `instruction`, declare variables by using `promptVariables`, and configure up to 20 sub-agents by using `subAgents`. The name and instruction of a sub-agent cannot be empty. Each sub-agent must have a unique name. Tools currently use `tools[].type=MCP`.
     * ### Runtime configurations and mounts
     * Omitted fields in `runtime.hpa` use the following default values:
     * | Field | Default value | Valid values and description |
     * | --- | --- | --- |
     * | `enabled` | `false` | Specifies whether to enable elastic scaling. |
     * | `minSandboxCount` | `1` | The minimum number of instances. Valid values: 0 to 100. |
     * | `maxSandboxCount` | `10` | The maximum number of instances. Valid values: 0 to 100. The value cannot be less than the minimum number. |
     * | `maxConcurrentSessionsPerSandbox` | `20` | The maximum number of concurrent sessions per instance. Valid values: 1 to 20. |
     * | `sessionTtlSeconds` | `600` | The maximum idle time of a session, in seconds. Valid values: 60 to 86400. |
     * If `sessionPolicy.type=ISOLATED_HEADER_FIELD`, you must provide `headerName`. Do not specify this parameter for other policies.
     * If you provide `network`, you must specify both `accessInternet.enabled` and `accessVpc.enabled`. Actual access is restricted by the workspace network configurations.
     * The total number of `ossMounts` and `agenticFsMounts` cannot exceed 10. The mount target `mountPath` uses an absolute path in the container, such as `/data/train`. The path cannot conflict with platform-reserved directories, and mount targets cannot be duplicated or form parent-child directory overwrites.
     * File mounts are used to allow the agent to access persistent data. When you use AgenticFS, you can first complete the access point authorization by using [GetWorkspaceAgenticFsMountRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAgenticFsMountRamAuthorizeUrl).
     * The `path` for an OSS mount must be a non-empty directory prefix in a bucket. The `server` for an AgenticFS mount is the access point domain name, without a protocol, port, or path. The `path` is an existing non-empty relative directory in the access point. You cannot mount the root directory of the access point. If `readOnly` is omitted, the default value is `false`.
     * `environment.variables` configures environment variables, and `environment.credentialReferences` references workspace credentials. Environment variable names must be non-empty and unique, and values must be strings.
     * ### Query deployment results
     * A successful response indicates that the request is accepted. Save the `agentId` and use [GetManagedAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetManagedAgent) to query `latestVersionStatus`, `status`, and `sandboxPhaseCounts` to confirm the configuration processing and instance status. `clientToken` is a reserved query parameter and does not provide idempotency guarantees.
     *
     * @param tmpReq - CreateManagedAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateManagedAgentResponse
     *
     * @param string                    $workspaceId
     * @param CreateManagedAgentRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateManagedAgentResponse
     */
    public function createManagedAgentWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateManagedAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateManagedAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateManagedAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a managed Harness agent in a specified workspace, configures the harness, model, skills, and runtime resources, and deploys the agent asynchronously.
     *
     * @remarks
     * Creates an agent by using a platform-managed runtime framework. This corresponds to the "Managed Harness" creation method in the console, where you can configure models, instructions, and skills.
     * ### Required configurations
     * Submit `name`, `model`, and `runtime`. The `runtime` parameter must include both `compute` and `sessionPolicy`. The agent is deployed and run by the platform. You do not need to provide a code package or container image.
     * ### Harness and model
     * | Harness | Model and connector configurations |
     * | --- | --- |
     * | `qwenpaw` | If you omit `harness` during creation, this type is used by default. Set `model.modelConnectionId` to the workspace model connection ID, and set `model.modelName` to the name of the model created under this connection. |
     * | `qodercli` | The qodercli connector must be enabled in the workspace. Set `model.modelConnectionId` to the model identifier returned by [ListConnectorModels](https://api.aliyun.com/document/AgentCore/2026-08-04/ListConnectorModels). You can omit `model.modelName`. |
     * `harness` is an object, such as `{"type":"qwenpaw"}`. For qodercli, set `harness.configuration.connectorServiceAccountKey` to the account key record ID returned by [ListConnectors](https://api.aliyun.com/document/AgentCore/2026-08-04/ListConnectors), not the original service account key. You can omit this parameter if only one key record exists. You must specify this parameter if multiple records exist. `connectorServiceAccountName` is the account name. Do not specify these two binding fields for qwenpaw.
     * The harness type cannot be changed after creation.
     * ### Instructions, templates, and skills
     * `skills` uses the skill names in the workspace AI registry. If `sourceType=REFERENCE`, versions are referenced by `versionSelector`: use `LABEL` with a label name, or `VERSION` with a specific version number. If the selector is omitted, `LABEL/latest` is used. If `sourceType=STATIC`, static files bundled with the package are used, and no version selector is provided.
     * `template.aiRegistry` specifies the agent template name and an optional version. If you omit the version during creation, the published version is resolved and fixed. When a template is used, `instruction`, `promptVariables`, and `subAgents` are derived from the template, and the corresponding fields in the current request do not take effect. Explicit skills and template skills are recorded separately. You can query the target and effective versions by using `configuredSkills` and `skills`.
     * If you do not use a template, you can set instructions by using `instruction`, declare variables by using `promptVariables`, and configure up to 20 sub-agents by using `subAgents`. The name and instruction of a sub-agent cannot be empty. Each sub-agent must have a unique name. Tools currently use `tools[].type=MCP`.
     * ### Runtime configurations and mounts
     * Omitted fields in `runtime.hpa` use the following default values:
     * | Field | Default value | Valid values and description |
     * | --- | --- | --- |
     * | `enabled` | `false` | Specifies whether to enable elastic scaling. |
     * | `minSandboxCount` | `1` | The minimum number of instances. Valid values: 0 to 100. |
     * | `maxSandboxCount` | `10` | The maximum number of instances. Valid values: 0 to 100. The value cannot be less than the minimum number. |
     * | `maxConcurrentSessionsPerSandbox` | `20` | The maximum number of concurrent sessions per instance. Valid values: 1 to 20. |
     * | `sessionTtlSeconds` | `600` | The maximum idle time of a session, in seconds. Valid values: 60 to 86400. |
     * If `sessionPolicy.type=ISOLATED_HEADER_FIELD`, you must provide `headerName`. Do not specify this parameter for other policies.
     * If you provide `network`, you must specify both `accessInternet.enabled` and `accessVpc.enabled`. Actual access is restricted by the workspace network configurations.
     * The total number of `ossMounts` and `agenticFsMounts` cannot exceed 10. The mount target `mountPath` uses an absolute path in the container, such as `/data/train`. The path cannot conflict with platform-reserved directories, and mount targets cannot be duplicated or form parent-child directory overwrites.
     * File mounts are used to allow the agent to access persistent data. When you use AgenticFS, you can first complete the access point authorization by using [GetWorkspaceAgenticFsMountRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAgenticFsMountRamAuthorizeUrl).
     * The `path` for an OSS mount must be a non-empty directory prefix in a bucket. The `server` for an AgenticFS mount is the access point domain name, without a protocol, port, or path. The `path` is an existing non-empty relative directory in the access point. You cannot mount the root directory of the access point. If `readOnly` is omitted, the default value is `false`.
     * `environment.variables` configures environment variables, and `environment.credentialReferences` references workspace credentials. Environment variable names must be non-empty and unique, and values must be strings.
     * ### Query deployment results
     * A successful response indicates that the request is accepted. Save the `agentId` and use [GetManagedAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetManagedAgent) to query `latestVersionStatus`, `status`, and `sandboxPhaseCounts` to confirm the configuration processing and instance status. `clientToken` is a reserved query parameter and does not provide idempotency guarantees.
     *
     * @param request - CreateManagedAgentRequest
     *
     * @returns CreateManagedAgentResponse
     *
     * @param string                    $workspaceId
     * @param CreateManagedAgentRequest $request
     *
     * @return CreateManagedAgentResponse
     */
    public function createManagedAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createManagedAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates an MCP service in a specified workspace. The creation process is asynchronous. You can check whether the service is ready by using the returned status or a query operation.
     *
     * @remarks
     * Creates an MCP service in a workspace for agents to use the tools provided by the service.
     * The creation process is executed asynchronously. After you submit the request, call the [GetMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcp) operation to check whether the service is ready.
     * To deploy the service by using a local code package, first call the [GetMcpCodePackageUploadUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcpCodePackageUploadUrl) operation to obtain the upload URL and upload the file. Then, fill in the returned code package token in the deployment configuration.
     * The `clientToken` parameter does not provide idempotency guarantees. If the request result is not confirmed, query existing services before you decide whether to recreate the service.
     *
     * @param tmpReq - CreateMcpRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcpResponse
     *
     * @param string           $workspaceId
     * @param CreateMcpRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateMcpResponse
     */
    public function createMcpWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMcpShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcp',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-servers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an MCP service in a specified workspace. The creation process is asynchronous. You can check whether the service is ready by using the returned status or a query operation.
     *
     * @remarks
     * Creates an MCP service in a workspace for agents to use the tools provided by the service.
     * The creation process is executed asynchronously. After you submit the request, call the [GetMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcp) operation to check whether the service is ready.
     * To deploy the service by using a local code package, first call the [GetMcpCodePackageUploadUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcpCodePackageUploadUrl) operation to obtain the upload URL and upload the file. Then, fill in the returned code package token in the deployment configuration.
     * The `clientToken` parameter does not provide idempotency guarantees. If the request result is not confirmed, query existing services before you decide whether to recreate the service.
     *
     * @param request - CreateMcpRequest
     *
     * @returns CreateMcpResponse
     *
     * @param string           $workspaceId
     * @param CreateMcpRequest $request
     *
     * @return CreateMcpResponse
     */
    public function createMcp($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMcpWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a long-term memory store in a specified workspace.
     *
     * @remarks
     * Creates a long-term memory store (MemoryStore) in a workspace to organize the long-term memories of an agent and their source sessions.
     * After creation, you can write messages or text by using [AddMemories](https://api.aliyun.com/document/AgentCore/2026-08-04/AddMemories) and retrieve memories by semantics by using [SearchMemories](https://api.aliyun.com/document/AgentCore/2026-08-04/SearchMemories).
     *
     * @param tmpReq - CreateMemoryStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryStoreResponse
     *
     * @param string                   $workspaceId
     * @param CreateMemoryStoreRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMemoryStoreResponse
     */
    public function createMemoryStoreWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMemoryStoreShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMemoryStore',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMemoryStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a long-term memory store in a specified workspace.
     *
     * @remarks
     * Creates a long-term memory store (MemoryStore) in a workspace to organize the long-term memories of an agent and their source sessions.
     * After creation, you can write messages or text by using [AddMemories](https://api.aliyun.com/document/AgentCore/2026-08-04/AddMemories) and retrieve memories by semantics by using [SearchMemories](https://api.aliyun.com/document/AgentCore/2026-08-04/SearchMemories).
     *
     * @param request - CreateMemoryStoreRequest
     *
     * @returns CreateMemoryStoreResponse
     *
     * @param string                   $workspaceId
     * @param CreateMemoryStoreRequest $request
     *
     * @return CreateMemoryStoreResponse
     */
    public function createMemoryStore($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryStoreWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a model configuration under a model connection in a specified workspace for model creation.
     *
     * @remarks
     * Creates a model configuration under a model connection in a workspace for model creation, allowing an agent to select and invoke the model.
     *
     * @param tmpReq - CreateModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelResponse
     *
     * @param string             $workspaceId
     * @param CreateModelRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/models',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model configuration under a model connection in a specified workspace for model creation.
     *
     * @remarks
     * Creates a model configuration under a model connection in a workspace for model creation, allowing an agent to select and invoke the model.
     *
     * @param request - CreateModelRequest
     *
     * @returns CreateModelResponse
     *
     * @param string             $workspaceId
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a model connection in a specified workspace and configures the upstream model service address, invoke protocol, and access credentials for model creation.
     *
     * @remarks
     * Creates a model connection in a specified workspace and configures the upstream model service address, invoke protocol, and access credentials for model creation.
     *
     * @param tmpReq - CreateModelConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelConnectionResponse
     *
     * @param string                       $workspaceId
     * @param CreateModelConnectionRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateModelConnectionResponse
     */
    public function createModelConnectionWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateModelConnectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModelConnection',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/model-connections',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model connection in a specified workspace and configures the upstream model service address, invoke protocol, and access credentials for model creation.
     *
     * @remarks
     * Creates a model connection in a specified workspace and configures the upstream model service address, invoke protocol, and access credentials for model creation.
     *
     * @param request - CreateModelConnectionRequest
     *
     * @returns CreateModelConnectionResponse
     *
     * @param string                       $workspaceId
     * @param CreateModelConnectionRequest $request
     *
     * @return CreateModelConnectionResponse
     */
    public function createModelConnection($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelConnectionWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates permission rules.
     *
     * @remarks
     * Creates access rules in batches for specified resources in a workspace to define which users or agents can or cannot access the resources.
     *
     * @param tmpReq - CreatePermissionRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePermissionRulesResponse
     *
     * @param string                       $workspaceId
     * @param CreatePermissionRulesRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePermissionRulesResponse
     */
    public function createPermissionRulesWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePermissionRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePermissionRules',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/permission-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePermissionRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates permission rules.
     *
     * @remarks
     * Creates access rules in batches for specified resources in a workspace to define which users or agents can or cannot access the resources.
     *
     * @param request - CreatePermissionRulesRequest
     *
     * @returns CreatePermissionRulesResponse
     *
     * @param string                       $workspaceId
     * @param CreatePermissionRulesRequest $request
     *
     * @return CreatePermissionRulesResponse
     */
    public function createPermissionRules($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPermissionRulesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a skill in a specified workspace and generates an editable draft version. You can derive the draft from an existing version, or specify a target version and a commit message.
     *
     * @remarks
     * Creates a skill and its draft in a workspace for editing skill instructions and related resources. You can derive the draft from an existing version, or specify a target version and a commit message.
     *
     * @param tmpReq - CreateSkillDraftRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillDraftResponse
     *
     * @param string                  $workspaceId
     * @param CreateSkillDraftRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillDraftResponse
     */
    public function createSkillDraftWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSkillDraftShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSkillDraft',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a skill in a specified workspace and generates an editable draft version. You can derive the draft from an existing version, or specify a target version and a commit message.
     *
     * @remarks
     * Creates a skill and its draft in a workspace for editing skill instructions and related resources. You can derive the draft from an existing version, or specify a target version and a commit message.
     *
     * @param request - CreateSkillDraftRequest
     *
     * @returns CreateSkillDraftResponse
     *
     * @param string                  $workspaceId
     * @param CreateSkillDraftRequest $request
     *
     * @return CreateSkillDraftResponse
     */
    public function createSkillDraft($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSkillDraftWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a team in a specified workspace and configures user members and agent members at the same time. Exactly one user member must have the ADMIN role, and agent members can only have the LEADER or WORKER role.
     *
     * @remarks
     * Creates a team in a specified workspace and configures user members and agent members at the same time.
     *
     * @param tmpReq - CreateTeamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTeamResponse
     *
     * @param string            $workspaceId
     * @param CreateTeamRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTeamResponse
     */
    public function createTeamWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTeamShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTeam',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/teams',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a team in a specified workspace and configures user members and agent members at the same time. Exactly one user member must have the ADMIN role, and agent members can only have the LEADER or WORKER role.
     *
     * @remarks
     * Creates a team in a specified workspace and configures user members and agent members at the same time.
     *
     * @param request - CreateTeamRequest
     *
     * @returns CreateTeamResponse
     *
     * @param string            $workspaceId
     * @param CreateTeamRequest $request
     *
     * @return CreateTeamResponse
     */
    public function createTeam($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTeamWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a user in a specified workspace. The username must be unique within the workspace, can contain only lowercase letters, digits, and hyphens, and cannot be a reserved name such as manager, admin, or any name starting with worker-. If the password is not specified, the server generates an initial password and returns it in the initialPassword field of the response.
     *
     * @remarks
     * Creates a user in a workspace for member collaboration and application access, which is used when configuring team members and user logons.
     *
     * @param tmpReq - CreateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param string            $workspaceId
     * @param CreateUserRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateUserShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/users',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a user in a specified workspace. The username must be unique within the workspace, can contain only lowercase letters, digits, and hyphens, and cannot be a reserved name such as manager, admin, or any name starting with worker-. If the password is not specified, the server generates an initial password and returns it in the initialPassword field of the response.
     *
     * @remarks
     * Creates a user in a workspace for member collaboration and application access, which is used when configuring team members and user logons.
     *
     * @param request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
     * @param string            $workspaceId
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates an AgentCore workspace as a resource scope for organizing agents, models, Model Context Protocol (MCP) services, and collaboration configurations.
     *
     * @remarks
     * Creates an AgentCore workspace as a resource scope for organizing agents, models, Model Context Protocol (MCP) services, and collaboration configurations.
     * After the workspace is created, you can use the returned workspace ID to call [GetWorkspace](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspace) to query the details, and then manage agents and associated resources in the workspace. For network configuration fields and their dependencies, see the request parameters table.
     *
     * @param tmpReq - CreateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWorkspaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AgentCore workspace as a resource scope for organizing agents, models, Model Context Protocol (MCP) services, and collaboration configurations.
     *
     * @remarks
     * Creates an AgentCore workspace as a resource scope for organizing agents, models, Model Context Protocol (MCP) services, and collaboration configurations.
     * After the workspace is created, you can use the returned workspace ID to call [GetWorkspace](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspace) to query the details, and then manage agents and associated resources in the workspace. For network configuration fields and their dependencies, see the request parameters table.
     *
     * @param request - CreateWorkspaceRequest
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * Invokes a specified model through a published model connection to verify whether the model invocation pipeline is available.
     *
     * @remarks
     * Invokes a specified model through a published model connection to verify whether the model invocation pipeline is available.
     *
     * @param tmpReq - DebugModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DebugModelResponse
     *
     * @param string            $workspaceId
     * @param string            $modelId
     * @param DebugModelRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DebugModelResponse
     */
    public function debugModelWithOptions($workspaceId, $modelId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DebugModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DebugModel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/models/' . Url::percentEncode($modelId) . '/actions/debug',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DebugModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes a specified model through a published model connection to verify whether the model invocation pipeline is available.
     *
     * @remarks
     * Invokes a specified model through a published model connection to verify whether the model invocation pipeline is available.
     *
     * @param request - DebugModelRequest
     *
     * @returns DebugModelResponse
     *
     * @param string            $workspaceId
     * @param string            $modelId
     * @param DebugModelRequest $request
     *
     * @return DebugModelResponse
     */
    public function debugModel($workspaceId, $modelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->debugModelWithOptions($workspaceId, $modelId, $request, $headers, $runtime);
    }

    /**
     * Deletes an access application.
     *
     * @remarks
     * Deletes a specified access application and removes the access configuration of the application from the workspace.
     *
     * @param request - DeleteAccessApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessApplicationResponse
     *
     * @param string                         $workspaceId
     * @param string                         $applicationId
     * @param DeleteAccessApplicationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAccessApplicationResponse
     */
    public function deleteAccessApplicationWithOptions($workspaceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAccessApplication',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/access-applications/' . Url::percentEncode($applicationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access application.
     *
     * @remarks
     * Deletes a specified access application and removes the access configuration of the application from the workspace.
     *
     * @param request - DeleteAccessApplicationRequest
     *
     * @returns DeleteAccessApplicationResponse
     *
     * @param string                         $workspaceId
     * @param string                         $applicationId
     * @param DeleteAccessApplicationRequest $request
     *
     * @return DeleteAccessApplicationResponse
     */
    public function deleteAccessApplication($workspaceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAccessApplicationWithOptions($workspaceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Deletes the IM channel of a specified agent.
     *
     * @remarks
     * Deletes the IM channel of a specified agent.
     *
     * @param request - DeleteAgentIMChannelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentIMChannelResponse
     *
     * @param string                      $workspaceId
     * @param string                      $agentId
     * @param string                      $imChannelId
     * @param DeleteAgentIMChannelRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteAgentIMChannelResponse
     */
    public function deleteAgentIMChannelWithOptions($workspaceId, $agentId, $imChannelId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAgentIMChannel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/im-channels/' . Url::percentEncode($imChannelId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentIMChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the IM channel of a specified agent.
     *
     * @remarks
     * Deletes the IM channel of a specified agent.
     *
     * @param request - DeleteAgentIMChannelRequest
     *
     * @returns DeleteAgentIMChannelResponse
     *
     * @param string                      $workspaceId
     * @param string                      $agentId
     * @param string                      $imChannelId
     * @param DeleteAgentIMChannelRequest $request
     *
     * @return DeleteAgentIMChannelResponse
     */
    public function deleteAgentIMChannel($workspaceId, $agentId, $imChannelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentIMChannelWithOptions($workspaceId, $agentId, $imChannelId, $request, $headers, $runtime);
    }

    /**
     * Deletes the specified AgentSpec and all its versions and metadata. This operation is irreversible.
     *
     * @remarks
     * Deletes the specified agent template and all its versions and metadata.
     * This operation is irreversible.
     *
     * @param request - DeleteAgentSpecRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentSpecResponse
     *
     * @param string                 $workspaceId
     * @param string                 $agentSpecName
     * @param DeleteAgentSpecRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAgentSpecResponse
     */
    public function deleteAgentSpecWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAgentSpec',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the specified AgentSpec and all its versions and metadata. This operation is irreversible.
     *
     * @remarks
     * Deletes the specified agent template and all its versions and metadata.
     * This operation is irreversible.
     *
     * @param request - DeleteAgentSpecRequest
     *
     * @returns DeleteAgentSpecResponse
     *
     * @param string                 $workspaceId
     * @param string                 $agentSpecName
     * @param DeleteAgentSpecRequest $request
     *
     * @return DeleteAgentSpecResponse
     */
    public function deleteAgentSpec($workspaceId, $agentSpecName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentSpecWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime);
    }

    /**
     * Deletes the draft version of the specified AgentSpec that is currently being edited and clears the draft version pointer.
     *
     * @remarks
     * Deletes the draft version of the agent template (AgentSpec) that is currently being edited.
     *
     * @param request - DeleteAgentSpecVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentSpecVersionResponse
     *
     * @param string                        $workspaceId
     * @param string                        $agentSpecName
     * @param DeleteAgentSpecVersionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAgentSpecVersionResponse
     */
    public function deleteAgentSpecVersionWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAgentSpecVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '/draft',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentSpecVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the draft version of the specified AgentSpec that is currently being edited and clears the draft version pointer.
     *
     * @remarks
     * Deletes the draft version of the agent template (AgentSpec) that is currently being edited.
     *
     * @param request - DeleteAgentSpecVersionRequest
     *
     * @returns DeleteAgentSpecVersionResponse
     *
     * @param string                        $workspaceId
     * @param string                        $agentSpecName
     * @param DeleteAgentSpecVersionRequest $request
     *
     * @return DeleteAgentSpecVersionResponse
     */
    public function deleteAgentSpecVersion($workspaceId, $agentSpecName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentSpecVersionWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime);
    }

    /**
     * Deletes a saved fixed version of a specified managed or custom agent.
     *
     * @remarks
     * Deletes a saved fixed version of a specified managed or custom agent. You cannot delete versions that are still referenced by service endpoints or the system-maintained latest version.
     *
     * @param request - DeleteAgentVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentVersionResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentId
     * @param string                    $agentVersion
     * @param DeleteAgentVersionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAgentVersionResponse
     */
    public function deleteAgentVersionWithOptions($workspaceId, $agentId, $agentVersion, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAgentVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/versions/' . Url::percentEncode($agentVersion) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a saved fixed version of a specified managed or custom agent.
     *
     * @remarks
     * Deletes a saved fixed version of a specified managed or custom agent. You cannot delete versions that are still referenced by service endpoints or the system-maintained latest version.
     *
     * @param request - DeleteAgentVersionRequest
     *
     * @returns DeleteAgentVersionResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentId
     * @param string                    $agentVersion
     * @param DeleteAgentVersionRequest $request
     *
     * @return DeleteAgentVersionResponse
     */
    public function deleteAgentVersion($workspaceId, $agentId, $agentVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentVersionWithOptions($workspaceId, $agentId, $agentVersion, $request, $headers, $runtime);
    }

    /**
     * Deletes a credential in a specified workspace and deletes the ciphertext hosted in the credential service. After deletion, agents bound to the credential can no longer obtain the credential content.
     *
     * @remarks
     * Deletes an access credential that is no longer used in a workspace.
     * If the credential is still bound to an MCP service, dissociate it before deletion.
     *
     * @param request - DeleteCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCredentialResponse
     *
     * @param string                  $workspaceId
     * @param string                  $credentialId
     * @param DeleteCredentialRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCredentialResponse
     */
    public function deleteCredentialWithOptions($workspaceId, $credentialId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCredential',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/credentials/' . Url::percentEncode($credentialId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a credential in a specified workspace and deletes the ciphertext hosted in the credential service. After deletion, agents bound to the credential can no longer obtain the credential content.
     *
     * @remarks
     * Deletes an access credential that is no longer used in a workspace.
     * If the credential is still bound to an MCP service, dissociate it before deletion.
     *
     * @param request - DeleteCredentialRequest
     *
     * @returns DeleteCredentialResponse
     *
     * @param string                  $workspaceId
     * @param string                  $credentialId
     * @param DeleteCredentialRequest $request
     *
     * @return DeleteCredentialResponse
     */
    public function deleteCredential($workspaceId, $credentialId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCredentialWithOptions($workspaceId, $credentialId, $request, $headers, $runtime);
    }

    /**
     * Deletes a custom code or image agent in a specified workspace and asynchronously cleans up its associated platform resources.
     *
     * @remarks
     * Deletes a custom code or image agent in a specified workspace and asynchronously cleans up its associated platform resources.
     * ### Before you begin
     * The workspace must be writable. If the agent is still associated with a team, dissociate it from the team first.
     * ### Deletion result
     * A successful response indicates that the deletion request is accepted, and the response summary typically returns `status=Deleting`. If the agent is already being deleted, a subsequent request returns the current summary.
     * Call [GetCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgent) to query the deletion progress. After the deletion is complete, a detail query returns a resource not found error. Runtime resources are cleaned up in the background.
     *
     * @param request - DeleteCustomAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomAgentResponse
     *
     * @param string                   $workspaceId
     * @param string                   $agentId
     * @param DeleteCustomAgentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomAgentResponse
     */
    public function deleteCustomAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCustomAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/custom-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom code or image agent in a specified workspace and asynchronously cleans up its associated platform resources.
     *
     * @remarks
     * Deletes a custom code or image agent in a specified workspace and asynchronously cleans up its associated platform resources.
     * ### Before you begin
     * The workspace must be writable. If the agent is still associated with a team, dissociate it from the team first.
     * ### Deletion result
     * A successful response indicates that the deletion request is accepted, and the response summary typically returns `status=Deleting`. If the agent is already being deleted, a subsequent request returns the current summary.
     * Call [GetCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgent) to query the deletion progress. After the deletion is complete, a detail query returns a resource not found error. Runtime resources are cleaned up in the background.
     *
     * @param request - DeleteCustomAgentRequest
     *
     * @returns DeleteCustomAgentResponse
     *
     * @param string                   $workspaceId
     * @param string                   $agentId
     * @param DeleteCustomAgentRequest $request
     *
     * @return DeleteCustomAgentResponse
     */
    public function deleteCustomAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCustomAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Deletes a managed agent in a specified workspace and asynchronously cleans up its associated platform resources.
     *
     * @remarks
     * Deletes a managed agent in a specified workspace and asynchronously cleans up its associated platform resources.
     * ### Prerequisites
     * The workspace must be writable. If the agent is still associated with a team, dissociate it from the team first.
     * ### Deletion results
     * A successful response indicates that the deletion request has been accepted, and the response summary is typically `status=Deleting`. If the agent is already being deleted, a subsequent request returns the current summary.
     * You can query the deletion progress by calling [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent). After the deletion is complete, a details query returns a resource not found error. The processes and runtime environment of the managed agent are managed by the caller.
     *
     * @param request - DeleteExternalAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExternalAgentResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentId
     * @param DeleteExternalAgentRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteExternalAgentResponse
     */
    public function deleteExternalAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteExternalAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/external-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteExternalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a managed agent in a specified workspace and asynchronously cleans up its associated platform resources.
     *
     * @remarks
     * Deletes a managed agent in a specified workspace and asynchronously cleans up its associated platform resources.
     * ### Prerequisites
     * The workspace must be writable. If the agent is still associated with a team, dissociate it from the team first.
     * ### Deletion results
     * A successful response indicates that the deletion request has been accepted, and the response summary is typically `status=Deleting`. If the agent is already being deleted, a subsequent request returns the current summary.
     * You can query the deletion progress by calling [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent). After the deletion is complete, a details query returns a resource not found error. The processes and runtime environment of the managed agent are managed by the caller.
     *
     * @param request - DeleteExternalAgentRequest
     *
     * @returns DeleteExternalAgentResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentId
     * @param DeleteExternalAgentRequest $request
     *
     * @return DeleteExternalAgentResponse
     */
    public function deleteExternalAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExternalAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Disconnects the identity source integration of a workspace. For CustomSSO, this operation clears the shared user pool and related SAML and SCIM resources. To disable only logon or synchronization, use the corresponding API operations.
     *
     * @remarks
     * Disconnects the association between a workspace and an enterprise identity source. This operation is used to terminate identity federation or clear the current attach configuration before you attach another identity source.
     * Disconnecting clears the AgentCore users and associated configurations imported from the identity source. For `CustomSSO`, it also clears the shared user pool and SAML and SCIM access resources. Applications created by users in the enterprise identity system must still be managed on the enterprise side.
     * ### Preparations before disconnecting
     * Remove the reference relationships between the related users and collaboration teams first. If teams still reference these users, the API operation rejects the disconnection request.
     * If you only want to temporarily disable a specific capability, you can retain the identity source binding. Use [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider) to disable logon, or use [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM) to disable SCIM synchronization.
     * ### Verify the disconnection result
     * The disconnection is executed in the background. After the request is accepted, `DISCONNECTING` is returned. You can query the progress by calling [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider):
     * - If the query returns `IdentityProviderNotFound`, the binding has been removed and the disconnection is complete.
     * - If `DISCONNECT_FAILED` is returned, the cleanup failed. Some resources may have already been cleared. You can initiate the disconnection again.
     * You can bind a new identity source to the workspace only after the disconnection is complete.
     *
     * @param request - DeleteIdentityProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIdentityProviderResponse
     *
     * @param string                        $workspaceId
     * @param string                        $identityProviderType
     * @param DeleteIdentityProviderRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteIdentityProviderResponse
     */
    public function deleteIdentityProviderWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIdentityProvider',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers/' . Url::percentEncode($identityProviderType) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disconnects the identity source integration of a workspace. For CustomSSO, this operation clears the shared user pool and related SAML and SCIM resources. To disable only logon or synchronization, use the corresponding API operations.
     *
     * @remarks
     * Disconnects the association between a workspace and an enterprise identity source. This operation is used to terminate identity federation or clear the current attach configuration before you attach another identity source.
     * Disconnecting clears the AgentCore users and associated configurations imported from the identity source. For `CustomSSO`, it also clears the shared user pool and SAML and SCIM access resources. Applications created by users in the enterprise identity system must still be managed on the enterprise side.
     * ### Preparations before disconnecting
     * Remove the reference relationships between the related users and collaboration teams first. If teams still reference these users, the API operation rejects the disconnection request.
     * If you only want to temporarily disable a specific capability, you can retain the identity source binding. Use [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider) to disable logon, or use [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM) to disable SCIM synchronization.
     * ### Verify the disconnection result
     * The disconnection is executed in the background. After the request is accepted, `DISCONNECTING` is returned. You can query the progress by calling [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider):
     * - If the query returns `IdentityProviderNotFound`, the binding has been removed and the disconnection is complete.
     * - If `DISCONNECT_FAILED` is returned, the cleanup failed. Some resources may have already been cleared. You can initiate the disconnection again.
     * You can bind a new identity source to the workspace only after the disconnection is complete.
     *
     * @param request - DeleteIdentityProviderRequest
     *
     * @returns DeleteIdentityProviderResponse
     *
     * @param string                        $workspaceId
     * @param string                        $identityProviderType
     * @param DeleteIdentityProviderRequest $request
     *
     * @return DeleteIdentityProviderResponse
     */
    public function deleteIdentityProvider($workspaceId, $identityProviderType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIdentityProviderWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime);
    }

    /**
     * Revokes a specified SCIM credential. This operation does not trigger automatic creation of a new token, modify the AC synchronization switch, or disable SAML logon.
     *
     * @remarks
     * Revokes a SCIM access token to deactivate an old token or clean up credentials that are no longer in use or have expired.
     * SCIM tokens are used to authorize enterprise identity systems to send user provisioning requests to user pools. After revocation, the enterprise identity system can no longer use the token to access the SCIM endpoint.
     * ### Usage
     * **Step 1:** Query the credential list by calling [ListIdentityProviderSCIMCredentials](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderSCIMCredentials) to obtain the target credentialId.
     * **Step 2:** If the enterprise identity system is still using the token, configure another valid token for it first.
     * **Step 3:** Call this operation to revoke the target credential, and then refresh the list to confirm the result.
     * This operation only revokes the specified token. Synchronized users, other tokens, logon configurations, and the user synchronization switch are retained. To disable user synchronization, use [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM).
     *
     * @param request - DeleteIdentityProviderSCIMCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIdentityProviderSCIMCredentialResponse
     *
     * @param string                                      $workspaceId
     * @param string                                      $credentialId
     * @param DeleteIdentityProviderSCIMCredentialRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return DeleteIdentityProviderSCIMCredentialResponse
     */
    public function deleteIdentityProviderSCIMCredentialWithOptions($workspaceId, $credentialId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteIdentityProviderSCIMCredential',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/scim-provisioning/credentials/' . Url::percentEncode($credentialId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIdentityProviderSCIMCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes a specified SCIM credential. This operation does not trigger automatic creation of a new token, modify the AC synchronization switch, or disable SAML logon.
     *
     * @remarks
     * Revokes a SCIM access token to deactivate an old token or clean up credentials that are no longer in use or have expired.
     * SCIM tokens are used to authorize enterprise identity systems to send user provisioning requests to user pools. After revocation, the enterprise identity system can no longer use the token to access the SCIM endpoint.
     * ### Usage
     * **Step 1:** Query the credential list by calling [ListIdentityProviderSCIMCredentials](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderSCIMCredentials) to obtain the target credentialId.
     * **Step 2:** If the enterprise identity system is still using the token, configure another valid token for it first.
     * **Step 3:** Call this operation to revoke the target credential, and then refresh the list to confirm the result.
     * This operation only revokes the specified token. Synchronized users, other tokens, logon configurations, and the user synchronization switch are retained. To disable user synchronization, use [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM).
     *
     * @param request - DeleteIdentityProviderSCIMCredentialRequest
     *
     * @returns DeleteIdentityProviderSCIMCredentialResponse
     *
     * @param string                                      $workspaceId
     * @param string                                      $credentialId
     * @param DeleteIdentityProviderSCIMCredentialRequest $request
     *
     * @return DeleteIdentityProviderSCIMCredentialResponse
     */
    public function deleteIdentityProviderSCIMCredential($workspaceId, $credentialId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIdentityProviderSCIMCredentialWithOptions($workspaceId, $credentialId, $request, $headers, $runtime);
    }

    /**
     * Deletes the image cache association in a workspace and checks for agent references and instance usage before submission.
     *
     * @remarks
     * Deletes the image cache association in a workspace and checks for agent references and instance usage before submission.
     * ### Deletion conditions
     * The deletion request is rejected if the cache is still referenced by an agent with the cache switch enabled, or if instances are still using it or resources are being released. You can first query `agentCount`, `canDelete`, and `deleteBlockReason` by calling [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache).
     * ### Query results
     * The `imageId` in the response corresponds to this request. The current implementation of `deletionPending` returns `false`. To confirm whether the cache is still visible, call [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache) or [ListImageCaches](https://api.aliyun.com/document/AgentCore/2026-08-04/ListImageCaches).
     * This operation deletes the cache association in the specified workspace, but does not delete the source ACR repository or the source image.
     *
     * @param request - DeleteImageCacheRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageCacheResponse
     *
     * @param string                  $imageId
     * @param DeleteImageCacheRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCacheWithOptions($imageId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteImageCache',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/image-caches/' . Url::percentEncode($imageId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the image cache association in a workspace and checks for agent references and instance usage before submission.
     *
     * @remarks
     * Deletes the image cache association in a workspace and checks for agent references and instance usage before submission.
     * ### Deletion conditions
     * The deletion request is rejected if the cache is still referenced by an agent with the cache switch enabled, or if instances are still using it or resources are being released. You can first query `agentCount`, `canDelete`, and `deleteBlockReason` by calling [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache).
     * ### Query results
     * The `imageId` in the response corresponds to this request. The current implementation of `deletionPending` returns `false`. To confirm whether the cache is still visible, call [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache) or [ListImageCaches](https://api.aliyun.com/document/AgentCore/2026-08-04/ListImageCaches).
     * This operation deletes the cache association in the specified workspace, but does not delete the source ACR repository or the source image.
     *
     * @param request - DeleteImageCacheRequest
     *
     * @returns DeleteImageCacheResponse
     *
     * @param string                  $imageId
     * @param DeleteImageCacheRequest $request
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCache($imageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteImageCacheWithOptions($imageId, $request, $headers, $runtime);
    }

    /**
     * Deletes a managed Harness agent in a specified workspace and asynchronously cleans up its platform-associated resources.
     *
     * @remarks
     * Deletes a managed Harness agent in a specified workspace and asynchronously cleans up its platform-associated resources.
     * ### Prerequisites
     * The workspace must be writable. If the agent is still associated with a team, dissociate it from the team first.
     * ### Deletion results
     * A successful response indicates that the deletion request has been accepted, and the response summary is typically `status=Deleting`. If the agent is already being deleted, a subsequent request returns the current summary.
     * You can call [GetManagedAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetManagedAgent) to query the deletion progress. After the deletion is complete, a details query returns a resource not found error. Runtime resources are cleaned up in the background.
     *
     * @param request - DeleteManagedAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteManagedAgentResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentId
     * @param DeleteManagedAgentRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteManagedAgentResponse
     */
    public function deleteManagedAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteManagedAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteManagedAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a managed Harness agent in a specified workspace and asynchronously cleans up its platform-associated resources.
     *
     * @remarks
     * Deletes a managed Harness agent in a specified workspace and asynchronously cleans up its platform-associated resources.
     * ### Prerequisites
     * The workspace must be writable. If the agent is still associated with a team, dissociate it from the team first.
     * ### Deletion results
     * A successful response indicates that the deletion request has been accepted, and the response summary is typically `status=Deleting`. If the agent is already being deleted, a subsequent request returns the current summary.
     * You can call [GetManagedAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetManagedAgent) to query the deletion progress. After the deletion is complete, a details query returns a resource not found error. Runtime resources are cleaned up in the background.
     *
     * @param request - DeleteManagedAgentRequest
     *
     * @returns DeleteManagedAgentResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentId
     * @param DeleteManagedAgentRequest $request
     *
     * @return DeleteManagedAgentResponse
     */
    public function deleteManagedAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteManagedAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified MCP service. The deletion is an asynchronous process. After the deletion is complete, the MCP service is no longer returned.
     *
     * @remarks
     * Deletes a specified MCP service.
     * The deletion is an asynchronous process. After the deletion is complete, the MCP service is no longer returned.
     *
     * @param request - DeleteMcpRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcpResponse
     *
     * @param string           $mcpServerId
     * @param string           $workspaceId
     * @param DeleteMcpRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteMcpResponse
     */
    public function deleteMcpWithOptions($mcpServerId, $workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMcp',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified MCP service. The deletion is an asynchronous process. After the deletion is complete, the MCP service is no longer returned.
     *
     * @remarks
     * Deletes a specified MCP service.
     * The deletion is an asynchronous process. After the deletion is complete, the MCP service is no longer returned.
     *
     * @param request - DeleteMcpRequest
     *
     * @returns DeleteMcpResponse
     *
     * @param string           $mcpServerId
     * @param string           $workspaceId
     * @param DeleteMcpRequest $request
     *
     * @return DeleteMcpResponse
     */
    public function deleteMcp($mcpServerId, $workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMcpWithOptions($mcpServerId, $workspaceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a long-term memory by memory ID.
     *
     * @remarks
     * Deletes a long-term memory by memory ID.
     *
     * @param request - DeleteMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryStoreName
     * @param string              $memoryId
     * @param DeleteMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemoryWithOptions($workspaceId, $memoryStoreName, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemory',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a long-term memory by memory ID.
     *
     * @remarks
     * Deletes a long-term memory by memory ID.
     *
     * @param request - DeleteMemoryRequest
     *
     * @returns DeleteMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryStoreName
     * @param string              $memoryId
     * @param DeleteMemoryRequest $request
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemory($workspaceId, $memoryStoreName, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryWithOptions($workspaceId, $memoryStoreName, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Asynchronously deletes a MemoryStore and all its long-term memories.
     *
     * @remarks
     * Asynchronously deletes a specified long-term memory store (MemoryStore) and all its long-term memories.
     *
     * @param request - DeleteMemoryStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryStoreResponse
     *
     * @param string                   $workspaceId
     * @param string                   $memoryStoreName
     * @param DeleteMemoryStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMemoryStoreResponse
     */
    public function deleteMemoryStoreWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemoryStore',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously deletes a MemoryStore and all its long-term memories.
     *
     * @remarks
     * Asynchronously deletes a specified long-term memory store (MemoryStore) and all its long-term memories.
     *
     * @param request - DeleteMemoryStoreRequest
     *
     * @returns DeleteMemoryStoreResponse
     *
     * @param string                   $workspaceId
     * @param string                   $memoryStoreName
     * @param DeleteMemoryStoreRequest $request
     *
     * @return DeleteMemoryStoreResponse
     */
    public function deleteMemoryStore($workspaceId, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryStoreWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Deletes a model in a specified workspace. Models that are in use cannot be deleted.
     *
     * @remarks
     * Deletes a model in a specified workspace. Models that are in use cannot be deleted.
     *
     * @param request - DeleteModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelResponse
     *
     * @param string             $workspaceId
     * @param string             $modelId
     * @param DeleteModelRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($workspaceId, $modelId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/models/' . Url::percentEncode($modelId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model in a specified workspace. Models that are in use cannot be deleted.
     *
     * @remarks
     * Deletes a model in a specified workspace. Models that are in use cannot be deleted.
     *
     * @param request - DeleteModelRequest
     *
     * @returns DeleteModelResponse
     *
     * @param string             $workspaceId
     * @param string             $modelId
     * @param DeleteModelRequest $request
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($workspaceId, $modelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelWithOptions($workspaceId, $modelId, $request, $headers, $runtime);
    }

    /**
     * Submits an asynchronous deletion task for a specified model connection. The connection cannot be deleted if it has associated models or runtime references.
     *
     * @remarks
     * Submits an asynchronous deletion task for a specified model connection. The connection cannot be deleted if it has associated models or runtime references.
     *
     * @param request - DeleteModelConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelConnectionResponse
     *
     * @param string                       $workspaceId
     * @param string                       $connectionId
     * @param DeleteModelConnectionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteModelConnectionResponse
     */
    public function deleteModelConnectionWithOptions($workspaceId, $connectionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelConnection',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/model-connections/' . Url::percentEncode($connectionId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModelConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an asynchronous deletion task for a specified model connection. The connection cannot be deleted if it has associated models or runtime references.
     *
     * @remarks
     * Submits an asynchronous deletion task for a specified model connection. The connection cannot be deleted if it has associated models or runtime references.
     *
     * @param request - DeleteModelConnectionRequest
     *
     * @returns DeleteModelConnectionResponse
     *
     * @param string                       $workspaceId
     * @param string                       $connectionId
     * @param DeleteModelConnectionRequest $request
     *
     * @return DeleteModelConnectionResponse
     */
    public function deleteModelConnection($workspaceId, $connectionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelConnectionWithOptions($workspaceId, $connectionId, $request, $headers, $runtime);
    }

    /**
     * Deletes a permission rule.
     *
     * @remarks
     * Deletes an access rule in a workspace and revokes the configuration of the rule. Repeated deletions still return a success response.
     *
     * @param request - DeletePermissionRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePermissionRuleResponse
     *
     * @param string                      $workspaceId
     * @param string                      $permissionRuleId
     * @param DeletePermissionRuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePermissionRuleResponse
     */
    public function deletePermissionRuleWithOptions($workspaceId, $permissionRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePermissionRule',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/permission-rules/' . Url::percentEncode($permissionRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePermissionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a permission rule.
     *
     * @remarks
     * Deletes an access rule in a workspace and revokes the configuration of the rule. Repeated deletions still return a success response.
     *
     * @param request - DeletePermissionRuleRequest
     *
     * @returns DeletePermissionRuleResponse
     *
     * @param string                      $workspaceId
     * @param string                      $permissionRuleId
     * @param DeletePermissionRuleRequest $request
     *
     * @return DeletePermissionRuleResponse
     */
    public function deletePermissionRule($workspaceId, $permissionRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePermissionRuleWithOptions($workspaceId, $permissionRuleId, $request, $headers, $runtime);
    }

    /**
     * Deletes a skill and its related version data from the specified workspace. The deletion operation is irreversible.
     *
     * @remarks
     * Deletes a skill and its related version data from the specified workspace.
     * The deletion operation is irreversible.
     *
     * @param request - DeleteSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillResponse
     *
     * @param string             $workspaceId
     * @param string             $skillName
     * @param DeleteSkillRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkillWithOptions($workspaceId, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSkill',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a skill and its related version data from the specified workspace. The deletion operation is irreversible.
     *
     * @remarks
     * Deletes a skill and its related version data from the specified workspace.
     * The deletion operation is irreversible.
     *
     * @param request - DeleteSkillRequest
     *
     * @returns DeleteSkillResponse
     *
     * @param string             $workspaceId
     * @param string             $skillName
     * @param DeleteSkillRequest $request
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkill($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSkillWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Deletes the draft version of the specified skill that is currently being edited.
     *
     * @remarks
     * Deletes the draft of a skill that is being edited in normal version mode.
     * In `HEAD` mode, a persistent draft is used, and the delete draft operation is not supported. To modify the content, continue editing the draft. To remove the entire skill, use [DeleteSkill](https://api.aliyun.com/document/AgentCore/2026-08-04/DeleteSkill).
     *
     * @param request - DeleteSkillDraftRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillDraftResponse
     *
     * @param string                  $workspaceId
     * @param string                  $skillName
     * @param DeleteSkillDraftRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSkillDraftResponse
     */
    public function deleteSkillDraftWithOptions($workspaceId, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSkillDraft',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/draft',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSkillDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the draft version of the specified skill that is currently being edited.
     *
     * @remarks
     * Deletes the draft of a skill that is being edited in normal version mode.
     * In `HEAD` mode, a persistent draft is used, and the delete draft operation is not supported. To modify the content, continue editing the draft. To remove the entire skill, use [DeleteSkill](https://api.aliyun.com/document/AgentCore/2026-08-04/DeleteSkill).
     *
     * @param request - DeleteSkillDraftRequest
     *
     * @returns DeleteSkillDraftResponse
     *
     * @param string                  $workspaceId
     * @param string                  $skillName
     * @param DeleteSkillDraftRequest $request
     *
     * @return DeleteSkillDraftResponse
     */
    public function deleteSkillDraft($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSkillDraftWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Deletes a team in a specified workspace. Deleting a team does not delete the users and agents within it, but only removes the membership associations.
     *
     * @remarks
     * Deletes a team in a specified workspace.
     *
     * @param request - DeleteTeamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTeamResponse
     *
     * @param string            $workspaceId
     * @param string            $teamId
     * @param DeleteTeamRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteTeamResponse
     */
    public function deleteTeamWithOptions($workspaceId, $teamId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTeam',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/teams/' . Url::percentEncode($teamId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a team in a specified workspace. Deleting a team does not delete the users and agents within it, but only removes the membership associations.
     *
     * @remarks
     * Deletes a team in a specified workspace.
     *
     * @param request - DeleteTeamRequest
     *
     * @returns DeleteTeamResponse
     *
     * @param string            $workspaceId
     * @param string            $teamId
     * @param DeleteTeamRequest $request
     *
     * @return DeleteTeamResponse
     */
    public function deleteTeam($workspaceId, $teamId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTeamWithOptions($workspaceId, $teamId, $request, $headers, $runtime);
    }

    /**
     * Deletes a user from a specified workspace. A user cannot be deleted if they are still a member of any team. Remove the user from the team first.
     *
     * @remarks
     * Deletes a user from a specified workspace.
     *
     * @param request - DeleteUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserResponse
     *
     * @param string            $workspaceId
     * @param string            $agentCoreUserId
     * @param DeleteUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($workspaceId, $agentCoreUserId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/users/' . Url::percentEncode($agentCoreUserId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a user from a specified workspace. A user cannot be deleted if they are still a member of any team. Remove the user from the team first.
     *
     * @remarks
     * Deletes a user from a specified workspace.
     *
     * @param request - DeleteUserRequest
     *
     * @returns DeleteUserResponse
     *
     * @param string            $workspaceId
     * @param string            $agentCoreUserId
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($workspaceId, $agentCoreUserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUserWithOptions($workspaceId, $agentCoreUserId, $request, $headers, $runtime);
    }

    /**
     * Deletes a workspace that is no longer in use and ends the management lifecycle of the workspace.
     *
     * @remarks
     * Deletes a workspace that is no longer in use and ends the management lifecycle of the workspace. The API operation processes repeated deletion requests for the same workspace in the `Deleting` or `Deleted` state based on idempotence.
     *
     * @param request - DeleteWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param DeleteWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspace',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workspace that is no longer in use and ends the management lifecycle of the workspace.
     *
     * @remarks
     * Deletes a workspace that is no longer in use and ends the management lifecycle of the workspace. The API operation processes repeated deletion requests for the same workspace in the `Deleting` or `Deleted` state based on idempotence.
     *
     * @param request - DeleteWorkspaceRequest
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param DeleteWorkspaceRequest $request
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Disables the QoderCLI connector in a specified workspace. The connector can be disabled only when no agent is using it. After being disabled, the connector and its service account key configuration are removed.
     *
     * @remarks
     * Disables the QoderCLI connector in a workspace.
     *
     * @param request - DisableConnectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableConnectorResponse
     *
     * @param string                  $workspaceId
     * @param string                  $connectorName
     * @param DisableConnectorRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DisableConnectorResponse
     */
    public function disableConnectorWithOptions($workspaceId, $connectorName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DisableConnector',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/connectors/' . Url::percentEncode($connectorName) . '/actions/disable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the QoderCLI connector in a specified workspace. The connector can be disabled only when no agent is using it. After being disabled, the connector and its service account key configuration are removed.
     *
     * @remarks
     * Disables the QoderCLI connector in a workspace.
     *
     * @param request - DisableConnectorRequest
     *
     * @returns DisableConnectorResponse
     *
     * @param string                  $workspaceId
     * @param string                  $connectorName
     * @param DisableConnectorRequest $request
     *
     * @return DisableConnectorResponse
     */
    public function disableConnector($workspaceId, $connectorName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableConnectorWithOptions($workspaceId, $connectorName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the OSS presigned download URL for a specified AgentSpec to download the AgentSpec ZIP package.
     *
     * @remarks
     * Retrieves the OSS presigned download URL for a specified agent template to download the agent template ZIP package.
     *
     * @param request - DownloadAgentSpecViaOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadAgentSpecViaOssResponse
     *
     * @param string                         $workspaceId
     * @param string                         $agentSpecName
     * @param DownloadAgentSpecViaOssRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DownloadAgentSpecViaOssResponse
     */
    public function downloadAgentSpecViaOssWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpecVersion) {
            @$query['agentSpecVersion'] = $request->agentSpecVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadAgentSpecViaOss',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '/actions/download-via-oss',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DownloadAgentSpecViaOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the OSS presigned download URL for a specified AgentSpec to download the AgentSpec ZIP package.
     *
     * @remarks
     * Retrieves the OSS presigned download URL for a specified agent template to download the agent template ZIP package.
     *
     * @param request - DownloadAgentSpecViaOssRequest
     *
     * @returns DownloadAgentSpecViaOssResponse
     *
     * @param string                         $workspaceId
     * @param string                         $agentSpecName
     * @param DownloadAgentSpecViaOssRequest $request
     *
     * @return DownloadAgentSpecViaOssResponse
     */
    public function downloadAgentSpecViaOss($workspaceId, $agentSpecName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downloadAgentSpecViaOssWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the OSS pre-signed download URL for a specified skill version to download the corresponding skill ZIP package.
     *
     * @remarks
     * Retrieves the OSS pre-signed download URL for a specified skill version to download the corresponding skill ZIP package.
     *
     * @param request - DownloadSkillVersionViaOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadSkillVersionViaOssResponse
     *
     * @param string                            $workspaceId
     * @param string                            $skillName
     * @param string                            $skillVersion
     * @param DownloadSkillVersionViaOssRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DownloadSkillVersionViaOssResponse
     */
    public function downloadSkillVersionViaOssWithOptions($workspaceId, $skillName, $skillVersion, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DownloadSkillVersionViaOss',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/versions/' . Url::percentEncode($skillVersion) . '/actions/download-via-oss',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DownloadSkillVersionViaOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the OSS pre-signed download URL for a specified skill version to download the corresponding skill ZIP package.
     *
     * @remarks
     * Retrieves the OSS pre-signed download URL for a specified skill version to download the corresponding skill ZIP package.
     *
     * @param request - DownloadSkillVersionViaOssRequest
     *
     * @returns DownloadSkillVersionViaOssResponse
     *
     * @param string                            $workspaceId
     * @param string                            $skillName
     * @param string                            $skillVersion
     * @param DownloadSkillVersionViaOssRequest $request
     *
     * @return DownloadSkillVersionViaOssResponse
     */
    public function downloadSkillVersionViaOss($workspaceId, $skillName, $skillVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downloadSkillVersionViaOssWithOptions($workspaceId, $skillName, $skillVersion, $request, $headers, $runtime);
    }

    /**
     * Enables the QoderCLI connector in a specified workspace. The request must provide a site, an API key, and at least one service account key. The service verifies all account keys before saving the configuration.
     *
     * @remarks
     * Enables the QoderCLI connector in a workspace. Before enabling, verify the credentials by using [VerifyConnector](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyConnector).
     *
     * @param tmpReq - EnableConnectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableConnectorResponse
     *
     * @param string                 $workspaceId
     * @param string                 $connectorName
     * @param EnableConnectorRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return EnableConnectorResponse
     */
    public function enableConnectorWithOptions($workspaceId, $connectorName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new EnableConnectorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableConnector',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/connectors/' . Url::percentEncode($connectorName) . '/actions/enable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the QoderCLI connector in a specified workspace. The request must provide a site, an API key, and at least one service account key. The service verifies all account keys before saving the configuration.
     *
     * @remarks
     * Enables the QoderCLI connector in a workspace. Before enabling, verify the credentials by using [VerifyConnector](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyConnector).
     *
     * @param request - EnableConnectorRequest
     *
     * @returns EnableConnectorResponse
     *
     * @param string                 $workspaceId
     * @param string                 $connectorName
     * @param EnableConnectorRequest $request
     *
     * @return EnableConnectorResponse
     */
    public function enableConnector($workspaceId, $connectorName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableConnectorWithOptions($workspaceId, $connectorName, $request, $headers, $runtime);
    }

    /**
     * Retrieves a custom image preparation task by using a submitted clientToken and queries the current progress.
     *
     * @remarks
     * Uses the `clientToken` of a create or update request to retrieve a custom image preparation task, which allows you to continue querying the processing progress after a request response is lost.
     * ### Search scope
     * Pass the `clientToken` used when submitting [CreateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateCustomAgent) or [UpdateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCustomAgent) as a query parameter, and use the original workspace.
     * The preparation task can be retrieved only if the submission result includes `imagePreparation`. If no corresponding preparation task exists, a resource not found error is returned.
     * ### Query phases
     * | `phase` | Description |
     * | --- | --- |
     * | `QUEUED`, `CHECKING` | Queued or checking the source. |
     * | `COPYING` | Copying the image. |
     * | `STARTING` | Starting the target version. |
     * | `HEALTH_CHECKING` | Waiting for the target version instance to be ready. |
     * | `SUCCEEDED` | The target version deployment succeeded. |
     * | `FAILED` | The preparation or deployment failed. Check `failedPhase` and `error`. |
     * | `CANCELLED` | The target version has been replaced by a subsequent configuration or canceled. |
     * After the task is found, you can use the `preparationId` to call [GetCustomAgentImagePreparation](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgentImagePreparation) to continuously query the progress.
     *
     * @param request - FindCustomAgentImagePreparationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindCustomAgentImagePreparationResponse
     *
     * @param string                                 $workspaceId
     * @param FindCustomAgentImagePreparationRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return FindCustomAgentImagePreparationResponse
     */
    public function findCustomAgentImagePreparationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindCustomAgentImagePreparation',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/custom-image-preparations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FindCustomAgentImagePreparationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a custom image preparation task by using a submitted clientToken and queries the current progress.
     *
     * @remarks
     * Uses the `clientToken` of a create or update request to retrieve a custom image preparation task, which allows you to continue querying the processing progress after a request response is lost.
     * ### Search scope
     * Pass the `clientToken` used when submitting [CreateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateCustomAgent) or [UpdateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCustomAgent) as a query parameter, and use the original workspace.
     * The preparation task can be retrieved only if the submission result includes `imagePreparation`. If no corresponding preparation task exists, a resource not found error is returned.
     * ### Query phases
     * | `phase` | Description |
     * | --- | --- |
     * | `QUEUED`, `CHECKING` | Queued or checking the source. |
     * | `COPYING` | Copying the image. |
     * | `STARTING` | Starting the target version. |
     * | `HEALTH_CHECKING` | Waiting for the target version instance to be ready. |
     * | `SUCCEEDED` | The target version deployment succeeded. |
     * | `FAILED` | The preparation or deployment failed. Check `failedPhase` and `error`. |
     * | `CANCELLED` | The target version has been replaced by a subsequent configuration or canceled. |
     * After the task is found, you can use the `preparationId` to call [GetCustomAgentImagePreparation](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgentImagePreparation) to continuously query the progress.
     *
     * @param request - FindCustomAgentImagePreparationRequest
     *
     * @returns FindCustomAgentImagePreparationResponse
     *
     * @param string                                 $workspaceId
     * @param FindCustomAgentImagePreparationRequest $request
     *
     * @return FindCustomAgentImagePreparationResponse
     */
    public function findCustomAgentImagePreparation($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->findCustomAgentImagePreparationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Forcibly publishes a specified skill version by bypassing the standard review process.
     *
     * @remarks
     * Forcibly publishes a specified skill version by bypassing the standard review process.
     *
     * @param tmpReq - ForcePublishSkillVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ForcePublishSkillVersionResponse
     *
     * @param string                          $workspaceId
     * @param string                          $skillName
     * @param string                          $skillVersion
     * @param ForcePublishSkillVersionRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ForcePublishSkillVersionResponse
     */
    public function forcePublishSkillVersionWithOptions($workspaceId, $skillName, $skillVersion, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ForcePublishSkillVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ForcePublishSkillVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/versions/' . Url::percentEncode($skillVersion) . '/actions/force-publish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ForcePublishSkillVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Forcibly publishes a specified skill version by bypassing the standard review process.
     *
     * @remarks
     * Forcibly publishes a specified skill version by bypassing the standard review process.
     *
     * @param request - ForcePublishSkillVersionRequest
     *
     * @returns ForcePublishSkillVersionResponse
     *
     * @param string                          $workspaceId
     * @param string                          $skillName
     * @param string                          $skillVersion
     * @param ForcePublishSkillVersionRequest $request
     *
     * @return ForcePublishSkillVersionResponse
     */
    public function forcePublishSkillVersion($workspaceId, $skillName, $skillVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->forcePublishSkillVersionWithOptions($workspaceId, $skillName, $skillVersion, $request, $headers, $runtime);
    }

    /**
     * Queries the access application.
     *
     * @remarks
     * Queries the configuration of an access application in a workspace to view the application access information and user source settings.
     * The query result does not include the plaintext of the application secret. The secret is returned only when the application is created.
     *
     * @param request - GetAccessApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessApplicationResponse
     *
     * @param string                      $workspaceId
     * @param string                      $applicationId
     * @param GetAccessApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetAccessApplicationResponse
     */
    public function getAccessApplicationWithOptions($workspaceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAccessApplication',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/access-applications/' . Url::percentEncode($applicationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access application.
     *
     * @remarks
     * Queries the configuration of an access application in a workspace to view the application access information and user source settings.
     * The query result does not include the plaintext of the application secret. The secret is returned only when the application is created.
     *
     * @param request - GetAccessApplicationRequest
     *
     * @returns GetAccessApplicationResponse
     *
     * @param string                      $workspaceId
     * @param string                      $applicationId
     * @param GetAccessApplicationRequest $request
     *
     * @return GetAccessApplicationResponse
     */
    public function getAccessApplication($workspaceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAccessApplicationWithOptions($workspaceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the time-limited read-only download URL for the currently saved fixed code package of a custom code or image agent.
     *
     * @remarks
     * Retrieves the download URL for the currently saved code package of a custom code or image agent, which can be used to download, inspect, or reuse the fixed code package.
     * ### Download scope
     * Locates the fixed code package referenced by the currently saved configuration by using `workspaceId` and `agentId`. This applies to code packages uploaded locally or imported from OSS. Arbitrary bucket names, object keys, or historical version parameters are not accepted.
     * The current configuration must be deployed as a code package and the fixed package must be available. You do not need to wait for the running instance to be ready. An error is returned if the object has been changed, is missing, or is unreadable.
     * ### Use the response
     * Use `downloadUrl` to download the file. The `fileName`, `fileSize`, `format`, `etag`, and `crc64` fields describe the corresponding fixed package. The unit of `fileSize` is bytes. The `resourceVersionId` field identifies the saved configuration version corresponding to this download.
     * The URL is valid for up to 10 minutes and does not exceed the validity period of the underlying credentials, subject to `expiresAt`. Retrieve the URL again after it expires.
     *
     * @param request - GetAgentCodePackageDownloadUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentCodePackageDownloadUrlResponse
     *
     * @param string                                $workspaceId
     * @param string                                $agentId
     * @param GetAgentCodePackageDownloadUrlRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAgentCodePackageDownloadUrlResponse
     */
    public function getAgentCodePackageDownloadUrlWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentCodePackageDownloadUrl',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/custom-agents/' . Url::percentEncode($agentId) . '/code-package/download-url',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentCodePackageDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the time-limited read-only download URL for the currently saved fixed code package of a custom code or image agent.
     *
     * @remarks
     * Retrieves the download URL for the currently saved code package of a custom code or image agent, which can be used to download, inspect, or reuse the fixed code package.
     * ### Download scope
     * Locates the fixed code package referenced by the currently saved configuration by using `workspaceId` and `agentId`. This applies to code packages uploaded locally or imported from OSS. Arbitrary bucket names, object keys, or historical version parameters are not accepted.
     * The current configuration must be deployed as a code package and the fixed package must be available. You do not need to wait for the running instance to be ready. An error is returned if the object has been changed, is missing, or is unreadable.
     * ### Use the response
     * Use `downloadUrl` to download the file. The `fileName`, `fileSize`, `format`, `etag`, and `crc64` fields describe the corresponding fixed package. The unit of `fileSize` is bytes. The `resourceVersionId` field identifies the saved configuration version corresponding to this download.
     * The URL is valid for up to 10 minutes and does not exceed the validity period of the underlying credentials, subject to `expiresAt`. Retrieve the URL again after it expires.
     *
     * @param request - GetAgentCodePackageDownloadUrlRequest
     *
     * @returns GetAgentCodePackageDownloadUrlResponse
     *
     * @param string                                $workspaceId
     * @param string                                $agentId
     * @param GetAgentCodePackageDownloadUrlRequest $request
     *
     * @return GetAgentCodePackageDownloadUrlResponse
     */
    public function getAgentCodePackageDownloadUrl($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentCodePackageDownloadUrlWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Generates a RAM authorization link for the specified code package source bucket for the workspace resource role.
     *
     * @remarks
     * Generates an authorization link for the workspace resource role to read the code package source bucket, which is used to complete authorization before deploying an existing OSS code package.
     * ### Authorization steps
     * **Step 1:** Provide the `ossBucketName` to obtain the `authorizeUrl` for the current workspace resource role.
     * **Step 2:** Open the returned link and confirm the authorization.
     * **Step 3:** Call [VerifyAgentCodePackageOssRamAuthorization](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyAgentCodePackageOssRamAuthorization) to query the policy binding status. To verify a specific code package object, call [ValidateAgentCodePackageFromOss](https://api.aliyun.com/document/AgentCore/2026-08-04/ValidateAgentCodePackageFromOss).
     * ### Authorization scope
     * The role is selected by the server and cannot be overridden by the caller. This authorization reuses the `OSSObjectRestoreCustom` template, which includes permissions such as reading, writing, and deleting objects, and is not a read-only authorization. Existing authorizations for the same role and bucket can be reused.
     * Obtaining the link itself does not complete the authorization, transfer the code package, or modify the default OSS binding of the workspace.
     *
     * @param request - GetAgentCodePackageOssRamAuthorizeUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentCodePackageOssRamAuthorizeUrlResponse
     *
     * @param string                                       $workspaceId
     * @param GetAgentCodePackageOssRamAuthorizeUrlRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return GetAgentCodePackageOssRamAuthorizeUrlResponse
     */
    public function getAgentCodePackageOssRamAuthorizeUrlWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ossBucketName) {
            @$query['ossBucketName'] = $request->ossBucketName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentCodePackageOssRamAuthorizeUrl',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-code-packages/oss/authorize',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentCodePackageOssRamAuthorizeUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a RAM authorization link for the specified code package source bucket for the workspace resource role.
     *
     * @remarks
     * Generates an authorization link for the workspace resource role to read the code package source bucket, which is used to complete authorization before deploying an existing OSS code package.
     * ### Authorization steps
     * **Step 1:** Provide the `ossBucketName` to obtain the `authorizeUrl` for the current workspace resource role.
     * **Step 2:** Open the returned link and confirm the authorization.
     * **Step 3:** Call [VerifyAgentCodePackageOssRamAuthorization](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyAgentCodePackageOssRamAuthorization) to query the policy binding status. To verify a specific code package object, call [ValidateAgentCodePackageFromOss](https://api.aliyun.com/document/AgentCore/2026-08-04/ValidateAgentCodePackageFromOss).
     * ### Authorization scope
     * The role is selected by the server and cannot be overridden by the caller. This authorization reuses the `OSSObjectRestoreCustom` template, which includes permissions such as reading, writing, and deleting objects, and is not a read-only authorization. Existing authorizations for the same role and bucket can be reused.
     * Obtaining the link itself does not complete the authorization, transfer the code package, or modify the default OSS binding of the workspace.
     *
     * @param request - GetAgentCodePackageOssRamAuthorizeUrlRequest
     *
     * @returns GetAgentCodePackageOssRamAuthorizeUrlResponse
     *
     * @param string                                       $workspaceId
     * @param GetAgentCodePackageOssRamAuthorizeUrlRequest $request
     *
     * @return GetAgentCodePackageOssRamAuthorizeUrlResponse
     */
    public function getAgentCodePackageOssRamAuthorizeUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentCodePackageOssRamAuthorizeUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Generates a time-limited upload URL for a local code package, and returns the upload method, request headers, and the sourceUri for subsequent deployment.
     *
     * @remarks
     * Retrieves a time-limited direct upload URL and upload requirements for a local code package. After the upload is complete, use the returned `sourceUri` to submit the agent deployment.
     * ### Request requirements
     * | Field | Requirement |
     * | --- | --- |
     * | `fileName` | The name of the ZIP or TAR.GZ file without the folder. Maximum length: 255 characters. |
     * | `format` | `zip` or `tar.gz`. Must match the file name extension. |
     * | `fileSize` | The size of the compressed package in bytes. Valid values: 1 to 500000000. |
     * ### Upload and deployment
     * **Step 1:** Use the `uploadMethod`, `uploadUrl`, and `headers` from the response to upload the file directly. This operation only generates the URL and does not upload the file content.
     * **Step 2:** After the upload is complete, specify the `sourceUri` in the `artifact.code.sourceUri` parameter of the [CreateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateCustomAgent) or [UpdateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCustomAgent) operation. You must also provide the `languageRuntime`, `entrypoint`, and service port.
     * **Step 3:** During creation or update, the actual object and its size are verified again. The configuration is saved after the object is transferred to a fixed replica.
     * The upload URL is valid for up to 10 minutes and does not exceed the expiration time of the underlying temporary credentials. The exact expiration time is subject to the `expiresAt` value. If the URL expires, obtain a new one and use the original link and request headers from the response.
     *
     * @param tmpReq - GetAgentCodePackageUploadUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentCodePackageUploadUrlResponse
     *
     * @param string                              $workspaceId
     * @param GetAgentCodePackageUploadUrlRequest $tmpReq
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAgentCodePackageUploadUrlResponse
     */
    public function getAgentCodePackageUploadUrlWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAgentCodePackageUploadUrlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAgentCodePackageUploadUrl',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-code-packages/upload-url',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentCodePackageUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a time-limited upload URL for a local code package, and returns the upload method, request headers, and the sourceUri for subsequent deployment.
     *
     * @remarks
     * Retrieves a time-limited direct upload URL and upload requirements for a local code package. After the upload is complete, use the returned `sourceUri` to submit the agent deployment.
     * ### Request requirements
     * | Field | Requirement |
     * | --- | --- |
     * | `fileName` | The name of the ZIP or TAR.GZ file without the folder. Maximum length: 255 characters. |
     * | `format` | `zip` or `tar.gz`. Must match the file name extension. |
     * | `fileSize` | The size of the compressed package in bytes. Valid values: 1 to 500000000. |
     * ### Upload and deployment
     * **Step 1:** Use the `uploadMethod`, `uploadUrl`, and `headers` from the response to upload the file directly. This operation only generates the URL and does not upload the file content.
     * **Step 2:** After the upload is complete, specify the `sourceUri` in the `artifact.code.sourceUri` parameter of the [CreateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateCustomAgent) or [UpdateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCustomAgent) operation. You must also provide the `languageRuntime`, `entrypoint`, and service port.
     * **Step 3:** During creation or update, the actual object and its size are verified again. The configuration is saved after the object is transferred to a fixed replica.
     * The upload URL is valid for up to 10 minutes and does not exceed the expiration time of the underlying temporary credentials. The exact expiration time is subject to the `expiresAt` value. If the URL expires, obtain a new one and use the original link and request headers from the response.
     *
     * @param request - GetAgentCodePackageUploadUrlRequest
     *
     * @returns GetAgentCodePackageUploadUrlResponse
     *
     * @param string                              $workspaceId
     * @param GetAgentCodePackageUploadUrlRequest $request
     *
     * @return GetAgentCodePackageUploadUrlResponse
     */
    public function getAgentCodePackageUploadUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentCodePackageUploadUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified agent IM channel.
     *
     * @remarks
     * Queries the details of a specified agent IM channel.
     *
     * @param request - GetAgentIMChannelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentIMChannelResponse
     *
     * @param string                   $workspaceId
     * @param string                   $agentId
     * @param string                   $imChannelId
     * @param GetAgentIMChannelRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetAgentIMChannelResponse
     */
    public function getAgentIMChannelWithOptions($workspaceId, $agentId, $imChannelId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentIMChannel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/im-channels/' . Url::percentEncode($imChannelId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentIMChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified agent IM channel.
     *
     * @remarks
     * Queries the details of a specified agent IM channel.
     *
     * @param request - GetAgentIMChannelRequest
     *
     * @returns GetAgentIMChannelResponse
     *
     * @param string                   $workspaceId
     * @param string                   $agentId
     * @param string                   $imChannelId
     * @param GetAgentIMChannelRequest $request
     *
     * @return GetAgentIMChannelResponse
     */
    public function getAgentIMChannel($workspaceId, $agentId, $imChannelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentIMChannelWithOptions($workspaceId, $agentId, $imChannelId, $request, $headers, $runtime);
    }

    /**
     * Queries the governance details of a specified AgentSpec, including basic information, governance pointers, and summaries of all versions.
     *
     * @remarks
     * Queries the basic information, version status, and summaries of all versions of an agent template (AgentSpec) for viewing the template and selecting a version.
     *
     * @param request - GetAgentSpecRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentSpecResponse
     *
     * @param string              $workspaceId
     * @param string              $agentSpecName
     * @param GetAgentSpecRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetAgentSpecResponse
     */
    public function getAgentSpecWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentSpec',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the governance details of a specified AgentSpec, including basic information, governance pointers, and summaries of all versions.
     *
     * @remarks
     * Queries the basic information, version status, and summaries of all versions of an agent template (AgentSpec) for viewing the template and selecting a version.
     *
     * @param request - GetAgentSpecRequest
     *
     * @returns GetAgentSpecResponse
     *
     * @param string              $workspaceId
     * @param string              $agentSpecName
     * @param GetAgentSpecRequest $request
     *
     * @return GetAgentSpecResponse
     */
    public function getAgentSpec($workspaceId, $agentSpecName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentSpecWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the OSS presigned upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, you can call the AgentSpec OSS upload API operation to complete the import.
     *
     * @remarks
     * Retrieves the upload URL for an agent template (AgentSpec) ZIP package to import templates from local files.
     * Files are transferred through Object Storage Service (OSS). First, upload the file by using the returned URL, and then call the [UploadAgentSpecViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/UploadAgentSpecViaOss) API operation to complete the import.
     *
     * @param request - GetAgentSpecImportFileUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentSpecImportFileUrlResponse
     *
     * @param string                           $workspaceId
     * @param GetAgentSpecImportFileUrlRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAgentSpecImportFileUrlResponse
     */
    public function getAgentSpecImportFileUrlWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contentType) {
            @$query['contentType'] = $request->contentType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentSpecImportFileUrl',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-spec-actions/get-import-file-url',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentSpecImportFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the OSS presigned upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, you can call the AgentSpec OSS upload API operation to complete the import.
     *
     * @remarks
     * Retrieves the upload URL for an agent template (AgentSpec) ZIP package to import templates from local files.
     * Files are transferred through Object Storage Service (OSS). First, upload the file by using the returned URL, and then call the [UploadAgentSpecViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/UploadAgentSpecViaOss) API operation to complete the import.
     *
     * @param request - GetAgentSpecImportFileUrlRequest
     *
     * @returns GetAgentSpecImportFileUrlResponse
     *
     * @param string                           $workspaceId
     * @param GetAgentSpecImportFileUrlRequest $request
     *
     * @return GetAgentSpecImportFileUrlResponse
     */
    public function getAgentSpecImportFileUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentSpecImportFileUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the full content of the latest version of a specified AgentSpec for editing or viewing the latest version.
     *
     * @remarks
     * Queries the full content of the latest version of an agent template (AgentSpec) for viewing or editing the latest version.
     *
     * @param request - GetAgentSpecLatestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentSpecLatestResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentSpecName
     * @param GetAgentSpecLatestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetAgentSpecLatestResponse
     */
    public function getAgentSpecLatestWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentSpecLatest',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '/latest',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentSpecLatestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the full content of the latest version of a specified AgentSpec for editing or viewing the latest version.
     *
     * @remarks
     * Queries the full content of the latest version of an agent template (AgentSpec) for viewing or editing the latest version.
     *
     * @param request - GetAgentSpecLatestRequest
     *
     * @returns GetAgentSpecLatestResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentSpecName
     * @param GetAgentSpecLatestRequest $request
     *
     * @return GetAgentSpecLatestResponse
     */
    public function getAgentSpecLatest($workspaceId, $agentSpecName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentSpecLatestWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime);
    }

    /**
     * Queries the full content of a specified AgentSpec version, including the manifest content, resource files, and metadata.
     *
     * @remarks
     * Queries the full content of a specified agent template version, including the manifest content, resource files, and metadata.
     *
     * @param request - GetAgentSpecVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentSpecVersionResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentSpecName
     * @param string                     $agentSpecVersion
     * @param GetAgentSpecVersionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetAgentSpecVersionResponse
     */
    public function getAgentSpecVersionWithOptions($workspaceId, $agentSpecName, $agentSpecVersion, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentSpecVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '/versions/' . Url::percentEncode($agentSpecVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentSpecVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the full content of a specified AgentSpec version, including the manifest content, resource files, and metadata.
     *
     * @remarks
     * Queries the full content of a specified agent template version, including the manifest content, resource files, and metadata.
     *
     * @param request - GetAgentSpecVersionRequest
     *
     * @returns GetAgentSpecVersionResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentSpecName
     * @param string                     $agentSpecVersion
     * @param GetAgentSpecVersionRequest $request
     *
     * @return GetAgentSpecVersionResponse
     */
    public function getAgentSpecVersion($workspaceId, $agentSpecName, $agentSpecVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentSpecVersionWithOptions($workspaceId, $agentSpecName, $agentSpecVersion, $request, $headers, $runtime);
    }

    /**
     * Queries the details of an agent version.
     *
     * @remarks
     * Queries the details of a saved fixed version for a specified managed or custom agent. The configuration field returns the agent configuration at the time the version was saved.
     *
     * @param request - GetAgentVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentVersionResponse
     *
     * @param string                 $workspaceId
     * @param string                 $agentId
     * @param string                 $agentVersion
     * @param GetAgentVersionRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetAgentVersionResponse
     */
    public function getAgentVersionWithOptions($workspaceId, $agentId, $agentVersion, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/versions/' . Url::percentEncode($agentVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an agent version.
     *
     * @remarks
     * Queries the details of a saved fixed version for a specified managed or custom agent. The configuration field returns the agent configuration at the time the version was saved.
     *
     * @param request - GetAgentVersionRequest
     *
     * @returns GetAgentVersionResponse
     *
     * @param string                 $workspaceId
     * @param string                 $agentId
     * @param string                 $agentVersion
     * @param GetAgentVersionRequest $request
     *
     * @return GetAgentVersionResponse
     */
    public function getAgentVersion($workspaceId, $agentId, $agentVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentVersionWithOptions($workspaceId, $agentId, $agentVersion, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified credential and returns the list of agents bound to the credential. The credential content is returned in a masked format.
     *
     * @remarks
     * Queries the details of a specified credential and returns the list of agents bound to the credential.
     * ### Response content
     * Queries the credential type, description, application scope, and binding information. Supports two types: `apiKey` and `mcpHeader`.
     * - `apiKey`: The key value is returned in a masked format.
     * - `mcpHeader`: Returns the configured header name without the header value. The `resourceType` of the applicable resource is `mcpServer`.
     * To modify the configuration, call [UpdateCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCredential).
     *
     * @param request - GetCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCredentialResponse
     *
     * @param string               $workspaceId
     * @param string               $credentialId
     * @param GetCredentialRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCredentialResponse
     */
    public function getCredentialWithOptions($workspaceId, $credentialId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCredential',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/credentials/' . Url::percentEncode($credentialId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified credential and returns the list of agents bound to the credential. The credential content is returned in a masked format.
     *
     * @remarks
     * Queries the details of a specified credential and returns the list of agents bound to the credential.
     * ### Response content
     * Queries the credential type, description, application scope, and binding information. Supports two types: `apiKey` and `mcpHeader`.
     * - `apiKey`: The key value is returned in a masked format.
     * - `mcpHeader`: Returns the configured header name without the header value. The `resourceType` of the applicable resource is `mcpServer`.
     * To modify the configuration, call [UpdateCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCredential).
     *
     * @param request - GetCredentialRequest
     *
     * @returns GetCredentialResponse
     *
     * @param string               $workspaceId
     * @param string               $credentialId
     * @param GetCredentialRequest $request
     *
     * @return GetCredentialResponse
     */
    public function getCredential($workspaceId, $credentialId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCredentialWithOptions($workspaceId, $credentialId, $request, $headers, $runtime);
    }

    /**
     * Queries the latest deployment configuration, version processing results, code package or image information, and running instance status of a custom code or image agent.
     *
     * @remarks
     * Queries the configuration, artifacts, and running status of a custom code or image agent to confirm the processing and effective results of creation or updates.
     * ### Query configuration processing results
     * After creation or update, you can poll this operation. The returned configuration belongs to the latest submitted version and may not have taken effect yet.
     * | Field | Description |
     * | --- | --- |
     * | `latestSpecVersion` | The latest expected configuration version. |
     * | `effectiveSpecVersion` | The currently effective configuration version. |
     * | `latestVersionStatus` | The processing status of the latest expected version. |
     * | `latestExecutionError` | The reason why the latest version is waiting for a retry or failed to execute, and whether automatic retry is enabled. |
     * | `status` | The overall status of the agent. |
     * | `sandboxPhaseCounts` | The snapshot of the number of running instances in each phase. |
     * `pending`, `processing`, and `waiting_retry` indicate that processing is continuing. `succeeded` indicates that the configuration is processed successfully. If the value is `failed`, troubleshoot the issue based on `latestExecutionError`. Instance status and configuration processing status are queried separately.
     * ### Code packages and images
     * In code package mode, `artifact.code.sourceUri` is the saved fixed package address, and `codePackageInfo` provides the package information. To download the current fixed package, call [GetAgentCodePackageDownloadUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageDownloadUrl).
     * In image mode, `customImage` is the most recently saved custom source, and `currentImage` is the image source of the effective version. The two may be different. You can use `imagePreparation.preparationId` to call [GetCustomAgentImagePreparation](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgentImagePreparation) to query the preparation and deployment phases of the current custom image. `imageCachePreparation.statusAtAcceptance` only indicates the cache status at the time of acceptance.
     * The response does not return the image repository password. If you query an agent that does not exist, has been deleted, or does not belong to the specified workspace, a resource not found error is returned.
     *
     * @param request - GetCustomAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomAgentResponse
     *
     * @param string                $workspaceId
     * @param string                $agentId
     * @param GetCustomAgentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetCustomAgentResponse
     */
    public function getCustomAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCustomAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/custom-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the latest deployment configuration, version processing results, code package or image information, and running instance status of a custom code or image agent.
     *
     * @remarks
     * Queries the configuration, artifacts, and running status of a custom code or image agent to confirm the processing and effective results of creation or updates.
     * ### Query configuration processing results
     * After creation or update, you can poll this operation. The returned configuration belongs to the latest submitted version and may not have taken effect yet.
     * | Field | Description |
     * | --- | --- |
     * | `latestSpecVersion` | The latest expected configuration version. |
     * | `effectiveSpecVersion` | The currently effective configuration version. |
     * | `latestVersionStatus` | The processing status of the latest expected version. |
     * | `latestExecutionError` | The reason why the latest version is waiting for a retry or failed to execute, and whether automatic retry is enabled. |
     * | `status` | The overall status of the agent. |
     * | `sandboxPhaseCounts` | The snapshot of the number of running instances in each phase. |
     * `pending`, `processing`, and `waiting_retry` indicate that processing is continuing. `succeeded` indicates that the configuration is processed successfully. If the value is `failed`, troubleshoot the issue based on `latestExecutionError`. Instance status and configuration processing status are queried separately.
     * ### Code packages and images
     * In code package mode, `artifact.code.sourceUri` is the saved fixed package address, and `codePackageInfo` provides the package information. To download the current fixed package, call [GetAgentCodePackageDownloadUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageDownloadUrl).
     * In image mode, `customImage` is the most recently saved custom source, and `currentImage` is the image source of the effective version. The two may be different. You can use `imagePreparation.preparationId` to call [GetCustomAgentImagePreparation](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgentImagePreparation) to query the preparation and deployment phases of the current custom image. `imageCachePreparation.statusAtAcceptance` only indicates the cache status at the time of acceptance.
     * The response does not return the image repository password. If you query an agent that does not exist, has been deleted, or does not belong to the specified workspace, a resource not found error is returned.
     *
     * @param request - GetCustomAgentRequest
     *
     * @returns GetCustomAgentResponse
     *
     * @param string                $workspaceId
     * @param string                $agentId
     * @param GetCustomAgentRequest $request
     *
     * @return GetCustomAgentResponse
     */
    public function getCustomAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Queries the preparation and deployment progress of the current submission for a custom image by preparation task ID.
     *
     * @remarks
     * Queries the processing progress, such as image checking, copying, and starting, by preparation task ID to track the result of the current custom image submission.
     * ### Obtain the task identifier
     * Pass the value of `imagePreparation.preparationId` from the response of creating or updating a custom code or image agent as the `preparationId` parameter without modification. It identifies the task for the current submission, not the running instance ID.
     * ### Determine completion
     * | `phase` | Meaning |
     * | --- | --- |
     * | `QUEUED`, `CHECKING` | Queued or checking the source. |
     * | `COPYING` | Copying the image. |
     * | `STARTING` | Starting the target version. |
     * | `HEALTH_CHECKING` | Waiting for the target version instance to be ready. |
     * | `SUCCEEDED` | The target version is deployed successfully. |
     * | `FAILED` | The preparation or deployment failed. Check `failedPhase` and `error`. |
     * | `CANCELLED` | The target version has been replaced by a subsequent configuration or canceled. |
     * The query only reads the status and does not recreate the copy task. `SUCCEEDED` applies to the current target version. Seeing only old instances running does not indicate that the current submission is complete. If the configuration version is replaced by a subsequent submission, the current task may return `CANCELLED`.
     * If the create or update response is lost, you can call [FindCustomAgentImagePreparation](https://api.aliyun.com/document/AgentCore/2026-08-04/FindCustomAgentImagePreparation) with the `clientToken` used at that time to retrieve the preparation task.
     *
     * @param request - GetCustomAgentImagePreparationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomAgentImagePreparationResponse
     *
     * @param string                                $workspaceId
     * @param string                                $preparationId
     * @param GetCustomAgentImagePreparationRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetCustomAgentImagePreparationResponse
     */
    public function getCustomAgentImagePreparationWithOptions($workspaceId, $preparationId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCustomAgentImagePreparation',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/custom-image-preparations/' . Url::percentEncode($preparationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCustomAgentImagePreparationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the preparation and deployment progress of the current submission for a custom image by preparation task ID.
     *
     * @remarks
     * Queries the processing progress, such as image checking, copying, and starting, by preparation task ID to track the result of the current custom image submission.
     * ### Obtain the task identifier
     * Pass the value of `imagePreparation.preparationId` from the response of creating or updating a custom code or image agent as the `preparationId` parameter without modification. It identifies the task for the current submission, not the running instance ID.
     * ### Determine completion
     * | `phase` | Meaning |
     * | --- | --- |
     * | `QUEUED`, `CHECKING` | Queued or checking the source. |
     * | `COPYING` | Copying the image. |
     * | `STARTING` | Starting the target version. |
     * | `HEALTH_CHECKING` | Waiting for the target version instance to be ready. |
     * | `SUCCEEDED` | The target version is deployed successfully. |
     * | `FAILED` | The preparation or deployment failed. Check `failedPhase` and `error`. |
     * | `CANCELLED` | The target version has been replaced by a subsequent configuration or canceled. |
     * The query only reads the status and does not recreate the copy task. `SUCCEEDED` applies to the current target version. Seeing only old instances running does not indicate that the current submission is complete. If the configuration version is replaced by a subsequent submission, the current task may return `CANCELLED`.
     * If the create or update response is lost, you can call [FindCustomAgentImagePreparation](https://api.aliyun.com/document/AgentCore/2026-08-04/FindCustomAgentImagePreparation) with the `clientToken` used at that time to retrieve the preparation task.
     *
     * @param request - GetCustomAgentImagePreparationRequest
     *
     * @returns GetCustomAgentImagePreparationResponse
     *
     * @param string                                $workspaceId
     * @param string                                $preparationId
     * @param GetCustomAgentImagePreparationRequest $request
     *
     * @return GetCustomAgentImagePreparationResponse
     */
    public function getCustomAgentImagePreparation($workspaceId, $preparationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomAgentImagePreparationWithOptions($workspaceId, $preparationId, $request, $headers, $runtime);
    }

    /**
     * Queries the configuration, model source, version processing status, and external runtime status of a managed agent.
     *
     * @remarks
     * Queries the platform configuration, version processing status, and external runtime status of a managed agent to verify access and configuration effectiveness.
     * ### Configuration processing and runtime status
     * `latestSpecVersion` and `latestVersionStatus` indicate the latest submitted configuration and its processing status. `status` represents the platform resource status, and `externalAgentStatus` represents the external runtime status. A successful configuration acceptance does not mean that the external process is connected.
     * If `modelSource` is `PLATFORM`, the returned model configuration is used. `RUNTIME` indicates that the model is managed by the external environment. `configuredSkills` indicates explicit skill configurations, and `skills` represents the aggregated skill information.
     * ### External access
     * After the configuration takes effect, call [GetExternalAgentBootstrapOptions](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgentBootstrapOptions) to query available networks, and then call [CreateExternalAgentBootstrapToken](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateExternalAgentBootstrapToken) to obtain access information. If the agent does not exist, has been deleted, or does not belong to the workspace, a resource not found error is returned.
     *
     * @param request - GetExternalAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExternalAgentResponse
     *
     * @param string                  $workspaceId
     * @param string                  $agentId
     * @param GetExternalAgentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetExternalAgentResponse
     */
    public function getExternalAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExternalAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/external-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExternalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration, model source, version processing status, and external runtime status of a managed agent.
     *
     * @remarks
     * Queries the platform configuration, version processing status, and external runtime status of a managed agent to verify access and configuration effectiveness.
     * ### Configuration processing and runtime status
     * `latestSpecVersion` and `latestVersionStatus` indicate the latest submitted configuration and its processing status. `status` represents the platform resource status, and `externalAgentStatus` represents the external runtime status. A successful configuration acceptance does not mean that the external process is connected.
     * If `modelSource` is `PLATFORM`, the returned model configuration is used. `RUNTIME` indicates that the model is managed by the external environment. `configuredSkills` indicates explicit skill configurations, and `skills` represents the aggregated skill information.
     * ### External access
     * After the configuration takes effect, call [GetExternalAgentBootstrapOptions](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgentBootstrapOptions) to query available networks, and then call [CreateExternalAgentBootstrapToken](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateExternalAgentBootstrapToken) to obtain access information. If the agent does not exist, has been deleted, or does not belong to the workspace, a resource not found error is returned.
     *
     * @param request - GetExternalAgentRequest
     *
     * @returns GetExternalAgentResponse
     *
     * @param string                  $workspaceId
     * @param string                  $agentId
     * @param GetExternalAgentRequest $request
     *
     * @return GetExternalAgentResponse
     */
    public function getExternalAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExternalAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Queries the available internal and public network access options for a managed agent.
     *
     * @remarks
     * Queries the available public and internal network access methods for a managed agent to select the network used for subsequent connections.
     * ### Prerequisites
     * The managed agent must be in the running state, and the latest desired configuration must be applied. If the configuration is still being created, updated, or not fully applied, query the status first by calling [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent).
     * ### Select an access network
     * In the response, the `networkType` in `networkOptions` is `INTRANET` or `INTERNET`, and `available` indicates whether the corresponding access endpoint is available. Select a network with `available=true` and call [CreateExternalAgentBootstrapToken](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateExternalAgentBootstrapToken) to obtain the corresponding access information.
     *
     * @param request - GetExternalAgentBootstrapOptionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExternalAgentBootstrapOptionsResponse
     *
     * @param string                                  $workspaceId
     * @param string                                  $agentId
     * @param GetExternalAgentBootstrapOptionsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GetExternalAgentBootstrapOptionsResponse
     */
    public function getExternalAgentBootstrapOptionsWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExternalAgentBootstrapOptions',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/external-agents/' . Url::percentEncode($agentId) . '/bootstrap/options',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExternalAgentBootstrapOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available internal and public network access options for a managed agent.
     *
     * @remarks
     * Queries the available public and internal network access methods for a managed agent to select the network used for subsequent connections.
     * ### Prerequisites
     * The managed agent must be in the running state, and the latest desired configuration must be applied. If the configuration is still being created, updated, or not fully applied, query the status first by calling [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent).
     * ### Select an access network
     * In the response, the `networkType` in `networkOptions` is `INTRANET` or `INTERNET`, and `available` indicates whether the corresponding access endpoint is available. Select a network with `available=true` and call [CreateExternalAgentBootstrapToken](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateExternalAgentBootstrapToken) to obtain the corresponding access information.
     *
     * @param request - GetExternalAgentBootstrapOptionsRequest
     *
     * @returns GetExternalAgentBootstrapOptionsResponse
     *
     * @param string                                  $workspaceId
     * @param string                                  $agentId
     * @param GetExternalAgentBootstrapOptionsRequest $request
     *
     * @return GetExternalAgentBootstrapOptionsResponse
     */
    public function getExternalAgentBootstrapOptions($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExternalAgentBootstrapOptionsWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Queries the binding and expected configuration of a specified identity provider. When SAML is configured for CustomSSO, this operation reads back the actual upstream SSO configuration. The SCIM status is queried through a separate API operation.
     *
     * @remarks
     * Queries the enterprise identity providers bound to a workspace to view the access configuration, logon and user synchronization switches, and configuration processing progress.
     * For a custom identity provider (`CustomSSO`), this API operation also reads the saved SAML logon configuration for viewing or modifying enterprise single sign-on (SSO) settings.
     * ### How to interpret the query results
     * | Field | Purpose |
     * | --- | --- |
     * | `identityProviderType` | Indicates whether DingTalk, Lark, or a custom identity provider is currently connected. |
     * | `loginEnabled` | Indicates whether enterprise account logon is enabled. |
     * | `saml` | The saved SAML configuration of the enterprise identity system, used for backfilling when editing the configuration. |
     * | `configuration` | The actual SAML configuration read from the identity service, used to verify whether the logon configuration has taken effect. |
     * | `status` | The processing progress to attach the identity provider or apply the logon configuration. |
     * If `CustomSSO` returns `WAITING_CONFIGURATION`, it indicates that the user pool is ready and the SAML logon configuration is pending. In this case, you can call [GetIdentityProviderServiceProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderServiceProvider) to obtain the access information of AgentCore and continue configuring enterprise single sign-on.
     * After saving the logon configuration, you can query `status` to track the processing progress. `READY` indicates that the configuration processing is complete. To check whether logon is enabled, you also need to verify `loginEnabled` and `configuration`.
     * ### Query user synchronization status
     * SAML logon and SCIM user synchronization are configured separately. SCIM is used to pre-provision users from the enterprise identity system to the user pool. You can call [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM) to query the receiver configuration and synchronization task results.
     *
     * @param request - GetIdentityProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderResponse
     *
     * @param string                     $workspaceId
     * @param string                     $identityProviderType
     * @param GetIdentityProviderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetIdentityProviderResponse
     */
    public function getIdentityProviderWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIdentityProvider',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers/' . Url::percentEncode($identityProviderType) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the binding and expected configuration of a specified identity provider. When SAML is configured for CustomSSO, this operation reads back the actual upstream SSO configuration. The SCIM status is queried through a separate API operation.
     *
     * @remarks
     * Queries the enterprise identity providers bound to a workspace to view the access configuration, logon and user synchronization switches, and configuration processing progress.
     * For a custom identity provider (`CustomSSO`), this API operation also reads the saved SAML logon configuration for viewing or modifying enterprise single sign-on (SSO) settings.
     * ### How to interpret the query results
     * | Field | Purpose |
     * | --- | --- |
     * | `identityProviderType` | Indicates whether DingTalk, Lark, or a custom identity provider is currently connected. |
     * | `loginEnabled` | Indicates whether enterprise account logon is enabled. |
     * | `saml` | The saved SAML configuration of the enterprise identity system, used for backfilling when editing the configuration. |
     * | `configuration` | The actual SAML configuration read from the identity service, used to verify whether the logon configuration has taken effect. |
     * | `status` | The processing progress to attach the identity provider or apply the logon configuration. |
     * If `CustomSSO` returns `WAITING_CONFIGURATION`, it indicates that the user pool is ready and the SAML logon configuration is pending. In this case, you can call [GetIdentityProviderServiceProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderServiceProvider) to obtain the access information of AgentCore and continue configuring enterprise single sign-on.
     * After saving the logon configuration, you can query `status` to track the processing progress. `READY` indicates that the configuration processing is complete. To check whether logon is enabled, you also need to verify `loginEnabled` and `configuration`.
     * ### Query user synchronization status
     * SAML logon and SCIM user synchronization are configured separately. SCIM is used to pre-provision users from the enterprise identity system to the user pool. You can call [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM) to query the receiver configuration and synchronization task results.
     *
     * @param request - GetIdentityProviderRequest
     *
     * @returns GetIdentityProviderResponse
     *
     * @param string                     $workspaceId
     * @param string                     $identityProviderType
     * @param GetIdentityProviderRequest $request
     *
     * @return GetIdentityProviderResponse
     */
    public function getIdentityProvider($workspaceId, $identityProviderType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdentityProviderWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime);
    }

    /**
     * Queries the actual SCIM receiving configuration, the expected AgentCore synchronization switch, and the status of the most recent independent SCIM task. SAML configuration is not required beforehand.
     *
     * @remarks
     * Queries the access configuration and processing progress of SCIM user synchronization to determine whether the receiving end is ready, whether AgentCore user synchronization is enabled, and whether the most recent synchronization operation is completed.
     * SCIM is a user provisioning protocol. The enterprise identity system sends user information to the user pool through the receiving URL and access token. After AgentCore user synchronization is enabled, users in the user pool are imported into the workspace.
     * ### How to interpret the query results
     * | Field | Business meaning |
     * | --- | --- |
     * | `configuration` | The actual status and receiving URL of the SCIM receiving endpoint. |
     * | `syncEnabled` | The expected switch for AgentCore user synchronization. |
     * | `operationStatus` | The execution result of the most recent operation to enable or disable synchronization. It is an empty string `""` if no historical tasks exist. |
     * | `status` | The SCIM access state derived from the receiving endpoint configuration, credentials, and operation results. |
     * ### Proceed based on the status
     * | `status` | Current stage | Next step |
     * | --- | --- | --- |
     * | `UNCONFIGURED` | The receiving end is not ready. | Call [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM) to prepare for access. |
     * | `WAITING_CONFIGURATION` | The URL and valid credentials are available. Waiting for the enterprise-side configuration to be completed and synchronization to be enabled. | Configure the URL and token in the enterprise identity system, and then call [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM). |
     * | `UPDATING` | Synchronization is being enabled or disabled. | Continue to query this operation and wait for the operation to complete. |
     * | `READY` | Synchronization is enabled, the current enabling task is successful, and the receiving end and credentials are still available. | You can view the synchronized workspace users. |
     * | `DISABLED` | Synchronization is disabled. Existing configurations, credentials, and users are retained. | To re-establish access, check and prepare the receiving end first, and then enable synchronization. |
     * | `UPDATE_FAILED` | The operation failed, or the configuration and credentials after enabling are no longer available. | Check the operation results and access configuration in combination with `operationStatus`. |
     * This operation queries the SCIM status. The SAML enterprise account logon configuration is queried through [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider). `READY` reflects the result of the current enabling operation. The user assignment and provisioning status in the enterprise identity system must still be verified on the enterprise side.
     *
     * @param request - GetIdentityProviderSCIMRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderSCIMResponse
     *
     * @param string                         $workspaceId
     * @param GetIdentityProviderSCIMRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetIdentityProviderSCIMResponse
     */
    public function getIdentityProviderSCIMWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIdentityProviderSCIM',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/scim-provisioning',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderSCIMResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the actual SCIM receiving configuration, the expected AgentCore synchronization switch, and the status of the most recent independent SCIM task. SAML configuration is not required beforehand.
     *
     * @remarks
     * Queries the access configuration and processing progress of SCIM user synchronization to determine whether the receiving end is ready, whether AgentCore user synchronization is enabled, and whether the most recent synchronization operation is completed.
     * SCIM is a user provisioning protocol. The enterprise identity system sends user information to the user pool through the receiving URL and access token. After AgentCore user synchronization is enabled, users in the user pool are imported into the workspace.
     * ### How to interpret the query results
     * | Field | Business meaning |
     * | --- | --- |
     * | `configuration` | The actual status and receiving URL of the SCIM receiving endpoint. |
     * | `syncEnabled` | The expected switch for AgentCore user synchronization. |
     * | `operationStatus` | The execution result of the most recent operation to enable or disable synchronization. It is an empty string `""` if no historical tasks exist. |
     * | `status` | The SCIM access state derived from the receiving endpoint configuration, credentials, and operation results. |
     * ### Proceed based on the status
     * | `status` | Current stage | Next step |
     * | --- | --- | --- |
     * | `UNCONFIGURED` | The receiving end is not ready. | Call [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM) to prepare for access. |
     * | `WAITING_CONFIGURATION` | The URL and valid credentials are available. Waiting for the enterprise-side configuration to be completed and synchronization to be enabled. | Configure the URL and token in the enterprise identity system, and then call [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM). |
     * | `UPDATING` | Synchronization is being enabled or disabled. | Continue to query this operation and wait for the operation to complete. |
     * | `READY` | Synchronization is enabled, the current enabling task is successful, and the receiving end and credentials are still available. | You can view the synchronized workspace users. |
     * | `DISABLED` | Synchronization is disabled. Existing configurations, credentials, and users are retained. | To re-establish access, check and prepare the receiving end first, and then enable synchronization. |
     * | `UPDATE_FAILED` | The operation failed, or the configuration and credentials after enabling are no longer available. | Check the operation results and access configuration in combination with `operationStatus`. |
     * This operation queries the SCIM status. The SAML enterprise account logon configuration is queried through [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider). `READY` reflects the result of the current enabling operation. The user assignment and provisioning status in the enterprise identity system must still be verified on the enterprise side.
     *
     * @param request - GetIdentityProviderSCIMRequest
     *
     * @returns GetIdentityProviderSCIMResponse
     *
     * @param string                         $workspaceId
     * @param GetIdentityProviderSCIMRequest $request
     *
     * @return GetIdentityProviderSCIMResponse
     */
    public function getIdentityProviderSCIM($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdentityProviderSCIMWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the SAML service provider (SP) information of CustomSSO, including the Entity ID, ACS URL, and SP metadata XML, for users to configure an external IdP.
     *
     * @remarks
     * Retrieves the SAML service provider (SP) access information of AgentCore to configure single sign-on (SSO) in an enterprise identity provider (IdP).
     * An SP is a service provider that receives logon assertions. An IdP is an enterprise identity provider that verifies user identities and issues logon assertions. This operation returns the SP information on the AgentCore side.
     * ### Before you begin
     * The workspace is bound to CustomSSO, and the shared user pool is initialized. The protocol parameter is required and must be set to SAML.
     * You can call the [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) operation to query the binding information. After the user pool is available, you can obtain the SP information and then complete the SAML configuration.
     * ### Request example
     * ```http
     * GET /workspaces/{workspaceId}/identity-providers/CustomSSO/service-provider?protocol=SAML
     * ```
     * ### Response information
     * | Field | Purpose |
     * | --- | --- |
     * | protocol | The access protocol. This operation returns SAML. |
     * | entityId | The SP identifier of AgentCore. Configure it as the service provider Entity ID in the enterprise IdP. |
     * | acsUrl | The URL where AgentCore receives SAML logon assertions. Configure it as the ACS URL in the enterprise IdP. |
     * | metadataXml | The SP metadata XML. Import it to configure the SP in an enterprise IdP that supports metadata import. |
     * ### Configuration flow
     * **Step 1:** Call this operation to obtain the SP information, and configure the SP identifier and the URL to accept assertions of AgentCore in the enterprise IdP.
     * **Step 2:** Export the metadata XML from the enterprise IdP and save it to AgentCore by calling [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider).
     * **Step 3:** After the configuration is complete, enable single sign-on logon by setting loginEnabled as needed.
     *
     * @param request - GetIdentityProviderServiceProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderServiceProviderResponse
     *
     * @param string                                    $workspaceId
     * @param string                                    $identityProviderType
     * @param GetIdentityProviderServiceProviderRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return GetIdentityProviderServiceProviderResponse
     */
    public function getIdentityProviderServiceProviderWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->protocol) {
            @$query['protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIdentityProviderServiceProvider',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers/' . Url::percentEncode($identityProviderType) . '/service-provider',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderServiceProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SAML service provider (SP) information of CustomSSO, including the Entity ID, ACS URL, and SP metadata XML, for users to configure an external IdP.
     *
     * @remarks
     * Retrieves the SAML service provider (SP) access information of AgentCore to configure single sign-on (SSO) in an enterprise identity provider (IdP).
     * An SP is a service provider that receives logon assertions. An IdP is an enterprise identity provider that verifies user identities and issues logon assertions. This operation returns the SP information on the AgentCore side.
     * ### Before you begin
     * The workspace is bound to CustomSSO, and the shared user pool is initialized. The protocol parameter is required and must be set to SAML.
     * You can call the [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) operation to query the binding information. After the user pool is available, you can obtain the SP information and then complete the SAML configuration.
     * ### Request example
     * ```http
     * GET /workspaces/{workspaceId}/identity-providers/CustomSSO/service-provider?protocol=SAML
     * ```
     * ### Response information
     * | Field | Purpose |
     * | --- | --- |
     * | protocol | The access protocol. This operation returns SAML. |
     * | entityId | The SP identifier of AgentCore. Configure it as the service provider Entity ID in the enterprise IdP. |
     * | acsUrl | The URL where AgentCore receives SAML logon assertions. Configure it as the ACS URL in the enterprise IdP. |
     * | metadataXml | The SP metadata XML. Import it to configure the SP in an enterprise IdP that supports metadata import. |
     * ### Configuration flow
     * **Step 1:** Call this operation to obtain the SP information, and configure the SP identifier and the URL to accept assertions of AgentCore in the enterprise IdP.
     * **Step 2:** Export the metadata XML from the enterprise IdP and save it to AgentCore by calling [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider).
     * **Step 3:** After the configuration is complete, enable single sign-on logon by setting loginEnabled as needed.
     *
     * @param request - GetIdentityProviderServiceProviderRequest
     *
     * @returns GetIdentityProviderServiceProviderResponse
     *
     * @param string                                    $workspaceId
     * @param string                                    $identityProviderType
     * @param GetIdentityProviderServiceProviderRequest $request
     *
     * @return GetIdentityProviderServiceProviderResponse
     */
    public function getIdentityProviderServiceProvider($workspaceId, $identityProviderType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdentityProviderServiceProviderWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime);
    }

    /**
     * Queries an identity provider synchronization task.
     *
     * @remarks
     * Queries the progress, number of processed users, and failure causes of a user synchronization task to track whether manual synchronization is complete.
     * Use the `taskId` returned by [CreateIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSyncJob) and keep the same workspace and identity provider.
     * ### Determine synchronization results
     * | `status` | Meaning and what to do next |
     * | --- | --- |
     * | `PENDING`, `RUNNING` | The node is not yet complete. You can continue to query. |
     * | `PAUSED` | The node is paused and has not ended. |
     * | `SUCCESS` | The synchronization is complete. You can view the workspace users. |
     * | `FAILED` | The synchronization failed. Check `failureReason`. |
     * | `CANCELED` | The node is canceled. |
     * `syncedUserCount` is the number of processed users, including updated existing users. It is not the number of newly added users and cannot be directly used as a completion percentage. `null` is returned when the count is not yet available.
     *
     * @param request - GetIdentityProviderSyncJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderSyncJobResponse
     *
     * @param string                            $workspaceId
     * @param string                            $identityProviderType
     * @param string                            $taskId
     * @param GetIdentityProviderSyncJobRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetIdentityProviderSyncJobResponse
     */
    public function getIdentityProviderSyncJobWithOptions($workspaceId, $identityProviderType, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIdentityProviderSyncJob',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers/' . Url::percentEncode($identityProviderType) . '/sync-jobs/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderSyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an identity provider synchronization task.
     *
     * @remarks
     * Queries the progress, number of processed users, and failure causes of a user synchronization task to track whether manual synchronization is complete.
     * Use the `taskId` returned by [CreateIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSyncJob) and keep the same workspace and identity provider.
     * ### Determine synchronization results
     * | `status` | Meaning and what to do next |
     * | --- | --- |
     * | `PENDING`, `RUNNING` | The node is not yet complete. You can continue to query. |
     * | `PAUSED` | The node is paused and has not ended. |
     * | `SUCCESS` | The synchronization is complete. You can view the workspace users. |
     * | `FAILED` | The synchronization failed. Check `failureReason`. |
     * | `CANCELED` | The node is canceled. |
     * `syncedUserCount` is the number of processed users, including updated existing users. It is not the number of newly added users and cannot be directly used as a completion percentage. `null` is returned when the count is not yet available.
     *
     * @param request - GetIdentityProviderSyncJobRequest
     *
     * @returns GetIdentityProviderSyncJobResponse
     *
     * @param string                            $workspaceId
     * @param string                            $identityProviderType
     * @param string                            $taskId
     * @param GetIdentityProviderSyncJobRequest $request
     *
     * @return GetIdentityProviderSyncJobResponse
     */
    public function getIdentityProviderSyncJob($workspaceId, $identityProviderType, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdentityProviderSyncJobWithOptions($workspaceId, $identityProviderType, $taskId, $request, $headers, $runtime);
    }

    /**
     * Queries the synchronization scope of an identity provider.
     *
     * @remarks
     * Queries the saved user synchronization scope, checks whether the selected departments are valid, and views the estimated number of departments and users involved. You can use this operation to verify the scope before initiating a manual synchronization.
     * ### View synchronization scope
     * | `syncScope.mode` | Synchronization scope |
     * | --- | --- |
     * | `AllAuthorized` | The address book scope authorized for the enterprise application. The specific scope is determined by the enterprise\\"s authorization. |
     * | `SelectedDepartments` | The saved scope of specified departments. Use `selectedDepartments` to view the selected departments and their validity. |
     * This operation reads the saved configuration. After adjusting the department selection, save the changes by calling [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider) before querying the estimated results. To browse the complete department tree, use [ListIdentityProviderDepartments](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderDepartments).
     * ### Use user count estimation
     * You can use `expandedDepartmentCount` and `estimatedUserCount` only when `estimateStatus=Ready` and the counts are not `null`. Counts that have not been obtained return `null` and must not be treated as 0.
     * After confirming the scope, initiate the synchronization by calling [CreateIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSyncJob).
     *
     * @param request - GetIdentityProviderSyncScopeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderSyncScopeResponse
     *
     * @param string                              $workspaceId
     * @param string                              $identityProviderType
     * @param GetIdentityProviderSyncScopeRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetIdentityProviderSyncScopeResponse
     */
    public function getIdentityProviderSyncScopeWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIdentityProviderSyncScope',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers/' . Url::percentEncode($identityProviderType) . '/sync-scope',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderSyncScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the synchronization scope of an identity provider.
     *
     * @remarks
     * Queries the saved user synchronization scope, checks whether the selected departments are valid, and views the estimated number of departments and users involved. You can use this operation to verify the scope before initiating a manual synchronization.
     * ### View synchronization scope
     * | `syncScope.mode` | Synchronization scope |
     * | --- | --- |
     * | `AllAuthorized` | The address book scope authorized for the enterprise application. The specific scope is determined by the enterprise\\"s authorization. |
     * | `SelectedDepartments` | The saved scope of specified departments. Use `selectedDepartments` to view the selected departments and their validity. |
     * This operation reads the saved configuration. After adjusting the department selection, save the changes by calling [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider) before querying the estimated results. To browse the complete department tree, use [ListIdentityProviderDepartments](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderDepartments).
     * ### Use user count estimation
     * You can use `expandedDepartmentCount` and `estimatedUserCount` only when `estimateStatus=Ready` and the counts are not `null`. Counts that have not been obtained return `null` and must not be treated as 0.
     * After confirming the scope, initiate the synchronization by calling [CreateIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSyncJob).
     *
     * @param request - GetIdentityProviderSyncScopeRequest
     *
     * @returns GetIdentityProviderSyncScopeResponse
     *
     * @param string                              $workspaceId
     * @param string                              $identityProviderType
     * @param GetIdentityProviderSyncScopeRequest $request
     *
     * @return GetIdentityProviderSyncScopeResponse
     */
    public function getIdentityProviderSyncScope($workspaceId, $identityProviderType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdentityProviderSyncScopeWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime);
    }

    /**
     * Queries the status, digest, size, and deletion conditions of an image cache in a specified workspace.
     *
     * @remarks
     * Queries the creation status and usage of an image cache to determine whether the cache is available and meets the deletion conditions.
     * ### Cache status
     * | `status` | Meaning |
     * | --- | --- |
     * | `PENDING` | Preparing. Continue to query. |
     * | `READY` | Ready. |
     * | `FAILED` | Preparation failed. Troubleshoot based on the `error` field. |
     * | `DELETING` | Deleting. |
     * | `DISABLED` | Disabled. |
     * The `digest` is provided after the source resolution is completed. The unit of `cacheSizeBytes` is bytes, and it can be empty when the cache is not yet available.
     * ### Usage and deletion
     * `agentCount` indicates the number of agents that have enabled the cache switch and reference this cache. `canDelete` and `deleteBlockReason` indicate whether the cache can be deleted and the reason for blocking deletion. Deletion requests will recheck the usage.
     * The query scope of this operation is determined by `regionId`, `workspaceId`, and `imageId`.
     *
     * @param request - GetImageCacheRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageCacheResponse
     *
     * @param string               $imageId
     * @param GetImageCacheRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetImageCacheResponse
     */
    public function getImageCacheWithOptions($imageId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageCache',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/image-caches/' . Url::percentEncode($imageId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status, digest, size, and deletion conditions of an image cache in a specified workspace.
     *
     * @remarks
     * Queries the creation status and usage of an image cache to determine whether the cache is available and meets the deletion conditions.
     * ### Cache status
     * | `status` | Meaning |
     * | --- | --- |
     * | `PENDING` | Preparing. Continue to query. |
     * | `READY` | Ready. |
     * | `FAILED` | Preparation failed. Troubleshoot based on the `error` field. |
     * | `DELETING` | Deleting. |
     * | `DISABLED` | Disabled. |
     * The `digest` is provided after the source resolution is completed. The unit of `cacheSizeBytes` is bytes, and it can be empty when the cache is not yet available.
     * ### Usage and deletion
     * `agentCount` indicates the number of agents that have enabled the cache switch and reference this cache. `canDelete` and `deleteBlockReason` indicate whether the cache can be deleted and the reason for blocking deletion. Deletion requests will recheck the usage.
     * The query scope of this operation is determined by `regionId`, `workspaceId`, and `imageId`.
     *
     * @param request - GetImageCacheRequest
     *
     * @returns GetImageCacheResponse
     *
     * @param string               $imageId
     * @param GetImageCacheRequest $request
     *
     * @return GetImageCacheResponse
     */
    public function getImageCache($imageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageCacheWithOptions($imageId, $request, $headers, $runtime);
    }

    /**
     * Queries the latest configuration, Harness and skill versions, configuration processing status, and running instance statistics of a managed Harness agent.
     *
     * @remarks
     * Queries the configuration, skill versions, and running status of a managed Harness agent to view the current configuration and its processing results.
     * ### Configuration and running status
     * This operation returns the latest submitted configuration, which may still be processing. Use the following fields to determine the update progress and running status:
     * | Field | Purpose |
     * | --- | --- |
     * | `latestSpecVersion` | The latest submitted desired configuration version. |
     * | `latestVersionStatus` | The processing status of the desired version. |
     * | `status` | The overall status of the agent. |
     * | `sandboxPhaseCounts` | The current snapshot of the number of instances in each phase. |
     * Successful configuration processing does not mean that all old instances have been replaced. To view specific instances or active sessions, call [ListSandboxes](https://api.aliyun.com/document/AgentCore/2026-08-04/ListSandboxes) and [ListSandboxSessions](https://api.aliyun.com/document/AgentCore/2026-08-04/ListSandboxSessions) respectively.
     * ### Harness and skill versions
     * `harness.type` indicates the runtime framework determined at creation. For qodercli, `connectorServiceAccountKey` returns the ID of the bound account key record and does not return the original key.
     * `configuredSkills` refers to explicitly configured skills. `skills` includes the aggregated results of template and explicit configurations. `resolvedVersion` is the current target version, and `appliedVersion` is the version currently in effect at runtime. These two may differ during an update. `fromTemplate=true` indicates that the skill comes from a template.
     * If you query an agent that does not exist, has been deleted, or does not belong to the specified workspace, a resource not found error is returned.
     *
     * @param request - GetManagedAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetManagedAgentResponse
     *
     * @param string                 $workspaceId
     * @param string                 $agentId
     * @param GetManagedAgentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetManagedAgentResponse
     */
    public function getManagedAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetManagedAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetManagedAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the latest configuration, Harness and skill versions, configuration processing status, and running instance statistics of a managed Harness agent.
     *
     * @remarks
     * Queries the configuration, skill versions, and running status of a managed Harness agent to view the current configuration and its processing results.
     * ### Configuration and running status
     * This operation returns the latest submitted configuration, which may still be processing. Use the following fields to determine the update progress and running status:
     * | Field | Purpose |
     * | --- | --- |
     * | `latestSpecVersion` | The latest submitted desired configuration version. |
     * | `latestVersionStatus` | The processing status of the desired version. |
     * | `status` | The overall status of the agent. |
     * | `sandboxPhaseCounts` | The current snapshot of the number of instances in each phase. |
     * Successful configuration processing does not mean that all old instances have been replaced. To view specific instances or active sessions, call [ListSandboxes](https://api.aliyun.com/document/AgentCore/2026-08-04/ListSandboxes) and [ListSandboxSessions](https://api.aliyun.com/document/AgentCore/2026-08-04/ListSandboxSessions) respectively.
     * ### Harness and skill versions
     * `harness.type` indicates the runtime framework determined at creation. For qodercli, `connectorServiceAccountKey` returns the ID of the bound account key record and does not return the original key.
     * `configuredSkills` refers to explicitly configured skills. `skills` includes the aggregated results of template and explicit configurations. `resolvedVersion` is the current target version, and `appliedVersion` is the version currently in effect at runtime. These two may differ during an update. `fromTemplate=true` indicates that the skill comes from a template.
     * If you query an agent that does not exist, has been deleted, or does not belong to the specified workspace, a resource not found error is returned.
     *
     * @param request - GetManagedAgentRequest
     *
     * @returns GetManagedAgentResponse
     *
     * @param string                 $workspaceId
     * @param string                 $agentId
     * @param GetManagedAgentRequest $request
     *
     * @return GetManagedAgentResponse
     */
    public function getManagedAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getManagedAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified MCP service, such as the address, type, status, authentication configuration, and protocol.
     *
     * @remarks
     * Queries the details of a specified MCP service, such as the address, type, status, authentication configuration, and protocol.
     *
     * @param request - GetMcpRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcpResponse
     *
     * @param string         $workspaceId
     * @param string         $mcpServerId
     * @param GetMcpRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMcpResponse
     */
    public function getMcpWithOptions($workspaceId, $mcpServerId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMcp',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified MCP service, such as the address, type, status, authentication configuration, and protocol.
     *
     * @remarks
     * Queries the details of a specified MCP service, such as the address, type, status, authentication configuration, and protocol.
     *
     * @param request - GetMcpRequest
     *
     * @returns GetMcpResponse
     *
     * @param string        $workspaceId
     * @param string        $mcpServerId
     * @param GetMcpRequest $request
     *
     * @return GetMcpResponse
     */
    public function getMcp($workspaceId, $mcpServerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMcpWithOptions($workspaceId, $mcpServerId, $request, $headers, $runtime);
    }

    /**
     * Returns a time-limited presigned upload URL and a temporary code package token. After the upload is complete, the token can be used to create or update a code deployment.
     *
     * @remarks
     * Retrieves a temporary upload URL for a local MCP code package to create or update an MCP service of the code deployment type.
     * ### Upload and deployment steps
     * **Step 1:** Prepare a ZIP code package, enter the file name in `fileName`, and call this operation to obtain the upload information.
     * **Step 2:** Use the returned `uploadMethod`, `uploadUrl`, and `headers` to upload the file content. The package size cannot exceed `maxSize`. The current limit is 50 MiB (52,428,800 bytes).
     * **Step 3:** After the upload is complete, submit the `codePackageToken` to the code deployment configuration in [CreateMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateMcp) or [UpdateMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateMcp).
     * **Step 4:** After submitting the deployment, query the service status by calling [GetMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcp).
     * ### Validity period
     * For the expiration time of the upload URL, see `expiresAt`. For the expiration time of the temporary code package, see `artifactExpiresAt`. Complete the upload and deployment within the corresponding periods. If the upload URL expires, retrieve it again.
     *
     * @param tmpReq - GetMcpCodePackageUploadUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcpCodePackageUploadUrlResponse
     *
     * @param string                            $workspaceId
     * @param GetMcpCodePackageUploadUrlRequest $tmpReq
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMcpCodePackageUploadUrlResponse
     */
    public function getMcpCodePackageUploadUrlWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMcpCodePackageUploadUrlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcpCodePackageUploadUrl',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-server-actions/get-code-package-upload-url',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcpCodePackageUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns a time-limited presigned upload URL and a temporary code package token. After the upload is complete, the token can be used to create or update a code deployment.
     *
     * @remarks
     * Retrieves a temporary upload URL for a local MCP code package to create or update an MCP service of the code deployment type.
     * ### Upload and deployment steps
     * **Step 1:** Prepare a ZIP code package, enter the file name in `fileName`, and call this operation to obtain the upload information.
     * **Step 2:** Use the returned `uploadMethod`, `uploadUrl`, and `headers` to upload the file content. The package size cannot exceed `maxSize`. The current limit is 50 MiB (52,428,800 bytes).
     * **Step 3:** After the upload is complete, submit the `codePackageToken` to the code deployment configuration in [CreateMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateMcp) or [UpdateMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateMcp).
     * **Step 4:** After submitting the deployment, query the service status by calling [GetMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcp).
     * ### Validity period
     * For the expiration time of the upload URL, see `expiresAt`. For the expiration time of the temporary code package, see `artifactExpiresAt`. Complete the upload and deployment within the corresponding periods. If the upload URL expires, retrieve it again.
     *
     * @param request - GetMcpCodePackageUploadUrlRequest
     *
     * @returns GetMcpCodePackageUploadUrlResponse
     *
     * @param string                            $workspaceId
     * @param GetMcpCodePackageUploadUrlRequest $request
     *
     * @return GetMcpCodePackageUploadUrlResponse
     */
    public function getMcpCodePackageUploadUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMcpCodePackageUploadUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of an MCP marketplace template.
     *
     * @remarks
     * Queries the capabilities, parameters, and version information of an MCP marketplace template to help you select a template and prepare for installation and configuration.
     * Returns the current template version and the installation form schema.
     *
     * @param request - GetMcpMarketItemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcpMarketItemResponse
     *
     * @param string                  $workspaceId
     * @param string                  $marketItemId
     * @param GetMcpMarketItemRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetMcpMarketItemResponse
     */
    public function getMcpMarketItemWithOptions($workspaceId, $marketItemId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMcpMarketItem',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-market/items/' . Url::percentEncode($marketItemId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMcpMarketItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an MCP marketplace template.
     *
     * @remarks
     * Queries the capabilities, parameters, and version information of an MCP marketplace template to help you select a template and prepare for installation and configuration.
     * Returns the current template version and the installation form schema.
     *
     * @param request - GetMcpMarketItemRequest
     *
     * @returns GetMcpMarketItemResponse
     *
     * @param string                  $workspaceId
     * @param string                  $marketItemId
     * @param GetMcpMarketItemRequest $request
     *
     * @return GetMcpMarketItemResponse
     */
    public function getMcpMarketItem($workspaceId, $marketItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMcpMarketItemWithOptions($workspaceId, $marketItemId, $request, $headers, $runtime);
    }

    /**
     * Queries a long-term memory by memory ID.
     *
     * @remarks
     * Queries a long-term memory by memory ID.
     *
     * @param request - GetMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryResponse
     *
     * @param string           $workspaceId
     * @param string           $memoryStoreName
     * @param string           $memoryId
     * @param GetMemoryRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetMemoryResponse
     */
    public function getMemoryWithOptions($workspaceId, $memoryStoreName, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemory',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a long-term memory by memory ID.
     *
     * @remarks
     * Queries a long-term memory by memory ID.
     *
     * @param request - GetMemoryRequest
     *
     * @returns GetMemoryResponse
     *
     * @param string           $workspaceId
     * @param string           $memoryStoreName
     * @param string           $memoryId
     * @param GetMemoryRequest $request
     *
     * @return GetMemoryResponse
     */
    public function getMemory($workspaceId, $memoryStoreName, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryWithOptions($workspaceId, $memoryStoreName, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Queries the public information and current status of a MemoryStore in a specified workspace.
     *
     * @remarks
     * Queries the configuration and current status of a long-term memory store (MemoryStore) for viewing memory store information.
     *
     * @param request - GetMemoryStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryStoreResponse
     *
     * @param string                $workspaceId
     * @param string                $memoryStoreName
     * @param GetMemoryStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetMemoryStoreResponse
     */
    public function getMemoryStoreWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryStore',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the public information and current status of a MemoryStore in a specified workspace.
     *
     * @remarks
     * Queries the configuration and current status of a long-term memory store (MemoryStore) for viewing memory store information.
     *
     * @param request - GetMemoryStoreRequest
     *
     * @returns GetMemoryStoreResponse
     *
     * @param string                $workspaceId
     * @param string                $memoryStoreName
     * @param GetMemoryStoreRequest $request
     *
     * @return GetMemoryStoreResponse
     */
    public function getMemoryStore($workspaceId, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryStoreWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Queries the task ID returned by the asynchronous AddMemories operation.
     *
     * @remarks
     * Queries the progress and results of a memory extraction task by using the `taskId` returned by the asynchronous [AddMemories](https://api.aliyun.com/document/AgentCore/2026-08-04/AddMemories) operation.
     *
     * @param request - GetMemoryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryTaskResponse
     *
     * @param string               $workspaceId
     * @param string               $memoryStoreName
     * @param string               $taskId
     * @param GetMemoryTaskRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetMemoryTaskResponse
     */
    public function getMemoryTaskWithOptions($workspaceId, $memoryStoreName, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryTask',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/memory-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the task ID returned by the asynchronous AddMemories operation.
     *
     * @remarks
     * Queries the progress and results of a memory extraction task by using the `taskId` returned by the asynchronous [AddMemories](https://api.aliyun.com/document/AgentCore/2026-08-04/AddMemories) operation.
     *
     * @param request - GetMemoryTaskRequest
     *
     * @returns GetMemoryTaskResponse
     *
     * @param string               $workspaceId
     * @param string               $memoryStoreName
     * @param string               $taskId
     * @param GetMemoryTaskRequest $request
     *
     * @return GetMemoryTaskResponse
     */
    public function getMemoryTask($workspaceId, $memoryStoreName, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryTaskWithOptions($workspaceId, $memoryStoreName, $taskId, $request, $headers, $runtime);
    }

    /**
     * Queries the detailed configuration and region of a model in a specified workspace.
     *
     * @remarks
     * Queries the detailed configuration and region of a model in a specified workspace.
     *
     * @param request - GetModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelResponse
     *
     * @param string          $workspaceId
     * @param string          $modelId
     * @param GetModelRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetModelResponse
     */
    public function getModelWithOptions($workspaceId, $modelId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/models/' . Url::percentEncode($modelId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed configuration and region of a model in a specified workspace.
     *
     * @remarks
     * Queries the detailed configuration and region of a model in a specified workspace.
     *
     * @param request - GetModelRequest
     *
     * @returns GetModelResponse
     *
     * @param string          $workspaceId
     * @param string          $modelId
     * @param GetModelRequest $request
     *
     * @return GetModelResponse
     */
    public function getModel($workspaceId, $modelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelWithOptions($workspaceId, $modelId, $request, $headers, $runtime);
    }

    /**
     * Queries the detailed configuration, credential configuration status, publish status, and region of a specified model connection.
     *
     * @remarks
     * Queries the detailed configuration, credential configuration status, publish status, and region of a specified model connection.
     *
     * @param request - GetModelConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelConnectionResponse
     *
     * @param string                    $workspaceId
     * @param string                    $connectionId
     * @param GetModelConnectionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetModelConnectionResponse
     */
    public function getModelConnectionWithOptions($workspaceId, $connectionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModelConnection',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/model-connections/' . Url::percentEncode($connectionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModelConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed configuration, credential configuration status, publish status, and region of a specified model connection.
     *
     * @remarks
     * Queries the detailed configuration, credential configuration status, publish status, and region of a specified model connection.
     *
     * @param request - GetModelConnectionRequest
     *
     * @returns GetModelConnectionResponse
     *
     * @param string                    $workspaceId
     * @param string                    $connectionId
     * @param GetModelConnectionRequest $request
     *
     * @return GetModelConnectionResponse
     */
    public function getModelConnection($workspaceId, $connectionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelConnectionWithOptions($workspaceId, $connectionId, $request, $headers, $runtime);
    }

    /**
     * Queries the overall result of a specified sandbox rebuild task. Always use the initial operationId returned by RebuildSandbox without tracking the rebuild task and subsequent creation tasks separately. Only the SUCCEEDED status indicates completion. Do not treat UNKNOWN, missing status, or query exceptions as success, and do not automatically resubmit the rebuild.
     *
     * @remarks
     * Always use the initial operationId returned by RebuildSandbox for queries. Magic aggregates and returns the rebuildOutcome result from Runtime Manager, so the frontend does not need to track Claim tasks. Only SUCCEEDED indicates overall completion. UNKNOWN, missing fields, or query exceptions must not be treated as success, and the rebuild must not be automatically resubmitted. You can specify the endpoint runtime version by using serviceEndpointId. If omitted, the default latest runtime identity is used.
     *
     * @param request - GetSandboxRebuildOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSandboxRebuildOperationResponse
     *
     * @param string                            $workspaceId
     * @param string                            $agentId
     * @param string                            $sandboxId
     * @param string                            $operationId
     * @param GetSandboxRebuildOperationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSandboxRebuildOperationResponse
     */
    public function getSandboxRebuildOperationWithOptions($workspaceId, $agentId, $sandboxId, $operationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceEndpointId) {
            @$query['serviceEndpointId'] = $request->serviceEndpointId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSandboxRebuildOperation',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents/' . Url::percentEncode($agentId) . '/sandboxes/' . Url::percentEncode($sandboxId) . '/rebuild-operations/' . Url::percentEncode($operationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSandboxRebuildOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the overall result of a specified sandbox rebuild task. Always use the initial operationId returned by RebuildSandbox without tracking the rebuild task and subsequent creation tasks separately. Only the SUCCEEDED status indicates completion. Do not treat UNKNOWN, missing status, or query exceptions as success, and do not automatically resubmit the rebuild.
     *
     * @remarks
     * Always use the initial operationId returned by RebuildSandbox for queries. Magic aggregates and returns the rebuildOutcome result from Runtime Manager, so the frontend does not need to track Claim tasks. Only SUCCEEDED indicates overall completion. UNKNOWN, missing fields, or query exceptions must not be treated as success, and the rebuild must not be automatically resubmitted. You can specify the endpoint runtime version by using serviceEndpointId. If omitted, the default latest runtime identity is used.
     *
     * @param request - GetSandboxRebuildOperationRequest
     *
     * @returns GetSandboxRebuildOperationResponse
     *
     * @param string                            $workspaceId
     * @param string                            $agentId
     * @param string                            $sandboxId
     * @param string                            $operationId
     * @param GetSandboxRebuildOperationRequest $request
     *
     * @return GetSandboxRebuildOperationResponse
     */
    public function getSandboxRebuildOperation($workspaceId, $agentId, $sandboxId, $operationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSandboxRebuildOperationWithOptions($workspaceId, $agentId, $sandboxId, $operationId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified service endpoint, including the target route, access URLs, authentication configuration, and current status.
     *
     * @remarks
     * Queries the service endpoint of an agent or collaboration component to obtain stable access URLs, authentication configuration, and current status.
     * A service endpoint associates access URLs with a specified agent version or workspace collaboration component. You can use the target route and URL list in the response to verify the access target.
     *
     * @param request - GetServiceEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceEndpointResponse
     *
     * @param string                    $workspaceId
     * @param string                    $serviceEndpointId
     * @param GetServiceEndpointRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceEndpointResponse
     */
    public function getServiceEndpointWithOptions($workspaceId, $serviceEndpointId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetServiceEndpoint',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/service-endpoints/' . Url::percentEncode($serviceEndpointId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified service endpoint, including the target route, access URLs, authentication configuration, and current status.
     *
     * @remarks
     * Queries the service endpoint of an agent or collaboration component to obtain stable access URLs, authentication configuration, and current status.
     * A service endpoint associates access URLs with a specified agent version or workspace collaboration component. You can use the target route and URL list in the response to verify the access target.
     *
     * @param request - GetServiceEndpointRequest
     *
     * @returns GetServiceEndpointResponse
     *
     * @param string                    $workspaceId
     * @param string                    $serviceEndpointId
     * @param GetServiceEndpointRequest $request
     *
     * @return GetServiceEndpointResponse
     */
    public function getServiceEndpoint($workspaceId, $serviceEndpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceEndpointWithOptions($workspaceId, $serviceEndpointId, $request, $headers, $runtime);
    }

    /**
     * Queries the active API key and its invocation method for a service endpoint in a specified workspace.
     *
     * @remarks
     * Retrieves the active API key and invocation method of a service endpoint for external applications to access the endpoint.
     * The endpoint must have `API_KEY` authentication enabled and access credentials ready. Securely store the returned API key.
     *
     * @param request - GetServiceEndpointApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceEndpointApiKeyResponse
     *
     * @param string                          $workspaceId
     * @param string                          $serviceEndpointId
     * @param GetServiceEndpointApiKeyRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetServiceEndpointApiKeyResponse
     */
    public function getServiceEndpointApiKeyWithOptions($workspaceId, $serviceEndpointId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetServiceEndpointApiKey',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/service-endpoints/' . Url::percentEncode($serviceEndpointId) . '/api-key/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceEndpointApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the active API key and its invocation method for a service endpoint in a specified workspace.
     *
     * @remarks
     * Retrieves the active API key and invocation method of a service endpoint for external applications to access the endpoint.
     * The endpoint must have `API_KEY` authentication enabled and access credentials ready. Securely store the returned API key.
     *
     * @param request - GetServiceEndpointApiKeyRequest
     *
     * @returns GetServiceEndpointApiKeyResponse
     *
     * @param string                          $workspaceId
     * @param string                          $serviceEndpointId
     * @param GetServiceEndpointApiKeyRequest $request
     *
     * @return GetServiceEndpointApiKeyResponse
     */
    public function getServiceEndpointApiKey($workspaceId, $serviceEndpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceEndpointApiKeyWithOptions($workspaceId, $serviceEndpointId, $request, $headers, $runtime);
    }

    /**
     * Queries the basic information, version status, tags, visibility scope, and version list of a specified skill.
     *
     * @remarks
     * Queries the basic information, version status, tags, visibility scope, and version list of a specified skill.
     *
     * @param request - GetSkillDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillDetailResponse
     *
     * @param string                $workspaceId
     * @param string                $skillName
     * @param GetSkillDetailRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetSkillDetailResponse
     */
    public function getSkillDetailWithOptions($workspaceId, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSkillDetail',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSkillDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information, version status, tags, visibility scope, and version list of a specified skill.
     *
     * @remarks
     * Queries the basic information, version status, tags, visibility scope, and version list of a specified skill.
     *
     * @param request - GetSkillDetailRequest
     *
     * @returns GetSkillDetailResponse
     *
     * @param string                $workspaceId
     * @param string                $skillName
     * @param GetSkillDetailRequest $request
     *
     * @return GetSkillDetailResponse
     */
    public function getSkillDetail($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSkillDetailWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the Object Storage Service (OSS) presigned upload URL and object name required to import a skill ZIP package. After the upload is complete, you can call the skill OSS upload API operation to complete the import.
     *
     * @remarks
     * Retrieves the upload URL for a skill ZIP package to import a skill from a local file.
     * Files are transferred through OSS. Upload the file by using the returned URL, and then call [UploadSkillViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/UploadSkillViaOss) to complete the import. To check the package content and conflicts, call [PrecheckSkillUploadViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/PrecheckSkillUploadViaOss) first.
     *
     * @param request - GetSkillImportFileUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillImportFileUrlResponse
     *
     * @param string                       $workspaceId
     * @param GetSkillImportFileUrlRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetSkillImportFileUrlResponse
     */
    public function getSkillImportFileUrlWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contentType) {
            @$query['contentType'] = $request->contentType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillImportFileUrl',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skill-actions/get-import-file-url',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSkillImportFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the Object Storage Service (OSS) presigned upload URL and object name required to import a skill ZIP package. After the upload is complete, you can call the skill OSS upload API operation to complete the import.
     *
     * @remarks
     * Retrieves the upload URL for a skill ZIP package to import a skill from a local file.
     * Files are transferred through OSS. Upload the file by using the returned URL, and then call [UploadSkillViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/UploadSkillViaOss) to complete the import. To check the package content and conflicts, call [PrecheckSkillUploadViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/PrecheckSkillUploadViaOss) first.
     *
     * @param request - GetSkillImportFileUrlRequest
     *
     * @returns GetSkillImportFileUrlResponse
     *
     * @param string                       $workspaceId
     * @param GetSkillImportFileUrlRequest $request
     *
     * @return GetSkillImportFileUrlResponse
     */
    public function getSkillImportFileUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSkillImportFileUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the complete details of a specified skill version, including version metadata, skill content, and associated resources.
     *
     * @remarks
     * Queries the complete details of a specified skill version, including version metadata, skill content, and associated resources.
     *
     * @param request - GetSkillVersionDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillVersionDetailResponse
     *
     * @param string                       $workspaceId
     * @param string                       $skillName
     * @param string                       $skillVersion
     * @param GetSkillVersionDetailRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetSkillVersionDetailResponse
     */
    public function getSkillVersionDetailWithOptions($workspaceId, $skillName, $skillVersion, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSkillVersionDetail',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/versions/' . Url::percentEncode($skillVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSkillVersionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the complete details of a specified skill version, including version metadata, skill content, and associated resources.
     *
     * @remarks
     * Queries the complete details of a specified skill version, including version metadata, skill content, and associated resources.
     *
     * @param request - GetSkillVersionDetailRequest
     *
     * @returns GetSkillVersionDetailResponse
     *
     * @param string                       $workspaceId
     * @param string                       $skillName
     * @param string                       $skillVersion
     * @param GetSkillVersionDetailRequest $request
     *
     * @return GetSkillVersionDetailResponse
     */
    public function getSkillVersionDetail($workspaceId, $skillName, $skillVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSkillVersionDetailWithOptions($workspaceId, $skillName, $skillVersion, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified team, including the complete attributes and team roles of each user and agent member in the team.
     *
     * @remarks
     * Queries the details of a specified team, including the complete attributes and team roles of each user and agent member in the team.
     *
     * @param request - GetTeamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTeamResponse
     *
     * @param string         $workspaceId
     * @param string         $teamId
     * @param GetTeamRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTeamResponse
     */
    public function getTeamWithOptions($workspaceId, $teamId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTeam',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/teams/' . Url::percentEncode($teamId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified team, including the complete attributes and team roles of each user and agent member in the team.
     *
     * @remarks
     * Queries the details of a specified team, including the complete attributes and team roles of each user and agent member in the team.
     *
     * @param request - GetTeamRequest
     *
     * @returns GetTeamResponse
     *
     * @param string         $workspaceId
     * @param string         $teamId
     * @param GetTeamRequest $request
     *
     * @return GetTeamResponse
     */
    public function getTeam($workspaceId, $teamId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTeamWithOptions($workspaceId, $teamId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specific user in a specified workspace. Returns an error if the user does not exist.
     *
     * @remarks
     * Queries the details of a specific user in a specified workspace.
     *
     * @param request - GetUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param string         $workspaceId
     * @param string         $agentCoreUserId
     * @param GetUserRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($workspaceId, $agentCoreUserId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/users/' . Url::percentEncode($agentCoreUserId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific user in a specified workspace. Returns an error if the user does not exist.
     *
     * @remarks
     * Queries the details of a specific user in a specified workspace.
     *
     * @param request - GetUserRequest
     *
     * @returns GetUserResponse
     *
     * @param string         $workspaceId
     * @param string         $agentCoreUserId
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($workspaceId, $agentCoreUserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($workspaceId, $agentCoreUserId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a workspace by workspace ID, including the lifecycle status, CMS workspace, AI registry namespace, and current network policies.
     *
     * @remarks
     * Queries the basic information, associated resources, and network configurations of a workspace for status viewing or configuration verification.
     * The returned information includes the lifecycle status, associated observability workspace, AI registry namespace, and current network policies.
     *
     * @param request - GetWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceResponse
     *
     * @param string              $workspaceId
     * @param GetWorkspaceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkspace',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a workspace by workspace ID, including the lifecycle status, CMS workspace, AI registry namespace, and current network policies.
     *
     * @remarks
     * Queries the basic information, associated resources, and network configurations of a workspace for status viewing or configuration verification.
     * The returned information includes the lifecycle status, associated observability workspace, AI registry namespace, and current network policies.
     *
     * @param request - GetWorkspaceRequest
     *
     * @returns GetWorkspaceResponse
     *
     * @param string              $workspaceId
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Generates a RAM authorization link for the workspace resource role to pull images from a specified ACR Enterprise Edition repository.
     *
     * @remarks
     * Generates an authorization link for the workspace resource role to pull images from a specified ACR Enterprise Edition repository, allowing you to complete access authorization before image deployment.
     * ### Request parameters
     * The `workspaceId` parameter specifies the workspace. The `acrInstanceId`, `namespace`, and `repository` parameters are passed as query parameters. The `repository` parameter specifies the repository name without the namespace.
     * ### Complete authorization
     * Open the `authorizeUrl` in the response and confirm the authorization. Then, call [VerifyWorkspaceAcrRamAuthorization](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyWorkspaceAcrRamAuthorization) to check the binding status. The role is selected by the server. The `roleName` and `roleSource` parameters indicate the selected role and its source, but do not indicate that the authorization is complete.
     * This authorization is used for ACR image deployment of custom agents and reading image cache sources. Obtaining the link itself does not pull images or create caches.
     *
     * @param request - GetWorkspaceAcrRamAuthorizeUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceAcrRamAuthorizeUrlResponse
     *
     * @param string                                $workspaceId
     * @param GetWorkspaceAcrRamAuthorizeUrlRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetWorkspaceAcrRamAuthorizeUrlResponse
     */
    public function getWorkspaceAcrRamAuthorizeUrlWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrInstanceId) {
            @$query['acrInstanceId'] = $request->acrInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->repository) {
            @$query['repository'] = $request->repository;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkspaceAcrRamAuthorizeUrl',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/acr/authorize',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceAcrRamAuthorizeUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a RAM authorization link for the workspace resource role to pull images from a specified ACR Enterprise Edition repository.
     *
     * @remarks
     * Generates an authorization link for the workspace resource role to pull images from a specified ACR Enterprise Edition repository, allowing you to complete access authorization before image deployment.
     * ### Request parameters
     * The `workspaceId` parameter specifies the workspace. The `acrInstanceId`, `namespace`, and `repository` parameters are passed as query parameters. The `repository` parameter specifies the repository name without the namespace.
     * ### Complete authorization
     * Open the `authorizeUrl` in the response and confirm the authorization. Then, call [VerifyWorkspaceAcrRamAuthorization](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyWorkspaceAcrRamAuthorization) to check the binding status. The role is selected by the server. The `roleName` and `roleSource` parameters indicate the selected role and its source, but do not indicate that the authorization is complete.
     * This authorization is used for ACR image deployment of custom agents and reading image cache sources. Obtaining the link itself does not pull images or create caches.
     *
     * @param request - GetWorkspaceAcrRamAuthorizeUrlRequest
     *
     * @returns GetWorkspaceAcrRamAuthorizeUrlResponse
     *
     * @param string                                $workspaceId
     * @param GetWorkspaceAcrRamAuthorizeUrlRequest $request
     *
     * @return GetWorkspaceAcrRamAuthorizeUrlResponse
     */
    public function getWorkspaceAcrRamAuthorizeUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceAcrRamAuthorizeUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the RAM authorization page URL to grant the workspace resource role access to a specified AgenticFS access point before configuring NAS storage mounting for an agent.
     *
     * @remarks
     * Retrieves the AgenticFS mount authorization link to enable agents in the workspace to access a specified file space.
     * [AgenticFS](https://www.alibabacloud.com/help/en/nas/product-overview/agenticfs-overview) is a storage type of Apsara File Storage NAS designed for AI agents. It can be used to persistently store files used by agents. AgenticSpace is the file space within it, and an access point provides the mount entry.
     * ### Authorization and mounting steps
     * **Step 1:** Prepare a file system, an AgenticSpace, and an access point in NAS, and obtain the file system ID, access point ID, and domain name.
     * **Step 2:** Submit `fileSystemId`, `accessPointId`, and `server` as query parameters. For `server`, enter the access point domain name returned by the NAS `ListAccessPoints` operation, without the protocol, port, or path.
     * **Step 3:** Open the returned `authorizeUrl` to complete the authorization for the workspace resource role.
     * **Step 4:** Check the authorization status by calling [VerifyWorkspaceAgenticFsMountRamAuthorization](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyWorkspaceAgenticFsMountRamAuthorization).
     * **Step 5:** When creating or updating a custom code or image agent, or a managed Harness agent, enter the access point domain name, the relative directory `path`, and the container mount path `mountPath` in `agenticFsMounts`.
     * The access point must be located in the VPC associated with the workspace, and VPC access must be enabled for the agent. The mount directory must already exist. Use a non-empty relative directory within the access point for `path`, and use an absolute path within the container for `mountPath`.
     *
     * @param request - GetWorkspaceAgenticFsMountRamAuthorizeUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceAgenticFsMountRamAuthorizeUrlResponse
     *
     * @param string                                           $workspaceId
     * @param GetWorkspaceAgenticFsMountRamAuthorizeUrlRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return GetWorkspaceAgenticFsMountRamAuthorizeUrlResponse
     */
    public function getWorkspaceAgenticFsMountRamAuthorizeUrlWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPointId) {
            @$query['accessPointId'] = $request->accessPointId;
        }

        if (null !== $request->fileSystemId) {
            @$query['fileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->server) {
            @$query['server'] = $request->server;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkspaceAgenticFsMountRamAuthorizeUrl',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agentic-fs/authorize',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceAgenticFsMountRamAuthorizeUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the RAM authorization page URL to grant the workspace resource role access to a specified AgenticFS access point before configuring NAS storage mounting for an agent.
     *
     * @remarks
     * Retrieves the AgenticFS mount authorization link to enable agents in the workspace to access a specified file space.
     * [AgenticFS](https://www.alibabacloud.com/help/en/nas/product-overview/agenticfs-overview) is a storage type of Apsara File Storage NAS designed for AI agents. It can be used to persistently store files used by agents. AgenticSpace is the file space within it, and an access point provides the mount entry.
     * ### Authorization and mounting steps
     * **Step 1:** Prepare a file system, an AgenticSpace, and an access point in NAS, and obtain the file system ID, access point ID, and domain name.
     * **Step 2:** Submit `fileSystemId`, `accessPointId`, and `server` as query parameters. For `server`, enter the access point domain name returned by the NAS `ListAccessPoints` operation, without the protocol, port, or path.
     * **Step 3:** Open the returned `authorizeUrl` to complete the authorization for the workspace resource role.
     * **Step 4:** Check the authorization status by calling [VerifyWorkspaceAgenticFsMountRamAuthorization](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyWorkspaceAgenticFsMountRamAuthorization).
     * **Step 5:** When creating or updating a custom code or image agent, or a managed Harness agent, enter the access point domain name, the relative directory `path`, and the container mount path `mountPath` in `agenticFsMounts`.
     * The access point must be located in the VPC associated with the workspace, and VPC access must be enabled for the agent. The mount directory must already exist. Use a non-empty relative directory within the access point for `path`, and use an absolute path within the container for `mountPath`.
     *
     * @param request - GetWorkspaceAgenticFsMountRamAuthorizeUrlRequest
     *
     * @returns GetWorkspaceAgenticFsMountRamAuthorizeUrlResponse
     *
     * @param string                                           $workspaceId
     * @param GetWorkspaceAgenticFsMountRamAuthorizeUrlRequest $request
     *
     * @return GetWorkspaceAgenticFsMountRamAuthorizeUrlResponse
     */
    public function getWorkspaceAgenticFsMountRamAuthorizeUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceAgenticFsMountRamAuthorizeUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the activation status and configuration of a specified component in a workspace. The collaboration value corresponds to the Collaboration component displayed in the console.
     *
     * @remarks
     * Queries the status and configuration of the workspace collaboration component to check whether the component is activated and whether the configuration takes effect.
     * Use `pluginName=collaboration` to specify the collaboration component. To activate the component, call [InstallWorkspacePlugin](https://api.aliyun.com/document/AgentCore/2026-08-04/InstallWorkspacePlugin).
     *
     * @param request - GetWorkspacePluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspacePluginResponse
     *
     * @param string                    $workspaceId
     * @param string                    $pluginName
     * @param GetWorkspacePluginRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetWorkspacePluginResponse
     */
    public function getWorkspacePluginWithOptions($workspaceId, $pluginName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkspacePlugin',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/plugins/' . Url::percentEncode($pluginName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspacePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the activation status and configuration of a specified component in a workspace. The collaboration value corresponds to the Collaboration component displayed in the console.
     *
     * @remarks
     * Queries the status and configuration of the workspace collaboration component to check whether the component is activated and whether the configuration takes effect.
     * Use `pluginName=collaboration` to specify the collaboration component. To activate the component, call [InstallWorkspacePlugin](https://api.aliyun.com/document/AgentCore/2026-08-04/InstallWorkspacePlugin).
     *
     * @param request - GetWorkspacePluginRequest
     *
     * @returns GetWorkspacePluginResponse
     *
     * @param string                    $workspaceId
     * @param string                    $pluginName
     * @param GetWorkspacePluginRequest $request
     *
     * @return GetWorkspacePluginResponse
     */
    public function getWorkspacePlugin($workspaceId, $pluginName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspacePluginWithOptions($workspaceId, $pluginName, $request, $headers, $runtime);
    }

    /**
     * Installs an MCP marketplace template.
     *
     * @remarks
     * Creates an MCP service by using a marketplace template to reuse the tool capabilities and configurations provided by the template.
     * First, call [GetMcpMarketItem](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcpMarketItem) to view the template versions and required parameters, and then submit the configuration based on the selected version. After the service is created, call [GetMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcp) to query the service status.
     *
     * @param tmpReq - InstallMcpMarketItemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallMcpMarketItemResponse
     *
     * @param string                      $workspaceId
     * @param string                      $marketItemId
     * @param InstallMcpMarketItemRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InstallMcpMarketItemResponse
     */
    public function installMcpMarketItemWithOptions($workspaceId, $marketItemId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new InstallMcpMarketItemShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->templateVersion) {
            @$query['templateVersion'] = $request->templateVersion;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallMcpMarketItem',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-market/items/' . Url::percentEncode($marketItemId) . '/install',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallMcpMarketItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs an MCP marketplace template.
     *
     * @remarks
     * Creates an MCP service by using a marketplace template to reuse the tool capabilities and configurations provided by the template.
     * First, call [GetMcpMarketItem](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcpMarketItem) to view the template versions and required parameters, and then submit the configuration based on the selected version. After the service is created, call [GetMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcp) to query the service status.
     *
     * @param request - InstallMcpMarketItemRequest
     *
     * @returns InstallMcpMarketItemResponse
     *
     * @param string                      $workspaceId
     * @param string                      $marketItemId
     * @param InstallMcpMarketItemRequest $request
     *
     * @return InstallMcpMarketItemResponse
     */
    public function installMcpMarketItem($workspaceId, $marketItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installMcpMarketItemWithOptions($workspaceId, $marketItemId, $request, $headers, $runtime);
    }

    /**
     * Enables a component for a workspace. This operation corresponds to enabling the collaboration component in the console. After the component is enabled, you can query the component status and current configurations.
     *
     * @remarks
     * Enables the collaboration component for a workspace and configures initial settings such as the network.
     * Set pluginName=collaboration to specify the collaboration component. The enabling process is executed asynchronously. After submission, call [GetWorkspacePlugin](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspacePlugin) to check the component status and processing result.
     *
     * @param tmpReq - InstallWorkspacePluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallWorkspacePluginResponse
     *
     * @param string                        $workspaceId
     * @param string                        $pluginName
     * @param InstallWorkspacePluginRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return InstallWorkspacePluginResponse
     */
    public function installWorkspacePluginWithOptions($workspaceId, $pluginName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new InstallWorkspacePluginShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallWorkspacePlugin',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/plugins/' . Url::percentEncode($pluginName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallWorkspacePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a component for a workspace. This operation corresponds to enabling the collaboration component in the console. After the component is enabled, you can query the component status and current configurations.
     *
     * @remarks
     * Enables the collaboration component for a workspace and configures initial settings such as the network.
     * Set pluginName=collaboration to specify the collaboration component. The enabling process is executed asynchronously. After submission, call [GetWorkspacePlugin](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspacePlugin) to check the component status and processing result.
     *
     * @param request - InstallWorkspacePluginRequest
     *
     * @returns InstallWorkspacePluginResponse
     *
     * @param string                        $workspaceId
     * @param string                        $pluginName
     * @param InstallWorkspacePluginRequest $request
     *
     * @return InstallWorkspacePluginResponse
     */
    public function installWorkspacePlugin($workspaceId, $pluginName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installWorkspacePluginWithOptions($workspaceId, $pluginName, $request, $headers, $runtime);
    }

    /**
     * Queries the identity, name, and architecture of language runtime environments currently available for code package deployment by page.
     *
     * @remarks
     * Queries the available runtime environments for code package deployment of custom code or image agents, which is used to populate artifact.code.languageRuntime.
     * ### Select a runtime environment
     * Copy the languageRuntime value from the response exactly as is into the artifact.code.languageRuntime parameter of [CreateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateCustomAgent) or [UpdateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCustomAgent). The catalog is dynamically provided by the current platform version, and internal base image addresses are not returned.
     * ### Pagination rules
     * If maxResults is omitted or set to 0, the default value is 10. If the value is greater than 100, it is processed as 100. The value cannot be negative. Omit nextToken for the first request. For subsequent requests, use the token returned in the previous response and keep the workspace unchanged. An empty token indicates that the query is complete. If the token becomes invalid due to changes in the runtime environment catalog, restart the query from the first page.
     * Regular updates, restarts, and scale-outs of existing agents continue to use their saved runtime images. When you create an agent or switch the language runtime environment, the catalog currently returned by this operation prevails.
     *
     * @param request - ListAgentCodeRuntimesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentCodeRuntimesResponse
     *
     * @param string                       $workspaceId
     * @param ListAgentCodeRuntimesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListAgentCodeRuntimesResponse
     */
    public function listAgentCodeRuntimesWithOptions($workspaceId, $request, $headers, $runtime)
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
            'action' => 'ListAgentCodeRuntimes',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-code-runtimes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentCodeRuntimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the identity, name, and architecture of language runtime environments currently available for code package deployment by page.
     *
     * @remarks
     * Queries the available runtime environments for code package deployment of custom code or image agents, which is used to populate artifact.code.languageRuntime.
     * ### Select a runtime environment
     * Copy the languageRuntime value from the response exactly as is into the artifact.code.languageRuntime parameter of [CreateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateCustomAgent) or [UpdateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCustomAgent). The catalog is dynamically provided by the current platform version, and internal base image addresses are not returned.
     * ### Pagination rules
     * If maxResults is omitted or set to 0, the default value is 10. If the value is greater than 100, it is processed as 100. The value cannot be negative. Omit nextToken for the first request. For subsequent requests, use the token returned in the previous response and keep the workspace unchanged. An empty token indicates that the query is complete. If the token becomes invalid due to changes in the runtime environment catalog, restart the query from the first page.
     * Regular updates, restarts, and scale-outs of existing agents continue to use their saved runtime images. When you create an agent or switch the language runtime environment, the catalog currently returned by this operation prevails.
     *
     * @param request - ListAgentCodeRuntimesRequest
     *
     * @returns ListAgentCodeRuntimesResponse
     *
     * @param string                       $workspaceId
     * @param ListAgentCodeRuntimesRequest $request
     *
     * @return ListAgentCodeRuntimesResponse
     */
    public function listAgentCodeRuntimes($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentCodeRuntimesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the IM channels for a specified agent.
     *
     * @remarks
     * Queries the IM channels for a specified agent.
     *
     * @param request - ListAgentIMChannelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentIMChannelsResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentId
     * @param ListAgentIMChannelsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAgentIMChannelsResponse
     */
    public function listAgentIMChannelsWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelType) {
            @$query['channelType'] = $request->channelType;
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
            'action' => 'ListAgentIMChannels',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/im-channels',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentIMChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IM channels for a specified agent.
     *
     * @remarks
     * Queries the IM channels for a specified agent.
     *
     * @param request - ListAgentIMChannelsRequest
     *
     * @returns ListAgentIMChannelsResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentId
     * @param ListAgentIMChannelsRequest $request
     *
     * @return ListAgentIMChannelsResponse
     */
    public function listAgentIMChannels($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentIMChannelsWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Performs a paging query of AgentSpecs in a specified workspace, and supports name search, sorting, and filtering by owner, visibility scope, and business labels.
     *
     * @remarks
     * Performs a paging query of Agent templates in a specified workspace, and supports name search, sorting, and filtering by owner, visibility scope, and business labels.
     *
     * @param request - ListAgentSpecsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentSpecsResponse
     *
     * @param string                $workspaceId
     * @param ListAgentSpecsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAgentSpecsResponse
     */
    public function listAgentSpecsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpecName) {
            @$query['agentSpecName'] = $request->agentSpecName;
        }

        if (null !== $request->bizTag) {
            @$query['bizTag'] = $request->bizTag;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->owner) {
            @$query['owner'] = $request->owner;
        }

        if (null !== $request->pageNo) {
            @$query['pageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->scope) {
            @$query['scope'] = $request->scope;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->withCapabilities) {
            @$query['withCapabilities'] = $request->withCapabilities;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentSpecs',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query of AgentSpecs in a specified workspace, and supports name search, sorting, and filtering by owner, visibility scope, and business labels.
     *
     * @remarks
     * Performs a paging query of Agent templates in a specified workspace, and supports name search, sorting, and filtering by owner, visibility scope, and business labels.
     *
     * @param request - ListAgentSpecsRequest
     *
     * @returns ListAgentSpecsResponse
     *
     * @param string                $workspaceId
     * @param ListAgentSpecsRequest $request
     *
     * @return ListAgentSpecsResponse
     */
    public function listAgentSpecs($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentSpecsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the teams to which specified agents belong. Specify the agent IDs to query by using agentIds. The response includes the membership information of each agent in its teams, such as the team ID, team name, and the role of the agent in the team.
     *
     * @remarks
     * Queries the teams to which specified agents belong.
     *
     * @param tmpReq - ListAgentTeamsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentTeamsResponse
     *
     * @param string                $workspaceId
     * @param ListAgentTeamsRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAgentTeamsResponse
     */
    public function listAgentTeamsWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAgentTeamsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAgentTeams',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-team-memberships',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentTeamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the teams to which specified agents belong. Specify the agent IDs to query by using agentIds. The response includes the membership information of each agent in its teams, such as the team ID, team name, and the role of the agent in the team.
     *
     * @remarks
     * Queries the teams to which specified agents belong.
     *
     * @param request - ListAgentTeamsRequest
     *
     * @returns ListAgentTeamsResponse
     *
     * @param string                $workspaceId
     * @param ListAgentTeamsRequest $request
     *
     * @return ListAgentTeamsResponse
     */
    public function listAgentTeams($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentTeamsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of agent versions.
     *
     * @remarks
     * Performs a paged query for saved fixed versions of a specified managed or custom agent. The paging results are returned in descending order of creation time and do not include the latest version under system maintenance. List items do not return the configuration. To view the configuration, invoke GetAgentVersion.
     *
     * @param request - ListAgentVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentVersionsResponse
     *
     * @param string                   $workspaceId
     * @param string                   $agentId
     * @param ListAgentVersionsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAgentVersionsResponse
     */
    public function listAgentVersionsWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
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
            'action' => 'ListAgentVersions',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of agent versions.
     *
     * @remarks
     * Performs a paged query for saved fixed versions of a specified managed or custom agent. The paging results are returned in descending order of creation time and do not include the latest version under system maintenance. List items do not return the configuration. To view the configuration, invoke GetAgentVersion.
     *
     * @param request - ListAgentVersionsRequest
     *
     * @returns ListAgentVersionsResponse
     *
     * @param string                   $workspaceId
     * @param string                   $agentId
     * @param ListAgentVersionsRequest $request
     *
     * @return ListAgentVersionsResponse
     */
    public function listAgentVersions($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentVersionsWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Queries the official and enterprise models available for the enabled QoderCLI connector. The service retrieves models in real time by using the saved API key and organization ID, and deduplicates them by model ID.
     *
     * @remarks
     * Queries the official and enterprise models available for the enabled QoderCLI connector.
     * Queries the list of models available for a specified connector. Pagination is supported.
     *
     * @param request - ListConnectorModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConnectorModelsResponse
     *
     * @param string                     $workspaceId
     * @param string                     $connectorName
     * @param ListConnectorModelsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListConnectorModelsResponse
     */
    public function listConnectorModelsWithOptions($workspaceId, $connectorName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectorKeyId) {
            @$query['connectorKeyId'] = $request->connectorKeyId;
        }

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
            'action' => 'ListConnectorModels',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/connectors/' . Url::percentEncode($connectorName) . '/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConnectorModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the official and enterprise models available for the enabled QoderCLI connector. The service retrieves models in real time by using the saved API key and organization ID, and deduplicates them by model ID.
     *
     * @remarks
     * Queries the official and enterprise models available for the enabled QoderCLI connector.
     * Queries the list of models available for a specified connector. Pagination is supported.
     *
     * @param request - ListConnectorModelsRequest
     *
     * @returns ListConnectorModelsResponse
     *
     * @param string                     $workspaceId
     * @param string                     $connectorName
     * @param ListConnectorModelsRequest $request
     *
     * @return ListConnectorModelsResponse
     */
    public function listConnectorModels($workspaceId, $connectorName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConnectorModelsWithOptions($workspaceId, $connectorName, $request, $headers, $runtime);
    }

    /**
     * Queries the list of connectors supported by a specified workspace, along with their status, the number of bound agents, and configurations. The current version returns the QoderCLI connector.
     *
     * @remarks
     * Queries the connectors supported by the workspace to view their activation status, configurations, and the number of bound agents.
     *
     * @param request - ListConnectorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConnectorsResponse
     *
     * @param string                $workspaceId
     * @param ListConnectorsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListConnectorsResponse
     */
    public function listConnectorsWithOptions($workspaceId, $request, $headers, $runtime)
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
            'action' => 'ListConnectors',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/connectors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of connectors supported by a specified workspace, along with their status, the number of bound agents, and configurations. The current version returns the QoderCLI connector.
     *
     * @remarks
     * Queries the connectors supported by the workspace to view their activation status, configurations, and the number of bound agents.
     *
     * @param request - ListConnectorsRequest
     *
     * @returns ListConnectorsResponse
     *
     * @param string                $workspaceId
     * @param ListConnectorsRequest $request
     *
     * @return ListConnectorsResponse
     */
    public function listConnectors($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConnectorsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query for credentials in a specified workspace. Filters credentials by type by using credentialType, performs fuzzy filtering by credential name by using nameLike, specifies the maximum number of records per page for paging by using maxResults, and retrieves the next page by using nextToken. If maxResults is not specified, the server returns 10 records by default.
     *
     * @remarks
     * Performs a paged query for credentials in a specified workspace.
     * ### Query and paging
     * Filters credentials by `apiKey` or `mcpHeader` type by using `credentialType`, and performs fuzzy filtering by name by using `nameLike`.
     * Uses `maxResults` to specify the number of entries per page for paging, and uses `nextToken` in the response to retrieve the next page. The returned credential content is desensitized. To query the details of a single credential, call [GetCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCredential).
     *
     * @param request - ListCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCredentialsResponse
     *
     * @param string                 $workspaceId
     * @param ListCredentialsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListCredentialsResponse
     */
    public function listCredentialsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credentialType) {
            @$query['credentialType'] = $request->credentialType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCredentials',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/credentials',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query for credentials in a specified workspace. Filters credentials by type by using credentialType, performs fuzzy filtering by credential name by using nameLike, specifies the maximum number of records per page for paging by using maxResults, and retrieves the next page by using nextToken. If maxResults is not specified, the server returns 10 records by default.
     *
     * @remarks
     * Performs a paged query for credentials in a specified workspace.
     * ### Query and paging
     * Filters credentials by `apiKey` or `mcpHeader` type by using `credentialType`, and performs fuzzy filtering by name by using `nameLike`.
     * Uses `maxResults` to specify the number of entries per page for paging, and uses `nextToken` in the response to retrieve the next page. The returned credential content is desensitized. To query the details of a single credential, call [GetCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCredential).
     *
     * @param request - ListCredentialsRequest
     *
     * @returns ListCredentialsResponse
     *
     * @param string                 $workspaceId
     * @param ListCredentialsRequest $request
     *
     * @return ListCredentialsResponse
     */
    public function listCredentials($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCredentialsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query to retrieve the identity, deployment method, and status summary of custom code or image agents in a workspace, with paging support.
     *
     * @remarks
     * Performs a paged query to retrieve the identity, deployment method, and status summary of custom code or image agents in a workspace, with paging support.
     * ### Paged query
     * If `maxResults` is omitted or set to `0`, the default value is 20 and the maximum value is 100. Omit `nextToken` in the first request. For subsequent requests, pass the token returned in the previous response as is, and keep the same workspace and filter conditions. An empty token indicates the end of paging.
     * ### Response content
     * This operation returns the summary for the current page. It does not return the complete deployment configurations or errors that occur when you execute the latest configurations. Use `items[].agentId` to invoke [GetCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgent) to query code packages, image sources, results after you execute the version, and running instance statuses.
     *
     * @param request - ListCustomAgentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomAgentsResponse
     *
     * @param string                  $workspaceId
     * @param ListCustomAgentsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListCustomAgentsResponse
     */
    public function listCustomAgentsWithOptions($workspaceId, $request, $headers, $runtime)
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
            'action' => 'ListCustomAgents',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/custom-agents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCustomAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query to retrieve the identity, deployment method, and status summary of custom code or image agents in a workspace, with paging support.
     *
     * @remarks
     * Performs a paged query to retrieve the identity, deployment method, and status summary of custom code or image agents in a workspace, with paging support.
     * ### Paged query
     * If `maxResults` is omitted or set to `0`, the default value is 20 and the maximum value is 100. Omit `nextToken` in the first request. For subsequent requests, pass the token returned in the previous response as is, and keep the same workspace and filter conditions. An empty token indicates the end of paging.
     * ### Response content
     * This operation returns the summary for the current page. It does not return the complete deployment configurations or errors that occur when you execute the latest configurations. Use `items[].agentId` to invoke [GetCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgent) to query code packages, image sources, results after you execute the version, and running instance statuses.
     *
     * @param request - ListCustomAgentsRequest
     *
     * @returns ListCustomAgentsResponse
     *
     * @param string                  $workspaceId
     * @param ListCustomAgentsRequest $request
     *
     * @return ListCustomAgentsResponse
     */
    public function listCustomAgents($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCustomAgentsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Performs a paging query to retrieve the identity, configuration versions, and status summary of managed agents in a workspace.
     *
     * @remarks
     * Performs a paging query to retrieve the identity, configuration versions, and status summary of managed agents in a workspace.
     * ### Paging query
     * If `maxResults` is omitted or set to `0`, the default value is 20, and the maximum value is 100. Omit `nextToken` in the first request. For subsequent requests, pass the token returned in the previous response as is, and keep the same workspace and filter conditions. An empty token indicates that there are no more pages.
     * ### Response content
     * This operation returns the summary of managed agents. To query the complete models, instructions, tools, skills, and accessed state, call [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent).
     *
     * @param request - ListExternalAgentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExternalAgentsResponse
     *
     * @param string                    $workspaceId
     * @param ListExternalAgentsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListExternalAgentsResponse
     */
    public function listExternalAgentsWithOptions($workspaceId, $request, $headers, $runtime)
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
            'action' => 'ListExternalAgents',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/external-agents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExternalAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query to retrieve the identity, configuration versions, and status summary of managed agents in a workspace.
     *
     * @remarks
     * Performs a paging query to retrieve the identity, configuration versions, and status summary of managed agents in a workspace.
     * ### Paging query
     * If `maxResults` is omitted or set to `0`, the default value is 20, and the maximum value is 100. Omit `nextToken` in the first request. For subsequent requests, pass the token returned in the previous response as is, and keep the same workspace and filter conditions. An empty token indicates that there are no more pages.
     * ### Response content
     * This operation returns the summary of managed agents. To query the complete models, instructions, tools, skills, and accessed state, call [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent).
     *
     * @param request - ListExternalAgentsRequest
     *
     * @returns ListExternalAgentsResponse
     *
     * @param string                    $workspaceId
     * @param ListExternalAgentsRequest $request
     *
     * @return ListExternalAgentsResponse
     */
    public function listExternalAgents($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExternalAgentsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the departments of an identity provider by paging.
     *
     * @remarks
     * Queries the list of DingTalk or Lark departments by parent department and paging. This is used when selecting or adjusting the user synchronization scope.
     * ### Before you begin
     * A DingTalk or Lark identity provider is bound to the workspace, and the user pool, application credentials, and authorization to read contacts are prepared.
     * ### Query methods
     * - Omit `parentDepartmentId` to query the root level. Pass a department ID to query its direct child departments.
     * - `hasChildren` indicates whether a department can be expanded. After expansion, use the department ID to query the next level.
     * - `nextToken` is used to continue reading the next page under the same parent department. An empty string indicates that there are no more pages.
     * ### Total count and pagination
     * This operation does not calculate the total number of departments. Currently, `totalCount` returns JSON `null`, which does not mean the number of departments is 0. Whether to continue pagination depends on `nextToken`.
     * ### Request examples
     * ```http
     * GET /workspaces/{workspaceId}/identity-providers/{identityProviderType}/departments?maxResults=50
     * ```
     * ### Response examples
     * The following shows the response structure for an empty directory page. `totalCount` retains the `null` value actually returned by the operation.
     * ```json
     * {
     *   "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",
     *   "message": "success",
     *   "httpStatusCode": 200,
     *   "code": "SUCCESS",
     *   "success": true,
     *   "maxResults": 50,
     *   "nextToken": "",
     *   "totalCount": null,
     *   "items": []
     * }
     * ```
     * ### What to do next
     * After selecting the departments to synchronize, save the synchronization scope by calling [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider), and then call [CreateIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSyncJob) to initiate synchronization as needed.
     *
     * @param request - ListIdentityProviderDepartmentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentityProviderDepartmentsResponse
     *
     * @param string                                 $workspaceId
     * @param string                                 $identityProviderType
     * @param ListIdentityProviderDepartmentsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListIdentityProviderDepartmentsResponse
     */
    public function listIdentityProviderDepartmentsWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->parentDepartmentId) {
            @$query['parentDepartmentId'] = $request->parentDepartmentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIdentityProviderDepartments',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers/' . Url::percentEncode($identityProviderType) . '/departments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIdentityProviderDepartmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the departments of an identity provider by paging.
     *
     * @remarks
     * Queries the list of DingTalk or Lark departments by parent department and paging. This is used when selecting or adjusting the user synchronization scope.
     * ### Before you begin
     * A DingTalk or Lark identity provider is bound to the workspace, and the user pool, application credentials, and authorization to read contacts are prepared.
     * ### Query methods
     * - Omit `parentDepartmentId` to query the root level. Pass a department ID to query its direct child departments.
     * - `hasChildren` indicates whether a department can be expanded. After expansion, use the department ID to query the next level.
     * - `nextToken` is used to continue reading the next page under the same parent department. An empty string indicates that there are no more pages.
     * ### Total count and pagination
     * This operation does not calculate the total number of departments. Currently, `totalCount` returns JSON `null`, which does not mean the number of departments is 0. Whether to continue pagination depends on `nextToken`.
     * ### Request examples
     * ```http
     * GET /workspaces/{workspaceId}/identity-providers/{identityProviderType}/departments?maxResults=50
     * ```
     * ### Response examples
     * The following shows the response structure for an empty directory page. `totalCount` retains the `null` value actually returned by the operation.
     * ```json
     * {
     *   "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",
     *   "message": "success",
     *   "httpStatusCode": 200,
     *   "code": "SUCCESS",
     *   "success": true,
     *   "maxResults": 50,
     *   "nextToken": "",
     *   "totalCount": null,
     *   "items": []
     * }
     * ```
     * ### What to do next
     * After selecting the departments to synchronize, save the synchronization scope by calling [UpdateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProvider), and then call [CreateIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSyncJob) to initiate synchronization as needed.
     *
     * @param request - ListIdentityProviderDepartmentsRequest
     *
     * @returns ListIdentityProviderDepartmentsResponse
     *
     * @param string                                 $workspaceId
     * @param string                                 $identityProviderType
     * @param ListIdentityProviderDepartmentsRequest $request
     *
     * @return ListIdentityProviderDepartmentsResponse
     */
    public function listIdentityProviderDepartments($workspaceId, $identityProviderType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIdentityProviderDepartmentsWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime);
    }

    /**
     * Queries the complete summary list of up to two SCIM credentials in a shared user pool, without returning plaintext tokens or supporting pagination.
     *
     * @remarks
     * Queries the list of SCIM access credentials to check which tokens are still valid, when they expire, and to select credentials for revocation.
     * SCIM tokens are used to authorize enterprise identity systems to send user provisioning requests to the user pool. This operation returns credential summaries, including the credential ID, status, creation time, and expiration time. The plaintext token is returned only upon creation.
     * ### How to use the query results
     * - Credentials with the Enabled status that have not expired can continue to be used.
     * - To obtain a new token, call [CreateIdentityProviderSCIMCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSCIMCredential).
     * - To revoke a token, pass the target credentialId to [DeleteIdentityProviderSCIMCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/DeleteIdentityProviderSCIMCredential).
     * A single user pool can retain up to two SCIM credentials. The list may include expired or disabled credentials. Clean up unused credentials before creating a new token.
     * ### Return method
     * This operation returns the complete array of credentials at once without using pagination parameters. If no credentials exist, the following is returned:
     * ```json
     * {"data":[]}
     * ```
     *
     * @param request - ListIdentityProviderSCIMCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentityProviderSCIMCredentialsResponse
     *
     * @param string                                     $workspaceId
     * @param ListIdentityProviderSCIMCredentialsRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ListIdentityProviderSCIMCredentialsResponse
     */
    public function listIdentityProviderSCIMCredentialsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListIdentityProviderSCIMCredentials',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/scim-provisioning/credentials',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIdentityProviderSCIMCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the complete summary list of up to two SCIM credentials in a shared user pool, without returning plaintext tokens or supporting pagination.
     *
     * @remarks
     * Queries the list of SCIM access credentials to check which tokens are still valid, when they expire, and to select credentials for revocation.
     * SCIM tokens are used to authorize enterprise identity systems to send user provisioning requests to the user pool. This operation returns credential summaries, including the credential ID, status, creation time, and expiration time. The plaintext token is returned only upon creation.
     * ### How to use the query results
     * - Credentials with the Enabled status that have not expired can continue to be used.
     * - To obtain a new token, call [CreateIdentityProviderSCIMCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSCIMCredential).
     * - To revoke a token, pass the target credentialId to [DeleteIdentityProviderSCIMCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/DeleteIdentityProviderSCIMCredential).
     * A single user pool can retain up to two SCIM credentials. The list may include expired or disabled credentials. Clean up unused credentials before creating a new token.
     * ### Return method
     * This operation returns the complete array of credentials at once without using pagination parameters. If no credentials exist, the following is returned:
     * ```json
     * {"data":[]}
     * ```
     *
     * @param request - ListIdentityProviderSCIMCredentialsRequest
     *
     * @returns ListIdentityProviderSCIMCredentialsResponse
     *
     * @param string                                     $workspaceId
     * @param ListIdentityProviderSCIMCredentialsRequest $request
     *
     * @return ListIdentityProviderSCIMCredentialsResponse
     */
    public function listIdentityProviderSCIMCredentials($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIdentityProviderSCIMCredentialsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the summary of existing identity provider bindings for a workspace, including CustomSSO. Returns local binding information without querying the actual upstream SAML or SCIM configurations.
     *
     * @remarks
     * Queries the enterprise identity providers currently connected to a workspace. This operation is used to display the identity provider list or to check whether a binding already exists before configuring a new connection.
     * A workspace can be bound to at most one external identity provider: DingTalk, Lark, or a custom identity provider (`CustomSSO`). If no identity provider is bound, the returned `items` is an empty array.
     * ### What you can view in the list
     * The list returns the identity provider type, binding status, and logon and user synchronization switches. When the status of `CustomSSO` is `WAITING_CONFIGURATION`, it indicates that the user pool is ready and you can proceed to complete the integration configuration.
     * This operation returns a binding summary. To view specific integration configurations, use the corresponding operations:
     * - [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider): Views the identity provider details and SAML logon configuration.
     * - [GetIdentityProviderServiceProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderServiceProvider): Retrieves the SAML integration information required to configure AgentCore in the enterprise identity system.
     * - [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM): Views the SCIM endpoint configuration and user synchronization status.
     * ### Pagination
     * Currently, at most one binding is returned. `nextToken` should be omitted or passed as an empty string. The default value of `maxResults` is 10. Valid values: 1 to 100.
     *
     * @param request - ListIdentityProvidersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentityProvidersResponse
     *
     * @param string                       $workspaceId
     * @param ListIdentityProvidersRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListIdentityProvidersResponse
     */
    public function listIdentityProvidersWithOptions($workspaceId, $request, $headers, $runtime)
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
            'action' => 'ListIdentityProviders',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIdentityProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the summary of existing identity provider bindings for a workspace, including CustomSSO. Returns local binding information without querying the actual upstream SAML or SCIM configurations.
     *
     * @remarks
     * Queries the enterprise identity providers currently connected to a workspace. This operation is used to display the identity provider list or to check whether a binding already exists before configuring a new connection.
     * A workspace can be bound to at most one external identity provider: DingTalk, Lark, or a custom identity provider (`CustomSSO`). If no identity provider is bound, the returned `items` is an empty array.
     * ### What you can view in the list
     * The list returns the identity provider type, binding status, and logon and user synchronization switches. When the status of `CustomSSO` is `WAITING_CONFIGURATION`, it indicates that the user pool is ready and you can proceed to complete the integration configuration.
     * This operation returns a binding summary. To view specific integration configurations, use the corresponding operations:
     * - [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider): Views the identity provider details and SAML logon configuration.
     * - [GetIdentityProviderServiceProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderServiceProvider): Retrieves the SAML integration information required to configure AgentCore in the enterprise identity system.
     * - [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM): Views the SCIM endpoint configuration and user synchronization status.
     * ### Pagination
     * Currently, at most one binding is returned. `nextToken` should be omitted or passed as an empty string. The default value of `maxResults` is 10. Valid values: 1 to 100.
     *
     * @param request - ListIdentityProvidersRequest
     *
     * @returns ListIdentityProvidersResponse
     *
     * @param string                       $workspaceId
     * @param ListIdentityProvidersRequest $request
     *
     * @return ListIdentityProvidersResponse
     */
    public function listIdentityProviders($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIdentityProvidersWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query for image caches in a workspace. Supports paging and filtering by image source and cache status.
     *
     * @remarks
     * Performs a paged query for image caches in a workspace. Supports paging and filtering by image source and cache status.
     * ### Filter conditions
     * Provide regionId and workspaceId in the query parameters. You can filter by ACR instance, registry, namespace, repository, tag, digest, and status. Use imageRefContains to search for image address fragments.
     * ### Pagination rules
     * The default value of maxResults is 20, and the valid values are 1 to 100. Omit nextToken for the first request. For subsequent requests, use the token returned in the response as is, and keep the workspace, region, page size, and all filter conditions unchanged. An empty token indicates that there are no more pages.
     * ### Response content
     * Each item includes imageId, source, digest, status, size, reference count, and deletion conditions. PENDING only indicates that the cache is being prepared. For the cause of failure, see error. You can query a single cache by calling [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache).
     *
     * @param request - ListImageCachesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImageCachesResponse
     *
     * @param ListImageCachesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListImageCachesResponse
     */
    public function listImageCachesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrInstanceId) {
            @$query['acrInstanceId'] = $request->acrInstanceId;
        }

        if (null !== $request->digest) {
            @$query['digest'] = $request->digest;
        }

        if (null !== $request->imageRefContains) {
            @$query['imageRefContains'] = $request->imageRefContains;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->registry) {
            @$query['registry'] = $request->registry;
        }

        if (null !== $request->repository) {
            @$query['repository'] = $request->repository;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['tag'] = $request->tag;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListImageCaches',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/image-caches',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListImageCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query for image caches in a workspace. Supports paging and filtering by image source and cache status.
     *
     * @remarks
     * Performs a paged query for image caches in a workspace. Supports paging and filtering by image source and cache status.
     * ### Filter conditions
     * Provide regionId and workspaceId in the query parameters. You can filter by ACR instance, registry, namespace, repository, tag, digest, and status. Use imageRefContains to search for image address fragments.
     * ### Pagination rules
     * The default value of maxResults is 20, and the valid values are 1 to 100. Omit nextToken for the first request. For subsequent requests, use the token returned in the response as is, and keep the workspace, region, page size, and all filter conditions unchanged. An empty token indicates that there are no more pages.
     * ### Response content
     * Each item includes imageId, source, digest, status, size, reference count, and deletion conditions. PENDING only indicates that the cache is being prepared. For the cause of failure, see error. You can query a single cache by calling [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache).
     *
     * @param request - ListImageCachesRequest
     *
     * @returns ListImageCachesResponse
     *
     * @param ListImageCachesRequest $request
     *
     * @return ListImageCachesResponse
     */
    public function listImageCaches($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImageCachesWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paging query for the identity, harness, configuration version, and status summary of managed Harness agents in a workspace.
     *
     * @remarks
     * Performs a paging query for the identity, harness, configuration version, and status summary of managed Harness agents in a workspace.
     * ### Paging query
     * If maxResults is omitted or set to 0, the default value is 20, and the maximum value is 100. Omit nextToken in the first request. For subsequent requests, pass the token returned in the previous response as is, and keep the same workspace and filter conditions. An empty token indicates that there are no more pages.
     * ### Response content
     * The list returns summary information, where harness.type indicates the runtime framework. For complete configurations, skill targets and effective versions, and instance status statistics, call [GetManagedAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetManagedAgent).
     *
     * @param request - ListManagedAgentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListManagedAgentsResponse
     *
     * @param string                   $workspaceId
     * @param ListManagedAgentsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListManagedAgentsResponse
     */
    public function listManagedAgentsWithOptions($workspaceId, $request, $headers, $runtime)
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
            'action' => 'ListManagedAgents',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListManagedAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query for the identity, harness, configuration version, and status summary of managed Harness agents in a workspace.
     *
     * @remarks
     * Performs a paging query for the identity, harness, configuration version, and status summary of managed Harness agents in a workspace.
     * ### Paging query
     * If maxResults is omitted or set to 0, the default value is 20, and the maximum value is 100. Omit nextToken in the first request. For subsequent requests, pass the token returned in the previous response as is, and keep the same workspace and filter conditions. An empty token indicates that there are no more pages.
     * ### Response content
     * The list returns summary information, where harness.type indicates the runtime framework. For complete configurations, skill targets and effective versions, and instance status statistics, call [GetManagedAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetManagedAgent).
     *
     * @param request - ListManagedAgentsRequest
     *
     * @returns ListManagedAgentsResponse
     *
     * @param string                   $workspaceId
     * @param ListManagedAgentsRequest $request
     *
     * @return ListManagedAgentsResponse
     */
    public function listManagedAgents($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listManagedAgentsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries MCP marketplace templates.
     *
     * @remarks
     * Queries official MCP marketplace templates available for installation to help select required tool services. Supports filtering by keyword, usage tag, and MCP type.
     *
     * @param request - ListMcpMarketItemsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpMarketItemsResponse
     *
     * @param string                    $workspaceId
     * @param ListMcpMarketItemsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMcpMarketItemsResponse
     */
    public function listMcpMarketItemsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->mcpType) {
            @$query['mcpType'] = $request->mcpType;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->officialTag) {
            @$query['officialTag'] = $request->officialTag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMcpMarketItems',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-market/items',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMcpMarketItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries MCP marketplace templates.
     *
     * @remarks
     * Queries official MCP marketplace templates available for installation to help select required tool services. Supports filtering by keyword, usage tag, and MCP type.
     *
     * @param request - ListMcpMarketItemsRequest
     *
     * @returns ListMcpMarketItemsResponse
     *
     * @param string                    $workspaceId
     * @param ListMcpMarketItemsRequest $request
     *
     * @return ListMcpMarketItemsResponse
     */
    public function listMcpMarketItems($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMcpMarketItemsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of tools exposed by a specified MCP service and their input and output schemas.
     *
     * @remarks
     * Queries the list of tools exposed by a specified MCP service and their input and output schemas.
     *
     * @param request - ListMcpToolsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpToolsResponse
     *
     * @param string              $workspaceId
     * @param string              $mcpServerId
     * @param ListMcpToolsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMcpToolsResponse
     */
    public function listMcpToolsWithOptions($workspaceId, $mcpServerId, $request, $headers, $runtime)
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
            'action' => 'ListMcpTools',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-servers/' . Url::percentEncode($mcpServerId) . '/tools',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMcpToolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of tools exposed by a specified MCP service and their input and output schemas.
     *
     * @remarks
     * Queries the list of tools exposed by a specified MCP service and their input and output schemas.
     *
     * @param request - ListMcpToolsRequest
     *
     * @returns ListMcpToolsResponse
     *
     * @param string              $workspaceId
     * @param string              $mcpServerId
     * @param ListMcpToolsRequest $request
     *
     * @return ListMcpToolsResponse
     */
    public function listMcpTools($workspaceId, $mcpServerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMcpToolsWithOptions($workspaceId, $mcpServerId, $request, $headers, $runtime);
    }

    /**
     * Performs a paging query for MCP services and their configurations and status in a specified workspace.
     *
     * @remarks
     * Performs a paging query for MCP services and their configurations and status in a specified workspace.
     *
     * @param request - ListMcpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpsResponse
     *
     * @param string          $workspaceId
     * @param ListMcpsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListMcpsResponse
     */
    public function listMcpsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customTag) {
            @$query['customTag'] = $request->customTag;
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

        if (null !== $request->officialTag) {
            @$query['officialTag'] = $request->officialTag;
        }

        if (null !== $request->searchType) {
            @$query['searchType'] = $request->searchType;
        }

        if (null !== $request->usageActive) {
            @$query['usageActive'] = $request->usageActive;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMcps',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-servers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMcpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query for MCP services and their configurations and status in a specified workspace.
     *
     * @remarks
     * Performs a paging query for MCP services and their configurations and status in a specified workspace.
     *
     * @param request - ListMcpsRequest
     *
     * @returns ListMcpsResponse
     *
     * @param string          $workspaceId
     * @param ListMcpsRequest $request
     *
     * @return ListMcpsResponse
     */
    public function listMcps($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMcpsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries long-term memory with paging and supports independent filtering by UserId, AgentId, and SessionId.
     *
     * @remarks
     * Queries long-term memory with paging and supports filtering by `UserId`, `AgentId`, and `SessionId`.
     *
     * @param request - ListMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoriesResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryStoreName
     * @param ListMemoriesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMemoriesResponse
     */
    public function listMemoriesWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['agentId'] = $request->agentId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->userId) {
            @$query['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemories',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/memories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries long-term memory with paging and supports independent filtering by UserId, AgentId, and SessionId.
     *
     * @remarks
     * Queries long-term memory with paging and supports filtering by `UserId`, `AgentId`, and `SessionId`.
     *
     * @param request - ListMemoriesRequest
     *
     * @returns ListMemoriesResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryStoreName
     * @param ListMemoriesRequest $request
     *
     * @return ListMemoriesResponse
     */
    public function listMemories($workspaceId, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoriesWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Queries raw messages by exact scope with paging. SessionId is required, and at least one of UserId and AgentId must be provided.
     *
     * @remarks
     * Queries raw messages of a specific session in the memory store with paging to view the session content used for generating long-term memory.
     * `SessionId` is required, and at least one of `UserId` and `AgentId` must be provided to identify the target session.
     *
     * @param request - ListMemorySessionMessagesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemorySessionMessagesResponse
     *
     * @param string                           $workspaceId
     * @param string                           $memoryStoreName
     * @param ListMemorySessionMessagesRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListMemorySessionMessagesResponse
     */
    public function listMemorySessionMessagesWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['agentId'] = $request->agentId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->userId) {
            @$query['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemorySessionMessages',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemorySessionMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries raw messages by exact scope with paging. SessionId is required, and at least one of UserId and AgentId must be provided.
     *
     * @remarks
     * Queries raw messages of a specific session in the memory store with paging to view the session content used for generating long-term memory.
     * `SessionId` is required, and at least one of `UserId` and `AgentId` must be provided to identify the target session.
     *
     * @param request - ListMemorySessionMessagesRequest
     *
     * @returns ListMemorySessionMessagesResponse
     *
     * @param string                           $workspaceId
     * @param string                           $memoryStoreName
     * @param ListMemorySessionMessagesRequest $request
     *
     * @return ListMemorySessionMessagesResponse
     */
    public function listMemorySessionMessages($workspaceId, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemorySessionMessagesWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query for sessions in a MemoryStore, supporting paging and filtering by user ID and agent ID independently.
     *
     * @remarks
     * Performs a paged query for source sessions in a long-term memory store (MemoryStore), supporting paging and filtering by user ID and agent ID respectively.
     *
     * @param request - ListMemorySessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemorySessionsResponse
     *
     * @param string                    $workspaceId
     * @param string                    $memoryStoreName
     * @param ListMemorySessionsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMemorySessionsResponse
     */
    public function listMemorySessionsWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['agentId'] = $request->agentId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->userId) {
            @$query['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemorySessions',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/sessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemorySessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query for sessions in a MemoryStore, supporting paging and filtering by user ID and agent ID independently.
     *
     * @remarks
     * Performs a paged query for source sessions in a long-term memory store (MemoryStore), supporting paging and filtering by user ID and agent ID respectively.
     *
     * @param request - ListMemorySessionsRequest
     *
     * @returns ListMemorySessionsResponse
     *
     * @param string                    $workspaceId
     * @param string                    $memoryStoreName
     * @param ListMemorySessionsRequest $request
     *
     * @return ListMemorySessionsResponse
     */
    public function listMemorySessions($workspaceId, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemorySessionsWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query of MemoryStores in a specified workspace by using paging.
     *
     * @remarks
     * Performs a paged query of the long-term memory stores (MemoryStores) in a workspace by using paging for selection or management.
     *
     * @param request - ListMemoryStoresRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoryStoresResponse
     *
     * @param string                  $workspaceId
     * @param ListMemoryStoresRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMemoryStoresResponse
     */
    public function listMemoryStoresWithOptions($workspaceId, $request, $headers, $runtime)
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
            'action' => 'ListMemoryStores',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoryStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query of MemoryStores in a specified workspace by using paging.
     *
     * @remarks
     * Performs a paged query of the long-term memory stores (MemoryStores) in a workspace by using paging for selection or management.
     *
     * @param request - ListMemoryStoresRequest
     *
     * @returns ListMemoryStoresResponse
     *
     * @param string                  $workspaceId
     * @param ListMemoryStoresRequest $request
     *
     * @return ListMemoryStoresResponse
     */
    public function listMemoryStores($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoryStoresWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries model connections in a specified workspace by using paging. Supports filtering by name, provider type, and invocation protocol.
     *
     * @remarks
     * Queries model connections in a workspace by using paging to view configured model services.
     * - Use `Name` to filter by name, and `SearchType` to specify exact match or fuzzy match.
     * - You can filter by model provider type and invocation protocol.
     *
     * @param request - ListModelConnectionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelConnectionsResponse
     *
     * @param string                      $workspaceId
     * @param ListModelConnectionsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListModelConnectionsResponse
     */
    public function listModelConnectionsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeModels) {
            @$query['includeModels'] = $request->includeModels;
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

        if (null !== $request->protocol) {
            @$query['protocol'] = $request->protocol;
        }

        if (null !== $request->providerType) {
            @$query['providerType'] = $request->providerType;
        }

        if (null !== $request->searchType) {
            @$query['searchType'] = $request->searchType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelConnections',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/model-connections',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries model connections in a specified workspace by using paging. Supports filtering by name, provider type, and invocation protocol.
     *
     * @remarks
     * Queries model connections in a workspace by using paging to view configured model services.
     * - Use `Name` to filter by name, and `SearchType` to specify exact match or fuzzy match.
     * - You can filter by model provider type and invocation protocol.
     *
     * @param request - ListModelConnectionsRequest
     *
     * @returns ListModelConnectionsResponse
     *
     * @param string                      $workspaceId
     * @param ListModelConnectionsRequest $request
     *
     * @return ListModelConnectionsResponse
     */
    public function listModelConnections($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelConnectionsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Performs a paging query for models in a specified workspace and supports filtering by model connection and model name.
     *
     * @remarks
     * Performs a paging query for models in a specified workspace and supports filtering by model connection and model name.
     *
     * @param request - ListModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelsResponse
     *
     * @param string            $workspaceId
     * @param ListModelsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionId) {
            @$query['connectionId'] = $request->connectionId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->modelName) {
            @$query['modelName'] = $request->modelName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModels',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query for models in a specified workspace and supports filtering by model connection and model name.
     *
     * @remarks
     * Performs a paging query for models in a specified workspace and supports filtering by model connection and model name.
     *
     * @param request - ListModelsRequest
     *
     * @returns ListModelsResponse
     *
     * @param string            $workspaceId
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries permission rules.
     *
     * @remarks
     * Performs a paged query of access rules by resource, supporting paging to check existing rules and their sources.
     *
     * @param request - ListPermissionRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPermissionRulesResponse
     *
     * @param string                     $workspaceId
     * @param ListPermissionRulesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPermissionRulesResponse
     */
    public function listPermissionRulesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->principalId) {
            @$query['principalId'] = $request->principalId;
        }

        if (null !== $request->principalName) {
            @$query['principalName'] = $request->principalName;
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

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->target) {
            @$query['target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissionRules',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/permission-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPermissionRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries permission rules.
     *
     * @remarks
     * Performs a paged query of access rules by resource, supporting paging to check existing rules and their sources.
     *
     * @param request - ListPermissionRulesRequest
     *
     * @returns ListPermissionRulesResponse
     *
     * @param string                     $workspaceId
     * @param ListPermissionRulesRequest $request
     *
     * @return ListPermissionRulesResponse
     */
    public function listPermissionRules($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionRulesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the providers supported by the built-in model catalog of AgentCore and their default service configurations.
     *
     * @remarks
     * Queries the providers supported by the built-in model catalog of AgentCore and their default service configurations.
     *
     * @param request - ListPredefinedModelProvidersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPredefinedModelProvidersResponse
     *
     * @param ListPredefinedModelProvidersRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListPredefinedModelProvidersResponse
     */
    public function listPredefinedModelProvidersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListPredefinedModelProviders',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/model-catalog/providers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPredefinedModelProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the providers supported by the built-in model catalog of AgentCore and their default service configurations.
     *
     * @remarks
     * Queries the providers supported by the built-in model catalog of AgentCore and their default service configurations.
     *
     * @param request - ListPredefinedModelProvidersRequest
     *
     * @returns ListPredefinedModelProvidersResponse
     *
     * @param ListPredefinedModelProvidersRequest $request
     *
     * @return ListPredefinedModelProvidersResponse
     */
    public function listPredefinedModelProviders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPredefinedModelProvidersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the models and their capabilities for a specified provider in the AgentCore built-in model catalog.
     *
     * @remarks
     * Queries the models and their capabilities for a specified provider in the AgentCore built-in model catalog.
     *
     * @param request - ListPredefinedModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPredefinedModelsResponse
     *
     * @param string                      $providerType
     * @param ListPredefinedModelsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListPredefinedModelsResponse
     */
    public function listPredefinedModelsWithOptions($providerType, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListPredefinedModels',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/model-catalog/providers/' . Url::percentEncode($providerType) . '/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPredefinedModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the models and their capabilities for a specified provider in the AgentCore built-in model catalog.
     *
     * @remarks
     * Queries the models and their capabilities for a specified provider in the AgentCore built-in model catalog.
     *
     * @param request - ListPredefinedModelsRequest
     *
     * @returns ListPredefinedModelsResponse
     *
     * @param string                      $providerType
     * @param ListPredefinedModelsRequest $request
     *
     * @return ListPredefinedModelsResponse
     */
    public function listPredefinedModels($providerType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPredefinedModelsWithOptions($providerType, $request, $headers, $runtime);
    }

    /**
     * Performs a paging query to retrieve the current active sessions and their sources in a specified agent instance.
     *
     * @remarks
     * Queries the active sessions in a specified running instance to view the current mapping between sessions and instances.
     * ### Query scope
     * Locates the instance by using workspaceId, agentId, and sandboxId. You can obtain the sandboxId from [ListSandboxes](https://api.aliyun.com/document/AgentCore/2026-08-04/ListSandboxes). This operation queries the current active sessions.
     * ### Pagination
     * The default value of maxResults is 20. Valid values: 1 to 100. Omit nextToken in the first request. For subsequent requests, use the returned token as is, and keep the workspace, agent, instance, and page size unchanged. An empty token indicates that no more pages are available.
     * ### Session sources
     * The source can be API, CONSOLE_DEBUG, EXTERNAL_CHANNEL, or UNKNOWN. For external channels, the channel type is additionally returned. If no source information is provided, UNKNOWN is returned.
     *
     * @param request - ListSandboxSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSandboxSessionsResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentId
     * @param string                     $sandboxId
     * @param ListSandboxSessionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListSandboxSessionsResponse
     */
    public function listSandboxSessionsWithOptions($workspaceId, $agentId, $sandboxId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->serviceEndpointId) {
            @$query['serviceEndpointId'] = $request->serviceEndpointId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSandboxSessions',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents/' . Url::percentEncode($agentId) . '/sandboxes/' . Url::percentEncode($sandboxId) . '/sessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSandboxSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query to retrieve the current active sessions and their sources in a specified agent instance.
     *
     * @remarks
     * Queries the active sessions in a specified running instance to view the current mapping between sessions and instances.
     * ### Query scope
     * Locates the instance by using workspaceId, agentId, and sandboxId. You can obtain the sandboxId from [ListSandboxes](https://api.aliyun.com/document/AgentCore/2026-08-04/ListSandboxes). This operation queries the current active sessions.
     * ### Pagination
     * The default value of maxResults is 20. Valid values: 1 to 100. Omit nextToken in the first request. For subsequent requests, use the returned token as is, and keep the workspace, agent, instance, and page size unchanged. An empty token indicates that no more pages are available.
     * ### Session sources
     * The source can be API, CONSOLE_DEBUG, EXTERNAL_CHANNEL, or UNKNOWN. For external channels, the channel type is additionally returned. If no source information is provided, UNKNOWN is returned.
     *
     * @param request - ListSandboxSessionsRequest
     *
     * @returns ListSandboxSessionsResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentId
     * @param string                     $sandboxId
     * @param ListSandboxSessionsRequest $request
     *
     * @return ListSandboxSessionsResponse
     */
    public function listSandboxSessions($workspaceId, $agentId, $sandboxId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSandboxSessionsWithOptions($workspaceId, $agentId, $sandboxId, $request, $headers, $runtime);
    }

    /**
     * Performs a paging query on the running instances of an agent, and supports filtering by Sandbox ID and current valid session ID fragments.
     *
     * @remarks
     * Queries the running instances (sandboxes) of an agent to view instance distribution and current running status.
     * ### Filter instances
     * `searchText` matches Sandbox ID fragments, and `sessionId` matches current valid session ID fragments. Both are case-insensitive. If both are submitted, they are combined for filtering.
     * ### Pagination and status
     * The default value of `maxResults` is 20. Valid values: 1 to 100. Omit `nextToken` for the first request. For subsequent requests, use the response token as is, and keep `workspaceId`, `agentId`, filter conditions, and `maxResults` unchanged. An empty token indicates that the query is complete.
     * `phase` indicates the instance phase, `activeSessionCount` indicates the number of current active sessions, and `maxConcurrentSessions` indicates the configured concurrency limit for a single instance. You can query the active sessions of an instance by calling [ListSandboxSessions](https://api.aliyun.com/document/AgentCore/2026-08-04/ListSandboxSessions).
     *
     * @param request - ListSandboxesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSandboxesResponse
     *
     * @param string               $workspaceId
     * @param string               $agentId
     * @param ListSandboxesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSandboxesResponse
     */
    public function listSandboxesWithOptions($workspaceId, $agentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchText) {
            @$query['searchText'] = $request->searchText;
        }

        if (null !== $request->serviceEndpointId) {
            @$query['serviceEndpointId'] = $request->serviceEndpointId;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSandboxes',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents/' . Url::percentEncode($agentId) . '/sandboxes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSandboxesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query on the running instances of an agent, and supports filtering by Sandbox ID and current valid session ID fragments.
     *
     * @remarks
     * Queries the running instances (sandboxes) of an agent to view instance distribution and current running status.
     * ### Filter instances
     * `searchText` matches Sandbox ID fragments, and `sessionId` matches current valid session ID fragments. Both are case-insensitive. If both are submitted, they are combined for filtering.
     * ### Pagination and status
     * The default value of `maxResults` is 20. Valid values: 1 to 100. Omit `nextToken` for the first request. For subsequent requests, use the response token as is, and keep `workspaceId`, `agentId`, filter conditions, and `maxResults` unchanged. An empty token indicates that the query is complete.
     * `phase` indicates the instance phase, `activeSessionCount` indicates the number of current active sessions, and `maxConcurrentSessions` indicates the configured concurrency limit for a single instance. You can query the active sessions of an instance by calling [ListSandboxSessions](https://api.aliyun.com/document/AgentCore/2026-08-04/ListSandboxSessions).
     *
     * @param request - ListSandboxesRequest
     *
     * @returns ListSandboxesResponse
     *
     * @param string               $workspaceId
     * @param string               $agentId
     * @param ListSandboxesRequest $request
     *
     * @return ListSandboxesResponse
     */
    public function listSandboxes($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSandboxesWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Queries service endpoints in a specified workspace with paging, and supports filtering by target type, agent, collaboration component, and status.
     *
     * @remarks
     * Queries service endpoints in a workspace with paging to find the access endpoints for agents or collaboration components.
     * - Use targetType, agentId, agentVersion, resourceBindingId, collaborationComponent, and status to filter the results.
     * - Use maxResults to set the number of entries per page. If omitted, the default value is 20.
     * - Use the returned nextToken to query the next page.
     *
     * @param request - ListServiceEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceEndpointsResponse
     *
     * @param string                      $workspaceId
     * @param ListServiceEndpointsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceEndpointsResponse
     */
    public function listServiceEndpointsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['agentId'] = $request->agentId;
        }

        if (null !== $request->agentVersion) {
            @$query['agentVersion'] = $request->agentVersion;
        }

        if (null !== $request->collaborationComponent) {
            @$query['collaborationComponent'] = $request->collaborationComponent;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceBindingId) {
            @$query['resourceBindingId'] = $request->resourceBindingId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->targetType) {
            @$query['targetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceEndpoints',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/service-endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries service endpoints in a specified workspace with paging, and supports filtering by target type, agent, collaboration component, and status.
     *
     * @remarks
     * Queries service endpoints in a workspace with paging to find the access endpoints for agents or collaboration components.
     * - Use targetType, agentId, agentVersion, resourceBindingId, collaborationComponent, and status to filter the results.
     * - Use maxResults to set the number of entries per page. If omitted, the default value is 20.
     * - Use the returned nextToken to query the next page.
     *
     * @param request - ListServiceEndpointsRequest
     *
     * @returns ListServiceEndpointsResponse
     *
     * @param string                      $workspaceId
     * @param ListServiceEndpointsRequest $request
     *
     * @return ListServiceEndpointsResponse
     */
    public function listServiceEndpoints($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceEndpointsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the reference relationships of a skill.
     *
     * @remarks
     * Queries the reference relationships of a specified skill to verify its usage before modifying or cleaning up skill assets.
     *
     * @param request - ListSkillReferencesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillReferencesResponse
     *
     * @param string                     $workspaceId
     * @param string                     $skillName
     * @param ListSkillReferencesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListSkillReferencesResponse
     */
    public function listSkillReferencesWithOptions($workspaceId, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['pageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->selectorType) {
            @$query['selectorType'] = $request->selectorType;
        }

        if (null !== $request->selectorValue) {
            @$query['selectorValue'] = $request->selectorValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillReferences',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/references',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSkillReferencesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the reference relationships of a skill.
     *
     * @remarks
     * Queries the reference relationships of a specified skill to verify its usage before modifying or cleaning up skill assets.
     *
     * @param request - ListSkillReferencesRequest
     *
     * @returns ListSkillReferencesResponse
     *
     * @param string                     $workspaceId
     * @param string                     $skillName
     * @param ListSkillReferencesRequest $request
     *
     * @return ListSkillReferencesResponse
     */
    public function listSkillReferences($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSkillReferencesWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query of skills in a specified workspace and returns the basic information, version status, and paging information of the skills.
     *
     * @remarks
     * Performs a paged query of skills in a specified workspace and returns the basic information, version status, and paging information of the skills.
     *
     * @param request - ListSkillsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillsResponse
     *
     * @param string            $workspaceId
     * @param ListSkillsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListSkillsResponse
     */
    public function listSkillsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->owner) {
            @$query['owner'] = $request->owner;
        }

        if (null !== $request->pageNo) {
            @$query['pageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->scope) {
            @$query['scope'] = $request->scope;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->skillName) {
            @$query['skillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkills',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query of skills in a specified workspace and returns the basic information, version status, and paging information of the skills.
     *
     * @remarks
     * Performs a paged query of skills in a specified workspace and returns the basic information, version status, and paging information of the skills.
     *
     * @param request - ListSkillsRequest
     *
     * @returns ListSkillsResponse
     *
     * @param string            $workspaceId
     * @param ListSkillsRequest $request
     *
     * @return ListSkillsResponse
     */
    public function listSkills($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSkillsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Performs a paging query of teams in a specified workspace. You can use nameLike to filter teams by fuzzy match on the team name, maxResults to specify the maximum number of records per page, and nextToken to retrieve the next page. If maxResults is not specified, the server returns 10 records by default. The member information in the list includes only the member ID, name, and team role.
     *
     * @remarks
     * Performs a paging query of teams in a specified workspace.
     *
     * @param request - ListTeamsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTeamsResponse
     *
     * @param string           $workspaceId
     * @param ListTeamsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTeamsResponse
     */
    public function listTeamsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTeams',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/teams',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTeamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query of teams in a specified workspace. You can use nameLike to filter teams by fuzzy match on the team name, maxResults to specify the maximum number of records per page, and nextToken to retrieve the next page. If maxResults is not specified, the server returns 10 records by default. The member information in the list includes only the member ID, name, and team role.
     *
     * @remarks
     * Performs a paging query of teams in a specified workspace.
     *
     * @param request - ListTeamsRequest
     *
     * @returns ListTeamsResponse
     *
     * @param string           $workspaceId
     * @param ListTeamsRequest $request
     *
     * @return ListTeamsResponse
     */
    public function listTeams($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTeamsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query for users in a specified workspace. You can filter users by fuzzy match on the username by using nameLike, specify the maximum number of records per paging by using maxResults, and retrieve the next paging by using nextToken. If maxResults is not specified, the server returns 10 records by default.
     *
     * @remarks
     * Queries the application user directory in a workspace for viewing users and selecting team members.
     *
     * @param request - ListUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param string           $workspaceId
     * @param ListUsersRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['email'] = $request->email;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query for users in a specified workspace. You can filter users by fuzzy match on the username by using nameLike, specify the maximum number of records per paging by using maxResults, and retrieve the next paging by using nextToken. If maxResults is not specified, the server returns 10 records by default.
     *
     * @remarks
     * Queries the application user directory in a workspace for viewing users and selecting team members.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param string           $workspaceId
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Performs a paged query of workspaces under the current tenant. By default, the list does not return soft-deleted records whose status is Deleted. The server applies stable sorting to the results in chronological order of creation during paging.
     *
     * @remarks
     * Performs a paged query of workspaces accessible to the current account for selecting a workspace or viewing a workspace overview.
     * - Use `nameLike` to filter by name using fuzzy match.
     * - Use `maxResults` to configure the Settings for the number of entries per page. If this parameter is omitted or set to `0`, the default value is 20.
     * - Use `nextToken` to query the next page during paging, or use `skip` to skip a specified number of workspaces.
     * The list is sorted in the order of creation. By default, deleted workspaces (with the `Deleted` status) are not returned.
     *
     * @param request - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$query['skip'] = $request->skip;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query of workspaces under the current tenant. By default, the list does not return soft-deleted records whose status is Deleted. The server applies stable sorting to the results in chronological order of creation during paging.
     *
     * @remarks
     * Performs a paged query of workspaces accessible to the current account for selecting a workspace or viewing a workspace overview.
     * - Use `nameLike` to filter by name using fuzzy match.
     * - Use `maxResults` to configure the Settings for the number of entries per page. If this parameter is omitted or set to `0`, the default value is 20.
     * - Use `nextToken` to query the next page during paging, or use `skip` to skip a specified number of workspaces.
     * The list is sorted in the order of creation. By default, deleted workspaces (with the `Deleted` status) are not returned.
     *
     * @param request - ListWorkspacesRequest
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * Takes the online version of a specified skill offline so that it is no longer used as the online version.
     *
     * @remarks
     * Takes the online version of a specified skill offline so that it is no longer used as the online version.
     *
     * @param tmpReq - OfflineSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineSkillResponse
     *
     * @param string              $workspaceId
     * @param string              $skillName
     * @param OfflineSkillRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return OfflineSkillResponse
     */
    public function offlineSkillWithOptions($workspaceId, $skillName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new OfflineSkillShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OfflineSkill',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/actions/offline',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OfflineSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Takes the online version of a specified skill offline so that it is no longer used as the online version.
     *
     * @remarks
     * Takes the online version of a specified skill offline so that it is no longer used as the online version.
     *
     * @param request - OfflineSkillRequest
     *
     * @returns OfflineSkillResponse
     *
     * @param string              $workspaceId
     * @param string              $skillName
     * @param OfflineSkillRequest $request
     *
     * @return OfflineSkillResponse
     */
    public function offlineSkill($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineSkillWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Sets the specified skill version as the online version.
     *
     * @remarks
     * Sets the specified skill version as the online version.
     *
     * @param tmpReq - OnlineSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OnlineSkillResponse
     *
     * @param string             $workspaceId
     * @param string             $skillName
     * @param OnlineSkillRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return OnlineSkillResponse
     */
    public function onlineSkillWithOptions($workspaceId, $skillName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new OnlineSkillShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OnlineSkill',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/actions/online',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OnlineSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the specified skill version as the online version.
     *
     * @remarks
     * Sets the specified skill version as the online version.
     *
     * @param request - OnlineSkillRequest
     *
     * @returns OnlineSkillResponse
     *
     * @param string             $workspaceId
     * @param string             $skillName
     * @param OnlineSkillRequest $request
     *
     * @return OnlineSkillResponse
     */
    public function onlineSkill($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineSkillWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Parses and checks one or more skill ZIP packages uploaded to OSS, and returns the names, versions, and conflict check results.
     *
     * @remarks
     * Checks one or more skill ZIP packages uploaded to OSS for skill names, versions, and import conflicts.
     * After the check passes, call [UploadSkillViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/UploadSkillViaOss) or [BatchUploadSkillsViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/BatchUploadSkillsViaOss) to import the skills into the workspace.
     *
     * @param tmpReq - PrecheckSkillUploadViaOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrecheckSkillUploadViaOssResponse
     *
     * @param string                           $workspaceId
     * @param PrecheckSkillUploadViaOssRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return PrecheckSkillUploadViaOssResponse
     */
    public function precheckSkillUploadViaOssWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new PrecheckSkillUploadViaOssShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PrecheckSkillUploadViaOss',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skill-actions/precheck-upload-via-oss',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PrecheckSkillUploadViaOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Parses and checks one or more skill ZIP packages uploaded to OSS, and returns the names, versions, and conflict check results.
     *
     * @remarks
     * Checks one or more skill ZIP packages uploaded to OSS for skill names, versions, and import conflicts.
     * After the check passes, call [UploadSkillViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/UploadSkillViaOss) or [BatchUploadSkillsViaOss](https://api.aliyun.com/document/AgentCore/2026-08-04/BatchUploadSkillsViaOss) to import the skills into the workspace.
     *
     * @param request - PrecheckSkillUploadViaOssRequest
     *
     * @returns PrecheckSkillUploadViaOssResponse
     *
     * @param string                           $workspaceId
     * @param PrecheckSkillUploadViaOssRequest $request
     *
     * @return PrecheckSkillUploadViaOssResponse
     */
    public function precheckSkillUploadViaOss($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->precheckSkillUploadViaOssWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Prepares the SCIM receiving configuration and returns the provisioning URL and credential summary. Issues a token if no available credentials exist and returns the plaintext only in this response, without automatically enabling AgentCore user synchronization.
     *
     * @remarks
     * Prepares the receiving endpoint and access token for integrating an enterprise identity system with SCIM user synchronization. The enterprise identity system uses this information to provision users to the shared user pool of AgentCore.
     * SCIM is a user provisioning protocol. The enterprise identity system first sends users to the receiving endpoint, and then AgentCore synchronizes the users from the user pool to the workspace.
     * ### Before you begin
     * A `CustomSSO` binding has been created by using [CreateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProvider), and the shared user pool is ready. SCIM integration can be performed independently of SAML logon configuration.
     * ### What this operation prepares
     * This operation enables the SCIM receiving endpoint and returns the receiving URL and credential summary:
     * | Current credential status | Returned result |
     * | --- | --- |
     * | An unexpired credential with the status of `Enabled` already exists | Reuses the existing credential. The `token` field returns an empty string `""`. Use the previously saved token. |
     * | No available credentials exist | Creates a new credential. The `token` field returns the plaintext of the new token, which is returned only in this response. |
     * The plaintext of an existing token cannot be queried again. If the token is lost, you can create a new token by calling [CreateIdentityProviderSCIMCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSCIMCredential). A maximum of two credentials can be retained for the same user pool. When the limit is reached, you must delete unused credentials first.
     * ### Subsequent configuration
     * 1. Configure the returned receiving URL and valid token in the SCIM user provisioning settings of the enterprise identity system.
     * 2. Complete the connection test and user assignment in the enterprise identity system.
     * 3. Enable AgentCore user synchronization by calling [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM), and then query the synchronization result by calling [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM).
     *
     * @param request - PrepareIdentityProviderSCIMRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrepareIdentityProviderSCIMResponse
     *
     * @param string                             $workspaceId
     * @param PrepareIdentityProviderSCIMRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return PrepareIdentityProviderSCIMResponse
     */
    public function prepareIdentityProviderSCIMWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'PrepareIdentityProviderSCIM',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/scim-provisioning/prepare',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PrepareIdentityProviderSCIMResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Prepares the SCIM receiving configuration and returns the provisioning URL and credential summary. Issues a token if no available credentials exist and returns the plaintext only in this response, without automatically enabling AgentCore user synchronization.
     *
     * @remarks
     * Prepares the receiving endpoint and access token for integrating an enterprise identity system with SCIM user synchronization. The enterprise identity system uses this information to provision users to the shared user pool of AgentCore.
     * SCIM is a user provisioning protocol. The enterprise identity system first sends users to the receiving endpoint, and then AgentCore synchronizes the users from the user pool to the workspace.
     * ### Before you begin
     * A `CustomSSO` binding has been created by using [CreateIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProvider), and the shared user pool is ready. SCIM integration can be performed independently of SAML logon configuration.
     * ### What this operation prepares
     * This operation enables the SCIM receiving endpoint and returns the receiving URL and credential summary:
     * | Current credential status | Returned result |
     * | --- | --- |
     * | An unexpired credential with the status of `Enabled` already exists | Reuses the existing credential. The `token` field returns an empty string `""`. Use the previously saved token. |
     * | No available credentials exist | Creates a new credential. The `token` field returns the plaintext of the new token, which is returned only in this response. |
     * The plaintext of an existing token cannot be queried again. If the token is lost, you can create a new token by calling [CreateIdentityProviderSCIMCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSCIMCredential). A maximum of two credentials can be retained for the same user pool. When the limit is reached, you must delete unused credentials first.
     * ### Subsequent configuration
     * 1. Configure the returned receiving URL and valid token in the SCIM user provisioning settings of the enterprise identity system.
     * 2. Complete the connection test and user assignment in the enterprise identity system.
     * 3. Enable AgentCore user synchronization by calling [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM), and then query the synchronization result by calling [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM).
     *
     * @param request - PrepareIdentityProviderSCIMRequest
     *
     * @returns PrepareIdentityProviderSCIMResponse
     *
     * @param string                             $workspaceId
     * @param PrepareIdentityProviderSCIMRequest $request
     *
     * @return PrepareIdentityProviderSCIMResponse
     */
    public function prepareIdentityProviderSCIM($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->prepareIdentityProviderSCIMWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Publishes a specified skill version and changes its status to published.
     *
     * @remarks
     * Publishes a specified skill version and changes its status to published.
     *
     * @param tmpReq - PublishSkillVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishSkillVersionResponse
     *
     * @param string                     $workspaceId
     * @param string                     $skillName
     * @param string                     $skillVersion
     * @param PublishSkillVersionRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return PublishSkillVersionResponse
     */
    public function publishSkillVersionWithOptions($workspaceId, $skillName, $skillVersion, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new PublishSkillVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishSkillVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/versions/' . Url::percentEncode($skillVersion) . '/actions/publish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishSkillVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a specified skill version and changes its status to published.
     *
     * @remarks
     * Publishes a specified skill version and changes its status to published.
     *
     * @param request - PublishSkillVersionRequest
     *
     * @returns PublishSkillVersionResponse
     *
     * @param string                     $workspaceId
     * @param string                     $skillName
     * @param string                     $skillVersion
     * @param PublishSkillVersionRequest $request
     *
     * @return PublishSkillVersionResponse
     */
    public function publishSkillVersion($workspaceId, $skillName, $skillVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishSkillVersionWithOptions($workspaceId, $skillName, $skillVersion, $request, $headers, $runtime);
    }

    /**
     * Submits a request to rebuild a single sandbox image for a specified managed agent. Existing sessions may be interrupted. An HTTP 200 response only indicates that the request is accepted. Use the returned operationId to call GetSandboxRebuildOperation to query the overall result. Only a SUCCEEDED status indicates that the rebuild is complete. Do not automatically resubmit the rebuild request if the query times out, returns UNKNOWN, or the result is unclear.
     *
     * @remarks
     * Submits a request to rebuild a single sandbox image for a specified managed agent. Existing sessions may be interrupted. An HTTP 200 response only indicates that the request is successfully submitted and accepted. You must use the returned operationId to call GetSandboxRebuildOperation. Only an overall SUCCEEDED status indicates that the rebuild is complete. Do not automatically resubmit the request if the query times out, returns UNKNOWN, or the result is unclear. You can specify an endpoint runtime version by using serviceEndpointId. If this parameter is omitted, the default latest runtime identity is used.
     *
     * @param request - RebuildSandboxRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebuildSandboxResponse
     *
     * @param string                $workspaceId
     * @param string                $agentId
     * @param string                $sandboxId
     * @param RebuildSandboxRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RebuildSandboxResponse
     */
    public function rebuildSandboxWithOptions($workspaceId, $agentId, $sandboxId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceEndpointId) {
            @$query['serviceEndpointId'] = $request->serviceEndpointId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebuildSandbox',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents/' . Url::percentEncode($agentId) . '/sandboxes/' . Url::percentEncode($sandboxId) . '/rebuild',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RebuildSandboxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a request to rebuild a single sandbox image for a specified managed agent. Existing sessions may be interrupted. An HTTP 200 response only indicates that the request is accepted. Use the returned operationId to call GetSandboxRebuildOperation to query the overall result. Only a SUCCEEDED status indicates that the rebuild is complete. Do not automatically resubmit the rebuild request if the query times out, returns UNKNOWN, or the result is unclear.
     *
     * @remarks
     * Submits a request to rebuild a single sandbox image for a specified managed agent. Existing sessions may be interrupted. An HTTP 200 response only indicates that the request is successfully submitted and accepted. You must use the returned operationId to call GetSandboxRebuildOperation. Only an overall SUCCEEDED status indicates that the rebuild is complete. Do not automatically resubmit the request if the query times out, returns UNKNOWN, or the result is unclear. You can specify an endpoint runtime version by using serviceEndpointId. If this parameter is omitted, the default latest runtime identity is used.
     *
     * @param request - RebuildSandboxRequest
     *
     * @returns RebuildSandboxResponse
     *
     * @param string                $workspaceId
     * @param string                $agentId
     * @param string                $sandboxId
     * @param RebuildSandboxRequest $request
     *
     * @return RebuildSandboxResponse
     */
    public function rebuildSandbox($workspaceId, $agentId, $sandboxId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebuildSandboxWithOptions($workspaceId, $agentId, $sandboxId, $request, $headers, $runtime);
    }

    /**
     * Reverts a specified skill version to an editable draft for further modification.
     *
     * @remarks
     * Reverts a specified skill version to an editable draft for further modification.
     *
     * @param tmpReq - RedraftSkillVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RedraftSkillVersionResponse
     *
     * @param string                     $workspaceId
     * @param string                     $skillName
     * @param string                     $skillVersion
     * @param RedraftSkillVersionRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RedraftSkillVersionResponse
     */
    public function redraftSkillVersionWithOptions($workspaceId, $skillName, $skillVersion, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RedraftSkillVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RedraftSkillVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/versions/' . Url::percentEncode($skillVersion) . '/actions/redraft',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RedraftSkillVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reverts a specified skill version to an editable draft for further modification.
     *
     * @remarks
     * Reverts a specified skill version to an editable draft for further modification.
     *
     * @param request - RedraftSkillVersionRequest
     *
     * @returns RedraftSkillVersionResponse
     *
     * @param string                     $workspaceId
     * @param string                     $skillName
     * @param string                     $skillVersion
     * @param RedraftSkillVersionRequest $request
     *
     * @return RedraftSkillVersionResponse
     */
    public function redraftSkillVersion($workspaceId, $skillName, $skillVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->redraftSkillVersionWithOptions($workspaceId, $skillName, $skillVersion, $request, $headers, $runtime);
    }

    /**
     * Resets the logon password of a specified user. Specify the user by using agentCoreUserId or username. You must specify at least one of them. This operation only supports resetting the passwords of users who use local password authentication for the workspace. If you do not specify the password parameter, the server generates a random password and returns it in the response.
     *
     * @remarks
     * Resets the logon password of a specified user.
     *
     * @param tmpReq - ResetUserPasswordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetUserPasswordResponse
     *
     * @param string                   $workspaceId
     * @param ResetUserPasswordRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ResetUserPasswordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetUserPassword',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/users/actions/reset-password',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the logon password of a specified user. Specify the user by using agentCoreUserId or username. You must specify at least one of them. This operation only supports resetting the passwords of users who use local password authentication for the workspace. If you do not specify the password parameter, the server generates a random password and returns it in the response.
     *
     * @remarks
     * Resets the logon password of a specified user.
     *
     * @param request - ResetUserPasswordRequest
     *
     * @returns ResetUserPasswordResponse
     *
     * @param string                   $workspaceId
     * @param ResetUserPasswordRequest $request
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPassword($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetUserPasswordWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Resubmits the creation request for an ACR image cache in a specified workspace.
     *
     * @remarks
     * Resubmits the creation request for an existing image cache to recreate a cache that has not been successfully created.
     * ### Call scope
     * Pass `regionId`, `workspaceId`, and `clientToken` as query parameters, and use `imageId` to locate the cache. This operation applies to ACR source caches and re-verifies the source repository authorization before submission.
     * ### Query retry results
     * A successful response indicates that a retry acceptance snapshot is returned, not that the creation is complete. Query the status through [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache). `READY` indicates that the cache is ready. If the status is `FAILED`, check the `error` field.
     * The `clientToken` parameter currently only verifies that the value is not empty and does not guarantee deduplication or recovery of the original acceptance result based on this identifier.
     *
     * @param tmpReq - RetryImageCacheRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryImageCacheResponse
     *
     * @param string                 $imageId
     * @param RetryImageCacheRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RetryImageCacheResponse
     */
    public function retryImageCacheWithOptions($imageId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RetryImageCacheShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetryImageCache',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/image-caches/' . Url::percentEncode($imageId) . '/retry',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resubmits the creation request for an ACR image cache in a specified workspace.
     *
     * @remarks
     * Resubmits the creation request for an existing image cache to recreate a cache that has not been successfully created.
     * ### Call scope
     * Pass `regionId`, `workspaceId`, and `clientToken` as query parameters, and use `imageId` to locate the cache. This operation applies to ACR source caches and re-verifies the source repository authorization before submission.
     * ### Query retry results
     * A successful response indicates that a retry acceptance snapshot is returned, not that the creation is complete. Query the status through [GetImageCache](https://api.aliyun.com/document/AgentCore/2026-08-04/GetImageCache). `READY` indicates that the cache is ready. If the status is `FAILED`, check the `error` field.
     * The `clientToken` parameter currently only verifies that the value is not empty and does not guarantee deduplication or recovery of the original acceptance result based on this identifier.
     *
     * @param request - RetryImageCacheRequest
     *
     * @returns RetryImageCacheResponse
     *
     * @param string                 $imageId
     * @param RetryImageCacheRequest $request
     *
     * @return RetryImageCacheResponse
     */
    public function retryImageCache($imageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryImageCacheWithOptions($imageId, $request, $headers, $runtime);
    }

    /**
     * Retrieves long-term memory from MemoryStore based on semantics.
     *
     * @remarks
     * Retrieves relevant memories semantically from the long-term memory store (MemoryStore) to help agents obtain the information required for subsequent tasks.
     *
     * @param tmpReq - SearchMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMemoriesResponse
     *
     * @param string                $workspaceId
     * @param string                $memoryStoreName
     * @param SearchMemoriesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SearchMemoriesResponse
     */
    public function searchMemoriesWithOptions($workspaceId, $memoryStoreName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchMemoriesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchMemories',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/memories/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves long-term memory from MemoryStore based on semantics.
     *
     * @remarks
     * Retrieves relevant memories semantically from the long-term memory store (MemoryStore) to help agents obtain the information required for subsequent tasks.
     *
     * @param request - SearchMemoriesRequest
     *
     * @returns SearchMemoriesResponse
     *
     * @param string                $workspaceId
     * @param string                $memoryStoreName
     * @param SearchMemoriesRequest $request
     *
     * @return SearchMemoriesResponse
     */
    public function searchMemories($workspaceId, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchMemoriesWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Submits a specified draft version of an AgentSpec for review. If no release pipeline is configured, the version is directly published online.
     *
     * @remarks
     * Submits a specified draft version of an agent template for review.
     * If no release pipeline is configured, the version is directly published online.
     *
     * @param tmpReq - SubmitAgentSpecVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAgentSpecVersionResponse
     *
     * @param string                        $workspaceId
     * @param string                        $agentSpecName
     * @param string                        $agentSpecVersion
     * @param SubmitAgentSpecVersionRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitAgentSpecVersionResponse
     */
    public function submitAgentSpecVersionWithOptions($workspaceId, $agentSpecName, $agentSpecVersion, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitAgentSpecVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitAgentSpecVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '/versions/' . Url::percentEncode($agentSpecVersion) . '/actions/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAgentSpecVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a specified draft version of an AgentSpec for review. If no release pipeline is configured, the version is directly published online.
     *
     * @remarks
     * Submits a specified draft version of an agent template for review.
     * If no release pipeline is configured, the version is directly published online.
     *
     * @param request - SubmitAgentSpecVersionRequest
     *
     * @returns SubmitAgentSpecVersionResponse
     *
     * @param string                        $workspaceId
     * @param string                        $agentSpecName
     * @param string                        $agentSpecVersion
     * @param SubmitAgentSpecVersionRequest $request
     *
     * @return SubmitAgentSpecVersionResponse
     */
    public function submitAgentSpecVersion($workspaceId, $agentSpecName, $agentSpecVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitAgentSpecVersionWithOptions($workspaceId, $agentSpecName, $agentSpecVersion, $request, $headers, $runtime);
    }

    /**
     * Submits a specified draft version of a skill for review.
     *
     * @remarks
     * Submits a specified draft version of a skill for review.
     *
     * @param tmpReq - SubmitSkillVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSkillVersionResponse
     *
     * @param string                    $workspaceId
     * @param string                    $skillName
     * @param string                    $skillVersion
     * @param SubmitSkillVersionRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitSkillVersionResponse
     */
    public function submitSkillVersionWithOptions($workspaceId, $skillName, $skillVersion, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitSkillVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitSkillVersion',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/versions/' . Url::percentEncode($skillVersion) . '/actions/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSkillVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a specified draft version of a skill for review.
     *
     * @remarks
     * Submits a specified draft version of a skill for review.
     *
     * @param request - SubmitSkillVersionRequest
     *
     * @returns SubmitSkillVersionResponse
     *
     * @param string                    $workspaceId
     * @param string                    $skillName
     * @param string                    $skillVersion
     * @param SubmitSkillVersionRequest $request
     *
     * @return SubmitSkillVersionResponse
     */
    public function submitSkillVersion($workspaceId, $skillName, $skillVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitSkillVersionWithOptions($workspaceId, $skillName, $skillVersion, $request, $headers, $runtime);
    }

    /**
     * Updates an access application.
     *
     * @remarks
     * Modifies the configuration of an access application in a workspace to adjust application integration and identity source settings.
     *
     * @param tmpReq - UpdateAccessApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccessApplicationResponse
     *
     * @param string                         $workspaceId
     * @param string                         $applicationId
     * @param UpdateAccessApplicationRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAccessApplicationResponse
     */
    public function updateAccessApplicationWithOptions($workspaceId, $applicationId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAccessApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAccessApplication',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/access-applications/' . Url::percentEncode($applicationId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an access application.
     *
     * @remarks
     * Modifies the configuration of an access application in a workspace to adjust application integration and identity source settings.
     *
     * @param request - UpdateAccessApplicationRequest
     *
     * @returns UpdateAccessApplicationResponse
     *
     * @param string                         $workspaceId
     * @param string                         $applicationId
     * @param UpdateAccessApplicationRequest $request
     *
     * @return UpdateAccessApplicationResponse
     */
    public function updateAccessApplication($workspaceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAccessApplicationWithOptions($workspaceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Updates the ServiceEndpoint, enablement status, or channel behavior configuration bound to an IM channel. At least one updatable field must be provided.
     *
     * @remarks
     * Updates the ServiceEndpoint, enablement status, or channel behavior configuration bound to an IM channel.
     * At least one updatable field must be provided.
     *
     * @param tmpReq - UpdateAgentIMChannelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentIMChannelResponse
     *
     * @param string                      $workspaceId
     * @param string                      $agentId
     * @param string                      $imChannelId
     * @param UpdateAgentIMChannelRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateAgentIMChannelResponse
     */
    public function updateAgentIMChannelWithOptions($workspaceId, $agentId, $imChannelId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAgentIMChannelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentIMChannel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/im-channels/' . Url::percentEncode($imChannelId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentIMChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the ServiceEndpoint, enablement status, or channel behavior configuration bound to an IM channel. At least one updatable field must be provided.
     *
     * @remarks
     * Updates the ServiceEndpoint, enablement status, or channel behavior configuration bound to an IM channel.
     * At least one updatable field must be provided.
     *
     * @param request - UpdateAgentIMChannelRequest
     *
     * @returns UpdateAgentIMChannelResponse
     *
     * @param string                      $workspaceId
     * @param string                      $agentId
     * @param string                      $imChannelId
     * @param UpdateAgentIMChannelRequest $request
     *
     * @return UpdateAgentIMChannelResponse
     */
    public function updateAgentIMChannel($workspaceId, $agentId, $imChannelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentIMChannelWithOptions($workspaceId, $agentId, $imChannelId, $request, $headers, $runtime);
    }

    /**
     * Fully updates the channel credentials for a specified IM channel. Secrets are not returned in the response.
     *
     * @remarks
     * Replaces the access credentials for an IM channel to rotate keys or correct authentication configurations.
     * Submit the complete new credentials. The response does not return plaintext secrets.
     *
     * @param tmpReq - UpdateAgentIMChannelCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentIMChannelCredentialResponse
     *
     * @param string                                $workspaceId
     * @param string                                $agentId
     * @param string                                $imChannelId
     * @param UpdateAgentIMChannelCredentialRequest $tmpReq
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateAgentIMChannelCredentialResponse
     */
    public function updateAgentIMChannelCredentialWithOptions($workspaceId, $agentId, $imChannelId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAgentIMChannelCredentialShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentIMChannelCredential',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agents/' . Url::percentEncode($agentId) . '/im-channels/' . Url::percentEncode($imChannelId) . '/actions/update-credential',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentIMChannelCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Fully updates the channel credentials for a specified IM channel. Secrets are not returned in the response.
     *
     * @remarks
     * Replaces the access credentials for an IM channel to rotate keys or correct authentication configurations.
     * Submit the complete new credentials. The response does not return plaintext secrets.
     *
     * @param request - UpdateAgentIMChannelCredentialRequest
     *
     * @returns UpdateAgentIMChannelCredentialResponse
     *
     * @param string                                $workspaceId
     * @param string                                $agentId
     * @param string                                $imChannelId
     * @param UpdateAgentIMChannelCredentialRequest $request
     *
     * @return UpdateAgentIMChannelCredentialResponse
     */
    public function updateAgentIMChannelCredential($workspaceId, $agentId, $imChannelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentIMChannelCredentialWithOptions($workspaceId, $agentId, $imChannelId, $request, $headers, $runtime);
    }

    /**
     * Updates the business tags, version tags, and visibility scope of a specified AgentSpec. Fields not provided remain unchanged.
     *
     * @remarks
     * Updates the business tags, version tags, and visibility scope of a specified agent template. Fields not provided remain unchanged.
     *
     * @param tmpReq - UpdateAgentSpecRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentSpecResponse
     *
     * @param string                 $workspaceId
     * @param string                 $agentSpecName
     * @param UpdateAgentSpecRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAgentSpecResponse
     */
    public function updateAgentSpecWithOptions($workspaceId, $agentSpecName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAgentSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentSpec',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-specs/' . Url::percentEncode($agentSpecName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the business tags, version tags, and visibility scope of a specified AgentSpec. Fields not provided remain unchanged.
     *
     * @remarks
     * Updates the business tags, version tags, and visibility scope of a specified agent template. Fields not provided remain unchanged.
     *
     * @param request - UpdateAgentSpecRequest
     *
     * @returns UpdateAgentSpecResponse
     *
     * @param string                 $workspaceId
     * @param string                 $agentSpecName
     * @param UpdateAgentSpecRequest $request
     *
     * @return UpdateAgentSpecResponse
     */
    public function updateAgentSpec($workspaceId, $agentSpecName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentSpecWithOptions($workspaceId, $agentSpecName, $request, $headers, $runtime);
    }

    /**
     * Updates the API key or service account key collection for an enabled QoderCLI connector. When serviceAccountKeys is submitted, the service uses it as the complete updated key collection to add, rename, rotate, and delete keys.
     *
     * @remarks
     * Updates the API key or service account key collection for an enabled QoderCLI connector.
     * When updating service account keys, existing keys are matched by their record `id`.
     *
     * @param tmpReq - UpdateConnectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConnectorResponse
     *
     * @param string                 $workspaceId
     * @param string                 $connectorName
     * @param UpdateConnectorRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateConnectorResponse
     */
    public function updateConnectorWithOptions($workspaceId, $connectorName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateConnectorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConnector',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/connectors/' . Url::percentEncode($connectorName) . '/actions/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the API key or service account key collection for an enabled QoderCLI connector. When serviceAccountKeys is submitted, the service uses it as the complete updated key collection to add, rename, rotate, and delete keys.
     *
     * @remarks
     * Updates the API key or service account key collection for an enabled QoderCLI connector.
     * When updating service account keys, existing keys are matched by their record `id`.
     *
     * @param request - UpdateConnectorRequest
     *
     * @returns UpdateConnectorResponse
     *
     * @param string                 $workspaceId
     * @param string                 $connectorName
     * @param UpdateConnectorRequest $request
     *
     * @return UpdateConnectorResponse
     */
    public function updateConnector($workspaceId, $connectorName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConnectorWithOptions($workspaceId, $connectorName, $request, $headers, $runtime);
    }

    /**
     * Updates the content, description, or MCP header application scope of a specified credential. Unspecified configurations retain their original values. The credential name and type cannot be modified.
     *
     * @remarks
     * Updates the content, description, or MCP header application scope of a specified credential.
     * ### Update rules
     * You must modify at least one of the credential content, description, or application scope. When modifying only the application scope, you do not need to submit credentialMetadata or description.
     * - Omit credentialMetadata: The original credential content is retained. If provided, submit a JSON string according to the original credential type.
     * - Omit description: The original description is retained.
     * - The credential name and credentialType cannot be modified.
     * ### MCP header application scope
     * Only mcpHeader supports updating the application scope. For apiKey, do not submit resourceScope or resourceRefs.
     * - Omit both the scope and the resource list: The original configuration is retained.
     * - Submit resourceRefs: You must also submit resourceScope.
     * - resourceScope=ALL: Omit resourceRefs.
     * - resourceScope=SPECIFIED: Submit resourceRefs. An empty array [] is allowed during updates. For each item, specify resourceType=mcpServer and resourceId.
     * ### Query results
     * After the update, call [GetCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCredential) to query the current configuration and the masked credential content.
     *
     * @param tmpReq - UpdateCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCredentialResponse
     *
     * @param string                  $workspaceId
     * @param string                  $credentialId
     * @param UpdateCredentialRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCredentialResponse
     */
    public function updateCredentialWithOptions($workspaceId, $credentialId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCredentialShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCredential',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/credentials/' . Url::percentEncode($credentialId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the content, description, or MCP header application scope of a specified credential. Unspecified configurations retain their original values. The credential name and type cannot be modified.
     *
     * @remarks
     * Updates the content, description, or MCP header application scope of a specified credential.
     * ### Update rules
     * You must modify at least one of the credential content, description, or application scope. When modifying only the application scope, you do not need to submit credentialMetadata or description.
     * - Omit credentialMetadata: The original credential content is retained. If provided, submit a JSON string according to the original credential type.
     * - Omit description: The original description is retained.
     * - The credential name and credentialType cannot be modified.
     * ### MCP header application scope
     * Only mcpHeader supports updating the application scope. For apiKey, do not submit resourceScope or resourceRefs.
     * - Omit both the scope and the resource list: The original configuration is retained.
     * - Submit resourceRefs: You must also submit resourceScope.
     * - resourceScope=ALL: Omit resourceRefs.
     * - resourceScope=SPECIFIED: Submit resourceRefs. An empty array [] is allowed during updates. For each item, specify resourceType=mcpServer and resourceId.
     * ### Query results
     * After the update, call [GetCredential](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCredential) to query the current configuration and the masked credential content.
     *
     * @param request - UpdateCredentialRequest
     *
     * @returns UpdateCredentialResponse
     *
     * @param string                  $workspaceId
     * @param string                  $credentialId
     * @param UpdateCredentialRequest $request
     *
     * @return UpdateCredentialResponse
     */
    public function updateCredential($workspaceId, $credentialId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCredentialWithOptions($workspaceId, $credentialId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a custom code or image agent in a specified workspace and executes the update asynchronously. Omitted top-level fields retain their original configurations. You can call GetCustomAgent to query the update result.
     *
     * @remarks
     * Updates the deployment artifact or runtime configuration of a custom code or image agent to release new code, images, or configurations.
     * ### Update rules
     * Updates a custom code or image agent in a specified workspace. You must provide at least one top-level field to update. Omitted top-level fields retain their original configurations.
     * The update rules for each configuration are as follows.
     * | Configuration | Update method and precautions |
     * | --- | --- |
     * | `name` | Omit to retain the original name. The value cannot be `null` or an empty string. |
     * | `description` | Omit to retain the original description. Pass `null` to clear the description. |
     * | `artifact` | When submitting, specify `port` and the required fields for the selected source. To retain a custom startup command, also specify `entrypoint`. `code` and `container` are mutually exclusive. |
     * | `runtime` | When submitting, specify both `compute` and `sessionPolicy`. To retain the elastic policy, submit the complete `hpa`. |
     * | `environment` | The environment variable list is replaced as a whole. You must include all variables that need to be retained. |
     * | `network` | When submitting, omitted access items are treated as allowed. To retain access restrictions, specify both `accessInternet` and `accessVpc`. |
     * | `healthCheck` | When submitting, you must specify `port`. Other unspecified configurations use default values. Pass `null` to remove the health check. |
     * | `logging` | When submitting `logging.sls`, specify non-empty `project` and `logstore` at the same time. |
     * | `protocol`, `ossMounts`, `agenticFsMounts` | When submitting, the corresponding list is replaced as a whole. Pass `[]` to clear the corresponding list. `agenticFsMounts` does not accept `null`. |
     * ### Deployment artifacts
     * Three deployment methods are supported: code packages, ACR images, and custom images. When updating or switching the deployment method, provide the configuration according to the target method.
     * | Deployment method | Configuration requirements |
     * | --- | --- |
     * | ACR image | When updating the image tag, also provide `artifact.port`, as well as `type=acr`, `instanceId`, `namespace`, `repo`, and `tag` in `artifact.container`. To retain a custom startup command, also provide `entrypoint`. |
     * | Custom image | Set `artifact.container.type=custom`, provide the complete `customImage`, and provide `clientToken` in the query parameters. When switching to this method, also specify `artifact.port`. Do not include ACR instance, namespace, repository, and tag fields in `container`. |
     * | Code package | Provide `artifact.port`, as well as `sourceUri`, `languageRuntime`, and `entrypoint` in `artifact.code`. Do not commit `container` at the same time. |
     * **Custom image**
     * - `customImage` must include the complete image address `image` and the independent pull network `pullNetwork`. The image address does not include a protocol or user information, and supports addresses with tags or digests.
     * - For public network pulling, set `pullNetwork.type=public` and do not include VPC fields. For VPC pulling, set `type=vpc` and provide `vpcId`, `vSwitchId`, and `securityGroupId` at the same time. The image pull network and the agent runtime network are configured separately.
     * - When repository authentication is required, provide non-empty `username` and `password` at the same time. For anonymous access, omit both. The response does not return the password.
     * - Omitting the entire `customImage` retains the saved image source. Commit the complete object when updating the custom image source. You do not need to resubmit this object when only adjusting the runtime configuration.
     * - Custom images and code packages do not support enabling `useImageCache`. The value in the final configuration must be `false`. When this field is omitted for a custom image, it is treated as `false`. When switching to a code package, if the original configuration is `true`, you must explicitly change it to `false`. When updating other sources, omitting this field retains the original value.
     * **Code package**
     * - Supports ZIP or TAR.GZ. The compressed package size cannot exceed `500000000` bytes. Dependencies are packaged by the invoker. The platform does not execute online builds or install dependencies.
     * - Query the active `languageRuntime` values by invoking [ListAgentCodeRuntimes](https://api.aliyun.com/document/AgentCore/2026-08-04/ListAgentCodeRuntimes).
     * - `sourceUri` supports `oss://` addresses or HTTPS object addresses of standard OSS public domain name, including signed URLs.
     * - For local code packages, first invoke [GetAgentCodePackageUploadUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageUploadUrl), upload the file according to the response information, and then commit the returned `sourceUri`.
     * - The new source is verified for read permissions, objects, and size before acceptance, and is transferred to a fixed copy on the platform. If the transfer failed, the current agent configuration is not saved. Common updates can reuse the saved fixed code package address.
     * ### Runtime configuration and elasticity
     * Omitting the entire `runtime` retains the original runtime configuration. When submitting `runtime`, you must specify both `compute` and `sessionPolicy`.
     * If you submit `runtime` but omit `hpa`, or omit some fields in `hpa`, the unspecified items use the following default values. **To retain the existing elastic policy, submit the complete `hpa`.**
     * | Field | Default value | Description |
     * | --- | --- | --- |
     * | `enabled` | `false` | Specifies whether elastic scaling is enabled. |
     * | `minSandboxCount` | `1` | The minimum number of instances. |
     * | `maxSandboxCount` | `10` | The maximum number of instances, which cannot be less than the minimum number. |
     * | `maxConcurrentSessionsPerSandbox` | `20` | The maximum number of concurrent sessions per instance. Valid values: 1 to 20. |
     * | `sessionTtlSeconds` | `600` | The maximum idle time of a session, in seconds. |
     * The upper and lower limits of the number of instances are configuration values. Query the current number of instances through `sandboxPhaseCounts`.
     * When `sessionPolicy.type=ISOLATED_HEADER_FIELD`, you must specify a valid HTTP request header name `headerName`. Do not specify `headerName` for other session policies.
     * ### Network and mounts
     * Omitting the entire `network` retains the original configuration. When submitting this object, omitted access items are treated as allowed on the agent side, and actual access is restricted by the workspace network configuration.
     * To retain the original restrictions, submit both `accessInternet.enabled` and `accessVpc.enabled` at the same time. Do not submit only one of them.
     * The total number of `ossMounts` and `agenticFsMounts` cannot exceed 10. When updating either list, you must include all mount items that need to be retained in the list. The two lists are updated separately. You can use `agenticFsMounts=[]` to clear AgenticFS mounts, but you cannot use `null` to clear them.
     * In this operation, ACR images, custom images, and code packages all use the same user mount target rules: `mountPath` is the absolute path in the container, such as `/data/train`, and must not conflict with platform reserved directories. Mount targets must not be duplicated or form parent-child directory overwrites.
     * ### Environment variables
     * Omitting the entire `environment` retains the original configuration. When submitting `environment.variables`, the original list is replaced as a whole with the current list. You must include all variables that need to be retained.
     * The following methods all clear the environment variables configured by the user:
     * - `environment.variables=[]`.
     * - `environment=null`.
     * - Submit `environment` but omit `variables`, such as `environment={}`.
     * Variable names must be non-empty and unique in the list. Variable values must be strings, and empty strings are allowed.
     * ### Health checks and logs
     * Omitting the entire `healthCheck` retains the original configuration. Pass `null` to remove the health check. When submitting this object, you must specify `port`. Other unspecified items use the following default values.
     * | Field | Default value |
     * | --- | --- |
     * | `path` | `/healthz` |
     * | `intervalSeconds` | `10` seconds |
     * | `timeoutSeconds` | `2` seconds |
     * | `unhealthyThreshold` | `3` times |
     * The health check port ranges from 1 to 65535. Health Check Interval, timeout period, and failure threshold must be positive integers, and the timeout period must be less than Health Check Interval. Do not submit `healthyThreshold`.
     * When configuring log delivery, `logging.sls.project` and `logging.sls.logstore` must be provided at the same time and cannot be empty.
     * ### Asynchronous results and retries
     * `success=true` indicates that the update request has been accepted. Call [GetCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgent) to query the configuration processing result.
     * | Field | Purpose |
     * | --- | --- |
     * | `latestSpecVersion` | The latest expected configuration version. |
     * | `effectiveSpecVersion` | The effective configuration version. |
     * | `latestVersionStatus` | The processing status of the latest expected configuration version. |
     * | `latestExecutionError` | The reason why the latest configuration is waiting for a retry or fails to be executed, and whether to automatically retry. |
     * | `status` | The overall status of the agent. |
     * | `sandboxPhaseCounts` | A snapshot of the number of instances counted by phase. |
     * When `latestVersionStatus` is `pending`, `processing`, or `waiting_retry`, you can continue to query later. `succeeded` indicates that the configuration is processed successfully. When the value is `failed`, troubleshoot the configuration based on `latestExecutionError`.
     * When explicitly submitting `customImage` or explicitly setting `artifact.container.type=custom`, you must provide `clientToken` in the query parameters. You can also optionally pass this parameter when updating ACR images or code packages to reuse the acceptance result of the same submission. The identifier is 1 to 128 characters in length and can contain letters, digits, periods, underscores, colons, and hyphens.
     * When retrying the same submission, reuse the original `clientToken`. The service returns the existing acceptance result based on the tenant, workspace, and this identifier. Use a new identifier when modifying the submission content.
     *
     * @param tmpReq - UpdateCustomAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomAgentResponse
     *
     * @param string                   $workspaceId
     * @param string                   $agentId
     * @param UpdateCustomAgentRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCustomAgentResponse
     */
    public function updateCustomAgentWithOptions($workspaceId, $agentId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCustomAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/custom-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a custom code or image agent in a specified workspace and executes the update asynchronously. Omitted top-level fields retain their original configurations. You can call GetCustomAgent to query the update result.
     *
     * @remarks
     * Updates the deployment artifact or runtime configuration of a custom code or image agent to release new code, images, or configurations.
     * ### Update rules
     * Updates a custom code or image agent in a specified workspace. You must provide at least one top-level field to update. Omitted top-level fields retain their original configurations.
     * The update rules for each configuration are as follows.
     * | Configuration | Update method and precautions |
     * | --- | --- |
     * | `name` | Omit to retain the original name. The value cannot be `null` or an empty string. |
     * | `description` | Omit to retain the original description. Pass `null` to clear the description. |
     * | `artifact` | When submitting, specify `port` and the required fields for the selected source. To retain a custom startup command, also specify `entrypoint`. `code` and `container` are mutually exclusive. |
     * | `runtime` | When submitting, specify both `compute` and `sessionPolicy`. To retain the elastic policy, submit the complete `hpa`. |
     * | `environment` | The environment variable list is replaced as a whole. You must include all variables that need to be retained. |
     * | `network` | When submitting, omitted access items are treated as allowed. To retain access restrictions, specify both `accessInternet` and `accessVpc`. |
     * | `healthCheck` | When submitting, you must specify `port`. Other unspecified configurations use default values. Pass `null` to remove the health check. |
     * | `logging` | When submitting `logging.sls`, specify non-empty `project` and `logstore` at the same time. |
     * | `protocol`, `ossMounts`, `agenticFsMounts` | When submitting, the corresponding list is replaced as a whole. Pass `[]` to clear the corresponding list. `agenticFsMounts` does not accept `null`. |
     * ### Deployment artifacts
     * Three deployment methods are supported: code packages, ACR images, and custom images. When updating or switching the deployment method, provide the configuration according to the target method.
     * | Deployment method | Configuration requirements |
     * | --- | --- |
     * | ACR image | When updating the image tag, also provide `artifact.port`, as well as `type=acr`, `instanceId`, `namespace`, `repo`, and `tag` in `artifact.container`. To retain a custom startup command, also provide `entrypoint`. |
     * | Custom image | Set `artifact.container.type=custom`, provide the complete `customImage`, and provide `clientToken` in the query parameters. When switching to this method, also specify `artifact.port`. Do not include ACR instance, namespace, repository, and tag fields in `container`. |
     * | Code package | Provide `artifact.port`, as well as `sourceUri`, `languageRuntime`, and `entrypoint` in `artifact.code`. Do not commit `container` at the same time. |
     * **Custom image**
     * - `customImage` must include the complete image address `image` and the independent pull network `pullNetwork`. The image address does not include a protocol or user information, and supports addresses with tags or digests.
     * - For public network pulling, set `pullNetwork.type=public` and do not include VPC fields. For VPC pulling, set `type=vpc` and provide `vpcId`, `vSwitchId`, and `securityGroupId` at the same time. The image pull network and the agent runtime network are configured separately.
     * - When repository authentication is required, provide non-empty `username` and `password` at the same time. For anonymous access, omit both. The response does not return the password.
     * - Omitting the entire `customImage` retains the saved image source. Commit the complete object when updating the custom image source. You do not need to resubmit this object when only adjusting the runtime configuration.
     * - Custom images and code packages do not support enabling `useImageCache`. The value in the final configuration must be `false`. When this field is omitted for a custom image, it is treated as `false`. When switching to a code package, if the original configuration is `true`, you must explicitly change it to `false`. When updating other sources, omitting this field retains the original value.
     * **Code package**
     * - Supports ZIP or TAR.GZ. The compressed package size cannot exceed `500000000` bytes. Dependencies are packaged by the invoker. The platform does not execute online builds or install dependencies.
     * - Query the active `languageRuntime` values by invoking [ListAgentCodeRuntimes](https://api.aliyun.com/document/AgentCore/2026-08-04/ListAgentCodeRuntimes).
     * - `sourceUri` supports `oss://` addresses or HTTPS object addresses of standard OSS public domain name, including signed URLs.
     * - For local code packages, first invoke [GetAgentCodePackageUploadUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageUploadUrl), upload the file according to the response information, and then commit the returned `sourceUri`.
     * - The new source is verified for read permissions, objects, and size before acceptance, and is transferred to a fixed copy on the platform. If the transfer failed, the current agent configuration is not saved. Common updates can reuse the saved fixed code package address.
     * ### Runtime configuration and elasticity
     * Omitting the entire `runtime` retains the original runtime configuration. When submitting `runtime`, you must specify both `compute` and `sessionPolicy`.
     * If you submit `runtime` but omit `hpa`, or omit some fields in `hpa`, the unspecified items use the following default values. **To retain the existing elastic policy, submit the complete `hpa`.**
     * | Field | Default value | Description |
     * | --- | --- | --- |
     * | `enabled` | `false` | Specifies whether elastic scaling is enabled. |
     * | `minSandboxCount` | `1` | The minimum number of instances. |
     * | `maxSandboxCount` | `10` | The maximum number of instances, which cannot be less than the minimum number. |
     * | `maxConcurrentSessionsPerSandbox` | `20` | The maximum number of concurrent sessions per instance. Valid values: 1 to 20. |
     * | `sessionTtlSeconds` | `600` | The maximum idle time of a session, in seconds. |
     * The upper and lower limits of the number of instances are configuration values. Query the current number of instances through `sandboxPhaseCounts`.
     * When `sessionPolicy.type=ISOLATED_HEADER_FIELD`, you must specify a valid HTTP request header name `headerName`. Do not specify `headerName` for other session policies.
     * ### Network and mounts
     * Omitting the entire `network` retains the original configuration. When submitting this object, omitted access items are treated as allowed on the agent side, and actual access is restricted by the workspace network configuration.
     * To retain the original restrictions, submit both `accessInternet.enabled` and `accessVpc.enabled` at the same time. Do not submit only one of them.
     * The total number of `ossMounts` and `agenticFsMounts` cannot exceed 10. When updating either list, you must include all mount items that need to be retained in the list. The two lists are updated separately. You can use `agenticFsMounts=[]` to clear AgenticFS mounts, but you cannot use `null` to clear them.
     * In this operation, ACR images, custom images, and code packages all use the same user mount target rules: `mountPath` is the absolute path in the container, such as `/data/train`, and must not conflict with platform reserved directories. Mount targets must not be duplicated or form parent-child directory overwrites.
     * ### Environment variables
     * Omitting the entire `environment` retains the original configuration. When submitting `environment.variables`, the original list is replaced as a whole with the current list. You must include all variables that need to be retained.
     * The following methods all clear the environment variables configured by the user:
     * - `environment.variables=[]`.
     * - `environment=null`.
     * - Submit `environment` but omit `variables`, such as `environment={}`.
     * Variable names must be non-empty and unique in the list. Variable values must be strings, and empty strings are allowed.
     * ### Health checks and logs
     * Omitting the entire `healthCheck` retains the original configuration. Pass `null` to remove the health check. When submitting this object, you must specify `port`. Other unspecified items use the following default values.
     * | Field | Default value |
     * | --- | --- |
     * | `path` | `/healthz` |
     * | `intervalSeconds` | `10` seconds |
     * | `timeoutSeconds` | `2` seconds |
     * | `unhealthyThreshold` | `3` times |
     * The health check port ranges from 1 to 65535. Health Check Interval, timeout period, and failure threshold must be positive integers, and the timeout period must be less than Health Check Interval. Do not submit `healthyThreshold`.
     * When configuring log delivery, `logging.sls.project` and `logging.sls.logstore` must be provided at the same time and cannot be empty.
     * ### Asynchronous results and retries
     * `success=true` indicates that the update request has been accepted. Call [GetCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetCustomAgent) to query the configuration processing result.
     * | Field | Purpose |
     * | --- | --- |
     * | `latestSpecVersion` | The latest expected configuration version. |
     * | `effectiveSpecVersion` | The effective configuration version. |
     * | `latestVersionStatus` | The processing status of the latest expected configuration version. |
     * | `latestExecutionError` | The reason why the latest configuration is waiting for a retry or fails to be executed, and whether to automatically retry. |
     * | `status` | The overall status of the agent. |
     * | `sandboxPhaseCounts` | A snapshot of the number of instances counted by phase. |
     * When `latestVersionStatus` is `pending`, `processing`, or `waiting_retry`, you can continue to query later. `succeeded` indicates that the configuration is processed successfully. When the value is `failed`, troubleshoot the configuration based on `latestExecutionError`.
     * When explicitly submitting `customImage` or explicitly setting `artifact.container.type=custom`, you must provide `clientToken` in the query parameters. You can also optionally pass this parameter when updating ACR images or code packages to reuse the acceptance result of the same submission. The identifier is 1 to 128 characters in length and can contain letters, digits, periods, underscores, colons, and hyphens.
     * When retrying the same submission, reuse the original `clientToken`. The service returns the existing acceptance result based on the tenant, workspace, and this identifier. Use a new identifier when modifying the submission content.
     *
     * @param request - UpdateCustomAgentRequest
     *
     * @returns UpdateCustomAgentResponse
     *
     * @param string                   $workspaceId
     * @param string                   $agentId
     * @param UpdateCustomAgentRequest $request
     *
     * @return UpdateCustomAgentResponse
     */
    public function updateCustomAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCustomAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Updates the model source, instructions, tools, and skills of a managed agent, and processes the configuration asynchronously.
     *
     * @remarks
     * Updates the model, instruction, tool, or skill configurations saved on the platform side for a managed agent to adjust its capability configurations after integration.
     * ### Update rules
     * Provide at least one updatable field. Omitted top-level fields retain their original configurations. You can set description=null to clear the description. The tools and skills fields are replaced as a whole upon submission. You must include the items to be retained, or pass [] to clear the corresponding explicit lists.
     * ### Switch model sources
     * - To switch to PLATFORM, provide modelSource=PLATFORM and a valid model configuration, including the model connection ID and model name.
     * - To switch to RUNTIME, change the Settings to modelSource=RUNTIME and do not commit the platform model. The original platform model configuration is removed when the source is switched.
     * When a template is used, configurations belonging to the template such as instructions are read from the template. A successful update indicates that the request is accepted. Invoke [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent) to query the configuration version and external accessed state. The clientToken parameter does not provide idempotence guarantees at this time.
     *
     * @param tmpReq - UpdateExternalAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExternalAgentResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentId
     * @param UpdateExternalAgentRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateExternalAgentResponse
     */
    public function updateExternalAgentWithOptions($workspaceId, $agentId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateExternalAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExternalAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/external-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateExternalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the model source, instructions, tools, and skills of a managed agent, and processes the configuration asynchronously.
     *
     * @remarks
     * Updates the model, instruction, tool, or skill configurations saved on the platform side for a managed agent to adjust its capability configurations after integration.
     * ### Update rules
     * Provide at least one updatable field. Omitted top-level fields retain their original configurations. You can set description=null to clear the description. The tools and skills fields are replaced as a whole upon submission. You must include the items to be retained, or pass [] to clear the corresponding explicit lists.
     * ### Switch model sources
     * - To switch to PLATFORM, provide modelSource=PLATFORM and a valid model configuration, including the model connection ID and model name.
     * - To switch to RUNTIME, change the Settings to modelSource=RUNTIME and do not commit the platform model. The original platform model configuration is removed when the source is switched.
     * When a template is used, configurations belonging to the template such as instructions are read from the template. A successful update indicates that the request is accepted. Invoke [GetExternalAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetExternalAgent) to query the configuration version and external accessed state. The clientToken parameter does not provide idempotence guarantees at this time.
     *
     * @param request - UpdateExternalAgentRequest
     *
     * @returns UpdateExternalAgentResponse
     *
     * @param string                     $workspaceId
     * @param string                     $agentId
     * @param UpdateExternalAgentRequest $request
     *
     * @return UpdateExternalAgentResponse
     */
    public function updateExternalAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExternalAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Modifies the logon configuration of a bound identity provider in a specified workspace. DingTalk and Feishu support the logon switch, incremental synchronization switch, application configuration, and synchronization scope. CustomSSO supports SAML configuration and the logon switch. Updates take effect asynchronously. Call GetIdentityProvider to query the status.
     *
     * @remarks
     * Modifies the logon or directory configuration of a bound enterprise identity provider to update enterprise application credentials, adjust synchronized departments, or configure custom single sign-on.
     * ### Select the configuration to modify
     * | Identity provider | Updatable content |
     * | --- | --- |
     * | DingTalk (DingTalk), Feishu (Feishu) | Enterprise application credentials metadata, logon switch loginEnabled, directory change synchronization switch syncEnabled, and synchronization scope syncScope. You must submit at least one item. |
     * | Custom identity provider (CustomSSO) | SAML protocol protocol, logon configuration saml, and logon switch loginEnabled. SCIM-based user synchronization is configured separately by using [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM). |
     * ### Update DingTalk or Feishu
     * metadata is updated by field: submit only the fields that need to be modified. Omitted fields and existing keys remain unchanged. Provided values must be non-empty strings. When you enable directory change synchronization, the configuration must include encryptKey and verificationToken.
     * To adjust synchronized departments:
     * **Step 1:** Call [ListIdentityProviderDepartments](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderDepartments) to query and select departments.
     * **Step 2:** Save syncScope by using this operation. If you omit this field or pass null, the current scope is retained.
     * **Step 3:** Call [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) to wait for the configuration processing to complete, and then call [CreateIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSyncJob) to synchronize users based on the new scope.
     * Saving the scope does not automatically trigger a full synchronization. syncEnabled controls subsequent directory change events. The initial synchronization and manual synchronization are executed separately.
     * ### Configure custom single sign-on
     * CustomSSO uses the SAML protocol to allow users to log on through the enterprise identity system. First, call [GetIdentityProviderServiceProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderServiceProvider) to obtain the access information of AgentCore and configure it in the enterprise identity system. Then, fill in the enterprise-side information in saml.
     * Choose one of the following two methods:
     * | Method | Required configuration |
     * | --- | --- |
     * | Import metadata | metadataXml: a single IdP metadata XML text exported from the enterprise identity provider, with a maximum size of 1 MiB. Enter the XML content instead of a download URL or file path. |
     * | Manual entry | Provide entityId, loginUrl, bindingType, and x509Certificates at the same time. Use an HTTPS logon URL and a valid signing certificate. Set bindingType to HTTP-Redirect or HTTP-POST. You can provide up to two certificates. |
     * The entityId cannot be changed after it is saved. If the XML contains both binding methods, HTTP-POST and its corresponding URL take precedence.
     * After saving the configuration, set loginEnabled=true to enable logon. You can also enable it when submitting a valid SAML configuration. Setting it to false disables logon and retains the existing configuration.
     * ### Confirm that the configuration takes effect
     * After the request is accepted, UPDATING is usually returned. Call [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) to query the progress. READY indicates that the configuration processing is complete. If it fails, check the returned status and configuration.
     * If the request times out, query the current configuration and processing status first, and then decide whether to retry. Query the SCIM processing result by calling [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM).
     *
     * @param tmpReq - UpdateIdentityProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIdentityProviderResponse
     *
     * @param string                        $workspaceId
     * @param string                        $identityProviderType
     * @param UpdateIdentityProviderRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateIdentityProviderResponse
     */
    public function updateIdentityProviderWithOptions($workspaceId, $identityProviderType, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateIdentityProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIdentityProvider',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/identity-providers/' . Url::percentEncode($identityProviderType) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the logon configuration of a bound identity provider in a specified workspace. DingTalk and Feishu support the logon switch, incremental synchronization switch, application configuration, and synchronization scope. CustomSSO supports SAML configuration and the logon switch. Updates take effect asynchronously. Call GetIdentityProvider to query the status.
     *
     * @remarks
     * Modifies the logon or directory configuration of a bound enterprise identity provider to update enterprise application credentials, adjust synchronized departments, or configure custom single sign-on.
     * ### Select the configuration to modify
     * | Identity provider | Updatable content |
     * | --- | --- |
     * | DingTalk (DingTalk), Feishu (Feishu) | Enterprise application credentials metadata, logon switch loginEnabled, directory change synchronization switch syncEnabled, and synchronization scope syncScope. You must submit at least one item. |
     * | Custom identity provider (CustomSSO) | SAML protocol protocol, logon configuration saml, and logon switch loginEnabled. SCIM-based user synchronization is configured separately by using [UpdateIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateIdentityProviderSCIM). |
     * ### Update DingTalk or Feishu
     * metadata is updated by field: submit only the fields that need to be modified. Omitted fields and existing keys remain unchanged. Provided values must be non-empty strings. When you enable directory change synchronization, the configuration must include encryptKey and verificationToken.
     * To adjust synchronized departments:
     * **Step 1:** Call [ListIdentityProviderDepartments](https://api.aliyun.com/document/AgentCore/2026-08-04/ListIdentityProviderDepartments) to query and select departments.
     * **Step 2:** Save syncScope by using this operation. If you omit this field or pass null, the current scope is retained.
     * **Step 3:** Call [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) to wait for the configuration processing to complete, and then call [CreateIdentityProviderSyncJob](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateIdentityProviderSyncJob) to synchronize users based on the new scope.
     * Saving the scope does not automatically trigger a full synchronization. syncEnabled controls subsequent directory change events. The initial synchronization and manual synchronization are executed separately.
     * ### Configure custom single sign-on
     * CustomSSO uses the SAML protocol to allow users to log on through the enterprise identity system. First, call [GetIdentityProviderServiceProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderServiceProvider) to obtain the access information of AgentCore and configure it in the enterprise identity system. Then, fill in the enterprise-side information in saml.
     * Choose one of the following two methods:
     * | Method | Required configuration |
     * | --- | --- |
     * | Import metadata | metadataXml: a single IdP metadata XML text exported from the enterprise identity provider, with a maximum size of 1 MiB. Enter the XML content instead of a download URL or file path. |
     * | Manual entry | Provide entityId, loginUrl, bindingType, and x509Certificates at the same time. Use an HTTPS logon URL and a valid signing certificate. Set bindingType to HTTP-Redirect or HTTP-POST. You can provide up to two certificates. |
     * The entityId cannot be changed after it is saved. If the XML contains both binding methods, HTTP-POST and its corresponding URL take precedence.
     * After saving the configuration, set loginEnabled=true to enable logon. You can also enable it when submitting a valid SAML configuration. Setting it to false disables logon and retains the existing configuration.
     * ### Confirm that the configuration takes effect
     * After the request is accepted, UPDATING is usually returned. Call [GetIdentityProvider](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProvider) to query the progress. READY indicates that the configuration processing is complete. If it fails, check the returned status and configuration.
     * If the request times out, query the current configuration and processing status first, and then decide whether to retry. Query the SCIM processing result by calling [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM).
     *
     * @param request - UpdateIdentityProviderRequest
     *
     * @returns UpdateIdentityProviderResponse
     *
     * @param string                        $workspaceId
     * @param string                        $identityProviderType
     * @param UpdateIdentityProviderRequest $request
     *
     * @return UpdateIdentityProviderResponse
     */
    public function updateIdentityProvider($workspaceId, $identityProviderType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIdentityProviderWithOptions($workspaceId, $identityProviderType, $request, $headers, $runtime);
    }

    /**
     * Enables or disables SCIM user synchronization independently. When enabled, an initial full import is executed asynchronously, and the result can be queried by calling GetIdentityProviderSCIM. The SAML logon configuration is retained.
     *
     * @remarks
     * Enables or disables SCIM user synchronization for AgentCore. When enabled, all existing users in the shared user pool are fully imported into the workspace. Users in the user pool are provisioned by the enterprise identity system through SCIM.
     * ### Preparations
     * **Step 1:** Call [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM) to enable the receiving endpoint and obtain the receiving URL and a valid token.
     * **Step 2:** Complete the SCIM configuration, connection test, and user assignment in the enterprise identity system.
     * **Step 3:** Call this operation and set syncEnabled to true.
     * ```http
     * PUT /workspaces/{workspaceId}/scim-provisioning
     * {"syncEnabled":true}
     * ```
     * When the enabling task is executed, the system checks whether the receiving endpoint is enabled and whether valid credentials exist. If no users are provisioned in the enterprise identity system, the initial import may succeed but contain no user records.
     * ### Impact of disabling
     * Setting syncEnabled to false disables user synchronization and the upstream SCIM receiving endpoint, but retains the imported users, existing credentials, and SAML logon configuration.
     * To re-enable the feature later, call [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM) to prepare the receiving endpoint first, and then enable synchronization.
     * ### Verify the operation result
     * After this operation accepts the request, it executes the enabling or disabling task in the background. Call [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM) to query the progress:
     * - syncEnabled indicates whether synchronization is expected to be enabled or disabled.
     * - operationStatus indicates the execution result of the most recent operation.
     * - The status field in the query operation comprehensively indicates the current stage of SCIM, such as pending configuration, processing, available, or disabled.
     * If the operation fails, the saved syncEnabled value is not automatically rolled back. Verify the configuration based on the operation result before deciding on subsequent actions.
     *
     * @param tmpReq - UpdateIdentityProviderSCIMRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIdentityProviderSCIMResponse
     *
     * @param string                            $workspaceId
     * @param UpdateIdentityProviderSCIMRequest $tmpReq
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateIdentityProviderSCIMResponse
     */
    public function updateIdentityProviderSCIMWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateIdentityProviderSCIMShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIdentityProviderSCIM',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/scim-provisioning',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIdentityProviderSCIMResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables SCIM user synchronization independently. When enabled, an initial full import is executed asynchronously, and the result can be queried by calling GetIdentityProviderSCIM. The SAML logon configuration is retained.
     *
     * @remarks
     * Enables or disables SCIM user synchronization for AgentCore. When enabled, all existing users in the shared user pool are fully imported into the workspace. Users in the user pool are provisioned by the enterprise identity system through SCIM.
     * ### Preparations
     * **Step 1:** Call [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM) to enable the receiving endpoint and obtain the receiving URL and a valid token.
     * **Step 2:** Complete the SCIM configuration, connection test, and user assignment in the enterprise identity system.
     * **Step 3:** Call this operation and set syncEnabled to true.
     * ```http
     * PUT /workspaces/{workspaceId}/scim-provisioning
     * {"syncEnabled":true}
     * ```
     * When the enabling task is executed, the system checks whether the receiving endpoint is enabled and whether valid credentials exist. If no users are provisioned in the enterprise identity system, the initial import may succeed but contain no user records.
     * ### Impact of disabling
     * Setting syncEnabled to false disables user synchronization and the upstream SCIM receiving endpoint, but retains the imported users, existing credentials, and SAML logon configuration.
     * To re-enable the feature later, call [PrepareIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/PrepareIdentityProviderSCIM) to prepare the receiving endpoint first, and then enable synchronization.
     * ### Verify the operation result
     * After this operation accepts the request, it executes the enabling or disabling task in the background. Call [GetIdentityProviderSCIM](https://api.aliyun.com/document/AgentCore/2026-08-04/GetIdentityProviderSCIM) to query the progress:
     * - syncEnabled indicates whether synchronization is expected to be enabled or disabled.
     * - operationStatus indicates the execution result of the most recent operation.
     * - The status field in the query operation comprehensively indicates the current stage of SCIM, such as pending configuration, processing, available, or disabled.
     * If the operation fails, the saved syncEnabled value is not automatically rolled back. Verify the configuration based on the operation result before deciding on subsequent actions.
     *
     * @param request - UpdateIdentityProviderSCIMRequest
     *
     * @returns UpdateIdentityProviderSCIMResponse
     *
     * @param string                            $workspaceId
     * @param UpdateIdentityProviderSCIMRequest $request
     *
     * @return UpdateIdentityProviderSCIMResponse
     */
    public function updateIdentityProviderSCIM($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIdentityProviderSCIMWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Updates the model, instructions, skills, and runtime configuration of a managed Harness agent and executes the update asynchronously. Omitted top-level fields retain their original configurations.
     *
     * @remarks
     * Updates the model, instructions, skills, or runtime configuration of a managed Harness agent to adjust the capabilities and runtime behavior of an existing agent.
     * ### Update rules
     * Provide at least one updatable field. Omitted top-level fields retain their original configurations. You can set `description=null` to clear the description.
     * | Configuration | Update method |
     * | --- | --- |
     * | `harness` | The type cannot be changed. When updating the qodercli account binding, keep the original `type` and submit the corresponding `configuration`. |
     * | `model` | Provide a model configuration that matches the current Harness. For qwenpaw, specify the model connection ID and model name. For qodercli, use the available model identifier of the connector. |
     * | `runtime` | Specify both `compute` and `sessionPolicy` when submitting. Omitting the entire object retains the original runtime configuration. |
     * | `tools`, `skills`, `promptVariables`, `subAgents` | The corresponding lists are entirely replaced upon submission. You must include the items to be retained. Pass `[]` to clear the corresponding explicit lists. |
     * | `environment` | The variable list and credential reference list are entirely replaced respectively. Submit the items to be retained together. |
     * | `network` | Specify both `accessInternet.enabled` and `accessVpc.enabled` when submitting. |
     * | `ossMounts`, `agenticFsMounts` | Entirely replaced respectively. Pass `[]` to clear the corresponding lists. `agenticFsMounts` does not accept `null`. |
     * ### Harnesses, templates, and skills
     * | Harness | Model and connector configuration |
     * | --- | --- |
     * | `qwenpaw` | This type is used by default if `harness` is omitted during creation. Set `model.modelConnectionId` to the workspace model connection ID, and set `model.modelName` to the name of the model created under this connection. |
     * | `qodercli` | The qodercli connector must be enabled in the workspace. Set `model.modelConnectionId` to the model identifier returned by [ListConnectorModels](https://api.aliyun.com/document/AgentCore/2026-08-04/ListConnectorModels). `model.modelName` can be omitted. |
     * `harness` is an object, such as `{"type":"qwenpaw"}`. For qodercli, set `harness.configuration.connectorServiceAccountKey` to the account key record ID returned by [ListConnectors](https://api.aliyun.com/document/AgentCore/2026-08-04/ListConnectors), not the original service account key. This field can be omitted if there is only one key record, but must be specified if there are multiple records. `connectorServiceAccountName` is the account name. Do not specify these two binding fields for qwenpaw.
     * `skills` uses the skill names in the workspace AI Registry. If `sourceType=REFERENCE`, versions are referenced by `versionSelector`: use `LABEL` with a tag name, or `VERSION` with a specific version number. If the selector is omitted, `LABEL/latest` is used. If `sourceType=STATIC`, static files bundled with the package are used, and no version selector is provided.
     * For `template.aiRegistry`, specify the agent template name and an optional version. If the version is omitted during creation, the published version is resolved and fixed. When a template is used, `instruction`, `promptVariables`, and `subAgents` are derived from the template, and the corresponding fields in the current request do not take effect. Explicit skills and template skills are recorded separately. You can query the target and effective versions through `configuredSkills` and `skills`.
     * ### Elasticity and instances
     * If `runtime` is committed but `hpa` or some of its fields are omitted, the following default values are used for unspecified items. To retain the existing elastic policy, commit the complete `hpa`.
     * | Field | Default value | Value and description |
     * | --- | --- | --- |
     * | `enabled` | `false` | Specifies whether elastic scaling is enabled. |
     * | `minSandboxCount` | `1` | The minimum number of instances. Valid values: 0 to 100. |
     * | `maxSandboxCount` | `10` | The maximum number of instances. Valid values: 0 to 100. The value cannot be less than the minimum number. |
     * | `maxConcurrentSessionsPerSandbox` | `20` | The maximum number of concurrent sessions per instance. Valid values: 1 to 20. |
     * | `sessionTtlSeconds` | `600` | The maximum idle time of a session, in seconds. Valid values: 60 to 86400. |
     * If you only modify instructions, models, or skills, you can omit the entire `runtime` to keep the original runtime configuration unchanged. The minimum and maximum numbers of instances are the configuration border. You can query the actual number through `sandboxPhaseCounts`.
     * ### Environment and mounts
     * Omitting the entire `environment` retains the original configuration. Submitting `environment={}` or `environment=null` clears the environment configuration. Environment variable values must be strings, and variable names must be non-empty and unique.
     * The total number of `ossMounts` and `agenticFsMounts` cannot exceed 10. The mount target `mountPath` uses an absolute path in the container, such as `/data/train`. It cannot conflict with platform reserved directories, and cannot be duplicated or form parent-child directory overwrites.
     * The `path` for OSS mounts must be a non-empty directory prefix in the bucket. For AgenticFS mounts, `server` is the AccessPoint domain name, without a protocol, port, or path. `path` is an existing non-empty relative directory in the AccessPoint. You cannot mount the root directory of the AccessPoint. If `readOnly` is omitted, the default value is `false`.
     * ### Query update results
     * A successful response indicates that the update request has been accepted. Call [GetManagedAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetManagedAgent) to query `latestSpecVersion`, `latestVersionStatus`, `status`, and `sandboxPhaseCounts` to confirm the configuration processing and instance status. `clientToken` does not provide idempotence guarantees at this time.
     *
     * @param tmpReq - UpdateManagedAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateManagedAgentResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentId
     * @param UpdateManagedAgentRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateManagedAgentResponse
     */
    public function updateManagedAgentWithOptions($workspaceId, $agentId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateManagedAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateManagedAgent',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/managed-agents/' . Url::percentEncode($agentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateManagedAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the model, instructions, skills, and runtime configuration of a managed Harness agent and executes the update asynchronously. Omitted top-level fields retain their original configurations.
     *
     * @remarks
     * Updates the model, instructions, skills, or runtime configuration of a managed Harness agent to adjust the capabilities and runtime behavior of an existing agent.
     * ### Update rules
     * Provide at least one updatable field. Omitted top-level fields retain their original configurations. You can set `description=null` to clear the description.
     * | Configuration | Update method |
     * | --- | --- |
     * | `harness` | The type cannot be changed. When updating the qodercli account binding, keep the original `type` and submit the corresponding `configuration`. |
     * | `model` | Provide a model configuration that matches the current Harness. For qwenpaw, specify the model connection ID and model name. For qodercli, use the available model identifier of the connector. |
     * | `runtime` | Specify both `compute` and `sessionPolicy` when submitting. Omitting the entire object retains the original runtime configuration. |
     * | `tools`, `skills`, `promptVariables`, `subAgents` | The corresponding lists are entirely replaced upon submission. You must include the items to be retained. Pass `[]` to clear the corresponding explicit lists. |
     * | `environment` | The variable list and credential reference list are entirely replaced respectively. Submit the items to be retained together. |
     * | `network` | Specify both `accessInternet.enabled` and `accessVpc.enabled` when submitting. |
     * | `ossMounts`, `agenticFsMounts` | Entirely replaced respectively. Pass `[]` to clear the corresponding lists. `agenticFsMounts` does not accept `null`. |
     * ### Harnesses, templates, and skills
     * | Harness | Model and connector configuration |
     * | --- | --- |
     * | `qwenpaw` | This type is used by default if `harness` is omitted during creation. Set `model.modelConnectionId` to the workspace model connection ID, and set `model.modelName` to the name of the model created under this connection. |
     * | `qodercli` | The qodercli connector must be enabled in the workspace. Set `model.modelConnectionId` to the model identifier returned by [ListConnectorModels](https://api.aliyun.com/document/AgentCore/2026-08-04/ListConnectorModels). `model.modelName` can be omitted. |
     * `harness` is an object, such as `{"type":"qwenpaw"}`. For qodercli, set `harness.configuration.connectorServiceAccountKey` to the account key record ID returned by [ListConnectors](https://api.aliyun.com/document/AgentCore/2026-08-04/ListConnectors), not the original service account key. This field can be omitted if there is only one key record, but must be specified if there are multiple records. `connectorServiceAccountName` is the account name. Do not specify these two binding fields for qwenpaw.
     * `skills` uses the skill names in the workspace AI Registry. If `sourceType=REFERENCE`, versions are referenced by `versionSelector`: use `LABEL` with a tag name, or `VERSION` with a specific version number. If the selector is omitted, `LABEL/latest` is used. If `sourceType=STATIC`, static files bundled with the package are used, and no version selector is provided.
     * For `template.aiRegistry`, specify the agent template name and an optional version. If the version is omitted during creation, the published version is resolved and fixed. When a template is used, `instruction`, `promptVariables`, and `subAgents` are derived from the template, and the corresponding fields in the current request do not take effect. Explicit skills and template skills are recorded separately. You can query the target and effective versions through `configuredSkills` and `skills`.
     * ### Elasticity and instances
     * If `runtime` is committed but `hpa` or some of its fields are omitted, the following default values are used for unspecified items. To retain the existing elastic policy, commit the complete `hpa`.
     * | Field | Default value | Value and description |
     * | --- | --- | --- |
     * | `enabled` | `false` | Specifies whether elastic scaling is enabled. |
     * | `minSandboxCount` | `1` | The minimum number of instances. Valid values: 0 to 100. |
     * | `maxSandboxCount` | `10` | The maximum number of instances. Valid values: 0 to 100. The value cannot be less than the minimum number. |
     * | `maxConcurrentSessionsPerSandbox` | `20` | The maximum number of concurrent sessions per instance. Valid values: 1 to 20. |
     * | `sessionTtlSeconds` | `600` | The maximum idle time of a session, in seconds. Valid values: 60 to 86400. |
     * If you only modify instructions, models, or skills, you can omit the entire `runtime` to keep the original runtime configuration unchanged. The minimum and maximum numbers of instances are the configuration border. You can query the actual number through `sandboxPhaseCounts`.
     * ### Environment and mounts
     * Omitting the entire `environment` retains the original configuration. Submitting `environment={}` or `environment=null` clears the environment configuration. Environment variable values must be strings, and variable names must be non-empty and unique.
     * The total number of `ossMounts` and `agenticFsMounts` cannot exceed 10. The mount target `mountPath` uses an absolute path in the container, such as `/data/train`. It cannot conflict with platform reserved directories, and cannot be duplicated or form parent-child directory overwrites.
     * The `path` for OSS mounts must be a non-empty directory prefix in the bucket. For AgenticFS mounts, `server` is the AccessPoint domain name, without a protocol, port, or path. `path` is an existing non-empty relative directory in the AccessPoint. You cannot mount the root directory of the AccessPoint. If `readOnly` is omitted, the default value is `false`.
     * ### Query update results
     * A successful response indicates that the update request has been accepted. Call [GetManagedAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/GetManagedAgent) to query `latestSpecVersion`, `latestVersionStatus`, `status`, and `sandboxPhaseCounts` to confirm the configuration processing and instance status. `clientToken` does not provide idempotence guarantees at this time.
     *
     * @param request - UpdateManagedAgentRequest
     *
     * @returns UpdateManagedAgentResponse
     *
     * @param string                    $workspaceId
     * @param string                    $agentId
     * @param UpdateManagedAgentRequest $request
     *
     * @return UpdateManagedAgentResponse
     */
    public function updateManagedAgent($workspaceId, $agentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateManagedAgentWithOptions($workspaceId, $agentId, $request, $headers, $runtime);
    }

    /**
     * Updates the address, description, authentication, or Swagger configuration of a specified MCP service. The MCP type and protocol cannot be modified after creation. The update process is asynchronous.
     *
     * @remarks
     * Updates the address, description, authentication, or Swagger configuration of an MCP service. The service type and protocol cannot be modified after creation.
     * The update process is executed asynchronously. After submission, call [GetMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcp) to query the processing result. The `clientToken` parameter does not currently provide idempotency guarantees. If the request result is not confirmed, query the current configuration and status first.
     *
     * @param tmpReq - UpdateMcpRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcpResponse
     *
     * @param string           $workspaceId
     * @param string           $mcpServerId
     * @param UpdateMcpRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateMcpResponse
     */
    public function updateMcpWithOptions($workspaceId, $mcpServerId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMcpShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcp',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the address, description, authentication, or Swagger configuration of a specified MCP service. The MCP type and protocol cannot be modified after creation. The update process is asynchronous.
     *
     * @remarks
     * Updates the address, description, authentication, or Swagger configuration of an MCP service. The service type and protocol cannot be modified after creation.
     * The update process is executed asynchronously. After submission, call [GetMcp](https://api.aliyun.com/document/AgentCore/2026-08-04/GetMcp) to query the processing result. The `clientToken` parameter does not currently provide idempotency guarantees. If the request result is not confirmed, query the current configuration and status first.
     *
     * @param request - UpdateMcpRequest
     *
     * @returns UpdateMcpResponse
     *
     * @param string           $workspaceId
     * @param string           $mcpServerId
     * @param UpdateMcpRequest $request
     *
     * @return UpdateMcpResponse
     */
    public function updateMcp($workspaceId, $mcpServerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMcpWithOptions($workspaceId, $mcpServerId, $request, $headers, $runtime);
    }

    /**
     * Updates MCP parameters based on a template.
     *
     * @remarks
     * Updates parameters based on the marketplace template bound to the MCP service to adjust the configuration of the templated service.
     * Updates the parameters exposed by the schema using the same template version bound during MCP creation, without upgrading the template version.
     *
     * @param tmpReq - UpdateMcpTemplateConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcpTemplateConfigResponse
     *
     * @param string                         $workspaceId
     * @param string                         $mcpServerId
     * @param UpdateMcpTemplateConfigRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMcpTemplateConfigResponse
     */
    public function updateMcpTemplateConfigWithOptions($workspaceId, $mcpServerId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMcpTemplateConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->templateVersion) {
            @$query['templateVersion'] = $request->templateVersion;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcpTemplateConfig',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/mcp-servers/' . Url::percentEncode($mcpServerId) . '/template-config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMcpTemplateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates MCP parameters based on a template.
     *
     * @remarks
     * Updates parameters based on the marketplace template bound to the MCP service to adjust the configuration of the templated service.
     * Updates the parameters exposed by the schema using the same template version bound during MCP creation, without upgrading the template version.
     *
     * @param request - UpdateMcpTemplateConfigRequest
     *
     * @returns UpdateMcpTemplateConfigResponse
     *
     * @param string                         $workspaceId
     * @param string                         $mcpServerId
     * @param UpdateMcpTemplateConfigRequest $request
     *
     * @return UpdateMcpTemplateConfigResponse
     */
    public function updateMcpTemplateConfig($workspaceId, $mcpServerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMcpTemplateConfigWithOptions($workspaceId, $mcpServerId, $request, $headers, $runtime);
    }

    /**
     * Updates the long-term memory text or metadata based on the memory ID.
     *
     * @remarks
     * Updates the long-term memory text or metadata based on the memory ID.
     *
     * @param tmpReq - UpdateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryStoreName
     * @param string              $memoryId
     * @param UpdateMemoryRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemoryWithOptions($workspaceId, $memoryStoreName, $memoryId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMemoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMemory',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the long-term memory text or metadata based on the memory ID.
     *
     * @remarks
     * Updates the long-term memory text or metadata based on the memory ID.
     *
     * @param request - UpdateMemoryRequest
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryStoreName
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemory($workspaceId, $memoryStoreName, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryWithOptions($workspaceId, $memoryStoreName, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Updates a memory store.
     *
     * @remarks
     * Updates the mutable configurations of a long-term memory store to adjust the settings of an existing memory store.
     *
     * @param tmpReq - UpdateMemoryStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryStoreResponse
     *
     * @param string                   $workspaceId
     * @param string                   $memoryStoreName
     * @param UpdateMemoryStoreRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMemoryStoreResponse
     */
    public function updateMemoryStoreWithOptions($workspaceId, $memoryStoreName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMemoryStoreShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMemoryStore',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/memorystores/' . Url::percentEncode($memoryStoreName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a memory store.
     *
     * @remarks
     * Updates the mutable configurations of a long-term memory store to adjust the settings of an existing memory store.
     *
     * @param request - UpdateMemoryStoreRequest
     *
     * @returns UpdateMemoryStoreResponse
     *
     * @param string                   $workspaceId
     * @param string                   $memoryStoreName
     * @param UpdateMemoryStoreRequest $request
     *
     * @return UpdateMemoryStoreResponse
     */
    public function updateMemoryStore($workspaceId, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryStoreWithOptions($workspaceId, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Updates the description, context token limit, maximum output token count, or capability configuration of a specified model.
     *
     * @remarks
     * Updates the description, context length, maximum output length, or capability configuration of a model.
     * ### Update rules
     * - Provide at least one non-null field among description, contextSize, maxTokens, and capabilities.
     * - Omitted fields or fields passed as null retain their original values.
     * - The capabilities object is replaced as a whole. Unsubmitted capabilities within the object are treated as false.
     * ### Impact on agents
     * After contextSize, maxTokens, or capabilities actually change, the platform asynchronously refreshes the managed Harness agents that reference this model, as well as the managed agents that use platform models (modelSource=PLATFORM). Modifying only the description or repeatedly submitting the same configuration does not trigger a refresh.
     * A successful response indicates that the model configuration has been saved. Verify the configuration by calling [GetModel](https://api.aliyun.com/document/AgentCore/2026-08-04/GetModel), and then check whether the configuration takes effect by calling the corresponding agent details API operation.
     *
     * @param tmpReq - UpdateModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelResponse
     *
     * @param string             $workspaceId
     * @param string             $modelId
     * @param UpdateModelRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateModelResponse
     */
    public function updateModelWithOptions($workspaceId, $modelId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModel',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/models/' . Url::percentEncode($modelId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description, context token limit, maximum output token count, or capability configuration of a specified model.
     *
     * @remarks
     * Updates the description, context length, maximum output length, or capability configuration of a model.
     * ### Update rules
     * - Provide at least one non-null field among description, contextSize, maxTokens, and capabilities.
     * - Omitted fields or fields passed as null retain their original values.
     * - The capabilities object is replaced as a whole. Unsubmitted capabilities within the object are treated as false.
     * ### Impact on agents
     * After contextSize, maxTokens, or capabilities actually change, the platform asynchronously refreshes the managed Harness agents that reference this model, as well as the managed agents that use platform models (modelSource=PLATFORM). Modifying only the description or repeatedly submitting the same configuration does not trigger a refresh.
     * A successful response indicates that the model configuration has been saved. Verify the configuration by calling [GetModel](https://api.aliyun.com/document/AgentCore/2026-08-04/GetModel), and then check whether the configuration takes effect by calling the corresponding agent details API operation.
     *
     * @param request - UpdateModelRequest
     *
     * @returns UpdateModelResponse
     *
     * @param string             $workspaceId
     * @param string             $modelId
     * @param UpdateModelRequest $request
     *
     * @return UpdateModelResponse
     */
    public function updateModel($workspaceId, $modelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelWithOptions($workspaceId, $modelId, $request, $headers, $runtime);
    }

    /**
     * Updates the mutable configurations of a specified model connection and resubmits the publishing task. The invocation protocol cannot be modified after creation.
     *
     * @remarks
     * Updates the mutable configurations of a specified model connection and resubmits the publishing task. The invocation protocol cannot be modified after creation.
     *
     * @param tmpReq - UpdateModelConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelConnectionResponse
     *
     * @param string                       $workspaceId
     * @param string                       $connectionId
     * @param UpdateModelConnectionRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateModelConnectionResponse
     */
    public function updateModelConnectionWithOptions($workspaceId, $connectionId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateModelConnectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelConnection',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/model-connections/' . Url::percentEncode($connectionId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the mutable configurations of a specified model connection and resubmits the publishing task. The invocation protocol cannot be modified after creation.
     *
     * @remarks
     * Updates the mutable configurations of a specified model connection and resubmits the publishing task. The invocation protocol cannot be modified after creation.
     *
     * @param request - UpdateModelConnectionRequest
     *
     * @returns UpdateModelConnectionResponse
     *
     * @param string                       $workspaceId
     * @param string                       $connectionId
     * @param UpdateModelConnectionRequest $request
     *
     * @return UpdateModelConnectionResponse
     */
    public function updateModelConnection($workspaceId, $connectionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelConnectionWithOptions($workspaceId, $connectionId, $request, $headers, $runtime);
    }

    /**
     * Updates the business tags of a specified skill. Other attributes that are not specified remain unchanged.
     *
     * @remarks
     * Updates the business tags of a specified skill. Other attributes that are not specified remain unchanged.
     *
     * @param tmpReq - UpdateSkillBizTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillBizTagsResponse
     *
     * @param string                    $workspaceId
     * @param string                    $skillName
     * @param UpdateSkillBizTagsRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSkillBizTagsResponse
     */
    public function updateSkillBizTagsWithOptions($workspaceId, $skillName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSkillBizTagsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSkillBizTags',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/biz-tags',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillBizTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the business tags of a specified skill. Other attributes that are not specified remain unchanged.
     *
     * @remarks
     * Updates the business tags of a specified skill. Other attributes that are not specified remain unchanged.
     *
     * @param request - UpdateSkillBizTagsRequest
     *
     * @returns UpdateSkillBizTagsResponse
     *
     * @param string                    $workspaceId
     * @param string                    $skillName
     * @param UpdateSkillBizTagsRequest $request
     *
     * @return UpdateSkillBizTagsResponse
     */
    public function updateSkillBizTags($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSkillBizTagsWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Updates the version labels and their mappings for a specified skill.
     *
     * @remarks
     * Updates the version labels and their mappings for a specified skill.
     *
     * @param tmpReq - UpdateSkillLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillLabelsResponse
     *
     * @param string                   $workspaceId
     * @param string                   $skillName
     * @param UpdateSkillLabelsRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSkillLabelsResponse
     */
    public function updateSkillLabelsWithOptions($workspaceId, $skillName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSkillLabelsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSkillLabels',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/labels',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the version labels and their mappings for a specified skill.
     *
     * @remarks
     * Updates the version labels and their mappings for a specified skill.
     *
     * @param request - UpdateSkillLabelsRequest
     *
     * @returns UpdateSkillLabelsResponse
     *
     * @param string                   $workspaceId
     * @param string                   $skillName
     * @param UpdateSkillLabelsRequest $request
     *
     * @return UpdateSkillLabelsResponse
     */
    public function updateSkillLabels($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSkillLabelsWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Updates the visibility scope of a specified skill.
     *
     * @remarks
     * Updates the visibility scope of a specified skill.
     *
     * @param tmpReq - UpdateSkillScopeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillScopeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $skillName
     * @param UpdateSkillScopeRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSkillScopeResponse
     */
    public function updateSkillScopeWithOptions($workspaceId, $skillName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSkillScopeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSkillScope',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skills/' . Url::percentEncode($skillName) . '/scope',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the visibility scope of a specified skill.
     *
     * @remarks
     * Updates the visibility scope of a specified skill.
     *
     * @param request - UpdateSkillScopeRequest
     *
     * @returns UpdateSkillScopeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $skillName
     * @param UpdateSkillScopeRequest $request
     *
     * @return UpdateSkillScopeResponse
     */
    public function updateSkillScope($workspaceId, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSkillScopeWithOptions($workspaceId, $skillName, $request, $headers, $runtime);
    }

    /**
     * Updates the description and members of a specified team. When users or agents are provided, the corresponding member lists are replaced based on full overwrite semantics. Member lists that are not provided remain unchanged. The team name cannot be modified after creation.
     *
     * @remarks
     * Updates the description and members of a specified team.
     *
     * @param tmpReq - UpdateTeamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTeamResponse
     *
     * @param string            $workspaceId
     * @param string            $teamId
     * @param UpdateTeamRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateTeamResponse
     */
    public function updateTeamWithOptions($workspaceId, $teamId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTeamShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTeam',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/teams/' . Url::percentEncode($teamId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description and members of a specified team. When users or agents are provided, the corresponding member lists are replaced based on full overwrite semantics. Member lists that are not provided remain unchanged. The team name cannot be modified after creation.
     *
     * @remarks
     * Updates the description and members of a specified team.
     *
     * @param request - UpdateTeamRequest
     *
     * @returns UpdateTeamResponse
     *
     * @param string            $workspaceId
     * @param string            $teamId
     * @param UpdateTeamRequest $request
     *
     * @return UpdateTeamResponse
     */
    public function updateTeam($workspaceId, $teamId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTeamWithOptions($workspaceId, $teamId, $request, $headers, $runtime);
    }

    /**
     * Updates the display name, email address, or note of a specified user. At least one of displayName, email, and note must be specified. Unspecified properties remain unchanged. The username cannot be modified after creation.
     *
     * @remarks
     * Updates the display name, email address, or note of a specified user.
     *
     * @param tmpReq - UpdateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserResponse
     *
     * @param string            $workspaceId
     * @param string            $agentCoreUserId
     * @param UpdateUserRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($workspaceId, $agentCoreUserId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateUserShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/users/' . Url::percentEncode($agentCoreUserId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the display name, email address, or note of a specified user. At least one of displayName, email, and note must be specified. Unspecified properties remain unchanged. The username cannot be modified after creation.
     *
     * @remarks
     * Updates the display name, email address, or note of a specified user.
     *
     * @param request - UpdateUserRequest
     *
     * @returns UpdateUserResponse
     *
     * @param string            $workspaceId
     * @param string            $agentCoreUserId
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($workspaceId, $agentCoreUserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserWithOptions($workspaceId, $agentCoreUserId, $request, $headers, $runtime);
    }

    /**
     * Updates the name or network configuration of a workspace. Only workspaces in the Initialized state can be updated. Status, TenantId, and RegionId are maintained by the server and cannot be modified through this operation.
     *
     * @remarks
     * Modifies the name or network configuration of a workspace to adjust workspace information and the private network access environment for agents.
     * The workspace must be in the `Initialized` state. To enable VPC networking, set `Enabled` in the network configuration to `true`, and provide both `VpcId` and at least one `VSwitchIds`.
     *
     * @param tmpReq - UpdateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param UpdateWorkspaceRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspaceWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWorkspaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkspace',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name or network configuration of a workspace. Only workspaces in the Initialized state can be updated. Status, TenantId, and RegionId are maintained by the server and cannot be modified through this operation.
     *
     * @remarks
     * Modifies the name or network configuration of a workspace to adjust workspace information and the private network access environment for agents.
     * The workspace must be in the `Initialized` state. To enable VPC networking, set `Enabled` in the network configuration to `true`, and provide both `VpcId` and at least one `VSwitchIds`.
     *
     * @param request - UpdateWorkspaceRequest
     *
     * @returns UpdateWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param UpdateWorkspaceRequest $request
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspace($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkspaceWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves an uploaded AgentSpec ZIP package from OSS, parses the package, and imports the AgentSpec into the current workspace.
     *
     * @remarks
     * Retrieves an uploaded agent template ZIP package from OSS, parses the package, and imports the agent template into the current workspace.
     *
     * @param tmpReq - UploadAgentSpecViaOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadAgentSpecViaOssResponse
     *
     * @param string                       $workspaceId
     * @param UploadAgentSpecViaOssRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UploadAgentSpecViaOssResponse
     */
    public function uploadAgentSpecViaOssWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UploadAgentSpecViaOssShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadAgentSpecViaOss',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-spec-actions/upload-via-oss',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadAgentSpecViaOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an uploaded AgentSpec ZIP package from OSS, parses the package, and imports the AgentSpec into the current workspace.
     *
     * @remarks
     * Retrieves an uploaded agent template ZIP package from OSS, parses the package, and imports the agent template into the current workspace.
     *
     * @param request - UploadAgentSpecViaOssRequest
     *
     * @returns UploadAgentSpecViaOssResponse
     *
     * @param string                       $workspaceId
     * @param UploadAgentSpecViaOssRequest $request
     *
     * @return UploadAgentSpecViaOssResponse
     */
    public function uploadAgentSpecViaOss($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadAgentSpecViaOssWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Imports a skill into the current workspace by retrieving and parsing an uploaded skill ZIP package from OSS.
     *
     * @remarks
     * Imports a skill into the current workspace by retrieving and parsing an uploaded skill ZIP package from OSS.
     *
     * @param tmpReq - UploadSkillViaOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadSkillViaOssResponse
     *
     * @param string                   $workspaceId
     * @param UploadSkillViaOssRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UploadSkillViaOssResponse
     */
    public function uploadSkillViaOssWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UploadSkillViaOssShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadSkillViaOss',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/skill-actions/upload-via-oss',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadSkillViaOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports a skill into the current workspace by retrieving and parsing an uploaded skill ZIP package from OSS.
     *
     * @remarks
     * Imports a skill into the current workspace by retrieving and parsing an uploaded skill ZIP package from OSS.
     *
     * @param request - UploadSkillViaOssRequest
     *
     * @returns UploadSkillViaOssResponse
     *
     * @param string                   $workspaceId
     * @param UploadSkillViaOssRequest $request
     *
     * @return UploadSkillViaOssResponse
     */
    public function uploadSkillViaOss($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadSkillViaOssWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Validates the read conditions of the workspace role for a specified OSS code package object and returns the source URI and package information.
     *
     * @remarks
     * Checks the read conditions and package information of a specified OSS object before submitting the code package for deployment, and obtains the source URI for subsequent deployment.
     * ### Request and validation scope
     * In the JSON request body, specify `ossBucketName` and the complete `ossObjectName`. Do not specify the HTTPS download URL. The object extension must be ZIP or TAR.GZ, and the compressed size must be between 1 and 500,000,000 bytes.
     * This operation uses the workspace role to check the object metadata and read permissions, and returns the `sourceUri`, file name, size, and format.
     * ### Subsequent deployment
     * Passing the validation indicates that the object check is successful, but does not mean that the archive content is complete or ready to start. Submit the returned `sourceUri` to [CreateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateCustomAgent) or [UpdateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCustomAgent). The system will recheck and save a fixed copy upon submission.
     * This operation is an optional precheck and is not a required step for creation or update.
     *
     * @param tmpReq - ValidateAgentCodePackageFromOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateAgentCodePackageFromOssResponse
     *
     * @param string                                 $workspaceId
     * @param ValidateAgentCodePackageFromOssRequest $tmpReq
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ValidateAgentCodePackageFromOssResponse
     */
    public function validateAgentCodePackageFromOssWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ValidateAgentCodePackageFromOssShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateAgentCodePackageFromOss',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-code-packages/validate-from-oss',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateAgentCodePackageFromOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates the read conditions of the workspace role for a specified OSS code package object and returns the source URI and package information.
     *
     * @remarks
     * Checks the read conditions and package information of a specified OSS object before submitting the code package for deployment, and obtains the source URI for subsequent deployment.
     * ### Request and validation scope
     * In the JSON request body, specify `ossBucketName` and the complete `ossObjectName`. Do not specify the HTTPS download URL. The object extension must be ZIP or TAR.GZ, and the compressed size must be between 1 and 500,000,000 bytes.
     * This operation uses the workspace role to check the object metadata and read permissions, and returns the `sourceUri`, file name, size, and format.
     * ### Subsequent deployment
     * Passing the validation indicates that the object check is successful, but does not mean that the archive content is complete or ready to start. Submit the returned `sourceUri` to [CreateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/CreateCustomAgent) or [UpdateCustomAgent](https://api.aliyun.com/document/AgentCore/2026-08-04/UpdateCustomAgent). The system will recheck and save a fixed copy upon submission.
     * This operation is an optional precheck and is not a required step for creation or update.
     *
     * @param request - ValidateAgentCodePackageFromOssRequest
     *
     * @returns ValidateAgentCodePackageFromOssResponse
     *
     * @param string                                 $workspaceId
     * @param ValidateAgentCodePackageFromOssRequest $request
     *
     * @return ValidateAgentCodePackageFromOssResponse
     */
    public function validateAgentCodePackageFromOss($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateAgentCodePackageFromOssWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the binding status of the authorization policy for the code package source bucket to the current workspace resource role.
     *
     * @remarks
     * Queries whether the read authorization for the code package source bucket is bound to the workspace resource role to determine whether supplementary authorization is required.
     * ### Query results
     * `ossBucketName` is passed as a query parameter. `authorizationStatus=AUTHORIZED` indicates that the policy is bound, and `UNAUTHORIZED` indicates that it is not bound.
     * A bound policy does not mean that a specific code package object definitely exists or is readable. To check the object, call [ValidateAgentCodePackageFromOss](https://api.aliyun.com/document/AgentCore/2026-08-04/ValidateAgentCodePackageFromOss). To obtain the authorization link, call [GetAgentCodePackageOssRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageOssRamAuthorizeUrl).
     *
     * @param request - VerifyAgentCodePackageOssRamAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyAgentCodePackageOssRamAuthorizationResponse
     *
     * @param string                                           $workspaceId
     * @param VerifyAgentCodePackageOssRamAuthorizationRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return VerifyAgentCodePackageOssRamAuthorizationResponse
     */
    public function verifyAgentCodePackageOssRamAuthorizationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ossBucketName) {
            @$query['ossBucketName'] = $request->ossBucketName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyAgentCodePackageOssRamAuthorization',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agent-code-packages/oss/authorize/verify',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VerifyAgentCodePackageOssRamAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the binding status of the authorization policy for the code package source bucket to the current workspace resource role.
     *
     * @remarks
     * Queries whether the read authorization for the code package source bucket is bound to the workspace resource role to determine whether supplementary authorization is required.
     * ### Query results
     * `ossBucketName` is passed as a query parameter. `authorizationStatus=AUTHORIZED` indicates that the policy is bound, and `UNAUTHORIZED` indicates that it is not bound.
     * A bound policy does not mean that a specific code package object definitely exists or is readable. To check the object, call [ValidateAgentCodePackageFromOss](https://api.aliyun.com/document/AgentCore/2026-08-04/ValidateAgentCodePackageFromOss). To obtain the authorization link, call [GetAgentCodePackageOssRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetAgentCodePackageOssRamAuthorizeUrl).
     *
     * @param request - VerifyAgentCodePackageOssRamAuthorizationRequest
     *
     * @returns VerifyAgentCodePackageOssRamAuthorizationResponse
     *
     * @param string                                           $workspaceId
     * @param VerifyAgentCodePackageOssRamAuthorizationRequest $request
     *
     * @return VerifyAgentCodePackageOssRamAuthorizationResponse
     */
    public function verifyAgentCodePackageOssRamAuthorization($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyAgentCodePackageOssRamAuthorizationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Verifies whether one or more Qoder service account keys are available at a specified site. This operation does not save the keys or modify the connector status.
     *
     * @remarks
     * Verifies Qoder service account keys for a specified site to check whether the credentials are available before enabling or updating a connector. You can submit multiple keys at the same time. The response returns a list of invalid service account keys.
     *
     * @param tmpReq - VerifyConnectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyConnectorResponse
     *
     * @param string                 $workspaceId
     * @param string                 $connectorName
     * @param VerifyConnectorRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return VerifyConnectorResponse
     */
    public function verifyConnectorWithOptions($workspaceId, $connectorName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new VerifyConnectorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VerifyConnector',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/connectors/' . Url::percentEncode($connectorName) . '/actions/verify',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether one or more Qoder service account keys are available at a specified site. This operation does not save the keys or modify the connector status.
     *
     * @remarks
     * Verifies Qoder service account keys for a specified site to check whether the credentials are available before enabling or updating a connector. You can submit multiple keys at the same time. The response returns a list of invalid service account keys.
     *
     * @param request - VerifyConnectorRequest
     *
     * @returns VerifyConnectorResponse
     *
     * @param string                 $workspaceId
     * @param string                 $connectorName
     * @param VerifyConnectorRequest $request
     *
     * @return VerifyConnectorResponse
     */
    public function verifyConnector($workspaceId, $connectorName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyConnectorWithOptions($workspaceId, $connectorName, $request, $headers, $runtime);
    }

    /**
     * Queries the authorization status of a workspace resource role for a specified ACR Enterprise Edition repository.
     *
     * @remarks
     * Queries the authorization status of a workspace resource role for a specified ACR Enterprise Edition image repository to determine whether to proceed with image preparation or grant additional authorizations.
     * ### Request parameters
     * `acrInstanceId`, `namespace`, and `repository` use query parameters and must be consistent with the targets used when obtaining the authorization URL.
     * ### Authorization and deployment
     * `authorizationStatus=AUTHORIZED` indicates that the target authorization for the selected role is satisfied, and `UNAUTHORIZED` indicates that it is not yet satisfied. If authorization is required, call [GetWorkspaceAcrRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAcrRamAuthorizeUrl) and confirm on the RAM page.
     * The authorization status is checked separately from whether the specific image tag exists and whether the pull network is reachable.
     *
     * @param request - VerifyWorkspaceAcrRamAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyWorkspaceAcrRamAuthorizationResponse
     *
     * @param string                                    $workspaceId
     * @param VerifyWorkspaceAcrRamAuthorizationRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return VerifyWorkspaceAcrRamAuthorizationResponse
     */
    public function verifyWorkspaceAcrRamAuthorizationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrInstanceId) {
            @$query['acrInstanceId'] = $request->acrInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->repository) {
            @$query['repository'] = $request->repository;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyWorkspaceAcrRamAuthorization',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/acr/authorize/verify',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VerifyWorkspaceAcrRamAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the authorization status of a workspace resource role for a specified ACR Enterprise Edition repository.
     *
     * @remarks
     * Queries the authorization status of a workspace resource role for a specified ACR Enterprise Edition image repository to determine whether to proceed with image preparation or grant additional authorizations.
     * ### Request parameters
     * `acrInstanceId`, `namespace`, and `repository` use query parameters and must be consistent with the targets used when obtaining the authorization URL.
     * ### Authorization and deployment
     * `authorizationStatus=AUTHORIZED` indicates that the target authorization for the selected role is satisfied, and `UNAUTHORIZED` indicates that it is not yet satisfied. If authorization is required, call [GetWorkspaceAcrRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAcrRamAuthorizeUrl) and confirm on the RAM page.
     * The authorization status is checked separately from whether the specific image tag exists and whether the pull network is reachable.
     *
     * @param request - VerifyWorkspaceAcrRamAuthorizationRequest
     *
     * @returns VerifyWorkspaceAcrRamAuthorizationResponse
     *
     * @param string                                    $workspaceId
     * @param VerifyWorkspaceAcrRamAuthorizationRequest $request
     *
     * @return VerifyWorkspaceAcrRamAuthorizationResponse
     */
    public function verifyWorkspaceAcrRamAuthorization($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyWorkspaceAcrRamAuthorizationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries whether the workspace resource role has been granted access to the specified NAS (AgenticFS) access point for subsequent Agent mount configurations.
     *
     * @remarks
     * Checks whether the workspace has been granted access to the specified AgenticFS access point for subsequent Agent file mount configurations.
     * [AgenticFS](https://www.alibabacloud.com/help/en/nas/product-overview/agenticfs-overview) is a storage type of File Storage NAS designed for AI agents. Access points provide mount entries for file spaces.
     * ### Query and what to do next
     * For the `server` query parameter, specify the access point domain name without the protocol, port, or path. Keep it consistent with the value used when obtaining the authorization link.
     * | `authorizationStatus` | What to do next |
     * | --- | --- |
     * | `AUTHORIZED` | Authorization is complete. You can continue to configure `agenticFsMounts` for the agent. |
     * | `UNAUTHORIZED` | Obtain the link through [GetWorkspaceAgenticFsMountRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAgenticFsMountRamAuthorizeUrl), complete the authorization, and then query again. |
     * After authorization is complete, you must still commit the mount configuration in the agent and check the configuration processing result through the agent details. The mount folder must already exist, the access point must be located in the VPC associated with the workspace, and VPC access must be enabled for the agent.
     *
     * @param request - VerifyWorkspaceAgenticFsMountRamAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyWorkspaceAgenticFsMountRamAuthorizationResponse
     *
     * @param string                                               $workspaceId
     * @param VerifyWorkspaceAgenticFsMountRamAuthorizationRequest $request
     * @param string[]                                             $headers
     * @param RuntimeOptions                                       $runtime
     *
     * @return VerifyWorkspaceAgenticFsMountRamAuthorizationResponse
     */
    public function verifyWorkspaceAgenticFsMountRamAuthorizationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->server) {
            @$query['server'] = $request->server;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyWorkspaceAgenticFsMountRamAuthorization',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/agentic-fs/authorize/verify',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VerifyWorkspaceAgenticFsMountRamAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the workspace resource role has been granted access to the specified NAS (AgenticFS) access point for subsequent Agent mount configurations.
     *
     * @remarks
     * Checks whether the workspace has been granted access to the specified AgenticFS access point for subsequent Agent file mount configurations.
     * [AgenticFS](https://www.alibabacloud.com/help/en/nas/product-overview/agenticfs-overview) is a storage type of File Storage NAS designed for AI agents. Access points provide mount entries for file spaces.
     * ### Query and what to do next
     * For the `server` query parameter, specify the access point domain name without the protocol, port, or path. Keep it consistent with the value used when obtaining the authorization link.
     * | `authorizationStatus` | What to do next |
     * | --- | --- |
     * | `AUTHORIZED` | Authorization is complete. You can continue to configure `agenticFsMounts` for the agent. |
     * | `UNAUTHORIZED` | Obtain the link through [GetWorkspaceAgenticFsMountRamAuthorizeUrl](https://api.aliyun.com/document/AgentCore/2026-08-04/GetWorkspaceAgenticFsMountRamAuthorizeUrl), complete the authorization, and then query again. |
     * After authorization is complete, you must still commit the mount configuration in the agent and check the configuration processing result through the agent details. The mount folder must already exist, the access point must be located in the VPC associated with the workspace, and VPC access must be enabled for the agent.
     *
     * @param request - VerifyWorkspaceAgenticFsMountRamAuthorizationRequest
     *
     * @returns VerifyWorkspaceAgenticFsMountRamAuthorizationResponse
     *
     * @param string                                               $workspaceId
     * @param VerifyWorkspaceAgenticFsMountRamAuthorizationRequest $request
     *
     * @return VerifyWorkspaceAgenticFsMountRamAuthorizationResponse
     */
    public function verifyWorkspaceAgenticFsMountRamAuthorization($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyWorkspaceAgenticFsMountRamAuthorizationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Verifies the OSS mount authorization for a workspace, or checks and updates the authorization status of the default OSS storage for the workspace.
     *
     * @remarks
     * Verifies the OSS mount authorization for a workspace, or checks and updates the authorization status of the default OSS storage for the workspace.
     * ### Two query scopes
     * | Query parameter `bucketName` | Behavior |
     * | --- | --- |
     * | Bucket name provided | Checks the mount authorization of the bucket for the workspace resource role without modifying the default OSS binding. |
     * | Omitted | Checks the authorization of the default private OSS storage for the workspace and updates its authorization status. |
     * ### Return statuses
     * `AUTHORIZED` indicates that authorization is granted, `UNAUTHORIZED` indicates that authorization is not granted, and `NOT_REQUIRED` indicates that authorization is not required. The authorization status does not indicate whether a specific mount directory exists or an instance has completed the mount.
     * If the goal is to read from a code package source, use [VerifyAgentCodePackageOssRamAuthorization](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyAgentCodePackageOssRamAuthorization). Do not mix code package verification with runtime directory mounting.
     *
     * @param request - VerifyWorkspaceOssMountRamAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyWorkspaceOssMountRamAuthorizationResponse
     *
     * @param string                                         $workspaceId
     * @param VerifyWorkspaceOssMountRamAuthorizationRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return VerifyWorkspaceOssMountRamAuthorizationResponse
     */
    public function verifyWorkspaceOssMountRamAuthorizationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['bucketName'] = $request->bucketName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyWorkspaceOssMountRamAuthorization',
            'version' => '2026-08-04',
            'protocol' => 'HTTPS',
            'pathname' => '/workspaces/' . Url::percentEncode($workspaceId) . '/oss-mount/authorize/verify',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VerifyWorkspaceOssMountRamAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the OSS mount authorization for a workspace, or checks and updates the authorization status of the default OSS storage for the workspace.
     *
     * @remarks
     * Verifies the OSS mount authorization for a workspace, or checks and updates the authorization status of the default OSS storage for the workspace.
     * ### Two query scopes
     * | Query parameter `bucketName` | Behavior |
     * | --- | --- |
     * | Bucket name provided | Checks the mount authorization of the bucket for the workspace resource role without modifying the default OSS binding. |
     * | Omitted | Checks the authorization of the default private OSS storage for the workspace and updates its authorization status. |
     * ### Return statuses
     * `AUTHORIZED` indicates that authorization is granted, `UNAUTHORIZED` indicates that authorization is not granted, and `NOT_REQUIRED` indicates that authorization is not required. The authorization status does not indicate whether a specific mount directory exists or an instance has completed the mount.
     * If the goal is to read from a code package source, use [VerifyAgentCodePackageOssRamAuthorization](https://api.aliyun.com/document/AgentCore/2026-08-04/VerifyAgentCodePackageOssRamAuthorization). Do not mix code package verification with runtime directory mounting.
     *
     * @param request - VerifyWorkspaceOssMountRamAuthorizationRequest
     *
     * @returns VerifyWorkspaceOssMountRamAuthorizationResponse
     *
     * @param string                                         $workspaceId
     * @param VerifyWorkspaceOssMountRamAuthorizationRequest $request
     *
     * @return VerifyWorkspaceOssMountRamAuthorizationResponse
     */
    public function verifyWorkspaceOssMountRamAuthorization($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyWorkspaceOssMountRamAuthorizationWithOptions($workspaceId, $request, $headers, $runtime);
    }
}
