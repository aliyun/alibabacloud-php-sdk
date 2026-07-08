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
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\HistoryThreeElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\HistoryThreeElementsVerificationResponse;
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
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\VirtualThreeElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\VirtualThreeElementsVerificationResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dytnsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'dytnsapi.aliyuncs.com',
            'us-east-1' => 'dytnsapi.aliyuncs.com',
            'me-east-1' => 'dytnsapi.aliyuncs.com',
            'eu-west-1' => 'dytnsapi.aliyuncs.com',
            'eu-central-1' => 'dytnsapi.aliyuncs.com',
            'cn-zhangjiakou' => 'dytnsapi.aliyuncs.com',
            'cn-wulanchabu' => 'dytnsapi.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dytnsapi.aliyuncs.com',
            'cn-shenzhen' => 'dytnsapi.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dytnsapi.aliyuncs.com',
            'cn-shanghai' => 'dytnsapi.aliyuncs.com',
            'cn-qingdao' => 'dytnsapi.aliyuncs.com',
            'cn-huhehaote' => 'dytnsapi.aliyuncs.com',
            'cn-hongkong' => 'dytnsapi.aliyuncs.com',
            'cn-hangzhou-finance' => 'dytnsapi.aliyuncs.com',
            'cn-hangzhou' => 'dytnsapi.aliyuncs.com',
            'cn-chengdu' => 'dytnsapi.aliyuncs.com',
            'cn-beijing-finance-1' => 'dytnsapi.aliyuncs.com',
            'cn-beijing' => 'dytnsapi.aliyuncs.com',
            'ap-southeast-5' => 'dytnsapi.aliyuncs.com',
            'ap-southeast-3' => 'dytnsapi.aliyuncs.com',
            'ap-southeast-1' => 'dytnsapi.aliyuncs.com',
            'ap-northeast-1' => 'dytnsapi.aliyuncs.com',
        ];
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
     * Three-element (name, ID card number, and ID card photo) verification. Used to compare whether the three pieces of information (the name and ID card number filled in by the user and the uploaded portrait photo) belong to the same user.
     *
     * @remarks
     * - Before using this API, log on to the Cell Phone Number Service console, go to the Tag Square page, find the corresponding tag, click Apply to Activate, fill in the application materials, and use the tag after the application is approved.
     * - Before using this API, make sure that you have fully understood the [Cell Phone Number Service pricing](https://help.aliyun.com/document_detail/154751.html).
     * - Billing applies only when the API return value is Code="OK". Other return results are not billed.
     * - For the verifiable scope, see [ID Card Three Elements Verification](https://help.aliyun.com/document_detail/2844379.html).
     * ### QPS limit
     * - The per-user QPS limit for this API is 200 calls per second. If you exceed the limit, API calls are throttled, which may affect your business. Call the API reasonably.
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
     * Three-element (name, ID card number, and ID card photo) verification. Used to compare whether the three pieces of information (the name and ID card number filled in by the user and the uploaded portrait photo) belong to the same user.
     *
     * @remarks
     * - Before using this API, log on to the Cell Phone Number Service console, go to the Tag Square page, find the corresponding tag, click Apply to Activate, fill in the application materials, and use the tag after the application is approved.
     * - Before using this API, make sure that you have fully understood the [Cell Phone Number Service pricing](https://help.aliyun.com/document_detail/154751.html).
     * - Billing applies only when the API return value is Code="OK". Other return results are not billed.
     * - For the verifiable scope, see [ID Card Three Elements Verification](https://help.aliyun.com/document_detail/2844379.html).
     * ### QPS limit
     * - The per-user QPS limit for this API is 200 calls per second. If you exceed the limit, API calls are throttled, which may affect your business. Call the API reasonably.
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
     * Two-element (name and ID card number) verification. Used to verify whether the name and ID card number entered by a user belong to the same person.
     *
     * @remarks
     * - Before using this operation, make sure that you have fully understood the pricing of Cell Phone Number Service.
     * - Before using this operation, log on to the Cell Phone Number Service console. On the Tag Marketplace page, find the desired tag, click Apply to Activate, and fill in the application information. You can use the operation only after your application is approved.
     * - The operation is charged when the response contains Code="OK" and IsConsistent != 2. Other response results are not charged.
     * ## QPS Limit
     * The per-user QPS limit of this operation is 200 calls per second. If the limit is exceeded, the API calls are throttled, which may affect your business. Call the operation properly.
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
     * Two-element (name and ID card number) verification. Used to verify whether the name and ID card number entered by a user belong to the same person.
     *
     * @remarks
     * - Before using this operation, make sure that you have fully understood the pricing of Cell Phone Number Service.
     * - Before using this operation, log on to the Cell Phone Number Service console. On the Tag Marketplace page, find the desired tag, click Apply to Activate, and fill in the application information. You can use the operation only after your application is approved.
     * - The operation is charged when the response contains Code="OK" and IsConsistent != 2. Other response results are not charged.
     * ## QPS Limit
     * The per-user QPS limit of this operation is 200 calls per second. If the limit is exceeded, the API calls are throttled, which may affect your business. Call the operation properly.
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
     * Verifies the enterprise name, enterprise certificate number, enterprise legal person name, and enterprise legal person ID card number. All four items must be consistent and the enterprise\\"s operating status must be active for verification to pass.
     *
     * @remarks
     * - Before you use this API, make sure that you fully understand the billing method and prices of the Enterprise Four-Element Verification product. For billing details, see [Product Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * - Billing applies when VerifyResult returns true/false and ReasonCode is 0, 1, or 2 in the response. Billing does not apply in other cases.
     * - Before you use this API, log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh), go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply to Activate**, and submit your application. You can use the API after the application is approved.
     * ### QPS limit
     * The per-user QPS limit for this API is 200 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call the API appropriately.
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
     * Verifies the enterprise name, enterprise certificate number, enterprise legal person name, and enterprise legal person ID card number. All four items must be consistent and the enterprise\\"s operating status must be active for verification to pass.
     *
     * @remarks
     * - Before you use this API, make sure that you fully understand the billing method and prices of the Enterprise Four-Element Verification product. For billing details, see [Product Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * - Billing applies when VerifyResult returns true/false and ReasonCode is 0, 1, or 2 in the response. Billing does not apply in other cases.
     * - Before you use this API, log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh), go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply to Activate**, and submit your application. You can use the API after the application is approved.
     * ### QPS limit
     * The per-user QPS limit for this API is 200 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call the API appropriately.
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
     * Used to verify a company name, company certificate number, and the name of the company\\"s legal representative. Verification passes only when all three are consistent and the company\\"s operating status is in business.
     *
     * @remarks
     * - Before you use this API, make sure that you have fully understood the billing method and pricing of the Three-Element Company Verification product. For billing details, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * - In the returned result, charges apply when VerifyResult is true/false and ReasonCode is 0/1/2. No charges apply in other cases.
     * - Before you use this API, log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh), go to the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, and submit the application materials. You can use the API after the application is approved.
     * ### QPS limit
     * The per-user QPS limit for this API is 200 calls per second. Requests that exceed this limit are throttled, which may affect your business. Call this API at a reasonable rate.
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
     * Used to verify a company name, company certificate number, and the name of the company\\"s legal representative. Verification passes only when all three are consistent and the company\\"s operating status is in business.
     *
     * @remarks
     * - Before you use this API, make sure that you have fully understood the billing method and pricing of the Three-Element Company Verification product. For billing details, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * - In the returned result, charges apply when VerifyResult is true/false and ReasonCode is 0/1/2. No charges apply in other cases.
     * - Before you use this API, log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh), go to the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, and submit the application materials. You can use the API after the application is approved.
     * ### QPS limit
     * The per-user QPS limit for this API is 200 calls per second. Requests that exceed this limit are throttled, which may affect your business. Call this API at a reasonable rate.
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
     * Used to verify the enterprise name and enterprise certificate number. The name and certificate must be fully consistent, and the enterprise must be in operating status for the verification to pass.
     *
     * @remarks
     * - Before you use this API, make sure that you fully understand the billing methods and pricing of the Enterprise Two-Element Verification product. For billing details, see [Product billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * - Billing applies when Code=OK and ReasonCode=0/1/3 in the returned result. Other cases are not billed.
     * - Before you use this API, log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh), find the corresponding tag on the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, click **Apply to Activate**, and fill in the application materials. After the application is approved, you can use the API.
     * ### QPS limit
     * The single-user QPS limit for this API is 200 times/second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the API reasonably.
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
     * Used to verify the enterprise name and enterprise certificate number. The name and certificate must be fully consistent, and the enterprise must be in operating status for the verification to pass.
     *
     * @remarks
     * - Before you use this API, make sure that you fully understand the billing methods and pricing of the Enterprise Two-Element Verification product. For billing details, see [Product billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * - Billing applies when Code=OK and ReasonCode=0/1/3 in the returned result. Other cases are not billed.
     * - Before you use this API, log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh), find the corresponding tag on the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, click **Apply to Activate**, and fill in the application materials. After the application is approved, you can use the API.
     * ### QPS limit
     * The single-user QPS limit for this API is 200 times/second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the API reasonably.
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
     * Deletes a contact.
     *
     * @remarks
     * - Make sure you have activated Phone Number Identity Service before calling this operation.
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
     * Deletes a contact.
     *
     * @remarks
     * - Make sure you have activated Phone Number Identity Service before calling this operation.
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
     * Predicts whether a phone number is invalid by using AI algorithms.
     *
     * @remarks
     * - 本接口用于验证号码是否为空号。发起调用该接口验证号码请求时，系统会根据验证次数计费，标准价为0.01元/次。**请确保在使用该接口前，已充分了解本产品的收费方式和价格。**
     * - 当返回结果中：Code="OK" 且 Status != UNKNOWN 时计费，其他情况不计费。
     * - 由于本产品通过AI算法预测手机号的空号概率，所以无法做到100%准确。当前评估的准确率和召回率约为95%左右。**调用时请注意差别**。
     * - 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
     * ### QPS限制
     * 本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     * ### 授权信息
     * 默认仅限阿里云账号使用本接口，RAM用户只有在被授予了相关API操作权限后方可使用。具体请参见[为RAM用户授权](https://help.aliyun.com/document_detail/154006.html)。
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
     * Predicts whether a phone number is invalid by using AI algorithms.
     *
     * @remarks
     * - 本接口用于验证号码是否为空号。发起调用该接口验证号码请求时，系统会根据验证次数计费，标准价为0.01元/次。**请确保在使用该接口前，已充分了解本产品的收费方式和价格。**
     * - 当返回结果中：Code="OK" 且 Status != UNKNOWN 时计费，其他情况不计费。
     * - 由于本产品通过AI算法预测手机号的空号概率，所以无法做到100%准确。当前评估的准确率和召回率约为95%左右。**调用时请注意差别**。
     * - 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
     * ### QPS限制
     * 本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     * ### 授权信息
     * 默认仅限阿里云账号使用本接口，RAM用户只有在被授予了相关API操作权限后方可使用。具体请参见[为RAM用户授权](https://help.aliyun.com/document_detail/154006.html)。
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
     * Obtains the result returned by phone number analysis.
     *
     * @remarks
     * - Before you use this API, log on to the Phone Number Service console, go to the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply to Activate**, fill in the application materials, and then use the API after the application is approved.
     * - Before you use this API, make sure that you fully understand the [billing](https://help.aliyun.com/document_detail/154008.html) of Phone Number Service.
     * ### QPS limit
     * The QPS limit of this API is 1,000 calls per second per user. If the limit is exceeded, API calls are throttled, which may affect your business. Make calls properly.
     * ### Authorization information
     * By default, only Alibaba Cloud accounts can use this API. RAM users can use this API only after they are granted the related API operation permissions. For more information, see [Authorize a RAM user](https://help.aliyun.com/document_detail/154006.html).
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
     * Obtains the result returned by phone number analysis.
     *
     * @remarks
     * - Before you use this API, log on to the Phone Number Service console, go to the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply to Activate**, fill in the application materials, and then use the API after the application is approved.
     * - Before you use this API, make sure that you fully understand the [billing](https://help.aliyun.com/document_detail/154008.html) of Phone Number Service.
     * ### QPS limit
     * The QPS limit of this API is 1,000 calls per second per user. If the limit is exceeded, API calls are throttled, which may affect your business. Make calls properly.
     * ### Authorization information
     * By default, only Alibaba Cloud accounts can use this API. RAM users can use this API only after they are granted the related API operation permissions. For more information, see [Authorize a RAM user](https://help.aliyun.com/document_detail/154006.html).
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
     * Get the phone number analysis result.
     *
     * @remarks
     * Before using this operation, log on to the Cell Phone Number Service console, go to the Tag Square page, find the corresponding tag, click Apply to activate, and fill in the application materials. You can use the operation after the application is approved.
     * Make sure that you fully understand the billing of the Cell Phone Number Service before you use this operation.
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
     * Get the phone number analysis result.
     *
     * @remarks
     * Before using this operation, log on to the Cell Phone Number Service console, go to the Tag Square page, find the corresponding tag, click Apply to activate, and fill in the application materials. You can use the operation after the application is approved.
     * Make sure that you fully understand the billing of the Cell Phone Number Service before you use this operation.
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
     * Queries the duration for which a mobile user has been registered on the carrier\\"s network.
     *
     * @remarks
     * - Before using this API, log on to the Cell Phone Number Service console, go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, fill in the application materials, and use the API after the application is approved.
     * - Make sure that you fully understand the [product pricing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service before using this API.
     * ### QPS limit
     * The per-user QPS limit for this API is 200 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this API at a reasonable rate.
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
     * Queries the duration for which a mobile user has been registered on the carrier\\"s network.
     *
     * @remarks
     * - Before using this API, log on to the Cell Phone Number Service console, go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, fill in the application materials, and use the API after the application is approved.
     * - Make sure that you fully understand the [product pricing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service before using this API.
     * ### QPS limit
     * The per-user QPS limit for this API is 200 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this API at a reasonable rate.
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
     * Queries the carrier information of a phone number, including the province, city, basic carrier (China Mobile, China Unicom, China Telecom, or China Broadnet), mobile virtual network operator (such as Alibaba Cloud Communication), whether the number has been ported, and the number segment.
     *
     * @remarks
     * - Before you use this API, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154008.html) of Cell Phone Number Service.
     * - By default, only Alibaba Cloud accounts can use this API. RAM users can use this API only after they are granted the required permissions. For more information, see [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/154006.html).
     * - This API is used to obtain the current carrier, location, and number portability information of a phone number. The API supports queries for **plaintext**, **MD5**, and **SHA256** encrypted phone numbers.
     * - Before you use this API, log on to the Cell Phone Number Service console, go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, and submit the application materials. You can use the API after your application is approved.
     * ### QPS limit
     * The QPS limit per user for this API is 2,000 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Make calls reasonably.
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
     * Queries the carrier information of a phone number, including the province, city, basic carrier (China Mobile, China Unicom, China Telecom, or China Broadnet), mobile virtual network operator (such as Alibaba Cloud Communication), whether the number has been ported, and the number segment.
     *
     * @remarks
     * - Before you use this API, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154008.html) of Cell Phone Number Service.
     * - By default, only Alibaba Cloud accounts can use this API. RAM users can use this API only after they are granted the required permissions. For more information, see [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/154006.html).
     * - This API is used to obtain the current carrier, location, and number portability information of a phone number. The API supports queries for **plaintext**, **MD5**, and **SHA256** encrypted phone numbers.
     * - Before you use this API, log on to the Cell Phone Number Service console, go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, and submit the application materials. You can use the API after your application is approved.
     * ### QPS limit
     * The QPS limit per user for this API is 2,000 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Make calls reasonably.
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
     * Quickly verify in a single request if a mobile phone number is a carrier\\"s secondary number assignment.
     *
     * @remarks
     * - Before you use this API, make sure you understand the [pricing](https://help.aliyun.com/document_detail/154751.html) for Phone Number Verification Service.
     * - You are charged only when the API response returns `Code="OK"` and `VerifyResult` is not `0`. No charge is incurred in any other case.
     * - Before you use this API, log in to the Phone Number Verification Service console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the tag you need, click **Request Activation**, and complete the application form. You can use the API once your application is approved.
     * ## QPS limits
     * The QPS limit is 100 per user. If you exceed this limit, the system throttles your API calls, which may affect your business. Plan your API calls accordingly.
     * ## Authorization
     * By default, only an Alibaba Cloud account can call this API. A RAM user must be granted the required permissions to call the API. For more information, see [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/154006.html).
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
     * Quickly verify in a single request if a mobile phone number is a carrier\\"s secondary number assignment.
     *
     * @remarks
     * - Before you use this API, make sure you understand the [pricing](https://help.aliyun.com/document_detail/154751.html) for Phone Number Verification Service.
     * - You are charged only when the API response returns `Code="OK"` and `VerifyResult` is not `0`. No charge is incurred in any other case.
     * - Before you use this API, log in to the Phone Number Verification Service console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the tag you need, click **Request Activation**, and complete the application form. You can use the API once your application is approved.
     * ## QPS limits
     * The QPS limit is 100 per user. If you exceed this limit, the system throttles your API calls, which may affect your business. Plan your API calls accordingly.
     * ## Authorization
     * By default, only an Alibaba Cloud account can call this API. A RAM user must be granted the required permissions to call the API. For more information, see [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/154006.html).
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
     * This API only provides the signing functionality for acquiring an authorization token during UAID retrieval from the three-network operators.
     *
     * @remarks
     * This API provides only the **signing function for obtaining an authorization token** as part of the UAID retrieval process for China\\"s three major operators.
     * - To generate the other parameters required to obtain the authorization token, refer to the respective operator\\"s documentation.
     * - To request the authorization token, refer to the respective operator\\"s documentation. Note that the request must be sent from the user\\"s mobile device over a cellular network.
     * - After obtaining the authorization token, call the [UAIDVerification](~~UAIDVerification~~) API to complete the UAID retrieval.
     * ### How to request an authorization token
     * >Notice:
     * When you request an authorization token, the client or H5 page must be connected to a cellular network.
     * #### China Mobile (CM)
     * Protocol: HTTPS + application/json
     * Method: POST
     * URL: https\\://msg.cmpassport.com/h5/getMobile
     * ##### Request parameters
     * Request example:
     * `{ "traceId": "mfawsxtcmyplwzpayzzvdvbsowxmkynr", "appId": "300011580392", "sign": "2c61b3c58ffbeed97461e31be4fd931a", "msgId": "redbyxsdetddwaaffajcwwapspykftzx", "expandParams": "", "businessType": "3", "version": "1.0", "timestamp": "20201125101540980" }`
     * Parameter description:
     * - `version`: Use `1.0`.
     * - `timestamp`: The request timestamp, with millisecond precision. This value and its format must match the `Time` input parameter for this API.
     * - `appId`: Use `300011580392`.
     * - `businessType`: Use `3`.
     * - `traceId`: The trace ID. This value must match this API\\"s `OutId` input parameter.
     * - `sign`: Obtained by calling this API.
     * - `msgId`: A unique message identifier.
     * ##### Response parameters
     * Response example:
     * `{ "header": { "appId": "300011580392", "msgId": "redbyxsdetddwaaffajcwwapspykftzx", "timestamp": "20201125101607932" }, "body": { "resultCode": "103000", "expandParams": "", "resultDesc": "成功", "token": "H5HTTPS4187AE9743AFCB14F8D99B9D65ED9E01" } }`
     * Retrieve the `token` from the response `body`.
     * #### China Unicom (CU)
     * Obtain the token in two steps.
     * ##### Step 1: Obtain the authurl
     * Send a request to the portal server to get the authentication server address (`authurl`).
     * Protocol: HTTPS + application/json
     * Method: GET
     * URL: https\\://nisportal.10010.com:9001/api
     * ###### Request parameters
     * Request examples:
     * JSON request: `?appid=1554778161153`
     * JSONP request: `?appid=1554778161153&callback=callbackFunction`
     * Parameter description:
     * - `appid`: Use 1554778161153.
     * - `callback`: The name of the JSONP callback function. This parameter is required only for JSONP requests.
     * ###### Response parameters
     * Response examples:
     * JSON response:
     * `{"authurl": "https://enrichgw.10010.com/d93222629f52ec79"}`
     * JSONP response:
     * `callbackFunction({"authurl":"https://enrichgw.10010.com/d93222629f52ec79"})`
     * Retrieve the `authurl` from the response.
     * ##### Step 2: Obtain the token
     * Protocol: HTTPS + application/json
     * Method: GET
     * URL: The authurl from Step 1, with /api appended.
     * Request URL example: `https://enrichgw.10010.com/d93222629f52ec79/api`
     * ###### Request parameters
     * Request examples:
     * JSON request: `?appid=1554778161153`
     * JSONP request: `?appid=1554778161153&callback=callbackFunction`
     * Parameter description:
     * - `appid`: Use 1554778161153.
     * - `callback`: The name of the JSONP callback function. This parameter is required only for JSONP requests.
     * ###### Response parameters
     * Response examples:
     * JSON response:
     * `{ "province": "1", "code": "7nHS1nggx2WP613750206700RN6oiRN1" }`
     * JSONP response:
     * `callbackFunction({"province":"1","code":"7nHS3Dnkd1BS701851092400RN6oiRN1"})`
     * Retrieve the `code` from the response.
     * #### China Telecom (CT)
     * Protocol: HTTPS + application/x-www-form-urlencoded;charset=UTF-8
     * Method: GET
     * URL: https\\://id6.me/gw/preuniq.do
     * ##### Request parameters
     * Request example:
     * `?clientType=30100&appId=9390188202&format=json&sign=D63C166FA19E1996EF********09C6A5397C10B4&paramKey=1D7C25EB8B0B8B4CB3CF8DC60628F6549********786B0AF1FEF93FA1335057A35BF5F0B39A3867EAA9BE14B3898********8B01DE34965060445B6E1F66401D714650E4AB161CD6DCF4A72********3B856F22A192B8B0C39D7A55B961062E68C89C928894F119B25********7C548355FE9DB82852EB93C939F2200B48CD17&paramStr=140********95AF8E138B94754CB4CF83BA6FB********52B258BFDFD38BF233&version=1.1`
     * Parameter description:
     * - `appId`: Use `9390188202`.
     * - `clientType`: The client type. This value must match the `ClientType` input parameter for this API.
     * - `format`: Use `json` or `jsonp`.
     * - `version`: Use `1.1`.
     * - `sign`: Obtained by calling this API.
     * - `paramKey`: The ciphertext of key A. Key A is a 16-character random string generated by the client. To generate paramKey, encrypt key A using the RSA algorithm and the China Telecom public key. The padding mode is `RSA/ECB/PKCS1Padding`. Download the [China Telecom RSA public key](https://id.189.cn/source/files/API.pem).
     * - `paramStr`: The ciphertext of a parameter string. This string contains `timeStamp` (a Unix timestamp with millisecond precision, for example `1697791988302`, that corresponds to the value of the `Time` parameter of this API) and `callback` (the name of the JSONP callback function, required only when `format` is set to `jsonp`). To generate `paramStr`, encrypt the string using AES with key A. The padding mode is `AES/CBC/PKCS5Padding`, and the initialization vector is `0000000000000000`.
     * ##### Response parameters
     * Response example:
     * `callback?result=10000&msg=success&data=a35336711c70456cb883f4f224e9a259`
     * The `data` parameter contains the ciphertext of the business result. To get the result, decrypt the data value using key A, the `AES/CBC/PKCS5Padding` mode, and an initialization vector of `0000000000000000`.
     * Decrypted business result example:
     * `{"accessCode": "H5HTTPS4187AE9743AFCB14F8D99B9D65ED9E01"}`
     * Retrieve the `accessCode` from the decrypted result.
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
     * This API only provides the signing functionality for acquiring an authorization token during UAID retrieval from the three-network operators.
     *
     * @remarks
     * This API provides only the **signing function for obtaining an authorization token** as part of the UAID retrieval process for China\\"s three major operators.
     * - To generate the other parameters required to obtain the authorization token, refer to the respective operator\\"s documentation.
     * - To request the authorization token, refer to the respective operator\\"s documentation. Note that the request must be sent from the user\\"s mobile device over a cellular network.
     * - After obtaining the authorization token, call the [UAIDVerification](~~UAIDVerification~~) API to complete the UAID retrieval.
     * ### How to request an authorization token
     * >Notice:
     * When you request an authorization token, the client or H5 page must be connected to a cellular network.
     * #### China Mobile (CM)
     * Protocol: HTTPS + application/json
     * Method: POST
     * URL: https\\://msg.cmpassport.com/h5/getMobile
     * ##### Request parameters
     * Request example:
     * `{ "traceId": "mfawsxtcmyplwzpayzzvdvbsowxmkynr", "appId": "300011580392", "sign": "2c61b3c58ffbeed97461e31be4fd931a", "msgId": "redbyxsdetddwaaffajcwwapspykftzx", "expandParams": "", "businessType": "3", "version": "1.0", "timestamp": "20201125101540980" }`
     * Parameter description:
     * - `version`: Use `1.0`.
     * - `timestamp`: The request timestamp, with millisecond precision. This value and its format must match the `Time` input parameter for this API.
     * - `appId`: Use `300011580392`.
     * - `businessType`: Use `3`.
     * - `traceId`: The trace ID. This value must match this API\\"s `OutId` input parameter.
     * - `sign`: Obtained by calling this API.
     * - `msgId`: A unique message identifier.
     * ##### Response parameters
     * Response example:
     * `{ "header": { "appId": "300011580392", "msgId": "redbyxsdetddwaaffajcwwapspykftzx", "timestamp": "20201125101607932" }, "body": { "resultCode": "103000", "expandParams": "", "resultDesc": "成功", "token": "H5HTTPS4187AE9743AFCB14F8D99B9D65ED9E01" } }`
     * Retrieve the `token` from the response `body`.
     * #### China Unicom (CU)
     * Obtain the token in two steps.
     * ##### Step 1: Obtain the authurl
     * Send a request to the portal server to get the authentication server address (`authurl`).
     * Protocol: HTTPS + application/json
     * Method: GET
     * URL: https\\://nisportal.10010.com:9001/api
     * ###### Request parameters
     * Request examples:
     * JSON request: `?appid=1554778161153`
     * JSONP request: `?appid=1554778161153&callback=callbackFunction`
     * Parameter description:
     * - `appid`: Use 1554778161153.
     * - `callback`: The name of the JSONP callback function. This parameter is required only for JSONP requests.
     * ###### Response parameters
     * Response examples:
     * JSON response:
     * `{"authurl": "https://enrichgw.10010.com/d93222629f52ec79"}`
     * JSONP response:
     * `callbackFunction({"authurl":"https://enrichgw.10010.com/d93222629f52ec79"})`
     * Retrieve the `authurl` from the response.
     * ##### Step 2: Obtain the token
     * Protocol: HTTPS + application/json
     * Method: GET
     * URL: The authurl from Step 1, with /api appended.
     * Request URL example: `https://enrichgw.10010.com/d93222629f52ec79/api`
     * ###### Request parameters
     * Request examples:
     * JSON request: `?appid=1554778161153`
     * JSONP request: `?appid=1554778161153&callback=callbackFunction`
     * Parameter description:
     * - `appid`: Use 1554778161153.
     * - `callback`: The name of the JSONP callback function. This parameter is required only for JSONP requests.
     * ###### Response parameters
     * Response examples:
     * JSON response:
     * `{ "province": "1", "code": "7nHS1nggx2WP613750206700RN6oiRN1" }`
     * JSONP response:
     * `callbackFunction({"province":"1","code":"7nHS3Dnkd1BS701851092400RN6oiRN1"})`
     * Retrieve the `code` from the response.
     * #### China Telecom (CT)
     * Protocol: HTTPS + application/x-www-form-urlencoded;charset=UTF-8
     * Method: GET
     * URL: https\\://id6.me/gw/preuniq.do
     * ##### Request parameters
     * Request example:
     * `?clientType=30100&appId=9390188202&format=json&sign=D63C166FA19E1996EF********09C6A5397C10B4&paramKey=1D7C25EB8B0B8B4CB3CF8DC60628F6549********786B0AF1FEF93FA1335057A35BF5F0B39A3867EAA9BE14B3898********8B01DE34965060445B6E1F66401D714650E4AB161CD6DCF4A72********3B856F22A192B8B0C39D7A55B961062E68C89C928894F119B25********7C548355FE9DB82852EB93C939F2200B48CD17&paramStr=140********95AF8E138B94754CB4CF83BA6FB********52B258BFDFD38BF233&version=1.1`
     * Parameter description:
     * - `appId`: Use `9390188202`.
     * - `clientType`: The client type. This value must match the `ClientType` input parameter for this API.
     * - `format`: Use `json` or `jsonp`.
     * - `version`: Use `1.1`.
     * - `sign`: Obtained by calling this API.
     * - `paramKey`: The ciphertext of key A. Key A is a 16-character random string generated by the client. To generate paramKey, encrypt key A using the RSA algorithm and the China Telecom public key. The padding mode is `RSA/ECB/PKCS1Padding`. Download the [China Telecom RSA public key](https://id.189.cn/source/files/API.pem).
     * - `paramStr`: The ciphertext of a parameter string. This string contains `timeStamp` (a Unix timestamp with millisecond precision, for example `1697791988302`, that corresponds to the value of the `Time` parameter of this API) and `callback` (the name of the JSONP callback function, required only when `format` is set to `jsonp`). To generate `paramStr`, encrypt the string using AES with key A. The padding mode is `AES/CBC/PKCS5Padding`, and the initialization vector is `0000000000000000`.
     * ##### Response parameters
     * Response example:
     * `callback?result=10000&msg=success&data=a35336711c70456cb883f4f224e9a259`
     * The `data` parameter contains the ciphertext of the business result. To get the result, decrypt the data value using key A, the `AES/CBC/PKCS5Padding` mode, and an initialization vector of `0000000000000000`.
     * Decrypted business result example:
     * `{"accessCode": "H5HTTPS4187AE9743AFCB14F8D99B9D65ED9E01"}`
     * Retrieve the `accessCode` from the decrypted result.
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
     * Verifies whether a name, phone number, and ID number belonged to the same user at a specific point in time.
     *
     * @remarks
     * ## Usage notes
     * - Before you use this API, ensure you understand its [pricing](https://help.aliyun.com/zh/cpns/product-overview/pricing-of-cpns).
     * - Before you use this API, log on to the Phone Number Intelligence console and apply for the required tag on the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page.
     * - You are charged for a call only when the response returns `Code=\\"OK\\"` and `IsConsistent != 0`. No charges are incurred for any other results.
     * - Verification of China Broadcasting Network numbers (numbers with the 192 prefix) is not supported. If you provide a number with the 192 prefix, an HTTP 400 error is returned.
     * - Due to number portability, the actual carrier may differ from the current carrier of record. You can use the `Carrier` parameter to route the query to a specific carrier.
     * - The queries per second (QPS) limit per user is 200. Requests that exceed this limit are throttled.
     * - In the authorization information, the action is `dytns:HistoryThreeElementsVerification`, the access level is Read, and the resource type is All Resources.
     *
     * @param request - HistoryThreeElementsVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HistoryThreeElementsVerificationResponse
     *
     * @param HistoryThreeElementsVerificationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return HistoryThreeElementsVerificationResponse
     */
    public function historyThreeElementsVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->carrier) {
            @$query['Carrier'] = $request->carrier;
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

        if (null !== $request->verificationTime) {
            @$query['VerificationTime'] = $request->verificationTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HistoryThreeElementsVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HistoryThreeElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether a name, phone number, and ID number belonged to the same user at a specific point in time.
     *
     * @remarks
     * ## Usage notes
     * - Before you use this API, ensure you understand its [pricing](https://help.aliyun.com/zh/cpns/product-overview/pricing-of-cpns).
     * - Before you use this API, log on to the Phone Number Intelligence console and apply for the required tag on the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page.
     * - You are charged for a call only when the response returns `Code=\\"OK\\"` and `IsConsistent != 0`. No charges are incurred for any other results.
     * - Verification of China Broadcasting Network numbers (numbers with the 192 prefix) is not supported. If you provide a number with the 192 prefix, an HTTP 400 error is returned.
     * - Due to number portability, the actual carrier may differ from the current carrier of record. You can use the `Carrier` parameter to route the query to a specific carrier.
     * - The queries per second (QPS) limit per user is 200. Requests that exceed this limit are throttled.
     * - In the authorization information, the action is `dytns:HistoryThreeElementsVerification`, the access level is Read, and the resource type is All Resources.
     *
     * @param request - HistoryThreeElementsVerificationRequest
     *
     * @returns HistoryThreeElementsVerificationResponse
     *
     * @param HistoryThreeElementsVerificationRequest $request
     *
     * @return HistoryThreeElementsVerificationResponse
     */
    public function historyThreeElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->historyThreeElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * Performs invalid phone number filtering operations.
     *
     * @remarks
     * Before you call this operation, log on to the Cell Phone Number Service console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, and submit the application materials. You can use this operation after the application is approved.
     * ### QPS limit
     * The QPS limit per user for this operation is 1,000 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call the operation at a reasonable frequency.
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
     * Performs invalid phone number filtering operations.
     *
     * @remarks
     * Before you call this operation, log on to the Cell Phone Number Service console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, and submit the application materials. You can use this operation after the application is approved.
     * ### QPS limit
     * The QPS limit per user for this operation is 1,000 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call the operation at a reasonable frequency.
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
     * Lists the alert contacts for Number Encyclopedia.
     *
     * @remarks
     * - Before using this API, ensure that you have activated Number Encyclopedia.
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
     * Lists the alert contacts for Number Encyclopedia.
     *
     * @remarks
     * - Before using this API, ensure that you have activated Number Encyclopedia.
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
     * Encrypts an original phone number into a virtual phone number that starts with 140. By integrating with Alibaba Cloud communication services, you can use the encrypted 140 phone number to initiate voice calls, achieving the effect of a virtual phone number call.
     *
     * @remarks
     * Before you use this API, log on to the Cell Phone Number Service console, go to the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, and fill in the application materials. You can use this API after the application is approved.
     * ### QPS limit
     * The per-user QPS limit of this API is 1,000 calls per second. If the number of API calls exceeds the limit, the calls will be throttled, which may affect your business. Call the API properly.
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
     * Encrypts an original phone number into a virtual phone number that starts with 140. By integrating with Alibaba Cloud communication services, you can use the encrypted 140 phone number to initiate voice calls, achieving the effect of a virtual phone number call.
     *
     * @remarks
     * Before you use this API, log on to the Cell Phone Number Service console, go to the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, and fill in the application materials. You can use this API after the application is approved.
     * ### QPS limit
     * The per-user QPS limit of this API is 1,000 calls per second. If the number of API calls exceeds the limit, the calls will be throttled, which may affect your business. Call the API properly.
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
     * Retrieves the real-time network status of a mobile phone number, such as active, shutdown, or non-existent. You can query numbers that are in plaintext or hashed using MD5 or SHA256.
     *
     * @remarks
     * - **Before you use this operation, make sure that you fully understand the [pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Intelligence.**
     * - By default, only an Alibaba Cloud account can call this operation. A RAM user can call this operation only after receiving the required permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * - Before you use this operation, log on to the Phone Number Intelligence console. On the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Apply**, and then submit the required information. You can use this operation once your application is approved.
     * - The phone number status query feature supports numbers from China Telecom, China Unicom, and China Mobile. This feature does not support numbers from China Broadnet. If you call this operation to query a China Broadnet number, the API returns the error code `OperatorLimit`, which indicates that the query is prohibited by the carrier.
     * ### QPS limit
     * This operation has a queries per second (QPS) limit of 300 per user. If you exceed this limit, your API calls are throttled, which may affect your services. We recommend that you call this operation at a reasonable frequency.
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
     * Retrieves the real-time network status of a mobile phone number, such as active, shutdown, or non-existent. You can query numbers that are in plaintext or hashed using MD5 or SHA256.
     *
     * @remarks
     * - **Before you use this operation, make sure that you fully understand the [pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Intelligence.**
     * - By default, only an Alibaba Cloud account can call this operation. A RAM user can call this operation only after receiving the required permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * - Before you use this operation, log on to the Phone Number Intelligence console. On the [Tag Plaza](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Apply**, and then submit the required information. You can use this operation once your application is approved.
     * - The phone number status query feature supports numbers from China Telecom, China Unicom, and China Mobile. This feature does not support numbers from China Broadnet. If you call this operation to query a China Broadnet number, the API returns the error code `OperatorLimit`, which indicates that the query is prohibited by the carrier.
     * ### QPS limit
     * This operation has a queries per second (QPS) limit of 300 per user. If you exceed this limit, your API calls are throttled, which may affect your services. We recommend that you call this operation at a reasonable frequency.
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
     * Queries the real-time status of a mobile phone number to determine whether it is in service, suspended, or non-existent. This operation supports queries for plaintext numbers or numbers encrypted with MD5 or SHA256.
     *
     * @remarks
     * - **Before you call this operation, make sure that you fully understand the [pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Intelligence.**
     * - By default, only an Alibaba Cloud account can call this operation. A RAM user must be granted the required permissions before calling this operation. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * - Before calling this operation, log on to the Phone Number Intelligence console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Apply**, and submit your application. You can use the operation after your application is approved.
     * - The number status query feature supports numbers from China Telecom, China Unicom, and China Mobile, but does not support numbers from China Broadnet. If you call this operation to query the status of a China Broadnet number, the `OperatorLimit` error code is returned, which indicates that the query is prohibited by the carrier.
     * ### QPS limit
     * The queries per second (QPS) limit for each user is 300. API calls that exceed this limit are throttled. To avoid business disruptions, plan your calls accordingly.
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
     * Queries the real-time status of a mobile phone number to determine whether it is in service, suspended, or non-existent. This operation supports queries for plaintext numbers or numbers encrypted with MD5 or SHA256.
     *
     * @remarks
     * - **Before you call this operation, make sure that you fully understand the [pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Intelligence.**
     * - By default, only an Alibaba Cloud account can call this operation. A RAM user must be granted the required permissions before calling this operation. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * - Before calling this operation, log on to the Phone Number Intelligence console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Apply**, and submit your application. You can use the operation after your application is approved.
     * - The number status query feature supports numbers from China Telecom, China Unicom, and China Mobile, but does not support numbers from China Broadnet. If you call this operation to query the status of a China Broadnet number, the `OperatorLimit` error code is returned, which indicates that the query is prohibited by the carrier.
     * ### QPS limit
     * The queries per second (QPS) limit for each user is 300. API calls that exceed this limit are throttled. To avoid business disruptions, plan your calls accordingly.
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
     * Queries the real-time status of a mobile phone number, such as normal, suspended, or not in service. This operation supports queries for phone numbers that are in plaintext or encrypted by using MD5, SHA256, or SM3.
     *
     * @remarks
     * - **Before calling this operation, ensure you fully understand the [pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Intelligence.**
     * - By default, only an Alibaba Cloud account can call this operation. To allow a RAM user to call this operation, you must first grant the required permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * - Before you call this operation, log on to the Phone Number Intelligence console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Request Activation**, and then submit your application. You can call this operation only after your application is approved.
     * - This operation supports phone numbers from China Telecom, China Unicom, and China Mobile. Numbers from China Broadnet are not supported. If you call this operation to query a China Broadnet number, the API returns the error code `OperatorLimit` and an error message indicating that the query is restricted by the carrier.
     * ### QPS limit
     * The QPS limit for this operation is 300 queries per second (QPS) per user. The system throttles calls that exceed this limit, which may affect your business. Plan your calls accordingly.
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
     * Queries the real-time status of a mobile phone number, such as normal, suspended, or not in service. This operation supports queries for phone numbers that are in plaintext or encrypted by using MD5, SHA256, or SM3.
     *
     * @remarks
     * - **Before calling this operation, ensure you fully understand the [pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Intelligence.**
     * - By default, only an Alibaba Cloud account can call this operation. To allow a RAM user to call this operation, you must first grant the required permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * - Before you call this operation, log on to the Phone Number Intelligence console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Request Activation**, and then submit your application. You can call this operation only after your application is approved.
     * - This operation supports phone numbers from China Telecom, China Unicom, and China Mobile. Numbers from China Broadnet are not supported. If you call this operation to query a China Broadnet number, the API returns the error code `OperatorLimit` and an error message indicating that the query is restricted by the carrier.
     * ### QPS limit
     * The QPS limit for this operation is 300 queries per second (QPS) per user. The system throttles calls that exceed this limit, which may affect your business. Plan your calls accordingly.
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
     * Retrieves the real-time network status of a phone number, such as active, shutdown, or non-existent. This operation supports queries for numbers in plaintext or numbers encrypted by using MD5, SHA256, or SM3.
     *
     * @remarks
     * - **Before you call this operation, make sure you understand the [Product Pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Pedia**.
     * - By default, only an Alibaba Cloud account can call this operation. A RAM user can call this operation only after being granted the required permissions. For more information, see [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/154006.html).
     * - Before calling this operation, log on to the Phone Number Pedia console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Request Activation**, and then complete the application form. You can use this operation only after your application is approved.
     * - This feature supports phone numbers from China Telecom, China Unicom, and China Mobile, but does not support phone numbers from China Broadnet. If you call this operation to query the status of a China Broadnet number, the `OperatorLimit` error code and the "The number is limited by the operator." message are returned.
     * ### QPS limit
     * This operation is limited to 300 queries per second (QPS) for each user. Calls that exceed this limit are throttled, which may affect your business. Plan your calls accordingly.
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
     * Retrieves the real-time network status of a phone number, such as active, shutdown, or non-existent. This operation supports queries for numbers in plaintext or numbers encrypted by using MD5, SHA256, or SM3.
     *
     * @remarks
     * - **Before you call this operation, make sure you understand the [Product Pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Pedia**.
     * - By default, only an Alibaba Cloud account can call this operation. A RAM user can call this operation only after being granted the required permissions. For more information, see [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/154006.html).
     * - Before calling this operation, log on to the Phone Number Pedia console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Request Activation**, and then complete the application form. You can use this operation only after your application is approved.
     * - This feature supports phone numbers from China Telecom, China Unicom, and China Mobile, but does not support phone numbers from China Broadnet. If you call this operation to query the status of a China Broadnet number, the `OperatorLimit` error code and the "The number is limited by the operator." message are returned.
     * ### QPS limit
     * This operation is limited to 300 queries per second (QPS) for each user. Calls that exceed this limit are throttled, which may affect your business. Plan your calls accordingly.
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
     * Queries the real-time network status of a mobile phone number, such as normal, shutdown, or non-existent. This operation supports queries for numbers in plaintext and numbers encrypted by using MD5, SHA256, or SM3.
     *
     * @remarks
     * - **Before you use this API, make sure that you understand the [pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Encyclopedia**.
     * - By default, only Alibaba Cloud accounts can call this API. To allow a RAM user to do so, you must grant them the required permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * - Before you use this API, log in to the Phone Number Encyclopedia console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Apply for Access**, and then complete the application form. You can call this API after your application is approved.
     * - This feature supports phone numbers from China Telecom, China Unicom, and China Mobile, but not from China Broadnet. If you query a China Broadnet number, the `OperatorLimit` error code and an error message are returned: The number is limited by the operator.
     * ### QPS limit
     * The QPS limit for a single user is 300 queries per second. If you exceed this limit, the system throttles your API calls, which may impact your business. To avoid interruptions, call this API at a reasonable rate.
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
     * Queries the real-time network status of a mobile phone number, such as normal, shutdown, or non-existent. This operation supports queries for numbers in plaintext and numbers encrypted by using MD5, SHA256, or SM3.
     *
     * @remarks
     * - **Before you use this API, make sure that you understand the [pricing](https://help.aliyun.com/document_detail/154751.html) of Phone Number Encyclopedia**.
     * - By default, only Alibaba Cloud accounts can call this API. To allow a RAM user to do so, you must grant them the required permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * - Before you use this API, log in to the Phone Number Encyclopedia console. On the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the required tag, click **Apply for Access**, and then complete the application form. You can call this API after your application is approved.
     * - This feature supports phone numbers from China Telecom, China Unicom, and China Mobile, but not from China Broadnet. If you query a China Broadnet number, the `OperatorLimit` error code and an error message are returned: The number is limited by the operator.
     * ### QPS limit
     * The QPS limit for a single user is 300 queries per second. If you exceed this limit, the system throttles your API calls, which may impact your business. To avoid interruptions, call this API at a reasonable rate.
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
     * Queries package type information.
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
     * Queries package type information.
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
     * Queries tag information.
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
     * Queries tag information.
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
     * Queries the tag list by page.
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
     * Queries the tag list by page.
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
     * Queries a list of offline tasks.
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
     * Queries a list of offline tasks.
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
     * Queries usage statistics by tag ID.
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
     * Queries usage statistics by tag ID.
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
     * Saves an alert contact.
     *
     * @remarks
     * - Before you call this operation, ensure you have activated Phone Number Intelligence.
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
     * Saves an alert contact.
     *
     * @remarks
     * - Before you call this operation, ensure you have activated Phone Number Intelligence.
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
     * Verification of three elements (name, mobile phone number, and ID card number). Used to verify whether the name, mobile phone number, and ID card number entered by a user belong to the same user.
     *
     * @remarks
     * - Before you call this API, make sure that you have fully understood the [pricing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * - Before you call this API, log on to the Cell Phone Number Service console, go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, fill in the application materials, and call the API after the application is approved.
     * - Billing applies when the API returns Code=\\"OK\\" and IsConsistent != 2. Other return results are not billed.
     * - The verification of virtual carrier numbers is not supported. Virtual carrier numbers refer to numbers that start with 170, 171, 162, or 165.
     * ### QPS limit
     * The QPS limit per user for this API is 200 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call the API in a reasonable manner.
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
     * Verification of three elements (name, mobile phone number, and ID card number). Used to verify whether the name, mobile phone number, and ID card number entered by a user belong to the same user.
     *
     * @remarks
     * - Before you call this API, make sure that you have fully understood the [pricing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * - Before you call this API, log on to the Cell Phone Number Service console, go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply for Activation**, fill in the application materials, and call the API after the application is approved.
     * - Billing applies when the API returns Code=\\"OK\\" and IsConsistent != 2. Other return results are not billed.
     * - The verification of virtual carrier numbers is not supported. Virtual carrier numbers refer to numbers that start with 170, 171, 162, or 165.
     * ### QPS limit
     * The QPS limit per user for this API is 200 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call the API in a reasonable manner.
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
     * Two-element (name and phone number) verification. Used to compare whether the name and phone number entered by the user belong to the same user.
     *
     * @remarks
     * - Before using this API, ensure that you fully understand the [product pricing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * - Before using this API, log on to the Cell Phone Number Service console, go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply to Enable**, fill in the application materials, and use it after the approval.
     * - Billing is applied when the API returns Code="OK" and IsConsistent != 2. Other return results are not billed.
     * - MVNO number verification is not supported. MVNO numbers refer to numbers starting with 170, 171, 162, and 165.
     * ### QPS limit
     * The per-user QPS limit of this API is 200 times/second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the API reasonably.
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
     * Two-element (name and phone number) verification. Used to compare whether the name and phone number entered by the user belong to the same user.
     *
     * @remarks
     * - Before using this API, ensure that you fully understand the [product pricing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * - Before using this API, log on to the Cell Phone Number Service console, go to the [Tag Square](https://dytns.console.aliyun.com/analysis/square) page, find the corresponding tag, click **Apply to Enable**, fill in the application materials, and use it after the approval.
     * - Billing is applied when the API returns Code="OK" and IsConsistent != 2. Other return results are not billed.
     * - MVNO number verification is not supported. MVNO numbers refer to numbers starting with 170, 171, 162, and 165.
     * ### QPS limit
     * The per-user QPS limit of this API is 200 times/second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the API reasonably.
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
     * Obtains a UAID based on the carrier authorization token.
     * For information about how to obtain the authorization token and its signature, see the GetUAIDApplyTokenSign API documentation.
     * A UAID is 64 characters in length. The first 32 characters describe the device information, and the last 32 characters describe the phone number information.
     *
     * @remarks
     * Before you call this API, make sure that you have fully understood the billing method and [pricing](https://www.aliyun.com/price/product#/dytns/detail/dytns_penqbag_public_cn) of Cell Phone Number Service.
     * Obtains a UAID based on the carrier authorization token.
     * For information about how to obtain the authorization token and its signature, see the GetUAIDApplyTokenSign API documentation.
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
     * Obtains a UAID based on the carrier authorization token.
     * For information about how to obtain the authorization token and its signature, see the GetUAIDApplyTokenSign API documentation.
     * A UAID is 64 characters in length. The first 32 characters describe the device information, and the last 32 characters describe the phone number information.
     *
     * @remarks
     * Before you call this API, make sure that you have fully understood the billing method and [pricing](https://www.aliyun.com/price/product#/dytns/detail/dytns_penqbag_public_cn) of Cell Phone Number Service.
     * Obtains a UAID based on the carrier authorization token.
     * For information about how to obtain the authorization token and its signature, see the GetUAIDApplyTokenSign API documentation.
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
     * Updates an alert contact.
     *
     * @remarks
     * - Ensure that you have activated the Phone Number Information Service before calling this operation.
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
     * Updates an alert contact.
     *
     * @remarks
     * - Ensure that you have activated the Phone Number Information Service before calling this operation.
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

    /**
     * 虚商三要素.
     *
     * @param request - VirtualThreeElementsVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VirtualThreeElementsVerificationResponse
     *
     * @param VirtualThreeElementsVerificationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return VirtualThreeElementsVerificationResponse
     */
    public function virtualThreeElementsVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->certCode) {
            @$query['CertCode'] = $request->certCode;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
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
            'action' => 'VirtualThreeElementsVerification',
            'version' => '2020-02-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VirtualThreeElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 虚商三要素.
     *
     * @param request - VirtualThreeElementsVerificationRequest
     *
     * @returns VirtualThreeElementsVerificationResponse
     *
     * @param VirtualThreeElementsVerificationRequest $request
     *
     * @return VirtualThreeElementsVerificationResponse
     */
    public function virtualThreeElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->virtualThreeElementsVerificationWithOptions($request, $runtime);
    }
}
