<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\CheckCommercialStatusRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\CheckCommercialStatusResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagKeyRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagKeyResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagValRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagValResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\OpenXtraceServiceRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\OpenXtraceServiceResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\QueryMetricRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\QueryMetricResponse;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesRequest;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 检查商业化状态
     *
     * @param request - CheckCommercialStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCommercialStatusResponse
     *
     * @param CheckCommercialStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckCommercialStatusResponse
     */
    public function checkCommercialStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCommercialStatus',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCommercialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查商业化状态
     *
     * @param request - CheckCommercialStatusRequest
     *
     * @returns CheckCommercialStatusResponse
     *
     * @param CheckCommercialStatusRequest $request
     *
     * @return CheckCommercialStatusResponse
     */
    public function checkCommercialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCommercialStatusWithOptions($request, $runtime);
    }

    /**
     * Queries tag keys.
     *
     * @param request - GetTagKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTagKeyResponse
     *
     * @param GetTagKeyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetTagKeyResponse
     */
    public function getTagKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->spanName) {
            @$query['SpanName'] = $request->spanName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTagKey',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTagKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tag keys.
     *
     * @param request - GetTagKeyRequest
     *
     * @returns GetTagKeyResponse
     *
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
     * Queries the tag values that correspond to a tag key.
     *
     * @param request - GetTagValRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTagValResponse
     *
     * @param GetTagValRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetTagValResponse
     */
    public function getTagValWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->spanName) {
            @$query['SpanName'] = $request->spanName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTagVal',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTagValResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tag values that correspond to a tag key.
     *
     * @param request - GetTagValRequest
     *
     * @returns GetTagValResponse
     *
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
     * Queries the details of a trace.
     *
     * @param request - GetTraceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTraceResponse
     *
     * @param GetTraceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTraceResponse
     */
    public function getTraceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->traceID) {
            @$query['TraceID'] = $request->traceID;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrace',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a trace.
     *
     * @param request - GetTraceRequest
     *
     * @returns GetTraceResponse
     *
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
     * Queries IP addresses or hostnames in trace data. You can obtain all IP addresses of an application or in a region.
     *
     * @param request - ListIpOrHostsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpOrHostsResponse
     *
     * @param ListIpOrHostsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListIpOrHostsResponse
     */
    public function listIpOrHostsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpOrHosts',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpOrHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries IP addresses or hostnames in trace data. You can obtain all IP addresses of an application or in a region.
     *
     * @param request - ListIpOrHostsRequest
     *
     * @returns ListIpOrHostsResponse
     *
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
     * Queries applications.
     *
     * @param request - ListServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries applications.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
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
     * Queries all span names in a specified region or all span names of a microservice.
     *
     * @param request - ListSpanNamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSpanNamesResponse
     *
     * @param ListSpanNamesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSpanNamesResponse
     */
    public function listSpanNamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSpanNames',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSpanNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all span names in a specified region or all span names of a microservice.
     *
     * @param request - ListSpanNamesRequest
     *
     * @returns ListSpanNamesResponse
     *
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
     * Activates Managed Service for OpenTelemetry.
     *
     * @param request - OpenXtraceServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenXtraceServiceResponse
     *
     * @param OpenXtraceServiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OpenXtraceServiceResponse
     */
    public function openXtraceServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenXtraceService',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenXtraceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates Managed Service for OpenTelemetry.
     *
     * @param request - OpenXtraceServiceRequest
     *
     * @returns OpenXtraceServiceResponse
     *
     * @param OpenXtraceServiceRequest $request
     *
     * @return OpenXtraceServiceResponse
     */
    public function openXtraceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openXtraceServiceWithOptions($request, $runtime);
    }

    /**
     * Queries a metric.
     *
     * @param request - QueryMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMetricResponse
     *
     * @param QueryMetricRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryMetricResponse
     */
    public function queryMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->intervalInSec) {
            @$query['IntervalInSec'] = $request->intervalInSec;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->measures) {
            @$query['Measures'] = $request->measures;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->proxyUserId) {
            @$query['ProxyUserId'] = $request->proxyUserId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMetric',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a metric.
     *
     * @param request - QueryMetricRequest
     *
     * @returns QueryMetricResponse
     *
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
     * Queries traces by time, application name, IP address, span name, and tag.
     *
     * @param request - SearchTracesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchTracesResponse
     *
     * @param SearchTracesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchTracesResponse
     */
    public function searchTracesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->minDuration) {
            @$query['MinDuration'] = $request->minDuration;
        }

        if (null !== $request->operationName) {
            @$query['OperationName'] = $request->operationName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->serviceIp) {
            @$query['ServiceIp'] = $request->serviceIp;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statusCode) {
            @$query['StatusCode'] = $request->statusCode;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchTraces',
            'version' => '2019-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries traces by time, application name, IP address, span name, and tag.
     *
     * @param request - SearchTracesRequest
     *
     * @returns SearchTracesResponse
     *
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
