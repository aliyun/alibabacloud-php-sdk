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
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponse;
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
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SendDocumentAskQuestionRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SendDocumentAskQuestionResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocumentAnalyzeJobAdvanceRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocumentAnalyzeJobRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocumentAnalyzeJobResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
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
     * @summary Generate a report of the specified carbon footprint.
     *  *
     * @description Given a product ID, this API initiates a task to calculate the carbon footprint result for the corresponding product. The task\\"s status can be checked using the `IsCompleted` API. Following the generation of results, other result inquiry APIs can be accessed for display content.
     *  *
     * @param GenerateResultRequest $request GenerateResultRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateResultResponse GenerateResultResponse
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
     * @summary Generate a report of the specified carbon footprint.
     *  *
     * @description Given a product ID, this API initiates a task to calculate the carbon footprint result for the corresponding product. The task\\"s status can be checked using the `IsCompleted` API. Following the generation of results, other result inquiry APIs can be accessed for display content.
     *  *
     * @param GenerateResultRequest $request GenerateResultRequest
     *
     * @return GenerateResultResponse GenerateResultResponse
     */
    public function generateResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This interface is used to obtain electrical constitute analysis data.
     *  *
     * @param GetAreaElecConstituteRequest $request GetAreaElecConstituteRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAreaElecConstituteResponse GetAreaElecConstituteResponse
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
     * @summary This interface is used to obtain electrical constitute analysis data.
     *  *
     * @param GetAreaElecConstituteRequest $request GetAreaElecConstituteRequest
     *
     * @return GetAreaElecConstituteResponse GetAreaElecConstituteResponse
     */
    public function getAreaElecConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAreaElecConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get trends in carbon emissions.
     *  *
     * @param GetCarbonEmissionTrendRequest $request GetCarbonEmissionTrendRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCarbonEmissionTrendResponse GetCarbonEmissionTrendResponse
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
     * @summary Get trends in carbon emissions.
     *  *
     * @param GetCarbonEmissionTrendRequest $request GetCarbonEmissionTrendRequest
     *
     * @return GetCarbonEmissionTrendResponse GetCarbonEmissionTrendResponse
     */
    public function getCarbonEmissionTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCarbonEmissionTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This interface is used to obtain the details category of a data item.
     *  *
     * @description - obtain data item detail list under the current enterprise.
     *  *
     * @param GetDataItemListRequest $request GetDataItemListRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataItemListResponse GetDataItemListResponse
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
     * @summary This interface is used to obtain the details category of a data item.
     *  *
     * @description - obtain data item detail list under the current enterprise.
     *  *
     * @param GetDataItemListRequest $request GetDataItemListRequest
     *
     * @return GetDataItemListResponse GetDataItemListResponse
     */
    public function getDataItemList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataItemListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Obtain the data quality evaluation results DQR and DQI.
     *  *
     * @description This API returns the data quality evaluation results based on the user-provided product ID. It\\"s useful for understanding the data quality of the carbon emission factors for each inventory of the product.
     *  *
     * @param GetDataQualityAnalysisRequest $request GetDataQualityAnalysisRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataQualityAnalysisResponse GetDataQualityAnalysisResponse
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
     * @summary Obtain the data quality evaluation results DQR and DQI.
     *  *
     * @description This API returns the data quality evaluation results based on the user-provided product ID. It\\"s useful for understanding the data quality of the carbon emission factors for each inventory of the product.
     *  *
     * @param GetDataQualityAnalysisRequest $request GetDataQualityAnalysisRequest
     *
     * @return GetDataQualityAnalysisResponse GetDataQualityAnalysisResponse
     */
    public function getDataQualityAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataQualityAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a device at a site that is activated by using an Alibaba Cloud account.
     *  *
     * @description *   You can call this operation to query the parameters of a data collection device based on the device ID. If the verification is passed, the device parameters are returned. If the verification fails, a null value is returned.
     * *   You can query the parameters of a single device by day. If data of the device does not exist, a null value is returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through the official website <props="china">[here](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[here](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *  *
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
     * @summary Queries the information about a device at a site that is activated by using an Alibaba Cloud account.
     *  *
     * @description *   You can call this operation to query the parameters of a data collection device based on the device ID. If the verification is passed, the device parameters are returned. If the verification fails, a null value is returned.
     * *   You can query the parameters of a single device by day. If data of the device does not exist, a null value is returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through the official website <props="china">[here](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[here](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *  *
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
     * @summary Queries the devices of a site that is activated by using an Alibaba Cloud account.
     *  *
     * @description *   You can query the information about data collection devices of a site based on the ID of the site. If the verification is passed, the information about the devices of the site is returned. If the verification fails, a null value is returned.
     * *   Virtual meters at the site are not returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through the official website <props="china">[here](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[here](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *  *
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
     * @summary Queries the devices of a site that is activated by using an Alibaba Cloud account.
     *  *
     * @description *   You can query the information about data collection devices of a site based on the ID of the site. If the verification is passed, the information about the devices of the site is returned. If the verification fails, a null value is returned.
     * *   Virtual meters at the site are not returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through the official website <props="china">[here](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[here](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *  *
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
     * @summary 获取文档结果
     *  *
     * @param GetDocumentAnalyzeResultRequest $request GetDocumentAnalyzeResultRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocumentAnalyzeResultResponse GetDocumentAnalyzeResultResponse
     */
    public function getDocumentAnalyzeResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['jobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentAnalyzeResult',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aidoc/document/getDocumentAnalyzeResult',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDocumentAnalyzeResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文档结果
     *  *
     * @param GetDocumentAnalyzeResultRequest $request GetDocumentAnalyzeResultRequest
     *
     * @return GetDocumentAnalyzeResultResponse GetDocumentAnalyzeResultResponse
     */
    public function getDocumentAnalyzeResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentAnalyzeResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This interface is used to obtain power composition analysis data.
     *  *
     * @param GetElecConstituteRequest $request GetElecConstituteRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetElecConstituteResponse GetElecConstituteResponse
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
     * @summary This interface is used to obtain power composition analysis data.
     *  *
     * @param GetElecConstituteRequest $request GetElecConstituteRequest
     *
     * @return GetElecConstituteResponse GetElecConstituteResponse
     */
    public function getElecConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElecConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This interface is used to obtain power trend analysis data.
     *  *
     * @param GetElecTrendRequest $request GetElecTrendRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetElecTrendResponse GetElecTrendResponse
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
     * @summary This interface is used to obtain power trend analysis data.
     *  *
     * @param GetElecTrendRequest $request GetElecTrendRequest
     *
     * @return GetElecTrendResponse GetElecTrendResponse
     */
    public function getElecTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElecTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Obtain the emission source composition.
     *  *
     * @param GetEmissionSourceConstituteRequest $request GetEmissionSourceConstituteRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEmissionSourceConstituteResponse GetEmissionSourceConstituteResponse
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
     * @summary Obtain the emission source composition.
     *  *
     * @param GetEmissionSourceConstituteRequest $request GetEmissionSourceConstituteRequest
     *
     * @return GetEmissionSourceConstituteResponse GetEmissionSourceConstituteResponse
     */
    public function getEmissionSourceConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmissionSourceConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get a summary of carbon emissions.
     *  *
     * @param GetEmissionSummaryRequest $request GetEmissionSummaryRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEmissionSummaryResponse GetEmissionSummaryResponse
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
     * @summary Get a summary of carbon emissions.
     *  *
     * @param GetEmissionSummaryRequest $request GetEmissionSummaryRequest
     *
     * @return GetEmissionSummaryResponse GetEmissionSummaryResponse
     */
    public function getEmissionSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmissionSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Gets the result details of the environmental impact category.
     *  *
     * @description This API returns the emission amounts for various environmental impact categories at different levels for the given product ID. It helps understand the emission quantities for different environmental impact categories and inventories of the product.
     *  *
     * @param GetEpdInventoryConstituteRequest $request GetEpdInventoryConstituteRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEpdInventoryConstituteResponse GetEpdInventoryConstituteResponse
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
     * @summary Gets the result details of the environmental impact category.
     *  *
     * @description This API returns the emission amounts for various environmental impact categories at different levels for the given product ID. It helps understand the emission quantities for different environmental impact categories and inventories of the product.
     *  *
     * @param GetEpdInventoryConstituteRequest $request GetEpdInventoryConstituteRequest
     *
     * @return GetEpdInventoryConstituteResponse GetEpdInventoryConstituteResponse
     */
    public function getEpdInventoryConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEpdInventoryConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Obtain the total amount of emissions for various environmental impacts.
     *  *
     * @description This API takes a product ID from the user and returns the summary of environmental impact generated for the product. This info helps understand the overall emissions for different environmental impact categories of the product.
     *  *
     * @param GetEpdSummaryRequest $request GetEpdSummaryRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEpdSummaryResponse GetEpdSummaryResponse
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
     * @summary Obtain the total amount of emissions for various environmental impacts.
     *  *
     * @description This API takes a product ID from the user and returns the summary of environmental impact generated for the product. This info helps understand the overall emissions for different environmental impact categories of the product.
     *  *
     * @param GetEpdSummaryRequest $request GetEpdSummaryRequest
     *
     * @return GetEpdSummaryResponse GetEpdSummaryResponse
     */
    public function getEpdSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEpdSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get the list of product carbon footprints.
     *  *
     * @description With user-specified parameters such as enterprise code, current page, and page size, this API returns a list of matching product carbon footprints (or supply chain carbon footprints), including product names and product IDs. The product ID can be used as input parameters in other APIs to get the corresponding product\\"s detailed information.
     *  *
     * @param GetFootprintListRequest $request GetFootprintListRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFootprintListResponse GetFootprintListResponse
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
     * @summary Get the list of product carbon footprints.
     *  *
     * @description With user-specified parameters such as enterprise code, current page, and page size, this API returns a list of matching product carbon footprints (or supply chain carbon footprints), including product names and product IDs. The product ID can be used as input parameters in other APIs to get the corresponding product\\"s detailed information.
     *  *
     * @param GetFootprintListRequest $request GetFootprintListRequest
     *
     * @return GetFootprintListResponse GetFootprintListResponse
     */
    public function getFootprintList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFootprintListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This interface is used to obtain gas composition analysis.
     *  *
     * @param GetGasConstituteRequest $request GetGasConstituteRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGasConstituteResponse GetGasConstituteResponse
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
     * @summary This interface is used to obtain gas composition analysis.
     *  *
     * @param GetGasConstituteRequest $request GetGasConstituteRequest
     *
     * @return GetGasConstituteResponse GetGasConstituteResponse
     */
    public function getGasConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGasConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary obtain the active carbon reduction ranking list.
     *  *
     * @description This interface returns a list of proactive carbon reduction information given product ID. It\\"s used to understand the carbon reduction efforts at various levels of the product.
     *  *
     * @param GetGwpBenchmarkListRequest $request GetGwpBenchmarkListRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGwpBenchmarkListResponse GetGwpBenchmarkListResponse
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
     * @summary obtain the active carbon reduction ranking list.
     *  *
     * @description This interface returns a list of proactive carbon reduction information given product ID. It\\"s used to understand the carbon reduction efforts at various levels of the product.
     *  *
     * @param GetGwpBenchmarkListRequest $request GetGwpBenchmarkListRequest
     *
     * @return GetGwpBenchmarkListResponse GetGwpBenchmarkListResponse
     */
    public function getGwpBenchmarkList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpBenchmarkListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This API is to obtain the total amount of active carbon reduction.
     *  *
     * @description The API takes a product ID and returns data on the carbon emissions reduction along with a list of the top four contributors to carbon reduction. This info helps understand the total carbon reduction of the product and its main sources.
     *  *
     * @param GetGwpBenchmarkSummaryRequest $request GetGwpBenchmarkSummaryRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGwpBenchmarkSummaryResponse GetGwpBenchmarkSummaryResponse
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
     * @summary This API is to obtain the total amount of active carbon reduction.
     *  *
     * @description The API takes a product ID and returns data on the carbon emissions reduction along with a list of the top four contributors to carbon reduction. This info helps understand the total carbon reduction of the product and its main sources.
     *  *
     * @param GetGwpBenchmarkSummaryRequest $request GetGwpBenchmarkSummaryRequest
     *
     * @return GetGwpBenchmarkSummaryResponse GetGwpBenchmarkSummaryResponse
     */
    public function getGwpBenchmarkSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpBenchmarkSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Used to obtain the carbon emission composition analysis of a specified product. Carbon emission composition analysis includes two analysis dimensions: inventory and type. In the rendering effect, including a hierarchical list and pie chart.
     *  *
     * @description Used to obtain the carbon emission composition analysis of a specified product. Carbon emission composition analysis includes two analysis dimensions: inventory and type. In the rendering effect, including a hierarchical list and pie chart.
     *  *
     * @param GetGwpInventoryConstituteRequest $request GetGwpInventoryConstituteRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGwpInventoryConstituteResponse GetGwpInventoryConstituteResponse
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
     * @summary Used to obtain the carbon emission composition analysis of a specified product. Carbon emission composition analysis includes two analysis dimensions: inventory and type. In the rendering effect, including a hierarchical list and pie chart.
     *  *
     * @description Used to obtain the carbon emission composition analysis of a specified product. Carbon emission composition analysis includes two analysis dimensions: inventory and type. In the rendering effect, including a hierarchical list and pie chart.
     *  *
     * @param GetGwpInventoryConstituteRequest $request GetGwpInventoryConstituteRequest
     *
     * @return GetGwpInventoryConstituteResponse GetGwpInventoryConstituteResponse
     */
    public function getGwpInventoryConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpInventoryConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This API is used to obtain the total carbon footprint of a product and the top four types of carbon footprint contribution.
     *  *
     * @description Returns the total carbon footprint data for the user-specified product ID, along with details on the top four contributors to the carbon footprint, helping to understand the overall carbon footprint and its main components.
     *  *
     * @param GetGwpInventorySummaryRequest $request GetGwpInventorySummaryRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGwpInventorySummaryResponse GetGwpInventorySummaryResponse
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
     * @summary This API is used to obtain the total carbon footprint of a product and the top four types of carbon footprint contribution.
     *  *
     * @description Returns the total carbon footprint data for the user-specified product ID, along with details on the top four contributors to the carbon footprint, helping to understand the overall carbon footprint and its main components.
     *  *
     * @param GetGwpInventorySummaryRequest $request GetGwpInventorySummaryRequest
     *
     * @return GetGwpInventorySummaryResponse GetGwpInventorySummaryResponse
     */
    public function getGwpInventorySummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpInventorySummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get the list of emissions in descending order under the specified environmental impact (methodType), specified aggregate level (group), and specified calculation mode (emissionType).
     *  *
     * @description This interface retrieves a descending order list of emissions for a specified product ID, environmental impact method, group level, and calculation method. It\\"s used to understand various environmental impact emission scenarios.
     *  *
     * @param GetInventoryListRequest $request GetInventoryListRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInventoryListResponse GetInventoryListResponse
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
     * @summary Get the list of emissions in descending order under the specified environmental impact (methodType), specified aggregate level (group), and specified calculation mode (emissionType).
     *  *
     * @description This interface retrieves a descending order list of emissions for a specified product ID, environmental impact method, group level, and calculation method. It\\"s used to understand various environmental impact emission scenarios.
     *  *
     * @param GetInventoryListRequest $request GetInventoryListRequest
     *
     * @return GetInventoryListResponse GetInventoryListResponse
     */
    public function getInventoryList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInventoryListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the organizations and sites that are activated by using an Alibaba Cloud account. You cannot call this operation to query the organizations or sites that have not been activated in the console.
     *  *
     * @description *   If an activated site exists, the information about the site and the organization to which the site belongs is returned. If no activated site exists, null is returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through the official website <props="china">[here](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[here](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *  *
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
     * @summary Queries the organizations and sites that are activated by using an Alibaba Cloud account. You cannot call this operation to query the organizations or sites that have not been activated in the console.
     *  *
     * @description *   If an activated site exists, the information about the site and the organization to which the site belongs is returned. If no activated site exists, null is returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through the official website <props="china">[here](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[here](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *  *
     * @return GetOrgAndFactoryResponse GetOrgAndFactoryResponse
     */
    public function getOrgAndFactory()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrgAndFactoryWithOptions($headers, $runtime);
    }

    /**
     * @summary This interface is used to obtain carbon inventory organization analysis data.
     *  *
     * @param GetOrgConstituteRequest $request GetOrgConstituteRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrgConstituteResponse GetOrgConstituteResponse
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
     * @summary This interface is used to obtain carbon inventory organization analysis data.
     *  *
     * @param GetOrgConstituteRequest $request GetOrgConstituteRequest
     *
     * @return GetOrgConstituteResponse GetOrgConstituteResponse
     */
    public function getOrgConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrgConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Obtains the oss address of the Product Carbon footprint Report.
     *  *
     * @description With the user-specified product ID, this interface retrieves detailed information and download links for previously generated PCR reports. To use it, two conditions must be met: 1) the result has already been generated; 2) the PCR report has been created.
     *  *
     * @param GetPcrInfoRequest $request GetPcrInfoRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPcrInfoResponse GetPcrInfoResponse
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
     * @summary Obtains the oss address of the Product Carbon footprint Report.
     *  *
     * @description With the user-specified product ID, this interface retrieves detailed information and download links for previously generated PCR reports. To use it, two conditions must be met: 1) the result has already been generated; 2) the PCR report has been created.
     *  *
     * @param GetPcrInfoRequest $request GetPcrInfoRequest
     *
     * @return GetPcrInfoResponse GetPcrInfoResponse
     */
    public function getPcrInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPcrInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get carbon reduction recommendations.
     *  *
     * @description This API returns carbon reduction proposals based on the product ID. It\\"s useful for understanding optimization tips to reduce the carbon emissions associated with a product.
     *  *
     * @param GetReductionProposalRequest $request GetReductionProposalRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetReductionProposalResponse GetReductionProposalResponse
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
     * @summary Get carbon reduction recommendations.
     *  *
     * @description This API returns carbon reduction proposals based on the product ID. It\\"s useful for understanding optimization tips to reduce the carbon emissions associated with a product.
     *  *
     * @param GetReductionProposalRequest $request GetReductionProposalRequest
     *
     * @return GetReductionProposalResponse GetReductionProposalResponse
     */
    public function getReductionProposal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReductionProposalWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Check if the result generation is complete.
     *  *
     * @description This API checks the completion status of generating a report. It should be used before calling other result APIs, as they will only display content once the report generation is complete.
     *  *
     * @param IsCompletedRequest $request IsCompletedRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return IsCompletedResponse IsCompletedResponse
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
     * @summary Check if the result generation is complete.
     *  *
     * @description This API checks the completion status of generating a report. It should be used before calling other result APIs, as they will only display content once the report generation is complete.
     *  *
     * @param IsCompletedRequest $request IsCompletedRequest
     *
     * @return IsCompletedResponse IsCompletedResponse
     */
    public function isCompleted($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->isCompletedWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This interface is used to push device measuring point data, such as power meter voltage and other data.
     *  *
     * @param PushDeviceDataRequest $request PushDeviceDataRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return PushDeviceDataResponse PushDeviceDataResponse
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
     * @summary This interface is used to push device measuring point data, such as power meter voltage and other data.
     *  *
     * @param PushDeviceDataRequest $request PushDeviceDataRequest
     *
     * @return PushDeviceDataResponse PushDeviceDataResponse
     */
    public function pushDeviceData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDeviceDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary This interface is used to push data items.
     *  *
     * @description - This interface is used for individual data item data.
     * - Data items can link data to services such as carbon footprints and carbon inventories.
     * - Depending on the platform configuration, active data on a yearly and monthly basis is supported.
     *  *
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
     * @summary This interface is used to push data items.
     *  *
     * @description - This interface is used for individual data item data.
     * - Data items can link data to services such as carbon footprints and carbon inventories.
     * - Depending on the platform configuration, active data on a yearly and monthly basis is supported.
     *  *
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
     * @summary Recalculate carbon emissions.
     *  *
     * @description - After uploading the data items, you need to call this interface to recalculate the carbon inventory data.
     *  *
     * @param RecalculateCarbonEmissionRequest $request RecalculateCarbonEmissionRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RecalculateCarbonEmissionResponse RecalculateCarbonEmissionResponse
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
     * @summary Recalculate carbon emissions.
     *  *
     * @description - After uploading the data items, you need to call this interface to recalculate the carbon inventory data.
     *  *
     * @param RecalculateCarbonEmissionRequest $request RecalculateCarbonEmissionRequest
     *
     * @return RecalculateCarbonEmissionResponse RecalculateCarbonEmissionResponse
     */
    public function recalculateCarbonEmission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recalculateCarbonEmissionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 在线文档问答
     *  *
     * @param SendDocumentAskQuestionRequest $request SendDocumentAskQuestionRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SendDocumentAskQuestionResponse SendDocumentAskQuestionResponse
     */
    public function sendDocumentAskQuestionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderId)) {
            $body['folderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendDocumentAskQuestion',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aidoc/document/sendDocumentAskQuestion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SendDocumentAskQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在线文档问答
     *  *
     * @param SendDocumentAskQuestionRequest $request SendDocumentAskQuestionRequest
     *
     * @return SendDocumentAskQuestionResponse SendDocumentAskQuestionResponse
     */
    public function sendDocumentAskQuestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendDocumentAskQuestionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取文档结果
     *  *
     * @param SubmitDocumentAnalyzeJobRequest $request SubmitDocumentAnalyzeJobRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDocumentAnalyzeJobResponse SubmitDocumentAnalyzeJobResponse
     */
    public function submitDocumentAnalyzeJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['fileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->folderId)) {
            $query['folderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['templateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDocumentAnalyzeJob',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aidoc/document/submitDocumentAnalyzeJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitDocumentAnalyzeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文档结果
     *  *
     * @param SubmitDocumentAnalyzeJobRequest $request SubmitDocumentAnalyzeJobRequest
     *
     * @return SubmitDocumentAnalyzeJobResponse SubmitDocumentAnalyzeJobResponse
     */
    public function submitDocumentAnalyzeJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitDocumentAnalyzeJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitDocumentAnalyzeJobAdvanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitDocumentAnalyzeJobResponse
     */
    public function submitDocumentAnalyzeJobAdvance($request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'energyExpertExternal',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitDocumentAnalyzeJobReq = new SubmitDocumentAnalyzeJobRequest([]);
        OpenApiUtilClient::convert($request, $submitDocumentAnalyzeJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocumentAnalyzeJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocumentAnalyzeJobWithOptions($submitDocumentAnalyzeJobReq, $headers, $runtime);
    }
}
