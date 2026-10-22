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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentIMChannelRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentIMChannelResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentSpecRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentSpecResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentSpecVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAgentSpecVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteCustomAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteCustomAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteExternalAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteExternalAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteIdentityProviderRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteIdentityProviderResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ForcePublishSkillVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ForcePublishSkillVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ForcePublishSkillVersionShrinkRequest;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncJobRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncJobResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncScopeRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncScopeResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetImageCacheRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetImageCacheResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PublishSkillVersionRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PublishSkillVersionResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PublishSkillVersionShrinkRequest;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentCore extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
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
     * Writes messages or text to a memory store. By default, sync is set to true, which means the operation synchronously waits for extraction and returns only memories (an empty array is allowed). If sync is set to false, the operation returns only a taskId, which you can query by calling GetMemoryTask.
     *
     * @remarks
     * Writes messages or text to a memory store. By default, sync is set to true, which means the operation synchronously waits for extraction and returns only memories (an empty array is allowed). If sync is set to false, the operation returns only a taskId, which you can query by calling GetMemoryTask.
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
     * Writes messages or text to a memory store. By default, sync is set to true, which means the operation synchronously waits for extraction and returns only memories (an empty array is allowed). If sync is set to false, the operation returns only a taskId, which you can query by calling GetMemoryTask.
     *
     * @remarks
     * Writes messages or text to a memory store. By default, sync is set to true, which means the operation synchronously waits for extraction and returns only memories (an empty array is allowed). If sync is set to false, the operation returns only a taskId, which you can query by calling GetMemoryTask.
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
     * Uploads skill ZIP packages in batches through OSS and returns the processing result for each skill.
     *
     * @remarks
     * ## Request description
     * Uploads skill ZIP packages in batches through OSS and returns the processing result for each skill.
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
     * Uploads skill ZIP packages in batches through OSS and returns the processing result for each skill.
     *
     * @remarks
     * ## Request description
     * Uploads skill ZIP packages in batches through OSS and returns the processing result for each skill.
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
     * Converts an MCP to free-edit mode.
     *
     * @remarks
     * Disables template usage constraints. After the conversion, the MCP retains its source and tags, but no longer appears on the usage page.
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
     * Converts an MCP to free-edit mode.
     *
     * @remarks
     * Disables template usage constraints. After the conversion, the MCP retains its source and tags, but no longer appears on the usage page.
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
     * Creates an IM channel for a specified agent and binds it to a publicly accessible ServiceEndpoint.
     *
     * @remarks
     * Creates an IM channel for a specified agent and binds it to a publicly accessible ServiceEndpoint.
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
     * Creates an IM channel for a specified agent and binds it to a publicly accessible ServiceEndpoint.
     *
     * @remarks
     * Creates an IM channel for a specified agent and binds it to a publicly accessible ServiceEndpoint.
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
     * ## Request description
     * Creates an AgentSpec in a specified workspace and generates the first draft version. Returns a resource conflict error if an AgentSpec with the same name already exists.
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
     * ## Request description
     * Creates an AgentSpec in a specified workspace and generates the first draft version. Returns a resource conflict error if an AgentSpec with the same name already exists.
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
     * ## Request description
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist and must not have a draft currently being edited.
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
     * ## Request description
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist and must not have a draft currently being edited.
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
     * Creates a credential in a specified workspace for authentication when an agent accesses external services. Currently, only the apiKey type is supported. The credential content is passed as a JSON string through credentialMetadata and can only be queried in a desensitized format after it is written.
     *
     * @remarks
     * Creates a credential in a workspace for authentication of services such as Connector.
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
     * Creates a credential in a specified workspace for authentication when an agent accesses external services. Currently, only the apiKey type is supported. The credential content is passed as a JSON string through credentialMetadata and can only be queried in a desensitized format after it is written.
     *
     * @remarks
     * Creates a credential in a workspace for authentication of services such as Connector.
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
     * Creates a custom agent in a specified workspace. Container image and code package deployments are supported. The creation process is asynchronous. You can call GetCustomAgent to query the deployment result.
     *
     * @remarks
     * Before you call this operation, prepare a writable workspace, a RAM role ARN, a container image or code package, and runtime configurations. You must specify name, artifact, roleArn, and runtime. The runtime parameter must include both compute and sessionPolicy.
     * In container mode, use artifact.container and specify artifact.port. The image must have the required access permissions and be accessible over the network allowed by the workspace.
     * In code package pattern, specify artifact.port, and the sourceUri, languageRuntime, and entrypoint of artifact.code. Do not specify container at the same time. Dependencies must be packaged by the user. ZIP and TAR.GZ formats are supported. The compressed package size cannot exceed 500,000,000 bytes. You can call ListAgentCodeRuntimes to query the runtime environment identity. The sourceUri parameter supports oss:// addresses or HTTPS object addresses of standard OSS public domain names, including signed URLs. For local files, call GetAgentCodePackageUploadUrl to obtain an upload URL, upload the file directly, and then commit the returned sourceUri.
     * When you submit a new code package source, the backend rechecks the read permissions, object, and size. The configuration is saved only after the transfer succeeds. If the transfer fails, the configuration is not saved. Saved fixed packages can be reused. Set the client timeout to 210 seconds for code package requests. Archive integrity and secure decompression are checked at startup. A successful acceptance does not mean that the agent is ready to run.
     * The creation process is asynchronous. A successful response indicates that the request is accepted. You can use the returned agentId to call GetCustomAgent and check the latestVersionStatus, latestExecutionError, and status corresponding to latestSpecVersion to confirm the deployment result. After the deployment is ready, you can call CreateServiceEndpoint to configure the access endpoint.
     * The clientToken parameter does not provide idempotency guarantees. Do not rely on this parameter to prevent duplicate requests. The healthyThreshold parameter for health checks does not take effect. Omit this parameter.
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
     * Creates a custom agent in a specified workspace. Container image and code package deployments are supported. The creation process is asynchronous. You can call GetCustomAgent to query the deployment result.
     *
     * @remarks
     * Before you call this operation, prepare a writable workspace, a RAM role ARN, a container image or code package, and runtime configurations. You must specify name, artifact, roleArn, and runtime. The runtime parameter must include both compute and sessionPolicy.
     * In container mode, use artifact.container and specify artifact.port. The image must have the required access permissions and be accessible over the network allowed by the workspace.
     * In code package pattern, specify artifact.port, and the sourceUri, languageRuntime, and entrypoint of artifact.code. Do not specify container at the same time. Dependencies must be packaged by the user. ZIP and TAR.GZ formats are supported. The compressed package size cannot exceed 500,000,000 bytes. You can call ListAgentCodeRuntimes to query the runtime environment identity. The sourceUri parameter supports oss:// addresses or HTTPS object addresses of standard OSS public domain names, including signed URLs. For local files, call GetAgentCodePackageUploadUrl to obtain an upload URL, upload the file directly, and then commit the returned sourceUri.
     * When you submit a new code package source, the backend rechecks the read permissions, object, and size. The configuration is saved only after the transfer succeeds. If the transfer fails, the configuration is not saved. Saved fixed packages can be reused. Set the client timeout to 210 seconds for code package requests. Archive integrity and secure decompression are checked at startup. A successful acceptance does not mean that the agent is ready to run.
     * The creation process is asynchronous. A successful response indicates that the request is accepted. You can use the returned agentId to call GetCustomAgent and check the latestVersionStatus, latestExecutionError, and status corresponding to latestSpecVersion to confirm the deployment result. After the deployment is ready, you can call CreateServiceEndpoint to configure the access endpoint.
     * The clientToken parameter does not provide idempotency guarantees. Do not rely on this parameter to prevent duplicate requests. The healthyThreshold parameter for health checks does not take effect. Omit this parameter.
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
     * Creates an external agent in a specified workspace.
     *
     * @remarks
     * Creates an external agent in a specified workspace.
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
     * Creates an external agent in a specified workspace.
     *
     * @remarks
     * Creates an external agent in a specified workspace.
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
     * Creates the Bootstrap token and CMS configuration required to onboard a specified external agent.
     *
     * @remarks
     * Creates the Bootstrap token and CMS configuration required to onboard a specified external agent.
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
     * Creates the Bootstrap token and CMS configuration required to onboard a specified external agent.
     *
     * @remarks
     * Creates the Bootstrap token and CMS configuration required to onboard a specified external agent.
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
     * Binds an external identity provider to a specified workspace for single sign-on and organization member synchronization of workspace users. You can bind up to one external identity provider to each workspace. The binding is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track the progress.
     *
     * @remarks
     * ## Features and prerequisites
     * A workspace can be bound to only one external identity provider. The identityProviderType parameter supports DingTalk, Feishu, and CustomSSO. CustomSSO only initializes the shared user pool. Do not pass non-empty metadata, and do not pass true for loginEnabled or syncEnabled. By default, both switches are turned off. Protocols and SAML configurations are saved by calling UpdateIdentityProvider. SCIM is configured through a separate API. You do not need to save SAML first. After the request is accepted and CONFIGURED is returned, call GetIdentityProvider and wait for the user pool initialization to complete. READY only indicates that the resource is ready, not that SAML is configured. If the same CustomSSO binding is in the CONFIGURED or READY state, the existing binding can be returned. You cannot treat all states as repeatable creations.
     * For DingTalk, the metadata parameter requires appKey, appSecret, and corpId. For Feishu, appId and appSecret are required. The vendor logon switch is enabled by default, and the synchronization switch is disabled by default. When synchronization is enabled, encryptKey and verificationToken are also required. The vendor syncOnBind and syncScope parameters retain the existing department-based synchronization definitions. Do not use these vendor pull parameters to replace SCIM configurations during CustomSSO initialization.
     * ## Requests and examples
     * POST /workspaces/{workspaceId}/identity-providers
     * Call conventions: Call the API based on the region of the target workspace. Use an AccessKey pair or STS token that has permissions on the identity provider resources of the corresponding workspace. The ws-example, URLs, certificates, and tokens in the following examples are placeholder values and must be replaced with actual values. The request body example represents the body parameters of the public API, not the extra body wrapper of the backend direct connection API. The response example only shows the business part. The outer layer also includes requestId, success, code, message, and httpStatusCode. Keep the requestId for troubleshooting and do not record keys. Asynchronous business tasks do not mean that the HTTP request uses a long connection to wait for completion.
     * ```text
     * POST /workspaces/ws-example/identity-providers
     * {"identityProviderType": "CustomSSO"}
     * ```
     * ## Response example
     * ```json
     * {
     *   "data": {
     *     "workspaceId": "ws-example",
     *     "identityProviderType": "CustomSSO",
     *     "loginEnabled": false,
     *     "syncEnabled": false,
     *     "status": "CONFIGURED"
     *   }
     * }
     * ```
     * ## Errors and handling
     * Error handling: 400 InvalidParameter indicates that the parameters or current configuration prerequisites are not met. 404 IdentityProviderNotFound indicates that no binding of the matching type exists. A synchronous call to the upstream service may return 503 IdentityProviderProvisioningUnavailable if it fails. Keep the request ID for troubleshooting and do not interpret a read failure as unconfigured. Actual authentication and workspace non-existence errors follow the common error handling.
     * 409 IdentityProviderAlreadyBound: An external binding already exists. Query and reuse the correct binding first. Do not automatically unbind the entire binding. Asynchronous initialization failure does not equal HTTP request failure. You must continue to query the status.
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
     * Binds an external identity provider to a specified workspace for single sign-on and organization member synchronization of workspace users. You can bind up to one external identity provider to each workspace. The binding is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track the progress.
     *
     * @remarks
     * ## Features and prerequisites
     * A workspace can be bound to only one external identity provider. The identityProviderType parameter supports DingTalk, Feishu, and CustomSSO. CustomSSO only initializes the shared user pool. Do not pass non-empty metadata, and do not pass true for loginEnabled or syncEnabled. By default, both switches are turned off. Protocols and SAML configurations are saved by calling UpdateIdentityProvider. SCIM is configured through a separate API. You do not need to save SAML first. After the request is accepted and CONFIGURED is returned, call GetIdentityProvider and wait for the user pool initialization to complete. READY only indicates that the resource is ready, not that SAML is configured. If the same CustomSSO binding is in the CONFIGURED or READY state, the existing binding can be returned. You cannot treat all states as repeatable creations.
     * For DingTalk, the metadata parameter requires appKey, appSecret, and corpId. For Feishu, appId and appSecret are required. The vendor logon switch is enabled by default, and the synchronization switch is disabled by default. When synchronization is enabled, encryptKey and verificationToken are also required. The vendor syncOnBind and syncScope parameters retain the existing department-based synchronization definitions. Do not use these vendor pull parameters to replace SCIM configurations during CustomSSO initialization.
     * ## Requests and examples
     * POST /workspaces/{workspaceId}/identity-providers
     * Call conventions: Call the API based on the region of the target workspace. Use an AccessKey pair or STS token that has permissions on the identity provider resources of the corresponding workspace. The ws-example, URLs, certificates, and tokens in the following examples are placeholder values and must be replaced with actual values. The request body example represents the body parameters of the public API, not the extra body wrapper of the backend direct connection API. The response example only shows the business part. The outer layer also includes requestId, success, code, message, and httpStatusCode. Keep the requestId for troubleshooting and do not record keys. Asynchronous business tasks do not mean that the HTTP request uses a long connection to wait for completion.
     * ```text
     * POST /workspaces/ws-example/identity-providers
     * {"identityProviderType": "CustomSSO"}
     * ```
     * ## Response example
     * ```json
     * {
     *   "data": {
     *     "workspaceId": "ws-example",
     *     "identityProviderType": "CustomSSO",
     *     "loginEnabled": false,
     *     "syncEnabled": false,
     *     "status": "CONFIGURED"
     *   }
     * }
     * ```
     * ## Errors and handling
     * Error handling: 400 InvalidParameter indicates that the parameters or current configuration prerequisites are not met. 404 IdentityProviderNotFound indicates that no binding of the matching type exists. A synchronous call to the upstream service may return 503 IdentityProviderProvisioningUnavailable if it fails. Keep the request ID for troubleshooting and do not interpret a read failure as unconfigured. Actual authentication and workspace non-existence errors follow the common error handling.
     * 409 IdentityProviderAlreadyBound: An external binding already exists. Query and reuse the correct binding first. Do not automatically unbind the entire binding. Asynchronous initialization failure does not equal HTTP request failure. You must continue to query the status.
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
     * Initiates a manual synchronization of an identity provider.
     *
     * @remarks
     * Initiates a one-time user synchronization based on the saved scope without saving the configuration or requiring syncEnabled=true. Prerequisites: the identity provider is in the READY or SYNC_FAILED state, a user pool exists, and no other pending identity provider operations are in progress. The returned taskId only indicates that the request is accepted. Call GetIdentityProviderSyncJob to poll the status until it reaches SUCCESS, FAILED, or CANCELED. If the task fails, check the failureReason. The workspace user quota still applies, and previously synchronized users are not automatically deleted if the scope is reduced.
     * Authorization information: RAM action agentcore:CreateIdentityProviderSyncJob, access level Write, resource ARN: acs:agentcore:{regionId}:{accountId}:workspace/{workspaceId}/identityProvider/{identityProviderType}. This resource is required for authorization.
     * Idempotency and retry: This operation does not provide a ClientToken parameter for conditional idempotency. Repeated submissions do not guarantee the same task is returned. If an operation is already in progress, an operation conflict is returned. Submitting again after the task ends creates a new synchronization task. If a submission times out, query the identity provider status first to avoid blindly resubmitting the request.
     * Calling this API is free of charge, and operation records support ActionTrail auditing.
     * Initial selective synchronization process: CreateIdentityProvider (syncOnBind=false, it is recommended to keep syncEnabled=false initially) → GetIdentityProvider and wait for READY → ListIdentityProviderDepartments to select departments → UpdateIdentityProvider to save syncScope and wait for READY → CreateIdentityProviderSyncJob → GetIdentityProviderSyncJob to query the terminal state. If incremental synchronization is required, configure callbacks and event subscriptions, and then update syncEnabled=true.
     * Response example:
     * ```json
     * {
     *   "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",
     *   "message": "success",
     *   "httpStatusCode": 200,
     *   "code": "SUCCESS",
     *   "success": true,
     *   "data": {
     *     "taskId": "12345678-1234-4234-8234-123456789abc",
     *     "status": "PENDING"
     *   }
     * }
     * ```
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
     * Initiates a manual synchronization of an identity provider.
     *
     * @remarks
     * Initiates a one-time user synchronization based on the saved scope without saving the configuration or requiring syncEnabled=true. Prerequisites: the identity provider is in the READY or SYNC_FAILED state, a user pool exists, and no other pending identity provider operations are in progress. The returned taskId only indicates that the request is accepted. Call GetIdentityProviderSyncJob to poll the status until it reaches SUCCESS, FAILED, or CANCELED. If the task fails, check the failureReason. The workspace user quota still applies, and previously synchronized users are not automatically deleted if the scope is reduced.
     * Authorization information: RAM action agentcore:CreateIdentityProviderSyncJob, access level Write, resource ARN: acs:agentcore:{regionId}:{accountId}:workspace/{workspaceId}/identityProvider/{identityProviderType}. This resource is required for authorization.
     * Idempotency and retry: This operation does not provide a ClientToken parameter for conditional idempotency. Repeated submissions do not guarantee the same task is returned. If an operation is already in progress, an operation conflict is returned. Submitting again after the task ends creates a new synchronization task. If a submission times out, query the identity provider status first to avoid blindly resubmitting the request.
     * Calling this API is free of charge, and operation records support ActionTrail auditing.
     * Initial selective synchronization process: CreateIdentityProvider (syncOnBind=false, it is recommended to keep syncEnabled=false initially) → GetIdentityProvider and wait for READY → ListIdentityProviderDepartments to select departments → UpdateIdentityProvider to save syncScope and wait for READY → CreateIdentityProviderSyncJob → GetIdentityProviderSyncJob to query the terminal state. If incremental synchronization is required, configure callbacks and event subscriptions, and then update syncEnabled=true.
     * Response example:
     * ```json
     * {
     *   "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",
     *   "message": "success",
     *   "httpStatusCode": 200,
     *   "code": "SUCCESS",
     *   "success": true,
     *   "data": {
     *     "taskId": "12345678-1234-4234-8234-123456789abc",
     *     "status": "PENDING"
     *   }
     * }
     * ```
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
     * Creates an image cache.
     *
     * @remarks
     * Creates or reuses an image cache in the current workspace based on the image source and tag. Both public and private images uniformly reuse the workspace\\"s source image pull authorization and resource roles. The resource manager parses the tag during the transfer node and performs image replication based on the parsed summary. The digest is empty before parsing is complete. For regular tags, the saved summary is reused after parsing. For the latest tag, it is parsed again when registered after reaching the desired state, and duplicate registrations in progress reuse the node. The logical imageId remains stable. accessInternet and accessVpc only determine the source reading and transfer for the current request and do not modify the agent network. An HTTP 200 response returns an acceptance snapshot of PENDING, READY, or FAILED, which does not indicate that the creation is complete. ClientToken does not guarantee to deduplicate requests or recover the original result. If the result is unconfirmed, query the query cache status first before deciding whether to recommit.
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
     * Creates an image cache.
     *
     * @remarks
     * Creates or reuses an image cache in the current workspace based on the image source and tag. Both public and private images uniformly reuse the workspace\\"s source image pull authorization and resource roles. The resource manager parses the tag during the transfer node and performs image replication based on the parsed summary. The digest is empty before parsing is complete. For regular tags, the saved summary is reused after parsing. For the latest tag, it is parsed again when registered after reaching the desired state, and duplicate registrations in progress reuse the node. The logical imageId remains stable. accessInternet and accessVpc only determine the source reading and transfer for the current request and do not modify the agent network. An HTTP 200 response returns an acceptance snapshot of PENDING, READY, or FAILED, which does not indicate that the creation is complete. ClientToken does not guarantee to deduplicate requests or recover the original result. If the result is unconfirmed, query the query cache status first before deciding whether to recommit.
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
     * Creates a managed agent in a specified workspace.
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
     * Creates a managed agent in a specified workspace.
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
     * Creates an MCP service in a specified workspace. The creation is an asynchronous process. You can check whether the service is ready by using the returned status or by calling a query operation.
     *
     * @remarks
     * ## Operation description
     * Creates an MCP service in a specified workspace. The creation is an asynchronous process. You can check whether the service is ready by using the returned status or by calling a query operation.
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
     * Creates an MCP service in a specified workspace. The creation is an asynchronous process. You can check whether the service is ready by using the returned status or by calling a query operation.
     *
     * @remarks
     * ## Operation description
     * Creates an MCP service in a specified workspace. The creation is an asynchronous process. You can check whether the service is ready by using the returned status or by calling a query operation.
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
     * Creates a long-term memory store in a specified workspace.
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
     * Creates a long-term memory store in a specified workspace.
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
     * Creates a model configuration for model creation under a model connection in a specified workspace.
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
     * Creates a model configuration for model creation under a model connection in a specified workspace.
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
     * Creates a model connection in a specified workspace and configures the upstream model service endpoint, invoke protocol, and access credentials to support model creation.
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
     * Creates a model connection in a specified workspace and configures the upstream model service endpoint, invoke protocol, and access credentials to support model creation.
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
     * Creates a Skill in the specified workspace and generates a draft version that can be further edited. You can derive a draft from an existing version or specify a target version and commit message.
     *
     * @remarks
     * ## Operation description
     * Creates a Skill in the specified workspace and generates a draft version that can be further edited. You can derive a draft from an existing version or specify a target version and commit message.
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
     * Creates a Skill in the specified workspace and generates a draft version that can be further edited. You can derive a draft from an existing version or specify a target version and commit message.
     *
     * @remarks
     * ## Operation description
     * Creates a Skill in the specified workspace and generates a draft version that can be further edited. You can derive a draft from an existing version or specify a target version and commit message.
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
     * Creates a user in a specified workspace. The username must be unique within the workspace, can contain only lowercase letters, digits, and hyphens, and cannot use reserved names such as manager, admin, or names starting with worker-. If the password is not specified, the server generates an initial password and returns it in the initialPassword field of the response.
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
     * Creates a user in a specified workspace. The username must be unique within the workspace, can contain only lowercase letters, digits, and hyphens, and cannot use reserved names such as manager, admin, or names starting with worker-. If the password is not specified, the server generates an initial password and returns it in the initialPassword field of the response.
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
     * Creates an AgentCore workspace control plane record. The server completes the state transition from Initializing to Initialized within the same transaction.
     *
     * @remarks
     * ## Request description\\nCreates an AgentCore workspace control plane record. The server completes the state transition from `Initializing` to `Initialized` within the same transaction. The network configuration uses `Enabled` to specify whether to enable the VPC network. If enabled, you must provide `VpcId` and at least one `VSwitchIds`.\\n.
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
     * Creates an AgentCore workspace control plane record. The server completes the state transition from Initializing to Initialized within the same transaction.
     *
     * @remarks
     * ## Request description\\nCreates an AgentCore workspace control plane record. The server completes the state transition from `Initializing` to `Initialized` within the same transaction. The network configuration uses `Enabled` to specify whether to enable the VPC network. If enabled, you must provide `VpcId` and at least one `VSwitchIds`.\\n.
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
     * Calls a specified model through a published model connection to verify whether the model call chain is available.
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
     * Calls a specified model through a published model connection to verify whether the model call chain is available.
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
     * Deletes an IM channel of a specified agent.
     *
     * @remarks
     * Deletes an IM channel of a specified agent.
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
     * Deletes an IM channel of a specified agent.
     *
     * @remarks
     * Deletes an IM channel of a specified agent.
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
     * Deletes the specified AgentSpec and all its versions and metadata. The deletion is irreversible.
     *
     * @remarks
     * ## Operation description
     * Deletes the specified AgentSpec and all its versions and metadata. The deletion is irreversible.
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
     * Deletes the specified AgentSpec and all its versions and metadata. The deletion is irreversible.
     *
     * @remarks
     * ## Operation description
     * Deletes the specified AgentSpec and all its versions and metadata. The deletion is irreversible.
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
     * Deletes the draft version currently being edited for a specified AgentSpec and clears the draft version pointer.
     *
     * @remarks
     * ## Request description
     * Deletes the draft version currently being edited for a specified AgentSpec and clears the draft version pointer.
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
     * Deletes the draft version currently being edited for a specified AgentSpec and clears the draft version pointer.
     *
     * @remarks
     * ## Request description
     * Deletes the draft version currently being edited for a specified AgentSpec and clears the draft version pointer.
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
     * Deletes a credential in a specified workspace and deletes the ciphertext hosted in the credential service. After deletion, agents bound to the credential can no longer obtain the credential content.
     *
     * @remarks
     * Deletes an access credential in a specified workspace. A credential cannot be deleted if it is still bound to an MCP service.
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
     * Deletes an access credential in a specified workspace. A credential cannot be deleted if it is still bound to an MCP service.
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
     * Deletes a custom agent from a specified workspace. A successful request indicates that the deletion is accepted. The runtime resources are subsequently cleaned up in the background.
     *
     * @remarks
     * Before calling this operation, ensure that the workspace is writable. If the agent is still associated with a team, you must dissociate it from the team first.
     * Deletion is an asynchronous process. After the request is accepted, the associated invocation endpoints become unavailable, and the runtime resources are subsequently cleaned up. The status in the response is typically Deleting. If the agent is already in the deletion process, a subsequent request returns the current summary.
     * You can call GetCustomAgent to check the deletion progress. After the deletion is complete, a detail query returns a resource not found error.
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
     * Deletes a custom agent from a specified workspace. A successful request indicates that the deletion is accepted. The runtime resources are subsequently cleaned up in the background.
     *
     * @remarks
     * Before calling this operation, ensure that the workspace is writable. If the agent is still associated with a team, you must dissociate it from the team first.
     * Deletion is an asynchronous process. After the request is accepted, the associated invocation endpoints become unavailable, and the runtime resources are subsequently cleaned up. The status in the response is typically Deleting. If the agent is already in the deletion process, a subsequent request returns the current summary.
     * You can call GetCustomAgent to check the deletion progress. After the deletion is complete, a detail query returns a resource not found error.
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
     * Deletes a specified external agent.
     *
     * @remarks
     * Deletes a specified external agent.
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
     * Deletes a specified external agent.
     *
     * @remarks
     * Deletes a specified external agent.
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
     * Disconnects the external identity provider from a specified workspace and cleans up the users synchronized by the identity provider. The disconnection is an asynchronous operation. After the API returns a response, you can call GetIdentityProvider to query the status and track the progress.
     *
     * @remarks
     * ## Features and prerequisites
     * This is a complete disconnection, not just disabling logon. Disconnecting CustomSSO cleans up the AC users imported from this identity source, remote shared user pools and related resources, logon publishing configurations, and bindings. Therefore, both SAML and SCIM are affected. It does not delete the enterprise applications created by users on external platforms such as Azure. The system first checks the references between users and Teams. If references exist, the disconnection is rejected.
     * After the request is accepted, the system returns DISCONNECTING. You can call GetIdentityProvider to query the status. The cleanup is complete only when the binding does not exist (IdentityProviderNotFound). The binding should also no longer appear in the list. DISCONNECT_FAILED indicates that a partial cleanup may have occurred and the state cannot be restored to a brand new unconfigured state. You can retry based on the returned status. If the binding does not exist in the first place, the API returns a placeholder result indicating no binding without creating new resources. An ongoing disconnection task may return the current binding. Do not use this API as a substitute for setting loginEnabled=false, syncEnabled=false, or deleting a single token.
     * ## Requests and examples
     * DELETE /workspaces/{workspaceId}/identity-providers/{identityProviderType}
     * Call conventions: Call the API in the region of the target workspace by using an AccessKey pair or STS credential that has permissions on the identity source resources of the workspace. The ws-example, URLs, certificates, and tokens in the following examples are placeholder values and must be replaced with actual values. The request body example represents the body parameter content of the public API, not the extra body wrapper of the backend direct connection API. The response example only shows the business part. The outer layer also includes requestId, success, code, message, and httpStatusCode. Keep the requestId for troubleshooting and do not record keys. Asynchronous business tasks do not mean that the HTTP request uses a long connection to wait for completion.
     * ```text
     * DELETE /workspaces/ws-example/identity-providers/CustomSSO
     * ```
     * ## Response examples
     * ```json
     * {
     *   "data": {
     *     "workspaceId": "ws-example",
     *     "identityProviderType": "CustomSSO",
     *     "status": "DISCONNECTING"
     *   }
     * }
     * ```
     * ## Errors and handling
     * Error handling: 400 InvalidParameter indicates that the parameters or current configuration prerequisites are not met. 404 IdentityProviderNotFound indicates that no binding of the matching type exists. A synchronous call failure to the upstream may return 503 IdentityProviderProvisioningUnavailable. Keep the request ID for troubleshooting and do not interpret a read failure as unconfigured. Actual authentication and workspace non-existence errors follow the common error handling.
     * 409 IdentityProvider.Disconnect.Conflict: Users of this identity source still belong to a Team. Remove the references first. 409 IdentityProviderOperationConflict: The current status does not allow disconnection. 404 IdentityProviderNotFound: An external binding exists but the type does not match. An asynchronous failure may result in a partial cleanup. You cannot claim completion based solely on the first response.
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
     * Disconnects the external identity provider from a specified workspace and cleans up the users synchronized by the identity provider. The disconnection is an asynchronous operation. After the API returns a response, you can call GetIdentityProvider to query the status and track the progress.
     *
     * @remarks
     * ## Features and prerequisites
     * This is a complete disconnection, not just disabling logon. Disconnecting CustomSSO cleans up the AC users imported from this identity source, remote shared user pools and related resources, logon publishing configurations, and bindings. Therefore, both SAML and SCIM are affected. It does not delete the enterprise applications created by users on external platforms such as Azure. The system first checks the references between users and Teams. If references exist, the disconnection is rejected.
     * After the request is accepted, the system returns DISCONNECTING. You can call GetIdentityProvider to query the status. The cleanup is complete only when the binding does not exist (IdentityProviderNotFound). The binding should also no longer appear in the list. DISCONNECT_FAILED indicates that a partial cleanup may have occurred and the state cannot be restored to a brand new unconfigured state. You can retry based on the returned status. If the binding does not exist in the first place, the API returns a placeholder result indicating no binding without creating new resources. An ongoing disconnection task may return the current binding. Do not use this API as a substitute for setting loginEnabled=false, syncEnabled=false, or deleting a single token.
     * ## Requests and examples
     * DELETE /workspaces/{workspaceId}/identity-providers/{identityProviderType}
     * Call conventions: Call the API in the region of the target workspace by using an AccessKey pair or STS credential that has permissions on the identity source resources of the workspace. The ws-example, URLs, certificates, and tokens in the following examples are placeholder values and must be replaced with actual values. The request body example represents the body parameter content of the public API, not the extra body wrapper of the backend direct connection API. The response example only shows the business part. The outer layer also includes requestId, success, code, message, and httpStatusCode. Keep the requestId for troubleshooting and do not record keys. Asynchronous business tasks do not mean that the HTTP request uses a long connection to wait for completion.
     * ```text
     * DELETE /workspaces/ws-example/identity-providers/CustomSSO
     * ```
     * ## Response examples
     * ```json
     * {
     *   "data": {
     *     "workspaceId": "ws-example",
     *     "identityProviderType": "CustomSSO",
     *     "status": "DISCONNECTING"
     *   }
     * }
     * ```
     * ## Errors and handling
     * Error handling: 400 InvalidParameter indicates that the parameters or current configuration prerequisites are not met. 404 IdentityProviderNotFound indicates that no binding of the matching type exists. A synchronous call failure to the upstream may return 503 IdentityProviderProvisioningUnavailable. Keep the request ID for troubleshooting and do not interpret a read failure as unconfigured. Actual authentication and workspace non-existence errors follow the common error handling.
     * 409 IdentityProvider.Disconnect.Conflict: Users of this identity source still belong to a Team. Remove the references first. 409 IdentityProviderOperationConflict: The current status does not allow disconnection. 404 IdentityProviderNotFound: An external binding exists but the type does not match. An asynchronous failure may result in a partial cleanup. You cannot claim completion based solely on the first response.
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
     * Deletes an image cache.
     *
     * @remarks
     * Deletes the logical image cache of the current workspace. The deletion requires that no enabled agent configurations reference the cache and no active instances are using it. Concurrency is rechecked upon submission. Caches in the PENDING or FAILED state can still be deleted, and the backend handles the cleanup. An HTTP 200 response returns an imageId that matches the request. If deletionPending is true, the current workspace is still undergoing deletion, and a Get request returns DELETING until ImageCacheNotFound is explicitly returned. If false, the deletion is complete or the current workspace no longer exists. Usage by other workspaces does not block the deletion for the current workspace. The physical content is reclaimed only after all workspaces in the same region have removed their associations and no active instances are using it.
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
     * Deletes an image cache.
     *
     * @remarks
     * Deletes the logical image cache of the current workspace. The deletion requires that no enabled agent configurations reference the cache and no active instances are using it. Concurrency is rechecked upon submission. Caches in the PENDING or FAILED state can still be deleted, and the backend handles the cleanup. An HTTP 200 response returns an imageId that matches the request. If deletionPending is true, the current workspace is still undergoing deletion, and a Get request returns DELETING until ImageCacheNotFound is explicitly returned. If false, the deletion is complete or the current workspace no longer exists. Usage by other workspaces does not block the deletion for the current workspace. The physical content is reclaimed only after all workspaces in the same region have removed their associations and no active instances are using it.
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
     * Deletes a specified managed agent.
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
     * Deletes a specified managed agent.
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
     * Deletes a specified MCP server. The deletion is an asynchronous process, and the MCP server is no longer returned after the process is complete.
     *
     * @remarks
     * ## Request description
     * Deletes a specified MCP server. The deletion is an asynchronous process, and the MCP server is no longer returned after the process is complete.
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
     * Deletes a specified MCP server. The deletion is an asynchronous process, and the MCP server is no longer returned after the process is complete.
     *
     * @remarks
     * ## Request description
     * Deletes a specified MCP server. The deletion is an asynchronous process, and the MCP server is no longer returned after the process is complete.
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
     * Deletes a long-term memory based on the memory ID.
     *
     * @remarks
     * Deletes a long-term memory based on the memory ID.
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
     * Deletes a long-term memory based on the memory ID.
     *
     * @remarks
     * Deletes a long-term memory based on the memory ID.
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
     * Asynchronously deletes a MemoryStore and all long-term memory within it.
     *
     * @remarks
     * Asynchronously deletes a MemoryStore and all long-term memory within it.
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
     * Asynchronously deletes a MemoryStore and all long-term memory within it.
     *
     * @remarks
     * Asynchronously deletes a MemoryStore and all long-term memory within it.
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
     * Deletes a model from a specified workspace. Models that are currently in use cannot be deleted.
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
     * Deletes a model from a specified workspace. Models that are currently in use cannot be deleted.
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
     * Deletes a skill and its related version data from a specified workspace. This operation is irreversible.
     *
     * @remarks
     * ## Operation description
     * Deletes a skill and its related version data from a specified workspace. This operation is irreversible.
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
     * Deletes a skill and its related version data from a specified workspace. This operation is irreversible.
     *
     * @remarks
     * ## Operation description
     * Deletes a skill and its related version data from a specified workspace. This operation is irreversible.
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
     * Deletes the draft version currently being edited for a specified Skill.
     *
     * @remarks
     * ## Operation description
     * Deletes the draft version currently being edited for a specified Skill.
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
     * Deletes the draft version currently being edited for a specified Skill.
     *
     * @remarks
     * ## Operation description
     * Deletes the draft version currently being edited for a specified Skill.
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
     * Deletes a team from a specified workspace. Deleting a team does not delete the users or agents within it. Only the membership associations are removed.
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
     * Deletes a team from a specified workspace. Deleting a team does not delete the users or agents within it. Only the membership associations are removed.
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
     * Deletes a user from a specified workspace. A user cannot be deleted while the user is still a member of any team. Remove the user from all teams before deleting the user.
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
     * Deletes a user from a specified workspace. A user cannot be deleted while the user is still a member of any team. Remove the user from all teams before deleting the user.
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
     * Deletes the control plane record of a specified workspace. The server completes the state transition from Deleting to Deleted within the same transaction. The server processes repeated deletion requests for workspaces in the Deleting or Deleted state idempotently.
     *
     * @remarks
     * ## Request description\\nDeletes the control plane record of a specified workspace. The server completes the state transition from `Deleting` to `Deleted` within the same transaction. The server processes repeated deletion requests for workspaces in the `Deleting` or `Deleted` state idempotently.\\n.
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
     * Deletes the control plane record of a specified workspace. The server completes the state transition from Deleting to Deleted within the same transaction. The server processes repeated deletion requests for workspaces in the Deleting or Deleted state idempotently.
     *
     * @remarks
     * ## Request description\\nDeletes the control plane record of a specified workspace. The server completes the state transition from `Deleting` to `Deleted` within the same transaction. The server processes repeated deletion requests for workspaces in the `Deleting` or `Deleted` state idempotently.\\n.
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
     * Disables a QoderCLI Connector in a specified workspace. The Connector can be disabled only when no Agent is using it. After the Connector is disabled, the Connector and its Service Account Key configuration are removed.
     *
     * @remarks
     * Disables a Connector in a specified workspace.
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
     * Disables a QoderCLI Connector in a specified workspace. The Connector can be disabled only when no Agent is using it. After the Connector is disabled, the Connector and its Service Account Key configuration are removed.
     *
     * @remarks
     * Disables a Connector in a specified workspace.
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
     * Retrieves the presigned OSS download URL of a specified AgentSpec to download the AgentSpec ZIP package.
     *
     * @remarks
     * ## Request description
     * Retrieves the presigned OSS download URL of a specified AgentSpec to download the AgentSpec ZIP package.
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
     * Retrieves the presigned OSS download URL of a specified AgentSpec to download the AgentSpec ZIP package.
     *
     * @remarks
     * ## Request description
     * Retrieves the presigned OSS download URL of a specified AgentSpec to download the AgentSpec ZIP package.
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
     * Retrieves a pre-signed OSS download URL for a specified Skill version, which is used to download the corresponding Skill ZIP package.
     *
     * @remarks
     * ## Operation description
     * Retrieves a pre-signed OSS download URL for a specified Skill version, which is used to download the corresponding Skill ZIP package.
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
     * Retrieves a pre-signed OSS download URL for a specified Skill version, which is used to download the corresponding Skill ZIP package.
     *
     * @remarks
     * ## Operation description
     * Retrieves a pre-signed OSS download URL for a specified Skill version, which is used to download the corresponding Skill ZIP package.
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
     * Enables a QoderCLI Connector in a specified workspace. The request must include the site, API key, and at least one service account key. The service validates all account keys before saving the configuration.
     *
     * @remarks
     * Enables a Connector in a specified workspace. Credential verification is required before the Connector can be enabled.
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
     * Enables a QoderCLI Connector in a specified workspace. The request must include the site, API key, and at least one service account key. The service validates all account keys before saving the configuration.
     *
     * @remarks
     * Enables a Connector in a specified workspace. Credential verification is required before the Connector can be enabled.
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
     * Skips the regular review process and forcibly publishes a specified Skill version.
     *
     * @remarks
     * ## Operation description
     * Skips the regular review process and forcibly publishes a specified Skill version.
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
     * Skips the regular review process and forcibly publishes a specified Skill version.
     *
     * @remarks
     * ## Operation description
     * Skips the regular review process and forcibly publishes a specified Skill version.
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
     * Retrieves the download URL for the saved code package of an agent.
     *
     * @remarks
     * Generates a time-limited, read-only download URL for the code package referenced by the currently saved agent configuration. This applies to code packages uploaded locally or imported from Object Storage Service (OSS). The operation uses workspaceId and agentId for locating and does not accept arbitrary bucket, object key, or historical version parameters. The current configuration must reference an available, fixed code package, and does not require waiting for a running instance to be ready. An error is returned if the code package does not exist, has changed, or is unreadable. The link is valid for up to 10 minutes and does not exceed the underlying credential expiration time. Call the operation again after it expires. The resourceVersionId indicates the saved configuration version corresponding to this download. The sample download link is redacted. Use the downloadUrl in the response.
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
     * Retrieves the download URL for the saved code package of an agent.
     *
     * @remarks
     * Generates a time-limited, read-only download URL for the code package referenced by the currently saved agent configuration. This applies to code packages uploaded locally or imported from Object Storage Service (OSS). The operation uses workspaceId and agentId for locating and does not accept arbitrary bucket, object key, or historical version parameters. The current configuration must reference an available, fixed code package, and does not require waiting for a running instance to be ready. An error is returned if the code package does not exist, has changed, or is unreadable. The link is valid for up to 10 minutes and does not exceed the underlying credential expiration time. Call the operation again after it expires. The resourceVersionId indicates the saved configuration version corresponding to this download. The sample download link is redacted. Use the downloadUrl in the response.
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
     * Retrieves the OSS RAM authorization URL for the agent code package.
     *
     * @remarks
     * Generates a RAM authorization URL for the resource role of the current workspace for a specified source bucket. The client cannot specify or override the role. After you open the authorizeUrl and confirm the authorization, call VerifyAgentCodePackageOssRamAuthorization to check the policy binding, and call ValidateAgentCodePackageFromOss to check specific objects.
     * This authorization reuses the OSSObjectRestoreCustom template, which includes permissions to read, write, and delete objects, and is not a read-only authorization. Retrieving the URL itself does not complete the authorization, transfer the code package, or modify the default OSS binding of the workspace. Existing authorizations for the same role and bucket can be reused. The example URL is provided to demonstrate the format. Use the actual authorization URL returned by the API operation.
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
     * Retrieves the OSS RAM authorization URL for the agent code package.
     *
     * @remarks
     * Generates a RAM authorization URL for the resource role of the current workspace for a specified source bucket. The client cannot specify or override the role. After you open the authorizeUrl and confirm the authorization, call VerifyAgentCodePackageOssRamAuthorization to check the policy binding, and call ValidateAgentCodePackageFromOss to check specific objects.
     * This authorization reuses the OSSObjectRestoreCustom template, which includes permissions to read, write, and delete objects, and is not a read-only authorization. Retrieving the URL itself does not complete the authorization, transfer the code package, or modify the default OSS binding of the workspace. Existing authorizations for the same role and bucket can be reused. The example URL is provided to demonstrate the format. Use the actual authorization URL returned by the API operation.
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
     * Retrieves the upload URL for an agent code package.
     *
     * @remarks
     * Retrieves a time-limited upload URL for a code package without uploading the file content. The fileName must be a ZIP or TAR.GZ filename without directories. The format must match the file extension. The fileSize is in bytes, with valid values ranging from 1 to 500,000,000.
     * Use the uploadMethod, uploadUrl, and headers from the response to upload the file directly. After the upload is complete, pass the sourceUri to the artifact.code.sourceUri parameter of CreateCustomAgent or UpdateCustomAgent. The actual object and size are verified and a fixed copy is saved during creation or update. The upload URL is valid for up to 10 minutes and does not exceed the expiration time of the underlying temporary credentials. Retrieve a new URL after it expires. The example URL is desensitized and cannot be used for actual uploads. Use the original URL and request headers from this response.
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
     * Retrieves the upload URL for an agent code package.
     *
     * @remarks
     * Retrieves a time-limited upload URL for a code package without uploading the file content. The fileName must be a ZIP or TAR.GZ filename without directories. The format must match the file extension. The fileSize is in bytes, with valid values ranging from 1 to 500,000,000.
     * Use the uploadMethod, uploadUrl, and headers from the response to upload the file directly. After the upload is complete, pass the sourceUri to the artifact.code.sourceUri parameter of CreateCustomAgent or UpdateCustomAgent. The actual object and size are verified and a fixed copy is saved during creation or update. The upload URL is valid for up to 10 minutes and does not exceed the expiration time of the underlying temporary credentials. Retrieve a new URL after it expires. The example URL is desensitized and cannot be used for actual uploads. Use the original URL and request headers from this response.
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
     * ## Request description
     * Queries the governance details of a specified AgentSpec, including basic information, governance pointers, and summaries of all versions.
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
     * ## Request description
     * Queries the governance details of a specified AgentSpec, including basic information, governance pointers, and summaries of all versions.
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
     * Retrieves the OSS presigned upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, you can call the AgentSpec OSS upload API to complete the import.
     *
     * @remarks
     * ## Request description
     * Retrieves the OSS presigned upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, you can call the AgentSpec OSS upload API to complete the import.
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
     * Retrieves the OSS presigned upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, you can call the AgentSpec OSS upload API to complete the import.
     *
     * @remarks
     * ## Request description
     * Retrieves the OSS presigned upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, you can call the AgentSpec OSS upload API to complete the import.
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
     * Queries the full content of the latest version of a specified AgentSpec for editing or viewing.
     *
     * @remarks
     * ## Operation description
     * Queries the full content of the latest version of a specified AgentSpec for editing or viewing.
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
     * Queries the full content of the latest version of a specified AgentSpec for editing or viewing.
     *
     * @remarks
     * ## Operation description
     * Queries the full content of the latest version of a specified AgentSpec for editing or viewing.
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
     * Queries the complete content of a specified AgentSpec version, including the manifest content, resource files, and metadata.
     *
     * @remarks
     * ## Request description
     * Queries the complete content of a specified AgentSpec version, including the manifest content, resource files, and metadata.
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
     * Queries the complete content of a specified AgentSpec version, including the manifest content, resource files, and metadata.
     *
     * @remarks
     * ## Request description
     * Queries the complete content of a specified AgentSpec version, including the manifest content, resource files, and metadata.
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
     * Queries the details of a specified credential and returns the list of agents bound to the credential. The credential content is returned in a masked format.
     *
     * @remarks
     * Queries the details of a single credential. Sensitive fields are not returned.
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
     * Queries the details of a single credential. Sensitive fields are not returned.
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
     * Queries the details of a custom agent in a specified workspace, including deployment configurations, the execute status of the latest configuration version, and the running instance status statistics.
     *
     * @remarks
     * After creating or updating a custom agent, you can poll this operation to query the execution result of the latest configuration version. latestVersionStatus corresponds to latestSpecVersion. latestExecutionError indicates the cause of the pending or failed status for this version. If retryable is true, you can query again later.
     * The returned configuration is the latest submitted configuration and may not have taken effect. Verify the deployment and running status by checking latestVersionStatus, the overall agent status, and the running instance statistics sandboxPhaseCounts.
     * If the queried custom agent does not exist, has been deleted, or does not belong to the specified workspace, a resource not found error is returned.
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
     * Queries the details of a custom agent in a specified workspace, including deployment configurations, the execute status of the latest configuration version, and the running instance status statistics.
     *
     * @remarks
     * After creating or updating a custom agent, you can poll this operation to query the execution result of the latest configuration version. latestVersionStatus corresponds to latestSpecVersion. latestExecutionError indicates the cause of the pending or failed status for this version. If retryable is true, you can query again later.
     * The returned configuration is the latest submitted configuration and may not have taken effect. Verify the deployment and running status by checking latestVersionStatus, the overall agent status, and the running instance statistics sandboxPhaseCounts.
     * If the queried custom agent does not exist, has been deleted, or does not belong to the specified workspace, a resource not found error is returned.
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
     * Queries the details of a specified external agent.
     *
     * @remarks
     * Queries the details of a specified external agent.
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
     * Queries the details of a specified external agent.
     *
     * @remarks
     * Queries the details of a specified external agent.
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
     * Queries the available access network types for a specified external agent.
     *
     * @remarks
     * Queries the available access network types for a specified external agent.
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
     * Queries the available access network types for a specified external agent.
     *
     * @remarks
     * Queries the available access network types for a specified external agent.
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
     * Queries the binding details of an external identity provider for a specified workspace, including the binding status, application configurations, and the callback URL to be configured on the identity provider side. Application secret configurations are not returned.
     *
     * @remarks
     * ## Features and prerequisites
     * Reads existing bindings by type. For CustomSSO, the API returns the saved protocol, standardized SAML, expected loginEnabled, syncEnabled, and shared binding status. If SAML is not configured, the saml and configuration fields may not be returned. If SAML is configured, the API additionally queries AgentIdentity, and the configuration field represents the actual SSO/JIT configuration. The saml field serves as the data source for the edit form. The status switches in the configuration field are Enabled and Disabled. If the upstream query fails, an error is returned. This failure must not be treated as an unconfigured state.
     * Only this API reads back the actual SAML configuration. The list and write APIs do not guarantee that the configuration field is returned. A READY user pool does not indicate that SAML is configured. The UPDATING and UPDATE_FAILED statuses describe logon configuration tasks, not SCIM tasks. The vendor callback URL for CustomSSO is empty. Use GetIdentityProviderSCIM.operationStatus to query SCIM operation results.
     * ## Requests and examples
     * GET /workspaces/{workspaceId}/identity-providers/{identityProviderType}
     * Calling convention: Call this API in the region of the target workspace by using an AccessKey pair or STS token that has permissions on the identity source resources of the workspace. The ws-example, URLs, certificates, and tokens in the following examples are placeholder values and must be replaced with actual values. The request body example shows the body parameters of the public API, rather than the extra body wrapper of the backend direct-connection API. The response example shows only the business data. The outer layer also includes requestId, success, code, message, and httpStatusCode. Retain the requestId for troubleshooting and do not log secrets. Asynchronous business tasks do not imply that the HTTP request uses a persistent connection to wait for completion.
     * ```text
     * GET /workspaces/ws-example/identity-providers/CustomSSO
     * ```
     * ## Response example
     * ```json
     * {
     *   "data": {
     *     "workspaceId": "ws-example",
     *     "identityProviderType": "CustomSSO",
     *     "status": "READY",
     *     "loginEnabled": false,
     *     "syncEnabled": false
     *   }
     * }
     * ```
     * ## Errors and handling
     * Error handling: A 400 InvalidParameter error indicates that the parameters or current configuration prerequisites are not met. A 404 IdentityProviderNotFound error indicates that no binding of the specified type exists. Synchronous calls to the upstream service may return a 503 IdentityProviderProvisioningUnavailable error if they fail. Retain the request ID for troubleshooting and do not interpret read failures as an unconfigured state. Authentication errors and workspace-not-found errors follow common error handling procedures.
     * 404 IdentityProviderNotFound: No binding exists, or the specified type is inconsistent with the current binding. If SAML is already configured, an upstream read failure does not degrade to a successful empty configuration.
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
     * Queries the binding details of an external identity provider for a specified workspace, including the binding status, application configurations, and the callback URL to be configured on the identity provider side. Application secret configurations are not returned.
     *
     * @remarks
     * ## Features and prerequisites
     * Reads existing bindings by type. For CustomSSO, the API returns the saved protocol, standardized SAML, expected loginEnabled, syncEnabled, and shared binding status. If SAML is not configured, the saml and configuration fields may not be returned. If SAML is configured, the API additionally queries AgentIdentity, and the configuration field represents the actual SSO/JIT configuration. The saml field serves as the data source for the edit form. The status switches in the configuration field are Enabled and Disabled. If the upstream query fails, an error is returned. This failure must not be treated as an unconfigured state.
     * Only this API reads back the actual SAML configuration. The list and write APIs do not guarantee that the configuration field is returned. A READY user pool does not indicate that SAML is configured. The UPDATING and UPDATE_FAILED statuses describe logon configuration tasks, not SCIM tasks. The vendor callback URL for CustomSSO is empty. Use GetIdentityProviderSCIM.operationStatus to query SCIM operation results.
     * ## Requests and examples
     * GET /workspaces/{workspaceId}/identity-providers/{identityProviderType}
     * Calling convention: Call this API in the region of the target workspace by using an AccessKey pair or STS token that has permissions on the identity source resources of the workspace. The ws-example, URLs, certificates, and tokens in the following examples are placeholder values and must be replaced with actual values. The request body example shows the body parameters of the public API, rather than the extra body wrapper of the backend direct-connection API. The response example shows only the business data. The outer layer also includes requestId, success, code, message, and httpStatusCode. Retain the requestId for troubleshooting and do not log secrets. Asynchronous business tasks do not imply that the HTTP request uses a persistent connection to wait for completion.
     * ```text
     * GET /workspaces/ws-example/identity-providers/CustomSSO
     * ```
     * ## Response example
     * ```json
     * {
     *   "data": {
     *     "workspaceId": "ws-example",
     *     "identityProviderType": "CustomSSO",
     *     "status": "READY",
     *     "loginEnabled": false,
     *     "syncEnabled": false
     *   }
     * }
     * ```
     * ## Errors and handling
     * Error handling: A 400 InvalidParameter error indicates that the parameters or current configuration prerequisites are not met. A 404 IdentityProviderNotFound error indicates that no binding of the specified type exists. Synchronous calls to the upstream service may return a 503 IdentityProviderProvisioningUnavailable error if they fail. Retain the request ID for troubleshooting and do not interpret read failures as an unconfigured state. Authentication errors and workspace-not-found errors follow common error handling procedures.
     * 404 IdentityProviderNotFound: No binding exists, or the specified type is inconsistent with the current binding. If SAML is already configured, an upstream read failure does not degrade to a successful empty configuration.
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
     * Queries an identity provider synchronization task.
     *
     * @remarks
     * Queries the status, current step, number of processed users, and failure cause of a manual synchronization task by using the local taskId of AgentCore. The taskId must be obtained from CreateIdentityProviderSyncJob in the same workspace and identity provider. It is not the synchronizationJobId of AgentIdentity. Poll the task until the status is SUCCESS, FAILED, or CANCELED. The PENDING, RUNNING, and PAUSED statuses do not indicate completion. The syncedUserCount includes updated existing users and does not equal the number of newly added users or the progress percentage.
     * Authorization information: The RAM operation is agentcore:GetIdentityProviderSyncJob, the access level is Read, and the resource ARN is acs:agentcore:{regionId}:{accountId}:workspace/{workspaceId}/identityProvider/{identityProviderType}. This resource is a required authorization resource.
     * Idempotence and retry: This operation is read-only and can be repeatedly queried.
     * Calling this API operation is free of charge, and operation records support ActionTrail auditing.
     * Response example:
     * ```json
     * {
     *   "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",
     *   "message": "success",
     *   "httpStatusCode": 200,
     *   "code": "SUCCESS",
     *   "success": true,
     *   "data": {
     *     "taskId": "12345678-1234-4234-8234-123456789abc",
     *     "status": "SUCCESS",
     *     "currentStep": "SYNC",
     *     "synchronizationJobId": "syncjob_0123456789abcdef0123456789abcdef",
     *     "syncedUserCount": 12
     *   }
     * }
     * ```
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
     * Queries the status, current step, number of processed users, and failure cause of a manual synchronization task by using the local taskId of AgentCore. The taskId must be obtained from CreateIdentityProviderSyncJob in the same workspace and identity provider. It is not the synchronizationJobId of AgentIdentity. Poll the task until the status is SUCCESS, FAILED, or CANCELED. The PENDING, RUNNING, and PAUSED statuses do not indicate completion. The syncedUserCount includes updated existing users and does not equal the number of newly added users or the progress percentage.
     * Authorization information: The RAM operation is agentcore:GetIdentityProviderSyncJob, the access level is Read, and the resource ARN is acs:agentcore:{regionId}:{accountId}:workspace/{workspaceId}/identityProvider/{identityProviderType}. This resource is a required authorization resource.
     * Idempotence and retry: This operation is read-only and can be repeatedly queried.
     * Calling this API operation is free of charge, and operation records support ActionTrail auditing.
     * Response example:
     * ```json
     * {
     *   "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",
     *   "message": "success",
     *   "httpStatusCode": 200,
     *   "code": "SUCCESS",
     *   "success": true,
     *   "data": {
     *     "taskId": "12345678-1234-4234-8234-123456789abc",
     *     "status": "SUCCESS",
     *     "currentStep": "SYNC",
     *     "synchronizationJobId": "syncjob_0123456789abcdef0123456789abcdef",
     *     "syncedUserCount": 12
     *   }
     * }
     * ```
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
     * Queries the saved synchronization scope, the validity of selected departments, and the estimated user count downstream of the identity provider. This operation is not used for real-time estimation of unsaved selections. AllAuthorized indicates the address book scope authorized for the application, which is not equivalent to the entire enterprise organization. An empty selectedDepartments array does not prove that the organization has no sub-departments. The estimation can be used only when estimateStatus is Ready and a count is returned. A missing count does not indicate 0.
     * Authorization information: RAM operation agentcore:GetIdentityProviderSyncScope, access level Read, resource ARN: acs:agentcore:{regionId}:{accountId}:workspace/{workspaceId}/identityProvider/{identityProviderType}. This resource is a required authorization resource.
     * Idempotence and retry: This operation is read-only and can be queried repeatedly.
     * Calling this API operation is free of charge. Operation records support ActionTrail auditing.
     * Sample response:
     * ```json
     * {
     *   "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",
     *   "message": "success",
     *   "httpStatusCode": 200,
     *   "code": "SUCCESS",
     *   "success": true,
     *   "data": {
     *     "syncScope": {
     *       "mode": "SelectedDepartments",
     *       "departmentIds": [
     *         "10001"
     *       ]
     *     },
     *     "selectedDepartments": [
     *       {
     *         "id": "10001",
     *         "name": "R&D Department",
     *         "exists": true
     *       }
     *     ],
     *     "estimateStatus": "Ready",
     *     "expandedDepartmentCount": 2,
     *     "estimatedUserCount": 12
     *   }
     * }
     * ```
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
     * Queries the saved synchronization scope, the validity of selected departments, and the estimated user count downstream of the identity provider. This operation is not used for real-time estimation of unsaved selections. AllAuthorized indicates the address book scope authorized for the application, which is not equivalent to the entire enterprise organization. An empty selectedDepartments array does not prove that the organization has no sub-departments. The estimation can be used only when estimateStatus is Ready and a count is returned. A missing count does not indicate 0.
     * Authorization information: RAM operation agentcore:GetIdentityProviderSyncScope, access level Read, resource ARN: acs:agentcore:{regionId}:{accountId}:workspace/{workspaceId}/identityProvider/{identityProviderType}. This resource is a required authorization resource.
     * Idempotence and retry: This operation is read-only and can be queried repeatedly.
     * Calling this API operation is free of charge. Operation records support ActionTrail auditing.
     * Sample response:
     * ```json
     * {
     *   "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",
     *   "message": "success",
     *   "httpStatusCode": 200,
     *   "code": "SUCCESS",
     *   "success": true,
     *   "data": {
     *     "syncScope": {
     *       "mode": "SelectedDepartments",
     *       "departmentIds": [
     *         "10001"
     *       ]
     *     },
     *     "selectedDepartments": [
     *       {
     *         "id": "10001",
     *         "name": "R&D Department",
     *         "exists": true
     *       }
     *     ],
     *     "estimateStatus": "Ready",
     *     "expandedDepartmentCount": 2,
     *     "estimatedUserCount": 12
     *   }
     * }
     * ```
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
     * Queries the details of an image cache.
     *
     * @remarks
     * Queries the details of the logical image cache in the current workspace. Returns the complete source, current digest, actual size, creation time, status, and secure error messages. AgentCount counts configuration references with the switch enabled. CanDelete verifies both configuration references and instance usage. If the switch is disabled, the count is 0, but deletion is still prohibited if old instances are not released. If the resource does not belong to the current workspace, resources with the same content from other workspaces are not returned.
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
     * Queries the details of an image cache.
     *
     * @remarks
     * Queries the details of the logical image cache in the current workspace. Returns the complete source, current digest, actual size, creation time, status, and secure error messages. AgentCount counts configuration references with the switch enabled. CanDelete verifies both configuration references and instance usage. If the switch is disabled, the count is 0, but deletion is still prohibited if old instances are not released. If the resource does not belong to the current workspace, resources with the same content from other workspaces are not returned.
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
     * Queries the details of a specified managed agent.
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
     * Queries the details of a specified managed agent.
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
     * Queries the details of a specified MCP server, including the address, type, status, authentication configuration, and protocol.
     *
     * @remarks
     * ## Operation description
     * Queries the details of a specified MCP server, including the address, type, status, authentication configuration, and protocol.
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
     * Queries the details of a specified MCP server, including the address, type, status, authentication configuration, and protocol.
     *
     * @remarks
     * ## Operation description
     * Queries the details of a specified MCP server, including the address, type, status, authentication configuration, and protocol.
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
     * Queries the details of an MCP marketplace template.
     *
     * @remarks
     * Returns the current template version and installation form schema.
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
     * Returns the current template version and installation form schema.
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
     * Queries the public information and current status of a MemoryStore in a specified workspace.
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
     * Queries the public information and current status of a MemoryStore in a specified workspace.
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
     * Queries the task ID returned by the asynchronous AddMemories operation.
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
     * Queries the task ID returned by the asynchronous AddMemories operation.
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
     * Queries the details of a specified service endpoint, including target routing, access URLs, authentication configuration, and current status.
     *
     * @remarks
     * ## Operation description\\nQueries the details of a specified service endpoint. A service endpoint (ServiceEndpoint) provides a stable access URL for a specific agent version (AgentVersion) or workspace collaboration component. The response includes target routing, access URL list, authentication configuration, and current lifecycle status.\\n.
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
     * Queries the details of a specified service endpoint, including target routing, access URLs, authentication configuration, and current status.
     *
     * @remarks
     * ## Operation description\\nQueries the details of a specified service endpoint. A service endpoint (ServiceEndpoint) provides a stable access URL for a specific agent version (AgentVersion) or workspace collaboration component. The response includes target routing, access URL list, authentication configuration, and current lifecycle status.\\n.
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
     * Queries the currently active API key and its invocation method for a service endpoint in a specified workspace.
     *
     * @remarks
     * Queries the currently active API key for a specified service endpoint. The call succeeds only when API key authentication is enabled for the service endpoint and the gateway consumer and credentials are ready. The service reads the API key from the gateway in real time, and AgentCore does not persist the plaintext. Keep the returned API key secure and avoid logging it or exposing it in public configurations.
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
     * Queries the currently active API key and its invocation method for a service endpoint in a specified workspace.
     *
     * @remarks
     * Queries the currently active API key for a specified service endpoint. The call succeeds only when API key authentication is enabled for the service endpoint and the gateway consumer and credentials are ready. The service reads the API key from the gateway in real time, and AgentCore does not persist the plaintext. Keep the returned API key secure and avoid logging it or exposing it in public configurations.
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
     * Queries the basic information, version status, labels, visibility scope, and version list of a specified Skill.
     *
     * @remarks
     * ## Operation description
     * Queries the basic information, version status, labels, visibility scope, and version list of a specified Skill.
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
     * Queries the basic information, version status, labels, visibility scope, and version list of a specified Skill.
     *
     * @remarks
     * ## Operation description
     * Queries the basic information, version status, labels, visibility scope, and version list of a specified Skill.
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
     * Retrieves the OSS presigned upload URL and object name required to import a Skill ZIP package. After the upload is complete, you can call the Skill OSS upload API to complete the import.
     *
     * @remarks
     * ## Request description
     * Retrieves the OSS presigned upload URL and object name required to import a Skill ZIP package. After the upload is complete, you can call the Skill OSS upload API to complete the import.
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
     * Retrieves the OSS presigned upload URL and object name required to import a Skill ZIP package. After the upload is complete, you can call the Skill OSS upload API to complete the import.
     *
     * @remarks
     * ## Request description
     * Retrieves the OSS presigned upload URL and object name required to import a Skill ZIP package. After the upload is complete, you can call the Skill OSS upload API to complete the import.
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
     * Queries the complete details of a specified Skill version, including version metadata, Skill content, and associated resources.
     *
     * @remarks
     * ## Operation description
     * Queries the complete details of a specified Skill version, including version metadata, Skill content, and associated resources.
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
     * Queries the complete details of a specified Skill version, including version metadata, Skill content, and associated resources.
     *
     * @remarks
     * ## Operation description
     * Queries the complete details of a specified Skill version, including version metadata, Skill content, and associated resources.
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
     * Queries the details of a specified team. The response includes the complete attributes and team roles of each user member and agent member in the team.
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
     * Queries the details of a specified team. The response includes the complete attributes and team roles of each user member and agent member in the team.
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
     * Queries the details of a workspace by workspace ID, including the lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policies.
     *
     * @remarks
     * ## Request description\\nQueries the details of a workspace by workspace ID, including the lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policies.\\n.
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
     * Queries the details of a workspace by workspace ID, including the lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policies.
     *
     * @remarks
     * ## Request description\\nQueries the details of a workspace by workspace ID, including the lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policies.\\n.
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
     * Queries the ACR RAM authorization URL of a workspace.
     *
     * @remarks
     * ACR and user OSS mounts share the workspace role. If no existing role is found, AliyunAgentCoreWorkspace-{workspaceId} is used. If a valid legacy OSS mount role exists, it is reused and permissions are appended without overwriting existing OSS policies. Fixed historical shared roles continue to be reused and are not recreated or renamed due to new naming templates. The acrInstanceId, namespace, and repository parameters are required. The region and account are derived from the workspace context. Returns the role resolved by the backend and the authorization URL for the target repository. This operation does not create ACR or agent execution versions, nor does it deliver runtime configurations. After authorization is complete, you can call Verify before creating or updating an agent, without the need to call an independent Ensure operation.
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
     * Queries the ACR RAM authorization URL of a workspace.
     *
     * @remarks
     * ACR and user OSS mounts share the workspace role. If no existing role is found, AliyunAgentCoreWorkspace-{workspaceId} is used. If a valid legacy OSS mount role exists, it is reused and permissions are appended without overwriting existing OSS policies. Fixed historical shared roles continue to be reused and are not recreated or renamed due to new naming templates. The acrInstanceId, namespace, and repository parameters are required. The region and account are derived from the workspace context. Returns the role resolved by the backend and the authorization URL for the target repository. This operation does not create ACR or agent execution versions, nor does it deliver runtime configurations. After authorization is complete, you can call Verify before creating or updating an agent, without the need to call an independent Ensure operation.
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
     * Queries the RAM authorization URL for mounting AgenticFS in a workspace.
     *
     * @remarks
     * Determines the account, region, and shared role based on the workspace, and concatenates the resource ARN based on the provided fileSystemId and accessPointId. The server parameter is used to generate the policy name. This operation does not query NAS or check the resource status, and returns an authorization URL that contains only the target NAS policy. After completing RAM authorization, you must call the verification API.
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
     * Queries the RAM authorization URL for mounting AgenticFS in a workspace.
     *
     * @remarks
     * Determines the account, region, and shared role based on the workspace, and concatenates the resource ARN based on the provided fileSystemId and accessPointId. The server parameter is used to generate the policy name. This operation does not query NAS or check the resource status, and returns an authorization URL that contains only the target NAS policy. After completing RAM authorization, you must call the verification API.
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
     * Queries the plug-in status of a specified workspace.
     *
     * @remarks
     * ## Operation description\\nQueries the plug-in status of a specified workspace. Returns whether the plug-in is enabled, its lifecycle status, and the currently effective configuration. Currently, two types of plug-ins are supported: collaboration and agentloop. If a plug-in is not installed, its status is DISABLED.\\n.
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
     * Queries the plug-in status of a specified workspace.
     *
     * @remarks
     * ## Operation description\\nQueries the plug-in status of a specified workspace. Returns whether the plug-in is enabled, its lifecycle status, and the currently effective configuration. Currently, two types of plug-ins are supported: collaboration and agentloop. If a plug-in is not installed, its status is DISABLED.\\n.
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
     * Validates the input based on the specified template version and creates an MCP in the workspace.
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
     * Validates the input based on the specified template version and creates an MCP in the workspace.
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
     * Installs a plugin for a specified AgentCore workspace. Currently, only the collaboration plugin is supported. The installation process runs asynchronously.
     *
     * @remarks
     * ## Request description\\nInstalls a plugin for a specified AgentCore workspace. Currently, only the `collaboration` plugin is supported. Plugin configurations are passed through the `Config` parameter, and different plugins can define their own configuration structures. The `collaboration` plugin uses `Config.NetworkConfiguration` to specify the VPC and public network access policy. The installation procedure executes asynchronously. If you repeatedly invoke this operation for a plugin with the same name that is being installed or already installed, the operation returns the current status based on idempotent semantics if the configurations are identical. If the configurations are different, the operation returns an operation conflict.\\n
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
     * Installs a plugin for a specified AgentCore workspace. Currently, only the collaboration plugin is supported. The installation process runs asynchronously.
     *
     * @remarks
     * ## Request description\\nInstalls a plugin for a specified AgentCore workspace. Currently, only the `collaboration` plugin is supported. Plugin configurations are passed through the `Config` parameter, and different plugins can define their own configuration structures. The `collaboration` plugin uses `Config.NetworkConfiguration` to specify the VPC and public network access policy. The installation procedure executes asynchronously. If you repeatedly invoke this operation for a plugin with the same name that is being installed or already installed, the operation returns the current status based on idempotent semantics if the configurations are identical. If the configurations are different, the operation returns an operation conflict.\\n
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
     * Queries the runtime environments supported for code deployment.
     *
     * @remarks
     * Queries the directories in the current workspace that can be used to create code package agents or switch runtime environments. Runtime environments are dynamically provided based on the current version configuration, and internal image addresses are not returned.
     * If maxResults is omitted or set to 0, the default value is 10. If the value is greater than 100, it is processed as 100. Omit nextToken in the first request. For subsequent requests, use the token returned in the previous response as is, and keep the workspace unchanged. If a directory change invalidates the token, query from the first page again. An empty nextToken indicates that there are no more pages. Existing agents continue to use the saved images for restarts, scaling, and regular updates.
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
     * Queries the runtime environments supported for code deployment.
     *
     * @remarks
     * Queries the directories in the current workspace that can be used to create code package agents or switch runtime environments. Runtime environments are dynamically provided based on the current version configuration, and internal image addresses are not returned.
     * If maxResults is omitted or set to 0, the default value is 10. If the value is greater than 100, it is processed as 100. Omit nextToken in the first request. For subsequent requests, use the token returned in the previous response as is, and keep the workspace unchanged. If a directory change invalidates the token, query from the first page again. An empty nextToken indicates that there are no more pages. Existing agents continue to use the saved images for restarts, scaling, and regular updates.
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
     * Queries the list of IM channels for a specified agent.
     *
     * @remarks
     * Queries the list of IM channels for a specified agent.
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
     * Queries the list of IM channels for a specified agent.
     *
     * @remarks
     * Queries the list of IM channels for a specified agent.
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
     * Queries AgentSpec resources in a specified workspace by using paging, and supports name-based search, sorting, and filtering by owner, visibility scope, and business labels.
     *
     * @remarks
     * ## Operation description
     * Queries AgentSpec resources in a specified workspace by using paging, and supports name-based search, sorting, and filtering by owner, visibility scope, and business labels.
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
     * Queries AgentSpec resources in a specified workspace by using paging, and supports name-based search, sorting, and filtering by owner, visibility scope, and business labels.
     *
     * @remarks
     * ## Operation description
     * Queries AgentSpec resources in a specified workspace by using paging, and supports name-based search, sorting, and filtering by owner, visibility scope, and business labels.
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
     * Queries the teams to which specified agents belong. Specify the agent IDs by using agentIds to retrieve the membership information of each agent in the teams, including the team ID, team name, and the role of the agent in the team.
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
     * Queries the teams to which specified agents belong. Specify the agent IDs by using agentIds to retrieve the membership information of each agent in the teams, including the team ID, team name, and the role of the agent in the team.
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
     * Queries the available official models and enterprise models for an enabled QoderCLI Connector. The service retrieves models in real time by using the saved API key and organization ID, and deduplicates the results by model ID.
     *
     * @remarks
     * Queries the list of available models for a specified Connector. Pagination is supported.
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
     * Queries the available official models and enterprise models for an enabled QoderCLI Connector. The service retrieves models in real time by using the saved API key and organization ID, and deduplicates the results by model ID.
     *
     * @remarks
     * Queries the list of available models for a specified Connector. Pagination is supported.
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
     * Queries the list of connectors supported by a specified workspace, including their status, number of bound agents, and configurations. The current version returns the QoderCLI connector.
     *
     * @remarks
     * Queries the list of connectors in a specified workspace.
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
     * Queries the list of connectors supported by a specified workspace, including their status, number of bound agents, and configurations. The current version returns the QoderCLI connector.
     *
     * @remarks
     * Queries the list of connectors in a specified workspace.
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
     * Performs a paged query for credentials in a specified workspace. Filters by type using credentialType, performs fuzzy filtering by credential name using nameLike, configures paging by specifying the maximum number of records per page using maxResults, and retrieves the next page using nextToken. If maxResults is not specified, the server returns 10 records by default.
     *
     * @remarks
     * Performs a paged query for the credential list in a workspace, and supports filtering by type and name during paging.
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
     * Performs a paged query for credentials in a specified workspace. Filters by type using credentialType, performs fuzzy filtering by credential name using nameLike, configures paging by specifying the maximum number of records per page using maxResults, and retrieves the next page using nextToken. If maxResults is not specified, the server returns 10 records by default.
     *
     * @remarks
     * Performs a paged query for the credential list in a workspace, and supports filtering by type and name during paging.
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
     * Performs a paged query for paging through the custom agent summary in a specified workspace. For the complete configuration and the latest execute results, call GetCustomAgent.
     *
     * @remarks
     * The default value of maxResults is 20 and the maximum value is 100. If this parameter is omitted or set to 0, the default value is used.
     * Omit nextToken in the first request. For subsequent requests, pass the nextToken returned in the previous response as is and keep the same workspace. The nextToken is an opaque token. Do not parse or construct it. An empty token in the response indicates that there are no more pages.
     * This operation returns the summaries of the current page and does not return the complete deployment configurations or the execution errors of the latest version. To obtain this information, call GetCustomAgent by using the agentId in items.
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
     * Performs a paged query for paging through the custom agent summary in a specified workspace. For the complete configuration and the latest execute results, call GetCustomAgent.
     *
     * @remarks
     * The default value of maxResults is 20 and the maximum value is 100. If this parameter is omitted or set to 0, the default value is used.
     * Omit nextToken in the first request. For subsequent requests, pass the nextToken returned in the previous response as is and keep the same workspace. The nextToken is an opaque token. Do not parse or construct it. An empty token in the response indicates that there are no more pages.
     * This operation returns the summaries of the current page and does not return the complete deployment configurations or the execution errors of the latest version. To obtain this information, call GetCustomAgent by using the agentId in items.
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
     * Queries the list of external agents in a specified workspace.
     *
     * @remarks
     * Queries the list of external agents in a specified workspace.
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
     * Queries the list of external agents in a specified workspace.
     *
     * @remarks
     * Queries the list of external agents in a specified workspace.
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
     * Queries the departments of an identity provider by page.
     *
     * @remarks
     * Queries DingTalk or Feishu departments by hierarchy and page. Prerequisites include a bound identity provider, a user pool, valid application credentials, and address book read authorization. If you do not specify parentDepartmentId, the root hierarchy is queried. When expanding a node, specify the ID of the node to query its direct child departments. The hasChildren field indicates whether the node can be expanded and does not mean that child nodes are returned. The nextToken field is used only to query the next page of child departments under the current parent department. This query only reads the directory. It does not save the synchronization scope or import users. If a new department is added to a DingTalk or Feishu organization, re-query the corresponding parent department because the previous list does not reflect the latest directory.\\n\\nAuthorization information: The RAM action is agentcore:ListIdentityProviderDepartments, the access level is List, and the resource ARN is acs:agentcore:{regionId}:{accountId}:workspace/{workspaceId}/identityProvider/{identityProviderType}. This resource is required for authorization.\\n\\nIdempotency and retry: This operation is read-only and can be called repeatedly.\\n\\nCalling this API is free of charge. Operation records support ActionTrail auditing.\\n\\nResponse example:\\n```json\\n{\\n  "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",\\n  "message": "success",\\n  "httpStatusCode": 200,\\n  "code": "SUCCESS",\\n  "success": true,\\n  "maxResults": 50,\\n  "nextToken": "",\\n  "items": [\\n    {\\n      "id": "10001",\\n      "name": "R&D Department",\\n      "parentId": "1",\\n      "memberCount": 12,\\n      "hasChildren": true\\n    }\\n  ]\\n}\\n```
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
     * Queries the departments of an identity provider by page.
     *
     * @remarks
     * Queries DingTalk or Feishu departments by hierarchy and page. Prerequisites include a bound identity provider, a user pool, valid application credentials, and address book read authorization. If you do not specify parentDepartmentId, the root hierarchy is queried. When expanding a node, specify the ID of the node to query its direct child departments. The hasChildren field indicates whether the node can be expanded and does not mean that child nodes are returned. The nextToken field is used only to query the next page of child departments under the current parent department. This query only reads the directory. It does not save the synchronization scope or import users. If a new department is added to a DingTalk or Feishu organization, re-query the corresponding parent department because the previous list does not reflect the latest directory.\\n\\nAuthorization information: The RAM action is agentcore:ListIdentityProviderDepartments, the access level is List, and the resource ARN is acs:agentcore:{regionId}:{accountId}:workspace/{workspaceId}/identityProvider/{identityProviderType}. This resource is required for authorization.\\n\\nIdempotency and retry: This operation is read-only and can be called repeatedly.\\n\\nCalling this API is free of charge. Operation records support ActionTrail auditing.\\n\\nResponse example:\\n```json\\n{\\n  "requestId": "01234567-89AB-CDEF-0123-456789ABCDEF",\\n  "message": "success",\\n  "httpStatusCode": 200,\\n  "code": "SUCCESS",\\n  "success": true,\\n  "maxResults": 50,\\n  "nextToken": "",\\n  "items": [\\n    {\\n      "id": "10001",\\n      "name": "R&D Department",\\n      "parentId": "1",\\n      "memberCount": 12,\\n      "hasChildren": true\\n    }\\n  ]\\n}\\n```
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
     * Queries the external identity providers bound to a specified workspace. Each workspace can be bound to at most one external identity provider, so the response returns at most one record. Application secret configurations are not returned.
     *
     * @remarks
     * ## Features and prerequisites
     * Returns the local binding summary without querying the actual SAML or SCIM configurations of AgentIdentity. If no binding exists, items is an empty array. A workspace currently supports only one external binding. The default value of maxResults is 10, and the valid range is 1 to 100. Currently, nextToken must be omitted or left empty. A non-empty value returns InvalidParameter, and fictitious multi-page results are not supported.
     * The status of CustomSSO indicates the task status of shared resources and logon configurations. You must check protocol and saml to determine whether SAML is configured. To query SCIM configurations, independently call GetIdentityProviderSCIM. The list operation does not issue tokens and does not return the vendor appSecret, encryptKey, or verificationToken.
     * ## Requests and examples
     * GET /workspaces/{workspaceId}/identity-providers
     * Call conventions: Call the API in the region of the target workspace by using an AccessKey pair or Security Token Service (STS) token that has the required permissions on the identity source resources of the workspace. In the following examples, ws-example, URLs, certificates, and tokens are placeholder values and must be replaced with actual values. The request body example shows the body parameters of the public API, not the extra body wrapper of the backend direct connection API. The response example shows only the business part. The outer layer also includes requestId, success, code, message, and httpStatusCode. Retain the requestId for troubleshooting and do not record secrets. Asynchronous business tasks do not mean that the HTTP request uses a long connection to wait for completion.
     * ```text
     * GET /workspaces/ws-example/identity-providers?maxResults=10
     * ```
     * ## Response examples
     * ```json
     * {
     *   "items": [
     *     {
     *       "workspaceId": "ws-example",
     *       "identityProviderType": "CustomSSO",
     *       "status": "READY",
     *       "loginEnabled": false,
     *       "syncEnabled": false
     *     }
     *   ],
     *   "maxResults": 10,
     *   "totalCount": 1
     * }
     * ```
     * ## Errors and handling
     * Error handling: 400 InvalidParameter indicates that the parameters or current configuration prerequisites are not met. 404 IdentityProviderNotFound indicates that no binding of the matching type exists. Synchronous calls to upstream services that fail may return 503 IdentityProviderProvisioningUnavailable. Retain the request ID for troubleshooting and do not interpret read failures as unconfigured. Actual authentication and workspace non-existence errors follow common error handling.
     * 400 InvalidParameter: maxResults is out of bounds, or nextToken is not empty, which is currently not supported. If a query fails, an error is displayed instead of resetting the status to unconfigured.
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
     * Queries the external identity providers bound to a specified workspace. Each workspace can be bound to at most one external identity provider, so the response returns at most one record. Application secret configurations are not returned.
     *
     * @remarks
     * ## Features and prerequisites
     * Returns the local binding summary without querying the actual SAML or SCIM configurations of AgentIdentity. If no binding exists, items is an empty array. A workspace currently supports only one external binding. The default value of maxResults is 10, and the valid range is 1 to 100. Currently, nextToken must be omitted or left empty. A non-empty value returns InvalidParameter, and fictitious multi-page results are not supported.
     * The status of CustomSSO indicates the task status of shared resources and logon configurations. You must check protocol and saml to determine whether SAML is configured. To query SCIM configurations, independently call GetIdentityProviderSCIM. The list operation does not issue tokens and does not return the vendor appSecret, encryptKey, or verificationToken.
     * ## Requests and examples
     * GET /workspaces/{workspaceId}/identity-providers
     * Call conventions: Call the API in the region of the target workspace by using an AccessKey pair or Security Token Service (STS) token that has the required permissions on the identity source resources of the workspace. In the following examples, ws-example, URLs, certificates, and tokens are placeholder values and must be replaced with actual values. The request body example shows the body parameters of the public API, not the extra body wrapper of the backend direct connection API. The response example shows only the business part. The outer layer also includes requestId, success, code, message, and httpStatusCode. Retain the requestId for troubleshooting and do not record secrets. Asynchronous business tasks do not mean that the HTTP request uses a long connection to wait for completion.
     * ```text
     * GET /workspaces/ws-example/identity-providers?maxResults=10
     * ```
     * ## Response examples
     * ```json
     * {
     *   "items": [
     *     {
     *       "workspaceId": "ws-example",
     *       "identityProviderType": "CustomSSO",
     *       "status": "READY",
     *       "loginEnabled": false,
     *       "syncEnabled": false
     *     }
     *   ],
     *   "maxResults": 10,
     *   "totalCount": 1
     * }
     * ```
     * ## Errors and handling
     * Error handling: 400 InvalidParameter indicates that the parameters or current configuration prerequisites are not met. 404 IdentityProviderNotFound indicates that no binding of the matching type exists. Synchronous calls to upstream services that fail may return 503 IdentityProviderProvisioningUnavailable. Retain the request ID for troubleshooting and do not interpret read failures as unconfigured. Actual authentication and workspace non-existence errors follow common error handling.
     * 400 InvalidParameter: maxResults is out of bounds, or nextToken is not empty, which is currently not supported. If a query fails, an error is displayed instead of resetting the status to unconfigured.
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
     * Queries image caches.
     *
     * @remarks
     * Queries the logical image caches within the current account, region, and workspace. WorkspaceId is required, and caches are not visible across workspaces. All conditions filter the full set using the AND operator before pagination is calculated. Results are sorted in descending order of logical resource creation time and ascending order of ImageId. The cursor is bound to the account, region, workspace, all filters, and the sort order. Returns the complete cache objects, the AgentCount based on the configuration switch, and the actual deletion eligibility. Query failures do not return a disguised empty list, and the nextToken on the last page is an empty string.
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
     * Queries image caches.
     *
     * @remarks
     * Queries the logical image caches within the current account, region, and workspace. WorkspaceId is required, and caches are not visible across workspaces. All conditions filter the full set using the AND operator before pagination is calculated. Results are sorted in descending order of logical resource creation time and ascending order of ImageId. The cursor is bound to the account, region, workspace, all filters, and the sort order. Returns the complete cache objects, the AgentCount based on the configuration switch, and the actual deletion eligibility. Query failures do not return a disguised empty list, and the nextToken on the last page is an empty string.
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
     * Queries the list of managed agents in a specified workspace.
     *
     * @remarks
     * Queries the list of managed agents in a specified workspace by using paging. Returns summary information for each agent, including the identity, name, status, template, and specifications.
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
     * Queries the list of managed agents in a specified workspace.
     *
     * @remarks
     * Queries the list of managed agents in a specified workspace by using paging. Returns summary information for each agent, including the identity, name, status, template, and specifications.
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
     * Queries all online official MCP templates. You can filter results by keyword, usage tag, and MCP type.
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
     * Queries all online official MCP templates. You can filter results by keyword, usage tag, and MCP type.
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
     * Queries the list of tools exposed by a specified MCP service and their input/output schemas.
     *
     * @remarks
     * ## Operation description
     * Queries the list of tools exposed by a specified MCP service and their input/output schemas.
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
     * Queries the list of tools exposed by a specified MCP service and their input/output schemas.
     *
     * @remarks
     * ## Operation description
     * Queries the list of tools exposed by a specified MCP service and their input/output schemas.
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
     * Queries MCP services and their configurations and statuses in a specified workspace by using paging.
     *
     * @remarks
     * ## Operation description
     * Queries MCP services and their configurations and statuses in a specified workspace by using paging.
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
     * Queries MCP services and their configurations and statuses in a specified workspace by using paging.
     *
     * @remarks
     * ## Operation description
     * Queries MCP services and their configurations and statuses in a specified workspace by using paging.
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
     * Performs a paged query on long-term memory records. The results can be filtered independently by user ID, agent ID, and session ID. Paging is supported.
     *
     * @remarks
     * Performs a paged query on long-term memory records. The results can be filtered independently by user ID, agent ID, and session ID. Paging is supported.
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
     * Performs a paged query on long-term memory records. The results can be filtered independently by user ID, agent ID, and session ID. Paging is supported.
     *
     * @remarks
     * Performs a paged query on long-term memory records. The results can be filtered independently by user ID, agent ID, and session ID. Paging is supported.
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
     * Performs a paging query for raw messages by exact scope. SessionId is required, and at least one of UserId and AgentId must be provided.
     *
     * @remarks
     * Performs a paging query for raw messages by exact scope. SessionId is required, and at least one of UserId and AgentId must be provided.
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
     * Performs a paging query for raw messages by exact scope. SessionId is required, and at least one of UserId and AgentId must be provided.
     *
     * @remarks
     * Performs a paging query for raw messages by exact scope. SessionId is required, and at least one of UserId and AgentId must be provided.
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
     * Performs a paging query for sessions in a MemoryStore. You can filter the sessions independently by user ID and agent ID.
     *
     * @remarks
     * Performs a paging query for sessions in a MemoryStore. You can filter the sessions independently by user ID and agent ID.
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
     * Performs a paging query for sessions in a MemoryStore. You can filter the sessions independently by user ID and agent ID.
     *
     * @remarks
     * Performs a paging query for sessions in a MemoryStore. You can filter the sessions independently by user ID and agent ID.
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
     * Performs a paged query for MemoryStores in a specified workspace with paging.
     *
     * @remarks
     * Performs a paged query for MemoryStores in a specified workspace with paging.
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
     * Performs a paged query for MemoryStores in a specified workspace with paging.
     *
     * @remarks
     * Performs a paged query for MemoryStores in a specified workspace with paging.
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
     * Queries model connections in a specified workspace with paging. Supports filtering by name, provider type, and invoke protocol.
     *
     * @remarks
     * Queries model connections in a specified AgentCore workspace. Supports filtering by name through `Name` and selecting exact match or fuzzy match through `SearchType`. Also supports filtering by model provider type and invoke protocol, and supports paging.
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
     * Queries model connections in a specified workspace with paging. Supports filtering by name, provider type, and invoke protocol.
     *
     * @remarks
     * Queries model connections in a specified AgentCore workspace. Supports filtering by name through `Name` and selecting exact match or fuzzy match through `SearchType`. Also supports filtering by model provider type and invoke protocol, and supports paging.
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
     * Queries models in a specified workspace by using paging. Supports filtering by model connection and model name.
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
     * Queries models in a specified workspace by using paging. Supports filtering by model connection and model name.
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
     * Queries the models and their capabilities in the built-in model catalog of AgentCore for a specified provider.
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
     * Queries the models and their capabilities in the built-in model catalog of AgentCore for a specified provider.
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
     * Queries the list of active sessions in the sandbox of a specified managed agent by paging, and returns the session source and external channel type.
     *
     * @remarks
     * Queries the list of active sessions in the sandbox of a specified managed agent.
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
     * Queries the list of active sessions in the sandbox of a specified managed agent by paging, and returns the session source and external channel type.
     *
     * @remarks
     * Queries the list of active sessions in the sandbox of a specified managed agent.
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
     * Queries the list of sandboxes for a managed agent in a specified workspace. You can filter results by sandbox ID and active session ID fragments.
     *
     * @remarks
     * Queries the list of sandboxes for a specified managed agent. The searchText parameter performs a fuzzy match on sandbox ID fragments, and the sessionId parameter performs a fuzzy match on active session ID fragments. Both parameters are case-insensitive and can be used together with AND logic.
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
     * Queries the list of sandboxes for a managed agent in a specified workspace. You can filter results by sandbox ID and active session ID fragments.
     *
     * @remarks
     * Queries the list of sandboxes for a specified managed agent. The searchText parameter performs a fuzzy match on sandbox ID fragments, and the sessionId parameter performs a fuzzy match on active session ID fragments. Both parameters are case-insensitive and can be used together with AND logic.
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
     * Queries service endpoints in a specified workspace with paging and supports filtering by target type, agent, collaboration component, and status.
     *
     * @remarks
     * ## Request description\\nQueries service endpoints in a specified workspace with paging. You can filter the results by targetType, agentId, agentVersion, resourceBindingId, collaborationComponent, and status. Use maxResults to specify the maximum number of records per page, and use nextToken to retrieve the next page. If maxResults is not specified, the server returns 20 records by default.\\n
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
     * Queries service endpoints in a specified workspace with paging and supports filtering by target type, agent, collaboration component, and status.
     *
     * @remarks
     * ## Request description\\nQueries service endpoints in a specified workspace with paging. You can filter the results by targetType, agentId, agentVersion, resourceBindingId, collaborationComponent, and status. Use maxResults to specify the maximum number of records per page, and use nextToken to retrieve the next page. If maxResults is not specified, the server returns 20 records by default.\\n
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
     * Queries skill reference relationships.
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
     * Queries skill reference relationships.
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
     * Performs a paged query of Skills in a specified workspace and returns basic Skill information, version status, and paging information.
     *
     * @remarks
     * ## Operation description
     * Performs a paged query of Skills in a specified workspace and returns basic Skill information, version status, and paging information.
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
     * Performs a paged query of Skills in a specified workspace and returns basic Skill information, version status, and paging information.
     *
     * @remarks
     * ## Operation description
     * Performs a paged query of Skills in a specified workspace and returns basic Skill information, version status, and paging information.
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
     * Queries teams in a specified workspace by using paging. You can use nameLike to filter teams by fuzzy matching the team name, maxResults to specify the maximum number of records per page, and nextToken to retrieve the next page. If maxResults is not specified, the server returns 10 records by default. The member information in the list includes only the member identifier, name, and team role.
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
     * Queries teams in a specified workspace by using paging. You can use nameLike to filter teams by fuzzy matching the team name, maxResults to specify the maximum number of records per page, and nextToken to retrieve the next page. If maxResults is not specified, the server returns 10 records by default. The member information in the list includes only the member identifier, name, and team role.
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
     * Performs a paged query for users in a specified workspace. You can use nameLike to filter users by fuzzy match on the username, maxResults to specify the maximum number of records per page for paging, and nextToken to retrieve the next page. If maxResults is not specified, 10 records are returned by default.
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
     * Performs a paged query for users in a specified workspace. You can use nameLike to filter users by fuzzy match on the username, maxResults to specify the maximum number of records per page for paging, and nextToken to retrieve the next page. If maxResults is not specified, 10 records are returned by default.
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
     * Performs a paged query on the workspaces under the current tenant. By default, the list does not return soft-deleted records with the Deleted status. The server performs stable sorting on the results by creation order to facilitate paging.
     *
     * @remarks
     * ## Request description\\nPerforms a paged query on the workspaces under the current tenant. By default, the list does not return soft-deleted records with the Deleted status. The server performs stable sorting on the results by creation order to facilitate paging. You can use nextToken to obtain the next page, skip to skip a specified number of workspaces, maxResults to specify the maximum number of records per page, and nameLike to perform fuzzy filtering by workspace name. If maxResults is not specified or is set to 0, the server returns 20 records by default.\\n
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
     * Performs a paged query on the workspaces under the current tenant. By default, the list does not return soft-deleted records with the Deleted status. The server performs stable sorting on the results by creation order to facilitate paging.
     *
     * @remarks
     * ## Request description\\nPerforms a paged query on the workspaces under the current tenant. By default, the list does not return soft-deleted records with the Deleted status. The server performs stable sorting on the results by creation order to facilitate paging. You can use nextToken to obtain the next page, skip to skip a specified number of workspaces, maxResults to specify the maximum number of records per page, and nameLike to perform fuzzy filtering by workspace name. If maxResults is not specified or is set to 0, the server returns 20 records by default.\\n
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
     * Takes the online version of a specified Skill offline so that it is no longer used as the online version.
     *
     * @remarks
     * ## Operation description
     * Takes the online version of a specified Skill offline so that it is no longer used as the online version.
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
     * Takes the online version of a specified Skill offline so that it is no longer used as the online version.
     *
     * @remarks
     * ## Operation description
     * Takes the online version of a specified Skill offline so that it is no longer used as the online version.
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
     * Sets a specified Skill version as the online version.
     *
     * @remarks
     * ## Operation description
     * Sets a specified Skill version as the online version.
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
     * Sets a specified Skill version as the online version.
     *
     * @remarks
     * ## Operation description
     * Sets a specified Skill version as the online version.
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
     * Parses and checks one or more Skill ZIP packages uploaded to OSS, and returns the name, version, and conflict check results.
     *
     * @remarks
     * ## Operation description
     * Parses and checks one or more Skill ZIP packages uploaded to OSS, and returns the name, version, and conflict check results.
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
     * Parses and checks one or more Skill ZIP packages uploaded to OSS, and returns the name, version, and conflict check results.
     *
     * @remarks
     * ## Operation description
     * Parses and checks one or more Skill ZIP packages uploaded to OSS, and returns the name, version, and conflict check results.
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
     * Publishes a specified Skill version to transition it to the published state.
     *
     * @remarks
     * ## Operation description
     * Publishes a specified Skill version to transition it to the published state.
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
     * Publishes a specified Skill version to transition it to the published state.
     *
     * @remarks
     * ## Operation description
     * Publishes a specified Skill version to transition it to the published state.
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
     * Converts a specified Skill version back to an editable draft so that you can continue to modify it.
     *
     * @remarks
     * ## Request description
     * Converts a specified Skill version back to an editable draft so that you can continue to modify it.
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
     * Converts a specified Skill version back to an editable draft so that you can continue to modify it.
     *
     * @remarks
     * ## Request description
     * Converts a specified Skill version back to an editable draft so that you can continue to modify it.
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
     * Resets the logon password of a specified user. You can specify the user by using agentCoreUserId or username, and you must specify at least one of them. This operation only supports resetting passwords for users who use local password authentication in the workspace. If you do not specify the password parameter, the server generates a random password and returns it in the response.
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
     * Resets the logon password of a specified user. You can specify the user by using agentCoreUserId or username, and you must specify at least one of them. This operation only supports resetting passwords for users who use local password authentication in the workspace. If you do not specify the password parameter, the server generates a random password and returns it in the response.
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
     * Retries the image cache.
     *
     * @remarks
     * Retries the image cache for the original ImageId in the current workspace. WorkspaceId is required. The business request body is not required and can be omitted or provided as an empty object. The source authorization and transfer network reuse the trusted context of the original registration. If a digest exists, the retry uses the original digest. If no digest exists, the original tag is resolved again. A new request for a FAILED status can start a new production round. PENDING and READY statuses are reused. DELETING status is rejected, and deleted resources are not recreated. PUBLIC and PRIVATE statuses reuse the pull authorization of the original workspace. Returns a complete acceptance snapshot and retains the original ImageId and CreatedAt. ClientToken does not guarantee request deduplication. If the result is not confirmed, query the real-time status first before deciding whether to resubmit.
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
     * Retries the image cache.
     *
     * @remarks
     * Retries the image cache for the original ImageId in the current workspace. WorkspaceId is required. The business request body is not required and can be omitted or provided as an empty object. The source authorization and transfer network reuse the trusted context of the original registration. If a digest exists, the retry uses the original digest. If no digest exists, the original tag is resolved again. A new request for a FAILED status can start a new production round. PENDING and READY statuses are reused. DELETING status is rejected, and deleted resources are not recreated. PUBLIC and PRIVATE statuses reuse the pull authorization of the original workspace. Returns a complete acceptance snapshot and retains the original ImageId and CreatedAt. ClientToken does not guarantee request deduplication. If the result is not confirmed, query the real-time status first before deciding whether to resubmit.
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
     * Retrieves long-term memory from a MemoryStore based on semantics.
     *
     * @remarks
     * Retrieves long-term memory from a MemoryStore based on semantics.
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
     * Retrieves long-term memory from a MemoryStore based on semantics.
     *
     * @remarks
     * Retrieves long-term memory from a MemoryStore based on semantics.
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
     * ## Request description
     * Submits a specified draft version of an AgentSpec for review. If no release pipeline is configured, the version is directly published online.
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
     * ## Request description
     * Submits a specified draft version of an AgentSpec for review. If no release pipeline is configured, the version is directly published online.
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
     * ## Operation description
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
     * ## Operation description
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
     * Updates the ServiceEndpoint, enablement status, or channel behavior configuration bound to an IM channel. At least one updatable field must be provided.
     *
     * @remarks
     * Updates the ServiceEndpoint, enablement status, or channel behavior configuration bound to an IM channel. At least one updatable field must be provided.
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
     * Updates the ServiceEndpoint, enablement status, or channel behavior configuration bound to an IM channel. At least one updatable field must be provided.
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
     * Fully updates the channel credentials of a specified IM channel. Secrets are not returned in the response.
     *
     * @remarks
     * Fully updates the channel credentials of a specified IM channel. Secrets are not returned in the response.
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
     * Fully updates the channel credentials of a specified IM channel. Secrets are not returned in the response.
     *
     * @remarks
     * Fully updates the channel credentials of a specified IM channel. Secrets are not returned in the response.
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
     * Updates the business tags, version labels, and visibility scope of a specified AgentSpec. Fields that are not provided remain unchanged.
     *
     * @remarks
     * ## Operation description
     * Updates the business tags, version labels, and visibility scope of a specified AgentSpec. Fields that are not provided remain unchanged.
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
     * Updates the business tags, version labels, and visibility scope of a specified AgentSpec. Fields that are not provided remain unchanged.
     *
     * @remarks
     * ## Operation description
     * Updates the business tags, version labels, and visibility scope of a specified AgentSpec. Fields that are not provided remain unchanged.
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
     * Updates the API Key or Service Account Key collection for an enabled QoderCLI Connector. When serviceAccountKeys is submitted, the service treats it as the complete updated key collection and performs additions, renames, rotations, and deletions accordingly.
     *
     * @remarks
     * Updates the sensitive configuration of a specified Connector and aligns Service Account Keys by ID.
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
     * Updates the API Key or Service Account Key collection for an enabled QoderCLI Connector. When serviceAccountKeys is submitted, the service treats it as the complete updated key collection and performs additions, renames, rotations, and deletions accordingly.
     *
     * @remarks
     * Updates the sensitive configuration of a specified Connector and aligns Service Account Keys by ID.
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
     * Updates the content or description of a specified credential. You must specify at least one of credentialMetadata and description. Unspecified attributes remain unchanged. The credential name and credential type cannot be modified after creation.
     *
     * @remarks
     * Updates the metadata or application scope of a specified credential.
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
     * Updates the content or description of a specified credential. You must specify at least one of credentialMetadata and description. Unspecified attributes remain unchanged. The credential name and credential type cannot be modified after creation.
     *
     * @remarks
     * Updates the metadata or application scope of a specified credential.
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
     * Updates the configuration of a specified custom agent in a workspace and executes the update asynchronously. Omitted top-level fields retain their original configurations. You can call the GetCustomAgent operation to query the update result.
     *
     * @remarks
     * Provide at least one top-level field to update. Omitted top-level fields retain their original configurations. When providing a configuration object, specify its required subfields and include any optional configurations that you want to retain. Arrays are replaced as a whole. Pass an empty array [] to clear a list. The agenticFsMounts field does not accept null. Pass null for the description field to clear the description, and pass null for the healthCheck field to remove the health check.
     * When updating an image, you must specify artifact.port and the type, instanceId, namespace, repo, and tag fields of artifact.container. To retain a custom startup command, also provide the entrypoint field.
     * In code package pattern, specify artifact.port and the sourceUri, languageRuntime, and entrypoint fields of artifact.code. Do not specify the container field at the same time. Dependencies must be packaged by the user. ZIP and TAR.GZ formats are supported, and the compressed package size cannot exceed 500,000,000 bytes. Query the runtime environment identity by calling the ListAgentCodeRuntimes operation. The sourceUri field supports oss:// addresses or HTTPS object addresses of standard OSS public domain names, including signed URLs. For local files, first call the GetAgentCodePackageUploadUrl operation to obtain an upload URL, upload the file directly, and then commit the returned sourceUri.
     * When submitting a new code package source, the backend rechecks read permissions, objects, and sizes. The configuration is saved only after the transfer succeeds. If the transfer fails, the current configuration is not saved. Saved fixed packages can be reused. Set the client timeout to 210 seconds for code package requests. Archive integrity and secure decompression are checked at startup. A successful acceptance does not indicate that the agent is ready to run.
     * When providing the runtime field, the compute and sessionPolicy fields must be provided at the same time. If the hpa field or its subfields are omitted, unspecified elastic configurations use default values. To retain the original elastic configurations, provide them together. When providing the network field, omitted access items are treated as allowed, but actual access is still restricted by the workspace network configurations. To retain the original restrictions, provide both accessInternet and accessVpc. When providing the healthCheck field, the port field is required, and other unspecified items use default values. When providing the logging.sls field, both project and logstore must be specified.
     * The update is an asynchronous process. A successful response indicates that the request is accepted. Call the GetCustomAgent operation to query latestSpecVersion, latestVersionStatus, and latestExecutionError, and check the status field to confirm the update result.
     * The clientToken field currently does not provide idempotency guarantees. Do not rely on this parameter to prevent duplicate requests. The healthyThreshold field for health checks currently does not take effect. Omit this field.
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
     * Updates the configuration of a specified custom agent in a workspace and executes the update asynchronously. Omitted top-level fields retain their original configurations. You can call the GetCustomAgent operation to query the update result.
     *
     * @remarks
     * Provide at least one top-level field to update. Omitted top-level fields retain their original configurations. When providing a configuration object, specify its required subfields and include any optional configurations that you want to retain. Arrays are replaced as a whole. Pass an empty array [] to clear a list. The agenticFsMounts field does not accept null. Pass null for the description field to clear the description, and pass null for the healthCheck field to remove the health check.
     * When updating an image, you must specify artifact.port and the type, instanceId, namespace, repo, and tag fields of artifact.container. To retain a custom startup command, also provide the entrypoint field.
     * In code package pattern, specify artifact.port and the sourceUri, languageRuntime, and entrypoint fields of artifact.code. Do not specify the container field at the same time. Dependencies must be packaged by the user. ZIP and TAR.GZ formats are supported, and the compressed package size cannot exceed 500,000,000 bytes. Query the runtime environment identity by calling the ListAgentCodeRuntimes operation. The sourceUri field supports oss:// addresses or HTTPS object addresses of standard OSS public domain names, including signed URLs. For local files, first call the GetAgentCodePackageUploadUrl operation to obtain an upload URL, upload the file directly, and then commit the returned sourceUri.
     * When submitting a new code package source, the backend rechecks read permissions, objects, and sizes. The configuration is saved only after the transfer succeeds. If the transfer fails, the current configuration is not saved. Saved fixed packages can be reused. Set the client timeout to 210 seconds for code package requests. Archive integrity and secure decompression are checked at startup. A successful acceptance does not indicate that the agent is ready to run.
     * When providing the runtime field, the compute and sessionPolicy fields must be provided at the same time. If the hpa field or its subfields are omitted, unspecified elastic configurations use default values. To retain the original elastic configurations, provide them together. When providing the network field, omitted access items are treated as allowed, but actual access is still restricted by the workspace network configurations. To retain the original restrictions, provide both accessInternet and accessVpc. When providing the healthCheck field, the port field is required, and other unspecified items use default values. When providing the logging.sls field, both project and logstore must be specified.
     * The update is an asynchronous process. A successful response indicates that the request is accepted. Call the GetCustomAgent operation to query latestSpecVersion, latestVersionStatus, and latestExecutionError, and check the status field to confirm the update result.
     * The clientToken field currently does not provide idempotency guarantees. Do not rely on this parameter to prevent duplicate requests. The healthyThreshold field for health checks currently does not take effect. Omit this field.
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
     * Updates the configuration of a specified external agent.
     *
     * @remarks
     * Updates the configuration of a specified external agent.
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
     * Updates the configuration of a specified external agent.
     *
     * @remarks
     * Updates the configuration of a specified external agent.
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
     * Updates the logon switch, member synchronization switch, or application configuration of a specified external identity provider for a workspace. Unspecified properties remain unchanged. The update is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track the progress.
     *
     * @remarks
     * ## Features and prerequisites
     * CustomSSO uses protocol=SAML and saml to save logon configurations. It does not accept legacy metadata or syncEnabled. To toggle the SCIM switch, you must call UpdateIdentityProviderSCIM. OIDC is not supported. You can either import XML or manually enter fields. If you import XML, metadataXml must be a single IdP EntityDescriptor XML text of up to 1 MiB. URLs or file paths are not accepted, and DTDs or external entities are prohibited. If you manually enter fields, you must provide entityId, loginUrl, bindingType, and a non-empty x509Certificates array at the same time. The entityId must be non-empty and up to 2,048 characters in length, and cannot be replaced after configuration. The loginUrl must be an absolute HTTPS URL without user credentials or fragments. The bindingType must be HTTP-Redirect or HTTP-POST. Signing certificates must be valid X.509 certificates, and up to 10 certificates are supported.
     * Saving the configuration does not automatically enable logon. A valid SAML configuration must exist before you enable logon. Setting loginEnabled=false only disables logon and does not clear SAML or SCIM configurations. You can independently pass Boolean values for jitProvisionEnabled and jitUpdateEnabled. If omitted, the existing values are retained. If omitted for the first time, the default value is false. Updating only the JIT switches also requires a valid SAML configuration. If the request is unchanged, the current binding may be returned directly without generating a new task. A successful update returns UPDATING. You can call GetIdentityProvider and wait for READY or UPDATE_FAILED. If the update fails, you can resubmit the request. An HTTP success response does not indicate that the upstream configuration has taken effect.
     * DingTalk and Feishu continue to use vendor metadata and logon or synchronization switches. They do not accept protocol or saml. Updating vendor metadata supports partial updates. You only need to submit the fields to be modified. Unsubmitted fields and saved credentials remain unchanged. The server merges the new and old values and then validates the complete configuration. Explicitly submitted fields cannot be null, empty strings, or blank strings. For example, you can submit only appSecret to update the secret. The existing vendor semantics of syncScope are retained. Saving the scope does not automatically trigger full synchronization.
     * ## Request and examples
     * PUT /workspaces/{workspaceId}/identity-providers/{identityProviderType}
     * Call conventions: Call the API in the region of the target workspace by using an AccessKey pair or STS token that has permissions on the identity provider resources of the workspace. In the following examples, ws-example, URLs, certificates, and tokens are placeholder values and must be replaced with actual values. The request body example shows the body parameters of the public API, not the extra body wrapper of the backend direct connection API. The response example shows only the business part. The outer layer also includes requestId, success, code, message, and httpStatusCode. Keep the requestId for troubleshooting and do not log secrets. Asynchronous business tasks do not mean that the HTTP request uses a long connection to wait for completion.
     * ```text
     * PUT /workspaces/ws-example/identity-providers/CustomSSO
     * {
     *   "protocol": "SAML",
     *   "saml": {
     *     "entityId": "https://idp.example.com/entity",
     *     "loginUrl": "https://idp.example.com/sso",
     *     "bindingType": "HTTP-Redirect",
     *     "x509Certificates": [
     *       "<Valid PEM X.509 certificate text>"
     *     ],
     *     "jitProvisionEnabled": false,
     *     "jitUpdateEnabled": false
     *   }
     * }
     * Toggle logon only: {"loginEnabled": true}
     * ```
     * ## Response example
     * ```json
     * {
     *   "data": {
     *     "workspaceId": "ws-example",
     *     "identityProviderType": "CustomSSO",
     *     "protocol": "SAML",
     *     "loginEnabled": false,
     *     "syncEnabled": false,
     *     "status": "UPDATING"
     *   }
     * }
     * ```
     * ## Errors and handling
     * Error handling: 400 InvalidParameter indicates that the parameters or current configuration prerequisites are not met. 404 IdentityProviderNotFound indicates that no binding of the matching type exists. Synchronous calls to the upstream may return 503 IdentityProviderProvisioningUnavailable if they fail. Keep the request ID for troubleshooting and do not interpret read failures as unconfigured. Actual authentication and workspace non-existence errors follow common error handling.
     * 400 InvalidParameter: XML and manual entry are mixed, manual entry items are missing, certificates are invalid, the protocol is not supported, entityId is changed, logon is enabled without configuration, or CustomSSO submits metadata or syncEnabled. 409 IdentityProviderOperationConflict: The current binding does not allow updates. CustomSSO supports resubmitting configurations from UPDATE_FAILED.
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
     * Updates the logon switch, member synchronization switch, or application configuration of a specified external identity provider for a workspace. Unspecified properties remain unchanged. The update is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track the progress.
     *
     * @remarks
     * ## Features and prerequisites
     * CustomSSO uses protocol=SAML and saml to save logon configurations. It does not accept legacy metadata or syncEnabled. To toggle the SCIM switch, you must call UpdateIdentityProviderSCIM. OIDC is not supported. You can either import XML or manually enter fields. If you import XML, metadataXml must be a single IdP EntityDescriptor XML text of up to 1 MiB. URLs or file paths are not accepted, and DTDs or external entities are prohibited. If you manually enter fields, you must provide entityId, loginUrl, bindingType, and a non-empty x509Certificates array at the same time. The entityId must be non-empty and up to 2,048 characters in length, and cannot be replaced after configuration. The loginUrl must be an absolute HTTPS URL without user credentials or fragments. The bindingType must be HTTP-Redirect or HTTP-POST. Signing certificates must be valid X.509 certificates, and up to 10 certificates are supported.
     * Saving the configuration does not automatically enable logon. A valid SAML configuration must exist before you enable logon. Setting loginEnabled=false only disables logon and does not clear SAML or SCIM configurations. You can independently pass Boolean values for jitProvisionEnabled and jitUpdateEnabled. If omitted, the existing values are retained. If omitted for the first time, the default value is false. Updating only the JIT switches also requires a valid SAML configuration. If the request is unchanged, the current binding may be returned directly without generating a new task. A successful update returns UPDATING. You can call GetIdentityProvider and wait for READY or UPDATE_FAILED. If the update fails, you can resubmit the request. An HTTP success response does not indicate that the upstream configuration has taken effect.
     * DingTalk and Feishu continue to use vendor metadata and logon or synchronization switches. They do not accept protocol or saml. Updating vendor metadata supports partial updates. You only need to submit the fields to be modified. Unsubmitted fields and saved credentials remain unchanged. The server merges the new and old values and then validates the complete configuration. Explicitly submitted fields cannot be null, empty strings, or blank strings. For example, you can submit only appSecret to update the secret. The existing vendor semantics of syncScope are retained. Saving the scope does not automatically trigger full synchronization.
     * ## Request and examples
     * PUT /workspaces/{workspaceId}/identity-providers/{identityProviderType}
     * Call conventions: Call the API in the region of the target workspace by using an AccessKey pair or STS token that has permissions on the identity provider resources of the workspace. In the following examples, ws-example, URLs, certificates, and tokens are placeholder values and must be replaced with actual values. The request body example shows the body parameters of the public API, not the extra body wrapper of the backend direct connection API. The response example shows only the business part. The outer layer also includes requestId, success, code, message, and httpStatusCode. Keep the requestId for troubleshooting and do not log secrets. Asynchronous business tasks do not mean that the HTTP request uses a long connection to wait for completion.
     * ```text
     * PUT /workspaces/ws-example/identity-providers/CustomSSO
     * {
     *   "protocol": "SAML",
     *   "saml": {
     *     "entityId": "https://idp.example.com/entity",
     *     "loginUrl": "https://idp.example.com/sso",
     *     "bindingType": "HTTP-Redirect",
     *     "x509Certificates": [
     *       "<Valid PEM X.509 certificate text>"
     *     ],
     *     "jitProvisionEnabled": false,
     *     "jitUpdateEnabled": false
     *   }
     * }
     * Toggle logon only: {"loginEnabled": true}
     * ```
     * ## Response example
     * ```json
     * {
     *   "data": {
     *     "workspaceId": "ws-example",
     *     "identityProviderType": "CustomSSO",
     *     "protocol": "SAML",
     *     "loginEnabled": false,
     *     "syncEnabled": false,
     *     "status": "UPDATING"
     *   }
     * }
     * ```
     * ## Errors and handling
     * Error handling: 400 InvalidParameter indicates that the parameters or current configuration prerequisites are not met. 404 IdentityProviderNotFound indicates that no binding of the matching type exists. Synchronous calls to the upstream may return 503 IdentityProviderProvisioningUnavailable if they fail. Keep the request ID for troubleshooting and do not interpret read failures as unconfigured. Actual authentication and workspace non-existence errors follow common error handling.
     * 400 InvalidParameter: XML and manual entry are mixed, manual entry items are missing, certificates are invalid, the protocol is not supported, entityId is changed, logon is enabled without configuration, or CustomSSO submits metadata or syncEnabled. 409 IdentityProviderOperationConflict: The current binding does not allow updates. CustomSSO supports resubmitting configurations from UPDATE_FAILED.
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
     * Updates the configuration of a specified managed agent.
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
     * Updates the configuration of a specified managed agent.
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
     * Updates the address, description, authentication, or Swagger configuration of a specified MCP service. The MCP type and protocol cannot be modified after creation. The update is an asynchronous process.
     *
     * @remarks
     * ## Operation description
     * Updates the address, description, authentication, or Swagger configuration of a specified MCP service. The MCP type and protocol cannot be modified after creation. The update is an asynchronous process.
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
     * Updates the address, description, authentication, or Swagger configuration of a specified MCP service. The MCP type and protocol cannot be modified after creation. The update is an asynchronous process.
     *
     * @remarks
     * ## Operation description
     * Updates the address, description, authentication, or Swagger configuration of a specified MCP service. The MCP type and protocol cannot be modified after creation. The update is an asynchronous process.
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
     * Updates MCP parameters by template.
     *
     * @remarks
     * Updates the schema-exposed parameters by using the same template version that was bound when the MCP was created, without upgrading the template version.
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
     * Updates MCP parameters by template.
     *
     * @remarks
     * Updates the schema-exposed parameters by using the same template version that was bound when the MCP was created, without upgrading the template version.
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
     * Updates the text or metadata of a long-term memory based on the memory ID.
     *
     * @remarks
     * Updates the text or metadata of a long-term memory based on the memory ID.
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
     * Updates the text or metadata of a long-term memory based on the memory ID.
     *
     * @remarks
     * Updates the text or metadata of a long-term memory based on the memory ID.
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
     * Updates a memory store.
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
     * Updates a memory store.
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
     * Updates the description, context token limit, maximum output token count, or capability configurations of a specified model.
     *
     * @remarks
     * This operation supports updating description, contextSize, maxTokens, and capabilities. You must specify at least one non-null parameter. Parameters that are not specified or are set to null retain their original values. The capabilities parameter is replaced as a whole object. Capability fields that are not specified in the object are treated as false.
     * Modifying only the description does not refresh the model configurations of associated agents. When contextSize, maxTokens, or capabilities actually change, the system asynchronously refreshes managed agents that reference the model within the same workspace, as well as external agents whose model source is PLATFORM. External agents whose model source is RUNTIME are not affected. Repeatedly submitting the same configuration does not trigger a new model configuration refresh.
     * A successful response indicates that the model configuration has been saved, but does not indicate that associated agents have completed the configuration refresh or that the runtime has loaded the new configuration. You can call GetModel to query the saved model configuration.
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
     * Updates the description, context token limit, maximum output token count, or capability configurations of a specified model.
     *
     * @remarks
     * This operation supports updating description, contextSize, maxTokens, and capabilities. You must specify at least one non-null parameter. Parameters that are not specified or are set to null retain their original values. The capabilities parameter is replaced as a whole object. Capability fields that are not specified in the object are treated as false.
     * Modifying only the description does not refresh the model configurations of associated agents. When contextSize, maxTokens, or capabilities actually change, the system asynchronously refreshes managed agents that reference the model within the same workspace, as well as external agents whose model source is PLATFORM. External agents whose model source is RUNTIME are not affected. Repeatedly submitting the same configuration does not trigger a new model configuration refresh.
     * A successful response indicates that the model configuration has been saved, but does not indicate that associated agents have completed the configuration refresh or that the runtime has loaded the new configuration. You can call GetModel to query the saved model configuration.
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
     * Updates the mutable configurations of a specified model connection and resubmits the publish task. The invocation protocol cannot be modified after creation.
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
     * Updates the mutable configurations of a specified model connection and resubmits the publish task. The invocation protocol cannot be modified after creation.
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
     * Updates the business tags of a specified skill. Other attributes not provided in the request remain unchanged.
     *
     * @remarks
     * ## Request description
     * Updates the business tags of a specified skill. Other attributes not provided in the request remain unchanged.
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
     * Updates the business tags of a specified skill. Other attributes not provided in the request remain unchanged.
     *
     * @remarks
     * ## Request description
     * Updates the business tags of a specified skill. Other attributes not provided in the request remain unchanged.
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
     * Updates the version labels and their mappings for a specified Skill.
     *
     * @remarks
     * ## Operation description
     * Updates the version labels and their mappings for a specified Skill.
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
     * Updates the version labels and their mappings for a specified Skill.
     *
     * @remarks
     * ## Operation description
     * Updates the version labels and their mappings for a specified Skill.
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
     * ## Request description
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
     * ## Request description
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
     * Updates the description and members of a specified team. When users or agents are passed, the corresponding member list is replaced based on full overwrite semantics. Member lists that are not passed remain unchanged. The team name cannot be modified after creation.
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
     * Updates the description and members of a specified team. When users or agents are passed, the corresponding member list is replaced based on full overwrite semantics. Member lists that are not passed remain unchanged. The team name cannot be modified after creation.
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
     * Updates the display name, email address, or note of a specified user. You must specify at least one of the displayName, email, and note parameters. Unspecified attributes remain unchanged. The username cannot be modified after creation.
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
     * Updates the display name, email address, or note of a specified user. You must specify at least one of the displayName, email, and note parameters. Unspecified attributes remain unchanged. The username cannot be modified after creation.
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
     * Updates the name or network configuration of a workspace. Only workspaces in the Initialized state can be updated. Status, TenantId, and RegionId are maintained by the server and cannot be modified through this API operation.
     *
     * @remarks
     * ## Request description\\nUpdates the name or network configuration of a workspace. Only workspaces in the `Initialized` state can be updated. `Status`, `TenantId`, and `RegionId` are maintained by the server and cannot be modified through this API operation. The network configuration uses `Enabled` to specify whether to enable the VPC network. If enabled, you must provide `VpcId` and at least one `VSwitchIds`.\\n.
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
     * Updates the name or network configuration of a workspace. Only workspaces in the Initialized state can be updated. Status, TenantId, and RegionId are maintained by the server and cannot be modified through this API operation.
     *
     * @remarks
     * ## Request description\\nUpdates the name or network configuration of a workspace. Only workspaces in the `Initialized` state can be updated. `Status`, `TenantId`, and `RegionId` are maintained by the server and cannot be modified through this API operation. The network configuration uses `Enabled` to specify whether to enable the VPC network. If enabled, you must provide `VpcId` and at least one `VSwitchIds`.\\n.
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
     * Imports an AgentSpec into the current workspace by retrieving and parsing an uploaded AgentSpec ZIP package from OSS.
     *
     * @remarks
     * ## Request description
     * Retrieves an uploaded AgentSpec ZIP package from OSS, parses the package, and imports the AgentSpec into the current workspace.
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
     * Imports an AgentSpec into the current workspace by retrieving and parsing an uploaded AgentSpec ZIP package from OSS.
     *
     * @remarks
     * ## Request description
     * Retrieves an uploaded AgentSpec ZIP package from OSS, parses the package, and imports the AgentSpec into the current workspace.
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
     * Retrieves an uploaded Skill ZIP package from OSS, parses it, and imports the Skill into the current workspace.
     *
     * @remarks
     * ## Operation description
     * Retrieves an uploaded Skill ZIP package from OSS, parses it, and imports the Skill into the current workspace.
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
     * Retrieves an uploaded Skill ZIP package from OSS, parses it, and imports the Skill into the current workspace.
     *
     * @remarks
     * ## Operation description
     * Retrieves an uploaded Skill ZIP package from OSS, parses it, and imports the Skill into the current workspace.
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
     * Validates the OSS code package source for an agent.
     *
     * @remarks
     * Uses the current workspace role to check whether the customer\\"s OSS object exists and is readable, and checks the file name extension and compressed size. Returns the sourceUri, file name, size, and format read in this request. The bucket and object key are passed separately, and HTTPS download URLs are not accepted.
     * The validation uses object metadata and read probing. It does not perform full downloads, transfers, or decompression, nor does it generate a SHA-256 hash. Passing the validation does not mean that the archive content is complete or can be started. When you submit a CreateCustomAgent or UpdateCustomAgent request, the system re-validates and transfers the package. You do not need to invoke this operation in advance as a prerequisite for submission.
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
     * Validates the OSS code package source for an agent.
     *
     * @remarks
     * Uses the current workspace role to check whether the customer\\"s OSS object exists and is readable, and checks the file name extension and compressed size. Returns the sourceUri, file name, size, and format read in this request. The bucket and object key are passed separately, and HTTPS download URLs are not accepted.
     * The validation uses object metadata and read probing. It does not perform full downloads, transfers, or decompression, nor does it generate a SHA-256 hash. Passing the validation does not mean that the archive content is complete or can be started. When you submit a CreateCustomAgent or UpdateCustomAgent request, the system re-validates and transfers the package. You do not need to invoke this operation in advance as a prerequisite for submission.
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
     * 检查智能体代码包 OSS RAM 授权状态
     *
     * @remarks
     * 检查当前 Workspace 角色是否绑定所选源 Bucket 对应的自定义 RAM 策略，复用已有挂载授权。仅返回策略绑定状态，不验证代码包存在或可读、不修改默认桶。授权状态不能替代 ValidateAgentCodePackageFromOss 的实际对象读取校验。
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
     * 检查智能体代码包 OSS RAM 授权状态
     *
     * @remarks
     * 检查当前 Workspace 角色是否绑定所选源 Bucket 对应的自定义 RAM 策略，复用已有挂载授权。仅返回策略绑定状态，不验证代码包存在或可读、不修改默认桶。授权状态不能替代 ValidateAgentCodePackageFromOss 的实际对象读取校验。
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
     * Validates whether one or more Qoder Service Account Keys are available at a specified site. This operation does not save keys or modify the Connector status.
     *
     * @remarks
     * Validates whether the credentials of a specified Connector are valid and returns a list of invalid Service Account Keys.
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
     * Validates whether one or more Qoder Service Account Keys are available at a specified site. This operation does not save keys or modify the Connector status.
     *
     * @remarks
     * Validates whether the credentials of a specified Connector are valid and returns a list of invalid Service Account Keys.
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
     * Verifies the ACR RAM authorization for a workspace.
     *
     * @remarks
     * ACR and user OSS mounts share the workspace role. If no existing role is found, AliyunAgentCoreWorkspace-{workspaceId} is used. If a valid legacy OSS mount role exists, it is retained and only new permissions are appended without overwriting existing OSS policies. Fixed historical shared roles continue to be reused and are not recreated or renamed due to new naming templates. This operation performs a read-only check to verify whether the custom policies corresponding to the target instance, namespace, and repository are attached to the shared role, and checks the workspace prerequisites. It does not create execution versions or trigger configuration delivery. AUTHORIZED only indicates that the custom policy for the target name is attached, without parsing the policy content or simulating the final permissions. ELIGIBLE does not mean that RuntimeManager capacity or template admission is complete, nor does it require ACR configuration to be delivered. Creating or updating an agent re-verifies permissions and processes ACR dependencies on the backend. Configuration waiting, failures, and retries are reported through agent details.
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
     * Verifies the ACR RAM authorization for a workspace.
     *
     * @remarks
     * ACR and user OSS mounts share the workspace role. If no existing role is found, AliyunAgentCoreWorkspace-{workspaceId} is used. If a valid legacy OSS mount role exists, it is retained and only new permissions are appended without overwriting existing OSS policies. Fixed historical shared roles continue to be reused and are not recreated or renamed due to new naming templates. This operation performs a read-only check to verify whether the custom policies corresponding to the target instance, namespace, and repository are attached to the shared role, and checks the workspace prerequisites. It does not create execution versions or trigger configuration delivery. AUTHORIZED only indicates that the custom policy for the target name is attached, without parsing the policy content or simulating the final permissions. ELIGIBLE does not mean that RuntimeManager capacity or template admission is complete, nor does it require ACR configuration to be delivered. Creating or updating an agent re-verifies permissions and processes ACR dependencies on the backend. Configuration waiting, failures, and retries are reported through agent details.
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
     * Queries the RAM authorization status of AgenticFS mounting for a workspace.
     *
     * @remarks
     * Determines the shared role and target access point based on the workspace and server, checks whether the role has a mounted policy with the expected name and a type of Custom, and returns AUTHORIZED or UNAUTHORIZED. Consistent with OSS/ACR, this operation does not verify the policy body, role trust, or actual mount read/write permissions. If the upstream query fails, an error is returned.
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
     * Queries the RAM authorization status of AgenticFS mounting for a workspace.
     *
     * @remarks
     * Determines the shared role and target access point based on the workspace and server, checks whether the role has a mounted policy with the expected name and a type of Custom, and returns AUTHORIZED or UNAUTHORIZED. Consistent with OSS/ACR, this operation does not verify the policy body, role trust, or actual mount read/write permissions. If the upstream query fails, an error is returned.
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
     * Verifies the RAM authorization for a workspace to access an OSS bucket and returns the current authorization status. When bucketName is specified, verifies the authorization for an agent-mounted bucket. When bucketName is not specified, verifies and updates the authorization status of the workspace\\"s private OSS storage.
     *
     * @remarks
     * Queries whether the workspace OSS mount role is bound to the custom RAM policy corresponding to the target bucket, and returns AUTHORIZED or UNAUTHORIZED. When bucketName is not specified, the existing user-managed OSS binding of the workspace is used and the authorization status is saved. When bucketName is specified, only the authorization status of the specified bucket is queried without modifying the workspace OSS binding. This operation does not verify OSS data plane access permissions or resume workspace initialization tasks. Alibaba Cloud Container Registry (ACR) and user OSS mounts share the workspace role. If no existing role is available, AliyunAgentCoreWorkspace-{workspaceId} is used. If a valid legacy OSS mount role exists, it is reused and permissions are only appended without overwriting existing OSS policies. Previously pinned shared roles continue to be reused and are not recreated or renamed due to new naming templates.
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
     * Verifies the RAM authorization for a workspace to access an OSS bucket and returns the current authorization status. When bucketName is specified, verifies the authorization for an agent-mounted bucket. When bucketName is not specified, verifies and updates the authorization status of the workspace\\"s private OSS storage.
     *
     * @remarks
     * Queries whether the workspace OSS mount role is bound to the custom RAM policy corresponding to the target bucket, and returns AUTHORIZED or UNAUTHORIZED. When bucketName is not specified, the existing user-managed OSS binding of the workspace is used and the authorization status is saved. When bucketName is specified, only the authorization status of the specified bucket is queried without modifying the workspace OSS binding. This operation does not verify OSS data plane access permissions or resume workspace initialization tasks. Alibaba Cloud Container Registry (ACR) and user OSS mounts share the workspace role. If no existing role is available, AliyunAgentCoreWorkspace-{workspaceId} is used. If a valid legacy OSS mount role exists, it is reused and permissions are only appended without overwriting existing OSS policies. Previously pinned shared roles continue to be reused and are not recreated or renamed due to new naming templates.
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
