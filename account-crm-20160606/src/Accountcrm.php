<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AccountOneKeyDeleteRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AccountOneKeyDeleteResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AddCustomerLabelRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AddCustomerLabelResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AllowAgAccountLoginRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AllowAgAccountLoginResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ApplyAgOneKeyDeleteTaskRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ApplyAgOneKeyDeleteTaskResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ApplyAgOneKeyOnlyCheckerTaskRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ApplyAgOneKeyOnlyCheckerTaskResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ApplyIdentityRegistrationRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ApplyIdentityRegistrationResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AsyncCreateAgAccountRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AsyncCreateAgAccountResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AsyncModifyAgLoginEmailRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AsyncModifyAgLoginEmailResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndActiveWithHidRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndActiveWithHidResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndRefreshLoginTicketRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndRefreshLoginTicketResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthLoginTicketRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthLoginTicketResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\BatchQueryAgAccountRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\BatchQueryAgAccountResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\BatchQueryCreateAccountTraceRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\BatchQueryCreateAccountTraceResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\BatchQueryModifyLoginEmailTraceRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\BatchQueryModifyLoginEmailTraceResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CancelAsyncCreateAgAccountRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CancelAsyncCreateAgAccountResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CancelAsyncModifyLoginEmailRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CancelAsyncModifyLoginEmailResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ChangeAgAccountNationalityCodeRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ChangeAgAccountNationalityCodeResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ChangeAgSecurityEmailRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ChangeAgSecurityEmailResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ChangeAgSecurityMobileRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ChangeAgSecurityMobileResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CreateAccountProfileInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CreateAccountProfileInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CreateAgAccountRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CreateAgAccountResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CreateContacterRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CreateContacterResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CreateRealNameCertificationRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CreateRealNameCertificationResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CustomerSensitiveInfoLogicalDeleteRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CustomerSensitiveInfoLogicalDeleteResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CustomerSensitiveInfoPhysicalDeleteRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\CustomerSensitiveInfoPhysicalDeleteResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\DelCacheOperateSyncRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\DelCacheOperateSyncResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\DeleteContacterRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\DeleteContacterResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\DeleteCustomerLabelRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\DeleteCustomerLabelResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\DoLogicalDeleteResourceRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\DoLogicalDeleteResourceResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ExistBindsByOuterIdRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ExistBindsByOuterIdResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindAllContacterRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindAllContacterResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindBizCategoryConfigRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindBizCategoryConfigResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindContacterRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindContacterResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerSnapshotRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerSnapshotResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindFinanceTaxDetailRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindFinanceTaxDetailResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindFinanceTaxRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindFinanceTaxResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindPkByHidForLoginWithLegacyRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindPkByHidForLoginWithLegacyResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ForbiddenAgAccountLoginRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ForbiddenAgAccountLoginResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GenerateAliyunCertUrlRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GenerateAliyunCertUrlResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAgAccountAkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAgAccountAkResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAgOneKeyDeleteTaskRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAgOneKeyDeleteTaskResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAgRelationRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAgRelationResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAliyunIdByPkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAliyunIdByPkResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAliyunPKByAliyunIDRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAliyunPKByAliyunIDResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryDictionaryRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryDictionaryResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerInformationRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerInformationResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetDingTalkUserOrgByAliyunTmpCodeRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetDingTalkUserOrgByAliyunTmpCodeResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetIdentityRegistrationByCustomerRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetIdentityRegistrationByCustomerResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetProfileTypeByPkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetProfileTypeByPkResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetUploadIdentityRegistrationDocConfigRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetUploadIdentityRegistrationDocConfigResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\IncrByCacheOperateSyncRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\IncrByCacheOperateSyncResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\JudgeAgExistQuietPeriodRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\JudgeAgExistQuietPeriodResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\LoadRealNameInfoByPkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\LoadRealNameInfoByPkResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapFromHavanaBindIdRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapFromHavanaBindIdResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapFromHavanaBindIdShrinkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapPkFromHidRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapPkFromHidResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapPkToHidRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapPkToHidResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapToHavanaBindIdRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapToHavanaBindIdResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapToHavanaBindIdShrinkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ModifyBizCategoryRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ModifyBizCategoryResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ModifyContacterRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ModifyContacterResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ModifyCustomerInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ModifyCustomerInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\OperateFinanceTaxRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\OperateFinanceTaxResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountAddressInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountAddressInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountAddressInfoWithoutHavanaRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountAddressInfoWithoutHavanaResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountDeliveryAddressInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountDeliveryAddressInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountProfileInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountProfileInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountRealNameInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountRealNameInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountSiteRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountSiteResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountTrueNameRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountTrueNameResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAgAccountLoginPermissionRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAgAccountLoginPermissionResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAgRelationCountAndQuotaRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAgRelationCountAndQuotaResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAgSecurityMobileRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAgSecurityMobileResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryBindsByOuterIdRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryBindsByOuterIdResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryBindsByPkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryBindsByPkResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryBindsByPkShrinkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryCustomerLabelRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryCustomerLabelResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryDeleteTaskCheckDataRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryDeleteTaskCheckDataResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEncryptedAccountProfileInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEncryptedAccountProfileInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEnterpriseInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEnterpriseInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEnumConfigByTypeRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEnumConfigByTypeResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryOneKeyDeleteBlockListRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryOneKeyDeleteBlockListResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QuerySecurityInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QuerySecurityInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\RegisterInternalAccountForBucRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\RegisterInternalAccountForBucResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ReleaseAgAccountRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ReleaseAgAccountResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ResendAsyncCreateAgAccountRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ResendAsyncCreateAgAccountResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ResendAsyncModifyLoginEmailRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\ResendAsyncModifyLoginEmailResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\SeparateAgRelationRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\SeparateAgRelationResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\SetCacheOperateSyncRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\SetCacheOperateSyncResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAccountAddressInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAccountAddressInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAccountAddressInfoShrinkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAccountProfileInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAccountProfileInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAccountProfileInfoShrinkRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAgAccountAddressInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAgAccountAddressInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAgServiceStatusRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateAgServiceStatusResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateCustomerCategoryRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateCustomerCategoryResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateCustomerInformationRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateCustomerInformationResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateOrInsertEnterpriseInfoRequest;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateOrInsertEnterpriseInfoResponse;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\UpdateOrInsertEnterpriseInfoShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Accountcrm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('account-crm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AccountOneKeyDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AccountOneKeyDeleteResponse
     *
     * @param AccountOneKeyDeleteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AccountOneKeyDeleteResponse
     */
    public function accountOneKeyDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AccountOneKeyDelete',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AccountOneKeyDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AccountOneKeyDeleteRequest
     *
     * @returns AccountOneKeyDeleteResponse
     *
     * @param AccountOneKeyDeleteRequest $request
     *
     * @return AccountOneKeyDeleteResponse
     */
    public function accountOneKeyDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accountOneKeyDeleteWithOptions($request, $runtime);
    }

    /**
     * @param request - AddCustomerLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCustomerLabelResponse
     *
     * @param AddCustomerLabelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddCustomerLabelResponse
     */
    public function addCustomerLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endtime) {
            @$query['Endtime'] = $request->endtime;
        }

        if (null !== $request->labelSeries) {
            @$query['LabelSeries'] = $request->labelSeries;
        }

        if (null !== $request->labelTypes) {
            @$query['LabelTypes'] = $request->labelTypes;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCustomerLabel',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCustomerLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddCustomerLabelRequest
     *
     * @returns AddCustomerLabelResponse
     *
     * @param AddCustomerLabelRequest $request
     *
     * @return AddCustomerLabelResponse
     */
    public function addCustomerLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomerLabelWithOptions($request, $runtime);
    }

    /**
     * @param request - AllowAgAccountLoginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllowAgAccountLoginResponse
     *
     * @param AllowAgAccountLoginRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AllowAgAccountLoginResponse
     */
    public function allowAgAccountLoginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllowAgAccountLogin',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllowAgAccountLoginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AllowAgAccountLoginRequest
     *
     * @returns AllowAgAccountLoginResponse
     *
     * @param AllowAgAccountLoginRequest $request
     *
     * @return AllowAgAccountLoginResponse
     */
    public function allowAgAccountLogin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allowAgAccountLoginWithOptions($request, $runtime);
    }

    /**
     * 申请ag注销
     *
     * @param request - ApplyAgOneKeyDeleteTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyAgOneKeyDeleteTaskResponse
     *
     * @param ApplyAgOneKeyDeleteTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApplyAgOneKeyDeleteTaskResponse
     */
    public function applyAgOneKeyDeleteTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->abandonedDependency) {
            @$query['AbandonedDependency'] = $request->abandonedDependency;
        }

        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyAgOneKeyDeleteTask',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyAgOneKeyDeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请ag注销
     *
     * @param request - ApplyAgOneKeyDeleteTaskRequest
     *
     * @returns ApplyAgOneKeyDeleteTaskResponse
     *
     * @param ApplyAgOneKeyDeleteTaskRequest $request
     *
     * @return ApplyAgOneKeyDeleteTaskResponse
     */
    public function applyAgOneKeyDeleteTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAgOneKeyDeleteTaskWithOptions($request, $runtime);
    }

    /**
     * 申请ag注销
     *
     * @param request - ApplyAgOneKeyOnlyCheckerTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyAgOneKeyOnlyCheckerTaskResponse
     *
     * @param ApplyAgOneKeyOnlyCheckerTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ApplyAgOneKeyOnlyCheckerTaskResponse
     */
    public function applyAgOneKeyOnlyCheckerTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyAgOneKeyOnlyCheckerTask',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyAgOneKeyOnlyCheckerTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请ag注销
     *
     * @param request - ApplyAgOneKeyOnlyCheckerTaskRequest
     *
     * @returns ApplyAgOneKeyOnlyCheckerTaskResponse
     *
     * @param ApplyAgOneKeyOnlyCheckerTaskRequest $request
     *
     * @return ApplyAgOneKeyOnlyCheckerTaskResponse
     */
    public function applyAgOneKeyOnlyCheckerTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAgOneKeyOnlyCheckerTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - ApplyIdentityRegistrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyIdentityRegistrationResponse
     *
     * @param ApplyIdentityRegistrationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ApplyIdentityRegistrationResponse
     */
    public function applyIdentityRegistrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->docBackPic) {
            @$query['DocBackPic'] = $request->docBackPic;
        }

        if (null !== $request->docFrontPic) {
            @$query['DocFrontPic'] = $request->docFrontPic;
        }

        if (null !== $request->docNum) {
            @$query['DocNum'] = $request->docNum;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->fullName) {
            @$query['FullName'] = $request->fullName;
        }

        if (null !== $request->registeredAddress) {
            @$query['RegisteredAddress'] = $request->registeredAddress;
        }

        if (null !== $request->registeredCountry) {
            @$query['RegisteredCountry'] = $request->registeredCountry;
        }

        if (null !== $request->registeredNum) {
            @$query['RegisteredNum'] = $request->registeredNum;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->tel) {
            @$query['Tel'] = $request->tel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyIdentityRegistration',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyIdentityRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ApplyIdentityRegistrationRequest
     *
     * @returns ApplyIdentityRegistrationResponse
     *
     * @param ApplyIdentityRegistrationRequest $request
     *
     * @return ApplyIdentityRegistrationResponse
     */
    public function applyIdentityRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyIdentityRegistrationWithOptions($request, $runtime);
    }

    /**
     * @param request - AsyncCreateAgAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AsyncCreateAgAccountResponse
     *
     * @param AsyncCreateAgAccountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AsyncCreateAgAccountResponse
     */
    public function asyncCreateAgAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loginEmail) {
            @$query['LoginEmail'] = $request->loginEmail;
        }

        if (null !== $request->maserAccountInfo) {
            @$query['MaserAccountInfo'] = $request->maserAccountInfo;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AsyncCreateAgAccount',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AsyncCreateAgAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AsyncCreateAgAccountRequest
     *
     * @returns AsyncCreateAgAccountResponse
     *
     * @param AsyncCreateAgAccountRequest $request
     *
     * @return AsyncCreateAgAccountResponse
     */
    public function asyncCreateAgAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asyncCreateAgAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - AsyncModifyAgLoginEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AsyncModifyAgLoginEmailResponse
     *
     * @param AsyncModifyAgLoginEmailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AsyncModifyAgLoginEmailResponse
     */
    public function asyncModifyAgLoginEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->newLoginEmail) {
            @$query['NewLoginEmail'] = $request->newLoginEmail;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AsyncModifyAgLoginEmail',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AsyncModifyAgLoginEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AsyncModifyAgLoginEmailRequest
     *
     * @returns AsyncModifyAgLoginEmailResponse
     *
     * @param AsyncModifyAgLoginEmailRequest $request
     *
     * @return AsyncModifyAgLoginEmailResponse
     */
    public function asyncModifyAgLoginEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asyncModifyAgLoginEmailWithOptions($request, $runtime);
    }

    /**
     * @param request - AuthAndActiveWithHidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthAndActiveWithHidResponse
     *
     * @param AuthAndActiveWithHidRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AuthAndActiveWithHidResponse
     */
    public function authAndActiveWithHidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthAndActiveWithHid',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthAndActiveWithHidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AuthAndActiveWithHidRequest
     *
     * @returns AuthAndActiveWithHidResponse
     *
     * @param AuthAndActiveWithHidRequest $request
     *
     * @return AuthAndActiveWithHidResponse
     */
    public function authAndActiveWithHid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authAndActiveWithHidWithOptions($request, $runtime);
    }

    /**
     * @param request - AuthAndRefreshLoginTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthAndRefreshLoginTicketResponse
     *
     * @param AuthAndRefreshLoginTicketRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AuthAndRefreshLoginTicketResponse
     */
    public function authAndRefreshLoginTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthAndRefreshLoginTicket',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthAndRefreshLoginTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AuthAndRefreshLoginTicketRequest
     *
     * @returns AuthAndRefreshLoginTicketResponse
     *
     * @param AuthAndRefreshLoginTicketRequest $request
     *
     * @return AuthAndRefreshLoginTicketResponse
     */
    public function authAndRefreshLoginTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authAndRefreshLoginTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - AuthLoginTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthLoginTicketResponse
     *
     * @param AuthLoginTicketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AuthLoginTicketResponse
     */
    public function authLoginTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->minorAuthCode) {
            @$query['MinorAuthCode'] = $request->minorAuthCode;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthLoginTicket',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthLoginTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AuthLoginTicketRequest
     *
     * @returns AuthLoginTicketResponse
     *
     * @param AuthLoginTicketRequest $request
     *
     * @return AuthLoginTicketResponse
     */
    public function authLoginTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authLoginTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchQueryAgAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchQueryAgAccountResponse
     *
     * @param BatchQueryAgAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchQueryAgAccountResponse
     */
    public function batchQueryAgAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pkList) {
            @$query['PkList'] = $request->pkList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchQueryAgAccount',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchQueryAgAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchQueryAgAccountRequest
     *
     * @returns BatchQueryAgAccountResponse
     *
     * @param BatchQueryAgAccountRequest $request
     *
     * @return BatchQueryAgAccountResponse
     */
    public function batchQueryAgAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchQueryAgAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchQueryCreateAccountTraceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchQueryCreateAccountTraceResponse
     *
     * @param BatchQueryCreateAccountTraceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchQueryCreateAccountTraceResponse
     */
    public function batchQueryCreateAccountTraceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->traceNoList) {
            @$query['TraceNoList'] = $request->traceNoList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchQueryCreateAccountTrace',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchQueryCreateAccountTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchQueryCreateAccountTraceRequest
     *
     * @returns BatchQueryCreateAccountTraceResponse
     *
     * @param BatchQueryCreateAccountTraceRequest $request
     *
     * @return BatchQueryCreateAccountTraceResponse
     */
    public function batchQueryCreateAccountTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchQueryCreateAccountTraceWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchQueryModifyLoginEmailTraceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchQueryModifyLoginEmailTraceResponse
     *
     * @param BatchQueryModifyLoginEmailTraceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return BatchQueryModifyLoginEmailTraceResponse
     */
    public function batchQueryModifyLoginEmailTraceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->traceNoList) {
            @$query['TraceNoList'] = $request->traceNoList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchQueryModifyLoginEmailTrace',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchQueryModifyLoginEmailTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchQueryModifyLoginEmailTraceRequest
     *
     * @returns BatchQueryModifyLoginEmailTraceResponse
     *
     * @param BatchQueryModifyLoginEmailTraceRequest $request
     *
     * @return BatchQueryModifyLoginEmailTraceResponse
     */
    public function batchQueryModifyLoginEmailTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchQueryModifyLoginEmailTraceWithOptions($request, $runtime);
    }

    /**
     * @param request - CancelAsyncCreateAgAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAsyncCreateAgAccountResponse
     *
     * @param CancelAsyncCreateAgAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelAsyncCreateAgAccountResponse
     */
    public function cancelAsyncCreateAgAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->traceNo) {
            @$query['TraceNo'] = $request->traceNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelAsyncCreateAgAccount',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAsyncCreateAgAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelAsyncCreateAgAccountRequest
     *
     * @returns CancelAsyncCreateAgAccountResponse
     *
     * @param CancelAsyncCreateAgAccountRequest $request
     *
     * @return CancelAsyncCreateAgAccountResponse
     */
    public function cancelAsyncCreateAgAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAsyncCreateAgAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - CancelAsyncModifyLoginEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAsyncModifyLoginEmailResponse
     *
     * @param CancelAsyncModifyLoginEmailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CancelAsyncModifyLoginEmailResponse
     */
    public function cancelAsyncModifyLoginEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->traceNo) {
            @$query['TraceNo'] = $request->traceNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelAsyncModifyLoginEmail',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAsyncModifyLoginEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelAsyncModifyLoginEmailRequest
     *
     * @returns CancelAsyncModifyLoginEmailResponse
     *
     * @param CancelAsyncModifyLoginEmailRequest $request
     *
     * @return CancelAsyncModifyLoginEmailResponse
     */
    public function cancelAsyncModifyLoginEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAsyncModifyLoginEmailWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeAgAccountNationalityCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeAgAccountNationalityCodeResponse
     *
     * @param ChangeAgAccountNationalityCodeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ChangeAgAccountNationalityCodeResponse
     */
    public function changeAgAccountNationalityCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->nationalityCode) {
            @$query['NationalityCode'] = $request->nationalityCode;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeAgAccountNationalityCode',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeAgAccountNationalityCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeAgAccountNationalityCodeRequest
     *
     * @returns ChangeAgAccountNationalityCodeResponse
     *
     * @param ChangeAgAccountNationalityCodeRequest $request
     *
     * @return ChangeAgAccountNationalityCodeResponse
     */
    public function changeAgAccountNationalityCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAgAccountNationalityCodeWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeAgSecurityEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeAgSecurityEmailResponse
     *
     * @param ChangeAgSecurityEmailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeAgSecurityEmailResponse
     */
    public function changeAgSecurityEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->securityEmail) {
            @$query['SecurityEmail'] = $request->securityEmail;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeAgSecurityEmail',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeAgSecurityEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeAgSecurityEmailRequest
     *
     * @returns ChangeAgSecurityEmailResponse
     *
     * @param ChangeAgSecurityEmailRequest $request
     *
     * @return ChangeAgSecurityEmailResponse
     */
    public function changeAgSecurityEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAgSecurityEmailWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeAgSecurityMobileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeAgSecurityMobileResponse
     *
     * @param ChangeAgSecurityMobileRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChangeAgSecurityMobileResponse
     */
    public function changeAgSecurityMobileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->securityMobile) {
            @$query['SecurityMobile'] = $request->securityMobile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeAgSecurityMobile',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeAgSecurityMobileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeAgSecurityMobileRequest
     *
     * @returns ChangeAgSecurityMobileResponse
     *
     * @param ChangeAgSecurityMobileRequest $request
     *
     * @return ChangeAgSecurityMobileResponse
     */
    public function changeAgSecurityMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAgSecurityMobileWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateAccountProfileInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountProfileInfoResponse
     *
     * @param CreateAccountProfileInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAccountProfileInfoResponse
     */
    public function createAccountProfileInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountJson) {
            @$query['AccountJson'] = $request->accountJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccountProfileInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccountProfileInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAccountProfileInfoRequest
     *
     * @returns CreateAccountProfileInfoResponse
     *
     * @param CreateAccountProfileInfoRequest $request
     *
     * @return CreateAccountProfileInfoResponse
     */
    public function createAccountProfileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountProfileInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateAgAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgAccountResponse
     *
     * @param CreateAgAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAgAccountResponse
     */
    public function createAgAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loginEmail) {
            @$query['LoginEmail'] = $request->loginEmail;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->nationCode) {
            @$query['NationCode'] = $request->nationCode;
        }

        if (null !== $request->own) {
            @$query['Own'] = $request->own;
        }

        if (null !== $request->realParentPk) {
            @$query['RealParentPk'] = $request->realParentPk;
        }

        if (null !== $request->securityMobile) {
            @$query['SecurityMobile'] = $request->securityMobile;
        }

        if (null !== $request->showNickName) {
            @$query['ShowNickName'] = $request->showNickName;
        }

        if (null !== $request->siteNick) {
            @$query['SiteNick'] = $request->siteNick;
        }

        if (null !== $request->srcAccountInfo) {
            @$query['srcAccountInfo'] = $request->srcAccountInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAgAccount',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAgAccountRequest
     *
     * @returns CreateAgAccountResponse
     *
     * @param CreateAgAccountRequest $request
     *
     * @return CreateAgAccountResponse
     */
    public function createAgAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateContacterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContacterResponse
     *
     * @param CreateContacterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateContacterResponse
     */
    public function createContacterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contacterAddress) {
            @$query['ContacterAddress'] = $request->contacterAddress;
        }

        if (null !== $request->contacterDingding) {
            @$query['ContacterDingding'] = $request->contacterDingding;
        }

        if (null !== $request->contacterEmail) {
            @$query['ContacterEmail'] = $request->contacterEmail;
        }

        if (null !== $request->contacterMobile) {
            @$query['ContacterMobile'] = $request->contacterMobile;
        }

        if (null !== $request->contacterName) {
            @$query['ContacterName'] = $request->contacterName;
        }

        if (null !== $request->contacterPosition) {
            @$query['ContacterPosition'] = $request->contacterPosition;
        }

        if (null !== $request->contacterStaffNo) {
            @$query['ContacterStaffNo'] = $request->contacterStaffNo;
        }

        if (null !== $request->contacterType) {
            @$query['ContacterType'] = $request->contacterType;
        }

        if (null !== $request->contacterWangwang) {
            @$query['ContacterWangwang'] = $request->contacterWangwang;
        }

        if (null !== $request->emailConfirmed) {
            @$query['EmailConfirmed'] = $request->emailConfirmed;
        }

        if (null !== $request->mobileConfirmed) {
            @$query['MobileConfirmed'] = $request->mobileConfirmed;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContacter',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContacterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateContacterRequest
     *
     * @returns CreateContacterResponse
     *
     * @param CreateContacterRequest $request
     *
     * @return CreateContacterResponse
     */
    public function createContacter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContacterWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateRealNameCertificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRealNameCertificationResponse
     *
     * @param CreateRealNameCertificationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateRealNameCertificationResponse
     */
    public function createRealNameCertificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountCertifyType) {
            @$query['AccountCertifyType'] = $request->accountCertifyType;
        }

        if (null !== $request->corporateLicenseNumber) {
            @$query['CorporateLicenseNumber'] = $request->corporateLicenseNumber;
        }

        if (null !== $request->corporateName) {
            @$query['CorporateName'] = $request->corporateName;
        }

        if (null !== $request->licenseNumber) {
            @$query['LicenseNumber'] = $request->licenseNumber;
        }

        if (null !== $request->licenseType) {
            @$query['LicenseType'] = $request->licenseType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRealNameCertification',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRealNameCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateRealNameCertificationRequest
     *
     * @returns CreateRealNameCertificationResponse
     *
     * @param CreateRealNameCertificationRequest $request
     *
     * @return CreateRealNameCertificationResponse
     */
    public function createRealNameCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRealNameCertificationWithOptions($request, $runtime);
    }

    /**
     * @param request - CustomerSensitiveInfoLogicalDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CustomerSensitiveInfoLogicalDeleteResponse
     *
     * @param CustomerSensitiveInfoLogicalDeleteRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CustomerSensitiveInfoLogicalDeleteResponse
     */
    public function customerSensitiveInfoLogicalDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CustomerSensitiveInfoLogicalDelete',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CustomerSensitiveInfoLogicalDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CustomerSensitiveInfoLogicalDeleteRequest
     *
     * @returns CustomerSensitiveInfoLogicalDeleteResponse
     *
     * @param CustomerSensitiveInfoLogicalDeleteRequest $request
     *
     * @return CustomerSensitiveInfoLogicalDeleteResponse
     */
    public function customerSensitiveInfoLogicalDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customerSensitiveInfoLogicalDeleteWithOptions($request, $runtime);
    }

    /**
     * @param request - CustomerSensitiveInfoPhysicalDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CustomerSensitiveInfoPhysicalDeleteResponse
     *
     * @param CustomerSensitiveInfoPhysicalDeleteRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CustomerSensitiveInfoPhysicalDeleteResponse
     */
    public function customerSensitiveInfoPhysicalDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CustomerSensitiveInfoPhysicalDelete',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CustomerSensitiveInfoPhysicalDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CustomerSensitiveInfoPhysicalDeleteRequest
     *
     * @returns CustomerSensitiveInfoPhysicalDeleteResponse
     *
     * @param CustomerSensitiveInfoPhysicalDeleteRequest $request
     *
     * @return CustomerSensitiveInfoPhysicalDeleteResponse
     */
    public function customerSensitiveInfoPhysicalDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customerSensitiveInfoPhysicalDeleteWithOptions($request, $runtime);
    }

    /**
     * 同步Del缓存操作.
     *
     * @param request - DelCacheOperateSyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DelCacheOperateSyncResponse
     *
     * @param DelCacheOperateSyncRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DelCacheOperateSyncResponse
     */
    public function delCacheOperateSyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DelCacheOperateSync',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DelCacheOperateSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步Del缓存操作.
     *
     * @param request - DelCacheOperateSyncRequest
     *
     * @returns DelCacheOperateSyncResponse
     *
     * @param DelCacheOperateSyncRequest $request
     *
     * @return DelCacheOperateSyncResponse
     */
    public function delCacheOperateSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delCacheOperateSyncWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteContacterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContacterResponse
     *
     * @param DeleteContacterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteContacterResponse
     */
    public function deleteContacterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contacterId) {
            @$query['ContacterId'] = $request->contacterId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContacter',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContacterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteContacterRequest
     *
     * @returns DeleteContacterResponse
     *
     * @param DeleteContacterRequest $request
     *
     * @return DeleteContacterResponse
     */
    public function deleteContacter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContacterWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteCustomerLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomerLabelResponse
     *
     * @param DeleteCustomerLabelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCustomerLabelResponse
     */
    public function deleteCustomerLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labelSeries) {
            @$query['LabelSeries'] = $request->labelSeries;
        }

        if (null !== $request->labelTypes) {
            @$query['LabelTypes'] = $request->labelTypes;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomerLabel',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomerLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteCustomerLabelRequest
     *
     * @returns DeleteCustomerLabelResponse
     *
     * @param DeleteCustomerLabelRequest $request
     *
     * @return DeleteCustomerLabelResponse
     */
    public function deleteCustomerLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomerLabelWithOptions($request, $runtime);
    }

    /**
     * 根据outerId查询是否存在绑定关系.
     *
     * @param request - ExistBindsByOuterIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExistBindsByOuterIdResponse
     *
     * @param ExistBindsByOuterIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ExistBindsByOuterIdResponse
     */
    public function existBindsByOuterIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExistBindsByOuterId',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExistBindsByOuterIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据outerId查询是否存在绑定关系.
     *
     * @param request - ExistBindsByOuterIdRequest
     *
     * @returns ExistBindsByOuterIdResponse
     *
     * @param ExistBindsByOuterIdRequest $request
     *
     * @return ExistBindsByOuterIdResponse
     */
    public function existBindsByOuterId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->existBindsByOuterIdWithOptions($request, $runtime);
    }

    /**
     * @param request - FindAllContacterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindAllContacterResponse
     *
     * @param FindAllContacterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FindAllContacterResponse
     */
    public function findAllContacterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->localeString) {
            @$query['LocaleString'] = $request->localeString;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindAllContacter',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindAllContacterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FindAllContacterRequest
     *
     * @returns FindAllContacterResponse
     *
     * @param FindAllContacterRequest $request
     *
     * @return FindAllContacterResponse
     */
    public function findAllContacter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findAllContacterWithOptions($request, $runtime);
    }

    /**
     * @param request - FindBizCategoryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindBizCategoryConfigResponse
     *
     * @param FindBizCategoryConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FindBizCategoryConfigResponse
     */
    public function findBizCategoryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->localeString) {
            @$query['LocaleString'] = $request->localeString;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindBizCategoryConfig',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindBizCategoryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FindBizCategoryConfigRequest
     *
     * @returns FindBizCategoryConfigResponse
     *
     * @param FindBizCategoryConfigRequest $request
     *
     * @return FindBizCategoryConfigResponse
     */
    public function findBizCategoryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findBizCategoryConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - FindContacterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindContacterResponse
     *
     * @param FindContacterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FindContacterResponse
     */
    public function findContacterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contacterId) {
            @$query['ContacterId'] = $request->contacterId;
        }

        if (null !== $request->localeString) {
            @$query['LocaleString'] = $request->localeString;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindContacter',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindContacterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FindContacterRequest
     *
     * @returns FindContacterResponse
     *
     * @param FindContacterRequest $request
     *
     * @return FindContacterResponse
     */
    public function findContacter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findContacterWithOptions($request, $runtime);
    }

    /**
     * @param request - FindCustomerInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindCustomerInfoResponse
     *
     * @param FindCustomerInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FindCustomerInfoResponse
     */
    public function findCustomerInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindCustomerInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindCustomerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FindCustomerInfoRequest
     *
     * @returns FindCustomerInfoResponse
     *
     * @param FindCustomerInfoRequest $request
     *
     * @return FindCustomerInfoResponse
     */
    public function findCustomerInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findCustomerInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - FindCustomerSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindCustomerSnapshotResponse
     *
     * @param FindCustomerSnapshotRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return FindCustomerSnapshotResponse
     */
    public function findCustomerSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->infoType) {
            @$query['InfoType'] = $request->infoType;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindCustomerSnapshot',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindCustomerSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FindCustomerSnapshotRequest
     *
     * @returns FindCustomerSnapshotResponse
     *
     * @param FindCustomerSnapshotRequest $request
     *
     * @return FindCustomerSnapshotResponse
     */
    public function findCustomerSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findCustomerSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param request - FindFinanceTaxRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindFinanceTaxResponse
     *
     * @param FindFinanceTaxRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return FindFinanceTaxResponse
     */
    public function findFinanceTaxWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->HId) {
            @$query['HId'] = $request->HId;
        }

        if (null !== $request->taxVersion) {
            @$query['TaxVersion'] = $request->taxVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindFinanceTax',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindFinanceTaxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FindFinanceTaxRequest
     *
     * @returns FindFinanceTaxResponse
     *
     * @param FindFinanceTaxRequest $request
     *
     * @return FindFinanceTaxResponse
     */
    public function findFinanceTax($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findFinanceTaxWithOptions($request, $runtime);
    }

    /**
     * @param request - FindFinanceTaxDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindFinanceTaxDetailResponse
     *
     * @param FindFinanceTaxDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return FindFinanceTaxDetailResponse
     */
    public function findFinanceTaxDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kpId) {
            @$query['KpId'] = $request->kpId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindFinanceTaxDetail',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindFinanceTaxDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FindFinanceTaxDetailRequest
     *
     * @returns FindFinanceTaxDetailResponse
     *
     * @param FindFinanceTaxDetailRequest $request
     *
     * @return FindFinanceTaxDetailResponse
     */
    public function findFinanceTaxDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findFinanceTaxDetailWithOptions($request, $runtime);
    }

    /**
     * 登录过程中根据HID匹配Pk的历史逻辑.
     *
     * @param request - FindPkByHidForLoginWithLegacyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindPkByHidForLoginWithLegacyResponse
     *
     * @param FindPkByHidForLoginWithLegacyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return FindPkByHidForLoginWithLegacyResponse
     */
    public function findPkByHidForLoginWithLegacyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindPkByHidForLoginWithLegacy',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindPkByHidForLoginWithLegacyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 登录过程中根据HID匹配Pk的历史逻辑.
     *
     * @param request - FindPkByHidForLoginWithLegacyRequest
     *
     * @returns FindPkByHidForLoginWithLegacyResponse
     *
     * @param FindPkByHidForLoginWithLegacyRequest $request
     *
     * @return FindPkByHidForLoginWithLegacyResponse
     */
    public function findPkByHidForLoginWithLegacy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findPkByHidForLoginWithLegacyWithOptions($request, $runtime);
    }

    /**
     * @param request - ForbiddenAgAccountLoginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ForbiddenAgAccountLoginResponse
     *
     * @param ForbiddenAgAccountLoginRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ForbiddenAgAccountLoginResponse
     */
    public function forbiddenAgAccountLoginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ForbiddenAgAccountLogin',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ForbiddenAgAccountLoginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ForbiddenAgAccountLoginRequest
     *
     * @returns ForbiddenAgAccountLoginResponse
     *
     * @param ForbiddenAgAccountLoginRequest $request
     *
     * @return ForbiddenAgAccountLoginResponse
     */
    public function forbiddenAgAccountLogin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forbiddenAgAccountLoginWithOptions($request, $runtime);
    }

    /**
     * 获取实名认证url.
     *
     * @param request - GenerateAliyunCertUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAliyunCertUrlResponse
     *
     * @param GenerateAliyunCertUrlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateAliyunCertUrlResponse
     */
    public function generateAliyunCertUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunPk) {
            @$query['AliyunPk'] = $request->aliyunPk;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->applyChannel) {
            @$query['ApplyChannel'] = $request->applyChannel;
        }

        if (null !== $request->applyType) {
            @$query['ApplyType'] = $request->applyType;
        }

        if (null !== $request->callback) {
            @$query['Callback'] = $request->callback;
        }

        if (null !== $request->certWay) {
            @$query['CertWay'] = $request->certWay;
        }

        if (null !== $request->ignoreAlreadyCert) {
            @$query['IgnoreAlreadyCert'] = $request->ignoreAlreadyCert;
        }

        if (null !== $request->isMobile) {
            @$query['IsMobile'] = $request->isMobile;
        }

        if (null !== $request->isOpenApp) {
            @$query['IsOpenApp'] = $request->isOpenApp;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->subjectType) {
            @$query['SubjectType'] = $request->subjectType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateAliyunCertUrl',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateAliyunCertUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实名认证url.
     *
     * @param request - GenerateAliyunCertUrlRequest
     *
     * @returns GenerateAliyunCertUrlResponse
     *
     * @param GenerateAliyunCertUrlRequest $request
     *
     * @return GenerateAliyunCertUrlResponse
     */
    public function generateAliyunCertUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAliyunCertUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAgAccountAkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgAccountAkResponse
     *
     * @param GetAgAccountAkRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAgAccountAkResponse
     */
    public function getAgAccountAkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgAccountAk',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgAccountAkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAgAccountAkRequest
     *
     * @returns GetAgAccountAkResponse
     *
     * @param GetAgAccountAkRequest $request
     *
     * @return GetAgAccountAkResponse
     */
    public function getAgAccountAk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgAccountAkWithOptions($request, $runtime);
    }

    /**
     * 申请ag注销
     *
     * @param request - GetAgOneKeyDeleteTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgOneKeyDeleteTaskResponse
     *
     * @param GetAgOneKeyDeleteTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAgOneKeyDeleteTaskResponse
     */
    public function getAgOneKeyDeleteTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgOneKeyDeleteTask',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgOneKeyDeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请ag注销
     *
     * @param request - GetAgOneKeyDeleteTaskRequest
     *
     * @returns GetAgOneKeyDeleteTaskResponse
     *
     * @param GetAgOneKeyDeleteTaskRequest $request
     *
     * @return GetAgOneKeyDeleteTaskResponse
     */
    public function getAgOneKeyDeleteTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgOneKeyDeleteTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAgRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgRelationResponse
     *
     * @param GetAgRelationRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAgRelationResponse
     */
    public function getAgRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgRelation',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAgRelationRequest
     *
     * @returns GetAgRelationResponse
     *
     * @param GetAgRelationRequest $request
     *
     * @return GetAgRelationResponse
     */
    public function getAgRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgRelationWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAliyunIdByPkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAliyunIdByPkResponse
     *
     * @param GetAliyunIdByPkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAliyunIdByPkResponse
     */
    public function getAliyunIdByPkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAliyunIdByPk',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAliyunIdByPkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAliyunIdByPkRequest
     *
     * @returns GetAliyunIdByPkResponse
     *
     * @param GetAliyunIdByPkRequest $request
     *
     * @return GetAliyunIdByPkResponse
     */
    public function getAliyunIdByPk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAliyunIdByPkWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAliyunPKByAliyunIDRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAliyunPKByAliyunIDResponse
     *
     * @param GetAliyunPKByAliyunIDRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAliyunPKByAliyunIDResponse
     */
    public function getAliyunPKByAliyunIDWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunId) {
            @$query['AliyunId'] = $request->aliyunId;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAliyunPKByAliyunID',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAliyunPKByAliyunIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAliyunPKByAliyunIDRequest
     *
     * @returns GetAliyunPKByAliyunIDResponse
     *
     * @param GetAliyunPKByAliyunIDRequest $request
     *
     * @return GetAliyunPKByAliyunIDResponse
     */
    public function getAliyunPKByAliyunID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAliyunPKByAliyunIDWithOptions($request, $runtime);
    }

    /**
     * @param request - GetCustomerCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomerCategoryResponse
     *
     * @param GetCustomerCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCustomerCategoryResponse
     */
    public function getCustomerCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->localeString) {
            @$query['LocaleString'] = $request->localeString;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomerCategory',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomerCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetCustomerCategoryRequest
     *
     * @returns GetCustomerCategoryResponse
     *
     * @param GetCustomerCategoryRequest $request
     *
     * @return GetCustomerCategoryResponse
     */
    public function getCustomerCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerCategoryWithOptions($request, $runtime);
    }

    /**
     * @param request - GetCustomerCategoryDictionaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomerCategoryDictionaryResponse
     *
     * @param GetCustomerCategoryDictionaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetCustomerCategoryDictionaryResponse
     */
    public function getCustomerCategoryDictionaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomerCategoryDictionary',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomerCategoryDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetCustomerCategoryDictionaryRequest
     *
     * @returns GetCustomerCategoryDictionaryResponse
     *
     * @param GetCustomerCategoryDictionaryRequest $request
     *
     * @return GetCustomerCategoryDictionaryResponse
     */
    public function getCustomerCategoryDictionary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerCategoryDictionaryWithOptions($request, $runtime);
    }

    /**
     * @param request - GetCustomerInformationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomerInformationResponse
     *
     * @param GetCustomerInformationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCustomerInformationResponse
     */
    public function getCustomerInformationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomerInformation',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomerInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetCustomerInformationRequest
     *
     * @returns GetCustomerInformationResponse
     *
     * @param GetCustomerInformationRequest $request
     *
     * @return GetCustomerInformationResponse
     */
    public function getCustomerInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerInformationWithOptions($request, $runtime);
    }

    /**
     * @param request - GetDingTalkUserOrgByAliyunTmpCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDingTalkUserOrgByAliyunTmpCodeResponse
     *
     * @param GetDingTalkUserOrgByAliyunTmpCodeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetDingTalkUserOrgByAliyunTmpCodeResponse
     */
    public function getDingTalkUserOrgByAliyunTmpCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDingTalkUserOrgByAliyunTmpCode',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDingTalkUserOrgByAliyunTmpCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetDingTalkUserOrgByAliyunTmpCodeRequest
     *
     * @returns GetDingTalkUserOrgByAliyunTmpCodeResponse
     *
     * @param GetDingTalkUserOrgByAliyunTmpCodeRequest $request
     *
     * @return GetDingTalkUserOrgByAliyunTmpCodeResponse
     */
    public function getDingTalkUserOrgByAliyunTmpCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDingTalkUserOrgByAliyunTmpCodeWithOptions($request, $runtime);
    }

    /**
     * @param request - GetIdentityRegistrationByCustomerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityRegistrationByCustomerResponse
     *
     * @param GetIdentityRegistrationByCustomerRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetIdentityRegistrationByCustomerResponse
     */
    public function getIdentityRegistrationByCustomerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIdentityRegistrationByCustomer',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdentityRegistrationByCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetIdentityRegistrationByCustomerRequest
     *
     * @returns GetIdentityRegistrationByCustomerResponse
     *
     * @param GetIdentityRegistrationByCustomerRequest $request
     *
     * @return GetIdentityRegistrationByCustomerResponse
     */
    public function getIdentityRegistrationByCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdentityRegistrationByCustomerWithOptions($request, $runtime);
    }

    /**
     * @param request - GetProfileTypeByPkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProfileTypeByPkResponse
     *
     * @param GetProfileTypeByPkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetProfileTypeByPkResponse
     */
    public function getProfileTypeByPkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProfileTypeByPk',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProfileTypeByPkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetProfileTypeByPkRequest
     *
     * @returns GetProfileTypeByPkResponse
     *
     * @param GetProfileTypeByPkRequest $request
     *
     * @return GetProfileTypeByPkResponse
     */
    public function getProfileTypeByPk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProfileTypeByPkWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUploadIdentityRegistrationDocConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadIdentityRegistrationDocConfigResponse
     *
     * @param GetUploadIdentityRegistrationDocConfigRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetUploadIdentityRegistrationDocConfigResponse
     */
    public function getUploadIdentityRegistrationDocConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUploadIdentityRegistrationDocConfig',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUploadIdentityRegistrationDocConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetUploadIdentityRegistrationDocConfigRequest
     *
     * @returns GetUploadIdentityRegistrationDocConfigResponse
     *
     * @param GetUploadIdentityRegistrationDocConfigRequest $request
     *
     * @return GetUploadIdentityRegistrationDocConfigResponse
     */
    public function getUploadIdentityRegistrationDocConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadIdentityRegistrationDocConfigWithOptions($request, $runtime);
    }

    /**
     * IncrBy缓存操作.
     *
     * @param request - IncrByCacheOperateSyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IncrByCacheOperateSyncResponse
     *
     * @param IncrByCacheOperateSyncRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return IncrByCacheOperateSyncResponse
     */
    public function incrByCacheOperateSyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultValue) {
            @$query['DefaultValue'] = $request->defaultValue;
        }

        if (null !== $request->expireSeconds) {
            @$query['ExpireSeconds'] = $request->expireSeconds;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->step) {
            @$query['Step'] = $request->step;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IncrByCacheOperateSync',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IncrByCacheOperateSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * IncrBy缓存操作.
     *
     * @param request - IncrByCacheOperateSyncRequest
     *
     * @returns IncrByCacheOperateSyncResponse
     *
     * @param IncrByCacheOperateSyncRequest $request
     *
     * @return IncrByCacheOperateSyncResponse
     */
    public function incrByCacheOperateSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->incrByCacheOperateSyncWithOptions($request, $runtime);
    }

    /**
     * 申请ag注销
     *
     * @param request - JudgeAgExistQuietPeriodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns JudgeAgExistQuietPeriodResponse
     *
     * @param JudgeAgExistQuietPeriodRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return JudgeAgExistQuietPeriodResponse
     */
    public function judgeAgExistQuietPeriodWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'JudgeAgExistQuietPeriod',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return JudgeAgExistQuietPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请ag注销
     *
     * @param request - JudgeAgExistQuietPeriodRequest
     *
     * @returns JudgeAgExistQuietPeriodResponse
     *
     * @param JudgeAgExistQuietPeriodRequest $request
     *
     * @return JudgeAgExistQuietPeriodResponse
     */
    public function judgeAgExistQuietPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->judgeAgExistQuietPeriodWithOptions($request, $runtime);
    }

    /**
     * @param request - LoadRealNameInfoByPkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoadRealNameInfoByPkResponse
     *
     * @param LoadRealNameInfoByPkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return LoadRealNameInfoByPkResponse
     */
    public function loadRealNameInfoByPkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LoadRealNameInfoByPk',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LoadRealNameInfoByPkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - LoadRealNameInfoByPkRequest
     *
     * @returns LoadRealNameInfoByPkResponse
     *
     * @param LoadRealNameInfoByPkRequest $request
     *
     * @return LoadRealNameInfoByPkResponse
     */
    public function loadRealNameInfoByPk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loadRealNameInfoByPkWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - MapFromHavanaBindIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MapFromHavanaBindIdResponse
     *
     * @param MapFromHavanaBindIdRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return MapFromHavanaBindIdResponse
     */
    public function mapFromHavanaBindIdWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new MapFromHavanaBindIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->havanaBindStations) {
            $request->havanaBindStationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->havanaBindStations, 'HavanaBindStations', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->havanaBindId) {
            @$query['HavanaBindId'] = $request->havanaBindId;
        }

        if (null !== $request->havanaBindStationsShrink) {
            @$query['HavanaBindStations'] = $request->havanaBindStationsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MapFromHavanaBindId',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MapFromHavanaBindIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MapFromHavanaBindIdRequest
     *
     * @returns MapFromHavanaBindIdResponse
     *
     * @param MapFromHavanaBindIdRequest $request
     *
     * @return MapFromHavanaBindIdResponse
     */
    public function mapFromHavanaBindId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mapFromHavanaBindIdWithOptions($request, $runtime);
    }

    /**
     * @param request - MapPkFromHidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MapPkFromHidResponse
     *
     * @param MapPkFromHidRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return MapPkFromHidResponse
     */
    public function mapPkFromHidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->hid) {
            @$query['Hid'] = $request->hid;
        }

        if (null !== $request->mappingScenes) {
            @$query['MappingScenes'] = $request->mappingScenes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MapPkFromHid',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MapPkFromHidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MapPkFromHidRequest
     *
     * @returns MapPkFromHidResponse
     *
     * @param MapPkFromHidRequest $request
     *
     * @return MapPkFromHidResponse
     */
    public function mapPkFromHid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mapPkFromHidWithOptions($request, $runtime);
    }

    /**
     * @param request - MapPkToHidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MapPkToHidResponse
     *
     * @param MapPkToHidRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return MapPkToHidResponse
     */
    public function mapPkToHidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mappingScenes) {
            @$query['MappingScenes'] = $request->mappingScenes;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MapPkToHid',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MapPkToHidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MapPkToHidRequest
     *
     * @returns MapPkToHidResponse
     *
     * @param MapPkToHidRequest $request
     *
     * @return MapPkToHidResponse
     */
    public function mapPkToHid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mapPkToHidWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - MapToHavanaBindIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MapToHavanaBindIdResponse
     *
     * @param MapToHavanaBindIdRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return MapToHavanaBindIdResponse
     */
    public function mapToHavanaBindIdWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new MapToHavanaBindIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->havanaBindStations) {
            $request->havanaBindStationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->havanaBindStations, 'HavanaBindStations', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->havanaBindStationsShrink) {
            @$query['HavanaBindStations'] = $request->havanaBindStationsShrink;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MapToHavanaBindId',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MapToHavanaBindIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MapToHavanaBindIdRequest
     *
     * @returns MapToHavanaBindIdResponse
     *
     * @param MapToHavanaBindIdRequest $request
     *
     * @return MapToHavanaBindIdResponse
     */
    public function mapToHavanaBindId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mapToHavanaBindIdWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyBizCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBizCategoryResponse
     *
     * @param ModifyBizCategoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyBizCategoryResponse
     */
    public function modifyBizCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramList) {
            @$query['ParamList'] = $request->paramList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBizCategory',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBizCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyBizCategoryRequest
     *
     * @returns ModifyBizCategoryResponse
     *
     * @param ModifyBizCategoryRequest $request
     *
     * @return ModifyBizCategoryResponse
     */
    public function modifyBizCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBizCategoryWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyContacterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyContacterResponse
     *
     * @param ModifyContacterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyContacterResponse
     */
    public function modifyContacterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contacterAddress) {
            @$query['ContacterAddress'] = $request->contacterAddress;
        }

        if (null !== $request->contacterDingding) {
            @$query['ContacterDingding'] = $request->contacterDingding;
        }

        if (null !== $request->contacterEmail) {
            @$query['ContacterEmail'] = $request->contacterEmail;
        }

        if (null !== $request->contacterId) {
            @$query['ContacterId'] = $request->contacterId;
        }

        if (null !== $request->contacterMobile) {
            @$query['ContacterMobile'] = $request->contacterMobile;
        }

        if (null !== $request->contacterName) {
            @$query['ContacterName'] = $request->contacterName;
        }

        if (null !== $request->contacterPosition) {
            @$query['ContacterPosition'] = $request->contacterPosition;
        }

        if (null !== $request->contacterStaffNo) {
            @$query['ContacterStaffNo'] = $request->contacterStaffNo;
        }

        if (null !== $request->contacterType) {
            @$query['ContacterType'] = $request->contacterType;
        }

        if (null !== $request->contacterWangwang) {
            @$query['ContacterWangwang'] = $request->contacterWangwang;
        }

        if (null !== $request->emailConfirmed) {
            @$query['EmailConfirmed'] = $request->emailConfirmed;
        }

        if (null !== $request->mobileConfirmed) {
            @$query['MobileConfirmed'] = $request->mobileConfirmed;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyContacter',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyContacterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyContacterRequest
     *
     * @returns ModifyContacterResponse
     *
     * @param ModifyContacterRequest $request
     *
     * @return ModifyContacterResponse
     */
    public function modifyContacter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyContacterWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyCustomerInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCustomerInfoResponse
     *
     * @param ModifyCustomerInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyCustomerInfoResponse
     */
    public function modifyCustomerInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->biz) {
            @$query['Biz'] = $request->biz;
        }

        if (null !== $request->customerCategory) {
            @$query['CustomerCategory'] = $request->customerCategory;
        }

        if (null !== $request->customerSubCategory) {
            @$query['CustomerSubCategory'] = $request->customerSubCategory;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->website) {
            @$query['Website'] = $request->website;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCustomerInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCustomerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyCustomerInfoRequest
     *
     * @returns ModifyCustomerInfoResponse
     *
     * @param ModifyCustomerInfoRequest $request
     *
     * @return ModifyCustomerInfoResponse
     */
    public function modifyCustomerInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomerInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - OperateFinanceTaxRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateFinanceTaxResponse
     *
     * @param OperateFinanceTaxRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OperateFinanceTaxResponse
     */
    public function operateFinanceTaxWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->financeTax) {
            @$query['FinanceTax'] = $request->financeTax;
        }

        if (null !== $request->financeTaxCertificateImgName) {
            @$query['FinanceTaxCertificateImgName'] = $request->financeTaxCertificateImgName;
        }

        if (null !== $request->HId) {
            @$query['HId'] = $request->HId;
        }

        if (null !== $request->secondFinanceTax) {
            @$query['SecondFinanceTax'] = $request->secondFinanceTax;
        }

        if (null !== $request->secondFinanceTaxCertificateImgName) {
            @$query['SecondFinanceTaxCertificateImgName'] = $request->secondFinanceTaxCertificateImgName;
        }

        if (null !== $request->secondFinanceTaxCertificateImgUrl) {
            @$query['SecondFinanceTaxCertificateImgUrl'] = $request->secondFinanceTaxCertificateImgUrl;
        }

        if (null !== $request->financeTaxCertificateImgUrl) {
            @$query['financeTaxCertificateImgUrl'] = $request->financeTaxCertificateImgUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateFinanceTax',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateFinanceTaxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - OperateFinanceTaxRequest
     *
     * @returns OperateFinanceTaxResponse
     *
     * @param OperateFinanceTaxRequest $request
     *
     * @return OperateFinanceTaxResponse
     */
    public function operateFinanceTax($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateFinanceTaxWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAccountAddressInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountAddressInfoResponse
     *
     * @param QueryAccountAddressInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAccountAddressInfoResponse
     */
    public function queryAccountAddressInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressVersion) {
            @$query['AddressVersion'] = $request->addressVersion;
        }

        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountAddressInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountAddressInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAccountAddressInfoRequest
     *
     * @returns QueryAccountAddressInfoResponse
     *
     * @param QueryAccountAddressInfoRequest $request
     *
     * @return QueryAccountAddressInfoResponse
     */
    public function queryAccountAddressInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountAddressInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAccountAddressInfoWithoutHavanaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountAddressInfoWithoutHavanaResponse
     *
     * @param QueryAccountAddressInfoWithoutHavanaRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryAccountAddressInfoWithoutHavanaResponse
     */
    public function queryAccountAddressInfoWithoutHavanaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressVersion) {
            @$query['AddressVersion'] = $request->addressVersion;
        }

        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountAddressInfoWithoutHavana',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountAddressInfoWithoutHavanaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAccountAddressInfoWithoutHavanaRequest
     *
     * @returns QueryAccountAddressInfoWithoutHavanaResponse
     *
     * @param QueryAccountAddressInfoWithoutHavanaRequest $request
     *
     * @return QueryAccountAddressInfoWithoutHavanaResponse
     */
    public function queryAccountAddressInfoWithoutHavana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountAddressInfoWithoutHavanaWithOptions($request, $runtime);
    }

    /**
     * 查询账号收货地址
     *
     * @param request - QueryAccountDeliveryAddressInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountDeliveryAddressInfoResponse
     *
     * @param QueryAccountDeliveryAddressInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryAccountDeliveryAddressInfoResponse
     */
    public function queryAccountDeliveryAddressInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountDeliveryAddressInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountDeliveryAddressInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询账号收货地址
     *
     * @param request - QueryAccountDeliveryAddressInfoRequest
     *
     * @returns QueryAccountDeliveryAddressInfoResponse
     *
     * @param QueryAccountDeliveryAddressInfoRequest $request
     *
     * @return QueryAccountDeliveryAddressInfoResponse
     */
    public function queryAccountDeliveryAddressInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountDeliveryAddressInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAccountProfileInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountProfileInfoResponse
     *
     * @param QueryAccountProfileInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAccountProfileInfoResponse
     */
    public function queryAccountProfileInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountProfileInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountProfileInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAccountProfileInfoRequest
     *
     * @returns QueryAccountProfileInfoResponse
     *
     * @param QueryAccountProfileInfoRequest $request
     *
     * @return QueryAccountProfileInfoResponse
     */
    public function queryAccountProfileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountProfileInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAccountRealNameInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountRealNameInfoResponse
     *
     * @param QueryAccountRealNameInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryAccountRealNameInfoResponse
     */
    public function queryAccountRealNameInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountRealNameInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountRealNameInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAccountRealNameInfoRequest
     *
     * @returns QueryAccountRealNameInfoResponse
     *
     * @param QueryAccountRealNameInfoRequest $request
     *
     * @return QueryAccountRealNameInfoResponse
     */
    public function queryAccountRealNameInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountRealNameInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAccountSiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountSiteResponse
     *
     * @param QueryAccountSiteRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAccountSiteResponse
     */
    public function queryAccountSiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountSite',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAccountSiteRequest
     *
     * @returns QueryAccountSiteResponse
     *
     * @param QueryAccountSiteRequest $request
     *
     * @return QueryAccountSiteResponse
     */
    public function queryAccountSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountSiteWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAccountTrueNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountTrueNameResponse
     *
     * @param QueryAccountTrueNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAccountTrueNameResponse
     */
    public function queryAccountTrueNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountTrueName',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountTrueNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAccountTrueNameRequest
     *
     * @returns QueryAccountTrueNameResponse
     *
     * @param QueryAccountTrueNameRequest $request
     *
     * @return QueryAccountTrueNameResponse
     */
    public function queryAccountTrueName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountTrueNameWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAgAccountLoginPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAgAccountLoginPermissionResponse
     *
     * @param QueryAgAccountLoginPermissionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryAgAccountLoginPermissionResponse
     */
    public function queryAgAccountLoginPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAgAccountLoginPermission',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAgAccountLoginPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAgAccountLoginPermissionRequest
     *
     * @returns QueryAgAccountLoginPermissionResponse
     *
     * @param QueryAgAccountLoginPermissionRequest $request
     *
     * @return QueryAgAccountLoginPermissionResponse
     */
    public function queryAgAccountLoginPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAgAccountLoginPermissionWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAgRelationCountAndQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAgRelationCountAndQuotaResponse
     *
     * @param QueryAgRelationCountAndQuotaRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryAgRelationCountAndQuotaResponse
     */
    public function queryAgRelationCountAndQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->callerBid) {
            @$body['CallerBid'] = $request->callerBid;
        }

        if (null !== $request->callerParentId) {
            @$body['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->callerType) {
            @$body['CallerType'] = $request->callerType;
        }

        if (null !== $request->callerUid) {
            @$body['CallerUid'] = $request->callerUid;
        }

        if (null !== $request->mpk) {
            @$body['Mpk'] = $request->mpk;
        }

        if (null !== $request->nullObject) {
            @$body['NullObject'] = $request->nullObject;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->securityToken) {
            @$body['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sourceIp) {
            @$body['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->stsTokenCallerBid) {
            @$body['StsTokenCallerBid'] = $request->stsTokenCallerBid;
        }

        if (null !== $request->stsTokenCallerUid) {
            @$body['StsTokenCallerUid'] = $request->stsTokenCallerUid;
        }

        if (null !== $request->stsTokenRoleId) {
            @$body['StsTokenRoleId'] = $request->stsTokenRoleId;
        }

        if (null !== $request->version) {
            @$body['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryAgRelationCountAndQuota',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAgRelationCountAndQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAgRelationCountAndQuotaRequest
     *
     * @returns QueryAgRelationCountAndQuotaResponse
     *
     * @param QueryAgRelationCountAndQuotaRequest $request
     *
     * @return QueryAgRelationCountAndQuotaResponse
     */
    public function queryAgRelationCountAndQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAgRelationCountAndQuotaWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAgSecurityMobileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAgSecurityMobileResponse
     *
     * @param QueryAgSecurityMobileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryAgSecurityMobileResponse
     */
    public function queryAgSecurityMobileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAgSecurityMobile',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAgSecurityMobileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAgSecurityMobileRequest
     *
     * @returns QueryAgSecurityMobileResponse
     *
     * @param QueryAgSecurityMobileRequest $request
     *
     * @return QueryAgSecurityMobileResponse
     */
    public function queryAgSecurityMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAgSecurityMobileWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryBindsByOuterIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBindsByOuterIdResponse
     *
     * @param QueryBindsByOuterIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryBindsByOuterIdResponse
     */
    public function queryBindsByOuterIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->minorOuterId) {
            @$query['MinorOuterId'] = $request->minorOuterId;
        }

        if (null !== $request->outerId) {
            @$query['OuterId'] = $request->outerId;
        }

        if (null !== $request->tenantId) {
            @$query['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBindsByOuterId',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBindsByOuterIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBindsByOuterIdRequest
     *
     * @returns QueryBindsByOuterIdResponse
     *
     * @param QueryBindsByOuterIdRequest $request
     *
     * @return QueryBindsByOuterIdResponse
     */
    public function queryBindsByOuterId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBindsByOuterIdWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - QueryBindsByPkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBindsByPkResponse
     *
     * @param QueryBindsByPkRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return QueryBindsByPkResponse
     */
    public function queryBindsByPkWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryBindsByPkShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tenantIds) {
            $request->tenantIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantIds, 'TenantIds', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->tenantIdsShrink) {
            @$query['TenantIds'] = $request->tenantIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBindsByPk',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBindsByPkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBindsByPkRequest
     *
     * @returns QueryBindsByPkResponse
     *
     * @param QueryBindsByPkRequest $request
     *
     * @return QueryBindsByPkResponse
     */
    public function queryBindsByPk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBindsByPkWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCustomerLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomerLabelResponse
     *
     * @param QueryCustomerLabelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryCustomerLabelResponse
     */
    public function queryCustomerLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labelSeries) {
            @$query['LabelSeries'] = $request->labelSeries;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomerLabel',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCustomerLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCustomerLabelRequest
     *
     * @returns QueryCustomerLabelResponse
     *
     * @param QueryCustomerLabelRequest $request
     *
     * @return QueryCustomerLabelResponse
     */
    public function queryCustomerLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomerLabelWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDeleteTaskCheckDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDeleteTaskCheckDataResponse
     *
     * @param QueryDeleteTaskCheckDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDeleteTaskCheckDataResponse
     */
    public function queryDeleteTaskCheckDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->longLang) {
            @$query['LongLang'] = $request->longLang;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDeleteTaskCheckData',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDeleteTaskCheckDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDeleteTaskCheckDataRequest
     *
     * @returns QueryDeleteTaskCheckDataResponse
     *
     * @param QueryDeleteTaskCheckDataRequest $request
     *
     * @return QueryDeleteTaskCheckDataResponse
     */
    public function queryDeleteTaskCheckData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeleteTaskCheckDataWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryEncryptedAccountProfileInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEncryptedAccountProfileInfoResponse
     *
     * @param QueryEncryptedAccountProfileInfoRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryEncryptedAccountProfileInfoResponse
     */
    public function queryEncryptedAccountProfileInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEncryptedAccountProfileInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEncryptedAccountProfileInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryEncryptedAccountProfileInfoRequest
     *
     * @returns QueryEncryptedAccountProfileInfoResponse
     *
     * @param QueryEncryptedAccountProfileInfoRequest $request
     *
     * @return QueryEncryptedAccountProfileInfoResponse
     */
    public function queryEncryptedAccountProfileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEncryptedAccountProfileInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryEnterpriseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEnterpriseInfoResponse
     *
     * @param QueryEnterpriseInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryEnterpriseInfoResponse
     */
    public function queryEnterpriseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseVersion) {
            @$query['EnterpriseVersion'] = $request->enterpriseVersion;
        }

        if (null !== $request->havanaId) {
            @$query['HavanaId'] = $request->havanaId;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEnterpriseInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEnterpriseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryEnterpriseInfoRequest
     *
     * @returns QueryEnterpriseInfoResponse
     *
     * @param QueryEnterpriseInfoRequest $request
     *
     * @return QueryEnterpriseInfoResponse
     */
    public function queryEnterpriseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEnterpriseInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryEnumConfigByTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEnumConfigByTypeResponse
     *
     * @param QueryEnumConfigByTypeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryEnumConfigByTypeResponse
     */
    public function queryEnumConfigByTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEnumConfigByType',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEnumConfigByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryEnumConfigByTypeRequest
     *
     * @returns QueryEnumConfigByTypeResponse
     *
     * @param QueryEnumConfigByTypeRequest $request
     *
     * @return QueryEnumConfigByTypeResponse
     */
    public function queryEnumConfigByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEnumConfigByTypeWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryOneKeyDeleteBlockListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOneKeyDeleteBlockListResponse
     *
     * @param QueryOneKeyDeleteBlockListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryOneKeyDeleteBlockListResponse
     */
    public function queryOneKeyDeleteBlockListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOneKeyDeleteBlockList',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOneKeyDeleteBlockListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryOneKeyDeleteBlockListRequest
     *
     * @returns QueryOneKeyDeleteBlockListResponse
     *
     * @param QueryOneKeyDeleteBlockListRequest $request
     *
     * @return QueryOneKeyDeleteBlockListResponse
     */
    public function queryOneKeyDeleteBlockList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOneKeyDeleteBlockListWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySecurityInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySecurityInfoResponse
     *
     * @param QuerySecurityInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySecurityInfoResponse
     */
    public function querySecurityInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySecurityInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySecurityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySecurityInfoRequest
     *
     * @returns QuerySecurityInfoResponse
     *
     * @param QuerySecurityInfoRequest $request
     *
     * @return QuerySecurityInfoResponse
     */
    public function querySecurityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySecurityInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - RegisterInternalAccountForBucRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterInternalAccountForBucResponse
     *
     * @param RegisterInternalAccountForBucRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RegisterInternalAccountForBucResponse
     */
    public function registerInternalAccountForBucWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->isEmailConfirmed) {
            @$query['IsEmailConfirmed'] = $request->isEmailConfirmed;
        }

        if (null !== $request->isMobileConfirmed) {
            @$query['IsMobileConfirmed'] = $request->isMobileConfirmed;
        }

        if (null !== $request->isMobileLogin) {
            @$query['IsMobileLogin'] = $request->isMobileLogin;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->nationalityCode) {
            @$query['NationalityCode'] = $request->nationalityCode;
        }

        if (null !== $request->plainPassword) {
            @$query['PlainPassword'] = $request->plainPassword;
        }

        if (null !== $request->preferredLanguage) {
            @$query['PreferredLanguage'] = $request->preferredLanguage;
        }

        if (null !== $request->accountTypeCode) {
            @$query['accountTypeCode'] = $request->accountTypeCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterInternalAccountForBuc',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterInternalAccountForBucResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RegisterInternalAccountForBucRequest
     *
     * @returns RegisterInternalAccountForBucResponse
     *
     * @param RegisterInternalAccountForBucRequest $request
     *
     * @return RegisterInternalAccountForBucResponse
     */
    public function registerInternalAccountForBuc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerInternalAccountForBucWithOptions($request, $runtime);
    }

    /**
     * @param request - ReleaseAgAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseAgAccountResponse
     *
     * @param ReleaseAgAccountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReleaseAgAccountResponse
     */
    public function releaseAgAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->releaseReason) {
            @$query['ReleaseReason'] = $request->releaseReason;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseAgAccount',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseAgAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseAgAccountRequest
     *
     * @returns ReleaseAgAccountResponse
     *
     * @param ReleaseAgAccountRequest $request
     *
     * @return ReleaseAgAccountResponse
     */
    public function releaseAgAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseAgAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - ResendAsyncCreateAgAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResendAsyncCreateAgAccountResponse
     *
     * @param ResendAsyncCreateAgAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResendAsyncCreateAgAccountResponse
     */
    public function resendAsyncCreateAgAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->traceNo) {
            @$query['TraceNo'] = $request->traceNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResendAsyncCreateAgAccount',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResendAsyncCreateAgAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResendAsyncCreateAgAccountRequest
     *
     * @returns ResendAsyncCreateAgAccountResponse
     *
     * @param ResendAsyncCreateAgAccountRequest $request
     *
     * @return ResendAsyncCreateAgAccountResponse
     */
    public function resendAsyncCreateAgAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resendAsyncCreateAgAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - ResendAsyncModifyLoginEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResendAsyncModifyLoginEmailResponse
     *
     * @param ResendAsyncModifyLoginEmailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ResendAsyncModifyLoginEmailResponse
     */
    public function resendAsyncModifyLoginEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->traceNo) {
            @$query['TraceNo'] = $request->traceNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResendAsyncModifyLoginEmail',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResendAsyncModifyLoginEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResendAsyncModifyLoginEmailRequest
     *
     * @returns ResendAsyncModifyLoginEmailResponse
     *
     * @param ResendAsyncModifyLoginEmailRequest $request
     *
     * @return ResendAsyncModifyLoginEmailResponse
     */
    public function resendAsyncModifyLoginEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resendAsyncModifyLoginEmailWithOptions($request, $runtime);
    }

    /**
     * @param request - SeparateAgRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SeparateAgRelationResponse
     *
     * @param SeparateAgRelationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SeparateAgRelationResponse
     */
    public function separateAgRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SeparateAgRelation',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SeparateAgRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SeparateAgRelationRequest
     *
     * @returns SeparateAgRelationResponse
     *
     * @param SeparateAgRelationRequest $request
     *
     * @return SeparateAgRelationResponse
     */
    public function separateAgRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->separateAgRelationWithOptions($request, $runtime);
    }

    /**
     * 同步set操作.
     *
     * @param request - SetCacheOperateSyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCacheOperateSyncResponse
     *
     * @param SetCacheOperateSyncRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetCacheOperateSyncResponse
     */
    public function setCacheOperateSyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exceptVersion) {
            @$query['ExceptVersion'] = $request->exceptVersion;
        }

        if (null !== $request->expireSeconds) {
            @$query['ExpireSeconds'] = $request->expireSeconds;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->setType) {
            @$query['SetType'] = $request->setType;
        }

        if (null !== $request->valueClazz) {
            @$query['ValueClazz'] = $request->valueClazz;
        }

        if (null !== $request->valueString) {
            @$query['ValueString'] = $request->valueString;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCacheOperateSync',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCacheOperateSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步set操作.
     *
     * @param request - SetCacheOperateSyncRequest
     *
     * @returns SetCacheOperateSyncResponse
     *
     * @param SetCacheOperateSyncRequest $request
     *
     * @return SetCacheOperateSyncResponse
     */
    public function setCacheOperateSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCacheOperateSyncWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - UpdateAccountAddressInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccountAddressInfoResponse
     *
     * @param UpdateAccountAddressInfoRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAccountAddressInfoResponse
     */
    public function updateAccountAddressInfoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAccountAddressInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cityJsonString) {
            $request->cityJsonStringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cityJsonString, 'CityJsonString', 'json');
        }

        if (null !== $tmpReq->districtJsonString) {
            $request->districtJsonStringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->districtJsonString, 'DistrictJsonString', 'json');
        }

        if (null !== $tmpReq->provinceJsonString) {
            $request->provinceJsonStringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->provinceJsonString, 'ProvinceJsonString', 'json');
        }

        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->address2) {
            @$query['Address2'] = $request->address2;
        }

        if (null !== $request->cityJsonStringShrink) {
            @$query['CityJsonString'] = $request->cityJsonStringShrink;
        }

        if (null !== $request->districtJsonStringShrink) {
            @$query['DistrictJsonString'] = $request->districtJsonStringShrink;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->postCode) {
            @$query['PostCode'] = $request->postCode;
        }

        if (null !== $request->provinceJsonStringShrink) {
            @$query['ProvinceJsonString'] = $request->provinceJsonStringShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccountAddressInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAccountAddressInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAccountAddressInfoRequest
     *
     * @returns UpdateAccountAddressInfoResponse
     *
     * @param UpdateAccountAddressInfoRequest $request
     *
     * @return UpdateAccountAddressInfoResponse
     */
    public function updateAccountAddressInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountAddressInfoWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - UpdateAccountProfileInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccountProfileInfoResponse
     *
     * @param UpdateAccountProfileInfoRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAccountProfileInfoResponse
     */
    public function updateAccountProfileInfoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAccountProfileInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cityJsonString) {
            $request->cityJsonStringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cityJsonString, 'CityJsonString', 'json');
        }

        if (null !== $tmpReq->districtJsonString) {
            $request->districtJsonStringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->districtJsonString, 'DistrictJsonString', 'json');
        }

        if (null !== $tmpReq->provinceJsonString) {
            $request->provinceJsonStringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->provinceJsonString, 'ProvinceJsonString', 'json');
        }

        $query = [];
        if (null !== $request->accountAttribute) {
            @$query['AccountAttribute'] = $request->accountAttribute;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->address2) {
            @$query['Address2'] = $request->address2;
        }

        if (null !== $request->bindAlipayNo) {
            @$query['BindAlipayNo'] = $request->bindAlipayNo;
        }

        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

        if (null !== $request->cityJsonStringShrink) {
            @$query['CityJsonString'] = $request->cityJsonStringShrink;
        }

        if (null !== $request->contactMethod) {
            @$query['ContactMethod'] = $request->contactMethod;
        }

        if (null !== $request->districtJsonStringShrink) {
            @$query['DistrictJsonString'] = $request->districtJsonStringShrink;
        }

        if (null !== $request->fax) {
            @$query['Fax'] = $request->fax;
        }

        if (null !== $request->firstName) {
            @$query['FirstName'] = $request->firstName;
        }

        if (null !== $request->head) {
            @$query['Head'] = $request->head;
        }

        if (null !== $request->headColor) {
            @$query['HeadColor'] = $request->headColor;
        }

        if (null !== $request->lastName) {
            @$query['LastName'] = $request->lastName;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->postCode) {
            @$query['PostCode'] = $request->postCode;
        }

        if (null !== $request->provinceJsonStringShrink) {
            @$query['ProvinceJsonString'] = $request->provinceJsonStringShrink;
        }

        if (null !== $request->selfServicingBusinessRegNum) {
            @$query['SelfServicingBusinessRegNum'] = $request->selfServicingBusinessRegNum;
        }

        if (null !== $request->selfServicingIdentificationNum) {
            @$query['SelfServicingIdentificationNum'] = $request->selfServicingIdentificationNum;
        }

        if (null !== $request->trueName) {
            @$query['TrueName'] = $request->trueName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccountProfileInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAccountProfileInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAccountProfileInfoRequest
     *
     * @returns UpdateAccountProfileInfoResponse
     *
     * @param UpdateAccountProfileInfoRequest $request
     *
     * @return UpdateAccountProfileInfoResponse
     */
    public function updateAccountProfileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountProfileInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateAgAccountAddressInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgAccountAddressInfoResponse
     *
     * @param UpdateAgAccountAddressInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateAgAccountAddressInfoResponse
     */
    public function updateAgAccountAddressInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->address2) {
            @$query['Address2'] = $request->address2;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->postCode) {
            @$query['PostCode'] = $request->postCode;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAgAccountAddressInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgAccountAddressInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAgAccountAddressInfoRequest
     *
     * @returns UpdateAgAccountAddressInfoResponse
     *
     * @param UpdateAgAccountAddressInfoRequest $request
     *
     * @return UpdateAgAccountAddressInfoResponse
     */
    public function updateAgAccountAddressInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgAccountAddressInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateAgServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgServiceStatusResponse
     *
     * @param UpdateAgServiceStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAgServiceStatusResponse
     */
    public function updateAgServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agAccountType) {
            @$query['AgAccountType'] = $request->agAccountType;
        }

        if (null !== $request->mpk) {
            @$query['Mpk'] = $request->mpk;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAgServiceStatus',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAgServiceStatusRequest
     *
     * @returns UpdateAgServiceStatusResponse
     *
     * @param UpdateAgServiceStatusRequest $request
     *
     * @return UpdateAgServiceStatusResponse
     */
    public function updateAgServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateCustomerCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomerCategoryResponse
     *
     * @param UpdateCustomerCategoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCustomerCategoryResponse
     */
    public function updateCustomerCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramList) {
            @$query['ParamList'] = $request->paramList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomerCategory',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomerCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateCustomerCategoryRequest
     *
     * @returns UpdateCustomerCategoryResponse
     *
     * @param UpdateCustomerCategoryRequest $request
     *
     * @return UpdateCustomerCategoryResponse
     */
    public function updateCustomerCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomerCategoryWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateCustomerInformationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomerInformationResponse
     *
     * @param UpdateCustomerInformationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateCustomerInformationResponse
     */
    public function updateCustomerInformationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->biz) {
            @$query['Biz'] = $request->biz;
        }

        if (null !== $request->customerCategory) {
            @$query['CustomerCategory'] = $request->customerCategory;
        }

        if (null !== $request->customerSubCategory) {
            @$query['CustomerSubCategory'] = $request->customerSubCategory;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->website) {
            @$query['Website'] = $request->website;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomerInformation',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomerInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateCustomerInformationRequest
     *
     * @returns UpdateCustomerInformationResponse
     *
     * @param UpdateCustomerInformationRequest $request
     *
     * @return UpdateCustomerInformationResponse
     */
    public function updateCustomerInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomerInformationWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - UpdateOrInsertEnterpriseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOrInsertEnterpriseInfoResponse
     *
     * @param UpdateOrInsertEnterpriseInfoRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateOrInsertEnterpriseInfoResponse
     */
    public function updateOrInsertEnterpriseInfoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateOrInsertEnterpriseInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cityJsonString) {
            $request->cityJsonStringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cityJsonString, 'CityJsonString', 'json');
        }

        if (null !== $tmpReq->provinceJsonString) {
            $request->provinceJsonStringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->provinceJsonString, 'ProvinceJsonString', 'json');
        }

        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->alias) {
            @$query['Alias'] = $request->alias;
        }

        if (null !== $request->cityJsonStringShrink) {
            @$query['CityJsonString'] = $request->cityJsonStringShrink;
        }

        if (null !== $request->enterpriseSize) {
            @$query['EnterpriseSize'] = $request->enterpriseSize;
        }

        if (null !== $request->fax) {
            @$query['Fax'] = $request->fax;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->provinceJsonStringShrink) {
            @$query['ProvinceJsonString'] = $request->provinceJsonStringShrink;
        }

        if (null !== $request->years) {
            @$query['Years'] = $request->years;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOrInsertEnterpriseInfo',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOrInsertEnterpriseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateOrInsertEnterpriseInfoRequest
     *
     * @returns UpdateOrInsertEnterpriseInfoResponse
     *
     * @param UpdateOrInsertEnterpriseInfoRequest $request
     *
     * @return UpdateOrInsertEnterpriseInfoResponse
     */
    public function updateOrInsertEnterpriseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOrInsertEnterpriseInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DoLogicalDeleteResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DoLogicalDeleteResourceResponse
     *
     * @param DoLogicalDeleteResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DoLogicalDeleteResourceResponse
     */
    public function doLogicalDeleteResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->gmtWakeup) {
            @$query['GmtWakeup'] = $request->gmtWakeup;
        }

        if (null !== $request->hid) {
            @$query['Hid'] = $request->hid;
        }

        if (null !== $request->interrupt) {
            @$query['Interrupt'] = $request->interrupt;
        }

        if (null !== $request->invoker) {
            @$query['Invoker'] = $request->invoker;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->success) {
            @$query['Success'] = $request->success;
        }

        if (null !== $request->taskExtraData) {
            @$query['TaskExtraData'] = $request->taskExtraData;
        }

        if (null !== $request->taskIdentifier) {
            @$query['TaskIdentifier'] = $request->taskIdentifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'doLogicalDeleteResource',
            'version' => '2016-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DoLogicalDeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DoLogicalDeleteResourceRequest
     *
     * @returns DoLogicalDeleteResourceResponse
     *
     * @param DoLogicalDeleteResourceRequest $request
     *
     * @return DoLogicalDeleteResourceResponse
     */
    public function doLogicalDeleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doLogicalDeleteResourceWithOptions($request, $runtime);
    }
}
