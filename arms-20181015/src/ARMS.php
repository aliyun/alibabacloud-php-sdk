<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20181015;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ARMS\V20181015\Models\ARMSQueryDataSetRequest;
use AlibabaCloud\SDK\ARMS\V20181015\Models\ARMSQueryDataSetResponse;
use AlibabaCloud\SDK\ARMS\V20181015\Models\MetricQueryRequest;
use AlibabaCloud\SDK\ARMS\V20181015\Models\MetricQueryResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ARMS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'arms.aliyuncs.com',
            'cn-beijing-finance-1' => 'arms.aliyuncs.com',
            'cn-beijing-finance-pop' => 'arms.aliyuncs.com',
            'cn-beijing-gov-1' => 'arms.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'arms.aliyuncs.com',
            'cn-edge-1' => 'arms.aliyuncs.com',
            'cn-fujian' => 'arms.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'arms.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'arms.aliyuncs.com',
            'cn-hangzhou-test-306' => 'arms.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'arms.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'arms.aliyuncs.com',
            'cn-qingdao-nebula' => 'arms.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'arms.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'arms.aliyuncs.com',
            'cn-shanghai-inner' => 'arms.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'arms.aliyuncs.com',
            'cn-shenzhen-inner' => 'arms.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'arms.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'arms.aliyuncs.com',
            'cn-wuhan' => 'arms.aliyuncs.com',
            'cn-yushanfang' => 'arms.aliyuncs.com',
            'cn-zhangbei' => 'arms.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'arms.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'arms.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'arms.aliyuncs.com',
            'eu-west-1-oxs' => 'arms.aliyuncs.com',
            'me-east-1' => 'arms.aliyuncs.com',
            'rus-west-1-pop' => 'arms.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('arms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - ARMSQueryDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ARMSQueryDataSetResponse
     *
     * @param ARMSQueryDataSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ARMSQueryDataSetResponse
     */
    public function aRMSQueryDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->dateStr) {
            @$query['DateStr'] = $request->dateStr;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->hackerUserId) {
            @$query['HackerUserId'] = $request->hackerUserId;
        }

        if (null !== $request->hungryMode) {
            @$query['HungryMode'] = $request->hungryMode;
        }

        if (null !== $request->intervalInSec) {
            @$query['IntervalInSec'] = $request->intervalInSec;
        }

        if (null !== $request->isDrillDown) {
            @$query['IsDrillDown'] = $request->isDrillDown;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->maxTime) {
            @$query['MaxTime'] = $request->maxTime;
        }

        if (null !== $request->measures) {
            @$query['Measures'] = $request->measures;
        }

        if (null !== $request->minTime) {
            @$query['MinTime'] = $request->minTime;
        }

        if (null !== $request->optionalDims) {
            @$query['OptionalDims'] = $request->optionalDims;
        }

        if (null !== $request->orderByKey) {
            @$query['OrderByKey'] = $request->orderByKey;
        }

        if (null !== $request->reduceTail) {
            @$query['ReduceTail'] = $request->reduceTail;
        }

        if (null !== $request->requiredDims) {
            @$query['RequiredDims'] = $request->requiredDims;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ARMSQueryDataSet',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ARMSQueryDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ARMSQueryDataSetRequest
     *
     * @returns ARMSQueryDataSetResponse
     *
     * @param ARMSQueryDataSetRequest $request
     *
     * @return ARMSQueryDataSetResponse
     */
    public function aRMSQueryDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aRMSQueryDataSetWithOptions($request, $runtime);
    }

    /**
     * @param request - MetricQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MetricQueryResponse
     *
     * @param MetricQueryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MetricQueryResponse
     */
    public function metricQueryWithOptions($request, $runtime)
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

        if (null !== $request->hackerUserId) {
            @$query['HackerUserId'] = $request->hackerUserId;
        }

        if (null !== $request->iintervalInSec) {
            @$query['IintervalInSec'] = $request->iintervalInSec;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MetricQuery',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MetricQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MetricQueryRequest
     *
     * @returns MetricQueryResponse
     *
     * @param MetricQueryRequest $request
     *
     * @return MetricQueryResponse
     */
    public function metricQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->metricQueryWithOptions($request, $runtime);
    }
}
