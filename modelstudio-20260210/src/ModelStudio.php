<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\AddOrganizationMemberRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\AddOrganizationMemberResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\BatchAssignSeatsRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\BatchAssignSeatsResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\BatchRevokeSeatsRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\BatchRevokeSeatsResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\BatchRevokeSeatsShrinkRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateTokenPlanInviteLinkRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateTokenPlanInviteLinkResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateTokenPlanKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateTokenPlanKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DeleteApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DisableApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DisableApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\EnableApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\EnableApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetOrganizationMemberSeatStatsRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetOrganizationMemberSeatStatsResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetOrganizationRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetOrganizationResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionSeatDetailsRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionSeatDetailsResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionStatsRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionStatsResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanAccountDetailRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanAccountDetailResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanInviteLinkRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanInviteLinkResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanOrgInviteConfigRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanOrgInviteConfigResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListApiKeysRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListApiKeysResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListSubscriptionSharedPackagesRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListSubscriptionSharedPackagesResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\RemoveOrganizationMemberRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\RemoveOrganizationMemberResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ResetApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ResetApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\RevokeTokenPlanInviteLinkRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\RevokeTokenPlanInviteLinkResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\RotateTokenPlanKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\RotateTokenPlanKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\SetTokenPlanOrgInviteConfigRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\SetTokenPlanOrgInviteConfigResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateOrganizationMemberRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateOrganizationMemberResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateOrganizationRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateOrganizationResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ModelStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'eu-central-1' => 'modelstudio.eu-central-1.aliyuncs.com',
            'cn-hongkong' => 'modelstudio.cn-hongkong.aliyuncs.com',
            'cn-beijing' => 'modelstudio.cn-beijing.aliyuncs.com',
            'ap-southeast-1' => 'modelstudio.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('modelstudio', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates an account and directly adds it as a member.
     *
     * @param request - AddOrganizationMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddOrganizationMemberResponse
     *
     * @param AddOrganizationMemberRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AddOrganizationMemberResponse
     */
    public function addOrganizationMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->orgRoleCode) {
            @$query['OrgRoleCode'] = $request->orgRoleCode;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddOrganizationMember',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/organization/member-additions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an account and directly adds it as a member.
     *
     * @param request - AddOrganizationMemberRequest
     *
     * @returns AddOrganizationMemberResponse
     *
     * @param AddOrganizationMemberRequest $request
     *
     * @return AddOrganizationMemberResponse
     */
    public function addOrganizationMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addOrganizationMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * Assigns seats in batches to the member level.
     *
     * @param request - BatchAssignSeatsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAssignSeatsResponse
     *
     * @param BatchAssignSeatsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return BatchAssignSeatsResponse
     */
    public function batchAssignSeatsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountIds) {
            @$query['AccountIds'] = $request->accountIds;
        }

        if (null !== $request->locale) {
            @$query['Locale'] = $request->locale;
        }

        if (null !== $request->seatType) {
            @$query['SeatType'] = $request->seatType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchAssignSeats',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/subscription/seat-assignments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchAssignSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns seats in batches to the member level.
     *
     * @param request - BatchAssignSeatsRequest
     *
     * @returns BatchAssignSeatsResponse
     *
     * @param BatchAssignSeatsRequest $request
     *
     * @return BatchAssignSeatsResponse
     */
    public function batchAssignSeats($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchAssignSeatsWithOptions($request, $headers, $runtime);
    }

    /**
     * Revokes member-level seats in batches.
     *
     * @param tmpReq - BatchRevokeSeatsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchRevokeSeatsResponse
     *
     * @param BatchRevokeSeatsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return BatchRevokeSeatsResponse
     */
    public function batchRevokeSeatsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchRevokeSeatsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->items) {
            $request->itemsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->items, 'Items', 'json');
        }

        $query = [];
        if (null !== $request->itemsShrink) {
            @$query['Items'] = $request->itemsShrink;
        }

        if (null !== $request->locale) {
            @$query['Locale'] = $request->locale;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchRevokeSeats',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/subscription/seat-revocations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchRevokeSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes member-level seats in batches.
     *
     * @param request - BatchRevokeSeatsRequest
     *
     * @returns BatchRevokeSeatsResponse
     *
     * @param BatchRevokeSeatsRequest $request
     *
     * @return BatchRevokeSeatsResponse
     */
    public function batchRevokeSeats($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchRevokeSeatsWithOptions($request, $headers, $runtime);
    }

    /**
     * Before using large models or applications in Alibaba Cloud Model Studio, create an API key as an authentication credential.
     *
     * @param request - CreateApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiKeyResponse
     *
     * @param CreateApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateApiKeyResponse
     */
    public function createApiKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->auth) {
            @$body['auth'] = $request->auth;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before using large models or applications in Alibaba Cloud Model Studio, create an API key as an authentication credential.
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
        $headers = [];

        return $this->createApiKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a TokenPlan member invitation link.
     *
     * @remarks
     * A user can have only one valid invitation link at a time.
     * If the user already has a valid invitation link, this operation returns the existing link.
     * To create a new link, call the RevokeTokenPlanInviteLink operation to invalidate the current link first.
     * This operation returns only the generated token. The invitation link is assembled in the following format: `https://{host}/accept-invite?token=[token]&orgId=[orgId]`
     * * For the China site, the host is tokenplan-enterprise.bailian.aliyunportal.com.
     * * For the China site, the host is tokenplan-enterprise.modelstudio.aliyunportal.com.
     *
     * @param request - CreateTokenPlanInviteLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTokenPlanInviteLinkResponse
     *
     * @param CreateTokenPlanInviteLinkRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateTokenPlanInviteLinkResponse
     */
    public function createTokenPlanInviteLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expireType) {
            @$query['ExpireType'] = $request->expireType;
        }

        if (null !== $request->ssoSource) {
            @$query['SsoSource'] = $request->ssoSource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTokenPlanInviteLink',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/invite/link/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTokenPlanInviteLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a TokenPlan member invitation link.
     *
     * @remarks
     * A user can have only one valid invitation link at a time.
     * If the user already has a valid invitation link, this operation returns the existing link.
     * To create a new link, call the RevokeTokenPlanInviteLink operation to invalidate the current link first.
     * This operation returns only the generated token. The invitation link is assembled in the following format: `https://{host}/accept-invite?token=[token]&orgId=[orgId]`
     * * For the China site, the host is tokenplan-enterprise.bailian.aliyunportal.com.
     * * For the China site, the host is tokenplan-enterprise.modelstudio.aliyunportal.com.
     *
     * @param request - CreateTokenPlanInviteLinkRequest
     *
     * @returns CreateTokenPlanInviteLinkResponse
     *
     * @param CreateTokenPlanInviteLinkRequest $request
     *
     * @return CreateTokenPlanInviteLinkResponse
     */
    public function createTokenPlanInviteLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTokenPlanInviteLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a UAC API key.
     *
     * @param request - CreateTokenPlanKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTokenPlanKeyResponse
     *
     * @param CreateTokenPlanKeyRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTokenPlanKeyResponse
     */
    public function createTokenPlanKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTokenPlanKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/api-keys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTokenPlanKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a UAC API key.
     *
     * @param request - CreateTokenPlanKeyRequest
     *
     * @returns CreateTokenPlanKeyResponse
     *
     * @param CreateTokenPlanKeyRequest $request
     *
     * @return CreateTokenPlanKeyResponse
     */
    public function createTokenPlanKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTokenPlanKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a business workspace.
     *
     * @param request - CreateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceSite) {
            @$query['serviceSite'] = $request->serviceSite;
        }

        if (null !== $request->workspaceName) {
            @$query['workspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/workspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a business workspace.
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
     * Deletes an authentication credential API key.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiKeyResponse
     *
     * @param string         $apiKeyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKeyWithOptions($apiKeyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an authentication credential API key.
     *
     * @returns DeleteApiKeyResponse
     *
     * @param string $apiKeyId
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKey($apiKeyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApiKeyWithOptions($apiKeyId, $headers, $runtime);
    }

    /**
     * Deletes a workspace.
     *
     * @remarks
     * A workspace can be deleted only if the following conditional requirements are met:
     * 1. The workspace is not the default workspace.
     * 2. The workspace is not used to purchase other products, such as AMB.
     * 3. In permission management, the workspace is not granted to Resource Access Management (RAM) users or RAM roles.
     * 4. The workspace does not contain any resources, such as API keys, model deployments, or knowledge bases.
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
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workspace.
     *
     * @remarks
     * A workspace can be deleted only if the following conditional requirements are met:
     * 1. The workspace is not the default workspace.
     * 2. The workspace is not used to purchase other products, such as AMB.
     * 3. In permission management, the workspace is not granted to Resource Access Management (RAM) users or RAM roles.
     * 4. The workspace does not contain any resources, such as API keys, model deployments, or knowledge bases.
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
     * Disables an API key.
     *
     * @remarks
     * An API key that is already disabled cannot be disabled again.
     *
     * @param request - DisableApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableApiKeyResponse
     *
     * @param string               $apiKeyId
     * @param DisableApiKeyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DisableApiKeyResponse
     */
    public function disableApiKeyWithOptions($apiKeyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DisableApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '/disable',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an API key.
     *
     * @remarks
     * An API key that is already disabled cannot be disabled again.
     *
     * @param request - DisableApiKeyRequest
     *
     * @returns DisableApiKeyResponse
     *
     * @param string               $apiKeyId
     * @param DisableApiKeyRequest $request
     *
     * @return DisableApiKeyResponse
     */
    public function disableApiKey($apiKeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableApiKeyWithOptions($apiKeyId, $request, $headers, $runtime);
    }

    /**
     * Enables an API key.
     *
     * @remarks
     * An API key that is already enabled cannot be enabled again.
     *
     * @param request - EnableApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableApiKeyResponse
     *
     * @param string              $apiKeyId
     * @param EnableApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return EnableApiKeyResponse
     */
    public function enableApiKeyWithOptions($apiKeyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'EnableApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '/enable',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an API key.
     *
     * @remarks
     * An API key that is already enabled cannot be enabled again.
     *
     * @param request - EnableApiKeyRequest
     *
     * @returns EnableApiKeyResponse
     *
     * @param string              $apiKeyId
     * @param EnableApiKeyRequest $request
     *
     * @return EnableApiKeyResponse
     */
    public function enableApiKey($apiKeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableApiKeyWithOptions($apiKeyId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the information about a specified API key.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiKeyResponse
     *
     * @param string         $apiKeyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetApiKeyResponse
     */
    public function getApiKeyWithOptions($apiKeyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the information about a specified API key.
     *
     * @returns GetApiKeyResponse
     *
     * @param string $apiKeyId
     *
     * @return GetApiKeyResponse
     */
    public function getApiKey($apiKeyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApiKeyWithOptions($apiKeyId, $headers, $runtime);
    }

    /**
     * Retrieves information about a specified organization.
     *
     * @remarks
     * Retrieves information about a specified organization by OrgId.
     *
     * @param request - GetOrganizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrganizationResponse
     *
     * @param GetOrganizationRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetOrganizationResponse
     */
    public function getOrganizationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOrganization',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/organization',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information about a specified organization.
     *
     * @remarks
     * Retrieves information about a specified organization by OrgId.
     *
     * @param request - GetOrganizationRequest
     *
     * @returns GetOrganizationResponse
     *
     * @param GetOrganizationRequest $request
     *
     * @return GetOrganizationResponse
     */
    public function getOrganization($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrganizationWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries organization member statistics information, including the total number of members, the number of administrators, the number of regular members, the number of members with allocated seats, and the number of members without allocated seats.
     *
     * @param request - GetOrganizationMemberSeatStatsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrganizationMemberSeatStatsResponse
     *
     * @param GetOrganizationMemberSeatStatsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetOrganizationMemberSeatStatsResponse
     */
    public function getOrganizationMemberSeatStatsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOrganizationMemberSeatStats',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/organization/member-seat-stats',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOrganizationMemberSeatStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries organization member statistics information, including the total number of members, the number of administrators, the number of regular members, the number of members with allocated seats, and the number of members without allocated seats.
     *
     * @param request - GetOrganizationMemberSeatStatsRequest
     *
     * @returns GetOrganizationMemberSeatStatsResponse
     *
     * @param GetOrganizationMemberSeatStatsRequest $request
     *
     * @return GetOrganizationMemberSeatStatsResponse
     */
    public function getOrganizationMemberSeatStats($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrganizationMemberSeatStatsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries seat details by paging.
     *
     * @param request - GetSubscriptionSeatDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubscriptionSeatDetailsResponse
     *
     * @param GetSubscriptionSeatDetailsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSubscriptionSeatDetailsResponse
     */
    public function getSubscriptionSeatDetailsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryAssigned) {
            @$query['QueryAssigned'] = $request->queryAssigned;
        }

        if (null !== $request->seatId) {
            @$query['SeatId'] = $request->seatId;
        }

        if (null !== $request->seatType) {
            @$query['SeatType'] = $request->seatType;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSubscriptionSeatDetails',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/subscription/seat-detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSubscriptionSeatDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries seat details by paging.
     *
     * @param request - GetSubscriptionSeatDetailsRequest
     *
     * @returns GetSubscriptionSeatDetailsResponse
     *
     * @param GetSubscriptionSeatDetailsRequest $request
     *
     * @return GetSubscriptionSeatDetailsResponse
     */
    public function getSubscriptionSeatDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubscriptionSeatDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the number of members and seats for member management.
     *
     * @param request - GetSubscriptionStatsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubscriptionStatsResponse
     *
     * @param GetSubscriptionStatsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetSubscriptionStatsResponse
     */
    public function getSubscriptionStatsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSubscriptionStats',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/subscription/stats',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSubscriptionStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of members and seats for member management.
     *
     * @param request - GetSubscriptionStatsRequest
     *
     * @returns GetSubscriptionStatsResponse
     *
     * @param GetSubscriptionStatsRequest $request
     *
     * @return GetSubscriptionStatsResponse
     */
    public function getSubscriptionStats($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubscriptionStatsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the TokenPlan account details and organization information.
     *
     * @remarks
     * Retrieves the TokenPlan management platform account information when the user is logged in.
     *
     * @param request - GetTokenPlanAccountDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenPlanAccountDetailResponse
     *
     * @param GetTokenPlanAccountDetailRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTokenPlanAccountDetailResponse
     */
    public function getTokenPlanAccountDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTokenPlanAccountDetail',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/account',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTokenPlanAccountDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the TokenPlan account details and organization information.
     *
     * @remarks
     * Retrieves the TokenPlan management platform account information when the user is logged in.
     *
     * @param request - GetTokenPlanAccountDetailRequest
     *
     * @returns GetTokenPlanAccountDetailResponse
     *
     * @param GetTokenPlanAccountDetailRequest $request
     *
     * @return GetTokenPlanAccountDetailResponse
     */
    public function getTokenPlanAccountDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenPlanAccountDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the TokenPlan member invitation link.
     *
     * @remarks
     * This operation returns only the generated token and expiration time. The invitation link is assembled in the following format: `https://{host}/accept-invite?token=[token]&orgId=[orgId]`
     * * For the China site, the host is tokenplan-enterprise.bailian.aliyunportal.com.
     * * For the international site, the host is tokenplan-enterprise.modelstudio.aliyunportal.com.
     *
     * @param request - GetTokenPlanInviteLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenPlanInviteLinkResponse
     *
     * @param GetTokenPlanInviteLinkRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetTokenPlanInviteLinkResponse
     */
    public function getTokenPlanInviteLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTokenPlanInviteLink',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/invite/link/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTokenPlanInviteLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the TokenPlan member invitation link.
     *
     * @remarks
     * This operation returns only the generated token and expiration time. The invitation link is assembled in the following format: `https://{host}/accept-invite?token=[token]&orgId=[orgId]`
     * * For the China site, the host is tokenplan-enterprise.bailian.aliyunportal.com.
     * * For the international site, the host is tokenplan-enterprise.modelstudio.aliyunportal.com.
     *
     * @param request - GetTokenPlanInviteLinkRequest
     *
     * @returns GetTokenPlanInviteLinkResponse
     *
     * @param GetTokenPlanInviteLinkRequest $request
     *
     * @return GetTokenPlanInviteLinkResponse
     */
    public function getTokenPlanInviteLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenPlanInviteLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the TokenPlan member invitation configuration.
     *
     * @param request - GetTokenPlanOrgInviteConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenPlanOrgInviteConfigResponse
     *
     * @param GetTokenPlanOrgInviteConfigRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetTokenPlanOrgInviteConfigResponse
     */
    public function getTokenPlanOrgInviteConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTokenPlanOrgInviteConfig',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/invite/config/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTokenPlanOrgInviteConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the TokenPlan member invitation configuration.
     *
     * @param request - GetTokenPlanOrgInviteConfigRequest
     *
     * @returns GetTokenPlanOrgInviteConfigResponse
     *
     * @param GetTokenPlanOrgInviteConfigRequest $request
     *
     * @return GetTokenPlanOrgInviteConfigResponse
     */
    public function getTokenPlanOrgInviteConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenPlanOrgInviteConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of API key information for authentication credentials.
     *
     * @param request - ListApiKeysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiKeysResponse
     *
     * @param ListApiKeysRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListApiKeysResponse
     */
    public function listApiKeysWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiKeys',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of API key information for authentication credentials.
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
        $headers = [];

        return $this->listApiKeysWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of organization members including seat information. Supports filtering by name, status, and seat assignment, and supports pagination.
     *
     * @param request - ListOrganizationMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOrganizationMembersResponse
     *
     * @param ListOrganizationMembersRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOrganizationMembersResponse
     */
    public function listOrganizationMembersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hasSeat) {
            @$query['HasSeat'] = $request->hasSeat;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOrganizationMembers',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/organization/members',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOrganizationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of organization members including seat information. Supports filtering by name, status, and seat assignment, and supports pagination.
     *
     * @param request - ListOrganizationMembersRequest
     *
     * @returns ListOrganizationMembersResponse
     *
     * @param ListOrganizationMembersRequest $request
     *
     * @return ListOrganizationMembersResponse
     */
    public function listOrganizationMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the details of shared packages by paging.
     *
     * @param request - ListSubscriptionSharedPackagesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubscriptionSharedPackagesResponse
     *
     * @param ListSubscriptionSharedPackagesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListSubscriptionSharedPackagesResponse
     */
    public function listSubscriptionSharedPackagesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubscriptionSharedPackages',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/subscription/shared-packages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSubscriptionSharedPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of shared packages by paging.
     *
     * @param request - ListSubscriptionSharedPackagesRequest
     *
     * @returns ListSubscriptionSharedPackagesResponse
     *
     * @param ListSubscriptionSharedPackagesRequest $request
     *
     * @return ListSubscriptionSharedPackagesResponse
     */
    public function listSubscriptionSharedPackages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubscriptionSharedPackagesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of business workspaces.
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

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceName) {
            @$query['workspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/workspaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of business workspaces.
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
     * Removes organization members. Before removal, checks whether the member holds a seat. If the member holds a seat, the removal is rejected.
     *
     * @param request - RemoveOrganizationMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveOrganizationMemberResponse
     *
     * @param RemoveOrganizationMemberRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return RemoveOrganizationMemberResponse
     */
    public function removeOrganizationMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountIds) {
            @$query['AccountIds'] = $request->accountIds;
        }

        if (null !== $request->locale) {
            @$query['Locale'] = $request->locale;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveOrganizationMember',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/organization/member-removals',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes organization members. Before removal, checks whether the member holds a seat. If the member holds a seat, the removal is rejected.
     *
     * @param request - RemoveOrganizationMemberRequest
     *
     * @returns RemoveOrganizationMemberResponse
     *
     * @param RemoveOrganizationMemberRequest $request
     *
     * @return RemoveOrganizationMemberResponse
     */
    public function removeOrganizationMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeOrganizationMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * Resets an API key.
     *
     * @remarks
     * Only the API key value changes. The API key ID remains unchanged.
     *
     * @param request - ResetApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetApiKeyResponse
     *
     * @param string             $apiKeyId
     * @param ResetApiKeyRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ResetApiKeyResponse
     */
    public function resetApiKeyWithOptions($apiKeyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResetApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '/reset',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResetApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets an API key.
     *
     * @remarks
     * Only the API key value changes. The API key ID remains unchanged.
     *
     * @param request - ResetApiKeyRequest
     *
     * @returns ResetApiKeyResponse
     *
     * @param string             $apiKeyId
     * @param ResetApiKeyRequest $request
     *
     * @return ResetApiKeyResponse
     */
    public function resetApiKey($apiKeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetApiKeyWithOptions($apiKeyId, $request, $headers, $runtime);
    }

    /**
     * Revokes a TokenPlan member invitation link.
     *
     * @param request - RevokeTokenPlanInviteLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeTokenPlanInviteLinkResponse
     *
     * @param RevokeTokenPlanInviteLinkRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeTokenPlanInviteLinkResponse
     */
    public function revokeTokenPlanInviteLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RevokeTokenPlanInviteLink',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/invite/link/revoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokeTokenPlanInviteLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes a TokenPlan member invitation link.
     *
     * @param request - RevokeTokenPlanInviteLinkRequest
     *
     * @returns RevokeTokenPlanInviteLinkResponse
     *
     * @param RevokeTokenPlanInviteLinkRequest $request
     *
     * @return RevokeTokenPlanInviteLinkResponse
     */
    public function revokeTokenPlanInviteLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeTokenPlanInviteLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * Resets a UAC API key.
     *
     * @remarks
     * Only the API Key value changes. The API Key ID remains unchanged.
     *
     * @param request - RotateTokenPlanKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RotateTokenPlanKeyResponse
     *
     * @param RotateTokenPlanKeyRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RotateTokenPlanKeyResponse
     */
    public function rotateTokenPlanKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['ApiKeyId'] = $request->apiKeyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RotateTokenPlanKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/api-key-rotations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RotateTokenPlanKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets a UAC API key.
     *
     * @remarks
     * Only the API Key value changes. The API Key ID remains unchanged.
     *
     * @param request - RotateTokenPlanKeyRequest
     *
     * @returns RotateTokenPlanKeyResponse
     *
     * @param RotateTokenPlanKeyRequest $request
     *
     * @return RotateTokenPlanKeyResponse
     */
    public function rotateTokenPlanKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rotateTokenPlanKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * Configures the member invitation settings for a TokenPlan.
     *
     * @param request - SetTokenPlanOrgInviteConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetTokenPlanOrgInviteConfigResponse
     *
     * @param SetTokenPlanOrgInviteConfigRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return SetTokenPlanOrgInviteConfigResponse
     */
    public function setTokenPlanOrgInviteConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultRoleId) {
            @$query['DefaultRoleId'] = $request->defaultRoleId;
        }

        if (null !== $request->seatAssignStrategy) {
            @$query['SeatAssignStrategy'] = $request->seatAssignStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetTokenPlanOrgInviteConfig',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/invite/config/set',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SetTokenPlanOrgInviteConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the member invitation settings for a TokenPlan.
     *
     * @param request - SetTokenPlanOrgInviteConfigRequest
     *
     * @returns SetTokenPlanOrgInviteConfigResponse
     *
     * @param SetTokenPlanOrgInviteConfigRequest $request
     *
     * @return SetTokenPlanOrgInviteConfigResponse
     */
    public function setTokenPlanOrgInviteConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setTokenPlanOrgInviteConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Edits the information of an authentication credential API key.
     *
     * @param request - UpdateApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApiKeyResponse
     *
     * @param string              $apiKeyId
     * @param UpdateApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateApiKeyResponse
     */
    public function updateApiKeyWithOptions($apiKeyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        $body = [];
        if (null !== $request->auth) {
            @$body['auth'] = $request->auth;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edits the information of an authentication credential API key.
     *
     * @param request - UpdateApiKeyRequest
     *
     * @returns UpdateApiKeyResponse
     *
     * @param string              $apiKeyId
     * @param UpdateApiKeyRequest $request
     *
     * @return UpdateApiKeyResponse
     */
    public function updateApiKey($apiKeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApiKeyWithOptions($apiKeyId, $request, $headers, $runtime);
    }

    /**
     * Modifies organization information.
     *
     * @param request - UpdateOrganizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOrganizationResponse
     *
     * @param UpdateOrganizationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateOrganizationResponse
     */
    public function updateOrganizationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOrganization',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/organization',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies organization information.
     *
     * @param request - UpdateOrganizationRequest
     *
     * @returns UpdateOrganizationResponse
     *
     * @param UpdateOrganizationRequest $request
     *
     * @return UpdateOrganizationResponse
     */
    public function updateOrganization($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOrganizationWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the roles of organization members.
     *
     * @param request - UpdateOrganizationMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOrganizationMemberResponse
     *
     * @param UpdateOrganizationMemberRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateOrganizationMemberResponse
     */
    public function updateOrganizationMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountIds) {
            @$query['AccountIds'] = $request->accountIds;
        }

        if (null !== $request->newRoleCode) {
            @$query['NewRoleCode'] = $request->newRoleCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOrganizationMember',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/tokenplan/organization/members/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the roles of organization members.
     *
     * @param request - UpdateOrganizationMemberRequest
     *
     * @returns UpdateOrganizationMemberResponse
     *
     * @param UpdateOrganizationMemberRequest $request
     *
     * @return UpdateOrganizationMemberResponse
     */
    public function updateOrganizationMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOrganizationMemberWithOptions($request, $headers, $runtime);
    }
}
