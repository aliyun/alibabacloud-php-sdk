<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetMonthAmountRequest;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetMonthAmountResponse;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetUserRequest;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetUserResponse;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListDayAmountRequest;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListDayAmountResponse;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListRechargeBillsRequest;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListRechargeBillsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 获取当月的使用量
     *  *
     * @param GetMonthAmountRequest $request GetMonthAmountRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMonthAmountResponse GetMonthAmountResponse
     */
    public function getMonthAmountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneType)) {
            $query['SceneType'] = $request->sceneType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMonthAmount',
            'version'     => '2022-06-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statistics/month/amount',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMonthAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当月的使用量
     *  *
     * @param GetMonthAmountRequest $request GetMonthAmountRequest
     *
     * @return GetMonthAmountResponse GetMonthAmountResponse
     */
    public function getMonthAmount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonthAmountWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取user相关的appid, token等信息
     *  *
     * @param GetUserRequest $request GetUserRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneType)) {
            $query['SceneType'] = $request->sceneType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2022-06-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/user/info',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取user相关的appid, token等信息
     *  *
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 每天的调用量列表
     *  *
     * @param ListDayAmountRequest $request ListDayAmountRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDayAmountResponse ListDayAmountResponse
     */
    public function listDayAmountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->sceneType)) {
            $query['SceneType'] = $request->sceneType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDayAmount',
            'version'     => '2022-06-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statistics/day/amount',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDayAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 每天的调用量列表
     *  *
     * @param ListDayAmountRequest $request ListDayAmountRequest
     *
     * @return ListDayAmountResponse ListDayAmountResponse
     */
    public function listDayAmount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDayAmountWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 用户充值列表
     *  *
     * @param ListRechargeBillsRequest $request ListRechargeBillsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRechargeBillsResponse ListRechargeBillsResponse
     */
    public function listRechargeBillsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sceneType)) {
            $query['SceneType'] = $request->sceneType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRechargeBills',
            'version'     => '2022-06-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statistics/rechargebills',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRechargeBillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用户充值列表
     *  *
     * @param ListRechargeBillsRequest $request ListRechargeBillsRequest
     *
     * @return ListRechargeBillsResponse ListRechargeBillsResponse
     */
    public function listRechargeBills($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRechargeBillsWithOptions($request, $headers, $runtime);
    }
}
