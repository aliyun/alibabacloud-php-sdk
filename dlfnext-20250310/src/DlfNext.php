<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterCatalogRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterDatabaseRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterDatabaseResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterTableRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterTableResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\BatchGrantPermissionsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\BatchGrantPermissionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\BatchRevokePermissionsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\BatchRevokePermissionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateCatalogRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateTableRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateTableResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropDatabaseResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropTableResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogByIdResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryTrendRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryTrendResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogTokenResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetDatabaseResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetDatabaseSummaryResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRegionStatusResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetTableResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetTableSummaryResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetUserRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetUserResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GrantRoleToUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GrantRoleToUsersResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListCatalogsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListCatalogsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListDatabaseDetailsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListDatabaseDetailsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListDatabasesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPartitionSummariesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPartitionSummariesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPermissionsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPermissionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRolesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRolesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRoleUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRoleUsersResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListTableDetailsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListTableDetailsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListTablesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListTablesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListUserRolesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListUserRolesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListUsersResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\RevokeRoleFromUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\RevokeRoleFromUsersResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\SubscribeResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\UpdateRoleUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\UpdateRoleUsersResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class DlfNext extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dlfnext', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 更新数据目录
     *  *
     * @param string              $catalog
     * @param AlterCatalogRequest $request AlterCatalogRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AlterCatalogResponse AlterCatalogResponse
     */
    public function alterCatalogWithOptions($catalog, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->removals)) {
            $body['removals'] = $request->removals;
        }
        if (!Utils::isUnset($request->updates)) {
            $body['updates'] = $request->updates;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterCatalog',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/catalogs/' . OpenApiUtilClient::getEncodeParam($catalog) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AlterCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数据目录
     *  *
     * @param string              $catalog
     * @param AlterCatalogRequest $request AlterCatalogRequest
     *
     * @return AlterCatalogResponse AlterCatalogResponse
     */
    public function alterCatalog($catalog, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterCatalogWithOptions($catalog, $request, $headers, $runtime);
    }

    /**
     * @summary 更新数据库
     *  *
     * @param string               $catalogId
     * @param string               $database
     * @param AlterDatabaseRequest $request   AlterDatabaseRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return AlterDatabaseResponse AlterDatabaseResponse
     */
    public function alterDatabaseWithOptions($catalogId, $database, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->removals)) {
            $body['removals'] = $request->removals;
        }
        if (!Utils::isUnset($request->updates)) {
            $body['updates'] = $request->updates;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterDatabase',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AlterDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数据库
     *  *
     * @param string               $catalogId
     * @param string               $database
     * @param AlterDatabaseRequest $request   AlterDatabaseRequest
     *
     * @return AlterDatabaseResponse AlterDatabaseResponse
     */
    public function alterDatabase($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterDatabaseWithOptions($catalogId, $database, $request, $headers, $runtime);
    }

    /**
     * @summary 更改Table
     *  *
     * @param string            $catalogId
     * @param string            $database
     * @param string            $table
     * @param AlterTableRequest $request   AlterTableRequest
     * @param string[]          $headers   map
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return AlterTableResponse AlterTableResponse
     */
    public function alterTableWithOptions($catalogId, $database, $table, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changes)) {
            $body['changes'] = $request->changes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterTable',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return AlterTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更改Table
     *  *
     * @param string            $catalogId
     * @param string            $database
     * @param string            $table
     * @param AlterTableRequest $request   AlterTableRequest
     *
     * @return AlterTableResponse AlterTableResponse
     */
    public function alterTable($catalogId, $database, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterTableWithOptions($catalogId, $database, $table, $request, $headers, $runtime);
    }

    /**
     * @summary 批量授权
     *  *
     * @param string                       $catalogId
     * @param BatchGrantPermissionsRequest $request   BatchGrantPermissionsRequest
     * @param string[]                     $headers   map
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return BatchGrantPermissionsResponse BatchGrantPermissionsResponse
     */
    public function batchGrantPermissionsWithOptions($catalogId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->permissions)) {
            $body['permissions'] = $request->permissions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchGrantPermissions',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/permissions/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/batchgrant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchGrantPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量授权
     *  *
     * @param string                       $catalogId
     * @param BatchGrantPermissionsRequest $request   BatchGrantPermissionsRequest
     *
     * @return BatchGrantPermissionsResponse BatchGrantPermissionsResponse
     */
    public function batchGrantPermissions($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGrantPermissionsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * @summary 批量取消授权
     *  *
     * @param string                        $catalogId
     * @param BatchRevokePermissionsRequest $request   BatchRevokePermissionsRequest
     * @param string[]                      $headers   map
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return BatchRevokePermissionsResponse BatchRevokePermissionsResponse
     */
    public function batchRevokePermissionsWithOptions($catalogId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->permissions)) {
            $body['permissions'] = $request->permissions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchRevokePermissions',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/permissions/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/batchrevoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchRevokePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量取消授权
     *  *
     * @param string                        $catalogId
     * @param BatchRevokePermissionsRequest $request   BatchRevokePermissionsRequest
     *
     * @return BatchRevokePermissionsResponse BatchRevokePermissionsResponse
     */
    public function batchRevokePermissions($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchRevokePermissionsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建数据目录
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
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->options)) {
            $body['options'] = $request->options;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCatalog',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/catalogs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据目录
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
     * @summary 创建数据库
     *  *
     * @param string                $catalogId
     * @param CreateDatabaseRequest $request   CreateDatabaseRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($catalogId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->options)) {
            $body['options'] = $request->options;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDatabase',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据库
     *  *
     * @param string                $catalogId
     * @param CreateDatabaseRequest $request   CreateDatabaseRequest
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabase($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatabaseWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建角色
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
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->roleName)) {
            $body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRole',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建角色
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
     * @summary 创建表
     *  *
     * @param string             $catalogId
     * @param string             $database
     * @param CreateTableRequest $request   CreateTableRequest
     * @param string[]           $headers   map
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateTableResponse CreateTableResponse
     */
    public function createTableWithOptions($catalogId, $database, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->identifier)) {
            $body['identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->schema)) {
            $body['schema'] = $request->schema;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTable',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/tables',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建表
     *  *
     * @param string             $catalogId
     * @param string             $database
     * @param CreateTableRequest $request   CreateTableRequest
     *
     * @return CreateTableResponse CreateTableResponse
     */
    public function createTable($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTableWithOptions($catalogId, $database, $request, $headers, $runtime);
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
        if (!Utils::isUnset($request->rolePrincipal)) {
            $query['rolePrincipal'] = $request->rolePrincipal;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRole',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
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
     * @summary 查询 DLF 开通地域
     *  *
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
            'action' => 'DescribeRegions',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/service/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询 DLF 开通地域
     *  *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @summary 创建数据湖Catalog
     *  *
     * @param string         $catalog
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DropCatalogResponse DropCatalogResponse
     */
    public function dropCatalogWithOptions($catalog, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DropCatalog',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/catalogs/' . OpenApiUtilClient::getEncodeParam($catalog) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DropCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据湖Catalog
     *  *
     * @param string $catalog
     *
     * @return DropCatalogResponse DropCatalogResponse
     */
    public function dropCatalog($catalog)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropCatalogWithOptions($catalog, $headers, $runtime);
    }

    /**
     * @summary 删除数据库
     *  *
     * @param string         $catalogId
     * @param string         $database
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DropDatabaseResponse DropDatabaseResponse
     */
    public function dropDatabaseWithOptions($catalogId, $database, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DropDatabase',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DropDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据库
     *  *
     * @param string $catalogId
     * @param string $database
     *
     * @return DropDatabaseResponse DropDatabaseResponse
     */
    public function dropDatabase($catalogId, $database)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropDatabaseWithOptions($catalogId, $database, $headers, $runtime);
    }

    /**
     * @summary 删除表
     *  *
     * @param string         $catalogId
     * @param string         $database
     * @param string         $table
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DropTableResponse DropTableResponse
     */
    public function dropTableWithOptions($catalogId, $database, $table, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DropTable',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DropTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除表
     *  *
     * @param string $catalogId
     * @param string $database
     * @param string $table
     *
     * @return DropTableResponse DropTableResponse
     */
    public function dropTable($catalogId, $database, $table)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropTableWithOptions($catalogId, $database, $table, $headers, $runtime);
    }

    /**
     * @summary 查看数据湖Catalog
     *  *
     * @param string         $catalog
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCatalogResponse GetCatalogResponse
     */
    public function getCatalogWithOptions($catalog, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCatalog',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/catalogs/' . OpenApiUtilClient::getEncodeParam($catalog) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看数据湖Catalog
     *  *
     * @param string $catalog
     *
     * @return GetCatalogResponse GetCatalogResponse
     */
    public function getCatalog($catalog)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogWithOptions($catalog, $headers, $runtime);
    }

    /**
     * @summary 查看数据湖Catalog
     *  *
     * @param string         $id
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCatalogByIdResponse GetCatalogByIdResponse
     */
    public function getCatalogByIdWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCatalogById',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/catalogs/id/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看数据湖Catalog
     *  *
     * @param string $id
     *
     * @return GetCatalogByIdResponse GetCatalogByIdResponse
     */
    public function getCatalogById($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogByIdWithOptions($id, $headers, $runtime);
    }

    /**
     * @summary 查看表
     *  *
     * @param string         $catalogId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetCatalogSummaryResponse GetCatalogSummaryResponse
     */
    public function getCatalogSummaryWithOptions($catalogId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCatalogSummary',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/storage-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看表
     *  *
     * @param string $catalogId
     *
     * @return GetCatalogSummaryResponse GetCatalogSummaryResponse
     */
    public function getCatalogSummary($catalogId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogSummaryWithOptions($catalogId, $headers, $runtime);
    }

    /**
     * @summary 查看表
     *  *
     * @param string                        $catalogId
     * @param GetCatalogSummaryTrendRequest $request   GetCatalogSummaryTrendRequest
     * @param string[]                      $headers   map
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetCatalogSummaryTrendResponse GetCatalogSummaryTrendResponse
     */
    public function getCatalogSummaryTrendWithOptions($catalogId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCatalogSummaryTrend',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/storage-summary/trend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogSummaryTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看表
     *  *
     * @param string                        $catalogId
     * @param GetCatalogSummaryTrendRequest $request   GetCatalogSummaryTrendRequest
     *
     * @return GetCatalogSummaryTrendResponse GetCatalogSummaryTrendResponse
     */
    public function getCatalogSummaryTrend($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogSummaryTrendWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取数据湖Catalog的临时访问凭证
     *  *
     * @param string         $catalog
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCatalogTokenResponse GetCatalogTokenResponse
     */
    public function getCatalogTokenWithOptions($catalog, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCatalogToken',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/catalogs/' . OpenApiUtilClient::getEncodeParam($catalog) . '/token',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据湖Catalog的临时访问凭证
     *  *
     * @param string $catalog
     *
     * @return GetCatalogTokenResponse GetCatalogTokenResponse
     */
    public function getCatalogToken($catalog)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogTokenWithOptions($catalog, $headers, $runtime);
    }

    /**
     * @summary 查看数据库
     *  *
     * @param string         $catalogId
     * @param string         $database
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseResponse GetDatabaseResponse
     */
    public function getDatabaseWithOptions($catalogId, $database, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDatabase',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看数据库
     *  *
     * @param string $catalogId
     * @param string $database
     *
     * @return GetDatabaseResponse GetDatabaseResponse
     */
    public function getDatabase($catalogId, $database)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseWithOptions($catalogId, $database, $headers, $runtime);
    }

    /**
     * @summary 查看表
     *  *
     * @param string         $catalogId
     * @param string         $database
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseSummaryResponse GetDatabaseSummaryResponse
     */
    public function getDatabaseSummaryWithOptions($catalogId, $database, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDatabaseSummary',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/storage-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatabaseSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看表
     *  *
     * @param string $catalogId
     * @param string $database
     *
     * @return GetDatabaseSummaryResponse GetDatabaseSummaryResponse
     */
    public function getDatabaseSummary($catalogId, $database)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseSummaryWithOptions($catalogId, $database, $headers, $runtime);
    }

    /**
     * @summary 查询 DLF 当前地域开通状态
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRegionStatusResponse GetRegionStatusResponse
     */
    public function getRegionStatusWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRegionStatus',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/service/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询 DLF 当前地域开通状态
     *  *
     * @return GetRegionStatusResponse GetRegionStatusResponse
     */
    public function getRegionStatus()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionStatusWithOptions($headers, $runtime);
    }

    /**
     * @summary 获取角色
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
        if (!Utils::isUnset($request->rolePrincipal)) {
            $query['rolePrincipal'] = $request->rolePrincipal;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRole',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取角色
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
     * @summary 查看表
     *  *
     * @param string         $catalogId
     * @param string         $database
     * @param string         $table
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetTableResponse GetTableResponse
     */
    public function getTableWithOptions($catalogId, $database, $table, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTable',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看表
     *  *
     * @param string $catalogId
     * @param string $database
     * @param string $table
     *
     * @return GetTableResponse GetTableResponse
     */
    public function getTable($catalogId, $database, $table)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableWithOptions($catalogId, $database, $table, $headers, $runtime);
    }

    /**
     * @summary 查看表
     *  *
     * @param string         $catalogId
     * @param string         $database
     * @param string         $table
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetTableSummaryResponse GetTableSummaryResponse
     */
    public function getTableSummaryWithOptions($catalogId, $database, $table, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTableSummary',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '/storage-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看表
     *  *
     * @param string $catalogId
     * @param string $database
     * @param string $table
     *
     * @return GetTableSummaryResponse GetTableSummaryResponse
     */
    public function getTableSummary($catalogId, $database, $table)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableSummaryWithOptions($catalogId, $database, $table, $headers, $runtime);
    }

    /**
     * @summary 获取用户
     *  *
     * @param GetUserRequest $request GetUserRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userPrincipal)) {
            $query['userPrincipal'] = $request->userPrincipal;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户
     *  *
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量授予角色权限给用户
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
        if (!Utils::isUnset($request->rolePrincipal)) {
            $body['rolePrincipal'] = $request->rolePrincipal;
        }
        if (!Utils::isUnset($request->userPrincipals)) {
            $body['userPrincipals'] = $request->userPrincipals;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantRoleToUsers',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles/grant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return GrantRoleToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量授予角色权限给用户
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
     * @summary 查看数据目录列表
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
        if (!Utils::isUnset($request->catalogNamePattern)) {
            $query['catalogNamePattern'] = $request->catalogNamePattern;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCatalogs',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/catalogs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCatalogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看数据目录列表
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
     * @summary 查看数据库列表
     *  *
     * @param string                     $catalogId
     * @param ListDatabaseDetailsRequest $request   ListDatabaseDetailsRequest
     * @param string[]                   $headers   map
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListDatabaseDetailsResponse ListDatabaseDetailsResponse
     */
    public function listDatabaseDetailsWithOptions($catalogId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseNamePattern)) {
            $query['databaseNamePattern'] = $request->databaseNamePattern;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatabaseDetails',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/database-details',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatabaseDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看数据库列表
     *  *
     * @param string                     $catalogId
     * @param ListDatabaseDetailsRequest $request   ListDatabaseDetailsRequest
     *
     * @return ListDatabaseDetailsResponse ListDatabaseDetailsResponse
     */
    public function listDatabaseDetails($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatabaseDetailsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * @summary 查看数据库列表
     *  *
     * @param string               $catalogId
     * @param ListDatabasesRequest $request   ListDatabasesRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabasesWithOptions($catalogId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseNamePattern)) {
            $query['databaseNamePattern'] = $request->databaseNamePattern;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatabases',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看数据库列表
     *  *
     * @param string               $catalogId
     * @param ListDatabasesRequest $request   ListDatabasesRequest
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabases($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatabasesWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * @summary 查看表
     *  *
     * @param string                        $catalogId
     * @param string                        $database
     * @param string                        $table
     * @param ListPartitionSummariesRequest $request   ListPartitionSummariesRequest
     * @param string[]                      $headers   map
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListPartitionSummariesResponse ListPartitionSummariesResponse
     */
    public function listPartitionSummariesWithOptions($catalogId, $database, $table, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->partitionNamePattern)) {
            $query['partitionNamePattern'] = $request->partitionNamePattern;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPartitionSummaries',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '/partitions/storage-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPartitionSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看表
     *  *
     * @param string                        $catalogId
     * @param string                        $database
     * @param string                        $table
     * @param ListPartitionSummariesRequest $request   ListPartitionSummariesRequest
     *
     * @return ListPartitionSummariesResponse ListPartitionSummariesResponse
     */
    public function listPartitionSummaries($catalogId, $database, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPartitionSummariesWithOptions($catalogId, $database, $table, $request, $headers, $runtime);
    }

    /**
     * @summary 获取指定资源或指定Principal的权限信息
     *  *
     * @param string                 $catalogId
     * @param ListPermissionsRequest $request   ListPermissionsRequest
     * @param string[]               $headers   map
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListPermissionsResponse ListPermissionsResponse
     */
    public function listPermissionsWithOptions($catalogId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->database)) {
            $query['database'] = $request->database;
        }
        if (!Utils::isUnset($request->function_)) {
            $query['function'] = $request->function_;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->principal)) {
            $query['principal'] = $request->principal;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->table)) {
            $query['table'] = $request->table;
        }
        if (!Utils::isUnset($request->view)) {
            $query['view'] = $request->view;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissions',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/permissions/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定资源或指定Principal的权限信息
     *  *
     * @param string                 $catalogId
     * @param ListPermissionsRequest $request   ListPermissionsRequest
     *
     * @return ListPermissionsResponse ListPermissionsResponse
     */
    public function listPermissions($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取角色用户列表
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
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->rolePrincipal)) {
            $query['rolePrincipal'] = $request->rolePrincipal;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoleUsers',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles/users/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRoleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取角色用户列表
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
     * @summary 获取角色列表
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
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取角色列表
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
     * @summary 查看表详情列表
     *  *
     * @param string                  $catalogId
     * @param string                  $database
     * @param ListTableDetailsRequest $request   ListTableDetailsRequest
     * @param string[]                $headers   map
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListTableDetailsResponse ListTableDetailsResponse
     */
    public function listTableDetailsWithOptions($catalogId, $database, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->tableNamePattern)) {
            $query['tableNamePattern'] = $request->tableNamePattern;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTableDetails',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/table-details',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTableDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看表详情列表
     *  *
     * @param string                  $catalogId
     * @param string                  $database
     * @param ListTableDetailsRequest $request   ListTableDetailsRequest
     *
     * @return ListTableDetailsResponse ListTableDetailsResponse
     */
    public function listTableDetails($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableDetailsWithOptions($catalogId, $database, $request, $headers, $runtime);
    }

    /**
     * @summary 查看表详情列表
     *  *
     * @param string            $catalogId
     * @param string            $database
     * @param ListTablesRequest $request   ListTablesRequest
     * @param string[]          $headers   map
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListTablesResponse ListTablesResponse
     */
    public function listTablesWithOptions($catalogId, $database, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->tableNamePattern)) {
            $query['tableNamePattern'] = $request->tableNamePattern;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTables',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . OpenApiUtilClient::getEncodeParam($catalogId) . '/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看表详情列表
     *  *
     * @param string            $catalogId
     * @param string            $database
     * @param ListTablesRequest $request   ListTablesRequest
     *
     * @return ListTablesResponse ListTablesResponse
     */
    public function listTables($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTablesWithOptions($catalogId, $database, $request, $headers, $runtime);
    }

    /**
     * @summary 获取用户角色列表
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
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->userPrincipal)) {
            $query['userPrincipal'] = $request->userPrincipal;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserRoles',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/users/roles/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户角色列表
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
     * @summary 获取用户列表
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['pageToken'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['userName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/users/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户列表
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量取消授予角色权限给用户
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
        if (!Utils::isUnset($request->rolePrincipal)) {
            $body['rolePrincipal'] = $request->rolePrincipal;
        }
        if (!Utils::isUnset($request->userPrincipals)) {
            $body['userPrincipals'] = $request->userPrincipals;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeRoleFromUsers',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles/revoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return RevokeRoleFromUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量取消授予角色权限给用户
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
     * @summary 订阅当前地域的 DLF
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SubscribeResponse SubscribeResponse
     */
    public function subscribeWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'Subscribe',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/service/subscribe',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return SubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 订阅当前地域的 DLF
     *  *
     * @return SubscribeResponse SubscribeResponse
     */
    public function subscribe()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->subscribeWithOptions($headers, $runtime);
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
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->rolePrincipal)) {
            $body['rolePrincipal'] = $request->rolePrincipal;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRole',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
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
     * @summary 更新角色用户
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
        if (!Utils::isUnset($request->rolePrincipal)) {
            $body['rolePrincipal'] = $request->rolePrincipal;
        }
        if (!Utils::isUnset($request->userPrincipals)) {
            $body['userPrincipals'] = $request->userPrincipals;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRoleUsers',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/roles/users',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateRoleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新角色用户
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
}
