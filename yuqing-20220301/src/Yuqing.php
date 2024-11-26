<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 关闭舆情产品
     *  *
     * @param CloseProductRequest $request CloseProductRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseProductResponse CloseProductResponse
     */
    public function closeProductWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['requestId'] = $request->requestId;
        }
        $body = [];
        if (!Utils::isUnset($request->productInstance)) {
            $body['productInstance'] = $request->productInstance;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloseProduct',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/aliyun/closeProduct.json',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭舆情产品
     *  *
     * @param CloseProductRequest $request CloseProductRequest
     *
     * @return CloseProductResponse CloseProductResponse
     */
    public function closeProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 控制台统一代理API
     *  *
     * @param ConsoleApiProxyRequest $request ConsoleApiProxyRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConsoleApiProxyResponse ConsoleApiProxyResponse
     */
    public function consoleApiProxyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ConsoleApiProxy',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/aliyun/consoleApiProxy.json',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConsoleApiProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 控制台统一代理API
     *  *
     * @param ConsoleApiProxyRequest $request ConsoleApiProxyRequest
     *
     * @return ConsoleApiProxyResponse ConsoleApiProxyResponse
     */
    public function consoleApiProxy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->consoleApiProxyWithOptions($request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI ConsoleProxy is deprecated
     *  *
     * @summary 控制台统一代理API
     *  *
     * Deprecated
     *
     * @param ConsoleProxyRequest $request ConsoleProxyRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ConsoleProxyResponse ConsoleProxyResponse
     */
    public function consoleProxyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['requestId'] = $request->requestId;
        }
        $body = [];
        if (!Utils::isUnset($request->appCode)) {
            $body['appCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->interfaceName)) {
            $body['interfaceName'] = $request->interfaceName;
        }
        if (!Utils::isUnset($request->paramJson)) {
            $body['paramJson'] = $request->paramJson;
        }
        if (!Utils::isUnset($request->teamHashId)) {
            $body['teamHashId'] = $request->teamHashId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConsoleProxy',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/aliyun/consoleProxy.json',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConsoleProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI ConsoleProxy is deprecated
     *  *
     * @summary 控制台统一代理API
     *  *
     * Deprecated
     *
     * @param ConsoleProxyRequest $request ConsoleProxyRequest
     *
     * @return ConsoleProxyResponse ConsoleProxyResponse
     */
    public function consoleProxy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->consoleProxyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 读取分析组件计算任务结果
     *  *
     * @param GetAnalysisTaskResultRequest $request GetAnalysisTaskResultRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAnalysisTaskResultResponse GetAnalysisTaskResultResponse
     */
    public function getAnalysisTaskResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisId)) {
            $query['analysisId'] = $request->analysisId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->teamHashId)) {
            $query['teamHashId'] = $request->teamHashId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAnalysisTaskResult',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/aliyun/getAnalysisComponentResult.json',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAnalysisTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 读取分析组件计算任务结果
     *  *
     * @param GetAnalysisTaskResultRequest $request GetAnalysisTaskResultRequest
     *
     * @return GetAnalysisTaskResultResponse GetAnalysisTaskResultResponse
     */
    public function getAnalysisTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAnalysisTaskResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 开通舆情产品
     *  *
     * @param OpenProductRequest $request OpenProductRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenProductResponse OpenProductResponse
     */
    public function openProductWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['requestId'] = $request->requestId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->productInstance)) {
            $body['productInstance'] = $request->productInstance;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenProduct',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/aliyun/openProduct.json',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开通舆情产品
     *  *
     * @param OpenProductRequest $request OpenProductRequest
     *
     * @return OpenProductResponse OpenProductResponse
     */
    public function openProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询产品开通实例列表
     *  *
     * @param QueryProductInstanceListRequest $request QueryProductInstanceListRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryProductInstanceListResponse QueryProductInstanceListResponse
     */
    public function queryProductInstanceListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCode)) {
            $query['appCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->fromTime)) {
            $query['fromTime'] = $request->fromTime;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->tenantUid)) {
            $query['tenantUid'] = $request->tenantUid;
        }
        if (!Utils::isUnset($request->toTime)) {
            $query['toTime'] = $request->toTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProductInstanceList',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/aliyun/queryProductInstanceList.json',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryProductInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询产品开通实例列表
     *  *
     * @param QueryProductInstanceListRequest $request QueryProductInstanceListRequest
     *
     * @return QueryProductInstanceListResponse QueryProductInstanceListResponse
     */
    public function queryProductInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProductInstanceListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询舆情文章列表
     *  *
     * @param QueryYuqingMessageRequest $request QueryYuqingMessageRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryYuqingMessageResponse QueryYuqingMessageResponse
     */
    public function queryYuqingMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['requestId'] = $request->requestId;
        }
        $body = [];
        if (!Utils::isUnset($request->searchCondition)) {
            $body['searchCondition'] = $request->searchCondition;
        }
        if (!Utils::isUnset($request->teamHashId)) {
            $body['teamHashId'] = $request->teamHashId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryYuqingMessage',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/aliyun/queryYuqingMessage.json',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryYuqingMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询舆情文章列表
     *  *
     * @param QueryYuqingMessageRequest $request QueryYuqingMessageRequest
     *
     * @return QueryYuqingMessageResponse QueryYuqingMessageResponse
     */
    public function queryYuqingMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryYuqingMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 提交分析组件计算任务
     *  *
     * @param SubmitAnalysisTaskRequest $request SubmitAnalysisTaskRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAnalysisTaskResponse SubmitAnalysisTaskResponse
     */
    public function submitAnalysisTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['requestId'] = $request->requestId;
        }
        $body = [];
        if (!Utils::isUnset($request->analyseType)) {
            $body['analyseType'] = $request->analyseType;
        }
        if (!Utils::isUnset($request->searchCondition)) {
            $body['searchCondition'] = $request->searchCondition;
        }
        if (!Utils::isUnset($request->teamHashId)) {
            $body['teamHashId'] = $request->teamHashId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitAnalysisTask',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/aliyun/submitAnalysisComponent.json',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交分析组件计算任务
     *  *
     * @param SubmitAnalysisTaskRequest $request SubmitAnalysisTaskRequest
     *
     * @return SubmitAnalysisTaskResponse SubmitAnalysisTaskResponse
     */
    public function submitAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitAnalysisTaskWithOptions($request, $headers, $runtime);
    }
}
