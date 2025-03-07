<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyV2Request;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyV2Response;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryRequest;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryResponse;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 企业要素核验
     *  *
     * @param EntElementVerifyRequest $request EntElementVerifyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return EntElementVerifyResponse EntElementVerifyResponse
     */
    public function entElementVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entName)) {
            $query['EntName'] = $request->entName;
        }
        if (!Utils::isUnset($request->infoVerifyType)) {
            $query['InfoVerifyType'] = $request->infoVerifyType;
        }
        if (!Utils::isUnset($request->legalPersonCertNo)) {
            $query['LegalPersonCertNo'] = $request->legalPersonCertNo;
        }
        if (!Utils::isUnset($request->legalPersonName)) {
            $query['LegalPersonName'] = $request->legalPersonName;
        }
        if (!Utils::isUnset($request->licenseNo)) {
            $query['LicenseNo'] = $request->licenseNo;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->userAuthorization)) {
            $query['UserAuthorization'] = $request->userAuthorization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EntElementVerify',
            'version'     => '2022-11-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EntElementVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EntElementVerifyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 企业要素核验
     *  *
     * @param EntElementVerifyRequest $request EntElementVerifyRequest
     *
     * @return EntElementVerifyResponse EntElementVerifyResponse
     */
    public function entElementVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entElementVerifyWithOptions($request, $runtime);
    }

    /**
     * @summary 企业要素验证V2
     *  *
     * @param EntElementVerifyV2Request $request EntElementVerifyV2Request
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EntElementVerifyV2Response EntElementVerifyV2Response
     */
    public function entElementVerifyV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entName)) {
            $query['EntName'] = $request->entName;
        }
        if (!Utils::isUnset($request->infoVerifyType)) {
            $query['InfoVerifyType'] = $request->infoVerifyType;
        }
        if (!Utils::isUnset($request->legalPersonCertNo)) {
            $query['LegalPersonCertNo'] = $request->legalPersonCertNo;
        }
        if (!Utils::isUnset($request->legalPersonName)) {
            $query['LegalPersonName'] = $request->legalPersonName;
        }
        if (!Utils::isUnset($request->licenseNo)) {
            $query['LicenseNo'] = $request->licenseNo;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->userAuthorization)) {
            $query['UserAuthorization'] = $request->userAuthorization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EntElementVerifyV2',
            'version'     => '2022-11-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EntElementVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return EntElementVerifyV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 企业要素验证V2
     *  *
     * @param EntElementVerifyV2Request $request EntElementVerifyV2Request
     *
     * @return EntElementVerifyV2Response EntElementVerifyV2Response
     */
    public function entElementVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entElementVerifyV2WithOptions($request, $runtime);
    }

    /**
     * @summary 企业经营异常查询
     *  *
     * @param EntRiskQueryRequest $request EntRiskQueryRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return EntRiskQueryResponse EntRiskQueryResponse
     */
    public function entRiskQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->paramType)) {
            $query['ParamType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->paramValue)) {
            $query['ParamValue'] = $request->paramValue;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->userAuthorization)) {
            $query['UserAuthorization'] = $request->userAuthorization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EntRiskQuery',
            'version'     => '2022-11-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EntRiskQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EntRiskQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 企业经营异常查询
     *  *
     * @param EntRiskQueryRequest $request EntRiskQueryRequest
     *
     * @return EntRiskQueryResponse EntRiskQueryResponse
     */
    public function entRiskQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entRiskQueryWithOptions($request, $runtime);
    }

    /**
     * @summary 企业认证
     *  *
     * @param EntVerifyRequest $request EntVerifyRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return EntVerifyResponse EntVerifyResponse
     */
    public function entVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->entName)) {
            $query['EntName'] = $request->entName;
        }
        if (!Utils::isUnset($request->infoVerifyType)) {
            $query['InfoVerifyType'] = $request->infoVerifyType;
        }
        if (!Utils::isUnset($request->legalPersonCertNo)) {
            $query['LegalPersonCertNo'] = $request->legalPersonCertNo;
        }
        if (!Utils::isUnset($request->legalPersonMobile)) {
            $query['LegalPersonMobile'] = $request->legalPersonMobile;
        }
        if (!Utils::isUnset($request->legalPersonName)) {
            $query['LegalPersonName'] = $request->legalPersonName;
        }
        if (!Utils::isUnset($request->licenseNo)) {
            $query['LicenseNo'] = $request->licenseNo;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->riskModelVersion)) {
            $query['RiskModelVersion'] = $request->riskModelVersion;
        }
        if (!Utils::isUnset($request->riskVerifyType)) {
            $query['RiskVerifyType'] = $request->riskVerifyType;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->userAuthorization)) {
            $query['UserAuthorization'] = $request->userAuthorization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EntVerify',
            'version'     => '2022-11-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EntVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EntVerifyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 企业认证
     *  *
     * @param EntVerifyRequest $request EntVerifyRequest
     *
     * @return EntVerifyResponse EntVerifyResponse
     */
    public function entVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->entVerifyWithOptions($request, $runtime);
    }
}
