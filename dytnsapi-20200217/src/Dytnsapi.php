<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CertNoTwoElementVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CertNoTwoElementVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyThreeElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyThreeElementsVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyTwoElementsVerificationRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyTwoElementsVerificationResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeEmptyNumberRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeEmptyNumberResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisAIRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisAIResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisTransparentRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisTransparentResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeResponse;
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
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVirtualRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVirtualResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVoiceRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVoiceResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryAvailableAuthCodeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryAvailableAuthCodeResponse;
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
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryUsageStatisticsByTagIdRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryUsageStatisticsByTagIdResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 身份证二要素认证
     *  *
     * @param CertNoTwoElementVerificationRequest $request CertNoTwoElementVerificationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CertNoTwoElementVerificationResponse CertNoTwoElementVerificationResponse
     */
    public function certNoTwoElementVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certNo)) {
            $query['CertNo'] = $request->certNo;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CertNoTwoElementVerification',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CertNoTwoElementVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 身份证二要素认证
     *  *
     * @param CertNoTwoElementVerificationRequest $request CertNoTwoElementVerificationRequest
     *
     * @return CertNoTwoElementVerificationResponse CertNoTwoElementVerificationResponse
     */
    public function certNoTwoElementVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certNoTwoElementVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies whether the enterprise name, the business license number, and the name and ID card of the legal representative belong to the same enterprise. The verification is successful only when the preceding four elements belong to the same enterprise and the business status of the enterprise is Active.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of services related to four-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0, 1, or 2.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *  *
     * @param CompanyFourElementsVerificationRequest $request CompanyFourElementsVerificationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CompanyFourElementsVerificationResponse CompanyFourElementsVerificationResponse
     */
    public function companyFourElementsVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->epCertName)) {
            $query['EpCertName'] = $request->epCertName;
        }
        if (!Utils::isUnset($request->epCertNo)) {
            $query['EpCertNo'] = $request->epCertNo;
        }
        if (!Utils::isUnset($request->legalPersonCertName)) {
            $query['LegalPersonCertName'] = $request->legalPersonCertName;
        }
        if (!Utils::isUnset($request->legalPersonCertNo)) {
            $query['LegalPersonCertNo'] = $request->legalPersonCertNo;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyFourElementsVerification',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyFourElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies whether the enterprise name, the business license number, and the name and ID card of the legal representative belong to the same enterprise. The verification is successful only when the preceding four elements belong to the same enterprise and the business status of the enterprise is Active.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of services related to four-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0, 1, or 2.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *  *
     * @param CompanyFourElementsVerificationRequest $request CompanyFourElementsVerificationRequest
     *
     * @return CompanyFourElementsVerificationResponse CompanyFourElementsVerificationResponse
     */
    public function companyFourElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyFourElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies whether the enterprise name, the business license number, and the name of the legal representative belong to the same enterprise. The verification is successful only when the three elements belong to the same enterprise and the business status of the enterprise is Active.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of services related to three-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0, 1, or 2.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *  *
     * @param CompanyThreeElementsVerificationRequest $request CompanyThreeElementsVerificationRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CompanyThreeElementsVerificationResponse CompanyThreeElementsVerificationResponse
     */
    public function companyThreeElementsVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->epCertName)) {
            $query['EpCertName'] = $request->epCertName;
        }
        if (!Utils::isUnset($request->epCertNo)) {
            $query['EpCertNo'] = $request->epCertNo;
        }
        if (!Utils::isUnset($request->legalPersonCertName)) {
            $query['LegalPersonCertName'] = $request->legalPersonCertName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyThreeElementsVerification',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyThreeElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies whether the enterprise name, the business license number, and the name of the legal representative belong to the same enterprise. The verification is successful only when the three elements belong to the same enterprise and the business status of the enterprise is Active.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of services related to three-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0, 1, or 2.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *  *
     * @param CompanyThreeElementsVerificationRequest $request CompanyThreeElementsVerificationRequest
     *
     * @return CompanyThreeElementsVerificationResponse CompanyThreeElementsVerificationResponse
     */
    public function companyThreeElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyThreeElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies whether the enterprise name and the business license number belong to the same enterprise. The verification is successful only when the two elements belong to the same enterprise and the business status of the enterprise is Active.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of services related to two-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0 or 1.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *  *
     * @param CompanyTwoElementsVerificationRequest $request CompanyTwoElementsVerificationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CompanyTwoElementsVerificationResponse CompanyTwoElementsVerificationResponse
     */
    public function companyTwoElementsVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->epCertName)) {
            $query['EpCertName'] = $request->epCertName;
        }
        if (!Utils::isUnset($request->epCertNo)) {
            $query['EpCertNo'] = $request->epCertNo;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyTwoElementsVerification',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyTwoElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies whether the enterprise name and the business license number belong to the same enterprise. The verification is successful only when the two elements belong to the same enterprise and the business status of the enterprise is Active.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of services related to two-element verification for enterprises. For more information, see [Billing](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4).
     * *   You are charged only if the value of VerifyResult is true or false and the value of ReasonCode is 0 or 1.
     * *   Before you call this operation, perform the following operations: Log on to the [Cell Phone Number Service console](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC\\&lang=zh). On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *  *
     * @param CompanyTwoElementsVerificationRequest $request CompanyTwoElementsVerificationRequest
     *
     * @return CompanyTwoElementsVerificationResponse CompanyTwoElementsVerificationResponse
     */
    public function companyTwoElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyTwoElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary Predicts whether a phone number is a nonexistent number by using AI algorithms.
     *  *
     * @description *   You can call this operation to verify whether a phone number is a nonexistent number. When you call this operation to verify a number, the system charges you CNY 0.01 per verification based on the number of verifications. **Before you call this operation, make sure that you are familiar with the billing of Cell Phone Number Service.**
     * *   You are charged only if the value of Code is OK and the value of Status is not UNKNOWN.
     * *   The prediction is not strictly accurate because Cell Phone Number Service predicts the nonexistent number probability by using AI algorithms. The accuracy rate of the prediction and the recall rate of empty numbers are about 95%. **Pay attention to this point when you call this operation**.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#)Authorization information
     * By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     *  *
     * @param DescribeEmptyNumberRequest $request DescribeEmptyNumberRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEmptyNumberResponse DescribeEmptyNumberResponse
     */
    public function describeEmptyNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEmptyNumber',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEmptyNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Predicts whether a phone number is a nonexistent number by using AI algorithms.
     *  *
     * @description *   You can call this operation to verify whether a phone number is a nonexistent number. When you call this operation to verify a number, the system charges you CNY 0.01 per verification based on the number of verifications. **Before you call this operation, make sure that you are familiar with the billing of Cell Phone Number Service.**
     * *   You are charged only if the value of Code is OK and the value of Status is not UNKNOWN.
     * *   The prediction is not strictly accurate because Cell Phone Number Service predicts the nonexistent number probability by using AI algorithms. The accuracy rate of the prediction and the recall rate of empty numbers are about 95%. **Pay attention to this point when you call this operation**.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#)Authorization information
     * By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     *  *
     * @param DescribeEmptyNumberRequest $request DescribeEmptyNumberRequest
     *
     * @return DescribeEmptyNumberResponse DescribeEmptyNumberResponse
     */
    public function describeEmptyNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmptyNumberWithOptions($request, $runtime);
    }

    /**
     * @summary 号码分析实时查询蚂蚁
     *  *
     * @param DescribePhoneNumberAnalysisRequest $request DescribePhoneNumberAnalysisRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePhoneNumberAnalysisResponse DescribePhoneNumberAnalysisResponse
     */
    public function describePhoneNumberAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->numberType)) {
            $query['NumberType'] = $request->numberType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rate)) {
            $query['Rate'] = $request->rate;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberAnalysis',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 号码分析实时查询蚂蚁
     *  *
     * @param DescribePhoneNumberAnalysisRequest $request DescribePhoneNumberAnalysisRequest
     *
     * @return DescribePhoneNumberAnalysisResponse DescribePhoneNumberAnalysisResponse
     */
    public function describePhoneNumberAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the analysis results of a phone number.
     *  *
     * @description Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the Labels page, find the label that you want to use, click Activate Now, enter the required information, and then submit your application. After your application is approved, you can use the label. Before you call this operation, make sure that you are familiar with the billing of Cell Phone Number Service.
     *  *
     * @param DescribePhoneNumberAnalysisAIRequest $request DescribePhoneNumberAnalysisAIRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePhoneNumberAnalysisAIResponse DescribePhoneNumberAnalysisAIResponse
     */
    public function describePhoneNumberAnalysisAIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->modelConfig)) {
            $query['ModelConfig'] = $request->modelConfig;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rate)) {
            $query['Rate'] = $request->rate;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberAnalysisAI',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberAnalysisAIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the analysis results of a phone number.
     *  *
     * @description Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the Labels page, find the label that you want to use, click Activate Now, enter the required information, and then submit your application. After your application is approved, you can use the label. Before you call this operation, make sure that you are familiar with the billing of Cell Phone Number Service.
     *  *
     * @param DescribePhoneNumberAnalysisAIRequest $request DescribePhoneNumberAnalysisAIRequest
     *
     * @return DescribePhoneNumberAnalysisAIResponse DescribePhoneNumberAnalysisAIResponse
     */
    public function describePhoneNumberAnalysisAI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAnalysisAIWithOptions($request, $runtime);
    }

    /**
     * @summary 泛行业人群筛选
     *  *
     * @param DescribePhoneNumberAnalysisTransparentRequest $request DescribePhoneNumberAnalysisTransparentRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePhoneNumberAnalysisTransparentResponse DescribePhoneNumberAnalysisTransparentResponse
     */
    public function describePhoneNumberAnalysisTransparentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->numberType)) {
            $query['NumberType'] = $request->numberType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberAnalysisTransparent',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberAnalysisTransparentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 泛行业人群筛选
     *  *
     * @param DescribePhoneNumberAnalysisTransparentRequest $request DescribePhoneNumberAnalysisTransparentRequest
     *
     * @return DescribePhoneNumberAnalysisTransparentResponse DescribePhoneNumberAnalysisTransparentResponse
     */
    public function describePhoneNumberAnalysisTransparent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAnalysisTransparentWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI DescribePhoneNumberAttribute is deprecated, please use Dytnsapi::2020-02-17::DescribePhoneNumberOperatorAttribute instead
     *  *
     * @summary Queries the carrier, registration location, and mobile number portability information of a phone number.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 2,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * Deprecated
     *
     * @param DescribePhoneNumberAttributeRequest $request DescribePhoneNumberAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePhoneNumberAttributeResponse DescribePhoneNumberAttributeResponse
     */
    public function describePhoneNumberAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberAttribute',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI DescribePhoneNumberAttribute is deprecated, please use Dytnsapi::2020-02-17::DescribePhoneNumberOperatorAttribute instead
     *  *
     * @summary Queries the carrier, registration location, and mobile number portability information of a phone number.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 2,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * Deprecated
     *
     * @param DescribePhoneNumberAttributeRequest $request DescribePhoneNumberAttributeRequest
     *
     * @return DescribePhoneNumberAttributeResponse DescribePhoneNumberAttributeResponse
     */
    public function describePhoneNumberAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage period of a phone number of a user.
     *  *
     * @description *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePhoneNumberOnlineTimeRequest $request DescribePhoneNumberOnlineTimeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePhoneNumberOnlineTimeResponse DescribePhoneNumberOnlineTimeResponse
     */
    public function describePhoneNumberOnlineTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberOnlineTime',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberOnlineTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage period of a phone number of a user.
     *  *
     * @description *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePhoneNumberOnlineTimeRequest $request DescribePhoneNumberOnlineTimeRequest
     *
     * @return DescribePhoneNumberOnlineTimeResponse DescribePhoneNumberOnlineTimeResponse
     */
    public function describePhoneNumberOnlineTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberOnlineTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attribute information about a phone number, including the registration province, registration city, basic carrier (such as China Mobile, China Unicom, China Telecom, or China Broadnet), reseller of mobile communications services (such as Alibaba Communications), mobile number portability, and the number segment to which the phone number belongs.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154008.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   You can call this operation to obtain the carrier, registration location, and mobile number portability information about a phone number. You can query phone numbers in **plaintext** and phone numbers that are encrypted by using **MD5** and **SHA256**.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *  *
     * @param DescribePhoneNumberOperatorAttributeRequest $request DescribePhoneNumberOperatorAttributeRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePhoneNumberOperatorAttributeResponse DescribePhoneNumberOperatorAttributeResponse
     */
    public function describePhoneNumberOperatorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->flowName)) {
            $query['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resultCount)) {
            $query['ResultCount'] = $request->resultCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberOperatorAttribute',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberOperatorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attribute information about a phone number, including the registration province, registration city, basic carrier (such as China Mobile, China Unicom, China Telecom, or China Broadnet), reseller of mobile communications services (such as Alibaba Communications), mobile number portability, and the number segment to which the phone number belongs.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154008.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   You can call this operation to obtain the carrier, registration location, and mobile number portability information about a phone number. You can query phone numbers in **plaintext** and phone numbers that are encrypted by using **MD5** and **SHA256**.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     *  *
     * @param DescribePhoneNumberOperatorAttributeRequest $request DescribePhoneNumberOperatorAttributeRequest
     *
     * @return DescribePhoneNumberOperatorAttributeResponse DescribePhoneNumberOperatorAttributeResponse
     */
    public function describePhoneNumberOperatorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberOperatorAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 风险用户评分
     *  *
     * @param DescribePhoneNumberRiskRequest $request DescribePhoneNumberRiskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePhoneNumberRiskResponse DescribePhoneNumberRiskResponse
     */
    public function describePhoneNumberRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberRisk',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 风险用户评分
     *  *
     * @param DescribePhoneNumberRiskRequest $request DescribePhoneNumberRiskRequest
     *
     * @return DescribePhoneNumberRiskResponse DescribePhoneNumberRiskResponse
     */
    public function describePhoneNumberRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberRiskWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies whether a phone number is a reassigned phone number by calling this operation.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   You are charged for phone number verifications only if the value of Code is OK and the value of VerifyResult is not 0.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ## [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ## [](#)Authorization information
     * By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     *  *
     * @param DescribePhoneTwiceTelVerifyRequest $request DescribePhoneTwiceTelVerifyRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePhoneTwiceTelVerifyResponse DescribePhoneTwiceTelVerifyResponse
     */
    public function describePhoneTwiceTelVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneTwiceTelVerify',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneTwiceTelVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies whether a phone number is a reassigned phone number by calling this operation.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   You are charged for phone number verifications only if the value of Code is OK and the value of VerifyResult is not 0.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ## [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ## [](#)Authorization information
     * By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     *  *
     * @param DescribePhoneTwiceTelVerifyRequest $request DescribePhoneTwiceTelVerifyRequest
     *
     * @return DescribePhoneTwiceTelVerifyResponse DescribePhoneTwiceTelVerifyResponse
     */
    public function describePhoneTwiceTelVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneTwiceTelVerifyWithOptions($request, $runtime);
    }

    /**
     * @summary 获取UAID申请Token所需的签名字段
     *  *
     * @param GetUAIDApplyTokenSignRequest $request GetUAIDApplyTokenSignRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUAIDApplyTokenSignResponse GetUAIDApplyTokenSignResponse
     */
    public function getUAIDApplyTokenSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->format)) {
            $query['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->paramKey)) {
            $query['ParamKey'] = $request->paramKey;
        }
        if (!Utils::isUnset($request->paramStr)) {
            $query['ParamStr'] = $request->paramStr;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUAIDApplyTokenSign',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUAIDApplyTokenSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取UAID申请Token所需的签名字段
     *  *
     * @param GetUAIDApplyTokenSignRequest $request GetUAIDApplyTokenSignRequest
     *
     * @return GetUAIDApplyTokenSignResponse GetUAIDApplyTokenSignResponse
     */
    public function getUAIDApplyTokenSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUAIDApplyTokenSignWithOptions($request, $runtime);
    }

    /**
     * @summary 获取号码采集服务申请Token所需的签名字段
     *  *
     * @param GetUAIDConversionSignRequest $request GetUAIDConversionSignRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUAIDConversionSignResponse GetUAIDConversionSignResponse
     */
    public function getUAIDConversionSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->format)) {
            $query['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->paramKey)) {
            $query['ParamKey'] = $request->paramKey;
        }
        if (!Utils::isUnset($request->paramStr)) {
            $query['ParamStr'] = $request->paramStr;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUAIDConversionSign',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUAIDConversionSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取号码采集服务申请Token所需的签名字段
     *  *
     * @param GetUAIDConversionSignRequest $request GetUAIDConversionSignRequest
     *
     * @return GetUAIDConversionSignResponse GetUAIDConversionSignResponse
     */
    public function getUAIDConversionSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUAIDConversionSignWithOptions($request, $runtime);
    }

    /**
     * @summary Filters invalid phone numbers.
     *  *
     * @description Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param InvalidPhoneNumberFilterRequest $request InvalidPhoneNumberFilterRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return InvalidPhoneNumberFilterResponse InvalidPhoneNumberFilterResponse
     */
    public function invalidPhoneNumberFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvalidPhoneNumberFilter',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvalidPhoneNumberFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Filters invalid phone numbers.
     *  *
     * @description Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param InvalidPhoneNumberFilterRequest $request InvalidPhoneNumberFilterRequest
     *
     * @return InvalidPhoneNumberFilterResponse InvalidPhoneNumberFilterResponse
     */
    public function invalidPhoneNumberFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invalidPhoneNumberFilterWithOptions($request, $runtime);
    }

    /**
     * @param PhoneNumberConvertServiceRequest $request PhoneNumberConvertServiceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return PhoneNumberConvertServiceResponse PhoneNumberConvertServiceResponse
     */
    public function phoneNumberConvertServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhoneNumberConvertService',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhoneNumberConvertServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PhoneNumberConvertServiceRequest $request PhoneNumberConvertServiceRequest
     *
     * @return PhoneNumberConvertServiceResponse PhoneNumberConvertServiceResponse
     */
    public function phoneNumberConvertService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberConvertServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Encrypts the original phone number into a virtual number that starts with 140. Cell Phone Number Service integrates the communications services provided by Alibaba Cloud. This allows you to initiate a call by using a virtual number that starts with 140.
     *  *
     * @description Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberEncryptRequest $request PhoneNumberEncryptRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PhoneNumberEncryptResponse PhoneNumberEncryptResponse
     */
    public function phoneNumberEncryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhoneNumberEncrypt',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhoneNumberEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Encrypts the original phone number into a virtual number that starts with 140. Cell Phone Number Service integrates the communications services provided by Alibaba Cloud. This allows you to initiate a call by using a virtual number that starts with 140.
     *  *
     * @description Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberEncryptRequest $request PhoneNumberEncryptRequest
     *
     * @return PhoneNumberEncryptResponse PhoneNumberEncryptResponse
     */
    public function phoneNumberEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberEncryptWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForAccountRequest $request PhoneNumberStatusForAccountRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return PhoneNumberStatusForAccountResponse PhoneNumberStatusForAccountResponse
     */
    public function phoneNumberStatusForAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhoneNumberStatusForAccount',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhoneNumberStatusForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForAccountRequest $request PhoneNumberStatusForAccountRequest
     *
     * @return PhoneNumberStatusForAccountResponse PhoneNumberStatusForAccountResponse
     */
    public function phoneNumberStatusForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForPublicRequest $request PhoneNumberStatusForPublicRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return PhoneNumberStatusForPublicResponse PhoneNumberStatusForPublicResponse
     */
    public function phoneNumberStatusForPublicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhoneNumberStatusForPublic',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhoneNumberStatusForPublicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForPublicRequest $request PhoneNumberStatusForPublicRequest
     *
     * @return PhoneNumberStatusForPublicResponse PhoneNumberStatusForPublicResponse
     */
    public function phoneNumberStatusForPublic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForPublicWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForRealRequest $request PhoneNumberStatusForRealRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return PhoneNumberStatusForRealResponse PhoneNumberStatusForRealResponse
     */
    public function phoneNumberStatusForRealWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhoneNumberStatusForReal',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhoneNumberStatusForRealResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForRealRequest $request PhoneNumberStatusForRealRequest
     *
     * @return PhoneNumberStatusForRealResponse PhoneNumberStatusForRealResponse
     */
    public function phoneNumberStatusForReal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForRealWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForSmsRequest $request PhoneNumberStatusForSmsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return PhoneNumberStatusForSmsResponse PhoneNumberStatusForSmsResponse
     */
    public function phoneNumberStatusForSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhoneNumberStatusForSms',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhoneNumberStatusForSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForSmsRequest $request PhoneNumberStatusForSmsRequest
     *
     * @return PhoneNumberStatusForSmsResponse PhoneNumberStatusForSmsResponse
     */
    public function phoneNumberStatusForSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForSmsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a virtual phone number. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   You are charged only if the value of Code is OK and the value of IsPrivacyNumber is true or false.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForVirtualRequest $request PhoneNumberStatusForVirtualRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return PhoneNumberStatusForVirtualResponse PhoneNumberStatusForVirtualResponse
     */
    public function phoneNumberStatusForVirtualWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhoneNumberStatusForVirtual',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhoneNumberStatusForVirtualResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a virtual phone number. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   You are charged only if the value of Code is OK and the value of IsPrivacyNumber is true or false.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForVirtualRequest $request PhoneNumberStatusForVirtualRequest
     *
     * @return PhoneNumberStatusForVirtualResponse PhoneNumberStatusForVirtualResponse
     */
    public function phoneNumberStatusForVirtual($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForVirtualWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForVoiceRequest $request PhoneNumberStatusForVoiceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return PhoneNumberStatusForVoiceResponse PhoneNumberStatusForVoiceResponse
     */
    public function phoneNumberStatusForVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhoneNumberStatusForVoice',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhoneNumberStatusForVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the real-time service state of a phone number. The state includes NORMAL, SHUTDOWN, and NOT_EXIST. You can choose an encryption method for your phone number query, including plaintext, MD5, and SHA256.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   By default, only Alibaba Cloud accounts can call this operation. RAM users can call this operation only after the RAM users are granted the related permissions. For more information, see [Grant permissions to RAM users](https://help.aliyun.com/document_detail/154006.html).
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * ### [](#qps)QPS limits
     * You can call this operation up to 300 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PhoneNumberStatusForVoiceRequest $request PhoneNumberStatusForVoiceRequest
     *
     * @return PhoneNumberStatusForVoiceResponse PhoneNumberStatusForVoiceResponse
     */
    public function phoneNumberStatusForVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForVoiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available authorization codes.
     *  *
     * @param QueryAvailableAuthCodeRequest $request QueryAvailableAuthCodeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAvailableAuthCodeResponse QueryAvailableAuthCodeResponse
     */
    public function queryAvailableAuthCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAvailableAuthCode',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAvailableAuthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available authorization codes.
     *  *
     * @param QueryAvailableAuthCodeRequest $request QueryAvailableAuthCodeRequest
     *
     * @return QueryAvailableAuthCodeResponse QueryAvailableAuthCodeResponse
     */
    public function queryAvailableAuthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvailableAuthCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 在网时长专用接口
     *  *
     * @param QueryPhoneNumberOnlineTimeRequest $request QueryPhoneNumberOnlineTimeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPhoneNumberOnlineTimeResponse QueryPhoneNumberOnlineTimeResponse
     */
    public function queryPhoneNumberOnlineTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPhoneNumberOnlineTime',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPhoneNumberOnlineTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在网时长专用接口
     *  *
     * @param QueryPhoneNumberOnlineTimeRequest $request QueryPhoneNumberOnlineTimeRequest
     *
     * @return QueryPhoneNumberOnlineTimeResponse QueryPhoneNumberOnlineTimeResponse
     */
    public function queryPhoneNumberOnlineTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneNumberOnlineTimeWithOptions($request, $runtime);
    }

    /**
     * @summary 二次号携号转网号码查询
     *  *
     * @param QueryPhoneTwiceTelVerifyRequest $request QueryPhoneTwiceTelVerifyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPhoneTwiceTelVerifyResponse QueryPhoneTwiceTelVerifyResponse
     */
    public function queryPhoneTwiceTelVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPhoneTwiceTelVerify',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPhoneTwiceTelVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 二次号携号转网号码查询
     *  *
     * @param QueryPhoneTwiceTelVerifyRequest $request QueryPhoneTwiceTelVerifyRequest
     *
     * @return QueryPhoneTwiceTelVerifyResponse QueryPhoneTwiceTelVerifyResponse
     */
    public function queryPhoneTwiceTelVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneTwiceTelVerifyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tag application rules.
     *  *
     * @param QueryTagApplyRuleRequest $request QueryTagApplyRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTagApplyRuleResponse QueryTagApplyRuleResponse
     */
    public function queryTagApplyRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTagApplyRule',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTagApplyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries tag application rules.
     *  *
     * @param QueryTagApplyRuleRequest $request QueryTagApplyRuleRequest
     *
     * @return QueryTagApplyRuleResponse QueryTagApplyRuleResponse
     */
    public function queryTagApplyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagApplyRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about tags.
     *  *
     * @param QueryTagInfoBySelectionRequest $request QueryTagInfoBySelectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTagInfoBySelectionResponse QueryTagInfoBySelectionResponse
     */
    public function queryTagInfoBySelectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->industryId)) {
            $query['IndustryId'] = $request->industryId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTagInfoBySelection',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTagInfoBySelectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about tags.
     *  *
     * @param QueryTagInfoBySelectionRequest $request QueryTagInfoBySelectionRequest
     *
     * @return QueryTagInfoBySelectionResponse QueryTagInfoBySelectionResponse
     */
    public function queryTagInfoBySelection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagInfoBySelectionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tags by page.
     *  *
     * @param QueryTagListPageRequest $request QueryTagListPageRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTagListPageResponse QueryTagListPageResponse
     */
    public function queryTagListPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTagListPage',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTagListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of tags by page.
     *  *
     * @param QueryTagListPageRequest $request QueryTagListPageRequest
     *
     * @return QueryTagListPageResponse QueryTagListPageResponse
     */
    public function queryTagListPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagListPageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage statistics based on tag IDs.
     *  *
     * @param QueryUsageStatisticsByTagIdRequest $request QueryUsageStatisticsByTagIdRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUsageStatisticsByTagIdResponse QueryUsageStatisticsByTagIdResponse
     */
    public function queryUsageStatisticsByTagIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUsageStatisticsByTagId',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUsageStatisticsByTagIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage statistics based on tag IDs.
     *  *
     * @param QueryUsageStatisticsByTagIdRequest $request QueryUsageStatisticsByTagIdRequest
     *
     * @return QueryUsageStatisticsByTagIdResponse QueryUsageStatisticsByTagIdResponse
     */
    public function queryUsageStatisticsByTagId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUsageStatisticsByTagIdWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies whether the name, phone number, and ID card number entered by a user belong to the same user.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   You are charged only if the value of Code is OK and the value of IsConsistent is not 2.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ThreeElementsVerificationRequest $request ThreeElementsVerificationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ThreeElementsVerificationResponse ThreeElementsVerificationResponse
     */
    public function threeElementsVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->certCode)) {
            $query['CertCode'] = $request->certCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ThreeElementsVerification',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ThreeElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies whether the name, phone number, and ID card number entered by a user belong to the same user.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   You are charged only if the value of Code is OK and the value of IsConsistent is not 2.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ThreeElementsVerificationRequest $request ThreeElementsVerificationRequest
     *
     * @return ThreeElementsVerificationResponse ThreeElementsVerificationResponse
     */
    public function threeElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->threeElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies whether the name and phone number entered by a user belong to the same user.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   You are charged only if the value of Code is OK and the value of IsConsistent is not 2.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param TwoElementsVerificationRequest $request TwoElementsVerificationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return TwoElementsVerificationResponse TwoElementsVerificationResponse
     */
    public function twoElementsVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TwoElementsVerification',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TwoElementsVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies whether the name and phone number entered by a user belong to the same user.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/154751.html) of Cell Phone Number Service.
     * *   Before you call this operation, perform the following operations: Log on to the Cell Phone Number Service console. On the [Labels](https://dytns.console.aliyun.com/analysis/square) page, find the label that you want to use, click **Activate Now**, enter the required information, and then submit your application. After your application is approved, you can use the label.
     * *   You are charged only if the value of Code is OK and the value of IsConsistent is not 2.
     * ### [](#qps)QPS limits
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param TwoElementsVerificationRequest $request TwoElementsVerificationRequest
     *
     * @return TwoElementsVerificationResponse TwoElementsVerificationResponse
     */
    public function twoElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->twoElementsVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary UAID采集
     *  *
     * @param UAIDCollectionRequest $request UAIDCollectionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UAIDCollectionResponse UAIDCollectionResponse
     */
    public function uAIDCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->userGrantId)) {
            $query['UserGrantId'] = $request->userGrantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UAIDCollection',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UAIDCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary UAID采集
     *  *
     * @param UAIDCollectionRequest $request UAIDCollectionRequest
     *
     * @return UAIDCollectionResponse UAIDCollectionResponse
     */
    public function uAIDCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uAIDCollectionWithOptions($request, $runtime);
    }

    /**
     * @summary uaid号码转换服务
     *  *
     * @param UAIDConversionRequest $request UAIDConversionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UAIDConversionResponse UAIDConversionResponse
     */
    public function uAIDConversionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->uaidList)) {
            $query['UaidList'] = $request->uaidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UAIDConversion',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UAIDConversionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary uaid号码转换服务
     *  *
     * @param UAIDConversionRequest $request UAIDConversionRequest
     *
     * @return UAIDConversionResponse UAIDConversionResponse
     */
    public function uAIDConversion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uAIDConversionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取UAID
     *  *
     * @param UAIDVerificationRequest $request UAIDVerificationRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UAIDVerificationResponse UAIDVerificationResponse
     */
    public function uAIDVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->userGrantId)) {
            $query['UserGrantId'] = $request->userGrantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UAIDVerification',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UAIDVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取UAID
     *  *
     * @param UAIDVerificationRequest $request UAIDVerificationRequest
     *
     * @return UAIDVerificationResponse UAIDVerificationResponse
     */
    public function uAIDVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uAIDVerificationWithOptions($request, $runtime);
    }
}
