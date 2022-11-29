<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
     * @param EntVerifyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return EntVerifyResponse
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

        return EntVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
