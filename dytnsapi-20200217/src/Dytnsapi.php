<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CertNoThreeElementVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CertNoThreeElementVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CertNoTwoElementVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CertNoTwoElementVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyThreeElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyThreeElementsVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyTwoElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyTwoElementsVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DeleteContactsRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DeleteContactsResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeEmptyNumberRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeEmptyNumberResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeMobileOperatorAttributeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeMobileOperatorAttributeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisAIRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisAIResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisPaiRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisPaiResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisTransparentRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisTransparentResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeAnnualRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeAnnualResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeAnnualUseRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeAnnualUseResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberRiskRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberRiskResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneTwiceTelVerifyRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneTwiceTelVerifyResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\GetUAIDApplyTokenSignRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\GetUAIDApplyTokenSignResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\GetUAIDConversionSignRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\GetUAIDConversionSignResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\InvalidPhoneNumberFilterRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\InvalidPhoneNumberFilterResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\ListContactsRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\ListContactsResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberConvertServiceRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberConvertServiceResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberEncryptRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberEncryptResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForAccountRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForAccountResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForPublicRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForPublicResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForRealRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForRealResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForSmsRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForSmsResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVoiceRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVoiceResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryAvailableAuthCodeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryAvailableAuthCodeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryPackageTypeInfoRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryPackageTypeInfoResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryPhoneNumberOnlineTimeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryPhoneNumberOnlineTimeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryPhoneTwiceTelVerifyRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryPhoneTwiceTelVerifyResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagApplyRuleRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagApplyRuleResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagListPageRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagListPageResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTaskListRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTaskListResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTaskListShrinkRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryUsageStatisticsByTagIdRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryUsageStatisticsByTagIdResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\SaveContactsRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\SaveContactsResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\ThreeElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\ThreeElementsVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\TwoElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\TwoElementsVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDCollectionRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDCollectionResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDConversionRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDConversionResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UpdateContactsRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UpdateContactsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dytnsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dytnsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 身份证三要素.
     *
     * @param request - CertNoThreeElementVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CertNoThreeElementVerificationResponse
     *
     * @param CertNoThreeElementVerificationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CertNoThreeElementVerificationResponse
     */
    public function certNoThreeElementVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certPicture) {
            @$query['CertPicture'] = $request->certPicture;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'CertNoThreeElementVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CertNoThreeElementVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 身份证三要素.
     *
     * @param request - CertNoThreeElementVerificationRequest
     *
     * @returns CertNoThreeElementVerificationResponse
     *
     * @param CertNoThreeElementVerificationRequest $request
     *
     * @return CertNoThreeElementVerificationResponse
     */
    public function certNoThreeElementVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certNoThreeElementVerificationWithOptions($request, $runtime);
    }

    /**
     * 身份证二要素认证
     *
     * @param request - CertNoTwoElementVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CertNoTwoElementVerificationResponse
     *
     * @param CertNoTwoElementVerificationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CertNoTwoElementVerificationResponse
     */
    public function certNoTwoElementVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
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
            'action' => 'CertNoTwoElementVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CertNoTwoElementVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 身份证二要素认证
     *
     * @param request - CertNoTwoElementVerificationRequest
     *
     * @returns CertNoTwoElementVerificationResponse
     *
     * @param CertNoTwoElementVerificationRequest $request
     *
     * @return CertNoTwoElementVerificationResponse
     */
    public function certNoTwoElementVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certNoTwoElementVerificationWithOptions($request, $runtime);
    }

    /**
     * Verifies whether the enterprise name, the business license number, and the name and ID card of the legal representative belong to the same enterprise. The verification is successful only when the preceding four elements belong to the same enterprise and the business status of the enterprise is Active.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the billing of services related to four-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0, 1, or 2.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *
     * @param request - CompanyFourElementsVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompanyFourElementsVerificationResponse
     *
     * @param CompanyFourElementsVerificationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CompanyFourElementsVerificationResponse
     */
    public function companyFourElementsVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->epCertName) {
            @$query['EpCertName'] = $request->epCertName;
        }

        if (null !== $request->epCertNo) {
            @$query['EpCertNo'] = $request->epCertNo;
        }

        if (null !== $request->legalPersonCertName) {
            @$query['LegalPersonCertName'] = $request->legalPersonCertName;
        }

        if (null !== $request->legalPersonCertNo) {
            @$query['LegalPersonCertNo'] = $request->legalPersonCertNo;
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
            'action' => 'CompanyFourElementsVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompanyFourElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether the enterprise name, the business license number, and the name and ID card of the legal representative belong to the same enterprise. The verification is successful only when the preceding four elements belong to the same enterprise and the business status of the enterprise is Active.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the billing of services related to four-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0, 1, or 2.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *
     * @param request - CompanyFourElementsVerificationRequest
     *
     * @returns CompanyFourElementsVerificationResponse
     *
     * @param CompanyFourElementsVerificationRequest $request
     *
     * @return CompanyFourElementsVerificationResponse
     */
    public function companyFourElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyFourElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * Verifies whether the enterprise name, the business license number, and the name of the legal representative belong to the same enterprise. The verification is successful only when the three elements belong to the same enterprise and the business status of the enterprise is Active.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the billing of services related to three-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0, 1, or 2.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *
     * @param request - CompanyThreeElementsVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompanyThreeElementsVerificationResponse
     *
     * @param CompanyThreeElementsVerificationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CompanyThreeElementsVerificationResponse
     */
    public function companyThreeElementsVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->epCertName) {
            @$query['EpCertName'] = $request->epCertName;
        }

        if (null !== $request->epCertNo) {
            @$query['EpCertNo'] = $request->epCertNo;
        }

        if (null !== $request->legalPersonCertName) {
            @$query['LegalPersonCertName'] = $request->legalPersonCertName;
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
            'action' => 'CompanyThreeElementsVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompanyThreeElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether the enterprise name, the business license number, and the name of the legal representative belong to the same enterprise. The verification is successful only when the three elements belong to the same enterprise and the business status of the enterprise is Active.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the billing of services related to three-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0, 1, or 2.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *
     * @param request - CompanyThreeElementsVerificationRequest
     *
     * @returns CompanyThreeElementsVerificationResponse
     *
     * @param CompanyThreeElementsVerificationRequest $request
     *
     * @return CompanyThreeElementsVerificationResponse
     */
    public function companyThreeElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyThreeElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * Verifies whether the enterprise name and the business license number belong to the same enterprise. The verification is successful only when the two elements belong to the same enterprise and the business status of the enterprise is Active.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the billing of services related to two-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0 or 1.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *
     * @param request - CompanyTwoElementsVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompanyTwoElementsVerificationResponse
     *
     * @param CompanyTwoElementsVerificationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CompanyTwoElementsVerificationResponse
     */
    public function companyTwoElementsVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->epCertName) {
            @$query['EpCertName'] = $request->epCertName;
        }

        if (null !== $request->epCertNo) {
            @$query['EpCertNo'] = $request->epCertNo;
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
            'action' => 'CompanyTwoElementsVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompanyTwoElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether the enterprise name and the business license number belong to the same enterprise. The verification is successful only when the two elements belong to the same enterprise and the business status of the enterprise is Active.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the billing of services related to two-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0 or 1.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *
     * @param request - CompanyTwoElementsVerificationRequest
     *
     * @returns CompanyTwoElementsVerificationResponse
     *
     * @param CompanyTwoElementsVerificationRequest $request
     *
     * @return CompanyTwoElementsVerificationResponse
     */
    public function companyTwoElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyTwoElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * 预警联系人删除.
     *
     * @param request - DeleteContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactsResponse
     *
     * @param DeleteContactsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteContactsResponse
     */
    public function deleteContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
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
            'action' => 'DeleteContacts',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警联系人删除.
     *
     * @param request - DeleteContactsRequest
     *
     * @returns DeleteContactsResponse
     *
     * @param DeleteContactsRequest $request
     *
     * @return DeleteContactsResponse
     */
    public function deleteContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactsWithOptions($request, $runtime);
    }

    /**
     * Predicts whether a phone number is a nonexistent number by using AI algorithms.
     *
     * @remarks
     *   You can call this operation to verify whether a phone number is a nonexistent number. When you call this operation to verify a number, the system charges you CNY 0.01 per verification based on the number of verifications. **Before you call this operation, make sure that you are familiar with the billing of Cell Phone Number Service.**
     * *   You are charged only if the value of Code is OK and the value of Status is not UNKNOWN.
     * *   The prediction is not strictly accurate because Cell Phone Number Service predicts the nonexistent number probability by using AI algorithms. The accuracy rate of the prediction and the recall rate of empty numbers are about 95%. **Pay attention to this point when you call this operation**.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#)Authorization information
     * By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     *
     * @param request - DescribeEmptyNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEmptyNumberResponse
     *
     * @param DescribeEmptyNumberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEmptyNumberResponse
     */
    public function describeEmptyNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'DescribeEmptyNumber',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEmptyNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Predicts whether a phone number is a nonexistent number by using AI algorithms.
     *
     * @remarks
     *   You can call this operation to verify whether a phone number is a nonexistent number. When you call this operation to verify a number, the system charges you CNY 0.01 per verification based on the number of verifications. **Before you call this operation, make sure that you are familiar with the billing of Cell Phone Number Service.**
     * *   You are charged only if the value of Code is OK and the value of Status is not UNKNOWN.
     * *   The prediction is not strictly accurate because Cell Phone Number Service predicts the nonexistent number probability by using AI algorithms. The accuracy rate of the prediction and the recall rate of empty numbers are about 95%. **Pay attention to this point when you call this operation**.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#)Authorization information
     * By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     *
     * @param request - DescribeEmptyNumberRequest
     *
     * @returns DescribeEmptyNumberResponse
     *
     * @param DescribeEmptyNumberRequest $request
     *
     * @return DescribeEmptyNumberResponse
     */
    public function describeEmptyNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmptyNumberWithOptions($request, $runtime);
    }

    /**
     * 号码归属地查询v2.
     *
     * @param request - DescribeMobileOperatorAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMobileOperatorAttributeResponse
     *
     * @param DescribeMobileOperatorAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMobileOperatorAttributeResponse
     */
    public function describeMobileOperatorAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'DescribeMobileOperatorAttribute',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMobileOperatorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 号码归属地查询v2.
     *
     * @param request - DescribeMobileOperatorAttributeRequest
     *
     * @returns DescribeMobileOperatorAttributeResponse
     *
     * @param DescribeMobileOperatorAttributeRequest $request
     *
     * @return DescribeMobileOperatorAttributeResponse
     */
    public function describeMobileOperatorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMobileOperatorAttributeWithOptions($request, $runtime);
    }

    /**
     * 号码分析实时查询蚂蚁
     *
     * @param request - DescribePhoneNumberAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberAnalysisResponse
     *
     * @param DescribePhoneNumberAnalysisRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePhoneNumberAnalysisResponse
     */
    public function describePhoneNumberAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
        }

        if (null !== $request->numberType) {
            @$query['NumberType'] = $request->numberType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->rate) {
            @$query['Rate'] = $request->rate;
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
            'action' => 'DescribePhoneNumberAnalysis',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 号码分析实时查询蚂蚁
     *
     * @param request - DescribePhoneNumberAnalysisRequest
     *
     * @returns DescribePhoneNumberAnalysisResponse
     *
     * @param DescribePhoneNumberAnalysisRequest $request
     *
     * @return DescribePhoneNumberAnalysisResponse
     */
    public function describePhoneNumberAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAnalysisWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of a phone number.
     *
     * @remarks
     * Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the Labels page, find the label that you want to use, click Activate Now, enter the required information, and then submit your application. After your application is approved, you can use the label. Before you call this operation, make sure that you are familiar with the billing of Cell Phone Number Service.
     *
     * @param request - DescribePhoneNumberAnalysisAIRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberAnalysisAIResponse
     *
     * @param DescribePhoneNumberAnalysisAIRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePhoneNumberAnalysisAIResponse
     */
    public function describePhoneNumberAnalysisAIWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->modelConfig) {
            @$query['ModelConfig'] = $request->modelConfig;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->rate) {
            @$query['Rate'] = $request->rate;
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
            'action' => 'DescribePhoneNumberAnalysisAI',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberAnalysisAIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of a phone number.
     *
     * @remarks
     * Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the Labels page, find the label that you want to use, click Activate Now, enter the required information, and then submit your application. After your application is approved, you can use the label. Before you call this operation, make sure that you are familiar with the billing of Cell Phone Number Service.
     *
     * @param request - DescribePhoneNumberAnalysisAIRequest
     *
     * @returns DescribePhoneNumberAnalysisAIResponse
     *
     * @param DescribePhoneNumberAnalysisAIRequest $request
     *
     * @return DescribePhoneNumberAnalysisAIResponse
     */
    public function describePhoneNumberAnalysisAI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAnalysisAIWithOptions($request, $runtime);
    }

    /**
     * 号码分析服务pai供应商批量查询接口.
     *
     * @param request - DescribePhoneNumberAnalysisPaiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberAnalysisPaiResponse
     *
     * @param DescribePhoneNumberAnalysisPaiRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribePhoneNumberAnalysisPaiResponse
     */
    public function describePhoneNumberAnalysisPaiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->modelConfig) {
            @$query['ModelConfig'] = $request->modelConfig;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->rate) {
            @$query['Rate'] = $request->rate;
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
            'action' => 'DescribePhoneNumberAnalysisPai',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberAnalysisPaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 号码分析服务pai供应商批量查询接口.
     *
     * @param request - DescribePhoneNumberAnalysisPaiRequest
     *
     * @returns DescribePhoneNumberAnalysisPaiResponse
     *
     * @param DescribePhoneNumberAnalysisPaiRequest $request
     *
     * @return DescribePhoneNumberAnalysisPaiResponse
     */
    public function describePhoneNumberAnalysisPai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAnalysisPaiWithOptions($request, $runtime);
    }

    /**
     * 泛行业人群筛选.
     *
     * @param request - DescribePhoneNumberAnalysisTransparentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberAnalysisTransparentResponse
     *
     * @param DescribePhoneNumberAnalysisTransparentRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribePhoneNumberAnalysisTransparentResponse
     */
    public function describePhoneNumberAnalysisTransparentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->numberType) {
            @$query['NumberType'] = $request->numberType;
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
            'action' => 'DescribePhoneNumberAnalysisTransparent',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberAnalysisTransparentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 泛行业人群筛选.
     *
     * @param request - DescribePhoneNumberAnalysisTransparentRequest
     *
     * @returns DescribePhoneNumberAnalysisTransparentResponse
     *
     * @param DescribePhoneNumberAnalysisTransparentRequest $request
     *
     * @return DescribePhoneNumberAnalysisTransparentResponse
     */
    public function describePhoneNumberAnalysisTransparent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAnalysisTransparentWithOptions($request, $runtime);
    }

    /**
     * Queries the carrier, registration location, and mobile number portability information of a phone number.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 2,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @deprecated openAPI DescribePhoneNumberAttribute is deprecated, please use Dytnsapi::2020-02-17::DescribePhoneNumberOperatorAttribute instead
     *
     * @param request - DescribePhoneNumberAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberAttributeResponse
     *
     * @param DescribePhoneNumberAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePhoneNumberAttributeResponse
     */
    public function describePhoneNumberAttributeWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePhoneNumberAttribute',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the carrier, registration location, and mobile number portability information of a phone number.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 2,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @deprecated openAPI DescribePhoneNumberAttribute is deprecated, please use Dytnsapi::2020-02-17::DescribePhoneNumberOperatorAttribute instead
     *
     * @param request - DescribePhoneNumberAttributeRequest
     *
     * @returns DescribePhoneNumberAttributeResponse
     *
     * @param DescribePhoneNumberAttributeRequest $request
     *
     * @return DescribePhoneNumberAttributeResponse
     */
    public function describePhoneNumberAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the usage period of a phone number of a user.
     *
     * @remarks
     *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePhoneNumberOnlineTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberOnlineTimeResponse
     *
     * @param DescribePhoneNumberOnlineTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePhoneNumberOnlineTimeResponse
     */
    public function describePhoneNumberOnlineTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->carrier) {
            @$query['Carrier'] = $request->carrier;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'DescribePhoneNumberOnlineTime',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberOnlineTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage period of a phone number of a user.
     *
     * @remarks
     *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePhoneNumberOnlineTimeRequest
     *
     * @returns DescribePhoneNumberOnlineTimeResponse
     *
     * @param DescribePhoneNumberOnlineTimeRequest $request
     *
     * @return DescribePhoneNumberOnlineTimeResponse
     */
    public function describePhoneNumberOnlineTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberOnlineTimeWithOptions($request, $runtime);
    }

    /**
     * Queries the attribute information about a phone number, including the registration province, registration city, basic carrier (such as China Mobile, China Unicom, China Telecom, or China Broadnet), reseller of mobile communications services (such as Alibaba Communications), mobile number portability, and the number segment to which the phone number belongs.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154008.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   You can call this operation to obtain the carrier, registration location, and mobile number portability information about a phone number. You can query phone numbers in **plaintext** and phone numbers that are encrypted by using **MD5** and **SHA256**.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *
     * @param request - DescribePhoneNumberOperatorAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberOperatorAttributeResponse
     *
     * @param DescribePhoneNumberOperatorAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribePhoneNumberOperatorAttributeResponse
     */
    public function describePhoneNumberOperatorAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->flowName) {
            @$query['FlowName'] = $request->flowName;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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

        if (null !== $request->resultCount) {
            @$query['ResultCount'] = $request->resultCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePhoneNumberOperatorAttribute',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberOperatorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attribute information about a phone number, including the registration province, registration city, basic carrier (such as China Mobile, China Unicom, China Telecom, or China Broadnet), reseller of mobile communications services (such as Alibaba Communications), mobile number portability, and the number segment to which the phone number belongs.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154008.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   You can call this operation to obtain the carrier, registration location, and mobile number portability information about a phone number. You can query phone numbers in **plaintext** and phone numbers that are encrypted by using **MD5** and **SHA256**.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *
     * @param request - DescribePhoneNumberOperatorAttributeRequest
     *
     * @returns DescribePhoneNumberOperatorAttributeResponse
     *
     * @param DescribePhoneNumberOperatorAttributeRequest $request
     *
     * @return DescribePhoneNumberOperatorAttributeResponse
     */
    public function describePhoneNumberOperatorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberOperatorAttributeWithOptions($request, $runtime);
    }

    /**
     * 号码归属服务(包年包月客户专用).
     *
     * @param request - DescribePhoneNumberOperatorAttributeAnnualRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberOperatorAttributeAnnualResponse
     *
     * @param DescribePhoneNumberOperatorAttributeAnnualRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribePhoneNumberOperatorAttributeAnnualResponse
     */
    public function describePhoneNumberOperatorAttributeAnnualWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePhoneNumberOperatorAttributeAnnual',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberOperatorAttributeAnnualResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 号码归属服务(包年包月客户专用).
     *
     * @param request - DescribePhoneNumberOperatorAttributeAnnualRequest
     *
     * @returns DescribePhoneNumberOperatorAttributeAnnualResponse
     *
     * @param DescribePhoneNumberOperatorAttributeAnnualRequest $request
     *
     * @return DescribePhoneNumberOperatorAttributeAnnualResponse
     */
    public function describePhoneNumberOperatorAttributeAnnual($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberOperatorAttributeAnnualWithOptions($request, $runtime);
    }

    /**
     * 号码归属服务(包年包月客户专用).
     *
     * @param request - DescribePhoneNumberOperatorAttributeAnnualUseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberOperatorAttributeAnnualUseResponse
     *
     * @param DescribePhoneNumberOperatorAttributeAnnualUseRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribePhoneNumberOperatorAttributeAnnualUseResponse
     */
    public function describePhoneNumberOperatorAttributeAnnualUseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePhoneNumberOperatorAttributeAnnualUse',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberOperatorAttributeAnnualUseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 号码归属服务(包年包月客户专用).
     *
     * @param request - DescribePhoneNumberOperatorAttributeAnnualUseRequest
     *
     * @returns DescribePhoneNumberOperatorAttributeAnnualUseResponse
     *
     * @param DescribePhoneNumberOperatorAttributeAnnualUseRequest $request
     *
     * @return DescribePhoneNumberOperatorAttributeAnnualUseResponse
     */
    public function describePhoneNumberOperatorAttributeAnnualUse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberOperatorAttributeAnnualUseWithOptions($request, $runtime);
    }

    /**
     * 风险用户评分.
     *
     * @param request - DescribePhoneNumberRiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneNumberRiskResponse
     *
     * @param DescribePhoneNumberRiskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePhoneNumberRiskResponse
     */
    public function describePhoneNumberRiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'DescribePhoneNumberRisk',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneNumberRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 风险用户评分.
     *
     * @param request - DescribePhoneNumberRiskRequest
     *
     * @returns DescribePhoneNumberRiskResponse
     *
     * @param DescribePhoneNumberRiskRequest $request
     *
     * @return DescribePhoneNumberRiskResponse
     */
    public function describePhoneNumberRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberRiskWithOptions($request, $runtime);
    }

    /**
     * Verifies whether a phone number is a reassigned phone number by calling this operation.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   You are charged for phone number verifications only if the value of Code is OK and the value of VerifyResult is not 0.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ## [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ## [](#)Authorization information
     * By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     *
     * @param request - DescribePhoneTwiceTelVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePhoneTwiceTelVerifyResponse
     *
     * @param DescribePhoneTwiceTelVerifyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePhoneTwiceTelVerifyResponse
     */
    public function describePhoneTwiceTelVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePhoneTwiceTelVerify',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePhoneTwiceTelVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether a phone number is a reassigned phone number by calling this operation.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   You are charged for phone number verifications only if the value of Code is OK and the value of VerifyResult is not 0.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ## [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ## [](#)Authorization information
     * By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     *
     * @param request - DescribePhoneTwiceTelVerifyRequest
     *
     * @returns DescribePhoneTwiceTelVerifyResponse
     *
     * @param DescribePhoneTwiceTelVerifyRequest $request
     *
     * @return DescribePhoneTwiceTelVerifyResponse
     */
    public function describePhoneTwiceTelVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneTwiceTelVerifyWithOptions($request, $runtime);
    }

    /**
     * 获取UAID申请Token所需的签名字段.
     *
     * @param request - GetUAIDApplyTokenSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUAIDApplyTokenSignResponse
     *
     * @param GetUAIDApplyTokenSignRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetUAIDApplyTokenSignResponse
     */
    public function getUAIDApplyTokenSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->carrier) {
            @$query['Carrier'] = $request->carrier;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->format) {
            @$query['Format'] = $request->format;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->paramKey) {
            @$query['ParamKey'] = $request->paramKey;
        }

        if (null !== $request->paramStr) {
            @$query['ParamStr'] = $request->paramStr;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUAIDApplyTokenSign',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUAIDApplyTokenSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取UAID申请Token所需的签名字段.
     *
     * @param request - GetUAIDApplyTokenSignRequest
     *
     * @returns GetUAIDApplyTokenSignResponse
     *
     * @param GetUAIDApplyTokenSignRequest $request
     *
     * @return GetUAIDApplyTokenSignResponse
     */
    public function getUAIDApplyTokenSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUAIDApplyTokenSignWithOptions($request, $runtime);
    }

    /**
     * 获取号码采集服务申请Token所需的签名字段.
     *
     * @param request - GetUAIDConversionSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUAIDConversionSignResponse
     *
     * @param GetUAIDConversionSignRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetUAIDConversionSignResponse
     */
    public function getUAIDConversionSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->carrier) {
            @$query['Carrier'] = $request->carrier;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->format) {
            @$query['Format'] = $request->format;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->paramKey) {
            @$query['ParamKey'] = $request->paramKey;
        }

        if (null !== $request->paramStr) {
            @$query['ParamStr'] = $request->paramStr;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUAIDConversionSign',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUAIDConversionSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取号码采集服务申请Token所需的签名字段.
     *
     * @param request - GetUAIDConversionSignRequest
     *
     * @returns GetUAIDConversionSignResponse
     *
     * @param GetUAIDConversionSignRequest $request
     *
     * @return GetUAIDConversionSignResponse
     */
    public function getUAIDConversionSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUAIDConversionSignWithOptions($request, $runtime);
    }

    /**
     * Filters invalid phone numbers.
     *
     * @remarks
     * Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - InvalidPhoneNumberFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvalidPhoneNumberFilterResponse
     *
     * @param InvalidPhoneNumberFilterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InvalidPhoneNumberFilterResponse
     */
    public function invalidPhoneNumberFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'InvalidPhoneNumberFilter',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvalidPhoneNumberFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Filters invalid phone numbers.
     *
     * @remarks
     * Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - InvalidPhoneNumberFilterRequest
     *
     * @returns InvalidPhoneNumberFilterResponse
     *
     * @param InvalidPhoneNumberFilterRequest $request
     *
     * @return InvalidPhoneNumberFilterResponse
     */
    public function invalidPhoneNumberFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invalidPhoneNumberFilterWithOptions($request, $runtime);
    }

    /**
     * 预警联系人查询.
     *
     * @param request - ListContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContactsResponse
     *
     * @param ListContactsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListContactsResponse
     */
    public function listContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
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
            'action' => 'ListContacts',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警联系人查询.
     *
     * @param request - ListContactsRequest
     *
     * @returns ListContactsResponse
     *
     * @param ListContactsRequest $request
     *
     * @return ListContactsResponse
     */
    public function listContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContactsWithOptions($request, $runtime);
    }

    /**
     * @param request - PhoneNumberConvertServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PhoneNumberConvertServiceResponse
     *
     * @param PhoneNumberConvertServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PhoneNumberConvertServiceResponse
     */
    public function phoneNumberConvertServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'PhoneNumberConvertService',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PhoneNumberConvertServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PhoneNumberConvertServiceRequest
     *
     * @returns PhoneNumberConvertServiceResponse
     *
     * @param PhoneNumberConvertServiceRequest $request
     *
     * @return PhoneNumberConvertServiceResponse
     */
    public function phoneNumberConvertService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberConvertServiceWithOptions($request, $runtime);
    }

    /**
     * Encrypts the original phone number into a virtual number that starts with 140. Cell Phone Number Service integrates the communications services provided by Alibaba Cloud. This allows you to initiate a call by using a virtual number that starts with 140.
     *
     * @remarks
     * Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberEncryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PhoneNumberEncryptResponse
     *
     * @param PhoneNumberEncryptRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PhoneNumberEncryptResponse
     */
    public function phoneNumberEncryptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'PhoneNumberEncrypt',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PhoneNumberEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Encrypts the original phone number into a virtual number that starts with 140. Cell Phone Number Service integrates the communications services provided by Alibaba Cloud. This allows you to initiate a call by using a virtual number that starts with 140.
     *
     * @remarks
     * Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberEncryptRequest
     *
     * @returns PhoneNumberEncryptResponse
     *
     * @param PhoneNumberEncryptRequest $request
     *
     * @return PhoneNumberEncryptResponse
     */
    public function phoneNumberEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberEncryptWithOptions($request, $runtime);
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PhoneNumberStatusForAccountResponse
     *
     * @param PhoneNumberStatusForAccountRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PhoneNumberStatusForAccountResponse
     */
    public function phoneNumberStatusForAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'PhoneNumberStatusForAccount',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PhoneNumberStatusForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForAccountRequest
     *
     * @returns PhoneNumberStatusForAccountResponse
     *
     * @param PhoneNumberStatusForAccountRequest $request
     *
     * @return PhoneNumberStatusForAccountResponse
     */
    public function phoneNumberStatusForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForAccountWithOptions($request, $runtime);
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForPublicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PhoneNumberStatusForPublicResponse
     *
     * @param PhoneNumberStatusForPublicRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PhoneNumberStatusForPublicResponse
     */
    public function phoneNumberStatusForPublicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'PhoneNumberStatusForPublic',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PhoneNumberStatusForPublicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForPublicRequest
     *
     * @returns PhoneNumberStatusForPublicResponse
     *
     * @param PhoneNumberStatusForPublicRequest $request
     *
     * @return PhoneNumberStatusForPublicResponse
     */
    public function phoneNumberStatusForPublic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForPublicWithOptions($request, $runtime);
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForRealRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PhoneNumberStatusForRealResponse
     *
     * @param PhoneNumberStatusForRealRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return PhoneNumberStatusForRealResponse
     */
    public function phoneNumberStatusForRealWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'PhoneNumberStatusForReal',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PhoneNumberStatusForRealResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForRealRequest
     *
     * @returns PhoneNumberStatusForRealResponse
     *
     * @param PhoneNumberStatusForRealRequest $request
     *
     * @return PhoneNumberStatusForRealResponse
     */
    public function phoneNumberStatusForReal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForRealWithOptions($request, $runtime);
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForSmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PhoneNumberStatusForSmsResponse
     *
     * @param PhoneNumberStatusForSmsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return PhoneNumberStatusForSmsResponse
     */
    public function phoneNumberStatusForSmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'PhoneNumberStatusForSms',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PhoneNumberStatusForSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForSmsRequest
     *
     * @returns PhoneNumberStatusForSmsResponse
     *
     * @param PhoneNumberStatusForSmsRequest $request
     *
     * @return PhoneNumberStatusForSmsResponse
     */
    public function phoneNumberStatusForSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForSmsWithOptions($request, $runtime);
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PhoneNumberStatusForVoiceResponse
     *
     * @param PhoneNumberStatusForVoiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PhoneNumberStatusForVoiceResponse
     */
    public function phoneNumberStatusForVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'PhoneNumberStatusForVoice',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PhoneNumberStatusForVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PhoneNumberStatusForVoiceRequest
     *
     * @returns PhoneNumberStatusForVoiceResponse
     *
     * @param PhoneNumberStatusForVoiceRequest $request
     *
     * @return PhoneNumberStatusForVoiceResponse
     */
    public function phoneNumberStatusForVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForVoiceWithOptions($request, $runtime);
    }

    /**
     * Queries available authorization codes.
     *
     * @param request - QueryAvailableAuthCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAvailableAuthCodeResponse
     *
     * @param QueryAvailableAuthCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryAvailableAuthCodeResponse
     */
    public function queryAvailableAuthCodeWithOptions($request, $runtime)
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

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAvailableAuthCode',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAvailableAuthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available authorization codes.
     *
     * @param request - QueryAvailableAuthCodeRequest
     *
     * @returns QueryAvailableAuthCodeResponse
     *
     * @param QueryAvailableAuthCodeRequest $request
     *
     * @return QueryAvailableAuthCodeResponse
     */
    public function queryAvailableAuthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvailableAuthCodeWithOptions($request, $runtime);
    }

    /**
     * 套餐包类型信息查询.
     *
     * @param request - QueryPackageTypeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPackageTypeInfoResponse
     *
     * @param QueryPackageTypeInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryPackageTypeInfoResponse
     */
    public function queryPackageTypeInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
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
            'action' => 'QueryPackageTypeInfo',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPackageTypeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 套餐包类型信息查询.
     *
     * @param request - QueryPackageTypeInfoRequest
     *
     * @returns QueryPackageTypeInfoResponse
     *
     * @param QueryPackageTypeInfoRequest $request
     *
     * @return QueryPackageTypeInfoResponse
     */
    public function queryPackageTypeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPackageTypeInfoWithOptions($request, $runtime);
    }

    /**
     * 在网时长专用接口.
     *
     * @param request - QueryPhoneNumberOnlineTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPhoneNumberOnlineTimeResponse
     *
     * @param QueryPhoneNumberOnlineTimeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryPhoneNumberOnlineTimeResponse
     */
    public function queryPhoneNumberOnlineTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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
            'action' => 'QueryPhoneNumberOnlineTime',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPhoneNumberOnlineTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 在网时长专用接口.
     *
     * @param request - QueryPhoneNumberOnlineTimeRequest
     *
     * @returns QueryPhoneNumberOnlineTimeResponse
     *
     * @param QueryPhoneNumberOnlineTimeRequest $request
     *
     * @return QueryPhoneNumberOnlineTimeResponse
     */
    public function queryPhoneNumberOnlineTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneNumberOnlineTimeWithOptions($request, $runtime);
    }

    /**
     * 二次号携号转网号码查询.
     *
     * @param request - QueryPhoneTwiceTelVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPhoneTwiceTelVerifyResponse
     *
     * @param QueryPhoneTwiceTelVerifyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryPhoneTwiceTelVerifyResponse
     */
    public function queryPhoneTwiceTelVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPhoneTwiceTelVerify',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPhoneTwiceTelVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 二次号携号转网号码查询.
     *
     * @param request - QueryPhoneTwiceTelVerifyRequest
     *
     * @returns QueryPhoneTwiceTelVerifyResponse
     *
     * @param QueryPhoneTwiceTelVerifyRequest $request
     *
     * @return QueryPhoneTwiceTelVerifyResponse
     */
    public function queryPhoneTwiceTelVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneTwiceTelVerifyWithOptions($request, $runtime);
    }

    /**
     * Queries tag application rules.
     *
     * @param request - QueryTagApplyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTagApplyRuleResponse
     *
     * @param QueryTagApplyRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTagApplyRuleResponse
     */
    public function queryTagApplyRuleWithOptions($request, $runtime)
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

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTagApplyRule',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTagApplyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tag application rules.
     *
     * @param request - QueryTagApplyRuleRequest
     *
     * @returns QueryTagApplyRuleResponse
     *
     * @param QueryTagApplyRuleRequest $request
     *
     * @return QueryTagApplyRuleResponse
     */
    public function queryTagApplyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagApplyRuleWithOptions($request, $runtime);
    }

    /**
     * Queries information about tags.
     *
     * @param request - QueryTagInfoBySelectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTagInfoBySelectionResponse
     *
     * @param QueryTagInfoBySelectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTagInfoBySelectionResponse
     */
    public function queryTagInfoBySelectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->industryId) {
            @$query['IndustryId'] = $request->industryId;
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

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTagInfoBySelection',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTagInfoBySelectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about tags.
     *
     * @param request - QueryTagInfoBySelectionRequest
     *
     * @returns QueryTagInfoBySelectionResponse
     *
     * @param QueryTagInfoBySelectionRequest $request
     *
     * @return QueryTagInfoBySelectionResponse
     */
    public function queryTagInfoBySelection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagInfoBySelectionWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tags by page.
     *
     * @param request - QueryTagListPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTagListPageResponse
     *
     * @param QueryTagListPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryTagListPageResponse
     */
    public function queryTagListPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'action' => 'QueryTagListPage',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTagListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tags by page.
     *
     * @param request - QueryTagListPageRequest
     *
     * @returns QueryTagListPageResponse
     *
     * @param QueryTagListPageRequest $request
     *
     * @return QueryTagListPageResponse
     */
    public function queryTagListPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagListPageWithOptions($request, $runtime);
    }

    /**
     * 查询离线任务列表.
     *
     * @param tmpReq - QueryTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskListResponse
     *
     * @param QueryTaskListRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return QueryTaskListResponse
     */
    public function queryTaskListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryTaskListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->result) {
            $request->resultShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->result, 'Result', 'json');
        }

        if (null !== $tmpReq->taskType) {
            $request->taskTypeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskType, 'TaskType', 'json');
        }

        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resultShrink) {
            @$query['Result'] = $request->resultShrink;
        }

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskTypeShrink) {
            @$query['TaskType'] = $request->taskTypeShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTaskList',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询离线任务列表.
     *
     * @param request - QueryTaskListRequest
     *
     * @returns QueryTaskListResponse
     *
     * @param QueryTaskListRequest $request
     *
     * @return QueryTaskListResponse
     */
    public function queryTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskListWithOptions($request, $runtime);
    }

    /**
     * Queries the usage statistics based on tag IDs.
     *
     * @param request - QueryUsageStatisticsByTagIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUsageStatisticsByTagIdResponse
     *
     * @param QueryUsageStatisticsByTagIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryUsageStatisticsByTagIdResponse
     */
    public function queryUsageStatisticsByTagIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUsageStatisticsByTagId',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUsageStatisticsByTagIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage statistics based on tag IDs.
     *
     * @param request - QueryUsageStatisticsByTagIdRequest
     *
     * @returns QueryUsageStatisticsByTagIdResponse
     *
     * @param QueryUsageStatisticsByTagIdRequest $request
     *
     * @return QueryUsageStatisticsByTagIdResponse
     */
    public function queryUsageStatisticsByTagId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUsageStatisticsByTagIdWithOptions($request, $runtime);
    }

    /**
     * 预警联系人保存.
     *
     * @param request - SaveContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveContactsResponse
     *
     * @param SaveContactsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SaveContactsResponse
     */
    public function saveContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->contactEmail) {
            @$query['ContactEmail'] = $request->contactEmail;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->contactPhone) {
            @$query['ContactPhone'] = $request->contactPhone;
        }

        if (null !== $request->mailStatus) {
            @$query['MailStatus'] = $request->mailStatus;
        }

        if (null !== $request->openStatusWarning) {
            @$query['OpenStatusWarning'] = $request->openStatusWarning;
        }

        if (null !== $request->opentAttributionWarning) {
            @$query['OpentAttributionWarning'] = $request->opentAttributionWarning;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneStatus) {
            @$query['PhoneStatus'] = $request->phoneStatus;
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
            'action' => 'SaveContacts',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警联系人保存.
     *
     * @param request - SaveContactsRequest
     *
     * @returns SaveContactsResponse
     *
     * @param SaveContactsRequest $request
     *
     * @return SaveContactsResponse
     */
    public function saveContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveContactsWithOptions($request, $runtime);
    }

    /**
     * Verifies whether the name, phone number, and ID card number entered by a user belong to the same user.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   You are charged only if the value of Code is OK and the value of IsConsistent is not 2.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ThreeElementsVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ThreeElementsVerificationResponse
     *
     * @param ThreeElementsVerificationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ThreeElementsVerificationResponse
     */
    public function threeElementsVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->certCode) {
            @$query['CertCode'] = $request->certCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'ThreeElementsVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ThreeElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether the name, phone number, and ID card number entered by a user belong to the same user.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   You are charged only if the value of Code is OK and the value of IsConsistent is not 2.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ThreeElementsVerificationRequest
     *
     * @returns ThreeElementsVerificationResponse
     *
     * @param ThreeElementsVerificationRequest $request
     *
     * @return ThreeElementsVerificationResponse
     */
    public function threeElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->threeElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * Verifies whether the name and phone number entered by a user belong to the same user.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   You are charged only if the value of Code is OK and the value of IsConsistent is not 2.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - TwoElementsVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TwoElementsVerificationResponse
     *
     * @param TwoElementsVerificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return TwoElementsVerificationResponse
     */
    public function twoElementsVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->inputNumber) {
            @$query['InputNumber'] = $request->inputNumber;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'TwoElementsVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TwoElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether the name and phone number entered by a user belong to the same user.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   You are charged only if the value of Code is OK and the value of IsConsistent is not 2.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - TwoElementsVerificationRequest
     *
     * @returns TwoElementsVerificationResponse
     *
     * @param TwoElementsVerificationRequest $request
     *
     * @return TwoElementsVerificationResponse
     */
    public function twoElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->twoElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * UAID采集.
     *
     * @param request - UAIDCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UAIDCollectionResponse
     *
     * @param UAIDCollectionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UAIDCollectionResponse
     */
    public function uAIDCollectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->carrier) {
            @$query['Carrier'] = $request->carrier;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userGrantId) {
            @$query['UserGrantId'] = $request->userGrantId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UAIDCollection',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UAIDCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UAID采集.
     *
     * @param request - UAIDCollectionRequest
     *
     * @returns UAIDCollectionResponse
     *
     * @param UAIDCollectionRequest $request
     *
     * @return UAIDCollectionResponse
     */
    public function uAIDCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uAIDCollectionWithOptions($request, $runtime);
    }

    /**
     * uaid号码转换服务
     *
     * @param request - UAIDConversionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UAIDConversionResponse
     *
     * @param UAIDConversionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UAIDConversionResponse
     */
    public function uAIDConversionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->carrier) {
            @$query['Carrier'] = $request->carrier;
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

        if (null !== $request->uaidList) {
            @$query['UaidList'] = $request->uaidList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UAIDConversion',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UAIDConversionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * uaid号码转换服务
     *
     * @param request - UAIDConversionRequest
     *
     * @returns UAIDConversionResponse
     *
     * @param UAIDConversionRequest $request
     *
     * @return UAIDConversionResponse
     */
    public function uAIDConversion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uAIDConversionWithOptions($request, $runtime);
    }

    /**
     * 获取UAID.
     *
     * @param request - UAIDVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UAIDVerificationResponse
     *
     * @param UAIDVerificationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UAIDVerificationResponse
     */
    public function uAIDVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->carrier) {
            @$query['Carrier'] = $request->carrier;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userGrantId) {
            @$query['UserGrantId'] = $request->userGrantId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UAIDVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UAIDVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取UAID.
     *
     * @param request - UAIDVerificationRequest
     *
     * @returns UAIDVerificationResponse
     *
     * @param UAIDVerificationRequest $request
     *
     * @return UAIDVerificationResponse
     */
    public function uAIDVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uAIDVerificationWithOptions($request, $runtime);
    }

    /**
     * 预警联系人更新.
     *
     * @param request - UpdateContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContactsResponse
     *
     * @param UpdateContactsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateContactsResponse
     */
    public function updateContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactEmail) {
            @$query['ContactEmail'] = $request->contactEmail;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->contactPhone) {
            @$query['ContactPhone'] = $request->contactPhone;
        }

        if (null !== $request->mailStatus) {
            @$query['MailStatus'] = $request->mailStatus;
        }

        if (null !== $request->openStatusWarning) {
            @$query['OpenStatusWarning'] = $request->openStatusWarning;
        }

        if (null !== $request->opentAttributionWarning) {
            @$query['OpentAttributionWarning'] = $request->opentAttributionWarning;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneStatus) {
            @$query['PhoneStatus'] = $request->phoneStatus;
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
            'action' => 'UpdateContacts',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警联系人更新.
     *
     * @param request - UpdateContactsRequest
     *
     * @returns UpdateContactsResponse
     *
     * @param UpdateContactsRequest $request
     *
     * @return UpdateContactsResponse
     */
    public function updateContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContactsWithOptions($request, $runtime);
    }
}
