<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 批量删除当前指定业务空间下的同义词
     *  *
     * @param BatchDeleteSynonymsRequest $request BatchDeleteSynonymsRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteSynonymsResponse BatchDeleteSynonymsResponse
     */
    public function batchDeleteSynonymsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->synonymIdKeys)) {
            $body['synonymIdKeys'] = $request->synonymIdKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteSynonyms',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/batchDelete/synonyms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteSynonymsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除当前指定业务空间下的同义词
     *  *
     * @param BatchDeleteSynonymsRequest $request BatchDeleteSynonymsRequest
     *
     * @return BatchDeleteSynonymsResponse BatchDeleteSynonymsResponse
     */
    public function batchDeleteSynonyms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteSynonymsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消关联的数据源授权
     *  *
     * @param CancelDatasourceAuthorizationRequest $request CancelDatasourceAuthorizationRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelDatasourceAuthorizationResponse CancelDatasourceAuthorizationResponse
     */
    public function cancelDatasourceAuthorizationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelDatasourceAuthorization',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/cancel/datasource',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelDatasourceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消关联的数据源授权
     *  *
     * @param CancelDatasourceAuthorizationRequest $request CancelDatasourceAuthorizationRequest
     *
     * @return CancelDatasourceAuthorizationResponse CancelDatasourceAuthorizationResponse
     */
    public function cancelDatasourceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelDatasourceAuthorizationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 在指定的业务空间下创建新的业务逻辑解释
     *  *
     * @param CreateBusinessLogicRequest $request CreateBusinessLogicRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBusinessLogicResponse CreateBusinessLogicResponse
     */
    public function createBusinessLogicWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBusinessLogic',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/create/logic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBusinessLogicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在指定的业务空间下创建新的业务逻辑解释
     *  *
     * @param CreateBusinessLogicRequest $request CreateBusinessLogicRequest
     *
     * @return CreateBusinessLogicResponse CreateBusinessLogicResponse
     */
    public function createBusinessLogic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBusinessLogicWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建数据库关联授权
     *  *
     * @param CreateDatasourceAuthorizationRequest $request CreateDatasourceAuthorizationRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatasourceAuthorizationResponse CreateDatasourceAuthorizationResponse
     */
    public function createDatasourceAuthorizationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->url)) {
            $body['url'] = $request->url;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['userName'] = $request->userName;
        }
        if (!Utils::isUnset($request->vdbId)) {
            $body['vdbId'] = $request->vdbId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasourceAuthorization',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/create/datasource',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDatasourceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据库关联授权
     *  *
     * @param CreateDatasourceAuthorizationRequest $request CreateDatasourceAuthorizationRequest
     *
     * @return CreateDatasourceAuthorizationResponse CreateDatasourceAuthorizationResponse
     */
    public function createDatasourceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasourceAuthorizationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 在当前指定的业务空间下面，新建同义词
     *  *
     * @param CreateSynonymsRequest $request CreateSynonymsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSynonymsResponse CreateSynonymsResponse
     */
    public function createSynonymsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->columns)) {
            $body['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->word)) {
            $body['word'] = $request->word;
        }
        if (!Utils::isUnset($request->wordSynonyms)) {
            $body['wordSynonyms'] = $request->wordSynonyms;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSynonyms',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/create/synonyms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSynonymsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在当前指定的业务空间下面，新建同义词
     *  *
     * @param CreateSynonymsRequest $request CreateSynonymsRequest
     *
     * @return CreateSynonymsResponse CreateSynonymsResponse
     */
    public function createSynonyms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSynonymsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 在指定的业务空间创建虚拟数据源
     *  *
     * @param CreateVirtualDatasourceInstanceRequest $request CreateVirtualDatasourceInstanceRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVirtualDatasourceInstanceResponse CreateVirtualDatasourceInstanceResponse
     */
    public function createVirtualDatasourceInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualDatasourceInstance',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/virtualDatasource/createVirtualDatasourceInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualDatasourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在指定的业务空间创建虚拟数据源
     *  *
     * @param CreateVirtualDatasourceInstanceRequest $request CreateVirtualDatasourceInstanceRequest
     *
     * @return CreateVirtualDatasourceInstanceResponse CreateVirtualDatasourceInstanceResponse
     */
    public function createVirtualDatasourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVirtualDatasourceInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除指定业务空间下所指定的业务逻辑解释
     *  *
     * @param DeleteBusinessLogicRequest $request DeleteBusinessLogicRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBusinessLogicResponse DeleteBusinessLogicResponse
     */
    public function deleteBusinessLogicWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->businessLogicIdKeys)) {
            $body['businessLogicIdKeys'] = $request->businessLogicIdKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteBusinessLogic',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/delete/logic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBusinessLogicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定业务空间下所指定的业务逻辑解释
     *  *
     * @param DeleteBusinessLogicRequest $request DeleteBusinessLogicRequest
     *
     * @return DeleteBusinessLogicResponse DeleteBusinessLogicResponse
     */
    public function deleteBusinessLogic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBusinessLogicWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 从当前所指定的业务空间中，删除所指定的列
     *  *
     * @param DeleteColumnRequest $request DeleteColumnRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteColumnResponse DeleteColumnResponse
     */
    public function deleteColumnWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->columnIdKey)) {
            $body['columnIdKey'] = $request->columnIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteColumn',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/delete/column',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从当前所指定的业务空间中，删除所指定的列
     *  *
     * @param DeleteColumnRequest $request DeleteColumnRequest
     *
     * @return DeleteColumnResponse DeleteColumnResponse
     */
    public function deleteColumn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteColumnWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 将当前指定数据表从指定业务空间管控中删除
     *  *
     * @param DeleteSelectedTableRequest $request DeleteSelectedTableRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSelectedTableResponse DeleteSelectedTableResponse
     */
    public function deleteSelectedTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->tableIdKey)) {
            $body['tableIdKey'] = $request->tableIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSelectedTable',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/delete/table',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSelectedTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将当前指定数据表从指定业务空间管控中删除
     *  *
     * @param DeleteSelectedTableRequest $request DeleteSelectedTableRequest
     *
     * @return DeleteSelectedTableResponse DeleteSelectedTableResponse
     */
    public function deleteSelectedTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSelectedTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除指定业务空间下面的虚拟数据源实例
     *  *
     * @param DeleteVirtualDatasourceInstanceRequest $request DeleteVirtualDatasourceInstanceRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVirtualDatasourceInstanceResponse DeleteVirtualDatasourceInstanceResponse
     */
    public function deleteVirtualDatasourceInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->vdbId)) {
            $body['vdbId'] = $request->vdbId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteVirtualDatasourceInstance',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/virtualDatasource/deleteVirtualDatasourceInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVirtualDatasourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定业务空间下面的虚拟数据源实例
     *  *
     * @param DeleteVirtualDatasourceInstanceRequest $request DeleteVirtualDatasourceInstanceRequest
     *
     * @return DeleteVirtualDatasourceInstanceResponse DeleteVirtualDatasourceInstanceResponse
     */
    public function deleteVirtualDatasourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVirtualDatasourceInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取当前指定业务空间下的企业知识名词解释列表
     *  *
     * @param ListBusinessLogicRequest $request ListBusinessLogicRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBusinessLogicResponse ListBusinessLogicResponse
     */
    public function listBusinessLogicWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBusinessLogic',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/list/logic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBusinessLogicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前指定业务空间下的企业知识名词解释列表
     *  *
     * @param ListBusinessLogicRequest $request ListBusinessLogicRequest
     *
     * @return ListBusinessLogicResponse ListBusinessLogicResponse
     */
    public function listBusinessLogic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBusinessLogicWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取当前指定业务空间，指定表下面的列信息
     *  *
     * @param ListColumnRequest $request ListColumnRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListColumnResponse ListColumnResponse
     */
    public function listColumnWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tableIdKey)) {
            $body['tableIdKey'] = $request->tableIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListColumn',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/list/column',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前指定业务空间，指定表下面的列信息
     *  *
     * @param ListColumnRequest $request ListColumnRequest
     *
     * @return ListColumnResponse ListColumnResponse
     */
    public function listColumn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listColumnWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取当前业务空间，指定表、列下的枚举值
     *  *
     * @param ListEnumMappingRequest $request ListEnumMappingRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnumMappingResponse ListEnumMappingResponse
     */
    public function listEnumMappingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->columnIdKey)) {
            $body['columnIdKey'] = $request->columnIdKey;
        }
        if (!Utils::isUnset($request->tableIdKey)) {
            $body['tableIdKey'] = $request->tableIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEnumMapping',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/list/mapping',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnumMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前业务空间，指定表、列下的枚举值
     *  *
     * @param ListEnumMappingRequest $request ListEnumMappingRequest
     *
     * @return ListEnumMappingResponse ListEnumMappingResponse
     */
    public function listEnumMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnumMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取当前业务空间处于以关联状态的数据表
     *  *
     * @param ListSelectedTablesRequest $request ListSelectedTablesRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSelectedTablesResponse ListSelectedTablesResponse
     */
    public function listSelectedTablesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSelectedTables',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/list/datasource/table',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSelectedTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前业务空间处于以关联状态的数据表
     *  *
     * @param ListSelectedTablesRequest $request ListSelectedTablesRequest
     *
     * @return ListSelectedTablesResponse ListSelectedTablesResponse
     */
    public function listSelectedTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSelectedTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取当前指定业务空间下的同义词列表
     *  *
     * @param ListSynonymsRequest $request ListSynonymsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSynonymsResponse ListSynonymsResponse
     */
    public function listSynonymsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSynonyms',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/list/synonyms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSynonymsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前指定业务空间下的同义词列表
     *  *
     * @param ListSynonymsRequest $request ListSynonymsRequest
     *
     * @return ListSynonymsResponse ListSynonymsResponse
     */
    public function listSynonyms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSynonymsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取当前业务空间下的数据源实例列表
     *  *
     * @param ListVirtualDatasourceInstanceRequest $request ListVirtualDatasourceInstanceRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVirtualDatasourceInstanceResponse ListVirtualDatasourceInstanceResponse
     */
    public function listVirtualDatasourceInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVirtualDatasourceInstance',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/virtualDatasource/listVirtualDatasourceInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVirtualDatasourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前业务空间下的数据源实例列表
     *  *
     * @param ListVirtualDatasourceInstanceRequest $request ListVirtualDatasourceInstanceRequest
     *
     * @return ListVirtualDatasourceInstanceResponse ListVirtualDatasourceInstanceResponse
     */
    public function listVirtualDatasourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVirtualDatasourceInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 将指定数据表的数据列恢复到初始话状态
     *  *
     * @param RecoverColumnRequest $request RecoverColumnRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RecoverColumnResponse RecoverColumnResponse
     */
    public function recoverColumnWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->columnIdKey)) {
            $body['columnIdKey'] = $request->columnIdKey;
        }
        if (!Utils::isUnset($request->tableIdKey)) {
            $body['tableIdKey'] = $request->tableIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecoverColumn',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/recover/column',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecoverColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将指定数据表的数据列恢复到初始话状态
     *  *
     * @param RecoverColumnRequest $request RecoverColumnRequest
     *
     * @return RecoverColumnResponse RecoverColumnResponse
     */
    public function recoverColumn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recoverColumnWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 从远程数据库刷新当前所关联的数据表信息
     *  *
     * @param ResyncTableRequest $request ResyncTableRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ResyncTableResponse ResyncTableResponse
     */
    public function resyncTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->tableIdKey)) {
            $body['tableIdKey'] = $request->tableIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResyncTable',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/refresh/table',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResyncTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从远程数据库刷新当前所关联的数据表信息
     *  *
     * @param ResyncTableRequest $request ResyncTableRequest
     *
     * @return ResyncTableResponse ResyncTableResponse
     */
    public function resyncTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resyncTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 运行数据分析
     *  *
     * @param string                 $workspaceId
     * @param RunDataAnalysisRequest $request     RunDataAnalysisRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunDataAnalysisResponse RunDataAnalysisResponse
     */
    public function runDataAnalysisWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->generateSqlOnly)) {
            $body['generateSqlOnly'] = $request->generateSqlOnly;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->specificationType)) {
            $body['specificationType'] = $request->specificationType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunDataAnalysis',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/gbi/runDataAnalysis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunDataAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 运行数据分析
     *  *
     * @param string                 $workspaceId
     * @param RunDataAnalysisRequest $request     RunDataAnalysisRequest
     *
     * @return RunDataAnalysisResponse RunDataAnalysisResponse
     */
    public function runDataAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runDataAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 向当前指定的业务空间下的指定虚拟数据源实例添加ddl语句
     *  *
     * @param SaveVirtualDatasourceDdlRequest $request SaveVirtualDatasourceDdlRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveVirtualDatasourceDdlResponse SaveVirtualDatasourceDdlResponse
     */
    public function saveVirtualDatasourceDdlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->ddl)) {
            $body['ddl'] = $request->ddl;
        }
        if (!Utils::isUnset($request->vdbId)) {
            $body['vdbId'] = $request->vdbId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveVirtualDatasourceDdl',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/virtualDatasource/addDdl2VirtualInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SaveVirtualDatasourceDdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 向当前指定的业务空间下的指定虚拟数据源实例添加ddl语句
     *  *
     * @param SaveVirtualDatasourceDdlRequest $request SaveVirtualDatasourceDdlRequest
     *
     * @return SaveVirtualDatasourceDdlResponse SaveVirtualDatasourceDdlResponse
     */
    public function saveVirtualDatasourceDdl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveVirtualDatasourceDdlWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新当前业务空间所关联的数据表
     *  *
     * @param SyncRemoteTablesRequest $request SyncRemoteTablesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncRemoteTablesResponse SyncRemoteTablesResponse
     */
    public function syncRemoteTablesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->keepTableNames)) {
            $body['keepTableNames'] = $request->keepTableNames;
        }
        if (!Utils::isUnset($request->pullSamples)) {
            $body['pullSamples'] = $request->pullSamples;
        }
        if (!Utils::isUnset($request->tableNames)) {
            $body['tableNames'] = $request->tableNames;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncRemoteTables',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/update/datasource/tables',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SyncRemoteTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新当前业务空间所关联的数据表
     *  *
     * @param SyncRemoteTablesRequest $request SyncRemoteTablesRequest
     *
     * @return SyncRemoteTablesResponse SyncRemoteTablesResponse
     */
    public function syncRemoteTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncRemoteTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改当前指定业务空间下所指定的业务逻辑解释
     *  *
     * @param UpdateBusinessLogicRequest $request UpdateBusinessLogicRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBusinessLogicResponse UpdateBusinessLogicResponse
     */
    public function updateBusinessLogicWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->businessLogicIdKey)) {
            $body['businessLogicIdKey'] = $request->businessLogicIdKey;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateBusinessLogic',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/update/logic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateBusinessLogicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改当前指定业务空间下所指定的业务逻辑解释
     *  *
     * @param UpdateBusinessLogicRequest $request UpdateBusinessLogicRequest
     *
     * @return UpdateBusinessLogicResponse UpdateBusinessLogicResponse
     */
    public function updateBusinessLogic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBusinessLogicWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改当前指定业务空间中，指定列的信息
     *  *
     * @param UpdateColumnRequest $request UpdateColumnRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateColumnResponse UpdateColumnResponse
     */
    public function updateColumnWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->chineseName)) {
            $body['chineseName'] = $request->chineseName;
        }
        if (!Utils::isUnset($request->columnIdKey)) {
            $body['columnIdKey'] = $request->columnIdKey;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enumType)) {
            $body['enumType'] = $request->enumType;
        }
        if (!Utils::isUnset($request->enumValues)) {
            $body['enumValues'] = $request->enumValues;
        }
        if (!Utils::isUnset($request->rangeMax)) {
            $body['rangeMax'] = $request->rangeMax;
        }
        if (!Utils::isUnset($request->rangeMin)) {
            $body['rangeMin'] = $request->rangeMin;
        }
        if (!Utils::isUnset($request->samples)) {
            $body['samples'] = $request->samples;
        }
        if (!Utils::isUnset($request->tableIdKey)) {
            $body['tableIdKey'] = $request->tableIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateColumn',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/update/column',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改当前指定业务空间中，指定列的信息
     *  *
     * @param UpdateColumnRequest $request UpdateColumnRequest
     *
     * @return UpdateColumnResponse UpdateColumnResponse
     */
    public function updateColumn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateColumnWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改当前指定业务空间指定列下的枚举值信息
     *  *
     * @param UpdateEnumMappingRequest $request UpdateEnumMappingRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEnumMappingResponse UpdateEnumMappingResponse
     */
    public function updateEnumMappingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->columnIdKey)) {
            $body['columnIdKey'] = $request->columnIdKey;
        }
        if (!Utils::isUnset($request->enumMapping)) {
            $body['enumMapping'] = $request->enumMapping;
        }
        if (!Utils::isUnset($request->tableIdKey)) {
            $body['tableIdKey'] = $request->tableIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnumMapping',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/update/mapping',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEnumMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改当前指定业务空间指定列下的枚举值信息
     *  *
     * @param UpdateEnumMappingRequest $request UpdateEnumMappingRequest
     *
     * @return UpdateEnumMappingResponse UpdateEnumMappingResponse
     */
    public function updateEnumMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnumMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改当前业务空间指定的同义词信息
     *  *
     * @param UpdateSynonymsRequest $request UpdateSynonymsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSynonymsResponse UpdateSynonymsResponse
     */
    public function updateSynonymsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->columns)) {
            $body['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->synonymIdKey)) {
            $body['synonymIdKey'] = $request->synonymIdKey;
        }
        if (!Utils::isUnset($request->word)) {
            $body['word'] = $request->word;
        }
        if (!Utils::isUnset($request->wordSynonyms)) {
            $body['wordSynonyms'] = $request->wordSynonyms;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSynonyms',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/update/synonyms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSynonymsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改当前业务空间指定的同义词信息
     *  *
     * @param UpdateSynonymsRequest $request UpdateSynonymsRequest
     *
     * @return UpdateSynonymsResponse UpdateSynonymsResponse
     */
    public function updateSynonyms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSynonymsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改当前所指定的数据表的信息
     *  *
     * @param UpdateTableInfoRequest $request UpdateTableInfoRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTableInfoResponse UpdateTableInfoResponse
     */
    public function updateTableInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->foreignKeys)) {
            $body['foreignKeys'] = $request->foreignKeys;
        }
        if (!Utils::isUnset($request->primaryKey)) {
            $body['primaryKey'] = $request->primaryKey;
        }
        if (!Utils::isUnset($request->tableIdKey)) {
            $body['tableIdKey'] = $request->tableIdKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTableInfo',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/update/table',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTableInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改当前所指定的数据表的信息
     *  *
     * @param UpdateTableInfoRequest $request UpdateTableInfoRequest
     *
     * @return UpdateTableInfoResponse UpdateTableInfoResponse
     */
    public function updateTableInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTableInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改指定业务空间下所指定的虚拟数据源的信息
     *  *
     * @param UpdateVirtualDatasourceInstanceRequest $request UpdateVirtualDatasourceInstanceRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVirtualDatasourceInstanceResponse UpdateVirtualDatasourceInstanceResponse
     */
    public function updateVirtualDatasourceInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->vdbId)) {
            $body['vdbId'] = $request->vdbId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVirtualDatasourceInstance',
            'version'     => '2024-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gbi/virtualDatasource/updateVirtualDatasourceInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateVirtualDatasourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改指定业务空间下所指定的虚拟数据源的信息
     *  *
     * @param UpdateVirtualDatasourceInstanceRequest $request UpdateVirtualDatasourceInstanceRequest
     *
     * @return UpdateVirtualDatasourceInstanceResponse UpdateVirtualDatasourceInstanceResponse
     */
    public function updateVirtualDatasourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVirtualDatasourceInstanceWithOptions($request, $headers, $runtime);
    }
}
