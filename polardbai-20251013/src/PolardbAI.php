<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigCreateRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigCreateResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigDeleteEntryRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigDeleteEntryResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigDeleteRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigDeleteResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigQueryEntriesRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigQueryEntriesResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigQueryTablesRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigQueryTablesResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigUpdateEntryRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIConfigUpdateEntryResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIFileTemplateDownloadRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIFileTemplateDownloadResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIFileUploadCallbackRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIFileUploadCallbackResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIFileUploadRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIFileUploadResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternCreateRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternCreateResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternDeleteEntryRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternDeleteEntryResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternDeleteRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternDeleteResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternIndexCreateRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternIndexCreateResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternIndexDeleteRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternIndexDeleteResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternIndexQueryTablesRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternIndexQueryTablesResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternQueryEntriesRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternQueryEntriesResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternQueryTablesRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternQueryTablesResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternUpdateEntryRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPatternUpdateEntryResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPredictSseRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPredictSseResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPredictSseShrinkRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBISchemaIndexCreateRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBISchemaIndexCreateResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBISchemaIndexDeleteRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBISchemaIndexDeleteResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBISchemaIndexQueryTablesRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBISchemaIndexQueryTablesResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIUpdateTableValidationColumnsRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIUpdateTableValidationColumnsResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\CreateMultimodalDatasetEmbeddingRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\CreateMultimodalDatasetEmbeddingResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\CreateMultimodalDatasetRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\CreateMultimodalDatasetResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\CreateMultimodalSearchTaskRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\CreateMultimodalSearchTaskResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\CreateMultimodalSearchTaskShrinkRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\DeleteMultimodalDatasetRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\DeleteMultimodalDatasetResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\DeleteMultimodalEmbeddingRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\DeleteMultimodalEmbeddingResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\DownloadMultimodalSearchTaskResultMetadataRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\DownloadMultimodalSearchTaskResultMetadataResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ListMultimodalDatasetRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ListMultimodalDatasetResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ListMultimodalEmbeddingModelRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ListMultimodalEmbeddingModelResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ListMultimodalSearchTaskRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ListMultimodalSearchTaskResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\UpdateMultimodalDatasetRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\UpdateMultimodalDatasetResponse;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\UploadOSSMultimodalDatasetRequest;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\UploadOSSMultimodalDatasetResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PolardbAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('polardbai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建chatbi配置表.
     *
     * @param request - ChatBIConfigCreateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIConfigCreateResponse
     *
     * @param ChatBIConfigCreateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChatBIConfigCreateResponse
     */
    public function chatBIConfigCreateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIConfigCreate',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIConfigCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建chatbi配置表.
     *
     * @param request - ChatBIConfigCreateRequest
     *
     * @returns ChatBIConfigCreateResponse
     *
     * @param ChatBIConfigCreateRequest $request
     *
     * @return ChatBIConfigCreateResponse
     */
    public function chatBIConfigCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIConfigCreateWithOptions($request, $runtime);
    }

    /**
     * 删除chatbi配置表.
     *
     * @param request - ChatBIConfigDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIConfigDeleteResponse
     *
     * @param ChatBIConfigDeleteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChatBIConfigDeleteResponse
     */
    public function chatBIConfigDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIConfigDelete',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIConfigDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除chatbi配置表.
     *
     * @param request - ChatBIConfigDeleteRequest
     *
     * @returns ChatBIConfigDeleteResponse
     *
     * @param ChatBIConfigDeleteRequest $request
     *
     * @return ChatBIConfigDeleteResponse
     */
    public function chatBIConfigDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIConfigDeleteWithOptions($request, $runtime);
    }

    /**
     * 查询chatbi问题模板表内容.
     *
     * @param request - ChatBIConfigDeleteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIConfigDeleteEntryResponse
     *
     * @param ChatBIConfigDeleteEntryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ChatBIConfigDeleteEntryResponse
     */
    public function chatBIConfigDeleteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIConfigDeleteEntry',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIConfigDeleteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询chatbi问题模板表内容.
     *
     * @param request - ChatBIConfigDeleteEntryRequest
     *
     * @returns ChatBIConfigDeleteEntryResponse
     *
     * @param ChatBIConfigDeleteEntryRequest $request
     *
     * @return ChatBIConfigDeleteEntryResponse
     */
    public function chatBIConfigDeleteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIConfigDeleteEntryWithOptions($request, $runtime);
    }

    /**
     * 查询chatbi配置表内容.
     *
     * @param request - ChatBIConfigQueryEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIConfigQueryEntriesResponse
     *
     * @param ChatBIConfigQueryEntriesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatBIConfigQueryEntriesResponse
     */
    public function chatBIConfigQueryEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIConfigQueryEntries',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIConfigQueryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询chatbi配置表内容.
     *
     * @param request - ChatBIConfigQueryEntriesRequest
     *
     * @returns ChatBIConfigQueryEntriesResponse
     *
     * @param ChatBIConfigQueryEntriesRequest $request
     *
     * @return ChatBIConfigQueryEntriesResponse
     */
    public function chatBIConfigQueryEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIConfigQueryEntriesWithOptions($request, $runtime);
    }

    /**
     * 查询客户chatbi配置表名.
     *
     * @param request - ChatBIConfigQueryTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIConfigQueryTablesResponse
     *
     * @param ChatBIConfigQueryTablesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ChatBIConfigQueryTablesResponse
     */
    public function chatBIConfigQueryTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->inputField) {
            @$query['InputField'] = $request->inputField;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIConfigQueryTables',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIConfigQueryTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询客户chatbi配置表名.
     *
     * @param request - ChatBIConfigQueryTablesRequest
     *
     * @returns ChatBIConfigQueryTablesResponse
     *
     * @param ChatBIConfigQueryTablesRequest $request
     *
     * @return ChatBIConfigQueryTablesResponse
     */
    public function chatBIConfigQueryTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIConfigQueryTablesWithOptions($request, $runtime);
    }

    /**
     * 修改chatbi配置表内容.
     *
     * @param request - ChatBIConfigUpdateEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIConfigUpdateEntryResponse
     *
     * @param ChatBIConfigUpdateEntryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ChatBIConfigUpdateEntryResponse
     */
    public function chatBIConfigUpdateEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->formulaFunction) {
            @$query['FormulaFunction'] = $request->formulaFunction;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->isFunctional) {
            @$query['IsFunctional'] = $request->isFunctional;
        }

        if (null !== $request->queryFunction) {
            @$query['QueryFunction'] = $request->queryFunction;
        }

        if (null !== $request->sqlCondition) {
            @$query['SqlCondition'] = $request->sqlCondition;
        }

        if (null !== $request->sqlFunction) {
            @$query['SqlFunction'] = $request->sqlFunction;
        }

        if (null !== $request->textCondition) {
            @$query['TextCondition'] = $request->textCondition;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIConfigUpdateEntry',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIConfigUpdateEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改chatbi配置表内容.
     *
     * @param request - ChatBIConfigUpdateEntryRequest
     *
     * @returns ChatBIConfigUpdateEntryResponse
     *
     * @param ChatBIConfigUpdateEntryRequest $request
     *
     * @return ChatBIConfigUpdateEntryResponse
     */
    public function chatBIConfigUpdateEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIConfigUpdateEntryWithOptions($request, $runtime);
    }

    /**
     * 创建chatbi问题模板表.
     *
     * @param request - ChatBIFileTemplateDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIFileTemplateDownloadResponse
     *
     * @param ChatBIFileTemplateDownloadRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ChatBIFileTemplateDownloadResponse
     */
    public function chatBIFileTemplateDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableType) {
            @$query['TableType'] = $request->tableType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIFileTemplateDownload',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIFileTemplateDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建chatbi问题模板表.
     *
     * @param request - ChatBIFileTemplateDownloadRequest
     *
     * @returns ChatBIFileTemplateDownloadResponse
     *
     * @param ChatBIFileTemplateDownloadRequest $request
     *
     * @return ChatBIFileTemplateDownloadResponse
     */
    public function chatBIFileTemplateDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIFileTemplateDownloadWithOptions($request, $runtime);
    }

    /**
     * 创建chatbi问题模板表.
     *
     * @param request - ChatBIFileUploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIFileUploadResponse
     *
     * @param ChatBIFileUploadRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ChatBIFileUploadResponse
     */
    public function chatBIFileUploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIFileUpload',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIFileUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建chatbi问题模板表.
     *
     * @param request - ChatBIFileUploadRequest
     *
     * @returns ChatBIFileUploadResponse
     *
     * @param ChatBIFileUploadRequest $request
     *
     * @return ChatBIFileUploadResponse
     */
    public function chatBIFileUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIFileUploadWithOptions($request, $runtime);
    }

    /**
     * 创建chatbi问题模板表.
     *
     * @param request - ChatBIFileUploadCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIFileUploadCallbackResponse
     *
     * @param ChatBIFileUploadCallbackRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatBIFileUploadCallbackResponse
     */
    public function chatBIFileUploadCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->characterSetName) {
            @$query['CharacterSetName'] = $request->characterSetName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tableType) {
            @$query['TableType'] = $request->tableType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIFileUploadCallback',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIFileUploadCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建chatbi问题模板表.
     *
     * @param request - ChatBIFileUploadCallbackRequest
     *
     * @returns ChatBIFileUploadCallbackResponse
     *
     * @param ChatBIFileUploadCallbackRequest $request
     *
     * @return ChatBIFileUploadCallbackResponse
     */
    public function chatBIFileUploadCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIFileUploadCallbackWithOptions($request, $runtime);
    }

    /**
     * 创建chatbi问题模板表.
     *
     * @param request - ChatBIPatternCreateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternCreateResponse
     *
     * @param ChatBIPatternCreateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChatBIPatternCreateResponse
     */
    public function chatBIPatternCreateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableNameSuffix) {
            @$query['TableNameSuffix'] = $request->tableNameSuffix;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternCreate',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建chatbi问题模板表.
     *
     * @param request - ChatBIPatternCreateRequest
     *
     * @returns ChatBIPatternCreateResponse
     *
     * @param ChatBIPatternCreateRequest $request
     *
     * @return ChatBIPatternCreateResponse
     */
    public function chatBIPatternCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternCreateWithOptions($request, $runtime);
    }

    /**
     * 删除chatbi问题模板表.
     *
     * @param request - ChatBIPatternDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternDeleteResponse
     *
     * @param ChatBIPatternDeleteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChatBIPatternDeleteResponse
     */
    public function chatBIPatternDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternDelete',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除chatbi问题模板表.
     *
     * @param request - ChatBIPatternDeleteRequest
     *
     * @returns ChatBIPatternDeleteResponse
     *
     * @param ChatBIPatternDeleteRequest $request
     *
     * @return ChatBIPatternDeleteResponse
     */
    public function chatBIPatternDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternDeleteWithOptions($request, $runtime);
    }

    /**
     * 查询chatbi问题模板表内容.
     *
     * @param request - ChatBIPatternDeleteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternDeleteEntryResponse
     *
     * @param ChatBIPatternDeleteEntryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatBIPatternDeleteEntryResponse
     */
    public function chatBIPatternDeleteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternDeleteEntry',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternDeleteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询chatbi问题模板表内容.
     *
     * @param request - ChatBIPatternDeleteEntryRequest
     *
     * @returns ChatBIPatternDeleteEntryResponse
     *
     * @param ChatBIPatternDeleteEntryRequest $request
     *
     * @return ChatBIPatternDeleteEntryResponse
     */
    public function chatBIPatternDeleteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternDeleteEntryWithOptions($request, $runtime);
    }

    /**
     * 创建chatbi检索索引表.
     *
     * @param request - ChatBIPatternIndexCreateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternIndexCreateResponse
     *
     * @param ChatBIPatternIndexCreateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatBIPatternIndexCreateResponse
     */
    public function chatBIPatternIndexCreateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->patternTableName) {
            @$query['PatternTableName'] = $request->patternTableName;
        }

        if (null !== $request->tableNameSuffix) {
            @$query['TableNameSuffix'] = $request->tableNameSuffix;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternIndexCreate',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternIndexCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建chatbi检索索引表.
     *
     * @param request - ChatBIPatternIndexCreateRequest
     *
     * @returns ChatBIPatternIndexCreateResponse
     *
     * @param ChatBIPatternIndexCreateRequest $request
     *
     * @return ChatBIPatternIndexCreateResponse
     */
    public function chatBIPatternIndexCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternIndexCreateWithOptions($request, $runtime);
    }

    /**
     * 删除检索索引表.
     *
     * @param request - ChatBIPatternIndexDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternIndexDeleteResponse
     *
     * @param ChatBIPatternIndexDeleteRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatBIPatternIndexDeleteResponse
     */
    public function chatBIPatternIndexDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternIndexDelete',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternIndexDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除检索索引表.
     *
     * @param request - ChatBIPatternIndexDeleteRequest
     *
     * @returns ChatBIPatternIndexDeleteResponse
     *
     * @param ChatBIPatternIndexDeleteRequest $request
     *
     * @return ChatBIPatternIndexDeleteResponse
     */
    public function chatBIPatternIndexDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternIndexDeleteWithOptions($request, $runtime);
    }

    /**
     * 查询检索索引表名.
     *
     * @param request - ChatBIPatternIndexQueryTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternIndexQueryTablesResponse
     *
     * @param ChatBIPatternIndexQueryTablesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ChatBIPatternIndexQueryTablesResponse
     */
    public function chatBIPatternIndexQueryTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->inputField) {
            @$query['InputField'] = $request->inputField;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternIndexQueryTables',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternIndexQueryTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询检索索引表名.
     *
     * @param request - ChatBIPatternIndexQueryTablesRequest
     *
     * @returns ChatBIPatternIndexQueryTablesResponse
     *
     * @param ChatBIPatternIndexQueryTablesRequest $request
     *
     * @return ChatBIPatternIndexQueryTablesResponse
     */
    public function chatBIPatternIndexQueryTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternIndexQueryTablesWithOptions($request, $runtime);
    }

    /**
     * 查询chatbi问题模板表内容.
     *
     * @param request - ChatBIPatternQueryEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternQueryEntriesResponse
     *
     * @param ChatBIPatternQueryEntriesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ChatBIPatternQueryEntriesResponse
     */
    public function chatBIPatternQueryEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternQueryEntries',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternQueryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询chatbi问题模板表内容.
     *
     * @param request - ChatBIPatternQueryEntriesRequest
     *
     * @returns ChatBIPatternQueryEntriesResponse
     *
     * @param ChatBIPatternQueryEntriesRequest $request
     *
     * @return ChatBIPatternQueryEntriesResponse
     */
    public function chatBIPatternQueryEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternQueryEntriesWithOptions($request, $runtime);
    }

    /**
     * 查询chatbi问题模板表名.
     *
     * @param request - ChatBIPatternQueryTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternQueryTablesResponse
     *
     * @param ChatBIPatternQueryTablesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatBIPatternQueryTablesResponse
     */
    public function chatBIPatternQueryTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->inputField) {
            @$query['InputField'] = $request->inputField;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternQueryTables',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternQueryTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询chatbi问题模板表名.
     *
     * @param request - ChatBIPatternQueryTablesRequest
     *
     * @returns ChatBIPatternQueryTablesResponse
     *
     * @param ChatBIPatternQueryTablesRequest $request
     *
     * @return ChatBIPatternQueryTablesResponse
     */
    public function chatBIPatternQueryTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternQueryTablesWithOptions($request, $runtime);
    }

    /**
     * 修改chatbi问题模板表内容.
     *
     * @param request - ChatBIPatternUpdateEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPatternUpdateEntryResponse
     *
     * @param ChatBIPatternUpdateEntryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatBIPatternUpdateEntryResponse
     */
    public function chatBIPatternUpdateEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->patternDescription) {
            @$query['PatternDescription'] = $request->patternDescription;
        }

        if (null !== $request->patternParams) {
            @$query['PatternParams'] = $request->patternParams;
        }

        if (null !== $request->patternQuestion) {
            @$query['PatternQuestion'] = $request->patternQuestion;
        }

        if (null !== $request->patternSql) {
            @$query['PatternSql'] = $request->patternSql;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPatternUpdateEntry',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPatternUpdateEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改chatbi问题模板表内容.
     *
     * @param request - ChatBIPatternUpdateEntryRequest
     *
     * @returns ChatBIPatternUpdateEntryResponse
     *
     * @param ChatBIPatternUpdateEntryRequest $request
     *
     * @return ChatBIPatternUpdateEntryResponse
     */
    public function chatBIPatternUpdateEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPatternUpdateEntryWithOptions($request, $runtime);
    }

    /**
     * 流式返回.
     *
     * @param tmpReq - ChatBIPredictSseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPredictSseResponse
     *
     * @param ChatBIPredictSseRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ChatBIPredictSseResponse
     */
    public function chatBIPredictSseWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatBIPredictSseShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->generateChart) {
            @$query['GenerateChart'] = $request->generateChart;
        }

        if (null !== $request->generateSummary) {
            @$query['GenerateSummary'] = $request->generateSummary;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->patternIndexTableName) {
            @$query['PatternIndexTableName'] = $request->patternIndexTableName;
        }

        if (null !== $request->question) {
            @$query['Question'] = $request->question;
        }

        if (null !== $request->schemaIndexTableName) {
            @$query['SchemaIndexTableName'] = $request->schemaIndexTableName;
        }

        if (null !== $request->selectData) {
            @$query['SelectData'] = $request->selectData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPredictSse',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield ChatBIPredictSseResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * 流式返回.
     *
     * @param tmpReq - ChatBIPredictSseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIPredictSseResponse
     *
     * @param ChatBIPredictSseRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ChatBIPredictSseResponse
     */
    public function chatBIPredictSseWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatBIPredictSseShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->generateChart) {
            @$query['GenerateChart'] = $request->generateChart;
        }

        if (null !== $request->generateSummary) {
            @$query['GenerateSummary'] = $request->generateSummary;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->patternIndexTableName) {
            @$query['PatternIndexTableName'] = $request->patternIndexTableName;
        }

        if (null !== $request->question) {
            @$query['Question'] = $request->question;
        }

        if (null !== $request->schemaIndexTableName) {
            @$query['SchemaIndexTableName'] = $request->schemaIndexTableName;
        }

        if (null !== $request->selectData) {
            @$query['SelectData'] = $request->selectData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIPredictSse',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIPredictSseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 流式返回.
     *
     * @param request - ChatBIPredictSseRequest
     *
     * @returns ChatBIPredictSseResponse
     *
     * @param ChatBIPredictSseRequest $request
     *
     * @return ChatBIPredictSseResponse
     */
    public function chatBIPredictSse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIPredictSseWithOptions($request, $runtime);
    }

    /**
     * 创建chatbi检索索引表.
     *
     * @param request - ChatBISchemaIndexCreateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBISchemaIndexCreateResponse
     *
     * @param ChatBISchemaIndexCreateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ChatBISchemaIndexCreateResponse
     */
    public function chatBISchemaIndexCreateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->columnsExcluded) {
            @$query['ColumnsExcluded'] = $request->columnsExcluded;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableNameSuffix) {
            @$query['TableNameSuffix'] = $request->tableNameSuffix;
        }

        if (null !== $request->tablesIncluded) {
            @$query['TablesIncluded'] = $request->tablesIncluded;
        }

        if (null !== $request->toSample) {
            @$query['ToSample'] = $request->toSample;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBISchemaIndexCreate',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBISchemaIndexCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建chatbi检索索引表.
     *
     * @param request - ChatBISchemaIndexCreateRequest
     *
     * @returns ChatBISchemaIndexCreateResponse
     *
     * @param ChatBISchemaIndexCreateRequest $request
     *
     * @return ChatBISchemaIndexCreateResponse
     */
    public function chatBISchemaIndexCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBISchemaIndexCreateWithOptions($request, $runtime);
    }

    /**
     * 删除检索索引表.
     *
     * @param request - ChatBISchemaIndexDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBISchemaIndexDeleteResponse
     *
     * @param ChatBISchemaIndexDeleteRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ChatBISchemaIndexDeleteResponse
     */
    public function chatBISchemaIndexDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBISchemaIndexDelete',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBISchemaIndexDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除检索索引表.
     *
     * @param request - ChatBISchemaIndexDeleteRequest
     *
     * @returns ChatBISchemaIndexDeleteResponse
     *
     * @param ChatBISchemaIndexDeleteRequest $request
     *
     * @return ChatBISchemaIndexDeleteResponse
     */
    public function chatBISchemaIndexDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBISchemaIndexDeleteWithOptions($request, $runtime);
    }

    /**
     * 查询检索索引表名.
     *
     * @param request - ChatBISchemaIndexQueryTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBISchemaIndexQueryTablesResponse
     *
     * @param ChatBISchemaIndexQueryTablesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ChatBISchemaIndexQueryTablesResponse
     */
    public function chatBISchemaIndexQueryTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->inputField) {
            @$query['InputField'] = $request->inputField;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBISchemaIndexQueryTables',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBISchemaIndexQueryTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询检索索引表名.
     *
     * @param request - ChatBISchemaIndexQueryTablesRequest
     *
     * @returns ChatBISchemaIndexQueryTablesResponse
     *
     * @param ChatBISchemaIndexQueryTablesRequest $request
     *
     * @return ChatBISchemaIndexQueryTablesResponse
     */
    public function chatBISchemaIndexQueryTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBISchemaIndexQueryTablesWithOptions($request, $runtime);
    }

    /**
     * 查询chatbi问题模板表内容.
     *
     * @param request - ChatBIUpdateTableValidationColumnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatBIUpdateTableValidationColumnsResponse
     *
     * @param ChatBIUpdateTableValidationColumnsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ChatBIUpdateTableValidationColumnsResponse
     */
    public function chatBIUpdateTableValidationColumnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tableType) {
            @$query['TableType'] = $request->tableType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatBIUpdateTableValidationColumns',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatBIUpdateTableValidationColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询chatbi问题模板表内容.
     *
     * @param request - ChatBIUpdateTableValidationColumnsRequest
     *
     * @returns ChatBIUpdateTableValidationColumnsResponse
     *
     * @param ChatBIUpdateTableValidationColumnsRequest $request
     *
     * @return ChatBIUpdateTableValidationColumnsResponse
     */
    public function chatBIUpdateTableValidationColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatBIUpdateTableValidationColumnsWithOptions($request, $runtime);
    }

    /**
     * 查询多模态数据集列表.
     *
     * @param request - CreateMultimodalDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMultimodalDatasetResponse
     *
     * @param CreateMultimodalDatasetRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateMultimodalDatasetResponse
     */
    public function createMultimodalDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasetDescription) {
            @$query['DatasetDescription'] = $request->datasetDescription;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMultimodalDataset',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMultimodalDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询多模态数据集列表.
     *
     * @param request - CreateMultimodalDatasetRequest
     *
     * @returns CreateMultimodalDatasetResponse
     *
     * @param CreateMultimodalDatasetRequest $request
     *
     * @return CreateMultimodalDatasetResponse
     */
    public function createMultimodalDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMultimodalDatasetWithOptions($request, $runtime);
    }

    /**
     * 创建Embedding.
     *
     * @param request - CreateMultimodalDatasetEmbeddingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMultimodalDatasetEmbeddingResponse
     *
     * @param CreateMultimodalDatasetEmbeddingRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateMultimodalDatasetEmbeddingResponse
     */
    public function createMultimodalDatasetEmbeddingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMultimodalDatasetEmbedding',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMultimodalDatasetEmbeddingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Embedding.
     *
     * @param request - CreateMultimodalDatasetEmbeddingRequest
     *
     * @returns CreateMultimodalDatasetEmbeddingResponse
     *
     * @param CreateMultimodalDatasetEmbeddingRequest $request
     *
     * @return CreateMultimodalDatasetEmbeddingResponse
     */
    public function createMultimodalDatasetEmbedding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMultimodalDatasetEmbeddingWithOptions($request, $runtime);
    }

    /**
     * 创建SearchTask.
     *
     * @param tmpReq - CreateMultimodalSearchTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMultimodalSearchTaskResponse
     *
     * @param CreateMultimodalSearchTaskRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateMultimodalSearchTaskResponse
     */
    public function createMultimodalSearchTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMultimodalSearchTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->datasetIds) {
            $request->datasetIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->datasetIds, 'DatasetIds', 'json');
        }

        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasetIdsShrink) {
            @$query['DatasetIds'] = $request->datasetIdsShrink;
        }

        if (null !== $request->embeddingModel) {
            @$query['EmbeddingModel'] = $request->embeddingModel;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->searchModel) {
            @$query['SearchModel'] = $request->searchModel;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMultimodalSearchTask',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMultimodalSearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建SearchTask.
     *
     * @param request - CreateMultimodalSearchTaskRequest
     *
     * @returns CreateMultimodalSearchTaskResponse
     *
     * @param CreateMultimodalSearchTaskRequest $request
     *
     * @return CreateMultimodalSearchTaskResponse
     */
    public function createMultimodalSearchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMultimodalSearchTaskWithOptions($request, $runtime);
    }

    /**
     * 删除多模态数据集.
     *
     * @param request - DeleteMultimodalDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMultimodalDatasetResponse
     *
     * @param DeleteMultimodalDatasetRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteMultimodalDatasetResponse
     */
    public function deleteMultimodalDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMultimodalDataset',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMultimodalDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除多模态数据集.
     *
     * @param request - DeleteMultimodalDatasetRequest
     *
     * @returns DeleteMultimodalDatasetResponse
     *
     * @param DeleteMultimodalDatasetRequest $request
     *
     * @return DeleteMultimodalDatasetResponse
     */
    public function deleteMultimodalDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMultimodalDatasetWithOptions($request, $runtime);
    }

    /**
     * 删除多模态数据集embedding.
     *
     * @param request - DeleteMultimodalEmbeddingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMultimodalEmbeddingResponse
     *
     * @param DeleteMultimodalEmbeddingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMultimodalEmbeddingResponse
     */
    public function deleteMultimodalEmbeddingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->embedding) {
            @$query['Embedding'] = $request->embedding;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMultimodalEmbedding',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMultimodalEmbeddingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除多模态数据集embedding.
     *
     * @param request - DeleteMultimodalEmbeddingRequest
     *
     * @returns DeleteMultimodalEmbeddingResponse
     *
     * @param DeleteMultimodalEmbeddingRequest $request
     *
     * @return DeleteMultimodalEmbeddingResponse
     */
    public function deleteMultimodalEmbedding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMultimodalEmbeddingWithOptions($request, $runtime);
    }

    /**
     * 下载Search任务的结果元数据.
     *
     * @param request - DownloadMultimodalSearchTaskResultMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadMultimodalSearchTaskResultMetadataResponse
     *
     * @param DownloadMultimodalSearchTaskResultMetadataRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DownloadMultimodalSearchTaskResultMetadataResponse
     */
    public function downloadMultimodalSearchTaskResultMetadataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadMultimodalSearchTaskResultMetadata',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadMultimodalSearchTaskResultMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下载Search任务的结果元数据.
     *
     * @param request - DownloadMultimodalSearchTaskResultMetadataRequest
     *
     * @returns DownloadMultimodalSearchTaskResultMetadataResponse
     *
     * @param DownloadMultimodalSearchTaskResultMetadataRequest $request
     *
     * @return DownloadMultimodalSearchTaskResultMetadataResponse
     */
    public function downloadMultimodalSearchTaskResultMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadMultimodalSearchTaskResultMetadataWithOptions($request, $runtime);
    }

    /**
     * 查询多模态数据集列表.
     *
     * @param request - ListMultimodalDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMultimodalDatasetResponse
     *
     * @param ListMultimodalDatasetRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMultimodalDatasetResponse
     */
    public function listMultimodalDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->inputField) {
            @$query['InputField'] = $request->inputField;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMultimodalDataset',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultimodalDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询多模态数据集列表.
     *
     * @param request - ListMultimodalDatasetRequest
     *
     * @returns ListMultimodalDatasetResponse
     *
     * @param ListMultimodalDatasetRequest $request
     *
     * @return ListMultimodalDatasetResponse
     */
    public function listMultimodalDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultimodalDatasetWithOptions($request, $runtime);
    }

    /**
     * 查询模型列表.
     *
     * @param request - ListMultimodalEmbeddingModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMultimodalEmbeddingModelResponse
     *
     * @param ListMultimodalEmbeddingModelRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListMultimodalEmbeddingModelResponse
     */
    public function listMultimodalEmbeddingModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMultimodalEmbeddingModel',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultimodalEmbeddingModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询模型列表.
     *
     * @param request - ListMultimodalEmbeddingModelRequest
     *
     * @returns ListMultimodalEmbeddingModelResponse
     *
     * @param ListMultimodalEmbeddingModelRequest $request
     *
     * @return ListMultimodalEmbeddingModelResponse
     */
    public function listMultimodalEmbeddingModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultimodalEmbeddingModelWithOptions($request, $runtime);
    }

    /**
     * 查询search task列表.
     *
     * @param request - ListMultimodalSearchTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMultimodalSearchTaskResponse
     *
     * @param ListMultimodalSearchTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMultimodalSearchTaskResponse
     */
    public function listMultimodalSearchTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMultimodalSearchTask',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultimodalSearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询search task列表.
     *
     * @param request - ListMultimodalSearchTaskRequest
     *
     * @returns ListMultimodalSearchTaskResponse
     *
     * @param ListMultimodalSearchTaskRequest $request
     *
     * @return ListMultimodalSearchTaskResponse
     */
    public function listMultimodalSearchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultimodalSearchTaskWithOptions($request, $runtime);
    }

    /**
     * 更新数据集信息.
     *
     * @param request - UpdateMultimodalDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMultimodalDatasetResponse
     *
     * @param UpdateMultimodalDatasetRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMultimodalDatasetResponse
     */
    public function updateMultimodalDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasetDescription) {
            @$query['DatasetDescription'] = $request->datasetDescription;
        }

        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMultimodalDataset',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMultimodalDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据集信息.
     *
     * @param request - UpdateMultimodalDatasetRequest
     *
     * @returns UpdateMultimodalDatasetResponse
     *
     * @param UpdateMultimodalDatasetRequest $request
     *
     * @return UpdateMultimodalDatasetResponse
     */
    public function updateMultimodalDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMultimodalDatasetWithOptions($request, $runtime);
    }

    /**
     * 导入OSS数据集.
     *
     * @param request - UploadOSSMultimodalDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadOSSMultimodalDatasetResponse
     *
     * @param UploadOSSMultimodalDatasetRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UploadOSSMultimodalDatasetResponse
     */
    public function uploadOSSMultimodalDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->ossUrl) {
            @$query['OssUrl'] = $request->ossUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadOSSMultimodalDataset',
            'version' => '2025-10-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadOSSMultimodalDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导入OSS数据集.
     *
     * @param request - UploadOSSMultimodalDatasetRequest
     *
     * @returns UploadOSSMultimodalDatasetResponse
     *
     * @param UploadOSSMultimodalDatasetRequest $request
     *
     * @return UploadOSSMultimodalDatasetResponse
     */
    public function uploadOSSMultimodalDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadOSSMultimodalDatasetWithOptions($request, $runtime);
    }
}
