<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcCompetitorsRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcCompetitorsResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcCoreTeamsRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcCoreTeamsResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcFinancingRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcFinancingResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcFuzzSearchRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcFuzzSearchResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcAbnormalOperationRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcAbnormalOperationResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcAdminLicenseRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcAdminLicenseResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcBasicRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcBasicResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcBranchRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcBranchResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcChangeRecordRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcChangeRecordResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcCheckupRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcCheckupResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcClearAccountRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcClearAccountResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcDoubleCheckupRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcDoubleCheckupResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcEmployeeRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcEmployeeResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcEquityFrozenRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcEquityFrozenResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcEquityPledgeRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcEquityPledgeResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcInvestmentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcInvestmentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcKnowledgePropertyPledgeRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcKnowledgePropertyPledgeResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcMortgageRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcMortgageResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcSeriousOffenseRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcSeriousOffenseResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcShareholderRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcShareholderResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcSimpleCancelRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcSimpleCancelResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpCertificateRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpCertificateResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpDomainRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpDomainResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpPatentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpPatentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpSoftwareCopyrightRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpSoftwareCopyrightResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpTrademarkRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpTrademarkResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpWorksCopyrightRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpWorksCopyrightResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeAuctionRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeAuctionResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCaseFilingRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCaseFilingResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCourtAnnouncementRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCourtAnnouncementResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCourtNoticeRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCourtNoticeResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeDishonestyRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeDishonestyResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeExecutedRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeExecutedResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeJudgementDocRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeJudgementDocResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeLimitHighConsumeRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeLimitHighConsumeResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeTerminalCaseRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeTerminalCaseResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcListedCompanyRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcListedCompanyResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeAdminPunishmentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeAdminPunishmentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeCustomsPunishmentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeCustomsPunishmentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeEnvironmentPunishmentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeEnvironmentPunishmentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeFoodDrugPunishmentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeFoodDrugPunishmentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeQualityPunishmentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeQualityPunishmentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationBiddingRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationBiddingResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationCustomsRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationCustomsResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationPurchaseLandRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationPurchaseLandResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationRecruitmentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationRecruitmentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcProductBandRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcProductBandResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxAbnormalRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxAbnormalResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxClassARequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxClassAResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxGeneralTaxpayerRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxGeneralTaxpayerResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxIllegalRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxIllegalResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxOverdueRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxOverdueResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxPunishmentRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxPunishmentResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetQccCertificationDetailByIdRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetQccCertificationDetailByIdResponse;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetQccSearchCertificationRequest;
use AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetQccSearchCertificationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dtocinfo extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dt-oc-info', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetOcCompetitorsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOcCompetitorsResponse
     */
    public function getOcCompetitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcCompetitors',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcCompetitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcCompetitorsRequest $request
     *
     * @return GetOcCompetitorsResponse
     */
    public function getOcCompetitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcCompetitorsWithOptions($request, $runtime);
    }

    /**
     * @param GetOcCoreTeamsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOcCoreTeamsResponse
     */
    public function getOcCoreTeamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcCoreTeams',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcCoreTeamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcCoreTeamsRequest $request
     *
     * @return GetOcCoreTeamsResponse
     */
    public function getOcCoreTeams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcCoreTeamsWithOptions($request, $runtime);
    }

    /**
     * @param GetOcFinancingRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOcFinancingResponse
     */
    public function getOcFinancingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcFinancing',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcFinancingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcFinancingRequest $request
     *
     * @return GetOcFinancingResponse
     */
    public function getOcFinancing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcFinancingWithOptions($request, $runtime);
    }

    /**
     * @param GetOcFuzzSearchRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetOcFuzzSearchResponse
     */
    public function getOcFuzzSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcFuzzSearch',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcFuzzSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcFuzzSearchRequest $request
     *
     * @return GetOcFuzzSearchResponse
     */
    public function getOcFuzzSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcFuzzSearchWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcAbnormalOperationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOcIcAbnormalOperationResponse
     */
    public function getOcIcAbnormalOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcAbnormalOperation',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcAbnormalOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcAbnormalOperationRequest $request
     *
     * @return GetOcIcAbnormalOperationResponse
     */
    public function getOcIcAbnormalOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcAbnormalOperationWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcAdminLicenseRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOcIcAdminLicenseResponse
     */
    public function getOcIcAdminLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcAdminLicense',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcAdminLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcAdminLicenseRequest $request
     *
     * @return GetOcIcAdminLicenseResponse
     */
    public function getOcIcAdminLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcAdminLicenseWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcBasicRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOcIcBasicResponse
     */
    public function getOcIcBasicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcBasic',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcBasicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcBasicRequest $request
     *
     * @return GetOcIcBasicResponse
     */
    public function getOcIcBasic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcBasicWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcBranchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetOcIcBranchResponse
     */
    public function getOcIcBranchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcBranch',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcBranchRequest $request
     *
     * @return GetOcIcBranchResponse
     */
    public function getOcIcBranch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcBranchWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcChangeRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOcIcChangeRecordResponse
     */
    public function getOcIcChangeRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcChangeRecord',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcChangeRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcChangeRecordRequest $request
     *
     * @return GetOcIcChangeRecordResponse
     */
    public function getOcIcChangeRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcChangeRecordWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcCheckupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOcIcCheckupResponse
     */
    public function getOcIcCheckupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcCheckup',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcCheckupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcCheckupRequest $request
     *
     * @return GetOcIcCheckupResponse
     */
    public function getOcIcCheckup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcCheckupWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcClearAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOcIcClearAccountResponse
     */
    public function getOcIcClearAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcClearAccount',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcClearAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcClearAccountRequest $request
     *
     * @return GetOcIcClearAccountResponse
     */
    public function getOcIcClearAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcClearAccountWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcDoubleCheckupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetOcIcDoubleCheckupResponse
     */
    public function getOcIcDoubleCheckupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcDoubleCheckup',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcDoubleCheckupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcDoubleCheckupRequest $request
     *
     * @return GetOcIcDoubleCheckupResponse
     */
    public function getOcIcDoubleCheckup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcDoubleCheckupWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcEmployeeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetOcIcEmployeeResponse
     */
    public function getOcIcEmployeeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcEmployee',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcEmployeeRequest $request
     *
     * @return GetOcIcEmployeeResponse
     */
    public function getOcIcEmployee($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcEmployeeWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcEquityFrozenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOcIcEquityFrozenResponse
     */
    public function getOcIcEquityFrozenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcEquityFrozen',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcEquityFrozenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcEquityFrozenRequest $request
     *
     * @return GetOcIcEquityFrozenResponse
     */
    public function getOcIcEquityFrozen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcEquityFrozenWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcEquityPledgeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOcIcEquityPledgeResponse
     */
    public function getOcIcEquityPledgeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcEquityPledge',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcEquityPledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcEquityPledgeRequest $request
     *
     * @return GetOcIcEquityPledgeResponse
     */
    public function getOcIcEquityPledge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcEquityPledgeWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcInvestmentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetOcIcInvestmentResponse
     */
    public function getOcIcInvestmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcInvestment',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcInvestmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcInvestmentRequest $request
     *
     * @return GetOcIcInvestmentResponse
     */
    public function getOcIcInvestment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcInvestmentWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcKnowledgePropertyPledgeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetOcIcKnowledgePropertyPledgeResponse
     */
    public function getOcIcKnowledgePropertyPledgeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcKnowledgePropertyPledge',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcKnowledgePropertyPledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcKnowledgePropertyPledgeRequest $request
     *
     * @return GetOcIcKnowledgePropertyPledgeResponse
     */
    public function getOcIcKnowledgePropertyPledge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcKnowledgePropertyPledgeWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcMortgageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetOcIcMortgageResponse
     */
    public function getOcIcMortgageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcMortgage',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcMortgageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcMortgageRequest $request
     *
     * @return GetOcIcMortgageResponse
     */
    public function getOcIcMortgage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcMortgageWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcSeriousOffenseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOcIcSeriousOffenseResponse
     */
    public function getOcIcSeriousOffenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcSeriousOffense',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcSeriousOffenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcSeriousOffenseRequest $request
     *
     * @return GetOcIcSeriousOffenseResponse
     */
    public function getOcIcSeriousOffense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcSeriousOffenseWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcShareholderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOcIcShareholderResponse
     */
    public function getOcIcShareholderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcShareholder',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcShareholderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcShareholderRequest $request
     *
     * @return GetOcIcShareholderResponse
     */
    public function getOcIcShareholder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcShareholderWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIcSimpleCancelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOcIcSimpleCancelResponse
     */
    public function getOcIcSimpleCancelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIcSimpleCancel',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIcSimpleCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIcSimpleCancelRequest $request
     *
     * @return GetOcIcSimpleCancelResponse
     */
    public function getOcIcSimpleCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIcSimpleCancelWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIpCertificateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOcIpCertificateResponse
     */
    public function getOcIpCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIpCertificate',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIpCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIpCertificateRequest $request
     *
     * @return GetOcIpCertificateResponse
     */
    public function getOcIpCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIpCertificateWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIpDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetOcIpDomainResponse
     */
    public function getOcIpDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIpDomain',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIpDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIpDomainRequest $request
     *
     * @return GetOcIpDomainResponse
     */
    public function getOcIpDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIpDomainWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIpPatentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetOcIpPatentResponse
     */
    public function getOcIpPatentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIpPatent',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIpPatentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIpPatentRequest $request
     *
     * @return GetOcIpPatentResponse
     */
    public function getOcIpPatent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIpPatentWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIpSoftwareCopyrightRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOcIpSoftwareCopyrightResponse
     */
    public function getOcIpSoftwareCopyrightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIpSoftwareCopyright',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIpSoftwareCopyrightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIpSoftwareCopyrightRequest $request
     *
     * @return GetOcIpSoftwareCopyrightResponse
     */
    public function getOcIpSoftwareCopyright($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIpSoftwareCopyrightWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIpTrademarkRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOcIpTrademarkResponse
     */
    public function getOcIpTrademarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIpTrademark',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIpTrademarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIpTrademarkRequest $request
     *
     * @return GetOcIpTrademarkResponse
     */
    public function getOcIpTrademark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIpTrademarkWithOptions($request, $runtime);
    }

    /**
     * @param GetOcIpWorksCopyrightRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOcIpWorksCopyrightResponse
     */
    public function getOcIpWorksCopyrightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcIpWorksCopyright',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcIpWorksCopyrightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcIpWorksCopyrightRequest $request
     *
     * @return GetOcIpWorksCopyrightResponse
     */
    public function getOcIpWorksCopyright($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcIpWorksCopyrightWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeAuctionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOcJusticeAuctionResponse
     */
    public function getOcJusticeAuctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeAuction',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeAuctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeAuctionRequest $request
     *
     * @return GetOcJusticeAuctionResponse
     */
    public function getOcJusticeAuction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeAuctionWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeCaseFilingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOcJusticeCaseFilingResponse
     */
    public function getOcJusticeCaseFilingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeCaseFiling',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeCaseFilingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeCaseFilingRequest $request
     *
     * @return GetOcJusticeCaseFilingResponse
     */
    public function getOcJusticeCaseFiling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeCaseFilingWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeCourtAnnouncementRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetOcJusticeCourtAnnouncementResponse
     */
    public function getOcJusticeCourtAnnouncementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeCourtAnnouncement',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeCourtAnnouncementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeCourtAnnouncementRequest $request
     *
     * @return GetOcJusticeCourtAnnouncementResponse
     */
    public function getOcJusticeCourtAnnouncement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeCourtAnnouncementWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeCourtNoticeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOcJusticeCourtNoticeResponse
     */
    public function getOcJusticeCourtNoticeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeCourtNotice',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeCourtNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeCourtNoticeRequest $request
     *
     * @return GetOcJusticeCourtNoticeResponse
     */
    public function getOcJusticeCourtNotice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeCourtNoticeWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeDishonestyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOcJusticeDishonestyResponse
     */
    public function getOcJusticeDishonestyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeDishonesty',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeDishonestyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeDishonestyRequest $request
     *
     * @return GetOcJusticeDishonestyResponse
     */
    public function getOcJusticeDishonesty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeDishonestyWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeExecutedRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetOcJusticeExecutedResponse
     */
    public function getOcJusticeExecutedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeExecuted',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeExecutedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeExecutedRequest $request
     *
     * @return GetOcJusticeExecutedResponse
     */
    public function getOcJusticeExecuted($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeExecutedWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeJudgementDocRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOcJusticeJudgementDocResponse
     */
    public function getOcJusticeJudgementDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeJudgementDoc',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeJudgementDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeJudgementDocRequest $request
     *
     * @return GetOcJusticeJudgementDocResponse
     */
    public function getOcJusticeJudgementDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeJudgementDocWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeLimitHighConsumeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetOcJusticeLimitHighConsumeResponse
     */
    public function getOcJusticeLimitHighConsumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeLimitHighConsume',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeLimitHighConsumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeLimitHighConsumeRequest $request
     *
     * @return GetOcJusticeLimitHighConsumeResponse
     */
    public function getOcJusticeLimitHighConsume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeLimitHighConsumeWithOptions($request, $runtime);
    }

    /**
     * @param GetOcJusticeTerminalCaseRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOcJusticeTerminalCaseResponse
     */
    public function getOcJusticeTerminalCaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcJusticeTerminalCase',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcJusticeTerminalCaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcJusticeTerminalCaseRequest $request
     *
     * @return GetOcJusticeTerminalCaseResponse
     */
    public function getOcJusticeTerminalCase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcJusticeTerminalCaseWithOptions($request, $runtime);
    }

    /**
     * @param GetOcListedCompanyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOcListedCompanyResponse
     */
    public function getOcListedCompanyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcListedCompany',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcListedCompanyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcListedCompanyRequest $request
     *
     * @return GetOcListedCompanyResponse
     */
    public function getOcListedCompany($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcListedCompanyWithOptions($request, $runtime);
    }

    /**
     * @param GetOcNegativeAdminPunishmentRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetOcNegativeAdminPunishmentResponse
     */
    public function getOcNegativeAdminPunishmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcNegativeAdminPunishment',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcNegativeAdminPunishmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcNegativeAdminPunishmentRequest $request
     *
     * @return GetOcNegativeAdminPunishmentResponse
     */
    public function getOcNegativeAdminPunishment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcNegativeAdminPunishmentWithOptions($request, $runtime);
    }

    /**
     * @param GetOcNegativeCustomsPunishmentRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetOcNegativeCustomsPunishmentResponse
     */
    public function getOcNegativeCustomsPunishmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcNegativeCustomsPunishment',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcNegativeCustomsPunishmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcNegativeCustomsPunishmentRequest $request
     *
     * @return GetOcNegativeCustomsPunishmentResponse
     */
    public function getOcNegativeCustomsPunishment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcNegativeCustomsPunishmentWithOptions($request, $runtime);
    }

    /**
     * @param GetOcNegativeEnvironmentPunishmentRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetOcNegativeEnvironmentPunishmentResponse
     */
    public function getOcNegativeEnvironmentPunishmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcNegativeEnvironmentPunishment',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcNegativeEnvironmentPunishmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcNegativeEnvironmentPunishmentRequest $request
     *
     * @return GetOcNegativeEnvironmentPunishmentResponse
     */
    public function getOcNegativeEnvironmentPunishment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcNegativeEnvironmentPunishmentWithOptions($request, $runtime);
    }

    /**
     * @param GetOcNegativeFoodDrugPunishmentRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetOcNegativeFoodDrugPunishmentResponse
     */
    public function getOcNegativeFoodDrugPunishmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcNegativeFoodDrugPunishment',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcNegativeFoodDrugPunishmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcNegativeFoodDrugPunishmentRequest $request
     *
     * @return GetOcNegativeFoodDrugPunishmentResponse
     */
    public function getOcNegativeFoodDrugPunishment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcNegativeFoodDrugPunishmentWithOptions($request, $runtime);
    }

    /**
     * @param GetOcNegativeQualityPunishmentRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetOcNegativeQualityPunishmentResponse
     */
    public function getOcNegativeQualityPunishmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcNegativeQualityPunishment',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcNegativeQualityPunishmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcNegativeQualityPunishmentRequest $request
     *
     * @return GetOcNegativeQualityPunishmentResponse
     */
    public function getOcNegativeQualityPunishment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcNegativeQualityPunishmentWithOptions($request, $runtime);
    }

    /**
     * @param GetOcOperationBiddingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOcOperationBiddingResponse
     */
    public function getOcOperationBiddingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcOperationBidding',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcOperationBiddingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcOperationBiddingRequest $request
     *
     * @return GetOcOperationBiddingResponse
     */
    public function getOcOperationBidding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcOperationBiddingWithOptions($request, $runtime);
    }

    /**
     * @param GetOcOperationCustomsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOcOperationCustomsResponse
     */
    public function getOcOperationCustomsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcOperationCustoms',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcOperationCustomsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcOperationCustomsRequest $request
     *
     * @return GetOcOperationCustomsResponse
     */
    public function getOcOperationCustoms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcOperationCustomsWithOptions($request, $runtime);
    }

    /**
     * @param GetOcOperationPurchaseLandRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetOcOperationPurchaseLandResponse
     */
    public function getOcOperationPurchaseLandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcOperationPurchaseLand',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcOperationPurchaseLandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcOperationPurchaseLandRequest $request
     *
     * @return GetOcOperationPurchaseLandResponse
     */
    public function getOcOperationPurchaseLand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcOperationPurchaseLandWithOptions($request, $runtime);
    }

    /**
     * @param GetOcOperationRecruitmentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetOcOperationRecruitmentResponse
     */
    public function getOcOperationRecruitmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcOperationRecruitment',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcOperationRecruitmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcOperationRecruitmentRequest $request
     *
     * @return GetOcOperationRecruitmentResponse
     */
    public function getOcOperationRecruitment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcOperationRecruitmentWithOptions($request, $runtime);
    }

    /**
     * @param GetOcProductBandRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOcProductBandResponse
     */
    public function getOcProductBandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcProductBand',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcProductBandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcProductBandRequest $request
     *
     * @return GetOcProductBandResponse
     */
    public function getOcProductBand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcProductBandWithOptions($request, $runtime);
    }

    /**
     * @param GetOcTaxAbnormalRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOcTaxAbnormalResponse
     */
    public function getOcTaxAbnormalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcTaxAbnormal',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcTaxAbnormalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcTaxAbnormalRequest $request
     *
     * @return GetOcTaxAbnormalResponse
     */
    public function getOcTaxAbnormal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcTaxAbnormalWithOptions($request, $runtime);
    }

    /**
     * @param GetOcTaxClassARequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOcTaxClassAResponse
     */
    public function getOcTaxClassAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcTaxClassA',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcTaxClassAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcTaxClassARequest $request
     *
     * @return GetOcTaxClassAResponse
     */
    public function getOcTaxClassA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcTaxClassAWithOptions($request, $runtime);
    }

    /**
     * @param GetOcTaxGeneralTaxpayerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOcTaxGeneralTaxpayerResponse
     */
    public function getOcTaxGeneralTaxpayerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcTaxGeneralTaxpayer',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcTaxGeneralTaxpayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcTaxGeneralTaxpayerRequest $request
     *
     * @return GetOcTaxGeneralTaxpayerResponse
     */
    public function getOcTaxGeneralTaxpayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcTaxGeneralTaxpayerWithOptions($request, $runtime);
    }

    /**
     * @param GetOcTaxIllegalRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetOcTaxIllegalResponse
     */
    public function getOcTaxIllegalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcTaxIllegal',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcTaxIllegalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcTaxIllegalRequest $request
     *
     * @return GetOcTaxIllegalResponse
     */
    public function getOcTaxIllegal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcTaxIllegalWithOptions($request, $runtime);
    }

    /**
     * @param GetOcTaxOverdueRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetOcTaxOverdueResponse
     */
    public function getOcTaxOverdueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcTaxOverdue',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcTaxOverdueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcTaxOverdueRequest $request
     *
     * @return GetOcTaxOverdueResponse
     */
    public function getOcTaxOverdue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcTaxOverdueWithOptions($request, $runtime);
    }

    /**
     * @param GetOcTaxPunishmentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOcTaxPunishmentResponse
     */
    public function getOcTaxPunishmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOcTaxPunishment',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOcTaxPunishmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOcTaxPunishmentRequest $request
     *
     * @return GetOcTaxPunishmentResponse
     */
    public function getOcTaxPunishment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOcTaxPunishmentWithOptions($request, $runtime);
    }

    /**
     * @param GetQccCertificationDetailByIdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetQccCertificationDetailByIdResponse
     */
    public function getQccCertificationDetailByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certId)) {
            $body['CertId'] = $request->certId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQccCertificationDetailById',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQccCertificationDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQccCertificationDetailByIdRequest $request
     *
     * @return GetQccCertificationDetailByIdResponse
     */
    public function getQccCertificationDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQccCertificationDetailByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetQccSearchCertificationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetQccSearchCertificationResponse
     */
    public function getQccSearchCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certCategory)) {
            $body['CertCategory'] = $request->certCategory;
        }
        if (!Utils::isUnset($request->entName)) {
            $body['EntName'] = $request->entName;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQccSearchCertification',
            'version'     => '2022-08-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQccSearchCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQccSearchCertificationRequest $request
     *
     * @return GetQccSearchCertificationResponse
     */
    public function getQccSearchCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQccSearchCertificationWithOptions($request, $runtime);
    }
}
