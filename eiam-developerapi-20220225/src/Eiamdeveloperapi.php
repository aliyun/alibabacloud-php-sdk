<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Eiamdeveloperapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 将账户加入多个组织
     *  *
     * @param string                              $instanceId
     * @param string                              $applicationId
     * @param string                              $userId
     * @param AddUserToOrganizationalUnitsRequest $request       AddUserToOrganizationalUnitsRequest
     * @param AddUserToOrganizationalUnitsHeaders $headers       AddUserToOrganizationalUnitsHeaders
     * @param RuntimeOptions                      $runtime       runtime options for this request RuntimeOptions
     *
     * @return AddUserToOrganizationalUnitsResponse AddUserToOrganizationalUnitsResponse
     */
    public function addUserToOrganizationalUnitsWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $body['organizationalUnitIds'] = $request->organizationalUnitIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddUserToOrganizationalUnits',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '/actions/addUserToOrganizationalUnits',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddUserToOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddUserToOrganizationalUnitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 将账户加入多个组织
     *  *
     * @param string                              $instanceId
     * @param string                              $applicationId
     * @param string                              $userId
     * @param AddUserToOrganizationalUnitsRequest $request       AddUserToOrganizationalUnitsRequest
     *
     * @return AddUserToOrganizationalUnitsResponse AddUserToOrganizationalUnitsResponse
     */
    public function addUserToOrganizationalUnits($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddUserToOrganizationalUnitsHeaders([]);

        return $this->addUserToOrganizationalUnitsWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * @summary 为指定组批量关联账户
     *  *
     * @param string                 $instanceId
     * @param string                 $applicationId
     * @param string                 $groupId
     * @param AddUsersToGroupRequest $request       AddUsersToGroupRequest
     * @param AddUsersToGroupHeaders $headers       AddUsersToGroupHeaders
     * @param RuntimeOptions         $runtime       runtime options for this request RuntimeOptions
     *
     * @return AddUsersToGroupResponse AddUsersToGroupResponse
     */
    public function addUsersToGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userIds)) {
            $body['userIds'] = $request->userIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddUsersToGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/actions/addUsersToGroup',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddUsersToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddUsersToGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 为指定组批量关联账户
     *  *
     * @param string                 $instanceId
     * @param string                 $applicationId
     * @param string                 $groupId
     * @param AddUsersToGroupRequest $request       AddUsersToGroupRequest
     *
     * @return AddUsersToGroupResponse AddUsersToGroupResponse
     */
    public function addUsersToGroup($instanceId, $applicationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddUsersToGroupHeaders([]);

        return $this->addUsersToGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建一个EIAM组
     *  *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param CreateGroupRequest $request       CreateGroupRequest
     * @param CreateGroupHeaders $headers       CreateGroupHeaders
     * @param RuntimeOptions     $runtime       runtime options for this request RuntimeOptions
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroupWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupExternalId)) {
            $body['groupExternalId'] = $request->groupExternalId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['groupName'] = $request->groupName;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/groups',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建一个EIAM组
     *  *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param CreateGroupRequest $request       CreateGroupRequest
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroup($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateGroupHeaders([]);

        return $this->createGroupWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an organizational unit.
     *  *
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param CreateOrganizationalUnitRequest $request       CreateOrganizationalUnitRequest
     * @param CreateOrganizationalUnitHeaders $headers       CreateOrganizationalUnitHeaders
     * @param RuntimeOptions                  $runtime       runtime options for this request RuntimeOptions
     *
     * @return CreateOrganizationalUnitResponse CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnitWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->organizationalUnitExternalId)) {
            $body['organizationalUnitExternalId'] = $request->organizationalUnitExternalId;
        }
        if (!Utils::isUnset($request->organizationalUnitName)) {
            $body['organizationalUnitName'] = $request->organizationalUnitName;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['parentId'] = $request->parentId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/organizationalUnits',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an organizational unit.
     *  *
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param CreateOrganizationalUnitRequest $request       CreateOrganizationalUnitRequest
     *
     * @return CreateOrganizationalUnitResponse CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnit($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateOrganizationalUnitHeaders([]);

        return $this->createOrganizationalUnitWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an Employee Identity and Access Management (EIAM) account in an organizational unit.
     *  *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param CreateUserRequest $request       CreateUserRequest
     * @param CreateUserHeaders $headers       CreateUserHeaders
     * @param RuntimeOptions    $runtime       runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customFields)) {
            $body['customFields'] = $request->customFields;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->emailVerified)) {
            $body['emailVerified'] = $request->emailVerified;
        }
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordInitializationConfig)) {
            $body['passwordInitializationConfig'] = $request->passwordInitializationConfig;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['phoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->phoneNumberVerified)) {
            $body['phoneNumberVerified'] = $request->phoneNumberVerified;
        }
        if (!Utils::isUnset($request->phoneRegion)) {
            $body['phoneRegion'] = $request->phoneRegion;
        }
        if (!Utils::isUnset($request->primaryOrganizationalUnitId)) {
            $body['primaryOrganizationalUnitId'] = $request->primaryOrganizationalUnitId;
        }
        if (!Utils::isUnset($request->userExternalId)) {
            $body['userExternalId'] = $request->userExternalId;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an Employee Identity and Access Management (EIAM) account in an organizational unit.
     *  *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param CreateUserRequest $request       CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateUserHeaders([]);

        return $this->createUserWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除指定组
     *  *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param string             $groupId
     * @param DeleteGroupHeaders $headers       DeleteGroupHeaders
     * @param RuntimeOptions     $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroupWithOptions($instanceId, $applicationId, $groupId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除指定组
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $groupId
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroup($instanceId, $applicationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteGroupHeaders([]);

        return $this->deleteGroupWithOptions($instanceId, $applicationId, $groupId, $headers, $runtime);
    }

    /**
     * @summary Deletes an organizational unit.
     *  *
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param string                          $organizationalUnitId
     * @param DeleteOrganizationalUnitHeaders $headers              DeleteOrganizationalUnitHeaders
     * @param RuntimeOptions                  $runtime              runtime options for this request RuntimeOptions
     *
     * @return DeleteOrganizationalUnitResponse DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/organizationalUnits/' . OpenApiUtilClient::getEncodeParam($organizationalUnitId) . '',
            'method' => 'DELETE',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an organizational unit.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return DeleteOrganizationalUnitResponse DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteOrganizationalUnitHeaders([]);

        return $this->deleteOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * @summary Deletes an Employee Identity and Access Management (EIAM) account.
     *  *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $userId
     * @param DeleteUserHeaders $headers       DeleteUserHeaders
     * @param RuntimeOptions    $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '',
            'method' => 'DELETE',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an Employee Identity and Access Management (EIAM) account.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUserHeaders([]);

        return $this->deleteUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * @summary Disables an Employee Identity and Access Management (EIAM) account.
     *  *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param string             $userId
     * @param DisableUserHeaders $headers       DisableUserHeaders
     * @param RuntimeOptions     $runtime       runtime options for this request RuntimeOptions
     *
     * @return DisableUserResponse DisableUserResponse
     */
    public function disableUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DisableUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '/actions/disable',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disables an Employee Identity and Access Management (EIAM) account.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return DisableUserResponse DisableUserResponse
     */
    public function disableUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DisableUserHeaders([]);

        return $this->disableUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * @summary Enables an Employee Identity and Access Management (EIAM) account.
     *  *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $userId
     * @param EnableUserHeaders $headers       EnableUserHeaders
     * @param RuntimeOptions    $runtime       runtime options for this request RuntimeOptions
     *
     * @return EnableUserResponse EnableUserResponse
     */
    public function enableUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'EnableUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '/actions/enable',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables an Employee Identity and Access Management (EIAM) account.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return EnableUserResponse EnableUserResponse
     */
    public function enableUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EnableUserHeaders([]);

        return $this->enableUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * @summary Generates a device code.
     *  *
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param GenerateDeviceCodeRequest $request       GenerateDeviceCodeRequest
     * @param string[]                  $headers       map
     * @param RuntimeOptions            $runtime       runtime options for this request RuntimeOptions
     *
     * @return GenerateDeviceCodeResponse GenerateDeviceCodeResponse
     */
    public function generateDeviceCodeWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateDeviceCode',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/oauth2/device/code',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateDeviceCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateDeviceCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Generates a device code.
     *  *
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param GenerateDeviceCodeRequest $request       GenerateDeviceCodeRequest
     *
     * @return GenerateDeviceCodeResponse GenerateDeviceCodeResponse
     */
    public function generateDeviceCode($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateDeviceCodeWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Generates a token for accessing an application in an instance.
     *  *
     * @description >
     * *   The following authorization types are supported: authorization code, device code, refresh token, and client credentials.
     *  *
     * @param string               $instanceId
     * @param string               $applicationId
     * @param GenerateTokenRequest $request       GenerateTokenRequest
     * @param string[]             $headers       map
     * @param RuntimeOptions       $runtime       runtime options for this request RuntimeOptions
     *
     * @return GenerateTokenResponse GenerateTokenResponse
     */
    public function generateTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['client_id'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientSecret)) {
            $query['client_secret'] = $request->clientSecret;
        }
        if (!Utils::isUnset($request->code)) {
            $query['code'] = $request->code;
        }
        if (!Utils::isUnset($request->codeVerifier)) {
            $query['code_verifier'] = $request->codeVerifier;
        }
        if (!Utils::isUnset($request->deviceCode)) {
            $query['device_code'] = $request->deviceCode;
        }
        if (!Utils::isUnset($request->exclusiveTag)) {
            $query['exclusive_tag'] = $request->exclusiveTag;
        }
        if (!Utils::isUnset($request->grantType)) {
            $query['grant_type'] = $request->grantType;
        }
        if (!Utils::isUnset($request->password)) {
            $query['password'] = $request->password;
        }
        if (!Utils::isUnset($request->redirectUri)) {
            $query['redirect_uri'] = $request->redirectUri;
        }
        if (!Utils::isUnset($request->refreshToken)) {
            $query['refresh_token'] = $request->refreshToken;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->username)) {
            $query['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateToken',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/oauth2/token',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Generates a token for accessing an application in an instance.
     *  *
     * @description >
     * *   The following authorization types are supported: authorization code, device code, refresh token, and client credentials.
     *  *
     * @param string               $instanceId
     * @param string               $applicationId
     * @param GenerateTokenRequest $request       GenerateTokenRequest
     *
     * @return GenerateTokenResponse GenerateTokenResponse
     */
    public function generateToken($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the synchronization scope of an application in an instance.
     *  *
     * @description >
     * *   You can go to the Applications page in the IDaaS console to set the synchronization scope. After an application is created, the application has the permission to call this operation by default.
     *  *
     * @param string                                 $instanceId
     * @param string                                 $applicationId
     * @param GetApplicationProvisioningScopeHeaders $headers       GetApplicationProvisioningScopeHeaders
     * @param RuntimeOptions                         $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetApplicationProvisioningScopeResponse GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScopeWithOptions($instanceId, $applicationId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetApplicationProvisioningScope',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/provisioningScope',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetApplicationProvisioningScopeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationProvisioningScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the synchronization scope of an application in an instance.
     *  *
     * @description >
     * *   You can go to the Applications page in the IDaaS console to set the synchronization scope. After an application is created, the application has the permission to call this operation by default.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     *
     * @return GetApplicationProvisioningScopeResponse GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScope($instanceId, $applicationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetApplicationProvisioningScopeHeaders([]);

        return $this->getApplicationProvisioningScopeWithOptions($instanceId, $applicationId, $headers, $runtime);
    }

    /**
     * @summary 查询一个EIAM组信息
     *  *
     * @param string          $instanceId
     * @param string          $applicationId
     * @param string          $groupId
     * @param GetGroupHeaders $headers       GetGroupHeaders
     * @param RuntimeOptions  $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroupWithOptions($instanceId, $applicationId, $groupId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询一个EIAM组信息
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $groupId
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroup($instanceId, $applicationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetGroupHeaders([]);

        return $this->getGroupWithOptions($instanceId, $applicationId, $groupId, $headers, $runtime);
    }

    /**
     * @summary Queries the information of an organizational unit.
     *  *
     * @param string                       $instanceId
     * @param string                       $applicationId
     * @param string                       $organizationalUnitId
     * @param GetOrganizationalUnitHeaders $headers              GetOrganizationalUnitHeaders
     * @param RuntimeOptions               $runtime              runtime options for this request RuntimeOptions
     *
     * @return GetOrganizationalUnitResponse GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/organizationalUnits/' . OpenApiUtilClient::getEncodeParam($organizationalUnitId) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of an organizational unit.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return GetOrganizationalUnitResponse GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOrganizationalUnitHeaders([]);

        return $this->getOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * @summary Obtains the ID of an organizational unit based on the external ID
     *  *
     * @param string                                     $instanceId
     * @param string                                     $applicationId
     * @param GetOrganizationalUnitIdByExternalIdRequest $request       GetOrganizationalUnitIdByExternalIdRequest
     * @param GetOrganizationalUnitIdByExternalIdHeaders $headers       GetOrganizationalUnitIdByExternalIdHeaders
     * @param RuntimeOptions                             $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetOrganizationalUnitIdByExternalIdResponse GetOrganizationalUnitIdByExternalIdResponse
     */
    public function getOrganizationalUnitIdByExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationalUnitExternalId)) {
            $body['organizationalUnitExternalId'] = $request->organizationalUnitExternalId;
        }
        if (!Utils::isUnset($request->organizationalUnitSourceId)) {
            $body['organizationalUnitSourceId'] = $request->organizationalUnitSourceId;
        }
        if (!Utils::isUnset($request->organizationalUnitSourceType)) {
            $body['organizationalUnitSourceType'] = $request->organizationalUnitSourceType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOrganizationalUnitIdByExternalId',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/organizationalUnits/_/actions/getOrganizationalUnitIdByExternalId',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetOrganizationalUnitIdByExternalIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrganizationalUnitIdByExternalIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the ID of an organizational unit based on the external ID
     *  *
     * @param string                                     $instanceId
     * @param string                                     $applicationId
     * @param GetOrganizationalUnitIdByExternalIdRequest $request       GetOrganizationalUnitIdByExternalIdRequest
     *
     * @return GetOrganizationalUnitIdByExternalIdResponse GetOrganizationalUnitIdByExternalIdResponse
     */
    public function getOrganizationalUnitIdByExternalId($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOrganizationalUnitIdByExternalIdHeaders([]);

        return $this->getOrganizationalUnitIdByExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information of an Employee Identity and Access Management (EIAM) account.
     *  *
     * @param string         $instanceId
     * @param string         $applicationId
     * @param string         $userId
     * @param GetUserHeaders $headers       GetUserHeaders
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of an Employee Identity and Access Management (EIAM) account.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserHeaders([]);

        return $this->getUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * @summary Queries the ID of an Employee Identity and Access Management (EIAM) account by email address.
     *  *
     * @param string                  $instanceId
     * @param string                  $applicationId
     * @param GetUserIdByEmailRequest $request       GetUserIdByEmailRequest
     * @param GetUserIdByEmailHeaders $headers       GetUserIdByEmailHeaders
     * @param RuntimeOptions          $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetUserIdByEmailResponse GetUserIdByEmailResponse
     */
    public function getUserIdByEmailWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByEmail',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/_/actions/getUserIdByEmail',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserIdByEmailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserIdByEmailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the ID of an Employee Identity and Access Management (EIAM) account by email address.
     *  *
     * @param string                  $instanceId
     * @param string                  $applicationId
     * @param GetUserIdByEmailRequest $request       GetUserIdByEmailRequest
     *
     * @return GetUserIdByEmailResponse GetUserIdByEmailResponse
     */
    public function getUserIdByEmail($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByEmailHeaders([]);

        return $this->getUserIdByEmailWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the ID of an Employee Identity and Access Management (EIAM) account based on the mobile number.
     *  *
     * @param string                        $instanceId
     * @param string                        $applicationId
     * @param GetUserIdByPhoneNumberRequest $request       GetUserIdByPhoneNumberRequest
     * @param GetUserIdByPhoneNumberHeaders $headers       GetUserIdByPhoneNumberHeaders
     * @param RuntimeOptions                $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetUserIdByPhoneNumberResponse GetUserIdByPhoneNumberResponse
     */
    public function getUserIdByPhoneNumberWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['phoneNumber'] = $request->phoneNumber;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByPhoneNumber',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/_/actions/getUserIdByPhoneNumber',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserIdByPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserIdByPhoneNumberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the ID of an Employee Identity and Access Management (EIAM) account based on the mobile number.
     *  *
     * @param string                        $instanceId
     * @param string                        $applicationId
     * @param GetUserIdByPhoneNumberRequest $request       GetUserIdByPhoneNumberRequest
     *
     * @return GetUserIdByPhoneNumberResponse GetUserIdByPhoneNumberResponse
     */
    public function getUserIdByPhoneNumber($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByPhoneNumberHeaders([]);

        return $this->getUserIdByPhoneNumberWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the ID of an Employee Identity and Access Management (EIAM) account based on the external ID.
     *  *
     * @param string                           $instanceId
     * @param string                           $applicationId
     * @param GetUserIdByUserExternalIdRequest $request       GetUserIdByUserExternalIdRequest
     * @param GetUserIdByUserExternalIdHeaders $headers       GetUserIdByUserExternalIdHeaders
     * @param RuntimeOptions                   $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetUserIdByUserExternalIdResponse GetUserIdByUserExternalIdResponse
     */
    public function getUserIdByUserExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userExternalId)) {
            $body['userExternalId'] = $request->userExternalId;
        }
        if (!Utils::isUnset($request->userSourceId)) {
            $body['userSourceId'] = $request->userSourceId;
        }
        if (!Utils::isUnset($request->userSourceType)) {
            $body['userSourceType'] = $request->userSourceType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByUserExternalId',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/_/actions/getUserIdByExternalId',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserIdByUserExternalIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserIdByUserExternalIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the ID of an Employee Identity and Access Management (EIAM) account based on the external ID.
     *  *
     * @param string                           $instanceId
     * @param string                           $applicationId
     * @param GetUserIdByUserExternalIdRequest $request       GetUserIdByUserExternalIdRequest
     *
     * @return GetUserIdByUserExternalIdResponse GetUserIdByUserExternalIdResponse
     */
    public function getUserIdByUserExternalId($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByUserExternalIdHeaders([]);

        return $this->getUserIdByUserExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the ID of an Employee Identity and Access Management (EIAM) account based on the username.
     *  *
     * @param string                     $instanceId
     * @param string                     $applicationId
     * @param GetUserIdByUsernameRequest $request       GetUserIdByUsernameRequest
     * @param GetUserIdByUsernameHeaders $headers       GetUserIdByUsernameHeaders
     * @param RuntimeOptions             $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetUserIdByUsernameResponse GetUserIdByUsernameResponse
     */
    public function getUserIdByUsernameWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByUsername',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/_/actions/getUserIdByUsername',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserIdByUsernameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserIdByUsernameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the ID of an Employee Identity and Access Management (EIAM) account based on the username.
     *  *
     * @param string                     $instanceId
     * @param string                     $applicationId
     * @param GetUserIdByUsernameRequest $request       GetUserIdByUsernameRequest
     *
     * @return GetUserIdByUsernameResponse GetUserIdByUsernameResponse
     */
    public function getUserIdByUsername($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByUsernameHeaders([]);

        return $this->getUserIdByUsernameWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information of a user by using the user token.
     *  *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param GetUserInfoHeaders $headers       GetUserInfoHeaders
     * @param RuntimeOptions     $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetUserInfoResponse GetUserInfoResponse
     */
    public function getUserInfoWithOptions($instanceId, $applicationId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetUserInfo',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/oauth2/userinfo',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of a user by using the user token.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     *
     * @return GetUserInfoResponse GetUserInfoResponse
     */
    public function getUserInfo($instanceId, $applicationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserInfoHeaders([]);

        return $this->getUserInfoWithOptions($instanceId, $applicationId, $headers, $runtime);
    }

    /**
     * @summary 查询组列表
     *  *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param ListGroupsRequest $request       ListGroupsRequest
     * @param ListGroupsHeaders $headers       ListGroupsHeaders
     * @param RuntimeOptions    $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroupsWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupNameStartWith)) {
            $query['groupNameStartWith'] = $request->groupNameStartWith;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroups',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/groups',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询组列表
     *  *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param ListGroupsRequest $request       ListGroupsRequest
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroups($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListGroupsHeaders([]);

        return $this->listGroupsWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取账户关联组列表
     *  *
     * @param string                   $instanceId
     * @param string                   $applicationId
     * @param string                   $userId
     * @param ListGroupsForUserRequest $request       ListGroupsForUserRequest
     * @param ListGroupsForUserHeaders $headers       ListGroupsForUserHeaders
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListGroupsForUserResponse ListGroupsForUserResponse
     */
    public function listGroupsForUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupsForUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '/actions/listGroupsForUser',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGroupsForUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取账户关联组列表
     *  *
     * @param string                   $instanceId
     * @param string                   $applicationId
     * @param string                   $userId
     * @param ListGroupsForUserRequest $request       ListGroupsForUserRequest
     *
     * @return ListGroupsForUserResponse ListGroupsForUserResponse
     */
    public function listGroupsForUser($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListGroupsForUserHeaders([]);

        return $this->listGroupsForUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information of all the parent organizational units of an organizational unit.
     *  *
     * @param string                                 $instanceId
     * @param string                                 $applicationId
     * @param string                                 $organizationalUnitId
     * @param ListOrganizationalUnitParentIdsHeaders $headers              ListOrganizationalUnitParentIdsHeaders
     * @param RuntimeOptions                         $runtime              runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationalUnitParentIdsResponse ListOrganizationalUnitParentIdsResponse
     */
    public function listOrganizationalUnitParentIdsWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'ListOrganizationalUnitParentIds',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/organizationalUnits/' . OpenApiUtilClient::getEncodeParam($organizationalUnitId) . '/parentIds',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListOrganizationalUnitParentIdsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOrganizationalUnitParentIdsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of all the parent organizational units of an organizational unit.
     *  *
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return ListOrganizationalUnitParentIdsResponse ListOrganizationalUnitParentIdsResponse
     */
    public function listOrganizationalUnitParentIds($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListOrganizationalUnitParentIdsHeaders([]);

        return $this->listOrganizationalUnitParentIdsWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * @summary Queries the information of Employee Identity and Access Management (EIAM) organizational units by page.
     *  *
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param ListOrganizationalUnitsRequest $request       ListOrganizationalUnitsRequest
     * @param ListOrganizationalUnitsHeaders $headers       ListOrganizationalUnitsHeaders
     * @param RuntimeOptions                 $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationalUnitsResponse ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnitsWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['parentId'] = $request->parentId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOrganizationalUnits',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/organizationalUnits',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOrganizationalUnitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of Employee Identity and Access Management (EIAM) organizational units by page.
     *  *
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param ListOrganizationalUnitsRequest $request       ListOrganizationalUnitsRequest
     *
     * @return ListOrganizationalUnitsResponse ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnits($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListOrganizationalUnitsHeaders([]);

        return $this->listOrganizationalUnitsWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information of Employee Identity and Access Management (EIAM) accounts by page.
     *  *
     * @param string           $instanceId
     * @param string           $applicationId
     * @param ListUsersRequest $request       ListUsersRequest
     * @param ListUsersHeaders $headers       ListUsersHeaders
     * @param RuntimeOptions   $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['organizationalUnitId'] = $request->organizationalUnitId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of Employee Identity and Access Management (EIAM) accounts by page.
     *  *
     * @param string           $instanceId
     * @param string           $applicationId
     * @param ListUsersRequest $request       ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListUsersHeaders([]);

        return $this->listUsersWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询指定组下账户IDS
     *  *
     * @param string                   $instanceId
     * @param string                   $applicationId
     * @param string                   $groupId
     * @param ListUsersForGroupRequest $request       ListUsersForGroupRequest
     * @param ListUsersForGroupHeaders $headers       ListUsersForGroupHeaders
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListUsersForGroupResponse ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsersForGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/actions/listUsersForGroup',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUsersForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersForGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询指定组下账户IDS
     *  *
     * @param string                   $instanceId
     * @param string                   $applicationId
     * @param string                   $groupId
     * @param ListUsersForGroupRequest $request       ListUsersForGroupRequest
     *
     * @return ListUsersForGroupResponse ListUsersForGroupResponse
     */
    public function listUsersForGroup($instanceId, $applicationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListUsersForGroupHeaders([]);

        return $this->listUsersForGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新组信息
     *  *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $groupId
     * @param PatchGroupRequest $request       PatchGroupRequest
     * @param PatchGroupHeaders $headers       PatchGroupHeaders
     * @param RuntimeOptions    $runtime       runtime options for this request RuntimeOptions
     *
     * @return PatchGroupResponse PatchGroupResponse
     */
    public function patchGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupName)) {
            $body['groupName'] = $request->groupName;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PatchGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method' => 'PATCH',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PatchGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PatchGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新组信息
     *  *
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $groupId
     * @param PatchGroupRequest $request       PatchGroupRequest
     *
     * @return PatchGroupResponse PatchGroupResponse
     */
    public function patchGroup($instanceId, $applicationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchGroupHeaders([]);

        return $this->patchGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies an EIAM organizational unit.
     *  *
     * @description The operation conforms to the HTTP PATCH request method. The value of a parameter is modified only if the parameter is specified in the request.
     *  *
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param string                         $organizationalUnitId
     * @param PatchOrganizationalUnitRequest $request              PatchOrganizationalUnitRequest
     * @param PatchOrganizationalUnitHeaders $headers              PatchOrganizationalUnitHeaders
     * @param RuntimeOptions                 $runtime              runtime options for this request RuntimeOptions
     *
     * @return PatchOrganizationalUnitResponse PatchOrganizationalUnitResponse
     */
    public function patchOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->organizationalUnitName)) {
            $body['organizationalUnitName'] = $request->organizationalUnitName;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PatchOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/organizationalUnits/' . OpenApiUtilClient::getEncodeParam($organizationalUnitId) . '',
            'method' => 'PATCH',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PatchOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PatchOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies an EIAM organizational unit.
     *  *
     * @description The operation conforms to the HTTP PATCH request method. The value of a parameter is modified only if the parameter is specified in the request.
     *  *
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param string                         $organizationalUnitId
     * @param PatchOrganizationalUnitRequest $request              PatchOrganizationalUnitRequest
     *
     * @return PatchOrganizationalUnitResponse PatchOrganizationalUnitResponse
     */
    public function patchOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchOrganizationalUnitHeaders([]);

        return $this->patchOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies an Employee Identity and Access Management (EIAM) account.
     *  *
     * @description The operation conforms to the HTTP PATCH request method. The value of a parameter is modified only if the parameter is specified in the request.
     *  *
     * @param string           $instanceId
     * @param string           $applicationId
     * @param string           $userId
     * @param PatchUserRequest $request       PatchUserRequest
     * @param PatchUserHeaders $headers       PatchUserHeaders
     * @param RuntimeOptions   $runtime       runtime options for this request RuntimeOptions
     *
     * @return PatchUserResponse PatchUserResponse
     */
    public function patchUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customFields)) {
            $body['customFields'] = $request->customFields;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->emailVerified)) {
            $body['emailVerified'] = $request->emailVerified;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['phoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->phoneNumberVerified)) {
            $body['phoneNumberVerified'] = $request->phoneNumberVerified;
        }
        if (!Utils::isUnset($request->phoneRegion)) {
            $body['phoneRegion'] = $request->phoneRegion;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PatchUser',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '',
            'method' => 'PATCH',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PatchUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PatchUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies an Employee Identity and Access Management (EIAM) account.
     *  *
     * @description The operation conforms to the HTTP PATCH request method. The value of a parameter is modified only if the parameter is specified in the request.
     *  *
     * @param string           $instanceId
     * @param string           $applicationId
     * @param string           $userId
     * @param PatchUserRequest $request       PatchUserRequest
     *
     * @return PatchUserResponse PatchUserResponse
     */
    public function patchUser($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchUserHeaders([]);

        return $this->patchUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * @summary 将账户从多个组织移除【不支持移除主组织】
     *  *
     * @param string                                   $instanceId
     * @param string                                   $applicationId
     * @param string                                   $userId
     * @param RemoveUserFromOrganizationalUnitsRequest $request       RemoveUserFromOrganizationalUnitsRequest
     * @param RemoveUserFromOrganizationalUnitsHeaders $headers       RemoveUserFromOrganizationalUnitsHeaders
     * @param RuntimeOptions                           $runtime       runtime options for this request RuntimeOptions
     *
     * @return RemoveUserFromOrganizationalUnitsResponse RemoveUserFromOrganizationalUnitsResponse
     */
    public function removeUserFromOrganizationalUnitsWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $body['organizationalUnitIds'] = $request->organizationalUnitIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveUserFromOrganizationalUnits',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '/actions/removeUserFromOrganizationalUnits',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveUserFromOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveUserFromOrganizationalUnitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 将账户从多个组织移除【不支持移除主组织】
     *  *
     * @param string                                   $instanceId
     * @param string                                   $applicationId
     * @param string                                   $userId
     * @param RemoveUserFromOrganizationalUnitsRequest $request       RemoveUserFromOrganizationalUnitsRequest
     *
     * @return RemoveUserFromOrganizationalUnitsResponse RemoveUserFromOrganizationalUnitsResponse
     */
    public function removeUserFromOrganizationalUnits($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveUserFromOrganizationalUnitsHeaders([]);

        return $this->removeUserFromOrganizationalUnitsWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * @summary 为指定组批量解除账户关联
     *  *
     * @param string                      $instanceId
     * @param string                      $applicationId
     * @param string                      $groupId
     * @param RemoveUsersFromGroupRequest $request       RemoveUsersFromGroupRequest
     * @param RemoveUsersFromGroupHeaders $headers       RemoveUsersFromGroupHeaders
     * @param RuntimeOptions              $runtime       runtime options for this request RuntimeOptions
     *
     * @return RemoveUsersFromGroupResponse RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userIds)) {
            $body['userIds'] = $request->userIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveUsersFromGroup',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/actions/removeUsersFromGroup',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveUsersFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveUsersFromGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 为指定组批量解除账户关联
     *  *
     * @param string                      $instanceId
     * @param string                      $applicationId
     * @param string                      $groupId
     * @param RemoveUsersFromGroupRequest $request       RemoveUsersFromGroupRequest
     *
     * @return RemoveUsersFromGroupResponse RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroup($instanceId, $applicationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveUsersFromGroupHeaders([]);

        return $this->removeUsersFromGroupWithOptions($instanceId, $applicationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @summary Revokes an access token or refresh token.
     *  *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param RevokeTokenRequest $request       RevokeTokenRequest
     * @param string[]           $headers       map
     * @param RuntimeOptions     $runtime       runtime options for this request RuntimeOptions
     *
     * @return RevokeTokenResponse RevokeTokenResponse
     */
    public function revokeTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['client_id'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientSecret)) {
            $query['client_secret'] = $request->clientSecret;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        if (!Utils::isUnset($request->tokenTypeHint)) {
            $query['token_type_hint'] = $request->tokenTypeHint;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeToken',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/oauth2/revoke',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RevokeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Revokes an access token or refresh token.
     *  *
     * @param string             $instanceId
     * @param string             $applicationId
     * @param RevokeTokenRequest $request       RevokeTokenRequest
     *
     * @return RevokeTokenResponse RevokeTokenResponse
     */
    public function revokeToken($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 将指定组织设置为账户主组织，移除旧主组织，加入新主组织。
     *  *
     * @param string                                  $instanceId
     * @param string                                  $applicationId
     * @param string                                  $userId
     * @param SetUserPrimaryOrganizationalUnitRequest $request       SetUserPrimaryOrganizationalUnitRequest
     * @param SetUserPrimaryOrganizationalUnitHeaders $headers       SetUserPrimaryOrganizationalUnitHeaders
     * @param RuntimeOptions                          $runtime       runtime options for this request RuntimeOptions
     *
     * @return SetUserPrimaryOrganizationalUnitResponse SetUserPrimaryOrganizationalUnitResponse
     */
    public function setUserPrimaryOrganizationalUnitWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $body['organizationalUnitId'] = $request->organizationalUnitId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetUserPrimaryOrganizationalUnit',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '/actions/setUserPrimaryOrganizationalUnit',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetUserPrimaryOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetUserPrimaryOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 将指定组织设置为账户主组织，移除旧主组织，加入新主组织。
     *  *
     * @param string                                  $instanceId
     * @param string                                  $applicationId
     * @param string                                  $userId
     * @param SetUserPrimaryOrganizationalUnitRequest $request       SetUserPrimaryOrganizationalUnitRequest
     *
     * @return SetUserPrimaryOrganizationalUnitResponse SetUserPrimaryOrganizationalUnitResponse
     */
    public function setUserPrimaryOrganizationalUnit($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetUserPrimaryOrganizationalUnitHeaders([]);

        return $this->setUserPrimaryOrganizationalUnitWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新账户密码
     *  *
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param string                    $userId
     * @param UpdateUserPasswordRequest $request       UpdateUserPasswordRequest
     * @param UpdateUserPasswordHeaders $headers       UpdateUserPasswordHeaders
     * @param RuntimeOptions            $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateUserPasswordResponse UpdateUserPasswordResponse
     */
    public function updateUserPasswordWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserPassword',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/' . OpenApiUtilClient::getEncodeParam($applicationId) . '/users/' . OpenApiUtilClient::getEncodeParam($userId) . '/actions/updateUserPassword',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新账户密码
     *  *
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param string                    $userId
     * @param UpdateUserPasswordRequest $request       UpdateUserPasswordRequest
     *
     * @return UpdateUserPasswordResponse UpdateUserPasswordResponse
     */
    public function updateUserPassword($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateUserPasswordHeaders([]);

        return $this->updateUserPasswordWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }
}
