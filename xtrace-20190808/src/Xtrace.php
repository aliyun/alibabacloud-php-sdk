<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @summary 检查商业化状态
     *  *
     * @param CheckCommercialStatusRequest $request CheckCommercialStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCommercialStatusResponse CheckCommercialStatusResponse
     */
    public function checkCommercialStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCommercialStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCommercialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查商业化状态
     *  *
     * @param CheckCommercialStatusRequest $request CheckCommercialStatusRequest
     *
     * @return CheckCommercialStatusResponse CheckCommercialStatusResponse
     */
    public function checkCommercialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCommercialStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tag keys.
     *  *
     * @param GetTagKeyRequest $request GetTagKeyRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTagKeyResponse GetTagKeyResponse
     */
    public function getTagKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->spanName)) {
            $query['SpanName'] = $request->spanName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTagKey',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTagKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries tag keys.
     *  *
     * @param GetTagKeyRequest $request GetTagKeyRequest
     *
     * @return GetTagKeyResponse GetTagKeyResponse
     */
    public function getTagKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tag values that correspond to a tag key.
     *  *
     * @param GetTagValRequest $request GetTagValRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTagValResponse GetTagValResponse
     */
    public function getTagValWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->spanName)) {
            $query['SpanName'] = $request->spanName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTagVal',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTagValResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tag values that correspond to a tag key.
     *  *
     * @param GetTagValRequest $request GetTagValRequest
     *
     * @return GetTagValResponse GetTagValResponse
     */
    public function getTagVal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagValWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a trace.
     *  *
     * @param GetTraceRequest $request GetTraceRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTraceResponse GetTraceResponse
     */
    public function getTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->traceID)) {
            $query['TraceID'] = $request->traceID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrace',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a trace.
     *  *
     * @param GetTraceRequest $request GetTraceRequest
     *
     * @return GetTraceResponse GetTraceResponse
     */
    public function getTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP addresses of an application.
     *  *
     * @param ListIpOrHostsRequest $request ListIpOrHostsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpOrHostsResponse ListIpOrHostsResponse
     */
    public function listIpOrHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIpOrHosts',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIpOrHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IP addresses of an application.
     *  *
     * @param ListIpOrHostsRequest $request ListIpOrHostsRequest
     *
     * @return ListIpOrHostsResponse ListIpOrHostsResponse
     */
    public function listIpOrHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpOrHostsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries applications.
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries applications.
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all span names in a specified region or all span names of a microservice.
     *  *
     * @param ListSpanNamesRequest $request ListSpanNamesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSpanNamesResponse ListSpanNamesResponse
     */
    public function listSpanNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSpanNames',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSpanNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all span names in a specified region or all span names of a microservice.
     *  *
     * @param ListSpanNamesRequest $request ListSpanNamesRequest
     *
     * @return ListSpanNamesResponse ListSpanNamesResponse
     */
    public function listSpanNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSpanNamesWithOptions($request, $runtime);
    }

    /**
     * @summary 开通xtrace和对应的sls
     *  *
     * @param OpenXtraceServiceRequest $request OpenXtraceServiceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenXtraceServiceResponse OpenXtraceServiceResponse
     */
    public function openXtraceServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenXtraceService',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenXtraceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开通xtrace和对应的sls
     *  *
     * @param OpenXtraceServiceRequest $request OpenXtraceServiceRequest
     *
     * @return OpenXtraceServiceResponse OpenXtraceServiceResponse
     */
    public function openXtraceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openXtraceServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a metric.
     *  *
     * @param QueryMetricRequest $request QueryMetricRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMetricResponse QueryMetricResponse
     */
    public function queryMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->intervalInSec)) {
            $query['IntervalInSec'] = $request->intervalInSec;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->measures)) {
            $query['Measures'] = $request->measures;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->proxyUserId)) {
            $query['ProxyUserId'] = $request->proxyUserId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMetric',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a metric.
     *  *
     * @param QueryMetricRequest $request QueryMetricRequest
     *
     * @return QueryMetricResponse QueryMetricResponse
     */
    public function queryMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Queries traces by time, application name, IP address, span name, and tag.
     *  *
     * @param SearchTracesRequest $request SearchTracesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchTracesResponse SearchTracesResponse
     */
    public function searchTracesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->minDuration)) {
            $query['MinDuration'] = $request->minDuration;
        }
        if (!Utils::isUnset($request->operationName)) {
            $query['OperationName'] = $request->operationName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->serviceIp)) {
            $query['ServiceIp'] = $request->serviceIp;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTraces',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries traces by time, application name, IP address, span name, and tag.
     *  *
     * @param SearchTracesRequest $request SearchTracesRequest
     *
     * @return SearchTracesResponse SearchTracesResponse
     */
    public function searchTraces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesWithOptions($request, $runtime);
    }
}
