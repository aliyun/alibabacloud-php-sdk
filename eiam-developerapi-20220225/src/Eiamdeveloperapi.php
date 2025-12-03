<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\AddUsersToGroupHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\AddUsersToGroupRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\AddUsersToGroupResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\AddUserToOrganizationalUnitsHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\AddUserToOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\AddUserToOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateGroupHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteGroupHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DisableUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DisableUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\EnableUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\EnableUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateDeviceCodeRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateDeviceCodeResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateTokenRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateTokenResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetApplicationProvisioningScopeHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetApplicationProvisioningScopeResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetGroupHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetGroupResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitIdByExternalIdHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitIdByExternalIdRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitIdByExternalIdResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByEmailHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByEmailRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByEmailResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByPhoneNumberHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByPhoneNumberRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByPhoneNumberResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUserExternalIdHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUserExternalIdRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUserExternalIdResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUsernameHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUsernameRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUsernameResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserInfoHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserInfoResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsForUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsForUserRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsForUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitParentIdsHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitParentIdsResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitsHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersForGroupHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersForGroupRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersForGroupResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchGroupHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchGroupRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchGroupResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RemoveUserFromOrganizationalUnitsHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RemoveUserFromOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RemoveUserFromOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RemoveUsersFromGroupHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RemoveUsersFromGroupRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RemoveUsersFromGroupResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RevokeTokenRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RevokeTokenResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\SetUserPrimaryOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\SetUserPrimaryOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\SetUserPrimaryOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\UpdateUserPasswordHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\UpdateUserPasswordRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\UpdateUserPasswordResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eiamdeveloperapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eiam-developerapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 将账户加入多个组织.
     *
     * @param request - AddUserToOrganizationalUnitsRequest
     * @param headers - AddUserToOrganizationalUnitsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserToOrganizationalUnitsResponse
     *
     * @param string                              $instanceId
     * @param string                              $applicationId
     * @param string                              $userId
     * @param AddUserToOrganizationalUnitsRequest $request
     * @param AddUserToOrganizationalUnitsHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return AddUserToOrganizationalUnitsResponse
     */
    public function addUserToOrganizationalUnitsWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->organizationalUnitIds) {
            @$body['organizationalUnitIds'] = $request->organizationalUnitIds;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddUserToOrganizationalUnits',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '/actions/addUserToOrganizationalUnits',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return AddUserToOrganizationalUnitsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 将账户加入多个组织.
     *
     * @param request - AddUserToOrganizationalUnitsRequest
     *
     * @returns AddUserToOrganizationalUnitsResponse
     *
     * @param string                              $instanceId
     * @param string                              $applicationId
     * @param string                              $userId
     * @param AddUserToOrganizationalUnitsRequest $request
     *
     * @return AddUserToOrganizationalUnitsResponse
     */
    public function addUserToOrganizationalUnits($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddUserToOrganizationalUnitsHeaders([]);

        return $this->addUserToOrganizationalUnitsWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * Adds multiple Employee Identity and Access Management (EIAM) accounts to an EIAM group. If the accounts are already added to the specified group, no update is performed.
     *
     * @param request - AddUsersToGroupRequest
     * @param headers - AddUsersToGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUsersToGroupResponse
     *
     * @param string                 $instanceId
     * @param string                 $applicationId
     * @param string                 $groupId
     * @param AddUsersToGroupRequest $request
     * @param AddUsersToGroupHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AddUsersToGroupResponse
     */
    public function addUsersToGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userIds) {
            @$body['userIds'] = $request->userIds;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddUsersToGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/groups/' . Url::percentEncode($groupId) . '/actions/addUsersToGroup',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return AddUsersToGroupResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Adds multiple Employee Identity and Access Management (EIAM) accounts to an EIAM group. If the accounts are already added to the specified group, no update is performed.
     *
     * @param request - AddUsersToGroupRequest
     *
     * @returns AddUsersToGroupResponse
     *
     * @param string                 $instanceId
     * @param string                 $applicationId
     * @param string                 $groupId
     * @param AddUsersToGroupRequest $request
     *
     * @return AddUsersToGroupResponse
     */
    public function addUsersToGroup($instanceId, $applicationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddUsersToGroupHeaders([]);

        return $this->addUsersToGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Creates a group.
     *
     * @param request - CreateGroupRequest
     * @param headers - CreateGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupResponse
     *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param CreateGroupRequest $request
     * @param CreateGroupHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupExternalId) {
            @$body['groupExternalId'] = $request->groupExternalId;
        }

        if (null !== $request->groupName) {
            @$body['groupName'] = $request->groupName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/groups',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Creates a group.
     *
     * @param request - CreateGroupRequest
     *
     * @returns CreateGroupResponse
     *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateGroupHeaders([]);

        return $this->createGroupWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Creates an organizational unit.
     *
     * @param request - CreateOrganizationalUnitRequest
     * @param headers - CreateOrganizationalUnitHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrganizationalUnitResponse
     *
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param CreateOrganizationalUnitRequest $request
     * @param CreateOrganizationalUnitHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnitWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->organizationalUnitExternalId) {
            @$body['organizationalUnitExternalId'] = $request->organizationalUnitExternalId;
        }

        if (null !== $request->organizationalUnitName) {
            @$body['organizationalUnitName'] = $request->organizationalUnitName;
        }

        if (null !== $request->parentId) {
            @$body['parentId'] = $request->parentId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/organizationalUnits',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateOrganizationalUnitResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Creates an organizational unit.
     *
     * @param request - CreateOrganizationalUnitRequest
     *
     * @returns CreateOrganizationalUnitResponse
     *
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param CreateOrganizationalUnitRequest $request
     *
     * @return CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnit($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateOrganizationalUnitHeaders([]);

        return $this->createOrganizationalUnitWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Creates an Employee Identity and Access Management (EIAM) account in an organizational unit.
     *
     * @param request - CreateUserRequest
     * @param headers - CreateUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param CreateUserRequest $request
     * @param CreateUserHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customFields) {
            @$body['customFields'] = $request->customFields;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->emailVerified) {
            @$body['emailVerified'] = $request->emailVerified;
        }

        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->passwordInitializationConfig) {
            @$body['passwordInitializationConfig'] = $request->passwordInitializationConfig;
        }

        if (null !== $request->phoneNumber) {
            @$body['phoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->phoneNumberVerified) {
            @$body['phoneNumberVerified'] = $request->phoneNumberVerified;
        }

        if (null !== $request->phoneRegion) {
            @$body['phoneRegion'] = $request->phoneRegion;
        }

        if (null !== $request->primaryOrganizationalUnitId) {
            @$body['primaryOrganizationalUnitId'] = $request->primaryOrganizationalUnitId;
        }

        if (null !== $request->userExternalId) {
            @$body['userExternalId'] = $request->userExternalId;
        }

        if (null !== $request->username) {
            @$body['username'] = $request->username;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Creates an Employee Identity and Access Management (EIAM) account in an organizational unit.
     *
     * @param request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateUserHeaders([]);

        return $this->createUserWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Deletes a group.
     *
     * @param headers - DeleteGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupResponse
     *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param string             $groupId
     * @param DeleteGroupHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($instanceId, $applicationId, $groupId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/groups/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteGroupResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Deletes a group.
     *
     * @returns DeleteGroupResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $groupId
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($instanceId, $applicationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteGroupHeaders([]);

        return $this->deleteGroupWithOptions($instanceId, $applicationId, $groupId, $headers, $runtime);
    }

    /**
     * Deletes an organizational unit.
     *
     * @param headers - DeleteOrganizationalUnitHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOrganizationalUnitResponse
     *
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param string                          $organizationalUnitId
     * @param DeleteOrganizationalUnitHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/organizationalUnits/' . Url::percentEncode($organizationalUnitId) . '',
            'method' => 'DELETE',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteOrganizationalUnitResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Deletes an organizational unit.
     *
     * @returns DeleteOrganizationalUnitResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteOrganizationalUnitHeaders([]);

        return $this->deleteOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * Deletes an Employee Identity and Access Management (EIAM) account.
     *
     * @param headers - DeleteUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserResponse
     *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $userId
     * @param DeleteUserHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '',
            'method' => 'DELETE',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteUserResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Deletes an Employee Identity and Access Management (EIAM) account.
     *
     * @returns DeleteUserResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUserHeaders([]);

        return $this->deleteUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * Disables an Employee Identity and Access Management (EIAM) account.
     *
     * @param headers - DisableUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableUserResponse
     *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param string             $userId
     * @param DisableUserHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DisableUserResponse
     */
    public function disableUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DisableUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '/actions/disable',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DisableUserResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Disables an Employee Identity and Access Management (EIAM) account.
     *
     * @returns DisableUserResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return DisableUserResponse
     */
    public function disableUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DisableUserHeaders([]);

        return $this->disableUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * Enables an Employee Identity and Access Management (EIAM) account.
     *
     * @param headers - EnableUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableUserResponse
     *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $userId
     * @param EnableUserHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return EnableUserResponse
     */
    public function enableUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'EnableUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '/actions/enable',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return EnableUserResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Enables an Employee Identity and Access Management (EIAM) account.
     *
     * @returns EnableUserResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return EnableUserResponse
     */
    public function enableUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EnableUserHeaders([]);

        return $this->enableUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * Generates a device code.
     *
     * @param request - GenerateDeviceCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateDeviceCodeResponse
     *
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param GenerateDeviceCodeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateDeviceCodeResponse
     */
    public function generateDeviceCodeWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scope) {
            @$query['scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateDeviceCode',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/oauth2/device/code',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateDeviceCodeResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Generates a device code.
     *
     * @param request - GenerateDeviceCodeRequest
     *
     * @returns GenerateDeviceCodeResponse
     *
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param GenerateDeviceCodeRequest $request
     *
     * @return GenerateDeviceCodeResponse
     */
    public function generateDeviceCode($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateDeviceCodeWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Generates a token for accessing an application in an instance.
     *
     * @remarks
     * The following authorization types are supported: authorization code, device code, refresh token, and client credentials.
     *
     * @param request - GenerateTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateTokenResponse
     *
     * @param string               $instanceId
     * @param string               $applicationId
     * @param GenerateTokenRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GenerateTokenResponse
     */
    public function generateTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['client_id'] = $request->clientId;
        }

        if (null !== $request->clientSecret) {
            @$query['client_secret'] = $request->clientSecret;
        }

        if (null !== $request->code) {
            @$query['code'] = $request->code;
        }

        if (null !== $request->codeVerifier) {
            @$query['code_verifier'] = $request->codeVerifier;
        }

        if (null !== $request->deviceCode) {
            @$query['device_code'] = $request->deviceCode;
        }

        if (null !== $request->exclusiveTag) {
            @$query['exclusive_tag'] = $request->exclusiveTag;
        }

        if (null !== $request->grantType) {
            @$query['grant_type'] = $request->grantType;
        }

        if (null !== $request->password) {
            @$query['password'] = $request->password;
        }

        if (null !== $request->redirectUri) {
            @$query['redirect_uri'] = $request->redirectUri;
        }

        if (null !== $request->refreshToken) {
            @$query['refresh_token'] = $request->refreshToken;
        }

        if (null !== $request->scope) {
            @$query['scope'] = $request->scope;
        }

        if (null !== $request->username) {
            @$query['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateToken',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/oauth2/token',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateTokenResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Generates a token for accessing an application in an instance.
     *
     * @remarks
     * The following authorization types are supported: authorization code, device code, refresh token, and client credentials.
     *
     * @param request - GenerateTokenRequest
     *
     * @returns GenerateTokenResponse
     *
     * @param string               $instanceId
     * @param string               $applicationId
     * @param GenerateTokenRequest $request
     *
     * @return GenerateTokenResponse
     */
    public function generateToken($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Queries the synchronization scope of an application in an instance.
     *
     * @remarks
     * >
     * *   You can go to the Applications page in the IDaaS console to set the synchronization scope. After an application is created, the application has the permission to call this operation by default.
     *
     * @param headers - GetApplicationProvisioningScopeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationProvisioningScopeResponse
     *
     * @param string                                 $instanceId
     * @param string                                 $applicationId
     * @param GetApplicationProvisioningScopeHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScopeWithOptions($instanceId, $applicationId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetApplicationProvisioningScope',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/provisioningScope',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApplicationProvisioningScopeResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the synchronization scope of an application in an instance.
     *
     * @remarks
     * >
     * *   You can go to the Applications page in the IDaaS console to set the synchronization scope. After an application is created, the application has the permission to call this operation by default.
     *
     * @returns GetApplicationProvisioningScopeResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     *
     * @return GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScope($instanceId, $applicationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetApplicationProvisioningScopeHeaders([]);

        return $this->getApplicationProvisioningScopeWithOptions($instanceId, $applicationId, $headers, $runtime);
    }

    /**
     * Queries the details of a group.
     *
     * @param headers - GetGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupResponse
     *
     * @param string          $instanceId
     * @param string          $applicationId
     * @param string          $groupId
     * @param GetGroupHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($instanceId, $applicationId, $groupId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/groups/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGroupResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the details of a group.
     *
     * @returns GetGroupResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $groupId
     *
     * @return GetGroupResponse
     */
    public function getGroup($instanceId, $applicationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetGroupHeaders([]);

        return $this->getGroupWithOptions($instanceId, $applicationId, $groupId, $headers, $runtime);
    }

    /**
     * Queries the information of an organizational unit.
     *
     * @param headers - GetOrganizationalUnitHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrganizationalUnitResponse
     *
     * @param string                       $instanceId
     * @param string                       $applicationId
     * @param string                       $organizationalUnitId
     * @param GetOrganizationalUnitHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/organizationalUnits/' . Url::percentEncode($organizationalUnitId) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOrganizationalUnitResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the information of an organizational unit.
     *
     * @returns GetOrganizationalUnitResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOrganizationalUnitHeaders([]);

        return $this->getOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * Obtains the ID of an organizational unit based on the external ID.
     *
     * @param request - GetOrganizationalUnitIdByExternalIdRequest
     * @param headers - GetOrganizationalUnitIdByExternalIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrganizationalUnitIdByExternalIdResponse
     *
     * @param string                                     $instanceId
     * @param string                                     $applicationId
     * @param GetOrganizationalUnitIdByExternalIdRequest $request
     * @param GetOrganizationalUnitIdByExternalIdHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return GetOrganizationalUnitIdByExternalIdResponse
     */
    public function getOrganizationalUnitIdByExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->organizationalUnitExternalId) {
            @$body['organizationalUnitExternalId'] = $request->organizationalUnitExternalId;
        }

        if (null !== $request->organizationalUnitSourceId) {
            @$body['organizationalUnitSourceId'] = $request->organizationalUnitSourceId;
        }

        if (null !== $request->organizationalUnitSourceType) {
            @$body['organizationalUnitSourceType'] = $request->organizationalUnitSourceType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOrganizationalUnitIdByExternalId',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/organizationalUnits/_/actions/getOrganizationalUnitIdByExternalId',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOrganizationalUnitIdByExternalIdResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Obtains the ID of an organizational unit based on the external ID.
     *
     * @param request - GetOrganizationalUnitIdByExternalIdRequest
     *
     * @returns GetOrganizationalUnitIdByExternalIdResponse
     *
     * @param string                                     $instanceId
     * @param string                                     $applicationId
     * @param GetOrganizationalUnitIdByExternalIdRequest $request
     *
     * @return GetOrganizationalUnitIdByExternalIdResponse
     */
    public function getOrganizationalUnitIdByExternalId($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOrganizationalUnitIdByExternalIdHeaders([]);

        return $this->getOrganizationalUnitIdByExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of an Employee Identity and Access Management (EIAM) account.
     *
     * @param headers - GetUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param string         $instanceId
     * @param string         $applicationId
     * @param string         $userId
     * @param GetUserHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the details of an Employee Identity and Access Management (EIAM) account.
     *
     * @returns GetUserResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return GetUserResponse
     */
    public function getUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserHeaders([]);

        return $this->getUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * Queries the ID of an Employee Identity and Access Management (EIAM) account by email address.
     *
     * @param request - GetUserIdByEmailRequest
     * @param headers - GetUserIdByEmailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserIdByEmailResponse
     *
     * @param string                  $instanceId
     * @param string                  $applicationId
     * @param GetUserIdByEmailRequest $request
     * @param GetUserIdByEmailHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetUserIdByEmailResponse
     */
    public function getUserIdByEmailWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByEmail',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/_/actions/getUserIdByEmail',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserIdByEmailResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the ID of an Employee Identity and Access Management (EIAM) account by email address.
     *
     * @param request - GetUserIdByEmailRequest
     *
     * @returns GetUserIdByEmailResponse
     *
     * @param string                  $instanceId
     * @param string                  $applicationId
     * @param GetUserIdByEmailRequest $request
     *
     * @return GetUserIdByEmailResponse
     */
    public function getUserIdByEmail($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByEmailHeaders([]);

        return $this->getUserIdByEmailWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Queries the ID of an Employee Identity and Access Management (EIAM) account based on the mobile number.
     *
     * @param request - GetUserIdByPhoneNumberRequest
     * @param headers - GetUserIdByPhoneNumberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserIdByPhoneNumberResponse
     *
     * @param string                        $instanceId
     * @param string                        $applicationId
     * @param GetUserIdByPhoneNumberRequest $request
     * @param GetUserIdByPhoneNumberHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetUserIdByPhoneNumberResponse
     */
    public function getUserIdByPhoneNumberWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->phoneNumber) {
            @$body['phoneNumber'] = $request->phoneNumber;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByPhoneNumber',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/_/actions/getUserIdByPhoneNumber',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserIdByPhoneNumberResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the ID of an Employee Identity and Access Management (EIAM) account based on the mobile number.
     *
     * @param request - GetUserIdByPhoneNumberRequest
     *
     * @returns GetUserIdByPhoneNumberResponse
     *
     * @param string                        $instanceId
     * @param string                        $applicationId
     * @param GetUserIdByPhoneNumberRequest $request
     *
     * @return GetUserIdByPhoneNumberResponse
     */
    public function getUserIdByPhoneNumber($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByPhoneNumberHeaders([]);

        return $this->getUserIdByPhoneNumberWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Queries the ID of an Employee Identity and Access Management (EIAM) account based on the external ID.
     *
     * @param request - GetUserIdByUserExternalIdRequest
     * @param headers - GetUserIdByUserExternalIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserIdByUserExternalIdResponse
     *
     * @param string                           $instanceId
     * @param string                           $applicationId
     * @param GetUserIdByUserExternalIdRequest $request
     * @param GetUserIdByUserExternalIdHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetUserIdByUserExternalIdResponse
     */
    public function getUserIdByUserExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userExternalId) {
            @$body['userExternalId'] = $request->userExternalId;
        }

        if (null !== $request->userSourceId) {
            @$body['userSourceId'] = $request->userSourceId;
        }

        if (null !== $request->userSourceType) {
            @$body['userSourceType'] = $request->userSourceType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByUserExternalId',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/_/actions/getUserIdByExternalId',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserIdByUserExternalIdResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the ID of an Employee Identity and Access Management (EIAM) account based on the external ID.
     *
     * @param request - GetUserIdByUserExternalIdRequest
     *
     * @returns GetUserIdByUserExternalIdResponse
     *
     * @param string                           $instanceId
     * @param string                           $applicationId
     * @param GetUserIdByUserExternalIdRequest $request
     *
     * @return GetUserIdByUserExternalIdResponse
     */
    public function getUserIdByUserExternalId($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByUserExternalIdHeaders([]);

        return $this->getUserIdByUserExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Queries the ID of an Employee Identity and Access Management (EIAM) account based on the username.
     *
     * @param request - GetUserIdByUsernameRequest
     * @param headers - GetUserIdByUsernameHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserIdByUsernameResponse
     *
     * @param string                     $instanceId
     * @param string                     $applicationId
     * @param GetUserIdByUsernameRequest $request
     * @param GetUserIdByUsernameHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetUserIdByUsernameResponse
     */
    public function getUserIdByUsernameWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->username) {
            @$body['username'] = $request->username;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByUsername',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/_/actions/getUserIdByUsername',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserIdByUsernameResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the ID of an Employee Identity and Access Management (EIAM) account based on the username.
     *
     * @param request - GetUserIdByUsernameRequest
     *
     * @returns GetUserIdByUsernameResponse
     *
     * @param string                     $instanceId
     * @param string                     $applicationId
     * @param GetUserIdByUsernameRequest $request
     *
     * @return GetUserIdByUsernameResponse
     */
    public function getUserIdByUsername($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByUsernameHeaders([]);

        return $this->getUserIdByUsernameWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Queries the information of a user by using the user token.
     *
     * @param headers - GetUserInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserInfoResponse
     *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param GetUserInfoHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfoWithOptions($instanceId, $applicationId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetUserInfo',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/oauth2/userinfo',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserInfoResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the information of a user by using the user token.
     *
     * @returns GetUserInfoResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfo($instanceId, $applicationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserInfoHeaders([]);

        return $this->getUserInfoWithOptions($instanceId, $applicationId, $headers, $runtime);
    }

    /**
     * Queries information about Employee Identity and Access Management (EIAM) groups by page.
     *
     * @param request - ListGroupsRequest
     * @param headers - ListGroupsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsResponse
     *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param ListGroupsRequest $request
     * @param ListGroupsHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupNameStartWith) {
            @$query['groupNameStartWith'] = $request->groupNameStartWith;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroups',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/groups',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries information about Employee Identity and Access Management (EIAM) groups by page.
     *
     * @param request - ListGroupsRequest
     *
     * @returns ListGroupsResponse
     *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListGroupsHeaders([]);

        return $this->listGroupsWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * 获取账户关联组列表.
     *
     * @param request - ListGroupsForUserRequest
     * @param headers - ListGroupsForUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsForUserResponse
     *
     * @param string                   $instanceId
     * @param string                   $applicationId
     * @param string                   $userId
     * @param ListGroupsForUserRequest $request
     * @param ListGroupsForUserHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupsForUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '/actions/listGroupsForUser',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupsForUserResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取账户关联组列表.
     *
     * @param request - ListGroupsForUserRequest
     *
     * @returns ListGroupsForUserResponse
     *
     * @param string                   $instanceId
     * @param string                   $applicationId
     * @param string                   $userId
     * @param ListGroupsForUserRequest $request
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUser($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListGroupsForUserHeaders([]);

        return $this->listGroupsForUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * Queries the information of all the parent organizational units of an organizational unit.
     *
     * @param headers - ListOrganizationalUnitParentIdsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOrganizationalUnitParentIdsResponse
     *
     * @param string                                 $instanceId
     * @param string                                 $applicationId
     * @param string                                 $organizationalUnitId
     * @param ListOrganizationalUnitParentIdsHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListOrganizationalUnitParentIdsResponse
     */
    public function listOrganizationalUnitParentIdsWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'ListOrganizationalUnitParentIds',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/organizationalUnits/' . Url::percentEncode($organizationalUnitId) . '/parentIds',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOrganizationalUnitParentIdsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the information of all the parent organizational units of an organizational unit.
     *
     * @returns ListOrganizationalUnitParentIdsResponse
     *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return ListOrganizationalUnitParentIdsResponse
     */
    public function listOrganizationalUnitParentIds($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListOrganizationalUnitParentIdsHeaders([]);

        return $this->listOrganizationalUnitParentIdsWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * Queries the information of Employee Identity and Access Management (EIAM) organizational units by page.
     *
     * @param request - ListOrganizationalUnitsRequest
     * @param headers - ListOrganizationalUnitsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOrganizationalUnitsResponse
     *
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param ListOrganizationalUnitsRequest $request
     * @param ListOrganizationalUnitsHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnitsWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->parentId) {
            @$query['parentId'] = $request->parentId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOrganizationalUnits',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/organizationalUnits',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOrganizationalUnitsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the information of Employee Identity and Access Management (EIAM) organizational units by page.
     *
     * @param request - ListOrganizationalUnitsRequest
     *
     * @returns ListOrganizationalUnitsResponse
     *
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param ListOrganizationalUnitsRequest $request
     *
     * @return ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnits($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListOrganizationalUnitsHeaders([]);

        return $this->listOrganizationalUnitsWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Queries the information of Employee Identity and Access Management (EIAM) accounts by page.
     *
     * @param request - ListUsersRequest
     * @param headers - ListUsersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param string           $instanceId
     * @param string           $applicationId
     * @param ListUsersRequest $request
     * @param ListUsersHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationalUnitId) {
            @$query['organizationalUnitId'] = $request->organizationalUnitId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the information of Employee Identity and Access Management (EIAM) accounts by page.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param string           $instanceId
     * @param string           $applicationId
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListUsersHeaders([]);

        return $this->listUsersWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * Queries accounts in an Employee Identity and Access Management (EIAM) group.
     *
     * @param request - ListUsersForGroupRequest
     * @param headers - ListUsersForGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersForGroupResponse
     *
     * @param string                   $instanceId
     * @param string                   $applicationId
     * @param string                   $groupId
     * @param ListUsersForGroupRequest $request
     * @param ListUsersForGroupHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsersForGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/groups/' . Url::percentEncode($groupId) . '/actions/listUsersForGroup',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUsersForGroupResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries accounts in an Employee Identity and Access Management (EIAM) group.
     *
     * @param request - ListUsersForGroupRequest
     *
     * @returns ListUsersForGroupResponse
     *
     * @param string                   $instanceId
     * @param string                   $applicationId
     * @param string                   $groupId
     * @param ListUsersForGroupRequest $request
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroup($instanceId, $applicationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListUsersForGroupHeaders([]);

        return $this->listUsersForGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Modifies information about an Employee Identity and Access Management (EIAM) group.
     *
     * @param request - PatchGroupRequest
     * @param headers - PatchGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PatchGroupResponse
     *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $groupId
     * @param PatchGroupRequest $request
     * @param PatchGroupHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return PatchGroupResponse
     */
    public function patchGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['groupName'] = $request->groupName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PatchGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/groups/' . Url::percentEncode($groupId) . '',
            'method' => 'PATCH',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PatchGroupResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Modifies information about an Employee Identity and Access Management (EIAM) group.
     *
     * @param request - PatchGroupRequest
     *
     * @returns PatchGroupResponse
     *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $groupId
     * @param PatchGroupRequest $request
     *
     * @return PatchGroupResponse
     */
    public function patchGroup($instanceId, $applicationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchGroupHeaders([]);

        return $this->patchGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Modifies an EIAM organizational unit.
     *
     * @remarks
     * The operation conforms to the HTTP PATCH request method. The value of a parameter is modified only if the parameter is specified in the request.
     *
     * @param request - PatchOrganizationalUnitRequest
     * @param headers - PatchOrganizationalUnitHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PatchOrganizationalUnitResponse
     *
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param string                         $organizationalUnitId
     * @param PatchOrganizationalUnitRequest $request
     * @param PatchOrganizationalUnitHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return PatchOrganizationalUnitResponse
     */
    public function patchOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->organizationalUnitName) {
            @$body['organizationalUnitName'] = $request->organizationalUnitName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PatchOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/organizationalUnits/' . Url::percentEncode($organizationalUnitId) . '',
            'method' => 'PATCH',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PatchOrganizationalUnitResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Modifies an EIAM organizational unit.
     *
     * @remarks
     * The operation conforms to the HTTP PATCH request method. The value of a parameter is modified only if the parameter is specified in the request.
     *
     * @param request - PatchOrganizationalUnitRequest
     *
     * @returns PatchOrganizationalUnitResponse
     *
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param string                         $organizationalUnitId
     * @param PatchOrganizationalUnitRequest $request
     *
     * @return PatchOrganizationalUnitResponse
     */
    public function patchOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchOrganizationalUnitHeaders([]);

        return $this->patchOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $request, $headers, $runtime);
    }

    /**
     * Modifies an Employee Identity and Access Management (EIAM) account.
     *
     * @remarks
     * The operation conforms to the HTTP PATCH request method. The value of a parameter is modified only if the parameter is specified in the request.
     *
     * @param request - PatchUserRequest
     * @param headers - PatchUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PatchUserResponse
     *
     * @param string           $instanceId
     * @param string           $applicationId
     * @param string           $userId
     * @param PatchUserRequest $request
     * @param PatchUserHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return PatchUserResponse
     */
    public function patchUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customFields) {
            @$body['customFields'] = $request->customFields;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->emailVerified) {
            @$body['emailVerified'] = $request->emailVerified;
        }

        if (null !== $request->phoneNumber) {
            @$body['phoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->phoneNumberVerified) {
            @$body['phoneNumberVerified'] = $request->phoneNumberVerified;
        }

        if (null !== $request->phoneRegion) {
            @$body['phoneRegion'] = $request->phoneRegion;
        }

        if (null !== $request->username) {
            @$body['username'] = $request->username;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PatchUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '',
            'method' => 'PATCH',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PatchUserResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Modifies an Employee Identity and Access Management (EIAM) account.
     *
     * @remarks
     * The operation conforms to the HTTP PATCH request method. The value of a parameter is modified only if the parameter is specified in the request.
     *
     * @param request - PatchUserRequest
     *
     * @returns PatchUserResponse
     *
     * @param string           $instanceId
     * @param string           $applicationId
     * @param string           $userId
     * @param PatchUserRequest $request
     *
     * @return PatchUserResponse
     */
    public function patchUser($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchUserHeaders([]);

        return $this->patchUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * 将账户从多个组织移除【不支持移除主组织】.
     *
     * @param request - RemoveUserFromOrganizationalUnitsRequest
     * @param headers - RemoveUserFromOrganizationalUnitsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserFromOrganizationalUnitsResponse
     *
     * @param string                                   $instanceId
     * @param string                                   $applicationId
     * @param string                                   $userId
     * @param RemoveUserFromOrganizationalUnitsRequest $request
     * @param RemoveUserFromOrganizationalUnitsHeaders $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return RemoveUserFromOrganizationalUnitsResponse
     */
    public function removeUserFromOrganizationalUnitsWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->organizationalUnitIds) {
            @$body['organizationalUnitIds'] = $request->organizationalUnitIds;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveUserFromOrganizationalUnits',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '/actions/removeUserFromOrganizationalUnits',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return RemoveUserFromOrganizationalUnitsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 将账户从多个组织移除【不支持移除主组织】.
     *
     * @param request - RemoveUserFromOrganizationalUnitsRequest
     *
     * @returns RemoveUserFromOrganizationalUnitsResponse
     *
     * @param string                                   $instanceId
     * @param string                                   $applicationId
     * @param string                                   $userId
     * @param RemoveUserFromOrganizationalUnitsRequest $request
     *
     * @return RemoveUserFromOrganizationalUnitsResponse
     */
    public function removeUserFromOrganizationalUnits($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveUserFromOrganizationalUnitsHeaders([]);

        return $this->removeUserFromOrganizationalUnitsWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * Removes multiple Employee Identity and Access Management (EIAM) accounts from an EIAM group. If an account does not belong to the group, the removal succeeds by default.
     *
     * @param request - RemoveUsersFromGroupRequest
     * @param headers - RemoveUsersFromGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUsersFromGroupResponse
     *
     * @param string                      $instanceId
     * @param string                      $applicationId
     * @param string                      $groupId
     * @param RemoveUsersFromGroupRequest $request
     * @param RemoveUsersFromGroupHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userIds) {
            @$body['userIds'] = $request->userIds;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveUsersFromGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/groups/' . Url::percentEncode($groupId) . '/actions/removeUsersFromGroup',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return RemoveUsersFromGroupResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Removes multiple Employee Identity and Access Management (EIAM) accounts from an EIAM group. If an account does not belong to the group, the removal succeeds by default.
     *
     * @param request - RemoveUsersFromGroupRequest
     *
     * @returns RemoveUsersFromGroupResponse
     *
     * @param string                      $instanceId
     * @param string                      $applicationId
     * @param string                      $groupId
     * @param RemoveUsersFromGroupRequest $request
     *
     * @return RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroup($instanceId, $applicationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveUsersFromGroupHeaders([]);

        return $this->removeUsersFromGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Revokes an access token or refresh token.
     *
     * @param request - RevokeTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeTokenResponse
     *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param RevokeTokenRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RevokeTokenResponse
     */
    public function revokeTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['client_id'] = $request->clientId;
        }

        if (null !== $request->clientSecret) {
            @$query['client_secret'] = $request->clientSecret;
        }

        if (null !== $request->token) {
            @$query['token'] = $request->token;
        }

        if (null !== $request->tokenTypeHint) {
            @$query['token_type_hint'] = $request->tokenTypeHint;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeToken',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/oauth2/revoke',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokeTokenResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Revokes an access token or refresh token.
     *
     * @param request - RevokeTokenRequest
     *
     * @returns RevokeTokenResponse
     *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param RevokeTokenRequest $request
     *
     * @return RevokeTokenResponse
     */
    public function revokeToken($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * 将指定组织设置为账户主组织，移除旧主组织，加入新主组织。
     *
     * @param request - SetUserPrimaryOrganizationalUnitRequest
     * @param headers - SetUserPrimaryOrganizationalUnitHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetUserPrimaryOrganizationalUnitResponse
     *
     * @param string                                  $instanceId
     * @param string                                  $applicationId
     * @param string                                  $userId
     * @param SetUserPrimaryOrganizationalUnitRequest $request
     * @param SetUserPrimaryOrganizationalUnitHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return SetUserPrimaryOrganizationalUnitResponse
     */
    public function setUserPrimaryOrganizationalUnitWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->organizationalUnitId) {
            @$body['organizationalUnitId'] = $request->organizationalUnitId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetUserPrimaryOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '/actions/setUserPrimaryOrganizationalUnit',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return SetUserPrimaryOrganizationalUnitResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 将指定组织设置为账户主组织，移除旧主组织，加入新主组织。
     *
     * @param request - SetUserPrimaryOrganizationalUnitRequest
     *
     * @returns SetUserPrimaryOrganizationalUnitResponse
     *
     * @param string                                  $instanceId
     * @param string                                  $applicationId
     * @param string                                  $userId
     * @param SetUserPrimaryOrganizationalUnitRequest $request
     *
     * @return SetUserPrimaryOrganizationalUnitResponse
     */
    public function setUserPrimaryOrganizationalUnit($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetUserPrimaryOrganizationalUnitHeaders([]);

        return $this->setUserPrimaryOrganizationalUnitWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * 更新账户密码
     *
     * @param request - UpdateUserPasswordRequest
     * @param headers - UpdateUserPasswordHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserPasswordResponse
     *
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param string                    $userId
     * @param UpdateUserPasswordRequest $request
     * @param UpdateUserPasswordHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateUserPasswordResponse
     */
    public function updateUserPasswordWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserPassword',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . Url::percentEncode($instanceId) . '/' . Url::percentEncode($applicationId) . '/users/' . Url::percentEncode($userId) . '/actions/updateUserPassword',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateUserPasswordResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 更新账户密码
     *
     * @param request - UpdateUserPasswordRequest
     *
     * @returns UpdateUserPasswordResponse
     *
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param string                    $userId
     * @param UpdateUserPasswordRequest $request
     *
     * @return UpdateUserPasswordResponse
     */
    public function updateUserPassword($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateUserPasswordHeaders([]);

        return $this->updateUserPasswordWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }
}
