<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyPRORequest;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyPROResponse;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyV2Request;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyV2Response;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryRequest;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryResponse;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudauth extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Enterprise Element Verification.
     *
     * @remarks
     * Supports only enterprises and individual businesses.
     *
     * @param request - EntElementVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EntElementVerifyResponse
     *
     * @param EntElementVerifyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EntElementVerifyResponse
     */
    public function entElementVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entName) {
            @$query['EntName'] = $request->entName;
        }

        if (null !== $request->infoVerifyType) {
            @$query['InfoVerifyType'] = $request->infoVerifyType;
        }

        if (null !== $request->legalPersonCertNo) {
            @$query['LegalPersonCertNo'] = $request->legalPersonCertNo;
        }

        if (null !== $request->legalPersonName) {
            @$query['LegalPersonName'] = $request->legalPersonName;
        }

        if (null !== $request->licenseNo) {
            @$query['LicenseNo'] = $request->licenseNo;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->userAuthorization) {
            @$query['UserAuthorization'] = $request->userAuthorization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EntElementVerify',
            'version' => '2022-11-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EntElementVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enterprise Element Verification.
     *
     * @remarks
     * Supports only enterprises and individual businesses.
     *
     * @param request - EntElementVerifyRequest
     *
     * @returns EntElementVerifyResponse
     *
     * @param EntElementVerifyRequest $request
     *
     * @return EntElementVerifyResponse
     */
    public function entElementVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entElementVerifyWithOptions($request, $runtime);
    }

    /**
     * 企业要素核验PRO.
     *
     * @param request - EntElementVerifyPRORequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EntElementVerifyPROResponse
     *
     * @param EntElementVerifyPRORequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EntElementVerifyPROResponse
     */
    public function entElementVerifyPROWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entName) {
            @$query['EntName'] = $request->entName;
        }

        if (null !== $request->infoVerifyType) {
            @$query['InfoVerifyType'] = $request->infoVerifyType;
        }

        if (null !== $request->legalPersonCertNo) {
            @$query['LegalPersonCertNo'] = $request->legalPersonCertNo;
        }

        if (null !== $request->legalPersonName) {
            @$query['LegalPersonName'] = $request->legalPersonName;
        }

        if (null !== $request->licenseNo) {
            @$query['LicenseNo'] = $request->licenseNo;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->userAuthorization) {
            @$query['UserAuthorization'] = $request->userAuthorization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EntElementVerifyPRO',
            'version' => '2022-11-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EntElementVerifyPROResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 企业要素核验PRO.
     *
     * @param request - EntElementVerifyPRORequest
     *
     * @returns EntElementVerifyPROResponse
     *
     * @param EntElementVerifyPRORequest $request
     *
     * @return EntElementVerifyPROResponse
     */
    public function entElementVerifyPRO($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entElementVerifyPROWithOptions($request, $runtime);
    }

    /**
     * Enterprise Element Verification V2.
     *
     * @remarks
     * The Enterprise Element Verification API provides a service for verifying the consistency of enterprise element information, used to identify the authenticity of enterprise information.
     * It supports various institutions including enterprises, individual businesses, farmers\\" professional cooperatives, government agencies, public institutions, social organizations, legal profession institutions, and owners\\" meetings for 2-3 elements;
     * For 4 elements, it supports enterprises, individual businesses, farmers\\" professional cooperatives, and legal professions.
     *
     * @param request - EntElementVerifyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EntElementVerifyV2Response
     *
     * @param EntElementVerifyV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return EntElementVerifyV2Response
     */
    public function entElementVerifyV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entName) {
            @$query['EntName'] = $request->entName;
        }

        if (null !== $request->infoVerifyType) {
            @$query['InfoVerifyType'] = $request->infoVerifyType;
        }

        if (null !== $request->legalPersonCertNo) {
            @$query['LegalPersonCertNo'] = $request->legalPersonCertNo;
        }

        if (null !== $request->legalPersonName) {
            @$query['LegalPersonName'] = $request->legalPersonName;
        }

        if (null !== $request->licenseNo) {
            @$query['LicenseNo'] = $request->licenseNo;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->userAuthorization) {
            @$query['UserAuthorization'] = $request->userAuthorization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EntElementVerifyV2',
            'version' => '2022-11-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EntElementVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enterprise Element Verification V2.
     *
     * @remarks
     * The Enterprise Element Verification API provides a service for verifying the consistency of enterprise element information, used to identify the authenticity of enterprise information.
     * It supports various institutions including enterprises, individual businesses, farmers\\" professional cooperatives, government agencies, public institutions, social organizations, legal profession institutions, and owners\\" meetings for 2-3 elements;
     * For 4 elements, it supports enterprises, individual businesses, farmers\\" professional cooperatives, and legal professions.
     *
     * @param request - EntElementVerifyV2Request
     *
     * @returns EntElementVerifyV2Response
     *
     * @param EntElementVerifyV2Request $request
     *
     * @return EntElementVerifyV2Response
     */
    public function entElementVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entElementVerifyV2WithOptions($request, $runtime);
    }

    /**
     * Abnormal Business Operation Query.
     *
     * @param request - EntRiskQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EntRiskQueryResponse
     *
     * @param EntRiskQueryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EntRiskQueryResponse
     */
    public function entRiskQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->paramValue) {
            @$query['ParamValue'] = $request->paramValue;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->userAuthorization) {
            @$query['UserAuthorization'] = $request->userAuthorization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EntRiskQuery',
            'version' => '2022-11-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EntRiskQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Abnormal Business Operation Query.
     *
     * @param request - EntRiskQueryRequest
     *
     * @returns EntRiskQueryResponse
     *
     * @param EntRiskQueryRequest $request
     *
     * @return EntRiskQueryResponse
     */
    public function entRiskQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entRiskQueryWithOptions($request, $runtime);
    }

    /**
     * Enterprise Authentication.
     *
     * @param request - EntVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EntVerifyResponse
     *
     * @param EntVerifyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return EntVerifyResponse
     */
    public function entVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountNo) {
            @$query['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->entName) {
            @$query['EntName'] = $request->entName;
        }

        if (null !== $request->infoVerifyType) {
            @$query['InfoVerifyType'] = $request->infoVerifyType;
        }

        if (null !== $request->legalPersonCertNo) {
            @$query['LegalPersonCertNo'] = $request->legalPersonCertNo;
        }

        if (null !== $request->legalPersonMobile) {
            @$query['LegalPersonMobile'] = $request->legalPersonMobile;
        }

        if (null !== $request->legalPersonName) {
            @$query['LegalPersonName'] = $request->legalPersonName;
        }

        if (null !== $request->licenseNo) {
            @$query['LicenseNo'] = $request->licenseNo;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->riskModelVersion) {
            @$query['RiskModelVersion'] = $request->riskModelVersion;
        }

        if (null !== $request->riskVerifyType) {
            @$query['RiskVerifyType'] = $request->riskVerifyType;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->userAuthorization) {
            @$query['UserAuthorization'] = $request->userAuthorization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EntVerify',
            'version' => '2022-11-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EntVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enterprise Authentication.
     *
     * @param request - EntVerifyRequest
     *
     * @returns EntVerifyResponse
     *
     * @param EntVerifyRequest $request
     *
     * @return EntVerifyResponse
     */
    public function entVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entVerifyWithOptions($request, $runtime);
    }
}
