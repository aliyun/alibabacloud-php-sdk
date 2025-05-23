<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddCategoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddCategoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateMemoryNodeRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateMemoryNodeResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateMemoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateMemoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreatePromptTemplateRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreatePromptTemplateResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteMemoryNodeResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteMemoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeletePromptTemplateResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DescribeFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetMemoryNodeResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetMemoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetPromptTemplateResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetPublishedAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListChunksRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListChunksResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexDocumentsRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexDocumentsResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoriesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoriesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoryNodesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoryNodesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPromptTemplatesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPromptTemplatesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexJobRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexJobResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateFileTagRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateFileTagResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateFileTagShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateMemoryNodeRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateMemoryNodeResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateMemoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateMemoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdatePromptTemplateRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdatePromptTemplateResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Bailian extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailian', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加类目.
     *
     * @param request - AddCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCategoryResponse
     *
     * @param string             $WorkspaceId
     * @param AddCategoryRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddCategoryResponse
     */
    public function addCategoryWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryName) {
            @$body['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->parentCategoryId) {
            @$body['ParentCategoryId'] = $request->parentCategoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddCategory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/category/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加类目.
     *
     * @param request - AddCategoryRequest
     *
     * @returns AddCategoryResponse
     *
     * @param string             $WorkspaceId
     * @param AddCategoryRequest $request
     *
     * @return AddCategoryResponse
     */
    public function addCategory($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addCategoryWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Imports an unstructured document stored in the temporary storage space to Data Management. You cannot use the API to import structured documents. Use the console instead.
     *
     * @remarks
     *   Before you call this operation, make sure that you have obtained the lease and uploaded the document to the temporary storage space by using the [ApplyFileUploadLease](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-applyfileuploadlease) operation. For more information, see [Upload files by calling API](https://www.alibabacloud.com/help/en/model-studio/developer-reference/upload-files-by-calling-api).
     * >  After you call this operation, the used lease ID expires immediately. Do not use the same lease ID to submit new requests.
     * *   You must call this operation within 12 hours after you call the [ApplyFileUploadLease](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-applyfileuploadlease) operation. Otherwise, the lease expires and the request fails.
     * *   After you call this operation, the system parses and imports your document. The process takes some time.
     * *   This interface is not idempotent.
     *
     * @param tmpReq - AddFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFileResponse
     *
     * @param string         $WorkspaceId
     * @param AddFileRequest $tmpReq
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AddFileResponse
     */
    public function addFileWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddFileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->leaseId) {
            @$body['LeaseId'] = $request->leaseId;
        }

        if (null !== $request->originalFileUrl) {
            @$body['OriginalFileUrl'] = $request->originalFileUrl;
        }

        if (null !== $request->parser) {
            @$body['Parser'] = $request->parser;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFile',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports an unstructured document stored in the temporary storage space to Data Management. You cannot use the API to import structured documents. Use the console instead.
     *
     * @remarks
     *   Before you call this operation, make sure that you have obtained the lease and uploaded the document to the temporary storage space by using the [ApplyFileUploadLease](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-applyfileuploadlease) operation. For more information, see [Upload files by calling API](https://www.alibabacloud.com/help/en/model-studio/developer-reference/upload-files-by-calling-api).
     * >  After you call this operation, the used lease ID expires immediately. Do not use the same lease ID to submit new requests.
     * *   You must call this operation within 12 hours after you call the [ApplyFileUploadLease](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-applyfileuploadlease) operation. Otherwise, the lease expires and the request fails.
     * *   After you call this operation, the system parses and imports your document. The process takes some time.
     * *   This interface is not idempotent.
     *
     * @param request - AddFileRequest
     *
     * @returns AddFileResponse
     *
     * @param string         $WorkspaceId
     * @param AddFileRequest $request
     *
     * @return AddFileResponse
     */
    public function addFile($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFileWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Applies for a document upload lease to upload a document.
     *
     * @remarks
     *   This operation returns an HTTP URL that can be used to upload an unstructured document (the lease) and parameters required for the upload. Structured documents are not supported.
     * *   The HTTP URL returned by this operation is valid only for minutes. Upload the document before the URL expires.
     * *   After you apply for a lease and upload a document, the document is stored in a temporary storage space for 12 hours.
     * *   This interface is not idempotent.
     *
     * @param request - ApplyFileUploadLeaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyFileUploadLeaseResponse
     *
     * @param string                      $CategoryId
     * @param string                      $WorkspaceId
     * @param ApplyFileUploadLeaseRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ApplyFileUploadLeaseResponse
     */
    public function applyFileUploadLeaseWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->md5) {
            @$body['Md5'] = $request->md5;
        }

        if (null !== $request->sizeInBytes) {
            @$body['SizeInBytes'] = $request->sizeInBytes;
        }

        if (null !== $request->useInternalEndpoint) {
            @$body['UseInternalEndpoint'] = $request->useInternalEndpoint;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyFileUploadLease',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/category/' . Url::percentEncode($CategoryId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyFileUploadLeaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for a document upload lease to upload a document.
     *
     * @remarks
     *   This operation returns an HTTP URL that can be used to upload an unstructured document (the lease) and parameters required for the upload. Structured documents are not supported.
     * *   The HTTP URL returned by this operation is valid only for minutes. Upload the document before the URL expires.
     * *   After you apply for a lease and upload a document, the document is stored in a temporary storage space for 12 hours.
     * *   This interface is not idempotent.
     *
     * @param request - ApplyFileUploadLeaseRequest
     *
     * @returns ApplyFileUploadLeaseResponse
     *
     * @param string                      $CategoryId
     * @param string                      $WorkspaceId
     * @param ApplyFileUploadLeaseRequest $request
     *
     * @return ApplyFileUploadLeaseResponse
     */
    public function applyFileUploadLease($CategoryId, $WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyFileUploadLeaseWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建并发布智能体应用.
     *
     * @param tmpReq - CreateAndPulishAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndPulishAgentResponse
     *
     * @param string                      $workspaceId
     * @param CreateAndPulishAgentRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateAndPulishAgentResponse
     */
    public function createAndPulishAgentWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAndPulishAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationConfig) {
            $request->applicationConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationConfig, 'applicationConfig', 'json');
        }

        if (null !== $tmpReq->sampleLibrary) {
            $request->sampleLibraryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sampleLibrary, 'sampleLibrary', 'json');
        }

        $body = [];
        if (null !== $request->applicationConfigShrink) {
            @$body['applicationConfig'] = $request->applicationConfigShrink;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->sampleLibraryShrink) {
            @$body['sampleLibrary'] = $request->sampleLibraryShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAndPulishAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAndPulishAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建并发布智能体应用.
     *
     * @param request - CreateAndPulishAgentRequest
     *
     * @returns CreateAndPulishAgentResponse
     *
     * @param string                      $workspaceId
     * @param CreateAndPulishAgentRequest $request
     *
     * @return CreateAndPulishAgentResponse
     */
    public function createAndPulishAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAndPulishAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates an unstructured knowledge base and imports one or more parsed documents into the knowledge base. You cannot create a structured knowledge base by calling an API operation. Use the console instead.
     *
     * @remarks
     * 1.  You must first upload documents to [Data Management](https://bailian.console.aliyun.com/#/data-center) and obtain the `FileId`. The documents are the knowledge source of the knowledge base. For more information, see [Import Data](https://www.alibabacloud.com/help/en/model-studio/user-guide/data-import-instructions).
     * 2.  This operation only initializes a knowledge base creation job. You must also call the [SubmitIndexJob](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-submitindexjob) operation to complete the job.
     * 3.  This interface is not idempotent.
     *
     * @param tmpReq - CreateIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIndexResponse
     *
     * @param string             $WorkspaceId
     * @param CreateIndexRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateIndexResponse
     */
    public function createIndexWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateIndexShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryIds) {
            $request->categoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }

        if (null !== $tmpReq->columns) {
            $request->columnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }

        if (null !== $tmpReq->dataSource) {
            $request->dataSourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSource, 'DataSource', 'json');
        }

        if (null !== $tmpReq->documentIds) {
            $request->documentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }

        if (null !== $tmpReq->metaExtractColumns) {
            $request->metaExtractColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metaExtractColumns, 'metaExtractColumns', 'json');
        }

        $query = [];
        if (null !== $request->categoryIdsShrink) {
            @$query['CategoryIds'] = $request->categoryIdsShrink;
        }

        if (null !== $request->chunkSize) {
            @$query['ChunkSize'] = $request->chunkSize;
        }

        if (null !== $request->columnsShrink) {
            @$query['Columns'] = $request->columnsShrink;
        }

        if (null !== $request->dataSourceShrink) {
            @$query['DataSource'] = $request->dataSourceShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->documentIdsShrink) {
            @$query['DocumentIds'] = $request->documentIdsShrink;
        }

        if (null !== $request->embeddingModelName) {
            @$query['EmbeddingModelName'] = $request->embeddingModelName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->overlapSize) {
            @$query['OverlapSize'] = $request->overlapSize;
        }

        if (null !== $request->rerankMinScore) {
            @$query['RerankMinScore'] = $request->rerankMinScore;
        }

        if (null !== $request->rerankModelName) {
            @$query['RerankModelName'] = $request->rerankModelName;
        }

        if (null !== $request->separator) {
            @$query['Separator'] = $request->separator;
        }

        if (null !== $request->sinkInstanceId) {
            @$query['SinkInstanceId'] = $request->sinkInstanceId;
        }

        if (null !== $request->sinkRegion) {
            @$query['SinkRegion'] = $request->sinkRegion;
        }

        if (null !== $request->sinkType) {
            @$query['SinkType'] = $request->sinkType;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->structureType) {
            @$query['StructureType'] = $request->structureType;
        }

        if (null !== $request->chunkMode) {
            @$query['chunkMode'] = $request->chunkMode;
        }

        if (null !== $request->enableHeaders) {
            @$query['enableHeaders'] = $request->enableHeaders;
        }

        if (null !== $request->metaExtractColumnsShrink) {
            @$query['metaExtractColumns'] = $request->metaExtractColumnsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIndex',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an unstructured knowledge base and imports one or more parsed documents into the knowledge base. You cannot create a structured knowledge base by calling an API operation. Use the console instead.
     *
     * @remarks
     * 1.  You must first upload documents to [Data Management](https://bailian.console.aliyun.com/#/data-center) and obtain the `FileId`. The documents are the knowledge source of the knowledge base. For more information, see [Import Data](https://www.alibabacloud.com/help/en/model-studio/user-guide/data-import-instructions).
     * 2.  This operation only initializes a knowledge base creation job. You must also call the [SubmitIndexJob](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-submitindexjob) operation to complete the job.
     * 3.  This interface is not idempotent.
     *
     * @param request - CreateIndexRequest
     *
     * @returns CreateIndexResponse
     *
     * @param string             $WorkspaceId
     * @param CreateIndexRequest $request
     *
     * @return CreateIndexResponse
     */
    public function createIndex($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建Memory.
     *
     * @param request - CreateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryResponse
     *
     * @param string              $workspaceId
     * @param CreateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMemoryResponse
     */
    public function createMemoryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMemory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Memory.
     *
     * @param request - CreateMemoryRequest
     *
     * @returns CreateMemoryResponse
     *
     * @param string              $workspaceId
     * @param CreateMemoryRequest $request
     *
     * @return CreateMemoryResponse
     */
    public function createMemory($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建记忆Node.
     *
     * @param request - CreateMemoryNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param CreateMemoryNodeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMemoryNodeResponse
     */
    public function createMemoryNodeWithOptions($workspaceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMemoryNode',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建记忆Node.
     *
     * @param request - CreateMemoryNodeRequest
     *
     * @returns CreateMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param CreateMemoryNodeRequest $request
     *
     * @return CreateMemoryNodeResponse
     */
    public function createMemoryNode($workspaceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryNodeWithOptions($workspaceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Creates a prompt template.
     *
     * @param request - CreatePromptTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param CreatePromptTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePromptTemplateResponse
     */
    public function createPromptTemplateWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePromptTemplate',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePromptTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a prompt template.
     *
     * @param request - CreatePromptTemplateRequest
     *
     * @returns CreatePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param CreatePromptTemplateRequest $request
     *
     * @return CreatePromptTemplateResponse
     */
    public function createPromptTemplate($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPromptTemplateWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 删除智能体.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentResponse
     *
     * @param string         $workspaceId
     * @param string         $appCode
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($workspaceId, $appCode, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents/' . Url::percentEncode($appCode) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除智能体.
     *
     * @returns DeleteAgentResponse
     *
     * @param string $workspaceId
     * @param string $appCode
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgent($workspaceId, $appCode)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentWithOptions($workspaceId, $appCode, $headers, $runtime);
    }

    /**
     * 删除类目.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCategoryResponse
     *
     * @param string         $CategoryId
     * @param string         $WorkspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($CategoryId, $WorkspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCategory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/category/' . Url::percentEncode($CategoryId) . '/',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除类目.
     *
     * @returns DeleteCategoryResponse
     *
     * @param string $CategoryId
     * @param string $WorkspaceId
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategory($CategoryId, $WorkspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCategoryWithOptions($CategoryId, $WorkspaceId, $headers, $runtime);
    }

    /**
     * 删除文档.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFileResponse
     *
     * @param string         $FileId
     * @param string         $WorkspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($FileId, $WorkspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFile',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file/' . Url::percentEncode($FileId) . '/',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除文档.
     *
     * @returns DeleteFileResponse
     *
     * @param string $FileId
     * @param string $WorkspaceId
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($FileId, $WorkspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($FileId, $WorkspaceId, $headers, $runtime);
    }

    /**
     * Deletes a specified knowledge base permanently.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   If a knowledge base is being called by an application, disassociate the knowledge base before you can delete it. To disassociate the knowledge base, you must use the console. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base).
     * *   After you delete a knowledge base, it cannot be recovered. We recommend that you proceed with caution.
     * *   Imported documents are not deleted from the [Data Management](https://bailian.console.aliyun.com/#/data-center) if you call this operation.
     * *   This interface is idempotent.
     *
     * @param request - DeleteIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexResponse
     *
     * @param string             $WorkspaceId
     * @param DeleteIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndexWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIndex',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified knowledge base permanently.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   If a knowledge base is being called by an application, disassociate the knowledge base before you can delete it. To disassociate the knowledge base, you must use the console. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base).
     * *   After you delete a knowledge base, it cannot be recovered. We recommend that you proceed with caution.
     * *   Imported documents are not deleted from the [Data Management](https://bailian.console.aliyun.com/#/data-center) if you call this operation.
     * *   This interface is idempotent.
     *
     * @param request - DeleteIndexRequest
     *
     * @returns DeleteIndexResponse
     *
     * @param string             $WorkspaceId
     * @param DeleteIndexRequest $request
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndex($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Deletes one or more documents from a specified unstructured knowledge base permanently.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   Only documents with the INSERT_ERROR and FINISH states can be deleted. To query the status of documents in a specified knowledge base, call the [ListIndexDocuments](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-listindexdocuments) operation.
     * *   After you delete a document, it cannot be recovered and the [Retrieve](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-retrieve) operation cannot query information about the document. We recommend that you proceed with caution.
     * *   Imported documents are not deleted from the [Data Management](https://bailian.console.aliyun.com/#/data-center) if you call this operation.
     * *   This interface is idempotent.
     *
     * @param tmpReq - DeleteIndexDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexDocumentResponse
     *
     * @param string                     $WorkspaceId
     * @param DeleteIndexDocumentRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteIndexDocumentResponse
     */
    public function deleteIndexDocumentWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteIndexDocumentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->documentIds) {
            $request->documentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }

        $query = [];
        if (null !== $request->documentIdsShrink) {
            @$query['DocumentIds'] = $request->documentIdsShrink;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIndexDocument',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/delete_index_document',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndexDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more documents from a specified unstructured knowledge base permanently.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   Only documents with the INSERT_ERROR and FINISH states can be deleted. To query the status of documents in a specified knowledge base, call the [ListIndexDocuments](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-listindexdocuments) operation.
     * *   After you delete a document, it cannot be recovered and the [Retrieve](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-retrieve) operation cannot query information about the document. We recommend that you proceed with caution.
     * *   Imported documents are not deleted from the [Data Management](https://bailian.console.aliyun.com/#/data-center) if you call this operation.
     * *   This interface is idempotent.
     *
     * @param request - DeleteIndexDocumentRequest
     *
     * @returns DeleteIndexDocumentResponse
     *
     * @param string                     $WorkspaceId
     * @param DeleteIndexDocumentRequest $request
     *
     * @return DeleteIndexDocumentResponse
     */
    public function deleteIndexDocument($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexDocumentWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 删除memory.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryResponse
     *
     * @param string         $workspaceId
     * @param string         $memoryId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemoryWithOptions($workspaceId, $memoryId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除memory.
     *
     * @returns DeleteMemoryResponse
     *
     * @param string $workspaceId
     * @param string $memoryId
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemory($workspaceId, $memoryId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryWithOptions($workspaceId, $memoryId, $headers, $runtime);
    }

    /**
     * 删除记忆Node.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryNodeResponse
     *
     * @param string         $workspaceId
     * @param string         $memoryId
     * @param string         $memoryNodeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMemoryNodeResponse
     */
    public function deleteMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemoryNode',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes/' . Url::percentEncode($memoryNodeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除记忆Node.
     *
     * @returns DeleteMemoryNodeResponse
     *
     * @param string $workspaceId
     * @param string $memoryId
     * @param string $memoryNodeId
     *
     * @return DeleteMemoryNodeResponse
     */
    public function deleteMemoryNode($workspaceId, $memoryId, $memoryNodeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $headers, $runtime);
    }

    /**
     * Deletes a prompt template based on the template ID.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePromptTemplateResponse
     *
     * @param string         $workspaceId
     * @param string         $promptTemplateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePromptTemplateResponse
     */
    public function deletePromptTemplateWithOptions($workspaceId, $promptTemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePromptTemplate',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates/' . Url::percentEncode($promptTemplateId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePromptTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a prompt template based on the template ID.
     *
     * @returns DeletePromptTemplateResponse
     *
     * @param string $workspaceId
     * @param string $promptTemplateId
     *
     * @return DeletePromptTemplateResponse
     */
    public function deletePromptTemplate($workspaceId, $promptTemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePromptTemplateWithOptions($workspaceId, $promptTemplateId, $headers, $runtime);
    }

    /**
     * Queries the details of an unstructured document.
     *
     * @remarks
     * Before you call this API, make sure that your document is uploaded to the [Data Management](https://bailian.console.aliyun.com/knowledge-base#/data-center) page of Alibaba Cloud Model Studio.
     * *   You can also call this operation to query unstructured documents that you upload on the [Data Management](https://bailian.console.aliyun.com/knowledge-base#/data-center) page.
     * *   This operation is idempotent.
     * **Throttling:** Make sure that the interval between the two queries is at least 15 seconds. Otherwise, you may trigger system throttling. If throttling is triggered, try again later.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFileResponse
     *
     * @param string         $WorkspaceId
     * @param string         $FileId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFileResponse
     */
    public function describeFileWithOptions($WorkspaceId, $FileId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeFile',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file/' . Url::percentEncode($FileId) . '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an unstructured document.
     *
     * @remarks
     * Before you call this API, make sure that your document is uploaded to the [Data Management](https://bailian.console.aliyun.com/knowledge-base#/data-center) page of Alibaba Cloud Model Studio.
     * *   You can also call this operation to query unstructured documents that you upload on the [Data Management](https://bailian.console.aliyun.com/knowledge-base#/data-center) page.
     * *   This operation is idempotent.
     * **Throttling:** Make sure that the interval between the two queries is at least 15 seconds. Otherwise, you may trigger system throttling. If throttling is triggered, try again later.
     *
     * @returns DescribeFileResponse
     *
     * @param string $WorkspaceId
     * @param string $FileId
     *
     * @return DescribeFileResponse
     */
    public function describeFile($WorkspaceId, $FileId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFileWithOptions($WorkspaceId, $FileId, $headers, $runtime);
    }

    /**
     * Queries the current status of a specified knowledge base creation or add document job.
     *
     * @remarks
     * 1.  A knowledge base job is running. You can call the [SubmitIndexJob](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-submitindexjob) operation to create a creation job or the [SubmitIndexAddDocumentsJob](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-submitindexadddocumentsjob) operation to create a add document job. Then, obtain the `JobId` returned by the operations.
     * 2.  We recommend that you call this operation at intervals of more than 5 seconds.
     * 3.  This interface is idempotent.
     *
     * @param request - GetIndexJobStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIndexJobStatusResponse
     *
     * @param string                   $WorkspaceId
     * @param GetIndexJobStatusRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetIndexJobStatusResponse
     */
    public function getIndexJobStatusWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIndexJobStatus',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/job/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIndexJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current status of a specified knowledge base creation or add document job.
     *
     * @remarks
     * 1.  A knowledge base job is running. You can call the [SubmitIndexJob](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-submitindexjob) operation to create a creation job or the [SubmitIndexAddDocumentsJob](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-submitindexadddocumentsjob) operation to create a add document job. Then, obtain the `JobId` returned by the operations.
     * 2.  We recommend that you call this operation at intervals of more than 5 seconds.
     * 3.  This interface is idempotent.
     *
     * @param request - GetIndexJobStatusRequest
     *
     * @returns GetIndexJobStatusResponse
     *
     * @param string                   $WorkspaceId
     * @param GetIndexJobStatusRequest $request
     *
     * @return GetIndexJobStatusResponse
     */
    public function getIndexJobStatus($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexJobStatusWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取memory.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryResponse
     *
     * @param string         $workspaceId
     * @param string         $memoryId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMemoryResponse
     */
    public function getMemoryWithOptions($workspaceId, $memoryId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取memory.
     *
     * @returns GetMemoryResponse
     *
     * @param string $workspaceId
     * @param string $memoryId
     *
     * @return GetMemoryResponse
     */
    public function getMemory($workspaceId, $memoryId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryWithOptions($workspaceId, $memoryId, $headers, $runtime);
    }

    /**
     * 获取记忆Node.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryNodeResponse
     *
     * @param string         $workspaceId
     * @param string         $memoryId
     * @param string         $memoryNodeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMemoryNodeResponse
     */
    public function getMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryNode',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes/' . Url::percentEncode($memoryNodeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取记忆Node.
     *
     * @returns GetMemoryNodeResponse
     *
     * @param string $workspaceId
     * @param string $memoryId
     * @param string $memoryNodeId
     *
     * @return GetMemoryNodeResponse
     */
    public function getMemoryNode($workspaceId, $memoryId, $memoryNodeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $headers, $runtime);
    }

    /**
     * Obtains a prompt template based on the template ID.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPromptTemplateResponse
     *
     * @param string         $workspaceId
     * @param string         $promptTemplateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPromptTemplateResponse
     */
    public function getPromptTemplateWithOptions($workspaceId, $promptTemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPromptTemplate',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates/' . Url::percentEncode($promptTemplateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPromptTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a prompt template based on the template ID.
     *
     * @returns GetPromptTemplateResponse
     *
     * @param string $workspaceId
     * @param string $promptTemplateId
     *
     * @return GetPromptTemplateResponse
     */
    public function getPromptTemplate($workspaceId, $promptTemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPromptTemplateWithOptions($workspaceId, $promptTemplateId, $headers, $runtime);
    }

    /**
     * 获取发布态智能体应用.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPublishedAgentResponse
     *
     * @param string         $workspaceId
     * @param string         $appCode
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPublishedAgentResponse
     */
    public function getPublishedAgentWithOptions($workspaceId, $appCode, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPublishedAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents/' . Url::percentEncode($appCode) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPublishedAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取发布态智能体应用.
     *
     * @returns GetPublishedAgentResponse
     *
     * @param string $workspaceId
     * @param string $appCode
     *
     * @return GetPublishedAgentResponse
     */
    public function getPublishedAgent($workspaceId, $appCode)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPublishedAgentWithOptions($workspaceId, $appCode, $headers, $runtime);
    }

    /**
     * ListCategory.
     *
     * @param request - ListCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCategoryResponse
     *
     * @param string              $WorkspaceId
     * @param ListCategoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListCategoryResponse
     */
    public function listCategoryWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryName) {
            @$body['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentCategoryId) {
            @$body['ParentCategoryId'] = $request->parentCategoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCategory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/categories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListCategory.
     *
     * @param request - ListCategoryRequest
     *
     * @returns ListCategoryResponse
     *
     * @param string              $WorkspaceId
     * @param ListCategoryRequest $request
     *
     * @return ListCategoryResponse
     */
    public function listCategory($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCategoryWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * For unstructured knowledge base, obtains the details of all chunks of a specified document; for structured knowledge base, obtains the details of all chunks.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   This interface is idempotent.
     *
     * @param request - ListChunksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChunksResponse
     *
     * @param string            $WorkspaceId
     * @param ListChunksRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListChunksResponse
     */
    public function listChunksWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->fileId) {
            @$body['FileId'] = $request->fileId;
        }

        if (null !== $request->filed) {
            @$body['Filed'] = $request->filed;
        }

        if (null !== $request->indexId) {
            @$body['IndexId'] = $request->indexId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListChunks',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/list_chunks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListChunksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For unstructured knowledge base, obtains the details of all chunks of a specified document; for structured knowledge base, obtains the details of all chunks.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   This interface is idempotent.
     *
     * @param request - ListChunksRequest
     *
     * @returns ListChunksResponse
     *
     * @param string            $WorkspaceId
     * @param ListChunksRequest $request
     *
     * @return ListChunksResponse
     */
    public function listChunks($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChunksWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取文档列表.
     *
     * @param request - ListFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFileResponse
     *
     * @param string          $WorkspaceId
     * @param ListFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListFileResponse
     */
    public function listFileWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFile',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/files',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取文档列表.
     *
     * @param request - ListFileRequest
     *
     * @returns ListFileResponse
     *
     * @param string          $WorkspaceId
     * @param ListFileRequest $request
     *
     * @return ListFileResponse
     */
    public function listFile($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFileWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of one or more documents in a specified knowledge base.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   This interface is idempotent.
     *
     * @param request - ListIndexDocumentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndexDocumentsResponse
     *
     * @param string                    $WorkspaceId
     * @param ListIndexDocumentsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListIndexDocumentsResponse
     */
    public function listIndexDocumentsWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentName) {
            @$query['DocumentName'] = $request->documentName;
        }

        if (null !== $request->documentStatus) {
            @$query['DocumentStatus'] = $request->documentStatus;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIndexDocuments',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/list_index_documents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIndexDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of one or more documents in a specified knowledge base.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   This interface is idempotent.
     *
     * @param request - ListIndexDocumentsRequest
     *
     * @returns ListIndexDocumentsResponse
     *
     * @param string                    $WorkspaceId
     * @param ListIndexDocumentsRequest $request
     *
     * @return ListIndexDocumentsResponse
     */
    public function listIndexDocuments($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexDocumentsWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Lists knowledge bases in a specified workspace.
     *
     * @remarks
     * This interface is idempotent.
     *
     * @param request - ListIndicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndicesResponse
     *
     * @param string             $WorkspaceId
     * @param ListIndicesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListIndicesResponse
     */
    public function listIndicesWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexName) {
            @$query['IndexName'] = $request->indexName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIndices',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/list_indices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists knowledge bases in a specified workspace.
     *
     * @remarks
     * This interface is idempotent.
     *
     * @param request - ListIndicesRequest
     *
     * @returns ListIndicesResponse
     *
     * @param string             $WorkspaceId
     * @param ListIndicesRequest $request
     *
     * @return ListIndicesResponse
     */
    public function listIndices($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndicesWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取memory.
     *
     * @param request - ListMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoriesResponse
     *
     * @param string              $workspaceId
     * @param ListMemoriesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMemoriesResponse
     */
    public function listMemoriesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemories',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取memory.
     *
     * @param request - ListMemoriesRequest
     *
     * @returns ListMemoriesResponse
     *
     * @param string              $workspaceId
     * @param ListMemoriesRequest $request
     *
     * @return ListMemoriesResponse
     */
    public function listMemories($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoriesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取记忆Node列表.
     *
     * @param request - ListMemoryNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoryNodesResponse
     *
     * @param string                 $workspaceId
     * @param string                 $memoryId
     * @param ListMemoryNodesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListMemoryNodesResponse
     */
    public function listMemoryNodesWithOptions($workspaceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemoryNodes',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoryNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取记忆Node列表.
     *
     * @param request - ListMemoryNodesRequest
     *
     * @returns ListMemoryNodesResponse
     *
     * @param string                 $workspaceId
     * @param string                 $memoryId
     * @param ListMemoryNodesRequest $request
     *
     * @return ListMemoryNodesResponse
     */
    public function listMemoryNodes($workspaceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoryNodesWithOptions($workspaceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Obtains a list of prompt templates.
     *
     * @param request - ListPromptTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPromptTemplatesResponse
     *
     * @param string                     $workspaceId
     * @param ListPromptTemplatesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPromptTemplatesResponse
     */
    public function listPromptTemplatesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPromptTemplates',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPromptTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of prompt templates.
     *
     * @param request - ListPromptTemplatesRequest
     *
     * @returns ListPromptTemplatesResponse
     *
     * @param string                     $workspaceId
     * @param ListPromptTemplatesRequest $request
     *
     * @return ListPromptTemplatesResponse
     */
    public function listPromptTemplates($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPromptTemplatesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 查询已发布的智能体应用列表.
     *
     * @param request - ListPublishedAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedAgentResponse
     *
     * @param string                    $workspaceId
     * @param ListPublishedAgentRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListPublishedAgentResponse
     */
    public function listPublishedAgentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['pageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublishedAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPublishedAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询已发布的智能体应用列表.
     *
     * @param request - ListPublishedAgentRequest
     *
     * @returns ListPublishedAgentResponse
     *
     * @param string                    $workspaceId
     * @param ListPublishedAgentRequest $request
     *
     * @return ListPublishedAgentResponse
     */
    public function listPublishedAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPublishedAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries information from a specified knowledge base.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   The response time may be long because this operation involves complex retrieval and matching. We recommend that you set appropriate timeout and retry policy for requests.
     * *   This interface is idempotent.
     *
     * @param tmpReq - RetrieveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetrieveResponse
     *
     * @param string          $WorkspaceId
     * @param RetrieveRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return RetrieveResponse
     */
    public function retrieveWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RetrieveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->images) {
            $request->imagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->images, 'Images', 'simple');
        }

        if (null !== $tmpReq->queryHistory) {
            $request->queryHistoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryHistory, 'QueryHistory', 'json');
        }

        if (null !== $tmpReq->rerank) {
            $request->rerankShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rerank, 'Rerank', 'json');
        }

        if (null !== $tmpReq->rewrite) {
            $request->rewriteShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rewrite, 'Rewrite', 'json');
        }

        if (null !== $tmpReq->searchFilters) {
            $request->searchFiltersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchFilters, 'SearchFilters', 'json');
        }

        $query = [];
        if (null !== $request->denseSimilarityTopK) {
            @$query['DenseSimilarityTopK'] = $request->denseSimilarityTopK;
        }

        if (null !== $request->enableReranking) {
            @$query['EnableReranking'] = $request->enableReranking;
        }

        if (null !== $request->enableRewrite) {
            @$query['EnableRewrite'] = $request->enableRewrite;
        }

        if (null !== $request->imagesShrink) {
            @$query['Images'] = $request->imagesShrink;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->queryHistoryShrink) {
            @$query['QueryHistory'] = $request->queryHistoryShrink;
        }

        if (null !== $request->rerankShrink) {
            @$query['Rerank'] = $request->rerankShrink;
        }

        if (null !== $request->rerankMinScore) {
            @$query['RerankMinScore'] = $request->rerankMinScore;
        }

        if (null !== $request->rerankTopN) {
            @$query['RerankTopN'] = $request->rerankTopN;
        }

        if (null !== $request->rewriteShrink) {
            @$query['Rewrite'] = $request->rewriteShrink;
        }

        if (null !== $request->saveRetrieverHistory) {
            @$query['SaveRetrieverHistory'] = $request->saveRetrieverHistory;
        }

        if (null !== $request->searchFiltersShrink) {
            @$query['SearchFilters'] = $request->searchFiltersShrink;
        }

        if (null !== $request->sparseSimilarityTopK) {
            @$query['SparseSimilarityTopK'] = $request->sparseSimilarityTopK;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Retrieve',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/retrieve',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetrieveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information from a specified knowledge base.
     *
     * @remarks
     *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   The response time may be long because this operation involves complex retrieval and matching. We recommend that you set appropriate timeout and retry policy for requests.
     * *   This interface is idempotent.
     *
     * @param request - RetrieveRequest
     *
     * @returns RetrieveResponse
     *
     * @param string          $WorkspaceId
     * @param RetrieveRequest $request
     *
     * @return RetrieveResponse
     */
    public function retrieve($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retrieveWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Adds parsed documents to an unstructured knowledge base.
     *
     * @remarks
     *   You must first upload documents to [Data Management](https://bailian.console.aliyun.com/#/data-center) and obtain the `FileId`. The documents are the knowledge source of the knowledge base. For more information, see [Import Data](https://www.alibabacloud.com/help/en/model-studio/user-guide/data-import-instructions).
     * *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   After you call this operation, you can call the [GetIndexJobStatus](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-getindexjobstatus) operation to query the status of the job. More than 20 calls to the GetIndexJobStatus operation per minute may trigger throttling.
     * *   Execution takes a period of time after this operation is called. Do not make new request before the request is returned. This interface is not idempotent.
     *
     * @param tmpReq - SubmitIndexAddDocumentsJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIndexAddDocumentsJobResponse
     *
     * @param string                            $WorkspaceId
     * @param SubmitIndexAddDocumentsJobRequest $tmpReq
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitIndexAddDocumentsJobResponse
     */
    public function submitIndexAddDocumentsJobWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitIndexAddDocumentsJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryIds) {
            $request->categoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }

        if (null !== $tmpReq->documentIds) {
            $request->documentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }

        $query = [];
        if (null !== $request->categoryIdsShrink) {
            @$query['CategoryIds'] = $request->categoryIdsShrink;
        }

        if (null !== $request->chunkMode) {
            @$query['ChunkMode'] = $request->chunkMode;
        }

        if (null !== $request->chunkSize) {
            @$query['ChunkSize'] = $request->chunkSize;
        }

        if (null !== $request->documentIdsShrink) {
            @$query['DocumentIds'] = $request->documentIdsShrink;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->overlapSize) {
            @$query['OverlapSize'] = $request->overlapSize;
        }

        if (null !== $request->separator) {
            @$query['Separator'] = $request->separator;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIndexAddDocumentsJob',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/add_documents_to_index',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitIndexAddDocumentsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds parsed documents to an unstructured knowledge base.
     *
     * @remarks
     *   You must first upload documents to [Data Management](https://bailian.console.aliyun.com/#/data-center) and obtain the `FileId`. The documents are the knowledge source of the knowledge base. For more information, see [Import Data](https://www.alibabacloud.com/help/en/model-studio/user-guide/data-import-instructions).
     * *   Before you call this operation, make sure that your knowledge base is created and is not deleted. That is, the primary key ID of the knowledge base `IndexId` is valid.
     * *   After you call this operation, you can call the [GetIndexJobStatus](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-getindexjobstatus) operation to query the status of the job. More than 20 calls to the GetIndexJobStatus operation per minute may trigger throttling.
     * *   Execution takes a period of time after this operation is called. Do not make new request before the request is returned. This interface is not idempotent.
     *
     * @param request - SubmitIndexAddDocumentsJobRequest
     *
     * @returns SubmitIndexAddDocumentsJobResponse
     *
     * @param string                            $WorkspaceId
     * @param SubmitIndexAddDocumentsJobRequest $request
     *
     * @return SubmitIndexAddDocumentsJobResponse
     */
    public function submitIndexAddDocumentsJob($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitIndexAddDocumentsJobWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Submits a specified CreateIndex job to complete knowledge base creation.
     *
     * @remarks
     * 1.  Before you call this operation, you must call the [CreateIndex](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-createindex) operation and obtain the `IndexId`.
     * 2.  Execution takes a period of time after this operation is called. Do not make new request before the request is returned.
     * 3.  If you want to query the execution status of the job after you call this operation, call the [GetIndexJobStatus](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-getindexjobstatus) operation.
     * 4.  This interface is not idempotent.
     *
     * @param request - SubmitIndexJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIndexJobResponse
     *
     * @param string                $WorkspaceId
     * @param SubmitIndexJobRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitIndexJobResponse
     */
    public function submitIndexJobWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIndexJob',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/submit_index_job',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitIndexJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a specified CreateIndex job to complete knowledge base creation.
     *
     * @remarks
     * 1.  Before you call this operation, you must call the [CreateIndex](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-createindex) operation and obtain the `IndexId`.
     * 2.  Execution takes a period of time after this operation is called. Do not make new request before the request is returned.
     * 3.  If you want to query the execution status of the job after you call this operation, call the [GetIndexJobStatus](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-getindexjobstatus) operation.
     * 4.  This interface is not idempotent.
     *
     * @param request - SubmitIndexJobRequest
     *
     * @returns SubmitIndexJobResponse
     *
     * @param string                $WorkspaceId
     * @param SubmitIndexJobRequest $request
     *
     * @return SubmitIndexJobResponse
     */
    public function submitIndexJob($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitIndexJobWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 更新并发布智能体应用.
     *
     * @param tmpReq - UpdateAndPublishAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAndPublishAgentResponse
     *
     * @param string                       $workspaceId
     * @param string                       $appCode
     * @param UpdateAndPublishAgentRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAndPublishAgentResponse
     */
    public function updateAndPublishAgentWithOptions($workspaceId, $appCode, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAndPublishAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationConfig) {
            $request->applicationConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationConfig, 'applicationConfig', 'json');
        }

        if (null !== $tmpReq->sampleLibrary) {
            $request->sampleLibraryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sampleLibrary, 'sampleLibrary', 'json');
        }

        $body = [];
        if (null !== $request->applicationConfigShrink) {
            @$body['applicationConfig'] = $request->applicationConfigShrink;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->sampleLibraryShrink) {
            @$body['sampleLibrary'] = $request->sampleLibraryShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAndPublishAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents/' . Url::percentEncode($appCode) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAndPublishAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新并发布智能体应用.
     *
     * @param request - UpdateAndPublishAgentRequest
     *
     * @returns UpdateAndPublishAgentResponse
     *
     * @param string                       $workspaceId
     * @param string                       $appCode
     * @param UpdateAndPublishAgentRequest $request
     *
     * @return UpdateAndPublishAgentResponse
     */
    public function updateAndPublishAgent($workspaceId, $appCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAndPublishAgentWithOptions($workspaceId, $appCode, $request, $headers, $runtime);
    }

    /**
     * 选择更新并发布智能体应用.
     *
     * @param tmpReq - UpdateAndPublishAgentSelectiveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAndPublishAgentSelectiveResponse
     *
     * @param string                                $workspaceId
     * @param string                                $appCode
     * @param UpdateAndPublishAgentSelectiveRequest $tmpReq
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateAndPublishAgentSelectiveResponse
     */
    public function updateAndPublishAgentSelectiveWithOptions($workspaceId, $appCode, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAndPublishAgentSelectiveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationConfig) {
            $request->applicationConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationConfig, 'applicationConfig', 'json');
        }

        if (null !== $tmpReq->sampleLibrary) {
            $request->sampleLibraryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sampleLibrary, 'sampleLibrary', 'json');
        }

        $body = [];
        if (null !== $request->applicationConfigShrink) {
            @$body['applicationConfig'] = $request->applicationConfigShrink;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->sampleLibraryShrink) {
            @$body['sampleLibrary'] = $request->sampleLibraryShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAndPublishAgentSelective',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents/' . Url::percentEncode($appCode) . '/updateAndPublishAgentSelective',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAndPublishAgentSelectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 选择更新并发布智能体应用.
     *
     * @param request - UpdateAndPublishAgentSelectiveRequest
     *
     * @returns UpdateAndPublishAgentSelectiveResponse
     *
     * @param string                                $workspaceId
     * @param string                                $appCode
     * @param UpdateAndPublishAgentSelectiveRequest $request
     *
     * @return UpdateAndPublishAgentSelectiveResponse
     */
    public function updateAndPublishAgentSelective($workspaceId, $appCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAndPublishAgentSelectiveWithOptions($workspaceId, $appCode, $request, $headers, $runtime);
    }

    /**
     * 更新文档Tag.
     *
     * @param tmpReq - UpdateFileTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFileTagResponse
     *
     * @param string               $WorkspaceId
     * @param string               $FileId
     * @param UpdateFileTagRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateFileTagResponse
     */
    public function updateFileTagWithOptions($WorkspaceId, $FileId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFileTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFileTag',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file/' . Url::percentEncode($FileId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFileTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新文档Tag.
     *
     * @param request - UpdateFileTagRequest
     *
     * @returns UpdateFileTagResponse
     *
     * @param string               $WorkspaceId
     * @param string               $FileId
     * @param UpdateFileTagRequest $request
     *
     * @return UpdateFileTagResponse
     */
    public function updateFileTag($WorkspaceId, $FileId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFileTagWithOptions($WorkspaceId, $FileId, $request, $headers, $runtime);
    }

    /**
     * 更新memory.
     *
     * @param request - UpdateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemoryWithOptions($workspaceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMemory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新memory.
     *
     * @param request - UpdateMemoryRequest
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemory($workspaceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryWithOptions($workspaceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * 更新记忆Node.
     *
     * @param request - UpdateMemoryNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param string                  $memoryNodeId
     * @param UpdateMemoryNodeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMemoryNodeResponse
     */
    public function updateMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMemoryNode',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes/' . Url::percentEncode($memoryNodeId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新记忆Node.
     *
     * @param request - UpdateMemoryNodeRequest
     *
     * @returns UpdateMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param string                  $memoryNodeId
     * @param UpdateMemoryNodeRequest $request
     *
     * @return UpdateMemoryNodeResponse
     */
    public function updateMemoryNode($workspaceId, $memoryId, $memoryNodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $request, $headers, $runtime);
    }

    /**
     * Updates a prompt template based on the template ID.
     *
     * @param request - UpdatePromptTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param string                      $promptTemplateId
     * @param UpdatePromptTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePromptTemplateResponse
     */
    public function updatePromptTemplateWithOptions($workspaceId, $promptTemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePromptTemplate',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates/' . Url::percentEncode($promptTemplateId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePromptTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a prompt template based on the template ID.
     *
     * @param request - UpdatePromptTemplateRequest
     *
     * @returns UpdatePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param string                      $promptTemplateId
     * @param UpdatePromptTemplateRequest $request
     *
     * @return UpdatePromptTemplateResponse
     */
    public function updatePromptTemplate($workspaceId, $promptTemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePromptTemplateWithOptions($workspaceId, $promptTemplateId, $request, $headers, $runtime);
    }
}
