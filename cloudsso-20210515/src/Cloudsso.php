<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddExternalSAMLIdPCertificateRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddExternalSAMLIdPCertificateResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddPermissionPolicyToAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddPermissionPolicyToAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddUserToGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddUserToGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ClearExternalSAMLIdentityProviderRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ClearExternalSAMLIdentityProviderResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessAssignmentRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessAssignmentResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateDirectoryRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateDirectoryResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateSCIMServerCredentialRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateSCIMServerCredentialResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessAssignmentRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessAssignmentResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteDirectoryRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteDirectoryResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteMFADeviceForUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteMFADeviceForUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteSCIMServerCredentialRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteSCIMServerCredentialResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeprovisionAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeprovisionAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DisableServiceResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\EnableServiceResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetExternalSAMLIdentityProviderRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetExternalSAMLIdentityProviderResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetSCIMSynchronizationStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetSCIMSynchronizationStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetServiceStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserMFAAuthenticationSettingsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserMFAAuthenticationSettingsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessAssignmentsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessAssignmentsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationProvisioningsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationProvisioningsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListDirectoriesResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListExternalSAMLIdPCertificatesRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListExternalSAMLIdPCertificatesResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupMembersRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupMembersResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListJoinedGroupsForUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListJoinedGroupsForUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListMFADevicesForUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListMFADevicesForUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListPermissionPoliciesInAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListPermissionPoliciesInAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListSCIMServerCredentialsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListSCIMServerCredentialsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListTasksRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListTasksResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUsersRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUsersResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ProvisionAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ProvisionAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemoveExternalSAMLIdPCertificateRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemoveExternalSAMLIdPCertificateResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemovePermissionPolicyFromAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemovePermissionPolicyFromAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemoveUserFromGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemoveUserFromGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetExternalSAMLIdentityProviderRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetExternalSAMLIdentityProviderResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetMFAAuthenticationStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetMFAAuthenticationStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetSCIMSynchronizationStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetSCIMSynchronizationStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateDirectoryRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateDirectoryResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateInlinePolicyForAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateInlinePolicyForAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateMFAAuthenticationSettingsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateMFAAuthenticationSettingsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateSCIMServerCredentialStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateSCIMServerCredentialStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserMFAAuthenticationSettingsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserMFAAuthenticationSettingsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cloudsso extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudsso', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddExternalSAMLIdPCertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddExternalSAMLIdPCertificateResponse
     */
    public function addExternalSAMLIdPCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->x509Certificate)) {
            $query['X509Certificate'] = $request->x509Certificate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddExternalSAMLIdPCertificate',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddExternalSAMLIdPCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddExternalSAMLIdPCertificateRequest $request
     *
     * @return AddExternalSAMLIdPCertificateResponse
     */
    public function addExternalSAMLIdPCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addExternalSAMLIdPCertificateWithOptions($request, $runtime);
    }

    /**
     * @param AddPermissionPolicyToAccessConfigurationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return AddPermissionPolicyToAccessConfigurationResponse
     */
    public function addPermissionPolicyToAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->inlinePolicyDocument)) {
            $query['InlinePolicyDocument'] = $request->inlinePolicyDocument;
        }
        if (!Utils::isUnset($request->permissionPolicyName)) {
            $query['PermissionPolicyName'] = $request->permissionPolicyName;
        }
        if (!Utils::isUnset($request->permissionPolicyType)) {
            $query['PermissionPolicyType'] = $request->permissionPolicyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPermissionPolicyToAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPermissionPolicyToAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddPermissionPolicyToAccessConfigurationRequest $request
     *
     * @return AddPermissionPolicyToAccessConfigurationResponse
     */
    public function addPermissionPolicyToAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPermissionPolicyToAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param AddUserToGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddUserToGroupResponse
     */
    public function addUserToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToGroup',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserToGroupRequest $request
     *
     * @return AddUserToGroupResponse
     */
    public function addUserToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToGroupWithOptions($request, $runtime);
    }

    /**
     * @param ClearExternalSAMLIdentityProviderRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ClearExternalSAMLIdentityProviderResponse
     */
    public function clearExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearExternalSAMLIdentityProvider',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClearExternalSAMLIdentityProviderRequest $request
     *
     * @return ClearExternalSAMLIdentityProviderResponse
     */
    public function clearExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccessAssignmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAccessAssignmentResponse
     */
    public function createAccessAssignmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessAssignment',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessAssignmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccessAssignmentRequest $request
     *
     * @return CreateAccessAssignmentResponse
     */
    public function createAccessAssignment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessAssignmentWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccessConfigurationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAccessConfigurationResponse
     */
    public function createAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationName)) {
            $query['AccessConfigurationName'] = $request->accessConfigurationName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->relayState)) {
            $query['RelayState'] = $request->relayState;
        }
        if (!Utils::isUnset($request->sessionDuration)) {
            $query['SessionDuration'] = $request->sessionDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccessConfigurationRequest $request
     *
     * @return CreateAccessConfigurationResponse
     */
    public function createAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param CreateDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDirectoryResponse
     */
    public function createDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryName)) {
            $query['DirectoryName'] = $request->directoryName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDirectory',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDirectoryRequest $request
     *
     * @return CreateDirectoryResponse
     */
    public function createDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateSCIMServerCredentialRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateSCIMServerCredentialResponse
     */
    public function createSCIMServerCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSCIMServerCredential',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSCIMServerCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSCIMServerCredentialRequest $request
     *
     * @return CreateSCIMServerCredentialResponse
     */
    public function createSCIMServerCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSCIMServerCredentialWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->firstName)) {
            $query['FirstName'] = $request->firstName;
        }
        if (!Utils::isUnset($request->lastName)) {
            $query['LastName'] = $request->lastName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccessAssignmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAccessAssignmentResponse
     */
    public function deleteAccessAssignmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->deprovisionStrategy)) {
            $query['DeprovisionStrategy'] = $request->deprovisionStrategy;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessAssignment',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessAssignmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAccessAssignmentRequest $request
     *
     * @return DeleteAccessAssignmentResponse
     */
    public function deleteAccessAssignment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessAssignmentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccessConfigurationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteAccessConfigurationResponse
     */
    public function deleteAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->forceRemovePermissionPolicies)) {
            $query['ForceRemovePermissionPolicies'] = $request->forceRemovePermissionPolicies;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAccessConfigurationRequest $request
     *
     * @return DeleteAccessConfigurationResponse
     */
    public function deleteAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDirectory',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDirectoryRequest $request
     *
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupRequest $request
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMFADeviceForUserRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMFADeviceForUserResponse
     */
    public function deleteMFADeviceForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->MFADeviceId)) {
            $query['MFADeviceId'] = $request->MFADeviceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMFADeviceForUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMFADeviceForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMFADeviceForUserRequest $request
     *
     * @return DeleteMFADeviceForUserResponse
     */
    public function deleteMFADeviceForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMFADeviceForUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSCIMServerCredentialRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteSCIMServerCredentialResponse
     */
    public function deleteSCIMServerCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialId)) {
            $query['CredentialId'] = $request->credentialId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSCIMServerCredential',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSCIMServerCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSCIMServerCredentialRequest $request
     *
     * @return DeleteSCIMServerCredentialResponse
     */
    public function deleteSCIMServerCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSCIMServerCredentialWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DeprovisionAccessConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeprovisionAccessConfigurationResponse
     */
    public function deprovisionAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeprovisionAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeprovisionAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeprovisionAccessConfigurationRequest $request
     *
     * @return DeprovisionAccessConfigurationResponse
     */
    public function deprovisionAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deprovisionAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DisableServiceResponse
     */
    public function disableServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DisableService',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DisableServiceResponse
     */
    public function disableService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableServiceWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return EnableServiceResponse
     */
    public function enableServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'EnableService',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return EnableServiceResponse
     */
    public function enableService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServiceWithOptions($runtime);
    }

    /**
     * @param GetAccessConfigurationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAccessConfigurationResponse
     */
    public function getAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAccessConfigurationRequest $request
     *
     * @return GetAccessConfigurationResponse
     */
    public function getAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param GetDirectoryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetDirectoryResponse
     */
    public function getDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDirectory',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDirectoryRequest $request
     *
     * @return GetDirectoryResponse
     */
    public function getDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param GetDirectorySAMLServiceProviderInfoRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetDirectorySAMLServiceProviderInfoResponse
     */
    public function getDirectorySAMLServiceProviderInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDirectorySAMLServiceProviderInfo',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDirectorySAMLServiceProviderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDirectorySAMLServiceProviderInfoRequest $request
     *
     * @return GetDirectorySAMLServiceProviderInfoResponse
     */
    public function getDirectorySAMLServiceProviderInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectorySAMLServiceProviderInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetDirectoryStatisticsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDirectoryStatisticsResponse
     */
    public function getDirectoryStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDirectoryStatistics',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDirectoryStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDirectoryStatisticsRequest $request
     *
     * @return GetDirectoryStatisticsResponse
     */
    public function getDirectoryStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectoryStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetExternalSAMLIdentityProviderRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetExternalSAMLIdentityProviderResponse
     */
    public function getExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExternalSAMLIdentityProvider',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetExternalSAMLIdentityProviderRequest $request
     *
     * @return GetExternalSAMLIdentityProviderResponse
     */
    public function getExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * @param GetGroupRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroup',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGroupRequest $request
     *
     * @return GetGroupResponse
     */
    public function getGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetMFAAuthenticationSettingsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetMFAAuthenticationSettingsResponse
     */
    public function getMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMFAAuthenticationSettings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMFAAuthenticationSettingsRequest $request
     *
     * @return GetMFAAuthenticationSettingsResponse
     */
    public function getMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * @param GetMFAAuthenticationStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMFAAuthenticationStatusResponse
     */
    public function getMFAAuthenticationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMFAAuthenticationStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMFAAuthenticationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMFAAuthenticationStatusRequest $request
     *
     * @return GetMFAAuthenticationStatusResponse
     */
    public function getMFAAuthenticationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMFAAuthenticationStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSCIMSynchronizationStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetSCIMSynchronizationStatusResponse
     */
    public function getSCIMSynchronizationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSCIMSynchronizationStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSCIMSynchronizationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSCIMSynchronizationStatusRequest $request
     *
     * @return GetSCIMSynchronizationStatusResponse
     */
    public function getSCIMSynchronizationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSCIMSynchronizationStatusWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceStatusResponse
     */
    public function getServiceStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetServiceStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetServiceStatusResponse
     */
    public function getServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceStatusWithOptions($runtime);
    }

    /**
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param GetUserMFAAuthenticationSettingsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetUserMFAAuthenticationSettingsResponse
     */
    public function getUserMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserMFAAuthenticationSettings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserMFAAuthenticationSettingsRequest $request
     *
     * @return GetUserMFAAuthenticationSettingsResponse
     */
    public function getUserMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * @param ListAccessAssignmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAccessAssignmentsResponse
     */
    public function listAccessAssignmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessAssignments',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessAssignmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAccessAssignmentsRequest $request
     *
     * @return ListAccessAssignmentsResponse
     */
    public function listAccessAssignments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessAssignmentsWithOptions($request, $runtime);
    }

    /**
     * @param ListAccessConfigurationProvisioningsRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListAccessConfigurationProvisioningsResponse
     */
    public function listAccessConfigurationProvisioningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->provisioningStatus)) {
            $query['ProvisioningStatus'] = $request->provisioningStatus;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessConfigurationProvisionings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessConfigurationProvisioningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAccessConfigurationProvisioningsRequest $request
     *
     * @return ListAccessConfigurationProvisioningsResponse
     */
    public function listAccessConfigurationProvisionings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessConfigurationProvisioningsWithOptions($request, $runtime);
    }

    /**
     * @param ListAccessConfigurationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAccessConfigurationsResponse
     */
    public function listAccessConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->statusNotifications)) {
            $query['StatusNotifications'] = $request->statusNotifications;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessConfigurations',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAccessConfigurationsRequest $request
     *
     * @return ListAccessConfigurationsResponse
     */
    public function listAccessConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListDirectoriesResponse
     */
    public function listDirectoriesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListDirectories',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListDirectoriesResponse
     */
    public function listDirectories()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectoriesWithOptions($runtime);
    }

    /**
     * @param ListExternalSAMLIdPCertificatesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListExternalSAMLIdPCertificatesResponse
     */
    public function listExternalSAMLIdPCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExternalSAMLIdPCertificates',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExternalSAMLIdPCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListExternalSAMLIdPCertificatesRequest $request
     *
     * @return ListExternalSAMLIdPCertificatesResponse
     */
    public function listExternalSAMLIdPCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExternalSAMLIdPCertificatesWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupMembersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListGroupMembersResponse
     */
    public function listGroupMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupMembers',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupMembersRequest $request
     *
     * @return ListGroupMembersResponse
     */
    public function listGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->provisionType)) {
            $query['ProvisionType'] = $request->provisionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListJoinedGroupsForUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListJoinedGroupsForUserResponse
     */
    public function listJoinedGroupsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJoinedGroupsForUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJoinedGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJoinedGroupsForUserRequest $request
     *
     * @return ListJoinedGroupsForUserResponse
     */
    public function listJoinedGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJoinedGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * @param ListMFADevicesForUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMFADevicesForUserResponse
     */
    public function listMFADevicesForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMFADevicesForUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMFADevicesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMFADevicesForUserRequest $request
     *
     * @return ListMFADevicesForUserResponse
     */
    public function listMFADevicesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMFADevicesForUserWithOptions($request, $runtime);
    }

    /**
     * @param ListPermissionPoliciesInAccessConfigurationRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ListPermissionPoliciesInAccessConfigurationResponse
     */
    public function listPermissionPoliciesInAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->permissionPolicyType)) {
            $query['PermissionPolicyType'] = $request->permissionPolicyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPermissionPoliciesInAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPermissionPoliciesInAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPermissionPoliciesInAccessConfigurationRequest $request
     *
     * @return ListPermissionPoliciesInAccessConfigurationResponse
     */
    public function listPermissionPoliciesInAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionPoliciesInAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param ListSCIMServerCredentialsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSCIMServerCredentialsResponse
     */
    public function listSCIMServerCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSCIMServerCredentials',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSCIMServerCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSCIMServerCredentialsRequest $request
     *
     * @return ListSCIMServerCredentialsResponse
     */
    public function listSCIMServerCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSCIMServerCredentialsWithOptions($request, $runtime);
    }

    /**
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->provisionType)) {
            $query['ProvisionType'] = $request->provisionType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param ProvisionAccessConfigurationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ProvisionAccessConfigurationResponse
     */
    public function provisionAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProvisionAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProvisionAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProvisionAccessConfigurationRequest $request
     *
     * @return ProvisionAccessConfigurationResponse
     */
    public function provisionAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->provisionAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param RemoveExternalSAMLIdPCertificateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveExternalSAMLIdPCertificateResponse
     */
    public function removeExternalSAMLIdPCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveExternalSAMLIdPCertificate',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveExternalSAMLIdPCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveExternalSAMLIdPCertificateRequest $request
     *
     * @return RemoveExternalSAMLIdPCertificateResponse
     */
    public function removeExternalSAMLIdPCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeExternalSAMLIdPCertificateWithOptions($request, $runtime);
    }

    /**
     * @param RemovePermissionPolicyFromAccessConfigurationRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return RemovePermissionPolicyFromAccessConfigurationResponse
     */
    public function removePermissionPolicyFromAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->permissionPolicyName)) {
            $query['PermissionPolicyName'] = $request->permissionPolicyName;
        }
        if (!Utils::isUnset($request->permissionPolicyType)) {
            $query['PermissionPolicyType'] = $request->permissionPolicyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePermissionPolicyFromAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePermissionPolicyFromAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemovePermissionPolicyFromAccessConfigurationRequest $request
     *
     * @return RemovePermissionPolicyFromAccessConfigurationResponse
     */
    public function removePermissionPolicyFromAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePermissionPolicyFromAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUserFromGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveUserFromGroupResponse
     */
    public function removeUserFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserFromGroup',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUserFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveUserFromGroupRequest $request
     *
     * @return RemoveUserFromGroupResponse
     */
    public function removeUserFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromGroupWithOptions($request, $runtime);
    }

    /**
     * @param ResetUserPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->generateRandomPassword)) {
            $query['GenerateRandomPassword'] = $request->generateRandomPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->requirePasswordResetForNextLogin)) {
            $query['RequirePasswordResetForNextLogin'] = $request->requirePasswordResetForNextLogin;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetUserPassword',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetUserPasswordRequest $request
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param SetExternalSAMLIdentityProviderRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetExternalSAMLIdentityProviderResponse
     */
    public function setExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->encodedMetadataDocument)) {
            $query['EncodedMetadataDocument'] = $request->encodedMetadataDocument;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->loginUrl)) {
            $query['LoginUrl'] = $request->loginUrl;
        }
        if (!Utils::isUnset($request->SSOStatus)) {
            $query['SSOStatus'] = $request->SSOStatus;
        }
        if (!Utils::isUnset($request->wantRequestSigned)) {
            $query['WantRequestSigned'] = $request->wantRequestSigned;
        }
        if (!Utils::isUnset($request->x509Certificate)) {
            $query['X509Certificate'] = $request->x509Certificate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetExternalSAMLIdentityProvider',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetExternalSAMLIdentityProviderRequest $request
     *
     * @return SetExternalSAMLIdentityProviderResponse
     */
    public function setExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * @param SetMFAAuthenticationStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetMFAAuthenticationStatusResponse
     */
    public function setMFAAuthenticationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->MFAAuthenticationStatus)) {
            $query['MFAAuthenticationStatus'] = $request->MFAAuthenticationStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetMFAAuthenticationStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetMFAAuthenticationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetMFAAuthenticationStatusRequest $request
     *
     * @return SetMFAAuthenticationStatusResponse
     */
    public function setMFAAuthenticationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMFAAuthenticationStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetSCIMSynchronizationStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SetSCIMSynchronizationStatusResponse
     */
    public function setSCIMSynchronizationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->SCIMSynchronizationStatus)) {
            $query['SCIMSynchronizationStatus'] = $request->SCIMSynchronizationStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSCIMSynchronizationStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSCIMSynchronizationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetSCIMSynchronizationStatusRequest $request
     *
     * @return SetSCIMSynchronizationStatusResponse
     */
    public function setSCIMSynchronizationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSCIMSynchronizationStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAccessConfigurationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateAccessConfigurationResponse
     */
    public function updateAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newRelayState)) {
            $query['NewRelayState'] = $request->newRelayState;
        }
        if (!Utils::isUnset($request->newSessionDuration)) {
            $query['NewSessionDuration'] = $request->newSessionDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAccessConfigurationRequest $request
     *
     * @return UpdateAccessConfigurationResponse
     */
    public function updateAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateDirectoryResponse
     */
    public function updateDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newDirectoryName)) {
            $query['NewDirectoryName'] = $request->newDirectoryName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDirectory',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDirectoryRequest $request
     *
     * @return UpdateDirectoryResponse
     */
    public function updateDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newGroupName)) {
            $query['NewGroupName'] = $request->newGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroup',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInlinePolicyForAccessConfigurationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return UpdateInlinePolicyForAccessConfigurationResponse
     */
    public function updateInlinePolicyForAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->inlinePolicyName)) {
            $query['InlinePolicyName'] = $request->inlinePolicyName;
        }
        if (!Utils::isUnset($request->newInlinePolicyDocument)) {
            $query['NewInlinePolicyDocument'] = $request->newInlinePolicyDocument;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInlinePolicyForAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInlinePolicyForAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInlinePolicyForAccessConfigurationRequest $request
     *
     * @return UpdateInlinePolicyForAccessConfigurationResponse
     */
    public function updateInlinePolicyForAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInlinePolicyForAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMFAAuthenticationSettingsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateMFAAuthenticationSettingsResponse
     */
    public function updateMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->MFAAuthenticationSettings)) {
            $query['MFAAuthenticationSettings'] = $request->MFAAuthenticationSettings;
        }
        if (!Utils::isUnset($request->operationForRiskLogin)) {
            $query['OperationForRiskLogin'] = $request->operationForRiskLogin;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMFAAuthenticationSettings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMFAAuthenticationSettingsRequest $request
     *
     * @return UpdateMFAAuthenticationSettingsResponse
     */
    public function updateMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSCIMServerCredentialStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateSCIMServerCredentialStatusResponse
     */
    public function updateSCIMServerCredentialStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialId)) {
            $query['CredentialId'] = $request->credentialId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newStatus)) {
            $query['NewStatus'] = $request->newStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSCIMServerCredentialStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSCIMServerCredentialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSCIMServerCredentialStatusRequest $request
     *
     * @return UpdateSCIMServerCredentialStatusResponse
     */
    public function updateSCIMServerCredentialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSCIMServerCredentialStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newDisplayName)) {
            $query['NewDisplayName'] = $request->newDisplayName;
        }
        if (!Utils::isUnset($request->newEmail)) {
            $query['NewEmail'] = $request->newEmail;
        }
        if (!Utils::isUnset($request->newFirstName)) {
            $query['NewFirstName'] = $request->newFirstName;
        }
        if (!Utils::isUnset($request->newLastName)) {
            $query['NewLastName'] = $request->newLastName;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserMFAAuthenticationSettingsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateUserMFAAuthenticationSettingsResponse
     */
    public function updateUserMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userMFAAuthenticationSettings)) {
            $query['UserMFAAuthenticationSettings'] = $request->userMFAAuthenticationSettings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserMFAAuthenticationSettings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserMFAAuthenticationSettingsRequest $request
     *
     * @return UpdateUserMFAAuthenticationSettingsResponse
     */
    public function updateUserMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateUserStatusResponse
     */
    public function updateUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newStatus)) {
            $query['NewStatus'] = $request->newStatus;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserStatusRequest $request
     *
     * @return UpdateUserStatusResponse
     */
    public function updateUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserStatusWithOptions($request, $runtime);
    }
}
