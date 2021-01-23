<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagKeyRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagKeyResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagValRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagValResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTokenRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTokenResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceAnalysisRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceAnalysisResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\QueryMetricRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\QueryMetricResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Xtrace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('xtrace', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetTagKeyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetTagKeyResponse
     */
    public function getTagKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTagKeyResponse::fromMap($this->doRPCRequest('GetTagKey', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTagKeyRequest $request
     *
     * @return GetTagKeyResponse
     */
    public function getTagKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagKeyWithOptions($request, $runtime);
    }

    /**
     * @param GetTagValRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetTagValResponse
     */
    public function getTagValWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTagValResponse::fromMap($this->doRPCRequest('GetTagVal', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTagValRequest $request
     *
     * @return GetTagValResponse
     */
    public function getTagVal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagValWithOptions($request, $runtime);
    }

    /**
     * @param GetTokenRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTokenResponse::fromMap($this->doRPCRequest('GetToken', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetTraceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTraceResponse
     */
    public function getTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTraceResponse::fromMap($this->doRPCRequest('GetTrace', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTraceRequest $request
     *
     * @return GetTraceResponse
     */
    public function getTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceWithOptions($request, $runtime);
    }

    /**
     * @param GetTraceAnalysisRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTraceAnalysisResponse
     */
    public function getTraceAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTraceAnalysisResponse::fromMap($this->doRPCRequest('GetTraceAnalysis', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTraceAnalysisRequest $request
     *
     * @return GetTraceAnalysisResponse
     */
    public function getTraceAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceAnalysisWithOptions($request, $runtime);
    }

    /**
     * @param ListIpOrHostsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListIpOrHostsResponse
     */
    public function listIpOrHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIpOrHostsResponse::fromMap($this->doRPCRequest('ListIpOrHosts', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIpOrHostsRequest $request
     *
     * @return ListIpOrHostsResponse
     */
    public function listIpOrHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpOrHostsWithOptions($request, $runtime);
    }

    /**
     * @param ListServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServicesResponse::fromMap($this->doRPCRequest('ListServices', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * @param ListSpanNamesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSpanNamesResponse
     */
    public function listSpanNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSpanNamesResponse::fromMap($this->doRPCRequest('ListSpanNames', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSpanNamesRequest $request
     *
     * @return ListSpanNamesResponse
     */
    public function listSpanNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSpanNamesWithOptions($request, $runtime);
    }

    /**
     * @param QueryMetricRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryMetricResponse
     */
    public function queryMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMetricResponse::fromMap($this->doRPCRequest('QueryMetric', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMetricRequest $request
     *
     * @return QueryMetricResponse
     */
    public function queryMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricWithOptions($request, $runtime);
    }

    /**
     * @param SearchTracesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchTracesResponse
     */
    public function searchTracesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTracesResponse::fromMap($this->doRPCRequest('SearchTraces', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchTracesRequest $request
     *
     * @return SearchTracesResponse
     */
    public function searchTraces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesWithOptions($request, $runtime);
    }
}
