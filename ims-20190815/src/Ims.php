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
     * @param AddClientIdToOIDCProviderRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddClientIdToOIDCProviderResponse
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
     * @param AddClientIdToOIDCProviderRequest $request
     *
     * @return AddClientIdToOIDCProviderResponse
     */
    public function addClientIdToOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClientIdToOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * This topic provides an example on how to add the fingerprint `902ef2deeb3c5b13ea4c3d5193629309e231****` to the OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * ###
     *   * This topic provides an example on how to add the fingerprint `902ef2deeb3c5b13ea4c3d5193629309e231****` to the OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * @param AddUserToGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddUserToGroupResponse
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
     * @param BindMFADeviceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindMFADeviceResponse
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
     * @param BindMFADeviceRequest $request
     *
     * @return BindMFADeviceResponse
     */
    public function bindMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * >  This operation is available only for RAM users. Before you call this operation, make sure that `AllowUserToChangePassword` in [SetSecurityPreference](~~43765~~) is set to `True`. The value True indicates that RAM users can change their passwords.
     *   *
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
     * >  This operation is available only for RAM users. Before you call this operation, make sure that `AllowUserToChangePassword` in [SetSecurityPreference](~~43765~~) is set to `True`. The value True indicates that RAM users can change their passwords.
     *   *
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
     * @param CreateAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAccessKeyResponse
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
     * @param CreateAccessKeyRequest $request
     *
     * @return CreateAccessKeyResponse
     */
    public function createAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppSecretRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAppSecretResponse
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
     * @param CreateAppSecretRequest $request
     *
     * @return CreateAppSecretResponse
     */
    public function createAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSecretWithOptions($request, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
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
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
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
     * @param CreateLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoginProfileResponse
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
     * @param CreateLoginProfileRequest $request
     *
     * @return CreateLoginProfileResponse
     */
    public function createLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoginProfileWithOptions($request, $runtime);
    }

    /**
     * ### Prerequisites
     *   * Before you call this operation, make sure that the information such as the URL of the issuer, the fingerprints of HTTPS certificates, and the client IDs are obtained from an external (IdP, such as Google G Suite or Okta.
     *   * ### Limits
     *   * *   You can create a maximum of 100 OIDC IdPs in an Alibaba Cloud account.
     *   * *   You can add a maximum of 20 client IDs to an OIDC IdP.
     *   * *   You can add a maximum of five fingerprints to an OIDC IdP.
     *   * ###
     *   * This topic provides an example on how to create an IdP named `TestOIDCProvider` to configure a trust relationship between the external IdP and Alibaba Cloud.
     *   *
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
     * ### Prerequisites
     *   * Before you call this operation, make sure that the information such as the URL of the issuer, the fingerprints of HTTPS certificates, and the client IDs are obtained from an external (IdP, such as Google G Suite or Okta.
     *   * ### Limits
     *   * *   You can create a maximum of 100 OIDC IdPs in an Alibaba Cloud account.
     *   * *   You can add a maximum of 20 client IDs to an OIDC IdP.
     *   * *   You can add a maximum of five fingerprints to an OIDC IdP.
     *   * ###
     *   * This topic provides an example on how to create an IdP named `TestOIDCProvider` to configure a trust relationship between the external IdP and Alibaba Cloud.
     *   *
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
     * @param CreateSAMLProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSAMLProviderResponse
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
     * @param CreateSAMLProviderRequest $request
     *
     * @return CreateSAMLProviderResponse
     */
    public function createSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to create a RAM user named `test`.
     *   *
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
     * This topic provides an example on how to create a RAM user named `test`.
     *   *
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
     * @param CreateVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVirtualMFADeviceResponse
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
     * @param CreateVirtualMFADeviceRequest $request
     *
     * @return CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAccessKeyResponse
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
     * @param DeleteAccessKeyRequest $request
     *
     * @return DeleteAccessKeyResponse
     */
    public function deleteAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppSecretRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAppSecretResponse
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
     * @param DeleteAppSecretRequest $request
     *
     * @return DeleteAppSecretResponse
     */
    public function deleteAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppSecretWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
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
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * Before you delete a RAM user group, make sure that no policies are attached to the group and no RAM users are included in the group.
     *   *
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
     * Before you delete a RAM user group, make sure that no policies are attached to the group and no RAM users are included in the group.
     *   *
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
     * @param DeleteLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoginProfileResponse
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
     * @param DeleteLoginProfileRequest $request
     *
     * @return DeleteLoginProfileResponse
     */
    public function deleteLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoginProfileWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * This topic provides an example on how to remove the OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * ###
     *   * This topic provides an example on how to remove the OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * @param DeleteSAMLProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSAMLProviderResponse
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
     * @param DeleteSAMLProviderRequest $request
     *
     * @return DeleteSAMLProviderResponse
     */
    public function deleteSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSAMLProviderWithOptions($request, $runtime);
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
     * @param DeleteVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVirtualMFADeviceResponse
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
     * @param DeleteVirtualMFADeviceRequest $request
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @param DisableVirtualMFARequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableVirtualMFAResponse
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
     * @param DisableVirtualMFARequest $request
     *
     * @return DisableVirtualMFAResponse
     */
    public function disableVirtualMFA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVirtualMFAWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GenerateCredentialReportResponse
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
     * @return GenerateCredentialReportResponse
     */
    public function generateCredentialReport()
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCredentialReportWithOptions($runtime);
    }

    /**
     * @param GetAccessKeyLastUsedRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAccessKeyLastUsedResponse
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
     * @param GetAccessKeyLastUsedRequest $request
     *
     * @return GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountMFAInfoResponse
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
     * @return GetAccountMFAInfoResponse
     */
    public function getAccountMFAInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountMFAInfoWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountSecurityPracticeReportResponse
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
     * @return GetAccountSecurityPracticeReportResponse
     */
    public function getAccountSecurityPracticeReport()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSecurityPracticeReportWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountSummaryResponse
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
     * @return GetAccountSummaryResponse
     */
    public function getAccountSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSummaryWithOptions($runtime);
    }

    /**
     * @param GetAppSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAppSecretResponse
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
     * @param GetAppSecretRequest $request
     *
     * @return GetAppSecretResponse
     */
    public function getAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSecretWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the configurations of an application named `472457090344041****`.
     *   *
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
     * This topic provides an example on how to query the configurations of an application named `472457090344041****`.
     *   *
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
     * @param GetCredentialReportRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCredentialReportResponse
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
     * @param GetCredentialReportRequest $request
     *
     * @return GetCredentialReportResponse
     */
    public function getCredentialReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCredentialReportWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetDefaultDomainResponse
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
     * @return GetDefaultDomainResponse
     */
    public function getDefaultDomain()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultDomainWithOptions($runtime);
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
     * @param GetLoginProfileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLoginProfileResponse
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
     * @param GetLoginProfileRequest $request
     *
     * @return GetLoginProfileResponse
     */
    public function getLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginProfileWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * This topic provides an example on how to query the information about an OpenID Connect (OIDC) identity provider (IdP) named `TestOIDCProvider`.
     *   *
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
     * ###
     *   * This topic provides an example on how to query the information about an OpenID Connect (OIDC) identity provider (IdP) named `TestOIDCProvider`.
     *   *
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
     * @param RuntimeOptions $runtime
     *
     * @return GetPasswordPolicyResponse
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
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordPolicyWithOptions($runtime);
    }

    /**
     * @param GetSAMLProviderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSAMLProviderResponse
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
     * @param GetSAMLProviderRequest $request
     *
     * @return GetSAMLProviderResponse
     */
    public function getSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetSecurityPreferenceResponse
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
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreference()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityPreferenceWithOptions($runtime);
    }

    /**
     * This topic provides an example to show how to query the information about a RAM user named `test@example.onaliyun.com`.
     *   *
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
     * This topic provides an example to show how to query the information about a RAM user named `test@example.onaliyun.com`.
     *   *
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
     * @param GetUserMFAInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetUserMFAInfoResponse
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
     * @param GetUserMFAInfoRequest $request
     *
     * @return GetUserMFAInfoResponse
     */
    public function getUserMFAInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMFAInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetUserSsoSettingsResponse
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
     * @return GetUserSsoSettingsResponse
     */
    public function getUserSsoSettings()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserSsoSettingsWithOptions($runtime);
    }

    /**
     * @param GetVerificationInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetVerificationInfoResponse
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
     * @param GetVerificationInfoRequest $request
     *
     * @return GetVerificationInfoResponse
     */
    public function getVerificationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVerificationInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListAccessKeysRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAccessKeysResponse
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
     * @param ListAccessKeysRequest $request
     *
     * @return ListAccessKeysResponse
     */
    public function listAccessKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListAppSecretIdsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppSecretIdsResponse
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
     * @param ListAppSecretIdsRequest $request
     *
     * @return ListAppSecretIdsResponse
     */
    public function listAppSecretIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppSecretIdsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the applications within the current account. The returned result shows that only one application named `myapp` belongs to the current account.
     *   *
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
     * This topic provides an example on how to query the applications within the current account. The returned result shows that only one application named `myapp` belongs to the current account.
     *   *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplications()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($runtime);
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
     * @param ListGroupsForUserRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListGroupsForUserResponse
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
     * @param ListGroupsForUserRequest $request
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * This topic provides an example on how to query all OpenID Connect (OIDC) identity providers (IdPs) within your Alibaba Cloud account. The response shows that your Alibaba Cloud account has only one OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * ###
     *   * This topic provides an example on how to query all OpenID Connect (OIDC) identity providers (IdPs) within your Alibaba Cloud account. The response shows that your Alibaba Cloud account has only one OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * @param ListPredefinedScopesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPredefinedScopesResponse
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
     * @param ListPredefinedScopesRequest $request
     *
     * @return ListPredefinedScopesResponse
     */
    public function listPredefinedScopes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPredefinedScopesWithOptions($request, $runtime);
    }

    /**
     * @param ListSAMLProvidersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSAMLProvidersResponse
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
     * @param ListSAMLProvidersRequest $request
     *
     * @return ListSAMLProvidersResponse
     */
    public function listSAMLProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSAMLProvidersWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * You must specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     *   * *   `ResourceId.N`
     *   * *   `Tag.N.Key`
     *   * *   `Tag.N.Key` and `Tag.N.Value`.
     *   *
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
     * ###
     *   * You must specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     *   * *   `ResourceId.N`
     *   * *   `Tag.N.Key`
     *   * *   `Tag.N.Key` and `Tag.N.Value`.
     *   *
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
     * You can call the following API operations to query the information about all RAM users:
     *   * *   ListUsers: queries the details of all RAM users.
     *   * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *   *
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
     * You can call the following API operations to query the information about all RAM users:
     *   * *   ListUsers: queries the details of all RAM users.
     *   * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *   *
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
     * ### [](#)
     *   * You can call the following API operations to query the details of all RAM users:
     *   * *   ListUsers: queries the details of all RAM users.
     *   * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *   *
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
     * ### [](#)
     *   * You can call the following API operations to query the details of all RAM users:
     *   * *   ListUsers: queries the details of all RAM users.
     *   * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *   *
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
     * @param ListUsersForGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUsersForGroupResponse
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
     * @param ListUsersForGroupRequest $request
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListVirtualMFADevicesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListVirtualMFADevicesResponse
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
     * @param ListVirtualMFADevicesRequest $request
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualMFADevicesWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * This topic provides an example on how to remove the client ID `498469743454717****` from the OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * ###
     *   * This topic provides an example on how to remove the client ID `498469743454717****` from the OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * ###
     *   * This topic provides an example on how to remove the fingerprint `6938fd4d98bab03faadb97b34396831e3780****` from the OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * ###
     *   * This topic provides an example on how to remove the fingerprint `6938fd4d98bab03faadb97b34396831e3780****` from the OIDC IdP named `TestOIDCProvider`.
     *   *
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
     * @param RemoveUserFromGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveUserFromGroupResponse
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
     * @param SetDefaultDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetDefaultDomainResponse
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
     * @param SetDefaultDomainRequest $request
     *
     * @return SetDefaultDomainResponse
     */
    public function setDefaultDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultDomainWithOptions($request, $runtime);
    }

    /**
     * @param SetPasswordPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetPasswordPolicyResponse
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
     * @param SetPasswordPolicyRequest $request
     *
     * @return SetPasswordPolicyResponse
     */
    public function setPasswordPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordPolicyWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * This topic provides an example on how to enable multi-factor authentication (MFA) only for RAM users who initiated unusual logons.
     *   *
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
     * ###
     *   * This topic provides an example on how to enable multi-factor authentication (MFA) only for RAM users who initiated unusual logons.
     *   *
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
     * @param SetUserSsoSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetUserSsoSettingsResponse
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
     * @param SetUserSsoSettingsRequest $request
     *
     * @return SetUserSsoSettingsResponse
     */
    public function setUserSsoSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserSsoSettingsWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UnbindMFADeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindMFADeviceResponse
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
     * @param UnbindMFADeviceRequest $request
     *
     * @return UnbindMFADeviceResponse
     */
    public function unbindMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAccessKeyResponse
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
     * @param UpdateAccessKeyRequest $request
     *
     * @return UpdateAccessKeyResponse
     */
    public function updateAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
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
     * @param UpdateApplicationRequest $request
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationWithOptions($request, $runtime);
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
     * @param UpdateLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateLoginProfileResponse
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
     * @param UpdateLoginProfileRequest $request
     *
     * @return UpdateLoginProfileResponse
     */
    public function updateLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoginProfileWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * This topic provides an example on how to change the description of the OIDC IdP named `TestOIDCProvider` to `This is a new OIDC Provider.`.
     *   *
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
     * ###
     *   * This topic provides an example on how to change the description of the OIDC IdP named `TestOIDCProvider` to `This is a new OIDC Provider.`.
     *   *
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
     * This topic provides an example on how to change the description of an IdP named `test-provider` to `This is a new provider.`.
     *   *
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
     * This topic provides an example on how to change the description of an IdP named `test-provider` to `This is a new provider.`.
     *   *
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
     * This topic provides an example to show how to modify the name of a RAM user from `test@example.onaliyun.com` to `new@example.onaliyun.com`.
     *   *
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
     * This topic provides an example to show how to modify the name of a RAM user from `test@example.onaliyun.com` to `new@example.onaliyun.com`.
     *   *
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
