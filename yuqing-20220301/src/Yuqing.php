<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\CloseProductRequest;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\CloseProductResponse;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\ConsoleApiProxyRequest;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\ConsoleApiProxyResponse;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\ConsoleProxyRequest;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\ConsoleProxyResponse;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\GetAnalysisTaskResultRequest;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\GetAnalysisTaskResultResponse;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\OpenProductRequest;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\OpenProductResponse;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\QueryProductInstanceListRequest;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\QueryProductInstanceListResponse;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\QueryYuqingMessageRequest;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\QueryYuqingMessageResponse;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\SubmitAnalysisTaskRequest;
use AlibabaCloud\SDK\Yuqing\V20220301\Models\SubmitAnalysisTaskResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Yuqing extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yuqing', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 关闭舆情产品
     *
     * @param request - CloseProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseProductResponse
     *
     * @param CloseProductRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CloseProductResponse
     */
    public function closeProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->productInstance) {
            @$body['productInstance'] = $request->productInstance;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloseProduct',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/aliyun/closeProduct.json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭舆情产品
     *
     * @param request - CloseProductRequest
     *
     * @returns CloseProductResponse
     *
     * @param CloseProductRequest $request
     *
     * @return CloseProductResponse
     */
    public function closeProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeProductWithOptions($request, $headers, $runtime);
    }

    /**
     * 控制台统一代理API.
     *
     * @param request - ConsoleApiProxyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConsoleApiProxyResponse
     *
     * @param ConsoleApiProxyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ConsoleApiProxyResponse
     */
    public function consoleApiProxyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ConsoleApiProxy',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/aliyun/consoleApiProxy.json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ConsoleApiProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 控制台统一代理API.
     *
     * @param request - ConsoleApiProxyRequest
     *
     * @returns ConsoleApiProxyResponse
     *
     * @param ConsoleApiProxyRequest $request
     *
     * @return ConsoleApiProxyResponse
     */
    public function consoleApiProxy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->consoleApiProxyWithOptions($request, $headers, $runtime);
    }

    /**
     * 控制台统一代理API.
     *
     * @deprecated OpenAPI ConsoleProxy is deprecated
     *
     * @param request - ConsoleProxyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConsoleProxyResponse
     *
     * @param ConsoleProxyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ConsoleProxyResponse
     */
    public function consoleProxyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->appCode) {
            @$body['appCode'] = $request->appCode;
        }

        if (null !== $request->interfaceName) {
            @$body['interfaceName'] = $request->interfaceName;
        }

        if (null !== $request->paramJson) {
            @$body['paramJson'] = $request->paramJson;
        }

        if (null !== $request->teamHashId) {
            @$body['teamHashId'] = $request->teamHashId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConsoleProxy',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/aliyun/consoleProxy.json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConsoleProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 控制台统一代理API.
     *
     * @deprecated OpenAPI ConsoleProxy is deprecated
     *
     * @param request - ConsoleProxyRequest
     *
     * @returns ConsoleProxyResponse
     *
     * @param ConsoleProxyRequest $request
     *
     * @return ConsoleProxyResponse
     */
    public function consoleProxy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->consoleProxyWithOptions($request, $headers, $runtime);
    }

    /**
     * 读取分析组件计算任务结果.
     *
     * @param request - GetAnalysisTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAnalysisTaskResultResponse
     *
     * @param GetAnalysisTaskResultRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetAnalysisTaskResultResponse
     */
    public function getAnalysisTaskResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisId) {
            @$query['analysisId'] = $request->analysisId;
        }

        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        if (null !== $request->teamHashId) {
            @$query['teamHashId'] = $request->teamHashId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAnalysisTaskResult',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/aliyun/getAnalysisComponentResult.json',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAnalysisTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 读取分析组件计算任务结果.
     *
     * @param request - GetAnalysisTaskResultRequest
     *
     * @returns GetAnalysisTaskResultResponse
     *
     * @param GetAnalysisTaskResultRequest $request
     *
     * @return GetAnalysisTaskResultResponse
     */
    public function getAnalysisTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAnalysisTaskResultWithOptions($request, $headers, $runtime);
    }

    /**
     * 开通舆情产品
     *
     * @param request - OpenProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenProductResponse
     *
     * @param OpenProductRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return OpenProductResponse
     */
    public function openProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->productInstance) {
            @$body['productInstance'] = $request->productInstance;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OpenProduct',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/aliyun/openProduct.json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通舆情产品
     *
     * @param request - OpenProductRequest
     *
     * @returns OpenProductResponse
     *
     * @param OpenProductRequest $request
     *
     * @return OpenProductResponse
     */
    public function openProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openProductWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询产品开通实例列表.
     *
     * @param request - QueryProductInstanceListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProductInstanceListResponse
     *
     * @param QueryProductInstanceListRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryProductInstanceListResponse
     */
    public function queryProductInstanceListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['appCode'] = $request->appCode;
        }

        if (null !== $request->fromTime) {
            @$query['fromTime'] = $request->fromTime;
        }

        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        if (null !== $request->tenantUid) {
            @$query['tenantUid'] = $request->tenantUid;
        }

        if (null !== $request->toTime) {
            @$query['toTime'] = $request->toTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryProductInstanceList',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/aliyun/queryProductInstanceList.json',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryProductInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询产品开通实例列表.
     *
     * @param request - QueryProductInstanceListRequest
     *
     * @returns QueryProductInstanceListResponse
     *
     * @param QueryProductInstanceListRequest $request
     *
     * @return QueryProductInstanceListResponse
     */
    public function queryProductInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProductInstanceListWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询舆情文章列表.
     *
     * @param request - QueryYuqingMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryYuqingMessageResponse
     *
     * @param QueryYuqingMessageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryYuqingMessageResponse
     */
    public function queryYuqingMessageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->searchCondition) {
            @$body['searchCondition'] = $request->searchCondition;
        }

        if (null !== $request->teamHashId) {
            @$body['teamHashId'] = $request->teamHashId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryYuqingMessage',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/aliyun/queryYuqingMessage.json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryYuqingMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询舆情文章列表.
     *
     * @param request - QueryYuqingMessageRequest
     *
     * @returns QueryYuqingMessageResponse
     *
     * @param QueryYuqingMessageRequest $request
     *
     * @return QueryYuqingMessageResponse
     */
    public function queryYuqingMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryYuqingMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交分析组件计算任务
     *
     * @param request - SubmitAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAnalysisTaskResponse
     *
     * @param SubmitAnalysisTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitAnalysisTaskResponse
     */
    public function submitAnalysisTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->analyseType) {
            @$body['analyseType'] = $request->analyseType;
        }

        if (null !== $request->searchCondition) {
            @$body['searchCondition'] = $request->searchCondition;
        }

        if (null !== $request->teamHashId) {
            @$body['teamHashId'] = $request->teamHashId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitAnalysisTask',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/aliyun/submitAnalysisComponent.json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交分析组件计算任务
     *
     * @param request - SubmitAnalysisTaskRequest
     *
     * @returns SubmitAnalysisTaskResponse
     *
     * @param SubmitAnalysisTaskRequest $request
     *
     * @return SubmitAnalysisTaskResponse
     */
    public function submitAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitAnalysisTaskWithOptions($request, $headers, $runtime);
    }
}
