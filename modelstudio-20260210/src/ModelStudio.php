<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\AddOrganizationMemberRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\AddOrganizationMemberResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\BatchAssignSeatsRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\BatchAssignSeatsResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateApiKeyResponse;
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
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionSeatDetailsRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionSeatDetailsResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListApiKeysRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListApiKeysResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ResetApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ResetApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateApiKeyResponse;
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

        if (null !== $request->callerUacAccountId) {
            @$query['CallerUacAccountId'] = $request->callerUacAccountId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
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
     * Assigns seats in bulk to the member level.
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

        if (null !== $request->accountIdsStr) {
            @$query['AccountIdsStr'] = $request->accountIdsStr;
        }

        if (null !== $request->callerUacAccountId) {
            @$query['CallerUacAccountId'] = $request->callerUacAccountId;
        }

        if (null !== $request->locale) {
            @$query['Locale'] = $request->locale;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->seatType) {
            @$query['SeatType'] = $request->seatType;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
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
     * Assigns seats in bulk to the member level.
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

        if (null !== $request->callerUacAccountId) {
            @$query['CallerUacAccountId'] = $request->callerUacAccountId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
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
     * An API key cannot be disabled if it is already disabled.
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
     * An API key cannot be disabled if it is already disabled.
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
     * Retrieves the information of a specified authentication credential API key.
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
     * Retrieves the information of a specified authentication credential API key.
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
        if (null !== $request->callerUacAccountId) {
            @$query['CallerUacAccountId'] = $request->callerUacAccountId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

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

        if (null !== $request->statusListStr) {
            @$query['StatusListStr'] = $request->statusListStr;
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
     * Obtain the list of authentication credential API Key information.
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
     * Obtain the list of authentication credential API Key information.
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
}
