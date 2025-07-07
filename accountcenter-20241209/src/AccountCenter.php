<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountChangeLoginPasswordRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountChangeLoginPasswordResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountChangeSecurityEmailRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountChangeSecurityEmailResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountChangeSecurityMobileRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountChangeSecurityMobileResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryAccountGrantedRolesRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryAccountGrantedRolesResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryAccountsInfoRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryAccountsInfoResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryLoginSettingsRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryLoginSettingsResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountRemoveMfaRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountRemoveMfaResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountSeparateEaRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountSeparateEaResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateAccountAliasRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateAccountAliasResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateAccountBizRoleGrantRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateAccountBizRoleGrantResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateIpMaskRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateIpMaskResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateOperateRiskControlRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateOperateRiskControlResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateSecurityMobileLoginStatusRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateSecurityMobileLoginStatusResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateSessionExpireTimeRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountUpdateSessionExpireTimeResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseOrgQueryLoadTreeRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseOrgQueryLoadTreeResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRegisterAccountRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRegisterAccountResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleCreateBizRoleRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleCreateBizRoleResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleDeleteBizRoleRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleDeleteBizRoleResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryAccountForRoleGrantByPageRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryAccountForRoleGrantByPageResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleByPageRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleByPageResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleDetailRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleDetailResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleUpdateBizRoleRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleUpdateBizRoleResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoDealAccountTodoRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoDealAccountTodoResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListByApplicantRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListByApplicantResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseUninvitedAdminInviteJoinEnterpriseRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseUninvitedAdminInviteJoinEnterpriseResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AccountCenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('accountcenter', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 修改登录密码
     *
     * @param request - EnterpriseAccountChangeLoginPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountChangeLoginPasswordResponse
     *
     * @param EnterpriseAccountChangeLoginPasswordRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return EnterpriseAccountChangeLoginPasswordResponse
     */
    public function enterpriseAccountChangeLoginPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptPassword) {
            @$query['EncryptPassword'] = $request->encryptPassword;
        }

        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountChangeLoginPassword',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountChangeLoginPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改登录密码
     *
     * @param request - EnterpriseAccountChangeLoginPasswordRequest
     *
     * @returns EnterpriseAccountChangeLoginPasswordResponse
     *
     * @param EnterpriseAccountChangeLoginPasswordRequest $request
     *
     * @return EnterpriseAccountChangeLoginPasswordResponse
     */
    public function enterpriseAccountChangeLoginPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountChangeLoginPasswordWithOptions($request, $runtime);
    }

    /**
     * 修改安全邮箱.
     *
     * @param request - EnterpriseAccountChangeSecurityEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountChangeSecurityEmailResponse
     *
     * @param EnterpriseAccountChangeSecurityEmailRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return EnterpriseAccountChangeSecurityEmailResponse
     */
    public function enterpriseAccountChangeSecurityEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->securityEmail) {
            @$query['SecurityEmail'] = $request->securityEmail;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountChangeSecurityEmail',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountChangeSecurityEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改安全邮箱.
     *
     * @param request - EnterpriseAccountChangeSecurityEmailRequest
     *
     * @returns EnterpriseAccountChangeSecurityEmailResponse
     *
     * @param EnterpriseAccountChangeSecurityEmailRequest $request
     *
     * @return EnterpriseAccountChangeSecurityEmailResponse
     */
    public function enterpriseAccountChangeSecurityEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountChangeSecurityEmailWithOptions($request, $runtime);
    }

    /**
     * 修改成员账号安全手机号.
     *
     * @param request - EnterpriseAccountChangeSecurityMobileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountChangeSecurityMobileResponse
     *
     * @param EnterpriseAccountChangeSecurityMobileRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return EnterpriseAccountChangeSecurityMobileResponse
     */
    public function enterpriseAccountChangeSecurityMobileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->newMobile) {
            @$query['NewMobile'] = $request->newMobile;
        }

        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->verificationCode) {
            @$query['VerificationCode'] = $request->verificationCode;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountChangeSecurityMobile',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountChangeSecurityMobileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改成员账号安全手机号.
     *
     * @param request - EnterpriseAccountChangeSecurityMobileRequest
     *
     * @returns EnterpriseAccountChangeSecurityMobileResponse
     *
     * @param EnterpriseAccountChangeSecurityMobileRequest $request
     *
     * @return EnterpriseAccountChangeSecurityMobileResponse
     */
    public function enterpriseAccountChangeSecurityMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountChangeSecurityMobileWithOptions($request, $runtime);
    }

    /**
     * 查询纳管账号授权角色.
     *
     * @param request - EnterpriseAccountQueryAccountGrantedRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountQueryAccountGrantedRolesResponse
     *
     * @param EnterpriseAccountQueryAccountGrantedRolesRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return EnterpriseAccountQueryAccountGrantedRolesResponse
     */
    public function enterpriseAccountQueryAccountGrantedRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->isOpenApi) {
            @$body['IsOpenApi'] = $request->isOpenApi;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        if (null !== $request->pk) {
            @$body['Pk'] = $request->pk;
        }

        if (null !== $request->showCompleteInfo) {
            @$body['ShowCompleteInfo'] = $request->showCompleteInfo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountQueryAccountGrantedRoles',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountQueryAccountGrantedRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询纳管账号授权角色.
     *
     * @param request - EnterpriseAccountQueryAccountGrantedRolesRequest
     *
     * @returns EnterpriseAccountQueryAccountGrantedRolesResponse
     *
     * @param EnterpriseAccountQueryAccountGrantedRolesRequest $request
     *
     * @return EnterpriseAccountQueryAccountGrantedRolesResponse
     */
    public function enterpriseAccountQueryAccountGrantedRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountQueryAccountGrantedRolesWithOptions($request, $runtime);
    }

    /**
     * 批量查询纳管账号信息.
     *
     * @param request - EnterpriseAccountQueryAccountsInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountQueryAccountsInfoResponse
     *
     * @param EnterpriseAccountQueryAccountsInfoRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return EnterpriseAccountQueryAccountsInfoResponse
     */
    public function enterpriseAccountQueryAccountsInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pksJson) {
            @$query['PksJson'] = $request->pksJson;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        if (null !== $request->showCompleteInfo) {
            @$body['ShowCompleteInfo'] = $request->showCompleteInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountQueryAccountsInfo',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountQueryAccountsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询纳管账号信息.
     *
     * @param request - EnterpriseAccountQueryAccountsInfoRequest
     *
     * @returns EnterpriseAccountQueryAccountsInfoResponse
     *
     * @param EnterpriseAccountQueryAccountsInfoRequest $request
     *
     * @return EnterpriseAccountQueryAccountsInfoResponse
     */
    public function enterpriseAccountQueryAccountsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountQueryAccountsInfoWithOptions($request, $runtime);
    }

    /**
     * 查询纳管账号登录设置.
     *
     * @param request - EnterpriseAccountQueryLoginSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountQueryLoginSettingsResponse
     *
     * @param EnterpriseAccountQueryLoginSettingsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return EnterpriseAccountQueryLoginSettingsResponse
     */
    public function enterpriseAccountQueryLoginSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->isOpenApi) {
            @$body['IsOpenApi'] = $request->isOpenApi;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        if (null !== $request->pk) {
            @$body['Pk'] = $request->pk;
        }

        if (null !== $request->showCompleteInfo) {
            @$body['ShowCompleteInfo'] = $request->showCompleteInfo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountQueryLoginSettings',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountQueryLoginSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询纳管账号登录设置.
     *
     * @param request - EnterpriseAccountQueryLoginSettingsRequest
     *
     * @returns EnterpriseAccountQueryLoginSettingsResponse
     *
     * @param EnterpriseAccountQueryLoginSettingsRequest $request
     *
     * @return EnterpriseAccountQueryLoginSettingsResponse
     */
    public function enterpriseAccountQueryLoginSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountQueryLoginSettingsWithOptions($request, $runtime);
    }

    /**
     * 移除mfa.
     *
     * @param request - EnterpriseAccountRemoveMfaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountRemoveMfaResponse
     *
     * @param EnterpriseAccountRemoveMfaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnterpriseAccountRemoveMfaResponse
     */
    public function enterpriseAccountRemoveMfaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountRemoveMfa',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountRemoveMfaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除mfa.
     *
     * @param request - EnterpriseAccountRemoveMfaRequest
     *
     * @returns EnterpriseAccountRemoveMfaResponse
     *
     * @param EnterpriseAccountRemoveMfaRequest $request
     *
     * @return EnterpriseAccountRemoveMfaResponse
     */
    public function enterpriseAccountRemoveMfa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountRemoveMfaWithOptions($request, $runtime);
    }

    /**
     * 脱离ea.
     *
     * @param request - EnterpriseAccountSeparateEaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountSeparateEaResponse
     *
     * @param EnterpriseAccountSeparateEaRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnterpriseAccountSeparateEaResponse
     */
    public function enterpriseAccountSeparateEaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountSeparateEa',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountSeparateEaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 脱离ea.
     *
     * @param request - EnterpriseAccountSeparateEaRequest
     *
     * @returns EnterpriseAccountSeparateEaResponse
     *
     * @param EnterpriseAccountSeparateEaRequest $request
     *
     * @return EnterpriseAccountSeparateEaResponse
     */
    public function enterpriseAccountSeparateEa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountSeparateEaWithOptions($request, $runtime);
    }

    /**
     * 更新账号企业多账号中的别名.
     *
     * @param request - EnterpriseAccountUpdateAccountAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountUpdateAccountAliasResponse
     *
     * @param EnterpriseAccountUpdateAccountAliasRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return EnterpriseAccountUpdateAccountAliasResponse
     */
    public function enterpriseAccountUpdateAccountAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alias) {
            @$query['Alias'] = $request->alias;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountUpdateAccountAlias',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountUpdateAccountAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新账号企业多账号中的别名.
     *
     * @param request - EnterpriseAccountUpdateAccountAliasRequest
     *
     * @returns EnterpriseAccountUpdateAccountAliasResponse
     *
     * @param EnterpriseAccountUpdateAccountAliasRequest $request
     *
     * @return EnterpriseAccountUpdateAccountAliasResponse
     */
    public function enterpriseAccountUpdateAccountAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountUpdateAccountAliasWithOptions($request, $runtime);
    }

    /**
     * 更新账号授权.
     *
     * @param request - EnterpriseAccountUpdateAccountBizRoleGrantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountUpdateAccountBizRoleGrantResponse
     *
     * @param EnterpriseAccountUpdateAccountBizRoleGrantRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return EnterpriseAccountUpdateAccountBizRoleGrantResponse
     */
    public function enterpriseAccountUpdateAccountBizRoleGrantWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRoleCodeListJson) {
            @$query['BizRoleCodeListJson'] = $request->bizRoleCodeListJson;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountUpdateAccountBizRoleGrant',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountUpdateAccountBizRoleGrantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新账号授权.
     *
     * @param request - EnterpriseAccountUpdateAccountBizRoleGrantRequest
     *
     * @returns EnterpriseAccountUpdateAccountBizRoleGrantResponse
     *
     * @param EnterpriseAccountUpdateAccountBizRoleGrantRequest $request
     *
     * @return EnterpriseAccountUpdateAccountBizRoleGrantResponse
     */
    public function enterpriseAccountUpdateAccountBizRoleGrant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountUpdateAccountBizRoleGrantWithOptions($request, $runtime);
    }

    /**
     * 设置Ip掩码
     *
     * @param request - EnterpriseAccountUpdateIpMaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountUpdateIpMaskResponse
     *
     * @param EnterpriseAccountUpdateIpMaskRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnterpriseAccountUpdateIpMaskResponse
     */
    public function enterpriseAccountUpdateIpMaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipMasksJson) {
            @$query['IpMasksJson'] = $request->ipMasksJson;
        }

        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountUpdateIpMask',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountUpdateIpMaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置Ip掩码
     *
     * @param request - EnterpriseAccountUpdateIpMaskRequest
     *
     * @returns EnterpriseAccountUpdateIpMaskResponse
     *
     * @param EnterpriseAccountUpdateIpMaskRequest $request
     *
     * @return EnterpriseAccountUpdateIpMaskResponse
     */
    public function enterpriseAccountUpdateIpMask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountUpdateIpMaskWithOptions($request, $runtime);
    }

    /**
     * 更新操作风控.
     *
     * @param request - EnterpriseAccountUpdateOperateRiskControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountUpdateOperateRiskControlResponse
     *
     * @param EnterpriseAccountUpdateOperateRiskControlRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return EnterpriseAccountUpdateOperateRiskControlResponse
     */
    public function enterpriseAccountUpdateOperateRiskControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->productLevel) {
            @$query['ProductLevel'] = $request->productLevel;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->validateType) {
            @$query['ValidateType'] = $request->validateType;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountUpdateOperateRiskControl',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountUpdateOperateRiskControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新操作风控.
     *
     * @param request - EnterpriseAccountUpdateOperateRiskControlRequest
     *
     * @returns EnterpriseAccountUpdateOperateRiskControlResponse
     *
     * @param EnterpriseAccountUpdateOperateRiskControlRequest $request
     *
     * @return EnterpriseAccountUpdateOperateRiskControlResponse
     */
    public function enterpriseAccountUpdateOperateRiskControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountUpdateOperateRiskControlWithOptions($request, $runtime);
    }

    /**
     * 修改安全手机启用状态
     *
     * @param request - EnterpriseAccountUpdateSecurityMobileLoginStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountUpdateSecurityMobileLoginStatusResponse
     *
     * @param EnterpriseAccountUpdateSecurityMobileLoginStatusRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return EnterpriseAccountUpdateSecurityMobileLoginStatusResponse
     */
    public function enterpriseAccountUpdateSecurityMobileLoginStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountUpdateSecurityMobileLoginStatus',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountUpdateSecurityMobileLoginStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改安全手机启用状态
     *
     * @param request - EnterpriseAccountUpdateSecurityMobileLoginStatusRequest
     *
     * @returns EnterpriseAccountUpdateSecurityMobileLoginStatusResponse
     *
     * @param EnterpriseAccountUpdateSecurityMobileLoginStatusRequest $request
     *
     * @return EnterpriseAccountUpdateSecurityMobileLoginStatusResponse
     */
    public function enterpriseAccountUpdateSecurityMobileLoginStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountUpdateSecurityMobileLoginStatusWithOptions($request, $runtime);
    }

    /**
     * 更新过期时间.
     *
     * @param request - EnterpriseAccountUpdateSessionExpireTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseAccountUpdateSessionExpireTimeResponse
     *
     * @param EnterpriseAccountUpdateSessionExpireTimeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return EnterpriseAccountUpdateSessionExpireTimeResponse
     */
    public function enterpriseAccountUpdateSessionExpireTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->sessionExpireTime) {
            @$query['SessionExpireTime'] = $request->sessionExpireTime;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseAccountUpdateSessionExpireTime',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseAccountUpdateSessionExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新过期时间.
     *
     * @param request - EnterpriseAccountUpdateSessionExpireTimeRequest
     *
     * @returns EnterpriseAccountUpdateSessionExpireTimeResponse
     *
     * @param EnterpriseAccountUpdateSessionExpireTimeRequest $request
     *
     * @return EnterpriseAccountUpdateSessionExpireTimeResponse
     */
    public function enterpriseAccountUpdateSessionExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseAccountUpdateSessionExpireTimeWithOptions($request, $runtime);
    }

    /**
     * 组织目录树查询.
     *
     * @param request - EnterpriseOrgQueryLoadTreeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseOrgQueryLoadTreeResponse
     *
     * @param EnterpriseOrgQueryLoadTreeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnterpriseOrgQueryLoadTreeResponse
     */
    public function enterpriseOrgQueryLoadTreeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->loadOrgOnly) {
            @$query['LoadOrgOnly'] = $request->loadOrgOnly;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseOrgQueryLoadTree',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseOrgQueryLoadTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 组织目录树查询.
     *
     * @param request - EnterpriseOrgQueryLoadTreeRequest
     *
     * @returns EnterpriseOrgQueryLoadTreeResponse
     *
     * @param EnterpriseOrgQueryLoadTreeRequest $request
     *
     * @return EnterpriseOrgQueryLoadTreeResponse
     */
    public function enterpriseOrgQueryLoadTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseOrgQueryLoadTreeWithOptions($request, $runtime);
    }

    /**
     * 创建成员账号.
     *
     * @param request - EnterpriseRegisterAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseRegisterAccountResponse
     *
     * @param EnterpriseRegisterAccountRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnterpriseRegisterAccountResponse
     */
    public function enterpriseRegisterAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alias) {
            @$query['Alias'] = $request->alias;
        }

        if (null !== $request->encryptPassword) {
            @$query['EncryptPassword'] = $request->encryptPassword;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->loginEmail) {
            @$query['LoginEmail'] = $request->loginEmail;
        }

        if (null !== $request->organizationId) {
            @$query['OrganizationId'] = $request->organizationId;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->showCompleteInfo) {
            @$query['ShowCompleteInfo'] = $request->showCompleteInfo;
        }

        if (null !== $request->siteNick) {
            @$query['SiteNick'] = $request->siteNick;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseRegisterAccount',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseRegisterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建成员账号.
     *
     * @param request - EnterpriseRegisterAccountRequest
     *
     * @returns EnterpriseRegisterAccountResponse
     *
     * @param EnterpriseRegisterAccountRequest $request
     *
     * @return EnterpriseRegisterAccountResponse
     */
    public function enterpriseRegisterAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseRegisterAccountWithOptions($request, $runtime);
    }

    /**
     * 创建业务角色.
     *
     * @param request - EnterpriseRoleCreateBizRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseRoleCreateBizRoleResponse
     *
     * @param EnterpriseRoleCreateBizRoleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnterpriseRoleCreateBizRoleResponse
     */
    public function enterpriseRoleCreateBizRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizPermissionCodeListJson) {
            @$query['BizPermissionCodeListJson'] = $request->bizPermissionCodeListJson;
        }

        if (null !== $request->bizRoleDesc) {
            @$query['BizRoleDesc'] = $request->bizRoleDesc;
        }

        if (null !== $request->bizRoleName) {
            @$query['BizRoleName'] = $request->bizRoleName;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseRoleCreateBizRole',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseRoleCreateBizRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建业务角色.
     *
     * @param request - EnterpriseRoleCreateBizRoleRequest
     *
     * @returns EnterpriseRoleCreateBizRoleResponse
     *
     * @param EnterpriseRoleCreateBizRoleRequest $request
     *
     * @return EnterpriseRoleCreateBizRoleResponse
     */
    public function enterpriseRoleCreateBizRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseRoleCreateBizRoleWithOptions($request, $runtime);
    }

    /**
     * 删除业务角色.
     *
     * @param request - EnterpriseRoleDeleteBizRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseRoleDeleteBizRoleResponse
     *
     * @param EnterpriseRoleDeleteBizRoleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnterpriseRoleDeleteBizRoleResponse
     */
    public function enterpriseRoleDeleteBizRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRoleCode) {
            @$query['BizRoleCode'] = $request->bizRoleCode;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseRoleDeleteBizRole',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseRoleDeleteBizRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除业务角色.
     *
     * @param request - EnterpriseRoleDeleteBizRoleRequest
     *
     * @returns EnterpriseRoleDeleteBizRoleResponse
     *
     * @param EnterpriseRoleDeleteBizRoleRequest $request
     *
     * @return EnterpriseRoleDeleteBizRoleResponse
     */
    public function enterpriseRoleDeleteBizRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseRoleDeleteBizRoleWithOptions($request, $runtime);
    }

    /**
     * 角色授权场景下分页查询账号.
     *
     * @param request - EnterpriseRoleQueryAccountForRoleGrantByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseRoleQueryAccountForRoleGrantByPageResponse
     *
     * @param EnterpriseRoleQueryAccountForRoleGrantByPageRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return EnterpriseRoleQueryAccountForRoleGrantByPageResponse
     */
    public function enterpriseRoleQueryAccountForRoleGrantByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRoleCode) {
            @$query['BizRoleCode'] = $request->bizRoleCode;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->showCompleteInfo) {
            @$query['ShowCompleteInfo'] = $request->showCompleteInfo;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseRoleQueryAccountForRoleGrantByPage',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseRoleQueryAccountForRoleGrantByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 角色授权场景下分页查询账号.
     *
     * @param request - EnterpriseRoleQueryAccountForRoleGrantByPageRequest
     *
     * @returns EnterpriseRoleQueryAccountForRoleGrantByPageResponse
     *
     * @param EnterpriseRoleQueryAccountForRoleGrantByPageRequest $request
     *
     * @return EnterpriseRoleQueryAccountForRoleGrantByPageResponse
     */
    public function enterpriseRoleQueryAccountForRoleGrantByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseRoleQueryAccountForRoleGrantByPageWithOptions($request, $runtime);
    }

    /**
     * 分页查询业务角色.
     *
     * @param request - EnterpriseRoleQueryBizRoleByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseRoleQueryBizRoleByPageResponse
     *
     * @param EnterpriseRoleQueryBizRoleByPageRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EnterpriseRoleQueryBizRoleByPageResponse
     */
    public function enterpriseRoleQueryBizRoleByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orientedLeId) {
            @$query['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->srcType) {
            @$query['SrcType'] = $request->srcType;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseRoleQueryBizRoleByPage',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseRoleQueryBizRoleByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询业务角色.
     *
     * @param request - EnterpriseRoleQueryBizRoleByPageRequest
     *
     * @returns EnterpriseRoleQueryBizRoleByPageResponse
     *
     * @param EnterpriseRoleQueryBizRoleByPageRequest $request
     *
     * @return EnterpriseRoleQueryBizRoleByPageResponse
     */
    public function enterpriseRoleQueryBizRoleByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseRoleQueryBizRoleByPageWithOptions($request, $runtime);
    }

    /**
     * 查询业务角色详情.
     *
     * @param request - EnterpriseRoleQueryBizRoleDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseRoleQueryBizRoleDetailResponse
     *
     * @param EnterpriseRoleQueryBizRoleDetailRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EnterpriseRoleQueryBizRoleDetailResponse
     */
    public function enterpriseRoleQueryBizRoleDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRoleCode) {
            @$query['BizRoleCode'] = $request->bizRoleCode;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseRoleQueryBizRoleDetail',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseRoleQueryBizRoleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询业务角色详情.
     *
     * @param request - EnterpriseRoleQueryBizRoleDetailRequest
     *
     * @returns EnterpriseRoleQueryBizRoleDetailResponse
     *
     * @param EnterpriseRoleQueryBizRoleDetailRequest $request
     *
     * @return EnterpriseRoleQueryBizRoleDetailResponse
     */
    public function enterpriseRoleQueryBizRoleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseRoleQueryBizRoleDetailWithOptions($request, $runtime);
    }

    /**
     * 更新业务角色.
     *
     * @param request - EnterpriseRoleUpdateBizRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseRoleUpdateBizRoleResponse
     *
     * @param EnterpriseRoleUpdateBizRoleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnterpriseRoleUpdateBizRoleResponse
     */
    public function enterpriseRoleUpdateBizRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizPermissionCodeListJson) {
            @$query['BizPermissionCodeListJson'] = $request->bizPermissionCodeListJson;
        }

        if (null !== $request->bizRoleCode) {
            @$query['BizRoleCode'] = $request->bizRoleCode;
        }

        if (null !== $request->bizRoleDesc) {
            @$query['BizRoleDesc'] = $request->bizRoleDesc;
        }

        if (null !== $request->bizRoleName) {
            @$query['BizRoleName'] = $request->bizRoleName;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseRoleUpdateBizRole',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseRoleUpdateBizRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新业务角色.
     *
     * @param request - EnterpriseRoleUpdateBizRoleRequest
     *
     * @returns EnterpriseRoleUpdateBizRoleResponse
     *
     * @param EnterpriseRoleUpdateBizRoleRequest $request
     *
     * @return EnterpriseRoleUpdateBizRoleResponse
     */
    public function enterpriseRoleUpdateBizRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseRoleUpdateBizRoleWithOptions($request, $runtime);
    }

    /**
     * 处理待办项.
     *
     * @param request - EnterpriseTodoDealAccountTodoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseTodoDealAccountTodoResponse
     *
     * @param EnterpriseTodoDealAccountTodoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnterpriseTodoDealAccountTodoResponse
     */
    public function enterpriseTodoDealAccountTodoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->todoId) {
            @$body['TodoId'] = $request->todoId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseTodoDealAccountTodo',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseTodoDealAccountTodoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 处理待办项.
     *
     * @param request - EnterpriseTodoDealAccountTodoRequest
     *
     * @returns EnterpriseTodoDealAccountTodoResponse
     *
     * @param EnterpriseTodoDealAccountTodoRequest $request
     *
     * @return EnterpriseTodoDealAccountTodoResponse
     */
    public function enterpriseTodoDealAccountTodo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseTodoDealAccountTodoWithOptions($request, $runtime);
    }

    /**
     * 查询当前登录用户处理的待办项列表.
     *
     * @param request - EnterpriseTodoQueryAccountTodoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseTodoQueryAccountTodoListResponse
     *
     * @param EnterpriseTodoQueryAccountTodoListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return EnterpriseTodoQueryAccountTodoListResponse
     */
    public function enterpriseTodoQueryAccountTodoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->operatePk) {
            @$body['OperatePk'] = $request->operatePk;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->showCompleteInfo) {
            @$body['ShowCompleteInfo'] = $request->showCompleteInfo;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->todoType) {
            @$body['TodoType'] = $request->todoType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseTodoQueryAccountTodoList',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseTodoQueryAccountTodoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前登录用户处理的待办项列表.
     *
     * @param request - EnterpriseTodoQueryAccountTodoListRequest
     *
     * @returns EnterpriseTodoQueryAccountTodoListResponse
     *
     * @param EnterpriseTodoQueryAccountTodoListRequest $request
     *
     * @return EnterpriseTodoQueryAccountTodoListResponse
     */
    public function enterpriseTodoQueryAccountTodoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseTodoQueryAccountTodoListWithOptions($request, $runtime);
    }

    /**
     * 查询当前登录用户发起的待办项列表.
     *
     * @param request - EnterpriseTodoQueryAccountTodoListByApplicantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseTodoQueryAccountTodoListByApplicantResponse
     *
     * @param EnterpriseTodoQueryAccountTodoListByApplicantRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return EnterpriseTodoQueryAccountTodoListByApplicantResponse
     */
    public function enterpriseTodoQueryAccountTodoListByApplicantWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->operatePk) {
            @$body['OperatePk'] = $request->operatePk;
        }

        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->showCompleteInfo) {
            @$body['ShowCompleteInfo'] = $request->showCompleteInfo;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->todoType) {
            @$body['TodoType'] = $request->todoType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseTodoQueryAccountTodoListByApplicant',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseTodoQueryAccountTodoListByApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前登录用户发起的待办项列表.
     *
     * @param request - EnterpriseTodoQueryAccountTodoListByApplicantRequest
     *
     * @returns EnterpriseTodoQueryAccountTodoListByApplicantResponse
     *
     * @param EnterpriseTodoQueryAccountTodoListByApplicantRequest $request
     *
     * @return EnterpriseTodoQueryAccountTodoListByApplicantResponse
     */
    public function enterpriseTodoQueryAccountTodoListByApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseTodoQueryAccountTodoListByApplicantWithOptions($request, $runtime);
    }

    /**
     * 管理员邀请纳管
     *
     * @param request - EnterpriseUninvitedAdminInviteJoinEnterpriseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseUninvitedAdminInviteJoinEnterpriseResponse
     *
     * @param EnterpriseUninvitedAdminInviteJoinEnterpriseRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return EnterpriseUninvitedAdminInviteJoinEnterpriseResponse
     */
    public function enterpriseUninvitedAdminInviteJoinEnterpriseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecId) {
            @$query['EcId'] = $request->ecId;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->inviteePk) {
            @$query['InviteePk'] = $request->inviteePk;
        }

        if (null !== $request->leId) {
            @$query['LeId'] = $request->leId;
        }

        if (null !== $request->nbId) {
            @$query['NbId'] = $request->nbId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnterpriseUninvitedAdminInviteJoinEnterprise',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseUninvitedAdminInviteJoinEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 管理员邀请纳管
     *
     * @param request - EnterpriseUninvitedAdminInviteJoinEnterpriseRequest
     *
     * @returns EnterpriseUninvitedAdminInviteJoinEnterpriseResponse
     *
     * @param EnterpriseUninvitedAdminInviteJoinEnterpriseRequest $request
     *
     * @return EnterpriseUninvitedAdminInviteJoinEnterpriseResponse
     */
    public function enterpriseUninvitedAdminInviteJoinEnterprise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseUninvitedAdminInviteJoinEnterpriseWithOptions($request, $runtime);
    }
}
