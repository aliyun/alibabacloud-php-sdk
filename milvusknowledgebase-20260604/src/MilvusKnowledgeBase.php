<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsRequest;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsResponse;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\GetKnowledgeBasePreSignedUrlRequest;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\GetKnowledgeBasePreSignedUrlResponse;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseRequest;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class MilvusKnowledgeBase extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('milvusknowledgebase', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加文档到知识库.
     *
     * @param request - AddDocumentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDocumentsResponse
     *
     * @param string              $datasetId
     * @param AddDocumentsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return AddDocumentsResponse
     */
    public function addDocumentsWithOptions($datasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dedup) {
            @$body['Dedup'] = $request->dedup;
        }

        if (null !== $request->documents) {
            @$body['Documents'] = $request->documents;
        }

        if (null !== $request->importType) {
            @$body['ImportType'] = $request->importType;
        }

        if (null !== $request->knowledgeBaseId) {
            @$body['KnowledgeBaseId'] = $request->knowledgeBaseId;
        }

        if (null !== $request->metaFields) {
            @$body['MetaFields'] = $request->metaFields;
        }

        if (null !== $request->strategyId) {
            @$body['StrategyId'] = $request->strategyId;
        }

        if (null !== $request->dingTalkConfiguration) {
            @$body['dingTalkConfiguration'] = $request->dingTalkConfiguration;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDocuments',
            'version' => '2026-06-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datasets/' . Url::percentEncode($datasetId) . '/documents/addDocuments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加文档到知识库.
     *
     * @param request - AddDocumentsRequest
     *
     * @returns AddDocumentsResponse
     *
     * @param string              $datasetId
     * @param AddDocumentsRequest $request
     *
     * @return AddDocumentsResponse
     */
    public function addDocuments($datasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addDocumentsWithOptions($datasetId, $request, $headers, $runtime);
    }

    /**
     * 获取知识库文件预签名URL.
     *
     * @param request - GetKnowledgeBasePreSignedUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeBasePreSignedUrlResponse
     *
     * @param string                              $datasetId
     * @param GetKnowledgeBasePreSignedUrlRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetKnowledgeBasePreSignedUrlResponse
     */
    public function getKnowledgeBasePreSignedUrlWithOptions($datasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->documents) {
            @$body['Documents'] = $request->documents;
        }

        if (null !== $request->expiresIn) {
            @$body['ExpiresIn'] = $request->expiresIn;
        }

        if (null !== $request->knowledgeBaseId) {
            @$body['KnowledgeBaseId'] = $request->knowledgeBaseId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetKnowledgeBasePreSignedUrl',
            'version' => '2026-06-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datasets/' . Url::percentEncode($datasetId) . '/getKnowledgeBasePreSignedUrl',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeBasePreSignedUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取知识库文件预签名URL.
     *
     * @param request - GetKnowledgeBasePreSignedUrlRequest
     *
     * @returns GetKnowledgeBasePreSignedUrlResponse
     *
     * @param string                              $datasetId
     * @param GetKnowledgeBasePreSignedUrlRequest $request
     *
     * @return GetKnowledgeBasePreSignedUrlResponse
     */
    public function getKnowledgeBasePreSignedUrl($datasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeBasePreSignedUrlWithOptions($datasetId, $request, $headers, $runtime);
    }

    /**
     * Retrieves documents from a knowledge base.
     *
     * @remarks
     * Retrieves documents from a specified knowledge base by question or image. Use DRAFT, LATEST_PUBLISHED, or vN display names for the version. Pass tag filter conditions using the actual backend operators.
     *
     * @param request - SearchKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchKnowledgeBaseResponse
     *
     * @param string                     $knowledgeBaseId
     * @param SearchKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SearchKnowledgeBaseResponse
     */
    public function searchKnowledgeBaseWithOptions($knowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->documentIds) {
            @$body['documentIds'] = $request->documentIds;
        }

        if (null !== $request->enableKnowledgeGraph) {
            @$body['enableKnowledgeGraph'] = $request->enableKnowledgeGraph;
        }

        if (null !== $request->image) {
            @$body['image'] = $request->image;
        }

        if (null !== $request->pageNumber) {
            @$body['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->rerankModelId) {
            @$body['rerankModelId'] = $request->rerankModelId;
        }

        if (null !== $request->rerankModelName) {
            @$body['rerankModelName'] = $request->rerankModelName;
        }

        if (null !== $request->retrievalConfig) {
            @$body['retrievalConfig'] = $request->retrievalConfig;
        }

        if (null !== $request->tagFilter) {
            @$body['tagFilter'] = $request->tagFilter;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchKnowledgeBase',
            'version' => '2026-06-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/knowledge-bases/' . Url::percentEncode($knowledgeBaseId) . '/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves documents from a knowledge base.
     *
     * @remarks
     * Retrieves documents from a specified knowledge base by question or image. Use DRAFT, LATEST_PUBLISHED, or vN display names for the version. Pass tag filter conditions using the actual backend operators.
     *
     * @param request - SearchKnowledgeBaseRequest
     *
     * @returns SearchKnowledgeBaseResponse
     *
     * @param string                     $knowledgeBaseId
     * @param SearchKnowledgeBaseRequest $request
     *
     * @return SearchKnowledgeBaseResponse
     */
    public function searchKnowledgeBase($knowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchKnowledgeBaseWithOptions($knowledgeBaseId, $request, $headers, $runtime);
    }
}
