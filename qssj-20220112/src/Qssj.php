<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetAgeDistributionRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetAgeDistributionResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetAllTrendCategoryResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdLabelRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdLabelResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdReginRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdReginResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetOpportunityMarketRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetOpportunityMarketResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetPriceRangeRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetPriceRangeResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetSexRatioRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetSexRatioResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetStoreSalesVolumeTopRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetStoreSalesVolumeTopResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetStoreSearchTopRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetStoreSearchTopResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetStyleTopRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetStyleTopResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendImageDetailRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendImageDetailResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendImageListRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendImageListResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendIndexRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendIndexResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendSearchRecordRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendSearchRecordResponse;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendStatisticRequest;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendStatisticResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Qssj extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('qssj', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetAgeDistributionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAgeDistributionResponse
     */
    public function getAgeDistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateIds)) {
            $query['CateIds'] = $request->cateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgeDistribution',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgeDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAgeDistributionRequest $request
     *
     * @return GetAgeDistributionResponse
     */
    public function getAgeDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgeDistributionWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetAllTrendCategoryResponse
     */
    public function getAllTrendCategoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAllTrendCategory',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllTrendCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAllTrendCategoryResponse
     */
    public function getAllTrendCategory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllTrendCategoryWithOptions($runtime);
    }

    /**
     * @param GetCrowdLabelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCrowdLabelResponse
     */
    public function getCrowdLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCrowdLabel',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCrowdLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCrowdLabelRequest $request
     *
     * @return GetCrowdLabelResponse
     */
    public function getCrowdLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCrowdLabelWithOptions($request, $runtime);
    }

    /**
     * @param GetCrowdReginRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCrowdReginResponse
     */
    public function getCrowdReginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateIds)) {
            $query['CateIds'] = $request->cateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCrowdRegin',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCrowdReginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCrowdReginRequest $request
     *
     * @return GetCrowdReginResponse
     */
    public function getCrowdRegin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCrowdReginWithOptions($request, $runtime);
    }

    /**
     * @param GetOpportunityMarketRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetOpportunityMarketResponse
     */
    public function getOpportunityMarketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        if (!Utils::isUnset($request->timeDisplay)) {
            $body['TimeDisplay'] = $request->timeDisplay;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOpportunityMarket',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOpportunityMarketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOpportunityMarketRequest $request
     *
     * @return GetOpportunityMarketResponse
     */
    public function getOpportunityMarket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpportunityMarketWithOptions($request, $runtime);
    }

    /**
     * @param GetPriceRangeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPriceRangeResponse
     */
    public function getPriceRangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPriceRange',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPriceRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPriceRangeRequest $request
     *
     * @return GetPriceRangeResponse
     */
    public function getPriceRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPriceRangeWithOptions($request, $runtime);
    }

    /**
     * @param GetSexRatioRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetSexRatioResponse
     */
    public function getSexRatioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateIds)) {
            $query['CateIds'] = $request->cateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSexRatio',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSexRatioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSexRatioRequest $request
     *
     * @return GetSexRatioResponse
     */
    public function getSexRatio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSexRatioWithOptions($request, $runtime);
    }

    /**
     * @param GetStoreSalesVolumeTopRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetStoreSalesVolumeTopResponse
     */
    public function getStoreSalesVolumeTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStoreSalesVolumeTop',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStoreSalesVolumeTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStoreSalesVolumeTopRequest $request
     *
     * @return GetStoreSalesVolumeTopResponse
     */
    public function getStoreSalesVolumeTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStoreSalesVolumeTopWithOptions($request, $runtime);
    }

    /**
     * @param GetStoreSearchTopRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetStoreSearchTopResponse
     */
    public function getStoreSearchTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStoreSearchTop',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStoreSearchTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStoreSearchTopRequest $request
     *
     * @return GetStoreSearchTopResponse
     */
    public function getStoreSearchTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStoreSearchTopWithOptions($request, $runtime);
    }

    /**
     * @param GetStyleTopRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetStyleTopResponse
     */
    public function getStyleTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->timeDisplay)) {
            $body['TimeDisplay'] = $request->timeDisplay;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStyleTop',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStyleTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStyleTopRequest $request
     *
     * @return GetStyleTopResponse
     */
    public function getStyleTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStyleTopWithOptions($request, $runtime);
    }

    /**
     * @param GetTrendImageDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetTrendImageDetailResponse
     */
    public function getTrendImageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aiImgId)) {
            $query['AiImgId'] = $request->aiImgId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrendImageDetail',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrendImageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrendImageDetailRequest $request
     *
     * @return GetTrendImageDetailResponse
     */
    public function getTrendImageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrendImageDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetTrendImageListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTrendImageListResponse
     */
    public function getTrendImageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTrendImageList',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrendImageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrendImageListRequest $request
     *
     * @return GetTrendImageListResponse
     */
    public function getTrendImageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrendImageListWithOptions($request, $runtime);
    }

    /**
     * @param GetTrendIndexRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTrendIndexResponse
     */
    public function getTrendIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        if (!Utils::isUnset($request->monthNum)) {
            $body['MonthNum'] = $request->monthNum;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTrendIndex',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrendIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrendIndexRequest $request
     *
     * @return GetTrendIndexResponse
     */
    public function getTrendIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrendIndexWithOptions($request, $runtime);
    }

    /**
     * @param GetTrendSearchRecordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetTrendSearchRecordResponse
     */
    public function getTrendSearchRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTrendSearchRecord',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrendSearchRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrendSearchRecordRequest $request
     *
     * @return GetTrendSearchRecordResponse
     */
    public function getTrendSearchRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrendSearchRecordWithOptions($request, $runtime);
    }

    /**
     * @param GetTrendStatisticRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTrendStatisticResponse
     */
    public function getTrendStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cateIds)) {
            $body['CateIds'] = $request->cateIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTrendStatistic',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrendStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrendStatisticRequest $request
     *
     * @return GetTrendStatisticResponse
     */
    public function getTrendStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrendStatisticWithOptions($request, $runtime);
    }
}
