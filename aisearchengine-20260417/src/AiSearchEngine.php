<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchRequest;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchResponse;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\GetDatasetResourceUrlRequest;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\GetDatasetResourceUrlResponse;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\ImportDatasetDataRequest;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\ImportDatasetDataResponse;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\QaChatRequest;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\QaChatResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AiSearchEngine extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aisearchengine', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * AI搜索.
     *
     * @param request - EngineSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EngineSearchResponse
     *
     * @param EngineSearchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return EngineSearchResponse
     */
    public function engineSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->grey) {
            @$body['grey'] = $request->grey;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->recall) {
            @$body['recall'] = $request->recall;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->strategyId) {
            @$body['strategyId'] = $request->strategyId;
        }

        if (null !== $request->user) {
            @$body['user'] = $request->user;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EngineSearch',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/platform/app/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EngineSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI搜索.
     *
     * @param request - EngineSearchRequest
     *
     * @returns EngineSearchResponse
     *
     * @param EngineSearchRequest $request
     *
     * @return EngineSearchResponse
     */
    public function engineSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->engineSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取数据集资源 OSS 访问地址
     *
     * @param request - GetDatasetResourceUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasetResourceUrlResponse
     *
     * @param GetDatasetResourceUrlRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetDatasetResourceUrlResponse
     */
    public function getDatasetResourceUrlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['datasetId'] = $request->datasetId;
        }

        if (null !== $request->primaryKey) {
            @$body['primaryKey'] = $request->primaryKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDatasetResourceUrl',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/dataset/open/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatasetResourceUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集资源 OSS 访问地址
     *
     * @param request - GetDatasetResourceUrlRequest
     *
     * @returns GetDatasetResourceUrlResponse
     *
     * @param GetDatasetResourceUrlRequest $request
     *
     * @return GetDatasetResourceUrlResponse
     */
    public function getDatasetResourceUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetResourceUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交单条记录导入任务
     *
     * @param request - ImportDatasetDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportDatasetDataResponse
     *
     * @param ImportDatasetDataRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ImportDatasetDataResponse
     */
    public function importDatasetDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['datasetId'] = $request->datasetId;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportDatasetData',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/dataset/open/upsert',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ImportDatasetDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交单条记录导入任务
     *
     * @param request - ImportDatasetDataRequest
     *
     * @returns ImportDatasetDataResponse
     *
     * @param ImportDatasetDataRequest $request
     *
     * @return ImportDatasetDataResponse
     */
    public function importDatasetData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importDatasetDataWithOptions($request, $headers, $runtime);
    }

    /**
     * AI问答对话.
     *
     * @param request - QaChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QaChatResponse
     *
     * @param QaChatRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QaChatResponse
     */
    public function qaChatWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QaChat',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/platform/app/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield QaChatResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * AI问答对话.
     *
     * @param request - QaChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QaChatResponse
     *
     * @param QaChatRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QaChatResponse
     */
    public function qaChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QaChat',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/platform/app/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QaChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI问答对话.
     *
     * @param request - QaChatRequest
     *
     * @returns QaChatResponse
     *
     * @param QaChatRequest $request
     *
     * @return QaChatResponse
     */
    public function qaChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->qaChatWithOptions($request, $headers, $runtime);
    }
}
