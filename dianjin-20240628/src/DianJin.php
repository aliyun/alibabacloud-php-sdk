<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetAppConfigResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentChunkListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentChunkListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentUrlRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentUrlResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetHistoryListByBizTypeRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetHistoryListByBizTypeResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\InvokePluginRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\InvokePluginResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\PreviewDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\PreviewDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ReIndexRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ReIndexResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentAdvanceRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class DianJin extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dianjin', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建文档库
     *  *
     * @param string               $workspaceId
     * @param CreateLibraryRequest $request     CreateLibraryRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateLibraryResponse CreateLibraryResponse
     */
    public function createLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->indexSetting)) {
            $body['indexSetting'] = $request->indexSetting;
        }
        if (!Utils::isUnset($request->libraryName)) {
            $body['libraryName'] = $request->libraryName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLibrary',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建文档库
     *  *
     * @param string               $workspaceId
     * @param CreateLibraryRequest $request     CreateLibraryRequest
     *
     * @return CreateLibraryResponse CreateLibraryResponse
     */
    public function createLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建预定义文档
     *  *
     * @param string                          $workspaceId
     * @param CreatePredefinedDocumentRequest $request     CreatePredefinedDocumentRequest
     * @param string[]                        $headers     map
     * @param RuntimeOptions                  $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreatePredefinedDocumentResponse CreatePredefinedDocumentResponse
     */
    public function createPredefinedDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chunks)) {
            $body['chunks'] = $request->chunks;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        if (!Utils::isUnset($request->metadata)) {
            $body['metadata'] = $request->metadata;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePredefinedDocument',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/document/createPredefinedDocument',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePredefinedDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建预定义文档
     *  *
     * @param string                          $workspaceId
     * @param CreatePredefinedDocumentRequest $request     CreatePredefinedDocumentRequest
     *
     * @return CreatePredefinedDocumentResponse CreatePredefinedDocumentResponse
     */
    public function createPredefinedDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPredefinedDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除文档
     *  *
     * @param string                $workspaceId
     * @param DeleteDocumentRequest $request     DeleteDocumentRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteDocumentResponse DeleteDocumentResponse
     */
    public function deleteDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docIds)) {
            $body['docIds'] = $request->docIds;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDocument',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/document/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除文档
     *  *
     * @param string                $workspaceId
     * @param DeleteDocumentRequest $request     DeleteDocumentRequest
     *
     * @return DeleteDocumentResponse DeleteDocumentResponse
     */
    public function deleteDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除文档库
     *  *
     * @param string               $workspaceId
     * @param DeleteLibraryRequest $request     DeleteLibraryRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteLibraryResponse DeleteLibraryResponse
     */
    public function deleteLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->libraryId)) {
            $query['libraryId'] = $request->libraryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLibrary',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除文档库
     *  *
     * @param string               $workspaceId
     * @param DeleteLibraryRequest $request     DeleteLibraryRequest
     *
     * @return DeleteLibraryResponse DeleteLibraryResponse
     */
    public function deleteLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取app配置
     *  *
     * @param string         $workspaceId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetAppConfigResponse GetAppConfigResponse
     */
    public function getAppConfigWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAppConfig',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/app/config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取app配置
     *  *
     * @param string $workspaceId
     *
     * @return GetAppConfigResponse GetAppConfigResponse
     */
    public function getAppConfig($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppConfigWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @summary 获取文档的chunk列表
     *  *
     * @param string                      $workspaceId
     * @param GetDocumentChunkListRequest $request     GetDocumentChunkListRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetDocumentChunkListResponse GetDocumentChunkListResponse
     */
    public function getDocumentChunkListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chunkIdList)) {
            $body['chunkIdList'] = $request->chunkIdList;
        }
        if (!Utils::isUnset($request->docId)) {
            $body['docId'] = $request->docId;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->page)) {
            $body['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchQuery)) {
            $body['searchQuery'] = $request->searchQuery;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentChunkList',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/getDocumentChunk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDocumentChunkListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文档的chunk列表
     *  *
     * @param string                      $workspaceId
     * @param GetDocumentChunkListRequest $request     GetDocumentChunkListRequest
     *
     * @return GetDocumentChunkListResponse GetDocumentChunkListResponse
     */
    public function getDocumentChunkList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentChunkListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 分页查询文档库的文档列表
     *  *
     * @param string                 $workspaceId
     * @param GetDocumentListRequest $request     GetDocumentListRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetDocumentListResponse GetDocumentListResponse
     */
    public function getDocumentListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->libraryId)) {
            $query['libraryId'] = $request->libraryId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentList',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/listDocument',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDocumentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询文档库的文档列表
     *  *
     * @param string                 $workspaceId
     * @param GetDocumentListRequest $request     GetDocumentListRequest
     *
     * @return GetDocumentListResponse GetDocumentListResponse
     */
    public function getDocumentList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取文档URL
     *  *
     * @param string                $workspaceId
     * @param GetDocumentUrlRequest $request     GetDocumentUrlRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetDocumentUrlResponse GetDocumentUrlResponse
     */
    public function getDocumentUrlWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->documentId)) {
            $query['documentId'] = $request->documentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentUrl',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/document/url',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDocumentUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文档URL
     *  *
     * @param string                $workspaceId
     * @param GetDocumentUrlRequest $request     GetDocumentUrlRequest
     *
     * @return GetDocumentUrlResponse GetDocumentUrlResponse
     */
    public function getDocumentUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 带条件的分页查询文档库的文档列表
     *  *
     * @param string                       $workspaceId
     * @param GetFilterDocumentListRequest $request     GetFilterDocumentListRequest
     * @param string[]                     $headers     map
     * @param RuntimeOptions               $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetFilterDocumentListResponse GetFilterDocumentListResponse
     */
    public function getFilterDocumentListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->and_)) {
            $body['and'] = $request->and_;
        }
        if (!Utils::isUnset($request->docIdList)) {
            $body['docIdList'] = $request->docIdList;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        if (!Utils::isUnset($request->or_)) {
            $body['or'] = $request->or_;
        }
        if (!Utils::isUnset($request->page)) {
            $body['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFilterDocumentList',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/filterDocument',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFilterDocumentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 带条件的分页查询文档库的文档列表
     *  *
     * @param string                       $workspaceId
     * @param GetFilterDocumentListRequest $request     GetFilterDocumentListRequest
     *
     * @return GetFilterDocumentListResponse GetFilterDocumentListResponse
     */
    public function getFilterDocumentList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFilterDocumentListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 分页查询文档库列表
     *  *
     * @param string                         $workspaceId
     * @param GetHistoryListByBizTypeRequest $request     GetHistoryListByBizTypeRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetHistoryListByBizTypeResponse GetHistoryListByBizTypeResponse
     */
    public function getHistoryListByBizTypeWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['bizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['bizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoryListByBizType',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/history/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHistoryListByBizTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询文档库列表
     *  *
     * @param string                         $workspaceId
     * @param GetHistoryListByBizTypeRequest $request     GetHistoryListByBizTypeRequest
     *
     * @return GetHistoryListByBizTypeResponse GetHistoryListByBizTypeResponse
     */
    public function getHistoryListByBizType($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHistoryListByBizTypeWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取文档库配置详情
     *  *
     * @param string            $workspaceId
     * @param GetLibraryRequest $request     GetLibraryRequest
     * @param string[]          $headers     map
     * @param RuntimeOptions    $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetLibraryResponse GetLibraryResponse
     */
    public function getLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->libraryId)) {
            $query['libraryId'] = $request->libraryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLibrary',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/get',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文档库配置详情
     *  *
     * @param string            $workspaceId
     * @param GetLibraryRequest $request     GetLibraryRequest
     *
     * @return GetLibraryResponse GetLibraryResponse
     */
    public function getLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 分页查询文档库列表
     *  *
     * @param string                $workspaceId
     * @param GetLibraryListRequest $request     GetLibraryListRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetLibraryListResponse GetLibraryListResponse
     */
    public function getLibraryListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLibraryList',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLibraryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询文档库列表
     *  *
     * @param string                $workspaceId
     * @param GetLibraryListRequest $request     GetLibraryListRequest
     *
     * @return GetLibraryListResponse GetLibraryListResponse
     */
    public function getLibraryList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取解析结果
     *  *
     * @param string                $workspaceId
     * @param GetParseResultRequest $request     GetParseResultRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetParseResultResponse GetParseResultResponse
     */
    public function getParseResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docId)) {
            $body['docId'] = $request->docId;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetParseResult',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/document/getParseResult',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetParseResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取解析结果
     *  *
     * @param string                $workspaceId
     * @param GetParseResultRequest $request     GetParseResultRequest
     *
     * @return GetParseResultResponse GetParseResultResponse
     */
    public function getParseResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getParseResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 插件调试接口
     *  *
     * @param string              $workspaceId
     * @param InvokePluginRequest $request     InvokePluginRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return InvokePluginResponse InvokePluginResponse
     */
    public function invokePluginWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $body['pluginId'] = $request->pluginId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvokePlugin',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/plugin/invoke',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InvokePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 插件调试接口
     *  *
     * @param string              $workspaceId
     * @param InvokePluginRequest $request     InvokePluginRequest
     *
     * @return InvokePluginResponse InvokePluginResponse
     */
    public function invokePlugin($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokePluginWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取文档预览
     *  *
     * @param string                 $workspaceId
     * @param PreviewDocumentRequest $request     PreviewDocumentRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return PreviewDocumentResponse PreviewDocumentResponse
     */
    public function previewDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->documentId)) {
            $query['documentId'] = $request->documentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreviewDocument',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/document/preview',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PreviewDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文档预览
     *  *
     * @param string                 $workspaceId
     * @param PreviewDocumentRequest $request     PreviewDocumentRequest
     *
     * @return PreviewDocumentResponse PreviewDocumentResponse
     */
    public function previewDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 重新索引
     *  *
     * @param string         $workspaceId
     * @param ReIndexRequest $request     ReIndexRequest
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ReIndexResponse ReIndexResponse
     */
    public function reIndexWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->documentId)) {
            $query['documentId'] = $request->documentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReIndex',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/document/reIndex',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重新索引
     *  *
     * @param string         $workspaceId
     * @param ReIndexRequest $request     ReIndexRequest
     *
     * @return ReIndexResponse ReIndexResponse
     */
    public function reIndex($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reIndexWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 文档召回
     *  *
     * @param string                $workspaceId
     * @param RecallDocumentRequest $request     RecallDocumentRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return RecallDocumentResponse RecallDocumentResponse
     */
    public function recallDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->filters)) {
            $body['filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        if (!Utils::isUnset($request->rearrangement)) {
            $body['rearrangement'] = $request->rearrangement;
        }
        if (!Utils::isUnset($request->topK)) {
            $body['topK'] = $request->topK;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecallDocument',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/recallDocument',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecallDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档召回
     *  *
     * @param string                $workspaceId
     * @param RecallDocumentRequest $request     RecallDocumentRequest
     *
     * @return RecallDocumentResponse RecallDocumentResponse
     */
    public function recallDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recallDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取生成式对话结果
     *  *
     * @param string                         $workspaceId
     * @param RunChatResultGenerationRequest $request     RunChatResultGenerationRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunChatResultGenerationResponse RunChatResultGenerationResponse
     */
    public function runChatResultGenerationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inferenceParameters)) {
            $body['inferenceParameters'] = $request->inferenceParameters;
        }
        if (!Utils::isUnset($request->messages)) {
            $body['messages'] = $request->messages;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->tools)) {
            $body['tools'] = $request->tools;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunChatResultGeneration',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/run/chat/generation',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunChatResultGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取生成式对话结果
     *  *
     * @param string                         $workspaceId
     * @param RunChatResultGenerationRequest $request     RunChatResultGenerationRequest
     *
     * @return RunChatResultGenerationResponse RunChatResultGenerationResponse
     */
    public function runChatResultGeneration($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runChatResultGenerationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取生成式对话结果
     *  *
     * @param string                          $workspaceId
     * @param RunLibraryChatGenerationRequest $request     RunLibraryChatGenerationRequest
     * @param string[]                        $headers     map
     * @param RuntimeOptions                  $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunLibraryChatGenerationResponse RunLibraryChatGenerationResponse
     */
    public function runLibraryChatGenerationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docIdList)) {
            $body['docIdList'] = $request->docIdList;
        }
        if (!Utils::isUnset($request->enableFollowUp)) {
            $body['enableFollowUp'] = $request->enableFollowUp;
        }
        if (!Utils::isUnset($request->enableMultiQuery)) {
            $body['enableMultiQuery'] = $request->enableMultiQuery;
        }
        if (!Utils::isUnset($request->enableOpenQa)) {
            $body['enableOpenQa'] = $request->enableOpenQa;
        }
        if (!Utils::isUnset($request->followUpLlm)) {
            $body['followUpLlm'] = $request->followUpLlm;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        if (!Utils::isUnset($request->llmType)) {
            $body['llmType'] = $request->llmType;
        }
        if (!Utils::isUnset($request->multiQueryLlm)) {
            $body['multiQueryLlm'] = $request->multiQueryLlm;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        if (!Utils::isUnset($request->queryCriteria)) {
            $body['queryCriteria'] = $request->queryCriteria;
        }
        if (!Utils::isUnset($request->rerankType)) {
            $body['rerankType'] = $request->rerankType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->subQueryList)) {
            $body['subQueryList'] = $request->subQueryList;
        }
        if (!Utils::isUnset($request->textSearchParameter)) {
            $body['textSearchParameter'] = $request->textSearchParameter;
        }
        if (!Utils::isUnset($request->topK)) {
            $body['topK'] = $request->topK;
        }
        if (!Utils::isUnset($request->vectorSearchParameter)) {
            $body['vectorSearchParameter'] = $request->vectorSearchParameter;
        }
        if (!Utils::isUnset($request->withDocumentReference)) {
            $body['withDocumentReference'] = $request->withDocumentReference;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunLibraryChatGeneration',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/run/library/chat/generation',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunLibraryChatGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取生成式对话结果
     *  *
     * @param string                          $workspaceId
     * @param RunLibraryChatGenerationRequest $request     RunLibraryChatGenerationRequest
     *
     * @return RunLibraryChatGenerationResponse RunLibraryChatGenerationResponse
     */
    public function runLibraryChatGeneration($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runLibraryChatGenerationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新文档
     *  *
     * @param string                $workspaceId
     * @param UpdateDocumentRequest $request     UpdateDocumentRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateDocumentResponse UpdateDocumentResponse
     */
    public function updateDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docId)) {
            $body['docId'] = $request->docId;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        if (!Utils::isUnset($request->meta)) {
            $body['meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDocument',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/document/updateDocument',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新文档
     *  *
     * @param string                $workspaceId
     * @param UpdateDocumentRequest $request     UpdateDocumentRequest
     *
     * @return UpdateDocumentResponse UpdateDocumentResponse
     */
    public function updateDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新文档库配置
     *  *
     * @param string               $workspaceId
     * @param UpdateLibraryRequest $request     UpdateLibraryRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateLibraryResponse UpdateLibraryResponse
     */
    public function updateLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->indexSetting)) {
            $body['indexSetting'] = $request->indexSetting;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        if (!Utils::isUnset($request->libraryName)) {
            $body['libraryName'] = $request->libraryName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLibrary',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/update',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新文档库配置
     *  *
     * @param string               $workspaceId
     * @param UpdateLibraryRequest $request     UpdateLibraryRequest
     *
     * @return UpdateLibraryResponse UpdateLibraryResponse
     */
    public function updateLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 上传文档到文档库
     *  *
     * @param string                $workspaceId
     * @param UploadDocumentRequest $request     UploadDocumentRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return UploadDocumentResponse UploadDocumentResponse
     */
    public function uploadDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['data'] = $request->data;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['fileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->libraryId)) {
            $body['libraryId'] = $request->libraryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadDocument',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/api/library/document/upload',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UploadDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上传文档到文档库
     *  *
     * @param string                $workspaceId
     * @param UploadDocumentRequest $request     UploadDocumentRequest
     *
     * @return UploadDocumentResponse UploadDocumentResponse
     */
    public function uploadDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $workspaceId
     * @param UploadDocumentAdvanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocumentAdvance($workspaceId, $request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'DianJin',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $uploadDocumentReq = new UploadDocumentRequest([]);
        OpenApiUtilClient::convert($request, $uploadDocumentReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $uploadDocumentReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->uploadDocumentWithOptions($workspaceId, $uploadDocumentReq, $headers, $runtime);
    }
}
