<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\AllowResponse;
use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\GetSummaryDataRequest;
use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\GetSummaryDataResponse;
use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\QueryCarbonTrackRequest;
use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\QueryCarbonTrackResponse;
use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\QueryMultiAccountCarbonTrackRequest;
use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\QueryMultiAccountCarbonTrackResponse;
use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\VerifyResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CarbonFootprint extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('carbonfootprint', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RuntimeOptions $runtime
     *
     * @return AllowResponse
     */
    public function allowWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'Allow',
            'version'     => '2023-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return AllowResponse
     */
    public function allow()
    {
        $runtime = new RuntimeOptions([]);

        return $this->allowWithOptions($runtime);
    }

    /**
     * @param GetSummaryDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSummaryDataResponse
     */
    public function getSummaryDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSummaryData',
            'version'     => '2023-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSummaryDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSummaryDataRequest $request
     *
     * @return GetSummaryDataResponse
     */
    public function getSummaryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSummaryDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryCarbonTrackRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryCarbonTrackResponse
     */
    public function queryCarbonTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCarbonTrack',
            'version'     => '2023-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCarbonTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCarbonTrackRequest $request
     *
     * @return QueryCarbonTrackResponse
     */
    public function queryCarbonTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCarbonTrackWithOptions($request, $runtime);
    }

    /**
     * @param QueryMultiAccountCarbonTrackRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryMultiAccountCarbonTrackResponse
     */
    public function queryMultiAccountCarbonTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMultiAccountCarbonTrack',
            'version'     => '2023-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMultiAccountCarbonTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMultiAccountCarbonTrackRequest $request
     *
     * @return QueryMultiAccountCarbonTrackResponse
     */
    public function queryMultiAccountCarbonTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMultiAccountCarbonTrackWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return VerifyResponse
     */
    public function verifyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'Verify',
            'version'     => '2023-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return VerifyResponse
     */
    public function verify()
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyWithOptions($runtime);
    }
}
