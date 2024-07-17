<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DataLake\V20200710\Models\AbortLockRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\AbortLockResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchCreatePartitionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchCreatePartitionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchCreateTablesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchCreateTablesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchDeletePartitionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchDeletePartitionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchDeleteTablesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchDeleteTablesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchDeleteTableVersionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchDeleteTableVersionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGetPartitionColumnStatisticsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGetPartitionColumnStatisticsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGetPartitionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGetPartitionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGetTablesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGetTablesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGrantPermissionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGrantPermissionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchRevokePermissionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchRevokePermissionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchUpdatePartitionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchUpdatePartitionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchUpdateTablesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchUpdateTablesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CancelQueryRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CancelQueryResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CheckPermissionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CheckPermissionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateCatalogRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateCatalogResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateFunctionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateFunctionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateLockRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateLockResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreatePartitionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreatePartitionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateRoleRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateRoleResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateTableRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\CreateTableResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteCatalogRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteCatalogResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteFunctionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteFunctionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeletePartitionColumnStatisticsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeletePartitionColumnStatisticsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeletePartitionColumnStatisticsShrinkRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeletePartitionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeletePartitionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteTableColumnStatisticsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteTableColumnStatisticsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteTableColumnStatisticsShrinkRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteTableRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteTableResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteTableVersionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeleteTableVersionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeregisterLocationRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DeregisterLocationResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetAsyncTaskStatusRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetAsyncTaskStatusResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetCatalogRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetCatalogResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetCatalogSettingsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetCatalogSettingsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetDatabaseProfileRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetDatabaseProfileResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetDatabaseRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetDatabaseResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetFunctionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetFunctionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetLifecycleRuleRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetLifecycleRuleResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetLockRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetLockResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetPartitionColumnStatisticsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetPartitionColumnStatisticsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetPartitionColumnStatisticsShrinkRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetPartitionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetPartitionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetQueryResultRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetQueryResultResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetRegionStatusRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetRegionStatusResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetRoleRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetRoleResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetServiceStatusRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetServiceStatusResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableColumnStatisticsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableColumnStatisticsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableColumnStatisticsShrinkRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableProfileRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableProfileResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableVersionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GetTableVersionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GrantPermissionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GrantPermissionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GrantRolesToUserRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GrantRolesToUserResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GrantRoleToUsersRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\GrantRoleToUsersResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListCatalogsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListCatalogsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListDatabasesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListFunctionNamesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListFunctionNamesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListFunctionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListFunctionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionNamesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionNamesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionsByExprResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionsByFilterRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionsByFilterResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionsProfileRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionsProfileResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionsProfileShrinkRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPartitionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPermissionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListPermissionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListRolesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListRolesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListRoleUsersRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListRoleUsersResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListTableNamesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListTableNamesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListTablesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListTablesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListTableVersionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListTableVersionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListUserRolesRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\ListUserRolesResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RefreshLockRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RefreshLockResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RegisterLocationRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RegisterLocationResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RenamePartitionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RenamePartitionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RenameTableRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RenameTableResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RevokePermissionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RevokePermissionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RevokeRoleFromUsersRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RevokeRoleFromUsersResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RevokeRolesFromUserRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RevokeRolesFromUserResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RunMigrationWorkflowRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\RunMigrationWorkflowResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchAcrossCatalogRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchAcrossCatalogResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\StopMigrationWorkflowRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\StopMigrationWorkflowResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\SubmitQueryRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\SubmitQueryResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UnLockRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UnLockResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateCatalogRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateCatalogResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateCatalogSettingsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateCatalogSettingsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateDatabaseRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateDatabaseResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateFunctionRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateFunctionResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdatePartitionColumnStatisticsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdatePartitionColumnStatisticsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdatePermissionsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdatePermissionsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateRegisteredLocationRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateRegisteredLocationResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateRoleUsersRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateRoleUsersResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateTableColumnStatisticsRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateTableColumnStatisticsResponse;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateTableRequest;
use AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateTableResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class DataLake extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'datalake-daily.aliyuncs.com',
            'ap-northeast-2-pop'          => 'datalake-daily.aliyuncs.com',
            'ap-south-1'                  => 'datalake-daily.aliyuncs.com',
            'ap-southeast-1'              => 'datalake-daily.aliyuncs.com',
            'ap-southeast-2'              => 'datalake-daily.aliyuncs.com',
            'ap-southeast-3'              => 'datalake-daily.aliyuncs.com',
            'ap-southeast-5'              => 'datalake-daily.aliyuncs.com',
            'cn-beijing'                  => 'dlf.cn-beijing.aliyuncs.com',
            'cn-beijing-finance-1'        => 'datalake-daily.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'datalake-daily.aliyuncs.com',
            'cn-beijing-gov-1'            => 'datalake-daily.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'datalake-daily.aliyuncs.com',
            'cn-chengdu'                  => 'datalake-daily.aliyuncs.com',
            'cn-edge-1'                   => 'datalake-daily.aliyuncs.com',
            'cn-fujian'                   => 'datalake-daily.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'datalake-daily.aliyuncs.com',
            'cn-hangzhou'                 => 'dlf.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'datalake-daily.aliyuncs.com',
            'cn-hangzhou-finance'         => 'datalake-daily.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'datalake-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'datalake-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'datalake-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'datalake-daily.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'datalake-daily.aliyuncs.com',
            'cn-hongkong'                 => 'datalake-daily.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'datalake-daily.aliyuncs.com',
            'cn-huhehaote'                => 'datalake-daily.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'datalake-daily.aliyuncs.com',
            'cn-north-2-gov-1'            => 'datalake-daily.aliyuncs.com',
            'cn-qingdao'                  => 'datalake-daily.aliyuncs.com',
            'cn-qingdao-nebula'           => 'datalake-daily.aliyuncs.com',
            'cn-shanghai'                 => 'dlf.cn-shanghai.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'datalake-daily.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'datalake-daily.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'datalake-daily.aliyuncs.com',
            'cn-shanghai-inner'           => 'datalake-daily.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'datalake-daily.aliyuncs.com',
            'cn-shenzhen'                 => 'dlf.cn-shenzhen.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'datalake-daily.aliyuncs.com',
            'cn-shenzhen-inner'           => 'datalake-daily.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'datalake-daily.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'datalake-daily.aliyuncs.com',
            'cn-wuhan'                    => 'datalake-daily.aliyuncs.com',
            'cn-wulanchabu'               => 'datalake-daily.aliyuncs.com',
            'cn-yushanfang'               => 'datalake-daily.aliyuncs.com',
            'cn-zhangbei'                 => 'datalake-daily.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'datalake-daily.aliyuncs.com',
            'cn-zhangjiakou'              => 'datalake-daily.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'datalake-daily.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'datalake-daily.aliyuncs.com',
            'eu-central-1'                => 'datalake-daily.aliyuncs.com',
            'eu-west-1'                   => 'datalake-daily.aliyuncs.com',
            'eu-west-1-oxs'               => 'datalake-daily.aliyuncs.com',
            'me-east-1'                   => 'datalake-daily.aliyuncs.com',
            'rus-west-1-pop'              => 'datalake-daily.aliyuncs.com',
            'us-east-1'                   => 'datalake-daily.aliyuncs.com',
            'us-west-1'                   => 'datalake-daily.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('datalake', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary abort lock context with the lockid
     *  *
     * @param AbortLockRequest $request AbortLockRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AbortLockResponse AbortLockResponse
     */
    public function abortLockWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lockId)) {
            $query['LockId'] = $request->lockId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortLock',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/locks/abort',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AbortLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary abort lock context with the lockid
     *  *
     * @param AbortLockRequest $request AbortLockRequest
     *
     * @return AbortLockResponse AbortLockResponse
     */
    public function abortLock($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->abortLockWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量创建分区
     *  *
     * @param BatchCreatePartitionsRequest $request BatchCreatePartitionsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreatePartitionsResponse BatchCreatePartitionsResponse
     */
    public function batchCreatePartitionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->ifNotExists)) {
            $body['IfNotExists'] = $request->ifNotExists;
        }
        if (!Utils::isUnset($request->needResult)) {
            $body['NeedResult'] = $request->needResult;
        }
        if (!Utils::isUnset($request->partitionInputs)) {
            $body['PartitionInputs'] = $request->partitionInputs;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchCreatePartitions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/batchcreate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchCreatePartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量创建分区
     *  *
     * @param BatchCreatePartitionsRequest $request BatchCreatePartitionsRequest
     *
     * @return BatchCreatePartitionsResponse BatchCreatePartitionsResponse
     */
    public function batchCreatePartitions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchCreatePartitionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量创建表
     *  *
     * @param BatchCreateTablesRequest $request BatchCreateTablesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreateTablesResponse BatchCreateTablesResponse
     */
    public function batchCreateTablesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->ifNotExists)) {
            $body['IfNotExists'] = $request->ifNotExists;
        }
        if (!Utils::isUnset($request->tableInputs)) {
            $body['TableInputs'] = $request->tableInputs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateTables',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/batchcreate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchCreateTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量创建表
     *  *
     * @param BatchCreateTablesRequest $request BatchCreateTablesRequest
     *
     * @return BatchCreateTablesResponse BatchCreateTablesResponse
     */
    public function batchCreateTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchCreateTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary batch delete partitions
     *  *
     * @param BatchDeletePartitionsRequest $request BatchDeletePartitionsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeletePartitionsResponse BatchDeletePartitionsResponse
     */
    public function batchDeletePartitionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->ifExists)) {
            $body['IfExists'] = $request->ifExists;
        }
        if (!Utils::isUnset($request->partitionValueList)) {
            $body['PartitionValueList'] = $request->partitionValueList;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeletePartitions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/batchdelete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchDeletePartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary batch delete partitions
     *  *
     * @param BatchDeletePartitionsRequest $request BatchDeletePartitionsRequest
     *
     * @return BatchDeletePartitionsResponse BatchDeletePartitionsResponse
     */
    public function batchDeletePartitions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeletePartitionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary BatchDeleteTableVersions
     *  *
     * @param BatchDeleteTableVersionsRequest $request BatchDeleteTableVersionsRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteTableVersionsResponse BatchDeleteTableVersionsResponse
     */
    public function batchDeleteTableVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->versionIds)) {
            $body['VersionIds'] = $request->versionIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteTableVersions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/versions/batchdelete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteTableVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary BatchDeleteTableVersions
     *  *
     * @param BatchDeleteTableVersionsRequest $request BatchDeleteTableVersionsRequest
     *
     * @return BatchDeleteTableVersionsResponse BatchDeleteTableVersionsResponse
     */
    public function batchDeleteTableVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteTableVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary BatchDeleteTables
     *  *
     * @param BatchDeleteTablesRequest $request BatchDeleteTablesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteTablesResponse BatchDeleteTablesResponse
     */
    public function batchDeleteTablesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->ifExists)) {
            $body['IfExists'] = $request->ifExists;
        }
        if (!Utils::isUnset($request->tableNames)) {
            $body['TableNames'] = $request->tableNames;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteTables',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/batchdelete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary BatchDeleteTables
     *  *
     * @param BatchDeleteTablesRequest $request BatchDeleteTablesRequest
     *
     * @return BatchDeleteTablesResponse BatchDeleteTablesResponse
     */
    public function batchDeleteTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Batch Get Partition Column Statistics
     *  *
     * @param BatchGetPartitionColumnStatisticsRequest $request BatchGetPartitionColumnStatisticsRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetPartitionColumnStatisticsResponse BatchGetPartitionColumnStatisticsResponse
     */
    public function batchGetPartitionColumnStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->columnNames)) {
            $body['ColumnNames'] = $request->columnNames;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->partitionNames)) {
            $body['PartitionNames'] = $request->partitionNames;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchGetPartitionColumnStatistics',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics/batchget',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchGetPartitionColumnStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Batch Get Partition Column Statistics
     *  *
     * @param BatchGetPartitionColumnStatisticsRequest $request BatchGetPartitionColumnStatisticsRequest
     *
     * @return BatchGetPartitionColumnStatisticsResponse BatchGetPartitionColumnStatisticsResponse
     */
    public function batchGetPartitionColumnStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetPartitionColumnStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary batch get partitions
     *  *
     * @param BatchGetPartitionsRequest $request BatchGetPartitionsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetPartitionsResponse BatchGetPartitionsResponse
     */
    public function batchGetPartitionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->isShareSd)) {
            $body['IsShareSd'] = $request->isShareSd;
        }
        if (!Utils::isUnset($request->partitionValueList)) {
            $body['PartitionValueList'] = $request->partitionValueList;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchGetPartitions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/batchget',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchGetPartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary batch get partitions
     *  *
     * @param BatchGetPartitionsRequest $request BatchGetPartitionsRequest
     *
     * @return BatchGetPartitionsResponse BatchGetPartitionsResponse
     */
    public function batchGetPartitions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetPartitionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary batch get tables
     *  *
     * @param BatchGetTablesRequest $request BatchGetTablesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetTablesResponse BatchGetTablesResponse
     */
    public function batchGetTablesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableNames)) {
            $body['TableNames'] = $request->tableNames;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchGetTables',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/batchget',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchGetTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary batch get tables
     *  *
     * @param BatchGetTablesRequest $request BatchGetTablesRequest
     *
     * @return BatchGetTablesResponse BatchGetTablesResponse
     */
    public function batchGetTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量授权
     *  *
     * @param BatchGrantPermissionsRequest $request BatchGrantPermissionsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGrantPermissionsResponse BatchGrantPermissionsResponse
     */
    public function batchGrantPermissionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->grantRevokeEntries)) {
            $body['GrantRevokeEntries'] = $request->grantRevokeEntries;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchGrantPermissions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/permissions/batchgrant',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchGrantPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量授权
     *  *
     * @param BatchGrantPermissionsRequest $request BatchGrantPermissionsRequest
     *
     * @return BatchGrantPermissionsResponse BatchGrantPermissionsResponse
     */
    public function batchGrantPermissions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGrantPermissionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量取消授权
     *  *
     * @param BatchRevokePermissionsRequest $request BatchRevokePermissionsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchRevokePermissionsResponse BatchRevokePermissionsResponse
     */
    public function batchRevokePermissionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->grantRevokeEntries)) {
            $body['GrantRevokeEntries'] = $request->grantRevokeEntries;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchRevokePermissions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/permissions/batchrevoke',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchRevokePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量取消授权
     *  *
     * @param BatchRevokePermissionsRequest $request BatchRevokePermissionsRequest
     *
     * @return BatchRevokePermissionsResponse BatchRevokePermissionsResponse
     */
    public function batchRevokePermissions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchRevokePermissionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary batch update partitions
     *  *
     * @param BatchUpdatePartitionsRequest $request BatchUpdatePartitionsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUpdatePartitionsResponse BatchUpdatePartitionsResponse
     */
    public function batchUpdatePartitionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->partitionInputs)) {
            $body['PartitionInputs'] = $request->partitionInputs;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdatePartitions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/batchupdate',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchUpdatePartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary batch update partitions
     *  *
     * @param BatchUpdatePartitionsRequest $request BatchUpdatePartitionsRequest
     *
     * @return BatchUpdatePartitionsResponse BatchUpdatePartitionsResponse
     */
    public function batchUpdatePartitions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchUpdatePartitionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量更新表
     *  *
     * @param BatchUpdateTablesRequest $request BatchUpdateTablesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUpdateTablesResponse BatchUpdateTablesResponse
     */
    public function batchUpdateTablesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->isAsync)) {
            $body['IsAsync'] = $request->isAsync;
        }
        if (!Utils::isUnset($request->tableInputs)) {
            $body['TableInputs'] = $request->tableInputs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateTables',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/batchupdate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchUpdateTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量更新表
     *  *
     * @param BatchUpdateTablesRequest $request BatchUpdateTablesRequest
     *
     * @return BatchUpdateTablesResponse BatchUpdateTablesResponse
     */
    public function batchUpdateTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchUpdateTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消查询任务
     *  *
     * @param CancelQueryRequest $request CancelQueryRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelQueryResponse CancelQueryResponse
     */
    public function cancelQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelQuery',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/query/cancelQuery',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消查询任务
     *  *
     * @param CancelQueryRequest $request CancelQueryRequest
     *
     * @return CancelQueryResponse CancelQueryResponse
     */
    public function cancelQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Check permissions
     *  *
     * @param CheckPermissionsRequest $request CheckPermissionsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckPermissionsResponse CheckPermissionsResponse
     */
    public function checkPermissionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CheckPermissions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/permissions/check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Check permissions
     *  *
     * @param CheckPermissionsRequest $request CheckPermissionsRequest
     *
     * @return CheckPermissionsResponse CheckPermissionsResponse
     */
    public function checkPermissions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkPermissionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建数据湖Catalog
     *  *
     * @param CreateCatalogRequest $request CreateCatalogRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCatalogResponse CreateCatalogResponse
     */
    public function createCatalogWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogInput)) {
            $body['CatalogInput'] = $request->catalogInput;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCatalog',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据湖Catalog
     *  *
     * @param CreateCatalogRequest $request CreateCatalogRequest
     *
     * @return CreateCatalogResponse CreateCatalogResponse
     */
    public function createCatalog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCatalogWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary create database
     *  *
     * @param CreateDatabaseRequest $request CreateDatabaseRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseInput)) {
            $body['DatabaseInput'] = $request->databaseInput;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatabase',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary create database
     *  *
     * @param CreateDatabaseRequest $request CreateDatabaseRequest
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatabaseWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create function
     *  *
     * @param CreateFunctionRequest $request CreateFunctionRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFunctionResponse CreateFunctionResponse
     */
    public function createFunctionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->functionInput)) {
            $body['FunctionInput'] = $request->functionInput;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunction',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/functions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create function
     *  *
     * @param CreateFunctionRequest $request CreateFunctionRequest
     *
     * @return CreateFunctionResponse CreateFunctionResponse
     */
    public function createFunction($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary create lock
     *  *
     * @param CreateLockRequest $request CreateLockRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLockResponse CreateLockResponse
     */
    public function createLockWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lockObjList)) {
            $body['LockObjList'] = $request->lockObjList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLock',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/locks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary create lock
     *  *
     * @param CreateLockRequest $request CreateLockRequest
     *
     * @return CreateLockResponse CreateLockResponse
     */
    public function createLock($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLockWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create Partition
     *  *
     * @param CreatePartitionRequest $request CreatePartitionRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePartitionResponse CreatePartitionResponse
     */
    public function createPartitionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->ifNotExists)) {
            $body['IfNotExists'] = $request->ifNotExists;
        }
        if (!Utils::isUnset($request->needResult)) {
            $body['NeedResult'] = $request->needResult;
        }
        if (!Utils::isUnset($request->partitionInput)) {
            $body['PartitionInput'] = $request->partitionInput;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePartition',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create Partition
     *  *
     * @param CreatePartitionRequest $request CreatePartitionRequest
     *
     * @return CreatePartitionResponse CreatePartitionResponse
     */
    public function createPartition($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPartitionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建数据糊角色
     *  *
     * @param CreateRoleRequest $request CreateRoleRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRoleResponse CreateRoleResponse
     */
    public function createRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateRole',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据糊角色
     *  *
     * @param CreateRoleRequest $request CreateRoleRequest
     *
     * @return CreateRoleResponse CreateRoleResponse
     */
    public function createRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create tables
     *  *
     * @param CreateTableRequest $request CreateTableRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTableResponse CreateTableResponse
     */
    public function createTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableInput)) {
            $body['TableInput'] = $request->tableInput;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTable',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create tables
     *  *
     * @param CreateTableRequest $request CreateTableRequest
     *
     * @return CreateTableResponse CreateTableResponse
     */
    public function createTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Delete Catalog by catalogId
     *  *
     * @param DeleteCatalogRequest $request DeleteCatalogRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCatalogResponse DeleteCatalogResponse
     */
    public function deleteCatalogWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->isAsync)) {
            $query['IsAsync'] = $request->isAsync;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCatalog',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete Catalog by catalogId
     *  *
     * @param DeleteCatalogRequest $request DeleteCatalogRequest
     *
     * @return DeleteCatalogResponse DeleteCatalogResponse
     */
    public function deleteCatalog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCatalogWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Delete database by catalogId and database name
     *  *
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->cascade)) {
            $query['Cascade'] = $request->cascade;
        }
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabase',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete database by catalogId and database name
     *  *
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatabaseWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Delete function
     *  *
     * @param DeleteFunctionRequest $request DeleteFunctionRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFunctionResponse DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFunction',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/functions',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete function
     *  *
     * @param DeleteFunctionRequest $request DeleteFunctionRequest
     *
     * @return DeleteFunctionResponse DeleteFunctionResponse
     */
    public function deleteFunction($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary delete partition
     *  *
     * @param DeletePartitionRequest $request DeletePartitionRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePartitionResponse DeletePartitionResponse
     */
    public function deletePartitionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->ifExists)) {
            $body['IfExists'] = $request->ifExists;
        }
        if (!Utils::isUnset($request->partitionValues)) {
            $body['PartitionValues'] = $request->partitionValues;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePartition',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary delete partition
     *  *
     * @param DeletePartitionRequest $request DeletePartitionRequest
     *
     * @return DeletePartitionResponse DeletePartitionResponse
     */
    public function deletePartition($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePartitionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary DeletePartitionColumnStatistics
     *  *
     * @param DeletePartitionColumnStatisticsRequest $tmpReq  DeletePartitionColumnStatisticsRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePartitionColumnStatisticsResponse DeletePartitionColumnStatisticsResponse
     */
    public function deletePartitionColumnStatisticsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeletePartitionColumnStatisticsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->columnNames)) {
            $request->columnNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columnNames, 'ColumnNames', 'json');
        }
        if (!Utils::isUnset($tmpReq->partitionNames)) {
            $request->partitionNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->partitionNames, 'PartitionNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->columnNamesShrink)) {
            $query['ColumnNames'] = $request->columnNamesShrink;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->partitionNamesShrink)) {
            $query['PartitionNames'] = $request->partitionNamesShrink;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePartitionColumnStatistics',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePartitionColumnStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeletePartitionColumnStatistics
     *  *
     * @param DeletePartitionColumnStatisticsRequest $request DeletePartitionColumnStatisticsRequest
     *
     * @return DeletePartitionColumnStatisticsResponse DeletePartitionColumnStatisticsResponse
     */
    public function deletePartitionColumnStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePartitionColumnStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除角色
     *  *
     * @param DeleteRoleRequest $request DeleteRoleRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoleResponse DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRole',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除角色
     *  *
     * @param DeleteRoleRequest $request DeleteRoleRequest
     *
     * @return DeleteRoleResponse DeleteRoleResponse
     */
    public function deleteRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary delete table
     *  *
     * @param DeleteTableRequest $request DeleteTableRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTableResponse DeleteTableResponse
     */
    public function deleteTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTable',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary delete table
     *  *
     * @param DeleteTableRequest $request DeleteTableRequest
     *
     * @return DeleteTableResponse DeleteTableResponse
     */
    public function deleteTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary DeleteTableColumnStatistics
     *  *
     * @param DeleteTableColumnStatisticsRequest $tmpReq  DeleteTableColumnStatisticsRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTableColumnStatisticsResponse DeleteTableColumnStatisticsResponse
     */
    public function deleteTableColumnStatisticsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteTableColumnStatisticsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->columnNames)) {
            $request->columnNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columnNames, 'ColumnNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->columnNamesShrink)) {
            $query['ColumnNames'] = $request->columnNamesShrink;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTableColumnStatistics',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/columnstatistics',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTableColumnStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteTableColumnStatistics
     *  *
     * @param DeleteTableColumnStatisticsRequest $request DeleteTableColumnStatisticsRequest
     *
     * @return DeleteTableColumnStatisticsResponse DeleteTableColumnStatisticsResponse
     */
    public function deleteTableColumnStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTableColumnStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary delete table version
     *  *
     * @param DeleteTableVersionRequest $request DeleteTableVersionRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTableVersionResponse DeleteTableVersionResponse
     */
    public function deleteTableVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTableVersion',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/versions',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTableVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary delete table version
     *  *
     * @param DeleteTableVersionRequest $request DeleteTableVersionRequest
     *
     * @return DeleteTableVersionResponse DeleteTableVersionResponse
     */
    public function deleteTableVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTableVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消注册Location
     *  *
     * @param DeregisterLocationRequest $request DeregisterLocationRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeregisterLocationResponse DeregisterLocationResponse
     */
    public function deregisterLocationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->locationId)) {
            $query['LocationId'] = $request->locationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeregisterLocation',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/locations',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeregisterLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消注册Location
     *  *
     * @param DeregisterLocationRequest $request DeregisterLocationRequest
     *
     * @return DeregisterLocationResponse DeregisterLocationResponse
     */
    public function deregisterLocation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deregisterLocationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/service/describeRegions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @summary GetAsyncTaskStatus
     *  *
     * @param GetAsyncTaskStatusRequest $request GetAsyncTaskStatusRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncTaskStatusResponse GetAsyncTaskStatusResponse
     */
    public function getAsyncTaskStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncTaskStatus',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAsyncTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetAsyncTaskStatus
     *  *
     * @param GetAsyncTaskStatusRequest $request GetAsyncTaskStatusRequest
     *
     * @return GetAsyncTaskStatusResponse GetAsyncTaskStatusResponse
     */
    public function getAsyncTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAsyncTaskStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Catalog
     *  *
     * @param GetCatalogRequest $request GetCatalogRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCatalogResponse GetCatalogResponse
     */
    public function getCatalogWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCatalog',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Catalog
     *  *
     * @param GetCatalogRequest $request GetCatalogRequest
     *
     * @return GetCatalogResponse GetCatalogResponse
     */
    public function getCatalog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取数据湖配置
     *  *
     * @param GetCatalogSettingsRequest $request GetCatalogSettingsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCatalogSettingsResponse GetCatalogSettingsResponse
     */
    public function getCatalogSettingsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCatalogSettings',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/settings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCatalogSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据湖配置
     *  *
     * @param GetCatalogSettingsRequest $request GetCatalogSettingsRequest
     *
     * @return GetCatalogSettingsResponse GetCatalogSettingsResponse
     */
    public function getCatalogSettings($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogSettingsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get Database
     *  *
     * @param GetDatabaseRequest $request GetDatabaseRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseResponse GetDatabaseResponse
     */
    public function getDatabaseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDatabase',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Database
     *  *
     * @param GetDatabaseRequest $request GetDatabaseRequest
     *
     * @return GetDatabaseResponse GetDatabaseResponse
     */
    public function getDatabase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取库数据概览信息
     *  *
     * @param GetDatabaseProfileRequest $request GetDatabaseProfileRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseProfileResponse GetDatabaseProfileResponse
     */
    public function getDatabaseProfileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDatabaseProfile',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/metastorehouse/catalog/database/databaseprofile',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDatabaseProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取库数据概览信息
     *  *
     * @param GetDatabaseProfileRequest $request GetDatabaseProfileRequest
     *
     * @return GetDatabaseProfileResponse GetDatabaseProfileResponse
     */
    public function getDatabaseProfile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseProfileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get Function
     *  *
     * @param GetFunctionRequest $request GetFunctionRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFunctionResponse GetFunctionResponse
     */
    public function getFunctionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunction',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/functions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Function
     *  *
     * @param GetFunctionRequest $request GetFunctionRequest
     *
     * @return GetFunctionResponse GetFunctionResponse
     */
    public function getFunction($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取生命周期规则
     *  *
     * @param GetLifecycleRuleRequest $request GetLifecycleRuleRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLifecycleRuleResponse GetLifecycleRuleResponse
     */
    public function getLifecycleRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLifecycleRule',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/metastorehouse/lifecycle/rule/getLifecycleRule',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLifecycleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取生命周期规则
     *  *
     * @param GetLifecycleRuleRequest $request GetLifecycleRuleRequest
     *
     * @return GetLifecycleRuleResponse GetLifecycleRuleResponse
     */
    public function getLifecycleRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLifecycleRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary get lock status
     *  *
     * @param GetLockRequest $request GetLockRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLockResponse GetLockResponse
     */
    public function getLockWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lockId)) {
            $query['LockId'] = $request->lockId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLock',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/locks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary get lock status
     *  *
     * @param GetLockRequest $request GetLockRequest
     *
     * @return GetLockResponse GetLockResponse
     */
    public function getLock($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLockWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary get partition
     *  *
     * @param GetPartitionRequest $request GetPartitionRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPartitionResponse GetPartitionResponse
     */
    public function getPartitionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->partitionValues)) {
            $body['PartitionValues'] = $request->partitionValues;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPartition',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary get partition
     *  *
     * @param GetPartitionRequest $request GetPartitionRequest
     *
     * @return GetPartitionResponse GetPartitionResponse
     */
    public function getPartition($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPartitionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Batch Get Partition Column Statistics
     *  *
     * @param GetPartitionColumnStatisticsRequest $tmpReq  GetPartitionColumnStatisticsRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPartitionColumnStatisticsResponse GetPartitionColumnStatisticsResponse
     */
    public function getPartitionColumnStatisticsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetPartitionColumnStatisticsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->columnNames)) {
            $request->columnNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columnNames, 'ColumnNames', 'json');
        }
        if (!Utils::isUnset($tmpReq->partitionNames)) {
            $request->partitionNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->partitionNames, 'PartitionNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->columnNamesShrink)) {
            $query['ColumnNames'] = $request->columnNamesShrink;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->partitionNamesShrink)) {
            $query['PartitionNames'] = $request->partitionNamesShrink;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPartitionColumnStatistics',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPartitionColumnStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Batch Get Partition Column Statistics
     *  *
     * @param GetPartitionColumnStatisticsRequest $request GetPartitionColumnStatisticsRequest
     *
     * @return GetPartitionColumnStatisticsResponse GetPartitionColumnStatisticsResponse
     */
    public function getPartitionColumnStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPartitionColumnStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取查询结果
     *  *
     * @param GetQueryResultRequest $request GetQueryResultRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryResultResponse GetQueryResultResponse
     */
    public function getQueryResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryResult',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/query/getQueryResult',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取查询结果
     *  *
     * @param GetQueryResultRequest $request GetQueryResultRequest
     *
     * @return GetQueryResultResponse GetQueryResultResponse
     */
    public function getQueryResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQueryResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRegionStatusRequest $request GetRegionStatusRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRegionStatusResponse GetRegionStatusResponse
     */
    public function getRegionStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRegionStatus',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/service/getRegionStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRegionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRegionStatusRequest $request GetRegionStatusRequest
     *
     * @return GetRegionStatusResponse GetRegionStatusResponse
     */
    public function getRegionStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary GetRole
     *  *
     * @param GetRoleRequest $request GetRoleRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRoleResponse GetRoleResponse
     */
    public function getRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRole',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetRole
     *  *
     * @param GetRoleRequest $request GetRoleRequest
     *
     * @return GetRoleResponse GetRoleResponse
     */
    public function getRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceStatusRequest $request GetServiceStatusRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceStatusResponse GetServiceStatusResponse
     */
    public function getServiceStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceStatus',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/service/getServiceStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceStatusRequest $request GetServiceStatusRequest
     *
     * @return GetServiceStatusResponse GetServiceStatusResponse
     */
    public function getServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get table
     *  *
     * @param GetTableRequest $request GetTableRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableResponse GetTableResponse
     */
    public function getTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTable',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get table
     *  *
     * @param GetTableRequest $request GetTableRequest
     *
     * @return GetTableResponse GetTableResponse
     */
    public function getTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary An example of API
     *  *
     * @param GetTableColumnStatisticsRequest $tmpReq  GetTableColumnStatisticsRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableColumnStatisticsResponse GetTableColumnStatisticsResponse
     */
    public function getTableColumnStatisticsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetTableColumnStatisticsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->columnNames)) {
            $request->columnNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columnNames, 'ColumnNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->columnNamesShrink)) {
            $query['ColumnNames'] = $request->columnNamesShrink;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableColumnStatistics',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/columnstatistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableColumnStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary An example of API
     *  *
     * @param GetTableColumnStatisticsRequest $request GetTableColumnStatisticsRequest
     *
     * @return GetTableColumnStatisticsResponse GetTableColumnStatisticsResponse
     */
    public function getTableColumnStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableColumnStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取表数据概况信息
     *  *
     * @param GetTableProfileRequest $request GetTableProfileRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableProfileResponse GetTableProfileResponse
     */
    public function getTableProfileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableProfile',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/metastorehouse/catalog/database/tableprofile',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取表数据概况信息
     *  *
     * @param GetTableProfileRequest $request GetTableProfileRequest
     *
     * @return GetTableProfileResponse GetTableProfileResponse
     */
    public function getTableProfile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableProfileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get table version
     *  *
     * @param GetTableVersionRequest $request GetTableVersionRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableVersionResponse GetTableVersionResponse
     */
    public function getTableVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableVersion',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get table version
     *  *
     * @param GetTableVersionRequest $request GetTableVersionRequest
     *
     * @return GetTableVersionResponse GetTableVersionResponse
     */
    public function getTableVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 赋予Principal资源的权限
     *  *
     * @param GrantPermissionsRequest $request GrantPermissionsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantPermissionsResponse GrantPermissionsResponse
     */
    public function grantPermissionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accesses)) {
            $body['Accesses'] = $request->accesses;
        }
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->delegateAccesses)) {
            $body['DelegateAccesses'] = $request->delegateAccesses;
        }
        if (!Utils::isUnset($request->metaResource)) {
            $body['MetaResource'] = $request->metaResource;
        }
        if (!Utils::isUnset($request->principal)) {
            $body['Principal'] = $request->principal;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantPermissions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/permissions/grant',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GrantPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 赋予Principal资源的权限
     *  *
     * @param GrantPermissionsRequest $request GrantPermissionsRequest
     *
     * @return GrantPermissionsResponse GrantPermissionsResponse
     */
    public function grantPermissions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantPermissionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Grant 单个角色给一个或多个用户
     *  *
     * @param GrantRoleToUsersRequest $request GrantRoleToUsersRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantRoleToUsersResponse GrantRoleToUsersResponse
     */
    public function grantRoleToUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleName)) {
            $body['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantRoleToUsers',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles/grantusers',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GrantRoleToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Grant 单个角色给一个或多个用户
     *  *
     * @param GrantRoleToUsersRequest $request GrantRoleToUsersRequest
     *
     * @return GrantRoleToUsersResponse GrantRoleToUsersResponse
     */
    public function grantRoleToUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantRoleToUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Grant 一个或多个角色给一个用户
     *  *
     * @param GrantRolesToUserRequest $request GrantRolesToUserRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantRolesToUserResponse GrantRolesToUserResponse
     */
    public function grantRolesToUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleNames)) {
            $body['RoleNames'] = $request->roleNames;
        }
        if (!Utils::isUnset($request->user)) {
            $body['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantRolesToUser',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles/grantroles',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GrantRolesToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Grant 一个或多个角色给一个用户
     *  *
     * @param GrantRolesToUserRequest $request GrantRolesToUserRequest
     *
     * @return GrantRolesToUserResponse GrantRolesToUserResponse
     */
    public function grantRolesToUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantRolesToUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ListCatalogs
     *  *
     * @param ListCatalogsRequest $request ListCatalogsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCatalogsResponse ListCatalogsResponse
     */
    public function listCatalogsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->idPattern)) {
            $query['IdPattern'] = $request->idPattern;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCatalogs',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCatalogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListCatalogs
     *  *
     * @param ListCatalogsRequest $request ListCatalogsRequest
     *
     * @return ListCatalogsResponse ListCatalogsResponse
     */
    public function listCatalogs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCatalogsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get Databases List
     *  *
     * @param ListDatabasesRequest $request ListDatabasesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabasesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->namePattern)) {
            $query['NamePattern'] = $request->namePattern;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabases',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Databases List
     *  *
     * @param ListDatabasesRequest $request ListDatabasesRequest
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabases($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatabasesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary list function names
     *  *
     * @param ListFunctionNamesRequest $request ListFunctionNamesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFunctionNamesResponse ListFunctionNamesResponse
     */
    public function listFunctionNamesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->functionNamePattern)) {
            $query['FunctionNamePattern'] = $request->functionNamePattern;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionNames',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/functions/names',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary list function names
     *  *
     * @param ListFunctionNamesRequest $request ListFunctionNamesRequest
     *
     * @return ListFunctionNamesResponse ListFunctionNamesResponse
     */
    public function listFunctionNames($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionNamesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary list functions
     *  *
     * @param ListFunctionsRequest $request ListFunctionsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->functionNamePattern)) {
            $query['FunctionNamePattern'] = $request->functionNamePattern;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/functions/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary list functions
     *  *
     * @param ListFunctionsRequest $request ListFunctionsRequest
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary partition names
     *  *
     * @param ListPartitionNamesRequest $request ListPartitionNamesRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPartitionNamesResponse ListPartitionNamesResponse
     */
    public function listPartitionNamesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $body['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->partialPartValues)) {
            $body['PartialPartValues'] = $request->partialPartValues;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPartitionNames',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/names',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPartitionNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary partition names
     *  *
     * @param ListPartitionNamesRequest $request ListPartitionNamesRequest
     *
     * @return ListPartitionNamesResponse ListPartitionNamesResponse
     */
    public function listPartitionNames($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPartitionNamesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary list partitions
     *  *
     * @param ListPartitionsRequest $request ListPartitionsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPartitionsResponse ListPartitionsResponse
     */
    public function listPartitionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->isShareSd)) {
            $body['IsShareSd'] = $request->isShareSd;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $body['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->partialPartValues)) {
            $body['PartialPartValues'] = $request->partialPartValues;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPartitions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary list partitions
     *  *
     * @param ListPartitionsRequest $request ListPartitionsRequest
     *
     * @return ListPartitionsResponse ListPartitionsResponse
     */
    public function listPartitions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPartitionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPartitionsByExprResponse ListPartitionsByExprResponse
     */
    public function listPartitionsByExprWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListPartitionsByExpr',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/listbyexpr',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ListPartitionsByExprResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListPartitionsByExprResponse ListPartitionsByExprResponse
     */
    public function listPartitionsByExpr()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPartitionsByExprWithOptions($headers, $runtime);
    }

    /**
     * @summary list partitions by filter
     *  *
     * @param ListPartitionsByFilterRequest $request ListPartitionsByFilterRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPartitionsByFilterResponse ListPartitionsByFilterResponse
     */
    public function listPartitionsByFilterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->isShareSd)) {
            $body['IsShareSd'] = $request->isShareSd;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $body['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPartitionsByFilter',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/listbyfilter',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPartitionsByFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary list partitions by filter
     *  *
     * @param ListPartitionsByFilterRequest $request ListPartitionsByFilterRequest
     *
     * @return ListPartitionsByFilterResponse ListPartitionsByFilterResponse
     */
    public function listPartitionsByFilter($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPartitionsByFilterWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取分区数据概况信息
     *  *
     * @param ListPartitionsProfileRequest $tmpReq  ListPartitionsProfileRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPartitionsProfileResponse ListPartitionsProfileResponse
     */
    public function listPartitionsProfileWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPartitionsProfileShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->partitionNames)) {
            $request->partitionNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->partitionNames, 'PartitionNames', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->partitionNamesShrink)) {
            $query['PartitionNames'] = $request->partitionNamesShrink;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPartitionsProfile',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/metastorehouse/catalog/database/tableprofile/partitionprofile/listPartitionsProfile',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPartitionsProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取分区数据概况信息
     *  *
     * @param ListPartitionsProfileRequest $request ListPartitionsProfileRequest
     *
     * @return ListPartitionsProfileResponse ListPartitionsProfileResponse
     */
    public function listPartitionsProfile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPartitionsProfileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取指定资源或指定Principal的权限信息
     *  *
     * @param ListPermissionsRequest $request ListPermissionsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPermissionsResponse ListPermissionsResponse
     */
    public function listPermissionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->isListUserRolePermissions)) {
            $body['IsListUserRolePermissions'] = $request->isListUserRolePermissions;
        }
        if (!Utils::isUnset($request->metaResource)) {
            $body['MetaResource'] = $request->metaResource;
        }
        if (!Utils::isUnset($request->metaResourceType)) {
            $body['MetaResourceType'] = $request->metaResourceType;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $body['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->principal)) {
            $body['Principal'] = $request->principal;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPermissions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/permissions/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定资源或指定Principal的权限信息
     *  *
     * @param ListPermissionsRequest $request ListPermissionsRequest
     *
     * @return ListPermissionsResponse ListPermissionsResponse
     */
    public function listPermissions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询用户角色列表
     *  *
     * @param ListRoleUsersRequest $request ListRoleUsersRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRoleUsersResponse ListRoleUsersResponse
     */
    public function listRoleUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->userNamePattern)) {
            $query['UserNamePattern'] = $request->userNamePattern;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRoleUsers',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles/roleusers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRoleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户角色列表
     *  *
     * @param ListRoleUsersRequest $request ListRoleUsersRequest
     *
     * @return ListRoleUsersResponse ListRoleUsersResponse
     */
    public function listRoleUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRoleUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ListRoles
     *  *
     * @param ListRolesRequest $request ListRolesRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRolesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->roleNamePattern)) {
            $query['RoleNamePattern'] = $request->roleNamePattern;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRoles',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListRoles
     *  *
     * @param ListRolesRequest $request ListRolesRequest
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary list table names
     *  *
     * @param ListTableNamesRequest $request ListTableNamesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTableNamesResponse ListTableNamesResponse
     */
    public function listTableNamesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tableNamePattern)) {
            $query['TableNamePattern'] = $request->tableNamePattern;
        }
        if (!Utils::isUnset($request->tableType)) {
            $query['TableType'] = $request->tableType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTableNames',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/names',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTableNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary list table names
     *  *
     * @param ListTableNamesRequest $request ListTableNamesRequest
     *
     * @return ListTableNamesResponse ListTableNamesResponse
     */
    public function listTableNames($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableNamesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary List table versions
     *  *
     * @param ListTableVersionsRequest $request ListTableVersionsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTableVersionsResponse ListTableVersionsResponse
     */
    public function listTableVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTableVersions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/versions/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTableVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary List table versions
     *  *
     * @param ListTableVersionsRequest $request ListTableVersionsRequest
     *
     * @return ListTableVersionsResponse ListTableVersionsResponse
     */
    public function listTableVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary list tables
     *  *
     * @param ListTablesRequest $request ListTablesRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTablesResponse ListTablesResponse
     */
    public function listTablesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tableNamePattern)) {
            $query['TableNamePattern'] = $request->tableNamePattern;
        }
        if (!Utils::isUnset($request->tableType)) {
            $query['TableType'] = $request->tableType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTables',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/databases/tables/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary list tables
     *  *
     * @param ListTablesRequest $request ListTablesRequest
     *
     * @return ListTablesResponse ListTablesResponse
     */
    public function listTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询用户角色列表
     *  *
     * @param ListUserRolesRequest $request ListUserRolesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserRolesResponse ListUserRolesResponse
     */
    public function listUserRolesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->principalArn)) {
            $query['PrincipalArn'] = $request->principalArn;
        }
        if (!Utils::isUnset($request->roleNamePattern)) {
            $query['RoleNamePattern'] = $request->roleNamePattern;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserRoles',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles/userroles',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户角色列表
     *  *
     * @param ListUserRolesRequest $request ListUserRolesRequest
     *
     * @return ListUserRolesResponse ListUserRolesResponse
     */
    public function listUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary refresh to keep the lock alive
     *  *
     * @param RefreshLockRequest $request RefreshLockRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshLockResponse RefreshLockResponse
     */
    public function refreshLockWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lockId)) {
            $query['LockId'] = $request->lockId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshLock',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/locks',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary refresh to keep the lock alive
     *  *
     * @param RefreshLockRequest $request RefreshLockRequest
     *
     * @return RefreshLockResponse RefreshLockResponse
     */
    public function refreshLock($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshLockWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 注册Location
     *  *
     * @param RegisterLocationRequest $request RegisterLocationRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterLocationResponse RegisterLocationResponse
     */
    public function registerLocationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inventoryCollectEnabled)) {
            $body['InventoryCollectEnabled'] = $request->inventoryCollectEnabled;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->ossLogCollectEnabled)) {
            $body['OssLogCollectEnabled'] = $request->ossLogCollectEnabled;
        }
        if (!Utils::isUnset($request->roleName)) {
            $body['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterLocation',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/locations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RegisterLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注册Location
     *  *
     * @param RegisterLocationRequest $request RegisterLocationRequest
     *
     * @return RegisterLocationResponse RegisterLocationResponse
     */
    public function registerLocation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->registerLocationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary rename partition
     *  *
     * @param RenamePartitionRequest $request RenamePartitionRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RenamePartitionResponse RenamePartitionResponse
     */
    public function renamePartitionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->partitionInput)) {
            $body['PartitionInput'] = $request->partitionInput;
        }
        if (!Utils::isUnset($request->partitionValues)) {
            $body['PartitionValues'] = $request->partitionValues;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenamePartition',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/rename',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenamePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary rename partition
     *  *
     * @param RenamePartitionRequest $request RenamePartitionRequest
     *
     * @return RenamePartitionResponse RenamePartitionResponse
     */
    public function renamePartition($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renamePartitionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary rename table
     *  *
     * @param RenameTableRequest $request RenameTableRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameTableResponse RenameTableResponse
     */
    public function renameTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->isAsync)) {
            $body['IsAsync'] = $request->isAsync;
        }
        if (!Utils::isUnset($request->tableInput)) {
            $body['TableInput'] = $request->tableInput;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameTable',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/rename',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenameTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary rename table
     *  *
     * @param RenameTableRequest $request RenameTableRequest
     *
     * @return RenameTableResponse RenameTableResponse
     */
    public function renameTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renameTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消Principal资源的权限
     *  *
     * @param RevokePermissionsRequest $request RevokePermissionsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokePermissionsResponse RevokePermissionsResponse
     */
    public function revokePermissionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accesses)) {
            $body['Accesses'] = $request->accesses;
        }
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->delegateAccesses)) {
            $body['DelegateAccesses'] = $request->delegateAccesses;
        }
        if (!Utils::isUnset($request->metaResource)) {
            $body['MetaResource'] = $request->metaResource;
        }
        if (!Utils::isUnset($request->principal)) {
            $body['Principal'] = $request->principal;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokePermissions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/permissions/revoke',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RevokePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消Principal资源的权限
     *  *
     * @param RevokePermissionsRequest $request RevokePermissionsRequest
     *
     * @return RevokePermissionsResponse RevokePermissionsResponse
     */
    public function revokePermissions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokePermissionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量将该角色从这些用户中revoke
     *  *
     * @param RevokeRoleFromUsersRequest $request RevokeRoleFromUsersRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeRoleFromUsersResponse RevokeRoleFromUsersResponse
     */
    public function revokeRoleFromUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleName)) {
            $body['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokeRoleFromUsers',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles/revokeusers',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RevokeRoleFromUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量将该角色从这些用户中revoke
     *  *
     * @param RevokeRoleFromUsersRequest $request RevokeRoleFromUsersRequest
     *
     * @return RevokeRoleFromUsersResponse RevokeRoleFromUsersResponse
     */
    public function revokeRoleFromUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeRoleFromUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量Revoke该用户的角色
     *  *
     * @param RevokeRolesFromUserRequest $request RevokeRolesFromUserRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeRolesFromUserResponse RevokeRolesFromUserResponse
     */
    public function revokeRolesFromUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleNames)) {
            $body['RoleNames'] = $request->roleNames;
        }
        if (!Utils::isUnset($request->user)) {
            $body['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokeRolesFromUser',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles/revokeroles',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RevokeRolesFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量Revoke该用户的角色
     *  *
     * @param RevokeRolesFromUserRequest $request RevokeRolesFromUserRequest
     *
     * @return RevokeRolesFromUserResponse RevokeRolesFromUserResponse
     */
    public function revokeRolesFromUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeRolesFromUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 运行元数据迁移任务
     *  *
     * @param RunMigrationWorkflowRequest $request RunMigrationWorkflowRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RunMigrationWorkflowResponse RunMigrationWorkflowResponse
     */
    public function runMigrationWorkflowWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunMigrationWorkflow',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/migration/workflow/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunMigrationWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 运行元数据迁移任务
     *  *
     * @param RunMigrationWorkflowRequest $request RunMigrationWorkflowRequest
     *
     * @return RunMigrationWorkflowResponse RunMigrationWorkflowResponse
     */
    public function runMigrationWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runMigrationWorkflowWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary DLF 元数据search
     *  *
     * @param SearchRequest  $request SearchRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchResponse SearchResponse
     */
    public function searchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchText)) {
            $body['SearchText'] = $request->searchText;
        }
        if (!Utils::isUnset($request->searchType)) {
            $body['SearchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->sortCriteria)) {
            $body['SortCriteria'] = $request->sortCriteria;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Search',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/search',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DLF 元数据search
     *  *
     * @param SearchRequest $request SearchRequest
     *
     * @return SearchResponse SearchResponse
     */
    public function search($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary DLF 跨Catalog检索元数据
     *  *
     * @param SearchAcrossCatalogRequest $request SearchAcrossCatalogRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchAcrossCatalogResponse SearchAcrossCatalogResponse
     */
    public function searchAcrossCatalogWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogIds)) {
            $body['CatalogIds'] = $request->catalogIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchText)) {
            $body['SearchText'] = $request->searchText;
        }
        if (!Utils::isUnset($request->searchTypes)) {
            $body['SearchTypes'] = $request->searchTypes;
        }
        if (!Utils::isUnset($request->sortCriteria)) {
            $body['SortCriteria'] = $request->sortCriteria;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchAcrossCatalog',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/search/search-across-catalog',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchAcrossCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DLF 跨Catalog检索元数据
     *  *
     * @param SearchAcrossCatalogRequest $request SearchAcrossCatalogRequest
     *
     * @return SearchAcrossCatalogResponse SearchAcrossCatalogResponse
     */
    public function searchAcrossCatalog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchAcrossCatalogWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 停止元数据迁移任务
     *  *
     * @param StopMigrationWorkflowRequest $request StopMigrationWorkflowRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StopMigrationWorkflowResponse StopMigrationWorkflowResponse
     */
    public function stopMigrationWorkflowWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopMigrationWorkflow',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/migration/workflow/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopMigrationWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止元数据迁移任务
     *  *
     * @param StopMigrationWorkflowRequest $request StopMigrationWorkflowRequest
     *
     * @return StopMigrationWorkflowResponse StopMigrationWorkflowResponse
     */
    public function stopMigrationWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopMigrationWorkflowWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitQueryRequest $request SubmitQueryRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitQueryResponse SubmitQueryResponse
     */
    public function submitQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['catalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->sql)) {
            $body['sql'] = $request->sql;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitQuery',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/query/submitQueryRequestBody',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitQueryRequest $request SubmitQueryRequest
     *
     * @return SubmitQueryResponse SubmitQueryResponse
     */
    public function submitQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary unlock
     *  *
     * @param UnLockRequest  $request UnLockRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return UnLockResponse UnLockResponse
     */
    public function unLockWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lockId)) {
            $query['LockId'] = $request->lockId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnLock',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/locks',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary unlock
     *  *
     * @param UnLockRequest $request UnLockRequest
     *
     * @return UnLockResponse UnLockResponse
     */
    public function unLock($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unLockWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新数据湖Catalog
     *  *
     * @param UpdateCatalogRequest $request UpdateCatalogRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCatalogResponse UpdateCatalogResponse
     */
    public function updateCatalogWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogInput)) {
            $body['CatalogInput'] = $request->catalogInput;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCatalog',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数据湖Catalog
     *  *
     * @param UpdateCatalogRequest $request UpdateCatalogRequest
     *
     * @return UpdateCatalogResponse UpdateCatalogResponse
     */
    public function updateCatalog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCatalogWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取数据湖配置
     *  *
     * @param UpdateCatalogSettingsRequest $request UpdateCatalogSettingsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCatalogSettingsResponse UpdateCatalogSettingsResponse
     */
    public function updateCatalogSettingsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->catalogSettings)) {
            $body['CatalogSettings'] = $request->catalogSettings;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCatalogSettings',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/settings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCatalogSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据湖配置
     *  *
     * @param UpdateCatalogSettingsRequest $request UpdateCatalogSettingsRequest
     *
     * @return UpdateCatalogSettingsResponse UpdateCatalogSettingsResponse
     */
    public function updateCatalogSettings($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCatalogSettingsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Update database
     *  *
     * @param UpdateDatabaseRequest $request UpdateDatabaseRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDatabaseResponse UpdateDatabaseResponse
     */
    public function updateDatabaseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseInput)) {
            $body['DatabaseInput'] = $request->databaseInput;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDatabase',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update database
     *  *
     * @param UpdateDatabaseRequest $request UpdateDatabaseRequest
     *
     * @return UpdateDatabaseResponse UpdateDatabaseResponse
     */
    public function updateDatabase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatabaseWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary update function
     *  *
     * @param UpdateFunctionRequest $request UpdateFunctionRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFunctionResponse UpdateFunctionResponse
     */
    public function updateFunctionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->functionInput)) {
            $body['FunctionInput'] = $request->functionInput;
        }
        if (!Utils::isUnset($request->functionName)) {
            $body['FunctionName'] = $request->functionName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunction',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/functions',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary update function
     *  *
     * @param UpdateFunctionRequest $request UpdateFunctionRequest
     *
     * @return UpdateFunctionResponse UpdateFunctionResponse
     */
    public function updateFunction($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary update partition columnstatistics
     *  *
     * @param UpdatePartitionColumnStatisticsRequest $request UpdatePartitionColumnStatisticsRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePartitionColumnStatisticsResponse UpdatePartitionColumnStatisticsResponse
     */
    public function updatePartitionColumnStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->updateTablePartitionColumnStatisticsRequest),
        ]);
        $params = new Params([
            'action'      => 'UpdatePartitionColumnStatistics',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePartitionColumnStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary update partition columnstatistics
     *  *
     * @param UpdatePartitionColumnStatisticsRequest $request UpdatePartitionColumnStatisticsRequest
     *
     * @return UpdatePartitionColumnStatisticsResponse UpdatePartitionColumnStatisticsResponse
     */
    public function updatePartitionColumnStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePartitionColumnStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 赋予Principal资源的权限
     *  *
     * @param UpdatePermissionsRequest $request UpdatePermissionsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePermissionsResponse UpdatePermissionsResponse
     */
    public function updatePermissionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accesses)) {
            $body['Accesses'] = $request->accesses;
        }
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->delegateAccesses)) {
            $body['DelegateAccesses'] = $request->delegateAccesses;
        }
        if (!Utils::isUnset($request->metaResource)) {
            $body['MetaResource'] = $request->metaResource;
        }
        if (!Utils::isUnset($request->principal)) {
            $body['Principal'] = $request->principal;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePermissions',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/permissions/',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 赋予Principal资源的权限
     *  *
     * @param UpdatePermissionsRequest $request UpdatePermissionsRequest
     *
     * @return UpdatePermissionsResponse UpdatePermissionsResponse
     */
    public function updatePermissions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePermissionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改Location
     *  *
     * @param UpdateRegisteredLocationRequest $request UpdateRegisteredLocationRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRegisteredLocationResponse UpdateRegisteredLocationResponse
     */
    public function updateRegisteredLocationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inventoryCollectEnabled)) {
            $body['InventoryCollectEnabled'] = $request->inventoryCollectEnabled;
        }
        if (!Utils::isUnset($request->locationId)) {
            $body['LocationId'] = $request->locationId;
        }
        if (!Utils::isUnset($request->ossLogCollectEnabled)) {
            $body['OssLogCollectEnabled'] = $request->ossLogCollectEnabled;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRegisteredLocation',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/locations',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRegisteredLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改Location
     *  *
     * @param UpdateRegisteredLocationRequest $request UpdateRegisteredLocationRequest
     *
     * @return UpdateRegisteredLocationResponse UpdateRegisteredLocationResponse
     */
    public function updateRegisteredLocation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRegisteredLocationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新角色
     *  *
     * @param UpdateRoleRequest $request UpdateRoleRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRoleResponse UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleInput)) {
            $body['RoleInput'] = $request->roleInput;
        }
        if (!Utils::isUnset($request->roleName)) {
            $body['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRole',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/roles',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新角色
     *  *
     * @param UpdateRoleRequest $request UpdateRoleRequest
     *
     * @return UpdateRoleResponse UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新Role中的Users
     *  *
     * @param UpdateRoleUsersRequest $request UpdateRoleUsersRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRoleUsersResponse UpdateRoleUsersResponse
     */
    public function updateRoleUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleName)) {
            $body['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRoleUsers',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/auth/updateroleusers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRoleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新Role中的Users
     *  *
     * @param UpdateRoleUsersRequest $request UpdateRoleUsersRequest
     *
     * @return UpdateRoleUsersResponse UpdateRoleUsersResponse
     */
    public function updateRoleUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRoleUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary update table
     *  *
     * @param UpdateTableRequest $request UpdateTableRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTableResponse UpdateTableResponse
     */
    public function updateTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->allowPartitionKeyChange)) {
            $body['AllowPartitionKeyChange'] = $request->allowPartitionKeyChange;
        }
        if (!Utils::isUnset($request->catalogId)) {
            $body['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->isAsync)) {
            $body['IsAsync'] = $request->isAsync;
        }
        if (!Utils::isUnset($request->skipArchive)) {
            $body['SkipArchive'] = $request->skipArchive;
        }
        if (!Utils::isUnset($request->tableInput)) {
            $body['TableInput'] = $request->tableInput;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTable',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary update table
     *  *
     * @param UpdateTableRequest $request UpdateTableRequest
     *
     * @return UpdateTableResponse UpdateTableResponse
     */
    public function updateTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary update table columnstatistics
     *  *
     * @param UpdateTableColumnStatisticsRequest $request UpdateTableColumnStatisticsRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTableColumnStatisticsResponse UpdateTableColumnStatisticsResponse
     */
    public function updateTableColumnStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->updateTablePartitionColumnStatisticsRequest),
        ]);
        $params = new Params([
            'action'      => 'UpdateTableColumnStatistics',
            'version'     => '2020-07-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/metastore/catalogs/databases/tables/columnstatistics',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTableColumnStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary update table columnstatistics
     *  *
     * @param UpdateTableColumnStatisticsRequest $request UpdateTableColumnStatisticsRequest
     *
     * @return UpdateTableColumnStatisticsResponse UpdateTableColumnStatisticsResponse
     */
    public function updateTableColumnStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTableColumnStatisticsWithOptions($request, $headers, $runtime);
    }
}
