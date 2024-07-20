<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DescribeFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListChunksRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListChunksResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexDocumentsRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexDocumentsResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexJobRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexJobResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 将临时上传的文档导入百炼数据中心，导入成功之后会自动触发文档解析。
     *  *
     * @param string         $WorkspaceId
     * @param AddFileRequest $request     AddFileRequest
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return AddFileResponse AddFileResponse
     */
    public function addFileWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->leaseId)) {
            $body['LeaseId'] = $request->leaseId;
        }
        if (!Utils::isUnset($request->parser)) {
            $body['Parser'] = $request->parser;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddFile',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/datacenter/file',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将临时上传的文档导入百炼数据中心，导入成功之后会自动触发文档解析。
     *  *
     * @param string         $WorkspaceId
     * @param AddFileRequest $request     AddFileRequest
     *
     * @return AddFileResponse AddFileResponse
     */
    public function addFile($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFileWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 请求文档上传租约，进行文档上传。
     *  *
     * @param string                      $CategoryId
     * @param string                      $WorkspaceId
     * @param ApplyFileUploadLeaseRequest $request     ApplyFileUploadLeaseRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return ApplyFileUploadLeaseResponse ApplyFileUploadLeaseResponse
     */
    public function applyFileUploadLeaseWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->md5)) {
            $body['Md5'] = $request->md5;
        }
        if (!Utils::isUnset($request->sizeInBytes)) {
            $body['SizeInBytes'] = $request->sizeInBytes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyFileUploadLease',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/datacenter/category/' . OpenApiUtilClient::getEncodeParam($CategoryId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyFileUploadLeaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 请求文档上传租约，进行文档上传。
     *  *
     * @param string                      $CategoryId
     * @param string                      $WorkspaceId
     * @param ApplyFileUploadLeaseRequest $request     ApplyFileUploadLeaseRequest
     *
     * @return ApplyFileUploadLeaseResponse ApplyFileUploadLeaseResponse
     */
    public function applyFileUploadLease($CategoryId, $WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyFileUploadLeaseWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建并运行pipeline
     *  *
     * @param string             $WorkspaceId
     * @param CreateIndexRequest $tmpReq      CreateIndexRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateIndexResponse CreateIndexResponse
     */
    public function createIndexWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateIndexShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categoryIds)) {
            $request->categoryIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->columns)) {
            $request->columnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }
        if (!Utils::isUnset($tmpReq->documentIds)) {
            $request->documentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->categoryIdsShrink)) {
            $query['CategoryIds'] = $request->categoryIdsShrink;
        }
        if (!Utils::isUnset($request->chunkSize)) {
            $query['ChunkSize'] = $request->chunkSize;
        }
        if (!Utils::isUnset($request->columnsShrink)) {
            $query['Columns'] = $request->columnsShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->documentIdsShrink)) {
            $query['DocumentIds'] = $request->documentIdsShrink;
        }
        if (!Utils::isUnset($request->embeddingModelName)) {
            $query['EmbeddingModelName'] = $request->embeddingModelName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->overlapSize)) {
            $query['OverlapSize'] = $request->overlapSize;
        }
        if (!Utils::isUnset($request->rerankMinScore)) {
            $query['RerankMinScore'] = $request->rerankMinScore;
        }
        if (!Utils::isUnset($request->rerankModelName)) {
            $query['RerankModelName'] = $request->rerankModelName;
        }
        if (!Utils::isUnset($request->separator)) {
            $query['Separator'] = $request->separator;
        }
        if (!Utils::isUnset($request->sinkInstanceId)) {
            $query['SinkInstanceId'] = $request->sinkInstanceId;
        }
        if (!Utils::isUnset($request->sinkRegion)) {
            $query['SinkRegion'] = $request->sinkRegion;
        }
        if (!Utils::isUnset($request->sinkType)) {
            $query['SinkType'] = $request->sinkType;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->structureType)) {
            $query['StructureType'] = $request->structureType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIndex',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建并运行pipeline
     *  *
     * @param string             $WorkspaceId
     * @param CreateIndexRequest $request     CreateIndexRequest
     *
     * @return CreateIndexResponse CreateIndexResponse
     */
    public function createIndex($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除文档
     *  *
     * @param string         $FileId
     * @param string         $WorkspaceId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteFileResponse DeleteFileResponse
     */
    public function deleteFileWithOptions($FileId, $WorkspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/datacenter/file/' . OpenApiUtilClient::getEncodeParam($FileId) . '/',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除文档
     *  *
     * @param string $FileId
     * @param string $WorkspaceId
     *
     * @return DeleteFileResponse DeleteFileResponse
     */
    public function deleteFile($FileId, $WorkspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($FileId, $WorkspaceId, $headers, $runtime);
    }

    /**
     * @summary 删除Index
     *  *
     * @param string             $WorkspaceId
     * @param DeleteIndexRequest $request     DeleteIndexRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteIndexResponse DeleteIndexResponse
     */
    public function deleteIndexWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIndex',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Index
     *  *
     * @param string             $WorkspaceId
     * @param DeleteIndexRequest $request     DeleteIndexRequest
     *
     * @return DeleteIndexResponse DeleteIndexResponse
     */
    public function deleteIndex($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除index doc
     *  *
     * @param string                     $WorkspaceId
     * @param DeleteIndexDocumentRequest $tmpReq      DeleteIndexDocumentRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteIndexDocumentResponse DeleteIndexDocumentResponse
     */
    public function deleteIndexDocumentWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteIndexDocumentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->documentIds)) {
            $request->documentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->documentIdsShrink)) {
            $query['DocumentIds'] = $request->documentIdsShrink;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIndexDocument',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/delete_index_document',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIndexDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除index doc
     *  *
     * @param string                     $WorkspaceId
     * @param DeleteIndexDocumentRequest $request     DeleteIndexDocumentRequest
     *
     * @return DeleteIndexDocumentResponse DeleteIndexDocumentResponse
     */
    public function deleteIndexDocument($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexDocumentWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取文档基本信息，包括文档名称、类型、状态等。
     *  *
     * @param string         $WorkspaceId
     * @param string         $FileId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeFileResponse DescribeFileResponse
     */
    public function describeFileWithOptions($WorkspaceId, $FileId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeFile',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/datacenter/file/' . OpenApiUtilClient::getEncodeParam($FileId) . '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文档基本信息，包括文档名称、类型、状态等。
     *  *
     * @param string $WorkspaceId
     * @param string $FileId
     *
     * @return DescribeFileResponse DescribeFileResponse
     */
    public function describeFile($WorkspaceId, $FileId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFileWithOptions($WorkspaceId, $FileId, $headers, $runtime);
    }

    /**
     * @summary 获取Index运行状态
     *  *
     * @param string                   $WorkspaceId
     * @param GetIndexJobStatusRequest $request     GetIndexJobStatusRequest
     * @param string[]                 $headers     map
     * @param RuntimeOptions           $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetIndexJobStatusResponse GetIndexJobStatusResponse
     */
    public function getIndexJobStatusWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIndexJobStatus',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/job/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIndexJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Index运行状态
     *  *
     * @param string                   $WorkspaceId
     * @param GetIndexJobStatusRequest $request     GetIndexJobStatusRequest
     *
     * @return GetIndexJobStatusResponse GetIndexJobStatusResponse
     */
    public function getIndexJobStatus($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexJobStatusWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary Chunk
     *  *
     * @param string            $WorkspaceId
     * @param ListChunksRequest $request     ListChunksRequest
     * @param string[]          $headers     map
     * @param RuntimeOptions    $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListChunksResponse ListChunksResponse
     */
    public function listChunksWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->filed)) {
            $body['Filed'] = $request->filed;
        }
        if (!Utils::isUnset($request->indexId)) {
            $body['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListChunks',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/list_chunks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChunksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Chunk
     *  *
     * @param string            $WorkspaceId
     * @param ListChunksRequest $request     ListChunksRequest
     *
     * @return ListChunksResponse ListChunksResponse
     */
    public function listChunks($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChunksWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询Index文件
     *  *
     * @param string                    $WorkspaceId
     * @param ListIndexDocumentsRequest $request     ListIndexDocumentsRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListIndexDocumentsResponse ListIndexDocumentsResponse
     */
    public function listIndexDocumentsWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->documentName)) {
            $query['DocumentName'] = $request->documentName;
        }
        if (!Utils::isUnset($request->documentStatus)) {
            $query['DocumentStatus'] = $request->documentStatus;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIndexDocuments',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/list_index_documents',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIndexDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Index文件
     *  *
     * @param string                    $WorkspaceId
     * @param ListIndexDocumentsRequest $request     ListIndexDocumentsRequest
     *
     * @return ListIndexDocumentsResponse ListIndexDocumentsResponse
     */
    public function listIndexDocuments($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexDocumentsWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询pipeline
     *  *
     * @param string             $WorkspaceId
     * @param ListIndicesRequest $request     ListIndicesRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListIndicesResponse ListIndicesResponse
     */
    public function listIndicesWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexName)) {
            $query['IndexName'] = $request->indexName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIndices',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/list_indices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询pipeline
     *  *
     * @param string             $WorkspaceId
     * @param ListIndicesRequest $request     ListIndicesRequest
     *
     * @return ListIndicesResponse ListIndicesResponse
     */
    public function listIndices($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndicesWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 召回测试
     *  *
     * @param string          $WorkspaceId
     * @param RetrieveRequest $tmpReq      RetrieveRequest
     * @param string[]        $headers     map
     * @param RuntimeOptions  $runtime     runtime options for this request RuntimeOptions
     *
     * @return RetrieveResponse RetrieveResponse
     */
    public function retrieveWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RetrieveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rerank)) {
            $request->rerankShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rerank, 'Rerank', 'json');
        }
        if (!Utils::isUnset($tmpReq->rewrite)) {
            $request->rewriteShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rewrite, 'Rewrite', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->denseSimilarityTopK)) {
            $query['DenseSimilarityTopK'] = $request->denseSimilarityTopK;
        }
        if (!Utils::isUnset($request->enableReranking)) {
            $query['EnableReranking'] = $request->enableReranking;
        }
        if (!Utils::isUnset($request->enableRewrite)) {
            $query['EnableRewrite'] = $request->enableRewrite;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->rerankShrink)) {
            $query['Rerank'] = $request->rerankShrink;
        }
        if (!Utils::isUnset($request->rerankMinScore)) {
            $query['RerankMinScore'] = $request->rerankMinScore;
        }
        if (!Utils::isUnset($request->rerankTopN)) {
            $query['RerankTopN'] = $request->rerankTopN;
        }
        if (!Utils::isUnset($request->rewriteShrink)) {
            $query['Rewrite'] = $request->rewriteShrink;
        }
        if (!Utils::isUnset($request->saveRetrieverHistory)) {
            $query['SaveRetrieverHistory'] = $request->saveRetrieverHistory;
        }
        if (!Utils::isUnset($request->sparseSimilarityTopK)) {
            $query['SparseSimilarityTopK'] = $request->sparseSimilarityTopK;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Retrieve',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/retrieve',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetrieveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 召回测试
     *  *
     * @param string          $WorkspaceId
     * @param RetrieveRequest $request     RetrieveRequest
     *
     * @return RetrieveResponse RetrieveResponse
     */
    public function retrieve($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retrieveWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 知识索引
     *  *
     * @param string                            $WorkspaceId
     * @param SubmitIndexAddDocumentsJobRequest $tmpReq      SubmitIndexAddDocumentsJobRequest
     * @param string[]                          $headers     map
     * @param RuntimeOptions                    $runtime     runtime options for this request RuntimeOptions
     *
     * @return SubmitIndexAddDocumentsJobResponse SubmitIndexAddDocumentsJobResponse
     */
    public function submitIndexAddDocumentsJobWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitIndexAddDocumentsJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categoryIds)) {
            $request->categoryIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->documentIds)) {
            $request->documentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->categoryIdsShrink)) {
            $query['CategoryIds'] = $request->categoryIdsShrink;
        }
        if (!Utils::isUnset($request->documentIdsShrink)) {
            $query['DocumentIds'] = $request->documentIdsShrink;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIndexAddDocumentsJob',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/add_documents_to_index',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitIndexAddDocumentsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 知识索引
     *  *
     * @param string                            $WorkspaceId
     * @param SubmitIndexAddDocumentsJobRequest $request     SubmitIndexAddDocumentsJobRequest
     *
     * @return SubmitIndexAddDocumentsJobResponse SubmitIndexAddDocumentsJobResponse
     */
    public function submitIndexAddDocumentsJob($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitIndexAddDocumentsJobWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 提交索引任务
     *  *
     * @param string                $WorkspaceId
     * @param SubmitIndexJobRequest $request     SubmitIndexJobRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return SubmitIndexJobResponse SubmitIndexJobResponse
     */
    public function submitIndexJobWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIndexJob',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/index/submit_index_job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitIndexJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交索引任务
     *  *
     * @param string                $WorkspaceId
     * @param SubmitIndexJobRequest $request     SubmitIndexJobRequest
     *
     * @return SubmitIndexJobResponse SubmitIndexJobResponse
     */
    public function submitIndexJob($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitIndexJobWithOptions($WorkspaceId, $request, $headers, $runtime);
    }
}
