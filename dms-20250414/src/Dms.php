<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dms\V20250414\Models\BatchCreateDataLakePartitionsRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\BatchCreateDataLakePartitionsResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\BatchCreateDataLakePartitionsShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\BatchDeleteDataLakePartitionsRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\BatchDeleteDataLakePartitionsResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\BatchUpdateDataLakePartitionsRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\BatchUpdateDataLakePartitionsResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\BatchUpdateDataLakePartitionsShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateAirflowLoginTokenRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateAirflowLoginTokenResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateAirflowRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateAirflowResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeDatabaseRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeDatabaseResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeDatabaseShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeFunctionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeFunctionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeFunctionShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakePartitionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakePartitionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakePartitionShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeTableRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeTableResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataLakeTableShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteAirflowRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteAirflowResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakeDatabaseRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakeDatabaseResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakeFunctionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakeFunctionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakePartitionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakePartitionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakePartitionShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakeTableRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteDataLakeTableResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetAirflowRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetAirflowResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakeCatalogRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakeCatalogResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakeDatabaseRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakeDatabaseResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakeFunctionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakeFunctionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakePartitionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakePartitionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakePartitionShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakeTableRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetDataLakeTableResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetNotebookAndSubmitTaskRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetNotebookAndSubmitTaskResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListAirflowsRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListAirflowsResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeCatalogRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeCatalogResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeDatabaseRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeDatabaseResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeFunctionNameRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeFunctionNameResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeFunctionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeFunctionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakePartitionByFilterRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakePartitionByFilterResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakePartitionNameRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakePartitionNameResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakePartitionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakePartitionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakePartitionShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeTablebaseInfoRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeTablebaseInfoResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeTableNameRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeTableNameResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeTableRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataLakeTableResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateAirflowRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateAirflowResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeDatabaseRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeDatabaseResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeDatabaseShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeFunctionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeFunctionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeFunctionShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakePartitionRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakePartitionResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakePartitionShrinkRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeTableRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeTableResponse;
use AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataLakeTableShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 批量新建湖仓表分区.
     *
     * @param tmpReq - BatchCreateDataLakePartitionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateDataLakePartitionsResponse
     *
     * @param BatchCreateDataLakePartitionsRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchCreateDataLakePartitionsResponse
     */
    public function batchCreateDataLakePartitionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchCreateDataLakePartitionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->partitionInputs) {
            $request->partitionInputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partitionInputs, 'PartitionInputs', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->ifNotExists) {
            @$query['IfNotExists'] = $request->ifNotExists;
        }

        if (null !== $request->needResult) {
            @$query['NeedResult'] = $request->needResult;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->partitionInputsShrink) {
            @$body['PartitionInputs'] = $request->partitionInputsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchCreateDataLakePartitions',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateDataLakePartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量新建湖仓表分区.
     *
     * @param request - BatchCreateDataLakePartitionsRequest
     *
     * @returns BatchCreateDataLakePartitionsResponse
     *
     * @param BatchCreateDataLakePartitionsRequest $request
     *
     * @return BatchCreateDataLakePartitionsResponse
     */
    public function batchCreateDataLakePartitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateDataLakePartitionsWithOptions($request, $runtime);
    }

    /**
     * 批量删除湖仓表分区.
     *
     * @param request - BatchDeleteDataLakePartitionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteDataLakePartitionsResponse
     *
     * @param BatchDeleteDataLakePartitionsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchDeleteDataLakePartitionsResponse
     */
    public function batchDeleteDataLakePartitionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->ifExists) {
            @$query['IfExists'] = $request->ifExists;
        }

        if (null !== $request->partitionValuesList) {
            @$query['PartitionValuesList'] = $request->partitionValuesList;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteDataLakePartitions',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteDataLakePartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量删除湖仓表分区.
     *
     * @param request - BatchDeleteDataLakePartitionsRequest
     *
     * @returns BatchDeleteDataLakePartitionsResponse
     *
     * @param BatchDeleteDataLakePartitionsRequest $request
     *
     * @return BatchDeleteDataLakePartitionsResponse
     */
    public function batchDeleteDataLakePartitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDataLakePartitionsWithOptions($request, $runtime);
    }

    /**
     * 批量更新湖仓表分区.
     *
     * @param tmpReq - BatchUpdateDataLakePartitionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateDataLakePartitionsResponse
     *
     * @param BatchUpdateDataLakePartitionsRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchUpdateDataLakePartitionsResponse
     */
    public function batchUpdateDataLakePartitionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchUpdateDataLakePartitionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->partitionInputs) {
            $request->partitionInputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partitionInputs, 'PartitionInputs', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->partitionInputsShrink) {
            @$body['PartitionInputs'] = $request->partitionInputsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateDataLakePartitions',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUpdateDataLakePartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量更新湖仓表分区.
     *
     * @param request - BatchUpdateDataLakePartitionsRequest
     *
     * @returns BatchUpdateDataLakePartitionsResponse
     *
     * @param BatchUpdateDataLakePartitionsRequest $request
     *
     * @return BatchUpdateDataLakePartitionsResponse
     */
    public function batchUpdateDataLakePartitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateDataLakePartitionsWithOptions($request, $runtime);
    }

    /**
     * 创建Airflow.
     *
     * @param request - CreateAirflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAirflowResponse
     *
     * @param CreateAirflowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAirflowResponse
     */
    public function createAirflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airflowName) {
            @$query['AirflowName'] = $request->airflowName;
        }

        if (null !== $request->appSpec) {
            @$query['AppSpec'] = $request->appSpec;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dagsDir) {
            @$query['DagsDir'] = $request->dagsDir;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossPath) {
            @$query['OssPath'] = $request->ossPath;
        }

        if (null !== $request->pluginsDir) {
            @$query['PluginsDir'] = $request->pluginsDir;
        }

        if (null !== $request->requirementFile) {
            @$query['RequirementFile'] = $request->requirementFile;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->startupFile) {
            @$query['StartupFile'] = $request->startupFile;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->workerServerlessReplicas) {
            @$query['WorkerServerlessReplicas'] = $request->workerServerlessReplicas;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAirflow',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAirflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Airflow.
     *
     * @param request - CreateAirflowRequest
     *
     * @returns CreateAirflowResponse
     *
     * @param CreateAirflowRequest $request
     *
     * @return CreateAirflowResponse
     */
    public function createAirflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAirflowWithOptions($request, $runtime);
    }

    /**
     * Queries the Airflow logon credential. You can use this credential to log on to the DMS-managed Airflow instance.
     *
     * @param request - CreateAirflowLoginTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAirflowLoginTokenResponse
     *
     * @param CreateAirflowLoginTokenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAirflowLoginTokenResponse
     */
    public function createAirflowLoginTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airflowId) {
            @$query['AirflowId'] = $request->airflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAirflowLoginToken',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAirflowLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Airflow logon credential. You can use this credential to log on to the DMS-managed Airflow instance.
     *
     * @param request - CreateAirflowLoginTokenRequest
     *
     * @returns CreateAirflowLoginTokenResponse
     *
     * @param CreateAirflowLoginTokenRequest $request
     *
     * @return CreateAirflowLoginTokenResponse
     */
    public function createAirflowLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAirflowLoginTokenWithOptions($request, $runtime);
    }

    /**
     * 新建湖仓数据库.
     *
     * @param tmpReq - CreateDataLakeDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataLakeDatabaseResponse
     *
     * @param CreateDataLakeDatabaseRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDataLakeDatabaseResponse
     */
    public function createDataLakeDatabaseWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataLakeDatabaseShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->location) {
            @$query['Location'] = $request->location;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataLakeDatabase',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataLakeDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建湖仓数据库.
     *
     * @param request - CreateDataLakeDatabaseRequest
     *
     * @returns CreateDataLakeDatabaseResponse
     *
     * @param CreateDataLakeDatabaseRequest $request
     *
     * @return CreateDataLakeDatabaseResponse
     */
    public function createDataLakeDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataLakeDatabaseWithOptions($request, $runtime);
    }

    /**
     * 新建湖仓自定义函数.
     *
     * @param tmpReq - CreateDataLakeFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataLakeFunctionResponse
     *
     * @param CreateDataLakeFunctionRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDataLakeFunctionResponse
     */
    public function createDataLakeFunctionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataLakeFunctionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->functionInput) {
            $request->functionInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->functionInput, 'FunctionInput', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->functionInputShrink) {
            @$body['FunctionInput'] = $request->functionInputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataLakeFunction',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataLakeFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建湖仓自定义函数.
     *
     * @param request - CreateDataLakeFunctionRequest
     *
     * @returns CreateDataLakeFunctionResponse
     *
     * @param CreateDataLakeFunctionRequest $request
     *
     * @return CreateDataLakeFunctionResponse
     */
    public function createDataLakeFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataLakeFunctionWithOptions($request, $runtime);
    }

    /**
     * 新建湖仓表分区.
     *
     * @param tmpReq - CreateDataLakePartitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataLakePartitionResponse
     *
     * @param CreateDataLakePartitionRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDataLakePartitionResponse
     */
    public function createDataLakePartitionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataLakePartitionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->partitionInput) {
            $request->partitionInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partitionInput, 'PartitionInput', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->ifNotExists) {
            @$query['IfNotExists'] = $request->ifNotExists;
        }

        if (null !== $request->needResult) {
            @$query['NeedResult'] = $request->needResult;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->partitionInputShrink) {
            @$body['PartitionInput'] = $request->partitionInputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataLakePartition',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataLakePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建湖仓表分区.
     *
     * @param request - CreateDataLakePartitionRequest
     *
     * @returns CreateDataLakePartitionResponse
     *
     * @param CreateDataLakePartitionRequest $request
     *
     * @return CreateDataLakePartitionResponse
     */
    public function createDataLakePartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataLakePartitionWithOptions($request, $runtime);
    }

    /**
     * 新建湖仓表.
     *
     * @param tmpReq - CreateDataLakeTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataLakeTableResponse
     *
     * @param CreateDataLakeTableRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDataLakeTableResponse
     */
    public function createDataLakeTableWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataLakeTableShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tableInput) {
            $request->tableInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tableInput, 'TableInput', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->tableInputShrink) {
            @$body['TableInput'] = $request->tableInputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataLakeTable',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataLakeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建湖仓表.
     *
     * @param request - CreateDataLakeTableRequest
     *
     * @returns CreateDataLakeTableResponse
     *
     * @param CreateDataLakeTableRequest $request
     *
     * @return CreateDataLakeTableResponse
     */
    public function createDataLakeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataLakeTableWithOptions($request, $runtime);
    }

    /**
     * 删除Airflow.
     *
     * @param request - DeleteAirflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAirflowResponse
     *
     * @param DeleteAirflowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAirflowResponse
     */
    public function deleteAirflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airflowId) {
            @$query['AirflowId'] = $request->airflowId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAirflow',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAirflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Airflow.
     *
     * @param request - DeleteAirflowRequest
     *
     * @returns DeleteAirflowResponse
     *
     * @param DeleteAirflowRequest $request
     *
     * @return DeleteAirflowResponse
     */
    public function deleteAirflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAirflowWithOptions($request, $runtime);
    }

    /**
     * 删除湖仓数据库.
     *
     * @param request - DeleteDataLakeDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataLakeDatabaseResponse
     *
     * @param DeleteDataLakeDatabaseRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDataLakeDatabaseResponse
     */
    public function deleteDataLakeDatabaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataLakeDatabase',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataLakeDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除湖仓数据库.
     *
     * @param request - DeleteDataLakeDatabaseRequest
     *
     * @returns DeleteDataLakeDatabaseResponse
     *
     * @param DeleteDataLakeDatabaseRequest $request
     *
     * @return DeleteDataLakeDatabaseResponse
     */
    public function deleteDataLakeDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLakeDatabaseWithOptions($request, $runtime);
    }

    /**
     * 删除湖仓自定义函数.
     *
     * @param request - DeleteDataLakeFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataLakeFunctionResponse
     *
     * @param DeleteDataLakeFunctionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDataLakeFunctionResponse
     */
    public function deleteDataLakeFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->functionName) {
            @$query['FunctionName'] = $request->functionName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataLakeFunction',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataLakeFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除湖仓自定义函数.
     *
     * @param request - DeleteDataLakeFunctionRequest
     *
     * @returns DeleteDataLakeFunctionResponse
     *
     * @param DeleteDataLakeFunctionRequest $request
     *
     * @return DeleteDataLakeFunctionResponse
     */
    public function deleteDataLakeFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLakeFunctionWithOptions($request, $runtime);
    }

    /**
     * 删除湖仓表分区.
     *
     * @param tmpReq - DeleteDataLakePartitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataLakePartitionResponse
     *
     * @param DeleteDataLakePartitionRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDataLakePartitionResponse
     */
    public function deleteDataLakePartitionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteDataLakePartitionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->partitionValues) {
            $request->partitionValuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partitionValues, 'PartitionValues', 'simple');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->ifExists) {
            @$query['IfExists'] = $request->ifExists;
        }

        if (null !== $request->partitionValuesShrink) {
            @$query['PartitionValues'] = $request->partitionValuesShrink;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataLakePartition',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataLakePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除湖仓表分区.
     *
     * @param request - DeleteDataLakePartitionRequest
     *
     * @returns DeleteDataLakePartitionResponse
     *
     * @param DeleteDataLakePartitionRequest $request
     *
     * @return DeleteDataLakePartitionResponse
     */
    public function deleteDataLakePartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLakePartitionWithOptions($request, $runtime);
    }

    /**
     * 删除湖仓表.
     *
     * @param request - DeleteDataLakeTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataLakeTableResponse
     *
     * @param DeleteDataLakeTableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDataLakeTableResponse
     */
    public function deleteDataLakeTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataLakeTable',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataLakeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除湖仓表.
     *
     * @param request - DeleteDataLakeTableRequest
     *
     * @returns DeleteDataLakeTableResponse
     *
     * @param DeleteDataLakeTableRequest $request
     *
     * @return DeleteDataLakeTableResponse
     */
    public function deleteDataLakeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLakeTableWithOptions($request, $runtime);
    }

    /**
     * 查询 Airflow.
     *
     * @param request - GetAirflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAirflowResponse
     *
     * @param GetAirflowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetAirflowResponse
     */
    public function getAirflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airflowId) {
            @$query['AirflowId'] = $request->airflowId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAirflow',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAirflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 Airflow.
     *
     * @param request - GetAirflowRequest
     *
     * @returns GetAirflowResponse
     *
     * @param GetAirflowRequest $request
     *
     * @return GetAirflowResponse
     */
    public function getAirflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAirflowWithOptions($request, $runtime);
    }

    /**
     * 获取uc的数据库目录.
     *
     * @param request - GetDataLakeCatalogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataLakeCatalogResponse
     *
     * @param GetDataLakeCatalogRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDataLakeCatalogResponse
     */
    public function getDataLakeCatalogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataLakeCatalog',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataLakeCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取uc的数据库目录.
     *
     * @param request - GetDataLakeCatalogRequest
     *
     * @returns GetDataLakeCatalogResponse
     *
     * @param GetDataLakeCatalogRequest $request
     *
     * @return GetDataLakeCatalogResponse
     */
    public function getDataLakeCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataLakeCatalogWithOptions($request, $runtime);
    }

    /**
     * 获取UC的数据库.
     *
     * @param request - GetDataLakeDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataLakeDatabaseResponse
     *
     * @param GetDataLakeDatabaseRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDataLakeDatabaseResponse
     */
    public function getDataLakeDatabaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataLakeDatabase',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataLakeDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取UC的数据库.
     *
     * @param request - GetDataLakeDatabaseRequest
     *
     * @returns GetDataLakeDatabaseResponse
     *
     * @param GetDataLakeDatabaseRequest $request
     *
     * @return GetDataLakeDatabaseResponse
     */
    public function getDataLakeDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataLakeDatabaseWithOptions($request, $runtime);
    }

    /**
     * 获取湖仓自定义函数详细信息.
     *
     * @param request - GetDataLakeFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataLakeFunctionResponse
     *
     * @param GetDataLakeFunctionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDataLakeFunctionResponse
     */
    public function getDataLakeFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->functionName) {
            @$query['FunctionName'] = $request->functionName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataLakeFunction',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataLakeFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取湖仓自定义函数详细信息.
     *
     * @param request - GetDataLakeFunctionRequest
     *
     * @returns GetDataLakeFunctionResponse
     *
     * @param GetDataLakeFunctionRequest $request
     *
     * @return GetDataLakeFunctionResponse
     */
    public function getDataLakeFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataLakeFunctionWithOptions($request, $runtime);
    }

    /**
     * 获取湖仓表分区详情.
     *
     * @param tmpReq - GetDataLakePartitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataLakePartitionResponse
     *
     * @param GetDataLakePartitionRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetDataLakePartitionResponse
     */
    public function getDataLakePartitionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDataLakePartitionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->partitionValues) {
            $request->partitionValuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partitionValues, 'PartitionValues', 'simple');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->partitionValuesShrink) {
            @$query['PartitionValues'] = $request->partitionValuesShrink;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataLakePartition',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataLakePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取湖仓表分区详情.
     *
     * @param request - GetDataLakePartitionRequest
     *
     * @returns GetDataLakePartitionResponse
     *
     * @param GetDataLakePartitionRequest $request
     *
     * @return GetDataLakePartitionResponse
     */
    public function getDataLakePartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataLakePartitionWithOptions($request, $runtime);
    }

    /**
     * 获取表信息.
     *
     * @param request - GetDataLakeTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataLakeTableResponse
     *
     * @param GetDataLakeTableRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDataLakeTableResponse
     */
    public function getDataLakeTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataLakeTable',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataLakeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取表信息.
     *
     * @param request - GetDataLakeTableRequest
     *
     * @returns GetDataLakeTableResponse
     *
     * @param GetDataLakeTableRequest $request
     *
     * @return GetDataLakeTableResponse
     */
    public function getDataLakeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataLakeTableWithOptions($request, $runtime);
    }

    /**
     * 调度运行Notebook文件.
     *
     * @param request - GetNotebookAndSubmitTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNotebookAndSubmitTaskResponse
     *
     * @param GetNotebookAndSubmitTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetNotebookAndSubmitTaskResponse
     */
    public function getNotebookAndSubmitTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->params) {
            @$body['Params'] = $request->params;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        if (null !== $request->retry) {
            @$body['Retry'] = $request->retry;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNotebookAndSubmitTask',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNotebookAndSubmitTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调度运行Notebook文件.
     *
     * @param request - GetNotebookAndSubmitTaskRequest
     *
     * @returns GetNotebookAndSubmitTaskResponse
     *
     * @param GetNotebookAndSubmitTaskRequest $request
     *
     * @return GetNotebookAndSubmitTaskResponse
     */
    public function getNotebookAndSubmitTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNotebookAndSubmitTaskWithOptions($request, $runtime);
    }

    /**
     * 列出资源Airflow.
     *
     * @param request - ListAirflowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAirflowsResponse
     *
     * @param ListAirflowsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAirflowsResponse
     */
    public function listAirflowsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAirflows',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAirflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出资源Airflow.
     *
     * @param request - ListAirflowsRequest
     *
     * @returns ListAirflowsResponse
     *
     * @param ListAirflowsRequest $request
     *
     * @return ListAirflowsResponse
     */
    public function listAirflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAirflowsWithOptions($request, $runtime);
    }

    /**
     * 获取uc的数据库目录列表.
     *
     * @param request - ListDataLakeCatalogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakeCatalogResponse
     *
     * @param ListDataLakeCatalogRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataLakeCatalogResponse
     */
    public function listDataLakeCatalogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLakeCatalog',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakeCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取uc的数据库目录列表.
     *
     * @param request - ListDataLakeCatalogRequest
     *
     * @returns ListDataLakeCatalogResponse
     *
     * @param ListDataLakeCatalogRequest $request
     *
     * @return ListDataLakeCatalogResponse
     */
    public function listDataLakeCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakeCatalogWithOptions($request, $runtime);
    }

    /**
     * 获取数据库列表.
     *
     * @param request - ListDataLakeDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakeDatabaseResponse
     *
     * @param ListDataLakeDatabaseRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDataLakeDatabaseResponse
     */
    public function listDataLakeDatabaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLakeDatabase',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakeDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据库列表.
     *
     * @param request - ListDataLakeDatabaseRequest
     *
     * @returns ListDataLakeDatabaseResponse
     *
     * @param ListDataLakeDatabaseRequest $request
     *
     * @return ListDataLakeDatabaseResponse
     */
    public function listDataLakeDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakeDatabaseWithOptions($request, $runtime);
    }

    /**
     * 获取数据湖函数列表.
     *
     * @param request - ListDataLakeFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakeFunctionResponse
     *
     * @param ListDataLakeFunctionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDataLakeFunctionResponse
     */
    public function listDataLakeFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->functionNamePattern) {
            @$query['FunctionNamePattern'] = $request->functionNamePattern;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLakeFunction',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakeFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据湖函数列表.
     *
     * @param request - ListDataLakeFunctionRequest
     *
     * @returns ListDataLakeFunctionResponse
     *
     * @param ListDataLakeFunctionRequest $request
     *
     * @return ListDataLakeFunctionResponse
     */
    public function listDataLakeFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakeFunctionWithOptions($request, $runtime);
    }

    /**
     * 获取数据湖函数名列表.
     *
     * @param request - ListDataLakeFunctionNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakeFunctionNameResponse
     *
     * @param ListDataLakeFunctionNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListDataLakeFunctionNameResponse
     */
    public function listDataLakeFunctionNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->functionNamePattern) {
            @$query['FunctionNamePattern'] = $request->functionNamePattern;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLakeFunctionName',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakeFunctionNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据湖函数名列表.
     *
     * @param request - ListDataLakeFunctionNameRequest
     *
     * @returns ListDataLakeFunctionNameResponse
     *
     * @param ListDataLakeFunctionNameRequest $request
     *
     * @return ListDataLakeFunctionNameResponse
     */
    public function listDataLakeFunctionName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakeFunctionNameWithOptions($request, $runtime);
    }

    /**
     * 获取数据湖表分区列表.
     *
     * @param tmpReq - ListDataLakePartitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakePartitionResponse
     *
     * @param ListDataLakePartitionRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataLakePartitionResponse
     */
    public function listDataLakePartitionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataLakePartitionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->partNames) {
            $request->partNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partNames, 'PartNames', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->partNamesShrink) {
            @$body['PartNames'] = $request->partNamesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataLakePartition',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据湖表分区列表.
     *
     * @param request - ListDataLakePartitionRequest
     *
     * @returns ListDataLakePartitionResponse
     *
     * @param ListDataLakePartitionRequest $request
     *
     * @return ListDataLakePartitionResponse
     */
    public function listDataLakePartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakePartitionWithOptions($request, $runtime);
    }

    /**
     * 根据筛选条件获取数据湖表分区列表.
     *
     * @param request - ListDataLakePartitionByFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakePartitionByFilterResponse
     *
     * @param ListDataLakePartitionByFilterRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataLakePartitionByFilterResponse
     */
    public function listDataLakePartitionByFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataLakePartitionByFilter',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakePartitionByFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据筛选条件获取数据湖表分区列表.
     *
     * @param request - ListDataLakePartitionByFilterRequest
     *
     * @returns ListDataLakePartitionByFilterResponse
     *
     * @param ListDataLakePartitionByFilterRequest $request
     *
     * @return ListDataLakePartitionByFilterResponse
     */
    public function listDataLakePartitionByFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakePartitionByFilterWithOptions($request, $runtime);
    }

    /**
     * 获取数据湖表分区名列表.
     *
     * @param request - ListDataLakePartitionNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakePartitionNameResponse
     *
     * @param ListDataLakePartitionNameRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDataLakePartitionNameResponse
     */
    public function listDataLakePartitionNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLakePartitionName',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakePartitionNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据湖表分区名列表.
     *
     * @param request - ListDataLakePartitionNameRequest
     *
     * @returns ListDataLakePartitionNameResponse
     *
     * @param ListDataLakePartitionNameRequest $request
     *
     * @return ListDataLakePartitionNameResponse
     */
    public function listDataLakePartitionName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakePartitionNameWithOptions($request, $runtime);
    }

    /**
     * 获取数据湖表列表.
     *
     * @param request - ListDataLakeTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakeTableResponse
     *
     * @param ListDataLakeTableRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDataLakeTableResponse
     */
    public function listDataLakeTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tableNamePattern) {
            @$query['TableNamePattern'] = $request->tableNamePattern;
        }

        if (null !== $request->tableType) {
            @$query['TableType'] = $request->tableType;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLakeTable',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据湖表列表.
     *
     * @param request - ListDataLakeTableRequest
     *
     * @returns ListDataLakeTableResponse
     *
     * @param ListDataLakeTableRequest $request
     *
     * @return ListDataLakeTableResponse
     */
    public function listDataLakeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakeTableWithOptions($request, $runtime);
    }

    /**
     * 获取数据湖表名列表.
     *
     * @param request - ListDataLakeTableNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakeTableNameResponse
     *
     * @param ListDataLakeTableNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataLakeTableNameResponse
     */
    public function listDataLakeTableNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tableNamePattern) {
            @$query['TableNamePattern'] = $request->tableNamePattern;
        }

        if (null !== $request->tableType) {
            @$query['TableType'] = $request->tableType;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLakeTableName',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakeTableNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据湖表名列表.
     *
     * @param request - ListDataLakeTableNameRequest
     *
     * @returns ListDataLakeTableNameResponse
     *
     * @param ListDataLakeTableNameRequest $request
     *
     * @return ListDataLakeTableNameResponse
     */
    public function listDataLakeTableName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakeTableNameWithOptions($request, $runtime);
    }

    /**
     * 获取表信息.
     *
     * @param request - ListDataLakeTablebaseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLakeTablebaseInfoResponse
     *
     * @param ListDataLakeTablebaseInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDataLakeTablebaseInfoResponse
     */
    public function listDataLakeTablebaseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->rows) {
            @$query['Rows'] = $request->rows;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLakeTablebaseInfo',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLakeTablebaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取表信息.
     *
     * @param request - ListDataLakeTablebaseInfoRequest
     *
     * @returns ListDataLakeTablebaseInfoResponse
     *
     * @param ListDataLakeTablebaseInfoRequest $request
     *
     * @return ListDataLakeTablebaseInfoResponse
     */
    public function listDataLakeTablebaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLakeTablebaseInfoWithOptions($request, $runtime);
    }

    /**
     * 更新UpdateAirflow.
     *
     * @param request - UpdateAirflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAirflowResponse
     *
     * @param UpdateAirflowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAirflowResponse
     */
    public function updateAirflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airflowId) {
            @$query['AirflowId'] = $request->airflowId;
        }

        if (null !== $request->airflowName) {
            @$query['AirflowName'] = $request->airflowName;
        }

        if (null !== $request->appSpec) {
            @$query['AppSpec'] = $request->appSpec;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dagsDir) {
            @$query['DagsDir'] = $request->dagsDir;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->pluginsDir) {
            @$query['PluginsDir'] = $request->pluginsDir;
        }

        if (null !== $request->requirementFile) {
            @$query['RequirementFile'] = $request->requirementFile;
        }

        if (null !== $request->startupFile) {
            @$query['StartupFile'] = $request->startupFile;
        }

        if (null !== $request->workerServerlessReplicas) {
            @$query['WorkerServerlessReplicas'] = $request->workerServerlessReplicas;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAirflow',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAirflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新UpdateAirflow.
     *
     * @param request - UpdateAirflowRequest
     *
     * @returns UpdateAirflowResponse
     *
     * @param UpdateAirflowRequest $request
     *
     * @return UpdateAirflowResponse
     */
    public function updateAirflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAirflowWithOptions($request, $runtime);
    }

    /**
     * 更新湖仓数据库.
     *
     * @param tmpReq - UpdateDataLakeDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataLakeDatabaseResponse
     *
     * @param UpdateDataLakeDatabaseRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDataLakeDatabaseResponse
     */
    public function updateDataLakeDatabaseWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataLakeDatabaseShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->location) {
            @$query['Location'] = $request->location;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDataLakeDatabase',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataLakeDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新湖仓数据库.
     *
     * @param request - UpdateDataLakeDatabaseRequest
     *
     * @returns UpdateDataLakeDatabaseResponse
     *
     * @param UpdateDataLakeDatabaseRequest $request
     *
     * @return UpdateDataLakeDatabaseResponse
     */
    public function updateDataLakeDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataLakeDatabaseWithOptions($request, $runtime);
    }

    /**
     * 更新湖仓自定义函数.
     *
     * @param tmpReq - UpdateDataLakeFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataLakeFunctionResponse
     *
     * @param UpdateDataLakeFunctionRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDataLakeFunctionResponse
     */
    public function updateDataLakeFunctionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataLakeFunctionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->functionInput) {
            $request->functionInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->functionInput, 'FunctionInput', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->functionName) {
            @$query['FunctionName'] = $request->functionName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->functionInputShrink) {
            @$body['FunctionInput'] = $request->functionInputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataLakeFunction',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataLakeFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新湖仓自定义函数.
     *
     * @param request - UpdateDataLakeFunctionRequest
     *
     * @returns UpdateDataLakeFunctionResponse
     *
     * @param UpdateDataLakeFunctionRequest $request
     *
     * @return UpdateDataLakeFunctionResponse
     */
    public function updateDataLakeFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataLakeFunctionWithOptions($request, $runtime);
    }

    /**
     * 更新湖仓表分区.
     *
     * @param tmpReq - UpdateDataLakePartitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataLakePartitionResponse
     *
     * @param UpdateDataLakePartitionRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDataLakePartitionResponse
     */
    public function updateDataLakePartitionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataLakePartitionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->partitionInput) {
            $request->partitionInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partitionInput, 'PartitionInput', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->partitionInputShrink) {
            @$body['PartitionInput'] = $request->partitionInputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataLakePartition',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataLakePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新湖仓表分区.
     *
     * @param request - UpdateDataLakePartitionRequest
     *
     * @returns UpdateDataLakePartitionResponse
     *
     * @param UpdateDataLakePartitionRequest $request
     *
     * @return UpdateDataLakePartitionResponse
     */
    public function updateDataLakePartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataLakePartitionWithOptions($request, $runtime);
    }

    /**
     * 更新湖仓表信息.
     *
     * @param tmpReq - UpdateDataLakeTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataLakeTableResponse
     *
     * @param UpdateDataLakeTableRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDataLakeTableResponse
     */
    public function updateDataLakeTableWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataLakeTableShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tableInput) {
            $request->tableInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tableInput, 'TableInput', 'json');
        }

        $query = [];
        if (null !== $request->catalogName) {
            @$query['CatalogName'] = $request->catalogName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->tid) {
            @$query['Tid'] = $request->tid;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->tableInputShrink) {
            @$body['TableInput'] = $request->tableInputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataLakeTable',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataLakeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新湖仓表信息.
     *
     * @param request - UpdateDataLakeTableRequest
     *
     * @returns UpdateDataLakeTableResponse
     *
     * @param UpdateDataLakeTableRequest $request
     *
     * @return UpdateDataLakeTableResponse
     */
    public function updateDataLakeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataLakeTableWithOptions($request, $runtime);
    }
}
