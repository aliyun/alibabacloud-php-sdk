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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DownloadAgentSpecViaOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DownloadAgentSpecViaOssResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DownloadSkillVersionViaOssRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DownloadSkillVersionViaOssResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspacePluginRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspacePluginResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCredentialsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCredentialsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListExternalAgentsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListExternalAgentsResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProvidersRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProvidersResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponse;
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
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialRequest;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialResponse;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialShrinkRequest;
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
     * 批量删除模型.
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
     * 批量删除模型.
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
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist, and there must not be a draft currently being edited.
     *
     * @remarks
     * ## Request description
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist, and there must not be a draft currently being edited.
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
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist, and there must not be a draft currently being edited.
     *
     * @remarks
     * ## Request description
     * Creates a new draft version for an existing AgentSpec. The AgentSpec must exist, and there must not be a draft currently being edited.
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
     * 创建凭证
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
     * 创建凭证
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
     * Creates a Bootstrap Token and CMS configuration required for connecting a specified external agent.
     *
     * @remarks
     * Creates a Bootstrap Token and CMS configuration required for connecting a specified external agent.
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
     * Creates a Bootstrap Token and CMS configuration required for connecting a specified external agent.
     *
     * @remarks
     * Creates a Bootstrap Token and CMS configuration required for connecting a specified external agent.
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
     * Binds an external identity provider to a specified workspace for single sign-on and organization member synchronization. Each workspace can be bound to at most one external identity provider. The binding is an asynchronous operation. After the API returns, you can track the progress by querying the status through GetIdentityProvider.
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
     * Binds an external identity provider to a specified workspace for single sign-on and organization member synchronization. Each workspace can be bound to at most one external identity provider. The binding is an asynchronous operation. After the API returns, you can track the progress by querying the status through GetIdentityProvider.
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
     * 创建模型连接.
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
     * 创建模型连接.
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
     * 创建团队
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
     * 创建团队
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
     * 创建用户.
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
     * 创建用户.
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
     * ## Operation description\\nCreates an AgentCore workspace control plane record. The server completes the state transition from `Initializing` to `Initialized` within the same transaction. The network configuration uses `Enabled` to specify whether to enable VPC networking. When enabled, you must provide `VpcId` and at least one `VSwitchIds`.\\n.
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
     * ## Operation description\\nCreates an AgentCore workspace control plane record. The server completes the state transition from `Initializing` to `Initialized` within the same transaction. The network configuration uses `Enabled` to specify whether to enable VPC networking. When enabled, you must provide `VpcId` and at least one `VSwitchIds`.\\n.
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
     * 调试模型.
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
     * 调试模型.
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
     * 删除凭证
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
     * 删除凭证
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
     * Unbinds the external identity provider from a specified workspace and cleans up users synchronized by that identity provider. The unbinding is an asynchronous operation. After the API returns, you can track the progress by querying the status through GetIdentityProvider.
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
     * Unbinds the external identity provider from a specified workspace and cleans up users synchronized by that identity provider. The unbinding is an asynchronous operation. After the API returns, you can track the progress by querying the status through GetIdentityProvider.
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
     * ## Request description
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
     * ## Request description
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
     * 删除模型.
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
     * 删除模型.
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
     * 删除模型连接.
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
     * 删除模型连接.
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
     * ## Request description
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
     * ## Request description
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
     * ## Request description
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
     * ## Request description
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
     * 删除团队
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
     * 删除团队
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
     * 删除用户.
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
     * 删除用户.
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
     * Retrieves a pre-signed OSS download URL for a specified AgentSpec ZIP package.
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
     * Retrieves a pre-signed OSS download URL for a specified AgentSpec ZIP package.
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
     * ## Request description
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
     * ## Request description
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
     * Skips the regular review process and forcibly publishes the specified Skill version.
     *
     * @remarks
     * ## Request description
     * Skips the regular review process and forcibly publishes the specified Skill version.
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
     * Skips the regular review process and forcibly publishes the specified Skill version.
     *
     * @remarks
     * ## Request description
     * Skips the regular review process and forcibly publishes the specified Skill version.
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
     * Retrieves the OSS pre-signed upload URL and object name required for importing an AgentSpec ZIP package. After the upload is complete, call the AgentSpec OSS upload operation to complete the import.
     *
     * @remarks
     * ## Operation description
     * Retrieves the OSS pre-signed upload URL and object name required for importing an AgentSpec ZIP package. After the upload is complete, call the AgentSpec OSS upload operation to complete the import.
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
     * Retrieves the OSS pre-signed upload URL and object name required for importing an AgentSpec ZIP package. After the upload is complete, call the AgentSpec OSS upload operation to complete the import.
     *
     * @remarks
     * ## Operation description
     * Retrieves the OSS pre-signed upload URL and object name required for importing an AgentSpec ZIP package. After the upload is complete, call the AgentSpec OSS upload operation to complete the import.
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
     * 查询凭证
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
     * 查询凭证
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
     * Queries the details of a specified MCP service, including its address, type, status, authentication configuration, and protocol.
     *
     * @remarks
     * ## Operation description
     * Queries the details of a specified MCP service, including its address, type, status, authentication configuration, and protocol.
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
     * Queries the details of a specified MCP service, including its address, type, status, authentication configuration, and protocol.
     *
     * @remarks
     * ## Operation description
     * Queries the details of a specified MCP service, including its address, type, status, authentication configuration, and protocol.
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
     * 查询模型连接.
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
     * 查询模型连接.
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
     * 查询团队
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
     * 查询团队
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
     * 查询用户.
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
     * 查询用户.
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
     * Queries workspace details by workspace ID, including lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policy.
     *
     * @remarks
     * ## Operation description\\nQueries workspace details by workspace ID, including lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policy.\\n.
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
     * Queries workspace details by workspace ID, including lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policy.
     *
     * @remarks
     * ## Operation description\\nQueries workspace details by workspace ID, including lifecycle status, CMS Workspace, AIRegistry Namespace, and current network policy.\\n.
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
     * Queries the IM channel list of a specified agent.
     *
     * @remarks
     * Queries the IM channel list of a specified agent.
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
     * Queries the IM channel list of a specified agent.
     *
     * @remarks
     * Queries the IM channel list of a specified agent.
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
     * Queries AgentSpec resources in a specified workspace by using paging, supporting name search, sorting, and filtering by owner, visibility scope, and business labels.
     *
     * @remarks
     * ## Operation description
     * Queries AgentSpec resources in a specified workspace by using paging, supporting name search, sorting, and filtering by owner, visibility scope, and business labels.
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
     * Queries AgentSpec resources in a specified workspace by using paging, supporting name search, sorting, and filtering by owner, visibility scope, and business labels.
     *
     * @remarks
     * ## Operation description
     * Queries AgentSpec resources in a specified workspace by using paging, supporting name search, sorting, and filtering by owner, visibility scope, and business labels.
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
     * Queries the list of teams to which specified agents belong. Specify the agent IDs through agentIds to retrieve the membership information between each agent and its teams, including the team ID, team name, and the role that the agent assumes in the team.
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
     * Queries the list of teams to which specified agents belong. Specify the agent IDs through agentIds to retrieve the membership information between each agent and its teams, including the team ID, team name, and the role that the agent assumes in the team.
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
     * 查询凭证列表.
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
     * 查询凭证列表.
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
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchType) {
            @$query['searchType'] = $request->searchType;
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
     * 查询模型连接列表.
     *
     * @remarks
     * 查询指定 AgentCore 工作空间中的模型连接。支持通过 `Name` 按名称筛选，并通过 `SearchType` 选择精确匹配或模糊匹配；支持按模型提供商类型和调用协议筛选，并支持分页查询。
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
     * 查询模型连接列表.
     *
     * @remarks
     * 查询指定 AgentCore 工作空间中的模型连接。支持通过 `Name` 按名称筛选，并通过 `SearchType` 选择精确匹配或模糊匹配；支持按模型提供商类型和调用协议筛选，并支持分页查询。
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
     * Queries service endpoints in a specified workspace by using paging. Supports filtering by target type, agent, collaboration component, and status.
     *
     * @remarks
     * ## Request description\\nQueries service endpoints in a specified workspace by using paging. Filter results by targetType, agentId, agentVersion, resourceBindingId, collaborationComponent, and status. Use maxResults to specify the maximum number of records per page, and use nextToken to retrieve the next page. If maxResults is not specified, the server returns 20 records by default.\\n
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
     * ## Request description\\nQueries service endpoints in a specified workspace by using paging. Filter results by targetType, agentId, agentVersion, resourceBindingId, collaborationComponent, and status. Use maxResults to specify the maximum number of records per page, and use nextToken to retrieve the next page. If maxResults is not specified, the server returns 20 records by default.\\n
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
     * Performs a paged query of Skills in a specified workspace, and returns basic Skill information, version status, and paging details.
     *
     * @remarks
     * ## Operation description
     * Performs a paged query of Skills in a specified workspace, and returns basic Skill information, version status, and paging details.
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
     * Performs a paged query of Skills in a specified workspace, and returns basic Skill information, version status, and paging details.
     *
     * @remarks
     * ## Operation description
     * Performs a paged query of Skills in a specified workspace, and returns basic Skill information, version status, and paging details.
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
     * 查询团队列表.
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
     * 查询团队列表.
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
     * 查询用户列表.
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
     * 查询用户列表.
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
     * Queries workspaces under the current tenant with paging. The list does not return soft-deleted records with a status of Deleted by default. Results are stably sorted by creation order on the server side.
     *
     * @remarks
     * ## Request description\\nQueries workspaces under the current tenant with paging. The list does not return soft-deleted records with a status of `Deleted` by default. Results are stably sorted by creation order on the server side. Use `nextToken` to retrieve the next page, `skip` to skip a specified number of workspaces, `maxResults` to specify the maximum number of records per page, and `nameLike` to filter workspaces by name using fuzzy match. If `maxResults` is not specified or is set to 0, the server returns 20 records by default.\\n
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
     * Queries workspaces under the current tenant with paging. The list does not return soft-deleted records with a status of Deleted by default. Results are stably sorted by creation order on the server side.
     *
     * @remarks
     * ## Request description\\nQueries workspaces under the current tenant with paging. The list does not return soft-deleted records with a status of `Deleted` by default. Results are stably sorted by creation order on the server side. Use `nextToken` to retrieve the next page, `skip` to skip a specified number of workspaces, `maxResults` to specify the maximum number of records per page, and `nameLike` to filter workspaces by name using fuzzy match. If `maxResults` is not specified or is set to 0, the server returns 20 records by default.\\n
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
     * ## Request description
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
     * ## Request description
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
     * ## Request description
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
     * ## Request description
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
     * Publishes a specified Skill version to change its state to published.
     *
     * @remarks
     * ## Operation description
     * Publishes a specified Skill version to change its state to published.
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
     * Publishes a specified Skill version to change its state to published.
     *
     * @remarks
     * ## Operation description
     * Publishes a specified Skill version to change its state to published.
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
     * Converts a specified Skill version back into an editable draft for further modifications.
     *
     * @remarks
     * ## Operation description
     * Converts a specified Skill version back into an editable draft for further modifications.
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
     * Converts a specified Skill version back into an editable draft for further modifications.
     *
     * @remarks
     * ## Operation description
     * Converts a specified Skill version back into an editable draft for further modifications.
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
     * 重置用户密码
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
     * 重置用户密码
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
     * 更新凭证
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
     * 更新凭证
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
     * Updates the login switch, member synchronization switch, or application configuration of a specified external identity provider in a workspace. Unspecified properties remain unchanged. The update is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track progress.
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
     * Updates the login switch, member synchronization switch, or application configuration of a specified external identity provider in a workspace. Unspecified properties remain unchanged. The update is an asynchronous operation. After the API returns, you can call GetIdentityProvider to query the status and track progress.
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
     * Updates the description of a specified model. Other model configurations cannot be modified through this operation.
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
     * Updates the description of a specified model. Other model configurations cannot be modified through this operation.
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
     * ## Request description
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
     * ## Request description
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
     * 更新团队
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
     * 更新团队
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
     * 更新用户.
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
     * 更新用户.
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
     * Updates the name or network configuration of a workspace. Only workspaces in the Initialized status can be updated. Status, TenantId, and RegionId are maintained by the server and cannot be modified through this operation.
     *
     * @remarks
     * ## Operation description\\nUpdates the name or network configuration of a workspace. Only workspaces in the `Initialized` status can be updated. `Status`, `TenantId`, and `RegionId` are maintained by the server and cannot be modified through this operation. The network configuration uses `Enabled` to specify whether to enable VPC networking. When enabled, you must also provide `VpcId` and at least one `VSwitchIds`.\\n.
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
     * Updates the name or network configuration of a workspace. Only workspaces in the Initialized status can be updated. Status, TenantId, and RegionId are maintained by the server and cannot be modified through this operation.
     *
     * @remarks
     * ## Operation description\\nUpdates the name or network configuration of a workspace. Only workspaces in the `Initialized` status can be updated. `Status`, `TenantId`, and `RegionId` are maintained by the server and cannot be modified through this operation. The network configuration uses `Enabled` to specify whether to enable VPC networking. When enabled, you must also provide `VpcId` and at least one `VSwitchIds`.\\n.
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
}
