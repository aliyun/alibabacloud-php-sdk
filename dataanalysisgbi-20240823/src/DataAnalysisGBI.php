<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\BatchDeleteSynonymsRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\BatchDeleteSynonymsResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CancelDatasourceAuthorizationRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CancelDatasourceAuthorizationResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateBusinessLogicRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateBusinessLogicResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateDatasourceAuthorizationRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateDatasourceAuthorizationResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateSynonymsRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateSynonymsResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateVirtualDatasourceInstanceRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateVirtualDatasourceInstanceResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteBusinessLogicRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteBusinessLogicResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteColumnRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteColumnResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteSelectedTableRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteSelectedTableResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteVirtualDatasourceInstanceRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteVirtualDatasourceInstanceResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListBusinessLogicRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListBusinessLogicResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListColumnRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListColumnResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListEnumMappingRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListEnumMappingResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListSelectedTablesRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListSelectedTablesResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListSynonymsRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListSynonymsResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListVirtualDatasourceInstanceRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListVirtualDatasourceInstanceResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RecoverColumnRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RecoverColumnResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ResyncTableRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ResyncTableResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunSqlGenerationRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunSqlGenerationResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\SaveVirtualDatasourceDdlRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\SaveVirtualDatasourceDdlResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\SyncRemoteTablesRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\SyncRemoteTablesResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateBusinessLogicRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateBusinessLogicResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateColumnRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateColumnResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateEnumMappingRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateEnumMappingResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateSynonymsRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateSynonymsResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateTableInfoRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateTableInfoResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateVirtualDatasourceInstanceRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\UpdateVirtualDatasourceInstanceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class DataAnalysisGBI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dataanalysisgbi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 批量删除当前指定业务空间下的同义词.
     *
     * @param request - BatchDeleteSynonymsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteSynonymsResponse
     *
     * @param BatchDeleteSynonymsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return BatchDeleteSynonymsResponse
     */
    public function batchDeleteSynonymsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->synonymIdKeys) {
            @$body['synonymIdKeys'] = $request->synonymIdKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteSynonyms',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/batchDelete/synonyms',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchDeleteSynonymsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchDeleteSynonymsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量删除当前指定业务空间下的同义词.
     *
     * @param request - BatchDeleteSynonymsRequest
     *
     * @returns BatchDeleteSynonymsResponse
     *
     * @param BatchDeleteSynonymsRequest $request
     *
     * @return BatchDeleteSynonymsResponse
     */
    public function batchDeleteSynonyms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteSynonymsWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消关联的数据源授权.
     *
     * @param request - CancelDatasourceAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelDatasourceAuthorizationResponse
     *
     * @param CancelDatasourceAuthorizationRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CancelDatasourceAuthorizationResponse
     */
    public function cancelDatasourceAuthorizationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelDatasourceAuthorization',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/cancel/datasource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelDatasourceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelDatasourceAuthorizationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消关联的数据源授权.
     *
     * @param request - CancelDatasourceAuthorizationRequest
     *
     * @returns CancelDatasourceAuthorizationResponse
     *
     * @param CancelDatasourceAuthorizationRequest $request
     *
     * @return CancelDatasourceAuthorizationResponse
     */
    public function cancelDatasourceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelDatasourceAuthorizationWithOptions($request, $headers, $runtime);
    }

    /**
     * 在指定的业务空间下创建新的业务逻辑解释.
     *
     * @param request - CreateBusinessLogicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBusinessLogicResponse
     *
     * @param CreateBusinessLogicRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateBusinessLogicResponse
     */
    public function createBusinessLogicWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBusinessLogic',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/create/logic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateBusinessLogicResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateBusinessLogicResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 在指定的业务空间下创建新的业务逻辑解释.
     *
     * @param request - CreateBusinessLogicRequest
     *
     * @returns CreateBusinessLogicResponse
     *
     * @param CreateBusinessLogicRequest $request
     *
     * @return CreateBusinessLogicResponse
     */
    public function createBusinessLogic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBusinessLogicWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建数据库关联授权.
     *
     * @param request - CreateDatasourceAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatasourceAuthorizationResponse
     *
     * @param CreateDatasourceAuthorizationRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateDatasourceAuthorizationResponse
     */
    public function createDatasourceAuthorizationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        if (null !== $request->vdbId) {
            @$body['vdbId'] = $request->vdbId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDatasourceAuthorization',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/create/datasource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatasourceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasourceAuthorizationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建数据库关联授权.
     *
     * @param request - CreateDatasourceAuthorizationRequest
     *
     * @returns CreateDatasourceAuthorizationResponse
     *
     * @param CreateDatasourceAuthorizationRequest $request
     *
     * @return CreateDatasourceAuthorizationResponse
     */
    public function createDatasourceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasourceAuthorizationWithOptions($request, $headers, $runtime);
    }

    /**
     * 在当前指定的业务空间下面，新建同义词.
     *
     * @param request - CreateSynonymsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSynonymsResponse
     *
     * @param CreateSynonymsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSynonymsResponse
     */
    public function createSynonymsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->columns) {
            @$body['columns'] = $request->columns;
        }

        if (null !== $request->word) {
            @$body['word'] = $request->word;
        }

        if (null !== $request->wordSynonyms) {
            @$body['wordSynonyms'] = $request->wordSynonyms;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSynonyms',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/create/synonyms',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSynonymsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSynonymsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 在当前指定的业务空间下面，新建同义词.
     *
     * @param request - CreateSynonymsRequest
     *
     * @returns CreateSynonymsResponse
     *
     * @param CreateSynonymsRequest $request
     *
     * @return CreateSynonymsResponse
     */
    public function createSynonyms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSynonymsWithOptions($request, $headers, $runtime);
    }

    /**
     * 在指定的业务空间创建虚拟数据源.
     *
     * @param request - CreateVirtualDatasourceInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirtualDatasourceInstanceResponse
     *
     * @param CreateVirtualDatasourceInstanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateVirtualDatasourceInstanceResponse
     */
    public function createVirtualDatasourceInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVirtualDatasourceInstance',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/virtualDatasource/createVirtualDatasourceInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVirtualDatasourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVirtualDatasourceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 在指定的业务空间创建虚拟数据源.
     *
     * @param request - CreateVirtualDatasourceInstanceRequest
     *
     * @returns CreateVirtualDatasourceInstanceResponse
     *
     * @param CreateVirtualDatasourceInstanceRequest $request
     *
     * @return CreateVirtualDatasourceInstanceResponse
     */
    public function createVirtualDatasourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVirtualDatasourceInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除指定业务空间下所指定的业务逻辑解释.
     *
     * @param request - DeleteBusinessLogicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBusinessLogicResponse
     *
     * @param DeleteBusinessLogicRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteBusinessLogicResponse
     */
    public function deleteBusinessLogicWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->businessLogicIdKeys) {
            @$body['businessLogicIdKeys'] = $request->businessLogicIdKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteBusinessLogic',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/delete/logic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteBusinessLogicResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteBusinessLogicResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除指定业务空间下所指定的业务逻辑解释.
     *
     * @param request - DeleteBusinessLogicRequest
     *
     * @returns DeleteBusinessLogicResponse
     *
     * @param DeleteBusinessLogicRequest $request
     *
     * @return DeleteBusinessLogicResponse
     */
    public function deleteBusinessLogic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBusinessLogicWithOptions($request, $headers, $runtime);
    }

    /**
     * 从当前所指定的业务空间中，删除所指定的列.
     *
     * @param request - DeleteColumnRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteColumnResponse
     *
     * @param DeleteColumnRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteColumnResponse
     */
    public function deleteColumnWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->columnIdKey) {
            @$body['columnIdKey'] = $request->columnIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteColumn',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/delete/column',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteColumnResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteColumnResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 从当前所指定的业务空间中，删除所指定的列.
     *
     * @param request - DeleteColumnRequest
     *
     * @returns DeleteColumnResponse
     *
     * @param DeleteColumnRequest $request
     *
     * @return DeleteColumnResponse
     */
    public function deleteColumn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteColumnWithOptions($request, $headers, $runtime);
    }

    /**
     * 将当前指定数据表从指定业务空间管控中删除.
     *
     * @param request - DeleteSelectedTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSelectedTableResponse
     *
     * @param DeleteSelectedTableRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSelectedTableResponse
     */
    public function deleteSelectedTableWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->tableIdKey) {
            @$body['tableIdKey'] = $request->tableIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSelectedTable',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/delete/table',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSelectedTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSelectedTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 将当前指定数据表从指定业务空间管控中删除.
     *
     * @param request - DeleteSelectedTableRequest
     *
     * @returns DeleteSelectedTableResponse
     *
     * @param DeleteSelectedTableRequest $request
     *
     * @return DeleteSelectedTableResponse
     */
    public function deleteSelectedTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSelectedTableWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除指定业务空间下面的虚拟数据源实例.
     *
     * @param request - DeleteVirtualDatasourceInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirtualDatasourceInstanceResponse
     *
     * @param DeleteVirtualDatasourceInstanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteVirtualDatasourceInstanceResponse
     */
    public function deleteVirtualDatasourceInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->vdbId) {
            @$body['vdbId'] = $request->vdbId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVirtualDatasourceInstance',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/virtualDatasource/deleteVirtualDatasourceInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVirtualDatasourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVirtualDatasourceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除指定业务空间下面的虚拟数据源实例.
     *
     * @param request - DeleteVirtualDatasourceInstanceRequest
     *
     * @returns DeleteVirtualDatasourceInstanceResponse
     *
     * @param DeleteVirtualDatasourceInstanceRequest $request
     *
     * @return DeleteVirtualDatasourceInstanceResponse
     */
    public function deleteVirtualDatasourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVirtualDatasourceInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取当前指定业务空间下的企业知识名词解释列表.
     *
     * @param request - ListBusinessLogicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBusinessLogicResponse
     *
     * @param ListBusinessLogicRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListBusinessLogicResponse
     */
    public function listBusinessLogicWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBusinessLogic',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/list/logic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListBusinessLogicResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListBusinessLogicResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取当前指定业务空间下的企业知识名词解释列表.
     *
     * @param request - ListBusinessLogicRequest
     *
     * @returns ListBusinessLogicResponse
     *
     * @param ListBusinessLogicRequest $request
     *
     * @return ListBusinessLogicResponse
     */
    public function listBusinessLogic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBusinessLogicWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取当前指定业务空间，指定表下面的列信息.
     *
     * @param request - ListColumnRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListColumnResponse
     *
     * @param ListColumnRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListColumnResponse
     */
    public function listColumnWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->tableIdKey) {
            @$body['tableIdKey'] = $request->tableIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListColumn',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/list/column',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListColumnResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListColumnResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取当前指定业务空间，指定表下面的列信息.
     *
     * @param request - ListColumnRequest
     *
     * @returns ListColumnResponse
     *
     * @param ListColumnRequest $request
     *
     * @return ListColumnResponse
     */
    public function listColumn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listColumnWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取当前业务空间，指定表、列下的枚举值
     *
     * @param request - ListEnumMappingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnumMappingResponse
     *
     * @param ListEnumMappingRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListEnumMappingResponse
     */
    public function listEnumMappingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->columnIdKey) {
            @$body['columnIdKey'] = $request->columnIdKey;
        }

        if (null !== $request->tableIdKey) {
            @$body['tableIdKey'] = $request->tableIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEnumMapping',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/list/mapping',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnumMappingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnumMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取当前业务空间，指定表、列下的枚举值
     *
     * @param request - ListEnumMappingRequest
     *
     * @returns ListEnumMappingResponse
     *
     * @param ListEnumMappingRequest $request
     *
     * @return ListEnumMappingResponse
     */
    public function listEnumMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnumMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取当前业务空间处于以关联状态的数据表.
     *
     * @param request - ListSelectedTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSelectedTablesResponse
     *
     * @param ListSelectedTablesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListSelectedTablesResponse
     */
    public function listSelectedTablesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSelectedTables',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/list/datasource/table',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSelectedTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSelectedTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取当前业务空间处于以关联状态的数据表.
     *
     * @param request - ListSelectedTablesRequest
     *
     * @returns ListSelectedTablesResponse
     *
     * @param ListSelectedTablesRequest $request
     *
     * @return ListSelectedTablesResponse
     */
    public function listSelectedTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSelectedTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取当前指定业务空间下的同义词列表.
     *
     * @param request - ListSynonymsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSynonymsResponse
     *
     * @param ListSynonymsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSynonymsResponse
     */
    public function listSynonymsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSynonyms',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/list/synonyms',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSynonymsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSynonymsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取当前指定业务空间下的同义词列表.
     *
     * @param request - ListSynonymsRequest
     *
     * @returns ListSynonymsResponse
     *
     * @param ListSynonymsRequest $request
     *
     * @return ListSynonymsResponse
     */
    public function listSynonyms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSynonymsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取当前业务空间下的数据源实例列表.
     *
     * @param request - ListVirtualDatasourceInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirtualDatasourceInstanceResponse
     *
     * @param ListVirtualDatasourceInstanceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListVirtualDatasourceInstanceResponse
     */
    public function listVirtualDatasourceInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVirtualDatasourceInstance',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/virtualDatasource/listVirtualDatasourceInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVirtualDatasourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVirtualDatasourceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取当前业务空间下的数据源实例列表.
     *
     * @param request - ListVirtualDatasourceInstanceRequest
     *
     * @returns ListVirtualDatasourceInstanceResponse
     *
     * @param ListVirtualDatasourceInstanceRequest $request
     *
     * @return ListVirtualDatasourceInstanceResponse
     */
    public function listVirtualDatasourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVirtualDatasourceInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 将指定数据表的数据列恢复到初始话状态
     *
     * @param request - RecoverColumnRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverColumnResponse
     *
     * @param RecoverColumnRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RecoverColumnResponse
     */
    public function recoverColumnWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->columnIdKey) {
            @$body['columnIdKey'] = $request->columnIdKey;
        }

        if (null !== $request->tableIdKey) {
            @$body['tableIdKey'] = $request->tableIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecoverColumn',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/recover/column',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RecoverColumnResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RecoverColumnResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 将指定数据表的数据列恢复到初始话状态
     *
     * @param request - RecoverColumnRequest
     *
     * @returns RecoverColumnResponse
     *
     * @param RecoverColumnRequest $request
     *
     * @return RecoverColumnResponse
     */
    public function recoverColumn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recoverColumnWithOptions($request, $headers, $runtime);
    }

    /**
     * 从远程数据库刷新当前所关联的数据表信息.
     *
     * @param request - ResyncTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResyncTableResponse
     *
     * @param ResyncTableRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ResyncTableResponse
     */
    public function resyncTableWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->keep) {
            @$body['keep'] = $request->keep;
        }

        if (null !== $request->tableIdKey) {
            @$body['tableIdKey'] = $request->tableIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResyncTable',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/refresh/table',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResyncTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResyncTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 从远程数据库刷新当前所关联的数据表信息.
     *
     * @param request - ResyncTableRequest
     *
     * @returns ResyncTableResponse
     *
     * @param ResyncTableRequest $request
     *
     * @return ResyncTableResponse
     */
    public function resyncTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resyncTableWithOptions($request, $headers, $runtime);
    }

    /**
     * 运行数据分析.
     *
     * @param request - RunDataAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDataAnalysisResponse
     *
     * @param string                 $workspaceId
     * @param RunDataAnalysisRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RunDataAnalysisResponse
     */
    public function runDataAnalysisWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentCtrlParams) {
            @$body['agentCtrlParams'] = $request->agentCtrlParams;
        }

        if (null !== $request->dataRole) {
            @$body['dataRole'] = $request->dataRole;
        }

        if (null !== $request->generateSqlOnly) {
            @$body['generateSqlOnly'] = $request->generateSqlOnly;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->specificationType) {
            @$body['specificationType'] = $request->specificationType;
        }

        if (null !== $request->userParams) {
            @$body['userParams'] = $request->userParams;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDataAnalysis',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/gbi/runDataAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunDataAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDataAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 运行数据分析.
     *
     * @param request - RunDataAnalysisRequest
     *
     * @returns RunDataAnalysisResponse
     *
     * @param string                 $workspaceId
     * @param RunDataAnalysisRequest $request
     *
     * @return RunDataAnalysisResponse
     */
    public function runDataAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runDataAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 对结构化结果进行分析、可视化信息生成.
     *
     * @param request - RunDataResultAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDataResultAnalysisResponse
     *
     * @param RunDataResultAnalysisRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RunDataResultAnalysisResponse
     */
    public function runDataResultAnalysisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->analysisMode) {
            @$body['analysisMode'] = $request->analysisMode;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->sqlData) {
            @$body['sqlData'] = $request->sqlData;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDataResultAnalysis',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/runDataResultAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunDataResultAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDataResultAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 对结构化结果进行分析、可视化信息生成.
     *
     * @param request - RunDataResultAnalysisRequest
     *
     * @returns RunDataResultAnalysisResponse
     *
     * @param RunDataResultAnalysisRequest $request
     *
     * @return RunDataResultAnalysisResponse
     */
    public function runDataResultAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runDataResultAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * 运行sql生成.
     *
     * @param request - RunSqlGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunSqlGenerationResponse
     *
     * @param RunSqlGenerationRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RunSqlGenerationResponse
     */
    public function runSqlGenerationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->specificationType) {
            @$body['specificationType'] = $request->specificationType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunSqlGeneration',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/runSqlGeneration',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunSqlGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunSqlGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 运行sql生成.
     *
     * @param request - RunSqlGenerationRequest
     *
     * @returns RunSqlGenerationResponse
     *
     * @param RunSqlGenerationRequest $request
     *
     * @return RunSqlGenerationResponse
     */
    public function runSqlGeneration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runSqlGenerationWithOptions($request, $headers, $runtime);
    }

    /**
     * 向当前指定的业务空间下的指定虚拟数据源实例添加ddl语句.
     *
     * @param request - SaveVirtualDatasourceDdlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveVirtualDatasourceDdlResponse
     *
     * @param SaveVirtualDatasourceDdlRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SaveVirtualDatasourceDdlResponse
     */
    public function saveVirtualDatasourceDdlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->ddl) {
            @$body['ddl'] = $request->ddl;
        }

        if (null !== $request->vdbId) {
            @$body['vdbId'] = $request->vdbId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveVirtualDatasourceDdl',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/virtualDatasource/addDdl2VirtualInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SaveVirtualDatasourceDdlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveVirtualDatasourceDdlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 向当前指定的业务空间下的指定虚拟数据源实例添加ddl语句.
     *
     * @param request - SaveVirtualDatasourceDdlRequest
     *
     * @returns SaveVirtualDatasourceDdlResponse
     *
     * @param SaveVirtualDatasourceDdlRequest $request
     *
     * @return SaveVirtualDatasourceDdlResponse
     */
    public function saveVirtualDatasourceDdl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveVirtualDatasourceDdlWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新当前业务空间所关联的数据表.
     *
     * @param request - SyncRemoteTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncRemoteTablesResponse
     *
     * @param SyncRemoteTablesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SyncRemoteTablesResponse
     */
    public function syncRemoteTablesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->keepTableNames) {
            @$body['keepTableNames'] = $request->keepTableNames;
        }

        if (null !== $request->noModifiedTableNames) {
            @$body['noModifiedTableNames'] = $request->noModifiedTableNames;
        }

        if (null !== $request->pullSamples) {
            @$body['pullSamples'] = $request->pullSamples;
        }

        if (null !== $request->tableNames) {
            @$body['tableNames'] = $request->tableNames;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncRemoteTables',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/update/datasource/tables',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SyncRemoteTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SyncRemoteTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新当前业务空间所关联的数据表.
     *
     * @param request - SyncRemoteTablesRequest
     *
     * @returns SyncRemoteTablesResponse
     *
     * @param SyncRemoteTablesRequest $request
     *
     * @return SyncRemoteTablesResponse
     */
    public function syncRemoteTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncRemoteTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改当前指定业务空间下所指定的业务逻辑解释.
     *
     * @param request - UpdateBusinessLogicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBusinessLogicResponse
     *
     * @param UpdateBusinessLogicRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateBusinessLogicResponse
     */
    public function updateBusinessLogicWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->businessLogicIdKey) {
            @$body['businessLogicIdKey'] = $request->businessLogicIdKey;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBusinessLogic',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/update/logic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateBusinessLogicResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateBusinessLogicResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改当前指定业务空间下所指定的业务逻辑解释.
     *
     * @param request - UpdateBusinessLogicRequest
     *
     * @returns UpdateBusinessLogicResponse
     *
     * @param UpdateBusinessLogicRequest $request
     *
     * @return UpdateBusinessLogicResponse
     */
    public function updateBusinessLogic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBusinessLogicWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改当前指定业务空间中，指定列的信息.
     *
     * @param request - UpdateColumnRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateColumnResponse
     *
     * @param UpdateColumnRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateColumnResponse
     */
    public function updateColumnWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->chineseName) {
            @$body['chineseName'] = $request->chineseName;
        }

        if (null !== $request->columnIdKey) {
            @$body['columnIdKey'] = $request->columnIdKey;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enumType) {
            @$body['enumType'] = $request->enumType;
        }

        if (null !== $request->enumValues) {
            @$body['enumValues'] = $request->enumValues;
        }

        if (null !== $request->rangeMax) {
            @$body['rangeMax'] = $request->rangeMax;
        }

        if (null !== $request->rangeMin) {
            @$body['rangeMin'] = $request->rangeMin;
        }

        if (null !== $request->samples) {
            @$body['samples'] = $request->samples;
        }

        if (null !== $request->tableIdKey) {
            @$body['tableIdKey'] = $request->tableIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateColumn',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/update/column',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateColumnResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateColumnResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改当前指定业务空间中，指定列的信息.
     *
     * @param request - UpdateColumnRequest
     *
     * @returns UpdateColumnResponse
     *
     * @param UpdateColumnRequest $request
     *
     * @return UpdateColumnResponse
     */
    public function updateColumn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateColumnWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改当前指定业务空间指定列下的枚举值信息.
     *
     * @param request - UpdateEnumMappingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEnumMappingResponse
     *
     * @param UpdateEnumMappingRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEnumMappingResponse
     */
    public function updateEnumMappingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->columnIdKey) {
            @$body['columnIdKey'] = $request->columnIdKey;
        }

        if (null !== $request->enumMapping) {
            @$body['enumMapping'] = $request->enumMapping;
        }

        if (null !== $request->tableIdKey) {
            @$body['tableIdKey'] = $request->tableIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEnumMapping',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/update/mapping',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEnumMappingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEnumMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改当前指定业务空间指定列下的枚举值信息.
     *
     * @param request - UpdateEnumMappingRequest
     *
     * @returns UpdateEnumMappingResponse
     *
     * @param UpdateEnumMappingRequest $request
     *
     * @return UpdateEnumMappingResponse
     */
    public function updateEnumMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnumMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改当前业务空间指定的同义词信息.
     *
     * @param request - UpdateSynonymsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSynonymsResponse
     *
     * @param UpdateSynonymsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSynonymsResponse
     */
    public function updateSynonymsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->columns) {
            @$body['columns'] = $request->columns;
        }

        if (null !== $request->synonymIdKey) {
            @$body['synonymIdKey'] = $request->synonymIdKey;
        }

        if (null !== $request->word) {
            @$body['word'] = $request->word;
        }

        if (null !== $request->wordSynonyms) {
            @$body['wordSynonyms'] = $request->wordSynonyms;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSynonyms',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/update/synonyms',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSynonymsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSynonymsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改当前业务空间指定的同义词信息.
     *
     * @param request - UpdateSynonymsRequest
     *
     * @returns UpdateSynonymsResponse
     *
     * @param UpdateSynonymsRequest $request
     *
     * @return UpdateSynonymsResponse
     */
    public function updateSynonyms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSynonymsWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改当前所指定的数据表的信息.
     *
     * @param request - UpdateTableInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTableInfoResponse
     *
     * @param UpdateTableInfoRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateTableInfoResponse
     */
    public function updateTableInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->foreignKeys) {
            @$body['foreignKeys'] = $request->foreignKeys;
        }

        if (null !== $request->primaryKey) {
            @$body['primaryKey'] = $request->primaryKey;
        }

        if (null !== $request->tableIdKey) {
            @$body['tableIdKey'] = $request->tableIdKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTableInfo',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/update/table',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTableInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTableInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改当前所指定的数据表的信息.
     *
     * @param request - UpdateTableInfoRequest
     *
     * @returns UpdateTableInfoResponse
     *
     * @param UpdateTableInfoRequest $request
     *
     * @return UpdateTableInfoResponse
     */
    public function updateTableInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTableInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改指定业务空间下所指定的虚拟数据源的信息.
     *
     * @param request - UpdateVirtualDatasourceInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVirtualDatasourceInstanceResponse
     *
     * @param UpdateVirtualDatasourceInstanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateVirtualDatasourceInstanceResponse
     */
    public function updateVirtualDatasourceInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->vdbId) {
            @$body['vdbId'] = $request->vdbId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVirtualDatasourceInstance',
            'version' => '2024-08-23',
            'protocol' => 'HTTPS',
            'pathname' => '/gbi/virtualDatasource/updateVirtualDatasourceInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateVirtualDatasourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateVirtualDatasourceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改指定业务空间下所指定的虚拟数据源的信息.
     *
     * @param request - UpdateVirtualDatasourceInstanceRequest
     *
     * @returns UpdateVirtualDatasourceInstanceResponse
     *
     * @param UpdateVirtualDatasourceInstanceRequest $request
     *
     * @return UpdateVirtualDatasourceInstanceResponse
     */
    public function updateVirtualDatasourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVirtualDatasourceInstanceWithOptions($request, $headers, $runtime);
    }
}
