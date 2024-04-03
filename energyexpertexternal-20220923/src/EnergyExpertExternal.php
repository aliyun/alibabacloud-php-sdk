<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GenerateResultRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GenerateResultResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetAreaElecConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetAreaElecConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataItemListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataItemListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSourceConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSourceConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSummaryRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSummaryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdInventoryConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdInventoryConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdSummaryRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdSummaryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetFootprintListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetFootprintListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGasConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGasConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkSummaryRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkSummaryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventoryConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventoryConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetInventoryListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetInventoryListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgAndFactoryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetPcrInfoRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetPcrInfoResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetReductionProposalRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetReductionProposalResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\IsCompletedRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\IsCompletedResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushDeviceDataRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushDeviceDataResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushItemDataRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushItemDataResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\RecalculateCarbonEmissionRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\RecalculateCarbonEmissionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EnergyExpertExternal extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('energyexpertexternal', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GenerateResultRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateResultResponse
     */
    public function generateResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateResult',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/generate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateResultRequest $request
     *
     * @return GenerateResultResponse
     */
    public function generateResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetAreaElecConstituteRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetAreaElecConstituteResponse
     */
    public function getAreaElecConstituteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->year)) {
            $body['year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAreaElecConstitute',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/analysis/elec/area',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAreaElecConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAreaElecConstituteRequest $request
     *
     * @return GetAreaElecConstituteResponse
     */
    public function getAreaElecConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAreaElecConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetCarbonEmissionTrendRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetCarbonEmissionTrendResponse
     */
    public function getCarbonEmissionTrendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->moduleCode)) {
            $body['moduleCode'] = $request->moduleCode;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $body['moduleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->trendType)) {
            $body['trendType'] = $request->trendType;
        }
        if (!Utils::isUnset($request->yearList)) {
            $body['yearList'] = $request->yearList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCarbonEmissionTrend',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/analysis/trend',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCarbonEmissionTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCarbonEmissionTrendRequest $request
     *
     * @return GetCarbonEmissionTrendResponse
     */
    public function getCarbonEmissionTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCarbonEmissionTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDataItemListRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDataItemListResponse
     */
    public function getDataItemListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataItemList',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/data/item/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDataItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataItemListRequest $request
     *
     * @return GetDataItemListResponse
     */
    public function getDataItemList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataItemListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDataQualityAnalysisRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetDataQualityAnalysisResponse
     */
    public function getDataQualityAnalysisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->dataQualityEvaluationType)) {
            $body['dataQualityEvaluationType'] = $request->dataQualityEvaluationType;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataQualityAnalysis',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/data/quality/analysis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDataQualityAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataQualityAnalysisRequest $request
     *
     * @return GetDataQualityAnalysisResponse
     */
    public function getDataQualityAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataQualityAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * *   You can call this operation to query the parameters of a data collection device based on the device ID. If the verification is passed, the device parameters are returned. If the verification fails, a null value is returned.
     *   * *   You can query the parameters of a single device by day. If data of the device does not exist, a null value is returned.
     *   *
     * @param GetDeviceInfoRequest $request GetDeviceInfoRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceInfoResponse GetDeviceInfoResponse
     */
    public function getDeviceInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['deviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->ds)) {
            $query['ds'] = $request->ds;
        }
        if (!Utils::isUnset($request->factoryId)) {
            $query['factoryId'] = $request->factoryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceInfo',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/external/getDeviceInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation to query the parameters of a data collection device based on the device ID. If the verification is passed, the device parameters are returned. If the verification fails, a null value is returned.
     *   * *   You can query the parameters of a single device by day. If data of the device does not exist, a null value is returned.
     *   *
     * @param GetDeviceInfoRequest $request GetDeviceInfoRequest
     *
     * @return GetDeviceInfoResponse GetDeviceInfoResponse
     */
    public function getDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * *   You can query the information about data collection devices of a site based on the ID of the site. If the verification is passed, the information about the devices of the site is returned. If the verification fails, a null value is returned.
     *   * *   Virtual meters at the site are not returned.
     *   *
     * @param GetDeviceListRequest $request GetDeviceListRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceListResponse GetDeviceListResponse
     */
    public function getDeviceListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->factoryId)) {
            $query['factoryId'] = $request->factoryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceList',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/external/getDeviceList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can query the information about data collection devices of a site based on the ID of the site. If the verification is passed, the information about the devices of the site is returned. If the verification fails, a null value is returned.
     *   * *   Virtual meters at the site are not returned.
     *   *
     * @param GetDeviceListRequest $request GetDeviceListRequest
     *
     * @return GetDeviceListResponse GetDeviceListResponse
     */
    public function getDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetElecConstituteRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetElecConstituteResponse
     */
    public function getElecConstituteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->year)) {
            $body['year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetElecConstitute',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/analysis/elec/constitute',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetElecConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetElecConstituteRequest $request
     *
     * @return GetElecConstituteResponse
     */
    public function getElecConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElecConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetElecTrendRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetElecTrendResponse
     */
    public function getElecTrendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->yearList)) {
            $body['yearList'] = $request->yearList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetElecTrend',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/analysis/elec/trend',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetElecTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetElecTrendRequest $request
     *
     * @return GetElecTrendResponse
     */
    public function getElecTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElecTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEmissionSourceConstituteRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetEmissionSourceConstituteResponse
     */
    public function getEmissionSourceConstituteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->moduleCode)) {
            $body['moduleCode'] = $request->moduleCode;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $body['moduleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->year)) {
            $body['year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEmissionSourceConstitute',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/analysis/constitute',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEmissionSourceConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEmissionSourceConstituteRequest $request
     *
     * @return GetEmissionSourceConstituteResponse
     */
    public function getEmissionSourceConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmissionSourceConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEmissionSummaryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetEmissionSummaryResponse
     */
    public function getEmissionSummaryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->moduleCode)) {
            $body['moduleCode'] = $request->moduleCode;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $body['moduleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->year)) {
            $body['year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEmissionSummary',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/analysis/summary',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEmissionSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEmissionSummaryRequest $request
     *
     * @return GetEmissionSummaryResponse
     */
    public function getEmissionSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmissionSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEpdInventoryConstituteRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetEpdInventoryConstituteResponse
     */
    public function getEpdInventoryConstituteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEpdInventoryConstitute',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/epd/inventory/constitute',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEpdInventoryConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEpdInventoryConstituteRequest $request
     *
     * @return GetEpdInventoryConstituteResponse
     */
    public function getEpdInventoryConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEpdInventoryConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEpdSummaryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetEpdSummaryResponse
     */
    public function getEpdSummaryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEpdSummary',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/epd/summary',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEpdSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEpdSummaryRequest $request
     *
     * @return GetEpdSummaryResponse
     */
    public function getEpdSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEpdSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetFootprintListRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetFootprintListResponse
     */
    public function getFootprintListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFootprintList',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/product/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFootprintListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFootprintListRequest $request
     *
     * @return GetFootprintListResponse
     */
    public function getFootprintList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFootprintListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetGasConstituteRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetGasConstituteResponse
     */
    public function getGasConstituteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->moduleCode)) {
            $body['moduleCode'] = $request->moduleCode;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $body['moduleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->year)) {
            $body['year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGasConstitute',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/analysis/gas/constitute',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGasConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGasConstituteRequest $request
     *
     * @return GetGasConstituteResponse
     */
    public function getGasConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGasConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetGwpBenchmarkListRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetGwpBenchmarkListResponse
     */
    public function getGwpBenchmarkListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGwpBenchmarkList',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/gwp/benchmark/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGwpBenchmarkListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGwpBenchmarkListRequest $request
     *
     * @return GetGwpBenchmarkListResponse
     */
    public function getGwpBenchmarkList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpBenchmarkListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetGwpBenchmarkSummaryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetGwpBenchmarkSummaryResponse
     */
    public function getGwpBenchmarkSummaryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGwpBenchmarkSummary',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/gwp/benchmark/summary',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGwpBenchmarkSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGwpBenchmarkSummaryRequest $request
     *
     * @return GetGwpBenchmarkSummaryResponse
     */
    public function getGwpBenchmarkSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpBenchmarkSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetGwpInventoryConstituteRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetGwpInventoryConstituteResponse
     */
    public function getGwpInventoryConstituteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGwpInventoryConstitute',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/gwp/inventory/constitute',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGwpInventoryConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGwpInventoryConstituteRequest $request
     *
     * @return GetGwpInventoryConstituteResponse
     */
    public function getGwpInventoryConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpInventoryConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetGwpInventorySummaryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetGwpInventorySummaryResponse
     */
    public function getGwpInventorySummaryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGwpInventorySummary',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/gwp/inventory/summary',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGwpInventorySummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGwpInventorySummaryRequest $request
     *
     * @return GetGwpInventorySummaryResponse
     */
    public function getGwpInventorySummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpInventorySummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetInventoryListRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetInventoryListResponse
     */
    public function getInventoryListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->emissionType)) {
            $body['emissionType'] = $request->emissionType;
        }
        if (!Utils::isUnset($request->group)) {
            $body['group'] = $request->group;
        }
        if (!Utils::isUnset($request->methodType)) {
            $body['methodType'] = $request->methodType;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInventoryList',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/inventory/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInventoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInventoryListRequest $request
     *
     * @return GetInventoryListResponse
     */
    public function getInventoryList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInventoryListWithOptions($request, $headers, $runtime);
    }

    /**
     * *   You can set multiple request parameters to filter query results. Specified parameters have logical AND relations. Parameters without assigned values are not used as filtering conditions.
     *   * *   The x-acs-caller-uid header is used to check whether the activated service plan is the required service plan. If the verification is passed, the information about the organizations and sites that are activated by using the Alibaba Cloud account is returned. If the verification fails, a null value is returned.
     *   * *   If activated organizations and sites exist, the data of the organizations and sites is returned. If no organization or site data exists, a null value is returned.
     *   *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrgAndFactoryResponse GetOrgAndFactoryResponse
     */
    public function getOrgAndFactoryWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOrgAndFactory',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/external/getOrgAndFactory',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrgAndFactoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can set multiple request parameters to filter query results. Specified parameters have logical AND relations. Parameters without assigned values are not used as filtering conditions.
     *   * *   The x-acs-caller-uid header is used to check whether the activated service plan is the required service plan. If the verification is passed, the information about the organizations and sites that are activated by using the Alibaba Cloud account is returned. If the verification fails, a null value is returned.
     *   * *   If activated organizations and sites exist, the data of the organizations and sites is returned. If no organization or site data exists, a null value is returned.
     *   *
     * @return GetOrgAndFactoryResponse GetOrgAndFactoryResponse
     */
    public function getOrgAndFactory()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrgAndFactoryWithOptions($headers, $runtime);
    }

    /**
     * @param GetOrgConstituteRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetOrgConstituteResponse
     */
    public function getOrgConstituteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->moduleCode)) {
            $body['moduleCode'] = $request->moduleCode;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $body['moduleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->year)) {
            $body['year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOrgConstitute',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/analysis/org',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrgConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOrgConstituteRequest $request
     *
     * @return GetOrgConstituteResponse
     */
    public function getOrgConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrgConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetPcrInfoRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetPcrInfoResponse
     */
    public function getPcrInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPcrInfo',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/pcr/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPcrInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPcrInfoRequest $request
     *
     * @return GetPcrInfoResponse
     */
    public function getPcrInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPcrInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetReductionProposalRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetReductionProposalResponse
     */
    public function getReductionProposalWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->dataQualityEvaluationType)) {
            $body['dataQualityEvaluationType'] = $request->dataQualityEvaluationType;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetReductionProposal',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/reduction/proposal',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetReductionProposalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetReductionProposalRequest $request
     *
     * @return GetReductionProposalResponse
     */
    public function getReductionProposal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReductionProposalWithOptions($request, $headers, $runtime);
    }

    /**
     * @param IsCompletedRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return IsCompletedResponse
     */
    public function isCompletedWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IsCompleted',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/footprint/result/completed',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IsCompletedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IsCompletedRequest $request
     *
     * @return IsCompletedResponse
     */
    public function isCompleted($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->isCompletedWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PushDeviceDataRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PushDeviceDataResponse
     */
    public function pushDeviceDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceType)) {
            $body['deviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->devices)) {
            $body['devices'] = $request->devices;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushDeviceData',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/data/increment/push',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushDeviceDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushDeviceDataRequest $request
     *
     * @return PushDeviceDataResponse
     */
    public function pushDeviceData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDeviceDataWithOptions($request, $headers, $runtime);
    }

    /**
     * N/A.
     *   *
     * @param PushItemDataRequest $request PushItemDataRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return PushItemDataResponse PushItemDataResponse
     */
    public function pushItemDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->items)) {
            $body['items'] = $request->items;
        }
        if (!Utils::isUnset($request->year)) {
            $body['year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushItemData',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/data/item/push',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushItemDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * N/A.
     *   *
     * @param PushItemDataRequest $request PushItemDataRequest
     *
     * @return PushItemDataResponse PushItemDataResponse
     */
    public function pushItemData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushItemDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RecalculateCarbonEmissionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return RecalculateCarbonEmissionResponse
     */
    public function recalculateCarbonEmissionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->year)) {
            $body['year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecalculateCarbonEmission',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/carbon/emission/data/item/recalculate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecalculateCarbonEmissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecalculateCarbonEmissionRequest $request
     *
     * @return RecalculateCarbonEmissionResponse
     */
    public function recalculateCarbonEmission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recalculateCarbonEmissionWithOptions($request, $headers, $runtime);
    }
}
