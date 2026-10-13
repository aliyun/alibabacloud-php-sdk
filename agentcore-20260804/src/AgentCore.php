<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentShrinkRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpShrinkRequest;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteManagedAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteMcpRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteMcpResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpMarketItemRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpMarketItemResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProvidersRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProvidersResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpMarketItemsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpMarketItemsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpToolsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpToolsResponse;
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
     * Deletes models in a specified workspace in batches. If any model is in use, the entire batch request fails.
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
     * Deletes models in a specified workspace in batches. If any model is in use, the entire batch request fails.
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
     * Uploads Skill ZIP packages in bulk through OSS and returns the processing result of each Skill.
     *
     * @remarks
     * ## Operation description
     * Uploads Skill ZIP packages in bulk through OSS and returns the processing result of each Skill.
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
     * Uploads Skill ZIP packages in bulk through OSS and returns the processing result of each Skill.
     *
     * @remarks
     * ## Operation description
     * Uploads Skill ZIP packages in bulk through OSS and returns the processing result of each Skill.
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
     * Converts an MCP to free editing.
     *
     * @remarks
     * Disables template usage constraints. After the conversion, the MCP retains its source and tags but no longer appears on the usage page.
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
     * Converts an MCP to free editing.
     *
     * @remarks
     * Disables template usage constraints. After the conversion, the MCP retains its source and tags but no longer appears on the usage page.
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
     * Creates an IM channel for a specified agent and binds a publicly accessible ServiceEndpoint.
     *
     * @remarks
     * Creates an IM channel for a specified agent and binds a publicly accessible ServiceEndpoint.
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
     * Creates an IM channel for a specified agent and binds a publicly accessible ServiceEndpoint.
     *
     * @remarks
     * Creates an IM channel for a specified agent and binds a publicly accessible ServiceEndpoint.
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
     * Creates an AgentSpec in the specified workspace and generates the first draft version. Returns a resource conflict error if an AgentSpec with the same name already exists.
     *
     * @remarks
     * ## Operation description
     * Creates an AgentSpec in the specified workspace and generates the first draft version. Returns a resource conflict error if an AgentSpec with the same name already exists.
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
     * Creates an AgentSpec in the specified workspace and generates the first draft version. Returns a resource conflict error if an AgentSpec with the same name already exists.
     *
     * @remarks
     * ## Operation description
     * Creates an AgentSpec in the specified workspace and generates the first draft version. Returns a resource conflict error if an AgentSpec with the same name already exists.
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
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist, and there must be no draft currently being edited.
     *
     * @remarks
     * ## Request description
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist, and there must be no draft currently being edited.
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
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist, and there must be no draft currently being edited.
     *
     * @remarks
     * ## Request description
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist, and there must be no draft currently being edited.
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
     * Creates a credential in a specified workspace for authentication when an agent accesses external services. Currently, only the apiKey type is supported. The credential content is passed in as a JSON string through credentialMetadata and can only be queried in masked form after being written.
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
     * Creates a credential in a specified workspace for authentication when an agent accesses external services. Currently, only the apiKey type is supported. The credential content is passed in as a JSON string through credentialMetadata and can only be queried in masked form after being written.
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
     * Creates a custom agent in a specified workspace and submits the container image deployment configuration. The creation process is asynchronous. You can call the GetCustomAgent operation to query the deployment result.
     *
     * @remarks
     * Before you call this operation, prepare a writable workspace, a RAM role ARN, an ACR container image, and the runtime configuration. You must specify name, artifact, roleArn, and runtime. The runtime parameter must include both compute and sessionPolicy.
     * Currently, only ACR container image deployment is supported. Use artifact.container and specify the service listening port in artifact.port. Omit artifact.code. The image must have the required access permissions and be accessible over the network allowed by the workspace.
     * The creation process is asynchronous. A successful response indicates that the request is accepted. Use the returned agentId to call GetCustomAgent and check latestVersionStatus, latestExecutionError, and status for the corresponding latestSpecVersion to confirm the deployment result. After the deployment is ready, you can call CreateServiceEndpoint to configure the access endpoint.
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
     * Creates a custom agent in a specified workspace and submits the container image deployment configuration. The creation process is asynchronous. You can call the GetCustomAgent operation to query the deployment result.
     *
     * @remarks
     * Before you call this operation, prepare a writable workspace, a RAM role ARN, an ACR container image, and the runtime configuration. You must specify name, artifact, roleArn, and runtime. The runtime parameter must include both compute and sessionPolicy.
     * Currently, only ACR container image deployment is supported. Use artifact.container and specify the service listening port in artifact.port. Omit artifact.code. The image must have the required access permissions and be accessible over the network allowed by the workspace.
     * The creation process is asynchronous. A successful response indicates that the request is accepted. Use the returned agentId to call GetCustomAgent and check latestVersionStatus, latestExecutionError, and status for the corresponding latestSpecVersion to confirm the deployment result. After the deployment is ready, you can call CreateServiceEndpoint to configure the access endpoint.
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
     * Creates a bootstrap token and CMS configuration required for connecting a specified external agent.
     *
     * @remarks
     * Creates a bootstrap token and CMS configuration required for connecting a specified external agent.
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
     * Creates a bootstrap token and CMS configuration required for connecting a specified external agent.
     *
     * @remarks
     * Creates a bootstrap token and CMS configuration required for connecting a specified external agent.
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
     * Binds an external identity provider to a specified workspace for single sign-on and organization member synchronization. Each workspace can be bound to at most one external identity provider. The binding is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track the progress.
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
     * Binds an external identity provider to a specified workspace for single sign-on and organization member synchronization. Each workspace can be bound to at most one external identity provider. The binding is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track the progress.
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
     * Creates a model configuration under a specified model connection in a workspace.
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
     * Creates a model configuration under a specified model connection in a workspace.
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
     * Creates a model connection in a specified workspace and configures the upstream model service address, invoke protocol, and access credentials.
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
     * Creates a model connection in a specified workspace and configures the upstream model service address, invoke protocol, and access credentials.
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
     * Creates a team in a specified workspace and sets user members and agent members at the same time. The user members must include exactly one member with the ADMIN role. Agent members can only have the LEADER or WORKER role.
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
     * Creates a team in a specified workspace and sets user members and agent members at the same time. The user members must include exactly one member with the ADMIN role. Agent members can only have the LEADER or WORKER role.
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
     * Creates a user in a specified workspace. The username must be unique within the workspace and can contain only lowercase letters, digits, and hyphens. Reserved names such as manager, admin, or names starting with worker- cannot be used. If password is not specified, the server generates an initial password and returns it in the initialPassword field of the response.
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
     * Creates a user in a specified workspace. The username must be unique within the workspace and can contain only lowercase letters, digits, and hyphens. Reserved names such as manager, admin, or names starting with worker- cannot be used. If password is not specified, the server generates an initial password and returns it in the initialPassword field of the response.
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
     * ## Operation description\\nCreates an AgentCore workspace control plane record. The server completes the state transition from `Initializing` to `Initialized` within the same transaction. Use `Enabled` in the network configuration to specify whether to enable VPC networking. If VPC networking is enabled, you must provide a `VpcId` and at least one entry in `VSwitchIds`.\\n.
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
     * ## Operation description\\nCreates an AgentCore workspace control plane record. The server completes the state transition from `Initializing` to `Initialized` within the same transaction. Use `Enabled` in the network configuration to specify whether to enable VPC networking. If VPC networking is enabled, you must provide a `VpcId` and at least one entry in `VSwitchIds`.\\n.
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
     * Deletes a specified AgentSpec along with all its versions and metadata. This operation is irreversible.
     *
     * @remarks
     * ## Request description
     * Deletes a specified AgentSpec along with all its versions and metadata. This operation is irreversible.
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
     * Deletes a specified AgentSpec along with all its versions and metadata. This operation is irreversible.
     *
     * @remarks
     * ## Request description
     * Deletes a specified AgentSpec along with all its versions and metadata. This operation is irreversible.
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
     * Deletes a credential from a specified workspace and removes the ciphertext hosted in the credential service. After deletion, agents that are bound to this credential can no longer retrieve the credential content.
     *
     * @remarks
     * Deletes an access credential from a specified workspace. A credential cannot be deleted while it is still bound to an MCP service.
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
     * Deletes a credential from a specified workspace and removes the ciphertext hosted in the credential service. After deletion, agents that are bound to this credential can no longer retrieve the credential content.
     *
     * @remarks
     * Deletes an access credential from a specified workspace. A credential cannot be deleted while it is still bound to an MCP service.
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
     * Deletes a custom agent in a specified workspace. A successful request indicates that the deletion is accepted, and the runtime resources are subsequently cleaned up in the background.
     *
     * @remarks
     * Before you call this operation, make sure that the workspace is writable. If the agent is still associated with a team, you must dissociate the team first.
     * Deletion is an asynchronous process. After the request is accepted, the associated invocation endpoints become unavailable, and the runtime resources are subsequently cleaned up. The status in the response is typically Deleting. If the agent is already being deleted, a subsequent request returns the current summary.
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
     * Deletes a custom agent in a specified workspace. A successful request indicates that the deletion is accepted, and the runtime resources are subsequently cleaned up in the background.
     *
     * @remarks
     * Before you call this operation, make sure that the workspace is writable. If the agent is still associated with a team, you must dissociate the team first.
     * Deletion is an asynchronous process. After the request is accepted, the associated invocation endpoints become unavailable, and the runtime resources are subsequently cleaned up. The status in the response is typically Deleting. If the agent is already being deleted, a subsequent request returns the current summary.
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
     * Unbinds the external identity provider from a specified workspace and cleans up users synchronized by that identity provider. The unbinding is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track the progress.
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
     * Unbinds the external identity provider from a specified workspace and cleans up users synchronized by that identity provider. The unbinding is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track the progress.
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
     * Deletes a specified MCP service. The deletion is an asynchronous process. After the deletion is complete, the MCP service is no longer returned.
     *
     * @remarks
     * ## Operation description
     * Deletes a specified MCP service. The deletion is an asynchronous process. After the deletion is complete, the MCP service is no longer returned.
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
     * ## Operation description
     * Deletes a specified MCP service. The deletion is an asynchronous process. After the deletion is complete, the MCP service is no longer returned.
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
     * Deletes the control plane record of a specified workspace. The server completes the state transition from Deleting to Deleted within the same transaction. When you repeatedly delete a workspace that is in the Deleting or Deleted state, the server handles the request with idempotence semantics.
     *
     * @remarks
     * ## Request description\\nDeletes the control plane record of a specified workspace. The server completes the state transition from `Deleting` to `Deleted` within the same transaction. When you repeatedly delete a workspace that is in the `Deleting` or `Deleted` state, the server handles the request with idempotence semantics.\\n.
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
     * Deletes the control plane record of a specified workspace. The server completes the state transition from Deleting to Deleted within the same transaction. When you repeatedly delete a workspace that is in the Deleting or Deleted state, the server handles the request with idempotence semantics.
     *
     * @remarks
     * ## Request description\\nDeletes the control plane record of a specified workspace. The server completes the state transition from `Deleting` to `Deleted` within the same transaction. When you repeatedly delete a workspace that is in the `Deleting` or `Deleted` state, the server handles the request with idempotence semantics.\\n.
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
     * Retrieves a pre-signed OSS download URL for a specified AgentSpec, which is used to download the AgentSpec ZIP package.
     *
     * @remarks
     * ## Operation description
     * Retrieves a pre-signed OSS download URL for a specified AgentSpec, which is used to download the AgentSpec ZIP package.
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
     * Retrieves a pre-signed OSS download URL for a specified AgentSpec, which is used to download the AgentSpec ZIP package.
     *
     * @remarks
     * ## Operation description
     * Retrieves a pre-signed OSS download URL for a specified AgentSpec, which is used to download the AgentSpec ZIP package.
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
     * ## Operation description
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
     * ## Operation description
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
     * Retrieves the OSS pre-signed upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, call the AgentSpec OSS upload operation to complete the import.
     *
     * @remarks
     * ## Operation description
     * Retrieves the OSS pre-signed upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, call the AgentSpec OSS upload operation to complete the import.
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
     * Retrieves the OSS pre-signed upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, call the AgentSpec OSS upload operation to complete the import.
     *
     * @remarks
     * ## Operation description
     * Retrieves the OSS pre-signed upload URL and object name required to import an AgentSpec ZIP package. After the upload is complete, call the AgentSpec OSS upload operation to complete the import.
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
     * Queries the complete content of a specified AgentSpec version, including manifest content, resource files, and metadata.
     *
     * @remarks
     * ## Operation description
     * Queries the complete content of a specified AgentSpec version, including manifest content, resource files, and metadata.
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
     * Queries the complete content of a specified AgentSpec version, including manifest content, resource files, and metadata.
     *
     * @remarks
     * ## Operation description
     * Queries the complete content of a specified AgentSpec version, including manifest content, resource files, and metadata.
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
     * Queries the details of a specified credential and returns the list of agents bound to the credential. The credential content is returned in masked form.
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
     * Queries the details of a specified credential and returns the list of agents bound to the credential. The credential content is returned in masked form.
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
     * 查询自定义智能体.
     *
     * @remarks
     * 创建或更新后，可轮询本接口查询最新配置版本的执行结果。latestVersionStatus 与 latestSpecVersion 对应；latestExecutionError 表示该版本的等待或失败原因，retryable 为 true 时可稍后再次查询。
     * 返回的配置为最新提交的配置，可能尚未生效。请结合 latestVersionStatus、智能体整体状态 status 和运行实例统计 sandboxPhaseCounts 确认部署及运行情况。
     * 查询不存在、已完成删除或不属于指定工作空间的自定义智能体时，返回资源不存在错误。
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
     * 查询自定义智能体.
     *
     * @remarks
     * 创建或更新后，可轮询本接口查询最新配置版本的执行结果。latestVersionStatus 与 latestSpecVersion 对应；latestExecutionError 表示该版本的等待或失败原因，retryable 为 true 时可稍后再次查询。
     * 返回的配置为最新提交的配置，可能尚未生效。请结合 latestVersionStatus、智能体整体状态 status 和运行实例统计 sandboxPhaseCounts 确认部署及运行情况。
     * 查询不存在、已完成删除或不属于指定工作空间的自定义智能体时，返回资源不存在错误。
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
     * Queries the available network types for a specified external agent.
     *
     * @remarks
     * Queries the available network types for a specified external agent.
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
     * Queries the available network types for a specified external agent.
     *
     * @remarks
     * Queries the available network types for a specified external agent.
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
     * Queries the binding details of an external identity provider for a specified workspace, including the binding status, application configuration, and callback URLs that need to be configured on the identity provider side. Application secret configurations are not returned.
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
     * Queries the binding details of an external identity provider for a specified workspace, including the binding status, application configuration, and callback URLs that need to be configured on the identity provider side. Application secret configurations are not returned.
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
     * Queries the currently active API Key and its invocation method for a specified service endpoint within a workspace.
     *
     * @remarks
     * Queries the currently active API Key for a specified service endpoint. The call succeeds only when the service endpoint has API_KEY authentication enabled and the gateway consumer and credentials are ready. The service reads the API Key from the gateway in real time. AgentCore does not persist the plaintext. Keep the returned API Key secure and avoid logging it or exposing it in public configurations.
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
     * Queries the currently active API Key and its invocation method for a specified service endpoint within a workspace.
     *
     * @remarks
     * Queries the currently active API Key for a specified service endpoint. The call succeeds only when the service endpoint has API_KEY authentication enabled and the gateway consumer and credentials are ready. The service reads the API Key from the gateway in real time. AgentCore does not persist the plaintext. Keep the returned API Key secure and avoid logging it or exposing it in public configurations.
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
     * Retrieves the OSS pre-signed upload URL and object name required for importing a Skill ZIP package. After the upload is complete, call the Skill OSS upload operation to complete the import.
     *
     * @remarks
     * ## Request description
     * Retrieves the OSS pre-signed upload URL and object name required for importing a Skill ZIP package. After the upload is complete, call the Skill OSS upload operation to complete the import.
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
     * Retrieves the OSS pre-signed upload URL and object name required for importing a Skill ZIP package. After the upload is complete, call the Skill OSS upload operation to complete the import.
     *
     * @remarks
     * ## Request description
     * Retrieves the OSS pre-signed upload URL and object name required for importing a Skill ZIP package. After the upload is complete, call the Skill OSS upload operation to complete the import.
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
     * Queries the details of a specified user in a specified workspace. Returns an error if the user does not exist.
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
     * Queries the details of a specified user in a specified workspace. Returns an error if the user does not exist.
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
     * Queries the details of a workspace by workspace ID, including the lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policy.
     *
     * @remarks
     * ## Operation description\\nQueries the details of a workspace by workspace ID, including the lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policy.\\n.
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
     * Queries the details of a workspace by workspace ID, including the lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policy.
     *
     * @remarks
     * ## Operation description\\nQueries the details of a workspace by workspace ID, including the lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policy.\\n.
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
     * Queries the ACR RAM authorization URL for a workspace.
     *
     * @remarks
     * ACR and user OSS mounts share the same workspace role. If no existing role is found, the system uses AliyunAgentCoreWorkspace-{workspaceId}. If a valid legacy OSS mount role exists, the system reuses it and only appends permissions without overwriting existing OSS policies. Previously pinned shared roles continue to be reused and are not rebuilt or renamed because of new naming templates. The acrInstanceId, namespace, and repository parameters are required. The region and account are derived from the workspace context. The response contains the backend-resolved role and the authorization URL for the target repository. This operation does not create ACR or Agent execution versions or deliver runtime configurations. After authorization is complete, you can call Verify, and then create or update an Agent without calling a separate Ensure operation.
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
     * Queries the ACR RAM authorization URL for a workspace.
     *
     * @remarks
     * ACR and user OSS mounts share the same workspace role. If no existing role is found, the system uses AliyunAgentCoreWorkspace-{workspaceId}. If a valid legacy OSS mount role exists, the system reuses it and only appends permissions without overwriting existing OSS policies. Previously pinned shared roles continue to be reused and are not rebuilt or renamed because of new naming templates. The acrInstanceId, namespace, and repository parameters are required. The region and account are derived from the workspace context. The response contains the backend-resolved role and the authorization URL for the target repository. This operation does not create ACR or Agent execution versions or deliver runtime configurations. After authorization is complete, you can call Verify, and then create or update an Agent without calling a separate Ensure operation.
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
     * The workspace determines the account, region, and shared role. The resource ARN is constructed based on the specified fileSystemId and accessPointId. The server parameter is used to generate the policy name. This operation does not query NAS or check resource status. The response contains only the authorization URL for the target NAS policy. After completing RAM authorization, call the verification operation.
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
     * The workspace determines the account, region, and shared role. The resource ARN is constructed based on the specified fileSystemId and accessPointId. The server parameter is used to generate the policy name. This operation does not query NAS or check resource status. The response contains only the authorization URL for the target NAS policy. After completing RAM authorization, call the verification operation.
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
     * Installs a plugin for a specified AgentCore workspace. Currently supports the collaboration plugin. The installation process is executed asynchronously.
     *
     * @remarks
     * ## Operation description\\nInstalls a plugin for a specified AgentCore workspace. Currently supports the `collaboration` plugin. Plugin configuration is passed through the `Config` parameter, and different plugins can define their own configuration structures. The `collaboration` plugin uses `Config.NetworkConfiguration` to specify VPC and public network access policies. The installation process is executed asynchronously. When you repeatedly call this operation for a plugin with the same name that is being installed or already installed, the operation returns the current status with idempotent semantics if the configuration is the same. If the configuration is different, the operation returns an operation conflict error.\\n.
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
     * Installs a plugin for a specified AgentCore workspace. Currently supports the collaboration plugin. The installation process is executed asynchronously.
     *
     * @remarks
     * ## Operation description\\nInstalls a plugin for a specified AgentCore workspace. Currently supports the `collaboration` plugin. Plugin configuration is passed through the `Config` parameter, and different plugins can define their own configuration structures. The `collaboration` plugin uses `Config.NetworkConfiguration` to specify VPC and public network access policies. The installation process is executed asynchronously. When you repeatedly call this operation for a plugin with the same name that is being installed or already installed, the operation returns the current status with idempotent semantics if the configuration is the same. If the configuration is different, the operation returns an operation conflict error.\\n.
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
     * Queries the list of teams to which specified agents belong. Specify the agent IDs by using agentIds. The response includes the membership information between each agent and its teams, such as the team ID, team name, and the role that the agent assumes in the team.
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
     * Queries the list of teams to which specified agents belong. Specify the agent IDs by using agentIds. The response includes the membership information between each agent and its teams, such as the team ID, team name, and the role that the agent assumes in the team.
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
     * Queries credentials in a specified workspace with paging. Use credentialType to filter by type, nameLike to perform a fuzzy match on credential names, maxResults to specify the maximum number of records per page, and nextToken to retrieve the next page. If maxResults is not specified, the server returns 10 records by default.
     *
     * @remarks
     * Queries credentials in a workspace with paging. Supports filtering by type and name.
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
     * Queries credentials in a specified workspace with paging. Use credentialType to filter by type, nameLike to perform a fuzzy match on credential names, maxResults to specify the maximum number of records per page, and nextToken to retrieve the next page. If maxResults is not specified, the server returns 10 records by default.
     *
     * @remarks
     * Queries credentials in a workspace with paging. Supports filtering by type and name.
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
     * Performs a paged query to retrieve the summary of custom agents in a specified workspace. For paging, the complete configuration, and the execute results of the latest version, call GetCustomAgent.
     *
     * @remarks
     * The default value of maxResults is 20, and the maximum value is 100. If this parameter is omitted or set to 0, the default value is used.
     * Omit nextToken in the first request. In subsequent requests, pass the nextToken value returned in the previous response as is, and keep the same workspace. The nextToken is an opaque token. Do not parse or construct it yourself. An empty token in the response indicates that there are no more pages.
     * This operation returns the summaries of the current page and does not return the complete deployment configuration or the execution errors of the latest version. To obtain this information, call GetCustomAgent by using the agentId in items.
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
     * Performs a paged query to retrieve the summary of custom agents in a specified workspace. For paging, the complete configuration, and the execute results of the latest version, call GetCustomAgent.
     *
     * @remarks
     * The default value of maxResults is 20, and the maximum value is 100. If this parameter is omitted or set to 0, the default value is used.
     * Omit nextToken in the first request. In subsequent requests, pass the nextToken value returned in the previous response as is, and keep the same workspace. The nextToken is an opaque token. Do not parse or construct it yourself. An empty token in the response indicates that there are no more pages.
     * This operation returns the summaries of the current page and does not return the complete deployment configuration or the execution errors of the latest version. To obtain this information, call GetCustomAgent by using the agentId in items.
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
     * Queries the external identity provider bound to a specified workspace. Each workspace can be bound to at most one external identity provider, so the response returns at most one record. Application secret configurations are not returned.
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
     * Queries the external identity provider bound to a specified workspace. Each workspace can be bound to at most one external identity provider, so the response returns at most one record. Application secret configurations are not returned.
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
     * 查询预定义模型供应商目录.
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
     * 查询预定义模型供应商目录.
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
     * Queries the models and their capability information for a specified provider in the AgentCore built-in model catalog.
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
     * Queries the models and their capability information for a specified provider in the AgentCore built-in model catalog.
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
     * Queries service endpoints in a specified workspace by using paging. Supports filtering by target type, agent, collaboration component, and status.
     *
     * @remarks
     * ## Operation description\\nQueries service endpoints in a specified workspace by using paging. Filter results by targetType, agentId, agentVersion, resourceBindingId, collaborationComponent, and status. Use maxResults to specify the maximum number of records per page and nextToken to retrieve the next page. If maxResults is not specified, the server returns 20 records by default.\\n
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
     * Queries service endpoints in a specified workspace by using paging. Supports filtering by target type, agent, collaboration component, and status.
     *
     * @remarks
     * ## Operation description\\nQueries service endpoints in a specified workspace by using paging. Filter results by targetType, agentId, agentVersion, resourceBindingId, collaborationComponent, and status. Use maxResults to specify the maximum number of records per page and nextToken to retrieve the next page. If maxResults is not specified, the server returns 20 records by default.\\n
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
     * Performs a paged query of teams in a specified workspace. Use nameLike to filter by team name with fuzzy match, maxResults to specify the maximum number of records per page, and nextToken to retrieve the next page. If maxResults is not specified, the server returns 10 records by default. Member information in the list includes only the member identity, name, and team role.
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
     * Performs a paged query of teams in a specified workspace. Use nameLike to filter by team name with fuzzy match, maxResults to specify the maximum number of records per page, and nextToken to retrieve the next page. If maxResults is not specified, the server returns 10 records by default. Member information in the list includes only the member identity, name, and team role.
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
     * Queries workspaces under the current tenant by paging. The list does not return soft-deleted records with a status of Deleted by default. Results are stably sorted by creation order on the server side.
     *
     * @remarks
     * ## Operation description\\nQueries workspaces under the current tenant by paging. The list does not return soft-deleted records with a status of `Deleted` by default. Results are stably sorted by creation order on the server side. Use `nextToken` to retrieve the next page, `skip` to skip a specified number of workspaces, `maxResults` to specify the maximum number of records per paging request, and `nameLike` to filter workspaces by name using fuzzy match. If `maxResults` is not specified or is set to 0, the server returns 20 records by default.\\n
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
     * Queries workspaces under the current tenant by paging. The list does not return soft-deleted records with a status of Deleted by default. Results are stably sorted by creation order on the server side.
     *
     * @remarks
     * ## Operation description\\nQueries workspaces under the current tenant by paging. The list does not return soft-deleted records with a status of `Deleted` by default. Results are stably sorted by creation order on the server side. Use `nextToken` to retrieve the next page, `skip` to skip a specified number of workspaces, `maxResults` to specify the maximum number of records per paging request, and `nameLike` to filter workspaces by name using fuzzy match. If `maxResults` is not specified or is set to 0, the server returns 20 records by default.\\n
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
     * Resets the logon password of a specified user. Specify the user by agentCoreUserId or username. At least one of the two parameters must be specified. Only users who use workspace local password authentication can be reset. If password is not specified, the server generates a random password and returns it in the response.
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
     * Resets the logon password of a specified user. Specify the user by agentCoreUserId or username. At least one of the two parameters must be specified. Only users who use workspace local password authentication can be reset. If password is not specified, the server generates a random password and returns it in the response.
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
     * Submits a specified AgentSpec draft version for review. If no release pipeline is configured, the version is published directly to online status.
     *
     * @remarks
     * ## Operation description
     * Submits a specified AgentSpec draft version for review. If no release pipeline is configured, the version is published directly to online status.
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
     * Submits a specified AgentSpec draft version for review. If no release pipeline is configured, the version is published directly to online status.
     *
     * @remarks
     * ## Operation description
     * Submits a specified AgentSpec draft version for review. If no release pipeline is configured, the version is published directly to online status.
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
     * Updates the ServiceEndpoint binding, enabled/disabled status, or channel behavior configuration of an IM channel. At least one updatable field must be provided.
     *
     * @remarks
     * Updates the ServiceEndpoint binding, enabled/disabled status, or channel behavior configuration of an IM channel. At least one updatable field must be provided.
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
     * Updates the ServiceEndpoint binding, enabled/disabled status, or channel behavior configuration of an IM channel. At least one updatable field must be provided.
     *
     * @remarks
     * Updates the ServiceEndpoint binding, enabled/disabled status, or channel behavior configuration of an IM channel. At least one updatable field must be provided.
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
     * Performs a full update of the channel credential for a specified IM channel of an agent. Secrets are not returned in the response.
     *
     * @remarks
     * Performs a full update of the channel credential for a specified IM channel of an agent. Secrets are not returned in the response.
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
     * Performs a full update of the channel credential for a specified IM channel of an agent. Secrets are not returned in the response.
     *
     * @remarks
     * Performs a full update of the channel credential for a specified IM channel of an agent. Secrets are not returned in the response.
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
     * Updates the content or description of a specified credential. At least one of credentialMetadata and description must be specified. Unspecified properties remain unchanged. The credential name and credential type cannot be modified after creation.
     *
     * @remarks
     * Updates the metadata or resource scope of a specified credential.
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
     * Updates the content or description of a specified credential. At least one of credentialMetadata and description must be specified. Unspecified properties remain unchanged. The credential name and credential type cannot be modified after creation.
     *
     * @remarks
     * Updates the metadata or resource scope of a specified credential.
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
     * Provide at least one top-level field to update. Omitted top-level fields retain their original configurations. When providing a configuration object, specify its required subfields and include any optional configurations that you want to retain. Arrays are replaced in their entirety. Pass an empty array [] to clear a list. The agenticFsMounts field does not accept null. Pass null for the description field to clear the description, and pass null for the healthCheck field to remove the health check.
     * When updating an image, you must specify artifact.port and the type, instanceId, namespace, repo, and tag fields of artifact.container. To retain a custom startup command, also provide the entrypoint field. Currently, only Alibaba Cloud Container Registry (ACR) container image deployment is supported. Omit the artifact.code field.
     * When providing the runtime field, both compute and sessionPolicy must be present. If you omit hpa or any of its fields, unspecified elastic configurations use default values. To retain the original elastic configurations, provide them together. When providing the network field, omitted access items are treated as allowed, but actual access is still subject to workspace network restrictions. To retain the original restrictions, provide both accessInternet and accessVpc. When providing healthCheck, you must specify the port field, and other unspecified items use default values. When providing logging.sls, you must specify both project and logstore.
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
     * Provide at least one top-level field to update. Omitted top-level fields retain their original configurations. When providing a configuration object, specify its required subfields and include any optional configurations that you want to retain. Arrays are replaced in their entirety. Pass an empty array [] to clear a list. The agenticFsMounts field does not accept null. Pass null for the description field to clear the description, and pass null for the healthCheck field to remove the health check.
     * When updating an image, you must specify artifact.port and the type, instanceId, namespace, repo, and tag fields of artifact.container. To retain a custom startup command, also provide the entrypoint field. Currently, only Alibaba Cloud Container Registry (ACR) container image deployment is supported. Omit the artifact.code field.
     * When providing the runtime field, both compute and sessionPolicy must be present. If you omit hpa or any of its fields, unspecified elastic configurations use default values. To retain the original elastic configurations, provide them together. When providing the network field, omitted access items are treated as allowed, but actual access is still subject to workspace network restrictions. To retain the original restrictions, provide both accessInternet and accessVpc. When providing healthCheck, you must specify the port field, and other unspecified items use default values. When providing logging.sls, you must specify both project and logstore.
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
     * Updates the login toggle, member synchronization toggle, or application configuration of a specified external identity provider in a workspace. Unspecified properties remain unchanged. The update is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track progress.
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
     * Updates the login toggle, member synchronization toggle, or application configuration of a specified external identity provider in a workspace. Unspecified properties remain unchanged. The update is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track progress.
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
     * Updates the description, context token limit, maximum output token count, or capability configuration of a specified model.
     *
     * @remarks
     * This operation supports updating description, contextSize, maxTokens, and capabilities. At least one non-null parameter must be provided. Parameters that are not provided or set to null retain their original values. The capabilities object is replaced as a whole. Capability fields not included in the object are treated as false.
     * Modifying only description does not refresh the model configuration of associated Agents. When contextSize, maxTokens, or capabilities actually change, the system asynchronously refreshes managed Agents that reference the model within the same workspace, as well as external Agents whose model source is PLATFORM. External Agents whose model source is RUNTIME are not affected. Submitting the same configuration repeatedly does not trigger a new model configuration refresh.
     * A successful response indicates that the model configuration has been saved. It does not indicate that associated Agents have completed the configuration refresh or that the runtime has loaded the new configuration. Call GetModel to query the saved model configuration.
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
     * This operation supports updating description, contextSize, maxTokens, and capabilities. At least one non-null parameter must be provided. Parameters that are not provided or set to null retain their original values. The capabilities object is replaced as a whole. Capability fields not included in the object are treated as false.
     * Modifying only description does not refresh the model configuration of associated Agents. When contextSize, maxTokens, or capabilities actually change, the system asynchronously refreshes managed Agents that reference the model within the same workspace, as well as external Agents whose model source is PLATFORM. External Agents whose model source is RUNTIME are not affected. Submitting the same configuration repeatedly does not trigger a new model configuration refresh.
     * A successful response indicates that the model configuration has been saved. It does not indicate that associated Agents have completed the configuration refresh or that the runtime has loaded the new configuration. Call GetModel to query the saved model configuration.
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
     * Updates the mutable configuration of a specified model connection and resubmits the publish task. The protocol cannot be modified after the model connection is created.
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
     * Updates the mutable configuration of a specified model connection and resubmits the publish task. The protocol cannot be modified after the model connection is created.
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
     * Updates the business tags of a specified Skill. Other attributes that are not included in the request remain unchanged.
     *
     * @remarks
     * ## Operation description
     * Updates the business tags of a specified Skill. Other attributes that are not included in the request remain unchanged.
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
     * Updates the business tags of a specified Skill. Other attributes that are not included in the request remain unchanged.
     *
     * @remarks
     * ## Operation description
     * Updates the business tags of a specified Skill. Other attributes that are not included in the request remain unchanged.
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
     * Updates the description and members of a specified team. When users or agents are passed in, the corresponding member list is replaced using full overwrite semantics. Member lists that are not passed in remain unchanged. The team name cannot be modified after creation.
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
     * Updates the description and members of a specified team. When users or agents are passed in, the corresponding member list is replaced using full overwrite semantics. Member lists that are not passed in remain unchanged. The team name cannot be modified after creation.
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
     * Updates the name or network configuration of a workspace. Only workspaces in the Initialized status can be updated. The Status, TenantId, and RegionId fields are maintained by the server and cannot be modified through this operation.
     *
     * @remarks
     * ## Operation description\\nUpdates the name or network configuration of a workspace. Only workspaces in the `Initialized` status can be updated. The `Status`, `TenantId`, and `RegionId` fields are maintained by the server and cannot be modified through this operation. The network configuration uses `Enabled` to specify whether to enable VPC networking. When enabled, you must also provide a `VpcId` and at least one entry in `VSwitchIds`.\\n.
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
     * Updates the name or network configuration of a workspace. Only workspaces in the Initialized status can be updated. The Status, TenantId, and RegionId fields are maintained by the server and cannot be modified through this operation.
     *
     * @remarks
     * ## Operation description\\nUpdates the name or network configuration of a workspace. Only workspaces in the `Initialized` status can be updated. The `Status`, `TenantId`, and `RegionId` fields are maintained by the server and cannot be modified through this operation. The network configuration uses `Enabled` to specify whether to enable VPC networking. When enabled, you must also provide a `VpcId` and at least one entry in `VSwitchIds`.\\n.
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
     * Retrieves an uploaded AgentSpec ZIP package from OSS, parses it, and imports the AgentSpec into the current workspace.
     *
     * @remarks
     * ## Operation description
     * Retrieves an uploaded AgentSpec ZIP package from OSS, parses it, and imports the AgentSpec into the current workspace.
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
     * Retrieves an uploaded AgentSpec ZIP package from OSS, parses it, and imports the AgentSpec into the current workspace.
     *
     * @remarks
     * ## Operation description
     * Retrieves an uploaded AgentSpec ZIP package from OSS, parses it, and imports the AgentSpec into the current workspace.
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
     * Verifies the ACR RAM authorization of a workspace.
     *
     * @remarks
     * ACR and user OSS mounts share the same workspace role. When no existing role is found, the system uses AliyunAgentCoreWorkspace-{workspaceId}. When a valid legacy OSS mount role exists, the system reuses it and only appends permissions without overwriting existing OSS policies. Previously pinned shared roles continue to be reused and are not rebuilt or renamed because of new naming templates. This operation performs a read-only check to verify whether the custom policies corresponding to the target instance, namespace, and repository are attached to the shared role, and checks the workspace prerequisite status. It does not create execution versions or trigger configuration delivery. AUTHORIZED only indicates that the custom policy for the target name is attached. It does not parse policy content or simulate final permissions. ELIGIBLE does not indicate that RuntimeManager capacity or template admission is complete, nor does it require that ACR configurations have been delivered. Creating or updating an Agent re-verifies permissions and processes ACR dependencies on the backend. Configuration waiting, failures, and retries are reported through Agent details.
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
     * Verifies the ACR RAM authorization of a workspace.
     *
     * @remarks
     * ACR and user OSS mounts share the same workspace role. When no existing role is found, the system uses AliyunAgentCoreWorkspace-{workspaceId}. When a valid legacy OSS mount role exists, the system reuses it and only appends permissions without overwriting existing OSS policies. Previously pinned shared roles continue to be reused and are not rebuilt or renamed because of new naming templates. This operation performs a read-only check to verify whether the custom policies corresponding to the target instance, namespace, and repository are attached to the shared role, and checks the workspace prerequisite status. It does not create execution versions or trigger configuration delivery. AUTHORIZED only indicates that the custom policy for the target name is attached. It does not parse policy content or simulate final permissions. ELIGIBLE does not indicate that RuntimeManager capacity or template admission is complete, nor does it require that ACR configurations have been delivered. Creating or updating an Agent re-verifies permissions and processes ACR dependencies on the backend. Configuration waiting, failures, and retries are reported through Agent details.
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
