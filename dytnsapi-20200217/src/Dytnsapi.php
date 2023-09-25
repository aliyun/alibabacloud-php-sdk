<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneTwiceTelVerifyRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneTwiceTelVerifyResponse;
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
     * @param CompanyFourElementsVerificationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CompanyFourElementsVerificationResponse
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
     * @param CompanyThreeElementsVerificationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CompanyThreeElementsVerificationResponse
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
     * @param CompanyTwoElementsVerificationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CompanyTwoElementsVerificationResponse
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
     * @param DescribeEmptyNumberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEmptyNumberResponse
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
     * @param DescribePhoneNumberAnalysisRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePhoneNumberAnalysisResponse
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
     * @param DescribePhoneNumberAnalysisAIRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePhoneNumberAnalysisAIResponse
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
     * @param DescribePhoneNumberAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePhoneNumberAttributeResponse
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
     * @param DescribePhoneNumberOnlineTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePhoneNumberOnlineTimeResponse
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
     * @param DescribePhoneNumberOperatorAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribePhoneNumberOperatorAttributeResponse
     */
    public function describePhoneNumberOperatorAttributeWithOptions($request, $runtime)
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
     * @param DescribePhoneTwiceTelVerifyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePhoneTwiceTelVerifyResponse
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
     * @param InvalidPhoneNumberFilterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InvalidPhoneNumberFilterResponse
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
     * @param PhoneNumberConvertServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PhoneNumberConvertServiceResponse
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
     * @param PhoneNumberEncryptRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PhoneNumberEncryptResponse
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
     * @param PhoneNumberStatusForAccountRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PhoneNumberStatusForAccountResponse
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
     * @param PhoneNumberStatusForPublicRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PhoneNumberStatusForPublicResponse
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
     * @param PhoneNumberStatusForRealRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return PhoneNumberStatusForRealResponse
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
     * @param PhoneNumberStatusForSmsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return PhoneNumberStatusForSmsResponse
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
     * @param PhoneNumberStatusForVirtualRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PhoneNumberStatusForVirtualResponse
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
     * @param PhoneNumberStatusForVirtualRequest $request
     *
     * @return PhoneNumberStatusForVirtualResponse
     */
    public function phoneNumberStatusForVirtual($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->phoneNumberStatusForVirtualWithOptions($request, $runtime);
    }

    /**
     * @param PhoneNumberStatusForVoiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PhoneNumberStatusForVoiceResponse
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
     * @param QueryAvailableAuthCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryAvailableAuthCodeResponse
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
     * @param QueryTagApplyRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTagApplyRuleResponse
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
     * @param QueryTagInfoBySelectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTagInfoBySelectionResponse
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
     * @param QueryTagListPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryTagListPageResponse
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
     * @param QueryUsageStatisticsByTagIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryUsageStatisticsByTagIdResponse
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
     * @param ThreeElementsVerificationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ThreeElementsVerificationResponse
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
     * @param TwoElementsVerificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return TwoElementsVerificationResponse
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
     * @param TwoElementsVerificationRequest $request
     *
     * @return TwoElementsVerificationResponse
     */
    public function twoElementsVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->twoElementsVerificationWithOptions($request, $runtime);
    }
}
