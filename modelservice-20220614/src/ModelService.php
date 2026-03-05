<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetMonthAmountRequest;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetMonthAmountResponse;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetUserRequest;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetUserResponse;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListDayAmountRequest;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListDayAmountResponse;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListRechargeBillsRequest;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListRechargeBillsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ModelService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('modelservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取当月的使用量.
     *
     * @param request - GetMonthAmountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonthAmountResponse
     *
     * @param GetMonthAmountRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetMonthAmountResponse
     */
    public function getMonthAmountWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMonthAmount',
            'version' => '2022-06-14',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/statistics/month/amount',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMonthAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取当月的使用量.
     *
     * @param request - GetMonthAmountRequest
     *
     * @returns GetMonthAmountResponse
     *
     * @param GetMonthAmountRequest $request
     *
     * @return GetMonthAmountResponse
     */
    public function getMonthAmount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonthAmountWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取user相关的appid, token等信息.
     *
     * @param request - GetUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2022-06-14',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/user/info',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取user相关的appid, token等信息.
     *
     * @param request - GetUserRequest
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 每天的调用量列表.
     *
     * @param request - ListDayAmountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDayAmountResponse
     *
     * @param ListDayAmountRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListDayAmountResponse
     */
    public function listDayAmountWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDayAmount',
            'version' => '2022-06-14',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/statistics/day/amount',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDayAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 每天的调用量列表.
     *
     * @param request - ListDayAmountRequest
     *
     * @returns ListDayAmountResponse
     *
     * @param ListDayAmountRequest $request
     *
     * @return ListDayAmountResponse
     */
    public function listDayAmount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDayAmountWithOptions($request, $headers, $runtime);
    }

    /**
     * 用户充值列表.
     *
     * @param request - ListRechargeBillsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRechargeBillsResponse
     *
     * @param ListRechargeBillsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListRechargeBillsResponse
     */
    public function listRechargeBillsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRechargeBills',
            'version' => '2022-06-14',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/statistics/rechargebills',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRechargeBillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用户充值列表.
     *
     * @param request - ListRechargeBillsRequest
     *
     * @returns ListRechargeBillsResponse
     *
     * @param ListRechargeBillsRequest $request
     *
     * @return ListRechargeBillsResponse
     */
    public function listRechargeBills($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRechargeBillsWithOptions($request, $headers, $runtime);
    }
}
