<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\BatchExecuteStatementRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\BatchExecuteStatementResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\BatchExecuteStatementShrinkRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\BeginTransactionRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\BeginTransactionResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\CommitTransactionRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\CommitTransactionResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\DeleteRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\DeleteResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\DeleteShrinkRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\ExecuteStatementRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\ExecuteStatementResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\ExecuteStatementShrinkRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\InsertListRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\InsertListResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\InsertListShrinkRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\InsertRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\InsertResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\InsertShrinkRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\RollbackTransactionRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\RollbackTransactionResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\SelectRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\SelectResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\SelectShrinkRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\UpdateRequest;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\UpdateResponse;
use AlibabaCloud\SDK\Rdsdata\V20220330\Models\UpdateShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Rdsdata extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rds-data', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BatchExecuteStatementRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return BatchExecuteStatementResponse
     */
    public function batchExecuteStatementWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchExecuteStatementShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameterSets)) {
            $request->parameterSetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameterSets, 'ParameterSets', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->database)) {
            $body['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->parameterSetsShrink)) {
            $body['ParameterSets'] = $request->parameterSetsShrink;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->sql)) {
            $body['Sql'] = $request->sql;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchExecuteStatement',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchExecuteStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchExecuteStatementRequest $request
     *
     * @return BatchExecuteStatementResponse
     */
    public function batchExecuteStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchExecuteStatementWithOptions($request, $runtime);
    }

    /**
     * @param BeginTransactionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BeginTransactionResponse
     */
    public function beginTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->database)) {
            $body['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BeginTransaction',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BeginTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BeginTransactionRequest $request
     *
     * @return BeginTransactionResponse
     */
    public function beginTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beginTransactionWithOptions($request, $runtime);
    }

    /**
     * @param CommitTransactionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CommitTransactionResponse
     */
    public function commitTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CommitTransaction',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommitTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommitTransactionRequest $request
     *
     * @return CommitTransactionResponse
     */
    public function commitTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitTransactionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRequest  $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResponse
     */
    public function deleteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->database)) {
            $body['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->filterShrink)) {
            $body['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->table)) {
            $body['Table'] = $request->table;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Delete',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRequest $request
     *
     * @return DeleteResponse
     */
    public function delete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteStatementRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteStatementResponse
     */
    public function executeStatementWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteStatementShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resultSetOptions)) {
            $request->resultSetOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resultSetOptions, 'ResultSetOptions', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->continueAfterTimeout)) {
            $body['ContinueAfterTimeout'] = $request->continueAfterTimeout;
        }
        if (!Utils::isUnset($request->database)) {
            $body['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->formatRecordsAs)) {
            $body['FormatRecordsAs'] = $request->formatRecordsAs;
        }
        if (!Utils::isUnset($request->includeResultMetadata)) {
            $body['IncludeResultMetadata'] = $request->includeResultMetadata;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $body['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->resultSetOptionsShrink)) {
            $body['ResultSetOptions'] = $request->resultSetOptionsShrink;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->sql)) {
            $body['Sql'] = $request->sql;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteStatement',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteStatementRequest $request
     *
     * @return ExecuteStatementResponse
     */
    public function executeStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeStatementWithOptions($request, $runtime);
    }

    /**
     * @param InsertRequest  $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return InsertResponse
     */
    public function insertWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->record)) {
            $request->recordShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->record, 'Record', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->database)) {
            $body['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->recordShrink)) {
            $body['Record'] = $request->recordShrink;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->table)) {
            $body['Table'] = $request->table;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Insert',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertRequest $request
     *
     * @return InsertResponse
     */
    public function insert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertWithOptions($request, $runtime);
    }

    /**
     * @param InsertListRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return InsertListResponse
     */
    public function insertListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->records)) {
            $request->recordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->records, 'Records', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->database)) {
            $body['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->recordsShrink)) {
            $body['Records'] = $request->recordsShrink;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->table)) {
            $body['Table'] = $request->table;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertList',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertListRequest $request
     *
     * @return InsertListResponse
     */
    public function insertList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertListWithOptions($request, $runtime);
    }

    /**
     * @param RollbackTransactionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackTransactionResponse
     */
    public function rollbackTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RollbackTransaction',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackTransactionRequest $request
     *
     * @return RollbackTransactionResponse
     */
    public function rollbackTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackTransactionWithOptions($request, $runtime);
    }

    /**
     * @param SelectRequest  $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return SelectResponse
     */
    public function selectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SelectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->database)) {
            $body['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->filterShrink)) {
            $body['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->table)) {
            $body['Table'] = $request->table;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Select',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SelectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SelectRequest $request
     *
     * @return SelectResponse
     */
    public function select($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->selectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRequest  $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return UpdateResponse
     */
    public function updateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        if (!Utils::isUnset($tmpReq->record)) {
            $request->recordShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->record, 'Record', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->database)) {
            $body['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->filterShrink)) {
            $body['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->recordShrink)) {
            $body['Record'] = $request->recordShrink;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->secretArn)) {
            $body['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->table)) {
            $body['Table'] = $request->table;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Update',
            'version'     => '2022-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRequest $request
     *
     * @return UpdateResponse
     */
    public function update($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWithOptions($request, $runtime);
    }
}
