<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CheckSmsVerifyCodeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CheckSmsVerifyCodeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateSchemeConfigRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateSchemeConfigResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateVerifySchemeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateVerifySchemeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DeleteVerifySchemeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DeleteVerifySchemeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DescribeVerifySchemeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DescribeVerifySchemeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthorizationUrlRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthorizationUrlResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetFusionAuthTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetFusionAuthTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetPhoneWithTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetPhoneWithTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QuerySendDetailsRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QuerySendDetailsResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\SendSmsVerifyCodeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\SendSmsVerifyCodeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyPhoneWithTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyPhoneWithTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifySmsCodeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifySmsCodeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyWithFusionAuthTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyWithFusionAuthTokenResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dypnsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dypnsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Verifies SMS verification codes.
     *
     * @param request - CheckSmsVerifyCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSmsVerifyCodeResponse
     *
     * @param CheckSmsVerifyCodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckSmsVerifyCodeResponse
     */
    public function checkSmsVerifyCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caseAuthPolicy) {
            @$query['CaseAuthPolicy'] = $request->caseAuthPolicy;
        }

        if (null !== $request->countryCode) {
            @$query['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckSmsVerifyCode',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckSmsVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies SMS verification codes.
     *
     * @param request - CheckSmsVerifyCodeRequest
     *
     * @returns CheckSmsVerifyCodeResponse
     *
     * @param CheckSmsVerifyCodeRequest $request
     *
     * @return CheckSmsVerifyCodeResponse
     */
    public function checkSmsVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSmsVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * Creates a code for a converged communication authentication service.
     *
     * @param request - CreateSchemeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSchemeConfigResponse
     *
     * @param CreateSchemeConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSchemeConfigResponse
     */
    public function createSchemeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidPackageName) {
            @$query['AndroidPackageName'] = $request->androidPackageName;
        }

        if (null !== $request->androidPackageSign) {
            @$query['AndroidPackageSign'] = $request->androidPackageSign;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->h5Origin) {
            @$query['H5Origin'] = $request->h5Origin;
        }

        if (null !== $request->h5Url) {
            @$query['H5Url'] = $request->h5Url;
        }

        if (null !== $request->iosBundleId) {
            @$query['IosBundleId'] = $request->iosBundleId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSchemeConfig',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSchemeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a code for a converged communication authentication service.
     *
     * @param request - CreateSchemeConfigRequest
     *
     * @returns CreateSchemeConfigResponse
     *
     * @param CreateSchemeConfigRequest $request
     *
     * @return CreateSchemeConfigResponse
     */
    public function createSchemeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchemeConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a verification service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateVerifySchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVerifySchemeResponse
     *
     * @param CreateVerifySchemeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateVerifySchemeResponse
     */
    public function createVerifySchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->cmApiCode) {
            @$query['CmApiCode'] = $request->cmApiCode;
        }

        if (null !== $request->ctApiCode) {
            @$query['CtApiCode'] = $request->ctApiCode;
        }

        if (null !== $request->cuApiCode) {
            @$query['CuApiCode'] = $request->cuApiCode;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->hmAppIdentifier) {
            @$query['HmAppIdentifier'] = $request->hmAppIdentifier;
        }

        if (null !== $request->hmPackageName) {
            @$query['HmPackageName'] = $request->hmPackageName;
        }

        if (null !== $request->hmSignName) {
            @$query['HmSignName'] = $request->hmSignName;
        }

        if (null !== $request->ipWhiteList) {
            @$query['IpWhiteList'] = $request->ipWhiteList;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packName) {
            @$query['PackName'] = $request->packName;
        }

        if (null !== $request->packSign) {
            @$query['PackSign'] = $request->packSign;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        if (null !== $request->smsSignName) {
            @$query['SmsSignName'] = $request->smsSignName;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVerifyScheme',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a verification service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateVerifySchemeRequest
     *
     * @returns CreateVerifySchemeResponse
     *
     * @param CreateVerifySchemeRequest $request
     *
     * @return CreateVerifySchemeResponse
     */
    public function createVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * Deletes a verification service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteVerifySchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVerifySchemeResponse
     *
     * @param DeleteVerifySchemeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVerifySchemeResponse
     */
    public function deleteVerifySchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeCode) {
            @$query['SchemeCode'] = $request->schemeCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVerifyScheme',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a verification service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteVerifySchemeRequest
     *
     * @returns DeleteVerifySchemeResponse
     *
     * @param DeleteVerifySchemeRequest $request
     *
     * @return DeleteVerifySchemeResponse
     */
    public function deleteVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a verification service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVerifySchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifySchemeResponse
     *
     * @param DescribeVerifySchemeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVerifySchemeResponse
     */
    public function describeVerifySchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeCode) {
            @$query['SchemeCode'] = $request->schemeCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyScheme',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a verification service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVerifySchemeRequest
     *
     * @returns DescribeVerifySchemeResponse
     *
     * @param DescribeVerifySchemeRequest $request
     *
     * @return DescribeVerifySchemeResponse
     */
    public function describeVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * Obtains the authorization token used for the authentication of the phone number verification for HTML5 pages. You can obtain AccessToken and JwtToken after a successful call.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the phone number verification feature for HTML5 pages](https://help.aliyun.com/document_detail/169786.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetAuthTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuthTokenResponse
     *
     * @param GetAuthTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->cmApiCode) {
            @$query['CmApiCode'] = $request->cmApiCode;
        }

        if (null !== $request->ctApiCode) {
            @$query['CtApiCode'] = $request->ctApiCode;
        }

        if (null !== $request->cuApiCode) {
            @$query['CuApiCode'] = $request->cuApiCode;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuthToken',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the authorization token used for the authentication of the phone number verification for HTML5 pages. You can obtain AccessToken and JwtToken after a successful call.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the phone number verification feature for HTML5 pages](https://help.aliyun.com/document_detail/169786.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetAuthTokenRequest
     *
     * @returns GetAuthTokenResponse
     *
     * @param GetAuthTokenRequest $request
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthTokenWithOptions($request, $runtime);
    }

    /**
     * Obtains the URL for the Alipay account authorization.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account and obtain an Alibaba Cloud AccessKey pair. For more information, see [Process of communication authorization](https://help.aliyun.com/document_detail/196922.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetAuthorizationUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuthorizationUrlResponse
     *
     * @param GetAuthorizationUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAuthorizationUrlResponse
     */
    public function getAuthorizationUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNo) {
            @$query['PhoneNo'] = $request->phoneNo;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeId) {
            @$query['SchemeId'] = $request->schemeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuthorizationUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuthorizationUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the URL for the Alipay account authorization.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account and obtain an Alibaba Cloud AccessKey pair. For more information, see [Process of communication authorization](https://help.aliyun.com/document_detail/196922.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetAuthorizationUrlRequest
     *
     * @returns GetAuthorizationUrlResponse
     *
     * @param GetAuthorizationUrlRequest $request
     *
     * @return GetAuthorizationUrlResponse
     */
    public function getAuthorizationUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationUrlWithOptions($request, $runtime);
    }

    /**
     * Obtains the verification results by using the token that is obtained from the client SDKs.
     *
     * @param request - GetFusionAuthTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFusionAuthTokenResponse
     *
     * @param GetFusionAuthTokenRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetFusionAuthTokenResponse
     */
    public function getFusionAuthTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->durationSeconds) {
            @$query['DurationSeconds'] = $request->durationSeconds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageName) {
            @$query['PackageName'] = $request->packageName;
        }

        if (null !== $request->packageSign) {
            @$query['PackageSign'] = $request->packageSign;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeCode) {
            @$query['SchemeCode'] = $request->schemeCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFusionAuthToken',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFusionAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the verification results by using the token that is obtained from the client SDKs.
     *
     * @param request - GetFusionAuthTokenRequest
     *
     * @returns GetFusionAuthTokenResponse
     *
     * @param GetFusionAuthTokenRequest $request
     *
     * @return GetFusionAuthTokenResponse
     */
    public function getFusionAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFusionAuthTokenWithOptions($request, $runtime);
    }

    /**
     * Obtains a phone number for one-click logon.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/84541.html).
     * >  This operation is applicable only to one-click logon or registration. You can call this operation only after you confirm the authorization on the authorization page provided by the SDK for one-click logon. You are prohibited from simulating or bypassing the authorization process. Alibaba Cloud reserves the right to terminate our services and take legal actions against such violations.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetMobileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMobileResponse
     *
     * @param GetMobileRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetMobileResponse
     */
    public function getMobileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMobile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMobileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a phone number for one-click logon.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/84541.html).
     * >  This operation is applicable only to one-click logon or registration. You can call this operation only after you confirm the authorization on the authorization page provided by the SDK for one-click logon. You are prohibited from simulating or bypassing the authorization process. Alibaba Cloud reserves the right to terminate our services and take legal actions against such violations.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetMobileRequest
     *
     * @returns GetMobileResponse
     *
     * @param GetMobileRequest $request
     *
     * @return GetMobileResponse
     */
    public function getMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMobileWithOptions($request, $runtime);
    }

    /**
     * Obtains a phone number for one-click logon. This operation is exclusive to HTML5 pages.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/84541.html).
     * >  This operation is applicable only to one-click logon or registration in HTML5 pages. You can call this operation only after you confirm the authorization on the authorization page provided by the JavaScript SDK. You are prohibited from simulating or bypassing the authorization process. Alibaba Cloud reserves the right to terminate our services and take legal actions against such violations.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetPhoneWithTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPhoneWithTokenResponse
     *
     * @param GetPhoneWithTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetPhoneWithTokenResponse
     */
    public function getPhoneWithTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->spToken) {
            @$query['SpToken'] = $request->spToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPhoneWithToken',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPhoneWithTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a phone number for one-click logon. This operation is exclusive to HTML5 pages.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/84541.html).
     * >  This operation is applicable only to one-click logon or registration in HTML5 pages. You can call this operation only after you confirm the authorization on the authorization page provided by the JavaScript SDK. You are prohibited from simulating or bypassing the authorization process. Alibaba Cloud reserves the right to terminate our services and take legal actions against such violations.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetPhoneWithTokenRequest
     *
     * @returns GetPhoneWithTokenResponse
     *
     * @param GetPhoneWithTokenRequest $request
     *
     * @return GetPhoneWithTokenResponse
     */
    public function getPhoneWithToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneWithTokenWithOptions($request, $runtime);
    }

    /**
     * Obtains the authorization token for an SMS verification code.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the SMS verification feature](https://help.aliyun.com/document_detail/313209.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetSmsAuthTokensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSmsAuthTokensResponse
     *
     * @param GetSmsAuthTokensRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSmsAuthTokensResponse
     */
    public function getSmsAuthTokensWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->expire) {
            @$query['Expire'] = $request->expire;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageName) {
            @$query['PackageName'] = $request->packageName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->smsCodeExpire) {
            @$query['SmsCodeExpire'] = $request->smsCodeExpire;
        }

        if (null !== $request->smsTemplateCode) {
            @$query['SmsTemplateCode'] = $request->smsTemplateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSmsAuthTokens',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSmsAuthTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the authorization token for an SMS verification code.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the SMS verification feature](https://help.aliyun.com/document_detail/313209.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetSmsAuthTokensRequest
     *
     * @returns GetSmsAuthTokensResponse
     *
     * @param GetSmsAuthTokensRequest $request
     *
     * @return GetSmsAuthTokensResponse
     */
    public function getSmsAuthTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsAuthTokensWithOptions($request, $runtime);
    }

    /**
     * Queries the fees generated by a verification service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryGateVerifyBillingPublicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGateVerifyBillingPublicResponse
     *
     * @param QueryGateVerifyBillingPublicRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryGateVerifyBillingPublicResponse
     */
    public function queryGateVerifyBillingPublicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationType) {
            @$query['AuthenticationType'] = $request->authenticationType;
        }

        if (null !== $request->month) {
            @$query['Month'] = $request->month;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryGateVerifyBillingPublic',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryGateVerifyBillingPublicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the fees generated by a verification service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryGateVerifyBillingPublicRequest
     *
     * @returns QueryGateVerifyBillingPublicResponse
     *
     * @param QueryGateVerifyBillingPublicRequest $request
     *
     * @return QueryGateVerifyBillingPublicResponse
     */
    public function queryGateVerifyBillingPublic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyBillingPublicWithOptions($request, $runtime);
    }

    /**
     * Queries the calls of Phone Number Verification Service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryGateVerifyStatisticPublicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGateVerifyStatisticPublicResponse
     *
     * @param QueryGateVerifyStatisticPublicRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryGateVerifyStatisticPublicResponse
     */
    public function queryGateVerifyStatisticPublicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationType) {
            @$query['AuthenticationType'] = $request->authenticationType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryGateVerifyStatisticPublic',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryGateVerifyStatisticPublicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the calls of Phone Number Verification Service.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryGateVerifyStatisticPublicRequest
     *
     * @returns QueryGateVerifyStatisticPublicResponse
     *
     * @param QueryGateVerifyStatisticPublicRequest $request
     *
     * @return QueryGateVerifyStatisticPublicResponse
     */
    public function queryGateVerifyStatisticPublic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyStatisticPublicWithOptions($request, $runtime);
    }

    /**
     * Queries the delivery status of the SMS verification code. You can query only the delivery status of the SMS verification code that is sent by calling corresponding API operations.
     *
     * @deprecated OpenAPI QuerySendDetails is deprecated
     *
     * @param request - QuerySendDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySendDetailsResponse
     *
     * @param QuerySendDetailsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySendDetails',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySendDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the delivery status of the SMS verification code. You can query only the delivery status of the SMS verification code that is sent by calling corresponding API operations.
     *
     * @deprecated OpenAPI QuerySendDetails is deprecated
     *
     * @param request - QuerySendDetailsRequest
     *
     * @returns QuerySendDetailsResponse
     *
     * @param QuerySendDetailsRequest $request
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendDetailsWithOptions($request, $runtime);
    }

    /**
     * Sends SMS verification codes.
     *
     * @param request - SendSmsVerifyCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSmsVerifyCodeResponse
     *
     * @param SendSmsVerifyCodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendSmsVerifyCodeResponse
     */
    public function sendSmsVerifyCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRetry) {
            @$query['AutoRetry'] = $request->autoRetry;
        }

        if (null !== $request->codeLength) {
            @$query['CodeLength'] = $request->codeLength;
        }

        if (null !== $request->codeType) {
            @$query['CodeType'] = $request->codeType;
        }

        if (null !== $request->countryCode) {
            @$query['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->duplicatePolicy) {
            @$query['DuplicatePolicy'] = $request->duplicatePolicy;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->returnVerifyCode) {
            @$query['ReturnVerifyCode'] = $request->returnVerifyCode;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->smsUpExtendCode) {
            @$query['SmsUpExtendCode'] = $request->smsUpExtendCode;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        if (null !== $request->validTime) {
            @$query['ValidTime'] = $request->validTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendSmsVerifyCode',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendSmsVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends SMS verification codes.
     *
     * @param request - SendSmsVerifyCodeRequest
     *
     * @returns SendSmsVerifyCodeResponse
     *
     * @param SendSmsVerifyCodeRequest $request
     *
     * @return SendSmsVerifyCodeResponse
     */
    public function sendSmsVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * Verifies the phone number that you use.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/84541.html).
     * >  This operation is applicable to only the verification of thephone number that you use. To obtain a phone number for one-click logon, call [GetMobile](https://help.aliyun.com/document_detail/189865.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - VerifyMobileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyMobileResponse
     *
     * @param VerifyMobileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VerifyMobileResponse
     */
    public function verifyMobileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessCode) {
            @$query['AccessCode'] = $request->accessCode;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyMobile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyMobileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the phone number that you use.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/84541.html).
     * >  This operation is applicable to only the verification of thephone number that you use. To obtain a phone number for one-click logon, call [GetMobile](https://help.aliyun.com/document_detail/189865.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - VerifyMobileRequest
     *
     * @returns VerifyMobileResponse
     *
     * @param VerifyMobileRequest $request
     *
     * @return VerifyMobileResponse
     */
    public function verifyMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyMobileWithOptions($request, $runtime);
    }

    /**
     * Verifies the phone number used in HTML5 pages.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the phone number verification feature for HTML5 pages](https://help.aliyun.com/document_detail/169786.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - VerifyPhoneWithTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyPhoneWithTokenResponse
     *
     * @param VerifyPhoneWithTokenRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyPhoneWithTokenResponse
     */
    public function verifyPhoneWithTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->spToken) {
            @$query['SpToken'] = $request->spToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyPhoneWithToken',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyPhoneWithTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the phone number used in HTML5 pages.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the phone number verification feature for HTML5 pages](https://help.aliyun.com/document_detail/169786.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - VerifyPhoneWithTokenRequest
     *
     * @returns VerifyPhoneWithTokenResponse
     *
     * @param VerifyPhoneWithTokenRequest $request
     *
     * @return VerifyPhoneWithTokenResponse
     */
    public function verifyPhoneWithToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyPhoneWithTokenWithOptions($request, $runtime);
    }

    /**
     * Verifies SMS verification codes.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the SMS verification feature](https://help.aliyun.com/document_detail/313209.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - VerifySmsCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifySmsCodeResponse
     *
     * @param VerifySmsCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifySmsCodeResponse
     */
    public function verifySmsCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->smsCode) {
            @$query['SmsCode'] = $request->smsCode;
        }

        if (null !== $request->smsToken) {
            @$query['SmsToken'] = $request->smsToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifySmsCode',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifySmsCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies SMS verification codes.
     *
     * @remarks
     * ### [](#)Preparations
     * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the SMS verification feature](https://help.aliyun.com/document_detail/313209.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - VerifySmsCodeRequest
     *
     * @returns VerifySmsCodeResponse
     *
     * @param VerifySmsCodeRequest $request
     *
     * @return VerifySmsCodeResponse
     */
    public function verifySmsCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifySmsCodeWithOptions($request, $runtime);
    }

    /**
     * Obtains the verification results by using the verification token that is obtained by using the authentication token.
     *
     * @param request - VerifyWithFusionAuthTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyWithFusionAuthTokenResponse
     *
     * @param VerifyWithFusionAuthTokenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return VerifyWithFusionAuthTokenResponse
     */
    public function verifyWithFusionAuthTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->verifyToken) {
            @$query['VerifyToken'] = $request->verifyToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyWithFusionAuthToken',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyWithFusionAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the verification results by using the verification token that is obtained by using the authentication token.
     *
     * @param request - VerifyWithFusionAuthTokenRequest
     *
     * @returns VerifyWithFusionAuthTokenResponse
     *
     * @param VerifyWithFusionAuthTokenRequest $request
     *
     * @return VerifyWithFusionAuthTokenResponse
     */
    public function verifyWithFusionAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyWithFusionAuthTokenWithOptions($request, $runtime);
    }
}
