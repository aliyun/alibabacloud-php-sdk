<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DisableVirtualMFARequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DisableVirtualMFAResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GenerateCredentialReportRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GenerateCredentialReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountMFAInfoRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountMFAInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAppSecretRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAppSecretResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetCredentialReportRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetCredentialReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetDefaultDomainRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetDefaultDomainResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetPasswordPolicyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserMFAInfoRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserMFAInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserSsoSettingsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserSsoSettingsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersForGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersForGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveUserFromGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveUserFromGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetDefaultDomainRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetDefaultDomainResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetPasswordPolicyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetUserSsoSettingsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetUserSsoSettingsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateAccessKeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateAccessKeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ims extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ims', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param GetUserSsoSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserSsoSettingsResponse
     */
    public function getUserSsoSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetUserSsoSettingsResponse::fromMap($this->doRequest('GetUserSsoSettings', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetUserSsoSettingsRequest $request
     *
     * @return GetUserSsoSettingsResponse
     */
    public function getUserSsoSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserSsoSettingsWithOptions($request, $runtime);
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

        return SetUserSsoSettingsResponse::fromMap($this->doRequest('SetUserSsoSettings', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetDefaultDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetDefaultDomainResponse
     */
    public function setDefaultDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDefaultDomainResponse::fromMap($this->doRequest('SetDefaultDomain', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListUserBasicInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserBasicInfosResponse
     */
    public function listUserBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListUserBasicInfosResponse::fromMap($this->doRequest('ListUserBasicInfos', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListUserBasicInfosRequest $request
     *
     * @return ListUserBasicInfosResponse
     */
    public function listUserBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserBasicInfosWithOptions($request, $runtime);
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

        return UpdateApplicationResponse::fromMap($this->doRequest('UpdateApplication', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListApplicationsResponse::fromMap($this->doRequest('ListApplications', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetApplicationResponse::fromMap($this->doRequest('GetApplication', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
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

        return DeleteApplicationResponse::fromMap($this->doRequest('DeleteApplication', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetAppSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAppSecretResponse
     */
    public function getAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAppSecretResponse::fromMap($this->doRequest('GetAppSecret', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateAppSecretRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAppSecretResponse
     */
    public function createAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAppSecretResponse::fromMap($this->doRequest('CreateAppSecret', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListPredefinedScopesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPredefinedScopesResponse
     */
    public function listPredefinedScopesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPredefinedScopesResponse::fromMap($this->doRequest('ListPredefinedScopes', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateApplicationResponse::fromMap($this->doRequest('CreateApplication', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteAppSecretRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAppSecretResponse
     */
    public function deleteAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAppSecretResponse::fromMap($this->doRequest('DeleteAppSecret', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListAppSecretIdsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppSecretIdsResponse
     */
    public function listAppSecretIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAppSecretIdsResponse::fromMap($this->doRequest('ListAppSecretIds', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GenerateCredentialReportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateCredentialReportResponse
     */
    public function generateCredentialReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GenerateCredentialReportResponse::fromMap($this->doRequest('GenerateCredentialReport', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GenerateCredentialReportRequest $request
     *
     * @return GenerateCredentialReportResponse
     */
    public function generateCredentialReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCredentialReportWithOptions($request, $runtime);
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

        return GetCredentialReportResponse::fromMap($this->doRequest('GetCredentialReport', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateUserResponse::fromMap($this->doRequest('UpdateUser', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateSAMLProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSAMLProviderResponse
     */
    public function updateSAMLProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSAMLProviderResponse::fromMap($this->doRequest('UpdateSAMLProvider', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateSAMLProviderRequest $request
     *
     * @return UpdateSAMLProviderResponse
     */
    public function updateSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSAMLProviderWithOptions($request, $runtime);
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

        return UpdateLoginProfileResponse::fromMap($this->doRequest('UpdateLoginProfile', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateGroupResponse::fromMap($this->doRequest('UpdateGroup', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAccessKeyResponse
     */
    public function updateAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateAccessKeyResponse::fromMap($this->doRequest('UpdateAccessKey', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UnbindMFADeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindMFADeviceResponse
     */
    public function unbindMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindMFADeviceResponse::fromMap($this->doRequest('UnbindMFADevice', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetSecurityPreferenceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetSecurityPreferenceResponse
     */
    public function setSecurityPreferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetSecurityPreferenceResponse::fromMap($this->doRequest('SetSecurityPreference', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetSecurityPreferenceRequest $request
     *
     * @return SetSecurityPreferenceResponse
     */
    public function setSecurityPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSecurityPreferenceWithOptions($request, $runtime);
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

        return SetPasswordPolicyResponse::fromMap($this->doRequest('SetPasswordPolicy', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param RemoveUserFromGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveUserFromGroupResponse
     */
    public function removeUserFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveUserFromGroupResponse::fromMap($this->doRequest('RemoveUserFromGroup', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListVirtualMFADevicesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListVirtualMFADevicesResponse::fromMap($this->doRequest('ListVirtualMFADevices', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListUsersForGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListUsersForGroupResponse::fromMap($this->doRequest('ListUsersForGroup', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListUsersResponse::fromMap($this->doRequest('ListUsers', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListSAMLProvidersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSAMLProvidersResponse
     */
    public function listSAMLProvidersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListSAMLProvidersResponse::fromMap($this->doRequest('ListSAMLProviders', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListGroupsForUserRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListGroupsForUserResponse::fromMap($this->doRequest('ListGroupsForUser', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListGroupsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListGroupsResponse::fromMap($this->doRequest('ListGroups', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListAccessKeysRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAccessKeysResponse
     */
    public function listAccessKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAccessKeysResponse::fromMap($this->doRequest('ListAccessKeys', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetUserMFAInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetUserMFAInfoResponse
     */
    public function getUserMFAInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetUserMFAInfoResponse::fromMap($this->doRequest('GetUserMFAInfo', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetUserResponse::fromMap($this->doRequest('GetUser', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetSecurityPreferenceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSecurityPreferenceResponse::fromMap($this->doRequest('GetSecurityPreference', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSecurityPreferenceRequest $request
     *
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityPreferenceWithOptions($request, $runtime);
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

        return GetSAMLProviderResponse::fromMap($this->doRequest('GetSAMLProvider', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetPasswordPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPasswordPolicyResponse::fromMap($this->doRequest('GetPasswordPolicy', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetPasswordPolicyRequest $request
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordPolicyWithOptions($request, $runtime);
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

        return GetLoginProfileResponse::fromMap($this->doRequest('GetLoginProfile', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetGroupRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetGroupResponse::fromMap($this->doRequest('GetGroup', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetDefaultDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDefaultDomainResponse
     */
    public function getDefaultDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDefaultDomainResponse::fromMap($this->doRequest('GetDefaultDomain', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDefaultDomainRequest $request
     *
     * @return GetDefaultDomainResponse
     */
    public function getDefaultDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultDomainWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountSummaryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAccountSummaryResponse
     */
    public function getAccountSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAccountSummaryResponse::fromMap($this->doRequest('GetAccountSummary', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAccountSummaryRequest $request
     *
     * @return GetAccountSummaryResponse
     */
    public function getAccountSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountSecurityPracticeReportRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetAccountSecurityPracticeReportResponse
     */
    public function getAccountSecurityPracticeReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAccountSecurityPracticeReportResponse::fromMap($this->doRequest('GetAccountSecurityPracticeReport', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAccountSecurityPracticeReportRequest $request
     *
     * @return GetAccountSecurityPracticeReportResponse
     */
    public function getAccountSecurityPracticeReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSecurityPracticeReportWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountMFAInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAccountMFAInfoResponse
     */
    public function getAccountMFAInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAccountMFAInfoResponse::fromMap($this->doRequest('GetAccountMFAInfo', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAccountMFAInfoRequest $request
     *
     * @return GetAccountMFAInfoResponse
     */
    public function getAccountMFAInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountMFAInfoWithOptions($request, $runtime);
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

        return GetAccessKeyLastUsedResponse::fromMap($this->doRequest('GetAccessKeyLastUsed', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DisableVirtualMFARequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableVirtualMFAResponse
     */
    public function disableVirtualMFAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableVirtualMFAResponse::fromMap($this->doRequest('DisableVirtualMFA', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVirtualMFADeviceResponse::fromMap($this->doRequest('DeleteVirtualMFADevice', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteUserResponse::fromMap($this->doRequest('DeleteUser', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteSAMLProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSAMLProviderResponse
     */
    public function deleteSAMLProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSAMLProviderResponse::fromMap($this->doRequest('DeleteSAMLProvider', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoginProfileResponse
     */
    public function deleteLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLoginProfileResponse::fromMap($this->doRequest('DeleteLoginProfile', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteGroupResponse::fromMap($this->doRequest('DeleteGroup', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAccessKeyResponse
     */
    public function deleteAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAccessKeyResponse::fromMap($this->doRequest('DeleteAccessKey', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVirtualMFADeviceResponse::fromMap($this->doRequest('CreateVirtualMFADevice', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateUserResponse::fromMap($this->doRequest('CreateUser', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateSAMLProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSAMLProviderResponse
     */
    public function createSAMLProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSAMLProviderResponse::fromMap($this->doRequest('CreateSAMLProvider', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoginProfileResponse
     */
    public function createLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateLoginProfileResponse::fromMap($this->doRequest('CreateLoginProfile', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateGroupResponse::fromMap($this->doRequest('CreateGroup', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAccessKeyResponse
     */
    public function createAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAccessKeyResponse::fromMap($this->doRequest('CreateAccessKey', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ChangePasswordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ChangePasswordResponse
     */
    public function changePasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ChangePasswordResponse::fromMap($this->doRequest('ChangePassword', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ChangePasswordRequest $request
     *
     * @return ChangePasswordResponse
     */
    public function changePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changePasswordWithOptions($request, $runtime);
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

        return BindMFADeviceResponse::fromMap($this->doRequest('BindMFADevice', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddUserToGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddUserToGroupResponse
     */
    public function addUserToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddUserToGroupResponse::fromMap($this->doRequest('AddUserToGroup', 'HTTPS', 'POST', '2019-08-15', 'AK', null, Tea::merge($request), $runtime));
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
}
