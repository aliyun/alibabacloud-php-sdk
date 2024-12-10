<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CancelDatasourceAuthorizationRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CancelDatasourceAuthorizationResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateDatasourceAuthorizationRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateDatasourceAuthorizationResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateVirtualDatasourceInstanceRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\CreateVirtualDatasourceInstanceResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteVirtualDatasourceInstanceRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\DeleteVirtualDatasourceInstanceResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListVirtualDatasourceInstanceRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\ListVirtualDatasourceInstanceResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\SaveVirtualDatasourceDdlRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\SaveVirtualDatasourceDdlResponse;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\SyncRemoteTablesRequest;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\SyncRemoteTablesResponse;
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
