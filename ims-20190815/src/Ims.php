<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddClientIdToOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddClientIdToOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddFingerprintToOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddFingerprintToOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddUserToGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddUserToGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\BindMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\BindMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ChangePasswordRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ChangePasswordResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAccessKeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAccessKeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAccessKeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAccessKeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAppSecretRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAppSecretResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DisableVirtualMFARequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DisableVirtualMFAResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GenerateCredentialReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountMFAInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAppSecretRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAppSecretResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetCredentialReportRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetCredentialReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetDefaultDomainResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserMFAInfoRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserMFAInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserSsoSettingsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersForGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersForGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveClientIdFromOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveClientIdFromOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveFingerprintFromOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveFingerprintFromOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveUserFromGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveUserFromGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetDefaultDomainRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetDefaultDomainResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetPasswordPolicyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceShrinkRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetUserSsoSettingsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetUserSsoSettingsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateAccessKeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateAccessKeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ims extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ims', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Adds a client ID to an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @param AddClientIdToOIDCProviderRequest $request AddClientIdToOIDCProviderRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddClientIdToOIDCProviderResponse AddClientIdToOIDCProviderResponse
     */
    public function addClientIdToOIDCProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->OIDCProviderName)) {
            $query['OIDCProviderName'] = $request->OIDCProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddClientIdToOIDCProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddClientIdToOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a client ID to an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @param AddClientIdToOIDCProviderRequest $request AddClientIdToOIDCProviderRequest
     *
     * @return AddClientIdToOIDCProviderResponse AddClientIdToOIDCProviderResponse
     */
    public function addClientIdToOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClientIdToOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a fingerprint to an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to add the fingerprint `902ef2deeb3c5b13ea4c3d5193629309e231****` to the OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param AddFingerprintToOIDCProviderRequest $request AddFingerprintToOIDCProviderRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddFingerprintToOIDCProviderResponse AddFingerprintToOIDCProviderResponse
     */
    public function addFingerprintToOIDCProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fingerprint)) {
            $query['Fingerprint'] = $request->fingerprint;
        }
        if (!Utils::isUnset($request->OIDCProviderName)) {
            $query['OIDCProviderName'] = $request->OIDCProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFingerprintToOIDCProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFingerprintToOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a fingerprint to an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to add the fingerprint `902ef2deeb3c5b13ea4c3d5193629309e231****` to the OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param AddFingerprintToOIDCProviderRequest $request AddFingerprintToOIDCProviderRequest
     *
     * @return AddFingerprintToOIDCProviderResponse AddFingerprintToOIDCProviderResponse
     */
    public function addFingerprintToOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFingerprintToOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * @summary 将RAM用户添加到指定的用户组
     *  *
     * @param AddUserToGroupRequest $request AddUserToGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserToGroupResponse AddUserToGroupResponse
     */
    public function addUserToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToGroup',
            'version'     => '2019-08-15',
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
     * @summary 将RAM用户添加到指定的用户组
     *  *
     * @param AddUserToGroupRequest $request AddUserToGroupRequest
     *
     * @return AddUserToGroupResponse AddUserToGroupResponse
     */
    public function addUserToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Binds a multi-factor authentication (MFA) device to a RAM user.
     *  *
     * @param BindMFADeviceRequest $request BindMFADeviceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return BindMFADeviceResponse BindMFADeviceResponse
     */
    public function bindMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authenticationCode1)) {
            $query['AuthenticationCode1'] = $request->authenticationCode1;
        }
        if (!Utils::isUnset($request->authenticationCode2)) {
            $query['AuthenticationCode2'] = $request->authenticationCode2;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindMFADevice',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds a multi-factor authentication (MFA) device to a RAM user.
     *  *
     * @param BindMFADeviceRequest $request BindMFADeviceRequest
     *
     * @return BindMFADeviceResponse BindMFADeviceResponse
     */
    public function bindMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 修改RAM用户的登录密码
     *  *
     * @description >  This operation is available only for RAM users. Before you call this operation, make sure that `AllowUserToChangePassword` in [SetSecurityPreference](https://help.aliyun.com/document_detail/43765.html) is set to `True`. The value True indicates that RAM users can change their passwords.
     *  *
     * @param ChangePasswordRequest $request ChangePasswordRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangePasswordResponse ChangePasswordResponse
     */
    public function changePasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newPassword)) {
            $query['NewPassword'] = $request->newPassword;
        }
        if (!Utils::isUnset($request->oldPassword)) {
            $query['OldPassword'] = $request->oldPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangePassword',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改RAM用户的登录密码
     *  *
     * @description >  This operation is available only for RAM users. Before you call this operation, make sure that `AllowUserToChangePassword` in [SetSecurityPreference](https://help.aliyun.com/document_detail/43765.html) is set to `True`. The value True indicates that RAM users can change their passwords.
     *  *
     * @param ChangePasswordRequest $request ChangePasswordRequest
     *
     * @return ChangePasswordResponse ChangePasswordResponse
     */
    public function changePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changePasswordWithOptions($request, $runtime);
    }

    /**
     * @summary 创建主账号或RAM用户访问密钥
     *  *
     * @param CreateAccessKeyRequest $request CreateAccessKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessKeyResponse CreateAccessKeyResponse
     */
    public function createAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessKey',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建主账号或RAM用户访问密钥
     *  *
     * @param CreateAccessKeyRequest $request CreateAccessKeyRequest
     *
     * @return CreateAccessKeyResponse CreateAccessKeyResponse
     */
    public function createAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application secret for the specified application.
     *  *
     * @param CreateAppSecretRequest $request CreateAppSecretRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppSecretResponse CreateAppSecretResponse
     */
    public function createAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppSecret',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an application secret for the specified application.
     *  *
     * @param CreateAppSecretRequest $request CreateAppSecretRequest
     *
     * @return CreateAppSecretResponse CreateAppSecretResponse
     */
    public function createAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSecretWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessTokenValidity)) {
            $query['AccessTokenValidity'] = $request->accessTokenValidity;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->isMultiTenant)) {
            $query['IsMultiTenant'] = $request->isMultiTenant;
        }
        if (!Utils::isUnset($request->predefinedScopes)) {
            $query['PredefinedScopes'] = $request->predefinedScopes;
        }
        if (!Utils::isUnset($request->redirectUris)) {
            $query['RedirectUris'] = $request->redirectUris;
        }
        if (!Utils::isUnset($request->refreshTokenValidity)) {
            $query['RefreshTokenValidity'] = $request->refreshTokenValidity;
        }
        if (!Utils::isUnset($request->requiredScopes)) {
            $query['RequiredScopes'] = $request->requiredScopes;
        }
        if (!Utils::isUnset($request->secretRequired)) {
            $query['SecretRequired'] = $request->secretRequired;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an application.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a RAM user group.
     *  *
     * @param CreateGroupRequest $request CreateGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2019-08-15',
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
     * @summary Creates a RAM user group.
     *  *
     * @param CreateGroupRequest $request CreateGroupRequest
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 开启指定RAM用户的控制台登录
     *  *
     * @param CreateLoginProfileRequest $request CreateLoginProfileRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoginProfileResponse CreateLoginProfileResponse
     */
    public function createLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->MFABindRequired)) {
            $query['MFABindRequired'] = $request->MFABindRequired;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordResetRequired)) {
            $query['PasswordResetRequired'] = $request->passwordResetRequired;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoginProfile',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启指定RAM用户的控制台登录
     *  *
     * @param CreateLoginProfileRequest $request CreateLoginProfileRequest
     *
     * @return CreateLoginProfileResponse CreateLoginProfileResponse
     */
    public function createLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an OpenID Connect (OIDC) identity provider (IdP) to configure a trust relationship between Alibaba Cloud and an external IdP. This topic provides an example on how to create an IdP named TestOIDCProvider to configure a trust relationship between the external IdP Okta and Alibaba Cloud.
     *  *
     * @description ### Prerequisites
     * Before you call this operation, make sure that the information such as the URL of the issuer, the fingerprints of HTTPS certificates, and the client IDs are obtained from an external (IdP, such as Google G Suite or Okta.
     * ### Limits
     * *   You can create a maximum of 100 OIDC IdPs in an Alibaba Cloud account.
     * *   You can add a maximum of 20 client IDs to an OIDC IdP.
     * *   You can add a maximum of five fingerprints to an OIDC IdP.
     * ###
     * This topic provides an example on how to create an IdP named `TestOIDCProvider` to configure a trust relationship between the external IdP and Alibaba Cloud.
     *  *
     * @param CreateOIDCProviderRequest $request CreateOIDCProviderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOIDCProviderResponse CreateOIDCProviderResponse
     */
    public function createOIDCProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIds)) {
            $query['ClientIds'] = $request->clientIds;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fingerprints)) {
            $query['Fingerprints'] = $request->fingerprints;
        }
        if (!Utils::isUnset($request->issuanceLimitTime)) {
            $query['IssuanceLimitTime'] = $request->issuanceLimitTime;
        }
        if (!Utils::isUnset($request->issuerUrl)) {
            $query['IssuerUrl'] = $request->issuerUrl;
        }
        if (!Utils::isUnset($request->OIDCProviderName)) {
            $query['OIDCProviderName'] = $request->OIDCProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOIDCProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an OpenID Connect (OIDC) identity provider (IdP) to configure a trust relationship between Alibaba Cloud and an external IdP. This topic provides an example on how to create an IdP named TestOIDCProvider to configure a trust relationship between the external IdP Okta and Alibaba Cloud.
     *  *
     * @description ### Prerequisites
     * Before you call this operation, make sure that the information such as the URL of the issuer, the fingerprints of HTTPS certificates, and the client IDs are obtained from an external (IdP, such as Google G Suite or Okta.
     * ### Limits
     * *   You can create a maximum of 100 OIDC IdPs in an Alibaba Cloud account.
     * *   You can add a maximum of 20 client IDs to an OIDC IdP.
     * *   You can add a maximum of five fingerprints to an OIDC IdP.
     * ###
     * This topic provides an example on how to create an IdP named `TestOIDCProvider` to configure a trust relationship between the external IdP and Alibaba Cloud.
     *  *
     * @param CreateOIDCProviderRequest $request CreateOIDCProviderRequest
     *
     * @return CreateOIDCProviderResponse CreateOIDCProviderResponse
     */
    public function createOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * @summary 创建角色SSO身份提供商
     *  *
     * @param CreateSAMLProviderRequest $request CreateSAMLProviderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSAMLProviderResponse CreateSAMLProviderResponse
     */
    public function createSAMLProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encodedSAMLMetadataDocument)) {
            $query['EncodedSAMLMetadataDocument'] = $request->encodedSAMLMetadataDocument;
        }
        if (!Utils::isUnset($request->SAMLProviderName)) {
            $query['SAMLProviderName'] = $request->SAMLProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSAMLProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSAMLProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建角色SSO身份提供商
     *  *
     * @param CreateSAMLProviderRequest $request CreateSAMLProviderRequest
     *
     * @return CreateSAMLProviderResponse CreateSAMLProviderResponse
     */
    public function createSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a RAM user.
     *  *
     * @description This topic provides an example on how to create a RAM user named `test`.
     *  *
     * @param CreateUserRequest $request CreateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->mobilePhone)) {
            $query['MobilePhone'] = $request->mobilePhone;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2019-08-15',
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
     * @summary Creates a RAM user.
     *  *
     * @description This topic provides an example on how to create a RAM user named `test`.
     *  *
     * @param CreateUserRequest $request CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @summary 创建多因素认证设备
     *  *
     * @param CreateVirtualMFADeviceRequest $request CreateVirtualMFADeviceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVirtualMFADeviceResponse CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->virtualMFADeviceName)) {
            $query['VirtualMFADeviceName'] = $request->virtualMFADeviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualMFADevice',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建多因素认证设备
     *  *
     * @param CreateVirtualMFADeviceRequest $request CreateVirtualMFADeviceRequest
     *
     * @return CreateVirtualMFADeviceResponse CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除用户的访问密钥
     *  *
     * @param DeleteAccessKeyRequest $request DeleteAccessKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessKeyResponse DeleteAccessKeyResponse
     */
    public function deleteAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessKey',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除用户的访问密钥
     *  *
     * @param DeleteAccessKeyRequest $request DeleteAccessKeyRequest
     *
     * @return DeleteAccessKeyResponse DeleteAccessKeyResponse
     */
    public function deleteAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Delete the application secret for the specified application.
     *  *
     * @param DeleteAppSecretRequest $request DeleteAppSecretRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppSecretResponse DeleteAppSecretResponse
     */
    public function deleteAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appSecretId)) {
            $query['AppSecretId'] = $request->appSecretId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppSecret',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete the application secret for the specified application.
     *  *
     * @param DeleteAppSecretRequest $request DeleteAppSecretRequest
     *
     * @return DeleteAppSecretResponse DeleteAppSecretResponse
     */
    public function deleteAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppSecretWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an application.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplication',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an application.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary 删除指定的用户组
     *  *
     * @description Before you delete a RAM user group, make sure that no policies are attached to the group and no RAM users are included in the group.
     *  *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2019-08-15',
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
     * @summary 删除指定的用户组
     *  *
     * @description Before you delete a RAM user group, make sure that no policies are attached to the group and no RAM users are included in the group.
     *  *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 关闭指定RAM用户的控制台登录
     *  *
     * @param DeleteLoginProfileRequest $request DeleteLoginProfileRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoginProfileResponse DeleteLoginProfileResponse
     */
    public function deleteLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoginProfile',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭指定RAM用户的控制台登录
     *  *
     * @param DeleteLoginProfileRequest $request DeleteLoginProfileRequest
     *
     * @return DeleteLoginProfileResponse DeleteLoginProfileResponse
     */
    public function deleteLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to remove the OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param DeleteOIDCProviderRequest $request DeleteOIDCProviderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOIDCProviderResponse DeleteOIDCProviderResponse
     */
    public function deleteOIDCProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->OIDCProviderName)) {
            $query['OIDCProviderName'] = $request->OIDCProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOIDCProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to remove the OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param DeleteOIDCProviderRequest $request DeleteOIDCProviderRequest
     *
     * @return DeleteOIDCProviderResponse DeleteOIDCProviderResponse
     */
    public function deleteOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * @summary 删除指定的角色SSO身份提供商
     *  *
     * @param DeleteSAMLProviderRequest $request DeleteSAMLProviderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSAMLProviderResponse DeleteSAMLProviderResponse
     */
    public function deleteSAMLProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SAMLProviderName)) {
            $query['SAMLProviderName'] = $request->SAMLProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSAMLProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSAMLProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定的角色SSO身份提供商
     *  *
     * @param DeleteSAMLProviderRequest $request DeleteSAMLProviderRequest
     *
     * @return DeleteSAMLProviderResponse DeleteSAMLProviderResponse
     */
    public function deleteSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * @summary 删除RAM用户
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2019-08-15',
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
     * @summary 删除RAM用户
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @summary 删除多因素认证设备
     *  *
     * @param DeleteVirtualMFADeviceRequest $request DeleteVirtualMFADeviceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVirtualMFADeviceResponse DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVirtualMFADevice',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除多因素认证设备
     *  *
     * @param DeleteVirtualMFADeviceRequest $request DeleteVirtualMFADeviceRequest
     *
     * @return DeleteVirtualMFADeviceResponse DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑并删除多因素认证设备
     *  *
     * @param DisableVirtualMFARequest $request DisableVirtualMFARequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableVirtualMFAResponse DisableVirtualMFAResponse
     */
    public function disableVirtualMFAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableVirtualMFA',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableVirtualMFAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑并删除多因素认证设备
     *  *
     * @param DisableVirtualMFARequest $request DisableVirtualMFARequest
     *
     * @return DisableVirtualMFAResponse DisableVirtualMFAResponse
     */
    public function disableVirtualMFA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVirtualMFAWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a user credential report.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateCredentialReportResponse GenerateCredentialReportResponse
     */
    public function generateCredentialReportWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GenerateCredentialReport',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateCredentialReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a user credential report.
     *  *
     * @return GenerateCredentialReportResponse GenerateCredentialReportResponse
     */
    public function generateCredentialReport()
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCredentialReportWithOptions($runtime);
    }

    /**
     * @summary Queries the time when an AccessKey pair was used for the last time.
     *  *
     * @param GetAccessKeyLastUsedRequest $request GetAccessKeyLastUsedRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessKeyLastUsedResponse GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessKeyLastUsed',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessKeyLastUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the time when an AccessKey pair was used for the last time.
     *  *
     * @param GetAccessKeyLastUsedRequest $request GetAccessKeyLastUsedRequest
     *
     * @return GetAccessKeyLastUsedResponse GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedWithOptions($request, $runtime);
    }

    /**
     * @summary 查询主账号多因素认证设备信息
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountMFAInfoResponse GetAccountMFAInfoResponse
     */
    public function getAccountMFAInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAccountMFAInfo',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountMFAInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询主账号多因素认证设备信息
     *  *
     * @return GetAccountMFAInfoResponse GetAccountMFAInfoResponse
     */
    public function getAccountMFAInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountMFAInfoWithOptions($runtime);
    }

    /**
     * @summary 查询阿里云账号的安全报告
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountSecurityPracticeReportResponse GetAccountSecurityPracticeReportResponse
     */
    public function getAccountSecurityPracticeReportWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAccountSecurityPracticeReport',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountSecurityPracticeReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询阿里云账号的安全报告
     *  *
     * @return GetAccountSecurityPracticeReportResponse GetAccountSecurityPracticeReportResponse
     */
    public function getAccountSecurityPracticeReport()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSecurityPracticeReportWithOptions($runtime);
    }

    /**
     * @summary 查询主账号概览信息
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountSummaryResponse GetAccountSummaryResponse
     */
    public function getAccountSummaryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAccountSummary',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询主账号概览信息
     *  *
     * @return GetAccountSummaryResponse GetAccountSummaryResponse
     */
    public function getAccountSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSummaryWithOptions($runtime);
    }

    /**
     * @summary Queries the details of an application secret.
     *  *
     * @param GetAppSecretRequest $request GetAppSecretRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppSecretResponse GetAppSecretResponse
     */
    public function getAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appSecretId)) {
            $query['AppSecretId'] = $request->appSecretId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppSecret',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an application secret.
     *  *
     * @param GetAppSecretRequest $request GetAppSecretRequest
     *
     * @return GetAppSecretResponse GetAppSecretResponse
     */
    public function getAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSecretWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration information about an application.
     *  *
     * @description This topic provides an example on how to query the configurations of an application named `472457090344041****`.
     *  *
     * @param GetApplicationRequest $request GetApplicationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration information about an application.
     *  *
     * @description This topic provides an example on how to query the configurations of an application named `472457090344041****`.
     *  *
     * @param GetApplicationRequest $request GetApplicationRequest
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the user credential reports of an Alibaba Cloud account.
     *  *
     * @param GetCredentialReportRequest $request GetCredentialReportRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCredentialReportResponse GetCredentialReportResponse
     */
    public function getCredentialReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCredentialReport',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCredentialReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the user credential reports of an Alibaba Cloud account.
     *  *
     * @param GetCredentialReportRequest $request GetCredentialReportRequest
     *
     * @return GetCredentialReportResponse GetCredentialReportResponse
     */
    public function getCredentialReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCredentialReportWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the default domain name of an Alibaba Cloud account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDefaultDomainResponse GetDefaultDomainResponse
     */
    public function getDefaultDomainWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetDefaultDomain',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDefaultDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the default domain name of an Alibaba Cloud account.
     *  *
     * @return GetDefaultDomainResponse GetDefaultDomainResponse
     */
    public function getDefaultDomain()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultDomainWithOptions($runtime);
    }

    /**
     * @summary Queries the information about a Resource Access Management (RAM) user group.
     *  *
     * @param GetGroupRequest $request GetGroupRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroup',
            'version'     => '2019-08-15',
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
     * @summary Queries the information about a Resource Access Management (RAM) user group.
     *  *
     * @param GetGroupRequest $request GetGroupRequest
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logon configurations of a Resource Access Management (RAM) user.
     *  *
     * @param GetLoginProfileRequest $request GetLoginProfileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoginProfileResponse GetLoginProfileResponse
     */
    public function getLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLoginProfile',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logon configurations of a Resource Access Management (RAM) user.
     *  *
     * @param GetLoginProfileRequest $request GetLoginProfileRequest
     *
     * @return GetLoginProfileResponse GetLoginProfileResponse
     */
    public function getLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an OIDC IdP.
     *  *
     * @description ###
     * This topic provides an example on how to query the information about an OpenID Connect (OIDC) identity provider (IdP) named `TestOIDCProvider`.
     *  *
     * @param GetOIDCProviderRequest $request GetOIDCProviderRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOIDCProviderResponse GetOIDCProviderResponse
     */
    public function getOIDCProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->OIDCProviderName)) {
            $query['OIDCProviderName'] = $request->OIDCProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOIDCProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an OIDC IdP.
     *  *
     * @description ###
     * This topic provides an example on how to query the information about an OpenID Connect (OIDC) identity provider (IdP) named `TestOIDCProvider`.
     *  *
     * @param GetOIDCProviderRequest $request GetOIDCProviderRequest
     *
     * @return GetOIDCProviderResponse GetOIDCProviderResponse
     */
    public function getOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the password policy for RAM users.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPasswordPolicyResponse GetPasswordPolicyResponse
     */
    public function getPasswordPolicyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetPasswordPolicy',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPasswordPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the password policy for RAM users.
     *  *
     * @return GetPasswordPolicyResponse GetPasswordPolicyResponse
     */
    public function getPasswordPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordPolicyWithOptions($runtime);
    }

    /**
     * @summary Queries the information about an identity provider (IdP) for role-based single sign-on (SSO).
     *  *
     * @param GetSAMLProviderRequest $request GetSAMLProviderRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSAMLProviderResponse GetSAMLProviderResponse
     */
    public function getSAMLProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SAMLProviderName)) {
            $query['SAMLProviderName'] = $request->SAMLProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSAMLProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSAMLProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an identity provider (IdP) for role-based single sign-on (SSO).
     *  *
     * @param GetSAMLProviderRequest $request GetSAMLProviderRequest
     *
     * @return GetSAMLProviderResponse GetSAMLProviderResponse
     */
    public function getSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the security preferences for RAM users.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSecurityPreferenceResponse GetSecurityPreferenceResponse
     */
    public function getSecurityPreferenceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetSecurityPreference',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSecurityPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the security preferences for RAM users.
     *  *
     * @return GetSecurityPreferenceResponse GetSecurityPreferenceResponse
     */
    public function getSecurityPreference()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityPreferenceWithOptions($runtime);
    }

    /**
     * @summary Queries the information about a RAM user.
     *  *
     * @description This topic provides an example to show how to query the information about a RAM user named `test@example.onaliyun.com`.
     *  *
     * @param GetUserRequest $request GetUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2019-08-15',
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
     * @summary Queries the information about a RAM user.
     *  *
     * @description This topic provides an example to show how to query the information about a RAM user named `test@example.onaliyun.com`.
     *  *
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @summary 查询RAM用户多因素认证设备信息
     *  *
     * @param GetUserMFAInfoRequest $request GetUserMFAInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserMFAInfoResponse GetUserMFAInfoResponse
     */
    public function getUserMFAInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserMFAInfo',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserMFAInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询RAM用户多因素认证设备信息
     *  *
     * @param GetUserMFAInfoRequest $request GetUserMFAInfoRequest
     *
     * @return GetUserMFAInfoResponse GetUserMFAInfoResponse
     */
    public function getUserMFAInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMFAInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户SSO身份提供商信息
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserSsoSettingsResponse GetUserSsoSettingsResponse
     */
    public function getUserSsoSettingsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetUserSsoSettings',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserSsoSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户SSO身份提供商信息
     *  *
     * @return GetUserSsoSettingsResponse GetUserSsoSettingsResponse
     */
    public function getUserSsoSettings()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserSsoSettingsWithOptions($runtime);
    }

    /**
     * @summary 获取用户安全认证的信息
     *  *
     * @param GetVerificationInfoRequest $request GetVerificationInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVerificationInfoResponse GetVerificationInfoResponse
     */
    public function getVerificationInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVerificationInfo',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVerificationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户安全认证的信息
     *  *
     * @param GetVerificationInfoRequest $request GetVerificationInfoRequest
     *
     * @return GetVerificationInfoResponse GetVerificationInfoResponse
     */
    public function getVerificationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVerificationInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询主账号或RAM用户访问密钥列表
     *  *
     * @param ListAccessKeysRequest $request ListAccessKeysRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessKeysResponse ListAccessKeysResponse
     */
    public function listAccessKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessKeys',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询主账号或RAM用户访问密钥列表
     *  *
     * @param ListAccessKeysRequest $request ListAccessKeysRequest
     *
     * @return ListAccessKeysResponse ListAccessKeysResponse
     */
    public function listAccessKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the secret IDs of an application.
     *  *
     * @param ListAppSecretIdsRequest $request ListAppSecretIdsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppSecretIdsResponse ListAppSecretIdsResponse
     */
    public function listAppSecretIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppSecretIds',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppSecretIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the secret IDs of an application.
     *  *
     * @param ListAppSecretIdsRequest $request ListAppSecretIdsRequest
     *
     * @return ListAppSecretIdsResponse ListAppSecretIdsResponse
     */
    public function listAppSecretIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppSecretIdsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists the created applications.
     *  *
     * @description This topic provides an example on how to query the applications within the current account. The returned result shows that only one application named `myapp` belongs to the current account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplicationsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListApplications',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Lists the created applications.
     *  *
     * @description This topic provides an example on how to query the applications within the current account. The returned result shows that only one application named `myapp` belongs to the current account.
     *  *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplications()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($runtime);
    }

    /**
     * @summary Queries RAM user groups.
     *  *
     * @param ListGroupsRequest $request ListGroupsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2019-08-15',
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
     * @summary Queries RAM user groups.
     *  *
     * @param ListGroupsRequest $request ListGroupsRequest
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the RAM user groups to which a RAM user belongs.
     *  *
     * @param ListGroupsForUserRequest $request ListGroupsForUserRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsForUserResponse ListGroupsForUserResponse
     */
    public function listGroupsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupsForUser',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the RAM user groups to which a RAM user belongs.
     *  *
     * @param ListGroupsForUserRequest $request ListGroupsForUserRequest
     *
     * @return ListGroupsForUserResponse ListGroupsForUserResponse
     */
    public function listGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries OIDC IdPs.
     *  *
     * @description ###
     * This topic provides an example on how to query all OpenID Connect (OIDC) identity providers (IdPs) within your Alibaba Cloud account. The response shows that your Alibaba Cloud account has only one OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param ListOIDCProvidersRequest $request ListOIDCProvidersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOIDCProvidersResponse ListOIDCProvidersResponse
     */
    public function listOIDCProvidersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOIDCProviders',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOIDCProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries OIDC IdPs.
     *  *
     * @description ###
     * This topic provides an example on how to query all OpenID Connect (OIDC) identity providers (IdPs) within your Alibaba Cloud account. The response shows that your Alibaba Cloud account has only one OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param ListOIDCProvidersRequest $request ListOIDCProvidersRequest
     *
     * @return ListOIDCProvidersResponse ListOIDCProvidersResponse
     */
    public function listOIDCProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOIDCProvidersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries predefined application permissions.
     *  *
     * @param ListPredefinedScopesRequest $request ListPredefinedScopesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPredefinedScopesResponse ListPredefinedScopesResponse
     */
    public function listPredefinedScopesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPredefinedScopes',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPredefinedScopesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries predefined application permissions.
     *  *
     * @param ListPredefinedScopesRequest $request ListPredefinedScopesRequest
     *
     * @return ListPredefinedScopesResponse ListPredefinedScopesResponse
     */
    public function listPredefinedScopes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPredefinedScopesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询角色SSO身份提供商列表
     *  *
     * @param ListSAMLProvidersRequest $request ListSAMLProvidersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSAMLProvidersResponse ListSAMLProvidersResponse
     */
    public function listSAMLProvidersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSAMLProviders',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSAMLProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询角色SSO身份提供商列表
     *  *
     * @param ListSAMLProvidersRequest $request ListSAMLProvidersRequest
     *
     * @return ListSAMLProvidersResponse ListSAMLProvidersResponse
     */
    public function listSAMLProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSAMLProvidersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags that are added resources.
     *  *
     * @description ###
     * You must specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     * *   `ResourceId.N`
     * *   `Tag.N.Key`
     * *   `Tag.N.Key` and `Tag.N.Value`
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourcePrincipalName)) {
            $query['ResourcePrincipalName'] = $request->resourcePrincipalName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags that are added resources.
     *  *
     * @description ###
     * You must specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     * *   `ResourceId.N`
     * *   `Tag.N.Key`
     * *   `Tag.N.Key` and `Tag.N.Value`
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the basic information about all RAM users.
     *  *
     * @description You can call the following API operations to query the information about all RAM users:
     * *   ListUsers: queries the details of all RAM users.
     * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *  *
     * @param ListUserBasicInfosRequest $request ListUserBasicInfosRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserBasicInfosResponse ListUserBasicInfosResponse
     */
    public function listUserBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserBasicInfos',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the basic information about all RAM users.
     *  *
     * @description You can call the following API operations to query the information about all RAM users:
     * *   ListUsers: queries the details of all RAM users.
     * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *  *
     * @param ListUserBasicInfosRequest $request ListUserBasicInfosRequest
     *
     * @return ListUserBasicInfosResponse ListUserBasicInfosResponse
     */
    public function listUserBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of all RAM users.
     *  *
     * @description ### [](#)
     * You can call the following API operations to query the details of all RAM users:
     * *   ListUsers: queries the details of all RAM users.
     * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2019-08-15',
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
     * @summary Queries the details of all RAM users.
     *  *
     * @description ### [](#)
     * You can call the following API operations to query the details of all RAM users:
     * *   ListUsers: queries the details of all RAM users.
     * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Resource Access Management (RAM) users in a RAM user group.
     *  *
     * @param ListUsersForGroupRequest $request ListUsersForGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersForGroupResponse ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsersForGroup',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Resource Access Management (RAM) users in a RAM user group.
     *  *
     * @param ListUsersForGroupRequest $request ListUsersForGroupRequest
     *
     * @return ListUsersForGroupResponse ListUsersForGroupResponse
     */
    public function listUsersForGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries multi-factor authentication (MFA) devices.
     *  *
     * @param ListVirtualMFADevicesRequest $request ListVirtualMFADevicesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVirtualMFADevicesResponse ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVirtualMFADevices',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVirtualMFADevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries multi-factor authentication (MFA) devices.
     *  *
     * @param ListVirtualMFADevicesRequest $request ListVirtualMFADevicesRequest
     *
     * @return ListVirtualMFADevicesResponse ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualMFADevicesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a client ID from an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to remove the client ID `498469743454717****` from the OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param RemoveClientIdFromOIDCProviderRequest $request RemoveClientIdFromOIDCProviderRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveClientIdFromOIDCProviderResponse RemoveClientIdFromOIDCProviderResponse
     */
    public function removeClientIdFromOIDCProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->OIDCProviderName)) {
            $query['OIDCProviderName'] = $request->OIDCProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveClientIdFromOIDCProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveClientIdFromOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a client ID from an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to remove the client ID `498469743454717****` from the OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param RemoveClientIdFromOIDCProviderRequest $request RemoveClientIdFromOIDCProviderRequest
     *
     * @return RemoveClientIdFromOIDCProviderResponse RemoveClientIdFromOIDCProviderResponse
     */
    public function removeClientIdFromOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClientIdFromOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a fingerprint from an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to remove the fingerprint `6938fd4d98bab03faadb97b34396831e3780****` from the OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param RemoveFingerprintFromOIDCProviderRequest $request RemoveFingerprintFromOIDCProviderRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveFingerprintFromOIDCProviderResponse RemoveFingerprintFromOIDCProviderResponse
     */
    public function removeFingerprintFromOIDCProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fingerprint)) {
            $query['Fingerprint'] = $request->fingerprint;
        }
        if (!Utils::isUnset($request->OIDCProviderName)) {
            $query['OIDCProviderName'] = $request->OIDCProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveFingerprintFromOIDCProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveFingerprintFromOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a fingerprint from an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to remove the fingerprint `6938fd4d98bab03faadb97b34396831e3780****` from the OIDC IdP named `TestOIDCProvider`.
     *  *
     * @param RemoveFingerprintFromOIDCProviderRequest $request RemoveFingerprintFromOIDCProviderRequest
     *
     * @return RemoveFingerprintFromOIDCProviderResponse RemoveFingerprintFromOIDCProviderResponse
     */
    public function removeFingerprintFromOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeFingerprintFromOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * @summary 将RAM用户从用户组中移除
     *  *
     * @param RemoveUserFromGroupRequest $request RemoveUserFromGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserFromGroupResponse RemoveUserFromGroupResponse
     */
    public function removeUserFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserFromGroup',
            'version'     => '2019-08-15',
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
     * @summary 将RAM用户从用户组中移除
     *  *
     * @param RemoveUserFromGroupRequest $request RemoveUserFromGroupRequest
     *
     * @return RemoveUserFromGroupResponse RemoveUserFromGroupResponse
     */
    public function removeUserFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the default domain name.
     *  *
     * @param SetDefaultDomainRequest $request SetDefaultDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultDomainResponse SetDefaultDomainResponse
     */
    public function setDefaultDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defaultDomainName)) {
            $query['DefaultDomainName'] = $request->defaultDomainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultDomain',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the default domain name.
     *  *
     * @param SetDefaultDomainRequest $request SetDefaultDomainRequest
     *
     * @return SetDefaultDomainResponse SetDefaultDomainResponse
     */
    public function setDefaultDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the password policy for RAM users.
     *  *
     * @param SetPasswordPolicyRequest $request SetPasswordPolicyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPasswordPolicyResponse SetPasswordPolicyResponse
     */
    public function setPasswordPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hardExpire)) {
            $query['HardExpire'] = $request->hardExpire;
        }
        if (!Utils::isUnset($request->maxLoginAttemps)) {
            $query['MaxLoginAttemps'] = $request->maxLoginAttemps;
        }
        if (!Utils::isUnset($request->maxPasswordAge)) {
            $query['MaxPasswordAge'] = $request->maxPasswordAge;
        }
        if (!Utils::isUnset($request->minimumPasswordDifferentCharacter)) {
            $query['MinimumPasswordDifferentCharacter'] = $request->minimumPasswordDifferentCharacter;
        }
        if (!Utils::isUnset($request->minimumPasswordLength)) {
            $query['MinimumPasswordLength'] = $request->minimumPasswordLength;
        }
        if (!Utils::isUnset($request->passwordNotContainUserName)) {
            $query['PasswordNotContainUserName'] = $request->passwordNotContainUserName;
        }
        if (!Utils::isUnset($request->passwordReusePrevention)) {
            $query['PasswordReusePrevention'] = $request->passwordReusePrevention;
        }
        if (!Utils::isUnset($request->requireLowercaseCharacters)) {
            $query['RequireLowercaseCharacters'] = $request->requireLowercaseCharacters;
        }
        if (!Utils::isUnset($request->requireNumbers)) {
            $query['RequireNumbers'] = $request->requireNumbers;
        }
        if (!Utils::isUnset($request->requireSymbols)) {
            $query['RequireSymbols'] = $request->requireSymbols;
        }
        if (!Utils::isUnset($request->requireUppercaseCharacters)) {
            $query['RequireUppercaseCharacters'] = $request->requireUppercaseCharacters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPasswordPolicy',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPasswordPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the password policy for RAM users.
     *  *
     * @param SetPasswordPolicyRequest $request SetPasswordPolicyRequest
     *
     * @return SetPasswordPolicyResponse SetPasswordPolicyResponse
     */
    public function setPasswordPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Configures security preferences for a RAM user.
     *  *
     * @description ###
     * This topic provides an example on how to enable multi-factor authentication (MFA) only for RAM users who initiated unusual logons.
     *  *
     * @param SetSecurityPreferenceRequest $tmpReq  SetSecurityPreferenceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSecurityPreferenceResponse SetSecurityPreferenceResponse
     */
    public function setSecurityPreferenceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetSecurityPreferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->verificationTypes)) {
            $request->verificationTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->verificationTypes, 'VerificationTypes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->allowUserToChangePassword)) {
            $query['AllowUserToChangePassword'] = $request->allowUserToChangePassword;
        }
        if (!Utils::isUnset($request->allowUserToLoginWithPasskey)) {
            $query['AllowUserToLoginWithPasskey'] = $request->allowUserToLoginWithPasskey;
        }
        if (!Utils::isUnset($request->allowUserToManageAccessKeys)) {
            $query['AllowUserToManageAccessKeys'] = $request->allowUserToManageAccessKeys;
        }
        if (!Utils::isUnset($request->allowUserToManageMFADevices)) {
            $query['AllowUserToManageMFADevices'] = $request->allowUserToManageMFADevices;
        }
        if (!Utils::isUnset($request->allowUserToManagePersonalDingTalk)) {
            $query['AllowUserToManagePersonalDingTalk'] = $request->allowUserToManagePersonalDingTalk;
        }
        if (!Utils::isUnset($request->enableSaveMFATicket)) {
            $query['EnableSaveMFATicket'] = $request->enableSaveMFATicket;
        }
        if (!Utils::isUnset($request->loginNetworkMasks)) {
            $query['LoginNetworkMasks'] = $request->loginNetworkMasks;
        }
        if (!Utils::isUnset($request->loginSessionDuration)) {
            $query['LoginSessionDuration'] = $request->loginSessionDuration;
        }
        if (!Utils::isUnset($request->MFAOperationForLogin)) {
            $query['MFAOperationForLogin'] = $request->MFAOperationForLogin;
        }
        if (!Utils::isUnset($request->operationForRiskLogin)) {
            $query['OperationForRiskLogin'] = $request->operationForRiskLogin;
        }
        if (!Utils::isUnset($request->verificationTypesShrink)) {
            $query['VerificationTypes'] = $request->verificationTypesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSecurityPreference',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSecurityPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures security preferences for a RAM user.
     *  *
     * @description ###
     * This topic provides an example on how to enable multi-factor authentication (MFA) only for RAM users who initiated unusual logons.
     *  *
     * @param SetSecurityPreferenceRequest $request SetSecurityPreferenceRequest
     *
     * @return SetSecurityPreferenceResponse SetSecurityPreferenceResponse
     */
    public function setSecurityPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSecurityPreferenceWithOptions($request, $runtime);
    }

    /**
     * @summary 设置用户SSO身份提供商信息
     *  *
     * @param SetUserSsoSettingsRequest $request SetUserSsoSettingsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetUserSsoSettingsResponse SetUserSsoSettingsResponse
     */
    public function setUserSsoSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auxiliaryDomain)) {
            $query['AuxiliaryDomain'] = $request->auxiliaryDomain;
        }
        if (!Utils::isUnset($request->metadataDocument)) {
            $query['MetadataDocument'] = $request->metadataDocument;
        }
        if (!Utils::isUnset($request->ssoEnabled)) {
            $query['SsoEnabled'] = $request->ssoEnabled;
        }
        if (!Utils::isUnset($request->ssoLoginWithDomain)) {
            $query['SsoLoginWithDomain'] = $request->ssoLoginWithDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetUserSsoSettings',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetUserSsoSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置用户SSO身份提供商信息
     *  *
     * @param SetUserSsoSettingsRequest $request SetUserSsoSettingsRequest
     *
     * @return SetUserSsoSettingsResponse SetUserSsoSettingsResponse
     */
    public function setUserSsoSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserSsoSettingsWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourcePrincipalName)) {
            $query['ResourcePrincipalName'] = $request->resourcePrincipalName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds tags to resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 为RAM用户解绑多因素认证设备
     *  *
     * @param UnbindMFADeviceRequest $request UnbindMFADeviceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindMFADeviceResponse UnbindMFADeviceResponse
     */
    public function unbindMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindMFADevice',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为RAM用户解绑多因素认证设备
     *  *
     * @param UnbindMFADeviceRequest $request UnbindMFADeviceRequest
     *
     * @return UnbindMFADeviceResponse UnbindMFADeviceResponse
     */
    public function unbindMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from a resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourcePrincipalName)) {
            $query['ResourcePrincipalName'] = $request->resourcePrincipalName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from a resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 修改访问密钥状态
     *  *
     * @param UpdateAccessKeyRequest $request UpdateAccessKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAccessKeyResponse UpdateAccessKeyResponse
     */
    public function updateAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccessKey',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改访问密钥状态
     *  *
     * @param UpdateAccessKeyRequest $request UpdateAccessKeyRequest
     *
     * @return UpdateAccessKeyResponse UpdateAccessKeyResponse
     */
    public function updateAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a specified application.
     *  *
     * @param UpdateApplicationRequest $request UpdateApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationResponse UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->newAccessTokenValidity)) {
            $query['NewAccessTokenValidity'] = $request->newAccessTokenValidity;
        }
        if (!Utils::isUnset($request->newDisplayName)) {
            $query['NewDisplayName'] = $request->newDisplayName;
        }
        if (!Utils::isUnset($request->newIsMultiTenant)) {
            $query['NewIsMultiTenant'] = $request->newIsMultiTenant;
        }
        if (!Utils::isUnset($request->newPredefinedScopes)) {
            $query['NewPredefinedScopes'] = $request->newPredefinedScopes;
        }
        if (!Utils::isUnset($request->newRedirectUris)) {
            $query['NewRedirectUris'] = $request->newRedirectUris;
        }
        if (!Utils::isUnset($request->newRefreshTokenValidity)) {
            $query['NewRefreshTokenValidity'] = $request->newRefreshTokenValidity;
        }
        if (!Utils::isUnset($request->newRequiredScopes)) {
            $query['NewRequiredScopes'] = $request->newRequiredScopes;
        }
        if (!Utils::isUnset($request->newSecretRequired)) {
            $query['NewSecretRequired'] = $request->newSecretRequired;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplication',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a specified application.
     *  *
     * @param UpdateApplicationRequest $request UpdateApplicationRequest
     *
     * @return UpdateApplicationResponse UpdateApplicationResponse
     */
    public function updateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information of a RAM user group.
     *  *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->newComments)) {
            $query['NewComments'] = $request->newComments;
        }
        if (!Utils::isUnset($request->newDisplayName)) {
            $query['NewDisplayName'] = $request->newDisplayName;
        }
        if (!Utils::isUnset($request->newGroupName)) {
            $query['NewGroupName'] = $request->newGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroup',
            'version'     => '2019-08-15',
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
     * @summary Modifies the information of a RAM user group.
     *  *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 修改RAM用户的控制台登录信息
     *  *
     * @param UpdateLoginProfileRequest $request UpdateLoginProfileRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoginProfileResponse UpdateLoginProfileResponse
     */
    public function updateLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->MFABindRequired)) {
            $query['MFABindRequired'] = $request->MFABindRequired;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordResetRequired)) {
            $query['PasswordResetRequired'] = $request->passwordResetRequired;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoginProfile',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改RAM用户的控制台登录信息
     *  *
     * @param UpdateLoginProfileRequest $request UpdateLoginProfileRequest
     *
     * @return UpdateLoginProfileResponse UpdateLoginProfileResponse
     */
    public function updateLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description and client IDs of an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to change the description of the OIDC IdP named `TestOIDCProvider` to `This is a new OIDC Provider.`
     *  *
     * @param UpdateOIDCProviderRequest $request UpdateOIDCProviderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOIDCProviderResponse UpdateOIDCProviderResponse
     */
    public function updateOIDCProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIds)) {
            $query['ClientIds'] = $request->clientIds;
        }
        if (!Utils::isUnset($request->issuanceLimitTime)) {
            $query['IssuanceLimitTime'] = $request->issuanceLimitTime;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->OIDCProviderName)) {
            $query['OIDCProviderName'] = $request->OIDCProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOIDCProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description and client IDs of an OpenID Connect (OIDC) identity provider (IdP).
     *  *
     * @description ###
     * This topic provides an example on how to change the description of the OIDC IdP named `TestOIDCProvider` to `This is a new OIDC Provider.`
     *  *
     * @param UpdateOIDCProviderRequest $request UpdateOIDCProviderRequest
     *
     * @return UpdateOIDCProviderResponse UpdateOIDCProviderResponse
     */
    public function updateOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * @summary 修改角色SSO身份提供商信息
     *  *
     * @description This topic provides an example on how to change the description of an IdP named `test-provider` to `This is a new provider.`
     *  *
     * @param UpdateSAMLProviderRequest $request UpdateSAMLProviderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSAMLProviderResponse UpdateSAMLProviderResponse
     */
    public function updateSAMLProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newEncodedSAMLMetadataDocument)) {
            $query['NewEncodedSAMLMetadataDocument'] = $request->newEncodedSAMLMetadataDocument;
        }
        if (!Utils::isUnset($request->SAMLProviderName)) {
            $query['SAMLProviderName'] = $request->SAMLProviderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSAMLProvider',
            'version'     => '2019-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSAMLProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改角色SSO身份提供商信息
     *  *
     * @description This topic provides an example on how to change the description of an IdP named `test-provider` to `This is a new provider.`
     *  *
     * @param UpdateSAMLProviderRequest $request UpdateSAMLProviderRequest
     *
     * @return UpdateSAMLProviderResponse UpdateSAMLProviderResponse
     */
    public function updateSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a RAM user.
     *  *
     * @description This topic provides an example to show how to modify the name of a RAM user from `test@example.onaliyun.com` to `new@example.onaliyun.com`.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newComments)) {
            $query['NewComments'] = $request->newComments;
        }
        if (!Utils::isUnset($request->newDisplayName)) {
            $query['NewDisplayName'] = $request->newDisplayName;
        }
        if (!Utils::isUnset($request->newEmail)) {
            $query['NewEmail'] = $request->newEmail;
        }
        if (!Utils::isUnset($request->newMobilePhone)) {
            $query['NewMobilePhone'] = $request->newMobilePhone;
        }
        if (!Utils::isUnset($request->newUserPrincipalName)) {
            $query['NewUserPrincipalName'] = $request->newUserPrincipalName;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userPrincipalName)) {
            $query['UserPrincipalName'] = $request->userPrincipalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2019-08-15',
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
     * @summary Modifies the information about a RAM user.
     *  *
     * @description This topic provides an example to show how to modify the name of a RAM user from `test@example.onaliyun.com` to `new@example.onaliyun.com`.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}
